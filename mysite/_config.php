<?php

global $project;
$project = 'mysite';

global $databaseConfig;
$databaseConfig = array(
	'type' => 'MySQLDatabase',
	'server' => '127.0.0.1',
	'username' => 'root',
	'password' => '',
	'database' => 'silverstripe_starter',
	'path' => ''
);

// Set the site locale
i18n::set_locale('en_US');
