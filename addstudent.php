<?php
include_once "include/db.php";
if(isset($_POST['add'])){
    $name = $_POST['name'];
    $family = $_POST['family'];
    $position = $_POST['position'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $postoffice = $_POST['postoffice'];
    $notes = $_POST['notes'];
    $receivemail = $_POST['receivemail'];
    $receivesms = $_POST['receivesms'];
    $password = md5($_POST['password']);
    $date = date("Y-m-d ");
    //check if user is already taken
    mysql_query("SET NAMES 'utf8'");
    $check = mysql_query("select * from student where name='$name'") or die("error in check query");
    $num = mysql_num_rows($check);
    if($num > 0){
            echo '<meta http-equiv="refresh" content="3; url=index.php?page=addstudent" /> ';
            die("<h1 align='center'>الاسم موجود مسبقا</h1>");
    }

    mysql_query("SET NAMES 'utf8'");
    $query = mysql_query("INSERT INTO `student` VALUES  ('','$name','$family','$position','$city','$phone','$email','$postoffice','$notes','$receivemail','$receivesms','$date')") or die("error in query");
    mysql_query("SET NAMES 'utf8'");
    $query2 = mysql_query("INSERT INTO `admin` VALUES  ('','$name','$password','0')") or die("error in query");
        if(isset($query)){
            echo '<meta http-equiv="refresh" content="5; url=index.php?page=students" /> ';
            die("<h1 align='center'>تمت الاضافة بنجاح</h1>");
        }else{
            die( "eroooooooooooooor");
        }
}

?>

<form action="index.php?page=addstudent" method="post">
<table  dir="rtl" style="width: 50%; margin: 0 auto; font-weight: bold;">
    <tr>
        <td>الاسم</td>
        <td><input type="text" name="name"  /></td>
    </tr>
    <tr>
        <td>اسم العائلة</td>
        <td><input type="text" name="family"  /></td>
    </tr>
    <tr>
        <td>اختيار الموقع</td>
        <td >
            <select name="position" style="width: 20px;" >
                <option value="n">شمال</option>
                <option value="s">جنوب</option>
                <option value="m">مركز</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>المدينة</td>
        <td><input type="text" name="city" size="30" /></td>
    </tr>
    <tr>
        <td>التليفون</td>
        <td><input type="text" name="phone" size="30" /></td>
    </tr>
    <tr>
        <td>الايميل</td>
        <td><input type="email" name="email" size="30" /></td>
    </tr>
    <tr>
        <td>صندوق البريد</td>
        <td><input type="text" name="postoffice" size="5s" /></td>
    </tr>
    <tr>
        <td>ملاحظات</td>
        <td>
            <textarea name="notes"  cols="30" rows="10"></textarea>
        </td>
    </tr>
    <tr>
        <td>هل تريد استقبال البريد</td>
        <td>
            <select name="receivemail" >
                <option value="1">نعم</option>
                <option value="0">لا</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>هل تريد استقبال sms</td>
        <td>
            <select name="receivesms" >
                    <option value="1">نعم</option>
                    <option value="0">لا</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>الرقم السرى</td>
        <td><input type="password" name="password" size="30" /></td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center; ">
            <input name="add" type="submit" value="اضافة الطالب" />
        </td>
    </tr>
</table>
</form>
<br />
<br />
<br />
<br />
