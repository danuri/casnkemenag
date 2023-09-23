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

      public function dokumen()
      {
        $kode = session('idsatker');
        $query = $this->db->query("SELECT a.*,
                                  (SELECT lampiran FROM tr_dokumen WHERE id_dokumen=a.id AND id_satker='$kode') lampiran
                                  FROM tm_dokumen a")->getResult();
        return $query;
      }
}
