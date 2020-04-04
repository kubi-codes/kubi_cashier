<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Config_Model extends CI_Model  {
    
    // Get all info website
    public function getInfo()
    {
        return $this->db->get('config')->row();
    }
}