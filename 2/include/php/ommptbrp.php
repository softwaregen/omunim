<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('59EA6C618D682B20AAQAAAAWAAAABIgAAACABAAAAAAAAAD/vrSy8cw3IN3yoLSTNtjsNRXb0K1HKXPVkW+qa+aAxaXozTvKeTan0o5lV+zLiOKNIFR0hhDx9m5StPbYhbULAVhnLvPROQ07SRA9P9/MrTVz3lLOXXN9XTdOFouLoysKFXWu7cLWitcCFSJ8we1QgpEVyQfSfqBmE6ouI/bB5jI4VqPPfDkAwjQAAABgAwAAUQjPtHb3qEMphHMAT5zKiEAekLFHt0H9lqehAqp7wL/yNT17qp7FCN4ODspD8sWatPqmLPeIVKQoIvzYDOxTor9jpYdS+ECq6Teh8WDg6LfAVY0R3Z3fI4UKzQT22UQ1A+4U/bJeqPeguCHw0g4uxW7qhZ7kq9h8ylSAtGX+tYC37BXLIx7WXMkZDqVkk023Yih/TwOqc+h6GLHuIss8V8YuewFngw1jMfj2MsuZEZ8AP1KhUU3Bp7RRAP40Wiaf/lu4GcbEunQr77hBBzxntyLkj557pDrOvFqlh+GzxDBsG0IXliq6zdrV2Q10EN0e+q++E2LML/7p81SmSZnOzQEusm/C5ILzSj1dKx1xeAdc/4ct4YM4/bRJ/DPfn7VT9lDcu29ZJlPJGPDXl0GSvXrT61c/hV/9W9ikd19cVCC8TLYscWFHvGSewdPgk2hc6lGlgg6998fX8LUwmx2boXjPjHK9o58Kb4ReZzpIkvek6B437jUh9MH/df06oOUTvIr08BxR/XTUKkd8l2+mvqX9wEWiljKwMeV06IYhGmC5JCzuVIgO3ho9pCo67V77BSNpVA1GsXOUXvny4DECZXwGUG9d4rt7ZDL8GW1LhOhAKHTMO2Ib/1jK6HReujx2vDpacD2cwTW6q1XazZejRpDIXkS0BoRmIBgKyctoTE3/aGxu/WV8RqkId6+40ZYGn7Isj4xKTFMqCvGKst5PlvqYGjX0oVkJ0ixSEY6uZiWXyQC2fdM2swhhzBYDn9+kUDVYUirAadYlbQoszkeN2TkncDUFkyHpM+N0TQIE385Vz2EbueEy47eEDjNDQC7ZJmNa3NNOjBWpPvb7tHWbVr1ArsxR34v0VaDZTC4jyvg4tVun+CSS12kwHe1WE+3xxFHEmn/3yci8UX11yElZ1oWTIWi+1div0q9YqIae9U2QHkKr5hsJYsOyTIoCK1JlA2zGsF0JCHKO/LRLcyrrhIfYNdJXRrM0lKzvFI+HIoWlY9O0qV+ZEXpXMtyVa1+Rb4sx+osmV4AhDzPUsVgJjVDCACHdfvHnSmAhz2rloKxy44WBM0YazTCW+b3J38t/qWlgc0igq/oyEFt+XOwWafNrmAFmpkta+l5rWUnGro9eBa1FmjDkiKZRpBz319UqNQAAAEgDAACND23a4p4+QRFm/a9Nrj5Rsq9HEptqtc5ND65HQm2RtMUQtR9Mi37mFaXfJvmUR7NY5SKo9fAmS/wloENFcT+9oYuzuEcZIQ/hktC8HjQL1tnKURrmBiLhQq1d+6+FEbdTEnUkIwNsi4g14nC1tGEDaHu2pXYR87V8VkZYDXILJdJSh5iF0oG+jH8IPtlALHogUWwL+bskdjjqaiSCqvmzgkU+uHZdSn9wHdYFLfvn0HN0Nr5iDrlFCCyhnV8YQ53O5T9Aacz6+ca+G4q6FvT+9MqYnKz4i0P727JjmiJ+mnJLqGpGNYqoie1JJOiB3YvyN5KnD3z3AMLPQLTb3nJYmebMK9caczYHk25IHsZsw6+7H/yEbIY+qR1JiQJ4oLEEn8VbI6dsZvzk6X1f+MqW1lW9XwdujuSFDkxoCnAl+YRLq9wqJLru/FKYWEGY75zzYft2WMucdfZvr5fmAoG64K5t/ms7jbis0AB+TMkumZIoUQlYNmI0H6I3+5x1BUXhLMEHFmg3pYU130mjpjqYWAiTYQ7TLDaLQLyya+3DzuolFjPe4IUlbqpWLQjJdDqhgZG4SQeeqNzqJbkLVfZZs39Pzizj7ISNJxl3rgX9ptlOHHXIlYI6z90kIxjABjZ6LRfiqlWMyncSwhRqP3PesRgLwMN4KoGLNiam0mgy7yq/qH7Lie/d/LBNCem5cw77E9o1AJOEHi2lXxKYfSbJWbEe3GUwoJuDL5OYuTsqI8KuW3crlcBMFzJd8DBQXcYm+g4tigiwXpvu5vIwFQjC14MytreaThs5iu9Uja/uH82WAHSZO0jbfU7p4jr3PeDWZT0c+ZHWt5cgOxdNuTJLZA7Ebo4BTA9ScqGKtxLAMSHZaPOdQlwSFlJPzNxskx+7Ncm7oN900VDvb7+6FoDURIwye6vgU+N8Z/VWhlJiIM58TELmchrM1p4x/ZVK9rZHi1pxWzRhCwC9mFmvegNdi/3kL+0R7y1wxuWKlJOy7vHiTQsm+DImZ4xhQjbHWoGtzuxpRGXFLanPR3SwHS5HegmbaiArt3WOVW7ReWzldQorg+4msYLwYp/8zy33ccw19kiXwXusjKxSSTJtAKyOpv/vUdVqhfI2AAAASAMAANno4qeOD9leUDtSML2EkJCPKZIKKcy94Lt2eTYQ08w/YRBOMIJAWMKRRwgc5wrJSUqEenJlZuve9Y4tgCj7RTuMExuwouKeek+00Ce43g+bABMSkOGBDlNCtPBeluBA4fAKZlPucbhlbrt2nxnrZNJDyaS3mHaMMoxGw1024UETszabAPIyiCjH6Llh+fANrz5RHt/kM/x03xrWNkQLd9eFGvp5etyejZ9q56obL8KjyFBkGuLI6uewly8stJ2P7avWr9WHrF1Oe2eU+kSydtNQ8ua/Cbp/DH/jx4fz04UndaTlvzGlbO1G57CM3E41L/24g6ZxcIgXhKlZaD2a0DToLLcFhCqYqJVA8kJUwiJxMgUmHQX8A4UF9FuiA94pp/0cNhK9Nszw5uRiZNWILAaf0FbsCwWZuqcszADDBwaVUpes5FZCBhx/nXBHwKqQDjuflxUYnuu764a1Lij1oogKmxwJz4MUSoqrFxgVE8Natue9dnSyGs3sF6uRmfaSGgzZFCgaySFcQCHdnhyQUMN5Ejm3PUAKlDoD8CLwdpztseA/OjtMKOyC/godmvhzN6qG43VLe7T8I2RDuQ2SnfaHrbzrvbAbvEK5QbuuJQyhko9wHi/hmfgoL6diH9Yj1WCdvLIGAy21lKm15kSJUt+BSGPZQG2sm9ZbCjPZGeUvrYnSz18FlCjkgi+7NO6EoVuIOAaZTn1UThCfGfEp8t8mzm83s2ixxSsuCbhp2e56sVvKuI9C8cbi9fP22RBYgZZfYJCgVUQk+fNMdzI2R7AY38Q0ht+RIuDzSxXWChb3nsTPOP/xgG8+ax3vuSZEOsP9avqvkEqNZBjuozNIygdT/EpKvT2WGZvYpsPCcImJRh3SmKjnA8npj1Qgsoe7Xbbknp3oS7nSpwyKVxyLv3hQT4efD7eAPKgkvHpS2b5hdrF8A/2RAmuW46yDOlF+U6clw8hsyiFd3YpizRUjol9yEVmbgcZk7Z2SufNak7lpdEUG0u+66FbRVmUpLNuRklT/xGWjCpHxEO+0zFgzpnZ8RxgSNFKsOhQXYGKhUDH7AQ0/0Q+jnzB22Cp6GMihutgvZDb1Wsr8OIei+GjMQBHafprL/aT5sDcAAABoAwAAcLoYvufpp5JjjQjWA3UaYcnsCywqKoHqK8IEeEGoy+M4WCwPO71/UlMQSWjrLxhMamxzOkwF3n0Je5u9A9sqJm+QCgk1BmxkElH3XzIGw+DpcDk8BVWwkaqXDaHzIdQoongPuuficrnVEUZifVMHUna3sdjUmE2H1aqHUxs/1Ex+4TL91az0rV1mWBYZRsVhap+HJIYpdZDjqEGP1h/rTCz+gBio5q735VhheKPze2SJ6cL1+yuqHiPwua7YJo90sBfTWgntRct+L8L+7+bOHB0eDMpxIJZnjEEYi+RvyC1pJhfcZy9ERmHzGLcvzVMzT/GENyaa8dcPDpBgNdX/3QyzdmZpauuknDup3xQsOyEeur+mFhSM+i/FU9hbfpoG7CfJmrg5Ddi9lNIueS5aLPmyAWnxDwPbuqU55FCpjLW24GKXwAIviT2i6dmY5g0ju+Y8AjEhYyxPBqLnwl0xEF16ufGmH2lLG8HIgaVhKST97NxX+ffJ3aVkEU1fvNXbEUdMd3ElBYK3SBAr7IQLyWt6wQQiiNwSh1EjlnHHzCxyrnkPpD63h+8mOw6+iP1LmSxZcV68ApKclteM7JU41ztehRSISPfo8agjBSAWZRM/Duj5yxqGdtHtm1BNdkp992V+Ng/jLerwlz/0efhGD0hbGWh7pQtutdnZkfrEUkrmv6jy1CFTBTK/97MGUMC5BiJus1es1TDOEV+UY6V9Nt5TyhkaI7gENh7BnAyAzijK9znB5Pe5blAGxfo0c5a/UvcdCcRN6fNDlxebb7lYKqOEc9DL6nWXqQ4L0V/TeZXxpaN1+FKC7M/vAcS4TtbJQ2t49CZZ+HCZSw0Qu8Yxzb7fiY64oCqJ2Uq1GV1QAiFDiIKSOFhRkC6SpgSE49+KHj7eng3XsSuHXPwACmudbxzwA4z7c3bG55XjfA4suwHaLuqGMV0ArtPTqJc2abqCrD+PUOAQvo/PvgfkMb3fzigGPZu51+y1HCi/QLFnkk70f0CRCzyyOBGBE3GbJjD1ZYF5tQgAHnNv8qaSOgC0w9y1eq83pdlhfR/GIwI2EVFzRkc/dEI13eCxUw5ew5nQPdZSBpU2z5DUKrcANzycJW4CZNb2nosu18fL2PEviqBmHi8iBVa/5B+R29yTOOARqdQbb32MX3E4AAAAaAMAAJLTg35GBEcksyjR2GLDdeTKtXE3QwMV6WJsJJxxy3y+nbAP49ji9WtAC3k08I3uWEeBsTXAWdOKWMyU+6WmQfxYzA67NL2rh5N8CgyZ9xWZoKR6lVFw44f5d1ZzsFH4M3JPPJcjSIVMuu4B3gme15JDrHrWiWXHQrTNyZpyBQBvl71mcPfUEOpGvyyI1OhGIgzyE5IbNDibqElPUowSoY/SkizM3XeLzxMamF2q+mo1QJv+eNVv2TChToZ0bOpVNQzsCaYlnzRhY+r8vcLpi3tPE//IGoBhSLfbBya+GEsVy0fjb91l8UNhLYqlU4+Xb5sUOiqb3P9N/lhwV5aVPxazs3BoEWvWgQ0tPc818gTayrf8Y9lZEkeUqDoxZVB3h/JIJ8TmU+WphbGb2XD5kVwSmWDQyB47NlVLmQRuwGNBrINCzPOeOKOdSTIf4fBMndIxS7ZHeA8lgkIt9NKGoF8W1sRy/Ky5i5yyQLTjTTwI1BaKEnNADXxebEnPbgygX0qt8uS7bKgPhECNUu32xxd1exSSWEAmpchBdH3bJrsRxUJtk/0C1L0ryeRpLe1TIMEddZTi6czvsJ3UnR6DFJpTpl/fYL8dniQJciLooFfxXg5PnZTYmDfrXT3WfkHHvzNp6PBIzGukahoVIKDoGUJ6b06hymjRkXBtkMNMIUXZ9ua85k4P57DreVn7gCivRniHlXvVYbrRt8+V1e54fB+oVQg1hP4Gf3S97bBTWe4gZKs3Xs2hhmWtDY6PsZ/yDiciWz90QcSrn0j0W5AolLzDVzl6MZbXiHKLsmcKLQ92QYRvSkZAphsPR4jKg+qEaEMF1z1F1baL+jkfYOllejSh6+69o6dy6fJlp1pNxTBHa2/r+fHmbHFABgsXQH0hOn7YIVR2amzT1eM/vRIt0p/zu0WpzFYMkQyW42Qi23waaNpMIE1zL6FENyq/mtCkWx30EqoeFStrZDWj/yc3nPX+7rP8gvhI3cap7wjBw0yQf8hug+TWucpr6X+81bvEROotxJ9MhewROZ6JWqIvpA7fjYSQ4ug4jrX6IxdNFyyQLDlczKSvUupOXGlZKGKUOlINGB64o9vNFfS4AeiCZ+PAU3kbdFKfnewycVjurNQ5lfFd+BlK69WLa+ezXEDbwP0FByiqiIAbAAAAAA==');
