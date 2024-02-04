<?php
defined('BASEPATH') OR exit('No direct script access allowed');
session_start();

// // controllers/Dashboard.php
// class Dashboard extends CI_Controller {

//     public function index() {
//         // Tampilkan halaman dashboard biasa
//         $this->load->view('dashboard_view');
//     }

//     public function search() {
//         // Tangani pencarian
//         $keyword = $this->input->get('keyword');

//         // Panggil model atau lakukan pencarian langsung di sini

//         // Tampilkan hasil pencarian
//         $data['search_results'] = $this->Your_model->searchFunction($keyword);
//         $this->load->view('search_results_view', $data);
//     }
// }

class home extends CI_Controller {
    
    // public function index() {
    //     // Tampilkan halaman dashboard biasa
    //     $this->load->view('admin/sktm');
    // }

    // public function search() {
    //     // Tangani pencarian
    //     $keyword = $this->input->get('keyword');

    //     // Panggil model atau lakukan pencarian langsung di sini

    //     // Tampilkan hasil pencarian
    //     $data['search_results'] = $this->Your_model->searchFunction($keyword);
    //     $this->load->view('search_results_view', $data);
    // }
	public function __construct()
    
    {
        parent::__construct();
        $this->load->library('session');
    }
	public function index()
	{
        
       
            $this->load->view("warga/sktm/sktm");
       
          
        }
	}
