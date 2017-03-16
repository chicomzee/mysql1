<?php
/**
 * Created by PhpStorm.
 * User: 1611529
 * Date: 16/03/2017
 * Time: 20:04
 */


include "dbConnect.php";
$sql_query = "SELECT * FROM marvelmovies WHERE  yearRealeased => '2010'";
$result = $link->query($sql_query);
while($row = $result->fetch_array()){
    echo "<p>" . $row['title']. "</p>";
}

?>