<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends Public_Controller {

	public function index()
	{
		$this->vars['title']    = 'Beranda';
        $this->vars['content']  = 'public/home';
        $this->load->view('public/main', $this->vars);
	}
}
