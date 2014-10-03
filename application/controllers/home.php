<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

  public function index()
  {
    $data['page_title'] = 'Beranda';
    $this->load->view('header',$data);
    $this->load->view('menu');
    $this->load->view('slider');
    $this->load->view('main_content');
    $this->load->view('footer');
  }

  public function portfolio(){
    $data['page_title'] = 'Portfolio';
    $this->load->view('header',$data);
    $this->load->view('menu');
    $this->load->view('slider');
    $this->load->view('portfolio');
    $this->load->view('footer');
  }
}


