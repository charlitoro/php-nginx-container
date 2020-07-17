<?php
  include_once "../db/queries.php";

  $title = $_POST['title'];
  $label = $_POST['label'];
  $artist = $_POST['artist'];
  $format = $_POST['format'];
  $genre = $_POST['genre'];
  $country = $_POST['country'];
  $released = $_POST['released'];
  $status = $_POST['status'];
  $collectionId = $_POST['collectionId'];

  $result = MutationCreateAlbum($collectionId, $title, $label, $artist, $format, $genre, $country, $released, $status);
  echo $collectionId;
?>