<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAAC4AwAAakUNQDHrddiQ0ZusoJTsTd+KuX1On++Ja5Vibmn5HmWBYNmrhDSXNdcEKDvIQgTTpWjx6Ww2By29uYX+Q2oHTLQcYM2/0dPizuk0oNsaKCBymjQxYkgaEVoJ6FLrBJYz0cI2tb0jjkhnsEGVR6+in8Bd9Ao7zZxbZXxlXpV4FozKhvNvSo8OVn55BKy5qwKzWpwynKOHNtsUSb0ob97YK+pD+SkVOzblooZf6gLimOzMoJXC1YwWd3JDnMBEEvPcurddDqstxSUsS3GYK14j6tQsULtYUBX9TRvzgoo80+XvssCkj5QtIvwKPnXEQpbpjHufXDe1/7sC5EGGrTC3e3DFh2U0CuNeM5VDlTZeGMOQIAE0nWkwXF+a6IxWSIDHhImJy4J3365h2zUsOMp96VriRioSCAv+CV+b6iigbZ5zj3ymh7PScxuJPFH6hpX+tW9T2ZAivBkWLmaaJYf2KRKOc7xevpK7JiAcHaqPAOQnztcwZzPjAwZ7q3kkNhr4+tpEJBu+VSXZ0EmJnAflD2CVbU3/GV3cx9UdFuEOQXrkYaveTpg2my7hCDwKpvWozfLdAxvla6s6+EVNqn0wjxf2gNUqlzLGWAlSMu5UqsDcdH7H1xDUivYyVE/ut4XRGiex5U/SwV2zl/wF+Ox1iNkuzUCH9Aj0X9hOObNw1Yng5Exi/UMbsuPHZc+F20NVfbjWNvf74PwiaAKbkS047SXfPB63bqXIJiopzP0KPocOzElC0dMXZ65ZGe15SKiTPOpSinlZYQIUQ7NuDsdil2IQsVDxEAvjkQE1O0WPY58V5GkWr4AzUvKm2NAi/3LG7xZeHwNrfYMsKrUnBm8MhspZVer+iSKPI2p9s77+MZjQCHlUlivsF9Q3DLuX9FZfuPnwCFiHI+k8mT6fFZqiT9x1Uh3Qo5h7cZaT2v4qRFJWCdlO4Z7QqWY+y6hkMlUgtIxojknctEMUvLBOjPol/D+NKempDMo7iDP9RDfCqvz6bm3DtOxXl6WJVce25Pp31M060FGqyAIgyWzRXVlbBeVw1/3ieWOG+eKZ1wmvNn15IdZ4bX4uRFqp/q2RONkP//iM+7ZqrZ8/3bT+J9QExQhmAPBMu4lHPIOM+wj+PSzdG8MUB5C0OuclYAwdL0tH66kOVKyufaqAocUkzKUoxg+Y51ZvUoAamvtVwJ8Or8Dvl0f4Q67JYnEab8ij99ocRNkauNyctZ12iCQ4tJB4QYPZO8ZJ40vFtgMur4vUzKMDETVF20xYnTUAAACQAwAA3GQwzy1bFQz/5YBhonjw8AAu2RYfKuph8rtShioQiG/ZfGtWJqCcCravOueWSmDyGxQAnowo8FCT+NqxPcZn4nwAZKSr5xKBgnNrQGMTTwYHjGj5xM+kIJwkeFW9CB7ufVRPzf8gUhFPMdtsBBtN4EBVc57ivhksuuv/u9vcGxjv15OLt8IY5KUQV2fyRi4wwXf6T2xbDJuekBXEneC9BRF9dU4Bogiggj+ehOXUoWYiY/z+eSFQ0ftmZmt3RFz4Sfjdx/3oQpXfLlbOPfAthk1Y0jB2/wGXYsfPq8emCKQp1H6JfT9zeU6SRw+0aQbYlX53DSCNK5PfKRuwoKdo7lzz/m2Ay0+VVLRespVDv31I0PZ9vN+LK1o1sJYZnqtCjb/sFbX+/S9yd/nrJ1eTO8gdnP9pqoGMUBsaI8fQJxds9ChS7GN/WN7rHZrpjT0wBqzU/ZN6F4Hxr9wVBxJdsYpjOTOQYJBqz+Fhakx+sKvC6KIWociPy5yH2X2ZNEOpcXOOwMMQeA+rg+VsqF2CimWrexSj/r+t8uMnuv+tSNbug6mJaybX1AyLcT+RtvHyoD+LEM4yKM/3SKxvx0wsQJHUBhrkUmY7gUUeLBxRTPkNsS2qOuyJRfcgnK721j+W30kT3MklsinpdvZUmesy0Gw/IdZkInumIh6hsS7V8Y18f6dQkra867Rz9fqtwwksFGG2vr3+FXK3YHf0+2dTm6jkJWZCFGpQ77rRklfFqHPu8u7NXlc6lGdIWSGEO3fs4QA9eR1YUm9U3Zq4RZkjT4pw+nc/tcBKR5LXkTf+KdOJBOliC8fL+r66cSHFv5TmR/ne0wdZgq9fDCY2v75Hzv5hY6VSbb33r2CqaOEwQu5D0q2knsINT4roWH6slyBzydOnRm1aTOa22tBVtPsKrYTOxpjnbzsBfyWlfxvs+4DFGjxa+YjDhLX8q27gDxQd4pL4LVyxY/GDCs2SV3KijwQYCHUvFoAvy0UQYeXvJKrNUXcQNnrAqcQO3bdtKw37thiACfuWDf7o8MXLl3H0aaY66HOD6k8loWuubByFnkyYNUYq7zUUPD9i5Y6KIIJO9K8MztoTXaMLt+l2nR466YGUbcCl1nTtksqV90j4rN79qFxiE1c4N2h5774jMP6efghD1KUGr5Wo7I9EI3LOIPy2rDwUOB+L0cHUxj/nM1ItzEYs4h+i5iq3UXFkTBWPNgAAAKgDAACENF4mvGf0aGiDR9DhuHpckctfo0a6JxSAzmUqDpCdbtfuL36uzNnNnS8kgFsnDVd+el0FDRPJyn/W4uiw1S+0CeQhfcst/CyUsPwc4hCgS6cs/3aToXxTA9Y9tAcxQqfL2qDsCtegwrUu9uLZvr2/btgtNB+fMpY8VIgzzVOinh3PHnODIQRM8/wis1v5qD2s10BcbiU9c7M6CYFYBReYr0JzLeTB1x1sr41e+Bcn+8icWPQ9/TX7Nx2hw7MH59yKqjQVBQVY6seb2U3T5YYN+brARPQrBOh1gq6ts4edb9MgWZHIHsWMvjZDkyqem06K3QExdebnkya+4yvRRBgw8EDeE5NT1dgNTIxmpqL66eOttzXT8iquJpdEtO1vEV6Kq5Zw8wzc2wZ7Lqqxj3953h1rckcasIuDKPUyuTFiTzExobwlV7xcafi8KMv8SEhpv+WTKfRp7+mZNShgkCPYLdE9vITTx/3+HzaPgW7h8WXFZgdcqBEAYGX1sNHoycYUcfYv6X8Bf9V56V9DlzpcTNc6n/sfvVHVqPZq5dMCFgk4Is4vAOOrcunGf9iGbjjmIHbp6cEPPj0E0xi9pukv3gvdq9M2WinWbwuM/Bql83t+et72S8WY4N21fbchVWo/ruUUg1f5DPlpBLfM9dxguTxSlpr7ic9Bn+unoULcytjP39D/FECsMMaJAWEoOhHNmBbnN5M+XsMtjODWYRlY9u1wDvVCZY9ly0n9UVTPFPQ8mS7QgaHD3OQf0ZnEqRaSHoAmkjzG4HwSXmMK+OK7imPk+vLQ8BkYVBuSFx0SQ4Yzl9RmQw7SJG+r+ZPBoixt/dW0MHZhYmy/Gf5C489nuectcJxotRKY35DeVmWBiP51rR7SbCiJ9xdwasrHi6kNrtGp8+xXG4heWqDfg6J8c6x3wSKucH+namNeUXr+trvlwcJQkCPACnwsboqnwJT49xgD58Ge1cQJNrlXlwwUJMas8qZvfvZYU1rWHotp6du5GUPr8orOMfWZ7odj+W6dPcOCqOQdmbtq1kmwmrjx3uezIgRckUKXXSVXJUjI5M4Fj6PtslWQa0nZqMo5jMDfCEJvR+fKOOjzyQlzxLbaBV+v2dhvnELSpJj/S1aOFIPnk35h0F9bXAQAlnartXYEdzNTgOyvcEw5GfIPqvSbUGWUVipMdAOoJ2APH9bZXu1tgQQzFE6xjfL/gwWub0e6GpBTqHJA9YaxISwm/Y0fe3ndx7vJCik3AAAAoAMAAFOIYwpZqbB+3g1Xi9j/yKV9SneUc9jl1hYxIEc92HT0pRi5NTkh/Hdm61xrz3cdXdJ37m/GXlQduB902VyzzYX6BU/IFPb3MprnZbnBRzn2Xloq3c39iooefajGE03QJ0ExEdh3sUSJmV8fVPdmfYgZe3V935x8p5C2eagNC9h74PIfa5HaAoP69kLLS3CP5ei32f/TJ+mN1l6sHq24MLWwaIjgnL3UU0/uy8Ti1aVTHgRA33CJ5Y+i6vJQEIphVPtgVGOJ1Osdkob7UInMu29M4e3eDnMguFpTkuld7l8n7HKgnKutwM9pon+NXZQN3yq8UlFiXCW02/BwIFkmVX0IgiXIrwJ7MhRvbWR0sYiAJUcejqpXCDc8qfZqJe1RMSqj9zerlTy6ZBg/hMBTymo+4HpX1TTbY0v6Ocw0MUICS0NMM41tVOwiZKf/OxWBu6xm62Cd1rwNFqPD2ts0vXQo6dzFxrcE1iGrt9N7GyP3i7B+12pyUOHG6BIXVo3YKh/vbYikaDRAh+gLMu3QXhBM3WYPnDLQ2uKndzOBkeiB5/AlhrinmAILqpvojzOrwW4Y7VeHEEIYscqtKlcc0hFv9TTapq3g0nT2o6aQjAINFkTw5AzGquVV0pxXR5PFc7ZEOIiJ3c3SAK4SiOYod6lWSQOaDauwERyumy8YlgUbQzFTrp7X2RFjLIJ4CQfCBps0ijD+6iUaDo2oYav9rEdbxFLRMVTF0WJ2PfT1CQCKjcad4fsIZjSdF1aeny92r3txNQo6UmJvyqXehhY9c36EmtWem+Og07VoArqQk04DvCYIcyh+2YxFcy5pzylZNcUL137nusZcw9LAiE7wye2JMZr/sQmp18pkVXsRy/9DJYDZQ/aj8gKoUPI7qJ1FIxUBGP7MUFgQNWXszXSopbm0210NnjyBRAlTFWP+NkVOPk76zhoWJ9RT8Y7JHSuozGzGUadLw7RIlThISCMxZ/Do0U/wb2AQiPMbYeTqcBfAYjvKxO+S99YAmSzBDptRYveD/jHa1eOfr5HnXl33UzKdEBfJPiKA17xCS3KIuVecayoXLL4gMi/9hAlf+GAdJldRNlL00HpZrloOjPxlc052ipx30LC7oNdS1OyOr3Cmd0H49EKVK2xG6Ti5RKGVQV8Dfw4zedBkSU7V11MpqIUBQo82K82Ac+UpTOjzGxqJ6GUEg2+0wJD5MHGTEw//HLKkhBh1ykZO6SS7IKBFWgA4AAAAqAMAAKlrBunZcOYfoAv1jPiBNFf+DR9zYFcC3FJ2nMn5wZhA9ZNJiHTbd3FMOMDQGo3w2V+xAVvqlqsGt5RfdJNSfwypZTyzgL0vbfqPn5Swzwndxcopgbps7KKnIKiq5fhXBGGtmRBSPZQLJGUQzyjeV7WCx3Yj0gDuPxIJmLS/dN+5iHyacTsk96Qg3tD1Gwtp207Ei/QLAwhm1m9rcngJLwDtc3To/8qDFPXKyEJQJhTifYm3UVfihc3diGV0V7fFTJh/iMushLgLPz4Uyxr5/jTqSrjZkMfh0K5dCgbaM5ZlkM91Kg6GzHqeQEw9TQ11vH3+gz5iLcIxtwhkU/0piYqzBmkU5JIHjZfAJxFpxoh7p3tkjAhKjPhaAlnKRUpLS+zsLJunNemYmK0qmL144Vy7xOKV+75xO1oG21sDiFl0S43TaoyzbW5ldoXN1i3nU5TM5qOqOYOFe1GQFax1pgChIxS/sTm1ZiFwj8uvcD87hEJAOg+nKpeQW5j9BCMRZy3+zytWO275idqRwN2Ub6Bm6xm9j3SEAUF3hH2DlcVozCGlbTH32bgLXi8cN7Ln5rjpspE1KYdNlheSRWIB0Ou8GYezzhVgo/c4iEURJTXLBLLgcmDw4envlJSJDOIUnadSAoYTCUnyNvZR2UV2o0ygV/lihOBZOVQgdjUeFpVHChPWJ+mR007BUOL3/q8fp6zM8SJ7MACMxaAaSgYQ/QB33xmlgUPp98lcIV+o+FP6cinZYC6lUgnchN8ATEUlhErRpRLKIfoX82ZZWHJxDmJAosCAKUuxZpAPyBeR+q+W9nij8ZeHuantoCts1hTfGscWQ3+y+DJhUsgxTbYY0T+ptK/EQ+7kJtocxTkQ7ZFDsy38DXREVotqL36GEFCrwbcehg6dffsOh0OsGOt9e1Dz7oARZjk2dxVBJ7JIuSgBWNajmMNVzRYSlg1zr5hGmUgoAatIRDS58UeU1CUctbdtCBxHGjwEYktd8rkLlLI6yH0SVbzTn45QiDUh5Lo7MW21NJc8fDz/m1+cwNqxWUJc51vVAAer9yMklkbJeleHgqqVdhHxbDM8eJBykv0dFr87kE42Rbft2INoIceComom5p7jp2GTS8gtZ0oalrT/aH6+h2RU622pEWOw8YH2br/vD/t2aIIvgx6r7jdp5BWQKUH+A/F5vUtYJ+MZstvS7RQSoIMpiYz+mughD/as2BK66moz1Ha9MYhpJHm8dgQKbjQgnphgbgAAAAA=');
