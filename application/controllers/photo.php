<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Photo extends CI_Controller {

  /**
   * Intended to serve as the photo object front
   * Index of this class will serve as a view
   */

  public function index() {
    $this->load->view('header');
    $this->load->view('welcome_message');
    $this->load->view('footer');
  }
}

/* End of file photo.php */
/* Location: ./application/controllers/photo.php */