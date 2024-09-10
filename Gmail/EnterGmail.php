<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJP_Login</title>
    <link rel="stylesheet" href="../Css/Login_account.Css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form id="passwordResetForm" method="POST" action="Gmailsend.php">
          <h1>Enter Gmail</h1>
          <div class="input-box">
              <input type="email" name="email" placeholder="Email" required>
              <i class='bx bxs-envelope'></i>
          </div>
         
          <button type="submit" class="btn">Submit</button>

          <div class="reguster-link">
                <p>Don't have an account? <a href="../LoginFunction/Register_account.php" >Register</a></p>
          </div>
        </form>
     </div>
</body>
<script>
   
</script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</html>
