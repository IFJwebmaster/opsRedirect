<?php

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

$servername = $_SERVER["SERVER_NAME"];
list($host,$servername,$tld) = explode(".",$servername);

if ($host == "operations"){ 
   header("HTTP/1.1 301 Moved Permanently" ); 
   header("Location: https://illinoisfirejuniors.sharepoint.com/sites/group.operations/SitePages/Home.aspx"); 
}
if ($host == "ambassadors" || $host = "ambassador"){ 
    header("HTTP/1.1 301 Moved Permanently" ); 
    header("Location: https://illinoisfirejuniors.sharepoint.com/sites/ambassadors"); 
 }
else {
    header("HTTP/1.1 302 Temporarily Permanently" ); 
    header("Location: http://www.illinoisfirejuniors.com"); 
}
/* Make sure that code below does not get executed when we redirect. */
exit;

?>