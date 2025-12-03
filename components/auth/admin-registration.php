<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Sign Up Basic</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-style-mode" content="1">
    <!-- Place favicon.ico in the root directory -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/logo/tphl_logo.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/vendor/animate.css">
    <link rel="stylesheet" href="assets/css/plugins/apexcharts.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-jvectormap-2.0.5.css">
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <link rel="stylesheet" href="assets/css/vendor/magnific-popup.css">
    <link rel="stylesheet" href="assets/css/vendor/icomoon.css">
    <link rel="stylesheet" href="assets/css/vendor/fontawesome-pro.css">
    <link rel="stylesheet" href="assets/css/vendor/rating.css">
    <link rel="stylesheet" href="assets/css/vendor/dropzone.css">
    <link rel="stylesheet" href="assets/css/plugins/dropify.min.css">
    <link rel="stylesheet" href="assets/css/vendor/spacing.css">
    <link rel="stylesheet" href="assets/css/plugins/datatables.min.css">
    <link rel="stylesheet" href="assets/css/plugins/buttons.bootstrap5.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/plugins/select2.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery.timepicker.css">
    <link rel="stylesheet" href="assets/css/plugins/tagify.css">
    <link rel="stylesheet" href="assets/css/plugins/flatpickr.min.css">
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/plugins/fullcalendar.min.css">
    <link rel="stylesheet" href="assets/css/plugins/ion.rangeSlider.min.css">
    <link rel="stylesheet" href="assets/css/plugins/simplebar.css">
    <link rel="stylesheet" href="assets/css/plugins/waves.min.css">
    <link rel="stylesheet" href="assets/css/plugins/nano.min.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<?php
 $userFile = "data/user.json";
$userFile = __DIR__ . "/../data/user.json";

 $users = json_decode(file_get_contents($userFile),true);
 $message = '';

 if($_SERVER['REQUEST_METHOD'] === 'POST'){
  $name = $_POST['name'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);


    foreach($users as $u){
        if($u['email']===$email){
            $message = "Email Already Exists!";
            break;

        }
    }

    if($message === ""){
        $users[]=[
            "name"=>$name,
            "email"=>$email,
            "password"=>$password,
        ];

            
          file_put_contents($userFile, json_encode($users, JSON_PRETTY_PRINT));

        echo "<script>
                alert('Registration Successful! Please login.');
                window.location.href='?page=admin-login';
              </script>";
        exit;
    }
 }
?>



<body class="body-area">

    <div class="container-xxl">
        <!-- register area start-->
         <p style="color:red"><? $message?></p>
        <div class="authentication-wrapper basic-authentication">
            <div class="authentication-inner">
                <div class="card__wrapper">
                    <div class="authentication-top text-center mb-20">
                        <a href="javascript:;" class="authentication-logo logo-black">
                            <img src="assets/images/logo/tphl_logo.png" alt="logo">


                        </a>
                        <a href="javascript:;" class="authentication-logo logo-white">
                            <img src="assets/images/logo/logo_white.png" alt="logo">
                        </a>
                        <h4 class="mb-15">Welcome to Manez</h4>
                        <p class="mb-15">Please sign-in to your account and start the adventure</p>
                    </div>
               <form method="POST" action="?page=admin-registration">

                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="nameEmail">Username</label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" name="name" id="nameEmail" type="text" required>
                            </div>
                        </div>
                        <div class="from__input-box">
                            <div class="form__input-title">
                                <label for="email">Email</label>
                            </div>
                            <div class="form__input">
                                <input class="form-control" name="email" id="email" type="email" required>
                            </div>
                        </div>
                        <div class="from__input-box">
                            <div class="form__input-title d-flex justify-content-between">
                                <label for="passwordInput">Password</label>
                                <a href="auth-forgot-password-basic.html">
                                    <small>Forgot Password?</small>
                                </a>
                            </div>
                            <div class="form__input">
                                <input class="form-control" type="password" name="password" required id="passwordInput">
                                <div class="pass-icon" id="passwordToggle"><i
                                        class="fa-sharp fa-light fa-eye-slash"></i></div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="remember-me">
                                <label class="form-check-label" for="remember-me">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <button class="btn btn-primary w-100" type="submit">Sign Up</button>
                        </div>
                    </form>
                    <p class="text-center">
                        <span>New on our platform?</span>
                        <a href="?page=admin-login">
                            <span>Create an account</span>
                        </a>
                    </p>
                    <div class="divider mb-10 text-center">
                        <div class="divider-text">or</div>
                    </div>
                    <div class="common-social">
                        <a href="javascript:;"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="javascript:;"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="javascript:;"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="javascript:;"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- register area end-->
    </div>

    <!-- Back to top start -->
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    <!-- Back to top end -->

    <!-- JS here -->
    <script src="assets/js/vendor/jquery-3.7.0.js"></script>
    <script src="assets/js/vendor/isotope.pkgd.js"></script>
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="assets/js/vendor/magnific-popup.min.js"></script>
    <script src="assets/js/vendor/ajax-form.js"></script>
    <script src="assets/js/vendor/jquery.repeater.js"></script>
    <script src="assets/js/plugins/waypoints.min.js"></script>
    <script src="assets/js/plugins/dayjs.min.js"></script>
    <script src="assets/js/plugins/loader.js"></script>
    <script src="assets/js/plugins/jsvectormap.min.js"></script>
    <script src="assets/js/plugins/world-merc.js"></script>
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="assets/js/plugins/popper.min.js"></script>
    <script src="assets/js/plugins/simplebar.min.js"></script>
    <script src="assets/js/plugins/simplebar-active.js"></script>
    <script src="assets/js/plugins/backtotop.js"></script>
    <script src="assets/js/plugins/smooth-scrollbar.js"></script>
    <script src="assets/js/plugins/cleave.min.js"></script>
    <script src="assets/js/plugins/datatables.min.js"></script>
    <script src="assets/js/plugins/jquery.dataTables.min.js"></script>
    <script src="assets/js/plugins/dataTables.bootstrap5.min.js"></script>
    <script src="assets/js/plugins/dataTables.buttons.min.js"></script>
    <script src="assets/js/plugins/jszip.min.js"></script>
    <script src="assets/js/plugins/pdfmake.min.js"></script>
    <script src="assets/js/plugins/vfs_fonts.js"></script>
    <script src="assets/js/plugins/buttons.html5.min.js"></script>
    <script src="assets/js/plugins/buttons.print.min.js"></script>
    <script src="assets/js/plugins/buttons.colVis.min.js"></script>
    <script src="assets/js/plugins/steps-form.js"></script>
    <script src="assets/js/plugins/dropify.min.js"></script>
    <script src="assets/js/plugins/dropzone.js"></script>
    <script src="assets/js/plugins/tinymce.min.js"></script>
    <script src="assets/js/plugins/custom.js"></script>
    <script src="assets/js/plugins/typeahead.bundle.min.js"></script>
    <script src="assets/js/plugins/bloodhound.js"></script>
    <script src="assets/js/plugins/select2.full.min.js"></script>
    <script src="assets/js/plugins/jquery.timepicker.min.js"></script>
    <script src="assets/js/plugins/flatpickr.js"></script>
    <script src="assets/js/plugins/tagify.js"></script>
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <script src="assets/js/plugins/sweetalert2.all.min.js"></script>
    <script src="assets/js/plugins/apexcharts.min.js"></script>
    <script src="assets/js/plugins/fullcalendar.min.js"></script>
    <script src="assets/js/plugins/ion.rangeSlider.min.js"></script>
    <script src="assets/js/vendor/custom-tagify.js"></script>
    <script src="assets/js/vendor/height-equal.js"></script>
    <script src="assets/js/vendor/custom-chart.js"></script>
    <script src="assets/js/vendor/rangeslider-script.js"></script>
    <script src="assets/js/vendor/jquery.barrating.js"></script>
    <script src="assets/js/vendor/rating-script.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/vendor/sidebar.js"></script>

</body>

</html>

<?php 
// users.json path
// $usersFile = "data/users.json";

// // Load existing users
// $users = json_decode(file_get_contents($usersFile), true);

// $message = "";

// // Handle form submit
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {

//     $name     = $_POST['name'];
//     $email    = $_POST['email'];
//     $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//     // Check duplicate email
//     foreach ($users as $u) {
//         if ($u['email'] === $email) {
//             $message = "Email already exists!";
//             break;
//         }
//     }

//     if ($message === "") {
//         // Create new user
//         $users[] = [
//             "name" => $name,
//             "email" => $email,
//             "password" => $password
//         ];

//         // Save JSON file
//         file_put_contents($usersFile, json_encode($users, JSON_PRETTY_PRINT));

//         // Redirect to login page
//         header("Location: ?page=admin-login&registered=1");
//         exit;
//     }
// }
?>

<!-- <h2>Register</h2>
<p style="color:red"><?= $message ?></p>

<form method="POST">
    <input type="text" name="name" placeholder="Full Name" required><br><br>
    <input type="email" name="email" placeholder="Email" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">Register</button>
</form> -->





