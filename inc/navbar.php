<header id="header"
    class="relative  flex  z-[999] p-3 border border-neutral-50 lg:py-3 lg:px-10 drawer-menu lg:gap-12 justify-between items-center">
    <div class="flex gap-9">
        <div class="flex gap-4 self-center">

            <script>
            function autoLoginMbl(token) {
                const accountElement = document.getElementById('kpaccount2')
                const trackElementM1 = document.getElementById('kptarckm1')
                const trackElementM2 = document.getElementById('kptarckm2')
                if (token) {
                    if (accountElement) accountElement.style.display = 'flex';
                    if (trackElementM1) trackElementM1.style.display = 'none';
                    if (trackElementM2) trackElementM2.style.display = 'block';
                } else {
                    if (accountElement) accountElement.style.display = 'none';
                    if (trackElementM1) trackElementM1.style.display = 'block';
                    if (trackElementM2) trackElementM2.style.display = 'none';
                }
            }
            window.addEventListener('user-loggedin', function(event) {
                const {
                    token
                } = event?.detail;
                autoLoginMbl(token);
            });
            document.addEventListener('DOMContentLoaded', function() {
                var userToken = localStorage.getItem('KWIKSESSIONTOKEN');
                autoLoginMbl(userToken);
            });
            </script>

            <header-drawer data-breakpoint="tablet">

                <details id="Details-menu-drawer-container"
                    class="menu-drawer-container flex justify-center items-center">
                    <summary class="header__icon header__icon--menu initial header__icon--summary link focus-inset"
                        aria-label="Menu">
                        <span onclick="gaClickEvent('Hamburger_Click',{section_name:'Hamburger'})">
                            <img src="cdn/shop/t/64/assets/icon-hamburger-menu9580.svg?v=160362663456842056121706099193"
                                loading="lazy" width=20 height=20>
                        </span>
                    </summary>

                    <div data-ga-view-custom data-ga-view-info-custom="Hamburger_View" id="menu-drawer"
                        class="gradient menu-drawer md:w-1/2 absolute invisible z-[3] left-0 top-full p-0 bg-[#E9FAFF] rounded-r-3xl w-[90%] motion-reduce color-">
                        <div class="menu-drawer__inner-container relative h-full mx-4 mt-9">
                            <div class="menu-drawer__navigation-container overflow-y-auto h-full  ">
                                <nav class="menu-drawer__navigation flex flex-col justify-between h-full ">
                                    <div class="grid gap-4 content-between ">

                                        <ul class="menu-drawer__menu has-submenu bg-white list-menu blue-box-shadow parent-links-list-wrapper "
                                            role="list">
                                            <li
                                                class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 parent-links-list-inner border-b-[0.5px] border-neutral-100">
                                                <a id="HeaderDrawer-centre-stage-exclusive-drop"
                                                    href="veirdo-centre-stage.html"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    🌟CENTRE STAGE (EXCLUSIVE DROP)🌟
                                                </a>
                                            </li>
                                            <li
                                                class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 parent-links-list-inner border-b-[0.5px] border-neutral-100">
                                                <a id="HeaderDrawer-buy-2-get-1-free-season-sale"
                                                    href="buy2get1free-sale-2024.html"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    BUY 2 GET 1 FREE (SEASON SALE)
                                                </a>
                                            </li>
                                            <li
                                                class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 parent-links-list-inner border-b-[0.5px] border-neutral-100">
                                                <a id="HeaderDrawer-hoodies-sweatshirt" href="hoodies-sweatshirts.html"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    HOODIES &amp; SWEATSHIRT
                                                </a>
                                            </li>
                                            <li
                                                class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 parent-links-list-inner border-b-[0.5px] border-neutral-100">
                                                <a id="HeaderDrawer-winter-co-ord-set" href="co-ord-sets.html"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    WINTER CO-ORD SET
                                                </a>
                                            </li>
                                            <li
                                                class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 parent-links-list-inner border-b-[0.5px] border-neutral-100">
                                                <details id="Details-menu-drawer-menu-item-5">
                                                    <summary id="HeaderDrawer-winter-wear"
                                                        class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                                                        onclick="gaClickEvent(`WINTER WEAR_Element_Click`,{section_name:'Hamburger_Page',rank:'',element_name:`WINTER WEAR_Element_Click`})">
                                                        WINTER WEAR
                                                        <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                            loading="lazy" width=20 height=20 class="rotate-180">
                                                    </summary>
                                                    <div id="link-winter-wear"
                                                        class="menu-drawer__submenu has-submenu gradient motion-reduce"
                                                        tabindex="-1">
                                                        <div
                                                            class="menu-drawer__inner-submenu h-full overflow-y-auto overflow-x-hidden child-links-list-wrapper pb-40">
                                                            <button
                                                                class="parentmenu-back-button menu-drawer__close-button link link--text focus-inset text-neutral-700 font-[ibmMedium] text-sm uppercase  flex pb-5 gap-2 "
                                                                aria-expanded="true">
                                                                <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                                    loading="lazy" width=20 height=20>
                                                                WINTER WEAR
                                                            </button>
                                                            <ul class="menu-drawer__menu list-menu bg-white blue-box-shadow h-max	"
                                                                role="list" tabindex="-1">
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-winter-wear-plain-hoodies"
                                                                        href="plain-hoodies.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        PLAIN HOODIES
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-winter-wear-full-sleeve-t-shirts"
                                                                        href="full-sleeve-t-shirts-for-mens.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Full Sleeve T-Shirts
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-winter-wear-jackets"
                                                                        href="jackets-for-men.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Jackets
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-winter-wear-sweatshirts-full-sleeve"
                                                                        href="full-sleeve-sweatshirt.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Sweatshirts Full Sleeve
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner ">
                                                                    <a id="HeaderDrawer-winter-wear-shackets"
                                                                        href="mens-shackets.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Shackets
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </details>
                                            </li>
                                            <li
                                                class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 parent-links-list-inner border-b-[0.5px] border-neutral-100">
                                                <details id="Details-menu-drawer-menu-item-6">
                                                    <summary id="HeaderDrawer-oversized-t-shirts"
                                                        class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                                                        onclick="gaClickEvent(`OVERSIZED T-SHIRTS_Element_Click`,{section_name:'Hamburger_Page',rank:'',element_name:`OVERSIZED T-SHIRTS_Element_Click`})">
                                                        OVERSIZED T-SHIRTS
                                                        <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                            loading="lazy" width=20 height=20 class="rotate-180">
                                                    </summary>
                                                    <div id="link-oversized-t-shirts"
                                                        class="menu-drawer__submenu has-submenu gradient motion-reduce"
                                                        tabindex="-1">
                                                        <div
                                                            class="menu-drawer__inner-submenu h-full overflow-y-auto overflow-x-hidden child-links-list-wrapper pb-40">
                                                            <button
                                                                class="parentmenu-back-button menu-drawer__close-button link link--text focus-inset text-neutral-700 font-[ibmMedium] text-sm uppercase  flex pb-5 gap-2 "
                                                                aria-expanded="true">
                                                                <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                                    loading="lazy" width=20 height=20>
                                                                OVERSIZED T-SHIRTS
                                                            </button>
                                                            <ul class="menu-drawer__menu list-menu bg-white blue-box-shadow h-max	"
                                                                role="list" tabindex="-1">
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-oversized-t-shirts-printed-oversized-t-shirt"
                                                                        href="mens-oversized-t-shirts.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        PRINTED OVERSIZED T-SHIRT
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner ">
                                                                    <a id="HeaderDrawer-oversized-t-shirts-plain-oversized-t-shirt"
                                                                        href="plain-oversized-fit-t-shirts.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        PLAIN OVERSIZED T-SHIRT
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </details>
                                            </li>
                                            <li
                                                class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 parent-links-list-inner border-b-[0.5px] border-neutral-100">
                                                <details id="Details-menu-drawer-menu-item-7">
                                                    <summary id="HeaderDrawer-top-wear"
                                                        class="menu-drawer__menu-item list-menu__item link link--text focus-inset menu-drawer__menu-item--active"
                                                        onclick="gaClickEvent(`Top Wear_Element_Click`,{section_name:'Hamburger_Page',rank:'',element_name:`Top Wear_Element_Click`})">
                                                        Top Wear
                                                        <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                            loading="lazy" width=20 height=20 class="rotate-180">
                                                    </summary>
                                                    <div id="link-top-wear"
                                                        class="menu-drawer__submenu has-submenu gradient motion-reduce"
                                                        tabindex="-1">
                                                        <div
                                                            class="menu-drawer__inner-submenu h-full overflow-y-auto overflow-x-hidden child-links-list-wrapper pb-40">
                                                            <button
                                                                class="parentmenu-back-button menu-drawer__close-button link link--text focus-inset text-neutral-700 font-[ibmMedium] text-sm uppercase  flex pb-5 gap-2 "
                                                                aria-expanded="true">
                                                                <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                                    loading="lazy" width=20 height=20>
                                                                Top Wear
                                                            </button>
                                                            <ul class="menu-drawer__menu list-menu bg-white blue-box-shadow h-max	"
                                                                role="list" tabindex="-1">
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <details id="Details-menu-drawer-top-wear-t-shirts"
                                                                        class="nested-detail-tag child-nested-tag">
                                                                        <summary id="HeaderDrawer-top-wear-t-shirts"
                                                                            class="menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                                                            T-SHIRTS
                                                                            <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                                                loading="lazy" width=20 height=20
                                                                                class="rotate-180">

                                                                        </summary>
                                                                        <div id="childlink-t-shirts"
                                                                            class="menu-drawer__submenu has-submenu gradient motion-reduce">
                                                                            <button
                                                                                class="child-back-button menu-drawer__close-button link link--text focus-inset text-neutral-700 font-[ibmMedium] text-sm uppercase flex pb-5 gap-2"
                                                                                aria-expanded="true">
                                                                                <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                                                    loading="lazy" width=20 height=20>
                                                                                T-SHIRTS
                                                                            </button>
                                                                            <ul class="menu-drawer__menu list-menu bg-white blue-box-shadow grandchild-links-list-wrapper h-max	"
                                                                                role="list" tabindex="-1">
                                                                                <li
                                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 grandchild-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                                    <a id="HeaderDrawer-top-wear-t-shirts-acid-wash-t-shirts"
                                                                                        href="acid-wash-t-shirts.html"
                                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                                        ACID WASH T-SHIRTS
                                                                                    </a>
                                                                                </li>
                                                                                <li
                                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 grandchild-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                                    <a id="HeaderDrawer-top-wear-t-shirts-puff-print-t-shirts"
                                                                                        href="puff-print-t-shirts.html"
                                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                                        PUFF PRINT T-SHIRTS
                                                                                    </a>
                                                                                </li>
                                                                                <li
                                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 grandchild-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                                    <a id="HeaderDrawer-top-wear-t-shirts-printed-oversized-t-shirts"
                                                                                        href="mens-oversized-t-shirts.html"
                                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset menu-drawer__menu-item--active"
                                                                                        aria-current="page">
                                                                                        Printed Oversized T-Shirts
                                                                                    </a>
                                                                                </li>
                                                                                <li
                                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 grandchild-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                                    <a id="HeaderDrawer-top-wear-t-shirts-plain-oversized-t-shirts"
                                                                                        href="plain-oversized-fit-t-shirts.html"
                                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                                        Plain Oversized T-Shirts
                                                                                    </a>
                                                                                </li>
                                                                                <li
                                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 grandchild-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                                    <a id="HeaderDrawer-top-wear-t-shirts-printed-regular-fit-t-shirts"
                                                                                        href="printed-regular-t-shirt.html"
                                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                                        Printed Regular Fit T-Shirts
                                                                                    </a>
                                                                                </li>
                                                                                <li
                                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 grandchild-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                                    <a id="HeaderDrawer-top-wear-t-shirts-plain-regular-fit-t-shirts"
                                                                                        href="solid-regular-fit-t-shirts.html"
                                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                                        Plain Regular Fit T-Shirts
                                                                                    </a>
                                                                                </li>
                                                                                <li
                                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 grandchild-links-list-inner ">
                                                                                    <a id="HeaderDrawer-top-wear-t-shirts-plus-size-t-shirts"
                                                                                        href="plus-size-t-shirts.html"
                                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                                        Plus Size T-Shirts
                                                                                    </a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </details>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-top-wear-polo-t-shirts"
                                                                        href="polo-t-shirts.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Polo T-Shirts
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-top-wear-super-hero-t-shirts-venom-disney-marvel"
                                                                        href="merchandise-t-shirts.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Super Hero T-Shirts (Venom, Disney, Marvel)
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-top-wear-teens-t-shirts"
                                                                        href="boys-t-shirts.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        TEENS T-SHIRTS
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner ">
                                                                    <a id="HeaderDrawer-top-wear-vest"
                                                                        href="men-vests.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Vest
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </details>
                                            </li>
                                            <li
                                                class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 parent-links-list-inner border-b-[0.5px] border-neutral-100">
                                                <details id="Details-menu-drawer-menu-item-8">
                                                    <summary id="HeaderDrawer-bottom-wear"
                                                        class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                                                        onclick="gaClickEvent(`Bottom Wear_Element_Click`,{section_name:'Hamburger_Page',rank:'',element_name:`Bottom Wear_Element_Click`})">
                                                        Bottom Wear
                                                        <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                            loading="lazy" width=20 height=20 class="rotate-180">
                                                    </summary>
                                                    <div id="link-bottom-wear"
                                                        class="menu-drawer__submenu has-submenu gradient motion-reduce"
                                                        tabindex="-1">
                                                        <div
                                                            class="menu-drawer__inner-submenu h-full overflow-y-auto overflow-x-hidden child-links-list-wrapper pb-40">
                                                            <button
                                                                class="parentmenu-back-button menu-drawer__close-button link link--text focus-inset text-neutral-700 font-[ibmMedium] text-sm uppercase  flex pb-5 gap-2 "
                                                                aria-expanded="true">
                                                                <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                                    loading="lazy" width=20 height=20>
                                                                Bottom Wear
                                                            </button>
                                                            <ul class="menu-drawer__menu list-menu bg-white blue-box-shadow h-max	"
                                                                role="list" tabindex="-1">
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-bottom-wear-joggers"
                                                                        href="mens-joggers.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Joggers
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner ">
                                                                    <a id="HeaderDrawer-bottom-wear-cargos"
                                                                        href="cargos.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        CARGOS
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </details>
                                            </li>
                                            <li
                                                class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 parent-links-list-inner border-b-[0.5px] border-neutral-100">
                                                <details id="Details-menu-drawer-menu-item-9">
                                                    <summary id="HeaderDrawer-super-hero-tees"
                                                        class="menu-drawer__menu-item list-menu__item link link--text focus-inset"
                                                        onclick="gaClickEvent(`Super Hero Tees_Element_Click`,{section_name:'Hamburger_Page',rank:'',element_name:`Super Hero Tees_Element_Click`})">
                                                        Super Hero Tees
                                                        <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                            loading="lazy" width=20 height=20 class="rotate-180">
                                                    </summary>
                                                    <div id="link-super-hero-tees"
                                                        class="menu-drawer__submenu has-submenu gradient motion-reduce"
                                                        tabindex="-1">
                                                        <div
                                                            class="menu-drawer__inner-submenu h-full overflow-y-auto overflow-x-hidden child-links-list-wrapper pb-40">
                                                            <button
                                                                class="parentmenu-back-button menu-drawer__close-button link link--text focus-inset text-neutral-700 font-[ibmMedium] text-sm uppercase  flex pb-5 gap-2 "
                                                                aria-expanded="true">
                                                                <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                                                                    loading="lazy" width=20 height=20>
                                                                Super Hero Tees
                                                            </button>
                                                            <ul class="menu-drawer__menu list-menu bg-white blue-box-shadow h-max	"
                                                                role="list" tabindex="-1">
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-super-hero-tees-marvel"
                                                                        href="marvel-merchandise.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Marvel
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-super-hero-tees-venom"
                                                                        href="venom.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Venom
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-super-hero-tees-star-wars"
                                                                        href="starwars-mens-collection.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Star Wars
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-super-hero-tees-spider-man"
                                                                        href="spiderman-merchandise.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Spider Man
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-super-hero-tees-disney"
                                                                        href="disney-mens-collection.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Disney
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-super-hero-tees-thor"
                                                                        href="thor-collection.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Thor
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-super-hero-tees-black-panther"
                                                                        href="black-panther-collection.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Black Panther
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-super-hero-tees-iron-man"
                                                                        href="ironman-merchandise.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Iron Man
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner border-b-[0.5px] border-neutral-100">
                                                                    <a id="HeaderDrawer-super-hero-tees-doctor-strange"
                                                                        href="doctor-strange-collection.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Doctor Strange
                                                                    </a>
                                                                </li>
                                                                <li
                                                                    class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 child-links-list-inner ">
                                                                    <a id="HeaderDrawer-super-hero-tees-hulk"
                                                                        href="hulk-merchandise.html"
                                                                        class="menu-drawer__menu-item link link--text list-menu__item bg-[#ffffff] focus-inset">
                                                                        Hulk
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </details>
                                            </li>
                                            <li
                                                class="text-neutral-700 font-[ibmMedium] text-xs uppercase py-4 px-4 parent-links-list-inner ">
                                                <a id="HeaderDrawer-best-sellers" href="best-sellers-of-veirdo.html"
                                                    class="menu-drawer__menu-item list-menu__item link link--text focus-inset">
                                                    Best Sellers
                                                </a>
                                            </li>
                                        </ul>



                                        <ul class=" blue-box-shadow text-neutral-700 font-[ibmMedium] text-xs uppercase p-0"
                                            id="mobile-other-links">


                                            <li class="py-4 px-2  flex justify-center gap-1 items-center border-b-[0.5px] border-neutral-100"
                                                onclick="gaClickEvent('Return_Exchange_Click', { route: 'Mobile_Hamburger'});">
                                                <a onclick="handleShopifyLogin(event,'/account')" id="kptarckm2">TRACK
                                                    ORDER</a>
                                                <a onclick="handleKpAndShopifyLogin()" id="kptarckm1">TRACK ORDER</a>
                                            </li>

                                            <li class="py-4 px-2  flex justify-center gap-1 items-center border-b-[0.5px] border-neutral-100"
                                                onclick="gaClickEvent('Return_Exchange_Click', { route: 'Mobile_Hamburger'});">
                                                <a
                                                    href="https://returns.logisy.tech/?encipherencode=gAAAAABmE3v7SuehRFuIv6iK9IKCgi896bSxTHyGmanFIXu-K_2hTCQ6_JeMY7D3pGXpubL3b6WKf4nDc0JM6bjBMWoZwh5dBg==">RETURN/EXCHANGE</a>
                                            </li>

                                            <li class="py-4 px-2  flex justify-center gap-1 items-center"
                                                onclick="gaClickEvent('Hamburger_Whatsapp_click', { route: 'Mobile_Hamburger'});">
                                                <a href="https://api.whatsapp.com/send/?phone=916352449482&amp;text=Hi+Veirdo&amp;type=phone_number&amp;app_absent=0"
                                                    class="flex items-center">SUPPORT<img
                                                        src="cdn/shop/t/64/assets/icon-whatsapp73c3.svg?v=144334143843227464401704692041"
                                                        height=24 width=24 loading="lazy" /></a>
                                            </li>
                                        </ul>






























                                        <div id="kpaccount2"
                                            class="flex mx-0.5 px-4 py-3 lg:hidden text-[#FF6062] text-[14px] font-[soraSemiBold] justify-center items-center bg-[#FFF] rounded-[8px] border-[0.5px] border-solid border-[#FF6062] shadow-[2px_2px_0px_0px_#FFA2A3]"
                                            id="logout-button-mobile"
                                            onclick="handleOpenCloseModal('','logout_popup','logout_transition','')">
                                            LOGOUT
                                        </div>

                                    </div>
                                    <div class="pb-8 lg:pb-0">


                                        <div class="marquee-container-wrapper overflow-hidden" data-ga-view-custom
                                            data-ga-view-info-custom="PRODUCT_MARQUEE_TEXT_View"
                                            id="header-drawer-marquee">
                                            <div class="marquee-wrapper header-drawer-marquee">
                                                <div
                                                    class="marquee-content-inner px-[1rem] py-[0.5rem] lg:py-[0.75rem] ">
                                                    <div class="flex gap-[1rem] min-w-max marquee-tag-main">
                                                        <span
                                                            class="marquee-items text-[#FFDF38] font-[benzinExtrabold] text-[144px] leading-none">Find
                                                            Your Flip Side</span>
                                                    </div>
                                                    <div class="flex gap-[1rem] min-w-max marquee-tag-main">
                                                        <span
                                                            class="marquee-items text-[#FFDF38] font-[benzinExtrabold] text-[144px] leading-none">Find
                                                            Your Flip Side</span>
                                                    </div>
                                                    <div class="flex gap-[1rem] min-w-max marquee-tag-main">
                                                        <span
                                                            class="marquee-items text-[#FFDF38] font-[benzinExtrabold] text-[144px] leading-none">Find
                                                            Your Flip Side</span>
                                                    </div>
                                                    <div class="flex gap-[1rem] min-w-max marquee-tag-main">
                                                        <span
                                                            class="marquee-items text-[#FFDF38] font-[benzinExtrabold] text-[144px] leading-none">Find
                                                            Your Flip Side</span>
                                                    </div>
                                                    <div class="flex gap-[1rem] min-w-max marquee-tag-main">
                                                        <span
                                                            class="marquee-items text-[#FFDF38] font-[benzinExtrabold] text-[144px] leading-none">Find
                                                            Your Flip Side</span>
                                                    </div>
                                                    <div class="flex gap-[1rem] min-w-max marquee-tag-main">
                                                        <span
                                                            class="marquee-items text-[#FFDF38] font-[benzinExtrabold] text-[144px] leading-none">Find
                                                            Your Flip Side</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>




                                    </div>
                                </nav>
                            </div>
                        </div>

                    </div>

                </details>
            </header-drawer>
            <a href="../index.php"
                onclick="gaClickEvent('collection_TopNav_Click',{section_name:'Header',element_name:'Logo_Click',redirect_url:'/'})"
                class="header__heading-link link link--text focus-inset">
                <div class="header__heading-logo-wrapper">

                    <img src="cdn/shop/logo/logo-ff.png" alt="brand-logo"
                        width="120" height="28.085106382978726" loading="eager"
                        class="header__heading-logo motion-reduce" >
                </div>
            </a>
        </div>
        <!--Main menu -->
        <li onmouseenter='gaClickEvent("Megamenu_Click",{section_name:"Header",rank:"5",element_name:"TOP WEAR"})'
            class="desktop-menu flex w-max cursor-pointer items-center hover:border-b-2 hover:border-red-500 dropdown uppercase py-8 text-neutral-700 text-xs font-[soraSemiBold]">
            SPORT WEAR
            <div data-ga-view-custom data-ga-view-info-custom="Megamenu_View"
                class="absolute px-16 py-10 flex justify-between w-[100%] left-0 top-[95%] z-[9999] shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)] megamenu bg-white opacity-0 invisible ">
                <div class="collect-contain w-[70%]">
                    <div class="grid-item-links">
                        <div class="text-tertiary-600 uppercase text-base font-[ibmBold] py-4 "> SPORT T-SHIRTS </div><a
                            id="HeaderDrawer--printed-t-shirts-oversized-t-shirts" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Oversized T-Shirts',redirect_url:'/collections/mens-oversized-t-shirts'})"
                            class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset menu-drawer__menu-item--active"
                            aria-current="page">
                            Sleeveless
                        </a>
                        <a id="HeaderDrawer--printed-t-shirts-regular-fit-t-shirts" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Regular Fit T-Shirts',redirect_url:'/collections/printed-regular-t-shirt'})"
                            class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            half sleeve
                        </a>
                        <a id="HeaderDrawer--printed-t-shirts-regular-fit-t-shirts" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Regular Fit T-Shirts',redirect_url:'/collections/printed-regular-t-shirt'})"
                            class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            full sleeve
                        </a>
                        <a id="HeaderDrawer--printed-t-shirts-regular-fit-t-shirts" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Regular Fit T-Shirts',redirect_url:'/collections/printed-regular-t-shirt'})"
                            class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            over size t-shirt
                        </a>

                    </div>

                    <a id="HeaderDrawer--plain-hoodies" href="all-product.php"
                        onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'PLAIN HOODIES',redirect_url:'/collections/plain-hoodies'})"
                        class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                        gym vest
                    </a>



                    <a id="HeaderDrawer--plain-hoodies" href="all-product.php"
                        onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'PLAIN HOODIES',redirect_url:'/collections/plain-hoodies'})"
                        class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                        tighly
                    </a>

                    <div class="grid-item-links">
                        <div class="text-tertiary-600 uppercase text-base font-[ibmBold] py-4 "> Short</div><a
                            id="HeaderDrawer--winter-wear-sweatshirts-full-sleeve" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Sweatshirts Full Sleeve',redirect_url:'/collections/full-sleeve-sweatshirt'})"
                            class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            gym shorts
                        </a>
                        <a id="HeaderDrawer--winter-wear-jackets" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Jackets',redirect_url:'/collections/jackets-for-men'})"
                            class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            running shorts
                        </a>


                    </div>
                    <div class="grid-item-links">
                        <div class="text-tertiary-600 uppercase text-base font-[ibmBold] py-4 "> Lower</div><a
                            id="HeaderDrawer--winter-wear-sweatshirts-full-sleeve" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Sweatshirts Full Sleeve',redirect_url:'/collections/full-sleeve-sweatshirt'})"
                            class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            gym lower
                        </a>
                        <a id="HeaderDrawer--winter-wear-jackets" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Jackets',redirect_url:'/collections/jackets-for-men'})"
                            class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            track pant
                        </a>


                    </div>
                    <div class="grid-item-links">
                        <div class="text-tertiary-600 uppercase text-base font-[ibmBold] py-4 "> supporter</div><a
                            id="HeaderDrawer--winter-wear-sweatshirts-full-sleeve" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Sweatshirts Full Sleeve',redirect_url:'/collections/full-sleeve-sweatshirt'})"
                            class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            desi supporter
                        </a>
                        <a id="HeaderDrawer--winter-wear-jackets" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Jackets',redirect_url:'/collections/jackets-for-men'})"
                            class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            brief supporter
                        </a>


                    </div>





















                </div>
                <div class="flex flex-col w-[30%] gap-6">













                    <script>
                    emptyCartData = {
                        "href": "/collections/mens-new-arrivals",
                        "collectionName": "NEW ARRIVALS"
                    }
                    </script>







                    <script>
                    emptyCartData = {
                        "href": "/collections/mens-new-arrivals",
                        "collectionName": "NEW ARRIVALS"
                    }
                    </script>







                    <script>
                    emptyCartData = {
                        "href": "/collections/mens-new-arrivals",
                        "collectionName": "NEW ARRIVALS"
                    }
                    </script>





















































                </div>
            </div>
           
        </li>



        <ul class="megamenu-links-wrapper hidden lg:flex lg:items-center desktop-menu-conatiner  gap-5">



            <li onmouseenter='gaClickEvent("Megamenu_Click",{section_name:"Header",rank:"2",element_name:"Oversized T-Shirts "})'
                class="desktop-menu flex w-max cursor-pointer items-center hover:border-b-2 hover:border-red-500 dropdown uppercase py-8 text-neutral-700 text-xs font-[soraSemiBold]">
                Oversized T-Shirts
                <div data-ga-view-custom data-ga-view-info-custom="Megamenu_View"
                    class="absolute px-16 py-10 flex justify-between w-[100%] left-0 top-[95%] z-[9999] shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)] megamenu bg-white opacity-0 invisible ">
                    <div class="collect-contain w-[70%]">
                        <a id="HeaderDrawer--oversized-printed-t-shirts" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Oversized Printed T-Shirts ',redirect_url:'/collections/mens-oversized-t-shirts'})"
                            class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset menu-drawer__menu-item--active"
                            aria-current="page">
                            Oversized Printed T-Shirts
                        </a>


                        <a id="HeaderDrawer--oversized-plain-t-shirts" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Oversized Plain T-Shirts',redirect_url:'https://veirdo.in/collections/solid-oversized-fit-t-shirts'})"
                            class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            Oversized Plain T-Shirts
                        </a>









                    </div>
                    <div class="flex flex-col w-[30%] gap-6">











                        <script>
                        emptyCartData = {
                            "href": "/collections/mens-new-arrivals",
                            "collectionName": "NEW ARRIVALS"
                        }
                        </script>







                        <script>
                        emptyCartData = {
                            "href": "/collections/mens-new-arrivals",
                            "collectionName": "NEW ARRIVALS"
                        }
                        </script>







                        <script>
                        emptyCartData = {
                            "href": "/collections/mens-new-arrivals",
                            "collectionName": "NEW ARRIVALS"
                        }
                        </script>





















































                    </div>
                </div>
            </li>










            <li onmouseenter='gaClickEvent("Megamenu_Click",{section_name:"Header",rank:"5",element_name:"TOP WEAR"})'
                class="desktop-menu flex w-max cursor-pointer items-center hover:border-b-2 hover:border-red-500 dropdown uppercase py-8 text-neutral-700 text-xs font-[soraSemiBold]">
                TOP WEAR
                <div data-ga-view-custom data-ga-view-info-custom="Megamenu_View"
                    class="absolute px-16 py-10 flex justify-between w-[100%] left-0 top-[95%] z-[9999] shadow-[0_35px_60px_-15px_rgba(0,0,0,0.3)] megamenu bg-white opacity-0 invisible ">
                    <div class="collect-contain w-[70%]">
                        <div class="grid-item-links">
                            <div class="text-tertiary-600 uppercase text-base font-[ibmBold] py-4 "> PRINTED T-SHIRTS
                            </div><a id="HeaderDrawer--printed-t-shirts-oversized-t-shirts"
                                href="all-product.php"
                                onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Oversized T-Shirts',redirect_url:'/collections/mens-oversized-t-shirts'})"
                                class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset menu-drawer__menu-item--active"
                                aria-current="page">
                                Oversized T-Shirts
                            </a>
                            <a id="HeaderDrawer--printed-t-shirts-regular-fit-t-shirts"
                                href="all-product.php"
                                onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Regular Fit T-Shirts',redirect_url:'/collections/printed-regular-t-shirt'})"
                                class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                Regular Fit T-Shirts
                            </a>

                        </div>

                        <div class="grid-item-links">
                            <div class="text-tertiary-600 uppercase text-base font-[ibmBold] py-4 "> Plain T-Shirts
                            </div><a id="HeaderDrawer--plain-t-shirts-oversized-t-shirts"
                                href="all-product.php"
                                onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Oversized T-Shirts',redirect_url:'https://veirdo.in/collections/solid-oversized-fit-t-shirts'})"
                                class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                Oversized T-Shirts
                            </a>
                            <a id="HeaderDrawer--plain-t-shirts-regular-fit-t-shirts"
                                href="all-product.php"
                                onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Regular Fit T-Shirts',redirect_url:'/collections/solid-regular-fit-t-shirts'})"
                                class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                Regular Fit T-Shirts
                            </a>

                        </div>


                        <a id="HeaderDrawer--plain-hoodies" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'PLAIN HOODIES',redirect_url:'/collections/plain-hoodies'})"
                            class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            PLAIN HOODIES
                        </a>


                        <a id="HeaderDrawer--full-sleeve-t-shirts" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Full Sleeve T-Shirts',redirect_url:'/collections/full-sleeve-t-shirts-for-mens'})"
                            class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            Full Sleeve T-Shirts
                        </a>


                        <a id="HeaderDrawer--winter-co-ord-set" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'WINTER CO-ORD SET',redirect_url:'/collections/co-ord-sets'})"
                            class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            WINTER CO-ORD SET
                        </a>


                        <a id="HeaderDrawer--plus-size-t-shirts" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'PLUS SIZE T-SHIRTS',redirect_url:'/collections/plus-size-t-shirts'})"
                            class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            PLUS SIZE T-SHIRTS
                        </a>


                        <a id="HeaderDrawer--polo-t-shirts" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Polo T-Shirts',redirect_url:'/collections/mens-polo-tshirts'})"
                            class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            Polo T-Shirts
                        </a>


                        <a id="HeaderDrawer--boys-t-shirts" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'BOYS T-SHIRTS',redirect_url:'/collections/boys-t-shirts'})"
                            class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            BOYS T-SHIRTS
                        </a>

                        <div class="grid-item-links">
                            <div class="text-tertiary-600 uppercase text-base font-[ibmBold] py-4 "> Winter Wear</div><a
                                id="HeaderDrawer--winter-wear-sweatshirts-full-sleeve"
                                href="all-product.php"
                                onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Sweatshirts Full Sleeve',redirect_url:'/collections/full-sleeve-sweatshirt'})"
                                class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                Sweatshirts Full Sleeve
                            </a>
                            <a id="HeaderDrawer--winter-wear-jackets" href="all-product.php"
                                onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Jackets',redirect_url:'/collections/jackets-for-men'})"
                                class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                Jackets
                            </a>
                            <a id="HeaderDrawer--winter-wear-shackets" href="all-product.php"
                                onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Shackets',redirect_url:'/collections/mens-shackets'})"
                                class=" text-neutral-700 py-3 text-sm uppercase font-[ibmRegular] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                                Shackets
                            </a>

                        </div>


                        <a id="HeaderDrawer--super-hero-t-shirts-disney-marvel-star-wars"
                            href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Super Hero T-Shirts (Disney, Marvel, Star Wars)',redirect_url:'/collections/merchandise-t-shirts'})"
                            class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            Super Hero T-Shirts (Disney, Marvel, Star Wars)
                        </a>


                        <a id="HeaderDrawer--vest" href="all-product.php"
                            onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Vest',redirect_url:'/collections/men-vests'})"
                            class="py-4 text-tertiary-600 uppercase text-base font-[ibmBold] menu-drawer__menu-item link link--text list-menu__item focus-inset">
                            Vest
                        </a>



                    </div>
                    <div class="flex flex-col w-[30%] gap-6">











                        <script>
                        emptyCartData = {
                            "href": "/collections/mens-new-arrivals",
                            "collectionName": "NEW ARRIVALS"
                        }
                        </script>







                        <script>
                        emptyCartData = {
                            "href": "/collections/mens-new-arrivals",
                            "collectionName": "NEW ARRIVALS"
                        }
                        </script>







                        <script>
                        emptyCartData = {
                            "href": "/collections/mens-new-arrivals",
                            "collectionName": "NEW ARRIVALS"
                        }
                        </script>





















































                    </div>
                </div>
            </li>


              <a href="all-product.php">
                
            <li onmouseenter='gaClickEvent("Megamenu_Click",{section_name:"Header",rank:"6",element_name:"BOTTOM WEAR"})'
                class="desktop-menu flex w-max cursor-pointer items-center hover:border-b-2 hover:border-red-500 dropdown uppercase py-8 text-neutral-700 text-xs font-[soraSemiBold]">
                BOTTOM WEAR

            </li>

              </a>


            <a href="all-product.php"
                onclick="gaClickEvent('Megamenu_Click',{section_name:'Header',element_name:'Hoodies &amp; Sweatshirts',redirect_url:'https://veirdo.in/collections/hoodies-sweatshirts'})">
                <li
                    class="desktop-menu text-neutral-700 text-xs font-[soraSemiBold] uppercase flex items-center h-[80px] w-max Hoodies & Sweatshirts-dropdown ">
                    Hoodies & Sweatshirts
                </li>
            </a>








        </ul>
    </div>

    <div class="mega-menu-right-wrapper flex gap-4 justify-center items-center">


        <div class=" min-w-[320px] search-modal__content hidden lg:block">
            <predictive-search class="search-modal__form relative w-full" data-loading-text="Loading...">
                <form action="https://veirdo.in/search" method="get" role="search" class="search search-modal__form ">
                    <div class="flex gap-4 lg:block lg:mb-0 mb-5">
                        <img src="cdn/shop/t/64/assets/icon-arrow3667.svg?v=157279763716201898191704692040"
                            loading="lazy" width=20 height=20 class="block lg:hidden search-modal-back-button">
                        <div data-ga-view-custom data-ga-view-info-custom="Hamburger_View"
                            class="flex justify-between gap-5 field search-field w-full rounded-lg py-3 px-3 bg-[#F9F8FF] border-[0.5px] border-[#8F54F0]">

                            <input
                                class="search__input field__input bg-transparent font-[ibmMedium] text-sm text-[#B8ACC5] w-full"
                                id="Search-In-Modal-1" type="search" name="q" value=""
                                placeholder="Try searching “T-shirts”" role="combobox" aria-expanded="false"
                                aria-owns="predictive-search-results" aria-controls="predictive-search-results"
                                aria-haspopup="listbox" aria-autocomplete="list" autocorrect="off" autocomplete="off"
                                autocapitalize="off" spellcheck="false">
                            <button class="search__button field__button px-3" aria-label="Search" type="button">
                                <input type="checkbox" class="search-toggle" hidden>
                                <div class="search-icon-field">
                                    <svg width="24" height="24" viewBox="0 0 20 20" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.74988 2.5H6.99988V3.25H6.25H5.5V4H4.75V4.75H4V5.5H4.75H5.5H6.25V4.75H6.99988H7H7.74988V4V3.25V2.5ZM7.75 2.5H8.5H9.25H10H10.75H11.5V3.25H12.2499V4V4.75H11.5H11.4999H10.75V4H10H9.25H8.5H7.75V3.25V2.5ZM12.25 3.25H13V4H13.75V4.75H14.5V5.5H13.75H13H12.25V4.75V4V3.25ZM13.75 5.50001H14.5H15.25V6.25V6.25001V7H15.9999V7.75V8.5V9.25V10V10.75V11.5H15.25V12.25V13H14.5V13.75H15.25V14.5H16V15.25H16.75V16H17.5V16.75V17.5H16.75H16V16.75H15.25V16H14.5V15.25H13.75V14.5H13V15.25H12.25V14.5V13.75V13H13V12.25H13.75V11.5V10.75H14.5V10V9.25V8.5V7.75H13.75V7V6.25001H13V5.50001H13.75ZM11.5 13.75H12.2499V14.5V15.25H11.5V16H10.75H10H9.25H8.5H7.75V15.25V14.5H8.5H9.25H10H10.75V13.75H11.4999H11.5ZM4.75 5.50001H4H3.25V6.25V6.25001V7H2.5V7.75V8.5V9.25V10V10.75V11.5H3.25V12.25V13H4V13.75H4.75V14.5H5.5V15.25H6.25H6.99988V16H7.74988V15.25V14.5V13.75H7H6.99988H6.25V13H5.5V12.25H4.75V11.5V10.75H4V10V9.25V8.5V7.75H4.75V7V6.25001H5.5V5.50001H4.75Z"
                                            fill="#131814" />
                                    </svg>
                                </div>
                                <div class="clear-search-field hidden">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 20 20"
                                        fill="none">
                                        <g clip-path="url(#clip0_2051_15968)">
                                            <path
                                                d="M9.99999 8.82167L14.125 4.69667L15.3033 5.875L11.1783 10L15.3033 14.125L14.125 15.3033L9.99999 11.1783L5.87499 15.3033L4.69666 14.125L8.82166 10L4.69666 5.875L5.87499 4.69667L9.99999 8.82167Z"
                                                fill="#3A3E41" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_2051_15968">
                                                <rect width="20" height="20" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                            </button>
                        </div>
                    </div>
                    <div class="predictive-search predictive-search--header blue-box-shadow hidden" tabindex="-1"
                        data-predictive-search>
                    </div>

                    <span class="predictive-search-status visually-hidden hidden" role="status"
                        aria-hidden="true"></span>
                </form>
            </predictive-search>
        </div>

        <div class="block lg:hidden mobile-search-icon m-auto">
            <svg width="24" height="24" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M7.74988 2.5H6.99988V3.25H6.25H5.5V4H4.75V4.75H4V5.5H4.75H5.5H6.25V4.75H6.99988H7H7.74988V4V3.25V2.5ZM7.75 2.5H8.5H9.25H10H10.75H11.5V3.25H12.2499V4V4.75H11.5H11.4999H10.75V4H10H9.25H8.5H7.75V3.25V2.5ZM12.25 3.25H13V4H13.75V4.75H14.5V5.5H13.75H13H12.25V4.75V4V3.25ZM13.75 5.50001H14.5H15.25V6.25V6.25001V7H15.9999V7.75V8.5V9.25V10V10.75V11.5H15.25V12.25V13H14.5V13.75H15.25V14.5H16V15.25H16.75V16H17.5V16.75V17.5H16.75H16V16.75H15.25V16H14.5V15.25H13.75V14.5H13V15.25H12.25V14.5V13.75V13H13V12.25H13.75V11.5V10.75H14.5V10V9.25V8.5V7.75H13.75V7V6.25001H13V5.50001H13.75ZM11.5 13.75H12.2499V14.5V15.25H11.5V16H10.75H10H9.25H8.5H7.75V15.25V14.5H8.5H9.25H10H10.75V13.75H11.4999H11.5ZM4.75 5.50001H4H3.25V6.25V6.25001V7H2.5V7.75V8.5V9.25V10V10.75V11.5H3.25V12.25V13H4V13.75H4.75V14.5H5.5V15.25H6.25H6.99988V16H7.74988V15.25V14.5V13.75H7H6.99988H6.25V13H5.5V12.25H4.75V11.5V10.75H4V10V9.25V8.5V7.75H4.75V7V6.25001H5.5V5.50001H4.75Z"
                    fill="#131814" />
            </svg>
        </div>
        <div class="header__icons flex items-center gap-4">
            <div onmouseenter='gaClickEvent("Profile_Dropdown_View",{section_name:"Header",element_name:"Profile_Hover"})'
                class=" hidden profile-dropdown hover:border-b-[1px] hover:border-red-500 items-center h-[80px]"
                id="header-profile-button">


                <a href="javascript:void(0);" onclick="handleKpAndShopifyLogin(window.location.href);">
                    <svg width="21" height="21" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg"
                        id="kpicon">
                        <path
                            d="M22.9129 12.935L13.7571 23.0474C13.5348 23.2929 13.1284 23.1084 13.1669 22.7794L14.0816 14.9731H10.6991C10.4034 14.9731 10.2484 14.6219 10.4478 14.4035L20.3133 3.59739C20.5589 3.32834 20.9984 3.58134 20.8891 3.92887L18.2354 12.3664H22.6607C22.9557 12.3664 23.1109 12.7163 22.9129 12.935Z"
                            fill="#FEA203" />
                        <path id="svgkp-path" fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.6079 5.35819C16.4805 5.1933 16.3421 5.03582 16.1932 4.8869C15.2702 3.96387 14.0183 3.44531 12.7129 3.44531C11.4075 3.44531 10.1556 3.96387 9.2326 4.8869C8.30957 5.80993 7.79102 7.06183 7.79102 8.36719C7.79102 9.67255 8.30957 10.9244 9.2326 11.8475C9.48368 12.0986 9.75909 12.3197 10.0533 12.5086L11.0235 11.4503C10.7335 11.2914 10.4649 11.0911 10.227 10.8531C9.56766 10.1938 9.19727 9.29959 9.19727 8.36719C9.19727 7.43479 9.56766 6.54057 10.227 5.88127C10.8863 5.22196 11.7805 4.85156 12.7129 4.85156C13.6453 4.85156 14.5395 5.22196 15.1988 5.88127C15.3636 6.04604 15.5103 6.22549 15.6377 6.41654L16.6079 5.35819ZM20.6413 18.6497L19.6746 19.7132C20.1676 20.4122 20.4473 21.2264 20.4473 22.0781V23.8359C20.4473 24.2243 20.7621 24.5391 21.1504 24.5391C21.5387 24.5391 21.8535 24.2243 21.8535 23.8359V22.0781C21.8535 20.7863 21.4016 19.6103 20.6413 18.6497ZM12.3111 17.5078H10.3026C7.27113 17.5078 4.97852 19.6394 4.97852 22.0781V23.8359C4.97852 24.2243 4.66372 24.5391 4.27539 24.5391C3.88707 24.5391 3.57227 24.2243 3.57227 23.8359V22.0781C3.57227 18.6922 6.67684 16.1016 10.3026 16.1016H12.4885L12.3111 17.5078Z"
                            fill="currentColor" stroke="currentColor" />
                    </svg>
                </a>



                <div
                    class="absolute flex flex-col w-[15%] right-[2%] top-full rounded-xl z-[9999] profile-menu opacity-0 invisible bg-white account-menu-shadow p-4">
                    <ul
                        class="flex flex-col w-full px-0 py-0 text-neutral-700 font-[ibmMedium] rounded-2xl text-sm uppercase divide-y-[0.5px] divide-[#C9CBCC]">


                        <a class="px-4 py-5" href="javascript:void(0);" onclick="handleShopifyLogin(event,'/account')"
                            id="kpaccount">
                            <li class="text-left">My Account</li>
                        </a>
                        <a class="px-4 py-5" href="javascript:void(0);" onclick="handleKpAndShopifyLogin()"
                            id="kptarck1">
                            <li class="text-left">TRACK ORDER</li>
                        </a>
                        <a id="kptarck2" class="px-4 py-5"
                            href="javascript:void(0);handleShopifyLogin(event,'/account')"
                            onclick="gaClickEvent('collection_TopNav_Click',{section_name:'Header',element_name:'Desktop_RETURN/EXCHANGE')">
                            <li class="text-left">TRACK ORDER</li>
                        </a>


                        <a class="px-4 py-5"
                            href="https://returns.logisy.tech/?encipherencode=gAAAAABmE3v7SuehRFuIv6iK9IKCgi896bSxTHyGmanFIXu-K_2hTCQ6_JeMY7D3pGXpubL3b6WKf4nDc0JM6bjBMWoZwh5dBg=="
                            onclick="gaClickEvent('collection_TopNav_Click',{section_name:'Header',element_name:'Desktop_RETURN/EXCHANGE',redirect_url:'')">
                            <li class="text-left">RETURN/EXCHANGE</li>
                        </a>
                        <a class="px-4 py-5 flex gap-1 items-center"
                            href="https://api.whatsapp.com/send/?phone=916352449482&amp;text=Hi+Veirdo&amp;type=phone_number&amp;app_absent=0"
                            onclick="gaClickEvent('collection_TopNav_Click',{section_name:'Header',element_name:'Desktop_SUPPORT',redirect_url:'https://api.whatsapp.com/send/?phone=916352449482&text=Hi+Veirdo&type=phone_number&app_absent=0')">
                            <li class="text-left">SUPPORT</li>
                            <img src="cdn/shop/t/64/assets/icon-whatsapp73c3.svg?v=144334143843227464401704692041"
                                height="24" width="24" loading="lazy" class="">
                        </a>

                    </ul>

                    <button id="kplogout"
                        class="header-desktop-logout-btn text-[#FF6062] font-[soraSemiBold] text-sm flex items-center justify-center p-4 rounded-lg border-[0.5px] border-[#FF6062] bg-white shadow-[2px_2px_0px_0px_#FFA2A3]">
                        LOGOUT
                    </button>

                </div>




























            </div>



            <div class=" block lg:hidden">

                <a href="javascript:void(0);" onclick="kpHandleLogin('/account');">
                    <svg width="21" height="21" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg"
                        id="kpicon2">
                        <path
                            d="M22.9129 12.935L13.7571 23.0474C13.5348 23.2929 13.1284 23.1084 13.1669 22.7794L14.0816 14.9731H10.6991C10.4034 14.9731 10.2484 14.6219 10.4478 14.4035L20.3133 3.59739C20.5589 3.32834 20.9984 3.58134 20.8891 3.92887L18.2354 12.3664H22.6607C22.9557 12.3664 23.1109 12.7163 22.9129 12.935Z"
                            fill="#FEA203" />
                        <path id="svgkp-path" fill-rule="evenodd" clip-rule="evenodd"
                            d="M16.6079 5.35819C16.4805 5.1933 16.3421 5.03582 16.1932 4.8869C15.2702 3.96387 14.0183 3.44531 12.7129 3.44531C11.4075 3.44531 10.1556 3.96387 9.2326 4.8869C8.30957 5.80993 7.79102 7.06183 7.79102 8.36719C7.79102 9.67255 8.30957 10.9244 9.2326 11.8475C9.48368 12.0986 9.75909 12.3197 10.0533 12.5086L11.0235 11.4503C10.7335 11.2914 10.4649 11.0911 10.227 10.8531C9.56766 10.1938 9.19727 9.29959 9.19727 8.36719C9.19727 7.43479 9.56766 6.54057 10.227 5.88127C10.8863 5.22196 11.7805 4.85156 12.7129 4.85156C13.6453 4.85156 14.5395 5.22196 15.1988 5.88127C15.3636 6.04604 15.5103 6.22549 15.6377 6.41654L16.6079 5.35819ZM20.6413 18.6497L19.6746 19.7132C20.1676 20.4122 20.4473 21.2264 20.4473 22.0781V23.8359C20.4473 24.2243 20.7621 24.5391 21.1504 24.5391C21.5387 24.5391 21.8535 24.2243 21.8535 23.8359V22.0781C21.8535 20.7863 21.4016 19.6103 20.6413 18.6497ZM12.3111 17.5078H10.3026C7.27113 17.5078 4.97852 19.6394 4.97852 22.0781V23.8359C4.97852 24.2243 4.66372 24.5391 4.27539 24.5391C3.88707 24.5391 3.57227 24.2243 3.57227 23.8359V22.0781C3.57227 18.6922 6.67684 16.1016 10.3026 16.1016H12.4885L12.3111 17.5078Z"
                            fill="currentColor" stroke="currentColor" />
                    </svg>
                </a>

            </div>

            <div class="whishlist-wrapper h-[24px] w-[24px]">



                <a href="javascript:void(0);" onclick="handleKpAndShopifyLogin('/pages/wishlist')">
                    <img src="cdn/shop/t/64/assets/icon-wishlistaa8e.svg?v=113452544103302444001706007531" width="24"
                        height="24" loading="lazy">
                </a>

            </div>



            <!-- Cart Icon start -->
            <div class="relative cart-icon flex justify-center">
                <button class="cart-icon-bubble" onclick="headerGaEvents('Cart_Click','header','/cart') ">
                    <img src="svg/cart.svg" alt="">
                </button>
            </div>
            <!-- Cart Icon end -->
        </div>
    </div>
</header>

<div class="slider hidden-block flex fixed w-full top-0 right-0 bottom-0 bg-gray-600/25 z-[100]">
    <div class="slider__empty h-full w-[10%] lg:w-[65%] z-[150] bg-transparent overflow-hidden"></div>
    <div class="slider__container h-[100dvh] w-[90%] lg:w-[35%] bg-white overflow-y-auto relative cart-drawer-wrapper">
        <div data-ga-view data-ga-view-info="Cart_Halfcard_View" id="main-cart-items" data-id="cart-drawer">
            <div class="js-contents flex flex-col h-[100dvh] overflow-hidden">
                <div class="w-full lg:border-b-4 lg:border-[#f6f6f6] bg-white z-[10] ">


                    <div class="flex justify-between p-4" id="cart-mobile-count-header">
                        <div data-ga-view-quick data-ga-view-info-quick="collection_HalfCart_View"
                            data-ga-view-payload-quick="{itemProductTag: '', NoOfStyles:'0',cartTotalDiscount:'0.0',cartValue:'0.0', itemStyleId:'', itemStyleQty:'', itemPrice:'', itemDiscountPrice:''}"
                            class="text-[#222527] font-[ibmSemiBold] text-sm lg:text-base uppercase">
                            MY Cart

                        </div>
                        <button class="icon-close-drawer ">
                            <img src="cdn/shop/t/64/assets/icon-close15dc.svg?v=42907484647275626011705057419"
                                loading="lazy" width="24" height="24" alt="cart close icon">
                        </button>
                    </div>
                </div>
                <div class="overflow-y-auto h-full">

                    <div class="flex flex-col justify-between h-[80vh] lg:h-[70vh] gap-12">
                        <div id="empty-cart-items" data-id="empty-cart-drawer" class="h-full ">
                            <div class="js-contents h-full flex w-full justify-center ">
                                <div class="lg:pb-20 pt-8 h-full flex items-center lg:h-[130%]">
                                    <div class="">
                                        <p
                                            class="hidden cart-drawer-cart-heading text-[#222527] font-[ibmSemiBold] text-sm lg:text-xl uppercase lg:pl-[9.4rem]  pb-[4.125rem]">
                                            MY BAG
                                        </p>
                                        <div class="flex flex-col justify-center items-center gap-3 lg:gap-4  ">
                                            <img src="cdn/shop/t/64/assets/icon-empty-cartf0b8.gif?v=169249166671359598681705057421"
                                                alt="empty cart icon" loading="lazy" width="160" height="140">
                                            <div class="flex flex-col items-center gap-2 lg:gap-3">
                                                <p class="text-[#131814] text-base font-[soraSemiBold]">looks like your
                                                    cart is on a diet
                                                </p>
                                                <span class="text-[#74797D] font-[ibmRegular] text-sm">waiting for some
                                                    trendy threads to
                                                    bulk it up!</span>
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
                                            <h2
                                                class="font-[soraSemiBold] text-xs lg:text-lg text-[#2D3033] lg:pl-1 uppercase">
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
            </div>
        </div>
    </div>
</div>



<div id="logout_popup"
    class="fixed top-0 left-0 w-full h-full flex justify-center items-center bg-[#141A38]/50 bg-opacity-70 z-[999] invisible"
    onclick="handleOpenCloseModal(event,'logout_popup','logout_transition','')">
    <div id="logout_transition"
        class="flex flex-col bg-white rounded-[8px] p-4 gap-5 text-[14px] opacity-0 transition-all duration-500 ease-in-out translate-y-full lg:-translate-y-[10%]">
        <div class="flex flex-col items-start gap-4">
            <label class="flex text-[#666875] font-[ibmMedium]">Are you sure you want to logout?</label>
        </div>
        <div class="flex flex-row w-full lg:gap-1 gap-2 lg:justify-evenly justify-start font-[soraSemiBold]">
            <a class="flex w-[136px] h-10 cursor-pointer justify-center rounded-[8px] px-4 py-3 items-center border-[0.5px] border-[#74797D] border-solid shadow-[2px_2px_0px_0px_#EAEAE9] text-[#222527]"
                onclick="handleOpenCloseModal('','logout_popup','logout_transition',''); gaClickEvent('Logout_Modal_Cancel_Click')"
                type="reset">
                CANCEL
            </a>
            <a href="../index.html" data-section-name="my-account-navigation"
                class="flex w-[136px] h-10 justify-center items-center rounded-[8px] px-4 py-3 gap-2 text-[#FF6062] border-[0.5px] border-solid border-[#FF6062] shadow-[2px_2px_0px_0px_#FFA2A3] handle-login"
                onclick="handleOpenCloseModal('','logout_popup','logout_transition',''); gaClickEvent('Logout_Modal_Logout_Click')">
                LOGOUT
            </a>
        </div>
    </div>
</div>