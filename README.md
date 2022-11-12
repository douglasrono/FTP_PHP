# FTP PHP FUNCTIONS

<h3>PHP FTP Introduction</h3>

<p>The FTP functions give client access to file servers through the File Transfer Protocol (FTP).</p>

The FTP functions are used to open, login and close connections, as well as upload, download, rename, delete, and get information on files from file servers. Not all of the FTP functions will work with every server or return the same results. The FTP functions became available with PHP 3.

If you only wish to read from or write to a file on an FTP server, consider using the ftp:// wrapper with the Filesystem functions which provide a simpler and more intuitive interface.
Installation

For these functions to work, you have to compile PHP with --enable-ftp.

The Windows version of PHP has built-in support for this extension.
