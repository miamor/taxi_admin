<?php
// config file
include_once 'include/config.php';

if (!$config->u) {
	$page = 'login';
} else {
	if (!isset($page) || !$page) $page = 'index';

	if ($page != 'index' && !file_exists('pages/'.$page.'.php')) $page = 'error';
}

$page_title = 'AdminCP';

if (!$do && !$v && !$temp) include 'header.php';
if ($page == 'index') echo '<script>location.href = "'.MAIN_URL.'/trip";</script>';
if ($page) {
	include 'pages/'.$page.'.php';
}
if (!$do && !$v && !$temp) include 'footer.php';
