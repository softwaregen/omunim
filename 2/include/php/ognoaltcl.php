<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('990C60248D68297EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/eE07XZyUf9P8O524Jw6SLBtqq1Q9rND0gJjYslSrfx+aLOJj+vehC565oZ1Ej1qUr+P1iWXtHA5mcnxjy8UWRCoY3Qt2Tr6ATERYV5wYwDwIIIBHhc18+OOGTjt0mwGmQW2wobuwRWny8QNgeGAJ0+dluhO9Pm6NahTVprwDBlUhymamGO0QBDQAAABwAAAAJ5E16UKjVHwDCu4/w0+7z6JkFw8/eoLPv8lKq7O0VStpzPOAVJ1TlhKUAIDpeqrZIDeHvyUF6wrCJpfPBpNeAOQWO5bNiRvxdiX37TCwcoFphezr26lFDjee41X0SirUe0Z48KFDemDO7Hfye0YEODUAAABoAAAAfMZVVTOB1y7qoxPhMjESKPPUXX9AsZWJPd9D7224q8souBlFSToKkAdbfw7Ox0iTjcguuJfms9+/XK77apT+bSWmhH6f2O/yBL+OUh+Gm2yCDw4ksOlthzS6nkqMrBi/r/yR1F0lOD42AAAAeAAAAMyv3yRix4L/L3aOEA3oXBXiexswW1Td7+A4+sZCKGfKDW3eC28g9pFWTYLgIY3gy+ecmiQKLZXuH+QeT98f3YVAYhi5gFGxI+C4GAjbpgCjFQHyI8Lswy8ebrHaKyw3xyb6RSyLobJEfoZUjN6dxXuonLiktaJ7DTcAAACAAAAACSkM+i59CncQxkw6bzEI6lurouM3aNhhE9KyyVHPj9PIxDac/uW/N69nPBoq2e5OduDG9p25naktdVzrHZKobwcaAnKJvk4F+zRpibsRRbKowwvqHJrealqIvihk4bzOvQTjPdiI/HAV25I2iBFh9ps95KxztFtveUQ6pTf3CBQ4AAAAeAAAAN7cXdmF5cvRNLhSodPtuzHblM7aaXQnQq4wRE61UQV4BsSkRWKgoLYEt4bqno5w/VSdiQc1v+h368QJwc01eLkM9qRCVaSoIkzaZFOzcIs7m3eVzasUvKKq2jqOE1sj3DchfSk1CCvGP9nxq5Hk2v3H/IlVnig9owAAAAA=');
