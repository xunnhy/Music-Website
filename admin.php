<!DOCTYPE html>
<html>
<head>
    <title>Admin</title>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="./assets/css/admin_style.css">
    </head>
</head>
<body >
    
        <?php
            include "./sidebar.php";
           
            include_once "./config.php";
        ?>

    <div id="main-content" class="container allContent-section py-4">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa-solid fa-message-music" style="font-size: 50px;"></i>
                    <h4 style="color:#000; margin-top: 10px;">Total Genres</h4>
                    <h5 style="color:#000; margin-top: 5px;">
                    <?php
                        $sql="SELECT * from theloai";
                        $result=$conn-> query($sql);
                        $count=0;
                        if ($result-> num_rows > 0){
                            while ($row=$result-> fetch_assoc()) {
                    
                                $count=$count+1;
                            }
                        }
                        echo $count;
                    ?></h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa-solid fa-music" style="font-size: 50px;"></i>
                    <h4 style="color:#000; margin-top: 10px">Total Songs</h4>
                    <h5 style="color:#000; margin-top: 5px">
                    <?php
                       
                       $sql="SELECT * from baihat";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card">
                    <i class="fa-solid fa-list-music" style="font-size: 50px;"></i>
                    <h4 style="color:#000; margin-top: 10px">Total Playlists</h4>
                    <h5 style="color:#000; margin-top: 5px">
                    <?php
                       
                       $sql="SELECT * from playlist";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
            <div class="card">
                    <i class="fa-solid fa-user-music" style="font-size: 50px;"></i>
                    <h4 style="color:#000; margin-top: 10px">Total Artists</h4>
                    <h5 style="color:#000; margin-top: 5px">
                    <?php
                       
                       $sql="SELECT * from nghesi";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa-solid fa-album" style="font-size: 50px;"></i>
                    <h4 style="color:#000; margin-top: 10px">Total Albums</h4>
                    <h5 style="color:#000; margin-top: 5px">
                    <?php
                       
                       $sql="SELECT * from album";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="card">
                    <i class="fa-solid fa-user" style="font-size: 50px;"></i>
                    <h4 style="color:#000; margin-top: 10px">Total Users</h4>
                    <h5 style="color:#000; margin-top: 5px">
                    <?php
                       
                       $sql="SELECT * from user where type=2";
                       $result=$conn-> query($sql);
                       $count=0;
                       if ($result-> num_rows > 0){
                           while ($row=$result-> fetch_assoc()) {
                   
                               $count=$count+1;
                           }
                       }
                       echo $count;
                   ?>
                   </h5>
                </div>
            </div>
        </div>
        
    </div>
       
            
        <?php
            if (isset($_GET['genre']) && $_GET['genre'] == "success") {
                echo '<script> alert("Genre Successfully Added")</script>';
            }else if (isset($_GET['genre']) && $_GET['genre'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['album']) && $_GET['album'] == "success") {
                echo '<script> alert("Album Successfully Added")</script>';
            }else if (isset($_GET['album']) && $_GET['album'] == "error") {
                echo '<script> alert("Adding Unsuccess")</script>';
            }
            if (isset($_GET['song']) && $_GET['song'] == "success") {
                echo '<script> alert("Song Successfully Added")</script>';
            }else if (isset($_GET['song']) && $_GET['song'] == "error") {
                echo '<script> alert("Song Unsuccess")</script>';
            }
            if (isset($_GET['artist']) && $_GET['artist'] == "success") {
                echo '<script> alert("Artist Successfully Added")</script>';
            }else if (isset($_GET['artist']) && $_GET['artist'] == "error") {
                echo '<script> alert("Artist Unsuccess")</script>';
            }
            if (isset($_GET['playlist']) && $_GET['playlist'] == "success") {
                echo '<script> alert("Artist Successfully Added")</script>';
            }else if (isset($_GET['playlist']) && $_GET['playlist'] == "error") {
                echo '<script> alert("Artist Unsuccess")</script>';
            }
        ?>


    <script type="text/javascript" src="./assets/javascript/ajaxWork.js"></script>    
    <!-- <script type="text/javascript" src="./assets/javascript/admin_script.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.1.1.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>
 
</html>