 <?php
// connect to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");

// login
if (@ftp_login($ftp_conn, $ftp_username, $ftp_userpass))
  {
  echo "Connection established.";
  }
else
  {
  echo "Couldn't establish a connection.";
  }

// do something...

// close connection
ftp_close($ftp_conn);
?> 
