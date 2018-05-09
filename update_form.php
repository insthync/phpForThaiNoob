<a href="list.php">ไปหน้ารายการของ</a>
<p>
    <h2>ตัวอย่างรวมโค้ดจากไฟล์อื่น</h2>
    รวมโค้ดจากไฟล์ชื่อ including.php
    <h5>include "<span style="color:red;">including.php</span>"</h5>
</p>
<?php
include "including.php";
$id = $_GET['id'];
$mysql_query = "SELECT * FROM products WHERE id='".$id."'";
$query_result = mysqli_query($mysql_link, $mysql_query);
if ($row = mysqli_fetch_assoc($query_result))
{
    $name = $row['name'];
    $description = $row['description'];
    $price = $row['price'];
?>
<form action="update.php" method="post">
    <table border="1">
        <tr>
            <td>Name </td><td><input type="text" name="name" value="<?php echo $name; ?>"></td>
        </tr>
        <tr>
            <td>Description </td><td><textarea name="description"><?php echo $description; ?></textarea></td>
        </tr>
        <tr>
            <td>Price </td><td><input type="number" name="price" value="<?php echo $price; ?>"></td>
        </tr>
    </table>
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <input type="submit" value="ทำการแก้ไขข้อมูล">
</form>
<?php
}
else
{
?>
<p>
    <h3>ไม่เจอของที่ใช้ Id นี้</h3>
    <a href="list.php">ไปหน้ารายการของ</a>
</p>
<?php
}
?>