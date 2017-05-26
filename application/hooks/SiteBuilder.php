<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteBuilder extends CI_Controller {

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

	public function loadHeader() {
		$view = $this->load->view('header', [
			'css' => $this->css
		], true);

		echo $view;
	}

	public function loadFooter() {
		$view = $this->load->view('footer', [
			'js' => $this->js
		], true);

		echo $view;
	}
}