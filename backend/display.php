<?php
  include_once('config.php');
$sql = "SELECT id,uname,post,mno,pfp FROM userdetails";
$result = mysqli_query($conn, $sql);


//mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
              
  <table class="table table-dark table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>Username</th>
        <th>Post</th>
        <th>Mno</th>
        <th>Pfp</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      
        <?php 

            if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['uname']."</td>";
                echo "<td>".$row['post']."</td>";
                echo "<td>".$row['mno']."</td>";
                echo "<td>".$row['pfp']."</td>";
                echo "<td><a href='edit.php'>Edit</a> | <a href='delete.php'>delete</a></td>";
                echo "</tr>";

          
              }
            } else {
              echo "0 results";
            }
            mysqli_close($conn)
         ?>
    </tbody>
  </table>
</div>

</body>
</html>
