<?php

    include_once "../config.php";
    
    $id=$_POST['record'];
    $query="DELETE FROM playlist where idPlaylist='$id'";

    $data=mysqli_query($conn,$query);

    if($data){
        echo"Playlist Deleted";
    }
    else{
        echo"Not able to delete";
    }
    
?>