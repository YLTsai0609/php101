<?php

include_once("developer_a.php");
include_once("developer_b.php");

echo a\hello::get();
echo b\hello::get();

echo a\bye::get();
echo b\bye::get();

?>