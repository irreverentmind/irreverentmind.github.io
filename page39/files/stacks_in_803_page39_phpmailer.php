<?php
if(!isset($_POST)) exit;

require 'phpmailer/PHPMailerAutoload.php';
require 'Mustache/Autoloader.php';

function return_error($msg) {
	$emailAdmin = 0;
	$admin      = 'admin@server.com';
	$from       = 'no-reply@server.com';
	$subject    = 'An error occurred with your website form';

	if ($emailAdmin) {
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
		// Send and fallback to mail() on failure
		if (!$mail->send()) mail($admin,$subject,$msg);
	}

	header('HTTP/1.1 500 Internal Server Error');
	header('Content-Type: application/json; charset=UTF-8');
	die(json_encode(array('message' => trim(strip_tags($msg)), 'code' => 500, 'post' => $_POST)));
}

function return_success($msg) {
	header('Content-Type: application/json');
	echo json_encode(array('message' => trim(strip_tags($msg)), 'code' => 200));
	exit();
}

function decode_entities_full($string, $quotes = ENT_COMPAT, $charset = 'ISO-8859-1') {
  return html_entity_decode(preg_replace_callback('/&([a-zA-Z][a-zA-Z0-9]+);/', 'convert_entity', $string), $quotes, $charset);
}
function convert_entity($matches, $destroy = true) {
  static $table = array('quot' => '&#34;','amp' => '&#38;','lt' => '&#60;','gt' => '&#62;','OElig' => '&#338;','oelig' => '&#339;','Scaron' => '&#352;','scaron' => '&#353;','Yuml' => '&#376;','circ' => '&#710;','tilde' => '&#732;','ensp' => '&#8194;','emsp' => '&#8195;','thinsp' => '&#8201;','zwnj' => '&#8204;','zwj' => '&#8205;','lrm' => '&#8206;','rlm' => '&#8207;','ndash' => '&#8211;','mdash' => '&#8212;','lsquo' => '&#8216;','rsquo' => '&#8217;','sbquo' => '&#8218;','ldquo' => '&#8220;','rdquo' => '&#8221;','bdquo' => '&#8222;','dagger' => '&#8224;','Dagger' => '&#8225;','permil' => '&#8240;','lsaquo' => '&#8249;','rsaquo' => '&#8250;','euro' => '&#8364;','fnof' => '&#402;','Alpha' => '&#913;','Beta' => '&#914;','Gamma' => '&#915;','Delta' => '&#916;','Epsilon' => '&#917;','Zeta' => '&#918;','Eta' => '&#919;','Theta' => '&#920;','Iota' => '&#921;','Kappa' => '&#922;','Lambda' => '&#923;','Mu' => '&#924;','Nu' => '&#925;','Xi' => '&#926;','Omicron' => '&#927;','Pi' => '&#928;','Rho' => '&#929;','Sigma' => '&#931;','Tau' => '&#932;','Upsilon' => '&#933;','Phi' => '&#934;','Chi' => '&#935;','Psi' => '&#936;','Omega' => '&#937;','alpha' => '&#945;','beta' => '&#946;','gamma' => '&#947;','delta' => '&#948;','epsilon' => '&#949;','zeta' => '&#950;','eta' => '&#951;','theta' => '&#952;','iota' => '&#953;','kappa' => '&#954;','lambda' => '&#955;','mu' => '&#956;','nu' => '&#957;','xi' => '&#958;','omicron' => '&#959;','pi' => '&#960;','rho' => '&#961;','sigmaf' => '&#962;','sigma' => '&#963;','tau' => '&#964;','upsilon' => '&#965;','phi' => '&#966;','chi' => '&#967;','psi' => '&#968;','omega' => '&#969;','thetasym' => '&#977;','upsih' => '&#978;','piv' => '&#982;','bull' => '&#8226;','hellip' => '&#8230;','prime' => '&#8242;','Prime' => '&#8243;','oline' => '&#8254;','frasl' => '&#8260;','weierp' => '&#8472;','image' => '&#8465;','real' => '&#8476;','trade' => '&#8482;','alefsym' => '&#8501;','larr' => '&#8592;','uarr' => '&#8593;','rarr' => '&#8594;','darr' => '&#8595;','harr' => '&#8596;','crarr' => '&#8629;','lArr' => '&#8656;','uArr' => '&#8657;','rArr' => '&#8658;','dArr' => '&#8659;','hArr' => '&#8660;','forall' => '&#8704;','part' => '&#8706;','exist' => '&#8707;','empty' => '&#8709;','nabla' => '&#8711;','isin' => '&#8712;','notin' => '&#8713;','ni' => '&#8715;','prod' => '&#8719;','sum' => '&#8721;','minus' => '&#8722;','lowast' => '&#8727;','radic' => '&#8730;','prop' => '&#8733;','infin' => '&#8734;','ang' => '&#8736;','and' => '&#8743;','or' => '&#8744;','cap' => '&#8745;','cup' => '&#8746;','int' => '&#8747;','there4' => '&#8756;','sim' => '&#8764;','cong' => '&#8773;','asymp' => '&#8776;','ne' => '&#8800;','equiv' => '&#8801;','le' => '&#8804;','ge' => '&#8805;','sub' => '&#8834;','sup' => '&#8835;','nsub' => '&#8836;','sube' => '&#8838;','supe' => '&#8839;','oplus' => '&#8853;','otimes' => '&#8855;','perp' => '&#8869;','sdot' => '&#8901;','lceil' => '&#8968;','rceil' => '&#8969;','lfloor' => '&#8970;','rfloor' => '&#8971;','lang' => '&#9001;','rang' => '&#9002;','loz' => '&#9674;','spades' => '&#9824;','clubs' => '&#9827;','hearts' => '&#9829;','diams' => '&#9830;','nbsp' => '&#160;','iexcl' => '&#161;','cent' => '&#162;','pound' => '&#163;','curren' => '&#164;','yen' => '&#165;','brvbar' => '&#166;','sect' => '&#167;','uml' => '&#168;','copy' => '&#169;','ordf' => '&#170;','laquo' => '&#171;','not' => '&#172;','shy' => '&#173;','reg' => '&#174;','macr' => '&#175;','deg' => '&#176;','plusmn' => '&#177;','sup2' => '&#178;','sup3' => '&#179;','acute' => '&#180;','micro' => '&#181;','para' => '&#182;','middot' => '&#183;','cedil' => '&#184;','sup1' => '&#185;','ordm' => '&#186;','raquo' => '&#187;','frac14' => '&#188;','frac12' => '&#189;','frac34' => '&#190;','iquest' => '&#191;','Agrave' => '&#192;','Aacute' => '&#193;','Acirc' => '&#194;','Atilde' => '&#195;','Auml' => '&#196;','Aring' => '&#197;','AElig' => '&#198;','Ccedil' => '&#199;','Egrave' => '&#200;','Eacute' => '&#201;','Ecirc' => '&#202;','Euml' => '&#203;','Igrave' => '&#204;','Iacute' => '&#205;','Icirc' => '&#206;','Iuml' => '&#207;','ETH' => '&#208;','Ntilde' => '&#209;','Ograve' => '&#210;','Oacute' => '&#211;','Ocirc' => '&#212;','Otilde' => '&#213;','Ouml' => '&#214;','times' => '&#215;','Oslash' => '&#216;','Ugrave' => '&#217;','Uacute' => '&#218;','Ucirc' => '&#219;','Uuml' => '&#220;','Yacute' => '&#221;','THORN' => '&#222;','szlig' => '&#223;','agrave' => '&#224;','aacute' => '&#225;','acirc' => '&#226;','atilde' => '&#227;','auml' => '&#228;','aring' => '&#229;','aelig' => '&#230;','ccedil' => '&#231;','egrave' => '&#232;','eacute' => '&#233;','ecirc' => '&#234;','euml' => '&#235;','igrave' => '&#236;','iacute' => '&#237;','icirc' => '&#238;','iuml' => '&#239;','eth' => '&#240;','ntilde' => '&#241;','ograve' => '&#242;','oacute' => '&#243;','ocirc' => '&#244;','otilde' => '&#245;','ouml' => '&#246;','divide' => '&#247;','oslash' => '&#248;','ugrave' => '&#249;','uacute' => '&#250;','ucirc' => '&#251;','uuml' => '&#252;','yacute' => '&#253;','thorn' => '&#254;','yuml' => '&#255;'                       );
  if (isset($table[$matches[1]])) return $table[$matches[1]];
  // else
  return $destroy ? '' : $matches[0];
}
function unicode_decode($str){
    return preg_replace("/[\\%]u([0-9A-F]{4})/ie", "iconv('utf-16', 'utf-8', hex2str(\"$1\"))", $str);
}
function hex2str($hex) {
    $r = '';
    for ($i = 0; $i < strlen($hex) - 1; $i += 2)
    $r .= chr(hexdec($hex[$i] . $hex[$i + 1]));
    return $r;
}
function decode_string($str){
    return unicode_decode(decode_entities_full($str, ENT_COMPAT, "utf-8"));
}
function break2newline($str){
    return preg_replace("/<\s*br\s*[\/]*>/i", "\r\n", $str);
}

Mustache_Autoloader::register();
$mustache = new Mustache_Engine;

$data = array();
foreach($_POST as $name => $value) {
	// Copy POST to data array and convert array values to strings
	$data[$name] = is_array($value) ? implode(", ",$value) : $value;
}

if(isset($data["jwtemplate"])) {
	// Render template and strip comments, also remove all white space at begining of lines
	$template = preg_replace('/<!--(.*?)-->/','',preg_replace('/^ +/m','',urldecode($data["jwtemplate"])));
	$body = $mustache->render($template, $data);
	$body = decode_string($body);
}
else {
	$body = "";
	foreach($data as $name => $value) {
		$body .= "$name : $value <br>";
	}
}

$fromName     = $mustache->render(decode_string('{{Name}}'), $data);
$fromAddress  = $mustache->render('{{Email}}', $data);

$replyName    = $mustache->render(decode_string('Joe Schmoe'), $data);
$replyAddress = $mustache->render('joe@server.com', $data);

$toName       = $mustache->render(decode_string('Judy'), $data);
$toAddress    = $mustache->render('judy@irreverentmind.com', $data);

$toName2      = $mustache->render(decode_string('Joe Schmoe'), $data);
$toAddress2   = $mustache->render('you@domain.com', $data);

$subject      = $mustache->render(decode_string('Message from {{name}}'), $data);
$replyTo      = 0;
$secondTo     = 0;
$secondBCC	  = 0;

// Create a new PHPMailer instance with Exceptions enabled
$mail = new PHPMailer(true);

// Normalize body line breaks
$body     = $mail->normalizeBreaks($body);
$bodyText = strip_tags(break2newline($body));

try {
	if (false) {
		$mail->isSMTP();
		$mail->SMTPAuth   = true;
		$mail->Host       = 'smtp.example.com';
		$mail->Username   = 'user@example.com';
		$mail->Password   = 'secret';
		$mail->SMTPSecure = 'tls';
		$mail->Port       = 587;
	}
	$mail->CharSet = "UTF-8";
	//Set who the message is to be sent from
	$mail->setFrom($fromAddress,$fromName);
	//Set an alternative reply-to address
	if ($replyTo) { $mail->addReplyTo($replyAddress,$replyName); }
	//Set who the message is to be sent to
	$mail->addAddress($toAddress,$toName);
	//Add second address if desired & bcc if set
	if ($secondTo) {
		if ($secondBCC) {
			$mail->AddBCC($toAddress2,$toName2);
		}
		else {
			$mail->addAddress($toAddress2,$toName2);
		}
	}
	//Set the subject line
	$mail->Subject = $subject;
	//Replace the plain text body with one created manually
	$mail->Body = $body;
	$mail->AltBody = $bodyText;

	//send the message, check for errors
	$mail->Send();
	return_success("Mail Sent!");
}
catch (phpmailerException $e) {
	$exception = $e->errorMessage();
	// Fallback to mail()
	if (mail($toAddress,$subject,$bodyText)) {
		return_success("Mail Sent Old School! PHPMailer error occurred: ".$exception);
	}
	return_error('Mailer Error: '.$exception);
} catch (Exception $e) {
	return_error('System Error: '.$e->getMessage());
}

?>
