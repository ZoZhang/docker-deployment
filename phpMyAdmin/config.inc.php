<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * phpMyAdmin sample configuration, you can use it as base for
 * manual configuration. For easier setup you can use setup/
 *
 * All directives are explained in documentation in the doc/ folder
 * or at <https://docs.phpmyadmin.net/>.
 *
 * @package PhpMyAdmin
 */
declare(strict_types=1);

/**
 * Servers configuration
 */
$i = 0;

/**
 * First server
 */
$i++;
/* Server parameters */
$cfg['Servers'][$i]['host'] = 'mariadb';

$cfg['LoginCookieValidity'] = 86400;

