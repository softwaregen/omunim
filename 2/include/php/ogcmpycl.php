<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAADABAAA5rNOefWNp7iuMK1oadRZs866+NQaqq/Fhd0/u3G2wIVD1vojAdoyZlry5PUTdcDNCExq/5YuxvfomFCTFoJn3VapER0sM8MFK7sI+L/oQmgyCHet19DBswFHPzq6Nd/uSB5X14LLtY8GstZDnKlDi0puEkJeZfcXe+71OIqAwp/OmY+BicfbdEKEwl566yII1apAjqEpl577HAUcyOuhbyyleEKPnImBNnXmQdb2P5jNYO9C93LO1aKRKw9aJQUM9fvKFJlj4doi+RSPrCJel5ymRms5/EYScnWNMc1PQRRgk44RZFFa/gc6mH+tDJUKOagtu5zyOfZfiiKVBiHRCa4/5KCXidfgwlgDE4GKJs/bofAuEl1b21o6hVd7zN3WLH3hxN1P6BSeJ8iDAhqYdo2fWpw9PtpAmUs7+fhAAzYlfpLq0nuCDXTzv0/28n901Fp0RwbKqYYDRABBVAw44v3/VYnAzIhHvgBra5ta9k1PbcN0pldZsvGBcrg12jqS/WjffarSn+9n2T6FDYCeUgRMpOcJJ/eYv00r7Ho5XeF6hP3i7cf21nb+b+1HR7z4cvML058lHJ3GnLsTqBTl9JIvvKllDDbEHxKdIEj3tjosOflvyqdhGscXOvKFvGtd0hOvaO1WShOzOn9yWZfu3CGnXQZclLGnOcQLBtTISZVsJRYh3VgtAUx9rp29l+1cBtrAMajepoT0co1sKM8ngH4t3uMHdmftiuVcabWaVhWIzF118Oad1LLL2h6tHWhhz5nqx8unKPR6R8UsBo8XUck1a6mAsaI4166jGc5rz9RBHSBt1f+kNgmsSoGAB6/dmxQl4PQn9UWtweISZ6KcqzSloppx9WiqU3ejcnMTZ8mOB/NCt8dwlPi60tJEvSQvlXTtUhm+baU+yR1JkEEVlra5qFnYbQeRJHTxhg6PX9OwrXQsBPQF2JoEVWUUSfX43A4H92kAK3qGvRIo2NURl4rEC5jsct/a8hyhhP5RcCtZpav6ldnfEZ8OSMxYBlHElSfXW5Lys9lzRJ7mDkWJT2vqcpEK7YwbzklEYll+XvjCi/NDJo8z/+1fnpmBILaqdP4DOmZyE+DHgjv0R8XL6pUWEKfgUDYb04lvEQLPyDIRpwTmc36ID5MD4ZiJb0jaASrjToL+lxOBoFKUvAIgd8Pus/3aM3qFDzgKjUFQ21gXDKQ0NBXvut4NYVEo4Bvrq36MhANqEGOOkpYzLogr7D/9HWVSPYq9nSrPytNWWATc0/tqXncEbB5YT/FIGjztboFi3FXw1dohz8lTRxArtG1WtF8Cti0owVvwsNDSn1fwDDxWZzHH6OWKV4VsGr6Nt1/VQNJ4GLdMVHwivz7IcS5Pkpf7MV8ivx0UCKZNLlTaD8J1xNkCBwARxKojXrOrWt9h9o9lQ2Q6jPV7g5bW9H3PlTGVH5V3kLdfUsImutBQhv4lGTG6vTElgyoTzzUpFwKUGLCupWo6HAacZAusWnHnXPW2ETytb7MnT7mVzP3crGFxufYn4EGmw9fNmU7Trvi+VchO3u3V5SHgMKyvbH9UvOvMlhnuB4DxyS+oFET34aVPGV6RuQFe3mhx8D0fvUTcZzybGv5CV/pzsjRnHTUAAACwBAAATD6briVt+OoysArU8Ro0R3NNcdKQiJCUXcB9ropVslVbKgzDFXkLh1iykzOfAGy5odIkouoR28E/dmjLQ+8Nz0nMaOHEF+rqvjY33sIaih+zOvKaNpOIiF4sAdmpViRmTK+lXFZPI/vQjXLk04DRJP8XU28OkCAdml9ZGnf4uupWz5ML2mTzLwERp3uEznr+0iTCgC8bkPfZL186+ytqoq0IuZAbO9b7Nh5YNyh85ARHnxsWo6zmAU6ZtOlg+MV+3dZjeBtiRyxujRq2hTzVnkfCTasgdsFYDU/OJZ/wJyAT/PC5UVHAKvSfIC5JoiCsAVkvN+4ULJ/yqBDP5we6PXS+tDfFNMDj5maz7FqTIUPY3JBjij+iKdwNu1jEm/wLL/t9lYXpqsQBACvZnBZX1/0I2+f4BiLyMvg181fCLYEzz7UlbKHXRTUL3ZLMoNs3cm5RnMxwwYMRR93iSC4NJIWn9lONDezgCuUwAlZMrS0v5p83u5mjpkCtUmUI+AYSEgrKAbKFudMllaExsIZjz01uj1mQrbE34nYSfy+2O69YpRvDSZBZrT44WKrREs8PIUt4oBduRrSPm7KdyyJG7C7VSu3UCcbRTo6HjibVrnt9wEnU5HZ6YcGDRQ6SlWEoHVqKeJwpYgRFgwwva8bL4fcQTh+U+KzvuVHssETfpWUpYin1LKKmK1YITpX1gSA+LC6tjh/hY3IjjZfg8+kZBto49uWeuNYKSmln+ziB0dLA84Aiv3MINmoP1Dh1J5xXhc5mLk6rk6eHsevEqeAQB3CtpLVcprm04Q8Q908RTsozOgg0WfVM1FOtCww2//TQAdimshmrbpHEEw/27lTonvbQ2FuGbAc/m9Cr43ST8MDGX+diYUmAFW2kaorsBV8z6xz5UgVqUD04SkHzJigHUeqzvPdivQzoXG4gKMkDkShjS/PO2Gdw/Od5T0M5G0UODrf6uuDx+a5a9wFueNVuuGqNE0Wq1UWfCB+Yaf0kJh5Wk2jqrpxz1u3Qp9m/1I27itWAgVJdrvStwNfOhRiQGb1pFCR6jBCoqzNTwEkTP/WlCXI71KSC/Kuq78f2YgQWcHnh4DipgN4KHKCupw1UbJ0IUbkrl4wkClsviK79xLUKXFjc2oRI5X5SfPUp2jF+EnLfYVRTA9moEYcIG1ycm/LVC+91QVdFyi4z6rWpC4pwvKzMjKDVBDZNUkemKS8/Swzqg2+CLdP4CBmUgCOcQytcuoQlgA3n3zs2WOWcvSEzlTlZCuO94GlZ2Tdg02M94PdZgDT1ueGf6X1Pg2c6pNSzVncnhxqIf6jRzt8uNYo3m576hc7vdd5ScHnN1pnCgSA0mbKU8NmBkS0OyAO4512NPR8z87IiUYaPfdYhSuBiEk9WJrNKSedkJ9VHr73FMGW4Y6T/LR56ClILQ1PFksJbFCiJrMzKbpthrsckDvayDmXL4cldta0M1qIjrA1a89Id/wWLLnQNer2vYZESxMwfc3UDvnEwApeCnIuK4qEAqYC2gom5oSt4fSanxWtA+BMrDHJ3N/W9TKFnOSq+P+s2pKYqTnjIAoYyAm8j69AXVSj0pyVdk+qXyI3W6b6LNgAAANgEAADUgwzz8F1Ds+MXM8aW/ztszIy6zpZ+JbpsaSuf+Tw5f6NX9qJY0XShHkdOrYxMByprJJNeW3VWNCpst2gg7dXxFam5IkYYg2f8teyhWIjj6Qg2fSUb/wXzAaG63JmrKt2mBVKHnnLjN6T7zsCum3f4g+cyWFM32+/SLlqFec4LgXIOKxs2bmm589NrivVOvEgbt0b83zR/ZikiJtS9NubQonpzjwSLzd+LZEUJNWg2HijD5zq+sWs0LRWHwSnne3Zudo1c8ADpLa8cUsjkWNzIPaXV6N524W7f11Ub0SQIc1kDtQuLwyV8hHcR62YNuC0ML5BZt70fpmc8RBrmynNB8Ovjp689F0eg/ojznOSiy88sckvlFMHaiUSXxL2Lw7xD6EVh2qixfxxXa3sgbeZ+64h13bcrhB3HBlGmIj74ZhG4adZjqS5+50PMZh44/P5GFBrtJUG88/sUpdn0IJHgkifx5zoq34FJcoHMJH71j0fGcG1jWMnQcxkHcssNWcuCSjidM+XZl7Z0NwQP1ximJNI+XyPggbtIAK6A3rfsMueMtalym0T3fkyZelFxy4lvyCmXE8bzQIs21zJOmNxpqGisR73k4VNiKAXptx7/vttNP/k788DBjqhjGjDahmU/Tm8aVxvVFWloKehP7vnBZ7k2v3ciGQwFjIvCSg3FCpc3iYD7OQ1IClCkWChdASawGC6kZDHb6ntpOp3KewAez8v9AXMzIXo/Ar0LUMIsU81SP5k3JE9opdNy0E6Jb/7vQ7eTDcmh6r0Id9Wqz1MW3ng6J7oceEpEYmZ18RqfxOW+GIYbhuog5COAOmDXlm+WYtZuTj7fwyDLont3vDu9N5herokDWmHiJhdc/I8oSc0rZ91OkfaurC5o0/i/xFpNR4HkkGcBJS3cLn6cwXJJNWncf5320GpM7lNQEKIXYXhlpTWKlnaIXhZbvtOlV34TMdsuiQguPqAw8mq77kDiCuZfDu3ihXV/ScrfJwrX69rDIBuYQFIkRq4Gy0Pz95Sum56+yBOi/nfkxGbPHj9xjtmgmSYhJShrS1zpEdPXv7n00lNkaP61bbwVvU7gGNaT94PXFMynX3rztTGu6u/xkpC5wnU0bmbpI+HF+iz/vmqEFIVGTQbjod6AnzgYMZ7/RJKaXLZW4WL8z6s/3Z0z7WTUN55ZOi69Hyhsbe+tO6AcRhJpifat34y6CTDWrkkviY7Wf+GxJ7VYB6UdZmUIga1i5QSaM1qqgZLbro28b+rMq38d+OtumObKxrtnHy5mKgOtKtrMfKGfq4RffchGDmH4FpSnpRFkTXmNpG0y9rb/PqvSNyyFfUUrLX8anLensKT1qQCy/1fCI9buvkKfmY9amAJLGhV+pMSG847fzE+J+MlMSU37dS/iES5SJ3rLNq7nncf821VSL2x/BDWRx+0SHp7AxXdpg/pcIMLelayLO5EubYHzTJAbMAN3WQVPaUwSv1zbkjup0QmGZrryBz4GcGZ/8L9sO+o8HlITGAsQ7ypDEYMS6qxovYzGzgN4tSkGNmDs5D12kOiQHBHdkCw7mwXSmSPzAU3zFrambn1ZixlZE1zdaH5+Vv1ef7u9Zs8TbTsLdWfywqY3Jamn4hohmMwPpICXoZ1wmhDepL60NrNU6lALNwAAAMAEAAD1fwVh9P6eXZdAbF7mLx7j8LhZvSm0jCYCYd5Js2GV5q0rqX4RqPWRp4uRzq8q7wS8qxXj37V6LzWSXeH3CpF7NQWEHfNGtMKBDf+VzDtG8h6Fix+HTNLP1HKqIhR0H5B0UU9kf7a5jzSxLytUt51V3Qemo2ONzUQGDKjaU9TfqnAr1jdDed7iAb+2U+9s5X0cnzftzEXUEGVGs2/A6V7GGcvFs52INcTiCbkirTi7SFf34Q0MXn31H9kkZndzcuNga7X/ZvLwHKkL8ZhcSnO1b7Gae7yW5e1QvrvUFpXvSOhifgoKjBrjD5PCYSq91go+WPVMSbByRxH5XrzVFkPlFzWFZ1scomauDtpCpIcLVuDRaJakherz+mgVXVW+Crodv+bD0hcQ4Y6n/2OhfoyCRWN5vzdvbPAl8SQPSEp32jrEbpD7KHOdD0Sj7Ydx9jfYUacgBsjLS5zSyxBp3F14eWPYnQdoVA0X1ZU1/ygfCBTaGDZHNaiJYNJsrWDQAvH28ACWDrSk1RhhO7ftjmZWxZkfKRu7rq4Gw9nU69CGXB+dZDai9PnUs/MaqClGcaSQAKo8/cMimRQUBnHPkuAxE6CnT8chK4QLVCOopR6lEFVGqFwXMEto/traN3feTR7xAWr4cEasW76Ov8MQeDv+XKlPLR5gx/PGFm1DCjk3jggEadlmP7NJ9tH9Y+9Ydg+iJMj4GAQOhDyE1Ezx1eIWTmvq/TlEbcgKW2eFSfpQCZC+HntIdg4RC7TilzL44SOAZvO6J8VUF1AaK4hVq0y3232eC/ueKpmaT2mwJ9vengSkCLtT4jRqBUHFSF/z6WVAnWDLBx+2bYfY5MAVR8oNDalyK6TfivBSkg/gWk7mKvsA/Il2wXgUU7rwe+9bWtkoz/LzdlMPfiF7GyUkrPeZb0ITU/tZiqxRp0M18px0MP2ZJNkvSPq3CX+rh/MDYdQ1FysVjjB4iVeBQl8YoN8Qo7Y0TN4zjsUmqme/2oNPJU5PcRXKBpX70Eo0g1K0f9ZsbhQgoNDpY0VrlucwvwLP6oy5/ivs2J/tZQGsEQd/32qQKNCnyr7qxHixslb+823a0OCkmJLFiqXa40SkXENRjrDdd0rP9ccOAlvvfdJKCdVeLAYQXmrLk86+ItEcwnIogVijEZs28XGNFEdUT1Wyyn5URjvQAx8W/RxJjRVZuPFDJl9biKR/U56vf6QXs25/nmnK0I9aE7UBg9Ul9xwX3w3xBBPAdsR5ue7eux6zRRsGcyT/Q63QmC/ZJA3f54SM+L8dhAhc5s8h75gGNbPnGla/0iDzPMtajxMUE3J6YY5MtKcgbgSOg4c0fjPeUm+hlfjNRB4g2B3f305mmU4lc+TZUC7PA5TF0K7/3P0Q03nStTlxu2wPs0k7xI6PENFAx0dLimo70/+wUkoiFXa0qnN8gn3dc87R5HjayG/Ui3fMF5J2d1cs+1AnQZ0DUc3voq1YwGI6Ie0K+MGzfkqzzXX0vCeWJ74EErDME0G5Ni+7aWNB3VPrOEGZAfl+38qYwl5JWuvjlG7SvhjWGFsbOKTEfICq6QAoxBRhFhkRja7zmSzrbbynA/7DxQnLue77JRo0m+d6egYSKblV3TH/OAAAAMAEAADJ2cLIejjEk5coQwXICliGIFhyIKLc8TY0/+uQd2bcToeGjTm/OozC2fAMPMKWbrNDMiUwwtz9TYBnwjOueRKyISHbT1Nfd054jxKj1DOhGaSv4n9LYoOA1R7X7DwbuMJC3jRC15OlIWIhcbIb+fWAbvBhqRoeEjGyTxUBMFj4Q7ku/SUh+zKGqPVTeKFyqPqaFys0Xm38xuXUTERZhQk8heCPabr4iOUvMFN9Sxfmw7Xph3Ow0cmm2kzER6RzbDVRIxsyk4B96xSHmLlwawU4xVBhvNwFVRR6mBi27lHXEvOKG+1JYYWLT4JtKaQ+qVY4t0h3atRLv3nGSwtswpgiGfChNRRBrpUrie3poTkWgS1LdMpbprjYzDeyh8uZ3IbmBwqRGTAruwMU9xv6xyNhF+QfRntPu2xqfa8/5cATRH2BXpSfpHaa3mRyg2DFYw3ieaQq+D5CPmWo7M13gtjqmvxk248hvGNIkXiBlG6y0fQCRnF2HFmh85RJO0MsEbukKC1YkKNfFQegetJey8qkziHfYI03y7UpLxul7FY02i0oiJ4v9zp0ad1raZaLaJIJihI+0d2E54siB1B6g+l7WG5NH+OtRyVrE4WSMTeJb8CWeg2i8GNhsFPbP3ZUiIvjCqlBtFhRCXp6Oovit0sS98hbHC1hqOuBV4D2z6iK6X8n69KGlUCajTdeLWlD2YkFco1dmTty/zXCzeKw7Ob/JLUge2KxgwED/RIbPGj9MIVS9NOvdHfIjSjJDj4+23dJgfCq1D8z7fJYClgek/j1/f+CYlbGvlwRWFidA4whA5ZudtH7yvLVuwB3i7PTM12qXRpkv8H+pSEIkNuX1ugbtL/sZmzW8RTfM8McXokdvgD6/soMywamlB1bS4sCH5LthQaVlz4IEOqzvbwxr8sIFaIb/d4gwUIgkESMgbz4TGEvQnG5859vKExO+sytblbVh5yRqws6tNUqMnO6h22/nt3jTw5BDGPH/uDDzXHaw93oxIptbBgOZNsfr35YcF09iHM7vBIsTfyg8yTi1vJeqnOpjB0+uWYRJKxXvacSgzMOuuSSJ5qmiF5vdHQ0Xx90Wpf0uPvgNUevUqV594EjzEGcL/wRJFo1ZTiFypo/ppMtZk2f5HkhVcDP+lbw9/4CtBkbOeOxowrnLAxXx/lSbL97xAZ25q5tpj2Hm3cj2Vk8osMDA85sXhgpuaOPynZchAEZi7LtnvvKX5QwnyDY+/R/sohDC5r08pMP6S2CDqLcYT0Up3xDIn0uIF1Rl9IBdMbEitN1PqsEXR9+IV3x+QlhKc9AO8qCvCd2E8cf3XY0Mz6vQdiGNQz1wIgmiD6DizW97j/izlQB43javYSu4qFoyq4fp1TJ/9gMUGOv7VZ8QDQsekip5udEn1WIFzW/amgoE9JtPQt78nnB+HOIn/Ww39HS7kKD/J1abxN/qKR5/JFBLaE1EEY55Upf690M0+21xJTmZ3XcnZHbhzRbkG0f9dH/nPWkQrE22TRafZHlwjJGmlCsLGftin+gdsL9YwqcRuSRWcrMV9lRu52Oln+J+4lQBQ0EQIBQDie8bcA3m5H7jrIhz8UM1zS6YBnh5BXrEMXFC82yX8v0QfuVAAAAAA==');
