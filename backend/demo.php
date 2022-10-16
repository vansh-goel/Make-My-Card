<?php
  include_once('config.php');
$sql = "SELECT id,uname,post,mno,pfp FROM userdetails where ID ='2'   ";
$result = mysqli_query($conn, $sql);


//mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card</title>
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- Css  -->
    <link rel="stylesheet" href="theme-3.css">
</head>
<body>

    <?php 

     if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
 ?>
    <div class="box">
        <h1 id="full-name" class="data"><?php echo$row['uname']; ?></h1>
        <h4 id="post" class="data"><?php echo$row['post']; ?></h4>
        <hr class="bar">
        <p id="phone" class="info"><?php echo$row['mno']; ?></p>
        <p id="mail" class="info"><?php echo$row['pfp']; ?></p>
        <div class="socials">
            <p id="twitter"><a href="http://" target="_blank" rel="noopener noreferrer"><img class="icons" src="https://cdn-icons-png.flaticon.com/512/733/733635.png" alt="">Twitter</a></p>
            <p id="linkedin"><a href="http://" target="_blank" rel="noopener noreferrer"><img class="icons" src="https://cdn-icons-png.flaticon.com/512/3669/3669739.png" alt="">LinkedIn</a></p>
            <p id="Github"><a href="http://" target="_blank" rel="noopener noreferrer"><img class="icons" src="https://cdn-icons-png.flaticon.com/512/1051/1051326.png" alt="">Github</a></p>
        </div>
        <img class="image-pfp" src="images/pfp.ico" alt="">
    </div>

<?php 

    
              }
            } else {
              echo "0 results";
            }
            mysqli_close($conn)
         ?>

</body>
</html>