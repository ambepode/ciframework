<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller
{
    public $css = '';
    public $js = '';
    public $allow = ['index', 'login', 'doLogin'];

    public function __construct()
    {
        parent::__construct();
        $this->load->helper(['common', 'url']);
        $this->load->library('common');
	    // $this->load->model('Member');
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

    public function index()
    {
        $sessionData = $this->session->all_userdata();
        if(!empty($sessionData)) {
//            var_dump($sessionData);
        }

        $this->load->view('/site/index');
    }

    /**
     * 로그인 처리
     */
    public function doLogin()
    {
        $this->load->library('validation');

        $memberId = $this->input->post('memberId', true);
        $password = $this->input->post('password', true);

        $result = $this->validation->login($memberId, $password);
        if($result['code'] === 1) {
            foreach($result['result'] as $userData => $value) {
                if($userData === 'password') continue;

                $this->session->set_userdata($userData, $value);
            }

            redirect('/');
        } else {
            echo alertMessage($result['message']);
            exit;
        }
    }

    public function signUp()
    {
        $signUpForm = $this->input->post(null, true);

        if(is_array($signUpForm) && !empty($signUpForm)) {
            // check blank
            foreach($signUpForm as $value) {
                if(empty($value)) {
                    echo alertMessage('fill out all the blanks');
                }
            }

            // check password
            if($signUpForm['password'] !== $signUpForm['password2']) {
                echo alertMessage('password error');
            }

            // check regExp
            // (new self)->index();

	        // $this->Member->setMemberInfo($signUpForm);

	        $this->load->view('signUp');

        } else {
            $this->load->view('signUp');
        }
    }

    /**
     * 회원가입 처리
     */
    public function doJoin()
    {
        $this->load->library('validation');

        $memberId = $this->input->post('memberId', true);
        $password = $this->input->post('password', true);

        // 입력 값 검증
        $memberIdValidation = $this->validation->memberId($memberId);
        if($memberIdValidation['code'] !== 1) {
            echo $memberIdValidation['message'];
            exit;
        }
        $passwordValidation = $this->validation->password($password);
        if($passwordValidation['code'] !== 1) {
            echo $passwordValidation['message'];
            exit;
        }

        // 저장
        $memberInfo = [
            'memberId' => $memberId,
            'password' => password_hash($password, PASSWORD_BCRYPT),
            'state' => 'join',
            'regDate' => time(),
        ];

        $this->load->model('member');
        $this->member->insertMember($memberInfo);
    }

    public function login()
    {
        $this->load->view('/site/login');
    }

    /**
     * 로그아웃
     */
    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
