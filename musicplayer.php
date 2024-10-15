
<!DOCTYPE html>
<?php
    include "header_active.php";
?>
<html lang="en">
<head>
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./assets/css/music_player_style.css">
    <link rel="stylesheet" href="./assets/css/grid_system.css">

     <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/icon_logo.png">
</head>
<body>

<?php
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        require_once "config.php";
        $sql = "SELECT * FROM baihat WHERE idBaiHat = $id";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result)>0)
        {
            $song_info = mysqli_fetch_assoc($result);
            $song = mysqli_fetch_assoc($result);
        ?>
<div class="grid wide" style="margin-left: 50px;">
    <div class="row">
        <div class="col l-8 m-12 c-12">
            <div class="song-decs-left">
                <h2 class='left-header'><b>Tên bài hát: </b> <?php echo $song_info['TenBaiHat'];?></h2><br>
                <h3 class='left-text'><b>Nghệ sĩ: </b><?php echo $song_info['NgheSi'];?></h3><br>
                <p class="left-text"><b>Album: </b><?php echo $song_info['TenAlbum'];?></p><br>
                <p class="left-text"><b>Thể loại: </b><?php echo $song_info['TheLoai'];?></p><br>
                <p class="left-text"><b>Lượt thích: </b><?php echo $song_info['LuotThich'];?></p><br>
                <div class="social-icon-bar"> 
                    <div class="social-icon-bar-left">
                        <a href="favorite-list.php">
                            <i class="fa-sharp fa-solid fa-heart heart-icon">
                                <span class="white-text">Thích</span>
                            </i>
                        </a>
                    </div>
                    <div class="social-icon-bar-right">
                        <a href="https://www.facebook.com/NhacCuaTuiOfficial/" target='_blank'><i class="fa-brands fa-facebook-f facebook-icon"></i></a>
                        <a href="https://www.tiktok.com/@nct_nhaccuatui" target='_blank'><i class="fa-brands fa-tiktok tiktok-icon"></i></a>
                    </div>
                </div>
                <div class="music-player">
                   
                    <div class="grid wide">
                        <div class="row">
                            <div class="col l-4 m-0 c-0">
                                <div class="cd">
                                    <img class="song-left-img" src='./assets/images/songs/<?php echo $song_info['HinhBaiHat'];?>'><br>
                                </div>
                            </div>
                            <div class="col l-8 m-12 c-12">
                                <h2 class='left-header-mp'> <?php echo $song_info['TenBaiHat'];?></h2><br>
                                <h3 class='left-text-mp'><?php echo $song_info['NgheSi'];?></h3><br> 
                                <audio controls autoplay style="margin: 5px 95px;">
                                    <source src="./assets/audio/<?php echo $song_info['Audio'];?>" type="audio/mpeg">
                                        <!-- Your browser does not support the audio element. -->
                                </audio> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="song-lyrics">
                <h2 class='song-lyric-header' style='margin-top: 15px;'>Lời bài hát <b> <?php echo $song_info['TenBaiHat'];?></b></h2><br>
                <pre class="song-lyrics-text"><?php echo $song_info['Lyric'];?></pre>
            </div>   
        </div>
                    <div class="col l-4 m-0 c-0">
                        <div class="song-right">
                            <h2 class='right-header'>Tiếp theo</h2>
                            <?php
                            if(isset($_GET['id']))
                              {
                                $id = $_GET['id'];
                                require_once "config.php";
                                $sql = "SELECT * FROM baihat 
                                WHERE idBaiHat <> $id
                                ORDER BY RAND()";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)>0)
                                    {
                                    $song = mysqli_fetch_assoc($result);
                                    }
                                }
                                ?>
                            <div class="grid wide song-previous">
                                 <div class="row">
                                    <div class="col l-4 m-0 c-0">
                                    <a href='musicplayer.php?id=<?php echo  $song["idBaiHat"];?>'>
                                        <img class="song-right-img" src='./assets/images/songs/<?php echo $song['HinhBaiHat'];?>'><br>
                                    </a>
                                        
                                    </div>
                                    <div class="col l-8 m-12 c-12">
                                    <a href='musicplayer.php?id=<?php echo  $song["idBaiHat"];?>'   style ='text-decoration: none;'>
                                        <h2 class='right-header-mp'> <?php echo $song['TenBaiHat'];?></h2><br>
                                    </a>
                                        <h3 class='right-text-mp'><?php echo $song['NgheSi'];?></h3><br> 
                                    </div>
                                </div>
                            </div>
                            
                            <h2 class='right-header' style="margin-top: 15px;">Gợi ý</h2>
                            <?php
                            if(isset($_GET['id']))
                              {
                                $id = $_GET['id'];
                                require_once "config.php";
                                $sql = "SELECT *
                                FROM baihat
                                WHERE idBaiHat <> $id
                                ORDER BY RAND()
                                LIMIT 10";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)>0)
                                  {
                                    $song = mysqli_fetch_assoc($result);
                                    }  
                                        while($song = mysqli_fetch_assoc($result))
                                        {
                                ?>

                            <div class="grid wide song-suggestion">
                                <div class="row">
                                    <div class="col l-4 m-0 c-0">
                                    <a href='musicplayer.php?id=<?php echo  $song["idBaiHat"];?>' >
                                        <img class="song-right-img" src='./assets/images/songs/<?php echo $song['HinhBaiHat'];?>'><br>
                                    </a>
                                    </div>
                                    <div class="col l-8 m-12 c-12">
                                    <a href='musicplayer.php?id=<?php echo  $song["idBaiHat"];?>'  style ='text-decoration: none;'>
                                        <h2 class='right-header-mp'> <?php echo $song['TenBaiHat'];?></h2><br>
                                        </a>
                                        <h3 class='right-text-mp'><?php echo $song['NgheSi'];?></h3><br> 
                                    </div>
                                </div>
                            </div>
                            <?php
                                    }
                                }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
</div>

 
           
        <?php
       $sql = "delete from history where idBaiHat = ".$song_info['idBaiHat']." and id = ".$_SESSION['user_id'];
            mysqli_query($conn,$sql);

            $sql = "insert into history(idBaiHat, id, created_at) values (".$song_info['idBaiHat'].",".$_SESSION['user_id'].", now())";
            mysqli_query($conn,$sql);
        }
    }
?>

<!-- <script src="./assets/javascript/script.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script> -->
 <!-- <script>
    $(document).ready(function() {
         handleEvents();
     });


function handleEvents() {
    const cd = document.querySelector('.cd');
     const cdThumb = document.querySelector('.song-left-img');

    if (cd && cdThumb) {
         const cdThumbAnimate = cdThumb.animate(
           [{ transform: 'rotate(360deg)' }],
           {
                duration: 1000,
                iterations: Infinity,
            }
        );

       cdThumbAnimate.pause();
    }
 }
  </script>
<?php
    include "./footer.php";
?>
</body>
</html>