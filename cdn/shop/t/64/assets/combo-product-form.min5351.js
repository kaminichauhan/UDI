"use strict";function _typeof(t){return(_typeof="function"==typeof Symbol&&"symbol"==typeof Symbol.iterator?function(t){return typeof t}:function(t){return t&&"function"==typeof Symbol&&t.constructor===Symbol&&t!==Symbol.prototype?"symbol":typeof t})(t)}function _regeneratorRuntime(){_regeneratorRuntime=function(){return i};var i={},t=Object.prototype,s=t.hasOwnProperty,l=Object.defineProperty||function(t,e,o){t[e]=o.value},e="function"==typeof Symbol?Symbol:{},n=e.iterator||"@@iterator",o=e.asyncIterator||"@@asyncIterator",r=e.toStringTag||"@@toStringTag";function c(t,e,o){return Object.defineProperty(t,e,{value:o,enumerable:!0,configurable:!0,writable:!0}),t[e]}try{c({},"")}catch(t){c=function(t,e,o){return t[e]=o}}function a(t,e,o,n){var r,c,i,a,e=e&&e.prototype instanceof p?e:p,e=Object.create(e.prototype),n=new S(n||[]);return l(e,"_invoke",{value:(r=t,c=o,i=n,a="suspendedStart",function(t,e){if("executing"===a)throw new Error("Generator is already running");if("completed"===a){if("throw"===t)throw e;return x()}for(i.method=t,i.arg=e;;){var o=i.delegate;if(o){o=function t(e,o){var n=o.method,r=e.iterator[n];if(void 0===r)return o.delegate=null,"throw"===n&&e.iterator.return&&(o.method="return",o.arg=void 0,t(e,o),"throw"===o.method)||"return"!==n&&(o.method="throw",o.arg=new TypeError("The iterator does not provide a '"+n+"' method")),u;n=d(r,e.iterator,o.arg);if("throw"===n.type)return o.method="throw",o.arg=n.arg,o.delegate=null,u;r=n.arg;return r?r.done?(o[e.resultName]=r.value,o.next=e.nextLoc,"return"!==o.method&&(o.method="next",o.arg=void 0),o.delegate=null,u):r:(o.method="throw",o.arg=new TypeError("iterator result is not an object"),o.delegate=null,u)}(o,i);if(o){if(o===u)continue;return o}}if("next"===i.method)i.sent=i._sent=i.arg;else if("throw"===i.method){if("suspendedStart"===a)throw a="completed",i.arg;i.dispatchException(i.arg)}else"return"===i.method&&i.abrupt("return",i.arg);a="executing";o=d(r,c,i);if("normal"===o.type){if(a=i.done?"completed":"suspendedYield",o.arg===u)continue;return{value:o.arg,done:i.done}}"throw"===o.type&&(a="completed",i.method="throw",i.arg=o.arg)}})}),e}function d(t,e,o){try{return{type:"normal",arg:t.call(e,o)}}catch(t){return{type:"throw",arg:t}}}i.wrap=a;var u={};function p(){}function f(){}function h(){}var e={},m=(c(e,n,function(){return this}),Object.getPrototypeOf),m=m&&m(m(L([]))),v=(m&&m!==t&&s.call(m,n)&&(e=m),h.prototype=p.prototype=Object.create(e));function y(t){["next","throw","return"].forEach(function(e){c(t,e,function(t){return this._invoke(e,t)})})}function b(i,a){var e;l(this,"_invoke",{value:function(o,n){function t(){return new a(function(t,e){!function e(t,o,n,r){var c,t=d(i[t],i,o);if("throw"!==t.type)return(o=(c=t.arg).value)&&"object"==_typeof(o)&&s.call(o,"__await")?a.resolve(o.__await).then(function(t){e("next",t,n,r)},function(t){e("throw",t,n,r)}):a.resolve(o).then(function(t){c.value=t,n(c)},function(t){return e("throw",t,n,r)});r(t.arg)}(o,n,t,e)})}return e=e?e.then(t,t):t()}})}function g(t){var e={tryLoc:t[0]};1 in t&&(e.catchLoc=t[1]),2 in t&&(e.finallyLoc=t[2],e.afterLoc=t[3]),this.tryEntries.push(e)}function w(t){var e=t.completion||{};e.type="normal",delete e.arg,t.completion=e}function S(t){this.tryEntries=[{tryLoc:"root"}],t.forEach(g,this),this.reset(!0)}function L(e){if(e){var o,t=e[n];if(t)return t.call(e);if("function"==typeof e.next)return e;if(!isNaN(e.length))return o=-1,(t=function t(){for(;++o<e.length;)if(s.call(e,o))return t.value=e[o],t.done=!1,t;return t.value=void 0,t.done=!0,t}).next=t}return{next:x}}function x(){return{value:void 0,done:!0}}return l(v,"constructor",{value:f.prototype=h,configurable:!0}),l(h,"constructor",{value:f,configurable:!0}),f.displayName=c(h,r,"GeneratorFunction"),i.isGeneratorFunction=function(t){t="function"==typeof t&&t.constructor;return!!t&&(t===f||"GeneratorFunction"===(t.displayName||t.name))},i.mark=function(t){return Object.setPrototypeOf?Object.setPrototypeOf(t,h):(t.__proto__=h,c(t,r,"GeneratorFunction")),t.prototype=Object.create(v),t},i.awrap=function(t){return{__await:t}},y(b.prototype),c(b.prototype,o,function(){return this}),i.AsyncIterator=b,i.async=function(t,e,o,n,r){void 0===r&&(r=Promise);var c=new b(a(t,e,o,n),r);return i.isGeneratorFunction(e)?c:c.next().then(function(t){return t.done?t.value:c.next()})},y(v),c(v,r,"Generator"),c(v,n,function(){return this}),c(v,"toString",function(){return"[object Generator]"}),i.keys=function(t){var e,o=Object(t),n=[];for(e in o)n.push(e);return n.reverse(),function t(){for(;n.length;){var e=n.pop();if(e in o)return t.value=e,t.done=!1,t}return t.done=!0,t}},i.values=L,S.prototype={constructor:S,reset:function(t){if(this.prev=0,this.next=0,this.sent=this._sent=void 0,this.done=!1,this.delegate=null,this.method="next",this.arg=void 0,this.tryEntries.forEach(w),!t)for(var e in this)"t"===e.charAt(0)&&s.call(this,e)&&!isNaN(+e.slice(1))&&(this[e]=void 0)},stop:function(){this.done=!0;var t=this.tryEntries[0].completion;if("throw"===t.type)throw t.arg;return this.rval},dispatchException:function(o){if(this.done)throw o;var n=this;function t(t,e){return c.type="throw",c.arg=o,n.next=t,e&&(n.method="next",n.arg=void 0),!!e}for(var e=this.tryEntries.length-1;0<=e;--e){var r=this.tryEntries[e],c=r.completion;if("root"===r.tryLoc)return t("end");if(r.tryLoc<=this.prev){var i=s.call(r,"catchLoc"),a=s.call(r,"finallyLoc");if(i&&a){if(this.prev<r.catchLoc)return t(r.catchLoc,!0);if(this.prev<r.finallyLoc)return t(r.finallyLoc)}else if(i){if(this.prev<r.catchLoc)return t(r.catchLoc,!0)}else{if(!a)throw new Error("try statement without catch or finally");if(this.prev<r.finallyLoc)return t(r.finallyLoc)}}}},abrupt:function(t,e){for(var o=this.tryEntries.length-1;0<=o;--o){var n=this.tryEntries[o];if(n.tryLoc<=this.prev&&s.call(n,"finallyLoc")&&this.prev<n.finallyLoc){var r=n;break}}var c=(r=r&&("break"===t||"continue"===t)&&r.tryLoc<=e&&e<=r.finallyLoc?null:r)?r.completion:{};return c.type=t,c.arg=e,r?(this.method="next",this.next=r.finallyLoc,u):this.complete(c)},complete:function(t,e){if("throw"===t.type)throw t.arg;return"break"===t.type||"continue"===t.type?this.next=t.arg:"return"===t.type?(this.rval=this.arg=t.arg,this.method="return",this.next="end"):"normal"===t.type&&e&&(this.next=e),u},finish:function(t){for(var e=this.tryEntries.length-1;0<=e;--e){var o=this.tryEntries[e];if(o.finallyLoc===t)return this.complete(o.completion,o.afterLoc),w(o),u}},catch:function(t){for(var e=this.tryEntries.length-1;0<=e;--e){var o,n,r=this.tryEntries[e];if(r.tryLoc===t)return"throw"===(o=r.completion).type&&(n=o.arg,w(r)),n}throw new Error("illegal catch attempt")},delegateYield:function(t,e,o){return this.delegate={iterator:L(t),resultName:e,nextLoc:o},"next"===this.method&&(this.arg=void 0),u}},i}function asyncGeneratorStep(t,e,o,n,r,c,i){try{var a=t[c](i),s=a.value}catch(t){return void o(t)}a.done?e(s):Promise.resolve(s).then(n,r)}function _asyncToGenerator(a){return function(){var t=this,i=arguments;return new Promise(function(e,o){var n=a.apply(t,i);function r(t){asyncGeneratorStep(n,e,o,r,c,"next",t)}function c(t){asyncGeneratorStep(n,e,o,r,c,"throw",t)}r(void 0)})}}function ownKeys(e,t){var o,n=Object.keys(e);return Object.getOwnPropertySymbols&&(o=Object.getOwnPropertySymbols(e),t&&(o=o.filter(function(t){return Object.getOwnPropertyDescriptor(e,t).enumerable})),n.push.apply(n,o)),n}function _objectSpread(e){for(var t=1;t<arguments.length;t++){var o=null!=arguments[t]?arguments[t]:{};t%2?ownKeys(Object(o),!0).forEach(function(t){_defineProperty(e,t,o[t])}):Object.getOwnPropertyDescriptors?Object.defineProperties(e,Object.getOwnPropertyDescriptors(o)):ownKeys(Object(o)).forEach(function(t){Object.defineProperty(e,t,Object.getOwnPropertyDescriptor(o,t))})}return e}function _defineProperty(t,e,o){return(e=_toPropertyKey(e))in t?Object.defineProperty(t,e,{value:o,enumerable:!0,configurable:!0,writable:!0}):t[e]=o,t}function _toPropertyKey(t){t=_toPrimitive(t,"string");return"symbol"===_typeof(t)?t:String(t)}function _toPrimitive(t,e){if("object"!==_typeof(t)||null===t)return t;var o=t[Symbol.toPrimitive];if(void 0===o)return("string"===e?String:Number)(t);o=o.call(t,e||"default");if("object"!==_typeof(o))return o;throw new TypeError("@@toPrimitive must return a primitive value.")}var comboDataJson={},cartDataJson={},selections=[],productsChosen=[],sizesChosen=[],initialVariantsStock={},currentVariantsStock={};function commonGAClickEvent(t){var e=_objectSpread({},1<arguments.length&&void 0!==arguments[1]?arguments[1]:{});gaClickEvent(t,e)}function sendGAClickEvent(t){var e=1<arguments.length&&void 0!==arguments[1]?arguments[1]:{},e=_objectSpread(_objectSpread({},commonProductDetails),e);gaClickEvent(t,e)}var dropDownOpenHandler=function(t,e,o){t.stopPropagation();var t=document.querySelector("#product".concat("size"===o?"-size":"","-selector-").concat(e)),n=t.classList.contains("open");document.querySelectorAll(".custom-dropdown-combo-product").forEach(function(t){t.classList.remove("open")}),n||t.classList.add("open"),commonGAClickEvent("COMBO_Dropdown_".concat(o,"_").concat(e))},findProductById=(document.addEventListener("click",function(t){null===t.target.closest(".custom-dropdown-combo-product")&&null!==document.querySelector(".custom-dropdown-combo-product.open")&&document.querySelector(".custom-dropdown-combo-product.open").classList.remove("open")}),function(e){return comboDataJson.products.find(function(t){return t.data.id===parseInt(e)})}),makeHandle=function(t){return t.toLowerCase().replace(/[^a-z0-9]+/g,"-").replace(/-$/,"").replace(/^-/,"")},toggleAddToCart=function(t){var e=document.querySelector(".add-to-bag-submit-combo-product-btn");t&&e.disabled?(e.classList.replace("disabled-submit-btn","enabled-submit-btn"),e.disabled=!1):t||e.disabled||(e.classList.replace("enabled-submit-btn","disabled-submit-btn"),e.disabled=!0)},btnTogglerCheck=function(){selections.includes(void 0)?toggleAddToCart(!1):toggleAddToCart(!0)},createSizeOptions=function(t,o){var e=document.querySelector("#product-size-selector-".concat(o)),n=document.querySelector("#product-selector-dropdown-".concat(o)),r=document.querySelector("#product-size-selector-dropdown-".concat(o));r.classList.contains("combo-product-dropdown-selected")&&(r.classList.remove("combo-product-dropdown-selected"),r.classList.add("combo-product-dropdown-unselected")),"default"===t?(n.classList.contains("combo-product-dropdown-selected")&&(n.classList.remove("combo-product-dropdown-selected"),n.classList.add("combo-product-dropdown-unselected")),e.innerHTML='\n            <div class="combo-product-selected-value flex items-center gap-[2px] text-xs lg:text-base disable-text-select">\n                <div class="py-2.5 px-4">\n                    Select Size\n                </div>\n            </div>\n            <ul\n            class="dropdown-list-combo-product hidden absolute w-full top-[calc(100%+8px)] lg:top-[30px] bg-[#fff] rounded border-[0.5px] border-[#8A8E92] z-[225] overflow-scroll">\n                <li data-productId="default" onclick="handleOptionSelectVariant(event,0,'.concat(o,')" id="product-selector-option-0"\n                class="text-center select-option-size font-[ibmMedium] text-xs lg:text-base text-[#2D3033] selected disable-text-select">\n                    <div class="py-2.5 px-4">\n                        Select Size\n                    </div>\n                </li>\n            </ul>\n        ')):(n.classList.contains("combo-product-dropdown-unselected")&&(n.classList.remove("combo-product-dropdown-unselected"),n.classList.add("combo-product-dropdown-selected")),r=findProductById(t).variants.map(function(t,e){return'\n        <li data-variantId="'.concat(t.data.id,'" data-sizeHandle="').concat(t.data.title,'" onclick="handleOptionSelectVariant(event,').concat(e+1,",").concat(o,')" id="product-size-selector-option-').concat(e+1,'"\n        class="text-center select-option-size font-[ibmMedium] text-xs lg:text-base text-[#2D3033] disable-text-select ').concat(currentVariantsStock[t.data.id]<=0?"disabled-option":"",'">\n            <div class="py-2.5 px-4">\n            ').concat(t.data.title," \n            ").concat(0<currentVariantsStock[t.data.id]&&currentVariantsStock[t.data.id]<=10?" ("+currentVariantsStock[t.data.id]+" Left)":currentVariantsStock[t.data.id]<=0?" - SOLD OUT":"","\n            </div>\n        </li>")}),e.innerHTML='\n        <div class="combo-product-size-selected-value flex items-center gap-[2px] text-xs lg:text-base disable-text-select" >\n            <div class="py-2.5 px-4">\n                Select Size\n            </div>\n        </div>\n        <ul\n        class="dropdown-list-combo-product hidden absolute w-full top-[calc(100%+8px)] bg-[#fff] rounded border-[0.5px] border-[#8A8E92] z-[225] overflow-scroll">\n            <li data-variantId="default" data-sizeHandle=\'default\' onclick="handleOptionSelectVariant(event,0,'.concat(o,')" id="product-size-selector-option-0"\n            class="text-center select-option-size font-[ibmMedium] text-xs lg:text-base text-[#2D3033] selected disable-text-select">\n                <div class="py-2.5 px-4">\n                    Select Size\n                </div>\n            </li>\n            ').concat(r.join(""),"\n        </ul>"))},handleOptionSelectProduct=function(t,e,o){var n=document.querySelector("#product-selector-".concat(o)),e=n.querySelector("#product-selector-option-".concat(e));"default"===e.getAttribute("data-productId")?t.stopPropagation():(t=n.querySelector(".combo-product-selected-value"),n=n.querySelectorAll(".select-option-prod"),e.classList.contains("selected")||(void 0!==selections[o-1]&&(currentVariantsStock[selections[o-1]]++,handleSizeChangeByVariantDropdown(selections[o-1])),selections[o-1]=void 0,btnTogglerCheck(),n.forEach(function(t){t.classList.remove("selected")}),e.classList.add("selected"),t.innerHTML=e.innerHTML,n=e.getAttribute("data-productId"),t=e.getAttribute("data-productHandle"),productsChosen[o-1]=t,createSizeOptions(n,o)))},handleSizeChangeByVariantDropdown=function(t){var t=parseInt(t),e=document.querySelectorAll('[data-variantId="'.concat(t,'"]')),o=currentVariantsStock["".concat(t)];e.forEach(function(t){var e=t.children[0].innerHTML.trim().split(" ")[0];return 0<o&&o<=10?(e+=" (".concat(o," Left)"),t.classList.contains("disabled-option")&&t.classList.remove("disabled-option")):o<=0?(e+=" - SOLD OUT",t.classList.contains("disabled-option")||t.classList.add("disabled-option")):t.classList.contains("disabled-option")&&t.classList.remove("disabled-option"),t.children[0].innerHTML=e,t})},handleOptionSelectVariant=function(t,e,o){var n,r=document.querySelector("#product-size-selector-".concat(o," ")),e=r.querySelector("#product-size-selector-option-".concat(e));e.classList.contains("disabled-option")||"default"===e.getAttribute("data-variantId")?t.stopPropagation():(t=r.querySelector(".combo-product-size-selected-value"),r=r.querySelectorAll(".select-option-size"),n=document.querySelector("#product-size-selector-dropdown-".concat(o)),e.classList.contains("selected")||(r.forEach(function(t){t.classList.remove("selected")}),e.classList.add("selected"),t.innerHTML=e.innerHTML.split(" (")[0],r=e.getAttribute("data-variantId"),t=e.getAttribute("data-sizeHandle"),sizesChosen[o-1]=t,"default"===r?(n.classList.contains("combo-product-dropdown-selected")&&(n.classList.remove("combo-product-dropdown-selected"),n.classList.add("combo-product-dropdown-unselected")),void 0!==selections[o-1]&&(currentVariantsStock[selections[o-1]]++,handleSizeChangeByVariantDropdown(selections[o-1])),selections[o-1]=void 0):(n.classList.contains("combo-product-dropdown-unselected")&&(n.classList.remove("combo-product-dropdown-unselected"),n.classList.add("combo-product-dropdown-selected")),void 0!==selections[o-1]&&(currentVariantsStock[selections[o-1]]++,handleSizeChangeByVariantDropdown(selections[o-1])),selections[o-1]=parseInt(r),currentVariantsStock[selections[o-1]]--,handleSizeChangeByVariantDropdown(selections[o-1])),btnTogglerCheck()))},AddToBagComboClick=function(){var e=_asyncToGenerator(_regeneratorRuntime().mark(function t(e){var o,n,r;return _regeneratorRuntime().wrap(function(t){for(;;)switch(t.prev=t.next){case 0:if(e.preventDefault(),o=document.querySelector(".add-to-bag-submit-combo-product-btn")){if(o.classList.contains("disabled-submit-btn"))return t.abrupt("return");t.next=5}else t.next=11;break;case 5:for(n={},r=0;r<comboDataJson.count;r++)n[productsChosen[r]]=sizesChosen[r];return commonGAClickEvent("PDP_COMBO_ATC_Click",n),console.log(selections),t.next=11,addToCartMultipleCombo(selections);case 11:case"end":return t.stop()}},t)}));return function(t){return e.apply(this,arguments)}}(),comboReloadFunc=function(){var t=null==(t=document.querySelector('[type="application/json"][name="combo-products-data-json"]'))?void 0:t.textContent;if(t){comboDataJson=JSON.parse(t);t=null==(t=document.querySelector('[type="application/json"][name="combo-cart-data-json"]'))?void 0:t.textContent;if(t){cartDataJson=JSON.parse(t),selections=[];for(var e=0;e<comboDataJson.count;e++)selections[e]=void 0,productsChosen[e]=void 0,sizesChosen[e]=void 0;initialVariantsStock={};for(var o=0;o<comboDataJson.products.length;o++)for(var n=comboDataJson.products[o],r=0;r<n.variants.length;r++){var c=n.variants[r],i=c.data.id;initialVariantsStock[i]=c.inventory_quantity}if(cartDataJson&&cartDataJson.items&&cartDataJson.items.length)for(var a,s=0;s<cartDataJson.items.length;s++)Object.keys(initialVariantsStock).includes(null==(a=cartDataJson)||null==(a=a.items)||null==(a=a[s])||null==(a=a.id)?void 0:a.toString())&&(initialVariantsStock[cartDataJson.items[s].id]-=cartDataJson.items[s].quantity);currentVariantsStock=_objectSpread({},initialVariantsStock)}}};domReady(comboReloadFunc);