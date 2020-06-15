<?php
	include_once 'includes/config.php';
	if(isset($_SESSION['userid']))
	{
		$userid = $_SESSION['userid'];
	}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Locate Us - KK Prashar Memorial Mother and Child Care Hospital</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<!--theme colour-->
	<link rel="stylesheet" id="color" href="css/blue.css">

    <!-- style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
 
  </head>
  <body class="fixed-header">
	
     <div id="wrapper">
    
    
    <header class="medicom-header">
    	<div class="solid-row"></div>
        <div class="container">
        	<nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="image" title="KK Prashar Memorial Mother and Child Care Hospital"></a>
              </div>
        
            <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse navbar-right medical-nav" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                  <li class="dropdown"><a href="index.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Home</a></li>
                  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle"><i class="fa fa-plus"></i>About Us</a>
                    <ul class="dropdown-menu">                                                                                          
                      <li><a href="overview.php">Overview</a></li>
                      <li><a href="vision-and-mission.php">Vision and Mission</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="services.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Services</a></li>
                  <li class="dropdown"><a href="appointment.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Appointment</a></li>
                  <li class="dropdown"><a href="staff.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Staff</a></li>
                  <li class="dropdown active"><a href="locate-us.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Locate Us</a></li>
					<?php
					if(isset($userid))
					{
					?>
						<li class="dropdown"><a href="dashboard.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Dashboard</a></li>
						<li class="dropdown"><a href="logout.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Logout</a></li>
					<?php
					}
					else
					{
					?>
						<li class="dropdown"><a href="logout.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Login</a></li>
					<?php
					}
					?>
                </ul>
              </div><!-- /.navbar-collapse -->
            </nav>

        </div>

    </header>
    
    
    <section class="sub-page-banner text-center" data-stellar-background-ratio="0.3">
    <div class="overlay"></div>
    	<div class="container">
        	<h1 class="entry-title">Locate Us</h1>
        </div>
    </section>
    
    <div class="sub-page-content">
    	<div class="container">

        	<h2 class="light bordered"><span>Locate Us</span></h2>
            <div class="row" style="padding-bottom:40px;">
            	<div class="col-md-12">
                	<div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3373.4075506828194!2d75.64350200000003!3d32.27401900000002!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391c7f40184f1cbb%3A0xae65a124424187ba!2sKK+Memorial+Prashar+Mother+and+Child+Care+Hospital!5e0!3m2!1sen!2sin!4v1429181535485" width="600" height="450" frameborder="0" style="border:0"></iframe></div>
                </div>
            </div>
            
            <div class="row">
            	<div class="col-md-8">
                	<h2 class="light bordered">Give us a <span>Message</span></h2>
                    <div class="contact-form">
                    <div id="error" class="" style="display:none;"></div>
                    <div id="message-contact" class="success" style="display:none;">Thank you! we'll contact you shortly.</div>
                    <form name="contact_form" id="contact_form" method="post" onSubmit="return false;">
                    <input type="text" name="name" id="name" placeholder="Name" onKeyPress="removeContactChecks();">
                    <input type="text" name="email_address" id="email_address" placeholder="Email Address" onKeyPress="removeContactChecks();">
                    <input type="text" name="subject" id="subject" placeholder="Subject">
                    <textarea placeholder="Message" name="msg" id="msg"></textarea>
                    <input type="submit" class="btn btn-default" value="Submit" onClick="validateContact();">
                    </form>
                    </div>
                </div>
                <div class="col-md-4">
                	<h2 class="light bordered">get in <span>touch</span></h2>
                    <div class="get-in-touch-widget">
                    	<ul class="list-unstyled">
                        <li><i class="fa fa-phone"></i>0186-2228077</li>
                        <li><i class="fa fa-envelope"></i><a href="#.">memorialkk@gmail.com</a></li>
                      <!--<li><i class="fa fa-globe"></i><a href="#.">www.medicom-clinic.com</a></li>-->
                        <li><i class="fa fa-clock-o"></i>Mon - Sat 9:00am - 6:00 pm</li>
                        <li><i class="fa fa-map-marker"></i>Indira Colony, Shastri Nagar, Pathankot, Punjab 145001</li>
                        </ul>
                    </div>
                    
                    <ul class="social-rounded">
                    	
<li><a href="https://www.facebook.com/pages/KK-Memorial-Prashar-Mother-and-Child-Care-Hospital/1584523665161920?fref=ts" target="_blank"><i class="fa fa-facebook"></i></a></li>
 
                	<li>
<a href="https://twitter.com/kkmemorial4" target="_blank"><i class="fa fa-twitter"></i></a></li>
                    	<!--<li><a href="#."><i class="fa fa-google-plus"></i></a></li>-->
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
    
    
    <div class="colourfull-row"></div>
    <?php include_once('footer.php'); ?>
    </div><!--end #wrapper-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/forms-validation.js"></script>
  </body>
</html>
