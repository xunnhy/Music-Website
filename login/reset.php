<?php
    if(isset($_GET['token']))
    {
        $token = $_GET['token'];
        require_once "config.php";
        $sql = "SELECT * from user where token = '$token' AND CURRENT_TIMESTAMP < reset_token_expires_at";//now()
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            $user = mysqli_fetch_assoc($result);
            $username = $user['email'];
            $pass_new = strtotime('now');
            $pass_new_encrypt = md5($pass_new);
            $sql = "UPDATE user set pass = '$pass_new_encrypt', token='' where email = '$username'";
       
            if(mysqli_query($conn,$sql))
            {
                echo "Mật khẩu mới là: $pass_new";
            }
            
        }
    }
?>