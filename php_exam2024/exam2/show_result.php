<?php
    // ตรวจสอบว่ามีการส่งค่าจากแบบฟอร์มมาหรือไม่
        // ดึงค่าข้อมูลที่ 1 และ 2 จากแบบฟอร์ม HTML และเก็บไว้ในตัวแปร $data1 และ $data2
        $data1 = $_GET['data1'];
        $data2 = $_GET['data2'];
        // ดึงตัวดำเนินการทางคณิตศาสตร์ที่ผู้ใช้เลือกจากแบบฟอร์ม HTML และเก็บไว้ในตัวแปร $op
        $op = $_GET['op'];

        // ทำการคำนวณตามตัวดำเนินการที่ผู้ใช้เลือก
        if($op == "sum"){
            $result = $data1 + $data2;
            echo "ผลลัพธ์ของการบวกคือ: $result";
        }else if($op == "sub"){
            $result = $data1 - $data2;
            echo "ผลลัพธ์ของการลบคือ: $result";
        }else if($op == "mul"){
            $result = $data1 * $data2;
            echo "ผลลัพธ์ของการคูณคือ: $result";
        }else if($op == "div"){
            // ตรวจสอบว่าไม่สามารถหารด้วยศูนย์ได้
            if($data2 != 0){
                $result = $data1 / $data2;
                echo "ผลลัพธ์ของการหารคือ: $result";
            }else{
                echo "ไม่สามารถหารด้วย 0 ได้";
            }
        }
    
?>