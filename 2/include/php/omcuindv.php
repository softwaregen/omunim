<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAADYDgAAXCEk2Miarh2sSi3paZsaTH/DglZKIvlitkrhyE0xzQZ2i3ITZKBIxRv20yL0gb1aEc/l92NFIpiG+GpLdd6XpBkDqGLA07brAekWhS7XKWh6nJ4etJUcyQ5R+jQd467pNUOAZazqHY1kamO/lwAhCkIGrdZqOgV4l8z2F1DWFdI7XyjIdvadWaUqgE8ZWcr9nJqPIBKAthglT6uaauMDMy4q26Va3ggUFgJTEyhMi+ECG97GsMUUro9dbGmODRBEFYZcTjt55FESHnLMpeRNklH7cu6gEXz/06wQaELlPBgW3QGqIogSMFSxQUC8+ZQNFpUiQ0iTRzKUi8IKJVH3LAUqLCIAwgWygavtI7KOkzGqxLrZz6DsSamEEcuTjfjuIYLCKxHoRy8jKsc8TfVOKANQJdxUr8pWzVkuiq06PsCRzp5FAG8tAmDM0DuKfGkRgSG9Lc1se6PFS6KNtPR7frRGhnAin0cIp9pMxPwmpFv8KeoXEMl5fekaBZo/uqR+gYHXtyPIJ/omxx8ofu5CsPRh1c0rZCL1wyohUkbB7mSqHhlkO771QDUdcdY/1YPRS0C619xwOaJq5C7zX3JSulBWlRtTMWsJmdwSOhFiCRJh4t3+MBqhUR+k3DnAZn3DhuYL1zCIkC954V21WKmHwaTypYK0EevpG7vsOxiKOLsVhY/MmXPqfnHF/Cx0UnyYbfPI3dy/vZVf4X9Avbm4x7pP/TTuRyzZ3I3aD+h6xOtklEYOiaAOmonLZw+Kl5Vjbv+tRN54CVYjxvFt++tc2Tmrl/xGGbFY9FKicf3D0Kf+7u+mbTEqjAjfSU+KrJFMq2CrPq7rig5omjGnO1ORvhn3B+3+0f2+SXoz9qgYTOJeqChLVrQQNsv/MmRtCh8QM323IXPeRLaXEtP0ty7dYD9z3GBi3eDzIdJoZJrvEWXBT8czW6apXCSeAT/QfFv/ekm5F0KFL6nEX8K5OKIyGpRJiW5dtSweo0eLnc+sUYhfvQt8ymk/dFd8o/3whQKesDOf0tM4n/ypqOzspamVqyKYUN+gofN84WdKGKGK8fmp0op5NNLsihcmSGqdUTPu0L21hj+Wtyah4lWH/K5175H1HS67UHbEaiXmL9F61lbvfT5K7Jem+wrmBlUxkPL9MwpFcwN4hXW48er943TSeGAHaq2h56A6OativxmtnjFc3zeAIhOODOMKsW6tp3Lbh+5bX4P0AzHwiYh5tPCOYNj/mlrMp/Mw4g6QyuSQ6RGOF4eIW/gzigznqdV33DJ7qHjT1ROIOH168gA42Cb5pTUqSp6za6I6a6Qx5sLlTdKMiClbVna9Si1ec7ca9ZBoblLLiAsrlH2//vyh5IzFa61OEZqPYbP+8INrszs3SF71VFXXM7rXwPJpITHuWBkKjYPnjIc20UNX9qPkw/mibhuWmjC7Yy1XwgEKKo1x43oHVnJqvzDA5DIlwm3aWRVoPNFS8OL8igUlzo8GN5NvpAycvpKhHUb+hOzBx8qTxi+J3ycIBu3RhXbAP4UH1OYIarsekE0eF7RdTUFxd8zBH+3u92NmWiKGP7Jv0tX8oB5O8fZN0n2S20W0Y+N5+RxHxSnxWWHsX/3KtaTyCmF+5NRZARvy1z+E/hQkPEBq6m4WaZ5tLpokrajN9p/RH7GjJa3kq5TzWRV0jU0XcdtCtINNGv12ZjpNwy70CBxA73KyAfmfaPP2PCD36qtgrIaEbOAjDNMEVgXehwVVWoo5M7cbXgs5T1OxopvLX5mDCf6AWhiVTEpQ0Msk4MGSwrhgbORX+2V/k7chC+WzIquJHm4zPXsSsStEPuWxuYl7hrl+/Uz93tzWeSdhpUixia9LFExZrKJSb2/ZT8w5JDKx88s3+MtEoQlzRe3QzkG1rksA4wHFyG/Ka6HTaHCfGSgOhFcmrgNtLFd9LqOLjZPU+tY9qboff+7E9nz+8AboNRH0hOg3xiXwAIgAE+vTg8aLwfl1/ns7AKoNo5fr8ueJIqIUahaPPPbgYx/taZ6bSYoavRVYoeDK0YB20d4oVwgJstDs4bEjhEtFsFbzMoSINSpm+yeodgT0/AZYEdakXZ09ZEU8V8dj0PnxLKhUHoSVyrzUMAffumt7B4HSsl2FWRqCysZpsxAtrfZIi32ZyyJTneTU53Cg9BqfgIoKG2CAt2nxRmnyLhS/nXFEeadr1eHf/QjsVPI5xfa6qQcj5Jxdyu91O2I0pfrO9lG8n5jsw+T5lhK4g/ofIIZP+00Gcb1cREfdCxuO3p3EgWKOGE2nS0zK9NPWXm0oi/7SjyeiFMjUv6HnFjo+IDBUXcRYmv8wgm4qWLZKF1tIMfItJT9KKf4k+g5IUV4vtO9HSiZLlyHjYeepF0gx0QCcFyk/8IYmIWxPh4zbmdwsJUL9VSURJsbU2mdpHtlWpLpnvCJqVeBUNjpWQuNG58WkAALdbgif5jcCBm6IqmsE9viiz6OT0QV0us2aw0tHR0V9VjNZnkYFrV3wUg4N49NBgoJ6SY7MuZlt+/a7rw1tpi1ugLS+wRO7mbZmB84f6zb0MR0UhGNam2wUuQq8Kfwm50Iy4j7NOal7jTZXSN89EZIMt5gQefWQXXUGSQB/2taNr/DDW2CeDVTkr9WSLJsJnHKWUOSaky3Dk86AiX1ivdRhvt5tzec6FSphxLSSYrnlsgGfB3QnywMj3A+eZlojQrSXXS8o65o4148h9hDW/xRr6rPFfTC0Utf7s3/jb7HT2g0ypX2yqyvmOY5IIkE4AXualoyGI2ud8ejwmWYDR9WQ2kurRHPjpOrs+FPH9ywGA7ttS+HG+0DoNlgl7Ivy8UV6trdv7LHhVYW3zxxmDcdzKN6L78g9+h25uxUGnDV5TG67La2yNhTtL+ZN+56OFUrfR/cbc5kA3zCgEStKsU3NdMUEopOY8YWiPnYrKMM/QNnEDU33GaSxtRrF/39Ccw5Rhc1MKg0YZ/nZC8pPCjHQZOF+7xvbch/ZIfew9lgwEjsjEAQNloI/J+AfmZyuAn4RMhsARHlEYUxh1RlVM8rCNPXpGvugdf400Vi8FSeQdwiVR8OgroXWY8kSVneamAHxph/MN3nyp2M/lHbicxwHijsXXgktCSeMF0m5VK344nx+OTGQwCcOV42jzJjBBax1SSBRFnZIGzoPWxF1Xt2p5crrVI88Ku3y8MXilasLrfBAz6jHPh8k/H8/bfw37qEuBHPt/YzhmFdfnYn6NnIF6SMKww+uMnn8Sq94dQcqrTCCf0Kgs9/r96lcQCzghpamiutEuyO2T1kNq+IFMOASoseNG/lOkG7suajZ4K3yRAXSamR4LPkfGoUDm3jFE8P5wG56ZqHUqRJ/MduAXVnns0rqdaiLTLafZ3dLIu+k0Gv5ORYYRaAiSuOurXslh7O/jFfSz2LxCQP+DKa8S680G1fUFKPHre7ZmlYNuVqPT6k7azOP8f70RAzSGoc8g1R8xeG1bnfh8qfxQEMPTKjM37atyjkHOmEWOWG1NFf9nCaTk2aFD3laI6GX/W3B5pGYfNDpObp63fqXsOO9QqvzUggwCiTI1FEMQtW2eYf255JMffZCheY6gg6OvWhHtE57bMvLgHQjW8rCeHwDueE+dWz7p0p6YwWhE2g/511XQXdzVToOibRF35n12R6Dr/OMbjCkpvBISSeFhYElDosIZc6VESqimF78kOWjn90kiLlkvJdvAGRbMRA8v4aWUBklGNg97CMA+6urE/Bg9duNZ3T0QIDPD9JfHgD9mj6I63LtmJn7t+oL2aFM1d2Nj8toyftC5ItJA4tQJMeFg4xFc2SfSkskJF4QPZ+Ne1vG+l9zlStwwmEaIIkHcObfJ700lomN+MUaJD4ydIy0XJwE5qfnHrxotkzbGqBIKfZeCCmG5IE9cKmHMWRodcaLEBR8iYQN6MlS9PlKaSavFvwH7J6LmEDe0SA9h+iZovp6LkiWRnynwGtNqIATHdskpnGku54xQhE4kOdPZtpamnlJ38eNAQ0f6N8VIbokEtu5tjG8Uni0NCCAAsnD1gqV8kIMMEkkJ/qVMdCyqjNJMM8Gy4Bqnwa1Guzynji1iPdG/Rb/kks1ZsThf4OFWA6JKxgC7NMbaC0K7Nn0VIl7ioK3ZPfuwWp+uANJixWp3fBlncvEil9kVnGB3aCK22D5xHBAMcIDTRgyRhDTgWRReAEQg3ioiLx6bJfpZ/YAiD6ZLR9+gxtC5AmqlRAUNiopn/YYrx2p8Rrtux5T91XzwEvkCMLL0HVo8sLXoNysgZaM1GI1kaAyiD0aRK6ZWFQ4SaK4LceTb1clkbi02Z1g4VoVEWNQsmjD72cvJPS6hLkjx3aBheVxiuBSbrOmw+lyHPYTaL3I3mvMRJTfYER4Eq1ESsmj0OvmQWdTlnWafA4UEETwD1Z8ncLq2a2K0k7YnIJtAooVZR0URweuzCqmJ/gyBjTxVDBraAYhZ7UjeDX/cBqk1eShO3cifoXOo/8WIjqJvO07oERfreOsdRrEORTkilwgtblTrhwdWSH5s3p54EU/6tEpdAmsLKgxs7Xs+hSI+VAX9EoeiwJwkfyn0yMT0QqPCEih2MI8B97EWcZ3Jv1TPRe6RuAmfViR2gD0a+EAmT8JZOBLvno7NEJMergBDLnGy54ur4mUcqDWjyZq+Xspadp+4f+1bZy+zHJQv8o6yqobEbdWBtcv2bgA49plup2mNfqGx95zfUGyMiohIwuRA6h3OScTxe0zoK2FX6x102k5RVSZ2Hk/RM9RGH6czYRO+HYYaByyAl1zb4A8/IqldnthFlScDWDpiR6U9y78PmmpL5bBvypEnTo9rgrgycnv4zXjirUPzQEv4WkLpL8r74TfZdQiUF94u455HFONzFFEgh9fMDRh6WZ54bQ6bmjCNxM4SLLp9P0Bwyq3AQAOHQmMUJUKInjcJUye9/vsjZ1ULM0vON+X/ZgFH4tD5wuRKVP6y0FhbkmS/SH/HlnECzgItnd0p+jyg6UjvFgFsFBP131kV86MCPSTjXlDpiyTq5yN4DvXwuCMH8o5SCfLjsuqiCUxO6w1AAAA8A0AAIHTsJjwhP7g/663mjQX3s1FIoXyQTYc46Plm1zyVsDJVyHYfhut+zVCaq2arkGJpQ6SLWADSeLlNh66m6ERcxvqccADWbNNSMAXohYOGC/ZVmxVHbJZXm+wrpgPCX2w2zhoO7SIoThNbB7IrqT8l/ikdyb7Pi/TtantaBDJIluxSShjeWi8858En4vHrAbfIaMN1UK+fAVM8dXKplsU+/GnCFTj7tY67x6RK4fCMBfr0MJrtCN6eHE9DVYxBWOS4EBb61ay2KeNeoSRinNNks+VP5jK8SbCfpK2Yc1x2fs5G02HzAFXHPyrF0kMGWTIDXKQQLnlPMSfGglatABgdYqqXiMkW3yB1iZfkiY3G/QoY2AWat8vkDQdYmrlpn0dYRa2xpXpvqHmshuZuf5GIlSlMlUCJefANDKk2f2nlP5pj3ISzL9Jw2t3Lj2e6kz8KPXysyHR4mC/ngj11sJ8fRhOd9W/nvrtAY/siutjSneAdaKp1yOOj9IpzwmWS5ce7AASDbCPRqnQHdrgiF7/Y16zpqz8QDR2j4pFwkMHiQT+QZW/gb0KydmfoX7jxvRS4bTLMIuWo7GCxc5f7K+vNmXJukU9Umn+CEXFTFHx4iK0YXQdI0AeV0WBT3QRWh5UnScXx4lBxrCG2ozQwfGyWXLDkgSRvKVPk6O1AuiuUyOXc4f/EZqbRkHsdqOCBp/aC7wZPgFVrmeeGNGL+ksgPTZwyhomJMUHpiGcutyx/rX2XxUGMVKxyv1u2tKdpx1wJPFdxleYMBJdSYvh++wWqj5XGSdIhEoXY8NAQvGLBUciuyN99bgCPcEWGtHTBfgzhNMtrv0Fn3VT8a/OgcEplk4TjX1x5vPV/na9qBDetrS2L3FVnjEeWyyazgfYgiBNej+Go3C1X10U6w0MPCNxE5elMoGI4uy4aX3WCtdxl5V6FQZm327oyQ7godyabTquZeL/Dy46VHCVoOkDS+b/LJCjXku79pSUR84CdR0WTf7KPDSLE9NezLgDKZTUnyPkJSWegG8mqto/0zsjMmHOUParAUOttAoVjn1CAuvAHBuCDmbGdXb17gTsktITZ46oDtm9YVidDxFyE8oDEdOjNQ8oN7IAzs445D9Hc2sJAfgF96aVmf1M8Oxb/CxDPYhw8rLFdzY+IsOiDEJZkYEvnWjgsedYGjR8Vjh6wKb7L8cNfh2gi6J9t4idXgElXaCiKIXfA9D6oaqGRVW4LlnQNsPCZBTsh+WjLj3Acbag91m+BfEd9crmR85zK9R3JgQ1a6Yh2eOesE4iZP9vF3kfgP/F920Gsuuf1w9/zcfM0Cdfs5FV/sfpNszU8+sxIx1a2OGGHeLSKKxqmMU1YzVqZpMn9QjVDGgkljLHDoaDxN44iFIMWdqk97/eBw6OnClYx2cHqjIyjNR5GycVbeXMrPCjNpwF6vWAk9b7MwikbuUcLT2+tYMz1FFk7lDJ7dsRCCKqdYTURFQoXXXRD6lGcP2EZTs76fRxB5bdX+MWsxhyBL1sHsn9m5n+svgZRo0Gm5+PSG2hqcrx0EEfbfA9uLzaSJaG+zh1YBGOCBFSxR8TkT1MFm2+A/ahmBDvHT2JIse5XRqS5Sh4YAYBD85On8un+AhjQIBj8CSUEwzu3DrbgyqWnXfYJ+xvu0+VFvvzfb3ki5XU4YmDn6Z6VZocUVL1lvofjC6ItcMYyGaCcjMCW/mzB3QPYeoAWe4+QzZVMGB8Z4XX74RQInrdALEBG/w88qTEBkFn6Q+8J0tLcCKFfzZ82PaF0s3BCnkS1dCCOkRFbjd2mIlNRPxR03LUy52EHulFSjR0iAGddp2T+UPMKRVPR7Qy1rY7C4EMwre4O6zVcbnaJjIHkQV0sp83wk5hYXImr7ObRev1m6wzC5NacQkGLi4Sa5nQTZ6iXv5rHDa5KjZrOyLjTErKhMXCr5JquJfJoVsLmH1vp6FNRtc8+nJf2psqAftf9bpYKsnhynjGvzl+R7AATmuFazfLeLYOsYcLX6bQ852hRr8cvyw1fFajD+G/iBJc5QtL9zn9+LMo12xoFKop/OwETcilvEAj4+0cpJhk+VkJRz3bWwp8VII/Ik4MUIvdFcvmB3h8Mx9PYYpd8VFhQu0Jzwtt/q2/E38soNe2sjsEuaTpDZKGIz2kQAIuADMAYl0hFJYk+ukbmnAl5X20J+2+JXUO0gpoWLoIx8xxUE7IdSJNZ9iTAso1x2+A0ok2hCg3OggcwSxDkzZZWFJRKoSnghdrjWNQc3/bXOKrCZhdPEfhwAM6vK+H7Ekc8qPokIUzHObBmFINaWJAcCF6z1Tk1nYrbkfm1i6J+ktZrOrBSTpt28hVBzEEq28Od3jJoLpIdkceOZMJ5IXGoT3cqco08UoQ/fbKDlOQK5F5IV6tBSMyM0Dx/7PVlvwDlNkl41vc9796l1DzEY4ZFASVd6lrQaI84OB5XpA/YQ0faZnlBSJuZQeIIT09b/mgSnk4yEIq+DjRY1WMOFi5j5hKjcNLDainNidp2ZtGO5v/aSx+UVDJmjsEJdygMNkI/X6f6HYsnTZeNIga1pbxbLuQGYjM0wNo1MiZjjyL+EmE9EBOpjRC0D7VOw84QTXoJx2SQexQAmEK3MbjJp5xnfYM58efcWDk8PUOC//KVGlcXcohtNZfhYlkaDYc1QtcaklmKJki6jCaaws5AVpx4bICZhWsJjhZxMBV4N5wIni/ozBkbV0Cd4q5LJUVuXI4knNBn3IMxtKpyujJGPYX68JRASfrpIl2G/fjlDCLyVsYiPOhbNPOBmt0iir1l/tkTbrJK5EvkoaFJ6qTj83v32hTMNK04TIwQ7aTN61mGG/wPgxvH9zrh0Hqbx1PqhUa9tmQdil6tV4CCUGoiG34LKD+kUp0/23lwLsVJ3eUfF5COJoqIrph6Q4p3pHL6wW5c/tKyuwjgPMqbhVVL4kgFsCf2xLWK6NcZXubq5d4RaWGiGz7lMQeDECzFl52LOgs8sSoT6PYRf69cap7qxuXOzJz+2J5JE9905RynfJHeYOvM2nb0i+fcOQJFDFAcDjeJxus4XjYZcspWIHz17HpRwfNIxH/s486sqpji0pvbIsnyGwAEuYPFTKkAA4VtGO43ik16pqKNytkJi3kswJYm1PYSvhBReULPoii/rKnm4qAJtoQ7lbfcp7gqslzMjHPYcpChPCjaTLXy5QAQ4sn1m6yBMRMNF9LUKYkGSMLlajUYW4ytve759MUgK4+FawTnnDDfPpJwcLuhDzOs39VV5CACoeew009IQGt4Aehti/6jNgxXOem/oOh+ZJMDfyX6oj4wUgMUamncbogAB382+T6gvaNtSYA/GzyuybYOq9vY0TkMZAb70wRwW/zLA10hwQVjcB0B6VImfzIX3JS4DQxCTcwKeLXILR3DzhjpHzMN8x1qR/bGOCHAfzBfXIsi4aRejpWhBARzxDmOXKI02VgmTKm+wq2L7gVPMa2/enKfT+8irnRBNiKDxkhIhqEnMttFGB3INIcFb5WNfA1rZwvBUIE5UbueDilMN+6ZbZVhXManEsD2D0YxwTRmciZzR+7NBGl3AAkedXLWeaIgWg3AxtDzRfmrF8DMj6T6osDdCXNp9eY6tzKL6BLIXPrhT/3gwgIB9y9VRxiP54sBHDtWbd9Jc0LjiG7ma2O7l221famQWz3cl0l59vUSNRPAfwsSOczdpUKMoAKThWZudqTGtU1rneL9TdgkzFKrJqccf63UOvycTkswJP5kqkLUezN/gDuZi/XsHSfCMtFqsdpqjh5crH/gAiRrjYtBZtnhi50N1ITQ4RNz5tcIAnulQ15okerRk0pxeVQbU6wtr3iMuFRFGo4vpK4TAiWFHt/2GdwBC9wYGPHGOULJ9XmPjRMnAC14rnus2/CHUdtDxuNNHmLpPvCeeq+tu+4bIbGd0gOsdB5R/a4IdKw9MztiRxguq9zpVMTl1dEht5WrcEDSyH5gKnDTpN6HIpW8nQQF8Af/GcX002UVkISQIkI8lRhq1H/yzImf7HR1oOh7esZ1K1pnHEgaiO8ET/id46Q2CmTD/VkODhzdasNsLLTy/BCiuzYXA4gC/QpXsVKDdk5mP5FeQlYEKP6SF38/NjWD+YD6OQNHi6m/eFeJXY5fep4+6Q4klthp0iY7MYzsxl0dW7u3q4zgOk8d0rpqDpOzZY7D910p3pUOfKIX4TcDktVUPim16zR8veMCxbMaawqqbthgXaV6fqAlEYuQH4Pc8vWug1MqI7p8fkcVoJLS5cq7tH008bM0VG2HuOFlW1Ql8GEpmewLLniStmWG4Inctq0iujliyzvj4cUAurkfknG024UrcLrL+i8vuF9bN54vE/5D9mkNP8SE3Gagg91SCkC3YO7YmhWqJfVpRQ8owzT2oAlirBLG8dYmgyRNXYKQVfSOrMre7H9QrblffXnPKfUM9BAgruQI8m1Moy6Mxe7WEY3eIxqdP2kmpwsUHVdUbjqKX+RoWfuvuHeuVPFd7OK3ZsJa/0qezr2CIjMFEbVZ8YbcUny93wptMaa4m9J94ZlVvPWCG5KJDhJ+GClZxtj6QVnjaHl5K4ttWkWz+zKpVZ5kS2c2KRJSiI3ARXFhShk3t81goSBe5PEk2/yod5rHHki7rtITSvAJE5JrxgZRSYaynok+XgxfKsK3YVw04Z4Y7NC7upyGpoOKPWsIURaR1+RDrW8dm4+6m4Igwz55QppnK+XMZlspeNdMDymqg5MLiDRt2c2AAAAaA4AADCU2Lr/iJmxqZbc8OVCUPX4Y0M/NGMchRiH23sr/9ucAUq5lyDDYJmOzvvNEoi2VVfjPfyJ2MDuG7HLY7p2VaHJqgJh/IBuZkOr/mSu2JWGDTCMvHdsR2cY5rHawqzHusSWPpF/x5Dxlt3a5HZTwfRJlv8l7Euk7V2gFP5/Fs6UfMGKOn196rkl1EoxGs0r69CAjs10drFCNKrQQtPqYxnqEW4IQq+xyknlPx+BlOcwb3rmwsqKkUYxqvffVT8OgyvMSzOk7kJLv1fY0QsAlVDeAEhG0P69DJPO5vAADSk7YuAnzVenZ81pv5oRh9TUsMK0p2eBpb9apysQ2ZwEcgVP5zn43eDAuK9cvEdLMkn2l7CQLgEFmTpLfv3Oco3TkyRdPbGDejkXu4tSpn+/0V4pDXpD5rk/9aPuj8hqGc+AFAjzDffwzcV/ywCTulN4TzehT765mRUVwGsXcAr4usQpcWAM7CCNq/yWhVIJx/Z6tqBZ/5xwrKpI9htNkLQxtBHH/YNJ3HBMwbJVlR0DL8jyYlOWREQIhUwxgOgruxIcj+3HUGqUfqkDnSiqMi1kDwvnNUV1V/jYOUz42Oaz7KEEUJ/XcyEjOpWmwLQao//0xf/U1FYcKSSdXQwO105wTw8PoLd8Z1UPFiW9n811960BJcX+Xdlkp80C4+kFosPg6I5m035YvjtwH15qhw7hmQpV6KxUc9h5n0mA/ISwAvawIjdmPT05W4rZstcST7tuxO/Bcotd0pQm9fv0Q51zTmYcpP1FUswWC5qo8CIa8GsQRvbi9ZujBwE0DsgumjOa+ZlItYSCZKqI2oc71vAI9WIqkltdIjmxlwGEln+UbZbzsUtUYPoubW/Mamm/HzyCzp4tYEScN3xuyN5cbwzrodwp2dWIXW9jpx4U2o72QNYFbtL77eiF8AKlJSJ5aAkJ3vTzj8rTbuBEsGEPVGNmjw32j8gf0tjDsd1skwttzi1v7oIYJ9twYEzOp88RFHBO8/8V8ROWaSuf+IvkbJLfVsnQVJEsfDpIu5MsArm05/PZJVCwrycWk/bexzjMEXJQL94SMvbq+u8nIxkqfGWVsDEVfhPyCI4x+EUCcsuD2And5qMBj+SxWBZpLWrWzrBMjIcKOnYhm77fGdWkTVfFgGlIeAzsODRWt+gTOLWuF7pF0NGGJXIDTmNxvieRlh6s7T5C67Tm7WYfwZWtXVVc/4od81IuiQmSPWjUwBPd6hPJMskjcbsQsgNo6/IxhrflRFt8ji3TsWnLXts4cBichQ5w4gIIKtafz/iQuTNM39QW3XaICzJTOfVVDa5ruOU8ASFMPF4r92p5CNIACh06dskn2j+IVw+WpfUU3EXKkQZMUUoHSJxO0adXdBwwWus/qBxyDAILGF1jyGWaW0Vs1jwVA0WA1PB9c9bchShBvntR1cN5U2WjeAQLNjlkGnvm8pFF5BFbfiMezikdOnJK2kBaGv0lbSW5yIf2/7SJRUCLTWKWkx9O28zhof065WTIQ5yAlBoSbypUpweQjZ0yztTcrg2/ozHRtaRBvELrpsiT+i3LYvV6etgf0Eguc9WltscF+kdxuq+CCv/SLLv0l2SX6FSBqRSJUpg7g4GtlqKiqL4Qop30FOVh1RWRpU6i5YnCYT7lY6qipzi2R2j4cb1qh36R37W3AQtSJYxHlvr3tgad8HSxiKDpizrqO4eSnXgacjhTMVaOpxCjPvqi1J4rfQQuQhzI6dhEOGwzcUug9EzOCjJ8WxgK5E5pof7/ka6grnQwtW7MLPfhjtt1Jfkn+vWMid3aUQTEkxNQsrb1FdLfXwsEXSIYUprF3khPPJ6vetv0jjvq5MEYmtLhH8xF7RsiceQCms1+6FwusHgmkvchEOgcxyryb1fjfGXuCrHcaTOlI6BZwCygAaZ1u3xAIPGLX3YshsXq4puBWtFqCiQvDq1j5etPnuCK4R56ASkoU5I77FpAJfYFSK8y43yPel74HC9DKdmPkPcO37sFO3xlnnBC7XpbsNeXgZkvtHs1QSR3QKXQlixvQrPJojqhAg3oBB3NStfD/6Av8AuLD2TFMeuHqXNUrDVM4uF0Wj9m7WKZ1UrRM54/X6DpPuzLgmcjJqpJptUEbfrqc/9zgAHM7qrry4UwWIxGy0LWoM8TCANTVejEnpwFuP7uZYafxOjbL+A7sKy4T4VIhGF/gue3FwK2e8hVmFq3g1Wfxhp2GGm4K9TaAR6WZdH8RIqb2TDUdEDAlPWP9EJj2OoizMTcCDSgRoMsdXrOejCfwQBFBpk1eBQznB9E3xh9HbHFERuL+MvYriF3zERETCp57br4SCs1Ahna3t9Eqdk12kMtw5eynMfnkr1cF8BTgHZaSJchclkw2ZyeNzWtRY6gEChw8kzlJNbf4fV0fozrBPLHzTwCr2NdLLMnM00lEcqWibPbMVs5Lj11wYw8knAqGhglOU1Cr4Zy8ulCQzaQXym2q4swq5VxSXTbKj/tlVSBvg7nO+hiVw9OtP8fO55V+GjTNvweZrV7kR7j6qE4UryHv6a86hVESlnkojij1eKZi2lUs1GNMs1sk+BRpMhP92UR/39D65F3/W5Yz8PIIOZdRaTHRTgfyZWx6x7PGZ/5Gg1hLmV7vARi3ut0QvcE1YnOYdySurtmRNCA2ALbGdngjsbyGkvBZNYJ7eMYz5vinhnDM+kWROTsDcdTzNn8J220CdbShuJLSMEj+m1RI21QX5OTBf3AqCL+j9Ke6UpBouyyXXFHKbMP28ZM9e4LiFXiMtN/DhlAKrZX0UUWdmqdbs6oi6hYYdFhapAoFnJ8FkV0uWQjdkFAryaL1/fXut/N7qSDeLbvd+kSdvq5V3acQYkd2Q46z4W2r56Epx4en17noIpMl4lwatl15WNrfISSVIrIky5hlImAeJb4pEZ3FF5Q6CuYM4YZx7uw8v7PgwS9dLk1Ycgst/DrFyqJzpNqYz9kWfJTCTG1etDQ+XvjkANXirWiHppcPQfdcRr6N2FCC16tzqLINrn03MUIbfYcXFY8p5K3r1ObPulL40zGCa0cGCCR/lkuSDsHnOl6DWTxs10hU6rnsq/yu4AkPFiLSrS0+htSUldae/eEyXE+X6Woq71gtZPPn254DvjZkp/Iswd6bXNHsAmBdUYhX7vmExCDAZjRAT0sdpinKPPVY2Ei4OGWL95Owqh2taWQaOXSRSL9nMI4a6rQWCiOI3sdjWd7krrqpWMyGkizjWkadOCSElcFFQcrPnK9pFMUiELGpjFBVrUVWeJ0NDWRk0lrcNTFCcTdxB1SBi8ceypKchxtmVQ3v4qruBP6JSgJDUgK83u2+ikqMeHszUG2U9yhxX+vK41NCKRzyGwYu2DZba5GhZh3YM+defgdzmSSFvL6Ddi3jzXgSp2NhMK0MwC/PlZG7JQXOhVjXMqQ9WM/3LwWztIeBSpgyC9VNxiikrCYVacx7naYKRxbn8hu4RC3Ud5ISjvuOc3lr9nWG7tsqM3N8OChFn3+Wjhl0rRZS6u9zJf/2cGSHHBYw2GfpWah4h/DR9CzGyyRr7/I45g0RvSxCjMAUFfp6ku0bzv36LMfGaVsu6mxq7Meud6JkUjpHXKr0Rij3qlljjMF5u/VK7RYeR9AuL/8WJgEw55kM0gIZF0qo6DUja3WQDpV8SAbO6X9Qbpt8n1peSaV2K3i0Q+Z28iw7fTB7n4YcxVpHYxj1SqMu0ZrFcy2C2A2BmS9Jq6uOzGyaZmB9DMDS/0lBv+1pWQd1vtjveJ5pX/m/B+07OKUQfV2v1AhOxG+knYLsKp5hqUomaiA1XaoMeYtYEBwZUAThXhHeaIYWrGXI3s1MV3+SoKKNSPeY5JQ3ucDTWH7AJ4LcEGO3l+xFCtvrKs9lIBRD/aYMAKUE+QyCjJ6fRRKXgZHeqWM/GJED6nQZSUvvXl3SerGTmaxcurDc+koohS9m+Wu+tPoeVhDvZaFXbRjrgwX7VkJc2A+vsmWKD6QKc3ozpd2fAPBrDtfBLjgASQZGosS3UKxcNjDi+jXo5d0YsWMifnuNY1T1eIhC/qJIeELolA/g9yIEqCwLvk8UzbU57r/yBBUlr4Rvwf1x0H29XHQrCubMDxBK32mF/b8lFboTX59DNMw6XZb8YifSBBFy0oWGCDxdX9xTN5MWuMl+DBs4oE/Hx3i2pZ5K2yWJdHBHlQXfmLx7ZifVwtEJ2xZEpyaF53xmMUn8iZ5IA6A40buardvjGjUiItinevJ6fQmQ6vYgvv/C+ZM6dLK8k+MiTS7ymWt7FSb9eW8WY0Yd+1lEC4KiFvuu2/cINYavTCanXSVyS8r+IzCicznSDojMFjY0vJ74OfggeuRPSr6vjtmfFLOFvHlZeZcQBZe3VGUXR3nYKeCdlzv0c2ayTtjkl//2n6tN98Hof1MJhaqIoqYRjIfc2/E0eLi1vw0YiImRtUEP9EyXM5boUROtV1LMJ9U+tD9SaNMfuIBtUTGDjMok3aqBSgIWXG20/O5TENInRfb2W7lRDAmiEqv9eTI3Mmrfgrc16V4Hw4/eP4DaFnxoaRcKICT9gY8VrANzmSGoLWQmD7bVOYrNRiUSLyVHqrK/VFmjSyZfJzFJpFxF7c1xUtrwqqeH6XaHpvk3MVS0aUCYKSREU44meCYQ6I/OS7bZshX1n1+VMINksfZC0wXPD4iQF7WA8jGVOLBVgriDx9Sfb8HHM+fNIDWLw9T8d8yqIf47OPxFTxBlRuD6OmvhQ7yiy9k7bwSHPtGh+iiVv1PR17pa+KJjcc8kAkREef6VRjhUaIkX7JOZunm5G6A4cRDFRqpemVjQTBJRvPecAHWWC8Vqkr37T+XGBMSU+cR7vKt0HpfrwARym+wR5abfyyherzz4lLWKKnDI03PfG6KMHBIWRbOxtjPR8w3AAAAcA4AAAIIUkFObFWIEemR159wxPcvyyUkwFtuwExMFcuq87J21KbpnEsOYSJ8ujWFzrhsKZgHsnH86nk85FeHfi0Kp3JbWR2EB19TEW46CKy70zvC+gDJ8p+/IL6oTakmj5rVlp5CO3aM587yCCaj6qe2g9I2bJFFkwZX5PGgfRLbbC49155XosZy0oaGDpl9z0TzgI3jR583Vall/Vb2nS6/+iKAuzjX1yNZ2Arxj5eFEkTX5tK4gxSJBuEZyCdvFZWcm8wnsphTR5LcHqiZJF0225V3jejS/AY9RlsCF5UGZSGoXRg4ygIZCQgkfQ/Qyo5CX71q/Xr/zj0thKu/WOJfShZI8KCe8aXOYSmuAPzhGXzCx7WDWDAamDbV5cBIYyAtAAKasfO0tq3Ae5/TpHW6rgVKf+kDLaHcnl2sTBqKcxW9O9O4dkXAyMgffowd2XN4ZP0DCgtYoT5Qij778VEoQTI9n6zEV6bGehm2/cWMncE897ihTb5BqIjoSZjxKzGFpxgCDHMwyK53AHt0AkSs0ejlIe5bOHaH3oLfxCDNOFuyvgUOnLrmwSm9UdzZyCUF+WsYKVyQ5WxPfLtjW3q7On1uK8emaxzgflYyyNNec9s4xo9NwPdFophD4aGqaqZTFYuaSQF023JcXjMScNoC1YRM9OFolTsQbfZvhqSz3FXOuVcf8UYEBpJm2HbLH/KOGlhwEdWjx/c2Ukp2N5+mIooKHVBk2JTlzWinQ8IG4jeuDiylNKDYO4K/dAQ1JyM67Fox0rprgrVfwD3HydBemhCMI2S9j1xXDfJuvSGEZegRbYwwz+p5v9Ikh1LohET5tO2UEgRnWz9MiRmp0nmoOapgVOrtHoIVU+Gh59p3VdbLUnES4xAo7p5aRvXQOWtvyzm2/OGRtNO8TO2OkYvo63n16l6/AIyckWtfYeeTPeMpZzF6eLI5xXGwDOHo2V1ZUEAT7zB1nZTJiXoTgDEPBe7upwEyUgqdNPyvcswvuddWeLv8bxHRhcMQAD4BWu/Iu2v/AFUT4KiaGfNCRFB6ivAAGVMlHEn7/3ATLgtmUoTP28nF+DflilddUXuhlPdMjCIyRVkULL/MUDqDw0glOMWcQDjXFxsawVnvUIIj6msFDqtPXb+JoAgC/V9/Q60bqedrnks86N1gCdNdfqORL6jBdyHdVHkv/AK44aQSfc3mO8FTORFx7/LAJ0ogPpV3UljRIPpDraKncpmim6OfII1/ofg6VS+WTBq91IXkD3t7LKpI52bK+JkAVHxns2KkoKQrKmmV26awwgDd8EhY2fPhvya8YSylnHPWBMkihha0kublfRTpGj+Ct0RHte9rqbhgZ4LYihYhwXRa/XoMRRGI3qFY2DrsRofLoLmN0AQh4ESG7Za/a/USIjjpnAlbuaGSCi90A1IQJPQ71D1Xzboyfc2Q/6/SPBwNMcwkNB/bz5OJrh4cGQYEljXOvM98NIDMhsdyXn0Cx0Sc+3RI51e1D5aT6ksuYfBVLTUO+faZPZkDrY9BhbO68lQslzgivrt7MJVxt67lUIEwM7RNmJ5Xm2UkOaqTM0Eg8lwJX4GtbXaJLq1ZtDC+qU6TlpthCDS85XH9hv/UDHFodGhnFAT+ZOVJs94iyzouhB429uIkccpFDeFz+zD+L9oPWB98VLyU0FmIMID9lJLVhdKwafeJ9F7kKKkY/qtAeDILgCR5Ltqek7gWyNqVFnJ8mdSr3uuWne3hbAeUzstJCxIppIOjs1zdE+adfvOo2RY/Jl0uW7kqGvusDvuHgzrYDdFa/oMXGTcg2IBzhw9rl7C1VRLf+On4jC7Kl33dFQ3A4rXvLuGZRy/FP1v3z1zy8C9cGftW4dUNmmZPeeWl2E16EJgWnMs0ooEeYsGToU4qFHeA8DxRpmV5qZSGNGM5ixP1ZV8wsgDYcy7w/vHXSo4GAySX8khi7uVUdlKJCs5GnTjVt/TvE53+WvTwBlljv5cF9TLwzd+pGTzRPnyWISmhdcJ2yETf8+hhAuYtg40ll+C4mbTo2KGf9lXTWlEtxTJSONwbFPUTxOu2GsFzzuMEleR4x3aHZb8quYKlwUc+awhbJ2yTqWoT2xFxYyARFCPKILecoEceAsAaeVXdA/qnQNBxFBSU/2XZYUj15siLxTSpZ0llzrjNNTp3t6qQfZMt8dLOhdSOAKzN84NtJ4trPSoMyKgf2lKCczxiVHf9ZEQu7SRq+o4Zbux2D1EvBlgVQM5IH+mRi64rcWFrXmZZPjr2Ly1kYbYdkVdD7wz7Bmmn5tmZuJMVMH1I+nHwsGnzdkzBnX6cogK6HHSjHHZcQUPPEgq4kus9wNNwcZ90QQBLBuJtWjTh+CRj47dDoXqusIstFexOArUpTqHTaZTsszObsAQ2eiS8Sk0fKHEopYnCsUUQERuREVJuM/MJ61Rz+UHSuJC3B061mvrit45f8R32RTpd6f3HNWzhDFRZMHfoXtqWseFlPahsdYLCeZDS2pjyV8/bRIrTL2Lkre3zRAVbsZtCWFlKnaCqJWkJiu2mvtmPWF6A/UEDgrHQI3tcmB726mgyVeV12wGLdvLXxfPRB1SCBGb8ijm64B7TfVUhFDiBISoH1m8NHHN9A4SWOcLyImrxfzateHwEX7rQjvSlKZ0VMblZh2sie8NeaU0C0W5Y8BzBvk5crCOEcvYCdhpkHV44f7/xsNqkoRm8gvH3uLRlq35PCClz0ifRmDd9U3hbYc+V/cZApfGWwM7bneZg5Q5elPwlvVfy6P+xFcP2XruC8LZuRN6bp7Giw0w0KvQGHpHhCDHJXanlGuZ25kAEcEDqRIAgSIDPoFQwt8TCA2bstOvi1F9o7mBx5sgu1OA9h39rg/4XvxFwU/sHPxlppb/DEYv7+Wdn7zFvyRx+mijDjo3t6ut+IgIec88UryIhLqTPGbYshTYZXKEi9XjkA+nXm1OWxpda10391HiVdri8Mdh4YjzXCuVo/eQSrXtWuX3XQRtw3L1WlS/BaGBTXo7xWZjkbGZrInc+xWGU/bmLKicn/9QO6ic1Sy+8G31Kbi4cVBAPWInnDqtKoBFiCJuzMiseYwrGoTpf4V4yNHTlhGDlqRE3NexaRf0XOdQT0OtDV3wEm0ueflYMB8ROceYCj1URNXOThwXunPU49ND5r06UeC/VLpR2uDuycVMvTAeyiajK6hf9DmkwiiCjmszlRrlTiyh4i0fCn/y/g/ohTMXP+v/aysbeFfC/Y3Yuw8LuRMkokpwdEKbKL94yz3SW3Pqy6TzuldJbWpKOh6abKUIN9+dBv4bip9jyNGfinDW8wM8JxK54Y6FARBVBtcH0Z4/JON4zN7o5FRnat9iN2QAe0n116/M8hZzvhM3Dy9IRKrJ6nffhpaPXk5RK2dV53x+RFw9RUQj8g+urP3SkM7DutZg+eIoOFa4mIQnhLDgUzdzPbiasCjvGLflabphEjbi7gpTM5fOAqlRE1e9NcbPlfkTRfiz1XH+dzbt5zqLRiTCareaOIfvtFMPuBQ4zRgIxDB66cQFtGs9FPYPBohgmipwxcW7gYW717tVUz14HKfnaT954cndktOD10wv+lq6uU6/btrTiOYenqKId0CojPfAOUAXD8LPjQgIj121iF0JnaD3SpRWneBUwmoRvmrr3ls/fbbs5vuZNSLFT2Jc42MoXX4qmdED9Ui6EMfE80bJSelRJFYOjPqh67VwmAzjxxj6C8FcDa4mEnZh4EMRltYWPLggW7Wm1Yb96BxIQVxiJvWx+UI2G+uY+IMXROIEIaORByRTwKBjm+KEJ9GE970kAmJ8OPvOvI2cjPITR/+GvNWnVYOhokAUfJyot8EF6eN24z2aq9mLzeNNFpD2hRLCtSdGLXsLho10Old8SBG/JGMYpwhIspoOrVTDEI0ZQt7kpBbpBAdiukbOZBqCpVYbapD5zR6HPJsfXnxzXiVzVh737lh9kIYHnhv/WEwgSkpYzQBEvx8XKqr4pS+wcJt2WgF3cTvaZlkKjt9JAqf4cv4wDl3KfYKH8SJ4AQEuFCvP3B6/JkwHR4vnpLQCl5Q+54cLzgLKJhbWrJLhwM8jGYdd9SqpzqGwk3CU1UduPKnj8UH8YVuJR9GzFlxfkhdUJBJxKxRzhbpmjWHlAJx/GKIEgXtHbs3neln2+mMuNSEXp3oJxVgNFMpXcZiL3K902I0/qCU2rmT/O77ciY2N+RvT8oUyWtyeDqyhx7MsW3/HjC6Q6uBHoek36oSwp7dqckr/na+ZJYIrRMWg4orcWZd5MCTMMSLNOjYPHrAPPpESOwDKT3brD8aRC2VlYEBwEJRy6VqWqqris8eJMoIa5qdQ83CWSenXRRrdHRGRcvKQ4/fUTGSTWeBi+4ddFUgg3YPtxVrIvZ+ygB7m8JNBUgW0tY8b+kdu+Stp8Gb30wFhCOQms+aQE3z1s/cHSynFZrc6+9cZqKI5wiYp2w2Lq7UiCo7MiMKmJVWplBpO7ce5hxFa4ksd6yj/QxY0mMyx5bh2LpiMqblReXst66LStU8OW3RYxdMGTLoIMXOaxQr1G/owBooGrZWoFXM1lXIMKCcTzsuoNT9R079t+i1iKAjsC1a1QSaKwOSGJ0ef6NNlimsmf8dEVNZNd3fHNsjGIiExtUcRHCh8Noak5N95nVc3LIZ6Pgg2LySoOYRejhLpgpFTPTJyUH8KqPBh5j+/IURnclznZC6kzXXtxZ5WhHBjaylE1OZ41kZytwONjwtPW4Ev1ldLKjhVQlkvvQ/LOlLpIRIVbOBED1nysaHnuoo+OUnLlAxeZ4vXX8jLn+tjZTLnpvsojkoAv1G1Aew3Bnve+M39rIOiZHddT4JZVwPli4HrsG8TsBca1Ix4pxHy+AGFsiT5gLiXUMmFpcVvfD0hVYvqo8z+zgRcuHphT98UfrHZGITgAAABwDgAAgktfbJQPhH2TeGyL6oDbx7bHCtn+6bIKfHPQj4LI/mwmc0R5fDzKgO0Qg8Il+7Y3vVAjWxBehUS5GfFpyjAC57BSFU3ZdStV2dwfvuocipYd7q6GCq7RDigBW4E4+hcqG1SQYNcB2M2KlhcW28q0hUfA/kYQPKFG95v9TGmpJ0lVkSYQ7ZrIcY79fwTizysAUoFgSp1dRRUAtBSAV+KUVojnW2DvYQt+U9nHWsp1hzUbyDQyM9uKg1Oba2vmLmqLigIYK0MoSuxikCMFjFPb9oo+6JDy2yoQI3dUnOr7AbD1sxD6fJ/GfqNA94AVy8Z6Wzu2IZcdwbRaqPAntRiULd3aRjfYtKI+5Yb4K+a68hquRE2cPmzklB5fPrEMUpAu4Ja+6kMk+LyHV7Bac7iN9gbkaVU/LKOLEKsptbPeCc/nLmLiUYVJ4MvydtEfBtQXI0pJH6M5b5hf1YvRwPNccHUqB4mTh54tNSML6o8sePiHc3Emkh/FPZUfq4Q8e8cCQU5g+gLC7j6axHNTypWOxYFXn8Xd2kF8IQcxa3Yr/RMSugKHKkQsVSOhhgcUgJdXoasOhgeBzPyZvvAZOaN+crzeErkaZxHVqAgBfBcNpucheCgrUHsg8P1ljQOKk3QTOfwDeqrdjmGxpGSeidSf6t9IvmLVMMdEdZ4uOzMO6XIQvbY8Y5QHm05mtKhs4ImQXc+aDw8qwYfTi0ZprszE6/Klu/ZjpR9pfQQ4yRjmGRxEIhaDIbYwcXu4QVmTPC873WVrwbsHWWfn9fMzEVNjZB4jYoCbbPRwYU+Rto/dnkHMUfrFj2eueDSV5peq9uazd/nwYt5WEXxHYhJS3UfZ7irna0csoprhg+CYqzLEjV4SwB1IxgeYosxNAOKydd6W3HYG8XAc148ihYypagqrCJEdwK6Yjt42B2BWaC836uXIlHdsXuHrx2bdnNPZFFJZ32KwPiPihdd/hut0PlPVhj1fQE3kK7ObRd0a1UEgacog4i+hCpiBCPDYz+vQtUNuTyaamsJ19UCYiSEIlLizrUFAvOFMZDRp0XCBt53DTc7DcvoYU40P7ND1y7h54i6ffWwedtXKwG9RU6n3xsf6UgnbgCqHmzPKwwey2fUnX84FbIfZ7aZzMDz2gyvCH08JgmQfvtbmj0WkvQkOhKeFmHoJ9khR0YYWKM/D/KtVQRkI2tCawfgweQPYla9EQuChWwZoSuQPkwd22hVrTaGM8rJU1wSplYXK2mBcA5/yos9zxW2E9JExYOERPBW81mRWKv8XjaXmjDHpTDFb6nQA+4qsuiTE8JaPFi4Jw6cGLeqZ7s944rdep0qmMqt52ag0m16uRUFS4qSyzeuHBCcyHQqJAtUfmZWhNdx9xRkdfUnEelQxhyYWRtMFWC8DOeUUDnfbJjYY7/4Y2EPxmtRIvfa2xglQMYRMJrNP4HZWENXUC0oFxSsOIH61phxdL+cChfbn5YIENAJK/w4MQLksdCx6pfK/SrFUO3o3T5I3OI4Efe14KCdaz/uCbXh6PTIDjZc2mYBtqWK0q3QY42UxJSCqlUtKBSYlvJuF3yp6k2VboCi/e7pVneuQucJR4R9swX90wj2Qbp85OrQu+8QAf929qJyrk9Kh9U7HGxEVXR7mLOZMZYsJa4Jb1AzZ8GfcxdU+HttPXk28WnMx0MiiN6BKfaU5T9gRwvWQ2m27YQ6Gr/eaRU2JwPbStEvEUZFJBH6+It+KuW3kFCN+Quj3nTD5cEAo+D4XMFZiPjkcWgbn9FbNDjZ9zxofq72aqkxVIfqnyZFD/LG+JkXZjYPeWum+aTLijbUAWxWmTCl/ps/3kyDD9fP4x2SBf6cj0+fQtYowrOmvkT0V6hdp/X33uZt1xaJlPwDho8iCYsIrCTKQD0QmxRSaiHeFXG+SabHnTuIbX0yMVM3sDfNUZbIxrUTxM6l5q8uGdABjcxcaForpBpPUEn4dQneaZOlWnbdMC3I2xMOPTIxa4fxCYqLp6Q1IZr9lw85qy1KfIiWDKdCa6s+T3wbqvyIfgXmeVKVWis39rT6KZG8m7WPUB31o2/8HqK02+kbR0smuj2R8fDhsDBskK1QQ0Jgv4KMMz0K68Jmzht2kKG+BKtifa3bN1neXtuvE4pHgHqCpVdUWjta+iLdYGWkk62Myl6RwzLnXH+sBbrGBiZmlujJBwWH3+MvNYdT/2BTxfsqd4HQrVHQ1vBcplenASpfEe7KJQyoV5UvHFbOzoF5GdmVcMtR//p+mU9giowZu+n3qeZ08UFOU0CBEgMJtQ+adysoWUi56NtYC1SDx+26JOMbI/YsCBJcONu4tZAud+pPnvCr294sV0XVEFXS6JWoHH2HAJHxrDpGCLPlymAVdI4W0GzHwnitASDbVlaAxFGKunygSl6lfJXtZHHjV5wmx+2SfUzFNMzpZDF8CGcvvmcMQWn1zhwYJBwjHJmBpduVxsUeW0hYuA6ttzLtTWN2cZScR/g6d1fsP6dTCnGlhcRRQeKCy1nkA8J1XBXBsuOY7y9JG6YUMiEm69+66k8jPQpBnJO23A0XbmKqLrzjS936nAKW0CpTYzSJ40zK7kQHIhCdZDdUU8B6zkF6tuba0c/0kRnhHbCzWxQsDobvkPcnzpD6oFQMQnSKOhdHdr/DNBVPhs7arGAH2M/eq/FdWRCHtNiLCyAsQsS8QLm1MqZJtDgLRJAdA+BpItaQ/MqZO/MEJQyA3wBwEWRKFDLFqEHGH5dc2IepHE4FAiG7UESOKZ4Y8cTWKq5ShQjbbqwjqcgMlw2XQkmn6mYNhWuyHtRPn9TbOvBwF33kejzRMqRXdo3QUGx8OQvIwhfpmlEjkaJy3jXpITplsaqAmJYZmZlMz3ipvNC3s+d6XWNq46UDRRFxXFWcOdIsZJR86gUC8txT+ZoAi0GnhCAHzKE0BSuB5QvIeyBbDGQTh7BoYJZQGOfCDccT372SlG7cuatER4w/LXdZPCoRvPBZhVjdMrjU+NFnFlnm+2oe3RdMXhW+46EyvccFwbEt9RbqeX1Fe7DBFjvxbGzM6zctRuZBY+kMSEd6gyu1DAOfh51HjZTx01SZtJdOYN3bz51Z8RTQqih6Qw97BoJz+N0QI+6CKG24EEnevmhV3YngLZKLjVIlPtRLsy3AHQo7XBoU9m1C2k5EVw3KTs6IIKJ4rUwBIUvI0hngP7C/qi/VyuVEdBCe+jpgFNALRdDkJWF5uku/Ta/UhnVrdiDtApQBylZIex0R9nnD1cQrBWd/Y43LP7ZsPwxt2wGk2aOkdLBSUl3oFxBtsk5wzbfVCmoOCiNl8AlHC7MkXQMfW0cwup7T2lnJURJq7gxC7r7MG0x/fTAYgnT6zvhlTWivksGSa68EuY6+ZWIf/eJvVc4iNvkc6YHww9WHz78q3hpv9kp2u4LTUllx/y0ZpaUDuvoVEAr9G2F2i7ERmNpsOn/VX48Shg6qn7Usl8wyDdgzuntccbFV20O5voJ4Lt/AmfUoUT5BsxZk3UyLemuupEoxalFbqlpMGmYgoFP95dSRU1F/f8/XQn4F4jSIhxBirFYRlVIPIQT3jdJ7CyeeTrUNPBekpZdLWyBXfCJU6FdDfmvKfaahUMpke0A/gHqMb5p/4v/GPZrB7mX1b+6jVHbYzwu/7HAyE4V4KyO4vWDB9AdrVTrp0okKkxlEWSaa2RHVq9xkrXic4Hb0VAGFHeYi/o7E00bIa0D6LGDQ170xzbXLwaeYtJoC8l87y9O0f5xsnbt2uVeW9u2wlbOdAIoedRhYr36ZpvLaB2h0q3Tni7mXNZxKIdMuvtcyOSsDHVJaZd9gcEbLtwHU3MlHbyBk51EQnsk4+MbY4c3dOyA1tIh9wy/cBgaL5wtSv8lgo/XUZqg4ea4lkytNKKyYetDm6VqvZ2ydRVdeP+C/1KDKOT4jPRmZq4p/rdr2VNNXDce+VJoHIPkhdAq+Ye11ogZe3bZTODdAUCgI19/SWEKmZD50C/5oS79YtkIGf0K/mD+cgcJW9H9RciiZlcFnuvBCBex54ew34aV7YLYZmSRfWMFtN00c1EY8ApALPV+jwzWA6ti08lfFNMR/ALaGD3bCyy4VND0DNanqx8QI+45QoVGtrC+1zqXcrDzDlnSLyFgsWhoU+eI1fnnkK7f3KYRUnohg/1nOkGTPvliKVD7xwhulM8FbWCDldFVlPfst9raJ4BR3InmdskEKhLTkcS8KVhdFasRSQ0+bjAqL3TsG+J2XchrD3EJ61Z30RsXPokxbO5CPas7Cs2sEuWsPaRWpi7nKCIlOlfIFyr42ricL8SN0a9xUUQ1s3S0/nCMRwbbNlzFsGbWEH1Yl0dNemfmyiZPPdsBc1aj4OGsj4/60IkIapIwChSaOws9+nNy+4JuJxbGj2A3aKC6ozcu/1vVmZuRyIpyzGQkNhWAo0GPQE6KQx0QV12j6MGAti2xk/jUeLKMkcW8Y69YNd/AzVT9fEokncB4AWVOnN3fwiEBtOlZfXP0uzlX9BDS0EE/syW6yj0cQU4SpyNji+jm1iejKcawd/FfVoNeOZmmSiFG7fZPHBt2eAUXUDe619Qq+wQ1UuOPCqndluA8lzyJLaFF+743YJ+KHRnXgjQBMYwl04MibxVD/uw3K6bsqfBVGiVB3iITeSBzIfbcQtHN0e6AI+5LTlNHOskALvCbj36Bz4QDkolovHCIN0VRPNk52vq/Baeo46gsEwbA8RIL0FbNaNx7kns+1RoKSuv2Ufv0jwnbRRYZHPHTSJx/lnwAI3R6nX2KFWqmCwxzypSOpASbAYnL3EPvdDuZKuhuMTdmMQmn8/M/qSjgNiuh1F88GrgX6hQFouYk21eVYddONG3plNY9tOmTAjcIkhAaLZMfVMmbwpiyukcaZyZsq94KllrX3UcjS3cocvcux7AAAAAA==');
