<?php

    echo "Your information<br>";        //test
    

    ini_set("display_errors", "On");
    require_once "./connect.php";

    $account = $_POST['account'];       //$account=0=0
    $password = $_POST['password'];

    
/*
    if($connect -> prepare("SELECT * FROM employee WHERE 1")){
        echo "true";
    }else{
        echo "false";
    }
*/

/*
    $select = $connect -> prepare("SELECT employee_cellphone,employee_password FROM employee WHERE employee_cellphone = '$account' AND employee_password = '$password' ");
    $select -> execute(array('employee_cellphone' => $account,'employee_password' => $password));
    $result = $select -> fetch(PDO::FETCH_ASSOC);      //返回以欄位名稱作為key的陣列
    
    
    if($account==$result['employee_cellphone'] &&  $password==$result['employee_password']){   //先暫時預設
        session_start();
        $_SESSION['member'] = $result;
        header("Location:./?hint=歡迎!");
    }elseif($account == '' || $password == ''){
        header("Location:./?hint=輸入不完全~");
    }else{
        header("Location:./?hint=帳號或密碼錯誤~");
    }
    
*/ 

    $query = "SELECT * FROM employee WHERE employee_cellphone = '$account' AND employee_password = '$password' ";

    mysqli_query("set names utf8");         //注意mysql 和 mysqli
    $result=mysqli_query($connect,$query);
    $rows = mysqli_num_rows($result);


    if($rows == 1){      
        
        session_start();
        $_SESSION['member'] = $result;
        $_SESSION["is_login"] = "true";
        header("Location:./?hint=歡迎!");  
        
    }else if($account == '' || $password == ''){
        
        header("Location:./?hint=輸入不完全~");   
        
    }else{
        
        header("Location:./?hint=帳號或密碼錯誤~"); 
        
    }
    

    


?>
