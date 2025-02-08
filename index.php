<!doctype html>
<html lang="en">

<head>
  <?php include("inc/head-link.php") ?>
</head>

<body data-theme="tmrw_veirdo_theme">
  <div class="blur-bg w-full h-screen absolute bg-white/30 hidden"></div>

  <!-- header section with navbar start -->
  <div id="shopify-section-header" class="shopify-section section-header">
    <!-- Top announcement-bar start -->
    <?php include("announcement-bar.php") ?>
    <!-- Top announcement-bar end -->

    <!-- Menu icon -->
    <img src="svg/menu.svg" alt="" class="hidden">

    <!-- Navbar start -->
    <?php include("inc/navbar.php") ?>
    <!-- Navbar end -->

  </div>
  <!-- header section with navbar end -->


  <!-- shopify-section-cart-drawer start -->
  <?php include("cart-drawer.php") ?>
  <!-- shopify-section-cart-drawer end -->

  <div class="theme-content fix-content-width" id="">

    <!-- Slider start -->
    <?php include("slider.php") ?>
    <!-- Slider end -->

    <!-- OUR BESTSELLERS start -->
    <?php include("best-seller.php"); ?>
    <!-- OUR BESTSELLERS end -->

    <!-- Video Section Start -->
    <?php include("video2-section.php") ?>
    <!-- Video Section End -->

    <!-- CENTRE STAGE COLLECTION start -->
    <?php include("centre-stage-collection.php") ?>
    <!-- CENTRE STAGE COLLECTION end -->

    <!-- Top categories start -->
    <?php include("top-categories.php") ?>
    <!-- Top categories end -->

    <!-- video section start -->
    <?php include("video-section.php") ?>
    <!-- video section end -->

    <!-- New Arrivals Start -->
    <?php // include("inc/newdata.php") ?>
    <!-- New Arrivals End -->

    <!-- About us Start -->
    <?php include("about-us.php") ?>
    <!-- About us end -->

    <!-- Geeks Assemble start -->

    <!-- Geeks Assemble end -->

    <!-- BLOGS start -->
    <?php include("blog.php") ?>
    <!-- BLOGS end -->

    <!-- Featured section start -->

    <!-- Featured section end -->
  </div>

  <!-- loader icon -->
  <?php include("loader.php") ?>
  <!-- loader icon -->

  <!-- Toast Message start -->
  <?php include("toast.php") ?>
  <!-- Toast Message end -->

  <!-- Footer start -->
  <?php include("inc/footer.php") ?>
  <!-- Footer end -->

  <!-- Back to Top button start -->
  <?php include("back-to-top.php") ?>
  <!-- Back to Top button end -->

  <?php include("inc/foot-link.php") ?>
</body>

</html>