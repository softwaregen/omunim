<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('59EA6C618D682B20AAQAAAAWAAAABIgAAACABAAAAAAAAAD/vrSy8cw3IN3yoLSTNtjsNRXb0K1HKXPVkW+qa+aAxaXozTvKeTan0o5lV+zLiOKNIFR0hhDx9m5StPbYhbULAVhnLvPROQ07SRA9P9/MrTVz3lLOXXN9XTdOFouLoysKFXWu7cLWitcCFSJ8we1QgpEVyQfSfqBmE6ouI/bB5jI4VqPPfDkAwjQAAADIDQAA2AmhAPs6nb6LASLGeKZVnQQZX7LF0zPyEkUrtuquQhECQJyxjWRANds8yrpF7cDkBLssY4rxOWiohi91rPtF0TMxv/wCM9Fprlj69dRrL5i4FMQig+upByDsvCi/7wAy2bQ7y0MWahcg4QsQ0oOl32Ld4aZpSWbnxJJY6WmV+oyMwzkYkUFYPP5HmMQzfU5EkWisER+hBybnZzQ1tKlnOK6Edu2hjWZL9HRd5Te2x73JblhvqepCn+qfntb4EaXJMN2lnoS8LXDINGXCnnblNbLuUAHv4D9w36H9DIRKv+n9s+J60LkdzkbSXmW+b7YrEqKhqO3qM90bSqMnRwxJMRtQI0/djYh7aTfg0+ybVniLRCJ5lfSqP4SL6AYOGfqkg+yiM4LbiOjGNG3KzuAO1CArlnCXUMPZxsMfCaofFe/7ySMLdlo5Q1Il/YP5LzTEseeMLn1TmqMktNMz5TLG99Xt2ffoBFh4Z2zzdg/qNeHx3D5QOJ9KAF9kzjPiCsw8etAWASzvABJM/RnCurcRC72mevmRhwNgWBA5kd4nGiAj04bh9RHw7jm2LCf13S3i4cOs+bxoNdEBk5NnZWCcb0haaUNr1hCHjPO1PK1LX78TIB/SDash+zIqT5LkHcFXMqO4Ow0+VUskbvI343lxUiZGCoLxs7GGMx2CaHj9X9Gq9Xtjv8A3I4u0MsPkpH5nmDwOaEVYr/K9EZfTWuUxC0Dpjvt30jjcR2RmPB+L/5/MhJYZioEfxjk3tmN/+d8B7Z4MVP0ml7RcoQ1bNugvWwizXruUvcsBUh/DZwJRLN6FKukpMkqf3JEuYH3UCMYZgRJVno+MV/Gu42EM0lxLLTzdOgOTfu6pvXysxVAegNiQWD5V3BSQAYk9V5eyjdAXjP6mEhluk6dkLF7LqJLb7SuKuAQODXu8cCzw7v3vvOTtcs2Lyi5pUvm9z9CMj8zxpxNZrQDCZezJ1n8hia4bBDPIJHVGerNDYi9uSGi2e+LvaJE6Yd9rttLTHH/+Xb+bOZz6DRapmxsKlzKk97mfUTda7QBm6klclu6C1DcmJVITFS2G0z/M3ljTFMmydc4PODtgtClFyylTEbBmX2iBaQxWFiFY6UXiDYbnLHaVizmQ+IYDodNNkF36E+99LSXSkNXhZnjf8QC09FzQmb/PQctD7YOJd4sVWQgUJi9M4RCisJd8m9n5Gn5Y83HCqTXgjoHIMvuYOVWsStjnpQCgcQv39kHeH2l2Qaa/zVf/NdeAaEIEpQlb5kSiU5Ukt85g30FPhZmCiYOEvRBwdYqC4tHwJssoB9mIO3l2WLIXi+0F+T+huJaLHvskTrtYvjIqsz3qvuikx6LPXGe7gGti/dmrJAGFk8aT0zN5sdmAG5DgSPxmuD7HrKuEXJs5sbyxpsszkXt8AvAAwDToS8+ZfixIIXqYYEXQSlb/lRJUyW1ael/bk4+zpRRKI7z3DcnLzG5R336gxADB3FqZefWZV4tLzmNa48YUGt2KrORyhrtRkFUrLSfVtJOjaJJveVv8HPQFRPWimlhYDHnHnkp99te/XENV1iAqvlOdoE3hviA/NEQZ46jAMtlbQeY1dRvtqn7hVx6gyAgT0zvDfULigUmdnUgjC5HWlfuyG5QE9QCH155D4Rjoyq/cZ3w/LsfqaJAAFSnq1QanGNo/4uRQ4QilzyiLyN/SYxj6a4ElofXXb030avF7HgsEnoHWbICUoYAnrWI84K1eHg1XkNy5dGeRL2XAVDP78xs0FR0rEjhgEmgpbCkb3AS8x26yRuCnn+863L5MfmZv3xaU3Hc9tVmckKYP9XdOOP9tGbvfbpAstiO55gPQDf5HDpkajGNtig5kKQ4eCo84QnZ+bBsZJ7b+4wyPtdZkbF/Ekbf+LVQk/H+YvShp8MEUqoe+9RW9q2XuYnljYo8euLEFt/P1R7Cv7piinO4lCSSJIGLZDnXKlfppbKnV6SP/gertTn6eL6lz9crw3tkl31oXBlwFa1YSv+YdG/K54JIfd6rgPH+P8NeNhXNjGJUvp+cC2WZcrpoUMGU+yyAZEjohTtCUP/TkCTyf0rFmjFQ5H5r1fVLkMOsYpQzv2stl1bezc4vPVJD8LyzsgAEWXIJ4BgXrFMs3xmgKnnhwnnnQhqPNhh2m+FZxtU618xI3TmS5tKu3iLw+ok/wRogekuyHcoJpKAVPaBR0Bciz2P0lsQKUOPmCtJmSpC3NcsHSBzkBNWWXIQSRwSFc4yPB/74eq6nCZyOVw8LJImGx266buaaEE12ZWLJzAsGSb3mzvshYhOmWhFCBie+HKbCBRR+2n1hiRlfmo7BVF7Ob4x1uwkIXV5xLC15C3xHs6zNAOVWbAiElrZz5AL1m9AIok+l64fwi57FEnAJ1uj1R0rR1kJj9ISi4tDYGg994hICfZH/VGXV49nK8Qq/K2vZxEm1AWcwF/HDWn23R5543d8/LyUH4gC6yAv4JseJLDF1Qa+0ckVuDUzW5rA4KA+TL4jhD7SPioTFX5XKQINYLkd3am4DYbNhqyD+UEhiogNxytEqq6wXDw7pkJjc5bVfluIaj8LWt6sw8Zuz7Lq6dZemRGl+Ze7/143mhj2aHlVmCl9Md4u9GFq/kIG1nLNGgTCgsyDtqCTbMC0GsnGvse+4ICXPfTCv0nGNtKHxAOBJK61eHyKIqszxIPFZxn/JS35uwxKx8qURZtT3abfsZVxu3qW6rD/4qcKXoe3wRjKEichYwq14yUccVDGXt0cAN0Veaa0L6dPpZsEayawkc37PVbWRWK6h0dL7QYDGLxk5WlU7NF10lQA9YMCb2KauCaJp7noRsnCeaLNpdhB8x/uqGGvhdtKQo3fjr0BY1R4JzUhkhULnyfGVrXSvpyOHiAMqZmaRmd4BhyfWsvY74Ntc1+zH88zgMcQcANtV2xGu+YMxyEjCcRj57dSsTA+HAWE8K4fx9eFUCzKvTpA96ou77aEdxQJwkWB1k3HUK4rSiR2Xy39hC8+7FtPYtIN5PBfiUJbfOBjZ83DPZckhqxs1S6zysmujluACnVUSvZXJx+ALVW6X9rYHqbu3ABwWXL+OE8o8XmiZMTZscmZyyhIZq8DQZ8w2HVhMN3E9fWmnZmapr1+nkLhCMQxI0EL2nItdnVx+vrwGMnXv5VhtwcLv6hXXAThGujvbdKfzfFSwzK4kipAg8rgjduTdUfynHBgM2tMehZAK6/gAWGd3JzmVg5yPJ3+PhGVrllsLl7PJajO1xP1ct6p1TPp4khw578jBh/zcaQR7Tbn6qs60qO0RolEiueSqX2k2tCkazogVfEEToQzoAZpvKN0zPbb7UHqu7V/CX54BoYprqX5Su/4irgfPzZ4GY+AdtkJIfw63XObt/IowS3SqomPIeYfhGAW7sZ27+sxAQ8AQtjpD4NaAaaIYN9Usd8M/nH9n1l8T3tE0HS9FumBPasgAWT2ByJ+iWorwVy46QciC8baW+q67P9Y9HUrBlYTn2AnJhKPTlZRLx0SIScTjS1cfH3CBNjh7+nQwyaTH5Wgb5xbXZl3Y+LMQ/SZqEKGsPUC/+GvhdlPXeLPfpPXURCjReqDPbuj5KyYeDxA3tWVHUI5dWaHHQ1FcO8PsKeR0wOecQHoSv+2F1YmWnM+2Hs9PTz0eTo0oEHMhjsd2B4C2pCZb5DtAViPg+8W8GnsRvNpnSXkn6SN0Dn/jkozgatcX5xC2w/NbS48GUmjoBKRIwYjGSQZDKZ8FCDAyhn5HsYMW5ctaXnKLGYYHzxdLInw6o2dY1AA+sCuUa9ILVSrDX5F5vE64c8UCvimzjORnUK5Fkw8S0ymuMhDPP0HhpIVPu8doQ0NwkOdoieccdA2kLCX5c4hfB4VoFmqfWXAY2tv4lCl4CAWApd4iJ5mSvLxYBJCVJtD/UepiupNH5IRY1sGUwnMl9IrT2LdwKkHFHRixoM0LFfX8UCSygkVijAs6VGYHMfp/RAaMKjbWrj0O76/a9Ka8I+ndbwRLpy72loOnn/gHiZT4NmXOt2f+X76TLE14I4LAAfZlsA+iTDhCuxWBYtlCPFtlZW5BbWfHmZhgLmGpexVOGC81T/AiqVHFCqfRdaCnmzZGjvWR/4UM5Lrt05n9e3YSWS1s/p1L2C1EY04BymixvAokiltWrP11HHScpf/4NE7LyXzv0pKp3bgMLTQMA3ouf0IZDWPsba4noV5YlvdwxYlCjufCDPRYqoevpLDhyzDFy0ZTDwbp4V8RRXEL0SMjsYDZWxHeI+lLRCN/D7rqZFR48v8z8qLyPz1ZV9q7TigksKsShR9EEPBgx6kjxh+lP3YeU3Gm+usrhjEGZMfozOQPNP6yDUCpHffGDSqp8FmEYtg6ppASNr4U3aF20D8Jbb9oAZnG/Q7ovJxutA5z16K42vaM5qknUfX8IPxb/Rh7USNM9+43afVqlVk5kO2GDglfPYdVbDjkzTVgbKFwQfZlrVUSDNZCFljvm0OcW6XlWpj605P17gPTmxwyEaRWN02ibYuLZpjWqnPFrIGOp+Z47uahrRkrS/zx0vcNV0eFGgpH00i/uhzC2LeeEwI/CZ97ASWWcbWW2k+KRB2IUT1xPxWhGs9n6crsAj4aF+8wPNbYszmDbsziKysSdpj+Zp4UE5hHp3G09K0fRXLmSL+EsKyEnuVVKqslGClTGkpjB/BM7JWg7+N/dNQAAAAgLAAB/NUYZG288KanRAKB2jtUBE0qDahiZqq6gfd+jYUj4eFZ2FcKPBunDxAuiG5/OVwnjloLY+mZR//nZrNZFzGdk0ZdoKWFSuwg6zCOYVjHtPlXodckT4JrRm3hiLPl0TulVLJ4miYI9fDUpfdRm28o0iCSdiT3z9TjVAT3O0vxr8LL+c5g8XtA0NP6Q2025OI4tWnGlT8q56T8x6AmxJmsDYlom33yGE0bHLbiW5C7KO1whQe13N/OBcUliwpqFLOKG83Wmj4asvhPXVnR5//wRhzE7ZKMaCO3SryTtybcOTBUj4OwoprZ+wP6GO+zKt8FhR4qVJDxBdzQjORGlckChwMhMsXwEwqp2tBgKOc7OaSSVIPU2jWe9mGMpvtvmRnfNG1hc6HRNaQx/HCOU5Wxew7X8XbbYLY+T07C9k8vMqlKIKcjdPWbxpvz+CbPN9BvIf6WeVbNoAeCsthIlXNhQvDe2Vd0iN7Ay3zNuEPNLOSuid1ZfZ/kiVZI+wehJ9Za9v7qS+GoXyqOqKYU+ssxhDTMNSz/JUyDsLPoOO83+HZ0JUCDdssPJQJZYv/k/+a0j0FyXv+lksMN07hWnRuj90nCxHxGDFi9mJaUT+qeJ/v+/8XaeRz1Q+1UUULGToWn+qGi6QnvXm8x3tsL0fobDxJNUe/yLLOw2GrdE9dYh/kNUZmUJWf6DR9DKkYr7cQgoWEWLccCYsuALdlNrj+kuP5B+IIx/0soFMXf1bfwdYB/tTPLdySD63YDFwGbrOc2jrGgOgmZd+lLkSZv+6YWyb5WkuPj3d8AGuxDrsOCVEZM5YVtUb9U37PQDjOap6SXEIu+6rpVk58gTsic0jkYE9L6WmAGvJuysBaFhyI/CAfkZGR5AglhjIKSXUoNWW7Ln3StS/wJy1B16NjQ6FdH4o6P4hLZFpqGyzd3uMm1GoJwq1V+Wedg/pffS2zkH3ucpa+BxbxDz//Sbk5TloD1Bx8CEn2O1eIO1zG0IeG3KmVVDgInGgrn300VyTAqFX09wl5sKKKl7NgAS7cyF0BWlEzhS8msZ0yThplYRLpz2nJ7pKJE76veELwpjh+J5JNNsH81dJxD8JmOBLddaKz7K28vOfKj7jkqtA778Rnr19xm7N+WOhvkLNhzy49+6eVoYLhzyH8CLkryjms42//efnQ/ERBzn654P6tA16MZNSOKVv0Jp85+EFpdGVlWldVuYmxFrlC6KVqbYr/FoiYgIZdudvCz6t5YiSSMPcPQeAFSFjfV2+l44AEAB27jRYJBYVdgj3yOgr9f+c6TQfy8jS/IbPm/MWuQa1HsZra5mPUjqAFFUjqt0ng/zvbyewvB2isyp+7BI9/95Jsq9oF3KGykvGwmMsJ7IZTR4RlTCUpG+OcTNV1DothO/7GY5/KiCviCeXsLKOiTFKGRAW5iFtzqFLpiOkAqgmyQRJCL1EuGdw1uxIiNpd4LWYXURTLyGX16mHdKDYtaZWgFABAHSblaWWFGh0KpkoKRRVeoiy9oSVdhlNY8WTDDnOmtOKfQBXYidfhboW4P0nPR+LpCbRc78y62785NESaKKMx8LJ7Q7r/MKlQg9vyVfbA0YjiwBHWwwBKMyXHeOZ9BxqIoqmzUd2PcyPBBiXo3xLw8HKkjRMn5SWcRsHyp+HQs8Nw4t339FJun6ZefsHVbw6jFZchd8d0Ybi+DIjSoG9DCDan6ZdxIiYXtcT54ofK5FvrB/hyAJHhWt4Oq4KECdj9tAwAx5ErwmQ35ZDyjxlwEUuIozV6OSvAnApvVaIa2ytZ8xxSAo+tVZJAHlcYSLuIu+EoQrsuYWKNt77WUTLSi4uy5ceLgmTqBBWEGnZTfwBhN4tdBtrQ2sstsU2mVDYHiSq5oruBrIRi+/cfexhXExjQn16VKHFJkx5+GIlu0pY+EGsML0e2jtCMmf7nyRivXfC4tBVEk3CvYNIhc/0E+7wj4qUPEjEq7lZCbCP7itiagfIRoc9ghPVBvJjhGdGSoUnLTQmck57dkQJqlnkyMJUdslmdORLR3u2/mVupYMKVNFzaeMBLz2MxfimwcABg4xRTMitHnHlRNnQd4gH9e5x+yS7XCI17dDdjeVl5/upjbD7ZwwK7mIWhLU+AfMnzOi3DpR8Tj8rQqS4oXKQV3ScQtHo1VySYDgfNb0hzhYeegHRMRKQ3FJpUbJAyHnpVaXJaMjRSpwjtS7YsCd7weanESMhWKMr8VlgbjitYjEyQ8lPL4hqS5pZbe2oh1/XxL5VLJLhZWVUBKkTBu5zN5joitAig4a55S5B87U0K1s4fWETNzjjvP76dgEfgygECQghvL5jmQ9kFkIDA5Ua+0mNLiNxKxypXCeHvVUTcyNDytVlBHOf9N0wXRGl146PthIyKGh5ZZqxiEnFzkYesXgfoFUZLuCaASD+cZGy9lE2TpRRa+1wJ33lAaw7LABrdqr81sEqeTI44khpnAoFrZdzxsPkKKSKEFu6f6byxsooWB/exhdJ3zGLitEO/lj/+GV5Jd/7na4JupKJMh/4pEyKr7LALJ92cVwAyjUtGOglct4QIsqIGFqOadHJbZ+7GDJKN3hEV1J8WSWfoRegyNb/Z/U6YpoKeStDEIX2yYnexDz6kTlen6YGfWFEs4Waa/IXbKJ1Ojcjp2hUJ7cUJOVTMLE4ijqiBDAmTV0gbG8g3IZodNpe0XyRH7GLIxN2MuSVEEfVw0URWOI6OmD19LVwDL0yjEcjLjxMFA5TgXO871yz5VG+iIGCCGxPFP0L5ja5YrOrg/lrxhPQJgnVSpVrQYHW2dRm67Lck5N2/ksIUCqCXSQGlgLni/NAHYsYhGILxxORqC8cV9EmWMAyhIDjtSFgyM7ciMWnP4svNuwEJyU5BDDTpj/5STmBEveZDzCwypidE43TrPh79Q6TEx0RpSn5Yih5XXx6B5MQbpmF3xXkNd/0oNG53JukCZ1o/L3c2jf3GTcuJcxFSBdMxaj+lspTZ3CnNZiggwzbho0CzkcIaHQFLPJUNZfilYaGO3JCblWTOSh60anrHdE1DxOo0dNp6mpVO/ztWchEs06C/INm5gAwy8CcljZ2oBxGdvQ3pJHDvzz2Bk7Q0HVDo0lOh7kh8V2x5VYh59Ym1BdFKa8+udSmIOL5Blwswxi0poqans3v9Y3PiCbwb/xX7SR0xQ01CzLkpRuI9Xkoh21QP/9RNGFQDOyDfaha97QTIYqii9cBc7ITd3GEnS3zQalFWBTes21EOfvQ9zafXQqtSnOynlPjWGj64lGefSbLOU6csN30WVt9VgHRyBdMe54Hufd98jRaXlWX5Scr89Q+O0dLHhgpsvUpPu+RRRmu3j8kLhRTf/k/7kIHYWT1n0AufE7SEi/kLQVNc6PhCIQvTaDPtDWHZK8PQ9Cqq9X872YC2nBB4cpA+ox4shpahCKDhZ4k3su/BXW+Zpwfh5p4IYLWmFDcx9NbN4vT5mdu2kwrwkgllXQFeftevH4bbGl0eKNWGpY2mNCNxmj3is9EOr0ni9quT2lLgzUpy0TihCRnTNmfngYbDHofujRoIkom93yUSc4QKRK8ZInUE3Cef6lPNft+94gW6YTYYejRZ0k+qDqTUiM4Vd+QeGO6PX6zdkUPdFxnY5BkEyFBj53d9/vOoRYLFdC4mIjL5bmrlO+dBPxCFFVp8wFNgLEQDVrcSGyibZQ0DzdUmGHI7LXBTxGTx7Qibhnhy2YSCVXBDfwZMkfDbRBKsNfPFpV8Ap2kOjKo6U9srpfNgAAAIgLAACwKfzD+HnIY6xQy0wlrnxlvxlnFent5fII4fp3oc+zbRVPTjXaL7DMOSFtvrJmZvWMSNZ0UA68iReO9v7c88P3tLH1myI6QJUJnQP33yWvphtaFhngtbN4kim0NHKTn2nNrAkmA90KbtNCQWvb2EbYogJuuOGaNWy/kkuWFx5nH4aHs52vvxMxRxww/WG1VFpSjM5POS1ECJ59fTbqetyzh/TRYvrdLtxy7bH17RqkINBDlQV1FD0uf7ep/oGsqqjUoxT+mRUHwIykbykNNF/2HeDEtkZPMLAh7b3CaACa/5CdgCDZaU/Bd8BceMUAuqGt77fNJQXFHCPohft+t1HwcCHYbIWEn6gQHl5jKoZoQjoY5lMt+VDaY075Mu+szT4tpJPO90N9pgBTDh+fBMcGo5BQCDSEbQYoHBE6AdBQVJNAvrQ7Aaa4+jBkSHlgc6q12qW9CmA4uy/t21kMDgBX/KDtMdKPL+7G3p42vGTziv65M5b+b0G4PaYr4fcnPiNPLqa9nBMSdIciiGV36vsORQOqfhdqOo9+gS9S/7g5Br/+OqoSGiQL/1fcQQZhliH8ePMNB4/uvKRc5tKE3BpFu4nqkPy/3m4S407+Kj96JvpYw7C/RY+AfQueZ72Mrn1CMJINMKZASuJgjY4OOvJQ+ngD8PzH16lWxCEz9Lif11ZLpBBmsP6UP8jT1r9Tx0etiisSsr9pVUGFO9C+yPEQM6sSl1ySTgax7R3HSwVoXtIhgHEs/JOdpWjAssSZWpxjSTtQFbJAVuw86Rcx9z/OJLqQC0PZEhMibx4mazrCA3/R4pcoT78fUu7peJ9DTyX5RD30czHduTytKVYXeruMz0QWZzm19H+P1bnSrcwtqJ6rSap5CL4YQ1E1k5HJ+w66GVYh/kPEZFt+Jbvuvl441Q7v1AYFHWJryIo9WsUL2uy1gOKChKk8pdfUy9YqS2voYx1R+cRFaQApr+0z7l7MjtG6GaqOv1R0wxP62JU4+XM19pADUQRuAMXxcuikJ7HpdM7vZMI/yXFwOKY4fWj7v6/qP4Ag0lZCVxUfo+Lpm1+BLkSkjDu+JpM6rsNX45OqJ6cLW0FHXlRY23v9t8U6mjBPZA8oQVbpiWF5q1zZ2ffpfSzJm+f/9CHRBDkgIcvoIJ/7e2luKsvZ/w7pI1Jf6P7pjBXgjesEojF/Kt7PsLdzEPITQBDuqFUpyiCsP9+h7GkqyX1eUHP04Phgw6JwL08n0g37+9zClVFHtbcEcdmA5Jf7G6SvFSqrDJJ2Drb58NnHynxAbxEfuS/Y0Xv9S3+1pUuj8vXSq+KSdYtnLQ62zgt/1wo2yJkpcExAspoenefUus4FohLx7SAnldB4ldXr5FxTrbwZ/YBDDU+7bNW2oSBz5A/bYZHZcDPoGnlR+fDR+GhHedZsDfmnO+aiRc6wEwPvjWVvCVV4OLazBcXxeAS8BnrGKXMC6XlAuhOC9uC3/iwvq56xIiNwu/nBPOXHAIeps7/seCif5i57m1WjKII5/bzn4jrPiFDvdQAT6bXSVvDOga2MFyUPWFpoCwCHGxMvVQFt85W73I3a3PHNfWjkZpgZoViq/RC8IQPQ479wBKa9NLwVj7DtUhABH/NrE2xTkamfmf+/U4AY17rljSyMbyh3gTbODD3gpSXVdvRg2Kzqzt+xRgCmP5Q6M5T70G9yx80nmsA248Zmv306oagsUmgrCWoDGbC8RwIjMdizx9QHXL3ZzcXSWy5+4tF1k4CseqFrFwkMMeNfQgMHKYlGO41y3moD/YFE1j0A0h92HRVja00AqihMIf2ruf3plzYHFVcaM0u+qqFsDqh/gsgJFsk44fIjeKnHr6JmAYL7rwhvNb1Ru0k94IDEOuQoLW7mhXlAJqF46BvGDwi5187yHaWBF3S+aLr73p9IcUQSe4N74Sm0BtNs5Aa9pe/U+G4HUZETWyjCZ8lzDyYdD+TOJl2I1XL0Taam3hTA1EPGYl2YbRmtKJz0YMw5BfyMvUCO87MDz58BxszKFPdIYGN9NPbKnYmjhUTn9ErKBrhybWznhJHXRdBSeOt31QHaCo5GaUzxUSWxOpmdPEkMG1b01vnMvkLYgMAXK5W7TYwQfAfC5bbXsER5izfhUq2jcn/+POYtwPofayPYpjPj7oJaUdmEunWtlZGPkfhAea+MjTomlUoasUz0zOKs+wLovPwahzFJNaxsJuA0aYHwQAn8SwdMj7z7orZTTXGgpV93S78G5KM3aKDjeAXMLTrS+QmBuFsRLvh5AjjEjzd8YFSHVKK4+B7HR3FmVjXZrLKYDVs5PpS9URXABL6B7KghKud28FMpylOTOsQUAIZGbN60ZW7e8SRFEla3icSvVLsPPwTi2Y/nQuWiHFYdfp1SwVOqXuMDLwIufg+0iJWgUIS1xFSgSN+S0rSEgKkHNPUwghGB0qkfqFz/EBKqnf7IJBIctvQj+/YBmHdNVNyl3bDtKudjK4Ds3NazRpG+dEsHRWVriH1iuuR4Ar2uDaydD7x8vRZhYNazAMl4gKRRksM2ZziRO74yVgnsak1rqNLE+lrikiGgc24hQRungtECXhPUAf3Tz4AzwrOXmQM2vW5S9xv+exMvQS9Isqlx9AP0+5D/R0ufBGzpuiKpJIIldzXvQjo43xI/IjeZy8DI1sltKc42HEo4C8kuLCN6yGG+DmskBKx9GE9jEDF546hVsjo4PKQnlQM+8pwapLwfp3U8fbEals2L4O0ItcVywcV2fhUEDTQm3lYAsKBWc1l1oaWFjdlKPSkcleJNAz04KLTwKRzawBJIwJnRe5UjJ2AuAwvVJQyeuvJ1O7kDAoFsgCdidDamnkJNoPjpvkxc1mogpxrK4mHhj7JXUwTyNaMy7dWoTi+/dC4DeuBzQ5vJbMlNViUep9NznK2rp7iHBYbRy+fp3HyNSP2LHYEtIVfgSV0uyRyiEqIH2X1+SwvGhtqSZGX1LfjX+gvX6zsKeFJmcVq+JU/94/uCkfdiFSE59D0lH9U8NUA9pBA37ShuGDKCxuO/Q19WimFuoByeOKjjl/36U0l6fqzCB9Tn3qwhKk7pF9xTroVsy8BTNFwLHxlWxTJe44N6xiTECdaPRcPmkeYrPgCLcyQmBUljIQkywPPRMgZHJ5wEvbLRBNBZGBHSZhN27rMqL4mzddfCPlTv4JSKpgqJGK1Mr6FFaTiAhHLkIxE3H1avcniA5ikTGPZDUiHNiYLTb/hyP0/ClEjQqFE0NnsQZ/3uKmRCElriwEGN4/N6B7jQe04TGmh4J0UBN+Mz4lT1o6C26K2uNFkWyFOmKZRBcBa8luAbozlNTAMQFUaFpMoDE3kfcNr9qTrH1fe4jfG9zJMNyg3VDq14d7pPgJGYJnuF+3Ltr6Id7qpZef/1emdH/8G4mFfr5lNIl++SorUAe/CkdTN+IB66O6O7eY+wp8b/A1wcpAAzarHep6QDpISyb1x2XUDy+AMUsskpfogPC0nGWdXdCMXDn/JWof0hXyM3g7GEeZWOJ5+n2xrNHZ5KdTqDlnkVpWUW0tyOD+HVVO2i6VgcusQyLNbKJdlpUwfND6S8H6MYNJ2t3jwmzTButAG+eLhyc81q3g7kk+J9WKeqgNWSpkwo+gkq2hX//EmLD2oiwzXhZ6zLd63eECEt+uNnBQbIShcs8YsKReUCfH+t5q/z22vaFdtzWfvqyN2eSxSGsrA7KgONiEmDnAHTM1WIKUKfRofLr056OyRCUH3yPfFT8V09i6LyIuyBLkBlUsTE1QOUWKNu0p/Mq+ZmAqPxUqZxxTtZTYs8M0hpxMHkmTYKt3wBGsuBt74m2fbqvQQvIKhHSqiw1p1bMvSTM7VkYQFAPgCOkMOkba8iCx2baDipyTXIuri5MOCZll8k9F86z9O9Sed/0BbRyxXM+shCJCztJ0u1ryc3AAAAmAsAAKkkZ45wdnP/z0FZspS9bJT6ZcuvkoPgm5/g/1H3eX5tw87cvJlV+ZhJWcdNFT7E4Tgr4QwjyoPTHBj9/NJILEj8s1dKEC+lt5CPd01Z+CB1Bc9lOCc3NNfEK+U2L4H99IY0kdGch4phB+R/R3Z9R10jSLlw2beOQaU8n/AnkZx+iB7i8J8qYNVHFE+oPJNMZ2BS0tUpODsr+oyQCR/09fgBRa8xvZccQm1PYb2GuAoZ+AHveU+JoOUWHF7TnmRENeHtvb38zKDsVh31acfPkOhmSKH4durJEVttTLE9N3y2I5PWfohJf8lXPwq04hZK51uvZTgMZTGZf/l8sr2rccZlezum0NWvGdhsIc8vxoQZvJzGqd76VIiXZz8TUF5I0wbAhb6N7oJhBi5LSQD8gQGq5sLzwSYPTWsTFAuN2TlDHwgpDFqP9ie8npHsjz6UAjgdSzPCHKMAEyurEzUVVdXWU+Pk2hUAgjrNntn6qRF0GeIMGMZnC5y80T7FAGhRtR2XjN7xo4ga1bBIHSANdIhLmgnNW8W2G0tm1K5wU/ArSqQTaErVAZlvq16uoj7zBYlJQieoRtYzty24A0s5lHzgSURbO6SEERCLicXs2b+1PPNkVShxs5KEmfCPOqa51xpab3t2LvaKj21GfXaysSYtJbl0sGvxRbStHZvrguxzgpsio51sa9c+B9SphISphd8hHHtp2D8NEBk1NPRYxRUCvZfR+y1kDzhPu89x2fl/a5yUL98VN5EbCQzsudW1rVRXJ4EjVMcX6i/GtTdohqky44PbXX3LbElSBJRjDK+TcRmCZVpKzKuHBqQNauYP2lERscckaO9iXg2Fkf5AmvqRvhSP38gIHFOoPczXVj2aINRlKKWt7gEaw7TDvH3orMvk6hcFtMmTMmmoKDMK7Vel4fhsfehvYFGyClSH/bzrs0dLxrIjpQRQbYjjnl3hsAqWOm82YruA/2C3nWmCwN8IuCjbcunAtjeAAKUtnaI/PUFchPDrSUdi8aJqi3sH2JMhcZnnD6FcgbWA2psuzb3X2+04fjGl0Ri42+B4SdjiH4o60ulEt+dNXRxoNYjyF/bntc4k5cTzl31DPJqkhbg/ZCfd3uB3DUELAN4loBSA+qdRuSMq2YKF8jd9bJapwsRCBR8qlr1EZuYqWZkmmh9XDZ0Lv80l+XH2z15NeoxZSd9tbV6Z0IeTxpISYru5jWgkSlJnp6OAHKDENr/v8iOWaWcy+k4NJgc95fjc9VOMt0Eji1cfSm+TuZBJvJQ6RTGwhMXVFk5xiE/0GASUjwsQY5UIvJz1PeRsP/CrABQbK9PgR0BqPmNdUp05ABfPXj1sGMMpwq8256l7Ay3JZ71M7YOiScGiwTaIs+3LHrPu00bMVpS9colCUFgC9Rm+z37kuMY8J5qmmbq8V6v0D0OTWp3wpd7Pnnix/k/54GTxqMxqoQmVnpSPfh0IrE4sIfK30KEvqhTC76E/2dvoa4Epua9F0vbQDxdO9CrGTFh+TA93ZN7l3OVeVEOEO8za/d9dGzMZhZfyCr7NwoZlFvBHkm18Yby49l8Qe9QV0aXiwUPz/jUfHmJk3EqsNCTMzIUQV2XKbX82QU8iWfVcEWygr8+Dk496Epnjd4Vh6ugDFBJTbb3jqoIKb5wNFSLvIMTAYAaOFPLWy9v5cTXRi4WygCyiJ8zPn5stt6A25NXc0bU5g1YCpeIspPYpsphw24Q0tZryVoc94ITIv3YEyFVdeTFd1RUh6wE5t33FwNbrfGSuvygBKapawihAWTmg7j1w6J036ewNBy1T+cVnAZZH3EbNmA22iDhPp2YNtBtgVFKkZkGVJLBI+Hz9rLe8iZUgjsmjmoFdcAxYI5EQd5w9hIvZQeKguSXxof2aW2l2dgGTnUuEh4/96cmE+NE/oLUtRgaJK0qO5yX3/lXdmGAGeRNireqMwKi+WUgzhQ0v9Kl9QWFv9IncwA4hhfmm1mvAn7RMYrVC/2jn0IPOeDjsdrTq3RZH3KAsl7oSY1pHNS1eu0qn7CQYvvSOOqKaaQd7vkkPIvWGDGapNZEnJpY7VgE3glPUncBUsgI3Evr9hqBCj0nOQWyWu7otY+nRR1Qq6rZxZD/UdsePlE7y8ApFexxQkdrWUyBkLfZXNzCcej4cCb5nPDLpdsPljtC6qMvxWu0GDgOATQ/9LnlF47nbbPnZC7ysyX0yQWedLCCAc/NCc3CE/nEQDs+nRE5hsOqNxW07RcQGfFQgkhsnpIhMy8mqiZRUnpIs1mxWq2DJYnL29z4F77R5NL6bT5wvHeKDxDq/GHU9QDDygdI6+cgw2wUwwupR6Bvxq2GB2lRfGIfKGzHWyDKRee2GZw+CnL4+Xg0sUzDXfOdfDVGemgSrougNjmDXHq+kNzH260q//j/9H0eMhNQ6MAoj5/gezcgHsR+0J9NCNEwfgXeE6HbaIKITKGXQlu2yjcGLbRHdrzWW3FZFP+MmronQFTguyqCKGZTfQSjmwf44VzNzXBmisdr7vU+c4vDOqT5HH5ywCc0uBFH/d+rbl/SV6NgmwAtICNeH1Ox+MJzJ1c5hcp41JiS0Oq2lRJK5caRhfTIeFRh/56ufYDWPX+isB0W+sqO716wyOzGQKXmuwOUOkzNNt+CF1jZdUw9JlxPfH02J1RNJEJvUzcCf8oWGdFzNdylfbXTO/Jnf6xaRSkORnijDN8rs9OWbljx5YI6GtJWHk+oYrCgyQ0yIR+GCyR/fP6nK2p6s8GbIjeKHWOOKZCHXWHIYwuDNsyxxfhYti6Z/o0jvJtAnf5eL34M9MzsQrxh0Ez4IrYO5lH4SrbttjyzlKUDyRpkfHisfmu4CPJejtaCm14cLfjtg1z/xwFFSBujUkF4wvsDhhEC9FVh5OmHiyHZf1WFruxhoQQS8ofnA7nJcRBpQyzrP9mUn8N1Y6xg7S0YwycnQoye8s0uZye1VS5zj7rMlgWPOztt0waqX0GebZc6FYTPkYvS+2xQSZ1oY3kKgDn+uyIt5U/JiiUd3klaa9x1S7UNj6/H4UxMbzYi3diJzjk7a2VqDPN9LMUcK3o5u7KmpRgq1gACd0HQhFGvYtbi0hi5Lh1wyr63UIZcEST1CqOZjk2mrwDTmBAt5iAcE+x07/dPHCpIdx+ViY8y5e3brc/OUl15uCP3QKGuEBDcj3UMwN6hAHjRKAf2GCkXLJS23OEGtOdiIB7zcNy0dwNQC0ElamBNZa+gZIb+9Kr9UcKfjHcOwPGgiV3AsUV5shgNbOCoM4vLovMiNYYEEyCoh5PAe8MD56mygd3S7OeKHwHfgoZojxcc6vteICAFn/UnVVnZF2k/UZQuVXMgWgjuvZy68/jlIaA1K51vSbcEf6BDQgwmjhm/0dXiOdsiEqGuq3SNNJdnrspbnMU/6mdZpx0roj/aCgfuWFBerQglnBqhUHH96b+RJYFNdj+FbTod0FGrlNkda4pFaSAU9FlMAySS7Dg2ESRa4lTk4yHeltu3qp2plqcXA/GvvPyg5yfQk3nhgoUMISMIPHdjs0ARVL+/a/TZQ6d07P9QYlHsDnKhm0+I5frX7W4AaEUnED50bKjWBWdkXbuefO3yHFyWf+RJxmFqvYDX6oRB5N6bJ3oG9bfBNT2ZjVq94oweLykpC/4dYzA7PNan2IA3cYri6GIks1s9GpqekTRNrVyQ9A/MIiPHilvv4hT8HK7gxMNHEBJqcarU+cUtwBjYaMoAo9sfKmClqQh8EJnx6SR3GRZkNcPHHrhxOZdOwlPgeeIpxYkb8Klu8/VAQw7LFpMcZyDz3zHCCfQ+NCAGN27fbJIp2mYw3q/szEaaPhg3z3QKqm6P6FUGSVmm2bxlGzhF17RRsr+0jolQHrFqLw+fKv4HTam+aK5082x7FLLiYjfqAWId7uVMUIs4h0rzkX7vQ0XxkyJTuHwO/txDeePKKTgs4AAAAmAsAAE8g3KgSIcvx4tNbLB6hTDRzN7oHalqpCaCzr4IpN+cHTYkGtjmxWHFoua5rJEUIA6VNs1OET6dN/gXvWz7UsmLSwyti6oGpgzDOW0IaR26P/TKQjaGleIvXBQtoic4n1f5oLYpu6MVpGptmhs+t7ig5gWtNISTke5GhRBbeBKDUEbbJbBqIp/07UPXIqlAszJM+Mr2pOEG5dlcjZBPUHZVyOtonacs4AzGRNEkZ9b8RIXt9x0tgDdOblqMnGsRZTJx2aAOJXaAKgUB5jgVRlCrd1YUAvjdbQ8bNCGxtTY8LIUy9Z3ZB0DiwOZVtDVOBvriWAr59K+K8fqV9kzxp84quYcGGN6Wk8XxRWBc9zWnIxZXjhifFmTymg3E+CGgqc1saMlHDORQ/gve8YBS8qprNeEMFMQOgx8Zjh11QMAcjdk+eS4l50tbby7t4EotUEC0D7wg1HDDd4q0+Cg2djS4YKmoAQIFgmHUBFod+o2s/5SzqWS6VZ9EUEzft9Zw8d4sxqA5Z5AKEJ/guKQRxNzB9vhRCPTQH6z5YjO0xYkOwn82jHqUmjR58YPml/harUwFkU54UXKkwsroQ5RbV16eedY7CPOBry59JqPJXWVFEucXAlmmLF1hrZwX73eiSiVSaR37xpXQW8aFc00tWOr9Kh8dLVu0e2GYjuRiLzech470+PoKiUbXA8g+1moghxHbFUhoqJTb/GfcReop0D9pC73IAM3H0rzBMpvmcE3edq+f2QnpVUQceWZMF5INGvdy+G2nKL3Jm+xvuIvZI+9e04bJrVrMQ1YJFZcI6tvlI6OHGb+OKgKvdVfhMwcEyCvYEsrEtEyLRUNJ5/N8bdAlOjpS7LxNQPUcwdxdp50oy2ABnI2lI0yc0We/o5KK/vIUSeotExO93CJY1Ze1GYFAtxpPeiIIOeKfnBwgcHAFyT+hWj4dWVlSoT6pD2KHtfI5C65A4WeViw6sqTK68YWn9JFHg5KHVP34KZQgJ8/1Ca/dtWlCnBUgf//4aGz01SXM1KPbH7BUovtnNGz7WppkUA/l8SOacPVoy+dATOsg/oFS838ETA4hua+su0xxZWu8Reno9Fmza6RVBELyimvPQ6k5MjnmvZkTTsb6D7EnBvx24sn7syVbo5x0q+8mReO85/m04GKWLXTY+gs5kuZ0X+lTq53ZOyTi6IQM5mZ8pAbOBZnRyHrb95djA4V0KhW8BEh7QgyUuTeNPeCVUZl8xKD2Y0PPEJTEWJLaLAFPzAjjw5NKYnZWYo39DEMhWWHrs7dIf9nehQFyjT25PQQn4WNzbTQ7lRQx6Wq7A4w3Eh7JvD0cFq5r03UWzKHBSHgnm/zlAYJ4XMM491awobkS7WjzWp02OyjVKj6ACmHSQeqdvwtkDpzLhbge0N8C0llXMW6vPAlfO4QIwkMUt82/XQVunHKbDFezW24aIDaplJBHxX9P8sJ5/LizkRg44OpDmvSnH46uoV6F/vs+5pmgua8zyGN37DfRscm2n7UQ1mcXP+vaPvzeQy8onuZkeCC4ozSIYV+dEtsVqPcOFU3U4vTE2yeDQlaExc2W56xH/YhY5j4U+FWjJ6dyzf6TmTDpabpUbnw2OkdueCNN8B5FBhYyZiciS8PzQXf0zizLcp3ro8/3N2y9YtHQrPQtS5fH6R/MD+UHjJgkHPVlCXm6fsW6rnOcRJgMjFA08blKGjZcYm7C/FUVLNSEHRng7Thw/fnhKu4g8+XwxZ+sgOeuQh/2myBPbHo8AmUN6oh5I9K4A4/w5081tzp7bAL1BZM/8KuMhN3unCxomeB9+oJJkY4I4RHMNE4XVrWr5WuOyfPJ2PC4pipJ5UEUojeyeaVJlH4CF/2eQvI0OFsPpemHhc4wIuxgsp6Zs3UarCqDUwi1wUhZA1LWtKQg29yfS0i1DvvFMedD2iLP8IsoyU/S74cG1G4K2reOek2BnqP2SPlXQGp7ZhdGafPd2JItiQ6xczuq64rwh1mbUWRFtVy2TLsasQpxayPFnK3OWiVTS2Hh39AT9q8IxtA4jFlLbhaVEm8XqJjeOSQKfSN97VrVBLHMpwj0mItIhw4ByM7njXse7Pueu3TRYn+Tqr6g0WKx3w6wtzzxBATxv50y8o4bwX6+HXd4dmEik1X1LqzBufxLDN1Bj1jtygz+/4v6oH2q0YGkjwq8Bwlpn77N7+DCOhjn0mkkM/bk4c+OfAtkBkVsHMH1OqComKwJe91prTeCSpjtWpAIUJe9uVZmr48kxTrAXIY9vL6qH2gOEZ4MV/F9XHNo9q4j0w8+yNlEpZ84FcH13rGVEfwbPA9R+zQoOO4f3jQy0GBLotSkkkZjjL7zonmy53n3XiVJysNcEbdlYGhH2Tmxy0oaFok4Drfv1XOn/cRX5qKqeOwhjMTbevcuZuSe3eEDPhT9rGnrs9Q5cVb5jnKsEuZ3wKYjpkM4MuwQdbGQp0hLXhiHuBUoirBWsFLsQK7mZMet5htheRm+QA/8ZOWnrqFHd18QmsTNYKO26EaLPv/eG/J+8DMiibCIcD3evEGNZ9szbDd74ANwDOU/zSrXX1taBupCA+Lv0dpv+lryKhFL0g3nQqFAaeoY+KSk78umY7ifNtJVGSz5p/BAApce89+wr/pl2T+3wtAyjQcUw/Q2RPGm1Edb9VJyLzbqovacMgpOy1JH5yrIYhtV9ltTZ/uFRoCZIEMhs6gEpnm1G7jKI+Quy7EA0kZ3fae3SmPK9HEKNJzggwTQYpyCfBWzLQq2FFyQexOXxiBBx+97QxJ9treo+cUQZoX99t+PqcSrfxU4R9wtgc9h/dnuoufairKZENlIFvHdb18aifc2/DyfV9l5d+QeS9ity3nDprnKNZlcteYbhUXsZeh2cwA7k1nsvFDhip3pLsEYuaKVq3PC7WEHi7tK1CVN0FVZ/2pj9HIbLrIHBig8A2YVrUieZnALl5YO7wpp/oZmwU7G8ayDb9YOabEc+g+TTOvOCrfA5ihWKfWYezztVyjlrg9wkKq7dN8SQ9b1z7cNJb2YJy5fWlF54KMaoN8xMOIrvPrDCi07V1tIcJrBx2oYPVhY8ynH/qYs0qBglWNqmvSy0a+Bk1jdiDM9kYPgiUY3JT6IOM3v/IwZ5l91XNCbJZHUq7cWnyth37IGSNts+O6dJF30Kiht1A0sab9lYsaJNursVd0+4yNASb/zD0fohoknZJH7usiuTrbWraVL/PjUQYZtOEpQOJMf874erpCyXB20fKfFKESnbIz5bFdTCOVGrWOW/6w+5ujSUcnb0RC9Q8IyxwpxfnDCuu3vOSBhi6stiq7+AL8eGkfSnaQJ+MrUN9yM2hxZtpUq4T+vxtOXmpBDL42Fy9/urqHECyamFoiOBzCLJWjMXjZamq3WtIBCN5/VWVb4qGJqddFyERlfC3hHec7YJVirayEbtO89UsQq7NQqmsPVkwbYBEOolSPH1qtsSLIC9QTtccMThZ8P3lGEltIVXqDJwUNnYKFyAZkt9dRBFjf8sQYBoI2vegmU/YlKaUNaldPTNHvnU8FRQT8L9QCy3AHDrngKkt/Kua/o1/gEeT+64DOO2OfHZML6L/sj3J8/FR+BaFMqYbewosS0w/uvNzHH950NHOlq9l4YL9r/hJDFpiL6KvWdNEDZWb9GO7PKR4sh7ji77sPRvZkS8UpbZPC7qmMP9Zos9rcnlsyZJTav8R8OAMLUkEe/P2E5ijRGwInrwlGHR/q9oA0R9Ae/wrLyhS0JgRSLYGkDLK+u7ET5ra/QD8UOFwVNlSIK268aC5naoAqDY7loD8Ey5cygVWdPRv13TmrIgnZlnxV/jA66XpjuZjwttIXpUMqCIt7NlvLWYCNj4TF5MBM92cP14yxYIv12gFqkjQp76PkpVLrQJjLGR4crjmlcKydt4h2zaQINyjtRLIwhmyKytjeWLKbydsQQGJtYkQ3kAAAAA');
