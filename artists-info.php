<?php 
include "header_active.php";
?>
    <?php 
    include "header-img-artist.php";
    ?>
    <!-- Artist info -->
    <?php
    if(isset($_GET['id']))
    {
        $stt = 1;
        $NgheSi = $_GET['id'];
        require_once "config.php";
        $sql = "SELECT bh.HinhBaiHat, bh.TenBaiHat, bh.NgheSi, bh.idBaiHat FROM baihat bh, nghesi ns
        WHERE ns.TenNgheSi = bh.NgheSi AND ns.TenNgheSi = '$NgheSi'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                ?>
                <div class='list-music'>
                <div class='playlist-list'>
                    <p class="number"><?php echo $stt++ ?></p>
                    <img class="songs-img" src='./assets/images/songs/<?php echo $row['HinhBaiHat'];?>'><br>
                </div>

                    <div class='songs-title'>
                        <p class='songs-name'> <?php echo $row['TenBaiHat'];?></p><br>
                        <p class='songs-artist'><?php echo $row['NgheSi'];?></p><br>
                    </div>
    
                    <div class="songs-audio">
                        <!-- <audio controls>
                            <source src="./assets/audio/14.mp4">
                        </audio> -->
                        <i class="fa-sharp fa-light fa-heart song-icon favorite" idBaiHat="<?php echo $row["idBaiHat"];?>"></i>
                        <a href='musicplayer.php?id=<?php echo $row["idBaiHat"];?>' target='_blank'>
                            <i class="fas fa-play song-icon" ></i>
                        </a>
                    </div>
                </div>
    
            <?php
            }
            ?>
            </div>
        <?php
        }
        else {
            echo "0 results";
        }
        // mysqli_close($conn);
    }
    ?>
<?php include "footer.php"?>

<script src="./assets/javascript/script.js"></script>

<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
function playMusic() {
  window.open('./musicplayer/index.html', '_blank');
}

$(document).ready(function(){
            $(".favorite").click(function(){
                var current = $(this);
                var id = $(this).attr("idBaiHat"); // =1 ;Lấy giá trị thuộc tính id.

                $.ajax({
                    type:"POST",
                    dataType:"html",
                    url: "favorite.php",
                    data:"idBaiHat="+id,
                    success:function(result){
                        if(result=="1")
                        {
                            current.attr("class","fa-sharp fa-solid fa-heart song-icon favorite");
                        }
                        else
                        {
                            current.attr("class","fa-sharp fa-light fa-heart song-icon favorite");
                        }
                        
                    },
                    error: function (xhr,status,error){
                    },
                    complete: function(xhr,status){

                    }
                }); 

               
                
            });
        });  
</script>


</body>
</html>