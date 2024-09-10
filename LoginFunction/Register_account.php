<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PJP_Register</title>
    <link rel="stylesheet" href="../Css/Login_account.Css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    <div class="wrapper">
        <form id="registerForm" method="POST" action="/Function/Register.php">
          <h1>Register</h1>
          <div class="input-box">
              <input type="text" name="username" placeholder="Username" required>
              <i class='bx bxs-user-circle'></i>
          </div>
          <div class="input-box">
              <input type="password" id="password" name="password" placeholder="Password" required>
              <i class='bx bxs-lock-alt'></i>
          </div>
          <div class="input-box">
              <input type="password" id="repassword" placeholder="Re-enter Password" required>
              <i class='bx bxs-lock'></i>
          </div>
          <div class="input-box">
              <input type="email" name="email" placeholder="Email" required>
              <i class='bx bxs-envelope'></i>
          </div>
          <button type="submit" class="btn">Register</button>
          <div class="reguster-link">
                <p>You already have an account ? <a href="../LoginFunction/Login_account.php" >Log In</a></p>
          </div>
          <div id="message" class="error"></div>
        </form>
     </div>
</body>
<script>
    document.getElementById('registerForm').addEventListener('submit', function(event) {

    
        var password = document.getElementById('password').value;
        var repassword = document.getElementById('repassword').value;


        var messageElement = document.getElementById('message');

       
        if (password === repassword) {
            messageElement.textContent = 'Passwords match!';
            messageElement.style.color = 'green';
         
        } else {
            event.preventDefault();
            messageElement.textContent = 'Passwords do not match. Please try again.';
            messageElement.style.color = 'red';
        }
    });
</script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</html>
