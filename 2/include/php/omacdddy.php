<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAABwAAAA/meT2260RfPT5beYbqEahiNkcqurgprTq3C5Sh5MdWXLc0n3yBiCmxrg8paN2BzvmKzn9LEXMtQAPizN14qTSisJtPGCf6O7/nj/76VnlEF0dNKBmrQZq/4wAzWB7LGlEvc43lrFU4VMZcJlemWcjDUAAABoAAAA1+8+/u10vMZOr3gJpeqPOkTGXFWUyCGVjoVdn8nX90/NDYJYCw8L6lDNAJmmZGhxdfjFq6pGQIJ0RmQgOiNzU/yydvd3wexyb/cMzEM5oTyiFs6gNPTEl1tHGDkkl+/CHbFAnQuFHu82AAAAeAAAAGVfWbi15hwTKxdlftwFPg2BKf8RP9qAkDsI1e+Yc0ymtP14c7U3jY7xTgOV0jVic3bS05fLK837vs1uNwiT3mU1Y4tLvMoZhOEss3c04inJ/fDdvKgU5reKvWYsO12247MiEM6Wf0/oxWR7sUKHd8XU7XiwNzECHjcAAAB4AAAAqu3Wqr5q0mP2pWX7Lsj8WtguK6me9zUyWmMT7lEe6QxJq0k6T0pM5N77QTwHOYoDgK5v6MxWKtFidOn3wtBOKOjLNZC7Xek/Gt7zZXdSaC6HM75Mw2/jeDpJvDCoIV0ovZJHm09msSC30eIJEgCiAOMjziD5zFArOAAAAIAAAADkqUc3lWnKycRRJBXlvLqm0RGWa8GX0ouVREELtwzfHaegIwn/S0De57/m42bNBVobpwK1CqBw9tHDmOm0o8/ZPUQICVGaSdQ25Su8zvobElGnx4ff9rmzeywfTNYOIHXHdDpxmCFzfZoy8GlGV6OslgH1+3f5TGC5b+mnRktPowAAAAA=');
