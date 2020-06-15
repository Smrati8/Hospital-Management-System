<?php 
include('header.php'); 
if(!isset($_SESSION['username']))
{
	header('location:index.php');
}
?>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="180" valign="top" style="border-right:1px solid #888888;"> 
			<?php include('leftnav.php'); ?>
		  </td>
          <td valign="top" width="820"><table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
              <tr>
                <td height="40"></td>
              </tr>

              <tr>
                <td><table cellspacing="0" cellpadding="10" border="0" height="100" align="center" style="border:1px solid #888888;margin-top:50px;">
<tr>
<td class="welcome_text">Welcome to the <strong>KK Prashar Memorial Mother and Child Care Hospital</strong> Site Administration.<br /><br />Please follow the links at the left to proceed.</td>
</tr>
</table>
</td>
</tr>
</table>

</td>
</tr>

<?php include('footer.php'); ?>
