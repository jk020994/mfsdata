<?php 
session_start(); // Starting Session
$error=''; // Variable To Store Error Message
require('config.php');
if (isset($_POST['submit'])) {
	if (empty($_POST['username']) || empty($_POST['password'])) {
	$error = "Bạn chưa nhập tài khoản hoặc mật khẩu";
	}
	else
	{
        /* @var $password type */
        // Define $username and $password
	$ldap_server = "192.168.4.3:389";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$auth_user = $username ."@mfs5.local";
	$base_dn = "ou=HP,dc=mfs5,dc=local";
	$filter = "(&(objectCategory=user)(objectClass=organizationalPerson)(samaccountname=".$username.")(mail=*))";
	// Kết nối đến máy chủ LDAP Server.
	if (!($connect=ldap_connect($ldap_server))) {
		$error = "Không thể kết nối đến máy chủ xác thực tài khoản";
	}
	// Xác thực tài khoản trên hệ thống Server.
	if (!($bind = ldap_bind($connect, $auth_user, $password))) {
		$error = "Tài khoản hoặc mật khẩu không đúng.";
	} else {
		// Tìm kiếm thông tin tài khoản trên hệ thống Server.
		if (!($search = ldap_search($connect, $base_dn, $filter))) {
			$error = "Không thể tìm kiếm thông tin trên hệ thống máy chủ.";
		}
		$number_returned = ldap_count_entries($connect,$search);
		$info = ldap_get_entries($connect, $search);
		for ($i=0; $i<$info["count"]; $i++) {
			$_SESSION['login_user'] = $info[$i]["samaccountname"][0];
			$_SESSION['login_fullname'] = $info[$i]["displayname"][0];
			$_SESSION['login_mail'] = $info[$i]["mail"][0];
			
		}
	}
	
	
	}
	
}
