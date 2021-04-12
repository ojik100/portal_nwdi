<?php

require APPPATH . 'libraries/REST_Controller.php';

class C_anggota extends REST_Controller{

  // construct
  public function __construct(){
    parent::__construct();
    $this->load->model('M_anggota');
  }

  // method index untuk menampilkan semua data  menggunakan method get
  public function index_get(){
    $response = $this->M_anggota->all();
    $this->response($response);
  }

  // untuk menambah  menaggunakan method post
  public function add_post(){
    $response = $this->M_anggota->add(
        $this->post('nama'),
        $this->post('nik'),
        $this->post('tempat_lhr'),
        $this->post('tgl_lhr'),
        $this->post('pbnu'),
        $this->post('status_perkawinan'),
        $this->post('pekerjaan'),
        $this->post('pendidikan_terakhir'),
        $this->post('pernah_menyenyam'),
        $this->post('lama_pendidikan'),
        $this->post('nama_pesantren'),
        $this->post('alamat_pesantren')
      );
    $this->response($response);
  }

  // update data  menggunakan method put
  public function update_put(){
    $response = $this->M_anggota->update(
        $this->put('id'),
        $this->put('nama'),
        $this->put('nik'),
        $this->put('tempat_lhr'),
        $this->put('tgl_lhr'),
        $this->put('pbnu'),
        $this->put('status_perkawinan'),
        $this->put('pekerjaan'),
        $this->put('pendidikan_terakhir'),
        $this->put('pernah_menyenyam'),
        $this->put('lama_pendidikan'),
        $this->put('nama_pesantren'),
        $this->put('alamat_pesantren')
      );
    $this->response($response);
  }

  // hapus data  menggunakan method delete
  public function delete_delete(){
    $response = $this->M_anggota->delete(
        $this->delete('id')
      );
    $this->response($response);
  }

}

?>
