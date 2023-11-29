<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\LokasiModel;
use App\Models\CrudModel;

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
      ]))
      {
        return redirect()->back()->with('message', 'Isi semua form.');
      }

      $model = new LokasiModel;
      $cek = $model->where(['nik'=>$this->request->getVar('nik'),'nomor_peserta'=>$this->request->getVar('nopes')])->first();

      if($cek){
        $data['title'] = 'Home';
        $data['auth'] = true;
        $data['peserta'] = $cek;

        $crud = new CrudModel;
        $data['provinsi'] = $crud->getProv();
        return view('lokasi', $data);
      }else{
        return redirect()->back()->with('message', 'Kombinasi NIK dan Nomor Peserta tidak ditemukan.');
      }
    }

    public function getkab($provinsi)
    {
      $crud = new CrudModel;
      $kabupaten = $crud->getResult('skt_lokasi',['id_provinsi'=>$provinsi]);

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

      return redirect()->back()->with('message', 'Data telah disimpan.');
    }
}