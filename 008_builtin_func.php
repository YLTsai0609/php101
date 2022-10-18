<?php
// merge dict


$d1 = array(
	"hi" => "there",
	"yo" => "hey"
);

$d2 = array(
	"aa" => "bb",
	"cc" => "dd"
);

$d3 = array_merge($d1, $d2);

var_dump($d3);

?>
