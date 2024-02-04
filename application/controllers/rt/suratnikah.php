<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suratnikah extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('suratnikah_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
        $this->load->library('pagination'); // Tambahkan library pagination

    }
    public function index()
    {
        $config['base_url'] = site_url('rt/suratnikah/index');
        $config['total_rows'] = $this->suratnikah_model->countAll();
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
    
        $data["suratnikah"] = $this->suratnikah_model->getAllPagination($config['per_page'], $this->uri->segment(4));
        $data["pagination"] = $this->pagination->create_links();
    
        $this->load->view("rt/suratnikah/list", $data);
    }
    public function add()
    {
        $suratnikah = $this->suratnikah_model;
        $validation = $this->form_validation;
        $validation->set_rules($suratnikah->rules());
           if ($validation->run()) {
            $suratnikah->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }
        $this->load->view("rt/suratnikah/new_form");
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('rt/suratnikah');
       
        $suratnikah = $this->suratnikah_model;
        $validation = $this->form_validation;
        $validation->set_rules($suratnikah->rules());

        if ($validation->run()) {
            $suratnikah->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["suratnikah"] = $suratnikah->getById($id);
        if (!$data["suratnikah"]) show_404();
        
        // Pastikan hanya status 'surat selesai' yang dapat menampilkan tombol WhatsApp
        if ($data["suratnikah"]->status == 'surat selesai') {
            $this->load->view("rt/suratnikah/edit_selesai", $data);
        } else {
            // Ubah status default jika tidak 'surat selesai'
            $data["suratnikah"]->status = 'menunggu';
            $this->load->view("rt/suratnikah/edit_form", $data);
        }
    }
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->suratnikah_model->delete($id)) {
            redirect(site_url('rt/suratnikah'));
        }
    }
    public function search() {
        $keyword = $this->input->post('keyword');

    // Panggil model untuk melakukan pencarian
    $data['suratnikah'] = $this->suratnikah_model->search($keyword);

    // Tampilkan hasil pencarian di view
    $this->load->view('rt/suratnikah/list', $data);
    }
    public function pdf($id)
	{
        // load view rt/overview.php
		$data["suratnikah"] = $this->suratnikah_model->getById($id);
        $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Surat-pengantar-nikah.pdf";
		$this->pdf->load_view('rt/suratnikah/pdf', $data);
	}
//     public function pdf ($id)
// {
//     $data["suratnikah"] = $this->suratnikah_model-->getById($id);
//     $this->pdf->setPaper('A4', 'potrait');
//     $this->pdf->filename = "surat-usaha.pdf";
//     $html = $this->load->view('rt/suratnikah/pdf', $data);
//     $this->pdf->loadHtml($html);
//     $this->pdf->render();
//     $this->pdf->stream();
// }
    
}