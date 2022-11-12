 <?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

// change the current directory to php
ftp_chdir($ftp_conn, "php");

// change to the parent directory
if (ftp_cdup($ftp_conn))
  {
  echo "Successfully changed to parent directory.";
  }
else
  {
  echo "cdup failed.";
  }

// output current directory name
echo ftp_pwd($ftp_conn);

// close connection
ftp_close($ftp_conn);
?> 
