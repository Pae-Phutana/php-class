<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แสดงตัวเลขเฉพาะเลขคี่</title>
</head>
<body>

<h1>ตัวเลขเฉพาะเลขคี่ 1-100</h1>

<ul>
    <?php
    // แสดงตัวเลขเฉพาะเลขคี่ 1-100
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 2 != 0) {
            echo "<li>{$i}</li>";
        }
    }
    ?>
</ul>

<h2>ฟอร์มรับค่าแม่สูตรคูณ</h2>

<form method="post">
    <label for="num1">ตัวเลขที่ 1 (เริ่มต้น):</label>
    <input type="number" name="num1" value=" " required>

    <label for="num2">ตัวเลขที่ 2 (สิ้นสุด):</label>
    <input type="number" name="num2" value=" " required>

    <button type="submit">คำนวณ</button>
</form>

<?php
// ตรวจสอบการส่งค่าแม่สูตรคูณ
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];

    echo "<h2>แม่สูตรคูณ $num1 - $num2</h2>";

    for ($i = $num1; $i <= $num2; $i++) {
        echo "<h3>แม่สูตรคูณ $i</h3>";
        echo "<ul>";
        for ($j = 1; $j <= 12; $j++) {
            echo "<li>{$i} x {$j} = " . ($i * $j) . "</li>";
        }
        echo "</ul>";
    }
}
?>

</body>
</html>
