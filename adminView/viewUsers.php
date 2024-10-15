<div >
  <h2>All Users</h2>
  <table class="table ">
    <thead>
      <tr>
        <th class="text-center">S.N.</th>
        <th class="text-center">Email </th>
        <th class="text-center">FullName</th>
        <th class="text-center">Birthdate</th>
      </tr>
    </thead>
    <?php
      include_once "../config.php";
      $sql="SELECT * from user where type=2";
      $result=$conn-> query($sql);
      $count=1;
      if ($result-> num_rows > 0){
        while ($row=$result-> fetch_assoc()) {
           
    ?>
    <tr>
      <td><?=$count?></td>
      <td><?=$row["email"]?></td>
      <td><?=$row["fullname"]?></td>
      <td><?=$row["birthdate"]?></td>
    </tr>
    <?php
            $count=$count+1;
           
        }
    }
    ?>
  </table>