<html>
<body>

<?php
    include "connection.php";
    $sql3 = "SELECT * FROM Employees WHERE EMPLID = '$_POST[emplid]'";
    
    if (mysqli_num_rows(mysqli_query($link,$sql3)) == 0)
    {
    $sql = "INSERT INTO Employees (EMPLID, Password, Firstname, Lastname, Position, WagePerHour)
    VALUES('$_POST[emplid]' , '$_POST[pass]' , '$_POST[fname]', '$_POST[lname]', '$_POST[pos]', '$_POST[wage]')";

    if(!mysqli_query($link, $sql))
    {
        die('Error: ' . mysqli_error($link));
    }
    echo "Employee hired!";
    }
    else {
        echo "EMPLID Already Taken.";
    }
?>
<br/>
<td><a href=adminview.php>Back</a></td>

</body>
</html>