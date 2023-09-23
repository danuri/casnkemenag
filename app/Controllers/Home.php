<?php

namespace App\Controllers;
use App\Models\CrudModel;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function pengumuman(): string
    {
      return view('pengumuman');
    }

    public function cpns(): string
    {
      $this->cachePage(86400);

      $model = new CrudModel;
      $data['formasi'] = $model->getResult('temp_formasi_cpns');
      return view('formasi/cpns', $data);
    }

    public function cpppkteknis(): string
    {
      return view('formasi');
    }

    public function cpppknakes(): string
    {
      return view('formasi');
    }

    public function faq(): string
    {
      $this->cachePage(6400);

      $model = new CrudModel;
      $data['general'] = $model->getResult('faq',['category'=>1]);
      $data['syarat'] = $model->getResult('faq',['category'=>2]);
      return view('faq', $data);
    }
}
