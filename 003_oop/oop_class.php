<?php

// PHP_EOL 為換行符號

class Site
{

	var $url;
	var $title;


	function setUrl($par)
	{
		$this->url = $par;
	}

	function getUrl()
	{
		echo $this->url . PHP_EOL;
	}
	function setTitle($par)
	{
		$this->title = $par;
	}

	function getTitle()
	{
		echo $this->title . PHP_EOL;
	}

}


$runoob = new Site;
$taobao = new Site;
$google = new Site;

// get and set

$runoob->setTitle("菜鳥");
$taobao->setTitle("掏寶");
$google->setTitle("Google");

$runoob->setUrl("www.runoob.com");
$taobao->setUrl("www.taobao,com");
$google->setUrl("www.google.com");

// call function
$runoob->getTitle();
$taobao->getTitle();
$google->getTitle();

$runoob->getUrl();
$taobao->getUrl();
$google->getUrl();


?>

