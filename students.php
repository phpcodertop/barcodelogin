<?php
include_once "include/db.php";
?>
<table dir="rtl" style="width: 100%;">
    <tr style="font-weight: bolder; background-color: #00bcd4; color: #fff;">
        <td>#</td>
        <td>الاسم</td>
        <td>العائلة</td>
        <td>الموقع</td>
        <td>المدينة</td>
        <td>التليفون</td>
        <td>الاميل</td>
        <td>صندوق بريد</td>
        <td>ملاحظات</td>
        <td>البريد : نعم او لا</td>
        <td>رسائل : نعم او لا</td>
        <td>رسالة</td>
        <td>تعديل</td>
        <td>حذف</td>
        <td>طباعة</td>
    </tr>
    <?php 

                        $sql = "SELECT * FROM `student` order by id desc";
                        mysql_query("SET NAMES 'utf8'");
                        $rs_result = mysql_query ($sql); //run the query

                        while ($row = mysql_fetch_assoc($rs_result)) {
                        ?>
                                    <tr>
                                    <td><?php echo $row['id']; ?></td>
                                    <td><?php echo $row['name']; ?></td>
                                    <td><?php echo $row['family']; ?></td>
                                    <td>
                                    <?php
                                     switch ($row['position']){
                                         case 'n':
                                         echo "الشمال";
                                         break;
                                         case 's':
                                         echo "الجنوب";
                                         break;
                                         case 'm':
                                         echo "الوسط";
                                         break;
                                     }
                                     ?>
                                    </td>
                                    <td><?php echo $row['city']; ?></td>
                                    <td><?php echo $row['phone']; ?></td>
                                    <td><?php echo $row['email']; ?></td>
                                    <td><?php echo $row['postoffice']; ?></td>
                                    <td><?php echo $row['notes']; ?></td>
                                    <td><?php
                                    switch ($row['receiveMail']){
                                         case 1:
                                         echo "نعم";
                                         break;
                                         case 0:
                                         echo "لا";
                                         break;
                                     }
                                     ?> </td>
                                    <td><?php switch ($row['receiveSms']){
                                         case 1:
                                         echo "نعم";
                                         break;
                                         case 0:
                                         echo "لا";
                                         break;
                                     } ?></td>
                                    <td><a href="index.php?page=msg&studentid=<?php echo $row['id']; ?>"><img src="include/Places-mail-message-icon.png" alt="msg" /></a></td>
                                    <td><a href="index.php?page=editstudents&studentid=<?php echo $row['id']; ?>">تعديل</a></td>
									<td><a  href="index.php?page=deletestudents&studentid=<?php echo $row['id']; ?>">حذف</a></td>
									<td><a target="_blank" href="print.php?studentid=<?php echo $row['id']; ?>">طباعة</a></td>
                                    </tr>
                        <?php
                        };
                        
	?>
</table>
      <div class="pagination">

      </div>
<br />
<br />
<br />
<br />