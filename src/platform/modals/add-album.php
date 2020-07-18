
<?php 
  include_once "../../plugins/db/queries.php";
  session_start();

  $listId = $_SESSION['listId'];
  $userId = $_SESSION['userId'];
  $result = QueryAllAlbums( $userId );
  
  $format_options = "";
  while( $row = $result->fetch_assoc() ){
    $id = $row['id'];
    $title = $row['title'];
    $artist = $row['artist'];
    $label = $row['label'];

    $format_options .= "<option value='$id'>$title | $artist ($label) </option>";
  }
?>

<div id="modal-album-add" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title custom_align" id="Heading">Add Album </h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <form id="update-form">
        <div class="modal-body">
          <div class="form-group">
            <label for="inputState">Album</label>
            <select id="album" name="album" class="form-control">
              <?php echo $format_options; ?>
            </select>
          </div>
        </div>

        <div class="modal-footer">
          <a class="btn-add btn btn-secondary btn-lg" style="width: 100%;">
            <i class='icon-plus'></i></span> Add
          </a>
        </div>

      </form>
    </div>
  </div>
</div>

<?php include_once "../../template/scripts.php"; ?>