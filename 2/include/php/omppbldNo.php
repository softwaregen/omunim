<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAACYAAAAZosJfbUuVYYSHYldDQrs9N5MfBJb1T7cKOu4Q63kpVFnKQygX973Va2OCUPDdwzXZdTl0cfmPAIgBKzA7l9Hqlh/FSdjQdA8AMosh6Opcw3SooPd4v3sTCnQriRT8gpT2eNAUhANVF/GKgwHlLR9KyE3sy8IRXXJInxtyMprm7Vg0GrOlVocmRcvE5c4rSykYWQYKFQwf4w1AAAAkAAAADFvgavegzmlzUhfAHEd8wsOPA44gPuHUJ496AbIEU6sWzH6R7Yj5ttRGfk4Q5OBkDoc6ubTTEZ1yOp/GCsEIOfgd9onuDYabj89dDSj4W3BvlXiyLPkIpKvdpJNDU1LhRMlaj6FSK5oCUcVnF3Dy6fSsZwYxevEkiBgSlqCKpWFbYujQuQEb6Yo30LS8krE+DYAAACYAAAA/De7TI87e90gtxoh0ihw0MCdEouttVNi9mvnyj86ZyWAf0WjxAx8e1KZgU+yMnyewJPzAqhlBCA2m9wQIMs8aEVljIJ30wbu3RJmjoWHqa2ihSdbL2/ViUKxiCBCYRj3oWcZxkCiELRfDkR/p8+syHbDIVxHCH3IEZw7pC4XXiPC764//CDhVv1Ou+lxbo7KUqpWf59/Ef83AAAAoAAAAIe48tBC/Ng2mYvhZvhk54x0TrT8SZWjbzC1BJXV1UC1X7valjhwkHjVcqlRlsWGIudvbaijuKssqu9PLhNf3f8BSPEZvriZeAIcArjdi2imwJLT/BfWU8tvhO+CAtEVgi7nVbHRkaKb0+6SYMqlrcN8J0hiWQLfg1pLoyXLJTdI0s69BzIalJfp/o67z3ycunmSpRXOFJiJ7TaAX9lIDBc4AAAAqAAAAKAJKPZc4ZdQ2tVi7snMX90yEmH3YLpjyZ5CXrH2nRObybOO/MbKGmd14x1Gx43tErpLKQHslkHWmXrTxGM6xIAfFw43MuB8j5YcfPfJqzrC7iLZaPUlqvv34ZNZMSxXZLT3abMjwiA9tmpWvtkbJtOHCF4/ipEzsZOdBiWswoF41s+aIIGFGs/fI9VxQmqVW81m+Hex98oMGYpKfxyFgFSSv/qI4D1RzQAAAAA=');
