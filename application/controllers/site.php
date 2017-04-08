<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public $css = '';

    public function __construct(){
        parent::__construct();
        $this->load->helper(['loadAssets']);
        $this->css = loadCss(['/assets/css/site/style.css']);
    }

    public function _remap($method){
        switch($method){
            default:
                $this->index();
                break;
        }
    }

    public function index()
    {
        $this->load->view('site', [
            'css' => $this->css
        ]);
    }

}
