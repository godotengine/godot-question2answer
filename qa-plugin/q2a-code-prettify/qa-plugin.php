<?php

/*
        Plugin Name: Q2A Code Pretifier
        Plugin URI: https://github.com/amiyasahu/q2a-code-prettyfier
        Plugin Update Check URI: https://raw.github.com/amiyasahu/q2a-code-prettyfier/master/qa-plugin.php
        Plugin Description: A Syntax Highlighter plugin for q2a , powered by Google Code Pertifier 
        Plugin Version: 1.0
        Plugin Date: 2014-08-14
        Plugin Author: Amiya Sahu
        Plugin Author URI: http://amiyasahu.com
        Plugin License: GPLv2
        Plugin Minimum Question2Answer Version: 1.6
*/


        if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
        	header('Location: ../../');
        	exit;
        }

        if (!defined('AMI_CODE_PRETTYFY_DIR')) {
                define('AMI_CODE_PRETTYFY_DIR', dirname(__FILE__));
        }

        if (!defined('AMI_CODE_PRETTYFY_DIR_NAME')) {
                define('AMI_CODE_PRETTYFY_DIR_NAME', basename(dirname(__FILE__)));
        }

        if (!defined('AMI_CODE_PRETTYFY_ASSETS')) {
                define('AMI_CODE_PRETTYFY_ASSETS', (dirname(__FILE__)).'/assets');
        }

        require_once AMI_CODE_PRETTYFY_DIR.'/qa-code-prettify-utils.php';
        require_once AMI_CODE_PRETTYFY_DIR.'/qa-code-prettify-admin.php';

        qa_register_plugin_module('module', 'qa-code-prettify-admin.php', 'qa_code_prettify_admin', 'Google Code Pretifier Admin');
        qa_register_plugin_layer('qa-code-prettify-layer.php', 'Google Code Pretifier Layer');
        qa_register_plugin_phrases('qa-code-prettify-lang-*.php', 'ami_code_prettify');

/*
	Omit PHP closing tag to help avoid accidental output
*/
