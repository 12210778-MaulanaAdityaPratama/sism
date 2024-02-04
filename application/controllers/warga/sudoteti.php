<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class sudoteti extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('sudoteti_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
    }
	public function index()
	{
      // Menambahkan variable latest_sktm
    $data["latest_sudoteti"] = $this->sudoteti_model->getLatest();

    // Load view warga/sktm.php
    $this->load->view("warga/sudoteti/sudoteti", $data);
	}
    public function add()
{
    $sudoteti = $this->sudoteti_model;
    $validation = $this->form_validation;
    $validation->set_rules($sudoteti->rules());

    if ($validation->run()) {
        $sudoteti->save();

        // Dapatkan nama dari data terakhir yang diinputkan
        $latestData = $this->sudoteti_model->getLatest();
        $latestName = $latestData->nama;

        // Set pesan notifikasi dengan nama dari data terakhir
        $successMessage = "Surat berhasil atas nama $latestName berhasil dibuat, <a href='" . site_url("warga/sudoteti/editwarga/{$latestData->id}") . "'>klik disini</a> untuk mengubah data.";
        $this->session->set_flashdata('success', $successMessage);

        redirect('warga/sudoteti');
    } else {
        $this->load->view("warga/sudoteti/new_form");
    }
}
    public function edit($id = null)
    {
        if (!isset($id)) redirect('warga/sudoteti');
       
        $sudoteti = $this->sudoteti_model;
        $validation = $this->form_validation;
        $validation->set_rules($sudoteti->rules());

        if ($validation->run()) {
            $sudoteti->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sudoteti"] = $sudoteti->getById($id);
        if (!$data["sudoteti"]) show_404();
        
       // Pastikan hanya status 'surat selesai' yang dapat menampilkan tombol WhatsApp
       if ($data["sudoteti"]->status == 'surat selesai') {
        $this->load->view("warga/sudoteti/edit_selesai", $data);
    } else {
        // Ubah status default jika tidak 'surat selesai'
        $data["sudoteti"]->status = 'menunggu';
        $this->load->view("warga/sudoteti/edit_form", $data);
    }
    }

    public function editwarga($id = null)
{
    if (!isset($id)) redirect('warga/sudoteti');
   
    $sudoteti = $this->sudoteti_model;
    $validation = $this->form_validation;
    $validation->set_rules($sudoteti->rules());

    if ($validation->run()) {
        $sudoteti->update();
        $this->session->set_flashdata('success', 'Berhasil diupdate');
    }

    $data["sudoteti"] = $sudoteti->getById($id);
    if (!$data["sudoteti"]) show_404();
    
    $this->load->view("warga/sudoteti/edit_warga", $data);
}

    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->sudoteti_model->delete($id)) {
            redirect(site_url('warga/sudoteti'));
        }
    }

    public function search() {
        $keyword = $this->input->post('keyword');

    // Panggil model untuk melakukan pencarian
    $data['sudoteti'] = $this->sudoteti_model->search($keyword);

    // Tampilkan hasil pencarian di view
    $this->load->view('warga/sudoteti/list', $data);
    }

    public function pdf($id)
	{
        // load view warga/overview.php
		$data["sudoteti"] = $this->sudoteti_model->getById($id);
        $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Surat-domisili.pdf";
		$this->pdf->load_view('warga/sudoteti/pdf', $data);
	}
//     public function pdf ($id)
// {
//     $data["sudoteti"] = $this->sudoteti_model-->getById($id);
//     $this->pdf->setPaper('A4', 'potrait');
//     $this->pdf->filename = "surat-usaha.pdf";
//     $html = $this->load->view('warga/sudoteti/pdf', $data);
//     $this->pdf->loadHtml($html);
//     $this->pdf->render();
//     $this->pdf->stream();
// }
    
}