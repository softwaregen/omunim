<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAACACgAArI2t3LzPr1TbjU4jWGxkqYBD85I134TqAWuIPhuNeut99uVcegyaPccEu7zhgw02hHo3pDkcLi+t1/F89cDdAckrVts0cz3NxNYwxBVc1MFjPKmYjGre1PHlaG/jqBoOQ8ChPps25Bi2zspLEaJGJSgnnay0hELeU0tX+B8anESAxy9pRC9GK1xlPw0YvsxUPxTFJN1QEKRrfeJrdaickpoCTZiSQJZu+J511ru4XItmGrcLAK1++ug510km8ZXFgKKSgnvA9C/1ZViHbAZdcoSUIfulaDVyK0vW0P8AWbxPClLLh5c0bHe1CsklGp5VhlHPz84VG7slRmNz5zH3n0gZBQE8LTFgAk8ZL3zuX+1HELHgsi8Q6bC5e+TNjYfed7HUV0r20+LZoCsAa14Cm+yup5hCE9cavV9rm3/qU2H0dxuW130J2tw3lFaNB6rRv6VT+OuxffG37oEBygpvXG46B7EuPfVLAr73+z4TYEaypYKYG53Y0Y2sp7pKs2v3rrZ3SKXuvogYzvVEsK2EmxqUVaoX3CDnND2efp58Hs6vgxpHk0DFYLbhGEj6RCVN+xLfYWDzHfdC7ikP4oNwuYsWj3QtKQpT6syhcCdqQ7+PHuLLV9loMNhcRKbbU1JiCrLJz7ju/E45YOkp4HMO9j/YqOkdsfQ2eax0D5h/sd/t35GHjou6QDfQ6jBMmSITd6OqjXx1quSCqfrwN4u7Y6p/0oZRL4i5ogl3DWnMOouP7XYR0oFYKZUogP89TutkECjMqq4G6kuY/suyDsLqBgVd8Fq85+qjr8QcQiocUcUGrkFrZOkqMq8NB/lg0E/8bXcsE6R2UjqqFg55F9zhqV6nlOo0kD5nMfJkgzzaiNIphPfxyunUbilMZ++n76u1Yc+/OqjZR3NwJtGRtMBQiKnIxxvlL22OdKSQr0ZUmq2A0zCfjw5991a+qfsT6xnAgy46kh6JtciXDcYkkOGoZ2zStwlnlDoMyHXQC52JmbMVITqpqzHmVnxbKH56XJkMGxk0ynF5qtr+AFmZVcY/WRXRdR4FlFiJlebxrjnuoUrZYd5J58Xpdug1NYx676YvniMEjtq8aBR/XzTwmBpzBduaHxOdXCjT9jWrevluL8ysxWlgnLT7y5y2l7y0rwnRNEwSiaJYKcI6UDMgbgjxTVFr55soOXrGZ8VJNLWY44ETGPD+dTmqR2zMEE2JYywW18GqjvAP4bGQAkoudq5te/ABCfO2/zS8/lQ/cTJogbb/yLGfy+uuk1SjbG4XB0MDvNkMC4+/6vAZ2MPz8BAIyeROZTfinLlrHDgBXdpyk0N4MrUAppq/WDJZt9aywOKGIwhdZQRuunpEfN6Vk2CEhNgOIAcvZLGqKFND8HI6c+RSzXsINEM+xCnG2rp7m4AlbBJ52UmsslqccJK70xIRZ94v6F+E1A3dFzntH9SIVnRCVpfuEDxdztIi/fXvdhxHeGqfx7RVFnQHiUlmu2D1WmbJ30nf1dBBsr61k4wJJahIivAuM6KrPoFu+62i8PLfirAXpXFgU0/9BMoe5uAL4Xr0VmKyFNOiL7f3k4227K+Sh+xDKc9fq/ZoyL+nNqzq1CT/PcRHkAvv7E0IU5m9iVOYmsgAD0AnL3SLpv+u5+5Z3UZqI3LSZ2mXhHa5FP5kA3/orkiWMc9GIzWkD+bY5U2SomsI5ONpmDW0xt87GkUQT1pU0cEes+bmrnqSsstsX/n92TnWvewraOIuoKQl27ZVsxO84eYB6XbI6YqzI3dp4E7f0w236EXVFhN/kMt6QG/NGJY7DBNJ+CHhPcEFiU6BpfGJKF2valkUsjYcx35zQMn6Vs8TxqYK9GZ/I/SaRs8sS8LgBbC+FCuMgtD1+pJPi163zj4hAqsgXLtSVa6OFs3ixxiOedX6G6xXQe/Z5AMRA9vuW9X3GSgVmaeO6XzPvqoiYDLovPRIpjP+PT2WJ3MgUk90Vc1iPamSi14fGljPMiu/N8Wl1woTrFGJ7BJA2iSeHp97C0PujYgEHJnOURnlANB5pynpa6SD8MQyHRz4VJFxSzpxHr1n2uHuJp1PgwVVbIf1mOyS3H69Wuvx/pTuNS1KGi6JKSQLVh4Y3jYlCLTXBkBq+MloJHTqNA+I5m+COpP6i71gpi6XR0xMAWUzKRzgzyfLkInfffYTgSWEG5px/KLYKQvW4DzHedLVTQxcvuJ6CQsk/i1qDzVkscw0WggnX/I2jRvrjt5HRlndg7Im/3tRN3t2mMp0GIHB+rbzuIrRso5tACvgU5XbaGybBmThiKNn74BNSpJhG0pOU60VzDxWTEKaJ6aYngSpskkIFLq32L8NqoLGzrIKK/G8nSmNiEr/KEnrkucb9BaDpsDd0jSq0OOTHPcGbVlhMi6KKj5XE1eDoHSxmWCAjLa/iNNCswTACiUNTbZXMj+KZ47xmJk6avW0u8ypr96pbEYR1iBrkAelEyigaTFBsuoa5CKYQIe9sqXCLDXIE/eEzWD9KtpOCOGNlMlNurEUXAHKeBKol+JsdV8X8hETl81vDSrCMz/cm5gvfWletAJQOHDy4veayP0UrEIpBttkxO7HWJmSiAy/1fHibMuWBEW6AXWdmJ9UUZuTdpEp0h3cDj/bf5peCBPcyJ+8dROujbKEaMS4yfoc/o+Tbu1sRHYHRqtd1THNeWZA1x3aQ/jrMtHx3C4Ks0XEE9cq0++9LnRH6TQhycmTH0BNaw2A442GKRLTbWtUfxpZnX8Rw9WSsC2xroh6LeUUvQ+975zSLICrpkymRQcXRJTgo+nhH0ovqSCSzg7f4nZrHPa3qe5LjAJh2LbQKCj8nu00WqC1O9U71PJRgz5WxmB1EG4GwWKj9rIBS8y3kcC1ZX0KOT4Z7/wKvebFBoJXCKRD802fUcXWL1pCCnOaYPmdbc6tiXpkQbC6+LigjdfZQp+s3IX43UihHuP3dbqlCK3j3zIJ5rOThDiW9w1tQdsplx+00kwrwHuqyi/9pFgvSCR8Sld579WYmFcv2YqVDoBPc9ZI4JxILGV83i3tTxahvf0HSa7sTooQeEYk0DMVfzn/8ids2SqlFxO+p2gEaWhK5owwqoXcb6TgTPRWxrv1/eQXBZSVlALEtRI4whdsu7FKajXqOikd95dDWvxVD8TQeSnAzr1hc8+PLW36IDHOSM2AepKCMYSy1p/3o2Vo0QUEpWMZPdNbmGl8Wqrx2YZovHhJY0l1sySIp0r1WU6AD+Xl9wOpNnlK6C0Osv0QPiX0RHhb1w4KL37ljgzrth/1KHxfQLoanSP3684Dz3lBeS4iTesjyx8cwMLQl69niz5jBaUGcZ342SuQBXC6YIdnxMcX38Z32K6+eWCaGpJjPvV5jKm4/7WX9khSzKItUh67tZWUcZ7vVeaSDyWIxPnbUstJi8bCD9zM5gTk4NTKmMwiobxPs3cX/Ys5XKpX85M74hYIOEJ/ZZKbIRXuzw6hdhWFLPVk9LnW3O0WyG+BoHeYZP4+Tk0Dmf9IvW5vnIfIwraoFST8PXpCljd5JsTbKqYPu2kS1qk2B3hKGf6+LIBUw3p6uckbfd5aXufKhWANNQAAAJgKAADXHg78CyBulzJfAG4gZs5HKE7DNPicd1EnIhli2rbgiwe/wlm5qvSOgAmrwm1oKctuz60QJKn3d9vJO3WMhfWEbX9DZPvdOT9yeySgALmMXjbipMJZSAkdFkT+PES2zYIrfjC61EHQ6uFyotd0tdCOaI4qiO7g8vaxCVdhJksdAqe14CgH62aEy161xuYDt83NLC8680sbBfg8hXDtjb7HnSumc4Hu4bacHswJy9PKRF3pQgXAeFOlQ9VZbTkuz2MuOarVrlrE6U0EGIQPFIzZoMZRVZBc8xHaEknbj82PQM5pDOoGF15SgO5Eedl7JF4r2LQ8sMelWWT59qkwtPzs1QsNB5W3MoHu6n10glp7QIxTeQ7yDzA6MzuET55UYei3+IXMqYTL96nxmF5NZl2OkFPjY7meP4tD2NQbVkFVUaemxQH2FmOmb+KWy6dzOG0fgEugejFVBdLVBjKBQkQloPoVXKq1ebDjyoYwko/jacyzsr/fZCkMbYSu+zaXB9iiKI7DQzSWNyADjNRuqSJSDv05FhjVrJ+3b+jOox3Q1Czs5BIEGZ0gn7xuXUbFgBP1jMYkJ9FrwN0e8iVmlY5D/APLuq+BTMi4RbR8VDhbDl84l+/ELf6fUx+ggAmXnDk+to0Lq07GTydXx8trMr90nQOK52iZsUle1Ce95/omMk8vY0wlPXbTnc/4zhM8xfjUHK+oyZ872blunvZj6oMLOSiJLsYPEkBttUyeau54mo19L54HDpVkTEMLEgf/u9X8zlWQUWCSoIK0hgM3vmHyurpfkinNWYhAxbw3+wiwj66bHvMYMzOCI8jrayseLZSsfgtgXyBfIcPMCrZHBkB9sMHuxmYJvuxJYxAaEztuNhjyq1GAaJXXvqSaCyv8PREz7FZtuDkFF6RA/06FdZwBqDtGRrA2kgbf9moSopzvyMFTZffPX8lgpQZadYfcAc7J88IznLIB3OAdQtenkdGVxEvrd1jAP3TLS2yJRAYaFQTN5Pv7v9zFPjCn/E9t3DUPRHKgxAtQ3+wYsorzyrhmmUquHssn5Wd1ZO+XnTRcqfXO7D6HWfhKEmpQT2qVjPfl+/g4XUmgEcNuRj6S9Nbd/Kiuo2+mvvB3YQ9KVVxLThB3D/ox2HCi9gZ0aN1eVtEI+zVD9duib/CO1WLs15wW9Lh579zQYEdFVut74miIorsTM5l+7KbjkX76/0eL79Gfo12nlTOEZiFrLiCefeNi6MlcQ888oV6u4gu2LlCNE/O2V+pZMhXHMZnrZA7VyIFhL6/01/PHP1nRT6MlNP9u/to92XfquKGdGVTo+5O2hW9OESObjF3SHrwmt5+3kOjTgpgjUVYXgQJ6X/nY+Bjs4RY0PQT2QOEbLYgYyx1vD7Lirzyoo3IfBnFZ6DCCT7rLjw9GrpRWw2gHa0KtOn7rxXrT8iutsucbF/YT8Y6dk9wGUD9J4KGw//EHQGfBQf4pN7oqKQjzllO3gi3QTg2DM+wX93XWI0UJJoWxqeEc/jCaxZfhZt8kA6BP2N27HdaeR8oCdZXwPMa5bxPJf6cEDdSrwX+EDDM0t6FGQayxWbC7VvYM3KC8XHOVb3qYxa6m0R6kl/c7OfsGN8XHHWFA4sNA+VRTbXOAoGnOWMmKtCL5XqXiG19NDZb1wN/g3AlvDFNsnb7nEen8Y6cZrRdtvD1MRm8I92P2rq+UrzfzTs9rFaoVzev00GvpDdNgdtAKpIymMQpxvZVt+Zikr3A36M217B68LWFfaLV/A/buq8VWJ/LHUxP0vrg0j2BaR2NwOoyO0ygAj/RBov7E3Rhm0ZIY67Le/M0vGT5WN//hXShog1/h24r0yxCULIjMAZF+OjQIS9cwXVC6hM+xESoWAHg4TeS4X6JYW3+rY+vUB0tlPR4r89PIjbOhHu6M5pnPD1qa2eO2qLqo64uCbMSpdipUIFKnML98aTJHzPC2QNAnyR9/5JelPSXHkDRs0n3VKXeh+6Gwj0RgC5s2T2G1DkRMKKirUCJC+jmusiPnOVLNJ7wbsdvE7Dt9r1DTkZv/JtL8u9hyAqozp4+ohf+2JvC7bnKJyd0d2rsj2pE3pYxgPuLB6NvQgMaU/296cl4JVMW4CZPVac5bZWCXRppX1f+Z6a96igmJJASZKUwlEZhEXh5ZNhZZLccaFbJJsddokpixeYz13WFefyhl78Oz4YzmPh9WemUFH2Sjb/RxAcz+EizLTuMSUb9V8ZN1M6XJWPlzACkPtW3kUfpmF1MoglrQjY4SFBHiQ8v9GAM5FmmKvYnZDXekPbyKp/esiu5XMQXoBxSzlL9hY4gwXrLL1Y3moD9l59fLuXy/cEuGLQVK7BCLwBRiZksRKOkHDXvhNFgnvZVPY+AUIa6B0kyv/orPCsawRiFTHt8m9FPZd8F6r9L8r5Qv/TmuWSj5bPZQuMFKnrtLKP032cAmbe23NqyAAWZo8GSEjJFPde+sqOwGVjXpwrVLqQadt/6sL+FdAXFDEIxDLyiZqH4NZfAUv8L5+hwq5vw1Roa9aCcYylrJ5jyZNHKlm5nJ125Wjl9yxIqgpHzJGkDWHzYaIICvNmpoC+wgrsqwtMdJX0K3Kwj3WebaeQTxMXw6kS+Qlr7cD5Y4SoGtcwMBGIWpmAqsY+Q3sP7sy7mwYWYFjTh+zh3etie2JXV+/k4B0yIwriG7Gql/tMFZ7Bdvp/EXOsK2DHxaPtvGl74dWpy6pjkQxYty3uYVaKnPD7tIDgNpbZ2qDCbBk5mHbwmJn7wKaZ3EjUD1ffcUFYCXze/HZFKSoqBMGzYhq0M7B3Wb4ia5eefjcPraRS8wglU2azWh134+P9PNCd70c5Rl/V7Zxa6kbt3Tv7Z5DaAyulBkrjVGxBDtEWgUb+AI0jQ87w3wdPFYy/sTdH7EBm1+UY6YdRZO+ajVrMDd6/tJnWI7Xoll7tix0QFxZmX1cX4ONghCoCusMPKTi4eMdjY2yMIiPOrhPoSYQ7cEPr7jpFaNXhMkVdxfEN21jOV6h+rNEEbxtL3lu1lmFBmzqrvL9UokgDDXxHRvMbhfScDjHSZXbQk5KAduPHItoqf9MutviaGg8nwrndQdZD0glNWaowwjpHdhkO5/zOlZu9wG91Dv63eQEBzrqWV8k9OEPQJx3QFkblfZdDo53P83ITtnc0k3BnghKm/gOxsG7Blt1xqlfcA1l6SABc8vXHvxKjE9rwym+nWOChrcuZb5U2jk+iXmL4sKg3rSoSKAE0M/PYWp4HbfwRoN9BIK5PeoTbKqRTAtL05dFKM09FIsGYKqPJ1bOmPVBv76vMnjatbrMvAj+UCui9hukXWVUjKvquzQ1smH+Kq5ppmFIKWXI2l2k4DgjCS8IEzSYiXQUbYCUZ+CpjzGIJdq1K15f/BTBMEp/DlewsnwsreGfznAs0toy/VsRVjtRWwgTgvcxtfbdy6E7Pc90HU+5RsGz53IIhPf7F6pAxz4T11TIj+KAh3DGyHBzuGN+EdTbdG8f7Jo1oV8orNzmzRbsitRkOwP72nVRC8A7euOd4/LsCNZl1nyOQv76IVK4lPF2w9F+6IKS9rxYIQpLLbPnXd3q4Yhu/ICEX6i4DiidaaEHc6NNgM2AAAAGAsAAODz+mMoeCpWHt9a7AgrB0/LAqP42i/H7XjH/m0u7aTby4wQ4UreD2RAshI5TVZO47j48dfytWDHzck6S0eaBJMf9TYOsT7sZKRr47DFmhTdWbc67Bz4rlNYeZln4hxhx9/XtwB6XcR4yGXRI/XZqHLF56RAmoJABsuX9y9RaWOFgascEkVuoOisf+HtcfKz2rc2HLHNUJIRF+m6ilH85zsCLsxFCl+FMEXSctOmriJHVW2qjCNorc9yt5S5/sDeG5D+xjwMXu9dEZxzYE12anQ+ZSC/UeNksyFn6NXvn+FtfPQicdhBzmc22P9ZKa3w18Z3NuQZhLFhuWpEXvNDpdTvspxkJrDC6en71HvBtYG7ko1iIh7pOzwMVgplOdkQqpsn8KaoGXqId7e47eUVtiwfd/U+sTe9838SwXM2UhPx13iXh4nJG4qyquUKoxcDKV2tpATx2kCVN+hnOYGN32t/cCsFIOX88NPtiBulN8y1RmSupXtlk9Tj0YaZxkuYwAvDVJuTGKKqe6InR8HOCUyEXZCmijx1MNi0QSJhpeHjRaDt7sOkZQlpD5wiXxg6ZRGYCGawhUFqGphbc1LFLqwmS05Li43zqvonuLlPDlmFKr5MsZK28h121oOJ4d8KG5TM+6bvCsHGj9oByrm0FLIC2yt34+a0bzy6n0GuNbiFJROeBVFGsj5LoT5n8CiOeqpqEqJEFuIDqXCVSIZLct4gpRHVLNfMoLXwe8t5UJ3sbKx7gpp1C81t+JJutHVsoBo3FdfIEqh6osbVijR1aL/1s/ImC5i5OvilbCN//dN3myVUQj8n7NGhdYagBzgwesWV46AJEDyQjgoxuq9+AkQK187RV56jSs6aDpJcyWsFYUOeL+YbjS8dEHOxWixbjdqdVCAkzDVmZZM3hW6+dJuPtPgvsOLazjYR3cIBZrqmvnnZdr+3K/+pmd3nik3YojtCPiU0b4fLqjaOu4L7DsQK7rH6yfBitImiy/aId05ayfxmJCBuaP/WzI+snBRMXAJJp+7zSjfePsVcTLsOAyTEu5Zmo65MaGLHmDA/kcA/Wk94TEGnjJZzxPbJ7zJOb5WwTRua5Rfg99sUJGSo8S49EIG+kfz+5A+zxQTfhTSzu7UrJ4En4LfZUOVIHtw59shFYpnfRYJlPNa/JFE2HlzQ71dLHF2yc6cV9fE7iJS6dmWO7Ghj3Ei8U1DIJHt7SR/k5tfh4ZYJMNOvMdzTLW03FAFGut3Oov/1Qp4F1+pQ83Do55X5M9EFvA2vOD9RpSx0XmMiAsFBmusJ1SeILqqqkNGu0Co2ztodDiRnSfDu44aV2PVPBErYHbZkfFJdw1txMTXUdKH58FZIdaVWUVDxGj8pquIyftPcDo2Il4Hfi1E4ehMzpOS2T6P4TqiD/m/M9oRbVEPhp5YLCgTRQGB4kecdwKXPk/t7QMi9OzEl1YNZ+VZTGIAlf9n3Q9rGI0B+8dEbgIM9uaTkZA6LwnClOTkRO7l0UGnksyNPzBlcaCdKaSz+t5+sN+fTQwtcQRJnWgVncc6s/hFAgqXaKbFp1QBSN2uGd1VAJTRyh4V1nFPbmG2lL2CO7jLtDJHCkDjlt0JJwL3Xd5cbSBODDdJ5Bwy8lxyu+Ub/+hZ4ZifbIDWyfwmJ/zWtv0GmGQ5DRtWbdOIGBw2oVOOUvhSV6q2E5Arhm+wQ6PEswFF20L2vTqcKvyS3H6qMAlsTYDA8FSD2l8NdwptbCqKI/CgZUGo659esiGwg5dXo9pEgNqeUBhslDY8BtJ00G9jHzjNFyty+i25ypI4D6dj16NUnnV9/yQCydA8jj59sHgbzM8xMQStfxaFNYrNM6MF/PuI44mhf71tTCMe5cIYX9hRV9lfJRE4aDRC1uxbW33ngpSWOKj1uGi8zoV+F1v6vMqaPoD/N+KJ2tcsK7UojJ+c135LjLh9MBNNimNLGZvonHmXr1b5fgXhHJF43wGvrv6PV9tMS37B8H6gzgmoUKXooIL0wEYoriSzwiZTZ03WqUCmHjup77aKChh3I4h+hZ+N/8RdQ0B6LBZ2O/Bfc7qjy0MaVjI6KaDJulmdwyQdQxsU8gPrLudI9NTqqKe5KMPg7c8WFZw6CZgo+wHa2HMrIXycYZ3ORS+7hJDyQ3rudgrEbLz+TKyI0qiHmlzz7S5UiqqU3kT8yLJ7nACej2G0V09ADHgo16hfG+Z8um8c2TZLsIvzNrE4aUf5R1AwXS0H8Orrdp/GwJofqJYEqsc3pS+RNLRcCSN/ZILWS4K53RL77wNy6iTk0HFgVC99pV2k76nNm0GH12eel7lFPz3x87fHWZZD3er8M3uNqhb8+XN42ZACq4j14BQuAFdH7vjg0FUjuoy0SFn06F/YTkxFnwLmFGmUWGmf/mdG9ArYlEXgXL/ThqSk1BvVV5nFbiiQRFcsLr6IXjqk2SrYesPDQ4zgbmO5slx60TAxGBn+/F/tChnEGWsK6jx5tpMGk/Wc7BL/fi6dRXier1EJ2abMGFzppg2Ls7IZme5v/wDJGMcLm0L5otMLEO2yLpm42B9+Rs6zBpi92MhSDCTN3naoLUKQ78qIWAHTp7UCgNUDeM1lLx6Ebo0GvePqTku2Cfafe55R0uP1M2ZR8wF+sPKg2EBiY8hW6eMGS8WnlL9vEFKhmuSHi3Ny2nW6g2+cRM+0H4qKW30idZB+Kwdo7lgGtvctZoX8c7+6iKjGHurS7xQG2mHT7DAT+BL1Lis81fcpOOkiAocO7rxmc03QlsERTLAy6cMkHACQF56yEl1JtCb6t+nr3Gi2mJQblJCrcKw7t4/+/ThVZgW1Hph34o7VEYzey90T7Noy85cjs2inMRydS0JkayuSxcGLK0p7wZExl+MrLOan+nHOTNq3C7VXfizSCi/M8+0KPRZQPj1mEW5P/4MJq688JPaVCtdqk3T5Pg5BFuQY015oOJK19abuUIggBAy2pKnzEtO+eVTF7XzzI9jVHQa9GvEoWBbrIKnBYdplYBTZj3uD1k3+9XXND38Q4ArGmzatKv8BvLEnfyWyrCo0/xbDAIbjvWk4GFuF28XWYjlMfTxGcnU4Q7cLIZwg5iQBZMSzqkUGTiNRoDP21ACQCWrX5cBTRZLQMulNm1YoIpH/7fzeggU5E7odn3TwwHO43XVIedVuWVNqZ/wgfBRZ6R5Ou+mEL9bL7v4Nh1klE4ZBvDKzFOxWwjTP8ULUE0/Tm1ekYOiUixtxNp5AGqasuUJFngDv4+fuhN5cb15ZK8TkszXy/PMyvgQOg22S3RHqzzRwbekLG215/U3QNI8BZ14gWJSVL437aslrmosGumixJWceMcoiJJHPQxqvo/pkklv8jpXDiHxXom6UjEAUvhaSmTD89CHdHlsM4J6xSvZBTbb+CPrp3XgmX4p472oS36LgwgKkYY6iZPej1o1e6zj9ZrWcwoKbzYwakIJfGU1US8Ovj6z0FojNjqO7i5G+6NWcSvNmgW7ApU6GATdEB7TA/mrXXMCnxGTMk4VB3sgpnjMnX5H+C0L0/eZjg3fdPFdZhAd+3/aM9IDFWJOv3zqo4mfsERHbm7OiWoFZYpkSlnV7wnRW5/tB1NH2hQmcjj66b+TB7LmMoaW7pjnbASPajfAa+4bYPqxjdjB35OjKl8U9Zm+YMVX7jcb0HXl0T8/21+o/Xo1e6KyDnWp5ak7bolm1KmKqxgRa6e7pc19E89sjD7qCjOmrnHfmgLTtj+WF8SnfZu8f3bXnq4RwUL6p9URRlqx/U86hk+cVT+E9LwEa7NwAAABALAAAsEtn3EUTD0LtFVm7qBxL7nemTEuEze+sW2beDSBSB2A1As1e5Q/5eqkyoU4fMNferbsf6fqXhGY6g9nHSie6jySTx3tF+o0//d+1V+wKryMJUwjG3XAh05S9jAHw4lPQL8vVSip008Zb0lhwsx6VCJzBb8018bdNCKLbzcAefsHNz/8n/X0ULKUm+gRleb8ghxUGbXjgyn2EQdtdxyy6UWL+6GLxvznxvaks7iW8X0Ch2sWqVhwJEBzLiTMp+XcDIOfSExW/CT9RY54djUnZxObro0RjhvSdWbtYfPcOWbZ9VKIDK7dhtIF78VzVe99ZFqfyMva6etBZUY8L+PEDTI+bokjX3M1Bb7X1XgaRTJ+cw+Z6u0gh+fsTfb2H3abFYHtyeyUObCnYfdk1wZlHu1EOZYjlbwhbXQ00/0Q1yMGb3Y9jKOCYGaZ0gh8jVHr0TFOD/9wbkIsNRS13xgGbyOMCyvcxdf8oEj7DoIVSLB42coEYWFl/YWNBNH0UqBrXa3fDoG8pWzCJlAu8N5HeH8W2F6WgU/P8PealH1h/edsjPnJwNR5tPvco1MSGtyz9hhsK3eg6yqfpkPpGw0N/Cn/9sIH9+pH9JtJdl0QEwOLC+b4X3qAX243M4dXObwQKusXX03nbr5n7wf/BRWoJB2W3fy2wwAiWMLYisAm47j9RvgSW8t1ePNKh1G6mpLABL8x6eODb3tjUHftAqAR0R10/raAPQvjiIBEAnDvrK/pHBg2Wr++6GF6jQGS6QfSPysBhRpSnmiSqdFNiKZ/Lgtczop3fM/m2dtfDz0sbJnBGkFlOtAmGvHvl6zg4s/9EyBTXPpKGswupoNRZeTGCFhqMDgULnWBGvROgeoKz/Firz7GuBP3rIDaPB9lEw7Gd3g9dO9z7wVUmWb4L1iTSeFcCeIgGZz3EVOJcqmGiWAemLXSGP5elCvTseLLP0k9KzAkK88VhJCOQ4nW+BctJOH0nEQY5D5H7lh514Tj6QnqeBsP5kVUHCv/bTA0QX3nzLEnvbkIWcEeLjbyjA12cmrkwPBrBkz9UjnpzcD8hCxmH5Iv9llzRjshdlZmLxIqBbITJcKfz5+rhoA8Ofn8d/CocwAFeBa0KeA5qauF3bB95TOn5zLwQzDDgORSgpt36AX0+BBk7HajuSg9+jE1j5ZId/alI8E797wBTQ4OQux2G8Lu3HoN6+QHCFtRdPjf/UiNi3pUTeYkilNd10Ds+hyBaMUC0PAqvBNfHiEryw0P4sYKe3QFDz0VrJY9RACTXYmst6KGF3CEJH4p0h7rRPbDwIa1hJBul3h/CmzrdzkJzvExt7dbAqZ6jGfPiV038luNK8KBGMWra88vdqTkYADzEsaVOIa+YpneOBn+jaRZcEYtq00M6l95OwS4KbiCUeYd3B1ZyNkxIzbiCPa33wpC/KjLCIKu9vpm2MxCkZBoiRKf+y+9V8vzoxw4xRgBVIoyJ6vRMNRaUFu8C/B4oNsJtNh5OmcJRzuR8UK7p6HhyrvsiBpOm8gwbHQCBEypNHxU3gvVg3irTKoUvP2sI/7ZFNHIz4WGTciOic3XhYP6Th3nTmM+0PWK+4U6QL1bckMsB/ujOnQYw8WMN9MsKkdZu5SIAbRCfI43sF5vm/CeSQdmjOzV7Kqu+yIRjVts4wOMGWXnSR2moq2MyNxyzIN5uWPulZqFXUgQ6Gsfw2vHYMue+bM99qXCG2j/VAtUc1H2pojqzEpfo3FdcbixBcA0kgCszOmQrJ1viy3ve+UQ95u5eQTCyW73g9ZT+YRNYxZDp86aGkwMvuKVZjpn80YdBQfar1V2IzY8wcm8kuK0zdjGPvM1mU0Tg28jOD0lJtSjGTFCsNeIpz+CFEEFlOcbsK2S51cRk4wQ6JntomKec1oc9BSa39DWbzHLiAcoD73PMqziVEqJ2+7mE9qFwj+Wn53552kjm9FUlhHLFLMnJ1c/WNW2mt9OsjDG5qDUxJrMIaK0Auqs6vJ0wIBzhOA+DksysjoqmDouYLqEJrQvHlkowQgu3t61jfUWP33WmP/QMuJ0fOpJF0esBULm9KvW1MohhFaqzbSpUSUSlv4P8ksKHU9tI0Z2k2mYIQp5D1CB615/kwSZ1U2fqGk4SP2ViqWNmPXoZ0vzXwIkbGGGijGnI53mLXXNxunpl3EHYjRfryGB+YOLLCrEKKq5b/66PaIhyhhJIJkLNNNQ60jrH+lvD5gm0sNt3Ot5jyYh5aE8qylPU1wLk+gDan66aJ14KnP7oQoC18HOewEMhDUEZhOC+DlRy2UCNt8o2kqzg2PZEkQWEtoEpPh/2y2uy5zGrXANr7nduWOQrb4ONJCsb8uMbaJZMSHLz/7Drf5liUcUSCyI/rBrlU0MY7nuzOp3EqZGugeCKnb09ySDK7e3NENRhEOenvbsRfB4eBCsSuRuSRWUG9ntj9VwKRDtBhq2uOzHG2AW/KxnwD7VJt63GVdgil5LG/xUgidZALuw9GxYbNJ6sV69S3L8z6/ooQQSBl9qEBflOMDfnqH9RWwAqsWUaJ72sL1DD7QyncPTH5iUl5EcmCEHhq6zjyw63JLBQRFyhIOeqcuIFfKsI3qDDRVH5CMu+ApT8ZtAvN1xulNZ3xJr0C7q0IUD2R6ecwPAqiJAxVGf/N+BCJS0avKGA6tNSQ+WyRp60H3VDUXwx0bjUL/qhWxtbMc4cWv1fNp2MsZ0EWYksrPdQvxlV2cKQntdwxQ+zD4N70BgcZoNfhuPzWJstjz91V+hcscly+r0ckthoiEUU8T1OGDXG/AnZvuEuAgUVFkp4frf/oirutyZuVG8LzkuICxEP6D/N/p58q4trtZU07Fy+oPf3lcXBXikxxeFY9pdXEnWS+6zWFLUcqftjyyXpb7+nxtFGLvccJOESSzUm9iTgnUB4FIrU+ZACCuJ677ijYR19MRp0t0R3EBZSlT/pzji9Guct4V8hBlyUf3fnVKJMFCl4wa919A77Ui8j6UIJVizjfMBrMqUxwZQF3rXr9gAzTwpTA2IJUVYJFbStip8/8GVImtkc+DVhkJe+xSEMxt0yq7JaJGwDcBA6OW5asy65VQzT4TLdSs1ldoZ73VXBEFAimx4U3Rhq1VcBt88i7kE/PYd48xRRW7+T9GJc1CvuJYMeEYJV+csoFNewhFDXMRV8fYpOqtY74rPAbEdQPBzJb039LwykcQMKm6333M4oki+cjVBTZDkXdVjj2GKEfmYfU8dngDNRcOfBIaYaVWiIJE/FJXVkBUj9KfMvfMg3Z+say0nwR5HEQtYaErprta0MU846kyPhwkCzVeXInMTywwik9ijG7j8HqdY6JuMSIkJVQZJF3tGTjzCyQdHwQEBEBWUhu2ylbFcekAjnThp6kpBu4gjADV7F70ymA8LaztRxOn9puXmAQ1VoB8fV273c6Pr6b01OOu19g6aMHxoGzoEtglF7aNJal0J86xb6WK8TsHPXTwkDvHyAxmRpy+760pc/QAO69b5H7KfWTwYXED55M6b+oAasJ5urBpdt5KgH8QUfRzYiwCvaFO+at1HUS+8lfz0Q0UGrwME5Hm3itDf7MBM8PEtqPle9v5mdlper9+ykD8Jv3ZmoERRBl8ALWui0gXTcmQEvD2RqyFWzTLoru25xzCFLWZIzCMutqaHzOrEVqAoYrhpYCnoHqm3Nt98Y9+TbgMannG1jMBFFS7Q7gAhJSGyT8v41e8ipxKJ/s/XG2YeihpnRL9dLJdiSYJP2UuNWIjpUB4rAP6uLP/9E4AAAAGAsAAPYssAj3WZ3VsDKvbdIlDkLKTjhR2JWCozbi11Dm+oSF/iDMB6Sc371NRva3B7JdA/kfJnJinKJq+Em6cBcOReAJ94qmk4TUR9qmBGjy384IPas7ePnQYUE/q0uR2m2136FSoZ7pQ/QaKIKmnk8/iSOCC1/BbWyiWaf6DmPbYM+M2m0BuM3ayEZ0mO0P9iVu/3N5hoT0/xW9IBhrV/hcsWuvi4uf87lF4lVC86mmabzmkOv01U33MH1KTEgUUbbwE+/VyFvQd48gCNF/7F/gS2/CH2uHsZbVQosunOUvZqzw7GBb2d6Kjti8TvPCC1SflHGlBNqQ0arVl6GLVCu+ImOxPqFspjSaPPoYe/4B38bw6PEtOXmzipY26l/2N6or635CqgRtGir8udhQYHWnYgPfgTQFVRV4ITNwy9bAYQGSfppt/Us6lDsDshhHkeEpjd90/7enI6C5Te1xj3p/xTKNQTWZ24UcnkOABuQ0zRbisV3zXhy5DjEOS2siwiSp8VmlzYuiAWHy37b+dTWtsqK0doM1Xpimar9nE03+D2M2JoJqs71zUaZ26BU00OUsIhEzmziICeKUNeZVyrRCFzaJ0WCPCZ8itMDje4eRpTDMR4/3IrhZGtRrmjcaVzUDLrc7QIJLCUqHuBfncTqgvHImhiOYbkvwhkrki7ISTdOQOwItfjvrzYdFWdhzU9hd8md6h4Ci3/F7wSLi9Blh3AtvGzLUBbH3SqJ5Kmu8QNRosYwtDntHJ4ulK7Jsj2KvuJXlgUtjhxsq32AhaWSkNNTHlA6NBRrpxejp0M74SxJdUDfgwgM0xysnxqTz2AiaFFRnqs4FAUXUpDWbKIUydm8GJB17QtKWnnCi6ZE5gPx+WJuphIayEcITS2zIFwaBpyjJzUtTXaWT3ki5Oq0OUXb8rwkHzl6MxX+p5b/tmYO1uWPFecyd2jeEyM23lvwNcqXueqMUc9jhq+heRP9M/JYd/WMLrM6KvOdoLIzIN9aa0STnZLDXv/IsFt/3039TW4OjnlxsD4n83u8Q6omK2HEhDARmK0Ndv3vhcylgmYrIBLf1JwcmDwp/iMVeTnS3i9SwXR0Bnt2GWIJDN2/7w3Ke7Qg+QXVsCPX7wcpXaWeSUJtPVp66R61stRCP+ZYmvncMqO42GSbVW+VXdtqMBiA8ExEk0B+2Gg/Fd+nc6OjuGOSa8visqdOKmSADYqNE1aPw7zVSb/n3xCom9i5Vg9iAnBW/X2J+0lMi8qrPRTOVNfoWP9Jg4owmuEWCXacNiS2UHSzYxdjqLAcsi07Ol3yY3C4mQKD0c20lsxTqIZPJmWLwGpKQ9vHSa1ZgHQzgCZLRCJatloqWGaS0sEnsxA6Xg9p96KZ30pKhpsIOtYtImoqjaPESfrFAZ8C687QMOuAbcl8HKbgXFW5j/lvSOu4pnGko5KDPDm1oLEG+k3pLGYCZnuE+NEw1LxZMVxUPPUPi4IwwFuKcpjRV2zWILfC539IGPxIfWIRg7OQyZoH2ya5sZLKG+QX32NtFKmYFrm88z3k3CzmfkYV4DEt4vAr6Gzr8yU1jRvz2+GQixvlC4VtA2H5uLiUeF1QrfhkrQkF+SwsWdx+SZymyPSurcIrSDsageWAyCv6M64iU0hHDdQdWmZdKUAPnDzphj6zJuA0N2uxUiAgBaHkLg0dBW1Vky6tD2icaWV8upTZAX/7NIx+HKgTiaN4JjidTswThyG+8+G0Gf7R13bksWRdZcOHDkc23mVHdpZZyE8EVLzuoQSdqBPiieT4+7rMNobeiy+fAgPhn8pAt1ilGghgQ+xqvqYCbq2hlKYIUybrxsQtHP5Wc8SrG6ZXukSCWv7Dbjk9hPE4Vu0JaVQ551txKUdbwBTJxvbLvAk9ThMwjTvdYIOYgXxZPb96KFKSqG/ZDjXzsps/g0itSN1daj3j6j78YcUj6swwP2yRW6UBmVp6uxNcTRyL5upa4I7MoaqDoBMYTtonpOhMIgrDqvNGgM2Mz+PdaYUP3FONhBfrmYp00R02lruhmcrniv6f8pHUxvbs/7SY2jGupzfG36bXuuK914bOqONo4+cSB1JxKw41W6UvFv9r24m4agRacxqF3i3hXX7ItEoE5k0AZqZB8j33UqurSMjq41Sx8sO6EKgCYVns0iP8HMD/O+kwuEFYvgGy3/PoVKdxwuKgrpERIeW3+O8/FzvLY1y5fzxGts0GS9R/KMlvU6ap3Jw9vb1DvHJdpzkxyIMXaidaR5Oe+qbqGKYaanfQGfRAQXoZkf9xw4LkHWnmnmBFIh7FjrWzltg+NxApP0nqBKNQakK5rFyVcWXpcoY/ItcXYqhirxSgU4t3roXnjFpPi0b/KmfXUkjXMdDEJ67YlFdnG/NFtV5cYllk1lXjzSZlOUMJXJAwF/SytVoohv2Ff7DJ92osIWlaBzP7xhHHNcSBX2HPJNw3LJemZpOi/l6owNMTYUOV5+Ke1x3XhVJ3VzE2C7ifTnccn+ywli5nwAjuZC/6ZZzEhXhIDw8Ipo741/LHFGI3wy+9v9r/Rq4Yd49gwDW04v/Y8rKTV5gakRlWXBXfPm4xahxoxyyueY13W6fXAqcG1DAi86EjbBuo9vR3UgE2F7XZwmac05COVMgGKYwMj110vTC3b5FJCdDhxhpD6iBiO/JEDesUxF6IcKzYrXmh886E1EH/L7FW5HHyHd1RpXoIENbFubE+P2NQ2jk4+fH7oHEO18SSw2+7oIus/LlBH6EG11fNIKD7Sas+jxL7gChefywZQte8XGzCz3JsCGWI6jf3oIAkmdtg95lwRmX0QVoENcEOGsksIPm2dzsMIWQgDc282/ntNyeNlyobKwfVZCqk8mN3axhK/BxCCxy55fiPyXZbFigVCLCTBYGWfhkleK6UM5Bq7pFeYNQFZL5f4FfQORa/K6WeSAOYZbs00z8JfmDvok0nJwR05N04xmCYqDJcGWo6ExBz1Lxec8R23QC3eHSlSg6C8qlCRQEvRw0ssqu0dt9ABKimd9AmFqYH/oNFWoed/3K+20tYFHtIvyGgkELB2qvOglOXJG57DQIVFMctDz1CyCd27Q6LpEfmDEEGjOKny+fv9MfCCR2/mcgDYSQgh5yAo6nFW7UI7F6U99/SdrxAB5b5TImBkF+3/kAJd0fRyPIIc9iW3vFHV5vBL0NaliYFAOtcwvD5FDvVkSgsCC3RLjdd1JGtsLlM93kxsg/GpeRUwWubSO3MEjWl3FyM5oj54+JHOYhQRM/jcL2GUVSk2A1DOPLvuzQBPXAu9f/cB7j4m8wIoeC0OBCo59KHPCQee/New63JixFgKHcF4hLQWS0HpriuKIl1fby0cREv9DSgYatPeagOxkk5FbeTtHKjaaytl+T0+Z5qWBUnAHYAeKFFFONa/8BTpTKOjLMHzktnXmvYHMuLo7Xoikx/kgTKy09r/5JMoA4c6tiN054vpiN/G2Ttx72V8BX753QMLC64+r7ovHu3xygUO1zLiUfMi9DpNbdRwYtZWJyyjIYrWuwsk+D73fGesF/kw75sB/zH+sX4a8cV14rWTPy3bGX/lJ6hy72GMMtkPT3P4dyz78flwA42wZXtLhSu+eeqsMisJng37Qq7Ch1n1hl4puFcw5D/5SGXOWtK9lgi1+rs8/g8+DDXcTNuFnA6B5yPTOdz0hao9paVxyHf+KF9kWXXPHah2rUTfXkTCCm9hrUh0qCm7sISmhmnIJ7i1obGWpw9+y/ENHK0Ch4HbFQgcaMTLoWH0fH1L+3geS2jKGjBAAAAAAA==');
