<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAAB4AgAASljKars65LyDPMzhX7zA3pDGswsWbnqaz/4OnvfnPs2GVEc4wjWkpINcwlPp/HyhuexfGKgGmtXV8Tlv6gopI9jzG+D9gfETAjwypWYP8ekDkq/EhhePb2yyYQplKEHGWTAOsFoCg6rv56KVwsgNdaziyLbU1RVo+AKrCH3uzWFKnOgcdcfPqU58xz9DYBZ3ESPrOEoyvpnR4MyorZAPj3FYiXNvh2X5X2PeK0D5Sc9t1l7j6eF6Bc4LIEKWQODD12vTT5OxGKBpe+di9kjRzk4KlE0j5PVYa0hooqIfZlkxSkcS9oTK7aLHp8gMSYSUJuXQp+T4QedOhDzlryUtKfxB0xGF1Zx7oIon+QUPc/FFEb0/41Gb4QGGNi9mgQHbQRLTzoif/aOHPQwuIuN88q9SpUWlIIeHy1holn3P4zuhgOheKcnhfdt4hdNOwZ50E95i1/D3asxuuCsIGAo9x2q46gECoyaifj7FX9d6xT5GQjDUfO7DNCh8wiG4KK/PBsAg46lysoCSLKbu2SHit4r/q9OMYCa8bESXCFeqxfKQBn3mnIER9bY1blTJyvlLdjllNaKXyx6wBbXl8rNcWytugzmvgA/A0IzvA1EDlMGq6iqwFjWHPGLGk9Hm+11r4GBjlvYsBYrekbgJueZI5P7caQ2Do1ow4owNsdYTkd4DJQD3OYD0NADxqv/5GvQgrDPzTPsklI1mTivDBUFHr/KWZEhs4QClOpW90CVGytsOD5wzJrfqUcSEwkvyc1NYiqGk9EfAfVU9K2YhzBdaC8PtmlpektPMslDDIYV80c67p6/5tT+nOf5KSAf7+IewhtgtEh1PkqU1AAAAgAIAALxTBCoqKcDGBfL4NXyWwJfyfUrGcCnfSIm+JRWW9uj36dUiWzbPRmf8ihNwzG0X5u+DbUHl0+6OPyde8wIy2MNWRzV/Bg5WzuyWGO/pQ/ChxF8gADGT25k5MBTHfvAp1uvxOhdoBz/OSbv5MnA5eEBx1yNOUUXgiW2XDt9qanaxTaJ4d8Tk5fEXWfLkfV/+JIS9QClw8W/bWH+IQBY6RXU4qlHJyBteA3IatTuIqZpGhgN57A1VfWd32VlrFPmKBN6RMU7wXbPjcDDC7lhE9aMS3dW5eancNqpY+TpI8jQ4bxyki/3CNp0t0rdICXn43u5Jgd/T+rc3L6FeNnJWsvXDO6nMlOAFqkiCq4HRZgLRZaYauTk66mj6gKsHYPJJct3+JZUCd3HEbeKuPYGUxmfHO55OadDjsW84htFHPEuzZsYB7cieDZRKxh400/dL3B7hMdjzh+oyNWXbTWPFzkSDw/yEDsPkI7GrwGtqtEYZ+eR/lGUxfKtdAR+dS0oAI4E5ihQRo9xuFU54rYYsJ1Z/1k2fyL5viQkfCOdpI2RPWAs++2gztV1/fejxT3Kjn0a5yF3Th0z8DDFtzhDq4l5DgWR7dOi3kIpcQxh4Zb7lEEX7QkHug+53Hx/4wNTQXFE3Z75+/0HBMNman9Y7KkKjsPJ8PI2tB9x8nbmXO7qSJWCvnJ4Qqyhp41hGt2QVNS8aiFCb282qLF6aB3oaVxY0PRerOgiQ36IL9Yqd36nSnvdvrExJrZHKdWJ/XWy6ts7BbzCOKIecGt2us5/maYALnQFm4QOFvhwP0czp9yH9rrf4+fLYS8ACVpPedVYaBMUnWgTlR9+d9Epeyu8T0Qk2AAAAcAIAAEQnIp9zw9CZo2nYBO4fZu/136VaEuMC7+XaElOoEYgtuqn/VJvAQGG98uEwI17Ytyx5EeWfQFs/kENFrAvJZZXJHrJxfv5PKSW7Kc9WNALEBu81cXIqwv6guu6KpXvoMVmI3Mjqz2zQWdk5ULWsM6u1cVTT8ZU9BVYvo9duKis343GE7oXRezSvB7NuO8L0w+ifHetVYJMDZDHFZGCXnSsMxd06krd1qV221oW2lG9vQkj9URGKzzzv4Zcjtv5o0dLC6AjctsRg2Mjn9RztX3nqubsCjJf/FoDOLAfby4CvOERfsEPDRdY7r6YPAvhwBgbO/B7qshaWcEcEOwhbjJMGGkUVA3gSgPmQvVxrK04LLVxmdQpk6a+xX9BsGP4+UQ3Eqrr13X3IqwE2nlDoa0e/vDPT5hrtxC1ADflw2L1h1RY09hGBsgas7u2CtkvqRR5KZ9g4Np+C423ljTnyvH2rs0x7ejxgqnRqcpGK/1Bj0BxDlAg1BxE5ieol7Bgutf+g8ou/TWh9/Yt5ycd9ZX49rbRkqLHWd9QU89vMnZ3EwNlWZC5Mccx893/yY1rrDs3HTYCpRKIXtbA/hoRK75fmm1qPARBAW3itl7iRdLec08pMy8z8wxYxiiVdEAxrjCrewjmAy9GcBe3BXVAt87yDuqj/lZeNoW87WSTMHNOh9OazOYLZvcvzyxz+8H3+HV3cyuEo+bmDkFjXnFmkLb+1opPkss1MOcXMS+uwHQI/lCRFoxDYH8mqIiEnd5dTtvj98a/VYkdp1RAgUPyjJtTS9iMC2o8E4N/miK0ljtJ3YOVFIudccKxtq+fTrqMLBDcAAACIAgAA91RgHcw7xB6Uovop2MAOFB9NjRXIU4jH5qgrqWz9QUYAiAGQbgMIpedbruk4RjoNQZhbRbql0s832iPKLPizVcxrnRniHhJmemEZJ2iiY5NKAHlB4/LOSktoRa29fs39/r3IH8wBZXDnIvMsEvgG9t7qM3qhhHiH2eNiAVu7+Lj5ojxctozFjtbzgmiqJOcXeDARgg4Toe/UtfdTAjtCyuLEYUd4MK2jdIXV0Fblto4ajhpXfWJfWM13MDmsO5t9DlbVEg95+hPYYxcbA/w5DOgYuOOxFzy/5hNXMXmQkvtgp21bXxlduINc3+1qG9x+i9U/bpU8cgyAC04tA13sWWEtg+FSA8ZBf4fBnL2sDL3o9qmixFrHBpiINy95MYlNDFwvufMqN0MAQkVrvqhGUWmhh7w+UfWIViAb8t1ms/kPcU9sHTdvGLPWSD9crNb22gCAh4icbMMmYN4/hvDA8cDinPPt2UTA0KKyQ8cGhgvsAJ1TIZJqVRmJUqKG7lLsO/rPtmj60cPmQ4i+7FybTX4Ur8CQRTP9d/W6dO3ts5Mjz2C0SrjTuR/vJjfZpq0FLRgu/f1/ToE4/hALbDreNEztr73UO9RLWXp7f/bVx1Md0zvaLhAVQv7J4MhKZroNvj4JS+E2+XeHLBd0osvLlLavHT6lC/5DiiPAIr8NMa7XLHbNMu+ZS0fji9IADPoN+0DWrbZEUrMkPK5RohXAjp60caE4MRRGcy35OVG0xR6P1+UZlW67v0Ohyss6j6kw0zav2xh5Qf29IMB8UulQSFV7Q09qyqgRMZ0WMHL6eY6MxpVb45rQhPkM6z8Lx39CFN4U0O0xNwQod/TCEcCouN6f+LipzYBXOAAAAIgCAAC7+wCFdTHxy6xDmDiIhprl2YDp7NsSfIDQr3MFly2lMWCedrMdQc0x1L5vHgneyegg06LRtGh7cDubcCSITP5OUP0yoNY/5XPd2O3i1FUzLNZIo4SPEsJJxzwsIjVhB6BMXIh7wUjzR27xnTcZSfPP5qlyqvObgl5KIaK/02CfQ0TUkn0XRF+3APa3w8pbjypspUy1dpwjf5nf0y+74k/HuE5jD35nX4IQFydasieTMI0lsc/1zmVWspu8qUpoaEgEA4zFsJf2yOGhabsYufzAJpX04W65ZueiwslHRFbRoSt51VD4q3AwS6bmkcmEpFPxfMk0OiaviL5IYu2gp3Kp6dv0qHburKNyKiGN++g1fIlmq5mSJpWWa5HW9AVCDjAxkrzJzpWEn9ASto1zGFQv2Jf5FSQSYwwWS8c6Yf+GthA0fLxuO9DY69Pq9GgfdnxJvBBL7SG3aH8HYMvGoRIjo9UoI5ceUEt9qOG+Za0bBw1QsGMl9VpaD6t4i9KS5VBUHcXNdITqOOeV1p5UnYheKAfJi/1p0DNNAgedTcj3z+Oh6a8VkYDENUzneM8SjxxXcIYGtdDzTl96H5flU/Yrh4bOdnzftxq9vLX7XJv58imGYaEcKzvIrrjE9vTwu33Aa5oQU7BaoUsY34V10Ji+kZcV8SyJj0ECnlDNDIH/xQPYkQonm2YAPi5KqdHB4ohz01Gjun8Ryja4D4776gmruMGS3Y8YVQpYS2/3mb90JPM/TXBB4vET6YHMZTtWa8AOvbHjKTwjR6d5DzJMUIjud6NkAW8J9KWpdGsM5ZwExC3eWOkNXTAVtI6mhoDfTDCdlYVpfkQHDK9gw9ifVEWOXir5SdOM8ZoAAAAA');