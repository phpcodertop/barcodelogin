<?php
include_once "include/db.php";
/*
mysql_query("SELECT * FROM messages
WHERE content LIKE '%" . $keyword . "%'
OR title LIKE '%" . $keyword ."%'");
*/
$keyword = $_GET['keyword'];
$sql =  "SELECT * FROM student WHERE name LIKE '%$keyword%' OR family LIKE '%$keyword%' OR email LIKE '%$keyword%' OR id LIKE '%$keyword%'";
$query = mysql_query($sql) or die("error");
$num = mysql_num_rows($query);
if($num == 0){
    echo "<center><h1>للأسف لا توجد نتائج</h1></center>";
}else{
    ?>
    <div>
    <h3 dir="rtl">&nbsp; &nbsp;نتائج البحث :</h3>
    </div>
    <table style="border: 2px solid #ccc; margin: 0 auto; width: 90%; text-align: start; font-weight: bolder; direction: rtl; ">
        <?php
                while ($row = mysql_fetch_assoc($query)){
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['family']."</td>";
                    echo "<td>".$row['city']."</td>";
                    echo "<td>".$row['country']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "<td><a href='index.php?page=editstudents&studentid=".$row['id']."'>تعديل</a></td>";
                    echo "</tr>";
                }
            ?>
    </table>
    <?php
}
?>