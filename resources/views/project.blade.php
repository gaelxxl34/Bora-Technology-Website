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
    <title>Project</title>
    <style>
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

        
    </style>
</head>
<body>

 
    <div style="margin-bottom: 60px;">
    @include('partials.navbar')
    </div>

    @include('partials.project-slider')

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
