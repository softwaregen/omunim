<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAAAQCAAAfVGC9YqY33rjAtEywBkp3765Q+gkUXh2uLYjcf690XJ0sZul45qgyFWPcmqcXDAWYM9T4nwhT8Q1TTy+79ZqOoOKKoh6cT05gSXkqzNSrF9g4yHblJKTYe7ugmBNTiqiYW7usZQXzCt1Y8lb6m/vKu68vEUkjQCWmnaRC/bVFzqkwkLg5Q0jpy/us6Nf7R+8AxhaGFmowJ6K6Ga8htIPGErcTZQwDMrHLJBeSOKvyKDEqjJpRbP4Jm8KWzwTQaXXaS1pTRIUQ82FpJ8TBBUJKtbHh7miRmi8Fks09RKnZS3duiFe25R1X+zgRMdfZxHYIrrZBtPs8WAwJGKcPLPMxKFhA+XRBeB8C1O2RQ5Zu/age4QcrkRiCsFXT+q/mJSWNJHi2trLHhqBfgjtxAz2zFvHSwtYbYd1ZRIOjjQiubmxKcapCR8f4KN/zPfygzXdG2+TnWrJyPc9Usu0kbZgcFohnu4fLKmn1ckdFb/nXY/zEsU8/+zqQSuoyaRiarKP1CY9HY4KQ2vE2l8sfACtNiKUW351JFUMUhSNnOG3FLDN9hEn5rxNNSbdH/cxWHXpjMcRrQsOzJh3e9L/lEOYz+dsMa3TAOiaUtbSm1jmrQm5CSZibfwq7l8nP5DSu4G6qv3jirruyJIPG5ikmd3yjUleMRyZDGC2BSXjjU9UbqI1W5uNLzLlLnWPalrCiElSvHEMPNQaHU6Z9VhCSLjK4Nr26sDgkwbX5pElWJmGB9cKqik5fgQXGmvkuAJpYT/3kDHU8Mlq7At646/4eaJhDwzERKcO1BO95NKJV78oVinyCfjfkr6TEIgRfvY/7OVxPrBumOQnGtN7idCZB/eso79R0R/URZu0OOAib92Q02uMUFhzJcv0m/F4gNIalFy3QYvxiSi/xYAF+4XKIjFkQb2If8tQaR/qZCWgjDUOftNcguJQV+XSbjzqNbrYCp13XwyDp11euQjsTkbhHx4CVlsbbrk2MLAwhrOJ3r/IHn6zkhNapeJVlenRcITikVfdq8ifNHyuV9qmIUkueE+8pkG+2MIXMdItIOhkWPWpfI9aatz2FWzEIOm1D+HalpzhCX1qT5vxG8B1//K7AGOePZDa8h0IERH+d346MpJgPz03oVbqv1JNYRssoTyC19InvQGtOd4awSFl8B4wc/nxOnTvBrzw/mFUsCKkxOAmuHGvEnjoqZevSVz28qCxrkr5Mg8xwzyHyTZjXfSTn8O1d2sQKXOvSZrN1x6LD/0klNrHBwdi9ykawQhCwx21w8oG2RLJBBqGP81gxNRimWy7Nv5lOzXUza7epk9/1oyqK38R5jZ4TGZv9k5PJ+Qc7vgd6PX+4XJkDy1zZvjzBJqSuQkBbznH2PFbSCgtc6edSCnHngIiJ04jSiumUi+iLXIj8z1HZxe48ACOjbhX/3azyHjL7yn12gENNY+tXg6fNEZW1L3J7IomFTYoBY4lUdBppA/nz6mD+BR2OZf2xeCgsBR0anxdAkbTepOtEuedbYcoVZW5NqDs6xA/YiCgaas9OGjDLEMRMe4tGSQ21WKQtqGt2R77Js4ysXSPYgCX19Dx50yWn8rGOc3KWUKxd8TfiVUCmT7UaiUzqJwvwyz6EmfRr6960YdghM3WeKtKaUIrbr/oDYBqSXOwrdjuQ5rvWlKFUy1iXwK3Of9Qvi72KKEZbVtd8kivKtvcnrSeHDkpfYtdw+qVdjpUU0BaPvG1BjhmG2yoJao1xsMzG5gFDJ9oU8xsZlSfKRed8y8B0TceA9PigY8cRZWsw75XYEc89LAG5/vuC2wtNTdZQO4DV+/B5bGmXNsRtJZOCiCgwdlkv4/6NF9+KtBN559GXd7cE3VAQozq0yBe7mA1cALuLMp9CjEWh8xDdjta//foResTued48rBFu1+x+aSqY5/A4p1CQJEdrYLTPDtiJD+VridlmjfbbtUAamWaMHY0KlRS1AapLGaNUsfZ+cWxeOEsoFj5ZWJmKfUlOt3A2tKBi3nI3iyWlkTPxTeHSu5jtW0J18WFljFc8fWHpB59bpfhxicH7TDpytlOF0Mk0WmAFX0FRT5LtxkqJbZdYCcsUj6H7P5ShVa7ggcznRWOTgTe9xBAEA6Xd7XwU2l4mpk0TMGPFivqd6TohZV9mrcfwgvdgnB/SahkM6kImmpaBmcyxTgfID5hisb1N5OEkw5tTb4ZIVCh/z0XbPDCvWANAaXITWsYEQFUtX7b4CNGUyXAw09HK4mGIoVUrN6DHw/7kHARXiAWNr015XOhdnd+hFqsEhNZwOd0Q0UCdbVmFPcnYy+OZ8pCnATNUBq6tsJFKZT6rvtnMZaz/XvbH4B55yyDFUzltUeYaipCxorJpJIutmg55csqtLbvmbPGOQ7anZxd5q3Y7wjpnewP+pPzLauXhZiEMnK6hQmBhnKyFwSm2LY3OG8EiMqXJzwIZQyxfMyjHDnFcW4rjvYaEKKoLuZN1aUfd+hx42AmJM0ZexDCkNmZUvo6+3O7NeAGX1anchBeehksGP7VyScZn00ZATj7HNrbxdFZOiu1vIcXT3yV+urRShWU7YrymYgik4L4L6IgohwCqxR7KjpUSSra9WV8C9l6nztOP4LaRZ9HdP9dyx9exu4bxm/6EDZo9A1tRAecpKnOX5wQxegYsRCWD8ZVCMPDq6TlbLg2EsgvXBvfJHRngA4+kFbMn63hew2czeoEnyYll0QKMq8vAPthF8MqwFJmcp/9u//s9yRTLGf7NQAAAFgHAABq/e9I5Ema2O24wFShqej1O4gnTmi8Lcow3zCWQwKvO26MSI1u9MhZJ5Azg8EXbgc6te7SGgy5ngAnktbmYRipXVGkt2gsY7wFR8xdYoMTBCWHcNgVBwiwKkT4KS4ks5j1inDf6/+AVEC+wwqFKlYZG7oZ7qFm6b/P4jJFSP5tSSAnN/dpzCEVEBd17eaUOrte7GnWQ2Q6I2I1Wqm6EXP7mYPhRyZ+bvFt3E/lDTVo3p2pmaQ6ZuqYdD18GtGb4ZS3Uhjea3f7Kxy32X27PjdnvHsYVareB3X+T1SzISd1B1+BCB9Cs6TaqP9BkJFx89V0uDP4fYZyG3jjtLQ4RP3DCFXC7ckYLoVQIVJxfTW9U8hKOYi+1aXAZyUXejjvKjsRV1s6Nt8X1xje/TDXchw6S8QAjOZS2LxjXCDzqM8RXpWBLOhthJcBr86us1/d5dBhh7aNYIOoSY2l+wna6DW9EZOntcMtmg1xNvf5MYj7KPFc0vzTDMnEK9fsLK5VTWAKujnjQCuVJWudVd2tcu71o1qmBjp9giEtyMZqvCBbuQHLl5zBlS/OXn3SjeS2LxhswcVkC/mG44q6hAamkdMYs8PPnbW9l/coJmNYaPR16VG0+DvnnBSwjwwTfMkyR/f5S+i32NFV0+l0pHR08kScoL80iAy9ZgXMVqCAr+Ccf1aGoRkwykW00CS+Ch3UZBFXmvNcXxHBQsrMk3FWgCDKG8KoQKrvjPgL11Cte4Fak8XLmKlkqwY8jJVRF6M2PBuD8oaAJaKQLcV9MjxNA6QOGagEom2zL/TNsPyZaxxlq7lafO/v8z1EIFBU5iB7NcxUzCEZ+eg2XZN0iXlMOZSBRp5IwQFckp1W1y5EuGwIWkMeZ4ThaKpEJzYa2QCYKtZROi3ybLCU6ZRSwKySj5acirgZuQnFYqHE83NABHsOkKcSBls8O37Ac2puIgZVeBmpjvzGP4cKcAEktnV5+Cqyd0j0n7v04wV7J5vzRMw3kCVWp6jF08uVHiWs08pY12U4CDd/lKgGLbL+dozXZ1SYPX9h0kUzxsMR9tntYv8ho/jPWxrF6AOV4nEzPF6jfAFz+OOsn6SRbLMPUeMP5sbbebP+9IlNzW9of9+O0lz7SnTG1/w93BNY42+YAwOOIpZEJyxxT7PDl9EOTpe3WQSW1Rt4+N/GSJXv03iiUjWVHbBlnm6JbuK+IS7+Rf+2h0F/ezIzrMlxN0BDALTiw5Yf5cBWUzE02arbklclwFHeJD+xqdAHzJUVRfhbp7JJh+mWFjHo/nI7SU1/R0iwIyOMx5j1XH7jBxVlWoMuzVCTX+Wq2MjlFcwRmAjIwLIDh0csEHEGdrr9dELEBfsUXJzwOJoP1umoAQDEppras8CuNXSafQPdznkmYk+dqq6wHlV+GNGU+I9Dh8vhDnFdR3Si/4C4kYTNdSkGJzweygz2gtJGGAzhLsrs3WjaSLTtxPzsb/yk8yEINZg3HlW698bEjT165ZVY7FI4JjY7NyYiz5bmZ81irrGrBOZjQX3gJh0CqncTRcl53hK+vg51wX2ZEYd2HqoXQsVL6+/p7IMNtgjCgF0T1/o9yddgbmlVkpsXD6FQpw8UBzg4GQJE7gIL2VA20E3x0CSfpBIs68DpS18S37Dh3rheJJQAmjYg7eyCQ9cHknIPQc/7vmPTzS89ZCMYuZgG5flVOZZLcggxvq+pAaSEyuobrm1+r7D1TkgnrsFh/xzIgBqNfT8SBH+a+QMdpdIUtIfynUYADr+Q6QuNn8RJwHQAglZecq7TyeJlDnmNj2c6wSA8pbSLhDU1aunWnUq5rVoATNmmbZ/m0g7Nq1LE2rIKb1QDL4yG1vpH8rhY9im1ZYQTwZUdKPYxCgfFYtVI1soYFlZyC/p3yKVD+mmlZI1x4OTUf8YztMpNHI4vDessd4vWtvviOUDfFMvQCNdaqrAsW6eUsRs4NilSNmTR7Ftkom/jPV30edwP0f1l5JFbvAMFnp/8RMswa9YS8nUsVJEKo2wsOIJqQaNZoslbWNSEWdVQN304qpHD5eUxaT3NmWIUdSI+jgbP4iCzz9449pZvrnrE6zdAleDdBiqrCgoeZWZrNCQIEzaph6bXvEmfydX+kefql+mXd+2qwkO3G/YMZuCIo1DrpW4AH5+WDvTcKBIeV8IpmeFcVltBNAyQBGcu3EihpuuMcI192Le/N/rckUhcsIi9bNOo2b3l68mHOA/jpLqO3ybNdhpSRxUzlocKZm1K3Kr5vpswVktsHLv2eWvDpUJeau+GCJfD6sKwFVfO2UM0CiYtyzSsdDBUXP3cCUVeAoGV4s44uC9lrPHaCfW+v61GuVcHsz8JqOnFXAEay7p6s7CtJSdviTKD9kI7pKAMARTOYExAc1ad9DCKdhEXk/8mQ7Mj6BWZIYqrYMnEOCa93iVAcOv6HAEyXLwW0HciuLpW6E/iX8Fqctxw+ChkxF9YSeBGtN571x0+ha4MZhLS15YcD66C62UNWTYAAAB4BwAA9unAr+xSNVSESqEyszjcz+C8hP4xRRjXOALP4JrhcYtwLTMTC/74NV0gxY1lwr8zSLa1IDbmUQpPBAfNkHtTzJNlLJnSynEAt1vS2qA9fcEYw9kAZmlvCTSStrSmLp9bWjenMlcHY2oTdrE5rLz8hQxmxP+74YnaJAEq2NsTUE6ZRCh31rYJLsRXpply5V7wItOgd+vOTUmQ7nZfLa99A5w9KfrAGr6MgJ1UOKtAeKoeZYwf8LChfJiwyfMFQRoGvKCYkCw1VTFCOwD6P15ejwGXyK3TyNAFVSa4rl0FG4uJDuAKvaayS5cOnpgYqIrrfdI+nc/DYEJL9gHL6mjRybUu10c/IvhJcyRiLDZkYzxapvs4hfrLv66OKrxz2wAx1y8YFimCf8BzQ6Al/Elx9ZW1ldxACkzLrrSfY6Owe6iewQUE5h4Tsj7LLIOUUdNtc4r0whdxu+MoNfjmph5AmaneifzWCwH4U7y67d9+sK2+mbookvcpQw9AVZygJYbBX1TWFCcnj2khmnQVaTkMp2Ip3cSxeN4CSO+ZxggpOHswyTyoK/xyC8mJ40THGIq73BPo9lX90k57Fm3he7OAzoOuIsHXExUQsp+iZpNZ2RD/WpwriRb2wbuE/pSleJ7A+6DIAqdNC9abW8QpgVE16hrj5Dig01XULt8sPt0ankZG8Sv3x6g4PujEQd8Qbh1ZhKzk0vthl6d0AWJZHPrOMT3ccD0qXslDhuBJCJX4fzgJUeiU1p45n2F6e4n2mfav+Gf3VMyr84cv4ihHVkM9x/FMcy39e1ymqh0YGlaN/mUKf/8KBRs4oGhsZxm5ao1bWEUOq+c62ez8RpAsN2lCI2IGhEN/6xLr/p64fp6o2/i1PL1Pt2FcC5dKJ7cfPcLwJ+f0hzJSBjk1K62Mk4TMoSjTE7TF9RoCAZKlcbhDVqvjQm+WhaGis3f/Qyiyd5wVQiaPBsB8ltSMPbNINqXMCMdUA5sNg2fYlzA49fDX7qKR+M8vZtrfl/NK/UfHEIEq8hBtFvL+DjIt/U9PsrQKsReu6XMsr/u7vj6IQ8KE6g41+m6iJMOBC2zv2dxmaV9ytw1N8TgR6Sq+9cvo3LC0pQF++WP2fqOY+Mvju5BboI0HfYZK9fxy7ptkhOFsmfMSjRCl8GWqdV9xEKmA3FDsibmLxjScYGDWphcKPBanR3mo+++ebL5fK34xGM+fW5j7kbMD6DnfHvtR9xJ5KgXBDZAUZErbq5VQSiw4+jRGgF8aBWgOxYPay6SaWjdS3ubFOwGMg7gU+30JnqP8UfEUrD45lheqSAebBltSSt8iHhUeWUvbjm/lrDgfrbuCPUuEQJxhp83KxI1x9wkBAM8Ai0fEolVyeoLsglVY+VdGkfhU/oeQYmhnO53cBHz4w7BDMVvEKFoiPPsBusMly2YlpkgC0VzkBRItWYrd/5kNhvgKvJ7O/bvOS0W3wRBsqiaGwAQcM/lBPZv5IPq8n0dG5y+50NzuO7j4qY+bbD8uYZ+VNzUcw1rU8xyH9uGaPtKlwjzrOLzoEOwIkhBJLxYEnTomg6TfUAZGP9D0JxUqG8y/2/jI/iy8fq/fX8b6bzaxbkrFL/oPS14V5YVxh/nMR55pAy6m/e8bKb5bgV+J1Gb0Y++nhP+5OE9U/WmTXptAG8lDupuBGoTedPIs+3vgyvlpenq5P1UIbKWOKDwxah7fFK6Y6pCg5hIsjAmpM7KOdgIWiZP90JEgP0M3/VdY9IAcK6jdIyOdrCbRuVhHYUt2+iUcI2+djzMU69+zIBrExNW+m/fX/7bZMavSG3ZH3EZSgg2sv3BPbvAuSCV1/7LC++bOVCdMYHMacr1G/zZWRwz0BySve8aXp/5Raz5FHUBukuphDCp6W4qathWI7fqWiOkWsjKyYl8TWso+mhrZ+X89ww7NPAtGCUqRb7GIPAXRDbiFluVQ4U6ZCjoy+neUJ559n6ImlG1m3/uGgeApkWCEb++jzpTigxROAdE1mzhnuf6ND+GyFQKwgmPJ63g+Y3BzI2RQmqd/c53AupQ49OjHvfWa2oUGbkx8UVx05lsDQEWASK1WooAAXCJwrkJ5mKbDT4ofDGB7HRgcWHBVau4bTtu6rdpHAohhTRwbX+lFexSA3Cmph+HBC7BPPl0DWYsoyRtN5Ic87JokECebyU6xWsg4umxNVEPdvB7GUqQqikHg7E4uJR+tyWuT//EYPG6La9lvUTTa+rZO/TLGVEp7y3rbknb2f7zDj9h1QAWS8IX4gpN5CW1dPs/s+7I+wy2YSXVmhV+rHHIE4vMmNw8U0xYxyoEwjQ86fIVfoWqpyM9oYclYcNH6GV4ZO/6/5/focUrVAGsU9iertik8L0YWT2wJx9PZ+w80PBWDDFbSpM0L5HKo8qBI4cz0hZwhTArA6Vo3Pr4uBZGbQ/XMz6vXLX87GE/o3BlrcF/2A2XCVHyAu2pZrJHmafKfUDwXxZJB9M/xjWAtWTZ/2PWtXZ0DD/FmUUVsv6Cwog1vod8kRzvYyP5ybJQ8fJTo2f+DbUk+ppMU+DcAAABYBwAAOLtA0bw7Y77hI/acGd30nipHFx7lE2uqYtp/M5Os3ZRCuDpbPCvlQ7HT+s/lpa4aBlwTvV/+ioKeeashqtuZ9K1Bbb7W33S8QZrGIEAG0eDJo0BZyyEqFTn9KdsJcsYcPmCDd9NbHPUForszvMSsSqQc0KheW7XJ6myBMDHBiajvlYKWZDaEMgId+3O8PF25GqGpihdLKVe4/CVtUFRsoSpiI1p0lLlxp7aRidFMec9Tw5zHUogO6lYq6IJ2kk+6Kr3txr6h5nyd7mv3v96fXYOkMJZH8kkDhkJ/I2QNfvJaDZH2cl2t/4HrUNa6R+nqsRi71yEb1aWbkMkjEYlDtwZqst7u6XjtZhEejL3ZEgoy0m+Df4YpDRXljg1CNucffiXLxX6ibITmHResoa1+2CiR052y8iIBpiPzZkoW15O5qqLSz8Pxsxe6AQGN29kbhwYgH3yGgJbz+afi2ru1BqS6ZCGgtD39AA7yDPIsSUvfHPK/KLGVc08vJ0Uq40A2aDMTNWMF4U69y8zZrwtUpIsj8DhONTo7EXXRD7nFcEdDz0mvVtyl+LW+AbZtIYXwdq24HzFUGF0U91j90VgnVDT51p60Hpxn7ndfarlEIg2qWtBnb2TBLQuck9DkVodDh9V0OocP2YUSq58hCCgEhQheYqhFxgyNZQ8lng4jhHTowprx757KJ/vkAW+aoNPv4GQnz1hsJvhQBg53pv5NzLZk4J6jHsRDxEFYjzRuSd0Eu/yLRewkg7f4+iXeluEDGjmpp4ndkLVEM0fT6Jg0sB6Fq3rDw6vtZNj7cuZy0W00zXXmj3dpGRxl7LHBaSNMhlo1IS9ZridFnqYbBUQJLcXVD3l1TLcd0aH2tjzpaAjHN7IBgvgdfn7C98N1JdTu2+yMIGloFT/NA0+5zNZkubalgakKni/0kZnWlaPcGmKDkls4n6ZaiIJcK/Pt27RTa7WBfl4WiVhw2cozTkN2kb42e5FLdmjU3zkmRV87ydE97w/7TTzc/I95hfERL1GrrBEeaNetoVw8aV5cK/CpDjZbcGIGMo6PuoPnZb3AzF40G/TRXgUDneEf+yDOsYQZFXpeCXUvtMTntjUb4A7fJyMIo6u6G4nbjk8mStI5hTU2CrTwN8mFY0v6zpdhklBEuRG55wh5CUE9UsW0xK7ECIAqHbl08XFyBkhwGiLOVF1huoZ8iLr7lTYMA+z0D7tG1PW8AW5Zht/mkbMv9BRqH5yHpbV8QhBXuTCwYjDN2w/+Znaw/b4/HqzMszUxOZ5WdxYbwyHuex9iSPqT5v4h6ENW3FRrz43Kp6Z0DG7shuTsMbna2hmLUDJbgNX4c0tbNpQ0NhkRzWosDo7tUugl1yOXLAWnveZXbx57hmbx27gBYcAOzXC0DDn8xssWzYhWaZjwV/AmERfKM7dFgoDW+kikBDtGhbok48uMPkTTK4cKvSIgYGEUWmTreIv/5dW3c7aKg2LbXxd5lHQsFTDrfwwS3fTls3D+43360sln9urTbYBK21ErwDviRgEGEDYsUuM7vNaqviVaYuGrL/7OhJpPU8w4fqZA5PnS21y26osMDmwheG6sNb7KSIxzWoQp7s3xqCD6JnR5qHlDSAoVvE2YGEgv9NiAbFz0KHZx4WAf2q8v2gEi6l5Z25nP/J3fDhtcegDvlwxHoiQPtkV6RKdPd80u6hL16hEGA0TcHBtB16yreGtRWuPITIn7YKjaadHJzcwBOcUhzwnBz1sFT1ZY1stvx75QlSoyUhuyh3NsEZsf7/rTStzdcYklFXxaud1pAagtaMiVoodQBo87mysv6w3lj3lh1SGDRsL2nJ0j4ZgCzQ3pQ9s2+7iEz/2YBKqMgNm6QAj1FjM8/nFPBHOsOhFbWHbkX2jLrWFMJdYrMJD46voDwgbuJpmlatXZ3dhXj2OCkTGvziyat8pWJPcS/vtqex7ejlNpb5FToqpthzdCll0qVXeOdo4lFeILgQJXEKCk2owa52+qSa9CgueoEiosS4DQBxJkG9ox4x1TgfBJCKJDzlQhfOROkrJbiDFYAFiYn6RrUux5at6zm3p0UrQSgX/2VsADfF/NF86Tg/nBYxBtYAgl42DY++9aXOpS5u7/a6kl0B1FVzSovL9P1xUjW7hxuX9H0G9E8iZyNty5tjv1yWh6BphCN8s6sgQ8eWJzzFmKFx+DUB+w54sJt21ihbOKljgnWIhuSMcRuI3EYRFMmE6ZcVnTge4eob7cqBDay7wioDwB7RfvdRtzhYxpWVOwlxMctR+8Fp6rRVhTA9vzM4mxSMmt8d4stJh79RLIsCQJyGI9tIUMF4N7emujLY4YfpdwCDlt+RbhHEG1WTpvNdgC4CAIdqdIHynfCeSWk+WPcpmR0xKeTPItFxRdH9b/F3XGaxBhYcZtm/I6VLjrcdpJQAiO+ZhvIMaIz65oK0g+QbW5RUzNxGIU2mp0W2Q2FGVaLH/zpI7H6ywspTlG5SttIW3VLmfssAD/Kh1rmW04AAAAYAcAAC8eaItXIQywBQfmeziJ6gu2Ifw6CDUVSCcngDmViNdfSac9pfwWXcixiDk7+0kRjP3lst3FDxPxlo6BbL89ArR4iB9b4ZAjE9Ofu4tydN6rb9wdKYOgtTvvhIAry0r0UVOtPpiKcdLTl6uxZGBMpUACG4rUYvHjd444Ox78qWcaOkoSbtMvBK/fKNMX4WxxAkr+lV6bus9b2wuS42aLt4WqALmmpAxSA7t7ae4FS0CiZX4QPktKKgWtLSGOsXlRk7z0PPsSxHzN2xX1qvsb5XvofipM7U14klQTC8HLuaokB8poSxnOoqJGNklxkSRiRgdTIS94JU4CauW6tPPpqHzMnUucYemyKGXXS3FEIViYzQteTy2doR69qmfa8FMTu+Ncg6g5mM6Puv2spUHpu+4QzoK3YqAs+Mi0TiJDu2/QB28Ay+qz8nkClyH558JRgx9/X0fH1o+9TgfX0bEzkO42WvlYPamUee6tzrA/e3NZXddSHabU9K7hjAldp1e9l4sDFmI6nhtOOkON/0EWMNX5n5m6M0BcsWq5g+ijTy50jkzaX732w/4wXraZObTImwgfG2TnusQ3Rf0o0RSzmKJKhMyN1qI3fsxdcA2Vfv5tTOZ91G8VFUCMUgg8intIaEDYcIIoU3k0JBUWBoXZAkoY8MqdHF9ifacknzWzuHd4iO5TuhqyXm+l4gQ41l+TeI1xOuzpZvxvovscGJX4hn9UHbtqExu3UGCVigep4bxQLfBVsZqkXVql21lWlmk3G5yGm+4rQz/8dEErfI3f8d4NdMYpr4OrAizBgNgADkcLYvnx+0lZ9o/54GIyF6RqGQXSmipFZDFC0kZNdNHUdl7sf0FsmzngFqt0mozlQ0hHdonq1QRdZ9KyltbMAAuBwDxQkfA7Egln9xi5QxRP1XCkHJwsexcMAMjSxquV1T3N8eQIrU4Vvc5dzt+68+6k5wRhkwwvIvfjiR4WnNwLc55U7wlm2+S/4FRo+qLH2e2UuXL00BHDS3KrwQtzHZA1mQf4ZpImV4L1ES2Y2bB4xCpIaNN1QOCK296Svda+ZyXm1Oi4QvqeoFEwSzZEy+rsnrHqelMYORVwO6s3J9hrMHv6znhFuCRH2AUtRhWCn7+l7YlA7URFydbcrwUwdHiRF+BHz9uUBc7DiyVHtOEd2HZRMjwyhDX2HXKwgmCFhA6yOoX8/MXpIv7lFG2ay0XbhqUYVxjL1X3808Y9QVgin31JSD7fvEAaWOU/0e723d0BZxGP/FdnU/m4NtW0r6i/4DDP/QUDfeTup2VbzOtvvZeQX1r3R1yLlFDDXGB+kL34puLT2aUIEKoJ5GeXi+FJmQQWayL9deo5btNQ9ttR2p7V/+vWGaDMziJgZ6tGhFW1Z/G4FG/E/BlLsjgtXfkchRxS6+iKYPl0tVrSFlroKj+vL0g/myTFYkBkJMb/3hP3NjudJ1tAW/jKoapIDXAB6K0qvpFvi7dxukrPmawuqRcCb6GBSk4dY7xUuIHba4FDEBjAMjtT7GSvkywTwo/ndYQ0Ko6RRnlYql85X2bbj5+YeZ12c1MEiqCmjrOPVlqiQYS1z9Y46s100jbKpFaUHpkvE9l4lJMA0c8WX0vtonL71oD5Rwl05bdnufAOqDnqOBm4TdFoc3iH7+8w8nR8d5jHlqEyHQtyp6TFCwQuyL+hmLUsBKZ4r/z3X62o1pBt24OgTxlHFxeg8QGndiR8G2gz4O5dhBgCG+Ffe25AE3wKLnT1PAKnKuy4XrWHOewNMhrB7szgufvO6JPVhgOQz0jpvVEgXMi9sn/1LBTyjlre1y4d31/Y2JFVIURsdtH6VIhsToIBIvVTT2xAoElj3OEpgro8D9Jrq8DZSkdYVbDheJMjcnsxNHEgB+C9HinIGpEc7vX2yLjU8yBYryWyhXRWK1RkmMF2sBatTWGv/4Ce/vYHxnkW1wpLi0Zv1oyMBkh0msDvv4AkQ5NBmfCm+MORklLIQKG4TXpOgxBB4IggZoOiw+um7k2c4jxMwtaBvNP7EpaT9DHBhiNXL9z9gfeQZToM7PRApyJuKTNizERzVMVX4Nq93qwehLXezhxaQ15Qvje1zwPPVNA3UiAYGkP1F45teDUApmYY7hpD5zmg0Y9BYqIand+O2vXonO3mjfH4KvmePx01uBbtGa8wP36fFQdXFu3RfWoScsu4Hu3V1pFpFInsU6vZ7ug1DpcIF/QuO93GTI4Vp6thWVj8vBJ4/ijXLaw4YnBZtIFOZArc7Av6TQO4t9gaZYU0llYklbjAcvT/8d8AxYq2+ebdg0oSvj0pxtQD+J7ke5i6jEMu9KCqLXxQgPLM+frbEwRqr5GdlPT1Sn69RjOVrUAnqj3E3X6jcUJICCWL0+O1Qe6tBAwd9VpXTIptz7Qd9jclUE3UbNcyKDiP+78zzLTROA7DM0SXphYepPMtG2kT2yia9gmJe7KfP6dy14mCohFkjUiwOgtvesf+Z2nqJ045RU4MBlXsOaobiDvvond/H1oAAAAA');
