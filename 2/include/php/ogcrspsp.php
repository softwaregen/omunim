<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('59EA6C618D682B20AAQAAAAWAAAABIgAAACABAAAAAAAAAD/vrSy8cw3IN3yoLSTNtjsNRXb0K1HKXPVkW+qa+aAxaXozTvKeTan0o5lV+zLiOKNIFR0hhDx9m5StPbYhbULAVhnLvPROQ07SRA9P9/MrTVz3lLOXXN9XTdOFouLoysKFXWu7cLWitcCFSJ8we1QgpEVyQfSfqBmE6ouI/bB5jI4VqPPfDkAwjQAAAAIBAAAJa559MJFSprtpLG/9dQTzGasFl5hNs1wCp2yKxTZfNWtMHXYbE2p0Gi78J++UKAMOno9PJQfRm83eecmFCZUv4QFo3pgdqAQQyMB//dFF2hhvC2Vf61xZkjcTNmwjdswooSy7mVex5s4TYrZuunXUMaKCWOo7ex6r35jY64WHeWxJgUVDCuFJEJ5p+y8Pgp06rCk9+Lv+sB51OWcU1X30BJzoMBd/aru1q1fy7E4iXO3gYEwnI/AyZ3oz84Us6uccHqxGMksLa3DnoQmiGgYlDpYVIKWTBP7FOXBbLGzl/p6/fAsPP6DOQrRd3VzF+hRsI0tmfR+p4M9wbJmiuuqtazxfZjlwZQ7kVKN90PiwNTwKAJVGoZsHovmPD2V7VOk4KQXUhOjkl/Vg2CtED6PaTXdHaRjBo0XLnQYHmm1EIr4v+k24upqJDiRnrPja9lTkHwadkfnI373JiTzGW1j+N9cxrLG+wNkbqjDA5AZYq2XEI5m2E5lyt+Bdt3TH9sG8S+jfuai8NwnOrXujBYaE+PCFiOJOauKmzu4T4bEY0bs2RAbU1Ivv5hYEXYU0esOELr3Z/TUgkvRwXIRK6ctsbYlPAfyJhljOlqlIWnaJzPM7LfoZZ2b84I/LNpFLNDq0H4l3ulQeS85WQFiIW1Lm95Ga9fh5QJmQn4fM54KNzTIev++MxIwc6sb9LhYA2dnbEHcejKd7kLol+b05pmu7F+3TukIowSGMzPF29Uc4uDxiUWLq85KNoOcrVTh13GlPBOQ48RKh4CH/YApB3rzMqSPD2lzqndIzGy2s42kO7uJDksdFnchdKXubYXkt2/aGoJY+2w81zEn0zsisoTrY+W2MaK5OHAzOt7mAPorASu5wkOYKojyedSubDrLlObDafzOOPnIb82ZpMnmwAnDlxhViwJ/vle6GgxhoVV4cBUJftjcACZTBfpvAA0iClkm+PabnNHITrz39J/EpKngN4EjYozpbr0B8ayqccXG1b8tdzOIJMk0QruC0XQusUj6oDgg4c1ZUcYzO7yVm/KcNcrSEEvAiEWI1Ha8/MPmrMkRdlsP2sDdnV7FbnVG8adnL/up+Vixi8/D6WPBAgLeZ3XtQkqjwQE7sRWM0facHYuALPUd+15VFdc7i5LVb+ZxQx4DYniFtz0C2j1vgeumRXf2EJOfkQzTPa6Wz/kq0RoMCoMSjUA2HNgS5PawvX02FPwIZeZKgT7MVFFVqqHv+khKQTNfOJSiMtFaBzsoEeTdHi/sOBWmvgqRED+13Aw/LlpYA8CIbgHFotGx2G+PwGpSfqRYPL4H4FeaVMS2orm3DfZ4Ra8h1CydPmOTqBYeSAHbvxFeAdw0MDu8GOLRin1KrC8W1+pONQAAAPADAABJmkm1D9zc7swj+CR/+gihAQ9Jtqr/moL7XQVTfx7vABYnHhGvGK/y3UEJQmVtvO7hMHnnGlO2sENS0lNgI+Q2KMRzG4AxUQFDzwXCPYPlf5ybdgcu4uhNr1LktAMutOZJ6RZwOkV/+gOaoV7aTDm2MNrt/x5HVM0PNlYFAKqEKmAlBvzFc0JAEnoieeBMa67MxaT9hjwU0hOcSRyocp9f878WdjHY/iqhdddmwYG/f2ozbidnXnJ7QxLm9M+Qi5/82Q7jpgg25nfekqbbfz7OnwVrWJLXTCfFcVL8PMqEXBgnt2p59XP/QQb/aJUkaCcHm1I2/H3oEku4kTQosqbrm4/Lw2MwO5Uoej8bxucgBNEoGG8le2x3Xij8A0kZJHq5liQ6nhkQZqO9gPMBGZLkNbAMDBU7W+ciIh9q4NKFFMj7wX/624gzdwllnr2stF6BSFolW2Q/PTG7zCDODaMq/dipDAJl9hr7swTktaQJorzyk2knkXXXxAxZFbQySAToGDeKvOL8+nxj+Sx3nZSQA44W+RRs7BN3G6fygTarNKXonVopmSx1OgtEGBg1RUyPNGeOA3nQG8oRfFdQsBw6AN8AyJDA10Kr3E8fnyNd/idB51eLp4hyLbmogCdBfkozCVP52V9kr6cxPh2DcPbtfCuMYvGKMv8rCf6wcD0iJMpgWjBh5YPjujH2bhKlz6AGmGNEo0o7c2V5AME7OnvkVX2HLEHY+eU54oPpGfrOi4g3jUYPyr9SSZhlsmoEPSF6OdrMFrUP/Ft8TW7wKHTERk9x3PMct1oIAFehy7dWRRHc48nLbjcnwek/+vkKis66VXZ/RPxV7R0KPUlZ6/ZCSuXB2SIpJhGfKZtbc11T/ZXZZcRIpNdHD4uo5JLJkmKHVBfzdxPx++nNFqaFip+0X4Oft8WeF8Rp4ry3b90V7TGUqAVgQFw71gWsGltX349hVBHo6v7qt7xsLOFJdRyKm6QpHKt3Mm4pb3LCA11rGgc+SCYsfcQuCPAaNxfWzyvwTS19b+HTlRBlD92pT15FyMKjMZKx+Jm92Dd+JsbcRqBbrgREiQvQSwXHXO62nv2upqDvPD57cizNYV7zQ7W0pzR30eVFWoj8UERoRju2uL2CHQcJRF7ARvtbG3NNbJqsmVo9Hdt14HSEHc4ER7ON7ciMuoFyZF/2L2UIZ4hXt+32vzSE7z+0Z+iuqK7j+hXh0fGaae4tO15VBItWAipTnfWhW+7bPD3JBa+dCTQK50WFTubxU4YHprJoEIR/aHvIxCFOk6fP0Lpbax5Y5rYKwQOLOHRkIfabt4pj2SoDFzqVkxlyEAVBg5Nf0f2NO+k2AAAA+AMAAKSDvxPfWIgHYlFt96kTx/SWCwLDohp/WAej7Pfe4Zvu01Q6Xf5Ttv021JSU4f2B4lahnp+0xIwFA65MWqyZrx+pEhCuD8GpaTjzxW1Q7K1PHKfFubikflhrPVJehVeeisWFer0DPjuCMJeNXWcGWeEVczbP7s6hCqszOQ72CB6cXQHSt3R6BjLi7hY3v+SJVGrHCi2BFw2W1DwZXsOdVTRME9v8Oq9V0zS7X4/TFzUYkdG03eM1fWX9Rw0mjGanIS/Q14AlR7BFanrxLJP6Eupi5Ui1vzocxNe0he/LsggEFr7hxXC4hWH9c+ZxGaaPscTc8N2EYLp7mkEBsIypIRcgEwXTHf5pVdKl0arum5igbAB4YbHYC/3vqVFIB+13x3sFeiQivTkat8Gs/Ypp9nc/HfMzXI6rOo1vjzn95AUUOSXIwL5lrSgpggMoYoo2PpIXrllML4+VtMx4iFp+pDDQ+UdpbRwt76lVlgE5Yr+fKWSrfcpNy4Ghrbc6SqTA9pRLB9hKHvwCCKn00TAy8QHNWdPRH7o3eecLO5OP8+FKPlhSTkDYDMfJY8QJbSK3JBLXxTZfvdkrrR0Ds8HZ8IhRRhOPIiuLO7yEF/KjcMvg6o6kQHnkAsKHqZFrwqdj0kUqOeYcnuszMbTyN+U2fzEQMJb1PNIq53hF1H+FOXg1Q0TePQnTyGOK5x/QzI3QnqZ2kYX1a4txazfMug7N+cDJjhs88L0WLkSWg4odWkfC8N3swKjFebZjlbQHbfcdVzLDLQIOj8KutU36K5N+6PFIGyjrib27F7QcFDzmb2MELtjmJJJ7V7inJo0kMk8mR7XHI2apaUNGx44T1uNP5zFniEceKgGniVV8Q4zysZNWvSFQsnoxsIN1FU/LR6m/652mlEm1TAvv7MyjMbjT3SeVQxtnMEva2dLvILJ0MjuHswWSqmjoz77+8Hx76lk0lAjItKC/3ppncB4+0H8NfnZZTzENy6xh/pIQj/LLSTXBhXf5JZ6nsM+uVcmXVefIMiCaoLHiRM2o+yxuS7arYY7QRZMSo+9YApaU+sYQ14Aa5CbDVpXX5MZylIWFB8vuwVrkonQNrmO2FCTm6V1UQMrcCgaWySKSEJ8PCZnTvdCEzHDl6Y9o0jVaWfcu2+ze08WhMgt+pgOqnLlwc7uw2P1szvuCPDSAq5eVk3y25H14rb/uyzdxuWXPjlNXQfEmTqpSkTMkcmmlS7aLLq8EEgt2k22hjDv2WGUUXpqX75QLFGxOW+3YrhmV4t63pB31kgP1sZ4wluvBSrVDVL+psQkh8XPh+lNVO0CFpoIG0dEJoQt3yqKO5c4/QgCi9hhBAZYSnpWu2Qg3NwAAAAAEAAAX9ASZFcOBg7TodDbGCdMcDe6X8kaabrbdhE1PL9pFymh+AlrZER1gCuBzYVY1rca17my2FAuQXhhV4OkscRq5lBx5QYEEjxclx3L5tP8IEYJfujWEZrDu0P9Uk1qAz6aXrW5sJoCXazVuVwtxIlnZsf7ipOi/EMoUHXkQizzMJJhI2Ov3JjhfgcO2NlT3iW7vLic7c5ymwDrh5eUvWf8KZEfh++8RglIV7+GU2ZQFpcWgaUR3nGO9xDbbVbX+aAI2LU7YfJ1iOnVgGcJyeUSIrp+TQ6HC27R8Yng4IT1+dDWGFC/Dd/3ZNGXp6W1e4Ww1up4x4QEcLixqjO+ym0e3gIvhlaDXTkgvr+/P2fsgcz9LiKiLW5QGswkD7T3w+xylfV+Uwr77oAOl8xHLyDw8D0kgwkPqVe5QHyq3NU3AB0q9Cf3gmjOfGyTrlicFsd4v93XYC+/lvDQhZtcOaEcxYmzJyQmthR6JeQh91wmT6mwxolTFymDYuDatV1bwDiqCaE8srseOoujtvZdvfUfJa5HsvWa+mN2YRu7Rr9oB+dj0eBw+R/hkitPZlU9GpNN03c4WQdAFAiCFoX29yc30x2uQ1V8k1xkIhuMe1F0a4Dux/PFrTgiPTpT5chVPkHszJdglhE8h1Jz24npKwbQ6RPw8lJeogFL9SYLPTghYtl8/Tw/oq5M0EyLbn2ViqdLQLn+YhZFkQQRN4PSQxXiFkuqmhBe02HSMwcJRImaRz+7/Ki4zizU14JeJNultGPaRznauEIVN1kLb0PVWFMqOrghviJZOaiNzjYjvaowr6hk/m7lCcZRnbHEnmjhIeVRnhLfehkOXJ5kkWjW6IWLgcZqs/99LvysfLmr6UaBoDlAXA3NQmlQNBL7SnvBVpMM0xwtoirVdnEl4KONj2dovidZN9tdRUimzeM59oA7ymxesbrff4ZurN54ouMiMAv7PFbi7YdUzqexR0LtkQZWuTnLXmYUprLQbcEzHdhlrQH7PgK/mmwnAejuTq5GmYOWFKof2P6xtt04g1dI5d5h4fcc6zmUAYKDDmpcEHh3dRy9NUDsv41bWwhWhMXo2esVl2dTYnu5URmRQz8hZj1oVFT/vuX1MuGbqECGBPWfvRJDjB3B6Pzxx9ZXA/JUXHRJd40bEKYTi/AOi4Hj4axLTPZ+6XYo3LQuIwN2p8X/+yxv+bDyoaQJVm2X6X+q6DGd3pFwORKm3lucIcBYJ7ZLG1p1/y9JPCW8+SJyUIQ8Iu3yGW8EXk9t/D7EjhJtcGdI1XSMU0S6KvgPBfBM+uT6miRO5KHVbZL6E3+UJ3OKUjdRvH9V493U+3lor+1NJyuTVycOr0zzP2h/K8gek/ybkOAAAAAAEAACSgiteipvyg5wab0wJTXIydWmFqqW1lgXb5KvdyLWokqtiVRyBktrajC7DY4JSo6t3A3QFnSbfZuWSSIPSYXbocrUiC7JE+mwFMCSMphmBF+ab2FDXIzsZCbdpDVKgRJmkgvAdchsGu+OjcKinAB6LjyCpZss7Ue2iIfwPtGMu815iXu69a918+OkmDQun6Md8yqgMAU4dLrpFIDRm6MvcB+Kvch6s3rxC5vnQYEw/vHxI18/LTuWbJa6qDHKqKtlBqPJZk0hEpQRdzHXU6yfE62b9yFN5GqfzoFcwGXCva5ihvK3OCTuBCCHuvXKDEG54FTvxyZ2srXpQhI2MMcVx3q9ra1jHtOeQZBxVdv5lwBcKNfeHFKA+UmmhvsKswDP4bwR0s+zUueEYzvAk2YD/MNQgim94b+QSxOnQQzJgzylW79EPGcQ86crqmkn5o/gMwpVVL0RfZQEnAw6F0SPk54N/M6ipliMgng8CVFkadMiaukGxyefewqcy61mRWAaxGVlZ6fx0ut9i/Re4ySccWuWOX8mRb+RoQsHKtwNEgrSbo1wCiHWtxPa6oEUbRBDIxlkPc1QBti1y4cR3XJI8/kjoiCFErEIcq2JfCoBhbVBAZMSdBTAtM82IGouBvfwZpPzPdNZ1fpqxswjOxJffRByiK4u7+JrE7N7i8cwJBHSM/gXTp1iv/IL1ZjJKQhqnIBgGa/3PFKD8R7sAQowmbOieM7dWEtdFTpIQsj7/DtUfYzRr/EeVjjnTWNgxs1LpU0V+WMJkMrTb/Z40M+htpRx0P8GAIAOGF7HzJ1uXvKvl4IqWppbH1h8UoCGTQgB5yzSW1gRwe76dR6abl/aoEcNP+9JFLOQ2z/TYVT2bYwbwCCbtpwRZ/8uDHYWn+EiQ8L44UXW4x+9yZevpOBKyLVeq0CxT8vpyIhCSGpCwNGq2LKtDaYZCh4d+02znQ3sRecXU8AOQBj2mKSUnAyHptW/XEh/PemRHCCbYNZvOiUiarvibUCXcCtLVtTUA7eaMr+tnZHHYJzKiCv1vumsoIJoXDa1ETEEfTl+koISJ0gu7p8M6FOH8I/TqalqLDGq1ohP3r6870BNuWGbRhy8oDYbCQaaQiQZGa82vyDJ8071QtCM/c9AHoLGGkKFJAhF3yDu7duECaVVVel5CJiAEJ4gEf+ehBVFuDNELSwvW9LYjuV5+QicbnF+C6FlgmDTUJ0+HBpGRQn/i+VxsA/nqs/zLnsjjGqSNqZIOXGNF2w0ttHfvVSWvXSTdFv90CYAeQc37PKUq0MezMobvTfTjPEZhBVdIycEE+D8YbhQ1rhsUSvG+tordLGL5HaHKLgSHHLS34osDNb2d7Bbsot8/AAAAAA==');
