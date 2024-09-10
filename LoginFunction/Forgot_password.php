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
        <form id="passwordResetForm" method="POST" action="../Function/Password.php?id=<?php echo($id = $_GET['id']);?>">
          <h1>Forgot Password</h1>
          <div class="input-box">
              <input type="text" name="Send_Code" placeholder="<?php
              if (isset($_GET['error'])) {
                $emailParam = $_GET['error'];
                if ($emailParam ==="code"){
                  echo 'code is not correct';
                }else{
                  echo 'Enter the code sent to Gmail';
                }
              }else{
                echo 'Enter the code sent to Gmail';
              }
             ?>" required>
              <i class='bx bxs-user-circle'></i>
          </div>
          <div class="input-box">
              <input type="password" id="password" name="password" placeholder="New Password" required>
              <i class='bx bxs-lock-alt'></i>
          </div>
          <div class="input-box">
              <input type="password" id="repassword" placeholder="Re-enter New Password" required>
              <i class='bx bxs-lock'></i>
          </div>

          <button type="submit" class="btn">Log in</button>
          <div id="message" class="error"></div>
        </form>
     </div>
</body>
<script>
    document.getElementById('passwordResetForm').addEventListener('submit', function(event) {
        var password = document.getElementById('password').value;
        var repassword = document.getElementById('repassword').value;
        var messageElement = document.getElementById('message');

        if (password === repassword) {
            messageElement.textContent = 'Passwords match!';
            messageElement.style.color = 'green';
        } else {
            event.preventDefault(); // Ngăn biểu mẫu gửi dữ liệu
            messageElement.textContent = 'Passwords do not match. Please try again.';
            messageElement.style.color = 'red';
        }
    });
</script>
<script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>
</html>
