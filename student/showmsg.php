<?php
include_once "../include/db.php";
$id = intval($_GET['msgid']);
$query = mysql_query("select * from msg where id=$id") or die("error");
$r = mysql_fetch_assoc($query);
$name = $r['name'];
$content = $r['content'];

?>
    <table style="width: 50%; text-align: center; direction: rtl; margin: 0 auto; font-weight: bolder;">
        <tr>
            <td colspan="2">عرض الرسالة</td>
        </tr>
        <tr>
            <td>عنوان الرسالة</td>
            <td><?php echo $name; ?></td>
        </tr>
        <tr>
            <td>محتوى الرسالة</td>
            <td><?php echo $content; ?></td>
        </tr>
        <tr>
            <td colspan="2">
                <a href="index.php?page=msg">العودة للرسائل</a>
            </td>

        </tr>
    </table>