 <?php
// connect to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");

// the two lines below is the same as: ftp_login($ftp_conn,"john","secretpassword");
ftp_raw($ftp_conn, "USER john");
ftp_raw($ftp_conn, "PASS secretpassword");

?> 
