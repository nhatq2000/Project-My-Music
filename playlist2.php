<?php 
  $db = mysqli_connect('localhost', 'root', '', 'dacs'); 
 ?>



    <?php 
      $query3 = "SELECT * FROM playlists LIMIT 5,5";
        $result3 = mysqli_query($db,$query3);
        while ($row=mysqli_fetch_assoc($result3)){
          echo '
               <div class="playlist">
                  <div class="playlist1">
                    <img src="'.$row["image"].'" alt="Avatar" class="imagee">
                    <div class="overlayy">
                      <a href="playlist.php?idplaylist='.$row["id"].'" class="iconn" title="User Profile">
                      <i class="fas fa-play-circle"></i>
                      </a>

                  </div>

                </div>
                 <div class="tittlea">
                   <a href="playlist.php?idplaylist='.$row["id"].'"><p>'.$row["name"].'</p></a>
                 </div>
              </div>
          ';
        }
     ?>
   
    <div class="clear"></div>