<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>BootstrapDash Wizard</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/css/bd-wizard.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <nav class="navbar navbar-expand-sm navbar-light bg-white">
      <div class="container">
        <a class="navbar-brand" href="#"><img src="assets2/images/logo.svg" alt="logo"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId"
          aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
          <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <main class="d-flex align-items-center">
    <div class="container">
        <div id="wizard">
          <h3>Step 1 </h3>
          <section>
            <h5 class="bd-wizard-step-title">Step 1</h5>
            <h2 class="section-heading">Select type of your house </h2>
            <p>like you house front beach</p>
            
            <div class="purpose-radios-wrapper">

              <div class="purpose-radio">
                  <input type="radio" name="type" id="branding" class="purpose-radio-input" value="1" checked>

                  <label for="branding" class="purpose-radio-label">
                    <span class="label-icon">
                      <img src="assets2/images/icon_branding.svg" alt="branding" class="label-icon-default">
                      <img src="assets2/images/icon_branding_green.svg" alt="branding" class="label-icon-active">
                    </span>
                    <span class="label-text">Farm</span>
                  </label>
                </div>

                <div class="purpose-radio">
                    <input type="radio" name="type" id="mobile-design" class="purpose-radio-input" value="2">

                  <label for="mobile-design" class="purpose-radio-label">
                    <span class="label-icon">
                      <img src="assets2/images/icon_mobile_design.svg" alt="branding" class="label-icon-default">
                      <img src="assets2/images/icon_mobile_design_green.svg" alt="branding" class="label-icon-active">
                    </span>
                    <span class="label-text">Cabins</span>
                  </label>
                  </div>

                  <div class="purpose-radio">
                      <input type="radio" name="type" id="web-design" class="purpose-radio-input" value="3">

                    <label for="web-design" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">Tiny homes</span>
                    </label>
                  </div>

                  <div class="purpose-radio">
                      <input type="radio" name="type" id="Amazing-pools" class="purpose-radio-input" value="4">
                      
                    <label for="Amazing-pools" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">Amazing pools</span>
                    </label>
                  </div>

                  <div class="purpose-radio">
                      <input type="radio" name="type" id="National-parks" class="purpose-radio-input" value="5">
                      
                    <label for="National-parks" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">National parks</span>
                    </label>
                  </div>
                  <div class="purpose-radio">
                  <input type="radio" name="type" id="Beachfront" class="purpose-radio-input" value="6">
                      
                      <label for="Beachfront" class="purpose-radio-label">
                        <span class="label-icon">
                          <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                          <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                        </span>
                        <span class="label-text">Beachfront</span>
                      </label>
                    </div>
                  
                    <div class="purpose-radio">
                  <input type="radio" name="type" id="Caves" class="purpose-radio-input" value="7">
                      
                      <label for="Caves" class="purpose-radio-label">
                        <span class="label-icon">
                          <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                          <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                        </span>
                        <span class="label-text">Caves</span>
                      </label>
                    </div>

                    <div class="purpose-radio">
                  <input type="radio" name="type" id="Desert" class="purpose-radio-input" value="8">
                      
                      <label for="Desert" class="purpose-radio-label">
                        <span class="label-icon">
                          <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                          <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                        </span>
                        <span class="label-text">Desert</span>
                      </label>
                    </div>
          </div>

          </section>

          <h3>Step 2 </h3>
          <section>
            <h5 class="bd-wizard-step-title">Step 2</h5>
            <h2 class="section-heading">select house description</h2>
          

            <div class="purpose-radios-wrapper">
                  <div class="purpose-radio">
                      <input type="checkbox" name="checkboxes[]" id="central" class="purpose-radio-input " value="central">

                    <label for="central" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">central</span>
                    </label>
                  </div>

                  <div class="purpose-radio">
                      <input type="checkbox" name="checkboxes[]" id="wide" class="purpose-radio-input" value="wide">
                      
                    <label for="wide" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">wide</span>
                    </label>
                  </div>

                  <div class="purpose-radio">
                      <input type="checkbox" name="checkboxes[]" id="elegant" class="purpose-radio-input" value="elegant">
                      
                    <label for="elegant" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">elegant</span>
                    </label>
                  </div>
                  <div class="purpose-radio">
                  <input type="checkbox" name="checkboxes[]" id="Family_riendly" class="purpose-radio-input" value="Family_riendly">
                      
                      <label for="Family_riendly" class="purpose-radio-label">
                        <span class="label-icon">
                          <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                          <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                        </span>
                        <span class="label-text">Family_riendly</span>
                      </label>
                    </div>
                  
                    <div class="purpose-radio">
                  <input type="checkbox" name="checkboxes[]" id="quiet" class="purpose-radio-input " value="quiet">
                      
                      <label for="quiet" class="purpose-radio-label">
                        <span class="label-icon">
                          <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                          <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                        </span>
                        <span class="label-text">quiet</span>
                      </label>
                    </div>
          </section>

          
          </section>
          <h3>Step 3</h3>
          <section>
            <h5 class="bd-wizard-step-title">Step 3</h5>
            <h2 class="section-heading">Select house services</h2>
          

            <div class="purpose-radios-wrapper">
                  <div class="purpose-radio">
                      <input type="checkbox" name="checkboxes2[]" id="airconditioner" class="purpose-radio-input" value="airconditioner">

                    <label for="airconditioner" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">airconditioner</span>
                    </label>
                  </div>

                  <div class="purpose-radio">
                      <input type="checkbox" name="checkboxes2[]" id="washing_room" class="purpose-radio-input" value="washing_room">
                      
                    <label for="washing_room" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">washing_room</span>
                    </label>
                  </div>

                  <div class="purpose-radio">
                      <input type="checkbox" name="checkboxes2[]" id="spacework" class="purpose-radio-input" value="spacework">
                      
                    <label for="spacework" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">spacework</span>
                    </label>
                  </div>
                  <div class="purpose-radio">
                  <input type="checkbox" name="checkboxes2[]" id="parking" class="purpose-radio-input" value="parking">
                      
                      <label for="parking" class="purpose-radio-label">
                        <span class="label-icon">
                          <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                          <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                        </span>
                        <span class="label-text">parking</span>
                      </label>
                    </div>
                  
                    <div class="purpose-radio">
                  <input type="checkbox" name="checkboxes2[]" id="tv" class="purpose-radio-input" value="tv">
                      
                      <label for="tv" class="purpose-radio-label">
                        <span class="label-icon">
                          <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                          <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                        </span>
                        <span class="label-text">tv</span>
                      </label>
                    </div>

                    <div class="purpose-radio">
                  <input type="checkbox" name="checkboxes2[]" id="wifi" class="purpose-radio-input" value="wifi">
                      
                      <label for="wifi" class="purpose-radio-label">
                        <span class="label-icon">
                          <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                          <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                        </span>
                        <span class="label-text">wifi</span>
                      </label>
                    </div>
          </section>

          <h3>Step 4 </h3>
          <section>
            <h5 class="bd-wizard-step-title">Step 4</h5>
            <h2 class="section-heading">Select Extra services </h2>
            <div class="purpose-radios-wrapper">
                  <div class="purpose-radio">
                      <input type="checkbox" name="checkboxes3[]" id="poolgame" class="purpose-radio-input" value="poolgame">

                    <label for="poolgame" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">poolgame</span>
                    </label>
                  </div>

                  <div class="purpose-radio">
                      <input type="checkbox" name="checkboxes3[]" id="piano" class="purpose-radio-input" value="piano">

                    <label for="piano" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">piano</span>
                    </label>
                  </div>

                  <div class="purpose-radio">
                      <input type="checkbox" name="checkboxes3[]" id="barbeque" class="purpose-radio-input" value="barbeque">

                    <label for="barbeque" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">barbeque</span>
                    </label>
                  </div>

                  <div class="purpose-radio">
                      <input type="checkbox" name="checkboxes3[]" id="Firestove" class="purpose-radio-input" value="Firestove">
                      
                    <label for="Firestove" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">Firestove</span>
                    </label>
                  </div>

                  <div class="purpose-radio">
                      <input type="checkbox" name="checkboxes3[]" id="Courtyard" class="purpose-radio-input" value="Courtyard">
                      
                    <label for="Courtyard" class="purpose-radio-label">
                      <span class="label-icon">
                        <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                        <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                      </span>
                      <span class="label-text">Courtyard</span>
                    </label>
                  </div>
                  <div class="purpose-radio">
                  <input type="checkbox" name="checkboxes3[]" id="sauna" class="purpose-radio-input" value="sauna">
                      
                      <label for="sauna" class="purpose-radio-label">
                        <span class="label-icon">
                          <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                          <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                        </span>
                        <span class="label-text">sauna</span>
                      </label>
                    </div>
                  
                    <div class="purpose-radio">
                  <input type="checkbox" name="checkboxes3[]" id="swimpool" class="purpose-radio-input" value="swimpool">
                      
                      <label for="swimpool" class="purpose-radio-label">
                        <span class="label-icon">
                          <img src="assets2/images/icon_web_design.svg" alt="branding" class="label-icon-default">
                          <img src="assets2/images/icon_web_design_green.svg" alt="branding" class="label-icon-active">
                        </span>
                        <span class="label-text">swimpool</span>
                      </label>
                    </div>
          </section>


          <h3>Step 5 </h3>
          <section>
            <h5 class="bd-wizard-step-title">Step 5</h5>
            <h2 class="section-heading">House Information</h2>
            <div class="form-group">
              <label for="firstName" class="sr-only">Number Of Bed</label>
              <input type="number" name="number_bed" id="number_bed" class="form-control" placeholder="Number Of Bed">
            </div>
            <div class="form-group">
              <label for="lastName" class="sr-only">Number Of Bathtoom</label>
              <input type="number" name="number_bathroom" id="number_bathroom" class="form-control" placeholder="Number Of Bathtoom">
            </div>
            <div class="form-group">
              <label for="phoneNumber" class="sr-onlylo">Number Of Room</label>
              <input type="number" name="number_room" id="number_room" class="form-control" placeholder="Number Of Room">
            </div>
            <div class="form-group">
              <label for="emailAddress" class="sr-only">Number of Pepole</label>
              <input type="number" name="number_pepole" id="number_pepole" class="form-control" placeholder="Number of Pepole">
            </div>
          </section>

          <h3>Step 6 Title</h3>
          <section>
            <h5 class="bd-wizard-step-title">Step 6</h5>
            <h2 class="section-heading">House Information</h2>
            <div class="form-group">
              <label for="lastName" class="sr-only">house_name</label>
              <input type="text" name="house_name" id="house_name" class="form-control" placeholder="house_name">
            </div>
            <div class="form-group">
              <label for="phoneNumber" class="sr-only">location</label>
              <input type="text" name="location" id="location" class="form-control" placeholder="location">
            </div>
            <div class="form-group">
              <label for="emailAddress" class="sr-only">About</label>
              <input type="textarea" name="about" id="about" class="form-control" placeholder="about">
            </div>
            <div class="form-group">
              <label for="emailAddress" class="sr-only">price</label>
              <input type="text" name="price" id="price" class="form-control" placeholder="price">
            </div>
          </section>  
          <h3>Step 3 Title</h3>
          <section style="display:flex;width:100%;">
            <div style="width:80%;">
            <h5 class="bd-wizard-step-title">Review your Details and Submit</h5>
              <h2 class="section-heading mb-5">Review your Details and Submit</h2>
              <h6 class="font-weight-bold"><span id=""></span> </h6>
              <p class="mb-4"><span id="enteredFirstName"></span> <br>
                  <span id="enteredPhoneNumber"></span> <br>
                  </p>
                  <form action="{{ route('addnew.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                      <b>house-type:</b><input style="border: none;" type="text" id="house-type" name="house_type"><br>
                      <b>Number of people:</b><input style="border: none;" type="text" id="enteredpepole" name="pepole_num"><br>
                      <b>Number of beds:</b><input style="border: none;" type="text" id="enteredbed" name="pepole_bed"><br>
                      <b>Number of bathrooms:</b><input style="border: none;" type="text" id="enteredbathroom" name="pepole_bathroom"><br>
                      <b>Description:</b><input style="border: none;" type="text" id="description-house" name="description"><br>
                      <b>Services:</b><input style="border: none;" type="text" id="services-house" name="service"><br>
                      <b>Extra service :</b><input style="border: none;" type="text" id="extra-house" name="extra"><br>
                      <b>House name:</b><input style="border: none;" type="text" id="enteredname" name="house_name"><br>
                      <b>About:</b> <input style="border: none;" type="text" id="enteredabout" name="about"><br>
                      <b>Location:</b><input style="border: none;" type="text" id="enteredlocation" name="location"><br>
                      <b>price:</b><input style="border: none;" type="text" id="enteredprice" name="price"><br>
                      <div class="mb-3">
                      
                      <b>select image set of image </b><input class="form-control" type="file" id="formFile" name="images[]" multiple>
                      </div>
                      <div class="mb-3">
              
                      <b>select main image</b><input class="form-control" type="file" id="formFile" name="image">
                      </div>
                      
                      
                      <button type="Submit" style="background-color:RGB(0 214 159); color:white;border:none;padding:20px; border-radius: 10px;">Submit</button>
                  </form>
                  
            </div>
            
            
          </section>  
          
        </div>
    </div>
  </main>

  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="assets2/js/jquery.steps.min.js"></script>
  <script src="assets2/js/bd-wizard.js"></script>
</body>
</html>
