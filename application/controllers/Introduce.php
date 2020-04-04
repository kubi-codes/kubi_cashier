<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Introduce extends CI_Controller
{
    /**
     * Introduce controller
     *
     */

    public function __construct()
    {
        parent::__construct();

        $site = $this->config_model->getInfo();
        if($site !== null) {
            redirect(base_url());
        }
    }


    //  DB Config Page
    // public function database()
    // {
    //     // Use notif
    //     notif('success', 'Selamat Datang di Kubi Cashier', 'Sebelum mulai mari konfigurasikan website kamu.');

    //     // Data for send to view
    //     $data['title'] = 'Database | Kubi Cashier';

    //     // Load view
    //     $this->load->view('layouts/header', $data);
    //     $this->load->view('introduce/db_page');
    //     $this->load->view('layouts/footer');
    // }

    // Set value database
    // public function setDatabase()
    // {
    //     // Config Database
    //     $config['hostname'] = $this->input->post('host',TRUE);
    //     $config['username'] = $this->input->post('username',TRUE);
    //     $config['password'] = $this->input->post('password', TRUE);
    //     $config['database'] = $this->input->post('name', TRUE);
    //     $config['dbdriver'] = 'mysqli';
    //     $config['dbprefix'] = '';
    //     $config['pconnect'] = FALSE;
    //     $config['autoinit'] = FALSE; 
    //     $config['db_debug'] = FALSE;
    //     $config['cache_on'] = FALSE;
    //     $config['cachedir'] = '';
    //     $config['char_set'] = 'utf8';
    //     $config['dbcollat'] = 'utf8_general_ci';
    //     $check_db = $this->load->database($config,TRUE);

    //     // Checking database exist
    //     if($check_db->conn_id !== false) {
    //         notif('success', 'Database Berhasil Digunakan', 'Silahkan melengkapi konfigurasi berikutnya', 'introduce/site');
    //     } else {
    //         notif('error', 'Database Tidak Ditemukan', 'Pastikan konfigurasi database kamu telah sesuai', 'introduce/database');
    //     }
    // }

    // Site Config Page
    public function site()
    {
        // Data for send to view
        $data['title'] = 'Config | Kubi Cashier';
        $data['config'] = (object) [
            'site_desc' => '',
            'site_name' => '',
            'site_url'  => '',
            'site_icon' => '',
            'site_tagline' => ''
        ];

        // Load view
        $this->load->view('layouts/header', $data);
        $this->load->view('introduce/site_page');
        $this->load->view('layouts/footer');
    }

    // Set site Config
    public function setSite()
    {
        // Upload Logo
        $config['upload_path']      = 'assets/upload/site/';
        $config['allowed_types']    = 'gif|jpg|png|jpeg';

        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('site_logo') || !$this->upload->do_upload('site_icon')) {
            notif('error','File ditolak','Coba kembali dengan format yang berbeda','introduce/site');
        } else {
            $img = [
                'site_logo' => $_FILES['site_logo']['name'],
                'site_icon' => $_FILES['site_icon']['name']
            ];

            $this->load->model('introduce_model');
            $setUp = $this->introduce_model->setSite($this->input->post(),$img);

            // Checking Set up to database
            if($setUp) {
                notif('success','Konfigurasi Berhasil','Web berhasil di konfigurasi','home');
            } else {
                notif('success', 'Konfigurasi Gagal', 'Pastikan semua input benar');
            }
        }

    }
}
