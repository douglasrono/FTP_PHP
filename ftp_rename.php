 <?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$old_file = "oldfile.txt";
$new_file = "newfile.txt";

// try to rename $old_file to $new_file
if (ftp_rename($ftp_conn, $old_file, $new_file))
  {
  echo "Renamed $old_file to $new_file";
  }
else
  {
  echo "Problem renaming $old_file to $new_file";
  }

// close connection
ftp_close($ftp_conn);
?> 
