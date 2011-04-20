<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Doc_model extends CI_Model {

	/* Member instance of the author */
	private Member $author;
	/* Author identifier */
	var integer $author_id;
	/* Category id */
	var integer $category_id;
	/* Content */
	var string $content;
	/* Publication date */
	var string $date;
	/* Last edit date */
	var string $date_last_edit;
	/* Identifier */
	var integer $id;
	/* Title */
	var string $title;

	public function __construct()
	{
		parent::__construct();
	}
	
	public function get($cid, $id)
	{
		/* not implemented yet */
	}

}

