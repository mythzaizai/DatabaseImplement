<?php

    echo "Your information<br>";        //test
    

    ini_set("display_errors", "On");
    require_once "./connect.php";

    $account = $_POST['account'];       //$account=0=0 ||
    $password = $_POST['password'];
/*
    if($connect -> prepare("SELECT employee_cellphone,employee_password FORM zaidatabase WHERE $account = :acc AND $password = :pw")){
        echo "true";
    }else{
        echo "false";
    }
*/
    $select = $connect -> prepare("SELECT employee_cellphone,employee_password FORM zaidatabase WHERE $account = :acc AND $password = :pw");
    $select -> execute(array(':acc' => $account,':pw' => $password));
    $result = $select -> fetch(PDO::FETCH_ASSOC);      //PDO::FETCH_ASSOC 返回以欄位名稱作為索引鍵(key)的陣列(array)
    

    if($account==$result['account'] &&  $password==$result['password']){   //先暫時預設
        session_start();
        $_SESSION['member'] = $result;
        header("Location:./?hint=歡迎!");
    }elseif($account == '' || $password == ''){
        header("Location:./?hint=輸入不完全~");
    }else{
        header("Location:./?hint=帳號或密碼錯誤~");
    }


?>
