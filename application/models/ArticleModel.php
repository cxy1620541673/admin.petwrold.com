<?php

class ArticleModel extends PW_Model {

	private $table	=	'article';

	public function __construct() {
		parent::__construct();
	}

	public function InsertArticle( $data ) {
		if ( $this->db->insert( $this->table, $data ) ) return TRUE;
		return FALSE;
	}

}

?>