<?php

    include_once "../config.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM baihat where idBaiHat='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Song Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>