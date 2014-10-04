<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {


  function __construct()
  {
    parent::__construct();
    $this->load->helper('url');
    $this->load->library('session');
  }


  public function index()
  {
    $data['page_title'] = 'Beranda';
    $data['selected_tab'] = 'overview';
    $this->load->view('header',$data);
    $this->load->view('menu',$data);
    $this->load->view('slider');
    $this->load->view('main_content');
    $this->load->view('footer');
  }

  public function galeri(){
    $data['page_title'] = 'Portfolio';
    $menu['selected_tab'] = 'portfolio';

    $this->load->view('header',$data);
    $this->load->view('menu',$menu);
    $this->load->view('slider');
    $this->load->view('galeri');
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

  public function portfolio_detail(){
    $data['page_title'] = 'Portfolio Detail';
    $this->load->view('header',$data);
    $this->load->view('menu');
    $this->load->view('portfolio_detail');
    $this->load->view('footer');
  }

  public function blog(){
    $data['page_title'] = 'Blog';
    $menu['selected_tab'] = 'blog';

    $this->load->view('header',$data);
    $this->load->view('menu',$menu);
    $this->load->view('slider');
    $this->load->view('blog');
    $this->load->view('footer');
  }

  public function blog_detail(){
    $data['page_title'] = 'Blog Detail';
    $this->load->view('header',$data);
    $this->load->view('menu');
    $this->load->view('blog_detail');
    $this->load->view('footer');
  }

  public function faq(){
    $data['page_title'] = 'FAQ';
    $menu['selected_tab'] = '';

    $this->load->view('header',$data);
    $this->load->view('menu',$menu);
    $this->load->view('faq');
    $this->load->view('footer');
  }

  public function cara_pembelian(){
    $data['page_title'] = 'Cara Pembelian';
    $menu['selected_tab'] = '';

    $this->load->view('header',$data);
    $this->load->view('menu',$menu);
    $this->load->view('cara_pembelian');
    $this->load->view('footer');
  }

  public function hubungi_kami(){
    $data['page_title'] = 'Hubungi Kami';
    $menu['selected_tab'] = '';

    $this->load->view('header',$data);
    $this->load->view('menu',$menu);
    $this->load->view('hubungi_kami');
    $this->load->view('footer');
  }
}


