

function showSongs(){  
    $.ajax({
        url:"./adminView/viewAllSongs.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showGenres(){  
    $.ajax({
        url:"./adminView/viewGenres.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showAlbums(){  
    $.ajax({
        url:"./adminView/viewAlbums.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}
function showArtists(){  
    $.ajax({
        url:"./adminView/viewArtists.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showPlaylists(){  
    $.ajax({
        url:"./adminView/viewPlaylists.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

function showUsers(){
    $.ajax({
        url:"./adminView/viewUsers.php",
        method:"post",
        data:{record:1},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//add album data
function addAlbums(){
    var al_name=$('#al_name').val();
    var ar_name=$('#ar_name').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('al_name', al_name);
    fd.append('ar_name', ar_name);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addAlbumController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Album Added successfully.');
            $('form').trigger('reset');
            showAlbums();
        }
    });
}

//edit album data
function albumEditForm(id) {
    $.ajax({
        url: "./adminView/editAlbumForm.php",
        method: "post",
        data: { record: id },
        success: function (data) {
            $('.allContent-section').html(data);
        }
    });
}


//update album after submit
function updateAlbums(){
    var al_id =$('#al_id').val();
    var al_name = $('#name').val();
    var artist = $('#ar_name').val();
    var fd = new FormData();
    fd.append('al_id', al_id);
    fd.append('name', al_name);
    fd.append('ar_name', artist);
   
    $.ajax({
      url:'./controller/updateAlbumController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showAlbums();
      }
    });
}

//edit song data
function songEditForm(id){
    $.ajax({
        url:"./adminView/editSongForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}

//delete song
function songDelete(id){
    $.ajax({
        url:"./controller/deleteSongController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Song Successfully deleted');
            $('form').trigger('reset');
            showSongs();
        }
    });
}

//update song after submit
function updateSongs(){
    var song_id =$('#song_id').val();
    var s_name = $('#name').val();
    var s_album = $('#album').val();
    var s_artist = $('#artist').val();
    var s_genre = $('#genre').val();
    var fd = new FormData();
    fd.append('song_id', song_id);
    fd.append('name', s_name);
    fd.append('album', s_album);
    fd.append('artist', s_artist);
    fd.append('genre', s_genre);
   
    $.ajax({
      url:'./controller/updateSongController.php',
      method:'post',
      data:fd,
      processData: false,
      contentType: false,
      success: function(data){
        alert('Data Update Success.');
        $('form').trigger('reset');
        showSongs();
      }
    });
}

function addSongs(){
    var s_name=$('#s_name').val();
    var album=$('#album').val();
    var artist=$('#artist').val();
    var genre=$('#genre').val();
    var audio=$('#audio')[0].files[0];
    var image=$('#image')[0].files[0];
    var fd = new FormData();
    fd.append('s_name', s_name);
    fd.append('album', album);
    fd.append('artist', artist);
    fd.append('genre', genre);
    fd.append('audio', audio);
    fd.append('image', image);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addSongController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Song Added successfully.');
            $('form').trigger('reset');
            showSongs();
        }
    });
}

//delete genre data
function genreDelete(id){
    $.ajax({
        url:"./controller/genreDeleteController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Genre Successfully deleted');
            $('form').trigger('reset');
            showGenres();
        }
    });
}

//delete album data
function albumDelete(id){
    $.ajax({
        url:"./controller/deleteAlbumController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Album Successfully deleted');
            $('form').trigger('reset');
            showAlbums();
        }
    });
}


//delete artist data
function artistDelete(id){
    $.ajax({
        url:"./controller/deleteArtistController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully deleted');
            $('form').trigger('reset');
            showArtists();
        }
    });
}

//edit variation data
function artistEditForm(id){
    $.ajax({
        url:"./adminView/editArtistForm.php",
        method:"post",
        data:{record:id},
        success:function(data){
            $('.allContent-section').html(data);
        }
    });
}


//update artist after submit
function updateArtists() {
    var a_id = $('#a_id').val();
    var a_name = $('#name').val();
    var fd = new FormData();
    fd.append('a_id', a_id);
    fd.append('a_name', a_name);

    $.ajax({
        url: './controller/updateArtistController.php',
        method: 'post',
        data: fd,
        processData: false,
        contentType: false,
        success: function (data) {
            alert('Update Success.');
            $('form').trigger('reset');
            showArtists();
        }
    });
}

function addArtist(){
    var a_name=$('#a_name').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('a_name', a_name);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addArtistController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Artist Added successfully.');
            $('form').trigger('reset');
            showArtists();
        }
    });
}

function playlistDelete(id){
    $.ajax({
        url:"./controller/deletePlaylistController.php",
        method:"post",
        data:{record:id},
        success:function(data){
            alert('Successfully deleted');
            $('form').trigger('reset');
            showPlaylists();
        }
    });
}

function addPlaylist(){
    var p_name=$('#p_name').val();
    var file=$('#file')[0].files[0];

    var fd = new FormData();
    fd.append('p_name', p_name);
    fd.append('file', file);
    fd.append('upload', upload);
    $.ajax({
        url:"./controller/addPlaylistController.php",
        method:"post",
        data:fd,
        processData: false,
        contentType: false,
        success: function(data){
            alert('Playlist Added successfully.');
            $('form').trigger('reset');
            showPlaylists();
        }
    });
}