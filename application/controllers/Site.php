<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public $css = '';
    public $js = '';

    public function __construct() {
        parent::__construct();
        $this->load->helper(['common', 'url']);
        $this->css = loadCss(['/assets/css/site/style.css']);
        $this->js = loadJs([
            '/assets/js/jquery-3.2.0.js',
            '/assets/js/common.js'
        ]);
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
	    $param = $this->input->post(null, true);

	    if(!empty($param)) {
		    if($param['email'] == 'test@test' && $param['password'] == 'test') {
			    $this->homePage();
			    return false;
		    }
	    }

        $this->load->view('site', [
            'css' => $this->css,
            'js' => $this->js
        ]);
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
            $this->load->view('signUp', [
                'css' => $this->css,
                'js' => $this->js
            ]);
        }
    }

    public function homePage() {
	    $this->load->view('welcome_message', [
		    'css' => $this->css,
		    'js' => $this->js
	    ]);
    }

}
