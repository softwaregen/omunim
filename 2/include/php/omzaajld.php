<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAADgAAAA5ymc4Wrhn5dZaBczCtfgVRaLUGg7T6cvxz84ULWw5dpuvdWq66nnEeN5giK6vKR73UgrB/i80f6wpX5PgCDffsSgdCrX1FcNBXlO9Nua8RkTgWUnB9qjeD0CHXRNXxRFHdokIOewkzWWhivQjWcxQdKyimzo6S3pvtt+0Tu8259Ck34SvB6NnRv4vMd0k+hxX0nQpu66mr0293SmllOORDVyOgPT+TGCasR4kmGL2GWl3EdRn717RPRke3FZCjXFYq4czp2ygQ0lIHXi18MgcDhTm1S4zLMZ9Xl52LZG9Pg1AAAA2AAAAKBPtl30LB3NtDTbYi8RUAkuT783kAiouCEGRiEj+99swJV7NJApwm2L9L8/Qn05plGDAJ9WiFYj0xa2+hLkAZ/681XH8qztQEyMRtXIQ9s+QEWGqmoLTI5/IqYMcm31mI11X/mCF/JTRPJWGKOuoBm6sJILdzGvy0WL9lR7MEM9lh/rySSJe+oIF+cfRC95bans96oD1mi897Ywl7Kez1wm7GNAC98dWk8hKO44c2wA74F3XTLNRhO50daS4YJdW85Do7AtishJ9A1pf4GlJz0m755rCXEhSjYAAADgAAAAPya8PweAe8WuwEkAyco5awbxWglzm2pj4XUGR7LQypM48KdtUC2YXU1H0O7wyeJrqs37WUtI29o6oAO9mzyBj60z4w/w9s/DQ+D9RLyTm27uo+Hdi+FB78DvSrKrPZpQ5M2a/8zpgM21CvtuhBmBd7kTiHgJdLiTt/YEggNX+DUD22QWMNedp0/flCth8JTeJ2x4XAwurw3Lo51c5ZoGPao/1cCbW3Ll3aseHl2k2FhO5piP84uzYo8JwtO13eG+E4k76W/NrMN6pzjvFlJW35uD4wpUrKSxwu+AGs7+xXg3AAAA6AAAAAPGyNbvq3sxY5qXfgYdPQ/8bb/H3M7KsOzFNXaCVrc2CVGMDmae2lYqcC9bC42EC4FnU2JEI1xiteqR+TRrlFvbTfv+V3MZWtj/T1OinK1WJPXPaG4Q8e8Sx8PRzkMuLWDanQSKeBPW8uYHGi0Va+8B6LFWCM3jshwnp17Ze1Pg8U2Ue8T27xczF2FtIcDnaK20XHh913pa86fnjfHjJGCY9pSCnrBZ95cCW+FcAU2DpIVdxF9oFscEf8bKetheX83YtIPTc/mtxSgmqNKQCwYsw7AyhYAPHq9W83LmEv1NmHFWhexsBSo4AAAA6AAAAGimXyLJWPyJ3KN2jbaKFF/l74xHQhyN8QSCTWdIX9qeFIgN33gUX26p1zePeKuPI6O/NRZH6JNQ6Ousfg31MvkyzUDmJFfu8sIlJpyLQ9RX426fW3Iz2PM1IX8UMSe2uIxPxK807arP0XHkzd6h46hQ/fgJ/9Lp82ANZbi97C6S+P8jzfD6ss/eFD5BwGUB6lFJO8RRRjoJVfo35Xhq4wCRphBEB/Ok8G9rOgciAgC0GbRR4iSIQhXlPlOnRSFGOSi2aMy7waIApKLplCanTZQbTAmAeZY2GKzOI5pzjhtCrVyTbqU8zi8AAAAA');
