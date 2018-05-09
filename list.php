<a href="index.php">ไปหน้าแรก</a>
<p>
    <h2>ตัวอย่างรวมโค้ดจากไฟล์อื่น</h2>
    รวมโค้ดจากไฟล์ชื่อ including.php
    <h5>include "<span style="color:red;">including.php</span>"</h5>
</p>
<?php
include "including.php";
$mysql_query = "SELECT * FROM products";
?>
<p>
    <h2>ใช้คำสั่ง SQL ในการเอาข้อมูลมาแสดงผล</h2>
    <ul>
        <li>ใช้ค่า $mysql_link ที่มาจากโค้ดในไฟล์ including.php เพื่อกำหนดว่าจะใช้คำสั่ง MySQL กับ Database ที่ต่ออันไหน</li>
        <li>ใช้คำสั่ง <?php echo $mysql_query; ?> เพื่อเอาข้อมูลทั้งหมดจากตาราง products</li>
    </ul>
    <h5>mysqli_query(<span style="color:red;">$mysql_link (ค่านี้เอามาจากโค้ดในไฟล์ including.php)</span>,"<span style="color:red;"><?php echo $mysql_query; ?></span>")</h5>
</p>
<?php
$query_result = mysqli_query($mysql_link, $mysql_query);
?>
<p>
    <h3>วนลูปเพื่อแสดงผลทั้งหมดที่ Query ออกมา</h3>
    <ul>
        <li>ใช้ while เพื่อวนลูป</li>
        <li>โดยคำสั่ง mysqli_fetch_assoc($query_result) จะเป็นการเอาข้อมูล 1 แถว ออกมาจาก $query_result เพื่อใช้งานต่อไป</li>
        <li>ถ้าเอาข้อมูลออกมาโดยใช้คำสั่ง mysqli_fetch_assoc จนหมดแล้ว มันจะคืนค่า NULL แล้วจบการวนลูป</li>
    </ul>
</p>
<p>
    <table border="1">
        <tr>
            <th>Id</th><th>Name</th><th>Description</th><th>Price</th><th>Action</th>
        <tr>
<?php
$count = 0;
while ($row = mysqli_fetch_assoc($query_result))
{
    $count++;
    $id = $row['id'];
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $description; ?></td>
            <td><?php echo $price; ?></td>
            <td><a href="update_form.php?id=<?php echo $id; ?>">แก้ข้อมูล</a> | <a href="delete.php?id=<?php echo $id; ?>">ลบข้อมูล</a></td>
        </tr>
<?php
}
if ($count == 0)
{
?>
        <tr>
            <td colspan="5">ไม่มีข้อมูลลอง <a href="add_form.php">เพิ่มข้อมูล</a> ดูนะ</td>
        </tr>
<?php
}
?>
    </table>
</p>
<?php
$mysql_query = "SELECT * FROM products ORDER BY price DESC";
?>
<p>
    <h2>ใช้คำสั่ง SQL ในการเอาข้อมูลมาแสดงผล แบบเรียงลำดับด้วย</h2>
    <ul>
        <li>ใช้คำสั่ง ORDER BY price เพื่อเรียงข้อมูลโดย price</li>
        <li>ถ้าเรียงจากมากไปหาน้อยใช้ ORDER BY price DESC ถ้าน้อยไปหามาก ORDER BY price ASC</li>
    </ul>
    <h5>mysqli_query(<span style="color:red;">$mysql_link (ค่านี้เอามาจากโค้ดในไฟล์ including.php)</span>,"<span style="color:red;"><?php echo $mysql_query; ?></span>")</h5>
</p>
<?php
$query_result = mysqli_query($mysql_link, $mysql_query);
?>
<p>
    <table border="1">
        <tr>
            <th>Id</th><th>Name</th><th>Description</th><th>Price</th><th>Action</th>
        <tr>
<?php
$count = 0;
while ($row = mysqli_fetch_assoc($query_result))
{
    $count++;
    $id = $row['id'];
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $description; ?></td>
            <td><?php echo $price; ?></td>
            <td><a href="update_form.php?id=<?php echo $id; ?>">แก้ข้อมูล</a> | <a href="delete.php?id=<?php echo $id; ?>">ลบข้อมูล</a></td>
        </tr>
<?php
}
if ($count == 0)
{
?>
        <tr>
            <td colspan="5">ไม่มีข้อมูลลอง <a href="add_form.php">เพิ่มข้อมูล</a> ดูนะ</td>
        </tr>
<?php
}
?>
    </table>
</p>
<?php
$mysql_query = "SELECT * FROM products WHERE price > 100";
?>
<p>
    <h2>ใช้คำสั่ง SQL ในการเอาข้อมูลมาแสดงผล โดยมีเงื่อนไขบางอย่าง</h2>
    <ul>
        <li>ใช้คำสั่ง WHERE ในการกำหนดเงื่อนไข</li>
        <li>เช่นเงื่อนไข ให้แสดงของที่ price > 100 ก็ใช้ WHERE price > 100</li>
    </ul>
    <h5>mysqli_query(<span style="color:red;">$mysql_link (ค่านี้เอามาจากโค้ดในไฟล์ including.php)</span>,"<span style="color:red;"><?php echo $mysql_query; ?></span>")</h5>
</p>
<?php
$query_result = mysqli_query($mysql_link, $mysql_query);
?>
<p>
    <table border="1">
        <tr>
            <th>Id</th><th>Name</th><th>Description</th><th>Price</th><th>Action</th>
        <tr>
<?php
$count = 0;
while ($row = mysqli_fetch_assoc($query_result))
{
    $count++;
    $id = $row['id'];
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
?>
        <tr>
            <td><?php echo $id; ?></td>
            <td><?php echo $name; ?></td>
            <td><?php echo $description; ?></td>
            <td><?php echo $price; ?></td>
            <td><a href="update_form.php?id=<?php echo $id; ?>">แก้ข้อมูล</a> | <a href="delete.php?id=<?php echo $id; ?>">ลบข้อมูล</a></td>
        </tr>
<?php
}
if ($count == 0)
{
?>
        <tr>
            <td colspan="5">ไม่มีข้อมูลลอง <a href="add_form.php">เพิ่มข้อมูล</a> ดูนะ</td>
        </tr>
<?php
}
?>
    </table>
</p>
