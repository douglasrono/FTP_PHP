 <?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$file = "php/test.txt";

// try to delete file
if (ftp_delete($ftp_conn, $file))
  {
  echo "$file deleted";
  }
else
  {
  echo "Could not delete $file";
  }

// close connection
ftp_close($ftp_conn);
?> 
