<?php


if (!defined('QA_VERSION')) { // don't allow this page to be requested directly from browser
        header('Location: ../../');
        exit;
}


qa_register_plugin_module('widget', 'qa-godot-readonly-warning.php', 'qa_godot_readonly_warning', 'Read-only Warning');
