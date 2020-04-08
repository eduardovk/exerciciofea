<?php

class Login Extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('usuarios_model');
        $this->load->helper('url_helper');
        $this->load->database();
    }

    public function index(){
        $data['title'] = 'Login';
        $this->load->view('templates/header', $data);
        $this->load->view('login/index');
        $this->load->view('templates/footer');
    }

    public function entrar(){
        $usuario = $this->input->post("usuario");
        $senha = $this->input->post("senha");

        $this->db->where("usuario", $usuario);
        $this->db->where("senha", $senha);
        $query = $this->db->get("usuarios");

        if($query->num_rows() == 1){
            $usuario = $query->row()->usuario;
            $this->session->set_userdata("usuario", $usuario);
            redirect('contatos');
        }else{
            $data['mensagem'] = "Usuário ou senha inválidos!";
            $data['title'] = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('login/index');
            $this->load->view('templates/footer');
        }
    }

    public function sair(){
        $this->session->set_userdata("usuario", "");
        redirect('login/index');
    }

    public function create(){
        $this->load->helper('form');
        $this->load->library('form_validation');

        $data['title'] = 'Registre-se';

        $this->form_validation->set_rules('nome', 'Nome', 'required');
        $this->form_validation->set_rules('usuario', 'Usuário', 'required');
        $this->form_validation->set_rules('senha', 'Senha', 'required');

        if ($this->form_validation->run() === FALSE)
        {
            $this->load->view('templates/header', $data);
            $this->load->view('login/create');
            $this->load->view('templates/footer');
        }
        else
        {
            $this->usuarios_model->set_usuario();
            $data['mensagem'] = 'Registrado com sucesso! Faça o login para continuar.';
            $data['title'] = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('login/index');
            $this->load->view('templates/footer');
        }
    }

}
