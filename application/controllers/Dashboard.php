<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    /**
     * Introduce controller
     *
     */

    public function __construct()
    {
        parent::__construct();
        $site = $this->config_model->getInfo();
        if ($site === null) {
            redirect(base_url('introduce/site'));
        }
    }

    public function index()
    {
        // Data for send to view
        $data['title'] = 'Site | Kubi Cashier';
        $data['config'] = $this->config_model->getInfo();

        // Load view
        $this->load->view('layouts/header', $data);
        $this->load->view('dashboard/home');
        $this->load->view('layouts/footer');
    }

}
