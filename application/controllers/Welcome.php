<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	//ação padrão.. sempre que entrar, passará aqui
	public function index()
	{
		echo "Você está na index";
	}

	public function segunda() {
		echo "voce esta na segunda";
	}
}
