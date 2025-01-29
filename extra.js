// Auto loginmbl start
function autoLoginMbl(token) {
        const accountElement = document.getElementById('kpaccount2')
        const trackElementM1 = document.getElementById('kptarckm1')
        const trackElementM2 = document.getElementById('kptarckm2')
        if (token) {
                if (accountElement) accountElement.style.display = 'flex';
                if (trackElementM1) trackElementM1.style.display = 'none';
                if (trackElementM2) trackElementM2.style.display = 'block';
        }
        else {
                if (accountElement) accountElement.style.display = 'none';
                if (trackElementM1) trackElementM1.style.display = 'block';
                if (trackElementM2) trackElementM2.style.display = 'none';
        }
}
window.addEventListener('user-loggedin', function (event) {
        const { token } = event?.detail;
        autoLoginMbl(token);
});
document.addEventListener('DOMContentLoaded', function () {
        var userToken = localStorage.getItem('KWIKSESSIONTOKEN');
        autoLoginMbl(userToken);
});
// Auto loginmbl end


// Demon function ready start
domReady(function () {
        productCarousel("carousel-list-slider", true, 1, 1, 1, 1, 0, false, false, 0, true, true, false, '', 5 ? 5000 : 5000);

        const announcementBar = document.querySelector('#announcement-bar');
        const arrowPrev = announcementBar.querySelector('.slick-prev');
        const arrowNext = announcementBar.querySelector('.slick-next');
        arrowPrev.innerHTML = `
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" class="size-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5 8.25 12l7.5-7.5" />
    </svg>
    `;
        arrowNext.innerHTML = `
    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" class="size-6">
      <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
    </svg>
    `;
});
// Demon function ready end


// Empty cart Data start
emptyCartData = {
        "href": "/collections/mens-new-arrivals",
        "collectionName": "NEW ARRIVALS"
}

emptyCartData = {
        "href": "/collections/mens-new-arrivals",
        "collectionName": "NEW ARRIVALS"
}

emptyCartData = {
        "href": "/collections/mens-new-arrivals",
        "collectionName": "NEW ARRIVALS"
}

emptyCartData = {
        "href": "/collections/mens-new-arrivals",
        "collectionName": "NEW ARRIVALS"
}

emptyCartData = {
        "href": "/collections/mens-new-arrivals",
        "collectionName": "NEW ARRIVALS"
}

emptyCartData = {
        "href": "/collections/mens-new-arrivals",
        "collectionName": "NEW ARRIVALS"
}
// Empty cart Data end


// Object cart start
let objectCart = { "note": null, "attributes": {}, "original_total_price": 0, "total_price": 0, "total_discount": 0, "total_weight": 0.0, "item_count": 0, "items": [], "requires_shipping": false, "currency": "INR", "items_subtotal_price": 0, "cart_level_discount_applications": [], "checkout_charge_amount": 0 };
// Object cart end


//set Recently Viewed Products Cart start
const temp = "index"
let cartProductData = {};
let productTagValueCart;

function setRecentlyViewedProductsCart() {
        cartProductData = {
                productId: ``,
                productTitle: ``,
                productHandle: ` `,
                productImg: `Liquid error (snippets/cart-recently-viewed line 82): invalid url input`,
                imgWidth: ``,
                imgHeight: ``,
                productPrice: ``,
                productOriginalPrice: ``,
                productDiscount: ``,
                productUrl: ``,
                productImageAltText: ``,
                productRating: ``,
                productReviewCount: ``,
                productMetafields: `bnVsbA==`,
                productVariants: `bnVsbA==`,
                colorVariantList: ``,
        };
        const productListCart = [];
        let jsonRespCart,
                jsonRespArrCart,
                jsonRespArrStrCart;
        const numberOfProductsCart = 9;

        if (cartProductData.productId != "") productListCart.push(cartProductData);

        const currProductIdCart = cartProductData.productId;
        const productDataStringCart = JSON.stringify(productListCart);
        const localDataCart = localStorage.getItem("recentlyViewedProduct");

        if (localDataCart === null) {
                localStorage.setItem("recentlyViewedProduct", productDataStringCart);
        } else if (localDataCart) {
                const oldProductDataCart = localStorage.getItem("recentlyViewedProduct");
                const countProductDataCart = (oldProductDataCart.match(/productTitle/g) || []).length;
                const sameProductCart = oldProductDataCart.includes(currProductIdCart);
                if (countProductDataCart < numberOfProductsCart && !sameProductCart) {
                        jsonRespCart = JSON.parse(oldProductDataCart);
                        jsonRespArrCart = jsonRespCart.concat(productListCart);
                        jsonRespArrStrCart = JSON.stringify(jsonRespArrCart);
                        localStorage.setItem("recentlyViewedProduct", jsonRespArrStrCart);
                } else if (countProductDataCart >= numberOfProductsCart && !sameProductCart) {
                        jsonRespCart = JSON.parse(oldProductData);
                        jsonRespCart.shift();
                        jsonRespArrCart = jsonResp.concat(productListCart);
                        jsonRespArrCart = JSON.stringify(jsonRespArrCart);
                        localStorage.setItem("recentlyViewedProduct", jsonRespArrCart);
                }
        }
}

setRecentlyViewedProductsCart();

const cartLocalViewed = localStorage.recentlyViewedProduct;

document.addEventListener("DOMContentLoaded", function (event) {
        getRecentlyViewedProductsCart();
        executeABEvents();
});

function cartRecentClick(id) {
        let recentElem = document.getElementById(id);
        let click_stream_parameter = {
                styleId: id,
                styleName: recentElem.dataset.product_title
        }

        payload = {
                click_stream_parameter: JSON.stringify(click_stream_parameter)
        }

        gaClickEvent('Cart_Recent_Click', payload);
}
//set Recently Viewed Products Cart end


// openCartDrawer start
domReady(function () {
        function openCartDrawer() {
                executeCartReloadFunction();
                //pincode serviceability
                /*if("pincode" in localStorage){
                  $jq(`#pincode_input_cart`).val(localStorage.getItem("pincode")); 
                  pincodeApi("cart");
                }*/
                $jq('.slider').removeClass('hidden-block').addClass('show-cart-slider');
                hideWhatsAppIcon();
                disableScroll();
                savingsLottieInit();
                // getRecom();
                const cartPayload = $jq('[data-ga-view-quick]').attr('data-ga-view-payload-quick');
                executeABEvents();
                gaClickEvent('Cart_Halfcard_Open', { src: 'Cart_Icon', cart_info: cartPayload });
        }
        function closeCartDrawer(closeSrc) {
                $jq('.slider').addClass('hide-cart-slider').removeClass('show-cart-slider');
                setTimeout(function () {
                        $jq('.slider').removeClass('hide-cart-slider').addClass('hidden-block');
                }, 300);
                enableScroll();
                savingsLottieClose();
                showWhatsAppIcon();
                const cartPayload = $jq('[data-ga-view-quick]').attr('data-ga-view-payload-quick');
                gaClickEvent('Cart_Halfcard_Close', { src: closeSrc, cart_info: cartPayload });
        }
        $jq('body').on('click', '.cart-icon-bubble, .go-to-cart', function (e) {
                e.preventDefault();
                openCartDrawer();
                trackGA4CartViewEvent();
                $jq('.cart-recently-viewed').slick('setPosition');
        });

        $jq('body').on('click', '.icon-close-drawer', function (e) {
                closeCartDrawer('Cross_Icon_Close');
        });

        $jq('body').on('mouseup', '.slider .slider__empty', function (e) {
                let cartDrawerContainer = $jq('.slider .slider__container');
                if (!cartDrawerContainer.is(e.target) && cartDrawerContainer.has(e.target).length === 0) {
                        closeCartDrawer('Out_Tap_Close');
                }
        });
});
// openCartDrawer end

domReady(function () {
        productCarousel("primary-banner", true, 1, 1, 1, 1);
});

domReady(function () {
        productCarousel("home-about-section-mobile", false, 2, 3, 3, 3, 20, false, false, 0, false);
});

domReady(function () {
        productCarousel("primary-banner", true, 1, 1, 1, 1);
});

domReady(function() {
        productCarousel("product-listing-slider-template--14826244636727__product_listing_h7WLt9", false, 4, 1, 4, 2, 160, false);
    });

    domReady(function() {
        productCarousel("product-listing-slider-template--14826244636727__product_listing_n7patd", false, 4, 1, 4, 2, 160, false);
      });

      function loadScript(src) {
        let scriptEle = document.createElement("script");
        scriptEle.setAttribute("src", src);
        scriptEle.defer = true;
        scriptEle.async = true;
        document.body.appendChild(scriptEle);
      }

      function checkContainerLoading() {
        const containerNeededPage = null;
        if (containerNeededPage === null || containerNeededPage === undefined) {
          return true;
        }

        const arrayofPage = containerNeededPage.split(',');
        if (containerNeededPage && arrayofPage.includes(window.flitsThemeAppExtensionObjects.request.page_type)) {
          return true;
        }
        return false;
      }
      if (checkContainerLoading())
        loadScript(window.flitsThemeAppExtensionObjects.flitsGetStoreFrontContainerUrl());