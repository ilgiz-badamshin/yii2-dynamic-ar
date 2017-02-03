<?php

/**
 * This is the configuration file for the Yii2 unit tests.
 * You can override configuration values by creating a `config.local.php` file
 * and manipulate the `$config` variable.
 * For example to change MySQL username and password your `config.local.php` should
 * contain the following:
 *
<?php
$config['databases']['mysql']['username'] = 'yiitest';
$config['databases']['mysql']['password'] = 'changeme';

 */

$config = [
    'databases' => [
//        'cubrid' => [
//            'dsn' => 'cubrid:dbname=demodb;host=localhost;port=33000',
//            'username' => 'dba',
//            'password' => '',
//            'fixture' => __DIR__ . '/cubrid.sql',
//        ],
        'mysql' => [
            'dsn' => 'mysql:host=localhost;dbname=test',
            'username' => 'travis',
            'password' => '',
            'fixture' => __DIR__ . '/mysql.sql',
        ],
//        'sqlite' => [
//            'dsn' => 'sqlite::memory:',
//            'fixture' => __DIR__ . '/sqlite.sql',
//        ],
//        'sqlsrv' => [
//            'dsn' => 'sqlsrv:Server=localhost;Database=test',
//            'username' => '',
//            'password' => '',
//            'fixture' => __DIR__ . '/mssql.sql',
//        ],
        'pgsql' => [
            'dsn' => 'pgsql:host=localhost;dbname=myyiitest;port=5432;',
            'username' => 'tester',
            'password' => 'tester',
            'fixture' => __DIR__ . '/postgres.sql',
        ],
    ],
];

if (is_file(__DIR__ . '/config.local.php')) {
    /** @noinspection PhpIncludeInspection */
    include(__DIR__ . '/config.local.php');
}

return $config;