<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAACgAAAAnJE6VV8BXmeF/RdrCAygA//nuRb8bugs15NgMBNOzKBj7RIvbg8PTIsQROBs2DKhRLFihSch91zfGiZh0qTbdJ25+QrzhQV6FhZmeO8D+ld2ekO3dJgR7ftVwkYZrTIOdmA6yQ+3KAPuCLYFIIKIgJZIohgZtyqucE7RO1mTOc/3ZnPaOExYT2jH1ewYER2crh0307+2it2adwrZnNHugDUAAACQAAAAN4CLpc2NeCrnht0hPZHmd85kvcLSNF7rgc7vKbjinV1qYhrL9yXblhTwzv4KBEa/f0fYkp/P6odmhMnY5NsIIK2++5jc+Tfsb+ow572F5awnlFO6ZMdJHqjULrT/esP1qc8FGPQy5IqUNEJnhqKP2G0jR8E355kM/FeMOTEfWmKKbOAW8stMEzy0zOwbVT4/NgAAAKAAAABElPAGIn7BgJPT0HkPKYPQYkECuLW0p20vhgnBbhhIFXn7uyPwkcsOHSWW24eZ8zZA0/Ec6Oby4XHwDGCl/timvdM/MFAsEmwv7DHdSqZlxbkjlFbwfmM/ox0U/lQpkeSHUTO8dmAeZU3yYBLhL7LfwaOCXzsMf2inIxJ/4PSEYlyC63vXOHIF3VcsgJSKkXdgPc5wS+TMteOrn1+oMBiVNwAAAKAAAACDwJBJ8zgbLt1gNfwiMm2lHdkYiOo8mOYAL3TdrF5xnNrokobPay6z5xclHlkC12RrDsL68Fivj0BuJk1YHUQASfC5zbgOoAjOP0mY/iZTXwdKTP//dZdfBcb9YeVG94opJs9a/aCsomFckuZskTRZR5OAhePATe+hWzshJcqXLqfdwfrTf3Yb66Or28HtzCwn5d0S5phGmGoU5BgEq21zOAAAAKgAAAA5M6CFREgxdspMJewT1lc7IZIlzW1Fq7vMTGtVA7fAbD297XxgdYfXGthC8DCGuPLABVYSXU/vn+IvyZ3pPyVemx6aaVTHPcOeDJuRundW9fg2RxdtU8DaF+f9seM2kg5uOD/55mDe9fT/uJYuoqGnz7movahgav66pxHNWqA1ztWj8MxnrKfSjBCQdADaLjDO+kMVd3gGfD9qWlRXH1j0+38rz4Xt2KwAAAAA');
