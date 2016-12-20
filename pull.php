<?php
include "DB.php";
  class Pull {
    public static function allMovies(){
      $zero = 0;
      $conn = DB::connect();
      $stmt = $conn->prepare("SELECT * FROM movies WHERE mid != ?");
      $stmt->bind_param("s", $zero);
      $stmt->execute();
      $stmt->bind_result($movieid, $movieName);
      $allMovies = [];
      while ($stmt->fetch()) {
        $allMovies[]=[
          "movieid" => $movieid,
          "movieName" => $movieName
        ];
      }
      return $allMovies;
    }

    public static function allActors(){
      $zero = 0;
      $conn = DB::connect();
      $stmt = $conn->prepare("SELECT * FROM actors WHERE aid != ?");
      $stmt->bind_param("s", $zero);
      $stmt->execute();
      $stmt->bind_result($actorid, $actorName);
      $allActors = [];
      while ($stmt->fetch()) {
        $allActors[]=[
          "actorid" => $actorid,
          "actorName" => $actorName
        ];
      }
      return $allActors;
    }

    public static function allStudios(){
      $zero = 0;
      $conn = DB::connect();
      $stmt = $conn->prepare("SELECT * FROM studios WHERE sid != ?");
      $stmt->bind_param("s", $zero);
      $stmt->execute();
      $stmt->bind_result($studioid, $studioName);
      $allStudios = [];
      while ($stmt->fetch()) {
        $allStudios[]=[
          "studioid" => $studioid,
          "studioName" => $studioName
        ];
      }
      return $allStudios;
    }

    public static function allDirectors(){
      $zero = 0;
      $conn = DB::connect();
      $stmt = $conn->prepare("SELECT * FROM directors WHERE did != ?");
      $stmt->bind_param("s", $zero);
      $stmt->execute();
      $stmt->bind_result($directorid, $directorName);
      $allDirectors = [];
      while ($stmt->fetch()) {
        $allDirectors[]=[
          "directorid" => $directorid,
          "directorName" => $directorName
        ];
      }
      return $allDirectors;
    }

    public static function allKeywords(){
      $zero = 0;
      $conn = DB::connect();
      $stmt = $conn->prepare("SELECT * FROM keywords WHERE kid != ?");
      $stmt->bind_param("s", $zero);
      $stmt->execute();
      $stmt->bind_result($keywordid, $keywordName);
      $allKeywords = [];
      while ($stmt->fetch()) {
        $allKeywords[]=[
          "keywordid" => $keywordid,
          "keywordName" => $keywordName
        ];
      }
      return $allKeywords;
    }

    public static function oneMovie($id){
      $conn = DB::connect("moviereel");
      $stmt = $conn->prepare(
        "SELECT a.aname, s.sname, m.mname, d.dname, k.kname from entrytable
        join actors a on entrytable.actorid = a.aid
        join studios s on entrytable.studioid = s.sid
        join movies m on entrytable.movieid = m.mid
        join directors d on entrytable.directorid = d.did
        join keywords k on entrytable.keywordid = k.kid
        where entrytable.movieid = ?"
      );
      $stmt->bind_param("s", $id);
      $stmt->execute();
      $stmt->bind_result($actor, $studio, $movie, $director, $keyword);
      $result = [];
      while ($stmt->fetch()) {
        $result[]=[
          "actor" => $actor,
          "studio" => $studio,
          "movie" => $movie,
          "director" => $director,
          "keyword" => $keyword
        ];
      }
      return $result;
    }
  }
?>
