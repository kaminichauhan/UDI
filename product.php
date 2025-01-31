<!doctype html>
<html lang="en">

<head>

  <style>
    /* Add your CSS styles here */

    .outer-grid {
      display: none;
    }

    .img_producto_container {
      position: relative;
      overflow: hidden;
      cursor: zoom-in;
    }

    .img_producto {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      transition: transform 0.5s ease-out;
    }

    @media screen and (min-width: 768px) {
      .outer-grid {
        display: grid;
        grid-template-columns: 50% 50%;
      }
    }

    .hidden {
      display: none;
    }

    .lazy {
      opacity: 0;
      transition: opacity 0.5s ease-in-out;
    }

    .lazy.loaded {
      opacity: 1;
    }

    .back-to-top {
      position: fixed;
      bottom: 20px;
      right: 20px;
      z-index: 1000;
    }

    .back-to-top img {
      width: 40px;
      height: 40px;
    }
  </style>
  <style>
    .outer-grid {
      display: none;
    }

    .img_producto_container {
      position: relative;
      overflow: hidden;
      cursor: zoom-in;
    }

    .img_producto {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      transition: transform 0.5s ease-out;
    }

    @media screen and (min-width: 768px) {
      .outer-grid {
        display: grid;
        grid-template-columns: 50% 50%;
      }
    }
  </style>
  <style data-shopify>
    .breadcrumb a {
      color: #131814;
      font-family: ibmMedium;
      font-size: 14px;
    }

    .breadcrumb a:hover {
      text-decoration: underline;
    }

    .breadcrumb span {
      color: #afb2b4;
      font-size: 14px;
      font-family: ibmMedium;
    }
  </style>
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
  <!----------------------------------------------------------------------------------------------------------------------->


  <div class="theme-content fix-content-width" id="">
    <div id="shopify-section-template--14876768305207__main" class="shopify-section">
      <!-- breadcrumbs start -->
      <div class="breadcrumbs-desktop hidden lg:block md:px-40 mt-[20px]">

        <nav class="breadcrumb capitalize flex p-4 lg:p-0 gap-1 flex-wrap" role="navigation" aria-label="breadcrumbs">
          <a href="../index.html" title="Home">Home</a>
          <span aria-hidden="true">></span>
          <span>Product</span>
        </nav>
      </div>
      <!-- breadcrumbs end -->

      <main class="flex flex-col md:grid md:grid-cols-10 md:gap-10 md:py-6 md:px-40">
        <div id="product-image-carousel-wrapper" class="h-full w-full col-span-6 relative">
          <div id="image-container" class="w-full flex lg:hidden h-fit relative overflow-hidden">
            <div class="container main-product-card-container">
              <div class="product-slider-container pdp-main-image product-image-6931091226679 relative image-container flex gap-4" style="max-width: 100vw;">
                <figure class="flex aspect-[3/4] cursor-pointer product-figure">
                  <a href="product.php" data-id="6931091226679" data-name="QUxXQVlTIExPTkVMWSBBVCBUSEUgVE9QIEJsYWNrIE92ZXJzaXplZCBCYWNrIFB1ZmYgUHJpbnRlZCBUc2hpcnQ=" data-price="599" data-href="/products/always-lonely-at-the-top-black-oversized-tshirt" data-product_index="1" class="w-full h-full">
                    <img srcset="//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=165 165w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=360 360w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=533 533w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=720 720w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=940 940w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513 980w" src="cdn/shop/files/01_023d86.jpg?v=1730189513" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full w-full product-main-image-class carousel-image-index-0" width="980" loading="lazy" height="1257" index="0" type="pdp-main-img">
                  </a>
                </figure>

                <figure class="flex aspect-[3/4] cursor-pointer product-figure">
                  <a href="product.php" data-id="6931091226679" data-name="QUxXQVlTIExPTkVMWSBBVCBUSEUgVE9QIEJsYWNrIE92ZXJzaXplZCBCYWNrIFB1ZmYgUHJpbnRlZCBUc2hpcnQ=" data-price="599" data-href="/products/always-lonely-at-the-top-black-oversized-tshirt" data-product_index="2" class="w-full h-full">
                    <img srcset="//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=165 165w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=360 360w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=533 533w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=720 720w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=940 940w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=1066 1066w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785 1080w" src="cdn/shop/files/20_2a940.jpg?v=1715012785" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full w-full product-main-image-class carousel-image-index-1" width="1080" loading="lazy" height="1440" index="1" type="pdp-main-img">
                  </a>
                </figure>

                <figure class="flex aspect-[3/4] cursor-pointer product-figure">
                  <a href="product.php" data-id="6931091226679" data-name="QUxXQVlTIExPTkVMWSBBVCBUSEUgVE9QIEJsYWNrIE92ZXJzaXplZCBCYWNrIFB1ZmYgUHJpbnRlZCBUc2hpcnQ=" data-price="599" data-href="/products/always-lonely-at-the-top-black-oversized-tshirt" data-product_index="3" class="w-full h-full">
                    <img srcset="//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=165 165w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=360 360w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=533 533w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=720 720w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=940 940w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=1066 1066w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011 4027w" src="cdn/shop/files/ImportedPhoto.751811509.0762060432.jpg?v=1731157011" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full w-full product-main-image-class carousel-image-index-2" width="4027" loading="lazy" height="2728" index="2" type="pdp-main-img">
                  </a>
                </figure>

                <figure class="flex aspect-[3/4] cursor-pointer product-figure">
                  <a href="product.php" data-id="6931091226679" data-name="QUxXQVlTIExPTkVMWSBBVCBUSEUgVE9QIEJsYWNrIE92ZXJzaXplZCBCYWNrIFB1ZmYgUHJpbnRlZCBUc2hpcnQ=" data-price="599" data-href="/products/always-lonely-at-the-top-black-oversized-tshirt" data-product_index="4" class="w-full h-full">
                    <img srcset="//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=165 165w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=360 360w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=533 533w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=720 720w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=940 940w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=1066 1066w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782 1200w" src="cdn/shop/files/01_010a5c.jpg?v=1715012782" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full w-full product-main-image-class carousel-image-index-3" width="1200" loading="lazy" height="1600" index="3" type="pdp-main-img">
                  </a>
                </figure>

                <figure class="flex aspect-[3/4] cursor-pointer product-figure">
                  <a href="product.php" data-id="6931091226679" data-name="QUxXQVlTIExPTkVMWSBBVCBUSEUgVE9QIEJsYWNrIE92ZXJzaXplZCBCYWNrIFB1ZmYgUHJpbnRlZCBUc2hpcnQ=" data-price="599" data-href="/products/always-lonely-at-the-top-black-oversized-tshirt" data-product_index="5" class="w-full h-full">
                    <img srcset="//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=165 165w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=360 360w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=533 533w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=720 720w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=940 940w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=1066 1066w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782 1200w" src="cdn/shop/files/4740a5c.jpg?v=1715012782" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full w-full product-main-image-class carousel-image-index-4" width="1200" loading="lazy" height="1600" index="4" type="pdp-main-img">
                  </a>
                </figure>

                <figure class="flex aspect-[3/4] cursor-pointer product-figure">
                  <a href="product.php" data-id="6931091226679" data-name="QUxXQVlTIExPTkVMWSBBVCBUSEUgVE9QIEJsYWNrIE92ZXJzaXplZCBCYWNrIFB1ZmYgUHJpbnRlZCBUc2hpcnQ=" data-price="599" data-href="/products/always-lonely-at-the-top-black-oversized-tshirt" data-product_index="5" class="w-full h-full">
                    <img srcset="//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=165 165w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=360 360w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=533 533w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=720 720w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=940 940w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=1066 1066w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782 1200w" src="cdn/shop/files/4740a5c.jpg?v=1715012782" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full w-full product-main-image-class carousel-image-index-4" width="1200" loading="lazy" height="1600" index="5" type="pdp-main-img">
                  </a>
                </figure>
              </div>
            </div>

            <div class="product-image-tag product-image-tag flex items-center absolute h-4 top-2 lg:top-4 p-[2px] lg:p-1 rounded-sm z-20 product-main-image-tag left-[1%] !left-0">
              <span class="uppercase text-[7px] lg:text-sm font-[ibmSemiBold] text-center text-[#00AA68]"> Oversized </span>
            </div>
          </div>


          <div>
            <div class="outer-grid pdp-main-image gap-1">
              <div class="product-image-tag product-image-tag flex items-center absolute h-4 top-2 lg:top-4 p-[2px] lg:p-1 rounded-sm z-20 product-main-image-tag left-[1%] !left-0">
                <span class="uppercase text-[7px] lg:text-sm font-[ibmSemiBold] text-center text-[#00AA68]"> Oversized </span>
              </div>

              <figure id="image-container" class="img_producto_container aspect-[5/7] image-container relative" data-scale="1.6">
                <img srcset="//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=165 165w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=360 360w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=533 533w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=720 720w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=940 940w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513 980w" src="cdn/shop/files/01_023d86.jpg?v=1730189513" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full object-cover dslc-lightbox-image img_producto" width="980" loading="eager" height="1257" index="0" type="pdp-main-img" target="_self">
              </figure>

              <figure id="image-container" class="img_producto_container aspect-[5/7] image-container relative" data-scale="1.6">
                <img srcset="//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=165 165w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=360 360w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=533 533w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=720 720w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=940 940w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=1066 1066w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785 1080w" src="cdn/shop/files/20_2a940.jpg?v=1715012785" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full object-cover dslc-lightbox-image img_producto" width="1080" loading="eager" height="1440" index="1" type="pdp-main-img" target="_self">
              </figure>

              <figure id="image-container" class="img_producto_container aspect-[5/7] image-container relative" data-scale="1.6">
                <img srcset="//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=165 165w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=360 360w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=533 533w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=720 720w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=940 940w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=1066 1066w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011 4027w" src="cdn/shop/files/ImportedPhoto.751811509.0762060432.jpg?v=1731157011" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full object-cover dslc-lightbox-image img_producto" width="4027" loading="eager" height="2728" index="2" type="pdp-main-img" target="_self">
              </figure>

              <figure id="image-container" class="img_producto_container aspect-[5/7] image-container relative" data-scale="1.6">
                <img srcset="//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=165 165w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=360 360w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=533 533w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=720 720w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=940 940w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=1066 1066w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782 1200w" src="cdn/shop/files/01_010a5c.jpg?v=1715012782" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full object-cover dslc-lightbox-image img_producto" width="1200" loading="eager" height="1600" index="3" type="pdp-main-img" target="_self">
              </figure>

              <figure id="image-container" class="img_producto_container aspect-[5/7] image-container relative" data-scale="1.6">
                <img srcset="//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=165 165w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=360 360w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=533 533w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=720 720w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=940 940w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=1066 1066w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782 1200w" src="cdn/shop/files/4740a5c.jpg?v=1715012782" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full object-cover dslc-lightbox-image img_producto" width="1200" loading="eager" height="1600" index="4" type="pdp-main-img" target="_self">
              </figure>

              <figure id="image-container" class="img_producto_container aspect-[5/7] image-container relative" data-scale="1.6">
                <img srcset="//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=165 165w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=360 360w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=533 533w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=720 720w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=940 940w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=1066 1066w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782 1200w" src="cdn/shop/files/4740a5c.jpg?v=1715012782" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full object-cover dslc-lightbox-image img_producto" width="1200" loading="eager" height="1600" index="5" type="pdp-main-img" target="_self">
              </figure>
            </div>
          </div>

          <div class="expand-modal hidden flex-col justify-between">
            <div class="expand-modal-bg absolute top-0 left-0 bg-[#fff] lg:bg-[#131814] h-full w-full"></div>
            <div class="expand-modal-close flex justify-end w-full z-[95] m-4 gap-3 mr-10">
              <button class="expand-modal-zoomout cursor-pointer z-[96] p-1 bg-white border-[0.38px] border-[#13181433] shadow-[0.75px_0.75px_0px_0px_#131814] rounded-md">
                <img src="cdn/shop/t/64/assets/icon-zoom-out262c.svg?v=22947114605117513751722237261" width="16" height="16" alt="zoom in icon" loading="lazy">
              </button>
              <button class="expand-modal-zoomin cursor-pointer z-[96] p-1 bg-white border-[0.38px] border-[#13181433] shadow-[0.75px_0.75px_0px_0px_#131814] rounded-md">
                <img src="cdn/shop/t/64/assets/icon-zoom-in716a.svg?v=78164603656360222201722237261" width="16" height="16" alt="zoom in icon" loading="lazy">
              </button>
              <button class="expand-modal-close-btn cursor-pointer z-[96] p-1 bg-white border-[0.38px] border-[#13181433] shadow-[0.75px_0.75px_0px_0px_#131814] rounded-md">
                <img src="cdn/shop/t/64/assets/icon-expand-close9ae8.svg?v=6910857965490087961722237261" width="16" height="16" alt="expand close" loading="lazy">
              </button>
            </div>
            <div class="expand-modal-images flex-1 flex items-center w-full max-h-[50%]">
              <div class="pdp-expand-image pdp-slider-container w-full max-w-lg">
                <figure id="image-container" class="image-container">
                  <img srcset="//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=165 165w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=360 360w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=533 533w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=720 720w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513&width=940 940w,//veirdo.in/cdn/shop/files/01_02.jpg?v=1730189513 980w" src="cdn/shop/files/01_023d86.jpg?v=1730189513" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg w-full h-full object-cover" width="980" loading="lazy" height="1257" index="0" zoom-applied="false" type="pdp-expand-img">
                </figure>

                <figure id="image-container" class="image-container">
                  <img srcset="//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=165 165w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=360 360w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=533 533w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=720 720w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=940 940w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785&width=1066 1066w,//veirdo.in/cdn/shop/files/20_2.jpg?v=1715012785 1080w" src="cdn/shop/files/20_2a940.jpg?v=1715012785" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg w-full h-full object-cover" width="1080" loading="lazy" height="1440" index="1" zoom-applied="false" type="pdp-expand-img">
                </figure>

                <figure id="image-container" class="image-container">
                  <img srcset="//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=165 165w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=360 360w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=533 533w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=720 720w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=940 940w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011&width=1066 1066w,//veirdo.in/cdn/shop/files/ImportedPhoto.751811509.076206.jpg?v=1731157011 4027w" src="cdn/shop/files/ImportedPhoto.751811509.0762060432.jpg?v=1731157011" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg w-full h-full object-cover" width="4027" loading="lazy" height="2728" index="2" zoom-applied="false" type="pdp-expand-img">
                </figure>

                <figure id="image-container" class="image-container">
                  <img srcset="//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=165 165w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=360 360w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=533 533w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=720 720w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=940 940w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782&width=1066 1066w,//veirdo.in/cdn/shop/files/01_01.jpg?v=1715012782 1200w" src="cdn/shop/files/01_010a5c.jpg?v=1715012782" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg w-full h-full object-cover" width="1200" loading="lazy" height="1600" index="3" zoom-applied="false" type="pdp-expand-img">
                </figure>

                <figure id="image-container" class="image-container">
                  <img srcset="//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=165 165w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=360 360w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=533 533w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=720 720w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=940 940w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782&width=1066 1066w,//veirdo.in/cdn/shop/files/474.jpg?v=1715012782 1200w" src="cdn/shop/files/4740a5c.jpg?v=1715012782" sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg w-full h-full object-cover" width="1200" loading="lazy" height="1600" index="4" zoom-applied="false" type="pdp-expand-img">
                </figure>
              </div>
            </div>
            <div class="thumbnail-wrapper my-2 mx-4 px-4 lg:mt-10 flex justify-start items-center w-full md:w-[30%] md:pb-7 overflow-x-scroll hide-scrollbar">
              <div class="flex items-start gap-2 relative left-0">
                <figure class="aspect-[3/4] w-[75px] h-[100px] pdp-expand-thumbnail cursor-pointer">
                  <img src="cdn/shop/files/01_02209d.jpg?v=1730189513&amp;width=75" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full object-cover relative thumbnail-inactive" width="75" loading="lazy" height="100" index="0">
                </figure>

                <figure class="aspect-[3/4] w-[75px] h-[100px] pdp-expand-thumbnail cursor-pointer">
                  <img src="cdn/shop/files/20_2d30c.jpg?v=1715012785&amp;width=75" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full object-cover relative thumbnail-inactive" width="75" loading="lazy" height="100" index="1">
                </figure>

                <figure class="aspect-[3/4] w-[75px] h-[100px] pdp-expand-thumbnail cursor-pointer">
                  <img src="cdn/shop/files/ImportedPhoto.751811509.0762069fcf.jpg?v=1731157011&amp;width=75" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full object-cover relative thumbnail-inactive" width="75" loading="lazy" height="100" index="2">
                </figure>

                <figure class="aspect-[3/4] w-[75px] h-[100px] pdp-expand-thumbnail cursor-pointer">
                  <img src="cdn/shop/files/01_01c062.jpg?v=1715012782&amp;width=75" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full object-cover relative thumbnail-inactive" width="75" loading="lazy" height="100" index="3">
                </figure>

                <figure class="aspect-[3/4] w-[75px] h-[100px] pdp-expand-thumbnail cursor-pointer">
                  <img src="cdn/shop/files/474c062.jpg?v=1715012782&amp;width=75" alt="ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt" class="image-placeholder-bg h-full object-cover relative thumbnail-inactive" width="75" loading="lazy" height="100" index="4">
                </figure>
              </div>
            </div>
          </div>
        </div>

        <div class="lg:hidden border-b-4 border-b-[#F6F6F6]">
          <div class="ga-timer bg-[#EAF4FC] text-[#2063A1]">
            <div class="text-xs lg:text-sm flex flex-row gap-1 justify-center px-1 py-2 lg:py-1.5 lg:px-2 font-[ibmMedium]">
              <div class="uppercase">Sale ends in</div>
              <div>:</div>
              <div id="sales_countdown" class="sales_countdown font-[ibmSemiBold] flex flex-row gap-0.5">00h : 10m : 30s</div>
            </div>
          </div>
        </div>

        <div class="flex flex-col col-span-4">
          <div class="hidden lg:block mb-1.5">
            <div class="ga-timer w-full rounded-lg bg-[#EAF4FC] text-[#2063A1]">
              <div class="text-xs lg:text-sm flex flex-row gap-1 justify-center px-1 py-2 lg:py-1.5 lg:px-2 font-[ibmMedium]">
                <div class="uppercase">Sale ends in</div>
                <div>:</div>
                <div id="sales_countdown" class="sales_countdown font-[ibmSemiBold] flex flex-row gap-0.5">00h : 10m : 30s</div>
              </div>
            </div>
          </div>

          <div class="flex flex-col gap-[2px] lg:gap-2 pt-2.5 pb-3.5 px-4 lg:px-0 lg:py-0 border-b-4 border-b-[#F6F6F6] lg:border-none product-information">
            <div class="flex justify-between items-baseline">
              <h1 class="text-[#51575C] lg:mt-3 text-sm lg:text-xl font-[ibmMedium]"> ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt </h1>
            </div>

            <div class="flex items-center justify-between lg:gap-2">
              <section class="flex gap-2 items-baseline flex-wrap">
                <span class="font-[ibmSemiBold] text-lg lg:text-2xl text-[#121212]">₹599</span>
                <span class="text-sm lg:text-xl font-[ibmMedium] text-[#B0B1B5] line-through">₹1,199</span>
                <span class="font-[ibmMedium] text-sm lg:text-base text-[#00B53A] uppercase">50% off</span>
              </section>

              <div id="ratings-badge-web" class="flex">
                <button data-ga-view-custom data-ga-view-info-custok="PDP_Ratings_Badge_View" data-ga-view-payload-custom="5.0" class="ratings-badge flex gap-[2px] items-center">
                  <img src="cdn/shop/t/64/assets/icon-star5226.svg?v=116753354371702194131706021711" loading="lazy" alt="rating icon" width="15" height="15">
                  <div class="flex items-center gap-1 text-sm lg:text-base font-[ibmMedium] text-[#3A3E41]">
                    <span>5.0</span>
                    <span class="bg-[#C9CBCC] w-[1px] h-[7.5px]"></span>
                    <span data-ga-view data-ga-view-info="PDP_Ratings_View" class="text-[#8A8E92]">5</span>
                  </div>
                </button>
              </div>
            </div>

            <div class="lg:hidden">
              <span class="best-offer-callout hidden bg-[#E6FEF4B8] p-1 pr-2 rounded flex items-center gap-1 w-fit">
                <img src="cdn/shop/t/64/assets/icon-offers46c8.gif?v=178628784726124120341723122736" width="26" height="26" alt="offers icon" loading="lazy" class="lg:w-7 lg:h-7">
                <div class="text-[#131814] font-[ibmMedium] mb-1">
                  Best price
                  <span class="text-[#008450] font-[ibmBold]"> ₹366 </span> with offers
                </div>
                <div class="offers-down-btn lg:hidden w-3.5 h-3.5 rounded border-[0.22px] border-[#00000052] ml-2 flex items-center justify-center">
                  <img src="cdn/shop/t/64/assets/icon-arrow-down36e6.svg?v=47546669650400989411723122726" width="10" height="10" alt="arrow down icon" loading="lazy">
                </div>
              </span>
            </div>
          </div>

          <!-- offer section start -->
          <div class="offer-section gap-3 py-[14px] px-4 lg:px-0 lg:pr-2 lg:pt-6 lg:pb-4 flex flex-col">
            <h3 class="text-[#2D3033] font-[soraSemiBold] text-sm lg:text-base uppercase">Offers</h3>
            <div class="buy-n-container w-full hide-scrollbar pb-4 overflow-x-scroll pr-1">
              <div class="buy-n-wrapper available-offers flex gap-3">
                <div data-ga-view-custom data-ga-view-info-custom="PDP_OFFER_SECTION" data-ga-view-payload-custom="{coupon_name: 'BUY 2 GET 1 FREE | REPUBLIC DAY SALE', position : '1'}" class="offer-card-bg-gradiant p-3 rounded-xl min-w-[80%] h-[initial] flex flex-col justify-between lg:min-w-[100%]">
                  <div class="flex gap-2 pb-3 items-start">
                    <img src="cdn/shop/t/64/assets/icon-offer6678.gif?v=154534563168981496241729072614" alt="offer icon" class="pt-[5px]" width="24" height="24" loading="lazy">
                    <div class="flex flex-col gap-1">
                      <p class="text-[13px] text-[#131814] font-[ibmSemiBold] offer-text lg:text-sm"> Get it for as low as <span class="text-[#008450] font-[ibmBold] text-sm lg:text-base">FREE</span>
                        <span class="text-[11px] lg:text-sm line-through text-[#4A4F54]">₹599</span>
                      </p>
                      <p class="text-[10px] lg:text-xs font-[ibmMedium] text-[#4A4F54] offer-text">
                        <span class="text-[#131814] text-[11px] lg:text-xs font-[ibmSemiBold]">BUY 2 GET 1 FREE | REPUBLIC DAY SALE </span>
                        Add any 3 products in your cart to avail the offer.
                      </p>
                    </div>
                  </div>
                  <div class="flex justify-between pt-3 border-dashed border-t-[1px] border-[#CCD0D7]">
                    <div class="flex items-center gap-1">
                      <span class="text-[12px] text-[#1A1E31] font-[ibmSemiBold] lg:text-sm">Offer will be auto-applied</span>
                    </div>
                    <button class="offer-view-detail font-[ibmMedium] text-[11px] text-[#4A4F54] underline lg:text-xs uppercase" data-discount_coupon="YnV5XzJfZ2V0XzFfZnJlZV98X3JlcHVibGljX2RheV9zYWxl" data-discount_type="bxgy" data-event-details="{coupon_name: 'BUY 2 GET 1 FREE | REPUBLIC DAY SALE', position : '1'}'">Offer T&C</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- offer section end -->

          <!-- select sizes and wishlist and add to cart button start -->
          <div class="grid-area-form">
            <div data-ga-view data-ga-view-info="PDP_Size_View" class="flex flex-col gap-3 lg:gap-5 border-b-4 border-b-[#F6F6F6] lg:border-none py-[14px] px-4 lg:px-0 lg:py-6">
              <div class="flex justify-between items-center size-options-container">
                <span class="uppercase text-[#2D3033] text-sm lg:text-base font-[soraSemiBold]"> Select Size </span>
                <div data-app="eastsideco_sizeGuides" data-shop="veirdo.myshopify.com" data-tags="B2G1,BLACK TSHIRT,BUY1GET1FREE,FLAT15,Freeshipping,NEW ARRIVAL,NEW COLLECTION,NEW100,Printed Half Sleeve Tshirt,UnisexCollection" data-metafields="" data-popup="link" data-trigger-text="Size Guide" class="size-guide"></div>
              </div>
              <fieldset class="flex flex-wrap gap-3 size-variant-parent">
                <label data-variant-id="40581803999287" class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3">
                  <input class="main-product-form-size-trigger hidden" type="radio" name="size" value="S" data-product-id="6931091226679" data-variant-id="40581803999287" data-variant-qty="134">
                  <span class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase">S</span>
                </label>

                <label data-variant-id="40581804032055" class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3">
                  <input class="main-product-form-size-trigger hidden" type="radio" name="size" value="M" data-product-id="6931091226679" data-variant-id="40581804032055" data-variant-qty="81">
                  <span class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase">M</span>
                </label>

                <label data-variant-id="40581804064823" class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3">
                  <input class="main-product-form-size-trigger hidden" type="radio" name="size" value="L" data-product-id="6931091226679" data-variant-id="40581804064823" data-variant-qty="86">
                  <span class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase">L</span>
                </label>

                <label data-variant-id="40581804097591" class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3">
                  <input class="main-product-form-size-trigger hidden" type="radio" name="size" value="XL" data-product-id="6931091226679" data-variant-id="40581804097591" data-variant-qty="82">
                  <span class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase">XL</span>
                </label>

                <label data-variant-id="40581804130359" class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3">
                  <input class="main-product-form-size-trigger hidden" type="radio" name="size" value="XXL" data-product-id="6931091226679" data-variant-id="40581804130359" data-variant-qty="98">
                  <span class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase">XXL</span>
                </label>
              </fieldset>
            </div>

            <div class="product-add-buttons atc-container flex gap-3 fixed lg:static bg-white bottom-0 left-0 w-full z-[80] py-3 px-4 lg:p-0 lg:pb-6">
              <div class="flits-wishlist-static-btn">
                <button class="main-product-wishlist lg:flex gap-2 items-center justify-center px-6 py-3 rounded-lg border-[0.5px] border-[#74797D]">
                  <span class="text-[#222527] text-sm font-[soraSemiBold]">WISHLIST</span>
                  <img src="cdn/shop/t/64/assets/icon-wishlistaa8e.svg?v=113452544103302444001706007531" width="20" height="20" alt="wishlist icon" loading="lazy">
                </button>
              </div>
              <button data-ga-view data-ga-view-info="PDP_ATC_View" data-total-size-variants="1" class="add-to-bag-submit-main-product-btn flex items-center justify-center enabled-submit-btn px-4 py-3 rounded-lg w-full lg:w-1/2">
                <span class="add-to-bag-submit-main-product-btn-label capitalize font-[soraSemiBold] text-sm text-[#222527]">
                  ADD TO CART
                </span>
              </button>
            </div>
          </div>
          <!-- select sizes and wishlist and add to cart button end -->

          <!-- Product Information start -->
          <?php include("product-information.php") ?>
          <!-- Product Information end -->
        </div>
      </main>
    </div>
  </div>

  <!----------------------------------------------------------------------------------------------------------------------->
  <?php include("new-arrival.php") ?>
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

  <!-- code for zoom image on hover -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const $jq = jQuery.noConflict();

      /* Start - Image Lazy loading Logic */
      const lazyImages = document.querySelectorAll('.lazy');
      const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            const image = entry.target;
            image.src = image.dataset.src;
            image.addEventListener('load', () => {
              image.classList.add('loaded');
            });
            observer.unobserve(image);
          }
        });
      });
      lazyImages.forEach((image) => {
        observer.observe(image);
      });

      const getDeviceType = (width) => {
        return width >= 1024 ? "desktop" : width >= 768 ? "tablet" : "mobile";
      };

      /* Image Hover Effect */
      domReady(function() {
        $jq('.img_producto_container')
          .on('mouseover', function() {
            $jq(this).children('.img_producto').css({
              transform: 'scale(' + $jq(this).attr('data-scale') + ')'
            });
          })
          .on('mouseout', function() {
            $jq(this).children('.img_producto').css({
              transform: 'scale(1)'
            });
          })
          .on('mousemove', function(e) {
            $jq(this).children('.img_producto').css({
              'transform-origin': ((e.pageX - $jq(this).offset().left) / $jq(this).width()) * 100 + '% ' + ((e.pageY - $jq(this).offset().top) / $jq(this).height()) * 100 + '%',
            });
          });
      });
    });
  </script>
</body>

</html>