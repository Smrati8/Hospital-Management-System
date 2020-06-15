<?php 
include('header.php');

$currentId = $_SESSION['id'];

if(isset($_POST['btnLogin']))
{
	if($_REQUEST['oldpassword'] == '' || $_REQUEST['newpassword'] == '' || $_REQUEST['confirmpassword'] == '')
	{
		$errMag = 1;
	}
	else if($_REQUEST['newpassword'] != $_REQUEST['confirmpassword'])
	{
		$errMag = 2;
	}
	else
	{
		$oldpassword = $_REQUEST['oldpassword'];
		$res = mysqli_query($conn, "select * from tbldoctor where sPassword = '$oldpassword'");
		$count = mysqli_num_rows($res);
		if($count == 1)
		{
			$newpassword = $_REQUEST['newpassword'];
			$res = mysqli_query($conn, "update tbldoctor set sPassword = '$newpassword' where id = $currentId");
			$errMag = 3;
		}
		else
		{
			$errMag = 4;			
		}
	}

}

?>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="200" valign="top" style="border-right:1px solid #888888;"> 
			<?php include('leftnav.php'); ?>
		  </td>
          <td valign="top" width="600">
		  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
			<tr>
                <td height="40"></td>
            </tr>
            <tr>
                <td>
					<form method="post" action="changepassword.php" id="chgpasswordform">
					<table cellpadding="5" cellspacing="1" border="0" id="tableform" class="text" width="100%" bgcolor="#eeeeee">
					<?php
					if(isset($errMag) && $errMag == 1)
					{
					?>
						<tr bgcolor="#ffffff">
							<td colspan="2" valign="middle" height="25" class="errfont">Please enter values in all three fields.</td>

						</tr>
					<?php
					}
					?>
					<?php
					if(isset($errMag) && $errMag == 2)
					{
					?>
						<tr bgcolor="#ffffff">
							<td colspan="2" valign="middle" height="25" class="errfont">Password and confirm password do not match. Please try again.</td>

						</tr>
					<?php
					}
					?>
					<?php
					if(isset($errMag) && $errMag == 3)
					{
					?>
						<tr bgcolor="#ffffff">
							<td colspan="2" valign="middle" height="25" class="errfont">Password changed successfully.</td>

						</tr>
					<?php
					}
					?>
					<?php
					if(isset($errMag) && $errMag == 4)
					{
					?>
						<tr bgcolor="#ffffff">
							<td colspan="2" valign="middle" height="25" class="errfont">Old password does not match with our database. Please check your old password.</td>

						</tr>
					<?php
					}
					?>
							<tr>
								<td colspan="2" valign="middle" height="25" class="frmtdheader">	
								<b>Please enter your current password before proceeding with a new password</td>

							</tr>
							<tr bgcolor="#ffffff">
								<td width="130" valign="top">
									<strong>Old Password:</strong><span class="errfont">*</span>
								</td>
								<td>
									<input type="password" name="oldpassword"  id="oldpassword" class="txtbox_login" maxlength="50" value="" /></td>

							</tr>
							<tr bgcolor="#ffffff">
								<td valign="top">
									<strong>New Password:</strong><span class="errfont">*</span>
								</td>
								<td>
									<input type="password" name="newpassword"  id="newpassword" class="txtbox_login" maxlength="50" value="" /></td>

							</tr>
							<tr bgcolor="#ffffff">
								<td valign="top">
									<strong>Confirm Password:</strong><span class="errfont">*</span>
								</td>
								<td>
									<input type="password" name="confirmpassword"  id="newpassword" class="txtbox_login" maxlength="50" value="" /></td>

							</tr>
							<tr bgcolor="#ffffff">
							<td>&nbsp;</td>
							<td>
							<input type="submit" class="btn_submit" value="Save" name="btnLogin" />
							</td>
							</tr>
					</table>
					</form>
				</td>
			</tr>
		</table>
</td>
</tr>

<?php include('footer.php'); ?>