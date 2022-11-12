<?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$file = "/test/myfile";

// allocate space
if (ftp_alloc($ftp_conn, filesize($file), $result))
  {
  echo "Space allocated on server. Sending $file.";
  ftp_put($ftp_conn, "/files/myfile", $file, FTP_BINARY);
  }
else
  {
  echo "Error! Server said: $result";
  }
