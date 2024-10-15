<?php

    include_once "../config.php";
    
    $c_id=$_POST['record'];
    $query="DELETE FROM theloai where idTheLoai='$c_id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Genre Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>