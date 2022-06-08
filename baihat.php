<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	 <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  	<script src="js/index.js"></script>
<link rel="stylesheet" type="text/css" href="css/baihat.css">
  	<link rel="stylesheet" href="css/index.css">
</head>
<body>
	<div class="menumain">
    <?php
 		include("menu.php");
    ?>
    <div class="clear"></div>
 	</div>
 	<div class="contentt">
 		<div class="leftbaihat">
 			<div class="countrytheme">
 				<div class="countrytheme1">
 					<h5><a href="">Việt Nam</a></h5>
 				</div>
 				<div class="countrytheme1">
 					<p><a href="">> Nhạc trẻ</a></p>
 					<p><a href="">> Nhạc trữ tình</a></p>
 				</div>
 				<div class="countrytheme1">
 					<p><a href="">> Quê hương</a></p>
 					<p><a href="">> Nhạc cách mạng</a></p>
 				</div>
 				<div class="countrytheme1">
 					<p><a href="">> Rap Việt</a></p>
 					<p><a href="">> Hip hop Việt</a></p>
 				</div>
 				<div class="countrytheme1">
 					<p><a href="">> Rock Việt</a></p>
 					
 				</div>
 				<div class="clear"></div>
 			</div>
 			<div class="countrytheme">
 				<div class="countrytheme1">
 					<h5><a href="">Âu mỹ</a></h5>
 				</div>
 				<div class="countrytheme1">
 					<p><a href="">> POP</a></p>
 					<p><a href="">> ROCK</a></p>
 				</div>
 				<div class="countrytheme1">
 					<p><a href="">> RAP/HIP HOP</a></p>
 					<p><a href="">> Country</a></p>
 				</div>
 				<div class="countrytheme1">
 					<p><a href="">> Electronic</a></p>
 					<p><a href="">> Dance</a></p>
 				</div>
 				<div class="countrytheme1">
 					<p><a href="">> R&B</a></p>
 					<p><a href="">> Soul</a></p>
 					
 				</div>
 				<div class="clear"></div>
 			</div>
 			<div class="countrytheme">
 				<div class="countrytheme1">
 					<h5><a href="">Châu á</a></h5>
 				</div>
 				<div class="countrytheme1">
 					<p><a href="">> Hàn Quốc</a></p>
 					
 				</div>
 				<div class="countrytheme1">
 					<p><a href="">> Nhật Bản</a></p>
 					
 				</div>
 				<div class="countrytheme1">
 					<p><a href="">> Hoa Ngữ</a></p>
 				
 				</div>
 				<div class="clear"></div>
 			</div>
 			<div class="songtheme">
 				<h4>HOT MUSICS</h4>
 				<?php 
					$db = mysqli_connect('localhost', 'root', '', 'dacs'); 
 				?>
 				<?php 
     		$query1 = "SELECT * FROM song LIMIT 0,15";
     		$result1 = mysqli_query($db,$query1);
     		while ($row=mysqli_fetch_assoc($result1)) {
     			echo '
     				<div class="songtheme1">
 					<div class="songthemeimage">
 						<a href="music.php?idbaihat=' . $row['id'] .'"><img src="picture/' . $row['image'] .'"></a>
 					</div>
 					<div class="songthemetittle">
 						<h6><a href="music.php?idbaihat=' . $row['id'] .'">' . $row['name']. '</a></h6>
 						<p><a href="">' . $row['artist']. '</a></p>
 					</div>
 					<div class="officalthemme">
 						<p>OFFICAL</p>
 					</div>
 					<div class="iconthemme">
 						<i class="fas fa-share-alt"></i>
						<i class="far fa-window-restore"></i>
						<i class="fas fa-arrow-circle-down"></i>
						<i class="far fa-heart"></i>
 					</div>
 					<div class="clear"></div>
 				</div>
					
     			';
     		}
     	 ?>
 				
 				<div class="clear"></div>
 			</div>
 			<div class="clear"></div>
 		</div>
 		<div class="rightbaihat">
 			
 		</div>
 		<div class="clear"></div>
 	</div>
	<div class="foott" style="background: linear-gradient(135deg, #8254EA 0%, #E86DEC 100%);">
   <?php
    include("footer.php");
    ?>
    <div class="clear"></div>
  </div>
</body>
</html>