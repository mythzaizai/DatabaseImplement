<html>

<head>
    
    <title>zaizai</title>
    
    <meta charset="utf-8" />
    <meta http-equiv="content-type" content="index/html ; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />  <!瀏覽器窗口的寬度等於設備的寬度>
    
    
</head>


<body>
    
    <h1>welcome~</h1>
    
    
    <form action="loginCheck.php" method="post">
         <input type="email" name="account" value="" placeholder="輸入帳號(email)"><br>
         <input type="password" name="password" value="" placeholder="輸入密碼">
         <input type="submit" name="" value="登入">
    </form>
    <a href="./register">點我註冊!</a><br>

    
    <?php
        ini_set("display_errors","off");
        
        if($_GET['hint']!=''){
            echo $_GET['hint'];
        }
    ?>

</body>
    
    
    

<html>
