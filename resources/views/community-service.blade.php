<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Favicon -->
    <link href="images/logo.jpeg" rel="icon">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>Community Services</title>
    <style>
        * {
            font-family: "Times New Roman", Times, serif;
        }
        .social-icon {
            color: rgb(43, 178, 250);
            padding-right: 16px; /* Add space between icons */
        }
        .social-icon:hover {
            color: #1da1f2; /* Twitter */
        }
        .facebook-icon:hover {
            color: #3b5998;
        }
        .instagram-icon:hover {
            color: #e1306c;
        }
        .twitter-icon:hover {
            color: #1da1f2;
        }
        .title-color {
            color: rgb(43, 178, 250);
        }
        .no-gap {
            margin-right: -1px; /* Removes gap between the containers */
        }
        .rounded-top {
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
        }
        .rounded-bottom {
            border-bottom-left-radius: 10px;
            border-bottom-right-radius: 10px;
        }
        .community-section {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }
        .community-section div {
            width: 100%;
        }
        .black-container {
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: black;
            color: white;
            text-align: center;
            padding: 2rem;
            height: 100%; /* Ensure the container takes the full height */
        }
        .black-container div {
            margin: auto; /* Center the inner content */
        }
        @media (min-width: 768px) {
            .community-section {
                flex-direction: row;
            }
            .community-section div {
                width: 450px;
                height: 450px;
            }
            .rounded-left {
                border-top-left-radius: 10px;
                border-bottom-left-radius: 10px;
            }
            .rounded-right {
                border-top-right-radius: 10px;
                border-bottom-right-radius: 10px;
            }
        }
    </style>
</head>
<body>

<div style="margin-bottom: 70px;">
  @include('partials.navbar')
</div>

<!-- Community Service Section -->
<section class="bg-white dark:bg-gray-900 py-8 px-4">
    <div class="text-center mb-8">
        <h2 class="text-4xl font-extrabold title-color">Community Service</h2>
        <a href="https://malaika.org/donate/">
            <button  class="mt-8 mb-8 bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Donate</button>
        </a>
    </div>
    <div class="community-section">
        <div class="black-container no-gap rounded-top md:rounded-left">
            <div style=" height: 200px">
                <h3 class="text-xl font-bold title-color">Malaika DRC</h3>
                <p class="mt-4">
                    At Bora we believe that every child deserves a proper education to be able to follow their dreams. This is why we are proud partners of Malaika DRC. Our engineers are engaged to offer community service hours to teach students at Malaika and develop STEM programs.
                </p>
            </div>
        </div>
        <div class="no-gap rounded-bottom md:rounded-right">
            <img src="https://static.wixstatic.com/media/038797_d9e32a2530674a8991f482abc8aae3a9~mv2.jpeg/v1/fill/w_640,h_562,fp_0.50_0.58,q_80,usm_0.66_1.00_0.01,enc_auto/038797_d9e32a2530674a8991f482abc8aae3a9~mv2.jpeg" alt="Malaika DRC" class="w-full h-full object-cover rounded-bottom md:rounded-right">
        </div>
    </div>
</section>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6696e44bbecc2fed69266c37/1i2umniqa';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

@include('partials.footer')

<script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

</body>
</html>
