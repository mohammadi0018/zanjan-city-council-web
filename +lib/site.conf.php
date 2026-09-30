<?php
$config = array();

// Public project information
$config['site']['email'] = "info@zanjanshora.ir";
$config['site']['name']  = "Zanjan City Council Website";
$config['site']['url']   = "https://www.zanjanshora.ir";

// Database credentials are stored separately in +lib/models/db/xdb.conf.php
// and are intentionally not included in this public repository.

// Smarty configuration
$config['smarty']['template_dir'] = 'application/view';
$config['smarty']['config_dir']  = '+lib/smarty/config/';
$config['smarty']['compile_dir'] = '+lib/smarty/_compile/';
$config['smarty']['cache_dir']   = '+lib/smarty/_cache/';

// Site layouts
$config['main']['layout']  = 'index.tpl';
$config['admin']['layout'] = 'admin/index.tpl';
?>
