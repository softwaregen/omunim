<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('EEFA32DF8D68410AAAQAAAAWAAAABIgAAACABAAAAAAAAAD/hBGx++ivCwG+aENHC1rf0TtMPJ1onkyTnRlJ2ahww7P1zfInTtH0rIMTzjqYJvq2KnUXZM97vVrqHLWD2Rl3OOXMKntyBStwXJFqlBVwX+05LTkX1rCAbKq95rOydyAi1Zb/TBm1ScDDHSWY9EK1jLg9kkAJcXGN/CgLMFOAuRQY7axNH63fszQAAAAoBAAA5GvM9IiwTK31WejwynA9mesuioA93uBSYb8+qf4Btwa+7HovPRz1wNyV3dTLCWk/iU70A+Bbks2pH/LhnBR473uGVph1fVUuDd9eQz6NDE76kUP1qXoI8ltvCh3c5mMk37szD4oW8r0a2jQwANnlZzib7aqQAD0A9zWINvKScX0+ABRtk4cmeRxuITKU2itepuX/BvFa9XDyGWFjidPE8La2sHdjpRbifpDuE+OmGb6fmQkaIu7m8XQlqI4giLLRHXskUQOLlZJ5/SqXie95v50+43M5D9MTBreIFHCW+PwAepWtJ0dn5jTqX867Um1Us4UQXCkMkKMTvPu8B2toqipwROdinfFXCN8qJQQ8OjPYXFKEf8TPF5H+jt7/SnNNblaGCfa2aumqtdq/XYpEUqqXVPD0hfecm6HgoWocfN+g1jOKJQF+fAjymey9gf5J6Is1KcuBv/ND3Z9tRkLCSrW7/l+KLIrR/YRtlpoRM9jcM+sghP7VbnFOfit6uHlufUymjOsbWMKJLn1kabPg3ysQ3CBX0qslnmT6NOGE7CVOKpBGD+QjGUn4D7JFEQnxwrDKsPY+VFTW7n+gLG44R/ZyjIs1G6s5F7Kbv4B8vY49xZsBZvecwws3ol1wF7ZwD9sQZwHEhb241x4jdo+yEyySIy7GrKCW7gV6rQlMCcIMDcLvnXQeiFo48fhJnG56DgHePlzZoNZN4//WDHg0KRoE0A06chIPZoOzIIsk80hj4kz0IBKj5AEp8CGrTRe4k/CrkDFPtuaPKBYVWOZm0k8hXBlJPG6aILaMTWlRJ5y2hsdeY/aOXjUnW+acqB5yyJBO8q8GRryPt5I2soDexf3IRqWJS6Aw9YL6v76/2kXu5DDGwXX49q8O1bjkA3yUkvADFCd4QxOCStIgcsMxy/2Hx+znJY7bQXOEHP2hor8Be2LZy4watQP/IQWLZ1daFr0PLzuQDjwbuybwV+J8Gv2+yHCne3vjDWnYULXvLyvb3/9mf9QwitPzoR0e8qlHcGh0HeMYadqysUOpFRUJ9Cjp8zsEGfg+j3n0zXKZirVg3v9AblT0WQkgWH9dHzamVsBfYhIzo4gVXMOZpkicupkFP3YIObblHvPeIUBle/xGsxayFBZumjNQkx0lDYGkF5Jiz+nd4+aK07YCc4/1Zg7z3QGyvcJ9ZH8Yydh4OBheOoObW9DzkYUqo96NFPjQWv2iyngjOX7+jyYtmp7NTkMe2jMM2BhuLlgOqjlqBs3yKMsTI9WSNfWkNdDH5tTX2ee2rhCK49lwmoyijEKmoaujXHmthRtCJW+JWnngHJJWJcsZIhoYU9T2qLJPjGBzFY4a+t26QF3zkzA6uYC27RnALiwKxiQUGnK2tlsc26hlMbSlhe33WqkHe+jCAxR20lxzCQqdLpY1AAAAmAMAABaiHoZjNDcX/8A5pe38nwTHaEfja2E5gOq/xkQOOm+n63hRR4jfB/6eb+jeKUPYIzFXQc/0n/W/3Nl5HJcR+RGbjIFW2MqpJalWRFUleW1r6oYHgxObBS8dru8HhA4/PCojqev5gQbHpjBW/pcYR9c8y+v2KyL0Lp+KfK4snJIPE1y8/8JragbYuJk6EJszubRNOSABVol+7wNhY9C3jBfGFmqluz49EgDn0RW0H40GyogWtpeat11jqDQBfOH9ejasM6OTpLcJX9HJIPfWd0ZN6LQKpYHCFByi8DGp1QC5AZNavxdaBArkY7JJd3fhslZBLxRk3rNwjORlh8Ld7uGYGyEMBu3ALP3OlTO3YnS31OyFNgl8k0vUsGDxlUyQKacG0/tWwrlDa0yCVjb4HaBxkwyVzp0BeH2HjC4V4ukbKNqaFCv7W+1ppb8j963FG6rZ4jRPeskWSLkZC5RRaRNkvZMiUF+KZ6jGIgaJybWmrDt64iM0i+eOHo8O1GDqlqBSMfCqYy15Y1PZZs2gAYcSxC7DYld8vzvKvlpuaiav8W8BZT4ML9Chk9/7n1O3zGiGUbLV7NtGOYtW8PTV63ncPHM3evhn5Z8V+MrBvacEZToz5bxstXidiOfJ9EKcQaklobtXtai9inpFMeJw0cKp6j6Cd1190/dZr+leutFeD6WndY2ktT/bSbzev2Nw9UL1oWcNq0WFJzSN4V+bEhjK6TmvAcKgkSVJWjNaaL2sHZqIFsIfYnuUoXAX6H0GqcwuJqonU6q4y7jNRtBwkRAgrmmNTBU8FGxYs5tWo6nNXRjnDcFRP/ze3zRdT/cl5ZbVODLiTat6UeQ9O8H00SIrqPpPRTg57OP2Sw2YQ2/OHUiW4kb/Ic6GtREG1WQtkwSXnCdXfVnDMxCpXPjV+YFm5AgqYYujx1ldgmhh45rZZiTwrQQuDwYzHmNBGBfYZTyVjJq8wRMFHGUa+tfy146LOTOS7/2zOKECFWzU4MKKTTD/wy/RnQypldeXVeofx7yvRAW0/erjhBkeFw7qoCEHqu8Rqw3kimyDkHbyMwNivI25VXdFD3sNtP/ZktStVrphSSDCJdD/h3NLNcXdiPW2MYnjWOd98FOYcg7Hnuh8JEs/h2Xfc93e1cG8hWZ/9JSnqLhWzs++LNb8q7PLpyZ5wFsgnFuwqyNrcS06H949Y7tMNYpXL7r0Q6cc8F71I3z/+AICFivJNgAAAKgDAADXQ7KO9+zUoLLdb+IA9doZlbksZccxgwfQZ6XwggWzULP8fZWQU4VPaiJ9zVTDNKKqXPmTXWqsd6qTSmhAlDPg7K7PbVVNyNHjVber8jaob4gSRo7RPsvt10QRvvgklnn+ySqvYrUoVap6ljWWBqRKdCj/kMw+5N4gEP9InUwsKkASAzzBd5y3BHrQe1nOtpUSl7Ek3SxCEGjpEOHNWoGD7Nc5QTM8082/07Yz8oRUS7yiBML4tGO5xsbRhNjyLFHs/jTBJspOS4N42gey9FqoCN3AOBOCqPaJZSJ4/1PLr8Yl0n45hf2DCddpD9+iNVQWDMEDOMkcLFsfbdTzGRFVZseOrt0LnQfr80ribS3Lx+2KHZ9OjldxE44afN0tbSKVuwyiBRjKDa9+zWKDo66LbXeHkv5eW8RVI4/ZwJC3jU8cv2vFS2s9fO6ROMqU5fXVGq99IAK4eYPLZwKcaOnPo4HOnhSjGr3vtJbHqkX7nCDzM+eZ2OmdpSKuXNomfoms8qvfPC74TzhqEDYKdXvUwgvHoCCgTNVaKX+xSmnkBHCxuy0J9qKakt7gkIn+n0BXT6CHubhVT3EJZtLljnhVEnAWubq9521S26OWOjzG3kX0/pYBIMxswidTu4gwj8h13vIRaZIBwVyej/hyEi1ExIEyG4VFmzaTJ/8WKHZnHIE8CNTV1e7dLZNHXSBcdWXQt45yhkzVa/gzbKa1JIGkgUaX7ELm1agyNNmAwqfsqJuGj7925DtUmNHsRoEivS2A1CfAmz7LX2wuRnX1aepAvlqKEYu3BIODvq9UrAPnp4iKF/+PXleNqYi2oJTsIhOaiiVJr5qOo013wW1YrTejOpqjJpL5SACu1RsEyFsYX/86Rpy+UGrA4r6FNYb74KC3Q/D5Y3OUFP2lYaJ+LTh8a5vPHFGmhy5zRbQpPkAZwbALGPbCn/YpFLLotSN+SP5HeBqXMyzEztLyaz675lGAdUNobu0nBxlczid8Z+3lOp2ZKCOjQXjbUnvK59k1o8Qu12qIbxJIshCdrRcPatUvgli6Xod1pipD3RHXx6QIkaKvoM5SocN5WgQHJHPqO8gQtTSJ/usAbsWnw2s63GGxNHDm/xxO3cBnSRgL2wGBjt/tKr90YRrTRsk6MIcQySoSY3SaM6JcetEqF1XC8SVgO8HbyMMbN/ua50wvtCbhqMoIxqLktWwPakpa4pDVFrODFmPJBSZYsCXef7l0GdoOtvt7Gx/9X5Y3AAAAsAMAAMMV/0pz3Agsksjagq4OEOFJVnO024BSzD3evGtb3anB/mIJRf1b8YLnz/H4TzvjQTjmdo+XHaUNr6jdnJa++Gzg7BTXcXF7iySkFjzUh2rXWolDhZ2ZBM9CDcbL4BpwhWe2HaFLtunblgUEuyBizaT9YK9PFc5M/Ugy4xIAb4wnb/cZpwqZ8O9DZrhFCv/Ij+dBbAGfYP2qBsGniIrE0WwiDQ4/6TihN2G8Z7v6N3n1fSERjD8dfVpAKw5f5pglMifSgscHeIr91e0xInmjstBn0S3BZ4Ogi/4paNzSuD4+74HyRpdTZoZcVWm+OvPRJdXTtE7AOV8oqpbkKtfIp/NGmn3gj6OQJ33fDOsNz3uF+jh6vTjOh6HJWeig83XmtjFfhXSn2lIkwGrPeHFlE+HbRGWtw/1yluq3/LIwfih+f65wlmPhVWp/0VHpJdU8QcowqS9Q717bt9iWL1RkphDDDT2H4bXYDrRmHFT9b0qqeap7EnzkziWa+2YmYgolkPMJs1LWFMXDPtbITeE3mR+sIGlmCl4dPTQoqmQgmuxtEA+VVj59mEEBIY05bBhEb129m/KDzLDTsbnTLEvwug3j6t1eWnkozj1QwQ8g1W9XW23ZZ0SmtsXafelKK6BGSnfktjUL75wNqcaqs9eiC/6JW+XbbsaDf77NsKEj95U+gPwowGXTxQypvZVWnjbt3mdfdpnLXz0+ELLck0yqBTuivYgN2AoiOcfr+GYzzBp1l61YEKQcuc3YnPjG8x7CvPPpXZ1YyqjbhmZnAyCXUw07GQdHx+9jJyqG+EyJP1TVEIDjWitvA9HTjFGDPFshHA48brsMqQCkGU/SFwhqTKQncFzO9kLYDhixPfr1rMA61cSlZiSmX1s+D1F22pYz6Tq/JU6PfbqOOMGI1p39phXn82ALEU5wq1Colj4vTiEfybZhvkLngz7jJS9vcb6VTcqMTUlqsEMoCI4WdQMubDKdb91Zs2gTe8PD6NZeAZY5n+LM/Kx2Ny6pOtLtF/a2sF7bRGOUkNAHnuZMZWliItO6q/DhN9+AFd8NZHbSs4TtZtnvzKsMy3Yq2BdsHAtXbwkUae+QpPgk3xadqYQat96MaNJ7Mw9s0NmiNWca086EK1DOiKBYQ9p++BnMh9jA/H2q9WfiDkfJ70HW6pnmSjExZQXAM3V01FC7l3bGYcSe6v5AsQ63vcXqM8IalIVOfA62TAuwqSdxWB+NfoRj8mbSioZmtfTMTy/bADDtYyyrOAAAALADAAAtiWBPtMJcRp4kPDz9rfNRfmIMnQy9zBtIn383WQCRsWsqQYokrCOU4Ih7jJSoemYNV2IjNzMyXbEb6l6PP3Lf6upSoChNbq43Zz2FMtb34WVVFkC1FrtaOL1rnDRe99ZUXHai6mmAHykeclJ2Bebd9H95SWDRPXtWvPmMndrlfhEC+PX+3zuBuCKpvif7qZBQUiHsxaq9fzakNfCgU56unwtn+phNvfGBB0dkXh3eh+y7U4/+FOGpq1sJP55OB59vufV4Fm8DigxBqBateIb8gSmVo8VI0GFCqkHBLTbfUgvUwm1GIfuaCWO+1xiJtF9bsuIRMXbI4d9gnLI6CnQ3NsCUFuiMp4u5XE541syLEr9D9pPwxJ3kI7eJ91CdefSCgMsv/p3HTPJyi3kXLF0xfrHudQcl3U+O9eM/xKWP3yPQmygS5RATKnoiDa69cmdeuT7OknF5MXxiuinjLIruAPw4AqRd+WpOgERhVNRvM7GQkRMzXN/C0iEDTc3oodBX9A//rE+IVsJ3v0mJ/E+aUQfIScVesSzIXQaLK1q5qSGlSmO8GA5Bel0UcGf0dPrbMlZmRCIl7z1S96NvmDNYqnnzlOknwTY2j69EAuw6YdqzbTTj3YlZLCyKBwem3mf+IgZWUyr0ewZdydZMy8YMqCurK/ucA8Y5o/gVQH5h+XZ92LwfkbAAUx+r8SxU6EA++KDyQiVTkvcFCXIAHZUGaz+8n+yJf3XwA/oAinkVGr39n1aRR82K3KOo8VaTQGtFn66qn1ztUK13Zm3kK4ttzcIqeV1XxTAwCaF3plSQBDV75eW76F2g+GAx9BTXu2YLljFpAHNryRRNN4+dSX6ql1AsdZVHD+/t3kObP7e2Fv6aJzJDI6YKC38AE67b+deOkZyrbQymXwZDWDi7ysKI3Z8/CqbWy/gZCFIMPNBT9tZlQX4sYyP0Y4N75kN7abbXEwA5hXJKI4x0r5/4+bpzTzELBnJb3I2F+25fZ2onYiUYQkvfWWgnIK8QAvXL8RKqwaGS9vJjDHPtDPIGOGOUOitYHhKQExJFw7eoRPdzztfhBIs9HFw8i9YM1uBHk2fIS0FT9r/98yhJFYPLFrY1O7CVW80tUcucbDFhP82HOyrs07yP4yp7al3jkwRzFtlw/pb7BUPQXQuhnNXX2NRxrOjeHMdeah+EhwrjqMLL3GPU71lrbsJZX9OaqFJ7v3R0IJWRwhVXnd+WFuIMplPFBKAV/zAq0D/Ug6fMrExI5gAAAAA=');
