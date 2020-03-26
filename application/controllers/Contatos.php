<?php
class Contatos extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('contatos_model');
        $this->load->helper('url_helper');
    }

    public function index()
    {
        $data['contatos'] = $this->contatos_model->get_contatos();
        $data['title'] = 'Contatos';

        $this->load->view('templates/header', $data);
        $this->load->view('contatos/index', $data);
        $this->load->view('templates/footer');
    }

    public function view($id = NULL)
    {
        $data['contatos_item'] = $this->contatos_model->get_contatos($id);

        if (empty($data['contatos_item']))
        {
                show_404();
        }

        $data['title'] = $data['contatos_item']['nome'];

        $this->load->view('templates/header', $data);
        $this->load->view('contatos/view', $data);
        $this->load->view('templates/footer');
    }
}
