<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAADYEAAAG0li7Atj/OddocXOT1bM/djoNUu7+2DAfEubtbf0v0qJHI8fI2TTL0oxr/ETNvfx3B4GFgqo6nUOx4/S+2lhUz5XS0mMeWl5fHHgFpsLDqJoakkruIYQeJIqWqzvN8ndrykTPSmLnmqu7CPecK0QDvE65wSJIS21MEsu6zsiBakmb/+j2EsuWXWXypZ8RegXiuKJHnEjRR24zjY9J7BmQviBjJd0ZX/H/40NMjQizK3bSHEEb94YH+UbyYbjaHs7or+9REgRJM+C58oNYNHI9/HizZP/QUZZUnaNiEwW8rmrOMs4jDqryhFr7t+xwdhUCHRG9nsi03Njupq45oUVELIbR0W0s3NEqEN1FVVFvyk/pR2QPyuKY9lpZBZNOyfEwAUhZddacYOCIfQf6FMEFXYdpNQxKm26rkWZSC/yNlJ3H3Coidl1AXVjMGakuuokRhAPNYa5FuQS3KgeU8DzdyV/ZeIepgAbbdyNximvkj0NmmaJjpzNqs0VlywfTKA/j8O6H6QLpIOeqImW1gO+qLAjrMkVv7nhSoUIujrW1zm0zXXLwZS7w1UkSGu5/abZvv40ujjs3YYdZziUQ7BnIBXjJTaJWIaYbh/zX8cbpCNSUL2YMNlV035gKu4ruX7BCexrpejWTSoimeMEndNf8dD7qWvVzY088mYg51lrD5BtjoD5IZPTUanjwe4+U0Gh4V1kUO9dxRvy8n2AI5+9SykFkB4imoACZzaGOVjMyht15iwmACafm6v5kbN048f096lGNoKBawSUypsOvbaOSxk+FxpvbGueK2i8AwpEBZVyf3w4QBRo0TJcOsPjyXvXI2YKFbuk7Vvdf3zZEhz6o7TPYhymG1rUmM47jspF1fRvLe4IycXnBPmXEwmUzE6LZNyWOpal6WdADupVO/cadEuikTH//ajirBe2fEcPv5XT7cto3VRmdYgYKerus4uNkzagf7KYr0FQ41QkQuXyc05VhkuoKhJ278IXOnmSjg6IznxYMWYVlwH7GvmqJtPErQbsNi0n2SBr3Ps+ygVxKio/urz74DgOgFCAM3Eou8bioWopetsbFKC1TCfc+7vnY5Ob/Lwjl2jDBZojutQ8u+NdsLdJR1C4WXWFNUSWdNn2K5VaBbYvaVmbTtbKa+8Z1fqWHOXPqzvHmsUDc08zuuUv3yaY/KQlhSda9DN39kOmq4ltiqMpg0OOp2/XPwvxOOQ8qcwQSooqQnRzYZRk+Q/sSM2xpkxad6Y5+9LBYQaft5Fb+oko9IflMMqf1O5IijPFM7lKUk02AYz08dhos98b4ampd+VOW+/1eX4AeK67pCakuJ768n3vE1sdVkprqWFRORLJ1BEuinmxgVwxsHKqgz2mU7gM/H1aYtgFgQJJT9y2n8KiHBlHfnEis++wZTD9Ta4zCH0N4y3j5kdmx75cV0rSo2J/l51VgM+ApMXDPO7LoNFNYF22AKmGn/P5z7RASLkvUvQYaPo0yaU8yWpmE+PFDs3cXymQ3xCZaIO7eAxlSjj91cMLc7KiZW1uNvuQVfElvTwZ5WQ6HqcP03fP3mTmcH7mu/3cQyLmzPbwa/Ak6tctbb5VlMc1gCrDytpYFmK12lcN7mqvWB3xkzRCEnJdWGWC7lrDRcUJGEH3xb68BiDYsDmZQTA5UguUU/yj8/hy4hW4wi/nyjbFzzIBGwRJFYtdJ7EWkc/wJ4BZiIHeY5wMjV3SMP3IjYFFxgWSutSPhatP3QG6I3wVPgcSNpb4NLx5eVIp7J13t6qIcvzHpShJIFEuH0O2ltupRfsrMTNtcAWBlp0+inBcA/cmdFj64BcOBUoRUJEZLOnNBfpdzrd9z3laEcnNAoxkaSzyMS/hnuVkAtkKRPj3sYZCRwLtwUvf8WcOU+UrYd2NhSB/ve4MZPgGlK/l+gxfU7IXqVGHA7rVbsIIDgUukGXcc+Mh1BhRsh/hDy0x7XmzaR1fi6ttpYTSLXDCrOJLtdUPN9CeY4c6GhsANO1UN2fpWEBJKq48fUwnEdbN00oJU0pIAqBql0h3jsOtpKeCWMCRakVDC6d09c4/HhA3biHPOLJQZ0kY5eTYdqnQoHicPkP0v5KMKESQF+vAUG0SabbW0cEWrcL+/CHIIKQmMqEToSVdsJIbpyIUV1naUTIbRBc/QroEJ7zzSrK8/C1Hto93KSm7vBqWMxg/TW1v7t1QZGVSbMw3slCdDkztrYfHPpbvH40hEv8+cSqEnDhOelFoSl2YczNH+ML95+4R+NuiHioe3x/3KbfWAjvNCTMMBeacuSjpQ0s1u2C/QgJ690PXQyuCi7m/6JMIv0n2f0WyRybkseuYIfLj9ghA49lV8lhd0pR0rFndplS7Fyd5s1B1YlVOQZ1LtBauOWFayxDe3z9SDOjtg9lvjuR9/UOOjKt6Yn7H4x6x6eL+gYTd5tDuCgq/Xu3GgMwV62b4+5Rp1E1iArBKavfB+LLl6mH2NHGTHhTSD+4LCs6TxWFvLE6+HydSfBf9xamBAf67s1WG95cDbFyQJSxsBOZq3cQAOUk6s3Bcw2zqaTC4yM8KCDKvccvlKl5rObZr93OE2QXdtPgJA/CmDoPEo32yB5WQpyzABxfASBABh1hPqJ3xwOw3BDFBS9WBOeyNd+PgzC4rbU7vPFFzjQl/S4jlGEEJ5HYd4hiqt2osxLNN8k0z0qv8W2kbkV+Roer60a+YeuZ3HONJKpsHG1YUBszxP2H7gY1jwo7zgmadF8D3mg3kIbfq/TdeUjyFKRHUuPcHwEQmcZXewV4+ufo6Og6dKsOS6hnWg+kv29iYkzIBm3c95k8Asowx+YTS319n2HGNBaVHoRrwmai4dE7YlIKnTq9LBwl4o0r9yD92UazRJ2wne5Hgrf3NyJvXmjV9bfQwmf0h0qBAaQ1chWQQEVwUaLIHczbe9V6awwzM3c8gKKR42SLRIkWlOkXONgGD/m9JtQxwEg8KNyXeOTVxh7F0KVTi2cwmhPhmvToZEEvZ1TgvyRkWNXkaSl9gtuBKGMta2Mdu6WqY5zZqPTrL60p77wPp5M6y9fkKqRic4QptVgZta0dxD7iZeDxNXX3yJe0MFuTVYmIIHu70DffktPAqL9PvNIHlHKtHhl9nVo35vYUzfnqqa0x+W4m0khvU32G76JRC+Fr3DFGGpy40ltx0qtn8q8Dsr/KA6ZrpwPXzj8pUE5zogbgg0Ys5VJrM+tHVeuu4Ww9e85yPjwFhIYy3IT6rK34mYrxok81nTk8E8Vcdo4iO16r46YMMjcYXhAun/P11qlZgCNxw/kYOX+yw84qYG6FeeUEW4J9onz3Vy74RbHLl/UWWuJDuLrhhXxeuKwGDkkI+RstkeoXI1cuO3NfXAiTtPutSnjRDXKnrDur40vRpY48/NVO6NArD0rO4mP+wSfWtPqjnsOOPhQuUA+rGzKukBRiCchGG3jPi2HacA3C6DswAGQMstCzX5XMiNcvKmZdOpwEi2UTsmLqph9c6fbDebWfrhHSlAKOfmIf1QMb7a0JqEcwIwInYLEduyO6imO7gyfooMDOaghlhe6SyPKy7PeaCcA7witZbPnEToi2DRUh5m2GL8cAT8Y335I19dbkYybCJllg3EXo+6ukmCDoq79kq8IAgkKgRN9J2RmDyWLygen6UVVHKa8wcJDRdfjAJ+vUtzOzXheA6Sw6AKY7cbRCdZ8vZHPL3qVmdMnV/UM7iBTWoQ88c+wqgowOa+8fRZasE0fyQiJtBzrgYCUbC3E375GLBzZzdYnjzYqjUc3di/dSCbXrU6Py3CJ9mkiaxtgqhl2qczDB6wW1+P7pJP/5h0ZRshW6msJyngfFjptMLE4m6o55GbNme3zry9sKZ/XDatikLsEK61X31nj1s75eCvEvpYpRqGnqrKxFZDlxpRMgZXFyE82bjysOrSLPI/x/hYtTPBMlXuk3NUOkEumOHHQEZMhDep0cW3WeC2g/UwZmW4sxOdl2fLI9Sq2r0LDJ7KxdahdpEE6FoMqymbRubFCpJWiYRrGwFAG0/HGJI5D3cPYuLSI6Sg9rgZKFyajR83M/LMuDaBeRC5OKiCqTiy631h834oG1AgQezGBn2B3sBka8FFQovPP63x4xh+U6tbh+MZjymiNYCTwOvP3vSKv8gtJNhLD8VMcTT2zqJN5NFCWwsItCN0TNZkH7RSa+KeXZ8pGVTpTwOmkLmYZ18lL6QmO+UQkVUl0YALQ2Yt0m5TVNw1mi6ioOxI+uilGhYkdy8joRqGkbeY4Ec27Cy4aBiB0R0mr5mNANVDhRd68c6CBw6nUbo0ozjlsASlRksq2V/6dS+WSAeRwaXlerHH/iBVhPPkqvlABTjdo+anNq/5rfa+qagTfXfqUA1mT46dXxjiZhMUOC3rzW8Skqvt8O0JfEaahE2f8aMrfcka0o74hSGneito/OlU6i2O6oc6/JkMRbnLvhWzzaYv7O7PCBidJflLD8Hcbv4jl6vU70u5f/IKjynqJ/vg45mMvXdMCagE2xGo8LhMJGw8mNVwGBP9OfTR3jhvDx5jTM+Ry4h/Mb4FqE4Af+Q/fWtcU2gMY9Y3c1k3AdTMGhRhQgPo7nybipm1TEZCCyGOqtVtmGBZZ3ldzGDeYsyYn52+saI8Xr/GISdeIft5PDmxQCZzP3wdrjgiwHtRAydUUsBp/pSPZprpUVkFVnEShUqyyIEpQpantB8bXl7WYPeOdkqVbS8AShyAN8Gq4abER0qJI+Kt5Bxsgc/0BRchI/oOJr2w/hWTBiP/d5Jo4G4Cy1O/g89VmWJrkaRjb8f4mi5STLlVcU68THpgzLy+9N7uU4No0b++CLLX9E4+poCVtY9R1+eeDwSpto1krob0GCwD1izdcJUVtqwD8lksJIv5mJaiRvjbbIoIfrLraLOPWNG9Fso0dSMoP1dooDmvEFdEE1YS+n+Ez6y5qxGGpFD2KjgemES6OlVx4l4Rmd/2+yybsx0JtK0t/mUSpAvMZdesO9zgC7xg99uIukfJ3i+SXKXrdN+Nl+Ojua8x+MBj84qZs9TqC5h/R1VY2OMX5n7AcfUMNsecIBXiP3b2IzuhJYcf155veDjHcQCLWIaBWHE04Y7S+CWXqbeBldUmKuEy1p2UKU9C9yf9e1XyR5XcSDFNt0ofIzhmH/Ez32lBFKWkgtz46tgFeyUGqMPHGZsSQZrxZ/oc/jRgi9tjJmL0Si61nqJxDUpEDKIJkaFVL0Kxt6lNclUGmFTbFH6pMfkbiHjzEnEZVhAaBU+4S7ximU7eIhSM6XZ8SpgoJFUkKyW94HJ9s8D6Setqmxwyn1YrOb9jUW+l3wJ+mAXCL9s/voHd/VTdJ2zHVhPI9TNfJ0rU91mBeOqqW5DgqxJFWQQsmSD7pR9Nzn4mlfAbL3/cNcH7lEcn+2vsw/3RcG3C3v132fMZE6AjqWvDbt/3crRltWbfFIvfu7jMBTeMGOACv5p0yitdNmq3Zxx8xx6CdeGE/RPIC7Wde0vfnyBtulg7BTz+Zr2DtdnfDLDzzlbguhmgnYu+4HfZazXAVnIftlfMBeFBUM4VGLu5rovSuvaWjPIT0jP/ECt7w+5lO/OIcK8NQB8lF4UCClYTfCDey1bosD1Wb8QikjC3SuI2ZfZHkoq5VUKRy/KqTU23UG1ZqSO7jlS73x3+vXroFq+4164C50mfOQH7bp0V0UGCb6cCSVoEDXg8Jv9kNObCUtZ3J3WvBP8q8tdKsX8uVHfO6eCNTUAAAAYCwAAG17r6GhFXc54FwDjT1g/PUhVT/h0QoKEGJ4nhJKPt7bNZiLv7+IjO0oYEClAP6+qFJF6nvKY5cS94YnBj4TaR+OzrA0qvwdnnBOzO0P39wfPzt94AaaIDuVHgXJ2uOKnp+PFOdtB+uPrEbLARtjQbSrKave5sGHcAjpenzdbpnIEufs1c243EUUXUSMgCE3pO81C5t+zVH6xb+ZHOTjQsmElaZNvrL37lkjxgYa6BBWdYaY7YjSsZ8q7foObPHZCQAQ6yAIaVXJhL7xrFybNsy3YxlgxyPwLPMS5KPs+wCrdmFRh2WmliiZJqI97wpmQfqxrY8+iqiotIVeVlwBEG+ka2rgob1A3HaoapONu66ybAf9Na62por1KG73n229oV3vF/tPFXe5YVy5518zVEHp+Y85/S6G2N8PiZq+mgT6Zh+M86hgHXicdh2Ww861hbuSUiuYrx/QqSj30Wc9O0V14+uqg5mdZ0KFTgZNkxEp4AwaJLvV+duI1C5HDZdb8UlIlKi84fpU200crysLXerWWHtiuPPtM57uSYjWEt4jzRCuyrndhe4wIoCc8bZn3Yy/FfOb6ROGwtvxV4oZBsIgu5wJbP2/1gVU7dRFOGFo4maV2bFPi5EzbOzwEy740uxoZ9HWtc2/5WQTtIDGgD9PmWmcy97eSESFRb89R0MlBSlYT3T1/oezemVYkG5zYP/oVFFhfsG5jItWAhrq0sdE3Rykk97XMSFBpnVMC2694c94guhvUiVWLohQqXFrBxn7P793B/kVxU0KJohC3GVrNKTNm4OONr1d0sTTT6GpxruAI+A0Qk+BdomO1p8c7PoWfBJt1NkOvOkr1NZVoz3l+qSGA1QEL0me8jMTn3yC/kdPS9lgqlzEsKhdhl4weiRb0SfQN49h2QhgMBBL6kl9LW6iQxoIhEMfjgFANsGyPhq61gpdYPGVVEKKodA5wQYS/eKMgo5UCsEWzJqYY94Fo8GHsmDbWWNapwCW9kRM4LzMsFBCQd+M49QksVDDXILEuaQ92rzVSO67LwBdCYMCVFgmJAaZkkflGj10iEccVFUEqkIW7aGLEUWqXaMAO3dWZun6MP12mmR2EE+8p0iocoEtl9MKjnYF7LaFfjHOGcdV73MCIgHACRVj2bhbl3QuedBh86nXk2ar2y4bA2UZE9yY17i98PGPTqyCOkgHK19u7PYIYfQIgiLr685KAF3QYnWoDZQin7LIROqiMchRoW8zk67C9Tz4DJMKzTEe9atbV4oh3MA9i1pGKOL1+B+LVBm7DN0pmZQQ8OqbTomCQpHVPxp5HDg3KA/CDMBeEk/M7Gt0OrZYvr9jKCLxFS5e7fgTZ4USDxBX342q/8Jrj5YjUy44SH697aMWUpVh6fPzr9cIBG9+51gOcgIGwbDUn7F54qoyeNwfyy/E2IK0amCaf7yY/nRtdwbMEar0UmE+F4yVnClue65tYFsTj3yEGhEvhWb01kpPYaZTYMLIV+CaJ9lfDjtcZ0jE/PZ2vX6wLwe5hkAtUZoxe/0aaLUkCu0dGs2sDpG36VOAHc2VZc+BdYxf/0NhdUTSIrDy8DnnapX25cwPYkhHpYdFYBdDAMlP3jqKQ8l6UJqg4hpXJQViRXnCAGKIRg6CIdghiWw7viXJ7a6bnUL5Ph4vtQXhixyoJvV6JpqGCfmbrothuNQJqwAEUap8+8Upax5WgaTFa8Skg+MVIQ+sDi4pcmpyAePPCwdVayTRmgvxwhZn4AismU+BxhCFd0/ofdlzj/IohrfYnh/jixZ+GEFOruWZB0NZ6NTyt+8OX2+oupuPEWB7gPDmDP0dTQIshmMF55gYYXrwVniFQxcqcwIBCWND2OFR15PXujbDFsdDBmQjd8G/fPA3QmiDA+Ya92FfKKYxDvQEjGTG8y1cNpia2nxYlz1u9xqw1Y4t4HkQ9E1iYVAbWDZXcj4WIjTOcefGcRWRyAQ9IFgHiZRJRs38QVUlwnJYG4g4gYs2fPA11I5zxs9fQj/NOSh5bh6MaVX9wR8A6fVYxK8XVbyeKGZEigP8b+ORzNFHs/FoUyolDJRnRb1eCNNImyb03YuRwX9XVbMTLB0bmW8Y5QhpKEuHfByEPoHW7tMA9B2f95fvE+wBTpYmwpJp9BaR1id+a7mBx4HDhfU5EK2Azn7D8JgOjhBPbtdgxkNGtu/uOn26aBO8rArSVdfeHft993qrfxeSxZiD920RRN8B4dfs1CBGCoPf/c5vJUYBb9AUxP+wvXpcGP5N0ipMeMTih14GDu7mCStnUEkEKtiVd295LAFpwv812ReCn0OjFlO3vufJ2kbIESX3JZxI2my7ra/LNjNLRcgyEG/EQ5o3VkWE8ElQh5zhRuIivWf7wObrZtCZL1wcACv5Z/a8BTa/Bb8zqrXhU8F/ktt8rCuSbdo9IR4ZA06jZlLvef5VGBc8AkzZ1etg7HxlNwyRcfpLX2ifyGOT8zLDcBs1vgoAXTAbu6xZtKq0Dl/mcQNBb7tUA6XbZa4TkW//G2UsjKrqWgo0fCIA3ek+f437/wmTwU96aARTBkw/lXGXq51Ayct8LNoE2yYlorm7yPyqDpB2+kWmE+cJHha/YtP9KT/zntrQWUylaJIo7nU13gvBEswNEnDKbGRd8OErdAK3P2q0EwEjMTH0NTSxztDGxjtTQfq94+RK3sVvZoRRP4ezfG3sDjfjl5eAfFI0XJxbJb+lATEW7ANc2HA0FG6Q8EHtOrTvuRPENRRAiuJ3YOgw+dlA70Bo9UWIRaVpE2ZQyyxK0QU0YV3d/1iAgubHQLalvFcIa9lUQ/dk8yrrl2Lspcmy+IvwWftnrr1hRC6EQi4wv7R1AICqwSS8reZCJThzlVePGbODwdAkSCC5I9Z2bBlt+UYY0ABbvVlJ3fERAREA0QiuJp8K1MXRSnzyEGJZ/r6et0aBb94UnLGqW4mO3Hz3iqfE16GGgj8PPZyCrpNhuJRf+1WzqQVCPMIKaqjwFUnusTAjEaGpo6zpNSNROyawYCb6vsT9k5g7zoHR1yLqj2/ORim8JGBVuuku1G1I8Bu0tyd2OgPHWbQto78jyllGIxoAeUqCBJYNfJvMDW91b0TQLsKQNp/QAHzr2rvB7WXxqpwLoPyi9PbpMAZQRCF5dxQHN5U5xqdoJRl9sglVPr0McB5FFg/nHofF1w/mSKf9AAvNQRi33c3fb4TnqUHwenrQlP8cSA9iARMEA546QaRPnOx5+t5n15U61PtU8ps62KodTFNa+3uaPapyrp8VXiBGuiZFPapJsWDiPyf6iJMGIs0sJp79IKfayoFrGxtynbVPaNlzXdz+FahcXN8IJ9LPrWBwBNZTuJnpLhaUL4zUuauTDDK9rhqYEiw9lzNj1d+FFSWnFoZ9obL/TEqTrPV/YMZ7+qHYdh2uJrVi9/xalUtAS1nqJ+opmh5WSkpx2aLngGS8mBTYdUpjidkL8YNZheVQEstuiIKgOAdmADtI7T+lZK3mDYU4S9RXtOSNF5gvxQNH9ZwIaRHgGjqdXaZP9Hg/8dCI9KEDuQPoPqhuYc0uS7j9zJFkI7OiPMd/SoIVCBwVCNZOopGzmzATt3/IkXySofgWmCbikynznaLlH246TOqngCF+rCQYp1lfNvblXnD2s6976aH7/SkBnvKTob7PLbvD8HkYrXNBMr3wgqwR7msVTX2/b07hEQa9iTpk0tNWIPP7lDoWsRBePmxTu305xrhJCPkTykhd9dKbRcHNPLEPGpPBMsHXGPnNVC2/XIrUsniruDDg2AAAAaAsAABRXMW9gl7XqJqbwg1ogGmvGgI7lqxtnXXtPJ4V+IJtKL+unCxwqV1m+Z54YuYj/s14jIDQkaWBONaMr2NZjfLRiO5YYhTMEED56gdbhspFdtKJmWA7EsX1xz/99bgtq/1dCVD3GbuBGzWZD3UEt545IaK5AjrOfsenXhqR7KzrfJzwIuyxHa4joGY4foOKJ5XsFiLDAIElWhG2TYN8tredCgasGbjkAUEPETVnYEgG4I8eqfN37rYh35rn7lQ0y3S/84o6doZwfqhex7W+JmZMijoTXglmW1lJEtdIXkfY05KSCDycNvrWAjjFNhRxGQhTCNZaX76ADCGSvgb9qTfh4r0rKtvf0c8ZaUXI28Ezdb611i4u4jxExPOr+IErlCblfu4dmRoHuS1VeGBRmHi3s30XBfSz74P1qAn8wCEaYZTfn0ltW/M7SU5gr78RoXwP7cRuSlvIVHgTuCoHGS5p1ZRKdLYPRIgITMuSC0hhBcjY/TvM3qB9ET4AP28tipS7yb+gsSIuAAKxw06ZYcTf9jWxaTiQfiVxSZCpys1P5CwCOajJVs4LGr3n87q9tNwq3mPckqLjbQNqhf96v3/yFyaEDYeje2eEcg0vYgF5QpCJmHn5j5pIHId/5jrANcoIFU8DshJ/HCLx5ayVdkXOikb6+SjSrXTbjkAsRIjtlf7OZo+7wZ6cLPxAV5aIgSk8saGjhHm5W3JvvZXsKUxzWlwfHXn9r8vua60Uedi3UwsYwHfjRcx35nbVen5gFgl4Xm3g+h3FCgSRvIjT7p1JuKdPIpqokohYsCpsqWckrnyhCsEz68a0DT2MN4EHWVKIe/OF896+J/uPaVSzVjPhBtczs791K5R49Y+N3VZ4f29RS3LhJhg9kHKFJo4giWokIh6lHFIcEyxmf83+e9Ton89WThLIAuiBQuo6oa+rctCxztQqguK2h52nMQyxQjemEBEmFL1VaP+n9YKcHjt/T8f+Z1P7dlYoSZyyNWf1GeMv7jjk1QZyX8CB3U3FFHubhLwqAMnDO9bioKoK/9WFcppGdR1Kn8P7LnqqNUHqcw0naOA94+NC1R0jsrrJpZDtAYHwx44JktdT8q8Unzx8nLL5l57CfXwhfTEyrhJVOtAr8UtEq4uqgV91HT870gXv4pz5lglZW+ZuSqHgsT23sKzm8C72M9WIrEnzw1l0H3oezo9lHGyN2fNgolytjp9wzShCdQK2+rbf7I4uaXdKxA43nyENyW0rh6S7oeiIqY3xUc7oEYDnGjr3JNr8IAESeaQX8+kQBd8L1ES41cGrMS3+VW43M3icoVpUDiWwRrG+y6jP5rJQehJR2iGmcEp4H6qwuMvYbZKzFOvZ+astfOAENtklR+e3jbYmP22hoO5ota+SXpFjFe97EWfYTwL0bsgJPE3AFC55ggYL8JeGKOl2z2q771vfag/TQ54om/P0KC7ZxGVuh8tYOfbfjnzrex7VeUXwfIiwPnIncLR+JkG0pPECDMM33NsfxEABcfzg7YRMVhjvwLEaRYHmifytzZy926xDfXPquZKBqtzCgvh8fIvurL/XMRT+iGQh15Pb3a37UbtiujswHy4Ct7zVcLq7G/DVEg3VnKpZzNOc0dDe+B+Vq5pzXPLlfJbZ/8y4DvuGOB8uDcRg9fjAnZvsClJP1/FduSWu/XFksRcfu+NirH7vDHQpxwG1YpAj0TZGcrlR2GzO1jnPhJHTbqDd2J2vm5wafIycuWYmPMEDP81f9cUQF7jC1NZNbSzKZpnn5SSrkZ//rln+DO/GmueFeO/f1UzTBgm7o/hQwi3CpGIy33fBtOGkB+Azj1gXMnz8yU8DaCUVV3Asl3IXItZ+9ezXPb2Qh+QUv98Z0TaZ1o31MPjg/rJFS2789CjfEyf/sIUT2rLa3ZWLUhWxMxUTsIk3wYCZYfl4qlmfswuQEIBGDh2Sm/lyMl2Kaj2TzlYgEx9PR8LWztSqV0MWBGJbawruVREcUE/twbdRunWj6Bef860v7p9n/z/b2EqgfFfraYc05pCLd26RGtvSgN7xbQzIhxd5KhMhJGDoov798w72XukEbDHjZKLSmw9OXasxZxanRVVTdoTjCATemIv3bu+bQqZ31r7m3KEN58Dwy/dKZTO7eORpNX9m619AcpfPYFVoYvPKMeuhH7cj70LFhoLhilTNukdSPwOLXsvCDOBYuuLoVUt60VwyPeXY/u6qE05Wn39uBh1hPl6usTRjjNlizooz0dPoejSFn147Y2U+lMmX4Z+bdWoWLWfERK1FunQptl5WoE3golRWLtzRaVOYOpBIPb6Tst4cb6eZIGKABLLRARShu3B8BYk+TMUv3TzwGTRa+AMw03z2tkQlepEWUtF6C5vl82CNIPAWE0ayQ6lTWAnkvG2Vz8RR4SKE8Ow3N+5FeH28v+TFFZusNgWURQ3VvcayPKEvfWe17hlDWan1D/6q5uwzTV4a4Htc6frZ1YuNIlui/Wl9hzJHl809Rs/O6YviKDlj3vYYXiTPQqlvh/lCseWlx/B7WUvgpqQGur/rgfh7jzfm4Y6U+3rfocE7jGZLPUThXO0MevwxU5IdnUTMbNB3xX86k57TEWxffEnnAYUDj0fGdQBQgpq31odK2+j8cYc2TMoJ2aJocMBmvSoNb/UFLJcgz1gAa9G5ce7uVgnui7mHopxDWfa1ouCYKE2OSQgWAQ47Ni+mAhmlneDCRIV0RpnJamo4hakaDiM5AVhTAZCBAh19wvSnmKjsI6Zeoo5iOUL5DQR5SenbpEg60jZ23+qG5KVzAo3E9uAPjBXkQLlDgKBE8OQMxkxL1zbNP9X8xbxPTwC7OcNzahWOjQNEsJsYTyiQP/kBg7WkxxXfVxMnUQPVfd+ipV37Jmu6btDbZjfWeO5ru1f1mWAiDmq7n4IudaVCsLcLWmARg/Ew1bXqqykrzCwsoSL9xzgHwQRykClTbzmxcTf2wBcouBLATcgvYeKwRWr6GdowyrQu0AZM8V9QohcBPPHnU0VbDdNZMgzYGkYlPoLxqDMJNPCpYhydzKXv/8x+XLNAQH2A/QwjvDKlvnrnBtE3lW56LOI++iPGF3mVDJvrNNLQ1OYRZVAyQhVqNzSDtPG3KKVuDY6jI4c6VK3CtVDayWPc1BYvakNeMqZm/qvFEMWogudXWbTxj4ICdOT9N/AyoG2ecan/fj4n97xcNORuaJh/gH6lCP9H9npDyW0wM/Dhn+Fe8+ebBlxzKWEEzQ4hCM2stSYKJ4ffuD8/eSvfS2lkDc22mAxWVtj0wvjZWnmpikQ2bnFAzJrNbZA3agPctaF5PJ6JMJvVoFAITQunhbsI1cpibMPE4QV/3/i/EMbQv+tmaYwzmGMsrP3nXTqii+NkBRjYsAIoASP+A1foXzTD6DXjNTi5xoqb5zm26hWxBdNMht6x457yK2vzOAVeiEKCaX5KKgLO+hMUg2qOrhS7XTguQ49PdjxhywG/NFw6J9t4rXN/8KIILR/uGgLBcSUsB6uo2gpWI8oHtOq8gVUMqxTCM/PHAeBL4TNVoRdrl94r2I+eUFf72AcXc/dxoERG49KBMntI3Wj6bi3/t59I9M5+r6xp/HzF2riDwhyzMG1XPpTAWXLGg9K0toQoDa4X2kXpBjM/3FtePz0GflH2ZKSf7PrIOtznW7o6+T72d9a4OaJNyDVf1m/JSALcE7t2OVYHavFYk+djtDFKG6SiTdVGexxK8Mq5PHB9O3+YbHc9EC3rE5ugFoiuUaw1/YlEaPq4HZnch4TV29/D5Tl8bmZBHX9KR0b7T8KTY9U6DSV7JRvmFBd/Qm+qs72CiZfSGDHLUs496MbPSj4oQM7oGsUAfAnY9e0Yum52p/PCpHKd3Yc+hTb/xC96yc7Q3AAAAgAsAAJSQhgWSVm+IloLN7CoVtjZQLT7+EzX2qI47EcLhO/CiYi2iKDDwsDPnlpqRhaGKG+2OqhvYNX+lI/wMkFbRzsykRPpBpyJt361MS7JFC/p6uNafOes4L3RvaKD9e2tPdaaheHd1mq+jNVIrwn/AZRCduJgEg6Oba66fVfddqwH+ccCJj7Gtqy8NugEFgfXgNQuz7presUEHCm+6XeX4Adw0fMGu48dPFFqNZV+wm0/kw7Q3bkq4SFUR1LgBEydSit7SK/Idkd4ZqzwecCpRsbQy0wQ2jzKVwk8BBuT711HgNtVqy7GKzgznWXz/w6OcC1hWxxotr0MQ6J1bp+dEYCWKRYQhFNdignwkk9wsQqENiiBAU76dlygQ9JctfBZ1fqmzXzFK6B/qhPaZrWiwPnznK/pEYWpPKAs5irDmhz8y6Vgp4E1p+gQiYfvEwyhaXNwCrCrABpAFVcWUicURnk3pxUql53+QaHQJif7p1jl5WjWscPQkQa+oYqvUt9YTu2XB4yAz5GxVluUlyxEmxWlKXphLWfGKJbVpEBZ42M7za7/txy2UyEzpceDGFHVjhmok2gShWnxdW6AsR0uKYmvcCaAu34FuHr/JOe64JLWQCN/tc+M8hcE5/B2a1u45SjhBPXdU9bvNjLMILGL3gRwRiXCLmR1/NuSIVJh8eZVEkUI/7h9Va/Jcs1Ya4mzislG4RIY1OTk/nZA5bVL2kNhdvENr2pYPzit37q23mhP4ef3YyZwvte6sWH0i2ebPdyGF4HU32vhUv2eLCMNcdFm4nI74sskBfzAqwoWnBcNl0dU1JHXRBB7AE+PXoaNw2dVMJbV5d0s7xMA4y9hCVawto8II5DZeQJto0tmV3N8Yg5blEmVwyATZ350FzXZGLv4uUA22WFN8BvWEg/jHUr+4NFTBrkzxM//crpaxzqUr5oKjMdRj2rdH+n6anMrAeLBP5ztPFJY0baqvT4WS1k9MbYVNHy1lDp4u1SSvogiAGS7ououLxG705hQdaWhJMsWghQ31sRxf57jzS/ZEBVCpxpsAMVNuXHFlaSmN0F5PSfh1Zi7mSeh+ylOCfT5eIp7hUY2xV1FY2W7TldprFMDOCQHZM/T9lr1XP/9oBBvTFwgLC70HCkrnJYh7Lf6scsMGE6mBMCrFrQF3BDlAa3qgUOUPAmbabAnFMRN9QkwDINBdMGW1C59YlbgUALIphvgmhB314kHLloGw1+dIr78p0acIQVkHaXttdgL3Baivoq17CteyvwEXv62UBRGCqE8btcT71VlJebqeYWZ7CavRvxUsQIgCEeVhtXXIwvmOLRMeK4CnWnTcIIb2jMe7wJt8BvbtAootaF8l1r/HaHhoic1KE6xWklyGJH+fFSTq+UL3ouoj8uBSSgQle6Xv26ANaV0StBW+XnFOP8+AflJ7X1BVzRl4wEUbHQ+OD9qkI5JzTzkArN2eenFQMoLF1FNx5VVPkj2NQV8d1fZp8ugMcdBgtg2jnEhlkfQW5AU2Ugm2J8RruXR8vs5KDq3GbGzifz5PFEnsLXMPVadoQhi59SwEc8W6nQLws/N+4MhpK3qiQT3KNJA8lbjTMY9Uv/jWiSz7veuc+sy1yzwZONWdKzp3LpDvPj+zf29dUeY6rlRyJgKqRSWOS/uHnxfyAYz0pm2qsERJqx0Ec7CcceJmH7uEslVKFvg6CAE3R7fIturBQhG9ilSywU0U93sBPwoSs0N9pmylljsjgQLEuOjfT5NZHNoENN/uMSJVTnicqBHfCCLE/fyOD2ujK42xmHoTJsy+rsPmIlAyWJE3iN/FAyRGFs6db9bwIrabxLpVe71H5jNBxJvV1YZef+SD380ELMlpefgVEfMS6UbaKXdm2pnb4EbK8ukLSNbQzzDwlonE7BcvzMF2HzGBBu8Cg5aZl4M8yprN7JAtK6MGpeiD2DnhA5acBdahuEqEF+DFAjUsGxwO5PxMUGJSNt5P1xApdG/vgA+O/IbIlYr649BIvDTEPFcyuY3+nrTuLXYkwhwnAEi1BYn/Ai31/IuGiP74n4S8iQlZsjJ5/EBGYOnlrp8ls20GuwE7sMxpowcfeFi/jVkRoyHyEqzCBG+k7KbgmEoVj8qAjG2rNWKPusVzWaT5vifAl5MKBKFQiZauDxkoL4OcfexxEJ+THBPr39bNDZN5nIBPdmDLT5dUZsURphfpYqnHCFk2ZluZfJAm99zi3OPAtPaxlc5dHr+IbBcgDun0c9mNom8VZ5AXQq79b0IZ9j50IiNyjBWGGweptdynWmCZ9VW0HHlgD5NbND4m1RW8qeaRE3S3qsKcGOZTt2ez9D6GyU0owTluqPwP+oh6nZ4ZMlZbeykAyIGbyRvVTmA4P40yluBV/t0PtUX50zdRmHAQqooScMF5kIx+bn5p02r+/ctEF00si/1DW9u98T+VKMI3oUpBXyJSZpVXgJwbNFJlBdQLAIBPV57ASfwJBINQ4Ls2H3Lp5GiAuca2euZgZBp4nld+kW7YQ/UpVsXGeNVp6H4GKguBJBdwvs5pifUszS6Y/eCg+noDn7/miQKQ2Jm8iQ2zEc8GE7jvD4ak0k/7ClBBxAwCC/tnrXd5cwQVICTBUwElpdAx/qIl51Bs1jLW+0cHjvUACwLcCcr8H2uDi1lxOFOYR29uTZ8kzzAtFHWj+0VPWgeJNFydurA7XzG+j8HZBvEmCI+AFRsNYB/OstV7qx8mqyA7cD4XvqgoQrElHalp3F6wiknrbsIcRhsLar95EOqqx1xe0sYUiu8nFljnD6et3ei/bE8kPCT0Z1JeLtABbyUFUO1rMHxIyVFHKcXJDjI7s/tCPvgv/H+eGzATpzpQDC070Rdph8rZYBeRt4JY9tzrx4N6B/ATMH+H5B+GGpfDziu1wczSmuHVD6E21MccRjyL2X45kRvUbpP1YhjRJHumZ0A04LsmroUE4sQ1SSDyt4iUbxd+ARR9v6adgiHFjdoeL/bu4yoxiUySAYPdyQEBQyeCKnMw9wP+3WvN89yoVRa3c7fHtjJ3RgCAsNDw8sqHK82b+iWeWgFbqHnm5ubj3MTWkZywZIqvO37XcTq9drnZyy7tK0PjW3Nhzo4JPhFpLMHCTZ0n0Tmq3YCwnWPaps3TfnCXT/83MQrJLktqWz5T+Fjc4UwodXk5fbFmGEEb2//sX3WmJcyIlbXeGyRbm7sxtK1Zv6jK87qP0uXPgUomSgmQU/fgmJin3gSKYWQme6a32e2gFYo3dG7raX6JM+L43jFtF44GLZlfsg4jUM0Z97/6MpRXBB2QF6zNTJt9zFMkkhSbRdX9VYItzGhDPNf/pmexKWCEuyorVJgxOTV12Ej0tl/kZuJO2vnnQPiZ6YaS/yPO3dAtm8Li5GcaRpG6MqYxfvbwUBOlxEeeNO0MaNvSMct97LsJmNSSCAR/77lTLJwDQBJCw4FSQgCYS+dEs1h2iMzQoEhVbHV0+wk4RjAJJncLcG1PS/7fVV+Wg9IMeJSgfP7gt3iBce/Uy6OKLa+xE9NsPCS1Qbh41i9m7IeU/lrhrNIJuT3nAULXVOBiPwtjrQfGcgWC7yXEX9N5IBzu0gNXiS/Dfj/S/SANa/Cmd/Xuq6oT4dymsk4NXk1tVqXQp47mZ2pEPYSY52co3OLwantXn0WMl7jMTQ50l8mJ4MxZPFnX7AldGu1ItvmdUyZ4v3iHwwtdDIbAg2AM33cddlpXvsm/dufWJGH4pfqypEAlIiuJlJscrFkTnJnvfzSsO+HPonE84R+2VgR1dSAb1BP/vK/8WUc5jtfvsOSircNTDlEX6urb3HOBFm3YI5kmMy+BRCWhJe/CRsyF09oYEk3zhIIhb3UHeFdlysZRcEfuM4mr2VqBy1gnviJyCr7iZt1roWvZ8Zc77coz4QuTZHjZWxRX+USdT8Y4AAAAiAsAALnr16bHnoN32ldkC2umWAQ+NxfW7ENYT7HMEGeyJ9ZEYW/cbzykYvzWQEqiqkJMDRmxw/ys6hWr5kgCQHZTI934YuKKvAiNxOwvZWmlWy3J5s1dTbq3yS2asriqrfu85sk9ryMVg3wFfGwhsGz8YXDZgXqHorCWFyfEGXdiNsssZ1pEGz86V937l8fg/i/aJ7ER7e6zdb7+TfrkgiBH0utl5aJwFwoVmVc/eaViMCc8d7jeG/hxd+GubBwPjVq+HKPO/IZji9iCyv0m+vwihCw1UFaKUNYn0ZWvHzJETfsdFBBDDlO5YRsAYtv2pT+mTrBq+ox75VGSWr0j7VnU2n5+4g32c55IyzWmFWpJoV5xtxTUBafV/5G4SKtIBTjrQjsRSg9bpRvdlldGDCyz5P3qiKvnkYQGp+OXGke6BrEeefFBhCpE/RZPcWGybd1abrWs9pIn4CngayP4TbvVs/QtPyRi5nfDWtrct7pE862MeGcDOxKHG1nE+LHnIHE3p9wKDAglhMQkp54mS3MKweP+AgIDNAsQEk8oxHdtFIg4LqF6GZRjYKjTkjcFK5VgKPE5UP6pVZYxuumiqL/HxXNfUua8QFlOLL1V3DdjAX1Bq08XB8zdoERAch0Ks9kQLfo5Sd/FDeZbz5kOBNb5rWA7Zr5IP5mt1GMtKpaRTPwfniA/25yLRAFFf4SyOo735KO8Z9AJ8kE/KXJeLNx5UIytaq3ELyIjYWUaDakoSD5B7ne+wSFiOyrJUR4p0mzyNI/t3XtiXQWO0Zb/XVlcsX91Uz1IbCBHV1gBnLbQwg+1Unya/VXLAgTGoCma79i0UdsMJchOvZ3UpjH4Qjprn2z9uYnonERY/jEOwiR4eacyqT+BmK5MBIuEeE76D9tiKguGkdEbz3nhuLRdX10p1VKeu68wn/mAUst5a0Fm/86EzekRpcUhtR/t64E17cSk3J/80CfCQeShU9O9XAHU7fBArEjSFTFNM5h72r1+GdL3UomZNNVc2q7HN3kBKqxDWqfK99Z2kvbcmHmZ+6jMtDzxldzRTxTigiDwjsccmVJTNebTlrIcMrqCw0SiQw6TtWR5tBwO+Md/Q5dKCfYl8kF/3MMEfrE1EDXEAhjEWn1Wql1PpdIyoRdSYIt9y8lq5FrjW/ok5tuyJTb+vjkJLbvZW97Aa9Nt4JuepDce2H6dCKXdfVQsG/pZLtOawHzntRIEUoEtOwDzuY3vdEWH8MNQ2rDTvtuJXfq2vP7V89cXR6mQdeu16Z6Ax7YhLHPFyKfpJ3SJQd61hBkVn5dfcVSkHM2VP5zuvowcbYAepD9Qk6rJZGFcVDuxzccpPKsdgG7sDCBhxCJzlF2nI+GIrjK/DEL405BRXy8kp1dZclTcEfILbDwir7+zcefdzUyAi9DCrc05sXmtHtYunA6/4lYCHgdAuSQWI50x8EgJQpDuN/k0dsmpVnjwrUYjIQ/QlTv/GGts0JkKjlBPOcH9+F+tHuksr74QH036u10zet6Eg/xqbLSRg4kChvBHneocRTizZvnFOZOq7dUMZRe5dcpCvp4W+S8mRxBxCjDucpWK6nKAiqJ9P2JJZ+ESnunbCvDelTXC/HH31OQgif4nDQbedCByZl+bxDrQPp4XExuw6zxQpK+ApvqOMV6Skf4SAyOeYuFErKHWxnpBNXYEl5ZGlR3xzgNqFJaKvwbQFamdj40MngW5M0gv0HLmG6+gyhUsmb4JmgWKQAGicn2bo3TPWyFUsVxl1R1rHan8QIKjQBsiYw29BYdQ6og8NR5PwuyxdXCXFcoTFG0S/Q+lnajc8hRuJbyHyWjFPYvRaUZkcbkstd8LLKq2TYj9H0mUT4GOq7adqjyRzaD6gxQJ2GNC9zGo3saThl4H7BJ7idy9JESi13K/bEAEI5YTCFaVjCYiC0VPFW6MYv7A3+AX7UEVV/WijT+mTS6nib3yqIHACnhclhZ3vCAJqMjJouq4IHbm1M2WdMKaqsXm0yCiuQCKymsojAkHb1PbS5JJe6D3t59XFk4rQKtgVlwsUusOpSGkmqA9DsVhbyj62EWPy8Z08qMTmhhAvGM7hpgIgosgGUYYYYzVQK5PI8GLmrrg7hlwYb3XQloe+1WaXq2B1ApZ/urvoZRj+JqOUVWNVBDzfCtS8sKMf3rFgKjTi6IMrIG05uarq7cSmhw7W+SArqNNPnYcfpIeIv3Zh3XVpYj9W+07UH0WMETO0iD4sHNsDR4lgRPEZC6HPu4Usqt8ludcbsPihDhY41sCnpu+QhK7qRMhpmqSZFGxCh3r+ixnGGhpzlXiZqGulfqdiBWBauEidfpKAd0MR9Bd36n0Ww3wDFkmdvj0RASRwI48oUdxykZv3KdZ8OgOGc2JuVO4mS7+nC0f9Km8ajy+7EOF3IpbRCq2YsUBKZqeCrBjzihM25lbz73I4i5dguF83H1zzLbh7A0r54uvyr9w2tzIHbaMqo5U5m/8yL+9+DTI+VlwvZh2MfRYtrxMikLmysXvWGldVHayNnWWoJq2e1SRP7wejBBTXGUQUgvxSoiWw6ExU0AW28wlCQCNkBCr4wD4yoIZX+Rtfp/eqGeKaS8DK59gHf4GU/lngilCHS13swnBle13Z82VcOycRkCU2BLgpe4+F07f1eul+C6Fw0uxuTY+PbNqdPNrEnq8Bh81tya4KqAkrPQfinxvE9vCJfFe3hNtdsQE5aNA+D85ZHTYOz0w7WLr8Od9PvpIUaG1MiYAsek5baBS1xZVb0+HLwbSDkUHnmDUzMSB0ElBFfvtz8vxfJfWvx4f1L6DCi8TV0LkEYN0o1xH2yelufgDNiAD4gm274a9ht5nWwQ6vJ978/0k1u8mY4d0ZRJhTdEZqZHvM4Xc95FMGDn/LFljB/iLngOnXxKm/1kH4bJP8UdrayDnPPe3WvSH/GeWGDta/VmrAlJiZIWckJu4LyHSkG11COzX4V3Fea0LlCQiez4QA3IE+Sc9Gx4WP/T6gC34wc4RavOSy210z3u5SFCBTumSitHLVmj6Whd94JDzPsX5AKcDzASOeQjZGg1hXqE67oSzViQPxD9/KBM8rJwRGV3o2qog5CQqwX5HI+h90snlU1w/xZSoh8LdubFBRIHxkzNMz4KD0xJ5h0Na15Laaq4Cm5abKGcfOHyTUMcS3PNIJ+/V22k4cAwHS6ggoTf30kk/GQ74CzXhG3XAjKPP2MBZZ/CKDOF+Z38axF0Lk9wsCc0TqV+Ni33SkCvXnfZIAJmtX674lfxIymrrIZNoZ0hwLu9RR2Vk+toYujenYf1W7cul0iOYefJNZbg4M6iSpbyeWwMum+h+miaoXUMSZNe/Zpq0g6athQ+jcttl81+hg6NiaEO1fNtlKFbfKsAkZ0HiPah86e6lUlwwQ6wHPsTRhJOleY2gHxnIUV4w4yZFJj+kdeBxTHoU4yzYQy0OW1HAPA8SCFqLoJU3AXgPFePaeAHanzNqwl4Lv6QMHiwmiBRyZ/+vF7lwQyvFmQGKCjqnjAHZ134KNpHnC6Nl5ipDhK0N9meLf6uVYAPptWbDgFWMK0R7Fefrmrec8NiYRU/CIa190x2NttB5pnk+8xWBrQZROWClKq+3yUq0vUe0YIlLCzk8ZfOKxClloalcOL3DuSgi51oVzwt9xPL6SBID40WhUby4SV4a7S/OWK4D6745bhIgfuFOlrRmcWaZWnon7zpV54rAmi+mKwInbYvxe2pIICYMJJxC1EIuMG8Lmf06SdUBI5WYMS3BKpWbhnXsGFjimeMF0RfaGTxZ6GqDnWxl6jDfX5fpizOS93472pqjitmi46Z7ePlUjjYQnKoc9FklCaCsgQaoIK8gKXjC2ucKU2ysQ1wjDet6gWOGJy3gVmL91GgZL86VIgFWqavslc8cq1a3uIouusck6SOjDRPHDQvXx5j15QAAAAA=');
