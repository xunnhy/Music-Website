<?php
    include_once "../config.php";

    if(isset($_POST['upload']))
    {
        $PlaylistName = $_POST['p_name'];

        $name = $_FILES['file']['name'];
        $temp = $_FILES['file']['tmp_name'];

        $location = "./assets/images/playlists/"; // Đường dẫn đến thư mục lưu trữ hình ảnh
        $image = $location . $name;

        $target_dir = "../assets/images/playlists/"; // Đường dẫn đến thư mục lưu trữ hình ảnh
        $finalImage = $target_dir . $name;

        move_uploaded_file($temp, $finalImage);
        $imageName = basename($name);

        // Sửa tên biến thành $imageName
        $insert = mysqli_query($conn, "INSERT INTO playlist (TenPlaylist, HinhPlaylist) VALUES ('$PlaylistName', '$imageName')");

        if (!$insert) {
            echo mysqli_error($conn);
            header("Location: ../admin.php?playlists=error");
        } else {
            echo "Records added successfully.";
            header("Location: ../admin.php?playlists=success");
        }
    }
?>
