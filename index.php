<!doctype html>
<html lang="en">

<head>
  <link href="cdn/shop/t/64/assets/fontae4b.css?v=50157125298610985211704803541" rel="stylesheet" type="text/css"
    media="all" />
  <link href="cdn/shop/t/64/assets/application.min5cfe.css?v=163312093385010144691737007238" rel="stylesheet"
    type="text/css" media="all" />

  <!-- <script src="cdn.jsdelivr.net/npm/%40growthbook/growthbook/dist/bundles/index.js"></script> -->
  <script src="cdn/shop/t/64/assets/ab-test90e2.js?v=79723028281500467951720528958"></script>
  <script src="cdn/shop/t/64/assets/application.min617f.js?v=86893644808988964271736939393"></script>
  <script src="cdn/shop/t/64/assets/jquery-min-v3.6.1.min03ee.js?v=77389668493903155241704692039"></script>
  <script src="cdn/shop/t/64/assets/cart-grouping.mincfd1.js?v=3489674350605185701732606037" defer="defer"></script>
  <script src="cdn/shop/t/64/assets/base.min70af.js?v=132773053093560774521732606036" defer></script>
  <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
  <link href="cdn/shop/t/64/assets/mini-cart-drawer.min1f71.css?v=86613100141728982041704692040" rel="stylesheet"
    type="text/css" media="all" />
  <script src="cdn/shop/t/64/assets/product-common-function.mincc34.js?v=129864563763486658341732606038"
    defer="defer"></script>
  <script src="cdn/shop/t/64/assets/product-common-card.min0050.js?v=132855597793528529881717578406"
    defer="defer"></script>
  <script src="cdn/shop/t/64/assets/product-add-to-bag.mincedd.js?v=16858383435048487951727180947"
    defer="defer"></script>
  <link href="cdn/shop/t/64/assets/product-add-to-bag.mincb77.css?v=7892603211099314451726665388" rel="stylesheet"
    type="text/css" media="all" />
  <link href="cdn/shop/t/64/assets/product-card.mine3b7.css?v=94156981987166474241726569589" rel="stylesheet"
    type="text/css" media="all" />
  <link rel="stylesheet" href="main.css">
  <script src="extra.js"></script>
</head>

<body data-theme="tmrw_veirdo_theme">
  <div class="blur-bg w-full h-screen absolute bg-white/30 hidden"></div>

  <div id="shopify-section-header" class="shopify-section section-header">
    <!-- Top announcement-bar start -->
    <div id="announcement-bar"
      class="block font-[onestSemibold] py-2 px-3 text-center h-fit text-white text-xs lg:text-base lg:leading-none bg-[#2D8CE3]   relative uppercase text-center px-auto whitespace-nowrap">
      <div class="flex w-full items-center justify-center overflow-hidden">
        <div class="carousel-list-slider flex w-full lg:w-[40rem]">
          <div> HOODIES & SWEATSHIRTS (PICK ANY 2 @1699) </div>
          <div> BUY 3 @1099 PRINTED OVERSIZED T-SHIRTS </div>
          <div> PREPAID ORDERS WILL BE SHIPPED ON PRIORITY </div>
          <div> GET ADDITIONAL 10% OFF ON PREPAID RDERS </div>
        </div>
      </div>
    </div>
    <!-- Top announcement-bar end --> 

    <!-- Menu icon -->
    <svg xmlns="http://www.w3.org/2000/svg" class="hidden">
      <symbol id="icon-search" viewbox="0 0 18 19" fill="none">
        <path fill-rule="evenodd" clip-rule="evenodd"
          d="M11.03 11.68A5.784 5.784 0 112.85 3.5a5.784 5.784 0 018.18 8.18zm.26 1.12a6.78 6.78 0 11.72-.7l5.4 5.4a.5.5 0 11-.71.7l-5.41-5.4z"
          fill="currentColor" />
      </symbol>
    </svg>
    <!-- <img src="svg/menu.svg" alt=""> -->

    <!-- Header start -->
    <?php include("inc/navbar.php") ?>
    <!-- header end -->

  </div>


  <!-- shopify-section-cart-drawer start -->
<?php include("cart-drawer.php")?>
  <!-- shopify-section-cart-drawer end -->

  <div class="theme-content fix-content-width" id="">
    <div id="shopify-section-template--14826244636727__home_page_collection_ayiV4G" class="shopify-section">
      <div data-ga-view-custom data-ga-view-info-custom="index"
        data-ga-view-payload-custom='{section_name:"1X6 Collection Grid",rank:""}'
        class="flex  pr-5 lg:px-28 home-page-collection-section-template--14826244636727__home_page_collection_ayiV4G gap-3 overflow-x-auto slider-hide lg:hidden">
        <a href="collections/hoodies-sweatshirts.html"
          class="flex flex-col  lg:text-center grow  items-center  min-w-[80px] image-container webview-event"
          onclick="gaClickEvent('Top_Slider_Click',{section_name:'Home',rank:'1',element_name:'WINTER WEAR'})">
          <div class=" w-full max-w-[80px] max-h-[80px] lg:max-w-full lg:max-h-full  box-style-section-text_GAHrWr ">
            <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/1_4.jpg?v=1719914101&width=165 165w,//veirdo.in/cdn/shop/files/1_4.jpg?v=1719914101 357w" src="cdn/shop/files/1_4e2c2.jpg?v=1719914101"
              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
              alt="" class="w-full h-full object-cover rounded-lg  " width="357" height="357" loading="lazy">
          </div>
          <div class="py-2 items-center justify-center tracking-[0.09px] text-copy w-full max-w-[12ch] leading-[0.75rem] overflow-hidden whitespace-nowrap text-ellipsis uppercase"
            style="font-family: soraSemiBold; text-align: center; font-size:9px">
            WINTER WEAR
          </div>
        </a>
        <a href="collections/mens-t-shirts.html"
          class="flex flex-col  lg:text-center grow  items-center  min-w-[80px] image-container webview-event"
          onclick="gaClickEvent('Top_Slider_Click',{section_name:'Home',rank:'2',element_name:'TSHIRTS'})">
          <div class=" w-full max-w-[80px] max-h-[80px] lg:max-w-full lg:max-h-full  box-style-section-text_rnjDdP ">
            <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/7_1.jpg?v=1719913293&width=165 165w,//veirdo.in/cdn/shop/files/7_1.jpg?v=1719913293 357w" src="cdn/shop/files/7_19c65.jpg?v=1719913293"
              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
              alt="" class="w-full h-full object-cover rounded-lg  " width="357" height="357" loading="lazy">
          </div>
          <div
            class="py-2 items-center justify-center tracking-[0.09px] text-copy w-full max-w-[12ch] leading-[0.75rem] overflow-hidden whitespace-nowrap text-ellipsis uppercase"
            style="font-family: soraSemiBold; text-align: center; font-size:9px">
            TSHIRTS
          </div>
        </a>

        <a href="collections/mens-joggers.html"
          class="flex flex-col  lg:text-center grow  items-center  min-w-[80px] image-container webview-event"
          onclick="gaClickEvent('Top_Slider_Click',{section_name:'Home',rank:'3',element_name:'JOGGERS'})">
          <div class=" w-full max-w-[80px] max-h-[80px] lg:max-w-full lg:max-h-full  box-style-section-text_6nfmHA ">
            <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/9_23d844ed-e643-4dd4-a310-0932eeefa06c.jpg?v=1719913915&width=165 165w,//veirdo.in/cdn/shop/files/9_23d844ed-e643-4dd4-a310-0932eeefa06c.jpg?v=1719913915 357w" src="cdn/shop/files/9_23d844ed-e643-4dd4-a310-0932eeefa06c7fd2.jpg?v=1719913915"
              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
              alt="" class="w-full h-full object-cover rounded-lg  " width="357" height="357" loading="lazy">

          </div>
          <div
            class="py-2 items-center justify-center tracking-[0.09px] text-copy w-full max-w-[12ch] leading-[0.75rem] overflow-hidden whitespace-nowrap text-ellipsis uppercase"
            style="font-family: soraSemiBold; text-align: center; font-size:9px">
            JOGGERS
          </div>
        </a>

      </div>
    </div>

    <!-- Slider start -->

    <?php include("slider.php") ?>

    <!-- Slider end -->

    <!-- OUR BESTSELLERS start -->
    <?php include("best-seller.php"); ?>
    <!-- OUR BESTSELLERS end -->



    <!-- Video Section Start -->
    <!-- <div id="shopify-section-template--14826244636727__173381247008a2d844" class="shopify-section">
      <div id="shopify-block-AUzRnNlhqMllqTC9tS__whatmore_shoppable_videos_app_block_kAfeGC"
        class="shopify-block shopify-app-block">
        <div class="whatmore-base" id="whatmore-base" style="position: relative; overflow: hidden; min-height:380px; border: 1px solid red;">
          <div id="whatmoreShopId" data-wh="19827331"> </div>
          <div id="whatmoreHeading" data-wh="WATCH AND BUY"> </div>
          <div id="whatmoreTitleFontSize" data-wh="18"> </div>
          <div id="whatmoreTitleFontSizePortrait" data-wh="18"> </div>
          <div id="whatmoreLandscapePadding" data-wh="40"> </div>
          <div id="whatmoreTopBottomPadding" data-wh="20"> </div>
          <div id="whatmoreVideoTileSize" data-wh="80"> </div>
          <div id="whatmoreVideoTileSizePortrait" data-wh="80"> </div>
          <div class="whatmore-template-type" data-wh="template-f"> </div>
          <div id="whatmoreIsInDesignMode" data-wh='false'> </div>

          <div id="whatmoreExtensionType" data-wh="index"> </div>
          <div class="whatmore-widget" data-wh="carousel"></div>
          <div class="whatmore-render-root"></div>

        </div>
      </div>
    </div> -->
    <?php include("video2-section.php")?>

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
    <?php include("new-arrival.php") ?>
    <!-- New Arrivals End -->

    <!-- About us Start -->
    <?php include("about-us.php") ?>
    <!-- About us end -->

    <!-- Geeks Assemble start -->

    <!-- Geeks Assemble end -->

    <div id="shopify-section-template--14826244636727__trust_marker_section_GWqQT8" class="shopify-section">
      <section data-ga-view-custom data-ga-view-info-custom="index"
        data-ga-view-payload-custom='{section_name:"Trust Marker Section",rank:""}'
        class="flex items-center trust-markers-template--14826244636727__trust_marker_section_GWqQT8 flex-col">
        <div class="flex flex-col w-full lg:flex-row lg:justify-between">
          <div id="Banner1" class="w-full pr-4 lg:w-6/12 lg:pr-0 lg:mt-[0%]">
            <figure class="w-full  ">
              <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/1_5.png?v=1707824295&width=165 165w,//veirdo.in/cdn/shop/files/1_5.png?v=1707824295&width=360 360w,//veirdo.in/cdn/shop/files/1_5.png?v=1707824295&width=533 533w,//veirdo.in/cdn/shop/files/1_5.png?v=1707824295&width=720 720w,//veirdo.in/cdn/shop/files/1_5.png?v=1707824295&width=940 940w,//veirdo.in/cdn/shop/files/1_5.png?v=1707824295&width=1066 1066w,//veirdo.in/cdn/shop/files/1_5.png?v=1707824295 4398w" src="cdn/shop/files/1_5e94c.png?v=1707824295"
                sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="" class="w-full h-full object-cover " width="4398" height="1014" loading="lazy">
              <style>
                .popup-feature-image-height {
                  height: auto;
                }
              </style>

            </figure>
          </div>
          <div id="Banner2" class="w-full pl-4 mt-[-3%] lg:w-6/12 lg:pl-0 lg:mt-[0%]">
            <figure class="w-full  ">
              <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/2_5_8da632cf-abda-496a-9192-019951361e02.png?v=1707824295&width=165 165w,//veirdo.in/cdn/shop/files/2_5_8da632cf-abda-496a-9192-019951361e02.png?v=1707824295&width=360 360w,//veirdo.in/cdn/shop/files/2_5_8da632cf-abda-496a-9192-019951361e02.png?v=1707824295&width=533 533w,//veirdo.in/cdn/shop/files/2_5_8da632cf-abda-496a-9192-019951361e02.png?v=1707824295&width=720 720w,//veirdo.in/cdn/shop/files/2_5_8da632cf-abda-496a-9192-019951361e02.png?v=1707824295&width=940 940w,//veirdo.in/cdn/shop/files/2_5_8da632cf-abda-496a-9192-019951361e02.png?v=1707824295&width=1066 1066w,//veirdo.in/cdn/shop/files/2_5_8da632cf-abda-496a-9192-019951361e02.png?v=1707824295 4398w" src="cdn/shop/files/2_5_8da632cf-abda-496a-9192-019951361e02e94c.png?v=1707824295"
                sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                alt="" class="w-full h-full object-cover " width="4398" height="1014" loading="lazy">
              <style>
                .popup-feature-image-height {
                  height: auto;
                }
              </style>

            </figure>
          </div>

        </div>
      </section>
      <style data-shopify>
        .trust-markers-template--14826244636727__trust_marker_section_GWqQT8 {
          margin-top: 16px;
          margin-bottom: 0px;
          margin-right: 0px;
          margin-left: 0px;
        }

        @media screen and (min-width:1024px) {
          .trust-markers-template--14826244636727__trust_marker_section_GWqQT8 {
            margin-top: 56px;
            margin-bottom: 0px;
            margin-right: 0px;
            margin-left: 0px;
          }
        }
      </style>
    </div>
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


  <!-- TODO - remove the dependency of jquery for critical rendering -->
  <script src="cdn/shop/t/64/assets/hamburger-menu.min06f4.js?v=84340172155576691991733916671" defer></script>
  <link rel="stylesheet" href="cdn/shop/t/64/assets/predictive-search.min6c24.css?v=93769007446315028791707132699"
    media="print" onload="this.media='all'">
  <script>
    window.shopUrl = 'index.html';
    window.routes = {
      cart_add_url: '/cart/add',
      cart_change_url: '/cart/change',
      cart_update_url: '/cart/update',
      cart_url: '/cart',
      predictive_search_url: '/search/suggest',
    };
  </script>
  <script src="cdn/shop/t/64/assets/predictive-search.mind3e4.js?v=107557671509637896911707900564"
    defer="defer"></script>

  <script>
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
    /* End - Image Lazy loading Logic */
    function getTemplate() {
      const temp = "index";
      return temp;
    }
    const getDeviceType = (width) => {
      return width >= 1024 ? "desktop" : width >= 768 ? "tablet" : "mobile";
    };
    const customer = {
      name: '',
      id: ``,
      email: ``,
      phone: ``
    }
    window.customer = customer;
    window.brand = {
      device: {
        deviceType: getDeviceType(document.body.clientWidth)
      }
    }
    //loading lottie cdn only when there is lottie on page
    document.addEventListener('DOMContentLoaded', function() {
      setTimeout(function() {
        var script = document.createElement('script');
        script.defer = true;
        script.src = 'cdn.shopify.com/s/files/1/0485/2534/4920/files/lottie-player.minc559.js?v=1712587202';
        document.head.appendChild(script);
      }, 2000); // Delay of 2 seconds
      let currentScrollRange = -1;
      let lastPageUrl = '';
      window.addEventListener('scroll', () => {
        const scrollDepth = Math.round((window.scrollY) / (document.querySelector('html.js').offsetHeight - window.innerHeight) * 100);
        const scrollRange = Math.round((scrollDepth) / 25);
        if (lastPageUrl != window.location.href) {
          lastPageUrl = window.location.href;
          currentScrollRange = -1;
        }
        if (scrollRange != currentScrollRange) {
          currentScrollRange = scrollRange;
          gaScrollEvent(scrollRange * 25, window.location.href);
        }
      })
    });
  </script>
  <!-- Gokwik theme code start -->



</body>

</html>