<?php
include_once "include/db.php";
//send msg
if (isset($_POST['send'])){
    $name = $_POST['name'];
    $content = $_POST['content'];
    $studentid = $_POST['id'];
    mysql_query("set names 'utf8'");
    $query = mysql_query("insert into msg values ('','$name','$content','$studentid')") or die("error in sending messages");
    if($query){
        echo '<meta http-equiv="refresh" content="3; url=index.php?page=students">';
        die("<center><h1>تم ارسال الرسالة بنجاح</h1></center>");
    }
}



//
$id = intval($_GET['studentid']);
$sql = "select * from student where id=$id";
$query = mysql_query($sql) or die("error in query");
if (mysql_num_rows($query) != 0){
   $row = mysql_fetch_assoc($query);
   $receivemsg = $row['receiveMail'];
   if ($receivemsg == 1){
        ?>
        <table style="width: 50%; margin: 0 auto; direction: rtl;">
            <form action="index.php?page=msg" method="post">
            <tr>
                <td>عنوان الرسالة</td>
                <td>
                    <input type="text" name="name" />
                    <input type="text" name="id" hidden="hidden" value="<?php echo $id; ?>" />
                </td>
            </tr>
            <tr>
                <td>نص الرسالة</td>
                <td>
                    <textarea name="content"  cols="30" rows="40"></textarea>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="send" value="ارسال الرسالة" />
                </td>
            </tr>
            </form>
        </table>
        <?php
   }else{
        echo "<center><h1>هذا الطالب لم يقم بتفعيل استلام الرسائل .</h1></center>";
   }
}else{
    echo '<meta http-equiv="refresh" content="3; url=index.php?page=students">';
    die("<h1>المستخدم غير موجود<h1>");
}
?>