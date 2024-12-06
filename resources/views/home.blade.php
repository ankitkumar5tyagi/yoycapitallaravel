
@extends('layouts.app')

@section('title', 'YOY Capital: Comprehensive Solutions for Govt. IDs, Certificates, Insurance, Investment, Taxation & Legal Services and Courier Services.') <!-- Title set kiya -->

@section('content') 
            
                <div class="slideshow-container">
                    <div class="mySlides">
                        <img class="fade" src="./images/img1.png">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>Govt IDs Facilitation</h2>
                            <P>Get seamless assistance for Aadhaar, DL, PAN, Passport, Voter ID, and eShram Card services, ensuring quick and hassle-free processing!</P>
                        </div>
                    </div>
            
                    
                    <div class="mySlides">
                        <img class="fade" src="./images/img2.png">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>Documentation & Certificates</h2>
                            <p>Efficient services for Income Certificate, Caste Certificate, Domicile Certificate, Marriage Certificate, Birth Certificate, and Death Certificate, with easy processing and prompt delivery!</p>
                        </div>
                    </div>
            
                    
                    <div class="mySlides">
                        <img class="fade" src="./images/img4.png">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>GST And Income Tax Services</h2>
                            <p>Expert services for GST Registration, GST Filing, GST Amendments, ITR Filing, and TDS Refunds, ensuring compliance and timely processing for all your tax needs!</p>
                        </div>
                    </div>
                    <div class="mySlides">
                        <img class="fade" src="./images/img5.jpg">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>Stocks & Mutual Funds Investment</h2>
                            <p>Comprehensive services for Stocks, Share Trading, Mutual Funds, Demat Accounts, and Commodity & Equity investments, designed to help you make informed financial decisions and grow your wealth!</p>
                        </div>
                    </div>
                    <div class="mySlides">
                        <img class="fade" src="./images/img6.png">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>Courier & Cargo Services</h2>
                            <p>Reliable Courier and Cargo Services for fast, safe, and efficient delivery of your packages, both domestically and internationally!</p>
                        </div>
                    </div>

                    <div class="mySlides">
                        <img class="fade" src="./images/img3.png">
                        <div class="text-container">
                            <h1><b>One Place For Many Services!</b></h1>
                            <h2>Best Customer Service</h2>
                            <p>Experience the best customer service with prompt responses, personalized support, and solutions tailored to meet your needs every step of the way!</p>
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
  