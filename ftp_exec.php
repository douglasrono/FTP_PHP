 <?php
// connect and login to FTP server
$ftp_server = "ftp.example.com";
$ftp_conn = ftp_connect($ftp_server) or die("Could not connect to $ftp_server");
$login = ftp_login($ftp_conn, $ftp_username, $ftp_userpass);

$command = "ls-al > somefile.txt";

// execute command
if (ftp_exec($ftp_conn,$command))
  {
  echo "$command executed successfully.";
  }
else
  {
  echo "Execution of $command failed.";
  }

// close connection
ftp_close($ftp_conn);
?> 
