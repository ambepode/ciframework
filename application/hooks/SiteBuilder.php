<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class SiteBuilder extends CI_Controller {

	public function loadHeader() {
		$css = loadCss(['/assets/css/site/style.css']);
		$view = $this->load->view('header', [
			'css' => $css
		], true);

		echo $view;
	}

	public function loadFooter() {
		$js = loadJs([
			'/assets/js/jquery-3.2.0.js',
			'/assets/js/common.js'
		]);
		$view = $this->load->view('footer', [
			'js' => $js
		], true);

		echo $view;
	}
}