<?php

// extends class Model
class M_anggota extends CI_Model{

  // response jika field ada yang kosong
  public function empty_response(){
    $response['status']=502;
    $response['error']=true;
    $response['message']='Field tidak boleh kosong';
    return $response;
  }

  // function untuk insert data 
  public function add($nama,$nik,$tempat_lhr,$tgl_lhr,$pbnu,$status_perkawinan,$pekerjaan,$pendidikan_terakhir,$pernah_menyenyam,$lama_pendidikan,$nama_pesantren,$alamat_pesantren){

    if(empty($nama) || empty($nik) || empty($tempat_lhr)){
      return $this->empty_response();
    }else{
      $data = array(
        "nama"=>$nama,
        "nik"=>$nik,
        "tempat_lhr"=>$tempat_lhr,
        "tgl_lhr"=>$tgl_lhr,
        "pbnu"=>$pbnu,
        "status_perkawinan"=>$status_perkawinan,
        "pekerjaan"=>$pekerjaan,
        "pendidikan_terakhir"=>$pendidikan_terakhir,
        "pernah_menyenyam"=>$pernah_menyenyam,
        "lama_pendidikan"=>$lama_pendidikan,
        "nama_pesantren"=>$nama_pesantren,
        "alamat_pesantren"=>$alamat_pesantren
      );

      $insert = $this->db->insert("tb_anggota", $data);

      if($insert){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Data Anggota ditambahkan.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data Anggota gagal ditambahkan.';
        return $response;
      }
    }

  }

  // mengambil semua data 
  public function all(){

    $all = $this->db->get("tb_anggota")->result();
    $response['status']=200;
    $response['error']=false;
    $response['person']=$all;
    return $response;

  }

  // hapus data 
  public function delete($id){

    if($id == ''){
      return $this->empty_response();
    }else{
      $where = array(
        "id"=>$id
      );

      $this->db->where($where);
      $delete = $this->db->delete("tb_anggota");
      if($delete){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Data Anggota dihapus.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data Anggota gagal dihapus.';
        return $response;
      }
    }

  }

  // update 
  public function update($id,$nama,$nik,$tempat_lhr,$tgl_lhr,$pbnu,$status_perkawinan,$pekerjaan,$pendidikan_terakhir,$pernah_menyenyam,$lama_pendidikan,$nama_pesantren,$alamat_pesantren){
   
    if($id == '' || empty($nama) || empty($nik) || empty($tempat_lhr)){
      return $this->empty_response();
    }else{
      $where = array(
        "id"=>$id
      );

      $set = array(
        "nama"=>$nama,
        "nik"=>$nik,
        "tempat_lhr"=>$tempat_lhr,
        "tgl_lhr"=>$tgl_lhr,
        "pbnu"=>$pbnu,
        "status_perkawinan"=>$status_perkawinan,
        "pekerjaan"=>$pekerjaan,
        "pendidikan_terakhir"=>$pendidikan_terakhir,
        "pernah_menyenyam"=>$pernah_menyenyam,
        "lama_pendidikan"=>$lama_pendidikan,
        "nama_pesantren"=>$nama_pesantren,
        "alamat_pesantren"=>$alamat_pesantren
      );

      $this->db->where($where);
      $update = $this->db->update("tb_anggota",$set);
      if($update){
        $response['status']=200;
        $response['error']=false;
        $response['message']='Data Anggota diubah.';
        return $response;
      }else{
        $response['status']=502;
        $response['error']=true;
        $response['message']='Data Anggota gagal diubah.';
        return $response;
      }
    }

  }

}

?>
