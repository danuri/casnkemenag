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
      $data['formasi'] = $model->getResult('temp_formasi',['pengadaan'=>'CPNS']);
      return view('formasi/cpns', $data);
    }

    public function cpppkteknis(): string
    {
      $this->cachePage(86400);

      $model = new CrudModel;
      $data['formasi'] = $model->getResult('temp_formasi',['pengadaan'=>'TEKNIS']);
      return view('formasi/teknis', $data);
    }

    public function cpppknakes(): string
    {
      $this->cachePage(86400);

      $model = new CrudModel;
      $data['formasi'] = $model->getResult('temp_formasi',['pengadaan'=>'NAKES']);
      return view('formasi/nakes', $data);
    }

    public function faq(): string
    {
      $this->cachePage(86400);

      $model = new CrudModel;
      $data['general'] = $model->getResult('faq',['category'=>1]);
      $data['syarat'] = $model->getResult('faq',['category'=>2]);
      $data['pendidikan'] = $model->getResult('faq',['category'=>3]);
      return view('faq', $data);
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

      return view('persyaratan', $data);
    }
}
