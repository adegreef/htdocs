<?php
   include("connection.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($link,$_POST['username']);
      $mypassword = mysqli_real_escape_string($link,$_POST['password']); 
      
      $sql = "SELECT Position FROM Employees WHERE EMPLID = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($link,$sql);
	
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
	
         $_SESSION['login_user'] = $myusername;
	$row1 = mysqli_fetch_array($result);
	$position = $row['Position'];
	if ($position == "Admin"){
         	echo "<script>window.location = 'adminview.php';</script>";
      }
	else
		echo "<script>window.location = 'generalview.php';</script>";
	}else {
         $error = "Your Login Name or Password is invalid";
      }
   }

?>
<html>

<html>
<head>
  <title>Login Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">

  <?php
	  include "index4.php";
  ?>
  <script language="javascript" type="text/javascript">
  function fun_val()
  	{
  		var l=document.loginsell.username.value;
  		if(l=="")
  		{
  			alert("Please Enter User name");
  			document.loginsell.username.focus;
  			return false;
  		}

  		var p=document.loginsell.password.value;
  		if(p=="")
  		{
  			alert("Please Enter Password");
  			document.loginsell.password.focus;
  			return false;
  		}
  	}
  </script>

<body>

<p align="center" id="loginpage"><br><TR></tr>
<form name="loginform" action="" method="post"><TR></tr>
  <table font-family = "Georgia" class = "table" width="400" height="178"  align="center" cellpadding="1"cellspacing="1" border="3">
    <tr>
      <td height="41" colspan="2" align="center"><h2><b>User Login</b></h2></td>
    </tr>
    <tr>
      <td width="170" height="40"  align="center"><b>Username:</b></td>
      <td width="213">
         <input type="text" name="username" style="background" />
      </font></td>
    </tr>
    <tr>
      <td height="38" align="center"><b>Password:</b></td>
      <td>
        <input type="password" name="password" maxlength="8">
        </font></td>
    </tr>
    <br />
    <tr>
      <td height="48" colspan="2" align="center">
        <input type="submit"  value="Submit" name="ok" onClick="return fun_val();"/>

	<div style = "font-size:11px; color:#cc0000; margin-top:10px">
<?php
	if (isset($error)){
	 echo $error;
	}
?>
</div>
    </tr>

  </table>
	
<p>&nbsp;</p>
</form>
	
</body>
</html>
