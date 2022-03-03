<?php

// 变量以 $ 符号开始，后面跟着变量的名称
// 变量名必须以字母或者下划线字符开始
// 变量名只能包含字母、数字以及下划线（A-z、0-9 和 _ ）
// 变量名不能包含空格
// 变量名是区分大小写的（$y 和 $Y 是两个不同的变量）

// 弱型別


$x=5;
$y=6;
$z=$x+$y;
echo $z;
echo "<br>";

// 作用域
// local, global, statis, parameter
// local 只在函數內
// global 皆可用，也可以透過 $GLOBALS 來拿取
// static 函數結束就死了
// parameters - 參數作用域

function myTest($x)
{
	$y=10; // local
	echo "x :$x";
	echo "<br>";
	echo "y :$y";
}

myTest(10)

?>

