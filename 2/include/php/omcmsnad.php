<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAABoDAAANu7Y/BiLzv3AxvxA7xrnkv/RJCJgYhemGyKIFcM66ehu+Ah11OW7GOSatWSTC8S2TY7SrxZwdcUcbMJyimSJPDe3BpFwTW1bbSCI1cvvzBtvQP257s11Fj0229kuTExCGSAuthICDrf+RPxiJoC0bJSWOpNblKhCxM47StulqeNrS8K8WM+EjvElv0wxL6Fek0Nbwau7XJKoh1C9RAZL8ChpEo4FIfmLvTn1GbRS1z47+bikKzzxVV+9oQ/ob5qSAonLpQLIg791I8gzo4TWn48kbQorWt8ZSfl0YAfIIv9C2zhbFZ2ZC6/ksqiLeca3HAwvkcffzUP5/cfGm5lZzSoxJ/A6S5rTTPy19UshPzQAG2LDFk4aoYzZD6ZVwI3Z46sPHCsvyH/Mu3UNwoZpYaELymkuaV/0XCn35NLGkHnJsjy/VdGd2YZ131v9stEKBA+BB2/GQY7juA53zFBJghIBVvuyp85Cxk8GiKcruSWrpMkDdlQqx6XzvgTTqVdpmLXMhKDak+YwY8wwaiwJznhjzfLj0TAcuvaAN8mig+s2dyxZID0bXGdism9wGr5lEMo8yg62PG0cyHb12NE+vSlH4DFpmHg8Qe/sBZU37s17Tu8kZOAzH9TIIstan3j7UkJrCELZLtG4CQykMMRDbLrbJIKZ0KOsddZI5xE0AKPMtojwZhrEHgJTOb6r7oI+lh8tjhWoMo1kzUFN1dPmmwsi+07Q+E/EXiT/lmTdSmHkUA6kw5SbQ1OQswF/CqVQxu36uzXw0f9nI91JcG056Bzpfq1dsFs1nQA/BiHCeb0rJvzfNBth4pSsqHhhZUGoSXKgvd/AQmIdES0RnRQumFifxau+Its7lRJHL3xZexdU2sRcN5S5ti3j9dFoCSrIw5OYVg1A7Hk7LhPnVFSr4xDNjG2kFIbWZbJGrTWWDWpPV6jrbSEL8cehKqQaNhfpEr1MnEHcg974F+cdLq6AjS3DP8yFjPa7B3Y3cpO2OmCgdEKitM/yODP3/zB62ix52yIS529yzgZXoYE42MafGJTV2gx58yTA8D/YsGXIIR1QWT9e8ieO8aN1zeGee2VcIMj4Dh0VJFCl9nxfSgkI+1asfLjPeYrozBq7j1MJlzkt/wJxNmLxdWtsRcfVhbh3pgmSBtm6z7Hck/67n/y+RGxTPh02fkUToJ96xGR/BpAY+j78i4lidl+JuBMVdaeCQRAoNgXWE0OQFZKUbP6ttO6xNXeUdfcjzZQ5rVFIp57WTiuFOGBMRQtkEiNYPCs+wQdvD9H4AfrLlpufgEGwBFXPtyfUXS/4y4v4hzl0m13ItBNVdTt/IhgTLXMbQgoOSwS2qwgM+4/DBZ52Xq7DP4eaAwmfXjmqlpUmvcYObqqWel8CTHJ3wCOlXPxIxL7D/6us1nqQJ472H+Md8SpUEXZMqfb55zZ9r0Hlpt/SY591mPY+GySHW8yl/0C8l7X9+GL3m0UWCVh2WACZQCiVSh+NEQ5HGWU/m/g+9EObHeuHX+BYJy6cSZJHfR5TKhZu3L7gU+feDzpDqtakbKkhLlThfxvHXe/ptamSSnYNHWrN+h+1PoRbREZlfioX4spxmPvpz1rB2zH/EBLyCE9VOIn3Q9QH2JVAO3BHeIE1Y0f8LHOUc0X2CjwzBsFp7I1eoBbN1eoV5ykg4rWSd/avKibJ03X067+SishkjN2bWxNam/3O/kpGeAs264GRJsTGigR/BeWZqBhto8h/pYjItTV1Oij1Kmrlvk77Zgdf0s+mtl1XPeTm6upC+Ym7aItydTP+7/ZaHoYvW0VdF9t3Di99gLZRjHufu/5H2H2lEdHJC1jzdAQXcjYd5w85DE20VyNUDHHi+ddB72Ce5g25fes1QKe33VhJdbU0kWqmW6XcXV5b6kIIuigtTtNzGl7JNLZn+rDb8g1uzRew41RmPyU9zS5LOotFxBGG1zhN8wF0QzZ2C1Tc/zKFRg1w0RgNWdn6OEwm9lx7+z5am/wA8clqe0ZHCUxlhHFmTCOb9gmDKSDaSMJzN77GEcuWTJPgtGQlk+luYCSZ0xQ7E6OlJ0sl7AeHsyBPoPQqFcHPGa7KI239BcCfnKtPr0CoU+hGk1FthfIII1h4Yiu8LDH1jYn58S3U/Pw2fuGcbEdoUNCNiUmxUWMtabWgFVW7w7rcRFK2kNg9Dn2pGcjwiyKkPMr1mVs4y90e5W+w4YXK4NmtWDKoMc9NQNWWDIpPwreD5CiJH3Q5uFs0OmqkToaABjg+9qcDcua7b1brdGAomCc3IgVdd96CHZ24ZqVIstMlop7lW/681QmSCTuVDcJvAvBKAw9DsdbNIMfP/c8gUHWpOs2rYFdVnVyENmVw/jlx4/oZPO/xHJHj2KhI07wjK4Dww80691gWeqasNpJ750UPbcioMyTRLQIoFB+Humcd5fwVFlzXVIseGrtrgp8g9Io6a8mzgdVHyI21wKQCjeAtUak2kLcs138peLxoEl0MUu7QdMxzJNGBdalccobQMbhxmBkYaa3zrlEx8617k/VjtFmUNsIjiNP/llsKxlVD1XOLYbaJKEWi6lzVZavjDuRwRYxmNpUvBtSvNoMRQ+OSaCzypVxJq02EpbHiU2VS0F6Rt1sUGIkZAbJz41e4KlhRSM35tw8eFpsINOgs5HyRqAoAjn/gaIyx6sHx/tYDBSQQqKyFzSGWsvj0E6coO56A9BWG5ykleLjYF1NTGhiN6zOrYd94Wt1+7yjJnqby/iBjxyFikHZQHXXbT/PHwQAJsALQ+kqgyP+w1aiP/O8fxfJBTJel5qMNXtZQuEohBXUnm+85qz0kPXl8g5ITPuIMKgvlfmO4ee4lqtwu0SYLIyMqmKwlA0Pqmi0kjCdgvsQZHHxfCos+6/gteR8ZPkaQo+E9/1ZL4aIv+FxFsZSryT7oSSkWF/NlajVcSxbn7Ghk1cjsSB2kgLYpXb6vq0yBbT7S8vvyHXC/ltyxxubH3LAFfeJTDz9BenjEtkex6604GS+hBEiLQU0pB+9tX0M7KACONV512ZTYGJc90zk4bg+HYksG0ZET/NYlVtfUR4ZVgZJWQWeaOIWiThrb6I5s0YFZWC63pJS/I3fHAThFVyg4TjpLESqrPbjM3u5462bsMZrGOLfRJkSoTAPWxayVYjt3y5bRUi4MuW2Y39DphahIi9bl1+elfH19dAig880bvytYCEaoM+3HsmmzZ0VrY75qybRUivuTqivZjnp8lyC2R+UGRvbD6uHea59UoL395BAw/IKHen0dH5seqRCDaOYzDOR/jzDZkRcuNlUzm3It7li1biTypOERgU4u0uhT+osONNrFeMdmWZVmeDaI9esb2f/o5AI5RfdrGO+eew9oL0C9koMM98sTSVnM75F2RcYrENwZ2MQFODauNRVMJLr9bR/uDgiB54P9iL1spaNCeYusaWP/eaam7dQj6bFM90BPj5i6PtZSbIFlaf8rz6rm0jb31eUkX3q1kgvE48pUpbSqFToD9CwCtGehK66bLoMBFMUU/51ZR0wJI+MR2UeNuT3lx8BXe8D4qENk4u1EEuuStExlEInU+tZIVjoDfgwPSK3XbbxHmWZvVR75RtB7BmwDX+xAceNjmN0WWRUlQTr4yZCZ8Y3Xja/Pb25JWHfoLQS+nFd8Dq7xk2tXXUvH6NLboh2SNVeYoIRQ+K5wPpxp0CPI5FxC0P1fClj6xMnJXow0ZufAbJVVmTL4pwuAhUCLU3i4FxUHCakW3R/Qmt23I7+hUcIcYhSOPLAikTTr2nwtn2BZOtCd7MF2EPwMq6xhjQPda6mLRFtmxEM55wHLmj3ffLQyp1BExzbekdiaF6zEGL0lvVrODADRcJwPBVpcktQnbL6Nwf3lLLyiI1adm8r/J73ImipBhhFVkQn4RngpFbkTD3ocYu9LG9yn0/9iOYtxHylUKSVnyLvaecs+81JBdUxuOLj1tpKZSVtG97Kyh03AvDT8YCGuPMTOQMP4roLnSltsfHplHNE8AETIQPiVrFgwJq+O+/cLRZ1HOgqGmFE/2HdrcUTRKaavxRHB26dEgQnQ+F22YdLYWljljsXXP2hEP8Z8eA5Wiof3ghSRO/PaLmUTz3RfvgXtYQcWSmwsxo/wb768+eAWa7BJmkB52SN5rK7WFg28pU5kSZRO0zAuQoHaMAb6P2ZCj6ODjMu08F56SuCc5CA9canO4hS8wnPz4OURAOLuJUujaGI1AAAA0AwAANiv63+Z7SXWq1I/Or+bYitV77dpn3p5pNBQZfCN2Qc0CxsoTqBG3u8VkfXMATbcYsrJI1hF532xP0GCJ/d7SJNVZ9fy3y3dAJPaLmDio1mB3dINOAmS1NDhNki3XDn5OB3nuzCMTTkL7pbSNbLYRxg36lMdv8WbgoafFlP89rxgqYRS5rYRmOw2Vu3TewDMat/Qtaul7hAcmw4QeSgD+1a7hruzVG0I8fQhfB2p+9fZPpK+HMrru/sxXZWPfXwmLeBpisbZPAuO3iZSZeUKAFQiVLKFOE7UC/LOVBUs3Elg6G4UfgeQ42WgH7pTWIOP42x8a5bPKtlBHDA96qUQFg/fV8ZSM9z6x1yIRvEf6chBwwQvSJGLgkn/W4Az0aqq2OOFROnBFESd8QjNPpxUMEQrgrfIu0lKDK1eTcW8dt1EPkLekXFkzaw7j8n1feGsmrB/QuN8AX284mobec0dH2jkS6N0eB5zfkGEVJ1BkgSyIDl1fwMDHoK8vjMWadv47ofJIlWxSEN2q2XBoWSN3n4ZsH9eHhMwgdnpgT08Ry/GyWvt+rtkQyADEsuxk/h0+JA8zwmZOyrPzyQtsAVMdnKo33vrRpSZ38t7MmYC3agNCwHekXbgcm2at5wrHl447GSagffGqpnmfvOM8tRRG/DdIGCcDYVjFLLd5qVjSeFNohhjVa+5xaQivcXWkNDQoxyulAYMOngli0uSgY2eil3i0HRsmAEbLGk7V1dzt5wbJ3AIaXXFBlNlXiPcjq1eoSa7N/vqn4iW7skBpGqWkf9sSx51Nn/7pLkyiZwB9enO1vzUgslmWNQFxACeiXEk7hmLqu9LXSMP9Li+sYEFU9mdPzxeqXoCzV7zqSDd16qKr1OK0sV1XxY3N1qdD9L2dFaSYOcnq+R0B0M3kwWSR3P7HhD7k9AGszeSnFhAXWQD58iW1rJe3U/0dqxuqrpjBrah+K+l/zGD7SDyZRgnrZwRRwq19ZZXrwGbgUsWsxd5DdfhH9n25NKbnRuzZ0sccCUqlCso1vQTFUhfODckcF9C4hk9vvlPXiQeeQ2ASqDnJlkKf7BD5stqSvZNZaLh4FKhcKq4D8Y9bBZPggcLC7fmd/7b1wMVijHrn/RDM/oVfwW/Aek2EqSXFto5/nEtjMO8U+hyUCtmk1PfDUaJXhpPXFIHuIzsy4OP+s19HDlLKxDKhjLTTbcz3oxSo/8Ml6LCRbxVcL2fXlZ7pr+e1zbx9u8SS9lrXtJOFzIkgVGyBPSPg2+CS9IyTCEC7ISs864XspHiPGGv8rAyoCm6qimvqK6U7F3uGFEc3p52L4M/XD5o+eYpfJY5e8+T8crjAXBz0jQIxIbgn8UIi/kd0iO1O8DK5vJiahJTs2g0U/doB0ET2o4OxckqFmPUuUejhIg6h+Go0TsxBfsoqnGaG88ViRXkmXPGbPui3bzORUNoy0x0nEIlcxIs9saBIXJ3FZvm+EwsWNeXNMlyPS0msNLtwTdgjOS1WE0E+UzDwq6LU7uF6lIJ/PAF5hQldvJb+ZKu0ZgYkFy5bKtWuDmkItbrPArx4zh1NNB6zakL1+6Hw/y18QwrspNuWnx6G9JVcyfqEswX85kWZRN8ARvPOOTEdjIt+4q/pGSM5BveocFBJudOLFsG0Yi4qsf1OKwruoY7rjuOSS8TcSVhGytzvWRjQNEN4g9a+1EJsX5vffkQu11CxiwMYQk2fQptM4y71Wh39ZQl/JYNl/FwUQjshlELfeQp4sNPJuBMTTrKqZiRDPII3vtmaBzl/o2eV+XhEp0eXzXlAYg4/jmdwNfD5rDS1EZrVLDe8+OnjvFlJDASZqoI42jah1goz1ZSYTryDZ11Zz+pWq94BLP/9Sr3l6Rb7BjCvfky/CzzAo854AqNN5dKps2iBfIZuCzPKDUQdm9S6pxbiyzxi/kjtIiyAN0efGRJh2z3amnzYx2rfR4+EFVzmy4O9cOwAOH4yXlcm1mh+ep3wTWG8Fx4la59RtRUeUez073Cy9cI0gU3udMTyP6Q3ijOfTw7IIW0lgEFAYVd2l+vPqdvdSsy6YeJO9hSNnnAiVJvP/Fi0cvQ4MDkfRp64gG1oh5V6VGGs6020TLzO8kt7HLqgLUfUgR04imQpn2P88GHYjGXJ+dj6ugjPryekHgF3OP4nG2T4R2vWwPZQkw3m503GhMSkouAX87gDCXSuxOEsgjsEyD0YaiaYpse7YOT5w0ddMLC3lhbQqc8DO57WRCRmxV8VeUB2YuF4fyVGG8ciH55/CPMz1oNWmBvXRFuSqReIaXRdp/mR2fdyYgGoVYO40oS8eXNrBVft1DZqtz3M++9BgzlzcL2FO399CVioZVEVGP0zJl7Rz1adSIcyQ9MOxQVG6BTQSEESmAfxIpovtNChRbnDLtUKMAH+0G2Nq1inDPXwrzzd5fyuoHlT9WSGnS6Np6BMBDcaN0/ECJE/9s8J+0QZE3hZ/z454/WxfrdtFVANolgHN+jtYgeSDY5ldZmH0mwMsgE7fYIRWfuNDPX3UlUf6D+xumh/6xhn2yVnPmKuTcjShOewUQH/6+j7+Ne15ib/e62GPq5e/t/q6PDTdDTNbfcDyT7A6OsyIRWoul19wK2FNAVkL4NJhXcLZ0k+Glx4Bw6+J7SBD8mxCvjw5lmbVbSDb/KeLyWkOimB4nZnUEJ244YgIK0OuI6P0mQi3LluMywX2njxSdUBljBoYxAFTU/w4ae59RdcUJ4zZhYK54y47pG9iYOqHX49hZ9lteejZ5Ofb8Ux2FRjr9JIJ/sYO7EmZyKZLgIWljgEMthPnqIan2LRV0rh7h/txu73Cug62xEOBR4i22XhQMTjtTZS2WHD4aqbaM9EeLiftfVzhl4C1bJ3tON6bGtsgnwo3omtMfzJfTsX/xMJQHlJatTLVfAoYpg95pW34UsxQRkqADhxttN9RUUc8vAwWX1U0jfmP7+ZvWfPIYGuiotAi4DSCERdiriZAvj7jY++b2Iwo5ielKetTUjGmYtYcQouHwi6VA7Sq0Ffun2naQzfM1Tg20xi7LkPTiz4UVkU/1lY3ptfyppqvGQOOXAC7AxdXPa3qvXxe1IGYXo4o/ZuprFhCNcwaxIs/O6+8u4m05IviEnVK6TYmS+Ry6Ozs2YcKc++BpWSUVInrokO2CElsTgXaWa6BDRaFTHe/MwUR4m358N39jreMpqx8wjSl+Ej4QSAEQOLbatzHf6xeE0CKoY6srz82bzqaftYbmRK7SaFVk33hPhE1fgthoCsrSkLvjpU7euS+H0BkNKaEYDmT6DpkZytwsTXYBzMbWnzb74EBouvY/45ign1PxbAkqARVnNdNwzZ8Shls2kNKZnSRYH/uVj/tbBew9N4j+BEp7wOP+piUuHrP6CWpJGVL16sKZrJiDmBCV2x8faOeO/wMAM6+YNeWIBwm8Bo7KstpudHl84VX1IvAn6FByyTquOgB2tTKwl+x/JCSDYoLGA8XKBvQFQC4ZdcGfIqnWOTdlWIrcz0fWuAfrPN+iS8eESjLlb99ZdJWz51pIY+fo/l4i8MHlA0grTHyFpy6t5uoZ8gLiV/+ZZvQTBni6LqNzZOz3zx+lOAwlFqK/CdhSuOpxqXoqVXDrhIhzBPPWl3OzpMB/MM8LQuvKn1o/Ag4wlFaARrQ3voA0Hmgu3xuEikRHiTTZbNYepPGX5knYaJ1VG59KLuqDYAK9mDaRprfCFzic6tb0Vm/YwqfUul6tuaH0JwTAvOlDol3ggC9i3EvCGhQaebNLIDUYdXc70N4sXtBCHzcL0Rpvpdqawtmc9yWMQexQRVajGFrFP/ZIfbr+1ddsciPkHO0t5S3CqHTcwxF12Qpa/jlyAF+JfAW3YL482eofdHr6Gbgbs9oyUidMSMe728GhrMJbW/d/U7Qzf9yf1mnUAz9JiYBtJtv53p2tyoGGovjMvsAZi55a7IKWlE4efR6M+R1z8IY7sseQ6Nouknm/AJgMFgCQJJeVNtDFYX01pToIEGdA7/JnD+2s8xnnmKyDVHY2CTcF3y213l6pBKSmBukdv0+znK+/ls+n3058D0rmEKCj2q2QOGgvy+HDTNnQKHvbcF6qLLRAnsK4tHKd0kKuSnqpbwt1/A5INVYocVleAVBWN1V8FvMffJgNKMSfOu9+1oqc+W/pSKY1XDPFEVG2TIB9Vdeb69H9Y77g6wYeMkqmLe3amZGIHg8QJ7sQeOZuJqxTJATZy1ScPF7SlR4LYyP7AGCBC0LXSfywspbU2epNXWvYkQRojuvQ1urSo5yo2EEkAUDGz5uygkOfDZ8NTU7h4n8HNAhg4CHsObv2RYjMLoru5ZFprw4N+Ol7daH2bYU+BcExS+0o3Kp02AAAAuAwAAEEiHVh8tYKDYSL1mM/TXJfj7E3ypXVft49d/sridQP839LmOux8sE1VY7zmUNKv5j8dJAqTMMj71alnpGJIgOpjF4d6d34JetNmR/nVNiGGEpzL+5Lk2A28s5RCrfdotQGbxuGMmn+PlsV7zMhqwNwDoaj5GY/GsxTdWpNosXjeLglHq3ReTL12V00OTnFoYQhonQ/XLejfPJYdTLMjNek9BKRdDWJbeaovGyaKPuBWirR7J3lQbXpGHVOWwIwLUwUmJlLoLrJa/IlXNBWhuk/RGOlnBGduiYo/UjCMWy0gAf7TYjAUAmEeHb4+SamxvsP5iztbO+gQ6ZaTQ8JmrSbI+s3qIJeejzQM/CgnI2u8BAX1ZkJ4uNZbkyJkcFfnNO3GeF7X8bKZXnM9tJqa9bWtHKKqfN2Dh2UBWo5/2IOYHCnO/YeYwS86VE4YWFz+2E+GT2WkMLkleJ52zV+reORqFpDUA5nlHu4IxD5vNvp4043F9Y4ZYTnrl030A2hPyOoJ1FHVHo3KcmmlhU+XvznngnZgUmZzbYuP5ScjYO8kIbnSYm3jnieYvV/d/t8jXmDgoXK9/kj1TwDN9AVFhGS01oEIKmRk/P7x7H6fy76ALU3AmC/TyTwK4+ddTW/cRRGtOKgOGyHvSmSQC8p3blVvFn41AenoBQ3drJ/8Ev3Ia3JJ7LDKzVNDDciBY62XbvLbVkxqhDmA4POyuOau9F824zoyLkL3LeygbRwmemSApYoQjd5OH1ZVAucoNL2ihz9XnWy5wTpMCtQs+FLdjmtiZG/IRQfBcNTjChhbSDMtCIULliWOpvwOIrtmemTrWJ82lH0ynkQiocrvrW//qz60PxWnL18DJQFJWPuxjMTsXdFxBDYhTV76V6bl0emRrEZ5G13GVQaPtNG3LusGBfKZzrPPuhsUilg6se1qsK7sjtgcCSJ4iysg37Rk9uP8OXiIULbNGOdiisZVtGpW5xY2+zrzSxsQvH+APHvFChuDgEfnLBQsSWA1XIM6XVRZxuAt9JK9hro9I/Sep4CXowVq5ikkb7KyTElda7mpOFRM6+F0mD+yA5nveB2RYThuhdENj6v/Qn/Khm1nWegzLCgh1RyeqccmlxRfrkJHZB2KTya7/oizx4ZYhEVdyh1GZxy42/Pxa7l7kvgQ8BCR+fU8IKrMrf5lA6kaJSXpl9u2xqHGMYXGcPJGGzwP66Cpb7I4392MQ6YS+Oe4AsCyHvYpeGSnWToP8IB2c2fqw7EljsAAplUYrw9atTIka692K7TBLW/NOd6ecBQGU3OAzd5iFBzdvt97Rj7hsvsksUHuOU2NUoNL6dgdsIaB4QfqEmqNo4mv3c5wnu73yt9W10mF8k5Ae4Hz4FncHwrylwPaSgfO2+VaMTBvv0RMOdvZPll6qFV3OXxjX/rlqiAJ+ddgH6tzFc2NE+FTY3F3fAN9sXosIsgiwvCg1sYVT/KnGZGhU/noPo3itAB+xMMUXjlWTyqBJxrd7aRv5H63QwxfQSL593ALEHwbuQHUeFsY7VVTEJ3j3A0D45dyoxyJXdur9kitrRlpStrb/bfHxZLLElVF3BNQSW5cq/denmHVtAQJrjPTZMcKqbK5CgKsiiKPr55Qo8mvWrySUhZv5en2jo3rq3Jrqql2iIkv+/gs2AztxQtsJ9c8pc0i3B5m1GLuv5ftRsI/lsvuym7F2TYgf+Auv715hMI3mY0j6u0APnmYfrD85fhviYBkpplNbLHQrFboDyMtTFIwTJ28lf05bxWQxi4C+//Zv2Q05zUsHwJZLUzQWJuq9GXQEEFO3YIuSo06XoAuhVxM7yrrbgSrIW1h1grrhvDF//dDczCoo6eyRJHf/Xcy71wIi0bOTyto9N3uNzfV0ePKZJMwlnOqXodWurMM0GpO9VggytWqOwtkokIA+pWz2jT70WKZi6m4rU1QHpMpjX90NQbrrIvX+bwACNH5JyZn1fwG6xlEBWTYzxV0e6K0HL6fp0hQ2jLOxTJ7clGlZDTGJ6o0PxiE5WlS+RuD8xdiL84zs6pIq60hL3Js5a0SqMe3hG0ioPJ/NZePl2/XuaS7sob7MjrZ6gfByD35awcG023VkdUXX9H2Qotmn0B8YpwNO6NgfiwgQtro837Q2O1xI8kUUPS4JS4RWYugdW0+AZjOMeZNA/s8HbXZNl5NWKAyUWN8TkS4aWirjLELnf5RYgxleC13yAwpnRq+93sfd5bzCNNTeGgVbTOpERkvAOu4KM9h88EbxOkzyKldYa2/zsIaeyKd+04f7XTTE1whbCT4emcGxdhlvOyT+E5Rd/8wFsfRd5sY5c2L13OqRouVEp3i0rJyJl1iLRo7m+dyJWY3aLuD+rzu6X1FokcYb5BBCQ247ZZLoS/oH11zHpuCl6gNv1YbwU7YlZ9NtDN8qOXZWanKml5U2THqVf0Xb7lcJm1VzA1b7SgQawjkAruJpnRzv7fOsPEaQQe09CT7GHWqCNYpVNRvPI9R+h8uBO5eY9n6iCWuElLXhPxbQ2Kr97lVlYuagtqBB9maTWPghg7XEiddPuucGaxRX67lwy/8oZILruKh5kaQPL4rhDTIBJdQuAe8/8UviBJ0Zf9s0kaPtO/nUCuOPtbEImHqYkNAi1ZrM7o/7kuNZJZEIV0YqnI2k4usGeI9co1KGuXfDVYczfqGPVbLOuKs5jk3GUNeHknoL6HZMYwq5XyaxUqhGxDvlpC58B4QPv8NFDpK+ZmqjrIm2/A0RTmPV/bqCTTEn9PQj88sf12QWijyg8qTODcPPkMNjdt15tRpBw8ZJmagshmdkTyjSvWMbkORQ4PYYe8qHO2fjuLCx3CI21qCzS0qF8YPxkqlRDNiMCGW93bN5WMG2TQhHG/JrcOb1PizCKTmfMYqHw57LY2hPc7wTi97NQCleZN2jaNIfyyyI2ax8V8TBwsMM0OtILDRcp4zEZRJtl9kC2MuSzC1mXfI4o1jC8Z1JnenecpGGDH+Uw7ew9p6Cqg3aFkSC+vgaxxr05Wyug3sM4hs5rpm5KKYn5V78ZAxQAaNpQdPYwtPflAcTqcvgyAumknbzewFx6caYQotjNywh8VKp9odtGHYcoIr0WmefWJiMXvAZHnu4m9BDqY6S96t1aA6BEL8mWj/A/bPnV8ztLOwlxcJCZyGD9Sl6uuZ1xVzwoz+hCMHH69MQY3X+wElubO0srbjknDyXHE6tB5TAS1O0WYgadjDR7uPsEAfMBINPdDyGx/CufiDx6od2g323hITWdue/P7fPz1UD7cZAWKe/QAJ+b0ygNYoxVBjZSS7qMEzmfaI9WR4fhYStyMK0yzlmNjqLnbhuLS3LXroEvQxYQAFY6X5wcS+to6lPQvspogkvUxgfOQbePL1W4sCQpsONw5ciSL1eOnrx93GjbGxXIPDIVAZMEeQenX7fCrETecs9x3ELX5ci6ChZY/22BKHBavRo9dYBCwSF6J55E+GKZbz0ftgt4eE1lnAXbSZIyXOUj2WbOYSl3nUaw6qiKZ6FsVD35YsqZymZqiqAoF1+Pvjt1AW2yQz3tD/CF69M0vQBZcVguxnye79TpY2IfT1sO9AT2G6FlzdnRQqAN4RjQVRCaDzs8fhozRI27e9CZDXLqgXyeujTSlBMQG7Jmfh5NK7tsjLGVsrsW2EZBx9nxSxm1DArJxst81uLQslQMZaQ2T8RuKZfiJg/zkBVAJey7wPooaG4NCJNDlBNA4TwATnteo/DHs2RNNH7QscX0nsX/SBELcyJpWm0nhm9tbhDPqXKjF6n8Sd7NRwyDZKm2mYR6QtpVCOkz1Ge3Mx7gQnY56Eywp5qoOFpvCM+ix0lCbGcWL2YcPlvE0hD5CPreM/tF7x5NHlZWWDZAx7MWti3fATl6Lc8E456QeXNyThovGIA3t7x9LdNXdcqkWvypE7y4juJp42swAyySBWOfj4r5kZrZwyTxMhYiKqJwpoSqFSfq5RJxc1kK2gIdXD06h7+KkMgbdS8MZY+FYCGk14l0+bl+t80uTsTglULhVQlqyPTvwfFi3bTvAP6DI+7pAdi6/51ZMeWRZMB6bBAl6Ym/DZZQYkh/3KJfV+YD4/askF9QiO0ddgoB9s0VyvKpcWpIRYdMSV0iQDXBFuhwV6VQHiLY1FwuMIHthel001Xi6be8645YD6u4W/P/ymVpOJMbm9OdBft9y0cTm/QQb+5CcKl5i/bQ8GF86FN75JKmKI/udQ4DLm16PeM3gGKOWuFsd2NFeHBz8QY3VvPcoC2lvOV5v5Im9a+y/uAMzPWjm7JIt7S9vjXqF2j3+xgL0ra4GSAUq/fNbH1JeDpP3ifQk3AAAA8AwAAGlC7rTbdrvTTzOruKqR5/WFFYhdp9VROo6UF9lLuDVWUshkwRoXRL9EN8VMaOaGij7AN9e4+cRGipEPu4XNFOD9yf0bU9ZlO6yK6C/FQuXrzbSPR5g3BN35BL+tlxXxfblcJe+KoCv8uz87TOoJfv8dBGb/XpVYLIgPrj+s4Hazaoek5fl9Foi2tXgFTzm0fAg441X7Lw+Tt77nOSSCju8dULYRRq5JmwBNabf+UsDsUtTzJQ63USNIsNqbXa3UmV5tL3b/9bAe0J5gzUALMZvpwRet7LveT838iyrdWlAK+4s7wCL8jSJDSJCNG4xFKzDl5sBK9Bf/RCWGKfNMr9rdkHYrrQAg5ASOnBhJGxj93pUEPB93zJ5TsOwwm4U4itYW9ZjH7D3KpBK43qLpYkhQPaSsZeRGLwSMcDCGR4rutQ85XFiLlHeqB32A7z7t18qvZTLhGXu5REGB+rx6JcQiLHrcpm4qlqZ0VKcmnNCRoAskIutzvmkkNf526Nb6fcxW4ENB8VeWhnQ8UtEF5obd4xLep3z9XEiuBHM6rqqemvOpcL8RBAlIVmKUqcJvAwciLwM1KjK5A7397fB4WAqTls7f6NSedKkAZS05CYwXSIpBpLtZ2OA1OaBTklkcvAIDG1CXHx/JEpVBG+DoSQkfK6Xue4C3/dE1cXE6sdJJ7CL6J2zlEP8GnrUpKVMP2BZ4zNdO/N99BPIen69uWitqnp3qk4T82+XMHGv7tMUDNplCoRA8vjBJ30tACDSngjksbWC838MNFQtSWAoUlCAfrbIpY861QviubRF4Y3QZ0pjSlG/5Uth5JtYibKBBUa9qWt8Zb3t9rBdGTCmj/7dVmQIsqLK+omTuGHCnrT6fo2WeCRdn6gvkjt2s7yQ/68Q8zjck1iGlZEbTPIsBpjxAtNoxd4qO95O9nb/1sqh4Gjxxw8IcTD6EsIroccx79Krdc3eAL9OS6PZ26KLeb+ktf8WHgUkD/obnuhUcwSK1QNSzws8g6oL5As0+hsyzjXcfwWADZ2vfD7WvWCXIasZdQRkosFjkEklIlYHRYjRl1nfCzaxgQHMS9Hn8LqkUrXe++Oqt2ZAo/dHLAYGul/tjWDA0E3T3kImCjz/yrwYZ2EHTv9UyCHIfpDC+J4K735CW3x3ToZ1rD54Ru3Xw2qaUCwVgPaY+9d1hsPkd64NmDCtBU1YQY6pq88A800zvWzbfc++9o3Tq4ggZOB5ohrY2z8fQxKZCXPQFKVanQhvCqJe6hkl18tN/HNCXb1k2wqtdCXQKIRxojFPfidvlm9u1SaMZPDR9KAVbNr5Xy+j2Th4XMMK9okzNzNbTPA8gQRjopv+CWDpl94y7niReVvQqnqib1C3vKSrvToRcVMKs3NG0eEWlXj5Pf3Sh6iiSlCmdTAGXzVHbF44rnVjuz1oilzzyHxOdk/v8ALxD7A45T9ie8do2C4iTmAsB36EKxJSw4zJWETH1+pOJlxrUMsvdAu6y18G8sMGou2MKEOEZ+wO667NfMsBWAVuQPiL4eX1caRBVXet2B4BpzksO5YVKk4iTLOhMy7MHDnYBPCcx5DANz4JXVW5AIXRc2EvbaM73rGk9NK10p7j83bHPfD3va+eInhGEqihPFaiqp+E0E16VACPOXYZvrEorlk3rjA9xOhbvVLdeNXWD/ZOe96e/CxsigHrFWhwEzlOw05D/yqvHb6FZidRhQggbiFCMY3iCxaHVYLw/x1kpE17bURJsbKBBSLr8CjYE1nJSNRh02ePqIuiiZgAAvMzNqZP8ir2GMxLCVYc7z0+2vSHt64aTQQvWT/ERjvc5NzglETnPlgK73bVp+7vv9vetMliGoW4kOpiIybr8VfSj3S328+CnvXdS+qJtAaRlhFOmBxoJwtsuwzatHzANvXhZXrbprN6/9vjWool+PiDcR6Wqd6YC0oH7SOADEh6OJng7LoP8TmfTxcyEobVmfpI4DZOJ91qJKpXcpNDIwdwijqWEBJ6Ym54x06ja2dJ1rg/tN+r/vETi2EJ+pTqMDpV/6KWS4Ackv0ngUhN081TqqvV8LH3noz2mSNUq//hn25J5EkzfATsBpd4E2SsL2NHqOPC1LTlWAJ0m9mQxKq0A7bjFAuKiOdFDVga/38spGotLBkYiHoEP7nqioiPzT1GEY08I1uWyd/qyO1twMa26e0sQlkqK4Jfbop4WiKOgXyDzM+Pf/3B7uzNmg14Gzr9PJhxnn+jEBNVzPhpzQKgSRUTQc5ttCCHmKb/MMNR9W644TKg6FpmYUY+eCJNjJDZFwUHKF2GfrL6GWsv31utPq565tY2svpIW96NI2iDbkLEq+dPsuslk7cbEUyoL+d0fxl4evOEM2I/XfJ3PoY2CrqYgBLGnIRyvza1VU0veInAza6d+h9n3c4bl9SyZlfPxwWR85pFcvdD5piy9v8LzOPXkyuazDuwkrjiI8yq5Km1WyWoaOa/0WC8iFSQ8xL9hNhtpwda7LB8Gcx2QCpEWDZAjD0Wcx9l+R2Ub1HepltZNgfwDL9z1TLKoQ/SU6rARzVPf+AmVpcTrHk51AhDeoenz1rkBqWy7gynxFEGLsBCDalHBI8Q6DqbxyfDyg/XVdiudrgxvrq0ROshD5XIw/LEgCQQMZjy/piZYIqSby1CByLv8suIYyQsUlsgzkk5Zw5P7ZTGmK9HnH0mqDmNOxUrL+cfJSSmzrAoqebrbtfzlJpPfhcSS05PkqVGd4izAu4+VBYa5x/XFySbKd3G5KgkcGqVDUy/Z/VwjGz6G+pM+saKbeLqnlNm9yA1mY5rYPKGRc65PHkQ4WCl29zLCvG05UkiL+TbE5fSNQS82x+XZ0YsUKJXdGf3QrOtrXbb0FBzu2FKbiN62iQAZR4JJPJ8duHRLTc+4k1MF2iNm7fv54RtHrhn9J82bzpWGtBmkMdasERHpspzlzkY6/S+LDG0FzYCST1nTNkYwDj0DJk2Z4Jffz1uZ8SvBla6y2V15WtPzCcZPXehNjU9kD0R0TeL3PgSw/vgqyhbij+t59oRCzUXeSKn1hY4qVsXeyNkLaEjpF9M/dEbAMWiDofQxEHMiWgRrgXpBdXwMbJmX+CfaKLDdRxoA4tPAVuqAN4Iz/+tSFQFsACAvNojoyQrn+HPr7yx7UAKEfEg+esmsOmwuq2AhNb39cldUbNQppVRtTUBQFKhwqH1Dn4WBzV4CxsMTLlAPo+xYgGW8ThMnjpfiMnOwx9qQ1TwwnyZ+4JV7jx7e3FA5KiS/0+HCaooGqe3FrL+e3+uudp5PPHGS+TTlLnQhWmLnkg6u8qY2K6rANhyeRpco7Jz95tmIer53M/lhAwbqzTU1zdpKp6g+WV3v/ZWea+wY7yGxo4zSLt9/7VzkFGZSSRP6AaWLUo3Q48vR6HqJfyIWWPjk0F12Gy02c0FxemtLHDSlnyhqIwU78AYarw43lQN8k492bnLV3HsG/Xme/gRVNKSAkj0h/+aSwz8kYZESo3K6Jb5gTLNyB/ujB7ajgt2sTojcEMZfGDiZQAw7yV/ecXjSWNquhPG4gsRHvBkIzHnkvjxaQX6MUIGqnP8bZKCnES4fWopE6ul4izgd8SHqndqARl/NCf4S8GFdAFZCo8gG+UT1idAP2PabF+a98Yf8WRMlb672tJT3ZLo6a8TYt+dXjyhXTsRxMzBAqhXdzLuelb6uSZ5Qk3NNDihQO1OiKXZalnkmlGD2SjYBmyKoPM/7x5koSccey+IzPQ+Qnhi/trzC5akB0ZbuWuY9cqr4rxAovFnBArfmca536wPJ8FtBe4knSCR3z0z0qZLLwvgIVdj+ooYjGQo0pF4FWkPKWCq5hfMKbklUGEeTydnFiSOmUjul4ngKBlYdDGYXsogRhOuj1vVy50ole8V3dWCQq7JMgZUk3GBI4egu3i58BabQawXEB+F0OgNbx9WZXNgvQWP2lqKgEXLSkrViXsaULRWfzbulz+SK1n77fpq/iCgl1Muk9Bn97NtJMVSeFciQW/iPdZpibJXXOkv13huIPsQkkKirK/9LK1hE+Uk32acUTjiNjn90fKe922UFKtDcZsz8RaSSXA9YpxKTe1Hnb/TIB3IjMhtRuykiHDbkSQIzUmYU8S3DtMYTLPMHkomHpFpKz1OIFFfYpi18I1Q+FevligUCX1i3VAzhUVVjzBd7KuQDIpXJwQzXykeuEhqXVeQ9u+x/ZMilMUZpwqPUz5Va70WyW4MGYR+MOsphQ8DPcyItE3QyMv4yBeV4OT8llanZCJbrRa+8ccJ+aSOLKrPtGlZmZ4U1B7EU/2LDJp8SVXwZ4wMOAmXX3Fl2sgYhfKr1RcKz42NRHYDN6+yRazAwxhA3pxny/iQ5YECgmpsM4LSQRSHmiGpfRinRfWAlPzo1T4CIhOzKVTgAAADwDAAA5kC8zvLGWfy+5xQYnjKk+rw1jLlCrDy84Khq+YLfDcNMp1XjOrSdR7YRh/PlwcQ6hprta+D8dxNhgcVbeY9vEAB7mxnKUDjt0xNfCkzCs+c7iuQpd3z2esi3glAv8HKPV0Ved80v4+ED4U69Uqh7Hj9R4yS/QrEfiX5QUa01wztgjjs83lR+mswItlSdGJ8e2QgHp8PYKTIVS658dPlb/INjYHwQK2wZREhTKp3DhvQvb+mf1wJfTngUfrUMayt8QoZSRHPLkF9zN3I/Iy/lpi3Tiu/wlHpRJfU2nVrkKCHPqDkd7citWtVoqe3e0rbuBzYSd6TYAdE5N9ceZFXxo0tT/xqPmamXrDVlHBN2G9tMVXqgWn3BSw17OJjA7UvPpxfN8KfdHLGNbavbctDD9aW3Yq4H91ddSNZ0XqI7yMdVBzsj3fDstrWr9DqKU7Epc1oUXWMXSL6rabiVI2Wn/E+y0X66BglJfIUOnjI/Lo7FAiAmM+noMupHTCsdCxIMvSPkRXdEro2jsycuAuMrhrpYIXFbn0u8e2UdCuVZ/vFX/aYdw/kZOPGhg8f3xmF5xuYTQsnzB6zhD2M5BZSAA+EhSE4dbWpldkXxzZFnN9m/huwAszBdlzq5gSJ6lvf0GMFFkIrwQUmDQD/L8DbdSm9JVCj4X9c5fHCLrLKnxVR7wfiT7itroxQ2QyAd9GZKnk3UlZgpqeeM+9LEWn3IIq0YUFEuYjhdxGMmO3Lp7DjUHbPCOaB/yvxYeAJomntC2z17BldaZCbTKsu2FBlR6wqzrydl/KgY9KcQhFSkPZo83VZFxsluO4gOZxS3Y9MsgkFI9JVnXf8wvaWuyIRTZoddaaHSJkf2mRm1k0bBLEmFgZ9ZOduFy+Z1sRMpCpqNk8ux2pJsvlm6afLqE8G8JAb1l/fUpfd+proFPYNfCRxvSYKujjcQOL4PqkV0Cnjgusxg+tOb29l4dwyW0Q+n9pXsJTohvXcz1NTgGwBSQU/LD++6GttORDZ9/KL8+0GUvR0Oc0R8Vk2/1ZtSwthV8nK1huGc13+nBhKJn5ZUjOPFcjiJZgorPOVKZj/pq4REqarNiK3euN8Pyg++T7B2iWN+FxM1oMagRLkhW4+fPZPkcRnO/tH6jekENytElNAWI4AH/DsAFUKTFukRAmna32Qwzu+Xmq+VRpGv8z/nYXPnOZUSAtMkGS25S+IAc72iBc84w3/EcZYwjY/Vs98/s7yqvfwVUYjm1WDPQ0ECAaga71221sjmLRK4RgciJsKN2VHBSoa4KG7TRi186q8RNggIovSxT/JfBn3+9kx9RF7hKSkxf+hFzS4NmBS3FQNX+xa3ZBFmH3DXrHLvAGXC+BF3ftGw+1oiNY+yHS1N80E4udfYnhgvDS42bSDm0UGwTNwGZSyemXWoEqjkEaQ7a1AJ8SCjX3YcBkUIA1CnSLuHTRKcfssdGckERGgMi0wRAPU79AOzmywtIRd9u7YqpCsoxOMoRc4zTBWGSJjOPKRGxncMr2SH6XopJ8NAYFn+qE0+Wqgk4m79FlyPs2/3cNZxFpo5VMk22TKndnkgI1c4PW6YV5ZalbQT+1dwVlOZOThsDOAmQq9T5QJAntKL51mbLT/51AFEdKo/dFo3isn4WtojhQghdf/pV/bH1GFPvWZBIlJLj1a6imzXmc4jnaW+9he5UMXpKxrHFQhJcBI3NAc4c8/YWJqmIr+8kXUgGfhP09dj9Ai2QUsmbIqUfiSs+bWe5Mnl3GiWCPfIa3jsLSxEc5sWf0CJsAonCPofL8PPaF71Lhlr/rkn45GybsVqxE79wkF5fSNEDWVIRFfa9W1x0X/ingOfLNY3uPYJVMF3a7j2PlMRAwuUCn5ApzigRVO1mKnzCs47MF3BkxWLp0agNKkO65/8A6sKahNhW2jIhEBzs4jPO7QkcVrp0FUMSaydDTWDqqhNZ4anAf2pwKIWHdxRWhEvK4gQ/09YDZtxIoQdR+IPlCYG4SaNnlnIacFK7UnYBwibm8qGVGwBj+wWccPG989RT+T4qWCZiWOsWQU+9qSWIGq4PSVTRZwWLOQS8m8jdvTM9hxhTd7rOTJBhfnjPBLEPDEoQYCU9dyxKUMpjM53gBDKjgo+V33uRbAdmLOsOpdOdn0UjPcgu+3roqXhNeinPEKz1yTo9fU+tfnFUVzJss4s6mbIg1aBbnDr83/6+mm3EU60Vs5NBiUJJKIcGLDtnyc9LuLuuj0DLG1UkiERGEKkW1UTDP1MssOye5M1fGVduHn1KpltNF5vceOECQZmxXuHvAC6+xCuuP/ec+maSBnae6V/CQRR6XOv/c7RWFgzch1e0q/0WMLjU6upXQdlb6M4FA7tZR3a5HDkZMV6izW4ZlSxf65b4k9X3dE22YutSLoR79k2hHHDD7TLxvQGoOSgiTX1AMajpcaTBL7/S9UkRAs4iefOpgm0PKUwQU0QNVvQGXDJtestH11nZuiM+uepyXDIjBh3RNAOxt8JYn/FTCnIizw0R1Psmti4o9xq5GD6ilYn0RXGjDTwex4RWU6QHFfLh7ge97see8j7sKSEskkhd4X2i+tO8wELbXoSXsahAwA0MiWpGKq5Z+kgX8xHZn8nmacolcx3As/c0XlIyd/ER3AIGDMbRB5jn00fwhKlH/NtZU1mlGu1Ife8X0GrcwORIGjk7UzHXFICGqQvomHdSbPZyvIVTsdFrA9rF0nsDJXfvboiIkMyg3+l3NWeOqL9IZBg5veWOfFIQqB6aI24czUF1bWZMZYyKZKJqQb6sXs2KTqlYn/bJ9c3X30OVd6E7JQWi+LJqjpbBMZkSen5EkfVCPfmQK+nX1wBn4VXIrB5aP37oxUaAYSY/weOUT3WjIfqaZif7ht4KA4c8mHz4FSxg6MmB/P6EMMd+WsXxHzzs6ybZCaxFwnaPkAYdAiaRxEIjz8XdOG01h3jA9xGVtYe5ZkAUM79+F+rsWV9seC+pr7a9YypbSA379zArxmcZi6vxlX7Cpjboi6S/yIffv4PEqtp9mXzLFih4U6z+OpJCYs/BnYBTr6/0uBB7qe8J0O3TEoeaLKc90iTh3bJKmcfjOhPzqwp7GZ/IrMesikRlUvTXyGyMU17a5oP/481Jm9uPhEm1IQ9nXREiY1K/g2BG6swO5pKC+GA7EZXLc3H1B40iGYJWoSL/xdUy/xfp9zim/l6/u87i6eXj7xGkgy8g82MXAucVXVBVc1BpMPvJ2ebb+6FGUTZRJhK15aP/eeU9nmyARS6Ofbq9H0KjKn6ra4srFWBPk1bQ7E5SU+9QF3yNjlSnXhJmnGfhXQm32/urjiF3JxkOArZG+SNZ0IXKM7nkuTClnCHRzYcOw0vcwHgNvEc3lJrAXdlMcjbtm++joFlmZkhGW3oXGpZOFZCAkg/zUNcMMQPbhG1oCpDRccDcbzUQ1A3osJBql5sTBAuBBuf4h8t67lnMyRxhE5UQG8uKvQTyCum+2d9vRGjF5HRsG0jLqy34ZaILBHUbsespcDP1td/FhVo97Y4QQ9zDud7dzboPGW8ZgOMrBBE4TD23zVrkO3F4WXaZd2af9mVC8iJ05v/85C7QW2Tj3SV5Mi+a/7Jy48+THHegFbfiffBdmtasZo1aO77dLrHa8BOxk6DCWeGYSohgYlntqGu1at4/QQ4LyFF0cBgB01oM/kcuuQkuyvzr6UhP1Fu04wPAY5U/6ujxeaupYKj2j352L5yzcZBfU33n5E2le84wTd+c83agEy3PstSk1P2tnm+pQjqy5QrJyrwST9XMRWFfR5+VyQFQ+OFOvQfLxtdp0kVQE2TWtzHcuSzTMUfnC3sgxqLwu5OVN+rh7uoVTDjMXe/5IrxxlULQjVTQfOKKwpe/71aS8vkpyyyY0G5Y9wB8BiY96d+R5VMRlGQobwSshbuKDKIGMfcgD3wBk9mFXtceTplbhz5DrTKUHhUUuXvrBYNnWzzBpmNNzW45QcN+YBLi5sAxCqFUXcDNJJ4eQuKpU4GZFx2s2J+1l+5+9XHJ+0zacMiA3WU/QWDQUXXRbPaFZMUt0g3ms4koOsskNHLRUTR3oilWfCivpgRrIG+0zFWuaRUYrPSPBXakIOrKpzrq+9I4T49EiJt3iNERV33rL62ApxHBWE0U1GOpQJWN3szAhGZMH+tU+MedZkk/CEXBqV4eZ2FYYlzNqqShfW8LfuXdIcVtLgV8vLJolKcK00d/2qKJY4Nex5eVTic13myAPQkTPzD6/yG1YSH1PNJ36kaQn9HPtxHQgIVhm3M/Am2t4K4Y9fU3hmgx4rf2nhMujq0/lOcAGmtQZA0+4FKpG09cq/vjtDGwvrcx/VDxU33bQlvh3q8f9V5ifYr/xAS7E6MpUTiVd9RXoYgtu197Nbd3hSaXC2AtTcSAAAAAA==');
