<?php
ob_start('ob_gzhandler');
$array = explode('.', $_SERVER['HTTP_HOST']);
if($array[0] != 'www')
{
        $_SERVER['HTTP_HOST'] = 'www.'.$_SERVER['HTTP_HOST'];
}
if(!isset($_GET['lang']))
{
	$_GET['lang'] = '';
}
echo file_get_contents('https://www.proisp.no/parkert.php?domene='.$_SERVER['HTTP_HOST'].'&ip='.$_SERVER['REMOTE_ADDR'].'&lang='.$_GET['lang']);
ob_end_flush();
?>
