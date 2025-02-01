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
<<<<<<< HEAD
                <div class="flex flex-col col-span-4">
                    <div class="hidden lg:block mb-1.5">


                        <div class="ga-timer w-full rounded-lg  bg-[#EAF4FC] text-[#2063A1]  " data-ga-view-custom
                            data-ga-view-info-custom="PDP_Timer_View">
                            <div
                                class="text-xs lg:text-sm flex flex-row gap-1 justify-center px-1 py-2 lg:py-1.5 lg:px-2  font-[ibmMedium]">
                                <div class="uppercase">Sale ends in</div>
                                <div>:</div>
                                <div id="sales_countdown"
                                    class="sales_countdown font-[ibmSemiBold] flex flex-row gap-0.5">00h : 10m : 30s
                                </div>
                            </div>
                        </div>
                    </div>
                    <div
                        class="flex flex-col gap-[2px] lg:gap-2 pt-2.5 pb-3.5 px-4 lg:px-0 lg:py-0 border-b-4 border-b-[#F6F6F6] lg:border-none product-information">
                        <div class="flex justify-between items-baseline">
                            <h1 class="text-[#51575C] lg:mt-3 text-sm lg:text-xl font-[ibmMedium]">
                                ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt
                            </h1>
                            <div class="relative">
                                <button data-ga-view data-ga-view-info="PDP_Share_Button_View" id="share-button">
                                    <img src="cdn/shop/t/64/assets/icon-sharef161.svg?v=182844982370591132991706002276"
                                        width="16" height="16" alt="share icon" loading="lazy" class="lg:w-5 lg:h-5">
                                </button>
                                <div id="share-dropdown-bg"
                                    class="share-close z-[99] fixed left-0 top-0 h-screen w-screen bg-[#141A38]/50 invisible">
                                </div>
                                <div id="share-dropdown"
                                    class="share-dropdown fixed left-0 right-0 top-full md:absolute md:left-auto md:right-full md:top-full md:bottom-auto z-[110] md:w-max flex flex-col py-8 px-4 gap-4 bg-white rounded-lg">
                                    <div class="share-dropdown-header flex items-center justify-between">
                                        <span class="text-base md:text-lg font-[familySemiBold]">Share</span>
                                        <button id="share-close" class="share-close">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none">
                                                <path
                                                    d="M12 22C6.477 22 2 17.523 2 12C2 6.477 6.477 2 12 2C17.523 2 22 6.477 22 12C22 17.523 17.523 22 12 22ZM12 10.586L9.172 7.757L7.757 9.172L10.586 12L7.757 14.828L9.172 16.243L12 13.414L14.828 16.243L16.243 14.828L13.414 12L16.243 9.172L14.828 7.757L12 10.586Z"
                                                    fill="#1A1E31" />
                                            </svg>
                                        </button>
                                    </div>
                                    <div data-ga-view data-ga-view-info="PDP_Share_Button_View"
                                        class="share-dropdown-body flex flex-col">
                                        <div class="share-item" onclick="shareOption('pin')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                viewBox="0 0 32 32" fill="none">
                                                <path
                                                    d="M17.8268 2.792C14.6365 2.35314 11.3951 3.0834 8.70123 4.84795C6.00734 6.61249 4.04286 9.29214 3.17053 12.3921C2.2982 15.492 2.57694 18.8029 3.95528 21.7134C5.33362 24.6239 7.71847 26.9374 10.6695 28.2267C10.5897 27.2024 10.6629 26.172 10.8868 25.1693C11.1335 24.0507 12.6148 17.8853 12.6148 17.8853C12.3198 17.2241 12.1724 16.5066 12.1828 15.7827C12.1828 13.8027 13.3255 12.3253 14.7468 12.3253C15.0021 12.3216 15.2553 12.3729 15.489 12.4758C15.7228 12.5786 15.9316 12.7306 16.1014 12.9214C16.2712 13.1121 16.3979 13.3372 16.4729 13.5813C16.5479 13.8254 16.5695 14.0828 16.5361 14.336C16.5361 15.536 15.7655 17.352 15.3628 19.056C15.2832 19.3685 15.2782 19.6953 15.3481 20.0102C15.4179 20.325 15.5608 20.619 15.7651 20.8685C15.9695 21.1179 16.2296 21.3159 16.5244 21.4465C16.8193 21.577 17.1407 21.6364 17.4628 21.62C19.9935 21.62 21.6895 18.3787 21.6895 14.552C21.6895 11.6187 19.7468 9.42133 16.1655 9.42133C15.3086 9.38804 14.454 9.52923 13.6534 9.83634C12.8528 10.1434 12.1229 10.6101 11.5082 11.2079C10.8934 11.8056 10.4066 12.5221 10.0772 13.3138C9.74785 14.1055 9.58281 14.9559 9.59213 15.8133C9.55395 16.7644 9.8608 17.6973 10.4561 18.44C10.5674 18.523 10.6486 18.64 10.6876 18.7732C10.7265 18.9065 10.7211 19.0488 10.6721 19.1787C10.6108 19.424 10.4561 20.0093 10.3948 20.224C10.382 20.2968 10.3524 20.3656 10.3082 20.4248C10.264 20.4841 10.2065 20.5321 10.1403 20.565C10.0741 20.598 10.0012 20.6149 9.92727 20.6145C9.85336 20.6141 9.78058 20.5963 9.71479 20.5627C7.86946 19.824 7.00013 17.7933 7.00013 15.4747C7.00013 11.6787 10.1788 7.13467 16.5388 7.13467C21.6001 7.13467 24.9655 10.8373 24.9655 14.7973C24.9655 20.0093 22.0628 23.928 17.7735 23.928C17.1324 23.9485 16.4965 23.807 15.9246 23.5166C15.3527 23.2262 14.8632 22.7963 14.5015 22.2667C14.5015 22.2667 13.7308 25.3547 13.5788 25.9387C13.2685 26.9476 12.8107 27.9051 12.2201 28.78C13.4508 29.1533 14.7295 29.34 16.0148 29.3347C17.7662 29.3361 19.5007 28.992 21.119 28.3221C22.7373 27.6522 24.2075 26.6697 25.4455 25.4308C26.6836 24.1919 27.6651 22.721 28.3338 21.1023C29.0026 19.4835 29.3454 17.7488 29.3428 15.9973C29.3411 12.7773 28.1745 9.66666 26.0583 7.23971C23.9421 4.81275 21.0192 3.23342 17.8295 2.79333L17.8268 2.792Z"
                                                    fill="#EA2123" />
                                            </svg>
                                            <span> Pin it </span>
                                        </div>
                                        <div class="share-item" onclick="shareOption('fb')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                viewBox="0 0 32 32" fill="none">
                                                <path
                                                    d="M15.9998 2.66667C8.63584 2.66667 2.6665 8.63601 2.6665 16C2.6665 22.6547 7.5425 28.1707 13.9172 29.172V19.8533H10.5305V16H13.9172V13.0627C13.9172 9.72134 15.9065 7.87601 18.9532 7.87601C20.4118 7.87601 21.9372 8.13601 21.9372 8.13601V11.416H20.2572C18.5998 11.416 18.0838 12.444 18.0838 13.4987V16H21.7812L21.1905 19.8533H18.0838V29.172C24.4572 28.172 29.3332 22.6533 29.3332 16C29.3332 8.63601 23.3638 2.66667 15.9998 2.66667Z"
                                                    fill="#313B97" />
                                            </svg>
                                            <span> Share it on Facebook </span>
                                        </div>
                                        <div class="share-item" onclick="shareOption('tw')">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                                viewBox="0 0 32 32" fill="none">
                                                <path
                                                    d="M29.5494 7.54133C28.5315 7.99159 27.452 8.28729 26.3467 8.41866C27.5117 7.7219 28.3837 6.62535 28.8001 5.33333C27.7067 5.98399 26.5081 6.43999 25.2587 6.68666C24.4195 5.78877 23.3072 5.19328 22.0947 4.99277C20.8821 4.79227 19.6373 4.99798 18.5538 5.57793C17.4702 6.15788 16.6086 7.07957 16.1029 8.19972C15.5972 9.31986 15.4757 10.5757 15.7574 11.772C13.5402 11.6609 11.3712 11.0847 9.39112 10.0809C7.41106 9.07707 5.66424 7.66806 4.26407 5.94533C3.76846 6.79659 3.50801 7.7643 3.5094 8.74933C3.5094 10.6827 4.4934 12.3907 5.9894 13.3907C5.10408 13.3628 4.23825 13.1237 3.46407 12.6933V12.7627C3.46434 14.0503 3.9099 15.2981 4.7252 16.2947C5.54051 17.2913 6.67538 17.9753 7.9374 18.2307C7.11556 18.4534 6.25381 18.4862 5.4174 18.3267C5.77323 19.435 6.46675 20.4043 7.40086 21.0988C8.33497 21.7934 9.46291 22.1784 10.6267 22.2C9.47004 23.1084 8.14564 23.78 6.72924 24.1762C5.31285 24.5725 3.83224 24.6857 2.37207 24.5093C4.921 26.1486 7.8882 27.0188 10.9187 27.016C21.1761 27.016 26.7854 18.5187 26.7854 11.1493C26.7854 10.9093 26.7787 10.6667 26.7681 10.4293C27.8599 9.64022 28.8022 8.66269 29.5507 7.54266L29.5494 7.54133Z"
                                                    fill="#22CAFF" />
                                            </svg>
                                            <span>Tweet</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="flex items-center justify-between lg:gap-2">


                            <section class="flex gap-2 items-baseline flex-wrap">
                                <span class="font-[ibmSemiBold] text-lg lg:text-2xl text-[#121212] ">₹599</span>

                                <span
                                    class="text-sm lg:text-xl font-[ibmMedium] text-[#B0B1B5] line-through">₹1,199</span>
                                <span class="font-[ibmMedium] text-sm lg:text-base text-[#00B53A] uppercase">50% off
                                </span>

                            </section>



                            <div id="ratings-badge-web" class="flex">

                                <button data-ga-view-custom data-ga-view-info-custok="PDP_Ratings_Badge_View"
                                    data-ga-view-payload-custom="5.0" class="ratings-badge flex gap-[2px] items-center">
                                    <img src="cdn/shop/t/64/assets/icon-star5226.svg?v=116753354371702194131706021711"
                                        loading="lazy" alt="rating icon" width="15" height="15">
                                    <div
                                        class="flex items-center gap-1  text-sm lg:text-base font-[ibmMedium] text-[#3A3E41]">
                                        5.0
                                        <span class="bg-[#C9CBCC] w-[1px] h-[7.5px]"></span>
                                        <span data-ga-view data-ga-view-info="PDP_Ratings_View" class="text-[#8A8E92]">5
                                        </span>
                                    </div>
                                </button>


                            </div>
                        </div>
                        <div class="lg:hidden">


                            <span
                                class="best-offer-callout hidden bg-[#E6FEF4B8] p-1 pr-2 rounded flex items-center gap-1 w-fit">
                                <img src="cdn/shop/t/64/assets/icon-offers46c8.gif?v=178628784726124120341723122736"
                                    width="26" height="26" alt="offers icon" loading="lazy" class="lg:w-7 lg:h-7">
                                <div class="text-[#131814] font-[ibmMedium] mb-1">
                                    Best price
                                    <span class="text-[#008450] font-[ibmBold]"> ₹366 </span> with
                                    offers
                                </div>
                                <div
                                    class="offers-down-btn lg:hidden w-3.5 h-3.5 rounded border-[0.22px] border-[#00000052] ml-2 flex items-center justify-center">
                                    <img src="cdn/shop/t/64/assets/icon-arrow-down36e6.svg?v=47546669650400989411723122726"
                                        width="10" height="10" alt="arrow down icon" loading="lazy">
                                </div>
                            </span>

                        </div>


                    </div>

                    <div class="offer-section gap-3 py-[14px] px-4 lg:px-0 lg:pr-2 lg:pt-6 lg:pb-4 flex flex-col">
                        <h3 class="text-[#2D3033] font-[soraSemiBold] text-sm lg:text-base uppercase">Offers</h3>
                        <div class="buy-n-container w-full hide-scrollbar pb-4 overflow-x-scroll  pr-1 ">
                            <div class="buy-n-wrapper available-offers flex gap-3">








                                <div data-ga-view-custom data-ga-view-info-custom="PDP_OFFER_SECTION"
                                    data-ga-view-payload-custom="{coupon_name: 'BUY 2 GET 1 FREE | REPUBLIC DAY SALE', position : '1'}'"
                                    class="offer-card-bg-gradiant p-3 rounded-xl min-w-[80%] h-[initial] flex flex-col justify-between  lg:min-w-[100%]  ">
                                    <div class="flex gap-2 pb-3 items-start ">
                                        <img src="cdn/shop/t/64/assets/icon-offer6678.gif?v=154534563168981496241729072614"
                                            alt="offer icon" class="pt-[5px]" width="24" height="24" loading="lazy">
                                        <div class="flex flex-col gap-1">
                                            <p
                                                class="text-[13px] text-[#131814] font-[ibmSemiBold] offer-text lg:text-sm">
                                                Get it for as low as <span
                                                    class="text-[#008450] font-[ibmBold] text-sm lg:text-base">FREE</span>
                                                <span
                                                    class="text-[11px] lg:text-sm line-through text-[#4A4F54]">₹599</span>
                                            </p>
                                            <p
                                                class="text-[10px] lg:text-xs font-[ibmMedium] text-[#4A4F54] offer-text">
                                                <span
                                                    class="text-[#131814] text-[11px] lg:text-xs font-[ibmSemiBold]">BUY
                                                    2 GET 1 FREE | REPUBLIC DAY SALE </span>
                                                Add any 3 products in your cart to avail the offer.
                                            </p>
                                        </div>
                                    </div>
                                    <div
                                        class="flex justify-between pt-3 border-dashed border-t-[1px] border-[#CCD0D7]">
                                        <div class="flex items-center gap-1">

                                            <span class="text-[12px] text-[#1A1E31] font-[ibmSemiBold] lg:text-sm">Offer
                                                will be auto-applied</span>

                                        </div>
                                        <button
                                            onclick="gaClickEvent('PDP_OFFER_VIEW_DETAILS', '{coupon_name: 'BUY 2 GET 1 FREE | REPUBLIC DAY SALE', position : '1'}'');"
                                            class="offer-view-detail font-[ibmMedium] text-[11px] text-[#4A4F54] underline lg:text-xs uppercase"
                                            data-discount_coupon="YnV5XzJfZ2V0XzFfZnJlZV98X3JlcHVibGljX2RheV9zYWxl"
                                            data-discount_type="bxgy"
                                            data-event-details="{coupon_name: 'BUY 2 GET 1 FREE | REPUBLIC DAY SALE', position : '1'}'">Offer
                                            T&C</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- <script type="text/javascript">
                        renderAvailableOffers('always-lonely-at-the-top-black-oversized-tshirt');
                    </script> -->




                    <div class="inject-available-offer-modal"></div>

                    <div data-ga-view data-ga-view-info="PDP_Prepaid_Sticky_Banner"
                        class="flex flex-col gap-3 border-b-4 border-[rgb(246,246,246)] lg:border-none">
                        <div class="container">
                            <div
                                class="flex justify-between items-center bg-[#F2FAFF] lg:rounded-[6px] py-1 px-4 w-full h-fit">
                                <div class="flex justify-between items-center w-full">
                                    <div class="flex gap-2">
                                        <span class="text-[#194D7D] text-sm font-[ibmMedium]">Extra 10% off on prepaid
                                            orders</span>
                                    </div>
                                    <div class="flex">
                                        <img src="cdn/shop/t/64/assets/icon-payment-gateways7444.svg?v=155911884362455773161720011043"
                                            width="72" height="24" alt="sticky banner" loading="lazy">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <script>
                        const _first_selected_variant = {
                            "id": 40581803999287,
                            "title": "S",
                            "option1": "S",
                            "option2": null,
                            "option3": null,
                            "sku": "OS_V_ITSALWYLNLY_BK_S",
                            "requires_shipping": true,
                            "taxable": true,
                            "featured_image": null,
                            "available": true,
                            "name": "ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt - S",
                            "public_title": "S",
                            "options": ["S"],
                            "price": 59900,
                            "weight": 250,
                            "compare_at_price": 119900,
                            "inventory_quantity": 134,
                            "inventory_management": "shopify",
                            "inventory_policy": "deny",
                            "barcode": null,
                            "requires_selling_plan": false,
                            "selling_plan_allocations": []
                        }
                        const _productOptionsWithValues = [{
                            "name": "Size",
                            "position": 1,
                            "values": ["S", "M", "L", "XL", "XXL"]
                        }]
                        const _productMedia = [{
                            "alt": null,
                            "id": 24588792037431,
                            "position": 1,
                            "preview_image": {
                                "aspect_ratio": 0.78,
                                "height": 1257,
                                "width": 980,
                                "src": "\/\/veirdo.in\/cdn\/shop\/files\/01_02.jpg?v=1730189513"
                            },
                            "aspect_ratio": 0.78,
                            "height": 1257,
                            "media_type": "image",
                            "src": "\/\/veirdo.in\/cdn\/shop\/files\/01_02.jpg?v=1730189513",
                            "width": 980
                        }, {
                            "alt": null,
                            "id": 23870093230135,
                            "position": 2,
                            "preview_image": {
                                "aspect_ratio": 0.75,
                                "height": 1440,
                                "width": 1080,
                                "src": "\/\/veirdo.in\/cdn\/shop\/files\/20_2.jpg?v=1715012785"
                            },
                            "aspect_ratio": 0.75,
                            "height": 1440,
                            "media_type": "image",
                            "src": "\/\/veirdo.in\/cdn\/shop\/files\/20_2.jpg?v=1715012785",
                            "width": 1080
                        }, {
                            "alt": null,
                            "id": 24622210908215,
                            "position": 3,
                            "preview_image": {
                                "aspect_ratio": 1.476,
                                "height": 2728,
                                "width": 4027,
                                "src": "\/\/veirdo.in\/cdn\/shop\/files\/ImportedPhoto.751811509.076206.jpg?v=1731157011"
                            },
                            "aspect_ratio": 1.476,
                            "height": 2728,
                            "media_type": "image",
                            "src": "\/\/veirdo.in\/cdn\/shop\/files\/ImportedPhoto.751811509.076206.jpg?v=1731157011",
                            "width": 4027
                        }, {
                            "alt": null,
                            "id": 23423003459639,
                            "position": 4,
                            "preview_image": {
                                "aspect_ratio": 0.75,
                                "height": 1600,
                                "width": 1200,
                                "src": "\/\/veirdo.in\/cdn\/shop\/files\/01_01.jpg?v=1715012782"
                            },
                            "aspect_ratio": 0.75,
                            "height": 1600,
                            "media_type": "image",
                            "src": "\/\/veirdo.in\/cdn\/shop\/files\/01_01.jpg?v=1715012782",
                            "width": 1200
                        }, {
                            "alt": null,
                            "id": 23423003492407,
                            "position": 5,
                            "preview_image": {
                                "aspect_ratio": 0.75,
                                "height": 1600,
                                "width": 1200,
                                "src": "\/\/veirdo.in\/cdn\/shop\/files\/474.jpg?v=1715012782"
                            },
                            "aspect_ratio": 0.75,
                            "height": 1600,
                            "media_type": "image",
                            "src": "\/\/veirdo.in\/cdn\/shop\/files\/474.jpg?v=1715012782",
                            "width": 1200
                        }]
                        // Used to push the item view event in ga4
                    </script>

                    <div id="flits-product-metadata-judgeme"
                        style="display:none !important;visibility:hidden !important;opacity:0 !important;">
                        { "product_rating": "5.0", "product_review_count" : "5" }

                    </div>
                    <div class="color-variant-section h-full" style="display:none!important;">


                    </div>


                    <div class="grid-area-form">

                        <div data-ga-view data-ga-view-info="PDP_Size_View"
                            class="flex flex-col gap-3 lg:gap-5 border-b-4 border-b-[#F6F6F6] lg:border-none py-[14px] px-4 lg:px-0 lg:py-6">

                            <div class="flex justify-between items-center size-options-container">
                                <span class="uppercase text-[#2D3033] text-sm lg:text-base font-[soraSemiBold]"> Select
                                    Size </span>
                                <div data-app="eastsideco_sizeGuides" data-shop="veirdo.myshopify.com"
                                    data-tags="B2G1,BLACK TSHIRT,BUY1GET1FREE,FLAT15,Freeshipping,NEW ARRIVAL,NEW COLLECTION,NEW100,Printed Half Sleeve Tshirt,UnisexCollection"
                                    data-metafields="" data-popup="link" data-trigger-text="Size Guide"
                                    class="size-guide "></div>

                            </div>
                            <fieldset class="flex flex-wrap gap-3 size-variant-parent">



                                <label data-variant-id="40581803999287"
                                    class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3 ">
                                    <input class="main-product-form-size-trigger hidden" type="radio" name="size"
                                        value="S" data-product-id="6931091226679" data-variant-id="40581803999287"
                                        data-variant-qty="134">
                                    <span
                                        class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase ">S</span>

                                </label>



                                <label data-variant-id="40581804032055"
                                    class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3 ">
                                    <input class="main-product-form-size-trigger hidden" type="radio" name="size"
                                        value="M" data-product-id="6931091226679" data-variant-id="40581804032055"
                                        data-variant-qty="81">
                                    <span
                                        class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase ">M</span>

                                </label>



                                <label data-variant-id="40581804064823"
                                    class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3 ">
                                    <input class="main-product-form-size-trigger hidden" type="radio" name="size"
                                        value="L" data-product-id="6931091226679" data-variant-id="40581804064823"
                                        data-variant-qty="86">
                                    <span
                                        class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase ">L</span>

                                </label>



                                <label data-variant-id="40581804097591"
                                    class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3 ">
                                    <input class="main-product-form-size-trigger hidden" type="radio" name="size"
                                        value="XL" data-product-id="6931091226679" data-variant-id="40581804097591"
                                        data-variant-qty="82">
                                    <span
                                        class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase ">XL</span>

                                </label>



                                <label data-variant-id="40581804130359"
                                    class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3 ">
                                    <input class="main-product-form-size-trigger hidden" type="radio" name="size"
                                        value="XXL" data-product-id="6931091226679" data-variant-id="40581804130359"
                                        data-variant-qty="98">
                                    <span
                                        class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase ">XXL</span>

                                </label>

                            </fieldset>


                        </div>

                        <div
                            class="product-add-buttons atc-container flex gap-3 fixed lg:static bg-white bottom-0 left-0 w-full z-[80] py-3 px-4 lg:p-0 lg:pb-6">
                            <div class="flits-wishlist-static-btn">
                                <button
                                    class="main-product-wishlist lg:flex gap-2 items-center justify-center px-6 py-3 rounded-lg border-[0.5px] border-[#74797D]">
                                    <span class="text-[#222527] text-sm font-[soraSemiBold]">WISHLIST</span>
                                    <img src="cdn/shop/t/64/assets/icon-wishlistaa8e.svg?v=113452544103302444001706007531"
                                        width="20" height="20" alt="wishlist icon" loading="lazy">
                                </button>
                            </div>
                            <button data-ga-view data-ga-view-info="PDP_ATC_View" data-total-size-variants="1"
                                class="add-to-bag-submit-main-product-btn flex items-center justify-center  enabled-submit-btn   px-4 py-3  rounded-lg w-full lg:w-1/2">
                                <span
                                    class="add-to-bag-submit-main-product-btn-label capitalize font-[soraSemiBold] text-sm  text-[#222527] ">

                                    ADD TO CART

                                </span>
                            </button>
                        </div>
                    </div>



                    <div name="variant-popup"
                        class="popup-bg hidden fixed items-end lg:items-center justify-center h-full w-full top-0 bottom-0 left-0 right-0 bg-black/20 z-[150]">
                        <div
                            class="popup variant-popup flex flex-col w-full lg:max-w-md bg-white rounded-t-xl lg:rounded-3xl">
                            <article data-ga-view-custom data-ga-view-info-custom="PDP_ATC_Popup_Open_View"
                                data-ga-view-payload-custom='{"styleId" : "6931091226679"} , "styleName" : "ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt", "price" : "₹599"'
                                class="add-to-cart-header p-4 lg:px-6 z-30 bg-white sticky top-0 flex items-center justify-between border-b-[1px]  rounded-t-xl border-b-[#EEEEEF] lg:rounded-t-3xl">
                                <summary
                                    class="add-to-bag-popup-heading block text-sm lg:text-lg  font-[soraSemiBold]  text-[#222527]">
                                    ADD TO CART
                                </summary>
                                <button class="close-variant-popup">
                                    <img src="cdn/shop/t/64/assets/icon-close15dc.svg?v=42907484647275626011705057419"
                                        width="24" height="24" loading="lazy" alt="close icon">
                                </button>
                            </article>
                            <div class="flex flex-col gap-3 p-4">
                                <div class="flex flex-col gap-3 lg:gap-4">

                                    <div class="flex justify-between items-center size-options-container">
                                        <span class="uppercase text-[#2D3033] text-xs lg:text-sm font-[soraSemiBold]">
                                            Select Size </span>
                                        <div data-app="eastsideco_sizeGuides" data-shop="veirdo.myshopify.com"
                                            data-tags="B2G1,BLACK TSHIRT,BUY1GET1FREE,FLAT15,Freeshipping,NEW ARRIVAL,NEW COLLECTION,NEW100,Printed Half Sleeve Tshirt,UnisexCollection"
                                            data-metafields="" data-popup="link" data-trigger-text="Size Guide"
                                            class="size-guide "></div>

                                    </div>
                                    <fieldset class="flex flex-wrap gap-3 size-variant-parent">



                                        <label data-variant-id="40581803999287"
                                            class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3 ">
                                            <input class="main-product-form-size-trigger hidden" type="radio"
                                                name="size" value="S" data-product-id="6931091226679"
                                                data-variant-id="40581803999287" data-variant-qty="134">
                                            <span
                                                class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase ">S</span>

                                        </label>



                                        <label data-variant-id="40581804032055"
                                            class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3 ">
                                            <input class="main-product-form-size-trigger hidden" type="radio"
                                                name="size" value="M" data-product-id="6931091226679"
                                                data-variant-id="40581804032055" data-variant-qty="81">
                                            <span
                                                class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase ">M</span>

                                        </label>



                                        <label data-variant-id="40581804064823"
                                            class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3 ">
                                            <input class="main-product-form-size-trigger hidden" type="radio"
                                                name="size" value="L" data-product-id="6931091226679"
                                                data-variant-id="40581804064823" data-variant-qty="86">
                                            <span
                                                class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase ">L</span>

                                        </label>



                                        <label data-variant-id="40581804097591"
                                            class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3 ">
                                            <input class="main-product-form-size-trigger hidden" type="radio"
                                                name="size" value="XL" data-product-id="6931091226679"
                                                data-variant-id="40581804097591" data-variant-qty="82">
                                            <span
                                                class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase ">XL</span>

                                        </label>



                                        <label data-variant-id="40581804130359"
                                            class="relative cursor-pointer size-select size-variant-label flex items-center justify-center p-[6.86px] lg:p-[8.29px] rounded-md border-[0.5px] border-[#8a8e92] bg-white min-w-[48px] max-h-[40px] mb-3 ">
                                            <input class="main-product-form-size-trigger hidden" type="radio"
                                                name="size" value="XXL" data-product-id="6931091226679"
                                                data-variant-id="40581804130359" data-variant-qty="98">
                                            <span
                                                class="size-label font-[ibmMedium] text-xs lg:text-base text-[#2d3033] uppercase ">XXL</span>

                                        </label>

                                    </fieldset>


                                </div>
                                <button disabled
                                    class="add-to-bag-confirm-btn flex items-center justify-center py-3 px-4 rounded-lg mt-4 borded-[#c9cbcc] border-[1px] bg-[#eeeeef]">
                                    <span
                                        class="add-to-bag-confirm-btn-label capitalize font-[soraSemiBold] text-sm text-[#AFB2B4]">
                                        ADD TO CART
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>


                    <script src="cdn/shop/t/64/assets/pincode-serviceability.min3f90.js?v=12681925237789634801734346907"
                        defer="defer"></script>
                    <pincode-serviceability id="pincode_serviceability_pdp" data-product-id="6931091226679"
                        data-ga-view-custom data-ga-view-info-custom="pincode_serviceability"
                        data-ga-view-payload-custom="{varinat_id: '40581803999287',product_id:'6931091226679'}"
                        class="flex flex-col px-4 lg:px-0 lg:border-b-0 border-b-4 border-b-[#F6F6F6] lg:border-b-[#FFFFFF] ab-edd-pdp-variant !hidden py-3.5 lg:py-6">
                        <div id="Enter_Pincode_Visible" data-ga-view-custom
                            data-ga-view-info-custom="Enter_Pincode_Visible"
                            data-ga-view-payload-custom="Enter_Pincode_Visible">
                            <div class="lg:text-base text-sm font-[soraSemibold] text-[#2D3033] lg:mb-5 mb-[12px]">CHECK
                                FOR DELIVERY DETAILS</div>
                            <div class="flex w-full shadow-[2px_2px_0px_0px_#75BAFB] rounded-lg bg-white">
                                <input autocomplete="off" data-section="pdp" id="pincode_input_pdp"
                                    class="border-[0.5px] border-[#297FCF] w-full py-3 px-4 lg:py-4 rounded-l-lg lg:text-sm text-xs font-[ibmMedium] text-[#2D3033] placeholder:text-[#8A8E92] placeholder:font-[ibmMedium] lg:placeholder:text-sm placeholder:text-xs"
                                    type="number" maxlength="6" name="pincode" placeholder="ENTER PINCODE"
                                    onkeypress="handlePincodeInputKeyPress(event)"
                                    onclick="gaClickEvent('Enter_Pincode_Click')"
                                    onfocus="gaClickEvent('Keyboard_Visible')">
                                <button id="pincode_submit_pdp" data-section="pdp" type="button"
                                    class="shrink-0 lg:px-5 lg:py-4 px-4 py-3 bg-[#EAF4FC] border-[0.5px] border-[#297FCF] rounded-r-lg font-[ibmSemibold] text-[#297FCF] lg:text-sm text-xs"
                                    name="pincode-submit" onclick="handlePincodeCheck()">
                                    CHECK
                                </button>

                                <button id="pincode_change_pdp" data-section="pdp" type="button"
                                    class="hidden shrink-0 lg:px-5 lg:py-4 px-4 py-3 bg-[#EAF4FC] border-[0.5px] border-[#297FCF] rounded-r-lg font-[ibmSemibold] text-[#297FCF] lg:text-sm text-xs"
                                    name="pincode-submit" onclick="handlePincodeChange()" data-ga-view-custom
                                    data-ga-view-info-custom="Pincode_Change_View"
                                    data-ga-view-payload-custom="Pincode_Change_View">
                                    CHANGE
                                </button>

                            </div>
                            <div
                                class="pincode_error_pdp mt-2 lg:mt-4 text-[#E83336] font-[ibmMedium] lg:text-sm text-xs hidden">
                            </div>
                            <div class="lg:gap-2 gap-1 mt-2 lg:mt-4 flex lg:text-base text-[11px] text-[#2D3033] font-[ibmMedium] items-center !hidden"
                                id="pincode-delivery-estimate">
                                <img src="cdn/shop/t/64/assets/icon-delivery-truck4464.svg?v=100624885227156393171733487614"
                                    loading="lazy" height="16" width="16" class="lg:h-5 lg:w-5">
                                <div>Deliver between <span class="text-[#017F29]"></span></div>
                            </div>
                            <div class="mt-1.5 lg:gap-2 gap-1 flex lg:text-base text-[11px] text-[#2D3033] font-[ibmMedium] items-center !hidden"
                                id="pincode-cod">
                                <img src="cdn/shop/t/64/assets/icon-cash-cod605f.svg?v=157579665308067438461733487613"
                                    loading="lazy" height="16" width="16" class="lg:h-5 lg:w-5">
                                <div>Cash on delivery available</div>
                            </div>
                        </div>
                    </pincode-serviceability>

                    <div
                        class="product-highlights-wrapper pb-2 border-b-4 border-b-[#F6F6F6] lg:border-none gap-4 lg:gap-5 py-3.5 px-4 lg:px-0 lg:py-6 hidden">
                        <h3 class="text-[#2D3033] text-sm lg:text-base font-[soraSemiBold] uppercase">Key Highlights
                        </h3>



                        <div class="mt-4 lg:mt-6 overflow-scroll gap-3 flex" data-ga-view-custom
                            data-ga-view-info-custom="PRODUCT_DETAILS_WITH_IMAGE_View"
                            data-ga-view-payload-custom='{Product_ID:"6931091226679",Highlights_Count:"3"}'>

                            <div class="min-w-[45%] w-[45%] h-full aspect-[3/4]">
                                <img srcset="//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-05.jpg?v=1726050153&width=165 165w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-05.jpg?v=1726050153&width=360 360w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-05.jpg?v=1726050153&width=533 533w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-05.jpg?v=1726050153&width=720 720w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-05.jpg?v=1726050153 825w"
                                    src="../cdn/shop/files/Veirdo_PDP_Design-05fb72.jpg?v=1726050153" alt=""
                                    sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                    loading="lazy" class="rounded-[6px]" width="825" height="1022" />
                            </div>

                            <div class="min-w-[45%] w-[45%] h-full aspect-[3/4]">
                                <img srcset="//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-04.jpg?v=1726050153&width=165 165w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-04.jpg?v=1726050153&width=360 360w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-04.jpg?v=1726050153&width=533 533w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-04.jpg?v=1726050153&width=720 720w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-04.jpg?v=1726050153 825w"
                                    src="../cdn/shop/files/Veirdo_PDP_Design-04fb72.jpg?v=1726050153" alt=""
                                    sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                    loading="lazy" class="rounded-[6px]" width="825" height="1022" />
                            </div>

                            <div class="min-w-[45%] w-[45%] h-full aspect-[3/4]">
                                <img srcset="//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-02_2c9165de-827b-4ae5-ad07-d09ca1cd03a2.jpg?v=1726050153&width=165 165w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-02_2c9165de-827b-4ae5-ad07-d09ca1cd03a2.jpg?v=1726050153&width=360 360w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-02_2c9165de-827b-4ae5-ad07-d09ca1cd03a2.jpg?v=1726050153&width=533 533w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-02_2c9165de-827b-4ae5-ad07-d09ca1cd03a2.jpg?v=1726050153&width=720 720w,//veirdo.in/cdn/shop/files/Veirdo_PDP_Design-02_2c9165de-827b-4ae5-ad07-d09ca1cd03a2.jpg?v=1726050153 825w"
                                    src="../cdn/shop/files/Veirdo_PDP_Design-02_2c9165de-827b-4ae5-ad07-d09ca1cd03a2fb72.jpg?v=1726050153"
                                    alt=""
                                    sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                    loading="lazy" class="rounded-[6px]" width="825" height="1022" />
                            </div>

                        </div>

                        <div data-ga-view-custom data-ga-view-info-custom="PDP_Keyhighlight_View"
                            data-ga-view-payload-custom='{"Gender":"Men","Product_Category":"Topwear","Product_Type":"Oversized Tshirt","Fit":"Oversized Fit","Closure":"No Closure","Length":"Regular","Fabric":"100% Cotton","Fabric_Type":"Single Jersey Knit","Pattern":"Puff Print","Pattern_Coverage":"Back","Pattern_Type":"Graphic","Color":"Black","Sleeve_Length":"Short Sleeve","Neck":"Round","Sleeve_Style":"Regular"}'
                            id="product-metafields-container"
                            class="grid grid-cols-2 gap-x-6 gap-y-4 mt-2 lg:mt-[34px] product-metafields">










                            <div class="product-metafields-values font-[ibmRegular] text-sm lg:text-base">
                                <h4 class="text-[#8A8E92] capitalize pb-0.5 lg:pb-1.5">Gender</h4>
                                <p class="text-[#2D3033] pb-2">Men</p>
                            </div>






                            <div class="product-metafields-values font-[ibmRegular] text-sm lg:text-base">
                                <h4 class="text-[#8A8E92] capitalize pb-0.5 lg:pb-1.5">Product Category</h4>
                                <p class="text-[#2D3033] pb-2">Topwear</p>
                            </div>






                            <div class="product-metafields-values font-[ibmRegular] text-sm lg:text-base">
                                <h4 class="text-[#8A8E92] capitalize pb-0.5 lg:pb-1.5">Product Type</h4>
                                <p class="text-[#2D3033] pb-2">Oversized Tshirt</p>
                            </div>






                            <div class="product-metafields-values font-[ibmRegular] text-sm lg:text-base">
                                <h4 class="text-[#8A8E92] capitalize pb-0.5 lg:pb-1.5">Fit</h4>
                                <p class="text-[#2D3033] pb-2">Oversized Fit</p>
                            </div>






                            <div class="product-metafields-values font-[ibmRegular] text-sm lg:text-base">
                                <h4 class="text-[#8A8E92] capitalize pb-0.5 lg:pb-1.5">Closure</h4>
                                <p class="text-[#2D3033] pb-2">No Closure</p>
                            </div>






                            <div class="product-metafields-values font-[ibmRegular] text-sm lg:text-base">
                                <h4 class="text-[#8A8E92] capitalize pb-0.5 lg:pb-1.5">Length</h4>
                                <p class="text-[#2D3033] pb-2">Regular</p>
                            </div>
                        </div>
                    </div>

                    <section class="flex flex-col gap-4 lg:gap-5 py-[14px] px-4 lg:px-0 lg:py-6">
                        <h3 class="text-[#2D3033] text-sm lg:text-base font-[soraSemiBold] uppercase">Product
                            Information</h3>
                        <section class="flex flex-col divide-y-[0.5px] divide-[#E8E9EA]">
                            <details data-ga-view data-ga-view-info="PDP_Description_View" class="filter-group"
                                id="product_description">
                                <summary class="flex justify-between items-center gap-4 cursor-pointer pb-4 lg:pb-5">
                                    <div class="flex gap-4">
                                        <img src="cdn/shop/t/64/assets/icon-product-desc7627.svg?v=96914506101953558461706002275"
                                            loading="lazy" width="28" height="28" alt="product desciption icon">
                                        <article class="flex flex-col gap-1">
                                            <span class="font-[ibmMedium] text-sm lg:text-base text-[#3A3E41]">Product
                                                Description</span>
                                            <span
                                                class="font-[ibmRegular] text-sm lg:text-base text-[#74797D] ">Manufacture,
                                                Care and Fit</span>
                                        </article>
                                    </div>
                                    <span class="arrow-icon">
                                        <img class="icon-plus"
                                            src="cdn/shop/t/64/assets/icon-plus2a60.svg?v=147290118772482106471706002275"
                                            loading="lazy" width="20" height="20" alt="icon arrow down">
                                        <img class="icon-minus "
                                            src="cdn/shop/t/64/assets/icon-minus7953.svg?v=149135115271851288521706002274"
                                            loading="lazy" width="20" height="20" alt="icon arrow down">
                                    </span>
                                </summary>

                                <div id="description_content" class="pb-4  product-description">
                                    <style data-mce-fragment="1" type="text/css">
                                        <!--
                                        td {
                                            border: 1px solid #ccc;
                                        }

                                        br {
                                            mso-data-placement: same-cell;
                                        }
                                        -->
                                    </style>
                                    <div>
                                        <table height="254" style="width: 550px;">
                                            <tbody>
                                                <tr style="height: 21px;" data-mce-style="height: 21px;">
                                                    <td style="width: 150.8px; height: 21px;"
                                                        data-mce-style="width: 150.8px; height: 21px;"><strong> Made
                                                            of</strong></td>
                                                    <td style="width: 400.4px; height: 21px;"
                                                        data-mce-style="width: 400.4px; height: 21px;">100% Cotton</td>
                                                </tr>
                                                <tr style="height: 21px;" data-mce-style="height: 21px;">
                                                    <td style="width: 150.8px; height: 21px;"
                                                        data-mce-style="width: 150.8px; height: 21px;"><strong> Neck
                                                            Type</strong></td>
                                                    <td style="width: 400.4px; height: 21px;"
                                                        data-mce-style="width: 400.4px; height: 21px;">Round Neck</td>
                                                </tr>
                                                <tr style="height: 21px;" data-mce-style="height: 21px;">
                                                    <td style="width: 150.8px; height: 21px;"
                                                        data-mce-style="width: 150.8px; height: 21px;"><strong> Fit
                                                            Type</strong></td>
                                                    <td style="width: 400.4px; height: 21px;"
                                                        data-mce-style="width: 400.4px; height: 21px;">Oversized Fit
                                                    </td>
                                                </tr>
                                                <tr style="height: 21px;" data-mce-style="height: 21px;">
                                                    <td style="width: 150.8px; height: 21px;"
                                                        data-mce-style="width: 150.8px; height: 21px;"><strong>
                                                            Color</strong></td>
                                                    <td style="width: 400.4px; height: 21px;"
                                                        data-mce-style="width: 400.4px; height: 21px;">Black</td>
                                                </tr>
                                                <tr style="height: 21px;" data-mce-style="height: 21px;">
                                                    <td style="width: 150.8px; height: 21px;"
                                                        data-mce-style="width: 150.8px; height: 21px;"><strong>
                                                            Pattern</strong></td>
                                                    <td style="width: 400.4px; height: 21px;"
                                                        data-mce-style="width: 400.4px; height: 21px;">Puff Print</td>
                                                </tr>
                                                <tr style="height: 21px;" data-mce-style="height: 21px;">
                                                    <td style="width: 150.8px; height: 21px;"
                                                        data-mce-style="width: 150.8px; height: 21px;"><strong> Sleeve
                                                            Type</strong></td>
                                                    <td style="width: 400.4px; height: 21px;"
                                                        data-mce-style="width: 400.4px; height: 21px;">Half Sleeve</td>
                                                </tr>
                                                <tr style="height: 21px;" data-mce-style="height: 21px;">
                                                    <td style="width: 150.8px; height: 21px;"
                                                        data-mce-style="width: 150.8px; height: 21px;"><strong> Care
                                                            Instruction</strong></td>
                                                    <td style="width: 400.4px; height: 21px;"
                                                        data-mce-style="width: 400.4px; height: 21px;">Machine washable
                                                    </td>
                                                </tr>
                                                <tr style="height: 21px;" data-mce-style="height: 21px;">
                                                    <td style="width: 150.8px; height: 21px;"
                                                        data-mce-style="width: 150.8px; height: 21px;"><strong>
                                                            Available Sizes</strong></td>
                                                    <td style="width: 400.4px; height: 21px;"
                                                        data-mce-style="width: 400.4px; height: 21px;">S,M,L,XL,XXL</td>
                                                </tr>
                                                <tr style="height: 21px;" data-mce-style="height: 21px;">
                                                    <td style="width: 150.8px; height: 21px;"
                                                        data-mce-style="width: 150.8px; height: 21px;"><strong>
                                                            SKU</strong></td>
                                                    <td width="166"
                                                        data-sheets-value='{"1":2,"2":"OS_V_ITSALWYLNLY_BK"}'
                                                        style="width: 400px;">OS_V_ITSALWYLNLY_BK</td>
                                                </tr>
                                                <tr style="height: 21px;" data-mce-style="height: 21px;">
                                                    <td style="width: 150.8px; height: 21px;"
                                                        data-mce-style="width: 150.8px; height: 21px;"><strong> Country
                                                            of origin</strong></td>
                                                    <td style="width: 400.4px; height: 21px;"
                                                        data-mce-style="width: 400.4px; height: 21px;">India</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="WRWHOISInstalled" style="display: none;" data-mce-style="display: none;">
                                        <br>
                                    </div>
                                    <div id="WRWHOISInstalled" style="display: none;" data-mce-style="display: none;">
                                        <br>
                                    </div>
                                    <div id="WRWHOISInstalled" style="display: none;" data-mce-style="display: none;">
                                        <br>
                                    </div>
                                    <div id="WRWHOISInstalled" style="display: none;" data-mce-style="display: none;">
                                        <br>
                                    </div><br>
                                    <div>
                                        <p>
                                            <b class="descriptionHeading">Manufactured &amp; Packed By:</b>
                                            <br><span class="descriptionContent">AWESOMEFAB SHOPPING PRIVATE LIMITED<br>
                                                Block No. 808, Cadila Estate, Opp. Tulsi Hotel, Aslali Dist.<br>
                                                Ahmedabad- 382427</span>
                                        </p>
                                        <p>
                                            <b class="descriptionHeading ">Shipped &amp; Marketed By:</b>
                                            <br><span class="descriptionContent">AWESOMEFAB SHOPPING PRIVATE LIMITED<br>
                                                A-101 ANZ INFINITY, OPP BALHANUMAN NR CHURCH, Nr. COZY HOTEL STREET,
                                                Ahmedabad, Gujarat-382405</span>
                                        </p>
                                    </div>
                                </div>
                            </details>
                            <details data-ga-view data-ga-view-info="PDP_Shipping_View" class="filter-group"
                                id="free_shipping">
                                <summary class="
          flex justify-between items-center  gap-4
          cursor-pointer py-4 lg:py-5
        ">
                                    <div class="flex gap-4">
                                        <img src="cdn/shop/t/64/assets/icon-free-shipping1c02.svg?v=183019897359342380311706002274"
                                            loading="lazy" width="28" height="28" alt="free shipping icon">
                                        <article class="flex flex-col gap-1">
                                            <span class="font-[ibmMedium] text-sm lg:text-base text-[#3A3E41]">Free
                                                Shipping</span>
                                            <span class="font-[ibmRegular] text-sm lg:text-base text-[#74797D] ">We
                                                Offer free shipping across India</span>
                                        </article>
                                    </div>
                                    <span class="arrow-icon">
                                        <img class="icon-plus"
                                            src="cdn/shop/t/64/assets/icon-plus2a60.svg?v=147290118772482106471706002275"
                                            loading="lazy" width="20" height="20" alt="icon arrow down">
                                        <img class="icon-minus "
                                            src="cdn/shop/t/64/assets/icon-minus7953.svg?v=149135115271851288521706002274"
                                            loading="lazy" width="20" height="20" alt="icon arrow down">
                                    </span>
                                </summary>

                                <div id="free_shipping_content" class="ml-[13%] pb-5 accordion-content">
                                    <div>
                                        <p>
                                            <span class="descriptionHeading ">Free Shipping</span>
                                            <br><span class="descriptionContent">We offer free shipping across
                                                India.</span>
                                        </p>
                                        <p>
                                            <span class="descriptionHeading ">1-2 Days Dispatch</span>
                                            <br><span class="descriptionContent">We dispatch orders within 1-2
                                                days.</span>
                                        </p>
                                        <p>
                                            <span class="descriptionHeading ">2-5 Days Delivery</span>
                                            <br><span class="descriptionContent">We usually take 2-5 working days
                                                depending on your location.</span>
                                            <br><span class="descriptionContent">Metros 2-3 days</span>
                                            <br><span class="descriptionContent">Rest of India 3-5 days</span>
                                        </p>
                                    </div>
                                </div>
                            </details>
                            <details data-ga-view data-ga-view-info="PDP_Returns_Section_View" class="filter-group"
                                id="return_exchange">
                                <summary class="
          flex justify-between items-center  gap-4
          cursor-pointer py-4 lg:py-5
        ">
                                    <div class="flex gap-4">
                                        <img src="cdn/shop/t/64/assets/icon-return-exchange8b39.svg?v=65075306793439920801706099195"
                                            loading="lazy" width="28" height="28" alt="free shipping icon">
                                        <article class="flex flex-col gap-1">
                                            <span class="font-[ibmMedium] text-sm lg:text-base text-[#3A3E41]">7 Days
                                                Returns & Exchange</span>
                                            <span class="font-[ibmRegular] text-sm lg:text-base text-[#74797D] ">Know
                                                about return & exchange policy</span>
                                        </article>
                                    </div>
                                    <span class="arrow-icon">
                                        <img class="icon-plus"
                                            src="cdn/shop/t/64/assets/icon-plus2a60.svg?v=147290118772482106471706002275"
                                            loading="lazy" width="20" height="20" alt="icon arrow down">
                                        <img class="icon-minus "
                                            src="cdn/shop/t/64/assets/icon-minus7953.svg?v=149135115271851288521706002274"
                                            loading="lazy" width="20" height="20" alt="icon arrow down">
                                    </span>
                                </summary>

                                <div id="return_content" class="ml-[12%] pb-5 accordion-content">
                                    <div>
                                        <span class="descriptionContent">Items purchased from Veirdo
                                            are eligible for return/exchange, if returned within 7 days of delivery.
                                        </span>
                                        <p></p>
                                        <p>
                                            <span class="descriptionHeading">Free Exchanges</span>
                                            <br><span class="descriptionContent">We
                                                accept <strong>exchanges free of cost.</strong> This means you wont be
                                                charged extra to exchange
                                                the product(s). It's on us! We want your experience to be
                                                hassle-free.</span>
                                        </p>
                                        <p>
                                            <span class="descriptionHeading">Easy Returns</span>
                                        </p>
                                        <p>
                                            <span class="descriptionContent">For Prepaid Orders - The full amount is
                                                refunded into your initial payment mode (bank account, credit card,
                                                etc.) </span>
                                        </p>
                                        <p>
                                            <span class="descriptionContent">For Cash on Delivery Orders - The order
                                                amount will be refunded to your bank account. You can provide your
                                                bank/upi detail. COD charges are non-refundable. </span>
                                        </p>
                                        <p>
                                            <span class="descriptionHeading">Exchange For Something Else?</span><br>
                                            <span class="descriptionContent">In case of an
                                                exchange, you are also allowed to choose a different product. If the
                                                value of the replacement product
                                                exceeds that of the previously purchased product, you can pay just the
                                                difference else if it's less, the
                                                same can be refunded to you as gift card.</span>
                                        </p>
                                    </div>
                                </div>
                            </details>
                            <details data-ga-view data-ga-view-info="PDP_Reviews_Section_View"
                                class="filter-group lg:hidden" id="judgeme_mweb">
                                <summary class="
          flex justify-between items-center  gap-4
          cursor-pointer py-4 lg:py-5
        ">
                                    <div class="flex gap-4">
                                        <img src="cdn/shop/t/64/assets/icon-rating-star3daa.svg?v=16687649160623608401718182818"
                                            loading="lazy" width="28" height="28" alt="free shipping icon">
                                        <article class="flex flex-col gap-1">
                                            <span class="font-[ibmMedium] text-sm lg:text-base text-[#3A3E41]">
                                                Reviews 5.0/5
                                            </span>
                                            <span class="font-[ibmRegular] text-sm lg:text-base text-[#74797D] ">Based
                                                on 5 customer reviews</span>
                                        </article>
                                    </div>
                                    <span class="arrow-icon">
                                        <img class="icon-plus"
                                            src="cdn/shop/t/64/assets/icon-plus2a60.svg?v=147290118772482106471706002275"
                                            loading="lazy" width="20" height="20" alt="icon arrow down">
                                        <img class="icon-minus "
                                            src="cdn/shop/t/64/assets/icon-minus7953.svg?v=149135115271851288521706002274"
                                            loading="lazy" width="20" height="20" alt="icon arrow down">
                                    </span>
                                </summary>
                                <div id="judgeme_web" data-ga-view data-ga-view-info="PDP_Ratings_View">




                                    <div style='clear:both'></div>
                                    <div id='judgeme_product_reviews' class='jdgm-widget jdgm-review-widget'
                                        data-product-title='ALWAYS LONELY AT THE TOP Black Oversized Back Puff Printed Tshirt'
                                        data-id='6931091226679' data-from-snippet='false' data-auto-install='false'>
                                        <div class='jdgm-rev-widg' data-updated-at='2024-12-17T11:44:03Z'
                                            data-average-rating='5.00' data-number-of-reviews='5'
                                            data-number-of-questions='0'>
                                            <style class='jdgm-temp-hiding-style'>
                                                .jdgm-rev-widg {
                                                    display: none
                                                }
                                            </style>


                                        </div>
                                    </div>
                                </div>
                            </details>
                        </section>
                    </section>





                </div>
            </main>
            <div id="view-offer-dropdown-bg"
                class="view-offer-close z-[200] fixed left-0 top-0 right-0 bottom-0 h-full w-full hidden"></div>
            <div id="view-offer-dropdown"
                class="view-offer-dropdown fixed left-0 right-0 top-full md:left-auto md:right-full md:top-full md:bottom-auto z-[60] md:w-max flex flex-col gap-4 bg-white rounded-b-[0px] rounded-t-lg lg:rounded-lg lg:w-[40%]">
                <div class="view-close-button">
                    <img src="cdn/shop/t/64/assets/icon-close15dc.svg?v=42907484647275626011705057419" alt="close-offer"
                        width="34" height="34" loading="lazy">
                </div>

                <div class="relative w-full">
                    <img class="w-full rounded-lg"
                        src="cdn/shop/t/64/assets/offer-backgroundf3b1.svg?v=34751201588988719661729072616"
                        alt="close-offer" width="360" height="102" loading="lazy">
                    <img class="view-offer-pop-up-discount-icon"
                        src="cdn/shop/t/64/assets/icon-offer6678.gif?v=154534563168981496241729072614" alt="offer icon"
                        width="24" height="24" loading="lazy">
                </div>


                <div class="flex-col gap-4 p-4 hidden valid-coupon"
                    id="YnV5XzJfZ2V0XzFfZnJlZV98X3JlcHVibGljX2RheV9zYWxl">
                    <div class="flex flex-col gap-2">




                        <p class="text-base text-[#008450] font-[ibmSemiBold] flex items-center lg:text-xl gap-2">Get it
                            for as low as FREE<span class="text-sm lg:text-lg line-through text-[#4A4F54]">₹599</span>
                        </p>

                        <div class="flex flex-col gap-1">

                            <p class="text-sm text-[#4A4F54] font-[ibmSemiBold] lg:text-base">BUY 2 GET 1 FREE |
                                REPUBLIC DAY SALE</p>


                            <p class="text-xs text-[#74797D] font-[ibmMedium] lg:text-sm">
                                Add any 3 products in your cart to avail the offer.
                            </p>

                        </div>

                    </div>

                    <p class="text-[#2063A1] text-base font-[ibmBold] lg:text-lg">
                        *Offer will be Auto applied at the checkout
                    </p>

=======
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
>>>>>>> 9ec2292896b1efe8360099ca58e2e90bd37e056a
                    <div class="flex flex-col gap-1">
                      <p class="text-[13px] text-[#131814] font-[ibmSemiBold] offer-text lg:text-sm"> Get it for as low as <span class="text-[#008450] font-[ibmBold] text-sm lg:text-base">FREE</span>
                        <span class="text-[11px] lg:text-sm line-through text-[#4A4F54]">₹599</span>
                      </p>
                      <p class="text-[10px] lg:text-xs font-[ibmMedium] text-[#4A4F54] offer-text">
                        <span class="text-[#131814] text-[11px] lg:text-xs font-[ibmSemiBold]">BUY 2 GET 1 FREE | REPUBLIC DAY SALE </span>
                        Add any 3 products in your cart to avail the offer.
                      </p>
                    </div>
<<<<<<< HEAD
                </div>

            </div>



        </div>
        <div id="shopify-section-template--14876768305207__54d4f814-0223-465c-8c47-4253aca8b154"
            class="shopify-section">



            <style>
                .brand-story-section {
                    margin-top: 0px;
                    margin-bottom: 0px;
                    margin-right: 0px;
                    margin-left: 0px;
                }

                @media screen and (min-width:1024px) {
                    .brand-story-section {
                        margin-top: 0px;
                        margin-bottom: 0px;
                        margin-right: 0px;
                        margin-left: 0px;
                    }
                }
            </style>

        </div>
        <?php include './new-arrival.php'; ?>

        <?php include './new-arrival.php'; ?>
        <!----footer-->
        <?php include './inc/footer.php'; ?>
=======
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
>>>>>>> 9ec2292896b1efe8360099ca58e2e90bd37e056a

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