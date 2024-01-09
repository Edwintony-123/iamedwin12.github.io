<%-- no 
    Document   : index
    Created on : 28 Mar, 2023, 4:57:13 PM
    Author     : Rikshan
--%> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Sacred Heart College (Autonomous)</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.ico" rel="icon">
  <link href="assets/img/favicon.ico" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/css1.php" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio
  * Updated: Mar 10 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  
  
  <style>


span {
  display: inline-block;
  transition: transform 0.3s,color 0.3s ease-in-out;
}

h2 span:hover {
  transform: scale(1.3);
  color:orange;
}

p strong {
	display: inline-block;
  transition: transform 0.3s,color 0.3s ease-in-out;
}
p strong:hover{
	  transform: scale(1.3);
  color:orange;
}
/*staff details*/
.stf {
	display: inline-block;
  transition: transform 0.3s,color 0.3s ease-in-out;
}
.stf:hover{
	  transform: scale(1.3);
  color:orange;
}

/*Gallery*/
.gall {
	display: inline-block;
  transition: transform 0.3s,color 0.3s ease-in-out;
}
.gall:hover{
	  transform: scale(1.3);
  color:orange;
}
/*Contact*/
.con {
	display: inline-block;
  transition: transform 0.3s,color 0.3s ease-in-out;
}
.con:hover{
	  transform: scale(1.3);
  color:orange;
}


img{
	
	display: inline-block;
  transition: transform 0.2s,color 0.8s ease-in;
}
img:hover {
  transform: scale(0.9);
  color:red;
}
<!--- vision statement-->

.vision{
	
	display: inline-block;
  transition: transform 0.2s,color 0.6s ease-in-out;
}
.vision:hover {
  transform: scale(1.1);
  color:orange;
}
#about{
	text-align:center;
	
}
.content{
	text-align:justify;
}

 /* Define the regular link color */
  .reg1 {
    color: blue; /* Change this to the initial color you want */
    text-decoration: none; /* Remove underline */
  }

  /* Change the link color on hover */
  .reg1 :hover {
    color: red; /* Change this to the color you want on hover */
  }
  
  /* Define the regular link color */
  .reg2 {
    color: blue; /* Change this to the initial color you want */
    text-decoration: none; /* Remove underline */
  }

  /* Change the link color on hover */
  .reg2 :hover {
    color: red; /* Change this to the color you want on hover */
  }
  
  

</style>
 
  
<script src="https://code.jquery.com/jquery-3.6.0.min.js">
  $(document).ready(function () {
    $(".icon-box").click(function () {
      // Find the description element within the clicked icon box
      var description = $(this).find(".description");

      // Toggle the visibility of the description
      description.slideToggle();
    });
  });

</script>

</head>

<body >

  <!-- ======= Top Bar ======= 
  
  <div id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container d-flex align-items-center  justify-content-md-between">
     
      <div class="d-flex flex-column">
        <i class="bi bi-phone" ></i> Call us now +1 5589 55488 55 
	
	  <div class="d-flex flex-column">
        <i class="bi bi-envelope" ></i> Email-shc@gmail.com
		</div>
      </div>
    </div>
  </div>
-->
<div id="topbar" class="d-flex align-items-center fixed-top ">
    <div class="container d-flex align-items-center  justify-content-md-between">
     
      <div class="d-flex flex-row  align-items-center s">
        <i class="bi bi-phone" ></i> Call us now +1 5589 55488 55  </div><br>
	
	  <div class="d-flex flex-row align-items-center ">
        <i class="bi bi-envelope" ></i> Email-shc@gmail.com
		</div>
     
    </div>
  </div>

  <!-- ======= Header ======= -->
  
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <a href="index.jsp" class="logo me-auto"><img src="assets/img/DeptLogo.PNG" height="1000" width="80" alt=""></a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <h1 class="logo me-auto">MASTER OF COMPUTER APPLICATON</h1> 

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about1">About</a></li>
          <li><a class="nav-link scrollto" href="#testimonials">Staff</a></li>
          <li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#featured-services" class="appointment-btn scrollto"><span class="d-none d-md-inline">Click here to</span> Register</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="2000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image:url(assets/img/johnmed1.jpg)" >
		
		
          
            <div class="container">
            <h2><span>Welcome to the Department of MCA</span></h2>
          <a href="#about1" class="btn-get-started scrollto">Read More</a>
           
			 </div>
          </div>
		  
		  <!--slide 2-->
		   <div class="carousel-item active" style="background-image:url(assets/img/slide-1.jpg)" >
	
          </div>
		  
          <!--slide 3-->
     
		   <div class="carousel-item active" style="background-image:url(assets/img/slider-1bb.jpg)" >
	<div class="image-overlay">
        <h1 class="overlay-title">Don Bosco Said:</h1>
        <p class="overlay-description">“Without confidence and love, there can be no true education. If you want to be loved…you must love yourselves, and make your children feel that you love them.”</p>
    </div>
          </div>
		  
		  <!--slide 4-->
		 
                        
                        
		  
		  
		  <!---video carousel-->
		  <div class="carousel-container">
    <!-- First Carousel Item with Video Background -->
    <div class="carousel-item">
	
        <video class="cmp-video-hero__video" muted autoplay loop playsinline="true" preload="metadata">
            <source src="https://dynamicmedia.accenture.com/is/content/accenture/final/accenture-com/video/Homepage_insights_TER-ITL_top-marque_1920x1080.mp4" type="video/webm">
            <source src="https://dynamicmedia.accenture.com/is/content/accenture/final/accenture-com/video/Homepage_insights_TER-ITL_top-marque_1920x1080.mp4" type="video/ogg">
            <source src="https://dynamicmedia.accenture.com/is/content/accenture/final/accenture-com/video/Homepage_insights_TER-ITL_top-marque_1920x1080.mp4" type="video/mp4">
			
        </video>
	
	<div class="video-overlay">
        <h1 class="overlay-title">Your Text Here</h1>
        <p class="overlay-description">Description or additional content goes here</p>
    </div>
		 
    </div>

    <!-- Add more carousel items here if needed -->
</div>
		 <!--another video-->
		  <div class="carousel-item">
            <video class="cmp-video-hero__video" muted autoplay loop playsinline="true" preload="auto">
            <source src="https://dynamicmedia.accenture.com/is/content/accenture/final/accenture-com/video/Homepage_Banner_1920x1080_v1.mp4" type="video/webm"/>
            <source src="https://dynamicmedia.accenture.com/is/content/accenture/final/accenture-com/video/Homepage_Banner_1920x1080_v1.mp4" type="video/ogg"/>
            <source src="https://dynamicmedia.accenture.com/is/content/accenture/final/accenture-com/video/Homepage_Banner_1920x1080_v1.mp4" type="video/mp4"/>
            
            </video>
			</div>
		  <!---another videoo-->
        <div class="carousel-item">
            
                <video class="cmp-video-hero__video" muted autoplay loop playsinline="true" preload="metadata">
                <source src="https://dynamicmedia.accenture.com/is/content/accenture/final/accenture-com/video/Accenture-Case-Study-V360-Awards-marquee-video-1920x1080.mp4" type="video/webm"/>
                <source src="https://dynamicmedia.accenture.com/is/content/accenture/final/accenture-com/video/Accenture-Case-Study-V360-Awards-marquee-video-1920x1080.mp4" type="video/ogg"/>
                <source src="https://dynamicmedia.accenture.com/is/content/accenture/final/accenture-com/video/Accenture-Case-Study-V360-Awards-marquee-video-1920x1080.mp4" type="video/mp4"/>
                
                </video>
            
            </video>
			</div>
	   
	   
	   

     

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Featured Services Section ======= -->
    <section id="featured-services" class="featured-services">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="fas fa-building"></i></div>
              <h4 class="title"><a href="">Department Activities</a></h4>
			
            <!--  <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>-->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="fas fa-wrench"></i></div>
              <h4 class="title"><a href="">Workshop Activities</a></h4>
			   
              <!--<p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>-->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="fas fa-code"></i></div>
              <h4 class="title">Shine Program</h4>
			 <h6 class="reg2"><a href="home.php" id="register-link"><u>Click here to register</u></a></h6>
			 
             <!-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>-->
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="fas fa-users"></i></div>
              <h4 class="title">Aluminis</h4>
			  <h6 class="reg1"> <a href="alumini.php"><u>Click here to register</u></a></h6>
             <!-- <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>-->
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
	<!--
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
         
          <a class="cta-btn scrollto" href="#appointment">Make an Appointment</a>
        </div>

      </div>-->
    </section><!-- End Cta Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about1" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="vision"> Vision Statement</h2>	
          
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-right">
            <img src="assets/img/johnmed.jpg" class="img-fluid" alt="">
          </div>
		  
          <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h2>Imparting Knowledge of Computer Applications into the young aspiring graduates who can adopt to the 
demanding needs of the Information Technology Industry and contribute to the Research and
Developmental Sector of the Country and the Globe.The department strives to educate the underprivileged rural section of young graduates by providing 
state of the art infrastructure and adopting to the blend of e-Learning with traditional teaching 
pedagogy to shape them as industry ready professionals.</h2>
            
			<!---
            <ul>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check-circle"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check-circle"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla pariatur.</li>
            </ul> -->
			<!-- <div class="section-title">
			<h2>MISSION</h2>
            </div>
			
			<h4>

            </h4>
          </div>
        </div>

      </div>-->
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-users"></i>
              <span data-purecounter-start="0" data-purecounter-end="07" data-purecounter-duration="1" class="purecounter"></span>

              <p class><strong>Staffs</strong> </p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-graduation-cap"></i>
              <span data-purecounter-start="0" data-purecounter-end="120" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Students</strong></p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-Desktop"></i>
              <span data-purecounter-start="0" data-purecounter-end="02" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Computer Lab</strong></p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
              <p><strong>Awards</strong></p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= 
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">

        <div class="row">
          <div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-receipt"></i>
              <h4>Est labore ad</h4>
              <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-cube-alt"></i>
              <h4>Harum esse qui</h4>
              <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-images"></i>
              <h4>Aut occaecati</h4>
              <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-shield"></i>
              <h4>Beatae veritatis</h4>
              <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("assets/img/features.jpg");' data-aos="zoom-in"></div>
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= 
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Dolor Sitema</a></h4>
            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Magni Dolores</a></h4>
            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="">Nemo Enim</a></h4>
            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
          </div>
        </div>

      </div>
    </section>--><!-- End Services Section -->


    <!-- ======= Appointment Section ======= -->
	<!--
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
          <div class="row">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
            </div>
            <div class="col-md-4 form-group mt-3 mt-md-0">
              <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 form-group mt-3">
              <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="department" id="department" class="form-select">
                <option value="">Select Department</option>
                <option value="Department 1">Department 1</option>
                <option value="Department 2">Department 2</option>
                <option value="Department 3">Department 3</option>
              </select>
            </div>
            <div class="col-md-4 form-group mt-3">
              <select name="doctor" id="doctor" class="form-select">
                <option value="">Select Doctor</option>
                <option value="Doctor 1">Doctor 1</option>
                <option value="Doctor 2">Doctor 2</option>
                <option value="Doctor 3">Doctor 3</option>
              </select>
            </div>
          </div>

          <div class="form-group mt-3">
            <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
          </div>
          <div class="my-3">
            <div class="loading">Loading</div>
            <div class="error-message"></div>
            <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
          </div>
          <div class="text-center"><button type="submit">Register</button></div>
        </form>

      </div>
    </section>--><!-- End Appointment Section -->
    
    
    <!-- ======= staff  Section ======= -->
    <section id="testimonials" class="testimonials">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="stf">Staff Details</h2>
          <p> A good teacher can inspire hope, ignite the imagination, and instill a love of learning.

Teaching is the greatest act of optimism.

The best teachers are those who show you where to look but don't tell you what to see.</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
			
              <div class="testimonial-item">
                <p>
                </p>
                <img src="assets/img/georgesir.jpg" class="testimonial-img" alt="">
				 
                <h3>Dr.George Louis Raja A</h3>
                <h4>Head of the Department</h4>
				
			
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                                  </p>
                <img src="assets/img/thomassir.jpg" class="testimonial-img" alt="">
                <h3>Mr.Thomas Immanuel V</h3>
                <h4>Assistant Professor</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  
                </p>
                <img src="assets/img/johnsir.jpg" class="testimonial-img" alt="">
                <h3>Dr.John Martin A</h3>
                <h4>Assistant Professor </h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
               
                </p>
                <img src="assets/img/priyamam.jpg" class="testimonial-img" alt="">
                <h3>Dr.Saravanapriya K</h3>
                <h4>Assistant Professor</h4>
              </div>
            </div><!-- End testimonial item -->
			
			

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  
                </p>
                <img src="assets/img/philomensir.jpg" class="testimonial-img" alt="">
                <h3>Dr.Anthony Philomen Raj S</h3>
                <h4>Assistant Professor</h4>
              </div>
			  
            </div><!-- End testimonial item -->
			<div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  
                </p>
                <img src="assets/img/veerasir.jpg" class="testimonial-img" alt="">
                <h3>Mr.Veeraragavan R</h3>
                <h4>Assistant Professor</h4>
              </div>
            </div>

          </div>
          <div class="swiper-pagination"></div>
        </div>
		<div class="testimonial-card">
  <div class="card-content">
    <p class="card-description"></p>
    <h3 class="card-name"></h3>
    <h4 class="card-title"></h4>
  </div>
</div>

		
		

      </div>
    </section><!-- End staff Section -->

    <!-- ======= Doctors Section ======= 
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="me mber" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Medical Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Anesthesiologist</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>Cardiology</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/doctors/doctors-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Neurosurgeon</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Doctors Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2 class="gall">Gallery</h2>
         <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>-->
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/johnmed.jpg"><img src="assets/img/johnmed.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/johnmed.jpg"><img src="assets/img/johnmed.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/johnmed.jpg"><img src="assets/img/johnmed.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/johnmed.jpg"><img src="assets/img/johnmed.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/johnmed.jpg"><img src="assets/img/johnmed.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/johnmed.jpg"><img src="assets/img/johnmed.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/johnmed.jpg"><img src="assets/img/johnmed.jpg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="assets/img/johnmed.jpg"><img src="assets/img/johnmed.jpg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    

    

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2 class="con">Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

      </div>

      <div>
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" allowfullscreen></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>A108 Adam Street, New York, NY 535022</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@example.com<br>contact@example.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+1 5589 55488 55<br>+1 6678 254445 41</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer =======
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Medicio</h3>
              <p>
                A108 Adam Street <br>
                NY 535022, USA<br><br>
                <strong>Phone:</strong> +1 5589 55488 55<br>
                <strong>Email:</strong> info@example.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Medicio</span></strong>. All Rights Reserved
      </div>  -->
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/medicio-free-bootstrap-theme/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
