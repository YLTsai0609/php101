<?php

// 很多 function --> 用 class 包起來
// 很多 class --> 用命名空間包起來 

namespace b;

class hello
{
	static public function get()
	{
		return "b get";
	}
}

class bye
{
	static public function get()
	{
		return "b bye";
	}
}