<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlists</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <!-- Playlists -->
    <?php
    echo "<div class='album-content push'>";
    echo "<h2 class='album-header'>Playlists</h2>";
    // if(isset($_GET['group'])) {
    //     $group = $_GET['group'];
        require_once "config.php";
        // if($group == "playlists") {
            $sql = "SELECT * FROM playlist";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0) {
                echo "<div class='list-albums owl-carousel owl-theme'>";
                while($row = mysqli_fetch_assoc($result)) {
                    echo "<div class='playlist'>";
                    ?>
                    <a href="playlists-info.php?id=<?php echo $row["idPlaylist"]?>" target='_blank'><img class ='album-img' src='./assets/images/playlists/<?php echo $row['HinhPlaylist'];?>' width='100%'><img></a>
                    <?php
                    echo "<a style ='text-decoration: none' href='playlists-info.php?id=".$row["idPlaylist"]."' target='_blank'><h6 class='album-title'>".$row['TenPlaylist']."</h6></a><br>";
                    echo "</div>";
                }
                echo "</div>";
            } else {
                echo "0 results";
            }
            echo "</div>";
    ?>  

<script src="./assets/javascript/script.js"></script>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    // Owl Carousel
    $(document).ready(function(){
            $('.list-albums').owlCarousel({
                loop:true,
                margin:20,
                nav: false,
                dots: false,
                autoplay: true,
                autoplayTimeout: 4000,
                autoplaySpeed: 1500,
                mouseDrag: true,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:3
                    },
                    1000:{
                        items:5
                    }
                }
            })
        });
    </script>
</body>
</html>

