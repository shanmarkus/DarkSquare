<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('slider');
    $this->load->view('main_content');
    $this->load->view('footer');
  }
}


