<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class HelloWorld extends CI_Controller {

    public function index()
    {
        // Load the default view
        $this->load->view('hello_world_view');
    }
}
