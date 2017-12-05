<html>

<body
>
<?php

    include "connection.php";

    $sql3 = "SELECT * FROM guest WHERE RoomNum = '$_POST[room]'";

    
    if (mysqli_num_rows(mysqli_query($link,$sql3)) > 0)

    {


        $sql = "DELETE FROM guest WHERE RoomNum = '$_POST[room]'";


        if(!mysqli_query($link, $sql))

        {

            die('Error: ' . mysqli_error($link));

        }

	$sql2 = "UPDATE room SET Occupied = 0 WHERE Number = '$_POST[room]'";
	if(!mysqli_query($link, $sql2))

        {

            die('Error: ' . mysqli_error($link));

        }


        echo "Room Empty";
    }
    
else 
    {
 
       echo "Room already vacant.";

    }

?>


<br/>
<td><a href=generalview.php>BACK</a></td>

</body>

</html>