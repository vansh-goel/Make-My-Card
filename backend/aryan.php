
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
    <link rel="stylesheet" href="styles.css">
    <title>Theme-2</title>
</head>
<body>
 <?php 

     if (mysqli_num_rows($result) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($result)) {
 ?>

    <div class="main-container">
        <div class="visting-card">
            <!-- <img src="images/background-img.̀png" alt="gray-background-image" class="background-image"> -->
            <div class="left-side">
                <h1 class="main-heading"><?php echo$row['uname']; ?></h1>
                <div class="role">
                    <?php echo$row['post']; ?>
                </div>
                 <div class="role">
                    <?php echo$row['mno']; ?>
                </div>
                 <div class="role">
                    <?php echo$row['pfp']; ?>
                </div>

                <div class="social">
                    <table class="social-table" >
                        <tr>
                          <td><img src="images/github.svg" alt="github-logo" class="logo"></td>
                          <td class="name"><a href=""> github</a></td>
                        </tr>
                       <tr>
                       <td><img src="images/twitter.svg" alt="twitter-logo" class="logo"></td>
                       <td class="name"><a href=""> twitter</a></td>
                       </tr>
                       <tr>
                        <td><img src="images/linkedin.svg" alt="linkedin-logo" class="logo"></td>
                        <td class="name"><a href=""> linkedin</a></td>
                       </tr>
                      </table>
                </div>
            </div>
            <div class="vertical-line"></div>
            <div class="right-side">
                <img src="https://github.com/neutr0n420.png" alt="" class="avatar">
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