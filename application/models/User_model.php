<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model
{
    private $_table = "user";

    public $id;
    public $email;
    public $sandi;
    public $level;

    public function rules()
    {
        return [
            ['field' => 'email',
            'label' => 'name',
            'rules' => 'required'],

            ['field' => 'sandi',
            'label' => 'name',
            'rules' => 'required']
            
           
        ];
    }

    public function countAll()
    {
        return $this->db->count_all($this->_table);
    }

    public function getAllPagination($limit, $offset)
    {
        return $this->db->get($this->_table, $limit, $offset)->result();
    }
    
    public function getAll()
    {
        return $this->db->get($this->_table)->result();
    }
    public function getById($id)
    {
        return $this->db->get_where($this->_table, ["id" => $id])->row();
    }

    public function save()
    {
       
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->email = $post["email"];
        $this->sandi = $post["sandi"];
        $this->level = $post["level"];
        // Tetapkan level sebagai "warga"
        // $this->level = "warga";
        return $this->db->insert($this->_table, $this);
    }
    public function update()
    {
        $post = $this->input->post();
        $this->id = $post["id"];
        $this->email = $post["email"];
        $this->sandi = $post["sandi"];
        $this->level = $post["level"];
        return $this->db->update($this->_table, $this, array('id' => $post['id']));
    }
    public function search($keyword)
{
    // Gunakan LIKE untuk mencari data yang mengandung keyword
    $this->db->like('email', $keyword);
    $this->db->or_like('sandi', $keyword);

    // Eksekusi query pencarian
    return $this->db->get($this->_table)->result();
}

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id" => $id));
    }
}