<?php $db = mysqli_connect('localhost', 'root', '', 'dacs');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>admin</title>
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
</head>
<body>
	<h1 style="text-align: center;border-bottom: 1px solid black;">ADMIN</h1>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')" id="defaultOpen">Account</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')" >Comment</button>
  <button class="tablinks" onclick="openCity(event, 'Tokyo')">Lyrics</button>
    <button class="tablinks" onclick="openCity(event, 'playlists')">Playlists</button>
      <button class="tablinks" onclick="openCity(event, 'playlists_song')">Playlists song</button>
        <button class="tablinks" onclick="openCity(event, 'song')">Song</button>
</div>

<div id="London" class="tabcontent">
  <h2>Account</h2>
	<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><i class="fas fa-user-plus"></i>Thêm tài khoản</button>

	<div id="id01" class="modal">
	  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <form class="modal-content" action="admin-add.php" id="myForm" method="post">
	    <div class="container">
	     
	       <h2>ADD</h2>
	      <hr>
	      <label for="email"><b>Username</b></label>
	      <input type="text" placeholder="Username"  name="username" required>

	      <label for="psw-repeat"><b>Password</b></label>
	      <input type="password" placeholder="Password" name="psw" required>

	      <label for="psw"><b>Email</b></label>
	      <input type="email" placeholder="Email" name="email" required>
	      
	      

	     

	      <div class="clearfix" >
	      	
	        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
	        <button type="submit" class="signupbtn" name="addaccount" id="addaccount">Add</button>
	      </div>
	    </div>
	  </form>
	</div>

<table>
	<tr>
	<th></th>
	<th></th>
    <th>ID</th>
    <th>Username</th>
    <th>Password</th>
    <th>Email</th>

  </tr>

	<?php

		$query_account = 'SELECT * FROM account';
		$result_account = mysqli_query($db,$query_account);
 		
 		while ($row_account = mysqli_fetch_assoc($result_account)) {
 			echo '
						<tr>
							<td>
								<a href="admin.php?update='.$row_account['id'].'"   ><i class="far fa-edit"></i>Update</a>
							</td>
						 	<td><a href="admincontroller.php?idaccount='.$row_account['id'].'"><i class="far fa-trash-alt"></i>Xóa bỏ</a></td>
						    <td>'.$row_account['id'].'</td>
						    <td>'.$row_account['username'].'</td>
						    <td>'.$row_account['password'].'</td>
						   	<td>'.$row_account['email'].'</td>
						  
						  </tr>
 			';
 		}
	 ?>
  
  
 <?php 
		if (isset($_GET['update'])) {

		 	$query_account_update = 'SELECT * FROM account WHERE id='.$_GET['update'].'';
		 	  $result_update = mysqli_query($db,$query_account_update);
		 	  $row_update = mysqli_fetch_array( $result_update,MYSQLI_ASSOC);
		 	  $username = $row_update['username'];
		 	  $email = $row_update['email'];

		 } 
  ?> 

</table>
	<button class="open-button" onclick="openForm()">Open Form</button>

	<div class="form-popup" id="Formud" >
	  <form  class="form-container" method="post" action="">
	    <h1>Update</h1>
	    <label for="psw"><b>Username</b></label>
	    <input type="text" disabled="disabled" placeholder="Enter username"  value=" <?php echo $username; ?> " name="psw" required>
	    
		<label for="psw"><b>Password</b></label>
	    <input type="password" placeholder="Enter Password" name="passupdate" required>
	    
	    <label for="email"><b>Email</b></label>
	    <input type="text" placeholder="Enter Email" disabled="disabled" value=" <?php echo $email; ?> " name="email" required>

	    

	    <button type="submit" class="btn" name="btnUpdate">Update</button>
	    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
	  </form>
	</div>
	<?php 
		if (isset($_POST['btnUpdate'])) {
			$pass = $_POST['passupdate'];
			$update = 'UPDATE account SET password = '.$pass.' WHERE id ='.$_GET['update'].' ';
			mysqli_query($db,$update);

		}
	 ?>
</div>

<div id="Paris" class="tabcontent">
  <h2>Comment</h2>


<table>
	<tr>
	<th></th>
    <th>ID</th>
    <th>Content</th>
    <th>Date time</th>
    <th>Account id</th>
     <th>Song id</th>
  </tr>
	<?php 
		$query_comment = 'SELECT * FROM comment';
		$result_comment = mysqli_query($db,$query_comment);
 		
 		while ($row_comment = mysqli_fetch_assoc($result_comment)) {
 			echo '
						<tr>
							<td><a href="admincontroller.php?idcomment='.$row_comment['id'].'"><i class="far fa-trash-alt"></i>Xóa bỏ</a></td>
						    <td>'.$row_comment['id'].'</td>
						    <td>'.$row_comment['content'].'</td>
						    <td>'.$row_comment['date_time'].'</td>
						   <td>'.$row_comment['account_id'].'</td>
						   <td>'.$row_comment['song_id'].'</td>
						  </tr>
 			';
 		}
	 ?>
  
  
  
</table>
</div>

<div id="Tokyo" class="tabcontent">
  <h2>Lyrics</h2>
  <button onclick="document.getElementById('id03').style.display='block'" style="width:auto;"><i class="fas fa-plus-circle"></i></i>Thêm lyrics</button>

	<div id="id03" class="modal">
	  <span onclick="document.getElementById('id03').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <form class="modal-content"  id="myForm" method="post">
	    <div class="container">
	     
	       <h2>ADD</h2>
	      <hr>
	      <label for="email"><b>Lyrics</b></label>
	      <textarea required name="lyic"  placeholder="Lyric" style="width: 100%;height: 100px;"></textarea>

	      <label for="psw-repeat"><b>ID songs</b></label>
	     
	     	
	      	<select name="addidsong">
	      		<?php
	      		$query_selectsong = 'SELECT * FROM song';
	      		$result_selectsong = mysqli_query($db,$query_selectsong);
	      		while ($row_selectsong = mysqli_fetch_assoc($result_selectsong)) { 
	      		echo '
					<option value=" '.$row_selectsong['id'].'"> '.$row_selectsong['id'].'</option>
	      		'; 
	      			
	      		}
	      		
	      		?>
	      </select>
	      <select>
	      	<?php
	      	$query_selectsong = 'SELECT * FROM song';
	      		$result_selectsong = mysqli_query($db,$query_selectsong);  
	      	while ($row_selectsong = mysqli_fetch_assoc($result_selectsong)) {
	      		echo '
					<option value="'.$row_selectsong['id'].'">'.$row_selectsong['id'].' - '.$row_selectsong['name'].'</option>
	      		';
	      	}
	      	?>
	      </select>
			
			<br><br>
	      <label for="psw"><b>ID account</b></label>
	      <select name="addidaccount">
	      		<?php
	      		$query_selectaccount = 'SELECT * FROM account';
	      		$result_selectaccount = mysqli_query($db,$query_selectaccount);
	      		while ($row_selectaccount = mysqli_fetch_assoc($result_selectaccount)) { 
	      		echo '
					<option value=" '.$row_selectaccount['id'].'"> '.$row_selectaccount['id'].'</option>
	      		'; 
	      			
	      		}
	      		
	      		?>
	      </select>
	      <select>
	      	<?php
	      	$query_selectselectaccount = 'SELECT * FROM account';
	      		$result_selectaccount = mysqli_query($db,$query_selectaccount);  
	      	while ($row_selectaccount = mysqli_fetch_assoc($result_selectaccount)) {
	      		echo '
					<option value="'.$row_selectaccount['id'].'">'.$row_selectaccount['id'].' - '.$row_selectaccount['username'].'</option>
	      		';
	      	}
	      	
	      	?>
	      </select>
	     
	      
	      

	     

	      <div class="clearfix" >
	      	
	        <button type="button" onclick="document.getElementById('id03').style.display='none'" class="cancelbtn">Cancel</button>
	        <button type="submit" class="signupbtn" name="addlyrics" id="addaccount">Add</button>
	      </div>
	    </div>
	  </form>
	</div>
	<?php 
		if(isset($_POST['addlyrics'])){
			$content_lyric = $_POST['lyic'];
			$addidsong = $_POST['addidsong'];
			$addidaccount = $_POST['addidaccount'];
			$insert_lyric = "INSERT INTO lyrics (id,content,song_id,account_id) 
					VALUES (NULL,'$content_lyric','$addidsong','$addidaccount')";
			$result_insert_lyric = mysqli_query($db,$insert_lyric);
			
			
		}
		
	 ?>
<table>
	<tr>
	<th></th>
    <th>ID</th>
    <th>Content</th>
    <th>Song id</th>
    <th >Account id</th>
  </tr>
	<?php 
		$query_lyrics = 'SELECT * FROM lyrics';
		$result_lyrics = mysqli_query($db,$query_lyrics);
 		
 		while ($row_lyrics = mysqli_fetch_assoc($result_lyrics)) {
 			echo '
						<tr>
						<td><a href="admincontroller.php?idlyric='.$row_lyrics['id'].'"><i class="far fa-trash-alt"></i>Xóa bỏ</a></td>
						    <td>'.$row_lyrics['id'].'</td>
						    <td style="overflow: auto;height: 50px;">'.$row_lyrics['content'].'</td>
						   <td>'.$row_lyrics['song_id'].'</td>
						   <td>'.$row_lyrics['account_id'].'</td>
						   
						  </tr>
 			';
 		}
	 ?>
</table>
</div>
<div id="playlists" class="tabcontent">
  <h2>Playlists</h2>
   <button onclick="document.getElementById('id04').style.display='block'" style="width:auto;"><i class="fas fa-plus-circle"></i></i>Thêm playlists</button>
  <div id="id04" class="modal">
	  <span onclick="document.getElementById('id04').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <form class="modal-content"  id="myFormplaylists" method="post" enctype="multipart/form-data">
	    <div class="container">
	     
	       <h2>ADD Playlists</h2>
	      <hr>
	      <label for="email"><b>Name</b></label>
	      <input type="text" placeholder="Username" name="namesong" required>

	      <label for="email"><b>Url Name</b></label>
	      <input type="text" placeholder="Username" name="urlnamesong" required>

	      <label for="email"><b>Image</b></label>
	      <input type="file"  name="imagesong" >
			
	      <br><br>
	      <label for="psw"><b>ID account</b></label>
	      <select name="addidaccount">
	      		<?php
	      		$query_selectaccount = 'SELECT * FROM account';
	      		$result_selectaccount = mysqli_query($db,$query_selectaccount);
	      		while ($row_selectaccount = mysqli_fetch_assoc($result_selectaccount)) { 
	      		echo '
					<option value=" '.$row_selectaccount['id'].'"> '.$row_selectaccount['id'].'</option>
	      		'; 
	      			
	      		}
	      		
	      		?>
	      </select>
	      <select>
	      	<?php
	      	$query_selectselectaccount = 'SELECT * FROM account';
	      		$result_selectaccount = mysqli_query($db,$query_selectaccount);  
	      	while ($row_selectaccount = mysqli_fetch_assoc($result_selectaccount)) {
	      		echo '
					<option value="'.$row_selectaccount['id'].'">'.$row_selectaccount['id'].' - '.$row_selectaccount['username'].'</option>
	      		';
	      	}
	      	
	      	?>
	      </select>


	      <div class="clearfix">
	      	
	        <button type="button" onclick="document.getElementById('id04').style.display='none'" class="cancelbtn">Cancel</button>
	        <button type="submit" class="signupbtn" name="addplaylist" id="addplaylist">Add Playlists</button>
	      </div>
	    </div>
	  </form>
	  
	</div>

<table>
	<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Url name</th>
    <th >Image</th>
   
    
    <th >Account id</th>
  </tr>
	<?php 
		$query_playlists = 'SELECT * FROM playlists';
		$result_playlists = mysqli_query($db,$query_playlists);
 		
 		while ($row_playlists = mysqli_fetch_assoc($result_playlists)) {
 			echo '
						<tr>
						    <td>'.$row_playlists['id'].'</td>
						    <td >'.$row_playlists['name'].'</td>
						   <td>'.$row_playlists['url_name'].'</td>
						   <td>'.$row_playlists['image'].'</td>
						   
						  
						   <td>'.$row_playlists['account_id'].'</td>
						   
						  </tr>
 			';
 		}
	 ?>
</table>
</div>
<div id="playlists_song" class="tabcontent">
  <h2>Playlists Songs</h2>
<table>
	<tr>
    <th>ID</th>
    <th>Playlists id</th>
    <th>Song id</th>
    
  </tr>
	<?php 
		$query_playlists_songs = 'SELECT * FROM playlists_songs';
		$result_playlists_songs = mysqli_query($db,$query_playlists_songs);
 		
 		while ($row_playlists_songs = mysqli_fetch_assoc($result_playlists_songs)) {
 			echo '
						<tr>
						    <td>'.$row_playlists_songs['id'].'</td>
						    <td >'.$row_playlists_songs['playlists_id'].'</td>
						   <td>'.$row_playlists_songs['song_id'].'</td>
						   
						   
						  </tr>
 			';
 		}
	 ?>
</table>
</div>
<div id="song" class="tabcontent">
  <h2>Songs</h2>
  <?php

	 
	   if(isset($_POST['addsong'])){

	  		$namesong = $_POST['namesong'];
		 	$urlnamesong = $_POST['urlnamesong'];
		 	$artist = $_POST['artist'];
		 	$audio = $_FILES['audio']['name'];
		 	$imagesong = $_FILES['imagesong']['name'];
	  		

	 		$query_add_song = "INSERT INTO song (id,name,url_name,artist,image,audio,views,dowloads) 
								VALUES (NULL,'$namesong','$urlnamesong','$artist','$imagesong','$audio','0','0') ";
			 mysqli_query($db,$query_add_song);
			
			 
	  	}

	   ?>
  <button onclick="document.getElementById('id06').style.display='block'" style="width:auto;"><i class="fas fa-plus-circle"></i></i>Thêm bài hát</button>

	<div id="id06" class="modal">
	  <span onclick="document.getElementById('id06').style.display='none'" class="close" title="Close Modal">&times;</span>
	  <form class="modal-content"  id="myFormsong" method="post" enctype="multipart/form-data">
	    <div class="container">
	     
	       <h2>ADD</h2>
	      <hr>
	      <label for="email"><b>Name</b></label>
	      <input type="text" placeholder="Username" name="namesong" required>

	      <label for="email"><b>Url Name</b></label>
	      <input type="text" placeholder="Username" name="urlnamesong" required>

	      <label for="email"><b>Artist</b></label>
	      <input type="text" placeholder="Username" name="artist" required>

	      <label for="email"><b>Image</b></label>
	      <input type="file"  name="imagesong" >
			<br><br>
	      <label for="email"><b>Audio</b></label>
	      <input type="file"  name="audio" >

	      
	      
	      

	     

	      <div class="clearfix">
	      	
	        <button type="button" onclick="document.getElementById('id06').style.display='none'" class="cancelbtn">Cancel</button>
	        <button type="submit" class="signupbtn" name="addsong" id="addsong">Add</button>
	      </div>
	    </div>
	  </form>
	  
	</div>
<table>
	<tr>
	<th></th>
    <th>ID</th>
    <th>Name</th>
    <th>Url name</th>
    <th>Artist</th>
    <th>Image</th>
    <th>Audio</th>
    
    
  </tr>
	<?php 
		$query_songs = 'SELECT * FROM song';
		$result_songs = mysqli_query($db,$query_songs);
 		
 		while ($row_songs = mysqli_fetch_assoc($result_songs)) {
 			echo '
						<tr>
						<td><a href="admincontroller.php?idsong='.$row_songs['id'].'"><i class="far fa-trash-alt"></i>Xóa bỏ</a></td>
						    <td>'.$row_songs['id'].'</td>
						    <td >'.$row_songs['name'].'</td>
						   <td>'.$row_songs['url_name'].'</td>
						   <td>'.$row_songs['artist'].'</td>
						   <td>'.$row_songs['image'].'</td>
						   <td>'.$row_songs['audio'].'</td>
						   
						   
						   
						  </tr>
 			';
 		}
	 ?>
</table>
</div>
<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
<script>
// Get the modal
var modal = document.getElementsByClassNameId('id01');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
<script>
	// Get the modal
	var addlyric = document.getElementById('id03');
	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	  if (event.target == addlyric) {
	    addlyric.style.display = "none";
	  }
	}
</script>
<script>
// Get the modal
var addsong = document.getElementById('id06');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == addsong) {
    addsong.style.display = "none";
  }
}
</script>
<script>
// Get the modal
var addplaylist = document.getElementById('id04');
// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == addplaylist) {
    addplaylist.style.display = "none";
  }
}
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js">
  </script>
  <script type="text/javascript">

    $("#addaccount").click( function(){
      
      $.post( $("#myForm").attr("action"), $("#myForm :input").serializeArray(), function(info) { 

       } )

    }

      );
    $("#myForm").submit( function(){
      return false;
     
        });
   
  </script>
 <script>
function openForm() {
  document.getElementById("Formud").style.display = "block";
}

function closeForm() {
  document.getElementById("Formud").style.display = "none";
}
</script>
</body>
</html>