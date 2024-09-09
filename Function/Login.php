<?php 
require_once("../Configuration/database.php");

function ckeck($email){
    $sql = "SELECT * FROM users WHERE email = '$email' ";
    $result = query($sql);
    $list = [];
    while($row = $result->fetch_assoc()){
        $list[] = $row;
    }
    print_r($list);
    return $list;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST['email'];
    $password = $_POST['password'];


    $remember = isset($_POST['remember']) ? 'Yes' : 'No'; 


    $userInfo = ckeck($email);
    if (!empty($userInfo)){
    
        $hashedPassword = $userInfo[0]['password_hash']; 
        if ($password === $hashedPassword){
            echo "Mkdung";
        }else{
            header("Location: ../Login_account.php?error=password");
        }
    }else{
        header("Location: ../Login_account.php?error=email");
    }





  


}

