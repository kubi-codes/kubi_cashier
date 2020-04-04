<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Introduce_Model extends CI_Model  {
    
    // Set config website
    public function setSite($data,$img)
    {
        $value = [
            'site_name'     => $data['site_name'],
            'site_icon'     => $img['site_icon'],
            'site_tagline'  => $data['site_tagline'],
            'site_url'      => $data['site_url'],
            'site_desc'     => $data['site_desc'],
            'site_logo'     => $img['site_logo']
        ];
        
        return $this->db->insert('config',$value);
    }
}