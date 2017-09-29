<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
  function_construct() { //constructor debe llamarse ifual que la clase -->1.44"
    parent::_construct() ;
  }

  functions index(){
    $this->load->view('codigo/welcome')
  }
}



?>
