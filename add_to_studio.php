<?php
  include "header.php";
  include "DB.php";
 ?>
 <form role="form" action="new_studio.php">
   <div class="form-group">
     <label for="studioName">Name:</label>
     <input type="text" class="form-control" name="studioName">
   </div>
   <div class="form-group">
     <label for="studioid">Identifier:</label>
     <input type="text" class="form-control" name="studioid">
   </div>
   <button type="submit" class="btn btn-default">Submit</button>
 </form>
