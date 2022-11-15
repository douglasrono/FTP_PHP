<?php
// set up basic SSL connection
$ftp_server = "123.123.123.123";
$ftp_conn = ftp_ssl_connect($ftp_server) or die("Could not connect to $ftp_server");

// login
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

// then do something...

// close SSL connection
ftp_close($ftp_conn);
?>
