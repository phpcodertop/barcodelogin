<?php
include_once "../include/db.php";
// msgid
$id = intval($_GET['msgid']);
$query = mysql_query("delete from msg where id = $id") or die("error");
if (isset($query)){
            echo '<meta http-equiv="refresh" content="3; url=index.php?page=msg" /> ';
            die("<h1 align='center'>تم الحذف بنجاح</h1>");
}
?>