@extends('layouts.layout')
<!DOCTYPE html>
        <!-- Header-->
        <header class="header-with-image">
    <section id="home" class="d-flex">
    <div class="text-content text-center">
    <h1 class="fw-bolder main-title">Welcome to Nepal Corporate Consulting</h1>
    <p class="lead title-style">Integrated Corporate & IT Services</p>

<p class="lead description-text">Our goal is to meet your expectations and provide you the best solution. We have innovative and passionate team members dedicated to delivering quality service. We help you get your desired work efficiently. Connect with us today and move towards achieving Excellence.</p>
    <a class="btn  btn-blue" href="#services">Discover Our Services</a>
    <a class="btn  btn-blue" href="contact">Contact us</a>
</div>
 <div class="image-content">
            <img src="assets/innovation.jpg" alt="Corporate Office" class="header-image">
        </div>
    </section>

</header>
       <!-- About section-->
       <section id="about">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center align-items-center">
            <!-- Image on the Left -->
            <div class="col-lg-6">
                <img src="assets/about.jpg" alt="About Us" class="img-fluid rounded">
            </div>
            
            <!-- Text Content on the Right -->
            <div class="col-lg-6">
                <h2>About Us</h2>
                <p class="lead">
                    At Nepal Corporate House, we are dedicated to offering comprehensive solutions that span legal services, tax management, auditing, company registration, and custom software development. Our mission is to empower businesses by providing them with the expertise and tools they need to thrive in a competitive landscape.
                </p>
            </div>
        </div>
    </div>
</section>
        <!-- Services section-->
      <section id="services">   
     <section class="services-section">
    <div class="container">
        <h2>Our Services</h2>
        <div class="services-grid">
            <div class="services-category">
                <h3>Corporate Sector</h3>
                <ul>
                    <li>Incorporation of Company</li>
                    <li>Counselling Corporate Issues</li>
                    <li>Dealing with Insolvent</li>
                    <li>Liquidation Service</li>
                </ul>
            </div>
            <div class="services-category">
                <h3>Legal Sector</h3>
                <ul>
                    <li>Legal Counselling</li>
                    <li>Litigation Service</li>
                    <li>Legal Documentation</li>
                    <li>Administration</li>
                </ul>
            </div>
            <div class="services-category">
                <h3>Accounting</h3>
                <ul>
                    <li>Audit Preparation</li>
                    <li>Bookkeeping</li>
                    <li>Tax Counselling</li>
                    <li>Tax-Related Services</li>
                </ul>
            </div>
            <div class="services-category">
                <h3>Software Development</h3>
                <ul>
                    <li>Website Design</li>
                    <li>Software Design/Development</li>
                    <li>Mobile App Development</li>
                    <li>Technology Counselling</li>
                </ul>
            </div>
        </div>
    </div>
</section>
</section>

<section id="why-choose-us" class="why-choose-us">
    <div class="container">
        <h2 class="section-title text-center">Why Choose Us</h2>
        <div class="row">
            <div class="col-md-3">
                <div class="feature">
                    <h3>Expertise</h3>
                    <p>Our team comprises seasoned professionals with extensive experience in their respective fields.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature">
                    <h3>Customization</h3>
                    <p>We understand that every business is unique, and we tailor our services to meet your specific needs.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature">
                    <h3>Integrity</h3>
                    <p>We are committed to maintaining the highest standards of integrity and transparency in all our dealings.</p>
                </div>
            </div>
            <div class="col-md-3">
                <div class="feature">
                    <h3>Innovation</h3>
                    <p>We leverage the latest technologies and methodologies to deliver cutting-edge solutions.</p>
                </div>
            </div>
        </div>
    </div>
</section>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
