<?php
	if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
		header('Location: ../../');
		exit;
	}

	require_once QA_INCLUDE_DIR.'qa-theme-base.php';
	require_once QA_INCLUDE_DIR.'qa-app-blobs.php';
	require_once QA_INCLUDE_DIR.'qa-app-users.php';

	class qa_html_theme_layer extends qa_html_theme_base {
		
		function head_css() {
			qa_html_theme_base::head_css();
			if ($this->template == 'question' && qa_opt(qa_code_prettify_admin::PLUGIN_ENABLED)) {
				$selected_theme  = qa_opt(qa_code_prettify_admin::CODE_THEME);
		    	if (!$selected_theme ) {
		    		$selected_theme  = "github.css" ;
		    	}
		    	$root_theme_url = qa_opt('site_url').'qa-plugin/'.AMI_CODE_PRETTYFY_DIR_NAME.'/assets/css/' ;
		    	$theme_url = $root_theme_url . $selected_theme ;
				$this->output('<link rel="stylesheet" href="'.$theme_url.'">');
				$this->output('<style>','.prettyprint {overflow-y: scroll;}','</style>');
			}
		}

		function head_script()
		{
			if ($this->template == 'question' && qa_opt(qa_code_prettify_admin::PLUGIN_ENABLED)) {
			    $js_url = qa_opt('site_url').'qa-plugin/'.AMI_CODE_PRETTYFY_DIR_NAME.'/assets/js/prettify.js' ;
				if (!isset($this->content['script']['prettyfy_script'])) {
					$this->content['script']['prettyfy_script'] = '<script src="'.$js_url.'" type="text/javascript"></script>' ;
				}
			}
			qa_html_theme_base::head_script();
		}
		function body_script()
		{
			qa_html_theme_base::body_script();
			if ($this->template == 'question' && qa_opt(qa_code_prettify_admin::PLUGIN_ENABLED)) {
				$this->output(
					'<script type="text/javascript">',
					'$(document).ready(function() {	prettyPrint();});' , '</script>'
				);
			}
		}
	}
	/*
		Omit PHP closing tag to help avoid accidental output
	*/