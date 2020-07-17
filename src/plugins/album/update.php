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
  $albumId = $_POST['albumId'];
  $collectionId = $_POST['collectionId'];

  $result = MutationUpdateAlbum($albumId, $title, $label, $artist, $format, $genre, $country, $released, $status);
  echo $collectionId;
?>