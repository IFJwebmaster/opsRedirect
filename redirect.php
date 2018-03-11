<?php
$servername = $_SERVER["SERVER_NAME"];
list($host,$servername,$tld) = explode(".",$servername);

if ($host == "operations"){ 
   header("HTTP/1.1 301 Moved Permanently" ); 
   header("Location: https://illinoisfirejuniors.sharepoint.com/sites/group.operations/SitePages/Home.aspx"); 
}
else {
    header("HTTP/1.1 302 Temporarily Permanently" ); 
    header("Location: http://www.illinoisfirejuniors.com"); 
}
/* Make sure that code below does not get executed when we redirect. */
exit;

?>