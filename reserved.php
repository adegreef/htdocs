<html>
<body>

<?php
    include "connection.php";
    $sql3 = "SELECT * FROM Room WHERE Number = '$_POST[Number]' AND Occupied = 0";
    
    if (mysqli_num_rows(mysqli_query($link,$sql3)) > 0)
    {
    $sql = "INSERT INTO Guest (Firstname, Lastname, RoomNum)
    VALUES('$_POST[fname]' , '$_POST[lname]' , '$_POST[Number]')";

    if(!mysqli_query($link, $sql))
    {
        die('Error: ' . mysqli_error($link));
    }
    $sql2 = "UPDATE Room
    SET Occupied = 1
    WHERE Number = $_POST[Number]";
    if(!mysqli_query($link, $sql2))
    {
        die('Error: ' . mysqli_error($link));
    }
    echo "Room reserved!";
    }
    else {
        echo "Room unavailable. Go back.";
    }
?>
<br/>
<td><a href=home.php>HOME</a></td>

</body>
</html>