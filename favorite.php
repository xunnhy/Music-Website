<?php
session_start();
?>
<?php
    if(isset($_POST['idBaiHat']))
    {
        $idBaiHat = $_POST['idBaiHat'];
        // $id_user = 1; 
        $id_user = $_SESSION['user_id'];
        require_once "config.php";
        $sql = "select * from favorite where idBaiHat = $idBaiHat and id = $id_user";
        
        $result = mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0)
        {
            $sql = "delete from favorite where idBaiHat = $idBaiHat and id = $id_user";
            if(mysqli_query($conn,$sql)>0)
                echo "0";
        }
        else
        {
            $sql = "insert into favorite(id, idBaiHat, created_at) values($id_user,$idBaiHat,now())";
            //var_dump($sql);
            if(mysqli_query($conn,$sql)>0)
                echo "1";
        }
        
    }
?>