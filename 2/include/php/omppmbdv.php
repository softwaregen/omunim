<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAADYDQAAfSCm4L5BdU+lFmtUSKWE45D6/Nq618r3A0+OmXbRL78+bJxd1/P9Hzjd43Vcuo0UzjUXyiLleEH/wAir/CjktkDVy+74760SSn8+1cQDSeXyWtKHOOJ/IGGAcd9Go8JIXQXt0utVQlU5HY8yWf15cSn9b5A8Z9wEsL2sWhBZr+52c12jFYzGrcuBHK4Mvg1XHyBfbxw0pBXWLn0YvpNoyICYgOfWKNacD2lGxGoimTbSB5tQeGogzhHFhyRjigUVGT89W4P0ByUkVSZ/AMSy+1m50Sat5ro1z9tKAzRNdv9OVbKMqwS6QdEl846fPSLIa991z1ivOs53c/mgZw9Cdi1lD8zb+1QjkAvQljm2MKqIYhDf46ujGyvg/FxaVvhV3+xVFUAOizk2zHvKwUrxN5Dpaf3yUTmEpOKO5afa1k97wBmi5+QHiXiuGvHSvRP1ChZbvMeMA1m1cvRyCBsnGTQiX46I3MiIzPxT/qpJDntt5P8aUVit8ZgqwgAQoG+XQG+WgN5muYmE+83dJ0lJyisleaOOBajvxd68n2JKBMP+wQPczdIcpmo3DZ/QxD257y2U7wVZUpA/cj973KGIdrqJe+DP5L8od/3S6Japcqs1AiB2t6bE6LQm7YqalFvsRftmgeBW9ZCRa7I7ak6OXkAddupHLlO9U7PVZo1/GFeEBhxbA5tNxs61VCvg6rOvcWZYMTih9wFDNS5TXjJgJCEDZafsY1LOzgiT/clZ/uA7fupYCdusHTjyByJPQku+eBD9WA31RT5GkQ7mWCUSPOgp2qBS88bQzC63ItfrDc9AB5yWZBDxROY7buG3ZWkwN/Sc1U/f+S+yNDKGryp3nViTV+77SfArdiT/TbMpOxSqEB6foKgjxOfd4nJq6Q9r1igQqj5uDeO2+jH/pxWoWruXiS1D5egqxiXY9Mt7F5g2jzI90+tEKhqIARrQBf01aqtDoRPrQUzczibe64w/preFULP5tPvnyd9a1TFBa0KZsy27RDRJr4CNQQlboQtEXhnjW/iLA7KcLB2hy8h05cBFwdmqgLlceW3c+booXtyfTNMcyTo8VTg9yDabqBZ2c2er6XgE4/WBx8o7HGRs+atK8ZvRLiYW0VIthy6DLExxhE7WB4M/UncoEXmnAkrlVIMqVdfzSeVW0AMEhX5h7sce6a8aNtykE+53ylIUeyfj5DdNEfT2UAPLQ44/iyYxJ3+WOJnzgZD+wzSUZewysPSHS5p2ODt1+VygcRfya84uw7t384j9A8Nyt2y3/mI4Q8Vg3vW/4+Q+u9xRgezs88EFR9o2uvDgdx0EwXwlYX0+bfj72NUtzm9j2eDLH5QffwRX/15jtAwAdz6M2ZsZPEl3341wN1BLbpq43lr16RgIH3NnGcrw1OrhyWw66nlnxdyffIruK7oZn5PlcnFwa3N3VmPej+vzGmsHMehE23ggWvXrT21bWL4oSUePdJQ1JyW7mOtUlKH01u8b1hghmPaHxWUK90i47IV8+0kcEd/CU6dTj4tOcnCAwmL/z7t73bPNnjdlm71X8JZASt++TeuNSNif0k4tqsqDuwwHYnacT7ZALUPp5Qv208z4evUgIYgGddf0adWBSigd+3jomsXVTOArqdpB9RnlqiI+le0qvsNljOV3XZrbyO629aXSaM5Xq5Y6Rd85mAdnjtaTqToptrikFnbE6L/yH9uxzGgFaYqCF0GmvPzhz9LkDYUXBypHUtqEVO4BwJhEgPmeo069V9hHz674zE9tCYZ6UzViJCd37+VfX+L+F5BNu1QzObrwd3cfj4X/f2fQDwvQj9nbxiBuoj47RhNb43hf+bocFzXsuz2KHNj63SXruDwfibBBdGSZqnuyZ2FdFo/xQWG8FR/2vdyfFLrJyd1YZsMrFtFARKyFSGu5Ct1QPdclSXfWQjinsuZBnhVg39/OJ1vGd416TUuBU4fLeLSo5DIrieBuB4/I8ZwvQqZ5jK/xWFN+QfrdxgnrDk+65svGet263hDdZOIAsc49fxDYthkb9X2ZXPoV0tCJQ7ghNQjKWGKOF2/VYValB2Uzzydc+KzF1cHss6/23XTHZ97AHpv9SAdqgHtdqLtVvbnftnYLtmFy1/o5IHtVPibdLbVAEgacfHvcUoM5fFpDScm0QT2LQdt4PAN+CHLVAq+Te0SwmAoiX89fGcT/wjM66f7w0NcnjzIS0MootBshp+HzZMh+14d+Dyg+fyH6bpmoW/8iqFfoP9VqJFAIvpQnbsE+IfvLW1ZllLDHBW1gQOK6KMRn9KZTIRl2gKC8R+iGDjatIyjPxvRlgkhHxxUy7Oo1cET/E0jjql6l/I4craiFVB5DAiuw20l+eok3lgsrLroolrg1Ml9tivyZ5luL5fLNSfASn7FlYXw3/Eidx9A4z8/xAt7F28yUsbbIUNAYlLes8SApgdgsUJdrmqm9pLNJFbfYtPm3hyphBsekvW8lCT62BT1PK80epSsgNtnov3h58WjdRM/fAiRWB13XbQFbOj6mApUgiVN002yUhY9c5tpOdpb1F911bx43XFkwejme6EhpsgGPpWKEnAVgWqTPL3mvuFwgl4T9UUN7h8rQwS3/VPA1DSv/WxHcFOZmVpHaIT/2gOGwKaq7Tm88StGzE0WmF1KTwCHWj5uzuj4jovGFqggUIXfv/SE45Sr8Po9Fo8+bsmAE6tVFCkPKh9Kgp+dERZ6WyRe1YQBhYtUk6EDcWX1m8HTHLTs9vv8EjhHZJxwFAr78FV6EgAqqC/2HhtBzBK4OIKHR7cNHJyny0AZuIEwc+jqRCCVwd6qmak3FAdPwpTwcXRKKF4Yi6yKmyI5aDtvBjMQcXcGiDKI4tJShW/EFl071oak+pq3pKY+mIU2qTWkUYwxs7oO92ZiFVN2LrCOQ0O1rP/oHULYgWxgqR1VPXN/6GIfi6uQJvmk/pa7VsTiZeUzwS0Ys3GaEf4AkAO8m1FXXdKDwYSeg8RAuA8nTQY/i/XdzMDlwmtDk0r/cBfyEtud5oTxg9qKtbUAtE3m22UkPCSNbfusDqzZqbVT/2Xkbo5ULuEFR/4J4xbNihyWNlsVoIoDsoyPcc/Qp3Qfk4E9wXK3NC5IfFYOqbHl5vGVHlUUTLRyiyeDXSjaVFU6V52UWE0G1UHRJHsnv0LNKCERKcUcoyHiP/ujN7T/M7XSJjNpttY4YJxOQf/GvIrqSlEmwQ4KdMZJe2cKpSNdVpVq5K4i45gEM/kEV+X80QxhbssVQyGghkoRJcNuXMMLODlOYdqf0XdAZBg7PuOzInuB41LZb8BQrbeFkcScqSz9LWPPcVCh2bjg0sjnjQDmi3O6MxzLnnO+CubtSr181Hl1pMnfqdAPns4/qJvQBEot5PDklerg/tK8WZaHKkD0HdI3qN6PMtTP/ePqkFiGUyzfH64VZN73JkiQGaNZ4k8Uy7qNqmdepBMNxQJxuxWZ97PwwtXA7WmTfa4xMFafSQ/ZSIi5M9UYF9F828C/jIRas2YQ2cJc9J3UT+2/E/VRh6TqHZGuCJBJj9YsI6fgKbnJaDuRU8x1z6lNg+P7SOp2VR+dDfyhftENehGDGutOcQclXVQhDcxO3JThsKgwI/R2HtXj+ZUNF5vp1sNCW65inF8hp7iGd7oBzEcObIn8V1Gyoonv9kwZzL3PzBBxt0Gs4hVfOaja64EA65HrtYviwqw0XeTtM9BGsf4omBkRyh00GJ8MtVcrTj48xQTi7UAjCJGuNrK/2L6CjTQ+4XL0Q1ZSEhXngsZECcsh3BwYaYk0t+10zMn4zfgqZhwTOjnRarOCSUyZsD+Z19+IwpzGqR8MmatzCIvY1oSaG4FFeRexhNABY03m1Agq792IN68bjR5qzo8yEgqmgSlEF6JqrcmeSTti3dq7s2KLhAb/vNige1rL2qXYTEvBCPgwxgWbPQqW3KNekUPaiVRzRoD+Tc5+QICSprQ5HdclGyFLuOiAyW9qYmXLmqTVvxuzOi5lZqmfwFGL3DUdSpyv657b/0UpAgPco4CECe6j8ZcFk1Dr522gUS0LF6HtYCJc7Oi3kM1OEcfAwtdwnb1fAnsmjweY6b584/ySXXaNW82lMsLfIJ19pwsjrR4aRl/DvUyHkHMBhgqJCzvdyzP3H5OVU8cz2fD1DUacubUHxO1eQSCWl6NrIxRm8iYahVx0CIAh3jieQS7Bea4Lmv0LUJO2UFVged6JcsW0a0LwFdxAzatsTumb+LR+oLtKsbf94r+8gfCSOGDfqQStDPWcEyxuzdS+n9tlz+KegaiEOhARRwWxQnW+tsrlMejNmXJB719hrsnAzwSMC1Fuf2/7Ou3g379tNN8zBMjmDW/iUyzq4/H58TQgNBhx/Xbu+kYn15m2XSL4HTv1xBqo0qvwHCvV0xiFWv+Q0Vcz2t1NhaA6HFFbejIjXJUBd6TQdGsRZmsE9EIu61UIgvSvy0r1bL+XyHx0GGzOom1RWzeK4mc9kL4/k5H+um1FeYheerVuSfmMHN6aMvwSJswkt0XJVr4uTsRg9p6sqEKdsKoqCvktz7RaR4DmswbdOb3R078ezpFI7X7EgTj2Dn4xQAtXz9E3mnZVy2U1tXcDbLrMUoE0zubp9JS7GykpZjuKFEpCBs7XU6c8U2ofIJx6sttvlPJjxnxxxixJ00+3T1qwg9IQkHMWh7IYsI5CBmmsdb3qsP4ZEkaNWhjZnXbuX0t8BT5Y60DUAAACgDAAAZ3FPLlaZ2o821lwVmnDjpAWrM4RCrvL985ueoKznotbydPsWNIvI8VGjkD5dva2/+adRykQTEIbWFRG7DZdk7aHEHnGcmjrcJ7Ti6ZeHBzHU7OY9wM06Fn3i6dUPovYaI8Ed5//bt2n9NBzOR0fbfvvVGaMVV9mB/yLpVqVOmy31x/d73M5zsRvDG9N6MitiuDXyt3VdaqRTmMen4Pq7aXUGgGf7NsO3efH+xxe7wBXnk3kg2JWzRqsHBJ+Z2CdWU4HEztegvg1Ilg2X+eqbfgI884ydGKDqM+AJ/h6SGQkRV1xg5w2cLzcMj4KnMgWFVKKGQHZIilxxg2GH/l/KpLlrlExUnsJ9nOLbra8CAIcetOg1rp7frXjpHMX6K8nDwkYXlqL2dWk6qCyq/4oyGi++pqOZHPJD4BbS4qVV3zYpEAXQlO9tPESGCiaIse7zopLt7WwD6+SDBHxZBl+07MoePSX5DynSuPd1875SjmbsIpF33NPAybMs6cZtuNtXtJRkmIKCioAjjiB/lPZ7dJgnsywb9eYUeNhsz3KNVH8tT+AF0DqnV7INlvun6grtotFg55SOQDAVPKarhO+yZhFCfcRv+FOf/1UA6WAO8RW5dzH9HAqO8EIXMGrRAvXpUrPnnA1AjlQZzhiqSXxjxp+QvBqmGuAF2hlCku+4XkGZ5lYaqdGCZ6NyBeODQ8/sagOH49fLPOwICHYQ/MkYl6hW15FgcSU0aKQiR1A9nd5tFaZYW9TWHb7UAu5UZ6AzojFILE7qP1U3VKV42SxrH/jGFyqHFcr168A8gi6Hd1NGXAQiQGAuEFS1ZwomhbV2rOMxYdQxnoCzqcOBss0zluvOuwMUSvZABvMRXhnR14N+tNVYxgyx7LYUj2lwJZj9OYvKVsUu4hSK6CGeUNrsB/PEtmp2oeT8dcFIS/P942arKjoeySzz2WmSVemd7bmZd0H4wBAi/mX8lcGdwQVnpR24nr/jbgB6astyZGCGXPTxcyOFWxu9sGK8bpXRdmau1ESljpcjmh8AhGwl/DlUMrbaN2JMbXN+HjF3jnKkIWCQzOdhFMu2hkLcuiG8YHsSz0DB49AM7O/UDddpkxbX6IMoRzOMjcfQgWDd8Ft7GZSDGsiG79MhA5uLB/DXfXisEA/D5LpLoIOelJ7DmBllIaOh9s1WqQFzcO1Y+rJArLWnxMI5jDcjlqH5LlIlwa97iDoYbq3YccEFgn9uoXQwflRs/qVX2cLRR3Tm8QeFs1K4KbXyrcOC/ZIdHSrCMCQiHW4r1nyB+eiwiwNftAOLlsKGB3S45ipt5bvpgXHt+M8pSCV/sPWSdpMgI8+DS83R/BBlIq6lhi98R8T2whQBC0kyxz4eTft0ZUoW/tfwTnq3Dz0OuW+MtY5r1C5NgJ3OWcEi55eemq45xrXjIHbwJ31zfciePsredBLkQDFZzKuy341z8ZLiTT8F2EoODt9u1i0jgjlMCBN07zI1Bc2cq3chTF6pk7YYbeyQAb9xMGO9VxfK2R2rg/tvoqvO8QXbVfe/+TveZYxRX+lHRPOLY/jmLO4v0mpAM38ncxLd8A3up+GKfVrDZSF8NO9+IRUN9BOhu2jHhBp8D7nYBMbnEVGHbtMHjJz8RyfbiyMqwJhpGzW7qjbeXjyGf2HyolqmRuTB0khsTBBId+D1wlqweX+ACG+oYqz8+OMXcXhjcPH+qKClJ+DjNI9taVeIVkIPOSnSL5zFNRZcHBEJRaZkpDZaywM4+3cNkZaznEOVrfTCUibkD9j9VvOYFUqeknwJsskgTL3eYY1o1aaao8pRIAdLPsB932cY4u1k5jUCY5L+jBIftwqL1Sd4F23ZikWoxCmC3/aDsVY624p6ZE1AHju9BOKI8JPcsajowaINDNFLomi9nPSkf1mgvSF8HvY9pnsozhqqSQaIfCLRbRPMR5HUa3EapnYsEoMuLmjGEGYvawL/wMbgag1djnGeI2rHRMhWEeov1LhCjLSN6oXGMHr24JsB7tw1M/e+ez5XiLmq0fSLD7Jj55z03zpr/eTCTXvflo8BHqpJceaKYQQ9V0Ko+OFMOBHdQ2UjbbHhA9qciqizvT6+mdARt3ZN8ZSQWmv8BoK0ImIs/IwTOaLnPc63LjZulEJpTWZIo7386ORZZSrEy5z89BpZsxwFHtXedk+Zrhnz52MwnfpnnzFlNGvP6c3FebHPvYATf5/CGv5rzMMcYP7Uoykry++rc/qGWvUwwxN3Oq5oeI6yYZrFB07H5VEpt6ZpJicsLAt30YTNS25NhotwvEMUmB8EnIHK70fViizDJs6dgipasj0TIGuf/WsM7Iy9mZfehSEGmWVFwe1kRej136+vXV2yryTykaYcXVGBnZkghnrnNZXPQnsFGMXVUW445eWqsQ714EKKXKFaFVb9H5ckdkwO1NTBUlG9vO43YDOPTIXabviAoNhxPo2Lrhi1wEDNPTL3Igewecr1nQJK765AnDdusr47nP8hycWpvS3wawuKmst9IURcxiry2zhHhTf9JtYgd6iie082ihU8Br7bKYKhq7wiT2r/Bya6iicGoVKiFim7nMGh6u93oCZ3mQMnaKhOuN4rftB9uij282RK5+wykw98RBrA82Mm8dQOTDE0hERbLdCVbM5l8qcQb7SxkrC6wM/Tb7joEq77f7g1z/9YrpEhuh2gtQ95xH+G3VAQKurFwVi6FHY0Ye4hbUtAQtIIxgCdocQTtzoEmWKGCRjCUPok4/YXCxTnwaaoXPwFZOa6szdioan/h4BQ84Ut7CxicaMsr0V5xNOXZGMjfav8HcPV9QU+lsStaTUKNiGrxEmaWpBI0NlExWGcgWtc3onyikbdXBDsMOmzZs85Ob9qEhosmy75qYV692C6id4Q6E6tOa2UKmWzLvJHLoVdutEe0koYh7uFVi7orbn8J42l/jTrbNNAhMth+uqK20jbwjPGpdApIaD/QlVgrgMRYy1M4natqa4oTgAXk4AfzWU1edpqEiRScmOSJ+AME82i42gKq40+itZlqcxJ7cRU8VbwLGXSvO0QDxdwpejIDuaN/2EfUIyKNSejKkagLYalA+Qa97By4YaygjdoJkitsYrQIjHB3tbOv4lmALy9GJ+feAzHxCkxwtMAjaWh4AhBO7TgTBkHqs4apHt6l68G1d36/2lu9f6hCOGlhHsXNSeKlQn/OQR8OzlT4QM4RgSqN9hZoF5iOIPeTg/VlX03mXkgA4BA9eAaeCqUCH/zgGGupWFQEP/dutv+uJ22GX7BWtzjqH7BpANQt+AyAdhDmgvVNfhOJL9GKQMSfqkwUGi0dbFoCXdpK85eXztK65aqPzI/IFYks7o6hIBxsK0wzJSgnX8GC72M+Na4ghvD9Kji86QZrKj5wl6oxddrgZ3ybJ9QTQLHddlEZgq8UQGjHR7lBp1gcJAx59sM/EqRINfdvXa3kd7bIlQR1A84fSlUheJxUqBCLNxowFexkadZq8EXNKlpC6U8qMeA0hV6F2CGSlzbrsAAUQrReuLIyJKZFjRWwQ4iUiptDsTvc/dqMHHmf17wGvBKjmhSMwGlPS/JwrdjAeysd2E4LCKE1R2XXy4fDJNKYlGHflturH3gbWja+J3k3b0tZLT6fY7eZh6EPbhVKjXaWtqnvL9JjTqDlurk9QRev2VWUkKNUSkaue+asT3Ce1nw/EmuBJlmeO3huK/5VxzCc0778mT2GPdCugPvwO0FTM5IE1b08csDF8svIUMufeucZ7+s2s3tuyShsoyMcFyQskgtmDclylZcfKGDxPvrK0/b1/Uw88sDlBTK9xFzjo0qCBecJ+nAv6+YX0C7F+kANgBwyRX64952OsJkC87RXCUkIQZc+nNBDsFmLaFMv1tHLJ2TRMscQ12VOkU+uFcsAko2l6UFdiKyIrI0weLOhfuT2nA+7gSSLL94dmgRY78DkmVhIoG084yGo6ygDDfmiLaqM400ra5wOE5nTSNofQgzNUarqFJX7cJZaBxD4G3zZ2vnUl9NpnLL2ua6MaZuEyANHoNKp7Ksw1M/C3zfrIaAhD0gBNqH8+JLtUNdsYayhw9P3z5f9v8Ox4VHKNcmxb7g+1JyH+Vf7AUBQE5j5gqIRWcR/t46azbbFm0PChx6tTXcY6R8wPlsekuPP1L+8vCf/JUkunNEv/kOpwvqHRYuXwuACvVUiIHawuHWsvFHTPv/pBlF9hEDtNnzZVqtRj+ClvPMWlOuqzSM3SSZEhFPl4yLndWB5+fsifDBnEAEiRmsa/j4iIbrO4BEjZWNv0C/MDe9lJXzOo40DjYAAAC4DAAAkMcmdujJOQzEFclRtFiTBCyVwRqh7wH7HXxURyJfzuKNLr1FmDZ8SYtWngmXdkNKY4MPaYccAga9wS1DRwTta9cPdraPjcdEO6kB2W4J5N0fQU0go0Aq5fIaCAQjAAzGJa9nnwMhCLuk2NTMSTeBNhgx0mcQKh73XFx01kn+w64h8vrGHeNx9KsyXqcdf4NWHe+ArRCez0UmEXDwROEfHgsnOCMjlf1kEKtY9qCJSNnJMW432J48CMHWNS6Yu+upo4s4zINjKvMCRJLP3vhS7PMP9iDLj3Y+Sd2rydfkZ4ceb75M+HaTaj+f1QzMXIIsLfo+R0qpEYCZOi2m7Ufy8MemcF1b0omAgsl19gFKM7KL+b3EChHO4CugzyrItqYVeJN6YJk4QBtLsVcbHEFjNIHEKNhYCq3eHaxMfs3DlxX7Xb0owfGyHTD3GlugwPRHD1qIVExoiI6N//BoUf7mgApbatxddSUzNuz8FYXxdj5kJ88rsw9kf/DRiGjkfEaFbCBmRzB/Ii7MF9flwrwCXoh52ysA0hYh4sBSucHcea7LOydMxbd9qBKQmdOFponj4gZwCulcgTgcSx7WxBGEYr3dvhdU5+2wbJf6e7N1jvtbMiuGLQ6ElWynSXvxgvQ22zXL4aeVwY1l5tdxZAXFyIoMdyPdsEGYBOWX43nBR34I6NaL/1AtOLJg0XP+R7DTBUSP2blm1XNz9bHt1x8joAnnB+0se3cOZ2/V4FXQxib1ptNF3iaqjDRgscnF69rr4+13u8bGjDUBgD0bBJLwbqRBw+sBDBe4KCwLMc99MxkEyGkH+HGSeHi7pXTc4OkutLwlYipSj715yRqv4k4UNGK4gjP3k4bAAwT7JsZuB8vf5TKeYrXAxJbJfm1svoB4IHRdJDVs8lN4tobtzUt+xQzQ6svWe2gxVoerqWDkIeAfyTtYjhmJ6C/qhCV9rGEfB2WNU1TQk/NJRPpiKX0mHVQHsj3KgRxFhRURJqZqjPqipRuIkpgCNXA1VoqcyTsKaR+0yFK9fEgLzjinojrzLKofObjWgkW+62yoajDriHu0VrH9SZynr1h9rDb8gYcgiNhBjkTJm/Ua8zuuks5ctg0/NsfAczz50Em+S3pQcmCT9TcO+nUv9q81eUrPLDGLlfQLcGtnF1h8WTD4ngFi7MC2kxSNb0F/wv+H68XJSD5fOeK6XRnDY/ijUsPGXVGuvOPbtVEBAIwm1dbUPYBVXR+pM58Y7dX9ox8pG9TDn54ES9bvMIOd9y+Gf4kt1GlpyUJ1tcxLQZSa72fzNNzLHUDVTHh36CJFA85deB2dzkfNScEQ9zWp/Q2OeEoTlDkrKq42wJgCU6IyLPfgeYKyvYTEFEkyDjnuf7Es2AzOghsZRAna2r4oyTlvf6I37QESVPswP3kRbVWUwjoxYrWB8GYBzwTeXP/Mgwismujq9YSLShWv9cRYNXgaqJZrLg2vAp53GZIABi/VHoorQ5yibzltRz5URJaPEqK7XSK1pvX8ZCupvAf9YG4w+HaGBIWAmNOZiZaS6PR8tyXF8tQT91BrLwz+7qTAFY2pBMCyfZT+cQUjkLRZ5FfJZX43Fn/vFqC0GZjOrcuPdPKN/+cVFp5PbkJHMp0hgrHWBWiFXwzA3kEx1IVXVfpTrBuY8HH8Dyl2ad9eB5E9eR8qPiERynYbzE/acTcX0ow4tODZy1qnYygNx3A7OfL8LDLbnszz4M6ikyhipimZmZk44qbdn4Ymqtj2pYIRxT5sMKu1SIHinZdYHvBlJFx32uSq6pLFOqO/REqrqwvRoPWmjXT1zBzwQ43KpVLS01mXUD8F66pnN4GD8SRF5b01B22d2UxPxKQUtzzjwaTe5+N5KmmYo+gAc3PSv2Qp1vnaMWxY+7jO/uNrrsNVekaSs20/RAfjThvhE7OB1Yf240HsI46OBJwIrc6vtrGRUGAEbT9I0Td1OedXfDLYk5d4khfNn8uQRw/hLmKjbvtuMgga/aw+si5OOR+IYU3YeN602Usb3UDOikgS7UM02J+Zfneq8yWZKKhGCzbOjx+ay5F6KgnaBi0XEROVFdUPoGAKG2xRAIleEv4H5xMuhUAy3lomVYPZOv9WbST/rVFuJ67X8j7InmsEaJLY4oKzX4VeaCFPhUKW5R+wf0Bqg966SBSKCLDFCbsTLV7bzrqUChi8yxX3OmOrEgS2J8ZrnBG/5BTAeYi6loXLHxRtb0Xz9BTU5uOvCMliykYiGC6BhwGAhqpOQcuWF+o/+1X2yukFl1UE7M9hbAMtLY1TWCNHTRe/mQqsWZZu4RJSF/vFho5yMjdsNGL95Dx1xVfgr7Mq7QytD6fo+bgyxzlqV1af1GFZiAVYHk8Es0VLuFlQRCzKYtcrw+yS5IxCZroQiCc52IRa1p0W30PAGTGgVc/wGxm01zVeQnAL4CLB0L+tPepbj+QJzfxAlwxoWvr0n6Mmac0ITzSX1+TYVt3haDVL+JjPnrmSJS+edGuDa/e4E0GoEIvN1oxG1u8d0GtaFCrWCU4bkwSzP+xL4arYPcqmS4YeZYGs+2LQnyt26Q3zPW7vCWJUeDo0TAnca1QJFaOXHtC6JWRJTr4zMdm6nWYSakb92oJth+HzhgvtH5GsiJRk6/qHR8mB9555d4WvSeVUG9bJwhzuvk5W78HbjW4Zs2+QPm/KMyg/yaonR0A1xkKOs9mFvoPlqhZxoZ5ErXjVkydWU2wGBHy3aYbeykLcS/k7uGFlwjZVUKaEevNRY1ELQZ5S75VWdNWfa2adLDO5cqxzKZQSjrjaTuxPDtN6MoFB8FaaGuN34bbrHhdi9D2Ag/JDAEJxHBnb3k6YKw0rbGfzjdKB4fLRkTWBYLDj7ynNMs+0SRDcuSUyzqqcG3L3qk6TD6vvOX9l9AwXVfn9u/x2/9gWKGuxTFRfgbXDtLk+eLGlKvWweu9FHaOLqsUplR7CMg0t3AIq/CV+udv+K9G0yLyDl/YtkZXNuu6a10eZCOJvBX5HzZjTu/4FACKnolNo6ijonIv1JhSQRTCn0jLz5Rx/HwOTYi3xy6qOB+hk8FJrnSALmjnW1wgA557rT7PQiufUZtOgWhZTectm4Eqxglb77md+zgna7iF9n8oULj2yEtb3vgBx5npngcNcIl7Ld4zp88K6u6S3GLT1eJTqMsHDuqRBhxc6L4dMa3uuMCiUiCVDA/lGSukmjhKGngnFBrV7CEZ7Y0ZBxux7m7QR1HmVaybPJROjKU8b0Njf+k+TI7KvKi1DU/r98k1mfGOuab8Zhrj2UW0wzlu7b1A28E13cdh+PJwE15R3Cs+omQU2XGiEDi84qt3BHTLm5IA9fE9ISR7rj7sTYeSDZYCgIOb/tWi5gtRFm68Y6gjsZUpT1R1H/psPMmb5bz1eNeysEZ/2fjmbqVS3IXHMDlGkFSxaUzr9lHzsGlwsm4489MquMqvkbk5GlHyY4bnr+/CgH0gD4OXwD8Y3A+WrEx17uxcBfo8h6zGyJxX2WhiOiSqdxyJhi79IOF6X3NR4qWLEdUTsywcz2gnNZXv8HEk1SMQhdjf3112X+rThH1OtondUcJc6SubxKC0CHFFj9Ch268LjycgqnDdMEEtkjtnKHKOlwOZt9BR72vrv4kBGZ/0nn2FkqGUEAkLBPg+GbN9HoHAfPIa95+DDGVmNtQVFhuI/xsmJFMQ3at6jkwSgSdWWL78tweriYcaYBBBUJXFRLb59LlXC1Uu2liLsI4if+GVc14dGK0uOqHu917mxokrjPt1tVOnz5oY7Q083KQXl2RdXDn021AR281FSfrbIPU2UAovTWqCwqTPU0wv4p/IBgGOKeUdqAKIu1mNYvFgG+W2ArSldhlBTMyKqLQtYcltQUdQSYVN4fVfOErkaqdUCaVQHFvrkNJD6nI8e6IqMTVID81XC/XG8Kx+WMZWWaJ4o9YEqpHEjodXYgGpRwCw6v3FBc2GgDNPaj3eF0hz8WXS5SobHZ4MHdI9VEyHEDXs1KI9oJ73p33Yqjzov2uAH75H68y9MoylNB6nLpxjwytg+wUebZipoSi9BxQdYr2A4XpY8CbsQ3sBabKv2xGG6GGOs/TPt3k1pAyuu7C/W43EgR73SNeeJusw7h07xOMjYCGh38ZRJ4QsaMJVXwgLJa6vpvCJK3cIMynmnh9M3oJH09P4xpc+DQHvo0bB3c348d7IYzNpynHrDnLepxb9vvLT3kgc/iMCUgMygq3JzEKpZrAm3qQyPkaUoyVZhCfp+e0v/IrFARhJ3I0wjNZaR6feobwyDTY8ZooBww/jh/idDRa4uxgf5teHFAIQGb5xG1cGJWjcB8zcAAACwDAAAzTmeIfSPd0HsDN1czghBph7l1+nm42QNFqpDeAuZruuTEuJ9GGGoEvZGl98uQJtAulGqk8gV6LlL7qk5aILgIhGTnTO6JVoXqKY/XP2MFphg6QzPpKlCdc/Mrvr2uFycxdjG6kC6Hq/keE2VWZ5OE9niySwLe/q3Z7AglitdFsQBYiF9ncrSMmXzcrnzZS21rg1QzEuus79/uBtzZh/byrIAQwNDvptmp/jD/ZRB+2D8v04EAaaCkCUT2IMNthdlPqJOVvuaVoVXwqtezgep1tYdPzPt5v6veBjh5hqXJY8TdG8JmQkTbl69FgvTIqEseJABif3ry3UuBdrPInf7yyoI4Ve1+vj9Gj+dTFN1z9BRzxsLU7p6k/ScUD+rGXuWPOY0/X0i6hoMH6cTtgbz5TiVRH9UXv/j7IxHrtaU2PPIYllE9P6nbq37IouKZOwPeeeWrg68Q9WJdmrH/H8yt1wgOZNqddlkuTTMGG2g3D1MMcnQ0Nj4pkkXKZUOwE6n2CaPRXls7esJWPuEwF+pXhwGe/yhTED+vUD+ov8+TEf8ZAQkI8iGp/bSOCyco2MiXKKBzwewK6OaT+mmwOQTLxRogUk2zqywriTMFtBwAHU2uN3mui8LvYgwI5AaMXaZ4653XlUSwy8j4yc3FdJSLj4foTIweYUduiQDgu8f1u2DBIKBgKUWh+gt1C/r2b+K0Co2GTeb70li4F5v/OzeR6RnX0ERDBcd0Iv3nTeA8VrAKXRKXsx+JiIKy1wUcvPL1BO9+i2Co7d8WnNQIKal4s1TXETSA9UwuVpRpqDF6x9WK3B7eIwTRkZLRlVHOZshgyf3HCoKOvRZWfJby8E7An2NOk4K79FlfpdezZ6+x08Lo2mgvOh6UOlNLa/caafOeeFuNSvVpVMhdME/GnWUCT2ljxgy1hxIN4uP9DUMDekBkXxKg04lBGl3VuwLJs1X0qzCy21yYTHouNUUTnEiPtN09HiAMqMEfLOu0bpAnUpSsU4E8FvxAhs68S27FZUQAabUf/bTkLUkTi537+MI0lj2H1FDaEe8zxfIAX4xf/nLLhTaXdIUC/aYb/Zb9jmrnO+DucJEF70O0uicG/aVsQW95pCS7PmNVvjf6pDWOQmixj3mhHle8NCvUTWZSuXkwzzU0YwnE3W3drqWM1xKp2tfatrBzXki/EhehOV2vTz9/5Oe2XLOzrC7AWr2tgrlwlcnKYjyBi+Iw1L3uB/8ydOsJ0FR0QR4bJt64s0ePS09I4Uncgij/2+Eao447kV5H1LzUHL8zvNmQTyYejkrMbV1Jrq41jCkZuvKHAvbsb71oTtL7hYjvRvEWjFadgVUAEM7AfuQu50CnKgfI5cg/SmKQuNwh+yF55eHlEruc78gWVTaivbpj5hEEADqU4nDFmuAmYWz4xKktNig02Gj+eLZaNusqI/7hefNpF7XktW6M30cXrm4pSlw6b4JRi/DJQf5CDR1ccNGhmlRh5uUocKRLAl1ISeHt9XkJrQ2RADzmfoWD0qsdf4Wph73pkqAmO26HlUoJU5MuEHTHXqqIEmB8W64Ao72QirnQejoOXFkipknFHy7EFAZbE3bDAZz9q1eRNRwPxTznht5b2MbB1E8PlSwrhl2L92P8GX6e8QJaH3exNVSR9/j6tKZ4hxQGCjUu0ZRzitZtaBkdO5RjOroJLcdazLFktH1VCoaCEJpo95Tv26m+5J0UrEIsOtOsy9yMnRT2IPIc4xopYgb5+rNs5kT6XnhZrpZ2rCFdJ79LfNW3x4FgPJFZjp8DIZLzfURaG6qXlZ8gMS8icPG2Zz4E4aXYpL6mNXNUIRuQB3idsNyOrKKehO2RlwInA443Agnvm0QUP9TaIBULMBWJEgGVPkO0W/kY13tKGEc9v+HuDWr+aUK6tqgwvzmKAu+U0UjTCCZaaBLOLoY6Nh3rRFpHaIHJtEuzu5lOqojZpNQl5WY9e5HTxoz6/ZfrlQ2bG/77n0eJYLVHxaM4VBJK+JRRR6/2FmriSxLZGVy1KGH4xhGzSYuo8t+vFm0Geh07NdrdEBGzt6ip3D5wuj/LBhnNarn58lSNbYztGQ8teKArp7TSBro7FrJBDXwB4xDkKgn8L0JKxomcv7fvG1kuk847kUcdxCPGVTuwweVA0929BUXOtqcQuOjg03FBhRlPVi0aZ3lkyGYmPIHm9FNqatfp1qKM5lyR9NF1V6NwKdoIc4gRi4mq2kZSOouBT0DIotvAsjpHkD39yDnlswLy5v1nxxLWewgB/Tt33S62lKD8oUT/7Da6L0XN1CnqxrsoxvVcQ/HfQ2sd5YJKHsQ3inUV6+5xRlYVVrGHhL/oi0WHEeMw8L3IJfLxaNFuAhbBXMahuB4RqSBRjFLA6kmh2l4uLuP3CCD2Ys6KDOG+tW8QT5wEIzZS3KqrXUsfhhWigrTfFsiX8xt6E1TP434BsvSmCHsrwUGmSu/mweiPK7pasqNyKlFSh6Pu7u4SsXMwchbiMT8IR5uIZ0nDTWBrPHxKhPMwlg+fXgz4WLylsP7H+V6IUhoDF6FbnVOJgQ+sgpRXleY0KvWPBHupMm59LbODK7YIgsV0qNoks0/abihMA8wx55Q7anKc3KdG5/4YPy+h3bBkVPpky2VIQmmwSlrjoBbmvQR63cIyKHZrS95LtYcK4y0Bflf0S7oPgkCLVIe+l/IsL1GCeT+aN3XdiwBW8R82k3Ook2FTHFKUZm5UzSm1/N+qD9K8zgko033UwZ8nEAIxGNUX3++avgVYHYua4oY025HTvWTp7WDTgsMLbjsZWgtrnYzS/1WeFnxeh0h8bP7Mt5EryMDjP6nvfDZTwGNdwpApIqiKUbZ9Rd7GRKIaGd8pXc2EevkhPJttvQRjgYDw96rukAbs4oJa0KORus8PA1qEuazcOLf/17aqU2GfRR3aKU8ntdXJTDnw4FXHQPPZaE2IOww8uDhnvXfPr7kFFlK1MORtExuBnTuSD4/2s2WOmilNMzm1f4L1d6V034NhuYX0x28/EewF1SPMmZis30w7FkYNtripNyMk+9CWTGLORXZbdpgNnSxbqcHikUlEsWRYoboqido0lJa+3KKOoouIjrIHfgpaNci5moXaToRxyZcFMkwasFg/L5hBzkfIULfa9vg/n3YJBcy0PtuaWXqG8eW/5JTOc0eZpQx3GE5sl7XuEktRqFuaOYU0Qki8l0Sl/sxtUoH9zCaXfID2CtOsMX/BVtf3T7RRd7I7TvACIME8NG4FGRB49dnZC2BbLm2u70TDOVQfcQWXlR1zp7bIFJW6awXekKGpwe5KIz1aHgb2ppHLJA7zPKoCjETZxVbEKHT+pTPGPKJl811u2Cq09ZAxn8bsECHsixsUvJNWtEaQ5CGAggN27CP7qG9dy5OWsvlKuuHHX4h9dfmRbmz9xCfRRhh9718syJ6jGqwx9PVEzgzLf/IoHeLTjxFPV3vdcJu3MElUQpeQGsDstpxwvgIG/I5oCRBwBe4fwZvEA9qwjYOvvlK2j8nLXKEkxWkoNktg4ujIbSZhbBGPctEnew9VclCLVqcjLZy4+hHce9IupMIjJ7rEMoDODEDb8UUTvd8qeL/nuOhrRa61+VpyKeml30Ghoq/FLDAAn0eSOQZ3rOohylWYSdWa+Ih+1gmI9b/rxq2WB2B/JoXGev4zZPLFUEdAJBuP8dpZuhvcm01cwUF9w4WO17LlVqsKatlnaiUyst5o4ZAb96bHKQLy0jALMgfnVySJ/9OIqVgGRNmBbTwmyRS7tNSVLZo7CfibDGLHKh6cDWfD1fRX/7cVhVJX8uG/TBW2nH9P+ba4eCaCnhyLZB1mhYL2/xBFF80PDzn5mnw89oagz2wiI++ssNpnerFewa7+YdWLDalbwEi8k4+KPq1XeFfdB+itvGc2jq55gzF+KfqEFaI6iiaUAkTqmRPVPbu6EMIRpDXsfLVN3dnvBKT02ah8SWfjU2q9eMn4RRrr3I0DDoOgh7uOhpdmORA3IrU7k7cT5RRSLmTzYi/vtlmaIAqTMn0uXM2sU5tfdtUyvpdosP8KUrb89bxO4kM2CkbZEeuVH3B7SUlMJ6xkW3DGaen4waK/O1ymgt/zcbAnMezhbKotpUA9QCtoBkibUWLPkIgrZa3kKZvmy9Q4yRuq30aaBkijjwZRevi0ZR7EAD5pq76115g0or2CAVlfXaLZyPSWSpPzg16kxggsUwFWGM4RsuZZ7II+fqr6PzcLqRmMKfTK7hF0qr3c8QimLN9dPlySqswMCRzrv0JdRi6jcs+vwcZjrOrRxcUecx9JwyN12TFiiVK5AR26GXVwCI4AAAAqAwAAL3pOEV9I5LCiakXKq4MYeG4qVUYb6QhWPSXZOr6RKQp7QQFGzIaVvggsVVMPWfeCMQgi47P2YrEawvdmjhG+FUGJ/7nA6sTnNLwSmaSYxPfg1CmtmbkiqVQhQ3AvLtYJ/YDW16fjX6h1KvTwZiOTUdjeIbl88QXLmul7owujHumbp/yE3iN6pgMZBXLporzTCreTy+ajYTLQmb6KJm12vGGGk0S91nKd9LsjhMuIbPq3nA2J21M0iGiFYEqIkGeJxCnuim+yjkOqLnGYktZwpEoSRTLDgDHtJSw9NB9IvsdpF61ye6alik1S3vO9xGJRR0P5M9ZHmfJqDQYzJPveawRnXdYbBohXarfotTwXpeHwDith6pck6N6RJuwnOsirXzw+N6xs0qFOSJWACO21O2J0X5A+nZQ4KVbgc85LcKrKUOF53lwVIB4gDdiZhiAAS170maUxssNGZQwW1Il+ZiUJtGim6bX+A9CffLL9/t44OFwZxVTEJEhsL8C/pbvozbOF25rNvTo82tv7G7kbxpwID29F7FaShCpxU9q9N+6VXaZaInkCksSGRDjgzeiPpsnlQiv/XJgyNRujCItD8X1PlIqYM0No+xGZi7f7z9R1r11EEBcpxV/qBqgYWZ/zgNQMi9tqDR8jd2ZSP+xrji8wD5WuqkPGZ5jCogYcCk2i1jLtqjDddylnwmCxdHfSWD8uFkMUAyymeNFG3vjvxfsPlEsnytAMExIkvgQSl81ZY96VyozMp4NnltwkQyighh75U1D1/9h3ZFc+FY3Kxou/oDNA56MxIpFYUvyXfGwxf6b54NnHdK14WR+xeeFELVlzFjm9qpbyncAsJ5kPU92dwnzCDUt4bFfi2ILVirNWzb2VYGQ+c16wXTI5tDQqMacH5F63arC6XafAz+n2XgG6dyiVSn3LBbBXJqERTxz7DYDLq32IB8PnRPIWCUOlyb9UKWBDRKL+3tPm1s2bt9ax3KuC1godGxafcB3MDOzX43OnN2lBFkcACfATDiYhrctzRcA4io57c04LSrPIbjxAmTSPYkabRpTwdsfdmQfFjMO68QBRuuYBKnTQ0ujiv5megbacwHkcPtlGyj1NxhJUz3/FTAJCrNk1X9wtwLdvwM6pYCr2vbphdf3lW1a60jMlChfhOWiiY5HNARfc9rm3qPMDeD0Z2CI3i3HQW4eLlY9ZIugZDwYPFObFtiNh0ufzdYWGhTJ0VKCsHaB4siWQ7hZw6VyKYeskThlGHDmXieliJsnopXh0QMFxd6ziqkVF94GFk6+8oCuBWnRA1/yT/u9ZrR/puOGmAulqa4WyZpMGJfKbmKsctHaBdDfmNjtyGqDF6Jk3nQywt3HsHyJQ53D8zOXgp7Gv6APbyIXBKzJTXDF5qsFhifI/3L6cfeL0D3gbKIkiLiLBQrTjNpS89rSGzz85W3PaMDmCFUZ0lM1C7prK1fBkJ8X8Y0D8ALlf/0DEUg9CutvYuIItSr6O39zNZ7fjGSGgtpBYRRUyKFZ9KB0K8RB+MXlCdASHi3ZsLw86NHKwk58dsgQdGiGtxyx50LG0TeW92uTZdr7lALHFvKhpLnoxMpLEeDGRljKkcbTZtkf0pqObtCgCqVWt7+Ot2WnieEVQb7L49uKjGBfER4r+vyByPKuKzMMEj4mXgUqB+w9EOS/MM3PReKwk+DXCha1vDdMo44SHBfwxuxUNKEJ4+ju+Y/o71Ihq2s0RCIb4bytUQhiEeyunTU/PKm+3gVDUpuzrIzFn+DnEhaRi3qmppPZxq7x66JNdM0P4Z24Ko/x67QFW6EM/ihb/Gp6AxAyj2HpOPHKRVPKkpnI2P+SlgXI48sQcFebJb8RfmFyXFuNNQuOzZjbMVrxuw2TN0EYObAciNDgjIliruIYXp1eTXwV8Xuz+R3MRdTsOXz5IKvkEyGkV0cFI6tL83UqhepLUY97HPZc3dT2TQahngxAg3S1ssQgA20theuloNPA72jHSA7XX7Wz4tjt0mm9A3A32IhpP0Yb/Eb/8JtRltq93rzBSsfavNYNKh69o10WCzDApK4/QVlHBKKGnDFwTvc+4D/vT76R8ZJJ2bq5Njlr6TCB/S9kwoalKkv61dk1mNBBUv/EA2/P3cRoz848LrTQe0ZNO4ScYOpopeG0zL1dH2m3jwpUVumZECKnHoBWUC5BpbbeVmYNBDiP9ivzoErAvqq+cwM0L85N9zmstKp94I2jAPLpPB/Fx/9jY6QvGYFZCMIVOk4vKYc9e3gFNtkaMJB8KcDuZDTz9LCZGQ5FMq9IIOlABZ4z89wet0wDCMpc2zpYkuppJTrnObTORsIyagK6pxJTrj5V3Vr65+nFFTHtluNYKp3OrBtRSsx455tiOJM0mHrfK+r7Jowhlg3imuaDa8GJGcCk4PJkqgjAUw9DZo2vSXTSw9Ahd8cHBaAPbGfvQEcKuX0yUZ7Sv/m6nkuI/dzsl4T+PAoPArtOJ+vkY2OroHJk7xfylsZNaaL8ieGMVeFHxMSDvq9R3Zibrv11fyAHO5xMCf6WjM/srO/bSgdO3ezDYqQpKitRvIXcupFf3L28GaGqHUWHPg2XtN4PK+66W+BkRMV+A4R/cF/Q1TYz188fu/MocNuh27hpSty5VKM6yQB4hvL+iuzoDfwwdbpSbqkQ+gb72iajjUG+MokD3V4o/DyFdeY78Jlu6YBTHmDYd6bMOovZ00mVcDRdaXVQ1sh7a0LQ2tG5cb3o5Tv41+9sRpdxiIuA+HpU6Yuk+FrNylLju4eqmpJStJduFVHRsPu152xrd1GaCsCGEREo96ueUi3Ibh94ecCxe5w97xVljIbOHhRXb9Qa1LQ+9uy4031QlYXzONFcny3dxEpXz0BZz3fcKE7ub920tRfyUOra9rgbrwsXLhn0pP59KmAUtxGXjbpoxpLTjFpusn2cMPNv9qTHb45K+UnCf2KyxJWh1/JdOdzx0vPSte1qDUIXKMPG8j1qG0djmHEZIsYCwERPm9dIBV6d70bJ+mGb5yktOK/yX9fQ2VfBJ9/JEhRsdJaHJP5c4CHOrY6Gle+H/RjThp1MtCyBNQGILDF3Ha9rtgPjp8UdpLChvJnVIRM8aTOT5Q8EXd33if6nHhuVOZHkK5Uos0ACY09OjmxiSOsGoTaoqbbQZQM0DJwsHvhgdfrhqXXHLPR96vdMhNl7tddWIZX/db5LpgSQYrKrZhDVvNhNK2BolcXlg6XcD1v+DPgj65g+rZtjlr2NHVzMRurIGgm0WULKXyhezIg2hbu6uu6wb+rHtApaXFOGVmoFCVwfVKQqkd7vTTDcFU+s+X7VbCHYvvJPryiZ8aEoPTKSs57b1Mrmd4UfKdyqzmn/avOpFvBPHOsxN9K3tihMYGY0sILXL4aHfIs/xHUccDl9oTiIX49Fo5FscJdL4On2XJOnT/djdKuE6Dg122vCWntdh38C01LWFsT5crWQD1FixVQs9u6VvVZZOSAnUx8U4cQmLyz6kPLwWu9ETCDfPl46H0i5N4AxXKYpr7U68V0ePpTJpIHkQ7ofMTLxEAlers1acJp09Qr0Wbmz4EDNfZL6YrEm5N5iyW5GdLvwj9aQ/Bu0AFn2kC2g/6Hq36NgN5aiYK/pXrO+mYnYgrI5cN2v5vDFuMxNxIQEhVvyJb28xxvteAsuIMSTALIbly2R9aRa1qcDaMc+HtwR+TI4Oexd1e7zvdBJcx1KNxOuKRKCszCFYV5TFHFuuL/eX/5Zzxd0AyHKi6K89C4qESA+Za2Way587Nclq0Zofv9Q0TBWBo2GAWKuuZabBwuhlnZfRwl4N0ZTXeqKdaJxjqErLwbfwW2P5MrfbLYWRirXzi5f9xEu98flhlfGO0R3MudDEyBSJmPUMy8NL4nacmRCR9apuYhSIZUOOYKpoGlJqeU9DsaSf1UE3K80bCo613cNdx7sFakogbI0WLu5X+++B7vBZ9e7s/YlZeGT70ESTPyWHKyBTEqGZX/AzmoMUUl0MbuawFGWMXksATY+XjGsYnGyRF7MOe/Fk+kDVCrgRKCwbDIgtGTj+95CljzkoiMAlUfGYCJyw0Y7Kty/BBf/oQem5BX+oK0LWT1CJ+ZLXWj+lhAczT61vhrYqdGLCZnE7fB7CgOAOIN1DPs4Hcmb7YfseXd2ofxBz1wJZzJr+Knvgp2iBSwHVYh3+F/n6cQFQP7e3UBEKegzRrEJDWGgjgb6NLAwifj0yiqaot+2/S8ttyvpDoZL55S5dvC1UObNcN3/Q3ObxogHXzUi9Kd9EvAG5yF2U8hgykBgYTtYgZgAHguv7ElqNDrMFAAAAAA=');
