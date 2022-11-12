 <?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$file = "php/test.txt";

// Try to set read and write for owner and read for everybody else
if (ftp_chmod($ftp_conn, 0644, $file) !== false)
  {
  echo "Successfully chmoded $file to 644.";
  }
else
  {
  echo "chmod failed.";
  }

// close connection
ftp_close($ftp_conn);
?> 
