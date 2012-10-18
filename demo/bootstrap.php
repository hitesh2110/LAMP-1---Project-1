<?php

defined('IN_DEMO') or exit;

ini_set('display_errors', 'on');
error_reporting(E_ALL | E_STRICT);

define('LIBRARY_PATH', realpath('../') . DIRECTORY_SEPARATOR . 'vendors' . DIRECTORY_SEPARATOR);

require_once LIBRARY_PATH . 'bootstrap.php';