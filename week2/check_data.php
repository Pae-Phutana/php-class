<?php
    echo "Username :".$_GET['username'];
    echo "<br>";
    echo "password :".$_GET['password'];
    $user = "admin";
    $pass = "phutana";
    echo "<br>";
    if ($_GET['username'] == $user && $_GET['password'] == $pass) {
        echo 'คุณ'.$user.'ลงชื่อเข้าใช้แล้ว';
    } else {
        echo 'คุณ'.$user.'ใส่ข้อมูลไม่ถูกต้อง';
    }

?>