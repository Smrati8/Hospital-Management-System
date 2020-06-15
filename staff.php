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
    <title>Staff - KK Prashar Memorial Mother and Child Care Hospital</title>
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
                  <li class="dropdown active"><a href="staff.php" class="dropdown-toggle"><i class="fa fa-plus"></i>Staff</a></li>
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
        	<h1 class="entry-title">Staff</h1>
        </div>
    </section>
    
    
    <div class="sub-page-content">
    	
        
        <div class="container">
        	<h2 class="light bordered main-title">meet <span>specialist</span></h2>
     		<div class="row">
            	<div class="col-md-6 padding-bottom-60 clearfix">
                    <div class="doctors-detail">
                        	<h4>Dr vipula sharma<span>Co-Partner </span></h4>
                            <p><label class="heading">D.O.B</label><label class="detail">1st sept 1964</label></p>
                            <p><label class="heading">Qualification</label><label class="detail">MBBS from govt medical collage patiala in 1987 </label></p>
                            <h6>Work Experience</h6>
					<ul>
					     <li>6 Month house job in gynae in june 1988.</li>
					     <li>6 Month house job in ICU in dec 1988.</li>
					     <li>PCMS job in PHC Bungal Badhani from feb 1989 to may 1993.</li>
					     <li>Joind fresh PG from govt MEdical collage Amrister from may 1993 to sept 1996 in Obs.&Gynaecoloistv.</li>
						<li>Did private practice in kukreja hospital pathankot in march 1997 to apirl 2001.</li>
						<li>Gandotra hospital from april 2001 to dec 2005 .</li>
						<li>Gautam hospital from jan 2007 to 2013 .</li>
						<li>Vnow presently own and managing k.k.memorial mother and child care hospital.</li>
						<li>Presntly performing -outdoor checkup in field of obstetrics voman disease,infertility and generation x.</li>
					<ul>
								<li>Gynae operation hysterectomy.</li>
								<li>Casarean. </li>
								<li>Vaginal delivery.</li>
								<li>Minor operation including D&C(Dilatation and curettage).</li>
					</ul></ul>
                                 
			    
                          
                        </div>
                </div>
            	<div class="col-md-6 padding-bottom-60 clearfix">
       
                    <div class="doctors-detail">
                        	<h4>Dr ashok sharma<span>Head</span></h4>
                           <p><label class="heading">D.O.B</label><label class="detail">18 jan 1958</label></p>
                            <p><label class="heading">Qualification</label><label class="detail">MBBs,M.D pediatrician  from institute of medical sciences varanasi university (varanas) in dec 1986</label></p>
                            <h6>Work Experience</h6>
				<ul>
				<li>23 years work as PCMS doctor. </li>
				<li>Work in civil hospital gurdaspur.</li>
				<li>RST hospital.</li>
				<li>Vcxe hospital, tanda urmar. </li>
				<li>17 years at civil hospital Pathankot as child specialist neonatologist.</li>
				<li>Now presently work as copartner with DR Vipula Sharma  in K.K. Memorial Hospital as Neonatologist and  Pediatrician. </li>
				</ul>
                        </div>
                </div>
            </div>       
            <div class="row">
            	<div class="col-md-6 clearfix">
                
                    <div class="doctors-detail">
                        	<h4>Dr Vanshika Sharma <span>Medical Officer </span></h4>
                        	<p><label class="heading">D.O.B</label><label class="detail">18 oct 1989</label></p>
                            <p><label class="heading">Qualification</label><label class="detail">MBBS From Karnataka Medial Council</label></p>
                             </div>
                </div>
            </div>

<br><br>
<h4>Nurses</h4>
<br>
<h5>1 Anjali</h5>
Qualification- Graduate  + Nursing  Pediatric<br> 
Work Experience - 2 Years in KK Memorial Hospital.

 
<h5>2 Renu Bala</h5>
Qualification-12th + Nursing<br>  
Work Experience - 3 Months KK Memorial Hospital.

<h5>3  Suman</h5>
Qualification- Graduate  + Nursing <br> 
Work Experience - 2  Years  KK Memorial Hospital.

<h5>4 Sunny </h5>
Qualification- Graduate + Nursing  <br> 
Work Experience - 2  Years  KK Memorial Hospital.

<h5>5 Devi </h5>
Qualification- Graduate  + Nursing <br> 
Work Experience - 2 Years KK Memorial Hospital.

<h5>6 Shrikant </h5>
Qualification-12th + Nursing  <br> 
Work Experience - 2 Years KK Memorial Hospital.
<br><br><br>
<h3>Laboratory Employees</h3>
<h5>1 Aman</h5>
Qualification-12th + Diploma lab technichan<br>  
work experience - 2 Years  KK Memorial Hospital.

<h5>2 Kuldeep Singh</h5>
Qualification-12th + Diploma lab technichan<br> 
Work Experience - 2 Years  KK Memorial Hospital.
<br><br><br>
<h3>Receptionist</h3>
<h5>Rajni</h5>
Qualification- Graduate<br>   
Work Experience - 2 Years  KK Memorial Hospital.
        </div>
    
    <div class="clr"></div>    
    </div><!--end sub-page-content-->

    <div class="colourfull-row"></div>
    <?php include_once('footer.php'); ?>
    </div><!--end #wrapper-->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
