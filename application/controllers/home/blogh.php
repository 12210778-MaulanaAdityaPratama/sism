<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class blogh extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("artikel_model");
        $this->load->library('form_validation');
    }

    public function index()
    {
        $data["artikel"] = $this->artikel_model->getAll();
        $this->load->view("home/blogh", $data);
    }
}