<?php
include_once "../config.php";

$a_id = $_POST['a_id'];
$a_name = $_POST['name'];


$updateItem = mysqli_query($conn, "UPDATE nghesi SET TenNgheSi='$a_name' WHERE idNgheSi=$a_id");

if ($updateItem) {
    echo "true";
}
?>