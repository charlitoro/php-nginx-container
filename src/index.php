<!DOCTYPE html>
<html lang="en">

<?php include 'template/head.php' ?>

<body id="page-top">

  <!-- Navigation -->
  <?php include 'template/navigation.php'?>

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <h1 class="mb-1">Collect</h1>
      <h3 class="mb-5">
        <em>Platform to Manager Your Music Collections</em>
      </h3>
      <a class="btn btn-primary btn-xl js-scroll-trigger" href="platform/signup.php">Sign Up</a>
    </div>
    <div class="overlay"></div>
  </header>

  <!-- About -->
  <section class="content-section bg-light" id="about">
    <div class="container text-center">
      <div class="row">
        <div class="col-lg-10 mx-auto">
          <h2>Collect is a web platform that allows you to manage your music collections that will grow over time</h2>
          <p class="lead mb-5">You can add your vinyl records, cassettes, CDs and collectibles from your favorite bands and artists
        </div>
      </div>
    </div>
  </section>

  <!-- Services -->
  <section class="content-section bg-primary text-white text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h2 class="mb-5">What You Can Manage</h2>
      </div>
      <div class="row">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-playlist"></i>
          </span>
          <h4>
            <strong>Vinyls</strong>
          </h4>
          <p class="text-faded mb-0">For audiophiles everywhere, it remains the singular most impressive format of recording and reproducing music</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-volume-2"></i>
          </span>
          <h4>
            <strong>Cassettes</strong>
          </h4>
          <p class="text-faded mb-0">Today, we may think of cassette tapes as retro and vintage artifacts from funkier, groovier days</p>
        </div>
        <div class="col-lg-3 col-md-6 mb-5 mb-md-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-disc"></i>
          </span>
          <h4>
            <strong>CDs</strong>
          </h4>
          <p class="text-faded mb-0">With the CD all but dead, see it off in style with this trip down memory lane.</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="icon-star"></i>
          </span>
          <h4>
            <strong>Collectibles</strong>
          </h4>
          <p class="text-faded mb-0">Strange items from your favorite bands will make an invaluable music collection</p>
        </div>
      </div>
    </div>
  </section> 

  <!-- Footer -->
  <?php include 'template/footer.php'?>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <?php include 'template/scripts.php' ?>

</body>

</html>