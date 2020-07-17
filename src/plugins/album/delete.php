<?php
  include_once "../db/queries.php";

  $albumId = $_POST['albumId'];
  $collectionId = $_POST['collectionId'];

  $result = MutationDeleteAlbum($albumId);
  echo $collectionId;
?>