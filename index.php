<?php //include "header.php"; 
if(!isset($_SESSION)) {
session_start();
}
if (isset($_SESSION['SESS_NAME'])!="") {
	//header("Location: voter.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Medicio Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">

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
  <link href="assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Medicio - v4.8.1
  * Template URL: https://bootstrapmade.com/medicio-free-bootstrap-theme/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>
<style>
 .total{
  display:flex;
 }
 .first{
  display:flex;
  justify-content:space-around;
 }
 .second{
  display:flex;
  justify-content:space-around;

 }
</style>

<body>

  <!-- ======= Top Bar ======= -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex align-items-center justify-content-center justify-content-md-between">
      <div class="align-items-center d-none d-md-flex">
        <i class="bi bi-clock"></i> Monday - Saturday, 8AM to 10PM
      </div>
      <div class="d-flex align-items-center">
        <i class="bi bi-phone"></i> Call us now +91 9876543210
      </div>
    </div>
  </div>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h2>RGUKT HealthCare </h2>


      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <h1 class="logo me-auto"><a href="index.html">Medicio</a></h1> -->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto " href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#departments">Departments</a></li>
          <li><a class="nav-link scrollto" href="#doctors">Doctors</a></li>
          
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">Make an</span>
        Appointment</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg)">
          <div class="container">
            <h2>Welcome to <span>RGUKT Online HealthCare Appointments</span></h2>
            <p>Visit us and save your health </br>Join Us...</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg)">
          <div class="container">
            <h2>We are Student friendly</h2>
            <p>If you all Consult us..We take care of your Health. </p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-3.jpg)">
          <div class="container">
            <h2> Get back to your good health</h2>
            <p>we heal you with good medicines.</p>
            <a href="#about" class="btn-get-started scrollto">Read More</a>
          </div>
        </div>

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
  <!-- End Featured Services Section -->


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>About Us</h2>

      </div class="total">
      <div class="first">
            <div>
              <img src="outsidepic.jpeg" width="400px" height="300px"><br>
              <span>Hospital</span><br>
              <span>RGUKT Srikakulam</span><br>
            </div>
            <div>
            <img src="kcreddyf.jpg" width="400px" height="300px"><br>
              <span>Chancellor</span><br>
              <span>Mr.K C Reddy </span><br>
              <span><a href="mailto:chancellor@rgukt.in">chancellor@rgukt.in</a></span><br>
              <span>Phone:08656235855</span><br>
            </div>
     </div>
     <div class="second">
             <div>
             <img src="vice chancellor.png" width="400px" height="300px"><br>
              <span>Vice Chancellor</span><br>
              <span>Prof.M.Vijaya Kumar</span><br>
              <span><a href="mailto:vc@rgukt.in">vc@rgukt.in</a></span><br>
              <span>Phone:08656235855</span><br>
            </div>
            <div>
              <img src="directorsirsklm.jpg" width="400px" height="300px"><br>
              <span>Director</span><br>
              <span>Prof.P.Jagadeeswara Rao</span><br>
              <span>RGUKT Srikakulam</span><br>
              <span><a href="mailto:director.sklm@rgukt.in">director.sklm@rgukt.in</a></span><br>
              <span>Phone:9290452308</span><br>
            </div>
      </div>
      </div>
</div>
</div>
    </section><!-- End About Us Section -->

    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>How we work?</h2>
          <p>Our Online health care Center, is a sector that provides goods and services to treat patients with curative, preventive, rehabilitative, or palliative care. The healthcare system is composed of establishments devoted to prevention, diagnosis, treatment, and rehabilitation of medical conditions.</p>
        </div>
      </div>
    </section>

    <!-- ======= Counts Section ======= -->

    <section id="counts" class="counts">
      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>PRODUCT SPECIFICATION</h2>
        </div>
        <div class="row no-gutters">


          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">

              <p><strong>Product Name</strong></br> Organic Products</p>

            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="far fa-hospital"></i>
              <span data-purecounter-start="0" data-purecounter-end="04" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Departments</strong> In our Healthcare we have 04 Departments.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-flask"></i>
              <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Research Lab</strong> We have 14 Reasearch labs in our health care.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
            <div class="count-box">
              <i class="fas fa-award"></i>
              <span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1"
                class="purecounter"></span>
              <p><strong>Awards</strong> We recieved 150 Awards from Certified Organizations.</p>
              <a href="#">Find out more &raquo;</a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Counts Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container" data-aos="fade-up">
      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Time and health are two precious assets that we don’t recognize and appreciate until they have been depleted.</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">We Protect </a></h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4 class="title"><a href="">Clean </a></h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4 class="title"><a href="">Pharmacy</a></h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">DNA</a></h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4 class="title"><a href="">Wheel Chair</a></h4>
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4 class="title"><a href="">First-Aid</a></h4>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <section id="appointment" class="appointment section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Make an Appointment</h2>
        </div>

        <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up"
          data-aos-delay="100">
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
              <input type="datetime" name="date" class="form-control datepicker" id="date"
                placeholder="Appointment Date" required>
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
          <div class="text-center"><button type="submit">Make an Appointment</button></div>
        </form>

      </div>
    </section><!-- End Appointment Section -->

    <!-- ======= Departments Section ======= -->
    <section id="departments" class="departments">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Departments</h2>
          <p>Our Online health care center, is a sector that provides goods and services to treat patients with curative, preventive, rehabilitative, or palliative care. The healthcare industry is composed of establishments devoted to prevention, diagnosis, treatment, and rehabilitation of medical conditions.</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-4 mb-5 mb-lg-0">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                  <h4>Cardiology</h4>
                  <p>Diagnosing patients based on their test reports and lab results. Creating a customised treatment plan for all the patients. Prescribing medications and therapy as required to treat conditions. Providing constant support and care and following up with patients on their treatment progress.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                  <h4>Neurology</h4>
                  <p>Neurology is the branch of medicine dealing with the diagnosis and treatment of all categories of conditions and disease involving the brain, the spinal cord and the peripheral nerves. Neurological practice relies heavily on the field of neuroscience, the scientific study of the nervous system.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                  <h4>Hepatology</h4>
                  <p>Hepatology is an area of medicine that focuses on diseases of the liver as well as related conditions. </p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                  <h4>Pediatrics</h4>
                  <p>Pediatrics is the branch of medicine that involves the medical care of infants, children, adolescents, and young adults. In the United Kingdom, paediatrics covers many of their youth until the age of 18.</p>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-lg-8">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <h3>Cardiology</h3>
                <p class="fst-italic">A cardiologist is a physician who's an expert in the care of your heart and blood vessels.</p>
                <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                <p>A cardiologist is a doctor who’s an expert in heart and blood vessel diseases. They can treat heart diseases and help keep you from getting heart diseases.

                  After completing four years of medical school, cardiologists spend three years learning general internal medicine as a resident, plus at least three more years of specialized training after that.
                  
                  After 10 years of training, a cardiologist can take an American Board of Internal Medicine exam. Even after achieving board certification, cardiologists keep learning for as long as they practice. They must keep up with the latest advances in how to treat patients to provide the best care.
                  
                  </p>
              </div>
              <div class="tab-pane" id="tab-2">
                <h3>Neurology</h3>
                <p class="fst-italic">Neurologists are specialists who treat diseases of the brain and spinal cord, peripheral nerves and muscles.</p>
                <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                <p>A neurologist is a physician specializing in neurology and trained to investigate, diagnose and treat neurological disorders.[2] Neurologists treat a myriad of neurologic conditions, including stroke, seizures, movement disorders such as Parkinson's disease, autoimmune neurologic disorders such as multiple sclerosis, headache disorders like migraine and dementias such as Alzheimer's disease.[3] Neurologists may also be involved in clinical research, clinical trials, and basic or translational research. While neurology is a nonsurgical specialty, its corresponding surgical specialty is neurosurgery.</p>
              </div>
              <div class="tab-pane" id="tab-3">
                <h3>Hepatology</h3>
                <p class="fst-italic">A hepatologist is a specialized doctor involved in the diagnosis and treatment of hepatic diseases, which include issues that affect your: liver. gallbladder. pancreas.</p>
                <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                <p>While hepatology is not a board certified specialty according to the American Board of Medical Specialties (ABMS), it’s generally considered a subspecialty of gastroenterology. It’s only been more recently regarded as separate from gastroenterology in the last few decades.

                  As such, doctors who are trained in hepatology are also certified in both internal medicine and gastroenterology first.</p>
              </div>
              <div class="tab-pane" id="tab-4">
                <h3>Pediatrics</h3>
                <p class="fst-italic">The word “paediatrics” means “healer of children”; they are derived from two Greek words: (pais = child) and (iatros = doctor or healer).</p>
                <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                <p>Pediatrics is the branch of medicine dealing with the health and medical care of infants, children, and adolescents from birth up to the age of 18. The word “paediatrics” means “healer of children”; they are derived from two Greek words: (pais = child) and (iatros = doctor or healer).</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Departments Section -->

    <!-- ======= Doctors Section ======= -->
    <section id="doctors" class="doctors section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Doctors</h2>
          <p>The healthcare industry is composed of establishments devoted to prevention, diagnosis, treatment, and rehabilitation of medical conditions.</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="durgamam.jpg" class="img-fluid" alt="">
            
              </div>
              <div class="member-info">
                <h4>Dr.A Durga Bhavani</h4>
                <span>Chief Medical Officer</span>
                <a href="mailto:cmo@rguktn.ac.in">cmo@rguktn.ac.in</a>
                <sapn>9966361458</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="kiransir.jpg" class="img-fluid" alt="">
              
              </div>
              <div class="member-info">
                <h4>Mr.A Kiran Kumar</h4>
                <span>Lab Assistant</span>
                <span>9441003942</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="vazrambamam.png" class="img-fluid" alt="">
               
              </div>
              <div class="member-info">
                <h4>Mrs.P Vazramba</h4>
                <span>Senior Nurse</span>
                <span>8106637818</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="jansimam.png" class="img-fluid" alt="">
                
              </div>
              <div class="member-info">
                <h4>Mrs.J Jhansi</h4>
                <span>Senior Therapist</span>
                <span>6304236311</span>
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
          <h2>Gallery</h2>
          
        </div>

        <div class="gallery-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><a class="gallery-lightbox" href="ambulance.jpeg"><img
                  src="ambulance.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="bloodinject.jpeg"><img
                  src="bloodinject.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="pharmacy2.jpeg"><img
                  src="pharmacy2.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="singlems.jpeg"><img
                  src="singlems.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="Pediatrics.jpeg"><img
                  src="Pediatrics.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="bp2.jpeg"><img
                  src="bp2.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="wheel.jpeg"><img
                  src="wheel.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="testing lab.jpeg"><img
                  src="testing lab.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="isolation.jpeg"><img
                  src="isolation.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="outsidepic.jpeg"><img
                  src="outsidepic.jpeg" class="img-fluid" alt=""></a></div>
            <div class="swiper-slide"><a class="gallery-lightbox" href="apinject.jpeg"><img
                  src="apinject.jpeg" class="img-fluid" alt=""></a></div>
          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Gallery Section -->

    

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questioins</h2>
          <p>1.Timings of hospital and medical officer?</p>
          <p>2.Did they provide quality medicines?</p>
          <p>3.Is there ambulance facilities at the time of emergency?</p>
          
        </div>

      </div>
    </section><!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>RGUKT IIIT Srikakulam(nuzvid)</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>sameena2231@gmail.com<br>aparnaj503@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>9121914032<br>9398544503</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col form-group mt-3">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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

  <!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

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