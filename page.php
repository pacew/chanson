<?php

require_once ("app.php");

pstart ();

$arg_pagenum = intval (@$_REQUEST['pagenum']);

$body .= sprintf ("<h2>page %d</h2>\n", $arg_pagenum);

$body .= "<div>\n";
$body .= "<form action='page.php'>\n";
$body .= "<input type='text' name='pagenum' />\n";
$body .= "<input type='submit' value='Go to page' />\n";
$body .= "</form>\n";
$body .= "</div>\n";


$t = sprintf ("%s/f%d.image", $chanson_basename, $arg_pagenum);
$body .= "<div>\n";
$body .= mklink_nw ("at the BNF", $t);
$body .= "</div>\n";

$t = sprintf ("%s/f%d.highres", $chanson_basename, $arg_pagenum);

$t = sprintf ("%s/f%d.lowres", $chanson_basename, $arg_pagenum);
$body .= sprintf ("<img src='%s' alt='' />\n",
                  fix_target ($t));


pfinish ();

