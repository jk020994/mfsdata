<?php
        $ldap_server = "192.168.4.3:389";
	$username='phuongvb';
	$password='Ngancon273';
	$auth_user = $username ."@mfs5.local";
	$base_dn = "ou=CallOut,ou=CSKH,ou=HP,dc=mfs5,dc=local";
	$filter = "(&(objectCategory=user)(objectClass=organizationalPerson)(mail=*))";
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
                    echo $info[$i]["samaccountname"][0];
                    echo "<br />";
		}
	}
