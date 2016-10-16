<?php
session_start();
require_once 'class.user.php';
$user_login = new USER();

if($user_login->is_logged_in()!="")
{
 $user_login->redirect('home.php');
}

if(isset($_POST['btn-login']))
{
 $email = trim($_POST['txtemail']);
 $upass = trim($_POST['txtupass']);
 
 if($user_login->login($email,$upass))
 {
  $user_login->redirect('home.php');
 }
}
?>
<!DOCTYPE html>
<html>  
  <head>  
  <title>Onebhk</title>   
  <meta charset="utf-8">    
  <meta name="google-site-verification" content="KoxyJJZ2Y3RvONGZBKpFKrEktEv-P63nxyoLdNTkh4Q" />    
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">  
  <link href="css/style.css" rel='stylesheet' type='text/css' />  
  <meta name="viewport" content="width=device-width, initial-scale=1">    
  <!--webfonts-->   
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,300,600,700' rel='stylesheet' type='text/css'> 
  <!--//webfonts-->
  </head>
  <body id="login">
    <div class="container">
  <?php 
  if(isset($_GET['inactive']))
  {
   ?>
            <div class='alert alert-error'>
    <button class='close' data-dismiss='alert'>&times;</button>
    <strong>Sorry!</strong> This Account is not Activated Go to your Inbox and Activate it. 
   </div>
            <?php
  }
  ?>
   <div class="login-form">
        <form method="post">
        <?php
        if(isset($_GET['error']))
  {
   ?>
            <div class='alert alert-success'>
    <button class='close' data-dismiss='alert'></button>
    <strong>Wrong Details!</strong> 
   </div>
            <?php
  }
  ?>
        <li>
        <input type="email" class="text" placeholder="Email address" name="txtemail" placeholder="Enter Your Email-id" style="font-family: 'Oen Sans', sans-serif;width: 100%;padding: 0.7em 2em 0.7em 0.7em;color: #858282;font-size: 18px;outline: none;background: none;border: none;font-weight: 600;" required />
        </li>
        <li>
        <input type="password" style="width:100%" placeholder="Password" name="txtupass" required />
        </li>
      <div class="p-container">               
        <a href="signup.php" class="reg_button">Sign Up</a>
        <button class="log_button" type="submit" name="btn-login">Sign in</button>
        <div class="clear"> </div>          
      </div>                  
      <br>
        <a href="fpass.php">Forgot Password ?</a>
      <div class="p-container">                             
      </div>                  
      </form>
</div>

<!--         <a href="register.php" class="reg_button">Register</a>                
        <input type="submit" onclick="myFunction()" class="log_button" value="Sign In" >          
    </form>     
  </div>      
 -->

    </div> <!-- /container -->
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>