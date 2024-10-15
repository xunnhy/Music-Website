<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== Font Awesome ======== -->
    <link rel="stylesheet" href="https://quythanh.tk/assets/css/fontawesomepro/all.css">

    <title>Music Website</title>

<style>
    /* Album header */


img.header-img {
    /* object-fit: cover; */
    position: relative;
}


.song-header-icon {
    display: flex;
    align-items: center;
    justify-content: center;

}
.song-header-icon .header-icon {
    color: #fff;
    position: absolute;
    font-size: 30px;
    width: 50px;
    height: 50px;
    line-height: 50px;
    right: 30px;
    bottom: 340px;
    background-image: linear-gradient(to top right, var(--primary-color), var(--primary-color-2));
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 15px;
    cursor: pointer;
    
}
</style>


<div class="header-img-album">
    <img class ="header-img" src="./assets/images/header_album.jpg" alt="Header">
    
    <div class="song-header-icon">
        <i class="fas fa-play header-icon"></i>
    </div>
    
</div>
