<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('59EA6C618D682B20AAQAAAAWAAAABIgAAACABAAAAAAAAAD/vrSy8cw3IN3yoLSTNtjsNRXb0K1HKXPVkW+qa+aAxaXozTvKeTan0o5lV+zLiOKNIFR0hhDx9m5StPbYhbULAVhnLvPROQ07SRA9P9/MrTVz3lLOXXN9XTdOFouLoysKFXWu7cLWitcCFSJ8we1QgpEVyQfSfqBmE6ouI/bB5jI4VqPPfDkAwjQAAABQBgAAYEwf0renUA5cJqnoi9jxQRkny+NiW8OzreWGwvHFbUPdQM2ay3hz00t5XsdyM4Eluf2biGv4p8XNU5vcY68peFNP5d+JvaM7eJ0MY4wuMv6EsUa9SJyJTYr+Kr63GjDlFkn6SzLmJ7WhMci//3BZaVAZxwKB2PEj+DNsgUT5diJaPAtp47KYSnVsS7nWpyLAXRamJoGXPOEdGkL6+BabAjQZt8/3zyZz6yLzwQyTPlNvTAwcUmWZQu5HLWTlnTbpu3khbTMM7hEqXlTefOFz+nNgQbv3EtphWDBTWP/Xhc0MoAI8ZuLQMef4YfRsBpefH4Ifx8e8wQ8MHc7ExbusJpyZfoHa0d/vnWMCS3L1+5yWPxuvRKJoGHgojBhWkROXfgFY9IO2dQzBb2RsbA6E3b1c6Mffh8bRirIqZEoS6XJx579aTpjxq94M1H7x73iD8OTjS1q3UI1fNLNBy+NgQFj/TWUTLlynf7R82aG7iF1LubHI5xtdbTLTNdOF3OAExqLlFAQdBKH6+WMgkYRgVNgwQKGs5ZAo+Wln8oFThgVCDk11PMXLYD/MIotAKhlxnuk03p3sCHRtzRhtRm6wn1cEgVJJZCEqNL2UIAhjC7krI2p6SgPGiIShBZ1ZmF8/5jioLw1qMsA2bFYoDLuUj+lTIN6J99r4BexJxXkym+UaSFZXaemEuVJilXTqOhDjREfHvdh0RkpsumDBE8CEN7Kg9hcg0fYS62dNoIQpDP/xxGJQnPjokU+pbLI68KlR+zROtwZurIFgvIOhee15aGFveOehjak3jq9a1q+JWET2Obac6rIiH+0yxg75S8bPf4WTzaTHckb1JASFOZKowlUk7Q2ZKruB3o6yOqeSBTi//mm803ynteNvomvKl00KycTiA8J3tIzhcjcszYvPFqQNlEjfQ52ExypCj+ymP4TfhlFeYdsrcatW2tVzQ2PLgneeLZnyi6FvKdp7Rt2hlO40KEXWHztP1xwLZ4HPkq70WRiowzrr/GYRorjOUcDdhTLjaOvQLc1QKnErNzEGuUVoC1Lu70qwWk0xoXv+hUpQe7XpSlyGHXHUwd7kd9sa+FBrb4/k4pHNUv3SF18LOGxNWqeN55ZfYGA2flxHMBbEc8W6uRY0TYiL7NQA6tmoDrL5D+91/eIVlQXrypV5Hg4MpjnaZnaUHmzQIPyyPE+G51cJBm/bkdak1xhDtfE32xOe7MRdoIzw1X7pAecxevnCFvhbr8PxKqO52Rmu2BuhE6Bn6Y9e+ALPn8MmwREo0d7zKALnwYO2RmOS0j166TjpgIEGRyK9d4RFjkl4Ug7waJ63tkY/TbjgHPjL8iOKYmz9XDIgPglbM2ut9U95TLSW8C9kz1DAYkyX4PFOVI5rb5v+yAJ5tGUEMQKWzJiQKs1cUBz6Bj1sn2eJOsn2QfqmjQXgc3dD9GCYqrVG06LKye/dBv65gpHeBJQVnIvjVYZAVcCOa247yOK3gaY5uWI2nkn9N/O6CkRnDciLPt/r9HJj+2ktgNOeldDSZRdbAZF6MvbHJRSenZNsJg3LxQ2z0OWStyNCBQ3ZqDtG9eaD45LMm7yau8XwWXqXBwL6jExr21hOC7U8TclVHsijG9R4CYTVOKgPUPBXC7KJ7QR42Vy909bC54zhxAqnNJgB8QhpLFsgoNLGs5ohj17wdmn3TngUgH3QsXMSyJP0emk6ELFbs7gjTeIVpRJvxcUGsRigcQ4+97Y02BgMSJMqWs6daxV5f4eH6IJDP6rZPcpjAroRYVKvuwEiHB9qA+9A9lby/H4n484t4ME4I1ILqco30HvVBaNo4ZqIOn1EQ0Zt0DhWPztxhL8EnqxC1utTDaedvj3aA9GBkteYVCWmiJxXdhg6gr7X/LxJiKFjmX8LY7WJb1DgeKXu9M8rc6OpugYrs8BVjH8wC+rKYlV8sm5fIma+soSIj29RGwRaNkhnoW04o/PNJGPInNxA4s1kSwnXdAg0U6kpQmvC4FrPw00wTb2Jm5NMU/u0p6Jds4lEtnaIRh8/bY3FjUMf/4IU1EQwcGnE1qf3oYa6vOMNjjkhQS/5y8vE1QnAISd6b3VwkGTBl/H0XE73sbBZujmCm1P0pyLmV4aEL77MDu/s6ToZUawARgcUYPFG9kmDd6s1AAAAOAUAAO+9A1nwYBVM9nk/QTdrZrSltE4FNVJGPHH/9HXoWV5AgZI2sf1NI9AbhjiHwNHaqj8FqnQjHYdS2ILml4r8ya12QW74lxkk+Vy434PXW424YRmRuGIuDOOzIpRtN4BYcDcMFAqK+bzvZOlb+tDg4zCpfNgy227wf6VEKuqwgsMtFws2kSfkjor9cF7fVwjjkd1qZnKeSxv2xkkIqON/A0Frfs7ILVH5oRPHLVbxy2v9jWsB+Psy1m8CkB7LvrSI/gySGsD+Nh+yCgjP+mc2jJuXPK3h9t7zGbscleL1ZqgqYpspnzm2r23P4sCaq+NjvtCpV0xe5j1j0FRmGt4lHePDJutoCPM6bGzWtTRTXEf+jW0IqBMam3HDq4BMUvFBtSLNflM1SPvBopYXVnfN0wgcr0YsxVdcr/SK1o2+AwwxxvlJ9rblROI4gF4WoCHjRlH4Ucf+LI9Kg2m9HNNPCMFIZ8oC8V2HRR9sm/87MvF4gUqY0F9eye5WF7bDWGKzLGSRkQMJMih5FpqNFUjL4iZnSioN5wZBaFvPr6VdxqHeipAPc25UGY+bBqB8Q3TaYY3cgaP9PwlSpk5zvIDPfhuMueQB0lkKI4TfTQBv+eQ+ezchOcMd5GhWo0qwK1dbt8U+Zhl7tEyzQnN8c6Rysno3WL8TZ0wIzeKSANST+1FTFMkgQo2Oy3SLDIOe4+9e/vJ+eJdVpNSn0JUASC5fYRDQsc1PFsSpgAskGM6a787JCJk6YOkF8YFOJr7Y6KnwswmBhuck5N8GDqpcIXrXcKG7N4WFkCewuBg2H80AdkBTwK3f2jVKeGFiTIKr6CtbbvLki/6GsXpb8z9DG63slo/eHPjvCTorlUTljg2C8Uc79OeeJmwxKsreQof6u8HmAJr2/lgmvKNYRvMra2x4o94sHMUVWufJUuXe8CdRyZ2+Tn6diDxCFyNSiJmFegdSaY4gBOE0dn/fKV1eABCSZe/Dmo4bQfEwN44KZaxIKKTc9JhsvgkVvaycYA9h8nLc7eQ+EnxEsXzLGCutPuexFX++2zCfOhjKZSlWq8tALBFlNIwIKDfGDaeU0LVdSL7sJC9MW2cDVdSS8UkJTBJasMadM8n/rdjOLENnfk2DAMgEOO+MZU13PUjMiLX8BlMvALyjlUEvc+vi+PlbutAzLMG7V/bvHtjTd3hgvzREPUioICGkVeG24Uu3iR/c7DMf/lGXlEOYRQJiHQXOKHHYcnvJ9uS+brgnC7KI3xhtYQKJHSu0gIftm4Mk5XL6DHK0ZfBSNGBM0TW+1ao9Um4jm+hgMNKwk0cE6alhJrzKK1O7QUFCgDFhL6e/ChKWovXyPKPDjQD/iMf29B8+nSpDHLBSbPlsiItKBqccLl4hiJL+LwdrjV+DnDLvDB79I75YbQmiDjK3hyESV9HKNYpZmDjWQVnA3nEbxe1SoYLn0W2rQHQ1LrRRLKJMLDEOzGfYmouYBQPIdFqpVUZ4F2sqOCWcRt4QnYIxWQ4oBYn4s3d/islqy0Ul2IwR2y6z4aMV5ZKUnkAiKbziRC+3zW3unBJR4NRjkq5e3i5fyTfeOsWPd/jOH+lZf6QgUGNcOzUbNm6hpX8t59hGlalKLS4ZcREiWKe4oXouo56MR2Ww+zyA789YU7WL1bw/BOX6w+qiDTJBAnz4ug1/Qe3k2Rg/xW5PY76f3RtaTrq+DlB4DN9NOxoczBkHZB/mT6lMAnq7YXNyyBFU7k5dgMG0kxnweMIDIv6CBnXevERnRVYOFs3zzCeh1LZfYy42AAAAOAUAAM+E/eHeRmdcxnFvAiEMKuG7VmDzSt9eLzdvaNhZzDVp0fhleZ2ZxzwjayPuRTGj668P+92RplTBFVMraqM6FRK23wMKvJth2jVJcAbouEuWaAJ4r6DIgkwVVa0NVeAy5OTp/hl1jnFNz3PK1KXcOAqo7JmXFyVfi4VEWHStHHg2Jr6rTiAJQ2roYFm5xMH0/D/rowTqAL3OVTpQtpDpWZzCp+4UMW+K6kL7pxKvOEYNJ7Y8K9fBHZ6P9R3CKns937FicxflRvYv3jCPXUpT8SrynEq2dimN2jhaxkNBr+eCZEuCRsekGNYQnqBarL5r0SWVgVMXRE7/yzJ3NtqXbm7dKxDcIwmgarjRptwFfGoBdM4wDqyyCge+UEB/y91B5lrnjww7tH43FctS5Pt59Dx+r2huFml+kqA5foXHxqAw3U/bYium+lhLd5P4q/L6WU8xa1bnkNrXlJpHtt3KxvL6yiUDP3k2C3/WrE3y49z49JjeM9zigcP6xJAtIPBSrj2OV4lv5+D+YWIqi+797XiSnef0M18wP+I8jjS+wBLX11ozBk9wglP0Ewof+oT0eIZU3GAc4HRJUTklQV4nCJWQfkYJxUq6XGoSKoHoB970/48+xT1Op6p0iatM4jwxogCfbyZ3zcPHuuGNpFUqZS2SU3nuph5P+EYKfYYuEcuiAGdkO1YF7UjLyxXMraXL8QOUe0oxFOPr4Ump8TDgp5+2H20AgVYhMrb6/swH3M6a6Paay2YGKhpJbG1pbcPtCPti4pR3qiiQnpEPNrtJC5JWoHlsD8YR67JtMv2XEEMvAmz6fwzhdoDlIVRyqS5kRxcYwZhg+vC2hgIBAy4Z92QxrYgblXKhmVO+co3bSXKj1PDWjaIyF+ngrdeVgyHsxcZTt1zVkdKfufrxlNU7HtOySLv792j4vPnMs/cAL8VJPuuM3XmLaXijhB/D2I5jMsMFBDpv8ATUBp2Qp6fiAqi7YZj3x+NCPmc7LGiOkNCSmy19QEyuogK2+FPNBH09Tj6zzFk9WghfvlC0ECANSjhE4jGMizyxlrYrYWA3NHqmijVU3bwDpr2lnbwOSjLP+I3d8T7EnGrp/nSHlOX+qc4BoZOxLYG7ekw5bJv5GN0gEzmWNWe1L58lwVKKYlLrQfh06D9+vy+wni3GklMY8DLyEZjOSkordUuH9bMSi6ZxQb4IfT3qS5zBvS74wTSGlGzSDCwK3fvUgqzeX+j66gGNDH1OpRe+93Y43WwRBiV5OpWGG/8/g9D+B6zwoY5/1CccQ6V+l942sL9RqBiR5h+PWDWYQepcP7fPbYOW4rpO1oYQb1UCCibZ7XpklxCw/yRmgmdikLbfDbDEPQ/q+GaDTnbJ5V4udrmfOHbPurZ40vyZCgIDAoUhuAfqb4plfWbpMATT7jKlfdrLT6OLUbN4QORvS/WXlZ7yWiN4H1GrB//0eLGCOuVkwb0zAY89VzM+FnBXdhDKPQ4riwDqInmaUAyajl8QnvphMQvqMNjjfmKmwE7dW7zN2wNp+fObJoLNbKTYJRl3zcHqFRb8CAuaaOECZn1C9hTZrK2pobK/ls41DZHBWNXhHxsYSzZAXB/kwwKw0UTi3VHyY/xecepydAJPIrrPdHVjh0xBQ3aarnYwL9M58s6BJbmxvKio6n0yRjh6zZ43kyUKcAJ9KauR2YBTXnC12MdDO6aJXXBl1yvzKPlLU2I7zGTv/rpd7zN3JCPShHchZ6aHMustOIQC8li1iF0lGCmNuwSDnBklbhhtGgd9Kuk3AAAAOAUAAA/vb/TwulkfuuXS+IwhjO2ZsGjFifJuKF050UonMeqX2VAOilr9kI46BR0USX4yha71Vnlb2LABfIb9nGFi+bXwKvlapd7RrUMiCWlALO+wXxOwK9mtBiXx4Nq37IrcVBiM76n9WYI4m+xNp1m8z2LB/xFEvW4vKUUGx3abrePwh1+XUV9OsSH/OviZeRiBVGtgDhbV0D30mGVFknmpTtFNXxTjrObzN09p7EcX4flovmoQUFkUgaUlrpPPMMjCiUuayFpgchKY8e84OM6ZtQ1lxA55Ndp61gxUKc4NxR6e6bBmQbh+awWEGN1WAMHpNpf+PN4HPgsUeTP23OLB3p6fGzyrQTdy4dxxDdpDzHEK5ZjT90560oM2467RXnP7SpSAtwUO1vbxGqEUlDZ0Dhp9UGic59peu9T5GiezcusnDNozdauR8HNIDt+hL3mPtMkzmbDANfrs08GgjdhyOo1nvvpmcewd7G+ukNHp+NIb8csvtL3w0HsjhA4vayVjz/ympiouaWyTzh+rJCexnJfGlDjUV0euYrcKQeMUMjwIwiH0Y5dmW1dzdk1doqnWYWiXq2Cri/QR2seRYyLVlMfjwrNidl2vmf0aGbAT0v+s+M+E/hdwuqcA+8XcR057mikpvwbm3Mg6kcUxmuD2+lenTjRvDdoSjrcguaGR/c11YBJrAttm+TcNBizPYMJx9Y/4DpFhjfsWVSnuF+YLkqE+UFe8hqADHgp9qlL1A7lc+esJep0V4OMNo7asc+G/v2tZwHLKdTmYqMEpcboHSv0GhUwhbyRDwpG20QKl4jdFGtDkzu2hvfC2Hb1Pc8pJ2o6iA3fqAC6d8H1ZAyrYoUsDmrF8WAWHygbPJVMljJiYgdFx++5vQaFliwprMp6RmxnWqM5AC/z5f2xLvdXVlhIFCN+FbZj73scDmrvUBXcbFMM3Hr9TC+8kUkEmkDV+iGIlXBhXz6+5iJKimYjzIM+FbzGADjsXeqNjo56VQj6MGeURSr31VMNy+hbk9Qq3FXmpIUUOSGSEPEn5di0aXb9wNQ2fLIaXZnKGAvbfk0cKYDHpzqNMkAbMTFaSgnZLbGsm3q4Yqh1ug0f6CAObvQzM1xlsp0tqE6JABYrfWWP4UKsPg1BapbQjsM9D+gSiLE1OGg30kJc04rVmcptLrnbmbI6sY2jAma8eiYmlyMRoIpl1Y9RLeyyNFzgYmxlIVyP7Of+Zc+ghR89BfUlARzIONpiVP6g0SMtW5frW829JdSx58AnnAicbP8zuPEhHeddYUhJ7H64e9b8Tz/WZv+K3HiYlIgz9MDcooxrPWfjQael1as6anFhv/8lvC86e+DUL5DfQpQFDuSmqg60UlCwmQgyare/ns0+tw/XFalhnqN/6Ehp5nmKYR0aRX2NFm/rcwJuBEZ6ezOiorG6MT2F17RjSwGrtSDJFa/2E4cHblqTfjKvcuvhWnn+e4AozfSP2Ifk4OXqSWw3qq8dt3726HqIEzWBPJkQvzeGtYMxdd/DFiboud1/7EglHNfVfR4yHDtneQPE+Wwa0GNGKmSiz5voNgqoY+UpwBqMNhmHLF8S31LlZeT+69N88U2M2LT81e3NEA/5w/TTTFua/L+8o4yaOlFWmZluOlA6viQ4ORsRR39efAaAMsPWMIPIBAOF5B947IjzsLqYjf4mtHMjuRcwN7BdZxIgDAk9d1VbkFzgl72Zc7KajwCvT/paMSa5wk9efDnbsaMA3GNwT2PJomAQ7+kM7bs2TPxzR8u+Q/AiAtCtLqis4AAAAQAUAAKMCtAN6kuiZf+S16Rp/+sR6evDoc5lX/4ielOTSkB0FMXNb9al5ynRMWwbWde555D72QMqnISimaDe8UWsZSZhH3v5s5aWb+4KVxGea2e78LKrZ9atrAW1meCFxSE01z9crJqzKYQOoOIerzzhh3424GeaEjHgpAzgsKY983m8xixFB1B47RfNYSEV1UWWaICEfS/o8sE/Kzg2dQmlITcABGlTmOh9d4033iHhPmy3mMpAJ4/Etz/Sifzy1oAHmUY3lk2mn2OMugWusg8/OyybgOBKlvr3iCJrLJGm5hdCwbf//FwpfwvRoy28lASJYhVqbXqi2h7pvpnluMpGX6wossbt535Cn/EondUaSlC9k7WWzJMuexftFFsu3Ndj8W7cYwGXtLLiJBiXmntWrQLoHdkpYXTOfdO+NM6OW8AMeJAtXdHySNitbwsmr67vY+Lu+HqE7KaomGP64N5OLyRdAtG/D+pA8j3lTeJp7EXUhP1My9NHueAtu/GAJDRgI+NQhuDBd2ldJdAPNbOYMjrFfn9V2Qz4mBlUBV5u56gCMdJeEFOl1RN1Dd1xhzdIiMCbfI5fZYmi0mNnaPj997ctJ0ChwDj6iGdls7tG4s4DYyv1Ma3zU684zgIDX2wgxclySjobXx8+awGlWmF3q3DN2EGCirPVX8Aey3hcTHzQEQFuc24NCcVXI3njRFJHnVsIMyrwOuoL6T2b0OthnsIKShlfPUbL5nOkiTYAdiR4WkZYaHXyz5+r41VcSl0D9K7phnS3YR72ZE/VXtA2QyBNeSxrU1l3hjyOj2dmDz3gxaja9Js7LRjQtbb7GAaVAgFULFY1vHADTNO9n3P4Wx9uYiqWzTgY+0wJ+7oqcpz2DyRhP7kVk2gWyN+muxcGTDdu1WVamZn0Ljf8kUBm83lGXMMCNJALuh6PmuNrrC6+Wy2BafIp++AT6L09rQiI+g7Ex6eRQZ+5j9nYfniHnYl+74GMhIIWsle/vm02/kjsbqxq+FsxbQEMoqyfgkTTShX1QfBR4W3fMthQkgRJTNBwzBLoAkzDgv4pBTTfKM87EA3b8/enM4uVIa2F4YrxANkj81+x/Xr4goCB6eTza5bT6/wnEnDESIVopybXBOwWQXRpJLoVEmlOT1hq/AflWzv38le82yEphKn4JOP5B1O03pd6aSh4rqLQfvra19fjtdSqiUsimSZWUUSFfenzq09BTYE5XRyulnvgQaAuQFVnXnC7QnaQn7oonXbFezegzKUSDpMSAP4WHe/7zinfMm13VgKlk+QG/Le2UK4mSfzsI57dnHKpakHuzsZNynHnWXRNtIMOfPzKcUHM8LlLEBr0TKw58/U7pkzoiPNlG3VPPPXAtqeSUZE8+PLhtNgXwkiRdI/QaGRLSDbUERSgWqqy6hDqzWCx7pAiyGkd1t43s6ISer8s4qDZbDcdDCKxLRD7Fi7bTEO1kPP0Z9h1z6uBwCc404tOZW4J2qIjiDeZfcfDd47/rqT5or4PFxWn11Rah1wax6xN7i5HnYbrVfcD1vu7lX4p6oVL2NA+Xqc4iqV2GXDRP5mCk9/bDcvyy26YgWvn665mPc/JCpzyLSOiax3BJlKPmQazsSrhwUbHryYZC+1pRHCrO2Wz4MsnwwtZp2dhWGddKToxfi9ZMB896ogRrWDWdtfjQaap2UfzT3cnoqsuVsclC4rV46Ypu3INe74k0VGFqLl3zi65YLN/ortJs4zhFUf1MvemIAsyTCq2F3nd80d2JIivZRKTRJDap1/xhaPoAV00PmGcHzAAAAAA=');
