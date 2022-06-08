<?php include('server.php') ?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title> 
        Login  
    </title> 
      
   <style>
        body{
          background-image: url(https://images.pexels.com/photos/1626481/pexels-photo-1626481.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940);  
          background-size: cover;
        }
       .trum{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%,-50%);
        text-align: center;
        background: rgba(0,0,0,0.5);
        border-radius: 17px;
        padding: 25px;
        color: white;
       }
       input[type=text],[type=password]{
        padding: 10px 0;
        margin: 10px;
        border: none;
        border: 1px solid blue;
        border-radius: 10px;
        outline: none;
        text-align: center;

       }
       .clear{
        clear: both;
       }
       button{
        padding: 10px 20px;
        border: none;
        outline: none;
        border-radius: 10px;
       }
   </style>
</head> 
<body> 
    <div class="trum" >
    <div class="header"> 
        <h2>Login Here!</h2> 
    </div> 
    
        <form method="post" action="login.php"> 
   
            <?php include('error.php'); ?> 
            <div>
            <div class="input-group"> 
               
                <input type="text" name="username" placeholder="Username"> 
            </div> 
            <div class="input-group"> 
                
                <input type="password" name="password" placeholder="Password"> 
            </div> 
            <div class="input-group"> 
                <button type="submit" class="btn"
                            name="login_user"> 
                    Login 
                </button> 
            </div> 
            <p> 
                New Here?  
                <a href="register.php" style="color: #95afc0;"> 
                    Click here to regsiter! 
                </a> 
            </p> 
        </form> 
      
    </div>
      <div class="clear"></div>
</body> 
  
</html> 