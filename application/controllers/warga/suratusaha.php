<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suratusaha extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('suratusaha_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
    }
	public function index()
	{
         // Menambahkan variable latest_sktm
    $data["latest_suratusaha"] = $this->suratusaha_model->getLatest();

    // Load view warga/suratusaha.php
    $this->load->view("warga/suratusaha/suratusaha", $data);
	}
    public function add()
    {
        $suratusaha = $this->suratusaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($suratusaha->rules());
    
        if ($validation->run()) {
            $suratusaha->save();
    
            // Dapatkan nama dari data terakhir yang diinputkan
            $latestData = $this->suratusaha_model->getLatest();
            $latestName = $latestData->nama;
    
            // Set pesan notifikasi dengan nama dari data terakhir
            $successMessage = "Surat berhasil atas nama $latestName berhasil dibuat, <a href='" . site_url("warga/suratusaha/editwarga/{$latestData->id}") . "'>klik disini</a> untuk mengubah data.";
            $this->session->set_flashdata('success', $successMessage);
    
            redirect('warga/suratusaha');
        } else {
            $this->load->view("warga/suratusaha/new_form");
        }
    }
    public function edit($id = null)
    {
        if (!isset($id)) redirect('warga/suratusaha');
       
        $suratusaha = $this->suratusaha_model;
        $validation = $this->form_validation;
        $validation->set_rules($suratusaha->rules());

        if ($validation->run()) {
            $suratusaha->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
        }

        $data["suratusaha"] = $suratusaha->getById($id);
        if (!$data["suratusaha"]) show_404();
        
         // Pastikan hanya status 'surat selesai' yang dapat menampilkan tombol WhatsApp
         if ($data["suratusaha"]->status == 'surat selesai') {
            $this->load->view("warga/suratusaha/edit_selesai", $data);
        } else {
            // Ubah status default jika tidak 'surat selesai'
            $data["suratusaha"]->status = 'menunggu';
            $this->load->view("warga/suratusaha/edit_form", $data);
        }
}

public function editwarga($id = null)
{
    if (!isset($id)) redirect('warga/suratusaha');
   
    $suratusaha = $this->suratusaha_model;
    $validation = $this->form_validation;
    $validation->set_rules($suratusaha->rules());

    if ($validation->run()) {
        $suratusaha->update();
        $this->session->set_flashdata('success', 'Berhasil diupdate');
    }

    $data["suratusaha"] = $suratusaha->getById($id);
    if (!$data["suratusaha"]) show_404();
    
    $this->load->view("warga/suratusaha/edit_warga", $data);
}
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->suratusaha_model->delete($id)) {
            redirect(site_url('warga/suratusaha'));
        }
    }
    public function search() {
        $keyword = $this->input->post('keyword');

    // Panggil model untuk melakukan pencarian
    $data['suratusaha'] = $this->suratusaha_model->search($keyword);

    // Tampilkan hasil pencarian di view
    $this->load->view('warga/suratusaha/list', $data);
    }
    public function pdf($id)
	{
        // load view warga/overview.php
		$data["suratusaha"] = $this->suratusaha_model->getById($id);
        $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "suratusaha.pdf";
		$this->pdf->load_view('warga/suratusaha/pdf', $data);
	}
//     public function pdf ($id)
// {
//     $data["suratusaha"] = $this->suratusaha_model-->getById($id);
//     $this->pdf->setPaper('A4', 'potrait');
//     $this->pdf->filename = "surat-usaha.pdf";
//     $html = $this->load->view('warga/suratusaha/pdf', $data);
//     $this->pdf->loadHtml($html);
//     $this->pdf->render();
//     $this->pdf->stream();
// }
    
}