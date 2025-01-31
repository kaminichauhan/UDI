<!doctype html>
<html lang="en" class="no-js">

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

    <main class="flex flex-col lg:mx-9 xl:mx-10  2xl:mx-[72px] lg:mt-8 mb-8 lg:mb-20 wishlist-container">
        <div class="wishlist-info-container flex flex-col px-4 pt-5 lg:px-0 lg:pt-0">
            <div data-ga-view-custom data-ga-view-info-custom="Wishlist_View" class="wishlist-info flex items-baseline gap-[6px] lg:gap-3 lg:mb-8">
                <h1 class="font-[ibmSemiBold] text-lg lg:text-2xl text-[#131814]">Wishlist</h1>
                <h3
                    class="wishlist-products-count text-[#74797D] text-xs lg:text-base font-[ibmRegular] lg:font-[ibmMedium]"></h3>
            </div>
        </div>
        <!-- Wishlist Products -->
        <section class="product-section p-2 md:p-0 w-full ">
            <article id="product-grid"
                class="product-on-page grid  grid-cols-2 gap-x-[6px] gap-y-2 md:gap-x-4 md:gap-y-6 lg:grid-cols-4 lg:gap-x-4 lg:gap-y-8">
                <!-- product 1 start -->
                <section class="product-card-container flex h-full flex-col rounded-xl lg:rounded-2xl border-[0.5px] border-[#c9cbcc] cursor-pointer justify-between   justify-between">
                    <div class="flex flex-col relative">
                        <div href="../products/veirdo-original-swanwhite-oversized-typography-brand-printed-tshirt.html">
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
                                <div class="product-image-tag  product-image-tag  flex items-center absolute h-4 top-2 lg:top-4 p-[2px] lg:p-1 rounded-sm z-20 product-card-tag  left-[1%]  ">
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
                            <span class="text-[11px] lg:text-sm font-[soraSemiBold]  text-[#131814]    uppercase"> MOVE TO CART </span>
                        </button>
                    </div>
                </section>
                <!-- product 1 end -->

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
    </main>



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