<?php defined('BASEPATH') OR exit('No direct script access allowed');

class sudoteti_model extends CI_Model
{
    private $_table = "sudoteti";

    public $id;
    public $nik;
    public $nama;
    public $tempat_lahir;
    public $tgl_lahir;
    public $warga_negara;
    public $agama;
    public $alamat_asal;
    public $status;
    public $jenis_kelamin;
    public $status_perkawinan;
    public $keterangan;
    public $telp;



    public function rules()
    {
        return [
            ['field' => 'nik',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'tgl_lahir',
            'label' => 'name',
            'rules' => 'required']
            
           
        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function countAll()
    {
        return $this->db->count_all($this->_table);
    }

    public function getAllPagination($limit, $offset)
    {
        return $this->db->get($this->_table, $limit, $offset)->result();
    }
    
    public function save()
    {
       
        $post = $this->input->post();
        $this->id = isset($post["id"]) ? $post["id"] : NULL;
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->warga_negara = $post["warga_negara"];
        $this->agama = $post["agama"];
        $this->alamat_asal = $post["alamat_asal"];
        $this->status = 'menunggu';
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->status_perkawinan = $post["status_perkawinan"];  
        $this->keterangan = $post["keterangan"]; 
        $this->telp = $post["telp"];       
        return $this->db->insert($this->_table, $this);
        if ($this->status === 'surat selesai') {
            echo '<script>Swal.fire("Surat Diterima", "Surat telah diterima", "success");</script>';
        }
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nik = $post["nik"];
        $this->nama = $post["nama"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->warga_negara = $post["warga_negara"];
        $this->agama = $post["agama"];
        $this->alamat_asal = $post["alamat_asal"];
        $this->status = $post["status"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->status_perkawinan = $post["status_perkawinan"];
        $this->keterangan = $post["keterangan"]; 
        $this->telp = $post["telp"];  
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function updateStatus($id, $status) {
        $this->db->where('id', $id);
        $this->db->update($this->_table, array('status' => $status));
      }
      public function search($keyword)
      {
          // Gunakan LIKE untuk mencari data yang mengandung keyword
          $this->db->like('nama', $keyword);
          $this->db->or_like('nik', $keyword);
          $this->db->or_like('alamat_asal', $keyword);
          $this->db->or_like('agama', $keyword);
          $this->db->or_like('tempat_lahir', $keyword);
          $this->db->or_like('telp', $keyword);
      
          // Eksekusi query pencarian
          return $this->db->get($this->_table)->result();
      }
    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }

    public function getLatest()
    {
        $this->db->order_by('id', 'DESC');
        $this->db->limit(1);
        return $this->db->get($this->_table)->row();
    }
}