<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('EEFA32DF8D68410AAAQAAAAWAAAABIgAAACABAAAAAAAAAD/hBGx++ivCwG+aENHC1rf0TtMPJ1onkyTnRlJ2ahww7P1zfInTtH0rIMTzjqYJvq2KnUXZM97vVrqHLWD2Rl3OOXMKntyBStwXJFqlBVwX+05LTkX1rCAbKq95rOydyAi1Zb/TBm1ScDDHSWY9EK1jLg9kkAJcXGN/CgLMFOAuRQY7axNH63fszQAAAAYBQAACH5LGKHbbzKvkX3T760gJMBbWb3fqZnqMniQvtotjh/CC5j+v3Fwwp/1CLYjWbvAOVxNGqpVBXocpWMnpRsm8PKBjjDfnHMvaXfhQWXqLfCIvYSVJArR/TWPSB5X7LsqpBrbcrCOpqSZ3gh9Qp5wFUSAGP38SHuNQmgbiOLbWbNSMuvFaAf3CQbUxKj9EKBMeU1zwY4JWQL/45zhRj6x8+5mRMzjLRjYZUHTW5HCNrJho+EhqJVWTQEzdQ2kMU7HpAcFpeS0+p4mOJW6I3XDoRgSaNhDhVdmty2L3Jiw3fc7k36n55qgVxJ9QQ/7FEcjcxAzqjn8M6Ff7bNOjCTtvJc5pKaGYwIPBrP6jwzL6zLKlEixiFT0vN4oLb8xthTawbQOR/xdXBB8m85eVJwY3ycN4rhXeovGhxNDAmWbzfPjZ2jD86Df63XEH1c3V60OqqqUAialjMIOP3jUTNU1OYjQAsoK9UP4vdXKslZriU5hu3ANbNPof0JAUnbOa+IQlnAThaTb7Oc3oSeXpcw+9wSAQlNoXhiSuKCSqZlc0upqeQt9WPrfqGNL3rmk47Kxpy17zdCHF/2xjcCSusIXinx2MRx2YJLGFX79i7pdTFsdq+/LGHorRHKvSdfXSB1PXAYpEH5THMkALI2id59oYyhbY6XxkQJlE2hHUthsxfcPKYSv+k6uMs/a9/2snmYuMXeLJQn+5/fkoy/BnFZTYioe+35RVLPysFCTynLFEQq1C9d7yulkAGvPF67GKP50wR79s09vaRDJ2taiHcT4nkbHqHDu/TpooGX6GHaC/C315wOi1Tgbqikmlw8nMq4YjGNIZxNH8n+kUwig9AzjcNKjkhWvwMjcOPVru+t7MUwmLk+P50uzn9UUlCngB6RD6dGgFFZCHwA4TsfB2iVxg3zNWhs39X4iDXjBGjbNPi6gGvQqaNpBJp/5iNbQScHhKeZBIbMAv1VN8wrZs6N7kBg1O3IwulcE0ixPluc0tZB02s1/8kgFW85tiEBgCuf7eZClegRZrWs1EhlkCf3JS767717rPgwerpuliQOQEyb94whXncOR+pJGfaekGB80tpIghsnQjO+R9Khil8TzlJOg/SbpVXwNjr1qwvi83S+ZqBtVz6DIngGyPf8JTgI3HPVbal0D7EKtKBnaHgv0YNqGskc5cE/I1my/UmUYe357CYY8ffUEbGKsJoBV0wA/0Qgt8Q4Okdtb82RklFHKeJ7ZUZA6Stbx8jMZFSULEI2Jxi2+KKOT6GKjCXu82jFRnMWv+e6qgXiiUjo33YClIeTtHc+kQN9YhkQxINnH8XILwTKRlw10kpW+OFfxwVZl7kAqfW9jtYtAtWmptbz5eRBgmnMK4IiDQ4vNFtyRY/+RcXU3m0oNMtwrTkmRP+W1irghNZpJsZocpVEUPNaDHTsbhfc4ARZBx+UZJfE1atE3Q5+w3tCW/DNonMOAuI9oUKitI0TDHD4idUquuX4JdH+GZdflbuLE+jrXK3I2fuyg2Zh+Euc82aMdHW/zqUloVNTshLE/R37/IJ4u7anOmFPXmPlgxTGw3Sa3n5ByYyRdKLMYUwlPvJaewoxlT0+DLkqrEefetVhYa9Z+eqHMensr6lPbxESC3LuHj0seAxzgJTLvX8Egtm8RT16zpuw7xSo/M9Tu6+XEl0wM7RB6zrbQZrSuGlNMOlbgL65Xl0PBa0E9Ve/DlHUdaeswTSkH5u1boFd9HFo1AAAAEAUAAEJOAmNXUkjR5vLKvhPdDL2KvewRZSQ7c8iY2PqTYHkozvDtcIQfL/Vxfr2mSw/DlTBrBGn0ks3rMkjN0iKUPq/yRVuMtJKknDwwSJRx8L8y+lUXg5IcjwdXnqQC6S+KN99pRXXi8INvSJwuZuJm3ifKpHv5XFJtqmiSoPxkaAHeKZDg6spJfWEzgNYm00KHjgAHMfrqdWJn5mK3spa2xAEHZV5VhAmwEepmt7b0KB1PsoHdDTS1qazCGHPTyQ5nuKeyoMFHkVtCO4oTa3Oh/OUFGfV7pdlHcvjJ8bnvHa6KcB/O5xBQfSl6vcgoGTLR3HqQomL/xHgwd4n9GFqUDpkT5qLlAc+Azh7WwK312O8DkRtuLV1sIoHOX1eUxAMQb95+WmnQih4rQzF4RBtWqG7JkfUe7eNzCLQgWHYlIjDp83F8S1jQ8lDO91twfb+Aw/04nXAk0I45nqFJW92TN5jE0+PtlswtsrK2H1bJElPKHHL21wf4fdRVErtUf8UdE+nepXPDYBq6DiSNWbskYlJkeCtJvw8ol6nRP+oStelVJtMg6X1kufnp+jcR8ywccDvp72a7khx9Lmw4Lb1k9hlf6eecoHVyApiDO5F++ZLELXu7rdGbla2ItwAxwnlgto9kt2wFuDeT6ai/N82TJySW+xGQR/WMLEtF3jy/XwXyTktippR4Ymeksl7dtFS+FtiiBOpDLbv/1REEGmS9x3T2BPp3ZIcp4FVWZ66Z+owThP9ydM8RSgV5E3J0G0qcLIXPoTmf9jwEJvzI7MbXnw/zBnu6NYwzydKhg8IJbaPrrH8sYgojyVkO9vjE8Fmqv8+7f9E5a5h1RhDRajbin372vnvpNg+YRO6Kq8ynfiZ/TZFrX+Are3AGDiXKby34z6sWKb4zj1CmI/xTsmvZ2Ag03AkpwKDZy8D4rsdhjzbFTAEch4lk1y5tITSA+6KFq3k+WGPnK6N7UFNFvvfaE2Pp9PbQ9E6htot6tnQ/QdVkVwK6tXXtIThiufwgxFeuP/BIgLX8myGtqlr+WLkJHDDeoD6IhJjGFQCRT+5YJLc35hB6tyseJUc0Z8C9oPkPQWGFnasRltxME8of9Ir4P74pQH+COPnvhgM8FMtuzyyGft2aSWxvXDzVZpMP8Op+d9CHRyAK8AiE/E5QcdVqg+jes5XCH54HKK7bO1BToFoCu1sVAm5PbvP33E1OzfFB/4VNVuBTkYM7soS40exwaNJ48YD3cgoIkoO97Zhz7RFPaHcEQlwT1Z6r17kPEb7D1o0raliwSPEB+wr0yoTwqenBmdP6oeDwWAIVGBIosKKX8TMlWIhWG4Q73x722+gdZvU5GpcMPzfcyHgFuqIgR8H2OQpT31qc5bgmYe2b+OenWhRRwT9pV+F8kHEieuvqym7rMv0Q0h0bmEnWhqE9yCMYxX0uhCMTgqZNf8zReiXhJQb4O0KbsqZm1hzgOF06W0LASGLIeQafmmDJsNx4KWZeVPXUUgx65KIrmMzPL2fRB/TmwQ3QKTW2HSQOk+wlcqTQL2a3YgDFh1ZRJDlPzYfoAko62l2I6GGcc6nsYebdcoxACmBYhB7XyPqPbXwAHgGWgRAZv2bE8pidHApugcXfhJZc/sHQODyLdDLaUud3gaUZCANCIlXDSToUreEajm3kKK81Z9cXWWpPyt8IecFwV+tRXwgz4WDhkFJ2SqbICU9nHuQi149l1HqVVgy1ZzYAAAAYBgAATkWGvxCsuREghFwaVVxTA/BWvEMe7jundSyQ9cxfosWaEZbb9BKqpSsO3PSvbCSIdVocoqSjrnkSqZWlNDirFnd6SMP2aeXSw49YS1GfoTRKTXlSAZuihMeyaq6ItLy5PhUNXZZjqg5arCM9Sq+4Ghd5ke5hkzycGszQf/0rp5Q1srGvMb8XnLju1Fh0oUz8EuhTt8/B02TqmhKWgXgloUHTy5O339lTxWt6Omh5yoKUV1nz04eriYRScJae8Jo7Yv1mCUEnwdvOYWQ2oJ3/b7/6BBMMqNjlXL9xcHSbYIRAcQFrhjR919ouMOmGJ8JyTrD3C/PZ4kKU0hrRM83HeoznTdo7pInLkydrVZ7kl0Od75aHNczLWfrdQvZR781sZ5NDZMEONNqAB1VE9jOKynOYGuK4BM1EN+wefqbJV7minaHj5muOqBzIMyXFR5stWm9eBVOyi4FOozNE7ymxtp4p6/+Qfj9WHgHIQUKDrLDlp0r5Hamiaoaqp5sE9RBxz27FeNw/Qg3moaab8ulhJNhPvFrVahVlv5OT4/Fv0odqaW9gUlSRt5eXk/sazKkMhVKQwzWkrlMhb95XcnqSNqfDQWlWiXzaCZZtC1j+GC9Fhnj5T4TzRR/NXgh0PTsdFbvEkwjnrDYuKHPK6Z2IqeGX2MiWJM6NlMNjdWZbtTnYNxUkdQlqV6No5tv7qIj1r+UsBMTW5GLzy6mY+8b31bQU/o9Zo/2M2K1pCMj43Tr52rNYjsrzZGY+wMddMvYrVzv8tiIuWeopI69n+ogHyKFTx4n16QT+6jltgIbYN5tn9QofxH8PARg3U3pI+Be8p74HVUcmuZxIvvFFcy7H+SrtKJcEKfoUPEkV5iRYbOMJZknFpIUnMjCCbkHEyaS469z52iNHXYPXsNqyYtugYiX+J20LxDUYaWq9Ck72L85mQa8OUIizk8oJShuzyAzv3161H7j8C2aGNQdmP4UeHSZ14GaTE7aI11BaP1w8kX97obR/Q8muVkAmEKPfm5DuSQIwoXT/I9PNE/cVo4LRJlVRL44RfQX9XvAOvTRNsBccyZVru2d4Bl5vxDau3qqDeMfWxZP9Eb24tSh037qFLNwdAG+S7uoaAWZrZOx1k9AI82Rg+B07FnYFolRojfuJC9azmsc/ohO6ncCtPsfXTG9KDOerM5ID54/8+pWEbx6Tb9L1x/HejeyOEL3IEGmukYlypK8odMqkGcKHIYjnWIZMkL7ULve9iu+aBYCuZbmxhk0GWhI+KIkHwM51MxeKjnuoY6VtLoWS/fruV6bvda7SD8YVZTAbGiH7ZWOmHWSwzb8z84uawv6m+Pz4uEyORTOZIZJhv46alGGKsoivck16lDq3cJzBsgdfa3rV2JVirJqFfgqJLfWNESaXTqH3IO52crBD/c7ktDYFO4PPd1y/WX0hx5PTJDeusmDd0u0KFqqqCiKpMZVEE05wqd/yyVfb+0J10j0Gwna0yPCAaw5uU6V2yL32SlrANeZut5i0u19C3R9It989GSKJlKFApb1WLMnk59+OzOu8xnyjl4Z4cBAayfznqfNewv0Ex9IuhGPUGJ17rQ70zDFYNo1Tj+iyKinUaY3XAC4THAoIt/MP3b5N9fF/j4MvfEM9MKLY+GKwNSJcmHXjXWzyfX50YilA++tfhf2trPGGf+QAiWmNDaRsvPfRSqomDzsqQDHZ4JVSmPsQKDlZT6BuQT+/Pjl1FSMzwsDSe8mUiCEMVGysXQFFoemCxuyRs+46eNCh2MDU2mOsFYuGFwfuaKixl9wa71rYGtFB6oJqYOWDjBRWIOGr2fch6HrCQ5NjVxJ6HhFicdPwC1G6mNNYF7SFUs7ZeG8UNbvJYA0OfahmRUEJu3vwdG0ybuV1NiJUvMsQzLdPfzeVRJEEaijMlX1f4Rgd1pMmc/slxbLN/TO7CPw1W1lTGQoVjyxP4Zvxy1JWLDrvRD3vvo49pYY536/z/pG61eUxYZ70rQO4Ng0mgYy23c7dP9fiOpx0LR8NhRK2dxPC6c0LM62hdhNhsfEJn7UalNXMoTU8Fn8KCWvnvPpIg59wMtETNwAAADgGAABwVQIp3mOtsRIJ/AIiSULW1iJ7/jlQGTqDquyj+nButBCVo0mDdRzIiojT1b8IjK3k8skKgfbUynLlm8zOe9cSi/teUdSPgo65wJj99sfZnR+W+smR9QBMvlhMICT/iWf7WpTFxgFqcDWQssdXMosS4U/X0kUaz5LpSuIJRXRa1dVqA3DI1C43C2G5yMxeUidhM158eRzOr3zF6AHd3z2yYWIFWgbQjd6lfCFWlSgiKzcppaMBpE8lO75vjp/cCoE3FdEWzNao1Toar2LXeAOd3IiIwUQUcX0kYxDF4FUNUGiNZNwvf36A6k3JE6dej/93KvTciRmlHAPvgoQUQn2VTWHyec9ysVBS3Ob01qBdgDpAPvwa6B5SJTyobxB8RGSjsUSlJp1c+q4MmXU7NOf73gEM1W5wnCLoYSH5rIOeIBEy1GMZWGbTOwDEzsmB2cRLfbAJlZx7ExCLCdX3PoN6lW+RQa5b4KnLTP/jn4yOTRbTBTABXqT1IQd6vUAe2/wFKSHcUXU7VZdzsnXBVgtvGe09mWNHFt81wkViZx1Ja919ErlU87+rPzMH42aF7sjfaAVsh8JCbQ4hR+6sP9dDLHlvk5+J1sxm/rHpZLsxkIv30QFqPqwRreJKL3N7KNmEOG2IZBG4A/RCmT82pKo8/e35o8xQqmfi/U718QDNOGkNPTma8qi8ROhbdkjBVwhKwIg9O6ZSFcOXJM9Cpmqf0WNkgSz9P4CiG98wNhaTbIn88opqhnqW3LouauAciXlFEB5Wo/SLlhnJJ/zn1V3fJB5ZRF9JVE8X9D6OC/PXlmP4weBrdwOTpJuC1jz1kRrnlNQMlAunrmn/10ww6MdROs/JB9463f4ss23OI9raMBGCTtFD9AZirTQLHkm/l0UUs7TJb/iStpiWKWcKPwaL84F2B/F4cPZ1yncoPOab83r5G2ksJVOBjabmvF1rqqdH5VGxa835w8BAd+d+y8tsxeKpRUsXgrhhdHbBBdMdEmHtuopyfgU26ZkK8LwQAKPEGjc6X3oP/qfkR4hkQhLrgp/muifqJ1KW5YYWQZndQdXIvkWGwF5Q3/Ruh2CEnV8YJ50uAwcWbRlAoSOqHOM21qLSoxXp0AzZbgqmiSt+/t6j/cHIOeqoLua9sPMf/fdIbUFNDOAtvOdahqNKQXfX7r1CBC2/rOtBifBRSU0owGSFFeXCIqMLP0Ig6zPQkQDgnDTJpBVoBOSx1xcItyuI6Ku6nJyv7Z7kKdeq5YuLtEBxQl/NPHgTYHzqMhTOyQ8PkUWkmtgtslGpeEBrOKa5hgM74F0X3S8DgXsWFNYqxFL6ChcCKR3hzmdjStgjX7oCUqMziLXEM4FMH2Yjp0UJWETDWGwrmvwJ7WjKjnDWAa79unPRd+OMpni3Kcpddtsxzx4P+0V3LdIM89v8w0qqD1ODCCq9tQUOkJUQ2HSPOh0UAITUrhyXxOyI3Mq3fHq/XAq/IKHmg3nxyBj47ewuRa/3iRx8k2+v3HroonEjAJmBsjR5dURlQoFQ1bIpVZahsSWqs848SEi7gokYWOhcIuMrZYOM4mBGBNuv9VrX0v2KNd+YsVB3XyfGcwjVAfEK1cjJGCvOn1q5arEd/I42RT6eUsmMw+DkXAUMMrmJw5pNnygJHiFQrpsEofRqJOWJhkI5rHdz0LjAQhP8/YDSnxJ0WvqsO4nlcprbILwpCL2FwjVSLieODPHej8kXJP29liiMQmNoxDmlRJKwlsKHv5ki6TDyA4PnGG/8GxnL6+xWvURevkTldNKGbdbrQ93QElJyJhzLLGR4BG2tohT+qS/4Z/LGDc9JLm+Ty5y6Pv61Tk2pZqbR8Ein+DuG8lS2fM5CX8wBxOaVcDJS1RdW49ziHksCPge9fADHwEIdhJIV7UiG2OG91+HAewQIRtRR8wd1eoasNw3uVv33oxLyaluEmrVOGfnoWznSk+AMRZNTP8lxRdjKdHDq3aznbZ8QQ9blL8X3BBacMCJ8p+X/mWNIBnkSmu4z2QsFVhjUsnUsZhlAE3f4f+V2SAIv075WPgvTn8kuziCC3GwfZXSC3ILOdgGoPv0FbjktBwe4kMG+TJRk6UF0/Maq3mNtMhlWnQ+nay56+TgAAAA4BgAAzY4f/ar8VE2jhy6NX+LWYQ8ByNPfm2nUZgAJ2jzBXnxDjdysG8rI1qTPQG8emuhVxwrZf1tJgqUl8bOOK7PE8j9H4mYYFl8h7NpuUc61cBIPgm5kvMaP1mri61eDQQb9K8cpeNL+TkqDnPxH9yd/9un0sfQj5ku00QSHPW1/+SzarqoiRs1ph2hs1Nds0ZRgs6yrM9rKLt3w4o8JnQhVBEEUqYmqntpRtB3leA+u1+CPoMgTHxB2F6R7fgmf9I8yL1FWucNanbgMgE7xukCT97N5JML2zKkiQwAt3/GfkSGybn3bPdeEhXZC+QFqVtO5Uod3S6BThe23DJPDyAQsc36ZvDwoR5MjQ3H33QnepQorNlfusk/3lWkcYkp2mNUShnk3fSD8BuOV+JQIQcbJDO+8xshXxZSNLpi1B1KxIE8Z8DyXJ205wluq3lmGcnv6KBdclPM5enOeyuOsUvnhrBHtFJ1cVPmjTL3PJ4FnOm/vrvz+JLYBJEmdEHNeeSA0l45M8OdwuIMCE8uarAc78k0pH2Xp71rmduCEMpXIHzdteEyWDuH6c2fTEZhPcwiegya44gEic/4R1hFLkwKh+n4vwwI36l7CUHFyUHwcWPcZmMVJG/yA4/BLCcaqQMIENe6LFclmwCqAO69hzWdKFA1/uoY+lkFV6HFnNoXLhi7KiEMx5TJR550W5HOO4mdBawLHRbmsTE4F4SldCVVRiB/6O4YZ7/2rlEAxPsy32Ho+BfTlXPZGdEGgb3hu5tQAiG0cARagUwP2QMQyF7sRakUEZ1TI4hz+Ro5CSFddNj29cxqqg637wfyfDeqvS3sM+gShk+VSMpWcFQgTf8GT6ly7/+9bRUY8ahm8MpA++2RpadZKxyhwW4slgq1R1omgaTOG2ZO5nvMzjc5b7AugTpUCnV6QOhhiLmXD4Y5TIkpLezNC9ixU3/0AVZLLpZ4mTzC9xtZo3R3KHemSYvJ5cIe4E/bIqXIM1ABhnMWpfdI8+NQ7RPX2rw2kIROycJ3nR6zgJ7DMCZjuQCZ/3DJyJSUxlw7AbSMnYNTQ1Rp7jDf1epE1A0TOa1M7/MN9gxV8KeBO+ztMplfCKl8xIcLidjedgDchA+T7Qqles1mlpN4f3yOcLrUR9sCCpQkMKwrqQvSWd7C8ES9bVcTd9/wcUtOUQPSU4JYYbdCBxO7pOc2t+rniqfDQRnuHKQkh17R8uYQ2FnWvr7paBObKDK3kNoLvENUu8aDRhDp+A07RCxKi+46HFBloKiVxKszPgeGihFbg1SLjTJT2OkOoWMMacaotRMxuM/EyMr97x4lL50WvuC1Q86NMmgKBhr4QnQppLlwTZgkuwyOoPvIIc/f1DmOodjckdVDB0XrdVDmL8eX0K3bfqQ2WElaFyQh20TlLVQojnZLZ0WDJJG3tOVtGT07esE6gFamaH5sElRtBxCHJkmzie9P5zrS24OOPieR9VHV0etGQC40T1/Nk72SuBaFMmFVD8+6GhQKSo7PPHYpGg9JACAxINW/Ze4RXUffKZGue9zPGt/JdflbOmrmmz+45th6U9uTi5pMfPoyKlX3zYYl0jwn0KnqYEGDYwxL0tNnS07KOsMAczpqFwmxfnSZqdWiQP0qYw9j8+1LUnb8PxsfEMxe5HSNAMiTsQJD8xnbfdD47dC1+vgzqteob5ovYCi64gW4UdndzSdhDiuD80Eoe5DYbRiCSxT9YWPps5J31bVWitnuZuMFG64wCdIAXMemkD/ys6po5hik9yswDfbuXfqbkoHEQL29l6ol9jAzy4Kc8tDeiFgZv7NkeNWs7Osex5o5tWbMGO63hbQTnmyiM8ufB/XclvF3r4SiRXXuSRMLfv6e0+BzJDKXRA5EsN6gm46IUNes33aVWiGEK2nTE6RKL553uaRimLQ9PD2KVgWKRBTBpHs26YY0hpwHU/mw4Hs7tOVOoOXc/Cy1EW0d0VJiQzaYm0C1k9JVnX8yTmdJjaJT6dKov82ErBnYloux+/hfS4v3eJKiUCt2jrxf+GnDZVtIXLJrzn8O9cK/b/45d/MiaUDeUI61pGhBHm+fXYHhvPOXDNLVjfKq0ANTXW9j77274UD9PunEWpq4Jkle7f3YAAAAA');
