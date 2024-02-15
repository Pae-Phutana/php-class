<?php
    $data = $_GET['grade']; // รับค่าเกรดจากฟอร์ม

    if($data >= 80 && $data <= 100){
        echo "Grade = A";
    } else if($data >= 70 && $data <= 79){
        echo "Grade = B";
    } else if($data >= 60 && $data <= 69){
        echo "Grade = C";
    } else if($data >= 50 && $data <= 59){
        echo "Grade = D";
    } else if($data >= 0 && $data <= 49){
        echo "Grade = F";
    } else {
        echo "ข้อมูลผิดพลาด";
    }
?>