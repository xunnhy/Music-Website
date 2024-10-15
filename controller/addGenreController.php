<?php
    session_start();
    include_once "../config.php";
    
    if(isset($_POST['upload']))
    {
        $catname = $_POST['g_name'];
       
        $insert = mysqli_query($conn, "INSERT INTO theloai (TenTheLoai) VALUES ('$catname')");
 
        if($insert)
        {
            header("Location: ../admin.php?genre=success");
            exit; 
        }
        else
        {   
            echo mysqli_error($conn);
            header("Location: ../admin.php?genre=error");
            exit;
        }
    }
?>