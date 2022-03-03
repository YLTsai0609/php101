<?php

echo __LINE__; // 第幾行
echo __FILE__; //絕對路徑
echo __DIR__; //資料夾

function test(){
	echo  __FUNCTION__; // 函數名稱
}
  
class MyClass{
	function _print(){
		echo __CLASS__; //classname
		echo __FUNCTION__; // function
	}
}

$t = new test();
$t->_print();

// __TRAIT__ -> 作用域
// __METHOD__ -> 方法
// __NAMESPACE__ -> 命名空間
}
?>