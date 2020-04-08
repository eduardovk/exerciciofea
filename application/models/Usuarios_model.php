<?php
class Usuarios_model extends CI_Model {

    public function __construct()
    {
        $this->load->database();
    }

    public function set_usuario()
    {
        $this->load->helper('url');

        $data = array(
            'nome' => $this->input->post('nome'),
            'usuario' => $this->input->post('usuario'),
            'senha' => $this->input->post('senha'),
        );

        return $this->db->insert('usuarios', $data);
    }
}
