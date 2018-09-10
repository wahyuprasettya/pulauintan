
<?php
@session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pulau intan | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="plugins/iCheck/square/blue.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="#"><img src="logo.jpg"width=350px; height=50px alt=""></p></h4></a>
  </div>
  <div class="login-box-body">
    <p class="login-box-msg"></p>
    <form action="" method="post">
      <div class="form-group has-feedback">
      
      <input type="text" class="form-control" placeholder="Username" name="username">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" placeholder="Password" name="password">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="form-group">
                <select class="form-control select2"  name ="rule" style="width: 100%;">
                  <option selected="selected" value= "">Pilih sesuai jabatan</option>
                  <option value ="admin">Admin</option>
                  <option value ="tutor">Tutor</option>
                  <option value ="user"> User</option>
                  <option value ="hrd"> HRD</option>
                </select>
              </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
          </div>
        </div>
        <div class="col-xs-4">
          <button type="submit" class="btn btn-danger btn-block btn-flat" name = "login">Masuk</button>
        </div>
      </div>
    </form>
  </div>
                      <B>Developed By MTW corporation<B>
</div>

<?php
include 'koneksi.php';

if (isset($_POST['login'])){
    $username = "";
    $username = (mysql_real_escape_string ($_POST['username']));
    $password = (mysql_real_escape_string ($_POST['password']));
    $rule = $_POST ['rule'];
   

    if($rule == 'admin'){

        $query=  "select * from tbl_admin where username ='$username' and  password = '$password'";
        $sql = mysqli_query($koneksi,$query) or die (mysql_error());
        $cek = mysqli_num_rows($sql);
       

        if($cek > 0){
          $data = mysqli_fetch_assoc($sql);
            $_SESSION ["username"] = $data ["username"];
            echo ("<script language='JavaScript'>
            window.location.href='admin/admin.php';
            </script>");

            
        }else {
            echo ("<script language='JavaScript'>
            window.alert('Gagal ! pastikan username , password dan jabatan benar!')
            window.location.href='login.php';
            </script>");
        }

    

    }elseif ($rule == 'tutor'){

      $query=  "select * from tbl_tutor where username ='$username' and  password = '$password'";
      $sql = mysqli_query($koneksi,$query) or die (mysql_error());
     
      $data = mysqli_fetch_array($sql);
     while( $cek = mysqli_num_rows($sql)){
       $r = $cek ['username'];
     }
     

      if($cek > 0){
       $r= $data['username']=$r;
          echo ("<script language='JavaScript'>
          window.location.href='tutor/tutor.php';
          </script>");

          
      }else {
          echo ("<script language='JavaScript'>
          window.alert('Gagal ! pastikan username , password dan jabatan benar!')
          window.alert('Jabatan salah!')
          window.location.href='login.php';
          </script>");
      }
   


    }elseif ($rule == 'user'){

      $query=  "select * from tbl_user where username ='$username' and  password = '$password'";
      $sql = mysqli_query($koneksi,$query) or die (mysql_error());
     
      $data = mysqli_fetch_array($sql);
      $cek = mysqli_num_rows($sql);
     

      if($cek > 0){
      
        $_SESSION['username'] = $username;
          echo ("<script language='JavaScript'>
          window.location.href='user/index.php';
          </script>");

          
      }else {
          echo ("<script language='JavaScript'>
          window.alert('Gagal ! pastikan username , password dan jabatan benar!')
          window.location.href='login.php';
          </script>");
      }
    }elseif ($rule == 'hrd'){

      $query=  "select * from tbl_user where username ='$username' and  password = '$password'";
      $sql = mysqli_query($koneksi,$query) or die (mysql_error());
     
      
      $cek = mysqli_num_rows($sql);
     

      if($cek > 0){
        // $data = mysqli_fetch_assoc($sql);
        // $_SESSION['nama_lengkap'] = $data['nama'];
        // $_SESSION['username'] = $username;
          echo ("<script language='JavaScript'>
          window.location.href='hrd/hrd.php';
          </script>");

          
      }else {
          echo ("<script language='JavaScript'>
          window.alert('Gagal ! pastikan username , password dan jabatan benar!')
          window.location.href='login.php';
          </script>");
      }
    }else {
      echo ("<script language='JavaScript'>
          window.alert('Pilih jabatan anda!')
          window.location.href='login.php';
          </script>");
    }
        
}
?>

<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%'
    });
  });
</script>
</body>
</html>
