
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Holy Cross Hostel</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="index.css">
    </head>
    <body>


        <!-- advertise section -->
        <div class="Advertise">
            <marquee behaviour="alternate" direction="Right" width="100%" height="20px" >
                Admissions open from 25 May - 10 July
            </marquee>
        </div>


        <!-- navbar section -->
        <div class="navbar">
            <div class="logo">
                <img src="image/Screenshot (68).png" alt="" style="height: 80px;width: 100px;">
            </div>
            <div class="nav-items">
                <a href="index.php">Menu</a>
                <a href="#Roooms">Rooms</a>
                <a href="#TIMETABLE">Mess Timetable</a>
                <a href="#map">About us</a>
                <a href="#Testimonials">Feedback</a>
            </div>
            <div class="Button_class">
            <input style="margin-right: 25px;" type=button onClick="parent.location='/hostel mgmt PHP/hostel/registration.php'" value='Sign-in'>

            <input type=button onClick="parent.location='/hostel mgmt PHP/hostel/index.php'" value='Log-in'>

              
            </div>
        </div>


        <!-- images section -->

        <div class="container">
          <div id="myCarousel" class="carousel slide" data-ride="carousel" >
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
        
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <img src="image/hostel1.jpg" alt="Los Angeles" style="width:100%;">
              </div>
        
              <div class="item">
                <img src="image/pexels-rahib-yaqubov-14793968.jpg" alt="Chicago" style="width:100%;">
              </div>
            
              <div class="item">
                <img src="image/hostel 3.jpg" alt="New york" style="width:100%;">
              </div>
            </div>
        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
        
        <hr>

        <!-- servcies -->

        <div class="services">
          
          <div class="services-box">
            <img style="height: 80px;width: 80px;" src="image/location.gif" alt="">
            <h2>MAPS $ DIRECTIONS</h2>          
            <p style="margin-top: 43px;">
              Located in Guru Gobind Singh Avenue of Jalandhar Chogithi
            </p>
            <a href="#map"><button class="btn" >Click me</button></a>
          </div>

          <div class="services-box">
            <img style="height: 80px;width: 80px;" src="image/crown.gif" alt="">
            <h2>SERVICES AND ACCOMODATIONS</h2>
            <p>
              We have many services available to you : Internet , no curfew , reception , etc ,
            </p>
            <a href="gallery.html"><button class="btn">Click me</button></a>
          </div>

          <div class="services-box">
            <img style="height: 80px;width: 80px;" src="image/parthenon.gif" alt="">
            <h2>GREAT HIGHLIGHTS</h2>
            <p style="margin-top: 42px;">
              We really captured you the most important Monuments 
            </p>
            <a href="gallery.html"><button class="btn">Click me</button></a>
          </div>

        </div>

        <!-- gallery  -->
        <div class="gallery" id="Roooms">
          <h2 style="color: #025e88;"> We offer <span>Truly Unique</span></h2>
          <h2 style="color: #025e88;">Exprience and Great Accomodations</h2>
        </div>


        <section class="Rooms-gallery">
          <div class="gallery-description">
            <h3>Our Rooms</h3>
            <p>Enjoy our cozy soulfull rooms</p>
          </div>
          <div class="gallery-highlight">
            <img id="gallery-image" src="image/rohitshshi.jpg" alt="">
            <div class="gallery-preview">
              <img onclick="change1()" src="image/rohitshshi.jpg"  class="room-active" alt="">
              <img onclick="change2()" src="image/pexels-pixabay-279746.jpg" alt="">
              <img onclick="change3()" src="image/pexels-vecislavas-popa-1743231.jpg" alt="">
            </div>
          </div>
        </section>

        <!-- FACILITIES --> 
        <div class="facilities">
          <h2 style="color: #025e88;">Our Facilities</h2>
        </div>

        <div class="item-facilities" style="margin-bottom: 10px;">
          <div class="f-items garden"  >
            <img style="height:100px;width:100px;margin-top: 50px;" class="f-circle-image" src="image/calendula.gif" alt="">
            <h3>Green Garden</h3>
            <h4>Evergreen Gardens for you to enjoy Nature.</h4>
          </div>
          <div class="f-items Wifi">
            <img style="height:100px;width:100px;margin-top: 50px;" class="f-circle-image" src="image/wifi.gif" alt="">
            <h3>Wifi </h3>
            <h4>Fully Wifi campus for you to surf internet.</h4>
          </div>
          <div class="f-items">
            <img style="height:100px;width:100px;margin-top: 50px;" class="f-circle-image"  src="image/deadlift.gif" alt="">
            <h3>Gym</h3>
            <h4>Gym for you to keep you in shape mentally as well as physically.</h4>
          </div>
        </div>

        <div class="item-facilities2" style="padding-left: 5%;">
          <div class="f-items">
            <img style="height:100px;width:100px;margin-top: 50px;" class="f-circle-image"  src="image/table.gif" alt="">
            <h3>Dining Area</h3>
            <h4>Dining Table for you all to enjoy food together with your friends.</h4>
          </div>
          <div class="f-items" style="padding-right:5%;">
            <img style="height:100px;width:100px;margin-top: 50px;" class="f-circle-image" src="image/power.gif" alt="">
            <h3>24/7 Electricity </h3>
            <h4>You have 24/7 electricity provided , with daily running water, etc. </h4>
          </div>
        </div>

        <!-- Timetable-->
       <section class="card-deck card-heading" id="TIMETABLE">
        <h2 style="color: #025e88;">MESS TIMETABLE</h2>
        <div class="row">
          <div class="col-lg-4 col-md-6">
              <div class="card">
                <div class="card-header">
                  <h3>Morning 🌅</h3>
                </div>
                <div class="card-body">
                  <h4>Roti + black chana </h4>
                  <h4>Roti + white Chickpeas</h4>
                  <h4>Prantha + Tea</h4>
                  <h4>Aloo prantha</h4>
                  <h4>Roti + white Chickpeas </h4>
                  <h4>Macroni</h4>
                  <h4>Puri Chole</h4>

                </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
             <div class="card">
                <div class="card-header">
                  <h3>Afternoon 🕑</h3>
                </div>
                <div class="card-body">
                  <h4>Chana Dal + Rice </h4>
                  <h4>Rajma + Rice </h4>
                  <h4>Dalmakhni + Rice </h4>
                  <h4>Veg Briyani / Pulao </h4>
                  <h4>Masoor Dal + Rice </h4>
                  <h4>Kaddi + Rice</h4>
                  <h4>Rajma + Rice</h4>

                </div>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="card">
                <div class="card-header">
                  <h3>Night 🌉</h3>
                </div>
                <div class="card-body">
                  <h4>Paneer + Roti</h4>
                  <h4>Sukhi Sabji + Roti</h4>
                  <h4>SoyaBean + Roti</h4>
                  <h4>Egg Curry + Roti</h4>
                  <h4>Briyani </h4>
                  <h4>Chole + Roti</h4>
                  <h4>Chicken + Rice</h4>
                </div>
              </div>
          </div>
        </div>
       </section>


       <!-- testimonials -->
      <section>
        <div id="Testimonials" class="carousel slide" data-bs-interval="2000" >
          <div class="carousel-inner">
            <div class="carousel-item active">
              <h2 class="testimonial-text">I had a lovely, relaxing time at this place. It was everything I needed and wanted from a hostel and very new, clean and homely. The staff member treated me very well and was very pleasant. I would highly recommend staying here</h2>
              <img style="border-radius: 100%;width: 15%;margin:1rem 2rem 3rem ;"src="image/pexels-dada-design-1227729623.jpg" alt="dog-profile">
              <em>John, New York</em>
            </div>
            <div class="carousel-item">
              <h2 class="testimonial-text">It was a comfortable hostel, thought it was a bit like staying in a school, but still very good for a hostel. Clean comfortable, good location.</h2>
              <img style="border-radius: 100%;width: 15%;margin:1rem 2rem 3rem" class="testimonial-image" src="image/istockphoto-544358212-170667a.jpg" alt="lady-profile">
              <em>Brain, Illinois</em>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#Testimonials" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#Testimonials" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
      
       
      </section>

        <!-- map -->
 
      <section id="map">
          <div class="map-half1">
            <h3 style="margin-left: 300px;color: #025e88;">Map</h3>
          <iframe style="" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3407.949081984484!2d75.60573221514602!3d31.332779281432032!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5a3d3c2e98d9%3A0x7d4686d5ebf04d9f!2sHoly%20Cross%20Boys%20Hostel!5e0!3m2!1sen!2sin!4v1684180988278!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

          <div class="map-half2">
            <h3 style="margin-left:400px;color: #025e88;">Contact Form</h3>
          <div class="container" style="margin-left: 5px;">
            <form action="mailto:rr904442@gmail.com">
            <label for="fname">Name</label>
            <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

            <label for="lname">Email</label>
            <input type="email" id="lname" name="lastname" placeholder="Your email.."><br>

            <label for="subject">Subject</label><br>
            <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>

          
      
      
      </section>
       <div class="about-us">
            <center>
              <a href=""><img style="height:20px;width:20px;margin:5px;" src="image/gmail.png" alt=""></a>
              <a href=""><img style="height:20px;width:20px;margin:5px;" src="image/internet.png" alt=""></a>
              <a href=""><img style="height:20px;width:20px;margin:5px;" src="image/instagram.png" alt=""></a>
            </center>
       </div>

      <footer style="text-align: center;">
        copyright @ Rohit & Shashipal
      </footer>

        <script src="app.js" async defer></script>
    </body>
</html>