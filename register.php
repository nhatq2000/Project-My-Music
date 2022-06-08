<?php include('server.php') ?> 
<!DOCTYPE html> 
<html> 
<head> 
    <title> 
        Registration system PHP and MySQL 
    </title> 
    <link rel="stylesheet" type="text/css"
                    href="style.css"> 
</head> 
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
       input[type=text],[type=password],[type=email]{
        
       padding: 5px 0;
        border: none;
        border: 1px solid blue;
        border-radius: 10px;
        outline: none;
        text-align: center;
        float: right;

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
       label{
         padding: 5px 0;
        float: left;
        margin-right: 5px;
       }
       .clear{
        clear: both;
       }
       .input-group{
        padding: 20px 0;
       }
   </style>
  
<body> 
    <div class="trum">
        
   
    <div class="header"> 
        <h2>Register</h2> 
    </div> 
       
    <form method="post" action="register.php"> 
   
        <?php include('error.php'); ?> 
   
        <div class="input-group"> 
            <label>Enter Username</label> 
            <input type="text" name="username"
                value="<?php echo $username; ?>"> 
        </div> 
        <div class="input-group"> 
            <label>Email</label> 
            <input type="email" name="email"
                value="<?php echo $email; ?>"> 
        </div> 
        <div class="input-group"> 
            <label>Enter Password</label> 
            <input type="password" name="password_1"> 
        </div> 
        <div class="input-group"> 
            <label>Confirm password</label> 
            <input type="password" name="password_2"> 
        </div> 
        <div class="input-group"> 
            <button type="submit" class="btn"
                                name="reg_user"> 
                Register 
            </button> 
        </div>
         <div class="clear"></div> 
        <p> 
            Already having an account? 
            <a href="login.php" style="color: #95afc0;"> 
                Login Here! 
            </a> 
        </p> 
    </form> 
    </div>
</body> 
</html> 