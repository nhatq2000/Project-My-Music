<?php 
		$db = mysqli_connect('localhost', 'root', '', 'dacs'); 
 ?>
 <?php 
 	$username = $_POST['username'];
 	$psw = $_POST['psw'];
 	$email = $_POST['email'];

 	$query_add_account = "INSERT INTO account (id,username,password,email) 
							VALUES (NULL,'$username','$psw','$email') ";
	$result_add_account = mysqli_query($db,$query_add_account);
	

  ?>
  