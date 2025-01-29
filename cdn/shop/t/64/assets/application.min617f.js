"use strict";function _typeof(e){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(e){return typeof e}:function(e){return e&&"function"==typeof Symbol&&e.constructor===Symbol&&e!==Symbol.prototype?"symbol":typeof e})(e)}function _defineProperty(e,t,n){return(t=_toPropertyKey(t))in e?Object.defineProperty(e,t,{value:n,enumerable:!0,configurable:!0,writable:!0}):e[t]=n,e}function _toPropertyKey(e){e=_toPrimitive(e,"string");return"symbol"===_typeof(e)?e:String(e)}function _toPrimitive(e,t){if("object"!==_typeof(e)||null===e)return e;var n=e[Symbol.toPrimitive];if(void 0===n)return("string"===t?String:Number)(e);n=n.call(e,t||"default");if("object"!==_typeof(n))return n;throw new TypeError("@@toPrimitive must return a primitive value.")}var userDetails=navigator.userAgent,regexp=/android|iphone|kindle|ipad/i,isMobileDevice=regexp.test(userDetails),customerIdentifier=localStorage.getItem("notify_phone_number")||"0000000000",custId="N"+(null==customerIdentifier?void 0:customerIdentifier.replace(/8/g,"$").replace(/9/g,"|-|").replace(/7/g,"&").replace(/6/g,"!").replace(/5/g,"%"))+"GA";function domReady(e){"loading"===document.readyState?document.addEventListener("DOMContentLoaded",e):e();var e=localStorage.getItem("isLogInButtonClicked"),t=localStorage.getItem("isSignUpButtonClicked");e&&""!=(null==(e=window.customer)?void 0:e.email)&&(gaClickEvent("login"),localStorage.removeItem("isLogInButtonClicked")),t&&""!=(null==(e=window.customer)?void 0:e.email)&&(gaClickEvent("Sign_Up_Completed"),localStorage.removeItem("isSignUpButtonClicked"))}function windowReady(e){"complete"===document.readyState?e():window.addEventListener("load",e)}function showLoader(){disableScroll(),$jq(".loader").css("display","flex")}function hideLoader(){enableScroll(),$jq(".loader").css("display","none")}function hideWhatsAppIcon(){var e=$jq("a[title='Chat with us on WhatsApp']");null!=(e=$jq(e))&&e.hide()}function showWhatsAppIcon(){var e=$jq("a[title='Chat with us on WhatsApp']");null!=(e=$jq(e))&&e.show()}function openDrawer(e,t){disableScroll(),hideWhatsAppIcon(),null!=(e=$jq(e))&&null!=(e=e.removeClass("closeDrawer"))&&e.addClass("showDrawer"),$jq(t).css("visibility","visible")}function closeDrawer(e,t){enableScroll(),showWhatsAppIcon(),null!=(e=$jq(e))&&null!=(e=e.removeClass("showDrawer"))&&e.addClass("closeDrawer"),$jq(t).css("visibility","hidden")}var disableScroll=function(){$jq("body").css("overflow","hidden")},enableScroll=function(){$jq("body").css("overflow","auto")},openPopup=function(e){var t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:"flex";hideWhatsAppIcon(),disableScroll(),$jq(e).removeClass("hidden").addClass(t)},closePopup=function(e){var t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:"flex";showWhatsAppIcon(),enableScroll(),$jq(e).children(".popup").addClass("popup-close"),setTimeout(function(){$jq(e).addClass("hidden").removeClass(t).children(".popup").removeClass("popup-close")},200)};function imageError(e){e.setAttribute("src",1<arguments.length&&void 0!==arguments[1]?arguments[1]:"https://cdn.shopify.com/s/files/1/1982/7331/files/veirdo_placeholder_1.png?v=1704707614")}function gaClickEvent(){var e=0<arguments.length&&void 0!==arguments[0]?arguments[0]:"",t=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},n={event:"custom_click_event",click_element:e,click_stream_parameters:JSON.stringify(t),user_id:(null==(n=window)||null==(n=n.customer)?void 0:n.id)||"0",customer_identifier:custId};"Search_Result"==e&&(n.event="search",n.search_term=t.searchText),console.log(n),dataLayer.push(n)}function gaScrollEvent(e,t){e={event:"custom_scroll",scroll_depth:e,scroll_page_url:t,user_id:(null==(e=window)||null==(t=e.customer)?void 0:t.id)||"0",customer_identifier:custId};dataLayer.push(e)}function ga4ClickEvent(){var e={event:0<arguments.length&&void 0!==arguments[0]?arguments[0]:"",ecommerce:1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},user_id:(null==(e=window)||null==(e=e.customer)?void 0:e.id)||"0",customer_identifier:custId};console.log(e),dataLayer.push(e)}function gaFormSubmit(){var e={event:"js_form_submission",form_name:0<arguments.length&&void 0!==arguments[0]?arguments[0]:"",form_parameters:JSON.stringify(1<arguments.length&&void 0!==arguments[1]?arguments[1]:{})};dataLayer.push(e)}function pushToDataLayer(){var e={event:"gtm.js",ga_view_payload:JSON.stringify(0<arguments.length&&void 0!==arguments[0]?arguments[0]:{})};dataLayer.push(e)}function pushListingPagination(){var e={event:"listing_pagination",listing_pagination_payload:JSON.stringify(0<arguments.length&&void 0!==arguments[0]?arguments[0]:{}),total_product_counts:$jq(".collection_product_count").html()};dataLayer.push(e)}function productStyleClick(e,t,n,o,i){gaClickEvent(n,{styleId:e,styleName:atob(t),stylePrice:i})}function initializeSaleTimer(e){var t,n,o,i,a,l,r,s=document.querySelector(".".concat(e)),e=s.getAttribute("data-sales-time");s&&e&&(t=new Date(e).getTime()+198e5,n=s.querySelector(".sale-day"),o=s.querySelector(".sale-timer-day"),i=s.querySelector(".sale-timer-hour"),a=s.querySelector(".sale-timer-min"),l=s.querySelector(".sale-timer-sec"),r=setInterval(function(){var e=(new Date).getTime()+198e5;e<t?(s.classList.remove("hidden"),updateTimerDisplay(t-e,n,o,i,a,l)):(s.classList.add("hidden"),clearInterval(r))},1e3))}function updateTimerDisplay(e,t,n,o,i,a){var l=Math.floor(e/864e5),r=Math.floor(e%864e5/36e5),s=Math.floor(e%36e5/6e4),e=Math.floor(e%6e4/1e3);0==l?null!=t&&null!=(t=t.classList)&&t.add("hidden"):n.innerHTML=l.toString().padStart(2,"0"),o.innerHTML=r.toString().padStart(2,"0"),i.innerHTML=s.toString().padStart(2,"0"),a.innerHTML=e.toString().padStart(2,"0")}function isAtBottom(){return window.innerHeight+Math.ceil(window.pageYOffset)>=document.body.offsetHeight}function prepareCartPayload(e){var t,o=[];return null!=(objectCart=e)&&null!=(t=e.items)&&t.forEach(function(e){e.discounts.length&&(t="",n=0,e.discounts.forEach(function(e){n+=e.amount,t=t+e.title+"||"}));var t,n,e={item_id:null==e?void 0:e.product_id,item_brand:null==e?void 0:e.vendor,item_name:null==e?void 0:e.product_title,discount:n/100||0,coupon:t||"",item_variant:(null==e?void 0:e.variant_title)||"",quantity:(null==e?void 0:e.quantity)||0,item_price:(null==e?void 0:e.final_price)/100,final_item_price:(null==e?void 0:e.final_line_price)/100};o.push(e)}),{currency:"INR",value:e.total_price/100,items:o}}function trackGA4CartViewEvent(){try{fetch(window.Shopify.routes.root+"cart.js").then(function(e){return e.json()}).then(function(e){e.total_price&&ga4ClickEvent("view_cart",prepareCartPayload(e))})}catch(e){console.log(null==e?void 0:e.message)}}var isFormValid=!1,formValidate=function(e){for(var t=Array.from($jq(e).find("fieldset.input-container").not(".hidden").find("input")),n=0;n<t.length&&(isFormValid=validateInputField(t[n]));n++);return isFormValid},validateInputField=function(e){var t=null==e?void 0:e.dataset,n=t.required,o=t.regex,t=t.label,i=null==(i=$jq(e).val())?void 0:i.trim(),a=i.length,o=new RegExp(o);if(n||o)return 0==a&&n?($jq(e).parent().siblings("span").text("".concat(t," Is Required")),$jq(e).parent().addClass("error-input"),$jq(e).parent().find("label").css("color","#E83336"),!1):!o.test(i)&&0<a?($jq(e).parent().siblings("span").text("Enter a valid ".concat(t)),$jq(e).parent().addClass("error-input"),$jq(e).parent().find("label").css("color","#E83336"),!1):($jq(e).parent().siblings(".error-msg").text(""),$jq(e).parent().removeClass("error-input"),$jq(e).parent().find("label").css("color",""),!0)};function hideAndShowModal(e,t,n){var o;null!=(o=document.getElementById(e))&&o.classList.contains("invisible")?(null!=(o=document.getElementById(e))&&o.classList.remove("invisible"),null!=(o=document.getElementById(t))&&o.classList.add("show-drawer-popup")):null!=(o=document.getElementById(e))&&o.classList.contains("invisible")||(null!=(o=document.getElementById(e))&&o.classList.add("invisible"),null!=(e=document.getElementById(t).classList)&&e.remove("show-drawer-popup")),(""===n||"paymentinfo"===n&&isMobileDevice)&&(null!=(o=document.body)&&o.classList.contains("!overflow-hidden")?null!=(t=document.body)&&t.classList.contains("!overflow-hidden")&&null!=(e=document.body)&&e.classList.remove("!overflow-hidden"):null!=(n=document.body)&&n.classList.add("!overflow-hidden"))}function handleOpenCloseModal(e,t,n,o){var i=4<arguments.length&&void 0!==arguments[4]?arguments[4]:"",a=document.getElementById(t),l=document.getElementById(n);i&&gaClickEvent(i,{order_no:null==(i=document.querySelector("label.order-number"))?void 0:i.textContent}),e&&(i=null==a?void 0:a.contains(e.target),a=null==l?void 0:l.contains(e.target),!i||a||null==l||!l.classList.contains("show-drawer-popup"))||hideAndShowModal(t,n,o)}function handleFormChange(){sessionStorage.getItem("isFormChanged")||sessionStorage.setItem("isFormChanged",!0)}function encodeParams(t){return Object.keys(t).map(function(e){return encodeURIComponent(e)+"="+encodeURIComponent(t[e])}).join("&")}function copyText(e,t){var n=2<arguments.length&&void 0!==arguments[2]?arguments[2]:"";navigator.clipboard.writeText(e).then(function(){""!=n&&(document.getElementById("copied-text").innerHTML=n),handleOpenCloseModal("","copy_success_notification_popup","copy_success_notification",""),setTimeout(function(){hideAndShowModal("copy_success_notification_popup","copy_success_notification","")},1e3),gaClickEvent("COPY_TEXT_CLICK",_defineProperty({},t,e))}).catch(function(e){console.error("Could not copy string: ",e)})}function renderAvailableOffers(){fetch("/products/".concat(0<arguments.length&&void 0!==arguments[0]?arguments[0]:"oversized-royal-blue-graphic-tshirt","?view=product-offers")).then(function(e){return e.text()}).then(function(e){e=(new DOMParser).parseFromString(e,"text/html").querySelector("body").innerHTML.trim();e&&$(".inject-available-offer-modal").html(e)}).catch(function(e){console.log(e)})}function enableHamburger(e,t,n){$jq("#menu-container").addClass("hpShowDrawer").removeClass("hpCloseDrawer"),$jq(".enable-login-button").addClass("hpShowDrawer").removeClass("hpCloseDrawer"),disableScroll(),$jq(".hamburger-hide").css("display","flex"),$jq(".enable-login-button").css("display","flex"),$jq(".hamburger-menu-img").css("display","block"),$jq(".mobile-nested-img").css("display","block"),$jq(".item-running-out-class").css("display","none"),$jq(".rotating-cart-icon").removeClass("slide-caption"),gaClickEvent(e,{section_name:t,element_name:n})}function disableHamburger(e,t,n){$jq("#menu-container,#nested-container").addClass("hpCloseDrawer").removeClass("hpShowDrawer"),$jq(".enable-login-button").addClass("hpCloseDrawer").removeClass("hpShowDrawer"),$jq("#hamburger-show").css("display","flex"),enableScroll(),$jq(".hamburger-hide").css("display","none"),$jq(".enable-login-button").css("display","none"),gaClickEvent(e,{section_name:t,element_name:n})}function enableNestedContainer(e,t,n){$jq("#menu-container").addClass("hpCloseDrawer").removeClass("hpShowDrawer"),$jq(".enable-login-button").addClass("hpCloseDrawer").removeClass("hpShowDrawer"),$jq(".hamburger-hide").css("display","flex"),disableScroll(),$jq("#nested-container").addClass("hpShowDrawer").removeClass("hpCloseDrawer"),gaClickEvent(e,{section_name:t,element_name:n})}function disableNestedContainer(e,t,n){$jq("#menu-container").addClass("hpShowDrawer").removeClass("hpCloseDrawer"),$jq(".enable-login-button").addClass("hpShowDrawer").removeClass("hpCloseDrawer"),$jq("#nested-container").addClass("hpCloseDrawer").removeClass("hpShowDrawer"),disableScroll(),gaClickEvent(e,{section_name:t,element_name:n})}function headerGaEvents(e,t,n,o){gaClickEvent(e,{section_name:t,element_name:n,redirect_url:o})}function headerGaEventsWR(e,t,n,o,i){gaClickEvent(e,{section_name:t,rank:n,element_name:o,redirect_url:i})}window.addEventListener("scroll",function(){var e=null==(e=document)?void 0:e.querySelector(".sticky-title");e&&(32<window.scrollY?e.classList.add("sticky-title-scrolled"):e.classList.remove("sticky-title-scrolled"))}),document.addEventListener("click",function(e){var t,n,o,i,a=e.target;a.classList.contains("cart-icon")&&document.dispatchEvent(new CustomEvent("Flits:AjaxCollection:CollectionUpdated",{bubbles:!0})),a.classList.contains("wishlist-cart-button")&&(e.preventDefault(),e.stopPropagation(),e.stopImmediatePropagation(),showLoader(),e=a.getAttribute("data-flits-item-id"),t=a.getAttribute("data-flits-item-handle"),n=a.getAttribute("data-flits-item-title"),o=a.getAttribute("data-flits-item-image"),e={customer_hash:window.flitsThemeAppExtensionObjects.customerHash,token:window.flitsThemeAppExtensionObjects.token,customer_id:window.flitsThemeAppExtensionObjects.customer.customer_id,customer_email:window.flitsThemeAppExtensionObjects.customer.email,product_id:e,product_handle:t,product_title:n,product_image:o},""!=customer.id&&null!=customer.id?((i=new XMLHttpRequest).open("POST",window.flitsThemeAppExtensionObjects.base_url+"/wishlist/add_to_wishlist",!0),i.setRequestHeader("Content-Type","application/x-www-form-urlencoded"),i.onreadystatechange=function(){4===i.readyState&&200===i.status&&(a.previousElementSibling.click(),document.dispatchEvent(new CustomEvent("Flits:AjaxCart:CartToWishlist",{bubbles:!1})))},i.send(encodeParams(e))):window.location.href="https://".concat(window.location.host,"/account/login"))}),domReady(function(){$jq("#header-logo").removeClass("hidden");var t=document.getElementById("annoucement-bar-text");t&&setTimeout(function(){var e;null!=(e=$jq("#announcement-bar"))&&e.html(null==t?void 0:t.value),null!=(e=$jq(".marquee"))&&e.marquee({duration:isMobileDevice?7e3:17e3,gap:50,delayBeforeStart:0,direction:"left",duplicated:!1})},500),$jq("body").on("click",".header-desktop-logout-btn",function(e){handleOpenCloseModal("","logout_popup","logout_transition","")}),$jq("body").on("click",".ooo-instagram-media",function(){gaClickEvent("Section_Feed_Click")})}),window.addEventListener("scroll",function(){var e=document.querySelector("#header"),t=document.querySelector(".theme-content"),n=document.getElementById("announcement-bar"),o=this.document.querySelector(".mobile-search-block");e&&t&&n&&(n=n.offsetHeight,window.scrollY>n?(e.classList.add("fixed-header"),o.classList.add("fixed-header"),t.classList.add("shopify-content")):(e.classList.remove("fixed-header"),o.classList.remove("fixed-header"),t.classList.remove("shopify-content")))});