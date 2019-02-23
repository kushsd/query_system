<?php
$db1=mysqli_connect("localhost","akeshjai_dbu", "sms123","newweb");
$del_id = $_POST["id"];
echo $del_id;
$query_sql = "DELETE FROM `dev_query` WHERE id=$del_id";
$dev_query = mysqli_query($db1, $query_sql);
?>