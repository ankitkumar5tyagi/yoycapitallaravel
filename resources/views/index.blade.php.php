<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="With years of experience since our establishment in 2016, YOY Capital has become a trusted name in providing a wide range of essential services. From Aadhaar, Voter Card, Driving License, PAN card, Life Insurance, General Insurance to Mutual Funds, Share Trading, Income Tax and GST services, our expert team is dedicated to ensuring that all your needs are met with precision and professionalism.">
    <meta name="keywords" content="YOY, YOY Capital, Aadhaar, PAN Card, Passport, Driving License, DL, Caste Certificate, Domicile Certificate, Marriage Certificate, CSC Center, Income Tax, ITR Return, GST, Company Registration, Voter ID Card, YOY Capital Infra, Ajay Kumar Jaiswal, Ajay Jaiswal">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="slideshow.css">
    <link rel="stylesheet" href="contactformstyle.css">
    <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet"/>
    <title>YOY Capital Infra Pvt. Ltd. Services for preparing all Govt and Legal Documents</title>
    <link rel="icon" type="image/png" href="./images/titlelogoicon.png">
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-V8ZT14LQRX"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-V8ZT14LQRX');
</script>
</head>
    <body>
        <div class="main">
            <!-- header -->
            <?php include('header.php');?>
            <?php include('responsivesidebar.php');?>
                    

            <!--dynamic pages-->
            <div id="content">
               
            </div>
            


           <!-- footer -->
            <?php include('footer.php');?>






            <!-- Whatsapp and Phone Button -->
            <div class="fixedbutton">
                <div class="whatsapp"><a href="https://wa.me/9839193311"><i class="ri-whatsapp-line"></i></a></div>
                <div class="phone"><a href="tel:9839193311"><i class="ri-phone-line"></i></a></div>
            </div>

        </div>
        
        
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script>
            $(document).ready(function() {
                // Load the default page
                loadPage('home.php'); // Load the default content
        
                // Handle link clicks
                $('.nav-link').on('click', function(e) {
                    e.preventDefault(); // Prevent the default link behavior
                    const page = $(this).data('page'); // Get the data-page attribute
                    loadPage(page); // Load the selected page
                });
        
                function loadPage(page) {
                    $('#content').load(page, function(response, status, xhr) {
                        if (status == "error") {
                            const msg = "Sorry but there was an error: ";
                            $("#content").html(msg + xhr.status + " " + xhr.statusText);
                        }else {
                            // Call the slideshow function here after the content is loaded
                            if (page === 'home.php') {// Ensure the slideshow starts if home.php is loaded
                                plusSlides(0); 
                                showreview();
                                servicerotation();
                                
                                
                                // Slide Show Automatic
                                let slideIndex = 0;
                                showSlides();
                                
                                function showSlides() {
                                  let i;
                                  let slides = document.getElementsByClassName("mySlides");
                                  for (i = 0; i < slides.length; i++) {
                                    slides[i].style.display = "none";
                                  }
                                  slideIndex++;
                                  if (slideIndex > slides.length) {slideIndex = 1}
                                  slides[slideIndex-1].style.display = "block";
                                  setTimeout(showSlides, 6000); // Change image every 2 seconds
                                }
                                
                            }
                        }
                    }); // Load the content into the main area
                }
            });
        </script>
        <script src="slideshow.js"></script>
        <script src="script.js"></script> 
        <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
        <script src="gsap.js"></script>
    </body>
</html>