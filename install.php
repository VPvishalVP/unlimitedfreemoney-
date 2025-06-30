<html><head><meta name="viewport" content="width=device-width"><link href="https://fonts.googleapis.com/css?family=Allura|Rancho|Mr+Dafoe|Nothing+You+Could+Do|Oleo+Script|Pinyon+Script|Yatra+One" rel="stylesheet"><link href="styles.css" rel="stylesheet"><title>TASK BYPASS||td TRICKS</title></head><body style='background-color: #f8f8ff;font-family: Oleo Script;'>

</style></head>
<center><div class='error'></head><center><a href='https://t.me/TD_Tricks'><font color='red'>JOIN TELEGRAM FOR MORE SCRIPTS</font></a></center></form></div></form></div>
<html><head><meta name="viewport" content="width=device-width">
<?php

error_reporting(0);

$n = array('com.myntra.android','club.fromfactory','in.amazon.mShop.android.shopping','com.shopping.limeroad','com.shopclues','com.zzkko','com.voonik.android','com.craftsvilla.app','com.fsn.nykaa','com.ril.ajio','com.romwe','com.yepme','com.manash.purplle');
$fname = $n[mt_rand(0,count($n))];	
$hostt= $_REQUEST['hostt'];
$hosttt= $_REQUEST['hosttt'];
$ad= $_REQUEST['ad'];
$pkg= $_REQUEST['pkg'];
$user= $_REQUEST['user'];

$url1="https://omtechnoweb.com/apps/$hostt/api/saveInstallData/";
$data1="user_id=$user&install_status=1&package_name=$fname&name=Task$ad";
	$headers[]="Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
$headers[]='User-Agent: Dalvik/2.1.0 (Linux; U; Android 6.0.1; vivo 1610 Build/MMB29M)';
$headers[]='Host: omtechnoweb.com';
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

	$stss=$json['successInstall'];

	$stsss=$json['totalInstall'];
echo "<fieldset><div><font color='red' size='3'>$msg</font></div></fieldset>";

echo "<fieldset><div><font color='green' size='3'>totalInstall $stsss <br> successInstall $stss</font></div></fieldset>";


if($stsss == $stss)
  {
  echo "<center><font color='red' size ='4'>
  <br/>

  press back task completed<br>
  Thank you [t d TRICKS]</font></center>
  ";

  }
else {
	echo "<meta http-equiv='refresh' content=4;' />";
	
}



?>