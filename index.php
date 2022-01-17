<?php

require_once __DIR__.'/database.php';
require_once __DIR__.'/ClassDisk.php';




?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    .container{
      width: 80%;
      margin:auto;
      display:flex;
      flex-wrap:wrap;
    }
    .item{
      width:180px;
      margin:50px;
    }
    img{
      
      width:100%;
    }
  </style>
</head>
<body>
  <div class="container">
    <?php foreach($disks as $disk):
    $newDisk = new Disk($disk["title"]);
    $newDisk->author = $disk["author"];
    $newDisk->poster = $disk["poster"];
    $newDisk->year = $disk["year"];
    $newDisk->genre = $disk["genre"];
    
    ?>
   
  
    
  
    <div class="item">
      <div>
        <img src="<?php echo $newDisk->poster?>" alt=""> 
        <h2><?php echo $newDisk->title ?></h2> 
        <h3><?php echo $newDisk->getYear( $disk["year"]) ?></h3> 
        
      </div>
    </div>
    <?php endforeach ?>
  </div>
</body>
</html>