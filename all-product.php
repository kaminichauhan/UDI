<!doctype html>
<html lang="en" class="no-js">

<head>
  <?php include("inc/head-link.php") ?>
</head>

<body data-theme="tmrw_veirdo_theme">
  <!-- This div bluring screen -->
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



  <!-- banner start -->
  <div class="banner-container px-2 pt-4 pb-4 w-full  flex lg:hidden ">
    <figure class="w-full h-full  image-container aspect-[5/3] ">
      <img
        src="./cdn/shop/files/offer_banner_new_model_1_296ba.jpg"
        height="100" width="100" alt="collection banner" class="w-full h-full skeleton rounded-xl" loading="eager">
    </figure>
  </div>


  <div class="banner-container lg:mx-9 xl:mx-10 2xl:mx-[72px] lg:mt-8  hidden lg:flex ">
    <figure class="w-full h-full">
      <img src="./cdn/shop/files/offer_banner_new_model_1_296ba.jpg"
        height="100" width="100" alt="collection banner" class="w-full h-full skeleton lg:rounded-3xl">
    </figure>
  </div>
  <!-- banner end -->

  <section id="shopify-section-template--14826243653687__product-grid" class="shopify-section">


    <!-- Breadcum start -->
    <div class="hidden lg:block lg:mx-9 xl:mx-10  2xl:mx-[72px] mt-[20px]">
      <nav class="breadcrumb capitalize flex p-4 lg:p-0 gap-1 flex-wrap" role="navigation" aria-label="breadcrumbs">
        <a href="../index.php" title="Home">Home</a>
        <span aria-hidden="true">></span>
        <a href="oversized-t-shirts.html" title="Oversized T-shirts">All-product</a>
        <span aria-hidden="true">></span>
        <span>All-product</span>
      </nav>
    </div>
    <!-- Breadcum end -->

    <main class="flex flex-col lg:mx-9 xl:mx-10  2xl:mx-[72px] lg:mt-6 mb-8 lg:mb-20 collection-container ">
      <div class="collection-info-container flex flex-col px-2 py-[6px] lg:px-0 lg:py-0">
        <div class="collection-info flex items-center lg:mb-4 justify-between">


          <!-- Heading start -->
          <div class="flex flex-row items-baseline gap-1.5 lg:gap-3">
            <h1
              class="font-[ibmSemiBold] text-lg lg:text-2xl text-[#131814] list-title max-w-prose text-copy overflow-hidden whitespace-nowrap text-ellipsis">
              All-product</h1>
            <h3 data-products-count="79"
              class="collection-products-count text-[#74797D] text-xs lg:text-base font-[ibmRegular] lg:font-[ibmMedium]">
              79&nbsp;items
            </h3>
          </div>
          <!-- Heading end -->

        </div>

        <!-- filter and sort section start -->
        <section
          class="collection-filter-sort-section z-40 bg-white flex items-center  w-full h-14 px-4 lg:py-0 lg:px-0  lg:mb-8 fixed lg:static bottom-0 left-0 right-0  ">
          <div
            class="flex w-full rounded-xl lg:rounded-none px-4 lg:px-0  py-1 lg:py-0 items-center justify-center lg:justify-between border-[0.5px] border-[#C9CBCC] lg:border-none  gap-12 lg:gap-0 ">
            <button data-ga-view data-ga-view-info="Filter_View" class="filter_button collection-sort-filter-btn">
              <img src="cdn/shop/t/64/assets/icon-adjustmentb9f5.svg?v=11605082921049045501704692039" width="20"
                height="20" alt="collection filter icon" loading="lazy" class="">

              <div class="flex flex-col items-start">
                <h3
                  class="text-[#3A3E41] lg:text-[#222527] text-sm font-[ibmSemiBold] lg:font-[soraSemiBold]  uppercase">
                  <span data-display="hide" class="hide-show-filters hidden lg:inline-block">Hide</span>
                  Filters
                </h3>
                <span id="filters_selected_label"
                  class="inline lg:hidden text-[#74797D] text-[10px]  font-[ibmMedium]"></span>
              </div>
            </button>
            <hr class="border border-[#E1DFDF] h-5 lg:hidden">
            <div class="flex flex-row gap-7 items-center">
              <button data-ga-view data-ga-view-info="PLP_Sort_View" id="sort-button"
                class="collection-sort-filter-btn lg:!justify-start">
                <img src="cdn/shop/t/64/assets/icon-sorte8ed.svg?v=126335144650227036501704692041" width="20"
                  height="20" alt="collection sort mobile icon" loading="lazy" class="flex ">
                <div class="flex flex-col gap-0 lg:gap-1 items-baseline lg:flex-row">
                  <h3
                    class="text-[#3A3E41] lg:text-[#222527] text-sm font-[ibmSemiBold] lg:font-[soraSemiBold]  uppercase">
                    SORT BY <span class="hidden lg:contents">:</span>
                  </h3>
                  <span id="sort_label"
                    class="text-[#74797D] lg:text-[#222527] text-[10px] lg:text-sm font-[ibmMedium] lg:font-[ibmSemiBold] lg:uppercase">

                    Featured
                  </span>
                </div>
              </button>

            </div>
          </div>
        </section>
        <!-- filter and sort section end -->


        <section class="filter-container" data-label-show="size" data-drawer-show="false">
          <div id="filter-dropdown-bg" class="z-[99] fixed left-0 top-0 h-screen w-screen bg-[#141A38]/50 invisible">
          </div>
          <article
            class="max-h-[88%] transition-all duration-500 ease-in-out lg:hidden z-[110] opacity-0 invisible translate-y-full lg:-translate-y-1/2 shadow-xl bg-[#FFF] fixed lg:absolute bottom-0 left-0 w-full lg:mt-8 lg:w-[17%] lg:right-36 lg:bottom-auto lg:left-auto border-[0.5px] border-[#AFB2B4] rounded-tl-[1.5rem] rounded-tr-[1.5rem]"
            id="filter-dropdown">
            <article class="bg-white sticky top-0 rounded-tl-[1.5rem] rounded-tr-[1.5rem]">
              <div
                class="bg-white h-[2.25rem] flex justify-center items-center rounded-tl-[1.5rem] rounded-tr-[1.5rem]">
                <span class="h-[0.25rem] w-[2rem]  bg-opacity-40 bg-[#79747E]"></span>
              </div>
              <div id="filter_header"
                class="z-30 flex items-center justify-between py-3 px-4 border-b-[1px] border-[#AFB2B4] lg:hidden">
                <summary class="block font-[ibmSemiBold] text-base text-[#222527]">
                  Filters

                </summary>
                <button id="filter-close-btn" class="z-50">
                  <img src="cdn/shop/t/64/assets/icon-close15dc.svg?v=42907484647275626011705057419" loading="lazy"
                    width="28" height="28" alt="close icon">
                </button>
              </div>
            </article>
            <div class="flex flex-col">



              <section class="h-[50vh] filter-listing-drawer">
                <div class="flex h-full">
                  <aside
                    class="w-[35%] float-left bg-white flex flex-col filter-label-mobile-section overflow-y-auto  hide-scrollbar ">



                    <div data-href="/collections/mens-oversized-t-shirts?sort_by="
                      class="filter-drawer-button filter-option-listing p-4 flex flex-col items-start bg-[#F4FEFA] border-b-[0.5px] border-b-[#AFB2B4] border-r-[0.5px] border-r-[#AFB2B4] text-[#484B5A] cursor-pointer capitalize"
                      data-label="size">
                      <p class="font-[ibmRegular] text-xs text-[#484B5A] capitalize ">
                        Size
                      </p>
                      <span id="selected-size"
                        class="selected-size font-[ibmRegular] text-[10px] text-[#6C7498]"></span>
                    </div>




                    <div data-href="/collections/mens-oversized-t-shirts?sort_by="
                      class="filter-drawer-button filter-option-listing p-4 flex flex-col items-start bg-[#F4FEFA] border-b-[0.5px] border-b-[#AFB2B4] border-r-[0.5px] border-r-[#AFB2B4] text-[#484B5A] cursor-pointer capitalize"
                      data-label="price">
                      <p class="font-[ibmRegular] text-xs text-[#484B5A] capitalize ">
                        Price
                      </p>
                      <span id="selected-price"
                        class="selected-price font-[ibmRegular] text-[10px] text-[#6C7498]"></span>
                    </div>




                    <div data-href="/collections/mens-oversized-t-shirts?sort_by="
                      class="filter-drawer-button filter-option-listing p-4 flex flex-col items-start bg-[#F4FEFA] border-b-[0.5px] border-b-[#AFB2B4] border-r-[0.5px] border-r-[#AFB2B4] text-[#484B5A] cursor-pointer capitalize"
                      data-label="color">
                      <p class="font-[ibmRegular] text-xs text-[#484B5A] capitalize ">
                        Color
                      </p>
                      <span id="selected-color"
                        class="selected-color font-[ibmRegular] text-[10px] text-[#6C7498]"></span>
                    </div>




                    <div data-href="/collections/mens-oversized-t-shirts?sort_by="
                      class="filter-drawer-button filter-option-listing p-4 flex flex-col items-start bg-[#F4FEFA] border-b-[0.5px] border-b-[#AFB2B4] border-r-[0.5px] border-r-[#AFB2B4] text-[#484B5A] cursor-pointer capitalize"
                      data-label="fabric">
                      <p class="font-[ibmRegular] text-xs text-[#484B5A] capitalize ">
                        Fabric
                      </p>
                      <span id="selected-fabric"
                        class="selected-fabric font-[ibmRegular] text-[10px] text-[#6C7498]"></span>
                    </div>




                    <div data-href="/collections/mens-oversized-t-shirts?sort_by="
                      class="filter-drawer-button filter-option-listing p-4 flex flex-col items-start bg-[#F4FEFA] border-b-[0.5px] border-b-[#AFB2B4] border-r-[0.5px] border-r-[#AFB2B4] text-[#484B5A] cursor-pointer capitalize"
                      data-label="availability">
                      <p class="font-[ibmRegular] text-xs text-[#484B5A] capitalize ">
                        Availability
                      </p>
                      <span id="selected-availability"
                        class="selected-availability font-[ibmRegular] text-[10px] text-[#6C7498]"></span>
                    </div>




                    <div data-href="/collections/mens-oversized-t-shirts?sort_by="
                      class="filter-drawer-button filter-option-listing p-4 flex flex-col items-start bg-[#F4FEFA] border-b-[0.5px] border-b-[#AFB2B4] border-r-[0.5px] border-r-[#AFB2B4] text-[#484B5A] cursor-pointer capitalize"
                      data-label="gender">
                      <p class="font-[ibmRegular] text-xs text-[#484B5A] capitalize ">
                        Gender
                      </p>
                      <span id="selected-gender"
                        class="selected-gender font-[ibmRegular] text-[10px] text-[#6C7498]"></span>
                    </div>




                    <div data-href="/collections/mens-oversized-t-shirts?sort_by="
                      class="filter-drawer-button filter-option-listing p-4 flex flex-col items-start bg-[#F4FEFA] border-b-[0.5px] border-b-[#AFB2B4] border-r-[0.5px] border-r-[#AFB2B4] text-[#484B5A] cursor-pointer capitalize"
                      data-label="character">
                      <p class="font-[ibmRegular] text-xs text-[#484B5A] capitalize ">
                        Character
                      </p>
                      <span id="selected-character"
                        class="selected-character font-[ibmRegular] text-[10px] text-[#6C7498]"></span>
                    </div>




                    <div data-href="/collections/mens-oversized-t-shirts?sort_by="
                      class="filter-drawer-button filter-option-listing p-4 flex flex-col items-start bg-[#F4FEFA] border-b-[0.5px] border-b-[#AFB2B4] border-r-[0.5px] border-r-[#AFB2B4] text-[#484B5A] cursor-pointer capitalize"
                      data-label="pattern">
                      <p class="font-[ibmRegular] text-xs text-[#484B5A] capitalize ">
                        Pattern
                      </p>
                      <span id="selected-pattern"
                        class="selected-pattern font-[ibmRegular] text-[10px] text-[#6C7498]"></span>
                    </div>




                    <div data-href="/collections/mens-oversized-t-shirts?sort_by="
                      class="filter-drawer-button filter-option-listing p-4 flex flex-col items-start bg-[#F4FEFA] border-b-[0.5px] border-b-[#AFB2B4] border-r-[0.5px] border-r-[#AFB2B4] text-[#484B5A] cursor-pointer capitalize"
                      data-label="patterncoverage">
                      <p class="font-[ibmRegular] text-xs text-[#484B5A] capitalize ">
                        Pattern coverage
                      </p>
                      <span id="selected-patterncoverage"
                        class="selected-patterncoverage font-[ibmRegular] text-[10px] text-[#6C7498]"></span>
                    </div>




                    <div data-href="/collections/mens-oversized-t-shirts?sort_by="
                      class="filter-drawer-button filter-option-listing p-4 flex flex-col items-start bg-[#F4FEFA] border-b-[0.5px] border-b-[#AFB2B4] border-r-[0.5px] border-r-[#AFB2B4] text-[#484B5A] cursor-pointer capitalize"
                      data-label="category">
                      <p class="font-[ibmRegular] text-xs text-[#484B5A] capitalize ">
                        Category
                      </p>
                      <span id="selected-category"
                        class="selected-category font-[ibmRegular] text-[10px] text-[#6C7498]"></span>
                    </div>


                  </aside>
                  <form class="filter-mobile-section w-[65%] bg-white overflow-scroll hide-scrollbar"
                    id="mobile-filter-form">
                    <ul
                      class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  hidden filter-drawer-options  "
                      data-label="size">


                      <li class=" ">
                        <label class="label-size cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.v.option.size" value="XS" id="Filter-filter.v.option.size-1"
                                data-label="size">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="size" for="Filter-filter.v.option.size-1">XS</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (1)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-size cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.v.option.size" value="S" id="Filter-filter.v.option.size-2"
                                data-label="size">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="size" for="Filter-filter.v.option.size-2">S</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (79)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-size cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.v.option.size" value="M" id="Filter-filter.v.option.size-3"
                                data-label="size">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="size" for="Filter-filter.v.option.size-3">M</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (78)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-size cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.v.option.size" value="L" id="Filter-filter.v.option.size-4"
                                data-label="size">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="size" for="Filter-filter.v.option.size-4">L</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (78)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-size cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.v.option.size" value="XL" id="Filter-filter.v.option.size-5"
                                data-label="size">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="size" for="Filter-filter.v.option.size-5">XL</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (79)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-size cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.v.option.size" value="XXL" id="Filter-filter.v.option.size-6"
                                data-label="size">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="size" for="Filter-filter.v.option.size-6">XXL</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (79)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>



                      <filter-accordion>
                        <div class="filter-value__item-accordion">
                          <span
                            class="show-more text-[#008450] font-[ibmSemiBold] text-sm cursor-pointer uppercase hidden lg:flex"
                            data-showMore="2">Show More</span>
                        </div>
                      </filter-accordion>

                    </ul>


                    <ul
                      class="px-4 lg:px-0 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-label-display  hidden filter-drawer-options  "
                      data-label="price">
                      <div class="wrapper lg:px-2">
                        <div class="selected-price-range-container flex flex-col gap-1 lg:gap-2">
                          <span class="text-xs font-[ibmRegular]">Selected Price Range</span>
                          <div class="selected-range">
                            <span class="selected-min-value lg:text-base font-[ibmMedium]">₹0 - </span>
                            <span class="selected-max-value lg:text-base font-[ibmMedium]">₹2000</span>
                          </div>
                        </div>
                        <div class="price-slider mt-6 h-0.5 relative bg-[#ddd] rounded-[5px]">
                          <div class="progress h-full absolute rounded-[5px] bg-[#a740af]"></div>
                        </div>
                        <div class="range-input relative">
                          <input type="range" class="price-range-input range-min" min="0" max="2000" value="0"
                            step="100">
                          <input type="range" class="price-range-input range-max" min="100" max="2000" value="2000"
                            step="100">
                        </div>
                      </div>

                      <input class="default-filter" name="filter.v.price.gte" id="min_price_new" type="hidden">
                      <input class="default-filter" name="filter.v.price.lte" id="max_price_new" type="hidden">
                    </ul>

                    <ul
                      class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  hidden filter-drawer-options  "
                      data-label="color">


                      <li class=" ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Lilac" id="Filter-filter.p.m.custom.color-1"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_lilac lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-1">Lilac</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (8)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Navy" id="Filter-filter.p.m.custom.color-2"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_navy lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-2">Navy</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (1)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Royal Blue"
                                id="Filter-filter.p.m.custom.color-3" data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_royal-blue lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-3">Royal Blue</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (4)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Sky Blue" id="Filter-filter.p.m.custom.color-4"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_sky-blue lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-4">Sky Blue</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (2)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Olive" id="Filter-filter.p.m.custom.color-5"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_olive lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-5">Olive</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (1)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Green" id="Filter-filter.p.m.custom.color-6"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_green lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-6">Green</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (6)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Lime Green"
                                id="Filter-filter.p.m.custom.color-7" data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_lime-green lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-7">Lime Green</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (1)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Mustard" id="Filter-filter.p.m.custom.color-8"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_mustard lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-8">Mustard</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (1)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Orange" id="Filter-filter.p.m.custom.color-9"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_orange lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-9">Orange</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (2)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Maroon" id="Filter-filter.p.m.custom.color-10"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_maroon lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-10">Maroon</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (1)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Red" id="Filter-filter.p.m.custom.color-11"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_red lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-11">Red</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (1)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Magenta" id="Filter-filter.p.m.custom.color-12"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_magenta lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-12">Magenta</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (1)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Black" id="Filter-filter.p.m.custom.color-13"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_black lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-13">Black</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (22)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Beige" id="Filter-filter.p.m.custom.color-14"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_beige lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-14">Beige</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (7)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="White" id="Filter-filter.p.m.custom.color-15"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_white lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-15">White</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (10)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Blue" id="Filter-filter.p.m.custom.color-16"
                                data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_blue lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-16">Blue</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (5)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" show-more-item  ">
                        <label class="label-color cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.color" value="Swanwhite"
                                id="Filter-filter.p.m.custom.color-17" data-label="color">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="bg_color_swanwhite lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                                <span
                                  class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="color" for="Filter-filter.p.m.custom.color-17">Swanwhite</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (3)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>



                      <filter-accordion>
                        <div class="filter-value__item-accordion">
                          <span
                            class="show-more text-[#008450] font-[ibmSemiBold] text-sm cursor-pointer uppercase hidden lg:flex"
                            data-showMore="13">Show More</span>
                        </div>
                      </filter-accordion>

                    </ul>


                    <ul
                      class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  hidden filter-drawer-options  "
                      data-label="fabric">


                      <li class=" ">
                        <label class="label-fabric cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.fabric" value="100% Cotton"
                                id="Filter-filter.p.m.custom.fabric-1" data-label="fabric">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="fabric-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="fabric" for="Filter-filter.p.m.custom.fabric-1">100% Cotton</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (79)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>



                    </ul>


                    <ul
                      class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  hidden filter-drawer-options  "
                      data-label="availability">


                      <li class=" ">
                        <label class="label-availability cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-radio   filter-trigger flex" type='radio'
                                name="filter.v.availability" value="1" id="Filter-filter.v.availability-1"
                                data-label="availability">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="availability-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="availability" for="Filter-filter.v.availability-1">In stock</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (77)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-availability cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-radio   filter-trigger flex" type='radio'
                                name="filter.v.availability" value="0" id="Filter-filter.v.availability-2"
                                data-label="availability">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="availability-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="availability" for="Filter-filter.v.availability-2">Out of stock</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (20)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>



                    </ul>


                    <ul
                      class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  hidden filter-drawer-options  "
                      data-label="gender">


                      <li class=" ">
                        <label class="label-gender cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.gender" value="Men" id="Filter-filter.p.m.custom.gender-1"
                                data-label="gender">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="gender-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="gender" for="Filter-filter.p.m.custom.gender-1">Men</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (79)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>



                    </ul>


                    <ul
                      class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  hidden filter-drawer-options  "
                      data-label="character">


                      <li class=" ">
                        <label class="label-character cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.character" value="Disney"
                                id="Filter-filter.p.m.custom.character-1" data-label="character">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="character-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="character" for="Filter-filter.p.m.custom.character-1">Disney</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (2)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>



                    </ul>


                    <ul
                      class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  hidden filter-drawer-options  "
                      data-label="pattern">


                      <li class=" ">
                        <label class="label-pattern cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.pattern" value="Printed"
                                id="Filter-filter.p.m.custom.pattern-1" data-label="pattern">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="pattern-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="pattern" for="Filter-filter.p.m.custom.pattern-1">Printed</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (74)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-pattern cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.pattern" value="Plain" id="Filter-filter.p.m.custom.pattern-2"
                                data-label="pattern">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="pattern-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="pattern" for="Filter-filter.p.m.custom.pattern-2">Plain</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (1)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-pattern cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.pattern" value="Puff Print"
                                id="Filter-filter.p.m.custom.pattern-3" data-label="pattern">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="pattern-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="pattern" for="Filter-filter.p.m.custom.pattern-3">Puff Print</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (4)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>



                    </ul>


                    <ul
                      class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  hidden filter-drawer-options  "
                      data-label="patterncoverage">


                      <li class=" ">
                        <label class="label-patterncoverage cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.pattern_coverage" value="Back"
                                id="Filter-filter.p.m.custom.pattern_coverage-1" data-label="patterncoverage">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="patterncoverage-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="patterncoverage"
                                  for="Filter-filter.p.m.custom.pattern_coverage-1">Back</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (37)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-patterncoverage cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.pattern_coverage" value="Front"
                                id="Filter-filter.p.m.custom.pattern_coverage-2" data-label="patterncoverage">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="patterncoverage-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="patterncoverage"
                                  for="Filter-filter.p.m.custom.pattern_coverage-2">Front</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (28)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>


                      <li class=" ">
                        <label class="label-patterncoverage cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.m.custom.pattern_coverage" value="All-over"
                                id="Filter-filter.p.m.custom.pattern_coverage-3" data-label="patterncoverage">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="patterncoverage-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="patterncoverage"
                                  for="Filter-filter.p.m.custom.pattern_coverage-3">All-over</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (1)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>



                    </ul>


                    <ul
                      class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  hidden filter-drawer-options  "
                      data-label="category">


                      <li class=" ">
                        <label class="label-category cursor-pointer">
                          <div class=" grid-filter items-center">
                            <div class="filter-area-check relative w-fit">
                              <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                                name="filter.p.t.category" value="aa-1-13-8" id="Filter-filter.p.t.category-1"
                                data-label="category">
                              <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                                <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                  loading="lazy" width="10" height="8" alt="check icon">
                              </span>
                            </div>
                            <div class="filter-area-text">
                              <div class="flex items-center">


                                <span
                                  class="category-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                  data-label="category" for="Filter-filter.p.t.category-1">T-Shirts</span>
                              </div>

                              <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                                (79)
                              </span>

                            </div>
                          </div>
                        </label>
                      </li>



                    </ul>

                    <input type="submit" value="Apply" class="hidden mobile-filter-submit">
                  </form>
                </div>
              </section>

              <div
                class="filter-action-btn h-[4.5rem]  flex gap-2 bg-white left-0 right-0 w-full z-20 border-[1px] border-b-0 border-[#E8E9EA] p-4">
                <button disabled href="mens-oversized-t-shirts308a.html?sort_by="
                  class="clear-all flex justify-center items-center cursor-pointer w-1/2  py-3 px-4 text-sm font-[soraSemiBold] float-left rounded-lg  disable-clear-all-filter-btn  uppercase ">
                  Clear All
                </button>
                <button id="mobile-submit-btn"
                  class="apply-filter enable-filter-submit-btn flex cursor-pointer justify-center items-center w-1/2 py-3 px-4 text-[#222527] text-sm font-[soraSemiBold] float-right rounded-lg bg-[#00f092] border-[0.5px] border-[#323935] uppercase">
                  Apply
                </button>
              </div>
            </div>
          </article>
        </section>

        <section id="sort_container">
          <div id="sort-dropdown-bg" class="z-[99] fixed left-0 top-0 h-screen w-screen bg-[#141A38]/50 invisible">
          </div>
          <article
            class="z-[110] opacity-0 transition-all duration-500 ease-in-out invisible translate-y-full lg:-translate-y-[10%] rounded-t-xl lg:rounded-xl bg-[#FFF] fixed lg:absolute bottom-0 left-0 w-full lg:w-[20%] xl:w-[17%] lg:right-[2rem] xl:right-[2.5rem] 2xl:right-[4.5rem] lg:bottom-auto lg:left-auto lg:border-[0.5px] lg:border-[#AFB2B4]"
            id="sort-dropdown">
            <article id="sort_header" class="flex items-center justify-between p-4 border-b-[1px] border-[#EEEEEF]">
              <summary class="block font-[ibmSemiBold] text-base text-[#222527]">Sort by</summary>
              <button id="sort-close-btn" class="z-50">
                <img src="cdn/shop/t/64/assets/icon-close15dc.svg?v=42907484647275626011705057419" loading="lazy"
                  width="28" height="28" alt="close icon">
              </button>
            </article>


            <article class="mx-4 mb-6 mt-4">

              <div id="sort_by" class="flex flex-col py-2 w-full" value="manual">
                <label class="cursor-pointer">
                  <input type="radio" id="sort_by_input" name="so" arialabel="Featured"
                    class="sortBtn checkbox sort-checkbox" value="manual" checked>
                  <span class="absolute left-[21px] pt-[11px]">
                    <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                      loading="lazy" width="10" height="8" alt="check icon">
                  </span>
                  <span class=" font-[ibmMedium] text-base   text-[#484B5A] pl-4">Featured</span>
                </label>
              </div>




              <div id="sort_by" class="flex flex-col py-2 w-full" value="created-descending">
                <label class="cursor-pointer">
                  <input type="radio" id="sort_by_input" name="so" arialabel="New Arrivals"
                    class="sortBtn checkbox sort-checkbox" value="created-descending">
                  <span class="absolute left-[21px] pt-[11px]">
                    <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                      loading="lazy" width="10" height="8" alt="check icon">
                  </span>
                  <span class=" font-[ibmRegular] text-sm   text-[#484B5A] pl-4">New Arrivals</span>
                </label>
              </div>

              <div id="sort_by" class="flex flex-col py-2 w-full" value="best-selling">
                <label class="cursor-pointer">
                  <input type="radio" id="sort_by_input" name="so" arialabel="Best Selling"
                    class="sortBtn checkbox sort-checkbox" value="best-selling">
                  <span class="absolute left-[21px] pt-[11px]">
                    <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                      loading="lazy" width="10" height="8" alt="check icon">
                  </span>
                  <span class=" font-[ibmRegular] text-sm   text-[#484B5A] pl-4">Best Selling</span>
                </label>
              </div>


              <div id="sort_by" class="flex flex-col py-2 w-full" value="price-ascending">
                <label class="cursor-pointer">
                  <input type="radio" id="sort_by_input" name="so" arialabel="Price Low to High"
                    class="sortBtn checkbox sort-checkbox" value="price-ascending">
                  <span class="absolute left-[21px] pt-[11px]">
                    <a href="./product.php">
                    <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                    loading="lazy" width="10" height="8" alt="check icon">
                    </a>
                  </span>
                  <span class=" font-[ibmRegular] text-sm   text-[#484B5A] pl-4">Price Low to High</span>
                </label>
              </div>

              <div id="sort_by" class="flex flex-col py-2 w-full" value="price-descending">
                <label class="cursor-pointer">
                  <input type="radio" id="sort_by_input" name="so" arialabel="Price High to Low"
                    class="sortBtn checkbox sort-checkbox" value="price-descending">
                  <span class="absolute left-[21px] pt-[11px]">
                    <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                      loading="lazy" width="10" height="8" alt="check icon">
                  </span>
                  <span class=" font-[ibmRegular] text-sm   text-[#484B5A] pl-4">Price High to Low</span>
                </label>
              </div>

            </article>

          </article>
        </section>

      </div>

      <section class="collection-filter-product-section flex gap-10 ">
        <section data-ga-view data-ga-view-info="PLP_Filter_View"
          class="filter-section hidden lg:block w-[25%] mx-0 lg:overflow-y-auto  lg:h-[90vh] sticky top-20">
          <div class="flex flex-col">
            <div class="flex justify-between items-center w-full pb-5">



              <h3 class="text-black font-[soraSemiBold] text-base uppercase">
                Filters

              </h3>

            </div>

            <section class="mb-20">


              <form class="filter-form flex flex-col gap-10" id="desktop-filter-form">

                <details data-hide-filter="" data-expand-filter="" class="filter-group  " open>



                  <summary class="flex justify-between pb-5 items-center cursor-pointer">
                    <div class="flex flex-col gap-[6px]">
                      <span class="text-lg font-[ibmMedium] text-[#131814]  capitalize">Size</span>
                      <span class="text-xs font-[ibmMedium] text-[#6C7498] selected-size"></span>
                    </div>
                    <span class="arrow down"> </span>
                  </summary>



                  <ul
                    class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  "
                    data-label="size">


                    <li class=" ">
                      <label class="label-size cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.v.option.size" value="XS" id="Filter-filter.v.option.size-1"
                              data-label="size">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="size" for="Filter-filter.v.option.size-1">XS</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (1)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-size cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.v.option.size" value="S" id="Filter-filter.v.option.size-2"
                              data-label="size">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="size" for="Filter-filter.v.option.size-2">S</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (79)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-size cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.v.option.size" value="M" id="Filter-filter.v.option.size-3"
                              data-label="size">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="size" for="Filter-filter.v.option.size-3">M</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (78)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-size cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.v.option.size" value="L" id="Filter-filter.v.option.size-4"
                              data-label="size">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="size" for="Filter-filter.v.option.size-4">L</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (78)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-size cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.v.option.size" value="XL" id="Filter-filter.v.option.size-5"
                              data-label="size">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="size" for="Filter-filter.v.option.size-5">XL</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (79)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-size cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.v.option.size" value="XXL" id="Filter-filter.v.option.size-6"
                              data-label="size">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="size-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="size" for="Filter-filter.v.option.size-6">XXL</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (79)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>



                    <filter-accordion>
                      <div class="filter-value__item-accordion">
                        <span
                          class="show-more text-[#008450] font-[ibmSemiBold] text-sm cursor-pointer uppercase hidden lg:flex"
                          data-showMore="2">Show More</span>
                      </div>
                    </filter-accordion>

                  </ul>


                </details>




                <details data-hide-filter="" data-expand-filter="" class="filter-group  " open>



                  <summary class="flex justify-between pb-5 items-center cursor-pointer">
                    <div class="flex flex-col gap-[6px]">
                      <span class="text-lg font-[ibmMedium] text-[#131814]  capitalize">Price</span>
                      <span class="text-xs font-[ibmMedium] text-[#6C7498] selected-price"></span>
                    </div>
                    <span class="arrow down"> </span>
                  </summary>


                  <ul
                    class="px-4 lg:px-0 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-label-display  "
                    data-label="">
                    <div class="wrapper lg:px-2">
                      <div class="selected-price-range-container flex flex-col gap-1 lg:gap-2">
                        <span class="text-xs font-[ibmRegular]">Selected Price Range</span>
                        <div class="selected-range">
                          <span class="selected-min-value lg:text-base font-[ibmMedium]">₹0 - </span>
                          <span class="selected-max-value lg:text-base font-[ibmMedium]">₹2000</span>
                        </div>
                      </div>
                      <div class="price-slider mt-6 h-0.5 relative bg-[#ddd] rounded-[5px]">
                        <div class="progress h-full absolute rounded-[5px] bg-[#a740af]"></div>
                      </div>
                      <div class="range-input relative">
                        <input type="range" class="price-range-input range-min" min="0" max="2000" value="0"
                          step="100">
                        <input type="range" class="price-range-input range-max" min="100" max="2000" value="2000"
                          step="100">
                      </div>
                    </div>

                    <input class="default-filter" name="filter.v.price.gte" id="min_price_new" type="hidden">
                    <input class="default-filter" name="filter.v.price.lte" id="max_price_new" type="hidden">
                  </ul>


                </details>




                <details data-hide-filter="" data-expand-filter="" class="filter-group  " open>



                  <summary class="flex justify-between pb-5 items-center cursor-pointer">
                    <div class="flex flex-col gap-[6px]">
                      <span class="text-lg font-[ibmMedium] text-[#131814]  capitalize">Color</span>
                      <span class="text-xs font-[ibmMedium] text-[#6C7498] selected-color"></span>
                    </div>
                    <span class="arrow down"> </span>
                  </summary>



                  <ul
                    class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  "
                    data-label="color">


                    <li class=" ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Lilac" id="Filter-filter.p.m.custom.color-1"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_lilac lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-1">Lilac</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (8)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Navy" id="Filter-filter.p.m.custom.color-2"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_navy lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-2">Navy</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (1)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Royal Blue" id="Filter-filter.p.m.custom.color-3"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_royal-blue lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-3">Royal Blue</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (4)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Sky Blue" id="Filter-filter.p.m.custom.color-4"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_sky-blue lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-4">Sky Blue</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (2)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Olive" id="Filter-filter.p.m.custom.color-5"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_olive lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-5">Olive</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (1)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Green" id="Filter-filter.p.m.custom.color-6"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_green lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-6">Green</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (6)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Lime Green" id="Filter-filter.p.m.custom.color-7"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_lime-green lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-7">Lime Green</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (1)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Mustard" id="Filter-filter.p.m.custom.color-8"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_mustard lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-8">Mustard</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (1)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Orange" id="Filter-filter.p.m.custom.color-9"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_orange lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-9">Orange</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (2)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Maroon" id="Filter-filter.p.m.custom.color-10"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_maroon lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-10">Maroon</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (1)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Red" id="Filter-filter.p.m.custom.color-11"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_red lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-11">Red</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (1)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Magenta" id="Filter-filter.p.m.custom.color-12"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_magenta lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-12">Magenta</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (1)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Black" id="Filter-filter.p.m.custom.color-13"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_black lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-13">Black</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (22)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Beige" id="Filter-filter.p.m.custom.color-14"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_beige lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-14">Beige</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (7)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="White" id="Filter-filter.p.m.custom.color-15"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_white lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-15">White</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (10)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Blue" id="Filter-filter.p.m.custom.color-16"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_blue lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-16">Blue</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (5)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" show-more-item  ">
                      <label class="label-color cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.color" value="Swanwhite" id="Filter-filter.p.m.custom.color-17"
                              data-label="color">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="bg_color_swanwhite lg:w-6 lg:h-6 w-5 h-5 rounded-3xl  mr-[10px] shadow-[0_0_0_1px_#000000]"></span>

                              <span
                                class="color-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="color" for="Filter-filter.p.m.custom.color-17">Swanwhite</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (3)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>



                    <filter-accordion>
                      <div class="filter-value__item-accordion">
                        <span
                          class="show-more text-[#008450] font-[ibmSemiBold] text-sm cursor-pointer uppercase hidden lg:flex"
                          data-showMore="13">Show More</span>
                      </div>
                    </filter-accordion>

                  </ul>


                </details>




                <details data-hide-filter="" data-expand-filter="" class="filter-group  " open>



                  <summary class="flex justify-between pb-5 items-center cursor-pointer">
                    <div class="flex flex-col gap-[6px]">
                      <span class="text-lg font-[ibmMedium] text-[#131814]  capitalize">Fabric</span>
                      <span class="text-xs font-[ibmMedium] text-[#6C7498] selected-fabric"></span>
                    </div>
                    <span class="arrow down"> </span>
                  </summary>



                  <ul
                    class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  "
                    data-label="fabric">


                    <li class=" ">
                      <label class="label-fabric cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.fabric" value="100% Cotton"
                              id="Filter-filter.p.m.custom.fabric-1" data-label="fabric">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="fabric-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="fabric" for="Filter-filter.p.m.custom.fabric-1">100% Cotton</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (79)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>



                  </ul>


                </details>




                <details data-hide-filter="" data-expand-filter="" class="filter-group  " open>



                  <summary class="flex justify-between pb-5 items-center cursor-pointer">
                    <div class="flex flex-col gap-[6px]">
                      <span class="text-lg font-[ibmMedium] text-[#131814]  capitalize">Availability</span>
                      <span class="text-xs font-[ibmMedium] text-[#6C7498] selected-availability"></span>
                    </div>
                    <span class="arrow down"> </span>
                  </summary>



                  <ul
                    class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  "
                    data-label="availability">


                    <li class=" ">
                      <label class="label-availability cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-radio   filter-trigger flex" type='radio'
                              name="filter.v.availability" value="1" id="Filter-filter.v.availability-1"
                              data-label="availability">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="availability-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="availability" for="Filter-filter.v.availability-1">In stock</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (77)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-availability cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-radio   filter-trigger flex" type='radio'
                              name="filter.v.availability" value="0" id="Filter-filter.v.availability-2"
                              data-label="availability">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="availability-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="availability" for="Filter-filter.v.availability-2">Out of stock</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (20)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>



                  </ul>


                </details>




                <details data-hide-filter="" data-expand-filter="" class="filter-group  " open>



                  <summary class="flex justify-between pb-5 items-center cursor-pointer">
                    <div class="flex flex-col gap-[6px]">
                      <span class="text-lg font-[ibmMedium] text-[#131814]  capitalize">Gender</span>
                      <span class="text-xs font-[ibmMedium] text-[#6C7498] selected-gender"></span>
                    </div>
                    <span class="arrow down"> </span>
                  </summary>



                  <ul
                    class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  "
                    data-label="gender">


                    <li class=" ">
                      <label class="label-gender cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.gender" value="Men" id="Filter-filter.p.m.custom.gender-1"
                              data-label="gender">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="gender-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="gender" for="Filter-filter.p.m.custom.gender-1">Men</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (79)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>



                  </ul>


                </details>




                <details data-hide-filter="" data-expand-filter="" class="filter-group  " open>



                  <summary class="flex justify-between pb-5 items-center cursor-pointer">
                    <div class="flex flex-col gap-[6px]">
                      <span class="text-lg font-[ibmMedium] text-[#131814]  capitalize">Character</span>
                      <span class="text-xs font-[ibmMedium] text-[#6C7498] selected-character"></span>
                    </div>
                    <span class="arrow down"> </span>
                  </summary>



                  <ul
                    class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  "
                    data-label="character">


                    <li class=" ">
                      <label class="label-character cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.character" value="Disney"
                              id="Filter-filter.p.m.custom.character-1" data-label="character">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="character-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="character" for="Filter-filter.p.m.custom.character-1">Disney</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (2)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>



                  </ul>


                </details>




                <details data-hide-filter="" data-expand-filter="" class="filter-group  " open>



                  <summary class="flex justify-between pb-5 items-center cursor-pointer">
                    <div class="flex flex-col gap-[6px]">
                      <span class="text-lg font-[ibmMedium] text-[#131814]  capitalize">Pattern</span>
                      <span class="text-xs font-[ibmMedium] text-[#6C7498] selected-pattern"></span>
                    </div>
                    <span class="arrow down"> </span>
                  </summary>



                  <ul
                    class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  "
                    data-label="pattern">


                    <li class=" ">
                      <label class="label-pattern cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.pattern" value="Printed" id="Filter-filter.p.m.custom.pattern-1"
                              data-label="pattern">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="pattern-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="pattern" for="Filter-filter.p.m.custom.pattern-1">Printed</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (74)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-pattern cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.pattern" value="Plain" id="Filter-filter.p.m.custom.pattern-2"
                              data-label="pattern">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="pattern-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="pattern" for="Filter-filter.p.m.custom.pattern-2">Plain</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (1)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-pattern cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.pattern" value="Puff Print"
                              id="Filter-filter.p.m.custom.pattern-3" data-label="pattern">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="pattern-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="pattern" for="Filter-filter.p.m.custom.pattern-3">Puff Print</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (4)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>



                  </ul>


                </details>




                <details data-hide-filter="" data-expand-filter="" class="filter-group  " open>



                  <summary class="flex justify-between pb-5 items-center cursor-pointer">
                    <div class="flex flex-col gap-[6px]">
                      <span class="text-lg font-[ibmMedium] text-[#131814]  capitalize">Pattern coverage</span>
                      <span class="text-xs font-[ibmMedium] text-[#6C7498] selected-pattern_coverage"></span>
                    </div>
                    <span class="arrow down"> </span>
                  </summary>



                  <ul
                    class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  "
                    data-label="patterncoverage">


                    <li class=" ">
                      <label class="label-patterncoverage cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.pattern_coverage" value="Back"
                              id="Filter-filter.p.m.custom.pattern_coverage-1" data-label="patterncoverage">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="patterncoverage-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="patterncoverage"
                                for="Filter-filter.p.m.custom.pattern_coverage-1">Back</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (37)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-patterncoverage cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.pattern_coverage" value="Front"
                              id="Filter-filter.p.m.custom.pattern_coverage-2" data-label="patterncoverage">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="patterncoverage-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="patterncoverage"
                                for="Filter-filter.p.m.custom.pattern_coverage-2">Front</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (28)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>


                    <li class=" ">
                      <label class="label-patterncoverage cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.m.custom.pattern_coverage" value="All-over"
                              id="Filter-filter.p.m.custom.pattern_coverage-3" data-label="patterncoverage">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="patterncoverage-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="patterncoverage"
                                for="Filter-filter.p.m.custom.pattern_coverage-3">All-over</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (1)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>



                  </ul>


                </details>




                <details data-hide-filter="" data-expand-filter="" class="filter-group  " open>



                  <summary class="flex justify-between pb-5 items-center cursor-pointer">
                    <div class="flex flex-col gap-[6px]">
                      <span class="text-lg font-[ibmMedium] text-[#131814]  capitalize">Category</span>
                      <span class="text-xs font-[ibmMedium] text-[#6C7498] selected-category"></span>
                    </div>
                    <span class="arrow down"> </span>
                  </summary>



                  <ul
                    class="px-4 lg:px-0 lg:pl-1 flex flex-col w-full gap-4 pb-8 lg:pb-0 mt-[14px] lg:mt-0 h-fit filter-option-container filter-label-display filter-group  "
                    data-label="category">


                    <li class=" ">
                      <label class="label-category cursor-pointer">
                        <div class=" grid-filter items-center">
                          <div class="filter-area-check relative w-fit">
                            <input class=" filter-checkbox   filter-trigger flex" type='checkbox'
                              name="filter.p.t.category" value="aa-1-13-8" id="Filter-filter.p.t.category-1"
                              data-label="category">
                            <span class="absolute top-2/4 left-2/4 -translate-x-1/2 -translate-y-1/2">
                              <img src="cdn/shop/t/64/assets/icon-check9d12.svg?v=71056778941593993731704702524"
                                loading="lazy" width="10" height="8" alt="check icon">
                            </span>
                          </div>
                          <div class="filter-area-text">
                            <div class="flex items-center">


                              <span
                                class="category-labels text-[#484B5A] text-xs lg:text-base filter-label  font-[ibmRegular] "
                                data-label="category" for="Filter-filter.p.t.category-1">T-Shirts</span>
                            </div>

                            <span class="text-[#9698A0] text-xs lg:text-sm font-[ibmRegular] filter-count">
                              (79)
                            </span>

                          </div>
                        </div>
                      </label>
                    </li>



                  </ul>


                </details>


                <input type="submit" value="Apply" id="desktop-filter-submit" class="hidden ">
              </form>

            </section>
          </div>
        </section>

        <!-- Products section -->

        <section class="product-section p-2 md:p-0 w-full ">
          <article id="product-grid"
            class="product-on-page grid  grid-cols-2 gap-x-[6px] gap-y-2 md:gap-x-4 md:gap-y-6 lg:grid-cols-3 lg:gap-x-4 lg:gap-y-8">


            <section data-product-id="7149593460791"
              class="product-card-container flex h-full flex-col rounded-xl lg:rounded-2xl border-[0.5px] border-[#c9cbcc] cursor-pointer justify-between   justify-between">
              <div class="flex flex-col relative">
                <div data-event_name="PLP_STYLE_CLICK"
                  href="../products/veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt.html"
                  data-href="/products/veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt"
                  class="product_link" data-product-tag="NA" data-id="7149593460791"
                  data-name="VmVpcmRvIE9yaWdpbmFsIFN3YW53aGl0ZSBPdmVyc2l6ZWQgVHlwb2dyYXBoeSBCcmFuZCBQcmludGVkIFRzaGlydA=="
                  data-price="549" data-item_list_name="T3ZlcnNpemVkIFByaW50ZWQgVC1zaGlydHM=" data-product_index="1"
                  data-item_variant="Uw==">
                  <div class="container relative lg:hidden">
                    <div id="image-container"
                      class="plp-carousel flex p-[2px] lg:hidden w-full relative  image-container  full-product-slider  aspect-[2/3] ">


                      <figure class="w-full flex  block  ">



                        <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042&width=165 165w,//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042&width=360 360w,//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042&width=533 533w,//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042&width=720 720w,//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042&width=940 940w,//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042 1024w" src="cdn/shop/files/vb2002cbe.jpg?v=1728462042"
                          sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                          alt="Veirdo Original Swanwhite Oversized Typography Brand Printed Tshirt"
                          class="w-full h-full object-cover image-placeholder-bg rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] aspect-[2/3]"
                          width="1024" height="1536" loading="lazy">

                      </figure>

                      <figure class="w-full flex  card-product-media hidden  ">



                        <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724&width=165 165w,//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724&width=360 360w,//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724&width=533 533w,//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724&width=720 720w,//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724&width=940 940w,//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724 1020w" src="cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200559b.jpg?v=1728544724"
                          sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                          alt="Veirdo Original Swanwhite Oversized Typography Brand Printed Tshirt"
                          class="w-full h-full object-cover image-placeholder-bg rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] aspect-[2/3]"
                          width="1020" height="1536" loading="lazy">
                        

                      </figure>

                      <figure class="w-full flex  card-product-media hidden  ">



                        <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724&width=165 165w,//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724&width=360 360w,//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724&width=533 533w,//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724&width=720 720w,//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724&width=940 940w,//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724 1020w" src="cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200559b.jpg?v=1728544724"
                          sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                          alt="Veirdo Original Swanwhite Oversized Typography Brand Printed Tshirt"
                          class="w-full h-full object-cover image-placeholder-bg rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] aspect-[2/3]"
                          width="1020" height="1536" loading="lazy">
                        

                      </figure>

                      <figure class="w-full flex  card-product-media hidden  ">



                        <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724&width=165 165w,//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724&width=360 360w,//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724&width=533 533w,//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724&width=720 720w,//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724&width=940 940w,//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724 1020w" src="cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200559b.jpg?v=1728544724"
                          sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                          alt="Veirdo Original Swanwhite Oversized Typography Brand Printed Tshirt"
                          class="w-full h-full object-cover image-placeholder-bg rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] aspect-[2/3]"
                          width="1020" height="1536" loading="lazy">
                        

                      </figure>


                    </div>


                    <div
                      class="product-image-tag  product-image-tag  flex items-center absolute h-4 top-2 lg:top-4 p-[2px] lg:p-1 rounded-sm z-20 product-card-tag  left-[1%]  ">
                      <span class="uppercase text-[7px] lg:text-sm font-[ibmSemiBold] text-center text-[#00AA68]  ">

                        Best Seller
                      </span>
                    </div>




                    <div class="rating-section absolute  !left-[0.625rem] !bottom-[0.625rem]">
                      <div class="flex gap-[2px] items-center justify-center">
                        <img src="cdn/shop/t/64/assets/icon-star5226.svg?v=116753354371702194131706021711"
                          loading="lazy" alt="rating icon" width="15" height="15" class="lg:mt-1">
                        <div
                          class="flex items-baseline justify-center gap-1 text-[11px] lg:text-sm font-[ibmMedium] text-[#51575C]">
                          <span>4.5</span>
                          <span class="bg-[#AFB2B4] w-[2px] h-[9px] lg:h-[11px]"></span>
                          <span>51</span>

                        </div>
                      </div>
                    </div>




                    <div class="color-variant-section absolute !right-[0.625rem] !bottom-[0.625rem] z-[1]">
                      <div class="flex items-center h-full ">
                        <div class="flex gap-[3px] h-full">
                          <div class="flex justify-center items-center lg:mt-0.5  w-6 ">
                            <div class="flex first-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class="bg_color_swanwhite border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>







                            <div class="flex second-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class=" bg_color_blue border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>






                          </div>

                          <span class="text-[#51575C] text-xs font-[ibmMedium] flex items-center">
                            5
                          </span>
                        </div>
                      </div>
                    </div>



                  </div>



                  <div id="image-container" class=" p-1 w-full hidden lg:flex relative overflow-hidden ">

                    <div class="container product-card-main-image-container">
                      <div
                        class="product-slider-container product-listing-main-image product-image-7149593460791 relative  image-container flex gap-4 "
                        style="max-width: 100vw;">


                        <figure class="flex aspect-[2/3] cursor-pointer  product-figure">
                          <div
                            href="../products/veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt.html"
                            data-id="7149593460791"
                            data-name="VmVpcmRvIE9yaWdpbmFsIFN3YW53aGl0ZSBPdmVyc2l6ZWQgVHlwb2dyYXBoeSBCcmFuZCBQcmludGVkIFRzaGlydA=="
                            data-price="549"
                            data-href="/products/veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt"
                            data-product_index="1" class=" w-full h-full">
                            <img srcset="//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042&width=165 165w,//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042&width=360 360w,//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042&width=533 533w,//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042&width=720 720w,//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042&width=940 940w,//veirdo.in/cdn/shop/files/vb200.jpg?v=1728462042 1024w" src="cdn/shop/files/vb2002cbe.jpg?v=1728462042"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Veirdo Original Swanwhite Oversized Typography Brand Printed Tshirt"
                              class="image-placeholder-bg h-full w-full product-card-carousel-image rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] carousel-image-index-0"
                              width="1024" loading="lazy" height="1536" index="0" type="pdp-main-img">
                          </div>
                        </figure>

                        <figure class="flex aspect-[2/3] cursor-pointer  product-figure">
                          <div
                            href="../products/veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt.html"
                            data-id="7149593460791"
                            data-name="VmVpcmRvIE9yaWdpbmFsIFN3YW53aGl0ZSBPdmVyc2l6ZWQgVHlwb2dyYXBoeSBCcmFuZCBQcmludGVkIFRzaGlydA=="
                            data-price="549"
                            data-href="/products/veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt"
                            data-product_index="2" class=" w-full h-full">
                            <img srcset="//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724&width=165 165w,//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724&width=360 360w,//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724&width=533 533w,//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724&width=720 720w,//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724&width=940 940w,//veirdo.in/cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200.jpg?v=1728544724 1020w" src="cdn/shop/files/Untitled-2_0000_swan_veirdo_tshirt_view_2_1_200559b.jpg?v=1728544724"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Veirdo Original Swanwhite Oversized Typography Brand Printed Tshirt"
                              class="image-placeholder-bg h-full w-full product-card-carousel-image rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] carousel-image-index-1"
                              width="1020" loading="lazy" height="1536" index="1" type="pdp-main-img">
                          </div>
                        </figure>

                        <figure class="flex aspect-[2/3] cursor-pointer  product-figure">
                          <div
                            href="../products/veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt.html"
                            data-id="7149593460791"
                            data-name="VmVpcmRvIE9yaWdpbmFsIFN3YW53aGl0ZSBPdmVyc2l6ZWQgVHlwb2dyYXBoeSBCcmFuZCBQcmludGVkIFRzaGlydA=="
                            data-price="549"
                            data-href="/products/veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt"
                            data-product_index="3" class=" w-full h-full">
                            <img srcset="//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724&width=165 165w,//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724&width=360 360w,//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724&width=533 533w,//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724&width=720 720w,//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724&width=940 940w,//veirdo.in/cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200.jpg?v=1728544724 1020w" src="cdn/shop/files/Untitled-2_0001_swan_veirdo_tshirt_view_1200559b.jpg?v=1728544724"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Veirdo Original Swanwhite Oversized Typography Brand Printed Tshirt"
                              class="image-placeholder-bg h-full w-full product-card-carousel-image rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] carousel-image-index-2"
                              width="1020" loading="lazy" height="1536" index="2" type="pdp-main-img">
                          </div>
                        </figure>

                        <figure class="flex aspect-[2/3] cursor-pointer  product-figure">
                          <div
                            href="../products/veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt.html"
                            data-id="7149593460791"
                            data-name="VmVpcmRvIE9yaWdpbmFsIFN3YW53aGl0ZSBPdmVyc2l6ZWQgVHlwb2dyYXBoeSBCcmFuZCBQcmludGVkIFRzaGlydA=="
                            data-price="549"
                            data-href="/products/veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt"
                            data-product_index="4" class=" w-full h-full">
                            <img srcset="//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724&width=165 165w,//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724&width=360 360w,//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724&width=533 533w,//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724&width=720 720w,//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724&width=940 940w,//veirdo.in/cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200.jpg?v=1728544724 1020w" src="cdn/shop/files/Untitled-2_0002_swan_veirdo_tshirt_view_3_1_200559b.jpg?v=1728544724"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Veirdo Original Swanwhite Oversized Typography Brand Printed Tshirt"
                              class="image-placeholder-bg h-full w-full product-card-carousel-image rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] carousel-image-index-3"
                              width="1020" loading="lazy" height="1536" index="3" type="pdp-main-img">
                          </div>
                        </figure>

                      </div>
                    </div>



                    <div
                      class="product-image-tag  product-image-tag  flex items-center absolute h-4 top-2 lg:top-4 p-[2px] lg:p-1 rounded-sm z-20   left-[1%]  ">
                      <span class="uppercase text-[7px] lg:text-sm font-[ibmSemiBold] text-center text-[#00AA68]  ">

                        Best Seller
                      </span>
                    </div>




                    <div
                      class="rating-section absolute  !left-[0.625rem] lg:!left-[0.75rem] !bottom-[0.625rem] lg:!bottom-[0.75rem]">
                      <div class="flex gap-[2px] items-center justify-center">
                        <a href="./product.php">
                        <img src="cdn/shop/t/64/assets/icon-star5226.svg?v=116753354371702194131706021711"
                        loading="lazy" alt="rating icon" width="15" height="15" class="lg:mt-1">
                        </a>
                        <div
                          class="flex items-baseline justify-center gap-1 text-[11px] lg:text-sm font-[ibmMedium] text-[#51575C]">
                          <span>4.5</span>
                          <span class="bg-[#AFB2B4] w-[2px] h-[9px] lg:h-[11px]"></span>
                          <span>51</span>

                        </div>
                      </div>
                    </div>




                    <div
                      class="color-variant-section absolute !right-[0.625rem] lg:!right-[0.75rem] !bottom-[0.625rem] lg:!bottom-[0.75rem] z-[1]">
                      <div class="flex items-center h-full ">
                        <div class="flex gap-[3px] h-full">
                          <div class="flex justify-center items-center lg:mt-0.5  w-6 ">
                            <div class="flex first-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class="bg_color_swanwhite border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>







                            <div class="flex second-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class=" bg_color_blue border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>






                          </div>

                          <span class="text-[#51575C] text-xs font-[ibmMedium] flex items-center">
                            5
                          </span>
                        </div>
                      </div>
                    </div>



                  </div>


                  <section id="product-info" class=" pt-0 lg:pt-3 pb-2  px-2  lg:px-3 ">
                    <div class="product-price-name-container flex flex-col gap-[2px]">


                      <section class="flex gap-1 lg:gap-2 items-baseline flex-wrap">
                        <span class="font-[ibmSemiBold]   text-sm   lg:text-base text-[#131814] ">₹549</span>

                        <span
                          class=" text-[11px]   lg:text-sm font-[ibmMedium] text-[#AFB2B4] line-through">₹1,199</span>
                        <span class="font-[ibmMedium]  text-[10px]  lg:text-sm text-[#00B53A] uppercase">54% off
                        </span>

                      </section>

                      <h3
                        class="max-w-prose text-copy w-full overflow-hidden whitespace-nowrap text-ellipsis font-[ibmRegular] text-[#8A8E92] text-xs lg:text-sm">
                        Veirdo Original Swanwhite Oversized Typography Brand Printed Tshirt
                      </h3>
                    </div>

                    <div class="mt-1 mb-1.5">


                      <div
                        class="price-drop hidden cart-item  rounded-l-full lowest-price  lp-cart-item  flex gap-1 items-center w-max"
                        data-ga-view-custom data-ga-view-info-custom="PLP_Lowest_Price">


                        <img src="cdn/shop/t/64/assets/icon-price-dropf47f.svg?v=150853337221706652561714397178"
                          loading="lazy" width="10" height="12" alt="pricedrop_icon" class="lg:w-3 lg:h-6">



                        <div class="font-[ibmMedium] text-xs lg:text-sm text-[#2063A1]">Lowest price in last 30 days
                        </div>

                      </div>





                    </div>
                  </section>
                </div>
              </div>




              <div class="card-add-to-bag-wishlist-container  flex border-t-[0.5px] border-t-[#c9cbcc]">
                <button data-product-section-name="PLP-Oversized-Printed-T-shirts" data-product-index="1"
                  data-total-variants="1"
                  class="product-card-add-to-bag  cursor-pointer  flex p-2 lg:p-4 items-center justify-center flex-1 border-r-[0.5px] border-r-[#c9cbcc]"
                  data-product-handle="veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt">
                  <span class="text-[11px] lg:text-sm font-[soraSemiBold]  text-[#131814]    uppercase">

                    ADD TO CART

                  </span>
                </button>
                <button data-product-section-name="PLP-Oversized-Printed-T-shirts"
                  class="product-card-wishlist flex py-0 px-3 lg:px-4 justify-center items-center self-stretch">
                  <div class="flits-collection-page-wishlist-button" style="position:relative;opacity:0;"
                    data-flits-product-handle="veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt"
                    data-flits-product-id="7149593460791"
                    data-flits-product-title="Veirdo Original Swanwhite Oversized Typography Brand Printed Tshirt"
                    data-flits-product-image="cdn/shop/files/vb2002cbe.jpg?v=1728462042"
                    data-flits-product-wsl-count="1599"></div>
                  <img src="cdn/shop/t/64/assets/icon-wishlistaa8e.svg?v=113452544103302444001706007531" width="20"
                    height="20" alt="wishlist icon" loading="lazy">
                </button>
              </div>



            </section>

            <section data-product-id="6798157021239"
              class="product-card-container flex h-full flex-col rounded-xl lg:rounded-2xl border-[0.5px] border-[#c9cbcc] cursor-pointer justify-between   justify-between">
              <div class="flex flex-col relative">
                <div data-event_name="PLP_STYLE_CLICK" href="../products/veirdo-originals-oversized-t-shirt.html"
                  data-href="/products/veirdo-originals-oversized-t-shirt" class="product_link" data-product-tag="NA"
                  data-id="6798157021239"
                  data-name="VmVpcmRvIE9yaWdpbmFsIE5hdnkgT3ZlcnNpemVkIFR5cG9ncmFwaHkgQnJhbmQgUHJpbnRlZCBUc2hpcnQ="
                  data-price="549" data-item_list_name="T3ZlcnNpemVkIFByaW50ZWQgVC1zaGlydHM=" data-product_index="2"
                  data-item_variant="Uw==">
                  <div class="container relative lg:hidden">
                    <div id="image-container"
                      class="plp-carousel flex p-[2px] lg:hidden w-full relative  image-container  full-product-slider  aspect-[2/3] ">


                      <figure class="w-full flex  block  ">



                        <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=165 165w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=360 360w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=533 533w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=720 720w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=940 940w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=1066 1066w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778 1200w" src="cdn/shop/files/18_50c77.jpg?v=1723283778"
                          sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                          alt="Veirdo Original Navy Oversized Typography Brand Printed Tshirt"
                          class="w-full h-full object-cover image-placeholder-bg rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] aspect-[2/3]"
                          width="1200" height="1600" loading="lazy">
                        

                      </figure>

                      <figure class="w-full flex  card-product-media hidden  ">



                        <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976&width=165 165w,//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976&width=360 360w,//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976&width=533 533w,//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976&width=720 720w,//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976&width=940 940w,//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976 980w" src="cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e67902835.jpg?v=1722688976"
                          sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                          alt="Veirdo Original Navy Oversized Typography Brand Printed Tshirt"
                          class="w-full h-full object-cover image-placeholder-bg rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] aspect-[2/3]"
                          width="980" height="1257" loading="lazy">
                        

                      </figure>

                      <figure class="w-full flex  card-product-media hidden  ">



                        <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976&width=165 165w,//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976&width=360 360w,//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976&width=533 533w,//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976&width=720 720w,//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976&width=940 940w,//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976 980w" src="cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff72835.jpg?v=1722688976"
                          sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                          alt="Veirdo Original Navy Oversized Typography Brand Printed Tshirt"
                          class="w-full h-full object-cover image-placeholder-bg rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] aspect-[2/3]"
                          width="980" height="1257" loading="lazy">
                        

                      </figure>

                      <figure class="w-full flex  card-product-media hidden  ">



                        <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976&width=165 165w,//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976&width=360 360w,//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976&width=533 533w,//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976&width=720 720w,//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976&width=940 940w,//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976 980w" src="cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd32835.jpg?v=1722688976"
                          sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                          alt="Veirdo Original Navy Oversized Typography Brand Printed Tshirt"
                          class="w-full h-full object-cover image-placeholder-bg rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] aspect-[2/3]"
                          width="980" height="1257" loading="lazy">
                        

                      </figure>

                      <figure class="w-full flex  card-product-media hidden  ">



                        <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977&width=165 165w,//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977&width=360 360w,//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977&width=533 533w,//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977&width=720 720w,//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977&width=940 940w,//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977 980w" src="cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972c4ad.jpg?v=1722688977"
                          sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                          alt="Veirdo Original Navy Oversized Typography Brand Printed Tshirt"
                          class="w-full h-full object-cover image-placeholder-bg rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] aspect-[2/3]"
                          width="980" height="1257" loading="lazy">
                        

                      </figure>


                    </div>


                    <div
                      class="product-image-tag  product-image-tag  flex items-center absolute h-4 top-2 lg:top-4 p-[2px] lg:p-1 rounded-sm z-20 product-card-tag  left-[1%]  "
                      data-ga-view-custom data-ga-view-info-custom="Bestseller_Tag_View_PLP">
                      <span class="uppercase text-[7px] lg:text-sm font-[ibmSemiBold] text-center text-[#00AA68]  ">

                        Best Seller

                      </span>
                    </div>




                    <div class="rating-section absolute  !left-[0.625rem] !bottom-[0.625rem]">
                      <div class="flex gap-[2px] items-center justify-center">
                        <img src="cdn/shop/t/64/assets/icon-star5226.svg?v=116753354371702194131706021711"
                          loading="lazy" alt="rating icon" width="15" height="15" class="lg:mt-1">
                        <div
                          class="flex items-baseline justify-center gap-1 text-[11px] lg:text-sm font-[ibmMedium] text-[#51575C]">
                          <span>4.6</span>
                          <span class="bg-[#AFB2B4] w-[2px] h-[9px] lg:h-[11px]"></span>
                          <span>81</span>

                        </div>
                      </div>
                    </div>




                    <div class="color-variant-section absolute !right-[0.625rem] !bottom-[0.625rem] z-[1]">
                      <div class="flex items-center h-full ">
                        <div class="flex gap-[3px] h-full">
                          <div class="flex justify-center items-center lg:mt-0.5  w-6 ">
                            <div class="flex first-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class="bg_color_navy border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>







                            <div class="flex second-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class=" bg_color_red border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>






                          </div>

                          <span class="text-[#51575C] text-xs font-[ibmMedium] flex items-center">
                            5
                          </span>
                        </div>
                      </div>
                    </div>



                  </div>



                  <div id="image-container" class=" p-1 w-full hidden lg:flex relative overflow-hidden ">

                    <div class="container product-card-main-image-container">
                      <div
                        class="product-slider-container product-listing-main-image product-image-6798157021239 relative  image-container flex gap-4 "
                        style="max-width: 100vw;">


                        <figure class="flex aspect-[2/3] cursor-pointer  product-figure">
                          <div href="all-product.php" data-id="6798157021239"
                            data-name="VmVpcmRvIE9yaWdpbmFsIE5hdnkgT3ZlcnNpemVkIFR5cG9ncmFwaHkgQnJhbmQgUHJpbnRlZCBUc2hpcnQ="
                            data-price="549" data-href="/products/veirdo-originals-oversized-t-shirt"
                            data-product_index="1" class=" w-full h-full">
                            <a href="product.php">
                              <img srcset="//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=165 165w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=360 360w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=533 533w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=720 720w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=940 940w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778&width=1066 1066w,//veirdo.in/cdn/shop/files/18_5.jpg?v=1723283778 1200w" src="cdn/shop/files/18_50c77.jpg?v=1723283778"
                                sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                alt="Veirdo Original Navy Oversized Typography Brand Printed Tshirt"
                                class="image-placeholder-bg h-full w-full product-card-carousel-image rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] carousel-image-index-0"
                                width="1200" loading="lazy" height="1600" index="0" type="pdp-main-img">
                            </a>
                          </div>
                        </figure>

                        <figure class="flex aspect-[2/3] cursor-pointer  product-figure">
                          <div href="all-product.php" data-id="6798157021239"
                            data-name="VmVpcmRvIE9yaWdpbmFsIE5hdnkgT3ZlcnNpemVkIFR5cG9ncmFwaHkgQnJhbmQgUHJpbnRlZCBUc2hpcnQ="
                            data-price="549" data-href="/products/veirdo-originals-oversized-t-shirt"
                            data-product_index="2" class=" w-full h-full">
                            <a href="product.php">
                              <img srcset="//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976&width=165 165w,//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976&width=360 360w,//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976&width=533 533w,//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976&width=720 720w,//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976&width=940 940w,//veirdo.in/cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e6790.jpg?v=1722688976 980w" src="cdn/shop/files/01_d0ca3dfa-9917-43d3-b0e0-57329b0e67902835.jpg?v=1722688976"
                                sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                alt="Veirdo Original Navy Oversized Typography Brand Printed Tshirt"
                                class="image-placeholder-bg h-full w-full product-card-carousel-image rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] carousel-image-index-1"
                                width="980" loading="lazy" height="1257" index="1" type="pdp-main-img">
                            </a>
                          </div>
                        </figure>

                        <figure class="flex aspect-[2/3] cursor-pointer  product-figure">
                          <div href="all-product.php" data-id="6798157021239"
                            data-name="VmVpcmRvIE9yaWdpbmFsIE5hdnkgT3ZlcnNpemVkIFR5cG9ncmFwaHkgQnJhbmQgUHJpbnRlZCBUc2hpcnQ="
                            data-price="549" data-href="/products/veirdo-originals-oversized-t-shirt"
                            data-product_index="3" class=" w-full h-full">
                            <a href="product.php">
                              <img srcset="//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976&width=165 165w,//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976&width=360 360w,//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976&width=533 533w,//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976&width=720 720w,//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976&width=940 940w,//veirdo.in/cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff7.jpg?v=1722688976 980w" src="cdn/shop/files/03_de151da3-7a6b-489c-8bbb-d1e4b1632ff72835.jpg?v=1722688976"
                                sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                alt="Veirdo Original Navy Oversized Typography Brand Printed Tshirt"
                                class="image-placeholder-bg h-full w-full product-card-carousel-image rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] carousel-image-index-2"
                                width="980" loading="lazy" height="1257" index="2" type="pdp-main-img">
                            </a>
                          </div>
                        </figure>

                        <figure class="flex aspect-[2/3] cursor-pointer  product-figure">
                          <div href="all-product.php" data-id="6798157021239"
                            data-name="VmVpcmRvIE9yaWdpbmFsIE5hdnkgT3ZlcnNpemVkIFR5cG9ncmFwaHkgQnJhbmQgUHJpbnRlZCBUc2hpcnQ="
                            data-price="549" data-href="/products/veirdo-originals-oversized-t-shirt"
                            data-product_index="4" class=" w-full h-full">
                            <a href="product.php">
                              <img srcset="//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976&width=165 165w,//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976&width=360 360w,//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976&width=533 533w,//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976&width=720 720w,//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976&width=940 940w,//veirdo.in/cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd3.jpg?v=1722688976 980w" src="cdn/shop/files/04_d38b9bc8-d189-4853-a8b4-7d2e677cabd32835.jpg?v=1722688976"
                                sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                alt="Veirdo Original Navy Oversized Typography Brand Printed Tshirt"
                                class="image-placeholder-bg h-full w-full product-card-carousel-image rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] carousel-image-index-3"
                                width="980" loading="lazy" height="1257" index="3" type="pdp-main-img">
                            </a>
                          </div>
                        </figure>

                        <figure class="flex aspect-[2/3] cursor-pointer  product-figure">
                          <div href="all-product.php" data-id="6798157021239"
                            data-name="VmVpcmRvIE9yaWdpbmFsIE5hdnkgT3ZlcnNpemVkIFR5cG9ncmFwaHkgQnJhbmQgUHJpbnRlZCBUc2hpcnQ="
                            data-price="549" data-href="/products/veirdo-originals-oversized-t-shirt"
                            data-product_index="5" class=" w-full h-full">
                            <a href="product.php">
                              <img srcset="//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977&width=165 165w,//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977&width=360 360w,//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977&width=533 533w,//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977&width=720 720w,//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977&width=940 940w,//veirdo.in/cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972.jpg?v=1722688977 980w" src="cdn/shop/files/02_e41fba9f-9212-43db-b43d-28b43a51c972c4ad.jpg?v=1722688977"
                                sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                                alt="Veirdo Original Navy Oversized Typography Brand Printed Tshirt"
                                class="image-placeholder-bg h-full w-full product-card-carousel-image rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] carousel-image-index-4"
                                width="980" loading="lazy" height="1257" index="4" type="pdp-main-img">
                            </a>
                          </div>
                        </figure>

                      </div>
                    </div>




                    <div
                      class="product-image-tag  product-image-tag  flex items-center absolute h-4 top-2 lg:top-4 p-[2px] lg:p-1 rounded-sm z-20   left-[1%]  "
                      data-ga-view-custom data-ga-view-info-custom="Bestseller_Tag_View_PLP">
                      <span class="uppercase text-[7px] lg:text-sm font-[ibmSemiBold] text-center text-[#00AA68]  ">

                        Best Seller

                      </span>
                    </div>






                    <div
                      class="rating-section absolute  !left-[0.625rem] lg:!left-[0.75rem] !bottom-[0.625rem] lg:!bottom-[0.75rem]">
                      <div class="flex gap-[2px] items-center justify-center">

                        <a href="./product.php">
                        <img src="cdn/shop/t/64/assets/icon-star5226.svg?v=116753354371702194131706021711"
                        loading="lazy" alt="rating icon" width="15" height="15" class="lg:mt-1">
                        </a>

                        <div
                          class="flex items-baseline justify-center gap-1 text-[11px] lg:text-sm font-[ibmMedium] text-[#51575C]">
                          <span>4.6</span>
                          <span class="bg-[#AFB2B4] w-[2px] h-[9px] lg:h-[11px]"></span>
                          <span>81</span>

                        </div>
                      </div>
                    </div>





                    <div
                      class="color-variant-section absolute !right-[0.625rem] lg:!right-[0.75rem] !bottom-[0.625rem] lg:!bottom-[0.75rem] z-[1]">
                      <div class="flex items-center h-full ">
                        <div class="flex gap-[3px] h-full">
                          <div class="flex justify-center items-center lg:mt-0.5  w-6 ">
                            <div class="flex first-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class="bg_color_navy border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>







                            <div class="flex second-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class=" bg_color_red border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>






                          </div>

                          <span class="text-[#51575C] text-xs font-[ibmMedium] flex items-center">
                            5
                          </span>
                        </div>
                      </div>
                    </div>



                  </div>


                  <section id="product-info" class=" pt-0 lg:pt-3 pb-2  px-2  lg:px-3 ">
                    <div class="product-price-name-container flex flex-col gap-[2px]">


                      <section class="flex gap-1 lg:gap-2 items-baseline flex-wrap">
                        <span class="font-[ibmSemiBold]   text-sm   lg:text-base text-[#131814] ">₹549</span>

                        <span
                          class=" text-[11px]   lg:text-sm font-[ibmMedium] text-[#AFB2B4] line-through">₹1,199</span>
                        <span class="font-[ibmMedium]  text-[10px]  lg:text-sm text-[#00B53A] uppercase">54% off
                        </span>

                      </section>

                      <h3
                        class="max-w-prose text-copy w-full overflow-hidden whitespace-nowrap text-ellipsis font-[ibmRegular] text-[#8A8E92] text-xs lg:text-sm">
                        Veirdo Original Navy Oversized Typography Brand Printed Tshirt
                      </h3>
                    </div>

                    <div class="mt-1 mb-1.5">


                      <div
                        class="price-drop hidden cart-item  rounded-l-full lowest-price  lp-cart-item  flex gap-1 items-center w-max"
                        data-ga-view-custom data-ga-view-info-custom="PLP_Lowest_Price">


                        <img src="cdn/shop/t/64/assets/icon-price-dropf47f.svg?v=150853337221706652561714397178"
                          loading="lazy" width="10" height="12" alt="pricedrop_icon" class="lg:w-3 lg:h-6">



                        <div class="font-[ibmMedium] text-xs lg:text-sm text-[#2063A1]">Lowest price in last 30 days
                        </div>

                      </div>





                    </div>
                  </section>
                </div>
              </div>




              <div class="card-add-to-bag-wishlist-container  flex border-t-[0.5px] border-t-[#c9cbcc]">
                <button data-product-section-name="PLP-Oversized-Printed-T-shirts" data-product-index="2"
                  data-total-variants="1"
                  class="product-card-add-to-bag  cursor-pointer  flex p-2 lg:p-4 items-center justify-center flex-1 border-r-[0.5px] border-r-[#c9cbcc]"
                  data-product-handle="veirdo-originals-oversized-t-shirt">
                  <span class="text-[11px] lg:text-sm font-[soraSemiBold]  text-[#131814]    uppercase">

                    ADD TO CART

                  </span>
                </button>
                <button data-product-section-name="PLP-Oversized-Printed-T-shirts"
                  class="product-card-wishlist flex py-0 px-3 lg:px-4 justify-center items-center self-stretch">
                  <div class="flits-collection-page-wishlist-button" style="position:relative;opacity:0;"
                    data-flits-product-handle="veirdo-originals-oversized-t-shirt"
                    data-flits-product-id="6798157021239"
                    data-flits-product-title="Veirdo Original Navy Oversized Typography Brand Printed Tshirt"
                    data-flits-product-image="cdn/shop/files/18_50c77.jpg?v=1723283778"
                    data-flits-product-wsl-count="1391"></div>
                  <img src="cdn/shop/t/64/assets/icon-wishlistaa8e.svg?v=113452544103302444001706007531" width="20"
                    height="20" alt="wishlist icon" loading="lazy">
                </button>
              </div>



            </section>

            <section data-product-id="6783439110199"
              class="product-card-container flex h-full flex-col rounded-xl lg:rounded-2xl border-[0.5px] border-[#c9cbcc] cursor-pointer justify-between   justify-between">
              <div class="flex flex-col relative">
                <div data-event_name="PLP_STYLE_CLICK" href="../products/originals-beige-oversized-t-shirt.html"
                  data-href="/products/originals-beige-oversized-t-shirt" class="product_link" data-product-tag="NA"
                  data-id="6783439110199"
                  data-name="T3JpZ2luYWxzIEJlaWdlIE92ZXJzaXplZCBDaGVzdCBHcmFwaGljIFByaW50ZWQgVHNoaXJ0"
                  data-price="549" data-item_list_name="T3ZlcnNpemVkIFByaW50ZWQgVC1zaGlydHM=" data-product_index="3"
                  data-item_variant="Uw==">
                  <div class="container relative lg:hidden">
                    <div id="image-container"
                      class="plp-carousel flex p-[2px] lg:hidden w-full relative  image-container  full-product-slider  aspect-[2/3] ">



                      <figure class="w-full flex  block  ">



                        <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=165 165w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=360 360w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=533 533w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=720 720w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=940 940w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=1066 1066w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230 1080w" src="cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93bced.jpg?v=1732275230"
                          sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                          alt="Originals Beige Oversized Chest Graphic Printed Tshirt"
                          class="w-full h-full object-cover image-placeholder-bg rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] aspect-[2/3]"
                          width="1080" height="1080" loading="lazy">
                        

                      </figure>


                      <figure class="w-full flex  card-product-media hidden  ">



                        <img onerror="imageError(this)" srcset="//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=165 165w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=360 360w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=533 533w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=720 720w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=940 940w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=1066 1066w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896 1200w" src="cdn/shop/files/bck2b69.jpg?v=1722842896"
                          sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                          alt="Originals Beige Oversized Chest Graphic Printed Tshirt"
                          class="w-full h-full object-cover image-placeholder-bg rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] aspect-[2/3]"
                          width="1200" height="1600" loading="lazy">
                        

                      </figure>


                    </div>


                    <div
                      class="product-image-tag  product-image-tag  flex items-center absolute h-4 top-2 lg:top-4 p-[2px] lg:p-1 rounded-sm z-20 product-card-tag  left-[1%]  "
                      data-ga-view-custom data-ga-view-info-custom="Bestseller_Tag_View_PLP">
                      <span class="uppercase text-[7px] lg:text-sm font-[ibmSemiBold] text-center text-[#00AA68]  ">

                        Best Seller

                      </span>
                    </div>




                    <div class="rating-section absolute  !left-[0.625rem] !bottom-[0.625rem]">
                      <div class="flex gap-[2px] items-center justify-center">
                        <img src="cdn/shop/t/64/assets/icon-star5226.svg?v=116753354371702194131706021711"
                          loading="lazy" alt="rating icon" width="15" height="15" class="lg:mt-1">
                        <div
                          class="flex items-baseline justify-center gap-1 text-[11px] lg:text-sm font-[ibmMedium] text-[#51575C]">
                          <span>4.6</span>
                          <span class="bg-[#AFB2B4] w-[2px] h-[9px] lg:h-[11px]"></span>
                          <span>140</span>

                        </div>
                      </div>
                    </div>




                    <div class="color-variant-section absolute !right-[0.625rem] !bottom-[0.625rem] z-[1]">
                      <div class="flex items-center h-full ">
                        <div class="flex gap-[3px] h-full">
                          <div class="flex justify-center items-center lg:mt-0.5  w-6 ">
                            <div class="flex first-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class="bg_color_beige border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>







                            <div class="flex second-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class=" bg_color_green border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>






                          </div>

                          <span class="text-[#51575C] text-xs font-[ibmMedium] flex items-center">
                            2
                          </span>
                        </div>
                      </div>
                    </div>



                  </div>



                  <div id="image-container" class=" p-1 w-full hidden lg:flex relative overflow-hidden ">

                    <div class="container product-card-main-image-container">
                      <div
                        class="product-slider-container product-listing-main-image product-image-6783439110199 relative  image-container flex gap-4 "
                        style="max-width: 100vw;">


                        <figure class="flex aspect-[2/3] cursor-pointer  product-figure">
                          <div href="../products/originals-beige-oversized-t-shirt.html" data-id="6783439110199"
                            data-name="T3JpZ2luYWxzIEJlaWdlIE92ZXJzaXplZCBDaGVzdCBHcmFwaGljIFByaW50ZWQgVHNoaXJ0"
                            data-price="549" data-href="/products/originals-beige-oversized-t-shirt"
                            data-product_index="1" class=" w-full h-full">
                            <img srcset="//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=165 165w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=360 360w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=533 533w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=720 720w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=940 940w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230&width=1066 1066w,//veirdo.in/cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93.jpg?v=1732275230 1080w" src="cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93bced.jpg?v=1732275230"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Originals Beige Oversized Chest Graphic Printed Tshirt"
                              class="image-placeholder-bg h-full w-full product-card-carousel-image rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] carousel-image-index-0"
                              width="1080" loading="lazy" height="1080" index="0" type="pdp-main-img">
                          </div>
                        </figure>

                        <figure class="flex aspect-[2/3] cursor-pointer  product-figure">
                          <div href="../products/originals-beige-oversized-t-shirt.html" data-id="6783439110199"
                            data-name="T3JpZ2luYWxzIEJlaWdlIE92ZXJzaXplZCBDaGVzdCBHcmFwaGljIFByaW50ZWQgVHNoaXJ0"
                            data-price="549" data-href="/products/originals-beige-oversized-t-shirt"
                            data-product_index="2" class=" w-full h-full">
                            <img srcset="//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=165 165w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=360 360w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=533 533w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=720 720w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=940 940w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896&width=1066 1066w,//veirdo.in/cdn/shop/files/bck.jpg?v=1722842896 1200w" src="cdn/shop/files/bck2b69.jpg?v=1722842896"
                              sizes="(min-width: 1200px) 267px, (min-width: 990px) calc((100vw - 130px) / 4), (min-width: 750px) calc((100vw - 120px) / 3), calc((100vw - 35px) / 2)"
                              alt="Originals Beige Oversized Chest Graphic Printed Tshirt"
                              class="image-placeholder-bg h-full w-full product-card-carousel-image rounded-lg lg:rounded-xl border-[#EEE] border-[0.5px] carousel-image-index-1"
                              width="1200" loading="lazy" height="1600" index="1" type="pdp-main-img">
                          </div>
                        </figure>

                      </div>
                    </div>



                    <div
                      class="product-image-tag  product-image-tag  flex items-center absolute h-4 top-2 lg:top-4 p-[2px] lg:p-1 rounded-sm z-20   left-[1%]  "
                      data-ga-view-custom data-ga-view-info-custom="Bestseller_Tag_View_PLP">
                      <span class="uppercase text-[7px] lg:text-sm font-[ibmSemiBold] text-center text-[#00AA68]  ">

                        Best Seller

                      </span>
                    </div>




                    <div
                      class="rating-section absolute  !left-[0.625rem] lg:!left-[0.75rem] !bottom-[0.625rem] lg:!bottom-[0.75rem]">
                      <div class="flex gap-[2px] items-center justify-center">
                        <a href="./product.php">
                        <img src="cdn/shop/t/64/assets/icon-star5226.svg?v=116753354371702194131706021711"
                        loading="lazy" alt="rating icon" width="15" height="15" class="lg:mt-1">
                        </a>
                        <div
                          class="flex items-baseline justify-center gap-1 text-[11px] lg:text-sm font-[ibmMedium] text-[#51575C]">
                          <span>4.6</span>
                          <span class="bg-[#AFB2B4] w-[2px] h-[9px] lg:h-[11px]"></span>
                          <span>140</span>

                        </div>
                      </div>
                    </div>




                    <div
                      class="color-variant-section absolute !right-[0.625rem] lg:!right-[0.75rem] !bottom-[0.625rem] lg:!bottom-[0.75rem] z-[1]">
                      <div class="flex items-center h-full ">
                        <div class="flex gap-[3px] h-full">
                          <div class="flex justify-center items-center lg:mt-0.5  w-6 ">
                            <div class="flex first-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class="bg_color_beige border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>







                            <div class="flex second-color-variant-swatch relative -top-[45%] lg:-top-[40%]">
                              <span
                                class=" bg_color_green border-[1px] border-[#F2F2F2] w-[14px] h-[14px] lg:w-3.5 lg:h-3.5 rounded-[50%] absolute"></span>
                            </div>






                          </div>

                          <span class="text-[#51575C] text-xs font-[ibmMedium] flex items-center">
                            2
                          </span>
                        </div>
                      </div>
                    </div>



                  </div>


                  <section id="product-info" class=" pt-0 lg:pt-3 pb-2  px-2  lg:px-3 ">
                    <div class="product-price-name-container flex flex-col gap-[2px]">


                      <section class="flex gap-1 lg:gap-2 items-baseline flex-wrap">
                        <span class="font-[ibmSemiBold]   text-sm   lg:text-base text-[#131814] ">₹549</span>

                        <span
                          class=" text-[11px]   lg:text-sm font-[ibmMedium] text-[#AFB2B4] line-through">₹1,199</span>
                        <span class="font-[ibmMedium]  text-[10px]  lg:text-sm text-[#00B53A] uppercase">54% off
                        </span>

                      </section>

                      <h3
                        class="max-w-prose text-copy w-full overflow-hidden whitespace-nowrap text-ellipsis font-[ibmRegular] text-[#8A8E92] text-xs lg:text-sm">
                        Originals Beige Oversized Chest Graphic Printed Tshirt
                      </h3>
                    </div>

                    <div class="mt-1 mb-1.5">


                      <div
                        class="price-drop hidden cart-item  rounded-l-full lowest-price  lp-cart-item  flex gap-1 items-center w-max"
                        data-ga-view-custom data-ga-view-info-custom="PLP_Lowest_Price">


                        <img src="cdn/shop/t/64/assets/icon-price-dropf47f.svg?v=150853337221706652561714397178"
                          loading="lazy" width="10" height="12" alt="pricedrop_icon" class="lg:w-3 lg:h-6">



                        <div class="font-[ibmMedium] text-xs lg:text-sm text-[#2063A1]">Lowest price in last 30 days
                        </div>

                      </div>





                    </div>
                  </section>
                </div>
              </div>




              <div class="card-add-to-bag-wishlist-container  flex border-t-[0.5px] border-t-[#c9cbcc]">
                <button data-product-section-name="PLP-Oversized-Printed-T-shirts" data-product-index="3"
                  data-total-variants="1"
                  class="product-card-add-to-bag  cursor-pointer  flex p-2 lg:p-4 items-center justify-center flex-1 border-r-[0.5px] border-r-[#c9cbcc]"
                  data-product-handle="originals-beige-oversized-t-shirt">
                  <span class="text-[11px] lg:text-sm font-[soraSemiBold]  text-[#131814]    uppercase">

                    ADD TO CART

                  </span>
                </button>
                <button data-product-section-name="PLP-Oversized-Printed-T-shirts"
                  class="product-card-wishlist flex py-0 px-3 lg:px-4 justify-center items-center self-stretch">
                  <div class="flits-collection-page-wishlist-button" style="position:relative;opacity:0;"
                    data-flits-product-handle="originals-beige-oversized-t-shirt"
                    data-flits-product-id="6783439110199"
                    data-flits-product-title="Originals Beige Oversized Chest Graphic Printed Tshirt"
                    data-flits-product-image="cdn/shop/files/5_1_45b82bbc-f648-4ca5-a2cd-97f50e53be93bced.jpg?v=1732275230"
                    data-flits-product-wsl-count="2328"></div>
                  <img src="cdn/shop/t/64/assets/icon-wishlistaa8e.svg?v=113452544103302444001706007531" width="20"
                    height="20" alt="wishlist icon" loading="lazy">
                </button>
              </div>



            </section>


          </article>

          <div class="loadingIcon hidden my-7 lg:my-10 ">
            <img class="mx-auto"
              src="cdn/s/files/1/1982/7331/files/veirdo_logo4169.gif?v=1704881300"
              alt="loading icon" width="86" height="56" loading="lazy">
          </div>
          <div id="load-more-products" class="flex justify-center items-center">
            <a
              href="mens-oversized-t-shirts724f.html?page=2&amp;section_id=template--14826243653687__product-grid"></a>
          </div>

        </section>
        <!-- Products section -->
      </section>
    </main>

    <!-- Read More about Oversized Printed T-shirts -->
    <div class="lg:mx-[150px] border-y lg:border lg:rounded-lg border-[#E9EAF0] py-4 px-4 lg:px-6 lg:mb-12">
      <details class="collection-description">
        <summary>
          <div class="flex justify-between text-sm lg:text-lg font-[ibmMedium] items-center cursor-pointer">
            <p>Read More about Oversized Printed T-shirts</p>
            <span class="icon-main arrow down"></span>
          </div>
        </summary>
        <div class="collection-description-content py-4">
          <h2 dir="ltr"><strong>Big on Comfort, Big on Style: Shop Oversized T-shirts for Men</strong></h2>
          <p dir="ltr"><span>Welcome to the world of Veirdo, where fashion meets the unconventional. Step into a realm
              where oversized isn't just a style choice, it's a statement. Our oversized T-shirt redefines comfort and
              style, blending the boundaries between bold and casual. Whether you're a maverick millennial seeking to
              defy norms or a Gen-Z reformer looking to make a mark, our oversized tees are your canvas. Dive into a
              world where fashion knows no bounds and self-expression reigns supreme.</span></p>
          <h2 dir="ltr"><strong>The Rise of T-shirts in the Fashion Industry</strong></h2>
          <p dir="ltr"><span>The evolution of the T-shirt from a humble undergarment to a cultural icon is a
              fascinating journey that reflects the changing landscape of fashion and society. Originally designed for
              practicality, the T-shirt's transition into a fashion staple is a testament to its versatility and
              universal appeal.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Tracing Back History</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>The T-shirt's origins can be traced back to the late 19th century when labourers would
              cut their jumpsuits in half to stay cool in warmer weather. The first manufactured T-shirt was
              introduced between the Spanish-American War and 1913 when the U.S. Navy issued them as standard
              undershirts. However, it wasn't until F. Scott Fitzgerald's use of the term "T-shirt" in his novel "This
              Side of Paradise" in 1920 that the term entered the English dictionary.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>T-shirts as a Symbol of Defiance and Individuality</strong>
              </h3>
            </li>
          </ul>
          <p dir="ltr"><span>The rise of oversized T-shirts into mainstream fashion began in the 1950s, thanks to
              cultural icons like Marlon Brando and James Dean who popularised it as a stand-alone outerwear garment.
              This shift in perception was symbolic of a broader cultural rebellion, making the T-shirt a symbol of
              defiance and individuality.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Birth of Graphic T-shirts</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>The 1950s and 1960s also saw the birth of graphic T-shirts and T-shirt printing, paving
              the way for the T-shirt to become a powerful messaging platform. The punk movement of the 1970s further
              solidified the T-shirt's role as a medium for expressing ideas and beliefs, leading The New York Times
              to dub it "the medium for the message.”</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>T-shirts in Contemporary Fashion</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>Today, the T-shirt remains a wardrobe staple for people around the world, transcending
              age, gender, and cultural barriers. Its ability to convey messages ranging from political statements to
              pop culture references has cemented its place in fashion history.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Going Beyond With Printed T-shirts</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>The rise of custom-printed T-shirts has further democratised the medium, allowing
              individuals to create unique, personalised garments that reflect their identity and interests. Whether
              worn as a fashion statement or a form of self-expression, the T-shirt continues to be a blank canvas
              that speaks volumes.</span></p>
          <h2 dir="ltr"><strong>How Should an Oversized T-shirt Fit?</strong></h2>
          <p dir="ltr"><span>An oversized T-shirt is all about that relaxed, effortless vibe. But it doesn't mean
              drowning in fabric. Here's what to look for:</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Roomy But Not Drowning</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>The T-shirt should be noticeably looser than your regular fit, offering a relaxed feel
              without overwhelming your frame. You want it to drape comfortably without feeling like a tent.</span>
          </p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Shoulder Drop</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>The shoulder seam should fall slightly below your natural shoulder line, creating that
              classic oversized look. This detail adds a casual and effortless charm to the overall silhouette.</span>
          </p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Boxy Silhouette</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>The overall shape should be boxy rather than long and narrow. A boxy silhouette is the
              defining characteristic of an oversized T-shirt. Unlike a classic, tapered fit that contours the body, a
              boxy tee maintains a straight, rectangular shape from shoulders to hem.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Length</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>The T-shirt should hit around mid-hip to the top of your thighs. Too short and it loses
              the oversized effect, too long and it might look overwhelming.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Sleeve length</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>The sleeves should extend past your elbow, ideally to your mid-forearm. Remember, the key
              to an oversized T-shirt is balance. While it should be roomy, it should also complement your body shape
              and create a stylish silhouette.</span></p>
          <h2 dir="ltr"><strong>More Than Just a Tee: Experience Oversized Comfort and On-point Style With
              Veirdo</strong></h2>
          <p dir="ltr"><span>Let's dive into what makes Veirdo's tees a must-have in your wardrobe. From their unique
              designs to the unmatched comfort, these tees are worth every bit of your attention.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Quality Assurance</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>Veirdo's oversized T-shirts are made from premium materials, ensuring superior comfort
              and durability. Each fabric is carefully selected to provide a luxurious feel while maintaining
              long-lasting wearability. Their impeccable stitching guarantees a perfect fit that stands the test of
              time. Our attention to detail ensures that every seam is flawlessly executed, enhancing the overall
              quality and longevity of our oversized tees.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Trendsetting Designs</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>Our collection features cutting-edge designs to cater to every style preference. We are
              constantly innovating and exploring new trends to ensure that our customers are always ahead of the
              fashion curve. Whether you prefer bold graphics or subtle patterns, Veirdo has the perfect oversized tee
              to elevate your wardrobe.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Versatile Choices</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>From timeless classics to trendy prints, Veirdo offers the best-oversized T-shirts for
              all occasions. Whether you're dressing up for a night out or keeping it casual for a day at the beach,
              our versatile collection has something for everyone. With a wide range of colours, patterns, and styles
              designed to give you a fresh look, you can easily find the perfect oversized tee to suit your unique
              style.</span></p>
          <h2 dir="ltr"><strong>Unlocking Style for Men: 5 Ways to Wear an Oversized T-shirt With Flair</strong></h2>
          <p dir="ltr"><span>Unlock your style potential with these 5 creative ways to wear an oversized T-shirt. From
              casual chic to street-smart looks, elevate your fashion game with effortless flair.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>House Party Vibes</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>Make this </span><strong><a href="../products/oversized-royal-blue-graphic-tshirt.html"
                data-mce-href="../products/oversized-royal-blue-graphic-tshirt.html">back-printed oversized
                T-shirt</a></strong><span> from Veirdo, the star of the show. Layer a denim jacket over it for an
              effortless cool vibe. The jacket adds a touch of rugged charm, while the T-shirt remains the focal point
              of your outfit. Complete the look with a statement necklace or a cool beanie to inject your personality
              into the ensemble.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Campus Casual</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>For a laid-back yet stylish campus look, try partially tucking this Veirdo </span><a
              href="../products/black-eye-oversized-t-shirt.html"
              data-mce-href="../products/black-eye-oversized-t-shirt.html"><span><strong>black graphic oversized
                  T-shirt</strong></span></a><span> into your favourite pair of jeans. This simple styling trick
              creates a balanced silhouette and adds visual interest. To maintain a clean and modern aesthetic, opt
              for a pair of white sneakers to complement the casual vibe.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Fest Fashion</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>Embrace your adventurous side with this cool Veirdo </span><a
              href="../products/youngblood-print-black-mens-tshirt.html"
              data-mce-href="../products/youngblood-print-black-mens-tshirt.html"><span><strong>young blood print
                  black oversized T-shirt</strong></span></a><span> at a music festival. Layer it with a graphic or
              denim vest to add depth and dimension to your outfit. Experiment with a Cuban link chain, stylish
              sunglasses, and a hat to complete the festival-ready look. Unleash your creativity and let your personal
              style shine through.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><span>Road Trip Ready</span></h3>
            </li>
          </ul>
          <p dir="ltr"><span>An oversized T-shirt is the perfect companion for a road trip. Opt for Veirdo </span><a
              href="../products/casual-lemonade-oversized-t-shirt.html"
              data-mce-href="../products/casual-lemonade-oversized-t-shirt.html"><span><strong>oversized graphic
                  printed T-shirt</strong></span></a><span>. This round-neck tee is soft and crafted from breathable
              fabric for ultimate comfort. Pair it with joggers or comfy shorts for a relaxed yet stylish look. Layer
              a lightweight jacket for unpredictable weather and don't forget your favourite sneakers for easy on and
              off.</span></p>
          <ul>
            <li dir="ltr" aria-level="1" style="font-weight: bold;" data-mce-style="font-weight: bold;">
              <h3 dir="ltr" role="presentation"><strong>Errand Day Essentials</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>For those busy errand days, simplicity is key. Pair this </span><strong><a
                href="../products/mens-red-plain-oversizedtshirt.html"
                data-mce-href="../products/mens-red-plain-oversizedtshirt.html">red solid oversized
                T-shirt</a></strong><span> from Veirdo with your favourite jeans and a clean pair of sneakers. Add a
              baseball cap for a casual yet put-together look. If you need to add a layer, a lightweight bomber jacket
              can elevate your outfit.</span></p>
          <h2 dir="ltr"><strong>Which Size Should I Select for an Oversized Look?</strong></h2>
          <p dir="ltr"><span>An oversized look is all about comfort and style, giving you a relaxed and laid-back
              appearance. The key is to ensure that the garment is loose without looking sloppy. Here’s how to achieve
              that:</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Check the Size Chart</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>Veirdo provides detailed size charts for their products. Refer to these charts to
              understand the dimensions of each size. For an oversized fit, you typically want to go one or two sizes
              up from your regular size. For example, if you usually wear a medium, try a large or extra-large for
              that perfect oversized look.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Consider the Fit</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>Different brands may have varying definitions of "oversized." Veirdo's oversized
              T-shirts, for example, are designed to be roomy and comfortable. Check the product descriptions and
              customer reviews to get an idea of how the garment fits. </span><strong><a
                href="../pages/size_chart.html" data-mce-href="../pages/size_chart.html">Veirdo's size
                chart</a></strong><span> can be particularly helpful in making an informed decision.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Measure Yourself</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><span>Take accurate measurements of your chest, shoulders, and length. Compare these
              measurements with the size chart provided by the brand. For an oversized look, add a few extra inches to
              your measurements to ensure a looser fit.</span></p>
          <h2 dir="ltr" style="text-align: left;" data-mce-style="text-align: left;"><strong>Explore Our Best-sellers
              Today</strong></h2>
          <div dir="ltr" align="left">
            <table style="margin-left: auto; margin-right: auto;"
              data-mce-style="margin-left: auto; margin-right: auto;">
              <colgroup>
                <col width="466">
                <col width="91">
              </colgroup>
              <tbody>
                <tr style="text-align: center;" data-mce-style="text-align: center;">
                  <td>
                    <p dir="ltr"><strong>Oversized T-shirts for Men</strong></p>
                  </td>
                  <td>
                    <p dir="ltr"><strong>Price</strong></p>
                  </td>
                </tr>
                <tr style="text-align: center;" data-mce-style="text-align: center;">
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p dir="ltr"><a href="../products/originals-beige-oversized-t-shirt.html"
                        data-mce-href="../products/originals-beige-oversized-t-shirt.html"><span>Originals Beige
                          Oversized Chest Graphic Printed Tshirt</span></a></p>
                  </td>
                  <td>
                    <p dir="ltr"><span>₹ 1,199</span></p>
                  </td>
                </tr>
                <tr style="text-align: center;" data-mce-style="text-align: center;">
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p dir="ltr"><a href="../products/doodle-print-oversized-t-shirt.html"
                        data-mce-href="../products/doodle-print-oversized-t-shirt.html"><span>Doodle Black Oversized
                          Back Graphic Printed Tshirt</span></a></p>
                  </td>
                  <td>
                    <p dir="ltr"><span>₹ 1,199</span></p>
                  </td>
                </tr>
                <tr style="text-align: center;" data-mce-style="text-align: center;">
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p dir="ltr"><a href="../products/hustle-blue-oversized-tshirt.html"
                        data-mce-href="../products/hustle-blue-oversized-tshirt.html"><span>HUSTLE Blue Oversized
                          Graphic Back Printed Tshirt</span></a></p>
                  </td>
                  <td>
                    <p dir="ltr"><span>₹ 1,199</span></p>
                  </td>
                </tr>
                <tr style="text-align: center;" data-mce-style="text-align: center;">
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p dir="ltr"><a href="../products/teddy-printed-oversized-t-shirt.html"
                        data-mce-href="../products/teddy-printed-oversized-t-shirt.html"><span>Teddy Black Oversized
                          Back Graphic Printed Tshirt</span></a></p>
                  </td>
                  <td>
                    <p dir="ltr"><span>₹ 1,199</span></p>
                  </td>
                </tr>
                <tr style="text-align: center;" data-mce-style="text-align: center;">
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p dir="ltr"><a href="../products/hustle-orange-oversized-tshirt.html"
                        data-mce-href="../products/hustle-orange-oversized-tshirt.html"><span>HUSTLE Orange Oversized
                          Back Graphic Printed Tshirt</span></a></p>
                  </td>
                  <td>
                    <p dir="ltr"><span>₹ 1,199</span></p>
                  </td>
                </tr>
                <tr style="text-align: center;" data-mce-style="text-align: center;">
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p dir="ltr"><a href="../products/veirdo-originals-oversized-t-shirt.html"
                        data-mce-href="../products/veirdo-originals-oversized-t-shirt.html"><span>Veirdo Original Navy
                          Oversized Typography Brand Printed Tshirt</span></a></p>
                  </td>
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p style="text-align: center;" dir="ltr" data-mce-style="text-align: center;"><span>₹ 1,199</span>
                    </p>
                  </td>
                </tr>
                <tr style="text-align: center;" data-mce-style="text-align: center;">
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p dir="ltr"><a href="../products/brown-pocket-print-oversized-t-shirt.html"
                        data-mce-href="../products/brown-pocket-print-oversized-t-shirt.html"><span>Go Veirdo Brown
                          Oversized Pocket Graphic Printed Tshirt</span></a></p>
                  </td>
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p style="text-align: center;" dir="ltr" data-mce-style="text-align: center;"><span>₹ 1,199</span>
                    </p>
                  </td>
                </tr>
                <tr style="text-align: center;" data-mce-style="text-align: center;">
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p dir="ltr"><a href="../products/oversized-royal-blue-graphic-tshirt.html"
                        data-mce-href="../products/oversized-royal-blue-graphic-tshirt.html"><span>Veirdo Blue
                          Oversized Back Graphic Printed Tshirt</span></a></p>
                  </td>
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p style="text-align: center;" dir="ltr" data-mce-style="text-align: center;"><span>₹ 1,199</span>
                    </p>
                  </td>
                </tr>
                <tr style="text-align: center;" data-mce-style="text-align: center;">
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p dir="ltr"><a href="../products/beast-tiger-oversized-t-shirt.html"
                        data-mce-href="../products/beast-tiger-oversized-t-shirt.html"><span>Tiger Black Oversized
                          Back Graphic Printed Tshirt</span></a></p>
                  </td>
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p style="text-align: center;" dir="ltr" data-mce-style="text-align: center;"><span>₹ 1,199</span>
                    </p>
                  </td>
                </tr>
                <tr>
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p dir="ltr"><a href="../products/heaven-oversized-blue-t-shirt.html"
                        data-mce-href="../products/heaven-oversized-blue-t-shirt.html"><span>Heaven Blue Oversized
                          Chest Graphic Printed Tshirt</span></a></p>
                  </td>
                  <td style="text-align: left;" data-mce-style="text-align: left;">
                    <p dir="ltr" style="text-align: center;" data-mce-style="text-align: center;"><span>₹ 1,199</span>
                    </p>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <h2 dir="ltr"><strong>Frequently Asked Questions</strong></h2>
          <ul>
            <li dir="ltr" aria-level="1" style="font-weight: bold;" data-mce-style="font-weight: bold;">
              <h3 dir="ltr" role="presentation"><strong>What distinguishes Veirdo’s oversized T-shirts from regular
                  sizes?</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><strong>A.</strong><span> The main difference between oversized and regular sizes is the fit.
              They are intentionally designed to have a looser, more relaxed fit compared to regular sizes. This
              oversized fit gives a more casual and laid-back look.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>How do I ascertain the correct size for Veirdo’s oversized
                  T-shirts?</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><strong>A.</strong><span> To determine the right size for an oversized T-shirt, it's best to
              refer to the brand's size chart. However, if you prefer a more relaxed fit, you may consider sizing up
              from your regular size.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>What styles and designs are available in Veirdo's collection
                  of oversized T-shirts?</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><strong>A.</strong><span> The oversized T-shirt collection typically includes a variety of
              styles and designs, ranging from basic solid colours to bold prints and graphics. You can also find
              different necklines, sleeve lengths, and embellishments to suit your preference.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Are there different colours and patterns to choose from in the
                  oversized collection?</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><strong>A.</strong><span> Yes, oversized T-shirts are available in a wide range of colours and
              patterns. From classic neutrals to vibrant hues and from simple solids to bold patterns, there's
              something for everyone's taste.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>What materials are commonly used in oversized
                  T-shirts?</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><strong>A.</strong><span> Common materials used in oversized T-shirts include cotton and cotton
              blends. These materials are chosen for their softness, breathability, and ability to provide warmth and
              comfort.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Can I layer oversized T-shirts with other clothing items for a
                  stylish look?</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><strong>A.</strong><span> Yes, layering an oversized T-shirt can create a stylish and cosy
              outfit. You can layer them with a blazer or your favourite sweatshirt and pair them with jeans,
              leggings, or even skirts for a fashionable look.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>Can I style my tee for different occasions?</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><strong>A.</strong><span> Oversized T-shirts can be styled in various ways for different
              occasions. For a casual look, pair them with jeans and sneakers. For a more dressed-up look, layer them
              with trendy jackets and pair them with trousers or cool joggers.</span></p>
          <ul>
            <li dir="ltr" aria-level="1">
              <h3 dir="ltr" role="presentation"><strong>What is the return and exchange policy for Veirdo’s products
                  if they don't fit as expected?</strong></h3>
            </li>
          </ul>
          <p dir="ltr"><strong>A.</strong><span> You can return or exchange items purchased from Veirdo within 7 days
              of delivery. We offer free exchanges, so you won't incur any additional charges. We aim to make your
              shopping experience at Veirdo hassle-free.</span></p>
        </div>
        <button onclick="closeDescription()" class="lg:hidden text-sm font-[ibmMedium] underline text-[#242F66]">
          Hide
        </button>
      </details>
    </div>

  </section>
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

</html>