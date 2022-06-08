<?php  $db = mysqli_connect('localhost', 'root', '', 'dacs');?>
<?php 
	
	$query = 'DELETE  FROM comment WHERE id = '.$_GET["idcomment"].'';
	$result = mysqli_query($db,$query);
	if($result){
		header("refresh:1,url=admin.php");
	}else{
		echo "Xóa không thành công";
	}
 ?>
 <?php 
	
	$query1 = 'DELETE  FROM account WHERE id = '.$_GET["idaccount"].'';
	$result1 = mysqli_query($db,$query1);
	if($result1){
		header("refresh:1,url=admin.php");
	}else{
		echo "Xóa không thành công";
	}
 ?>
 <?php 
	$query2 = 'DELETE  FROM lyrics WHERE id = '.$_GET["idlyric"].'';
	$result2 = mysqli_query($db,$query2);
	if($result2){
		header("refresh:1,url=admin.php");
	}else{
		echo "Xóa không thành công";
	}
 ?>
 <?php 
	$query3 = 'DELETE  FROM song WHERE id = '.$_GET["idsong"].'';
	$result3 = mysqli_query($db,$query3);
	if($result){
		header("refresh:1,url=admin.php");
	}else{
		echo "Xóa không thành công";
	}
 ?>