<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJP_Login</title>
    <link rel="stylesheet" href="Css/Login_account.Css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="wrapper">
        <form  method="POST" action="/Function/Login.php">
          <h1>Login</h1>
          <div class="input-box">
            <input type="email" name="email" placeholder="<?php
              if (isset($_GET['error'])) {
                $emailParam = $_GET['error'];
                if ($emailParam ==="email"){
                  echo 'Email does not exist yet ?';
                }else{
                  echo "Email";
                }
              } else{
                echo "Email";
              }
             ?>" required>
            <i class='bx bxs-envelope'></i>
           
          </div>
         
          <div class="input-box">
            
            <input type="password"  name="password" placeholder="<?php
              if (isset($_GET['error'])) {
                $emailParam = $_GET['error'];
                if ($emailParam ==="password"){
                  echo 'wrong password ?';
                }else{
                  echo 'Password ?';
                }
              }else{
                echo 'Password';
              }
             ?>" required>
            <i class='bx bxs-lock-alt'></i>
           
          </div>
         
          <div class="remember-forgot">
            <label><input name="remember" type="checkbox"> Remember me</label>
            <a href="#">Forgot password ?</a>
           
          </div>
          <button type="submit " class="btn">Log in</button>
          <div class="reguster-link">
                <p>Don't have an account? <a href="/Register_account.php" >Register</a></p>
          </div>
        </form>
     </div>
      
</body>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</html>