<?php

namespace App\Controllers;
use App\Models\CrudModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Home';
        return view('index', $data);
    }

    public function pengumuman(): string
    {
      $data['title'] = 'Pengumuman';
      return view('pengumuman', $data);
    }

    public function cpns(): string
    {
      $this->cachePage(86400);

      $model = new CrudModel;
      $data['formasi'] = $model->getResult('temp_formasi',['pengadaan'=>'CPNS']);
      $data['title'] = 'Formasi CPNS';
      return view('formasi/cpns', $data);
    }

    public function cpppkteknis(): string
    {
      $this->cachePage(86400);

      $model = new CrudModel;
      $data['formasi'] = $model->getResult('temp_formasi',['pengadaan'=>'TEKNIS']);
      $data['title'] = 'Formasi PPPK Teknis';
      return view('formasi/teknis', $data);
    }

    public function sktt(): string
    {
      $this->cachePage(86400);
      $data['title'] = 'Tata Cara Penggunaan SEB';

      return view('sktt', $data);
    }

    public function cpppknakes(): string
    {
      $this->cachePage(86400);

      $model = new CrudModel;
      $data['formasi'] = $model->getResult('temp_formasi',['pengadaan'=>'NAKES']);
      $data['title'] = 'Formasi PPPK Nakes';
      return view('formasi/nakes', $data);
    }

    public function faq(): string
    {
      $this->cachePage(86400);

      $model = new CrudModel;
      $data['general'] = $model->getResult('faq',['category'=>1]);
      $data['syarat'] = $model->getResult('faq',['category'=>2]);
      $data['pendidikan'] = $model->getResult('faq',['category'=>3]);
      $data['title'] = 'FAQ';
      return view('faq', $data);
    }

    public function pg(): string
    {
      // $this->cachePage(86400);
      $data['title'] = 'Passing Grade';
      return view('pg', $data);
    }

    public function persyaratan(): string
    {
      $model = new CrudModel;
      $data['jabatan'] = $model->getjabatan();

      $data['pengadaan'] = '';
      $data['jenis'] = '';
      $data['sjabatan'] = '';
      $data['syaratumum'] = (object) array();
      $data['syaratkhusus'] = (object) array();

      if($this->request->getVar('pengadaan')){
        $data['syaratumum'] = $model->getPersyaratanUmum('UMUM',$this->request->getVar('pengadaan'),$this->request->getVar('jenis'));
        $data['syaratkhusus'] = $model->getPersyaratanKhusus($this->request->getVar('pengadaan'),$this->request->getVar('jenis'),$this->request->getVar('jabatan'));

        $data['pengadaan'] = $this->request->getVar('pengadaan');
        $data['jenis'] = $this->request->getVar('jenis');
        $data['sjabatan'] = $this->request->getVar('jabatan');
      }

      $data['title'] = 'Persyaratan';
      return view('persyaratan', $data);
    }
}
