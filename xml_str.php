 <?php
// Invalid xml file
$xmlfile = 'test.xml';
$xmlparser = xml_parser_create();

// Open the file and read data
$fp = fopen($xmlfile, 'r');
while ($xmldata = fread($fp, 4096)) {
  // parse the data chunk
  if (!xml_parse($xmlparser,$xmldata,feof($fp))) {
    die( print "ERROR: "
    . xml_error_string(xml_get_error_code($xmlparser))
    . "<br>Line: "
    . xml_get_current_line_number($xmlparser)
    . "<br>Column: "
    . xml_get_current_column_number($xmlparser)
    . "<br>");
  }
}
xml_parser_free($xmlparser);
?> 
