<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('EEFA32DF8D68410AAAQAAAAWAAAABIgAAACABAAAAAAAAAD/hBGx++ivCwG+aENHC1rf0TtMPJ1onkyTnRlJ2ahww7P1zfInTtH0rIMTzjqYJvq2KnUXZM97vVrqHLWD2Rl3OOXMKntyBStwXJFqlBVwX+05LTkX1rCAbKq95rOydyAi1Zb/TBm1ScDDHSWY9EK1jLg9kkAJcXGN/CgLMFOAuRQY7axNH63fszQAAAAAAQAA4bvQg/m4bxqPbM2gh5IzyI48xOLwG4pPQCw1ZsD4dCvl5X96H39ul6JqjFdQh0QlAk+zwCeg/+U0MsmeR+ZqedmptS11DSrbPRP4K6M2x/yJ2ZKTppW+uZg5G99006/S2Al9MO8aSQLIwQEQGi80grHVCFFYiLHZwGZd//KwvQmduuiYqKcx1UVk0u+W1uszwjQ7WwyqCr5sLQpUhzopnNssYw5uvS4hbDgrxFMiKWEZQzeXraXT9xuewtDp/VhTWPDNKzjd4jGgJXH1JClzx5O/Zu4mtl6t1J6o8cXmGoZyMcWtdjZjxmns+rwQ7LZsGzOaylBOzqMayzE28IzFdzUAAADwAAAAMPAM/qgJfSZRL9cAjjyKoA4N1V5sNjnOmMYulqK+8OpxZaMVyVfynZSAehe0//jaM6YdsLdajs8GYExSb0npL6h3SKREojQnjgtX7QJHIX/5FGQS5pnrx50GGZUMIFt/8Afu/ywO2MhUZxtDul4w0j+JrRB94qi+GUIgL8FyJ5j/R5+rUqRI2Mw597c57dfUyUL/cNmrUOLnztCvdGCZhkNz35X79OjB3B56g8mFrXkXnK6BIm+pos+oipXF18ekxMOGA4k5oW/smsUnaXDHb79bKMTeka2L1jelg0DyK7HinrsEqteJurqCYzv4pDh3NgAAAAgBAAAgdYDNtAO48itu5wKex5lS3lEC3Kl3JrneVx9blgyPwuEBvkzzPbyQDahz1ALcVHxmkXLWELlReG7whkpDJcoj0uyWMGEYsYS6P0smwnV1Qhcj9pSJPbgrnHHZ+uz0/+IJuleMx1ZBx/QEBAxZAGP4vuUF8gufBz6BYEtBV/y3XYYTtgPox7TFat4qA08QgueWcqIhzz4ZpOANT1fCcJZQcys6GIoCSzoAwA0R5h+pA0ncb798+UYw4FBA6iiMTe3qGkZRPGPS6fjqgamqOtifgIcpG+voABLgXWS/jB0ta3SsdJXN2rOFn27MFKR0SFsPbBcfQ9t0Z6qKIi9DJfFK0HV3zeTaUME3AAAAGAEAAI+rY8ETb17uEE6R0uuasxtvTHmjH2lif2RfZChwWbmdGnI0sUBbZL0wFB4bNidi8macpMu7iOeZhmnrW0urdiNFiKpVnnxDP97XklbSOj6KMNjwMdozJpnZWDOYQysnSn+cx5X1d2HnWjuR8bKgNyqgChfcuUcu8dH65t5k+V8dzMFC8xt+OzBlneY9MSpuJjdgiKCTNMSPGeMZcYmiWrq0YjIBA+UzbH/dBekXCoOLD1lSzwWdhkEsXKPjHMGq/7QU1tA5Qb+AxcfB09mlVV03P6Qh/ahei99/OxzC2uIqn0hV+f/cRypU2KTMSSPx7ZmWJVXgWKZKZc7ZSzip2wlahVQnYdE46Hm4Oaw2KeYYNTXvIwGgHYc4AAAAEAEAAItHWQjTDwghk+WIp8JzwxXBIBPnaKVfrj7blNG2t/2oIa9+VqSs6sXt+J7H8IVT+PEhGuvRmDFtqfagN5eULDbTCcal8djITRgw6HaCyFaPVk3YMFK3tFb+BxW+6qicLaAt4xj50lCrQjAH1phBrAO/m6vyO1RINKBnnV9T2CHBu8b3Mbg/KR/DqcK5ILPF72qqtX8+Bo/HnncD20ad/Xl9JVcLQ507XGbkOdbChdvRNyHKz8zgJFmjhW6xzrF+YZxObGP2dqqVuHG0D84RTll43UOVPGNBNK1ZVF822kI8USN6oUf088svRWLhkdSgNiW/tyTl4qnM+mM9DLQOh0kQjREVzmauRnviQSPVuR/4AAAAAA==');
