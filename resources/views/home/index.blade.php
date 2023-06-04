<!DOCTYPE html>
<html>
<head>
  <title>Rentz</title>
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </head>
<style>
	body, h1, h2, p, ul, li {
    margin: 0;
    padding: 0;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: white;
  }

  /* Header styles */
  header {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    display: flex;
    justify-content: space-between;
    align-items: center;
  }

  .logo {
    font-size: 24px;
    font-weight: bold;
    color: rgb(151,30,185);
  }




nav {
background-color: #fff;
padding: 20px 0;
display: flex;
justify-content: center;

margin-bottom: 3px;
}

nav ul {
list-style-type: none;
display: flex;
}

nav ul li {
margin-right: 20px;
}

nav ul li a {
color: rgb(151,30,185);
text-decoration: none;
font-size: 16px;
padding: 10px;
border-radius: 4px;
transition: background-color 0.3s ease;
}

nav ul li a:hover {
background-color: rgb(151,30,185);
}

/* Second navigation styles */
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
    color:black;
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
  
  .second-nav ul li a:hover {
    background-color: #f2f2f2;
  }
  
  .nav-item-title {
    font-size: 12px;
    text-align: center;
  }  


  /* search and filter styles */
  .search-bar {
    display: flex;
    align-items: center;
    background-color: #fff;
    border-radius: 24px;
    padding: 12px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    max-width: 700px;
    margin: 0 auto;
  }
  
  .search-bar input[type="text"] {
    flex-grow: 1;
    border: none;
    outline: none;
    padding: 8px;
    font-size: 16px;
  }
  .content {
  display: flex;
  justify-content: center;
  align-items: center;
  margin-top: 50px;
}

.row {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  margin: auto;
  width: 90%;
}

.col-3 {
  flex: 0 0 25%;
  max-width: 25%;
  padding: 15px;
}

.card {
  border-radius: 10px;
}

.card-img-top {
  border-radius: 10px;
}

.card-title {
  color: gray;
}

.card-text {
  margin-bottom: 0;
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
  
  /* Content section styles */
  .location-card {
    width: 300px;
    background-color: #fff;
    padding: 20px;
    margin-bottom: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
  }

  .location-card h3 {
    font-size: 18px;
    margin-bottom: 10px;
  }

  .location-card p {
    font-size: 14px;
    color: #888;
    margin-bottom: 5px;
  }

  .location-card a {
    font-size: 14px;
    color: #ff5a5f;
    text-decoration: none;
    display: inline-block;
    margin-top: 10px;
    transition: color 0.3s ease;
  }

  .location-card a:hover {
    color: #f53d43;
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
  header{
	box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
border-bottom: 1px solid #ccc;
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
  /* Media queries for responsiveness */
  .card{
	border-style: none;
  }

@media (max-width: 768px) {
    nav ul li {
      margin-right: 10px; /* Reduce margin-right for smaller screens */
    }
    
    .second-nav ul li {
      margin-right: 10px;
    }
  }
  
  @media (max-width: 480px) {
    nav ul li {
      margin-right: 5px; /* Reduce margin-right further for smaller screens */
    }
    
    .second-nav ul li {
      margin-right: 5px;
    }
  }
</style>
<body>
    <header >
		<div style="float: left;"><h1 class="logo"><a href="{{ route('home.index')}}" style="text-decoration: none;color:rgb(151,30,185);">Rentz</a> </h1></div>
        <div style="float: right;">
		<span><b>Rentz its your home</b></span>
		<a href="#" style="margin:15px; color:black;">
			<i class="fas fa-list"></i>
			</a>

			<a href="#" style="color:black;">
			<i class="fas fa-user"></i>
			</a>
		</div>
    </header>
	
<nav class="second-nav">
    <ul>
      <li>
        <a href="{{ route('showHouses', ['type_id' => 1]) }}">
          <i class="fas fa-home"></i>
          <span class="nav-item-title">Farm</span>
        </a>
      </li>
      <li>
        <a href="{{ route('showHouses', ['type_id' => 2]) }}">
          <i class="fas fa-swimming-pool"></i>
          <span class="nav-item-title">Amazing Pools</span>
        </a>
      </li>
      <li>
        <a href="{{ route('showHouses', ['type_id' => 3]) }}">
          <i class="fas fa-campground"></i>
          <span class="nav-item-title">Cabins</span>
        </a>
      </li>
      <li>
        <a href="{{ route('showHouses', ['type_id' => 4]) }}">
          <i class="fas fa-home"></i>
          <span class="nav-item-title">Tiny Homes</span>
        </a>
      </li>
      <li>
        <a href="{{ route('showHouses', ['type_id' => 5]) }}">
          <i class="fas fa-tree"></i>
          <span class="nav-item-title">National Parks</span>
        </a>
      </li>
      <li>
        <a href="{{ route('showHouses', ['type_id' => 6]) }}">
          <i class="fas fa-umbrella-beach"></i>
          <span class="nav-item-title">Beachfront</span>
        </a>
      </li>
      <li>
        <a href="{{ route('showHouses', ['type_id' => 7]) }}">
            <i class="fa-solid fa-holly-berry"></i>
            <span class="nav-item-title">Caves</span>
        </a>
      </li>
      <li>
        <a href="{{ route('showHouses', ['type_id' => 8]) }}">
          <i class="fas fa-sun"></i>
          <span class="nav-item-title">Desert </span>
        </a>
      </li>
    </ul>
  </nav>

  <div class="search-bar">
    <input type="text" placeholder="Search by location...">
    <div class="filter-dropdown">
      <button class="filter-toggle">Filter</button>
      <ul class="filter-options">
        <li class="filter-option">
          <span class="filter-label">Price</span>
          <ul class="sub-options">
            <li>Low to High</li>
            <li>High to Low</li>
          </ul>
        </li>
        <li class="filter-option">
          <span class="filter-label">Location</span>
          <ul class="sub-options">
            <li>Nearby</li>
            <li>Far Away</li>
          </ul>
        </li>
        <li class="filter-option">
          <span class="filter-label">Weather</span>
          <ul class="sub-options">
            <li>Sunny</li>
            <li>Rainy</li>
            <li>Snowy</li>
          </ul>
        </li>
      </ul>
      <div class="tooltips">
        <div class="tooltip">Filter by price</div>
        <div class="tooltip">Filter by location</div>
        <div class="tooltip">Filter by weather</div>
      </div>
    </div>
    <button class="search-button"><i class="fas fa-search"></i> Search</button>
  </div>


<section class="content" style="margin:auto; width:90%; margin-top:50px;">
  <div class="row row-cols-1 row-cols-md-3 g-4" style="margin:auto;">
  @foreach($houses as $house)
  <div class="col-3">
        <div class="card" style="border-radius: 10px;">
            <img src="https://imgv3.fotor.com/images/blog-richtext-image/part-blurry-image.jpg" class="card-img-top" alt="..."style="border-radius: 10px;">
            <div class="card-body">
            <div style="display:flex;justify-content: space-between;">
            <h5 class="card-title"><a href="{{ route('home.show', $house->id) }}"style="text-decoration: none;color:rgb(151,30,185);">{{$house->house_name}}</a> </h5>
            <p class="card-title"style="color:gray;">{{$house->price}}Jd/night</p>
            </div>
            <p class="card-title" style="color:gray;">{{$house->location}}</p>
            <p class="card-text">{{$house->about}}</p>
        </div>
    </div>
</div>
  @endforeach

  
</div>
</section>

  
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
  <!-- script -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script>
    $(document).ready(function() {
      // Initialize Swiper for each location card
      var locationCards = $(".location-card .swiper-container");
      locationCards.each(function() {
        var swiper = new Swiper($(this), {
          loop: true,
          pagination: {
            el: $(this).find(".swiper-pagination"),
            clickable: true,
          },
        });
        
        // Show the first slide initially
        $(this).find(".swiper-slide:first-child").addClass("active");
        
        // Update active slide on slide change
        swiper.on("slideChange", function() {
          $(this.el)
            .find(".swiper-slide")
            .removeClass("active");
          $(this.el)
            .find(".swiper-slide-active")
            .addClass("active");
        });
      });
    });
  </script>
</body>
</html>
