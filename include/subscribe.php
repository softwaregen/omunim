<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('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');
