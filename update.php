<p>
    <h2>ตัวอย่างรวมโค้ดจากไฟล์อื่น</h2>
    รวมโค้ดจากไฟล์ชื่อ including.php
    <h5>include "<span style="color:red;">including.php</span>"</h5>
</p>
<?php
include "including.php";
$id = $_POST['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$price = $_POST['price'];
$mysql_query = "UPDATE products SET name='".$name."', description='".$description."', price='".$price."' WHERE id='".$id."'";
mysqli_query($mysql_link, $mysql_query);
?>
<p>
    <h3>แก้ไขข้อมูลแล้ว</h3>
    <a href="list.php">ไปหน้ารายการของ</a>
</p>