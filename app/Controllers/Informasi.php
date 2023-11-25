<?php

namespace App\Controllers;
use App\Models\CrudModel;

class Informasi extends BaseController
{
  public function index()
  {
    $data['title'] = 'Home';
    return view('informasi', $data);
  }
}
