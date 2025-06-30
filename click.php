<html><head><meta name="viewport" content="width=device-width"><link href="https://fonts.googleapis.com/css?family=Allura|Rancho|Mr+Dafoe|Nothing+You+Could+Do|Oleo+Script|Pinyon+Script|Yatra+One" rel="stylesheet"><link href="styles.css" rel="stylesheet"><title>TASK BYPASS||TD TRICKS</title></head><body style='background-color: #f8f8ff;font-family: Oleo Script;'>

</style></head>
<center><div class='error'></head><center><a href='https://t.me/TD_Tricks'><font color='red'>JOIN TELEGRAM FOR MORE SCRIPTS</font></a></center></form></div></form></div>
<html><head><meta name="viewport" content="width=device-width">
<?php

error_reporting(0);




$hostt= $_REQUEST['hostt'];
$ad= $_REQUEST['ad'];
$user= $_REQUEST['user'];

{
	$url1="https://microsecure.website/$hostt/api/cliemicred_itAdd/";

$data1="user_id=$user=&clicred_itCS=1&clicred_itWS=1&clicred_itNm=Task1";
-
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
		$user=$json['content']['id'];
	$ref=$json['content']['username'];
	$reff=$json['content']['parent_id'];
	
	$sts=$json['status'];

	$msg=$json['message'];	

	$stss=$json['successClick'];

	$stsss=$json['totalClick'];

echo "<fieldset><div><font color='red' size='3'>$msg</font></div></fieldset>";

echo "<fieldset><div><font color='green' size='3'>total  Click $stsss <br> success  Click $stss</font></div></fieldset>";

if($stsss == $stss)
  {
  echo "<center><font color='red' size ='4'>
 
  press back task completed<br>
  Thank you....</font></center>
  ";


  }
else {
	echo "<meta http-equiv='refresh' content=4;' />";
	
}
  }




?>

</div>
<div class="success">Next task in <span id="krissh">4</span> seconds</div><script type="text/javascript"> window.onload = function(){ (function(){ var counter = 4; setInterval(function() { counter--; if (counter >= 0) { span = document.getElementById("krissh"); span.innerHTML = counter; } if (counter === 0) { clearInterval(counter); } }, 1000); })(); } </script>
<center><div class='error'></head><center><a href='https://t.me/TD_Tricks'><font color='red'>JOIN TELEGRAM FOR MORE SCRIPTS</font></a></center></form></div></form></div>
<html><head><meta name="viewport" content="width=device-width">

</div>