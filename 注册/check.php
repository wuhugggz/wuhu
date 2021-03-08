<?php
    include "pdo.php";
    $pdo = getPdo();
    $data = $_POST;
    $username = $data['username'];
    $tel = $data['tel'];
    $email = $data['email'];
    $password = $data['password'];
    
    
    if($arr){
        $response = [
            'error'=>4001,
            'mgs'=>'已存在，请更换'

        ];
        die(json_encode($response));
    }else{
        $response = [
            'error'=>0,
            'mgs'=>'ok',
        ];
        die(json_encode($response));
    }
    $password = password_hash($password,PASSWORD_BCRYPT);
    $spl = "insert into user(username,tel,email,password)values('{$username}','{$tel}','{$email}','{password}')";
    $res = $pdo ->query($spl);
    $data = $res ->fetchAll(PDO::FETCH_ASSOC);
?>