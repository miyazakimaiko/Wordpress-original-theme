<?php
// json
header('Content-type: application/json');

date_default_timezone_set('Europe/Dublin');


$to = 'myzkmik19922@gmail.com';
$subject = 'From Contact Form';
$domain = 'miyazakimaiko.com';

$errflg =0;    // error
$dispmsg ='';  // Display message

$nameval = '';   
$mailval = '';
$textval = '';
$referrer = '';

if(isset($_POST['name-input'])){ $nameval = $_POST['name-input']; }
if(isset($_POST['email-input'])){ $mailval = $_POST['email-input']; }
if(isset($_POST['comments-input'])){ $textval = $_POST['comments-input']; }
if(isset($_POST['referrer'])){ $referrer = $_POST['referrer']; }

if(strpos($_SERVER['HTTP_REFERER'], $domain) === false){
  // Referrer check
  $dispmsg = '<p id="errmsg">Referer Check Error: it was not send by contact form.</p>';
  $errflg = 1;
}
else if($nameval == '' || $mailval == '' || $textval == ''){
  $dispmsg = '<p id="errmsg">All the forms have to be filled.</p>';
  $errflg = 1;
}
else if(!preg_match("/^[\.!#%&\-_0-9a-zA-Z\?\/\+]+\@[!#%&\-_0-9a-z]+(\.[!#%&\-_0-9a-z]+)+$/", $mailval) || count( explode('@',$mailval) ) !=2){
  $dispmsg .= '<p id="errmsg">Something wrong with the email adress.</p>';
  $errflg = 1;
}
else{
  $subject = "=?iso-2022-jp?B?".base64_encode(mb_convert_encoding($subject,'JIS','UTF-8'))."?=";
  $message= 'Name:'.$nameval."\n";
  $message.= $mailval."\n";
  $message.="\n――――――――――――――――――――――――――――――\n\n";
  $message.=$textval;
  $message.="\n\n――――――――――――――――――――――――――――――\n";
  $message.='Date：'.date( "Y/m/d (D) H:i:s", time() )."\n";
  $message.='Sender IP address:'.@$_SERVER["REMOTE_ADDR"]."\n";
  $message.='Sender host name:'.getHostByAddr(getenv('REMOTE_ADDR'))."\n";
  $message.='ReferrerURL：'.$referrer."\n";
  $message.='Contact form:'.@$_SERVER['HTTP_REFERER']."\n";
  $message= mb_convert_encoding($message,'JIS','UTF-8');
  $fromName = mb_encode_mimeheader(mb_convert_encoding($nameval,'JIS','UTF-8'));
  $header ='From: '.$fromName.'<wordpress@'.$domain.'>'."\n";
  $header.='Reply-To: '.$mailval."\n";
  $header.='Content-Type:text/plain;charset=iso-2022-jp\nX-Mailer: PHP/'.phpversion();
  
  $retmail = mail($to,$subject,$message,$header);

  if( $retmail ){
    $dispmsg ='<p class="success">Message was successfully sent.</p>';
    $dispmsg.='<blockquote><p>Name: '.hsc_utf8($nameval).'<br />';
    $dispmsg.= 'Email: '.hsc_utf8($mailval).'<br />';
    $dispmsg.= '<p>'.hsc_utf8($textval).'</p></blockquote>';
  }else{
    $dispmsg .= '<p id="errmsg">Sorry, could not send the message. Please try it again after refreshing the page.</p>';
    $errflg = 1;
  }
}

$result = array('errflg'=>$errflg, 'dispmsg'=>$dispmsg);
echo json_encode( $result );

function hsc_utf8($str) {
  return htmlspecialchars($str, ENT_QUOTES,'UTF-8');
}
?>