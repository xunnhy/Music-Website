<?php
    include_once "../config.php";

    if(isset($_POST['upload']))
    {
        $AlbumName = $_POST['al_name'];
        $arname = $_POST['ar_name'];

        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];

        $location = "./assets/images/albums/"; // Đường dẫn đến thư mục lưu trữ hình ảnh
        $image = $location . $name;

        $target_dir = "../assets/images/albums/"; // Đường dẫn đến thư mục lưu trữ hình ảnh
        $finalImage = $target_dir . $name;

        move_uploaded_file($temp, $finalImage);
        $imageName = basename($name);

        // Sửa tên biến thành $imageName
        $insert = mysqli_query($conn, "INSERT INTO album (TenAlbum, NgheSi, HinhAlbum) VALUES ('$AlbumName', '$arname', '$imageName')");

        if (!$insert) {
            echo mysqli_error($conn);
            header("Location: ../admin.php?album=error");
            exit;
            
        } else {
            echo "Records added successfully.";
            header("Location: ../admin.php?album=success");
            exit;
        }
    }
?>
