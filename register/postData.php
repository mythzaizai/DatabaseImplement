
<?php

    ini_set("display_errors","On");
    require_once "../connect.php";


    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $cellphone = $_POST['cellphone'];
    $setpw = $_POST['setpw'];
    $checkpw = $_POST['checkpw'];
    $setemail = $_POST['setemail'];


    if($name=="" || $gender=="" || $cellphone=="" || $password="" || $checkpw=="" || $email=""){
        header("location:./?sig_hint=請填寫確實~"); 
    }else if($setpw != $checkpw){
        //echo "setpw:".$setpw."<br>checkpw:".$checkpw."<br>name:".$name;   
        header("location:./?sig_hint=請再次確認密碼~"); 
    }else{
        
        $sql = "INSERT INTO employee (employee_name,employee_gender,employee_cellphone,employee_password,employee_email) 
                VALUES ('$name','$gender','$cellphone','$setpw','$setemail')";
        
        if($connect->query($sql)){
            header("location:../?hint=註冊成功!");
        }else{
            header("location:./?sig_hint=註冊失敗~"); 
        }
        
    }

?>