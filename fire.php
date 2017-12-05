<html>
<body>

<?php
    include "connection.php";
	include "index4.php";
	include "connection.php";
	include "index5.php";


	$sqlry="SELECT * FROM Employees";
	$result = $link->query($sqlry);
	?>
	<script src="js/bootstrap.min.js"></script>
	<h1 align = "center"> <br/><br/> Employees</h1>
	<table border ="1" align="center" style=line-height:25px;">
	<tr>
	<th>EMPLID</th>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Position</th>
    <th>WagePerHour</th>
	</tr>

<?php
if($result->num_rows > 0)
{
	while($row = $result->fetch_assoc()){
	?>
	<tr>
	<td><?php echo $row['EMPLID'];?></td>
	<td><?php echo $row['Firstname'];?></td>
	<td><?php echo $row['Lastname'];?></td>
	<td><?php echo $row['Position'];?></td>
    <td><?php echo $row['WagePerHour'];?></td>
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
</table>
<form action="fired.php" method="POST">
<br><br>
<table  border=0 align=center>
<tr>
</tr>
<tr>
	<th align=center>EMPLID :</th>
	<td colspan=4><input type=text name="emplid" size=50></td>
</tr>
<tr>
	<td colspan=2 align=center><input type="submit" name="submit" value="submit">
	</td>
</tr>
</form>
</body>
</html>