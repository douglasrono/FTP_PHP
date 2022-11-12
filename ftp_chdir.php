 <?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

// change the current directory to php
ftp_chdir($ftp_conn, "php");

// output current directory name (/php)
echo ftp_pwd($ftp_conn);

// close connection
ftp_close($ftp_conn);
?> 
