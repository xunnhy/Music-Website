<?php 
include "header.php"
?>
<style>
.keyword {
    margin-left: 30px;
}
.search-songs {
    display:grid;
    grid-template-columns: repeat(5,19%);
    grid-column-gap:15px;
    margin-top: 20px;
    margin-left: 20px;
}

.song {
    text-align:center;
    margin-bottom: 15px;
    /* border: 1px solid #e3e3e3; */
    
    overflow: hidden;
}

.song-image {
    width: 200px;
    object-fit: cover;
    border-radius: 15px;
}

.song-name {
    margin-top: 10px;
    font-weight: 700;
    font-size: 18px;
}

.artist-name {
    font-size: 16px;
    margin-top: -10px;
    font-weight: 500;
}

.not-found {
    margin-left: 30px;
    margin-top: 20px;
    font-size: 16px;
    font-weight: 500;

}
</style>

<?php
    include "config.php";
    if(isset($_GET['keyword'])){
        $keyword = $_GET['keyword'];
        $sql = "SELECT * FROM baihat 
        WHERE TenBaiHat LIKE '%$keyword%'OR NgheSi LIKE '%$keyword%'";
        $result = mysqli_query($conn, $sql);
    }
?>
<h2 class="keyword">Từ khóa tìm kiếm: <?php echo $_GET['keyword']; ?></h2>
<?php
    if (isset($result) && mysqli_num_rows($result) > 0) {
        echo "<div class='search-songs'>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='song'>";
            // echo "<a href='header_active.php?manage=song&id=".$row['id']."'>";
            echo "<img class='song-image' src='./assets/images/songs/".$row['HinhBaiHat']."'><br>";
            echo "<h6 class='song-name'>".$row['TenBaiHat']."</h6><br>";
            echo "<p class='artist-name'>".$row['NgheSi']."</p><br>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "<h6 class='not-found'>Không tìm thấy bài hát</h6>";
    }
?>

<?php 
include "footer.php";
?>