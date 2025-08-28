<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="Bora Technology">
    <meta property="og:description"
        content="Transforming education through immersive VR labs for schools and institutions.">
    <meta property="og:image" content="images/logo.jpeg">
    <meta property="og:url" content="https://boratechnology.org">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="Bora Technology">
    <meta name="twitter:card" content="images/lab.jpg">
    <meta name="twitter:title" content="Bora Technology">
    <meta name="twitter:description"
        content="Transforming education through immersive VR labs for schools and institutions.">
    <meta name="twitter:image" content="images/logo.jpeg">

    <!-- Favicon -->
    <link href="images/logo.jpeg" rel="icon">
    <link rel="stylesheet" href="css/welcome.css">
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.6.0/remixicon.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <title>Welcome</title>

        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {}, Tawk_LoadStart = new Date();
            (function () {
                var s1 = document.createElement("script"), s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/6696e44bbecc2fed69266c37/1i2umniqa';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->

    @stack('styles')

    <style>
        body,
        html {
            font-family: 'Times New Roman', Times, serif;
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#3b82f6',
                        secondary: '#1e40af'
                    },
                    borderRadius: {
                        'none': '0px',
                        'sm': '4px',
                        DEFAULT: '8px',
                        'md': '12px',
                        'lg': '16px',
                        'xl': '20px',
                        '2xl': '24px',
                        '3xl': '32px',
                        'full': '9999px',
                        'button': '8px'
                    }
                }
            }
        }
    </script>
</head>

<body>


    <div style="margin-bottom: 50px;">
        @include('partials.navbar')
    </div>

    @include('partials.home-content')


    @include('partials.footer')
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.js"></script>

    @stack('scripts')

</body>

</html>