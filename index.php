<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Trang chủ</title>
	
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
   
    
  	<script src="js/index.js"></script>

  	<link rel="stylesheet" href="css/index.css">
  	
   
   
</head>
<body>
 	<div class="menumain">
    <?php
 		include("menu.php");
    ?>
    <div class="clear"></div>
 	</div>

 	<div class="slideshoww">
 		<?php
    include("slide.php");
    ?>
 		
 	</div>
  <div class="mainn">
    <?php
    include("playlist1.php");
    ?>
    <div class="clear"></div>
  </div>
  <div class="mainn">
    <?php
    include("playlist2.php");
    ?>
    <div class="clear"></div>
  </div>
  <div class="onemusicc" style="background: white;">
    
     <?php
    include("listnhac.php");
    ?>
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