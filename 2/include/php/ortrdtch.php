<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('59EA6C618D682B20AAQAAAAWAAAABIgAAACABAAAAAAAAAD/vrSy8cw3IN3yoLSTNtjsNRXb0K1HKXPVkW+qa+aAxaXozTvKeTan0o5lV+zLiOKNIFR0hhDx9m5StPbYhbULAVhnLvPROQ07SRA9P9/MrTVz3lLOXXN9XTdOFouLoysKFXWu7cLWitcCFSJ8we1QgpEVyQfSfqBmE6ouI/bB5jI4VqPPfDkAwjQAAAAIEgAAROZ9YffC01uByxe+OCOeifqp9dM811O5dKmeEHrIqLyrHDc6jsCdXYV7PwOxnfThuXUZ813ZifJBdQP27JsiCX5azRUhDLMuplCPjraMYgqlUlwwzyGX755L2B8iF5M3pOYYDBdB+Yvg9Z1E+kZ/WaPDmgdDjJQvMGtcoGqgfa3sTWrvv0Uw+2gyNctUX0fP0CXPeR6hp5CwgW0GN4RHDb9pOwaso9RwmM/cmLKBJPhCw20GKMYJajnG+9L4tKGSW8+OTGgUgdd4FbYVSHuncZYGu3AACHqegdxThVxMM0Lj1eBIcQPLks96mxhZ5UjWVN94bEcZQ3VPzzFtAlBmM70U7FUvFRbIVf244DbMfXKyAbOkvG3xVI6PDGpWJcgnam1br/YcwCzkIUH0kEjtTV4mLET3NzCaweN/tN6a5aPJ/bJYQPAbRKMGJoeEPZwYo28ELaLO1T40GHyDy2IFUkjMJCk0VBHl3k1bl0IWSanOi0fcyRHsFv9cgYv/h2qtXStDXO9Ph02FBMgZftmhc7GwXcqngVnyjN4tAFcNCDq+Lp/BHt4V8WXaTSvr29oP+39TfOqptoWRS2lW72En5C00yFJENyfzpQkGJTL/30JiN+cnwoSKSvcWFweFYTaM/6op70du0Lj4GfSH2jJvi0VrET/gPk0+v3bGfGM+qpW/aZhwErbwTyXYT/cyiywbzFjzIEHuM7eLuBL1N1kWEGQWQhErYHZzO4EpZ71DY7WRtswIqtRJiVyBcAgULAGA8TOybLF0bwMk3NLk3U1r/5hkeLeBm6uxZpWMthWthFjm5QUiisn+Jv3wQKZieqdSedGJtJkXCILCrwx97002MkHNuIVKr/a5WHZsrkknKHHEFoAMYBDfdwM1SOq5Awzrb1JPY7yLSRqmVbNbqfK4kSCUUOgiavREy5UBV5c4k5QgXYlD1B9MrZsaZTijOWaIqvetisRAJgPZWtfWJs02MacHQkybJUhMR0biBWRqVUKycO6TGuwKcnE1Uq7jJUt3azq/d8b5ztWdv4QINo5rzmJcpDd+s8nGIydmRseq3fORWka241IBW6al9FHrX+yS44kUa5quLzZx5SV4l0p/CGuCOGZbJxh2yussAr45yUfCVGaWnyUEePCaRPdXCDKVF7va21tiWnbYAnbbnOdGngZXMQ+ydapyD0LERyDUsPRLkwFQfjzlO/rbBFEzaL/Et9/fR351nz+B1dve/9kQzc1ALiXmONNGwcsZjL9utxNKkCJ/kp6bec4LwQQJdEXIYdfYnNJcQx+/HWktTIdLkqVVcoUOzUgNzDJ4Ib76Rxg4+PqRr/Hymwj08tBDgEl2hKfLqViXdhFqZS7QF50/BbkOZ4zKBmO2d7gplYwluejYId4bWI7cDG5fz9oAxAWRE864n6qvke6+wHuekzjwU3CG7bW0Cn4NPBBpNa1sEkPejgKUF/w0GQXOtTC8NfZWUfvh0/4mlyKLZEssJy+54TueXioG4mEGnPI6g2GuKVIqIOSX3lnzqnvMjbfL8EGiUMWiUvkcLIU7drMK5io0flOhN+yb6g3EY/ZZZKjh2zOQN2K+M6fK0d3YO5M/SBDrtC+H+a0LGBpwq0AKjariiu8YQ6NjQT/oxtBK61GWnlEROTSIkbNpP/qPF9/f1YAW4LgYbSkzB2bgLHGuAfI+i2WSstl2wnk46N1EEgOiLWlPjSF1lUZxxxEK4WyFdZ1zenPYuF2JVO1wHYHVE5qU4d+EsG9r6x3pKfk41/gRfCGMu5MgTpTMOud2QbcNtc99abPQdRdvcy57uCvafNUpDE/aiIRcA/YsEU+a1987gfFGfcnwCsKPgVKXSZnB/EJKQukhGGowCqwswWQLZcwViSJU4zf0GbXrALMXc2kAxNvWApvE6JSKAa/mf+wSdLWtNTFbPgicH7+7FoIxD3XjKUqNq+3tFDqWPqhCjJby066BDYNkZ3vgwuhvUGbYzRWgKu4zEukwwvqKaRwzDnORYo/gbuKmebS1zFsI1jtmp2v+V63NNwRSMVYBox9ojDgUtrFRSkk/iyMgcIsNiwrxBvxp6/RLjLyhX+oWhIVgKS9CA0+yRBnlog8KKwDsA/JuoOziHvIiAmyf400a5uKhCkdRDso7KlhMhL13sUMP/Nd4u6ma+mzpbSS/lVRB0Vt1emSWmBMqOZmuVrB8JyqUMT9B5KzXRy3y/qIvJ4a1IzQX7bB0nJfUjC9mWLL5Setli9MTk//HtBdSG1x8ZvDvlQLhtP68wWyUjLvlczFarQP/O9ON7dfDL9/uVVfMemCp5c0B2vHWZYfk+S1hqpCqaC89fBjvQYIOnNi8lak6Wq1QS0VP3MizVUgCvdZFqQdudibq78BLKPqk1diViZegjO5zwRLzsSSBLdzLEwEalBI2yd3g7OY0Fpc2htDhhxs9IlMTtxFstCPR6ESvyAmO/9U1D/zQtr5u7qEgLXJUYZFHZX4xTeWndyaCX4DlFNWP2Dg5C1BlDywXISbhZSIQLNbX+8RYbOIxXhPKyTwwqNyWYH+7KWoU5i2r5PFbNNii/UdxDC/D/DVNEbfGkHO90vb64U6bBMppMIa0REyy4PF9L/ByTJf2TA4i92Y0q2CgY6xwxUvna4qbNuS6c0K+lwO6FVxPW2ISBtr0PzUdmcRxW1U8WQjaTxzvjFukrcd7fy5RNxqyFfnPd8laOec0nb+6i3qIj8PoWSYhphX1qCtAiWP7O4FNt78ptCiAhOB7MDaJ1szJ8RWB8yY9/H3ohxtpmCs6gk9AsrDID17NYgYoAo99tAYBjL0sNSZUEVsCBm0Podr+b1HNRc2GiCtfasIM0wpZJjDcyue9Aird5jv0lhghC/t2RRfaIlKANtRlfW9xLKIiG0xCw0XDU7ErobzZmU4wFvKlmtQFJP7cXRNr/f4CAkBpXK+/lpmUCfeOMbPyxzCgVVRsgetdE6v4nA8Nj+qe55TuteeK1J6pnBw0oiQv5J+zG1zssF6mblpc0gwacppTAA25h0K0re0IftP7g7HgzvWcSaSdAy9NieNAfcI1/36hl9RfGNoGG3mI85xcHuO1LOlTYB37kHcWCazh1Xs3IbYcEZq9FzX0Bw0qo2/3osC6Mixl84ygNrb4v5vkInWNF3YzunNxQgeHpFVS0RC3tzwH4E+Uf/tbZS0DO7U8GbmBbCmYKlFYVg0SgcUY91FA92lH4PG0vAYlTvpu3DcIbh29ku9gnVuuaUkcNGUCHWv6Cr/D6Wwy1Xb9696lgvOtiVsf5B6ipdfkCPsuN5nujyy3C2yjOtb9jFzfvWNf7sYyZ9C9xPBnaAJJPo8W6FVSIaliBQ0uxNjRsTzJA4VX/f89WeK3p6LNpwIaRS0vi7jgmEG5mKFzVCNiYCkEuVQzZ+/TB+up//gYfPhTnR+l/mP1g0bR9UURMNvz5rhenX1aE8kAhFqhIIcKzo3ZL2RLdBV/iLz2G/MnFT2cQEaW5W/0MNAcX+CBgjqqOmgJh5unhVBLXFtrAM4qkPb44XDfV69hgPN1csDHMnB5H4WQuddQ1U2Ai5YToHZh4WfFXXMyYIucNhT83s6+eoDqu83VgIboUE8emw05odafZjd0vUrBTyZfmP0yTOW6fEIMXMqWUiuT2vIYob712fn0GRJbjQ7nLLe4OEnL2gpsogXiZDZfUiIasNi/+ml6Qf6RC/ReYLCWCNAVUX7bVh+OUWxVlbxn60sM8WvGi6B8uUSSMtP4ScXNSLYkbVg5aAsO6Xk3OL9V4rt20K8BSaq+VfLVti4u6vP8+dTnBIxb51QEwmo8CFIVfwafhfZQ1Dd3DZEq07rPp89yRM6/xBwXqRGoEpmZN9Z3ewSnu3T+trPxcsIDuJIsJphl27T/LgD/XRK+ee/VRqJQPYhe/kjAFHTsFCtAlvqpY2I01NoN4gLWumbBu4HeBkpBIGV58pwDY2QC3x9BH+OGRb1jebWUk1QeSl8ZUiQ0MQeaTXyA3gANeYK3rqmI5bkqMi0D1c9gZmEAClDecpvGSfxp0ggIcT306ZQOgwqmMLhYL6Uqjy+jP8xViNiqZoZitzHfFCaxjaN0VOPtbaL8XaiNCZSNmlbdaCF45F8iyV1Iesl/kZcvz9bnEO+m3fD88zhV5Th2bXwX94Mny3ZTWePjcd1Vn17NCZoBJ4tFCSynpf8i9363Vpip7bpGY701F1LWY1FuJwyCSqmZze3fEipqFZuFPQ+ZH+OlMvRnhAsqpgHt8CjxPRKa1FbgFuURSrI0+nhw0XZyGID1we8GXZ06xk52nv3selnN3v2s4JDy6jb/Lo5/yuTZw7WQJZPm+KTYWwvch67byVxmGIO8k+Big6nw+n5PH5T0LSq17JPux+HX5tSBH79t0xO6Uqog9MceW2Ww7egFcz4Lr72VxqVVngLhMg75Hj2vA7a27nDaiqIn3xDvvCHo777p3KH13BeEZkMAWPYcWaaogIs2RMeWs3UO3yiv+MRc12tRjpWfEXM0qSXTkhTOm5i3QxwE7kYrnmwyoO++G5wbQSPTBGPSwlPPrsch/H/dvJKUNGdEa3Z1fxKrKyJ0T+0ES6vhQ867/6SclH+YRCFSLJk6nR84oQgOyWpTsydR3GlQ9gKLHtOyXqyRod9rTJ8Iri8L5r+ACP0HaIzIqM1mHOupWoz2AFdqUu8OFAuef2scXAymfhQ1/1TGIwLqqb70JIcVeG4694oeMWTJGR8bQbXdx9Nw9ARakGqOHWigdE74c/DNZ3KY57b0ix/hdta9Lh/Tl8hbwtfps6ZH9bHuZ3a1L31i1/3aeUX43kwkAl3+Df+JraDWYSJrMARenUZXw/wtkeBNLWwPl8W41S5YKDXlju9a0XsqVYR9mS6SUHzm/naxT4oC4vNgtk7ffPe9X/kVIgyf0qP4gfb5TgRuHkp7aR09mxomzmGWB0xEHWJeQva5evxFLW6+4JEyARy3lZoJtIlrwQQGeQapBEM7LjT2Fbm7R6CLFxRwb3VsnKW7OuiYVl2UQ7Xbt6cwLH0iWaK4SB4V/0CWTPhUa6ZL8CSll8BWOuJX9sa1gcgyt2TYMA/P8EgxiK3BwD+cmnJBU/4FZt6bRembgkDzl/jt9YvVF4gbW2qqcQPp8eFPJG7MLxQSJJhkqDec7ucjw2CYdE80VgKr1iAYDw3GlvbGxLvJkxyFeVvc8JbCBA5Sk97bDBAuuc2HoXZNo1+fLV5jquTTqWf5FldBro+BW0EP/DUGEBl+YdH7jhchDmIpDCzXiaey1g2kG/6hgs+s6qTe0FuPrppF6KSXe2UTgvk5CRHe5DMudybtrIpJ0PZAbmPp/tQOBKb4VM8I2sY8kysquYYa50qY8Vc/FImW4k9DM+HdguaLP95Y/bWFOXwXTBOQXfyD8rOa4jMsq65DGtO/fo6OWXV7th/izgKR50yL5q8mbsUurybedIhm1cV7DpKMbQA2VjqmdR+gdOjfaU67wy8fkmx3PmR/WAWLYoAJBCui2aFau38XJ/bjQpV5cC5l3Vx3t6TYbKljR65gYq4BmUq/e3teXktsYMjOPixjm/n72DF4U4muLD5AqMX8qBz8i1V+OK45kpBJ+wKxST4f0+hZ+spMDvMxf4nm+3DFwmGmCzIDEn7XLZWWHMteVIZE0CHwT3ech7EMY1csEfyZtw/gDo9l3n93Aa0mxCyktL8iIhU+L6p68QZZsLMu0MRwsnW201ob15Cme4XG5qVx9m5lDZJYR16gCOvoZXxDX1AVBRuKs5+D+V9iS6x37OI6OCD2dbyUPjDSLZHsWep0LCNlDzpn6qoro7WBZDMkTvfowOErI3KVuOCe0VXtb7OF5Xoz68GNiFP3BWiKiu0LBuaP7gx8RtS+i2KhZaFKbKIdRvPC12UyVWdvabjNiTx3hGFlI0/0xagQMX7hWaKRc6m75Q7Y1gaGoKD5toaFHWRkj+kJQOCMFAY+g9gBxeAR69QenoISkQEeuDzEaOx7QqLK4AoOWduYCRyJBlYnVHz/a670f4/QtsA196WQ0/SnFUzkWxMH3F/0hVGKz6HT6O3uFbYCCUANjGiJfb7Cmcy35ISvz1MEwLBWqBdVDQqaBqLSL0hZasWBW31n11oqb+C3CcCkOCmkjweMJ/Z+oFPvTvpa4Ljj2E6TSsQ1AAAA2A4AAHOOqOYd7A/uKJLJwpOuKxXWKEogXsVlThgHE4N8RQN+bKFT7ojgXI8Qq3uJfNN/ydMEPxLatD2lmwwBw7lnC6qotVguUwJjeo8t5jpQSNp9vwSxFug+OJTOvOIqgxGL56XfjFf7FpdIlCs+BCwC9J/QM0Gc22YGALIposMRpyQ3ZchgNTBCA+5tpHu/cQqiQzm6qoChDVpR0b9k+I+722FdDd0z2boGssm9BZ1lnvMBpxwlZq3FMq+fu7rtqSB/w3zvwomn3de+8mTjFnavZ+iGeFIz9gAlneiLtEcnXXYB2z2l+AF+zt/MXxz5iySWuOY1XxR5grwTJgh3JqB0OFmpOGNgl8CmLxMtYUJERwL63YKRuq0CDyGjzgxB3dknSA2+vpCa8Qvqu6ff1lqRMzyvzlUeXmEIKDpZ7kUYyFkPS5AO8UUqcLAVcjdFK6Ht5dqu1phzO9sLErGFh+n7T/NG8+DuJ/mSGIaF8FTnaXLdqYf6dbFRB7TfBW9MnbdO4uCVOQIk9wNRZD7VnLMDcIVxOllHYTlU/DldScUF2QlnpybjJNFzuRYfvuqLwprzC0dbdo4YnaxW/Iqpvw4CwyFnvYWEB8qe7dZDwlHrfcb1i25ZtTuv9bI/w/NAPne2aI2GFsAZgNB82KQpof2cZcCO8r5Sml9Gzoia0aJ/jUyrXaEKo+FG9z3pnEOUwlpQFWyrMMMRL3bXMjMXHHkMXm4HQvLIpBzGMa5pzDYQoqAXJquCxo/GxKeausTW/YJUDchoUgCQ+eSnxC/dXzQcJTWIqAzss9zZsJTHeMNsgCoCLzpZpKJm+GkzOTZO0EB50PKGI4ryX9U/gBBzAvOidDXVkm+oZrh2ZZTEzJ51TToLrI+HsylMQzIfotg8PsrYHvsfP5MSVvPvZeZal7+4hQiMGa/5SjzNNiRz88Dos8o7ZA4dIbJT5pejhO0KZ9OQUjxRRnsTHSHCpW3eh8uVOaAa0LIaI7HIeojbQb/WXVdsd24vUqKQKuYS9M6QjY6SFFcr6XZGtgMi7fq1px5+ykiQX8lz6M/TaJsps9bdQOBXx1HwV2xbUpo0I53kTYQKhll6gxYRzs7cvOQXs1Az/S7Njy/apNzqDcRJisoEqkuJVGGbmL1dMnkc6scsZYV/qPZGHNxRAN+5gxEx4wbWkFyyJU0SVPKx1NTYmhenmZUPgic/V68fL09uRPHvpJDLptmr2XnuR4K6yosRb9UMq1FNn6Gif5sYAeGizl7CEm4Ev3HjwkB7wHZN0XaBvo5KmxsVE7hASISWrrhk/nNlQdLmPhoJy7PVkPsziNSXQZGXf7zsQNXG6s4fUbU4coRtPlc+H6ZWkYxEpC0xEQPYvNb5z6Z7dOv8ty3CwWa6ffThMZFoS61kJNwxCQ2vZAM1TPukPnDlGSOWQJoRLVwHQbOCu8VmehWGz0wxPpA+wVym3UWUkC7TYmu2yzsziBAPwA6xv0MS3pmTurjBliE34pJzYtQXapAJ5BvPHF8xn9nyclBoMR+jRrCU4z8tbYCSD6e2AlGlS482EvHDSB33Yk+Zbb3nl7bFd7dXbe9PJklHILL+1vPWvi96pPvkNo8GmAo/X+BumVDTW7Rib+I7zVff/OYurNWNm+LSw7pm7LuhWIVhBXs8B/uVRNWg5JbZYyD9ckQvmdyfzMIBBsBmDHJsDwEEr6i25ufH9XikvaEilmW1eZJTpE7SUnzWaZJAIptVIEF3Ej9F1qfzcPdqzWYLGWZ1srezyMlVeET+O2JmDyVgW3byW4Dbku0dRopw1/NifU46ROZqOs9P1bJvjfSEg+VMvaFVEbmwkAo7CK7X+NnJbJEHBpMPVREhGhsStnLVtVAwUW5SwcJAFomEUDGnuGu4tN8DoReIlTCLhIrPHFO0cNThZ0p3WgaqXWgsUJA+8yvvvIeDkSzz9kh5Wky+cSkjlqYsVBC6htTgeyTr6hqnHHCVL1NDS8UuOr5LGY+tz/ROe5sPgmWU42LSob7+LGy5AbGt44uuc1JBiA997fLsYHujDvlgnbW2pAGr5VZSZIZ7BHWEcBP6g9AP4NrI5PrY1I7g0Be/WMtGD52dm292KpVONe/adprOp2fvq6+prguOacSRfeKlkW+AWY7b3EsQR1xdL7Wgy6RDo7iA0DX5/UaujjdBsj0hszo9BY3+axVjy+BGxmqmkVGuwtGsKlO9UcjjQRq2YUX1NIGWxGPb07YYLEQdL0VPKgB9uKaQwZzXQQrQ22o4nyQAzZrOslWO+mO5PlL+/DA1tn6a07OiiJaEP+QViFGUYtkkjwQEuGC1TyQfvQGImuyKRxM42VTP24RxxlRzE76EQkNHVihWPjo6mPqNPej0+NbZwZLgMxnvDoe3Pb5TBs0pN+v6pWWvXqZzTWAM+B69JHbuHW7PU8DRYxUk58GZX4LGIdInvkSHcsaY8GXwVlqu5LJq2xGVoST2I7WJWkNZ2bCpGPZf/HEZr7v79PgRpHjmcVBEWQAvl0SRuSWakaYL6TUoQsDrnLb0PXc9v2Kdm7iOi/ZC5AauQ5Nkh8Ll0+/kLz3Deepp6xO76vKkA33sglVbjIP3rFxUZJQV4c1Uyr9OJfN9FVTC+EET8PfYSLFAVwiCKmQDPFldmdIK0Tmcc+1b67aVa8szo4yuP6pnbtH2pkrnLmUdRkFZwihdt8lMPym+pajtu4RJFGOW7GOS/qidU4QEJSebZw+am8abozfT96tCEelHqYqYUlK/nPvapX7EZ4M6awDU+wUlxz5roRAZsORhuabFvvh/70F2jSLpoEPvLxgGt/Q11MbJggO5EOhvwcLb9IE7fehPtfkfmTeyZOpDS+afznHG7+RpIKqkHQ009dSjXAlmA0U2c+6s9ELkYZpBzEx71fcFttfmrcCRmjxtEins/uAKYao2bepus9Cg8M1XSqyVDgHF7jM3f0eEqSUX1ZddRns0caI2wOKEwKtnVMBmskRPZT+ZMafK3WyTzTaiu1JVLkjYJPBb4Gt1EXtRJrnTj1W5PJogu2pB3mCLz0G9XVk2jLgYOqwZTF//cknsi74hMDJxvMGKl2LkJkfCPhZKpnRLbWeA1vgZuySet0rf30QqYaBgmHcSPLepz5AtFNb7xWwr/r5WErFOdGFJhpE+iPvGvB1UVmEupTVkPu7j5SAxTZx3QfYvjIBLfT4JK2f+3iAj1wfnsZWuSV/rEY9YhMp3g11rWZyoHG1a8oG5JcLoCMG3xjeAnNnn0djJ8LJA7gfsa58BPX5vxhzCuCn4ozXtc8s9w0+NXP7+XzmFtjBwXBUn9Fb6yX0tuYPDH0mrMg35DFBnwFxQsVHXorV5VfwemWP9qciLvBgg2Ul0B/sMiR/hXepv5N+7O94J+U/0mdctDyDUk/RDblUjQniQ+l8xVNuIhHc/ooXNfbttymZ6VD7F46MrSMiTiLA+v/HspRnjqw9v9ynu2flUhjAvECFPeAJhJn9hwuoVYD1n8bz8oOVgERcyH/A8lDP4gfOBwT9Lq6llnylXnzWEVDG+++gvTB7Ot2HOukSx5nGlc3bVy7sjATVGu0YKPUMsr1/tsJ+gfMDAeFDZGccRQVJFPoev5olWqDFzgSzSjnjxpssb+LYfkxqj4+9WumjrKawJqr0RgliPdnmkZ+q009WDTbZaFNKc2Ajo/T/piupe6lEF3iD14K8sYtnEcNLLlmTsoBu8II3u5h7QzFNOkwu2Nn2HHJW3xD02WChFg3sDNuTSjpJl9tf5ThutqL1H1RQSbFVlQZ/BDX4YAT2B5IU2Pt+GNUwKKSDjYU3TarpmU6uC0lYTjB7mCaQDyZSwZCAIoHX7MdTxpnzSl+jbOElK6FlwXN8PbzZ56w0GpJKjUHyr/ucQkmIoxMdQYc0+HK+IHnPJbYL/lYOJMbLQzecwJlxvSnxcUuXId58F1GgU1L5CjFZdAavhcg7GDDJTNCxbmtoY2yYF3ok52i1k2uOOsU8d0l2fm7VnRNveYlNCupbUf95pu4Q9ZXE/ON7KaYb3iG/ojsN756cKv2ksE75TYoTj+qVkW+tVgt/GICidX4Ucx2tUQHbrxJOE7lpJxnUize4r0bh/5d75NdvEH4uuB+Qr6bViLBFtagMBkcqpfT2eRXwQb6CBTrwXkkQXzYyZm+0S8hoxBEw98trKY33bxi7qSbJ9K2xeX2S0cSRvmlHdr1+wg3bMl66wPnuxD9oQ5wVWSYBjdP6/iOWGlmvha3OhlPeyHcRwBjWD4JGJEOoU3NhjqiXP+7XqdBKuUbaQpHBSxyPDCoqSTexvAh56iOXzzyWTmbEKk8dXY/XqOmYFAcH1hHzKvGfkhWxQgptTDV7eyBBLqVfu+d5G/3MngML2zJ0I/7h17qUZt0tvOOBj7H+7ELn+2AuovHtcMQdiylv+Jcda9Qq4uj0auMzfrG2nVxNf3EQKPabjz2pAfrpmROAlP0chwZZlWNzwTkfS8szIJ33rwc5C5bPYgmgzO+6bxAcyKx4N/PrKHhr00BONJHLlllFyxbNbdrchrI2u40sXorbyr8tibjlUzirkGFQgFujVOi+k9cBNnXm1ZajzuKvF62ahogICde4dz0pQPe1FWeLYIXn5eXzoQjYgWI68n9mPg8fCBAfGgXpjSGcsO/QTPiFkCQoYaix6Ps/YTao49Iug7EHwXE+myOAoeeCpZnPfxbrVVy+ZxXGNT1nhQuvrN2v0rbXZToqlYf4HK4o1pxa0QK8MKE1JTa/MrDBWQ0iBG24kh4C1orHGpMKOizVYo5yvNV73J3uJ6hNhjRQDHwPeB/NrY54e4aYBl2WEuJp0QgnmEcXZCd61cFn9OnIJU9gR4cRDbIUvvsO7hrI1nIxwa35IIL3MEVIVDa5lG72U13Qsog97auS+vhPwuKpM/NMFfoUtTG9HIo2QLg/Z+JEAnmPYJBLIverlUx0H+aQMjun7NQVZCx1dJHHq7UCf4QgEy0EMZ3Qcm/Q8yMn2GtfUBftwNPrM4Yju42FQXJzFUv9qxfA3V9QPJ0TV7Me/HtdDLF5O3gtJxAjbYU5qJid0CubpQn/a9li1NgAAABgPAACvYnrwcXCo/NK/+namLvprfWFGX8onkpdPInS6LXK3qKIwbj6eh59vCkCwMxZurZS7EnuJkugJSL7NZ2Fb0fKfcmKj4H02SpF+ZOqcJlelTdZtOOMZAw5RPHmI0NsQBPqxE3Bs4PtMPjr5xYyJTzXcybmkPQslcfLdJyLtPSJSYY9XgQkVbL1PfkoR9pnz/J6DRMU2Y/H9SQi4DpGhphCTXAZIyXE4Wiwo3kxJFVUp6CoFSvfZqBmNaBJhfg1TzW4GKWftmv0v7tV1knOljl5R8Huq9rwbnBpItg8Xyie/9OAXFKXpLIfU5qze2HlendTTNPlXmREMigo2QvCwPoPH3TcLEj/os25n32NjmBHPi7Vhv1UHDhCbiO+ideQoJTBLro38TMJ22Z3Q0IIE5j+wr3/Gzkwo9dyZlAyPpxpYCfpINIOSX0DhJ+HL8T1O/oNdsS1ULc95PTutGSmApc5ehrr6/CgBfOCc7gSAXFmdQZGF2fJLgXN7E5y/Bo/6dzdmyf06ASQ9oWaQzvd2Z1ug15MtNKm0skA8E567/D6RGVASP+LRvzmalQOrMK0mM95QxI9sUz9PuWLs9oKdoc1YEUMsVxTOjM+Nu095hKKsDOhNgxY6FF8mfobKvitFA7yrh7A9assbahnEW2RQTDpMybOXpZMIAu1Sj18KQ73aUGiAhI4U87uAY8QazYX4Vd+9jD2WktTGUZT0MuISshRYToBQ5ugUKzKZOXQXF/j0283PYsKhXqhzzXN3dqY2f8rBc3pjjDwOrrgemcsIRTzTbEBbPwHkAkID7HYxsKswxPGwPWi3rBKk5YpGqJPikERakMuYzvJro3zxeuGX281B3DF+DIozCKJyvTiXIY90yyEKZObPic8eoI0lkBhcqMcxwfFXUyZdGhpUzrYW2JGQnKDA09Ywn4uz3KHBoauIV7hp6GKUzWWxfkdaSWotY16kffgRYBfyrqUeMgEFtdRvVkFt7tr1069GFFs94bFyOqAVISKGBTABojD7lG+kTvUf/Bhi+sQbeI7nN81nBahQlfZUhKgdFFygQL/r9tOtMHFfMnBG0VF3rMg23tyTx9+PsEOdG+Lcbo0TcrYmhpcd8G3t92F3nEWRyxu3wSeR9BTvAcn9sma2zy8KooeIOwGUCACHs3B5mvAe2xfpzWhEXz1fgaZ7QdxSRS4ZvYLKSQ7MFqOU+xLC8ZYgfANHsAcMhqai6gsFgCEJf3LvQMG1AftfU06HsxwYZHPUsRJw0r30D+eoVtC9zH4/IaIUrutDx3SuAM1SEJrB4Sutd1RfSv5muc+qww4dCGczIEf4UbBdOzRwmPkcuN+ZfIO4ONR4StqNwwsiDuQpwrdcXFTBGpvewx4ZVUvTflQHzWm3rMC1XQThmSM7EubUqxo/xRPVZByI/+tcmo0cSEyQ0NCX43Kj1TDM5DX6CML/Gu4XD0RV637NuuM4Qci7DcZyPDqF9//+Ql4JonGsTrqaGlO2Eiz+5pVKJA/5kdyotBglXfZFoWe0CPjQb3pXSc3dm7mMDNedn/WMg0BXVA+LTPrqu6UbI6mhhaePB0yokbc43rFWqiq0DDuuMH0H4yz9hIkHYHFSslwSky+R7fgxyBqoxqwumYWn37Zpe75il5ecvZhFrGtkHJ/pQ/D/MPJr3XKhQ+Jq5fjQzSXUTYnKTxyfrWYE1Xz4k0QxIk9j/8JfPdk+WiKfAblMfiSDldO0p8b0o6o+cKZlKCI8QBVcn5l2cXleLm5nT76TQ0Ps3Qu36PPto89vTe6Nxx+uk8Z2LLTZ2eF8RwDgaRmTLKfVIN1qP08H/PUrndUEpW1s92cW6yI99wdJZJelG5Hf08/muJR52zZ72K/JkvATH6FvkPenPwmJulwz8aQahx9oBNfR+0yCAwxq4ux5OAxWN8O6CzvcCrsWCtbcdjTMKMLMbQcUoYGucMQBIqJNuknTovUtKUuCQNkAcbIuoTt1qfBp5jLuwb25KlNY8w3pRgYrx3wiW2Ap6dBU4D2Wwe9ezmW5JD1q8SXfOuajMcBR5wsPzeaOokyzRySX4ArQ/ZWjBBBuN0s/kTzFEOnPpc8+rqpvuw2N3XT6XuvxAAvXc+zXxJrxr1+lTUul1QKp8+AYhs3txU0pcseKNhO3uJtemyYa273AdQc8JiOt6Thmeli9dLYgWZCD1jxC1RP30Yj5jjX2dp9CUQGPFG8ZxV86brjuH6uef3rMwsW50n1q1PlmH9VEKgaic7cEjNZ1mcPMBhBhd2FZetox3hcqXURtNlBQWFjVZsO2idGeg25kg1dTE89UbW6aCCJxLW0faGPD0vL5+vNnh1GaZSoEnlsVUZZFFVwrkaOrAAlqVVawMY+575yuj/iwcsZuz8L9yrpAn30e6LQnpCue8dbqlz5E7louAuWiAzI73V16YSETavfpYuyOhj9mpOX/XvbNFU8g8DFaH3QndUKAfHfhkJxdU0wI1pwl5y1orFqyUNkNJ96fbkIUnsq9OY6sEEYhoRzDc8TV+gbTgghlpZ5tuRKoSk9JfUSlboWxWoKjuEmuNDLN2JqJg2i5qiylF/9nIXPEE+doPSTeLXtnBXLvqu70hF1z7/EmUdBvFPBbR5S8bKiVR7EqLAhZ2vwzFhcgvQKqGs/TjcFehVSChItLf19t1LHRqUAb4HfzzBAZXMqgzW9pWd1s8QAEvNmrHRg7pYZcRSLBZTSLk2KrwwXiRFK3rGWcNoAkUaJve5a9wQMSrguOZqzEY5D7+wQNq+WJXlERPlvlqDJvwIQgISlHZt6998kDkpbHlLm2uf8U3q8W/yFLZeqj2qrxgi1d2fRU8vzgUBkxiuP6p2xj4a7Ll8Cxe/rw5I7YS/ZIVYv67FnQ0cJJUipx3BGQn12DPgrviCvkJwY94U+RsBD+jQiKTm18eNLW5bIYoTMhP8lrDT4m98Lkw3rX/y+KoH5nLUW3chBQ4BUqFix891g4nWFMiVUSYhfSKh37DgTVw1Z/q/mVHm0sc73PXZAMeHObhy4NPlfcQdvR8LkRrOGSuyGBNdmKN+IJfX4zuZGf265LHHbm0dSZTiCR7W3pR729X7iS9rvRWHFnKVYDP4GPOhzsHs76dqOCD3czcFcr0E6w+LQsKvZ85oJqCG6hQJOuFN9rVQqbZWs2Wmt8SlN8e3EixR1cY0YuR33n1chPgheIuRkFZzIxbbRcbaHt0aUeCKatNc1ov9s3qdzBaaz110S7uZL5mAGNa4MCdBKnoyrUVpm9F3o2/sSqEakLtEaSYWp4q7ZjrUFPFVrFk5JY4TU7TnyAnVl0G/Xfw0fHvbeAn2OblcGnshPQWsmTOew6l0a5O9W1uuFWN4BudKtkGvUYpkRBAty3ETVM2rFadqE4Tdv9+UZAk+6TuVEg0zem5ZlsTIulqWJAfQ9s7CnnjcdE01elxr9+NFPlfmDgngg2+iKSNjE+tjP792Acq/DXtpA4PaOTjGH2Ta+BZGQCJJZLmau8AZN+2WLzdWMGqIXzs7PYh8EdIpqyz0H2lnYUxnI/7u/MIGiqKPo4z6O4WzHrdvz8xZ9VaReDMuWnfnLI8w2ClM6I22B3oMtx65spOPuj6mMjUIZBasE2kLY+7YMAsNsYx7m+LQlCkFFChkdoWv6+dFcY+z2w31MPTm+2FI3ohkrD1MtlFrJsol59klFShPb5rzj1kSmKKyJUWNIOvN4cMsZb/IQIYCotWCYOVeLl8NujqNr1sJ/fl654b7AnCSk3r5ipeANfmhKBbAp4JnwAp0MctWc2ejDaLDhgKJfb+O+cCaBvqIY17xiUhAGLULVGjDeBCtvp5l+kqRvHDCjywqnD/psGfvj4EUO+r5kjeCgiEm7y/NIa6Bl/b3UHjL5G534XPfMKHSxLDWl6riSRYXd3ryJ+PVjDtAeob8ahJH0oislwsT2Ioa2Pq/p/cjSjtgQV2VOUvqMpWLRNzJeybGtihYDDpIEF8wDK9ubwRZT4bIb1Q8gW+hr51GT7d2u67Jxra4Qq27yA1wYism3aOLNvAO50ys/QuuGtIjOwuGqhgGHvoPcglPsPETnflKTHzzopiv1vlrqa5yatoGiPtt1lKijXMb4Zt75XSAluU+AY/K3wC1yzQt+Cj6EW8Ha9y3KsKlTfB4m6dgATb9lvN47E/O28nt4qAo5M19rV43kPHNULbjl9xCye3/XRHSqdjwxkczgwmnff2ZavVMg0qHjRuyeg+fvqTud71snLy9pasgCkFWoGETqLKVMUvLwHBR//tjguKtalFvI3t+N12SSVqHMNDqOSOsc8SJy2WP95ynn4U/33gXt9pOXRczRY8rNgI4lrSTtvujOc0CCUsmLzAqlsR2xYspcjs2Dh6OeNVdJGHZTfSmaWBUSImhgpeSPrCGOxsWU+JvVBWTg2qhXiHPxgjUFvPLl9KrwS4+ZavVaOMTPwTQW6PY80VIXG7ySDBf4O2lAtDzOK5AltSPPmCpo4KVOcVl7GkrDCjmuVP2fB6Rso47wnouyMn2o35LnS5qR0h+R41W42/h8RHO9t+db2JtyWHPfO8aV5i9lf5UMNGEaLyzSDGkGo07b2WMJ+UV8zvHjht5PTCK2vrhGhEjG41oUXAXyjp568okQN4uM9y1k7cDBKKOEJWPA6Zh/QhXOM9Q6zl4aqAA06oGiYUSf2z9ig1HMSj0UW4NX0olZZiF/Zrnr+HMXe4lNPYU2A8jk3HLFjCks18mhNwmyvcOyHQ1FJFWdw+ITccV3joKeQos8vkLz9XkT5lORZ7W3jpagFPBLvn84FbpciJA3uEVPtK7seNrgmDNCaxbSqYWTzyk/0NDsQRqr0q2rk3oSukqUdqLzcVsSaSe/IcotttPyMjsWH3FQ0eDl8jk4l5sT7o7F72XYTicVRUKWP8r8EQLdn5DB4T8qdkfZE3HMkHnFlqEakHY1MnkbqFUjiDXKPmWFYVie2/aB7oSt6dCY/VJbjfZSFeRr01zokFsy6Qmehy2LnTIqJotUQWz+8U6IZA25oQgnxY9GZ/RI6OMlORhXg4v9hA1KNI0tBlboJ3eWnNuEWYVEsojWm1Vz2p0lr6UGafTEqy/CcaeFybupPh3HPrKyAZ5PDcpOl0lAoQ6R2qQyKUbn+MS/eX+RKl7zTQ7kIQc8mzd03AAAAMA8AAMd4q66l1LK+YOWLdxBbw00Cxd3Us4sYecKmSVN5aSTlh8JFw6/P6BRDC8IqX2gO9/GP4xHi2ezIkZyO1YexafrUSnky6RysAjMKGVuO88ZwL8Mv4COwmjT7bUQQ0wZUyl7/hG0m4tb3B94KbRv+ZXQC1APxC7H5js1zB+U1LrhxEmP+khbmVzcbtdU3LPmI8KrOSRzkkaVqRsqgYS0Zg0epiaiS3/9As19yZuOu8xip1bESPyprhrmQsNJwrL0PtWcQvWkixGFzBU+MAtsozk8fB5t7v32H/yKP+U7qI2Q8X+a0y4ZsGRXgsEMno044+voEOpurNPvSRzXkxWsn/eZYr++9Ys2aN4NRkmoWmLYNvNEQvoyfBUbmETbgLbS6AeT16fIpWBdqXPokSgaJm7MJ5z73+VpS9WDsEfjY9LatrZavgrWfuYVs4piAzNDg2yvOuX0wHxIst28a14VJRu2qdxliv0xJe5sYIEaR3AHyfs8fpZikUrna8e3Jyd+M0CJfvjtltNB1jrdoJDj/NGsbym2JwPnf/Xg1JRfh5+vE4DO6W0B0V8JXSdvjzLzAfgmza5TrZdSosU66QH6jGuNqK47xHQh+PWfynMmqrBR/C2gIdLb7qX8KRLyvmJjpiuNfXw0/rpZtJo71goHBDxK7KRxNXha27J0xB/nEHNmjhZJgcDbF+s0nJpJC39obtGdcDDnu+Dlha8wzuvkfrFGxFEvvOywEIqvNmLQJHHCgTijCOYT1GScFFpwBLL13Y0LxAeaEuh0TssGF+LaLZRu1ZFK5cUQLcVNgHwDq6M8GniZvvKAYbakXRTjTeLlWSKPlckG46uJAS33TW5pmrUufiTZCIGnVZrplfxeCgt4zS6lJUsMlBqhQKiKf3ZNajtN2LoOWlrDNeszQKcSu9uN/qTygZ2yY0PR8loWd1NQMh2rFtYDo2oonqx1sYt/ZI8f4jYo2xPdY1dsx6jS2EpkMB6JBAnxEIcE94deOwnYQ5o35f4Ejv+idHLVSvhMthO0Chbeg06tHVSRbzoqp41+TZC6AfdQhg1nhLMh2w6/nMwb6S3CK6NnajBtJH6USA9NenE98eue1oJQOdeZw7dN2HRKSkfTMGWiYfCX8BPmEoDzAj4K+YnOYDek0050DHF4WGNKOBy60LMCckWdoaHhUSSsCQdLM7euwjQqL/SrhbwvuxZm9dmCPqLSeoVRd3ZZDm8rwt+BbJ7dRjFbckzU4wKICHBoWtc/swWosQ9s5ikJP69dKSSDKSUu/EvTv8Gbf3+viIruH3BXtnmM/cNo8iHjSP5ZJxbtSMV4RCa3lEomk10PHT0ChJ0xFNZ00oOhH8a69Is1XhuG1eURhZ+88TwFiK5SIE1SmV/Srk8Gpaz8O5TLqmPBk2zd5Y0qa0nedZcW0sDV1Z5oAu5VtxUs2Fal8GI7QE/bnJF2EFOpYtsUAzAi2gss01lIVM3RYLC7uaBhu3vNKsgojAFcWeLj6x3TcPbVCYuENMLAFuF1PLgsAUWffggn5Cx/PLx3RZYDnjEtxKiZWr0dDT/L+pXXm6DyfP/J4XGUIOl1MhUGenTKnXxZKg1SKQrtgx/wb/aoo2wnQaEiq2bhZpaKoeFCN2Pj9gwFWaDwIV4AdeZEApmtcfl9YkQqGDP94k5GVgg+CWMi+Z2QuGX8+3Bl+j5+UGJ7aOmgNkdjXjsTQr2cyX2LX/pep1MKC+82mQpHkecfVcOqZA2qryBOCS7YHAoFS6Y17gFn3RWJtLXHeQDWiwA5MHx4ywoCTkapsiRV9adENQltYL64PJjMRKiTXJ0LUteEH9xFJ2pmlLVyH3incF/lI7+VwhwWDmA3HCOun1ejNVA5qKsfnvv0u3iv5jhOxYVQJ7OCgwEeX+qwxDFwtHbh52EOLYSn3PVoaPemFE7s2BZoIN7kj4PfACs9qS/iKPQmmi+VGAW/J/1bnW4hyZwIjEma00W+Qe7sophQfCYhEj9GqcX1Dg1qk5nIUy+2UVUzmFzX9tGhvyMQYWFi5cSncDrFnEXm2NsWjhEAkO4k1J5k9KtqRF5/qHzTnxS01ca5BWuOq4FQW59xi0So2l94mQdFUerO8yYUHktC+wAhKjsbhgLx3ASGKFPv4Tq1i6qVbkt1oCY2KRsyFHY3g+4C55Fh4ig/J0bmY0VBcRoJlQhAO5mq6jwmnMyRZ8LrE27Jh1iAQMYUAZLREVG0fCcwM/RpZ+FLhvOwFwNONiKZTwwfOtQAUHO1rHnfnt16sAXSRGqI/OT0H5dehqik5gZKaEJqQ6L/ko6/dkHmTjIkEBbilG74tdY0Ws0riK9avKNppBChKtkxcxb2363YyoBCIC2YyYnr/fxc2B0V4XR8joKpT/RqJiE358chugfnIC5SLh2NxrHYUN2ULLL7GV42uCMer0rFyRD/DVKO9SSg3VIn/pjTlgrMtHbPxp4q2jNj6CqwD4Q0UaOVsVEFlzoknFUH15m4pyx3r1WSdE3IY+e5OrjajL2R+DRiPjck4MLkN3bSEtREJXkOwNktuHBkM2CQRDffeGnh6UyOkGrPlHO1fvkGwPp8c+2mjNg45h74jQGdqxFJPDUoTcPAvDYzRSZtTU6kovA7vJvUaOEElBhh5ugSfElvhN5cusv+7ipkZ59kbe7OuiKSwXGJMjdhUppCEXp4t0FWoX69jTgkvyhNbN4jhleSU2lP0yzEt0MrcnJ9mxxUhB9rYSe4kHm9wgKn7RpUUreWkA+wwUfQwYgIsLWIrDBuGDBEHGOeGNZDlkEN/BgnE7xnJ3Ykvl4acxnHY1C8u7Nf/mKik+watwb7jPhyLa1dLRZb+gjrx7ANH6eydf8/yQ40jgN2Jew5N7P4HNph7inWrCmQLo+kpblAjz3xLO6odpTjqQZeJgazNi9j0HXO6QlsqdV/ED+X1RiwP1BjJNImAylQ6XwHNYtFbL4CjnputWWRUpmIMYaoyAUy2bTf2lR1E0Llcxkk2TQJJC4xuweQei/MhNB5Us2cY3MR/UdVjMFBD3TLUMb+917HZH7gT63xww1ZWken6Dzd+o+R5GfPaChedsFz/cgoUzIsJbHy8IbvxThtfSxbMU+RAkALb6ebHleuXO+VMz0akBeEGCS0yAVk7YN5HxChFGwCr0R7FFQRYFtPm58f92KFfafsEN3voyIumZcFe5BpSlI3qD8t/lWAekR9Q0pMFRczLvcy7J24YYEYrxaIY+nxKiU3mhdJoXuOmL27Dljz9yfS1BSYjkQTypJgd1aTtidPwMsK5nk6jpCp0dlNjrZcGTcsFFr93FH5zehzvLMQil/MIvdsiPKqX7qjCsSAmM3wi9X6hu7KmZYYbhfBeQBmiLucXg6Fpkdxj86aWxRL01khb26/V7g4tlI9fdMRKoSSyXtebDW0JtyFmN0a6J/cT8dDycqDPufh6mHbKTJdI90weTPvkieERFiEjoDYF8Bk0niV+GoX+q2BR5Cxpt8xsbcFK95lWpIVgJvqZo97ZaVbWpW3M3qllIyCuTPlfJO7jBwMW25NwLihvNXMvllgK/GQ4FcR1n/TM21KJkEjfz/EX/hJXp+qw5l0K8UA4sgb5UKxmPeN0KpkaRjVGt2/lu92WvqKL+uZG/ETdr+IQI6lRuBLRnEzlSMR7Zjb5NCtn/qG4jFQxg3L2XEb1joXpGNyipuDo4va9ykKyvuOdXEjcSvC06hyErFq2vL6MvvGMLCn6B9twM8N1VnCEuYY+Z0G6LlKxcNYKvUF6i0ZItHsqgx5YTUKjd+ZJJgf7hISN3KKHGFga0CQDYj6DgwGFKPELzVFAhe+VNCuwk/+M6mESEoOHw6Xw1MG8jUi7uxqFmX3kdsprPcawzyiEMFsJjY/cxCjQnrgHDEl8acBb09m5VF7l8T60DVGhUE/7DDU5WGosDOrQCNOl5kzkMAFPlj5/TQj6cMqmZWd6n/Cx4Jg4WQS17SwIPbjt5JO6GmpoibxX9c775CZqRCqvBb4+VBaObX+3n/t4bZ6b7YOd2BCt6+3jVQmkv0bXQythXSiKIZ3agvJZJ2jkQvsM3cpLzSHfl96C5c002o2CYLM7nMmyNEHHg7fslrj7TfzQKZ9Dg6+1vrSIskS1ithwhM+yQY6gd0+jgfc6U9v8XTz/ywmW+EPQgg9Bokt043K7EgESp7mKMoZmWfcXSZhd/PnpJCZJg1Kg+ONrkMZxQ+gN7VP1w4AD5/uybBeE+R/2GVRj2AnfqZQfd/A0Cs/RbfPNXlbCHUr2F4cNhsAFdn0RhrVHZ01bazuYd+dD+j5jOPXZ2ATTIU3oLGdByOR2tX0IeufC72DWwK+HgDASLWOCnxgWUhlAsjpJsblFAZXwIHtQVIiZS3w7RZORgpZP7z1/9kmMM08QcUURjoHddNV17jcPQwYL4177ShpKp/95hOUDtfdxgnn+InB47lcYRKcPfPbUmDuDkXIXvXRcp52e+1He4nDZbu7XIBUidcZdFPnQF3aBZkCx+H8hzWKFlnkj4Iof3DFkulPJ63ie6fJyfqDaELDIktmeMTJCjmZQxNGUR/VV7/bJEHSmAVl/qkd0l8JQ9g1vqWqBQUS7b8OQcao+Zk17cb//5Kg+kdlj6rnY/rnqZC+Ht4yv+C2woSv+MoPQGxVM1iZVT97d26jhBf5ju1PkUDtK+Y+oRBh7/SESp+CE1CrL1QVGJMfm5VKDqz3Gattc+Hq5lmzSGS62Lfl2GFyjlcMUp6NuC/T6Ir8Xjb3T7MQrqMygIwXMiCicUelvEUcmY0nAmBkGS/RTdZ8OyhT5gU3TnJ1hnd5ps8rcFbIkdfV5sNVXYyUhdCUXlnj2WxHESmYzDTUuuAhZT/S+cFlxuUGbZpHcvqTdU8t7j5WkY3yUoS9+8drR3VMXQxdwhrfWA5PJtIWsWS9a8Yjz8OHKUQPqOJDtsKHeSADE/vBT2oMKgWyY/1THU2l7wCrJ4/CrB/S78751S0MYNCwldncEdgb9YMA5z4+QolNET8UWn3gsXzyydxWaQe9mqMzNpv36XTGVvdnpCEEwqk/D2eO9kUzTKORVQoCUHjk1xKpn0m4U+1gJc/zFBWr9iOXKLPTjhclleBdv6P38g+M84bNoriy6dSNpPdqxJVBVhNCgQehARehHax8qeqTb61Hj7m6EY4TYzy6l4oOey8AIrqaxjfsWMDgAAAA4DwAAVirNkAEHjpMG1F5qqxwkhwsEgxkeKmSfHbW/t+FBTeuLHF5xbsHNuRRVt7v1G0us9WQwBWrsxtog0QGOqd2PDM6hGvUA2DQnrW/tt3kwFGzamcpr1WG8KHl9pJ8WxljNNmHkIotyqK0bgJYvduSa3k/IiLU/7ghJ3t/3tEdT0Dv8OiP9sL6GmPL0MLw8pASGtOFhRxejpExkxdGt2ZlIs8ACeuY/KJ9qKepxEeV/jiPFhsT6wKRBk72FDhQTWdNEF6ZMTCVUza5JFeB3l2m0MHhIlEEAn7UytWazhmp1sUJ+e9WIuQ/STdc/PeyYXxnyPRhK7HWIe1bSwhmD6EtvfrcWp35UBQaJPb5FL+OT/cCEJ2iQ3FPUvwcl2xImlZREUkQf6/VeAc4mgpHvAjakiU+uSt1t2kxILjhHMO5zq/a9HzFUxWTeP0VirwjGHBlbpJakFANiKL/ZHX8ILxNpwnoYLazlmhukKpkHQgMwgpsVcR4n+AF2F7znni9bx4s+mJ1BaXJ5EPXEwUOO5YLAj7i95Nz/H/+phQwB4HPG9AWKiXuOEeKq8qEUSPhAuTF/FZW7tu2ww+jpw1JHaTIUki/YNu6vOWeEEHSD7ATWTpqWSvLYoNqMDkchSeJPZTi6wg6o8Ql4d5mH3nda2WrDjT3tX3IX3/IdULcSG+ho6TBbp09NhkB9jnx7AH/PmvbwYJ51sXytoBjCa1rBUA4P04/46U9BDlgUKMt0YeV0iftRyRAyKv9Dcm/NTrI+c8WIaTPceFe4h4IHTOvfFsUEQSpEvMMomSpzcJiQbgtZozmbhx+pmqqDLQlMMF0L9/mpsVeY1iEh87ndIbbONGQ2pgRiQiqkyBMKFmRpZ4eBe6WAxVmw6Jx4s25whPJSMJQdC9H0D571lMdD8p8Al/jfKqrA76h3VZB+d9pzy4M+sQ5l35UJG1VA0K/dhVQ5/tVvH0TZUvSIgd2RFrg+cthi7fGTCPWVDK1t0RzlMX4H1swaSn6eOGwXdJqKLmHwOLbgEOooMe2yRyhTlcqw8inNfK/SCcJytp/Mg9byDxGTiJ/B1yZR7O+0fdQafFyo4x9q/xKSw0KVMcLf+8fXdBWSzY3aychMYprIUqiG4bS+UV+6w+8BMVtB9Jhtd+1zY54fR/poBmf2zwW82yKR6OmGBcLyw6NVoCkiaMkL+sl3NvGu48/tHhGZc7ar9D6bt7PIFh8x/fyWi5yhSR0FHfnF/QsvqhtyW5V4IVSx4yu0htJumMPtZH1oM7bGO4+fEO6V2lBfL9InruDyYKqOyAZm8aQW/VDr/GtYnrlT9KCp7Y8SXVKhaVtVRluISdBUregXOcZePnPmARguGowa42rKPllqgtEm2rTEkHGLSftffZBUkqtPlxJOB1ZP9mRjQ8yDahTFEcT1qkaLLua0DDAiDlHAyXTNoEXVCwUBxeb62fzYuEp/J2wCjOLMio/tiN2Sr26GtpmpvXJKNWKqHaBvCGAT6rq8hUvxGxpbqfcgUZgERrFrJYZWPtkO14hcWE8lZRUFDeuiypGB7ubt53YZNC1qgiYYiqSGwV9wYbxT50L9r6W2dIqqcRAw/hf6kceU2ztbEW3gensf94hZWwkBFNqzNOllbxGtjvZFgeTsZYcg9HUgRMtIGzkv9Nj/+1acS7oOIn9caRkQxStZA/R1/Bycdooi/kxK3Kubzt4r7eSpu1DBK7tJITpUULx95F5Fuq++27S7E+D4B2z827W8vAnTu7KSNBIXLth1ARXly+xDxbr6UMD5aIEkbaHVq+y175u+8zaWP5fKHoXP0l/uVoU7aGiQ7IK7P81RlOR8K6ug0sDZao9imi3cwtjbOZTQQDuzV1W1DRO1Ksrcwkr1H0Xjq0BsJSpnAWpL4pWiGwE/UQYiz2zY39zyssDcJqKWErMLr1B6RKtn7kHREGRqxOFFQRu9b+4vx+EXU48gldZmST1p9HLBcjfOUVY8UdJZRkVtdtmxkdOHw/FRoIKfCNq8S1XxsuzN0tKakYZVu4D92PWL/DcqtRQmzepNkFKMNtLtwYKGHn7idFvDf7IBmamZ6TKA6VFftzmOtj45UtoWcUoJsti3U4tgAFYbnTIEyiLozrhaMtAKof6uHoXo0WEwM0ewNGztrJrqLLVueOnUc22U1iKmoweQxMFxuHGHSQ1nC1ZT+kKKd6a27ajO4b8W5a9yfkmacuabgpa7Q1R5iddoSAZ4ifzRD6FMB5J6KGPLBnDMyadzw1cGL6+CQsP16dKvSP5iGht0ConfO4bRoBx9r6FyMugLHtDNpctPF79AiVSMhBoyvzoQuA5JfT5vf2mzvot2JTw2hTCiRt/ye7lguOkCClDEQaa5NjmnkJNWzNzPUUoNpjAyae/ivvTX1dd/6dP+L7sSaiNnzsaYzVRPAXhqTfRS+fv3nFZbHvfHxgBI6ofU8iaI9IwoJii2beOGm2xV3QYcn3yF92YCoatodJ5/Avl5TFqnAReyvrO0PsMmOOHce4owAWEpcuS2BMUk5jTZF/TgDahgkvXTsnpgqPVAf0/Gl+ObNJWCzu2c6VdL9YKE5X5YWDzpvujitncfSWb4MJ0pNk0NGuqqwfAgukn1BzMcR98XhNuRx1Hiugu4QlCyxEx6eMeq0Yq8g0EN2ZdWJ4+YdajndVo/PKNsJAHZUFepPLfOIbnrfa+VV7+ClJwqQKR11nY/CzM16Vb70LTznmyv2nfUtBcjA5iXPd2PQJJvkVRv5mlA8unpYaiSAiJJSol34e8SASYQkANdSA2/4ls4J7dlDFh2+X7Fw58zoCrgY93aTaIEJbfHVFy9yIYEC6iqhM4ZyvKiThPl5EpDWdOQERkyoVrZbJWkG7/2plGIMtUEEZKOwEvaPphV5s6PfmmjL0urB09quQNDB9etgulC0cJgj036Y/DP5u92fGzps3Er+3X+d8AsTdSoJSV4AglWvZL51j8oFyJzLiScfamE63i9tEFgwMNAhAA8Y4ogbvZd8zl+4tcShyGQxnq41ZHJON49zlVRZazdUnISk1mHi+GmWwBU8MLcSbk9YEgQgoFf+tX5KPmiH+kdRkdsQaUikEA31k4THtyRuIVyGRj55TnzYYJ2K15DDpx5BVjYl6UNr/5/mjq328t7jjkh03E4Wugke0PjXnTbiDiMSqAvsskDfQOwBAWPcplIc92eoev5wj5l8GsGRBCZBQDq4fqdsFwaQTYZGiZ+Fl60gpHYJalVw/AnzLACsP3Y6ApP1oqxv8zeU+16udb5QUpofaIm9RcIgjEfRvhBLTCu8JhX3Y2DnEqQTH3mCnKkPXrF756X7rEVGyy5OV/pvZYSREF8hrBGQRWtaUKGMU5kZIKuGk8eBJd9yQ6KYvhBGbLpgh/AuX/ilLjRp42YLOyOeCnh0CCaJfZDaCkC+1+YHV5pN1TkYBTKpQ2ADDNw1pxNc4OoTthl6zCYUC1AKs+pTq7hwFNPTjuCtUBmz0mKLYz5ya/wtS+OXTmweR4UwpAv35562hoGa7muXLT1LDviYNB375RsahgSaQ6MsaWfwlalnARki655Hr37/LDhmBe4ak0VNYDyS3TtqK/lGW5baxQMmANhOOKy1c2/QZGXBa7LpRydIr+j9GERsEOM8/jdPfA6ecfNfxo6szQ/m5qlBHVESMcg++LULzIYdosYH2k8QlOAFz3FskvJJ1aVXCr2tUpzNRFdJbhluCQ1YrPE9ig/1guTUtM1Bq37FsuX8tsU1B1Myii/qVZkjfl6zxX5CjtIWrbmY5y/BBzUiEyZd0v6RFih+jgekTRsMiQk2fB7Lzvu4rMtQO6akxMlMQOUlyHKEDAdx3Caygf94RXG2w8Uf4tD9PZPHhZsaEShm6YmKD/rjhRJWevLQHd2zJj4avEq81cvAoxMu988xVhjwjaCHDxe02H7tZadBQVoKas2ubcIsCJW3dcemub3odkH6fROIHa1bFvgein/DyY8xOdbjW2cF7U1agCw4c6GVyvDXddApfhXq/54vgiHdBfc8Chmt09BmXOcYxd1U9lKFDPgDlYxjMHOvWVtHiS888zBXfmfC3FgGm6JvBM7G7QIy8rZ3doCGp+y/UGkvzu8Ing2ROjv4riCEdOT2goNoTk5VEYnRBMUy2Nox7R8BqQO6/smSRkZgt3BnyfalUkczSOEbOv7WDSFNlaAZFUOu+FwJdqJB9s9KYtDUW5Jp+/IcTcAq9d4vfPrBOV4pihF9ksCHPFkAC4pNQ/if316fZBjkfl2dd3aNrRlDydBsaYUKQI7+L5nu9VNwLlRzvxFeG+WotwlDRXpKk4O3P4hMJBZoP3PAYiktheErwejkdRskUhOAxz56fOxB1YKsTWou2fn5X6EVr9zkJYT1oxOfOxgySjyN7VazuxqNidj1XGyqwREhavcEZtpa9Wli7vo2SifuuPW/9SJ/jHwIvNy4iEOLFIRqp+wq2gzLA/kx9Xi9QMEXFojMbGJr2Nc0a9w2QHS1vVjcebzWf/vzihOg0E8LSJcfQbh6FzSssiriNIl0BFKD9f3htsdYleJgzdIQRe2x4fHgEKQiKyMKmT1PZ7t7FA/V8Bft+CrkSuhAwfZqD49sQX5aIGVwPh6zYWriH9KXHnDxCZdEndScdExIRlBOQZzgI74ltj/alYF9uxAE549FPy5YYf7fayDPOIbobtpujodzZoey/VdxsMjT/qvz94lGCvIO9xZH8ihZwNwoJegXSqEgG32uS6CgXkbm+lOdW4itf8yQuP+vWWKG5xNOP2qiff8zBj/bJJXo4uGLOEqA+yGXV0F5OztkkIbqGwMs6stznapSUSMX0dHKcxkXy/3AG9mrtljCKADdzIddxnYMiBXWhMqbcowjh71tNG5ISegdAdhJG6q7GP8hG72mGPyXK7+wjAOMnedpnIoVj/h+V1GX5vb3RWS+s7/qCsQVYn5NQKHdPMVKzHFzjQUa4IgNZDy8WxYJawUbD60d3Mk9erefyfPxSCX9dk25hC6GmknDb/zLYchhSCsR4VgaKQUHJRhiaQn5wGyAI7NofKdTUw9kCUXNGtN2Vdvg4SEWfK3u+NZ0fv2MLxR8+P3gEJjw/0ri0eMYqViOvX4VVWvD/f+zQm6yqUoeE4N0TwMbkrQQhGXC+rLNjAnKLWkPz3wUwuKnrSBfm+htLy2MjUuiIcsuKdfnO/DmA4AAAAA');
