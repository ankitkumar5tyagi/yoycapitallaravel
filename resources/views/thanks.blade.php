@extends('layouts.app') <!-- Layout ko extend kiya -->

@section('title', 'Example Page') <!-- Title set kiya -->

@section('content') <!-- Content section -->
    <div style="margin: auto; color:rgb(17,94,97); padding:50px; text-align:center;">
                <h1>Thank You for Contacting Us!</h1>
                <p>We will get back to you shortly.</p>
            </div>
@endsection



      
            
             







        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <li><a href="/index.html">Home</a></li>
            <li><a href="/aboutus.html">About Us</a></li>
            <li><a href="/services.html">Services</a></li>
            <li><a href="/contactus.html">Contact Us</a></li>
            
            <div class="hotline">
                <i id="hotlineicon" class="ri-phone-line"></i>
                <h4>Hotline Number <br> <span>9839193311</span></h4>
            </div>
            </div>
        </div>
        
      


         <!-- footer -->
         <div class="footer">
            <img style="width: 100%;" src="/images/footer.png" alt="">
            <div id="footer">
                <div class="footercontent">
                    <h3>YOY Capital Infra Pvt. Ltd. (OPC)</h3>
                    
                    <div id="social">
                        <a href="https://www.justdial.com/Delhi/YOY-Capital-Infra-Pvt-Ltd-Gaur-City-2/011PXX11-XX11-190724164652-A5Z5_BZDET?trkid=&term=&ncatid=10334024&area=&search=Showing%20Results%20for%20%22Yoy%20Capital%20Infra%20Pvt%20Ltd%22%20in%20Delhi&mncatname=Yoy%20Capital%20Infra%20Pvt%20Ltd&abd_btn=&abd_heading=&isFreetxt=1&bd=2&" target="_blank"><i style="font-weight:bold;"><b>jd</b></i></i></a>
                        <a href="https://www.facebook.com/yoycapitalinfra/" target="_blank"><i class="ri-facebook-box-fill"></i></a>
                        <a href="https://x.com/yoycapitalinfra" target="_blank"><i class="ri-twitter-x-fill"></i></a>
                        <a href="https://www.instagram.com/yoycapitalinfrapvt/" target="_blank"><i class="ri-instagram-fill"></i></a>
                    </div>
                </div>
                <div class="footercontent">
                    <h3>Contact Us</h3>
                    <p>Office No-123, 1st-floor, Mahagun Mart, Sector-16C, Greater Noida West, Gautam Buddha Nagar, Uttar Pradesh - 201306</p>
                    <br>
                    <p>Office No-GF99, Ground Floor, Gaur City Center, Char Murti Chowk, Greater Noida West, Gautam Buddha Nagar, Uttar Pradesh - 201306</p>
                        <br>
                    <a href="mailto:yoy2187@gmail.com"><i class="ri-mail-line"></i>mail@yoycapital.com</a><br>
                    <a href="tel:9839193311"><i class="ri-phone-line"></i>9839193311</a>
                </div>        
            </div>
        </div> 
        <div class="copyr">
                <p>copyright <i class="ri-copyright-line"></i> 2024 YOY Capital Infra Pvt Ltd (OPC). All Rights Reserved <br><span>created by: Ankit(kumar1997ankit@gmail.com)</span></p>
        </div>

    
    
        <!-- Whatsapp and Phone Button -->
        <div class="fixedbutton">
            <div class="whatsapp"><a href="https://wa.me/9839193311"><i class="ri-whatsapp-line"></i></a></div>
            <div class="phone"><a href="tel:9839193311"><i class="ri-phone-line"></i></a></div>
        </div>
    
    </div>
    <script src="responsivesidebar.js"></script> 
    
</body>
</html>