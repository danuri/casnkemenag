<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LokasiModel;
use App\Models\CrudModel;
use App\Models\LogModel;

class Lokasi extends BaseController
{
    public function index()
    {
      $data['title'] = 'Home';
      $data['auth'] = false;
      $data['peserta'] = (object) ['tilok_kabupaten' => false];
      return view('lokasi', $data);
    }

    public function auth()
    {
      if( !$this->validate([
        'nik' 	=> 'required',
        'nopes' 	=> 'required',
        'ijazah' 	=> 'required',
      ]))
      {
        return redirect()->back()->with('message', 'Isi semua form.');
      }

      $cache = \Config\Services::cache();
      // $cek = $cache->get('auth_'.$this->request->getVar('nopes'));
      $model = new LokasiModel;
      $cek = $model->where(['nik'=>$this->request->getVar('nik'),'nomor_peserta'=>$this->request->getVar('nopes'),'nomor_ijazah'=>$this->request->getVar('ijazah')])->first();

      if($cek){
        helper('cookie');
        set_cookie('ci_call',$this->request->getVar('nik'));

        $data['title'] = 'Home';
        $data['auth'] = true;
        $data['peserta'] = $cek;

        $cache = \Config\Services::cache();
        $cacheKey = 'query_getprov';
        $provinsi = $cache->get($cacheKey);

        if ($provinsi === null) {
          $crud = new CrudModel;
          $provinsi = $crud->getProv();

          $cache->save($cacheKey, $provinsi, 360000);
        }

        $crud = new CrudModel;
        $data['provinsi'] = $provinsi;
        return view('lokasi', $data);
      }else{
        helper('cookie');
        $cookienik = get_cookie('ci_call');

        if($cookienik && $cookienik != $this->request->getVar('nik')){
          $log = new LogModel;
          $ip = $this->request->getVar('addr');
          $setlog = $log->insert(['log_status'=>'Error Validation','nik'=>$this->request->getVar('nik'),'keterangan'=>$cookienik,'ip_address'=>$ip]);
        }


        return redirect()->back()->with('message', 'Kombinasi NIK dan Nomor Peserta tidak ditemukan.');
      }
    }

    public function getkab($provinsi)
    {
      $cache = \Config\Services::cache();
      $cacheKey = 'query_getkab_'.$provinsi;
      $kabupaten = $cache->get($cacheKey);

      if ($kabupaten === null) {
        $crud = new CrudModel;
        $kabupaten = $crud->getResult('skt_lokasi',['id_provinsi'=>$provinsi]);

        $cache->save($cacheKey, $kabupaten, 360000);
      }

      echo '<option value="">-Pilih Lokasi-</option>';
      foreach ($kabupaten as $row) {
        echo '<option value="'.$row->id.'">'.$row->lokasi_ujian.'</option>';
      }
    }

    public function save()
    {
      if( !$this->validate([
        'userid' 	=> 'required',
        'provinsi' 	=> 'required',
        'kabupaten' 	=> 'required',
      ]))
      {
        return redirect()->back()->with('message', 'Data tidak lengkap.');
      }

      $model = new LokasiModel;
      $param = [
        'tilok_provinsi' => $this->request->getVar('provinsi'),
        'tilok_kabupaten' => $this->request->getVar('kabupaten'),
      ];
      $id = decrypt($this->request->getVar('userid'));
      $model->update($id,$param);


      // $cek = $model->find($id);
      // $cache = \Config\Services::cache();
      // $cache->save('auth_'.$id, $row, 360000);

      return redirect()->back()->with('message', 'Data telah disimpan.');
    }

    public function test()
    {
      $cache = \Config\Services::cache();
      $cacheKey = 'query_getprov';
      $provinsi = $cache->get($cacheKey);

      print_r($provinsi);
    }

    public function redisauth($limit,$page)
    {
			$offset = ($page == 0) ? 0 : ($page * $limit) - 1;

      $model = new LokasiModel;
      $peserta = $model->findAll($limit, $offset);

      foreach ($peserta as $row) {
        $cache = \Config\Services::cache();
        $cache->save('auth_'.$row->nomor_peserta, $row, 360000);
      }

      $page = $page + 1;
      return redirect()->to('lokasi/redisauth/'.$limit.'/'.$page);
    }
}
