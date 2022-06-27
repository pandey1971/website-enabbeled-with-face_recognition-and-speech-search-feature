<?php include "conn.php"; ?>
<!DOCTYPE html>
<html>
<head>
  <title>View</title>
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
      min-height: 100vh;
    }
    .alb {
      width: 200px;
      height: 200px;
      padding: 5px;
    }
     .alb img {
      width: 100%;
      height: 100%;
    }
    a{
      text-decoration: none;
      color: black;
    }
    body{
        background-color:grey;
    }
  </style>
</head>
<body>
     <!-- <a href="index.php">&#8592;</a> -->
     <center>
     <p>
     <b>WELCOME TO FOOD MANIA</b></p></center>
     <?php 
          $sql = "SELECT * FROM test_db ORDER BY id ";
          $res = mysqli_query($conn,  $sql);

          if (mysqli_num_rows($res) > 0){
            while ($images = mysqli_fetch_assoc($res)) {  ?>
             
             <div class="alb">
                 <div style="margin:10px">               
                 <img src="FOOD/<?=$images['img']?>.jpg"><p><?=$images['name']?></p>
            </div>
             </div>
              
    <?php } }?>
</body>
</html>