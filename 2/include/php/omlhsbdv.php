<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAAAgBwAAJtyVBf79VqVxBnyJz61GtKNeffjlQyz+FYECex/YOQEIhcwIQB9gOrKkM+plo8WOeC8TIbz9iwewWYeLX2v2rGMDX5Wtwtyw8WFui9FuFzzYgrBZ+ZoXObUgY+UU3eqK+IjJi+5ufC5umbTQPQP2krDhBERaa4hfCcM4x11TYv8OeVGp8+bfi3g8BdA+SYD74cfUxcvJGemI2z+JxVKcqUEdK5ZJY5aPyvOzrP9wXNGVijSzX+D0Pj7xwp1hp50W82M32adnHsPTrHrgyQAv3YS6cpEWR/K2ezXlT/0bC0QSOTsCp1VJdQZRaTr1a4rhK+Ok/Wh9taeqMGFxiG/WOYsLcnzACA+COPGCk04vQvo6hQvs0Wndxm6ndrjvikp7xALUZEznD3ViXHFkDNsaRKBQPo4VJDPEizgKkL+iCZzkGtRsHlPn1xG268xLhJEBM8QuReZ2O85QqF8ITNcUXZkLdriYN4XF8rlhUYOkN/y2tTGQ5vEiNVbY6+C0liKoW/PEfpgfHJGkapngL772U3MczUNQOldAr4f5f7pdzkezJ65ANs8IJ1FppHJNbtIyLEk8hneDjFZmzyZBh265awAC8LlX3nzs6smYDCb+cPzJEpB3hfOzwoJuiCyvD0dNQjAPZifbdCv3Ravyd0I6LxP1FhrXFmBVcxG4xjIU0v2BWyJ5/l18+/92DBu4x1HP4xemNLQb7kC0pbLXbu03J00W+kNvo8BGaQVn1lqPb7orKik1ZzGZBYhGtOMxoHVnCeHBkOnWhRMX8WCrdTsJ7VO7aiga0xvWnvX769lK9U9wc86kFltVjTXZAFcmCEZd7kxKlq01l+ZM7C2cxvdkxNkWWnEms5WUTd9T00x69uThUcsXZPjMLMsBOuJ7GGGkXGxilusrxDeJsRaWz5qiWRCg0j1EVB0hi/9fyy+vybDar6LBgHTEOdya0hJKCxImg1FmJED58t7CYMu5FZlpuWddDprYlB4I2RpIfYBpq11E8aiukDYCMkE/b1++SKseeaBp9ylVBLonUSOzTYXX60KEd9rfFSY4zjyaQIDX0KmWKuwPTV5R0sth7370MR0qcuIuIOeC/I2uuY1qb6cV8Ad9K3lLsEOBlWJ36XF2Vmb0mGXclKIV+sNuXRuglXkHl1FE9hj/nMBVpEeQ4qdX/UDUJm+GLqhbqTfFdm3V7iy5vWLr1+SJBvq1OGHpkwpfSFoNrGrRjRm0RCxIogIYUhkjbjlCkWy7qpLVrf36GEkMPMkKQaeFDdzPWKKg84XfBZ/CfnXpZvaPInH3G5vte5hfN/9fUeF1kkDvOv5SBnZ8ajEqGvP9Vc7sLhxq2/amX0+zZMW7JeWE1QopDwY2PZRk7NDkz5aUsIN3wmhu/1ciq7NFrKMP7b9bk/WjVENrIlDGRaVHof/AQ8ZbR/00XCRAdTiV7CfBsnAsmA6tyzWYkLwWnJd4rR9GIDYB/2ufsOHwYfJmf/VPaSrrhm0pLq3ooar8Vrpvz7sJYF5QOKXfRCLZPEvpUp7si7Regb8gkMdcxHm/8nR5TournP0edDD99e/yf4DU0fjS1kSPSY0qoXrNQnvVR5ojEXBVc4XTpKSX3+82j71+81GMYcB7WPkPpFFGzQkCc0wzWLnYXgEY42t12YMAtYVprWHyHrel9oFBcBw+uSxMqb/aplvjEep2YSdZyam0/9Vx9z/u9KXKCYIAMbydMBzjP3dbU+NGQQBCer9Groz1I0SvpcjoiGXYz2tcfJwoP+uXEHY73DrufXGVmyBJtY0n2oAfez3J8IB0liqlNLmc+mz0+/9pZY2fFW2v9AFBaKz3O2tzi3lJl3IyFihYRhCha+8YIwJBpGbtwC8dM23CURgCmF1dMBCy5h0NVfBaXH3CjuoHPVQn+56EgM855ixlD73PnN1tqy+DymtkRgwi8uXNEexHhaVYRAtixgW+UBl4Tipk055qq3WmHzlLVg6f/pqMLkB8m0D8KZSmEzDlIV+tFM+uLrAd3upfJCyqvXfZ5nupasOa2eYJOk3ekAePqzYIILIv2Z6A4qChqaMFTqjWUpWQrUHSzW+Hb+nJvYq/aOmmFLC6BJ1wiffQ724LkWXfySZlcFUImBxfSQTLoV5ihGzlJae8DHvIfohp1x9ELy5nTBPg/III2yHJpv6Ueyl8KF1Q10yd/pocLS4xFDsdSqaR1SWQYD4SAX1fizdJGRpFr4098g3wDazl+vZxCziYfCbDlVB+S8dJoolzjbqcCPd0Tmk0QNyBylWe1/Or8OM72Gp21JpzGwdnQOtvHqgufmCsFbdd0U5ovvntroiUtI3p8ra9RuFAP4KdI6yJqkziYL/jNujQbG1FDsfP8zyxxsxOFX6g+78AW0pXRm/GbaujSnV3XxVWV4MBT0ZjqxLIM1LVABgBVbCyMYf68yanENYsNQAAAPgGAACBZb0QYtlit2+kanQ6DeE9Bqmn7iAVit/gfN1hY1DtIoc7j0w2FU6++pKgEK0kH0qnkVO31oyyffzcTV13R9xnu11gVjO4CLNuJPT7O8vByefFzCztRiFWWrmKi4EqcgL84hDGtceirXJwrglFURpm6vukCDcAWAQkJpihX8j7kN//ixMZ7hMAh0Oqqetgf9CEL3im/0ttHEKyF5yaFJeT/h8g14oePXNSJUlm8XHZAcahqxbB/Fodjj2glEf16Vk/1QrcexyKSBGA/Nri7KtNdXsXU8d3beqg4kIX6f/RVCpcOKgfIrr9mG6xQsYnGPOy+xs52dJb7/ckLrJShp7F23ZdQbV+3V364q+HBMFfK3JuzCQMgqTigbXuZkzmTz3dGOxYIBreUZpe0Op1ItQK0mFGEhyocFq2dqIqTzHkes8mtCMsKJ8uzmwxEPTulSfi/qCO/U/lgrd34UjxRy9iVoy+2YwMnlqGi4UiXmEmUegmCXYGxysg0TXJewZoGl0yrfZvWAklzcFSnVNA/VCEKZ9ShOoB42+eSIh/QuNltVlH772pGon4Oivi6m/PsYvAJIRIrT9t+qVjNVGiEeFHulkUrmrqh+U32Fqsuagzk9y7nq/057K7Qro8+fZ6CEg/31VwZJvZ3VB+dCd4ePb7flsaiJTDrIKhoS7jwuAm1Z45tibK7zZMtWk1eg0teiHCbkO8swZZbUVb6BAokzbq93EI/PT6p+efzH0e4fsZi1wEmGCZE4FtPECrVQkSPNzA49Yfk6OGe8xqOligQhW2VdC2EV+4OPmC81Jy5xTTcoWREBayGVEB0umk3+ZPlUmPul+IRXw+WfyQqZXzljViEL7/cXYA7MSh4JvXf8DNCGT1Xh+6r2B/uWlVBYkkE9dD1nQ+anmZUYW9DqkE4399Ma9s+hPyziT0I5Z90YjXYpG9rF1cvn2W0EJdeAQRtRpe+ij3RsN4B1gWJsqbmro3iH/q3QBljGEDLRGJcwNuGHtB7nXU6Kezitsxb2xvMmQcGM/WXVPd9U7Plq5D8xM7iU7BnuLam86x429FochmMPY5O/b4ZV3GAgq7/9Q+nN+rg5KPnmBX5tn3u61tc4pB6gDyeMuBfNkhnLf9ysyJ7cj/CEzv/0l24M02dF/UtRsAVcY+AleWQ1SQ5PDM71m79cCtT1HS2G+7yg77cKYqBXJOrZaJtJmTPIoCTho0jFxXcqaomnDwT0KxcR0iFwphM/CFRzoVDtW3e4B82tep61/VEsRSHQI/jLIfj3MlfwfaClmNrPM3yPwkGJBU+MU51D8GZoX0a2aQxZPX0pkMe5fGTTCv0ddTb++2fXvmX544rAJ0ZNH5gXGoNmuv0bg7ViE8UD+TnpwN3UvdaWBvTuE/PfT79w7k4BUdzjevMhfmofhrOqbYR7OfvLhZJ2mAJdY/lC1lAYa++GRLwJJvuncmOTl++1yfFk4nf/+YacNTfMhBNd01cfVFfAZo+2bbA4F8G9qsC0rqFp8kz1e/k6aOaQ/mK3NLPC7NHNsEQXVBchhCIXRcsJuLG3e74aMgr0I7YQAfVsP1LwSvFb3HNsb739pN7vrkvSZpFRqytgl7c38QhkRX35rTchke3uZrXplql9nJuc20bdMecBABnbJvTC69ShIfMng4UXh91G1vLzV8TZHG+dDgUBiNkUqG/+IixltVpdyb5dwWjTt429piu/c7hXwZyWAGUNacWG0IsE3WuR5FZwx5XIibB6xt488mFGuFjwb4ehCyyaC1b/2je1hHhfoevq6CNsowpBL9JJY/IqTqwWnqXfypIKXi9noHBdHYsfAJX1ALqCsF0/qhlAvLTKtp5J+Bv5NkSBzYMdiPzA/5ZA9+zAKHKrLWvFeSo/DsXDka1HyeXc7ovSTQihnuY0Syclq5eWgEoTRFuiY73LwDUXbg5CipRC58EJZzBgUlDwbxoe5w4n+u/37v1uxaSBJsGPwxS9ic9VoDyYFN3oE/+echK9cV4B4WB+MZHZhtbewqrwRTqXjhpNp7ixKXvUsoT3lQ8HWwNouXRNQJHIJyqXQs9swl430didsCRsvrLg50LiVbA7k1Oa+q978GClv/qNc5aS8arTRsAzmZRfKtMKIsQ8A+lGZShwWXyDfdiSOmMQntwHgGLL/fqDW4LAZqITijpgj4K1Aczhap9Q6WTs4PXIuBCBYngetlH7+Mntt0OYeMxxxXvOOZAXa8UDKP54KjMYgyt5Lsi1B9tRZSFzY1oseZwVkri/fpqHiewzGkNfub2h2kMw2v05xaZhsNTOFgolWpBfWHfys3bbQ0R8Gjifnc22oK2ZK8rTnoYMDhmcTOqpprvJDCdfIuxI8D9CVa92+v7+CemsRnwvUjVDYAAADoBgAAyeG6xJbcKdsmARnTULHvQorpirFgdHNMizw/NUev5zYOzz6CGjaZBG33j75h33rF4yYcRm8PX7HfZRGH8MhrMEfZkLV0chm8IhSiXoOS1EVIlhEE4wmfm5KxYUTHQVp9vThKv6lV3OkHP+4k3G672cpa3IEDqlcbUzkEeB8stoY5OnEm4e7O7QilpDtuxFj71lN5rKcZK04LlMjdWqmjvdY5MeFzkv6K8N0jRe7+6iDzZwyNxHo2vXGZt3I3HrMYaV0Q46sehMiiTnBTU9yhoEVYdZp/4CcWZ04eAU/AbhyNLtbgY7ec06hMa3sFkgpAE2rGuCUCvcv9DEYaHpe8uEgapwPUqSJNn15bKnOU5OKDzKQlpnAtjV0v/29LE2NuPBq1cHJUFvMBg0QoQcrCwCkz1+wKWpZpb3LWKy7qd8yOce5ERU/282lTmeLXneW8EVkj5vSsgLb9bMsd7TLkD3J4vnRxhaCglCyOs1w3Kq/7RtWfgtGEd/aaGFOgDTkEpclS1iVD4hEFM9Xe4mO+k2p06wthCa4n0+5SUXU2YNZGV1qntpu0S3BA2jmoIvpntHw1gKjc6Lux5suH/li+YlijCs2p3uwIZwran7NpxyEGKaTTOwIja+3/Fu+zXordTrot7u04ZYPMgTW2ic0nHuuWZS6PmXfAPES1wHEcymyxrLAhy/Qa33mBO4GedH6SCrBAtxDD784eNjZS9tPj4p394sWeHBsCFqOm8gt76cAg1EYrjQpNF0/4dkFJwJ8y7g+PBqJiMUNMk0GbBbelXxNgr1ZqukonAw4dDtRJEXvf2e0yhbn8YdL1igLZ6/+0obhXSw/7j6Dm/RW5EOVJOYoaErQUegY32tsxsSGuv4qQyMAwGgKAzAmG+3pZGxKRgSUBOVhOZ5PPYlw7TorXMkioQwqcMoek204HmFemin1Ngr/QS5p1WSh98iLVDv2qHThHWL/E3KCswL3+UPaEuMaPl0pjXhJLVtwvFYmuj5AAWpUlVkj41VkQSBUeUf9dZ9bnZuUmtvyI80bhqfFp+4s3cXWzyG1gZkFRq4gy2+xpPdMdeS4wQpljnaRBiZgDJKI6KzUpyQJRPY6+KevDFYanCxPglpyDsunwD+fD+zHnQnOY+C3+sHvFHBmknI4Q5J4DQF6INeBcjc7va6pElZujh9RA8NrXtDec+K7LTuWpApzryJB9rIIpkfJplxv8xBrcUm9MUV0r3hsv3M7mKfoFvP2vsE3FoQbEDd/ZRAa6nDSpU2Fm4r3B4QEX/F/79mO+Qx+f4GZS1GSH7JxvW9kEPtvLDlE1E8+HcN2hcupEV5fqEdhEkAchwx3RhKs9kAov3viJ1tfGcw1qNOl83ESt0pexPjMdGjOieVfkkOXl07zuu5wuzwVy7O3wfUe/9iDbQNpUN5+QrlYz90T21cEd2tAtAZ30ZzFOFwvFs0jnEjHOE2z797X8ZL2f8+fLACWdkM120BK7OtxqY8wh5cQQ7OPwcfHQ2yy8fgh+9Xom5fNGVnQkU9dGZ/iWuCdk9FxQ/zDdzh61H4PCD1YMpG4ey2ud/D5s1MYwi8K+YycNm4ot26ZNxGH1gAmgJ/1kE7zGRn9yt30v55D6Hsw5oIKeVA/5m6oAhnRwJ2pUyUqjLo3WWzKt61UgCV2DAdEe0OxVHvNIe5H991EmoZyFWx2T6IINpP3eEKNQbjiX4BYaQGufS5vFs4tKOne369UtoeF6Gh18E36CFb7rVntByaG306k/fbL+zU1FONOl4ot55bnPXp3Ak0GkZSidtedGbsrew7AAW9MkE1C4mYAoUwQDrD8GaaOz/w6xtINQ9gTqwF2jmkhelV3OLGDKTKDoj/Tixun0pG6amWL9TfY6t6lGZOJ4LnXv4tQ8Is5uM7z1hIhp3PIb8ipxCn9ivRyOZ95Rh/Ir8wBMNp53Uh4LLjclTpMpinOCSonFlWGOdbeH3ak54/p5LKCNNKf+2gG+YdTA8n8JidAucIoPNBG9c8FGwMXgwP2lowaQ5oYDxXkByCaYFy071d5xD7AcvOBWVeQliz1IzwuQldxBdibyE0+jqSFkELaSf3yeWs5qFBMuC8Wchn7jdognSo3ZmixAuSEUbpHAVM4j3wUh/8Qyajc8OAgOStgFFnySYBt4ZcviOWMezEdSALJZ4qN7Q7Sly8auB5C/5p0QQ4JQK5PpWLG1cShYvqE7Z6BLbMEep2M2aHfQvQyF+c/bDnRL0/fGlBo1MDGZycYmFKlLTucpTFSyNzf9sIsqONNZXM3lt2bt2P3XDgID+IvTkJX1jqArF4HB5pWLsPVBN+kUwVtnjhR/myONgDcba1trN+eSkrnYi4rpThiolDcAAADwBgAARQgMaqlOL01CJyw1MgOZ8E+IJzolXSN7UkT+YigujNlg5vRGjTEsvJYh8c0nVBYICdRJvjsmQw0VDaRHMBBMJXTIc7dvR25cSqPaATcR5iHXBPQGnIRdoqNHx4AgIW2VmR0RutTCYmJa/EGr24NLllJxXo7WUl2ZU+qFzx4vxCDjhBinvPp9ThbOyynmUjrW26yDosjPbUp/jjp1yH4FAUq4ZVe4mITEuxxOW5I3DVtY8uUu2G/PbhAQSIMuJhvDqw1pEZFFQQLS4CP8VeBONd6Qbjyi24eRfWQptgKw29/W8JatjdaMDJshleTFgznxT/q5Mf5Z/3lfGyavptaj58Xcn3aWFPsL3J3QnfMB9b5ga5Z/BVw+2DCSdSGxDUgncBJmjigg9Jv07og5+AT/UAFYzu/e+f2zYinjWJvD6YEW6shnpw5VBw5zUHy+7ZOjQTjRAtHVu91ccYMSjx9uxT447Fmy3IwIzhHCrUzfspLiCFSxjuvD1x3Ywhv4bhdyESav9zvMsXx/Nty7rFCssZ5+qBhEqD0RAy/NF4CEHsxbTLZA2FW+n0Il4DSQEd945vH8LtDjP9mqT2GdvUiWxxuJu3EXn1bL1ZwmtKiqYGFPDM4tBpYrIfXJgzw/E5ncz/Vwu6nRkaGUpm36rDhXYxbGhw0cWm7RnU2gHuboE4UU6xqFKszHVwdD8KWUaTBx8kYqtO3TfsKb7eCuDnwuZ211oRmk+vKmmzAWWkBMBGGrDXTMhGQg9n7J/uOE2poQClJ5LnLSryDiyk13WoveWuq00R2rO0NTftdGbW6TbxavIQjK4hiJFTr9vEcD59e+h6a+W0xEGgQEU27jRPm0UDHeYz/0xASTfB8t5+6yjcbfDKuQPbiDnDY7Xc1OLo8jb2iQrjskudrW5Fdulu5IxxeeFGZozqz6U/NRAnq0k5WYGEcuH8WFumWO5/IptMOdFWkQHZiKuzWJ/cCHGcc3klHGyvoarVVr9UngU+Y4mQbWXOyCJd5uGJkSeyGIrny9bEdqPYYhj/roqKlEFAl1oZmhnYfRmJ63RS2JvHISbKemlbafl2KTZACs24gPupEn58I1SmsNVtkBfZKmt+reCGDrn7uzGciLiKtyTujssSA50D313vMnWmvg7HXGYUnEFgmq7RCLsxSeJQwECSixWQM8rpQ+O79O4CqDMIOgdOEcOl0Py9D3oIxV3PMe5vFR+gynt40Xfz7dAnKPs2lfaPesk7r0ps/jEuwQeZM43seW03dIFGVa2UkeIolzG8RBQ3Ar0R+y5S/pfZLeUVGeXCM1fBow89aHX1YPR5fsIsNjdp3ZzzDCnCDURPEa+fnhWLJxl+ACNA/iC7QhP8XXMiL4OUzxPmojjo6h8fsAg0Fy+9ne7GseZ5+rufSaSzOpWwPtxlrbdryAHHhm6aaqAstGKS2HFnZh4/VJAs0ixVNNpXfPIBrNrCqjUqNCFxx/nunmNYsjBeDd9ggPwyKa2Wd7XR/tAh2MIbT4RnWfIUWP5TQF3ydLybDbu5r2QaTmEbZtYMKcYzYAVpyiFn49zJCdrSmliqZIxAfKsrnkEimu8kQCxO2Bq17xDCb+LmkqIP1KaWCMcV1938lRwRnGMvXCZB5aCHOYMnsbyEfrO+0JEUU0/W8qEalGtRek6Ake5lqh80lBVCO59cl6nTUruHJDv4JcjCCrB488vIVa2/i7Plthy5RXvr9Hosrv8Uc198b7DhypasnHYmhL2yADF6Zyjz4j+RRUbe/BSrmATo5uylp0yS6y7NRTtd5+EXfSsKG+qOD/BLohwnNenQ74ONg0fnrrTNvAlgMmdYkgkZ3TUYdJ6iKL2c/IXmmBYgepmG4MeTrf8BvdjPacA5NknLocJS0LUZrK/9D/FwWPYI6JXqeMwcCOjwud3FQcJhgHjZ4mirGX3PG7Dw8VR40nS/Kw4RopDxdLZPuWJLpCEf02acwNo2NPyiAA+is7Z7Mj8hwExvyQp++Ef3KYt3C6wepSAPOLvk3g7yMKxwMtMbWo2BZctkqe1oL0SwJljlvBtSlaBb4pJuYCBeQBzzQUkVyaR/bUdH0qDoYdCckg5dGXrjyhiyQWTedirh1NkA+8LvzlnSPpZpNXiyV7+c+JC32FcZ0F5z9vqRFoooWimVJmZZz4BfJtF/UP6g6qaavoaMk21wH0T3Rdqf5BMGotyoKn2QJhgNn161q72xdgXKT5djMh8tWUtYpSHssD62HxUrGjjeMi14OQJqsghH0ZmmEWkzA8GM21VAkx9Grz/GG324Duvnw2Kp298y0LxO68p3DUvj4f7r8CQUnaC4zLWzCvMku+M80IvAnD8QQ/+6pzd/BxAhAGzWifDID8Au9EOAAAAPgGAABYu3QxdRPMpkEfjReMmSaj1sxKJF7BD3nDqnpmtuBp7YhtLd6Zkoz06JSmdBF/qbAvdDMVLHXTK5coz5zAXeWJNrImf1gTttYlZadWLfvqAQo4FZp6PzGTK0V8602s9pBP32ZB6HPoe2ApIaR5HSw+Pl6Ci8lwyV5fzdij5aBiiKqnBSFQQjrI2mWj6u/Lq3L6SD9xU85POCIb8rN+i9YAad7O0I2woJ+1dv2ti/gevKAASmRhb8xl8XASj5Vc6v/Qm1wVoSnl+y6mogNR8IiMTl/0JlI/xJBlVElx3/S9eQy3/jnPzZCgde6K+jw9Oke5TTHAdI80U1aGCm/R+fnImoeqnha2C7lgIA8mPqwn3UGbY4cAqwhBRqct0khuC7sJuJnEAde2xDW5FN1T+NbT6TxtWukPdLCF3z2y4g4QISOUH3CoCXA+XjfPQj21Pr88RvqWaZ43b+eSAR/N00lqUOv87WrQLt99yjoqTB7Up6kbt6AMS0BH4g5MDOw5foTCdzVV1ODL/KBgQLMeFZBT0pDUcU8ww/6uCXcjRiGiAov3rUQGpFN4u936zLiHwHlQ+kxu+yu7oFKx9tW3DYzKh8VV9cWKBi15EEfhyDkFjwZ7aZaWypzIG8mL0FdcB33xfwfzNMcQ+EQrmMzXD9q6koql0wdAQfIPu9ozBFkZPwtGqCS5dAFEzKJTSC0tSwIiqXHp7qfJP/XCpjEGDFwvN6bQJzDKCngQu6Mj7Jax6aUD1JDQUcz4IqDzC2RpoJr/WejTJFsmQXX4Aeb2teWmg5PlXF2q2IWJN1Tty5df0Sp8OgWc3y9AaRlLMlO4xG4gUUWS6uwgwd/LE4ksd4cl3KpA+k+V3mb5GDpZJNjIUHG4HvdLk0Yo/VwRZrnm+HRHF9qJzRyLSnuXbW7aU27Au9BnH+HaDXuXbx2zCkEZBnOtok8IHasqDrrhVY9EKF7nXXbdXC/lPQ8gFtwTRZ1rGqMwvkiomvZOCbqnS5kigYW4VlzHtTNj2YjDZaKp/p4fIKg9baYSpmroapaTrFnIJGhi7QaaDybcD17ccxnxHkvzDR8M0H64EKxLCF5vKARa0rBA1hDsIiGD4v0ZrGLJdVlbdlDjtTU5x1lJs1GCSGZJEEPtrj+9vIAxHO07u4nAWEP5vxWstQgs+pfaibydXHBPpZpr8gcHguSFFolXSneDH+lRFokopOF6BPX2WzdA2JZz1G9mgdA6zq63iCR76X2LVD9cGtjQ4n4bRc8tryjptk/pP2LBXS/QcS2EiBuqJ1cuJ/Xjc1t+iOCnj0Gq2KKjdkD23X2iP6uro4YGgc2+CB1VHGpvidUt2m+o1LBfRBYt/IgmgiAZLeJR9y/mv23v+8GlqrENV6jS8jX1MunKSFzDosULldMjgLeOuCyzv2SF0BmyKp5gVFEhIEQCFG9KZK//qKrNBbEzknjKYG9h708nGCjll6IJ5USqXxB67WLkcF3dxwW9A0w14cA94DipYckK1c3rKXyubltipQM7NUGh4Hggf12cDKKivI2jx0aIvHe59VakOOWKvm1O+N/YeHI2Gwacu/VD+w6s2lgESikPvEZUwD3cvZihv86Kt45ak02Xv/DZaH4I3ZEWO2PPsID1HNAH0yvvIOmeCNP2CyaxT70994ssLmoDYPNt2ANjW/KczH8vq2PNROjm3sjAKcpEE3L5LOEMC8ziGNEFsQiUldv9gi3mGO8Z2zICVO08itzlcsnZMThyzo0cQ2vu9qY2s7sraoe2r/e4zbbMwBWImbpa5VZjFZwjtkQy3JscBMNaIzmIJY0OBpJCGgJbrX7wuolkATAJ2tnUQ5lc4W8qxEarF5Ttxn+ULe6TAqxItPQzLrs5n9R/VaqaeWiSjq/taxJSWWLY+55sXUXZ+p17r3QIvc48O1p0O1ovYecvWCgrvLdi42jXOPJcCF3zJcHkgPfnoqzyaTFpxbInmiyKQWWPLIRII83dvW0wrbLzuBSdULuV1kNyDP7p1YcyWAz1bmwyhHbgU+r6jv7TUM8SUecI9h170urRgKt4blvuwEIwjkCnD2mzmt7N4hXF4FiybRNYkZemGp0Q8Bjtq2mAC6hMjbL/+QwYlSor6eSUpEAYkvsXJUHtHlCknESJr+kEX3n16HxOhfq3kLoLG0sc5txSb5ZbDTL0oyMtmnCuelb4wcqDMr8b0zXNmW286HcjMhaWX2QecKRinmtQE2f/XWnmOWB/f4b5UYIobbyl/8HmuaIB3CZsiHL1pSAyYgBnYRRjD+BzoVmJL9NNAU77tTigJoO2UrEMjGGOOi0RNrHd61QbZJxqgtDnCQGb9ZMXI7ksvtPZ455jzkEDW7xp5Mp5rKXWz+cIOVrQO6jYZ9qCoAAAAAA=');
