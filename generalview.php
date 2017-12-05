<!doctype html>
<html>
<head>
	<title>General View</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
</head>

<body>
	<?php
	include "index5.php";
	include "connection.php";
	
	$sqlry1="SELECT * FROM room";
	$result = mysqli_query($link, $sqlry1);

	$sqlry2="SELECT r.Number, r.Beds, r.Bathrooms, r.Price, r.Occupied, g.Firstname, g.Lastname
 FROM room r LEFT JOIN guest g ON r.Number = g.RoomNum";
	$result2 = mysqli_query($link, $sqlry2);
	?>
	<script src="js/bootstrap.min.js"></script>
<br/><br/>
<h1 align = "center"> Room Details</h1>
<table border ="1" align="center" style=line-height:25px;">
<tr>
<th>Room Number</th>
<th>Number of Beds</th>
<th>Number of Bathrooms</th>
<th>Price</th>
<th>Occupied</th>
<th>Firstname</th>
<th>Lastname</th>
</tr>

<?php
if(mysqli_num_rows($result2) > 0 ){
		
	while($row2 = mysqli_fetch_array($result2)){
	?>
	<tr>
	<td align="center"><?php echo $row2['Number'];?></td>
	<td align="center"><?php echo $row2['Beds'];?></td>
	<td align="center"><?php echo $row2['Bathrooms'];?></td>
	<td align="center"><?php echo $row2['Price'];?></td>
	<td align="center"><?php echo $row2['Occupied'];?></td>
	<td align="center"><?php echo $row2['Firstname'];?></td>
	<td align="center"><?php echo $row2['Lastname'];?></td>
	</tr>
	<?php
	}	
}
else
{
	while($row = mysqli_fetch_array($result)){
	?>
	<tr>
	<td align="center"><?php echo $row['Number'];?></td>
	<td align="center"><?php echo $row['Beds'];?></td>
	<td align="center"><?php echo $row['Bathrooms'];?></td>
	<td align="center"><?php echo $row['Price'];?></td>
	<td align="center"><?php echo $row['Occupied'];?></td>
	<td align="center"><?php echo "";?></td>
	<td align="center"><?php echo "";?></td>
	</tr>
	<?php
	}
	
}
?>
</table>
<form action="guestRemoved.php" method="POST">

<br><br>

<table  border=0 align=center>

<tr>

</tr>

<tr>

	<th align=center>Room :</th>

	<td colspan=4><input type=text name="room" size=50>
</td>

</tr>

<tr>

	<td colspan=2 align=center><input type="submit" name="submit" value="Make Empty">

	</td>

</tr>

</form>
</body>
</html>
