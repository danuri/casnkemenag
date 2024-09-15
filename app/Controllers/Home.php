<?php

namespace App\Controllers;
use App\Models\CrudModel;

class Home extends BaseController
{
    public function index(): string
    {
        $data['title'] = 'Home';
        return view('index', $data);
        // $this->cachePage(86400);
        // throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound('Informasi belum tersedia');
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
      $data['general'] = $model->getResult('faq',['category'=>1,'status'=>1]);
      // $data['syarat'] = $model->getResult('faq',['category'=>2]);
      // $data['pendidikan'] = $model->getResult('faq',['category'=>3]);
      // $data['drh'] = $model->getResult('faq',['category'=>4]);
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

    public function progresverif()
    {
      $curl = curl_init();

      curl_setopt_array($curl, array(
        CURLOPT_URL => 'https://api-sscasn.bkn.go.id/2024/dashboard/cpns/statistik',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        CURLOPT_HTTPHEADER => array(
          'Origin: https://dashboard-sscasn.bkn.go.id',
          'Authorization: Bearer eyJhbGciOiJSUzI1NiIsInR5cCIgOiAiSldUIiwia2lkIiA6ICJBUWNPM0V3MVBmQV9MQ0FtY2J6YnRLUEhtcWhLS1dRbnZ1VDl0RUs3akc4In0.eyJleHAiOjE3MjY0MDYzMDksImlhdCI6MTcyNjM2MzEwOSwiYXV0aF90aW1lIjoxNzI2MzYzMTA5LCJqdGkiOiJkNTJhMDAwMC0zMjA4LTQ3NzQtOTQxMy05YWUzZmIwMmQwM2IiLCJpc3MiOiJodHRwczovL3Nzby1zaWFzbi5ia24uZ28uaWQvYXV0aC9yZWFsbXMvcHVibGljLXNpYXNuIiwiYXVkIjoiYWNjb3VudCIsInN1YiI6IjdjYmQyYTJkLTlhNDAtNGQ2Zi05NWMwLWYxZWMyYmRkODc3MCIsInR5cCI6IkJlYXJlciIsImF6cCI6ImRhc2hib2FyZC1zc2Nhc24iLCJzZXNzaW9uX3N0YXRlIjoiZmNmMjMxYjItODkxNy00YmQyLWExOTItOWYzMjQ1MTA1NGFiIiwiYWNyIjoiMSIsImFsbG93ZWQtb3JpZ2lucyI6WyJodHRwOi8vZGFzaGJvYXJkLXNzY2Fzbi5ia24uZ28uaWQiLCJodHRwczovL3RyYWluaW5nLWRhc2hib2FyZC1zc2Nhc24uYmtuLmdvLmlkIiwiaHR0cDovL2xvY2FsaG9zdDozMDAwIiwiaHR0cHM6Ly9kYXNoYm9hcmQtc3NjYXNuLmJrbi5nby5pZCJdLCJyZWFsbV9hY2Nlc3MiOnsicm9sZXMiOlsib2ZmbGluZV9hY2Nlc3MiLCJ1bWFfYXV0aG9yaXphdGlvbiJdfSwicmVzb3VyY2VfYWNjZXNzIjp7ImFjY291bnQiOnsicm9sZXMiOlsibWFuYWdlLWFjY291bnQiLCJtYW5hZ2UtYWNjb3VudC1saW5rcyIsInZpZXctcHJvZmlsZSJdfX0sInNjb3BlIjoib3BlbmlkIGVtYWlsIHByb2ZpbGUiLCJlbWFpbF92ZXJpZmllZCI6ZmFsc2UsIm5hbWUiOiJBSE1BRCBaQUtZIiwicHJlZmVycmVkX3VzZXJuYW1lIjoiMTk4NzAzMTUyMDI0MjExMDEwIiwiZ2l2ZW5fbmFtZSI6IkFITUFEIiwiZmFtaWx5X25hbWUiOiJaQUtZIiwiZW1haWwiOiJhaG1hZDdha3lAZ21haWwuY29tIn0.OChrAOMtKRchartlEaTiLBUxoxdxV2QkktiXY6aLzq24AavtcowlOo00OIxrfwQFzAPiId96F03-RSXn0pYWmOW1e1bgB5pC1ua2HcI0Oo_EI9oEWjHSihi7WoZ7KFrA1fkZwUHq06w9FSMKvpdE62pUxSxEvcqJ42o0IXLyp8sJnheP8QJ1DcuzHMLMgUIe62snskFcdEgllax2XYEEVUmwYsbuS05iuiiCeoWABZe6VA-yLZxmauaQESu4-iU3mbcp38wkbcXfDfgctSusOlGpHNhLTi2hkkWXlM5tufHCSAHsiTmPlnadop3ujvBdDsKIR8U4Q7xoPIhZ7249yg',
          'Cookie: 8031e2dda37b1552a45b6fe38d7ed11d=6191ab95b7ae874001cb18d75f8d09de; BIGipServerpool_prod_sscasn2024_kube=3473433610.47873.0000'
        ),
      ));

      $response = curl_exec($curl);

      curl_close($curl);
      echo $response;
    }
}
