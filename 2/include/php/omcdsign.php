<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAAA4BAAAhjgMgQ+S3L2CexU7ZpOeLzKaQT38qMkLwYWM4+TZHE3prsdIzauZ4DaBiY+x0rcp64527SZtdq9UIoXC7gZxI66svFMAUVEyd+fhRSS+14o7Jh4ap794W0wWQcyJmknWYPgz3CcmZQ5mqEd9GiVUX25JM2rFebf2JWopUJYRgBO8wjAM8l2WOy+wrPKRiLme+aoEcQKUBKll1P51nxxilmLuedmQOaFMScxN5uopmajDmwkjRQGnsJwxKDqhVJM7R37UspQOHJzXjItW9eC0FWGUE5I7wCurijggrkVXv8ahvIJ593aGpvKCgZE++5BTQFhtEv0UWs/7E+JTQCZqabZ6Zd5DDFdPdLkmEvyf+h+BcA3jrrbt43OxTkbZG6k5h5l80gwQgDcXBCnK29E+EXGzci/4NwbezCfaJrPirT7WhIogcAfVA7FNeljIdSn1y3fiVgMm+5GcvGFjjSvWvvJT2Gk9u3R/op2KLVa6sTzUBeh7QJMf8gm0Mi2CR7y6pW3NZqKJ324vB7X0Mdcf2jVEyCy1SVyyRGci3KEzvoziHS0cl70icVGD7VVECpKYyVkN09XFEf/1HQNWXp2M+tg5i4hTntRXYKt3oWhloGXGE2/3jFvILmV2OiwG5+esmeBdsQk1N8t3BVi9JjF2ZxKXyjz9od8BE/hdL6Bmr2lv/Xw3dv2hQdnsE9Js0sNxSmbz5PkZdDd7tz3eSjjx1CROdWpACtZDG0uerDBfuP7dSVuLes6pY/Ov45/v6RQL4WLUVq5q61Tdpj7IT6UUAwFg8dryKz0qodHZGZLcHvCdoNA9o6cURqsqq3F6yI5XA+9vvNEKZXEAZjsT78tGiWmJ3HUz3WwNIcYweKOMO90liQQiAwkDMNjoRPjrm2Qhi1s9DXohJXpPH/IUXybSbhCaEEylFK58wkOh4vszP8xDzZyjE2mquRL8hL1dTb8+/UhGzMkej4ZyXpdS8JYKJaF92xrFnS1WiR25X8sfQDvXRUYJmke5n4WBzzxL4t/kjkxYfc7/4f8AXM2JvWzO8y3Ox4bhDhB4c47NBw8k/xXrOHqgxSYJLVquoHsIh3ytjbROdH31knSmB1nEqdFqGgp+eWS46mURnIiC5dpmr8hEQ/kLNG5RTEgMqTBs6dE0vOU69Nj0IuPOV5z/NyboXtAscwvaeiwEpZP7vMu3ZqnGyMbrv7izyjBwlzeCmKhdcWYPUFxaMi9h7xzYDJS8P8kUUzALYA2qOfwQMATCW24DpNw7bDqjkf2qndMIjAhc0lbtIS0Q5WiWWAiw6cxgn5jZXftuYORQvh61xOl52/47vwXjOZ6QSl/qsAN72VN0V0L7uoL9Gv3XZqfv/uUOlcFcHgMjNvfLe6lVibYx9UijzlAbEl/8AYudi7NpSfT6E+LMqNpExTwfcWXkNHlgjg200WpboOenNQAAACgEAAATa/S0zNLjILriR0J+I+rj5wtSxejSXMoyTCnS0wpA3txVf649kQZEYtU933WiSZ7KVKvM9WAo4wMJSjW0ZtPomrmmGoPA52KOA9g1C2rRZVrTIkOuLQctJVs+hkN+anaCFBCPsmIO4ZaDAtb/ZUfe2GiHygCmm0j2ma7eWwgepGJLBWQE1tfJVUsAneJV01tbeFyMHK152nt6CWpDCMxJJUCNHvXzR2H1LbOI+HXLY4x4vFoNeQYXp1J97EHbBeX14KuGWTp7idYHmAlOdmbAnzLuP6mOSB0P5rtUh+L/BKQJ424+Jlnxr8krdFAdGBja/Yp0HkFVQtcQ3OdwZgGLFCy2Yj1O9APkO6Xm7TuPQacM3w4ungzZZsWmVQvAzCSvv/nGVxmXL6rXuMOIIWwIGSf6x9nhwkLMmIWvLNePepuOsT8OybSymZDc89FCrPc+Srmxmn8Y5IDRcheJ873xgBXSbaPuamIHZXtEoxuXPoeMPWMNKSQDcI0I5dKW2aCA4BJAt7/f9o0iQvZ1sD2U3OjNO5YakE+c5dMTYBkBHNpg6Vc+Xy86dzlKCo2C9KvQi3kBAZKU+b/8HnSq+SIf3iCGVGjYAca48QwotDCAzxFDwL/vp4pk8TLql4EH+MS37u8ynvJQajKsyax748AyVvDGwjVy7FKOwZUl8xL6Pj3SjkMdjAaBfBgkn93gO0HvNZKcGHd+PipHco4wdm1vpxkU4JOF6drSDSV7XahXyFiz+OuJLAmNlafS2hjUifp8Oensqz2nm8XdJwDBZrzmqBF5Kt1wSErenI2h2P7wqka9Yce4VOlwsPDePCh3Mgeqrd8ajHi/4zL7dqN87wTy7V0enrw+THVSCsLoqoSVxdnxX5iCfrDagqpad3xoSEJWVkFTimWZvYQ4rhxilrSialN0Ida2xOaiDfe0+O4tPm9Y9DWgVe3tKuwFKK7TZrXBySqm+qGvCz6h/QvZjF70OhdqqK3C0/nXezweOplKPblOpIC2/CmKbuOZf+zkhlmBhSc/I2trZG/+zY/hEokPUSLird8RyNy+iLZERD3lda0jOi5h9nml1GW3jlKKUJWfZOvG6CLBzWIoKf5jbtsHlDXL1lZtUQQikE5WnW5rKJIVsM+OHhoQZlK4Wgoxj60rFTOKSl9CX0AQp9EeBu8lDp3dtMyCptlzBNqO6FgwyH749/hN/R9dFOetINsRmTwyFbk/LGYvOLZWG3egOBdZUdJHvwirb6fxTpx4nasKStX2U7908OfuLh/OvRs43F1XQlfEQLsRoY85QOuWhQ8yOxQnCrosQCU464XZORfxu2xmRIuqe5cKprKD+uPpIMxIqw9x9Y7ApqnY0BrFp9ysCtis3NJ79jlsioIDktmK8Aw8QbSqu9ceSUCiUP85qwIO5NJwzKacKzYAAAA4BAAAxm2UAq3WP/64gFF62lDNAzdepvBV1QPWJhzthJ1ElZuKwYlZFbIpJGREMjiFhHkYkSchXDEBWdzDfSP3k7Rv3rjLF60PXlMpvJiFCeXWyzO2ZWDelwNgOLCNdWjgfDKCJMOaNsa6p4Wa2q1NNkRzon2NmFPM2LPJUH+VhSp96FTcVhCrTRf5fKq3Egce+uPxF0EfbgA8GNuccg4d1gzDt8UL6ni8BNDnKbmPrF9ifeMNafhTAU07VKCPYmwTYnChteucfkeUID7jXtcPS2Q61HGPoQKY1/A8jZoQwHnLGRKTkpB4BkKr0OH4IgMUnUvi24IJGFwxjsHhIt0wYgjDpNB49H3RhxhD8wQM8bTePKdby4fHs8FroH+A1DJxjfBxI1Rfx+bxEa8tYMdkUwvmjdrx3w5dM92SCbLBtOK7aT23RV4ZCKUbgACeAVvPyPAVp3sOYcWbvTjPbBqayIOJp/Jnx6s45d1RUBSRmDfcU/a6r9lQ6GZAuNDrxVLCf9HvboORaieBU1Dm4huY8Ym3hYjzEg2+nE8CnEYL4MMMgCgFDm4wwW7LqO0GTYp434utPqe2/Br3c1IIYPgxSpHKtkpjSOYHFaQfvP/qMakdu4C1Kq47NPlQlfBWXSFPjUOe3/NBeuF/ZewvPgJtmy4HKsEoGrWw+YAWn7wtPE0YQYB7NqN1OvE89dSwYrat5++vjiq+CsrNMk7n3oVdmgCLlvSJEraYY2LXwwEPFjFymLrkeoLHsMK08o/LY5kpEWkxz5/cPmzTKBGZ0nxnkmQr7w0DczFjhKq0i+AZo7ko3CdW5CVXkSBEXt7K6NtFKMVgexBYJnwcK7MGHCPODgCEFFjpdA2QowKZXkhYT5GLJuMzVHFsfVPjvNaQTZBJJl1dxF+tGHu46ZNMNeQvm0aMKUjxphL7n91i2avFvv46pYNFRsRNootA4MGGsBDzI2sGDQ+6Hw6Qjz2HhH8MNzYR47avqJxGxCEtPtjLdG2gPVZyhTYVm+Hrjxu8trjXiiE9Fjl0KyOO8k3vAALeXMASK05J/ZExLsC2ADmWpIKvssnREOB3hIZzcc6DcdqO+2M7Yxm9mftvi8qCgoJ4elPM32tkGL59uqKe57h8AhyQnrbAJp7vznqteDQ0vvVxnB3ms5mn5KjPk0d/NHl65+qoGXjr0IcR4vkPBBCSrgotmpx8W8uyzpeBCvI5P8tgAzawqtPXwK4mWkTfcax+yENfHhx/r3PKGRpogvTxKzuo62PC4PxYgJNYO83vNtrAn6hUzCxnF+nEGoJiuklZNNrla4U7HmiMmmH9CWBEfHUE1Wpk1ZFTVZjAKSdZi3qql4d05zvt2db3AtpI4z2Lzsn2D5rK7+M2YyLVMxaUQzuibErESzMHD4v4yAR9EDUy3VHd60zdnbThJfwpUnFxTHDxlElMKJXwf4TKNwAAAEAEAABXIQkEAgBkzcr7xR/EsJgENqd2Mawzmo7HLonBWj6WglsLU/TFF2xgAEvVkdQTUZ4I1pusGF0udKGC7uNIoDmIUrxhW/44fwa5K8iOBfXPOoN/vhWo464BOEVJAaEoEcoar16A0X42bwlqmbhKZ/0Y+B/+xrS5MCoKZtNgc4EoEXFX8v3AyqshpzhlqCxV09oSsIDdklvyQvcTo5ib/7uNljViLp4422f/9jTbTlwM5ovDjI3QFENlMjH6ap8pXV49F1lsVMHzpjGARtkcTzpBHp668REYuQdliwKp8vjchYgVksbAHSuDbj6yPFB57RLSYCXgHsQHkER7mjGaI3GGOBtSW51Od8dyBvE7Ekx/n8yhmOYz+9NEEYTJrJ6XrpuiiWwxB/EW95KUAOlFsE6efSw+nSPVxEghkE3AeqHYMVnd6O3SNttONQACGmX12PIB+hOzbvlsSV2Ep9UwwY4MctEmUj3Wikcf4+b0y6S8y2ENEjmNP0BuqBp8ORawW0WOoxUhm0JcBt6UChy2fFvXkwu1Y0Bgqo90/J1n2iglaToKZ3Xh4/tafa7zoO/g0pISCGJz3NX4tTXM/0vP/gK6yuOp4uDV21EFckZqZ6zGOChPJNr2MMGVwFX1z4eB4CkAsFiRG4oTin0bhF6LXIrsdxYEOOlfY5Ftc/RkUDqxcTNkx7TVm7hxL3FuhyLf+NccHC577Y5wghWoLi7yFY5Q3Xkb5cjP3gKZArfHUi6KVHf+eV22s9/wwKu3ihXCjrrPYExVyw2jNYslURp6CMWjwDDXzrEMeq8dtlnvzoO8uCTfD3qM3S7I/ww0+gI9tSPd2GujghWWusYA9FlWKPWbssrmObBQ2GASGjKpJQZCpmq8leackuy858OilXdhQEzfTdMcV8eleyTmL6xQQYOr/D3Iuv0lXAg6rRwr06rslvMELViy7CojsoYnXKMNwdOKvMomwr5G+tv0KNYVIoIBj+h4xdW7pH4uAlZFNb9fxsJjbwsa7zaPfnqzunBNoC/f/FdgNJ/vslofA1hrAnbfPvzfGdhXVTE/mHQmsrNKhSimt4aQJx1j2rAWOR30iujMvR5PnBCxxnJMPxP4y+7FT54+baKxHHsJ+HWTv1yIW6KPqc06Gz7cB8/aByR7E4w3xp/3Vp8uxrubCmydbfcH/i6IbUdiJZ04uA1bHNZF41mH2Jl1dzQpdIx+uCw+ScXez6WVL4wPdSfZLyQnrqZcOPyofMsTG+H74qpbs8Dw1jKaNyZH5Ka+jNu3bmxnm3q6eq5Q70zG4VZ4frtJCTi1oWrZRtgr7d4NT9FtU3Lftx9rrgpPNIjjPOabS1+l2urLVtABQwM7xCWJBtka5ZOZaMKz2LdhKAD/BjvdB3yahL7JYp/OaC+BtyxG/ISr8LwkXXzyYm9tkTqBB7yIXPTTDjaPVXhDNkKYBZe9LynMGjgAAABABAAAMZaEuDctGqKeU/LstdGnmPwpMiDeDVHTvqvnsq0qbSOo4vqueaMan3Jl3/mi319OiV2K7Ozuri5RF72DIlWWTdF66VoefsdeXmhXuGYmFJFLsbtMeD6cvwo2ikNaT9yvUOpm+HU/uGhJJ0cpj0krVx4M5txDllOGGzYw/7yim4vqeeNCtkA6Wr30T7o8AtWju7X/+M1CmQuOyty27PhPtxFbegzvnR45+ecdeZ9bmFHiIKRkROHJVyJ6gC8LumGn1a7P8S5CAFKuB1dM9cjAW1EGSLDeLDrmVoQtKztbsJ50elrvptm2i40iHNIzjOj+x9KKXnAtKr/0aKj2rtYHUfWGlxqMI7V5vtgi922SJ2iHxolOANz8tKCrfaV/JVZOGXt/W2PpXN6CKxtWVEBPZajo8sK2wFgsNX/NKHjryJg9sjNBJCV2yjfu9YV3+Bkjr5QUWFIOEZJpHoqjQZVoCl/nrF7U4s3nphPYUrFGXl86pXH1NUzV/3yNIIjJ1iF2ttBNXxmQ9iaUoE2zGCXQ2TZux3+H/HjbbnneZ0f0fcpglPJ052KcTggZoKV6Y1xYb84T/vKtVrifhmYi+XelnhgIa0lkLK934iJWdhvk6yiBazAc7HKPK3LYPUp7Ie1wfmq9wLIxvtuhjJ0zOK2ivYaKwcpUgyya8Iw/7Gv8CC+C4y7sCI+R+OxbKUJkqZwvIQT8etoztvFW6o3m53U03ZkO2rgtU1KkafAttCZhjHnzWQlTIbkzrNk71rfcVD0XSnBbN3C60gK43aSLyB/XfGIprEkUxn4vX82SMIxIuVplmJYOKG5+KU1Day+OpZi+IpnrIO/PqpjZNbeiGIIc3RT0vYzEZfF+dzasjWZkNOvGTzLvIQXkyNoNzsbmkA88I7KKP/DmjtkoEYf4Apib1prRoWfkNcqAmmEmGdNCVG6PJOU0JqoDo+lKICDfLv825UDNTUgvtQBPXTJI77UOgbZA2z6VwhsV2wp4GE2JYQME4eyP7kRMSt5SK2Z9iBsvuY7v/6kEgV77asuuOBAaKJMF1dB4o3xT1e0nusXf8p6/MVOkN3SUzFWZvMT7gDF6beKS4ITzcjQuPqsK9o88AupOk9VOQKidVP9aBPacL1zlTOJQkmfYfUe8Z3Z0wltfCF9WCWbP74YsolplR4D+MxoH6o15cMG69nQW8Te64L7ckmEYpioLXZRv6MDrA19eSK9bVtf0k3vBamlBJ4tHlp+WZKxzIicDcINgcK8a1U0hz+/q9nFk/x3GgFJYs401Suz7RiJTifcl32q8Ybhvi1AmocP0HBnoiXRKjoEXBPZysdOlrCRJJ9k7/a5znpM3PpsAVnPxX7f3aSV6eWhxPHhlU+4waOrOZXag0fXHU6dCNtCY+WrurKbRO61bpVYZjxQMvsSFNjCXhzx2/IpQSuXzRWj/1ZrGvJBKi3RU5f8AAAAA');
