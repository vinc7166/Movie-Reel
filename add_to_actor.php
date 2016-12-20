<?php
  include "header.php";
  include "DB.php";
 ?>
 <form role="form" action="new_actor.php">
   <div class="form-group">
     <label for="actorName">Actor:</label>
     <input type="text" class="form-control" name="actorName">
   </div>
   <div class="form-group">
     <label for="actorid">Identifier:</label>
     <input type="text" class="form-control" name="actorid">
   </div>
   <button type="submit" class="btn btn-default">Submit</button>
 </form>
