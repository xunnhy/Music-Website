<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./assets/css/style.css">

    <!-- Favicon -->
    <link rel="shortcut icon" href="./assets/images/icon_logo.png">

    <!----======== Font Awesome ======== -->
    <link rel="stylesheet" href="https://quythanh.tk/assets/css/fontawesomepro/all.css">

    <!----======== Owl Carousel ======== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.green.min.css" integrity="sha512-C8Movfk6DU/H5PzarG0+Dv9MA9IZzvmQpO/3cIlGIflmtY3vIud07myMu4M/NTPJl8jmZtt/4mC9bAioMZBBdA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    <title>Music Website</title>
</head>

<body>
    <!-- Events -->
    <?php
    echo "<div class='events-content push'>";
    echo "<h2 class='event-header'>Events</h2>";

    require_once "config.php";

    $sql = "SELECT * FROM sukien";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        echo "<div class='list-events owl-carousel owl-theme'>";
        while($row = mysqli_fetch_assoc($result)) {
            echo "<div class='event'>";
            echo "<img class='event-img' src='./assets/images/events/".$row['AnhSuKien']."' alt='Event Image'><br>";
            echo "<h6 class='event-title'>".$row['TieuDe']."</h6><br>";
            echo "<div class='button-join'>";
            echo "<button><i class='fa-sharp fa-regular fa-plus event-icon'></i>Join Event</button>";
            echo "</div>";
            echo "</div>";
        }
        echo "</div>";
    } else {
        echo "0 results";
    }

    echo "</div>";
    mysqli_close($conn);
?>


</div>
    <script src="./assets/javascript/script.js"></script>
    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
    // Owl Carousel
    $(document).ready(function(){
            $('.list-events').owlCarousel({
                loop:true,
                margin:20,
                nav: false,
                dots: false,
                // autoplay: true,
                // autoplayTimeout: 4000,
                // autoplaySpeed: 1500,
                mouseDrag: true,
                autoplayHoverPause: true,
                responsive:{
                    0:{
                        items:1
                    },
                    600:{
                        items:2
                    },
                    1000:{
                        items:2
                    },
                    1400:{
                    items: 2
                }
            }
            })
        });
    
    // Thêm sự kiện click vào nút "Join Event"
    const joinButtons = document.querySelectorAll('.button-join button');
    joinButtons.forEach(button => {
    button.addEventListener('click', () => {
        // Hiển thị thông báo thành công hoặc thất bại
        const successMessage = "Added event to calendar successfully";
        const failureMessage = "Added event to calendar failed";

        // Hiển thị thông báo
        alert(successMessage); // Hoặc alert(failureMessage);
    });
});
    </script>
</body>
</html>