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
mysqli_query($mysql_link, $mysql_query);
?>
<p>
    <h3>เพิ่มข้อมูลแล้ว</h3>
    <a href="list.php">ไปหน้ารายการของ</a>
</p>