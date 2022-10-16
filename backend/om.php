
<?php
  include_once('config.php');
$sql = "SELECT id,uname,post,mno,pfp FROM userdetails where ID ='2'   ";
$result = mysqli_query($conn, $sql);


//mysqli_close($conn);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/theme2.css" />
    <title>theme2</title>
  </head>
  <body>
     <?php 

     if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
 ?>
    <div class="container">
      <div class="full"></div>
      <img
        src="images/pfp2.jpg"
        class="pfp"
        style="border: 5px solid #07a5c3; border-radius: 50px"
      />
      <h1 style="margin-top: 5px"><?php echo$row['uname']; ?></h1>
      <h3 style="margin-bottom: 10px"><?php echo$row['post']; ?></h3>
      <h3><?php echo$row['mno']; ?></h3>
      <div class="grid">
        <div>
          <div class="twitter icons">
            <img src="images/twitter-icon.svg" alt="" />
            <a href="https://twitter.com/">Twitter</a>
          </div>
        </div>
        <div class="github icons">
          <img
            src="images/github-icon.svg"
            alt=""
            style="
              background-color: white;
              border-radius: 100px;
              border: none solid black;
            "
          />
          <a href="https://github.com/">Github</a>
        </div>
        <div class="linkedin icons">
          <img src="images/linkedin-icon.svg" alt="" />
          <a href="https://linkedin.com/">Linkedin</a>
        </div>
      </div>
    </div>
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