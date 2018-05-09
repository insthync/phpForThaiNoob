<p>
    <h2>ตัวอย่างรวมโค้ดจากไฟล์อื่น</h2>
    รวมโค้ดจากไฟล์ชื่อ including.php
    <h5>include "<span style="color:red;">including.php</span>"</h5>
</p>
<?php
include "including.php";
$id = $_GET['id'];
$mysql_query = "DELETE FROM products WHERE id='".$id."'";
mysqli_query($mysql_link, $mysql_query);
?>
<p>
    <h3>ลบข้อมูลแล้ว</h3>
    <a href="list.php">ไปหน้ารายการของ</a>
</p>