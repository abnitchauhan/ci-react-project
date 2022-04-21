<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class MainController extends BaseController
{
    public function index()
    {
      $data = ['page_title' => "Welcome Page" ];
      echo view('main/templates/header', $data);
      echo view('main/welcome');
      echo view('main/templates/footer');
    }
}
