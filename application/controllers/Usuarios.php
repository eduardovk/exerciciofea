<?php

class Usuarios Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuarios_model');
        $this->load->helper('url_helper');
        $this->load->database();
    }

}
