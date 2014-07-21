<!DOCTYPE html>
<html class="no-js" lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Welcome to SITO</title>
<link rel="stylesheet" href="css/normalize.css">
<link rel="stylesheet" href="css/foundation.css">
<link rel="stylesheet" href="css/foundation-icons.css" />
<link rel="stylesheet" href="css/foundation-icons.[eot/ttf/svg/woff]" />
<link rel="stylesheet" href="css/stylesheet.css" />
<link rel="stylesheet" href="css/common.css" />
<link href='http://fonts.googleapis.com/css?family=Fjalla+One' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Average+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>
<script src="js/vendor/modernizr.js"></script>
</head>
<body>
  
<?php
include "navigation.php";
?>
<!-- Main Page Content and Sidebar -->
<div id="contentWrapper" class="row"> 
  <!-- Start Sidebar -->
    <div class="medium-4 large-3 columns pageSidebar"> 
      <ul class="sub-nav" data-magellan-expedition>
        <li data-slide="1" data-magellan-arrival="#about"> <a id="#about" href="#about">SITO</a></li>
        <li data-slide="2" data-magellan-arrival="#mission"> <a id="#mission" href="#mission">Mission</a></li>
        <li data-slide="3" data-magellan-arrival="#vision"> <a id="#vision" href="#vision">Vision</a></li>
        <li data-slide="4" data-magellan-arrival="#board"> <a id="#board" href="#board">Advisory Board</a></li>
      </ul>
    </div>
  <!-- End Start Sidebar --> 
  <!-- Main Content -->
    <div class="small-12 medium-9 large-10 columns" role="content">
      <a data-magellan-destination="#about" name="about" href="about.php"></a>
      <!-- About Begins -->
      <div id="aboutHome" class="row home slide" data-slide="1" data-stellar-background-ratio="0.5">
        <h1>Who we are!</h1>  
          <div class="row">
            <div class="small-centered medium-10 medium-centered large-8 large-centered columns">
                <p class="summary text-justify">We are you! We are fellow RIT students from diverse backgrounds and fields of study. 
                  We all come together to discuss each other’s ideas, and each member plays a key role to our success. With minimal 
                  supervision, we take it on ourselves to remain focused and on task to deliver outstanding applications. We thrive 
                  on excellence and look to improve ourselves every day.</p>
            </div>
          </div>
      </div>
      <!-- About Ends -->
        <a data-magellan-destination="#mission" name="mission" href="about.php"></a>
      <!-- Mission Begins -->  
        <div id="aboutMission" class="row home slide" data-slide="2" data-stellar-background-ratio="0.5">
          <h1>Mission</h1>
            <div class="row">
              <div class="small-centered medium-10 medium-centered large-8 large-centered columns">
          	    <p class="summary text-justify">
                  The Student IT Office (SITO) is a new exciting way for students to get work experience while
                  providing a valuable service to RIT through the development of technical projects. Although this IT
                  office helps the RIT campus, this also helps the students who run it; they will be getting work
                  experience that is essential to their professional learning and development.
                </p>
              </div>
            </div>
        </div>
      <!-- Mission Ends -->  
        <a data-magellan-destination="#vision" name="vision" href="about.php"></a>
      <!-- Vision Begins-->  
        <div id="aboutVision" class="row home slide" data-slide="3" data-stellar-background-ratio="0.5">
          <h1>Vision</h1>
            <div class="row">
              <div class="small-centered medium-10 medium-centered large-8 large-centered columns">
                <p class="summary text-justify">
                  Our vision is to create a self-directed student group whose purpose is to complete small to
                  medium sized software projects. Students will solicit work from campus-wide academic and business units,
                  utilize project management practices to complete tasks, and design, develop, and test according to ITS
                  development and security standards. This group will provide students an on-going opportunity for experiential
                  learning in business management, project management, and software development life cycle; while providing a
                  valuable service to RIT software needs. A Project Advisory Group will oversee this student endeavor.
                </p>
              </div>
            </div>
        </div>
      <!-- Vision Ends -->  
        <a data-magellan-destination="#board" name="board" href="about.php"></a>
      <!-- Advisory Begins -->  
        <div id="aboutAdvisors" class="row home slide" data-slide="4" data-stellar-background-ratio="0.5">
          <h1>Advisory Board</h1>
          <div class="row" align="center">
            <div class="row">
              <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                <li>
                  <img src="img/ChrisBooth.png" alt="Chris Booth" class="picture"/> <br/>
                  <strong>Chris Booth</strong><br/>
                  <span>Director, Project Management Office</span>
                </li>
                <li>
                  <img src="img/LisaHupf.png" alt="Lisa Hupf" class="picture"/> <br/>
                  <strong>Lisa Hupf</strong><br/>
                  <span>Sr. Business and Technical Analyst</span>
                </li>
                <li>
                  <img src="img/RickMyles.png" alt="Rick Myles" class="picture"/> <br/>
                  <strong>Rick Myles</strong><br/>
                  <span>Enterprise Web Applications Manager</span>
                </li>
                <li>
                  <img src="img/KimSowers.png" alt="Kim Sowers" class="picture"/> <br/>
                  <strong>Kim Sowers</strong><br/>
                  <span>Director, Application Development</span>
                </li>
                <li>
                  <img src="img/JamesVallino.png" alt="James Vallino" class="picture"/> <br/>
                  <strong>James Vallino</strong><br/>
                  <span>Prof. & Chair, Software Engineering</span>
                </li>
                <li>
                  <img src="img/LaurieJacobson.png" alt="Laurie Jacobson" class="picture"/> <br/>
                  <strong>Laurie Jacobson</strong><br/>
                  <span>IT Manager, Application Development</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
      <!-- Advisory Ends -->       
    </div>
  <!-- End Main Content -->  
</div>      
<!-- Main Page Content and Sidebar Ends -->

<!-- Footer -->
<?php
include "footer.php";
?>

<!-- Java Script Libraries -->
  <script src="js/vendor/jquery.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script src="js/vendor/fastclick.js"></script>
  <script src="js/foundation.min.js"></script>
  <script type="text/javascript" src="js/jquery.stellar.min.js"></script>
  <script src="js/common.js"></script>

  <script>
    $(document).foundation({
     
    });
  </script>
  
  </body>
</html>
