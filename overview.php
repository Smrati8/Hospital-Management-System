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
    <title>Overview - KK Prashar Memorial Mother and Child Care Hospital</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

	<!--theme colour-->
	<link rel="stylesheet" id="color" href="css/blue.css">

    <!-- style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
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
                  
                  <li class="dropdown active">
                    <a href="#" class="dropdown-toggle"><i class="fa fa-plus"></i>About Us</a>
                    <ul class="dropdown-menu">                                                                                          
                      <li><a href="overview.php">Overview</a></li>
                      <li><a href="vision-and-mission.php">Vision and Mission</a></li>
                    </ul>
                  </li>
                  <li class="dropdown"><a href="services.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Services</a></li>
                  <li class="dropdown"><a href="appointment.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Appointment</a></li>
                  <li class="dropdown"><a href="staff.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Staff</a></li>
                  <li class="dropdown"><a href="locate-us.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Locate Us</a></li>
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
        	<h1 class="entry-title">Overview</h1>
        </div>
    </section>
    
    
    <div class="sub-page-content">
    	
        
        <div class="container big-font">
        	<h2 class="light bordered main-title"><span>Overview</span></h2>
            <div class="media pull-right clearfix">
            	<div id="carousel-blog" class="carousel slide about-slider default" data-ride="carousel">
                  <!-- Indicators -->
                  <ol class="carousel-indicators">
                    <li data-target="#carousel-blog" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-blog" data-slide-to="1"></li>
                    <li data-target="#carousel-blog" data-slide-to="2"></li>
                  </ol>
                
                  <!-- Wrapper for slides -->
                  <div class="carousel-inner text-center">
                    <div class="item active">
                      <img src="images/about-slider-img1.jpg" width="474" class="img-rounded" alt="" title="">
                    </div>
                    <div class="item">
                      <img src="images/about-slider-img2.jpg" width="474" class="img-rounded" alt="" title="">
                    </div>
                    <div class="item">
                      <img src="images/about-slider-img3.jpg" width="474" class="img-rounded" alt="" title="">
                    </div>
                  </div>
                </div>
            </div>

<p>In 2009 -construction started.<br>
In 2013-fully construct. <br>Hospital is constructed in the memory of <b>Kamala Krishna Prashar</b>.</p>

<h3>Four story building</h3> 
<p></p>
 <h4>Ground Floor</h4>
<p>Running opd pediatrics, NICU(neonatal intensive-care unit) with six bedded & four bedded and is well equipped with radiant warmer (carry new born baby). Double surface LED poto theorpist CPAP(Continuous positive airway pressure) machine, air purifiers, infusion pumps(An infusion pump is a medical device that delivers fluids, such as nutrients and medications, into a patient's body in controlled amounts. Infusion pumps are in widespread use in clinical settings such as hospitals, nursing homes, and in the home.), electronic weighing machines, pulse oximeters, central oxygen supply meter, PICU (Pediatric intensive care unit) with five bedded PICU is also well equipped.</p>

<h4>First Floor</h4>
<p> OPD is well equipped operation theatre -ot table, anaesthesia machine, continous oxygen supply, suction machine, bipolar unipolar cautery, defibrillator, ot lights, cardiac monitor, radiant warmer for new born, pediatric gyno opd, laboratory, wating area, post operative recovery room 
recovery room ( after operation care of patient in recovery room), labour room operation, theatre sterilization room, reception, autoclave room - sterlisation of equipment is done, autoclave machines, boiler, drums, instruments.</p>
 

<h4>Third Floor</h4>
 <p>10 rooms ( all ACs ), one ward, one common kichten, nursing station. <p>

 <h4>Fourth Floor </h4>
  <p>Rooms</p> 

<h4>Lab</h4>
<ul>
<li>Autoanalyzer</li> 
<li>Microscope</li> 
<li>Contrifuse machine</li> 
<li>Chlorimeter</li> 
<li>Incubator(In biology, an incubator is a device used to grow and maintain microbiological cultures or cell culture)</li> 
</ul>
        </div>
        <div class="height20"></div>
   
    
    <div class="clr"></div>    
    </div><!--end sub-page-content-->
    
    <div class="colourfull-row"></div>
     <?php include_once('footer.php'); ?>
   </div>
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
