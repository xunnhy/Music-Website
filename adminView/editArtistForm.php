<div class="container p-5">
    <h4>Edit Artist Detail</h4>
    <?php
    include_once "../config.php";
    $ID = $_POST['record'];
    $qry = mysqli_query($conn, "SELECT * from nghesi Where idNgheSi='$ID'");
    $numberOfRow = mysqli_num_rows($qry);

    // Fetch the row and assign it to $row1
    $row1 = mysqli_fetch_assoc($qry);
    ?>
    <form id="update-Artist" onsubmit="updateArtists()" enctype='multipart/form-data'>
        <div class="form-group">
            <input type="text" class="form-control" id="a_id" value="<?= $row1['idNgheSi'] ?>" hidden>
        </div>
        <div class="form-group">
            <label for="name">Artist Name:</label>
            <input type="text" class="form-control" name="name" id="name" value="<?= $row1['TenNgheSi']?>">
        </div>
        <div class="form-group">
            <label for="file">Choose Image:</label>
            <input type="text" id="existingImage" class="form-control" value="<?= $row1['HinhNgheSi'] ?>" hidden>
            <input type="file" id="newImage" value="">
        </div>
        <div class="form-group">
            <button type="submit" style="height:40px" class="btn btn-primary">Update Artist</button>
        </div>
    </form>
</div>