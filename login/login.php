<?php
    session_start();//này mới chỉ để session khi nào cần thì gọi tới
    include("config.php");
    if(!isset($SESSION_['user']))//kiểm tra session đã tồn tại hay chưa
    {
        if($_SERVER['REQUEST_METHOD'] == "POST" && isset($_POST['login']))
        {
            $username = $_POST['email'];
            $pass = $_POST['pass'];

            
            if (!empty($username) && !empty($pass) && !is_numeric($username))
            {
                //Truy vấn dữ liệu để kiểm tra thông tin đăng nhập
                $sql = "SELECT id,email, pass, fullname, type FROM user WHERE email = '$username'";
                $result = mysqli_query($conn, $sql);

                //Kiểm tra xem bản ghi có tồn tại hay không
                if($result){
                    if($result && mysqli_num_rows($result) > 0)
                    {  
                        $userdata = mysqli_fetch_assoc($result);

                        if (password_verify($pass, $userdata['pass'])) //Kiểm tra mật khẩu
                        {
                            $_SESSION['user_id'] = $userdata['id'];
                            $_SESSION['user_name']=$userdata['fullname'];
                            Setcookie ("user_id", $userdata['id'], time() + (86400 * 30), "/");
                            Setcookie ("user_name", $userdata['fullname'], time() + (86400 * 30), "/");

                            if ($userdata['type'] == 1) {

                                header("location: /Music Website/admin.php"); // Chuyển hướng đến trang admin
                            } else {

                                header("location: /Music Website/index_active.php"); // Chuyển hướng đến trang index
                            }
                            exit;
                        }
                        else echo "<script type='text/javascript'> alert('Sai mật khẩu!')</script>";
                    }   
                
                    else echo "<script type='text/javascript'> alert('Sai email hoặc mật khẩu. Vui lòng đăng nhập lại!')</script>";
                }
                
            }
            else
            {
                echo "<script type='text/javascript'> alert('Vui lòng nhập đầy đủ thông tin!')</script>";
            }     
        }
    }
    //Xử lý đăng nhập
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login and SignUp Form</title>

    <!-- CSS -->
    <link rel="stylesheet" href="style.css">
            
    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="https://quythanh.tk/assets/css/fontawesomepro/all.css">
                    
</head>
<body>
    <section class="container forms">
        <div class="form login">
            <div class="form-content">
                <header>Log In</header>
                <form action="#" method="post">
                    <div class="field input-field">
                        <input type="email" name="email" placeholder="Email" class="input" required>
                    </div>

                    <div class="field input-field">
                        <input type="password" name="pass" placeholder="Password" class="password" required><!--1705372855-->
                        <i class="fa-light fa-eye-slash eye-icon"></i>
                    </div>

                    <div class="form-link">
                        <a href="forgotpass.php" class="forgot-pass">Forgotten password?</a>
                    </div>

                    <div class="field button-field">
                        <input type="submit" name="login" value="Log In">
                    </div>
                </form>

                <div class="form-link">
                    <span>Don't have an account? <a href="signup.php" class="link signup-link">Sign Up</a></span>
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
    </section>

    <!-- JavaScript -->
    <script src="./script.js"></script>
</body>
</html>