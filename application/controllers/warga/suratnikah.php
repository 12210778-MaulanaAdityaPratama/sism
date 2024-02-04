<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suratnikah extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->model('suratnikah_model');
        $this->load->library('form_validation');
        $this->load->library('pdf');
    }
	public function index()
	{
         // Menambahkan variable latest_sktm
    $data["latest_suratnikah"] = $this->suratnikah_model->getLatest();

    // Load view warga/suratnikah.php
    $this->load->view("warga/suratnikah/suratnikah", $data);
	}
    public function add()
{
    $suratnikah = $this->suratnikah_model;
    $validation = $this->form_validation;
    $validation->set_rules($suratnikah->rules());

    if ($validation->run()) {
        $suratnikah->save();

        // Dapatkan nama dari data terakhir yang diinputkan
        $latestData = $this->suratnikah_model->getLatest();
        $latestName = $latestData->nama;

        // Set pesan notifikasi dengan nama dari data terakhir
        $successMessage = "Surat berhasil atas nama $latestName berhasil dibuat, <a href='" . site_url("warga/suratnikah/editwarga/{$latestData->id}") . "'>klik disini</a> untuk mengubah data.";
        $this->session->set_flashdata('success', $successMessage);

        redirect('warga/suratnikah');
    } else {
        $this->load->view("warga/suratnikah/new_form");
    }
}
    public function edit($id = null)
    {
        if (!isset($id)) redirect('warga/suratnikah');
       
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
            $this->load->view("warga/suratnikah/edit_selesai", $data);
        } else {
            // Ubah status default jika tidak 'surat selesai'
            $data["suratnikah"]->status = 'menunggu';
            $this->load->view("warga/suratnikah/edit_form", $data);
        }
    }
    public function editwarga($id = null)
{
    if (!isset($id)) redirect('warga/suratnikah');
   
    $suratnikah = $this->suratnikah_model;
    $validation = $this->form_validation;
    $validation->set_rules($suratnikah->rules());

    if ($validation->run()) {
        $suratnikah->update();
        $this->session->set_flashdata('success', 'Berhasil diupdate');
    }

    $data["suratnikah"] = $suratnikah->getById($id);
    if (!$data["suratnikah"]) show_404();
    
    $this->load->view("warga/suratnikah/edit_warga", $data);
}
    public function delete($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->suratnikah_model->delete($id)) {
            redirect(site_url('warga/suratnikah'));
        }
    }
    public function search() {
        $keyword = $this->input->post('keyword');

    // Panggil model untuk melakukan pencarian
    $data['suratnikah'] = $this->suratnikah_model->search($keyword);

    // Tampilkan hasil pencarian di view
    $this->load->view('warga/suratnikah/list', $data);
    }
    public function pdf($id)
	{
        // load view warga/overview.php
		$data["suratnikah"] = $this->suratnikah_model->getById($id);
        $this->pdf->setPaper('A4', 'potrait');
		$this->pdf->filename = "Surat-pengantar-nikah.pdf";
		$this->pdf->load_view('warga/suratnikah/pdf', $data);
	}
//     public function pdf ($id)
// {
//     $data["suratnikah"] = $this->suratnikah_model-->getById($id);
//     $this->pdf->setPaper('A4', 'potrait');
//     $this->pdf->filename = "surat-usaha.pdf";
//     $html = $this->load->view('warga/suratnikah/pdf', $data);
//     $this->pdf->loadHtml($html);
//     $this->pdf->render();
//     $this->pdf->stream();
// }
    
}