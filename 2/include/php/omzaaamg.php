<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('EEFA32DF8D68410AAAQAAAAWAAAABIgAAACABAAAAAAAAAD/hBGx++ivCwG+aENHC1rf0TtMPJ1onkyTnRlJ2ahww7P1zfInTtH0rIMTzjqYJvq2KnUXZM97vVrqHLWD2Rl3OOXMKntyBStwXJFqlBVwX+05LTkX1rCAbKq95rOydyAi1Zb/TBm1ScDDHSWY9EK1jLg9kkAJcXGN/CgLMFOAuRQY7axNH63fszQAAADoAAAAmf/IF8GZScXehDj6+vFcb+eoMJw7+evD7i5aJLwpwdeKDyiJtQY3l6orkNNTWVzqevSwnPsfllS4Q+gPiGSfJC3KbJj/1J5UlTz9Nl85IJxOsheMVQIdYzHaIuzWSvzGKOO6V4rOc1O/QKdpzZ9TfGRytp6Y8828eACk/muvd8uzcVffI1hmUKHG3DYY/qaTS4GpE61Rpn/+eh0hON7FW22aDZybvzkrv4KxtroCuwi1CesCbi2Vas4lh95e9LwFruHm4Kwzn0uD+5oNy/HGc+ODgRT7p+E+ltbCIpOwvV6lTO3Wgm325DUAAADwAAAA4GmJBygzktvojSiwifiInhE+KX10RmVa1s0dSoZhS/06DJTBOPXziKAG3bieoOffToyoVkjiw4kzdRb1oNfyOku9h2VXNSu9VjO7Mr1QYRZyQpnKZaavQwq8r8W08UNP4JIwKf43BUdkjXSC/7wnIeJex+OBrmE3vxJQkjmVhrwQhM4VunU/2lqzWPbv/R66Cev86HTtOlMHVI93AIpzw37V4koegV+BqPyOJghx2ndkZxs91bhAHqpXNzucexBLXW0yGPbBTDzJM+sqHmlFT2ZrDuyoM6Ydsf5CzHWZRl2I1bF7ooOy+B4KB70Zl9R7NgAAAAABAABSsi4bLPGrIvotiS44wBWMos9sXJYG2zQ1mEryJ/v02xAnwWfBlEF99WTva/vypdn6O096c62+W25DrK2HdAJMwPXXOwBfd2hxOJeI8ZD+cw3qLyjXt4QmWgD98ink2H37tT+qhoRW1qK+tTg5Y1Mxu7lRzKdiXAdbDz67N6ASjfcpNjBZ/5BBOgrs55+q/Ph9LTDf/Z08pMrM+wf6Ija1UBkc2vRX5XVkG+SoS+oCmBC/pR+grPDe+is35GeOsN8c4f7KUZ8qXJifPPB0FWFhbyAw1R5SY/xpCSOhmf1Jdj+JaZIXwdYG6xLWX61vm9WVVYfIdOILjlZyJ/ZMyMz8NwAAAAgBAAA5qQMWUzxHMA35Kap//flcy1i9rhbrL1jhdY2b4mOEyPTwRWYQudgYtJF1/EyEM4STdQVDO4szL0V+ZZWRRtFnYBk8FaC9q+YFnvGOHkFdJP90prK1Ru01RKQ793AyoJ6jtOUX3eMtbBELvWE4N9iAFjnzo1DbfTpjmB+3zGVpWTaivgWsjBZC4ltaARcSCaAvLblDyOouK6f5kOlhsWKajsJbtcj2F3hGX01GHUw9jbQFUikMvxAYldwrQniREB/s01BgzwI7m/JNmuhtBzIhkiBnk+BG8PgNB8/jLazAh+rSQZ5kAWft2tDrDhWIQQFfFvvSktLhkk3XCSOQRQdGwnAOFUSzRoo4AAAACAEAABzsimQzgsqCe6qP3QgdtEsjYOlGmd1nRj0ckykXRSsdXmK4IZVIbtdEQh5fQmxnwilXayN1odCF3L8BZdeKyanNcfmnQ8wchs9fbjrGQOQoajZMrlYS6imMWQ0vr4eNAlBFCVOeaVJEht/5G2dcXiyhT70VPLW7T7QZwtre3XcqzzWm5z9uc+1kbNOYIieiYuW9nU2IeCOxvfHCmC3+UQZ3f+2FoBByJ6+FdeX1U5zeShB2bi6ojn+Px2R3nDnWp+MxoqIytVbdibRPgSBlf1pic52gLBkDhqG8WyqtRwXsDiQTvpOx8P7Lt5K6Pv1zFu2Etj9R8Y/9/bF1UIighG3XTD92QuPw2AAAAAA=');
