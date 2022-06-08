<?php 
      	
        
 	 $db = mysqli_connect('localhost', 'root', '', 'dacs');  
		$name = $_POST['name'];
		$image = $_POST['image'];
		$query_comment = "INSERT INTO user_types (id,user_position,description) VALUES (NULL,'$name','$image') ";
		$result_comment = mysqli_query($db,$query_comment);

		if($result_comment){
			echo "string";
		}else{
			echo "not ok";
		}
  ?>




  
   