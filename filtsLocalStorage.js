
let FlitsLocalStorage = localStorage.getItem("flits")
if (!FlitsLocalStorage) {
    localStorage.setItem("flits", JSON.stringify({
        "FlitsCodeLoadTime": new Date().getTime()
    }))
} else {
    localStorage.setItem("flits", JSON.stringify({
        ...JSON.parse(FlitsLocalStorage),
        "FlitsCodeLoadTime": new Date().getTime()
    }))
}

let FlitsRemoveFirstClickOnReload = localStorage.getItem("flits")

if (FlitsRemoveFirstClickOnReload) {
    FlitsRemoveFirstClickOnReload = JSON.parse(FlitsRemoveFirstClickOnReload)
    if (FlitsRemoveFirstClickOnReload.FlitsFirstClick) {
        delete FlitsRemoveFirstClickOnReload["FlitsFirstClick"]
        localStorage.setItem("flits", JSON.stringify(FlitsRemoveFirstClickOnReload))
    }
}

window.addEventListener("click", function () {
    const FlitsFirstClickedOnBrowser = new CustomEvent("FirstClickedOnBrowser");
    window.dispatchEvent(FlitsFirstClickedOnBrowser);
});
window.flitsThemeAppExtensionObjects = {
    customerHash: '',
    customerTags: [''],
    customerTagsArray: [],
    shop_name: 'Veirdo',
    shop_domain: "veirdo.in",
    token: 'b25d12296d0a48a2eaa0bce8a3234c44',
    base_url: '/apps/flits/api/1/21061',
    proxy_name: 'flits',
    app_id: 1,
    shop_id: 21061,
    shop_token: 'b25d12296d0a48a2eaa0bce8a3234c44',
    chandle: 'flits_products_handle',
    recent_handle: "flits_recently_products",
    cemail: "flits_customer_email",
    shop_currency: 'INR',
    shopCountryName: 'India',
    defaultCountry: 'US',
    money_format: '₹{{amount}}',
    money_format_replace: {
        moneyReplaceRegex: /((\,00)|(\.00))$/g,
        replaceTo: ''
    },
    Metafields: {
        "APP_ID": "1",
        "APP_NAMESPACE": "Flits",
        "APP_PROXY": "flits",
        "APP_SETTINGS_UPDATED": "1737531436",
        "GET_RULES_FOR_GUEST_CUSTOMERS": {
            "rules": {
                "all_rules_data": []
            }
        },
        "IS_ADVANCE_DASHBOARD_ENABLE": 0,
        "IS_ADVANCE_DASHBOARD_PAID": 0,
        "IS_AMAZON_ENABLE": 0,
        "IS_FACEBOOK_ENABLE": 0,
        "IS_GOOGLE_ENABLE": 0,
        "IS_ORDER_CONTACT_US_ENABLE": 1,
        "IS_ORDER_TRACKING_PAID": 1,
        "is_recently_view_enable": 1,
        "IS_REFER_PROGRAM_ON": 0,
        "IS_REORDER_ENABLE": 1,
        "IS_SOCIAL_LOGIN_ENABLE": 0,
        "IS_SOCIAL_LOGIN_PAID": 0,
        "is_store_credit_enable": 0,
        "IS_STORE_CREDIT_PAID": 0,
        "IS_TRACK_TURTLE_ENABLE": 0,
        "IS_TWITTER_ENABLE": 0,
        "IS_WISHLIST_ENABLE": 1,
        "IS_WISHLIST_PAID": 1,
        "MICRO_FRONTEND_STOREFRONT_CONTAINER_URL": {
            "123639463991": "https:\/\/cdn.shopify.com\/s\/files\/1\/0517\/2753\/2222\/files\/main.6e2e4c62.js?v=1734781255",
            "125003137079": "https:\/\/cdn.shopify.com\/s\/files\/1\/0602\/8499\/3615\/files\/main.5d907069_21061_123639463991.js?v=1725706122",
            "127114149943": "https:\/\/cdn.shopify.com\/s\/files\/1\/0517\/2753\/2222\/files\/main.6e2e4c62.js?v=1734781255"
        },
        "MULTILANGUAGE_CONTENT_en_123639463991": {
            "flits": {
                "icons": {
                    "close_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/close-icon.svg"
                    },
                    "continue_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/continue-icon.svg"
                    },
                    "edit_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/edit-icon.svg"
                    },
                    "email_icon": {
                        "type": "code",
                        "code": "\u003csvg xmlns='http:\/\/www.w3.org\/2000\/svg' width='16' height='14' viewBox='0 0 16 14' fill='none'\u003e \u003cpath d='M2.50016 1.1665H13.8335C14.6127 1.1665 15.2502 1.804 15.2502 2.58317V11.0832C15.2502 11.8623 14.6127 12.4998 13.8335 12.4998H2.50016C1.721 12.4998 1.0835 11.8623 1.0835 11.0832V2.58317C1.0835 1.804 1.721 1.1665 2.50016 1.1665Z' stroke='#4A4A4A' stroke-width='1.25' stroke-linecap='round' stroke-linejoin='round'\u003e\u003c\/path\u003e \u003cpath d='M15.2502 2.58301L8.16683 7.54134L1.0835 2.58301' stroke='#4A4A4A' stroke-width='1.25' stroke-linecap='round' stroke-linejoin='round'\u003e\u003c\/path\u003e \u003c\/svg\u003e",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/email-icon.svg"
                    },
                    "phone_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/phone-icon.svg"
                    }
                },
                "general": {
                    "greeting": "Hello",
                    "morning": "Good Morning",
                    "afternoon": "Good Afternoon",
                    "evening": "Good Evening",
                    "cant_add_more_quantity": "You have reached the maximum limit. You cannot add any more items.",
                    "cart_updated": "Some items are no longer available. Your cart has been updated.",
                    "getting_customer_details": "Getting\/Syncing Customer Details",
                    "something_went_wrong": "Something went wrong. Please try again."
                },
                "navigation": {
                    "profile": "My Profile",
                    "delivery_address": "Delivery Address",
                    "my_orders": "My Orders",
                    "appstle_subscription": "My Subscription",
                    "top_ordered_products": "Top Ordered Products",
                    "wishlist": "My Wishlist",
                    "recently_viewed_products": "Recently Viewed",
                    "store_credit": "My Credits",
                    "how_to_manage_credit": "How To Manage Credits",
                    "how_to_earn_credit": "How To Earn",
                    "how_to_spend_credit": "How To Spend",
                    "from_admin": "From Store Owner",
                    "refer_friend": "Refer Friend",
                    "change_password": "Change Password",
                    "log_out": "Log Out"
                },
                "profile_page": {
                    "first_name": "First Name",
                    "last_name": "Last Name",
                    "email": "Email",
                    "contact_number": "Contact Number",
                    "birthdate": "Birthdate",
                    "gender": "Gender",
                    "male": "Male",
                    "female": "Female",
                    "other": "Other",
                    "edit_button": "Edit",
                    "cancel_button": "Cancel",
                    "save_button": "Save",
                    "invalid_email": "Email is not valid",
                    "invalid_email_domain": "Email contains an invalid domain name",
                    "email_already_taken": "This email is already in use. Please enter a different email address.",
                    "invalid_contact_number": "Contact number is not valid",
                    "contact_number_already_taken": "This contact number is already in use. Please enter a different contact number.",
                    "save_details": "Saving profile details...",
                    "saved_successfully": "Profile updated successfully"
                },
                "address_page": {
                    "add_new_address": "Add New Address",
                    "first_name": "First Name",
                    "last_name": "Last Name",
                    "address1": "Address Line 1",
                    "address2": "Address Line 2",
                    "company": "Company",
                    "zip": "Postal\/Zip Code",
                    "contact_number": "Contact Number",
                    "city": "City",
                    "country": "Country",
                    "province": "Province",
                    "mark_as_default_checkbox": "Mark as Default Address",
                    "cancel_button": "Cancel",
                    "save_button": "Save",
                    "first_name_is_long": "First name is too long (maximum is 255 characters)",
                    "last_name_is_long": "Last name is too long (maximum is 255 characters)",
                    "address1_is_long": "Address Line 1 is too long (maximum is 255 characters)",
                    "address2_is_long": "Address Line 2 is too long (maximum is 255 characters)",
                    "company_name_is_long": "Company name is too long (maximum is 255 characters)",
                    "city_is_long": "City is too long (maximum is 255 characters)",
                    "zip_is_long": "Zip is too long (maximum is 255 characters)",
                    "invalid_contact_number": "Contact number is not valid",
                    "address_already_taken": "This address already exists.",
                    "country_invalid": "Country is not valid",
                    "adding_new_address": "Adding New Address...",
                    "address_added_successfully": "Delivery address added successfully",
                    "default_address_label": "Default",
                    "mark_as_default_button": "Mark as Default",
                    "edit_button": "Edit",
                    "edit_address": "Edit Address",
                    "updating_address": "Updating Address...",
                    "address_updated_successfully": "Delivery address updated successfully",
                    "delete_button": "Delete",
                    "delete_confirmation_message": "Are you sure you want to delete this address?",
                    "yes": "Yes",
                    "no": "No",
                    "deleting_address": "Deleting Address...",
                    "address_deleted_successfully": "Address deleted successfully"
                },
                "order_page": {
                    "blank_screen_line_1_html": "You haven't placed any orders yet.\u003cbr\u003eWe can't wait to have you as a customer.",
                    "blank_screen_line_2_html": "Take a look at our products here",
                    "order_date": "Date",
                    "order_date_format": "%B %d %Y",
                    "order_number": "Order",
                    "total_items": "Total Items",
                    "payment_status": "Payment",
                    "show_order_details": "View Order",
                    "hide_order_details": "Hide Order",
                    "reorder": "Re-order",
                    "product_unavailable": "Unavailable",
                    "sold_out": "Sold Out",
                    "some_products_unavailable": "Some of the products are unavailable",
                    "one_product_unavailable": "One of the products is unavailable",
                    "some_products_sold_out": "Some of the products are sold out",
                    "one_product_sold_out": "One of the products is sold out.",
                    "cost_breakup": "Cost Breakup",
                    "subtotal": "Sub Total",
                    "discount_code": "Discount",
                    "shipping_and_handling": "Shipping Cost",
                    "grand_total": "Grand Total",
                    "address": "Address",
                    "shipping_address": "Shipping Address",
                    "billing_address": "Billing Address",
                    "cancel_at": "Cancelled at",
                    "fulfillment_status": "Fulfillment Status",
                    "payment_type": "Payment Type"
                },
                "order_contact_us": {
                    "contact_us_button": "Contact Us",
                    "form_title": "Contact Us",
                    "header_text": "Your satisfaction is our top priority",
                    "customer_name_label": "Customer Name",
                    "first_name_label": "First Name",
                    "first_name_placeholder": "James",
                    "last_name_label": "Last Name",
                    "last_name_placeholder": "Grey",
                    "email_label": "Email",
                    "email_placeholder": "abc@xyz.com",
                    "email_required_warning": "Email is required",
                    "invalid_email_warning": "Please enter a valid email address",
                    "contact_number_label": "Contact Number",
                    "contact_number_placeholder": "1234567890",
                    "invalid_contact_number_warning": "Please enter a valid contact number",
                    "reason_label": "Reason to Contact",
                    "select_any_reason": "Select a Reason",
                    "order_cancel_related_reason": "Cancel Order",
                    "order_and_shipping_related_reason": "Order\/Shipping",
                    "return_and_exchange_related_reason": "Return\/Exchange",
                    "product_related_reason": "Product",
                    "price_related_reason": "Price",
                    "other_reason": "Other",
                    "reason_required_warning": "Please select a reason",
                    "message_label": "Message",
                    "message_placeholder": "Hello Support Team, when can I expect my order?",
                    "message_required_warning": "Message is required",
                    "attachment_link_label": "Attachment Link",
                    "attachment_link_placeholder": "You can upload files on your drive and paste the link here.",
                    "invalid_attachment_link_warning": "Please enter a valid attachment link",
                    "order_number_label": "Order Number",
                    "order_name_label": "Order Name",
                    "order_date_label": "Order Date",
                    "order_total_price_label": "Order Total Price",
                    "order_fulfillment_status_label": "Order Fulfillment Status",
                    "order_payment_status_label": "Order Payment Status",
                    "order_link_label": "View Order in Shopify",
                    "customer_link_label": "View Customer in Shopify",
                    "submit_button": "Submit",
                    "success_button": "OK",
                    "success_message_line_1": "Your request has been submitted.",
                    "success_message_line_2": "You will receive a reply in the email address which you have submitted in the query form.",
                    "success_message_line_3": "Thank you for contacting us.",
                    "already_contacted_message": "You have contacted us last on {{ date_time }}"
                },
                "top_ordered_products_page": {
                    "blank_screen_line_1_html": "There are no top ordered products to display.\u003cbr\u003eWe are pretty sure that a few products\u003cbr\u003efrom our fantastic collection\u003cbr\u003ewill make it to your top products.",
                    "search_placeholder": "Search product here",
                    "search_product_not_found": "No product\/s found",
                    "filter": "Filter",
                    "sort_by": "Sort By",
                    "none": "None",
                    "sort_by_price_low_to_high": "Sort by price (Low to High)",
                    "sort_by_price_high_to_low": "Sort by price (High to Low)",
                    "number_of_order_low_to_high": "Number of order (Low to High)",
                    "number_of_order_high_to_low": "Number of order (High to Low)",
                    "last_30_days": "Last 30 days",
                    "last_60_days": "Last 60 days",
                    "number_of_order": "Total quantity ordered till now"
                },
                "wishlisted_product_page": {
                    "blank_screen_line_1_html": "Looks like your wishlist is empty.",
                    "blank_screen_line_2_html": "Waiting for some trendy threads\u003cbr\u003eto bulk it up!",
                    "add_to_wishlist_button": "Wishlist",
                    "remove_from_wishlist_button": "Wishlisted",
                    "product_added_to_wishlist": "Product has been added to your wishlist",
                    "product_remove_from_wishlist": "Product removed from wishlist",
                    "what_is_your_email": "What's Your Email?",
                    "email_placeholder": "Email address",
                    "create_account_through": "Please create account\/login through {{ customer_email }} email",
                    "view_your_wishlist_message": "You can view your wishlist by creating account or logging-in an existing account.",
                    "login": "Login",
                    "register": "Register"
                },
                "recently_viewed_product_page": {
                    "blank_screen_line_1_html": "Looks like you haven’t checked out\u003cbr\u003eany of our products recently.\u003cbr\u003eWe have a vast collection of quality products.",
                    "blank_screen_line_2_html": "So why wait? Check out our products."
                },
                "credit_page": {
                    "blank_screen_line_1_html": "You are missing out on taking advantage of\u003cbr\u003eour Reward Program.",
                    "blank_screen_line_2_html": "So why wait? Start shopping our products to start earning rewards.",
                    "header_line_html": "Save Money \u003cstrong\u003eThrough Rewards\u003c\/strong\u003e",
                    "chart1_header": "Credit infosphere",
                    "earned_credit": "Earned Credit",
                    "how_to_earn": "How to Earn?",
                    "spent_credit": "Spent Credit",
                    "how_to_spend": "How to Spend?",
                    "current_credit": "Current Credit",
                    "credit_activity": "Recent Transactions",
                    "time": "Date",
                    "reason_for_credit": "Credit Reason",
                    "credit": "CR\/DR",
                    "balance": "Balance",
                    "registration_credit": "Registration Credit",
                    "subscribe_credit": "Subscribe Credit",
                    "first_order_credit": "First Order Credit",
                    "spent_in_order": "Spent in {{ order_number }} order",
                    "spent_in_order_through_pos": "Spent in {{ order_number }} order through POS",
                    "loyal_customer": "Loyal Customer",
                    "repeat_customer": "Repeat Customer",
                    "fault_in_product": "Fault in product",
                    "canceled_order_first_time_by_customer": "Canceled order first time by customer",
                    "delay_in_delivery_time": "Delay in delivery time"
                },
                "how_to_earn_credit_page": {
                    "header_line_html": "Earn More \u003cstrong\u003eSpend More\u003c\/strong\u003e",
                    "chart1_header": "Your Earned Credit",
                    "no_rule_found": "The store has not set up any rules yet",
                    "register_credit_rule_title": "Register credit",
                    "register_credit_rule_description": "Register and get {{ credit }} credit.",
                    "subscribe_credit_rule_title": "Subscriber credit",
                    "subscribe_credit_rule_description": "Subscribe and get {{ credit }} credit.",
                    "subscribed_successfully": "Hurray! You will recieve subscriber credit in a short while.",
                    "specific_order_credit_rule_title": "Credit on specific order",
                    "specific_order_credit_rule_description": "Earn {{ credit }} credit on your order number {{ order_count }}",
                    "specific_order_and_next_orders_credit_rule_title": "Credit on order number {{ order_count }} and next orders",
                    "specific_order_and_next_orders_credit_rule_description": "You can earn {{ credit }} credit on order number {{ order_count }} and next orders {{ order_count+1 }}, {{ order_count+2 }}..... {{ order_count+n }}",
                    "birthdate_credit_rule_title": "Birthday credit*",
                    "add_birthdate": "Add your Birthdate",
                    "birthdate_credit_rule_description_1": "Share your birthdate with us to get {{ credit }} credit on your birthday.",
                    "birthdate_credit_rule_description_2": "{{ days }} day\/s left for a birthday reward of {{ credit }} credit.",
                    "birthdate_credit_rule_description_3": "*You can avail this credit only once in a year.",
                    "monthly_credit_rule_title": "Monthly credit",
                    "monthly_credit_rule_description": "You will get {{ credit }} credit on {{ date }} of every month.",
                    "special_day_credit_rule_title": "Bonus day credit",
                    "special_day_credit_rule_description": "Get special day credit on {{ date }}",
                    "product_review_credit_rule_title": "Product review credit",
                    "product_review_credit_rule_description": "Write a product review and get {{ credit }} credit.",
                    "product_tag_credit_rule_title": "Credit for specific product collection",
                    "product_tag_credit_rule_description": "Buy product\/s with (any tag) {{ tag }} and get {{ credit }} credit.",
                    "wishlisted_product_credit_rule_title": "Wishlisted product credit",
                    "wishlisted_product_credit_rule_description": "You can earn {{ credit }} credit when you add product\/s in wishlist.",
                    "unlock_fixed_credit": "Unlock {{ credit }}",
                    "unlock_some_percentage_credit": "Unlock {{ credit }} cashback",
                    "rule_not_applicable": "*Not Applicable",
                    "why_rule_not_applicable_description": "Rule may have been set up on a later date.",
                    "total_earned_credit_by_rule": "Total earn credit till date: {{ credit }}",
                    "subscribing_email": "Your request to receive a mail subscription from the store is being accepted."
                },
                "how_to_spend_credit_page": {
                    "header_line_html": "Spend More \u003cstrong\u003eSave More\u003c\/strong\u003e",
                    "chart1_header": "Your Total Savings",
                    "chart2_header": "Your Current Credit",
                    "still_you_have_remaining_credit": "You have {{ credit }} credit remaining",
                    "no_rule_found": "The store has not set up any rules yet",
                    "select_cart_value": "Click on the circles to check the amount of credit you can spend based on cart value.",
                    "spend_credit_on_cart_rule_title": "Spend on cart",
                    "spend_credit_on_cart_rule_description_1": "Your cart value is between {{ min_cart_value }}-{{ max_cart_value }}. Congratulations you are eligible to use {{ credit }} credit.",
                    "spend_credit_on_cart_rule_description_2": "Your cart value is between {{ min_cart_value }}-{{ max_cart_value }}. Congratulations you are eligible to use {{ credit }} of cart value as credit.",
                    "spend_credit_on_cart_rule_description_3": "Your cart value is {{ min_cart_value }} (or more). Congratulations you can use {{ credit }} credit.",
                    "spend_credit_on_cart_rule_description_4": "Your cart value is {{ min_cart_value }} (or more). Congratulations you are eligible to use {{ credit }} of cart value as credit.",
                    "spend_credit_on_shipping_rule_title": "Free Shipping",
                    "spend_credit_on_shipping_rule_description": "You can use your credit on shipping charges.",
                    "how_to_spend_credit_header": "How to Spend Credit?",
                    "how_to_spend_credit_step_1": "Add product to the cart",
                    "how_to_spend_credit_step_2": "Choose available credit to spend on your order",
                    "how_to_spend_credit_step_3": "Proceed to checkout"
                },
                "refer_friend_page": {
                    "popup_greetings": "Welcome Newcomer",
                    "popup_message": "You were referred by {{ inviter_name }}. Please help us in giving you credit by signing up here.",
                    "refer_program_how_it_work_title": "How it works",
                    "refer_program_how_it_work_step_1": "Share your referral link",
                    "refer_program_how_it_work_step_2": "When your friend signs-up",
                    "refer_program_how_it_work_step_3": "You get rewarded",
                    "chart1_header": "Your Earned Credit",
                    "unlock_referral_rewards": "Unlock your referral Rewards",
                    "total_referral": "Total Referrals",
                    "copy": "Copy",
                    "referral_link_copied": "Link Copied",
                    "share_referral_link_title": "Share referral link via",
                    "facebook_share": "Share",
                    "whatsapp_share": "Share",
                    "share": "Share",
                    "referral_program_invitation_message": "You can earn credit for creating an account with {{ shop_name }}. Use this link and get rewarded : {{ link }}",
                    "blank_screen_line_1_html": "You have no referrals so far.\u003cbr\u003eYou can earn rewards by referring our store to your friends.\u003cbr\u003eCopy the above link and share it with your friends or",
                    "blank_screen_line_2_html": "Share the link directly via WhatsApp and Facebook.",
                    "referrer_credit_rule_title": "Referral Program",
                    "referrer_credit_rule_description": "Invite your friends and get {{ credit }} credit when they sign up.",
                    "referee_credit_rule_title": "Referral Program",
                    "referee_credit_rule_description": "When your friends accept the invitation, they will get {{ credit }} credit.",
                    "credit_on_number_of_referrals_rule_title": "Credit on numbers of referrals",
                    "credit_on_number_of_referrals_rule_description": "When you reach {{ referral_count }} referrals you get {{ credit }} credit.",
                    "referrals_specific_order_credit_rule_title": "Credit on specific order by referee",
                    "referrals_specific_order_credit_rule_description": "You can earn {{ credit }} credit on your referee's order number {{ order_count }}.",
                    "referrals_specific_order_and_next_orders_credit_rule_title": "Credit on referee's order number {{ order_count }} and next orders",
                    "referrals_specific_order_and_next_orders_credit_rule_description": "You can earn {{ credit }} credit on referee's order number {{ order_count }} and next orders {{ order_count+1 }}, {{ order_count+2 }}... {{ order_count+n }}",
                    "credit_on_referrals_total_spent_amount_rule_title": "Credit after referral's total spent amount",
                    "credit_on_referrals_total_spent_amount_rule_description": "You can earn {{ credit }} credit when your referral's total spent amount is {{ total_spent_amount }} or more.",
                    "credit_activity": "Referral History",
                    "earned_credit": "Earned Credit",
                    "referral_customer_name": "Referred To",
                    "referral_customer_email": "Referral's Email",
                    "credit": "Credit",
                    "time": "Referred Since",
                    "you_are_referred_by": "Referred by",
                    "customer_deleted": "Customer Deleted"
                },
                "from_admin_page": {
                    "header_line_html": "From Store Owner"
                },
                "update_password_page": {
                    "header_line_html": "Update your password for",
                    "new_password": "New Password",
                    "new_password_placeholder": "Enter New Password",
                    "confirm_new_password": "Confirm New Password",
                    "confirm_password_placeholder": "Confirm New Password",
                    "update_password_button": "Update Password",
                    "password_empty_message": "The password is empty",
                    "password_hint_message": "Password must be between 6 to 40 characters",
                    "password_not_match": "Passwords didn't match. Try again.",
                    "updating_password": "Updating password...",
                    "password_updated_successfully": "Your password for account {{ email }} has been successfully updated"
                },
                "buttons": {
                    "back": "Back",
                    "shop_now": "View Products",
                    "add_to_cart": "Add to Cart",
                    "sold_out": "Sold Out",
                    "previous": "Previous",
                    "next": "Next",
                    "product_unavailable_text": "Currently Unavailable",
                    "move_to_cart": "Move to Cart"
                },
                "months": {
                    "january": "January",
                    "february": "February",
                    "march": "March",
                    "april": "April",
                    "may": "May",
                    "june": "June",
                    "july": "July",
                    "august": "August",
                    "september": "September",
                    "october": "October",
                    "november": "November",
                    "december": "December"
                },
                "social_login_page": {
                    "facebook": "Facebook",
                    "google": "Google",
                    "twitter": "Twitter",
                    "amazon": "Amazon",
                    "loading_message": "Logging you in"
                },
                "cart_page": {
                    "adding_items_to_cart": "Adding items to cart...",
                    "select_credit_option": "Select option to use store credit",
                    "credit_cart_percentage": "You can use {{ credit }} credit out of {{ total_credit }}.",
                    "free_shipping": "You can get free shipping",
                    "applying_credit_message": "Applying credit please wait",
                    "credit_applied": "Store Credit Applied"
                },
                "invoice": {
                    "invoice_title": "INVOICE",
                    "invoice_no": "Invoice",
                    "payment_method": "Payment Method",
                    "order_no": "Order",
                    "issue_date": "Issue Date",
                    "order_date": "Order Date",
                    "billing_address_title": "Bill To",
                    "no_billing_address": "No billing address provided",
                    "shipping_address_title": "Ship To",
                    "no_shipping_address": "No shipping address provided",
                    "money_format": "{{ symbol }}{{ amount }}",
                    "item_title": "Item",
                    "item_quantity": "Quantity",
                    "item_price": "Unit Price",
                    "item_discount": "Discount",
                    "item_tax_rate": "Tax Rate",
                    "item_tax_type": "Tax Type",
                    "item_tax_amount": "Tax Amount",
                    "item_total": "Total",
                    "subtotal": "Sub Total",
                    "shipping_discount": "Shipping Discount",
                    "shipping_cost": "Shipping Cost",
                    "tax": "Tax",
                    "grand_total": "Grand Total",
                    "you_saved": "You Saved",
                    "amount_in_words": "Amount in words",
                    "for_store_name": "For {{ store_name }}",
                    "authorised_signatory": "Authorised Signatory",
                    "greeting_line1": "Thank You",
                    "greeting_line2": "We hope you enjoy your purchase.",
                    "email": "Email",
                    "phone": "Phone no",
                    "fax": "Fax",
                    "page_no": "Page {{ current_page }} of {{ total_page }}",
                    "zero": "Zero",
                    "one": "One",
                    "two": "Two",
                    "three": "Three",
                    "four": "Four",
                    "five": "Five",
                    "six": "Six",
                    "seven": "Seven",
                    "eight": "Eight",
                    "nine": "Nine",
                    "ten": "Ten",
                    "eleven": "Eleven",
                    "twelve": "Twelve",
                    "thirteen": "Thirteen",
                    "fourteen": "Fourteen",
                    "fifteen": "Fifteen",
                    "sixteen": "Sixteen",
                    "seventeen": "Seventeen",
                    "eighteen": "Eighteen",
                    "nineteen": "Nineteen",
                    "twenty": "Twenty",
                    "thirty": "Thirty",
                    "forty": "Forty",
                    "fifty": "Fifty",
                    "sixty": "Sixty",
                    "seventy": "Seventy",
                    "eighty": "Eighty",
                    "ninety": "Ninety",
                    "hundred": "Hundred",
                    "thousand": "Thousand",
                    "million": "Million",
                    "billion": "Billion",
                    "trillion": "Trillion",
                    "zero_only": "Zero only",
                    "only": "only",
                    "and": "and",
                    "invoice_is_generating": "Generating invoice...",
                    "saving_invoice": "Saving invoice"
                },
                "order_status_page": {
                    "total_earned_credit_on_order": "Congratulations! You have earned {{ credit }} credit on this purchase.",
                    "earned_credit_on_order_number": "You earned {{ credit }} credit for this order.",
                    "earned_credit_on_product_tag": "You earned {{ credit }} credit by purchasing from {{ tag }} collection.",
                    "total_credit_balance": "Your total credit balance is {{ credit }}.",
                    "shop_more_to_earn_credit_html": "Want to earn more credits and save big bucks? Then dive into our collection and shop more!",
                    "shop_more_to_spent_credit_html": "Still have credits left? Shop more to utilise them all."
                },
                "custom_fields": {
                    "file_type_invalid_error_message": "Please check file type and try again",
                    "file_size_exceed_error_message": "File size exceeds 1MB, please resize and upload"
                },
                "otp_login": {
                    "global": {
                        "errors": {
                            "first_name_required": "Please enter your first name to continue",
                            "last_name_required": "Please enter your last name to continue",
                            "email_invalid": "Please enter a valid email address to continue",
                            "email_required": "Please enter a valid email address to continue",
                            "phone_invalid": "Please enter a valid phone number to continue",
                            "phone_required": "Please enter a valid phone number to continue",
                            "something_wrong": "Something went wrong! Please try again.",
                            "otp_verify_sucess": "OTP verified successfully",
                            "otp_sent_sucess": "OTP sent successfully",
                            "invalid_otp": "The OTP you entered did not match. Please double check and try again",
                            "email_already_exists": "Email already exists, please try with another email",
                            "phone_already_exists": "Phone number already exists, please try with another phone number",
                            "email_already_exists_with_phone": "Email already exists with phone number {{ phone }} ",
                            "phone_already_exists_with_email": "Phone number already exists with email {{ email }} ",
                            "ip_block_error": "It appears that there have been multiple tries for OTP. Please try again in a few minutes."
                        },
                        "label": {
                            "first_name": "First Name",
                            "last_name": "Last Name",
                            "email": "Email",
                            "phone": "Phone Number"
                        },
                        "placeholder": {
                            "first_name": "First Name",
                            "last_name": "Last Name",
                            "email": "Email",
                            "phone": "Phone Number"
                        }
                    },
                    "login": {
                        "page_title": "Login With OTP",
                        "page_sub_head_email": "Please enter your email address",
                        "page_sub_head_phone": "Please enter your 10 digit mobile number",
                        "otp_hint_phone": "A 6 digit OTP will be sent to your phone number",
                        "otp_hint_email": "A 6 digit OTP will be sent to your email address",
                        "change_login_btn_phone": "Phone",
                        "change_login_btn_email": "Email",
                        "continue": "Request OTP",
                        "or_login_using": "Sign-in with"
                    },
                    "otp_verify": {
                        "page_title": "Please enter OTP for verification",
                        "page_sub_head": "Please enter the code sent to",
                        "next_step_btn": "Verify to proceed",
                        "resend_otp_title": "Didn't receive the OTP? Resend in ",
                        "resend_otp_btn": "Resend OTP",
                        "resend_otp_sucess_msg": "Resend OTP successfully"
                    },
                    "account_deatils": {
                        "page_title": "Profile Details",
                        "page_sub_head": "Hello! we just need a few more details",
                        "submit_btn": "Update and sign-in",
                        "verify_email_error": "We need to verify the email address entered above. Please click verify email to receive an OTP",
                        "verify_phone_error": "We need to verify the phone number entered above. Please click verify phone to receive an OTP",
                        "verify_phone_text": "Verify Phone",
                        "verify_email_text": "Verify Email",
                        "enter_otp_text": "Please verify your account by submitting the OTP",
                        "otp_sent_to_text": "OTP sent to"
                    }
                },
                "checkout": {
                    "apply_btn_text": "Apply",
                    "credit_dropdown_label": "Select option to use credit",
                    "credit_dropdown_first_option": "Select option to use credit",
                    "credit_cart_percentage": "You can use {{ credit }} credit out of {{ total_credit }}.",
                    "credit_dropdown_not_selected": "Please select credit option",
                    "credit_checkbox_not_selected": "Please select credit checkbox to apply credit",
                    "something_went-wrong": "Something went wrong! Please try again."
                }
            }
        },
        "MULTILANGUAGE_CONTENT_en_125003137079": {
            "flits": {
                "icons": {
                    "close_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/close-icon.svg"
                    },
                    "continue_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/continue-icon.svg"
                    },
                    "edit_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/edit-icon.svg"
                    },
                    "email_icon": {
                        "type": "code",
                        "code": "\u003csvg xmlns='http:\/\/www.w3.org\/2000\/svg' width='16' height='14' viewBox='0 0 16 14' fill='none'\u003e \u003cpath d='M2.50016 1.1665H13.8335C14.6127 1.1665 15.2502 1.804 15.2502 2.58317V11.0832C15.2502 11.8623 14.6127 12.4998 13.8335 12.4998H2.50016C1.721 12.4998 1.0835 11.8623 1.0835 11.0832V2.58317C1.0835 1.804 1.721 1.1665 2.50016 1.1665Z' stroke='#4A4A4A' stroke-width='1.25' stroke-linecap='round' stroke-linejoin='round'\u003e\u003c\/path\u003e \u003cpath d='M15.2502 2.58301L8.16683 7.54134L1.0835 2.58301' stroke='#4A4A4A' stroke-width='1.25' stroke-linecap='round' stroke-linejoin='round'\u003e\u003c\/path\u003e \u003c\/svg\u003e",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/email-icon.svg"
                    },
                    "phone_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/phone-icon.svg"
                    }
                },
                "general": {
                    "greeting": "Hello",
                    "morning": "Good Morning",
                    "afternoon": "Good Afternoon",
                    "evening": "Good Evening",
                    "cant_add_more_quantity": "You have reached the maximum limit. You cannot add any more items.",
                    "cart_updated": "Some items are no longer available. Your cart has been updated.",
                    "getting_customer_details": "Getting\/Syncing Customer Details",
                    "something_went_wrong": "Something went wrong. Please try again."
                },
                "navigation": {
                    "profile": "My Profile",
                    "delivery_address": "Delivery Address",
                    "my_orders": "My Orders",
                    "appstle_subscription": "My Subscription",
                    "top_ordered_products": "Top Ordered Products",
                    "wishlist": "My Wishlist",
                    "recently_viewed_products": "Recently Viewed",
                    "store_credit": "My Credits",
                    "how_to_manage_credit": "How To Manage Credits",
                    "how_to_earn_credit": "How To Earn",
                    "how_to_spend_credit": "How To Spend",
                    "from_admin": "From Store Owner",
                    "refer_friend": "Refer Friend",
                    "change_password": "Change Password",
                    "log_out": "Log Out"
                },
                "profile_page": {
                    "first_name": "First Name",
                    "last_name": "Last Name",
                    "email": "Email",
                    "contact_number": "Contact Number",
                    "birthdate": "Birthdate",
                    "gender": "Gender",
                    "male": "Male",
                    "female": "Female",
                    "other": "Other",
                    "edit_button": "Edit",
                    "cancel_button": "Cancel",
                    "save_button": "Save",
                    "invalid_email": "Email is not valid",
                    "invalid_email_domain": "Email contains an invalid domain name",
                    "email_already_taken": "This email is already in use. Please enter a different email address.",
                    "invalid_contact_number": "Contact number is not valid",
                    "contact_number_already_taken": "This contact number is already in use. Please enter a different contact number.",
                    "save_details": "Saving profile details...",
                    "saved_successfully": "Profile updated successfully"
                },
                "address_page": {
                    "add_new_address": "Add New Address",
                    "first_name": "First Name",
                    "last_name": "Last Name",
                    "address1": "Address Line 1",
                    "address2": "Address Line 2",
                    "company": "Company",
                    "zip": "Postal\/Zip Code",
                    "contact_number": "Contact Number",
                    "city": "City",
                    "country": "Country",
                    "province": "Province",
                    "mark_as_default_checkbox": "Mark as Default Address",
                    "cancel_button": "Cancel",
                    "save_button": "Save",
                    "first_name_is_long": "First name is too long (maximum is 255 characters)",
                    "last_name_is_long": "Last name is too long (maximum is 255 characters)",
                    "address1_is_long": "Address Line 1 is too long (maximum is 255 characters)",
                    "address2_is_long": "Address Line 2 is too long (maximum is 255 characters)",
                    "company_name_is_long": "Company name is too long (maximum is 255 characters)",
                    "city_is_long": "City is too long (maximum is 255 characters)",
                    "zip_is_long": "Zip is too long (maximum is 255 characters)",
                    "invalid_contact_number": "Contact number is not valid",
                    "address_already_taken": "This address already exists.",
                    "country_invalid": "Country is not valid",
                    "adding_new_address": "Adding New Address...",
                    "address_added_successfully": "Delivery address added successfully",
                    "default_address_label": "Default",
                    "mark_as_default_button": "Mark as Default",
                    "edit_button": "Edit",
                    "edit_address": "Edit Address",
                    "updating_address": "Updating Address...",
                    "address_updated_successfully": "Delivery address updated successfully",
                    "delete_button": "Delete",
                    "delete_confirmation_message": "Are you sure you want to delete this address?",
                    "yes": "Yes",
                    "no": "No",
                    "deleting_address": "Deleting Address...",
                    "address_deleted_successfully": "Address deleted successfully"
                },
                "order_page": {
                    "blank_screen_line_1_html": "You haven't placed any orders yet.\u003cbr\u003eWe can't wait to have you as a customer.",
                    "blank_screen_line_2_html": "Take a look at our products here",
                    "order_date": "Date",
                    "order_date_format": "%B %d %Y",
                    "order_number": "Order",
                    "total_items": "Total Items",
                    "payment_status": "Payment",
                    "show_order_details": "View Order",
                    "hide_order_details": "Hide Order",
                    "reorder": "Re-order",
                    "product_unavailable": "Unavailable",
                    "sold_out": "Sold Out",
                    "some_products_unavailable": "Some of the products are unavailable",
                    "one_product_unavailable": "One of the products is unavailable",
                    "some_products_sold_out": "Some of the products are sold out",
                    "one_product_sold_out": "One of the products is sold out.",
                    "cost_breakup": "Cost Breakup",
                    "subtotal": "Sub Total",
                    "discount_code": "Discount",
                    "shipping_and_handling": "Shipping Cost",
                    "grand_total": "Grand Total",
                    "address": "Address",
                    "shipping_address": "Shipping Address",
                    "billing_address": "Billing Address",
                    "cancel_at": "Cancelled at",
                    "fulfillment_status": "Fulfillment Status",
                    "payment_type": "Payment Type"
                },
                "order_contact_us": {
                    "contact_us_button": "Contact Us",
                    "form_title": "Contact Us",
                    "header_text": "Your satisfaction is our top priority",
                    "customer_name_label": "Customer Name",
                    "first_name_label": "First Name",
                    "first_name_placeholder": "James",
                    "last_name_label": "Last Name",
                    "last_name_placeholder": "Grey",
                    "email_label": "Email",
                    "email_placeholder": "abc@xyz.com",
                    "email_required_warning": "Email is required",
                    "invalid_email_warning": "Please enter a valid email address",
                    "contact_number_label": "Contact Number",
                    "contact_number_placeholder": "1234567890",
                    "invalid_contact_number_warning": "Please enter a valid contact number",
                    "reason_label": "Reason to Contact",
                    "select_any_reason": "Select a Reason",
                    "order_cancel_related_reason": "Cancel Order",
                    "order_and_shipping_related_reason": "Order\/Shipping",
                    "return_and_exchange_related_reason": "Return\/Exchange",
                    "product_related_reason": "Product",
                    "price_related_reason": "Price",
                    "other_reason": "Other",
                    "reason_required_warning": "Please select a reason",
                    "message_label": "Message",
                    "message_placeholder": "Hello Support Team, when can I expect my order?",
                    "message_required_warning": "Message is required",
                    "attachment_link_label": "Attachment Link",
                    "attachment_link_placeholder": "You can upload files on your drive and paste the link here.",
                    "invalid_attachment_link_warning": "Please enter a valid attachment link",
                    "order_number_label": "Order Number",
                    "order_name_label": "Order Name",
                    "order_date_label": "Order Date",
                    "order_total_price_label": "Order Total Price",
                    "order_fulfillment_status_label": "Order Fulfillment Status",
                    "order_payment_status_label": "Order Payment Status",
                    "order_link_label": "View Order in Shopify",
                    "customer_link_label": "View Customer in Shopify",
                    "submit_button": "Submit",
                    "success_button": "OK",
                    "success_message_line_1": "Your request has been submitted.",
                    "success_message_line_2": "You will receive a reply in the email address which you have submitted in the query form.",
                    "success_message_line_3": "Thank you for contacting us.",
                    "already_contacted_message": "You have contacted us last on {{ date_time }}"
                },
                "top_ordered_products_page": {
                    "blank_screen_line_1_html": "There are no top ordered products to display.\u003cbr\u003eWe are pretty sure that a few products\u003cbr\u003efrom our fantastic collection\u003cbr\u003ewill make it to your top products.",
                    "search_placeholder": "Search product here",
                    "search_product_not_found": "No product\/s found",
                    "filter": "Filter",
                    "sort_by": "Sort By",
                    "none": "None",
                    "sort_by_price_low_to_high": "Sort by price (Low to High)",
                    "sort_by_price_high_to_low": "Sort by price (High to Low)",
                    "number_of_order_low_to_high": "Number of order (Low to High)",
                    "number_of_order_high_to_low": "Number of order (High to Low)",
                    "last_30_days": "Last 30 days",
                    "last_60_days": "Last 60 days",
                    "number_of_order": "Total quantity ordered till now"
                },
                "wishlisted_product_page": {
                    "blank_screen_line_1_html": "Looks like your wishlist is empty.",
                    "blank_screen_line_2_html": "Waiting for some trendy threads\u003cbr\u003eto bulk it up!",
                    "add_to_wishlist_button": "Wishlist",
                    "remove_from_wishlist_button": "Wishlisted",
                    "product_added_to_wishlist": "Product has been added to your wishlist",
                    "product_remove_from_wishlist": "Product removed from wishlist",
                    "what_is_your_email": "What's Your Email?",
                    "email_placeholder": "Email address",
                    "create_account_through": "Please create account\/login through {{ customer_email }} email",
                    "view_your_wishlist_message": "You can view your wishlist by creating account or logging-in an existing account.",
                    "login": "Login",
                    "register": "Register"
                },
                "recently_viewed_product_page": {
                    "blank_screen_line_1_html": "Looks like you haven’t checked out\u003cbr\u003eany of our products recently.\u003cbr\u003eWe have a vast collection of quality products.",
                    "blank_screen_line_2_html": "So why wait? Check out our products."
                },
                "credit_page": {
                    "blank_screen_line_1_html": "You are missing out on taking advantage of\u003cbr\u003eour Reward Program.",
                    "blank_screen_line_2_html": "So why wait? Start shopping our products to start earning rewards.",
                    "header_line_html": "Save Money \u003cstrong\u003eThrough Rewards\u003c\/strong\u003e",
                    "chart1_header": "Credit infosphere",
                    "earned_credit": "Earned Credit",
                    "how_to_earn": "How to Earn?",
                    "spent_credit": "Spent Credit",
                    "how_to_spend": "How to Spend?",
                    "current_credit": "Current Credit",
                    "credit_activity": "Recent Transactions",
                    "time": "Date",
                    "reason_for_credit": "Credit Reason",
                    "credit": "CR\/DR",
                    "balance": "Balance",
                    "registration_credit": "Registration Credit",
                    "subscribe_credit": "Subscribe Credit",
                    "first_order_credit": "First Order Credit",
                    "spent_in_order": "Spent in {{ order_number }} order",
                    "spent_in_order_through_pos": "Spent in {{ order_number }} order through POS",
                    "loyal_customer": "Loyal Customer",
                    "repeat_customer": "Repeat Customer",
                    "fault_in_product": "Fault in product",
                    "canceled_order_first_time_by_customer": "Canceled order first time by customer",
                    "delay_in_delivery_time": "Delay in delivery time"
                },
                "how_to_earn_credit_page": {
                    "header_line_html": "Earn More \u003cstrong\u003eSpend More\u003c\/strong\u003e",
                    "chart1_header": "Your Earned Credit",
                    "no_rule_found": "The store has not set up any rules yet",
                    "register_credit_rule_title": "Register credit",
                    "register_credit_rule_description": "Register and get {{ credit }} credit.",
                    "subscribe_credit_rule_title": "Subscriber credit",
                    "subscribe_credit_rule_description": "Subscribe and get {{ credit }} credit.",
                    "subscribed_successfully": "Hurray! You will recieve subscriber credit in a short while.",
                    "specific_order_credit_rule_title": "Credit on specific order",
                    "specific_order_credit_rule_description": "Earn {{ credit }} credit on your order number {{ order_count }}",
                    "specific_order_and_next_orders_credit_rule_title": "Credit on order number {{ order_count }} and next orders",
                    "specific_order_and_next_orders_credit_rule_description": "You can earn {{ credit }} credit on order number {{ order_count }} and next orders {{ order_count+1 }}, {{ order_count+2 }}..... {{ order_count+n }}",
                    "birthdate_credit_rule_title": "Birthday credit*",
                    "add_birthdate": "Add your Birthdate",
                    "birthdate_credit_rule_description_1": "Share your birthdate with us to get {{ credit }} credit on your birthday.",
                    "birthdate_credit_rule_description_2": "{{ days }} day\/s left for a birthday reward of {{ credit }} credit.",
                    "birthdate_credit_rule_description_3": "*You can avail this credit only once in a year.",
                    "monthly_credit_rule_title": "Monthly credit",
                    "monthly_credit_rule_description": "You will get {{ credit }} credit on {{ date }} of every month.",
                    "special_day_credit_rule_title": "Bonus day credit",
                    "special_day_credit_rule_description": "Get special day credit on {{ date }}",
                    "product_review_credit_rule_title": "Product review credit",
                    "product_review_credit_rule_description": "Write a product review and get {{ credit }} credit.",
                    "product_tag_credit_rule_title": "Credit for specific product collection",
                    "product_tag_credit_rule_description": "Buy product\/s with (any tag) {{ tag }} and get {{ credit }} credit.",
                    "wishlisted_product_credit_rule_title": "Wishlisted product credit",
                    "wishlisted_product_credit_rule_description": "You can earn {{ credit }} credit when you add product\/s in wishlist.",
                    "unlock_fixed_credit": "Unlock {{ credit }}",
                    "unlock_some_percentage_credit": "Unlock {{ credit }} cashback",
                    "rule_not_applicable": "*Not Applicable",
                    "why_rule_not_applicable_description": "Rule may have been set up on a later date.",
                    "total_earned_credit_by_rule": "Total earn credit till date: {{ credit }}",
                    "subscribing_email": "Your request to receive a mail subscription from the store is being accepted."
                },
                "how_to_spend_credit_page": {
                    "header_line_html": "Spend More \u003cstrong\u003eSave More\u003c\/strong\u003e",
                    "chart1_header": "Your Total Savings",
                    "chart2_header": "Your Current Credit",
                    "still_you_have_remaining_credit": "You have {{ credit }} credit remaining",
                    "no_rule_found": "The store has not set up any rules yet",
                    "select_cart_value": "Click on the circles to check the amount of credit you can spend based on cart value.",
                    "spend_credit_on_cart_rule_title": "Spend on cart",
                    "spend_credit_on_cart_rule_description_1": "Your cart value is between {{ min_cart_value }}-{{ max_cart_value }}. Congratulations you are eligible to use {{ credit }} credit.",
                    "spend_credit_on_cart_rule_description_2": "Your cart value is between {{ min_cart_value }}-{{ max_cart_value }}. Congratulations you are eligible to use {{ credit }} of cart value as credit.",
                    "spend_credit_on_cart_rule_description_3": "Your cart value is {{ min_cart_value }} (or more). Congratulations you can use {{ credit }} credit.",
                    "spend_credit_on_cart_rule_description_4": "Your cart value is {{ min_cart_value }} (or more). Congratulations you are eligible to use {{ credit }} of cart value as credit.",
                    "spend_credit_on_shipping_rule_title": "Free Shipping",
                    "spend_credit_on_shipping_rule_description": "You can use your credit on shipping charges.",
                    "how_to_spend_credit_header": "How to Spend Credit?",
                    "how_to_spend_credit_step_1": "Add product to the cart",
                    "how_to_spend_credit_step_2": "Choose available credit to spend on your order",
                    "how_to_spend_credit_step_3": "Proceed to checkout"
                },
                "refer_friend_page": {
                    "popup_greetings": "Welcome Newcomer",
                    "popup_message": "You were referred by {{ inviter_name }}. Please help us in giving you credit by signing up here.",
                    "refer_program_how_it_work_title": "How it works",
                    "refer_program_how_it_work_step_1": "Share your referral link",
                    "refer_program_how_it_work_step_2": "When your friend signs-up",
                    "refer_program_how_it_work_step_3": "You get rewarded",
                    "chart1_header": "Your Earned Credit",
                    "unlock_referral_rewards": "Unlock your referral Rewards",
                    "total_referral": "Total Referrals",
                    "copy": "Copy",
                    "referral_link_copied": "Link Copied",
                    "share_referral_link_title": "Share referral link via",
                    "facebook_share": "Share",
                    "whatsapp_share": "Share",
                    "share": "Share",
                    "referral_program_invitation_message": "You can earn credit for creating an account with {{ shop_name }}. Use this link and get rewarded : {{ link }}",
                    "blank_screen_line_1_html": "You have no referrals so far.\u003cbr\u003eYou can earn rewards by referring our store to your friends.\u003cbr\u003eCopy the above link and share it with your friends or",
                    "blank_screen_line_2_html": "Share the link directly via WhatsApp and Facebook.",
                    "referrer_credit_rule_title": "Referral Program",
                    "referrer_credit_rule_description": "Invite your friends and get {{ credit }} credit when they sign up.",
                    "referee_credit_rule_title": "Referral Program",
                    "referee_credit_rule_description": "When your friends accept the invitation, they will get {{ credit }} credit.",
                    "credit_on_number_of_referrals_rule_title": "Credit on numbers of referrals",
                    "credit_on_number_of_referrals_rule_description": "When you reach {{ referral_count }} referrals you get {{ credit }} credit.",
                    "referrals_specific_order_credit_rule_title": "Credit on specific order by referee",
                    "referrals_specific_order_credit_rule_description": "You can earn {{ credit }} credit on your referee's order number {{ order_count }}.",
                    "referrals_specific_order_and_next_orders_credit_rule_title": "Credit on referee's order number {{ order_count }} and next orders",
                    "referrals_specific_order_and_next_orders_credit_rule_description": "You can earn {{ credit }} credit on referee's order number {{ order_count }} and next orders {{ order_count+1 }}, {{ order_count+2 }}... {{ order_count+n }}",
                    "credit_on_referrals_total_spent_amount_rule_title": "Credit after referral's total spent amount",
                    "credit_on_referrals_total_spent_amount_rule_description": "You can earn {{ credit }} credit when your referral's total spent amount is {{ total_spent_amount }} or more.",
                    "credit_activity": "Referral History",
                    "earned_credit": "Earned Credit",
                    "referral_customer_name": "Referred To",
                    "referral_customer_email": "Referral's Email",
                    "credit": "Credit",
                    "time": "Referred Since",
                    "you_are_referred_by": "Referred by",
                    "customer_deleted": "Customer Deleted"
                },
                "from_admin_page": {
                    "header_line_html": "From Store Owner"
                },
                "update_password_page": {
                    "header_line_html": "Update your password for",
                    "new_password": "New Password",
                    "new_password_placeholder": "Enter New Password",
                    "confirm_new_password": "Confirm New Password",
                    "confirm_password_placeholder": "Confirm New Password",
                    "update_password_button": "Update Password",
                    "password_empty_message": "The password is empty",
                    "password_hint_message": "Password must be between 6 to 40 characters",
                    "password_not_match": "Passwords didn't match. Try again.",
                    "updating_password": "Updating password...",
                    "password_updated_successfully": "Your password for account {{ email }} has been successfully updated"
                },
                "buttons": {
                    "back": "Back",
                    "shop_now": "View Products",
                    "add_to_cart": "Add to Cart",
                    "sold_out": "Sold Out",
                    "previous": "Previous",
                    "next": "Next",
                    "product_unavailable_text": "Currently Unavailable",
                    "move_to_cart": "Move to Cart"
                },
                "months": {
                    "january": "January",
                    "february": "February",
                    "march": "March",
                    "april": "April",
                    "may": "May",
                    "june": "June",
                    "july": "July",
                    "august": "August",
                    "september": "September",
                    "october": "October",
                    "november": "November",
                    "december": "December"
                },
                "social_login_page": {
                    "facebook": "Facebook",
                    "google": "Google",
                    "twitter": "Twitter",
                    "amazon": "Amazon",
                    "loading_message": "Logging you in"
                },
                "cart_page": {
                    "adding_items_to_cart": "Adding items to cart...",
                    "select_credit_option": "Select option to use store credit",
                    "credit_cart_percentage": "You can use {{ credit }} credit out of {{ total_credit }}.",
                    "free_shipping": "You can get free shipping",
                    "applying_credit_message": "Applying credit please wait",
                    "credit_applied": "Store Credit Applied"
                },
                "invoice": {
                    "invoice_title": "INVOICE",
                    "invoice_no": "Invoice",
                    "payment_method": "Payment Method",
                    "order_no": "Order",
                    "issue_date": "Issue Date",
                    "order_date": "Order Date",
                    "billing_address_title": "Bill To",
                    "no_billing_address": "No billing address provided",
                    "shipping_address_title": "Ship To",
                    "no_shipping_address": "No shipping address provided",
                    "money_format": "{{ symbol }}{{ amount }}",
                    "item_title": "Item",
                    "item_quantity": "Quantity",
                    "item_price": "Unit Price",
                    "item_discount": "Discount",
                    "item_tax_rate": "Tax Rate",
                    "item_tax_type": "Tax Type",
                    "item_tax_amount": "Tax Amount",
                    "item_total": "Total",
                    "subtotal": "Sub Total",
                    "shipping_discount": "Shipping Discount",
                    "shipping_cost": "Shipping Cost",
                    "tax": "Tax",
                    "grand_total": "Grand Total",
                    "you_saved": "You Saved",
                    "amount_in_words": "Amount in words",
                    "for_store_name": "For {{ store_name }}",
                    "authorised_signatory": "Authorised Signatory",
                    "greeting_line1": "Thank You",
                    "greeting_line2": "We hope you enjoy your purchase.",
                    "email": "Email",
                    "phone": "Phone no",
                    "fax": "Fax",
                    "page_no": "Page {{ current_page }} of {{ total_page }}",
                    "zero": "Zero",
                    "one": "One",
                    "two": "Two",
                    "three": "Three",
                    "four": "Four",
                    "five": "Five",
                    "six": "Six",
                    "seven": "Seven",
                    "eight": "Eight",
                    "nine": "Nine",
                    "ten": "Ten",
                    "eleven": "Eleven",
                    "twelve": "Twelve",
                    "thirteen": "Thirteen",
                    "fourteen": "Fourteen",
                    "fifteen": "Fifteen",
                    "sixteen": "Sixteen",
                    "seventeen": "Seventeen",
                    "eighteen": "Eighteen",
                    "nineteen": "Nineteen",
                    "twenty": "Twenty",
                    "thirty": "Thirty",
                    "forty": "Forty",
                    "fifty": "Fifty",
                    "sixty": "Sixty",
                    "seventy": "Seventy",
                    "eighty": "Eighty",
                    "ninety": "Ninety",
                    "hundred": "Hundred",
                    "thousand": "Thousand",
                    "million": "Million",
                    "billion": "Billion",
                    "trillion": "Trillion",
                    "zero_only": "Zero only",
                    "only": "only",
                    "and": "and",
                    "invoice_is_generating": "Generating invoice...",
                    "saving_invoice": "Saving invoice"
                },
                "order_status_page": {
                    "total_earned_credit_on_order": "Congratulations! You have earned {{ credit }} credit on this purchase.",
                    "earned_credit_on_order_number": "You earned {{ credit }} credit for this order.",
                    "earned_credit_on_product_tag": "You earned {{ credit }} credit by purchasing from {{ tag }} collection.",
                    "total_credit_balance": "Your total credit balance is {{ credit }}.",
                    "shop_more_to_earn_credit_html": "Want to earn more credits and save big bucks? Then dive into our collection and shop more!",
                    "shop_more_to_spent_credit_html": "Still have credits left? Shop more to utilise them all."
                },
                "custom_fields": {
                    "file_type_invalid_error_message": "Please check file type and try again",
                    "file_size_exceed_error_message": "File size exceeds 1MB, please resize and upload"
                },
                "otp_login": {
                    "global": {
                        "errors": {
                            "first_name_required": "Please enter your first name to continue",
                            "last_name_required": "Please enter your last name to continue",
                            "email_invalid": "Please enter a valid email address to continue",
                            "email_required": "Please enter a valid email address to continue",
                            "phone_invalid": "Please enter a valid phone number to continue",
                            "phone_required": "Please enter a valid phone number to continue",
                            "something_wrong": "Something went wrong! Please try again.",
                            "otp_verify_sucess": "OTP verified successfully",
                            "otp_sent_sucess": "OTP sent successfully",
                            "invalid_otp": "The OTP you entered did not match. Please double check and try again",
                            "email_already_exists": "Email already exists, please try with another email",
                            "phone_already_exists": "Phone number already exists, please try with another phone number",
                            "email_already_exists_with_phone": "Email already exists with phone number {{ phone }} ",
                            "phone_already_exists_with_email": "Phone number already exists with email {{ email }} ",
                            "ip_block_error": "It appears that there have been multiple tries for OTP. Please try again in a few minutes."
                        },
                        "label": {
                            "first_name": "First Name",
                            "last_name": "Last Name",
                            "email": "Email",
                            "phone": "Phone Number"
                        },
                        "placeholder": {
                            "first_name": "First Name",
                            "last_name": "Last Name",
                            "email": "Email",
                            "phone": "Phone Number"
                        }
                    },
                    "login": {
                        "page_title": "Login With OTP",
                        "page_sub_head_email": "Please enter your email address",
                        "page_sub_head_phone": "Please enter your 10 digit mobile number",
                        "otp_hint_phone": "A 6 digit OTP will be sent to your phone number",
                        "otp_hint_email": "A 6 digit OTP will be sent to your email address",
                        "change_login_btn_phone": "Phone",
                        "change_login_btn_email": "Email",
                        "continue": "Request OTP",
                        "or_login_using": "Sign-in with"
                    },
                    "otp_verify": {
                        "page_title": "Please enter OTP for verification",
                        "page_sub_head": "Please enter the code sent to",
                        "next_step_btn": "Verify to proceed",
                        "resend_otp_title": "Didn't receive the OTP? Resend in ",
                        "resend_otp_btn": "Resend OTP",
                        "resend_otp_sucess_msg": "Resend OTP successfully"
                    },
                    "account_deatils": {
                        "page_title": "Profile Details",
                        "page_sub_head": "Hello! we just need a few more details",
                        "submit_btn": "Update and sign-in",
                        "verify_email_error": "We need to verify the email address entered above. Please click verify email to receive an OTP",
                        "verify_phone_error": "We need to verify the phone number entered above. Please click verify phone to receive an OTP",
                        "verify_phone_text": "Verify Phone",
                        "verify_email_text": "Verify Email",
                        "enter_otp_text": "Please verify your account by submitting the OTP",
                        "otp_sent_to_text": "OTP sent to"
                    }
                },
                "checkout": {
                    "apply_btn_text": "Apply",
                    "credit_dropdown_label": "Select option to use credit",
                    "credit_dropdown_first_option": "Select option to use credit",
                    "credit_cart_percentage": "You can use {{ credit }} credit out of {{ total_credit }}.",
                    "credit_dropdown_not_selected": "Please select credit option",
                    "credit_checkbox_not_selected": "Please select credit checkbox to apply credit",
                    "something_went-wrong": "Something went wrong! Please try again."
                }
            }
        },
        "MULTILANGUAGE_CONTENT_en_127114149943": {
            "flits": {
                "icons": {
                    "close_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/close-icon.svg"
                    },
                    "continue_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/continue-icon.svg"
                    },
                    "edit_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/edit-icon.svg"
                    },
                    "email_icon": {
                        "type": "code",
                        "code": "\u003csvg xmlns='http:\/\/www.w3.org\/2000\/svg' width='16' height='14' viewBox='0 0 16 14' fill='none'\u003e \u003cpath d='M2.50016 1.1665H13.8335C14.6127 1.1665 15.2502 1.804 15.2502 2.58317V11.0832C15.2502 11.8623 14.6127 12.4998 13.8335 12.4998H2.50016C1.721 12.4998 1.0835 11.8623 1.0835 11.0832V2.58317C1.0835 1.804 1.721 1.1665 2.50016 1.1665Z' stroke='#4A4A4A' stroke-width='1.25' stroke-linecap='round' stroke-linejoin='round'\u003e\u003c\/path\u003e \u003cpath d='M15.2502 2.58301L8.16683 7.54134L1.0835 2.58301' stroke='#4A4A4A' stroke-width='1.25' stroke-linecap='round' stroke-linejoin='round'\u003e\u003c\/path\u003e \u003c\/svg\u003e",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/email-icon.svg"
                    },
                    "phone_icon": {
                        "type": "url",
                        "code": "",
                        "url": "https:\/\/cdn.getflits.com\/icons\/default\/phone-icon.svg"
                    }
                },
                "general": {
                    "greeting": "Hello",
                    "morning": "Good Morning",
                    "afternoon": "Good Afternoon",
                    "evening": "Good Evening",
                    "cant_add_more_quantity": "You have reached the maximum limit. You cannot add any more items.",
                    "cart_updated": "Some items are no longer available. Your cart has been updated.",
                    "getting_customer_details": "Getting\/Syncing Customer Details",
                    "something_went_wrong": "Something went wrong. Please try again."
                },
                "navigation": {
                    "profile": "My Profile",
                    "delivery_address": "Delivery Address",
                    "my_orders": "My Orders",
                    "appstle_subscription": "My Subscription",
                    "top_ordered_products": "Top Ordered Products",
                    "wishlist": "My Wishlist",
                    "recently_viewed_products": "Recently Viewed",
                    "store_credit": "My Credits",
                    "how_to_manage_credit": "How To Manage Credits",
                    "how_to_earn_credit": "How To Earn",
                    "how_to_spend_credit": "How To Spend",
                    "from_admin": "From Store Owner",
                    "refer_friend": "Refer Friend",
                    "change_password": "Change Password",
                    "log_out": "Log Out"
                },
                "profile_page": {
                    "first_name": "First Name",
                    "last_name": "Last Name",
                    "email": "Email",
                    "contact_number": "Contact Number",
                    "birthdate": "Birthdate",
                    "gender": "Gender",
                    "male": "Male",
                    "female": "Female",
                    "other": "Other",
                    "edit_button": "Edit",
                    "cancel_button": "Cancel",
                    "save_button": "Save",
                    "invalid_email": "Email is not valid",
                    "invalid_email_domain": "Email contains an invalid domain name",
                    "email_already_taken": "This email is already in use. Please enter a different email address.",
                    "invalid_contact_number": "Contact number is not valid",
                    "contact_number_already_taken": "This contact number is already in use. Please enter a different contact number.",
                    "save_details": "Saving profile details...",
                    "saved_successfully": "Profile updated successfully"
                },
                "address_page": {
                    "add_new_address": "Add New Address",
                    "first_name": "First Name",
                    "last_name": "Last Name",
                    "address1": "Address Line 1",
                    "address2": "Address Line 2",
                    "company": "Company",
                    "zip": "Postal\/Zip Code",
                    "contact_number": "Contact Number",
                    "city": "City",
                    "country": "Country",
                    "province": "Province",
                    "mark_as_default_checkbox": "Mark as Default Address",
                    "cancel_button": "Cancel",
                    "save_button": "Save",
                    "first_name_is_long": "First name is too long (maximum is 255 characters)",
                    "last_name_is_long": "Last name is too long (maximum is 255 characters)",
                    "address1_is_long": "Address Line 1 is too long (maximum is 255 characters)",
                    "address2_is_long": "Address Line 2 is too long (maximum is 255 characters)",
                    "company_name_is_long": "Company name is too long (maximum is 255 characters)",
                    "city_is_long": "City is too long (maximum is 255 characters)",
                    "zip_is_long": "Zip is too long (maximum is 255 characters)",
                    "invalid_contact_number": "Contact number is not valid",
                    "address_already_taken": "This address already exists.",
                    "country_invalid": "Country is not valid",
                    "adding_new_address": "Adding New Address...",
                    "address_added_successfully": "Delivery address added successfully",
                    "default_address_label": "Default",
                    "mark_as_default_button": "Mark as Default",
                    "edit_button": "Edit",
                    "edit_address": "Edit Address",
                    "updating_address": "Updating Address...",
                    "address_updated_successfully": "Delivery address updated successfully",
                    "delete_button": "Delete",
                    "delete_confirmation_message": "Are you sure you want to delete this address?",
                    "yes": "Yes",
                    "no": "No",
                    "deleting_address": "Deleting Address...",
                    "address_deleted_successfully": "Address deleted successfully"
                },
                "order_page": {
                    "blank_screen_line_1_html": "You haven't placed any orders yet.\u003cbr\u003eWe can't wait to have you as a customer.",
                    "blank_screen_line_2_html": "Take a look at our products here",
                    "order_date": "Date",
                    "order_date_format": "%B %d %Y",
                    "order_number": "Order",
                    "total_items": "Total Items",
                    "payment_status": "Payment",
                    "show_order_details": "View Order",
                    "hide_order_details": "Hide Order",
                    "reorder": "Re-order",
                    "product_unavailable": "Unavailable",
                    "sold_out": "Sold Out",
                    "some_products_unavailable": "Some of the products are unavailable",
                    "one_product_unavailable": "One of the products is unavailable",
                    "some_products_sold_out": "Some of the products are sold out",
                    "one_product_sold_out": "One of the products is sold out.",
                    "cost_breakup": "Cost Breakup",
                    "subtotal": "Sub Total",
                    "discount_code": "Discount",
                    "shipping_and_handling": "Shipping Cost",
                    "grand_total": "Grand Total",
                    "address": "Address",
                    "shipping_address": "Shipping Address",
                    "billing_address": "Billing Address",
                    "cancel_at": "Cancelled at",
                    "fulfillment_status": "Fulfillment Status",
                    "payment_type": "Payment Type"
                },
                "order_contact_us": {
                    "contact_us_button": "Contact Us",
                    "form_title": "Contact Us",
                    "header_text": "Your satisfaction is our top priority",
                    "customer_name_label": "Customer Name",
                    "first_name_label": "First Name",
                    "first_name_placeholder": "James",
                    "last_name_label": "Last Name",
                    "last_name_placeholder": "Grey",
                    "email_label": "Email",
                    "email_placeholder": "abc@xyz.com",
                    "email_required_warning": "Email is required",
                    "invalid_email_warning": "Please enter a valid email address",
                    "contact_number_label": "Contact Number",
                    "contact_number_placeholder": "1234567890",
                    "invalid_contact_number_warning": "Please enter a valid contact number",
                    "reason_label": "Reason to Contact",
                    "select_any_reason": "Select a Reason",
                    "order_cancel_related_reason": "Cancel Order",
                    "order_and_shipping_related_reason": "Order\/Shipping",
                    "return_and_exchange_related_reason": "Return\/Exchange",
                    "product_related_reason": "Product",
                    "price_related_reason": "Price",
                    "other_reason": "Other",
                    "reason_required_warning": "Please select a reason",
                    "message_label": "Message",
                    "message_placeholder": "Hello Support Team, when can I expect my order?",
                    "message_required_warning": "Message is required",
                    "attachment_link_label": "Attachment Link",
                    "attachment_link_placeholder": "You can upload files on your drive and paste the link here.",
                    "invalid_attachment_link_warning": "Please enter a valid attachment link",
                    "order_number_label": "Order Number",
                    "order_name_label": "Order Name",
                    "order_date_label": "Order Date",
                    "order_total_price_label": "Order Total Price",
                    "order_fulfillment_status_label": "Order Fulfillment Status",
                    "order_payment_status_label": "Order Payment Status",
                    "order_link_label": "View Order in Shopify",
                    "customer_link_label": "View Customer in Shopify",
                    "submit_button": "Submit",
                    "success_button": "OK",
                    "success_message_line_1": "Your request has been submitted.",
                    "success_message_line_2": "You will receive a reply in the email address which you have submitted in the query form.",
                    "success_message_line_3": "Thank you for contacting us.",
                    "already_contacted_message": "You have contacted us last on {{ date_time }}"
                },
                "top_ordered_products_page": {
                    "blank_screen_line_1_html": "There are no top ordered products to display.\u003cbr\u003eWe are pretty sure that a few products\u003cbr\u003efrom our fantastic collection\u003cbr\u003ewill make it to your top products.",
                    "search_placeholder": "Search product here",
                    "search_product_not_found": "No product\/s found",
                    "filter": "Filter",
                    "sort_by": "Sort By",
                    "none": "None",
                    "sort_by_price_low_to_high": "Sort by price (Low to High)",
                    "sort_by_price_high_to_low": "Sort by price (High to Low)",
                    "number_of_order_low_to_high": "Number of order (Low to High)",
                    "number_of_order_high_to_low": "Number of order (High to Low)",
                    "last_30_days": "Last 30 days",
                    "last_60_days": "Last 60 days",
                    "number_of_order": "Total quantity ordered till now"
                },
                "wishlisted_product_page": {
                    "blank_screen_line_1_html": "Looks like your wishlist is empty.",
                    "blank_screen_line_2_html": "Waiting for some trendy threads\u003cbr\u003eto bulk it up!",
                    "add_to_wishlist_button": "Wishlist",
                    "remove_from_wishlist_button": "Wishlisted",
                    "product_added_to_wishlist": "Product has been added to your wishlist",
                    "product_remove_from_wishlist": "Product removed from wishlist",
                    "what_is_your_email": "What's Your Email?",
                    "email_placeholder": "Email address",
                    "create_account_through": "Please create account\/login through {{ customer_email }} email",
                    "view_your_wishlist_message": "You can view your wishlist by creating account or logging-in an existing account.",
                    "login": "Login",
                    "register": "Register"
                },
                "recently_viewed_product_page": {
                    "blank_screen_line_1_html": "Looks like you haven’t checked out\u003cbr\u003eany of our products recently.\u003cbr\u003eWe have a vast collection of quality products.",
                    "blank_screen_line_2_html": "So why wait? Check out our products."
                },
                "credit_page": {
                    "blank_screen_line_1_html": "You are missing out on taking advantage of\u003cbr\u003eour Reward Program.",
                    "blank_screen_line_2_html": "So why wait? Start shopping our products to start earning rewards.",
                    "header_line_html": "Save Money \u003cstrong\u003eThrough Rewards\u003c\/strong\u003e",
                    "chart1_header": "Credit infosphere",
                    "earned_credit": "Earned Credit",
                    "how_to_earn": "How to Earn?",
                    "spent_credit": "Spent Credit",
                    "how_to_spend": "How to Spend?",
                    "current_credit": "Current Credit",
                    "credit_activity": "Recent Transactions",
                    "time": "Date",
                    "reason_for_credit": "Credit Reason",
                    "credit": "CR\/DR",
                    "balance": "Balance",
                    "registration_credit": "Registration Credit",
                    "subscribe_credit": "Subscribe Credit",
                    "first_order_credit": "First Order Credit",
                    "spent_in_order": "Spent in {{ order_number }} order",
                    "spent_in_order_through_pos": "Spent in {{ order_number }} order through POS",
                    "loyal_customer": "Loyal Customer",
                    "repeat_customer": "Repeat Customer",
                    "fault_in_product": "Fault in product",
                    "canceled_order_first_time_by_customer": "Canceled order first time by customer",
                    "delay_in_delivery_time": "Delay in delivery time"
                },
                "how_to_earn_credit_page": {
                    "header_line_html": "Earn More \u003cstrong\u003eSpend More\u003c\/strong\u003e",
                    "chart1_header": "Your Earned Credit",
                    "no_rule_found": "The store has not set up any rules yet",
                    "register_credit_rule_title": "Register credit",
                    "register_credit_rule_description": "Register and get {{ credit }} credit.",
                    "subscribe_credit_rule_title": "Subscriber credit",
                    "subscribe_credit_rule_description": "Subscribe and get {{ credit }} credit.",
                    "subscribed_successfully": "Hurray! You will recieve subscriber credit in a short while.",
                    "specific_order_credit_rule_title": "Credit on specific order",
                    "specific_order_credit_rule_description": "Earn {{ credit }} credit on your order number {{ order_count }}",
                    "specific_order_and_next_orders_credit_rule_title": "Credit on order number {{ order_count }} and next orders",
                    "specific_order_and_next_orders_credit_rule_description": "You can earn {{ credit }} credit on order number {{ order_count }} and next orders {{ order_count+1 }}, {{ order_count+2 }}..... {{ order_count+n }}",
                    "birthdate_credit_rule_title": "Birthday credit*",
                    "add_birthdate": "Add your Birthdate",
                    "birthdate_credit_rule_description_1": "Share your birthdate with us to get {{ credit }} credit on your birthday.",
                    "birthdate_credit_rule_description_2": "{{ days }} day\/s left for a birthday reward of {{ credit }} credit.",
                    "birthdate_credit_rule_description_3": "*You can avail this credit only once in a year.",
                    "monthly_credit_rule_title": "Monthly credit",
                    "monthly_credit_rule_description": "You will get {{ credit }} credit on {{ date }} of every month.",
                    "special_day_credit_rule_title": "Bonus day credit",
                    "special_day_credit_rule_description": "Get special day credit on {{ date }}",
                    "product_review_credit_rule_title": "Product review credit",
                    "product_review_credit_rule_description": "Write a product review and get {{ credit }} credit.",
                    "product_tag_credit_rule_title": "Credit for specific product collection",
                    "product_tag_credit_rule_description": "Buy product\/s with (any tag) {{ tag }} and get {{ credit }} credit.",
                    "wishlisted_product_credit_rule_title": "Wishlisted product credit",
                    "wishlisted_product_credit_rule_description": "You can earn {{ credit }} credit when you add product\/s in wishlist.",
                    "unlock_fixed_credit": "Unlock {{ credit }}",
                    "unlock_some_percentage_credit": "Unlock {{ credit }} cashback",
                    "rule_not_applicable": "*Not Applicable",
                    "why_rule_not_applicable_description": "Rule may have been set up on a later date.",
                    "total_earned_credit_by_rule": "Total earn credit till date: {{ credit }}",
                    "subscribing_email": "Your request to receive a mail subscription from the store is being accepted."
                },
                "how_to_spend_credit_page": {
                    "header_line_html": "Spend More \u003cstrong\u003eSave More\u003c\/strong\u003e",
                    "chart1_header": "Your Total Savings",
                    "chart2_header": "Your Current Credit",
                    "still_you_have_remaining_credit": "You have {{ credit }} credit remaining",
                    "no_rule_found": "The store has not set up any rules yet",
                    "select_cart_value": "Click on the circles to check the amount of credit you can spend based on cart value.",
                    "spend_credit_on_cart_rule_title": "Spend on cart",
                    "spend_credit_on_cart_rule_description_1": "Your cart value is between {{ min_cart_value }}-{{ max_cart_value }}. Congratulations you are eligible to use {{ credit }} credit.",
                    "spend_credit_on_cart_rule_description_2": "Your cart value is between {{ min_cart_value }}-{{ max_cart_value }}. Congratulations you are eligible to use {{ credit }} of cart value as credit.",
                    "spend_credit_on_cart_rule_description_3": "Your cart value is {{ min_cart_value }} (or more). Congratulations you can use {{ credit }} credit.",
                    "spend_credit_on_cart_rule_description_4": "Your cart value is {{ min_cart_value }} (or more). Congratulations you are eligible to use {{ credit }} of cart value as credit.",
                    "spend_credit_on_shipping_rule_title": "Free Shipping",
                    "spend_credit_on_shipping_rule_description": "You can use your credit on shipping charges.",
                    "how_to_spend_credit_header": "How to Spend Credit?",
                    "how_to_spend_credit_step_1": "Add product to the cart",
                    "how_to_spend_credit_step_2": "Choose available credit to spend on your order",
                    "how_to_spend_credit_step_3": "Proceed to checkout"
                },
                "refer_friend_page": {
                    "popup_greetings": "Welcome Newcomer",
                    "popup_message": "You were referred by {{ inviter_name }}. Please help us in giving you credit by signing up here.",
                    "refer_program_how_it_work_title": "How it works",
                    "refer_program_how_it_work_step_1": "Share your referral link",
                    "refer_program_how_it_work_step_2": "When your friend signs-up",
                    "refer_program_how_it_work_step_3": "You get rewarded",
                    "chart1_header": "Your Earned Credit",
                    "unlock_referral_rewards": "Unlock your referral Rewards",
                    "total_referral": "Total Referrals",
                    "copy": "Copy",
                    "referral_link_copied": "Link Copied",
                    "share_referral_link_title": "Share referral link via",
                    "facebook_share": "Share",
                    "whatsapp_share": "Share",
                    "share": "Share",
                    "referral_program_invitation_message": "You can earn credit for creating an account with {{ shop_name }}. Use this link and get rewarded : {{ link }}",
                    "blank_screen_line_1_html": "You have no referrals so far.\u003cbr\u003eYou can earn rewards by referring our store to your friends.\u003cbr\u003eCopy the above link and share it with your friends or",
                    "blank_screen_line_2_html": "Share the link directly via WhatsApp and Facebook.",
                    "referrer_credit_rule_title": "Referral Program",
                    "referrer_credit_rule_description": "Invite your friends and get {{ credit }} credit when they sign up.",
                    "referee_credit_rule_title": "Referral Program",
                    "referee_credit_rule_description": "When your friends accept the invitation, they will get {{ credit }} credit.",
                    "credit_on_number_of_referrals_rule_title": "Credit on numbers of referrals",
                    "credit_on_number_of_referrals_rule_description": "When you reach {{ referral_count }} referrals you get {{ credit }} credit.",
                    "referrals_specific_order_credit_rule_title": "Credit on specific order by referee",
                    "referrals_specific_order_credit_rule_description": "You can earn {{ credit }} credit on your referee's order number {{ order_count }}.",
                    "referrals_specific_order_and_next_orders_credit_rule_title": "Credit on referee's order number {{ order_count }} and next orders",
                    "referrals_specific_order_and_next_orders_credit_rule_description": "You can earn {{ credit }} credit on referee's order number {{ order_count }} and next orders {{ order_count+1 }}, {{ order_count+2 }}... {{ order_count+n }}",
                    "credit_on_referrals_total_spent_amount_rule_title": "Credit after referral's total spent amount",
                    "credit_on_referrals_total_spent_amount_rule_description": "You can earn {{ credit }} credit when your referral's total spent amount is {{ total_spent_amount }} or more.",
                    "credit_activity": "Referral History",
                    "earned_credit": "Earned Credit",
                    "referral_customer_name": "Referred To",
                    "referral_customer_email": "Referral's Email",
                    "credit": "Credit",
                    "time": "Referred Since",
                    "you_are_referred_by": "Referred by",
                    "customer_deleted": "Customer Deleted"
                },
                "from_admin_page": {
                    "header_line_html": "From Store Owner"
                },
                "update_password_page": {
                    "header_line_html": "Update your password for",
                    "new_password": "New Password",
                    "new_password_placeholder": "Enter New Password",
                    "confirm_new_password": "Confirm New Password",
                    "confirm_password_placeholder": "Confirm New Password",
                    "update_password_button": "Update Password",
                    "password_empty_message": "The password is empty",
                    "password_hint_message": "Password must be between 6 to 40 characters",
                    "password_not_match": "Passwords didn't match. Try again.",
                    "updating_password": "Updating password...",
                    "password_updated_successfully": "Your password for account {{ email }} has been successfully updated"
                },
                "buttons": {
                    "back": "Back",
                    "shop_now": "View Products",
                    "add_to_cart": "Add to Cart",
                    "sold_out": "Sold Out",
                    "previous": "Previous",
                    "next": "Next",
                    "product_unavailable_text": "Currently Unavailable",
                    "move_to_cart": "Move to Cart"
                },
                "months": {
                    "january": "January",
                    "february": "February",
                    "march": "March",
                    "april": "April",
                    "may": "May",
                    "june": "June",
                    "july": "July",
                    "august": "August",
                    "september": "September",
                    "october": "October",
                    "november": "November",
                    "december": "December"
                },
                "social_login_page": {
                    "facebook": "Facebook",
                    "google": "Google",
                    "twitter": "Twitter",
                    "amazon": "Amazon",
                    "loading_message": "Logging you in"
                },
                "cart_page": {
                    "adding_items_to_cart": "Adding items to cart...",
                    "select_credit_option": "Select option to use store credit",
                    "credit_cart_percentage": "You can use {{ credit }} credit out of {{ total_credit }}.",
                    "free_shipping": "You can get free shipping",
                    "applying_credit_message": "Applying credit please wait",
                    "credit_applied": "Store Credit Applied"
                },
                "invoice": {
                    "invoice_title": "INVOICE",
                    "invoice_no": "Invoice",
                    "payment_method": "Payment Method",
                    "order_no": "Order",
                    "issue_date": "Issue Date",
                    "order_date": "Order Date",
                    "billing_address_title": "Bill To",
                    "no_billing_address": "No billing address provided",
                    "shipping_address_title": "Ship To",
                    "no_shipping_address": "No shipping address provided",
                    "money_format": "{{ symbol }}{{ amount }}",
                    "item_title": "Item",
                    "item_quantity": "Quantity",
                    "item_price": "Unit Price",
                    "item_discount": "Discount",
                    "item_tax_rate": "Tax Rate",
                    "item_tax_type": "Tax Type",
                    "item_tax_amount": "Tax Amount",
                    "item_total": "Total",
                    "subtotal": "Sub Total",
                    "shipping_discount": "Shipping Discount",
                    "shipping_cost": "Shipping Cost",
                    "tax": "Tax",
                    "grand_total": "Grand Total",
                    "you_saved": "You Saved",
                    "amount_in_words": "Amount in words",
                    "for_store_name": "For {{ store_name }}",
                    "authorised_signatory": "Authorised Signatory",
                    "greeting_line1": "Thank You",
                    "greeting_line2": "We hope you enjoy your purchase.",
                    "email": "Email",
                    "phone": "Phone no",
                    "fax": "Fax",
                    "page_no": "Page {{ current_page }} of {{ total_page }}",
                    "zero": "Zero",
                    "one": "One",
                    "two": "Two",
                    "three": "Three",
                    "four": "Four",
                    "five": "Five",
                    "six": "Six",
                    "seven": "Seven",
                    "eight": "Eight",
                    "nine": "Nine",
                    "ten": "Ten",
                    "eleven": "Eleven",
                    "twelve": "Twelve",
                    "thirteen": "Thirteen",
                    "fourteen": "Fourteen",
                    "fifteen": "Fifteen",
                    "sixteen": "Sixteen",
                    "seventeen": "Seventeen",
                    "eighteen": "Eighteen",
                    "nineteen": "Nineteen",
                    "twenty": "Twenty",
                    "thirty": "Thirty",
                    "forty": "Forty",
                    "fifty": "Fifty",
                    "sixty": "Sixty",
                    "seventy": "Seventy",
                    "eighty": "Eighty",
                    "ninety": "Ninety",
                    "hundred": "Hundred",
                    "thousand": "Thousand",
                    "million": "Million",
                    "billion": "Billion",
                    "trillion": "Trillion",
                    "zero_only": "Zero only",
                    "only": "only",
                    "and": "and",
                    "invoice_is_generating": "Generating invoice...",
                    "saving_invoice": "Saving invoice"
                },
                "order_status_page": {
                    "total_earned_credit_on_order": "Congratulations! You have earned {{ credit }} credit on this purchase.",
                    "earned_credit_on_order_number": "You earned {{ credit }} credit for this order.",
                    "earned_credit_on_product_tag": "You earned {{ credit }} credit by purchasing from {{ tag }} collection.",
                    "total_credit_balance": "Your total credit balance is {{ credit }}.",
                    "shop_more_to_earn_credit_html": "Want to earn more credits and save big bucks? Then dive into our collection and shop more!",
                    "shop_more_to_spent_credit_html": "Still have credits left? Shop more to utilise them all."
                },
                "custom_fields": {
                    "file_type_invalid_error_message": "Please check file type and try again",
                    "file_size_exceed_error_message": "File size exceeds 1MB, please resize and upload"
                },
                "otp_login": {
                    "global": {
                        "errors": {
                            "first_name_required": "Please enter your first name to continue",
                            "last_name_required": "Please enter your last name to continue",
                            "email_invalid": "Please enter a valid email address to continue",
                            "email_required": "Please enter a valid email address to continue",
                            "phone_invalid": "Please enter a valid phone number to continue",
                            "phone_required": "Please enter a valid phone number to continue",
                            "something_wrong": "Something went wrong! Please try again.",
                            "otp_verify_sucess": "OTP verified successfully",
                            "otp_sent_sucess": "OTP sent successfully",
                            "invalid_otp": "The OTP you entered did not match. Please double check and try again",
                            "email_already_exists": "Email already exists, please try with another email",
                            "phone_already_exists": "Phone number already exists, please try with another phone number",
                            "email_already_exists_with_phone": "Email already exists with phone number {{ phone }} ",
                            "phone_already_exists_with_email": "Phone number already exists with email {{ email }} ",
                            "ip_block_error": "It appears that there have been multiple tries for OTP. Please try again in a few minutes."
                        },
                        "label": {
                            "first_name": "First Name",
                            "last_name": "Last Name",
                            "email": "Email",
                            "phone": "Phone Number"
                        },
                        "placeholder": {
                            "first_name": "First Name",
                            "last_name": "Last Name",
                            "email": "Email",
                            "phone": "Phone Number"
                        }
                    },
                    "login": {
                        "page_title": "Login With OTP",
                        "page_sub_head_email": "Please enter your email address",
                        "page_sub_head_phone": "Please enter your 10 digit mobile number",
                        "otp_hint_phone": "A 6 digit OTP will be sent to your phone number",
                        "otp_hint_email": "A 6 digit OTP will be sent to your email address",
                        "change_login_btn_phone": "Phone",
                        "change_login_btn_email": "Email",
                        "continue": "Request OTP",
                        "or_login_using": "Sign-in with"
                    },
                    "otp_verify": {
                        "page_title": "Please enter OTP for verification",
                        "page_sub_head": "Please enter the code sent to",
                        "next_step_btn": "Verify to proceed",
                        "resend_otp_title": "Didn't receive the OTP? Resend in ",
                        "resend_otp_btn": "Resend OTP",
                        "resend_otp_sucess_msg": "Resend OTP successfully"
                    },
                    "account_deatils": {
                        "page_title": "Profile Details",
                        "page_sub_head": "Hello! we just need a few more details",
                        "submit_btn": "Update and sign-in",
                        "verify_email_error": "We need to verify the email address entered above. Please click verify email to receive an OTP",
                        "verify_phone_error": "We need to verify the phone number entered above. Please click verify phone to receive an OTP",
                        "verify_phone_text": "Verify Phone",
                        "verify_email_text": "Verify Email",
                        "enter_otp_text": "Please verify your account by submitting the OTP",
                        "otp_sent_to_text": "OTP sent to"
                    }
                },
                "checkout": {
                    "apply_btn_text": "Apply",
                    "credit_dropdown_label": "Select option to use credit",
                    "credit_dropdown_first_option": "Select option to use credit",
                    "credit_cart_percentage": "You can use {{ credit }} credit out of {{ total_credit }}.",
                    "credit_dropdown_not_selected": "Please select credit option",
                    "credit_checkbox_not_selected": "Please select credit checkbox to apply credit",
                    "something_went-wrong": "Something went wrong! Please try again."
                }
            }
        },
        "SHOP_ID": "21061",
        "SHOP_TOKEN": "b25d12296d0a48a2eaa0bce8a3234c44",
        "THEME_SETTINGS_123639463991": {
            "status": true,
            "data": {
                "accountSettings": {
                    "template": 1,
                    "isCustomized": false,
                    "colorSettings": {
                        "navigationBGColor": "rgb(32, 2, 100)",
                        "navigationTextColor": "rgb(255, 255, 255)",
                        "navigationBorderColor": "rgb(32, 2, 100)",
                        "contentBGColor": "rgb(255, 255, 255, 0)",
                        "contentTextColor": "rgb(0, 0, 0)",
                        "primaryButtonBGColor": "rgb(32, 2, 100)",
                        "primaryButtonTextColor": "rgb(255, 255, 255)",
                        "secondaryButtonBGColor": "rgb(32, 2, 100)",
                        "secondaryButtonTextColor": "rgb(32, 2, 100)",
                        "badgeBGColor": "rgb(32, 2, 100)",
                        "badgeTextColor": "rgb(255, 255, 255)",
                        "linkColor": "rgb(32, 2, 100)"
                    },
                    "isAccountPageInJSON": false,
                    "sections": [],
                    "codeVersion": "3.0.0",
                    "themeStoreId": null
                },
                "microfront_remotes": {
                    "pages_template": {
                        "404": [],
                        "article": [],
                        "blog": [],
                        "captcha": [],
                        "cart": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "collection": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "list-collections": [],
                        "customers\/account": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "customers\/activate_account": [],
                        "customers\/addresses": [],
                        "customers\/login": [],
                        "customers\/order": [],
                        "customers\/register": [],
                        "customers\/reset_password": [],
                        "gift_card": [],
                        "index": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "metaobject": [],
                        "page": [{
                            "component": "storeFrontWishListPage",
                            "renderType": "remote"
                        }, {
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "password": [],
                        "policy": [],
                        "product": [{
                            "component": "storeFrontWishList",
                            "renderType": "remote"
                        }, {
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "search": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }]
                    },
                    "remotes": {
                        "storeFrontNavigation": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-navigation\/static\/store_front_navigation.js",
                            "moduleToLoad": ".\/storeFrontNavigation",
                            "remoteName": "storeFrontNavigation",
                            "localRoute": "storeFrontNavigation",
                            "skeletonToLoad": "SkeletonNavigation",
                            "states": []
                        },
                        "storeFrontRegisterPageCustomFields": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-profile\/static\/storeFront_myProfile.js",
                            "moduleToLoad": ".\/storeFrontRegisterPageCustomFields",
                            "remoteName": "storeFrontMyProfile",
                            "localRoute": "storeFrontMyProfile",
                            "required": ["IS_CUSTOM_FIELDS_ENABLE"]
                        },
                        "storeFrontMyProfile": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-profile\/static\/storeFront_myProfile.js",
                            "moduleToLoad": ".\/storeFrontMyProfile",
                            "remoteName": "storeFrontMyProfile",
                            "localRoute": "storeFrontMyProfile",
                            "skeletonToLoad": "LoadingWithOutShadow",
                            "jsonTemplate": [{
                                "component": "MyProfileForm",
                                "renderType": "local"
                            }]
                        },
                        "storeFrontChangePassword": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-change-password\/static\/store_front_change_password.js",
                            "moduleToLoad": ".\/storeFrontChangePassword",
                            "remoteName": "storeFrontChangePassword",
                            "localRoute": "storeFrontChangePassword",
                            "skeletonToLoad": "LoadingWithOutShadow",
                            "jsonTemplate": [{
                                "component": "ChangePasswordFormComponent",
                                "renderType": "local"
                            }]
                        },
                        "storeFrontWishList": {
                            "remoteUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0517\/2753\/2222\/files\/storeFront_wishList.js?v=1734781528",
                            "moduleToLoad": ".\/storeFrontWishList",
                            "remoteName": "storeFrontWishList",
                            "localRoute": "storeFrontWishList",
                            "required": ["IS_WISHLIST_ENABLE", "IS_WISHLIST_PAID"]
                        },
                        "storeFrontWishListCollection": {
                            "remoteUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0517\/2753\/2222\/files\/storeFront_wishList.js?v=1734781528",
                            "moduleToLoad": ".\/storeFrontWishListCollection",
                            "remoteName": "storeFrontWishList",
                            "localRoute": "storeFrontWishListCollection",
                            "required": ["IS_WISHLIST_ENABLE", "IS_WISHLIST_PAID"]
                        },
                        "storeFrontWishListPage": {
                            "remoteUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0517\/2753\/2222\/files\/storeFront_wishList.js?v=1734781528",
                            "moduleToLoad": ".\/storeFrontWishListPage",
                            "remoteName": "storeFrontWishList",
                            "localRoute": "storeFrontWishListPage",
                            "jsonTemplate": [],
                            "required": ["IS_WISHLIST_ENABLE", "IS_WISHLIST_PAID"]
                        },
                        "storeFrontCreditUsage": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-store-credit\/static\/store_front_credit.js",
                            "moduleToLoad": ".\/storeFrontCreditUsage",
                            "remoteName": "storeFrontCredit",
                            "localRoute": "storeFrontCreditUsage",
                            "required": ["IS_STORE_CREDIT_PAID", "is_store_credit_enable"],
                            "jsonTemplate": []
                        },
                        "storeFrontSocialLogin": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-social-login\/static\/store_front_social_login.js",
                            "moduleToLoad": ".\/storeFrontSocialLogin",
                            "remoteName": "storeFrontSocialLogin",
                            "localRoute": "storeFrontSocialLogin",
                            "jsonTemplate": [],
                            "required": ["IS_SOCIAL_LOGIN_PAID", "IS_SOCIAL_LOGIN_ENABLE"]
                        },
                        "storeFrontReferFriendRegisterPage": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-refer-friend\/static\/store_front_refer_friend.js",
                            "moduleToLoad": ".\/storeFrontReferFriendRegisterPage",
                            "remoteName": "storeFrontReferFriend",
                            "localRoute": "storeFrontReferFriendRegisterPage",
                            "required": ["IS_REFER_PROGRAM_ON", "IS_STORE_CREDIT_PAID", "is_store_credit_enable"]
                        },
                        "storeFrontReferFriend": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-refer-friend\/static\/store_front_refer_friend.js",
                            "moduleToLoad": ".\/storeFrontReferFriend",
                            "remoteName": "storeFrontReferFriend",
                            "localRoute": "storeFrontReferFriend",
                            "skeletonToLoad": "Loading",
                            "required": ["IS_STORE_CREDIT_PAID", "IS_REFER_PROGRAM_ON", "is_store_credit_enable"]
                        },
                        "storeFrontHowToManageCredit": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-how-to-manage-credit\/static\/store_front_how_to_manage_credit.js",
                            "moduleToLoad": ".\/storeFrontHowToManageCredit",
                            "remoteName": "storeFrontHowToManageCredit",
                            "localRoute": "storeFrontHowToManageCredit",
                            "skeletonToLoad": "Loading",
                            "required": ["is_store_credit_enable", "IS_HOW_TO_EARN_CREDIT_DISPLAY", "IS_STORE_CREDIT_PAID"],
                            "jsonTemplate": [{
                                "component": "HowToEarn",
                                "name": "edit",
                                "label": "flits.navigation.how_to_earn_credit",
                                "type": "button"
                            }, {
                                "component": "HowToSpent",
                                "name": "edit",
                                "label": "flits.navigation.how_to_spend_credit",
                                "type": "button"
                            }, {
                                "component": "FromStoreOwner",
                                "name": "edit",
                                "label": "flits.navigation.from_admin",
                                "type": "button"
                            }]
                        },
                        "storeFrontCredit": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-store-credit\/static\/store_front_credit.js",
                            "moduleToLoad": ".\/storeFrontCredit",
                            "remoteName": "storeFrontCredit",
                            "localRoute": "storeFrontCredit",
                            "skeletonToLoad": "Loading",
                            "required": ["IS_STORE_CREDIT_PAID", "is_store_credit_enable"]
                        },
                        "storeFrontOrder": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-order\/static\/store_front_order.js",
                            "moduleToLoad": ".\/storeFrontOrder",
                            "remoteName": "storeFrontOrder",
                            "localRoute": "storeFrontOrder",
                            "skeletonToLoad": "Loading"
                        },
                        "storeFrontDeliveryAddress": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-delivery-address\/static\/store_front_delivery_address.js",
                            "moduleToLoad": ".\/storeFrontDeliveryAddress",
                            "remoteName": "storeFrontDeliveryAddress",
                            "localRoute": "storeFrontDeliveryAddress",
                            "skeletonToLoad": "LoadingWithOutShadow"
                        },
                        "storeFrontRecentlyViewedProducts": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-recently-viewed-products\/static\/store_front_recently_viewed_products.js",
                            "moduleToLoad": ".\/storeFrontRecentlyViewedProducts",
                            "remoteName": "storeFrontRecentlyViewedProducts",
                            "localRoute": "storeFrontRecentlyViewedProducts",
                            "skeletonToLoad": "Loading",
                            "required": ["is_recently_view_enable"]
                        },
                        "storeFrontRecentlyViewedProductPage": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-recently-viewed-products\/static\/store_front_recently_viewed_products.js",
                            "moduleToLoad": ".\/storeFrontRecentlyViewedProductPage",
                            "remoteName": "storeFrontRecentlyViewedProducts",
                            "localRoute": "storeFrontRecentlyViewedProductPage",
                            "required": ["is_recently_view_enable"]
                        },
                        "storeFrontTopOrderedProducts": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-top-ordered-products\/static\/store_front_top_ordered_products.js",
                            "moduleToLoad": ".\/storeFrontTopOrderedProducts",
                            "remoteName": "storeFrontTopOrderedProducts",
                            "localRoute": "storeFrontTopOrderedProducts",
                            "skeletonToLoad": "LoadingWithOutShadow",
                            "required": ["IS_ADVANCE_DASHBOARD_ENABLE", "IS_ADVANCE_DASHBOARD_PAID"]
                        }
                    }
                },
                "multilanguage": "https:\/\/cdn.getflits.com\/locales\/21061\/123639463991\/en.json"
            },
            "flagSvgUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0030\/7491\/6461\/files\/flags.svg?v=1646045459"
        },
        "THEME_SETTINGS_125003137079": {
            "status": true,
            "data": {
                "accountSettings": {
                    "template": 1,
                    "isCustomized": false,
                    "colorSettings": {
                        "navigationBGColor": "rgb(32, 2, 100)",
                        "navigationTextColor": "rgb(255, 255, 255)",
                        "navigationBorderColor": "rgb(32, 2, 100)",
                        "contentBGColor": "rgb(255, 255, 255, 0)",
                        "contentTextColor": "rgb(0, 0, 0)",
                        "primaryButtonBGColor": "rgb(32, 2, 100)",
                        "primaryButtonTextColor": "rgb(255, 255, 255)",
                        "secondaryButtonBGColor": "rgb(32, 2, 100)",
                        "secondaryButtonTextColor": "rgb(32, 2, 100)",
                        "badgeBGColor": "rgb(32, 2, 100)",
                        "badgeTextColor": "rgb(255, 255, 255)",
                        "linkColor": "rgb(32, 2, 100)"
                    },
                    "isAccountPageInJSON": false,
                    "sections": [],
                    "codeVersion": "3.0.0",
                    "themeStoreId": null
                },
                "microfront_remotes": {
                    "pages_template": {
                        "404": [],
                        "article": [],
                        "blog": [],
                        "captcha": [],
                        "cart": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "collection": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "list-collections": [],
                        "customers\/account": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "customers\/activate_account": [],
                        "customers\/addresses": [],
                        "customers\/login": [],
                        "customers\/order": [],
                        "customers\/register": [],
                        "customers\/reset_password": [],
                        "gift_card": [],
                        "index": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "metaobject": [],
                        "page": [{
                            "component": "storeFrontWishListPage",
                            "renderType": "remote"
                        }, {
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "password": [],
                        "policy": [],
                        "product": [{
                            "component": "storeFrontWishList",
                            "renderType": "remote"
                        }, {
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "search": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }]
                    },
                    "remotes": {
                        "storeFrontNavigation": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-navigation\/static\/store_front_navigation.js",
                            "moduleToLoad": ".\/storeFrontNavigation",
                            "remoteName": "storeFrontNavigation",
                            "localRoute": "storeFrontNavigation",
                            "skeletonToLoad": "SkeletonNavigation",
                            "states": []
                        },
                        "storeFrontRegisterPageCustomFields": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-profile\/static\/storeFront_myProfile.js",
                            "moduleToLoad": ".\/storeFrontRegisterPageCustomFields",
                            "remoteName": "storeFrontMyProfile",
                            "localRoute": "storeFrontMyProfile",
                            "required": ["IS_CUSTOM_FIELDS_ENABLE"]
                        },
                        "storeFrontMyProfile": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-profile\/static\/storeFront_myProfile.js",
                            "moduleToLoad": ".\/storeFrontMyProfile",
                            "remoteName": "storeFrontMyProfile",
                            "localRoute": "storeFrontMyProfile",
                            "skeletonToLoad": "LoadingWithOutShadow",
                            "jsonTemplate": [{
                                "component": "MyProfileForm",
                                "renderType": "local"
                            }]
                        },
                        "storeFrontChangePassword": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-change-password\/static\/store_front_change_password.js",
                            "moduleToLoad": ".\/storeFrontChangePassword",
                            "remoteName": "storeFrontChangePassword",
                            "localRoute": "storeFrontChangePassword",
                            "skeletonToLoad": "LoadingWithOutShadow",
                            "jsonTemplate": [{
                                "component": "ChangePasswordFormComponent",
                                "renderType": "local"
                            }]
                        },
                        "storeFrontWishList": {
                            "remoteUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0580\/7456\/2630\/files\/storeFront_wishList.js?v=1713012070",
                            "moduleToLoad": ".\/storeFrontWishList",
                            "remoteName": "storeFrontWishList",
                            "localRoute": "storeFrontWishList",
                            "required": ["IS_WISHLIST_ENABLE", "IS_WISHLIST_PAID"]
                        },
                        "storeFrontWishListCollection": {
                            "remoteUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0580\/7456\/2630\/files\/storeFront_wishList.js?v=1713012070",
                            "moduleToLoad": ".\/storeFrontWishListCollection",
                            "remoteName": "storeFrontWishList",
                            "localRoute": "storeFrontWishListCollection",
                            "required": ["IS_WISHLIST_ENABLE", "IS_WISHLIST_PAID"]
                        },
                        "storeFrontWishListPage": {
                            "remoteUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0580\/7456\/2630\/files\/storeFront_wishList.js?v=1713012070",
                            "moduleToLoad": ".\/storeFrontWishListPage",
                            "remoteName": "storeFrontWishList",
                            "localRoute": "storeFrontWishListPage",
                            "jsonTemplate": [],
                            "required": ["IS_WISHLIST_ENABLE", "IS_WISHLIST_PAID"]
                        },
                        "storeFrontCreditUsage": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-store-credit\/static\/store_front_credit.js",
                            "moduleToLoad": ".\/storeFrontCreditUsage",
                            "remoteName": "storeFrontCredit",
                            "localRoute": "storeFrontCreditUsage",
                            "required": ["IS_STORE_CREDIT_PAID", "is_store_credit_enable"],
                            "jsonTemplate": []
                        },
                        "storeFrontSocialLogin": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-social-login\/static\/store_front_social_login.js",
                            "moduleToLoad": ".\/storeFrontSocialLogin",
                            "remoteName": "storeFrontSocialLogin",
                            "localRoute": "storeFrontSocialLogin",
                            "jsonTemplate": [],
                            "required": ["IS_SOCIAL_LOGIN_PAID", "IS_SOCIAL_LOGIN_ENABLE"]
                        },
                        "storeFrontReferFriendRegisterPage": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-refer-friend\/static\/store_front_refer_friend.js",
                            "moduleToLoad": ".\/storeFrontReferFriendRegisterPage",
                            "remoteName": "storeFrontReferFriend",
                            "localRoute": "storeFrontReferFriendRegisterPage",
                            "required": ["IS_REFER_PROGRAM_ON", "IS_STORE_CREDIT_PAID", "is_store_credit_enable"]
                        },
                        "storeFrontReferFriend": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-refer-friend\/static\/store_front_refer_friend.js",
                            "moduleToLoad": ".\/storeFrontReferFriend",
                            "remoteName": "storeFrontReferFriend",
                            "localRoute": "storeFrontReferFriend",
                            "skeletonToLoad": "Loading",
                            "required": ["IS_STORE_CREDIT_PAID", "IS_REFER_PROGRAM_ON", "is_store_credit_enable"]
                        },
                        "storeFrontHowToManageCredit": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-how-to-manage-credit\/static\/store_front_how_to_manage_credit.js",
                            "moduleToLoad": ".\/storeFrontHowToManageCredit",
                            "remoteName": "storeFrontHowToManageCredit",
                            "localRoute": "storeFrontHowToManageCredit",
                            "skeletonToLoad": "Loading",
                            "required": ["is_store_credit_enable", "IS_HOW_TO_EARN_CREDIT_DISPLAY", "IS_STORE_CREDIT_PAID"],
                            "jsonTemplate": [{
                                "component": "HowToEarn",
                                "name": "edit",
                                "label": "flits.navigation.how_to_earn_credit",
                                "type": "button"
                            }, {
                                "component": "HowToSpent",
                                "name": "edit",
                                "label": "flits.navigation.how_to_spend_credit",
                                "type": "button"
                            }, {
                                "component": "FromStoreOwner",
                                "name": "edit",
                                "label": "flits.navigation.from_admin",
                                "type": "button"
                            }]
                        },
                        "storeFrontCredit": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-store-credit\/static\/store_front_credit.js",
                            "moduleToLoad": ".\/storeFrontCredit",
                            "remoteName": "storeFrontCredit",
                            "localRoute": "storeFrontCredit",
                            "skeletonToLoad": "Loading",
                            "required": ["IS_STORE_CREDIT_PAID", "is_store_credit_enable"]
                        },
                        "storeFrontOrder": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-order\/static\/store_front_order.js",
                            "moduleToLoad": ".\/storeFrontOrder",
                            "remoteName": "storeFrontOrder",
                            "localRoute": "storeFrontOrder",
                            "skeletonToLoad": "Loading"
                        },
                        "storeFrontDeliveryAddress": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-delivery-address\/static\/store_front_delivery_address.js",
                            "moduleToLoad": ".\/storeFrontDeliveryAddress",
                            "remoteName": "storeFrontDeliveryAddress",
                            "localRoute": "storeFrontDeliveryAddress",
                            "skeletonToLoad": "LoadingWithOutShadow"
                        },
                        "storeFrontRecentlyViewedProducts": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-recently-viewed-products\/static\/store_front_recently_viewed_products.js",
                            "moduleToLoad": ".\/storeFrontRecentlyViewedProducts",
                            "remoteName": "storeFrontRecentlyViewedProducts",
                            "localRoute": "storeFrontRecentlyViewedProducts",
                            "skeletonToLoad": "Loading",
                            "required": ["is_recently_view_enable"]
                        },
                        "storeFrontRecentlyViewedProductPage": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-recently-viewed-products\/static\/store_front_recently_viewed_products.js",
                            "moduleToLoad": ".\/storeFrontRecentlyViewedProductPage",
                            "remoteName": "storeFrontRecentlyViewedProducts",
                            "localRoute": "storeFrontRecentlyViewedProductPage",
                            "required": ["is_recently_view_enable"]
                        },
                        "storeFrontTopOrderedProducts": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-top-ordered-products\/static\/store_front_top_ordered_products.js",
                            "moduleToLoad": ".\/storeFrontTopOrderedProducts",
                            "remoteName": "storeFrontTopOrderedProducts",
                            "localRoute": "storeFrontTopOrderedProducts",
                            "skeletonToLoad": "LoadingWithOutShadow",
                            "required": ["IS_ADVANCE_DASHBOARD_ENABLE", "IS_ADVANCE_DASHBOARD_PAID"]
                        }
                    }
                },
                "multilanguage": "https:\/\/cdn.getflits.com\/locales\/21061\/125003137079\/en.json"
            },
            "flagSvgUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0030\/7491\/6461\/files\/flags.svg?v=1646045459"
        },
        "THEME_SETTINGS_125102293047": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_126062723127": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_126110957623": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_126111612983": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_126298947639": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_126341382199": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_126383194167": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_126416814135": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_126494998583": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_126763237431": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_126784864311": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_126792499255": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_127036850231": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_127113887799": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_127114149943": {
            "status": true,
            "data": {
                "accountSettings": {
                    "template": 1,
                    "isCustomized": false,
                    "colorSettings": {
                        "navigationBGColor": "rgb(32, 2, 100)",
                        "navigationTextColor": "rgb(255, 255, 255)",
                        "navigationBorderColor": "rgb(32, 2, 100)",
                        "contentBGColor": "rgb(255, 255, 255, 0)",
                        "contentTextColor": "rgb(0, 0, 0)",
                        "primaryButtonBGColor": "rgb(32, 2, 100)",
                        "primaryButtonTextColor": "rgb(255, 255, 255)",
                        "secondaryButtonBGColor": "rgb(32, 2, 100)",
                        "secondaryButtonTextColor": "rgb(32, 2, 100)",
                        "badgeBGColor": "rgb(32, 2, 100)",
                        "badgeTextColor": "rgb(255, 255, 255)",
                        "linkColor": "rgb(32, 2, 100)"
                    },
                    "isAccountPageInJSON": false,
                    "sections": [],
                    "codeVersion": "3.0.0",
                    "themeStoreId": null
                },
                "microfront_remotes": {
                    "pages_template": {
                        "404": [],
                        "article": [],
                        "blog": [],
                        "captcha": [],
                        "cart": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "collection": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "list-collections": [],
                        "customers\/account": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "customers\/activate_account": [],
                        "customers\/addresses": [],
                        "customers\/login": [],
                        "customers\/order": [],
                        "customers\/register": [],
                        "customers\/reset_password": [],
                        "gift_card": [],
                        "index": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "metaobject": [],
                        "page": [{
                            "component": "storeFrontWishListPage",
                            "renderType": "remote"
                        }, {
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "password": [],
                        "policy": [],
                        "product": [{
                            "component": "storeFrontWishList",
                            "renderType": "remote"
                        }, {
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }],
                        "search": [{
                            "component": "storeFrontWishListCollection",
                            "renderType": "remote"
                        }]
                    },
                    "remotes": {
                        "storeFrontNavigation": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-navigation\/static\/store_front_navigation.js",
                            "moduleToLoad": ".\/storeFrontNavigation",
                            "remoteName": "storeFrontNavigation",
                            "localRoute": "storeFrontNavigation",
                            "skeletonToLoad": "SkeletonNavigation",
                            "states": []
                        },
                        "storeFrontRegisterPageCustomFields": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-profile\/static\/storeFront_myProfile.js",
                            "moduleToLoad": ".\/storeFrontRegisterPageCustomFields",
                            "remoteName": "storeFrontMyProfile",
                            "localRoute": "storeFrontMyProfile",
                            "required": ["IS_CUSTOM_FIELDS_ENABLE"]
                        },
                        "storeFrontMyProfile": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-profile\/static\/storeFront_myProfile.js",
                            "moduleToLoad": ".\/storeFrontMyProfile",
                            "remoteName": "storeFrontMyProfile",
                            "localRoute": "storeFrontMyProfile",
                            "skeletonToLoad": "LoadingWithOutShadow",
                            "jsonTemplate": [{
                                "component": "MyProfileForm",
                                "renderType": "local"
                            }]
                        },
                        "storeFrontChangePassword": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-change-password\/static\/store_front_change_password.js",
                            "moduleToLoad": ".\/storeFrontChangePassword",
                            "remoteName": "storeFrontChangePassword",
                            "localRoute": "storeFrontChangePassword",
                            "skeletonToLoad": "LoadingWithOutShadow",
                            "jsonTemplate": [{
                                "component": "ChangePasswordFormComponent",
                                "renderType": "local"
                            }]
                        },
                        "storeFrontWishList": {
                            "remoteUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0517\/2753\/2222\/files\/storeFront_wishList.js?v=1734781528",
                            "moduleToLoad": ".\/storeFrontWishList",
                            "remoteName": "storeFrontWishList",
                            "localRoute": "storeFrontWishList",
                            "required": ["IS_WISHLIST_ENABLE", "IS_WISHLIST_PAID"]
                        },
                        "storeFrontWishListCollection": {
                            "remoteUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0517\/2753\/2222\/files\/storeFront_wishList.js?v=1734781528",
                            "moduleToLoad": ".\/storeFrontWishListCollection",
                            "remoteName": "storeFrontWishList",
                            "localRoute": "storeFrontWishListCollection",
                            "required": ["IS_WISHLIST_ENABLE", "IS_WISHLIST_PAID"]
                        },
                        "storeFrontWishListPage": {
                            "remoteUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0517\/2753\/2222\/files\/storeFront_wishList.js?v=1734781528",
                            "moduleToLoad": ".\/storeFrontWishListPage",
                            "remoteName": "storeFrontWishList",
                            "localRoute": "storeFrontWishListPage",
                            "jsonTemplate": [],
                            "required": ["IS_WISHLIST_ENABLE", "IS_WISHLIST_PAID"]
                        },
                        "storeFrontCreditUsage": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-store-credit\/static\/store_front_credit.js",
                            "moduleToLoad": ".\/storeFrontCreditUsage",
                            "remoteName": "storeFrontCredit",
                            "localRoute": "storeFrontCreditUsage",
                            "required": ["IS_STORE_CREDIT_PAID", "is_store_credit_enable"],
                            "jsonTemplate": []
                        },
                        "storeFrontSocialLogin": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-social-login\/static\/store_front_social_login.js",
                            "moduleToLoad": ".\/storeFrontSocialLogin",
                            "remoteName": "storeFrontSocialLogin",
                            "localRoute": "storeFrontSocialLogin",
                            "jsonTemplate": [],
                            "required": ["IS_SOCIAL_LOGIN_PAID", "IS_SOCIAL_LOGIN_ENABLE"]
                        },
                        "storeFrontReferFriendRegisterPage": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-refer-friend\/static\/store_front_refer_friend.js",
                            "moduleToLoad": ".\/storeFrontReferFriendRegisterPage",
                            "remoteName": "storeFrontReferFriend",
                            "localRoute": "storeFrontReferFriendRegisterPage",
                            "required": ["IS_REFER_PROGRAM_ON", "IS_STORE_CREDIT_PAID", "is_store_credit_enable"]
                        },
                        "storeFrontReferFriend": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-refer-friend\/static\/store_front_refer_friend.js",
                            "moduleToLoad": ".\/storeFrontReferFriend",
                            "remoteName": "storeFrontReferFriend",
                            "localRoute": "storeFrontReferFriend",
                            "skeletonToLoad": "Loading",
                            "required": ["IS_STORE_CREDIT_PAID", "IS_REFER_PROGRAM_ON", "is_store_credit_enable"]
                        },
                        "storeFrontHowToManageCredit": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-how-to-manage-credit\/static\/store_front_how_to_manage_credit.js",
                            "moduleToLoad": ".\/storeFrontHowToManageCredit",
                            "remoteName": "storeFrontHowToManageCredit",
                            "localRoute": "storeFrontHowToManageCredit",
                            "skeletonToLoad": "Loading",
                            "required": ["is_store_credit_enable", "IS_HOW_TO_EARN_CREDIT_DISPLAY", "IS_STORE_CREDIT_PAID"],
                            "jsonTemplate": [{
                                "component": "HowToEarn",
                                "name": "edit",
                                "label": "flits.navigation.how_to_earn_credit",
                                "type": "button"
                            }, {
                                "component": "HowToSpent",
                                "name": "edit",
                                "label": "flits.navigation.how_to_spend_credit",
                                "type": "button"
                            }, {
                                "component": "FromStoreOwner",
                                "name": "edit",
                                "label": "flits.navigation.from_admin",
                                "type": "button"
                            }]
                        },
                        "storeFrontCredit": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-store-credit\/static\/store_front_credit.js",
                            "moduleToLoad": ".\/storeFrontCredit",
                            "remoteName": "storeFrontCredit",
                            "localRoute": "storeFrontCredit",
                            "skeletonToLoad": "Loading",
                            "required": ["IS_STORE_CREDIT_PAID", "is_store_credit_enable"]
                        },
                        "storeFrontOrder": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-order\/static\/store_front_order.js",
                            "moduleToLoad": ".\/storeFrontOrder",
                            "remoteName": "storeFrontOrder",
                            "localRoute": "storeFrontOrder",
                            "skeletonToLoad": "Loading"
                        },
                        "storeFrontDeliveryAddress": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-delivery-address\/static\/store_front_delivery_address.js",
                            "moduleToLoad": ".\/storeFrontDeliveryAddress",
                            "remoteName": "storeFrontDeliveryAddress",
                            "localRoute": "storeFrontDeliveryAddress",
                            "skeletonToLoad": "LoadingWithOutShadow"
                        },
                        "storeFrontRecentlyViewedProducts": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-recently-viewed-products\/static\/store_front_recently_viewed_products.js",
                            "moduleToLoad": ".\/storeFrontRecentlyViewedProducts",
                            "remoteName": "storeFrontRecentlyViewedProducts",
                            "localRoute": "storeFrontRecentlyViewedProducts",
                            "skeletonToLoad": "Loading",
                            "required": ["is_recently_view_enable"]
                        },
                        "storeFrontRecentlyViewedProductPage": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-recently-viewed-products\/static\/store_front_recently_viewed_products.js",
                            "moduleToLoad": ".\/storeFrontRecentlyViewedProductPage",
                            "remoteName": "storeFrontRecentlyViewedProducts",
                            "localRoute": "storeFrontRecentlyViewedProductPage",
                            "required": ["is_recently_view_enable"]
                        },
                        "storeFrontTopOrderedProducts": {
                            "remoteUrl": "https:\/\/cdn.getflits.com\/theme_code\/default\/storefront-top-ordered-products\/static\/store_front_top_ordered_products.js",
                            "moduleToLoad": ".\/storeFrontTopOrderedProducts",
                            "remoteName": "storeFrontTopOrderedProducts",
                            "localRoute": "storeFrontTopOrderedProducts",
                            "skeletonToLoad": "LoadingWithOutShadow",
                            "required": ["IS_ADVANCE_DASHBOARD_ENABLE", "IS_ADVANCE_DASHBOARD_PAID"]
                        }
                    }
                },
                "multilanguage": "https:\/\/cdn.getflits.com\/locales\/21061\/127114149943\/en.json"
            },
            "flagSvgUrl": "https:\/\/cdn.shopify.com\/s\/files\/1\/0030\/7491\/6461\/files\/flags.svg?v=1646045459"
        },
        "THEME_SETTINGS_127300436023": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_127349227575": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_127433015351": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_127582109751": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_127755255863": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_127845204023": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_127890227255": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_127899828279": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128075431991": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128135856183": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128135888951": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128143622199": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128144277559": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128145391671": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128251265079": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128251461687": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128322601015": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128415596599": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128416284727": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128571179063": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128699269175": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128699301943": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128700678199": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128703627319": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128705134647": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128846954551": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128953876535": {
            "status": false,
            "message": "Code is not installed"
        },
        "THEME_SETTINGS_128988577847": {
            "status": false,
            "message": "Code is not installed"
        },
        "WSL_AFTER_BTN_BORDER_COLOR": "#F7F5FA",
        "WSL_AFTER_BTN_COLOR": "#00f092",
        "WSL_AFTER_BTN_TEXT": "Added to Wishlist",
        "WSL_AFTER_BTN_TEXT_COLOR": "#F5FAF9",
        "WSL_AFTER_HEART_COLOR": "#A740af",
        "WSL_BEFORE_BTN_BORDER_COLOR": "#000000",
        "WSL_BEFORE_BTN_COLOR": "#FCFCFC",
        "WSL_BEFORE_BTN_TEXT": "Add to Wishlist",
        "WSL_BEFORE_BTN_TEXT_COLOR": "#F5020F",
        "WSL_BEFORE_HEART_COLOR": "#000000",
        "WSL_BTN_TYPE": "1",
        "WSL_CODE_AUTOMATIC": "1",
        "WSL_COUNT_ENABLE": "0",
        "WSL_DEFAULT_AFTER_HEART_COLOR": "#A740AF",
        "WSL_DEFAULT_BEFORE_HEART_COLOR": "#080708"
    },
    scPaid: false,
    scEnable: false,
    scReferOn: false,
    customerExist: false,
    locals: {},
    fromCache: true,
    cacheTime: 5,
    customer: {
        orderSize: "",
        orderCount: "",
        orderPerPageItem: "3",
        "name": "",
        "first_name": "",
        "last_name": "",
        "email": "",
        "contact": "",
        "customer_accept_marketing": "",
        "gender": "",
        "birthday": "",
        "customer_id": "-1",
        "order_count": "",
        "shop_id": "21061",
        "customer_hash": "",
        "shop_token": "b25d12296d0a48a2eaa0bce8a3234c44",
        "default_address": null,
        "address_count": "",
        "paginate": "25"
    },
    orderCart: [],
    defaultEnJson: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_MultiLanguage_en.json?v=1736399370",
    defaultLanguageJson: {
        "pt-PT": "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_MultiLanguage_pt_PT.json?v=1736399386",
        "pt-BR": "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_MultiLanguage_pt_Br.json?v=1736399452",
        "zh-CN": "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_MultiLanguage_zh_CN.json?v=1736399439",
        "zh-TW": "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_MultiLanguage_zh_TW.json?v=1736399395",
        "en": "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_MultiLanguage_en.json?v=1736399370",
        "pt": "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_MultiLanguage_pt_Br.json?v=1736399452",
        "zh": "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_MultiLanguage_zh_CN.json?v=1736399439",
        "es": "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_MultiLanguage_es.json?v=1736399403",
        "de": "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_MultiLanguage_de.json?v=1736399462",
        "fr": "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_MultiLanguage_fr.json?v=1736399421"
    },
    ManageCreditRuleIcons: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/managecredittabIcon.json?v=1718347029",
    UnoDuoIconsUrl: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Svgs.json?v=1731309159",
    iconUrl: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/Flits_icons.json?v=1734670873",
    CountryListUrl: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/country_list.json?v=1718347029",
    product: {
        "product_id": "",
        "product_handle": "",
        "product_image": "<!-- Liquid error (shopify://apps/flits-customer-account-page/blocks/flits/d5eeb0f1-bc12-4372-af4d-40ca0d3ad847 line 149): invalid url input -->",
        "product_title": "",
        "wishlistCount": "0"
    },
    request: {
        design_mode: false,
        host: "veirdo.in",
        locale: {
            "shop_locale": {
                "locale": "en",
                "enabled": true,
                "primary": true,
                "published": true
            }
        },
        origin: "https://veirdo.in",
        page_type: "index",
        path: "/",
        visual_preview_mode: false,
    },
    languageData: async function (url) {
        let langFullCode = document
            ?.getElementsByTagName("html")[0]
            ?.getAttribute("lang");
        let lanPrefix = langFullCode?.split("-")[0];
        let themeId = window?.Shopify?.theme?.id;

        const endpoint = url?.includes("default") ?
            window?.flitsThemeAppExtensionObjects?.defaultLanguageJson[
            langFullCode
            ] ??
            window?.flitsThemeAppExtensionObjects?.defaultLanguageJson[lanPrefix] ??
            window?.flitsThemeAppExtensionObjects?.defaultLanguageJson["en"] ?? window?.flitsThemeAppExtensionObjects?.defaultEnJson :
            url;

        let jsonData =
            window?.flitsThemeAppExtensionObjects?.Metafields[
            `FLITS_EXTENSION_MULTILANGUAGE_CONTENT_${langFullCode}`
            ] ??
            window?.flitsThemeAppExtensionObjects?.Metafields[
            `FLITS_EXTENSION_MULTILANGUAGE_CONTENT_${lanPrefix}`
            ] ??
            window?.flitsThemeAppExtensionObjects?.Metafields[
            `MULTILANGUAGE_CONTENT_${lanPrefix}_${themeId}`
            ];

        if (jsonData) {
            return {
                status: true,
                data: jsonData,
                endpoint: endpoint,
            };
        }

        jsonData =
            window?.flitsThemeAppExtensionObjects?.Metafields[
            `FLITS_EXTENSION_MULTILANGUAGE_CONTENT_en`
            ] ??
            window?.flitsThemeAppExtensionObjects?.Metafields[
            `MULTILANGUAGE_CONTENT_en_${themeId}`
            ];

        if (
            !(
                window?.flitsThemeAppExtensionObjects?.defaultLanguageJson[
                langFullCode
                ] ??
                window?.flitsThemeAppExtensionObjects?.defaultLanguageJson[lanPrefix]
            ) &&
            jsonData
        ) {
            return {
                status: true,
                data: jsonData,
                endpoint: endpoint,
            };
        }

        return {
            status: false,
            endpoint: endpoint,
        };
    },
    addCommonEndpoint: function () {
        window.commonEndpoint = {
            cart: !window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.primary ? `${window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.locale?.split("-")?.[0]}/cart` : "cart",
            logout: !window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.primary ? `/${window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.locale?.split("-")?.[0]}/account/logout` : "/account/logout",
            product: !window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.primary ? `/${window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.locale?.split("-")?.[0]}` : "",
            collection: !window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.primary ? `/${window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.locale?.split("-")?.[0]}` : "",
            register: !window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.primary ? `/${window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.locale?.split("-")?.[0]}/account/register` : "/account/register",
            login: !window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.primary ? `/${window?.flitsThemeAppExtensionObjects?.request?.locale?.shop_locale?.locale?.split("-")?.[0]}/account/login` : "/account/login"
        }
    },
    template: {
        directory: "",
        name: "index",
        suffix: "",
    },
    theme: JSON.parse(JSON.stringify(window.Shopify.theme)),
    routes: {
        account_login_url: "/account/login",
        root_url: "/"
    },
    flitsMicrofrontendJsUrls: {
        storeFrontContainerV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/main.storeFrontContainer_3_1_4.js?v=1729751070",
        storeFrontContainerV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/main.storeFrontContainer.4.5.1.js",
        storeFrontChangePasswordV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/store_front_change_password_V_3_1_4.js?v=1729751043",
        storeFrontDeliveryAddressV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/store_front_delivery_address_3_1_4.js?v=1729751088",
        storeFrontHowToManageCreditV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/store_front_how_to_manage_credit_3_1_4.js?v=1729751102",
        storeFrontNavigationV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/store_front_navigation_3_1_4.js?v=1731334065",
        storeFrontOrderV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/store_front_order_3_1_4.js?v=1729751132",
        storeFrontMyProfileV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/storeFront_myProfile_3_1_4.js?v=1729751146",
        storeFrontRecentlyViewedProductsV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/store_front_recently_viewed_products_3_1_4.js?v=1729751156",
        storeFrontReferFriendV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/store_front_refer_friend_3_1_4.js?v=1729751170",
        storeFrontSocialLoginV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/store_front_social_login_3_1_4.js?v=1729751181",
        storeFrontCreditV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/store_front_credit_3_1_4.js?v=1729751196",
        storeFrontTopOrderedProductsV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/store_front_top_ordered_products_3_1_4.js?v=1729751206",
        storeFrontWishListV3: "https://cdn.shopify.com/s/files/1/0030/7491/6461/files/storeFront_wishList_3_1_4.js?v=1729751221",
        storeFrontChangePasswordV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/store_front_change_password.4.5.1.js",
        storeFrontDeliveryAddressV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/store_front_delivery_address.4.5.1.js",
        storeFrontHowToManageCreditV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/store_front_how_to_manage_credit.4.5.1.js",
        storeFrontNavigationV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/store_front_navigation.4.5.1.js",
        storeFrontOrderV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/store_front_order.4.5.1.js",
        storeFrontMyProfileV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/storeFront_myProfile.4.5.1.js",
        storeFrontRecentlyViewedProductsV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/store_front_recently_viewed_products.4.5.1.js",
        storeFrontReferFriendV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/store_front_refer_friend.4.5.1.js",
        storeFrontSocialLoginV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/store_front_social_login.4.5.1.js",
        storeFrontCreditV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/store_front_credit.4.5.1.js",
        storeFrontTopOrderedProductsV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/store_front_top_ordered_products.4.5.1.js",
        storeFrontWishListV4: "https://cdn.shopify.com/extensions/964db1ab-a004-4599-864e-c1200d5b3bd2/flits-38/assets/storeFront_wishList.4.5.1.js",
    },
    flitsGetStoreMicrofrontendUrl: function (name) {
        const themeSettingMetafield = window.flitsThemeAppExtensionObjects.Metafields[`THEME_SETTINGS_${window.flitsThemeAppExtensionObjects.theme.id}`];
        if ((themeSettingMetafield && window?.flitsThemeAppExtensionObjects?.checkIsNeedToLoadVersion3())) {
            return window.flitsThemeAppExtensionObjects.flitsMicrofrontendJsUrls[`${name}V3`];
        }
        return window.flitsThemeAppExtensionObjects.flitsMicrofrontendJsUrls[`${name}V4`];
    },
    // need to change function  because it is not good pratice
    checkIsNeedToLoadVersion3: function () {
        let metafield = window.flitsThemeAppExtensionObjects.Metafields.MICRO_FRONTEND_STOREFRONT_CONTAINER_URL;

        if (metafield) {
            metafield = window.flitsThemeAppExtensionObjects.Metafields.MICRO_FRONTEND_STOREFRONT_CONTAINER_URL[window.flitsThemeAppExtensionObjects.theme.id]
        }
        const themeSettingMetafield = window.flitsThemeAppExtensionObjects.Metafields[`THEME_SETTINGS_${window.flitsThemeAppExtensionObjects.theme.id}`]?.data?.accountSettings?.codeVersion;
        let getRemoteUrls = window.flitsThemeAppExtensionObjects?.Metafields[`THEME_SETTINGS_${window.flitsThemeAppExtensionObjects.theme.id}`]?.data?.microfront_remotes?.remotes;

        if (!getRemoteUrls) {
            if (metafield) {
                if (themeSettingMetafield?.startsWith("3")) {
                    return true;
                } else {
                    return false;
                }
            } else {
                return false;
            }
        }

        if (getRemoteUrls) {
            if (metafield) {
                if (themeSettingMetafield?.startsWith("3")) {
                    return true;
                }
                if (themeSettingMetafield?.startsWith("4")) {
                    return false;
                }
            } else {
                for (let key in getRemoteUrls) {
                    if (getRemoteUrls[key] && getRemoteUrls[key].remoteUrl !== "defaultURL") {
                        if (themeSettingMetafield?.startsWith("3")) {
                            return true;
                        } else {
                            return false;
                        }
                    }
                }
            }
        }

        return false;
    },
    flitsGetStoreFrontContainerUrl: function () {
        const metafield = window?.flitsThemeAppExtensionObjects?.Metafields?.MICRO_FRONTEND_STOREFRONT_CONTAINER_URL;
        const themeSettingMetafield = window.flitsThemeAppExtensionObjects.Metafields[`THEME_SETTINGS_${window.flitsThemeAppExtensionObjects.theme.id}`];
        if (!metafield || !metafield[window.flitsThemeAppExtensionObjects.theme.id]) {

            // need to change this condition because it is not good pratice
            return window.flitsThemeAppExtensionObjects.flitsGetStoreMicrofrontendUrl("storeFrontContainer");
        }
        return metafield[window.flitsThemeAppExtensionObjects.theme.id];
    }
};