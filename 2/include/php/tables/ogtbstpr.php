<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAACIBgAAN8Os4GzK8Gp+gruL5sikbDwljMoUK3Ft5lpfR4929kO+NFfVM9PBwiH53vreRwevYT2mj0vn1s465qWt1Cl1pauUU0WRmiRha/ibHBevWKhiDejD1ZvrC8a5ywPXMY12yoHfr4oKn/mUP/ZtEG0GY1VvCPkuie+LF6piFtwuzYL3CNI24WryrRicrvdLEXeVkm4NQLievNsKC2MgE/YWe/9n48Hi5lrrCm6cVEmnsfRWva9hz3h10zOWnDOma2BfDCsp4WAws1Jhb1d3ptTqxYhtF5h1m5x2jq82hm4QyARRSQTCZMuDRpnYR12UXJi7oOsrZLjLIq8+bxz02seOieciRdifYcjSfko4w5/uKqsorOQMKacxPDi55FZZ5BPSEd3X7HcP9Z4CYv4S+gUSBN6Vmd9Mi03ahAo/Z2nkPo8pxJQVH563Cc9PdTrrfNjVU3B1kn1p9mFMSrw3NQrYkyjy9IAndxQyXqNTWmHgeQjhKJpB7pZQpnbFlCnIVyJZkDdnk7h5vcAcSmCYfdwc9mvlAiEv06lFWMNSL/Yv40blnKrBkfE8Rp/K5ywX7tP1Oce0h3+74TV9rpC0L1m23c19x4fPhV7pfcPFxCXZlhnzcnnInm+HsjDA0e/tdDRfMYgMZLdUOPO4IXn2o8aG7I2CYbDCK6Wr1JYenOQT8ug6cepCeBJ+NCapby3VSLMWA96WNBJ24nNIojcDXZUTCpDe1gz1H7VHdbKjmjMvvX5HBL823q9OQLtKWbL8xRSjilcTZunIa/SFakAPDe0fYmDDzAG1K5QAZ1Ed3h9PMLUMAfZtPfqP3kgGIPZR9x/rC2wE0pMXGyLFM5OUy+EmoZK0B+uKU5vpuXOP8GAq8WC2U1V/zKLloKFG4cHa8bNjIDPl0Iv80A2DTnRTKfGqddRNfzDlU8brtEAbhmYl5jlQRwYS46YktRrOu2GFf6D2VNT3Ppr5MG5L2W2tAy9fU6JibKq0uyQlO0Sq6QfGcD7Rdy0bvGVFAL8ttOq+KLJXFxIABjzzLp0EynnAt0aYLaMHkrZdpehAA5oeKK2IHQmFHE1QRJ5go6u7HffMMAtAMPUqENC0ZcEjGtnvd4/B3IL+vC914JSoQIKcIS1sN736jDXNsooLZJZv7pFBmo+TKpqCn45Amin3P2ILv1V40VH1R0p74ocC5IM9uw+Dw6Dxb4V/1Fa384jag9boxyt8R3xjCzByNrb5cuVjjFpHEPrXFkRkaGqnkmwFJ+VM/WNQwkI3dyvgyt3+bZIlqbRdqNz3+iuj8wX/9EmNzp7DwQDZdoZS+6ODus9XP8J+JwcGzx14OIeDxcuXAvwrt1uZ/AE55KLj3ZluGvyS2qBXyUVyiMwtvatM+yMr2zFVUlnqOtIxo2TxnDkcYGkVHq7X5DZuD4cJkUbLtFfg/E2NKcljVLG3RyVJXYYo6UpcQMJpuBu3Q0Mi13AXG7sE9O2rc2F4RaLdi3M01v2MJfuYIKvUKHNWHemPz3MU9ums5VVqfonxzRj2S1CDvLsl8mqbKwKQaKBojhEBoo/f3O5WcJs9+sRGgN/T+Z2I/c4hSTEzkO8Qjl00QYScu4CMqot0K9MyECnmvo6mpctvYvwXP1xun33e2S/XUWFbmLO5bZZK64gxSkl6g1pankWUCLFwQUoYZPGjiz6L9spTCAatewg2hb0K1urmuXv6Y2izcrn0Ywc38cMQFO+tjXSJTuuujYzmKm17ZOwHRW7UwPIRe4PkbOwZu/chFkEazD29udo36HSdn7hyI8dotHoeU3ycqtvZtoS74jhjrGVJSDTA8Jc5EHxxeaeOS0kP3X/hHapUvwpyHEMWYRO8qGexQRO9FGcDD+koN+Rpx91M1aQjsX+94WtJb4MG2PmQ1bgWfOidJefjnwiP+qa0qkL89USTfuXPy5uNnQDZaJ2Gm9FnbvXoyOMVUtjftcT0MSd3ar1lgpdTQ/eYejrPgPRMo+YxuQ/6Qb/oiBIMdVqQiFvnWvmd0tHPfP5CibJ1kY0dA8hx/eOZrFwMjitzMvjt6qoRZJs2+dO7OdNUqXSFwCkntvzJJBTTgUPVPMBTtG0iQM8QUJ0XdDNuYD3AdKdO0YGu3sfCjp8kRS7PiugrFhQBi86kwc/L0ah5wvp2G3ek5GaKsLX4xcGkRYIRSZJfeaeLdU443TeHurlNNmfCN9wFblBkEvAVH7gECovNd3CxLdGzzHeeOSf3qzUAAACQBgAAoHXO4wiDeotY8vBO/ZihyZtprWrWebYt5KLqS8er8vxyBiWdwrKNCATUZibgrImBaznVuFaokZZnsxR1sNSwxNmQSWLC0wIiD4T3zq1JfnlB1hjq3nwgmJM4aIxsevoBb/SKp5Tl/A/WXkYmbib0yhxkbDO6wZY5r+SqP69F9Sk8Ta5cUUZr5E8wvvFbMGgwkbJTdqdeGkZej2Fw3umosPn7lzmWekQcZrHy05TWTlmcel0g52CsQl1ZqecCycbtelDKd05XwB1Qs9QP5bbsF9x30l/m7ogIqqZVMTcwrvBWN3ALmOWEwjtn+j8N5d44gaiDtugSQxBMaMd3mASw6U6d/6qarbITpX+kg7Q3u44qqvqbbbPN0PwMaPYVz2cY0Otlwtj5lBRbENxraQETggv4nOMm9zDOzWqM5jtFzFw5f1GFDoI0dEBLQxfRkH4vkEFIfGwlqYq4b9JAkAZJjjpjt4zI7lSBpfKIigaU0CIVNbwCd2ot6AiXXWc/1VO/i88bBEtJwajLL7VmxvSg2o2zgcz6i02gfhFVMR7xittJDPyg7nJjODvfO1o2/lSwreXSCWHGW/PGKErVxoYNPnLfcqxNUA+sZ0zhBWRiD6WSfRfnNjxAcZ2lOcf60AJ/K9T1Qz57OakRDCtHzFZPmE6bpZmV+ZWQOjIyvDT8ssKYoPjYK6BRvKnEu+Uo8W7R/GV9Y5mNnxmm1DvSEWci8QHyEV4igGicl1RDghQFmAlMrqqS7ZU0xrF1ZhnpuWiB2seN66S8MWmtj5w49Sx+ULOKR6bFdgMd3j5HrON8Nvm5enJmm7hTOxcOEf6DdQivWbrujfkhgVSNqid+A6f14ahSHgA7fMTUkTaXxmbQJkZNFHw2XLuuquMUv3tf9nh+RysOhXmv+75XZNpdM9/BOldtGRSwUBR1mDpGSsGNKhUPkJ9GHssy+UcIRbxYIzPh93f2xNqLpOeZ9Cgfw9cyYWhU+FdJfOn7UQcGWVV3Qz9pu2fQ90bwTsSGcqUQQOLsaVuxMRRGZAMUIwUMGYRsdGHMuqK1rW7DBqDq8eVzM2Oha4yLAaGBmtdDdEx8jLZJfy76YnXbzoGQPeN9nheU2PFh2DuAexEKTcmq4xMpQRzPZmbsU/BVNWnc5oPj7ALE6MHp/cgi/aqtWsf9gsmzIHbVIms7DkDzI8fz+QCCCSIMmXo/t+vzBRZGQ3xGjVq0hl2NpiKo0CSG2yBMaRhfCt+K9Uq1Ldc9d1CbsP5e5/O8WzBESuVuZYUEOe6NuI6WkVIdYxTjGaKdTc4FCB7skTqCIzsMtiH8EcMdDPclOImu3aUoc81pDEeCGnD3fMRUqtVPTYb+EPGHxMWAugLLiutRfdhkS+YNVoQVI/lSSzGo0Vbz781/RvzXYjradTeGwVT4VMIKjXfFvpJi3YXPNbMlcCMG8Iw/23f47Hct+7Dc3Dxe7vPMjlSuHeTOMKd1L2Us1S7qByZzk4z/S78H1s4MAxFYsqknGxwHRWXnp4ib8GdsY+rvK5EoiJ2jshnBfx7AiLpORjsleJ44bFqX2H3FpCOW7az7JbQzxB+oII/s9160sdm3l9qGwwVqpyhmh3yFwTxw7XKRMUgOAYJbC7PYucoGy8jyWr47Wv+NqK1Id8ga0kRzcl3u0A39sCBx4RVNXQ+i9UTKi8EryrNsx6N75B78ZM+rA3Q5er0Ru+d4LgqWEaDaXbT0UZuv1oLOJv4PCiuLMPpqhU4uvLzHBMJH2qFnAt9NtIFGp3Y3SdgkGIllZVrVNX0WSXEypO/ud3C4mqoIGuvIoVeevgvaaIRTGXQvyKtnEwP4CRtS2XPFHcJd2yYyIL3sSCId3v2/g50aS879eiGxTaFdzjVB2dy0QEikanydxCjznPrIRawYdbzKFUFKWDiMpWapIf2o/m2bffHgzckEb6pQowmlVrS+sf8H8YW/gFqGKyBWjNBLeq6NfcSRmK8SQ1NsRxjmfTifCdYkNMY30S0shdO8oP0bzzM9YzrPu4IqC489WivNDnb/RwUoHr0FSbPLnwIRJ3FwOZPDNPmNyY0ToWaNLNvNFAW2Jpxzi3de+HcdbH6rAvrFtk6EVpuzpXhrvIsc1/qyDb3Hr+it8gZYtgSSWx1OM5+Z9IJ5HGuns8HT3nwxZ6iMUTpL2E6Atshdp7ubcUFma9RTmIyy29c7BC4CpEOC0HtXf3ZCwO/BytO+z4v6u+4tfMf0FVmTxHvwY03UNgAAAHgGAADrxrwdjh7cfBEvK26vcifPz12eqL9poYyNBNgZ9FGg8lHvjpsCi0SHXBinj/SraRapv5xslaDyIENAdY2Id4kFqQCM1AlvCCgllLYml5BS7p16sMuUzIy7lEUPKGlYI3JR+gOkSft2Kkp3jith+XXlO4e9BvVWSU2sLxjUZzR3fgfkD1PH3kCAZhGavDwd7FPLj9hckztyiriZ/EJ4oHfTFLxg6eogjbWxZDyeSMy+lBeSSCssoTqxDhQg44+y4VhiBz1jBj6ur6koIlP1g+jBIPpGN2HMbYl8En3Om1BXyzPSRjC27G7rMYSOt2gY82SlxAEO9am1QWsGwIRa0xjOioCml5Tzsmf3wV3a/Bb+weqRMMO/JHAZeBQt4StaeCkE8vq7S63rF65780Fv1lq/7XtJns/3kxMLA0qVPjpQ/awnY/fF73jT0+pxjyhkEkibwn7U4fkTBDacOBE0/OR4IhvYuJEByX9WfTg4W9L/SadYMxULhD6GJMW/MsE6DtT2D1ntHCzOpJD/eZZmq1s6eI/cZhiyevqWXLXmXOYBB++LYzMF6Tdqnm+Zra30B0QOsDPFLGq08EW2lG+sTiFq1nbXKHsuMJ7CEcokZcjn4h6Pc5iKpmbHpJYTGAa14eCWtkfsEuT7yjZKPEvwExJ/xwgCQy5VVDwGRuVvrMqlqNtf0eZGsmlHmdPvM//RxsgZjxVT+n2chGl+vJSQJfDcY4NUNsmMSRryZGIhnMt7SP7NvlZd1UoBSkX95/EHWgLO3cQmICKu1coGSGqxOYX6ZPntoW+AUSqOGKFmudQvnPAzqUUSORxQhM7NTvyOTuFPN1L51hGqmsXiWLIhmHbFa0o370wDriUPGVSX10ofrQwDR+9iWYRKeiP817wH7ELH07mZuEsT0RUxOSeu95KXb85dAPkYi8QiFuQb/HmcDFb3lCqAddbiv4MKk656LgTdMfMJWDLoew80Is6aEeUsSAvv+3mk3Ah91bidUa3RudJkScLKNrV3/KqL4OE1D0Q3YxeLJiApllzTYN7ZKz+Hfp+5hICceKgPpjklm+TqW4tbGF7kmN6/em6x6cMjnOOlNuZouV5/HrlVaqrvQ6Z1Rhp62fPjWS3sIAIotXVJWbJVvhpa102H/RWPfgfvLyoYKxPZ6GmYbJN7WZvTm9mJxhSAFmn3nQduJECyWJ88VMkZGcsgCyArgGmMVXznUStZPQhoEbVCiyc3K1fVJRaDjF6UQZrlYORgW/PK81kMcZXmSk+oNDlKc4XS74YN/wCS7gLQIwNfzF6CP31y4jHXi2XTkSX4KExXJL/FicZw6vS9gGtkHgWtXzmWSC+s2K/o29JYTHA/pCBe2H//1eFlWD3VBiSIqK/oj0nbAToRb0PX9/s3zqqXXZgcbE0O3XpFHHqVWZZcjADXaRzoyNObQDQkxRvJgT3U6sToXfdE3CS6mmZ58quW4lFrYyn1yWxa9+V2tomfQsv0tYDKWxYtWHV2x0u1Vrt34lN57lzHz28Sye4BRGea+X05f1Li0M5C2HR0W0LKjf2q0ya2xojbwygM6ac+zRmG5mf3qPlqSeJHe5rF3XX7eUyQO1s9WniUsbs+AoQIPIb7Cqj7cywVziHzsu0w1eP2W4ZbSwj0gAq0LpOgKm6GEZ/iA292SiBbxKPp2IM/o14EmRC3CkjFmo44w4aDHPEHKDmXYJWsGb06j6QXCVf5plkDfEi2sXX5zf4ud7xnp/ZMSEnKtL9eqROusLHWfnrS0Izi9j4NbZP0iNPdKXwOJfuZxzXT/HKBeMcI7wE4c8aPPaGFGsnu8/QNtyMCY//9PtbjXgv1ArQl2PMbj2TB7S2rd7IK3XuOySNw5UHtY/nuNCI6a08Ndpd3HB3hBhfwnfuDJ5Q/GqfxuvTfXJ+5Mp1YAhFEshlxZJES8VTVDcT7YEsc20ggexwY9lxZja4BWK3Ta2TLiRMXBZkFGpP9leRHOrfgd4gand6U9mqirFxf/53PLfsUqOQH9DSkTRFGGqm89Fc89PkAq8exbcj/H/9Ggg+CESpxb08JsHa/ziPANBWcaDpoPjO00mG3OHzBuC4hxWBO73Y7ZEr7B/nJFmaRwEu6QlN8FFWHlSz4dOnjGG4pSg7vrpwqxwTUSC0sSn4KIP5XAE8ZgIusRQg28QcncMzz3FL8ftjcEwpQkHzebTQIuy2LN5QQo5VWLDQ3AAAAiAYAAACAeA/BV8wUB4cqbESunI1j2JRdQTtQUhVELaqzUlf+CtIbynJ3wMnmbSpB2HqFCrccF2A1r44JbFNCIqcsyjDakqoN2/tq62i73PKfxgvsDqh+UlrJjjd8oNf4JbxVoClH5ovK3Jq/NnVQcMhS9sDGAaUXXk5W5buIeBDIjNowhfStt1NYLhWIANalSIGhHTtWwIUlKKVBYMBFikvhj2i1WU+DpgM4T0hbNCYc0p4aoPEPGDEHjnIqOcL/W941nxtdfqT/lD02mm6c/2r2HZumEH7PMZ/E3PEibAVq3vxpQAEr73t0NbCy7aEopruYI/P8VKVlWb6uty3NeMqBthaJrVIJUn68LGjWNrhzs98i9135qNGrEquM/k6SXoFLnJ3GAPm/HMmqz0972wMsm0GGucrQJcqyb6GJ9qyCfvgFw5CDgD3HzjXuOM82sUvF+jwseJQ32vV25T8usYknN7Zg4KnxP1Uck8lK/Y/c2w5pNqEHp4S4k5wd8PokZizSV8jLraCJip4fAKtGHhxy7tBgJcILvc1fqZVReixwzst6u+VR1YVdWn/tepyY1FRV8znJmkh8sKdanfXVA2XKUweeOQ4Du6ak7tUpiHiYA4kqARi/Ulx8d2HpRSuAvBYeTRqolT+15s0A2OClpJ+lxNecbDdSqbsOBRD287inuN8MxmBnEXU49fZCVGROqxjWew/LMOJ5DUQfQL719/Sc//aKKHvUFZamALvsrROpTLWlDeY5liSDtjG/tTAIDZlLcGR3fRZT3LHCVJdUUshA6039zdO50JvwC5jgJ4QH5T0mSbNffciRwWVJ2VVimytYb2ZLGxpakzIz2Xch1vwEnyVbuwgE+jxyDiTgpIRtp0U3VTk9QdWS/4G0VQZTuZZyfeMW4S7bKJveaHJ8xQY2qV0zAvpstiTOSjZwHMUcgUDS/ZRjQDGSYURQcfm2q3DpFDbyCuM9CVLmtczQ8amnKxj0XlMWzbhdWtrkZd1eYLXp5F3x5zj4A3Z2W25nnbe4nhoxje4V5prL4OtZqqbQHeWmWKfi/C1J8QeeVFzko0avjCh77GX9qtsHmDcY/ZsqaTrP2isdbe2z/Zf+b5xmGAh8JW2DH7gaV2mrxr/ofKkX+wmYGfi42I+X/xjxLps09G2mVaKNWQKZibfq67Vo//GF6TCzj302goUAS8yakxzypgLB5hPKB2LXt4UIDdLf+G7T7E9wPTdyefdzLvhhu3i59vMVPmsYgyXuCFNYkK0bc82FlXdF/38414bVI4txsSYqnzdwHAZ97FBBlOHDaTFVTwyV6iZIavEcdKyitsqQyacpo2bTXn5+Uawqu/Hfg2d3Y47wLlxBtQLVCqHT0FrUN16UAirQuXV7C8rJC6OSdpukZcZXkGszi53vpYM3r1mT2hSK0qLAyUGGzXm1CrPiU6F+eFXSZk9D3Qsvuo2IKWPcCHRPgooOWxGKF9K+12JF/TxoyWbg9/3lCHoUGfeu61baeUYQZwdViOdgMEW1KL9gP9z/ObV1LGtbGIYCNz2h9LUgB+SFPSXWoNPwv72xUpIuVPwMrEV0kKY52QdirePjBcxHQrbNL8oPfJTfIr8MTsZp0FOGjRCP7eqLqzNplVGlxG6Q6yg7PCj3v3ARqZgectHtLxsgyOiUBOn7Zkx89WI/DEiBZ9YA+cPuUkhBfhQ5VuZzf46lCi63uPB2AUBcOZwGRF6mwht5Tay9VzUAGTj+aSVW4Gjyp0a3JennROaSx96hfR0gbgDh82n/BXZr8eDEXvCqzb9v5s5aV49VxCcsVgo2Uzj1tHokqPn4eQNpOSCxTeoOIx/iOb2cUXgaEHcAHHAR/L7TAFW98w5+oiVYNC/4Z4ejqfmCRYEPkitezAkKHkixvS8IiRRbFFxP7c2PhVGZvD0uIH2NOfxyLmqVsQT+XVaLuwwACzJNwbycewbMfkO1lvG4wL87wfKMYWbCCJdNPtc8YhCle8Q228PV382xcQMIVyh5GrpNVGz3wDg2xDFJoGoSzEtAKlVndYdcs7LWvYT9TGVPRLPnc0Q/cs/SX7qorAGndiw5PtCFNLrilPw5YUjOBWdr0lw90pfExeAG9iLx/kCH8ybd9tWhga5dzybysdiMHwBMCMMjLgR2I8rnbwbd45JiXLexuFvNnpPC+hUW48Y1qsaQTgQiGD9vg3wMO3VyBty45nVX4nClo0k1PlX34RsvQfag/kVplxE4AAAAkAYAAL8FC9ZvLHaZWRfgWbXI9jPKQMbVmw3pcdP/IY+UmqgD3XJVC8HoirPah5FFP0vBJO+a7b58lYZ/f4Bu3OFz+gvx3EFDth0YzyIa+XL8eWXedlIdfLytjocIyipsgLQ/o7TyaXzTB+sbIoIuf5wciyArEzMvkLPwZJ0XwMTqLp4dmHCX8Ql8tL9oPkfRUg74y/4MB3Is5OIwfGqWb3FfwjXynyBzaddaLX46aS75WW0+kPUKzpCX6Kf4oJ99DY9gkLVcapSEwpCd+ghpReAyzZOvrGU9wBhYrZMEZXrob80Uq266RBqNYKHPD1vvrR+Jh4ShGr0iIPgEeAsHEgCntTLTB3ALGYfvQ0VfuKv7t6rBuXXx7VETEZluKbyyNx/A2Gg4ckNGrrtrIfIUvZB8dVymtOjqR+HeypCgJIGvJLCIUD/XbgsUmwrTvt6GTfY+Qazhy7wkhFMclsMJRLX0NVY6tgSEwb+pqMw6CEOf8mnAklivi1u8EkvDtw037vnhitA1XMlDiD6j1tp/1Ua3dcMy2v3uOcB19yjpaovUElk9J90tNpzXSidRLe1osdj8dEVIU7nbUO8mWDMwP+ThBPhiZYVJlulompKkCqNs+J863B9sIBL+g+Eh1MMaDmDC2DwIGV9LsyIBtjFlOLrq5CCBK5ATGoKty2MtEGMqocfkb9khOQuaCxVQjfJmZ9mHPK4HYCAUxBls0Je8/9MIjOC4lJl/nyuqd8xitxaJ5PMqqjsSD7BbZ7v/AFaxCN2XY9RCQHC3NSf1H22JqJGeRBTJiJpOtlyHWyzp249/OEuBzbH7j1cLJvUdH+4Byd6sfS/60yD+e6XYAtyumz9pez8yS2BWyK4DeIEzakvB+hd+7+xwmU38hju4JXWR/nUvDcll63YFQoK9SjV1bH/ODtuM3NJqhpVeLGDCMuKmYQt3TmfD+daCWAqnk+/xtNxm2LC+2K8lZ1c4RaxsEEN2Vjzojxf63lhB6ZNxRxLH8ABPaxIP1UcWARi0sR659MON8FIgyWkqqOyX99WYtPL0YVyTkvc0p8PfdDL/l/PB58TSeA4AR7Dp2n0HB4X9QjSn0Dzxo7VIQSNNwsfXNRym1dRX9Ps+L6bEGPR2vE/GWjtxNp/OJBG46hFSrEAFd1E9M1+BX+HFoUYNy540/VkTU7VBYZ5zOZdO4oOBZTkgXCtGGxx1vcRcHanDJmjvZtabFHuRss3YiOd7XAMM1L/fRLY+Qb1z9tBZgKguUs2piCPAvLx44LWfhFBe1SpFzcFP+zRt+V0gL8vFq/qkb7bv0sm6izjM0Ba6lswsAaFosEMGj3eGSt3iAAV4y3/Cs9ZbUsUmwkSq+E9ZWzorZZe10DVDJAC9zYVDO5YNtR9poAR+7JptMM5OXmoBu/53HXkfazUXUBTigbGM2dWXKWWGQlxltHKyBl4Cd1r2SqUzOg/pJYm0aX8UsDTFFpUsGV5SkQSCGNnBnFVOi7bx7ncPi+Dg36AAyc5u5TKzbHKYFgXDVHu6XhiaIpVVNPWuUXYcVTMAiVWsh8btMej4hC5LEq5JnN630qBr4fbS5G0nS262iNsx8Idkvr8eNkb0EWuJQs146EuMBFi1kuUHgJ05CDBG+edojj90FzkdrK6wRsCC7vtGkwaKJ+7xh3jhROrT+uMsNJHURaMg17zAbSZRkiwE+zsut/ZyuGYDLtTs+y+s4mfT2yJw8rNL4Dkj89KU4NNFo2WQiyiuZ9uKErUvP7Ng+ddD+RHFodlregZ8m0s3LziS8JusPusLo+nSw0TMIC9atIpwX3+ntlY0XdcE/D/8djJkziMxlIkOOMM2FWUzcwSQcIIxbrlMFI7BMIVCfAnVfFPBIAD2gNxqnI7D+pW+jL4zSCoJNodEqkTZazumAmYPMwIfaUK4Dwp8l6H6Mi7r/OGLhKb5sKC+WJVpjjOlw/gqx+3yXaWf7RlD8oxOOV8xotOcJ1rOP6ZCaywVFokqgZAmPdNIx+knZCCT3UU5gZKKZEmqITFHUfgfS7aMCIB+M2aqXm8Tpm6cWuquWBkvbEYeOo8/z2GfU5PPbj4sPi2wPmvlJYfOcNJr2w5lxv6XkAFfoPLHawIFSJTW0FmkdcWQuZ8LvlmIbW6hUu6I/gQEcrcBe5W6fNgA6rX3XOwGT50/zauLeJk7Tk6R90qI2ZLVAaXbLW3r3u13V2wSLTThfqOwfDnXeIdwMWNkKyKetI96f4dV9OuAM4rY5QAAAAA=');