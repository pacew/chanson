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
$body .= mklink_nw ("link to the BNF", $t);
$body .= "</div>\n";

$body .= sprintf ("<a href='%s' target='_blank'>", fix_target ($t));
$img= sprintf ("%s/f%d.lowres", $chanson_basename, $arg_pagenum);
$body .= sprintf ("<img src='%s' alt='' />\n",
                  fix_target ($img));
$body .= "</a>\n";

if ($arg_pagenum == 362) {
    $body .= "<div>\n";
    $body .= "<img src='page362-1-trimmed.png' alt='' />\n";
    $body .= "</div>\n";

    $body .= "<div>\n";
    $t = "http://lilypond.org/doc/v2.18/Documentation/notation/typesetting-gregorian-chant";
    $body .= mklink ("lilypond source", $t);
    $body .= "</div>\n";

    $body .= "<textarea cols='80' rows='15' readonly='readonly'>\n";
    $s = file_get_contents ("page362-1.ly");
    $body .= h($s);
    $body .= "</textarea>\n";
}


pfinish ();

