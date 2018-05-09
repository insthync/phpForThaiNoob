<p>
    <h2>ตัวอย่างรวมโค้ดจากไฟล์อื่น</h2>
    รวมโค้ดจากไฟล์ชื่อ including.php
    <h5>include "<span style="color:red;">including.php</span>"</h5>
</p>
<?php
include "including.php";
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$mysql_query = "INSERT INTO products (name, description, price) VALUES ('".$name."', '".$description."', '".$price."')";
?>
<p>
    <h2>ใช้คำสั่ง SQL ในการเพิ่มข้อมูล</h2>
    <ul>
        <li>ใช้ค่า $mysql_link ที่มาจากโค้ดในไฟล์ including.php เพื่อกำหนดว่าจะใช้คำสั่ง MySQL กับ Database ที่ต่ออันไหน</li>
        <li>ใช้คำสั่ง <?php echo $mysql_query; ?> เพื่อเพิ่มข้อมูล โดยจะกำหนดข้อมูลของ name เป็น <?php echo $name; ?>, description เป็น <?php echo $description; ?>, price เป็น <?php echo $price; ?> ไปยังตาราง Products</li>
    </ul>
    <h5>mysqli_query(<span style="color:red;">$mysql_link (ค่านี้เอามาจากโค้ดในไฟล์ including.php)</span>,"<span style="color:red;"><?php echo $mysql_query; ?></span>")</h5>
</p>
<?php
mysqli_query($mysql_link, $mysql_query);
?>
<p>
    <h3>เพิ่มข้อมูลแล้ว</h3>
    <a href="list.php">ไปหน้ารายการของ</a>
</p>