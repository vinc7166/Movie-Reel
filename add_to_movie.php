<?php
  include "header.php";
  include "DB.php";
 ?>
 <form role="form" action="new_movie.php">
   <div class="form-group">
     <label for="movieName">Name:</label>
     <input type="text" class="form-control" name="movieName">
   </div>
   <div class="form-group">
     <label for="movieid">Identifier:</label>
     <input type="text" class="form-control" name="movieid">
   </div>
   <button type="submit" class="btn btn-default">Submit</button>
 </form>
