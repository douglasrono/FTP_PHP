 <?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$server_file = "serverfile.txt";

// open local file
$local_file = "localfile.txt";
$fp = fopen($local_file,"r");

// initiate upload
$d = ftp_nb_fput($ftp_conn, $server_file, $fp, FTP_BINARY)

while ($d == FTP_MOREDATA)
  {
  // do whatever you want
  // continue uploading
  $d = ftp_nb_continue($ftp_conn);
  }

if ($d != FTP_FINISHED)
  {
  echo "Error uploading $local_file";
  exit(1);
  }

// close connection
ftp_close($ftp_conn);
?> 
