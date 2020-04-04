<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Controller extends CI_Controller
{
    /**
     * Default controller
     *
     */

    public function __construct()
    {
        parent::__construct();
    }

    // 404 Not Found
    public function page_not_found()
    {
        $this->load->view('errors/404');
    }
    
}
