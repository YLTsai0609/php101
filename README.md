# php101


PHP - Hypertext Preprocessor


https://www.runoob.com/php/php-intro.html


1. php文件可包含文本、html、js、php
2. php 可直接在 server 執行，返回純 html
3. 默認副檔名 `.php`
4. 可生成動態頁面
5. 可收集表單
6. 可收發 cookie, crud 資料庫, 可輸出圖像、pdf、flash、HTML, XHTML, XML


# Installation

What you need 

1. PHP, MySQL, Webserver
   1. 支援PHP的web主機 - 可以直直接開始開發
   2. 透過 WampServer for windows XAMPP for MacOS 裝PHP, Apache, MySQL, 

[在 macOS Apache 下所搭配的後端語言，以下會依據步驟在 macOS 上安裝各種版的 PHP。macOS 上安裝 PHP 語言](https://www.ioa.tw/macOS/PHP.html)

`brew install php`

[開發環境集 XAMPP](https://www.simplilearn.com/tutorials/php-tutorial/hello-world-in-php)


## brew install php

```
(base) joetsai@MacBook-Pro-2:~/work/yulong/php101$ which php
/usr/local/bin/php
```

```
(base) joetsai@MacBook-Pro-2:~/work/yulong/php101$ php --version
PHP 8.1.3 (cli) (built: Mar  1 2022 10:23:25) (NTS)
Copyright (c) The PHP Group
Zend Engine v4.1.3, Copyright (c) Zend Technologies
    with Zend OPcache v8.1.3, Copyright (c), by Zend Technologies
	
```

# Interactive Mode


https://www.runoob.com/try/runcode.php?filename=demo_intro&type=php


[PHP 教程](https://www.runoob.com/php/php-tutorial.html)


# 套件管理工具 - Composer

[composer 介紹](https://szlforgithub.github.io/post/composer/)


Composer - php 等同於 pip - python


`require 'vendor/autoload.php';`

`composer -t` (versioning)

`composer init` - init 一個 composer.json

`composer install` - 根據專案內的(路徑之下) `composer.lock`，如果找不到，會找 `composer.json` 產生 `lock`，並安裝


# Py2P

|python|php|note|
|------|---|----|
|import|include / require||
|self|this|
|cls|self|
|dict|array|
|list|array|
|self.|this->|物件呼叫屬性、方法|
|cls.|self::|類別(尚未實例話化)呼叫屬性、方法，`::` is a scope resulition operator in `php`|



[node.js, python, php, ruby Scripting Language 語法對照表](https://hyperpolyglot.org/scripting)
