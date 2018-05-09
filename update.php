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
?>
<p>
    <h2>ใช้คำสั่ง SQL ในการแก้ไขข้อมูล</h2>
    <ul>
        <li>ใช้ค่า $mysql_link ที่มาจากโค้ดในไฟล์ including.php เพื่อกำหนดว่าจะใช้คำสั่ง MySQL กับ Database ที่ต่ออันไหน</li>
        <li>ใช้คำสั่ง <?php echo $mysql_query; ?> เพื่อแก้ไขข้อมูล โดยจะแก้ข้อมูลของ name เป็น <?php echo $name; ?>, description เป็น <?php echo $description; ?>, price เป็น <?php echo $price; ?> โดยแก้ไขข้อมูลในตาราง Products ที่มี id = <?php echo $id; ?></li>
    </ul>
    <h5>mysqli_query(<span style="color:red;">$mysql_link (ค่านี้เอามาจากโค้ดในไฟล์ including.php)</span>,"<span style="color:red;"><?php echo $mysql_query; ?></span>")</h5>
</p>
<?php
mysqli_query($mysql_link, $mysql_query);
?>
<p>
    <h3>แก้ไขข้อมูลแล้ว</h3>
    <a href="list.php">ไปหน้ารายการของ</a>
</p>