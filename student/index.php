<?php
ob_start();
session_start();
if(!isset($_SESSION['username']) or !isset($_SESSION['password'])){
    header("location: ../signin.php");
}
include_once "../include/db.php";
/**
 * Created by Ahmed Maher Halima .
 * facebook : https://www.facebook.com/yousseifweroquia
 * email : phpcodertop@gmail.com
 * Date: 10/10/2015
 */
include "headerStudent.php";
?>

<br />
<br />
<br />
<br />
<?php
    if (isset($_GET['page'])){
        include $_GET['page'].".php";
    }else{
        // index.php only
        $name =  $_SESSION['username'];
        mysql_query("SET NAMES 'utf8'");
        $sql = "SELECT * from student WHERE name='$name'";
        $q = mysql_query($sql);
        $row = mysql_fetch_assoc($q);
        ?>
        <table style="border: 2px solid #ccc; margin: 0 auto; width: 50%; text-align: start; font-weight: bolder; direction: rtl; ">
            <tr>
                <td>الرقم الخاص بك</td>
                <td><?php echo $row['id']; ?></td>
            </tr>
            <tr>
                <td>الاسم</td>
                <td><?php echo $row['name']; ?></td>
            </tr>
            <tr>
                <td>اسم العائلة	</td>
                <td><?php echo $row['name']; ?></td>
            </tr>
            <tr>
                <td>الموقع</td>
                <td><?php
                    switch ($row['position']){
                        case 'n':
                        echo "الشمال";
                        break;
                        case 's':
                        echo "الجنوب";
                        break;
                        case 'm':
                        echo "المركز";
                        break;
                    }
                ?></td>
            </tr>
            <tr>
                <td>المدينة</td>
                <td><?php echo $row['city']; ?></td>
            </tr>
            <tr>
                <td>التليفون</td>
                <td><?php echo $row['phone']; ?></td>
            </tr>
            <tr>
                <td>الايميل</td>
                <td><?php echo $row['email']; ?></td>
            </tr>
            <tr>
                <td>صندوق البريد</td>
                <td><?php echo $row['postoffice']; ?></td>
            </tr>
            <tr>
                <td>ملاحظات</td>
                <td><?php echo $row['notes']; ?></td>
            </tr>
            <tr>
                <td colspan="2" style="text-align: center;"><a href="index.php?page=user-profile">تعديل البيانات</a></td>
            </tr>


        </table>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <?php

    }
?>
<?php
include "../include/footer.php";
ob_end_flush();
?>
