<?php 
		$db = mysqli_connect('localhost', 'root', '', 'dacs'); 
 ?>
 <?php 
 	
 		$image = addcslashes($_FILES['imagesong']['tmp_name']);
 		$name = addcslashes($_FILES['imagesong']['name']);
 		$image = file_get_contents($image);
 		$image = base64_encode($image);
 		$namesong = $_POST['namesong'];
	 	$urlnamesong = $_POST['urlnamesong'];
	 	$artist = $_POST['artist'];
 		$query_add_song = "INSERT INTO song (id,name,url_name,artist,image,audio,views,dowloads) 
							VALUES (NULL,'$namesong','$urlnamesong','$artist','$name','$audio','0','0') ";
		$result_add_song = mysqli_query($db,$query_add_song);
		if ($result_add_song) {
			echo "ok";
		}else{
			echo "not";
		}
 	
 	
	

  ?>