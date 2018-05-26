<?php

//error_reporting(E_ALL);
//ini_set('display_errors', '1');

$servername = $_SERVER["SERVER_NAME"];
list($host,$servername,$tld) = explode(".",$servername);

if ($host == "operations"){ 
   header("HTTP/1.1 301 Moved Permanently" ); 
   header("Location: https://illinoisfirejuniors.sharepoint.com/sites/group.operations/SitePages/Home.aspx"); 
}
elseif ($host == "ambassadors" || $host == "ambassador"){ 
    header("HTTP/1.1 301 Moved Permanently" ); 
    header("Location: https://illinoisfirejuniors.sharepoint.com/sites/ambassadors"); 
 }
 elseif ($host == "register"){ 
    header("HTTP/1.1 301 Moved Permanently" ); 
    header("Location: https://illinoisfirejuniors.sportngin.com/register/form/633120784"); 
 }
else {
    header("HTTP/1.1 302 Temporarily Permanently" ); 
    header("Location: http://www.illinoisfirejuniors.com"); 
}
/* Make sure that code below does not get executed when we redirect. */
exit;

?>