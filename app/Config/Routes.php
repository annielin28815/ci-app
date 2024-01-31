<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get("/", "Home::index");

$routes->group("", ["filter" => "login"], static function ($routes) {
  $routes->get("articles/(:num)/delete", "Articles::confirmDelete/$1");
  $routes->resource("articles", ["placeholder" => "(:num)", "filter" => "login"]);

  $routes->get("articles/(:num)/image/edit", "Article\Image::new/$1");
  $routes->post("articles/(:num)/image/create", "Article\Image::create/$1");

  $routes->get("articles/(:num)/image", "Article\Image::get/$1");
  $routes->post("articles/(:num)/image/delete", "Article\Image::delete/$1");
});

service("auth")->routes($routes);
