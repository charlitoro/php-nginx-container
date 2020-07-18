<div id="modal-create-list" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title custom_align" id="Heading">Create List </h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
      </div>
      <form id="update-form" action="../../plugins/collect/list.php" method="POST">
        <div class="modal-body">
          <div class="form-group"> 
            <input class="form-control" id="name" name="name" type="text" placeholder="Name"/>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-secondary btn-lg" style="width: 100%;">
            <i class='icon-plus'></i></span> Create
          </button>
        </div>
      </form>
    </div>
  </div>
</div>
