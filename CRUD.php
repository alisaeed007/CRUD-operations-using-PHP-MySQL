<?php

$x= $_REQUEST['i'];
$y= $_REQUEST['n'];

echo $x.$y;

/*Insert start*/
$conn = new mysqli("localhost", "root", "","UCP");

$sql = "INSERT INTO mytable (ID, Name) VALUES ('".$x."','".$y."')";

$conn->query($sql);

/*Insert complete*/


/*Show start*/
$sql = "SELECT * FROM mytable";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "id: " . $row["ID"]. " - Name: " . $row["Name"]."<br>";
  }
}

/*Show complete*/

/*Delete start*/
$sql = "DELETE FROM mytable WHERE id=1";
$conn->query($sql);
/*Delete complete*/


/* Update start */
$sql = "UPDATE mytable SET ID='5' WHERE ID=2";
$conn->query($sql);
/* Update  complete */

?>

