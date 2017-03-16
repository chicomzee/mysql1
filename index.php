<?php
/**
 * create a SQL query as a string
 * execute the SQL query
 * iterate over $result object one $row at a time
 * use fetch_array() to return an associative array
 * process the $row

 */

include "dbConnect.php";
$sql_query = "SELECT * FROM marvelmovies"; // WHERE  productionstudio like '%20th Century Fox%'";
$result = $link->query($sql_query);
while($row = $result->fetch_array()){
    echo "<p>" . $row['marvelMovieID']. "</p>";
}

?>

