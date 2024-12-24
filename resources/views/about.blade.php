@extends('layouts.layout')
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/styles.css">
</head>
  <!-- About section-->

@section('content')
  <section id="about">
    <div class="container px-4">
        <div class="row gx-4 justify-content-center align-items-center">
           
            <!-- Text Content on the Right -->
            <div class="col-lg-6">
            <h2><span class="about-title">About</span> <span class="us-title">Us</span></h2>
                <p class="lead">
                    At Nepal Corporate House, we are dedicated to offering comprehensive solutions that span legal services, tax management, auditing, company registration, and custom software development. Our mission is to empower businesses by providing them with the expertise and tools they need to thrive in a competitive landscape.
                </p>
            </div>
             <!-- Image on the Left -->
             <div class="col-lg-6">
                <img src="assets/about.jpg" alt="About Us" class="img-fluid rounded">
            </div>
            
        </div>
    </div>

    <div class="container px-4">
        <div class="row gx-4 justify-content-center align-items-center">
           
            <!-- Image on the left -->
            <div class="col-lg-6">
                <img src="assets/mission.png" alt="About Us" class="img-fluid rounded">
            </div>

         <!-- Text Content on the right -->
         <div class="col-lg-6">
            <h2><span class="our-title">Our</span> <span class="mission-title">Mission</span></h2>
                <p class="lead">
                To empower businesses in Nepal with comprehensive corporate solutions and cutting-edge IT services that streamline operations, foster innovation, and drive sustainable growth. We aim to provide unparalleled expertise and personalized support, enabling our clients to achieve their goals efficiently and effectively in a competitive marketplace.
            </div>
        </div>
     <div class="row gx-4 justify-content-end"> <!-- Changed justify-content-center to justify-content-start -->
        <!-- Text Content -->
        <div class="col-lg-6 text-start"> <!-- Added text-start to align content to the left -->
            <h2><span class="our-title">Our</span> <span class="vision-title">Vision</span></h2>
            <p class="lead">
                To be the most trusted and innovative partner for corporate and IT solutions in Nepal, fostering a thriving ecosystem where businesses of all sizes can leverage technology and professional services to reach new heights. By prioritizing quality, reliability, and customer satisfaction, we envision becoming a catalyst for business transformation and digital advancement in Nepal.
            </p>
        </div>
    </div>
</div>
</div>
</section>