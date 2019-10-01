
<?php

    ini_set("display_errors","On");

    $member = $_POST['name'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $account = $_POST['email'];
    $password = $_POST['password'];
    

    require_once "./connect.php";


    $insert = $connect -> prepare("INSERT INTO employee_id(member,gender,account,password)VALUES(?,?,?,?,?)");
    $insert -> execute(array($member,$gender,$phone,$account,$password));
    header("location:../?tip=註冊成功");



?>
