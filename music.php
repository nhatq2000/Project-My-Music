
<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Music</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	 <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

	<link rel="stylesheet" href="css/index.css">
	<script src="js/index.js"></script>
	<link rel="stylesheet" type="text/css" href="css/music.css">
</head>
<body>

	<div class="menumain">
    <?php
 		include("menu.php");
    ?>
    <div class="clear"></div>
 	</div>
	<div class="contacts">
	<?php 
		$db = mysqli_connect('localhost', 'root', '', 'dacs'); 
 	?>
 	<?php 
 	if (!isset($_GET["idbaihat"])) {
 		header("location:listnhac.php");
 	}
 	
 	$idsongs = $_GET["idbaihat"];
 	$query_select_song = 'SELECT * FROM song WHERE id = '.$idsongs.'';
 	$result_select_song = mysqli_query($db,$query_select_song);
 	$row_song = mysqli_fetch_array($result_select_song,MYSQLI_ASSOC);

 		$name_song = $row_song["name"];
 		$name_artist = $row_song["artist"];
 		$name_audio = $row_song["audio"];
 		$name_image = $row_song["image"];


 	 ?>
 	<div class="leftt">
 	 <div class="toppic">
			<h3><?php echo $name_song ?></h3>
			<h6>Nhạc sĩ: <a href=""><?php echo $name_artist ?></a></h6>
		</div>
		<div class="music">
			
			<div class="musicleft">
				<img src="picture/<?php echo $name_image ?>" >
			</div>
			<div class="musicright">
				<div class="musictittle">
					<h6><?php echo $name_song ?></h6>
					<p><?php echo $name_artist ?></p>
				</div>
				<div class="rightcenter">
					<h5>no lyric</h5>
				</div>
				<div class="musicaudio">
					<audio controls loop autoplay>
					  <source src="Audio/<?php echo $name_audio ?>" type="audio/ogg">
					  <source src="Audio/<?php echo $name_audio ?>" type="audio/mpeg">
					</audio>
				</div>
			</div>
			<div class="clear"></div>
		</div> 
		
		<div class="musicicon">
			<i class="fas fa-heart">
				<span><a href="">Yêu thích</a></span>
			</i>
			<i class="fas fa-plus-circle">
				<span><a href="">Thêm vào</a></span>
			</i>
			<i class="fas fa-download">
				<span><a href="">Download</a></span>
			</i>
			<i class="fas fa-share-square">
				<span><a href="">Chia sẻ</a></span>
			</i>
		</div>
		<div class="musiclyric">
			<h4>Lời bài hát</h4>
			<?php 
			if (!isset($_GET["idbaihat"])) {
		 		header("location:listnhac.php");
		 	}
		 	$idsongs = $_GET["idbaihat"];
				$query_lyric = 'SELECT * FROM lyrics WHERE song_id = '.$idsongs.'';
				$result_lyric = mysqli_query($db,$query_lyric);
				$row_lyric = mysqli_fetch_array($result_lyric,MYSQLI_ASSOC);
					$song_lyric = $row_lyric["content"];
			 ?>
			<?php echo $song_lyric ?>
			
			
			<p onclick="myFunction()" id="xt" >Xem thêm</p>
		</div>
		
		
		<div class="musiccomment">
			<h3>Bình luận</h3>
			<?php 
				$idbaihat = $_GET['idbaihat'];
				$query_select_comment = 'SELECT comment.content AS content_comment,account.username AS tendangnhap 
				FROM account,comment WHERE comment.account_id = account.id AND comment.song_id = '.$idbaihat.'   ';
				$result_comment = mysqli_query($db,$query_select_comment);
				
				while ($row_comment = mysqli_fetch_assoc($result_comment)) {
					echo '
							<div class="selectcomment">
								<div class="selectimage">
									<img src="picture/ac.jpg">
								</div>
								<div class="selectcontent">
									<h6>'.$row_comment['tendangnhap'].'</h6>
									<p>'.$row_comment['content_comment'].'</p>
								</div>
								<div class="clear"></div>
							</div>
					';
					
				}
			 ?>
			
		
			<?php 
					if (isset($_POST["insert"])) {
							$idbaihat = $_GET['idbaihat'];
							$content = $_POST['subject'];
							$query_comment = "INSERT INTO comment (id,content,date_time,account_id,song_id) 
							VALUES (NULL,'$content','12',".$_SESSION['id'].",'$idbaihat') ";
							mysqli_query($db,$query_comment);
					

						}

			 ?>

			<?php 

				if (isset($_SESSION['username'])) {
					echo '
						 <form method="post"  >
						<textarea id="tweet" name="subject"  style="width: 90%;"></textarea><br>
						
						<button id="insert" type="button" name="insert" style=" background-color: #4CAF50;color: white;padding: 7px 8px;border: none;border-radius: 4px;cursor: pointer;">Bình luận</button>
						</form>
						
					';
						
				}
				else{
					echo '
					
						<textarea id="tweet" name="tweet"  style="width: 90%;"></textarea><br>
						
						<button id="btn_tweet" onclick="batloi();" name="btn_tweet" style=" background-color: #4CAF50;color: white;padding: 7px 8px;border: none;border-radius: 4px;cursor: pointer;">Bình luận</button>
						
					';
				}
			 ?>
			<script type="text/javascript">
				function batloi(){
					alert("Bạn chưa đăng nhập");
				}
			</script>
		</div>
		<div class="album">
			<h3>Hot playlists</h3>
			<?php 
				$query2 = "SELECT * FROM playlists LIMIT 0,4";
				$result2 = mysqli_query($db,$query2);
				while ($row=mysqli_fetch_assoc($result2)) {
					echo'
							<div class="album1">
								<div class="album1image">
									<a href="playlist.php?idplaylist='.$row["id"].'"><img src="'.$row["image"].'"></a>
								</div>
								<div class="album1tittle">
									<a href="playlist.php?idplaylist='.$row["id"].'"><h6>'.$row["name"].'</h6></a>
								</div>
							</div>

					';

				}
			 ?>

			<div class="clear"></div>
		</div>
		<div class="album">
			
			<?php 
				$query2 = "SELECT * FROM playlists LIMIT 5,4";
				$result2 = mysqli_query($db,$query2);
				while ($row=mysqli_fetch_assoc($result2)) {
					echo'
							<div class="album1">
								<div class="album1image">
									<a href=""><img src="'.$row["image"].'"></a>
								</div>
								<div class="album1tittle">
									<a href=""><h6>'.$row["name"].'</h6></a>
								</div>
							</div>

					';

				}
			 ?>
			 
			<div class="clear"></div>
		</div>

	</div>
		<div class="musicnext">
			<div class="nextimage">
				<img src="picture/music.jpg" >
			</div>
			<div class="turno">
				<div class="turnotittle">
					<h3>Nghe tiếp</h3>
				</div>
				<div class="turnof">
					<span>Auto play</span>
					<input type="checkbox" checked data-toggle="toggle" data-size="sm">
				</div>

				<div class="clear"></div>
			</div>
			<?php 
				$query1 = "SELECT * FROM song ORDER BY RAND() LIMIT 0,5";
				$result1 = mysqli_query($db,$query1);
				while ($row=mysqli_fetch_assoc($result1)) {
					
					echo '
					<div class="songnext">
						<div class="songnextimage">
								<a href="music.php?idbaihat=' . $row['id'] .'"><img src="picture/' . $row['image'] .'"></a>
						</div>
						<div class="songnexttittle">
								<a href="music.php?idbaihat=' . $row['id'] .'"><h5>' . $row['name']. '</h5></a>
								<a href=""><p>' . $row['artist']. '</p></a>
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
<div class="foott" style="background: linear-gradient(135deg, #8254EA 0%, #E86DEC 100%);">
   <?php
    include("footer.php");
    ?>
    <div class="clear"></div>
  </div>
<script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("xt");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Xem thêm";
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Rút gọn";
    moreText.style.display = "inline";
  }
}
</script>
<script type="text/javascript">
    

   
  </script>
   <script src="https://code.jquery.com/jquery-2.2.0.js">
  </script>
</body>
</html>

<!-- <p>
				Cuối cùng mỗi cố gắng đều là vô nghĩa<br>
				Tình cảm ngần ấy năm có lẽ đến vậy thôi<br>
				Anh đã buông bỏ rồi dù em yêu nhiều đến nỗi<br>
				Đánh mất chính bản thân đánh mất cả tuổi xuân.<br>

				Người ta thường nói có lẽ do người đến sau<br>
				Là người được yêu và được trân trọng nhiều hơn<br>
				Em không thể sánh với người mà giờ đây anh xem là tất cả<br>
				Trong tình yêu này em như đã thua cuộc khi anh chọn cô ta.<br>

				<span id="dots">...</span>
			</p>
			
			<span id="more">
			<p>
				Anh ta bỏ em rồi trong một chiều mưa rơi<br>
Những nỗi buồn mong cơn mưa hãy cuốn trôi<br>
Chẳng sợ ướt vai vì khi ngoảnh lại<br>
Lòng em từ lâu đã ướt đẫm rồi.<br>
			</p>
			<p>
				Anh ta bỏ em rồi nói buông tay là buông thôi<br>
Hóa ra người không được yêu nổi chính là<br>
Là người thứ ba của người thứ ba<br>
Em không thể làm gì khác nữa rồi anh ơi.<br>
			</p>
			<p>
				Anh ta bỏ em rồi nói buông tay là buông thôi<br>
Hóa ra người không được yêu nổi chính là<br>
Là người thứ ba của người thứ ba<br>
			</p>
			<p>
				Em không thể làm gì khác nữa rồi anh ơi<br>
Không tư cách để hỏi anh đang ở đâu đấy<br>
Người nào hay thấy anh cùng người ấy làm tim em đau biết mấy.<br>
			</p>
			
			</span> -->