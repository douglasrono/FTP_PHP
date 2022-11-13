 <?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$server_file = "somefile.txt";

// open local file to write to
$local_file = "local.txt";
$fp = fopen($local_file,"w");


// initiate download
$d = ftp_nb_fget($ftp_conn, $fp, $server_file, FTP_BINARY)

while ($d == FTP_MOREDATA)
  {
  // do whatever you want
  // continue downloading
  $d = ftp_nb_continue($ftp_conn);
  }

if ($d != FTP_FINISHED)
  {
  echo "Error downloading $server_file";
  exit(1);
  }

// close connection and file handler
ftp_close($ftp_conn);
fclose($fp);
?> 
