 <?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$dir = "/images";
$dirlist = ftp_mlsd($ftp_conn, $dir);

// output directory list
echo($dirlist);

// close connection
ftp_close($ftp_conn);
?> 
