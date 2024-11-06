<?php
// homeservicescontent.php or your main PHP file

// Initialize a cURL session to fetch JSON from homeservicejson.php
$ch = curl_init();

// Set the URL for cURL session
curl_setopt($ch, CURLOPT_URL, 'http://yoycapital.com/homeservicejson.php');  // Use your actual domain

// Set the return transfer as string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Execute the cURL session
$servicesJson = curl_exec($ch);

// Close the cURL session
curl_close($ch);

// Decode the JSON response
$services = json_decode($servicesJson, true);
?>

<div class="services">
    <h1 class="ourservices">Our Services</h1>
    <p class="servicepagepara"><b>Government Document Facilitation:</b> We assist in obtaining vital documents such as Aadhaar, PAN Card, Driving License, Passport, Voter ID, Income/Caste/Domicile Certificates, Marriage Certificates, Birth/Death Certificates, and Vehicle services.<br><br>

<b>Taxation Services:</b> Our team provides comprehensive taxation support, including ITR filing, GST registration, GSTR filing, and GST amendments/cancellation.<br><br>

<b>Investment Services:</b> We offer tailored investment solutions, including mutual funds, stocks and shares, trading, and equity and commodity investments.<br><br>

<b>Insurance Services:</b> Protect what matters most with our range of insurance products, including life insurance, health insurance, motor insurance, and general insurance.<br><br>

<b>Courier & Cargo Services:</b> We handle domestic and international courier needs, ensuring safe and timely delivery of letters, parcels, and other items.<br><br></p>
    <div class="servicecontent">
        <a href="#" data-modal="modal1" onclick="openModal(this)" class="service-link">
            <article class="service">
                <img class="serviceimg" src="/images/service1passport.png" alt="Passport">
                <p class="sername">Passport</p>
            </article>
        </a>
       <!-- Modal Structure for Modal 1 -->
        <div id="modal1" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal1')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service1passport.png" alt="Passport">
                 <h2 style="margin:10px">Passport Service</h2>
                 <p>Our passport service offers a streamlined, hassle-free way to apply for and renew passports, making your travel plans easier to achieve. Whether you’re applying for the first time, renewing an expired passport, or updating your information, our team ensures a smooth process with clear instructions and dedicated support at every step. We also provide expedited services for urgent travel needs, aiming to reduce waiting times and deliver documents quickly. With a focus on convenience and customer satisfaction, our passport service makes international travel accessible, reliable, and straightforward. Let us help you start your next Passport Process stress-free!</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>PAN Card</li>
                            <li>10th Marksheet or Bank Passbook</li>
                            <li>Mobile Number & Email Id</li>
                            <li>Old Passport or Passport Lost FIR (In case of Renew or Correction of Passport)</li>
                            <li>Gazzetted Notification or News Paper Notification(In case of Name Change)</li>
                        </ol>
                    <p style="margin:10px">If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
                
        
        <a href="#" data-modal="modal2" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service2dl.png" alt="Driving License">
            <p class="sername">Driving License</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 2 -->
        <div id="modal2" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal2')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service2dl.png" alt="Driving License">
                 <h2 style="margin:10px">Driving License Service</h2>
                 <p>Our driving license service provides a comprehensive solution for individuals seeking to obtain, renew, or upgrade their driving licenses with ease and efficiency. We guide you through the entire process, from filling out applications to preparing for the required tests, ensuring you have all the necessary information and support at your fingertips. Our expert team is dedicated to helping you navigate the complexities of licensing requirements, including vision tests and driving assessments. With our streamlined service, you can enjoy a hassle-free experience, minimizing wait times and paperwork. Whether you are a first-time applicant or looking to renew your existing license, we are here to assist you every step of the way, making your journey toward driving independence smoother than ever!</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>Photo</li>
                            <li>Signature</li>
                            <li>Mobile Number & Email Id</li>
                            <li>Medical Fitness Certificate (In case of age is above 40)</li>
                            <li>Old DL or DL Lost FIR (In case of Renew or Correction)</li>
                            <li>Gazzetted Notification or News Paper Notification(In case of Name Change)</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        <a href="#" data-modal="modal3" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service3pan.png" alt="PAN Card">
            <p class="sername">PAN Card</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 3 -->
        <div id="modal3" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal3')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service3pan.png" alt="PAN Card">
                 <h2 style="margin:10px">PAN Card Service</h2>
                 <p>At YOY Capital, we offer comprehensive PAN card services to streamline the application process for individuals and businesses alike. Our expert team is dedicated to assisting you in obtaining your Permanent Account Number (PAN) efficiently and hassle-free. Whether you're applying for a new PAN, making corrections, or reprinting an existing card, we provide personalized guidance every step of the way. With our user-friendly online platform, you can easily submit your documents and track your application status in real time. Trust YOY Capital to handle your PAN card needs with professionalism and speed, ensuring you can focus on what truly matters.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>Photo</li>
                            <li>Signature</li>
                            <li>Mobile Number & Email Id</li>
                            <li>Medical Fitness Certificate (In case of age is above 40</li>
                            <li>Old DL or DL Lost FIR (In case of Renew or Correction)</li>
                            <li>Gazzetted Notification or News Paper Notification(In case of Name Change)</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        
        <a href="#" data-modal="modal4" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service4voter.png" alt="Voter Card">
            <p class="sername">Voter Card</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 4 -->
        <div id="modal4" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal4')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service4voter.png" alt="Driving License">
                 <h2 style="margin:10px">Voter Card Service</h2>
                 <p>At YOY Capital, we understand the importance of participating in democracy, which is why we proudly offer our comprehensive Voter Card Service. Whether you’re applying for a new voter card, making corrections to your existing information, or updating your address, our streamlined process makes it simple and efficient. We ensure that every eligible citizen has the opportunity to make their voice heard. With a user-friendly interface and dedicated support, we guide you through every step of the application process, from filling out forms to tracking your application status. Empower your civic engagement with YOY Capital’s Voter Card Service and take the first step towards influencing the future of your community.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>Photo</li>
                            <li>Mobile Number & Email Id</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
         
        <a href="#" data-modal="modal5" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service567certificates.png" alt="Income Certificate">
            <p class="sername">Income Certificate</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 5 -->
        <div id="modal5" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal5')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service567certificates.png" alt="Driving License">
                 <h2 style="margin:10px">Income Certificate Service</h2>
                 <p>At YOY Capital, we provide a reliable Income Certificate Service designed to help individuals and families obtain the documentation they need for various purposes, such as applying for loans, scholarships, or government benefits. Our straightforward application process ensures that you can easily submit the necessary information, while our expert team is dedicated to assisting you every step of the way. Whether you need a new income certificate or require updates to an existing one, we prioritize efficiency and accuracy to deliver your certificate in a timely manner. Trust YOY Capital to simplify your income verification needs and support your financial goals.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>Photo</li>
                            <li>Mobile Number</li>
                            <li>Rashan Card or Salary Slip or Filed ITR</li>
                            
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        
        
        <a href="#" data-modal="modal6" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service567certificates.png" alt="Caste Certificate">
            <p class="sername">Caste Certificate</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 6 -->
        <div id="modal6" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal6')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service567certificates.png" alt="Driving License">
                 <h2 style="margin:10px">Caste Certificate Service</h2>
                 <p>A caste certificate is an official document issued by the district authorities of a state, serving as proof of an individual’s caste or community. This certificate is essential for various purposes, including accessing reservations in education and employment, availing government benefits, and participating in social welfare programs. The issuance process typically involves submitting relevant documents, such as identity proof and community verification, to confirm the applicant's caste affiliation. At YOY Capital, we streamline the process of obtaining a caste certificate, providing guidance and support to ensure that all necessary documentation is prepared and submitted accurately.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>Photo</li>
                            <li>Mobile Number</li>
                            <li>Letter Head for Caste Declaration by Gram Pradhan/Parshad</li>
                            <li>Rashan Card or Family Id</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        
        <a href="#" data-modal="modal7" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service567certificates.png" alt="Domicile Certificate">
            <p class="sername">Domicile Certificate</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 7 -->
        <div id="modal7" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal7')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service567certificates.png" alt="Driving License">
                 <h2 style="margin:10px">Domicile Certificate Service</h2>
                 <p>A domicile certificate is an official document that verifies an individual’s permanent residence in a particular state or territory. Issued by the district authorities, this certificate is essential for various purposes, including applying for government jobs, educational admissions, and availing of state-specific benefits. The application process typically requires proof of residency, such as utility bills, rental agreements, or school records. At YOY Capital, we simplify the process of obtaining a domicile certificate by guiding you through each step, ensuring that all necessary documentation is accurately prepared and submitted. Our dedicated team is committed to providing efficient and reliable service, empowering you to access the rights and opportunities available in your state. Trust YOY Capital to help you secure your domicile certificate with ease and confidence.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>Photo</li>
                            <li>Mobile Number</li>
                            <li>Voter Id Card</li>
                            <li>Rashan Card/Electricity Bill (as Address Proof)</li>
                            <li>School Certificate (if applicant is student)</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div> 
        
        
        
        
        
        
        
        <a href="#" data-modal="modal8" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service8marriage.png" alt="Marriage Certificate">
            <p class="sername">Marriage Certificate</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 8 -->
        <div id="modal8" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal8')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service8marriage.png" alt="Driving License">
                 <h2 style="margin:10px">Marriage Certificate Service</h2>
                 <p>A marriage certificate is an official document that serves as legal proof of a couple’s marriage, issued by the relevant government authorities. This certificate is essential for various purposes, including changing one’s name, applying for joint loans, and availing of spousal benefits. The application process typically involves submitting required documents such as identity proofs, photographs, and proof of marriage, along with any necessary affidavits or declarations. At YOY Capital, we streamline the process of obtaining a marriage certificate, guiding you through each step to ensure all paperwork is completed accurately and efficiently. Our dedicated team is here to provide support and answer any questions, making the process as smooth as possible. Trust YOY Capital to help you secure your marriage certificate, allowing you to enjoy the benefits and recognition of your union.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card for Husband & Wife</li>
                            <li>PAN Card for Husband & Wife</li>
                            <li>Marriage Time Photo</li>
                            <li>Passport size Photo for Husband & Wife</li>
                            <li>Email Id & Mobile Number</li>
                            <li>Marriage Invitation Card</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div> 
        
        
        
        
        
        
        <a href="#" data-modal="modal9" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service9rent.png" alt="Rent Agreement">
            <p class="sername">Rent Agreement</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 9 -->
        <div id="modal9" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal9')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service9rent.png" alt="Driving License">
                 <h2 style="margin:10px">Rent Agreement Service</h2>
                 <p>A rent agreement is a crucial legal document that outlines the relationship between a landlord and a tenant. It specifies important details such as the duration of the lease, monthly rent, payment terms, and maintenance responsibilities. Having a clear rent agreement protects the rights of both parties and helps prevent disputes.
                At YOY Capital, we simplify the process of creating and managing rent agreements. Our expert team ensures that your agreement is tailored to meet your specific needs and complies with all legal requirements. Trust us to provide a smooth and efficient rental experience, safeguarding the interests of both landlords and tenants.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card for Tenent and Owner</li>
                            <li>Mobile Number for Tenent and Owner</li>
                            <li>Some Details will be confirmed on Call</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div> 
        
        
        
        
        
        
        
        <a href="#" data-modal="modal10" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service10police.png" alt="Police Verification">
            <p class="sername">Police Verification</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 10 -->
        <div id="modal10" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal10')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service10police.png" alt="Driving License">
                 <h2 style="margin:10px">Police Verification Service</h2>
                 <p>Police verification is a crucial process that involves checking an individual's background and criminal record, typically required for various applications such as job placements, visa applications, or obtaining certain licenses. This verification is conducted by local law enforcement agencies, ensuring that individuals meet safety and security standards.

                At YOY Capital, we assist you in navigating the police verification process with ease. Our experienced team guides you through the necessary steps, helping you gather and submit the required documentation efficiently. We aim to streamline the verification process, ensuring timely results while safeguarding your privacy. Trust YOY Capital to facilitate your police verification needs, enabling you to proceed confidently with your applications.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card for Employee/Tenent and Employer/House Owner </li>
                            <li>Photo of Employee/Tenent</li>
                            <li>Mobile Number</li>
                            <li>Address of Work/Residence</li>
                            
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        <a href="#" data-modal="modal11" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service11affidavit.png" alt="Affidavits & Deeds">
            <p class="sername">Affidavits & Deeds</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 11 -->
        <div id="modal11" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal11')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service11affidavit.png" alt="Driving License">
                 <h2 style="margin:10px">Affidavit & Deeds Service</h2>
                 <p>Affidavits and deeds are essential legal documents. An affidavit is a written statement confirmed by oath, used to establish facts or intentions in legal matters. In contrast, a deed is a formal document that conveys property rights from one party to another, requiring specific execution formalities to be legally binding.
                
                At YOY Capital, we assist you in drafting and executing affidavits and deeds accurately and efficiently. Our experienced team ensures that all documents meet legal requirements, helping you navigate the complexities of legal documentation with ease and confidence. Trust us to support your legal needs effectively.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Details for Affidavits/Deed</li>
                            <li>Mobile Number</li>
                            
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        
        <a href="#" data-modal="modal12" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service12birth.png" alt="Birth Certificate">
            <p class="sername">Birth Certificate</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 12 -->
        <div id="modal12" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal12')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service12birth.png" alt="Birth Certificate">
                 <h2 style="margin:10px">Birth Certificate Service</h2>
                 <p>A birth certificate is an official document that records the birth of an individual, providing vital information such as the name, date, and place of birth, as well as parentage. This document is essential for various purposes, including applying for school admissions, obtaining a passport, and accessing government services.

                At YOY Capital, we simplify the process of obtaining a birth certificate. Our dedicated team guides you through the necessary steps, ensuring that all required documents are submitted accurately and efficiently. Trust us to help you secure your birth certificate with ease, providing you with the official proof of identity you need for life's important milestones.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Cards of Parents</li>
                            <li>Hospital Birth Slip</li>
                            <li>Name of Child</li>
                            <li>Parent's Address at Time of Birth</li>
                            <li>Parent's Permanent Address</li>
                            <li>Mobile Number</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        <a href="#" data-modal="modal13" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service13death.png" alt="Death Certificate">
            <p class="sername">Death Certificate</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 13 -->
        <div id="modal13" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal13')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service13death.png" alt="Death Certificate">
                 <h2 style="margin:10px">Death Certificate Service</h2>
                 <p>A death certificate is an official document that confirms the occurrence of an individual’s death, providing essential details such as the deceased’s name, date and place of death, and cause of death. This certificate is crucial for various legal and administrative processes, including settling estates, claiming insurance benefits, and making funeral arrangements.

                At YOY Capital, we assist families in obtaining death certificates with compassion and efficiency. Our experienced team guides you through the application process, ensuring that all necessary documentation is prepared and submitted correctly. Trust us to support you during this difficult time, helping you secure the official documentation you need with care and professionalism.</p>
                    <p style="margin:10px">Document Required</p>
                         <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>Cremation Slip</li>
                            <li>Names of Parents and Spouse</li>
                            <li>Address at Time of Death</li>
                            <li>Permanent Address</li>
                            <li>Mobile Number</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        
        <a href="#" data-modal="modal14" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service14courier.png" alt="Courier & Cargo">
            <p class="sername">Courier & Cargo</p>
        </article>
        </a>
         <!-- Modal Structure for Modal 14 -->
        <div id="modal14" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal14')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service14courier.png" alt="Courier & Cargo">
                 <h2 style="margin:10px">Courier & Cargo Service</h2>
                 <p>At YOY Capital, we offer comprehensive courier and cargo services for both domestic and international shipping needs. Our reliable network ensures that your packages are delivered swiftly and securely, whether you're sending important documents within the country or shipping goods across the globe.

                We provide a range of options tailored to meet your specific requirements, including express delivery, freight forwarding, and customs clearance assistance. With our user-friendly tracking system, you can monitor your shipment every step of the way. Trust YOY Capital for efficient, cost-effective courier and cargo solutions that keep your business and personal needs moving smoothly.</p>
                <p style="margin:10px">Courier Services/Parteners</p>
                        <ul style="margin:10px">
                            <li>Domestic</li>
                            <li>International</li>
                            <li>DTDC</li>
                            <li>Trackon</li>
                            <li>Bluedart</li>
                            
                        </ul>
                </article>
            </div>
        </div>
        
        
        
        
        
        
        <a href="#" data-modal="modal15" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service15tax.png" alt="GST & Income Tax">
            <p class="sername">GST & Income Tax</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 15 -->
        <div id="modal15" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal15')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service15tax.png" alt="GST & Income Tax">
                 <h2 style="margin:10px">GST & Income Tax</h2>
                 <p>At YOY Capital, we provide expert services for both Goods and Services Tax (GST) and Income Tax to help individuals and businesses navigate the complexities of tax compliance. Our knowledgeable team assists with GST registration, filing returns, and ensuring adherence to regulations, helping you optimize your tax liabilities.

                For Income Tax, we offer comprehensive support, including tax planning, filing returns, and resolving any disputes with tax authorities. Our goal is to simplify the tax process, allowing you to focus on your core activities while ensuring that you meet all legal obligations. Trust YOY Capital to provide reliable, efficient tax solutions tailored to your unique needs.</p>
                    <p style="margin:10px">We Offer</p>
                        <ul style="margin:10px">
                            <li>GST Registration</li>
                            <li>GST Return Filling</li>
                            <li>GST Modifications/Cancellations</li>
                            <li>ITR Return Filling</li>
                            <li>TDS Refund Processing</li>
                            
                        </ul>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        
        
        <a href="#" data-modal="modal16" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service16mf.png" alt="Mutual Fund">
            <p class="sername">Mutual Fund</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 16 -->
        <div id="modal16" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal16')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service16mf.png" alt="Mutual Fund">
                 <h2 style="margin:10px">Mutual Fund</h2>
                 <p>At YOY Capital, we offer comprehensive mutual fund services designed to help you achieve your financial goals. Our expert team provides tailored advice, guiding you through the various mutual fund options available, including equity, debt, and hybrid funds. We help you understand the potential risks and returns, ensuring you make informed investment decisions.

                With our streamlined investment process, you can easily invest in a diversified portfolio that aligns with your financial objectives and risk appetite. We also provide ongoing support and performance tracking to help you stay on course with your investments. Trust YOY Capital to empower your financial journey through effective mutual fund solutions.</p>
                    <p style="margin:10px">We offer</p>
                        <ul style="margin:10px">
                            <li>SIPs</li>
                            <li>Lumpsum</li>
                            
                        </ul>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        <a href="#" data-modal="modal17" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service17stock.png" alt="Stocks & Trading">
            <p class="sername">Stocks & Trading</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 17 -->
        <div id="modal17" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal17')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service17stock.png" alt="Stocks & Trading">
                 <h2 style="margin:10px">Stocks & Trading Services</h2>
                 <p>At YOY Capital, we provide comprehensive stock and trading services to help you navigate the dynamic world of investments. Whether you’re a seasoned trader or a beginner, our expert team offers tailored advice and insights to enhance your trading strategy. We facilitate easy access to a wide range of stocks, allowing you to build a diversified portfolio that aligns with your financial goals.

                Our user-friendly trading platform provides real-time market data and analytics, enabling you to make informed decisions. With ongoing support and educational resources, we empower you to optimize your trading experience. Trust YOY Capital to be your partner in achieving your investment ambitions through effective stock and trading solutions.</p>
                    <p style="margin:10px">We facilitate</p>
                        <ul style="margin:10px">
                            <li>Stocks & Shares Investment</li>
                            <li>Trading (with various Trading Formats</li>
                        </ul>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        
        <a href="#" data-modal="modal18" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service18life.png" alt="Life Certificate">
            <p class="sername">Life Certificate</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 18 -->
        <div id="modal18" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal18')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service18life.png" alt="Life Certificate">
                 <h2 style="margin:10px">Life Certificate Services</h2>
                 <p>A life certificate is an official document used to verify that an individual is alive, often required for pensioners, beneficiaries, or those receiving social security benefits. This certificate helps prevent fraud and ensures that payments continue to be disbursed correctly.

                At YOY Capital, we streamline the process of obtaining life certificates, guiding you through the necessary steps and documentation required. Our dedicated team ensures that your application is processed efficiently, providing you with the official verification you need in a timely manner. Trust YOY Capital to assist you in securing your life certificate, ensuring that you can maintain your benefits without hassle.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>Mobile Number</li>
                            <li>PPO Number</li>
                            <li>Bank Account Details</li>
                            <li>Biometric</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        <a href="#" data-modal="modal19" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service19pension.jpg" alt="Pension">
            <p class="sername">Pension</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 19 -->
        <div id="modal19" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal19')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service19pension.jpg" alt="Pension">
                 <h2 style="margin:10px">Pension Services</h2>
                 <p>At YOY Capital, we provide comprehensive pension services to help you navigate the complexities of retirement planning and pension management. Our expert team offers guidance on various pension schemes, whether you’re looking to enroll in a new plan or manage your existing retirement savings.

                We assist with pension applications, ensuring all necessary documentation is completed accurately and submitted on time. Additionally, we offer advice on maximizing your pension benefits and understanding tax implications. Trust YOY Capital to support your journey towards a secure and comfortable retirement, empowering you to make informed decisions for your financial future.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>Photo</li>
                            <li>Income Certificate</li>
                            <li>Rashan Card / Electricity Bill</li>
                            <li>Mobile</li>
                            <li>Other Documents as per requirements</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        
        <a href="#" data-modal="modal20" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service20lifeinsurance.jpg" alt="Life Insurance">
            <p class="sername">Life Insurance</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 20 -->
        <div id="modal20" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal20')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service20lifeinsurance.jpg" alt="Life Insurance">
                 <h2 style="margin:10px">Life Insurance Services</h2>
                 <p>At YOY Capital, we offer a wide range of life insurance solutions designed to provide financial security and peace of mind for you and your loved ones. Our expert team helps you understand the various types of life insurance policies available, including term life, whole life, and universal life, allowing you to choose the coverage that best fits your needs and budget.

                We guide you through the application process, ensuring that you have all the necessary information and documentation to secure your policy efficiently. With personalized service and ongoing support, YOY Capital is committed to helping you protect your family's financial future. Trust us to provide the right life insurance solutions tailored to your unique circumstances.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Address Proof:Aadhaar or any other</li>
                            <li>Identity Proof:Aadhaar or any other</li>
                            <li>Income Proof:Salary Slip, Bank Statement, ITR etc.</li>
                            <li>Medical Reports:as per requirements</li>
                            <li>Photographs: Passport Size Photos</li>
                            
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        
    
        
        <a href="#" data-modal="modal21" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service21motorinsurance.jpg" alt="Motor Insurance">
            <p class="sername">Motor Insurance</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 21 -->
        <div id="modal21" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal21')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service21motorinsurance.jpg" alt="Motor Insurance">
                 <h2 style="margin:10px">Motor Insurance Services</h2>
                 <p>At YOY Capital, we offer comprehensive motor insurance solutions to protect you and your vehicle on the road. Our policies cover a range of needs, including third-party liability, comprehensive coverage, and personal accident protection, ensuring you have the right level of protection for your driving experience.

                Our expert team helps you navigate the various options available, providing personalized recommendations based on your specific requirements and budget. We also assist with the claims process, ensuring a smooth and efficient experience in the event of an accident. Trust YOY Capital to provide reliable motor insurance solutions that keep you secure and confident while driving.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>RC of Vehicle</li>
                            <li>Aadhaar of Owner</li>
                            <li>Previous Insurance Policy (if available)</li>
                            <li>Any Claim History (if available)</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        
        
        <a href="#" data-modal="modal22" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service22healthinsurance.jpg" alt="Health Insurance">
            <p class="sername">Health Insurance</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 22 -->
        <div id="modal22" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal22')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service22healthinsurance.jpg" alt="Health Insurance">
                 <h2 style="margin:10px">Health Insurance Services</h2>
                 <p>At YOY Capital, we provide a range of health insurance solutions designed to ensure you and your family have access to quality healthcare when you need it most. Our policies cover various medical expenses, including hospitalization, outpatient care, and preventive services, giving you peace of mind regarding your health and financial security.

                Our knowledgeable team guides you through the process of selecting the right health insurance plan tailored to your specific needs and budget. We help you understand the benefits, coverage options, and any exclusions, ensuring you make informed decisions. Trust YOY Capital to support your health and well-being with comprehensive health insurance solutions that prioritize your care and protection.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>Photo</li>
                            <li>Signature</li>
                            <li>Medical Fitness Certificate (In case of age is above 40</li>
                            <li>Old DL or DL Lost FIR (In case of Renew or Correction)</li>
                            <li>Gazzetted Notification or News Paper Notification(In case of Name Change)</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div>
        
        
        
        
        
        
        
        <a href="#" data-modal="modal23" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service23rashancard.jpg" alt="Rashan Card">
            <p class="sername">Rashan Card</p>
        </article>
        </a>
       <!-- Modal Structure for Modal 23 -->
        <div id="modal23" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal23')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service23rashancard.jpg" alt="Rashan Card">
                 <h2 style="margin:10px">Rashan Card Service</h2>
                 <p>At YOY Capital, we provide comprehensive assistance in obtaining and managing your Ration Card, an essential document for accessing subsidized food and other benefits provided by the government. A Ration Card helps ensure food security for individuals and families, allowing you to purchase essential commodities at lower prices.
                
                Our expert team guides you through the application process, ensuring you have all the necessary documents and information for a smooth experience. We also assist with updating or correcting details on your existing Ration Card. Trust YOY Capital to help you navigate the Ration Card process efficiently, empowering you to access the benefits you and your family deserve.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Cards of all Family Members</li>
                            <li>Income Certificate</li>
                            <li>Domicile Certificate</li>
                            <li>Head of Family photo and a Family Photo</li>
                            <li>Electricity Bill</li>
                            <li>Other Documents as per requirement</li>
                            
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div> 
        
        
        
        
        
        
        
        
        <a href="#" data-modal="modal24" onclick="openModal(this)" class="service-link">
        <article class="service">
            <img class="serviceimg" src="/images/service24aadhaar.jpg" alt="Aadhaar Card">
            <p class="sername">Aadhaar Card</p>
        </article>
        </a>
        <!-- Modal Structure for Modal 23 -->
        <div id="modal24" class="custom-modal">
            <div class="custom-modal-content">
                <span class="close-button" onclick="closeModal('modal24')">&times;</span>
                <article style="padding:20px">
                 <img style="float:right; width:200px; height:200px" src="/images/service24aadhaar.jpg" alt="Rashan Card">
                 <h2 style="margin:10px">Aadhaar Card Service</h2>
                 <p>At YOY Capital, we offer comprehensive services to assist you with obtaining and managing your Aadhaar, the unique identification number issued by the Government of India. Aadhaar serves as a crucial document for accessing various government services and benefits, as well as for identity verification.

                Our expert team guides you through the application process, ensuring that you have all the necessary documents and information for a smooth experience. We also provide assistance with updating your Aadhaar details, such as changes in address or personal information. Trust YOY Capital to help you navigate the Aadhaar process efficiently, empowering you with the identification you need for seamless access to services.</p>
                    <p style="margin:10px">Document Required</p>
                        <ol style="margin:10px">
                            <li>Aadhaar Card</li>
                            <li>Mobile Number</li>
                            <li>Address Proof for (for address change)</li>
                            <li>Any Govt Id Proof (for New aadhaar)</li>
                            <li>Biometric Verification is needed for New Aadhaar or Corrections other than Address</li>
                        </ol>
                    <p>If you are interested, You can simply whatsapp or email above documents to our Whatsapp number and email id.</p>
                </article>
            </div>
        </div> 
        
        
    </div>
</div>


