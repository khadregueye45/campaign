	<?php
	 
	class model {
		
	    function __construct() {
	         
	    }
		
	    public function get_registation_ids($connect_db , $where) {
				$sql = "SELECT c.client_reg_id as reg_id , c.client_email as email  
				        FROM   clients c ".$where;
			
				$req = mysqli_query($connect_db,$sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysqli_error());
				$registation_ids = array(); 
				while ( $row = mysqli_fetch_assoc($req) ){
						if ($row['email']) {
							array_push($registation_ids , $row['email'] );
						}			
					}
	         return $registation_ids ;  
	    }
	 
	}
	 
	?>
