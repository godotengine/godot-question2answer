<?php


if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
	header('Location: ../../');
	exit;
}

return array(
	/*languages for admin panel*/
	'enable'           	     => 'Enable the Google Code Prettifier Plugin' ,
	'select_a_theme'         => 'Select a prettifier theme ' ,
);

/*
	Omit PHP closing tag to help avoid accidental output
*/