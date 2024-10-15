<?php
include_once "../config.php";

if (isset($_POST['upload'])) {
    $s_name = $_POST['s_name'];
    $album = $_POST['album'];
    $artist = $_POST['artist'];
    $genre = $_POST['genre'];
    $audio = $_FILES['audio']['name'];
    $audioTemp = $_FILES['audio']['tmp_name'];

    $image = $_FILES['image']['name'];
    $temp = $_FILES['image']['tmp_name'];

    $audioLocation = "./assets/audio/"; // Đường dẫn đến thư mục lưu trữ âm thanh
    $audioPath = $audioLocation . $audio;

    $target_dir_audio = "../assets/audio/"; // Đường dẫn đến thư mục lưu trữ âm thanh
    $finalAudioPath = $target_dir_audio . $audio;

    $imageLocation = "./assets/images/artists/"; // Đường dẫn đến thư mục lưu trữ hình ảnh
    $imagePath = $imageLocation . $image;

    $target_dir_image = "../assets/images/artists/"; // Đường dẫn đến thư mục lưu trữ hình ảnh
    $finalImagePath = $target_dir_image . $image;

    move_uploaded_file($audioTemp, $finalAudioPath);
    move_uploaded_file($temp, $finalImagePath);

    $imageName = basename($image);
    $audioName = basename($audio);

    $insert = mysqli_query($conn, "INSERT INTO baihat (TenBaiHat, idTheLoai, idAlbum, NgheSi, Audio, HinhBaiHat) 
        VALUES ('$s_name', '$genre', '$album', '$artist', '$audioName', '$imageName')");

    if (!$insert) {
        header("Location: ../admin.php?song=error");
        exit;
    } else {
        echo mysqli_error($conn);
        echo "Records added successfully.";
        header("Location: ../admin.php?song=success");
        exit;
        
    }
}
?>