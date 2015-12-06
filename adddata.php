<?php
  ob_start();
  session_start();

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

    $date = date("Y-m-d ");
        //check if user is already taken
    mysql_query("SET NAMES 'utf8'");
    $check = mysql_query("select * from student where name='$name'") or die("error in check query");
    $num = mysql_num_rows($check);
    if($num > 0){
            echo '<meta http-equiv="refresh" content="3; url=adddata.php" /> ';
            die("<h1 align='center'>الاسم موجود مسبقا</h1>");
    }

    mysql_query("SET NAMES 'utf8'");
    $query = mysql_query("INSERT INTO `student` VALUES  ('','$name','$family','$position','$city','$phone','$email','$postoffice','$notes','$receivemail','$receivesms','$date')") or die("error in query");
        if(isset($query)){
                $_SESSION['username'] = $name;
                // get user number id
                $s = $_SESSION['username'];
                $q = mysql_query("select * from student where name='".$s."'") or die("Error2");
                $r = mysql_fetch_assoc($q);
                $n = $r['id'];
            echo ("<h1 align='center'>تمت تسجيل بياناتك بنجاح</h1>");
            die("<h1 align='center'>رقمك هو $n</h1>");
        }else{
            die( "eroooooooooooooor");
        }
}

?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.com/demo/webpage/quirk/templates/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2015 21:56:17 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

  <title>تسجيل طالب جديد</title>

  <link rel="stylesheet" href="lib/fontawesome/css/font-awesome.css">
  <link rel="stylesheet" href="lib/select2/select2.css">

  <link rel="stylesheet" href="css/quirk.css">

  <script src="../lib/modernizr/modernizr.js"></script>
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="../lib/html5shiv/html5shiv.js"></script>
  <script src="../lib/respond/respond.src.js"></script>
  <![endif]-->
</head>

<body class="signwrapper">

  <div class="sign-overlay"></div>
  <div class="signpanel"></div>

  <div class="signup">
    <div class="row">
      <div class="col-sm-5">
        <div class="panel">
          <div class="panel-heading">
            <h1>تسجيل طالب جديد</h1>
            <h4 class="panel-title">انشاء حساب جديد</h4>
          </div>
          <div class="panel-body">

            <form action="adddata.php" method="post">
              <div class="form-group mb15">
                <input type="text" name="name" class="form-control" placeholder="الاسم">
              </div>
              <div class="form-group mb15">
                <input type="text" name="family" class="form-control" placeholder="اسم العائلة">
              </div>
              <div class="form-group mb15">
                <select name="position"  >
                <option value="n">شمال</option>
                <option value="s">جنوب</option>
                <option value="m">مركز</option>
                </select>
                <b style="color: #fff;" > اختيار الموقع  </b>
              </div>

              <div class="form-group mb15">
                <input type="text" name="city" class="form-control" placeholder="المدينة">
              </div>
              <div class="form-group mb15">
                <input type="text" name="phone" class="form-control" placeholder="التليفون">
              </div>
              <div class="form-group mb15">
                <input type="email" name="email" class="form-control" placeholder="الايميل">
              </div>
              <div class="form-group mb15">
                <input type="text" name="postoffice" class="form-control" placeholder="صندوق البريد">
              </div>
              <div class="form-group mb15">
                 <textarea name="notes"  cols="30" rows="5"></textarea>
                  <b style="color: #fff;" >ملاحظات</b>
              </div>
              <div class="form-group mb15">
                <select name="receivemail" >
                <option value="1">نعم</option>
                <option value="0">لا</option>
                </select>
               <b style="color: #fff;" >هل تريد استقبال البريد</b>
              </div>
              <div class="form-group mb15">
                <select name="receivesms" >
                    <option value="1">نعم</option>
                    <option value="0">لا</option>
                </select>
                <b style="color: #fff;" >هل تريد استقبال sms</b>
              </div>


              <div class="form-group">
                <button class="btn btn-success btn-quirk btn-block" name="add">انشاء الحساب</button>
              </div>
            </form>
          </div><!-- panel-body -->
        </div><!-- panel -->
      </div><!-- col-sm-5 -->
      <div class="col-sm-7">
        <div class="sign-sidebar">


          <hr class="invisible">

          <div class="form-group">
            <a href="signin.php" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">اذا كنت عضو بالفعل اضغط هنا لتسجيل الدخول</a>
          </div>
        </div><!-- sign-sidebar -->
      </div>
    </div>
  </div><!-- signup -->



<script src="../lib/jquery/jquery.js"></script>
<script src="../lib/bootstrap/js/bootstrap.js"></script>
<script src="../lib/select2/select2.js"></script>

<script>
$(function() {

  // Select2 Box
  $("select.form-control").select2({ minimumResultsForSearch: Infinity });

});
</script>

</body>

<!-- Mirrored from themepixels.com/demo/webpage/quirk/templates/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2015 21:56:17 GMT -->
</html>
