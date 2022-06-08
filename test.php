

<?php  $db = mysqli_connect('localhost', 'root', '', 'dacs');  ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>

</head>

<body>
  <div id="display_area">
    
  </div>
  <form id="myForm" action="test.php" method="post">
    <input type="text" name="name" id="name" class="name"><br>
    <input type="text" name="image" id="image" class="image"><br>
    <button id="sub" type="button">save</button>
  </form>
   <span id="result"></span>
  <button id="see" type="button">see</button>
  
   
  <?php 
    $qqwe = "SELECT * FROM user_types";
    $result = mysqli_query($db,$qqwe);
    while ($row = mysqli_fetch_assoc($result)) {
     echo '
     '.$row['id'].'  '.$row['user_position'].'
     <br>
     ';
    }
    

  ?>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js">
  </script>
  <script type="text/javascript">

    // $("#sub").click( function(){
      
    //   $.post( $("#myForm").attr("action"), $("#myForm :input").serializeArray(), function(info) { $("#result").html(info);

    //    } )

    // }

    //   );
    // $("#myForm").submit( function() {
    //   return false;
     
    //     });
    $('#sub').click(function () {
      var name = $('.name').val();
      var image = $('.image').val();
      $.ajax({
        url:'test1.php',
        type:'post',
        data: {
          name:name,
          image:image
        },
        success:function(response){
          $("#result").html(response);
        }
      });
    });
   
  </script>
  <script type="text/javascript">
    //  function displayFromDatabase(){
    //   $ajax({
    //     url:"test1.php",
    //     type:"POST",
    //     async:false,
    //     data:{
    //       "display": 1
    //     },
    //     success:function(d){
    //       $("#display_area").html(d);
    //     }
    //   });
    // }
  </script>
</body>
</html>