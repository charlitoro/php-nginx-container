<!DOCTYPE html>
<html lang="en">

<?php include '../template/head.php' ?>

<body id="page-top">

  <!-- Navigation -->
  <?php include '../template/platformNavigation.php'?>

  <?php 
    include_once "../plugins/db/queries.php";

    if( !isset($_GET['id']) ) {
      header("location: collect.php");
    }
    $listId = $_GET['id'];
    $_SESSION['listId'] = $listId;
    $userId = $_SESSION['userId'];
  ?>

  <section class="content-section bg-light" id="collections">
    <h1 class="text-center my-3" >List's Albums</h1>  

    <div class="col-md-12 text-center"> 
      <a class='btn-list-add btn btn-success btn-xs' data-title='Add' data-id="<?php echo $listId; ?>" >
        <span class='icon-plus'></span> Add
      </a>
    </div>
    
    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr><th>Title</th><th>Label</th><th>Artist</th><th>Format</th><th>Genre</th><th>Country</th><th>Released</th><th>Status</th><th>Remove</th></tr>
      </thead>
      <tfoot>
        <tr><th>Title</th><th>Label</th><th>Artist</th><th>Format</th><th>Genre</th><th>Country</th><th>Released</th><th>Status</th><th>Remove</th></tr>
      </tfoot>
      <tbody>
        <?php
          $result = QueryList( $listId, $userId );
          while( $row = $result->fetch_assoc() ){
            $albumId = $row['id'];
            $title = $row['title'];
            $label = $row['label'];
            $artist = $row['artist'];
            $format = $row['format'];
            $genre = $row['genre'];
            $country = $row['country'];
            $released = $row['released'];
            $status = $row['status'];
            echo "
              <tr>
                <td>$title</td> <td>$label</td> <td>$artist</td>
                <td>$format</td> <td>$genre</td> <td>$country</td>
                <td>$released</td> <td>$status</td>
                <td>
                  <p data-placement='top' data-toggle='tooltip' title='Delete'>
                    <a class='btn-list-remove  btn btn-danger btn-xs' data-title='Delete' data-id='$albumId' >
                      <span class='icon-trash'></span>
                    </a>
                  </p>
                </td>
              </tr>
            ";
          }
        ?>
      </tbody>
    </table>
  </section>

  <!-- Modals -->
  <div id="add-album-on-list"></div>
  <div id="remove-album-on-list"></div>  

  <!-- Footer -->
  <?php include '../template/footer.php' ?>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <?php include '../template/scripts.php' ?>

</body>

</html>