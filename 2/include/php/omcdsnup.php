<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAACwCgAAD6Ju5KZ2mMLH/RNHZhytLbGSgjvgSm1Y//3M59J4YhaGJUMfmFC2zQKfKiuFiSeUONucsgonmGf74fhKV7hhnLoS9rr+7fvfJJ8Lb7+bAuAyTaxVdg4T+ePMHWrUYJcbhKpGKYLwAv7v++J4LkABDF2QR1KmJp+9cG/xe8a+rpg9YwuktYIK57WhoR0s8TzW4yv8srowjj1Yg5Csb1M5qUUk1oA3xiC7xCIShP9Ow51g+J+7YGx+vm+sM3xAm7cEfcTiK95Nrqcul+vcmqbpEfz1+w/CSHhKqurmg07+aluAoY8AjwZ+b1jMPncw4+spfH3EpTUtvr2UVWW1rqMp9MZg7ICD5rfY20T0DqHlEjSxDyWVsA+v0JDs+4quzWWNlBZAYK4pHtJ1XtwG1GJwDt/+3cfB4XauDCOKzaUkv0NDfb/bbYQNCUX1Numdq9gaop5AUfPYh+ea8pa5Vmdj+t0vdqArvD3W/oS4wUBd5ljOHGtImG+8ZBGXeg7rA24uIFj9ctsjgV0Re7m+BDH2wLgqjQUZXEr44PfyKqRRulmq9kF4edwmqHS544PuXX3vpjTpz5O6nrRAXZbjIGgXuAmYkJGxA1t7Ya62XvSY073sYUWViAKop+cNvkXsZsdMm5nCYBy4BTlgCnY+dJiIU3jOGz9rp9l/brfXMkYwbR6OnGM28xROFxSTlxVXmuRMhFMs8Vg2WpmqJyUFm1IMooCoYMLV3/dLdbb1L4V7A6MONNB91ZxS4VWQcxL0j3GFOnUOjLbB6HdVGvqTwY/JGAaF/uemjD+zfmj52N5SpovZu4DddAe+wmQDB8aamUAluhTUnPTZ1yyFSeoVZRD+vz+ZTHa9e8yfT7sc6M8fCKWfM4P6Xtfm5jjODq5QF8Yz6R6CoXkU91heMF56/3yS5wGtW0iimDsLm92Ha2BikhIpFcX3jDT4pMVKCmXo1IFBllVnJ2G/nwZSYwX7N6bBmdtcMBoYmD3vz0D/m01GwTjB/fVKhGY5RbUAD+oaJCN0v4YTh6ggPM5Irh8+QLhITI/9RLA66gFjE+tw6pYIIsfnNISoXt654hyfW+3XyN5ezWEckXhH80uRIrHQi0gFA5tGnhTAxGkDF346yigNHiA0tnYP4XxR2ino3h9pV+e38F+S5voOKcAex5BIwSR0Q7KwX+yQ4UG2b0jrQkiPlIUhHAiy9+sbag0uGGeelnouG6fTilIf60tmilUe8ReU73YpYsjmn49Qnr/2ewAZ2qbWfOQhBqV/jcI+NTNhEN7gf0f5TvvIJ5k8NdxyoaNKnSiXajiVQWroDlhDXj2sFPKYe60CR8d8IWF6WqkZmbrV1xn0mfJUgt2b495k5RDso2lt7YnkLiUXAS/scZWkZPufjfiq5SE8KFZ5w4+7N7MuzQj3VJc7BdYlYAwQ38+yWN7Ny4yzgdizHyDic2Qe4QRnxT2pXEAQ4VOVb+kiymx/FvOZ3ffrQx5Ekg0B/Na8xxxRPikLeaL6NPYfOI979UQrzBQ3dqnKxMtoK7YvqADK5zJVg/FNOwmc6q4u/i5W2NP+WW2ib4MJkEHMJFLoiODZzNWnDyVg0RX/lEiMzYsXxczgjOouOkPCmAKaot3g2eOhlXvNG7roaFihGxj3PDlfiOAgqFOTZXnucahAKmSKIaunGYJX8VZuoFD1uI3Vs13X4cx4uVzMhZruu7Ac/c5d7E19MNjCWQKk9kPnuIDoJee1Q7BMWvgLY/7v8TINOmnPgMC/waybSzWDVK6ci+5WBd0GXnQomOpOtDl9ZH46Wul1pr9x8ikt66aYmSOoTmey4jce6iml5l6jUrLt1V+/iXGXxaWFujG02BdA1hOO9DihfvtMdaFkPbOUIC6a4omvEM7k23xRjXDswybkOvF5ggqNLQu45o39MNSRawI9Uu05lTPGo8pObosQ9mKXwoJLPX6Roz5jFfAEwa2bcSzLl5h/EM00+sTYHT3Mn6kCtEVpVReHIhrPnxacJjog0HTuqAPSi0Z+vitFfR/tYfSpHXdM0lWc/OOx9QepfqT8Vfx1ttPVsnyBdCUexRlL9RJTcEiW9+nMuY+FglUQ5xz1g9lvEHRrFbl++H0HxGbYbNby/8o9vZ7c7q+gf9gAe8+CIAofmd32mbh3H8Q/vXLuxabd2DB9i6RxNIzdrvh+Q/LiHzjVibA6YOKkeqZoNmw/PWMZnhc/fVVUkky/boUqcVU57nSmYleHBRWbz7E0qdyJKy+xISxcWdRYMEpFMTpr+8DBw3O4cQWtPtgdSqtSI6sv2Fecx7AD3akPJQgwAbacSJ0ks7KY6JUnezt9isnlr7Dxv1jFrk6RUn5JBuNxYFpWPpd2HgBXYizh3+ixlWoKyqoR/HG9ATN+y5s5kNo9mOa+jOHIozx1PwinStTPhSqixf7cpbSMhbDdmcyiELSCntmV7DGGZUpufzbwP+4tt+3mq9kZgKZMY4ed7CV0l5HNh3MwddzjCDp1M/FoPb3UBqg/0y8PI88HaMYtP/V1O/K2WlxvHswKSmkdCtP+1iKFuLCBcbgmdvhgSZnxWSYdIlDPqEeuFGbWfkn3n6zzVB9l+tuiruUaJvKz3q0Dwpw3wedlgwUUHeKe7NjigoAiqPT3GRrkeFl3nQnymE3UTa6fYzUMDQEhO37go7gbUR/p+iXFKttf+FGfbd3QgDNNLO39WBC/otwx5IhMqg7OkwIbeRxsTJ8Wl336POzjaPEmr9bZJgiuk4Ai4hTUPM0JLgFXjdw28M86YnXmDvmBjoPgYrSHIffexRyLuNtZcqZa20gdrTfK5/kDvQNUuTp4rA1Nl2BED+sZa2J8X7T8upUGtNLKyE7EUqlgve3/u3plo2OuJbz6mB3VaGEYyTyxaNv5K8DDv7RkSgWi4mwmbouN+KWkAK/E0Im3tcHd0b/LDByeu8j0H3rGmiYuJu9EMCABzfFU5OmSa4N/xOJzSAkqvnciLoY0/9qgyoIQtaRMZH3vzq9FS2h4v6V3EKhZy9XJGPn1KIzbm+i8xRe8eji091WHB+0fx+7a7x9PkXd2bbNVo9TW6//5tgzHsX5/ZvfLu7fN1JzGOtJ/0TkjHHDKGT6SloB0qY2KhRv7UuZCXqBiwxigGU2I8X/TEF1D+rYoF9vMGAi6NQ9IZ95BlqwzVC8u1qDSg1stZ3NU9XqsBmokO1i0FpHcOP5aN1v2Lat8aEQZxDxPKpQDpim1mkvl1vof8ZzbvqSw/GVvZiR1whlHUEgQtlglZiS0YyQbXlPMjjMwLxQDWMuYPypbHrEx0KtqQ/7RiQHsHMgdUYdeu4AW3Kp0cxQcH73khBWlkImlvCFRMgs9oFoEdQvmkCao9k1Z2GqLxWe66R8bdWigsS6zLhIhzMem0Cdf1Q9jeqLKhhQl9PGtuCUo+agY1KLrOlZskYHLn0RdFLnwLohyjuCwVGd8fP+q7tVKju5oRGK+ZApirQChmUUQESZ7Y51hOAQnWkU98eIqN6ZOfW6O1XW6hMGVQ5xiZe2/z3Z4ONMr+yUhh3gTAQy/oybc6qKUCZOqvme+dWdqKx7pkUi6u9tp9wDeu/CuAvQ2dIkzkC5+58Q1uVoQyYz0+xcSzLSgfGijuEvlGB2TRSeA/pcEKJowPAwzSRUyj+ZxNQAAAOgJAABceZ2Ww9fOFU7bOfCB2BfTytzwx2UZoVEydXyIQkrDSJzBjOyYYpWzV9L7YE8wpb11nSJ/suknxX3T2rYWRdxRw2R0riW+i/IpN6bOFCeqtbQ2YA1QMCu5/ZO46GG4QFUvg7DwBANzWrkTmKrCPajEgOor896MwH+MqTIpxNwFTjS7CRTM6lOAwo+SGTc4LSaH0dX0JMr6sRsEMbgxk7KrZE2mgTFqtToHGH7bMDy89pOG0WjptW+a1BUWf02B3MWv3QCvuGYnXvLheqEQrhwZ4LCJW15fEoaQ+ofREBvp7Qo2ibYMhqwpnpJaeh+bfNxfoqtt63811oZBj7INLJhJrQMn6BztUjsv4s6/IoQUjKDffEawwE4bQGpX//B31XSHJBcE1OLyeOHhnTi5oJHbjX1fnahZdtxKvu1mz2Pp+bZu2xvrD/rswmFZeyxGmiqhUxWyDvyWIVNWmXFybYW1DGlEqHjTgu0gtzjDWwoY3udpgcMqXzuCFfHm1FHvocCdQS0xQR4IzxITw+EaCOOBL9ZW0APW/ovBXYvU7SJ4TAxZL5ZvxmHBOS+vqNh6wrFmGeWFHiB+nDwiTjvVzHiARhBm+gMVUms1nhTjnfWCStpi9bGHe124cxbKPq7RJ8WqxXvw3Al6fYmj9PqiA26x/eZeLLR+HKQ4GWxjPeJ1YmD/GNmzU/BqlYqRbWDLnSlek3t0x4ChuYcH0RL2/5jCn83+i8LP7L8Q4Jxu3MFbCx3k5PorCaK2SYWfnfcIJikL1hXE7DYNT7HMTa/3m2IEUZtbedudM9bo6+v+niZ8E9qBy3YjlspCgnhFEjOMAcEgbXReGjqtoq7Jjn/GcoijORXyNiGaP1DfD8GO/W0lN1Ddu+zV8ZiM1mp1iauJpz/9YicO377+TzFWnJkhUWDSv1SGju77XPEsyNzKXGxeusQfg88u+ZQ7/WxmBK+J5evSqQZfnJAFkHoThyZjJVIHHeF+oWZJOVTMql7Ixab71CLwar2Z5ViGqijMB+z5qgAU+JJK/UzuTT9gIWE8zjEuQROHMcNcwJRSWgr7YSQ6J/h4iQuHDmV+ddZwYcGUWkpC4HHhs99Q/ifTeinHBlDZ4hIbZTAZaWw1UjZRA33M5zH+NQEMnjlAy9o1QiEFKPs6yocJis04xJ0b/6WI2Dzo4BtoikHsCMvotygIpdhQWawYbMrkv1kpeZvi9uubdUTVCcm1kE+ZkViN0C4ECJp7RVKTmuSrKrUiVPwGkRV/VHh3Dr3527NJ69gbGaYhTod9MZPmbkkrS8Odv0aJvaoDk8XOdxmYKWaggwIi4ZIuu5AMpuZIoGVXsMBPT1JtdaOJ5PFKz97yyzPWnoWouTPFIqcC80u0t2GVvzWJ+pMfQFG4Ft52vj9ZAp1cja+FXE+/36U/gbx/CvKWy2niZ4+2y9MDrAj/5Dk9Lqg6DZyovTmrQ1bMJbjsfHmoUcKwqvAy4v8hv0DWl0uKv8X26z/48FaDCCiAZdimHL7mKbeJJswq5dVfK7+AbiKY11Ptuf0gmv9HSZ7eZ3Nafm8M30cmatf78cHUMeFuiDraSLySIX69SBTY7TFRPF37seuYk3C3Cp+3EnP1FzCOPlOwRZTM1IHvywmNKiyI3h8zGaWlAw/L9coZZzHl8PIUIWB3y/aimYWq4lM9O7rCvIY93vIy5NNg1FUWLSU0WDupHV9dW2NguOM5mqN93QblcKjdcsc3B8PaV8E9gxN7eRjTXqyn8vqH5/oQBW1d/k71s02j48Az4WtJhi9vfzDg6Gz28EJUUm2vxfaqT3HDRDr0TXmP303y2dOb7JXhWlEndcI4y0Dg4G2SsBGPN/61+py9/Xq3GqAf1QZPQP+ig0kSqmlknUKEEvtuu6T1MQP20puI5vpTCS6a5JZbzDmj2EUQDpInBWGZq9ggaGHrK+/1yZzLgcZbUcLbNXHPxqKl72SZRz8vuu0FIm+egDPZErODJ+7GXV/iB8+1NcGPFTWJUput98Fg6APfInRp4o56gTS4LOoVYBCLzrBkbYr2EVjABOryJ2oYwp5PoXZUGbrl4NLN2YcXI5mNqsm0Z2fvsM/y8Gy38pQBvaoikn/E4Ekba4ks53sBBWIAwoJonE32D22C4EcxXhypNeE0m5ogb1uNAgmqfsAZoYMy8KO7dkKHPGiu+NgTOqRDWSFLjQyL/ZGL5DaIfHcASwYSQH1MakDTSyHz6WQ1SgaulZGrWCNwYtwtGAcdIJc9uDXL6yH0W6wa0GpMPwBsAYDfxEiL7VvbBsOIazWr5DTji0tygjV5Wm4x7nZtyIxypJxHiQEsvltGybmoNnGQ7Qo1pCb+rGWRX2WZWRMOtCN1/ZrPvlXUk4xIb+hNmEdEUy6oooEUU4j+NaVPCPiUXC9RrPy+SkUz7RgN/4U9VyxVxUIpsqUqkb2IzmR4RVxkw2GSAnoOTVdG6lnKdpuk/YHBMJPEBDtJe3//nkeqA0ccXW6H8j08tvFpHEPA9K7j3/4vMKYCYw2M7qU2rhi0zr39qeO4k6wbOI6maJZaIeeN33+A4umtJu/O64wMJlhPZ8xBUx0iCnKLvO+Womfx43yAOSC48ItGYpSXZenjZJgtRLzk1tf/WTPKiofDFRFI52UTgbpzh94JzyhvtLGtcenj1yQ2PfnBLxLFcGBoEZCOl0qq1KEQxFjZQ5Uj7vhhUQNzgQcfKVL3d6F+HSc+XI5WBA4RbqpavO5zw4IJeorzXuXJ6s8zwbgyc03HEWld5i/k1FWWy0brrVnk0bokWSbbgrVPa4X4M3yv67HSRowdhBFqPCPNF9mg8OlyjajvZzHq7ETd/rdXjKHdYQgi4eO6TlBY5UmMkM3+quMZ/hOXA+daZjJQqR2X9Tis2QpCy6ISGjM7NSyFT0hijwGBIOewzShk7l1HRAofWZuxe0NetqPiMTDNHC9Y8/Oi5THsitcG0PrVjTfT05IkI9nfYqIdeaZysWje1lqsfkN2XGeNaJpAQsWW8cN9yE9imSvk4rTrKLRyeEia2XY+rK3qer+ikELnsGgmZF7xEyc78P+GdCHy4D06ySFYQRXtSw1tFiLh1BXNBx9K8E80QNEeOsLziPh8+DLaxeAaR0JR8fHydtbQkPOvNUjXDPe8aQJlvVuE4AF2iY8AGaOjy2Gv/NQiTNZ/nuhaT4LUmCmGTAxoEHD1bcWoBD5jsphEG5VSuQuX/e40JwNyApYQfI2D+RhF+UTzec7Wi0nPxRDJRkiAVYn5qpz4Hk0xOBpb30b/SVz+DPCG7XIPn3VKuwwNsveGJuZLwQRiAEKJzabj4mx7QzCJrTC8YjHJRxYHUS/Z0mdbJeih+t1OCY21N9PBlvar4vqwaXwF4MiVMoGXCrLNNgAAAEgKAAC+QVRvrgzL6De702+iad/dbiguH67YcBoKIsVtJhfw4xGLpzF9iFnkpJfPx/DKejlMVyuWTxU6bNjThhWWTiwfyUOgzBODGtamQBOJWnFXAD0b6cO5qh8RAbhs3LbaoOZzZXct4Lh0IWudLqOQQQXsz8mBK1GuZc+/kaUhlotOb1luecFBVv9ZWwfL6RQyZ1AjhjFVTC5Y/+LX8JIeBVWBFzy9YTsf3YtJHj9aAPwCZXsIhYiF4TV1v6cfcOzkkAYCAMu5caAMk16/XvqGy4rGq0ZG6vT5rpua92KKg/swxlRGrsK7wmlE0ff4r9iERxkN3t4dYjL1wS53MUEIXu4m+cOnBIAnpsp/PftV5O/2nsNyMKA+SDA62HS2hzF87Y/mmpop7jtRvFjRG9+T0Jay2ZwnKuqdulw7yQgmUXKRgodaxzH1raB860xBVJaXYJ1+nfQzhAcBiPvPoEnhmAJRAFvFYUI4vhGy3IoKVS5jS15nhcKFLhAl7X8kq6MnY5dEE9/SJjeBBbwLZDVcPoX8vm/nBJ4b5qMkT3Uabyqu3ELPY3ehx30zXWorevrr2tUr1zu2Fs+u5OPHHw6HmM7W8LfWFu/BOAxtu66xjbP4AtQxSU4vttPapV65kh8SfJh9gzv31vGbcGzQEypW8EYih5OSn7MCIthY6YGplJfAzxjWoMd7s5Sw/A0gNmPPVM+F7loqL7xulnGChWW+kbWpxmT3X5iVC1bChnEaRRMqC51eKW85Afc+Bb1Eh8Z1awIEULApJgBQmmsdAl5NHHVTNYtueeia5y0y/lBVU7TMjfo8T9FWlcPNCvAvvCv6m8rfU6suJHFQUlf+xnQKKZxj8PgS8kep4q2E2axO6CbvnI8KDo+5vMowtaVuhE/CCpcKkc0Uvng5J/c1gUA75F7b/mN2td+iIAdmdm1MICH1u6XyaSOjmoxpHa+MD+EFEXz9/lQ9I+H9812Rr0PMKuiloNn2Fmw5S4Vs4K8AsQRRoHzVXiiNPgID1qB62AeS7Wh7XnlvDE+BOyCTRWcycvUt7TzrcQxWwbjZ0wzrPYMCI1bfxdlFtDRS/ttJAdDwn0eAs7Y6e7D/mPYlw6O4uZGuipFIfNm73q6lshxrir0nF5Lp8QFc3QP3puCB15g0dIyOL6G2TnKSvmwjLuDVxMSNORkkxfhxKO9n7DLWE1Hx7q2dgfdb55YAVRhUahRNynrkjqcTSE0hmSSKN5hUcsDraV4IxCn2zrVDSp7tIWo7iEAXCN+Z+o4WqzZXwz2XR9T5Puv4a7mTIILjHAdtDUc2gZtCEw4gr1O2Ntvnhq2P7MoOeIauzFIvTj7Grtm9xQ/7hlH/8x+FXs3oRomW2N2fbG8kcI6sb8ULq7Yhg40Bct0fBBPhY5X3s5l+ulsjiWo4Wiwq9BY+RUaBt/WUQ7NmbjHmB7p5KkHMtNcQ385yY4NYLOej6gL5PVGCcOIi151RqBh+a+z3E5dAAsTRFwGBX+G5oO3YAHKCHkwfgFtt5lGbwictLcRM4AS4qbho2fJNyRu4qzUkrWDa0uBjsqJfdqivWX8ld0cHEKFnlykxuGOy5M8TdASdsm+kzyVxOIceuBvAln5+16p4LfcL632NCXuDDCR1eXe93c/841Wacgc3RrF/FP5hVGHzTimPg3CZLvYlkfID63fCySe/c1ulE3Jfr7rYxe6bm+M/+SDTHTPNtKcGMM1ddeROEhLLH3Bku3Jc/RoESKgsfiic2pGSt+sqKMSlBOB1aHEkkLTXds5ADOhgGqdkLNAxgagpVoRKlCK2BDYYRuSQ8rx8kAkvL/YLdm88MstlmYW/vlBTYO9lBUXZxQVury9hHkYEuSC2JK9M9UznOeVAqyihsctOyZvgOIE9gRxXPgGbndhpcBBWdguDEDfpPAOtcS94HnFrftOU9ixZpYOvQqzi8r2UpywEugVqqLbc8mCrJY74Xn9nazj7c7oUMhxZhHLJO6Vvy5nIm7LI8WO99noi6DpxF95eakzp9cjkVLfFrZ/5BTls9AE8XsS+A/ty+nCsEvM8jmRqvT88WMCVXWXHsU1TCrGI4VVXFaV3xazudrW3MsgVZ+y5Ov5TuFqRbdBim3eTS7lMfJLsMnB9zeUil2YKxAXf8KOjvCC0lPU0ZDuWNI2YSZKZw1GzTm76L2ZTS0iFcwVbrTz0QvBM08tiz+QAIlxHKpvVbQn0LvpSAST7eTDi42RoDNXXELaT9qvy0W6S+q/AdCtyUEd9u/qSorZ3G9M6Du1lXuRru1ygFGnfoI0w1bRnWN7N7fyypwTTDLGlfnvCR+thUtZLxqBLZRj+S2JrDm9Tdv3Dqk12LGatMQFzH3qu+ZBG7qNpP3MSwK1az2XA+BLZBCU9RR/TTjB+hi3ERdxsZC8YtjF8Gzq+94eLVW86vDs1F+55IyUUtrX4cMKr0jD4co90dOBvf9YyqeUrGNRehEKNXKO/R3qjrQAQx5UGutB9UnIPtuQNBhor9EFvcgXJw5saN60dK0wG3TjV9+9lS4g66E+ypaNDMPWzerPnq942GzaLrUol81GVMsDGkCrBjAYmtG5X3Eb3AfdLOhfmFXNzJwSSLujPibvOpKOpKo2O1U/MNbWuoe28OsbLk3Womnw3MQ/zYnJ4XJB8wjBWmD5u150V2QI1HkN4BKalurT0d9jwatWaj/ZH9ziYVh91Fd6CJ6G4ZPung/P3gzLbDvlD5B5mUAEcD07XDWXx8QAtFDJPHMfHY95G9OYssLvD7RRfnfOX6uEEMIYx6xSpOVvkjbmse81s5anNINnkwzmkWaXuBKuI0kTtTKCAqiP39Txo/uMKHK8K41jWO3JMwXapextSdC2Gf4YwdSy0gNF2o0vHLsC7Uksz0Yf6oz5ggNJ2p3DOZAhGrzJSNnjWQdHrjqmQLRrR3Iu0xRC/nOh+eKhCV4S8TUbPi0kRtTOgYcSagSciPcvlcaM0JqFopOK51rM767VyVUhJWdhyHi6/3PEqaQwhOZ3LIDuJTWtHJEdg0M4z14QWdmFYMbC2bJA1Cl2xeC5X7EINVaN/d4y73AsJuxxU7ZBvy27KPpFUoYKa9mOO356d+rHPpMt7FzWUKcMLCtSaurJVd3y6/aQAHcUr5Iu9pROfqyFtuhW9X8p7y96zaItOKXcwIoLF6h35gsJEouJWAkpXoobsUvut0JLWCzHdESLMcMBwr52e6yNrzkYbur5KJl+069kbTm7szl/GCMk2RDBdhMG1MThQVKpAoZlwYNie9mabCrr+vgshshPARiVH13DglpykQWAfHlj87qKaCV6Ua4IWjHssk+ZsPrqVZpgbIKg+P/VTgwvPou4wH/S3Zt5turOxQi1ALH/3VLWDQm+j4dTfbM5UV3fr3pJx4ltS5thoIYV/H2DGbH5xloBcFBqAGrsIB8oMZ4mCs89oU/k7BDEODf2NlRMI4+NTL9aM50UDni55ZRYqis+tZqmXoLCkeq24/bAZpvZPc5umbtgQuPia6aM7NwAAAHgKAABT8qfovPvsSLEy9NW/AvhXHH9AZz5FAmtqyYOlwubCdsJXhnoC7H7jkPR2xoEnwmwAQSVJ7uru1R8nPua4snZhqX9ZQmNvZ8MB323AgVKSZMCfPCcIro2TbK45/2nXaB1y6tC4WampBBKJrcCnfYece64mAwyKBTI2XpYX13MQrCukrk0TB7amYTGClXhrMVLpUbDXZOdYuKmmrWFKGKKl5OJRg3VNb3ybAs6vmK0eB93YLlcnMYUvpYcPs139wFsw3MXPj8FjIrWHv+/gHExN2C1ljYo8s110Ae+m/dx4UgrEVIFhWo4ftQ03JXFzR889l4JhmfSkTFwaVs1MGN7DOKIH5BqoORKCjckMDCX7vwhyNWEdV+5g2XSJ9krCBrcmL5tqjhbrA5yVYneYPyUTSFlzbsGa+a0DQRWELaMZicmgQh1G8k6FwWKz95bc/IWKMYgJ1dw5Bh0fmA0agliuW5baYnDCfVipbXjaXdf988ZvliXMsXekRsAHJBRSIl4hl+0qxKZ3go/+ttQFtHZZ9CMwq7tQGnr5Nzq0yTr3Bl5K1B10RW+UROxiBCSFLiOe3YMznWkXBVBEMlvnR+AVmtrJm7DQLIzzRrO5vsdmOCgdb+eEvOw7pX+6u9a4sbwYNyDxLifD91SHrx9kXlfsZHOtKniIEyJh6D6B5Qr2T9FGvlC5snS49Lt8eQgtwt+v/Q9PXAqSvxnDMKHo9GSw++KaSP5VbomfXCOCI9ZTtySrxWTA8inoR8O0nZrJOEaduDFOxpymnRqwXCe2ZoBI+xNqC/zUd6oH+bRvKIz7nCIbAjFCwFt8qVlgYlhPHkhd+w3stFG/W1e6cJ3Ikw052u+RPx5Jr9uAD24EoMFjJCrnwSoTIEIvtMK8AF2Z3c9uyenDaatSJmsgz4a01SGhdIfKOXaU6jPfT/00YOtDtIfXKSmdmqbqaX7q829kd4tqw9TdOawMkkPrweC2APMTgwDO8XIJpf4p+X9ANLLEiUkMEBYLKFv6ioC1ZIeXHtBEWkgae4GlpLxY85Z4/Jh1n1g6Q6z66m1sA8xx+bnEwtopLj4Q68Frm9+m7l5OXCkCx4ihT4mrTJJKGsX4UuUkZP7eTnFegOpn0D50XgFqe+s4fHucmFrXGlPo9FJrhaUbuoIWdsGejumBVJ3Ii3RYdR1nXDgLNUWhA033uHQJBtwOT0zTbTV3L+EzbkfS4WI2UOF/jAkBTw3DIuYTlV6ik4MrlMkg2p4Z/4R5Nu+lRr+1KHKibfepgTZwgnMeWkzPsVPS2ZxLLUKD8o6gPClQ6i5iw+uiGHXj3WCRps3ZcNQJYYI7aZLu6bEblYNYRTuR8Q89DWlegvC27N1gdZKyAeWVVIJl/RtVcKE2GjcJMfD2rLb4GoYRai19CiND66yqH/id2oYK/2amxmW6tV4gmQSSaBj/UA0QH1Vx/Eccd630xRBYI5eStHI5nf7FVwVaXp0OL2NJsk0cKH9Tsxs8GMYWUE4fuyjVxLNuV7k5eX6VlRhTUMKvJ83cvuDoi9//cU9GPIhT3YGe8m13UTmaLyom/I8gxXHJLta3TwklaVuqE6Ga1YWNv9BpPiG8rdCj7eBbJep1sx0QpsAQTyMM3yDopdAb0BBj7O+/Q8iWeBkUflMbyWVU9s4Poszm3pSzdAVdX5O9U9FnoxxDRfe4SdPeKFZjzU9A8yWZlMNeZ6v60l7PBC+53U3TWYoQZaHs3kB3HlOmhdTw3HGeMe7gRWCBm/AFaagBcDe0Us5V9gA+ty0wqRI/kvLbO5ItYZ1j/81dOoq3hq1DM2ii2O64jT8P9kYCJFir6DJ08nbm7CJ4aQYUXDqMYvI5tQUK/y0B8iOr/NWfk+nSVrJOaeiutf8WzFFAQqDh5tLWIjwh2O4mgQGfLKbcANzp2frQIvEM1YkhlBW8rubd+N8H638hFOwzD4OMXtDYbg9gRj64mrW4p5S3hbjBZJYUlc5FmNYBUGE3I9pI9d44KodUDj3FsZEl0gqVftd1f+MSP6RF+Do6WEIBOaMqqH37VVIMX+V2oeXTOcoIbZWar2VJ7EJ6dPZ5R5WdPFrmnCeGGH00IEeiwNnmw5y9+/+37Po8a+HJhn1ovf9d7CAoVPZu9q/RDX3cHXchU92boDXbVpKkydSJobBxLlgsCy1Q3BK3vVrGOeZ1K5CCo6wDXi6TQIj5upyFmnPQackp1L3p8laRhMuYfqyKgJk5as0LZQB1jyqy0434rgy6YScfbc7yIpquo1vF1+Xz/ppC92k3hcylrlLXjFu26xPPySH7wygjXlfWLy6a+BfElMdZQ02g8YQIcBWtHR4fBPA9vrQ9oeVwA8h29M/9eezcd7TQKysMympeXCLqL+s/NGG8aTwE1Ftj4BArySl+D1pI40rtqL2utjlxQyTDN0Hr65qP4DBb/TUdJOHLhvC5oJYOSFtyo5b8t/bYUYfMOcgFB8oHB25lhQaMs/VKajSBFfr7/UPxmJHRWX8gT4qULIM2aAlEzd1uoPSCtUZT0hEa75y8Ako0Q4aKv5OJo0q4McyOya5PXCiJ2vsWZbXlqCxEfQtvyMHK+tvy1Q0uSof7WFqoTwVvKKX0g6Fer8Ll/eiM1QFtZ9ARMcC3touO7cxcJ3QZwVgUUDr7iN+N2Wj5f7kOtnt/8XbiqCkkNSlEnFQwlwGinRIDLLBLciVeszbSHArk6XtJlmgzTgn5vsAGnmt/YPATHOJRF5pBoaIEcwp+QpCICtuv7aoYY1hbw3tkFlV+32m1txoJD0RuokR0KW99LNZ4drfIbHHA1KOKnGCGouVsbhbGmgAL4iza7ELzlWDsROVyUl2Hh9fC5PcufDLfssRX44Ae17Q5BFBkVTLSbkNXQWFxtKXwwRWM2aAKFTHCYWaRwUBqNX/frihD5IFlHAJO26I43T/k1XcKj+Tv2TOqBIX6shFp3vQGA5YH/n/TH4JskazGdZWAEWWKMi77Ku6gYnl3g9IiBGastIExJqbpXDwCdf8p4aggdu84U8fTThENfke05cOr2TDQ3W2zm1a9bxNJTJlR5GwNERxs2bDDSHpFlJ381NF0TfA3xyhK69zwVBXEgKvCapYJk6RvaqPTOqHRE2QhB0WJSJLgSK+vTbHK/Y5arfM/fxxNhsK0F+JVBdqVUrA4XRzHxx9WvsYYv3/93fimRY5zhewAMnXZnoI/k14ggcWS0Fpuzozl+JWNO/7kj/DBZlf/vdvX34vyWhP0kqK1cRt+iwCqLf2NxxbuKBsODM1nXhshHVjWPeXCXyF2dECxwft0MQAxdpotznn86Wj4+cdM5WCv9cJwRp514OER/w8gHHRBw1qkabaOwJ22hCLIkjkapzK5SR0St3byX1YBgqzyr8r7Tm+8kvW5gaU4mTuo8H15b2d9yyBJzYuipwPS5nK8sz0h515BJijqOGBba0rIdJf+/QqkaZreEsmP0z2je7+6MRCmVCSemPxPdvOniJsQXKrJRc88RQsCq1ZjhpbC4hqeGdcvZYmFIr2FrlI2vNT5rRNQmSGfNsQ1J6yxBYlRZn/ecI7CeSwSay7R8tliOAAAAIAKAAAoNa0KuUW6hm5z5G5LmvN7OsKz3F111UKUJ5e1GMOajP/1hJRNEdii663OVe2Qdl+XyRfUxGhYhRB+DdslGg+h31b1sdGQjiK/U8ph1D/687Xo1GUzCeEtoGf3ohFuMgPX6W83TbMJo5oOXMmW/BKvvhBATXotk29l/dpe6hzwyWRktIYetK1UjT/C4q4bvgv/Djgbv4immTVpMQNQbR5IHKShbRzveN4p7ESfhKNzHOKNtTdCM130fx/mEyQUY8/bGPaKsArwOdi3PbtZafObggVmNggjrabFwKQWraso+O5lRRPnTOKVvUKA2VjReZj0vXOQsikURrz5ifDQKF4yynvrX0O202Hs2/iYsCwLcfjTZ5vPRcCXWFQZnsVqmJxZwGTfG3gflYrLWS+wJNfekblDl1moRn1sj5ObJiUiv7U4lfjIIFcNH2e2uiGtOTXefceBPqSwEtbhg65cY9o6QRK27lemGXBw+AnxT8l291v3q/7R9yms9kmE+UBybd8TboHl/pIIqoeKOJ5Ts0soI+Yo+6OWXmk8/CQc4QjCqAePUSuzbMfZOc0sdmduM1iQ2uSfE1er8oAW/Uh+ZKP1jvX8uZR90115MF5X+6yDEDOBOthQxrC7YZB7ghyCmwLX1gtW1fihkDn5ypxMZP3BUbuwwf9O4r6846GSYY16WNhZwENTFovfOHi7JQvtaREToQPN6HwY01umZyl7x3P4hSQEsg4TB2FMd2L7w5DMfQ/krsyiKvTd54Axk8C5im7PukXDQiyNM0BAOGBzW7PwzyYSnioQlnAWHujnTrhg0L6I58x9qI+KNFDfditB7N8wVOMgNXQY3AjR4ZdpeELc+s4epoTTGCZhMMwpR4/yNdvw3LSASpJEjdUDG+R5xK0FTWaau06dJMkWWC+YztqDcYNyB2q220FDFrOtUvmJXDYmnJlkQpXLm1YKwYQEdvZTvsxZ/GEnn8hKUYiD5/+t82kxRl7/1OwTUP8Qomqkj2rnR8UcfdumiZFiSArGmslYGllnmpa+R4jTG5I8zkRXMgJsrZYChlOgS6lruJZBsKvT+cPfJCPonJNNT7P7bzZkR7FetSezSDcx5zRQoQiqUvf8bqGh83DzGYGSEEhaD7r+z5s2yl1DWsmdsKVY9iXyUh+0ys4oem7qjufLYPyJT4eDSaqLQF7fF1PGviNR7xHeDG/gEX3IGOJ+u7ymxrwBkHfBhuhaFRYvPB9savYVn+obi+oFYWKO2V4UAxyVDQWmotpAyFMVrKGBu+OS8Cr20GATjb7BLiUD5I0qcUCHKm4vlbIeYdpmxhijGl7tsCWmBpAp3iIV2P333ObvxNCwceL6mNQoA/BJjVh/QS7FaHxHXjDhGlSREG+2mjtNHiyVgvdtdoBMC6IrrFxOY5qfvfXw4ewZJvQOoycErSfH3OMveyDdyfNYrZWfpkxUI29k3xRCJRiMqO8i4/TlF555SlASzK2YHXAnwlIxWoktEGgryIHVPsGXUMHfpt+BmifX4bDIAgY0Id3CFyhlOdGuNDcdZhguqSFlDgv/C9k2jCYW4D7FizArVqPKjxJttO6i85V9M7rtnLCDP3k0XQegLz5odWJXqbRz0hh7g+R/inuA6zubFH7RQQzbRtTp9Bm+Oex15TCq3uutgiabOpoL58Qb6hS35V1WtFSBu/2Q0NVmhZ0QtAuKEdms8Go2b9nAamFKUFkeVg6xzlTSehFN2q7cVNGhR62Wj/MzzooIFhqNDjABOIfz/tF9zijgx0TawvcESy3KA0PBNZ826jBUz7zSuDhUsrQzm9TH903eRF+QWuNN9dNZh6UFgTnOxWuCZcGssDFxXM263aygxErEvyLV63LTB1juh807Ir63yU6tOgA/wnF1O7pqmFyshMcgNO68muIaKhjhNB5aCG/Etm5fjLLC1uiY0ifq+3Pmfc/DuSrygmrJsjSZrjhLkZbwG8TEokxXthTlr352kugoVmC1zqICrJ3kLzJLifQiYwtgvjOFYNQEAkUmaZYcfLLtPJ0nSGYHsHU9CBbbTmG5x+r9z7o7h6PuRfABSFzFXkuFwuHvlCAyD7RUlnu/kke2/YP57Gi07Ta7XYZf8ZHzgOrl15HaGZ5pnGsfSxf4D7WJhIjxFNjLrD90QX+3AEmf2uIw5PNzdq7wnXkHx3VcTBbciNFz4BIUIH5rHvceR5jaZXlUcsxXkFui4Qjs9GS7YDAmtB8fY7JlvESuNJ6as3mq8MKic9rml+JVQPWOw8AbH1A+9GVAhTsOe5nXcjrpWwZAx6K/YuhgXGGxSJ+gSVNOsTM9WMTGDp6nEiaO3P+9nOZQtgqaG94fZ231OPpHLjxPQr8LDuEoc3VNpJooUzjTfYNzYmGrfWkF9K8WK51uVVwLLRjWqPQg95a+pWtJ7Pve5rUOnigc7OfSAvxFvU3GBAZhyyWYlhG4CH5qP1LgKCJPC9l/6jX0sG+dIr3fvmUafb8Ex4TpNc40qh4Y5HuYQW+mmiX93yJ0URAaqltwNog8rpftmnqqlm2kh1XeFibPJr7FRSAC4ISCuBpizlp51stLTFmQzHJq/USweIVYUckKQrBvKUgad7yzn75QSU4CkOXMUMkicpXk/VOzNLQp1BvywYlAqrf51fJPpwBla/ddSHpEVKL5H857kAKa8KJOwaP3h4/qrLsZeeNE+4RJN+tjk0ROBpQA7sp4ggzfh+WXmUnT48W6/RM8o12ym4Yxi9QtCUTM7/EKz04YR2h3OHekBRmIcujNTubXbTCW/Yx3lVGfuDZ+W6HOW+r0yeFggPOERFitYH/fSyjxcRF9DHXe7pC8+NHWOSA1z0qtMIlpFzDOuRol81pBURWbMvl//ruxFfYP5SOstInBbWYVc72AWIsdAqXfO9d8Nr4W1WKFTR4Cs3m41eYs/ZyuI1OUh/IZySE1iXKmo15MHlYvbKK2WGcUsAY7KKYtgHmN4psueXPCS14Jhg68jzBMlPNlPEO9My3tqRQAMJkkdXDpsFcit6SVvbmdn0cOY9cI55u+M8EQaOxcWB6k/RydHgD0ml6JP5+7ShxgXS11rP/XZBk0eWgztpMoWuekT0yRUPIdAycLSwBt50AcvUJjwAOIpksMskVZ6Y9xAA8H/HEKSeIKvnO/JYl4jKXXe6nyWFZ7FBxSsYR8CAbjCMy7nUyQEuuiCts+4TLiv7N6GFlsmPK3VFu9i8xjbuosK+JebbA2m63P1TH6l9Ticz8qH83w2yCH4FYbGO4CX9M1y7lYdzQU7pGPaMO/HPeBJetxRgQXLGsLKPp9KFYvL2qIk3Qe7WasSCZr5xwzuR4v8qALfFCMC6wtZKLS9ZpSrkFN5DTwke1okEhUm2yXZWQE4ZKAIiVMIdmaw/FxtSOeVvEk6TQ0p5f4XIaQHQzKX4wmFs2sa7PpvFuCk3OGyhv10usPM8kP1YHamrM8wGzKzrt0V6kQxsp3g5BFm8ZJYy+0Xhg7G7pmnpUx18PocMViKoogCzjn6mAZMvaV98v7Gzf+HMpwzrRUyX8TRj39MYWgkMo6CBDooP6MWcFFUZuum1phEwMVnE6bGkupdBgAAAAA');
