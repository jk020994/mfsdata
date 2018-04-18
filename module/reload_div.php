<?php
session_start();
if (empty($_SESSION['login_user'])){
	header("location: /");
} else {
require('../config.php');
	$sql_string_temp = "Select count(*) as total_customer from tblcustomer";
	$sql_temp = $mysqli->query($sql_string_temp);
	if ($sql_temp->num_rows <> 0) {
		$obj = $sql_temp->fetch_object();
		echo $obj->total_customer;
	}
}
