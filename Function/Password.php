<?php
require_once("../Configuration/database.php");



if (isset($_GET['id']) && $_GET['id'] != '') {
    session_start() ; 
    $id = $_GET['id'];
    $randomCode = $_SESSION['verification_code']  ;

    $Send_Code = $_POST['Send_Code'];
    $password = $_POST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    if (strval($Send_Code) === strval($randomCode)) {
       
        updatepass( $hashed_password,$id);
 
        header("Location: ../LoginFunction/Login_account.php");
    } else {
         
        header("Location: ../LoginFunction/Forgot_password.php?error=code&id=$id");
    }
}else{
    echo "404";
}


function updatepass($password,$id){
    $sql = "UPDATE users SET password_hash ='$password' WHERE id ='$id'";
    $result = query($sql);

}