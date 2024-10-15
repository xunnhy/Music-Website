<?php

    include_once "../config.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM nghesi where idNgheSi='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Artist Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>