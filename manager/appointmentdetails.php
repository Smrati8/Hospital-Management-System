<?php 
include('header.php');

if(isset($_SERVER['HTTP_REFERER']))
{
	$backURL = $_SERVER['HTTP_REFERER'];
}
else
{
	$backURL = "appointments.php";
}

?>
<script type="text/javascript" src="js/jquery-1.4.1.min.js"></script>
<script type="text/javascript" src="js/jquery.ui.core.js"></script>
<script type="text/javascript" src="js/jquery.ui.datepicker.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>


<script type="text/javascript">
$(function() {
	$('#datepicker').datepicker({
		showButtonPanel: true
	});
		
});
</script>
<script type="text/javascript">
$(function() {
			
	$("#editUser").validate()
});
</script>
	<style type="text/css">
	.error{margin-left:8px;}
	</style>
		<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="180" valign="top" style="border-right:1px solid #888888;"> 
			<?php include('leftnav.php'); ?>
		  </td>
          <td valign="top" width="820">
		  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
		<tr>
			<td height="10">&nbsp; </td>
			</tr>
		<tr>
				<td align="center" class="successfont" ><?php
						$user=mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM tblappointment as appt left join tbluser as user on appt.user_id = user.id where appt.id='".$_GET['id']."'"));
						?>
				</td>
			</tr>
		<tr>
			<td><h2>&nbsp;Edit Appointment</h2></td>
			</tr>
			
            		<tr>
               		 <td><form name="editAppointment" id="editAppointment" action="updateAppointment.php?id=<?php echo $_GET['id'];?>" method="post">
					 <input type="hidden" name="email" value="<?php echo $user['email']; ?>" />
					<table cellspacing="1" cellpadding="7" border="0" width="100%" class="text">


					<tr bgcolor="#f7f7f7">
						<td><strong>Name:</strong></td>
						<td><?php echo $user['name'];?></td>
					</tr>

					<tr bgcolor="#f7f7f7">
						<td><strong>Phone:</strong></td>
						<td><?php echo $user['phone'];?></td>
					</tr>

					<tr bgcolor="#f7f7f7">
						<td><strong>Email:</strong></td>
						<td><?php echo $user['email']; ?></td>
					</tr>

					<tr bgcolor="#f7f7f7">
						<td width="37%"><strong>Appointment Date:</strong></td>
						<td width="63%"><input type="text" id="datepicker" readonly="readonly" class="txtbox_login" name="appointment_date"  value="<?php echo $user['appointment_date']; ?>"style="width:120px;margin-right:5px;align:bottom;" /></td>
					</tr>

					<tr bgcolor="#f7f7f7">
						<td><strong>Appointment Time/Notes:</strong></td>
						<td><textarea cols="25" rows="6" name="appointment_time" id="appointment_time"><?php echo $user['appointment_time'];?></textarea></td>
					</tr>

					<tr bgcolor="#f7f7f7">
						<td><strong>Appointment Status:</strong></td>
						<td>
						<select name="appointment_status" id="appointment_status">
							<option <?php if($user['appointment_status'] == 1) { echo "selected='selected'"; } ?> value="1">Confirmed</option>
							<option <?php if($user['appointment_status'] == 0) { echo "selected='selected'"; } ?> value="0">Not Confirmed</option>
							<option <?php if($user['appointment_status'] == 2) { echo "selected='selected'"; } ?> value="2">Cancelled</option>
							<option <?php if($user['appointment_status'] == 3) { echo "selected='selected'"; } ?> value="3">Closed</option>
						</select>
						</td>
					</tr>

				</table>

				<table id=target cellspacing="1" cellpadding="7" border="0" width="100%" class="text">
				</table>
		
				<table cellspacing="1" cellpadding="7" border="0" width="100%" class="text">


					<tr bgcolor="#f7f7f7">
						<td><input type="hidden" name="id" id="id" value="<?php echo $_GET['id'];?>" >
							<input type="submit" class="btn_submit" value="Save" name="editUser" /></td>
						<td>&nbsp;</td>
					</tr>

					<tr>
						<td colspan="2"><br /><a href="<?php echo $backURL; ?>" title="Back">&#171;&nbsp;<strong>Back</strong></a></td>
					</tr>
					</table>
					</form>
				</td>
			</tr>
		</table>
</td>
</tr>

<?php include('footer.php'); ?>
