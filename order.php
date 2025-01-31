<!doctype html>
<html lang="en">

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
    <!----------------------------------------------------------------------------------------------------------------------->

    <div class="theme-content fix-content-width" id="">
        <div id="shopify-section-template--14826243981367__main" class="shopify-section">
            <script src="//veirdo.in/cdn/shop/t/64/assets/order.min.js?v=36798896491465445191734691516" defer></script>
            <link href="//veirdo.in/cdn/shop/t/64/assets/order.min.css?v=124331953680911374911723122746" rel="stylesheet"
                type="text/css" media="all" />
            <script>
                if (localStorage.getItem('selectedOrderItem')) {
                    localStorage.removeItem('selectedOrderItem');
                }
            </script>

            <section class="flex flex-col text-[#1A1E31] lg:flex-row lg:mx-40 lg:gap-8 lg:my-8 mb-5 lg:mb-8">
                <div class="flex lg:block  hidden ">


                    <div data-ga-view-custom data-ga-view-info-custom="My_Account_View"
                        class="flex flex-col w-full lg:w-[261px] bg-[#FFF]">
                        <div class="flex flex-col gap-4 pb-6 lg:pb-6">
                            <div class="flex flex-col">
                                <div class="flex flex-row p-6 lg:hidden w-full bg-[#FFF] gap-4">
                                    <div
                                        class="flex w-12 h-12 rounded-[6px] border-[0.5px]-solid bg-[#FDEFFE] shadow-[2px_2px_0px_0px_#F9CCFD] justify-center items-center">
                                        <label class="flex text-[24px] font-[soraSemiBold] text-[#A740AF]"></label>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="flex font-[soraSemiBold] text-[16px] text-[#2D3033]">Hey </label>
                                        <label class="flex text-[12px] text-[#8A8E92] font-[soraRegular]">Logged in Via 8539873997 </label>
                                    </div>
                                </div>
                                <nav class="mx-6 lg:mx-0">
                                    <ul
                                        class="flex flex-col w-full lg:px-4 lg:py-[20px] lg:gap-[20px] border-[0.5px] border-solid shadow-[2px_2px_0px_0px_#57A3E9] lg:shadow-[1.5px_1.5px_0px_0px_#C9CBCC] border-[#57A3E9] lg:border lg:border-solid lg:border-[#E8E9EA] text-[14px] lg:text-[14px] bg-[#FFF] lg:rounded-[12px] rounded-[16px] text-[#3A3E41] font-[ibmMedium] lg:font-[soraMedium]">

                                        <li
                                            class="flex w-full p-4 lg:pb-4 lg:p-0 border-b-[0.5px] border-solid border-[#E8E9EA] cursor-pointer">
                                            <a id="my_profile" href="profile.php"
                                                class="flex flex-row w-full items-center justify-between text-[#3A3E41] ">
                                                <div class="flex flex-row gap-4 items-center">
                                                    <img
                                                        src=" //veirdo.in/cdn/shop/t/64/assets/icon-menu-profile-unselected.svg?v=91136568589909139011705656224 "
                                                        width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px] hidden lg:block">
                                                    <img
                                                        src="//veirdo.in/cdn/shop/t/64/assets/icon-menu-profile-unselected.svg?v=91136568589909139011705656224"
                                                        width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px] lg:hidden">
                                                    <span>PROFILE</span>
                                                </div>
                                                <span class="flex justify-center items-center">
                                                    <img
                                                        src="//veirdo.in/cdn/shop/t/64/assets/icon-right-arrow.svg?v=8174418789044488831705656226"
                                                        width="24" height="24" loading="lazy" class="flex h-6 w-6 lg:hidden">
                                                </span>
                                            </a>
                                        </li>

                                        <li
                                            class="flex w-full p-4 lg:pb-4 lg:p-0 border-b-[0.5px] border-solid border-[#E8E9EA] cursor-pointer">
                                            <a href="order.php"
                                                class="flex flex-row w-full  items-center justify-between text-[#3A3E41]  lg:text-[#A740AF] "
                                                href="/pages/my-order">
                                                <div class="flex flex-row gap-4 items-center">
                                                    <img
                                                        src=" //veirdo.in/cdn/shop/t/64/assets/icon-menu-orders-selected.svg?v=21216200354545938621705656223 "
                                                        width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px]">
                                                    <span id="menu_orders">ORDERS</span>
                                                </div>
                                                <span class="flex justify-center items-center">
                                                    <img
                                                        src="//veirdo.in/cdn/shop/t/64/assets/icon-right-arrow.svg?v=8174418789044488831705656226"
                                                        width="24" height="24" loading="lazy" class="flex h-6 w-6 lg:hidden">
                                                </span>
                                            </a>
                                        </li>



                                        <li
                                            class="flex w-full p-4 lg:pb-4 lg:p-0 border-b-[0.5px] border-solid border-[#E8E9EA] cursor-pointer">
                                            <a href="address.php"
                                                class="flex flex-row w-full  items-center justify-between text-[#3A3E41] "
                                                href="/account/addresses">
                                                <div class="flex flex-row gap-4 items-center">
                                                    <img
                                                        src=" //veirdo.in/cdn/shop/t/64/assets/icon-menu-address-unselected.svg?v=92712454482750582771705656222 "
                                                        width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px]">
                                                    <span>ADDRESSES</span>
                                                </div>
                                                <span class="flex justify-center items-center">
                                                    <img
                                                        src="//veirdo.in/cdn/shop/t/64/assets/icon-right-arrow.svg?v=8174418789044488831705656226"
                                                        width="24" height="24" loading="lazy" class="flex h-6 w-6 lg:hidden">
                                                </span>
                                            </a>
                                        </li>

                                        <!-- <li
                                            class="flex w-full p-4 lg:pb-4 lg:p-0 border-b-[0.5px] border-solid border-[#E8E9EA] cursor-pointer">
                                            <a onclick="gaClickEvent('My_Account_FAQ_Click');"
                                                class="flex flex-row w-full  items-center justify-between text-[#181B2D]" href="/pages/faq-s">
                                                <div class="flex flex-row gap-4 items-center">
                                                    <img
                                                        src="//veirdo.in/cdn/shop/t/64/assets/icon-menu-help.svg?v=166734870997395945581705656222"
                                                        width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px]">
                                                    <span>FAQ</span>
                                                </div>
                                                <span class="flex justify-center items-center">
                                                    <img
                                                        src="//veirdo.in/cdn/shop/t/64/assets/icon-right-arrow.svg?v=8174418789044488831705656226"
                                                        width="24" height="24" loading="lazy" class="flex h-6 w-6 lg:hidden">
                                                </span>
                                            </a>
                                        </li>

                                        <li
                                            class="flex w-full p-4 lg:pb-4 lg:p-0 border-b-[0.5px] lg:border-0 border-solid border-[#E8E9EA] cursor-pointer">
                                            <a onclick="gaClickEvent('My_Account_Whatsapp_Support_Click');"
                                                class="flex flex-row w-full  items-center justify-between text-[#3A3E41]"
                                                href="https://api.whatsapp.com/send/?phone=916352449482&text=Hi+Veirdo&type=phone_number&app_absent=0">
                                                <div class="flex flex-row gap-4 items-center">
                                                    <img
                                                        src="//veirdo.in/cdn/shop/t/64/assets/icon-menu-whatsapp.svg?v=141222336191819243741707743807"
                                                        width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px]">
                                                    <div class="flex flex-row items-center">
                                                        <span>SUPPORT</span>
                                                        <img
                                                            src="//veirdo.in/cdn/shop/t/64/assets/icon-whatsapp.svg?v=144334143843227464401704692041"
                                                            width="24" height="24" loading="lazy" class="flex h-[22px] w-[22px]">
                                                    </div>
                                                </div>
                                            </a>
                                        </li> -->

                                    </ul>
                                </nav>
                            </div>
                            <div data-ga-view-custom data-ga-view-info-custom="HAMBURGER_LOGIN_LOGOUT_BUTTON_VIEW"
                                class="flex mx-6 lg:mx-0 px-4 py-3 text-[#FF6062] text-[14px] font-[soraSemiBold] justify-center items-center bg-[#FFF] rounded-[8px] border-[0.5px] border-solid border-[#FF6062] lg:cursor-pointer shadow-[2px_2px_0px_0px_#FFA2A3]"
                                onclick="handleOpenCloseModal('','logout_popup','logout_transition','')">
                                LOGOUT
                            </div>
                        </div>
                    </div>

                    <script>
                        function handleProfileNavigation(url) {
                            if (isMobileDevice) {
                                if (document.getElementById('profileLayout')?.classList.contains('hidden')) {
                                    const newUrl = `${url}?profile=click`;
                                    window.history.pushState({}, document.title, newUrl);
                                    document.getElementById('profileLayout')?.classList.remove('hidden');
                                    document.getElementById('profileNavSection')?.classList.add('hidden')
                                    document.getElementById('header')?.classList.add('hidden')
                                } else if ((document.getElementById('profileNavSection')?.classList.contains('hidden'))) {
                                    const isFormChanged = sessionStorage?.getItem('isFormChanged');
                                    if (isFormChanged) {
                                        document.getElementById('profileBackButton').href = url
                                    } else {
                                        const urlWithoutParams = url.split('?')[0];
                                        window.history.pushState({}, document.title, urlWithoutParams);
                                        document.getElementById('profileLayout')?.classList.add('hidden');
                                        document.getElementById('profileNavSection')?.classList.remove('hidden')
                                        document.getElementById('header')?.classList.remove('hidden')
                                    }
                                    isFormChanged && sessionStorage.removeItem('isFormChanged');
                                }
                            } else {
                                const urlWithoutParams = url.split('?')[0];
                                document.getElementById('my_profile').href = urlWithoutParams
                            }
                        }
                    </script>

                </div>

                <div id="order_page" class="lg:flex lg:flex-col w-full bg-white items-center">
                    <div class="sticky-title flex flex-col lg:hidden w-full justify-between bg-white">
                        <div class="flex flex-row p-4 justify-between">
                            <div class="flex flex-row gap-6 font-[soraSemiBold] items-center">
                                <a href="order.php" class="flex">
                                    <img src="//veirdo.in/cdn/shop/t/64/assets/icon-nav-back-arrow.svg?v=50506306558079898021705656225"
                                        height="24" width="24" loading="lazy">
                                </a>
                                <label class="flex text-sm w-[163px] text-[#4A4F54]">ORDERS</label>
                            </div>
                            <div data-ga-view-custom data-ga-view-info-custom=ODP_help_icon_view
                                class="flex flex-row lg:hidden w-full gap-[4px] justify-end items-center">
                                <a href="https://api.whatsapp.com/send/?phone=916352449482&text=Hi+Veirdo&type=phone_number&app_absent=0"
                                    onclick="gaClickEvent(OLP_help_icon_click);" class='flex items-center'>
                                    <p class="text-xs font-[ibmMedium]">HELP </p>
                                    <img src="//veirdo.in/cdn/shop/t/64/assets/icon-help-whatsapp.svg?v=181552579383047487911723122733"
                                        width="17" height="17" loading="lazy" class="help-whatsapp-img lg:hidden">
                                </a>
                            </div>
                        </div>
                    </div>
                    <style>
                        .help-whatsapp-img {
                            margin-top: 3px;
                            margin-left: 5px;
                        }
                    </style>
                    <div class="flex flex-col w-full bg-white gap-y-4 lg:gap-y-6">
                        <div class="flex flex-col bg-[#fff]">
                            <div class="flex flex-col justify-center items-center h-[95dvh] lg:h-[40dvh]">
                                <img class="w-[150px] mb-[10px]"
                                    src="//veirdo.in/cdn/shop/t/64/assets/icon-no-order-found.gif?v=169249166671359598681723122735">
                                <p class="font-[soraSemiBold] text-base text-[#131814]">No Orders found!</p>
                            </div>
                            <div class="flex flex-row w-full gap-2 justify-center text-[#fff] sticky bottom-7 lg:relative">
                                <a href="/"
                                    class="flex w-full cursor-pointer justify-center rounded-[8px] px-4 py-3.5 lg:w-[400px] mx-4 items-center border border-[#323935] text-[#222527] font-[soraSemiBold] bg-[#00F092] shadow-[3px_3px_0px_0px_#FBB606]">Start
                                    Shopping</a>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

        </div>
    </div>



    <!----------------------------------------------------------------------------------------------------------------------->
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
</body>

</html>