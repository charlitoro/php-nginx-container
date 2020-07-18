<?php 
  include_once "../db/queries.php";
  session_start();

  $albumId = $_POST['albumId'];
  $listId = $_SESSION['listId'];

  $result = MutationAddAlbum( $albumId, $listId );
  echo $listId;
?>
