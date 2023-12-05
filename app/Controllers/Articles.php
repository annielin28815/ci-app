<?php

namespace App\Controllers;

class Articles extends BaseController
{
    public function index(): string
    {
        return view("header", ["title" => "Articles"])
            .  view("Articles/index.php");
    }
}