<?php

require("PHPMailer-master/src/PHPMailer.php");
require("PHPMailer-master/src/SMTP.php");
require("PHPMailer-master/src/Exception.php");

require_once("../Configuration/database.php");

function ckeck($email){
    $sql = "SELECT * FROM users WHERE email = '$email' ";
    $result = query($sql);
    $list = []; 
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }

    return $list;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $userInfo = ckeck($email);
 
    if (!empty($userInfo)){
        session_start(); 
        $randomCode = rand(100000, 999999);
        $_SESSION['verification_code'] = $randomCode;
    
        sendmail($email,$randomCode,$userInfo[0]["id"]);
    } else {
        header("Location: ../LoginFunction/EnterGmail.php?error=mail");
    }
}

function sendmail($gmail,$code,$id){

    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->IsSMTP(); 
    $mail->SMTPDebug = 2; // Set to 2 for more detailed debug output
    $mail->SMTPAuth = true; 
    $mail->SMTPSecure = 'tls'; 
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587; // or 465 for SSL
    $mail->IsHTML(true);
    $mail->Username = "Kien2005kiensn@gmail.com";
    $mail->Password = "byll reoh xyxi loqg"; // Ensure this is the correct App Password
    $mail->SetFrom("Kien2005kiensn@gmail.com");
    $mail->Subject = "Hi ";
    $mail->Body = 'The code to change your password is '. $code;
    $mail->AddAddress($gmail);
  
    if(!$mail->Send()) {
        //404
        echo "Mailer Error: " . $mail->ErrorInfo;
    } else {
      
        echo "Message has been sent";
        header("Location: ../LoginFunction/Forgot_password.php?id=$id");
    }
}
?>
<?php

// require("PHPMailer-master/src/PHPMailer.php");
// require("PHPMailer-master/src/SMTP.php");
// require("PHPMailer-master/src/Exception.php");

// require_once("../Configuration/database.php");

// function ckeck($email){
//     $sql = "SELECT * FROM users WHERE email = '$email' ";
//     $result = query($sql);
//     $list = []; 
//     while($row = $result->fetch_assoc()){
//         $list[] = $row;
//     }

//     return $list;
// }

// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $email = $_POST['email'];
//     $userInfo = ckeck($email);
 
//     if (!empty($userInfo)){
//         sendmail($email);
//     } else {
//         echo 'Email not found.';
//     }
// }

// function sendmail($gmail){

//     $mail = new PHPMailer\PHPMailer\PHPMailer();
//     $mail->IsSMTP(); 
//     $mail->SMTPDebug = 2; // Set to 2 for more detailed debug output
//     $mail->SMTPAuth = true; 
//     $mail->SMTPSecure = 'tls'; 
//     $mail->Host = "smtp.gmail.com";
//     $mail->Port = 587; // or 465 for SSL
//     $mail->IsHTML(true);
//     $mail->Username = "Kien2005kiensn@gmail.com";
//     $mail->Password = "byll reoh xyxi loqg"; // Ensure this is the correct App Password
//     $mail->SetFrom("Kien2005kiensn@gmail.com");
//     $mail->Subject = "Test";
//     $mail->Body = "hello";
//     $mail->AddAddress($gmail);
  
//     if(!$mail->Send()) {
//         echo "Mailer Error: " . $mail->ErrorInfo;
//     } else {
//         echo "Message has been sent";
//     }
// }
?>
