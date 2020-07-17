
<?php 
  include_once "../../plugins/db/queries.php";
  
  if( !isset($_POST['id']) ){
    exit('Not pass collection id');
  }
  $collectionId = $_POST['id'];
  
  $result = QueryAlbumFormat();
  $format_options = "";
  while( $row = $result->fetch_assoc() ){
    $option = $row['format'];
    $id = $row['id'];
    $format_options .= "<option value='$id'>$option</option>";
  }

  $result = QueryAlbumGenre();
  $genre_options = "";
  while( $row = $result->fetch_assoc() ){
    $option = $row['genre'];
    $id = $row['id'];
    $genre_options .= "<option value='$id'>$option</option>";
  }

  $result = QueryAlbumCountry();
  $country_options = "";
  while( $row = $result->fetch_assoc() ){
    $option = $row['country'];
    $id = $row['id'];
    $country_options .= "<option value='$id'>$option</option>";
  }

  $result = QueryAlbumStatus();
  $status_options = "";
  while( $row = $result->fetch_assoc() ){
    $option = $row['status'];
    $id = $row['id'];
    $status_options .= "<option value='$id'>$option</option>";
  }
?>

<div id="modal-album-create" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title custom_align" id="Heading">Edit Album </h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <form id="update-form">
        <div class="modal-body">
            <input type="hidden" id="collectionId" name="collectionId" disable  value="<?php echo $collectionId; ?>"/>
          <div class="form-group"> 
            <input class="form-control" id="title" name="title" type="text" placeholder="Title"/>
          </div>
          <div class="form-group">
            <input class="form-control" id="label" name="label" type="text" placeholder="Label"/>
          </div>
          <div class="form-group">
            <input class="form-control" id="artist" name="artist" type="text" placeholder="Artist"/>
          </div>
          <div class="form-group">
            <input class="form-control" id="released" name="released" type="number" placeholder="Released"/>
          </div>
          <div class="form-group">
            <label for="inputState">Format</label>
            <select id="format" name="format" class="form-control">
              <?php echo $format_options; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">Genre</label>
            <select id="genre" name="genre" class="form-control">
              <?php echo $genre_options; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">Country</label>
            <select id="country" name="country" class="form-control">
              <?php echo $country_options; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">Status</label>
            <select id="status" name="status" class="form-control">
              <?php echo $status_options; ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn-create btn btn-secondary btn-lg" style="width: 100%;">
            <i class='icon-plus'></i></span> Register
          </a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include_once "../../template/scripts.php"; ?>