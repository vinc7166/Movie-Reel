<?php
  include "header.php";
  include "DB.php";
 ?>
 <form role="form" action="new_key.php">
   <div class="form-group">
     <label for="keyName">Name:</label>
     <input type="text" class="form-control" name="keyName">
   </div>
   <div class="form-group">
     <label for="keyid">Identifier:</label>
     <input type="text" class="form-control" name="keyid">
   </div>
   <button type="submit" class="btn btn-default">Submit</button>
 </form>
