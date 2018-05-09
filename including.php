<?php
$mysql_host = 'localhost';
$mysql_username = 'root';
$mysql_password = '';
$mysql_dbname = 'phpforthainoob';
?>
<p>
    <h2>โค้ดต่อ MySQL</h2>
    <ul>
        <li>ต่อไป MySQL ที่เปิดไว้ที่ => <?php echo $mysql_host; ?></li>
        <li>โดยใช้ Username => <?php echo $mysql_username; ?></li>
        <li>โดยใช้ Password => <?php echo $mysql_password; ?></li>
        <li>เพื่อใช้ Database ชื่อ => <?php echo $mysql_dbname; ?></li>
    </ul>
    <h5>mysqli_connect(<span style="color:red;"><?php echo $mysql_host; ?></span>,
        <span style="color:red;"><?php echo $mysql_username; ?></span>,
        <span style="color:red;"><?php echo $mysql_password; ?></span>,
        <span style="color:red;"><?php echo $mysql_dbname; ?></span>)
    </h5>
</p>
<?php
$mysql_link = mysqli_connect($mysql_host, $mysql_username, $mysql_password, $mysql_dbname);
?>