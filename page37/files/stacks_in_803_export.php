<?php
if (!isset($_POST)) {
    exit;
}

error_reporting(E_ERROR | E_PARSE);

require_once("../../rw_common/plugins/stacks/f1forms/autoload.php");

$db = new \Foundation\DB([
    'adminSend'    => true,
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
