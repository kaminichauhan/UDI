<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Card Slider with Videos</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">

    <!-- Slick Carousel CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

    <style>
        .card-slider .card-wrapper {
            text-align: center;
            padding-bottom: 15px; /* Space below the card */
        }

        .card-slider .card {
            margin: 10px;
            width: 100%;
            height: 400px;
            border-radius: 8px;
            overflow: hidden;
        }

        .product-name {
            font-size: 12px;
            font-weight: bold;
            margin-top: 5px;
        }

        .product-price {
            font-size: 16px;
            color: #ff5733;
        }

        video {
            width: 100%;
            height: 100%;
            object-fit:cover;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="card-slider">

                <!-- Video Card 1 -->
                <div class="col-lg-4 col-md-6 col-sm-12 card-wrapper">
                    <div class="card">
                        <video autoplay muted loop>
                            <source src="./cdn/shop/video/video1.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="product-name">Squad Royal Blue Oversized Puff</div>
                    <div class="product-price">₹ 899

₹ 1,499</div>
                </div>

                <!-- Video Card 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12 card-wrapper">
                    <div class="card">
                        <video autoplay muted loop>
                            <source src="./cdn/shop/video/video2.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="product-name">Devil Horn Oversized Acid Washed Graphic </div>
                    <div class="product-price">₹ 899

₹ 1,999</div>
                </div>

                <!-- Video Card 3 -->
                <div class="col-lg-4 col-md-6 col-sm-12 card-wrapper">
                    <div class="card">
                        <video autoplay muted loop>
                            <source src="./cdn/shop/video/video3.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="product-name">Ignite Oversized Acid Washed</div>
                    <div class="product-price">₹ 899

₹ 1,999</div>
                </div>

                <!-- Video Card 4 -->
                <div class="col-lg-4 col-md-6 col-sm-12 card-wrapper">
                    <div class="card">
                        <video autoplay muted loop>
                            <source src="./cdn/shop/video/video4.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="product-name">Eye Black Oversized Pocket</div>
                    <div class="product-price">₹ 549

₹ 1,199</div>
                </div>

                <!-- Video Card 5 -->
                <div class="col-lg-4 col-md-6 col-sm-12 card-wrapper">
                    <div class="card">
                        <video autoplay muted loop>
                            <source src="./cdn/shop/video/video5.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="product-name">Utopia Black Oversized Graphic</div>
                    <div class="product-price">₹ 549

₹ 1,199</div>
                </div>

                <!-- Video Card 6 -->
                <div class="col-lg-4 col-md-6 col-sm-12 card-wrapper">
                    <div class="card">
                        <video autoplay muted loop>
                            <source src="./cdn/shop/video/video6.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="product-name">Doodle Lilac Oversized Back</div>
                    <div class="product-price">₹ 549

₹ 1,199 </div>
                </div>

                <!-- Video Card 7 -->
                <div class="col-lg-4 col-md-6 col-sm-12 card-wrapper">
                    <div class="card">
                        <video autoplay muted loop>
                            <source src="./cdn/shop/video/video7.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="product-name">Sour Roar Swan White Oversiz</div>
                    <div class="product-price">₹ 549

₹ 1,199</div>
                </div>

                <!-- Video Card 8 -->
                <div class="col-lg-4 col-md-6 col-sm-12 card-wrapper">
                    <div class="card">
                        <video autoplay muted loop>
                            <source src="./cdn/shop/video/video8.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="product-name"></div>
                    <div class="product-price"></div>
                </div>

                <!-- Video Card 9 -->
                <div class="col-lg-4 col-md-6 col-sm-12 card-wrapper">
                    <div class="card">
                        <video autoplay muted loop>
                            <source src="./cdn/shop/video/video9.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="product-name">Octogroove Black Oversized</div>
                    <div class="product-price">₹ 549

₹ 1,199</div>
                </div>

                <!-- Video Card 10 -->
                <div class="col-lg-4 col-md-6 col-sm-12 card-wrapper">
                    <div class="card">
                        <video autoplay muted loop>
                            <source src="./cdn/shop/video/video10.mp4" type="video/mp4">
                        </video>
                    </div>
                    <div class="product-name"></div>
                    <div class="product-price"></div>
                </div>

            </div>
        </div>
    </div>

    <!-- jQuery (Required for Slick Carousel) -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick Carousel JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

    <!-- Bootstrap JS (Optional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.card-slider').slick({
                dots: true,
                infinite: true,
                speed: 500,
                slidesToShow: 5,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                arrows: true,
                responsive: [{
                        breakpoint: 1024,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1
                        }
                    },
                    {
                        breakpoint: 480,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            arrows: false
                        }
                    }
                ]
            });
        });
    </script>

</body>

</html>