<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAAD4EgAAje4RSKmBjDYsCEom4heCR2/RvwFqGzdVlMXy+ApucB61jQ7Mih1WKU29+TgWaMBnFwLFjze7qtCigppqXqTJe5f+n1y1EMCrSOimRhGWevy4/GRv+oqmEbFcvCN30+7auxMreDLTVR3zNZxtiJPZdRB+vH6w34hBbRwwdDt2yjCFDz0jCWpPoT560V+Gj9gPODCAurdJQ2c2ZfkJQHAfmglxnwXTYa+JGEv57ugxnRCSzkXtZLeibsAHDIYWNHlkuguxoI0fUBgvzMx3RlDJxDbWa+LmYWCMfvRsZORKEyCn67/badCv8jXoKxJoonoPSNofnggwoMzbRMAiLCVcTtgjKuVFQlftBZ+O5i4GjKhK36BuQ6kZu9YeHNRSurCP23R2p8SmRqr6rwSwKQIZTOHYzoln4TC8bAHcD3jRprt03qDUB1RseZT0TOczguRzBD36H+0q5LVJ+SijQt++wcWWQ3rWVtIujwoQINOjf1CTZOlHkDsLZSV12YtQa2mrJ0y9arl5T9qtBIATM/YDjEVXhmMx0NVk+bok1e6E52hJiVhp8sVU68EUEoKuLanaY1D+/tsXky1qhhjpJhgBA+q2HTq8+PuNw6s5X0Inn3bvkoy+gQAoSxKYng64fgpauRVKjKOJA3QlCqsALkDuAs3mS/mhBm0pBW5ydI0mxMrKKv10WqD1GBIS3TLMO/ek6TVHttRnKaeUAZPwzNb8Hdbi87lezBsH+NCb3sCVNtirqfs+URHcCwmNN0uO1Fq3COSpEtt6hj+W8bKsBkApv9zBh+KlPJKD+t0wFtYiellqnjyNwn5wCt//CESOtrlDQluNtAP93fyBHMKuyQIExZTqqZX253sOqjDW1f+rOk7pSl5raDOqabrsnOIVcMZJmZtxUaygKJNluYFQURB5c1jaAu2ee65mTbwOdEXTSMvYaONdtImV05EMrwizLE/BQHdPC0vF6Ge5ZZqgO8yDXS3R3sMk4ih6PI10phVzp4/s1Gst7rGTTljKaWBzQgO05rQdsFVr/jMgsnxdLrTKWzH9RUsBAmzjhc9oDMkLVLW6Oj2b0SAvGtObZldEYI+IEGE09NLoDFGw//t3As5A8XjF8sWq0sZkDXZV3qHGDe072/0b0Q6viS+4vkFjiZjoTfPaO7PGOpfReRGkEMOzId4PqADqa9yUMzzCCcA2NyBMachuWBDtpjaKgzz2c0Pg1486vtGfAlimAnN7Vm3WelgHLJCnySsYZfzNtn/Qan35uo9t/aMZE+6QHZKo0FTOQp1/0HKKgy2aZv+JuO6ZmPgsQa2S9FCZlGSPcr2GKu+Pij7yynwpps0rLquXe9KLAEQVE45STc+HGdjjPQNwUTi3UDk4yB0H6sqZc9lNlySHgI41t87HwseH5sN9DmeNJUnv7mSoOtqUYs4GpwuF8MGuma/xK+RwofaNDvTLMaKbtQABUZu9N+HOPAm1M2GHyxkKUDgf999PmRDZpQpMlVkND+zDntjoyR3al3PoFKkX/FGeZFqrxF4fBcMnYPfX2oSHdByp/2Ilx5M+5+gNRa0yLgBirsXt/V5bV7TVX387eo7jJzM2xbjAXmjj0r2OJ3fI/XUwg7vKylaogUSTGt2yTe7T8gLBYyHeC5PAYylplA8j34zs27oQcHYLbS4ltLp+dlfcbNvLyBGX+RUVx50xmqLi5Eyj/6dNUbWr9Rp+a/oy+zBVb4wUROAO/842QLJYRYzOEVEACDktuM8Wkf0QPaapmr4vPRGfBVJ3dTKvl8VakRq/RU2CfMmCXtgjjC10vkOBzzFWJzVcsGTQnZMnfN+I4kmnFeunjS/z7nB8ZCsI5QxQ73auNaSqMgKN38P/WJjYQActGBTb11zwzp1IEW/9Uz6fxlJKfwfSpLaZxfV98QOEE+body/n3MJd6MB/HgYF26Lu3HMSfsFhxz5O22F/5su09P4ys+AlDXrRFt390Bfn8DN39lMMBVsE83n1lvDuH1itOC/4VgKzGFcJFdn08WKsgZJUHkMV9iPZ8qG1NtYd1MGJQH/p9f+BPBB8WtlIzuGYqZZWmsA8wib4lTkGNTeoH+URFwXENWvAhiKGEckPUgCNItgAlEu73NWqExlvpHvKWNujI6H4O96cymEu/p7kcqXlU+qgKIXeJ2N0ruDibNaJxZjSKGRbHuBX7qQ3fbv4hXvZnMfy4EKh9dNLcxuYEBF5a+P2sBrzZXR8kA2BXrqS2R46JBVhDLF7bA2LrbQ0LNCQMYYQfgrUv05WY+n1Ic8tSzXbycs1insbuDYCzEMgvNG+T2lU9l/hqlxq07kyAJg9iFNUbT0OiwpwAthuwKGpeCLYoFCeI0zTnfPSZTQSduFc9J2Gh/GiumvCLS1i0JxFqs9pjtMPFepjzz+Rmo+kqJEEspDRWpV/eC5A6Y3TZ+lp3b7cj1QPRJchbAmuR6gq+BpySYcGf9/Lcc+MjgqZuZn0xRHxbbSEqM1knSNrmC3+o3UO6kMTvugVWh+5/eHjZuS3wzsfH+LfE5pANtci+twfRWeRI9VIWJnquElmaGBbzh0cMTmuBcI8e7XLNUEikMDtLMjj6V4N+3SunMIVsLmh5qh4OBIz+WwggcvKTUXW/+KRA4a2DgFiGj+VIzNMClL6U+Bv8beRI5DHL1NIaRNIArmEl85y7quJuXaM7pr8RXgatYvSJUtjsVzqqXQr0wQECgrLpzpqG3DY3g3K6v+1ki2tV6dpIyhJMbnCKiAh/HUvmUZoWGHZUJltVkak5+ARJIpsA1PwiEirIQTMJf8Lpfy9iLjogls+BwgNNAhEYgEwfZMRASDP/KR6iftzW9BHoc0Z/2zlxoY6yqct5WXaxWMWMqNNoy75GZelUsYkf9TldeIBamjvAV9/DoaExvdA60NY9sSVWzw3D1pTrEJ3uoU9lguiqOaTFzlmpXwSQx6D6EG/rSDwHEw3A0rcr/MPKZ0Qi648MXwK059h0YBel9KWwjz80bz1tEtTy06Euja2MksWuEDMdmnZCpNgfhqjDqR8dParAAIfi0ZGTJeLpF2bNJXlA2os+X4RNJpbFKlsjco5AaCn7bASq2mFtg/LMolhSCfnTZtHKOJ/tcfQ6ydBZzDkGwHAEW7lnFjbC7+wHZaNlDvcF8VRMf+flUqut5Ula/EaOI3pLoLGAopPueOgd7YEjBjfo02l+vUet5CxHOYsuI11VAcOkHy6alVGJsJfJ3G9oAt6UNqCx95dQGlpoz0UToRVvEiTZCjRQIQndXDH2lkyM/ecZFb+aNLm35ELkhJ0dB2Sh/KUNXOJKKVtCtnZ+w9ClPP+T7QfRTu1EsK/ZxPaB+PJFGSeicJGUNcWcDQaJIBCofjHWn5vB3bkoryVH25ZlLuiItsWn87YtHjGDXrPQylIU+P2FMpxn5uLSrhunzBVgSlD/khAv6U441ClxzEHHaeFegySqm/ZE3l8520/l3AnqFjdeJJ3OVBne+QXbJzStJ16EAAIP3U0Ecge7uaA77wdmnFdrunwS0jmmBvkxijOeRgxRgW65ERgNyWzhu+E3a7uUG42zesLDMJ4HxX0oqb+94bE1p1zTLvUxkkq5fEzluzCKo3w6GBJQeX9r162gCtF6Gt3Dm0Arf6lxogRQBEK5QidhIKKziZ1w1dE0fnW/Iv/c6spZZzWptehuoJMPbJCBRvgn+13LxK+0vj/0crVVz3ZHJXWUTa6JG5m0ZcFvfpa4npBpQN5HaNABgrKrzsN7OUbHLT6h6VKfAem0iQehV5zc/HBoJvE/eYM/6uyGZ6WgRWXRU/xsDD8b3DN553e0dh6x7oYHwynH4+nzo4+SP3eWmwZbbehGO1bHtzMRTArwc5uv3le8SUz0Swbzzs+DrzbYeLoQha9oedgmiP8YplZDXv9I8KO5RSIyA1WhFHiy+QfeOwbC1JT6QRIxzDrk7ZOgWYMO+1VB6cxp8Ce5yka5gZ4lo/5K++IanKxVMwhCEpbKWJ0LlJ5LLtDAEieSTUZAWsHHUzccPhZePSUHUKHs9X9DKuuBQbtsPa2Nkz4XyCb9fetssoO/fYI0JQZtD5M0oylq2676+LtT2I9cHdmsJGY97mvv315QQAcqOuy2CSflcdjuxlhSDm9+B3rvrygGCcgATFLMA9TajUrIo1WpCLUwUE0K+uX8TIGOcUwQqMCxGUvRUZVIZv8UbUMq7subX7QHmmdLQQvEwIANT4sWj6uhJQK7vXIk5zKMLkmdQj6csSSxLimHvakTxvlNuM6dAI6E+BieqO5zi2k0bsgfD1M5dXafHMgAJURMSW8GEW7PWpy9nrZoMYgBA4aIMySdLITdqSnuNkVfLoDnwficNN/11QnvJJWpE+XzHFIwR9JV7tRu6EdpqfVb45CM5gonuN9I7I7q7zB3zDvqoUNhCChTBzwDA9IkdaB/Dyrz51yT6kRjh9Y4hqA/tThL1XRhHRrf+XtE/CVd+Bp94W2vf30+9syhVU2i3S2WkxyfZJlnoXX6wlrKcyJs+xbS3oX/gqjG3XWm60uDUpEDgFKAS7dTn0jm1xXE+rx6anV+xbOJdbHJiUx6oE2yssxgksalcsccfD3ckcFFo+omq6c8NX3X+72c0nIXIGFu/haQw0o9tCpvQqWP1EvdjXwPS4pb/0novpvg/SIYOQzI9jbCVdFUDkaKF77/N/d3GumL8QhUok8C+X5B6kBUw1aq7PdCfO5ri5U1GrvwJsQm9lyUnCajrF7jw2UwZGaGTEbKopMANrRNpCUodRelwFLmHRn9k+pLcg7vt8xiLWeGbma2/lpsI6X3y2ehasmbEYIpmqvKJNtEf4zcRIpqmLykhUp6Sq002D3lRLEJgamgeIArQDAKZt18goGbbgq6FovSbDr3yN1RoQR8rg6m2gpAnI8yFWu6krae34dtrwq5VfPGYulkpRIMUyOPTXKaNX6iY47DVC151w8b+Jij5Fz7+t0/dprrptewlV/AABn9IBnQYMd2L804Up4ZCmxORHCga3CKMXRCtdBP7Zj2MgYK7B/Bw4S4SeSiK4ikc9f+B9zUqUXUW43fRO3dUetfayCHRIDBt5xfWj6XCYQI6Y6tQAM2AHKMSSI19kKl6+wyyPC/tGijIbpOwZyUGX/LqW89p9sJOSYb9sKuivr0dHU8SJ/a6x+SvKExD49NZh3kPG5ISFWyMHuPfGEKBGxmr57axAg7oTlLvFq0jAnhlPSBHnnxrM1nu4XlAgB1Mi9TITAoLbdYyneMWkXVKUhIkvP6wOxTDbM2vK71mbsxyipkYbvHt5yqH81jcJUtPxjDVMGUBksp4iwL1Cmiqkb2uTDb1zKbbmWKSfvaLMAxmj1fzr0AHtp0jI3prKqD/XlFgY3aNUeqQewSXGDlVLL3pYzU8jeb0Suo8um6BKwL7hap7rU9+9qLOceRa+G2FYleeLuLST884GszQxXSMtQCsIjf+x6ivgtTiEK/ErCckwQhS2ZJ7xpW7bLbn7LZiMHvrfE/mF0IM1AziUHDT35Feep5UeuzObhoE02u/AxgTmzK469A2intpW6ixk1jgV11C+p82FvyPRtEz4zICyWTw5PZ8IHmlk0taDl1YABZ1E00Xz2t6ya892SMhpSnqs5xWDBvGyevWN8Y6lfBAfje0jaBtGWrML8H8+R5Dy8HV/cymdQ93eKFZqfKSP8ouX14Jav0n2vnoUeGEhkerl7ltS6rvrrVGq4nnk+Jje4mI+yLl1gh7mAiWz/ojgJJmw8N4ZBPSw5Qje+iUgWyfRLTeVet5o/cda2WYnGESri2K4HOWC+14lSHxOQjI/+WHyK2+7a7jojJ6jIkTDXDZ/ioDHLEr//s5ZrT/oiioYOlp9uix1Hq9l36r+QfWmsIu+N8zFHubWMF9llLOeJJnJ0iHmWGg1Sx0Pl22PSaBAFNTO27wzAedWsSWBnHi+I3gI+B+ewm5tG/radsegpbskpV4cCdnEaIb98Z9C8fGGo6jrpFbL0hBhm6npS7W+vYhsMwU3fH2q65Fps+wSYSesrhuYITVlLYvmglM0pq4bF793znh3C3htRwixLLtClw2qdKuoOYgAHI+DjzP32akxBoLZX7NLMUxFDPvvmg0TUr1Im1sVtJdcd3QKPqgx66CjWYaNh8zYmnqXWZ4nzi4ZZXD+tb7R/bkCHjKpHGQWV2mIjLN57oyXDbKwNozq+2o7NyVmjVRWHjg2sHViTGPbXCeoTpgqrnKgwA9GQr1Zz6z49hoTZkDmgv/4K1JFnNRXqbyVSluGyOgFOeZoc9UjVDFZsqOVFqsOroTj92KFn5Ci3BUkr88PicEILRc8X0KrrUH5TmnwtG7TnTo2fHM8/1B/D16BDM8tH7OEFr46pgfuqS8ggWcjoouVzKFUxLgaMH51EWe+cJNckxku1MhTCh9RQhx40barp72xcmgfcvUtTNSdGlHiB5rn8BMK7DGmSxNYe29FBiCVQvQuUH3s1AAAAgBAAAPJhI3tVHD8yoU1ylZjaI3KPXSAjGbtqr2EuToDGx2n87kZcqkkbrwE3cqtLZutuMqYERsGz1n6cTouVRcc315GtGiquU2mpbl4RENG/9AuscvofiztDgqRN9pQ2SAqEjkll1uQsikqhA8gBnaONzqTfmUqk1+ui5uE3xrtIkE2wMrKp2XlDYbIw/U2CgHwRxclr0aTNY1wenPT5hGKElzsRJnG4FfKOmYtMSCalh4U6mZ+Ashe15TmV3f6V2N73Ju6Jm6Yl54TaeknvBIiH/UKqPxHrTHkxM4ZnFAeDSOxlzMCLtyqMu5dRAhTHK/RkkRchL1AQiL4FhKv2MpvDfsNkgp4AZRW7p1YSux9zmb9mSg9gCZlotQurkLkCvBNX8NjhaXiMF88464JFfq9vE12d048wraKuDo3+CJruPP3UzrenVABHUmxZReuaxnFDT2KDu1NmthytR/sNBCGO+qUU7JUblnVhT/zDyELXiPYp8yIH8EgHlyApIPxFO19rHI3LNxFh6wPBCgOdqblRNAbxKKuuoAaouD9JDhsQmKoOzUuglb63heZqs70KhM4E57Sr4LaIbSu9k2f/5XVRdrq2dJEreoqsU+GgUdCNoaa06L85gl8qQdnq5WjJG/Xq6BDqBhS6m3I6cz0af3nCuBRvZwj0FSJKyabqJ5thCesl8wPXVnUGp6B7jUIPQV0HiZC49+HW3qJCdPguPWjzGlLEkla5ieY2N3uzAsEeN+WCV6FRY6DUjax2tBP4zFTWKfNdQIcMtZ1UHJgTox0e6hZouBYWxTYrqq7k3idKl0+A3xjsiLSj+VcBtNPFntPi9E5VqC0TxHFl6OleSTpmmeF4lMcSH0N1R0MUYUCI3zkQq0ADyj8PCh/XQGsVNEauvt/Y12Xaai8yii4jw7mbFRN6Vx4YZ2TyYocr8pGFP2VZHhc33CV3+uR1V2uu4hIYFMv2UrY930BFoDhvxoKGQK2iFSCuztXukgGQSG2c42AfYRqAR4fP28dp63D1LkjDQG72vs/sEKLqkE6bQhi63Is83s/Kmk111PwTF6so8Az9jg/XMj7YKfah7Jw71gUWxnJNNOZuBw5c0IdQ/Fpm3ROesXo9+2axWWRa8Eqx9hcGjhyXoY7PnR7XMr1xkR5KJizjqA5RI9pMuiHlIglex4TZraOk6i7Z0anHkSCb0G76LcazOy1TkSCr0wsDP9UVRihCk6atifKoJ4S/RIfP8m4T+gGzJqP+K7aaNJvy52SjdDE4P5eAG7xUCFDu6QufNcj+UdYoTGqJVHMOPHT0BfrF5E2P1YMD2eJF5HhNwlvfia/KTGoqrzbcGYuhHQb5D2Pd0u6KAMZrDhD2YADHUFQ9kOJhb03RERqWGgopOSBoTHK5PCYkwk8cweanliRyo9MKv35rolow3QJvTyjMgAtHuwgjmejU7VGAlVcLB2yYTETFCjJIyvb0oIUX+QZBJnIUpHagQWIK0uL6wnEpQh6kWXV13fjXm3u0khx9F3FixIZ8K7X4pr4tzMkJdOtDdQoTf9LC4aAXhpa99McoJUyuct9A+bz1MzREJmZMC9JsbGeUiOH2LG+fi+6HGuIA3N+di25xCOdxslD8xXC7ViwZQFYflrKQ6Hbl6G++KXLOgOzHWLLxKBVT9g0JaJJ3HXHuX2DDYPRjqmaFpxmbXMcCBQ8A964AcHS23SJK98ylNMzxiy8y8n3AAwy+p463agAgeGhRMsDqlABBKWXT+1AfEIAMszh43m0SeeLYRx1M9b/DBxPkDI/PxVK1toIW/Uk+1g1dQ8aFZmQLeKMKvLCGxql7BBvwH4Y9M2bSVsy6CxhRCDdIOET6UVdh6U8HSrzwOwf3z6mqb31bzB7Y/78m0ujGebR4ts6Wez3B/CLVXJDnnLgrt+vaL4y1b/0Bw5PV9F432bHL5OZe0x22GOiMZcGUAVN6RwchbFVFUo95uz7B4vG13z/8jVHU/guLQL/6N4c3c5zE4DNw+s4zka08PDUr/VQ42Vy2jd15HBU1TlBQnBJDgmyJIdX9Zm9SBOSMj1qvVFC0l6djlEF1Qe9CDgMI0kcaSsCngNY5EB4Mw+8N6mmkRXRaYQStOPuVNL5m4ETdSW2SddHibOVllx3TcjB6BuU55zWphdC3dsWx9iLtxU+aYaLMQyrFtc381ZdKHcgo7l0boZj5kOWRsM/iGVqlKe/XL+EWTotpc8Hce+LbRW5pkJg+gQfp9BUw10mVD+oMWz1o35P5sTGkth1qmGqRDk8mIkUI2M0LS0cHz/akyg2y0G80GjvvUeqB2rpjDrCKdDh+Uq9jZstmLarnlPLOCD7e9hVnQOkNkptNxgocB9X1etGfKabB0sjoDMuw119mLNzSzNlXsKVAsaBM+6z3AbD3L2oXBExG37qh9Wv2xvSJRfrXYnJUGaAoB5pu7pERKuwvPNm8lauLLjde50RTyczXm2VbIteF6wUoP3dUc2WoprXcxKArGPOLw7TopHnsXudrL5JF0YxV9f5/u681sXvrRdusvLcqXNDq/fRq+BaMQQn/b/LcUTToDcWbHzyNn8NBBbEHHCnXMXbiCsZYvkNoRSziM6cP7284OrJJsdbW5PTPzMVh/rpLPKdh0Xa1QgJKUr6R8ROEz4CciOvxQwKzl2nxPvHhZGK8t6HNM1CF0XxNmOinaCpm+/9Ekg9lPr7qG25mNX5mY9zfNgOLlCmzoVDbBnKaza5CZV2dXaZgAgzt04h7omgqMt3zxMkcPECbZ/Ecl0OCNaXK3tVuRqdOuv5QNhkQyUqN8tE8ZBaxeQGrmiHucEmrCcTkcnnZTVayaj4IGX6Yboj+NV0h+mnVgDg3bfgLoZJDkTBclVW1uW8TKxad1aUSK+gF7vU9gbG4TGHJLpiebRGsPxdLG6S9rZAb2Mlq7SxyPy5qcz8UWbdrCRUiuHwhynDtzLUgfqbx6M3VeZ5DYfDT7++pcrlwHtSfMz8VxSng8XQx/4wS7A2+2ZFk5+ABUtonu45q8NbrbVKOgbT2gkmulaCj+gMf34l+A59P7uYweawl+FTh4M60AW6hCy7hhECJ5qkHEbRtdBSAJyWrwZkZcbXRCqlGf3K1x6FlCplBAxGbw74TqcjwPcikmxmuksEdCdADexQPuYzILiK5QkQF0YyIbZkI6muvoC7x57j/nZwIIYW2DHv0BOv8F0QJeYg3+F9DbEV2cKsOwIul4LSiJOGGDKUVCB4rOwwEy25SfiK9bny8uIz3IN1wMQ+BuOZP8G+j6urRVjnC7ydAT70GCth6hZigYxXLuT56aPn3tUz1ogodWXMv/3cWoRETceHjzp/sDy34XXHFxtF66+9ja8pgm+R9OQkjZG/28dro8m7AFzd72iwiC1Y9BZWwOd/hWEQ/7eg1Jwu/6+UCVGJ8M/izSjjwfnBm6SS/ZgTlkXn8jl6IUd6Ay0NSGu63oSzCEz2f+dj2yBt36YzrkjlrLcR9AcQAX2nuQE7fI5Ef80DuGSFi4J+M7Z99By+57Bt4UgoIXIhGcLfqnSJQB5PtF0KzJJ6Y5WwlxcoEJbrHOHliKG2ypcxQNvEyO9UxMzCR51oqmwtWumnqcOARbxLHPXa0HAyPPGmhSDrPGnyOy20Qjf+BGZK1tSYsFnw4zFOTObS97nHvwJPERXOeaPMFdGwceEdOi89ghp7gznTA82QV79IgJe+6zwYB+fsGJ/GusI3jAe9rx/dq7E6E2y4CD6+UUpUWUj0tLvw7gsTJoaVyobfyIWs1RIafdLxO4Y0kUypL+lGg4JgZvytQunNtPLpZaC63JqwfIC2ed0xHJh4+xtysN7rmG3RrDRYDrithK6E30L2W6jWpu6NDQT2G92t0K6srQilDNk+HgyjymT8SFpplsH4HPMVyw7NinsZacjgytSy25pKVP/RyMTVVcnhvrQ5nk3+sEzTf+V0mnaSJdHkmcG2bqRUMa85RDiJTW1nB/q9qML3rRWz1tfzP4LckLhCTqcNUM6Bh9rhHdm2y01rgcea4lf0VnryMPxfb8SfSQ1k/Br0juWmk9c3yxBv2Jq0eM8iqWofOWukfxT4Jh09kS8YisIeqN8F4GU6kWIZv/OKOs81Z08XtXuHwtd2oqinurt1kKcTgjstN/YGXEYx49q2VmGIQghwbhPu98TjJVaX3I/iB1Bft/ORtm6onw6Zjnfu4R+oldjZ8u7rQNmxul7uyYrm9lnXCOsv48c3JRqlcY1Ne1SP2AJGNZGBy9JHd3xx2qiShm5zP9Ge9IB1eSt7dxNA7yi7rt15/beegTLPGQZnGfNwXEXg5D5oYAXVVAk+nkO6w+T96rdyVqATMllWAoyNNfHbVNXO79r3VF0qEdAHTOCX+aN1GF2hz3my3VJ+d33uJPeViBZ8H2NCBItc5+AQCOxql0Th7Svq8XUwmKk+lZrDz2SAKmb5pjMUqfxYsmfS9Pyky1/3SjYc+8QvX0+sE9B2f3DhkLZN+S+rHs6HqmbLdBYGPwH30+xbGd98bfVBlmfDHkdkBjTgSj5l3fgrD001ALZbiMaugUC7WOBdULBwbfA5CMD10EUHlZ6b5P1hVd1F5O0Wpy12p4kv95O/sYCUMLAWNLb0pNRu1qoZZmKb0LxPyRNZp4s5U93AAe6SyW0kVrPYS/N7WMM1Eo2hIaiIm3x4oWfgKmP3rjlwsCMasyXnps1lZ5YO5XGwjywZ6Gox7X2bhhY1w0QCGpFWvn7Rry2Qbwc6huZ+Kg5UsIfFYL5mkqeJ4KYOZslRYGTr7KqT5KclgZxRUaTRHifPplIqr069hSrKVRr08df06/z9Ehuv3Px8d0osNzU53Ebh+tCWjuR8vcWIlNU4vwEIzgyZOPXJsWlnjSYKHUWfkmhWTUG2nTjqUDiLsSs3gE8MIGIcUebkg/UTDnkcPZL98ipe4pGybs0ydJR31INuGGD7H6dDux2rQ5hmtTto60JVL9si7jM4X6lNH8K9cf6wjFq4kI2MVcZOCvP8Jkg1P2R3tm78VhkNglUN91+kk9DoNWq/uIuZzAzZWh0l2Ie3CQzf6RhpyaSntKm4bsXteK8n8E7tisuCjnutmSS0lfI8BEPn6dlN1SgVPmQanFqkc0ufYS63o4woUvGR74jVwsHCmrwoGbKm52vheqs5NonkUqYPc1K3t9M8qXBfhlsOLrtGd9yGTXhRsTBtWh5DEkacIPajdiWq9dlXJfxu1/PD1sseSOud95dPpeqEXXatcSSsaFhVba0VfQatK5Z+c9npa9V5BCLD0GWyUT4eJCFojeOPq+uLNRyBpxZzyMPa5c7+rYbfB6ra0yR//8f/QPtGc6jTbR2sW6tl/xljZiCrheTp4igcwydFkebRO9KlOhYp0TxE5IXA2BFhbU0ytgBtMhQtdNDySJaldoPIKZwLz2HXmlGDFE9FpwD1LeRss2UIY5HmC0ViV0EQZ6bimBpvFyQn/pdMOLjvDIwi+CDt0YNl3TdC9ibsTUBqyEZCTVRB96+zcrTjLxf/o729xm+Y/+W8UIcYd5c1K8NN+1WQONUG+/HIMeOE7gscdqWvx6IWNE8vdIzuhWKVBOIifxpaifwAZ6Xh50HKcYcyYv42iDeikvgaJhU6iTlWgHkvW/TrY+TYAAADoEAAA7V8p99PXSalgeczCQGmTOPprUHoD6v2qItX2L65+M0R3HgMcVSWWXOUObKBOrBdZAMHKo+JToYJfvUv172yyZINtTMuVtnWXv3xOomZTD2UIAlHvC3oz/LXgXOecKMvPUXFD6tXBWSSLfKIRHz5hxMu/sLgB8dEZG0GGS0vp/fX6s8hIGT6rU3ky/66e+3giXHCWPmHOSG/SYlcIcoVwGG/18vWcdKswqHazm2SH9GpkLsf7VcAy+WChrBOenQAwIb9vJ1Pd1HOaMSvUZJuJTO3K27wB1l8WPSdx8uxsUmeUXK/4AG7m/zIeUkY8V5VyHpIaZAFhkvc0n5w1HyLk+7XKVjwARzmba4gIYeLXaT+XmU4QBBv9NcQV9p8Ekn/34BsEHAkag7x1eO2EAbwVeAosAHSUGq+np1+OwDqwnSVXi11L4lcX7pH0xdoc4M6bRKSYg3rfeK7Dv8RGC6ps7+ihX8LjZwCRBEkFBTJLq7Ugr5x1IWUYOi7upvp6w2xgM8djaDHwjHwUhceTUnqUZZB+jsQH8LOziKeFLCKcXIzChGYfKuJvB1r+lG/n/Xo105EZzVA/pewTgH6xq1uwTKqkFpOit4rznWkK5j5YRPPCv0bF7Cd61Ag89AUhDTk9qADGUM97sx5CJ+RruNJ58wWaj0sv7EwXVpcuOI/s0wsiPj0lWkMKr2XdpeKZm82DBtjDwAKhAkZPau6IMgHWd47xtXOlV+cBZsAm4kIM+QpsRN9TKC9blqhm9LQWfSC8oxB2iWBXnNl0jKPmLnHn4mMeoya2ikK7fEh9wvjkGS24Oji37hWLJUXdXnM5slbKj9RqrVQ7+dKdHWJzO3OVq2xp4nDwWEcWj4+KXPVXMy1KY5lONSWZAbZQRxYc3ws2T+Q2Y4Z3iutwc1AlQwqVYvVyMQ3I1EuIj8IvVqxuaOhEORRBtDv2tafxq7R9JRoST2vxl+UJxhaviExHapwZFECpAQ0s4a9neuH4QJshB9fxJDdS37z7togDNo6beVHaZsuj+mWnwel0whnmiGFC9gCyr1DEUZFrRifTKOqDWWHgH2yHNzsUFg54xFwrGZU6k96czkCb0NFsmfkZbEKoYvRzik6FWhMIWfummdfuAsZTyFhZXk73+cvi+mfdQILboBjGCJQOnApaaPwXzkFbQtsSdsawNXsmdBWNX7FI7KrBgSZCxN01+tfeGGYLD6pFk+ymWX5bDK38KfD8NJ58D9uDu4icOymvDKvXZBfv3kI9xvGdwgkwXy+QDzSMNYwHdFYjN7Z2CxiUvNaFW0ecz89gFEEGbPWMbVc1+GZEU8oO7fq97QgCv3f3/JqzudG/wUr9IaJ8ZoRkTTVd0Kme+ylX4fJ20RMHRAQ1t+JGgyjiqKo9SwMuKdOzhDpW0DMMV8NRXvBJ6ePfZcPiklKv2/XGYfaMStLCI0MBIMQZiGAU+BMFkNsgH6s6pRDvdFBlWzh3BRXzqk5O5e59KjShbj2a4cYojgKfHkkk4/+rjRKE4Ad16/svHvokeU08dgVr0xSMdtIts9P2jIDhDVWnl//KZmbMVGCHXHCQHHfUQMkxbDLKTmeLaYu6wf4tYYhyRP+3/kBb5j4ZyIr70D3Ot+d8k4nRnegcF+JsaOtjXTXmmRpKHE36v/v8BjJ+fKQ8q1GDriKh7u8QGWPJdVux/EiGy5G+UXrXn0MaIqhveOwckngLlfqXvs2VuCRmwtbsmN3eQA56jOuPly2KW/V+HzEogyPpwwIpMGll20b+M9cWqHb7wJJjvrJpTvvhngMAZy5ZH7OnAesl3s3tFBR3IvUhKbMneGE4Ib+ZGsTQy7A7VX/j+wjsJcoVCAVDb9olQgToNEVw1zD5gYRMu+I5wpi5t4NGgAEaR56hn4HRnVD4fNblxYFljeyjxazXXQAP17V6mbFP1mlEX1zWY13ycNuSygGPRlPfsOXYc5nmeC+pKkKCM+dMpSlEt1YE1J4Qe+LM6neC6tFYC/CGtWynRTGi33v/N2fy2AWxFFjJxkiFLLUanAieLW16TSdO+eqq1oJv9lcihk8wNa/y4s6Qgc8cxNUnJ/aAZQa7MOjxKpIVNsXNAv+h0KsmLkvby/EiOHiK5KkGNpfBFqPHXGgq+OHAOtd7jz64ZatFnj+i5LG0ornv1Dg5Z+iTp8NIKCJeqoSExgT9LYox/LLCWX2NuQvXApEn9PRt6INxmQgmnKy5P1wmGBHh6FKGwOLDfZS7cSvrywHckKGyZjN/x63Uped4cwGIFncfAdA9BKV3QO9sz1ZEBKZ0ZkheKw9W/RvZGZu0d+ojn2zuLWQMCzsa055kmgJWTDj2H48Mrm++4VutTpOBKvj2R0S9L4BgurSWZwrboUg7FwvnCcp7d2/A6nsP1UDHmfZBczy7lH+ZREidG2386wpL/cyx74O7S+LOAjobrq8vvos9jPcC58I099R8Wg0lhtxVE9r5gSNuPdYQkfeFu1SzfP15Pt5v762B0VQ//ABM0V3235K6rBhO5ONO9xBE3H7nC/kecx/5ZL28gSAniwBj0rz5COHwzD+kmQE8KOHD6P5R4QQ2d/NG1J+t9BAmQQ0Ie/OUkbcehCHyFq0taErjKYSnd3IrAdI7pVKEmS9TvNxKkbJkyXNYr+1rVTyzcci7zbUr6Oam7axfzg2lFpnv5E0/OhmJ8whNk0Z7I+DlDMggB5j0q2DV4uKC/tJxOAwMBtGq6asM+NcqPaWgnjsyshy56QBS1wzHRJ5ecEwlI2G0Mg94bEOGJaDbq0PATkgvpc4aHzdVx0AY7i4RHHrnkz81s3n2j4G6QbmPOmRH0A5mCuKDaMgSBq+iyPRSnBlcE4BkdrlmEpck/9P3+sZQvjDr80MunHK1O3jJ5u0UFfjLCExV7W/opi6XOpExmIEZy5KhJTnB8CH+bEbSLoOY11lgzGUGt4eslMNpBbAYVtGj/aWTxxSnPV9AtutVDK0hzNSV66m7nncWQ3+kXPUjyFtQcFPpOvF6OBUqblMi60Ys62IkZEjP4uUY2sMDqXb6Y0lgqQWyyp2PXyiDNV8vwSPkBoWDSWOXU3k9VNrMf3NzGK3IF+5w79TL/jR6oPQ20hzbRjHCqJtgwQkRhhaCAH0Vglh9gGpse1H+KMBmOts1/KuXgmFbiXJg//huDRE7lclsS/tRCQhFLPuNy0cHmO8nby6qt2LtoyD0EsOFJrp68ozYMb/AT4ecjaO3zf7WAwUV4QohOdlgkbkKAVsDJUkfOQva653WGZpQj3cJAbax34vqdUTF7iD5Ym6kv/TBbOdIg8HZj0l7RHjSAbhreUI5BqYcRWdxk+yoTuD51ipcO2U6XeirvfMH6RHYE04tyXGyfrO5LkQGWktyjqlPwo+Op+Mvfe1BJ8LtTif2UYiqYdkggDCtylbTuFUa1UvoQsXWnwPmQU7LDUjWyVcnulK9N7bJenxGKXjzgw5rfOev6Roa6s5bXRq56c4UUiqA/wx04Zo+ZvuVxLwylCv2h+OkJGmjiPzhFxzdm/TYGtLhkQArXrStycl8KasSMslSKtpsYzoQTcn9mCVPdjZKt15Vhaye7wIWWJ70dPJz0q2BBVtqvcZHcyKJECbzH+9PiMm7Df2AtfqIAmDR3/+W5s94Sc43J/tgKvFgS0uc3CqgCAQ6f3lXiF1dfJqKVVTbgSnYtFuSQGuIPfFW0wXzajN5oKXhV+9Q4/m0PUtQXaahOhekFr0Yyb9/5j61QwajgvBIE1G7C/EMd6cxxR6yq9jvZOnbjcSGwxjqq8RkoLWVmOgZVb7I6jABkTqGHU9EnTCjJdz+qK41GS2g/8XZrihtCxRQgCCk8c5EPw3X6713W0lyBLOJfktEiJvBwg7VkvNV9p2ADAkmnRcsfAwpqW3HyeK6pSMG0i8HdjqambuLrAJdlv2AC4Vi4YSqRu4i4sSnytuy/ulZaYwc+DjZtjDcQDLF20hDfLglyjfxaCAE4I1GeTIR/5DjswA62EWbZJC5rU6eqJyW4lBl5b2dZu2LB6WYi2eKPvN0t1IG87RkiuMCk3s1skDCpdT5LL4535W6b2k4+SCbnXpJ2T5xTY46XzIlvU/S2mDDDiaVE0/dF6PwVkz5g91IWZvWbCXKjBs0v4wVCE/Gt/bUSo3elvOwi6ZUf6SL5Il2qa40cvZ7vbkuxVEkLpLUluDl30kraHLrPpxyUYT0lKLtHclwxVAeT7C3Nn93VszYvc4KmLEjHd88i9nabNb4yckYt9iZQxuOcHcOH1I3OTR7uJvcErrYtrn7vT9yAIINBzVKu8yc6AFom2pGcVgzI3v80/pVOZA6L2JjPKYXEc6Uaq/4eW0YibAMVejpym9eKtTNNMFohTmtT1y5oKjYzDERUxGnZC5B1Hi1nUzTBOU1FhMIG4mWZhWe3Dmq9o37KrQyTPqutKas9lqv59Ioo5IMcI7I0YrvvaZMF/2/eKgZxG/4CRPpkyI3ThTF1Khv01CdElVx8ewqs0oxyHaqJ0RUKfCbbLpmzyuFV0oEtiI3Z8lAuqrRsUsk2i8aIeGuOZNA2ARYbT3VfC6ytl9NV0CSDU+QsYGcSCMYD5ApINw8qk2Acaxi83jFs3aNfPh/yMVOH/2ELg7S3rgfXPKHJd6haHuVHaacHD6yG17BkBiXthObL3g8V360R9Lx5MinFF6G/Uu6PbisPoVsyCimVtivwaYpG84mEFtHwVt8AwbkwKVPSrgIZmn6C7Pvo+J9I30EKlD8N9y5MbehCcbqRZVXT/t2w6A5hVjC1u9EdK/qFTFK63Rl1imcaYf8MMDbSmGwGJs9JUopOMD9UcOixucJjD4Bx2Junh1QXraXcAVhxPyASJSO5PkWj+6xtdOS24+KhVVvs1v1AmVRYUfHmBTvDFPyIUpKYwdXLSzxlT/GmHiDEeB4dUnQyvGQRVTaumnqbGox1RfQ1VNcS9BFv792Bl9hoIyW7l8dbQwxEnVDCxi3KZh933YAST36cqobUv/JIJ29rNTarbbvtVWwoI4Z7v3+rCHTCxPKt4oJAf0cX+vYkwWOIJp4cNZSyvbqf88sJnDGDxZ8dsLLPjuoF8LLsAxaGTgqu13Za3aDJesEpp2N9Tt75APcR8Al8jXDdfDM/ACRdIlYXsUZolmkFHiKwcfLvzC1OxZASvkvEBbh5obzNGkKgBwn9rKeIe2GOMKljOmejAtKYlWRm2cRfsX+kN4FhMFnI7vcpRKop3PLYUaPuvuMTPjydDdQgd8gis5ZbGdwU9sWJTwzM+35p3N80UoaRM578WgZkVd21RxIfHiR1k9BwFPT6WPBR9yYd8oskfleRjSc+ai3tPQCxUT6aGeeV8v+oEi+YNhGoGKbdz/Yh7yMHK2iHFFvmoKL4f5NrwzCDUqI3QJuD0IrnhfUmuL9q/SLr6EA/1GcXMNPcJJkNP1sWNRNLC7rsLmA/RSZXWx5/M+be8Zy81PiepvapPvLioryKcEACANNTCvfcafeiDRRtmmETyjAlngZpy/p90ip5DX1A2jT19UXkXIuhTBHciWIluASRbO7ULhKC6cCHChrYGXuXIgDB00EYk7+xUnuxw7e0fvCDtfj9YMGPDBik0HcyOQbOd5XyX6SXvj9H9Nkm043SGF47wCuKEz8+F1UllJbnenW5HKZ7yMRqEGgVg7dnzV3/ZqkG1aWim5DTU0ZfR7LKO7WpL2bs/lyafWE6tYfMG6s0L35gXdouPjMe8AA0UuGpIrtOlTlZ/JFnMKptdvy/CoVlMi37KqWTsg3AAAA4BAAANAqam9R7+SUDoI1ROStgUaBuHMklXvsrCmLjBX/TBC6oYg1l3aFSBU9KH7LApceqmrm2CUbR66oqN+7qf6mm21NWACglJO8hm7acZeEgOcxCw6DGKagySX56bq6Qiwkf5nVRHXr4Hcu263ZXVMqVQSIRCJ5al9JQfj/pY+X0guUh197IyPX9XCAm1e4FnIWiUbjG5rDdwJCNGOYDsl2MA6PrpSlsGDmGro//PCovoeA6+25MH9VbdnWyOeKHR1Ma+pME1KZmbKZJMjIAIUup26jb+hNVhxDDTDnCCdNLlYeDtbAHrXkVCOKgnyNtZ3DP0BgzhtSuyKxVNyEPDRs9tNb8YqUHiesg/9+1AFrTgGsVCRDme5PDKDWwNBgE95MbyaQBg5Urb9NYiaadATZCZCk0kDndjOhfnDNWADcbD0Ps07IHbvWLQfFVa2PQMEJIFJPF1PcWpz9zm5f4IdUaS3sDQ25AprWH7tX9mUN8s50bnSwuFK1M9GfzXXLiFQO2IYgTqmiHJGZYP3efsUzD29FhvRwosjVtllyzmcmAaHRiYF0wkvltZ/A59RnRAJFgCymszFRGSVcBkmWJZEuIvhkLi3ye5iG31iOwveXfa5+WM+ntH/XEybEOMDmvl5esVvNgYSCqsm9ahcUNzMwQnKx7BRfN5Knd95DZ9dhQ2S/do2ItHO1vpZ34bwEKqC+sJ5HJAZghrctQ6HX/sooBtgT6LG9wQuc7ycExg+OuJBybBj7FOy5/fZzhcPIW+EMQihRie1zacW/p445vcrFFoiV6KobtvV1oDui4CFRyma58bATUZZG1IE+BPDy/bl38DhujsGLf3r+Cph6KRiqUlPA2gqh2peYIeJ6vOPcdj84rpp3iOguuwZknfwG0lhpMtMpT4YwZbZ0PnyeH8Y5R+65SVmasTI1DpB/37/Z/whRACMXuBrplftKjNDnNVvG7WZnTnbgYlzqGeQFB1TQC09dyAzSiaLuPg0Erz/lC4Lgr6z97ORkpUQNf+vt8dvd8O7Bc/8pUXwCFp9MVq9UAR6brC2bZj4r9rBDM9dhDcHmjHz54BYd/ww4FAtMWoTY+NYomHy5+Y1DF5JQIpkUaeucDdlWMp/zXSb4LRnKTm5uwdpz8dP1O0qTv4UuA9B9vKXHu/dJalC08qzGkhaL2iRlQ/AbpK4F8rW/xRzJhMI1HRlo5+svi3BJUpGy27OiwSSDA6bf0ZgHGLIIwygIP3C13/qKCDyurPNKTe0KDm26rNp+vkhwDUJI5xh21FmkzMBUdv35vp+i7Qes/9lK+7rjFVT/Y1QV0VIw+Wifm7/yIA6p++2/JNH7weZ9zZ59loJrLXhtWMgRv7Sxg47uo7tRFp1NYAWplsz/cDPUCGIqeOInM4UpRjq/wEEkKW9mZ2LhFZc7w4jdFxvP2jPRoMFnjIql+W9MH7/tUkLJWkuegqadMj/eoXlCM4HPh+fxZoe9zcayyzffGje8ffMm+Q/lg0wW+u2rdkmX+SrARTD6z2zFjgepQ/1aSqTNsUrD6rsQBmNucJ76HzqFDpjPpSHm3vKt2sZZOXVSwtcQYyULVwYhbSjpZ8nI1rDeuNnyZlw9i4jKr56u4CUON4YYQbwMse9TySYJYR3V811YebCZNsht7AZtjtGB0ygTyi7a7iaW+zf5YZIxfa9gvB0bbVWq5Qtcmm1lqhkSFUV6S8uckgX8TE+Nvq6tLl9ZUcWwG6wDqer45wuYQPoDWBXr4e76H/QwJ1YsLphFZaCDJCnXUiZ9umk/mRaLlHXJlhS+tYhMM5py3W+cd2hUwOGvN/q2b0efiPalg25Htu2gVG7jZLYvRlyikRX6S8deqsmVsGkt6JerAzIwRLKYTDL+EGTngVz3I0fi127yDYWNsnm/m1vyqg4M15QQGs1DJWC3NHL/7Ob50Gay976bSdkO8vnbZSJYLw0HjVy/Elzx1eOASuXnJazMK7fBCqmy/gqEkeAixr2MnRlbzMcLOQAjHiS4FY05XzXaOkbn2RK/6NRzVzIDJQ48OYwU18G9hLMGmqk5Ji0jLcz6iez3NLukR9vCfprEzo4HUic3e3plf5dOAkp66pYfbIlfQpCkhO9A0KR5t2BMQWkRN26CMwDACxWSE9dacaSB4LtOV2kGzQABemqTvZ9LTDJk/6RQlC0qXSS/esnNKITBhwTueONn3f/q6AKwTicU01zisKrVgAjVWV6MWNof8xXs1doaz+dgZyjlgYiRNdMzrkp7inDgPSm4YnChP470RtFTCiBpXXMHl/PsHeWuwDxWHJ28wd9G45YaseOTe2Nj1c4WBgm6ctntXWSsPbceCZbCxPEKtica6JLiBe/XmRkHdo7RjvUMUqxnEI2Tu8BY7f3BDxeOgv4yohYKr/pJuGjPihyXNeBf0CUwEkYAZESf5c9RJ6aokoBYcI1cuUnNrbYDItzimHqSnxBikFjLFCQdn9ZRzuJZYAKwTfsNTu5QFUaN243+lVNbHvvShdn4dJLE20x/pKo6y5TjRYi1msxxSHr3B1vMqQl/ADIVppulg1mfSIavPn31ca3hD2fFVMuk7mXJECDQDf2/qu4/pHTp88elLU0WDp1t6plN0z4J5bkVbrwjphKu94jh/3RgVc0XrTwFHKkr966pu2j9XCDL1x2nAjR530kK2IpZcHb44V5OlvpD0M9T6yoS3yIlPVBXRJgbvKMvh8h0KfaJFmwPlbRrnj/1dpM8Hens8KulydsFq0yn86uP8lnk0tPtKC4ZE3ZPzsweNMS7Ph4wHPXXxywO8IV13lyDpb6MvowKLQQ35OPlhU4DLVhcPNv4Q/zlg5wgAMieBgN7ICkZO9ovwjQSYM3V4l+1V4VUdi0FfvJTL8k5nDJGZHEi+6S0w0mrZcL6dLhTDuB7wzx3yMHnl54mM5KLDNMSLXejsvhZrPeigclgIjFerrTuNnosVNRA+JIg3mDZCrh9rP1L62x0oAVKYhGFDTbpFdAwR+IDsrsbDOqZQ1RuL+zv06Y00iUGb+eodBN2YTZW+M2qh5knsFSFfgWha2zVDIY89ka6VXUNp6AHDSKFg11yGXKC7y1hADWNjvWaVZ/GkiY9EPRgVzMLCwSlGj03sGKi9TqlRvZIGdTIcH69tzE68x9k5y8W7AmIiVpidSdzkk44cn53aX02t98xxn43uAX7vbszFsFR7JSYXVmC0qmWVQpwn4W0FlW3+Wr3v32uDRsEurwDMZEfCjS9t6hCQvRh/nhI6m6uWxGe3RuWhhPfrH/WYVTu8h2aNx98nzeOFiqHLVF3CS42Wpq0rEZ+ZR1sg96IrWlDAjfj3fypgI09xc3TPCinkI71zewkbYJMI7fij4gSAxkb1FTXSsC2e9muMhXwkZyyJ03UAmAG2JxEukkaRu+FKA3l2LOt1ESQRotjOBGkii2v5eidn0d/8urf/iYhU3M+eYDhlo28EJcfvTYTCr5GUvlVj6ErnrJJvgxXUMbRetxgqZ2AAP5PougfmAZ8yML/bccMG0mPz1NNBxthJd9QVgjsogWsZ1oiHLpKD7OCAWrWENmB11lCfCRbfY04qnDbM3nQlg6Xe+x9XoL1Ksu6g1XZZK3L2AlaX+6L816Fmv9T00ZCKfdNDYuK+p4t15KKXy4jRZsh+J9Q7CJ+dEOB1qppGCFjDRH/ZCaotzEAp1N8y5KqCF0oJ3jp8hNanqaV6+k7AzRjo35L5zcTHs6Al7CyWbdXPcI4J2Sbv/Gc4b3wQlV7ZK/mx4tTdSCTYS+0yYFGUuvaE1RYwIPd+2EUpreTtI1RMQIBlZdFdcHefTdmEdl8jk8teEH8imobgN1GVy52/Qu6DVS+GBhTmt7b3032aRyPepiKldk9Nx+GmTgxpFq3ZSEZ2MVvMa+AwuOqBvDm0lPKtIGjeo0w6G++ZvQEa8zr+neiYR7TnJFRteMHnoIYa2S87889cnH2MqbrP8hrgEyPkkfGmvjLIVq4bmUr9ZSyLoC4syNdFR0Sl786iW9LnQzFiAn8kaw5urBlJuKrdPb4bVbXKSi5/ACKqT0mI+CIJgjn1CL+hWv3zLgMQaNhOSPpnlvpxhjCp1dOBTFGWvx9jgicbMHclQIAtqDgIcZClElVhYqQqcux0vuB2rtuXnvHK5jih8yp8x1cSwSlaIIfk2IkKkYkGNhSI/EaWOTrzph1zzI+ewyiww2x5+NIo3eSO5fSqEuugHrJbCvWxIusApsANRwVFnX/qjxDie+UpHiMZLBff1jBEsjp0mPfKZtUhTlovtiAH89Mye0RdiY2S8n85OQEqFOP0fr7jXjIFqEMAPnSKDjzjPSo5ZWXz0rwYAjvzeNFACRMW6tlJ6kHa5DWptPBta7IbL7wC4IY8AkhGNA6lR3MvANON7/+38OGfbKiVCgPWbHed0ZctfrihnEmuFqI51b4DzV5BloNHPGY3c4ix2TyYhdOUdsZhAu0Y/pwKRuh6bhrtLDdTupP5E+ArI5kAj6LsGXEHrU6FaU4Uvqx1awSdeYEogXps5h1PPWKBqRJ2cTcS5/xZGBzAAL9mF6h+lPEcfieafvZeUhAvFfnSvG9UIWZz/cP0S6N4sdU7cJFmpt572VbyA2fB6PCasZ3saZNyMlew9qaZi84WFvFWlKFtFeMCgwiVa9G6bJnVvEZJpNx41+dBoeBpuPe4yAKLym9SzHn8uu5TvbHd3wb1/75Pp3DYKeqfpkaZCVLNEjbl/KGkQc8wnVlLI/+wAcllYkiHz5VsnxzP2nbhTmAmN7aLk3+k4oCtyoVtE1v2w7bnroPVCba/obXkZ1r7nx53AyeX8nZWwGWLdUkU/Cs42rkcddU/7wFmY7C/L+CU05KBp0pfrz7hJVmj7DHY0SUldo64aZz3hVbLwYHgxmVgC0/EbyxoKcHVasQv0xyDyJ7hktN/12xugCNvodcSqRtKtriXtmCwkD1uvoUBjkntXUc2QSo7yWxcrD98lUFbY9qjlNtbbfO7XvQW10qJa6oE90ozPc56O4KyLMIU32xiBPO4CHjKc8Ty0vzNWKvrGyP/cTDuFOOa0ETl23d2iLQ4SRd9WYIpOA6h5jxBGV6DT8HO25XrnMW8kwbnxX6DsDt82NaMefLB4Ob9P3cjMjF8o814Sa9AuGnW9HisgalgsnPYWOTfbGErDgmZ5pim3smiyj0WYQBBSh9i4ziREwiLaANswW6SedQNikDCzJK6SzzvlTwxLIVZrNXjEmoIX6OVYe3qRrEKAwWq/Qg4S2NBOFOlRKiKfCJbBsPsph0u+iKEIdC9VZEcCCqPJJHrGUIoIq/OLhP9FSfE+kkdl9/6kjjKW/rUtYBgLbEIftVeI7SjmSlNWUNsfXI1BqGNTKoIUeyrcKYKaKUsIzO1YpymukwfZ+7hu1fSpY7n/F3sgEEFgifmB11jb3Px8CiajzlftAXt/aZXWPpXA16lZ+k9ByIiCmq9V5loI9gdnhyvNAEHoRy+CMcNliktJ9YDIEis5mS4kw9IHnC0AAqI7JI498JsOIAATJi7AgP4MFAV2s/AbrpqKMnnYqM+J1d45yshHhGCkWIqC1smEmVTRv+DWOO7+Ptrbz2VdEVMRY4ft/UAURCylDgbYZHzejcr/zfvVVi0LPRwRs/uWn/64fjXYMIgoPha+09pCFHfORwKxciTiE1Ip106WMzr6CpjbMK/wd2NUymkmD4LBZ8BI4RUjGhxvV7uaBDDvsSZ01s7ePtANrEHln/WiVzGhYuj1wnPN+0LeJbkDgAAADoEAAA2VLogzpFPEiBv7VFmxqtLzAMSGK2SrN1+k/eSnvoC7nanREFjmGOb1QJd8e9bYbrpR/6nAdNITg0yb5Y5d4optv7J1onlHusXvZwvcf2NRMXaLvYfIK6w68nzJE0sno6mDLqrb6DkED3D2CI4r5WoWyRfdJHM4aQbR8qDIKeKE2cUS+LFoZ8wq8JJUlBZSDTSB9zcsH/RFFNMMKJuUyPnb1DWjedL9CPW5rvvmcRE5guH+N6Y5+2BhM4n/qe+g8WHkmw4bWmcjowweW7W12dbFIAzBNjq1oGRCUHXLfDGJbTVljDFPBcFQ2XJnYBPlEmP94nMc2xzrbyYXu2tFZ9lJAaABjt+W70ZyTrKq6FtuxQ4gjc68tPgZ/TAtKMwQx+6mHlbpoz559qHi34LQv4OmFQ39xl6FR4Kicqt9KJMaIuptnkcDY+V7KM1YPUYRkdKon+qAY/qla3pPHW15BMGx6QpsAi7M8eb8y3BeyVPtTtZLvne7xfahdXfFajq7m2ZFUrsaaSsMSGcxtTFbN35gYQvNDkevA5OZwFsZ6uERece6WP7rUpJtudTrmD2TDfixJn2ceHTccHgmvtu78pkXPzVoyshRikwKEw1ilWOaaOY6/6oFY1YAZlwMEsuGbtNire/srP3Y8gOn8Lud7H6QPmt9peZHtk48c91A9Zv+CpPk3DnW9esecvw3T9GEcGRMdpqlY+xN2hwNAvpAOZ7iIccry95LKbokP2nGmeFgSKxjUAzq2YxDgp9g2M3d7dUoWa32J4EFLQDu1GdUpAXMwGB0YPF6Ci/f0UQEVP6UTqOGuiBfMsma7sxtNqbPB1l33OThfgU1AxQEGsJVg1MQAuj8UnSr3lbDZBsgXY71Qv4hjA6mXCeH3xltfsij/Y8Vo8C6hlf+J/Mw2ixf0HJPGgzOoQhKyt9gVRU04wKOGNpgV2sONmaYV0hWonvCzD9Jmh/SO8kGFYWtQ4l6FItFMqw3mRcStLklpJGd2Nyzjga5i0me999jevkeZYLRIuFzU2/IrsyQIkdcq4aRSbbLXJlB2Siy1fjC5xPIWEVE98bwyyLpC5vpN+7g3qD/EOpKmuTe0YHFTMPr9Q10g+RCY48mQXtZuI82VkHXBJhpjvenIlwBSgEM9EP7TS4JPlcKHxpOcr3IOSIQSmygWWrA39rFsjyi8Z8bPm9rLjjAmShOQBGASMl0azPnfvfy1yOWv3ZwL8cinF0JFdPXvzpXuuA82BW71S6ZrfB4XIsXXXFrMGHfyKX0lufIjCXPsy2jtYs99LME5CutRQ6zD7DKgLVb94ECScmQ7GM1Qnfkl2X7bWIngn3yB88x38hhjSEPFSB9Q2zecMayWlgXJ/7UOC+UOuMh0zcpdK3r1CVoTudaxGUHPWyVf1JHt/Dtivn2/jvW1PWlyM7XLPXlUSiuBNJroAVaG0OdJ7MxsnqmmR6i1nI3cerHXBuCewwcWWNM28dOtr+GWkJf8Q5eHlBruA90zApJNYbSaJzK5CwbtVTYkIa4nP46/prm+4XUz1AhPN/TdUZdDrELomj+z5+1JibOlj2Np5Z6/UcpvFE4Qm8MpDmk60n/2BFn7H//qjM5Du279X10UA2g4GXvBZ2mOe0xU6jH/w/omRdtnEB76wxbF1k9E0MZNuKXQUf8JnYvCV5bvgb4Murhncp1Qoo624BF3Te+yYB76tRdV3weMrF9kKbTLOPcshgdYswCQZJuG4HWdZOVQVFpe6PLyq5SALdcWd5s8LzejPodY5sWTNCjomTj16LFsUrxDcZPN9CID1F8Hu0lhKIMLxhJMb01/km9fakaHFjt7Lf2F2hOTDZLQ8EBX52Xo8WJZ0n2/YzJMOQdmSgjv8wjbUbrrjqHkHRYPlz6iwxi8JilO7nN5b+kJYvPqrPENl/AweDvlpR8lEvv9PjL/XO50nolyfWuV5JLgP+ia142BZ/ybkK0/dev1p18P82HhWSdmW7oqjuSFuEcsObuOMUTV0x3HIpjhclf/G+MLlxgpPjLsrKniMKB2CmF/bb1pW3tXL9/Aavyvk3PyXkMLZ2sxc3zpia3Gt9AEiXxibcw35dkKzmZvF9Maq45coJyJ8ucIIasorTetG9bHejdD8QTfFULGXTjKPt7hBo3OdWn9EckIJjmG5kZ9BI0srAmsyNActjVsCxODVW2haEZSWDtM6rWvT2YgFn4wGXFHJ3gLsBv4HEfwRD64OFGUsYKajvZQgJS/9r83yc6WkQZera7GkWOJLfIRhsuqWNn4eBbnY1apwdieHSCX+GJucz0Hy/NJC4QrLtVIdK1O2t3tSn6uqiLqWKhH5MlFivl8mD4oHrjynKc3rs5PtQJzlR07aWx+zs2tOVBI13d+0wOOQcSb4cVOfGKJqgSFj8O1fkixsHztRVXOQjHRaZZztJZu4om8bz6Rn/lDERt+5aHyy66bcmJbinxhpAMHeQ+SyJQ0JN+URIMCJbfaeuZe/gbdmQ5ZoZrSkMVpTEPR8mcP2aY8GBzEqM9Pp06Z63DLMPcZiROu0ci+FDQLQxwMz8jWcguZ4tXI0+f3ZHsSa3MaW1rc2DEy8QeI1tuUZyKXy8cD2obkQao8GXIRDAVN+N4xF18AAq47BOa8GRK+ssASa5B0Z+vWM9fP25itJBqRSDN5bZS+g6PXcX4/vlO7oC6oPy7156rjo4hnSRAh/NUoZh1ggllLKJgVEgD4YWxsIGR97IR4qNwvNh+VSvCMsWKqCU+zO+7Ul3tbeH/hjoXF8eXghimASmAgrdusZvRp2T2eAOP4sVZDqBM6nzPstPVG+90viS+mlhGMF2Mu9c9oVtiUOM8zOq9Y0LX5HAFc0Mn5AIeIy2j11+33UmhiSajIW1G4me6qs7JquklIg58aGW21UyeJGPNsyRWNsfdMd422a1wDvw0V7BIDd47Pan3ean8v7ZGHRqcf49jzxeGK1tyPLr1NNKEm5ita41Ge9FQAReQo0sgsbvMYWzxk8zsWdxSNHEki4fIUppD7pG3G4xCgi5zok1Kr+aaLmPA7DzyLuRD5btO5H+Rbh5JVKFOw/KVTaBNGTts5enuIL+j26bhjwH4M9MVudR0o0JjV+UQTt1fbrQjdsnfCFyyjP0aKqNhgnnD2f8DblDs2pWDCl8m1UcoszzuLTVm/3vwTkZjZlUd/KudICMWCjSl6r3AOooUikxtQuAz2ht0uDoVgSBWOlz4x8aOstQf/t3hS3uQr7lwKQTdJBxdjmxuFdHueIXwq2/U+T7Dv3xMhH/F2wwAdF4nXRDTug3HwAKhn6T2NT88KlHUoiPMvncZYRIv7HeQ5WQBFZCh/nsfcvJZn1SIu4yOftG8FPNW0r4NG9PMe12e+i1IvA25jXpdNPjGVkfT1kaXdNuN/6mqV8GJ1EJIhxjZ8JKbMpKvZ63P8xqvqbRklTGpa35cxqzp0EEHiLT8e0l/Y8ft/yeAdscsPPFUojVuWWftjrKWZZ2msaDY2JP7pDH0sgHN+bg0fi/HuyesuyDaCvC8ouOoWn3rKjtkfh2tDXFSfYaLQnfq6BRz2CboSim5muoq6w5A4pifQNG3dW5QWRuJUGFb1uhJFaCwbFpredU5kbk2eGDdyzI6vBGI41U7qJuc4ylUllipuxVsrYOp7PImQOx80jDWZq47BB6BVvJpqF70wrhCcY61fzb3TChvXYcArjLgaqMtG0mLrcDeqxKPoCIIGXIh9Hx71RD05wTGQ5wttgAKDI10hqk305vX3kO+Fh/P3VkncbB2PZzJq6Ex13esp1bHg4XP9oMAWjVcLD7twa7JhdDBg0TjEIc5E+TxRV1lha8E8eiQARoQOuDWvFgUKx5nvjkXNEdzrxswJ8fhck0kVuKxqIi0jlWB12X752DeuysS2rWrATNIlwOKmB9ZM1ZD+4it4UfuaVC5/f8QZJXCFKW/Rdj6puMsOJCWRvf5ge8iCexDA9Oel3wZ7L1aUuY92e6ZoCwTg37xmBOhr7POHAIHJaExpADBKGoT3/H5rGF4r1NzT4u6MmopJy45fRQfTOm5jqJskbiN5SVJeuuhJ40ngwe2/h58D7uew3l8XlZTYEfVHMNW5eHa3B5zRTSriFGdw6Zvo9YdYS448WfmUSt0Y99Y2eLbhdislzr8P0z1oT75Rcdi4/H0JvRmpRKDxg2veQdnmN5FHRxJ8aIi0UX0KJoQaWltGDb45jv897KtdXaRIsfZRrO/ikF+5Y7fm8GMgG9mnBUgrwn0Lsjfw01+zpEGwFABYpPFGYbecwWBTtSnYhStJJcpcOVx9rc7/LQNOO+KiZXTIqar5MjDIx/Le/0+KMxRRBGK/zApjt1bmTsSC3/VdxOdPYzgM2+9sU/SbvvepDb3WG714IfgKOg9BO6Pd6cUy387Axz3TSYYUiHPTtMxku3ZuTfWGjmggXt4928DlnNynA2nqswhmiS7M30G+C4+HR3LtbD33aYRIYBy9vCnK+SUGMiG2dwpQQo8DRinSKp1YVOvmGS/JVnmYCUhgN/5RtcDN4EGIoD/dLP/r7nEmjAUmleHh7xI5PfUDF6FgDj+v4xv02cZAg45VoEloWAJ3QUsewxjdho+pSZFPiCY5AR7eL7OwUlNwK8Y8LyYvpA4ciAAvauvuRDqR7ReW5zT/SFR8Q+w8h1YW/Pkxir4aaqMJGVIuBE2KZbxwh7EMJXYtW/dHh9/eed0DJJxZmHZD+Bcrlov3W9x/8sC2ofQjhRwkhcTjxWFIWZHOfDj08lGAEUH/4kjaOUCE9yj81KUK/2w6cL2smWJPX88tLNMiGtNCPUefWsksd4fek8dnkqUsSQEHsxfd6uomU1QVzma1SlRwdg1zz5DmYIEvo8VhgK5Gi4ah2Prc6Qwso8aaMEPaPEZFOu+v5wA8DeTMmM3ZUYHtGttBRKieGjGPObXJk9DWEn+LwqnVvuDLU4E1ajj4e2depXi8JzeP0v3O+hhpn1Upn22Su1McPkEdUX79qyf3A1rrXgiyUxV+zd4Ut5yEg6OkjTKV6iep/BP1aSnKfbGTY70adcI2vVGg9Ay0jWdueT1nNtk8MpA1GQeb6jcYlw1Az5U+4H49BDOpquerBOUpXfXAIQFWbvC3g2oj68nOpTfT6+lZnSTEEvPqEkuMKl3eCcBQJQo2v0fyiW2eM8mOFSaIXifsD5QOWJ/s8VyAv8mltlwOS/bYZQ2Q5pQDVBfjEhbxfms6SQDs24gs0mMDZbco+mAqF5HDBzA+KsSTzKkW9ZfjfZwCskAQt0LK8EY+YztmArhZhGDW6AUVgVnHwCpl/m/lVahoH/Zlzzb+mWh/yCQyypjORgzsDtSk3yBFxD4jRvgX0g7SQHvQaHbjvi0JR1kb8m5INlD8d51AaAAdZiEQXR6qCWTzzLfCGyVlztAZQBx0GA93OBESCZP90lE/ildgfBkCZLUVZ4BewHmjEWxmwTCZSdlNPZmDf3YTDgZaTl7d6KXg1g36+e0PCmui1q+/HjcxLEbzmmC9VFV5v0vMdwpg+pGnxWOU5jzlqgcVrXfewKPlKjhp5sj7o/dwty0ItDNMvbK91z2Ef5aOdLhpW+DgMFMNyRN6iRP4yaFqlVSCryy9oqwvFX/ESF50SFIvpQK9MDkqHdhrgwnaPT0ypAJr63TgklJ/D8OsgPKOOhc6QICHCbleju0694BeB7wOQQZc/aQ81Aw4OSJUJ4xvFnY2RciklcAOXoRGrTDZHwnSQq2bXZ7Dxnns6ZETZEfOiy1oFjbfpWGz/gXJ/f+8AAAAA');
