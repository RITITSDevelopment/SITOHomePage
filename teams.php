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
          <li data-magellan-arrival="team"> <a id="team" href="#team">Current Team</a></li>
          <li data-magellan-arrival="previous"> <a id="previous" href="#previous">Previous Teams</a></li>
      </ul>
    </div>
  <!-- End Start Sidebar --> 
  <!-- Main Content -->
  <div class="small-12 medium-9 large-10 columns" role="content">
    <a data-magellan-destination="#team" name="team" href="#"></a>  
      <div id="currentTeam" class="row home slide">
        <h1 data-magellan-destination="team">Current Team</h1>
          <div class="row" align="center">
            <div class="row">
              <ul class="small-block-grid-2 medium-block-grid-2 large-block-grid-3">
                <li>
                  <img src="img/AmmarAlmaatouq.png" class="picture"><br/>
                  <a href="https://www.linkedin.com/pub/ammar-almaatouq/3b/80a/269" target="_blank"><span>Ammar Almaatouq</span></a>
                  <p>Business Analyst</p>
                </li>
		<li>
                  <img src="img/VanessaCastro.png" class="picture"><br/>
                  <a href="https://www.linkedin.com/pub/vanessa-castro/61/520/239/en" target="_blank"><span>Vanessa Castro</span></a>
                  <p>Business Analyst</p>
                </li>
	        <li>
                  <img src="img/ChelseaTriebwasser.png" class="picture"><br/>
                  <a href="https://www.linkedin.com/in/chelseatriebwasser" target="_blank"><span>Chelsea Triebwasser</span></a>
                  <p>Web Designer</p>
                </li>
                <li>
                  <img src="img/ChrisEncoh.png" class="picture"><br/>
                  <strong>Chris Encoh</strong>
                  <p>Web Developer</p>
                </li>
               <li>
                  <img src="img/RichardKapadia.png" class="picture"><br/>
		    <strong>Richard Kapadia</strong>
                  <p>Web Developer</p>
                </li>
                <li>
                  <img src="img/PolicarpQuarcoo.png" class="picture"><br/>
                  <strong>Policarp Quarcoo</strong>
                  <p>Web Developer</p>
                </li>
		<li>
                  <img src="img/JasonPeretz.png" class="picture"><br/>
                  <a href="https://www.linkedin.com/pub/jason-peretz/61/550/462" target="_blank"><span>Jason Peretz</span></a>
                  <p>Web Developer</p>
                </li>
              </ul>
            </div>
          </div>      
      </div> 
    <a data-magellan-destination="#previous" name="previous" href="#"></a>
      <div id="pastTeams" class="row home slide">
        <h1 data-magellan-destination="previous">Previous Teams</h1>
          <dl class="accordion" data-accordion id="teamsDiv">
           <dd>
              <a href="#panel2"><i id="plus" class="fi-plus"></i> Spring 2013</a> 
                <div id="panel2" class="content">
                  <div class="row" align="center">
                    <div class="row">
                      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                        <li>
			    <img src="img/AmmarAlmaatouq.png" class="picture"> </br>
			    <a href="https://www.linkedin.com/pub/ammar-almaatouq/3b/80a/269" target="_blank"><span>Ammar Almaatouq</span></a>
			    <p>Business Analyst</p>
			</li>
			<li>
			    <img src="img/MichaelNguyen.png" class="picture"></br>
			    <a href="https://www.linkedin.com/pub/michael-nguyen/68/779/541" target="_blank"><span>Michael Nguyen</span></a>
			    <p>Web Designer</p>
			</li>
			<li>
		           <img src="img/JaredSchutt.png" class="picture"> </br>
			   <a href="https://www.linkedin.com/pub/jared-schutt/52/926/906" target="_blank"><span>Jared Schutt</span></a>
			   <p>Web Developer</p>
			</li>
			<li>
			    <img src="img/WayneStarr.png" class="picture"> </br>
			    <strong>Wayne Starr</strong>
			    <p>Web Developer</p>
			</li>
			<li>
			    <img src="img/RichardKapadia.png" class="picture"> </br>
			    <strong>Richard Kapadia</strong>
			    <p>Web Developer</p>
                      </ul>
                    </div>
                  </div>
                </div>
              </dd>
	    <dd>
              <a href="#panel2"><i id="plus" class="fi-plus"></i> Fall 2013</a> 
                <div id="panel2" class="content">
                  <div class="row" align="center">
                    <div class="row">
                      <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                        <li>
                          <img src="img/ChrisWong.png" class="picture"><br/>
                          <a href="https://www.linkedin.com/in/csw5545" target="_blank"><span>Chris Wong</span></a>
                          <p>Web Developer</p>
                        </li>
                        <li>
                          <img src="img/MichaelNguyen.png" class="picture"><br/>
                          <a href="https://www.linkedin.com/pub/michael-nguyen/68/779/541" target="_blank"><span>Michael Nguyen</span></a>
                          <p>Web Designer</p>
                        </li>
                        <li>
                          <img src="img/JaredSchutt.png" class="picture"><br/>
                          <a href="https://www.linkedin.com/pub/jared-schutt/52/926/906" target="_blank"><span>Jared Schutt</span></a>
                          <p>Web Developer</p>
                        </li>
                        <li>
                          <img src="img/JamesHughes.png" class="picture"><br/>
                          <a href="https://www.linkedin.com/in/jamespatrickhughes" target="_blank"><span>James Hughes</span></a>
                          <p>Business Analyst</p>
                        </li>
                        <li>
                          <img src="img/male.jpg" class="picture"><br/>
                          <a href="https://www.linkedin.com/in/tahsinshamsul" target="_blank"><span>Tahsin Shamsul</span></a>
                          <p>Web Developer</p>
                        </li>
                        <li>
                          <img src="img/SagarDaga.png" class="picture"> <br/>
                          <a href="https://www.linkedin.com/pub/sagar-daga/65/3b1/60" target="_blank"><span>Sagar Daga</span></a>
                          <p>Web Developer</p>
                        </li>
                        <li>
                          <img src="img/CalvinDRozario.png" class="picture"> <br/>
                          <strong>Calvin D'Rozario</strong>
                          <p>Web Developer</p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </dd>
              <dd>
                <a href="#panel1"><i class="fi-plus"></i> Summer 2013</a>
                  <div id="panel1" class="content">
                    <div class="row" align="center">
                      <div class="row">
                        <ul class="small-block-grid-1 medium-block-grid-2 large-block-grid-3">
                          <li>
                            <img src="img/ChrisWong.png" class="picture"> </br>
                            <a href="https://www.linkedin.com/in/csw5545" target="_blank"><span>Chris Wong</span></a>
                            <p>Web Developer</p>
                          </li>
                          <li>
                            <img src="img/JaredSchutt.png" class="picture"> </br>
                            <a href="https://www.linkedin.com/pub/jared-schutt/52/926/906" target="_blank"><span>Jared Schutt</span></a>
                            <p>Web Developer</p>
                          </li>
                          <li>
                            <img src="img/JamesHughes.png" class="picture"> </br>
                            <a href="https://www.linkedin.com/in/jamespatrickhughes" target="_blank"><span>James Hughes</span></a>
                            <p>Business Analyst</p>
                          </li>
                          <li>
                              <img src="img/male.jpg" class="picture"> </br>
                              <strong>Jeremy Schulman</strong>
                              <p>Web Developer</p>
                          </li>
                        </ul> 
                      </div>   
                    </div>
                  </div>
                </dd>      
              </dl>
            </div>
          </div>             
    </div>
  <!-- Main Content Ends -->  
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
