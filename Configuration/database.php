<?php 
function connect(){
    $host = 'sql12.freesqldatabase.com';
    $user = 'sql12730282';
    $pwd = 'YjNn97nwxd';
    $db = 'sql12730282';


    $conn = new mysqli($host, $user, $pwd, $db);

    if($conn->connect_error)
        die("Connect refused!");
    return $conn;
}


function query($sql){
    $conn = connect();
    return $conn->query($sql);
}

function insert_get_id($sql){
    $conn = connect();
    if($conn->query($sql) == true){
        return $conn->insert_id;
    }
    return 0;
}