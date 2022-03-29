<html>
  <head>
    <title>PHP Test</title>
  </head>
    <?php
  
      function showPost($key){
        if(isset($_POST[$key])){
          echo htmlspecialchars($_POST[$key]);
        }
      }
  
      function getPost($key){
        if (isset($_POST[$key])){
          return htmlspecialchars($_POST[$key]);
        }
        return "";
      }
  
      $message="";
      $username = getPost('username');
      $password = getPost('password');
      if (isset($_POST['choice'])){
        if($_POST['choice'] == 'Login' && $username=="RBNRJA" && $password=="NRJA123"){
          $message = "Welcome, $username. Thank you for kindly clicking the button";
          header('Location: welcome.php');
        }else{
          $message = "Incorrect username or password";
        }
      }
      
      ?> 
  <body>
    <form method="POST">
      Name: <input type='text' name='username' value='<?php showPost("username");?>'> <br>
      Password: <input type='password' name='password' value='<?php showPost("password");?>'> <br>
      <input type='submit' name='choice' value='Login'> <br>

      <div style='position: absolute;bottom: 10px; '><p><?php echo $message;?></p></div>
    </form>
  </body>
</html>
