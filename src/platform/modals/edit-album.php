
<?php 
  include_once "../../plugins/db/queries.php";
  
  if( !isset($_POST['id']) ){
    exit('Not pass album id');
  }
  $albumId = $_POST['id'];
  $result = QueryAlbum( $albumId );
  if($result->num_rows < 1) {
    exit();
  }
  if($row = $result->fetch_assoc()){
    $collectionId = $row['collectionId'];
    $collection = $row['collection'];
    // $albumId = $row['id'];
    $title = $row['title'];
    $label = $row['label'];
    $artist = $row['artist'];
    $formatId = $row['formatId'];
    $format = $row['format'];
    $genreId = $row['genreId'];
    $genre = $row['genre'];
    $countryId = $row['countryId'];
    $country = $row['country'];
    $released = $row['released'];
    $statusId = $row['statusId'];
    $status = $row['status'];
  }

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

<div id="modal-album-edit" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title custom_align" id="Heading">Edit Album </h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <form id="update-form">
        <div class="modal-body">
            <input type="hidden" id="albumId" name="albumId" disable value="<?php echo $albumId; ?>"/>
            <input type="hidden" id="collectionId" name="collectionId" disable  value="<?php echo $collectionId; ?>"/>
          <div class="form-group"> 
            <input class="form-control" id="title" name="title" type="text" placeholder="Title" value="<?php echo $title ?>">
          </div>
          <div class="form-group">
            <input class="form-control" id="label" name="label" type="text" placeholder="Label" value="<?php echo $label ?>">
          </div>
          <div class="form-group">
            <input class="form-control" id="artist" name="artist" type="text" placeholder="Artist" value="<?php echo $artist ?>">
          </div>
          <div class="form-group">
            <input class="form-control" id="released" name="released" type="number" placeholder="Released" value="<?php echo $released ?>">
          </div>
          <div class="form-group">
            <label for="inputState">Format</label>
            <select id="format" name="format" class="form-control">
              <option selected value="<?php echo $formatId; ?>"><?php echo $format; ?></option>
              <?php echo $format_options; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">Genre</label>
            <select id="genre" name="genre" class="form-control">
              <option selected value="<?php echo $genreId; ?>"><?php echo $genre; ?></option>
              <?php echo $genre_options; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">Country</label>
            <select id="country" name="country" class="form-control">
              <option selected value="<?php echo $countryId; ?>"><?php echo $country; ?></option>
              <?php echo $country_options; ?>
            </select>
          </div>
          <div class="form-group">
            <label for="inputState">Status</label>
            <select id="status" name="status" class="form-control">
              <option selected value="<?php echo $statusId; ?>"><?php echo $status; ?></option>
              <?php echo $status_options; ?>
            </select>
          </div>
        </div>
        <div class="modal-footer">
          <a class="btn-update btn btn-secondary btn-lg" style="width: 100%;">
            <i class='icon-check'></i></span> Update
          </a>
        </div>
      </form>
    </div>
  </div>
</div>

<?php include_once "../../template/scripts.php"; ?>