<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAAAIAgAAvlQZaJiRbIryhW8nYKZ23XFzS1WJG4hY8/f47H65WvqyaciHT17Czz8fspf3bVJ5faCLxbQMG6uyGt9hlagSKS3MTM3btnWHI/ABvZZo+rTm4BPaQTj9ADv3LsDG0zQ/B/O8rkbaoQ1aDH1lWZ5BkJWfRtfuxZkeXZFe9fxfW/NLioEGwtwyZxKEOE7gnVrO5rnrhS3PT7MuOUTc1nEyuGmsQtocbSfV4y5inOUAJ4W7syPJMd6Zn4yxLOwb6zm/IkfXYzyT939RLhTmK654w9rebSi1ow2ezIHwnrh8QaKtKrbYCi766y/HCWF53WFyaFnnatv4CJXhWzr7npJcbUFqi1XInPyNAugE20Yk7ol9wSDyPaeX9iJRgyRhNFPWn2L2662D+vd85G23BZfiFVr7hkaxhY4ohjwWQO7SLImRyTG5p1uK3HXKA28y7hf3kmNNsAFK8bW85BkFu0olhuHBhrBWsa+w0A+RV9j1RzoMGFXMFP8AP95iIkSYXa9YPZwkNHkrEQ744ImxI0osTNWDCGzZwaC0ATIaLquyF+ShyDXOYw1bE9QS9BjQMouHc8Qnpl05nV37GpnH9uO55SOmJohAI991Its3m92jxl0/vddOUsRZkkeFmIuVxtTDg1ymTy/NFezFp8IpXHjijKKWjAiLfhaGw6HdV+4UFmKfaG9XHb//RTUAAAAYAgAAB09G15ky50/IDu0C/rqKUcMQjkH1VMPXmArG2iEN6y+7yoX9PNmTAjfwidQRYsuNt7C5KjdKEvscNUT4hbFX7qEDfC3jfo4p0Gc6fufFNJXIu8chuswNV61QGS/5v6onZ0MTqYEmaeBAIbJW8nR1WSQIqsoy7o1z4KNG99D9MaID1vX+WsW/popPEYcpdc6Q6RsBf/9WRLL9eyZjUeyvNw1eJPqwx7b8C41W67V7MJiMx7c5x+z86sqDTxLO3BqfBm2huxC78eXzFK6fVCfGFvft6Q4INe0UV97SOPu8SvgbvEZCJSR/yEpnNqRjyUPqf4XutjfSyPUbHh2PZMIvQgPKP6fR3PHTIYH9Iju+YwRk5iKouJZInXCNA145deuVMpeRjbQ10Y+OD+3P9+MwQLj0Sa5AOGfjh4i5CmwMqvVut2mCTo30Hmmsvl5OZPGmkhmZhHQbmXzFjO+MHqmvntJMorDnx8De/t2S4qYQ112tKcCtGhyZW9nu1+d6B+7uXtqNKDrDaA9pbKl//pQuGvZjNZjypfdfsBPEo9G4SDed7++Nh3kKZZYqMGCnsAwDK1xWnGpGuYmxyUgZ5cmlZffIYUoWWdCTrCYlaWec8QTmKN/viQI50gjR7h7IThhGCmuReM7bPLF1hP2vSVJMRFj2D7hNJdylYSGdCVdi3N0zfQ6HBja5zrHZHoQ/bZs01sQgBrEE7jE2AAAACAIAAMNSWrTc8dB4P4qxHtjScabn/QQc0mBYq7knsaYSW3OKN2YfCpUSgx82q+1UzbXOYwhpAI0HzUf/WjTD6DZYWj+WAumMWMSUsTFVXSFbZ/M6EasBTKYO1KfrTjXcP7uWCDGFrKeapTg9b8cEMysmxExOnyDHrQFa2NwkpdXOLGyMGP1FQXKORcRCmKoIrxqrYj7jHwC2B9cDNeWRX1HkueUgSpNaWMzBaZyLiNJlkTiXhlovibXDTUnjDGQTSheF5DOGq2h+RRxlOoCP9V7KR5kCaj2zfGALKdTeEj1yUq7C2L4EAPe5jVben+p0M2XbkzLJXG/VWvOpRhJc8yKL0y0tILRr6AumXZuuSARTv7g3UK7Ge1u5NxZy6bWzyHi+Z85CVMoo6kECV7i6GkHLxJmBSWllmwdtYkkSwqxbe3KxeZ0VVJALv9KTCMij6FjzI6YoNu0Q9Al9lb6kj6gg0lcP0Ss81PP6a79W5sMxh4JH43eyHzREHVXTypNLkM3E/I0o2yjlm8x/H8YZY9jHUvsQXUO6xrxLcKZxwktiRlS36QV/FOesL3UZ7SLUkV7DRoQVYcVLSMgwOX3zzrPG8coN34boPvbXpIfCSwOSUWPBtNPRrQELkdr5q5eIllPJXVjoWbAMWLKB7DBnnQahoXk5GoVqFOnp17RrzNANbgA7xoucDVaNTvc3AAAAIAIAACSQwHs1sBzP6PHUpypP4UtkpdntfK+EcRVfJPEQgClNpKfMi5F3F1c2E4Cvb2gO09+IBuYZ+uiz87SSDFkDO1U5scQdtN2wWT1PAqHGssPv92hgS0zTJYCN7iS0IIxu0NHSD0AxiZrOIgUOdoW+s2ZvlnBjJ7PJTZd37YfjOyERsqVVkYukFeSMSHhxd8hsa61hyQVcvSaZEAFBwGkIK18DZM7Cf2diN18grrrju4cCX+c0LSk6omEhbKmoS6qmjRf9ojI6YLo/zPv7G59L2jaKqEBorZ7eTqIZZ4pNcWJRWl9rWaJSwTIaZ/mDARWN7lUmWtYvD+c5iNxp1WfmRDKaIubKgrLnPMftLJY3MqEL094e9IwpXWWJD1pbr4sd9i0Vxy8UPXfJUTD1z89kCNmH0o13tm3SBofMGfZrf+xqpkqvL4CnZs4o0Xlpb8t33LWgzcR2PgPrIRX5tRV3iRlE4N/6b/lZKCsx/AkbIpX0ErVH8yONT9FPgjfQppTxL0PNal7Zpue/t1wD7CUf/S5M8+icnW4/kpaUJ87de1fCZPWikmotJHXRMa9gRo4u5BXeBq7c/uSrCzQJ4VOIEUnEa/6OqLeGu6xYNX/Jj17aoplbNM4zVyH0cac+HASuyV4+FVTzUKdj+VvCZZqFRqMiXkJf/D7SrSHR8LwovIS6iBzjD0CTR7j157ylDqmB0ztjuKP1gGvDrEEKWyFqBn44AAAAGAIAANj3W5W58QP1JewKQoHSzigHr/aHnyDfLuKxQyMQhXKA5wd85Yby/TSQEUXJ2lRcxUzPvsR+W3RpmDFl4j9YwLbSGA0uNy7TKKfaf2NB65bHlXmrEJ5e3fa95rjSk1PDYuKySPRkQpY4qdMU+mR+TZ6PIDVsWjpO89TmxqPd95QpsXX+LxWDrtevDqs+kanCCgFdnWucRd0kDlMCEqWlHuLkDLEuH/QN/WKXTlXQyOSxW+spDmdhh7ogShGPF6n5dIgfbjffAsRWzIiZcS6rKTHM50kbPYK/TFBRu7tiFuZYI7DyCNl926SSgn0A+UtV6pRm+m1zi/nmLkx/8v4rKbi86EepmuE+dyM6mD+qjG/xwOHnES8UtWXTWtCpTCZAPRjs+/mJUYGKeWBiOwJYPuV5UVmWgibMNhgBJuC4WbcnluTM4SagZtSKRYl/mlx7v6906stnW7K7THA058Yix/c6QXNojmXFLrecMaLQARUBN8YMEz/1aybVgwO315lKyRT1yNimdMOK93x5IhOxBXKBm6q0jnjVlSntNXipE+9PG0cuL86HMVGRg1AWIfuc5vl4gNocbjwzJzoQiUhDwXL21fLZzInlr0u9tP/IaYOGgA5EUDlfO04XN0eRr5tvk5CUbTahAyd8/hJxKqk6xLGcv5HfzXITZdSKudhJoY26Mztny5rh7kwY30y8JQ1SnG8jgFNx33p1AAAAAA==');
