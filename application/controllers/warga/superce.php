<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class superce extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('superce_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
    }
	public function index()
	{
        // Menambahkan variable latest_sktm
    $data["latest_superce"] = $this->superce_model->getLatest();

    // Load view warga/superce.php
    $this->load->view("warga/superce/superce", $data);
	}
    public function add()
{
    $superce = $this->superce_model;
    $validation = $this->form_validation;
    $validation->set_rules($superce->rules());

    if ($validation->run()) {
        $superce->save();

        // Dapatkan nama dari data terakhir yang diinputkan
        $latestData = $this->superce_model->getLatest();
        $latestName = $latestData->nama;

        // Set pesan notifikasi dengan nama dari data terakhir
        $successMessage = "Surat berhasil atas nama $latestName berhasil dibuat, <a href='" . site_url("warga/superce/editwarga/{$latestData->id}") . "'>klik disini</a> untuk mengubah data.";
        $this->session->set_flashdata('success', $successMessage);

        redirect('warga/superce');
    } else {
        $this->load->view("warga/superce/new_form");
    }
}
    public function edit($id = null)
    {
        if (!isset($id)) redirect('warga/superce');
       
        $superce = $this->superce_model;
        $validation = $this->form_validation;
        $validation->set_rules($superce->rules());

        if ($validation->run()) {
            $superce->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["superce"] = $superce->getById($id);
        if (!$data["superce"]) show_404();
        
        // Pastikan hanya status 'surat selesai' yang dapat menampilkan tombol WhatsApp
        if ($data["superce"]->status == 'surat selesai') {
            $this->load->view("warga/superce/edit_selesai", $data);
        } else {
            // Ubah status default jika tidak 'surat selesai'
            $data["superce"]->status = 'menunggu';
            $this->load->view("warga/superce/edit_form", $data);
        }
    }

    public function editwarga($id = null)
{
    if (!isset($id)) redirect('warga/superce');
   
    $superce = $this->superce_model;
    $validation = $this->form_validation;
    $validation->set_rules($superce->rules());

    if ($validation->run()) {
        $superce->update();
        $this->session->set_flashdata('success', 'Berhasil diupdate');
    }

    $data["superce"] = $superce->getById($id);
    if (!$data["superce"]) show_404();
    
    $this->load->view("warga/superce/edit_warga", $data);
}
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->superce_model->delete($id)) {
            redirect(site_url('warga/superce'));
        }
    }
    public function search() {
        $keyword = $this->input->post('keyword');

    // Panggil model untuk melakukan pencarian
    $data['superce'] = $this->superce_model->search($keyword);

    // Tampilkan hasil pencarian di view
    $this->load->view('warga/superce/list', $data);
    }
    public function pdf($id)
	{
        // load view warga/overview.php
		$data["superce"] = $this->superce_model->getById($id);
        $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Surat-Pernyataan-Cerai.pdf";
		$this->pdf->load_view('warga/superce/pdf', $data);
	}
//     public function pdf ($id)
// {
//     $data["superce"] = $this->superce_model-->getById($id);
//     $this->pdf->setPaper('A4', 'potrait');
//     $this->pdf->filename = "surat-usaha.pdf";
//     $html = $this->load->view('warga/superce/pdf', $data);
//     $this->pdf->loadHtml($html);
//     $this->pdf->render();
//     $this->pdf->stream();
// }
    
}