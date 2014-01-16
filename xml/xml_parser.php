<?php

$fp = fopen('./data/movies.xml', 'r');
$data = '';
while(!feof($fp)) {
    $data .= fgets($fp) . "\n";
}

$parser = xml_parser_create();

function startHandler($parser, $tag, $attr) {
    global $tags;
    $tags[] = $tag;
}

function endHandler($parser, $cdata) {
}

function charHandler($parser, $data) {
    global $cdata;
    if (!trim($data)) { return;  }
    $cdata[] = $data;
}

$tags = array();
$cdata = array();

/*
xml_set_element_handler($parser, 'startHandler', 'endHandler');
xml_set_character_data_handler($parser, 'charHandler');
xml_parse($parser, $data);

var_dump($tags);
var_dump($cdata);
*/

xml_parse_into_struct($parser, $data, $tags, $cdata);

#var_dump($tags);
var_dump($cdata);


xml_parser_free($parser);
fclose($fp);
