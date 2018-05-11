<?php include 'php_utils/db_utils.php';

 $db = new DbUtils();
      $conn = $db -> getConnection();
      $stmt = $conn->prepare("SELECT manga, author, manga_genres.genre AS genre, released_date, frequency, anime, vote_anime, released_date_anime
                              FROM manga
                              INNER JOIN manga_genres ON manga.genre_id = manga_genres.id
                              WHERE manga.id='".$_GET['id']."'");
      $stmt->execute();

      // set the resulting array to associative
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      $manga = $stmt->fetch();  //fetch restituisce un record compresi di tutti i campi
?>
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">Details</h1>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="panel panel-default">
      <div class="panel-body text-center">
        <h1><?php echo $manga ['manga'] ?>
            <small>by <?php echo $manga ['author'] ?></small>
        </h1>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-2">
    <div class="panel panel-default text-center">
      <div class="panel-body">
        <p><strong>Genre: </strong><?php echo $manga ['genre'] ?></p>
      </div>
    </div>
  </div>
  <div class="col-lg-2">
    <div class="panel panel-default text-center">
      <div class="panel-body">
        <p><strong>Released Date: </strong><?php echo $manga ['released_date'] ?></p>
      </div>
    </div>
  </div>
  <div class="col-lg-2">
    <div class="panel panel-default text-center">
      <div class="panel-body">
        <p><strong>Frequency: </strong><?php echo $manga ['frequency'] ?></p>
      </div>
    </div>
  </div>
  <div class="col-lg-2">
    <div class="panel panel-default text-center">
      <div class="panel-body">
        <p><strong>Anime: </strong><?php echo $manga ['anime'] ?></p>
      </div>
    </div>
  </div>
  <div class="col-lg-1">
    <div class="panel panel-default text-center">
      <div class="panel-body">
        <p><strong>Vote: </strong><?php echo $manga ['vote_anime'] ?></p>
      </div>
    </div>
  </div>
  <div class="col-lg-3">
    <div class="panel panel-default text-center">
      <div class="panel-body">
        <p><strong>Released Date Anime: </strong><?php echo $manga ['released_date_anime'] ?></p>
      </div>
    </div>
  </div>
</div>