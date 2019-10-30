<?php

class Login_Model extends CI_Model
{
    public function cadastrar($login)
    {
        $this->db->insert("login", $login);
    }

    public function logarUsuario($email, $senha)
    {
        $this->db->where("email", $email);
        $this->db->where("senha", $senha);
        $login = $this->db->get("login")->row_array();
        return $login;
    }
}
