<?php

// import in python, include in php

include "oop_contruct.php";

class Child_Site extends Site
{
	var $category;

	function setCate($par)
	{
		$this->category = $par;
	}

	function getCate()
	{
		echo $this->category . PHP_EOL;
	}

}

$google = new Child_Site('www.google.com', 'Google');
$google->setCate('global search service');

$google->getTitle();
$google->getUrl();
$google->getCate();
?>

