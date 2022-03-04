<?php

// public 誰都能 call
// protected class本身以及其子類、父類可call
// private class本身可 call

class MyClass
{
	public $public = 'Public';
	protected $protected = 'Protected';

	private $private = 'Private';

	function printHello()
	{
		echo $this->public;
		echo $this->protected;
		echo $this->private;
	}

	private function classprivate()
	{
		echo "Hi";
	}
}

class ChildClass extends MyClass
{


}

$obj = new MyClass();
echo $obj->public; //可以跑
// echo $obj->protected; //不能跑
// echo $obj->private; //不能跑
$obj->printHello();

$childobj = new ChildClass();
echo $childobj->classprivate();
