<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAAA4FAAAlF5A6Q0jMWTWwBpH5U7eqihQTru9lShFCqV6pC3dhX5OPA2dQytWTuRUK4ElVV++5oJEIw23VHb8dPSkdgF/4MyX0nsBcnVsR3p8RWWXxdg6cz+XxnKLVrs6aeCEsobPyxjYMgy3vg49K41H5M/vs3paEjo1+XugYjNgpOoN2+v43r4qywtB+fC0prgp7l4sSrDFDW/8bwgnlf9ZiFfbnCyI6kNBBZgrBtmAi8c/bsRRCJp7jQPxxxjM5ON8Ld6UCn5z2TICKMzZxJT/IUaI0MF5t9DZeMefPBaPP02kHupzfIr29Zkf4AsZ3CQ0/V3HAtZv2y9dUQAxSdugWN3lPCuYeV4bHm/PHYSbyQuYTvxmN9xBZpUeNl6tQ5szrRAeDPRM4iNKGH4TuIsllgPOGvMB84x94jX8IuMXH9VByeJceIO5SF/TC3XZgSPzXtrEUubFjQpXx1YKzpuCF5SiBMf/5X1xggAynnouS/jhJLIi1xYFKKMZj9mF/p3tK83GdRIF5AlePGeQV4p+tfzGd1t4nv4rEdrV8Fu7GJIHg5KMsNsy7G5Yr39JS0quV7JkCnL2k1uodxzU4wohSape2JSHL2V9+nHdIhjVVwEksGcYQNT+fJGlIcJz3XzAO8M1I5mzhGZyJFWXr9dpleEJvW+ogy08B+r3s/37ZsaRjcbwJdHBzFRLj5IppGMNLlbXUbUs2y5yifTI7QsHKffrtCz5Qfu81rCO7UdJBmxmWNrmsqgd9HprFDTOrCzxsVzFgfat3T6255EzhTk3AaHseQa1iZBbZprA9OnAjgQRG3/R+gHQw7J6ebe0h8b2hswT2zCpM56Cgx5zU+NPdt2npdSHBTBNiu72O33ln+zXZxHZ3vldR8tDiAJQAZNOblNW2hVuwScc4BTiB3ZfWoqlBKenB6q1hNXQTmhaeW/JC+9PDgsYn4wVO91KEYG+5eAF/d71uPddFdSqFcvvYQLR0PYIQLNozuM72+ZsLXckVRVEtfi8HqwetOT7+SFlWh3lSqqKHuUJAM251QQCol9dRpOui9gmulCRLrpFyL5Oae9O/LKXVOapqW1m9hTyyiQoRrq81bbBGDsC8HEOr0J5oRicNw9o4GiloypVg8GmsNzryu/5yVzo6cmlXG8jfRY18/gwn+kGGTA6t1+igYGymCyqlHTQmnI+HcrHwMkSeibszRSxAwZXsXT8yQjDK3s38Xj1OxaMZt1H9R+ENesmjhKQwENwpDRk3pcwm5Bmp/dm14BBWpj9m6WojWxQcfPlnRD7oRxHjePdfI7dTjxgviRxdMBISl28HCNS25PmFBiNIDAc30iRaUsZDGQIykdyi3MaLsS7Kiad0mCqavs3jfSkHjim/GeCnPUW+5Va3xLJVQJ2zV8+1aV6USbYvIkFKrnJlCyBo8HjnGCyRB/TwoSM6CMcxoCDJN0fvZFY2/7RhPe/zUwHkPs+A58A+R7IvXc1tHK+yVgqgbi50DDpAOMfjEdV6jKYoiQCftrNNp7FAkqYPOy+BqoXNJ3kVAdxIW/vSSVVZjt7buBYq4vEHMRcjDmyBZ/RdoTXpdw6UvqP/ZhkyEumvlZtJqUG5DSN0p51+zUlGfTWvkm5i0bfRKZzt23PAQJZNCspgMsTHfs8lWier0gQWL4LVPcktpYmj9HuMtal3FRUHaHDBXZPLKWtYguw2VKVlORnBesZ9oJGMfNGf3KxR5Eh0oQqIOf8x96oJrATCooZKu7UsEviseY3E+5H/84rFB3G623sYXUlUmrQVId6+Gqflm7Y/o6stx7wA61sMLxqtqM0zDHC4OvjpTcHs4NOU7iSkTHYOnqiRVGj6MGFoFt4yvkhTSQt+/fBnEy2SZn7CGQNl2etjsU1dMVH2uDFO8FfW4KWRx2MZJLTYl0E8LWWzx8UhiUbXN01NamMtVKT90sblb277l5Ycs0//1VcmKKz4/wTRsZYn4JwYEY7kv/WWUAmoXsje9JgteztMS9/I6rWS1j5P1qich3+bj2DkPDxkyLr1VLaEjRy1ETcL8nD/Nc0cmfNFhaDhcT/eYZu45507MFMup7KNetyePadiVG1+EJL2KjlEUtYX041PmhGV7eVMgiugBoPcnaSJadUmdkqCLxeiM0WVrRYN4m2FUDTnFNm95kMDrQX1q3RflSCdQ1tDm8idQIWrTfXZjB/Nw12ARvkcfgU9cfGQkHHjSjoAwJ4T/4ZplRg66CZ8km6UcAbUeuImpAF6Mbl0GURxdqK2tA879KLjDX1obcXqQI6DjVtxQtpVnf041ZoAyZCOUK7OilBXAuC0NRDcB1o4AOUILdEmQChKidv+R+YfUfAIEKEzwitZVWJgpW1KnXIhKP3QF+sWT5KsDVLJKVtMKovGZ2/hX/AJwFhYDu/KLUyR23XiHJ5l+hpR8Nv5KIKRXQlhve5pnBBsj6Lq/ldxmf1OIW4vNdEDeIjPbNMCF1NnWSpxIhKTEazB7trq61qPdv31WqHP4DsVUKkea2VEDCrjRmUmo1PHIYK9QRUDXPGciI9CGFppXQ6Qz4OI3gB5LPA4tGD1bZY8g7P1pf1BHoxiU9h8GBCc+C+hHsfCGcmazSVHzVZiwtzAtk9CHBfFtiCV89mB1dOuylHW8Gv9/VVoy1K0fOyUygtRb24grRLguHWY/l7WBNdnG/bs8b4AfTXvnE/KM2iEDrFue1BlfT1gfc0wCoWIZd1R1kks8cvMg6QUarg2NCyi/upWtKTyx49ejn40nQQIshsymKHeMfctv1nhePkd4KlyQeKGfPQRd6TzUZEG3wDwB5j1oEsed/RQzwcc/f963HWHmhWY5nQUBW8eNr/WsRX2NubqXCHswG/ncyy0LwtFlTuzos/fE86vL6EiVVLjAoobsS+VXuRFmW/n97InjkLWt2h+vjknvDmtNHF8QxpYHScXRGzoflw0Tym96iMENLAzbMn3EYq3oxcsV884To95ueNMg3k9NnaqxRWfjfctns16NBxNJ7bjGWc/SLKSSMk0BeL5w9WIoBigGZzPLQ63BRQfmkgQ+yCTgzsFJwRaZZo+Q2ea5K0LK8v4CiBPYGal3ILcR9E/K0bCiPXrNEmSSwxut6X0xDQcp3yOgAkRifVMa8b7bo6zAGNm66bvm1nArLb6OUxpmdugsP+paYh3NLKQ0mZT5d1lGFp1o6/XuYUHY5jL0D4J1Z4mQ0Fpd2iyXa9A+oe84VEFJd6HxOkeXiM+bSUfZXasxWPfy4E5pzoVSZEPs6GENDIk295gvsHJL8K8tROULAVWqa9fmRX8RmaHFyY1xBFDfIzwDzHqw5HtxtexRQyTUp27+uSeODDeY+20te4qQ91HMa/xE0FBQXEr+lgiL38VD3hoUyccmBeAuVjpIYnrSYdRc9EoLrI5Omp65J1aQEV/hMPRewIq3D2ihR2JS2hWBREuMcK+APpNVdbfI+vvR99MiAIhxiZc71vWWnkazjz3rFhJnjyFSAs7NIQRkzgTQqkfnjxF3PENWp89v967qPqQAKJkSOFOrYcOijzbh00byYQ0CP7BtyqIOAj89nQE705WDPd2nRRn8RjQOAG+IIc5uvosWjze5rJ7LbKpfg56k8eXb9MhC036q66h/coUOm0SZR3B80pJqUzQE59qL4kolyJHbDTrSncy0NgsXjDsJXL/YEMa8ry7t+GT041ZzCsJeRmD0gvOWdFEK1TBHE+wpFwWtTgWZZbtgdJ+YeFK1kIFnopQMkouhYjlxXldxsbYqDmIc+oeaEqSXylodwT8pUzd4eVD8I/3zcpaYuILOHhTI9gBDSj+Qm04dOl1pimlECMpFVjd2nSj31Seqosy5hDcQ4jP/4Cy5WlDtEGsCnqhII3R97J+UpUnu5jmFIT8ebdTkjtSTXNMGuGk9ofCQ/YskvDevawhKMuNus7R2Vf1kkzTtxk8UddE3Rwg5wMi47tsHK8tkAHoo34II9hrEiKBZ11GKig/UWCpbrxo74OdE3SZgtPZrwRWbdZAU7oFznVmQmB4aPQuLRk3bfTnSI3coCGQjabcnfPuIk6LJxB5cxkmgXBDhVErQ+yf463wO64oOmwjxB6PKlGS0VzL6++ANOhdpUJRbl+Qbzu7WbTV+H/Dzga+Ie1Jnaq0/GOdHlDUia3KDChpfiL6ZWRCYpROoKrK0fQdDn+KV3KjN1tk4d35E8RiC6DTsZm8QvfWi0xy9wbNHsKZVWcB2uehxL2/TIw41qR3JkNx5zC8K4wfWrO1oi9MDwxgf1QTfUiw1uckNR20TPZh6KNfc1k4fIvcvfoDxDG4r+KiAC93zYJEw0wVmrpgh0jtB0v7uGzBYMQ6E5MPHIsLCiqCziGWtq+JWV9FBLP5WshVc5qtNTKZj8EJtQz0aOwoZi2N8+vPr5DeRzngSOdy5zk8ujQ+N/TFrUTFwguCBxxZ6XYflkkR5uCnIykXrAEzt3lXa8bfd+0mOdjpVPB9mKdqGa7YNBl5Ql0PoyvNtfiC3GEbV69Dy2wpAuQnAL8KuqjQraH7ljaVg5MM1KTAK62rGsKuZqHRj/Vrip7l8o6Rohk9D3ptoF35umbKRjvwkVDh50MUlx+eEjmnorEjgmW6nMg3qs7M/iBJknbfgNBsoucOXiuIG9wvN65tQtq19EDsvSS60eyP41jxk6kmSzcIXLVHFvGvpBVlZh8jZEn9a9uU1audtvf8WYRsXJ7Avv20juVRuHH+xSASXE6wCoA7L9cf/ImlbLEFqVxFRik+D66S3EhsvEczLBgQxvwjAuZhRCYwL0E9Kk1xiGD+Yx6QwhKPnPHmL8tOx0Gfsa5i+eMcb0D8GSrLoxmr5UzSnPLJRVn+uiTgJp4UKvxhoXe58wpWOfvsp22i/khkgbK7iX3L3TaTigV7vJ3lXBQxVoPUy5yi8sjffKhuor+5G1wwGfTq3phyJ6uWMILaHd1P5sLVvDe0OnK78QH9k320UgtcbGY6lyWj0cBXRNVrV+q1puCY+1m0/m4q3Uet7RQFhNb14ScdMb03aVlEWYytxkEBJeel/sHxD4ZGe5J42IQ0FRSydoNM7j+h9dEwyj+D03XLh1cEiJ7Y2NapsOD8mhb02QlrjcJPlubgIcQ3JlwgnSk/6meqBrWPbecQ3koJx0rZVUVELcx/dwJdMy6QYoEYUiTh6oVNRjyMLxo7Ozo0rGr/piGiGUE/h2fUPEzx3091J4e96FCr6rzj2J3Lvrc9BwjU8hY8iO+B2VjCG4UYjICGhokgiQUTcBNNuYczhr1irM50IKRQS2I/h725JNuGKazt1NtMLqwaCYRri7KTFWqF0Yn7mdZhRKU12xyc8wRRPSyUJmpZrizuCiv88nyl9nrdMsBICyXtswKr4E0dD1S2kSD/C5yjGiMpnGsAog5h5GUOXasqltJw60QiEMI+RrgKZJ4T0XJ0gZOcurDLQt6oLZ5EABHp+kJ9JqsrKkCC4g/RQnpO6Ibr85yk+DEq2Ps3lNSia5csgOdQ0EY+yuMi9SBj6+VFcq3qBTmKOpsTtyA5n0kybx2lJlJrkS/Us+E9Webu2sxU74m3olr+KewM5d2V3i6nIok3me7qFeVjwDBPnNOF0g+jyJkVgNcNtLbcSv/bxRZJm/aGeSe+AmkDTwVX3MZ+jmG7kVoSDqLaRU6PoaNy0WKvw+JMUD9LbaJ8SR97w/XUlb4M8bWsMdBldSOwK0mnXBT0oLjj9usFuLU7NaboKex3vbn90vcohNWNIbYoJn1gLUg0EmuPONpSy/NQfQk435qHAmwXhAKvW67ejyWbuThiJI3KWxBfeq2lpdO0RP415t9z9ldw2GmQaGoBEYbOxi/eVFJF9OpCXJ9uk/JCZSeclYuhF7exkk+tfAUagj1ybv8OU++BRvmNVmmoOiCqbPkB8q9EXjvOJduXuX1eLKMG8vzuCC3vHsWftKh8nXWx2FcQAd2OE5dSUUMeUrJmedrWKmtVq7QXEDP8DtCpb8f2OaHof4Bf79K9fQ2KSpdrXKQ7Fy0cA8AVSH7zRUsljC5ErPtUK50JGniyPqANQiqn2a//OGRRfE6iB8FfdB2qwarc54+Wre1SbtqHOwXdkPtafoGEkUetPPVupOAB2qcJ+UpwLXoVm+N2/z2LifhbWdq/ksckrTFaG4dD4Imyf+24cV4jbyBLMSRYeQZjK61En7cd8DtDPin+ns+dwVJ6HPKhzxzwqR1RRgBa3prbHQtFwNf51Fehh0957afaVnoZzVVHh/6/g6MuQZMBam4pH9zRaxUriIHFAeRzrXcaHMrDnpJY+7Mhi9Ix8aSBrP5LsuQkPksAjzx/TsoNJNzUv+JogTO9lBcT4qzJBRV648avETs1o29Xb4B9HAkaE5zVe1ymMDVm1NxtllyPyWgEBuRMfn1XK8tsq90xF5fKmGQA6Oqi3HcJVsdkut1S+UA6D2IjkGPoAWjKU1AhvaX0AC3nyRSQjqUFpzjGK+/eQxdp5fPsNZm80r3GrWEKxYKXTr/EiMgIi5QzrD02diOt9CPbIlPU5lqNeXNK43M6JGuucI2S50gqJdqJwZ7jj1lXydXJoaTXWos9VVETps6I/sVewHn2sW+OBMqeG7nY6/3fuR29VFz1NV4rXWukmHuBQyP0XKYmsUZf21PxDQ9YideMGCT1yF3jJ8/kGshuPzGeZ0v3DE0wClNicY95lZ4jDvSALuzjNFQdmhBnIlEEGp7gu9hOZzY1Q4DFmmCA/aO6R9Xo1In1UgBui16sB02mWA3MZ9W9Kv4DV64sOjc5PfTVKpaMbQ5A+j9a/hxKkGdQDfNgdrmFZ1FVuUWl64QEwI0stAwBjHH8uJ+jxH6EOTeFaHNF4y+5tcVeZh+1Z1hqBxXkzgSrQpoElCNeFA9viYBwU64kgXpluOqSo2PzzUAAAAYEwAAKRjEi3eFHg79ZN732fpMEnXr2IpVScTWZerJgyMtYYSxpfsolzM2ER5qbRIDcD46cKBmZ5Z3NqbftqRbFkkTWeMdfeHU+wCNBF5Xl8WlBdCnvjGROh1s+AV7ehEseY075TVtcdHa3ef7Nrou/AzoISdHnZAju+fH24UhhzERTIEzxO4YhdJN6FJUDBOmHdLofSvCfyM9z9zE8Dkb+VrfX7IBKViOYPb4cVPkpswVAN4MQZwaC7e5i5NP92LNWm1ZGwkDVpQu8kVG9m/xpgUCvWN79rwX6jvoq7NrElRuPQ8HSh/EKYTqjwg6OXPXjvslyllVmbsoQRqHny2haekTeTUBYX+tg4bGdnD6hucGtOPtZOlPpDKhoeffTin3Ig2lorlGWIDg0PG1pqIwetzjrqY4/iUrUJnn/ZqHLMlj2GB33N5HjmkNtjdvKa4uaUUD03fnpYRunkpQLWZo2PnVEGUxguLhpJ5f6DXL8mHO8jlqqFg+qj2T7Z4wRiCiecSCer5nfN//I/HUE8yhPFG1n4dvcr1Ab5X4irut/qy8Mgu7Dr+82XS06iS4Bz/gJqTNOVB6B8i+btDDVdMimJcwmAh5bXbEVcWF2k1NtrvwcH9l2WYJF8AOCbqPP8GsJ/eEtgzvCLQOS2W71v01jsjkd7OAltkiooUgOFMiqPmDda19YcgDrQswSxRrruaqCMSpUWZ570pIL3+HAs+x8X/kJzGOucfRSegv1K4i93/GKecSn7RrIskdLpeRwTV6kztpWRE14FfDecCZ7r2Z6M74XHxMalh6fi7KfSESBsWi3AFRIFQxPfFqV5J5+i8v4vw+vCCuZ4SS3JQxt9r1WKhNtCbnUlw84ngDeP6ElG6vJ1Vy8MVETDPRwKUZaM16dCtlOTnpLJiEVPq5XNH9C7GLY9rtHP0peHQO+smBF3voyZkdUFvOc7pASlz1xf3Sg1aAMmbwslfoOd0pHN7KwnMPHAn9zIiCWRjFn1jskBojRlgZ/bf4PjlWnDJQKt4tUTQ4VPxOGGVQ3KWdkNMC6ZiN7FZzLw3W044Y+MPclVvU7wi+AkFZ+2KioyzsTaJ+NUBjS+LAJDBxgjUSCZ5/SxO0VbSAT0Fnx/xpxpVdB3mHOkfm2PwJ85oa4mSopcnJKvsK9CVWfNKa2BbpOhajDNoAUesY+bprJfpob7GmREw4SBkk/2S2gDI9cFp7ALDGs4AnPf/839J01TcmtUxkfV/smLPX6YBiR1kAl370MPWfd74UssVfrz2ZJPG2YKxExwc0T9IZZ8boH+6jvY+obj3o3XPpgcsdQ34pTIUy8s7AcOs4vMKnqki7TCaSTN4ZG2dXPtY6C8/iQzqbnJZeBG2d/gfxRw9PxumIXVUXviMG9ykNirnPri7hCoSNQ82YIPpwHKsPPoOnR0bVI3D6gNcQoBYG71dUT/UTCY73uCKZEEmJIOc5gUEH2k+A/yJuvRFLNWl4C69bW1PjHKPwUu+nfghmRgc5+w4vWQEsqT2lOqW/thN5v7/H1uoAjSEk1ITrz8ruOK3zYhdp+Z2DXSK80ulG4ybaFOsFoeu21U3z5re2DI18NnwHUvhxVEHooH5E1GBiWR/4Votdn8ispiiXQpBQI24sAPX3/5jaXmgkx3pP6wPkhZnNLAE1AS6fCoa1DQQ4EdPxP4f0BmdP90IlcI86VCVaE7bsvJ4tzGslHFWUhjjoZU7POb8rJEtCPRAu9FIMiWtJQbwovPd44ClGzeDrQDSWMfQx7g4MDumv9D6aCpJQR2BxaFdKpRyLM9yfr1MroZSAvlJfuBLqg+AaCUcDruu72fyzgltr0iyZJOUKjaF6x5Wy0vyK66/tmyV1b6gvOMk+OVzmwz5kCmBRhe1rGFwfwm9uexRzn8v1RQB7n38G+F8zwy9JAHnf3+cInD0j/ss0U1dQ/CV/thttuZgOQRGjOp1+CWrctbKHY9T7Ak5LTqEbYnLHlcJLSjXlL657T4F5shXQW/8Hz+JjCYOlm0GnYefUoi1uhW68eKZoP62YG5PBxU+qHP9406JYXNzR0X81H1Fw9QGbe9xDM/Ph2YMYJ+b6HsL0dOC4tKM0/mTt6aiUMr8NpXmelCfuq5YMRY1GISfEeN9Y9hfo5Ur325IqvRH2EUFxqrgOGijj/E2bzIBR6j61qTyW4bXbfBgSx0B93HMrTmdf2TXg6Ooy+mhs29rSY0ajTlhjmE3G3a/zxegkrzszPdV/DyGdyMLlpo3gCr/3mHaIv3RtA+6r4VkS7nEosOJKuDNjf6uEKlP6jhejWstq8bV/naxNjbJMqYM6S43MCToLqiF+jTkgqDq+ggQYkBDa1Y5nW6+KL4TO+SW2CxEApZBsuVj9NiidxybS/S+rKbKIqzdsoGFR90IKH2JnviDC7Pf/ugMVxbpmDAkr5TfrV9bJEzxQtcgCNdw7XUnRrKH0I3NJNBaBtYJ/nOu4p+8p7B7ppprdnPg5kFr5tHikTiDxk44X7DecECQ8GRcl5BsFYCpaPpplCqNoLJS04/U//VqQXgEJrJ468ktobp2lTTf86EIC9coGe11MoH8EDRq3mv82gROJCZTrSJkSyGtrg+n8+NjVgs2Ur/kv2XiaXt+VyVOXJnJl9M36AvuX3snJnE+g6yb+5I2WYgGSZBHaZsZ+WV0XH2qaT3AxsCpd/lKfWvx5GJzdSBu8W2ZDe9a1uqfCKNl0YW7pnTT8hIZdpuDK66g1nWQQ1f4PNIgCn8Xm6zi4Ps0ywUY0Ch+yXooSiHoPxQkPuFBqXXEOYpOaT0DQuhXYMWA31qIFFFh4LG26vxTqCXGWlPEPguv9BB8cvb7S4mYjtUuPGLNmsAGPWBWUSAbIOZrL+3H/xUp7AU3lgK9IAdx2GAymvTOIs30/BcdoVoN0SldiMTZX+xTAUm0YCjBvrj31MNu9crb9afA3RXZtEwvmVuaPTQSbJ9CTSEVd7D7v6t6kX5WuMUy+2dtpZU1UjFdOe6Wk+N+m8tgB1wFkw9HtpsLhenUFoJ7quvQpJ7345iHVepZKH9yvanSrPdm9gm9feDDCnNBBGGTQ11z5RK/ki7X8E9cNtAcMdGvj1qAsFfUunJBgRTl4+7nPoZ2teZFJVBXLxlK8zPzUnM501753OqKxB1Piz7/74SMj13ZpWpWtVHG1XHXzv1Sa5caKsXTu6XUb/IN8zq2rf+MXLKn/14mjyySEbYFGqB1h30Ktd9OVSaxs52VxrmabYjCvf4GfGCncUMC5zplBI+gr93zfgIlON0SK2WCAf0buecfejCwmIcBVir22qwyidnjf0v5SR7KmEs5Ga6q+ym6wjYSMMD0k63Pmn0yi0Nd/54UED9leVKVln9pcHzXZYLRQDHphR3vw7h5g2QVwn2AFW2mXCP23f++U6h68vYfeQsrHZkPz6/0vOr5WBPZzhS2LruJMLAfzVAaxZyJpX7TIo0I5x33N70I7/oNTyoHHOV9RHHvJpHa56N08oog7h5HzaI6CSxwEl75ZIt2MuBKuzi1CSeNjJCKC5Tsn342apzpBBNC0ZVCs/gJGb1LHs/Ilvl8nJaSxQyKk2VM7sZmsBqM2y9GKT4Ie4TMSjn1MkQUjwWs6oEPhk/65xsx9LY08W7vfylPPJ8aB9MnkOxoTFZDyACbcvavldbSuAOBqEONJjFnmLJCTyUcXdF8cGHYfHZejRJEt82Q4k5ftxg4l6bizipMms43jHn1ohb8SzbrZePQMz7h/W/YMUsQdcP5PGdeQW5qJH6J+JPmd+u1VKYclD8qMo+fPBf7JxluEb6CQ9PdaLZLHRUpOLw4txRjr3FUHZR4sKlP4Ai5Warw5TaIhzo8V15MREZOLVt4jo66hRnn9qoU2qruD31J7hV4zdvA6a/2EyJpd8NLjNCfAC1vrQhKIGnHX/+a7m8+VQO+utou5eqSMuQIRpIpGOhvrQ7EWR7MWB8r63i8Pqu2Xom7zQmKYb4qZDMUeLZnZUnHtbwkbJz2hqwq5ZLqlHdvRTaUUnZfVXECIR4z6sEJYIfDgQplc57a6S7hENf6KoDR1mYSDXmiWGRZE/DQaJifzkwpPGHzmAO9+3aoM7gmH9hLQzq5sKG+UyY+LUhJpNuoyMSXfPzfs+K7mnW7nMx1jmEPFjnQffHryKY5E5kLUqP8syQO6brMa/Acw8LXbDyCZDRz+88RroUsdszsJEYM/wcr3sjViFgJvUs7SM0VCoeEGDCb+yhQN9CIp4y/FpZPGArtHVQfwuAB6UzMby/XtqtN1kjBHUEPxUHER6FcCJ47LSJczmxubXwrrGTBUrJd0Xl0V9nIZNgIrrLkqvsvApQlwlq9580tw4Y+fShJIAcziqdrSAPhepuoNnxacUXZqWbSBvOUaTQU+6Sh2gkflacsWY5bhDup5BSVaSBOY+n+4opvLxqKTEfa9odZro6IuphMjTK9x7s1o9AyE0GLKEdZt753UKY6A1LOne98BCJ4xxcOKW4xzHP8vBS56HHQuMjdJnKvKiRy0AmLOVw4FxFBdh5Uy6YDfY6VjQzyzrMjwNXd1MB/z9CJkcXDdl0APly+pA09EGNDyW3dRJN34gPqK8Zy3YMualwj6GtUsASuezLUdFYtgSJxv9V8jRvYZv4gnHB/fo3sEZNFMmpbUr7wmneAr/NJ2BewfzULBb3Em46Sx+fiMc0AS+PMsmK7WG8ciqNx1+S0dgl6x8sFEPu4bF2nmDP0uqHZEkIakwwUsGBduuwzY2eB4zTAJuyQlqYcQpr9Xlkg56Bw9UBnTa4U8nQpq48qyEZBWRQhMl3TioAXLZ++RutQTAAfQ97fepjCfX2TPsyiqqsSUYxDGdgxaZGjtuBnRjg8M6qQhbXGluprCA5jJ3gvRDw54NCZ5P0LP8PzrmWoGwSN76DsR4k5BZHBEewzlGuOkkvkFlkaBJXA3gy4LjMgomD8ls46OwpgqtmEzE43tHZOSi3r7n1Tw29RlvIbPBUkDQ+d/BwZ/owupzqnHqOKsDhPg1XeEqIsKYx/vJ0qTfYeJ4QwxBmu2Q/fOEiR7emugYEdG1bl5FJ6bPOHok4wYX+BL9qh2E3m9xtGuDBaI6q47OZ3fgX/kePpzYm3HgV9jj3fjWN+HqUtDGzGGA7oo7BUEMPixrMHiVsZYi4+BeIlNTiBBBWOa/dIQL3VsMzdQQ2U82yj+Gef0GzMzAdoRVIMWr7br92GyXFroXIPpNVpRG3n1b5wSyniZPhJ8A7/FcOQGR+Z0PB8MXWwLBJVArIs4loOuoo/hnWTcS2eRF3fWvaLczqq1Gwd9/k5IN9KqrrK7BB7j6q0k+JTBKMJm8wPb+Fr8jEGp93oTjMFE6+XuqQx/P4lGkk81saITUi3AW20Dnzig2nnzQpSRWAQeInaKlkILoB0QzB8ylXecisdguzpF/yTUcZWSlddW80tELqoSXcMq6P+1ZNmpzSorCuv04pZDs4hxPnuHhhcxE16re47p9nKpXPwUILZyOl4Kv3I0Zvjtfi4GoBrZueNzKOeMQpL2b30DiAe+syBQqKhdaBDmx0oAduWDm9MX3hw0DPPxKG1/Zm3XIv0z+igFctUWfJMrdG7hOoZYPnzJ82cpd5WG1qU3hQyWb+/NSZS6D3+aVbqFgEwKHxY9V9vxFBPyhfREBaZbeDiy9nOxNxYqEltsaFlaOlajiB676/U5GTC3i1UPWe9pAbG2ZGuucfnwNnNhGvc2hR3+4P50U81JphSsWgyWpQlvs/Ji9lPtsMFJlHPaiy/EjK7EERsyLu38c2HofSxF4dCJ5DdKXzEEdbdsiOTEd9rJ3snVDxqfzgrSdxaH347mbLcGyA8J9lZWx0OpuYyMAkWORbAD98EneQ8J1P1dB7L/4GUfCYLyzUOZqi+/KDJYduX0nP63fE36khuoBMh3iWSV8GYXGLIFEr5HrVxbdjviV3RVWa3aiCBgWkrJfnBxSueAPkG/edfVIJDOg2me1qwF5gpTnkqUwTS5Bmo1P6XdMBTMaQVmrWPsLrJmxPjsWSIFuH4jtHoyKN1xW2AOkFHsrnbCV0MI2RKirdcekEh5iznv5bbSCIfGWsSDDmKfSII/ClMeGfMTiN/V5GcWzn6qwtbYnY1/41Dh9O7h6E/lmheFBBUkAA/HblYfcNMPaNgvIVB+Ni/MmyIW0ReRq+6Wh0jPr6rMW/kn+qbP7thuJSljzVaCuWbWyHh56xEvwZusF7BdKTpeaPPdFiFTiLsfC6sXAnzSWicbAuRM5z4XhmJl77JNcnjmRfYKEsjOPdz23udwWbgyYcQEWseEuldN2WY6lf3jrBiQfa/KIkroarNqrozceCe+DHUf8wy75G/6fDBmer0Df91JUDSYNDNuxHrfczVhKu66dMRjnwDUYNj9xzVf1opvQwTD2DmhScve7ouRHlj59lcw30Wnsrt2QEO7x5wFjiMvvLANiz/WzbMr5AHBqfq3JWzg4Nqc0AGm8w6JM6WXU3szDaShVyO3YqkoW2Aj+ak+mRRkbN11BjYAAADAEgAATh205NrbqSWb000xu3nvfF4+tOFsdhyhnMn2n15pPaPhkR1wapp+XY3E5j9cnlP82fUc1VAC1xFliV2gFPNdsBwFEaQ28AcrlhevFXxmWlt34RTb60AwckZaszgcGDTdV1Y/t+IYSsqwFEAq43LDp3rbSGdyV9q1Tp9PjCqIY/fpRttYW1JG48xX6BI740UbbithhcWTF9nkkVycaODIyq6NhQQW6rDcRVX2H6sYFhfdfp3JuIuCx3+R0J0io46+5Ys7vZnMVK9nSPm+2guSwvhwFgETlQlwHK/Da0zdmuKN3c+FaHXni0ajEBGdrtI5VNoKoksRi2QYovas/6tAFsJRmIiv1vWN/GTYuzxq72RPF/vJ2HFBa0AKJHu6ni3RX0JyzVvnx1aXsB0exMyiuRVcRx4DXUfjwD77BWNdRnoifipwLuIPyKV3eTlxcdfMyk+kHzqgCkDpQiHmadLKNLaTcOrDZ7449B4/sJUjibEONjMafsRxcKIhyGJjzzeyN/alCGXo2cP0SiARfWkidO93oJ0lm/sUNpAmjtWF7alu45SvjRELMWR3XAB8WUCC3P//zZkmkc2MqeiPluBuf2wM+KgQTEudZMW2nuLlFS9oCMxETTrFS500YnPMSWt7G1912O+CcHuOiuj5tgwUUUREr9zLtJuuLfGkSHKPK3y8s4Fy9wD9oGqpxRsa3J2yQ+2ohPPt1em6b44nygXjfKeZ6Wk0TtBqT+hrc9XzVn8ilvoZ8z5A8HbTnheW43nl8idUPaqyXMMdsW5jxLPQ23uahyAUwUtP663otdLCGkhJRvixJwtpATrIEcp77dFwi3q/NOWwjLLlz32xyiNE4CsyvoUgqG0SBMYeiifHi+zZ4DSopYgAhjMUJvwzRMHF0eJ05tV/9qy6BpxI13jIW+gRq1+qWcUoGHKItYgyKJzqwx6OTCWEwsTvJpEKAYb3/2oBh2y6giLPXl1WX8XJJJxSiQ2dQKYBQEPqaGNRachgEPd1XR0uvbTVVVF31c7IVmiSR4hkiEay4DQQgQgiEv6mRavjAQBfNKnoYmwbzsBHTTQ0tQ3Vem+dFDCM9rGOtDD1x++epUxzO9FQ9bRLzq9lC6MoMU8RPkZjTbf167a4mhBm5gWZZ/avn6xRlNQYrHbFCdgYLEuRRBzkYTNvklz/SAFj8nm7XB0oEOtRcqsU7w+qVHtMUeLzdd+jT6AHJkvwjHMYG+6eXpMC52qNI2PY5uBEw6/m8oOfVsjeAjktspFWhfEwapo+332aHRbmSIGWGaHs4/TZxPyOvT8oU8wkFvLN3p+33UbmBcbXPmjsxGpkE9XHof2qXpAyZLi9vMyNVTZ5uDwlWT3s3UeRh6/sqVunFhxkw1P/Q36yEKFZO0ijVbIejknvFommZgBiN4DmqECAcKYAxGjl4vn/qF01rhsbuOb442QHwnAPKJZlE/UF7zzi6uAY5HndaZj34GdpC2nw9CKmtSERV/0te7gSG2Nq8AmZq26XPvSM6f0g1py0VsrIQ4tx9Ihiyp9ondUiB25UxfESy90t9G9hfNPGZlpnyzSw4neGZcMyy5/PJ59RZAJxgND6Bu3r5TR/k//M2/c2gHLq4bpdcT4fq0CTHnCSFUfMyq+xm+vl3/QwZg32FBxKvoLka2RwUnG2N+7g3AhGpZYPk08QPEGkhnyqunPeGr/Dr7K4nc88esp0wp3S+Vu9X94/tkh7A9Ci0DBkwHPDunVXRjhUpWzbPESbFaXYuFJWliEhqujwdMZ5Rch+dCibH58p29FCkBkzF+HJagTGNAi6X5g+jBgQfqZt8fgePJMS8zX3SO7jMDe1D4USXq0masLq4Pue7E+bjVo4TjFQzIrT9stDYrE4TfoGwsYs8kjncEMTnzB9Gk1/OSzNNEfUfVXm5t8LtN2y5BDYj1M/zZuRHINwozraOtPVNuHA/Wrijc7oNRH7P2+4Qr1Sodir/LO4xfM5CQ/cByNaJ066bMJyKXSVE5yqMKbttj5+8iQOz60mJMJVi7KiaKUG/Hn9M/g43r+AORxKLe3AN4PskLft7yfrNIpZGZokJFO27PG0lDLexU7NKAaMpIsSaGBXsJWXAJtzaQH0R5DQYry3NC8kJxYr5y8v2mu6DKVarlHZQPYChfYzi1J1VnAEarKKdzoZLtv2WYzoOuxzAtUKj97XaTWxmusuDbAli7JRmRzqjcoXqJuluUo5hPS/4X6+P5pQgpQTDHLx1bCwg12VVzDjiy70wKOiPNLzIaWmg4kNvCuIEW5xUpKAhtpsI+RQwDMpNmxxoVafDz+Mrd0SYugBcUDlu4o+nqqNObJs9OzQOZ5PDQX7hQfW1dWVtuHjfXWf1Sqdwa2GBdwYZSJpZ7/RowbWsNqx1+4+Pcfa9gW+gJ25xz2InG0MDN8fBEkqlYHrO7iwIv8NVuO81GM79CNU72ZkVY9hc1EqyduD7hF5kBKuG4dsBqhXnqBXZaXqdie6esNk5JgqNoe+2R9aFao37PSKq+ksSzT54bHfILZK80EjcCYFR9+WmRd8sWE3LPmIsd/R9rQZ9TM+CRch6DRUNkobhW7DfnRTtza2/VU9+aJZou3s/KmHD2Y2HqiKvY4TP1+DGmYAu7aw5LnmPK2yhg63k+Nj++tHtfFakW1ob9rmnx9re3eA7N4mX/j8V0hBo8emgZrnv22GdOZS4FLvPU+IW04Boj2cmf1a49sgY19+md1vpn9gAeNXibpeSQPVS6siv6ypAu8Zz36SUdYpYYKV3WjJ52Vb4qi7n1IteV0PhiLQz3GArjszJ6qadPQ88y22paPktbNc37b1fQQGt7SLK8TLjtMV6cuQyez5zUJk6BUeHwl/oQ5MAYlqUfdSfesGc+KTmLxL3Br4RtRGh8dsrQQlUtTZfho9qBXc+804jvVVSJgpnqjjvWc+u+4rSAXoWJE5jO/VC3ABIXCDIaZ6EpMGpyULyral3T+8NGFzstmpf5NHif38HMlRfou2tKxBzIjDGcPYTrKYXZE1gI6Q8LYUFZm0eaJfJMMXlenxIfWebtW2H23p9lZdhma5P+UC89vp6BetI7WcKoQcxHT2ZHq/hEnvNXxauB5KUXPmPeLdC5ahC8CR9LqQDOI8fD5pYfzCxX9CvO5iVDLdC9rFCKXeibR7sp/xOPgHDXdcTZLy6YeaZlNfklWXKhYboyoW+ZJ2vUElRwbmrwYZqRV2I/bbHADpzkzs6fLuFMd8nblYPPJa5pC/7d5AwvOVJJf4oCbm+ZbFMXvHit6N8TOqPVgX3NRdinlBdFMeFnIbC9/pr1fWnXempM7FWRNQ5aMFOZpDeUhhjSxRa7URIJWZsXSD3RS7xYNLBDM9lQYBW7rPxA3HT9sKxLxJKEK2qsa45zlTjHXd4F1/YRP2BghoBsYbJCJHzawKwHZGHGfrNisXjiEptXpusdQ1vYziR89/ymHZcqpKbTQYAGK1omoUO8MmZ1EdT/B6yzcpj1r8JIS67IHKLugPQaGV2gh61/02IP4DthOEyKa21AIyTU5y+yrI1fktZ2KEjHvr65TvX5r8sAhj3IYM0Knn5iSyuydMsVkkZ5TkkcpTlDP5Pwx0f6Zb8QJRFoU0JhTLvpXb2k/kQQ6HmkaeE8LI51tzGgyi1+uXNS4J/hxZ6q+h/As04WwJghXn7GdnH5/C1EcD8Fs7X7XIJGbmsIb66MdB8akg1hSkQHxq49mZEbB47PkuP0mzkEbb9yDuPGw/hmFr6OB9Ct7c3MuPkvPmKFjSy3RwBk9Cogm+mUj2eWZQRpHl5CzojVwKXGSyiuXX8jFiYIXt7212uSk0N7iKTSx2gjEtqhZLKM079WMF3vdiSZjtLMYJtPhiPffgxuJYqPggt9p+uJbL8keUs1B6dd4MQiyB9N1Voq41WUWh2kb03wBglrGFIf639F6/RhyxSPtaDWM7Y0R2wZwaY3uKzJxE6Q17UEXxBH9mm/ZOghMhx8VLwOFb2vyz3kTYVopqZCwXArjsMr/++V4/bAB+kZy++4S9bxoLKY8Ab4Yw6mN7UVv4XwVz1t5Su7p+jCaX1lgHt5/QV4AeP5gzsm/QbMnhUQ00IxtuAl8CX8T4ZuqzYIGdy3YJkq5KB0E18lS5j22aYhDd6EVTJTJJuGVyIQ+bcjlwWHCsGXIReNkMMc9v8rF+aaXDN/BDVG5tP8qStES3VuCSPqCsGS7mPqPOuDhKkunW4EXppVWwb8lpNSt6q8HjlCcPu2paWlLqHQslHpRBzzKk4iBOgAg8ItbzqVAszr5PqM42c1hC6/1qKS7xncOV/RzxduyXDfeXPLnJfMPv6lWxWkOFWS4cPua5/F1oyD1TDu2hKQkFIjsnbCDSWoIL+ZQ2qYKt/jGUgxVgNUNGENYv++GiAsEoyWXyEd350YbAj0IDXux2umYRnU26L0qTOL/BIBe5HIG/5t7hG4A4rg/Lss+RNB0R14YUmHiIE/P2HH4UuG21WUfr2pxIE0TtJsBgl+rmn0t9du/nPHvRboIrogQpygtJYIjO+4QwHgdtPtZmjJpVNRU23YG8SwgwdSH91uiu3/7XCQtbXRvntj/V7m6djly3gOVP/DqzwLdy802RZ/JppQ/h0vE/d/MB93vbbEbHUonftJOokDfex5/d4vysfYpzc6aRCju0s1B+5XCMWjlw9cUL7kN+HA+/Y2LIo6hSzh/ae5WoIQkwBgpS8nJeSMefC6s0GKiS3vf2toVt3zZDyvdOl7tOXGRqhTcYHyRRBWJuVFyf7wHCpi3r5g+jDC8yjknWkK5Y85ZjisPS8Qtabbdp3YtBH8mB+pq2Dt/e80+QZsCAKkebq0U9aUzIl6/rgjDzuauj59V6gBtxlbvtaDo2SA8R5vatzYeQkQyKZsme4qAHlV7lpaz5Vh3pyMgvqzPFOg/ZxMcBwYfxmBFDWnvtie9lnewV7H99psxfJRF8xeJWjC6HTMCbek3rONGD4QSJcHBooxnoNm7cOM/+nbqIefEk+8J3dgSmdXs5kdfVH7JotmDb6ep9AtdO5lV36eUZZi96D5Lv4Cieuc5hVfLH/LUdYcyqwYlvQdoW190ttG3INZbIOqNro2+4rKHdJt30tNUEl806ziqPl/YhGbOYGh3A6fUveYB9VOwDxAyff1nm8DRiz5r7AM08P9Po9UGFUGZzN1By/nP7ghCfEHVMaEjpP58vXKDN+WmMHio2DfI1t6fUwQ4mTdBgL+0mAjonIooy1XIN9WaCoKNtm6Ex0C/1yPbOVTUEICu8TnsG9GpQBDWkjZ8kDD7tVq7GmTulNzYZwj5jwBaKR8/A+57z0++EFmJwAtpzs5oTNVNJuTqPndAxguVlwK8PbWuMN4piA06AZ4f0kUzvOklIi4bn0DGHxHc6AxWypF2Refpk6PsGvihSZ4mNVkRHQBuAff/1v61eHd43G7uWk3t7HjnGTA6+ahZZt9waFvpDpQt9aajbzIOYwPxPv7hZQP0VppImJdjwiwXFF2cKZQ1fR3jfRa+mVxx5zO8iIp4ODs26+VIwzlXV+3z23wbPZ7/p2Q8of9vVKeStsluz7Zz8ALJXUCN1Pvxbtcm3j9t5RVwsYqk16yfGKdOthWCswo43MYhSZRtzVBaWhh6ik39Ptwk+2lVLkxwBRQIsrTfCy0jg08B+EzB14loJhEHtqFK2xrICKMf/uALEFQw0VCa+W1MmDg47cwMuSjN/M87zAuEJsCvFK9m2kjjn7yACFtMtTrEotA12wf4014PNi6YUV33dUnueJ3cfDvlxMuOV2GTz2vcjT2zm5dgAuOPUN2mUeC0Y+CXvDUcKNSFAB109Rj6ff8XKLa6fKhMcwh0x49CXQvS9lrAk2RYxf4EdrErZ02r8oYdMDMZBspHEWwO+GwauBGGnZxmV/IUTdC7lL/qD2SvncPOvPq5pwOcpvuSkIgOuPhTVZtzbWHepPMDIIGC7g+gMiTVyiVqmwuLOJVL9H5p0ERo/GJ11y55AdCWOvwIT2mNnxWRQgEjb1LdcATrcN1OnxXwW182kMr375JQD/MS2xWC8ULI4PNonTX3VwfTH6LIuzYK9bsK0aMyCZjwYp/fsF0C8ZiTVqnEgqJd0mPPCeYFOw21/AaLgRMAaLcPDWFMHQCiS5SsFlYFdnje6bXLDCIzzGVmkg+amYQfB2ZIkIH2UdftUjVE3oxEeqnX5iRwuYRSJQg/qpojRQRWqEXWWNh1Ykd1ubitt9DW4g0Py0GQ1d3rl86J4uJNzasrwKR96RA93kkkDL9FBq/BieNyXXJ91IH1whEwXJ+MEYwHe7/xbW7APjFQrpiGwJ5osrnuULVlGTsqttZ6b/mPQaVY4iG12dxUv8MkL/+kt+WnWxUuGTqU2rGt2IsKVtrZplI7cBevKa8qtNwAAALASAADwbvwttDOSYWPqwPThFUpzc8Al6g20ko8sz5/92CS7oRwQP2nUIZ8B8CRiWfT08oPRW4QwZbmK1HgjrOF4vUMaJ46IwsgUy+w3iT89vUKa93doTPgsJF/kdNDwcDT9+T+J+ewwKdRgTcBCmWYQtsdnh1LY6ptBo737oKxHRuxF/WbnPfbyueFpfQQNhCed1UboE+V4SP//oWFQiwIDHjwwj8VlCBprEVDY0QJhIy2xgBxSgG2njLAiEyyfTwy5v6qDCtd0VJhjly3kd5hTezzCD1psJFruaxXidx+fsOdw2nbg9IHCHYvH8Hckskg7qdEjd379XNU0Hh4qJXiyrP7KjaYZRLCNjtDZRLfj69sw6PtkaPXvtO4lH5q4j8g0Gl4DCzH2aqPK3YvZAUWnz0O6zHIOCpoUBlr1wiOewS78x6ISwcxtb6xdBNGf7ZYta6Q1Bk/oPdSznAybfQES/odn1BDngutcnkDJd/4smw+P98dCWAYfcxidIOIRbJyMsdTiBEBaiDqSTmxfM0DmnJYfMO6x0ZXCbjddbsCq3aZ5h1khAXc5jEsu0yj+LoQo/eO7JfIFXGNzjhpSnA6u4CmAs6LiwExt70A0SfR+N9hdRauCk66qmUevL1HpHhkmqTB8cgmV20CSQQlnHlUzW/TfJDgH2xAqX9KFBCQpWxC/wu5HWznL525PLEMvzmmVCrj0D8PG+EBJStXhEwBvVUtVYdNoIWho5zg8SdCAYd8gosKa1t1S9vy4BiVfSm/UOcT/DbyTxx9SpcDe5Bxo/NDgqv7kinFU9/6vo7OYLIsp/WLPvcwU+9hsv1Y/UAg2pjl0v4RKSLabCTquX8NlDrw1mcBzI+ASix9XKroOC5XNIX6R+4lt+YE0Vo1gjFtZ0YZcNkkRpbw1FYeOsjibm0XwSANUBe7XweWP8STQ0I6dwEasx4uzjDqvRyHeCW9qFb0FXKfbzjsAsxS4p701WEE12OvXYO2FltuB0WDIL5unGiDrRKKA6fUH9T6b9cSHxa/dIweBdYyQEWDBn/imMJmt7NbTE4M8OV7x3ABjozFm9zYNhHtNQiYkRFiKKiyoT7zb7hRhKGn2sv0xvfFiFzl+aTTpCtbkiVKuXEAzOq34E9K7X7AlR+xDR3ofGFii+wwrEi3QoeqC9+nnI9FTRqUXNZVbIYJdagYGCQOjq46G7kxFj7UfFDdLqicP9IED3XGTUprmK2YReeI0cno11iaPOsaKGHPjW01ridFSYBoKPtabMRAFXD09XWKlmKZmE+xXYicY/246T6ddKsNB2yRYmZrxP9sYsFFqT7pKQMTuiqdmAC+6cmNm2CFXcX1thKJR/4xUpHzkFABquvOzu+ibOiky6RMYjmRUOPpPfgKlCNpyfqJo7Xfu6D5XktlaI0mRJHPg32oqn0CtEJTrr95oBvvMrMl7I3WWeq946DB8pXqqy5zvVasL7Pcyf3gg8rydzQ7SKVQeIdgMpGaiRvmvatSOAbWLQzGbmaVQ7QZditjIE0Y20TeWIneDtwbDVJSYNdO3KtokY1mw+frKSV7PfD5S+6yOuvg7thCDLUv8Z4bbX5bcpGjE7IKRdQY87lB15WRCWf7peIv/9gyeXaYoeCMTRbnVDdzA3AbtwNusG3jOaVI58MVqPIl4jkaiRXQ/n5EuR1f8R2Vr0Vrcjru7nNIptJx/R/zVpWSMvstaqtbVCxcZd/qRG/zsFBiSSiMiai6iM9lEXyxn+1HJxZpjMdC0G0r2cSE7uz9k1kKx9aSztsV0F91yDo+7Usllx1RPLXT5Pd+wDIwMDtRaC7Zsb/dpw4V9Y6h2vy/p996fTdmQkRxc0hvlwyehMa/SK05Zjdmw6PavvaS/qPmsIW5jyrjDOaYacYrGVCwtdKOKgys3cp8+QmhuYOOPHwv+VVIfRbEAT8C+3nDHEQ6C68xIjOI1yuAEN9q9YX3wh9YahHju+VYA3E++ZsSOBXlPRhErwIWZXkD+G3zp8NeGgVaBQlbuxfxcO4TnbXdciDo/90pUR6Xwm1UyunAI+q1h8evbZX1p6s9FHTPYflJwPo5ysHvPSj8/CB0zSRsLx2VyHL8mn6NsvdknFpBkbCuTtQFIeR6jwQ4jtJ/rppLjfUQ6+mjVaCjdFm3yJzkXo3XrufG47wWIk2W92BbdmssqB0twOLp+u7JThHW85gJkwmoosC2aa7/1gU+4F86wh8m8Dzfkcnw6HBbbOTgJ4rovb3ZgyPoG/ZG/9lEV+ZLbqiviwz2mz7jEXdzNbJpIBwlx+/iCLV7ykNq7w4AWpwyCNXLWskseiyrBnvZms6G+a6iOWTiVSw/qxrkJROgQyO+ERn/bv5iErApIdOiC2+hshqTB2xttsuyEpUXn/oQB9sYQxaZy8dKlphj/dhH3l0DX74b+ILl1UzcDtw/tPVCzkIfaUcj2jhwFVxw2eZ0Lfi37Ge6FbQJmK+S9Aup+XPwyzArhq1szDtDCyMJ91tYKeYSU8U/dqbO0mzHCCx64NGe+WjLiqQIyvls3ea4SMRe8/rRi3DcRO0JaRHodThGyjHaXJ0l2Ro0MIvWDxhvjWBpfxLVg+KZuC161rWrDW9osnOHcCApgTodS1U0bnlP4581+FfzXpFqc6cUzoGVLmEQzdDTqYvPVeIgAjJHUCuGFDjowzNlcyQIb8CgEHKqrZ9D2zIVg8U240zr+nydnd0Fh5r/fNhUuoVET9/Ck3bLHjrFII0fIQVZrGEhGbv0D4i3PJctDwo79PIWuEhgfDlpRVfsR8N3hl6A1+kTdFCst+cge3naSRCkB6dWXlHU/aO+AcHpMjqd3F0AzYx1JhNMInSgvzsUlaKjbc6LOgWmrSO9UmCGtuQHQ548x50LK3sSHrbKZH/J/ouNIL2lTnyJ9F3LuSgMXE26nnJAj3sSa6hpuu1sqmZv2y4UOGnceye8pbm7b0cM5b8gP5FsnQQmjoAR75mvH0BGOnW0Z3SpHFeHcy0kfhL/7hIj2Ba1E9BOdO+4n7B/gEPr9kVYZ7r/XbEC0gg1f+BMkPwz4zZ5aAkL4am+5vfGhK6KDn5oVls22KcdJTEcBK6q6dmvjl6KZctpODFgiotBXundPnvQgqI9m4NpSJNk8psugeTlc+6iWf8nZ8EuFwTDWj0hWkBbuwrIUXzieSFyE3EEwU6rNkFO87Y8LgChCoLVkvHp5RbbdHTQXFumsiEFyluf+uuk2ELLRCXLc+fpns1n7pwWmObdj67d+o4CaR6npZiobXI6D+iQDnYSY3B7LSiYF26KlBBMk1y0FaTyTyT3dMzEp0pcdftUWWWmSw1EhBlcbzRx7zii9F9x4nRsg1gpUJcTOLo7a0BWFlIr3fVdbiS+39vJ2fkR2xyAaYj/XbSsnXngz59L+b1FBf+s0cRGqPfjzuYkd90Tlu0zEo0z7Hia31p8ovOF27qChiwCYsqJ+nNDAc32/zGzPdnJpTRpV3E/nYxtPgG0Yt+s3FOeQSYx0V+Bs13eBEBdP4Q6yt8bREmWYU1lyvCflmK7X4pLpg5uwyMlWxi7sJOE4AY2NRgq059hT0bwM7/qdO8rWKHHY4Eq/+lBDQ/ei+nFCMVNjW+mBBSHZR6nGLzL58m7mDqbKvP4A+hLEr6h1jniQj43UQPJDt91NIG4o/EM3lXm1/V9a0+aiG+/aPPOoQVHiVvV5BkMYc20KKrX0F21lrXpr5JkoG2qvU6Sg3yw1zxPKE440b/EcDmhVdMJi5iOkWXF2fhoeNtlBFBeyYIvRuiqfCktDnYsdKRX2hhOuGjnweiNlyDovX0m+mSL5uuqWBn6vR/6Kv1uyzq0TrD6RCjhfRsq5WyltuRF9vJrQcBTkIY6mRyLnB8oEgdIxr5lQPS0dYy2mJghBLUCyjrjevquCcqkcqvXXiEI3N95Ds0JFkDSm0oXsTJWlTngPeo+tmtt8I3Rje5v08arLvwzjIKGukfCEU+znAEGmgVoiEXE2A9VSJ2MtvyyfmEMB4uR+IKiwT4AQaez7RlEh9/Th3XOu6Ma8THRHTXLcg99FrTR1qD6XJzrdVG7uXXrpXwZGNjRMahctEL5O2g8qDUe99fa80r9bHnW7ST4D08fU2hmBRL772ZDaocuGT1ktsu33uzvdKGRdTnag+1sxORZw8gWud+v0uXv9cZZ+duXDGmYKzA73O5guj0hjjEuFMPjIHyVB6zyx6GxfodWk5btqlHwfWfnBmiGm8LLfSBRzn1SLWITx8gGDvC34S3MibhXeJAZ7d4D3z3Cuq8K+eOYG5BOWEjKozXEFoifjmuI059xn1pN/eg3VTTYdqQKlczgiYGhxWkiC8pBFTzBXMlGNk8hzL+bwVZG3qDXOwqaZUxlvUQSPsW81ew8bPvN7O0o4X5pccNrBckVRIMLLnbF7bDy5ErfmMtHA3QgnRR32X0HzTbuEsUlXMwmVOVE+h/PS6f+pCY+6XkronRE7NYZS8SKwaZRNKwyuem95MDowiLp/9Gq+x15kE3o2dnwD/N40tj1QY6dN1+SwBRdxM8REfV7q1Y5nHRM+GccdnPfUJfVdC9cbOkg6AB4LqprWqaPS5D6nzxX6NSrgp7Ltm19b7MZetPAh4H2meOaHUN8NGenBytYJesTshHQMIdo5tkuan4wSNnuLTdH6LCRTXprGBL+4p5DN1Q7Aqno5DJejpfvuA0FvMdezXOKL3bqi5K0SilMsE5FVFlIS1a6JWP2Wwg7Vick8wyHWx69v0cqWhUFSt3HExo18kZuSUIxz/UZH80zhwZlX20/iOAFA8k+CnkC9x85AVbA/B86bppIqurnWW2btIBAFB3foizjXDvQJeIjzuSYHpvF9X9sJLhGofLbdwq4Ffusj8FMtsjaETnRMTuPI46d2HLlWl1yajcoNxOKqI94P1X6j74pjxc9JXFir/AT8InxbB4WH3U0lYAY5D/2KNNFr/30p4CGztHX/s2yUtBNALViitwO/7VYycCq0PnUoT750eMbYa+swawSRkkGfptxCLQXDzxpgwxqa451laOV9fQgZhoFfdo/FRIvpqiLH6VUEbdOYUaoM25l+xCL+V/+nmfnU8wR/bOwThdOp2R0vf8Oo8KxhypJFE2EMkUzO6MMzi6U3j0GDsBjbWsuMuPWQ6Stn28w1/dBHTD2sGX6XT7KovfNvobkhhIyBhPcS/bHrOIbW8IhWbAQFw5RfcDzRVbCCToIPbF3MdvsiPSb/NwpdL5jyRm7C16qj49yEA3nwNQTZWQ5uCS8tnoNdXXFgTaAYLV0QIDZQb3TljG7AU/zqQYDpahFWTJUivCn/DpGYNCT1QaYO4bwM3NdkcT0Gih4Jt1Vj2bbK8fetZ1EgXY2gnnbnN8Oj8pVITpgMdjEX4hMzVNWuHAutNUcNXdxWU/F0LiJ+oXZQ92zVpEberr6xmz8LkHCYponY8rxTtlDpsRAWJ6ZInZaLCwit2PdPnBr9w0Lk5QC/TFRuBh+TowasmVaUiOBIiYbAYgSZ5diijLo3CUSzMyuV6aIEpBeVNDvAdACE7afMaFCqdH0T5yWSY/JeBKS6NYWClEny10eEzm1/8+SzQEGVf81kYqaSQNTAGt8efWJajnK9vI1xscYplpRCc0fIk0m5aVwSx9OI5K/PjvXmhdLz4wiKeTqojeUoJkuHrBDP4e+r2YccAa9xk5F3alzwFs63rhgi2+J+XnA5I4j7b4UvPYEJOk6gxF5jLOw9qqkOh8ISvjuJVpcxPcBzEzIiJaNAwFDEsfQy3tl6kOZryGU2GFi0rqXL+zcRTT4u94BjyHkgIdC0sZIBqIaSI5wsrPp6o9DgPAFCd1JwOis6TWMyPUwvxeIFFgnQiFHI1MhrRQSu7yJgdqRQNVyj7BTHjuSmVXQPgz4KBMLAW8iBO/3DV9FdA4G06gGlYFhMeO6o06cvGayWbUG4acsTVGKKTiv3Opj5RZkscJ1ry2iAkG+hsBm2kYI14h7PGQrikPCFLcaMOWqp3GodBFCPmEBG9/l5h/rSpOgFUeCXpqm8Y3kwex4rqsLy35ZDcJCmrdOF7I4+yJPnEiG5411oLBh3lm6Wa9j1ekQghU4nVUsf+YnMqHkJOplFUWOLVy3noeBm1vXpOf2Pi44eSlqhCzeXhoo60AmI1kQxTJsf4DJLRfL2MrdOXyoLFXcDTtEjBHRF+R8oTuKXr5NBiWuzxSAuZtLyVTSYc1oz3F7umkbvWnh0ITHjlpnGgRQhq4gb4yrLUF7dGbXXy3d5T5hWAPnG271o0jIPKXnJ0Yo/hihWKolyKMqdroFcUaEpm+Yoh7kHu4r7GXCpZasqSBKqMfkFjytfX6KQEpp6HCDPrgxmcWszFVZneBg5ZDGci82xwqAFicboRjgAAACwEgAAJMFIp0n4AvPIqqF8DCtAJcbDc5SQyugC8/YcGAfokFmJ+7yN54C/ojO5zReWyqkrgowkhAnA/MGOzw/lcAPqADE9iqB2PcauAT3orWtI7BxH2Pftoj1Lsz6LTsmb9Zlf35CDJAWsuIKEQcxUf819B0IclsaOAYz4ypInti3VfuHJELGe0FWhfPLK3XzolHmyy345dqeiuyvV4Ln84qoqDsAOdp2LLzaauPJ/r+t8tTewrlBuLrPY/rcLDln0nfjs08zMIRzvKFB+GwaGX9Aei3mjtN2Ip9HqBNmSLb5PHfMCAcPtNN8Mod94TqOBTAG4gs86N1H2D4Bdz92zKmNCg34nrjFeb4Pb0ZpIfgjkYyYJOKo+F8iDdoeVe3QihnNcmrlXTCwatiZZNUJ87mMRL5onjGx01IMkBGKOg++V9Ca7GtFbiA9VwneadZVB5i+MezbiGC3HSWUrJfwbSXQ7N9s1/3dvBbDwLxq25+mUcopxaPXfprb9Fem0FcsUrL5tW4pCxjKkfAQHJhPGJa1B5BRhaYFIqOjM1PoJoob8KQdhF1alX5Lm3nFGPBQxXkAxHdIIuNBanoTQhzr+DSWHMVcs/9Ilskd78FVPzI9kFgijwRNxUnVelcNE2mDijhK715ubpB8SpYZhp6J59FP+x1AzMzgqEBvbDEzsruwVrrRpmyVDEaWBdVBxCYDm6pNv6PO1vdSoB9c1penlvZviSoNTdU3uIicyuMzYVTm/6bMljRzAfxvIezIDv6DqbW56l8hSv27MusUzeWsRBTzQNia1oGfx3HncYyFqmgWmDya21PQzfqhI5M9Diwd0b3XTJoWRqd3IAp+ZJnP4YhNbMa17ZkPektQUeu30u196Q53guC9E+4h7jl4sDklBvjUE9P8MWV4NF91zApT93kMnuutxkOvzYRJ+yE3iQTr49JXr8w58qPccneQUEzniUheJYf4sNZSKUx8v4Ild7JoHlDRH7h564zp/PxMuIfQJ1Y2jwv4LoKPGLJyORx3rTP1RxDTiWKmfzsZGBJnLU0QK0hjaOt4wAZ+/827my2hLmvauSvDMSbZhAW3I61Bf9AZeqgS6vHVGpLXFH0Prdlvs2MXoxWktpleii3kU9KFGTYAbPbsvfA7Jvt98KYjhfI6X3xf01zu2H6DJOlmihQfx7pUuLRPrZbG/Li95vTvQL7wBTbtWUUUZYRUDKMlvE8//ZaJ+dRxkYMUz1K1lN3mNiEQmz5+DB08Tyk9PuQq4lkwLAXjC1J45MbUGR6lIXlcuhWoan7J8PtFeVAF6hJYCer0YhhkDl2PTZma1UYR7bclSu2161iWfifqrnNMv0D804axGi2G6YsQ7lBTFdG4UYQ0pWuXUi2R9j7azlGStM6hP+f+mVTpzXH9ymy17cY1lnAxQokdMUlViyCxFeBme6HlNHZjIXQRgjDBHGnC4eOqC11w8YlTdh67iQyjgdqbcq0+cqZkiCnTIrw613nY7PQLUAUOlrlItCyzYdNWW0c/Kr6n+QfQuYfQRT29ZVA9Jl64+AKjpYLTX1qHxfa9B4HdrcC5JGt84wBewZ4DbNcD9LeRqWgCxPDtubLG5AlAlp22soQfIPIgzAg3NYGf94q1UNdAIeYcYjIwbMn48yD8i1GqE5pwYYPIttRccY3rNM1cZUAdRA2CXA0+yGWPW0ZydIPBIQxar0Fg1yNFE85dnrR5yNtwKvd1i9mHZOeE8Usf+nYUJeX/1RG2ABkPsW89zOwHjhOR0QX3moHZ/L39h8dNuTHzAgk+XAirYcN/tWYen30l/1LrH5O4pcg6YlHmXyX045UvtuTqoL+3Ot58blcBSzJLVw6Q6JolGb11UoR149E8yx4LJQmRbfkOTn43N5PiDx5FJqZ6dPTGYXT7ykP72BmYbIW2sO4tLylZRVsR+ewKDjtPGetZrG1hkAiCH5iFFWkfygrRzxH9juEU14ZFtCxuKvCvnKXcPOUIXpbm1Bd1G2CzZdm5WBYg9Y6jE2q2luyz+i0TxWbsyLyV6kzEneK0fHLcxb0YZXbUevRvCc5dYMr0HkqXR9a/hvxcUUStF5l9I9y6YS+3s/KcthEJ1mnPkuVoouEmbJDFv18MOOORPR3iT7Gky7u3S6+WIC7ELY7W78eZ758LXYpCZMzqOqIuunS0gmJrOYl1gPjSz86it2zl48czRCu7yUN2is1zShg4IvzPbNb8z5TM1hiYnvxSmHeYU4zwLhTaPvVNmgTDZTAqED7ur8GlCtwNvbf+XbIfJZXmAcaKZK3+IIUWYtlJmuFgeymak8vJ+KHePVUvcQD4uQgVXSk9XVse6LYv+Mi7yp/02eJzbs/Tum1gkUvOaTMLLNSV9odPKCRl6zYt8CFBXQ0ksgXnALRZTxbH0aRePIwP0qOesIgBR6uFIymEGx4+6CIsP/P+bB6kIu1gktjtFqQ20ZaUITtrMXR/+SifRcLN9Xsxd1QtrP9ZsZHbg23rfgM8HFwxcBP1ZEO4Rt730yOdxt7uT6UGcf54TtCSHQ/85Q/O6Qxitbj32MuAfNX9HW6Or6Gyjth9WTaw++wfTYMpOYHa7MhCGtHOBClviiq6XGHN3PcaPyMbF6Zz7zzZhRDVbzqj1OXZVqvDunyq0BRgsmzISBoTHcHr+dW17QoS3jUlv+J3EXQrLll280Y7/Tm2pkaEIX6sKlLPm/WEn57YgMJFZxmD0dL9IE6YBc70sRDQVnTdoQcm7tHMQTT0PkFdjRsk8ZmY9USCMUipajo956qtDf7fDtpC97b2Vaszc4JOuQEG3HYi36wdF3XySmZudWvVa9P6T7e94hWEeNjtvaZKUsM/yc4nYIy9KTF0w1OY05WF2rkbDUycSTWBKmAtVdVPjTUMoWYsAWf9xMNpZi5rEAzmxAbEa5V+uSqUEt1ubhKS9EDIc+PBcQcrogeZMIp9wHW4mBkfLbnAERSxl/DzW/vjcXbxoXsVYDyPZVbRYOh5PFdfxNgSjz3pdqChlxX0Pk7IBVGgcJf+I4HKbWPiWCh0xXqTbo9gXwkpD5iMNGQzQLVFnSnUMM2Q1NSmyOnwnFGnaurG4OFod068QMrGBtNMH77T9X0eoq+zNDVyAABs0gqGvJCrqQTaTZaYhBQSFcK3q3GFTftxtd8dVTXujnWdDDPgsjzG44vWhDUUCJyP3DIk/yx94KqiBJ6dBs35rAfUYOY7ZjbDfDOLj/8SjyDXsiogd9SD3IK6RctdPlwlvyBsNsfTvTVEj72zyKyiamcIoTcVpoO5oSedpgqXGFb1L9h29ujkAUhAOcptV9wZ0B947rm1yGDkeyhU1CgFmFCFqgIcuvfnS050L8N3xrmZfGMjzWPqQkpqPmnPQPcoy+6JUqbVGwtHV5shqltX9cYdhtGs2KMORBa6M9y/O8KaigiebQP6fFhx83j1bSl5fEm2a8qHKCD9E/9rVpLuceX7zOrBCUY0KXBXCQg2RCEG7lcmdfoL0qWIKHAqYFnxzF9t2phB4jswCE0LlULtk3sVADqexa4Ixh9QE4wQcX1lz5EZevdNOfNb/Eg1PfzwFrsQafv1n5r2DmP/zsu1d5kltwlfKwRXdJ7lKUJKADszdCh8EouJOpcaOExuuvx7uGskO8rzQgVE73NPYcTE04NB3yJsGn4GQ+fwze8IHNUr7r2vdzI4HYg7TI5gUMHY+SPvGaOeX1Yg+rFu3wLh4X17ek5Hn4Zq1Q2XiLulK3WPZ2G8/ZOK3V95Uz61Gx+9pivvEy6q73cDxZksJBNzJ/gyFcD25IU1po0e4+ge2KxCI+bCCl0x5olTaHccuBaREjEoHPT3dE6g7Y8T3W9ZJkBoLftO1w5M5SA4K1W+8IF44O9hBTJZWL9qr4JXJ9L+Eu9jI0w1baXMEqG3O+jXRya5avzEvNg8eWltPokq4U8vtQ6mDxmQnBmBFfYCbFUCBPdeA993q971S5dycNQzSxMFNidbeT8o+SucnH69FVG63qttR+H0AyAtKF90kcwk+4xh/GHJyqLMeNgrdyshL4STIB35PJN4kuOOXD6wh80k+fOQWmevxsJ6AiCyZ/be9RI/tOwctplSFZEoCIs/0D45ITA9CquuWPGzJ2yQ5F/7JcZhG+xdh8CO3r2ENERDtQx3tzoLOk/XPPMlj0WbdWnyUc8p9GjLzLgyhruPrlknKLBPpny927EFGJ0NCkUi3+s0H94f9ioHuCOyCiq48vvxKOsmIwcWn3tsJGUzLRe6cWHQ0WEGZURTP1GKDJ+M6dtlrSm1KaiT2S6SNJoVnBIfJ6I7Qw/zYGY/q6zcgNF0TWSF9gHElHw3NNaZni21vw/OUJy0zfNy7LoAQqmi4yZoHVnmmU7K56Dp+srw+Hd1N4XAYd/213LA1EmaRBcqXp+3t6pVAzTZ+NnKaPcURAOsYDPN0sEmf5bK0A3B4QdkmrfFgdxnm5tDIDqdDJyhc+Qr0zV48r1eBq7BdIZ7zfxPXv47D8+VdntDa8rIpXjaGuVfSsHAEpwkW5L62hq3wkdwvEBjK9kBB+IaDDdlrvTstnS83Z/iovUcFpgcw5JYI6qM12aYK4WOnXud+CmpSTClBYb/UEXa0ig6KC2bmJm0P18MG6GOBdJp1IwBl2TbUUuItUcKDhS1mXFTfiQ2m/cYDmrCiLyk7pU4Ok4fZGkltKgbzDoluST1d7Zh1XPJySUpTaNKAen5V/QFlVdfgewPDAXiEwmutfOgEyyxFemBtttDFCLmeAeN4DM9YrLxpYrXiJZ15A0uyD8hsKGXJ9XJdXjSYrxVQjhGkcNwE9Ji/2ruceN+yP4NAvbMced4PQJGvY5tDxVHoMXsnBEpQBidGIltcYec4pf2TVaLgVXni7Jlho8qMh/pJGZ+QoUqiyfbKw6R07ydrrBnKS65GIhFCaUq0aCEJYn7GAS1pays8BNasHWzftPf4YpVLBb+k/qaSotKplsCf0w0eNLuv5kNtf5nOkAVAel6Q4ihPPeJyM5pP1BSKh18BXMpeSXgrIuENzf3yDn+RIj/7Q5Avl6Edt1ArUksHX7hW+8i2NX85O9e3Y8MOxrc3I7aQdOdiHIbZZOG037Ful8tbgOnlAx1lcIJavlMqdb/jd3km6BXvbjhFql4LYztDRRhvbkKkLH2RT1dAbstOZOlbdA/l7RZqx3vxX3oEZQNBVqfSJjGku2widBs3eF/syVUg19+BIn/9w8jbVO92VGuchr+uEHSNKmD/gy5m48xOlkoyyuMvbZbWUzNFI8Sv8WUvu521TPJA8mg6Rf4Uk/71N59TyiwS72K/M2I+2VJY7sIVNDF9O682bzAUVB12vc9qQNSGO7x8vg/c58OP4U8zxyjMvanf1FDyn8fZTpO4UKpjt8JR3whjjw2eA1oZ/o/dJoM/O5GAIQrWA+g78/cSZNNNcinoUSdwFtooAnZpBEifPeiezUZ7TVCUGRdR+8cBB2JM6xCCtnhdR2nBbi51n/32aN4v8FIh1N2vNIOYNWdY/nMSr0jgM6zTc4ugWxqqT6NS+eOSkjfZbEcY7B38K1WUhsYqbVfbumQXzsQ5eFaNUTX6+4pWxpaFfUDcLmvw1FwIKPoTHzLgsCIq/evNReVgpIJYzkANv7wgtEfmXVNFFWpoqWqQhTBCMhXZo4Qm1Oby9hNyyION4QGE2VejiT+CyuziMj/xm28yNUuleoyjR5qfmP5PjL4kRMomrQISumvKWdnty24r9vOEJ59nXmVeZvT6xKG7mMDlFJFgn/Kz13thysxs1meY0euntYxDULhPT2tJU6gXgonYd3BmfhU26g4cV1JV7A+4uojYdC81JstaiNBFG6gQ5b92Yh4Ihf64B1KL2WQnPOs4Adk5rbsw1yJNjIjMfHtfCY2TwaKF47SUF6fv78lQEw2G4/3PE1hR80G6FwdML1WL9ovV6W1RZn8gthu9W9Wmh5OWKmaRiIvNqkOjpD7t74Ls4qrafups9WYi/W5kQdZRvtup6EMlVYtokHFzTmAsKbKjYf5iMj3+8Mz5KeLS11TsFjRcwowAMnPK98v7Ag0Jud1HGqY/oY98Gu7MI5+HtXN0tAAT0rDs7AAnzqSNdlb4rYmg+mMrQarrh7surIiGgIcfionULazcS/k37YW2UengPvxfioDWPTzbfT0XZsmgnLT1n06MKWJEpYZ+lSHbGnS5ydAfnvT3Gbf6+VaNyK9kRPcpPMtjCNztNY6kaICSufpaB7apxTKklkk+fZjbn39jfaSkP0wyB3XIQDNXb09BXc7Pj0jW5EDvGJGGPTAIWr3ClNbOtmRZDSQqHhqaJ2Oimh1CNiM6LayRM9PY4PqbY1XnvE9X966tbRFHugQ/6Ml4AFVnKA90L+1SZrqlq2Z3liIAAAAA');
