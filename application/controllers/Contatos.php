<?php

    class Contatos extends CI_Controller {
        
        public function index() {
            $this->load->model("Contatos_Model");
            $contatos = $this->Contatos_Model->buscarTodos();

            $pacote = array(
                "contatos" => $contatos,
                "pagina" => "tabela.php",
            );

                $this->load->view("index", $pacote);
        }      

        public function novo() {
            $pacote = array(
                "pagina" => "contatoNovo.php",
            );
            $this->load->view('index', $pacote);
        }

        public function salvarNovo() {
            //var_dump($_POST);
            $dados = array(
                'nome' => $_POST['nome'],
                'telefone' => $_POST['telefone'],
                'email' => $_POST['email']
            );

            $this->load->model("Contatos_Model");
            $this->Contatos_Model->salvarNew($dados);
            
            redirect('contatos');
        }
        //Controller Contatos
        public function alterar($identificador) {
            $this->load->model("Contatos_Model");

            $contato = $this->Contatos_Model->buscarId($identificador);
            $pacote = array(
                "contato" => $contato,
                "pagina" => "contatoAlterar.php"
            );

            $this->load->view('index', $pacote);
        }

        //controller
        public function salvarAlterar() {
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $telefone = $_POST['telefone'];
            $email = $_POST['email'];

            $this->load->model("Contatos_Model");
            $this->Contatos_Model->salvarAlterar($id, $nome,$telefone, $email);

            redirect("contatos");
        }

        public function excluirContato($id) {
            $this->load->model('Contatos_Model');
            if ($this->Contatos_Model->excluir($id)) {
                redirect('contatos');
            } else {
                log_message('error', 'Erro ao deletar...');
            }
        }
    }
?>
