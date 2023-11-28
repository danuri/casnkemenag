<?php

namespace App\Models;

use CodeIgniter\Model;

class CrudModel extends Model
{

      protected $db;

      public function __construct()
      {
        $this->db = \Config\Database::connect('default', false);

      }

      public function getRow($table,$where)
      {
        $builder = $this->db->table($table);
        $query = $builder->getWhere($where);

        return $query->getRow();
      }

      public function getResult($table,$where=false)
      {
        $builder = $this->db->table($table);

        if($where){
          $query = $builder->getWhere($where);
        }else{
          $query = $builder->get();
        }

        return $query->getResult();
      }

      public function getjabatan()
      {
        $query = $this->db->query("SELECT jabatan_id, jabatan FROM temp_formasi GROUP BY jabatan_id, jabatan")->getResult();
        return $query;
      }

      public function getPersyaratanUmum($syarat,$pengadaan,$jenis)
      {
        if($jenis == 8){
          $query = $this->db->query("SELECT * FROM temp_persyaratan WHERE jenis='$pengadaan' AND (jenis_formasi_id='8' OR jenis_formasi_id='1') AND jenis_persyaratan='$syarat'")->getResult();
        }else{
          $query = $this->db->query("SELECT * FROM temp_persyaratan WHERE jenis='$pengadaan' AND jenis_formasi_id='$jenis' AND jenis_persyaratan='$syarat'")->getResult();
        }
        return $query;
      }

      public function getPersyaratanKhusus($pengadaan,$jenis,$jabatan)
      {
        if($jenis == 8){
          $query = $this->db->query("SELECT * FROM temp_persyaratan WHERE jenis='$pengadaan' AND (jenis_formasi_id='8' OR jenis_formasi_id='1') AND jabatan_id='$jabatan' AND jenis_persyaratan='KHUSUS'")->getResult();
        }else{
          $query = $this->db->query("SELECT * FROM temp_persyaratan WHERE jenis='$pengadaan' AND jenis_formasi_id='$jenis' AND jabatan_id='$jabatan' AND jenis_persyaratan='KHUSUS'")->getResult();
        }
        return $query;
      }

      public function getProv()
      {
        $query = $this->db->query("SELECT id_provinsi,provinsi FROM skt_lokasi GROUP BY id_provinsi,provinsi")->getResult();

        return $query;
      }
}
