<?php

    class Contatos_Model extends CI_Model {


        public $id;
        public $nome;
        public $telefone;
        public $email;

        public function buscarTodos() {
            //SELECT * FROM contatos
            $retornoBanco = $this->db->get("contatos");
            $dados = $retornoBanco->result();

            return $dados;
        }

        public function salvarNew($linha) {
            $this->db->insert('contatos',$linha);
        }

        //Contatos_Model
        public function buscarId($id) {
            $sql = "SELECT * FROM contatos WHERE id = $id";
            $retorno = $this->db->query($sql);

            return $retorno->result();
        }

        public function salvarAlterar($id,$nome,$telefone,$email) {
            $this->db->where("id",$id);
            $this->db->set("nome",$nome);
            $this->db->set("telefone",$telefone);
            $this->db->set("email",$email);
            $this->db->update("contatos");
        }

        public function excluir($id) {
            $this->db->where('id', $id);
            return $this->db->delete('contatos');
        }
    }
?>
