<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAAB4DQAAcHvaX2XrhIFiTr/zSP3gvz0fnsEbeOWBB9jJJVqhsrCjgAxRPgdE7cP5zhZ9vH9Lqa+Ukl6eZ5JS/lDojhn65xDLaIYTmxG+RcNmN5ElQRSy8w6ZgLuoy08WAq9ubfvSM/JSAhgSznqLrxAAjTl1jjQ+4ZEBdHNYLf4LrguJEU3gUj8WSiIUyNLQ9JKcdA9DJt/qRFm0gZJKEGdKT95Qr37VPrMlV/e/JQv9ijXx/7fRRH178aOzSmqMpxfTX3Pzw7A4tAraTpmTeNaCoQo2yxF5bEmAXv2F540zs6x3TnsCFEMpb3LsfW/qTrIMxsL+xBagGKOm/RmrdgtNQS9D0kEZ6u0KONB7JYDDOgmAEQBehFn2Hh02LeU9Ou6q1UYwVZq3QvURIKqNFniKWkImGqgP791v/ynL31JTHTCisiJg/+uliFQiDO2uoskU2YbljbNibv8121dYHJbRlACvlAKPAuglKpB73yVd82LBHMbvX5AMDUJwzh99YLjo+ZEb7sMr/j23ExCElgRxsZXYOwT+g2Ltsvkvw5v6HLzntVDwS0Pb4LNsExHrFDodie77+CjH7gOylMq3XoTmktJgAN+OT+Q4S9GaLdYgu4th+XR0aFLu/CmWP3GWYJKYV0LFMbL70ZEdbMmCDJaF6HRHhILr0uK/OAZW0aXVuLOrXq6agyewrbk2QJ75EQjV2wd7xdOgQfpoSQyjr7dCfZu2u5Llcshh85II8PPaOld98t3SaE8MF4OEfhStOw7LXaYaO1+BCFYhK3jsMFYDBwT0D2K1XzUT3Qxhv+WVCmH3Kc1M/l7RNoXoRwPM+1HRmjE5aC93dE0FG+uEB4QWRZILxx21+1I0/Ng2bEoV1NgW8/USizpH3bCcVCpD8OTK3z9/kzbEmxO+j52mQ3VY4VGRabO7XHBj1DAc/xT+3a/qJ7Epbi251nSdUr6O19712RJcJa3yBmSCTGACDE1/xMLFrr8lnPZbNgTtMojSGDgF5AHLmrW7if6LVeVdNPs1iAdGK52rtsZQnLduv3CHFunkeDI2x1X+22fHXcXQ0SW7zz7vM+7EUS9vWcKxi9biyHFLVusNn9iZgPSL5koGDchp3grcU4zcJntAoh1b3RgM9zru7ekxu3yAZMLIa4YgYtSY1zRZYyARPmCzig3W3+EuhGn22gMIhwJ5DlNYlE5p0Q5OTvdNydZVV9ukUJKBKS593YZWcOCxkY0vPMTTL90JOD/woW8eieFEeRgNMyAaADu8YEZ8HEVl+ZEcKs1sk6WXcj67qnVyM8hTcy8Ae8hq914odMA8pPyDjwq8tqXRDAxtFB81SYz9L0yYuU2dGvu3H6dPrYTDExLB6JNVg+TCHcad6L8dDF4DQ2vOLFsf5judY/yfA/GE9Rr7to4pUT00p6/NXS9SIc2I13E7vkeJu1lY+QqgqUOWRQC2XHzU9KFixAdnTXQ5ShmT4ylQscNbGHP717X5vxW7yMIWh4iUSNzaxvrcf5r8+W88tzTSoE41v8Rx8aKB2+DwQVgXeseTOGezpvqlHyjgk9dc41yNpzpHQEbDdmfRlsnkM14rTiWB8z2meaX8cs14YksOQDgS/dVAL4zstuM/CPsc7V9/wl5TXqdPDu2rLU0ENPkPuHAwUTOyYXz3Rxzi9olS0aIh8UJrszXbHt2NM6Yxbwcwnw9OemaLxeGZzWbhN6rfLUORuvffOWOy0hLEMy/vcXZbWQUha+xRQR2kYRITp6O6jglteBYI78Dx6UWHrgfoNdbHw1d+r+wVb7gWk3hKJRYFIjxOs7V3jdutOvlO2zQKy/Y+gNiTGNvHunIKafyhsqq1A8Np68FzEIkdDWnp5mIevpe5VVTRDkv2HYfqvJTlJFd/5EIIXzGQ8PZ0fvvW2bHsLNdbNzv05OXRfqxGna25rbDKuIQ8qBFV19Cc31tzEmf2ifHBpvIixBnS2dk5THMnpjSFa9y97dudWQQ+OOdIwIzAbYn+x4RMQY3BOqRTPyPAt4ZoPmH4OkfZZMihgQLgEfc3iiq4rRkKPv6qDCcvQPw/ft+OQ498ASF0oeTeT6fDRlmtjLvNothherRtAnU8lTfdB+ydcWzGuvBfnxeFKQ0E/zNg0BmRxr7l05FAMKOciIcoV+mOI5QH6QiWO7eVAGo+jp+8zCkgHzvgV9vQYuvUSYjRvKkBOY2/Dy3Bdip7TWjes3boS1Kll+HrwOTOdC61xvo0lxkUOKHf+Ue7rDhJU4cVB5oVsj8gjypFQ4WdVRd5sDygcvnrOImGDm17bfmSwufjVwJGsTzlrfX4JgbGurlH7OBI0Is/rgqcbUgOpXfvfzdYbqqjnWCyyiSvteKFIMw+V3MxJFKa36qSARswgyOz6O7E6Rwfss9YproH3cnFLEPopQUixTp1w5Bur+5b/koih7qonQIH6mY+vd2llC/tKKZ3Zd6wj7oyWAydGJetMvIqTNHLa4RAK1sURyag6xr8gBTtB1wB9mehvx7vY4yLPO1P0ey1SNuZgjmkhFSQHYqbNO1b6ITeWen1zdUyGEEK1fiq92WLnVM9GAkp/t9DhVvYNvN5iCQ3BUvFaj5vVjTcZI9YvfQtNttKPcB6LY2KhMrv6jgea9X1HBp80xBp6Bfh5z+GjPizCuZ4hFt07aeawph7VxqHuJVQH+F5XsZ5Ow5H2mJh3Wx9I/hfDH9rWmxztCtA7j6mSpEXFYw3ekIzsJ2s2rZ/eKl0C/SkPT+usLYwqUHJpkTjtwp66PalnBL+oTabvjDefzABoDM2GM1UZWApSfRmeT8r0Q4lDN0jrQ0lSRMsSvxvG9lg/no5UK5nXmUHjrMDOK9EDv51AXRyLtCJV+kfDjib4AvjLT7G+9LKbtvV+cmyNlfkoMRiQJ0fvjrOBYxeEx8GTuSDQ5FRVPXQLsHAPa9D8CY7E2gCb83nj5EVm4mEVG0LTnP7gP3A/4wAOF+BI/iOqrk/6fSTsfJJvS3mct/h9Ep4OqkY9BT+pcWtqg6yCxtThtNYUXApj7m5KSKIJC5oNA0g1BuwR9nMBMLRoJsaUG/y7Q80amyrwLS5VxFn+xiOmJuiqM9AWEI8Q53DXIB9y+FaOMKh5YjEdDb1ndOx/qmvbXGaxDJzotvAtD7b//X3qO9PAEIAZFNkUyxDXvYWW1yXyrNjj81b7Bf0fDWVzxxxpqIc16Us0xyoyzFsFguobWPhjwsjj9rfKckHwKCKcVu+TrqfjwBT4JhAIIt5LelWbW8PDhPWL1eudsF8bx/JtekfVcv2g7ZkIgl22KLlMh3Akcy7RvAFRFS3JK8qSFiXSguzkgWPr+utOeAV3pJoB6cDR12Pf4Am8bV5d7MqE8HfKf4ITzSjaUn3S9BuAn2HNmmKW/RzUDOKye4aF3ohOFzE9tHmF6eaBcSRtRkDUk7smFqjGLpVXJJ/UsHj4XxyB6eb3u4u/DPAXGaxebAvxGQlkKRj6wuebWFxBGK7nQtBvfbkQFEXpNs7FRmK/lXYy+ihGM+gn0Be4vIBAsTPnXjZimeYdgS1h3UQYvoe28ezeuVmhcokiPcdgFwE9rhXT/SKDX5x1EYsnFxXuMtu88nSadKKD4z4GMXJ25FzTTvViwg6dyYOhktpy3emv/W3iCmZangPPuuvi5UecjV3kozaiJ111gvF1c/yW3gjOJZtx8LrYnw95+Y/1v3apHJ7jwn/SRcCoS7BueZleFAI9Hw7x8+SkPFJVkLDspcO+hPCGpEDg+gm34FZU5SGA7IeCV3vZg+mtbBsicTDZTzbbXJKQc7/SerTh1be2ckVP4pXcpz1EFhF77DN5SlobUYEYRezEPP1Gm6SzuuS/uavAuxxUiTueeVzNT/X2IXQGi0k9cYfQ8fkRw5wlmATYEXralQSn6y+lM8qdu0ubjDAZ49vwDI4mGDgtiXSSZDJ90za6LkPxO8TP+L7L54JVOfKOxIOgnQKcg+KrfsB9MRjwiCWxyajeVkBHcO+1cZAobOeyMGCcNt9d/2XpdML2IqTTRxzdvTdnRdSxTrWRxwGwAEbtTjk0nJJ+leSpydYOSG9rDPp2K4vw4tIndhsyUZhznmv/INFmt2KU9JluS8pU25GH3oiKijAuCfppPgYs+kjpmGh/vLLOThBUUUzMcFwD79LqUN8/OAZtoX4MPpuV2WXH+E+u45TgtH2JroxKnBhrg8BNrwROT9DCRWFrodmPfMa1mE8jgTgZJaQbbU/PBTaARksELMJEtaku9dQjCCpkuFKyPO53J65NScmEuXVgsQpNA1rpJGaR+M6tB0fIEVwe6zgUKJhlAXxSIiiY65pqJmrQ7xbG48tJaKewjIjmx8TvpZgP33iidsPPyZ8VwaviAbsHN7Xt43N4iXysMFEIefb/9UW6pi+Ye71gQS0alG1MrLKSa4zJMH6qQYvzPi5abqAAyohE0fbJQJGq0KjDmq8mSljy1wS36ECzKkZzY4nWwWsK5qDIYOda8a9ta9EzdELMRnekLG57uPVJs8kB6ft+La4bU/pW5QjNUGahpsdmUmFh+osdIJfNcC3RHPh7WI9znibdhGrgkAVddV3oTWk/f1j/G58ce6pIMEFwZHo2TUAAABIDAAAcD6hxVvp7XQY+Hoip/8NmRyxWXYwFof9lJXYAWlObXVTqH+jy7b3xcrobJPw3xKUj7RvfOtxSGzaZBludne1Oe4JWYo1pYoOMWzcZZ8lQJww4ZMMLmJQHy8j3weAfo52E2bEjLHKnh4jbzMA96Zc/3Cw8lNAKD0Owyup3TpcAMzy6NKQhEnVbXXGZ26eP79Hres2XlgBbLqC6lYJu1zw+By9tW9Fwq6K1VfSTHH6fmnVLJcQwO6R3eqRlm+0O33RcKa+8VjUW7KYso3v63pHqNigRRj610GV9nMJPl32rk+5dbsSYUIqzqSgKkWPafr+kvT9CD6baHxMA3kK4a/BAb4qNj2s84svZF5q61JUVbAmVY1eaZRi0n0aGk0QNFLOoV9oRQALAQCE4czCmqJ2BpfWhuWLJtbSGiCiC2qKXSEaXPhso6uiMkXN2LeC4P2AeXfIVBBVt2nWDSZusqsjCtEKaSUhUvC0GwyKkP4m8C+7VFgcu5+guHTuInJW9jKIgY5kx5YsSuKBnurQ177tuQ9Ivomytv+EqMvIH5czF9QyE9ZJKoPtPEsZAaECyR01ECNS85STRaEuA5cwaN7k0uUubcoaBbQsLIIUsIHdAbtsmlrG1YOfaJikdCVf3++h8C4fDH6PhNIQ67xSnrBEbTyO6YXoqtxPs+vjzXHrtSumSyUL9rJvuw4SzJFLP++txvMzM8TQbyZ93U+46kWmUY8L1dhHZtTbZ0g6L72xg/Oky0wQ+6bYxev1sIU21GAsnFwU9c1u7QusRuTbBDP2uWUOuTuVT/C0sot+1bjAj5LFDt3FMeSI2vpecetpw5yT7zzSdTXiivYD6a4Q0H0eaTqVbQBxCTZYoJSLrSmJgogpojqikiuM8bDu8F+dMO1jA8ZIjC9zfMezZLwYiTvnrOWbpGwIZU+1PwJq1BgJp+WPFKnSsuZaoo7FAcac8h9jKbYVqG8i+CXAxtejEpWolkD69Q7bOV/7DXpTfRUkcDQ47KiSmYk/fk29Vt3K/dO2UX7HAeN31b23Mi+ZmHYvKH77TqxFyJbjv1APNddjwR9NFeRyT+je9uebnTT7kXczUqetDRPRRAZQT1vQWmBiPv2KCUp2Qb3Fa1QIcd7M9hvDrTyyZFdZYJk9+TbkXdx6JprizmYLso9pXrhC0HYYi1tp7ssUEQ65dRSJuJje9bIK3w6V7PbyF8xg/XjOL8UEWGTwmJZ3W0rMNH5g+PyBtB0pT6u0UuWGl2jW58ghvMLAwKdGCkUdk3sAaFPmHH4Bnq8PSwkZ1Kq4lKeQrtw9NM8kF3NcwFVGYbjtLnjtJwRXBnonkZdryVEM1vhe5vlZ8kvJOU1YDMwKX83WH0e90IiJhWPSYzRpcSFyT814QtQVs4GvuKBc1NLrrHIqGYL06oTMWfV3i/WUsCBch1tfAkgQNFVjA3oiqKFuYiEp7AwrVRdPTBFLridneOFMMUwtGY+FWaWLf+7k5BnpxUgPLj71RRLHt1jDPz04t0NHa7CDJgsA8tCR+rGnzFhk/dK0SeW9SKFlBHu9m8nMN9H7ppYWvxPeCwJ/FJvStqr7kMF12m+SMbwyzYR+bffM39iqX7w/LRdyQhqemJlIPrI1vcdaruSh2G+XJ6EX9liU9iRRkpPnIUowAUQsXyxGZuSWp9E81Gph1DCN2bqom1JCCifiq6TCsucziCOwOSXYhG+wgL/aYU3E1AOsKh1ljYo7YHgJfwwe0Z8l+BNhYrV+AQWWLhAC36bpwLb8X1h+Q1kU2hP/FUO1aH8q0onLLVuxyDIAXZmbZaINai93SdXUtShjbdD/KjcfE+1o1uegCLlS5BWv6YrBygIhlmnN1TxWOt9Q2ep7Oo0nfspTlXaLiUMdDesJC6uJyjbQABi01x70MmPPKwJadvIRex6ZNOtaAIYB8OWuTbfBheUqJIDafSRV4X+MoAiJovg/QZQOm6/A0Ovs60B5kEymDGCL60L5erQEIsPtChUpF1vnuWjVu4RaqDfQBYpMQIoR6HD52p0eGstUDXcEN6jT4gHdxkLZIKQhupRCry3GT6z9jhJXTKV7Wowu08jQoRY2bmcviLYIF3jh8ZLtFnWgDI7TmuLSoJ0Nn1Q2qQZ6Zhx0OpqQ8QYjAybOZkLpgqZGr92GN5FauxHq+uhrKIHU6rxpaqx3EEcaaJ0ZYCjK63Dh0ffzNj70u7DGNUPbKrCxLlh7RVyE0j2nAaiavJQOxmmPYt+1zJ/yuQu1Se9VueIHN1Xc8EAT+4Sgf7IErtxsSg6zGDzoXTP1pt0XlskmMVKnzgc33Bl+XZeVnyi/Im4ZYXjnJ5R2O07qOSmLYLS0fMV6RZop6FxX/ke03s7iwOR/QlZDN88UO0jezvCjIf/CN35i6W1WL8dHKr/eh4REpMhQkYUYDBuQJx6vCeOCdAlplDwiWoSUz09IO2gkniVP1NEP3ZZlkOLss7mqGeFbRK0v0NDXKZ15H7hCcXEW/hvm6/wx0Fvh7ssYdsdRKCXU/hy+IQ3IzzIrih09D6e+1Sga9En8LxRYraEfk/blUdJhmx+HJF8r4sO2y5pGJhb4jQEt18Q0Hx0P9I2PLf5XFd9ATp7UDfvTEvefGXoVbxcQcb3cahkwCO0ESF3WrnWz3oIm/K2CaFyW7P+epB1AKiQ2eY95DO9li9AoiKi/b7oRZI0TGC5wjBzh+ebQAFfAGwQN6gQwIFEebHo/5Y3YN6Slq+637jmFOO3+zh2QI3GRqEvSSoubwN6a2i9T0TAFaV/8Yp3Fs9w55bbo9Vi0vwDJsFJOhiEA6RHyTDo5I5qDXZoImauesFEFpCx7X6ywIMAqzRahlijpDrZJAS0whDGDmYm+exCDA1Ve3xwXIgpNfcYWZZ9v2YdNFJJU7hnJ7FUgwuCbRRyyFibHp1XhuwPO2HfBy87Z44NtbJ399T75Bu5kg4H54kSBsYDYQN00QfHnhmtUNoKKf5wEaHzn1C614d0nUXV1/l67B3FLOBcwsB4/i2iD0Tnwl8jocA9ZHNbqX492mI7qexuaaETwVnaXQvYQQEx65z2P/kmGipqjv8BxxowsYwk+9r+O5QA0pcK3V4pKd20AKrk0X5jSqBqTZih6N9j+JFijnsD7h4+PnZ38roM7wMvUs0VETmk9D91TDpRxTRVT5eDFr2ihvF/Auktvm8obSoaxEzFzpaFjNWGQ+pMueHtO6x65oqdRMQsCiOOwEiBXB7M8qF3tH+xIAbEKSgzp+oc/WO7GvFiHraKc+LoRvqn89MR1AqdAq5Z4ol5elYhGhSQIDZmhP6/8m+Q4BFtdhMMosZhw1lvrjCPF0RbgbvBlliU+Z+SLjtivGrOj/Ivo3ATRiWXW7Nqe++5jmd/rWTEqWgy6uYkrryJUbOKjR5caPIQjEi2zN/jmGAsCGGfKAu0FcuOuhOpmfV7dqZqV/GppvqCf4sT0o/jrc+0bnScCu9IVexd/IAoZdnh7GdkUYGJ4ua7KgtMKHSdf7syupvQOZe5ac+Ydq6UpNqqTHxxHTCwGbQF+LuOopr1rdKI2z5H8IY+dBW9OqnCk4mn3bUixTBjzU5DpeWlBUoMRocjjz7mGMHvPHQkV2R//0K00u88AuGRkCxiqFg1/3xmSLhUFdg4wfkA2tXh4WRA/AJmodLk5G9Snhy//UteHHbqR44qzphpfHV/uS41u4Wjrw0nKtqcMBlwEiU2NXzRM0ngNyJ//2MOW7k7vK/v9hU16PE1WsZNtbxbLNK4dyQuWbKB5Am6Bj66iHwI3G1hf3BfbUv2Dh93wzRrRaROR0ImAmOgsyFDLw29rdMfjDusM0U3D51n6Kubm0wXzIhB0e4oWkg12JoIF6Zg1WZaCdAmDHCYaQJKVf6gU5478l6YPZqmxDIcjTaNmAJxPTC4ivE2il2Vy3P3X2fClrSQfXhJQJovZESHN75AgMuVSRO9wxmFAHn9sPogkLW8uVcPiXvBxrtR3wwFS6GP18zppzSaKExStsw+TLPpFW+DbKzsmpHn1RR8t99fknHtsAlfm01INEpYvEcUMdYUtmzPfHROiCVotaHwAcrsru3Pc8hKaf+Au8/XmXK4526460+HuAPDEpFUS7J58PuYnptQwRrqyRbNbxKd7WBBi38Zybfpo+S28yinVOc3ZY+K7ZrYgGvnEhQzp8ynVjSLfgeuWRvzrIToxNgAAADANAAAueK7IYPxy8axV2Ficdg/5fR9N8hM1mYM4RBd5ABnwuTdwTiN9+P7KiBfyn9S3rQgg3lmTERlaH6KRjYyk1Z5Bv39kA8vKgyUHmfW9vZTU7nGADeRvChXgq3mBDQ27bQcHMPRdTytNK7R75qgcoyzfYXcn13biM9ewbEdaWr4T8HXD1/Q3o9rV9ljdCnR6u9e2dgt4D6MY9s674UBWcvPCX+vG230Zg+M16CUZZC/5JAAxMGQX7PK8LJkY07eS1psQ55083rwcKgZAN+aRCgB73vV7XWSeSJ2IS1K0Cz20BDAWB+lmY9IADKSXUhZ09jlNpkY7V5Phxq5qehrW5NC+qsOChnWLsEDf1ByQ9jRgGYiF/oyAKKQ3affzF6KpC0wRWcYwHtOSmmFCEmnM/wkuiLI7KJQXeydDEHbe3/cRL95danjWsFbVWRzi2camG3BNIXKUEWCJw86lZr4ZHRPZF9IBnE7Wwc2MrSXMuOEBDwT3EYtVFGwYj5/BYYVjFGySUedD22YqSCAnix0tZmqcMYiaAa2hLaxmnj2+dsi7yOSLuK/SnS3z0NB1cDbxIdBLTR7EH2hAgo7V+382pytX8vTrQTdLNtTks4m+vJYW4R0DWbiWw8n3pbAgsGhJTFjg45XAWU3wP7m1UhzPZDV84MjknC+Pp5iLTp8CXl97136gxqXm6pDQjAOOgc/2qIenDFpuI/G8wSO1ZXywBXmBoKbUC3/8gJ1kxVNwVmseeP6zwvZ/pFZtCP1ykEEwIL1n7wvynxIi9w5qilI2TJAUK+2PpGAJmLFuD1j74sM+v8zn/YumAycgUj+L7ZFIQw7ppD67rKBGKkEiyVi9oT5nagyQAcPxCGpMoObjKjShoX5D69mcuG6wdZGFT4//gGDLZG2GzQsTp1z/G9MJzj/woVoEAMeq++qXShSfXPb17+GayPOe1+dcMLgSXcPj2ET2lEHRgHcMkys1oKz3MoCYZZR/mbpX8fq+/aQsBvLVA6t33AZTTVFbqHc55Nuz9CDX/RxgbhrOaOqhcVVCwPhEl22mYw2dxYAAqaKUzUVHDYnpMZea5i/RLVpHmOaGHgUCV5rwFijAYL3wWH12P/Nv1LT3dewEGKnB5cRNOmknCc/JZ1U35mw9Q3QVpoRQfSP0vntUmin+Vrr8ztnqYSKfHIc9l+HFbQFj+pEiHhSB6UtJyNOF4p7g+Lpj2SMT2lJ2U+O+8U7yXo6dDQtBzwTyqGUnA7WNw0EZNhOMWXibwUr5bYZwCoALcP5lirsjHInvedgNnIAP+ywECDkWVATKKPHRwG2ppH4kUKNLRc9ExwnHZsj2vrLgiaiX60QulUpZUvcdkxrN5x+hQlEpz67RkFWROWVJpdY5mAkzFQst8sVSWWeQ6pMf36NB8XqgFLyf2ARnXAFzCQDE+WwCoSZPIxjeQfu6WzcLRDTpWutGC28SpapeuvWgN6kNnTcGH3EGrXkCCgy0xXcQ4SsOcjgUPP2AxBf+PJhXRb8Lx8vg1BX8aYbzce0g4FKK+PWZNTkkB/tz6y+fIORjyYWYyC6DktLUfu7jbZIgcv2vnbptoBbLgINYSBGqIEZ0V7xRHJLPUbkpMGz1XY5r3qcfdptoW1mDnR2DmwvIypGbyB14awoxTwugohncqD49sxzSS1eUnf0CrYjaAIgMcP6GCgycKQ4lnuLyfJ2q+BL8b05KrpdJJVjjxMpmZ1GrlhHpZcjGFsd0ctWS1kDRKH2vahYTF5B4XazqNXIpTZOokPE5QdIuQIVNvRgV0lzFKTp5PlNMyDlRZ296ULrkLWscKxNxnrlNauKnKBf8zfyxai0blW9TcqO908m3ImAjk+PLKkv8Tbf/TuHLHQ2oiNuM35UqxmEy+3HZxzrbj5SSdv1vakFVYLbXYShl6u0TiTmy/z5senioqOwGILdq50O8Lg2nGuyY1QkE8io6dKal8ra1BRl4KIMW4sHOI2dRQhFQSz76mFtJXX9lRo67kAk9U757976UQP8EvYcVPKIrcgJ01ygQjhI8nUD0di4mOt2GCHF2S4FTqFEoZ6Rn5tdxedPGOlKjKG4WDUy+7CpPvDRJZ5YCmNcH+Z+Gtv2KrK7el+XWF3XbeuwXhlA0dbtJwD+2L4yqeH8bFgov5/590FJWVTPyUey7V0FpFwF7FkTnHyqSNe5wpSmCkJZDeAyWiW52U0gp9BYHHuLoiTXB4EYgm/jt/6QkCSR1MWkVf4r19ivT4+L9XU2FiSrZ+ee7fsqWd+R1o8lKaLramLtXomYa1GbQ/zgG8MgJckDlPwFXxSXbjCrQoa5BhYiGKHlGxEmDLLERAQolxkaz4t/DtKvWPbeTgQA+UB3W7rAE6pJgdueLl9Sa2AZAFVR0hZwuzU5h9zRX3yKdGyS6a4n/rb+SgyInOgKos5AO2EQ0ACHx4ULo9q8c/WN+LL2aNKdJ6d32v8m8P+x+TyGY1w8ss9wVKWyLPUj7VZKn8J6nfpuAX4V1+05eHK+632holcy57ZKms9e+22+F8l3LrMw2mwcqbwG7ij9EeZZrf1VPL47vOuWHU9fVK64XkWx7V0S5iu5B+KczrSX7R1r9+7+vai84cyTLakh6KOCh/qmwiPPq2Xr0q2NJrHHecopx2yVarszJUaYq11jGhNy1zNO/RmY4EeykQ2NDfW3ccpVmK23ZFeCmO9ZwGuKUlaSbcCK0q++ABTEhfE1cxSdfHc889LAwRESr3zHKMIj/ggSGOC+rouLnONhM2ARXFbliFryj1b/hFcnHEtMA3yaiApovZFpzXqXHM/4t1aj1A2Hd4s0jlCbZ4HgDA020ninFTBfyWkdvFaaraWZuPqUt5p6bcsFd5tX8aB8dmiC913qzBK5ak9hgrXztrY8cOvbizQjLw9Ypggx0nHGELMTP+yvkL+xut2EXNZTq99/mW+Vd+6dqPYbGWmkPBGlCIqMbWf2lXt6ylDUTfZnqzHFng84bhYqqdBlniX5VuijQAJUyDQbnShIhpwmTjNcUpSJWPDsbHALwv7kZQC+p76/MvoodrDrMGPo0gRk8iMQGgC81myc8s0nzgJXZdrRad9MFux3/T4HjDsX8KS5YCbFNw+sB7MUX9FZM1cc5RvnlTpMpLP4shd1z/WXEmAm3oWgXRMYyxz23J9L4VlF1twmSSBWxrX8gld+d9qqJs+HyddhzYYTXZkLKmAdyQ7WjTd3Ze6DgDsBSQHd/BMuQYgWCYciOZv9ITlOHk8d/4B3oQFuiCCRIa9z+RYxEFkSE/8u9BqI8jNcr1uuw/8aXEUNWGH0jn0tABRZiQysRVD+3WkxFMqrffcG6qxLwBhR0C0/paO6BtzJToaM1k8T2UCm94uSs1rm0jyUqHPVPD+da+H78wEK79g5UXsZiXso2uAl+rdTVNym6Kp0A0pcr1dBYzhqiWLt3RzDxIHaLOCOfRUTsSLeSu2vxKRZdiTK69phkArmtWy47j9uuMje02TRKaBk1GBf+8lAatjWzAL+SsCIIxqsiKF4YiFwWQVlJl8UEuroFRvE/1tQDeRsc9lUNVXo4MVmJCa4Eqc+t8Hz+XoeFMPAwQgsM4qokQiVF9vsiMnerlSoPVcZipk2txgIwokAmuzRCB8actIcjBHMxjiDZQKlDWM5s3R8jBO5DnF4a+LGIJnlWnfqk9B9f/+JOU/uJVgA2Fe24pscpnfqFNQ6tcvzyjbtksWKIbH1QYKxyHmapsqkmnXnmB/1y2AIKnhf4V7yv3nQN5lxE1lQLGzyVJglf2mCfKYmq60nmYvSGRQWGt0jglNKu7T1s0g23PuZJxQullqoYnZB1pXq+vIAGfswbpQSA7EEZcs1sIVqqnOEZAIfLbEoe1Arl5l4+fKGFh8mcmrCubM7N5aznLiS7OqjVkTQABe0rlh044xiCJt09Jw42FBD4PKQ1h1sMgabflvYLd1hJbfbE9Zh8ofRTc6ZuiakQkt9BwxV6qiALzfL7ox6tI9dCjsShDCawxVx2ssecBPOsVrncPnvWJKRPJehgB/Y3NZUO1ddbtKa68uXJsPBHZ6pwqrHlJcXISZydVB7dwT3FmLCMtb6qFuDj6PoB1cH9D/96huHLpECfjreY/0F8kjndML80SoujS6zAJUZPqMjRi7y80XV8cfB+70KTbdEUK+4/6NelilAUv2DBmWeS2W+uHfd/fU41YUzcC1HsMWO7wGrbDAr7q4w9XYSlcKIW02tlV5K39OlMTvdjv/YBXXSfIxzGOp0I7DSvkWS6uxKvbUbUCa6mhYL/4Xz88HX1sckzU3xs16t4ic4Wus8woaUhwHgBhiUk0IeCWi85vWECggcPpRlVpSIfe0U1i/I5LZRradLKUBd12e/54N/nJ2pT+nQVn4Ih3x7+yGsOKrVNwSv6QWfLud+dtpgPb2B+EFB5qpvaPKxnBHwd7ePdTRknkN3m5qVfaJ/B3SKKBG/+HvldVfa4os3ZVqkJHOkJhkKpDqVDV80fs3H/tzJzNwAAAHANAAALPcueJNLmtluMbVjWH0vwqZHA1SrT2ZW6nMXUtn0TpazloOmVGcqVNzCDX2Zdw4v4s43IoXxxFPHt5AYAassYAFUupCxBbIb7ewXSXgnp1o//s3mQOg3tXWmvtXjnBr5OnD6cmNl5uCIo4E0Jo3B44faJqSasyeqdhf++1JZ1gsnAV7K1tjJxCwBhg+HZCh2s3Kicwope23At/8Ju6gqURl1I7j5Ny4hgpdiCHPhbqlxWLBiVwMB3w2aF/HreBsPM8t8hKdvV1bx0C03cP3DZ2CBeerLCWwt4iUO1xtatYCGzItXu+XURW+sQV+BVfxwCnIWV5oiy3KvTOMUAJe2dOcDZd/MVjpg5igbeUi7aiIw8q+/yYUb+tgev5OektwbRQoQsQ16yNwTw4HQe2guUsFLs1+/myiWyWZpD1hX6SUwo1zKhf1O+6AlA7pVQLuKzzPbWk6yX61laqZCweTA9/ujM3J6V2ZTdksmvruz20XwfYUmS6AFFRVEBmVPw1TpV/Cd6UcqYFz/EcQNkB8BRAQUeuJoFYJyYFxbnq/mIb2Z+yLNcWoyWKXDu/6oGlByrUqNpOG/4JioKHCgimOaTzE67xb2DFqFNldpLzdB1TDpCgt63CPeO4PuYAYcyXVKO3gy18Wv/FeytrsCRJk0EWILNJq4cXcTfRSiYkZ4qFjbovLWfMUC9xAntPpLZz1WxxmzI02cLllGCmDOkFCQqt3ec9JNJTW5LNrB/Tml2D+xHrcy1jEGT1qO3h7ygIG6AgLYsw5XOevHIOoCjCEgsA53CFZ4UfmrZvOR2F3t43xdtBBJ4h72xN6IBDOJwN1gyxjJmoTvck+Y1CYwuylTLNzy3nDG9SYSI7Gt/FtZRbKN5c4k8+OBM5B3C8iC0Xm+ox9Tl7m+cpeIeWjx0IHYOb48QjdJWXunBib6CJs4xaCANfG6jOz3D11hFg/VCV0alKJktymCKXtRNfMIFhSt3baeWs+Uryr4CD2ppAcxmu0wUH4BUzqRTR+jkDrgnRnui3lcLKXZOQ/hYpOiPw7ouDvwFrmHCgLJEPsW5a4RZGhftcnkpc1TrCUuPKmWvGFZxz4g3KPcVz1UmNfEjHjFJNEP6njdjrpyiRSK0igLMYkPPkhqYLwqdSvQ/FZ2P0FOEHpLBYWaNoSoReMO7ZhXy1bj9uZzz0Vr4uiRNdCWDYdv+S5SzIOorEPXVu/85ODppz2ASRq17PYnd3RHFbiYWFLGGR/F7D768dcXVWbkgoFkhC7CGZFoWh3cxX1VjR39J1tg7axMkTh5Q9RjLWEop+bWtX1PFm4U8+a68cH5YUNcQcJfhqJYc3OIvtCsGLfGhu+RlWsHGjR4E9LAyd3fLkYAzRhPg3MO9X/EYg2rJ5Ro9raJhQRoVkqAJih+OuZKR3AQZCBom4xZTmWO6AL0SMjBrDZ6A0PaV9hMC7fQd9CoYTyLoJJwqLAeNhOZAtPKheAdV2iSiPv3QHfEO6sDznsH3rIr4A6NrgXChZ2JIhebRih/odP5J7Pv848hfXrxKxRcfojkM4a60dBbaCpe99xDa2ihgVqa7tJOGgIXSNcilJgPVcweU0mpS+26/tf1Bgoyh0KGKwdacOpafydb/yYVUftwArolfUfKyLZeymRtmTuDdO5sE92m2anT+/h0D21y30S243NM6NeBeOT+izVimta8kC0ApX8YmT+MHM7J/vr4vZbQiWRVdnE6gdqeBaxmdGbvwlJKoj7jPCLCrehxgNZhSB0qFPkJdWUZba9mioB/213zT1SUHFr8IkJ/iFPKW19B71luNGkFqtfx6XTAYeRV/8enJr9HC4FUoc+Pqns7emNG5X1X+QMeag4ACnGUaiQS/kYdQPZBbU2L43V7z0sxZ6rydynotFSlF7OYADEWSo0aJ5/renBE3QL6Rx9Z3eMffIM+lBtmpAsTxexxFJodbMWyUAYXOPyYQjo4RDqb9a3Bp1vSx8jTYBM7SAc6DmRW/0AIF1YmRzmv8IJMqhlw+GONdvLHKh0l0UVSHNvuicjEnh7KRM9t1ovh0JbsrbIfZTH5YP/8qDguLq4OH9MZOlDa/wDf12ZiNo9A9PU0gPISGJ92CWNnSD1O0jFgxS6XmwsEq+zYm+nTHs3IN0aFwvTKcHPrvfLgb43URqgcro7P7Ah97lJd16FfPHiJVa2dA6EYoeiBtI+VY/mzftQSLQaSxXWWR99hIqCvQj2uzCKbfhIwCcDVC2SfbeoSpbS8ccc239nIYxBveGqEXUg+NIN7tAbIjg18UaoshOqt4vhm/ofdk92r7aLH4PZPZHr85D7ms0kJ9gozTvmlEwBlXqt72R4r1HXDil2/W8N+XjWiJWw4RqvyA8XAMgp3tPZt7L4sFEXsTzvkUAyKK5xPDKjfgn36JyQKOo5JMOBu4QIKb6d8r8ai03boBBiLLAeTPW5Bv2zPEQvi2kq/KS1NL63UICX5BcYr5xmZlGxtT7vvKnR26NYkVSNkbcx6OrMF0ovoov40XSOwdZfoNzDOPtN7FocjTZjmONxZp8WcMGMVg1CIErqQtRBIQWmY5xsIqsnIlC0su4eJ2myotfe67e+BiVMK68UsJxz180lpxEBiGBR2Zz17MW56cTBPvBYC76Bn/E3dUZcw5lAcOA+517sHTQ/JIYPzpg8sxohXtyD6Jn9iUyerNILdBh/COTDm5uKRzSZmyN0EZAhff4BMCYGOxc80WxgruiBf/v/bI+hVdqJKciErWk/3xx2XKUDIfj/rV1IrzuSdlu1TQLicX9Iqj4ixmpgm6iGXngkhav2kfrFQlwVXyhkX/Whf9Gb1uXd16rpyQNoqipfP05pbqsxs2l36DoTUgDtqG6rSEJKU9LtFYB72j+E56Ti26G3uFvzD6ok/0jeF36PoueE3apMp9GqUE55lu+PV4Z4XVsobY1Ldyrl8CWYPXHWcLd7x94d6wb/g3r/WE+LwUE0HV4sdls6NCKBz5rQwSoowO6R/mYjnhawG8iO/DiM9gA/bQzCS+ii6tCwzdFc2JmUx6pNwhFOAHQ1XBsjq4TUxhfFtK/LesG+iIinnsrLJQogkkjyxEmGpyi8Yf3DA7Sqa57LqitIgla74nf5TxnV6lPG4a+8ui/LSMx8FpCG41frTiGCCxy+Lf7KpBQlUoqAgUwf2vBT4uZhuZKfbIYQUQ1LHj7tvQNb4UhIJRkxV7NpnI4BT0t7hEbybRm0IBfYJAmgoa5C5Ly3vLre4fzL/Gr905+EDGxd1K5hQQQ3WWpJ53UlTjh1xrYUFnMHUVrhaXPGUqFhLbVF+UwB+8ap19Pd12HCBzTa/BA4kv0q/Dg9YasL7+Y/MfYQsvdgFBGK94WKfkaUUeJtV5/SJe5h1Nk2QqAhwpuUbbypsKbL0KHlKvY8tcfmlzwLQAfFMvlurXw6Bf0SCPEncWRBy5/X/vIrBeCES6x5gM1UHp4asgh9nYlEmPbZXVO94fSXA1vTeNcmOXhvmRbVaunYtsv+VoQKbc0tdrBf5arlIplEeLtaftj6pxi9FMg8DJiF+W2jLEoD8cq69ttOtkLen+zULG8qxiOTJSEh52vblgN9RMShRxqiuBIJk/u3qGdfV+L/mx2Z9baTYTzJcKSP7Oe600KoJWaXJOii+fwW8TcHbd243i5dXVCMg5jGMPTnVf4GtyF3C+2YgFaQmoaPIi768jTVWuhckJo7udnd1xvg4erHZd4UgE6Acd/HCrDgVOa5Iwy14fIr41174u1OO334R4cWVHm4z5wpYzdEdOt33Q614pKcfPR3UIqnbq5v4tJPKL80mMoSYCVKOZGA9pYzIfOcF+z6rX6hB2s9+meDGwGlJHZyhW21zWwPCsldqlFU9M9IdYDbe5ajOC+HlPv9cZxqeXlm/2NZeQf/zLs3n5c3ES/BU+Go1t1eshAgSHEIg7Mz178Jnk5q+eHfeeq8bs3w4H1P6uP5atjvyjXBed1CsdFNj9ap8M8RTM6wZHWyhAovhktNMAFJJ0/zmW9rOF04pRDW7IggUoGMtyF/NlKiQPv/UInK1QygjQSHvfB+x+3yE36iTYr5hg/waOGVRuvJASQb0ab7fYVSTCOJGv2wpcavXVm1G+bPz+5t8pg6ZToT5dbRxL8LIMgbpfgJ8LTUq2WixPKke0HKEWGSq77HywfSf0pvr6VfrHigbFH18KK5ggnp9gN+5G1O3AA3FrJQ+VraZ4NzKIzcB5zH8FNKAxAzF3Ulp5uA2rkMa6M/CQDWeshTKxoFgyC8qNXE2pTyjLJGkd6uOrTrqPWfOY6+iLAqUMMDOBUJG76m+eI1+nvNrvye7OQs/cK7Ydlqhw9Ys818aYqzL6zhnWw93ERafwhBKsnqsyGZddGFEWZEY3mjR+/mYyzddX9YEJipkWpLulvWRQVPdHGE1BW01E1EXDueFe1W76e4i1s35mwdeamTBEP2ZEQ7d+RAc2UKtckvlT2vEk1EtFHCXRpiBmoHcdM2jtVyUQLQ3tv+xPXUkQzJ71+p4zoeVzp+Eda7/7uDJRV3TrVpJuxtoqZDDDWUeEjOP9UDotEUWa1o8Jp9hMQkbAexTBWG/N8jgAAABwDQAAWcwgF5kOVM2ky95qh10oRJMoi7Hgu7rd3sbc9Go0JR3EI0jbU4OXzmhppB1Qv8fOcI1seFgt/Fdfx880dHDWM4NAHmauiMa2xBiM7Ll36H+xaQoObiLGHUNl7HID6cl0+NRfOp66J+Gc5ZqhWqsHwp4FgWXLL6NGcfgyBBcW45qEsaD/c/dIBinLSI429PbUvPjAOrNNWDx7Z+ckSl6kiO1LShHJYsLeykXZDVDI7CX5q1GfedyQyq1T/BOaNshWjx2mJ1zZu8qv4VdVay+3I/lgzFp9CLE+2uvhSr5w7GT07p8VsQRDxTyNL4eYIhaNY0o20/s5EPIEO1HrnPvMpYrhCF6RtJo/upL4yTmjCKSjo6zJ9Hd7OLVHNW6DP3gRrrbZsJGaXj7O5OdkuTuqVRGSwlnfbGBP/DtWJ4mxudsU5gpX18Zab5mnySwDREh+a5kBNuq0hzEak3UfAYAr/lLSf/zS7LXi06BuK6jDnpRH4vVTHdvTjJnt4qz0hKZwP+htmIYLGUinWGf8Khnl8sB6bGVk9dIifLdCn6awRd294AqU5bgGSSbo+HAslPvONzsOkhWVsZj1QCozJah3u1Q3dU/hs5+J0YcMrSMSGm9AWEleL4/AfUjOBca5SaOmlYtcDF8BhS4toFmzI7CnJ/BwNUbqyburHokqAIxJjr1Cpb5EOQkHdZKyVeQD+nflE4mKKQDkiHE0riWp4cgRXv9PynZJ4y7ViSVn4/ue0G5Y1M1D/ZXWXo7cYvYZY0UgEJVcs+GiIXX+6ckOTfXyUrWEuEaC4mrPH90VwEEPLccRNrEYIz3gVagAZ7GboC1Vx8DKU3zZGLwj8osHRHZmH/OAQyOodkfyToM6APyepjDszQHmfgMGHXIGG6IJZq0mBbDCbraPrPwVNEGctKOJZO/x/aJD8iSf5R6iuoN3U+gtVvwT4ifajF/s0oehf0fzrf29rurDvgO9JDAiNkb1UJGYG8KjADAPNk9cNtFCoqgC/d7f6h0ddoP7surRDBb0m/9/HfvH+Wg/TKOuQ+B+XAgw0tcMiYJXCUTrp3fBlhF6ZMRfLbPv6VWFF59CQxE3mP4uPihrrxqhel7M0amASFj3ePBiX40H+L+kNrx/kQ6OZXuW+SwZPt29fb5jn9ezZcpWM9+gwpU9lLOjawCztcCgJ8Xp+msRbbqlVbJnjDHSzqHN7TtgWyWW6crPAzCQ+6YXFR/cKcI9xXSR3+AsVh79iZewZi2rSuvgYodnBZbN3CUmwY+zH7SWKvnpoTAmggHygo1cyzb6XPO4nIfxwqBKrkLId7rPO11zi3I2Ow3TMtzlLTKTTl88o0f4h22LLVpE6/WhsswxcET96kROJodbaOyI69fEqomCEJlT3HqEhdSBw62ZbSj3maMDmCygaNMuFwvbEjuh/bzQbMuvR6j40Pdg4V9Vesrkw5oHBcVpaIrHa3HLlxsy511qoY1uHVVx7tFKa/dCH9muTUbmcc5qVlZ5kQFgHzO4Sej3DBjRyckLZmBeKOdmUwpmnikIvtM2xrgKvy/TmfaWIDCClfxHUvg+RZGQTNnxH7pYiuDYPT7piHTFzg0ujPtVziDgMR3xHaEeKYyjYzqunNqqtnhTus7n6blMixHWE5ynwxQN3r8nW6wZFOe+SkLad2mYSrD+dcJ4uQJ7BfwOHEGV1OQFp0W7skN7x0yTbKw+dOW2xwErwe8ljOQfEErPh3Fr+3yMnSRAZB9/s26IuI99AosZKdVhAUT/jwlJIKnAHMYU6n4WAe6nhk080h7nxI3rcm1LRKb1tr+d5ldLz23PgUqH4qCIbXhaT+kxrY50BOItQVUCYHk67Qo8Ie89cJXBl8sKeQtnlPvygJthIUz8uqr5WR4uWLVgFxg8h2ks8Q5O663Ne/0GjIqoCXEsB7AxlAqtClCfYayhQloyzD5UE84IovXeveFzx8/Fwkqu6H18OpmuoU5hv6Jsd34ilxJjcHTIPevmmEnfg7DI+3zxbqPPSSPTMpP7ShJ/2ppxi2JdloKQbDjle0+tAwEBtL4hZ6YWrVbSZjH7rHtxvkhBavmCekf70j2QYVcLLIPlTbqpe6F2BaWRbCSuJjPOB5iuIxp0bj2G/PJ3FtHiS8HHLQXDv/ioanPlKsHgYV2GT8CI51pszb0USZaVUVE9WruaCvjQ1dtE6i66X90p1UDz5yBsCH6G07WLAIitU/yqzhObz7uedFko+FKcabFjcS70nfYwZZG8caB8rR4gdGhGMNqxx86ke8gU0MAFqfpvwqCmc9zfwvB8hv4YSw1qPlP/1jBp7CGj1RAPruwg6NDvhuqafslWXsYMYFW/PDf39A0M4uX9goVVmehz4W2O7GTV8YFiGQrVAuUbYUjbijtbWycm6geWqBJ0MGaNJqGltJ/URvPOal6+JlKgpKgfVQhdiohApxRt7Oq/Zm50mjuOjg8e2KW/72FNYvilcKBAfABB4XqxJG+1rnEQsJsF3w+NdkJUmVgW5RTjSPnfZ80GO7/kg/3Mlxzvx32zwpw5pQwEUZyFGOCQ7Q+tw4as7EZv1bpK2vnoNuXx7u6KN0N3GEYYix1+zF9Uzs9kqWLMV92otPwi2zk3QzFaDyG5F8gAJA+McOmX314Gf5Hgak641sVB+g3mEQFeCGOrr7r+80TexBVPwf1Wo0VCjGYsv7320pkLsc2dxfGvCAcqon7Wvel9HWczouM/8g5NWdXsG0V2TmpCVhfYfWLXNPmtYS3an620+k43OL++Z5l82eIZxhFAQt2mrTv3tzjwqokKnatN2Fx5v5XfaESY2xPVWl4/EI5jdmZPOrJrYPjzREVGTtMd+7uiq1a16kCRHtKqPSjYfAMiXphAk8pgP/g3JKdnCvsDt1oAUmGi71Ecg5f60BoNH1U3kdgEOGdZRPf8aDE7rWdaQJx/KMQCSOG8SedwvWONLKCBfspYRbucUju9XiKHpFvJE3uFZRw8OQMNqw7/XP8kkvfth2JFZYhrbQNZ5nMv2qHuSGiD5ZCtc6lhOwiqC5ta90oS+18ZkUHWdFkt2UW/HGiZFD+e5ouV44NYSNd8gOdrvCeGAVznYe12VbpD4TBM36FssniY3wwhGb1MKcy0Enak8b3cmZW0ErPFowHL1YgGNtC410L18u/H2Rfw+9zWxf0ahw8FtSCe28ow1v+BPtFvyMTTt/aaiD1QFwctAXddqyFyysYSBvhnU2b+3bR9SUysT0e71RJ6mmVbybIrFfgvg/GD6nxfMZ3AKZsAv/OZimcP1fMvkPwGrQNHJTzhsXuqzKt04mRSmIZVWF6SvcExqSWGJ2fzwRa5wQ1hgvpRQ2CyEOWX+34XPFrYgJtiEHNNvfrq4kIHaQL5nWhRuzdIqxKzulN4IYIA+0o51NXEMIolkRxp23UyRtqw5Kc3TV6V+frTDpplIqY6/MyCqmAU5AGMmgsQbQxSECjYXpEIEDQo/HGcMIs6Qt4eCjnHifFu7UKXKel0t9QjYvIijJFmU5S/w9EN93G2ezSOI7A5AR/QK7lfdph7+XD+JL06JDnBE2ywh4DVqt97VBneQtKMnE+OKN+hTOqY90DMX/Y/yYnkk3luoGV1SdH+fKi9vt3pt97f6aZPG2wj0pZ541HXYQQbyHUE/xuqqXHn/ysusEfKJNGOhHlT3jLyHjEAuS1n3fDyjp2uOViSoYKw2LLYqlnzcBSXErykMzT3gKHYkkGY19vAS+qBKGxCqVI4mYqm/zSMO2jI/vKSmW1jwvXKlo+hvLD/04zW7jJwQgscdBrnaH5jGMR2gmI+q/8lO5p0T+pexxy+hrSDixXDTtfvBw0A/dANQvbu0LgkH58+SQKZPDncyA8soQEavcB4F1JMpSljsW9iCO/pHB1gb6QoEiKMq9M62kfZE7AVV0TuZ3ZNpmtSh+dcRKcMxXtPbpieypJsttgSrGYMJBNCKFQv8BaDGZg3edsPy8wDUYcOoAunoC00bRGaCURyltHtMfrAIcL8vgbDB+FtPbJeT86m1LVq6anRGwLtsKxXHup70fgAFUjhFIlCmvMI8KDuBGJkONQqibue/zeD83KbnPWQU9kUZOPIvowBigJCjYAJU9ln4pXcnf7xBkePGChs8orbm9MiHu7sRjqtYvyHTY1t/oXU8aLGb8aqBXNKnhsCCNoZ8JjvVp7L27BhHMAuLItl8V7Y5S3QU203c+MCq4uoB3L0Fbi57EA5vU7kLlc5JLY9WzHwkjCn0gyvNDeyquABhw4+0pJi78DhsezkaJSZ8FDZUbIL51fD2SRzpkd8I/IXRqHCyEL02RpMNZS7EVsXtuiKcNUjzo2l+CQNI1WK0u3fcF0Tdq6ujY1mpBVnMSxiW36pqIRc7/wAyXP1WrQhLV3tbkWZnv2nB1JRcVvpofoK4FUr0biSfHbCBEAnJ0fZy3IZlGze1f3tdjNQ4EG3CGKKoZyVxVu7FZrbzaGYficIiJC55JCjpgp7dvEI2wYiTluoI1PbrLNq62aOwo8H0C9K6L8lpM9hg8jO/pAEcxMIaVuAke0r+fhnHxgql65WcxM7J01JW0htTns0YDfAos2gpdUOxmIAAAAA');
