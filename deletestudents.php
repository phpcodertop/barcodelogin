<?php
include_once "include/db.php";
$id = intval($_GET['studentid']);
$query = mysql_query("select * from student where id=$id") or die("error in query delete ");
if (mysql_num_rows($query) != 0){
    $success = mysql_query("delete from student where id=$id") or die("canot be deleted");
    if($success){
        echo '<meta http-equiv="refresh" content="3; url=index.php?page=students">';
        die("<h1>تم الحذف بنجاح</h1>");
    }
}
?>