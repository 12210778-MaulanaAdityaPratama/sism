<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class superbeme extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('superbeme_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
    }
	public function index()
	{
        // Menambahkan variable latest_sktm
    $data["latest_superbeme"] = $this->superbeme_model->getLatest();

    // Load view warga/superbeme.php
    $this->load->view("warga/superbeme/superbeme", $data);
	}
    public function add()
{
    $superbeme = $this->superbeme_model;
    $validation = $this->form_validation;
    $validation->set_rules($superbeme->rules());

    if ($validation->run()) {
        $superbeme->save();

        // Dapatkan nama dari data terakhir yang diinputkan
        $latestData = $this->superbeme_model->getLatest();
        $latestName = $latestData->nama;

        // Set pesan notifikasi dengan nama dari data terakhir
        $successMessage = "Surat berhasil atas nama $latestName berhasil dibuat, <a href='" . site_url("warga/superbeme/editwarga/{$latestData->id}") . "'>klik disini</a> untuk mengubah data.";
        $this->session->set_flashdata('success', $successMessage);

        redirect('warga/superbeme');
    } else {
        $this->load->view("warga/superbeme/new_form");
    }
}
    public function edit($id = null)
    {
        if (!isset($id)) redirect('warga/superbeme');
       
        $superbeme = $this->superbeme_model;
        $validation = $this->form_validation;
        $validation->set_rules($superbeme->rules());

        if ($validation->run()) {
            $superbeme->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["superbeme"] = $superbeme->getById($id);
        if (!$data["superbeme"]) show_404();
        
       // Pastikan hanya status 'surat selesai' yang dapat menampilkan tombol WhatsApp
       if ($data["superbeme"]->status == 'surat selesai') {
        $this->load->view("warga/superbeme/edit_selesai", $data);
    } else {
        // Ubah status default jika tidak 'surat selesai'
        $data["superbeme"]->status = 'menunggu';
        $this->load->view("warga/superbeme/edit_form", $data);
    }
    }
    public function editwarga($id = null)
{
    if (!isset($id)) redirect('warga/superbeme');
   
    $superbeme = $this->superbeme_model;
    $validation = $this->form_validation;
    $validation->set_rules($superbeme->rules());

    if ($validation->run()) {
        $superbeme->update();
        $this->session->set_flashdata('success', 'Berhasil diupdate');
    }

    $data["superbeme"] = $superbeme->getById($id);
    if (!$data["superbeme"]) show_404();
    
    $this->load->view("warga/superbeme/edit_warga", $data);
}
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->superbeme_model->delete($id)) {
            redirect(site_url('warga/superbeme'));
        }
    }
    public function search() {
        $keyword = $this->input->post('keyword');

    // Panggil model untuk melakukan pencarian
    $data['superbeme'] = $this->superbeme_model->search($keyword);

    // Tampilkan hasil pencarian di view
    $this->load->view('warga/superbeme/list', $data);
    }
    public function pdf($id)
	{
        // load view warga/overview.php
		$data["superbeme"] = $this->superbeme_model->getById($id);
        $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Surat-pernyataan-belum-menikah.pdf";
		$this->pdf->load_view('warga/superbeme/pdf', $data);
	}
//     public function pdf ($id)
// {
//     $data["superbeme"] = $this->superbeme_model-->getById($id);
//     $this->pdf->setPaper('A4', 'potrait');
//     $this->pdf->filename = "surat-usaha.pdf";
//     $html = $this->load->view('warga/superbeme/pdf', $data);
//     $this->pdf->loadHtml($html);
//     $this->pdf->render();
//     $this->pdf->stream();
// }
    
}