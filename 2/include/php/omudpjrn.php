<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('EEFA32DF8D68410AAAQAAAAWAAAABIgAAACABAAAAAAAAAD/hBGx++ivCwG+aENHC1rf0TtMPJ1onkyTnRlJ2ahww7P1zfInTtH0rIMTzjqYJvq2KnUXZM97vVrqHLWD2Rl3OOXMKntyBStwXJFqlBVwX+05LTkX1rCAbKq95rOydyAi1Zb/TBm1ScDDHSWY9EK1jLg9kkAJcXGN/CgLMFOAuRQY7axNH63fszQAAADIFAAAKs005ytvTKOT00lWbTXu8t701uZM+FS+1EnlXJd+BcCqd/Nsp+d9jkBYpxXFTd9Ru8lMFdmGf1jCf09q7PIKORplaLqldbZ2/nkwSOt911VZOipU5tszjQZ2BBabyPh+Gqj5EZBN8/c3j/ci0UBQUNMjhcr/+XUNcvSWrpVhhDkAanVKgNXDLPXFq3Fkj434Qunlvs5bUqRHCjAwWmUoGo9SCOwiF5EunWhnfjJJS6tUsWUb8LdL7YJVWfJj0u5FZqyF913oczMgfW/f4fNHbujztPuql0VNHLxnm4YTgDoq1NrbnKCk3NzOy5EtwWG8JuKj3YPwzpPhZbHSHwUfl0bxVcj0IxLu0Hp+pPD6vd2UZKpfc1WJEwjXvJA6BzhsRLCdutvOQ9PVVgFBcw6o7jwQIwYsAdv5Wd/miCGfdNPpNwGXJ//npZYdY4dCYMHS5Fc9yH3UqQqll8aG/D7flrncv3O+7xuE1sVE9x3TofkkK8KGAwNseHgQoVkD2+3DKBSVjoMwOhzD9m0rLE9/RI58xRCfzJBOtBvJrXuBmBtAs8D5LThl16WC1F9qOglexWvi3P7As6G2ntbZWGJ9RZpkTa1uPKKXv9q6MXzjDjphx2TR7uhwHwclpSgr1VZp7KW8CZewq7SWOYEsadzV2QzoxLuBziQ6dd3fsoF7OtYunmNRvtHk3D8P/HH1j6AVQTDTO08nBYbRef05p3Ncecv2E0pBY8UgKVoe7w61fIy5BkWQnwVMCtcSj6Aq2qYxfcyWijtS7dXqcbidfOyip/djAmshC9ggleDsfnTI2U73QmdMtl1Hf4MCi2yOpPQIP6vrolJAIbiUxZp9QDSrnS1P8GMr9DlvgAb8wxGzR+9hdcNwwLyLGez9H0V9QzmQPGKFgoCiUwq/z44i+oJttc3Dao1F82/qabFkhjV0OOBpZoSDyqhlgfTR6/lxvtaDlFPTlclPiILyb55eOCbV5MxJBe3fhLz3uLPRr9Pg5z6JoNO5bidaxOBX9dEP4Xvr+TkrMPRgECudJ2Y1ucVh1w/cFXZrtHb1xoTPbmAZobDIubMlQZ44KJ6/pA00gytDADJJ0x6klqv+nbLFqMmaG9N1hGyKcFFg6dBClLxhV4P1qDNEwGAZJeWpootBei9FNMKr70JIpSezdk4yuaiH5UszAP2y0WuPzkGnWGiIcamH0VS6EfOISFz8lqhezcj/gw/POvOVAjQ/9Nq6HECwd0dXtqQn491RQ1cW64g3dcPhkDfrCU0JE6GPSSukxBFJmGG3lMm16sByuM259TQsIBs/wR0XfQOa7SiOP0BQU1n+g/Qaw/QWAt/ZKtvW48mg6fLT0LGighWMiUdWFlw9F/20I+4LMDkdcOtvZ3QBoJ9pvGwkU+Z/BeTuVFDXjspKCe6mW3fDKQWWYvPCErhCPw64JI0iCopdVX/+1UF+Fp1wIO23BqkbhqEjBBr383ibxf54QAlC6bfI/9m7p1VRnPUl1BoI5raq/ci1QfErv0WsL9lGJ4OAmdzml0vRUQOPsLcGo8a8ah4E8F7VCeX328i30R9iDErkoXTSDtJrhByU0hsoxaZh35hTi59kztiLXofb7u7CirGxF3OBlUNJ7lvlVxMGL6yzrpiwka8xGJsKthDqTwMAKv193GOC1P1hj+h6ueKLdC5RqtG5qiHohcMtzv5oZcNBcLCrsR6pCRngTQ4mml4Hcdh2eg304+h22WfZXnyuuIT2hwfeWfhglLPTLDunwtH0uAWCSfdIR6FqgdLr3N++/hW5ntOQC3gTmac2+rLblgD22GUpSYhOsR3A1FoTH05E5opABVlsk+nJrGCZJdwO0p+O+A777hCQwKhe8YHbLmt0S6bu5y0oC+R4xQ3usIAkdy/U/fUZwJTzQtpKC7z80GLhvh9RsRaxC/lCPX3/ydUib6BNOSsL5TwL8IJk4iJw56ipdtkYtbxbZgQWgGDKKi3H1Wa+3TME7yxgw3/Xpambxc13l2zNGkgzxN5zwy+51fCrqA+Ar1R4Wnl6Y9eQ9vniEcLZvZI2/8X6ZZ4ZWLwnZE/iJLUInf+nU14DJPPwPgz0f4Y7R1OjjciuMH4ZhyQ9h/brHtuH5OejXfbzRyuFBqhUCs3r5PxeuPoWHGbLYN/dD8lspTbyRuP8JygNP5BuxhSpxhnXMj23DkOvhc4YhG0qvfpZ1CirswqqSyCGFIlHTkw3Hmz3t+kaMBYeNBxtA9a6QpXiQjK16embMlKBtz9ZCoZU0Xm3SnQ0Y0AEtset7wurDG8JrdYzfvGdk0ng1Iv/fv7fURVULkPJpLK/xU0Ek/nVltSf1mjQEVpYcr7pKxnjsb93WUqVsnlurepu5L4pOCkMVscCPlmnDOuJ3BRw7MOGb6SmUMCPy+6/bIK6aBpF+KB5hnDw34aWw/yh2QvzrtLkKtC7xnRA76pArz3YWuCxpy27skMXyH+nZpwjwqgcmm47w49+JpaAwQxlMlEcmATAfO3E9oDgKaj5HAaoZME3AbqWnkCiJA2r2mWVHe0Txc4uAvzOHanv2kNqQqaRfJj95v8Mwq2PBWjpbEn9z0mdL8UcgPNNpf4rMILaKOvHVL1zv+7tOkRmmJwnQVLiZZY51EaSYjuf7Fdm3QepKDo35wML5y3Hj8VybIi6g9KAquMewPQSSbbswdbibygQQCTDZdNb4FB9gCDST6AyCNbCe96vmMXHOXuqEa+dAIaaoJ8i8p+WpIauRooLa1daPWG3eBe6UOq6RKrZJ5b5U5Oq98h0OMDco8IHRmZ5d19SBzUryTXVX2qwq8offpqOppQN8eJLtQ40jerF0VVuQyq3IVqT/Wzu5XUDyhj3WJLiM1PMaiNhatdvLrQO3Y2FRrhnNtyKt216h7WD82NXTZR5hwVux4N3THeoM9b2PeIb8FSjqvBMJu4aL2IVJ2XYDUuRxZZRuZfB7IV436eCY5hFQ8lUGPe+Ta/L0Xi2JugSz+5hEPXxLju5hqfzH/1Gt0cQe5Fzzz4TYVn7gTSYPcAYtuv4nF5Aerzb+19Rg9OJXOxRjfZL66fxnSPHziYQjcQp27Y+FvDpkNEzFwB13B9NdGQiT72xPN8GvXV+XB2NcY+MAM7MMZyWQBJ0CFj/LbLXjAJH4gsqiV6lu1c7cYV0Jb4M9ZBmSHNFPhLwGEiYQrxS7CVa7paEcL5aEz8OksuVAuSDEL42YfxJ/tsAwjtEvj8USKkKLpTSRFBOtIa8+x26esL0osEI3GBtFxWKk+fOXw7KhbogxGJJiMukQUHXPfoP2MKb6aFvhHcrMTDthk2RoGBIdpQakvo7Y6cXh2zMjTCz30YzfBvzDL9ooiU2cjYSjlFtfbamD0hUG1AVsc8LUxQGh8DX4hDqPlujJmpnolHq0v8ikdSfalX0F4S8vbvTsx1cDJAVOFks5Bk6hhl7l3AwBTCBouw27ZPzriUBNQw1T8Exg9/4U47u40SgbCA4EnJcI0v9wk8lOYX6mVCPQIPQZA8dzlt6RvKSnIJO/KTTh+fWGt0boDhddWkKU9ZjaCpqj2BkxcBvZzzC6uEPYMLT6c8iQJYxI5xM1VTU7VnHYSEQk2AdgeJ6Ib2g1hJs6jabPBatQkEKGoiIVW71lgj+3kpA1QHcDNDavUXPu6uOcAvGfuXZZHQvoHl0FLPH+DZEltv5V1Ci3aOpO4NhHF5My6gDA+yRjaphPQNHbqUxMBNwATYHrUlqkxYL+8l0HXjVXQbui3pDMIB5snBExbL2E2pNEoVg0afnA0EfVxBuqRNzNUudNE5ACtvDSBbFNqGHUBYlxsk9Omnan9Q2FxdZde5YAn7Qe9xidj1kfVbDoIdVvZ5H3PsYaLi7AAQ0Ay226EuHBLaFR3I7r6eFY11MqAXowcaXE0SvHsrS+H9+Vh2ICI2sNLtVgc1cPzxyrwKhBwjMu8DqD/6QekbuyE8YiOcTSFw3tfiKm2IHZh0ZUmxjGINOC6GMYBQn/NUDuaFRPzhqUNZlHAryRNECptarhEiufDmGk3Io2oCi2eHGB8i8Ju2Fw2Dm7xVEO2OXUAC379BlYvKzNwKF2nta+yM2icwdPk7bLYl+a6x5jI5gkWxygFtDlDYxc38O6jCPgIUHl5BjGLhWQbupGmYsJqDqvY4FhH+r+j32Pq6qDtn6vaIoo+Ijewg7tSeGytZYXDyxVkNKnKtn7ShRZ+8zlTq8quim4J1BXuPUj/TOJUbUseUUgd9PbZ2J01f/bVExUbc/yDHVf+Sgj5zog8LXgbrn4vsGeSUw1ojvOoG7Napjby/gY9g6ISWhK1mkxwBMCYk9hmMExkJoQQjfYyrWlO14NzltaFhigaqJVGcMUIlfjIUxzVGcJHZQbcRO0PbxZKQbf1Xl1dSfXhuhflz+laPGTrNSoRJIJhOST+aL02ExdU6xQyDa8/rHnt4Jb6Z+KBSkWDMYgK6EN0olJI2HG1hz0oiUoY6grPmJSyN5xMZTwjx4EKa/3XUwkJVxL5OcTGglLdPaelQh7giz1XGdjHoe7CasErAlDlZfmdd5PHIl0IHirQsYicU1CszMV6fFKqFwTvwPMDy5fh0wq6/H9YniYQoDY5yMkHD7gG7iOtxO2Tz0FxVVrimZ/rVB1t8TRYjKomJ04V3WFHAeBKvOhQFzOMX1MIzq2JYOcbkIQ/G3fh8FjOTMGSFRm3mol9NkAeAmwOGADM+oPzNjWLNd/yc8/iFK/ZJBlczpJAe/nLtdmburqqJI5bSqC4ZXg800Fys1udui4mEM864tLqOYcHmGnncG0lIbAnDAH+UhmUyr5aLSKSW0r9037luXSx/LJ/1ZdYToOledJxqKu1G31YaFBa2MgPJCJvW+wWsQL4cd6Ur4YXu+UWXuZ57JlLf9i5C2Lx9vSmk9xeWTzqTW0wjHpmigV3cPNPuPDecPa47iZVvlU029iUqFbJwVRXmN3GCph9BsUyU1RnbvXTPUknb0s99wtxiOfPBiAZVlNZrMK6cvmBDB37SVIyTt4954Yy1Hy11MYH6lfOQ0Pxhqy8Gy8nVEI0pDyQ0S4t2TDx8ZDkMIYay8u8gw2aNrtSOXJsHMA16Xwan5Z6a1v/823DfBJBhm32uq1eXuv3qctOYcF2chY9yzNAYROxrrpkQLwkGALsmTHwNI3f7i+nZBt5ddq4wdAqlWTj0ByJzo9L4p4nTUhwZI5qtURGHyGC/jrOjYhJHsV8KnCC5HS+e3r2qeZDAP5AP7HCO1S3Ebe0Lr/F9aTFNbQRMmucjUg4/MQsu5SIpx4d/LPH0rkvxXrQLVZv+6mntQe99EoT/3gX48gE2ZA0xIxB5+Huk35PuHS25SL9WqLZ10yS/h4sBUn3AmJK6qz2HDxtBYKb872uddCGRzr9+mNcZQNaLLy/QVeDVMsiQakg/6kRtV/4STKnjaQdobp9d/BmgPhL+MxL8dHRMd6x9W+GcxRn7J3w930nJfIy8g6NiblUHCkmh49j5lMZAaFhu37UiE9bj6PWxyptl0O8PjW5HDSEF1XqhfxUAh7vYjA9eyR1jnHDNy6CsVTAKAvRcSJ9gqqfR9JmiQQ0vo1Eut2B5Ic2k5NooIORCcpblTl4pBc0qnTJoRl1cDOXKTFVPElpTZrXXbmo2a01dLnExVtFwVCZB0925PaGwRqVdig5HHS+V/WHAel+B4PMuAC4O1NrwQpdCoGc77n8RYX+oSZD45QNDxG9TocaakZOk2eLSheGsQnlzL9ekAgTeBMFJP4wArGVNCIXI/W5nmpT8LX2FNxJ5a4K4hxKHX6ZGGNwMUAiLr7iKQmTJa3aeOckuZu8y2XtqoAseojzfHwF2t7rtaM33GKjIHOyuUyVIjvMnejnkrAzRdwQ4Gnp61XSzSOTBr/6OcSmnL9W8zVY/LP5LMhCDjZjLPFRw3pCVpEI15ZAPgk0mtwnZvbVT8p0aRr1zaZps42lHJ3wOBSoRxP6Te7nFocmNqaU/vRRTg5kORxpKWO79lbDAoeNt0UY8RIyjCCoudzgpiAw1WBNDV70hTa1gJHbDBl5F87aZMCFBWAGRcYYcHUdymZDE9+BcrXCt82qFk7HJImmLxUs7RIHp3HeKm3Pqe4LqXLsqRXzoebsYcRGrVIQrlyjvck3Q0jQ5RfFHFHCBIyCXlUpfRYpSZ8ZH8FOBBWATokFw2LZiWNHJsXhciDciKoeM6IQFG3yFrilTfMd4rAkO04sjlyfPpeEvrewc6V8X8PsjmBm+5jasTSPgreHuckbOYl797v2LdoXlLeBq91kDB1Z2adjlfxpCRHXnRIAMQow9keGoEifj2kTzv3P7Y0wJRHfOvRZobsQYAF6SC2tyA/V+ROPRI77l9BXGIf6F6yOAcVYOViy7RVdiaozVnr6BYQ9ws+e4UWV75+gXzDylIihyA0hohBr9a0cQbZ1l1x4gk1f9WNxpzaNVD7c74tgOnoeoYDXRSdqvwbs9XqXqQAKJ70gZsWtUx2g8IgAtVcrWUcrRB6QXm0eknyru8FIKWNCWEP23pYSZC7aH+hzEdSIs+UKHNVcKMHwZpVyG382QPwJ7WAdsRZRAnxEfgDmrL7K/QZ+yCsRWmp8uG7melTKT8NTzT/b0yBW6snxNF6HuBiVc+wB+iX409c5fkE1LtR0UCa4lUcds7N5a2rV+HPAdeS3g57GGVeAA0EohFla2cBz9vlxYO/PSFPIwoN4ghXdVvSFtwPKxUG0xmKM2zIi7Han4qA3mQZA113nH2CJpWmf7KRr7dgL/fYkf0NbXifRse/QkVkA2IM7O2O7snM1IHTZnxVbIEJetl0g4VjIoWtDw1fd3u+rFs/cve0mx1vmAynoccBkNMQ0U/TQ2I2Fv/bFzvfy2PRWdHw6J5wwGwLfcRl8wEQIiye6VJ5Lptt68uxHwnSShW1ERK3dfsLquhzCIYMF89Tpw0UjgFzAunqTBocnB487JeLH5oUVRXz4UjBf0Lch0GP1lBdgNR16C2B5rg3As3XnC5Wh473W4J1wwI1fAZHUmouNyvy/QKVesPmLTi1gTpOZxYse7y+EUhhAZHHCGhOsgPErcsrFlFtdgwRV6oZ5NDKyiV7YqM+DUAAADADwAA5LdwkD8d3GBqsZCsXyd1Y7k3uCbH6dPe1bcivkoi6q4PpYFjpoYvv5YYAt0bObAt4qsU2c843M61JpWsNnm/mpMw1eQEVQQDOzTX8eJnQNxH0CRt85NzO/tayvq+FYFMoNZuElKl22SgmPd3FlJ2LTv3rsVQbCvDDeahfQz4vcyigHbn62YrWom6xwrh/7cCLXqo2TiQvIgjMdxGjY8kd3SNJe6u7/aF1d/ut5ccsFPHp8HsX8K/cqaj9Z204uRPvmGNlVhV+uCm3HXC/nvQQORNk+FiHw55UjmkVZ3SM62OFspk7WIZxjSfnRqpn9lkDpjNl4TpqAu+id2Ikjxq/yuEO20tIQWzwR2vwHK/blRCwB1KQAyXb/pf3T/EOGfIWHgDNC00NRznOIEUC2l7gETo0u7RW4TrlGk0IE46eC+TMA4FA7XYAIDB0LlAJ5xcXpuZpC2I2t5S9nnXy92PgzZOs1Uh2dj1XCCBUhd3X1QCDeLXiIDw7QnRPUCKqr9EC3x82fp5R4vYZel/+tlmC+/AEl7fCe+CilmL/jCKgD1EBHKtT/35yKNZi+Erqc1zY6SDR3lUceeQWnYuu/8ux7abwGfalls91TlcN6d6Yi0nRF1TzyK98SuxniwfHBbGbID4RFq3ZrW97uh4E1tzr/LsuL2tuQc8mfREdC10Xcdv7+ZMDhCb6Y6TV1n4XqjkK/wRjOxkSb1+7/pj18oKuNX1FDvuQT8yvqzU8uZebEhd3sAkzUG/BdVMjtE+9kLZpF8UnBkvxK2auHbLSFTL2xGxY6EqpYAXm3K56pxnHulVrw87p+z6PP5mN6gkMxqSYZvgdcUf4J0xiDxxC04WKJus5zt88zOdH6axSMo75f621xOfINe4JZRgMmIykzDEmqhfKz39zOoqV6UvjFuIAM62wjK1kYYB9vsLGJWzkf40uyk8b4JNKeaywhbeLVsZ8ckrJwoaZg9vrOoQxuNwtywbvLeZfTbUV0Samr60dsJlihz0U4B1PEipJrKhCi8EXVvCZ3crc5s4QFEvPYqECwTf2lOyUeO5cYaexQanOGA1OyK+f+eXdmkqVvfRu0mLp7Ka0Oc8goPZ4VhWzMb9QdZkkn8wM/4Vj/KdbxFmGCXvg4phdWx/DKFQjNxHCuEkegQUKbDJoXEQOIk6QK7rovWR052Yr8irA21kuAUjVNj70nU6yET28p4jn8FchCMiV/nfYZG1iDP+5aHMJ4Yh4fKKTWx1W9Bw/tUW7wPILStctl5EGnH6mlaH7avS95oZIALzid+dIykIyHn4/VJKXLetpPxTd+VZPtrXH329uBxtr5ptuSxXqmbWksn/W8v1apfMWwjDV0TtzM1HnfGGu+78BcQ3TaJ0DIMhaNhO4pQ8sJKdOcpVwiML9EgWGybxWp45y0fSqHnHFK+/gVJ8eCLfoiCngwLE5oxfC9oUQU1kD+yJKpArUqO1kFvi4cgejPXNUbNoi5u2So1YAxbrp3sMlf54TC3jZmJPD3bO3qH1DD01w3l8SGP7OHHdh4t4MEyg0MVDrv9niWkeXNTPONrDebEyCSb5jRo7MK9/AWZ9XdQZsl5WxkXw2LWKZpig3J4x2BmIEvOCuObRZuA8X4Fw5EPkuB0F0EAQr1aUeaDmceUmv9tAB2g4aUwcHokMXhSY6k1UlTnPsb1hJDb/sKvxnDWtexNKYvEAN5c8EOgD2Au4gVcuz8NFk0ESBUyx3TwELe/QwqejLatLZHNdjQCyCqWzqqoTU8T2JXK3R+lHI3AKxOxRtHgtz7cyELVMBt9dRn/861XWEQjbl3Y6OrDnXAbY5lmWRBpuj9Uetj167zo2HD3rSSsT4HtBAuUZvsfycQNvkUA1lNyU5j0TQ1mHBQw3o28bSO0uu57WMmZ8eqIjVw5LGKHPRrwoVi5F4RF6Y8G5cL8aQpOAqtjNmucbpC/7tl9k56MeVIPSfCu8ZJLnGEhIwj19Ue9sa4mlO8edhoK1sKTOhLlzX/f0l92iNVf2z4Z0lykJjiIRwtksoByFglHApxqGkaM8wP3lP7KVZumEW1Sl7mmXuVzW795YCVQiNyvDfsjuCrJ9aBwT84oQg+d2hEXAmpC16NlL7DLKrO7ZOfCzoMMppinzHu69yRl15goZDCFNLtUX/fZKjbEJRwqHUKHnafvHeKFy+eZr2Vr/7qyduNq7DNyoWCiyTaP3sLeT5yswWhpgVWZN3op70KJ7rEIAFFB4nr3Bo8QuXgHkDIuQogZ/spnJ8zhCSw7ihZ/XK2Ipw3MlXhTr65w4oswFRJp76VokCCOwWLz7wAhcVn8AW7rzyTKI2lH9LpKZ4+biww/JwT5e7UrDC8zbDxRdg+PAEhsMQ9rR6lEG+ozNTlWiAgUAJYafI4XeLeSd4+xOZ+zLpo9+cNUtwpKRqNry44Y1JkFBzJUzm54R3M8F26J9BB8K9GGr2rc7PjUVztLCLC0SfimsdRHsXokxjF54Vm0lRgpeAYT/CGc3015keOXXICBbX1THrACL4whkGF1gjRnlwe7DBidw/HEp76lHGc8NuGlfAaDl8Q6lLbpJwOYp6+ANTZzJYu4oxymNNXx2eTthAE/Zp4nQxm6Fj4Oow5psE6anHPXF04fEE8jYkO1roAsBuhiRsK5lgRMhYsLKXQ5Rs7S464DktgJwklXYwOFVYR6cavOU+5dsPhBg8AkA8eZKLcEc1CXQ3IlIBcs7maDS4jg1+j4nw8lRARQ6ZNncRQbOl+Hk9CLLTq/waILU0d6hZlU/zdN75PSmiujoBkgRhNTtm0mqXgtT27Nij0jjyKQ2Rmp/xtCN3O8fXmKvDzEUO1EXM3c3HBN7HMwJ2FiBNeh9ePkss5xvER5i/o76fD9UhgyVXfVe9HRIwj72D7mC8ErHTeXS3S2OoCgbb0PmiL1B6wkwvMlX8E97T2cXAmHc3Y6a1vkWn3qnM1rSO3r4plp5vCMZXrL93b1Udubt5gcwEBawNZs9Zr9lKgzaglERIsynGwH9lWX4FdQR8sZ0esvzy+XtBPu6njIEJ5kl0IZDNV3ucVTLZbFGtEsqg0H8sNOp0NI5gWy+fjtVbA6420RbATOw5WSAejpbIbuwrd6UelFrZxLC6GFCHq3Jt5bqf9UolaUPNm2FCYDnFq+HryhWGNNghXeeM5IHwsIkaXdF1QjKHUAcedyFCDPqAv5/Y5XjWUbsn23XmClduC9bW8zOfh88ENqguGuv+Bl9BHqpEpmzqRucf6p1DxdOlUjo0diLCtPDFH5voG8dB5qgqyzf2VeZB8HpOLNP5zSRlhdPoVf3FqeRffXcuUhNCYlstESrT+CPvA8HAmIWFQHveR1li/aV3b9ViFzUg5Fr2oJ8fyxfhtAqrU7E53TCyKQbqN/R36j9KrqKmNAbsThMQbbz9kMtOsvaCZ3APsi5VVZPIzMcitdHPAWSoOQiu73GPU3iuala3Lr4FE0OBVU29JyRd8R3wU03KMYZp8+PqBhspXMbKNGcdOGxZKqDRwT2kfcnHUEB+TG/brsDfxlXJSOiZK2tG9sWYb+gTneq+u1Y464xm8V9W5szH2NpqqrTeygNmI9zzYNGZVmJZgoIJtqTt3ZrDe5eDEn/OW01ZFCkfLu4gempeIwSsuWStlWwhEz7S9gWAvc7DkcDm2LPknoNb7GvyhuxgPxxKA2YRMwj6lRVI3NFnqTH7wmAqVeO/RaV5VHtZgrOcyDTpJ02ArvjwAai+lza8un+OhIKlQxpCqyeFfZHSo9bHJiPw7EKT+D9d1wm2lbqOwKzEtCL+5gIe4GOgvMzA2Pz4Y3TmhW0DgD8AfkixxbXouEpCsy3eQpGw09rGFsSdKAttWm1J1ZLBsXyvxH2nDzqo4NvG0Z7miUg5A8o6dBYg8YI8uTp9rofWZ86X7JBjNVMxO0KxyKHaZpGZs9BI8aDt89+EUd1e73QXM2/UpSRCAaM3SecYN70psPDTKjo00afN9w5uQLZ92x8fGH0O3qD/7spgSJdNVMs5bCQcbtRkr0qQehuXuJPNP9lErCs3dKVzIzYMsyzmBUWH/4kXRgSw3jJJCu/5xoxPggyizAvQVhnHZI0Pvbus5mZSfwO0mq9Mwr6xLV3SNgFffBvWVzDi1WYxND7skB2yWVjZsldLeUPaVNZcH/EGuvAfCelrwpmL3EUJ1qB6yzFjvrddzL7KEMxMt2jWTZVMGGoh2pFhQpwNVPaQojL1K9F3hiHBhzj+sa/LX+KDeXtOXoDbX3XJNAHWwoCoQnwMZbThKEYh898rX1AYznYY9UzY6dq/kJFqoOftvrSaLI3uMGKTjRFid2uW8XaBopCb7CLyndybBWwnacp1exOJS/cMQ6k/2vBYbybdxv2XHyyZKOC1jELNHP0x12hE15R8mJpjv3QGYHtla1xhQNNftWBE+NGH4fy5pffOond9Br9YqcfjY2A1x2Fq5NvwI7VVFmAFGV/7c/bUoFFh8HZWULirLmgymuIdhJXSWVcqIzUQHIq7haf3IBHEnCm9ZfBFler8dzwAcaerOz8mZhZi/KJUJQW1Hf76aB2i9seAY2tAryD5pH4rJHxNhtHHmAGBa4OSxyvbmGzqkd7wcTRijL7PMKKeah9GnB5w0Qvqd+TPvGFTrzg9lyp4tlDIvhXbWsfAF8AhBTx/6WsHiaoScoEbQKfUEoc2N0sy5ztsn9Oe7vaZxv28bAhHlUWoKDl2M8CsXd3ui7nOfjUf2k6EUYoOgaajwRqB7Sf3z5O4kiW+5glrxtUEyJE5xfMUGMRiACGcsJnEMWOWPa8k2m6unGXb5EXVQB+pmNwuWcRKOOpeFUhvIu/REW8FQNQqUIBJY+LLAVspVA5vW3JfN7Yg59Iforw9ZYrqbmJZ9W6huxRcF8+WUSeayU5bp4fHqFveRSXCHw+wAeqLxH+Kv6ZjyX4RFX9P6LelhQFx5nU8N1+c9c27TBjt7v4QMoDDWFRdNRsztDjkkQ+HFaTyof8iR+8surArmOgf+WsChqFsEKZxzAWL8qw8MV1ERp9ALlfe87dUUICKfH1BrixcghsPbfujg1Ysy0/CpJEg/NDcOYHJ9ftPzC30vMdSqyukloV+H7xpDpVnRHAyJAqa/1epJ+i+Ggk7dbR2Rcr8nK3WL3ehw3NgSYk+sQNjRCkx37+fwQhx2U8Nq0cBRW1FkoO5wTB2/m6Ft1r/x+qOTAD0QPYFbcHJSQiM/GB4ulXvJeqLDerT42B5dAq4L7GTYqOVJsSyesYHxk9tcNihRFQEAbIW/+8f9XTSFI8R5Kmbk8FGO6F3IiJjgwCp6o8OwuUKt1nH7DY/4uXw5VKyo1qzoOYPWPGVAN8L0WNaTNBSyZzpMrD27lGfBhy2AU4QiY4NgAAAMgPAAAP8r3W6V8MMBL+z2rUizutoXR3wIGo9jF5piF4tSsR6fu9aJqMagiTSBG9hAPnvY7pKZJKwMgJKwkkJHySDbj7cpoqwnW4a3jGGyshEz6057J5eEQv0MA4+25xlOMhVZA7OwkXz0DjBmFfyExo6r7ah8hB9QcQrInwwrqSJwky3dm+tDu3K2wBTNGQz2m29QfwDTlzlQID9sTkm5SWdVLRhSvf1f5gwu5zyLeAb1KD6c2Tc5z4fSIb3Hrx6ypRVSHTobi5F7T4IFycILEnUN4hhADIsmEvCdjXzEThmPqZmixlyVVJ1g0wNCestQdUCPTQ6Nwo0z6N2rSvCCRLai3Y3ZLms5ydWFKOipHcFqkiTKNL4O/I4EGbRavzxHgdFEWA+SUZx2v4FmzU6/1kbCIFEJMN4AqYJqQPbG8I6KA97yTcCwH9dHOTkSBCUAjSWLweQ7yGb56l0/X2G9yB2ZDoN4jm+Be1OFQU1mez0h0iqWMkCrpoKrIaQzBIx0CpmS/LkjXsQRoQD03tNNbc5czt0WRqef6R+cvp7PRPb2G7qf2VPsXDFCZixxHg3YFLPcJmsNM9l+DkKBMZkUygNsgY2WU0wH9p9mwJbUYExTlIIqmsu7Gop0gm1/lRkfnXnkvZKGTZF6omArETd2axZC4HMrMTkxw6EZkvSYP8+Qf5XvTMUliRRuwxdNYUpo4P8QhnacqMbA+qERUFL6HsNDWK5pWEobLazRxCq8wFxkqyXA8JhLFodf5olPEAV9ifJTL5HDpKTmA2rBFFP3IO+Fg3IiOroipmG9wAJIXYOJVdkBNEVvItaFdCfKprB8nNgafWOFZKys0SSVSJVA+8ESKlpvbXWHfWUVeZtaQLnsGBVjEUTYDL9sWT4i1ht8F45dneUzZ2wS5Hwxz/VzFR4m4vKPTUes3LbX+GB9lEf852JYTgNpUuj2P2ab7HzNPyiftTxWt9dqGTKFQyetcP1V7h3Ixmk+iMV+ia5wGzKItiaGaZBNf9NRzPqD00N9Z4qOGiQ1zvI1MIjwCDoqUIOi+cNFPyo0pL5shRxO9k0Riw29BDicvzOkGPy55MTXPRm8xBZXP07CMTYV2eP4iO51ckXXwiSKGGcSrDKynrfyvM8z3XvQDzEKn2KDAvyck2dDmHE4HvKtUgvSnAU+Xw2QZeSWT4DaDalPUldM4gy2Ib3eBK5bFSbFQmH0Ad7G5H9np6SofbTfdInXw4dxT5CYdK1Y/wXblyZzGVKKs+VBAOFiq0InDYoSczmckObfrVpN93dNvAmmYq7BGF6+EwggQ/knEQyLlWubes8yNd1I5TlZpZiKoak+WZrCoZSSGG9HA7HRHcSlBcIZPGig0JDc1KGFeOTk/oWyOm9N430vCFwmZAh7D1Zdak9T24cMQKHpI+s6LeDc/JPQCLOeBW7YuyyrBzBAN+yvTa1oat3WSLWHysdZiQXM1vfKhtz2OnVIUond6FPBEFZXeHnBkYZN+OMsHBek81ttaUnbhJqvcGwzQ27b1ql572db9UCpO0WEqnDu4UX5ypN9VC8Wu1PvVkLNnISfzq94qTjUriEvafZpBWlA3kBNatgM1sXx66xIt5OqbwkFvENQgJ6lRpcISayJxKhEI5YXw/NugCJEcJrO0lMAmJw0u3k43xRQFciBkfEK3JwMDUKUfNTKXD1GCVG/4vG83pIBqmYH67cL5ia94/NvTi4V3rcpyHSmpHQucbg0twDL7Cd9crpitIW4Fnw7/X78fZAu2GWZ4Fc7kEPCE5jtffaAjlPdeLw81D38Yf1Kg9kYNwSiOTRoZJCeqWPXofsm+ZGpLo8w4Slcmg7TNHVgdUArj+D0Y+Ihn79QcLWUKv8kG7Fq17DPJgjWoByvIkp0cHuMcTSb8x5OGj6wIqPkpeKLeRS++UW3AKrrYBw+eoybnVIBvUEEf9hJOz7Q+jIJjMirC/OC+QyRrwCIszCshWUyjiIEUn6CrBSb/TiVpMwVO/hJiJJbM9mq0EmcpE0lleEGqIS54EVeIMTbmERms0k3Di5S/EXjOnZYxgh7KAg3NvnUNBjMgalrE+9BZ+dUADGO3OhWfElek8Oh1ftiOhKtVtQwP/L/Sgzc5SkhfFXuyltzWPsTbzhUWWWnQ4eQLAboV+O+5jEpQ5BDaZj5hvFRIkoL+XAtGupY1kmL8SfkW/lb6b8x1uzyZtrcS6K/18WpXTRjYx0E0SmkEwv34AOuIynqF902dhqz059RHDn5TYLntcubVfVwht/DX5TFD/hd9vrTK5AE5MJhdQFdlEITjeQzwtvEdCBeQCXFpPyapfEXzPZsEfOhrA8p8M+wG6WWYEuLs0WTWWB6bX/IlJzUEcw4eyya9JBlsd9ck6JoQyrU82UCQEuKi7lEQLZIzCnuSS2GTjWcKMtHahxjlLohECB0KFCWE0flK+tot67pJkkLnTX/kb9v9LBNijsgmGc9MZVmJ17xvHRq8AHRKGEgY52oHVvPBvcL8hVHQNr2eQc64NMdH2NsY7u9KXiY4N2UD8jgoqJjCfyF3c3r/UnRcaHOh6sfFlmbl7UftjOZpCRbj83PwXdAHcE5jWzZoLtEHqVRP8gaK3Oktu/PTj8PfHjxzvew22V0Pq00AOoHXAg7FbU3M+7khXC34khFpX3h9ul1PfF2pP/LvSChGi7efK8fneAYTJ/vDfFIAHavls5czQMY1IpWGlJF4XOD6H9BSf8O2GzapfJ5wO79bLjaaB6xs2qcFdpoQ/4jyW4bq0Gn6KEiHAtdeYAPHA7p5VJGGwpEeGarBKnI8lT4blohNABKkdH7kVuRtIiX4Vu8XSqvdx9Q/z4wJOOHD1+JXR4W/jI/O9q8+uLc2o5lXGiA5g0Nt6ead4VFayF9Wj01qVi7n2ZhzFOyhwrwFRfPk6TELb6e3S60qYe/hpcn9jRuum8uQKJVrI0/jxwMzzcq1MhtdB/Q4+5E8dupd8Qkuz6ZG9TUNMCnblZ6EsCNG7DG1uhEsDOmMXkqJg9qJ84i9xv3jb3RxA+w6CLo+pZLPeRehAHkqOekjedJPWv61o936wUc55HasINIi/Gv9u9V8pL3Zu/j0KcBN6cZ2t0BhO3xjgMQwifSAwkgldTKL7ZakeOnXj+BV9eHNjmlReclQXGZAsIEX+wwCStvPbHAIHto+VhtlZMwvtB65xWTGfNtpFY+Bi/XfTqLbse1qTfEL9dJGz4Yk5s/9WNXwc3L7IeRVs/c2f6AjEQd7galDcXSpC87lJhomI0ERLj853ekdkl7wC5a/tsljVMKBrLN0FAJqm6qdtiyLkhcPAIznLNEjbPAqv6q8/nf5DKkp9yxI3+crM1P1p8oX9VrvaD9uUKSuHRf1an7BTvkH6YSEOQ/jqGDvcfpH7j9C27P+cuPjag1t2S/h/EIrV8N8WpP7j32EqUw9S5U/EKUigtgU7weieBbbD8ImWwWTC4L0/+oHLxtuFx89tjl5WPkX653Q5oj7T6OHCDEzx0QMj3Xh9hwd5k4eeqpNfnPo0nLgQp6IntQdHWQQ5M+NDE5BrttXFtj14Ggk6e+DGLPKyGS04FPr3Aiv6Vc6hqUglUlaDBzQcPJHR45wNdm0NnDb1NFdSXvWFHvlRs9yt69BhPXK15VGsPPsa4Wcfu1CwST4IUUVm/M9u9tsNo0EOUj49PHu9DCqRDKvMZMnzWbdUprF+H+HdS5JZNxXCf8fjXcE5UWbu7x4suVd1kt4HESuzF/9z8unF6JyBTRxLi3BLniJS13oXORlwnLY6ky6glGXBZv/rLTyrqFcb0znhRJWbq80zbY2Iae3JpJxzTdAE3rZpmgBO3epEyERFP0m5Pyi9e6Bw1OXWzpxlGajccXI30sqz//7xbEaUyFBhd8qtKLEQrbqwEBS7Jw9rQ+cevzOlaerylyJHoch0h75e2mrv3GdRkxlqrVE2/wX19kjhiWAtk30skXjB8RACjb8jmEYEzj9MbbygnGdNpeIHsMOjkVdKylC00WhC1F7wmChhMPZuNiMj3UEZBDkSSY+G6qP1On0l/i+wV+QdxQST2A7APd6NJv9e9Y56Q72T+BDXHjyyOjGFC59VcmYVcOq+NyOpFZMXprS1aX+SxItUygz/lfBzZ45PaJdQaya5WskWAQG9hYZWMu5+EkGQtOjgY+8psjT9sjNHooQ00xUtY5tRjaIdkMM3KKaUzT7bhFw9d09jsm6/IGf5WW2moTKlhDmPDU8JTXQJl329/EgOyiTqUF+4fiXV0IIIUoeoukG2+13d1+muKSFKRPO8HVPkCSE+q6PWOomyCJFvAHyZzK9O7zTTafEwhtZ4Wq5WzM4QB2NSBked0XEgxlL/HXLAIgOQ3JbVbwWA/KBKuf9SqGFArb6xCmnQ9XcSGnjYr03KtyjkFniF3QHvWmAyUNfANHkzHdFS+n+u0olTaKtpm1Ol5EoCxwUP1ReiekOc/LMyKrtak9Oy7wH9L032H0eC7Le8kt8sa6RM5EYZ80WO+2xZWDAbgKtGKAjd7a3GFKrYPWDDcBZeBnnOgWRxTVmI3RWbIfPRg04ztKp7BdvxM/xPr90gZeTYWOQ2P87JIL5brrhf+yRgk8MAUf/lQ4NtrKmqyj9KX/rrvimItjdMyRcAD8RGmFdaSWDTVADfyhQNEUHnqp4Xe5+aJ10HoxVN3X8HndrHkgQuShO1yGTxXj7wNnPf1B5m76EkEMrEbNXX+nzgwU26jw5NcWynqX1aPYfHq4wn2eykLNYQWEjhpQ+pLynYgTVJi+26ISg/T+i1pQKGB4Y6XPotOjkdL1eOa8iNm8t7RgzXwDuGjPdeHCvuO9+EhUsNGRKQU4taBXCoFeX86oLh4hBn1x0rnmE0hcD7Ye8b4QD7vldY7n9mYvKc/A4Yd85fpAg1AxXt+cE0jsND/biNyTM4XerWSrFOBBmbuHVz7fweHfmc+rEH25Yau3NNHhZ6hPgR/x4obUvL7DEPax04VUGLuPp2T6mCo8Gec5ATUX+v2WRNdWPM4wLl9aY0GluTBCyFeQtJxwDrsloZCWDyMgvUAPzRf67yAeiOemKXQ3UbTaBZRr/VFAJvIaH0E+XH5g1wkY2nrAWEcoZnejXNWl1CxY8FGBlWPK5j8Py056+/2FfrKFsVhG5UsllTDsRQz2/TEV7QRdbqwu7QjUIblaXSL3/rPZu8bqoxvvlSBn3a57msNCxa+RYkh5hmyaRGwfoeIVEgHJOOAekQ83Dl5Ls37+p7rsDn1+/fdUZbLvvxnIuLUQ1G0yd1wD371LP1CAtNn9Tlj3NYI3CnT+R9uhYF3CJZChjOXwCc1sgI+yUNWmyteNKIJLL0OJWmgoqnoBiwr5b0btEOB9Z5Jy/jZDzRY/DS+ceauNUEpXXzhjcAAADgDwAArX7ZkpJ+8w/iOC15bLd/a9xUbzGGFotMEcYpSZN9kFc68ke8bDKBip4T+fQzij4Y31knbeGyLJFv/FOVg756GBIHwOZwpt6XznxvZ7EVq0Al5xHy6N8c4MMn4qQKsTm9RB5LsukmKZ5fNbfb4+IsHV43KbA5lmVWYtuFefQ9t5jZlGDqJrReGNJU13Rn/Sw52Ol1T0SYtsOSuEAf6A8amYtUNxbMXK0s1+hbh/msUmjVQ0Ok4GcV2V18pVt1yLDuseZ/CUXEk8zGSMEC3s2DCV1TW9OZJNmHOFcG0SMPRuAM2PwDCtMVTlNBCSX1Vw/JvAH7bM4odKJsEnipGpjMNyZGkdnHfIprVuS2Qt69Yn6GHLckI4F3V8gB7Z5N3HufkwtID0dHGw7HCe7pjEu31fgjOKlwlis5jjipufSzkL5i5DbTohZlL4UBDpHogw4+KBfnFp9jU1mARncoI3Icdb5k7vJYImxV+WWSs34s7qyHW+AHiLYynJ5XaTqTJXWhtvgMzjNJ2P4lSfz6l7bGwB5Qvte0JlGd6rrQH77WD4S3zyRHvwBEGnu2RP3FHh/1zvFlFtaLS/z4w6NbiF7kZyV2/47oCMhuf2uhFCdUSfrDmynumLiY7H6uKKUhKHF4/Ek8UwtUvLL1Ty97HcNzdin0/Sz/7xDazJLSh+z87b0tlmSaGAxXY/Op/T6uoS3gGO/kkZDaDiNhn9/ze+UVLSrCLXzwQykUggHlbNl58PGXjItb+q+ahxtNYX8tJuH2LHI6QA5vaKznimsDCcLuzXPNyso8n/JAMN1hw1pRm8q7PExSiMTKOMyDXEGmmMlHuSeFf0lNnABk3h0YycYu4TIvLSi0l57WH79NwOfMJ57ShJ0MKdsT2uYy+izZ9tly6YBNElXRqZfHr+6XHVypR2+xm94+k2zfaoc7RT2rcZa3WLLsu+BeLWDK+sALOqJ4ma50EMYAVdo8RJ1r+0bmhZiWtGx2H1ZaWlUsjxEf25pLpvdk7W0DHEqODK2uua/fOhsmoDThrAIOMjJXHQWehLgLPFZqFGe5eilUMhhTTpmXYyg08X4FQivYin4UxR61ySOhkRC4+Ntti3n1ncnI4GpjZuwlAvPDtX5RTXEOWs9/DGpIzehVA9cvvV5MiPCbHY+OT56nu+Xt+XkORw+1Km6xrjsmXVZGehdjto/cF5i3C7cOr/4wOoOFPQG+E8h08/OG6PxfA6suA8nNk29iu2qMKS/P608URfOtykJ00t/VwT2wIsTCXSR+P99HTg9stDVstYl0x/rxDMusB0f3mHX+QNrkubJ1d6XpH0lEyZnvlx5IqL34O8WG7tvYoh5SeKECLfYzul7ZZdmsAmQAze95ZUWafZ4PwU4zV08niGyNoDuC6t7ws2JiYTXfwDH2xstncuOXPRHIln+Vr+c8RFLS6VMzR//aLzckACRL3NdnktdmJvqWRHjhaAO1DD2K5kxpHGTW2fpFJMq1FBdOh5Fw7OMkZ1vlC9JeJkNwGF+FIaQfCH3rNBU6aZu7qTqzAddkqT0u/YRzRPJTJsl0tdFm5/46foUKKHlQtPIUcE3KQAIzUNvP9sXMvLJB473O9Ge6+0TFl1fNKV65qBUtrxaN4HP/gNBeMLn3sh98gbj5Y+/OTrZHETPAB8CdFz02poxsL2jcD22rLzqbWYeuuPqmBApscBmQ+xkLXVZH9d1FqJgWBn3CWkBZMgsnma3H+ex/oK5jI8ES0089sfCqDi+KZA1iqgZdI20jDuhf4hJpKm5mCQuizCkr00iz9W55z7DlMqcJfl4eIekFb5QYX0dgSFSr9IKlG7Hc/z3ezachnark4IOaWhxB/yOCLOWzWwT/gLtV1h/ZiRqg5T3L5nWhHORCrE5Dh+PdKobDB2QRuPNr/F/Rm4OGLBV0unkL4Aeu7Wh/uDB8gjq5WFgRRN62FehwCCTWDPdIakaTn53N0mzo6Hku8TsmT9P7Qy6VA4fm7zMOwJ6gze1YZ6FtwZW+0XDoDmtHQA5KsSfkTwhOli86AF6hNwTskA+rup848KXpfMbtXQ6ZQzHWx4AhlOieLz5ZQPyBleNRpcRf+rXaC5U+PcdemrDAYRXjXiQhFAoVIxQHMs52KDK069RD5mK3+wpadks7Mjbl59o+e4a13PDBA59Lhh4BXxVFUxq5ntsIfTYQHgKFzPVEj0G511Ha0cgd/Xj5y5o/W/0rJVPGP/UTX/hcz6CQuINBQfcosb74QFpoId+qnT/mhM2fzwcjGX2dAr99JVn4yVxyfwBxgLXA2vhNtmKriuTJ2Gd1aBjYl4WgOz/vL4x15puyRYYu7HZZvMYumZp/dTiADWGIKreu0ZWrVdd0+1w0FAudFUcMYlBCwjLgHDzel77ZmLThP1CXH+7TJ7O45xL6uGPspoNnF2StdGznTCw8afghY2DLn14/OPmzDSxr2HYmvxUvsBVvhnP3uA8jljnNaKJTqrPZE5RmpCQukCaVSz4//1wRnxc1yX0reSaTSt/WMpiCYjALikqa1C8SFiw2p4SiOFYgfEMikJgJSYOKcszIhE6/+aEM0XEqPMfB9YL+c3aPHopU0nKUNsQnyRdCwEefI362M6SEwL7R5PMe83DCnoBZ/DZnnTh32boVclCQrs9FGbAwRvcK/KzEUgUB+Sk2NJi0mjjUemDn7nyZGE/UyYhzo1176zAeCEG87pTPRLoCvrNZqeIl071fd0jcF93VIbpr3yB4+dkB1or24zm1+OHWY1FpSKc4CIY3bQ3TpxSIaz4gNTYYRWf9KbK6eWMyOTUoLroR3xOZiKlERYzHqNN/mDaACqaENALpp6MliZpsM/9FrHyzyM/CGpmli9a9RjcYRBiC9apI1DPVJGVUAs+ZcH4Pz6eV6NjF+SSOc21+vXE4Yk3gz8TdSJXhZHLuBJaoG6kiHo6AKYg389VCR/s38d5Nt8xZe1Dk6Mp7rHZiLHABmRcEje17rONgoITMahMVMF84O55HzgMGHoK6OZP8XoktM6zL7sk4qVbr6g3jzMlWvblzcrQXycgTbwV15YjK7RqYvaPtafO9nOLsZhNOCzsjFmGO0eujQPmyPwFx0cJ7C+fElNIF9+hIhVIHSTYkqt3FA8kec0tkDditmO0MRmImjIJY/kg2k6NUc5rtPm4apWcHgcXnpBMzZCOj63yIeOpDrk11JdCiw3oWEfoI82nQtOw851lGImRG+TBtepFTUY0iVjEY7UfkRedROAai4vwwbn9z/4Am5miY0ph7DVzU3QP3OfBNLwQ6JgOhCQGKxRdVs1Fydu2hrpcfNj/tTWNdhDEesVuLtVAeWUQKq6iQqE7lcgYeg3GNZ+V4GhXqMSEPgmoFijL29gpQLyg0SHwL3qveLZULrkfEg57b6Alid81RdL8aB2iT71pivc3k4XyjCNCL/buI9ONgHEdgkQx8M0mlqDhPbjbXKOXx581j42e6CBWE1bCHmzyCo1E5tf5o6Jk74NlbztxTgxsPTAD40Y9grCTfcd9nQ8naJp6AEkWPLQk0aQWgGCkd7T9ec2PZw8n3HAf4bKB1YEXskseUdhnp2mJ+DSukhdQ2j3R1DujXC5l60u9Nv+g5FsG7oe0c1xjn54Rm51fONzGNgAmpAzzPnhbjNQdg82z6IViCUFtKKYDAQnVwrGmQh/uNQIC8FXW4UASX46j7OnjvbYOW111z8/SFQdHbyINU1U6FFHpDaWdILs2s/DzEbwNR9RSPqmRemeEqaaZUiaIaJkO7lObxfMqjiz92Ge/inEapdQpPZDbtsilgQHJIeK0+yedaAlG/sWLUtbUbchrmsSTfP+nc3f5Ki+F9B43xPZr++jEpDCxyP1+Wv8xdeSbRXpbwXZQUGlbzuLZIc2tf8R+KERygL4DI36oB7q0b3In6lGj0e65vLhDCoKfP17vQQVc/oG2exa7lHb6FS/0AV5TE/GW5Vz45qFKhBW/U1qXzthNdaA0ycTbRuz9sTYGNDRQ9O9w7B1b4RWV0lRNzHweprXLNMX70ENzkug5ZQfEyQq3NKG9yn6tTTQ9OkadU9aVcG+BAFCU3CfCICeXzfCikxN0yLtZepYDC/WhRXV06rm/7rfNcoI4CPvvpqWhnhKokphihgG1KQ+v+iob33uNoefNf8zYKttGjM7wXGaJpFoB9jI4VSmkRu4/7hy+G0f9NN3VMF7VtZ5P78cdGK2eqqqCjiepYKnirgvYKWJJ47V000aLud9BAw0PG3q0zQEGSs5GHSfSWkvdV5d0Hot7VcroESJuTpPpklZzUpnqst41XNxQcljE8/VN/bvNXEGxQMljnjrtskb5vUxstlhoROK9fsftTjCXeKtf37xcgZ538iXkzkBBhcPVoOlKUxjxnXpgpMjWsK8Yqjyqok40RPhU7pJvxOR0ICKze/Npl5D+h2sInq7o8XGnMukJYklHtUtlsFXOK5bQjp3VrmG5tL1I/wQ0ebWjtGjf+getJxosx/uDS7/JnEIGEZQlUOjn0fiKdU0A0XOePEhjQy6pTAIIdUFD3MzXKeDEMEBt6EhAjV55TgwOflrd9YnCVOqggjWBGlsTXW3vk8rrq2nYDBp0+xck4j2ROc1FD3i5rtSIIm/LEzGjhEkmsUTCS80xoIt92NjpL13jIAI2siQ7mMeHnzb1m1gru0H8F62TkrENjqGuRe1f2stCXrRp7Vfr2rzBWiTcFFPXyvQdgvFMrBa3eucejzQ1Ni3f9Fs1enylALpCImlJHQUuhXpt7NN1puo9gLFXwOCeH2KjcUMceA9dWCSjDq9YbBw7nINXii3yDnx437Js8BUw/KPE4dOYLYjWY5pgmZV/FQ+F1BKmhD6iatCBmrA/RhcZFxNsG1nO1aSpJ2QpAzzZZyNacZAwD/q/enTnyOtKpSh1o4jK9WjdG0QL8AISvomWROzfQ73XPWcKoSz9d4QGJNB6jRlXF7AtsHJSFyuBXHB0QssuY5RJAuuAPFqyfFJWRS9C29N9RT8S5JxG/8VnX/U/6t5M5au2Z1LdBiSmDSp4u4YQmuERR+1wxjg4nqeZTG+LGEb10QGJzQ1bIJP6Q9oXiGkoKJJU5kGpZAguPV5EI65z2ciGi3Xzcr8AtJ+Mltmeke3StMotzvyU2GbpLgkW6ulIdyHMgmalRXgvgSzBvaJx+X3gKar2rs44Bi2EvuXSigN9RMEDHEGGZi9g0wWPfvVNgYU7i3/IuMxg8ZGYP3lfU/EhSaXrqRfG2/Vo5hqTlAtSItUhkyKJzG46uZuRHZJoP61lJ9FMDk5MH4ivf8SniZrxCpd6t31XnwLicy3m7fjJRPEKNwnVrV88Ias/2No7HrbF/Ll7ENLW8L+SfFOIWNetP5qlmsJ0W/XyBA3YGEd8g0tCj/7mFUtxHMViC+6i9QVupRhO4NFs4AAAA4A8AACBDOqCXZVEXx8WNt9kDwMf3q9FqZXhrl1MYrClwE4blQeOIKv17iQeWiqJWvfbTUB661NToo9Psx72zw3rnuQv4wI19wvOGas/tXSQ8KCN6mcg6W2k5xH4pB1hVsBvzFfzvqphjCZQeC3eKyppVV3vYvvLdG/Nk20Sa+6heVdyK2vGX9s1BBKQSs7JxuQK53H4NoQWiBkO+WeHpOwFfxkr1h+iyTzwYBNdj2usEa46fxXNAliIVerQwAUrDedrODZsZaGcIoGyuw+KLMbopBhIKZVkc2hfBoThvPf7m02aWEfvA1XsWG1YpxkvQGpk53Yg4Sfh32ue/vDg3jMYiqVCajNWgfRnCm6rrUTwjpToOu/CwGFwV66AMucgnV/PdV5xwzAhO7PJk/6mwePoNn7S1XGWO2P/kbgU7Qg7XKQaXUzEo4ReOh3nrlk7vDsmPqEVC8LOwQukoemSdjlGNhrHPnbXiy92OqHRpax5Yw4PgHefNLNLnshzctJrNdnxfcu+hZ9Utbnvg0EE1CtrMLP8qgRQGqeAfx4rWjO4S9NNd98a9em1jVipP7fhQFBzDtplNpG8yfQi50j2SqOzx+gCamVDrFrRYlHhV2IbSPnpgaidcwf+3FqolAoK6eYWrSYDsFGdB5WLbYa6+HA+aDIC79WGX71lPqpMp7lS4Fq/KB12jmIiUA5ttCve8+yz3zHNvBEe6hu4vTQMN+y9I9Xa36nqRdRKUxt9c3GNUN6ncN9JiJQEi9RybyvWjOwvRsx6AaAnFZntrAUQW8V7pssbYLoyvpWBsOaSlncUDH53iWX22HpCOtzao2OHQ6iHUCjY6lsxJ1Hq22QiuxcyCDvlp7D318CWqWcQYywd4aSvTO8XseZrebt3xByMfKcKLiw+H8FzBR4NVi+fnVOokCefp5HnUzqiDarqgmjqeT/7B42WwhqqVfEzUAE9Jv6fWLO3yeIJYb1QDa+sfISx/mkHB+IgeJcZ6W4Yc39mlPXQt+jcmmi/TrSdYby4ke0iJjs6NGhLXvThhNKkoiHMaTGLVU/eL2e3pORSDuafwS4yt+c0LIP4xpy3Foiy3cM5xFY94nJXwoux7tulbCpBT3t/iJYx4RFfYKHhbVhYEr/2AulsHmNN5u6MKkxwP4JNlniQs6QNvwnE5FxcZGa/0Z93np8r4qsekACfHpHeGNBmCpkbZ5jXUQjtfpkJKm81HYwVGjbS4B4bwYpbXFFUhvaC1vNgg6414qNyQiXaIY3SbMysosahmkmoHg1UCA1b3R575qtLLUIo/PFihorbvTpoKPLR4TyKSL28eH9/p/8rtX0UspHIwyFEjodTJ4hsnWgHdBg9dQUWOHCqDzUXVPG0vYJLQnjt86t/b89XJqO3ojvuZffyqMoGizZExnp4YKFvgoO59YhXrFhjVSdIqGLh2QPOZ7Ch/NmMcKfHs2Z2JV7SAkZfFB/ts8OqwNJVb81nFq6Ho9IZADPJAgroApfuCR6ZFn5Hmke1E7fRtas+SVu8ddWoB1HS3y/tpqDpwQDBXK/CfXd9HNgUlOkv8jy4BVEICPtan+tgnG2ENqvVizCMrRyEswYDMDkup+QM2cEVAQZNScbm6OeVu+VolnpkWcKvucCnOombN+WiC9mvzn0k/go1mZY4K+5i+7CsiwPAamyulDt3tGb9U5nLUviwqOgyr/jfdaaU9nEoDU2GLCt4dCe3Xp3jG0l90lg+ddRCTXfnIemkOv5i5ix+d9veyio12Apwq2mBqBz/bHd9L3SuYybxQ5xR9d/YagZRo85dYhznDJi2NK4dndvCoyi9YFqaGs/np3aLikaPuHEasA7wByaUjgVHgpCX1fXNf0O69nD3G+EIL8KkOKU4OM3K4i4+bp+TllRsn/XE4j+kxtM+nvvccM9J5PKqho/azI5vryW9bC/6cBrzzl311V5MWlN9I+naPXdrcv4G45/xEil7n7B61utzuuDTVod6Uubm/0/C4Ukiyl7vZifFtc+DE2vu+i1Ug8wObO/H5ozCjwz9f7CEBU35wXlUdAfWUqBDJ7WnXWolm5qGcZoExnQuJ8UvooyGBDOT3Wt6NJNiHnPKyXpRfHnFWImshKvzYN/ybS0USLy0wk3gqzZRB3ropuNF0Delo9so/LewYEQkyx5rEpWq4ckN0WISm8p6Swf3G17o44fyHmPNajeiAkh1FCK8cGS1z57wW2YV8MQD1pTkiBuHHxGYLXXx9m7f//Vs6jmIiVKzLiRYRGEOmQFrZIr6WqacQFYeoVxxaNZdDnhF35E3C7rZ9Jm3/Q/WsWyWSZo3xQVuNZbfrdT9QlB3aJiylIk9zPS5a4C+LSYr0bLnKds+H5gbSoOie4TJ8LLVgHBVNj+ckCk4ts0jbqsz24LdZKKWQ0lAkVnu+FqFHg2YdEVu8EMx/C94puINGeQu9xi9H0oGJv66l3hSCfoVvn+lwQUzWqE3pEY123p9RDF3nq39sPU9506WD0pZeq4x+BwlXjAXWKfxnuZVqmmvQ+3D3pzdVX/ChNWWhWJ1wal2ES2VmrfKW4gj0xWbVGEKpv9JrLOnOhPv2eMR0CcyRPvp/KvA4dxsp+oRbIEclz+MtsajdTkPKoskzc7efI1hA5kOTfi/NYYXryzZDNBp+LhDyttTvxXZwTvsxut3RA6IkPqYeQYDiTwLfcqtWboymv4liS9zHCn2kl9i5CouoFGuoar9SBP+V+EqWbV+lsjNepP1osxeOwMSdNX3dVF0TyOUqcsqHiGbQUHqtu/gTBzd3fDSqJtDE/qbMECwmsZjrHQojsIE0Chg92PhV9yl2rUXlSY9RHzh2KhwmWF0syW60yi/BcQCLcYNroSgolSCfYwKHvCmsdRJqjVl5mghfliHOHexQN2rZe4F/uzEFawRHHCDLS91Gh1KJ6vxkikJHB326fdHgqQ5Vam3d5keGqvAZkvQgpEcg2TEId0FMT4z6j+Crq3xn911HnPunV89WahUF9sjjmCI/dDTahVG97/plngu8E8zVDcXfgzr1GfETC+yqHzcdG54vtcklt4nyLahzr3JFqjsZWtg/6AmOO2j45r0txwAskyF9GUA/Fy/ha0wi0PP6RIUUQhj3dti2lp9hFNzKHYqbrGNGhOWEWCZxaoiT5ZR7xwzy4V9oBDdbePUP+gz3sXM3E7NrfCREjDxbQeyrfA/kysQ3KqvhrRwc/eGy8AwmaZqowSpUgvstyZYPmpRH5W7JuIPQGSrDNkDLZ7hQObfzQTmmEzeTZfiN4bIoG57M8FxeBQCHt8Zo1/ZAcdiL7lNfyMm8n8IXdFdIfK8Dyq2tAYJQWzvsRXK2/u21VYOUEO1xyV1sRXDCUhQXBGoIwOJi+M5rU5gUMeIAqa7wSmbwGrnY4JerqZ6eozi4Qped/SP6zuKy76bSSajRQ6M2G7ZdUs62PgIzPI7DelgEcoS/gmRbKx/UKK8Qrkv5OHPgWggP7Cnvp+1NYzvbj2uzIcWL8MzCpDvO0F2JMy9mcBsWLo6v1dzXlOU6Rn0CtIQVHT7mRMdqBYDcwo24BABfhtThpqe4oaaYCaChffZUyXzBXZrpUSlzLcMK57HfKFW20DM6gZv2xPqYSo0LHGxd68nHo4WlVjyJ/dOdyTuTtcpvL6bjZoZO6Sw+cwT/k7GC4XSqKII9SDvzGG5k4G1/OTdR7uf5CLGgbmf3x77ss3iG9AXNAI+xWIg2hAZTM0Fc0BpBPNLm8IVKZUDyp2dR/ppp3sf7NRVGdRAzUR17DKFE7+Hxp8S+rSXGntah5ZSF4wKs4MzquZdoL0JzBlub9+vwWs0u8jFaHXnRG8+C6XWuSu080UL8/qAu4EXUOBGzz5dMSLZOswKWRLxqW0szCDJFTjrA629QX/7gQ07DKph0RuetYy7lZKF+qYxmbSym0iFxM8YrIBWvRbfOVG6cpw7FfN5dlPbqlC6R5blTNb7y7X7C/79GfqDajHQ/7fCZCgt5Uzx9KY3nnviypQaDSsAYLC/JiFYxaZ9mCQdlv1iVSg+VsA10Yl/hKjuNptP9wsjrhi2cWt8LMn0FujCFrPkZtTCztKMl6dg+XpPa7K5LoZcPlrMzfZbhQZDTT/MyJ9N5p6/18XjfV6Vvh4F/YqbAbp20bJr4QJvXPiS4J2n9QAhOlCgyeNwityZGWmIZnBkKY7Br2/qsV8uLphEa2+H4tt3xhkref4psGRLiUgRuK9aKFytxw5Ee02hgewRJNuCxnH1lOq8H/90E+HzBSbgb/CS05vmWB9Z1A2V+SFnRg1SQqtnEkYLJkL4Gv4u5BiSkFC73576rJbD8imdf6BPDQ68J4BhFhIwNU7YIPpShND0/s7BlwGBvGnsoQfJSgKV3hkLhr8cQsjOuUyvHfNp6T+YJJPaMU+x6rORMJI9YoMCGAM7GSSSPuUGmxZpauhfycMuTolXmhqih4ovaI/STJsZYY5b3FvcX67WerxiVFWOSrjEQdPP0Zpv7fJF4H9svHemuX4hwbxrkoFreJhQ3Zuqi11I0YWSD0m04S7Yjx2KAbWxMTVbDype+btnkAQ7FdcxjTN8SbaxJLOHOOXSolefqQ9FooSWUrMaXSI58s9Qee+Il7Le4/7i30RiQ+wakpkpStjLd4e/O9YRFs0naDgVyAmww23+kyfAMep2sIn9qrWovELvD9I4a3BvKkCQVQsoMDTaeSw5hMvMdZjDtWFFJdbq7V/iMWJZT6KCogFqODvqV5W62F6BElvMT4Xm0pbSPWzfNIMPZVX4C8yqgz3/74dMbE++O8+sPayPDZW+wqpx8Px/SVeeO7t+K0PrN2tbgvOPnUjm+/r8CfF837L2upxXK8igKgTq2fM5HNjraurCEYbcODrh0TGWTgbYvfHQCr43y6yru4DXKHeKDmFNuF7dJ7g0g6d6Xn0gq8Y4s420QoYiypFEv95H9I9wDrqtt6YVHvWSwUgimok/9dLpKN6MBop2YUXjyZJgpmE8XHQpdVriCTO/6mKvOB56ra1mLj98z9sOxIl2prJR2Oop0spzIsJbtDgtTOjMw/fbOijgkq0j/eAXDurn+Bn6Zegwe1oWeC+BwZoIsDzAW429V9pDhUYv3jH9n586of2tcUME5FKFz+3wb1aSnBhA4nePn1xeLFTIoqzGqM1rL3A+1O/wVWyORdB6leXUFCLW8EJDl8FiIttojkKwwAx7m9IBjuG5pfFVeVjIkzAf3bzc9tkQTvzu4FKzkOxHX39O/e+zr9y7D7/ydMJYZc49WH7masXfJ+PB6Mhl5L7OJ2LoXPht4CANKo0m1r1kYbvzWunqU0rWc1cRyoYrnuzmVaBgTSWd6s5KGer81oXoIFm0mvhzHKW9x5GBSmzSSlhQtiZv8wA40JhBoz2Yk66MHRPaojpM6u1HgWHIAb9R/EuYCAAAAAA==');
