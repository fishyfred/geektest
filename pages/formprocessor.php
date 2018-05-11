<?php
/************************
*	PHP Form Processor	*
*************************/

//Trim removes white space after strip_tags gets rid of any html, javascript, etc tags from the input
$fname = trim(strip_tags($_POST['fname']));
$lname = trim(strip_tags($_POST['lname']));
$email = trim(strip_tags($_POST['email']));
$phone = trim(strip_tags($_POST['phone']));
$state = trim(strip_tags($_POST['state']));
$services = trim(strip_tags($_POST['services']));
$comments = trim(strip_tags($_POST['comments']));

//Creating a single variable to format and hold all the inputs
$body = "
Website Contact Form
First Name: $fname
Last Name: $lname
Email Address: $email
Phone Number: $phone
State: $state
Services: $services
Comments: $comments";

mail('fwinton@platt.edu','Geek Contact Submission',$body,$email);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>Geek Inc. - Contact</title>
   <!--[if lt IE 9]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <meta name="viewport" content="width=device-width">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>
  <link href="../css/reset.css" rel="stylesheet" type="text/css" />
  <link href="../css/style.css" rel="stylesheet" type="text/css" />
</head>
<body class="dcontact interior">
<div id="container" class="cf">
  <header>
    <h1><a href="../index.html">Geek Inc.</a></h1>
    <ul class="social">
      <li><a href="http://twitter.com"><i class="fab fa-twitter-square"></i>Twitter</a></li>
      <li><a href="http://instagram.com"><i class="fab fa-instagram"></i>Instagram</a></li>
      <li><a href="https://facebook.com"><i class="fab fa-facebook-square"></i>Facebook</a></li>
      <li><a href="mailto:email@domain.com"><i class="far fa-envelope"></i>Email</a></li>
    </ul>
  </header>
  <nav class="topmenu">
    <ul class="global">
      <li class="nportfolio"><a href="portfolio.html">Portfolio</a></li>
      <li class="nservices"><a href="services.html">Services</a></li>
      <li class="nstaff"><a href="staff.html">Staff</a></li>
      <li class="narticles"><a href="articles.html">Articles</a></li>
      <li class="ncontact"><a href="contact.html">Contact</a></li>
    </ul>
    <ul class="ddmenu">
      <li><a href="#"><i class="fas fa-angle-double-down"></i>Select from Drop Down</a>
        <ul class="submenu">
          <li><a href="http://www.platt.edu" target="_blank">Platt College</a></li>
          <li><a href="http://www.plattonline.com" target="_blank">Plattonline</a></li>
          <li><a href="http://www.smashingmagazine.com" target="_blank">Smashing Magazine</a></li>
          <li><a href="http://www.dndblog.com" target="_blank">DND Blog</a></li>
        </ul>
      </li>
    </ul>
  </nav>
  <div id="featured">
    
  </div>
  <main>
    <h3>Success</h3>
    
    <?php
    //if the email was sent, show the success message
      echo '<div class="success">Thanks '.$fname.'. Your message was sent. Thank you for your time.</div>';
    ?>
  </main>
  <aside>
    <figure class="adv">
      <img src="../images/santorini.jpg" alt="Travel to Santorini" />
      <figcaption>
        <h4>Great Looking Vacation spot</h4>
        <p>Quisque accumsan eleifend dolor, nec bibendum nibh ultricies at. Nunc convallis risus sit amet augue bibendum non lobortis eros interdum. Maecenas quis risus felis, at volutpat elit. Proin vel nisl in orci venenatis suscipit eget sed lectus.</p>
      </figcaption>
    </figure>


  </aside>



</div>
word
<!-- 
<section class="gallery">
  <a href="#">More</a>
</section>  
-->

<footer class="lower">
  <nav class="footnav">
    <h6><a href="../index.html">Geek Inc.</a></h6>
    <ul class="global">
      <li class="nportfolio"><a href="portfolio.html">Portfolio</a></li>
      <li class="nservices"><a href="services.html">Services</a></li>
      <li class="nstaff"><a href="staff.html">Staff</a></li>
      <li class="narticles"><a href="articles.html">Articles</a></li>
      <li class="ncontact"><a href="contact.html">Contact</a></li>
    </ul>
  </nav>
</footer>

</body>
</html>