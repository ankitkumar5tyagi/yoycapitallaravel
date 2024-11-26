<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="YOY Capital Infra Pvt. Ltd. offers comprehensive services including Aadhaar, PAN Card, Driving License, Passport, Income & Marriage Certificates, Insurance, Mutual Funds, Share Trading, Courier & Cargo, GST Registration & Filing, ITR Filing, and more.">
    
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slideshow.css') }}">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"rel="stylesheet"/>
    <title>@yield('title')</title>
    <link rel="icon" type="image/png" href="./images/titlelogoicon.png">
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V8ZT14LQRX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-V8ZT14LQRX');
</script>
@stack('css')
    @stack('customertablecss')


</head>
    <body>
        <div class="main">
            <!-- header -->
            @include ('header')
            @include('responsivesidebar')
                    

            <!--dynamic pages-->
            <main>
            @yield('content') <!-- Yahaan page-specific content aayega -->
            </main>
            


           <!-- footer -->
            @include('footer')






            <!-- Whatsapp and Phone Button -->
            <div class="fixedbutton">
                <div class="whatsapp"><a href="https://wa.me/9839193311"><i class="ri-whatsapp-line"></i></a></div>
                <div class="phone"><a href="tel:9839193311"><i class="ri-phone-line"></i></a></div>
            </div>

        </div>
        
    <script src="{{ asset('js/slideshow.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/ScrollTrigger.min.js" integrity="sha512-onMTRKJBKz8M1TnqqDuGBlowlH0ohFzMXYRNebz+yOcc5TQr/zAKsthzhuv0hiyUKEiQEQXEynnXCvNTOk50dg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="{{ asset('js/gsap.js') }}"></script>
    
    </body>
</html>