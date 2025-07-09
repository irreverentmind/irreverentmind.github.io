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


$mailer = new \Foundation\Mailer([
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

    'fromName'     => '{{Name}}',
    'fromAddress'  => '{{Email}}',
    'replyName'    => 'Joe Schmoe',
    'replyAddress' => 'joe@server.com',
    'toName'       => 'Judy',
    'toAddress'    => 'judy@inquirywithjudy.com',
    'toName2'      => 'Joe Schmoe',
    'toAddress2'   => 'you@domain.com',
    'subject'      => 'Message from {{name}}',
    'replyTo'      => 0,
    'secondTo'     => 0,
    'secondBCC'    => 0
]);

$mailer->send();
