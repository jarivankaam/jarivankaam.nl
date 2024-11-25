<?php

$routes = [
  '/' => './public/views/index.php',
  '/cases' => './public/views/cases.php',
  '/cases/linktree' => './public/views/case-linktree.php',
  '/cases/jarivankaam' => './public/views/case-jarivankaam.php',
  '/cases/witns' => './public/views/case-whenisthenextsession.php',
  '/contact' => './public/views/contact.php',
];

$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if (isset($routes[$uri]) && file_exists($routes[$uri])) {
  require $routes[$uri];
} else {
  require '404.php';
}

