<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAAD4AAAAXkSQhtI48aMYUUhkoWNXJ0oOjZREbvknx3MczivE6qDK+Odl6YHpit9w2hFjaKPJYx89S8tu9TG5bzeyFxZ8UiF2atXDi2s1AYwTWeC9DYLj4AHO86ivV7wrQs/5TeRtSXiWbmASnjLpc1WUlTB0rQjRD0eqbKI9iFZHdjmIlXlxxVqD0NMcr+GF3kJU+k5OuO1z+p3EcbSHyq3Cn1cxVUpr9JSGLiAv38AUBzrbYydUp21ildKgBZsoV38Z+9NTzOYRODqnYbRdoZ9nfe272gLFrZtkU9LZcU2GDfGZ6GTMCm8Z15fXgtBGzwHY9H667qpO01yL4P81AAAA8AAAAFphizSC9YBg2eJueLGAeExF2vo9+EIvxKVR8SQiOrRJZm52IGduTO3ql2iZgt33NJGmcz4JDXnUZIVpSVyJBqQkiZ3p2zGSa8gdyJlo5gOV40G2kd7+blr30y6g1oYcoLi9vaY9TTu5WvgJ32CJNyVCJQfTuR4v68rO1ILrf6+x3kFcyU4GJbrJ/o7agU6gpUnq65Xu4F3t/SpaDEd9kl13TZ/GiXpZpV8Bt3YeEGz3KZ5yJf7897bgRMOcRQ0W0L7MnV4oIN9YRGSJSlbSaTJWhwmOPqkfqoxQTqsW/y1t99h+NvB1GgCncyIhXby++zYAAAD4AAAAykPah55v7FJiFyI4jZjt+CW0HBg/AY/Y2G8OoyLWyf8ntvkaBQ7DVgkjqFAw253LVIxw6N4OcEqSM+gymoMF0ewYhDW4N7Iqaxon9YJsLOuKmScPCgMzvJI6IRYNhNsV2t+IMeNCDjvudNj8lBQiljScso9PuAjrZPSmbfSsDnuGbRVGTlJ8TzhLWSbC926lKR89TUiiOk7G++RG3ERRoLxJcoT3pPj9xgcSqyjk3+zQVto8MTNbZK2P4oqtYHL30uqO1EeE+kheEHmNRATa9oCTz4zOLSVDIyED5OS0fFWUWL5hD2RSZJrDVA8wgmYBNWgBW1Ow3Lc3AAAAAAEAAFnjNOTa6oMIiS6yk8CGxm5j19vGSEqgnb3jpQlgZ1evtjqsnwi15HaMwP0z9IDFpIdcpdsG/PHdBkGXt+8gw/Zag9FDSL4mqCrpPOJcyih7oDvrlqptBgVydVpwM+R0h2Hc8wY3sTLmIvr345oHUQB1eXBDE5V4oUiD1v6ji/hTZalNYnpf8A3PoN8/tzeXA2+p6sW+16RF6q1y81hjpO8oqnIgvLHyRaFqWVwwy1a1NtgZ0BKu+mtZIY0QmxbVjWwcbgWOLdMf01uUtSLNUV19fU0KGbO2eIQ2ywGaSDBzqi6GCWDaN+HLcHnYlxZIKFgR0QGl5yVGUHuPZ9Rw49w4AAAA+AAAANMV+GaQ1oH0wpnTyZ2k1LgJqABLgEY/2k8K//FqzEfrTEtEWQFm9viSV7bKKnRF6xBk0TunsRQ2W1VBBAYh6bV39tjWGwkvDY5+8BLKWjNTcx1wEGnJCf5168zZfBeirnxR6bYTZbUHsvErdbWgtkmMT0XFcZbyWPjNJPmlgVDgWdSkNvezhbzVBs5QzXbQz4a29OjMjQHanD9dMH8UGDL35E+MVjAnUlKEM81Z8yld6es/Aay2FzI4hHseYS1xs3JCnDkfzHtrJZjig69k1tzfFZP7ME9PcSldNLLGXsCLOaBz4+0Wpy6SdMWew/5BSqG6wEaLBoMfAAAAAA==');
