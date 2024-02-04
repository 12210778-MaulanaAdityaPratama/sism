<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        $this->load->library('pagination');
        $this->load->model('sktm_model');
        $this->load->model('suratusaha_model');
        $this->load->model('sudoteti_model');
        $this->load->model('suratnikah_model');
        $this->load->model('superbeme_model');
        $this->load->model('superce_model');
    }

    public function index($offset = 0) {
        // Konfigurasi paginasi
        $config['base_url'] = base_url('home/index');
        $config['total_rows'] = $this->sktm_model->countAll() + $this->suratusaha_model->countAll() + $this->sudoteti_model->countAll() + $this->suratnikah_model->countAll() + $this->superbeme_model->countAll() + $this->superce_model->countAll();
        $config['per_page'] = 5; // Jumlah data per halaman
        $config['uri_segment'] = 3; // Segmen URI yang menyimpan nomor halaman
        // Inisialisasi konfigurasi paginasi
        $this->pagination->initialize($config);

        // Mendapatkan nomor halaman dari URI
        $offset = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;

        // Menampilkan data dengan paginasi
        $data['sktm'] = $this->sktm_model->getAllPagination($config['per_page'], $offset);
        $data['suratusaha'] = $this->suratusaha_model->getAllPagination($config['per_page'], $offset);
        $data['sudoteti'] = $this->sudoteti_model->getAllPagination($config['per_page'], $offset);
        $data['suratnikah'] = $this->suratnikah_model->getAllPagination($config['per_page'], $offset);
        $data['superbeme'] = $this->superbeme_model->getAllPagination($config['per_page'], $offset);
        $data['superce'] = $this->superce_model->getAllPagination($config['per_page'], $offset);

        // Menyertakan link paginasi ke dalam view
        $data['links'] = $this->pagination->create_links();

        // Tampilkan view
        $this->load->view('rt/index', $data);
    }

    public function search() {
        $keyword = $this->input->post('keyword');

        // Panggil model untuk melakukan pencarian
        $data['sktm'] = $this->sktm_model->search($keyword);
        $data['suratusaha'] = $this->suratusaha_model->search($keyword);
        $data['sudoteti'] = $this->sudoteti_model->search($keyword);
        $data['suratnikah'] = $this->suratnikah_model->search($keyword);
        $data['superbeme'] = $this->superbeme_model->search($keyword);
        $data['superce'] = $this->superce_model->search($keyword);

        // Tampilkan hasil pencarian di view
        $this->load->view('rt/index', $data);
    }
}