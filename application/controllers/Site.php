<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public $css = '';
    public $js = '';

    public function __construct() {
        parent::__construct();
        $this->load->helper(['common', 'url']);
    }

    /*
    public function _remap($method){
        switch($method){
            case 'signUp':
                $this->signUp();
                break;
            default:
                $this->index();
                break;
        }
    }
    */

    public function index() {
        $this->load->view('site');
    }

    public function signUp() {
        $signUpForm = $this->input->post(null, true);

        if(is_array($signUpForm) && !empty($signUpForm)) {
            // form validation step 1
            foreach($signUpForm as $value) {
                if(empty($value)) {
                    echo alertMessage('fill out all the blanks');
                }
            }
            // form validation step 2
            if($signUpForm['password'] !== $signUpForm['password2']) {
                echo alertMessage('password error');
            }
            // @todo form validation step 3(regExp)
            (new self)->index();

        } else {
            $this->load->view('signUp');
        }
    }

    public function homePage() {
	    $param = $this->input->post(null, true);

	    if(!empty($param)) {
	    	saveSession($param);
	    }

	    if($param['email'] == 'test@test' && $param['password'] == 'test') {
		    $this->load->view('ios');
	    } else {
	    	return false;
	    }
    }
}
