<?php
    $username = $_POST['username'];
    $mobile = $_POSt['mobile'];
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    $is_pwd = $_POST['is_pwd'];
    if($pwd! = $is_pwd){
        $response=[
            'error'=>4001,
            'mgs'=>'密码不一致'
        ];
        die(json_encode($response));
    }
    $pwd = password_hash($pwd,PASSWORD_BCRYPT);
    $time = time();
    $pdo = newPDO("mysql:host:host=127.0.0.1;dbname = wuhu",'root','rootroot');
    $sql = "insert into 'check'(username,email,tel,password)values ('$username','$email','$mobile','$password')";
    if($res){
        $response =[
            'errno'=>0,
            'mgs'=>'注册成功'
        ];
        echo json_encode($response);
    }
?>