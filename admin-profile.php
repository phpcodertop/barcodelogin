<?php
include_once "include/db.php";
if(isset($_POST['edit'])){
    $password = md5($_POST['password']);
    $query = mysql_query("update admin set password='$password' where username='admin'") or die("Error in query update");
    if($query){
        echo '<meta http-equiv="refresh" content="3; url=index.php?page=admin-profile">';
        die("<center><h1>تم التغيير بنجاح</h1></center>");
    }
}
?>
<table  style="width: 50%; margin: 0 auto; direction: rtl;">
<form action="index.php?page=admin-profile" method="post">
    <tr>
        <td>اسم المستخدم</td>
        <td>admin</td>
    </tr>
    <tr>
        <td>تغيير الرقم السرى</td>
        <td><input type="password" name="password"  /></td>
    </tr>
    <tr>
        <td colspan="2">
            <input type="submit" name="edit" value="تعديل البيانات" />
        </td>
    </tr>
</form>
</table>