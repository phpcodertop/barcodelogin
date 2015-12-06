  <?php
  ob_start();
  session_start();
  if(isset($_SESSION['username']) or isset($_SESSION['password'])){
    header("location: index.php");
    }
  include_once "include/db.php";

    if (isset($_POST['login'])){
        $username = addslashes(strip_tags($_POST['username']));
        $password = md5(addslashes(strip_tags($_POST['password'])));
        if($username && $password ){
            mysql_query("SET NAMES 'utf8'");
        $finduser = mysql_query("select * from admin where username='".$username."' and password='".$password."' ") or die("mysql error");
        if(mysql_num_rows($finduser) != 0){
            while($row = mysql_fetch_assoc($finduser)){
                $uname = strip_tags($row['username']);
                $upass = strip_tags($row['password']);
                $admin = $row['admin'];
            }
            if($username == $uname && $password == $upass){
                $_SESSION['username'] = $uname;
                $_SESSION['password'] = $upass;
                if($admin == 1){
                    echo '<meta http-equiv="refresh" content="3; url=index.php">';
                }else if ($admin == 0){
                    echo '<meta http-equiv="refresh" content="3; url=student/index.php">';
                }

                die( "<h1 align='center'>تم تسجيل الدخول بنجاح</h1>");
            }
        }else{
            echo '<meta http-equiv="refresh" content="3; url=signin.php">';
            die("<h1 align='center'>خطأ فى الرقم السرى او الباسورد</h1>");
        }

    }else{
        die("Not Found Page");
    }
    }
  ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themepixels.com/demo/webpage/quirk/templates/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2015 21:54:08 GMT -->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!--<link rel="shortcut icon" href="../images/favicon.png" type="image/png">-->

  <title>تسجيل الدخول</title>

  <link rel="stylesheet" href="lib/fontawesome/css/font-awesome.css">

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

  <div class="panel signin">
    <div class="panel-heading">
    <br />
      <span style="margin-left: 90px;"><img style="height: 150px; width: 150px;" src="images/Vanamo_Logo.png" alt="logo"></span><br /><br />
      <h4 class="panel-title">مرحبا برجاء تسجيل الدخول</h4>
    </div>
    <div class="panel-body">


      <form action="signin.php" method="post">
        <div class="form-group mb10">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input type="text" class="form-control" name="username" placeholder="ادخل اسم المستخدم">
          </div>
        </div>
        <div class="form-group nomargin">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
            <input type="password" class="form-control" name="password" placeholder="ادخل الباسورد">
          </div>
        </div>
        <div class="form-group">
          <button class="btn btn-success btn-quirk btn-block" name="login">تسجيل الدخول</button>
        </div>
      </form>
      <hr class="invisible">
      <div class="form-group">
        <a href="signup.php" class="btn btn-default btn-quirk btn-stroke btn-stroke-thin btn-block btn-sign">تسجيل طالب جديد</a>
      </div>
    </div>
  </div><!-- panel -->

</body>

<!-- Mirrored from themepixels.com/demo/webpage/quirk/templates/signin.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 10 Oct 2015 21:54:08 GMT -->
</html>
