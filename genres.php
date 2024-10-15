<?php
    include "header_active.php";
?>
<style>
        .list-songs{
            display:grid;
            grid-template-columns: repeat(5,19%);
            grid-column-gap:15px;
            margin: 0 80px;
        }
        .song{
            text-align:center;
            overflow: hidden;
        }
        .song-img {
            width: 200px;
            border-radius: 15px;
        }

        .song-title, 
        .song-text {
            text-align: center;
        }

        .song-title {
            font-size: 16px;
        }

        .song-text {
            font-size: 14px;
            font-weight: 400;
        }

        
    </style>
</head>
<body>
<?php
    require_once "config.php";
    $sql="select * from theloai";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0){
        echo "<div class='list-songs'>";
    // output data of each row
    while($row =mysqli_fetch_assoc($result)){
    // xử lý hiển thị dữ liệu
            echo "<div class='playlist'>";
                    echo "<img class = 'song-img' src='./assets/images/genres/".$row['HinhTheLoai']."'><br>";
                    echo "<h6 class='song-title'>".$row['TenTheLoai']."</b><br>";
                    echo "</div>";

    }
    echo "</div>";
    }
    else {
    echo "0 results";
    }
?>
<?php
    include "footer.php";
?>
    <script src="./assets/javascript/script.js"></script>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>