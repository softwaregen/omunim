<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAACgAgAAM1xfHN23MDy0Pdtn/2PPH3M33R/yXZuFKpz3RDVZbS9bpi1OyofzHMLtatI+xxIUEn7g0TvLRpqSy+36R5Xce/T+7xRVHbyoNBKvxYxyMUPZ5K8JniLluDRPWT90lvTu3udB4pxxhywbyWLe/ZIW4HwDoHOKbgiVm0pfCWsQfMzeZQ8dwlorhrp0LienjoJ23QkCrdmeMhS2mcYLEuApc8wPuJr5uYMhhb89udTouHIiqkQRbdkQ7eDMSRWMol0na18+FWTI4AFyfwSkQuxyqGH8aPVV0JDNDbVsQiPKguZu6eJa1bAfgspKFiFfu3RMb4FaxB1unqcRA/sgbjxVvbIIKePvHJpAmqmppBcxSXm2nO8BNQdlOaU10LbdCue308GY0uaQAH27pvjfO8yOPnz0y6bl5FTVBbPDl9zKpnt5g/U5OYhPw5ggV7H0QXhXhTbGuZxC7VqD1DtXCL4MTOD27i+gEdVu7CBPNgQGrAbyYbExN/p5sqw2AX8q5/r12fopJ5jGu3PeoB+ucrmd0eIFommvs56I1GAAMtuK97pnSZzX7b/SBQcBRqtRs9Run95tqlW00YDuaXdEL4tvb9EP91R+4PZiIw4MXWVlAfz9OEgr/tV5FmEvAJW7BJG+ivOg8hkqwe97sUnoRR8xjUAqs8gdthlrySJQqbyWxIsFkm/3KLivJqOfuaJYMRPDTAtZRmQz5vszUHe8vASqiFEhqZpI3ynJRc4Yk12imDmnLxAGige2uVkkJ5hS7WCKS8TJRSPxil0EGP9UHYDl7VA3Dny4+Blpn+3Sg3Ny/rIHj4hqDE17wihKjcUsGv+GQdAKEg5h+UvKweUWI5dQxh1KTs/BHW33NgYqwWpyy5zIbk4EtM0r4YmfRHCWNewnNQAAAKgCAADG0sdkwQ966qmFkyqeMuN2zJec82K1PaO63KNJ+N8mXcZfnMhAkOwMaUDO+PJlWMRNYIrRGMhlm0ZNlt6F9a4UiC8v8LQ4gSJ1gMZNlJZTO4dyWhQ7Y9wdHLmCvCbn/t5sAWuycAxxubs7Q/d9KgMnHKOsAsX+bbTZJz6cQP5PRH3Y/+zLGkBZCTEwxtdx+HAWkn6G8ssvevmimpfskBQmD6hrS8UTWLvgawHVw/TPrcUnvlV5soNlGq1dAXSALtcio1P0lATBTHApPfiH7xBmGA+JLIE7V+E7xwfO9kvu3ksKJsA6mZ/n/kzWZDASXZFnlsC941Z59j7AaiKPQzc5HsXHKvRd2t0xl5nSSTc1hDygjk05YmHxl7zR/MyxOAUktdIeDsgJ4+dDcYQ+H6uDyT0sb6D2EuZZaRmMbdfdEkV3zrVQrK+RcqwSUEtONhM0ZxDgYECndN2VoQOvBieCvWCVsGuEuTe74zveRtoEj+VOjDEP691BfvmfHAh7srBeVMy9MBP8rD/OmKM8skGCe6y2nKG2mNRrFilRiII5b4G42U7rEmKD+x7JS1mPARWVo6nipph7svJHE53ckz72Q3Ta4SRIJQwITikhFxQ4mMy01ONwund5M8SRY+7b9H8rk0ta4TcjeiS+94wBxGVemhaK5tf4oLYuK0Bo5DyieAbBsQ7qJyM3Qj4sEDb7I7/zZPX15SNKvZjeWILPxRZxfNKxETXZdqhUXAw0xoP04Nc/7i3dg1tbtcpSH/xanVbUF4qpD0ypgDrwHJGTHBsMwbbPsIJK2Ij4Sa32GMrVKwYgO+3Z3EHOaML/8olbTCCnNumnhJH0FT6+2F4X3rbhNfE2Y5itcpbyRfDaB6/6Ab8no7MKDxSDem2xy/daew8Q/aai1GZ6TjYAAACYAgAAWD6Xuo72gCsYNkUiky8Fsn8PVkBE1ShbExGhVmqAWTzoCnr2Vo/jkU6j/vNcRdLNiziWH19eaTyDB1nZ60PWtStq8owyoqObATx4hOqLnicdZfIlEQA+wBeqU3ZJVp6cZHfq5FW8V0By77IVttLP372ERTdBdRC/bmhbl0O2IwI3r5/BG2F8fq0R2AJV50Tg4kIUF59PJuZMEEQWp0hx7V6zRcWcBt5Yv3XhmazW6koCSQNdYUH+mwZVS6LFnCLM1Jlysg7apPOmua3cZ3NQnU7roqpPPSHrRBpFieeIz1mdPmzn3LhPAwbF63W0i65jKKLbnr/YQOZIkIvflXJnYm86GfQk5mS4kIus7olMea5nmXEc16z/uSvqiF/oNU7Y1rLjWMtJilHQlUbqItqpVTVrT4M09XXtSGiz07P+zy932oIQGdWTmuUFZdtN7ow5JxhdAkz5OMZ9DoRP033Z6o1ROEhHfXh3c0cJxjNlzJ+FQCsKt3nSwz5dBe69hGa2loCF7iH2E42xhLa6xOX2agWqm3YBEpkqHyx4VN+JQEnYTYiwTDCTkpTtNzvoXt48WKfqnQJ1Br8Cz2JrjnLE3fHKVTzuf3M4Bs/wobowpBaJBYj/vfytpvgXC4WSH4eNxMXS4TK1GsK6OF7ldSFPa7YvXp+8/FnjkBzfLiU351+rTUoOu75OhuXMuuTCTHxLw3U0gUmZcH7BSRTqt0TTELDyWehXh6mMAlJPPVDJvrcPYu3JJRcJI111BvJ4l8TJEU6KEIs63TT3AedtG2AAODpDhaioandvwTyYln0NmlJ32gsKxmeiTZOxQqeBOK9CZqaQOf4zn8sn4XG9lRjvkEc8g6PPfUcJSURATmSA86eHmrI5PujZhjcAAACwAgAAnlrqKy8uQn6SWoLQSzGqVw9ARYL2ccyYAiDKuHOn6iSEleRY7XRmAFJIOeJz/mXt+pV8bC2AYuyHE+cbA+A0lvYpwQB1GB/Bigx5Ok1uVzVFRKoctV5I0FaJspvH5sRZ30qZqAy9vz2H754q/iA++lu5KLed2plalei1o/q3K88Wac0zEuP9c4+LlIuyTs7pagEvfRYyrnSwidPqRHFR26IVEuOrGEVIc3C0vuJxpTnx/BboJdOkdycEYLA8MmJ51BGCQaYsTTN8r8McbgePjhy3BqodhP1F/6z4rboX8gq/bdWlh58tuQjROGdMdtNvt5lzScQDaIO4mEWwmMEANavFG9ax7IGZZzmtMUZTMcymxxt+HZfdrAKKIFPu0epuL92pYurMCNhtTDf0823kP5UdrcqPzhlPzgpfZUIqAXp3f7LBQcUL1JGeK5o685tV9/9obujUKVNogix3NXsfh79rwZbz/XPAJ2hBJxbULEGfnKgbf8FADXR+RQjT93F5DSt08nfvvb+4IB+1e7XupSmeLcn+/Ga2htDdPS5czWve3HsI5yt0rGy/EBiwsxq/CEIA2jQbscQ0Xlj2S8ur/2GBMJYP/5zYrZAjfmR/v7d3hhbZGUf8OZXBCRPIOMLg76ecIt7az3Rn1Sl9JKHRz1NgHClPr7yrnfEIWOidA6dDgRZb5TJfs8ZdaroLtiSW7/1JTJgo+SR3T0BpGL77F2PZkAKTcdN153NM6iXHmrtkIX1UhKg256+LSdWZju/zdP4BKUgOfaySMQc7HNcuTKM9P+ZrQHJKpuhENJGNiS3Hl9B7jZC1Jjvyi+rdA2zZWfsEgHSR29XPbJ6+QgTzezJ4nMuaLXC69CzrGKQqByLMvz9QlfxAK/xHQL51UTfJA4IspcuDXxVqYDOl5CEpbTgAAACoAgAAaaU9m8ewVOGpSY2YBN5QNeN8ifaOm92muFg+7SDH/oT6BxtPGRcY1m2z5KrStyEudb7kvDbjha9bhaF7Vht/oZMD80Tx4CXW1ADp/ttuZxLGLSP+xKeFhi6sGGLB/YwoGLKXqyHn6sus5oiPe8RGY1t/ym+l5QBvGGeUOiTblBANCpAGlBkJlKD9XmyEWMUe6ao7lZX7FmhSrMm/pWIC3+Yq64wyFOIOXy9G7TcLZrn+IVwc6znBDQe4MSECPhMK77151AWa5dr0qnSOolyGa4QKSPRuBJwOqE/5sr/GSnEJylYFxhdbig7P56EFJmni5H+HA5KSF/tR2ZZLF9JPseBBigmP5L2PQMsaW2zpUIdLupGux1v4UXtw3Bmyo3Lh462EuQs8H2SkM3OchV2mS4+NwOOEfVEeNoOmvFIUrCoYH4UCm2sfYuSKA2aMg92ZijX79NUVjex+6BTm60BPO6tF9ClaIMXtadNcocQHiTxHIHLmKSjIfdP78iJxuddN7serQkM02Ewf/o2u7cyi4JHlg49HDQMPkHvSMj2aqoThU8gtwy9zGZCrEcAu2fFeih25E5Esy8A8FE2XURn2cd6CaqK2xhhzS0NCeUbzTAG/JP9YvlsRE4/dS0XZNC8ygEMhfSQw/xWzKdf7DwIHtUgbQm2cr9fCbfkkjJ2WhdJ3nEX2bqdNA2m0CzX+QoeL6soLIaGfWU+OgnFYm88hHs8fWYccFAJP+R38Rn/iiSHn9LLRHoKuMU59i1fARdEUxBAI4dI8xiYL91+rz+giR/rQNVVwIpTIAGgRl2F6JWEHIoueXCL5ghKVw65VDSA5DCmLmXwwp2eJ/LD1bFkVvhs3Axw7gmwQBYBXT/Yu3wbGfmOqsHgj7DcFGCd2i5gax+n6Zs5K3j4AAAAA');
