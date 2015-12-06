<?php
include_once "db.php";
    $name =  $_SESSION['username'];
    $n = $name;
    if(isset($_POST['change'])){
            if($_POST['password'] == $_POST['password2']){
                $h = md5($_POST['password']);
                $q = mysql_query("
                update `admin` set
                password = '$h'
                 where username = $n
                ") or die("error") ;
                if($q){
                                echo '<meta http-equiv="refresh" content="3; url=index.php?page=changepass" /> ';
                                die("<h1 align='center'>تم التعديل بنجاح</h1>");
                }
            }
    }
?>
<table style="width: 50%; margin: 0 auto; direction: rtl;">
<form action="index.php?page=changepass" method="post">
    <tr>
        <td colspan="2" style="font-weight: bolder; text-align: center;">تغيير الرقم السرى</td>
    </tr>
    <tr>
        <td>الرقم السرى الجديد</td>
        <td>
        <input type="password" name="password" />
        </td>
    </tr>
    <tr>
        <td>تأكيد الرقم السرى</td>
        <td>
        <input type="password" name="password2" />
        </td>
    </tr>
    <tr>
        <td colspan="2" style="font-weight: bolder; text-align: center;">
            <input type="submit" name="change" value="تغيير الرقم السرى" />
        </td>
    </tr>
    </form>
</table>