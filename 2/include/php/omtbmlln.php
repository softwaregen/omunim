<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAADYAwAA8adWJ1apWqd++CW6S5t1cupVkYEIqdr8NGOV+FddKFjZlMor40uzsqFolLkmxIAXVlYkIjk2uRvTlVtKNWPHPZLOF4vj/aU2EVUQlajz20SOlNPhVQgFm11n2ssPsbHwW5f+5sSC7q1tWzAarx3+n3Y31ZamjxYA8maQ7MoFgG1Oe5JB4IKJsEKldt24+obYDssRJdYRbwiThd/HFFytV5v13+AjDZwdL3fxV2Qbd4P2+CEwVwYWCWGCGYAc3iaQ8OZctxNOVZ0FxMSQmqA1y4vGdQAlvgwQIbRrq1TIfKNEyr8Q84n/KfDltZP8j7xet+W9lWibVGwwSK7dClmsi3A7PBWi6+dE6atT8HDXn32OW+3kwSSJTYgHlWZB+OlNt1JxID2J8xjiccn7nyUrEmnYGJCxDy47eQHyGcPQYoHwKpxjILuMxuh1koLIXQW6UV+xy46siSEtYBiztLPEGlTN2l2f1aQjMgJtUBKt/kwqgV5qcy+1R9/Y2DAGicCiVl+Q89RFOZwXJ7CAh04xhBi5WTegJOaJKY+4EkTdNPgYiNPj80duJhKxVzYtnpLu0kksg2VhJ3z5gxt3b6WiByq1Obgm+5dGjQTRWKFFLMFX87sHxX7U1QdJR0/3thZC4ZX67BURdfgYoSwVcr5Xk8ZLFyvaSNyDOGTYlmuov1pAy+yvKg/rYG+iOutiIyN0dRdgC0cvZOtP3oE9wl2nixioXrWyyQDT9xMBYV3RcG99aHEzMnWvi/4UrAQiuaOOWYYCqeVVytZi3ounQR40vHaQSGXJMvhaqS4mJEFArRnMXxajgrEKnqAYBQNZiGIswkrd0cVSBFSxqdVyYis70OL7Cqpc2wiVfWCouGRYwTpRCj+IYQo1l53Ca40qHm/iKMoiCEV+MFTBR4jhL0Btxw+2KW/7yGA+c3XESC9f+ndJCVYJQSXEMzN75RSMqN1e3Vlz7H3xYW7HbZP5h+qP1CyXu31B4xUAEOPZZD5JDgPfMt7NHHwOBISaZQypXmto8NpCMjAJC97lcFFJUSAhYx024EGC5B2ONl5gZvaixgtTJZnYoVO24AP2ldyO9RTm7y3/tOX2jCiEueW1elRy+XSIAh1Mc74bFBhF5nqou2hbFNGWKVUZmR+sfZ+14R3j0KoTFHWdfOfn4fJEZFz0h+kkUVgvDUTxqKnRjOoKjZRXd+VlgSzWYm14xoqWiBGBmnY81C8ERNCYy7vJebSJfFo3Elhtee0cGHf/ZVgLRhGW3dJHqXItqhbyF9OC9fClC5d8Iftq70ibAqV4l5wIq/qgwqKC65pRNQAAAPADAAAsYR5yOKL4RT6LIneOpmglJWAuUyU0+Y4wXIpS2g1VjUXIkRwYwMU9GOGa17ikoKVqJLZLbNQCZEI0Y6PcIL2tnIG9qKBC0Cr3yfJXsjlv0aO7Bd8+IjnUqGFOTce5DulYL0j+lzhX6d3qLMDa2VR6yXLSLqCpr37qF1V27J99GNyPgKkJbr0ORiaUExAfGCAvvvwEYHzzmSk8dpqwGepa1ddr7PslwjbS+1icqOnDgNb6jCByv6b0xNWPTwvEON0N+ga2DcB2OGZc2qP3Qa+Jiv45HAHUda/MckIGwA5W6dnmmFVHiagIbbDH8I8X0pBFo9iH37F9oD7nVwhlANomko2JLWKITvxctDUoGDXV8lZNBcx8Gu/N8JHC69aTz2RBGBitSjL5pdDPpB3LioeNp+Fl/cc1g5zRgfH4xMTCPW1qx33ifatd30eYDqDUewvlp5MiNBBFd5iRS7YXserN33BOY7530CphhTHPtTm9q+363McCK1tRSB6aKDy77LOjsPauHfk1hT7bQsAZQssnMbCZi7BNerwolxAavYmznj/b7O4eOM/xd/j6apBBvBcA9I7+O5baAdLWfnyjLrBhYuj/P1otJu3c00/ysOHGbJVVBtaNa0p0IvbndOr+/+BgQu33YZnq3VDxC/ApNW07s9F6JcOizE/Jfi7I4e6h7UNDD/Rm49zdQXd5QRTWJksKiTIS/b6gXPCupP/PmSWEyKv3e7y1FOOHlkSE6eiRu6PbewbRpEQ7VSQkwPAirF+bZlQ5KDLpHYxATNK7WpL+RQSJcVzm6C60MmetyybkH2Q1tUTo6s5iP0T+C3ZzqI2q6+qYiqrOl0ePxtpTUVXZlSgPZyGPl4QWfnG2m7zfeBhe4udYdULnXxEXMUNWvYNXcItHv+uK3b5HvIk/DZm7Orr3f+SeXGpRE/A7aTBgouqkjfo/NJesC0Bk/BCAVqX44aQF6dG8hDhXCrR7jUepzaRVJbNeOgMLl4VKCCLvshZEvECkcS0azC9snMrYfGtgjf/3u9LJQHacO9GeOmjat4jJSdRbopgBFRThQ/RiBikOu5OtQ/Sg0G/KmVdMMn0S+AL1SwbzisOrv2oEjVE28kvSENBOKWxNp8kH7s/hDOhFEDRYvVP+6DsCrmYfujGUWeWKgQD4GgBy6akgy1T7XwSbMiWr+FWsvnRM/UfDqjchBSw/KqB6NnNmBMZWZO28PGJxtamYlLpDr0TJt6Ih2FDsphep22kTaF1e1LWZ67q+tUvH4f3DvjiYN/hCMNOkalBsIggSWw10v70u4H9Z3ValhMWGGudMuvdVmSyxiT/hqmOlONy6OI/Fhn08McI2AAAA6AMAAIfMGNStcz5KXoX8T23Q8fn+KYp51GwZ6Z/pXcqpx3THNinv+wlsGQOfobmWVwtg7GyML6n3FFgLb/WeFbTkVgN+4vEOqoZRx9tbshyiUqLeAPDBn07YsRnjM3Vh8hJd3QZ4B14tDPZynHXra5qhEgT2bT37wN98LPIQBByOyrrRlFsmMrBFEp/lw5SATnNwP6xQcS8KMcN8PN3YMp9HerAE6djixAdocd/CQ5fN2KTzSuGeWql4cnTDcujO4LEZVxZx8ENQr1zYCdYABwgJsgcsapOeNT1jVF35MR1jiF13GOb3bRtJ0JRjxKbt4TRJ++MzYXDoAmioIALECUM3h1oz8giK1gQSXKKIXkcyFnYZQkx3RzkSueNY2tinXRrcNs0lPowPUu80Ayg1AkMs/ggW5+5yKM0IkAjmGizEE5ptsjNjgNIVfFzJ4yQx1GgM5gTN/Su4c7hoZhhLh13u7jzj780/djK4U0QkWJxLbNajpQdBs6GXERWO/ShulIJkdhn4ERFUt2k8uRFITcN0yk6fX8Bf6PR1ga1bj7PXnJ6ImioFS3EzGdw1cI1RHhtHYq92beI9NZzSjDmICT62SOmy4SROp4NVRFA0j7Pya8gf+UD3HUja6grIBhBOX7P8FmKWeyJhMcpBEwXAtnzXQLg5yvdYGOF09P4kMDT2JMbu2cURT0aacssUHjDQZP4XE6bgwH9oR4K/7mSw/MbUpHoLZnYU+WEhgtolqtWdV9vQd4tfBKp4wA/6AVEr8TKqOlABlr+mqaF4toxwVi+wN8LBE+ZzxZY0LDlp8G6HmoBuR31i6mVAw9c7DoGqcy8sw5NWeVGwlpc9lNcfgyfeODBE6Szh5pLUgpIMmuP0lytbKUFKfMpxo8FoLIAOfv+iHBNpQZKQhBqyfK7lPhcrpVKUkqg2V71b7IdEi5JsMOsqnZds4fRvnAedkvIoPNWDGzWTiueMoc4fS/CIerJ47nPVb5EhDF4AnwZQN1m2zzIqPZpT/hQo14mtVcGHcgdudVbhklIq5jkUv3Vj1zgI3OrSlc39tSL4Holv0+CKuRMFMQhWuiqB3yaK4h0ty0DrDZ0kM18y3/d6BKeBnQu8XdHEeJJESJ1kqt26P5ibeGXcU6ITz9j9Y/H4xrR6oEvh7isWfKTfoUvwkdbMWgWfQ4xuyxz4xit3wiTCksIpWKcmHgr1UmBwYxX8mAsAcQwKLXq06LNHsEo1NfqP9PXcmnFcB7H/rsbvN6+UxJuUmWty4kswVqaNzP6cmkVc3NB4DHMaLGk3eizDUoUeIIMIM5fgAjwcsZYb26yDD4QHgfdeHG4fwJ3qnDo3AAAA+AMAAIA9fmcurgoZyzn5g3SFF1ZQElqvehv2VXzVpJsE4o9AhOP+//TqHTWkDx7HygHNpHCHbT2D0vD4mgsJ0mRxv1GMqyAKwenfkc8QQrhVeS19i+L7vbSwMJRLH3NpiLX0Azm+y66CmPAWcA7hDKdL9y0QhfxNTZWdTMS+wu0Gw/DVzVKiE3nyYL6d6C/ejbvG7L1IJD2M5hKAqg3/vw6K15v47Z0WWfxNt3qsjCAm7v9VGH+Olp8Wx5A6NRqiqVge+NOXlGZw/CAaOwOYegOdaHELnjdmxnkdFvrF4LdzDSynq5yC5fDhQihT1XNuJ3aY0oWwqvl43nwP01uptZUHzz8PMgvXUXWeFtOzb0yaHLAn2LkICHHyMKB5NHtVBovQsjddh7vXQLO6mo84zvMQvYUCIutu46hCZzzEDkNfFLXVSGVbHohXwAtOXuza1n1WmTNmXNHDnjzDLcne3ULDpu3um1C8615HPtEVQM2Xr3B62m25dCjp6keQWXHpWcPK19DWrQTz9vrFXNE/c810WjU8bCPYA22HdPtDMDdP1EotQ/MSJ43rAd83D+P1Jki3woxGHK9Q2vENIwElSfutERYbTAeip0CqORg9sT7HrG3+gCuz4yxD/XMB98hXpsRQY2l/+qhZ3XhDcLCi1m0gAMWUkxnrdZorMC3jxW0mLazvl7tZBA2iPcQ1Mxu/PUXPOMhDHmWQ+q59aP7ZBopQRCqSyOCA8U50wyRu91ymM3drYLDvmEi/iltZZjspI61qfFurNqrHTk66uyS6PLnYS28wyrvV+dHFg6uf0lezpYJKB1BJuMXRJvDe1HLk45XDe9rlVoBZMma3VWlYD10N0i+Jj3pMoqy702eIxnJrqGWi1mZcziAvrlRGtFCQ2hXGesKiqbOB5uqF9v4WynB+8wBpPLqqyV8blCYwQYDx5LwuZUCWb1ujgzWmlVTilcAnSl0cvGDqDewMO5W81FJUxtfAOLkzw66RthFC0CXo/53waKbvNb27KDbY492/ZyjI1m8QihWroeNT9JOgsqs9RZQLLhq6NYGDH4Gv2iB9RDH8EC+q5kBzn5fdnMWMAqpk9itRxdYqBWgsHjEcZ51A017SSUGMBCH70u8R9wBXk+Bn129UzZZZupgWSJYMeeJPbaXWwH+VWfHyqgBW2gECpog4/0Cg0KVQtSQO+64Hk1A61ZFjmAAKBiPE+J1kuz9TO2Vk4Yi90it0ShA8lGD5vLp16l0QZvvQ5GMfrQkJcBnayHOYhVPM02alJh3VlkXbTQbjsd1bCziYC0g7+ut8e8xHEMpISjWoEslEBX2VFibDrK1Rq+emC2fycb7guzcKWEyZ+XWAa2VMOAAAAAAEAADNmIF+snRcb7Btg+vBDO++NTE4FaZhOKeuE8gKVe5X2w0MqxcRg9DPPIOzCapgU7zRRn0So44wGiVg1uE+il1B+LoSUmAz3/3dkOFbO+oYQJSq/1Qlati6Gn6GNj7SsZC4gxKvQUTN40qo78+dcyiPRUAs89sI21ZHmF332E4fBAM00ouamtP+efg0BAAqErrXYNxTNaQcdVy4IeoW33/cDdh3Z2GLF7VgQ+SrFjeDCji78tzPOOzzdSkJIPWefgs5umfrHF2C9YlNI7nfu/DTnYnfOvlppPXFJ6ba7gG34DH5S4uIqDAlBCdIr/F7tPLZks2ZV5S7gcsjGUE6pAzg/qxlZ8o5EkNTXqgt2/mCV8PAKygQXqAkEEkj5LAPqk2G0ixFeHC+UbY3SVMYOHekQ5VSadB9cQ3CttlI1KdGxx3peJ7rVmevomT3jbLNpkisrr/M6D9HIwbe/dVvyX7q4HyOYN1vqjex7dLupRprwIKL/thD5etwenFet97R1iGE2U4y+PljBccwV0AXzWQx9lEXwXJ/ZwrI6eo/KTn93laKicnBRUTxX54muOsoTrR+aVqaN6u/23sZ5GgqeY+uvbUKdyzuHbDEIBu2k2VxT2Lftqe79U6RpthgXf7Hg9ipAYWeTUDDm4R6OkHniX0ECLgof60j0CYUPIMayRr8tpL89SaKRQKWleHjrp7zmfynznx4jE1icv0VyqMhjC9CVAmvkaZ0XDtc5ztcMhjPdzmcLnY2IBDqg/rnc5pL/FC9nOakxcgtjUIQTw2+xaWrpK8Hpc/sVxmhl4JJ85vIuaOXA6D/vrddjrNK+x9FcSRjeO2hZhuhYK/lMqvRODweU98jFLNlDN7NVR/KZILeVGovs1WJA3mpuLFUqmxMEWRKmcQQzR4mDlV3kzvFiXilvqDzJh3cXIgqigI+iZdNRo63p6+AeV4Z3mltjT9MUaYdRV6cgmky/7KCUfOzCfTNjDAIh7mDQr062kuGhd3Q9pEGm1IMuN/ekIsLm1B9eqsF0/XgmhBtbT/K1+ursk9MNFsyWXYQNpPGE6gN5MQu9qrz5V1PdjKqHFXT/J6tuGokbOg3vwD/lK907h9s7yJxhRzsP1RQ9WS/qgfrczkOiU5WJTNgi05HzAfM/DRi45nj3uZjzOc6ExAChH6dkfzYedd0spJjqpM/QZIPGvNxDEp4ubgKRKpvmYvez9w6+W/cxWFJIvh2NsrDv1jzy9Aj93E30flNdsu75hYvEU0gGb6Ai/FYYdbZa1ATMoI6mUn4hBN+DRYq064vsopTDUqpFpET4Q1XGmBWC1W+mORaVX0xhoypayOT0BXKJh6TuUgZIegFjagwY9MhpviHjb02AAAAAA==');
