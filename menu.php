<?php 
session_start(); 
?>

<?php  
  if (isset($_SESSION['username'])) {
    echo '
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">Music Star
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="">Khám phá</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="baihat.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bài hát
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="baihat.php">Việt Nam</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc trẻ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc trữ tình</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Quê hương</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc cách mạng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rap / Hip hop Việt</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rock Việt</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Âu Mỹ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rock</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rap / Hip hop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Country</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Electronic / Dance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">R&B / Soul</a>
                </li>
              </ul>
              </div>
               <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Châu Á</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hàn Quốc</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhật Bản</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hoa Ngữ</a>
                </li>
                
                
              </ul>

              </div>

              <!-- /.col-md-4  -->
              
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Top 100
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row">
              <div class="col-md-4">
                
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Việt Nam</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc trẻ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc trữ tình</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Quê hương</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc cách mạng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rap / Hip hop Việt</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rock Việt</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Âu Mỹ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rock</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rap / Hip hop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Country</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Electronic / Dance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">R&B / Soul</a>
                </li>
              </ul>
              </div>
               <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Châu Á</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hàn Quốc</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhật Bản</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hoa Ngữ</a>
                </li>
                
              </ul>
              </div>

              <!-- /.col-md-4  -->
              
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Chủ đề
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row">
              <div class="col-md-4">
              
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Đề xuất</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc hot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Những bài hit</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc Việt bất hủ</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc bất hủ Âu Mỹ</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">K-pop HIT</a>
                </li>
                 
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Thể loại</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">EDM</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Acoustic</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Indie</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc không lời</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Trữ tình & Bolero</a>
                </li>
              </ul>
              </div>
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Tâm trạng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Những ngày mưa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tình yêu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Giai điệu buồn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Âm nhạc thư giãn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Motivation</a>
                </li>
              </ul>
              </div>
              
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class="nav-item">
            
            <div class="dropdown" style="text-align="center;">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background: linear-gradient(135deg, #8254EA 0%, #E86DEC 100%);">
          '.$_SESSION["username"].'
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"  style="text-align: center;">
          <a class="dropdown-item" href="#">Playlist</a>
          <a class="dropdown-item" href="logout.php">Đăng xuất</a>
          
        </div>
      </div>

      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
    ';
  } else {
   echo '
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand" href="index.php">Music Star
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="#">Khám phá</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="baihat.php" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Bài hát
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">

          
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="baihat.php">Việt Nam</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc trẻ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc trữ tình</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Quê hương</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc cách mạng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rap / Hip hop Việt</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rock Việt</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Âu Mỹ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rock</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rap / Hip hop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Country</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Electronic / Dance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">R&B / Soul</a>
                </li>
              </ul>
              </div>
               <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Châu Á</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hàn Quốc</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhật Bản</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hoa Ngữ</a>
                </li>
                
                
              </ul>

              </div>

              <!-- /.col-md-4  -->
              
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Top 100
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row">
              <div class="col-md-4">
                
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Việt Nam</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc trẻ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc trữ tình</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Quê hương</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc cách mạng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rap / Hip hop Việt</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rock Việt</a>
                </li>
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Âu Mỹ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Pop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rock</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Rap / Hip hop</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Country</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Electronic / Dance</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">R&B / Soul</a>
                </li>
              </ul>
              </div>
               <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Châu Á</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hàn Quốc</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhật Bản</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Hoa Ngữ</a>
                </li>
                
              </ul>
              </div>

              <!-- /.col-md-4  -->
              
              <!-- /.col-md-4  -->
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Chủ đề
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">


          <div class="container">
            <div class="row">
              <div class="col-md-4">
              
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Đề xuất</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc hot</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Những bài hit</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc Việt bất hủ</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc bất hủ Âu Mỹ</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">K-pop HIT</a>
                </li>
                 
              </ul>
              </div>
              <!-- /.col-md-4  -->
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Thể loại</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">EDM</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Acoustic</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Indie</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Nhạc không lời</a>
                </li>
                 <li class="nav-item">
                  <a class="nav-link" href="#">Trữ tình & Bolero</a>
                </li>
              </ul>
              </div>
              <div class="col-md-4">
                <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link active" href="#">Tâm trạng</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Những ngày mưa</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Tình yêu</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Giai điệu buồn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Âm nhạc thư giãn</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Motivation</a>
                </li>
              </ul>
              </div>
              
            </div>
          </div>
          <!--  /.container  -->


        </div>
      </li>
      <li class="nav-item">
            <a class="nav-link" href="login.php">Đăng nhập</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
    ';
  }
  

  ?>