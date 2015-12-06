<?php
ob_start();
session_start();
if(!isset($_SESSION['username']) or !isset($_SESSION['password'])){
    header("location: signin.php");
}
include_once "include/db.php";
if(isset($_GET['search'])){
    $search = $_GET['search'];
    header("location: index.php?page=search&keyword=$search");
}

$q1 = mysql_query("select * from student") or die("error");
$n1 = mysql_num_rows($q1);
$q2 = mysql_query("select * from student") or die("error");
$n2 = mysql_num_rows($q2);
$q3 = mysql_query("select * from student where position = 'n'") or die("error");
$n3 = mysql_num_rows($q3);
$q4 = mysql_query("select * from student where position = 'm'") or die("error");
$n4 = mysql_num_rows($q4);
$q5 = mysql_query("select * from student where position = 's'") or die("error");
$n5 = mysql_num_rows($q5);

$my = date("Y-m");

$start = $my."-1";
$end = $my."-31";
$q6 =  mysql_query("select * from student where date >= '$start' and date <= '$end'") or die("error");
$n6 = mysql_num_rows($q6);

/**
 * Created by Ahmed Maher Halima .
 * facebook : https://www.facebook.com/yousseifweroquia
 * email : phpcodertop@gmail.com
 * Date: 10/10/2015
 */
include "include/header.php";
?>

<br />
<br />
<br />
<br />
<?php
    if (isset($_GET['page'])){
        include $_GET['page'].".php";
    }else{
       ?>
       <table  style="border: 2px solid #ccc; margin: 0 auto; width: 90%; text-align: center; font-weight: bolder;  ">
            <tr>
                <td colspan="2" style="text-align: center;">احصائيات الموقع</td>
            </tr>
            <tr style="margin-right: 0;">
                <td>الطلاب المسجلين بالموقع</td>
                <td><?php echo $n1; ?></td>
            </tr>
            <tr style="margin-right: 0;">
                <td>الطلاب المسجلين بالموقع خلال هذا الشهر</td>
                <td><?php echo $n6; ?></td>
            </tr>
            <tr style="margin-right: 0;">
                <td>الطلاب المسجلين بالموقع من الشمال</td>
                <td><?php echo $n3; ?></td>
            </tr>
            <tr style="margin-right: 0;">
                <td>الطلاب المسجلين بالموقع من الجنوب</td>
                <td><?php echo $n5; ?></td>
            </tr>
            <tr style="margin-right: 0;">
                <td>الطلاب المسجلين بالموقع من المركز</td>
                <td><?php echo $n4; ?></td>
            </tr>
       </table>
       <?php

    }
?>
<?php
include "include/footer.php";
?>
