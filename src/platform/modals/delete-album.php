
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
  }
?>

<div id='modal-album-delete' class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h4 class="modal-title custom_align" id="Heading">Delete this album</h4>
      </div>
      <div class="modal-body">
        <div class="alert alert-danger">
          <input type="hidden" id="albumId" name="albumId" disable  value="<?php echo $albumId; ?>"/>
          <input type="hidden" id="collectionId" name="collectionId" disable  value="<?php echo $collectionId; ?>"/>
          <span class="glyphicon glyphicon-warning-sign"></span> Are you sure you want to delete this Record?
        </div>
      </div>
      <div class="modal-footer ">
        <a class="btn-delete btn btn-success" >
          <span class="glyphicon glyphicon-ok-sign"></span> Yes
        </a>
        <a class="btn btn-default" data-dismiss="modal">
          <span class="glyphicon glyphicon-remove"></span> No
        </a>
      </div>
    </div>
  </div>
</div>

<?php include_once "../../template/scripts.php"; ?>