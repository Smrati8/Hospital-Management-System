f<?php
	include_once 'includes/config.php';
	if(isset($_SESSION['userid']))
	{
		$userid = $_SESSION['userid'];
	}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Vision and Mission - KK Prashar Memorial Mother and Child Care Hospital</title>
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
        	<h1 class="entry-title">Vision and Mission</h1>
        </div>
    </section>
    
    
    <div class="sub-page-content">
    	
        
        <div class="container big-font">
        	<h2 class="light bordered main-title"><span>Vision and Mission </span></h2>
            <h6>Future Plans</h6>
				<ul>
				<li>Expansion in field of surgery . </li>
				<li>laparoscopic surgery for infertility( in vitro fertilization).</li>
				<li>Expansion in cosmetic surgery .</li>
				<li>Secondary level NICU. </li>
				<li>Introduce teritary level NICU equipped with mechanical ventilators.</li>
				<li>Cutaneous bilirubin meter. </li>
				<li>Jaundice blood gas analysis machine and portable x-ray machine,  defibrillate meter .</li>
				<li>Planned to get an accredited purchasing unit from NNF (National Neonatology Forum of India). </li>
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