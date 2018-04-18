<?php 
session_start();
if (empty($_SESSION['login_user'])){
	header("location: /");
} else {
require('../config.php');
	$sodienthoai = $_GET["sodienthoai"];
	$danhso = $_SESSION['login_user']);
	$loaithuebao = $_GET["loaithuebao"];
	$ketquatruyenthong = $_GET["ketquatruyenthong"];
	$khongtruyenthong = trim($_GET["khongtruyenthong"]);
	$khachhangchudong = trim($_GET["khachhangchudong"]);
	$ngaycapnhat = date("d/m/Y h:i:s A");
	$trangthai = 1;


		$sql_link = "Insert Into tblEventTT5(sodienthoai,danhso,thoigian,loaithuebao,ketquatruyenthong,khongtruyenthong,khachhangchudong,trangthai) VALUES('$sodienthoai','$danhso',STR_TO_DATE('$ngaycapnhat', '%d/%m/%Y %r'),'$loaithuebao','$ketquatruyenthong','$khongtruyenthong','$khachhangchudong','$trangthai')";	
		$sql_insert = $mysqli->query($sql_link);
	
}
?>