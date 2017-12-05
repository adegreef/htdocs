<?php
session_start();
?>
<html>
<body style="background-color: LightSlateGray">
<?php
	include "connection.php";
	include "index5.php";

	$sqlry="SELECT * FROM room WHERE Occupied = 0";
	$result = $link->query($sqlry);
	?>
	<script src="js/bootstrap.min.js"></script>
	<h1 align = "center"> <br/><br/> Room Details</h1>
	<table border ="1" align="center" style=line-height:25px;">
	<tr>
	<th>Room Number</th>
	<th>Number of Beds</th>
	<th>Number of Bathrooms</th>
	<th>Price</th>
	</tr>

<?php
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc()){
	?>
	<tr>
	<td><?php echo $row['Number'];?></td>
	<td><?php echo $row['Beds'];?></td>
	<td><?php echo $row['Bathrooms'];?></td>
	<td><?php echo $row['Price'];?></td>
	</tr>
	<?php
	}
}
else
{
	?>
	<tr>
	<th colspan="2">There's No data found!</th>
	</tr>
	<?php
}
?>
<br><br>
<form action="reserved.php" method="POST">
<br><br>
<table  border=0 align=center>
<tr>
</tr>

<tr>
	<th align=left>Firstname   :</th>
	<td colspan=4><input type=text name="fname" size=50></td>
</tr>
<tr>
	<th align=left>Lastname   :</th>
	<td colspan=4><input type=text name="lname" size=50></td>
</tr>
<tr>
	<th align=left>Room Number  :</th>
	<td colspan=4><input type=text name="Number" size=50></td>
</tr>
<tr>
	<th align=left>Special Requirements, if any :</th>
	<td colspan=4><textarea name=txtspanyreq rows=5 cols=40></textarea>
</tr>

<br />
<br />
<tr>
	<td colspan=2 align=center><input type="submit" name="submit" value="submit">

</tr>
</table>

</form>
</body>
</html>