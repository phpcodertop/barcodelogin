<?php
include_once "../include/db.php";
//get data
$n = $_SESSION['username'];
$query = mysql_query("select * from student where name= '$n' ");
$row = mysql_fetch_assoc($query);
$id = $row['id'];
//update data
if(isset($_POST['edit'])){
    $studid = $_POST['studid'];
    $name = $_POST['name'];
    $family = $_POST['family'];
    $position = $_POST['position'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $postoffice = $_POST['postoffice'];
    $notes = $_POST['notes'];
    $receivemail = $_POST['receivemail'];
    $receivesms = $_POST['receivesms'];
    mysql_query("SET NAMES 'utf8'");
    /*
    $name,$family,$position,$city,$country,$email,$postoffice,$notes,$receivemail,$receivesms
    */
    $query = mysql_query("update student set
          name = '$name',
          family = '$family' ,
          position = '$position' ,
          city = '$city' ,
          country = '$country' ,
          email = '$email' ,
          postoffice = '$postoffice' ,
          notes = '$notes' ,
          receiveMail = '$receivemail' ,
          receiveSms = '$receivesms'
        where id = $studid
    ") or die("error in query");
        if(isset($query)){
            echo '<meta http-equiv="refresh" content="3; url=index.php?page=user-profile" /> ';
            die("<h1 align='center'>تم التعديل بنجاح</h1>");
        }else{
            die( "eroooooooooooooor");
        }


}
?>
<form action="index.php?page=user-profile" method="post">
<table  dir="rtl" style="width: 50%; margin: 0 auto; font-weight: bold;">

    <tr>
        <td>الاسم</td>
        <td><input type="text" disabled="disabled" name="name" value="<?php echo $row['name']; ?>"  />
        <input type="text" name="studid" value="<?php echo $id; ?>" hidden="hidden"  />
        </td>
    </tr>
    <tr>
        <td>اسم العائلة</td>
        <td><input type="text" name="family" value="<?php echo $row['family']; ?>"  /></td>
    </tr>
    <tr>
        <td>اختيار الموقع</td>
        <td >
            <select name="position" style="width: 20px;" >
                <option value="n" <?php if($row['position'] == 'n') echo "selected";?>>شمال</option>
                <option value="s" <?php if($row['position'] == 's') echo "selected";?>>جنوب</option>
                <option value="m" <?php if($row['position'] == 'm') echo "selected";?>>مركز</option>
            </select>
        </td>
    </tr>
    <tr>
        <td>المدينة</td>
        <td><input type="text" name="city" value="<?php echo $row['city']; ?>" size="30" /></td>
    </tr>
    <tr>
        <td>التليفون</td>
        <td><input type="text" name="phone" value="<?php echo $row['phone']; ?>" size="30" /></td>
    </tr>
    <tr>
        <td>الايميل</td>
        <td><input type="email" name="email" value="<?php echo $row['email']; ?>" size="30" /></td>
    </tr>
    <tr>
        <td>صندوق البريد</td>
        <td><input type="text" name="postoffice"  value="<?php echo $row['postoffice']; ?>" size="5s" /></td>
    </tr>
    <tr>
        <td>ملاحظات</td>
        <td>
            <textarea name="notes"  cols="30" rows="10"><?php echo $row['notes']; ?></textarea>
        </td>
    </tr>
    <tr>
        <td>هل تريد استقبال البريد</td>
        <td>
            <select name="receivemail" >
                <?php
                    if($row['receiveMail'] == 1){
                        echo '<option value="1">نعم</option>
                        <option value="0">لا</option>';
                    }else{
                        echo '
                       <option value="0">لا</option>
                       <option value="1">نعم</option>
                        ';
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td>هل تريد استقبال sms</td>
        <td>
            <select name="receivesms" >
                <?php
                    if($row['receiveSms'] == 1){
                        echo '<option value="1">نعم</option>
                        <option value="0">لا</option>';
                    }else{
                        echo '
                       <option value="0">لا</option>
                       <option value="1">نعم</option>
                        ';
                    }
                ?>
            </select>
        </td>
    </tr>
    <tr>
        <td colspan="2" style="text-align: center; ">
            <input name="edit" type="submit" value="تعديل البيانات" />
        </td>
    </tr>
</table>
</form>
<br />
<br />
<br />
<br />
