<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAABwAAAAaJ09my3avkIQucRXwssEtraDU4BIMB4v1Wp1wunqL0DTfnXld/PfZ592zscUKakfMUZ11jxrgf8wb+Ap5HNSHYojAnYoOY5Hfw31deAxhAEW0excuMGyih0Dp+usqjbJcEA7tdWa46+/CtmQN6oOCDUAAABoAAAAC9OmzMlCZ1czpQ0YDXD4ZfhJzeMPBVzsgzfDxt1Kfoz+yz5grw2RfAH97GeFzWZnnPDgyEyo9J9zB3amXZ4tcULOVTJlHkUVNNlBzrsg8egOAE4q0W4bE7M5XeAayCvR740wSnOkU6U2AAAAeAAAAGlA/cOjU+RFc2FqdAP2Qm022mWofZsJgTKj3LNTepHk28IPkJDiZsC+ru/bizl4dFIbNxd0PQ1GPTbt+JAoziVvMLzaslEKC2T8UhB6WAg1yYpFY2QRgbif7n/kCouHmf384QoJx5JuXbcQQjQPO6fekVh0vyzRYjcAAACAAAAADb3iKFMV3PMq2EDmV8LnJSUCLUOxtDOrEN62JO7I/Z4z0oPg2aZt0j89Rn9UKrTjiP6fxoLAkpLO/U4lBWjw7Xp8h5aiTFRM0r3IsYkWvBCR28OHbE0Y94x6hOFYVX+T+drAr7xY0OU4er42x1Pa5iYOmJJgNKUsay3PSi7eIV44AAAAgAAAADuL8RRXVvDcPUjovN1agCN6L5rVzqjlmrNsXyh2MI8y3d5zwEJedtym90Z0nSJRnL8Y770VK6DNRa2nPI8JNNqEDp8cJdTdpHPOV+gpZ2sXbE7f4OpS1cYo4NFYsI0djwCdTxPRWvYMYjty6IsGNExc6XggT58d1kOPFhvk9pzeAAAAAA==');
