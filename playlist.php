<?php 
		$db = mysqli_connect('localhost', 'root', '', 'dacs'); 
 ?>
 <?php 
 	if (!isset($_GET["idplaylist"])) {
 		header("location:playlist1.php,playlist2.php");
 	}
 	
 	$idplaylists = $_GET["idplaylist"];
 	$query_select_playlist = 'SELECT * FROM playlists WHERE id = '.$idplaylists.'';
 	$result_select_playlist = mysqli_query($db,$query_select_playlist);
 	$row_playlist = mysqli_fetch_array($result_select_playlist,MYSQLI_ASSOC);
 ?>
 
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  	 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  	 <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  	<script src="js/index.js"></script>
<link rel="stylesheet" type="text/css" href="css/playlist.css">
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
		<div class="playlistleft">
			<div class="nameplaylist">
				<h4><?php echo $row_playlist['name'] ?></h4>
			</div>
			<div class="playlistAudio">
				<div class="Audioimage">
					<img src="<?php echo $row_playlist['image'] ?>">
				</div>
				<div class="Audiosong">
					<div class="Audiosongimage">
						<img src="<?php echo $row_playlist['image'] ?>">
					</div>
					<div class="Audiosongtittle">
						<h6><?php echo $row_playlist['name'] ?></h6>
						<p>(Audio playlist)</p>
					</div>
					<div class="songplaylist">
						 <audio src="" controls id="audioPlayer"></audio>
					</div>
				</div>
				<div class="clear"></div>
			</div>
			<div class="allsong">
				<ol id="playlist">
	<?php 
			if (!isset($_GET["idplaylist"])) {
			 		header("location:playlist1.php,playlist2.php");
			 	}
			 	$idplaylists = $_GET["idplaylist"];
			 	$query_playlist_songs = 'SELECT playlists_songs.id AS id_playlists_songs, song.id AS id_song, song.name AS name_song, song.audio AS audio_song, song.artist AS artist_song FROM playlists_songs,song WHERE playlists_songs.song_id = song.id AND playlists_songs.playlists_id = '.$idplaylists.'  ';
			 	$result_playlists_songs = mysqli_query($db,$query_playlist_songs);

			 		$i = 1;
			 		while($row_playlist_song = mysqli_fetch_assoc($result_playlists_songs)){
			 			if($i == 1){
			 				echo '
								<li class="current-song">
										<a href="Audio/'.$row_playlist_song['audio_song'].'">
											<h6>'.$row_playlist_song['name_song'].' - 
												<span>'.$row_playlist_song['artist_song'].'
													<i class="fas fa-share-alt"></i>
													<i class="far fa-window-restore"></i>
													<i class="fas fa-arrow-circle-down"></i>
													<i class="far fa-heart"></i>
												</span>
											</h6>
										</a>
								</li>
			 				';
			 				}
			 			else{
			 				echo '
								<li>
									<a href="Audio/'.$row_playlist_song['audio_song'].'">
										<h6>'.$row_playlist_song['name_song'].' - 
											<span>'.$row_playlist_song['artist_song'].'
												<i class="fas fa-share-alt"></i>
												<i class="far fa-window-restore"></i>
												<i class="fas fa-arrow-circle-down"></i>
												<i class="far fa-heart"></i>
											</span>
										</h6>
									</a>
								</li>
			 				';
			 			
			 			}
			 			$i++;
			 		}

  ?>
				
				</ol>
			</div>
			<div class="clear"></div>
		</div>
		<div class="playlistright">
			<div class="rightimage">
				<img src="picture/ej.jpg">
			</div>
			<div class="rightimage">
				<img src="picture/2.png">
			</div>
			
			
		</div>
		<div class="playlistlienquan">
			<div class="quantittle">
				<h4>Playlist cùng thể loại</h4>
			</div>
			<div class="lienquan">
				<?php 
				$query2 = "SELECT * FROM playlists ORDER BY RAND() LIMIT 0,5";
				$result2 = mysqli_query($db,$query2);
				while ($row=mysqli_fetch_assoc($result2)) {
					echo'
						<div class="lienquan1">
							<div class="lienquanimage">
								<a href="playlist.php?idplaylist='.$row["id"].'"><img src="'.$row["image"].'"></a>
							</div>
							<div class="lienquantittle">
								<a href="playlist.php?idplaylist='.$row["id"].'"><h6>'.$row["name"].'</h6></a>
							</div>
						</div>

					';

				}
			 ?>
				

				<div class="clear"></div>
			</div>

		</div>
		<div class="clear"></div>
	</div>
	<div class="foott" style="background: linear-gradient(135deg, #8254EA 0%, #E86DEC 100%);">
   <?php
    include("footer.php");
    ?>
    <div class="clear"></div>
  </div>
	<script src="https://code.jquery.com/jquery-2.2.0.js">
</script>
<script type="text/javascript">
  audioPlayer();
  function audioPlayer(){
    var currentSong = 0;
    $("#audioPlayer")[0].src = $("#playlist li a")[0];
    $("#audioPlayer")[0].play();
    $("#playlist li a").click(function(e){
      e.preventDefault();
      $("#audioPlayer")[0].src = this;
      $("#audioPlayer")[0].play();
      $("#playlist li").removeClass("current-song");
        currentSong = $(this).parent().index();
        $(this).parent().addClass("current-song");

    });
    $("#audioPlayer")[0].addEventListener("ended", function(){
        currentSong++;
          if(currentSong == $("#playlist li a").length)
            currentSong = 0;
          $("#playlist li").removeClass("current-song");
          $("#playlist li:eq("+currentSong+")").addClass("current-song");
          $("#audioPlayer")[0].src = $("#playlist li a")[currentSong].href;
          $("#audioPlayer")[0].play();
          
    });
  }
</script>
</body>
</html>