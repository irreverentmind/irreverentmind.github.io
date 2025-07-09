<?php

//-------------------------------------------------
// Setup .htaccess and htpassword files
//-------------------------------------------------
function crypt_apr1_md5($plainpasswd) {
    $salt = substr(str_shuffle("abcdefghijklmnopqrstuvwxyz0123456789"), 0, 8);
    $len = strlen($plainpasswd);
    $text = $plainpasswd.'$apr1$'.$salt;
    $bin = pack("H32", md5($plainpasswd.$salt.$plainpasswd));
    for($i = $len; $i > 0; $i -= 16) { $text .= substr($bin, 0, min(16, $i)); }
    for($i = $len; $i > 0; $i >>= 1) { $text .= ($i & 1) ? chr(0) : $plainpasswd{0}; }
    $bin = pack("H32", md5($text));
    for($i = 0; $i < 1000; $i++)
    {
        $new = ($i & 1) ? $plainpasswd : $bin;
        if ($i % 3) $new .= $salt;
        if ($i % 7) $new .= $plainpasswd;
        $new .= ($i & 1) ? $bin : $plainpasswd;
        $bin = pack("H32", md5($new));
    }
    for ($i = 0; $i < 5; $i++)
    {
        $k = $i + 6;
        $j = $i + 12;
        if ($j == 16) $j = 5;
        $tmp = $bin[$i].$bin[$k].$bin[$j].$tmp;
    }
    $tmp = chr(0).chr(0).$bin[11].$tmp;
    $tmp = strtr(strrev(substr(base64_encode($tmp), 2)),
    "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/",
    "./0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz");
 
    return "$"."apr1"."$".$salt."$".$tmp;
}

$basedir = dirname(__FILE__);
$htaccess = $basedir.'/.htaccess';
$htpasswd = $basedir.'/foundation-export.passwd';

// The htaccess file must have the absolute path to the htpasswd file. 
// This is why I must create it via PHP instead of simply including it in the stack as an asset
$htaccess_contents = <<<EOT
<FilesMatch "_export\.php\$">
AuthUserFile $htpasswd
AuthName "Form Export Utility"
AuthType Basic
Require valid-user
</FilesMatch>

# Disable Directory Access
Options -Indexes

# secure htaccess file
<Files .htaccess>
order allow,deny
deny from all
</Files>

# secure htpasswd file
<Files foundation-export.passwd>
order allow,deny
deny from all
</Files>

AddType application/octet-stream .csv
EOT;

if (!file_exists($htpasswd)) {	 
	$user = 'exporter';
	$password = 'secret';
	$hash = crypt_apr1_md5($password);

	$contents = $user . ':' . $hash;
	
	file_put_contents($htpasswd, $contents);
	file_put_contents($htaccess, $htaccess_contents);

	header('Location: '.$_SERVER['REQUEST_URI'].'?setup=complete');
	exit;
}


//-------------------------------------------------
// Connect to the database and export
//-------------------------------------------------
function return_error($msg) {
	$emailAdmin = 0;
	$admin      = 'admin@server.com';
	$from       = 'no-reply@server.com';
	$subject    = 'An error occurred with your website form';

	if ($emailAdmin) {
		require 'phpmailer/PHPMailerAutoload.php';

		$mail = new PHPMailer();

		if (false) {
			$mail->isSMTP();
			$mail->SMTPAuth   = true;
			$mail->Host       = 'smtp.example.com';
			$mail->Username   = 'user@example.com';
			$mail->Password   = 'secret';
			$mail->SMTPSecure = 'tls';
			$mail->Port       = 587;
		}

		$mail->setFrom($from);
		$mail->addAddress($admin);
		$mail->Subject = $subject;
		$mail->Body = $msg;
		$mail->send();
	}

	header('HTTP/1.1 500 Internal Server Error');
	header('Content-Type: application/json; charset=UTF-8');
	die(json_encode(array('message' => $msg, 'code' => 500, 'post' => $_POST)));
}

$dbServer   = 'server.domain.com';
$dbUsername = 'joeschmoe';
$dbPassword = 'p@ssw0rd';
$dbTable    = 'MYTABLE';
$dbName     = 'MYDB';

// Connect to the database
try {
  $db_conn = new PDO("mysql:host=$dbServer;dbname=$dbName", $dbUsername, $dbPassword); 
}
catch(PDOException $e) {
	return_error($e->getMessage());
}

// get column names
try {
	$names = $db_conn->prepare("DESCRIBE $dbTable");
	$names->execute();
}
catch(PDOException $e) {
	return_error($e->getMessage());
}

// get the data
try {
	$data = $db_conn->prepare("select * from $dbTable");
	$data->execute();
}
catch(PDOException $e) {
	return_error($e->getMessage());
}

// Download the csv file
$filename = "data-export.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

$output = fopen("php://output", "w");

fputcsv($output, $names->fetchAll(PDO::FETCH_COLUMN));

while ($row = $data->fetch(PDO::FETCH_ASSOC)) {
    fputcsv($output, $row);
}

$db_conn = null;
?>
