<?php
	//include("includes/config.php");
	header('Content-Type: text/html; charset=ISO-8859-1');
	include("includes/generalFunction.php");

	include("includes/config.php");
	
	$name=$_POST['name'];
	$id=$_POST['id'];

	$user=@mysql_fetch_array(@mysql_query("SELECT * FROM tblusers WHERE id='$id'"));
	$rq="SELECT extra FROM tblcourse WHERE course= '$name'";
	$result=mysql_query($rq) or die("mysql error ". mysql_error());
	$line=mysql_fetch_array($result);
	$array=explode(",",$line[0]);
	foreach($array as $property){
		switch($property){
			case "Grade":
				$val=$user['Grade'];
				
				echo "<tr bgcolor=\"#f7f7f7\">
							<td><strong>Practical:</strong></td>";
				if($val=="fail"){
					echo "		<td><input type=\"radio\" name=\"grade\" value=\"pass\"> Pass &nbsp;&nbsp;<input type=\"radio\" name=\"grade\" value=\"fail\" checked=\"checked\">Fail</td>";
				}else{
					echo "		<td><input type=\"radio\" name=\"grade\" value=\"pass\" checked=\"checked\"> Pass &nbsp;&nbsp;<input type=\"radio\" name=\"grade\" value=\"fail\">Fail</td>";
				}
				echo "</tr>";
				break;

			case "Practical":
				$val=$user['Practical'];
				echo "<tr bgcolor=\"#f7f7f7\">
								<td><strong>Grade:</strong></td>";
				if($val=="imcp"){
				echo "		<td><input type=\"radio\" name=\"practical\" value=\"cp\">Completed &nbsp;&nbsp;<input type=\"radio\" name=\"practical\" value=\"imcp\" checked=\"checked\">Incomplete</td>";
				}else{
				echo "		<td><input type=\"radio\" name=\"practical\" value=\"cp\" checked=\"checked\">Completed &nbsp;&nbsp;<input type=\"radio\" name=\"practical\" value=\"imcp\" >Incomplete</td>";
				}
				echo "</tr>";
				break;

			case "Equipment Type":
				$eqpt=$user['EquipmentType'];
				
				print("
				<tr bgcolor=\"#f7f7f7\">
						<td><strong>Equipment Type:</strong></td>
						<td><select name=\"EquipmentType\" id=\"EquipmentType\" class=\"txtbox_login\">
				");
							
							echo $eqp=equipmentList($eqpt);
				print("
						</select></td>
					</tr>
				");
				break;

			default :
			
				$str = str_replace(" ", "", $property);
				$val=$user[$str];
				//echo "<script>alert('$val');</script>";
				print("<tr bgcolor=\"#f7f7f7\">
								<td><strong>$property:</strong></td>
								<td><input type=\"text\" size=\"40\" maxlength=\"50\" class=\"txtbox_login\" name=\"$str\" id=\"$str\" value=\"$val\"></td>
				</tr>");
				break;
		}
	}


?>
