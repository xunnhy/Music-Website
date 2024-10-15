<?php
    session_start();

    include("config.php");

    //Xử lý đăng ký
    if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['signup']))
    {
        $fullname = $_POST['fullname'];
        $birthdate = $_POST['birthdate'];
        $email = $_POST['email'];
        $password = $_POST['pass'];  
        $pass_again = $_POST['pass_again'];
        
        //Kiểm tra các trường dữ liệu không được rỗng
        if( !empty($email) && !empty($password) && !empty($pass_again) && !is_numeric($email))
        {
            //kiểm tra xác nhận nhập mật khẩu đúng
            if ($password === $pass_again)
            {   
                $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
                $type = 2; // Set the type value to 2

                $query= "INSERT INTO user (fullname, birthdate, email, pass, type) VALUES ('$fullname', '$birthdate', '$email', '$hashedPassword', '$type')";

                mysqli_query($conn, $query);

                echo "<script type='text/javascript'> alert('Đăng kí thành công')</script>";
                header("location: /Music Website/index_active.php"); //Chuyển hướng đến trang web nhạc
            }
            else 
                echo "<script type='text/javascript'> alert('Mật khẩu không khớp. Vui lòng nhập lại')</script>";
        }
        else
        {
            echo "<script type='text/javascript'> alert('Vui lòng điền đầy đủ thông tin')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and SignUp Form </title>
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="./style.css">
            
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://quythanh.tk/assets/css/fontawesomepro/all.css">                
</head>
<body>
    <div class="container forms">
        <!-- Signup Form -->
        <div class="form signup">
            <div class="form-content">
                <header>Sign Up</header>
                <form action="#" method="post">

                    <div class="field input-field">
                        <input type="text" name="fullname" placeholder="Fullname" class="input" require>
                    </div>

                    <div class="field input-field">
                        <input type="text" id="sn-date" name="birthdate" placeholder="Birthdate" class="input" readonly require>
                    </div>

                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input" require>
                    </div>

                    <div class="field input-field">
                        <input type="password" name="pass" placeholder="Create password" class="password" require>
                    </div>

                    <div class="field input-field">
                        <input type="password" name="pass_again" placeholder="Confirm password" class="password" require>
                        <i class="fa-light fa-eye-slash eye-icon"></i>
                    </div>

                    <div class="field button-field">
                        <input type="submit" name="signup" value="Sign Up">
                    </div>
                </form>

                <div class="form-link">
                    <span>Already have an account? <a href="login.php" class="link login-link">Log In</a></span>
                </div>
            </div>

            <div class="line"></div>

            <div class="media-options">
                <a href="https://www.facebook.com/?locale=vi_VN" class="field facebook">
                    <i class="fa-brands fa-facebook facebook-icon"></i>
                    <span>Log in with Facebook</span>
                </a>
            </div>

            <div class="media-options">
                <a href="https://accounts.google.com" class="field google">
                    <img src="img/google.png" alt="" class="google-img">
                    <span>Log in with Google</span>
                </a>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="./script.js"></script>
</body>
</html>