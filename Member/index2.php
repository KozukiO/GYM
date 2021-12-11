<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS LINKS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="sstyle.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <title>RIDGE SCHEDULER</title>
  </head>
  <body data-spy="scroll" data-target="#navbarResponsive"> 

    <div id="home">
   <!--navbar creation -->
      <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
        <a class="navbar-brand" href="index.html"><h1>SCHEDULER</h1></a>
        <button class ="navbar-toggler" type="button" data-toggle="collapse" data-target ="navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class= "collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="#about">About</a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="#services">Services</a>
            </li>

             <li class="nav-item">
              <a class="nav-link" href="#contact">Contact Us</a>
            </li>
          </ul>
          
        </div>
      </nav>
    <!--End of Navbar creation-->
  </div>
     <!--Image Slider --->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="gym2.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Welcome To Kokxies BMI</h5>
          <p>Efficient And Fast Way To Cater For your Gym Needs</p>
          <a class="btn btn-outline-light btn-lg" href="#services">Get Started</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="gym1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Amazing Facility!</h5>
          <p>All geared up from the moment you enter!</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="handtime.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5>Save Time</h5>
          <p>Stay Organised, Save Time and Improve your Health Status.</p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
 <!---End of Image Slider --->

 <!--- Start of Portfolio Section --->
  <section id="about">
    <div class= "container">
      <h5>Simplicity meets Power</h5>
      <div class="row about">

      <div class="col-md-3 text-center">
          <div class="icon">
            <i class="far fa-calendar"></i>
          </div>
          <h3>Calender Coordination</h3>
           <p>View Your workout times and anticipate the grat things in store for you each week.  </p> 
             
        </div>

        <div class="col-md-3 text-center">
        <div class="icon">
          <i class="far fa-clock"></i>
        </div>
        <h3>Save Time</h3>
         <p>Sessions are not too long and very informative.  </p> 
           
        </div>

        <div class="col-md-3 text-center">
          <div class="icon">
              <i class="fab fa-wpforms"></i>
            </div>
            <h3>Custom Intake Forms</h3>
             <p>Learn about workouts or<br> familiarize yourself workouts you already knew.</p>              
          </div>

          <div class="col-md-3 text-center">
          <div class="icon">
              <i class="fab fa-wpforms"></i>
            </div>
            <h3>Streamlined Payments</h3>
             <p>Integrate with a payment processor <br>to easily charge clients before or after appointments.</p> 
             
          </div>
      </div>
    </div>
  </section>

    <!-- Start Services Section ---->
     <div id="services">
      <div class="jumbotron jumbotron-fluid">

        <h6 class="display-4 text-center">Services</h6>  
        <div class="heading-underline"></div>
 
     <div class="row no-padding">

          <div class="col-sm-4">
            <div class="services">
              <a href="pharmForm.php" target="_blank">
                <img src="pharmacy.jpg">
              </a>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="services">
              <a href="DentistForm.php" target="_blank">
                <img src="doctor1.jpg">
              </a>
            </div>
          </div>
        
        <div class="col-sm-4">
            <div class="services">
              <a href="consultationForm.php" target="_blank">
                <img src="consult.jpg">
              </a>
            </div>
          </div>
        
        <div class="col-sm-4">
            <div class="services">
              <a href="SurgeryForm.php" target="_blank">
                <img src="surg.jpg">
              </a>
            </div>
          </div>
        
        <div class="col-sm-4">
            <div class="services">
              <a href="vaccineForm.php" target="_blank">
                <img src="covid1.jpg">
              </a>
            </div>
          </div>
        
        <div class="col-sm-4">
            <div class="services">
              <a href="CancerForm.php" target="_blank">
                <img src="clinic.jpg">
              </a>
            </div>
          </div>
        </div>

        <div class= "narrow text-center">
          <div class="col-12">
            <p class="lead">Want To learn more about Megaleo SCHEDULER </p>
            <a class="btn btn-secondary btn-md" href="contact" target="_blank">CLICK HERE</a>
          </div>
        </div>
        </div> <!--- END ROW -->
      </div>
    </div>

    <div class="col-12 narrow text-center ">
      <h1> PORTFOLIO </h1>
      <p class="lead" > Working 24/7 to fill your schedule
        With Megaleo Scheduling, <br> clients can quickly view your availability and book with the available doctor, pharmaceutical pickups and surgury scheduler.</p>
      
    </div>
   
<!---Get in touch -->
<section id="contact">
  <div class="container">
    <h3>Get In Touch</h3>
    <div class="row">
      <div class="col-md-6">
        <form class="contact-form">
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Your Phone No.">
          </div>
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email id">
          </div>
          <div class="form-group">
            <textarea class="form-control" rows="4" placeholder="Your Message"></textarea>
          </div>
           <button type="submit" class="btn btn-primary"> SEND MESSAGE</button>
        </form>
      </div>
      <div class="col-md-6 contact-info">
        <div class="follow"><b>Address:</b><i class="fas fa-map-marker-alt"></i>XYZ Road Bangalore DY</div> 

        <div class="follow"><b>Phone:</b><i class="fas fa-phone"></i>024456557</div>

        <div class="follow"><b><i class="fas fa-envelope"></i>Email:</b>Scheduler@gmail.com
      </div>

       <div class="follow"><label><b>Get Social:</b></label>
            <a href="#"><i class="fab fa-facebook"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
       </div>

    </div>
  </div>
  
</section>
<!---footer Section--->
<footer>
  <section id="footer">
    <div class="container text-center">
        <p> Made with <i class="far fa-heart"></i> by Megaleo Company </p>
    </div>
  </section>

    
</footer>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" ></script>
  </body>
</html>

