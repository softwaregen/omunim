<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAAAAAQAApfORx9wdeg+hoCLA+f2hkQq1NElPtN8l+Nli56YifwvdO0W+IqsQAygYCtXIBHpZR9xYNQmGhhDKkXaoLEUkIHybGdOImozzbHng17asfYi59CL6dxisRKeqepBInS5XoBz9diNrB3f0ep9jcTR8hxexGckdqH+yNtQCQPoXJYHCCjciskPpK7czuqnZnVJiL8EIqsb5tRLizeOlKNGaGyhV7oRKbwPeFaZviKxRgaK/IPxUyw1U4Rp2qaanRk5ucQf2j0fenNUzoPz6dsHey0GvNZZNGpJkv8C7+14GDh6OTCVMg1Vg0E8DDeYuxvaOcq5X8B+vFUEE/lSrKY1pKTUAAADwAAAAXyBNkcBHcKRXfr5LepUBq3wRpFOexMfE07lEaOObfIIdUMJkpuWVFcnYBwDfoErx71nVZgyEqwrfRBljl6qiREzu4KY9FByZUTM3NfNRFsglIKicw1Xk119In33UqZvOYPrZA63g8PckNrr/DAfmcMXFkgI+PIirXTt1mWaCD1fxJlmz48M9C/MAqGGWYluEinZ/mUDLYqtfC9ZO8uSNWbsP5SFnw8XuixIy3H9FjEj66di9SHukxiIZul3dcu4Uy7/zaBnj5LimO8oxZeArOHHM2K0Um76ceJu9UbTj3sL9LmpTlGIXBJCyMtfMfyL6NgAAAAABAAAzh3o/8ufxwrHJZDzW4N5ap4wzkiJL3cGOcwD8McsTTj2dv5EPyhCN2AcyvDFxfFvq+gybxI1fEEBvp460FEGVouJU1sfuKXgde0Ct6FCSD1RGr5zvPEoMY+AVQF7TVdw4C9Iw67t9doR+pkaaUUI8jOi/Y9RJKcuh4cwwJykl6RYUrXSu2+OiWkZZFW+tWtRdnYjXPUaiAsxYCoScrV3d7htnNSD36yu7uJPkp3qWzlw2At4L3dMjwoguzxlJaHr1bdavvT1RrVFgxlu/+iLEsQp7UHrChmMgBLJ+k/l3Ufvg1O07RkQ4IkbaW+GKF4fd47uRxsXMs7VQW8Lfkul2NwAAAAABAABC//Vodg5K2H9e9Z9Ake0upqXYW3sokfPDGhe10yQqBOtrhlf0F2Rku5M4Lp9ieTja/2O/sYSXbWWZmW6dEYrzHkptzpWuaivqy6/DyfmGthWIvOVIVHBXrNKs7gdCYfkJsfIbMMd9MBkOnOmhqU8TgcUTu1SS/Z/nJxIS5oetY7D1JOIxFgTzJb07pJ1p2e7pdKEC35remWrpS9hNhhRq3Si2Rkt+fPjsT7u9n/GT9armjJboS1F4J/p/FNnuw5WKHJ5arMkEgiCPVVOK+fg+fQwO8ENSjPwgNPvcKN6I5WElXdzZTLfJ9jjQCRa2wZwpunDXdlvLXHE5a17IodBnOAAAABABAAA/Zo4iFBZa7h6EHoSWZqbt5CJ/AC72pwqfmB+rAB1S2WpTDQCC/CITVifl+81hATQmiIFbcU/x3QFV9wz4v5jG81YUmsgu4n7vuZRbh4ANCRZ5grHkIVPLYLCfjZKDCOHa6+2xWpwuEsHC8rNVsAAvz+c9jnoH5tHEq5NPbrutBY+ES7Da9lYBzM+Zi801S+WYGf2jq+oCtMwapVvM/jPc2XThfhxD+14BNYMkEcWN6vNOaVjzrW8BPeZcj68ly+PJgdflnnsnoyhd2dwcLTM4esZJLgcG4wQSAhB2Y/z0Q1ovmdr3RkLkKVCSCvFqOeqCc2z9lOFywGN4GH4yqV9gotU6RMulLtaAQ5bnfxNGvQAAAAA=');
