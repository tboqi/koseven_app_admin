<?php defined('SYSPATH') OR die('No direct access allowed.');

return array
(
    'default' => array(
        'type' => 'PDO',
        'connection' => array(
            'dsn' => 'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME,
            'username' => DB_USER,
            'password' => DB_PASS,
            'persistent' => FALSE,
        ),
        /**
         * The following extra options are available for PDO:
         *
         * string   identifier  set the escaping identifier
         */
        'table_prefix' => '',
        'charset' => 'utf8',
        'caching' => FALSE,
    ),
);
