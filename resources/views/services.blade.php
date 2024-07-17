
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
           <!-- Favicon -->
    <link href="images/logo.jpeg" rel="icon">
    <link rel="stylesheet" href="css/welcome.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
  <style>
        * {

        font-family: "Times New Roman", Times, serif;
    }
  </style>
    <title>Services</title>
</head>
<body>

 
    <div style="margin-bottom: 80px;">
         @include('partials.navbar')
    </div>

    <section class="container mx-auto py-8" id="Services">
        <h1 class="text-4xl font-bold text-center mb-8 gradient-text">Services</h1>
        <div class="space-y-6">
            <!-- Card 1 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col md:flex-row" >
                <img src="https://static.wixstatic.com/media/038797_2bb8cb2f2ff64ec0b8676d80855859a8~mv2.jpg/v1/fill/w_800,h_531,al_c,q_85,enc_auto/From-Idea-to-Product.jpg" alt="Service 1 Image" class="w-full md:w-1/3 object-cover custom-image">
                <div class="p-6 flex flex-col justify-between custom-content">
                    <div class="text-center">
                        <h2 class="text-xl font-bold mb-2">Product Development</h2>
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">Building the future</h3>
                        <p class="text-gray-600">Looking for a technological solution but not sure where to turn? Need help planning or executing your next project? Let us guide you. Any organization can move forward with small incremental changes, but building for the future in today’s rapidly evolving environment means taking bold chances and making insightful decisions.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="bg-white shadow-md rounded-lg overflow-hidden flex flex-col md:flex-row">
                <img src="https://static.wixstatic.com/media/038797_3caee04301304965824794a40b39d903~mv2.jpg/v1/fill/w_920,h_568,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/engineering-1024x632.jpg" alt="Service 2 Image" class="w-full md:w-1/4  custom-image">
                <div class="p-6 flex flex-col justify-between custom-content">
                    <div class="text-center">
                        <h2 class="text-xl font-bold mb-2">Engineering Consulting</h2>
                        <h3 class="text-lg font-semibold text-gray-700 mb-2">Expert Guidance</h3>
                        <p class="text-gray-600">With years of experience and high levels of education, our staff of engineers has the capabilities and expertise to take your project to the next level. At Bora Technology, we combine our insights and skills to transform your processes and strategies, and in turn, your company. We’re proud to help provide technical solutions on different projects including mining, construction, and power transmission.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Background Video Section -->
<div class="background-video-container">
    <video autoplay muted loop id="background-video">
        <source src="video/Virtual City Background Video HD.mp4" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="video-overlay">
        <h1 class="video-title">We are over a dozen engineers working across different disciplines in the Democratic Republic of Congo, Uganda and the United States</h1>
    </div>
</div>


    

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

    

  
    @include('partials.dialogbox')
    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

</body>
</html>