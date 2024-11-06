
 @extends('layouts.app') <!-- Layout ko extend kiya -->

@section('title', 'YOY Capital: Comprehensive Solutions for Govt. IDs, Certificates, Insurance, Investment, Taxation & Legal Services and Courier Services.') <!-- Title set kiya -->

@section('content') <!-- Content section -->
    <!-- Slideshow container -->
            <div class="slideshow-container">

                <!-- Full-width images with number and caption text -->
                
                <div class="mySlides fade">
                    <img src="./images/image1.jpg" style="width:100%;">
                    <div class="text"><a href="https://wa.me/9839193311" class="nav-link" data-page="contactform.php">Say Hi</a></div>
                </div>
        
                
                <div class="mySlides fade">
                    <img src="./images/img2.jpg" style="width:100%;">
                    <div class="text"><a href="https://wa.me/9839193311" class="nav-link" data-page="contactform.php">Say Hi</a></div>
                </div>
        
                <div class="mySlides fade">
                    <img src="./images/img3.jpg" style="width:100%;object-fit: cover;">
                    <div class="text"><a href="https://wa.me/9839193311" class="nav-link" data-page="contactform.php">Say Hi</a></div>
                </div>
        
                <!-- Slide Show Next and previous buttons -->
                <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                <a class="next" onclick="plusSlides(1)">&#10095;</a>
                
            </div>

                 <!-- responsive Side Bar -->
                @include('responsivesidebar')


            <!-- Benefits -->
                @include('homebenefits')
            
            <!-- middle content -->
           @include('homemiddlecontent')

           
                   




            <!-- Review -->
            @include('homereviews')
           
           

           

           <!-- Service Providers & Parteners -->
            @include('homeparteners')
@endsection
  