<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAADYDQAAFog1xQuvAH3sHoH1rx9PGVysoqwjfBTbAqHyj6DI5Ih3BHatPOn7AFbhHT55tvbfKyQ9AT/kIf1OsJjzyyYpxmbactZLRucSawzUWvXfL+kiN4G2zilYwU+B65bT5bCzt9DFYo9K4J3yKzY1jCXYZ3bCT4ugSxzBbvhIjbi/UAmwQmFWOhQQWRBnFWpYjkajB871x447Le9U0sOYdu6EHL+azB7vIFutnp4kGDdVbpYNCoeP6FQFK9zfPUnkWrGsT9Ka52VEQQJ6VVBvqt22lWXwz0fPbu4YJjKm6DvmxTHnq48QVPqEyVFUW2zv7/xtYMErOHhtYkTEB7kftmW7mMQvP6igUBJVOoZXx6BV1O2+MGDBIQ3UEFJCNNtcI8W0U+S2Y2XOo8BkrBM1mzS+tAyTduBAk/Bf5bP+nC8CxSbb8exS7oQIsUAgRzh2BHWMloQlYUYgGjQzXj42OVeu8b8ZNvWyyzN62I12fXROP8wk0VLBX6/aIEOZ3rhdM1Z1h7/cSt0KSDH+hi7rIgmjSvhopChxv/daEUA6zJNnVBC9ikE8YiWNHSTdMun5epxzTZogXSkJtNqTgjfHH/G/ZoH92uILq6+j1+G/nKB8/oR+TgWTss8nfKRJ3M22weevouQyIPf9ZHgUGifibU8CFg+te6l5L137xkn6CESzEdU+bjdawY6zE5JUtK/xiDnN3zvriYn0ZY275v5NISX+vyTbI4tOYAHuIzfp0R4WLRjDxSkZs7NaAitDEqDCtZnH2nXYoe7J69TgJ0hUuRujD2HmtwvUIGkREyjqo4ZA7cjljJip+UhuPsJdGkUNHVhvUEXkvbv26jok4U0hmQ5LiPpkrl50oY2bGNomkp/kh1u2GWFYPfLBU/8VstAyX32+Bn+/8sasps9SW1Dz1lMF0XnZci9hnLOZ4u8MWuzyehfrjMtjlxgZyeG4TDWj/Yego1x+Dzi04Uk3R/5NgMDaao+Xed8iCsAtcJw7Jotne+dd2MatjhwPs8LoPBsgrEQiUvWE9My4IMZtAf4kREvwL5iQH6lhPc0+xB1Nnc/NzuHJSsGn+bofAY+qoOtBPVqBkKrY5bsh2H8YxFRD+vL8DSSp6F8BBF8xuA4DzNqlFQzcq0zG1OXpLH2xRfL/r+mIaNdkX5Lx9qm/GSaGg+ePQXXIpnCaj1pTQbiKPJ4oCTtwXEIlOy5XU+P5sZgd4skSe4SvlTEM2V3+0djMQrRgiERFGJBmQtdE6FZgo3m0wK8acJHURDkrUtevbOdkL24iUljfwH/IHOY4NQLz+nM3R53HB6ydbwO8DxAutHiIYmjj6UqOyknJtgWa924NOR7blz25hMguE39WJ7O9TIdl0o8v6BQAT1mL6rcxGADM7i39BnEsMRgbyuccpJJJ0JBPti77i4Oga7E1b5Cw6vmPKmM1igVTKcSAVL9r2LU0IVdrJlKG2nVN7/xrJsw5Vzh+50m5tD368v2dkNHLqSAOCntf81TLaxjv2LoRcWahjYsGZE9hmZr8TPLos8f5w9wLmpAcMXmPGtDwk2/YW7fU9jjoTncOa/vde1JwZNi+FpTog7ua0sRgSnlL7Vg7H8Zj1XagnL+t3XtkKiMNZJbJNDVYEZGcIPWvTIzR0UIoiI1J1T0ym40dXOCWRpRprJoR4KJwOU3mMTpBP2+RpeRQlgi+4tXBVJpUcp87yc0dEOCrteP2n9Jrd2gOE8TN9Pl2vcwA3OnrNOWzAvRvIzp60qIpoQNxrFIMkP4SAO6zrbJM6Ol6sz7fQFTkW3EwhRTK5kim7L21FTmOO9Unk7MUcx3CwzWpGsixYhMY1eberw/Up8PG7TVctsD1//NmJqBF6vztIvkNKMjMW9DTdiDXr0qv3l9AQ/6uHE1q6UTrlDcxXUPp2puOu4irT4z065157BZT/o1wx2DsCIuieuQK2TL+b7nrhn0O4o6wSukvEFnA6vn4kM5k7gPnCDGpXxIB2xca02MQhCBVOgn0aC/QAuBnK4HOGH3WEG7btosqHjR/BEg7BmeJzvDuPRCyJYofkUiVKsPvsbwwHayPsnm7hB+BsxRocZbxHLSc82b0h0363bRfe1rGBkcpshI1yUpYcY7mgQi6Omhs2EL7LitXu/zDgoSInm1/i9FwD0/EVQKs/3kG3Wszbuod6mmkyfXKzGlUq1juZJ1LYq+qAIPbHixsS4Hi83dNh0Vc6xh8Qrxeu5Y2HkUNg2ZsAVVPkpDBh1M4DSVZ7gLqPW7PwYQ+o7R+ZoXsxsCoJ9m2uXUPHkWUy8c0aQgy2SQjD11+3jpz7Ml1buXRrv8F9UvKGfves67c97RJq+JZ9RI1qJbU19Xv9UXaG3KShLiMFIdLmoqfiS3flMpM3fQMuSf08nJe5/tzL+XeFseKBZFDowRBk8HDM6rCuVMELUwlDSofm+DBPVY9EOkte4bV9tS76t1vV1eFhHYi8yPESTwlcV+L/Y4iwFPoFZ4aeRXvPqpme4F6kh8Xanlu8BOqGNctw4WF0XT/HFwySpW+ABWvjyzfEKy+SFKogDStF0zPEAQrY9tsYScbtKlClE6SaWZpTnCQhrkHPawLkadjmQfRexQQS+ybX6FYVsvjujBS2NafIukLSn4XbNL4+2DfjxTgNO3x9rtkxQ/36PwGBhzKSJ6riVHcCg/NR8rZZSJgBJI1FpR0kmQp6gruXSMghcV9L9ut8Vh+0CvZQO8m9RaI8bhmP9Bt47qcMnh/FDGMsvvImfe642EBcbZbINq4v9WQN/x16np/jogiSorfJbR+hdHs07q7c8t8BU3Pt+PnojO5sBRZAp/T6RsVsu98krvTrpxODlbK/nedBFou+6642pAUpvs6PKTrTmSNqkN+7r2Jnay80WGUbRoxdcFiMr11v0L1lJowyKXJZgoy5+ZlbV6qazf/KtW2+4uoO9edahbzAhLiS0HHswt8H0VqhqmpZwTmWCqvSmX5JZyyH4TuoTJw0siC7bG7WLhYwBErcMIAgW1wo3tFLD5sq//VNSl8dOzGedlTzPk2cuW1KL2zDkBNaS3Py6hEkzqz4MKAcdTc/pkAKHy0jj6cVijlIggzSI/T4nJeNdzLVL+C4hN4zbMz6t1x6INCDgl6MfhjDn05ZHRQ8/yqOq9vBi0qEW2jIZD2B9fHG85K/l3274zXJyZXOlEJRAiRwbi0ix6pSmRwK6Eu/p5ORHv2auy5aio4o/SBeEbtNrFsojSmEtI5/udBe84R8P7r2EBTRbJQYPZICXSDk75VWZULKKRVCc+DolfqMjrwNOgeJIbJrik6YyaPotQvM7RG/HkB1Gcqu7e4LTtuRPxRDRRHM25VutQ5JA2rhwLrbIrlvYZtb+rYJsv94nCi5ZU78ER2knEKmMhKXO3zrxqYYpQQZ7I1rkGX7J2UNC++smxB537Tz9NJ7Q3UjvUNhe/FxFhMv2lnsLFyQkkoordpkG7Nfi0/kp0STC0uXgUCvr2c2j972cthEqOTPniz316lc8Dg1O33sKYLtjCodcIstlJ962NOrmaK2sbP55TEI2E5f5O8WW77hS1DTzZxW/nMOgvE4GBVDdpApLR4d3eQQD+JoXj1aXmd9/9YU3ABDqCiMd4gaXNP+AS5dLKRZX4TnI4ZRkmQZhJ1VpH3y4sXkC+U6ynLEjW7m3502rxxjOhEXVg1SUJLIff0jKBBwe5I0/gQfDmzns1lFoygwrEOvjXGZPTPX89a6lN/TX8QlR0EhdJFXMtHqsN1gwv1X5aFwkDY32aQsaZBr0mmF8yJEp8Gjjs7gIz2oDyGW4pIORXFxNJdSY4s70rvonjIibPD9HlcsCHYj6jSI9OvwFGiqvgrGuLbqhrdQZctUpVt741qKasSv0iL71M85E8XHmGZUSDu0Gf67i2S3+nRNUONNB3oZJJN+JFQzM9MTAAA5Uc2p1F4+SNJgYHko2vW0U8N0Szjjg/oeh5m03gQDLUBQJkW4gI7FVsxaVEkS7bfqL+65IB74I16p4BDdrpGBY6bLqL8bVXY+4l7Izf0Q8rkMggO5AXqpusBFzaU8xTISW/U8A5Tl0+jDGMvWDvNrrmTmkRrAIXHtLSWe0W++5goZ1queXQrX1a8wxprpkiRSG+oMfvxQfIxNAU+H4GmW3E6j9GWuP2OnS6+DowzmZA35h1bGa2Ex4PtIR20QXr5h3bXtqihBRTUTif6UMD6Hfzdx3iB1WdLOhp6uMryrQFwNjvmC8x4+jx1CmDr7Y5bx0fizsvVE3DPWU5RuvWgCkLexA8rFckfl2y+ceHQS/ruh4Z1Ju366ira47RFQuVR4kCf75XnswvAjFl2lVpHMoaj6sryxmqgX5dJzIC+PZtSTuH96CfANUslnReFDBiOHbyQohFOtAK5IudbFHGZ0fgIS34lIYcbO41W+ijK9W8XuO/jd6ngJPaKqKCEJ4rVS26eBWYfg962+UsVjic+xoRzNqtIRkqHAqT826HbO2UIOP+nkcIMZmLqTsJMBrMf9c+BfPmDsRY723cTchM2ws21mU/b/l36nfDMTdAV6R9etPZuUwJeAPszixWudmUJ0jB/+nteRhLk7JyYDuxXrQ0X0JzJ6gMG/owIV+R7V8Klx6tmH7ln2jtPEegOkNp0cktzSdw10jz/DZ5J5OklG1DflNR11S1M0M6D43a6hucJEFHD1dn7JtW3d4lxJ2XDTuWx+4ztxMNZlO1HnZooyUgWqnMNHjUAAAC4CwAAzVV5aRJp2SgKgDIsrv3xyCVxiZshFHihE0USQCW2ZpTbZNM6zol3qFXYnXSz0chyAtAloOReDwnkIvBWnQLL/W3r9QyZAfwwTzYvKYRi3nHELpDSxeUflvtXD7vPp8FpTmniFTFO4jslbllF6xI1TE51WjRdANNnom4nAxKZgzeXA6hmbiAiCXmLsZA0/eTvxI4Q20RC0WHY5DvwAzK3dfSTYzQZi4gheIGdzUz1PHRXjlE37GbHiA7IfYnDHgI3ijwj0hi06hMbh034l1R6Kr3Y+h8A/JwGaEsfJjUtxXaAk9wwBtawRg4e9ib/+7APOZz8DA/L6iouiHzWRQmccvdYREeL+aCu8S0pow+ocIoTMSMdSeCXQ5wghk8NouaLbwRvkOj+rwh+D1BcTzmYTQoRtYOFSsoA+WMRZQY/fFVr5L+enUxSkJai+MYvi2701GJuO5+0vYR9yMUgZRbDQ60LiQqx26F7snk6vA1O3npCZ6syzdPKRgrQfUWeSkQAFafhyVrsP3nAswqLOcqQIf+nC3k5jI+QMFHNGWIn76PubXW143xv+0YXArrOIaGdS6dMu2m5GBdmxjsXzD9ng1Tb9EtaShZiRlhwJ0Hc8xpNVHtkvv2p/Ukr5TdC2Fx+Cz/FK7ywpN1YNAuUKCMWv8jXNqkB7NPbkpB61tXyvFY5EPhQUijVlf+M33guLg+PAqooIO7BUqPFWV2WvgXTZpFu7VQhZ8zjQ7fwBL/x+V2YUUQpWAxbaPiLa3QjBlsNUTB8KCKWd0PKwmmKcAWTC2dTkrvLU5HeRc0LmiQmfVA9dhOLUiUmwwNIYmA17KuwH71LsykdAPn2GkiUbxEFcgB87aqMDWb9fbyqMYpVnTDp/mK54cAND9Q5+jiriRFn7fEzzzOrrmiZRxhc4GoUiykATY49ftNaSwIVURdncp0qjWD1jkptZOtGVoQ1iukMAJfK3+YIX3sICPQyvBWlOQBB0a+uVmKhEAEey3qsLZb61gTjVgYjitLkrlL3Zr7y/2IydkQPEP4w/1AyjnvoNVWPdBDPHz/EU0/tgx+lQlbbKzvmoiiLu2hl3zk3HLiOZ1VnF2hhQApav4JtXS2+8h24vxJkXQkmnJv2hqbSLscvTRfm8lHDabDMM1a8eDD0N6lGrM7UyeRnZkmCXJC78ikHoktCr5jJ3TWSmC9zMC7DqHc2hnH6rABWH4vNlCXVvT9iWMd37FeVF5WKxupwWC7jMjoBEQVHnExpRyxfMX+8LAidIxtqzw2OOrTBuazqxXgGtmLpStGn0t4odf2SE2yJYe+dC1/cDzyOzPm6g9MYljxFCAiLjgB4lwJblHIOMaUjdqPit1q2SXWTSJmcEDuOFmh8P4nvdVKu2mcLYIhjc1RDb9cj5GW2eJdajYRG7A7FG6p/urhDm6EV4qr49gy3pYDi6Rn33tudf3/JluhGdDa6y+ub6qd6JByPoza4FORx1aDPmIOycy8e4/jZvyVAC2X/8qFSaUYIxjSxxtpny1RN+d/sMh61ssXdjdxo+UncWTfJwRcBdU3VvXK27aUOkWEoBeIPZLsmtTnw6f/tad9boU7HEEdls3IVEG5GxOVLVHdhky4DWXFZKrR7d3ATcl+xojxJHnCgozkAyNR0zzSm1bgp6c/hV/4GOQ0CP0Kimflr66NRgk5U7+FrIbaWTPM3zwXbl8A7LMtM2gE6IVkvy+W1hsPWeD5b4exd6gI5pDi6Wt10NQMUg3wOQ5h+BImh5MWnyhtuXEa+wWWHakYaZ9WdgCLJQs7OhE3qCGAwvGse3yczdFt7lzAItrC7fAwU9+mFmgNfhIqEm1TUBYwMqSZ7coxssAgksCa2mhd+bfa6SHoFTWie6j3JsiYsedA0Yxzo5w7/MMe0agfMXWLX9MHY+xWOpqrecmCHaTvM3NOzW7jWWIxMez2n4smRo8exRqEpMgLgJZRaFp3a0F3ZifG5ja7N5IKminH4Opry0hqGDeZ8FCQCe0rKj4p8R6vefWeVZQ071RFfLemu0ehmGAdlgH3iqkgONN55qiGvscsI7OVDCF9IgFfPvT5rxVnWFMRFFcjHVJVg7/wl0nQDj+Apwx43l27fFU2MJLBVGujCQoSRsUXCQuhph738WhvCwD99gVAuyLV8STjJU1I4vOs0GxPuU78MhiX6ulf1ZxAV1yFx5qAUelaNG1FWpxMLeP9jT8eWb1EZOyp0Z5rZrzV9U8C+gWp1YBupEGLrmKLZ8iTmbJq3bNncpceetJQSUyIis5ZZ97vg1llsKXqArgpznU3Uzq9ZYRwHCKeYr/To1z5HxgrMaK8rxes2/bHxmitXHQ4uEzwZN3g0jD+3g6i0R/F0pkXrj/6jlxU6kPoe56nPEVWUe1dsB+1Q76bx1UBel2Gy0qqbNVP75nhAR/9wLLOp5Y33z2FQyEk0dExR6d5PlaIE3+82Y1vwS/KhsWgtKNoU3sMd4RjWGyrHY0PJpKmk9uB6UWPeUtr13EcrMK2C5aDSBtL7CPTBkUOnJiMaSo445K3Xw+Kt2PIJ/Fz9ebFQsYeofDjdDFldbfEtmikf4QlyCbW/qHB1e+UQIUVbRA/9X7MAcIKVG9ttpgmZ4Th9FBn6ypQ9cJtFzdj5bAJB1do8AoPmPl16/CcZW1yud8FZ+rA56nAMp4Fwt/1q8j6D3t1qkojdSPZJVgHxx12pxLF6amj7Olg/QiOSPzALMhjrJhBg4rMNhSLuoPDIhK39hULnuAgqqSsIyxzOdqeBy+BpDpaQSMOOiA3C7UXfb5la1kdhWKccT+Lh741sQ2I62F/RrhMiWQmpQ+OxEBg/8vlnt7/dUMMYn6dYAKRo1VU8zv6WOODlp5UdK1qp3EnarkeH8rxzVqR3Q+sIlw+Ba3cu8BkBe1GMi5zUcKaCWkS+ne4/oADl4ggVDlSew9XGfRRVp6xvvkd+Omw22DWLFzXDSfs8WQ4ZpswYDg7renjDpLTX7CBMI0cY2PbMdgKI1tAyjfj2luq9UyUlTGwDJ/9QRBXp3JMETSMj4oB/PWI6UQM67sowCo+cutJg1wSx21i3EljhFXEdWPcFLDfaALZlWKIsw//xi/C1L5VBdKDWczE1GwhhK+9MBsunvy6m0mjvK3HAEJAx5XzkAFTzQR9KwSGaPkfywHtkg9L39+RVvR9A9zL+wj4rkvrttyzQcUfaiyI4NXNF2FwTGmOBIxW27fKERDoBPPU2ASYUw/pKUNBZmHNSTtFvTXiwFhGa0y1SZn4+NHROznNngpqJ0Y9qC+xOayY77lghAFhuvqWm/BeoFwl24f2THzycRsgeCkKFND9zHDhDSFEaGPxhC7pdLs0oFJhXml8566VM8nGQt+A+XpdtxjogEGIPF3SyeyaKlJDluGncDkC0daqHZFudCmPgKBnQhAaSpmvK9VA40lmXRIPIKz4RWFF97w4QXTv3QineG3OnlVSIHrsje8geq7UfDYVcrXPIhXi7Q23346kwumxolmFTnXrTYkp4CMkuIWUm3wryntuLkOVJ8bM5kYhY3H+whJ4SlJt9tIumtkn2ijHjbkZd1FHhatCN1yEIvbBTfiptGQFpvT2GpNPu4y6SyM73clRoxEsK40mxStpvMfeH0e1foE6h0ZNJJ3J2OW9Jhc4TjIqkdHZHmQaGpacvTlgZ5fWQKfJbiteyvoXG7XwzWj/VOHBNlvMtWwThdj3NiDjj21IMD5Om5s1eLrwgsrYxFLERWQCUc63Ceqd1rWbSerKYILIe/qQjsdIkpwb+k9oTYa5fJKajzRdfAI6tXWVXZBh/cfT5EMhpfD95L78WRcIYrRL8n6NRPlwEnF2tLs//kbnx8klGFGVTC9OXSjNPvAPX54mk5tYNHlyHXsKdHqzlzb8C9UajBtZRtFOqatgJqb2SXmkjnT/ebSGOFZSFZxUCeiwoqsNr3du+UbUauab8VnJ2KDqCH3ELF8QPbxUg4sF13WKBQQT7DnRsRhZqFrVVLmdINgAAAAgMAAAviMkIB89TxSLF/xVNqJ0lRqa6Gej7FMN186xnoi2/HIvrEt4e+7bhImzi1ZJ6StazhstBClkRHb3QWDbuj08HhZaZ0h4SOBlITmFcEXJiP70Ly+vFEB9IgxUVScqD3SzUWzfrS31Q2np3pHbRSWtydOv12xmprMAPXAkTQkmPXu7Az0rKvPG8P/Z5+RwvwTwVoPfJPVJVnTRbfp+PVMg1izeHpmTV3jXW2jrzjE3PF3fu15Ej1EReyr47b3I4ST+4mSlqeqDns6XyQCzp/mDVtcMFlW5lMFuaqDukQ50VHlgmNAMKKdl3R9IqVp892Jb7qL5iE3UqdLYpEPhMjvurybUTW93U9sCPE5Ywk4P7Uxkuasrwx3Ml/wC8kzCA2bxghtaG1YK0VwvYu96qYMH++QImXLo0F3UyoHE6ah8FGypvB5DcpY3iuYJpiIYZ6uO9+ItuQecvwXQKufBn/RfU/tBQNWOrGRVb6wHQMiQosRYktvEVaiLVKjALHbc7hJpm+4onmvC5L06u11a31qZM6mByUL2dYOKLDNNEkK5zl3+bVSKNVP6KX7YiSh44ap9e8kUmT7PYOsbpvek0Rc+47BPvC22L39UZyX4iiCKSVj9YgxeWVBFzQm56onZcTWqZ5f6pPbI+ztgJu7bLYiA5jzUbIQpp8orNw68EnvEzUHJd8dNumuWyenbJFFQqEp13IsMDnXiIHWpQJmy84emaTwW7BaB2I/oyn5WA6fk1aP8BLyrbhs/TKDrc5bj9KPOVGWCa/AAES42tL0oWKEapS7UTym6iW/BKOoaJ52B+8K9TTks3/PrfIlTkt7tkZVORmRwuoBSnITFOnKJc+F35sTy5KZoaeoeBb1qnuPNY1eRaDvqUBzMcPXnbtYJ1fMAvRyUNDLfEa7NHBAj1mZ7ctB+P0ePxVGsxKlKdmfB9zgpG4mULA/10PS9COHN5okLApUU3lYxgfyzChdBzfVJffV2n5Ku2CK0TfIi3xR4SKfG8OsV46HmuEC2PlLLOMoeICXS9VeezNp+i3ItJnfT/oPIAiRyjfyg1DsEVUF/yqAN0q1IJqSwSMMzch3Z8Ysw7t+T3bm/6FRQvHCFJalpL9xoZIWmWSXyzca6hyNxw8siVY7RUuik/pmT3lfghKRGWX68lE+94PLu709QbwSuWqJXEBaNH47tMBCBmVMZm4MpvCrgFnjisEkHF/WbWE35Hr4gmKYh7PvmC4WwuF0fwxlvrCiCPswZHMy2F3D0XBgbeXqQ4oUZD5/xK9cr6513w/z36rVMXlOKgbzZJZwpyxoeGw+8s4r/VKlm1OtRyzrxTH/It+UfdcxweqBIU57NxulshUUMkltTJrW5ynP9ktZSUAIU9p+reB7pfuIhyXedMbm0y5d2tk5GX+6hHamw2ax4d22jmS3anKi8XUSJxKce4t5oIuaWKsHtZmmAsI6gNtqBjTR5x8RzxFkg4VTq0b36s58QXlLfbNn9IQEDIw23jDAKl3bTBcdHXXjcg76NRfzly7ktbOPN2mIzPmsSMC6IhyBVuhyI95nDl0y5FzTUx/tblU/FY19cESO1aO/XmPxFG4WKJEexBmjHxYoeUgQK9bl/iDonCgyKdsew7HoPygcnR5XsX/ug4EOqRhR/L6kwX4eW1JSXMh9eK99nunbO7GW1U1iUsrYTKpERBbw3i3i1l0mghQIcdeTt/oTUUZq6gTICa+4mAkz0qkZojacGCA4cYqfS5KzZLGsycT/iXnu2UogxxhBHeOAx6Wb50iGLWBQOFrynu0C+aZxTKgV741eEQjrXVKcn+lnFLleA+X8V4Q+BhHIU7l8Os0sufhoATcIFgd0nztbuSz0amggGdfMrhYrr7uZ/1wjelh/c3VIT9UptKOo1MxnZwV1iSIJuIRJin2qO2cNOSTxXSdohVbBaxHo60lwUnIUNAheAn+nrtiz+bDFbiFWHdYF7vRNW2O999H6Db+FPwGYaMd4ZE0UzSITW33bbJFltd+7dmXBPf9WluKVWOZP8wUPkThNXIhFOvxqJEO9ithBzx4db0Ws6GuoRKiGcIADRwZTc/5uH3bQxeCA4zeWiUP+7lzuUmKRQHM+2Zi1veVsyar6ZfvfhH7ESvx8ewLfYtL9seFMHGdP16qg5DPUumOKhj/v46Lmr65yu3t+xD4BTT8DZ3F2PlGAI/tQRUpJ0Zb5C3/xsJyj0xuAPN2ua3VtO77az4Arv9DNgSPplmbtG3moNqoIU46/8L+11rNI+NZUzSRyPo+5hgoXj6YYZHxABDDGs3U5QxMKGPsOvXHgTGg1AMRGg/CHN9D3inZhn8kfvOVJdWj39BgfTQYky0/mRiM/T492yz5ITV28QvYvr24iPXfJRcZWXFPzTkZjNFo/9fFGo0tb5hbQmLOFfgqaPGrg4hF1Sl24xvBR2FiriTCRVPC88/b2ChD7b45GAjd0eHqz/XA8EV5U6caNgHhbqHPvemgHaZzjgSMYFtONrz2EXUlTUJpFUPNgF1drOxxxc944dVuZdJ+4nMK9pi8hGgfSB7UGOEgKawC2lM7jOlvn2Enm7liXavleAY/GAX8gFBkYKdD7SoDaIKiuYKIH4LymyCLJYtS+DiXLVA+LcXiOg8UADpCvHruBFFZZtG/5bBR2iaI6dSYU0PwP8DK+MPxzWuqEPVbMFJ8JZRMv4327Olk+0EJv+c7NzvuxHz7AhqWLvw9Q1QYkqcQzTRsCEWBXyfz5+RSFaJa6R23v2PMiECMhIq1XC4reUlNAwWMwGp5qBhcNBN5LP6S28M+MSnX+jqStTq055yb1BH/LNyUdR6CjqkfKZnElyz4tCkyNzc/QTq/Na9l1BKstJ/UJJ2KmCbTjIxyk8ePUzvv1W8+Gz8+tMrdgzChhcB6P+vyhOLmX2xtzdnsTiXCD649piu0xcC4cWbm2GAXu24v9RU3W2pdhrHVdpdU96seJT9Mhbeu1vHACTvbXymClmUkxVCVk8++DxvM57G/FjjIDkLjrmvkpMdkhBQE8Uq5+dmHSOqlfMQ+WzOmpWeolgKUs/uyuAyZo1F22KlWDEvm2lPmVh3dF+j6g6he0G+R2I4S1rVaxfgvC36fG/IxJQ9/vSek2B85kWdK08jRGe3gXg4rgHIAdA8crfkuR6zIoUqU02jt6KMBIj0/mDvpYRuCcVSNjpwgz8RSEvhP9cmFx1zL3yd5o40o9ppYdg0BBrxMHBVmnTKGmcZS1PC+NEQJPgamt/N5KvL6dnk1OVkra6sEGetN4M3zOFyLbQT/Otwj5eYXB9B1d3CDU9rDLE6+MoDNy4F3kYi5oPzhwb0ZtipnwyPTHd8rnPmL33++3etoC3GFvmm0fQa9/E6wdIpbhx3pV9Z2yLmiHkpruBgCpcKoY8IszUBdxZo4ZdrD7BxolUUFT1vaLsr5Rm0GOgrR6fdZoglRVBmTrRueEii6dSwUge5R/tDJNnl5LRoTxR3psBopQtwseIXRJpp8AVTyro3Kzec9Mgdq+4vF0IxxrJY87Tg/MQw1J2uFSb+pBxHuiQNWIJP2nIco7RzE4bVMEA7FiEuRV4ujQEf+iwlBvo/ou3r+7nM6oMlELqCLv9YGV/KuU12LgFwZYfPQriW4QGfHg63Kp3j/By1ty1yzcoAyKhSLI4FljxTySG1s/zumiquGfW8Lh7a+SeOFT5ixmdBRKTTx4wQDlrWEENKzE/dvEcl9wwi0m0hpbACgoqXHuujdSKK4TJYNBWrrcmrn1HjxxfLDSsge0Se8/OdMSlfOZZH3nT5eUviEYqgDskEoI/t0e2Y/HZGG1KwoX7b74neYja9yN42i4M9YS0WvnKYk5UR3N6h3pTRuNgenOFH99tFMQbDk+LeVhrO48+/9bt8KwvJody9+vwbjyI8gb+IBmMaAYyOFadQfaDYEit6jCdgvzQzPf7msdaq/QJzsI9ZKvINknNtlt0Mro7npe+V4hGeLAs/XoAeIGLpQEvbvkTYK9P0Rj6JXXwkgeReaGZMCdeXu1ccGaAlVMcPLK3Iaw/1uP8tWx464FvhTOi4qXKiHhrtM0lDlrR+0oruw6F7s+9VVt0Qbq+PKokLeJJ0Kzuk50qlvTcAAADwCwAAj1vtdr+5eM9kr0tS+VWduEFelWRD1PJ/3Sjq3ZXuwkR6JqextQ6PgPEXKYNz8jMEGn9kdHOs01gFxXHAE4GsSKBhl3ugk7X9Pedu5FB554969DM7nWq3CUkNjBXD9q8vHYsl3p2qAvl/MtN0Ezw7g0PYltZ3/Paxi0xRh0lN+FguAtrIk7raQwApBdh0+JPoiZB2N3VOOXasdf29iN/LsJITF7GjoQrLme/GzDd482yyXeaNMn99iVOueyYJqZRvQdPXQ1YKDGL+JJUvZhEBDdCCQfyC1Qj51p15ERblHDZcoyie6cPyqZUA0TNJJFCRae7hUvvMSpTLPdcsp5MlEYrHBzL9sc56vdOJT3O6uHhJ0sVTpVREdDK5ntQw5Ef4GGxnQpLc0jR0Tj1UmgUjwY0WpqP9jZlXXSvad9V2OBgOUMrqtPsEOQ0HI8lm3vi+WkfQCkx4amtu/TG++/s/Iu0tbt7NvdEr9LTjWWflPrB+WWNPtpz/89lnX+0ycqCf7xrlxBzaA9BWM5+T7YhU4XS7FV+3vrRnjvCFwnJIWTLpVXz47yf5q+z7Xe9OKP/TF7ags2QkIIm/Cc7vF8w9pY+6yUarNf41tiG85jlrwDS8hwYt/q5X4v3pqEoqN403KXRygi2OwTo44bFDp+O9FPKrypb7sD/yRsy67YLTMXKTIAbtJmyWjuflEFLS3NMrWS/8e/NO1gcc7zH3nKAhkMb3ZIHjS3oFD0gw+xBLndHtmCCC5ft6wnXER+JXEpsCOFbmFLXQY+27CyFD7f5rH0Fja4bjoChLgRuIE6IszxPK//K563/VJL1IvTBE0Q/hkwmYOpFxwr5EVk5gg8S6Eug8sDhuA6ZI54x/v6CmlTDped69yYqy5S4rDqhjhERFIdzRlv7Oe4melqhCLnhiBWy8EbqiKB7ydERqzhE6/zmZ3QnL8TGELbl5OTGuhPeAsR4gGPN0080n96V9XVtx9WFxre9VE3ZLd3chOjrVw2afYKpKLBlNZIkOsDgFH1pV0XXK7MkvqIljnA8qrnutYpZlUVQ6YJJrKECQ/dOuOafX+cdSYSPTt1TS6dO4p4ZsT+Y8Zgv4FB1gdwsaQyqKzBAzNe02NYjFXeeHNBYAL51Gbj+755vDwLUa8qLYwZNcPloI7DVoBVd46PAYCu/VL48Nq8lQGmwYnTw9BmYtVFyq1DJ1ZEh0vhp/xVkGk7wT6wxxd/ffeaEaBj+hPPvJEV9HISHCnaXkOq9dCJeeUS1fwWuO48euy2NS5r6NwvmQtU3oSxmVyQYvGDnogED7L64m/YRmIrlfYqbwsG9pcnTjbNRsG9ZrMfRtY8F4u1ii6K8AeMYzL8gSUV4ISnb7r2Q136m+nQhCtRenMf52mMWizKC1Ba0jhl5OCX1UZVD6S0wT4ONKhtB+iDmWm1hl9OXJzjnIbYwI+B+b9wjnPc1mZ86KowXehCLDRFpR5Hn4n4erDiNdpmnrZBhNEUTUn0CVdQ/IEFcjUBxSTz66MhmBgTKZD7th0oJWnPAHtKWOsy4exyfSnXUjAhEaJvTEgA7WyNpWyT/UNFxNWyQx/sxP6UoS4f0nkjdVIhUAFfe6BAFKxkm2knzYajEWT2GYErLRcVQmz5uBED2gNOyEzBqU52YFTVEEFbmUOwqojyy3Xd/YIDDgaQiPkfdSHf5Y4QM6M0strIKJvi+U1IGMy6FIBLWb4PakUmaAmZ4LEEhuVshDzQIIyt6NZgkmZZt7bekt9eF6ZinJv+c8a23YQ1MODZOTPkIeAV6Px/TbMz/1EODsLSE9O3GxKlgSlYc4kwmP+2JN/8Se16SV5be6QBi+ujdu4NXU3vVKnnPa2UzSWgh4iijzi6e6d5ecbbPrxgyRwtIQqsKUpI4CyZJS3qPHfvxw18Fj6dzLJGEhGtozShQx3BO3I4jBwnFWDNobMSDZ8noNQtu0gT2htNV34Ch7fNvy6FzrMK0LCq0l3SnSPrX8x6XvLxLIQkzej7Q/bGZLm86gDISzKaXUKbxwY8VUz906MFLTRR5mMIz/m8cVKJK083tJtbl/ZKuqy0vAHw4Q7LftNGXRgShofHvEHrYiSlmaFUw1ka95Mvz670K7/YF08kx4R3mHX0cEsmBUuBA5u6KiDlE+4p/JIxUZHZ59VEoR3OqJKsjfG3fn1zKxy//2cUztFsT7kH4rPBpTsW7i5Ov9C2RTAKTSqq+TjxHmCV+sPe0sPXzT06l25FGnd1HDs0u7RhZAQB0n0uC6IsZ5cykOyPGnn7/SOcRs0xNxuSMEg8TiI5TvxAuY3pS2QAjjz1KV2QHlzgcnEY3B+DCGlcDZz6vpIaROqCoZcKZiXM2vG67rCBjKIYavT1TaJJ9TeVMV4OjzeONfZfBnFAVzC1M1Y/Fkn8u60kcPWG+LyOnth2OuHRVss5BMCusurHe8lXdWdICBbt5jXdDvkQAoK8Ot8wJa5+8qIqlPHbvo70A2UD0F5p0Zq7WKgXh/sidbBVgRyQa8BxSZmQIGXWti5l8PH2C8wRZpb4dKP0OVBMfx+0fSm60I5cQrOVtJwSrMKddI5KxzZeo5LKwrJDWrRHtnWix7FRZvakIcJzWh5o5d43fWSUnwVZs9Wh/PoGXgNJ2H3JIgArnEgd7khwaAyPi08qcIKRaf3glzpy+KKZpoSYXUR1bwVMdWIoFVN9LE0V0wKqf11zydKVtgPbw1OFPTqUqwdqWOyTTF9NDQnB3cW1Hd3MBA3bT7ICapqWL+i6nr1/7iNvSTPirypg47EA2Bdq2r/OWnJaQFONys7mav/gVYOmNhQASNar015YoD0MIxzkkmCCzWZwp/nFIm1DPkqm3UPEEPQFToYyiTckTjGV+uPafWSxQMlNgwYmMM8PfCsoSUb3yf9Cs+NKwcrfGPCp+4Yb3ZkInX7MyVXpLB5TnXHQ2Y9a/T/8S9Xd2uf/kKvcYBbinLfXuXH8opyUnxBUdE98ZnLxtYezIZPI/OwSQMlCvEnpGekz2m7rqT20F9kD+KEiKbTupOmHYlXCHgLUKDAXst4Xe90wxG8yosrpvMO0A0PrYqYXSiMTAyl0KPLlWFzgYYHmeYvS7hO+HgfrDfNKYs99kuOgWQbJpQHfVmzxuUUPn+0v/swGF1a5Z48POftpwv05TqZRHUNvXYVYqNYBR2HT3uFzHIyOwI+8NPsblZbG9fFqs951kQZvvPLqAPjTyw4dPSzpeJHYkgE+P+lpzhM+QylSVpDfWKvpKD5zSZNMMegjBosTR7omwN8SpFCbmDifK9dG1srbd3znjb0xz9ILae2FnA4ef7X5nQ0cs/iGNj0Nvd+Kz81AHtDDkYBUW4bdm29zrwRus7A+2wmNSBtREKlxrN2KvVnYD7qab8lNBCXUJkymJRvPt6Mhq7GamYlpycF1uKVrBnjsHCatv+jj+Li46H2bujL3y75Nh2ukweOi2cv8QBulH4Kq2D8yDV8J9Y44pfSvzevi7HQlAYL2rjWW0Xj/ZRZU/37lv114BL0mIZ7Cm/LQ5oe5O4f87VMFNok1T8n7fW4cn1dWnjbkz6FCO34ewoAgdaYOh/gLm1XWgnBHlRMU6DYRtaIHS2RiLTdAPHYP1+Y9JsbD8iPKyKVCOGID8l247uyQ617JW48g/wSqJsVuqpf9UNRGWFZrUShwcGd4NYvCjqTPlNNCLMrnCJ9aypcEcuRjVUqZ778mfiNTSkD/TSphtdMw3uPr6oyfkLhZcAmUtPolD6LZ1WRS9u3lHxGk5rHrhQredmCvonglHsOSMRwYy7IPIqh3+zT9nVf/7G+Y6Kex9hZEqbU/rExPkW1qz+gKe9v3E7XEYNd5UKRmNhWpK00ETnmJDPp93+CB/IhMuFedsM2xlLke6cv5ZzZAkCR7VlIoYdkkea3dkYXxxp99xX4hxeqxV10Q5Hh/qz2TcOqFoEa80QJaRaAP8N34Rn6Gyz2qWSO2JkmSq53mtuxNBYAlUf5kXdF/FrvqW2vZbAj3IF4vXR0bgrTs2IOLDdZmOnSUOzaWSfUXvAf97k2a5OPfsdb3f9gPJOHrGqIQKO20dyyoYW3R44AAAA8AsAACdb/69B3ZxR/QUzHX2NpdTWfF2jrQYLKpR2DP8XMpJy8V0Q2Ff5BBLhbIv5kbCd0h4Tx9VTN0ZMSC/N6imi6eVLKg8NoCle9RVOtXgbzd6rFCrdIxZ1lZ3BtQmZ52beGvL0RBURpxFq9UBpBWLdbvQr/9sW7go1sSp5+MxY9r2EsdKsTAl449QqOQiuyxevbSmt1slE2imXlpx07R7R4bkT5KHuuVurIxgn+Bhs6yCwz0I/xp4V5IoqfS2/tgHGZKkG1r1eMrHkvz6O9sHUJBYKarOKKFllKxWMxGec+66L6PnVW7lXHRuE1t52i+/Nd+AAG3WxxH9PMKbYipuMrhn6dgItXm6UNSv3PS/OQ9eyR79kngXv2ufUJgBlcqXfBj36rL0lugL1xQAmwxwBCQVg9tR4RHg1rjJsUAty/b0HVz6EGWY5yH0c3ymJ7jSme45WfNPTsXZLX9I6/W6hBuchRu9nENBDRRXQW82/VNdRYX8nVy+XRwrdpgcKq+GO+BhdTN+lgYV8rNxo0tRMrTxC05a5x+7jBBfdR6nRpSWHxrwBMvCuT+wPtLmCYS995XdzkNbeOyxRdzsJ7gp6ExWeeo1IQoCDGGOh0M3VHB040TPxbBVkLMTWNeeNif6uH2cZTg/IABVlWlIJCtDtj4zMGCbY37BmCAokkfAmnq+kK7WlbH2eGZ4dp/3x03zmuufnSHNFxiGCEd0QFHOA6iVfNWVuMqbnEUUlV2GQlNiACtgXdGtwq8XVWk6XBy0d1d75JkBd7Y/X7gtTed5TvqDCrZbFxUO83QLGkM5s/E7RIovQdXojtNdFU8xmz4OLfa37lNtes2s++UxW5MkjIKrR5yy5aOW7QjOTq9oGrGEoch4Esu2UjwAuNhGw1JleD9TyxJRzM2KKLKZP8moXrYDO4unK1V0BlZwfneWl1122zzH4JR35OOW+tUlVN/RXdWtnQMSfecYTmuKL2EECgulYlY2QoPqllZ25JRcRIfFC8NteFYXQ4+G+A4ToxxQjidbU5UJuywGdNwHB5lFhzx57w1Ck0xw/NTaTgAlKh2xjDDoV2oeQVZihNqxiM5FDsWfnAfm7GQ7wmxzD3ula1/TUcymtyNi7wAAAybQreNR2V+f9lPKVBzqL99O6s97EZMBVDkKwQnwjqV35ozy/9cM1BXQl36WiJaxRVqjxpvq0cS5GXT9BmteuS5T2hmn6KunSHcz+ED7x0bzeaMjp8e5EQSVRLU6xv1HWLA6SE0jrt3AnKwA/QD2hC7QjDBimW4/lhv57GEEeXlycjn60+RwvAXHy3ExA85clO/nS4NewoIIhd21eBliMHkQ4RJsvrIIoW8165amkH4pImRjTKEEiGYe5iP/Y1hJCyFNECbiSmHduc4gprLwR5pjWvkug/rKtz5ZYtfsHWZTwV+aAJ9UwPZons36IPLEMZlclwCZiELnl8oboalz7neP1/TZS5+TQfiNQpTvmDKEYV2O4VtvZ3M9T36BEoYCvincQudqZfXOZQeVWJ5Y2g+XVakHsLBMR2tHavvpZDdvfYkHwm9g7iPHoEIE3W68nU7mARwec8gYLFz340YEyQdqyuDUnczrXC/5j8i9dQdsJa0JGYIeK8vFzG/ZRFtxHvRvaT3NjXRyr/kPhkHdZR5C4qoTmzoSUVYlMVt6cwG4e6O7+Hq31j6D54ZPl+DfCDOtHYYXj3RX3XsbbHRPQdMKvV4xSaZWCOqi5gBB1A6JqQMxDq0JtRXIElxuwngeSEur84Y3wT3zkP0SyHwAawhkc2d3lHU6/0TsYQ+ivMGfKZ64vGxkrvAGkSusxQHzaTwGWgpsOvPmU1apxNe+qpGGtzqlRasfcOxK9wQ9UxpcPGlx5qVCAbmJv9NeSZjWabtCkfdMoYAcCaQPAq7VKfM//g3XcRWhEv1b8N41SoR96rA/AEZonry5BYLH3qYrRB45MshUgyAq47TbBYfrne5Hvt6B5u7Mt4ZYwehtNqvlAAG1fOx42X4D+fqCFvmO+rebpU78hZjaKMyn5egpd1aMJWu5eYRg/dKxJFQwH1E5O9vimydz8tx+sz9VurZYeNml5R2plWRdz7z32evgvR9o5jGsTvAU3OlYLsB3Nvk2LPEsJyA39OyqErDKKnBx/ZEZDNNntuzbdWpS2ZvjixpxllzxZQwyTbTNxB2iUhh7uYUlyqdbQ/w7uuhHU8EXfAw6+1ZPCBw7QjaqWewtzFab6UVk6FKGL8XnQ0FV0/+BT2e0x3OVgXwx6eNRhHT5/+PPoeImANKLFzISoBMFhj8urCP+cYb3/QY9uQ2UtbtsgLM9pdTTbHd3CEwuTer0fvY/EfwaoJLZpzaoDogKgOyhqF/+pGednsMJTCSGroSl4J/2y53M45v1sbg1zY8bFlGuBPMtrLpj28mdpYHZQ689ABeowAhKTqpnEp5/D4/HIwhG4+wA1clIyDSPjn32glJ6WAGTmVq+qjOV6bfDlQYV6eyjIBLCrqhKHgtAP079OOXOQpiM7KElKKn6qW6AGLrs9rPT+n9epKRbMb7jwDczLQH4EAwMjsytlkspUJslYBYXZyUhdPd9etXwj/VIGP7AJZW8GBIFa1/YXOoEs0Nk+T8THtJc0Ul32GwvMZgbB75E9z04nU3F7+xUz6U32wvxzxk6tImBwUb9/ThPyt3EExhkNGoXRFGrI1xH5QsykDgA9G+d1+wjkwd7GfTziWQQSPOUJ5Ybbhk8cyesWU7C5CtJm9tcm2mxPuEm2dhCpRlvpWDLeNev0jr3OP2UoGP4UNi2qVrYJUsN7wAE8xX29hl41kePQstay9Fh9QoaQx9/em+/oucOA+QgXTEDtzibqVvB3Zi7NjYL1uPVidAR3lhr/GUkCKKmgnBrJKRfsnLYYbJELzt7/8O1S/kwQaPdsl1Ox7AVIjGS6GRzm6DSAQCuzST6Riz3n9cl2iJq+3OmZWbyyJrumihGVKP+jhcI8BSEQ50D12dGBZpxb3wUvUSgX+q8+s7GyhsqEPRUHw5ReP09Kxb+RnkAtM4Am2Nq6P4+tPSAa8KFmMP1ewH8sO6g+GqA2GtfO2IzGIe22/BvoELyyTAeBb9qgxamPqKJynmBSI5wwDKDAjgD8KEl5FlX2cW3EQHoC6vZi5HRX/B+lN16/q7ZDd0IP7i+GYltpSivO/Dbwf++q7uKFXQ7HCB4+M5mLiiBFotAZzvIR+qaarhvpp56EmVuNg0XA6e2+nZLVHaEqAqFLbc88dRo6qmyBtBl4vdkOcy0dIfNc1aKpowXwvu0I0ZXkzXIZLt3kh1CwG0dDfbT4wEAfDo3Ct0yEXW4g+Dv/Vpb+ZInfabJ7J4e/L1/Pa+Q3HAj3U4RbFkfNxKxKl/djT3oU/5RqRaQe8CNPR1blLST/PuMSMGaRo840WzqA3XNuc+LyVbE/b9QwgG4GZLUxqPhPDKQwK+bQUdhJLLWNUKvvS2cYJac1RyNClRqmItZ1q6EkBvIYd95vEMHV1oo1vEAZdLEjDd5IwsrJrYjUOPBvQ9Gp6U95bjYAgrfGeYpdHYB1GKXAWtQTQPRODV+feRGUm7ntLwT89N/Job1tKGfWaV68IJmLGQGntbN+cGh+vy4UdU1G+Jv6q02ZLgUQn2hfE2k6MD732ikOMmdFUTdUHCQvRrCUAREHLzi2FboVekxMbuPjZXrLBN6shbJyN6hX2EGEZnVEJacmjGQvsOBt4S5pGlkaO2jC44j8uTDCTY/pI5u6rHrq3ivgF8GZUme2lrMYY3NV0ylM74v8OkIoN8MmJJIS2n1ZaWrOKPijtJye5uS8paZyreMW8dEfz8/IhAFuxdqgbrJh5NCEZuHRi+6lsxBwdfP5DTSOcw4MPuooEwosK5RQzNCQIdgGpC6n1w4fGJJx3K5Xh4I+icCzS7CeJw1WRJwUVLG9QZdKaDmCaoLrVQ6ZFWEhLOayjsdEDO5qVcl6L3QHyrvDra59gXM+cS7rz627kmlsZG6+j1sdS0dXnJ4Nb9DDC7JFf6w3B8656e/dR2Kmo5Jq0rJEa9maQgPBrMsjwEm/Eg6S9uXDw/LtBh3RAAAAAA==');
