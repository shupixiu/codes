<?php
/**
*
*дһ�������������ܸ�Ч�ģ���һ����׼ url ��ȡ���ļ�����չ��
*����: http://www.sina.com.cn/abc/de/fg.php?id=1 ��Ҫȡ�� php �� .php 
*
*һ�����к�������
* 0.22501301765442
* 0.24201393127441
* 0.24301409721375
*/


$file="http://www.sina.com.cn/abc/de/fg.php?idddddd=1";

function test($url) {
   $w_param = pathinfo($url);
   $str = $w_param['extension'];
   list($type, $vars) = explode('?',$str);
   return $type;
}

 function getExt($url){
	 $arr = parse_url($url);
	 $file = basename($arr['path']);
	 $ext = explode(".",$file);
	 return $ext[1];
 }


 function getExt1($url) {
	   $url = basename($url);
	   $pos1 =strpos($url,".");
	   $pos2 =strpos($url,"?");
		if(strstr($url,"?")){
		  return substr($url,$pos1 + 1,$pos2 - $pos1 - 1);
	   } else {
		returnsubstr($url,$pos1);
	   }
 }

$begin=microtime(true);
for($i=0;$i<10000;$i++){
	test($file);
}
$end=microtime(true);
$time =$end-$begin;
echo $time."<br>";



$begin=microtime(true);
for($i=0;$i<10000;$i++){
	getExt($file);
}
$end=microtime(true);
$time =$end-$begin;
echo $time."<br>";




$begin=microtime(true);
for($i=0;$i<10000;$i++){
	getExt($file);
}
$end=microtime(true);
$time =$end-$begin;
echo $time."<br>";


exit;


