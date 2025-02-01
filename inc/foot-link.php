<!-- TODO - remove the dependency of jquery for critical rendering -->
<script src="cdn/shop/t/64/assets/hamburger-menu.min06f4.js?v=84340172155576691991733916671" defer></script>

<script>
    window.shopUrl = 'index.html';
    window.routes = {
        cart_add_url: '/cart/add',
        cart_change_url: '/cart/change',
        cart_update_url: '/cart/update',
        cart_url: '/cart',
        predictive_search_url: '/search/suggest',
    };
</script>
<script src="cdn/shop/t/64/assets/predictive-search.mind3e4.js?v=107557671509637896911707900564"
    defer="defer"></script>

<script>
    const $jq = jQuery.noConflict();

    /* Start - Image Lazy loading Logic */
    const lazyImages = document.querySelectorAll('.lazy');
    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                const image = entry.target;
                image.src = image.dataset.src;
                image.addEventListener('load', () => {
                    image.classList.add('loaded');
                });
                observer.unobserve(image);
            }
        });
    });
    lazyImages.forEach((image) => {
        observer.observe(image);
    });
    /* End - Image Lazy loading Logic */
    function getTemplate() {
        const temp = "index";
        return temp;
    }
    const getDeviceType = (width) => {
        return width >= 1024 ? "desktop" : width >= 768 ? "tablet" : "mobile";
    };
    const customer = {
        name: '',
        id: ``,
        email: ``,
        phone: ``
    }
    window.customer = customer;
    window.brand = {
        device: {
            deviceType: getDeviceType(document.body.clientWidth)
        }
    }
    //loading lottie cdn only when there is lottie on page
    document.addEventListener('DOMContentLoaded', function() {
        setTimeout(function() {
            var script = document.createElement('script');
            script.defer = true;
            script.src = 'cdn.shopify.com/s/files/1/0485/2534/4920/files/lottie-player.minc559.js?v=1712587202';
            document.head.appendChild(script);
        }, 2000); // Delay of 2 seconds
        let currentScrollRange = -1;
        let lastPageUrl = '';
        window.addEventListener('scroll', () => {
            const scrollDepth = Math.round((window.scrollY) / (document.querySelector('html.js').offsetHeight - window.innerHeight) * 100);
            const scrollRange = Math.round((scrollDepth) / 25);
            if (lastPageUrl != window.location.href) {
                lastPageUrl = window.location.href;
                currentScrollRange = -1;
            }
            if (scrollRange != currentScrollRange) {
                currentScrollRange = scrollRange;
                gaScrollEvent(scrollRange * 25, window.location.href);
            }
        })
    });
</script>