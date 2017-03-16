<?php
/**
 * Created by PhpStorm.
 * User: 1611529
 * Date: 16/03/2017
 * Time: 19:49
 */


include "dbConnect.php";
$sql_query = "SELECT * FROM marvelmovies WHERE  productionStudio like '%Marvel Studios%'";
$result = $link->query($sql_query);
while($row = $result->fetch_array()){
    echo "<p>" . $row['title']. "</p>";
}
$result
?>