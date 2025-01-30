  <section id="shopify-section-cart-drawer" class="shopify-section">

    <div class="slider hidden-block flex fixed w-full top-0 right-0 bottom-0 bg-gray-600/25 z-[100]">
      <div class="slider__empty h-full w-[10%] lg:w-[65%] z-[150] bg-transparent overflow-hidden"></div>
      <div class="slider__container h-[100dvh] w-[90%] lg:w-[35%] bg-white overflow-y-auto relative cart-drawer-wrapper">
        <div data-ga-view data-ga-view-info="Cart_Halfcard_View" id="main-cart-items" data-id="cart-drawer">
          <div class="js-contents flex flex-col h-[100dvh] overflow-hidden">
            <!-- My cart start -->
            <div class="w-full lg:border-b-4 lg:border-[#f6f6f6] bg-white z-[10] ">
              <div class="flex justify-between p-4" id="cart-mobile-count-header">
                <div data-ga-view-quick data-ga-view-info-quick="index_HalfCart_View"
                  data-ga-view-payload-quick="{itemProductTag: '', NoOfStyles:'0',cartTotalDiscount:'0.0',cartValue:'0.0' itemStyleId:'', itemStyleQty:'', itemPrice:'', itemDiscountPrice:''}"
                  class="text-[#222527] font-[ibmSemiBold] text-sm lg:text-base uppercase"> MY Cart </div>
                <button class="icon-close-drawer ">
                  <img src="cdn/shop/t/64/assets/icon-close15dc.svg?v=42907484647275626011705057419" loading="lazy"
                    width="24" height="24" alt="cart close icon">
                </button>
              </div>
            </div>
            <!-- My cart end -->

            <!-- My bag start -->
            <div class="overflow-y-auto h-full">
              <div class="flex flex-col justify-between h-[80vh] lg:h-[70vh] gap-12">
                <div id="empty-cart-items" data-id="empty-cart-drawer" class="h-full ">
                  <div class="js-contents h-full flex w-full justify-center ">
                    <div class="lg:pb-20 pt-8 h-full flex items-center lg:h-[130%]">
                      <div class="">
                        <p class="hidden cart-drawer-cart-heading text-[#222527] font-[ibmSemiBold] text-sm lg:text-xl uppercase lg:pl-[9.4rem]  pb-[4.125rem]"> MY BAG </p>
                        <div class="flex flex-col justify-center items-center gap-3 lg:gap-4  ">
                          <img src="cdn/shop/t/64/assets/icon-empty-cartf0b8.gif?v=169249166671359598681705057421"
                            alt="empty cart icon" loading="lazy" width="160" height="140">
                          <div class="flex flex-col items-center gap-2 lg:gap-3">
                            <p class="text-[#131814] text-base font-[soraSemiBold]">looks like your cart is on a diet </p>
                            <span class="text-[#74797D] font-[ibmRegular] text-sm">waiting for some trendy threads to bulk it up!</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div id="cart-recently-viewed" data-id="cart-drawer">
                  <div class="js-contents">
                    <section class="cart-drawer__recently-viewed" id="recently_view_container_cart">
                      <div class=" mb-8 lg:mb-12    ">
                        <div class="container flex-col gap-2 lg:gap-4">
                          <h2 class="font-[soraSemiBold] text-xs lg:text-lg text-[#2D3033] lg:pl-1 uppercase">
                            RECENTLY VIEWED PRODUCTS
                          </h2>
                          <div class="cart-recently-viewed sliderContainer" role="list"></div>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
            <!-- My bag end -->
          </div>
        </div>
      </div>
    </div>

  </section>