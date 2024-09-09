<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJP_Register</title>
    <link rel="stylesheet" href="Css/Login_account.Css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <div class="wrapper">
        <form action="">
          <h1>Register</h1>
          <div class="input-box">
            <input type="text" placeholder="Username" required>
            <i class='bx bxs-user-circle'></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Password" required>
            <i class='bx bxs-lock-alt'></i>
          </div>
          <div class="input-box">
            <input type="password" placeholder="Re-enter Password" required>
            <i class='bx bxs-lock'></i>
          </div>
          <div class="input-box">
            <input type="email" placeholder="Email" required>
            <i class='bx bxs-envelope'></i>
          </div>
          
         
          <button type="submit " class="btn">Register</button>
          <div class="reguster-link">
                <p>You already have an account? <a href="/Login_account.php" >Log in</a></p>
          </div>
        </form>
     </div>
      
</body>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</html>