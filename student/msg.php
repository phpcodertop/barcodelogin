<?php
include_once "../include/db.php";
//get data
$n = $_SESSION['username'];
$query = mysql_query("select * from student where name= '$n' ");
$row = mysql_fetch_assoc($query);
$id = $row['id'];
?>
<table style="width: 50%; direction: rtl; margin: 0 auto; text-align: center;">
    <tr>
        <td colspan="2" style="font-weight: bolder; text-align: center;">عرض الرسائل</td>
    </tr>
    <tr>
        <td>عنوان الرسالة</td>
        <td>عرض</td>
        <td>حذف</td>
    </tr>
    <?php
        //display messages here
        $q = mysql_query("select * from msg where studentid = '$id'") or die("error");
        if(mysql_num_rows($q) != 0){
            while($r = mysql_fetch_assoc($q)){
                echo "<tr>";
                echo "<td>".$r['name']."</td>";
                echo "<td><a href='index.php?page=showmsg&msgid=".$r['id']."'>عرض الرسالة</a></td>";
                echo "<td><a href='index.php?page=deletemsg&msgid=".$r['id']."'><img src='Close-2-icon.png' alt='delete' /></a></td>";
                echo "</tr>";
            }
        }else{
            echo "<center><b>لا توجد نتائج<center></b>";
        }

    ?>
</table>