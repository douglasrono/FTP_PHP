 <?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$dir = "images";

// try to create directory $dir
if (ftp_mkdir($ftp_conn, $dir))
  {
  echo "Successfully created $dir";
  }
else
  {
  echo "Error while creating $dir";
  }

// close connection
ftp_close($ftp_conn);
?> 
