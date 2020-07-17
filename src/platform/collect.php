<!DOCTYPE html>
<html lang="en">

<?php include '../template/head.php' ?>

<body id="page-top">

  <!-- Navigation -->
  <?php include '../template/platformNavigation.php'?>

  <!--Carousel Wrapper-->
  <section class="content-section bg-light" id="collections">
    <div class="container">
      <h1 class="text-center my-3">Collections</h1>
      <div id='collections-list' class='carousel1 slide' data-ride='carousel'>
        <div class="carousel-inner row w-100 mx-auto">
          <?php
            include_once "../plugins/db/queries.php";

            $userId = $_SESSION['userId'];
            $result = QueryCollectionsLists( $userId );
            $active = "active";
            while($row = $result->fetch_assoc()) {
              $id = $row['id'];
              $name = $row['name'];
              $description = $row['description'];
              echo "
                <div class='carousel-item col-md-4 $active' >
                  <div class='card' style='width: 15rem;'>
                    <img class='card-img-top' src='../assets/img/logo.svg' alt='Card image cap'>
                    <div class='card-body'>
                      <h4 class='card-title'>$name</h4>
                      <p class='card-text'>$description</p>
                      <a 
                        class='btn btn-primary' 
                        href='collection.php?id=$id'
                      >Collection</a>
                    </div>
                  </div>
                </div>
              ";
              $active = '';
            }
          ?>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mt-4">
              <a class="btn rounded-circle btn-secondary mx-1 prev-collections" href="javascript:void(0)" title="Previous">
                <i class="fa fa-lg fa-chevron-left"></i>
              </a>
              <a class="btn rounded-circle btn-secondary mx-1 next-collections" href="javascript:void(0)" title="Next">
                <i class="fa fa-lg fa-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <h1 class="text-center my-3">Albums List</h1>
      <div id='albums-list' class='carousel2 slide' data-ride='carousel'>
        <div class="carousel-inner row w-100 mx-auto">
          <?php
            $userId = $_SESSION['userId'];
            $result = QueryAlbumsList( $userId );
            $active = "active";
            while($row = $result->fetch_assoc()) {
              $id = $row['id'];
              $name = $row['name'];
              echo "
                <div class='carousel-item col-md-4 $active' >
                  <div class='card' style='width: 15rem;'>
                    <img class='card-img-top' src='../assets/img/logo.svg' alt='Card image cap'>
                    <div class='card-body'>
                      <h4 class='card-title'>$name</h4>
                      <a class='btn btn-primary'>Albumes</a>
                    </div>
                  </div>
                </div>
              ";
              $active = '';
            }
          ?>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-12 text-center mt-4">
              <a class="btn rounded-circle btn-secondary mx-1 mx-1 prev-lists" href="javascript:void(0)" title="Previous">
                <i class="fa fa-lg fa-chevron-left"></i>
              </a>
              <a class="btn rounded-circle btn-secondary mx-1 next-lists" href="javascript:void(0)" title="Next">
                <i class="fa fa-lg fa-chevron-right"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <?php include '../template/footer.php' ?>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <?php include '../template/scripts.php' ?>

</body>

</html>