<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAAAQAQAAszlvRNjGv2eFJ8enB2IxUkQ83SFUWeltzlTqothoiTsALR9ts/dZLj8bmanrZ+XJCITOlFnqzT2xYUfi77/wmExW9sH3lGOb/bLjuUDPaAWGrVjLpzyHhbpYgSi+jdUMzYhgqBHlWMQm43VCKxdCXzAVWGwDeomsBNZfxxGGRAC3mPM77s3SX3NadzNWvZ+eNSFliAd6eu2/Q0wYbUBJa1lppFVgIEvZxN1UFPfGSwT1Gdin6XveDREsDHtkhl+lPeb3R+fcYTha1t5uPXDHqDVorGr5VChfD4q+VW33Xb071Zb6DqMnd2XQ2jv8zNyWb9k7QQNAcedrg4t7Z1sZUV24ORgcM2jVCD1Q3TW/SEw1AAAA+AAAABwMWwx6YhgGKjQ9PuY2N7l7+EfgfCje4/wSikCgz89Kr4b3y+FXzDEoUBTk6N08yjc5pijnRsVaWKd9bZ7zDOWzUoLk3C5O17ZNZut1kFabINWJxKmrCjs1CPVgS8iDD06iaxJqaHXFhyMNQRP1OY9OOlvMsS33yS9H2hsGTQdXb6lDpiQc07/VmQg2K04P4IQ86NZy3/9Ipaoq2DOD/2FpVVNaNJINY7r9JtirC1Eku+TRa1wVUcC6dT4pq5VZmCnKPkuBqusa8YQHdY0IR5oCDXFjjrkzsmsJuz+CoqVfTiLk4iK/nRpETwDxFSnkDngutbVhwsOdNgAAAAgBAABK33A6Wtq760Zf+TFalRca+KH5/kHG1sdDiz3MDb+fYIWKmkIGEArEZLGnzSfF2JKKWDonO07uCrMS7vsgzrMDtbWWgMxHnRYXazy0AqII0HxulUP3+J2qxEu+9DK6Ffaa5ZAWcBHzQNl6rpDJS1JCu622LaM6Ly6CroxAoATuZ9EwzFrUhkgkZs76RAeuWgdoiH8IqUPa77K2FzsfFvFGZa4BoQJs8gMlaGszzbfcMCSqFeMGpBi4mm/Gnrgf9ux1qQ2qOYf4RsN3lL6m9C+WMDgXmIT4zBI7rxRD6EC2oqs6CIKvSf6V5ksPS1LUhli0ztczT/PC2oknux+3wcQFZFu8Ds3HBlI3AAAAGAEAAMvPStRu316CpkHE7lU3W6O/Lb9kNO+8c63FOHaCLVCLEwSBnwsDZxa0SWywZ6QVP0G6EYd6CxVcKLO2I1j8B4PrAoHQbSd9FRj/J3SIDeZUO6bQec7QNEe9PP91Bkfi35Dep3toUKYq5+n26IQVkj2bEWMirvcNkGOE2lRlt23mxbMiE46wdkkR+XW4jIOmGbSQnUTuLFA0Q+Ophu4rf0pFSde7/yYTPNG5tEYcE54FJFNvEhNnhmIKIqJiciCnVLG0HjA1Pl/tq4ncyA6vjVOqEGyE+moGyAKk7AUeBzArE1iGaXIekNvcUnS/IT+0URUsLm2f+3EN3sfIecUzOZ7ojlN6gfj1QWON/y1bjjjkDDHarL/4Y9M4AAAAKAEAAKV2QqwrNo1yOr9zkLQI9LPdq+/AxBenCRg4lqMGJWMt3jR/0IDm2t1ddkQuLh7Q87qAc8LeQziZ5EzO4OYJyOhA5nRxb+Vz+t35dgDtKNw4cHviucRSSPY+CGMPiAxImDtg6fRrjezbYdHobR7PtQiiLxQiwaNHSpVy9UWhccdzMLlhIfJmj8duxnfuktLpvNE/qHw4JzoDHJ1J35Y5544MFUxxp4Zf1uOBTebSgss+RPbhkwPZUB8N4uRldIh2N9yvM5cF4xD3x6gofy9hJktjK6Il7NXN6tUfVB2iIBGPjHHPgVw4fQ8mynDwBriITpzNEFxTPeGyS4/KH9RajMg1S59eaWmlbk0au4N6TUAlwg2yCDNp6dHBRbT08wEowNQszMFcaXvLAAAAAA==');
