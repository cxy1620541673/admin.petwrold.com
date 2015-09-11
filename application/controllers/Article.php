<?php

/**
 * @description	文章管理
 * @createtime	2015-08-07 10:00:00
 * @author		chenxuyi
 */

class Article extends PW_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model( 'ArticleModel', 'articlemodel' );
	}

	public function ListArticle() {
		$this->display( 'article/listarticle' );
	}

	public function AddArticle() {
		// 设置存放文件的文件夹名称
		$folder		=	'admin_'.$this->_admin['admin_id'].'_'.date( 'Ymd_His', time() );
		$sesskey	=	$this->GetConfig( 'add_article_sess' );
		$sessval	=	SetSession( $sesskey, $folder );

		$this->display( 'article/addarticle' );
	}

	public function AjaxAddArticle() {
		// 获取参数
		$data['a_title']		=	GetParams( 'a_title', 2 );
		$data['a_author_name']	=	GetParams( 'a_author_name', 2 );
		$data['a_photo']		=	GetParams( 'a_photo', 2 );
		$data['a_desc']			=	GetParams( 'a_desc', 2 );
		$data['a_content']		=	GetParams( 'a_content', 2 );
		$data['a_is_anonymous']	=	GetParams( 'a_is_anonymous', 1 );
		$data['a_is_show']		=	GetParams( 'a_is_show', 1 );
		$data['a_is_private']	=	GetParams( 'a_is_private', 1 );
		$data['p_id']			=	GetParams( 'p_id', 1, 0 );
		$data['at_id']			=	GetParams( 'at_id', 1, 0 );

		// 默认值
		$sesskey	=	$this->GetConfig( 'add_article_sess' );
		$data['a_folder']		=	GetSession( $sesskey );
		$data['a_author_type']	=	1;
		$data['a_author_id']	=	$this->_admin['admin_id'];
		$data['a_insert_time']	=	time();
		$data['a_update_time']	=	$data['a_insert_time'];

		// 插入数据
		if ( $this->articlemodel->InsertArticle( $data ) ) {
			EchoJson( TRUE, 1, '添加成功' );
		}
		EchoJson( FALSE, 10020, '添加失败' );
	}

	public function AjaxUploadImage() {
		// 文件名信息
		$pathinfo	=	pathinfo( $_FILES['imgFile']['name'] );
		$filename	=	date( 'YmdHis' ).'_'.md5( $pathinfo['filename'] ).'.'.$pathinfo['extension'];

		// 存放的路径和文件夹名
		$sesskey	=	$this->GetConfig( 'add_article_sess' );
		$folder		=	GetSession( $sesskey );
		$filepath	=	$this->GetConfig( 'article_image_path' ).$folder.'/';
		if ( !is_dir( $filepath ) ) {
			mkdir( $filepath );
		}

		$result	=	array();
		if ( move_uploaded_file( $_FILES['imgFile']['tmp_name'], $filepath.$filename ) ) {
			$result['error']	=	0;
			$result['url']		=	$this->GetConfig( 'article_image_url' ).$folder.'/'.$filename;
			$result['msg']		=	'上传成功';
		} else {
			$result['error']	=	1;
			$result['url']		=	'';
			$result['msg']		=	'上传失败';
		}
		exit( json_encode( $result ) );
	}

	public function AjaxGetArticleList() {}

}