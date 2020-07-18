<?php 
  include_once "../db/queries.php";
  session_start();

  $albumId = $_POST['albumId'];
  $listId = $_SESSION['listId'];

  $result = MutationRemoveAlbum($albumId, $listId );
  echo $listId;
?>