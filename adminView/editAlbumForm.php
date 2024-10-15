<div class="container p-5">
    <h4>Edit Album Detail</h4>
    <?php
    include_once "../config.php";
    $ID = $_POST['record'];
    $qry = mysqli_query($conn, "SELECT * from album Where idAlbum='$ID'");
    $numberOfRow = mysqli_num_rows($qry);

    $numberOfRow = mysqli_num_rows($qry);
    if ($numberOfRow > 0) {
        while ($row1 = mysqli_fetch_array($qry)) {
            $alID = $row1["idAlbum"];
    ?>
            <form id="update-ALbum" onsubmit="updateAlbums()" enctype='multipart/form-data'>
                <div class="form-group">
                    <input type="text" class="form-control" id="al_id" name="al_id" value="<?= $row1['idAlbum'] ?>" hidden>
                </div>
                <div class="form-group">
                    <label for="name">Album Name:</label>
                    <input type="text" class="form-control" name="name" id="name" value="<?= $row1['TenAlbum'] ?>">
                </div>
                <div class="form-group">
                    <label for="ar_name">Artist:</label>
                    <input type="text" class="form-control" name="ar_name" id="ar_name" value="<?= $row1['NgheSi'] ?>">
                </div>
                <div class="form-group">
                    <button type="submit" style="height:40px" class="btn btn-primary">Update Album</button>
                </div>
            </form>
    <?php
        }
    }
    ?>
</div>
