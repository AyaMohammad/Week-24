
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css">
    <link rel="stylesheet" type="text/css" href="main.css">

    <title>porfolio</title>

  </head>
  <body>
    <!-- Navbaar  -->

    <?php
      include 'menu.php';
    ?>
 

    <?php
      include 'carousel.php';
    ?>

    <!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <div id="Aboutme">
  <h3 class="w3-center">Who is Aya?</h3>
  <p class="w3-center"><em>Programming is an integral part of my life. I love it</em></p>
  <p>I am an ambitious person. I do what i love and love what i do. I do not like to be serious all the time. I often joke and have my own atmosphere, we can do what we want evrytime with laugh(in my view), but if i have to finish something seriously i do my best to finish it .
    I am someone who likes to work in his own office with his computer, everything related to the computer i care about, especially programming and code.</p>
  <div class="w3-row">
    <div class="w3-col m6 w3-center w3-padding-large">
      <p><b><i class="fa fa-user w3-margin-right"></i>Aya Mohammad <br> 21-06-2000 </b></p><br>
      <img src="img/ik8.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="my foto" width="500" height="200">
      
    </div>

    <!-- About me  -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
        dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</p>
    </div>
  </div>
  <p class="w3-large w3-center w3-padding-16">My skills:</p>
  <p class="w3-wide"></i>HTML/CSS</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:95%">95%</div>
  </div>
  <p class="w3-wide">JavaScript</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:80%">80%</div>
  </div>
  <p class="w3-wide">PHP/MYSQL</p>
  <div class="w3-light-grey">
    <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:50%">70%</div>
  </div>
  </div>
</div>


<!-- Portfolio -->
<div id="Portfolio">
<div class="w3-content w3-container w3-padding-64" >
  <h3 class="w3-center">PORTFOLIO <br> <br> My Projects</h3>
  <br>
  <?php
    include 'gallery.php';
  ?>
</div>
</div>

	
    <?php
      include 'contact.php';
    ?>


   <?php
      include 'footer.php';
    ?>


</body>
</html>