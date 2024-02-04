<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sktm extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('sktm_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
    }
	public function index()
{
    // Menambahkan variable latest_sktm
    $data["latest_sktm"] = $this->sktm_model->getLatest();

    // Load view warga/sktm.php
    $this->load->view("warga/sktm/sktm", $data);
}


    public function add()
{
    $sktm = $this->sktm_model;
    $validation = $this->form_validation;
    $validation->set_rules($sktm->rules());

    if ($validation->run()) {
        $sktm->save();

        // Dapatkan nama dari data terakhir yang diinputkan
        $latestData = $this->sktm_model->getLatest();
        $latestName = $latestData->nama;

        // Set pesan notifikasi dengan nama dari data terakhir
        $successMessage = "Surat berhasil atas nama $latestName berhasil dibuat, <a href='" . site_url("warga/sktm/editwarga/{$latestData->id}") . "'>klik disini</a> untuk mengubah data.";
        $this->session->set_flashdata('success', $successMessage);

        redirect('warga/sktm');
    } else {
        $this->load->view("warga/sktm/new_form");
    }
}

    public function edit($id = null)
    {
        if (!isset($id)) redirect('warga/sktm');
       
        $sktm = $this->sktm_model;
        $validation = $this->form_validation;
        $validation->set_rules($sktm->rules());

        if ($validation->run()) {
            $sktm->update();
            $this->session->set_flashdata('success', 'Berhasil diupdate');
        }

        $data["sktm"] = $sktm->getById($id);
        if (!$data["sktm"]) show_404();
        
         // Pastikan hanya status 'surat selesai' yang dapat menampilkan tombol WhatsApp
         if ($data["sktm"]->status == 'surat selesai') {
            $this->load->view("warga/sktm/edit_selesai", $data);
        } else {
            // Ubah status default jika tidak 'surat selesai'
            $data["sktm"]->status = 'menunggu';
            $this->load->view("warga/sktm/edit_form", $data);
        }
}

public function editwarga($id = null)
{
    if (!isset($id)) redirect('warga/sktm');
   
    $sktm = $this->sktm_model;
    $validation = $this->form_validation;
    $validation->set_rules($sktm->rules());

    if ($validation->run()) {
        $sktm->update();
        $this->session->set_flashdata('success', 'Berhasil diupdate');
    }

    $data["sktm"] = $sktm->getById($id);
    if (!$data["sktm"]) show_404();
    
    $this->load->view("warga/sktm/edit_warga", $data);
}
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->sktm_model->delete($id)) {
            redirect(site_url('warga/sktm'));
        }
    }
    public function search() {
        $keyword = $this->input->post('keyword');

    // Panggil model untuk melakukan pencarian
    $data['sktm'] = $this->sktm_model->search($keyword);

    // Tampilkan hasil pencarian di view
    $this->load->view('warga/sktm/list', $data);
    }
    public function pdf($id)
	{
        // load view warga/overview.php
		$data["sktm"] = $this->sktm_model->getById($id);
        $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "SKTM.pdf";
		$this->pdf->load_view('warga/sktm/pdf', $data);
	}
//     public function pdf ($id)
// {
//     $data["sktm"] = $this->sktm_model-->getById($id);
//     $this->pdf->setPaper('A4', 'potrait');
//     $this->pdf->filename = "surat-usaha.pdf";
//     $html = $this->load->view('warga/sktm/pdf', $data);
//     $this->pdf->loadHtml($html);
//     $this->pdf->render();
//     $this->pdf->stream();
// }
    
}