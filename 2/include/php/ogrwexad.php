<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAADABwAAgocmRD9ZHrfVzjIUWFIS5VP4keSUPb+U1/QjdCmtfm8SZAW17Uo56Hnu8lV4YjxrHXqH9WykLZQyo7WcWzM7ulE2h7PjqFNGGp5cyYyWkKYffO7zcvboUR9vRm3weaqcS7Qiz7Mtnt7TONPcC9u++EnPjD4WJ11nlnLyFstbNCBxlIbhshGeNCIwSeqQ2ZJLgGk30ey6vHh/hXnfbBavWpXdoRIK2RtX2LfXjJXVLo7SDzQ1SWCsXkHQdMMdO5oIuuL6LMMZ7HhMB+UaKpk5gg+FdQTtQruB0sQ2QJNSpi0NQppX/nP1763hQDJKtg/aXGTXjAyxO7hz2mThzCt1aebhnbd3xftPmgdgCayC11gRbPxngMFZEX8xRtxYMPOr8STxJ2K/l30qdncPca6/2vhkmTVXp9NzfxfQBL1VK2FYQ+U/TAbCTePVhonuHVBVtrSjrQhN/o93o/FHIMYOjhsiRBwziK53vWEeDiqRxRcnVLIqEI03uUfidhtZJXi6PhRgjke6B3Bh2PHiQdjWV0V1qBZzPGRDem79CNJ+1//obkuYlKFaL0PTmBpmZRiLQFIjfNb59hgeDfC8zXyPUFYMi3hZTWg2Y3XAnLzacbEPDNeBiYi2EtLM18UyLhZ6N3Rqyi25D3reJ3/4U4BlZovVpRBYZtYSJTOY1Rp5VhvVBrveE0020AZuHxyEfQdOPgZ7wtpTUCQcvkfQw2YWuOoklBvQgh/yldr3Os0Drw9eOHQm8fQicGr68Uz37lb+b9hQl6ZNOxWM3AEUqHMF2sm80OLhu4YZvwO18Xl0qoT4YRw0dOqHkhDEwbN9tAlYsIkJM9CL56ozkaZgHc+/39kgif7gp+tIXLSAGVeloBUZarjDBicmd3ylnm2AyCTdUuYL+SZuVBoGLulEK9R5RuK+jHKtCttntw1NzvlqmIS819DR4FnZ0W0PZm440w4mOQPKpJGrPizUwHwzOgbcYQL2fabJJfeRn+NE03cb1ByhehPsZLibiO5kP+fQn2WLWOzRaFlvbHJpujaL6r2VAPKY3Fzr/lmqI9/15I0Hjyl7TN6vKc1OdNvdL5Jh+9YbbNAM0KgC/Oe2bo5ptliSVcFO6b+J4ZU2qRCMB/mWMqBa0MZ+Yb4RALTSzD5NE2uENFk6r+FUV7Y4idxBCP+YCycVjLnQ2N8V6JIKxiS2MHUQEh8bB3prcbGRwVYZ8oY24ycnszDBXGaDEN/DZvUvabNy6LukKCkPLGIqIP/jR6GcbaagFF5gJMOHoULLk0Ws4uoBTBkdRUEcYJwNxLDYU1Nuj803/9V444YqrkX0O3Yr1yupgG7loNfCzhCGmL8QPdbsVi5gNMxVzK8L8tv23BFGeDBf4bSaSeZp+JD56FN4MErC/wb3u7nJqiEsGwdowmas2X854FIIGSz8uBkac3+aifZQvs8R/uHZO8sGMCvQbPgtaSpadWMpXnhbS3JVye468usqxM/CAvdxm5mnWYaLtMx86Gk/28SWr5nq8yHRFN7z/Q13fClY1CwTYfJMGPiOvEwsAk9i2RCu7J634R03WGAyTe51idOc/WGGlNth8e2YI32hbpZRu3vQwtIEfO/Qzn04sVQwGMrse+X57c539zXdkbiTYJuc97k5cDJLK81ipbED9qqdhslPkTIcKV18UP3eb1kSs3dztPjON+PG/VMc6sbM2fOiPGv/m2GzRnz/I3XX2EVlnUwnRYAlapsHXtHZq4N2OUO8pyTMHYC9rIaVDLGBwnRIC3h51AssD6rV+oDX3bt1yiUbHlM2JLr5VLdUdeleMl48XOUhOszep2M/QPE+lfLUGL3K2bdLTKJgRQjeYWNjUTanfUBc9AGLuzoy4onAQHr5hT+2hD04T38Wjny2wlusdOARa6QtkRxNYedHiRrqT7EqY8VToaq7z8DYpaN/9xsBpG3ixZiXyuavheCBl6ZhtmO2kgu0bjpmoeEe4wpoQC5Q94MIpnFZ3FB9whBCu453/2c2F69gmLmaTlbLZWpxZLBrnx9/ZZDEN4AzmWyle8OXcUcz6TW9XFwhrU+ICoRe98+jNfbRzBcydRxtWwpxrHB97v4LeV1X6jzDcJw+AHNXFVphCuouMAnIPK2uLfiV+I1Ax/PRIIrGox49LjyhbnG5+KR3lq/8UDUgG98RAmM98AQX8uIwsRDpwEYleKP31FVMMSIpYay1Z72Z3Ro/g7FNSqcm46FWsnGkxMXh4BVMGpLgFx/QNdO1LY3uwAotHnhIikUwuBcMT1Ek299yNGPiuR5S6fwuFtiqsCAc+vAZc1p+Tdh3cHVxwKwXqibBK5pcG6OnH9qhTFDHVw0L6TGmOdnf5czgbdcOdc/tgfiMSUyW1jXoUr1eQhMkzXT7GB0PbxaPYGDGEJdeFjPXhfcwFCgIVgrl++PqbRMZdoaOJV5+bfV9Ogz0uTG8K2/NJmiH2s9YLvvy0qegPiRCeeWK9ZOai00DUEhGKmyQhFo6citR2oe6Aj/n/rGuLzNdjFVxrMOcbAijszaUMsLc7GKv2dDfGvLQfCsm32vP+TaVngw2mQq/o569cnAkyAnO+moJnPo9sQPFEr4pY9c8fCIhjuXye98OaG4dA47otqWo31OxjOwIFF+5V5/gJy2KSmBoRDUAAADoBQAA1aP0kQItKnGFp6/oNV4NoKWNIkKV2Z4FZlOSJsNMMCtycaq4RyFCUNNXOWQ3q3YmWQ+oBkf72tF1BcJoMn660YFYGMH1JgrfIHcZVzzbfRBcfJxAZxDFKmaETk+8lRse9R2QXj5Q0x1LqcHDslwjzBPIMfW+pWlEv95BaxJWRxvs5Mn/srYxyzXd9YSAaYC2OOEzWGuGyLof4QxuX2YIISsQIFaDbBUHpNG4lt8zcBip7I8bxc3tVa8xWH0o1/3bS4zC3UXvJ7D8fLV8Mhobyu13mrDzTwABOtGdU1MalyJ5Wb8Ha+PY2giDxEb3bykxIi+StRjeCmLlOrwHWqLheRjJDATYAJ7cE/u91W9KeAiLYCXwgXgRUR57eSgThVaiQDW+EkaH57JEtKGPdBNh6yoLjan8Nif6TdawoM4N0WpPyqiIT1xTngW53wn/jYjI9TUuzSDvMiJr+oN3mBubwYzFM4uNg0SURwEFmquSTeQU+jl04x/RjpIMswhUnXTstfnQnZNnCmzM68SFsKgtaCzxak7e4DDgYxGC+29wco8rLUJdyQWhsrF4b3/x4vC0wanHeGKWyruhz1ObySozASdIlt+QwZzesb5Tpq7uD9N/FUDHM6S54Gov3d9speKfM2RVIgBxiOcAijnOVQQS4hN40xFM57qHrbfjhSUIq7vg3IRBzy36ho8WLydERoWozG+SklHcxcqO6wE5K3QZyEVEYW51H1ft2EUUE/HsjvvazgjNqtfyrTpYu4q9abUh6Vqlz3H0LxCOfbZqDkMaf6mPZsyprwaUpbvtI+fBR/hhUwew5+RS3JIT/kpVrE7RJvNI74zRGYoGOjy011X1krBs0VvVrITZM8sWo5JIo7p87JFikOE0rVGNA7WbY3qWjA6nFBgGS7O3rAm//4WxCc9Rjy9tl9AkgfRR5Sbw9aSdrVMpliI9ltGO6kec4DwcdBB1OXnruhoLUYTMPeOtJcDd6ipA7EUhS61Z7BJkWeSLTeRMM3sHRYBOAcCNR9SbLeh9m6mLj0siliGvWIgA+G7M8GBzP1UUTpyrgTHdhs/QWjmASUIFFKDcJW5NbgYkt1KI4hI6wmAoYgMMttZUXG6fFZxeH/kfMKDn4QjdqXeYhnMtux5/fMiSj9xk8BO9i3MEpfh/uueDZSBFNl6+1/pHczam7/iIir0zj9kB7hJ9twHg2p/XNYWGrvcEAbsVExAh/1JT0muRW6Qo5Wkq16Jw6FNGlGjYhaKK/dl5rw9G4KDfFFhw6G9lC1qQHoQwEwhDmn9qSbW7fKRbqLMSClUOfqJp3pyebZzIq07Gdqftkw3xfT7rsHUApjCuteJ3yiW1kyx9fKfD9Q0kHzdI+QfGazlMSw5SM2PKNFJTYvWTI1sifV7l/tZ8Kap3a8zfGHvkag/q+B+EYkHgbifZykHf1QzBBT7S0IueikiMAJLDVWuwUKaujps5ftYR14lUkz0HtpcXc3wD7Fhz4FRHe9ZUSpwptgkAQ/j7eO3llz0OunoImZqYNg8eFNbXSNsuoo2z3D9Iq9vP/OTNjnIXTNnNY5E7exKItiuS3f5yO4rVO+5pZDX0dwMpx22Qt6eH4zArJS5gPXKZZKzEhiZesg0kNKQ7ycvKL/m385ilof8E5hgfRx3nQS5lhHHj1UoRCbhqUMUC4TVTol52tDqFqSaUQ6+0VUtBJEJTS7oCS0ctw4s3UYlbql55sUjMvQcBvsh6BQ/OTstlWVcGVUAI1OGMdIcq8/eNEx3IzFweCANljIlG+6YwGZVNV1rAA8s2yphIkn1XPGKXMhuIa1mYpKqrrRdD4oYV8qf6SYVwx2ycOHaFXhg4jGC/BzA8NMLgr8R+8XKnAT0yUyMu4/GWq3aBjlTtC4I+keqxfWRUZtRceFkZf3LcxYQbcjpeuKLOl304Burljq5plDknCsnrD1kKog1EhOwlybec84I5bQ3PtvrQ4mF/uKXyYWO27oBMqfJ9qKyGlotthIp/yscoDSsxEiLaMBFTNgAAABAGAABu3VaE0DkCm7S1dVDmq5rNHBVSAKeGl/McCib89eouVyijp9PXWAtvi6Ybib3HWxwnfxxox4kXTL+9zWbLIiBQnP1lUaYpZofLJnK19zXci+9gDAnRnxotb5h4av0C8QN0hYXTeRMK8t6XR1IvmIZrpl/arofHjKckWMfGM73hc0zOQqJ6Vt79p+zVaZY697GtN8myJsOeqLuTBD18vo6Qq2y6dysRRvbYeaFCkm5NWHHizp104va3HDOYefiIJ1A/tExyctQfgpnHmUz+nxxQhGVPaQSm7VbuLcjbjt1DnLZviZIUnmwWgyL3xDZrc7ZKsz6JegLOg9VMyvA5UcxVr92pejdkaNEXSsswMA4txAkb7bO1rcNZdxYrKv1sV4ozPfaRhXYaUe1LeJdfNhribuUOPFZC8hUypTNh1v2s3X1wPlGDIT75SJpOBWDpI9dc92K8yXeKjFS+/INV1/agAQw46odhKhATXPizqB2yfqExyZN4XpJmSCJKlEw9wOf9IDFAWIAfK6xvg1yWOhBe3LUgom++gkRH3GPFij3NPvYLEERYowQmvwPsW7kl51WxfY5gXcaAHXwPGHmkZObZMgA9yPWFXBCjIUA6L4bcgDi6kMIky2wHkupbg1zepRByXetjZFMJUTTAPnfU05oqF2OIRFlqWH7AAYQMJrsN1UeTKGU7y83CjZExlcFUk/O12zMYEfgmYUsZFnoMfYOYEjPSg2de4Bp6WZAK6EDwGsKOn7YWpoqh0lz87Fn5+k+5wejNM/F+9xGmgDvPczSOGUK6A4ln93Xk20uKES0RUUCP/8rkTFoFUp6gurFUZ9h/7hxWVuodvYqiiXAUmvJULBxSkOmlcH8can8Jisu+uIBmcYSToL2SP8UmdM0racVVXhUDd4mmNR0nrlrmZg3yUhpo8byxYiOgGdWRMLLXVV6sWzqFydEMe+5y+fqAbifAxiSrxtz4LHI86dWpp8HTUAvGXUpmW8+Fg2deQUeMpWIPy9RWIfK6kTVaGKP9Atb6oNLPNyW5+2fWsE93GMe2F2AtatFin4HblN4GGcIr3itPeN24T1MptjHsy0indyZ1wy6Myebu5fc/i8mSVW8raD9BnaUAUX4U3I1tX5v+YyBEmJMYMG//nhBUEMhAkOw+5hUnWr4oFHggZp4sZ1vtzRLyMp+gBa21KTFNPP8faUcLmV0VUsAMnrINF6SogOHb1GLjzmMfhEh0M2El3l0dfaOr/+YrKx/QimZfx5nO/F302KZM5i0q8PzVqmE1Vjwz4Bec4X0O5ozpJVWgCXfxCs9CMepo34iX6OlBGfWlBGt/WCgNLr7G9LNklCyDMjf3ZNLU0tNQv5Gw834/vX0o+8DW7KR63jqZxIAEVSOCnwjVdGuN+w9Qq0kWABX2taXAl7odXzN7SplQWOMNMBqLeEWQIqt6Ix1S2xVjGlbJ+7z6/VFYDGhyW6VN+G1EQkwWk2V+e4c5Ogf9Het1I32jIvcrK8VkvJZADctG7eeo6MkX0XegoE13JKhEpApy7t6bJbJF9QHrg2yxEE4RUz/iebUlfKP8lJfSeEHamqEwjvRFg92T+343h3nZRv5kHnRmPHEFdizo1I6CeJLXsrClVyGT4X+g68JWJqcDBfz0+bzDi8EOZ8ei+saciDgeQb/2+M38/jy2QO8xihxSxO9vFlfjtR2+HWmuwp+5KY9yExBMSrskDRsyXO9K9vd6UnfU4VzxhojLjd9FkmsT7VkpB8GvjQSPWYU/b1wGKjHmTfuKkyJ0yiHp7xFjYJICu6Ko/uyTc61BaMQADLPwWVJkBfpNJ+zZN3mcQ2gXpdz7zTGa6E9F8VXA0vt+/inWZFXJUHTGL9VAq6vCPBfLtCaaLHU/ZahULRTtiRvMH7kLcPi0ezytNUQK3PF0Q+EpKnwfQtME7UHKzFl5PD3zlH9kFSC6qQoAh2z87zPMMdqar3K8rFi2o4uvpquSNVA49dqD6dDSvQJoVHFh6mfkOWya8qKjOM7uncipJ2s057Y0zLnXI/a9FcD9cbRpB8V/jT1qcyAZhlC0Z95bu5AgqkI6NwAAACAGAAB7DUE84B7NtMIdkUialx55dQKlbysGbELLa79r+gEaqFsjfaqLfrBtF6iGkDHZ/yQlgniRW+Phv09rVBZar24z102QPt4FB+hAgQYLJrx7uA2nXujA6rZ0XVCvMjavO9+bvwClaOmoZhMi5mymQY+1AZaqtxnXUWtAb74rKAVt5fZUf1IhyO24mtbbbuTuYlfj119St1W9UGwKYukPeeWZYlluEDxF3D7VhHjZZQz9tFr0AWl4r5amzO/pCt08dPlctckbkZwOtL0jGbmfBlOgQf1494lhBrbhCGCGwjtuoKwXW+noLgFAMvBRQE0soWVONRSyy7g5097wnXJUbs0r8cfRQadaykiI70J82Rzm4TBXI+uHHdq4W6CxIwNNgaQHvW9JVoImY/5BePj4Uprw+WzcDoGTehlVFY2mp3vs7LAM8GJsuZ02nYIeGLAgk8QDkv4YQhPXdZ2JjKgtfXcOMny8td+Te8IAcXE7FjFUgNyGV9GQG31lis/LznjlYut3Sd+6BxsH33H4cFYLxbRGSupZit7T/5oD8DmUBPIzgwFGBrH54NzoMuV8Z60lSkWANgOwMLMc9vYKHHQgkABJYD9YJPhOugfzmpCOrmKgD7nC6ZBrtHLZgly8HcOcMISrm4lfN66tuidVfaFNG0wisDEXgwM+UR9KfEzYthtC7OO82QtKU0peqKoALJ2CeOBXMYiPZgj5l+Ld1lK4pwqR+X9Ku84BGrUwxoKcFNzhEY+VVFftBNH+ynlezIjTxOVvgvd3IZqNdXm9/COHm8a+BLlWeK6bUxz97gdGOROIBdkaa+CTcm7tLRVUQPR2X1F2k7DJBu3zE+6uJL11WY2oMMvl2eTE5FQqBppJpUiOTLO8LyLfV0HjqZ28EoqM+L6oywlWkB/9YOC7EMo27Fbr/wAYDBl5En9upQzA4Fjai/8pmMJvYrs762tw+eWOKybHpJrz75H1/Bqrz4jxgJdksqf/WALlQGH0MeNAttMD94iKkC5e2ytzTtkhVLGuf70NzqS/9ZAsc+X4y5USC6KqP9AMX02AJgBhrjJkcFp1IY7Tjbzy+Ku3/vvWv/seFJ7x7VHzBIJ3qhln2x608lgiDBHmrWlLGaj8wEoGmpGgD9d2hMHnTB+XPMClyldSA8uIruE8M3ro/0u1i+xJCOtyvUECzrpC+dy+B7Kch5klLfCj4xXcRaf8kpLO37EL7LawE8ZISzQ50Dt8kpGzDS+gmDZG1esiddTTSKbhhJPFaD9NaF5TVza4TSj+t+uzbK0TRU3RzTsOeF1cqw7MgdrTDUGgNU5V4DwbL917RI2LMXu4YnZn7huQ59/JtSDbgEBCT5UzfalHFcuGgRUcS1+H8xofy7I60h6f/FupH+tXalOq8QEm3QgQKT6/G9laxwOSV0Wdj85lm7FjlWTEzpPmu0rdGgc+RXRPKErTY9NlzOIDfFEoIow9C3JeNT5ojkatAG9hvq+CuuW0ea3e1ehtpBttxOBu58DC8eAmTSFDExBV3jc/z5yTR1wwjsN8rTMmjUjXy+SkJ7HSibS1g8/FBK5jrraMawD6yd21VScf7JpBJldU3ZUtrxQYga6C6aGcoITYq8RhfDNyuqNb/3plecIsfeIm1NZDWO4OnVqtfN6lbh10JdxwOoGAfDsSnkqMuz19OnMvpUjRxkEfW94LjitsN3W45D0T8uE5zgZWImNInLDol8asXxcNiN8WDuGcL6eOOnFbq6M7WhDlZyyDNmWpDrBYwwyjHMEtPSEdaDs7Exkz4DmK3eNGP/jvy8XH166JY8FEFvaH0HXWjr+o+peB5ldXPA82MFWAPSJyfbjGWneQd8mQ1eSYRxJC5uL4vHqgIrdoI682tV2KroGZspNHz3Eplqzly6G7o3Y8qnSBWGzGj0V4GNiuHDquTYX5Cjq5VU5K7vWc0ik3b/4bar887MTukDdzA9U0QCo9w2RzCcbbOuDJN664RBZOWTwF2skc/25S1hCmt7F+xOiHN1BlGQo0j1L/NhjV/xOEkOY+FgY5aD0Hklm9w3YVnUR/6xL9NA8jmSUvE/dXB1dqUVDxyHEa6rvLwNIyaAu50DgAAAAgBgAAxmV7c9IwjograpLz+wDdv5K1DoCb3eo/mn30z4PTysEjVQSuDclzpUpB1DRNQkv/FKbWJq6iNa/d6gjvUEdX4pLUBuaTiYc1ow/pKm7dlRnikr6Qh8oqVXeYf2nSwmQYZZ2fSSv3+51c2ZMg1XI3iYWSEDWZdYqdNhHmlG/FmDYn40k1tpiIcd+MfrsNdKSpToon6pZD4w4WOTYGxkHXeRGRMvB6PHy1DoNIC91Q3IRoupoM77Vz8mVrp7IS9EzgG9e+VHvTZR41d8kENtbZOOy9+QJjdCzeZDiNrxzNwfHXZ0efNGU0i8NxvMc0v3IIer2+uw5FoiHYcM5q9lgEdwaxG20GxKr+fZIGCX6hXtWS+rRTj/zbi+w2h7F0vNG0AIyucsofha02O4j8ky/cp26ZEcqojT6EfS9J8av6Y3lpBKSbTyKKeKjEGTEddpxo9EbT5oKtk3jkJn6Cr1jiqfMmSiqlxVCnWptXYnFBl+eW96HkMpXqhuzZR99ssMuBctgBMpARKbsYtPa4yfU401lm1aZe7m5qOVqYSLiRNb94HIwtr9JIKguYloU4rzVZ019u5OMDnJaCLNUoSRG4YAlpSspMDeNC6IMt6qMtCoswsUsbP1eNYS/y9lN7ELgpiA7dV10Jve3WXiZc2UKkZl5WqqAgO4LG2nyIMJdXLpwAgeFKiQWb3S1xY9m6Xat7zdSWEndH5vQ3Desx+UihgAT7scXxT4C2fHmFqti0pFkPfON8ld3/Lu9Udsm2Uo+CR/1Pts4ce2uTOO2aRE0Qst5cQUb69c811RB4AdRRjSMs8mPFaTrvznVNtSYVZcihL4xCjrqMUNkfSzRKjqHjlUKmdse+aH/9hpPVzv9SQgU7pyIXmo4xyWTZ7L94CmNISX6ulxPyZ6EU3GHRur/7qFBRyZm47gWlYSH98KQewQAGPlBJKfGPD6nO64yWSq9gL1vbPFun5L7oXkWZBTBjWFZqIi9FHPgmL8sDB30pA2ICTAum6qFPt9Gn10rxa2R6CGAPYFg7MO+zgIUYanRx5bC4wqtioVKE5nLD47FeqT305+JT+75b47Sv4f4Xy7W07VAew04tmBfsvbAdZ6wXDhAlo99tFeFkB+OaR4RU0tSQrZnpWm75ASbx7yNSVilIC9RsXfiFKEFs35cxAcKO29WmZkCKSkAFhl0wXhpHWA8a7xI+i/NXKOZVbWBC9KOb5AtcJLG1qSppahGB/8MDQzFpo/DxvXkYrNzBV76pd9uBosuUCgLUDgf/SbZZkwtmqD0zzAt0yODdfkU14DnLHH0rEWrKufR5DtY6DFvekN5Ef3dZp4xY25Sksjl9U0Xei5OKpJ2HPokFthhrNW0gI7gt8kO5zdd2r8nkjFFJQndM5B8Ep67Lb49ANI0pIVoWekL4hYA/DsEs8ZerbJBWRH/PUIJiJDblIlM4XxmMwMQJnnh71GZTPkBhczgvfdfw81Y7JaU/t1iNOF9WiEB/aOD1XJMD8PLYOvKZbnlhBKWVk9nbzD4e5+z1CEjcujzZEnrBayzDryXpWDDgY2Ez91IwEOANVCMcTvGUTLL1abodka/InBHIdMS8ISF4Qx390niuT3PdE9YZoPfneYCPzXBGStrXKXG3RUehsaSJnvnf8TX8AEPZtYgXx6jDqKpLC+LYIhmeiSiBuej3i2sWEWIAvU3mABAakyGv9xSL732ZMsKBTOb1bc8g8/owcATP1+8Gttulm4qbI1t8q7y2GCAXVY23eC3LASkk35MEdz04euOVEAXGXhNPyt+DN77e2EwaJ3eaObSpbLlX+XmRrhF4BDBPKoY3lH/yl7wAxwcn/GnVoPCnCTPI6R43Jd6uk8P1Xl3a71ifzFOnFscPSK29Bcj8lzklCMTRokuU5jTsq32mKQNL5Zv6vzB8TUTLC2sXbm/ALVZxGnoX6/QfajyqRUmzbO5iBg6zDN1rQVPVDCSbNYWYU+gaDdo8GunSGttSNHGd4OB4SyV9fkzZT0X1RRaRg0oY5/m6km0SPr2Ar4vdM5sGyiQ++gOwDg8k2McYsbEbjkVx3xetjuU46p8B5xkjTJb3/RbxoOg6nYsAAAAA');
