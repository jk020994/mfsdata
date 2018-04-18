<?php
	require('../config.php');
	$id = trim($_GET["id"]);
	$sql_string_temp = "Select maqh,name from tblquanhuyen where matp='".$id."'";
	$sql_temp = $mysqli->query($sql_string_temp);
	if ($sql_temp->num_rows <> 0) {
		while ($obj = $sql_temp->fetch_object()) {
			echo "<option></option>";
			echo "<option value='".$obj->maqh."'> ".$obj->name." </option>";
		}
	}
?>