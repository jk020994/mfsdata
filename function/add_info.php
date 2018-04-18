<?php 
session_start();
if (empty($_SESSION['login_user'])){
	header("location: /");
} else {
require('../config.php');
	//$hoten = trim($_SESSION['login_fullname']);
	$sodienthoai = $_GET["sodienthoai"];
	$hoten = trim($_GET["hoten"]);
	$gioitinh = $_GET["gioitinh"];
	$ngaysinh = $_GET["ngaysinh"];
	$diachi = trim($_GET["diachi"]);
	$xaid = trim($_GET["xaid"]);
	$maqh = trim($_GET["maqh"]);
	$matp = trim($_GET["matp"]);
	$cmnd = trim($_GET["cmnd"]);
	$nghenghiep = trim($_GET["nghenghiep"]);	
	$nguoicapnhat = trim($_SESSION['login_user']);
	$ngaycapnhat = date("d/m/Y h:i:s A");
	$sql_string_temp = "SELECT EXISTS(SELECT 1 FROM tblcustomer WHERE sodienthoai = '".$sodienthoai."') as dem";
	$sql_temp = $mysqli->query($sql_string_temp);
	$obj = $sql_temp->fetch_object();
	if ($obj->dem == 0) {
		$sql_link = "Insert Into tblcustomer(sodienthoai,hoten,gioitinh,ngaysinh,diachi,xaid,maqh,matp,cmnd,nghenghiep,nguoicapnhat,ngaycapnhat) VALUES($sodienthoai,'$hoten',$gioitinh,STR_TO_DATE('$ngaysinh','%d/%m/%Y'),'$diachi','$xaid','$maqh','$matp','$cmnd','$nghenghiep','$nguoicapnhat',STR_TO_DATE('$ngaycapnhat', '%d/%m/%Y %r'))";	
		$sql_insert = $mysqli->query($sql_link);
	} else {
		echo ('ERR100');
	}
}
?>