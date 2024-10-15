<?php
include_once "../config.php";

$al_id = $_POST['al_id'];
$al_name = $_POST['name'];
$artist = $_POST['ar_name'];

$updateItem = mysqli_query($conn, "UPDATE album SET TenAlbum='$al_name', NgheSi='$artist' WHERE idAlbum=$al_id");
if ($updateItem) {
    echo "true";
}
?>