<?php defined('BASEPATH') OR exit('No direct script access allowed');

class superbeme_model extends CI_Model
{
    private $_table = "superbeme";

    public $id;
    public $nama;
    public $nik;
    public $tempat_lahir;
    public $tgl_lahir;
    public $jenis_kelamin;
    public $warga_negara;
    public $agama;
    public $pekerjaan;
    public $alamat;
    public $status;
    public $keperluan;
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
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->warga_negara = $post["warga_negara"];
        $this->agama = $post["agama"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->alamat = $post["alamat"];
        $this->status = 'menunggu';
        $this->keperluan = $post["keperluan"];
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
        $this->nama = $post["nama"];
        $this->nik = $post["nik"];
        $this->tempat_lahir = $post["tempat_lahir"];
        $this->tgl_lahir = $post["tgl_lahir"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->warga_negara = $post["warga_negara"];
        $this->agama = $post["agama"];
        $this->pekerjaan = $post["pekerjaan"];
        $this->alamat = $post["alamat"];
        $this->status = $post["status"];
        $this->keperluan = $post["keperluan"];
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
          $this->db->or_like('pekerjaan', $keyword);
          $this->db->or_like('agama', $keyword);
          $this->db->or_like('alamat', $keyword);
          $this->db->or_like('telp', $keyword);
          $this->db->or_like('keperluan', $keyword);
      
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