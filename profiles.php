<?php

include_once("db_connect.php");
$sql = "SELECT id, name, age, stats FROM profiles";
$resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));

$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while($row = $result->fetch_assoc()) {

    echo '<div style = " position: relative;
 left: 50px;
 width: calc(100% - 100px);
 border: 1px solid black;
 background-color: #87cefa;
 margin: 10px;
 padding: 5px;
 text-align: center;">
    <input type="radio" id='.$row["id"].' name="profile" value="'.$row["name"].'">
     <label style = "  width: calc(100% - 100px);" for="'.$row["id"].'"> <div>

    <h3> '.$row["name"].'</h3>
     '.$row["age"].' años
     <br>
     '.$row["stats"].'
     </div>
     </label><br>
     </div>
    ';
  }
} else {
  echo "<p>No profiles!</p>";
}
?>
