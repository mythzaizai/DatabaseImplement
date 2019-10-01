<?php

    echo "Your information<br>";        //test
    

    ini_set("display_errors", "On");
    require_once "./connect.php";

    $account = $_POST['account'];
    $password = $_POST['password'];


    //echo "Account:$account<br>";
    //echo "Password:$password<br>";

    if($account=="0000" &&  $password=="0000"){   //先暫時預設
        header("location:../;tip='歡迎!'");
    }else{
        header("location:./;tip='登入失敗~'");
    }


?>
