<?php
if (!isset($_POST)) {
    exit;
}

error_reporting(E_ERROR | E_PARSE);

set_include_path(get_include_path().PATH_SEPARATOR.'../../rw_common/plugins/stacks');
require 'Mustache/Autoloader.php';
require 'phpmailer/Exception.php';
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'foundationmailer.php';
require 'foundationdb.php';


$db = new \Foundation\DB([
    'adminSend'    => false,
    'adminTo'      => 'admin@server.com',
    'adminFrom'    => 'no-reply@server.com',
    'adminSubject' => 'An error occurred with your website form',

    'useSmtp'      => false,
    'smtpHost'     => 'smtp.example.com',
    'smtpUser'     => 'user@example.com',
    'smtpPass'     => 'secret',
    'smtpPort'     => intval("587"),
    'smtpSecure'   => 'tls',

    'dbServer'     => 'server.domain.com',
    'dbPort'       => intval('3306'),
    'dbUsername'   => 'joeschmoe',
    'dbPassword'   => 'p@ssw0rd',
    'dbTable'      => 'MYTABLE',
    'dbName'       => 'MYDB'
]);

$db->setupSecurityFiles('exporter', 'secret', __DIR__);
$db->export();
$db->close();
