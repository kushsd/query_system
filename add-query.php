<?php
$db1=mysqli_connect("localhost","akeshjai_dbu", "sms123","newweb");

$new_query = mysqli_real_escape_string($db1, $_POST["new_query"]);
$new_code = mysqli_real_escape_string($db1, $_POST["new_code"]);
$new_loc = mysqli_real_escape_string($db1, $_POST["new_loc"]);
$new_soln = mysqli_real_escape_string($db1, $_POST["new_soln"]);



$query_sql = "INSERT INTO `dev_query` (query, loc, code, soln) VALUES ('$new_query','$new_loc','$new_code','$new_soln')";
$dev_query = mysqli_query($db1, $query_sql);
?>