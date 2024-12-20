<!DOCTYPE html>
<lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatiable" content="IE=edge">
    <meta name="Viewport" content="width=device-width, initial-scale=1.0">
    <title> Personal Portfolio</title>
</head>
<!--box icons -->
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
<!--custom css-->
<link rel="stylesheet" href="style.css">
<head>


    <header class="header">
        <a href="#" class="logo">DYNAMO MEDIA SOLUTIONS</a>
        <i class='bx bx-menu' id="menu-icon"></i>
        <nav class="navbar">
            <a href="#home" class="Active"> HOME</a>
            <a href="#about">About</a>
            <a href="#services">Services</a>
            <a href="#contact">Contact</a>
           <a href="signin.html">signin</a> 
           

        </nav>
    </header>
 <!--home section design-->
 
 <section class="home" id="home">
 <div class="home-content">
    <h3>HELLO, welcome to</h3>
    <h1><span class="highlight">DYNAMO</span> MEDIA SOLUTIONS</h1>    <!-- <h3>And I'm a <span>web Developer</span></h3>
    <P> i'm have little ecperices about the web developing</P> -->
     <div class="soical-media">
        <a href="#"><i class='bx bxl-facebook-square'></i></a>
        <a href="#"><i class='bx bxl-instagram' ></i></a>
        <a href="#"><i class='bx bxl-linkedin-square' ></i></a>
        <a href="#"><i class='bx bxl-twitter' ></i></a>
     </div>
     <!-- <a href="AAKANKSHA PATIL RESUME.pdf" class="btn">About Us </a> -->
 </div>

 <!-- <div class="home-img">
     <img src="pic1.jpg" alt="">
 </div> -->
</section>
<!--about page-->
<section class="about" id="about">
    <!-- <div class="about-img">
        <img src="pic2.jpg" alt="">
    </div> -->
    <div class="about-content">
        <h2 class="heading">About <span>Me</span></h2>
        <P>Welcome to <strong style="color: #33e4ff;">Dynamo Media Solutions</strong>, is a forward-thinking company specializing in a range of cutting-edge services to meet the digital needs of businesses worldwide. Our expertise spans across web development, cloud computing, Software-as-a-Service (SaaS) solutions, and social media management. We are dedicated to delivering innovative, scalable solutions that enhance online presence and streamline business operations. With a team of highly skilled professionals, we focus on building tailored experiences that drive growth, increase efficiency, and maximize customer engagement. At Dynamo Media Solutions, we prioritize quality, creativity, and client satisfaction, ensuring every project exceeds expectations.
           <br>At Excites Technology, I gained knowledge and hands-on experience in web development (ReactJS), Linux OS, Python and WordPress. While I acknowledge that there are areas where my skills can improve, my determination to learn and grow ensures that I am always ready to tackle new challenges and expand my expertise. </P>
    <a href="#" class="btn">Read more</a>
    </div>
</section>
<!--services section design-->
<section class="services" id="services">
<h2 class="heading">Our <span>services</span></h2>
<div class="services-container">
    <div class="services-box">
        <i class='bx bx-code-alt'></i>
        <h3> Web Developer</h3>
        <p>Build and maintain custom websites tailored to your business needs. From responsive design to seamless functionality, we ensure your site is both visually appealing and user-friendly</p>
        <a href="#" class="btn">Read more</a>
    </div>
    <div class="services-box">
        <i class='bx bxl-sketch'></i>
        <h3> Digital Marketing</h3>
        <p>Reach your target audience effectively through strategic online marketing campaigns. We offer SEO, social media marketing, and paid advertising services to enhance your online presence and drive traffic.</p>
        <a href="#" class="btn">Read more</a>
    </div>
    <div class="services-box">
        <i class='bx bxs-cloud-rain'></i>
        <h3> IT Services</h3>
        <p>Offering a wide range of IT solutions including network management, system administration, and technical support. We ensure your technology is secure, reliable, and optimized for performance.</p>
        <a href="#" class="btn">Read more</a>
    </div>
    <div class="services-box">
        <i class='bx bxs-cloud'></i> 
        <h3> SAAS Products</h3>
        <p>We create cloud-based software as a service (SaaS) products to streamline business processes. From customer management to data analytics, our solutions are designed to improve efficiency and drive innovation.</p>
        <a href="#" class="btn">Read more</a>
    </div>
</div>

</section>
<!--portfolio section design-->

<!-- <section class="portfolio" id="portfolio">
    <h2 class="heading">Latest <span>project</span></h2>
<div class="portfolio-container">
    <div class="portfolio-box">
        <img src="pic5.jpg" alt="">
        <div class="portfolio-layer">
            <h4>E-MEDZINE</h4>
            <p>I developed E-Medzine, a website designed for timely medicine delivery to customers. The platform features a chatbot that assists users in finding specific medicines and provides relevant information. Built using HTML, CSS, JavaScript, and PHP, E-Medzine ensures seamless interaction and efficient service delivery.
            </p>
            <a href="#"><i class='bx bx-link'></i>"></a>
        </div>
    </div>

    <div class="portfolio-box">
        <img src="pic3.jpg" alt="">
        <div class="portfolio-layer">
            <h4> I-Farming</h4>
            <p>I developed a website aimed at helping farmers access detailed information about farming practices. This platform provides crucial weather forecasting for specific locations, enabling farmers to make informed decisions based on accurate weather data. The website is built using HTML, CSS, PHP, and JavaScript.
            </p>
            <a href="https://aakanksha1260.github.io/i-farming/"><i class='bx bx-link-external' ></i></a>
        </div>
    </div>
</div>
</section> -->
<!-- Contact section design -->

<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Me!</span></h2>
    <form action="contact-form.php" method="POST">
        <div class="input-box">     
    <input type="text" name="firstName" placeholder="First Name" required>
    <input type="text" name="lastName" placeholder="Last Name" required>
    <input type="text" name="mobileNumber" placeholder="Mobile Number" required>
    <input type="email" name="email" placeholder="Email" required>
   <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message" required></textarea>
    <input type="submit" value="Send Message" class="btn">
    </form>
</section>

<section class="contact" id="contact">
    <h2 class="heading">Contact <span>Us!</span></h2>
    <div class="contact-info">
        <p class="address">
            <i class='bx bx-map'></i>
            BELGORIA,BELGORIA HOME ,Village;-BELGORIA Block	SANTIPUR,  Road BELEMATH, City FULIA. State:- WEST BENGAL, State, District NADIA , Pin 741402
        </p>
        <p class="email">
            <i class='bx bx-envelope'></i>
            <a href="mailto:supriasharmaa667@gmai.com">supriasharmaa667@gmai.com</a>
        </p>
        <p class="phone">
            <i class='bx bx-phone'></i>
            <a href="tel:+91 7076300979">+91 7076300979</a>
        </p>
    </div>
    
</section>

<section class="terms-conditions" id="terms-conditions">
    <h2 class="heading">Terms and Conditions</h2>
    <p><strong>Effective Date: November 18, 2024</strong></p>

    <p>These Terms and Conditions ("Terms") govern your use of the website [insert website URL] ("Site") operated by Dynamo Media Solutions ("we," "our," or "us"). By accessing or using the Site, you agree to comply with these Terms. If you do not agree to these Terms, you must not use the Site.</p>

    <h5>1. Use of the Site</h5>
    <p>You agree to use the Site only for lawful purposes and in accordance with these Terms. You must not use the Site in a way that could damage, disable, or impair the Site, or interfere with any other user's enjoyment of the Site.</p>

    <h5>2. Account Registration</h5>
    <p>Some features of the Site may require you to register an account. You agree to provide accurate, current, and complete information and to keep your account details confidential. You are responsible for all activities under your account.</p>

    <h5>3. Intellectual Property</h5>
    <p>All content on the Site, including but not limited to text, graphics, logos, and images, is the property of Dynamo Media Solutions or its licensors and is protected by copyright and trademark laws. You may not use, copy, or distribute any content from the Site without our express written permission.</p>

    <h5>4. Prohibited Activities</h5>
    <p>You agree not to:</p>
    <ul>
        <li>Use the Site for any unlawful purpose.</li>
        <li>Attempt to gain unauthorized access to the Site or its systems.</li>
        <li>Upload or transmit viruses or other harmful code.</li>
        <li>Engage in any activity that interferes with or disrupts the functionality of the Site.</li>
    </ul>

    <h5>5. Limitation of Liability</h5>
    <p>To the fullest extent permitted by law, Dynamo Media Solutions will not be liable for any direct, indirect, incidental, special, or consequential damages arising from your use of the Site. This includes, but is not limited to, damages for loss of profits, data, or other intangible losses.</p>

    <h5>6. Indemnification</h5>
    <p>You agree to indemnify and hold harmless Dynamo Media Solutions, its employees, agents, and affiliates from any claims, damages, or expenses arising from your use of the Site or violation of these Terms.</p>

    <h5>7. Termination</h5>
    <p>We reserve the right to suspend or terminate your access to the Site at our discretion, with or without cause, and with or without notice, including if we believe you have violated these Terms.</p>

    <h5>8. Changes to the Terms</h5>
    <p>We may update these Terms from time to time. Any changes will be posted on this page with an updated effective date. By continuing to use the Site after the changes are posted, you agree to the revised Terms.</p>

    <h5>9. Governing Law</h5>
    <p>These Terms shall be governed by and construed in accordance with the laws of India. Any disputes arising out of or in connection with these Terms shall be subject to the exclusive jurisdiction of the courts in Kolkata, West Bengal.</p>

    <h5>10. Contact Us</h5>
    <p>If you have any questions or concerns regarding these Terms, please contact us at:</p>
    <address>
        <strong>Dynamo Media Solutions</strong><br>
        Email: <a href="mailto:Info@dynamomediasolutions.shop">Info@dynamomediasolutions.shop</a><br>
        Phone: <a href="tel:+917076300979">+91 7076300979</a>
    </address>
</section>

<section class="privacy policy" id="privacy policy">
    <h2 class="heading">Privacy Policy</h2>

    <p><strong>Effective Date: November 18, 2024</strong></p>

    <p>Dynamo Media Solutions ("we," "our," or "us") respects your privacy and is committed to protecting the personal information you share with us. This Privacy Policy explains how we collect, use, and protect your personal information when you visit our website [insert website URL] ("Site").</p>

    <h4>1. Information We Collect</h4>
    <p>We collect two types of information:</p>
    <ul>
        <li><strong>Personal Information:</strong> This includes data that identifies you, such as your name, email address, phone number, and other information you provide when contacting us or subscribing to our services.</li>
        <li><strong>Non-Personal Information:</strong> This includes data such as browser type, device type, IP address, and usage statistics which are automatically collected when you visit our Site. This information helps us improve the user experience.</li>
    </ul>

    <h4>2. How We Use Your Information</h4>
    <ul>
        <li>To provide and improve our services.</li>
        <li>To personalize your experience on our Site.</li>
        <li>To communicate with you, respond to your inquiries, and send you updates about our products and services.</li>
        <li>To comply with legal obligations.</li>
    </ul>

    <h4>3. How We Protect Your Information</h4>
    <p>We implement industry-standard security measures, including encryption and firewalls, to safeguard your personal data. However, no method of electronic transmission or storage is 100% secure. While we strive to protect your information, we cannot guarantee absolute security.</p>

    <h4>4. Sharing Your Information</h4>
    <p>We do not sell, rent, or trade your personal information to third parties. We may share your information with trusted service providers who assist in our operations, such as payment processors and hosting providers. These third parties are obligated to use your data only to the extent necessary to perform services for us.</p>

    <h4>5. Cookies and Tracking Technologies</h4>
    <p>Our Site uses cookies and other tracking technologies to enhance user experience, analyze trends, and gather demographic information. You can control the use of cookies through your browser settings.</p>

    <h4>6. Your Rights</h4>
    <p>You have the right to:</p>
    <ul>
        <li>Access, update, or delete your personal information.</li>
        <li>Opt-out of marketing communications by following the unsubscribe instructions in the email.</li>
        <li>Request that we restrict the processing of your personal data.</li>
    </ul>

    <h4>7. Changes to this Privacy Policy</h4>
    <p>We may update this Privacy Policy from time to time. We will notify you of significant changes by posting the updated policy on our Site with an updated effective date.</p>

    <h4>8. Contact Us</h4>
    <p>If you have any questions or concerns about this Privacy Policy, please contact us at:</p>
    <address>
        <strong>Dynamo Media Solutions</strong><br>
        Email: <a href="mailto:Info@dynamomediasolutions.shop">Info@dynamomediasolutions.shop</a><br>
        Phone: <a href="tel:+917076300979">+91 7076300979</a>
    </address>
</section>
<!--footer design-->
<footer class="footer">
    <div class="footer-text">
        <P>copyright &copy; 2024 aakankshapatil366 | All Rights Reserved.</P>
    </div>
    <div class="footer-iconTop">
        <a href="#home"><i class='bx bx-up-arrow-alt'></i></a>
    </div>
</footer>

<!--scrollreveal-->

<script src="https://unpkg.com/scrollreveal"></script>

<!--custom js-->
<script src="script.js"></script>
</body>
</html>

