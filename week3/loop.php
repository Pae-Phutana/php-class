<?php
    $loop1 = $_GET['loop'];
    $start = 1;
    echo "สูตรคูณแม่ ".$loop1."<br>";
    while($start <= 1000){
        echo $loop1." x ".$start." = ";
        echo $loop1*$start;
        echo "<br>";
        $start++;
    }
    
    //while($start <= $loop1){
    //    echo"พิมพ์ครั้งที่ ".$start;
    //    echo "<br>";
    //    $start++;
    //}
?>