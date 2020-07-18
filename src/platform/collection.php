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
    $collectionId = $_GET['id'];
    $userId = $_SESSION['userId'];
  ?>

  <section class="content-section bg-light" id="collections">
    <h1 class="text-center my-3" >Collection's Albums</h1>  

    <div class="col-md-12 text-center"> 
      <a class='btn-album-create btn btn-success btn-xs' data-title='Add' data-id="<?php echo $collectionId; ?>" >
        <span class='icon-plus'></span> Create
      </a>
    </div>
    
    <table id="datatable" class="table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
        <tr><th>Title</th><th>Label</th><th>Artist</th><th>Format</th><th>Genre</th><th>Country</th><th>Released</th><th>Status</th><th>Update</th><th>Delete</th></tr>
      </thead>
      <tfoot>
        <tr><th>Title</th><th>Label</th><th>Artist</th><th>Format</th><th>Genre</th><th>Country</th><th>Released</th><th>Status</th><th>Update</th><th>Delete</th></tr>
      </tfoot>
      <tbody>
        <?php
          $result = QueryAlbumsCollection( $collectionId, $userId );
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
                  <p data-placement='top' data-toggle='tooltip' title='Edit'>
                    <a class='btn-album-edit btn btn-primary btn-xs' data-title='Edit' data-id='$albumId'>
                      <span class='icon-pencil'></span>
                    </a>
                  </p>
                </td>
                <td>
                  <p data-placement='top' data-toggle='tooltip' title='Delete'>
                    <a class='btn-album-delete  btn btn-danger btn-xs' data-title='Delete' data-id='$albumId' >
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
  <div id="album-edit"></div>
  <div id="album-delete"></div>
  <div id="album-create"></div>  

  <!-- Footer -->
  <?php include '../template/footer.php' ?>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <?php include '../template/scripts.php' ?>

</body>

</html>