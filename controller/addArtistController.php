<?php
    include_once "../config.php";

    if(isset($_POST['upload']))
    {
        $ArtistName = $_POST['a_name'];

        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];

        $location = "./assets/images/artists/"; // Đường dẫn đến thư mục lưu trữ hình ảnh
        $image = $location . $name;

        $target_dir = "../assets/images/artists/"; // Đường dẫn đến thư mục lưu trữ hình ảnh
        $finalImage = $target_dir . $name;

        move_uploaded_file($temp, $finalImage);
        $imageName = basename($name);

        // Sửa tên biến thành $imageName
        $insert = mysqli_query($conn, "INSERT INTO nghesi (TenNgheSi, HinhNgheSi) VALUES ('$ArtistName', '$imageName')");

        if (!$insert) {
            echo "Records added successfully.";
            header("Location: ../admin.php?artists=success");
        } else {
            echo mysqli_error($conn);
            header("Location: ../admin.php?artists=error");

        }
    }
?>