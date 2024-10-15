
<div >
  <h2>Songs</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Song Image</th>
        <th class="text-center">Song Name</th>
        <th class="text-center">Artist</th>
        <th class="text-center">Album</th>
        <th class="text-center">Genre</th>
        <th class="text-center">Audio</th>
        <th class="text-center" colspan="3">Action</th>
      </tr>
    </thead>
    <?php
      include_once "../config.php";
      $sql="SELECT * from baihat, theloai, album WHERE baihat.idTheLoai=theloai.idTheLoai AND baihat.idAlbum=album.idAlbum ORDER BY baihat.idBaiHat";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
    ?>
    <tr>
      <td><?=$count?></td>
      <td><img height='100px' src='./assets/images/songs/<?=$row["HinhBaiHat"]?>'></td>
      <td><?=$row["TenBaiHat"]?></td>
      <td><?=$row["NgheSi"]?></td>      
      <td><?=$row["TenAlbum"]?></td> 
      <td><?=$row["TenTheLoai"]?></td>  
      <td><?=$row["Audio"]?></td>     
      <td><button class="btn btn-primary" style="height:40px" onclick="songEditForm('<?=$row['idBaiHat']?>')">Edit</button></td>
      <td><button class="btn btn-danger" style="height:40px" onclick="songDelete('<?=$row['idBaiHat']?>')">Delete</button></td>
      </tr>
      <?php
            $count=$count+1;
          }
        }
      ?>
  </table>

  <!-- Trigger the modal with a button -->
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-secondary " style="height:40px" data-toggle="modal" data-target="#myModal">
    Add Song
  </button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">New Song</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
          <form  enctype='multipart/form-data' action="./controller/addSongController.php" method="POST">
            <div class="form-group">
              <label for="name">Song Name:</label>
              <input type="text" class="form-control" name="s_name" id='s_name' required>
            </div>
            <div class="form-group">
              <label for="qty">Artist</label>
              <input type="text" class="form-control" name='artist' id="artist" required>
            </div>
            <div class="form-group">
              <label>Album:</label>
              <select name='album' id="album" >
                <option>Select album</option>
                <?php

                  $sql="SELECT * from album";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idAlbum']."'>".$row['TenAlbum'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
              <label>Genre:</label>
              <select name='genre' id="genre" >
                <option>Select genre</option>
                <?php

                  $sql="SELECT * from theloai";
                  $result = $conn-> query($sql);

                  if ($result-> num_rows > 0){
                    while($row = $result-> fetch_assoc()){
                      echo"<option value='".$row['idTheLoai']."'>".$row['TenTheLoai'] ."</option>";
                    }
                  }
                ?>
              </select>
            </div>
            <div class="form-group">
                <label for="file">Choose Image:</label>
                <input type="file" class="form-control-file" name='image' id="file">
            </div>
            <div class="form-group">
                <label for="file">Choose Audio:</label>
                <input type="file" class="form-control-file" name='audio' id="file">
            </div>
            <div class="form-group">
              <input type="submit" class="btn btn-secondary" id="upload" name="upload" style="height:40px" value='Add Song'>
            </div>
          </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal" style="height:40px">Close</button>
        </div>
      </div>
      
    </div>
  </div>

  
</div>
   