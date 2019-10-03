<!DOCTYPE html>
<html>
    
  <head>
      
    <meta charset="utf-8">
    <title>註冊頁面</title>
      
  </head>
    
    
  <body>
      
    <h1>填寫基本資料~</h1>
      
    <form action="postData.php" method="post">
        
        員工姓名:<input type="text" name="name" value="" placeholder="ex:zaizai">
        <input type="radio" name="gender" value="1">男性
        <input type="radio" name="gender" value="0">女性<br>
        行動電話:<input type="tel" name="cellphone" value="" panel placeholder="ex:09XXXXXXXX"><br>
        設置密碼:<input type="password" name="setpw" value=""><br>
        密碼確認:<input type="password" name="checkpw" value=""><br>
        員工信箱:<input type="email" name="setemail" value="" placeholder="ex:test@test.com"><br><br>
        <input type="submit" name="" value="註冊"><br>
    </form>
      
    <?php
        ini_set("display_errors","off");
        if($_GET['sig_hint']!=''){
            echo $_GET['sig_hint'];
        }
    ?>
      
  </body>
</html>