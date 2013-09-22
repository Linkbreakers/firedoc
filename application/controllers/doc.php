<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doc extends CI_Controller {

	public function __construct() {

		parent::__Construct();

	}

	public function index() {

		$this->load->view('doc/doc_home');

	}

}
