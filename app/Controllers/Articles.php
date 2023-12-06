<?php

namespace App\Controllers;

use App\Models\ArticleModel;

class Articles extends BaseController
{
    public function index(): string
    {
      $model = new ArticleModel;

      $data = $model->findAll();

      return view("Articles/index.php", [
        "articles" => $data
      ]);
    }
}