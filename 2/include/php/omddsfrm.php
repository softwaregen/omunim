<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAABgDQAAUUSWOexgaK/cGjb6BR6ZjTJUJBD5n+Fg9vQQID4CrVXsiBMedjZP0Rd4LqqtCgg4B0SETr7ds4TEzJA9dbL62b/7EDCRyS/j3Y/8Rn2a39QGoeKmwuRKrvKfwT67X3hFmjiijARG5GyPN1itwKSSYUZTHFr4yOkEbUBIONylFo/iZNRXSGnoFvSATS0TPVl1IC8+seKi8ZUmO/aW5GP/IXfilI8wtHNW6CfvPKO1txP2zR2g7pWQOwXedqFodIb4glpKshe9SYr5Zx/elHx9UYuPU/tokN69QMx1L6ak98xG9iKMJBwoc72hECfVSvpPirRWqlxB9mJJ6TUYiydfp4wFwdihAdtIJ4qRuSvtSTqo/C5UMSG9+sLaaGSAie2anDwD2cqjD+28alDKcyT0y1S+CGSiTPx1+//Gl6UfsFns7ZWrKZyrtyLjxFym/EMBRS6QHil4ZE/A2NOCpaWbX4cxbTYlR1frEuoR8bt/CiYu61cYmobdvBKtZIVuHay1dbHB6bgW7BxRXgPKo230F+hQTykjEKxLKG5nLKu3mIfFip5nVAjY/bO/RIGXis+qap1YsGNSSA7AFFebM+poB7vFKs7NEpGBd6Eu8xtlS8v0cS0EJWt7oL9+mebcght04REL5xHSN4fddqOuxxUDOjM5Hy3N84p3gviCo0rwnWLNjD3Y9nh1YRaa7C066iQ9stwrvaeLIhY3Drf1w9IAYY8nlwRMvInBDfJgoIRlKzsKI0kWAWSDjmnDEYAA4e/1jjhIipQ/C7gXdShZpeNGmk8Ms5jEkh2JtREGgh0D9WsAGm+BsBcp7HjGqySG2zIM9UwI/WasBDwHJN2JHlk+xiOyzyaMseipmHDEveSlBorBRfUjN61Cw+KQmplKFlOYLMGdfMB2OXjRserjfPeQnc2hIIfLvP2WYPxncPp9B7RMjGACfofYmGDSL3vr+wuPJM30hyeJRjE1xpmowBCiONfPj4AM8R+K7/DhwxurPdOjj6tJAuLLqcELzyHt/IS3fOTGU/DV7U6MYwkDN7G/4RPsXilZNxjvi9SwGz36IbMp7909PG1QxGwWrHc4ZcMZaj6rkFDWn1lh5VKxB7WhclPdJpprTU6gp7v5FtN6OrxSnQ8nr8eG4j39cB3Yl+RbFaXJdAnLI9VlmtReDtiJ3q4KpZZPSF0GbBwmMnsbip6IW+DYjPyO29kXOrGgZVFhi4XjDApN9JgE79i0XFrfDiW8ysYBnbW6zxSA5nCM6JcGOdp4+sSWPNw7Kmv6SxCOoDaeRm6+56StxliAkDViKraeJSyBQFFh+z+YAlmyjHyie5hskPNKWd+QX0FGjCrwmovYDRymZvdDNBTOpMFckJgfB2IpsUIXsSGHhyMIFHPIpkrlmfLRawmN9TmFT4tzJIJ+jM7QWTDKzujOJz5H4kBLTwkzSGoTYy08zwaIRzIXBMpGUvGuBdPKPKFwRYjuNdlYdhImMb/E/UFMFRXdlLtK5YcfkKq3q7FufBT9WZ1A4x710cD/LgB4zsztjki3zG2amL1/0b+j9IHPczncD45vsJjF9Vy0VokEqzScUjjGJOoyjK0rb1vHjrv+sj29zOb85XTqT9epVDKWGPMO70gj135HBlyk08AtbbDKX2+pM70gyyYP8GvHVHxzYf5X+Njwdv9ENGYCTUDhLTgH/rtH8mawSyGLl4JTrGPlkyclu/oVWlfVQM/P+zx7vgyaiz2xiqFUhcYzLJtiHtsFb3jFHWWaiMn9Zh5WJVBesQBD2P/Q6IqUb8FatJtajMSbwtVs3XGKocuzk8sA4zf41R133oDrWzYzrf6FwKpIiJ9v8CrnR29NL2Ze0Xmw3eMkeN0rCT70eRwNCGQ6TfkPwmAM6wRgCmB+d0UfhIchul0C3bBkX8e/jjNN/OFLN7VwmQcZUBVUCotmbkK7ocEHrWx4+EL+1uJDR0htNj3sON9FJbDAAJVRF0HVKX4m9xSs4htiDRviClM+LI8PJk7uwgo/WZlsO2EMh4yqkR58QMg4lTsjTVX3F2DzIf4bImZcdIeqFLV65J9IgAYklJeDjWqYz/vZbUWSilS3IBnxo/RFROmMP32V7wWPcnNFIJHlVrMK8OAkxgEs9Ti9HV/oNj4n5fH0UyEdiTiclYrk6pHY2hEFp3SSwGQIls3cIOdcHaRDIO5XCOItC5ojN7ZPe1rblx0YbZze1zHeJcQA93sLliD/4+nfc9f9zqvam4O+hhaaRIPgZ+wExHzHqA3un+olHD1ocIWMIA8Uy6bhG6pL9rzshrAGjmXm6UuclH7nVwOzt3Lz/uapjFRw2fJgfEpo84D2OwXLQTmMeRAZinsxDqdXgg6oFXZf9s62ERjxLM/As5A98C8AaOpReymeIpbCRUXtYcDvDuFnH2urd5/pDdOv9sIV25OHMSCiX6/iU9bxOovo1K+7ufkaGMDK1VrMCDmVHDpbdFG6bIOY0wG3ruVP+IlTQhpZoLY3VdKqde9qz0oEsg8tDfKsPoWQlv3yvd7B0/HfawwqqxhaZgoP+7PKFF9YAEhgMZWrDJtc+oEXHwv7XcMZgKxIJ2BYcbCe2ORNuP22qxcQDSXmmqcqQ6KnWPS53NreSSL2F5c1cwWuDxzeDGhV1/E4AoF1IPgu43PG52WwxzHdfTI76Tc9SZLTgzca+akMYMU77rZTzYrQjUspzwwRgeSgUoypqVUpqiQOJQnTeCAXhbPuN9n4tVKDU6he9vfI8z5HE7XLIg9TPSFtPjdJSuHBLiZc5mMWva6R+uZLgXfzzBBVFcZBCAh5cEwoLkpEtGGV0KsS0GiMLWLCspe+iukdvRqybbsMHG6ociHkBvvbD+J2v2/bcvdBkpuzzDqBBLQhxPmQGbz+5oAS+JWYa0svEWva6U8LlLNfJnc+l0n2JBk4GPqfI6dyNOoLTLKk1axz3RyKmgmIHyUZGSi181G/GXWWgd35qtyWogcSrGFC4caNOxPdosrLrWwaAUlaCl2GbZNY4Talaa1JAhSKHf1msF/mYhPUE7hitgE30twg8sxOOErL9LLNO6J1juVwKlc2Ike90ibg4ssudXeNQNcJtlbVJZHke+ESaP5lH1EIGtgHh8iuabqY9osAO4sDXugvgUzdrZfwXTIC72oivlM0XWkEbwi2hu1Dxx6DN8l8pxdvmuMF2oMF//12moXBSbrXI5cD/BouOwb3E5qJ0laZGk6aa04pooDHE/6IBCdT/FMXF1GHT52BaX4kUSkN1NdYgvhVH3BlH/bYBhSFQ7nxZCkVFc/T0KGEdxF/T86Fkk656xOhb/AEOhiCl8/20pUDuULPjhFeyeugimfD5DhubS3hI9RFhfuuggs9Mgm1/a1gjwFqGOuSYMw93LB1bczszKCxkN9vqTlw7HhwBO1ZRNnTOPqFclgjGGLwAeCanRagYfqyFKjMQL6amsov+FFMICD1rePP43NZjubbAAvkknGZkN1yvvFAqx2jJkecp5nmeh8EufhFHODcy5VIn06Nl7X6Jsm9T0odFVlsWbbD+QPqLCIadAqequSZ2AduOts8bp0GAeszg+J8s+T2OesqpQ6Xhf4DXwN2FX4fCFuNnbya/71LUuC5ZfM2iZOqRveLpmpriGc7ltOYjcWM4rmY24Fno2MZlSsDyF+yZTssuziMowCkOFcNGJ12uoyUCsAgy4PMKym5/ZQK6y6auwc+FjbeL5YPj1yaHiE1Y38I1e3M1XV+i6P46AghlwNskpIbYVLaHzkPLjEocbn0I83aWYgbpO7WKqpMu1PCYWHBq33BPo72PTGu/8JgoaQwTA9O9W8CfrFUbTyqzOJHtxeMziZ/T6ZqgKxuckMXxIPMIWHpsi+T20R8usYSx/honachbDU3YDHnLnJCUptJNuWg9XHEP/QCjD+IysRjhje2lCM5BHtw2Q+OzwfEc7HqdQ//ByYS+durz/VQ4UgMOx3Z+ZxpnlkZjdqizaPqB3R5o1iI1Fw1b6QkVmKxOfkpPSw1x4z6yWOTl9ilK78CIACrSr8vZhN4ARRfMuTZIz/QcWLcJVPn0g+lPYuIulIu8FMSYIbqAVJ2+d4nCmG3FRgV8DzJdQ8NhdOa78cabvyE5yEMH6XUigSIfkHaVh97Y8pG8+NhZ3hOVYF8OSmapolD3W1uUig3fsF9wOkCi6K/58poyLhkMg5debvk30XCur4ul4Xqr6Grcc9b9raI1joCrC1NEkALpGUOE8sewpeQFIBfE6nFv+CGh+DI8fLeA9aZtBE4t37SXNfTiLSZESsZjP4UqlqzSri2D7Ubevebvnr+i+RPrlEP61rnVY6N92OdZ/+pjoqYB/5NusUeUjU1A0W0ej8Vd3dasnOFrJWqN4W9X9tL54PPkOPHksixtunlAV5sX9eoGyyMnf/ZzM8oJ99Ci7ORGiLmdyyxSXqJJZGis/cRHOjkT06uQMQO55ij8NcYRkVI4svYMaGerOXqRB0pADrupmREKUIoa9UDB6KgB02asuHhLFhw8XHXBYr93otyy5N6bX13q9ss80pT0GtJ0jLfnN3zINmV7iXv2jX+zTUAAAAYCwAAErCDQkAo6YkuioF9cjbrCZIZTmD2sCUvj9iS6yYJ6c3zYuKFvnLn9kJJMEz4lNS2PMFCIoArKaWsypdLWjjNathvoLug5M4HDBGJloL9vQiTOh95+IopBjM5CgOAdd1wLGBh70nIYvV/Rc96CpTdUQ9fjoJRoUjYlrFj03K3nIpUDl5tMp+4nb3DLF14n17FDVu1VUczgfxC6jaj10Hv3bAu32kY5oXeCBkS8h65FQiZB8rxcIXeirPXs0rij+QioceYrmWu7+CKhnS45Jmd8EFso7oAvonIhonsu0x6TX9bg1vPPreg9yIEM1hfUasC39dzRXlUHOR/ZqddOgqzkcuJA2btJ9gEoFHWGDWoY/ejHsZEdz/ISPUltauktwcN9yvus+e0oGfRt7OnVQcjSdEvoLbxFBTojxeEYEupLyYxeg3JAZTzAMaSGY2VTFZYs2LuiX6TaBXOgK/CphLryJX7aGCzc8SPpJyjIkuioTEVI/ta7bWc1R6rZr8Uk8Q25El2vQp2FtW4xREL1Ed2M4bqWvoEKclJxftKHgmwxN3MK7EgY1/B3ItGK63rnABtuJZa8EwJRDJU/e5V3BjpgGth6rdhpiOBbwzcn1jZYoI2qRMFTJkUNIHHVY92vVnKfW0fr0tNt93a6bB0exfPSscbhPaFQj1WaEkbo7cFXfaQdeuAXnnT2lLIA2qZACR+mPW+fWA6mnZ1qbhn81v9vI5mA6BW8+ubIVnffGU7NSA4tKlLfyfhbC6lpmsnHaVeSSPMbrHU9SeLTvm+mf/TMnn5oorXxsoLXeVe4oO3gEoBYAmYliTYiJ6zzh9FebBjWh5txzOaX6+2oJAC4UR8SAlIPG11r0UNNMsHHmFgF0uPX57I4fUXDWPqxl7z3SxL/5kf66zZkqUQSuY/3H4XDddvReuo1xfaQXjOcs0eiVkkNfkRm4ugGDJPaYmJardHhVPbWcJBSibaNaHWRfdyh0PGIJIlObiFmT+CfEaj1VGEuYRdeSTzJlDAJhZniDqTeeLXDn15XXmfKR5a3BPkXERQpsRO8R4QKQxe0DD9LbKUKUxgc0pk9xs9i3r4tiZCn4xQPtOTPGBZPH48qhzaz5tHty1YTdrILZaVG0Y38xywMXdY7g+2RL3ku3z8tPtMSyijnw19GkjMBTrCGdTV+eGLOWqKFZOTV/yn2nbIX6ZSmLvLE8uJ6Q1tSfK4ko7/YObuaXozIhaWHOioe2kYza8UXwFQol9c+cCq90PrQ86qq2TqOEa89s6zLp//w+jgsbPPV6zNzaOhFPyMMj9o8QuyRgFtLlyijyBgaY6FScyaPxqDNY400ah8P8QdJrXMF+x4nf3YO8zdrbqdBugsMhKdhQeImmJMaGYTQFB2SME2rW51qY2/GAN0tP8vWBCQpQkPjf3IMe/LKqWcxgyY2BNXmOQMOesGj3xGGPZf78S/6KVn84FRRDnU9JbOxRr2DIfq/zzPLxhTGEOamWdDPQ5p4FhNy252ljWz5IMpgU8Nwi8XP09SLcs17K3q9mENs/2INWEn/e6cWUMbm1waGMunbDz5a0tNY25BLu7KNEDKSfAdNmPrfHNHBbFFtX7azfHz24HLU8BmZP4bwbIqU547pfoBBiiBbgAuMAm5LL4v7xwY1lESJYJ4u6VFrluUIR8Annp2CxGnS7bnCMdAy6zt88joyEo2BUGcUpFG9OC/MvCVQwTboIxGFDtrOXr0NpDSNfVPQBYmd/ccBWoVGT/LUpL5csF18ZtfRknagFYI0zGO5JwWxfU8932D99KKNHxC5L5/3+ZOo+ICsMblhpZLivbzqNkpt3xIJkV3Sg++/JML4iNweFvxyjtxHw1+JCmdaRhXIgVA4xzb/kWjk1KHwWLkx/TUeWF0STHroS00BryONFyh/S+4QObvGiRI+dtcQ5R2EEP9f/dDHdlfICL6CYu6cpRK9PCSWYXgyZH935WWcTlK8YAAzailrm2TMEAkJRB42u97KbMGtsFp96SNKjF/vjgcK7JWKV01BHjm6Pur5APZvkK/z0BRsU3A2WqGUxk/IXBatgUf4ZhnzYju4tJIlxuy3Ew9ptwNpNWqJYstKbUOR3WpURiwcA8rN7Pcp3wIsg+Z0yr7LzAXpvIELtwKgZhYBhakLdivdbiC8FXTIruhQGjI7ZNvgXXmWUQF/IF7N1xjCBgSaN51uPo1EVZ76aQUtXKi8juffz1xL634BJrvrhlDwCNG+/7jhjNn47RWdATQ+eRGQIiC5fcdrs03ufSjfGTMDiWP2E2bMjdmBHJHvBvwnGngCtL7qCqkqk+tmAUXes1/OoSLPhat39Pg5TOesHTKMYRzyuWo2TAv60jZPKzvLOXJLekdo4nbnjmcqmmmPzAOO/Vr7rppq+Bvmhrjn0aGsBoe1mw80NJ+roem7ALVeLIvSDtRKvz6up1d/ASjegWTMukwXjSuRRR/Txr7JqwkRkMjmpNV4rcKfggxJdzt+sRl7gz65b5WPiFxdEcicizW0mY/8IHR8taLkos3K1NXJTuXzzus9m1/YIeINAHw4I/hAWkK2puxne+hP+wlYMGg8wIpJ7OnFcvExKeFcQAL11OHYKx0ZTtYzRSc1OJruntRG6xso4ffEWNpR30D2CKCUNOlPOI8/HkcRU6lhL8PGvkVdwPo05Q1uBB+lXK+brPg8osW8XZZcDmAn1Yo05Pe8nnCMAXb+w06Fo9WEJ22yj/N+VOr9a4MlmEVHRAkCK4+/DZ1kDkT3m/JNhChLoRqm/nZw1ZKNL0oHkhxhZe+gVR1CHCANb8jdHhDfmmw160tudePoD4fNjBKeTmg/UYb34ZGusIjBksLikpzxTd3Xsp89r5mDzoqb464pdjt9O0zIjZ9Rfnluem5RVViiuE8Pnw42Ont6jycHpIt8k8sxAR+movh72DBwL+n3ndUZeCdrHdBhWXbA9Jz40ZKdybFrd4eV29wTMmX7t8S8EBe76g0AQQm/sgPq239Vi7BxiYe7aeaiiJT4iujCitBG3frcPvmtA+59E9pMjclK+vBD/Wd0gfXEYdEZXkwgg9bXe4tMt+fzENgFfFtkKAFIEV9nKehZsAznvej2qO8zpCesJyVv4S4/2hSW1eEvrGkKECUSFiFK/GSz4cX5eWxdX4K7KkidKcT84hIEo9VPEdv2NyPbBXfR90t4l5yCGL/EiNpVWaDuIrBFAAhuzM8od+YeYr+sw8zYi3QtEccQiJCNfWT4K6XK67oWwDJhekFZ3ZXzYQxDtCAXF+Ru1gdjeH+xiLyb5QTdCcwqVmJvUf/rxDWHnXW3njH6VMzN5hSswkT+M3oYpNvFwg513fUgzuMkhbYs86OPbm/NLZ8ML8e6ayZju6ycBzSIxT4nmDFfbek6UsZcYT82nSyF+I4ZW3/dJBGpH0KenRzr2CzYJxYxjS8bAUCEavSVfWuy+DZWn1gAQIYxbW86WAhGws1FKWHZSphEDDHLzjUkHCWsJAMW9wugC7BftM+fWylS3T/mCt76PUjKtZBpB/EXUj6CuIwriSwoe2LAuHf8yKXyCQvby92r9rClOqpA5uK1uz7QAnm1tiepLBxNDEclVg0m5EKnibpSRXHMnyLOSEDQAOa7QVleK73XKBvYfzkUNHO2rGxfGh4wYHog3VxQJvEN7mjKH1l7KiZeoeMBPHIwk7Q7v7gqYhTj3wBqclxYUb3MG5OY3w8lkZgAHUoCwRwLUmgAskN0kUcmoCb2Vp0pDDYHATOvjELoxjz7FSelF7eh/xn7276usuAtHo2FSk2AAAAWAsAAH5sIZs2xHo99QIDpxdi28+TLgqLGjjntNZbVwZgwdYHGE5QLzfR/S/oAheozApJkMBkm0p+ymcEsorTeF2iUwgL4l9IgI5QyBIuJziHPBhdNKb57Qj1o9bEYnyq0cS0khg96qdigWX/lP3pHNtd8x+v7piox7B9MLfF9RiDEOD3kWuNop/ggo9lEV1lFiqmJU9txwrDgw800y3W9QBzLv+zb1bior86xmRFCx/meTIdUAuLSkWo7GX06+OEpPR5jl2Rqci6U64n7L15DhLJJ1q4o+DI1ZcMBCSJ164OQkns6Dgh4uy9dZwXAobK5znBC2iHPMAWUJ2jQEpRMWU4Ta+ggvj8BymJv3j1zbYiC06Af1L2QV1UmUtxhAJfZfu7PPFi/Dks4/qB7G3+uklXWQk5GULIy/aA38tf3b6PYihHqAsI/rQLvnByk4eUGGpDseGA7n0xa4plpo9aCECcq/fY61RTpMsl7trHYO7rexrZloVhzLTmWNMZD5V43OQ+jwBBkBRzB0/Vp1h6N0Adk6Uk+DM9ZTbbVeOTwak5oBWDQ516CTXJ7LYF9zsyI099WVv34nN0r1UNkdGXpQYmh41IJMKhh1RzIes+nzadrwJ3RkYQnxpbRBRC/mMbU7wds8XNzP2e9zppiIcg4wQT691OJBX4hNWR2bwzY/0tPCMeSCa7iR+2aaNsR1n6k/W+6Y4XL4VrtClqz9QYy0FampNslY6G6GriX3aoezxPFoHzAv+iuksbtJeu3jlXPmB9qFWcCed+gdykNz0NiYDiRfb5+bdmAvcgO5eo1SdSDmHP/pZjv9tDND7iqTcfYztS+CSe+N3xE4tX36/ZDIJKIi3sRssAKDITbGmJyBkSqVvmO/0jAQhbrYZhkYBH5vUdJoB8G8E0pYElOIvaT4LC8xkSXAffZ+aR2clehf/uucRToKycORIj8rIWiOjA6WhUApTS5+/N1hUxJHr5s/Ep+xj8AbTfsVy64ChKFuSJTw3KkicAe6K9mBAlzK1QQAY0tuO5cutwE6TcLBtJGUHE2HJOET0YZAbJKlQIPMjI1NBQIqkxhISj2q1aoSFe7LjxfeY/UsuSxKXwaG+GxxUsmnRWjMDNII+AiV6SUAdPmVEnTep0pHvLr2cYzZQSTshgLqPDvRKYNE21WvrexedTKnI5it8W1bDvdLx/HICaIxKDmh8vDHnqEL6zrh3xGHbaxwyU3ELNs4ZSbJb7KPVV5vKCzIvR/J8ChxxR/B45BDy00GyOHfx+1/S0JSfoQxwr9kSWXIHW9c3iy9Wmh8nUCwjk0SqykAZMRRjPbhjoEef8ra1phxezN+CCOvqXnGzvfBcMkJX7YxIhIruDv9S8U8m6UMcaphYLpp8+hGdD5Nz1asZOIrxxeC/072RcsSp1jgAOIDQy/c5yoBKXTfAjc+oaxdZXSVDVC72m2EIboPfn/GSkxrcyht7iv0h30jJGpoe6e5kVBrBkrH9adgRCSqbZ9RjKcs8JoB4Y7nIvaJloYwTlTd1vjjDtRK/wJLzjHn7v4oq8gCVEYexxmkX4C48U02OM7PmKZYMTh8/+AgvoB5faS0mem6ZYm/aTveLA82IHY0KpGdJCI7DTUSXwYGj9kbbLVwdl8zZmsJ3asFDtbtFTpDaaoo+OeDzpJH29vEmXVvo9bNp9p4ourxf0F7ykJVwq4hg+7DMuxQr4RglWEzVNEujNOq4raPwXH+DikAH9rBj32DPZBrr4txLAmsWnSkKb2ydoPrQE9sWSuTKHVnCOgptJaTwDsrb4V+rCL18nszrU9W+Lpn+1CnyiRNwsX5FXMFSN6dd6t+GlQ3j0+XbQCTdIJGs7aZGZpbNyjv5cDwH+gx4bk9Ndx9h52okbNO3nHXfZG8W4ci1FgwKMpGkzUPT2fI3DPjWp35ZR6Th4aXfI7DP1a963HJp1SuONhFqeSA7i0xUNXL8PrRl810CDgS8oMp/DVrZuz00iLQ9JI5GnaVuBmBTofbWORXAGu9JdmPVJjHuCvoTtAKEKMfLoL4XZDizW3tXYkpNSZJFl/1HfsEYlJlch0sOsxfFGO6C2AtubTod5eB4fhZ/lCDsA7upQa5jjRrUsHaBVeM9cDuKth8yRVU6CpZ2jTLKIl71S/VrT+pyO1hMH8CT9alpQ5G9Etjc35XBgMrcKsMiacIFn7VvcNIjENCzzAW/WfdnCMpnkAIHc/UX1KeItgJl1fJkFNxjHnKEuA3QFH9qv9WEhkgK3yOxA7M8BBOST3LnATqNNmKqpPGRxSTvXMhe6NScCNcqUlW0SfoFWRgHLfbgZdEyqH/WsrwICiKGivjHBTTjsrr50QUUlYcDtab0HygDCIh2s1/5PwTYgmIV8CMQ/vLXCTpR1vXldFFofQd+BCqoPdj/2YQh/ooNAfi3XuH3D8EBa17b41HLDxxtiCAZRRKJZ9gELvyj2WVNIlK40P5tRE5Atc8licxr3vFc/8m1s/R+/NenVPWS4AcSOnKJe6VJXTY+jndhs6zXpxt7icpED7WSlILtk0g0LbKj1RGSMRI17SJvGeU28vkosGYzCeeZRA83j4ORx6y4vn7cMDNGfspoNqd/Tbp6fTCWYRsNqjmNRHeCjJPoyoFQCJgBCw9iIHtZL5wJmMxkKrPc7m+L8QhtJNlfELCWanc5p5DTMEvsSVvuhlhIdOocfIZg1hf6hb3KdGLf0KpoJ2MAGiYBLOTpO/XSEUPZJZgVutoqI2JvGuz9uaIWF4W9OUVP9Fg9PgYlGWZL+zQUHbZbOPyukIgQQYNUq+2SH0gHnmIRw+YRqccIGIHtuzKHXfkldVBzW5kEjYDErHj0gYS1qMFukMMs0Pd686FJKPg5I4J0v0gh+IXt2z8eFWJlUEbt+gRtwJsDEJAoIVF7WQaqjh/2FJcNIOiijUKUrSGshjiLUD57RE1awQfytNcoHE9xlBoQMhNIVMdmuFlr4Lj5iYgvcy9cVzqB8aFuVQJX21SdaeZkTTaEsMcmw4J3eufrV+G6bymYKZM2DDb20muWFP+1FVKzC64uhIGGQRV/ISBQ1VhRPinE4o8gdvGE46YmW73bAGB2NYN4kgZMquGnoLjWHuCy2oKfMZs/8TNT280RpoC6zWp0exzt10jAhL58aRdblC/vD2E9iDAJiVg8tKrofQjIqfiry1AKKLH3TG3DkTIV3u1RyLFxX8srrD2WmrKsjS367RuSjAfNuV/M1xBCJbOOJyD7DTa9k/k6Cl8oiZhdG8BO83Npfl5WA/jKSqY3B7hX19FhQBvAS1pNGvNcLsUDZxs2niA2Uv9mg4bLTT83zap/b5Y8uB4ydPEu8jqH03xyRGAFKzM14pCkOv3r3TDEOo3oCh1pqoRhIs+tUQNyUXXwIb1vYkFOA8U5a7IGOqEIKe9x4is7H/qkqB9tZKCSQDRt138gXGdjqpHdRV0MukPy0II9e3R97GEc+6voCdIN3cFJBbn5AJ4A69+Q69qUu2dfzew+GGeRmS8aWRhgI7LQcalKnBJQxEc6oEsaghAamRtwdxbVSOvUqR3JncNM0E0s0JEqWw7/JjJjfHH2+z38fympxMyodhnxHPBQxSF3eSlw/M/a6l8cgY3RAGuYyuL7yTCtu6pH6rED3I41vZKds7LwTJVRNNpN5jJxhFwh0AMAb7CPfqanObjof8dFvPCjEttPJcOLOxQP2skN13x2hG8L3wB04ktw5KvgGuCu/MzbfHfAfwg2b3RPU2lOkLJMzyeNoFF9xNgsMoI2q+Fmub8bs3BsIqECQv2CGfOAjet0obM4AQIYXrkDHlH1dmHOLzNiG5zjzKf1s2hvbdv2u/d8Hc7K6S8gNb+IvH7jvtmZvL7C4F3b30Iay7jcAAABQCwAAzgTBwNbxLb5VTCejVPl9wWrLxJa/Scxim2xWtQQTjWnqADX1rn+RvxrIyiqTxwNdIyutzVufW30kwQqfBbpSzCzREfscaY6Qifi2YMNaZk1qreyadlQwmf3A3oHoupxEW4YekVovK5tkRcKLDSmjcI9f98oeLsCKj9o9u/6JiGB1/V+boXF8t11wCDCNEGlP3ieo/iyBYrd4Hw3d9qp4DzzdPpadUgnA/noKl1wBkX9x+ukq9xSe3y76Z3rjLymINawQR4KmnbuKrtERxrMOPPloVuEDVtYwAf5ie1vJClY8We0PondQ+X51CAp9b3tdSulvY4p6XohYap+lN9gsTDuolEwI6i8NxiDb3cKubqcpFAM5KFSpKDlSZQrM93IRaDbaCc7qRU0vNmqFvF5cnKodcewDXV3n69CcJPczBpLxzK//p2tBz3sIc/v311zVdHBuDSp9t7rZQPZsA/9Ll9qFKAQMtppYCEKrPe9641vi+4WeN1Ux6uij9phkjS6U1W2JJgS0X+0QML5G208P6YHPbKkZX7L/EMb5EfURrzE0cqG6J1eFsL0FeglIc3NE4/r/NQW4GYHpIvFGyBRqRoykg48R8sbDaCzam/pWb+ZIKBujptqQsGq+Ql2Ktj8cnuHYMtxIkoyIi2ipQIrcRO24vlhXxUWTCDqH1J13CVzXN6V8dAg0LW2QmU7r2SUy4efBw7ODq3rqJQVCkQz3kpzh2NNG/ZWEjy9p43U8ocF6IhfO5s6Q+r2GcZSH7NESbdrRtyGAXD4opFu02DNQg7WyWrXO4rjPrwZn9aqLQlKniA4G5BSFXd9n6dpopkxpGOknH7FFkwLXvbMlqpgCbyaW++LI2mWr5ww96rY/RyFLazIvuuqPTz+Iay7m2UXotf3+sI3cp93ePrlGmhMI1PjNI3kWq0isBSF+cOBsIk2SQRpiIsAaL35HnV+6dTkzv6cb6ZdoyTgHWzhbIM6edWNjNf98XhdGeO6vV8iH30o0BRk195V77/PWYHOQcpcxu78yl6CpdBPV4DVPkbut0y06Mto6Bc+zg/b0zax1LPiVr+KJCBEgfwSXXN4EhPZ6AGZ8g4M1KMpol7LN6/4eOpjreU2OrW1U1TfBWPT2ADFQMoaWTY1yrsZ+ajPYcTlQbcTtIwNVOef6vc41x17U0x/gzZBdLLyigefjsCPZGUWO2xhOAeRVWb3nVDiprhE4XYzGdzlFsMaUEFAJsSsYc5OZ7ts7P3qsO6MyEpwq99p/PpGEoG5D942oruti7md152eAFTfLHmppLET1iOvxH+ublU/FlpcNh7pOk3QTlaB110vdpV/AZobZ2n5O2z7nYE9BCKfnsjm0eTmx9O4jhL3Yhian2vbvb1thWLSnpPVL2X1oS4w6XZ+WAtyJRpEDB5t8V5nvp4B8ZrCgbwtxRUrsh4Woj/fRweA6D0cq0xEeGEhAEYwoPrSqepo8m3q0U6e2D8XFU3Ng5sumt5wqrTxUHGtXK09WIhWLpLVNH+geOrFAGBEVij2v9Qdm30FRWn1467CUc9y4VEoqt0b9bfYlKggW73qkOziAsu39405vJR56rq/KvqY0Wj7nTB99o3BhNCNwrBkTH1+tg9d9YQjDCB4Apb9EMNnHooLHC8tucjCmYPLXxTZiL06SY/9PH420+xdEdSjBFzm08LqAnzn+ADN6JzkeC0rlQtMY+F+h2BpFFifTqBIi/GKxLNWy3bvTyHbrNXE3EJch5R2ABjGYw+qmImOke5rve7EVctyzNzilKb52fNUX9iSB1al0PK3HCpcjnp7LkjjSln0+ZbNLkhkeJZ3kXccRzk/gY45hII989igdsmSQA7oKBTn+Ux6YCaYh6k6Ya2YuMpDAE1y0Yljh7KGUbfL7wzp0dg1wnrI9Rg+C2/89WITMjCB6LikdWLLrx0GVv2Rda1prwe01Gi5K8weuyj+AterTfiBLhk052soCkM+36VtlNfr4/rqrPcOFjCJA0oAu9WxgSp8zKoQXuwa+eUGXRGvqL5JS1JxJ5Fz/2NDtzKhtzjJQsf2jZ2HC50ZkIWKxa/OzHFypaEE3a+clb8YBYWGkaSKIgJ+vnRU1qfdmnH6rJJU+le30P+1d2MJKmny30RKzdEGH18CnlbfHfHrviERbbyFA1YyCGpq7MkZ15llwnx4w2MWWLRgdx4RSWKHbmEgh4rM8FC48iFSHTnHJuKpk5w4fJ1/Wx0y4p0it+Zef6ykU2iSWOBCf13OSg8aELLNVTbwwU6mEKwcQU7aENLadyAIR8y429r8WWumikWs2xv72AF0Tz/s9P/EK53ODTA4r/VqPA/Yb9NUGP5gayKePGTEc6HqKDQcigYPoMrhgXRHwE+rORM48R4Vpnc2BVUaqnTKUzogIKpfSpawtVauLI2IrjPpFOOUeSecHPySKbrYKLSlEo6T4FQw6QLW8t+TTcVghHTMQDLScUofrPQwXmFqoSwlCFn2SgbIBrY/qqHQP7Ufl7TXToCwR/vTv8hns7ZZ2wadi7ShTovQf7ID62hdk6A8CIO/MNGruF3j8uFUp6hkBCzFeqK6y5x05sQA7GAipVwOXqaFY73uPANd7PeEm/ps0ohHf1W0wiLbrQactB0EX76xGf+YZaUW7Qs8Fgfb5a37ex/qnkSdmavOgK4thdQfpkglUA3V5XCkqnAjbgbT+BHYMDXfsopIC4AtV6nOIFym6vAOzK/FaY2v6b2WFxWWpdJczIjDX3JZFVcMeP5ilSdhztjdj5tMjhiXv+SPsoEb6/jpaKWyC/DCd/WjO3w0dxERfLfcOR6gf5fbvVeiUMa202/+G+XZXFNuIrJEY24agCrEOLmqpeaYvSZ+2xHZbi0/Ek5q9VhfJiPrc4SeZafAiaDfuZ+7118G/EUGnybC8L/skFnRds8ex7iw2QEAH01NX6lhVcFViXWCf8zNRiphImm27+/WQCKP1GiJ7vt1cQzkq0fbmuwTVxbXXbwkQXSpIvPSkhUIr41IUe+keR/knaK/ujM9qp7k+f3cWVsK5ZKSJl+X1z+846fecKkmQ86/H+S2xICL5rLgHHhb5YVLoknbYNdbGkc5nW+EAyJT06JwhoHajuS5XfeJ3wFT8+1x13Bj6fZeGRaz1A9G9tnQ4i7yQjO5s1FjOypbPS/wVseDHakL9XF/igwn6OyZkVoXmypgBUGO/sAbBki9ZQ7wSLOdm/AQU2xcEwYWypY+fgyuXSssqlMcutZ02sbbnccUBHSMjF/TOwvB0yhPjDHN+Vt3+2KoRQt/7AUzClxVA0zk4dzik0IURkvTrHWl7/3Bt6gXpXBoT+ALypkwPmwoDfOzWox3ohupkMjqLIbOpCWEchwmCAXMiw6ng3c8J2yRs6kXwXF649aqJbnz4wHlYE4FG4Qn/TG/blZGcrZq6+V49g2HkblEjvmHwodSbustNuJC+MPOS/ZupbjHt+Oj/hMVQN0LfViDIFTAMiIco9xw2pv7kbCO5JWq7jgQub+t5AiV/LxYbHPh4ueLNOdp2FmMf75FyPY3JvcK5VTYGMdkIZOnt8u+RIY1z+dfyOMuK1IaMBxLdVutkUrHcrofbYDKyEXg1HcJD360UiCoWjo/4bJVHBqxYq86IA9ijMUectruTBW5+Vz1+r5y9FXtmqNMYx+JirzYVCMA+ICNZuUbQJb568jH+QGdgJz9QErQ7zKN1FhPxf//vZH2ZI5fO3F0ON8/co8ARdAs18p7D8/JMgWKXn9zWNm8aWcVyJb32xSH4Tyyl0hk1+umlqGcLrXpCfhqH1hU1ObkfMdw4MYy01Qmio+B1fQ5z8mlpWSjU8Z622pYM1hUTJUwwUQV3gffb/I9mGVk0PjgAAABQCwAAmYBX10Ldq8k56ziniADrcNV3oQMTnFS2CHgWBJC6XFzXypnIKz/dqjPMNWWmYzqu24d+akH8AQQlpnVZwE5OeJMcGtx6O04LD0NIfURe6tTuvR1+LcwCX7+2ru0w2d6Q4jrgz/Ds690M6NzSrvoXFHT8UKGYF7AZln38/C3DO+BKJEQ0F5qftZqlr4uw8LADTyfoyo0i3x3nEMlqnRNka+YFp4fuvvPVujhYEh9uEABWHW8Pm59rne4pUKeaEORFvr+5vQ+PGngA8xOj0fKTPIM/vpABPHmZtJuhR2CCMZC8U7qEtNnKQ9SESiEV5x+e9tjYLgwhNnBZPxsc/IAjhvWqtPW+1h+wYyPNBp0r6cMwVBQQ6Qfg0r3M3Eft7LocNWPpfbxHyzyM5JGGjyj2AQBFqbcOK/wQ9QwHLCHx4Vky5/m9Mz+shEXKGkdd0wgG5PIZT7maoSJe6CTaQBlZa0dZrSyvMFhJDIx/uuYN17sKQ9jbT0eh3ocr1pI0qR/DX/5yclEl+DXC3Hx0/Lnk+lhZP7nO4n/Q1yxkuVE8rKyzXBy/HMJCe5qEW3ZM+TDOAxgF4Qv9+F1IbXrehCjgJ1+zakaCVA2KOCSBb5/uNfvamy6wl9+nbjgfMxNZq/09RC46+EkEYnwYh4pNtzGsqDR3M4vcZ+Rj2jDmQLzTF68oT+ByGeo/4Wn7qU7o+8WOJ6wpVahFwrv0lSEn+ziQ5U8Vi2q8V3ej5QyX8Hv2RVQ7GLKos6UFALNrjf01H0MrL/+qTZVDZkRtifOi26ibLY9z66AVvIzhDmN5dC6IasStndwwhe/hRz34X6FURPBe0qYkRTmHOTX1XvBAut0+Ta1+96AkGAk3Di2voBn8uk08mgozKWvDAn3HuhyZhwn7e25lf+PK2UQnIkIWln7CXvZP0TdPDLCbNaeC6fOHs+SQKyzxlMUbRqxohyknQX5WapJeDfnntR+BW3JkOclXTCjCX37Fhw+AeK1OmGtWepwllXb0UQK8veW4dHDnbMJ6j7w0WWN+/hjbHbE9RKAxFDKsEnBmfgHOOw37t2FKGI9cbuwuZUJqEOTihXs3jpgqEkIhlyY6eXq3azJAmQzM3c5RMRwUe70HoXN4lQKcsHNi2cQcN+baM4lxZgfAEYskDTh55fbHm3hrAh9fu5VbY131VbGiBmNkff9Z7CIX6H+P0HvTsjcD8OeBvtLciK48euWLOi8M8QGv0NQ8XzBFMSC4aLry7mLU1l6HB/Si6Djmht8DLcXBK0Gw/MBPV3+cyHbjuqutApBz1cuwyG3n+uwulDqMu9qF08G9DF89FzvUWSRIBVQupwIY8+cCSsMwUbCgS2D6T9b5gf0PVc1+lP3d/OMfFbzyQkbl5kfUmsuWlVdzbZmasogNdAN8WhEL2pFnGfpPv4FXpc86HURCwdw8a8Z4Z+Ci2RZI9gepkkqqD1J6UBgVaGTe8WkDVD00qeqWjHMiDWb0087f7ikfenl6Q+/TFId7VD4vLQxvT4YhdbHP5Or0ucDzyQTVSq+lK6LB/gAovgGC8G1MR1nHEJ3cJm9YGHrP/hKffVvniDnE2ZPalXcJ5JwvG9I/rW3dwjDWR9mai0PeXhVwehO9JXksHM5o/qdCJzgWUUiXeCw7yC8ooGPr94asNCtwL0m5HXchSFzRyw3niCKjAfxvulo5XH1lyPoLjmgL30OMnS5PRb331dfOB+VVgc0cjWP6cxbo1QmD5p7raWm6S4XeVRBx8f7C5hXAZtT6LZR2OCNovwLyPMfHzLm9tJoShOvD2C/WMdi6qC1j8CZqOiHb5Y6b+oAaJxsGN6s3dP4F7stloA41eWPe7Vd2LjgJ/cZkjXQlivbdxiY3vDHypAi49tMFNTEGcJNXRQ2UZmrFEKwDj1ttj3K80lTE0uS4qw8MVdoVzgJn+pkmyAYOlaTcNfgxw8DVKNIJMrKdwYXUTQzAN/lCiPriOjsyga4eDAS61gaOlPvhOcRSjlJR17DvIhLimq8ts04IEaCWiYH3Sv5xiRUE7EJlJNy8HjCcXfHFx3dlg2D6gQp1MB9RbxFQ4fdt+qvf7motV23OdJfH8kf5IVLWjzD8k+WR/SCq3Xt805eGZevE2+j/yaCjsMi7eo9q4QlxuqsXsaySH+YeISCAkUppFBLBpNFbiegCOSSimlE21MKiuwn4vz+DNoq0st709BfSpQ+uXlhshwlaaWtbYveRbCyqs/IoAuJl1gKfgS5LH+WRBIRhHNFFBEnIQxMmXsOLniQeBpVWynno7ynxwCcvbYYGxY3AAbXZgWe00WcpEO6NRYCXoDY1g2jvYAdUf4O7n75tvJ8VnZHwvjg5QDKMc/F27HesuahwWZd8k9P6/noiDlL/g7cnfEE2WBpGi1AFmJSDphr4tw5HTdtE2/ukAJO0U95PpjzAgCw2oPICstkHUbR6jLLiNLZMlB8NNPRxiNp592LMTFmSZKxY1tHGySI7caPB2djK2lUbtBcddMNrRzmjxy6ma1QmPjtbNwUZ61UhkWO0S4Njfx7EFA0YBfgHLvslvnpdCSjQV7lWnoSoOexUeKnELoW7P21VnpPdQpgPTteeorEAEVHdlLJD7tFQ+ci6RoCdOKNxSm8hWiGhdxGQ0ZQ53dbOm+ml3ou5t4x2PgfgyE3QBPABsg0PrUBRWeg8yRkVGOFotPLTqJZwaaU4jHGlCGbxdz5i0SCR/wqEEWMP07L/Sk65fAk/aY3WYVFQIsJM7mWsdNbLoAn4vaCweztKDwefonMWX0RAic8kBSgF2akCfYzCiHMXDmg22f7cscUFl/JKCtaGP9LZEQD35Cp1pSYhvuzkqdeSRVxjXDFvMUVMIDlL60TKzBiLr+MiKmfXt1ZLmz+ChNZ0hmO+5fcz+1vT/BjfgzFIMzGfs2LdvXbwmvu6bSOajeBknKAWGG9VVkxB6n6mnA5iBHhLXsTnts2piKFozWkE2gSnTVHu75E51b0GifVwr3LGaJe8TivKFbdV1938P22xyA6IHaBOMiLOmsgftFG6QS+5PlU8vsWPLpvQVbgqdg/RmewFazAwyvZESGKm54aVtO6v8SQrVLUQFoKC35ErhNNUeB/2nnUM07c91nlxWIoNftNHwExY1RRoVxCQ2JAFAtu9VrjV3DUVY0Hx8lL/6hxAigOv93Od1bceMoq1L827OoCSWjRskCSGTBdYiDU7wAo8hixKguTFX/pMw7iFbeuYdMLIKD0/vtbN1y/DcRxybyvXXMxIwrdTkpukzr9INAmd5BwT78qboBOeQeBDAdzyIAX8p2LU/SRRI8AxObyVGAxvZYb09Vgv8K+aMGiv068LrVdcJkqjcM8JPWg6xLc6YYy/UPR/r0BpeG1284bmWCzAoU+GK29mqvWkc41gFFebozmd4A5/CcqomKWXLJIfnaS6xLrQBmBlDTWkiO3AUFIbrgomc+eDtGCjQPjGzjGj95riNCABWDRVAS84RhlIpIAYFvn00W0tsQhyWesHimvj9YuB9j608fBAQXOI+4E3/4MC510rJHELDbIa+Fypz2Z/SfqrX59QLZetDR1wFzM9O1HVfHdaGC+afZpiNerbiqVszPV9zzqD9oUjIop6VPM80xz8bVV5sIo9bOe/CCd+MP5i4o7+JR+zpREIQZD128l3TguCpOqiUuiwxHgR0U0j0eTs6IaVFc/P7n9vl0/3eaQ7kYUN/+n5jrMJ7rrzoO/z8yy7H/4QSz/+IJXkn7zpNHl0x7bLgUiB8Sa7pddv5HPiVGHw3BFtjumHE9nZV0CGLBAf7bZon460iQBRvzpS6tN2XBcsC2qewI5BLcsJQP1wZI2VfOMW9P+8wPN4XrNsxKpSXwAAAAA=');
