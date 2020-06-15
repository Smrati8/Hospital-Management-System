<?php
	include_once 'includes/config.php';
	if(isset($_SESSION['userid']))
	{
		$userid = $_SESSION['userid'];
	}
?>

<!DOCTYPE html>
<html>
  
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Home - KK Prashar Memorial Mother and Child Care Hospital</title>
    <meta name="keywords" content="">
	<meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
	
    <!--theme colour-->
	<link rel="stylesheet" id="color" href="css/blue.css">
    
    <!-- style -->
    <link href="css/style.css" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">
	
    <!-- CSS STYLE -->
    <link rel="stylesheet" href="css/revolution_style.css" media="screen">
		
	<!-- REVOLUTION BANNER CSS SETTINGS -->
	<link rel="stylesheet" href="css/settings.css" media="screen">

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->

	<script src="js/jquery.js"></script>
     <!-- jQuery KenBurn Slider  -->	
	<script src="js/jquery.themepunch.plugins.min.js"></script>			
    <script src="js/jquery.themepunch.revolution.min.js"></script>	

  </head>
  <body>
    
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
                  <li class="dropdown active"><a href="index.php" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i>Home</a></li>
                  
                  <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-plus"></i>About Us</a>
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

    
    
    <div class="tp-banner-container index-rev-slider">
		<div class="tp-banner" >
            <ul>	
                <!-- FADE -->
                <li data-transition="fade" data-slotamount="10" data-thumb=""> 										
                    <img src="images/banner2.jpg" alt="image" />
                    <!--<div class="caption sft big_white" data-x="50" data-y="165" data-speed="1000" data-start="1700" data-easing="easeOutExpo"><strong>heart specialist</strong></div>
                    <div class="caption sfr medium_grey" data-x="50" data-y="240" data-speed="1000" data-start="2500" data-easing="easeOutExpo">If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur<br>adipiscing elit. Ut volutpat eros  adipiscing elit Ut volutpat.</div>-->
                </li>
               
                
                <!-- SLIDERIGHT -->
                <li data-transition="slideright" data-slotamount="6" data-thumb=""> 
                    <img src="images/banner1.jpg" alt="image" />	
                    <!--<div class="caption sft big_white" data-x="260" data-y="190" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong>emergency services</strong></div>
                    <div class="caption sfb medium_grey text-center" data-x="140" data-y="270" data-speed="1500" data-start="2500" data-easing="easeOutExpo">If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur adipiscing elit. Ut<br>volutpat eros  adipiscing elit Ut volutpat. aliquam erat volutpat.</div>-->
                </li>
                
                
                <!-- SLIDEUP -->
                <li data-transition="slideup" data-slotamount="15" data-thumb=""> 
                	<img src="images/banner3.jpg" alt="image" />
                    <!--<div class="caption sfr" data-x="600" data-y="0" data-speed="900" data-start="1500" data-easing="easeOutExpo">
                    <img src="images/tech-women.png" alt=""/></div>
                    <div class="caption sft big_white" data-x="25" data-y="165" data-speed="1500" data-start="1700" data-easing="easeOutExpo"><strong>better technology</strong></div>
                    <div class="caption sfr medium_grey" data-x="25" data-y="240" data-speed="1500" data-start="2500" data-easing="easeOutExpo">If you need a doctor for to consectetuer Lorem ipsum dolor, consectetur<br>adipiscing elit. Ut volutpat eros  adipiscing elit Ut volutpat. </div>-->
                </li>
         </ul>		
        </div>					
	</div>
    
    
    <div class="clearfix"></div>
    
    <div class="content-index">
    
    <div class="row text-center no-margin">
    	<div class="col-md-4 bg-default">
        <div class="home-box">
        <span class="glyphicon glyphicon-tint"></span>
        <h3>Hospital Facilities</h3>
        <p>All beds in the hospital are fully equipped with state of the art medical support facilities, regardless of their category.</p>
		<a href="services.php" class="btn-rounded btn-bordered">Read more</a>
        </div>
        </div>
    	<div class="col-md-4">
        <div class="home-box opening-hours clearfix">
        <span class="glyphicon glyphicon-time"></span>
        <h3>Opening Hours</h3>
        <p>If you need a doctor for consultation, check below the hospital timings</p>
 			<ul class="list-unstyled">
				<li class="clearfix">
				<span>
					Monday - Friday
				</span>
				<div class="value">
					8.00 - 17.00
				</div>
				</li>
				<li class="clearfix">
				<span>
					Saturday
				</span>
				<div class="value">
					9.30 - 16.30
				</div>
				</li>
				<li class="clearfix">
				<span>
					Sunday
				</span>
				<div class="value">
					9.30 - 17.00
				</div>
				</li>
			</ul>
        </div>
        </div>
    	<div class="col-md-4 bg-default">
        <div class="home-box">
        	<span class="glyphicon glyphicon-tint"></span>
            <h3>Gynae Care</h3>
            <p>The Department of Gynaecology supports women lifelong throughout their journey from child bearing age to menopause & beyond.</p>
			<a href="services.php" class="btn-rounded btn-bordered">Read more</a>
        </div>
        </div>
    </div>
    

    <section class="testimonials bg-white">
    	<div class="container">
        	<div class="row">
            	<div class="col-md-12">
                	<div id="carousel-testimonials" class="carousel slide testimonials-carousel" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <li data-target="#carousel-testimonials" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-testimonials" data-slide-to="1"></li>
                      </ol>
                    
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner text-center">
                        <div class="item active">
                          <h1>What Our patients Say About Us</h1>
                          <p>One of the best maternity hospital in Pathankot...</p>
							<div class="testimonials-patient-detail">
                            	<!--<img src="images/patient-img.png" class="img-circle img-thumbnail" alt="" title="">-->
                                <p>Lavleen Bajaj<span>Gynae Patient</span></p>
                            </div>
                        </div>
                        <div class="item">
                          <h1>What Our patients Say About Us</h1>
                          <p>Doctors were so helpful. I recommend this hospital to everyone.</p>
							<div class="testimonials-patient-detail">
                            	<!--<img src="images/patient-img.png" class="img-circle img-thumbnail" alt="" title="">-->
                                <p>Navneet Kaur<span>Gynae Patient</span></p>
                            </div>
                        </div>
                      </div>
					</div>
                </div>
            </div>
        </div>
    </section>
    
    </div><!--end content-index-->
    
    <div class="colourfull-row"></div>
    <?php include_once('footer.php'); ?>
    </div><!--end #wrapper-->
    <script type="text/javascript">

		var revapi;

		jQuery(document).ready(function() {

			   revapi = jQuery('.tp-banner').revolution(
				{
					delay:9000,
					startwidth:1170,
					startheight:450,
					hideThumbs:200,
					fullWidth:"on",
					forceFullWidth:"on"
				});
		});
	</script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>