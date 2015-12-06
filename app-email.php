<?php
include_once "include/db.php";
?>
<script type="text/javascript">
function checkSubmit(e)
$("input").keypress(function(event) {
    if (event.which == 13) {
        event.preventDefault();
        $("form").submit();
    }
});
</script>

<div dir="rtl">
    <div style="width: 40%; float: right; border: 5px solid #00bcd4;">
        <form action="index.php?page=search" method="get">
        <input type="text" name="search" size="20" placeholder="   بحث فى الطلاب" />
        </form>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b style="font-weight: bolder; background-color: #00bcd4; color: #fff; padding: 5px;">قائمة باسماء الطلاب الذين ارادو استقبال الرسائل</b>
        <table style="width: 100%; ">
            <tr>
                <?php
                //here show students  who want to receive emails
                $sql = "select * from student where receiveMail = 1";
                mysql_query("SET NAMES 'utf8'");
                $query = mysql_query($sql) or die("Error in first query");
                while ($row = mysql_fetch_assoc($query)){
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['family']."</td>";
                    echo "<td>".$row['phone']."</td>";
                    echo "</tr>";
                }
                ?>
            </tr>
        </table>
    </div>
    <div style="width: 40%; float: left; border: 5px solid #00bcd4;">
        <form action="index.php?page=search" method="get">
        <input type="text" name="search" size="20" placeholder="   بحث فى الطلاب" />
        </form>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <b style="font-weight: bolder; background-color: #00bcd4; color: #fff; padding: 5px;">قائمة اسماء الطلاب الذين ارادو استقبال البريد</b>
        <table style="width: 100%; ">
                <?php
                //here show students  who want to receive emails
                $sql = "select * from student where receiveSms = 1";
                mysql_query("SET NAMES 'utf8'");
                $query = mysql_query($sql) or die("Error in first query");
                while ($row = mysql_fetch_assoc($query)){
                    echo "<tr>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['family']."</td>";
                    echo "<td>".$row['email']."</td>";
                    echo "</tr>";
                }
                ?>
        </table>
    </div>
</div>


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
<br />
<br />