  <!DOCTYPE html>
  <html>
  <head>
    <title>Airbnb</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  </head>
  <style>
      body {
      font-family: Arial, sans-serif;

      margin: 0;
      padding: 0;
    }
    .product {
      max-width: 80%;
      margin: 0 auto;
      padding: 20px;
    }
    .star-rating {
      display: flex;
      justify-content: flex-start;
    }

    .star-rating input[type="radio"] {
      display: none;
    }

    .star-rating label {
      font-size: 30px;
      color: #ccc;
      cursor: pointer;
      transition: color 0.3s;
    }

    .star-rating input[type="radio"]:checked + label,
    .star-rating input[type="radio"]:checked + label ~ label {
      color: gold;
    }
    .main-product-image {
      width: 45%;
      height: 600px;
      border-radius: 8px;
    }

    .product-images {
      display: flex;
      flex-wrap: wrap;

    }

    .carousel {
      flex-basis: 50%;
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      margin-left: 5px;

    }

    .product-image {
      width: calc(50% - 3px);
      height: 196px;
      margin-bottom: 5px;
      border-radius: 8px;
    }
    .carousel .product-image:last-child {
      flex-basis: 100%;
      width: 100%;
    }
    .product-info {
      flex-basis: 50%;
      text-align:left;
      margin: auto;
      margin-top: 20px;
      padding-left: 20px;
      width: 80%;
    }
    .second-nav {

  }

  .second-nav ul {
    list-style-type: none;
    display: flex;
    justify-content: center;
  }

  .second-nav ul li {
    margin-right: 20px;
  }

  .second-nav ul li a {
    color: #333;
    text-decoration: none;
    font-size: 14px;
    padding: 5px;
    border-radius: 4px;
    transition: background-color 0.3s ease;
    display: flex;
    flex-direction: column;
    align-items: center;
  }

  .second-nav ul li a i {
    font-size: 20px;
    margin-bottom: 5px;
  }

  header {
      background-color: #fff;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      display: flex;
      justify-content: space-between;
      align-items: center;
    }
  .second-nav ul li a:hover {
    background-color: #f2f2f2;
  }
    .product-title {
      font-size: 24px;
      margin-bottom: 10px;
    }

    .product-location {
      font-size: 16px;
      color: #888;
      margin-bottom: 10px;
    }

    .product-description {
      margin-bottom: 10px;
    }

    .product-description p {
      font-size: 20px;
      margin-bottom: 0;
    }

    .product-features {
      display: flex;
      flex-wrap: wrap;
      margin-bottom: 10px;
    }

    .feature {
      font-size: 14px;
      color: #888;
      margin-right: 10px;
    }

    .product-price {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }
    /* lessor and booking */
    .info{
      display: flex;
      width: 80%;
      margin: auto;
      margin-top: 50px;

    }
    .lessor {
      width: 55%;
      background-color: #fff;
      border-radius: 8px;
      padding: 20px;
      margin-bottom: 20px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      margin-right: 20px;
    }
    .lessor-info {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 20px;
    }

    .lessor-profile {
      width: 60px;
      height: 60px;
      overflow: hidden;
      border-radius: 50%;
    }

    .lessor-profile img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .lessor-details {
      flex-grow: 1;
    }
    .lessor-info h3 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .lessor-info p {
      color: #777;
      font-size: 14px;
      margin-bottom: 10px;
      margin-top: 30px;
    }

    .lessor-description p {
      margin-bottom: 10px;
    }

    .lessor-ratings .rating-item {
      margin-bottom: 10px;
    }

    .lessor-ratings h4 {
      font-size: 16px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .lessor-ratings p {
      color: #777;
      font-size: 14px;
      margin-bottom: 5px;
    }

    .booking{
      width: 36%;
    }
    .booking-section {
      background-color: #f9f9f9;
      padding: 20px;
      width: 100%;
      margin: auto;
      margin-top: 10px;
      margin-bottom: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    .booking-form {
      margin-bottom: 20px;
    }

    .booking-form h2 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #ff5a5f;
    }

    .booking-form form {
      flex-wrap: wrap;
    }

    .booking-form .form-group {
      flex-basis: 50%;
      margin-bottom: 20px;
    }

    .booking-form label {
      font-weight: bold;
      display: block;
      margin-bottom: 5px;
    }

    .booking-form input[type="date"],
    .booking-form select {
      width: 70%;
      padding: 10px;
      font-size: 20px;
      border-radius: 4px;
      border: 1px solid #ddd;
    }

    .booking-form button[type="submit"] {
      display: block;
      background-color: #ff5a5f;
      color: #fff;
      border: none;
      font-size: 16px;
      width: 100px;
      height: 50px;
      border-radius: 4px;
      cursor: pointer;
    }

    .total-price {
      font-size: 20px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .price-breakdown {
      font-size: 14px;
      color: #777;
      cursor: pointer;
    }

    .price-breakdown::before {
      content: "+";
      margin-right: 5px;
    }
    /* what the place offer */
    .place-offers {
      margin-top: 40px;
      width: 80%;
      margin: auto;
      background-color: white;
      border-radius:8px ;
    }

    .place-offers h2 {
      font-size: 24px;
      font-weight: bold;
      margin: 20px;
      padding: 20px;
    }

    .offer-list {
      list-style: none;
      padding: 0;
      margin: 0;
      display: flex;
      flex-wrap: wrap;
      margin: 20px;
      padding: 20px;
    }

    .offer-list li {
      width: 50%;
      display: flex;
      align-items: center;
      font-size: 16px;
      margin-bottom: 10px;
    }

    .offer-list li i {
      margin-right: 10px;
      color: #ff385c;
      font-size: 18px;
    }
    /* reviews and comment */
    .rating-section {
      width: 80%;
      margin: auto;
      background-color: white;
      margin-bottom: 30px;
      padding-bottom: 30px;
    }

    .rating-info {
      margin-bottom: 10px;
      margin-top: 40px;
    }

    .rating-info h2 {
      font-size: 24px;
      font-weight: bold;
      padding-top: 20px;
      padding-left: 60px;

    }

    .rating-info p {
      font-size: 14px;
      color: #636363;
      padding-top: 20px;
      padding-left: 60px;
    }

    .rating-breakdown {
      display: flex;
      flex-wrap: wrap;
    }

    .rating-item {
      flex-basis: 40%;
      margin-bottom: 20px;
      padding-left: 70px;
    }

    .rating-item h3 {
      font-size: 18px;
      font-weight: bold;
    }

    .rating-bar {
      width: 100%;
      height: 10px;
      background-color: #e0e0e0;
      border-radius: 5px;
      overflow: hidden;
    }

    .rating-fill {
      height: 100%;
      background-color: #ff385c;
    }

    .rating-item span {
      font-size: 16px;
      color: #636363;
      margin-top: 5px;
    }

    .comment-section {
      margin-top: 40px;
      display: flex;
      flex-wrap: wrap;
      padding-left: 60px;

    }

    .comment-h2 {
      font-size: 24px;
      font-weight: bold;
      margin-top: 40px;
      margin-bottom: 20px;
      padding-left: 60px;

    }

    .comment {
      margin-bottom: 30px;
      width: 40%;
      margin-right: 40px;

    }

    .comment-header {
      display: flex;
      align-items: center;
      margin-bottom: 10px;
    }

    .comment-avatar {
      width: 40px;
      height: 40px;
      border-radius: 50%;
      margin-right: 10px;
      overflow: hidden;
    }

    .comment-avatar img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }


    .comment-info h3 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 5px;
    }

    .comment-info p {
      font-size: 14px;
      color: #888888;
    }

    .comment p {
      margin: 0;
    }

    .view-more {
      font-size: 16px;
      color: #ff385c;
      text-decoration: none;
      display: inline-block;
      margin-top: 20px;
      padding-left: 60px;
    }
    .add-comment {
      margin-top: 50px;
      padding-left: 60px;
    }

    .add-comment h3 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
    }

    .comment-form {
      display: flex;
      align-items: center;
    }

    .comment-input textarea {
      width: 100%;
      height: 40px;
      padding: 10px;
      font-size: 14px;
      border: 1px solid #ccc;
      border-radius: 4px;
      resize: vertical;
    }

    .comment-input button {
      background-color: #ff5a5f;
      color: #fff;
      border: none;
      padding: 10px 20px;
      font-size: 14px;
      font-weight: bold;
      border-radius: 4px;
      cursor: pointer;
    }
    /* location */
    .location-section {
      margin-top: 40px;
      width: 80%;
      margin: auto;
      background-color: white;
      margin-bottom: 30px;
      padding-bottom: 30px;
    }

    .location-section h2 {
      font-size: 24px;
      font-weight: bold;
      margin-bottom: 20px;
      padding-top: 20px;
      padding-left: 60px;
    }

    .location-map {
      position: relative;
      width: 100%;
      height: 400px;
    }

    .location-map iframe {
      width: 100%;
      height: 100%;
    }

    .location-address {
      margin-top: 20px;
      padding-left: 60px;
    }

    .location-address h3 {
      font-size: 18px;
      font-weight: bold;
      margin-bottom: 10px;
      padding-left: 60px;
    }

    .location-address p {
      color: #777;
      font-size: 16px;
      line-height: 1.5;
    }


    /* footer */
    .footer {
      background-color: #f8f8f8;
      padding: 20px 0;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .footer-links ul,
    .footer-social ul {
      list-style: none;
      padding: 0;
      margin: 0;
    }
    .filter-dropdown {
      position: relative;
    }
    
    .filter-toggle {
      font-size: 16px;
      color: rgb(151,30,185);
      background-color: transparent;
      border: none;
      padding: 0;
      cursor: pointer;
      transition: color 0.3s ease;
    }
    
    .filter-toggle:hover {
      color: rgb(151,30,185);
    }
    
    .filter-options {
      position: absolute;
      top: 100%;
      left: 0;
      background-color: rgb(151,30,185);
      border-radius: 4px;
      padding: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
      display: none;
      z-index: 1;
    }
    
    .filter-option {
      cursor: pointer;
      margin-bottom: 4px;
      color: rgb(151,30,185);
      transition: color 0.3s ease;
    }
    
    .filter-option:hover {
      color: #f53d43;
    }
    
    .sub-options {
      margin-top: 4px;
      list-style-type: none;
      padding-left: 16px;
      display: none;
    }
    
    .sub-options li {
      cursor: pointer;
      transition: color 0.3s ease;
    }
    
    .sub-options li:hover {
      color: #f53d43;
    }
    
    .search-button {
      font-size: 16px;
      color: #fff;
      background-color: rgb(151,30,185);
      border: none;
      border-radius: 24px;
      padding: 10px 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-left: 8px;
    }
    
    .search-button:hover {
      background-color: #f53d43;
    }
    
    .search-bar i {
      margin-right: 4px;
    }
    
    .filter-label {
      cursor: pointer;
      margin-bottom: 4px;
      color: #333;
      transition: color 0.3s ease;
    }
    
    .filter-label:hover {
      color: #f53d43;
    }
    
    .tooltips {
      position: absolute;
      top: 100%;
      left: 0;
      display: none;
      z-index: 1;
    }
    
    .tooltip {
      background-color: #f2f2f2;
      color: #333;
      padding: 6px 10px;
      border-radius: 4px;
      font-size: 12px;
      position: absolute;
      top: 0;
      left: 0;
      margin-top: 4px;
      opacity: 0;
      visibility: hidden;
      transition: opacity 0.3s ease, visibility 0.3s ease;
    }
    
    .filter-option :hover .tooltip {
      opacity: 1;
      visibility: visible;
    }
    
    .filter-options.show {
      display: block;
    }
    
    .sub-options.show {
      display: block;
    }
    

    .footer-links li,
    .footer-social li {
      display: inline-block;
      margin-right: 20px;
    }

    .footer-links a,
    .footer-social a {
      color: #666;
      text-decoration: none;
      font-size: 14px;
    }

    .footer-logo .logo {
      max-width: 100px;
    }

    .footer-social i {
      font-size: 20px;
    }

    .footer-social i:hover {
      color: #ff5a5f;
    }
    /* media query */

  @media (max-width: 768px) {
    /* Styles for screens up to 768px wide */
    .product {
      max-width: 90%; /* Decrease the max-width for smaller screens */
    }

    .main-product-image {
      width: 100%; /* Expand the main product image to full width */
      height: auto; /* Auto height to maintain aspect ratio */
    }

    .product-info {
      flex-basis: 100%; /* Make the product info section full width */
      width: 100%; /* Override the width to fit the container */
      padding-left: 0; /* Remove left padding */
    }

    .lessor,
    .booking {
      width: 100%; /* Make the lessor and booking sections full width */
    }

    .offer-list li {
      width: 100%; /* Make the offer list items full width */
    }

    .comment {
      width: 100%; /* Make the comment sections full width */
      margin-right: 0; /* Remove right margin */
    }

    .location-section,
    .rating-section {
      width: 100%; /* Make the location and rating sections full width */
    }

    .footer-links,
    .footer-social {
      text-align: center; /* Center align the footer links and social icons */
      margin-bottom: 20px; /* Add bottom margin for better spacing */
    }
  }

  @media (max-width: 480px) {
    /* Styles for screens up to 480px wide */
    .product {
      padding: 10px; /* Reduce padding for smaller screens */
    }

    .product-info {
      padding-left: 10px; /* Reduce left padding for smaller screens */
    }

    .offer-list li {
      width: 100%; /* Make the offer list items full width */
    }

    .comment {
      width: 100%; /* Make the comment sections full width */
      margin-right: 0; /* Remove right margin */
    }

    .footer {
      padding: 10px 0; /* Reduce padding for the footer */
    }

    .footer-links,
    .footer-social {
      display: block; /* Display footer links and social icons as block elements */
      text-align: center; /* Center align the footer links and social icons */
      margin-bottom: 10px; /* Add bottom margin for better spacing */
    }

    .footer-social li {
      margin-right: 10px; /* Reduce the right margin for social icons */
    }
  }
  

  </style>
  <body>
    <header>
      <h1 class="logo" style="color:rgb(151,30,185);">Airbnb</h1>
      <div class="search-bar">
      
      <div class="filter-dropdown">
    
      <button class="search-button"><i class="fas fa-user"></i> Search</button>
    </div>
    </header>

    <div class="product-info">
      <h2 class="product-title">{{$house->house_name}}</h2>
      <p class="product-location">{{$house->location}}</p>
    </div>
    <div class="product">
      <div class="product-images" >
      @php
      $imageNames = explode(',', $house->image2);
      @endphp
        <img src="{{ asset($house->image1) }}" alt="Product Image" class="main-product-image">
        <div class="carousel">
        @foreach ($imageNames as $imageName)
          <img src="{{ asset('houseimage/' . $imageName) }}" alt="Product Image" class="product-image">
        @endforeach
        </div>
      </div>
    </div>
      <div class="product-info">
        <div class="product-description">
          <p>{{$house->description}}</p>
        </div>
        <div class="product-features">
          <p class="feature">Bedrooms:{{$house->number_bedroom}} </p>
          <p class="feature">Bathrooms:{{$house->number_bathroom}} </p>
          <p class="feature">bed:{{$house->number_bed}}  </p>
          <p class="feature">range pepole:{{$house->number_person}} </p>
        </div>
        <div class="product-price">$250 per night</div>
      </div>
    </div>

    <!-- booking section -->
    <div class="info">
      <div class="lessor">
          <div class="lessor-info">
              <div class="lessor-details">
                <h3>{{ $lessonData->user_name }}</h3>

              </div>
              <div class="lessor-profile">
                <img src="{{ $lessonData->image }}" alt="Lessor Profile">
              </div>
            </div>

          <div class="lessor-details">
            <div class="lessor-description">
              <p>A brand new modern villa right on the sea front overlooking the Red Sea with a private pool. Completely furnished and decorated with a luxury feel and details.</p>
              <p>Located inside the SomaBay Private Gated Community, home of five luxury resort hotels, two golf courses (18 holes and 9 holes), an award-winning Thalasso Spa, a professional diving center, a signature portfolio of residential properties, and much more.</p>
            </div>
            <div class="lessor-ratings">
              <div class="rating-item">
                <h4><i class="fa-solid fa-people-roof" style="color: #000000;"></i> {{$house->extra_service }}</h4>
                <p>100% of families who stayed here recently rated it 5 stars.</p>
              </div>
              <div class="rating-item">
                <h4><i class="fa-solid fa-key" style="color: #090c11;"></i> {{$house->service }}</h4>
                <p>100% of recent guests gave the check-in process a 5-star rating.</p>
              </div>
              <div class="rating-item">
                <h4><i class="fa-solid fa-water-ladder" style="color: #06090f;"></i> {{$house->description }}</h4>
                <p>This is one of the few places in the area with a pool.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="booking">
    <section class="booking-section">
      <div class="booking-form">
        <h2>Book Now</h2>
        <form id="booking-form" action="{{ route('booking.store') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="check-in-date">Check-in Date:</label>
            <input type="date" id="check-in-date" name="check-in-date" required>
          </div>
          <div class="form-group">
            <label for="check-out-date">Check-out Date:</label>
            <input type="date" id="check-out-date" name="check-out-date" required>
          </div>
          <!-- Other form fields -->

          <button type="button" id="open-payment-modal">Book Now</button>
        </form>
      </div>
      <!-- <span>Total Price: <span id="total-price" style="display: none;">JD2,736</span> </span> -->
    </section>
  </div>

  <!-- Payment Modal -->



    <script>
      var bookedDates = @json($bookedDates);
      var dayNumbers = [];

  for (var date in bookedDates) {
      if (bookedDates.hasOwnProperty(date)) {
          var startDay = new Date(date).getDate();
          var endDay = new Date(bookedDates[date]).getDate();

          dayNumbers.push(startDay);

          if (startDay !== endDay) {
              dayNumbers.push(endDay);
          }
      }
  }
      var checkInDate = document.getElementById('check-in-date');
      var checkOutDate = document.getElementById('check-out-date');
      console.log(bookedDates);
      checkInDate.addEventListener('change', function() {
          var minCheckOutDate = new Date(checkInDate.value);
          minCheckOutDate.setDate(minCheckOutDate.getDate() + 1);
          checkOutDate.min = minCheckOutDate.toISOString().slice(0, 10);

          // Disable booked dates in check-out date picker
          checkOutDate.disabled = false;
          for (var date in bookedDates) {
              if (bookedDates.hasOwnProperty(date)) {
                  if (new Date(date) >= minCheckOutDate) {
                      checkOutDate.disabled = true;
                      alert('The day you select is unavailable: ' + dayNumbers[1] + ' to ' + dayNumbers[0]);

                      break;
                  }
              }
          }
      });
  </script>




  <!-- what the place offer -->
  <div style="display:flex;width:80%; margin:auto;">
  <section class="place-offers">
      <h2>What this place service</h2>
      <ul class="offer-list">
      @php
      $services = explode(',', $house->service);
  @endphp

  @foreach ($services as $index => $service)
      @php
          ${"service" . ($index + 1)} = $service;
          $icon = '';

          // Determine the icon based on the service
          switch ($service) {
              case 'Public or shared beach access – Beachfront':
                  $icon = 'fas fa-utensils';
                  break;
              case 'Other Service 1':
                  $icon = 'fas fa-utensils';
                  break;
              // Add more cases for each service
              // ...
          }
      @endphp

      <li>
      <i class="fas fa-exclamation-triangle"></i>
          {{ $service }}
      </li>
  @endforeach
    </section>

    <section class="place-offers">
      <h2>What this place description</h2>
      <ul class="offer-list">
      @php
      $descriptions = explode(',', $house->description);
  @endphp

  @foreach ($descriptions as $index => $description)
      @php
          ${"description" . ($index + 1)} = $description;
          $icon = '';

          // Determine the icon based on the service
          switch ($description) {
              case 'Public or shared beach access – Beachfront':
                  $icon = 'fas fa-utensils';
                  break;
              case 'Other Service 1':
                  $icon = 'fas fa-utensils';
                  break;
              // Add more cases for each service
              // ...
          }
      @endphp

      <li>
      <i class="fas fa-exclamation-triangle"></i>
          {{ $description }}
      </li>
  @endforeach
    </section>

  </div>

    <section class="place-offers">
      <h2>What this place extra services</h2>
      <ul class="offer-list">
      @php
      $extra_services = explode(',', $house->extra_service);
  @endphp

  @foreach ($extra_services as $index => $extra_service)
      @php
          ${"extra_service" . ($index + 1)} = $extra_service;
          $icon = '';

          // Determine the icon based on the service
          switch ($extra_service) {
              case 'Public or shared beach access – Beachfront':
                  $icon = 'fas fa-utensils';
                  break;
              case 'Other Service 1':
                  $icon = 'fas fa-utensils';
                  break;
              // Add more cases for each service
              // ...
          }
      @endphp

      <li>
      <i class="fas fa-exclamation-triangle"></i>
          {{ $extra_service }}
      </li>
  @endforeach
    </section>

      <!-- comment -->
    
      <section class="place-offers ">
      <h2 class="comment-h2">Guest Reviews</h2>
      <div class="comment-section">
      @foreach($comments as $comment)
          <div class="comment">
            <div class="comment-header">
              <div class="comment-avatar">
                  <img src="path/to/meera-profile-pic.jpg" alt="Meera's Profile Pic">
                </div>
              <div class="comment-info">
                <h3>mohamed</h3>
                <p>{{$comment->created_at}}</p>
                @if ($comment->star == 5)
                <img src="../rating.png" alt="5 Star" style="width:50px;">
                @elseif ($comment->star == 4)
                <img src="4starimage.jpg" alt="4 Star"style="width:50px;">
                @elseif ($comment->star == 3)
                <img src="3starimage.jpg" alt="3 Star"style="width:50px;">
                @elseif ($comment->star == 2)
                <img src="../rating.png" alt="3 Star"style="width:50px;">
                @elseif ($comment->star == 1)
                <img src="3starimage.jpg" alt="3 Star"style="width:50px;">
                @endif
              </div>
            </div>
            <p>{{$comment->comment}}</p>
            @endforeach
          </div>
        </div>
        <a href="#" class="view-more">View more reviews</a>

        <div class="add-comment">
          <h3>Add a Comment</h3>
          <div class="comment-form">
            


      <form action="{{ route('comments.store',$house->id) }}" method="POST">
                      @csrf
                      
                      <div class="star-rating">
                      <input type="radio" id="rating1" name="rating" value="1" />
                      <label for="rating1">&#9733;</label>

                      <input type="radio" id="rating2" name="rating" value="2" />
                      <label for="rating2">&#9733;</label>

                      <input type="radio" id="rating3" name="rating" value="3" />
                      <label for="rating3">&#9733;</label>

                      <input type="radio" id="rating4" name="rating" value="4" />
                      <label for="rating4">&#9733;</label>

                      <input type="radio" id="rating5" name="rating" value="5" />
                      <label for="rating5">&#9733;</label>
                      </div> 
                      <textarea style="border-radius: 10px;" name="comment" placeholder="Write your comment here" cols="70" rows="5"></textarea>                 
                      <div>
                      <button type="submit" style="background-color:RGB(0 214 159); color:white;border:none;padding:10px; border-radius: 10px;">Submit</button>
                      </div>
      </form>
        </div>
    </div>
      </section>

    <!-- location -->
    <div class="location-section">
      <h2>Where You Will Be</h2>
      <div class="location-map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29363.94682603317!2d-73.98542767127205!3d40.74881715208037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjnCsDU1JzM3LjAiTiA3M8KwNTAnNDMuOSJX!5e0!3m2!1sen!2sus!4v1622588723277!5m2!1sen!2sus" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
      </div>
      <div class="location-address">
        <h3>Address</h3>
        <p>123 Main Street, New York, NY 10001, United States</p>
      </div>
    </div>




  <!-- footer -->
    <footer class="footer">
      <div class="container">
        <div class="footer-links">
          <ul>
            <li><a href="#">About</a></li>
            <li><a href="#">Discover</a></li>
            <li><a href="#">Host</a></li>
            <li><a href="#">Trust & Safety</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy Policy</a></li>
          </ul>
        </div>
        <div class="footer-social">
          <ul>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
          </ul>
        </div>

      </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick.min.js"></script>
    <script src="js/card.js"></script>
    <script>
    $('.star-rating input[type="radio"]').change(function() {
      var currentRating = parseInt($(this).val());
      $(this).siblings('label').css('color', 'gold');
      $(this).siblings('label').slice(currentRating).css('color', '#ccc');
    });

    // Open the payment modal when the "Book Now" button is clicked
    const openPaymentModalButton = document.getElementById('open-payment-modal');
    const paymentModal = document.getElementById('payment-modal');
    openPaymentModalButton.addEventListener('click', () => {
      paymentModal.style.display = 'block';
    });

    // Close the payment modal when the close button is clicked
    const closeModalButton = document.querySelector('.close');
    closeModalButton.addEventListener('click', () => {
      paymentModal.style.display = 'none';
    });
    </script>
  </body>
  </html>
