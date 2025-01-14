<a href="/">шапка</a>

<?php

$request = $_SERVER['REQUEST_URI'];



switch ($request) {
  case '/':
    require 'pages/home.php';
    break;

  case '/product':
    require 'pages/product.php';
    break;

  case '/about':
    require 'pages/about.php';
    break;

  // default:
  //   http_response_code(404);
  //   require 'pages/404.php';
  //   break;
}
;