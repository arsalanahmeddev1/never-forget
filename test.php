<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Employee Celebration Slider</title>
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick-theme.css" />
  <style>
    .slider-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 20px;
      background: #fcf8f2;
    }

    /* Left Side - Main Image & Description */
    .main-slide {
      width: 60%;
      display: flex;
      align-items: center;
    }

    .large-image img {
      width: 400px;
      height: auto;
      border-radius: 10px;
    }

    .description {
      margin-left: 20px;
    }

    .description h2 {
      font-size: 24px;
      color: #12263a;
    }

    .description p {
      font-size: 16px;
      color: #555;
    }

    /* Right Side - Thumbnails */
    .thumbnail-slider {
      width: 35%;
      display: flex;
      flex-direction: column;
      gap: 10px;
    }

    .thumb {
      display: flex;
      align-items: center;
      cursor: pointer;
      transition: transform 0.3s;
    }

    .thumb img {
      width: 100px;
      height: auto;
      border-radius: 5px;
    }

    .thumb:hover {
      transform: scale(1.1);
    }
  </style>
</head>

<body>
  <div class="slider-container">
    <!-- Left Side (Main Large Image + Description) -->
    <div class="main-slide">
      <div class="large-image">
        <img id="mainImage" src="image1.jpg" alt="Celebrating Employees">
      </div>
      <div class="description">
        <h2 id="title">Employee Appreciation Programs</h2>
        <p id="desc">Celebrate work anniversaries, birthdays, and milestones.</p>
      </div>
    </div>

    <!-- Right Side (Thumbnail Slider) -->
    <div class="thumbnail-slider">
      <div class="thumb" data-title="Team Bonding Event" data-desc="Strengthen teamwork with fun activities.">
        <img src="image2.jpg" alt="Team Bonding">
      </div>
      <div class="thumb" data-title="Work Anniversary" data-desc="Celebrate employee milestones with gifts.">
        <img src="image3.jpg" alt="Work Anniversary">
      </div>
      <div class="thumb" data-title="Office Party" data-desc="Host celebrations for special occasions.">
        <img src="image4.jpg" alt="Office Party">
      </div>
      <div class="thumb" data-title="Recognition Awards" data-desc="Acknowledge employee efforts with awards.">
        <img src="image5.jpg" alt="Recognition Awards">
      </div>
    </div>
  </div>

  <!-- jQuery and Slick Slider Scripts -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/slick-carousel/slick/slick.min.js"></script>

  <script>
    $(document).ready(function() {
      $('.thumbnail-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        vertical: true,
        arrows: true,
        dots: false,
      });

      $(document).on("click", ".thumb", function() {
        // Get the clicked thumbnail data
        let newImage = $(this).find("img").attr("src");
        let newTitle = $(this).attr("data-title");
        let newDesc = $(this).attr("data-desc");

        // Get the current main image data
        let currentImage = $('#mainImage').attr("src");
        let currentTitle = $('#title').text();
        let currentDesc = $('#desc').text();

        // Swap the main image and the clicked thumbnail
        $('#mainImage').attr("src", newImage);
        $('#title').text(newTitle);
        $('#desc').text(newDesc);

        // Update the clicked thumbnail with the previous main image
        $(this).find("img").attr("src", currentImage);
        $(this).attr("data-title", currentTitle);
        $(this).attr("data-desc", currentDesc);
      });
    });
  </script>
</body>

</html>