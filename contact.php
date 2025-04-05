<?php
$page_title = 'Contact Us';
include('./include/head.php');
?>
<main class="inner-bg">
  <?php include('./include/header.php'); ?>
  <section class="inner-banner">
    <div class="container">
      <h1 class="heading fs-74">Contact <span>Us</span></h1>
    </div>
  </section>
</main>
<section class="contact-form py-150">
  <div class="container">
    <div class="row justify-content-center text-center">
      <div class="col-lg-6">
        <span class="btn des-wrapper mb-30">Get In Touch</span>
        <h2 class="heading fs-64 mb-30">CONTACT <span>FORM</span></h2>
        <p class="mb-60">
          Fill out the form below, and we’ll get back to you as soon as possible.
        </p>
      </div>
      <div class="col-lg-12">
        <div class="contact-form-container">
          <div class="row">
            <div class="col-lg-6">
              <div class="field-wrapper">
                <label for="first_name" class="label-field">FIRST NAME</label>
                <input class="input-field" type="text" name="first_name" id="first_name" placeholder="Enter Your FIRST NAME">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="field-wrapper">
                <label for="last_name" class="label-field">Last NAME</label>
                <input class="input-field" type="text" name="last_name" id="last_name" placeholder="Enter Your Last NAME">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="field-wrapper">
                <label for="email" class="label-field">Email Address</label>
                <input class="input-field" type="text" name="email" id="email" placeholder="Enter Your EMAIL">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="field-wrapper">
                <label for="phone" class="label-field">Phone Address</label>
                <input class="input-field" type="text" name="phone" id="phone" placeholder="Enter Your Phone Number">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="field-wrapper">
                <label for="company" class="label-field">Company Name</label>
                <input class="input-field" type="text" name="company" id="company" placeholder="Enter Your Company name">
              </div>
            </div>
            <div class="col-lg-4">
              <div class="field-wrapper">
                <label for="plans" class="label-field">Choose Your Gifting Plan</label>
                <select name="" id="plans" class="input-field form-select">
                  <option value="" selected>Choose Your Plan</option>
                  <option value="">Choose Your Plan</option>
                  <option value="">Choose Your Plan</option>
                </select>

              </div>
            </div>
            <div class="col-lg-4">
              <div class="field-wrapper">
                <label for="quanitity" class="label-field">Choose Your Quanitity</label>
                <select name="" id="quanitity" class="input-field form-select">
                  <option value="" selected>Estimated Quantity</option>
                  <option value="">Estimated Quantity</option>
                  <option value="">Estimated Quantity</option>
                </select>

              </div>
            </div>
            <div class="col-lg-12">
              <div class="field-wrapper">
                <label for="message" class="label-field">Additional Message</label>
                <textarea class="input-field text-area" name="message" id="message" placeholder="Message" placeholder="message"></textarea>
              </div>
            </div>
            <div class="col-lg-12">
              <button class="btn primary-btn border-0 w-100" type="submit">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-sec-2 pb-150">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="img-wrapper position-relative">
          <img src="./assets/images/contact-sec.png" alt="">
        </div>
      </div>
      <div class="col-lg-6">
        <span class="btn des-wrapper mb-20">Never Forget Showing Appreciation</span>
        <h2 class="heading fs-74 mb-30">Why <span>Contact</span>Us?</h2>
        <div class="mb-30">
          <h4 class="fs-28 mb-10 fw-600 text-primary-theme-light">Tailored Corporate Gifting Solutions</h4>
          <p>
            We create personalized gifting strategies that align with <br> your brand and budget.
          </p>
        </div>
        <div class="mb-30">
          <h4 class="fs-28 mb-10 fw-600 text-primary-theme-light">Seamless & Hassle-Free Process</h4>
          <p>
            From curation to delivery, we handle everything, so you can <br> focus on your business.
          </p>
        </div>
        <div class="mb-30">
          <h4 class="fs-28 mb-10 fw-600 text-primary-theme-light">Trusted by Leading Companies</h4>
          <p>
            Businesses rely on us for high-quality, meaningful gifts that <br> strengthen relationships.
          </p>
        </div>
        <div class="mb-30">
          <h4 class="fs-28 mb-10 fw-600 text-primary-theme-light">Dedicated Support Team</h4>
          <p>
            Our experts are here to assist you every step of the way, ensuring <br> a smooth and enjoyable experience.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="contact-sec-2 pb-150">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <span class="btn des-wrapper mb-20">Never Forget CONTACT INFORMATION</span>
        <h2 class="heading fs-74 mb-30">CONTACT <span>INFORMATION</span></h2>
        <a href="tel:(843) 998-9900" class="gap-20 mb-30 d-flex align-items-center text-white sm-circle-wrapper">
          <div class="sm-circle d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-phone"></i>
          </div>
          <span class="fs-28 fw-600 light-black ">(843) 998-9900</span>
        </a>
        <a href="mailto:corporate@neverforgetappreciation.com" class="gap-20 mb-40 d-flex align-items-center text-white sm-circle-wrapper">
          <div class="sm-circle d-flex align-items-center justify-content-center">
            <i class="fa-solid fa-envelope"></i>
          </div>
          <span class="text-black fs-28 fw-600">corporate@neverforgetappreciation.com</span>
        </a>
        <div class="mb-40">
          <span class="fw-600 fs-32 light-black">Follow Us On:</span>
        </div>
        <ul class="social-links d-flex align-items-center gap-20">
          <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
          <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
        </ul>
      </div>
      <div class="col-lg-6">
        <div class="img-wrapper position-relative">
          <img src="./assets/images/contact-info.png" alt="">
        </div>
      </div>
    </div>
  </div>
</section>