<?php defined('BASEPATH') OR exit('No direct script access allowed');

class superce_model extends CI_Model
{
    private $_table = "superce";

    public $id;
    public $nama;
    public $tempat_lahir1;
    public $tgl_lahir1;
    public $jenis_kelamin;
    public $warga_negara1;
    public $agama1;
    public $pekerjaan1;
    public $alamat1;

    public $nama_2;
    public $tempat_lahir2;
    public $tgl_lahir2;
    public $warga_negara2;
    public $agama2;
    public $pekerjaan2;
    public $alamat2;
    public $status;
    public $status1;
    public $telp;

    public function rules()
    {
        return [
            ['field' => 'nama',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'tempat_lahir1',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'tgl_lahir1',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'jenis_kelamin',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'warga_negara1',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'agama1',
            'label' => 'name',
            'rules' => 'required'],
            
            ['field' => 'nama_2',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'tempat_lahir2',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'tgl_lahir2',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'agama2',
            'label' => 'name',
            'rules' => 'required'],

        ];
    }

    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }

    public function countAll()
    {
        return $this->db->count_all($this->_table);
    }

    public function getAllPagination($limit, $offset)
    {
        return $this->db->get($this->_table, $limit, $offset)->result();
    }
    
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }
    public function save()
    {
       
        $post = $this->input->post();
        $this->id = isset($post["id"]) ? $post["id"] : NULL;
        $this->nama = $post["nama"];
        $this->tempat_lahir1 = $post["tempat_lahir1"];
        $this->tgl_lahir1 = $post["tgl_lahir1"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->warga_negara1 = $post["warga_negara1"];
        $this->agama1 = $post["agama1"];
        $this->pekerjaan1 = $post["pekerjaan1"];
        $this->alamat1 = $post["alamat1"];
        
        $this->nama_2 = $post["nama_2"];
        $this->tempat_lahir2 = $post["tempat_lahir2"];
        $this->tgl_lahir2 = $post["tgl_lahir2"];
        $this->warga_negara2 = $post["warga_negara2"];
        $this->agama2 = $post["agama2"];
        $this->pekerjaan2 = $post["pekerjaan2"];
        $this->alamat2 = $post["alamat2"];
        $this->status = 'menunggu';
        $this->status1 = $post["status1"];
        $this->telp = $post["telp"];
        return $this->db->insert($this->_table, $this);
        if ($this->status === 'diterima') {
            echo '<script>Swal.fire("Surat Diterima", "Surat telah diterima", "success");</script>';
        }
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->nama = $post["nama"];
        $this->tempat_lahir1 = $post["tempat_lahir1"];
        $this->tgl_lahir1 = $post["tgl_lahir1"];
        $this->jenis_kelamin = $post["jenis_kelamin"];
        $this->warga_negara1 = $post["warga_negara1"];
        $this->agama1 = $post["agama1"];
        $this->pekerjaan1 = $post["pekerjaan1"];
        $this->alamat1 = $post["alamat1"];
        
        $this->nama_2 = $post["nama_2"];
        $this->tempat_lahir2 = $post["tempat_lahir2"];
        $this->tgl_lahir2 = $post["tgl_lahir2"];
        $this->warga_negara2 = $post["warga_negara2"];
        $this->agama2 = $post["agama2"];
        $this->pekerjaan2 = $post["pekerjaan2"];
        $this->alamat2 = $post["alamat2"];
        $this->status = $post["status"];
        $this->status1 = $post["status1"];
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
          $this->db->or_like('nama_2', $keyword);
          $this->db->or_like('agama1', $keyword);
          $this->db->or_like('agama2', $keyword);
          $this->db->or_like('pekerjaan1', $keyword);
          $this->db->or_like('pekerjaan2', $keyword);
          $this->db->or_like('alamat1', $keyword);
          $this->db->or_like('alamat2', $keyword);
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