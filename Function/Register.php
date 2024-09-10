<?php
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

    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $email = $_POST['email'];

    $userInfo = ckeck($email);

    
    if (!empty($userInfo)){
        
        header("Location: ../LoginFunction/Forgot_password.php");
    }else{
        // echo $username;
        // echo $password;
        // echo $email;
        $sql = "INSERT INTO users (username,email,password_hash) VALUES ('$username','$email','$hashed_password')";
        $result = query($sql);
     
        header("Location: ../LoginFunction/Login_account.php");
    }
 
   
}