
<?php
// require 'koneksi.php';

// if (isset($_COOKIE['login_admin'])) $_SESSION['login_admin'] = $_COOKIE['login_admin'];

// if (isset($_COOKIE['get_id'])) $_SESSION['get_id'] = $_COOKIE['get_id'];

// if (isset($_SESSION['login_admin'])) header("location: admin/");

// $password = null;
// $username = null;
// $err_user = false;
// $err_pass = false;
// $err_stss = false;


// if (isset($_POST['login'])) {
//   $username = $_POST['username'];
//   $password = $_POST['password'];

//   $result = mysqli_query($conn, "SELECT * FROM tb_akun WHERE username = '$username' AND status = 'Aktif'");
//   $get = mysqli_fetch_assoc($result);

//   if ($get) {
//     $get_password = $get['password'];
//     $get_id = $get['id'];
//     $level_akun = $get['level_akun'];
//     $status = $get['status'];

//     if (password_verify($password, $get_password)) {
//       $_SESSION['get_id'] = $get_id;
//       setcookie('get_id', $get_id, time()+172800);

//       if ($level_akun == 'admin') {
//         if ($status != 'Aktif') $err_stss = true;
//         else {
//           $_SESSION['login_admin'] = $get_password;
//           if (isset($_POST['remember'])) {
//             setcookie('login_admin', $get_password, time()+172800);
//           }
//           header("location: admin/");
//           exit();
//         }
//       }
//     } else $err_pass = true;
//   } else $err_user = true;
// }

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>SPK PM UNM| Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition login-page">
  
<h4 style="text-align: center;">
  WEBSITE ADMIN KECAMATAN </h4>
<h4 style="text-align: center;">
PELAPORAN SAMPAH KECAMATAN TAMALATE</h4>
<div class="login-box">
  <div class="login-logo">
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Login</p>
      <br>

      <form  method="POST" class="needs-validation">
        <div class="input-group mb-3">
          <input id="username" type="text" class="form-control" name="username" tabindex="1" required autofocus value="">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
          </div>
          <div class="invalid-feedback">
                        Masukkan username
                      </div>
                      <?php
                      // if ($err_user == true) { 
                        ?>
                        <!-- <div class="text-danger">
                          Username tidak ditemukan
                        </div> -->
                      <?php //} ?>

        <div class="input-group mb-3">
          <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="invalid-feedback"> Masukkan password</div>
        <?php //if ($err_pass == true) { ?>
        <!-- <div class="text-danger">
          Password tidak sesuai
        </div> -->
        <?php// } ?>

        <?php //if ($err_stss == true) { ?>
        <!-- <div class="text-danger">
          Akun belum diverifikasi atau sedang dinonaktifkan
        </div> -->
        <?php //} ?>
          <br><br>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
              <label for="remember-me">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <!-- <button type="submit" class="btn btn-primary btn-block" name="login" tabindex="4">Login</button> -->
            <a  href="admin/" type="submit" class="btn btn-primary btn-block" name="login" tabindex="4">Login</a>
          </div>
          <!-- /.col -->
        </div>
      </form>

    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets/dist/js/adminlte.min.js"></script>

</body>
</html>
