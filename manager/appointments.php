<?php 
include('header.php');

$docID = $_SESSION['id'];

if(isset($_GET['id']))
{
	$id = $_GET['id'];
	$usersQuery = mysqli_query($conn, "DELETE FROM tblappointment where id = $id");
	$errmsg = 1;
}

	$tbl_name = "tblappointment";		//your table name
	// How many adjacent pages should be shown on each side?
	$adjacents = 3;
	
	/* 
	   First get total number of rows in data table. 
	   If you have a WHERE clause in your query, make sure you mirror it here.
	*/
	$query = "SELECT COUNT(*) as num FROM $tbl_name where doctor_id = $docID";
	$total_pages = mysqli_fetch_array(mysqli_query($conn, $query));
	$total_pages = $total_pages[num];
	
	/* Setup vars for query. */
	$targetpage = "appointments.php"; 	//your file name  (the name of this file)
	$limit = 10; 								//how many items to show per page
	$page = $_GET['page'];
	if($page) 
		$start = ($page - 1) * $limit; 			//first item to display on this page
	else
		$start = 0;								//if no page var is given, set start to 0
	
	/* Get data. */
	$sql = "SELECT appt.*, user.name, user.email FROM $tbl_name as appt left join tbluser as user on appt.user_id = user.id where appt.doctor_id = $docID order by appt.id desc LIMIT $start, $limit";
	$result = mysqli_query($conn, $sql);
	//$data = mysqli_fetch_assoc($result);
	//echo "<pre>";
	//print_r($data);
	//echo "</pre>";
	//die();
	
	/* Setup page vars for display. */
	if ($page == 0) $page = 1;					//if no page var is given, default to 1.
	$prev = $page - 1;							//previous page is page - 1
	$next = $page + 1;							//next page is page + 1
	$lastpage = ceil($total_pages/$limit);		//lastpage is = total pages / items per page, rounded up.
	$lpm1 = $lastpage - 1;						//last page minus 1
	
	/* 
		Now we apply our rules and draw the pagination object. 
		We're actually saving the code to a variable in case we want to draw it more than once.
	*/
	$pagination = "";
	if($lastpage > 1)
	{	
		$pagination .= "<div class=\"pagination\">";
		//previous button
		if ($page > 1) 
			$pagination.= "<a href=\"$targetpage?page=$prev\">&#171; Previous</a>&nbsp;";
		else
			$pagination.= "<span class=\"disabled\">&#171; Previous&nbsp;</span>";	
		
		//pages	
		if ($lastpage < 8 + ($adjacents * 2))	//not enough pages to bother breaking it up
		{	
			for ($counter = 1; $counter <= $lastpage; $counter++)
			{
				if ($counter == $page)
					$pagination.= "<span class=\"current\" style=\"font-weight:bold;\">$counter&nbsp;</span>";
				else
					$pagination.= "<a href=\"$targetpage?page=$counter\">$counter&nbsp;</a>";					
			}
		}
		elseif($lastpage > 10 + ($adjacents * 2))	//enough pages to hide some
		{
			//close to beginning; only hide later pages
			if($page < 1 + ($adjacents * 2))		
			{
				for ($counter = 1; $counter < 4 + ($adjacents * 2); $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//in middle; hide some front and some back
			elseif($lastpage - ($adjacents * 2) > $page && $page > ($adjacents * 2))
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $page - $adjacents; $counter <= $page + $adjacents; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
				$pagination.= "...";
				$pagination.= "<a href=\"$targetpage?page=$lpm1\">$lpm1</a>";
				$pagination.= "<a href=\"$targetpage?page=$lastpage\">$lastpage</a>";		
			}
			//close to end; only hide early pages
			else
			{
				$pagination.= "<a href=\"$targetpage?page=1\">1</a>";
				$pagination.= "<a href=\"$targetpage?page=2\">2</a>";
				$pagination.= "...";
				for ($counter = $lastpage - (2 + ($adjacents * 2)); $counter <= $lastpage; $counter++)
				{
					if ($counter == $page)
						$pagination.= "<span class=\"current\">$counter</span>";
					else
						$pagination.= "<a href=\"$targetpage?page=$counter\">$counter</a>";					
				}
			}
		}
		
		//next button
		if ($page < $counter - 1) 
			$pagination.= "<a href=\"$targetpage?page=$next\">&nbsp;Next &#187;</a>";
		else
			$pagination.= "<span class=\"disabled\">&nbsp;Next &#187;</span>";
		$pagination.= "</div>\n";		
	}
?>

<table width="100%" height="100%" border="0" cellpadding="0" cellspacing="0">
        <tr> 
          <td width="180" valign="top" style="border-right:1px solid #888888;"> 
			<?php include('leftnav.php'); ?>
		  </td>
          <td valign="top" width="820">
		  <table width="95%" border="0" align="center" cellpadding="0" cellspacing="0" class="text">
			<?php
			if(isset($errmsg) and $errmsg == 1)
			{
			?>
			<tr>
                <td height="20" align="center" class="errfont"><br /><br />Record have been deleted.</td>
            </tr>
			<?php
			}
			?>
			<?php
			if(isset($_GET['msg']) and $_GET['msg'] == 1)
			{
			?>
			<tr>
                <td height="20" align="center" class="errfont"><br /><br />Record updated successfully.</td>
            </tr>
			<?php
			}
			?>
			<tr>
			<td colspan="3" align="right" height="40">
			<?php echo $pagination; ?>
			</td>
			</tr>
				<tr>
                <td>
					<table cellspacing="1" cellpadding="7" border="0" width="100%" class="text">
					<tr class="frmtdheader">
						<th width="3%">No.</th>
						<th width="25%" align="left">Name</th>
						<th width="34%" align="left">Email</th>
						<th width="18%" align="center">Appointment Date</th>
						<th width="8%" align="center">Status</th>
						<th width="6%" align="center">View</th>
						<th width="6%" align="center">Delete</th>
					</tr>
					<?php
					$counter=1;
					while($usersRow = mysqli_fetch_assoc($result)) {
					?>
					<tr class="tr_bgcolor">
						<td><?php echo $counter++; ?></td>
						<td><?php echo $usersRow['name']; ?></td>
						<td><a href="mailto:<?php echo $usersRow['email']; ?>"><?php echo $usersRow['email']; ?></a></td>
						<td align="center"><?php echo date('d/m/Y', strtotime($usersRow['appointment_date'])); ?></td>
						<td align="center">
						<?php
							if($usersRow['appointment_status'] == 0)
							{
								echo "NC";
							}
							if($usersRow['appointment_status'] == 1)
							{
								echo "C";
							}
							if($usersRow['appointment_status'] == 2)
							{
								echo "CD";
							}
							if($usersRow['appointment_status'] == 3)
							{
								echo "CL";
							}
						?>
						</td>
						<td align="center"><a href="appointmentdetails.php?id=<?php echo $usersRow['id']; ?>" title="View"><img src="images/edit.gif" border="0" /></a></td>
						<td align="center"><a href="appointments.php?id=<?php echo $usersRow['id']; ?>" title="Delete"><img src="images/delete.gif" border="0" onclick="return confirm('Are you sure you want to delete this record?')" /></a></td>
					</tr>
					<?php
					}
					?>
					</table>
				</td>
			</tr>
		</table>
</td>
</tr>

<?php include('footer.php'); ?>
