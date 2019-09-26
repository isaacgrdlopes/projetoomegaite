<?php

class Contatos_Model extends CI_Model
{


    public $id;
    public $nome;
    public $telefone;
    public $email;

    var $table = "contatos";

    function __construct()
    {
        parent::__construct();
    }

    function GetAll($sort = 'id', $order = 'asc', $limit = null, $offset = null)
    {
        $this->db->order_by($sort, $order);

        if ($limit)
            $this->db->limit($limit, $offset);

        $query = $this->db->get($this->table);

        if ($query->num_rows() > 0) {
            return $query->result();
        } else {
            return null;
        }
    }

    function CountAll()
    {
        return $this->db->count_all($this->table);
    }

    public function salvarNew($linha)
    {
        $this->db->insert('contatos', $linha);
    }

    //Contatos_Model
    public function buscarId($id)
    {
        $sql = "SELECT * FROM contatos WHERE id = $id";
        $retorno = $this->db->query($sql);

        return $retorno->result();
    }

    public function salvarAlterar($id, $nome, $telefone, $email)
    {
        $this->db->where("id", $id);
        $this->db->set("nome", $nome);
        $this->db->set("telefone", $telefone);
        $this->db->set("email", $email);
        $this->db->update("contatos");
    }

    public function excluir($id)
    {
        $this->db->where('id', $id);
        return $this->db->delete('contatos');
    }
}
