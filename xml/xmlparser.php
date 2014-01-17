<?php

$fh = fopen('./data/movies.xml', 'r');
if (!$fh) { 
	die('cannot open file'); 
}
$data = '';

while (!feof($fh)) {
	$data .= fgets($fh) . "\n";
}

$tags = array();
$cdata = array();

$xml = xml_parser_create();

xml_set_element_handler($xml, 'startHandler', 'endHandler');
xml_set_character_data_handler($xml, 'charHandler');
xml_parse($xml, $data);
xml_parser_free($xml);



function startHandler($parser, $name, $attr)
{
	global $tags;
	$tags[] = $name;
}

function endHandler($parser, $name) { }

function charHandler($parser, $data)
{
	global $cdata;
	if (!trim($data)) { return; }
	$cdata[] = $data;
}


var_dump(array_unique($tags));
var_dump($cdata);

$xml = xml_parser_create();
xml_parse_into_struct($xml, $data, $struct, $index);

var_dump($struct);