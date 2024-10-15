<?php 
    session_start();
?>

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
    <nav class="sidebar close">
        <header>
            <div class="image-text">
                <span class="image">
                    <img src="./assets/images/icon_logo.png" alt="Logo">
                </span>

                <div class="text logo-text">
                    <span class="name">NCT</span>
                    <span class="profession">NhacCuaTui.com</span>
                </div>
            </div>
            <i class='fa-sharp fa-solid fa-chevron-right toggle'></i>
        </header>

        <div class="menu-bar">
            <div class="menu"> 
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="index_active.php">
                            <i class='fa-solid fa-house-heart icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="songs.php">
                            <i class='fa-solid fa-book-heart icon' ></i>
                            <span class="text nav-text">Library</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="genres.php">
                            <i class='fa-solid fa-message-music icon'></i>
                            <span class="text nav-text">Genres</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="album-details.php">
                            <i class='fa-solid fa-album icon' ></i>
                            <span class="text nav-text">Albums</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="artist-details.php">
                            <i class='fa-solid fa-microphone icon' ></i>
                            <span class="text nav-text">Artists</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="chart-details.php">
                            <i class='fa-duotone fa-chart-simple icon' ></i>
                            <span class="text nav-text">Chart</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="favorite-list.php">
                            <i class="fa-solid fa-heart icon icon"></i>
                            <span class="text">Favorites</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="history.php">
                            <i class='fa-solid fa-rectangle-history icon'></i>
                            <span class="text nav-text">History</span>
                        </a>
                    </li>

                    <!-- <li class="nav-link">
                        <a href="#">
                            <i class='fa-solid fa-calendar-day icon' ></i>
                            <span class="text nav-text">Events</span>
                        </a>
                    </li> -->

                    <li class="nav-link">
                        <a href="playlist-details.php">
                            <i class='fa-solid fa-list-music icon' ></i>
                            <span class="text nav-text">Playlist</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="bottom-content">
                <li class="">
                    <a href="./login/logout.php">
                        <i class='fa-sharp fa-solid fa-arrow-right-from-bracket icon' ></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>

                <li class="mode">
                    <div class="sun-moon">
                        <i class='fa-regular fa-moon-stars icon moon'></i>
                        <i class='fa-regular fa-sun-cloud icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark Mode</span>

                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="topbar">
            <!-- Search-box -->
            <div class="search-box">
                <form action="search_active.php?manage=search" method="GET">
                    <i class='fa fa-search search-icon'></i>
                    <input type="text" name ="keyword" placeholder="Search...">
                    <input type="submit" name = "search" value="Search" style="width: 40px;">
                </form>
            </div>
            <div class="navbar">
                    <div>
                        <?php 
                            if(isset($_COOKIE['user_name']))
                                echo "Xin chào ".$_COOKIE['user_name'];
                        ?>
                    </div>
                    <div class="profile" onclick="menuToggle();">
                        <img class ="profile-img" src="./assets/images/user.jpg" alt="User">
                    </div>

                    <div class="profile-menu">
                        <h3><?php 
                            if(isset($_COOKIE['user_name']))
                                echo $_COOKIE['user_name'];
                        ?></h3>
                        <ul class="">
                            <!-- <li class="user-link">
                                    <a href="#">
                                        <i class='fa-sharp fa-solid fa-user profile-icon' ></i>
                                        <span class="profile-text">My Profile</span>
                                    </a>
                            </li> -->
                            <li class="user-link">
                                <a href="edit-profile.php">
                                    <i class='fa-sharp fa-solid fa-pen-to-square profile-icon' ></i>
                                    <span class="profile-text">Edit Profile</span>
                                </a>
                            </li>
                            <li class="user-link">
                                <a href="#">
                                    <i class='fa-sharp fa-solid fa-inbox profile-icon' ></i>
                                    <span class="profile-text">Inbox</span>
                                </a>
                            </li>
                            <li class="user-link">
                                <a href="#">
                                    <i class="fa-duotone fa-gear profile-icon"></i>
                                    <span class="profile-text">Settings</span>
                                </a>
                            </li>
                            <li class="user-link">
                                <a href="#">
                                    <i class="fa-solid fa-seal-question profile-icon"></i>
                                    <span class="profile-text">Help</span>
                                </a>
                            </li>
                            <li class="user-link">
                                <a href="./login/logout.php">
                                    <i class='fa-sharp fa-solid fa-arrow-right-from-bracket profile-icon' ></i>
                                    <span class="profile-text">Logout</span>
                                </a>
                            </li>
                        </ul>
                </div>
            </div>
        </div>

        <script src="./assets/javascript/script.js"></script>
<!-- JQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Owl Carousel -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
// Owl Carousel
$(document).ready(function(){
        $('.list-sliders').owlCarousel({
            loop:true,
            margin:20,
            nav: true,
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
                    items:1
                },
                1000:{
                    items:1
                }
            }
        })
    });
</script>
       
</body>
</html>