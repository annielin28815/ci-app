<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get("/", "Home::index");

$routes->group("", ["filter" => "login"], static function ($routes) {
  $routes->get("articles/(:num)/delete", "Articles::confirmDelete/$1");
  $routes->resource("articles", ["placeholder" => "(:num)", "filter" => "login"]);
});

service("auth")->routes($routes);
