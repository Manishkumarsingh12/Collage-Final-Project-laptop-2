<?php

function redirect($page)
{
$currentPageUrl = 'http://' . $_SERVER["HTTP_HOST"] ;
$urln ="Location:".$currentPageUrl."/Collage%20Final%20Project/".$page;
echo "Current page URL " .$urln;
header($urln);
}



?>