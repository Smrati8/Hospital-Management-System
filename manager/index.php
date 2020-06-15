<?php
	include_once('includes/config.php');

	if(isset($_SESSION['username']))
	{
		header('location:welcome.php');
	}

	if(isset($_POST['btnLogin']))
	{		
		$username = $_REQUEST['username'];
		$password = $_REQUEST['password'];
		$res = mysqli_query($conn, "select * from tbldoctor where sUserName = '$username' and sPassword = '$password'");
		$count = mysqli_num_rows($res);
		$docData = mysqli_fetch_assoc($res);
		if($count == 1)
		{
			$_SESSION['username'] = $username;
			$_SESSION['id'] = $docData['id'];
			header('location:welcome.php');
			exit;
		}
		else
		{
			$errmessage = "Sorry, you are not authorized to perform this task.";
		}
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Admin Panel - KK Prashar Memorial Mother and Child Care Hospital</title>
<link rel="stylesheet" type="text/css" href="css/adminstyle.css" />
<script type="text/javascript" src="js/validation.js"></script>
</head>
<body>
<table width="1000" height="100%" border="0" align="center" cellpadding="0" cellspacing="0" class="text" style="border-left:1px solid #888888;border-right:1px solid #888888;">
  <tr> 
    <td height="80" valign="middle" style="padding-left:10px;"><img src="../images/logo.png" width="250" /></td>
  </tr>
  <tr>
  <td height="22" bgcolor="#2b96cc">&nbsp;</td>
  </tr>
  <tr> 
    <td valign="top">
	<form name="loginform" id="loginform" action="" method="post" onsubmit="return validlogin();">
	<table width="350" border="0" align="center" cellpadding="4" cellspacing="1" class="text" style="margin-top:100px;" bgcolor="#cccccc">
        <tr align="center" valign="middle"> 
          <td height="35" colspan="2" bgcolor="#2b96cc" class="heading">Doctor Login</td>
        </tr>
        <tr bgcolor="#ffffff"> 
          <td height="25" colspan="2" align="left">
		  <?php
		  if(isset($errmessage))
		  {
			  echo "<span class='errfont'>".$errmessage."</span>";
		  }
		  else
		  {
			echo "Please provide your sign-in details here.";
		  }
		  ?>
		  </td>
        </tr>
        <tr bgcolor="#ffffff"> 
          <td width="100" valign="top">Username:</td>
          <td width="250" valign="top"><input type="text" name="username" id="username" class="txtbox_login" value="" maxlength="15" /></td>
        </tr>
        <tr bgcolor="#ffffff"> 
          <td valign="top">Password:</td>
          <td valign="top"><input type="password" name="password" id="password" class="txtbox_login" value="" maxlength="15" /></td>
        </tr>
        <tr bgcolor="#ffffff"> 
          <td valign="top">&nbsp;</td>
          <td valign="top"><input type="submit" class="btn_submit" value="Login &gt;&gt;" name="btnLogin" /></td>
        </tr>
      </table><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
</form>
</td>
	</tr>

<?php include('footer.php'); ?>
