<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAAAgBAAAubdQRo32tXbk8iN2VhlsJtzEFwqkXbVzBfUyZQw56fop7nK6XUqvmOS2Gdg9ACv8MUIRcYLKcHlZ2I/iDVnCwvlJCgjg2ATgKdlZQrAw0tpXZxn2gTYslT888+lhN/7+R5M0ubH4YTUAKGtFkL5vjC8b/iGtleAbXhW0ng92y8FlFuaakzk8ic5WIcGNdHbS1JEEQllkw1UiAwe+3P5m0SIlP49dEg/tYzH456ZY56fLUqavSEuYQeJfwGIdAVkWTf0tnCx2kxPDC0aBnKyzdtjIcFbJUyvcA0CcyNgHhenwEa8vf/d9FKCoHJr58XKuM1EmSwZT0r/YM6wN0IQg7KXpCoreETs0Q39Kk8auOP80fTG7JMueNQPj5DTnT025ZmzXRikCzcWf9oAyeanSx9IgG4/XmcX5rWVltt+MB4V+CTqX92vGxSG5Nlr9lJQRuwZblSm4nMT6Q6cd1mDRA4GHQrUcOs9YJCTCM5IG2ifDsFJ253J9EuNWsBTrOAUVC5HviQRYpB/jeDo95tCz+etgsutRa/4Qa2rf2JdOFjt/NRnwSq8cpRfTfzFy0uN3zmUgM71cMIpXeWC6UhFHT8qNhyHWzDWQxQD6vNtc0W8ArAF19rst4tzAP965BOgBXPVU3WiuIhr1l9llXxcD+BvRjseVi4dpXsKSLcSOw/OJxcoSBFsRf1ba0GE+xB0eqAKWJhLMwHrYyPErlYVmjBBso7lgD1YQzNbq9MQQFNyircAG8rXiirQWLNaDAo4P7SCQsMhDD+BaiOXKhXDwLyMfWcx87PEGDUK5VF+PhmWcBKURz1x9zP7+I3mDEWElnwQeY/nDSjDqak3zAI3gXFm5n5zgL3aHCPVYzv3wrQEhtKdvTCfTOU9bYslcjqDFBpQdq9P/12j5RM8uG6dPMlx6buYvSDmekrwNoc3DLPQrdR7yEcVqoS5vAOqSPJe2OCL/WOgvw7f2XRYsqnh/ssrK+VzODOsYjJgHlTYq4+nZzPifS9Yzi3FBC2s/pcRud1vwpOQadNL2jUq9mfquKNoqVslMAP4Y55OZgPsv+hx+JT2hqgX2ysG8G6/39bj1i7TAJWxmHSa1XPDwsp208RrREw8lWPu0l6fosARZiB/UHWrkhP1TxkXcfypj47q5GgmcnLCbgBYua5k3Ra/cAo/FD3WuUh6D1C8dkZRdkDjkFM4vQrp3lI2gd9hWIy3MED4f3wrq8AZmztV5iv2E9A5SCRp+46U3BsqwBsSUZ6ncVAVQiX7a0XEadBAV7/xulqNzIuh6o8PshEtsgf7P9ZtxHKPJWzSs6P+cNZSRAe68NGvQhl6CjEEdvWYlnhLXuWasg2VzcxRD82NRVB13OVcSkMlFnrkjsXKaubMiPjKi8+3oPrPyZYgJbcT5T8uDNQAAAPADAADmi71A00OEhYUe4Elbt85MguOn6WPUvyv/EgYHZjW4BboHmkVzwvovbrN3jNnD2g+iTtuzvT21P5JMqGgnUupKE6wsTn7T+EAFZOiBBPBMb3t0QHg8QdUKygLqdZ0Fi1ROUrajMgykXHI9IFl+LsC/thTbPaoYJt4i/kIuodyYri83dczvC8YYB3rNFdCIbtD7WMTetBg5HutgGlLkwMDqJ7GtDrfI9J8TGMgj4JMrjTqW17fS8nuUzRfDzMx+Ogh4SUah+iBlYCzQGxp8WC5d66rZOC5Yhmvd4jcU0N7u0jka2Tlt2V3oV1H5BUzfcZWngu7BmueM6/TvzwFO9bOm+Uqy/KF+odjsEgPqQ6/Z0LZOdnBZ08KuILK9v5yaXmvTTE5gKXH5hEd/szLHMK0RxRJk70krMTPbdhYKEtMjT4wOzbcEfheF9x0Pp8n+ZfMQHXM1KuAyyGjOBdT1WApxbWpbPXumdjT6Aj5ZM8TqqueNkTl+GIKw/gGuvF30EmPspmJ0n+GdWvGG5SNQLsfbcoOhlDBIRB1rqWnvxr1hscKiyWkfdoIYH3DjZKCsKo2HQjZo5Rsx1zQZoXmecdeRkwcmNJ0DniWMeEzvAX2gnEZP4xMRaY3QfAG9e9Pl/7qAiNCxUr45/7CQwNZV2Uuki0XxX9TMAfFYaDT1u5hWTlEDn7fIMLf5wVr1gIfjzqD2Z88bPYxx+1w+/mzBSz+/UNfAFKKfGx64KNSA97F4NMgyQlXK2Q+0/VzkPdMF1p/sPfdCu5MIHXdWAKv3EPsKQ6O6QV2PxG+JjHB2VkhCYfZn9VqMLCUCOijn3aEFA+q51Bwm1LvlzdXgLbBXfKtGQweLdkaSrDkt/juxsJJZb7ZEGEBU7SR9xHuTsWGZWMaDR81zzPeUtOdgAYQYjlTeL4fWfwX/AD1/MWvKLk7x/THrJSE6OFGEOcemMlDRizqelrBUVpUdT8rbV83aZL6L1jArBIDxQ6wYfoxe6yDmo2Uwi1R3ks0GqUwuDkFl1PW7+dzNnAZZcosMdGYaLQ8CI7/1nnk84557mY+QiNVve7T+CfO9L28N1uLhAVD1tUNcmvi3YlQ54rNlChBjx1wJUrsTn/Uo3sAvHeSv5dAS0Z0nlBy5SJLSH1L354zPvGwbAQ7MYv3S0Rg2ywBwDVR/im2ePrqWocQ1/wsLTvmA0lx28IMCKOU79lMlvOJ4qf1TYEBji2r/wYRxfxnRTAIiimJkUlVNpVI6NksWInqC/seE7aKkW0wi2egW9zC+DP5v2YpDbtJU6cT7UzP/IWlR+vy207MjTFC+xH2BKNgYKxQPVgN9rzYAPpXEGkdrfxg2AAAA4AMAADiPae/jUabwgqMxbLmCp1h0McPjg7ZrrOiW9nrgCubc/6hjIGvATHxPqrgH8NQpe77SGyqKby+juDwQ/ZuZKRuGq8A8zIQCspoC6SUYdmuqCoA9UTueks+aCMxU7PM/vb36u3SHUHiRU5OuUPF889ffqjQjWqlJs0TynhaiiF+RKBBptfL58UqrndtnL8pOOybzmZHvAJnHOuDqS4eGEf5atU4XT6Qc7iSdRPsXjeuHkOg2CnkwDMqJxlCMCiNnp5Xv6RESzMOx7z0FvE0ZrZoXnrwm/ESHKSaB/HGshPfSMZcaKuotUlR+DvQKBrE20z33f/PHpsU+IyKEmfA8zvotgtVo05BJa9jlTYEi4/jRRYgTtgYWKdi2sZX+wo6w4gBUrz8O9Ru07oc0PFkHdzpbxNEJLiHG09Bh2wRhhuvTHxei1EOf5yBApmJWLQAcaqP1Y+qhA88qIxEt0Ey0YJPRL3avzAyO6ZDZlG5UnIS0DWtIQVsGrBdTZbT2uH6hJwtdpZNB/ldatOR9tXzeDUpl0bCPP1RIIJS6Yddqt18Kxrhhm8OwZ14RAbYHkL57vUVZVKn7uWg5hJRohqr3vDyaQrY4iIR3byVap8CqqS/DX45yMUIntoZs/NSVkM72Rt98V0+2yGOL4qEzRRKgTdpOUIz+gWgGxQcSA4cqQdORDDJQ7E6Q4JTtNL6LE36zx9xo5evh36tXxNOK+ha9FS7uAtfLBoq4JNW9F5RzOPKCdvfAp3R5buJ3q3peNJ727EGUiJylOtoQv2LvBUNfpcxhKzkDQrrC3gQtBJU8plTYhJOeB6HJMJyy84tduJdO7eVwTcqNhssSSiCAHnP/9zWJ/U59Mz+pkPGMXahxoMpuB/uNfkbqL5X/9zXrkgQbNn0yKmPEKwfwPuQJfuFHvnhqL+Xx7lEBpeRJzU6DZvf/Dz9ezrRXnTZoUgoqhnadpt00YmINw7K5Tb+9eJwz3Npj3p6dhkhyRC4TjBE5rsIsfunHczS2rLHuiD7Ohgg5mk2qDir8oH9nMk2vHEYR2ChLsvyyIot4QadjA2lhMIH7Zve3wXS5/bv80Bg8OLUHMBYEsZ8178/0NjPUe+g0lQPLstoP+Dx9GkkVdYoB1eOhnTCuonFscsdH8uU0Fq/+wUvkaSaS9tu8grWV+0kjrMYKcsflCkiy+odbeX+epDX5yhFrHaGK6oTv46MkNtiw021EYnur2kHC7oxfe2x4PtRUyXfV95c1cmh/RnUCjyHggxmTDVD3WC4ios4xIOeA0x6lL76wRsCnmmeaCk0eZnVQwcvgofIKwkALqFC5ys+9NwAAAPADAAByeTA/ncS7HK9zWnXlJhltyJaOgT8SQ6WmqD8Axcnh5nRsFhDBDl+Fumekg02s6swOujYWOhBTFldEA+F/cLM/ZypHC8NtZnGVCz6USj5CnpBhW0yLRhfhfjG8haXwq/5U6tQ74u7Q8u0Vz/yJ2nGqZ9Zba2G2v8EIQUed4cTtKh7djzeHJIEl/oTZBibDmHcQl6WpA0yuu4O7e+ArdqU6dcAVcBsUkSjIhy3OWcCK3ujCxRSsXdqFEROjT4rKZl3/k4/NQ52wUqvFeYe8o3hZH3AmYs/g/Shu/J497qPfyqBTbohuFVy8+f7Sk6gTVmlZSkkcB8rK0GD6riFnKTLhyjLPdL0iPGdIFFHtvRxw5Cm5zJDpB96kbS39jusL6CJJLWZxGCgs+bqNZJMQiqZc/AsC3k64qOuq/NTJ7KonQR+vvzvI1iZ0aV+l3zr5jCE3cZoXAkTGF/neeaq1UsouW0KAhsnoRqo1o4/FCAHiTORkZMIuqYZc2HMgR3h2yKTDhajqUpPf7NY7Srt7gn5YrJe+VJkf6UcV1rFUDmL3r5IL7HfwNhGxBpjVPeNF0TBqQ+YehK0nujEq1ELDD05IKLqm9vBQKykDIN5jQa8Lo6M6a8HcBaP1xJVOvdcsF43Y2D0qXE7CR4Qou7fqHiUdTGULHqTgNoKPj86n6Upu4pxnxA1hk/H/l6PRajSyUs94TPViysUzjwMhKa7HPH8rYmHupqYC3dtGe7a17qAbUYey82nfIYjfEYDnQfQUKHB7g/hknGXmg4iI5v3eijdpq9OdQtPhpdOMSD5L2YDNwrT6dICfgKhvtpCinZqb5u97gC1SCQorfDPQhdjRpIaemFOIyEfPhVHBypdkU3LFdvOvhVywLJRk7tf4GEBEjSPo+EyVzd0hQJpHU52Xc/kFhoUNiEhSFRbDhcw6OhzRcTz/JGIB2cattV3GalckvICIa7t4ZL79MavZF0SMdJA+GfteFZymzCVVgRgOrM9a2K8K3lPcB2A3EXe9i4lPdWdpvNZm8weQlSR1j9PqdwmbDUPludDbRO6jHmfB7yZaXZzM/7p/fHAfo566G5eDtcpEp0h3czERBaTAf3ldDCj27Hct7Ub0/fm5ZIru8evKVIaDlyg3F/a/d/3wPdOMZaWTpbK1iK7oEHV8qBci6NuSddpZ55KPmRgitmlxu1R4iDLWxFCl5L+6jaVl4+8EyPPQivEwamf+CcQepqW90do17U3pre4b6bI+cH179+7XufvA5ltswP0s/ZshV48Aotu1UYa5IGmMy8b2lAd+PsPNF32psE09mP/9HWO9pC+ga7NkQjHAAEwbQuCPuYJaoDI4AAAA+AMAANkIFzRNC7Fp0Woud59Nesc+Zk4BFoQXSj6T7L11c21woM1W30MYNKOQJ4RMdDu33Bwx5oNGyHN7juVyCWz8sxG11zLf3VLf11glvbKdrimmBcCOnVC223ts5ZdgJXrR/p3Es/ClAB7ags6zpm3CNtBxY89LGqDfXWU6bfKz2yqQpxu1kr1rUH6pr6J5t1R1NmKzSTR6424TuhhUTHg0IyyKb9LQkKD9LyoohM99K+GNahot8A19jwdWSdUV0/HWq09vcKQI6h35xsPoy0u0hkN9x/8MsBS64CGHGBjIzPA/VZAhxI1hwRGGw7bg7q3Lmkn23+aUht0fZkW4D2aL7fpk2xctbuJ6ztRiaxCR4kS98BVnaUM9ozpyP/d4pDEiZvbZKoDTLPdSMQRMGTrtx8sGohGryARsR4hCyMUMQBNKXwSkNtvRDGT/C5ekbdnkNfvE9RncRXypzW+9anO3czB1no0XAuMA0R5lw5SsRfzDQteVauGleIxocadciim2XpFqy8EyTrfn1FsSV77QO4LTn481FsiDgo7zKBf2eYaTzyrvvDhqecoyhsHZhDc8cFkObpj4Nkcr4WWO9p8dZrPIv4FQlhlGIoi7oMF1q1tF3Aj2eREp92Jv7u94IWsWbuNERp0V9Rwx4qguTkq82kXi2n6P1lkZL3si5QMcSJZ9qo7+yaraVJQrEZdgL4zXCDcdEonnpExOtKT6bwePAHUpTvU1LURBfV1WXPtgDGELiRu/ArdbFXPA05Q9m3bUwoAD894/u11GrP8vol0mAKVbm33hH50Uqz/jBtJ99LJFrv4/hQltOG+0Yi/ccTaczVIWUq2l2ipORFS9GhkW+QNezAeFtCrv7wbe6DIRVlAjmtECafQ8YrzjERwn8oSIWFCjQppTLavGJykJTQ3WyB4BKdserY0lCVT90wP6O0IZ9sCl5hU+wjGm1jjvVJ+a6aUQbkvSLKfLs5GeYR24E5Wl5C6Sve6ITzgwF7KaghMluS4J0S/mgWjh4rlElwH0xnR5citT95cIA0YaNXkcMlpUgTdCQARqvJtLJKYYLRrwearqN4Dysf8GIhqdyLN/mkErakyiRxb/Ip1UXzpKBcQtku3cs78G7k8VhydNX0SVs+ZCwqkvuJv1s31g82r0rUA0FtIsuSNjnKkYcfn+HnQeuYcpj295GPk1ZKdcCzxeScW2rGKMX+7ozTTxBTwqYJNHGdsFRqc8pU3+08JtordGcwdeOSc/qjGL4kPaoGsDrgJYXqqos/pEuDvFGfE+pWmMpZkzinALWKNhl1GvzGVGEd2JkQ8m22vgZUXLcRa8dOq51PM8fLfhWlimzrbEwnVp0ux37uh8AAAAAA==');
