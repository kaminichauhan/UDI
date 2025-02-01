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

    <div
        class="theme-content fix-content-width"
        id="MainContent">
        <div id="shopify-section-template--14826243686455__main" class="shopify-section">
            <link href="//veirdo.in/cdn/shop/t/64/assets/customer.min.css?v=34258468351805785691705656220" rel="stylesheet" type="text/css" media="all" />
            <script src="//veirdo.in/cdn/shop/t/64/assets/customer.min.js?v=72602371578187662191732008471" defer></script>
            <script src="//veirdo.in/cdn/shop/t/64/assets/profile.min.js?v=36221070446529831791707917523" defer></script>

            <a style="display: none!important;">logout</a>
            <section class="flex flex-col lg:flex-row lg:mx-40 lg:gap-8 lg:my-8">
                <div id="profileNavSection" class="flex hidden lg:block">


                    <div data-ga-view-custom
                        data-ga-view-info-custom="My_Account_View" class="flex flex-col w-full lg:w-[261px] bg-[#FFF]">
                        <div class="flex flex-col gap-4 pb-6 lg:pb-6">
                            <div class="flex flex-col">
                                <div class="flex flex-row p-6 lg:hidden w-full bg-[#FFF] gap-4">
                                    <div class="flex w-12 h-12 rounded-[6px] border-[0.5px]-solid bg-[#FDEFFE] shadow-[2px_2px_0px_0px_#F9CCFD] justify-center items-center">
                                        <label class="flex text-[24px] font-[soraSemiBold] text-[#A740AF]"></label>
                                    </div>
                                    <div class="flex flex-col gap-1">
                                        <label class="flex font-[soraSemiBold] text-[16px] text-[#2D3033]">Hey </label>
                                        <label class="flex text-[12px] text-[#8A8E92] font-[soraRegular]">Logged in Via 8539873997 </label>
                                    </div>
                                </div>
                                <nav class="mx-6 lg:mx-0">
                                    <ul class="flex flex-col w-full lg:px-4 lg:py-[20px] lg:gap-[20px] border-[0.5px] border-solid shadow-[2px_2px_0px_0px_#57A3E9] lg:shadow-[1.5px_1.5px_0px_0px_#C9CBCC] border-[#57A3E9] lg:border lg:border-solid lg:border-[#E8E9EA] text-[14px] lg:text-[14px] bg-[#FFF] lg:rounded-[12px] rounded-[16px] text-[#3A3E41] font-[ibmMedium] lg:font-[soraMedium]">

                                        <li
                                            class="flex w-full p-4 lg:pb-4 lg:p-0 border-b-[0.5px] border-solid border-[#E8E9EA] cursor-pointer">
                                            <a id="my_profile" href="profile.php"  class="flex flex-row w-full items-center justify-between text-[#3A3E41]  lg:text-[#A740AF] ">
                                                <div class="flex flex-row gap-4 items-center">
                                                    <img src=" //veirdo.in/cdn/shop/t/64/assets/icon-menu-profile-selected.svg?v=165204625595570745611705656224 " width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px] hidden lg:block">
                                                    <img src="//veirdo.in/cdn/shop/t/64/assets/icon-menu-profile-unselected.svg?v=91136568589909139011705656224" width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px] lg:hidden">
                                                    <span>PROFILE</span>
                                                </div>
                                                <span class="flex justify-center items-center">
                                                    <img src="//veirdo.in/cdn/shop/t/64/assets/icon-right-arrow.svg?v=8174418789044488831705656226" width="24" height="24" loading="lazy" class="flex h-6 w-6 lg:hidden">
                                                </span>
                                            </a>
                                        </li>

                                        <li
                                            class="flex w-full p-4 lg:pb-4 lg:p-0 border-b-[0.5px] border-solid border-[#E8E9EA] cursor-pointer">
                                            <a href="order.php" class="flex flex-row w-full  items-center justify-between text-[#3A3E41] " href="/pages/my-order">
                                                <div class="flex flex-row gap-4 items-center">
                                                    <img src=" //veirdo.in/cdn/shop/t/64/assets/icon-menu-orders-unselected.svg?v=170228236594375482621705656223 " width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px]">
                                                    <span id="menu_orders">ORDERS</span>
                                                </div>
                                                <span class="flex justify-center items-center">
                                                    <img src="//veirdo.in/cdn/shop/t/64/assets/icon-right-arrow.svg?v=8174418789044488831705656226" width="24" height="24" loading="lazy" class="flex h-6 w-6 lg:hidden">
                                                </span>
                                            </a>
                                        </li>



                                        <li
                                            class="flex w-full p-4 lg:pb-4 lg:p-0 border-b-[0.5px] border-solid border-[#E8E9EA] cursor-pointer">
                                            <a href="address.php" class="flex flex-row w-full  items-center justify-between text-[#3A3E41] " href="/account/addresses">
                                                <div class="flex flex-row gap-4 items-center">
                                                    <img src=" //veirdo.in/cdn/shop/t/64/assets/icon-menu-address-unselected.svg?v=92712454482750582771705656222 " width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px]">
                                                    <span>ADDRESSES</span>
                                                </div>
                                                <span class="flex justify-center items-center">
                                                    <img src="//veirdo.in/cdn/shop/t/64/assets/icon-right-arrow.svg?v=8174418789044488831705656226" width="24" height="24" loading="lazy" class="flex h-6 w-6 lg:hidden">
                                                </span>
                                            </a>
                                        </li>

                                        <!-- <li
                                            class="flex w-full p-4 lg:pb-4 lg:p-0 border-b-[0.5px] border-solid border-[#E8E9EA] cursor-pointer">
                                            <a onclick="gaClickEvent('My_Account_FAQ_Click');" class="flex flex-row w-full  items-center justify-between text-[#181B2D]" href="/pages/faq-s">
                                                <div class="flex flex-row gap-4 items-center">
                                                    <img src="//veirdo.in/cdn/shop/t/64/assets/icon-menu-help.svg?v=166734870997395945581705656222" width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px]">
                                                    <span>FAQ</span>
                                                </div>
                                                <span class="flex justify-center items-center">
                                                    <img src="//veirdo.in/cdn/shop/t/64/assets/icon-right-arrow.svg?v=8174418789044488831705656226" width="24" height="24" loading="lazy" class="flex h-6 w-6 lg:hidden">
                                                </span>
                                            </a>
                                        </li> -->

                                        <!-- <li
                                            class="flex w-full p-4 lg:pb-4 lg:p-0 border-b-[0.5px] lg:border-0 border-solid border-[#E8E9EA] cursor-pointer">
                                            <a onclick="gaClickEvent('My_Account_Whatsapp_Support_Click');" class="flex flex-row w-full  items-center justify-between text-[#3A3E41]" href="https://api.whatsapp.com/send/?phone=916352449482&text=Hi+Veirdo&type=phone_number&app_absent=0">
                                                <div class="flex flex-row gap-4 items-center">
                                                    <img src="//veirdo.in/cdn/shop/t/64/assets/icon-menu-whatsapp.svg?v=141222336191819243741707743807" width="20" height="20" loading="lazy" class="flex h-[20px] w-[20px]">
                                                    <div class="flex flex-row items-center">
                                                        <span>SUPPORT</span>
                                                        <img src="//veirdo.in/cdn/shop/t/64/assets/icon-whatsapp.svg?v=144334143843227464401704692041" width="24" height="24" loading="lazy" class="flex h-[22px] w-[22px]">
                                                    </div>
                                                </div>
                                            </a>
                                        </li> -->

                                    </ul>
                                </nav>
                            </div>
                            <div data-ga-view-custom
                                data-ga-view-info-custom="HAMBURGER_LOGIN_LOGOUT_BUTTON_VIEW" class="flex mx-6 lg:mx-0 px-4 py-3 text-[#FF6062] text-[14px] font-[soraSemiBold] justify-center items-center bg-[#FFF] rounded-[8px] border-[0.5px] border-solid border-[#FF6062] lg:cursor-pointer shadow-[2px_2px_0px_0px_#FFA2A3]" onclick="handleOpenCloseModal('','logout_popup','logout_transition','')">
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
                <div id="profileLayout" class="flex hidden flex-col w-full lg:block">
                    <div class="sticky-title flex flex-col lg:hidden w-full justify-between bg-white">
                        <div class="flex flex-row gap-6 font-[soraSemiBold] p-4 items-center">
                            <a id="profileBackButton" onclick="handleProfileNavigation('/account')"><img src="//veirdo.in/cdn/shop/t/64/assets/icon-nav-back-arrow.svg?v=50506306558079898021705656225" loading="lazy" height='24' width='24'></a>
                            <label class="flex text-[14px] w-[163px] text-[#4A4F54]">PROFILE</label>
                        </div>
                        <div class="flex lg:hidden w-full h-1 bg-[#E8E9EA]"></div>
                    </div>


                    <form
                        name="profile-7502186774583"
                        data-profile-id="7502186774583"
                        id="update-profile-form" onchange="handleFormChange(); gaClickEvent('My_Profile_Edit')" autocomplete="off">
                        <div data-ga-view-custom
                            data-ga-view-info-custom="My_Profile_View" class="lg:flex lg:flex-col lg:items-center lg:gap-6 bg-white px-4 py-6 lg:px-0 lg:py-0">
                            <div class="flex flex-col w-full gap-6">
                                <div class="flex flex-col gap-4 lg:gap-[16px]">
                                    <div class="flex flex-col lg:flex-row gap-4 lg:gap-[16px]">

                                        <fieldset data-field-name="first_name" class="input-container flex flex-col h-16  w-full  relative ">
                                            <div class="flex items-center border-[0.5px] border-solid border-[#C9CBCC] rounded-[8px]" style="box-shadow: 1.5px 1.5px 0px 0px rgba(71, 71, 71, 0.08);">
                                                <label class="absolute placeholder-text text-[#74797D] text-[12px] font-[ibmRegular] -top-[12px] left-[10px] bg-white px-[6px] py-[3px] z-[1]">

                                                    First Name


                                                    <span>*</span>

                                                </label>


                                                <input
                                                    autocomplete="off"
                                                    data-label="First Name"
                                                    data-valid="false"
                                                    class="customer-first-name  validate_empty validatate-input-field  min-w-[100%] shadow-sm  w-full h-[50px] p-4 rounded-[8px] font-[ibmRegular] text-[14px] text-[#222527]"
                                                    type="text"
                                                    name="first_name"






                                                    data-required="required"



                                                    data-regex="^[A-Za-z ]+$"



                                                    value=""

                                                    id="profile_first_name">

                                            </div>
                                            <span class="error-msg text-[#E83336] font-[ibmRegular] text-[10px] lg:text-[12px]"></span>

                                        </fieldset>




                                        <fieldset data-field-name="last_name" class="input-container flex flex-col h-16  w-full  relative ">
                                            <div class="flex items-center border-[0.5px] border-solid border-[#C9CBCC] rounded-[8px]" style="box-shadow: 1.5px 1.5px 0px 0px rgba(71, 71, 71, 0.08);">
                                                <label class="absolute placeholder-text text-[#74797D] text-[12px] font-[ibmRegular] -top-[12px] left-[10px] bg-white px-[6px] py-[3px] z-[1]">

                                                    Last Name


                                                    <span>*</span>

                                                </label>


                                                <input
                                                    autocomplete="off"
                                                    data-label="Last Name"
                                                    data-valid="false"
                                                    class="customer-last-name  validate_empty validatate-input-field  min-w-[100%] shadow-sm  w-full h-[50px] p-4 rounded-[8px] font-[ibmRegular] text-[14px] text-[#222527]"
                                                    type="text"
                                                    name="last_name"






                                                    data-required=""



                                                    data-regex="^[A-Za-z]+$"



                                                    value=""

                                                    id="profile_last_name">

                                            </div>
                                            <span class="error-msg text-[#E83336] font-[ibmRegular] text-[10px] lg:text-[12px]"></span>

                                        </fieldset>


                                    </div>

                                    <fieldset data-field-name="email" class="input-container flex flex-col h-16  w-full  relative ">
                                        <div class="flex items-center border-[0.5px] border-solid border-[#C9CBCC] rounded-[8px]" style="box-shadow: 1.5px 1.5px 0px 0px rgba(71, 71, 71, 0.08);">
                                            <label class="absolute placeholder-text text-[#74797D] text-[12px] font-[ibmRegular] -top-[12px] left-[10px] bg-white px-[6px] py-[3px] z-[1]">

                                                Email


                                                <span>*</span>

                                            </label>


                                            <input
                                                autocomplete="off"
                                                data-label="Email IDr"
                                                data-valid="false"
                                                class="customer-email-id  validate_empty validatate-input-field  min-w-[100%] shadow-sm  w-full h-[50px] p-4 rounded-[8px] font-[ibmRegular] text-[14px] text-[#222527]"
                                                type="email"
                                                name="Customer Email"






                                                data-required=""



                                                data-regex="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$"


                                                readonly


                                                value="anishkr2842003@gmail.com"

                                                id="profile_email">

                                        </div>
                                        <span class="error-msg text-[#E83336] font-[ibmRegular] text-[10px] lg:text-[12px]"></span>

                                    </fieldset>








                                    <fieldset data-field-name="phone" class="input-container flex flex-col h-16  w-full  relative ">
                                        <div class="flex items-center border-[0.5px] border-solid border-[#C9CBCC] rounded-[8px]" style="box-shadow: 1.5px 1.5px 0px 0px rgba(71, 71, 71, 0.08);">
                                            <label class="absolute placeholder-text text-[#74797D] text-[12px] font-[ibmRegular] -top-[12px] left-[10px] bg-white px-[6px] py-[3px] z-[1]">

                                                Mobile Number


                                                <span>*</span>

                                            </label>


                                            <input
                                                autocomplete="off"
                                                data-label="Mobile Number"
                                                data-valid="false"
                                                class="customer-phone-no  validate_empty validatate-input-field  min-w-[100%] shadow-sm  w-full h-[50px] p-4 rounded-[8px] font-[ibmRegular] text-[14px] text-[#222527]"
                                                type="tel"
                                                name="phone"






                                                data-required="required"


                                                maxlength="10"


                                                data-regex="[6-9]{1}[0-9]{9}"


                                                readonly


                                                value="8539873997"

                                                id="profile_phone">

                                        </div>
                                        <span class="error-msg text-[#E83336] font-[ibmRegular] text-[10px] lg:text-[12px]"></span>

                                    </fieldset>




                                    <fieldset data-field-name="DOB" class="input-container flex flex-col h-16  w-full  relative ">
                                        <div class="flex items-center border-[0.5px] border-solid border-[#C9CBCC] rounded-[8px]" style="box-shadow: 1.5px 1.5px 0px 0px rgba(71, 71, 71, 0.08);">
                                            <label class="absolute placeholder-text text-[#74797D] text-[12px] font-[ibmRegular] -top-[12px] left-[10px] bg-white px-[6px] py-[3px] z-[1]">

                                                DOB


                                            </label>


                                            <input
                                                autocomplete="off"
                                                data-label="Date Of birth"
                                                data-valid="false"
                                                class="customer-dob-update cursor-pointer w-full  min-w-[100%] shadow-sm  w-full h-[50px] p-4 rounded-[8px] font-[ibmRegular] text-[14px] text-[#222527]"
                                                type="date"
                                                name="dob"










                                                value=""

                                                id="profile_dob">

                                        </div>
                                        <span class="error-msg text-[#E83336] font-[ibmRegular] text-[10px] lg:text-[12px]"></span>

                                    </fieldset>


                                </div>

                                <div class="flex input-container gap-4 font-[ibmMedium]">
                                    <div class="input-wrapper flex flex-col justify-center gap-4">
                                        <label for="gender" class="flex text-[12px] text-[#AFB2B4]">GENDER</label>
                                        <div class="flex gap-4 items-center text-[#666875]">
                                            <div class="flex items-center gap-[8px]">
                                                <div class="relative flex">
                                                    <input type="radio" id="profile_gender_male" name="customer[gender]" value="male" class="gender-radio" onclick="this.nextElementSibling.style.display = 'block'; this.parentNode.nextElementSibling.querySelector('.checked-icon').style.display = 'none';">
                                                    <span class="check-icon">
                                                        <img
                                                            src="//veirdo.in/cdn/shop/t/64/assets/icon-check.svg?v=71056778941593993731704702524"
                                                            loading="lazy"
                                                            width="10"
                                                            height="8"
                                                            alt="check icon">
                                                    </span>
                                                </div>
                                                <label for="profile_gender_male" class="text-[14px] text-[#3A3E41]">MALE</label>
                                            </div>
                                            <div class="flex items-center gap-[8px]">
                                                <div class="relative flex">
                                                    <input type="radio" id="profile_gender_female" name="customer[gender]" value="female" class="gender-radio" onclick="this.nextElementSibling.style.display = 'block'; this.parentNode.previousElementSibling.querySelector('.checked-icon').style.display = 'none';">
                                                    <span class="check-icon">
                                                        <img
                                                            src="//veirdo.in/cdn/shop/t/64/assets/icon-check.svg?v=71056778941593993731704702524"
                                                            loading="lazy"
                                                            width="10"
                                                            height="8"
                                                            alt="check icon">
                                                    </span>
                                                </div>
                                                <label for="profile_gender_female" class="text-[14px] text-[#3A3E41]">FEMALE</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    onclick="gaClickEvent('save_changes_click');"
                                    class="flex w-full"
                                    data-ga-view-custom
                                    data-ga-view-info-custom="save_changes_view">
                                    <button id="update_customer_profile" type="submit" data-customer-id="7502186774583" class="disable-button flex w-full submit-form px-4 py-3 text-[14px] justify-center items-center">
                                        <span class="flex font-[soraSemiBold]">SAVE CHANGES</span>
                                    </button>
                                </div>
                            </div>
                            <div id="profile_update_success_notification" class="flex w-full hidden pt-4 lg:pt-0 lg:mb-0 sticky bottom-0 z-99">
                                <div class="flex w-full flex-row py-3 px-4 rounded-[8px] gap-2 shadow-md bg-[#E6FDED] text-[#017F29] shadow-[2px_2px_0px_0px_#017F29]">
                                    <img src="//veirdo.in/cdn/shop/t/64/assets/icon-green-check.svg?v=150286108352369240881706099192" loading="lazy" height='20' width='20' />
                                    <label class="flex text-[14px] lg:text-[16px] font-[ibmRegular]">Changes saved successfully</label>
                                </div>
                            </div>
                            <div id="profile_update_error_notification" class="flex w-full hidden pt-4 lg:pt-0 lg:mb-0 sticky bottom-0 z-99">
                                <div class="flex w-full flex-row py-3 px-4 rounded-[8px] gap-2 shadow-md bg-[#FDE9E9] text-[#D51E20]">
                                    <img src="//veirdo.in/cdn/shop/t/64/assets/icon-error.svg?v=148599543340195744901705656220" loading="lazy" height='20' width='20' />
                                    <label class="flex text-[14px] lg:text-[16px] font-[ibmRegular]">Something went wrong. Please try again</label>
                                </div>
                            </div>
                        </div>
                    </form>

                    <style>
                        .updateSuccess {
                            color: #006B22;
                            background-color: #E6FFEE;
                        }

                        .updateError {
                            color: #EA2123;
                            background-color: #FDE9E9;
                        }
                    </style>
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