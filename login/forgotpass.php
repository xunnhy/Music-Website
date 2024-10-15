<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <title>Quên mật khẩu</title>

        <!-- CSS -->
        <!-- <link rel="stylesheet" href="style.css"> -->
                
        <!-- FontAwesome CSS -->
        <link rel="stylesheet" href="https://quythanh.tk/assets/css/fontawesomepro/all.css">
                        
    </head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Quicksand', sans-serif;
}

body {
    
    background: #613bfa;
}
    .container{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    /* background-image: linear-gradient(to top right, #613bfa,  #49a6ff); */
}
.container .form{
    background: #fff;
    padding: 30px 35px;
    border-radius: 5px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
.container .form form .form-control{
    height: 40px;
    font-size: 15px;
}
.container .form form .forget-pass{
    margin: -15px 0 15px 0;
}
.container .form form .forget-pass a{
   font-size: 15px;
}
.container .form form .button{
    background: #6665ee;
    color: #fff;
    font-size: 17px;
    font-weight: 500;
    transition: all 0.3s ease;
}
.container .form form .button:hover{
    background: #5757d1;
}
.container .form form .link{
    padding: 5px 0;
}
.container .form form .link a{
    color: #6665ee;
}
.container .login-form form p{
    font-size: 14px;
}
.container .row .alert{
    font-size: 14px;
}

</style>
</html>
<?php 


    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\SMTP;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';

    if(isset($_POST['username']))
    {
        //$email = $_POST['email'];

        //$token = bin2hex(random_bytes(16));//mã TB chứa cá ký tự có thể đưa vào một ULR. Bin thành hax để chuyển thành chuỗi thập lục phân

        //$token_hash = hash("sha256", $token);//trả về chuỗi 64 ký tự và lưu vào cột db

        //tạo giới hạn thời gian cho mã thông báo để k thể sử dụng cuộc tấn công Brute Force. gioihan:10p
        /*date_default_timezone_set('Asia/Ho_Chi_Minh');
        $expiry = date("Y-m-d H:i:s", time() + 60 * 10);
        
        require __DIR__ . "/config.php";
        $mysqli=$conn;
        $sql= "UPDATE user 
                SET reset_token_hash = ?,
                    reset_token_expires_at = ?
                where email = ?";

    $stmt = $mysqli->prepare($sql);
    $stmt ->bind_param("sss", $token_hash, $expiry, $user);
    $stmt->execute();*/

        $user = $_POST['username'];
        require_once "config.php";
        $sql = "SELECT * from user where email ='$user'";
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            $user = mysqli_fetch_assoc($result);
            $email = $user['email'];
            $token = md5(strtotime("now").$user['email']);
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $expiry = date("Y-m-d H:i:s", time() + 60 * 10);
            $sql = "UPDATE user set token = '$token', reset_token_expires_at='$expiry'  where email = '$email'";
            mysqli_query($conn,$sql);
            $link="<a href='w1music.ddns.net/Music%20Website/login/reset.php?token=".$token."'>Link</a>";

           

            $mail = new PHPMailer(true);
            try {
                
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                $mail->Username   = 'qxuannhii@gmail.com';                     //SMTP username
                $mail->Password   = 'qdmjpoaxdvvnqpsr';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('qxuannhii@gmail.com', 'Nhi');
                $mail->addAddress($email, $user['email']);     //Add a recipient
               
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'Reset mật khẩu';
                $mail->Body    = 'Tài khoản '.$user['email'].' vừa yêu cầu reset mật khẩu. Vui lòng click vào link : '. $link. 'để reset.';
               
                $mail->CharSet = 'utf8'; 

                $mail->send();
                echo "<script type='text/javascript'> alert('Vui lòng kiểm tra email và tiến hành reset mật khẩu')</script>";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }
    }   
?>
<!-- <div class='container'>
<form action = "forgotpass.php" method='post'>
    Username: <input type='text' placeholder='Nhập email' name='username'>
    <br><input type='submit' value='Reset'>
</form>
</div> -->

<div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="forgotpass.php" method="POST" autocomplete="">
                    <h2 class="text-center">Forgot Password</h2>
                    <p class="text-center">Enter your email address</p>
                  
                    <div class="form-group">
                        <input class="form-control" type='text' name="username" placeholder="Enter email address">
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" value="Reset">
                    </div>
                </form>
            </div>
        </div>
    </div>