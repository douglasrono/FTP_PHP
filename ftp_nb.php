 <?php
// initiate download
$d = ftp_nb_get($ftp_conn, "local.txt", "server.txt", FTP_BINARY)

while ($d == FTP_MOREDATA)
  {
  // do whatever you want
  // continue downloading
  $d = ftp_nb_continue($ftp_conn);
  }

if ($d != FTP_FINISHED)
  {
  echo "Error downloading file.";
  exit(1);
  }

?> 
