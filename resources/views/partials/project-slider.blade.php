<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com  -->
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    
    <!-- Link Swiper's CSS -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />

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
        display: flex;
        align-items: center;
        justify-content: center;
        padding: 0 60px; /* Adjust this padding to create space for the nav buttons */
      }

      .slide::before {
        content: "";
        position: absolute;
        height: 100%;
        width: 100%;
        background-color: rgba(0, 0, 0, 0.4);
        z-index: 10;
      }

      .slide .image-container {
        flex: 1;
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 100;
        max-width: 50%; /* Ensure the image container does not exceed half of the slide width */
      }

      .slide .image-container img {
        width: 100%;
        height: auto;
        max-width: 400px; /* Set the fixed width of the images */
        max-height: 400px; /* Set the fixed height of the images */
      }

      .slide .image-container video {
        width: 100%;
        height: auto;
        max-width: 400px; /* Set the fixed width of the videos */
        max-height: 400px; /* Set the fixed height of the videos */
      }

      .slide .content-container {
        flex: 1;
        color: white;
        z-index: 100;
        padding: 15px;
        max-width: 50%; /* Ensure the content container does not exceed half of the slide width */
      }

      .content-container h2 {
        font-size: 45px;
        font-weight: 600;
        margin-bottom: 10px;
      }

      .content-container p {
        font-size: 20px;
        font-weight: 400;
        max-width: 520px;
        overflow-wrap: break-word;
        margin-bottom: 15px;
      }

      .content-container .button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        font-size: 16px;
      }

      .content-container .button:hover {
        background-color: #0056b3;
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
        right: 10px; /* Adjust the position as needed */
      }

      .swiper-button-prev {
        left: 10px; /* Adjust the position as needed */
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
        .content-container h2 {
          font-size: 25px;
        }
        .content-container p {
          font-size: 16px;
        }
        .content-container .button {
          font-size: 14px;
          padding: 8px 16px;
        }
        .slide {
          flex-direction: column;
          padding: 0 10px; /* Adjust the padding for smaller screens */
        }
        .slide .image-container, .slide .content-container {
          flex: none;
          width: 100%;
          text-align: center;
          max-width: 100%; /* Ensure full width on smaller screens */
        }
    
      }
    </style>
  </head>
  <body>
    <section class="main swiper mySwiper">
      <div class="wrapper swiper-wrapper">
        <!-- Physic lab -->
        <div class="slide swiper-slide" style=" background-image: url(images/wave.jpg);">
            <div class="image-container">
                <video autoplay muted loop width="100%" height="auto">
                    <source src="video/phys lab short.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

          <div class="content-container">
            <h2>Vr Phyisc Lab and Museum</h2>
            <p>The VR Physics Lab project provides an immersive space for conducting physics experiments and includes a museum showcasing historical scientific instruments. This combination enhances learning through interactive simulations and historical context.</p>
            <a href="#" class="button">Learn More</a>
          </div>
        </div>
          <!-- Math lab -->
        <div class="slide swiper-slide" style=" background-image: url(images/tech.jpg);">
            <div class="image-container">
                <video autoplay muted loop width="100%" height="auto">
                    <source src="video/MathLab vr short.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>

          <div class="content-container">
            <h2>Vr MathLab</h2>
            <p>The Math Lab features a variety of educational games designed to make learning math fun and engaging. Students can play interactive games while enhancing their math skills and track their progress and marks in real-time. This innovative approach helps to motivate and improve student performance in mathematics.</p>
            <a href="#" class="button">Learn More</a>
          </div>
        </div>
        <div class="slide swiper-slide" style=" background-image: url(images/tech.jpg);">
          <div class="image-container" >
            <img src="images/handwashing.jpeg" alt="Handwashing Station" />
          </div>
          <div class="content-container">
            <h2>Automated Handwashing Stations</h2>
            <p>Developing handwashing posts to fight the spread of COVID-19 within the Congolese community and improve hygienic conditions in schools, hospitals, and other public areas.</p>
            <a href="#" class="button">Learn More</a>
          </div>
        </div>
        <div class="slide swiper-slide" style=" background-image: url(images/wave.jpg);">
          <div class="image-container">
            <img src="images/Ventilator.jpeg" alt="Another Image" />
          </div>
          <div class="content-container">
            <h2>Medical Ventilators</h2>
            <p>3D printed medical ventilators to support the fight against corona virus in the Congo.</p>
            <a href="https://www.gofundme.com/f/mechanical-ventilators-for-congo?utm_source=customer&utm_medium=copy_link&utm_campaign=p_cf+share-flow-1" class="button">Donate</a>
          </div>
        </div>
        <!-- Add more slides as needed -->
         <div class="slide swiper-slide" style=" background-image: url(images/tech.jpg);">
          <div class="image-container" >
            <img src="images/bottle.jpeg" alt="Handwashing Station" />
          </div>
          <div class="content-container">
            <h2>Bora Refrigerating Bottle</h2>
            <p>Smart refrigeration technology</p>
            <a href="https://www.youtube.com/watch?v=n67FjwxqIPk" class="button">Learn More</a>
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
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });
    </script>
  </body>
</html>
