
 @extends('layouts.app')

@section('title', 'YOY Capital: Comprehensive Solutions for Govt. IDs, Certificates, Insurance, Investment, Taxation & Legal Services and Courier Services.') <!-- Title set kiya -->

@section('content') 
            
                <div class="slideshow-container">
                    <div class="mySlides">
                        <img class="fade" src="./images/img1.png">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>Govt IDs Facilitation</h2>
                        </div>
                    </div>
            
                    
                    <div class="mySlides">
                        <img class="fade" src="./images/img2.png">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>Documentation & Certificates</h2>
                        </div>
                    </div>
            
                    
                    <div class="mySlides">
                        <img class="fade" src="./images/img4.png">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>GST And Income Tax Services</h2>
                        </div>
                    </div>
                    <div class="mySlides">
                        <img class="fade" src="./images/img5.jpg">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>Stocks & Mutual Fuds Investment</h2>
                        </div>
                    </div>
                    <div class="mySlides">
                        <img class="fade" src="./images/img6.png">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>Courier & Cargo Services</h2>
                        </div>
                    </div>

                    <div class="mySlides">
                        <img class="fade" src="./images/img3.png">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>Best Customer Service</h2>
                        </div>
                    </div>
            
                    
                    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                    <a class="next" onclick="plusSlides(1)">&#10095;</a>
                    
                </div>
           

              


           
                @include('homebenefits')
            
           
           @include('homemiddlecontent')

           
                   




            <!-- Review -->
            @include('homereviews')
           
           

           

           <!-- Service Providers & Parteners -->
            @include('homeparteners')
@endsection
  