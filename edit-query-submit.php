<?php
$db1=mysqli_connect("localhost","akeshjai_dbu", "sms123","newweb");

$edit_id = $_POST["edit_id"];
$edit_query = $_POST["edit_query"];
$edit_code = $_POST["edit_code"];
$edit_loc = $_POST["edit_loc"];
$edit_soln = $_POST["edit_soln"];

$sql = "UPDATE dev_query SET query= '$edit_query', code= '$edit_code', loc= '$edit_loc', soln='$edit_soln' WHERE id=$edit_id";
#echo $sql;
$dev_query = mysqli_query($db1, $sql);
?>
