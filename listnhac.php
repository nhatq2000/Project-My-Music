<?php 
	$db = mysqli_connect('localhost', 'root', '', 'dacs'); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/listnhac.css">
</head>
<body>
	<div class="onemusic">
		<div class="tt">
			<h1 style="text-align: center;">Bài hát mới</h1>
		</div>
    <div class="onemusic1" style="border-right: 1px dotted gray;">
     <ul class="listnhac">
     	<?php 
     		$query1 = "SELECT * FROM song LIMIT 0,5";
     		$result1 = mysqli_query($db,$query1);
     		while ($row=mysqli_fetch_assoc($result1)) {
     			echo '
     				<li>
							<div class="anh">
								<a href="music.php?idbaihat=' . $row['id'] .'">	<img src="picture/' . $row['image'] .'  "   alt="">
								<div class="clear"></div>
								</a>

							</div>
							<div class="chu">
								<a href="music.php?idbaihat=' . $row['id'] .'">
					      		' . $row['name']. '
					     		 </a>
					     		 	<a href=""><p class="artist">' . $row['artist']. '</p> </a>
							</div>
					      	 <div class="clear"></div>
					  </li>
					
     			';
     		}
     	 ?>
      
    
    </ul>
    </div>
    <div class="onemusic1">
     <ul class="listnhac">
     	
     <?php 
     		$query1 = "SELECT * FROM song LIMIT 5,5";
     		$result1 = mysqli_query($db,$query1);
     		while ($row=mysqli_fetch_assoc($result1)) {
     			echo '
     				<li>
							<div class="anh">
								<a href="music.php?idbaihat=' . $row['id'] .'">	<img src="picture/' . $row['image'] .'  "   alt="">
								<div class="clear"></div>
								</a>

							</div>
							<div class="chu">
								<a href="music.php?idbaihat=' . $row['id'] .'">
					      		' . $row['name']. '
					     		 </a>
					     		 	<a href=""><p class="artist">' . $row['artist']. '</p> </a>
							</div>
					      	 <div class="clear"></div>
					  </li>
					
     			';
     		}
     	 ?>
    </ul>
    </div>
    
    <div class="clear"></div>
  </div>

</body>
</html>
