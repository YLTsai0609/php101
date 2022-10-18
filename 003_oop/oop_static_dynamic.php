<?php
// static 不實例化，可以直接訪問

class Foo{
	public static $v1 = 'foo';

	public static $arr = [
		'abc' => 'v1',
		'bcd' => 'v2'
	];

	protected static $protected_arr = [
		'abc' => 'v1',
		'bcd' => 'v2'
	];

	public function get_v1(){
		return self::$v1;
	}

	public static function get_arr(){
		return self::$protected_arr;
	}
}

echo Foo::$v1;
var_dump(Foo::$arr); # worked

// var_dump(Foo::$protected_arr); # Tnis one is not working

var_dump(Foo::get_arr())
?>