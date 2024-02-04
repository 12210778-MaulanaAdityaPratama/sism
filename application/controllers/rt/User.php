<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller
{
    public function __construct()
    {
        
        parent::__construct();
        $this->load->model("user_model");
        $this->load->library('form_validation');
        $this->load->library('pagination'); // Tambahkan library pagination
    }

    public function index()
{
    $config['base_url'] = site_url('rt/user/index');
    $config['total_rows'] = $this->user_model->countAll();
    $config['per_page'] = 5;
    $config['uri_segment'] = 4;

    // Customize start here
    $config['attributes'] = array('class' => 'page-link');

    // Membuat template pagination sesuai file yang telah dibuat
    $config['full_tag_open'] = '<ul class="pagination">';
    $config['full_tag_close'] = '</ul>';
    $config['first_tag_open'] = '<li class="page-item">';
    $config['first_tag_close'] = '</li>';
    $config['last_tag_open'] = '<li class="page-item">';
    $config['last_tag_close'] = '</li>';
    $config['next_tag_open'] = '<li class="page-item">';
    $config['next_tag_close'] = '</li>';
    $config['prev_tag_open'] = '<li class="page-item">';
    $config['prev_tag_close'] = '</li>';
    $config['num_tag_open'] = '<li class="page-item">';
    $config['num_tag_close'] = '</li>';
    $config['cur_tag_open'] = '<li class="page-item active"><a href="#" class="page-link">';
    $config['cur_tag_close'] = '<span class="sr-only">(current)</span></a></li>';
    // Customize end here

    $this->pagination->initialize($config);

    $data["user"] = $this->user_model->getAllPagination($config['per_page'], $this->uri->segment(4));
    $data["pagination"] = $this->pagination->create_links();

    $this->load->view("rt/user/list", $data);
}

    public function add()
    {
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());
           if ($validation->run()) {
            $user->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("rt/user/new_form");
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('rt/user');
       
        $user = $this->user_model;
        $validation = $this->form_validation;
        $validation->set_rules($user->rules());

        if ($validation->run()) {
            $user->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["user"] = $user->getById($id);
        if (!$data["user"]) show_404();
        
        $this->load->view("rt/user/edit_form", $data);
    }

    public function search() {
        $keyword = $this->input->post('keyword');

    // Panggil model untuk melakukan pencarian
    $data['user'] = $this->user_model->search($keyword);

    // Tampilkan hasil pencarian di view
    $this->load->view('rt/user/list', $data);
    }
   
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->user_model->delete($id)) {
            redirect(site_url('rt/user'));
        }
    }
}