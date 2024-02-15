<form action="show_result.php" method="get">
    <label for="data1">ข้อมูลที่ 1 :</label>
    <input type="number" name="data1">
    <br>
    <label for="data2">ข้อมูลที่ 2 :</label>
    <input type="number" name="data2">
    <br>
    <label for="op">เลือกตัวดำเนินการ</label>
    <select name="op" id="op">
        <option value="sum">บวก</option>
        <option value="sub">ลบ</option>
        <option value="mul">คูณ</option>
        <option value="div">หาร</option>
    </select>
    <br>
    <input type="submit" value="ส่งข้อมูล">
</form>