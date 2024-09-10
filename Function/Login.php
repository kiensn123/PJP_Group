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
    
        $password_hash = $userInfo[0]['password_hash']; 
        $id = $userInfo[0]['id']; 
        if (password_verify($password, $password_hash)){
            if ($remember === 'Yes'){
                session_start() ; 
                $_SESSION['Users_id'] = $id;
            }
            header("Location: ../index.php");
            exit();
        }else{
          
            header("Location: ../LoginFunction/Login_account.php?error=password");
            exit();
        }


    }else{
        
        header("Location: ../LoginFunction/Login_account.php?error=email");
        exit();
    }





  


}

