<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('990C60248D68297EAAQAAAAWAAAABIgAAACABAAAAAAAAAD/eE07XZyUf9P8O524Jw6SLBtqq1Q9rND0gJjYslSrfx+aLOJj+vehC565oZ1Ej1qUr+P1iWXtHA5mcnxjy8UWRCoY3Qt2Tr6ATERYV5wYwDwIIIBHhc18+OOGTjt0mwGmQW2wobuwRWny8QNgeGAJ0+dluhO9Pm6NahTVprwDBlUhymamGO0QBDQAAAAwBgAAXKK8/qUUb31CYcgX6lbSJYZ2mRSlbSQAOmcefHLlJEKQFfXRU0lb+QyAN8v5wokBbobeG7xINRvFVDK5MMeeeoenz7bFD+Bn5n+t0/vko4HFY1n8Okj4eKI+QUofrHC5JUau3NOFC2gBX7ABTS30FtFcBEUbmo6FF/EBkkX0AG1lr8tS/av43GWpqiJDnFkzNAn8PFJbqBdntgdvToWdC/obkG7oBrC2ntPWfg4M8DLOMMRf5MSqJ3K8bdT7yCKQgDbVREBV/q2YcW6Dfm4oCiqlh2jJRc6f1jaWMNKYr19XX6Oarh2r3ogcvSxcKSQjX08neHet5R1UZUjYT90ah7tebMlJHY7wzpqHerFRHyVJh46jcFlp3cUlZYXD2GqIIvrZAM+1ApQDVxXzgRsLfJrVFBmpcGP5l7WydKU3/5NNj4hTRyfZmhcEcx2EIsg6BaW58vXXkx4Dc9pRaadzii1kfEbnyWklHG4TnnTPzgSx3A3rSrJQ2IeExMaufKVP9kF4AE9oJo9lP+GTK3UfLs9fx04luKk5VBV5sHwkD8AL5tB4CStmwpDhQH7WADilXNsiLK7D8Y1bHifgTnZpk8OLj/RqMKgTfX/o4av1L8PNVg7sK20crWQJBGCst2OLbURnn8Sbaj5sZoyr14SHQt0nLesoQckANRmSLFaCDcRAcIsLEob75To6Qt6lR5g+Vzu1st0lfFQfMep1MEhjART1SALX9zUThLGpd1fkJV5mFLvV/LOFdZ7BT5PUV7EIS/katFhC9YJPJ6VdZ3wnZygk7RhFmzpT+ltgxfNDnkHslygGfvAbh4N5i2Ucf8a3xSx99/kKtJyUvH93ensxQ3LJka570Vf2eyxNGzRrAed3gmQYG7fv5czjvxwAKNigQwlCu47+c1ksDWr6QP9gQNYLVnHBI+QbyzwwSWYuLXlqy8/kwyyyXOJOT2YHIgw36nlVpdZhzmez0SRqG4Q0FD4sKt497p1U7ZTow6JF+O/kL6VnHBlKdEBR7jhSTlwMaVZRbwtl7RvfUQTWDlap1MJapR44MNzYSXqTTRqLT0YOcQ3KNUL1Z3KTJ+W62ekiVkgWoLj3MBxkI9BF40iU70zut6DqcxP+z7hXT254HM7ClOJKgTUDIJaCa3pUOGgMuq4lqIv4EExqxfa6cltVWas7onkYKINkcZBRV2oSDnES+K2y/YC4h24C+St6obmiPetQ1Vpq7Qen887z+KCYRkkgupYeDKeQzDd5kwZM58TvP1GUd/7ThkNc9NkNNYcVG1wD7uDEPHYzGScXXFuGrvXC+5B35NoQK3LQ35k1wBWPUf9mDWEOm40hyNK4JDqaRMcKt2Uxwpb+imJ1vO5ZWN0oEfq1k+2h736JT7pVjG7sq5Wv7Dn1kU0/cQnciYZwBgaSc3yxCdHycRqpEKBO+IAjbQ5s4zaMDFk+w0r6porxLEl+yp5I9IngD74BxrzjEk8g/4qIn1LRiB5JLncOB7szGwcCjLe7vK8im/hLFdeXA9r06VOJ32FFUEdTrpLNkWOa8H8xc8Chy38wCgG3NUYzJxnzCAkRiIOjcGyB5UZn3ALRw61HSb0NFAkKYRq8ogwIsRF40Us/59LKT1eTdB4Kl03rpSUC6imnin5fKTWN4r6qUXbqaPi68y5XRimB+jtZHusgjzJwPKK+CPbzUx0y7Coh1mDoutAHryKWG+tBry81yQxSPhuT0TfgoPCDbcY7xyeoRn95N3ENvUfq2o0snoRXvpYXAJncvjyrX4oXns9qEpy3BIwFawViM1ApTdo4h+UIKJuSdekIFqx+0yFKuYvo3df8Mrh3WfuiSM3JtK2xNKpU7BlLacCiyOOLGTxfoO/dF4su0Nkg4JMZG3+J12suqAdfy/eUgFS1VBfV8ue2Ts3gV+guv4FuNTZIknPWOdi8P40u6IUJw4eQhgkA/coHwpXnD291vnplXglWFDyAFVOEuz/ItZFzwpSShaXeHprimyvEADeuNewSs572XJBUAiYBmT7j3dnSl8yniZnQTjN3//pdRGN6sfAd37+WOlAe1qu1+Jcp1y4beok5q+KuQrMTx9QaaY1oTpCUGQjOglGv4JLs6vd7I1EvNQAAAGAFAACqbCwEWyiyRhlyEX5dF8OUF6/E4GqT7QtBZjpH+gGrLDW7NspVxxPKhvpiCyEwNyBoa817+CWTMQIQrayPwzN/tpXFPXGGqVJ0c3sF+GLNVDyE2iIowOwuYKFx56JXbzYMF7+6UBi/s0zSqTihH/g19dYDfZUU80ERQsglOtgvxpuc+WpwM8zY53owo6zZoPqyNg/nEWg2KrUqZpiJcb1wT6nr27zMdK7sn0vF+nvMEs/NrF3lrLwdlgC8T6kwBZiQFz+41/Xol6WqCr6odtkTMcpfWw/kG3czBGxOAZtrk+umgD844P1vGPKdd0S9Q8NFT8Qg0WmDQkfO6IJtSiDBvA8ZhdMqj2dAdJdO0CrJ4molfB1leAe81mCr3RVfdAF+WwF+48INTBn9QJ8Qjph6eJnmdyXyQkWtdslOxJxkQDGsFuO2JcnUX+PgWzf8fEndkpoGRBTiTPKGmDW+HLhtr0ZoqqGGHkp4S+V+1jyHeROBAc8bWjQ2YRTnfdbp88nSLC7XLTX2y+R/fDqNlgb9KBT/pGs53LfLPUs2t59iUpqCehwVvpW8vRFogUcYa1bB8XbPHODb/cnYBYwfI8i5oWrCOSUqYG+l1OeFfraqsymxOY7pn7DKUUE3EwoG9qm5cv2sq6TgGX2cLZPrHJaiT7jC7nArnVRW+gyMnxYE+2huqOHI7b+F4PJWPk+LSNVdc003A1NoH4PwTZ1FtJ1wOvL8QaayJwNW9dUkoxdPh4L+t+mOPRcvPKF8cqH9Wvgh9v12rnJu3bX8c8MxlMX6UK+5daqxZddlGmkAI3CoYG3Bp6QV4C4Ac4f7lXPYlLYRnvyYcojKy+80459+3zVtRb/obqjFr6K9QWQAwiNnK/MEBTzeNVxz4jG0rymfSbui3K/ram6sgUmBz/RYKvnUkDTn/NAPXDmlXeuSwxVE49jsklusPbUB73H7m+3Im+UOXUX05qdzTwdAq0YrZURd9Zv7GUjmyW+uX3TWlTCDZk7A1lMf21CP16scw9JnqV2AHZxKx1vf5OAvISu5VNtIFesP/g/i0JMEHDhlKOwZA3MD5BpllPiUDA7eTExmkC0XU8AUgvDUX7Sa7I//bfiNk6Zj6QToAetdRiIX2/3zXBykshRE8u0Z/QPrq3kJaz1bZX51n+v8iOW/mXsanFHhEpWNtEsshLWhTIZSOjnt7LH3iUbc1/KU4DlOXxPKR8JsptYyEKp/Ynm4802dnhfAQQn6Bym1HDsZlAKDw+t0nsqWi4iSPtWLmrS6HFGZTN7QKGfERF80HoIu+2kMq2yMankPXH359zrvOJDGKEBTJ6okmTKo+8pqgDHzXJJ8UOufL+1w26MaceVkBl8XjX8uqGHf6UcFQy8UUqVsmTboK1huvrmHhgSpDpnICalNOJ7setPREXaHiHmYYIMiB7cBe7yiVzQphQ8F4HhiXSyreWeF3inneFaxnUyrxIQNx5WR//+fEEZ7WEMh7qrj9EEPkRGpEhaF1lOFEYEQ5IYJfQSuWlFGi7wRzS/av0/FYVH9mTJ+Sj1yr6zwEC0lMzQ3zC2Jjyj58lvCq5/Ipwm1od7Mi3bRjW6AINScfx35sAGmUaAtQAWMO8kQYa6rKi10Gcw/pl028GPscEPvAqA8oowWK3k2vbSw18OsGEygVPh2kWMcQKmseGLNru2JROsVfqRRnNq4cAZmGxyPrtyfCmetfwcE/4MxNuUW39uEj7HOMGDbZc4gboGn6a7oRlL+dN6uE2Yu0sgzGxYr5KfIOzzL4Nlfm9DJ5Tcm8wc96kbHxZPZMklOiy6fU6mL3kD/AFyuIPKG2PPbdtB/bLFEEzYAAABYBQAAIoMp5wOkrweCGIOBMxqRPLU5zkS2lfmP3vPPy1wVYNLnGInde1Rx49umg1IBeSSfxNPLme0PgzapUXD+ENobW6nJY+mrg3/2BAWQegi1LqxIl0+ApB1l6RS1tbhXV1nXZ3P6ckejcyADxS4jpFXsBWG2uiBxcbPFno10N+WWgXMXkns/nUSVB4TVh6i378MzqlPoweLO8NZFu6YbMTuowddMK0MkN0MH7TCGuDvbxWibTKUsrBqaxqHq6TlMKxywZbnizC93bqpqy3R7+sjRH/Cn3UfKawmsWeTmKXAqO8g5BxkwpB9DSZ6kpC/5ZNuhRKjnJgVsDrdWpL2hy/tjUOio9MhKlQhT6zJeO6kbYO5ZcHhl2jiQPdR64P6f3Z4UImYFUT+1Pfvk5/dGGtADxs2veZSsslG3x0rAfdMRkx5jLwhD6HZtzZrUTNAhze36t/O9X9TY3C/bxNtSwrpbb1Kvq+iMmYRiQhQUWk3pamcajtdf+Jz5MYPFAH3l/pva6TE/Y/WaAyMDkej5pL4Dh6PA+kc4wsP5FDz8hh3CJ+hQWL1QmaucUIwrJ+U48BocLlxf10v4YWx4vHmfPP0CB2eE6PT+8DFnxo2tOfWsIdftJnBCh7IvDZeDdgr9d3mRDx3OA4y94yM7jt7ZHSz/oK547NrpiI3MSFYZV0qknW5xPfaHzrrsk8i31aWIxI9XE8gDpS0os97E2DcYKeE+8PnBYKHJqd8aYSwQS564sTfmnTVkObZ4sqUEbb3J4ALrRHxkL6IfLRyeIMw5h5effeqxYyCCgesdQLNUZ+A+JV/xX55ePWxzWYtWcgIHcOV4Fkz8uK5dmUUI1oQvy9e+veJaf+3rpEAAKUQKYjQdUbpwWy/ImGrBQ/1rzTs6GhGYHlLDqdeyWJ5DKxnvdNuQwPC2NoDVq9XjE6V+C206Mn33HIjapPivIV+62uovTta+6r4X/heZrwgKfbKDVScWZ1YiVs+Yba8ENVmAem5nBmVpZdqrFEFk2nXAEyf5kjB58oPR3t7c214K9DT+p2Q+KN2ZjkRfXmVA4WP5ejQI6w0ljDsG8n3wkjGItc8aUQSv6yIRq+UD0PY83nVdz2b9Nl7s51A/tGWvosax6JqaswA3986q3K7SGkv5dVgNoO2ZAqiTYK503g7lAoPhN2eifixE3ZVAhKy2pC/GMtPJFcM5qQ/VamnuqiuEb7gksoPV/damWtlTvFu9g5KihF3TXHQL4tWfydY6BMNCFNvAnw1zPDGeI6a5JhWlBP+BuP/vm3weHHzGczLZDiYIIq6UcNwIzdbzzt8m62zeBv2YbT88+GXopw/Hzeg/RNoCL3F68kRhnaTLWGWrEsVaj+B7hKMwjeaA/LKuFOe0lzVRzHjhC5ZZKeIoSAAkCvsDKqWB/BbdD5htany67upyGCKl+rr6gn4JFTW5gfUh1urMim5QX3CpEdq8A6wsJJt1p897aT7TAzO8KTVWphWmYmEQIEI3RF6ghLY1fvCbV2xGw0bjLb1J+OdQVtmRbWOiGt62Xf58ZIRITF5fvihzZ/pr7IVGca5rAgNZYZXjh+JVxFyPiPe6nryu/F7qjiPRYHA0WcPPH6yGvNP0XUsWfaWX6okibNSsNbUa5e9uBfGtlChMOcinSgjilqzzCF+3onJKaYJUbQluTaxiAZkF3QJcXC2Je7eB3K0/0RhTT2cXuQAQZuZ1wieynAFyl5N9T03oh/xCyIX5oJ/8DxHYBrhw5f/xdKLsAMBoW//N20Odhya+aWcx9KFfFBsXQ9iR+vPMivSK2/+yRZU4cc9DVBD/s5IMaPjgoqn9NwAAAHAFAAC7eNYHnpTC8yVHkyLAtPe5ws1AUkxA6VsRHb3FaVviestkqesVPFHB2sAkD2Qr8z1BeJKXmWebknCrtjtDQjREbTFaPs+g/rHtdon8gmg4q99gI9QoS2nI2CuhIf+peBKagZKVvW8hPoUpd8K1ZOGmYCRrNtbKwowWBolAxLH6bDj+6Dp94vGnOTFRdY/n/Eak/PyR5tgwqvcU1tCQAc9aAsLM2ksGHOujyeU1HOMNwogYC970AqWOn2WozTafdmXfroE6RIc684RBCzO1ied0RoG+WjlWiaAtSZSkca+p306wnS1ddJ3sgJsBeS+HJL2zivaknQ1MKOuVOhmBW++t/QFX45W0Be0TkK1CO16FVLSIsWNQlYQ8sW4X4OVgAPSO0WLm3VJnU9equExERp5fWKiqVCdCpRAUYnNgabAzs0zPu3sG1gZJW2qFtvBasDL0++MWOB7vOj/mOUW2zoDF7hZI4I7qM9Hm4aOpv4xQB4azUyfp+knQT+BYbDgDwsp82hlc0yeZ0Q9f2F8jXe+JHmdYusgbp2PYwMfqwWFWgik40kVPrsP8SFLfcroBEPoJyAvgmiXdok86hrVADv/+pCXKGlb/bo6fscj1wfx3G92isIQ8wM8uAIRjOmHVm4Nw7nqX4ZSmoWcITgLR0K5i5scvg+sb4OZhJYN84kNPh4KhWlx+Gd7bPYNn4Wy3Nj+QZNJiUePhzZ5gY3GdzGbZqN9WNeGGaZ84QQYXjLi2G5ii+GAK6l/BrAJesJrQK9O4aMbuFgPAVl82KkjJK6bVNMsS6UsYxznV6xNFF/djb+kqSqJfPwn98D4XUYzkvMGTF1j3ujq75TsaI26fh/s52O/bfhqxWeGxGoHmOKoIK9Ua3sDZZARQ3vGCNZhinNyTESxUxvf96+RIZ2AyT5T/Hi2ANr2Fy0flvGxxn7WYwTDVk348A+eCp6cytBMsR9HOB6WDzUp37dvjvM358nO0j8UnMs48pmhVG4UlTSw/i1cRIaTEakrhKIdjAYd+6HfWQnsgfeXb6JRoC9TyrrbikG/2lDbBlSIdzdvklQYvphG0QZh58ugPp0JXhGvzE22g59ZuerQLF5Dq9TQpKThFxegdaISeAQl0efs93Z/pPA6YBr8lWfUQ3ORSjGvMqkkRpPKkPeyh4OaDl7gnx41DlzwGufkY2iIhFDU4BV4Srk7EgWSP5DEjmGUTBl30OWIp/Xwcako5v0jUQD0sReifri/JhFDJ8qJ7s+u+nY16lnMM7NQI13yRiWUqZBqjPH8IvmsgEDKWTxcAnbtAu8enS9a7Vy1SQd8TVKlrJ4faAxFRrLNOZ+hXY/xDY55gePe4rqakMkC9ylh4hSpr1gdQlg7V0IDtx8r4TQPM0a4SPX1AXQ8xXhENn4Bck0UxCL2HAMOC0ujn7ZXTIyTJglhztLR8w/5kROiOyoi5vqxvJj4uTr6cjQdAy16UehrwBsXWDREGJoJaAn62ZgU4wtSyBNpnPxZxqMiozD6Q39Nzs8WzP26RS3a6QVoAJGMXum/Msk3D39r0xUdmG+kYhpX6z05WwYvzd4GcBYifI5sq2vnCtD5TAaP5/iMPBHYN2BvbpEkkAKvdQ5lnzzMLdbflebC8ZbwTEyKL3taeBGg1RXDhV3+tw4ibkUPdpRQkMfMWxESDsC9OND8ZA2ALLuJcRLs9HritfLhyzp5y+3VycaVDRlscixPnBii1/cU/4NkotyE2uI8d5f6k6nfDG+RuYGBaq/vwHF0Xyl1Uvi+iz6jmuMIn6pwldT974RBlXOx/GBxPLM6bEDGNfSWtAmwb/3oYLYQMQh957v6xwwDcU5QKr9waVfWeFJlj/DI7KWU4AAAAaAUAACz552J6YEMw95MQUZa+BN2tCZr9Jru0H0otjIrTKiWgDJAxo2rOL9RafeyAFnJ3I68TL0RoAnNCU+VZL8u3OTzyG8Ne9FDnyqHr7VGYv4kCXxI3qX4wNtq4+7v2lRkeHS1VZdnvBUFGiIjl84CZbBP+zZ01sZD+4NsJ02kUGOydC+K5Qj4PeYDu0WqQDQR4WcsJtp/F9QixkMENze7sRCUXS15otwvjMax6xlAZChQ2aCuhiIa4TvddfIe9pTrWL1LSzFLVF23mkIzj1DalgMNwE/CcWO1zS1XkcCP276snJur/jEXa9REWtSa3hGy/VYFF9T1GKLavuHJBjJ7ShsC827PRNp8LsUzl895HlQNEiaFhqF0HjpPDuOvrP8M5ZsUPfBjcl22AzOVIedlxga/QwRdm1pDRsGfSk5Uo9GESKDqdza5iJ57qxGXsUB3dB023vuQmco1Ae5hyJZt/UPQWkzo11hTSpdmH1UaeDHF8slpdVBHN9KyemE1H8OTMpYpMvVo0fQV8gpxA6T2ao1ssDE3TzoUhz8hSIKLPYaD8eVdz26QKzAuV6PIs65HsDxhKLnX8Es318cLX1lEwD1Ms8bBOEbGiti31KFB0zpvieqVBUwrNblUUzin5E0/2Bc9y4JLJRRzVaaOyY1W5sSEBvU7VFcYMNX9QU5tXoJE4+sWrpufLicEV5BpgPACQSw1uY7A05ef19K76wYTle2XJX2Z2X4EpT3Ak27jloG/VaN1OT8qSJqpgv/DWS4Xb044Er9QmDaIcEaTNjVkNPk9oQG4LQORGshQvMa81txBjijMF8L0D4izZ/SliZ931jKypKYfBSVjBqn8Av/s/s5TxmzyoCihG84VgNqOchKcDMGDUCPF7HjVRvfA2q6bTdtNYRooEcSPFZ0/b0QnJ4HQz7Im7jxUv2I/gjqXslPwi7bnlh0EewZ4KkLAIx1oNGabMtYsfIq851dTdKl2SX1CzlyWO5163ZPqyAI2KFEovaPE+/jr7SO7ktfu47wQWDHppMXT6zzWvNatZ6yfshcgYKNvR5JRUwqnzdbwDGBfBu5YO/QaxETfvcKTRdommXUQbrmtCCdnJEDakWfKQsiaE2hZKgrAQYQ2cqn078788fOMhaVzrNDUSrZB56INsLJT3/2I/lL9xByrh5LTHJyBJNB/RexyDZQOn/qHXjo9omZYeRlyjZFaBhAu20SreomLv9rr3yIhp08kH3gk8dNtBblqMm3EbFhqloz/xqjknziKzysHscKlpUrsmI4Lw1gPuXQs0S4XLt+pHs4YVgI5qNcov7dpsdQe+U2/FQ6wuVDtmYhtU/OFTrTehDLSyiro7C24eobxTsPmMjRbSKJ8T3sakS6sEvZM58dtI7gALb0AOVpJBQKkSSdSw0CbCcXl6IXUvy1wcZG0de5OP5ADVsV2u2P3/1JSOvFLi1hX8RgndTQd8esYpF1njhGnKuL3+nXFei68jWXtpk8p4DgIIiZrrmeuIx5Djacwe1C/KDMlzPOV7DNDvIkMjtiHGiJCU8NlBXjdefujWQwegnvZMsGgcTkRwt/6pDt36HgUsIaTlNdK1STfH3BWzKUucgxmICWrddzJ5qSNXffpd/FRrT8JT7SEgfD8fvuRVhGVyRQAC7Z+3Z7h6MYteGcnSVl0fCVT9ecdk4ACAO6Ybv381JbAidMckziH5IPUeA1Zk1EX8c9gpo/vAYJMhQraTCfCgyn0U38aE7wo9RHpO7I7qprfHF15wLv9DhA+7oWj4TL0SUJM6tJ5oR2q8+YtGufgQdUnzsqDFRr+hIH7Ni1KarHNmUrK7zFXDj15c3qPNAgRe1DmeEVIAAAAA');
