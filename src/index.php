<a href="/">шапка</a>

<?php

require_once(__DIR__ . '/classes/Human.php');
require_once(__DIR__ . '/classes/Lesson.php');

// $human = new Human();

// $human->setHuman('yasha', '35', 'backend', 'loh', ['en', 'rus']);

// $html = $human->show();

// $arr = $human->info();

// echo ($html);

// print_r($arr);

$lesson = new Lesson('course', 'fix', 3, 34, 'sds', 'yash');

$time = $lesson->hours();

echo ($time);


// switch ($request) {
//   case '/':
//     require 'pages/home.php';
//     break;

//   case '/product':
//     require 'pages/product.php';
//     break;

//   case '/about':
//     require 'pages/about.php';
//     break;

//   default:
//     http_response_code(404);
//     require 'pages/404.php';
//     break;
// }
// ;