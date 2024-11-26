
 @extends('layouts.app')

@section('title', 'YOY Capital: Comprehensive Solutions for Govt. IDs, Certificates, Insurance, Investment, Taxation & Legal Services and Courier Services.') <!-- Title set kiya -->

@section('content') 
            <div class="homemain">
                <div class="slideshow-container">

                    
                    
                    <div class="mySlides fade">
                        <img src="./images/img1.png" style="width:100%;">
                        <div class="text"><a href="https://wa.me/9839193311" class="nav-link" data-page="contactform.php">Say Hi</a></div>
                    </div>
            
                    
                    <div class="mySlides fade">
                        <img src="./images/img2.png" style="width:100%;">
                        <div class="text"><a href="https://wa.me/9839193311" class="nav-link" data-page="contactform.php">Say Hi</a></div>
                    </div>
            
                    <div class="mySlides fade">
                        <img src="./images/img3.png" style="width:100%;object-fit: cover;">
                        <div class="text"><a href="https://wa.me/9839193311" class="nav-link" data-page="contactform.php">Say Hi</a></div>
                    </div>
            
                    
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    
                </div>
            </div>

              


           
                @include('homebenefits')
            
           
           @include('homemiddlecontent')

           
                   




            <!-- Review -->
            @include('homereviews')
           
           

           

           <!-- Service Providers & Parteners -->
            @include('homeparteners')
@endsection
  