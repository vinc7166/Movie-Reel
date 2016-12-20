<?php
  include "header.php";
  include "pull.php";
  $theMovies = Pull::allMovies();
  $theActors = Pull::allActors();
  $theDirectors = Pull::allDirectors();
  $theKeywords = Pull::allKeywords();
  $theStudios = Pull::allStudios();
 ?>

 <form role="form" action="new_entrytable.php">
   <div class="form-group">
     <label for="movieid">Movie</label>
     <select name="movieid">
       <?php
         foreach ($theMovies as $rowm) {
       ?>
           <option value='<?php echo $rowm["movieid"];?>'>
             <?php echo $rowm['movieName'];?>
           </option>
       <?php
         }
        ?>
     </select>
   </div>
   <div class="form-group">
     <label for="actorid">Actor</label>
     <select name="actorid">
       <?php
         foreach ($theActors as $rowa) {
       ?>
           <option value='<?php echo $rowa["actorid"];?>'>
             <?php echo $rowa['actorName'];?>
           </option>
       <?php
         }
        ?>
     </select>
   </div>
   <div class="form-group">
     <label for="directorid">Director</label>
     <select name="directorid">
       <?php
         foreach ($theDirectors as $rowd) {
       ?>
           <option value='<?php echo $rowd["directorid"];?>'>
             <?php echo $rowd['directorName'];?>
           </option>
       <?php
         }
        ?>
     </select>
   </div>
   <div class="form-group">
     <label for="studioid">Studio</label>
     <select name="studioid">
       <?php
         foreach ($theStudios as $rows) {
       ?>
           <option value='<?php echo $rows["studioid"];?>'>
             <?php echo $rows['studioName'];?>
           </option>
       <?php
         }
        ?>
     </select>
   </div>
   <div class="form-group">
     <label for="keywordid">Keyword</label>
     <select name="keywordid">
       <?php
         foreach ($theKeywords as $rowk) {
       ?>
           <option value='<?php echo $rowk["keywordid"];?>'>
             <?php echo $rowk['keywordName'];?>
           </option>
       <?php
         }
        ?>
     </select>
   </div>
   <button type="submit" class="btn btn-default">Submit</button>
 </form>
