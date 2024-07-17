<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

    <!-- CSS -->
    <style>
        /* Google Fonts - Poppins */
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Times New Roman", Times, serif;
        }

        .main {
            height: 100vh;
            width: 100%;
        }

        .wrapper,
        .slide {
            position: relative;
            width: 100%;
            height: 100%;
        }

        .slide {
            overflow: hidden;
        }

        .slide::before {
            content: "";
            position: absolute;
            height: 100%;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 10;
        }

        .slide .image {
            height: 100%;
            width: 100%;
            object-fit: cover;
        }

        .slide .image-data {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            text-align: center;
            width: 90%;
            z-index: 100;
        }

        .image-data p.text {
            font-size: 20px;
            font-weight: 400;
            color: #fff;
            max-width: 500px;
            margin: 0 auto;
            overflow-wrap: break-word;
        }

        .image-data h2 {
            font-size: 45px;
            font-weight: 600;
            color: #ffffff;
        }

        /* swiper button css */
        .nav-btn {
            height: 50px;
            width: 50px;
            border-radius: 50%;
            background: rgba(255, 255, 255, 0.3);
        }

        .nav-btn:hover {
            background: rgba(255, 255, 255, 0.4);
        }

        .swiper-button-next {
            right: 50px;
        }

        .swiper-button-prev {
            left: 50px;
        }

        .nav-btn::before,
        .nav-btn::after {
            font-size: 25px;
            color: #fff;
        }

        .swiper-pagination-bullet {
            opacity: 1;
            height: 12px;
            width: 12px;
            background-color: #fff;
            visibility: hidden;
        }

        .swiper-pagination-bullet-active {
            border: 2px solid #fff;
            background-color: #017cff;
        }

        @media screen and (max-width: 768px) {
            .nav-btn {
                visibility: hidden;
            }

            .swiper-pagination-bullet {
                visibility: visible;
            }

            .image-data h2 {
                font-size: 30px;
            }

            .image-data p.text {
                font-size: 16px;
            }
        }
    </style>

</head>
<body>
    <section class="main swiper mySwiper">
        <div class="wrapper swiper-wrapper">
            <div class="slide swiper-slide">
                <img src="images/lab.jpg" alt="" class="image">
                <div class="image-data">
                    <h2>The Future of Education: Transforming Learning with VR Labs</h2>
                    <center>
                        <p class="text">Immerse your students in interactive learning with our state-of-the-art Virtual Reality (VR) labs. At Bora Technology, we provide complete setup and support, ensuring seamless integration of VR technology into your curriculum. Embrace the future of education and enhance your students' understanding through engaging virtual experiences.</p>
                    </center>
                </div>
            </div>
            <div class="slide swiper-slide">
                <img src="images/lab 1.jpg" alt="" class="image">
                <div class="image-data">
                    <h2>Revolutionize Education with VR Labs</h2>
                    <center>
                        <p class="text">Immerse students in interactive VR experiences for both physics and math. Engage young minds with hands-on learning and transform your classroom with our advanced VR technology.</p>
                    </center>
                </div>
            </div>
        </div>

        <div class="swiper-button-next nav-btn"></div>
        <div class="swiper-button-prev nav-btn"></div>
        <div class="swiper-pagination"></div>
    </section>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            slidesPerView: 1,
            loop: true,
            autoplay: {
                delay: 2000, // 2 seconds
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            speed: 2000 // 0.6 seconds transition speed
        });
    </script>
</body>
</html>
