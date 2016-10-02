<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Next_page extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    
    public function index() {
        $this->load->view('next_page');
    }
    
    public function add_numbers($num1 = null, $num2 = null) {
        //echo "<h3>".($num1 + $num2)."</h3>";
        
        $data = ['answer' => $num1 + $num2 ];
        
        $this->load->view('next_page', $data);
    }
}