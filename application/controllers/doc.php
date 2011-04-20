<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doc extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}
	
	/*
	 * When an url like /doc/view/<category_id>/<doc_id>
	 * is handled, this function is called with the args
	 * <category_id> ($cid) and <doc_id> ($id)
	*/
	public function view($cid, $id)
	{
		if (!is_numeric($cid) || !is_numeric($id)) {
			$err_data = array(
				'file'  => __FILE__,
				'class' => __CLASS__,
				'function' => __FUNCTION__);
			$this->load->view('errors/fn_bad_args', $err_data);
			exit;
		}
		
		$this->model->load('Doc_model', 'doc');
		$doc = $this>doc->get($cid, $id);
	}
	
}
