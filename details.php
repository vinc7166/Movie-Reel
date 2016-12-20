<?php
  include "header.php";
  include "pull.php";
  $movies = Pull::oneMovie($_GET['id']);
 ?>
 <div class="container">
   <div class="jumbotron">
     <?php if(!empty($movies)){?>
     <h1><?php echo $movies[0]['movie']; ?></h1>
     <h2>Director: <?php echo $movies[0]['director']; ?></h2>
     <h2>Studio: <?php echo $movies[0]['studio']; ?></h2>
     <h2>The Actors</h2>
     <?php foreach ($movies as $movie){ ?>
       <ul>
         <h3><?php echo $movie['actor']; ?></h3>
       </ul>
     <?php } ?>
     <h3>Keywords</h3>
     <?php foreach ($movies as $movie){ ?>
       <ul>
         <h3><?php echo $movie['keyword']; ?></h3>
       </ul>
     <?php }
    } else { ?>
      <h1>NO DATA</h1>
    <?php } ?>
    <a href="index.php" class="btn btn-primary">Back to front</a>
   </div>
 </div>
<?php include "footer.php" ?>
