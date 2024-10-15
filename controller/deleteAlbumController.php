<?php

    include_once "../config.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM album where idAlbum ='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Album Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>