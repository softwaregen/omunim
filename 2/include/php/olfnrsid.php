<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('EEFA32DF8D68410AAAQAAAAWAAAABIgAAACABAAAAAAAAAD/hBGx++ivCwG+aENHC1rf0TtMPJ1onkyTnRlJ2ahww7P1zfInTtH0rIMTzjqYJvq2KnUXZM97vVrqHLWD2Rl3OOXMKntyBStwXJFqlBVwX+05LTkX1rCAbKq95rOydyAi1Zb/TBm1ScDDHSWY9EK1jLg9kkAJcXGN/CgLMFOAuRQY7axNH63fszQAAACgCgAAPVTbpX4qgzOLb9FPC63Mf9sj9+ZTE36/sDjNGMU9LJQVIxEP3ifwrbMz3LDVlW7k5EnjXSJJdap/+aTJ2qX4fsp8+jcfYSVqUFgjimB/w7S/GsSL2teydIoa/NYhA3vQ7I3N7bqwMrGMqVN0GfOkemdtynWun8RYOHmK8IFDloMsoQ2JqCodDOtiymjClLGTsaCxrvBKQTRUwDylmOarRdq029kdZN298j+i7vM9S2NLijEBnpSMgPRcTEVODQUtxppp1AVZWLmJmC1GosSLnB+sCosAbMbh+1SEWLhqtw2Up7QnpZEwTKrxlUZQxOKZGfY6V3ZjyQuRPbXiakVHB5Z/nTlC3Se2ygREc6X9kWghmCOqfVggoAu6wXGQYT2RVK0KrlxU7lt57VT6Zp2cIR4vM73maRSU1f+idOl86lcM2MbLGM1PBFTFCzS7+5rveanSS+PQs+Aq/3OuvpIIYOfLj57zNEXS3aXRI2oUmalKOg4vc23wBDEhH8GbeZwJOUCXBOe5zIpZNrFMin3LKGdDglNd9h17cCTT5HFGkArFgf3ucSQSfkuajruMz83QvtFCW57U/KnlP9DW+Nf0oKToQc6OZBF8IvcQTFEaLq+lbZxM2S2JBQ/pBGFr7fAo3s6Ei3zppAq0kPD3ay8SBYtSZzq93E4v5o9kkON5S8ZwgkbiTdv9U47sFhEgMkWEtR3RYaEi/BaM7790q/2X3urG4eCV6MeS5MUguq4pqiMPNpXcaG97F6TD9f7kDR41r0AF0KVSATPlgtfvplPDZej7oL7/iNxr/wTNPju0OmoeYh1yjdhcFt3a3uO+nGE+IN9GkMhk7majuhO5w9jQ9AtgYHdyVZz6fy/XZsBku1gLrBGKFHPUb4P3hibsxya0VZSdWwy2SwbQppRg/FUnMdZnCMPLwatSgRgWG5vRb80HulAu7/NTxac/sgbdXZzLVS2qtqCnI+xs+/AVyq1KCXqRILZBdkeF2NG2RjAA8ONjoaujtj5LrHLiVrWfjl0f7q0WXdx3HgtIcj7sPQUHYuj0F6vxrCvayRLLNMFDQ1THxOAxVJrl2RkZJSeWiXDrgkUYhCyKw2TDSnBeODPnQJ6jolF3Vt+8+x805W+wTZo3Xz6lzg7jqf4771sc2Xm8rXU6S6nICL5aZe8rI6LoRl0tAdmc0IEyo0oddL4nMmud9//DIevCEFIPDVnpUSrlprc8TxvDYWwImi3P7V+tymVzlnTkRF0a5OtIeYoqRuADveGPrRsTT54fySWNWxraG7q3630xf5ANVeQ6qJL1zXEcZ7qmWIWTylSTMZ4+aQGZyGOOJ2kzcvuQKmRbC9KT6ddJFSd1G29Xy9xsgR4rj6wQTWYjqsH0WWzhOP0fU5ZC2BJmLqBcUmPjBJQpR471ifcv3f4uuruMu3VqP4I9lVUYBhgWdP+r5SP1LvcLpO2yjkBxJqA9tg5cabUE1R3QdBhSBkY6wjKOnE7w1ujbQa01zA/S5bmsLjeICH5AP32mp5+L2wqvGTjKdSGgIlk1iaGC0uxh0McfNFiP4PeZJnIbzrxBXOZJMhO5I0sosst5IyzoCi/dhQ+rmt9vb1K5VAQL0Qtsu5gPUCJf5U5hg9iZJM2tYGOTPlJyG+r2dFuiYexnazMZ+ahIpNFte2TlwDGLThURJF1tyo422khpYK5KzhCxcTBk4NgDSeLfYfmN8rPZO/pPM90nwtsZFmY7X0LL4H84zR5jvaQypHVUgdG4dkxNLpg25UJwk6JK+TCLKrmitYMn3YqFj2VyCV6kknrGvtp1WYp5t9YKW0OHxbQ2hqAW2dGbHWVvnQn37xGC6wy1H5uhfYtElqD7e8Mo1YM/8xEG7od7thp6A3p63FSCFiA49EMOFBr9rlt2jymWm7IGdPAWl9mOv9iG1gun74kxW1T19jydIuL3F8Oe1HVhbNE45zt5gQM9aDw3/Fbbu6wyi3dn4GbutL1AEEWv1DFiHSznukNtkd0VfCCEB4gwU1+bYS3QsIAaA3Lnc0i03ioJN100W/Yh1q5yeYyqB78X6QvxwBpDfqUycPTRyK+xzxOW7poCY/XrxAfVk4X9EZntlF1KM946Al2PLP7e/L7nGZq3SMHTwi7DgnYaxxEm90d8rSzl6T2YoHhA61QDwo2CbF5oCvIlZkt9HFm0TPejJbo1bRrTa5yb/GUK6GxXZPyoHUAhtHs/bsmJ0mG69spbk6suUaZdmHIgewrEV2AIrAgTUAHWiRegVUMj0/QWAsKCHNvkSj6yzQfVEsYfzAYQylJX+jhKpyTnSjtprA1krxZl8/ND7KJ0MZwmBk2fjXmoiOb9CnWnSfyPQwlA6he3H7IGvwyzp3VguElGTLCbCeCCQ6mZai0JMTGqf82eekekQphnwwzPlRa79mwqm/ZXpkgpHmNuzHrWQOYVIxz0lmR2l1OZo4y53H8E5bboIatOVEF1NJV67bz6GuJAvQJGNxr5U22bZ2zzv9IzDas4FybFHWjM7tKps1SGyWLsXAYf8CsEwKE3u+bwJOVxwMghC8AHJj0iNk/yExUxVP8Jh05ciU5f2qDGEqgzMfa0iMVl4M8vi/7zfeVcPmJ4wIqWn7KeXevhZLp2+TJiFR7AOgA82EKJ0mxoFYS3BsgJzqrPse4RyC7lWaxGqRxcxYvXtVbdQhXiehCM01+VZ92WQ/PqwZU76T4wdzZ/2SC+krJjbRCyOgTfUfc9lbeCvubj+wpK7gZkT/o3qcf0cxhX/1KM2fUturD9m9tZKXXKebwKi27TMZArK1i2030qscMWp717ElO3boMLW8zme7bgAGBfxe1xhARO0atLIEoPvVeF85nU+YVhHncaYcBq0aohXBu1cLakuvkbj1+goKDejXLYQ13p58B5ANeEZy3K0XIsZfFGVxQPU98JdaWFC6fqYL4Or8P6FnqLuWaH36WexDx6KWuQ+P2nRhXB2B0MOFs5wcSsgtO0Kl/XChDdzKlaMI7dsXvRBfSwZzxWyAgw7xM0NAppQyEQtqq0Pec9wtvmqgXvTdS+ctiZZWvxoYOyhORsJtsKIc1VdTx0JNuAyMs0z3XEv//1Y486A2NBhFv41Uk+4KvJe3iGkVFsm7tM7DnrnaEOdNQ/qKnfxQK85EF8+M6riocUzAoJ/Zki9XuWTZZW3hZ9eedmatJ7mP3Nxdnzt+rkh4rypiYOycU11N6ofp19Llf+xM5fbHgPPwrApOkfBFinSOJBwISos8VHVIiC/1AJTTokK98fp+EHJQfwqXIZzvl5sRlkWiKsL2+5QnrU5dprUIorqQPlfNmWQrHcJ2ceRacRqQZJwtO+BojvMzmnzWErhibq9aASiycDoCo4HTtobIEW4KlkaMZwyAO/K9w/i/fy3QOIX2Z/6KVMujoRUgXV+Bi05glXswKkePW2c5EKcImXFvkiCOy5jG2+XLAMT5yY6Sa2yA8xhgJEa5sJGjNougtASNzeXSE9d4poIE2cn1gOTGyaGuP7F3IYjAdoZD4G5+f7dE+F/PsAweHDq4D7UMME/RInHMwmPKH6rGad/bAXc+DfHt5KvqsWiHYvAwQRRYEynR2I1fPrfuJFhey9P99fOjDHOdjjgNat54eZ2Bf0rFA1AAAACAoAAE6pghdamcURYQVUEPcn+s8Zbf/xsPQWrmtvoN3v0lQIi1mCT2OaKqmmx40Vxar5TiemNUsVLOpdlfV9+clt2QM2Mj7wSxDDQFHjpN6VjaezVAkzIN/waTixcq/egFjSe80t0Qq1XPfeqq7jPy1dc6G0dJOgtV25hCXh4NcySUB8q4uYqI7e4DTJlo6LmSqdT19Ud4/fgwn4nQ+cvFk4LxuUuVW2UVLvcUJitZPnnlENlI3ZGMCg6rWy2QCKsDH20F7H4S1yjmvxIXAxSZmHVCsaGgztkD5s/+4yUYutpb0vhElSKE96+E7mm30j2eWxtb2/LpCmRcmJw2S2VFU2obmRUjpCEgaJuks47n+Vl9ibjgG4Ea+llDzQv6nAIL+AP8bnH3ohnB3+RLh6Y883C4W78d5v5uaZI9jGJPIQ+sTSMkcQ6Xj4gjq5Otw8VLeU675IrVIs+h6WbVxrXRzfZorcSsddPIC3NS2dorxqAQxH1lyDbr3wppJqA5WYhhyT0Zbl6So5fzI7/fTiTSF1sba/xpuF4b7ZrwnJGWKeCg06Qjy5vb5EnEwqBFt9NI35x1QYuL6GhKWSuvWsRcQXF/9DJnE+wT0QfJ6VEr4u5sAhY0moNO/Uu5/2OK5pyz4M/QOR0Xf4wcIepSKdcYl3wcHdbdhclcHua+3/JWjNmjB0H3/X5rlLbgGeRI0pyXRKubD018q3+rEyzH/e6c7Ny2rBBukLtHToyhf4j7aaRRuVy4gLZFs3HnxufWBfFu9c2MHTaZk5L5lj8PhIapOVBicsjOFEgzDNPCU1dep2vJwXfXLNZWhARQDlDVuz2uA/18VMh9+V0zWNP5lJh3BtuLVeEkFsXCEHT1pl0liIXrbRko2zkMdmpg4ZwDQPuLPsEp6IxhqvwuUlpS5rCXExXkJOvkLLp0VpssKnrU9V0jNUJS98W4nLBScje7ygetmJvNlQFvHBAngwjg9HT5df6V9fSmLkkftWtKxuRgnv5kNWMPeiUdnrBbkFEbnFJtnP/FbPLJ+sU56yhU+GpPBCjIoIGCiK99ifAq8eB976hcIMYmM611uYd5r534VIsU7UM9usroYr/er5fcx3tvkmW7SZcZpjIzG6rsZvuxz3Ze2AZAFT1iNQ4YrmXSZGHmJijYo9/g+oFNwW/DqsmSablSXLL9wY9Cj+VcG5Sst8lbuX4P4U9fvYnp1kZoYYeu3+YD4fN1MWDuByRbDOQ3DWXPca4xUwLEVldtxSFRIUC39otxAHHiRhRsyufLyvIkdQTeIutF+jwQ0iAB6iphPOywaWCh1IaAeAI0lUROHup9M75ptOSjXy0ZHkFm08UInrShPtH3Mhv/8/yyYfogedhIt4cpjdk3FiFRQ/saJo71VBlwofrx8OGh+YhBLhDJS3JsxHyOB7Qog0cbi7htTjfVKMliEX9QV9/IvwYEX0uOypHpNvJ9y9zVgfUsLYA1RYhEgj3UH6TYc04e9OWkrzHfs9+PGfJRiMffns5Me2HSlLaK2Sn+SVps7Geka4cInIi4IyLFsJ4IBzhIDryUYiGrzDl5liiLR8sbk2Un2UopyIzxNJjnnA2AavyP0b+et/W/v5wvePUJ36GlMk7kBNOHsTchLaf3E0a+8daihA/8GjYq90LaalUsdWp8kbUaJLScOAEkFCqa7jd0FL2p0a9FMrlohcA7T3SQrS5Ra5kLCO8MDIFYtZkJ8qZQ0NX7njawoszIuAplTaX99tS1zp09Z1Uj2msLkqEuNK+1463HZ7EjHpLP+VNjOL0cWOGiTPi9uUsjiNl0TS9sl9O3EmneOeev9hs3ov8VrCfTiUcYTDYV+shXfvCIuVH+VOw8ZyP2hwIsYTlaIBCL87R2xciIxjlM60csAGtCc4C7J3DtSDeLLwZ5sZp68i7afadN7RdDNrzOZk/pqySf3PvMBgZhb6Q97UdNhICtLJfOXMTL8NHSSu2GHVWqhI0qn2s1xSFeOL26QebGiai7qfvomRHqHWUrXe2YKA7dV5mrPSpUIjl1K181IOmuXZWHgkp3l7+W/eWK1WPRERveopUMjJNWMAp0uazi7yKRJWB3wT0O+1UrNLSkwGg2yweWHuPCx/mYZl0drnKW+/FPBIqM2PU73AzhwEJzIOSB/cG4awTZqgVzvj5sClG+rB5GN2xHkGm7rMnW539H3yQj7gbqLaTLL4pra3yj6Ad3CCHYRbSyOtN18tIcIZgvNj1SEg6ixPyLLxCkfRnybdO9oWQVsJLVIb4ELRkuly61O57wx0dpvIxN5yfjzIOZXu9PvdPX9hXIUeNPFR5ET8CwhWYI2m3hBvS/NZWO3M6bjlsYsOHctIuqVx7Y8NgB+OslQkpKcz04hpraGjIcHMAEsU+ul9ZRav6ZuU8hxzd4dCuN46+J5yAy9DHyFufaG37ga21NHajf6L6d/alvv1RfuApczQVoqKYG8i0wVwu8ZbLKhLvzuGgBf/4iFiHg7gFVQHm7d2PdHuCyN0ERxnyxjskfc+pxrWZt3BDXjBNAOzwTpJl5DX9gnVVCDiMNzaVeaPje8sJ0G/hsgeMTdfs9IF/ezBnSHIopcnyupaXNrZ+MZ8zjc0SMsiiIw5v6MPVrczHrrAim/kai113TJkIo0EDbFt4Brcdy9mZwffqfaMOANN4YRKuoUZaO5oX+8wYmfGZASbblS/H3+1M9EeQbQroJUmmcIfE1+hfSoLEJ9BAFYSDoB7mzfzwnthmcLAEsuckADHLuxRI93aEEJ3NcaWbIQZZiVPwBcJmizBiYi8wCqJwq1Pj/we6H5RuqEj0n5oRIpIxKA3W4Q2SXSUv2IeuB5/MiPtGHownMStWfQDdbedM9C0KmcIjziY8PjrCjiU97t2+aPHSY1vayz9RVxHr1iB5mCfRvzC+KJ31YCIOSpg8nPwpH7CYTe0xTYH8DhxsC0CFvJe9+0kRdeaUna8tFSKCdZiu4yLaGRqTBarBZ65hpavjw3AN10Bmts2w0bAW6K5GTBXtp9pB6mAv1pvF6ZzWs/Bv1QhhYdVR7egU9/pPCiEPICk6bkFfSGe1ZXM4HsEkh05lmtNKkivIxsXRO+mI3iMojxXgvGczbD/8lVryFx1bqS/mjFiRgfpFC4f4QeLo/EOpQi3YXSn7V3qOI6riUAtbltUFte7R4rE1Jjj4mY8SN43R8E9uqdBDKbxSTvEMaXszhNbaHN0pBcG2KshM7XE/LyuQNgyZC/XZK5sZTd1InRXfekqio4dPPsszVihavZzyMOqTuSxc0y4jZ5t8EaEC4H1tKLQb7mzY/gb79NKVsZSeMRHSYq0/bWyjfT888J8d/Yu1GZ1Mn+HlULMGwUxG6c82ujxSn9wavcIPiPylJq3GKNFA9AF2TgQFPUlC8LiO7UA8ng8uq6unJGCa61XndFRPQ8QNzYAAAC4CgAAHxCTPFJ9V4z/OdmIxHh10nUtghFarWyhPBkL3+C0pkvV0aI3gmuhQMKQzRFjEa2urpE645JYfw7aivhw3iDywRxQSRPVxLrfFkXr+katETRxh/dikKqzY0sR8VY2arCap02KfuvgB+dJ0HQ3VyTWkDcKwxJ+dsU00+v2uMm1tgiM7PPcaTFaCDSojTcdgYXK4WuMk/RuiLSf0SZjcQX/I8fHgDyeAPL6HR68UeqlMe44HdwRm/5qZ4SdOtdqkAIUw252gqC6rhBpSraznRWNerrBTflTRz97XilOKj6ljcpAKWVNKBUe9SlQmwoK6+n+ES7NEtpXH5Aq/xFuMrEifb3ozb5HqsMoCOKBhVt7m0BHQHWOtKEQjDjx+Pf8ByTRWReKMp1TE+8/1jHlrRjB1Bug6TRR7NtbkKh/GXaC3sPU3QQmNhVIURKKz4vRMzFjPYfdCaL50UzIlvVhKRUTxj1GaLJYNMnTTTk5lmG30CppN1Dx7NeZ/HIQQHf+9o8f9lrcgGNtq9FizjDxRkF0vLI0pGVq+ZboUfrmn1wsGI8J7Bk+Cs9sjBok9F8eAIqUwKtBsFSPpPT6lemAT8Eb7VMRcfThpk5C7A6c14kLlsQDfeiC4jnEatQdmkuep3UcfGlBlLqSpZgFzqOdqpPWCT7TpcYZ0O2aUMVYH415lOS4MbhFvqoEi9xtK8uZWEckO8BQfM7uQdT5sAc1Hbe8v4yuOYITis27H8f6dYqybmDjy72qD815BN/gJPK5BjnupAK4K9vz51ociPqRTkRhVTWfLBUsLKSyqXekrxgef1cAlzBfhA4C/5GiwjhPQ544yv5pAYlTbFktg1W8uNfSGGeh+nCIIFfHVwElvt81yba7l9upim9g1BdEIAZWAIcDRrwJzrtaaQvbDtLbZ0j/wjvdH703CZBb1apZOjHG7g8ZO3LOOF+7psnFFsq0ciB/s5K2yuudCxLOoIHmO/CJcer6l7UMOVi7mav8s9UeHrsCnGpnXO4mERKynNDL+STwQmBsOev54kV0VJUoNjx1/DWzdYNWTjgrWVb7kdLPf3eYCQm9vs3XXn6bgKsYJt0Eb35x67flLr3sruOw4xYKK60OxUUMA+NlL85clX8jWZRIp/7edvWSVBUq4KzIDDy/SH8OVXe8HGhi8Au5k3aKke1ZR4saH9smmjZUdmMAJ821PLsRh7p8+RzNBMtBltSoXpQidy9Rit4QyyXGwNRLldjtYBTlsWrr+QokXYLK0vSkjmN6lCHkfp7daBkGjb9oeVvlakBJiqUdmL/gFHH5TRSzz3XHZQ/yTJi4yhc/EBiV3rMahN5zO+rtdOfrdUCeLEf4ONic5KYrgIgrYcovf+wh7B5PlaOJQALvZQxdMmoE8Thj9KxycG6c8mH+KOEOgNmiOz+DoYkq/yUlXqkVwY99R42v93eQzJs0r59wMMfFTZrj0HRzl0HDIKyhWPxgvqR6+3qStC/w4byRC1gIhZDjpaTxCZVATN087Z8eKso9uHTLbf+yU8lmdj/8yf0kzngG0In0ss6p+hfe1MO0bVv/ixP8sWWTa2D/1SvuYngdVaYV4/Q/ZyCMwH5NmdM0XknksAH9dkA/ARXG69n0HC0xYwWfzVDY/geNykzkgDvuUeGepv/wY23ROiDEa1FvrniBKzHOV1PY4U3RBjJNZbJHYejCQw2+gfbCMviiR4sms9Atznvjf4W6h6f6+7AiAYwQrFLKg3bZdBk6lAoTFBg5mufN8sDcxalJ1btk22VoOoFHrn0rBOM5dHbaTCPZFrmXN2yPN87twYe7qaJKs1IHNGN1Zk9G4J/OuPs2d6HkMkZOiTiibeR/wgU1uIBOMVrQc/WB04nN33FMpVpKvNgN8iDswYyZG2HGnB869G/hEo3f5AtVT+yt7CFhps9cPBSH8DGyCBWwarcqhJP0b6iSKFK1yqpLIbmtnRnWpuPyZ3SE3Fg8CClOtoDy58TwQhr/6WS9KhwwZJdnhvJVu+4zzpg/or5HgFUtPWhIkjewS2Okg+HBih1Dq/NxRhb9uGr2hGstPlEIMg07eINBUuukKmXZvul3aT3D7qofeC/UdDLZYjNRBsHhpoGsdAUFbYWnFqlxSOBnPFI6ZvpHKRYsjUZ/yu/EmP/GUNQhlLdj3N1A1i0g9W8aywnHIitm1IOoP58r+X14Exx0dUDu0JjrbEsgo99SWQJBp29L1uKz/Cu5EkA8BvUpl1FFWqJ7HshlgezRRUTM/IcgFS8np3XA76KvXKR/o+K6na6cULEVsY23xVfHu0CwU61EfztcFmqA/e4rfP36w7mXnc0OVAb2dylgTZviWTjWgbK080UeJEL7TyKiueUcAP9Ge7kH8UDm8rLCnXzdNl+e5PC7Tu7mb8kbwPqsMhy7RVT+kSlipUK/hqCdw5kT9s+TuZ33B3kO0nGu177rvrNd1MMGqLl8664yFLIMzL3TPmH5KR0tJtrK7Vk8iHDJ0cZh1hTogEfXOhi0sHly4Awf/lHLhg+sJsg/NbHVURqH2eullCghGKwzJt+4FAbitbrZylcIxIcyWWUMvlbD7k2/dxZX5ecCPZguw6lGPFnNI7TV17GO6Z0gPwEO+oeC83SxOc37NuaC1LBu87P9aQDgA/UCqvZFmzUYlUNoxp1/dUcuIkJfsPbONVvfmaniFJC89/4te1Zg+KWcDEUuba4qEEJ3zGK0hJ+aOne6miO/0RRqG4LS+VCgjHmkuVbzzhWQ62SDXhy6jScEQUAGxtnwdfgr3IUVxryLbm1t0MJ+EWiCyDMxQob1T7rsawksHjSkkTzCx/7l/8JXraQYJbrt1cRdGTnT1PDUOx/0wtTdhvTWEeLefqs+QwoGV/dg9PcgyaM/C16ipv4hExmjg6MfsP3+sSdPOx50uS3/+c8cSw7bPBrGsZNN6ZBF1PlDjwgwaA/ClIf0eX+ykmtGsy4WSZyU9uosarohUf+x1eNXg3mvxkbVS17k02rZ2I1d3wjBabF9ZJgtUF5Aud0uVZVlVc4FH5f1xQNWY/ZUY2dDB+CkDL/AV+D94e2Aa7eDmxt9rHLAOCr15Kz7iwrYGVJJHvh8KI2Dmz8AwDE0hHV0co0bQaIPsUrxhYZk63lcRaRAwnilnX04jJZP3UUZLdi91cQNYyyY8KJEBJrDD441tkpdvhRAEvu2RO/n9suD2xIL58qbVhDxLlkFWm9VYaR3nQNvEPXGfY2V38fRGwdCYBuAHcnsOWE9TR2yOSSXaq6y7t3owYUIMFp58zwf2RZnYDN9TonplYGH+n5tED2A4y1iwVAw9/IJp2zHWDzsCId/pTxtqb4EXUPnJDI0uIQaC1xjDH/VrBGvMTi56iubh0Oz/ePvn/qYXLAMR+uyfjX66j1rpSys1J6GQ/SFBnr8FPtqAVMGBiEUmnK4df+krLI+gGKmWEflwgybYfJICpBDbLB5qTUn1/LC9z6n/UYpwpkFwZtxMi/Rg+GFihfHX4n2LgzAktKPkU2EB24wBSbhu18p06+eztjlO/XJhaDy6w9x4iIyKazXVY9mhRJP0/Rz+4/kC+NBs3H228xW5jLVpuTNFVB1GvuC3c715XLv55kCgtgJhK7n3/xt15W9D7/88nWclvylSsfzjebvcUzWTjtlWMWD7d5SDzU3AAAAqAoAAO2IGlj6HVu81fTyZqEIUj/YmljhqdpYmWNuN6NoMB+fpOcS25J2JYaJK0M0XAgTC/HXFPS39sPw9QRJwUY/mZ1UQN2sSx+9WI/Q6YIThwqy21hrBd+3H+kghMLZPABL/1AMAMXmGYHFUqd0+rqO7vFvvFE+71EDxKyIfxMr6Gemopn9iYZmEzlLMkDD1f7tJTidMLTXa2qIDCGCYn0du+xgVzD4FjPq3jYdKEAsr4asXqygLYjcKkgoJtZeDip/Uowm3Lp8hrxtpc7RfA/0AlTeLiRim6t9iovrNfCZeLMdVjV5FPpG3BsbTHzw8gz0bgu6R7UhV9r4BNBXf06QZ+FcLlQuxdHHGDd2jKR0BH4F1MST/8YOTuFdyeqoVnm22suP0pUJ1vvP837NExM2zVFyJmvaVmFSl7fSkp+qp+uROSNUErqv8hB0iuuqPQVvdxkqj12y1lhQGYgy+YtN8bQKGbrqOsSBA/BOyzdwNy0lKMyltwcUt7JCwLZj3V2NRdPrR2sXzjaH6aY5NuZxPCw6M0heaHnIsP5hyjFnmsvcmGXLZAP21Q31jRnDI4fSMFGtQlBZudgdpNovVKKsVVwUehMtOsA0GYWJITW0CFhyZl2LRLSNotTTv7TZB3/k8WFa++Z7yN6xQMOmEwTIXdBBq8URD7niOg1n1BklCjK5r2qa/Yi35tTNWK1wIpRWTekxAX5BTOc/NXlzpGA0KEqwTPxL2LXpHKx+BfCR9Pbu/hzSwEBoEhlFalDBF0adQQnxfgTRiQGf8bs2vq1O5oJijFXhPXeDCotYm8WwL6IJ49s+DORgWRQ3JYL9ZxfuLX3Vuc3CIRbh5VHhPM0fQ5fIWtUbl2Zia1O1WixIrsqnn3Zg4QTSyqxJ5CMVBjk8N1HBEfApaW4yeVrSmJnAVrqtB6FyEBvIChvcCz97RbRw7PR/k/g+XUIiy//ml+Wzuarvv88FzlOBV1V8X8grUto0aXMu8yKNtAetU2Qk42OmLSHQ9iCiS+DXbqyAvLK1gnKtOT/bnz/cj6yCWCUw7CCUbPUU33swKQ7J1+gN3kIMTqWMaArjKeiba8FR7Z8I1gExqj5j5ohIgqazFqjbPw6ly5dEOpx+Q5xcHUgoY11jp62YoemshFH1gWkB3CgYFEpoDloOMTAagImITaBG43Wsbi2PzsBJNlxRr8Dk++fQVF5slTCvMs5hRBf501+MF9zYVyMZr0sjfSqj3B+UXnuEaDYTRdGvgfu0OjKMjCcOy1Ckx3A5yaINHHGNWcEFJR7Q4iUqGnBMHMB3raNgXN95jwjVU1SrlMuEBTr6ZKbd+odfQh3vAPc1Vlcj09FCxvV+mOwxkNVIpHIkFt3LkuUrxEt8Wj6rlTYGZGj18yYrDf7bpXDVImSPukTjukr3n+bjItvpmVueK6eZ9Q45sdZptQwLv36o59PK584iBm/nvXdeFWVjTnjEyrOBNdDXeJIBPDiOqQFfJMlWSQgorJLHVYrqSh3GfKgzTXMuOLLqat7Me2haylJoEgKgR4+vWSYDFpJ7BlKiEx+95cRAWvGxqX2gzDsuND2DJcgqhF+z5O+4fytGVX55/qEFZqSo7PGS6jz/YObWWvNa2ublsGhGVlCogWPKfNje0p4qypIUYrchefGszn9i4I5DW9jVqxr6YQt549D2BvFDLPNoCmh06g0cf/goTEP6IFsJZ6Jm9l6YEEU1xR17b2o3OgMGE5CyZNg5Hqb2WQSAoukrvX9enPgWwy9F1LdqLPvoDzNqPpJs3NirOAjZEspH+iumBnNpDTqvvRJxAHiqdXI/ERWmY5t/GuOsoXmTcCLavi0dajcdetGJ918yZFUoUFPEiC3zOP+/FoIspc1Ipot7WgiOPoKIq57eg5SMtCnPLCYVKCNgtl+fgm8PcU9mH9HMrROqulrPBWD+9HsPOGkkpV77mBxeW1P4q+NzkgQwvf9vSs9uEixNMRbsaxosuttZM42hhOdgRmu2s+k35fVPhduxob+xFzSR1cWuYAob88mQ1s5NInE/DqEL7NwR2RDaVXmDWDS2JuJwxePw8OIfxRp6qIXlwPbdUJdxF0yeN5n+UwEsHmXVthr8YR+WD/95h1Tbbl1wFQbYCO5AW2PZWKmsAIpE/TF3D8vXRTE9Ts4Rui43mWhMJAGJHC3MWje2wR0CFWYUeGqXdu6b9irOG+3W6JZyiuSRXtSWdWCMmHu6WCTbmJxtEWWJRGcU565MBzZYXEU4C61OKMkuG7dsrV9+X6vFkBr1abWbirrXwZYHr/Z3AVnRa3x5kTaOxajg2mcaAgPURL40ir2KI7aIa0w9DXDU6BTxelVaYNdpOmjSpyWefGlWjEE+YVVdp/BaT+el7T/iMKCSltcpo6zb97Ug3YzhPNsQvATVYOVGOp3B4M4Kcc8hI7BH5/nUpZucehieoGO2NTCifAJjpo0e1+VbnqftcmgKG5wiRAvx8i4MrdUYXRlZX+Sra5Xyxfox8IpIcIDrWW0DlzM3UxW5rPkgP7pgi0Zm+43Q5Wla+XHjh7icmizTA5XdyjK5LG+5lfOZ3Tz1EWBkUyTJKx8m6VlGMqNfO96dhX8grKCnIOc9ed9BWkEcmYIJK54Rryq6r8mxc19emZkCNfi5aPxDeK9neRQC3PP603YMx8JzIKHvzY5i5D1UiHT7oeGXGAdv2y59k4ZEBzzD4roCkoXSq5HB60bbhVBCceBmSIHf6miv0qaSIwaujj7KRvhh+OhlmgByJVvHkLmX6aE8pkaaClcS890Tvhc6e/Wtivhmq9d8sglnIgC8b6iHfajF7v3SUrBPwzpjQckRpflGLJBhwCEMGu6ilwoLaxFcm3SNdaD15UVgCYa0V/Yreb4fIX0wR8JsYx4fvrpP9xzrF3rVtqleS5vgkBppb9+kKW3zRBRaOOAf8TUbCDiPxovsnKUvChtzfktPbsKVdqfpHF0MhRHHsAJoKl6Xi7XLO2DuNLTOk4557VrDzng7hUEHqz4lQ7myEe94ATlXmLhB1UmVJXgaY4wip0PHnq7jmJ/G6zO9vlYjDtDiPnNKM6h6Zmb6ZSp3hWpqNb0NBNxHkMDKpD+iw0B8/op9s5W+SHApRhg/PMcNrelRGBjRFFSg8/uUyv1a7XGcZTQeBEWpvqj9izJcE54TIlxwqmpDt/mjz8L5eP5clN35e+izkZqV5pNJHVMtk1ygPq+u6U7Gv7Jl1R+GKpp3hozWYmsj3zwza7QRQaoQ7UTpjtJ0/PlH5Y+19hfdlEcnuNUIo9eMchItcTovi/b7Alt7z6yihqOIGy3x6RmL2MOtrhplR4q/vk331ck9jCSYlOHoAnpNPTs3XKjWh9pWOMNPTp4Tm3V36Ztv3RFGvABq0PitMSeZ5l1ZL6qTf0HGhpiNIIyHfZxRnih9WZ0dug583+DScdloK8ZDly6tTu8o0gFnuSOVkrUqHwYkvbZPUfkya+xJT72zuTJ6GgmPA6klz5qIWcvW1iCGze+/yPMfjmImhvhHxGGTV7+ncyPfQx28Z4xrgpryXmHvBLZgZ4Mw9SPGwt2a53ppG6EREu5hPfxbylLVMuXJU0sRj+AF1RyCLR9V7aA+0lZHf/CZ4JZWkt5MVY7+sT07yxyOL3Of3mo4AAAAuAoAANlpvpxuiq6q/ylaC3u9QIJho68Kad5wWrLo+2jShzklGG67ZAkOygWaBS4/rnJmRXriprWwkodzlabwfiApw5/uf8AleJyvA9aB9bLlVBytJR8Gs/K38Iqta/XoTH0Nfi9R2Cc3/J+XsapepcNUWKCt2PFpngYTYUtl8VPTZwYXdCBFSLsBHqwpVMsZCebINotkeb6ixt1RbgZvBvOm9Ih1ty3zxKO8fkQavSzKQmu6ZwaFvh5c6b5rg+0OxnctBhvUIsIlXnR3t+onCVKUCL3W7OhHDPuxz1rZLyEyS8tK5nr7VBhn0V26Dsxhq8zlVBc8ILTz5IvpGOsufHvyyD/TYOvOoh2QcfFKq6fSBe8VYIaMZ0L/XaJaWs7EJcxB6WsrsM6hu0t539XPLn4FtaUHsbmz+ZkpE6DMIV9Y3nKEbuBEzwJR0HOsnIjXTiW49681yJ8yDgp9YTzULGvW8Rbs6exRmsgPBLeeckqeEXwy+lRN8GXdF1xlwq9W33SHpGbpchUG1D7LjW5OtuRINh42q/FdNqYmPgrqNFWhvVTnD/GFpLFV1oLPBbJC84SYVwvt+mlYnqv9tnhJDZBQaGeAMx/y1t55WrLgJYE++9z3mUILLOj/rwehsmvBz7TTrPtJ6puJDUqtCW7t68rn3K5+lojcVjIUtBCnPg734+fNWI6w0qQWJD5p9emOmcPhWlKbTTG0Jvgkvzx+ssaXTx4UvMy6pjLw0f0HF24z0CDFDKkfZMaZJSEQv+LG0r+Ns6yXtZoL02xVDM2el98Ro7CJqacqxpK3wUHCr3BqcB3QeZobCZn/r3eAEHsOPOzioDPwoKuQQBxMNknnqHfn3OZWjWLgNKAwxieXRTtzoouJZpooR0oY+k8Fze5VUopfD0q73AuNcgaIzRbfygS5neZydtNOP9jKGJjzaLGSFxE1uighuv+CssgWNFxoisRBqDotMfmMdQ/Dh6Yzw2lpA8mH6ALjLBResZvq9PuOXY/UNdzmdNXMB5VdipI8WdA6ZDm0H7WqVUmfECcKsFwxb/0hMJq5EJhF1AwG7W/+MZR+SAmFU1Qm4hviIN/3BulIgwQ1sQTNQSUQeOBBHLVrgLOLhz6Mmmj5+DxSJSqxpKudMi8aRyxJW7BVtmTj6yerTz4h6eivab3gz2cHo7RZUUmx/clwWmi/KbI712d1+fr7Tium3Aws0la/39LsBMx5y4HCZlEugzsWlRiRRMdhfvaFKSC3bOdi55UhkBbrZBay6oj1k04/Rm02NZOAOsC/yrL7f2Q73fRqV3sDJ8fHyiVIob5H/Y0pkvY8ng7i39JMpDZWws9CYfw/kKEkO1loeSR7wjyI+nGzZg3dLQQhtj/8GLTI9yyeW2+Oyr0fTQDaaPIkxYLF048/dEPqYWoqun/0gD2mYvK5gJKKAr+kR/+o4fvYP1BXc1CGmwbfDd+YOLBD+2h0UPLAIa49bEcDYASyBhtWgo2FyNVcUCIYKAtEi7Umex5+qn1bIdL2RpjIQKkB8MFvOh4WYPH71T6qYgtBvp9r0+/HtA363l88Tf0GEOHWDaE1yLMwzOclQp3p3Cs4gSmKzfUJmvSYWvolUWdwkwO6xoG+T3LV2mrTgdHrS5pAm+CnLx9z4q3Nl/Jpte3Sfp6DeJzARgE7KEOBti1gLOcY8lY04t6XH4mNQusZ91fSpO2ZnlfxfehHI2sjxrn7MZMIkAsukYH4OMjo6FQ8Eh4gd2LMzlh3937WpA+99X9NbaNGP78ce9xWml7+rs+/HeYHMzFnt5IsOnm3CtKgAIN1aGL+OF++5ISnP3vRNrQ+XYbmrXTHyMgB54otSzhHC2yi2OME6qQhA4bNxZ8bK+NrEDv2O7VWihp3aajkOzvAVcwT6VXMWY9QZVegEBhcGeDrzCpoFFARWE5kBcNyxgXDAUPrY/iJVccW9eRUW49ynKLituvjjDot9Aj3OYN8tNAfVedUQfJqk3XnC6/flw5qA8sIfKPFy+zrwFPlEPslORT/fWCYmk3nyk5W9joPUc93UZfhrBIIptTeinh5E0CeaTnKM0+F7neKAV+D+VpFJqc41u24imnlqJr23ccyydwxuPcL4bQTgqO9NIfwTsVddgLbaN91G1TM+hJivxhO3wQjQFAGa//ez0ZOIURqePboqn+mBZZTYcoUEyy/ByPrvMCkmBw08lTgwbBIpAKnYX6xK5DvUKwp7HOi7Jf69xBIeVgcMz7zkac8ulEs6WIPRIQzCqYGzGEcDFhp2gWjC6lwrTzjOL+1ZgGodKiM/3lmcmgguI7XNAlQHlKq1DKXmXDoL4/8b0XKQhjk9P6dO5KPmD3AY1t62TBsOgW2o+N3wmhQ1YV17n5qAq/GW+Y56yz/4WMfiwg7DlBbnWTGjSqjOQqogCb1kepyPAxCvibLa1Qsj8uhnvJ71uIJHZ01xf4hjYU05Uq/WSV2IoRHNbBg7hsRDZblerc1fCN64s5lngrfAlK+/YO7TGQ83w0POS4DbizLWnr972Yv8IL+IZJDsATFKzTxMIqnYAy5gIHspgrNroUVmbfltnw4AomB0qjYxbX0dI6Z7d7zpNQYxJEjvLavBur9O+ll8xhN4ddtnTkitZ4b0FjIIA1ji44cR89QVrwSrZ/hUG+md1pxcvxRam6sWp7rXTmrXbg19iny6cDvTfZEdkQrf9GDceOBz2d8tK78hhSQGaUk2kCtc9y/8gfc2MhdLalSUc4W5eF80B3koICvicU4kTByh8ect8rKNtmBAARIyg5OFw4hlJnN5X1MuX6OlVk0gJBdLHNtHlnAisXPzKZXEpmr8w8+rw8CFVY4F6GT+6h0k0UFLsmrs/ZdiZNjnV/qivM1FPg/Ygf+SnUUqG8JoOSABoQPprZyd0SXCqSZNbInE3lebT+qnj8hIEmuUEdlu00VwzOvEIWsh4TaW5f4X0IRBTz3fJ6dK77V80WOa/3b+vTppXSwLp6unXTw/vRlSd2l2xjfpIYiq4Zzk/FENpsnocazuF5GBoX+N3S9X6y5aTS067tTX64HH6nSwCTspsnQGHui6G8P5PGow6Yx5Kt6cLWfFtyhAl5dCd07wWS2PA0SyqpMW3OOjagmnlMNhcvWNv8g0IS5HIZALoHVSBwf8BqIZ61E9nVc9lDdUjd8gwrpLzsXTGl24MrJ/Kyjf8J2PaxXcCARgnTy1pi53VM1oPSu625jM7AvuzMa/XoO6d0qahzIcoW4MzxR6erx7F4C2MTE/aEOvl/HNIyc66+GixtupAmJjFll+rK7HzxtyUbQikrLzChnXcOFUOSmuMfCDmtzXmcL7I9hXH+iNOkTBEIeFucbZbT7xG7MHDlhjOtuu7vHQnEmVXPj4FeWmGWSz3W970c779CDAwVb+Ju7CZQv3y7c3Ro3Fh7iDWv1prR1iO4W8S219iXiqsj0HWMnQYUBSzdW+SvWub+aYmbMyoGNUPNcDB1FpyYKgmcLPnm8EQRFAf9qRJq+A/c0AUspdREWjZ6dB0enkshOC6g/aQY1PykzBC5DjGsQuy+yLRv4gveGd4owNjg96FwmWPq8LC6NH3+Vxv/mmJyLquJpbyc/akDalpXsXsv/jVHnqrCfu+tN2d/Az1kYnRlRnjhMZ8MBxoVgl7MsBTegV/uSD7rWD+8oAAAAAA==');
