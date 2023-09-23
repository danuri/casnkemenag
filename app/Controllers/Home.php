<?php

namespace App\Controllers;

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
      return view('formasi');
    }

    public function cpppkteknis(): string
    {
      return view('formasi');
    }

    public function cpppknakes(): string
    {
      return view('formasi');
    }
}
