<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAAAQBgAANh4gP9zEsE+/+Rq8iuu0UVx3A8DTsGfI4l46XkWyx9P2szVw7EKcUak23JNKVj0JyzipXZd8HePyTwEybDN2SwDeQ/sHwdWcCta4CXTM323VrLpwVaBczL4T8viuIq1s+VDG/Ikvjl2l7qPOFd2TeLAPI/e4/MdaT0oV1WZPhRXwAKcwOYiZCFq9WssvON1CfuqFpvQtq9VLUFJo0QWnMLdCnu6zcpkjQquy5ORxmdI3RlPcqpIZmPjqU46d5o7xpPTwhcIXS2iX4BWVK+GZYcdLKcN6bSaC4cQehgSHYopU51wc8w7sTK6JNN/JEQfafkWY9eO7yiJ3c6YYXYEo2v7isgN22NQ5FN6k84Cgaeohgtld83a1Y11BqfqCUjKDGIUpv3YqtzTnajwAyx46GQ/2BU6cppFy+2SClxlzAwnjWSmCo+0ZaaBjpUOkExEngFzakmZaVA0ZMay4bj8l5Ldj/D7vKRB1MsFG+j01azdHYjVQoa0ZFMCjaXd2+0YSEI+jnkAC1iUTzyNWRRr2nnEhU0nrIUMwEXIuGbZDiBMIQQl8ndf+Fs5ES2QaAe2fjP1m7Wp5tmGNFFUjMMVnKkwLKFxacJs7SbJXLiRMO42HFbKOvvWBromPgO+eB7N55SzVw1I+3YTsoCPGVl33TjE+frlKMHJ2Bq9QzO09j9wbETGAfIo+o04ceC2u89JcJ70hoSD7XCSoi1YVpCqwVAwBN9a58YToT+bout0QoENY46N5s8yY2Sf4AILYexJ0EEx3X5nL9G+4CJr57HvFhZljYhXhf5hUgkru7VbUMcTELl790uhHI0nGE10TfkRF9YK3pVjJtA8sv5IZeNc3BNpPaZMBXI7xLYWm83QX+is2dPXLbGcloEfVwJ9Ra8gxZIH+4pT9WTydABm4kRKUy1YSh7rZLaKQlaKKF6/GkbBggMZyMTRFZIpvhS3JSLHp4TC0DRobufPtQA9wOvszsqYBER7ZnoYyRm5kcDjsf/jBL3pSb+jhuT8nMuqpR0PHe4Co0UCAZbQZWY/laD7rWy/W/v6YX2/M8p+8RKDbm46eyx15gUMQDG+ni97fWWtbBX4KmgjrAWQicFLifw85Fo8jGE8isOPo9PxT56iZX3ugNv4dzkG7jDO8ofaWGsHijuluCY9TNGy5mYhT/a5NLsCKRpxeov/a5oMglCZGmD2l3RBy2NjoOn+aZrqjaxHZPltNqcijsGaEqTY7reTrJzMReFojC4WooXvgWkg8GhDkR24p1QsNBhCa8Df60BmuCUmJJHAEMN9/Ps0uQ8RLlj2duFbGzZJ3N7VElgJDzVgyiSCLemR1YwmIMJwvbr1LeEqYAKdrgzx9oNbsDzO8QAa9IXNnNJBQ5Arsd7JDuT/ydW91ivVJJVlWRwT51T99/X3Gv2EybDPjhWBk/HMRsLoxBXFnLuDrEuP795Kcg61wRmIbfGY6lvE6h4Z3eL0H6Cp2GLSct3idmmM6kqEIoubQeZNpG3QQI0sOMEjDLrJ7F6iy3xIDtfCmSDgq6oy0lLc8+ZQ9PcUagFj2xpmM6U5zwXcQbXZ787c5ERi9TEOevNarOK+HJDMjhuUKtqo8YVIQNUs+PlHyGhf0zkhxiHn7h/XgZlqnaVQafsq57z6ZIW2UODJres/vZADHhR/NwUp6S1xQsTmREPaiWb7NB1qBvJ7VUWsw1dzgbM/SzbKrn5gXPIcDnF5jtMYFcn8siGPkwdTSCeCNH4pJcurYjF1tL5sGhmV3W04jvdfNRISDgoZOseIbR92B/RMArHWk21gOtAnbHlAHo7HLET+l32HmrRZtro3szckXOWIgegEpEPPo3q3ajqX9ArmlPTveoTcyAbnxGJRryhkZPVnocrtp/GW85vfLdYAAX7L7FRq64H7QPeFQi+hGZuTz01sKbTk96uNH2LeoHcO0Vyi84ID6xrsO4pRy04ptHOLGU9I+65SbvgojmbQZfs+/i44fj31lm+//q/Uh5ZjSDIrZdjPy6mKwNylp9gAqHKlsBCLqplblRilEAZfdQn+FiTBteIEM9TIjweVqmWsAZHdRqDUAAADgBQAAv2w3Wm5KnTAVVOcz4RXoclq89YPNkxLXt4eBpPH5xqi7uFdCg5eFIQIXW210EYKRx3jy3nEp8CC6yVyY3Qgh0eeyoGEgm3WBVDruOTiHw7u0DCqGikYAWgSNti1KpRVEEI9C2Gkxq7bUoxfGXMXhQuP7jrxDzuBpwfXIqaLl6dVmaPQ/ZMzoXSloPaJT5K51YqSzLnNCwQqm2qXXV6KyHg19C1sA+Xt9uNixWeM3RUZkhHgP0ODXxuODPb3mE66dYN3LVoxM6VxUiAKQdJizCNLNKfuQeC8o7axj/dHS78auUrTMEyyP6FedBwNaFV3SF/5ZfJrNih8tkTN6YR3BEYFoVzbgf+XyIvUILkVpS/Sunq4ZUUQVR1Evyv71IxOt6gmu1dtUwerN5e3iINEbXk7bGZO1I3vs8yKl0LsoVI1ZjfZ4zWsgQWIwUVU5iie3/wMqonkJXPBOsvOiXqi21aHO8g1Uur9qz4o9/Zjz21dWtp4NzgwbK4cR+gbVaCdV/+bhxo9PITkRcGIRHxzopiH/sVF5N/WkKOLdhSVSpU3r0W0Qskf2JfK8VECKg9YZC6Pp5/bB0hml+KgukzR1IgGD/PgUZRA3u7Xy+w25/aog9QQdeP9CgUg+xN/O6OFsQ8fK+uH7Q9ZWO3uv0M+qF1d7woc2diBYWk+3O2+5p6k/sKJH77SQbpyn5LXc1qhON8u0iZPqsLlCTf4db4zDeFOBGlrRhJSz+CrD4dOrAvr0AXDvDIs/4U8dyyenSxA5gPV5yr3cfqLSuNCXuO/ujbbkRHaPmql8/vTIbR4ASSjT20Zm72z44Jv67yvzb5ewT0Xbo9ZORHiBvaC/33iwSRsDbhLw1/gtwd8ikL3UlGR4MENdYvZouRE13Tw8ImJ/TBNl5DTEmjD9R/E2a2Zu6OpkS2SzpWVycolw1FgkZxNMxx6YxlWecUYC094nmSreQsdQRKhnfuSnwJK4hva932pVeHsvs+WTPd3priyom5YqBqYcEPR1JxDQwI171xGCiBecksIi/2kCA4HRLpWqkdfPQC7yb9amWRq6u4RjkVkvg5gzqc+PtnTZuHz7wVkElExuENG3kYlqg22lqmXTqUDctnVAnEIQGHfJm4yWwhEBwzrrjRSG59bnzFPnubbMYyI82UHTL6nbVSAsh6lV87pTaLJGdM7PcxiPpCRnILQ7hO98WmkSkPgYgB8U3czmBeH/ofHRsZ6ps89ylCBVpHNzZRQ9/LtefsUiswD/yAFQSvA0P2mX10Im20pAm4hPZNlkWoTKYhQPMyIdmJJoqhpIzKoNoQP9OWxv/Gf0quGbksS799x3qRvcviSfRePEBkzwTCBa46nvDPQVzKZ5QXr+VYfKoO3maswnmVMPCV95UOCUNI3ZGXLA7Ydc8k+ALdGXkDSN2ECfS+hJirXUUnBNxfLQeWAMEeJNUNXZ1vcYnM5cQkeJ0QJZIB6o1OiisrBOvwQbl2Ot2wBN0uVDeaNFKXJrtNKkSXBnFrLT5gkZTbXDHlY1zn2iVNYakgrncV5/vCJQhwW4wRSuEow8meh0ZwNdDbNHmSOvOM79jWDC/IzHoyKh938eEG4i5Zy+H4U3pP6/VUSYUrK70s+iNXd2B6kspwEttu+M+tEz0lj4+T9X0y9tdHIWaZ6ZSrf1PI2Acr1/4BWCy2PT3+h4Cvpt3sRwcCnZpj7W6GRKcBbzQHbWbDqM694rfjvO+7lExl7KSiZG7LVdW0eRXwJPTkZZjjC188+wNQbLSr7msqDleJgl68sHnXyFckkA7BqGvWfj5lOjZt2vRWXG3kboIfxlNI3rtlCG428D44QWnY1vyIjzhcw2uylafg+KmkijJZw+QNa/3RUpP8+xGcurCpNzpR8zN78H6nbPM/AwtjWVnWst/pNlBU3VvQkxqwBZXF461JueSWrayb6vJjNXBjdS4/BBUqK/6fAUqYcxEtUaxp1V9wJRDgZNUrEz5+V3EKw95cRqCbX8lhCo4X9vBjYAAAD4BQAAypp5fP7jRJ5PHjw8QcQtyK3HK/AV3LPx0FmHrO2MAbsZ+Dl1J4pb8xFzcFDuwmVvZEGso82QtFhZZ/S6PSYVJqDFTrdapaks8o11gwm8PEuukWnbAdu684M3LzCy2jGrk6G7zNS5OgVFAw+5KJ4OMiYo1YXbZZd7L8LYNdFsjb6Jzd5FlJBKlI+FDp3ioq/RIqhX1st22XOC038u5N2hV9+PPlyShaR4DEmGqQMRUZt9zWGtTvab6s8YQZmS+0Fbb7gnxX11IxZo1lT+Y9/w4DECZzZjmFarUA1DjLKmmqSuMoDHteUek0qsnaOPplzLkNJag5ovMxIoGv7dZsMo+WVT7JuasncKrtiKfOf1RAjr5WaIoIQpmuqNzcYrg2T7jHtAhygYXQK+5JHc328TlwrJWiyOJUqTqfas338K+uoQpe1VRQc7IGjZTSEG08uYZ/EBxcGLp+NrwbeXwxPV851/KY/W0NsEk/TOjGup2pWWo7xI/A4247R1WpadaT7g2C2fpocyr9cWyL5ovofqwcHratEOgQfTETq40grWK9xJ6EFkX/LqrjpVLn/kr5RHTd+KUAbIARr4dqWp2x2d7VgtL7ZJuZHnNkHj1E+e6Qd+PGTQe+atqBz02vGUszisFpr7kJgmHZntTmIw81Iin3cvy3kOkspNCv2P1J+rUJV8X6VpZhW5QSHb1pUQ6axCgC11ddj+I6MB736MmWPfxSH5UB8SKiqQeTLsak8VrunJ7nslEOY1HH8IYT6HqUIfYrE7vNh+SJx+uhQuX8JAKF1dpe8e1pW/hAH0pLiMMQ1S/gIIff+X8G0yQH8Y47FQQRedbJNOmVzIUYICSh67SDHQbCQZnoqB2h/0xq/F+TizB7JnJDsZDfL8OQW34tCchi7sOxPfGynMeJ1+fvKunFrUflM8DQhF9e0JMVhhEzA9jk6HNoZ+/kZSGa/kWHcXrd97HafMBRLsduyIRkRXzws0s93whIMgOHL3f59LwrqPrr5kZAEMb+ykyfS+A6MOmlv85WCpH1Wkh46LiF/QtzBbagC/+PJ+6l9/kj703PY2GqcmXpg3AKb+Ng6whbkOnkhuHmdjE5st057EDdNLIQ1ta7dEk/VHiOhuFDvM01mJBzgD0eY+zFmJ30v+yQreefaxRvNYARr10qklV0b3fVVZ+y1pjQJGFPVEsMTaPZOi5tSChHwniXqLThDyluqdYbgb7E6p17SSwXXvRVYOTup0g2iSRG46LSrb0d8uq5e64E2Ue95Fv8kx8PrURnBHgEKMHwsGr3wlEkTvxMEmB6vBrer3sYpqXzBTh+/zl6o5eZVc73rn4B0FTE296Cd10Lau4J5UyL0RBXmd3ePG+5XvIF5qJW4zofSb2qg0rdyIp6pz2H5NBmO5SxEsQF1TNSLggoc6F/TjHNpnBNZRCFkBQasE6KfL4bDTXx9aKv2IZwlITTsvhK9oXyhinM4lWTYGBas9Ia8ExtecUg0jcLnI+KkeF0thUz+08yiRVCbX9lGKIp4aW2yWxYuN0OUKBze3rwoC7v4wA2jS7sK3x9zLQOViMhvuzYoUO1Z6bQapb0q572/Z/2kT7VFtv/mX55J43Gx9TfjaPsVS0HiwLwono8ySrXJgkNsfTarepuDGrPn3ue670+bTQVTlkwKnYJbS6CxaFGcvnPhW//r60fDeRVntIWcgCKeZ6qFdE9Stc3rPNVw10+57tZU1UrvkjlbrmRx2hIjwdQZPBHuJKDCkPt0w7XPZ1S8HUw//C/IHrIRQRjesls+DJe8aTF523S0TxMZF5WKL5nM9xDK9Ekrgg7CdlhzHFJ5QqkfjS8aOC2co7xsaHNzLzCN47WNEQBzgjvwdS8Cf1Dq7rk9DYZUJKqIx5xLzscMvo8eI8QPdW0l/YL5PDAdgr1orO1+iNZbqIeZWrqa305E5CSM/nPtbqWDyIzYPjzDKIYJcY9R+yp+UzrhJt1v6ENKOrwrXpMgwXuGzEFRy5JjcogHHQPeYpXDec2u+eH4jy4jNKx5GK8ZHeNgu6zcAAAAABgAAa5Kd/9M8Vh54z5brqjtYEY6MyCwZzqGSXA9p/sZIZAwUyQtqt+lIwaCesn9C7wIn2UIw2gXVOXyPnVGOCnbAVIZrXeXmJtHMp2zeGYzXJ77ViY2WXTr4uPqVsBoefncadW189FkUpzqob43s9O7nym4WwoqeHXmxNL5OKURzGRKYAwPYoFjj9yj3W+sndEOLdu/Aio3OrOoTr0wJar0y2OpiuXQzNxosOumyeGDLvuUdW0qWKHLMtkkedfSal63c5xy2lzz+E3uUI/hsNT802HuD2LvDCA1YBhSVbfxnrNSoNZn0UqMCt7MeINyeeB92UzxVUOrUzSnrrjY/JMmJgtkL8s6eAallf7W10/bdgxT+mAnbG7+JLefa6lCwER6EVEapFOn/y7K4E1pBipyostRODLSJf2fT/bYBgHhbUyn/CEVU9OxqlkllEhP9vRQaM2IC0T/9FNTzXGG6lkja82KVa7RqgRaEG/zjFBWLNZN/ubL2Nge+F4Z/sHv6UnnYw/p0yYYrBLyS1AzlmIqHuaz/Pj+08aYQHoxJEwIyqcycOBiFakpCzxdnVtV5Toez5xe68qbNmnUqwlOYjZ/DipfEu0yonKC7vV6jmjVi7jVlVXkbk/mSkppeaqKp0uRLRJPSc0OaF0kZ8BmV2PZWjVViUAbCWXyha01tJVzhLV6wTE9fe+XY7ngnv/Xf+hUTzHl6YOEvNMhhrdEekifhOJRFX155i4e8zUl4Ke6WF+0k0QsnM1gAjCzxehYGzhRQj3QTFdojdw2iWzxaOPsOJdm90HnWVfbsF+vyKJIa3pChJrSaDFBDxQX4cAwJEHIZNP0sTMNT3V+0LO25N+b1AQVFvFazf1Ch3VxWf1rCy1XIvfS4zQA9sgHys7E3ld0pCAYQPK4gNw0xea5yYjcdoWCIB1eSdD0y6wDx7kfFEs4WECojCBudMjcXExKhWJ1z7+Wl26b8Qzig2W1LFAcQtVJJ391c/x0niCg2u9vvrQ+pcUR+uSgjIDTd0cY+vFWYvAeSp1jlC/WJnPXgwDrbCLbK05EOBkiAjSPLDhzKvAXV/gIifi3lTQGfst5oTu2K0aHhE9l+38eKEMIbtsGv3RPakGFUjXJZgcoPhSKbZ8gtUGzihqZWfxew8CR1zHqQG5qaOpJ5K9wxX8iH2Cjpbc4GXoL6khoNDqqlP/BG3Sr4zAO0sjMC4Henc4siG3cRsaH54uRXrXhwiwz+FmtPZkxKjDVng08RC36zALsEfYuYhVh5cSrw1TOE/rf3rX0ZMox8qYFthyphMmwBLcIpyo5oMKmZP+GNOMchp6Ja0ISrrkmUHxvLXxQ8f5GPZj2w07cpxHQCKJnjhae/tJtLq2ogb1+vDQaDvtAHU9ReSJsvaWzY8e6/XlB72NgUZrlOacyCXqsKGojXymIfa0To9fkOjYOYIsYUZtI7eNV4lSidPOYwRMtn0Wwrw4beaSQVMjKqrPjl2hRJayfbpEZQaphDFlRIWkKvUgwgYEQ6xtD4zwKv38vsZ02Gu0LGzj3z1tv5MRjgSHTUgPKK6Iuh2NZxCyUB1LgCPJKt8XxgQ24ePjTn1d0r9HWjuecS2Z63tJS78NsIEyF9h6DdG5B3bL++KltTq+c2/fGiJTjq3cpOTh0csA7PqxzO7E0juhzzJjT7fvquAYtmcjS9o64oTJHtUxdC5mtkTe2UsfdGyKWniGj3pGPEcfWTvvZrKrmCK8Se6GTrivDQ18hmbscKexwwOxy1dWPS0gjsv3rE3PfIDsKsxrkjIjxRiC0e7T7yNO1/maetZNWvwQgxgaeLiv8A+fj/nxkpyFMihzteDl/VCKUd22taegI1y7nF7X8JJLK83Pbn6U65gnFFIvxopbArXQH2yAGyM/EWSTSpZkQZfpqFn8kbPjf3JvfX/N1n+EMg+qFTU1HKaGqstwsktc+JndkRpCUC22Zxeo7rgQ5r9I9EsSstWHHANpnvm2cb4yJg8LKXtwIbo1cB5Czm+WpgMNt+l42Rfy1jojHp+cDgYbhp4dEMyILJ8UYTYZgaOAAAAAgGAAADZiQ1DXH4B+9mJcwNFoUOVN0JIB5zT3RazaWyzmoBrlP6Zx2bj1XXq1m5a6qhgXkxBueNYWgUDO1wGCWkUn3QJU/EDAIOGQiwpqU3Ez87KrmG703HUViputYSjeP5bgR70pDqHhmk3bM952Qphu2yCEvuvOjlQzQ9cZLrUdys/k6BH3ll3irfQ8/+Zdz7LrHk1EifT7jF2kiVB9qo975mXVdCLrEC8CvJaOXjLEz2d1DX8ItFibUKkHg4+9jfVLD2vuaFWusGO3SUZXr2ZtxU2dWOttZcVmPgjvldGKgej8nHrB8tDnWrohbBq0jQtioGq7dcnWJWMoQm85p0WAzsPmFU3umdUdCV1iCt8pQOdNtm+tonNTwuspO2zhENfyPHzXOZMXiHSyumBbtVZuM1JE2swrQ0HhG9t4tea5KccTj7oXpIcnYe8b2VoWc0W7qQgBS+WQh2oElBLLHKVgA1Hth6pETaHA/rTnufmxopK1/iMqj+1iZqbHXxHvXjhangC9rFnIcBGLizrWhPTb0pH+f1TTqpihx50RYZkraVvX/Ph901lkjPC3TPBDou0+pwFruwJfAIZVE1DYKnaXIKdCph/deD6IdKyFOS2NQ64ssrmOJ40+GIbCo+9bKUqm7yXz2LqU0kcGDqFpWjsruVuUI6SLcVZC4ncX39SxLLQNOXCxCJ+2ep1FnOsdGhU4nqxABUkD4iE8005hlS9exrZxQRCaHgDUSbS/T5ppK3yLD9lCsOSL79Mak8rMjimulvKXhUp1tzLPGGXVrNitZW9p1XiIPnCLvLURnlvDAgD0fWMurQ3ecR0w8jrXmzI/Ez7NtXlv1fEdQ3JvRElDDiRyYWaPlzQbfwIftX5FQHv/amfyibyWHwMhJsvPBrKPsI9LUinpzzUu1ahPYAFiBqNhgq/jZz+31hlsEAJrbF9YNVkxu2JfCm+0Crxzqd1BqxRhI2isyUZF/P4cAYWQ4vBrTVD7LCJZ5WlJzGyyqN5QsmNOetdKDWZjP8pLTo3FkQXkUjXcQNu/9lKVSl77DQ2uqTtaOUtUwXtXQiuHfQa3/LxyvcPPIaTPcv60q+kR/HiFhrj8f0gDB79JDtlyMuLpxb9z/+JuZCiqewOUqg8FIQzmMgq7QwLOxam/XBTKCDCFdkZ+h6jOoGhf8M9B729fiQ2zr3Y0sOHUM/c7GH3GJMfGq337wbQmA7mOEVdpI7pguer5IGoz7GoyyE4zppgxY2ZW7vT2YGbtgnx3qL9GwH/287iE7Kp9MXkYO+rXNnUt+YH2pQocncIXTpe8uhEzQe97+NdrVhAFWs9m3Xe/+J1iKZdji6T9D6A1NhZeV/B0E8MFCP19FtFUI8f0tVH79R4q+bNMhcBDa1ZBm9fidHP+1+anojS+2czWr7/MjzR2/6fGXfJ4Wxz6Ar7CbWO/PDqSGl6nH50NALrLglMXIMiJjcjCm46uDmFLaEWJ4F/Oo5CY2twna5KAfiU4eFveO0aoEehEbpzyjoLZmbVsQCQviMvU9fyZR+tFWoqPM3I7mA3wrMcdoTP8nyD/9vSKSHKhBnxSXXmjnsemh8juJ2bK8eeQvVHBiz3Q/8xMBzAbecZdjHWJX1vtejvP6WduQ2PhHLeqqse9yeb+v6zOTFX8CEj21SkWjmoinK4zMHBjpFkv46/1Tb/8oof15GPAwnZyj1+0qeONl2kvkI02qqRfJdIY0T0QLwAwnSsmYBfCeIatEmifjpSliTqAYz/pRsKtRUcxjpMakJSRSO88/uWEE99EbUvM0qc+gsighTY/g8xfiXrNm94QG5DaTQUOHbDEMoRgG27fcF5RNBpR9bFx3C5okusehVXjh7Dr+c2uuG6vhHdjYWoV6lb6jhNCoRI6qNXWe0/AUvRx3z6kXJGWFZXrTCaJkY37/0mZCMiptDCUS61NhF2St1cO7OW8lSowl6uvjg0OFjJbmiIY6cIdHv/rAsG6y6R9QAOF0oeq/TqlQ6ixENB12X3VoCFvw6uD6lkvGh3wTMRhvczzO1iFhckj3JV6Co2TCQ2QONNQQMdQa19QAAAAA=');
