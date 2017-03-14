<?php
/**
 * create a SQL query as a string
 * execute the SQL query
 * iterate over $result object one $row at a time
 * use fetch_array() to return an associative array
 * process the $row

 */

$sql_query = "SELECT * FROM superheros  WHERE superpower LIKE '%laser%'";
?