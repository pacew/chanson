<?php

require_once ("app.php");

pstart ();

$body .= "<div>\n";
$body .= mklink_nw ("Chansonnier de Noailles", $chanson_basename);
$body .= "</div>\n";

$body .= "<form action='page.php'>\n";
$body .= "<input type='text' name='pagenum' />\n";
$body .= "<input type='submit' value='Go to page' />\n";
$body .= "</form>\n";


pfinish ();

