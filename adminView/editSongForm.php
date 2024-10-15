<div class="container p-5">
  <h4>Edit Song Detail</h4>
  <?php
  include_once "../config.php";
  $ID = $_POST['record'];
  $qry = mysqli_query($conn, "SELECT * FROM baihat, album, theloai WHERE idBaiHat='$ID'");
  $row1 = mysqli_fetch_array($qry); // Lấy một dòng kết quả đầu tiên
  
  if ($row1 != null) { // Kiểm tra xem có dòng kết quả hay không
      $albumID = $row1["idAlbum"];
      $catID = $row1["idTheLoai"];
  ?>
    <form id="update-Items" onsubmit="updateSongs()" enctype='multipart/form-data'>
      <div class="form-group">
        <input type="text" class="form-control" id="song_id" value="<?= $row1['idBaiHat'] ?>" hidden>
      </div>
      <div class="form-group">
        <label for="name">Song Name:</label>
        <input type="text" class="form-control" id="name" value="<?= $row1['TenBaiHat'] ?>">
      </div>
      <div class="form-group">
        <label for="name">Artist:</label>
        <input type="text" class="form-control" id="artist" value="<?= $row1['NgheSi'] ?>">
      </div>
      <div class="form-group">
        <label for="desc">Album:</label>
        <select id="album" name="album">
          <?php
          $sql = "SELECT * FROM album";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $selected = ($row['idAlbum'] == $albumID) ? "selected" : "";
              echo "<option value='" . $row['idAlbum'] . "' $selected>" . $row['TenAlbum'] . "</option>";
            }
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <label>Genre:</label>
        <select id="genre" name="genre">
          <?php
          $sql = "SELECT * FROM theloai";
          $result = $conn->query($sql);
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
              $selected = ($row['idTheLoai'] == $catID) ? "selected" : "";
              echo "<option value='" . $row['idTheLoai'] . "' $selected>" . $row['TenTheLoai'] . "</option>";
            }
          }
          ?>
        </select>
      </div>
      <div class="form-group">
        <button type="submit" style="height:40px" class="btn btn-primary">Update Song</button>
      </div>
    </form>
  <?php
  }
  ?>
</div>