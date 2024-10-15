<?php
    include_once "../config.php";

    $song_id=$_POST['song_id'];
    $s_name= $_POST['name'];
    $s_artist= $_POST['artist'];
    $s_album= $_POST['album'];
    $s_genre= $_POST['genre'];

    // if( isset($_FILES['newImage']) ){
        
    //     $location="./assests/images/albums/";
    //     $img = $_FILES['newImage']['name'];
    //     $tmp = $_FILES['newImage']['tmp_name'];
    //     $dir = '../assests/images/albums/';
    //     $ext = strtolower(pathinfo($img, PATHINFO_EXTENSION));
    //     $valid_extensions = array('jpeg', 'jpg', 'png', 'gif','webp');
    //     $image =rand(1000,1000000).".".$ext;
    //     $final_image=$location. $image;
    //     if (in_array($ext, $valid_extensions)) {
    //         $path = UPLOAD_PATH . $image;
    //         move_uploaded_file($tmp, $dir.$image);
    //         $imageName = basename($image);
    //     }
    // }else{
    //     $final_image=$_POST['existingImage'];
    // }
    $updateItem = mysqli_query($conn,"UPDATE baihat SET 
        TenBaiHat='$s_name', 
        NgheSi='$s_artist',
        idAlbum='$s_album', 
        idTheLoai=$s_genre
        WHERE idBaiHat=$song_id");


    if($updateItem)
    {
        echo "true";
    }
    // else
    // {
    //     echo mysqli_error($conn);
    // }
?>