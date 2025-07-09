<?php
if (!isset($_POST)) {
    exit;
}

error_reporting(E_ERROR | E_PARSE);

require_once("../../rw_common/plugins/stacks/f1forms/autoload.php");

$mailer = new \Foundation\Mailer([
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

    'fromName'     => 'Joe Schmoe',
    'fromAddress'  => 'no-reply@server.com',
    'replyName'    => 'Joe Schmoe',
    'replyAddress' => 'joe@server.com',
    'toName'       => 'Joe Schmoe',
    'toAddress'    => 'you@domain.com',
    'toName2'      => 'Joe Schmoe',
    'toAddress2'   => 'you@domain.com',
    'subject'      => 'Message from {{name}}',
    'replyTo'      => 0,
    'secondTo'     => 0,
    'secondBCC'    => 0
]);

$mailer->send();
