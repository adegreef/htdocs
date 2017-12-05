<html>
<body>
<?php
    include "connection.php";
    $sql3 = "SELECT * FROM Employees WHERE EMPLID = '$_POST[emplid]'";
    
    if (mysqli_num_rows(mysqli_query($link,$sql3)) > 0)
    {

        $sql = "DELETE FROM Employees WHERE EMPLID = '$_POST[emplid]'";

        if(!mysqli_query($link, $sql))
        {
            die('Error: ' . mysqli_error($link));
        }
        echo "Employee Fired!";
    }
    else 
    {
        echo "EMPLID not valid.";
    }
?>
<br/>
<td><a href=adminview.php>Back</a></td>
</body>
</html>