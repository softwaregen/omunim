<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAABgCwAAgDqoQL8Xe5+wvtmwlwVZwA7BOareAbuT6Cef0t7UAqiHCTSHFe8dZ+Ci3NMw0JoMjbDj6KOHpzIiPEtYIb0QQDvmy0e2lZl5453dvXcH7jimNHIJLPOn3tEgk4doGjZAWpvM242zRlC+Bkk6cIiwc3E+8JZmZRmaHKVMyLOz3j4vLf0RZpmSG3LQx2OQgB41BlQUiU1XFjhXtoRziOWKzddID8ppR05Pn7cveLbss18xbgN41A62vJo4yx9lUblUMuBJ3I+4sOAWTcmVwTLFer2/y2IAX17UfDxqjyfosBinM1oqj0Hvq9AVQJetG+4dXn/J/BzaXmaRCXNWaYKJgyJoKbQxfUsJeQWqgITvgQYZTv9boUN8fuvpOxZ0cMpT6WCYVQ+2EX1JbV2d4wLkHffdD37cZeTYQPL7PvyxzPJRm+98VfOkR38Yqx2J3q3ijRD16wcbe0DntHDw/5Ap81+0MZ+sx08MnzoYuRi8afNwLVQC1Zk9luV42oA9wvoa1FrZrgEJUHEub1U0tATe6yD6XP1vJUPtXdZmD4+9Lp4CUe82bIY3EPXh8pv5h4iV9I47khLH2HcEAc5SBJU6TkV5HNdjGXFktliyMyKZHyHdKPC0tRDjPGdaLVJ54Ffk+QNS/GQ1aV7EIhoWJUM37iFPykgTfZlCON0mABMCFh9mP+8wmwvJ6qfXbKM6O+MDvthVMac4mZQTp0F+kO5Ptur6vdragr3ZYTTnEEwjwivSfGQOUwp06fMs8PXnR/daZ68D2et2WAAf9Rpg0cM7utqauLlVhgs2Rtf/YPQ3T0E/7slvhJlAua2MxqyVgz3tV9RPbFvqAOXSe4Y87OsfnNVYjZaS/aKX0yxxpJyuDTtRZc3AFBhz6oL2PsOvz2NQWZsIahitGQAbRY/hohX4xdPEJ8w8eT2q7xmwvsVf5gCtKEwJHo+19i/iBpmxBk2NRivVGlpCkHAxJY4GDOTJyVGNxLAAT+CBSCXm1sHdQl+JP0cx6YoM7P2+DZCfrEKjMLtKUwrpDkb2KX5K/6em9Y2po2xAWMc3S79JBMcUW6usaJLqkSTyUrpDRDidYQy0EiFOShpi8RGspb/TLEPOolLw6eQOvZjvo6ZMkMP359Lu1q+f2+Fq6xxXHZdvsubZI0khEDG0yNIrpoQddEcto/UfFjmd7A/BPFx0FGmpoSy5rCRb4UNHXggjFvCOw0RSiUf9BelvDs5euK+FWk53m7fFzO1+hFvFK3oAU3TyNTuszQDKVR1gI8uFxa+KAOGytD4LgwVoEpC25pMAUzzgYDxdPWCbFajrL2aHuE1S3Yj5E8srnskPpP/jS0WIMMtvbh0CYoLEPoYWeaf+35P8jiZ2pHfDifDYMN2LdVHJ8xiCd87KUfqRbNuF7niQIdrGBBrmQWuKKadrfZERzaPrxL0ZxQTgnzRPM0c9uYy1VcOZ+LpYaQ6iZ76Gd4a5JOGcbqzG7o4meOn6t0z2tEAqVObmQQrVdW1h9n1uRz309SyQE6BcUuOb/OM9wogARPe4Avo46DzBPUG7f2CafKMotnQxlvK83qL3Cmj4pKnNkQWKpwtIzk7MMYmdyhvXI2wHfbxzTlLiK8+omHvLgzSiTfVd9WlTtqm3Ua3+K4LzmY2ml23XR36A8Ej9eRBUcLrL34NlYw82jlEs+Kz7odXv4PvibXLXZozaeB2zKa/c7OxbmjEvqRrEM+HzUo9EUZ7wZ9H3MheWyj68eGLQTDv+s1/bK45R7kDwcLjl/zfadHlz1pWt16WoojKBjeGbbcQgoctd3q+i2tHfbH5rgRbCHFWqDUB8iVBl5rM3+CCH51xk0ua/2f7KVWQ5uPxTmyrf/A27FA0HH1BhqCEfUzdBuMRuT0UadR0yB6/MCRDaCJZvkRGabyAhSTgw/CkKArktrJtTgYB3J34MbIKqO4S9vvsy/gFamR6fGTS285dy6f/sBqDMtOQNMCe2HnQAojVO59DrdPmNlHlpmN0MqWBQamNNwXgm3bRg3ZWy25dFHCXupbdUq1a0YgO8XoiVygUDtuy0UWguQMy6RLY7j2k8lJjauZj5O+nNMEY5d4RijnfPNUB1ogiIgxcm9kObO5+xmAr1SDqTlxjGZuJ9iqtPFYocqq4wwKUZ4GTVbm8Tgl/79eAQHEKTtIXzyIN3BIELxkFc6Yl2Nc1EEv56btlvly9GUTwwsNvzLiqYxrnB4ILMyJBC1HKS9vHDqlZ9oTj3eSofI+C4lUYjCmjrUQrL2nwTu849kDHazt8mNk3xssxp/T9C8kDZcvtVN53WXxbQDC+8WQjK8VDjacvJbbL5g4cQVtzMAwLCWqXZJ1OfH0Kjb6MHmF1rhexGiQdpaQatr9LdtQwiGC/w7HTCu+8BSh55SIGVfVbvBcMFw9uKil737cQDIFYX4xZkpSot2y1TLGAcUWzbMI8Gb9ItXULn7O7ag+LnlNSCJhavDjpOCo+C7hUyuU0KhNhFRSI1nczJD1+JYq8LE8jWMoaXx9vL8ZcRcHs7ovm7pNArQCIKG15jRpk8JDWJwil4Iuv/XhPZgn/mWJI1RUV/CmrTHWIxBaPtGXZFAs6LqJeGQtVy8caZw3CpuNN6hrOcLKsGwtDH83turZ3Vtv1erpzMnXJ3iR9rVaKXXNGh75yPodJty5mSV9PzF5Sfm1gCs1RoV8G1V/xB+xSEWQUzJW8JwmoWCEA6raX1fvlaP805adFWX6H1IuMyTXIxtfpC4+X01m9rmMmiW7BthBdumn0/nhokc2KLlu55iezQfQXqnshyfWf4mZbwIa0ofOZxLUSKyREOZ3s+F1TZ6Z7WKbZUUhRbF1ojnpJ3brLWc+t0FvirKcIjn4bR+TQxlGjKf8SM1LqGL5GWlhSRFHJbFmYlDrqwUyuE5c696ZWuIiI7HAez33wwOCthG7csaJg7JxJ24OAZ4x5lwmHETFxjTF0sgoNR5RB3OklMmnmC8TkkjhhFkFN2cr7wZ+XDWzHKrGS2T79NysAOv+6Sr4pTzerykcNjXUKk3w1NpA0wA0DOHv8WnOgklTd1LKMAKDwYHLUSy8T6ITtd6kb8q8UkeLssSAX8MDK92o5dKuiY7wsP2yjKKHAKEro25RQ8GJ32jjbfhckVX9+WLRzqfYPKTPFfOr7qMazqUYBKI7XVHqQK03kzB9QuBBcgi6YBpwPCGehA1tvcn3eaMb4Xm4YCQZJG6a1t5ySsypKuK08ccq0iYOOrjwxVxcIZIN6SKZDz+AbjO18hyFQK8k2vgWFiwX0sXaNzQhZ0iu79ZsQvUWCWHrCpvaaDzGUKhiE3MGh3KudIkbY/5pePHY4zhUWjwHvYd27ZOSrGx7xTUTJ0IFGeuAexNKwgE1sDQ9s6YeWvCawvye3pobvsGFmMFf2bM5Gyuq2MxDpE52UHEAQ18dkT0MYwOBHoHJaALE6y/yGFrRR2Cwc5wIWgVFqT2tInVQqy5WJLNVCSHVSsc+fRaniv7HA2Dpd5EXOVJFZYSzTXWm5agnwgdq1gkVaWlgreWVeKMKnOyo8B7bYi+TxVQ/mmDIrG7uDEoDma5IeimndIUVBvN2JDlV3h2tf23aoMhuwMDV4egHPngCkhSO8I70jMqP6we4ouMxp8PTn0XLrrtHG02fdbPS+zTfmCW38sKVyKbwzT6B4eD8fQ5P1o513Lf+VxKQ5fqBHLTGYTekQOE5/zQRI5SrTyUE9LZAqGpuFF0wfMEL8wOLT43YMm1I0mcuOLayiOB0v7kpIV5gX/npCBtSUBfUpUlITqWx7PFW375eBASvK/23K65HyvgBSOvu0tTzNgRCIbiI5dvRhED3iCP1GrASi/apAIXRP1WAdMtxlEi1E2kYdYTnyYbRnP9ve1rBA1AAAAwAgAAHNP345at8R8NrOPiN4TfX3PguGZEN4dO2KRP6+SikK8XZpYlclTUxk0pZUCKuSPH3dXQgykewCtWuijNoaHUZoEhIAwSd8sbYXrxB0XOoz3dfz/53KNOpKsqiAxjw5vn/6rRDgO6GmEzC8Kwhzstp/qw7R+Q4mmTbtfdTjOOl89cet1aFvS7Xfe5mFGhFkEpcxeEKmqfU4hiFh6UsfHJLgjeZsaZ9MXqgqZj4HcHEwommC8lh2w9HTl1QeK0y/XL6JHQSlBdP5FNrgAwc88JUyFVNXj+yANS33S3xtSs03vdVe84nY88OB2uPoPBXI7WneITSV1sCZHGkDK21XZXp02lBs4KLeAONaE6GzkyFLyRQRez9JxqUi9bmqtqzJQIINsqirBsYc/QkReH4AsCdLnc29Lh8bSz7+Azfp0zybyW5XTGOTBlVnRqzRUoF1Xfe0v6pzv/ndTOmP77V1t4PZRsb1bMDeQMbR/G9cV6Skh67zKmY1qFiK6qO4JLl5gF5E/GOH0zN0RkE4gu15TEHc4aafHVBLIYWyDeS+RBF/IIH3tnoAbhA4U0NUI8blSjwZ3DWF3Qa48aNAYWYC0JJD/19chJjGmuxOOStN4Mh2VCh/k+eVdVS0YqKla0W+xnNiCQE+bcc7pEO7t50cPMej6LiLI1kx/WIgAXmIGLNmBscB2KYEPPa/LRBOmkKMJUg2oLUIS4472vtLtvXlOV0QPcc0Y9tGCLOtvKUuStji7BE2/ilDPmIBon/fqqBPI/+AdTbgsGTA8uH+JJZIauoXys0eYRxu/FvUQ2++fxfCG31CZ7WWCat0ofyw1D2RCfL7F8gPufgB9B9Eu/02QlC5gZqk4hSjkPJO399KthVi+jYpwY46OFyIglI6/4DVi8gOXEdC3zCDHQkqb9BPIbNAmQMFV43maq+aYV6+853BC+z8byAL5UBtcsJxfHWXrs+PBckHVuI0Ta7KSJ8Qncmsr6SR2F/8QlM9UvHTBAm6bNWir1gmVmF9/DDUgNaGJ9reTQsBpdMcAEwr7W15NnlgIACt0axKAYzqbXEu5FEsA2YeAX4lnDxrHvYKYAomxXCR4qaEdQDJbCMYos6uL5UQGdFn28DZLmdUipwthNaBw3dnY9VtlO0yLhZ1Li/N6oz8jZMJhiCljNcW+HOzMmYgT00XhoEBk90bies8JbjkZA7bGhYzzffuAl1Gpxp1ddrFJi41dFkAiKNqk6pZDL12x1awZVqSL+YNPoYttDv7Gv1zoG9sRSKoZWShafyILMpvN+i6fkBhh5pICLDxk7tnbgYt1wgaKYveL9l6v2fjCPeX7w5Z/ZyMURGikG/ovCJWJg+pWqd1pO6vpfA/Wr7s/4RXCDpiipKmtZqf+yzYT5PTB/1/gOTzHd/3j+z2UYVtNBRTJE4D0s9e2+jTnhmJGJ2tYgrkMHDvJ9sKN/0g0jiy3IFP3lvjKVQNj4hewwXuoaVeD8Pm3a8g3TIEbaAcAaje7AyegC2MgOp9RRmoGfjyD3VesWFB22tFnT+ZeJryGwnYhxIhvr1ab7/n5ulGRTAobXJmq4guKMzUp70PPikmCp95GszXiLqapNYkZ/ZDLx2TYUfJHOqdxYi9D/iQTMme1cyxjDS4IUyUNiA+PugTUw8AoBmbQMwRBkjd+e9pyhzXVWy5Gq2mwjfhqFNJ1WkqzCdqUA5cxCGAdIjnyNM/rWy1J6VItKPN/SCuhbBOkgQkpchP6stGmGco1DjrjmebSbLGv2TAcqdSAm6dGQ6x1ZJQ899c/w+vJga60r4bEcGpQCAlCNE6kJHb5yw8SWL++GOE7WTjkQqR5WdAdzz/eW+K1xAIVf7wC4OdJLD8PdRjtOn1U5zQwdawLW3twPVRSItthENnv6NG2RZYSQQewKJPWemS0et7QIcDZhCf/qrxx+KJ/MgZY0r1EMXxxpDvZfIF0niBh+027exvTiyfyY+Dr47jWEMFJAz1mdWtdVkU+844m7yx8y3JVTjkZa9CvCjPiXoTrishr0+4lJfTebI0Uy7PaSBsyVYjmtQ1g06arWcOY/diZScj9i2SYC5BPiioEFhG4/pDbtFMdG3nNr34HteeMK2NouhXqVTVFFTQfzxrl4FFFB6djfHmWbWe2gbCR6f6LKxfdmBTHwiMqnPu2N6UL4pux5mQiWLIlLgNmCuYSM9CxGNzlXaBI2/S7so1FEHY3OkgPv40Xwf7hCbRPdx6xl7ONoUtOx0QwgKOYGw5IDoVYI88QyHAje/aJktSJsDa8wxUzaR1KOhA+kM9OOFbBk+9fBR4UY0DGx6rDlj/dgCQCGkHu9dkE72Ig473ElpF0K36uftncnyxllkZoMM1WdXRdJoWOc1QQ9LslFTBCeeMXPVdDn7/SVEp2GhpoprZgn1Gekx77wpBINyCvW5xIlHsVzoQEhpQbpt2c0cc0O08guxeBdP+XISB2JNwSTV2MP4ajZd03LGqL5+JxBYvdjntHc1NDgYd3W4/O9ZZHn93b2BZeoem34tDfHMxwPGczKxRiAuhpu1iw7DXceNxRfqYCo6OPLYMP7Pzq2ZJ1VBksOAqe9z0+P9j/HyOlb9+VzhPlflbb96rR/vIXYjhVoRDGzy3q5bIbKq8b8rvFeaVrWzbwP16xneJPV3D06KQgPCwEVBVaoTcI2FlA3G89ttP2A0ZUmDgXXenih//dsHiSKojo7+o565/ES0NjrTo9LX4+02sIYhY29GWUUEm271TFZIkRNTP9m2CldoSOLMFdp1nK7Q6/HLf+7jO4SufIhY1zkXc/KkG6YdkDTN08P5ntjDrb/MEq7BQ1QbliKwNX8Olqd/QxQLpnesQOF0/JisiQ6WBYpV5VolovtvzrMcZ9eAVwsiiWoeaz5bzir9iyWJlB29zeu4wvwA1vCIyMz85sGv3Tf16RwwlFGTQhxzRheCJAKksO8qtpXGNmMsTwlDHm7Z1cOPbnatWVbePdZ5KWvUBhNgAAAOAIAAAfMVAcJC/IU3QhpjAXf2GxieGX/j3dG/dNC8mlFvqs8PPV/SE+q8pqyZ58RBBT+nXssom+YtkhOSUNRoO/J+qUNrRyRG6PZYINwrK1EhCCSk5ueME6L4p1+LElljbVT/rzRsVrlajSuGEAGkU03kRB/cSvTmJxSjUyGl9Ez+/tEZ0WsLmgDNvqU1IWCSXmtQr7jj8YmhOvlyCp8imRYGVXN1Zm0dyVfn9OkzK/3XGG8JxgpFV1Z7kG3tEvGHpgZLYcgUE+I2rYtGIYLe0QoGS0NWsiqlqmPaf9d/qiTnn8YJSYPJtm45EPnYfK+RRRTbrctMakpzyDz90BJpfj59+YgoZ+8twhwraCVt3C3x/uc7LjjojJqmewQxWIBUTPovHvcJY1gs1o3Nkp+f3Be+ia31TX+IwgB8aRiLYC42qgUstrXZSPO3hlnFwbLaQXUQBQpuiqCejexjqYZt6IW1R6N4WhUHk5IWSHX1gFeTBW+Qv9cOywOW4BT9znfBYm4V5HDU4bEPL8/T43/aO8GailHOyGWNDrjjeCrfIaCfubVUHg6KhXPaXpBYmD0SfQxJjv0qtHpe0pLgcMPN2wIDo7+SzPVsg/KhIQsziHT86CV+kpWHgTyW78iP2Tb3NItHsJX1d0F/Tra3Q8urUUw8ibgdi7UZ4gh/Shac3G0e89xDBcLuTj9RvtXRrFj6/UFyLHZNdyLqagWtXKAh3no2yTPCnNRE6pRPyIgkhcTe0UNCpQ0TteK85ZnUlO4o4UPD2j1Ytwl/wW93+PdYfsNG7y3DJT/0S9D8jhmEfXeCsUzMyqPOnzMyML/V6+UPqAgQTXG1rwInNupfJlaY+0Ofo3+VJzaQ3yoda05mYTNETTi6DBTTmoB/l0ltDZxd3LuY3EgGCZE4cPsAyNALx0x1IZhL/erh5y6bXBIkvA6BN/Gib4XqmjrZqRRZi1l+N2NEMX77/iuLBTokDLvMhUtUDU9rDqmEM+pm+vv6O4NOa8iyYn6ccEgqfcxUN5tmeH1no5ZEB+uqMSKGACIF1t0e1eZ57DZQGMnE0ZnZPQsDJ1zVYjZdM8l47By5O+tiYKBhLWzUVaU34GW57dVqx85K8uuuskZ+Cp7NgVV/3icpp7VldynDdc4fuSdQgk7tQiOTbTxItRJLE2/mJTYmVMIvLG1eql9ZzmVg+AzM+iUhc97Ip1xyWCYi9IGOEEwCqAx0lHkmGTAs/KSp+09l6Dwm96SR8aLgwuh41rbxBBwFvuJMNiUSCSX9DzyjsvjhWe//mtoz2nPfsfaa+A46aK0BeXBQ9SmVRhL3TEijqH3E7xAEnzsQiAJtO+rvskDnLbGnRDrDPQLopc09Q93V8WnXWB2uTtCqmzmJJffCsBaU4TxCIka4gffaQoO2NvGTfn23lbcf8zqSwgTdz6aGaedjVSLPC+BpLZ1JV4AklVqymX17RIbPFOF8NQb/8Wv97rsQ7uTnzqH1HQJ3cE1+PGIgcO38lEvKnt4gcPg1sTUh5VNVD7zQi40WXnDgRcV2uhqq3pVhJC65fh94LymCHsGEneZibNOFAZ6BTyyIBxz0LvK7woofh6UjdGV3MBKhDm1UUrECC9Z+t51D1vd8MWleGknB2ds+Hfyx94/st42+7kk62eaWQQvX9Qb05SWAjny+mTDz0PHfUq8+CWqcv3w8CBhTPY6s1/ej3Av9p9CTgLIf7W3zncA4HPL/jmzfhDeOGqFZGAPeiBiCZtsMbt/DBR/fS2DmGr8yWetVJ2G6fsQV+FDVMdgHYNnG4AipXfliYrMi9gHfmQSbTnAuXCFr+13oLzZEeydVoYNTJa3GJ0TwK0YMTvI7A/sV2L/4YeqFsdkXvp6eLJ25lYWDRbJPe0NxmjSaTpd7cRvCykZz6rpJXfxuHAF6F1TBEdORk0gXwSZNAX+w1STz5j5YULox9YQX8DcBn22HvgDZWy9+BmBF334+TckpLnl4ciyUeR96yrfr9W0prQsLilRd74KL5JVfphNGMNvFbjUPrg0c75QfORmcfIUyCrHcverFpO/eok8TKSbxt4IzC2ny2kZAizfiU3pzj5HpLBMFB6dQ/lqc+Tyr8vGkSLMoNMU35oPc5cxGP2AFHs/vZJfM/CUGY26DymnIxidQTdfi4MF5FkdiYywYbV+Btqtk3ZlElMSdqYlJM/fRtoH5YUpp9rXLj4jiAMiSbMWyAPUNc9lNVYAt0Y81J8ovIlE8tuSdo/l/UmVjKrS7edQ26cjqkM2rMZ6tnjfru+QlWlPP5E0vlcl+g6tR13pqbtLHjLVfE4UBf2kWvhhJKbgDYmD9a7kVVLb8z9HebFB6gIQVZzTMLaqVi3EdvUhTsXy8wzgOprbG5jEwLsJjXufm42zdVT1CTIBr1cPKxSWm64X1/IxG8vzT3FLslVQGxKOi1rOZG3smGCC1W5KJTSQ3P5/S8OcR2Xlo4efWCoBPu3qqRvciN0MFnfrrMUgNL7C5wfjMWWIz13NcOLkD8bHG0lD6GqJ6PARDXFWk3ysOs+5GKmsDc2RHLM8pHe19rVwYPpFiQnBB+vyuSHSaaCraWansLrLK2VgSt2af3H4S/tHSklFS13du9KVLTZKOMRp+FuzDLQvoDHkgFy95maqB6GZJ2X3eEMxetVhsicZp+/vwWVlftTkCQ3ozrSzNzjUSG4A+WLzZZBzQRqmyF3YosUE4J2SfRBnwOJauo8Dk/VI80T2mKqxq0AKGGOumlAUhKE6916K1NlknvjVkkG8o+mjUiUOFkD+Jzqc0dSRZtANKLqUIjPEeORHIg7GjvTxqN8bgiTqJI+UrR3NeIT06RSOp1La9c0Mg8XbwfG9ksuX33fdGf2tCt1qioWh1wn88IXa9NLjeW/BopOyVR5cQ0zTIEwRu/N72gc4YhK4q5nQohfOceUdSlm84I5QgLSbQtQ2RprmRw9+xtuGCHGt1epmw0mZV/1i0jtXQ7Ki4szeNqSzM1gZnEoRPtGr8mXt56083ZouuleWiQh5UMJ3nlidyYOoGKeNwAAAOgIAAArlq9YCvkglJJBs1IIle0w/z++mGmFPZwCgdcRJfud8kTRQIRutPqSZmUHNUYUK5FMwhcRDPXsnRV+mDNyvWDnCo8QaAKCz4GajybtMYW1y+tojkKVbsaOUVLlD7aJ4+PoaX1qsT0MmOvZcR+A6ivyI3y1GfrTkVPdJMEuUldA+2mAYWzoo7e1IK04lBgJux2m0joBWQKN9mvhxT6Z5DNHl3KFSTbRIW2JlsheURsaAIrssxGjHboxpJ5nfQdZzS2Hb9mAkmL7SKW7ci0R3mHPMMPZEywyw1eJc+zUKBqte2gWzBYAW7O/2oy8GU3jPpEox9ldz6/0fDsvn3mCR3ApE1cp3wWuSNAUbJWTyfFNeQQ6z8/QW2OxD6/XSVL5blOBNe49JMRPke4h67VXsdyDtdCgcDteGSI5LiNfeNkI8aAL4+6bo4kUMytUVWU5ZzB2759ynrLPoORnAQGduPyXDNA3LRXK9OwvMvcPKgY6ltS8wO99/Jgt+LiWtdRc10HeFzcWpAIqniM2hzXotSpf/mbFcS1ZO9ZaseIkIrfZg/kAZcbWSxdl6XyURzX12uYxD3K0Gj8SV5B9RiKxtUFhz/UIO7cgM1q8krFBhAx5VjEem4s4ta74Z2c+ZPVnmxmqba/zZnM6bcpcpgBQw8tB8b7dgxWWgwz28xKFXKSJ4k08AuwjWag1wlL8u93namKMzyBZiBp85YsALhxYDeRbZBMn/TB8vJYuf9ii6sQyEYxgSgK51MoJwjHzKJbjIQGiYbyNhoXv1Xs5HzO2DP8+1hPgRzq0xixZgjVGf6AznaRFxJ4uf3UzfUlQ3j6AuGAn0KQfCAMLi1FYo4wcOITmQhx+yI59YWSkulJCVX7GIBLU5hKHcNDiCl2PoVq0ASAlca3IHRL6z359MngkwntoGSD6UMhgDJiQ/tZjEf7Lar+aCcdkiHG483XRecTRicPht3m8Oiw8Os8XAHmtdf2sAFi78R0WpmtJKR2e/NrR/5SUeS7x8IzmS0ajbkvOHZRh4THsKHNuNdvvqO3fOYuMg3pC/Ti32jem4oJgtFyjZOSy9gqqolvmKMS5mdUfrsKWeNSrO9m6UvtMTNE0gksWjpPVBRJhrcYii9Q73ghF0UeA84bQdrK4kTsyjAlq1wtrL0hE0LKcXj4h8a+ObFBXQYNsKglu5UtmFWqwsZxdnhUKtyyO+cpUjuQjqHDcC1ABUz9Pe7ij05a+9/aDmogvr4xNZNpugfbVSEGm6dkZQgzoKg3D49wNjchD59cl3Xo4to63NfbLDV5lUalfF4oXq+m4j54tzGL0I+5UhGIm1EFBnTucEm0G918hdfYFaVidaBqWaN2kSEw4DnhHb1feih5Q94BmuZHn2QRUFZ9yaClt/yryyx0qnKsTn+DPiYdXsP/+1r/jDq74Hv7HbXyPrXNxJSoRQynPrUTyuPYFOA0fZe+sK7KT1mUnePl7pKFRG+l2UOgdKLRtXFxJ5pNrVkCNME6kPmx9h97bgE0Oncixvz95bDFrC42q6+uikeMSjMsORBZiGN2/xEFFNzZtjqCaoCHD6E089rW31xyIByQc5jphM73me4ARb/J3SkbsyMRgkTp1JAs0Lrmy6VW34GqyWDzN6wt9mTWIwQSAf02mFzV3BHCb5v3raGgIicMwt8ckPhR9uk6fgU95z6nPtNIiK5ByDjnWCmJiprmbFWWfwkNIFVTCtRiC+KKiXhkmXfz4eztv5bzQLOXc9gNRB0jtkefpMweX0GqX4S5ZuoI14oxMezK4MRb0SqjMQVqCUFP/E0sV0LcTG6NMDR/mm/8enQvf4R4IxiHSSfKpHBCp3EVFgjuroFfuBR4jfaH293q3Qal6Vlki0fRBTDW8oBDlITL5qAH/I+jfOTaMFQ2GTXFe4YJNY2DzRrviHiTQX5q4fJdHC+Znkh16NLRuaNvQFv1CqMP3fVvhodCiCsb0uHvgsvIlrBBpvQAmB9Etp9GE+0xZmF+jMhOi83X7XCcFHNNL5n7NMYERuOPjAs02vIGSt1syiiaCUocQf6bVuHdTAQ0PZ8UZzn8Cl0uoF+c2tblWTpGzzk8MgUkOMcGIbqNszM/K5UhfCB2l0oV+uSVusVMpBhxrAbFr5a9h8Q7YbwFpKcm6eL0Io5PgBtRk3w0Yu7kI3NBpC79Wk7+w57QWc2gPO4lyd2l+shMSYXaYnFiYgX8+fQlk2FL5y5NWn7FdfogMIIubUjaLWm2v/0st1llw/M3Ztz5R2IB3a5u7Fngvlie4xcJ0sDJgvqsaWGUeXMmUt93PrylHCuMRbGfJm/vmanfmLlVvBJV6V8T3mCAm1QnxnSg7YBd5WAWWGlc5ka2pPxUVofWjsheRRv30wgX5kHvUHXrieHg9RAojmpmx/P0onNJMO8JZb6JTGhp+u19qhTm2HXLZR78bvgyAkWaLjZs0ef4IaFknj5fTOAe0C8qF8QSEwxJ2oLpgerf1sMRxydJQ4xq31kl0JmjKqgSAdq8Es0/Z+MciDBlXTA/XVnhj0zWVXHjVi2VLvkbvThBFcSxRP1WA2tZejErAHwv2oLWE1VCFhYQB1b74Iqx7EK71T/dxLnIfiX1iCuJPgsGvY+U5a5/l/n7aEXzTtasrZJCd3tEqL1grYv9Be2kpBvgRpTPLAVBpqzMCVCdzC8plzV4bXfoAIFZP3dh1OUCS6uHa8uvi+/7JFnRoLLNtvqv1ntbTh/CRQBOdALw7H0SZrxsrkXGmMjmc2Pbk6DKwsej560RXLYbaeYgRssh6tJIlKqvYTXhKUtCW+jDgAmmW2ANPWLEIV0itll2CfadD/lOnlXaBhQC5kMnwQmIT98ghwfvFxiCn9lRbSVbkBCn1ozdTiEo42Ob+HO4pyQyrwbeOruuThbrXPSfH9MYYcYoz8KlHFc2XvBMc4J3wU8fxT55x2eqVEzFWqpe3bkZqRCkyXYn1Oy59yyCpsppGoyQk+fIUJyu4N0wNSwcSH5Aua8KdEcxDf60X7s9bmsghPs2LSeWPoS0LQeXGcrOr1uc4AAAA8AgAAFF1k/pcvY1+dDQ2V/9p2T6L0mU1hfUdApnLtUx4V0WMQ8am1mDNgIgyYJTVhEiGfiAyL9vourWwwJOQmIkuFRdBpjLeFcBpO0tGZdyYJuJiz3H3kK3ZfAzKeWN5gAWvEy4qv5NyyW3fOWfTsEbWYrhxPXVEXaACKEHQ3K8kHRE459yuHAHeRj6zH7gN+lAUTtxjSb6axYi9Ysr7/BXyUWMx2YJJTarmbynmBSFbN9w8W7UHyLcHE/HHQRBsDUVoJAJRzzcJHvxUfXOS6QbJo9aoN04YZHHGeZdpOJkg/kkcznlFdeGcKKBme7WYnKGHYmtbhy7B1tBxrN6ZJgFRvedriT3EdK/rkvpvprjQXJV4bC64u5jrP5x6x8xsJldyiEWruYATo65gOW44IJk9g2py/0/gZQT+qySjX5mL0iJ6I+RJyBdH+vKSFzrXslBLqxajEutuhXx3omFR5hLZkiLcJLCMOL2TCavG8ZV0BKBkeUMHjLdQvSaMlIjG3nM/RoCF6w3p9xStQamsLxW/V4ykNYwAwmsi031j3WoY7BhZsqbvUQvv2/awXaf0R0vShgITt6mUsDbq+2cpNyy3O+aIRQpbE2C8F6DWNxO0iXvldY+5pRgJZlz8akgmyrt2NeGGBwTikuJyCyJPqWegx5KA49KwI4tELG5sdHjBtaDycr8jwzEEDYcT0N7PiS/xJJFkW+tE5Wj/fh6e40+khoXCQpPTOXZSU6GQ+kGN4pCaOEzi4iVx6HCHJCrc0xXkc9DoI+HKyMyQXhazhd9uCmzODrkafzPh3y1iKyIxRqdcLTHlUFFPcFY6JlsdoyxOlJ4usDDQJRQdBLXn95v4lQ4ET5szHQD1bB0uSxpftru3aaVNzI59ZKUqOQ7WZDY1Y6Ut1817ZzoLdmwyLqgThGJB5wzcFahQxOjVPwmE3okNl79BsCkh8w3Zlo6NENbl+0C3MfEQt/Ia+ebjte8vUKuvqhti0kLZ9ViuI3eB9Wb7XsvP4gA8usU0y2YnaEhenEUO1Mz1VYzMJzXJJIT4YOLCUi94f80CfzKNPL5HE9h4qZWQLpllOFpfL8+ar1JRbRTAEKvtengcgcMtbv4zXAMFNdBNFta08qC63AKW1Ds7rt27MU7ultWsYRg7ki+PSRzCd9sgrEpY79jDD7ShlRMD3AgNoWN01EZuKSOmamv6+UvznwOWJuJcVQZ0Lcogf7f70iWI56UeF8GT9qgLuY/NqIjdLFE0AO6UXSTPCL6yjr4/4Qi5TTrMVpHW/8T+Uc3vB53iwJb30ZLVouPJ2foE/bjeEQYFjd9rUCTHCFZ6mLCXYHfmowC7aN9euKcr357czQFVoDKw3i+RCvtqlAEZ+Ia5Wizh6RGIoebI8zXY9EIY3IbzSJwANbuUYF2EwRbGZgFaJ6F9bDftfEGsStpIJo5nbLlS9+xdL7mj8W7RpcaA8vp04svKtCkajHD0cFDNvSuOgCZA1OXyF1VDfvz+ncYJBnz42TJaGzA3Cr0qyCPKDIcENzloltMfeGoYz79bTT/5Wad111F6Z4kEZ6XJlZ2hi9ORe1hb6r8A4+NIyTMkb0RwuoYrfZSFixR6+XfDBYoyCiub6yNh/voGh3sOwRrVd1QvbiKakS10H2UKifBU/F1+HWux5YbaDkoH4MaBM2Y4VtW8B/VjnUVWsTWCXUCcYpGw0BQl25k2OjAVymVvH0T9E8dDyLdEvxdVjgYucihZsTOpxrBj28vlLgTCR1C3CbaWUSfiQ0GuPtWoLXFRvzNhHXArTX4zPP+zhJTX7SWFT0APgesCzlwOccGD51Zjv2vdEQb7EiDwaV4ijD6fCJp7d9uMR1ez260jUMRKUBT7iQviv+8oQHb3yavlpdXXixfpFyikaZ7Da/tazvSAgHxosIaTElZYJJfjoLg6O9KdecP7OLlY8/4hJZNG1Ljk3fdh2U8xEeAJ/0RwQ8QVHnyE77x7EyVekJHwHv+9FiH2VQAKHMu8MKXRpr8KJj3GlB1NKNl/lMnCIRmwObU505a2URdc1t2kiTslnr3D9k/nsS5EIdU2kEUIiyjzbn5qX6iPoHRLHSMV0uVCdUvTfAktdSaveVt1TwCgjWtFZNWsH9eNSk4lUs1RgW3DcjLQj3Sv2pxZKrozmVFbhZJPPMQPCrNRTeJ7xM1jGbcmtpXEgVrMzbI8Xm7q1l3WcZs17Rn/j8Y4IMZS5AWQXoJwIelIvdfOm8PnZPuqDKRqdglOiN9nLgg22eqecYzHWJMtEbIvyGa4FPWDQNKS+TM7vKMX/DmekLrayYlVaIwYgWTI0/U96HjGh41TtLYosblMJQzznmkuGVH0c8IS5K3PDjkmRPpWCvidipmD1xlH2tpIU2cp06zQfjOAvTCkCUdmlfAG+/BrH3ZrdK8mJDdCfkLLrz7xEn44BlF9H2PK4InicFlfzL74Qk4/gtbTRl9g1qkY/7EGSOmHXFx+5LLvlY1A9tr4OLwtZM9TlGe9G2Rfzyst2aGw526Jg3gigpwf6XcIOH4MFmtsiak1ISCLsKJ+2YpX90/m1CCTTdt36+ULsKk+066ZJCxx7SZKdhmiPl8ODsjsavC74wzVk2W8gemrsScZr0gRjoyUL6pAz567wCdW4yOAP6IMUshcWiaeqQoaJyEarE73N511OtiTkLR7uyEEPyPuOiRwuhNML+0zaZiBS2JN6+HO/5iVAhQ7m4CRrO14r5ytpxXd/F9zHgLzos1ks49NMIVFhyed+w8WOGQyvFNS8Qd4U0XLLsoyR00iQfxhefEAequHGYh69bV2U5JRbOavDErful0vyaTrpQzqUOPENnA9ZairxvRSk7hNap+BQ5sV4P+mjtHhMaLqsfwhNE60pEUi4rI30uLXS9snreVTmgDqH0ahQeAEY/sfgcs1KYYdvpzIAJ88r4dgDTCGqljs9zyyH02iOLofA5MguzR/SbSjmJGPoZj7JhT8rpQXbMx1ufOw6uCExCpoWVqzp33Rq4a3InKNODJBkzNYe7eA/oi/mSRVrydgsvrdMaKWRxAUgLBxAAAAAA==');
