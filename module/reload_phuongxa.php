<?php
	require('../config.php');
	$id = trim($_GET["id"]);
	$sql_string_temp = "Select xaid,name from tblphuongxa where maqh='".$id."'";
	$sql_temp = $mysqli->query($sql_string_temp);
	if ($sql_temp->num_rows <> 0) {
		while ($obj = $sql_temp->fetch_object()) {
			echo "<option></option>";
			echo "<option value='".$obj->xaid."'> ".$obj->name." </option>";
		}
	}
?>