<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="./assets/css/sidebar.css">

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
    <nav class="sidebar ">
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
        </header>

        <div class="menu-bar">
            <div class="menu">

                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="./admin.php">
                            <i class='fa-solid fa-house-heart icon' ></i>
                            <span class="text nav-text">Home</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#genres" onclick="showGenres()">
                            <i class='fa-solid fa-message-music icon'></i>
                            <span class="text nav-text">Genres</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#albums" onclick="showAlbums()">
                            <i class='fa-solid fa-album icon' ></i>
                            <span class="text nav-text">Albums</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#songs" onclick="showSongs()">
                            <i class='fa-solid fa-music icon' ></i>
                            <span class="text nav-text">Songs</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#artists" onclick="showArtists()">
                            <i class='fa-solid fa-microphone icon' ></i>
                            <span class="text nav-text">Artists</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#playlists" onclick="showPlaylists()">
                            <i class='fa-solid fa-list-music icon' ></i>
                            <span class="text nav-text">Playlists</span>
                        </a>
                    </li>

                    <li class="nav-link">
                        <a href="#users" onclick="showUsers()">
                            <i class="fa-solid fa-user icon"></i>
                            <span class="text nav-text">Users</span>
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
                
            </div>
        </div>

    </nav>

    <section class="home">
        <div class="topbar">
            <div class="navbar">
                <ul>
                    <li>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
    <!-- <script src="./assets/javascript/script.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</body>
</html>