<?php
  include "header.php";
  include "DB.php";
 ?>
 <form role="form" action="new_director.php">
   <div class="form-group">
     <label for="directorName">Name:</label>
     <input type="text" class="form-control" name="directorName">
   </div>
   <div class="form-group">
     <label for="directorid">Identifier:</label>
     <input type="text" class="form-control" name="directorid">
   </div>
   <button type="submit" class="btn btn-default">Submit</button>
 </form>
