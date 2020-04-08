<?php

class ControleAcesso{

    public function verificar_sessao(){
        $instancia = get_instance();
        $usuario = $instancia->session->userdata("usuario");
        if(empty($usuario)){
            redirect("login/index");
        }
    }

}
