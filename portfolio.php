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
        <li data-slide="1" data-magellan-arrival="#TigerCenter"> <a id="#TigerCenter" href="#TigerCenter">Tiger Center</a></li>
        <li data-slide="2" data-magellan-arrival="#Newsroom"> <a id="#Newsroom" href="#Newsroom">Virtual Newsroom</a></li>
        <li data-slide="3" data-magellan-arrival="#TeamBuilder"> <a id="#TeamBuilder" href="#TeamBuilder">Team Builder</a></li>
        <li data-slide="4" data-magellan-arrival="#ImagineRIT"> <a id="#ImagineRIT" href="#ImagineRIT">Imagine RIT</a></li>
        <li data-slide="5" data-magellan-arrival="#SISExtension"> <a id="#SISExtension" href="#SISExtension">SIS Extension</a></li>
      </ul>
    </div>
  <!-- End Start Sidebar --> 
  <!-- Main Content -->
    <div class="small-12 medium-9 large-10 columns" role="content">
      <!-- TigerCenter Begins -->
      <div id="tigerCenter" class="row home slide" data-slide="1" data-stellar-background-ratio="0.5">
        <a data-magellan-destination="#TigerCenter" name="TigerCenter" href="portfolio.php"></a>
          <h1>Tiger Center</h1>
          <div class="row" align="center">
            <div class="row">
            <!-- TigerCenter Slideshow Begins -->
      			<div class="medium-centered-6 large-centered-6 columns">
      				<div id="teamSlideshow" class="medium-12 large-12 columns">
      					<ul class="example-orbit" data-orbit>
      					  <li>
      					  	<img src="img/TcHome.png" class="portfolioslider" alt="slide 1">
      					    <div class="orbit-caption">
      					      	Google like, smart class search
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/TcAutocomplete.png" class="portfolioslider" alt="slide 2">
      					    <div class="orbit-caption">
      					      	Automatically completes the list of classes while you are thinking and typing
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/TcResults.png" class="portfolioslider" alt="slide 3">
      					    <div class="orbit-caption">	
						            Quick, and accurate class search results
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/TcFilter.png" class="portfolioslider" alt="slide 4">
      					    <div class="orbit-caption">
      					      	Easy to use results filter
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/TcDetails.png" class="portfolioslider" alt="slide 4">
      					    <div class="orbit-caption">
      					      	Get the class details with one click at the same page
      					    </div>
      					  </li>
      					</ul>
      				</div>	
      			</div>
      			<!-- TigerCenter Slideshow Ends -->
      			<div class ="row">
      			 <div class="projectSummary">
                <p class="text-justify">The purpose of the Tiger Center for Class Search as well as Class Search Results is to redesign 
                  and rebuild the current SIS Class Search workflow in order to address the most frequent usability issues students at RIT currently 
                  face. After extensive research the most commonly found usability issues had to do with “too many clicks”, confusing navigation, 
                  missing information/features, and default values. The Tiger Center's goal is to reduce the usability issues now, and improve the RIT 
                  student user experience. Through using the Tiger Center students will be more efficient and spend less time searching for the classes 
                  they need.<br/><br/>
                </p>
                <span class="appLink text-center">Check it out: <a href="https://classsearchbeta.rit.edu/classSearchBeta" target="_blank">Tiger Center</a></span>
              </div>
      			</div>     
          </div>
        </div>
      </div>
      <!-- TigerCenter Ends -->  
      <!-- NewsRoom Begins -->
      <div id="newsRoom" class="row home slide" data-slide="2" data-stellar-background-ratio="0.5">
        <a data-magellan-destination="#Newsroom" name="Newsroom" href="portfolio.php"></a>
          <h1>Virtual Newsroom</h1>
          <div class="row" align="center">
            <div class="row">
            <!-- NewsRoom Slideshow Begins -->
      			<div class="medium-centered-6 large-centered-6 columns">
      				<div id="teamSlideshow" class="medium-12 large-12 columns">
      					<ul class="example-orbit" data-orbit>
      					  <li>
      					  	<img src="img/NrWelcome.png" class="portfolioslider" alt="slide 1">
      					    <div class="orbit-caption">
      					      	The Virtual Newsroom is an application that allows photojournalism and journalism student work together and collaborate on projects.
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/NrDashboard.png" class="portfolioslider" alt="slide 2">
      					    <div class="orbit-caption">
      					      	Personal profile pages for every student!
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/NrStory.png" class="portfolioslider" alt="slide 3">
      					    <div class="orbit-caption">
						            Team workspaces for students to group their work together as well as check off team tasks!
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/NrPublic.png" class="portfolioslider" alt="slide 4">
      					    <div class="orbit-caption">
      					      	A public Newsroom for students to display their work to anyone outside RIT!
      					    </div>
      					  </li>
      					</ul>
      				</div>	
      			</div>
      			<!-- NewsRoom Slideshow Ends -->
      			<div class="row">
              <div class="projectSummary">
        			  <p class="text-justify">When journalism and photojournalism students need to collaborate on news stories,
          			   there are integrated solutions that can service all of their needs. They tend to use web applications
          			   such as Trello to help manage their story, their progress, and the tasks that still need to be completed.
          			   They may use Google Drive to manage all of the documents needed for the story to be completed and to be
          			   able to collaborate on these documents.  Finally, The students may use a new publishing site to post the
          			   final versions of their stories.  All of these solutions are great, but they aren't integrated.
          			   The goal of News Room is to integrate student collaboration, project management,
          			   and story publishing all into one solution.  Through this solution students will be able
          			   to go to one web application and be able to manage everything in the lifecycle of their story.<br/><br/>
                </p>
                <span class="appLink text-center">Check it out: <a href="http://www.rit.edu/cias/virtualworkspaceatrit/" target="_blank">Virtual NewsRoom @ RIT</a></span>
              </div>
      			</div>       
          </div>
        </div>
      </div>
      <!-- NewsRoom Ends --> 
      <!-- TeamBuilder Begins -->
      <div id="teamBuilder" class="row home slide" data-slide="3" data-stellar-background-ratio="0.5">
        <a data-magellan-destination="#TeamBuilder" name="TeamBuilder" href="portfolio.php"></a>        
          <h1>Team Builder</h1>
          <div class="row" align="center">
            <div class="row">
            <!-- TeamBuilder Slideshow Begins -->
      			<div class="medium-centered-6 large-centered-6 columns">
      				<div id="teamSlideshow" class="medium-12 large-12 columns">
      					<ul class="example-orbit" data-orbit>
      					  <li>
      					  	<img src="img/TbWelcome.png" class="portfolioslider" alt="slide 1">
      					    <div class="orbit-caption">
      					      	Welcome to TeamBuilder! Your first step to get your ideas out
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/TbProfile.png" class="portfolioslider" alt="slide 2">
      					    <div class="orbit-caption">
      					      	View innovators profiles, and build your own
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/TbProject.png" class="portfolioslider" alt="slide 3">
      					    <div class="orbit-caption">			      	
						            View Project pages to participate or see updates
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/TbNewProject.png" class="portfolioslider" alt="slide 4">
      					    <div class="orbit-caption">
      					      	You got an idea? Great!, Post it and build a team
      					    </div>
      					  </li>   
					        <li>
      					  	<img src="img/TbSearch.png" class="portfolioslider" alt="slide 4">
      					    <div class="orbit-caption">
      					      	The ability to search current projects
      					    </div>
      					  </li>
      					</ul>
      				</div>	
      			</div>
      			<!-- TeamBuilder Slideshow Ends -->
      			<div class="row">
      			 <div class="projectSummary">
                <p class="text-justify">For students and faculty who desire an improved and easier group creation process for innovative 
                  ideas, the Innovation Project Team Builder is a web application that aids in sharing, searching and forming innovative 
                  project groups that matches users based on certain skill sets and interests. Unlike the current NOVA application, this 
                  system will be more focused on group creation and will be easier to learn and use, in terms of usability.<br/><br/>
                </p>
                <span class="appLink text-center">Check it out: <a href="http://www.rit.edu/cias/virtualworkspaceatrit/" target="_blank">TeamBuilder</a></span>
              </div>
      			</div>       
          </div>
        </div>
      </div>
      <!-- TeamBuilder Ends -->
      <!-- ImagineRIT Begins -->
      <div id="imagineRIT" class="row home slide" data-slide="4" data-stellar-background-ratio="0.5">
        <a data-magellan-destination="#ImagineRIT" name="ImagineRIT" href="portfolio.php"></a>  
          <h1>Imagine RIT Proposal System</h1>
          <div class="row" align="center">
            <div class="row">
            <!-- ImagineRIT Slideshow Begins -->
      			<div class="medium-centered-6 large-centered-6 columns">
      				<div id="teamSlideshow" class="medium-12 large-12 columns">
      					<ul class="example-orbit" data-orbit>
      					  <li>
      					  	<img src="img/IrHome.png" class="portfolioslider" alt="slide 1">
      					    <div class="orbit-caption">
      					      	More consistent RIT branding and easy access links!
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/IrProfile.png" class="portfolioslider" alt="slide 2">
      					    <div class="orbit-caption">
      					      	Search your course subject by typing it in with autocomplete!
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/IrRequest.png" class="portfolioslider" alt="slide 3">
      					    <div class="orbit-caption">
                      View your course names when they are in your shopping cart!
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/IrEx.png" class="portfolioslider" alt="slide 4">
      					    <div class="orbit-caption">
      					      	GPA Model to calculate projected grades on the grades page
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/IrElectrocuting.png" class="portfolioslider" alt="slide 4">
      					    <div class="orbit-caption">
      					      	GPA Model to calculate projected grades on the grades page
      					    </div>
      					  </li>
      					</ul>
      				</div>	
      			</div>
      			<!-- ImagineRIT Slideshow Ends -->
      			<div class="row">
      			  <div class="projectSummary">
                <p class="text-justify">The purpose of this project is to update and refine the current Imagine RIT 
                  application so that the application for a proposal is more clear, more user friendly, and overall a 
                  better experience when using the app. The application takes projects proposals from RIT affiliated 
                  users only, and stores the data from the applications. Projects approved by the admin are placed in a 
                  respective time slot and featured on a Imagine RIT schedule webpage viewable to all. Overall, the Imagine 
                  RIT app makes creating a project proposal as well as planning your day at Imagine RIT much easier.<br/><br/>
                </p>
                <span class="appLink text-center">Check it out: <a href="http://www.rit.edu/imagine/proposals" target="_blank">Imagine RIT Proposal System</a></span>
              </div>
      			</div>      
          </div>
        </div>
      </div>
      <!-- ImagineRIT Ends -->   
      <!-- SIS Extension Begins -->
      <div id="sisExtension" class="row home slide" data-slide="5" data-stellar-background-ratio="0.5">
        <a data-magellan-destination="#SISExtension" name="SISExtension" href="portfolio.php"></a>
          <h1>SIS Extension</h1>
          <div class="row" align="center">
            <div class="row">
            <!-- SIS Extension Slideshow Begins -->
      			<div class="medium-centered-6 large-centered-6 columns">
      				<div id="teamSlideshow" class="medium-12 large-12 columns">
      					<ul class="example-orbit" data-orbit>
      					  <li>
      					  	<img src="img/studentCenter.png" class="portfolioslider" alt="slide 1">
      					    <div class="orbit-caption">
      					      	More consistent RIT branding and easy access links!
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/Autocomplete.png" class="portfolioslider" alt="slide 2">
      					    <div class="orbit-caption">
      					      	Search your course subject by typing it in with autocomplete!
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/ShoppingCart.png" class="portfolioslider" alt="slide 3">
      					    <div class="orbit-caption">
                        View your course names when they are in your shopping cart!
      					    </div>
      					  </li>
      					  <li>
      					  	<img src="img/GPACalculator.png" class="portfolioslider" alt="slide 4">
      					    <div class="orbit-caption">
      					      	GPA Model to calculate projected grades on the grades page
      					    </div>
      					  </li>
      					</ul>
      				</div>	
      			</div>
      			<!-- SIS Extension Slideshow Ends -->
      			<div class="row">
      			  <div class="projectSummary">
                <p class="text-justify">The SIS extension is an RIT student developed application which enhances Campus Solutions Student Self-Service. 
                  The Extension is currently supported by ITS, and will be developed, maintained, and supported by ITS and SITO. The SIS Extension is 
                  intended for Student Self-Service only. This includes registering for classes as well as planning a student's schedule. 
                  Overall, this makes the SIS system much more user friendly for people who need to use the services it provides.<br/><br/>
                </p>
                <span class="appLink text-center">Check it out: <a href="http://www.rit.edu/sisextension" target="_blank">SIS Extension</a></span>
              </div>
      			</div>      
          </div>
        </div>
        <!-- SIS Extension Ends -->
      </div>    
  <!-- End Main Content -->  
</div>   
<!-- Main Page Content and Sidebar Ends -->
</div>

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
     orbit:{
        animation: 'slide', // Sets the type of animation used for transitioning between slides, can also be 'fade'
        timer_speed: 5000, // Sets the amount of time in milliseconds before transitioning a slide
        pause_on_hover: true, // Pauses on the current slide while hovering
        resume_on_mouseout: false, // If pause on hover is set to true, this setting resumes playback after mousing out of slide
        next_on_click: true, // Advance to next slide on click
        animation_speed: 500, // Sets the amount of time in milliseconds the transition between slides will last
        stack_on_small: false,
        navigation_arrows: true,
        slide_number: false,
        slide_number_text: 'of',
        container_class: 'orbit-container',
        stack_on_small_class: 'orbit-stack-on-small',
        next_class: 'orbit-next', // Class name given to the next button
        prev_class: 'orbit-prev', // Class name given to the previous button
        timer_container_class: 'orbit-timer', // Class name given to the timer
        timer_paused_class: 'paused', // Class name given to the paused button
        timer_progress_class: 'orbit-progress', // Class name given to the progress bar
        timer_show_progress_bar: true, // If the progress bar should get shown (false skips computation)
        slides_container_class: 'orbit-slides-container', // Class name given to the
        bullets_container_class: 'orbit-bullets',
        slide_selector: 'li', // Default is '*' which selects all children under the container
        bullets_active_class: 'active', // Class name given to the active bullet
        slide_number_class: 'orbit-slide-number', // Class name given to the slide number
        caption_class: 'orbit-caption', // Class name given to the caption
        active_slide_class: 'active', // Class name given to the active slide
        orbit_transition_class: 'orbit-transitioning',
        bullets: true, // Does the slider have bullets visible?
        circular: true, // Does the slider should go to the first slide after showing the last?
        timer: true, // Does the slider have a timer active? Setting to false disables the timer.
        variable_height: false, // Does the slider have variable height content?
        swipe: true
      }
    });
  </script>
  
  </body>
</html>
