<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAAB4AAAACjYheuFuP9Y0ntFPTh8nGNQptWirYey5XusszfH9ZNNf+gMm16wutXvwtsl+0j2mM5a3sai9BoF9xgXNJ8YtKE+HjB4TwV7JY86vU4gDN3yBLLrHZpAS6NGjFTXzUR7UwhRC0216YQvf6U77Cu5ey27zZPaMoY6tNQAAAGgAAAC3c5EzmfKjiqUShVt8wDJ6vaAWKDevqYoo42UL4pCgLT9KlItKlkljpSFVcCkIei0oUtIW39kZ6NaUVqpDvCB5EzI2xtEGGcBOhOq3Ch306TP/kMN+AOBKbCOQKOBtBtBd+H7ugr0dJDYAAAB4AAAAVCI/GSKufiJz7LhMt8rXW2gXy/X7l1FxQXf721pEQ3fn3y35v31FzysSQXdBPbJMcDlZJyZN1GoyZsKDst/24hFqDhrPSCVwT4YNNqhXEDQ3sxCjQdO1SdUZBBr97te6/QYPWiQZK+jyMDsOglqucI98wO9Lax+eNwAAAHgAAACq7daqvmrSY/alZfsuyPxa2C4rqZ73NTJaYxPuUR7pDEmrSTpPSkzk3vtBPAc5igOArm/ozFYq0WJ06ffC0E4o6Ms1kLtd6T8a3vNld1JoLoczvkzDb+N4Okm8MKghXSi9kkebT2axILfR4gkSAKIA4yPOIPnMUCs4AAAAgAAAALbP1eEf9rHcyz2d0KS3I/rXh3SH67sJbqxvX/Ba73WBvzMuLVPFVM812ICG7WwNF84Y4tG+7i9Sn/s4+dPA6XbYlBNUyRjQWkfEwQfnFhs6H1p4kwCE0bS2CoXBFJ3YqFyvqm+43h9Q++eiA42g2En9BAk0H9vEO7jF3zdwj43vAAAAAA==');
