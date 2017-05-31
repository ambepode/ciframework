<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteBuilder extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper(['common']);
	}

	public function loadHeader() {
		$css = loadAssets(['/assets/css/site/style.css'], 'css');
		$view = $this->load->view('header', [
			'css' => $css
		], true);

		echo $view;
	}

	public function loadFooter() {
		$js = loadAssets([
			'/assets/js/jquery-3.2.0.js',
			'/assets/js/common.js'
		], 'js');
		$view = $this->load->view('footer', [
			'js' => $js
		], true);

		echo $view;
	}
}