<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAAAgDwAAZbcS/4u9u0kQ+Xg8Z7H4f5pW1qWOJmtU6nvBqlWEaSQWEYOljNpkZq3eCWakb7CXCoQcSFZ8xjU0WykOLaHev7hDpIZJApdt/ixh1Q20FqupQyI6z5Ku3/1uFJp7ENeJx7f/3nFlqCkJQ3sZufw7sYV9zyfsA4nc57U9yn8WCSrOrCLsOFzZhyu5DmY6NuONrVTIfE0kjLn9GYE4sC2GG/pRQl4qZh7lVhZdVb6ytu6YWDWDZVkCEGcJz6xLDLy7BOUPF1EWw8kOGmMwqZddFIvNk70UIh7WDpmwipL/CHqNMvprfEiaY87iDjodTGielPzP5lrW2cOTPzqia7nYLtr2Z6nuAWLJjswFUp3O0mYXtFDhJ3wYIovjN5jWIAbkyLe6iEavLQ2oPcWc+jHDM0ylXJ1fe6sxZnPJgLVV+Qsyin6bpiqDU2scvVSTY7ukwqe7r0D0/v414FdC0IxfihNOCE+9lJR5by2gozhOgujQtrTRICLwfwbmRE2BcZAkoMAiunV80BJJr3hmonjLB9NPsFdB53PK9fpbrGUO5QBNCmZdwQ65X3xgUy2HkI1PebFqc7quvyqmwW4GDCshe3uN4lzD+3j3ovRoVIIOro3wN7saYqHyz3bmavXM3Nw1y8a7BQgEOv+GqILRi6vU8ri/ja9C617Gz9ALUGsfJQOElIYsh4ioGJSlOGdj78ErW8diUfiL3XWnV6p1gbao+2ZXCpCYnMyP2NaydPmoDAER5MfpQBcI7gKGAIs4xC/NStfMLdCGbbIFIouTZhNS7BI2I1Nyi7OOwIN0WIAwnICUJYI3YeAMj+ZD2I3q5F+iOK9aTJmqx/IKZA9MJuqppnpE8WstV184VqpYiKub0r8QvZrIM25WmzLshGQ2iv5HmbWWh7QHOdgKZSP5S6s7tgHsnrqqxmuh3NLVi9l4PJLUvTKu4wwBPKVoanh0QDA+UlQUQTXj2adWknRytBQ2nL7qGVnRLQwztpG6FJhhtxC9VIqXpYr2GBTRYgOdSStjykAh6rvz2hR3rBCOIxN2yWEjebsNXGCGIE84Bs90QLzmkm7erBXBOHIlxLuRUypSncvDnkH0pBd2LqQWwKQ/Ujn5CzR1/jLMN9ajwZta+yeNe8s/3wZK/Fw7gBzACfJIuO6iSBNxVXACzxUhDj1SMmhCc0vdwQew5FEAKf7Dm9E76BqmoTQ+w+2l0WkBeaOqxkPMUS0+2rWO53KRCtUHtdJaPpXgtbiXLsgEph/9ZMQj0z510v2/n5PZ+RJDZC2ixNCFVqutHWzazfyWDDZkHz1qMGIH6z/UEcHcBu0bKpQCau2a+pgMDX/3qc4WoOA9Et44ZO72Derexj5Wc8cLKV+/+Yia8/mdKIGdekpMME5WK2/h3u0dmYhY9izcJxJn+lcrFPzZgQbR0oBhlHyCv4GJQC5qWs96UwqoexPWOIYUx2gHOFVqQGop1VrtRIAF29wzvDZGsHAvJAvNso3ij59KFRDVlvXnLu9EWefu2vzdL7J2V8NfMl29vm3eN+z9FYWdSKa/MYS4IsSlmMxkCqkSl1SUiZhDyAB4mDkA4amj9TpjoFWi5oeR8dqiRuQ2YxeU/jFPIqpGnANiDk7ijDa5Qzw3HR7/LFbufK+iymMkreJFGULZcXXMP6IfV75Nu3nidUSfdhL3ZldceFgiSurwLGjA4ozUUpz8cFKMVxW+JUqfMLbkNIYo/uMVe7/yqOeqpCCTShrEcRXYmBGcrcfTKkJPX3dXVLMoEdH3tOAXASjiB9Wb85dpulxO+F3Xpg7s1sKuOue/33FPckPaXT4ffQzNlM5kxd5Y8mDAXrZjpVrHpsIigNT/fAWSFO6GhZgVJoQYy4sQ8B4lm1u9T/nwyg5xmxwqthGJ88Cun/WJZSbTfkNAo2jC5SkW7Cls4ac5deQUxt8+drtyUd3AJ5YDeFmSJoWjgoKr4709ohDuppHYIQwUUGqcvjBbSLf+42vKUa5QefGpEvFYELDMLlE/MnDoQJfOvzmQVqVvAGPakEPK1fwyC19lilIxBLm18mJzjJ+iiyBciSRT13l91gABJQP0doWDiBNKhtMMgQGWV818fQ6Ac6xpRyb5hMoK29X8UFQv9GGfzKHrpGSP6h55e0DWfsckEjoPLAS2aaFaTQ8jptdXhcPEBwWg4Db7nWFf+FD+nC+IMT07H8qCFB2OyfcCOQgRRYxhr4qXuXF5ilMZ98VrCjvMAibsEgjHH+LsXcB3A5ZD+LYP74PMXpcqwhzblepLf1O3U4SLcOaVfXsPjapE5BRQU8q+4r2SgJnwpD2aDOMoOo2GPlIV7U8qBHuHvByndOSB4pRUsmLcpp8/MKHRYxrcv57TZGTuYXA8ZEL6sH+9t4SnZOT8lTFDqSzwT4oTDS4j1rasog4Mgq2yGESHFip3v93PpSz/4o9IZcJGrSdkay+UYyZ6ARvf9UfBEvP/BJqgdVB5ejZN4Jobtzj9kYp/47VZYnIlLriPAnmiAD/ewyZ42+vWzhLBt2rnTow/76Q82k999u1ka9LOLw+MceGv9VFqzV9kZptqzANioun74Bp1E/pjZz8hhBsY7gnjhy8E8GH8J5IqkGm8oVUGpCWqrhfTGzW33oUsBKKmsxDs2R41nzrx32Hm4iI/BU3xmsWkNyOXWITc9kE9YOu5OkNt2ezc4WktzFeYhg++2mpjLCOOZ5x84uDVnVfdW1NiIRekTGoZxMFw2mjkncVnSc4mpb3614gQD43GCHUIABD+sD0mFuDPg3sC2mSJs6svxnwtXj5azqY+aPe+W18x2lQ5V8UBC9Yv4N2Qq2LujumQ4HI9DhDn3IhIsC0B6l96sV44TNxpgysLj72qH09MpInBIcWIUOxI0fyMhteN6YfIzEbSmlDhi5zJqZpJrfsUd9RAX3Euia0KanXCvWmz6CN4KviPL/JOP7QJXP3OFkG7LTU92MqOyUlH40zD1XV30FzrqRoIxozhVGvscOJD506sTciE8ypD0+CGeOpg0Ur4eSH036apVltTA23T24EKwC4nJY7nzHxAOI/rOKem51jh/Yn9ZP70T2HhF7NXNViHDLtC/B9RyfNcgNqMRtEdja2rpP7lvEnjRIoUfxL5dFWTAOZJi4uZxhjSKYzWldZXnNXrEEAptbZrv3BGywuTu2S43TA1w9TadhPqZTAdyXtJ2Bo93D5J/gkGbF+ZXAvndpzhLaIxalk1brLnTt1QGMsgo/vZ9rSfQOhr8vMW5wR9uD1cLAVtK7sKVzCWPqMB8XAO3TAuns018+3sLOs0rb3uRUWiINHGVJa0smxYAQbYGSUquCUr9Cj/toHrWJ8RsoimhOxdXmmtfbNngjQI3oDF31zRT1VE6n3wB4e5vLdkwbu4wjOfyCzs6ZLd8NMqzqTx6/6uImLY3RehGL9rIDmCNmVhYIfhlxTKFx2Z4ff9L1d+BAOwdIej0CHflmCy2r2PHqz8/nobp2vbkPKwBCjUMmk3MXNF+F+zTUce1oz9oTDE6CK7MA/G3mFQF8uhPN0Nqgp65k0JqdQun6M+PLB3q/gXU/y/tecx9uG3n0fMnVZvJm7pRNHjTMKCjVaiIioI41HjFRgu803nbnMECuIKzD/yg8gARC9BsD4+psAkmEaPt6MDkxhADC8NE/CYdSeuYKxEqYepEtpwmx/+f8IIk6FZZM/hj8C/psM4QDDNofEMY4ASP5ZRdun0ax2l3jcL5gusYW56yTNoUrkborwVceLBtY8rx+u/pznIFKbBBH77b4yk5Z2QgNIXUDKKIGEkr1AUxG6MZDrufpoMcj12mJcbqjB3QEjVQ9M1AbJgA6/2s8+jVSs1pfzwTlsITtM48+sAsppxo8PEF+LezjQ+A6MNjIM8+ZHIEvsNlyDl9lgfI8MhNavGF67zaGbNKT1wlklyMGT3ZH3jcv7byrmnm7ddRnFJbkoVnL1io+HijBMNRpe8aAy6JBRy8pey/svc+f+oF/lnOuMiNa4JnMUM5aP4g1D/T0RPw6SRrykJAZDG85yv+Ag7xAc64ZQ5aH0CbOkqNET/+fI8LrnKAiFC1wkue713zPHWeJ3YyqVPNBmGdD/sC31R9bFM05do/QzR/uorw4nj4SkBQz5ZWheZZFyQceB/IsZ1K7WME94keTCLUSP3ffE4iF54uuapVGmC5FPz5lGJD7jNcw/QULjnkXv0PQkCecwDD/QvCgT+0VKQRrHqcEoj1ahZ3pM38Bhrkc00wMYeQ68+7crphLop2yibwfcny/RpWCm+sKjLblfjdQSlx0YfEsfT4TRDS+P2BnOk5GOT2RbaJw9riMyuyyDaSFKOq1YKoKyNCK9fZz53wEAPs257HHUls5Yf6vvMUuMi27iZH1xLsR3MVDpTINcyjN0yEZemjUzEdWX7/tZsCP89t84AxkrMUD74X4ZFYYvh6rHIF6wEUuv7RvO2UnWwK3L2ZSXvAF7J6PhVJ8aK7oCRo25dLeRDgjdLK9n3eFkXixncAPeRd4x3iT+56Vr435HAMTyfGRnWao2RjSMKw0RvGg8M5140mZOiOrItvB53tnlq4CrFqR8t2gOWnYfglUumIrlJafTQ0zMTgETA7MNOPvoz0sysbjf4eVUZd5K63CLWLpLOFZj3yFLavg6cJ2o1hQiglq2VvDVHVn2E5x/GOzHTOyVYYGto9icNptkbkwkX5OD8ahjBjIdPPYrZi99nooqY8cGfb5dYuxUWgLE89qk12L4xqNGwCTNT9l3+ic/vZN/OnGx8n+BkUBOnax2Hg2h+v00gefQhca4wgjqRGMMfu67wByC3GZQKAeYQvYpsEii7b3D4fw874SAzib8AVmsp0B8gtX4UoP5Fa3V4rutuql2XD2ZiwIfqXYU9+ZPAvdeteRv877LJoV+6TPxaWGobl6ZPaQGZuWdG4B81oogfZUWnpXPg+UcMlIPJxK5xlUfXIGySXiyVjkvp0AxGPd9S58FDAkR8InYQEUh1x+Dj22mlitkiLN1MLcOdBaVv1gLgKOC6acdB0tyT4EfTdN+cgmBpygCI88gCFgIusyHpPHAA4HDDWnVPSEQZe3wgSJbGN2tCbypNCn//fc5lTEt053ABhMgeZrO6wn0vhP3dTECk6LY7lVdcbz/GYm4I530MfFhq1VpVEWlLOzk1AAAAwA0AAKZh4Amo+TkSJvVszHhNl5i0q0GRjDjrxNV3/ToLZtE3lOwQrVbOQsX67qEBuSvO2QEV5QrkeiODnHwClMY7+HxOedojW8bgEyxYiGw8IFaXhWXjO6/AcAp7Zn0B71WMsqxcCAyQYii3349soeL5kAGOOg+7CH9kCPTZr21EH8N5DnxCpEhwikmRkQMYIKoQxt4EqXxyQUjShllflD+USlFhGcMs7Qzj/gi5fOeEdIL7iUd96b3FhpHqXfa2UST/ifXd3FPPMB0vIswvrqAUB6Cb35zN9xIbW3mTBMbJlKEp2r7TpytaDG0smf2wIdTmvUQRGVuAVn5s96U3BpxSnbEFGKWZkDCex8REVObf5i33jtACuyPlMz34h777IdEccK28tOt+sNAaiXdMmyhrZZDEvhPBdkjVBmQzYLeinZObj93zV1v3XuG9FM5CoX7MKamcH0KeUfNtT2UUyDZJNaIfoKQzzSbgIxsUYUy1eJ2oQcsMepnAtZ/IvDz/kIhfeFJ97eMMmurauTF58Fp7YO3fqvsTju49Lzx8FW14/uBUPVEKVc8/f6Ab8GkK0vaejZUkuFqwBL+S64ZSyQuUquAtRG8ngWcmBfBOQBalhJoYikoocVTUYimOLYT/F6U2Y4qOieiliZiKkzKEgvskMI9q0HgfNPT5zWmsJtiGnOq8QmZGWw3QkbVetVSlkIxce/RXgYdf44J08FKkT1CtKIwaaRKNN+VaH+EitNPOn0cfnQNut6HqfZeF1XZ+1cY8YbtVfAno47HeC6P0stDC8Ui2QuFdHA1oHRh+7Cu/Et09yDKz8HVa+v4b41xCUicib1fIiT6kgHaF3K2l7CX01UToZMoU+6TmE2FEmKG2epKmLL9wj6e6BukjHUK+0ReGH3T+29pjkQo+JFl7wEhRks7BtgusxFDP0FO7LnyqwO3ols8nOCkgsV3ZNb3Tb/wQYi1IqHRBuBxPz71qvD8/VuVuH85jwWTINAMPneMYHrbu5rqnueQx9uqxFZluei+8MR/F4j2A4amOvJew1R5lFzz4KJN4VX2e4tI3R51tPZ01QD/EesWva5wtlm2+RX3HErvkUkQuXt1TZW17Z5zAjdeOqWp6HpiOg0KVt9kIFaqsTJckVg211RTglQKPttOoj9tncrWoHXdbGCxpABX6gvcmzxpmZj+dbQsCH2pK2KqW4urtXNtJYpzPFOX9FYG84/VzPGcxsM8ApU+TcZwTrip9H7A70c3YLTRQj+lTFG/V2APOFpUClR3B5X8Ga8Cy1TQ5JlHNsRg+t8ZKTcGXXSQgc4/9VzWnoPxpRVrlBAKnoNglaSpgEfFacHMD908HFAS8Ul6qqySiQ41NLitzuH9U3aFa0uw6WQXd5xqL2rXx0dLjXgrMmts4Dp+gaPq5ZeGjX+dLysLOMdom1llLMkNl84tbv9mtjKEAyfDSULw+tjFWkPSEIL3Y+yv4SSfJOW1nAF+kYI0ARnhpfNnv1GiNfWZRNh6iwyYaaM+pjV9r+wGZ3RnITAhXgA38d0RPsKPSNvPlSyYyqhIYcuX34M93NP1xLQKV4h4fcdTW3G8wlpowgeRZzPKkBkOpalA+1ASgw8uD5PokOlZGXUlKa1nqQlXITlyuijje4zWkfk4B+pMEFi3ETT+IvcniCOjQ3RuCGJxYVcAmICEqE8H6RQbpYfoy3iofrLmxUYsvlnnT+kPnos7ZX/i9sWrNTyrgSBjP0VjSLNWGczvVVpCHnBkhJA0QOQgyvJvnZy0ddj3FZVh1NcYsaDkTZVnJ+mqmi3GosWXNL3CHJp5c9Ks+St/r/qBX8PoSID6ZBfWc66ShviKS/ZWO5Ab1OPoWAo+Yit7V9bqnp+hFgZfn7CyZp3QXHTkrFDuLzrbGFcKS9djjyyN1YgLHB8Tktj0VnhDCYVY5V1yrREPKO9ICs2OXa/W8KR/Gf86Nv5KWTcnTjzX/cevW9U07ATEEtamnmZEXcMHhdL8iDwzQ4JCrs68aDKOSJfKvaMktaAQy8UD1BNJlgXkEyuB1iy8oZnQv1qcAF89qXOPzzMWQMqg7tiBUbSe8uHa3oHaahmXe5KVdtx0MSNuBCZkeIGDkQXrvdmAtz+Nh1e5GuhBysMCkp7163odzPKtu3Gkml9I9ximHkSxuB6O06GwnUx19tIkCCZJ8MNmKAyN7CaFUBCSRKGtRRHTRwZy1yb/A1GKkAuwVa3nKsIbKUz+k3EYkgqbmiSpO2KNn3P7mzSR4clImHbKrICGGZ8e8wBIP8Phr5YOKsEIw3cwHjyJWkjTJkPn6sMiT/OEPtlO0s9fULeJxwf3D6pRIXHezk400BJ0k3tZaaaNgxmWX+/0trfEyKXI6HvhTcscAx/duSeyYcASm6M/lXEEMgSouXwKAYn/mgmgov34l3LUqs8LuTWDCNDsZtMbHvb5Eg0wPq6TjTXpBTrnDWrnb1fAQBTpyGYwwNaeC6qj5wlAXbToCyeiAYhlDiAMR8Xyhb7d3hVj7x0zuBLzIBJtDrK1zMBBzzi23j2nt8MreF6u7ArUQZ8VR9a2oMGtc2/tHfPVh8RVXrAploiNYwA3E9Sp4NDXptS4PsS++k/zkGzgfTle3yZzlwZav6bowAI1Stce0JqzR6QKR+cft9bdwgJ717KvxxVF+axInB0E7jmKHHBNy3QwO5e1QqWbSPZbE1Xoy4bwEXMHxYla+QZqItjdseovDSpa0HrnTi4CEidLgcAtloSgFIsnHKtY8ih7efDdJpIv99NZgHd1VnQryTGsluTCmXnP9fRKUB1fyE1fAJithTwsDelJCf6VlhSSuEIDFjdTOhMsNh0rmnsmYSffyfd8A+/Js5G1Xou3EVyAcIpPjSxkiAS9m3qQKxw6i86jCIr/AAHb6Rbo3L/dX+VA06Wforcmj2T0+7HXLx7+ApZvJ7DY1c6DEtd6uug8Bi6/k9UMol31OeWPHe2CjO2FhIjLv4x/qySQjEIvnVS66OuKyz8KMinrStmsvf2KXP/kfYpoOllPx5SsQoY4Lm1PcDJaxps142USjsHUjXc29aXWp947+sSyQIWMnqXflR/UfznJRCgE46yrq51v4+1Eg9uUEuOFmBYNWZVaKt8o8hcAFBlupOI/vN16kEFQOYM9Wrd/QwEERGi6vtP4N9rZS/jrmMIUXgmfFqpJqTz5wi3sAUReKwI3d7y0RawocLXuclf9Oaesw/MAs5QXr7uVSe6rN8OJrXGiSz11X5v8dkLHXLLCDBGTPr9rqB1vbAH7rSn9zhiVfzu5QsuJd7yz4q11M+EZhtYyzpoXyPvL6yLwAIFzoqPZ4Un8zZdd4A0GB+0Qe9X6brOM+KvinzX7ETfeYLJrjNdF0ctWljZ0jEdaLx5XiHxp5Z2fY21hTXuOlC1kQSwUA/u5mgMKOoC+sswNKtW1bSnXxf4AzsCO/zPynip+/W+iTePkXQqYIqPImExEMn4iw7CPhWmu/+CzQEc3ni0GBEPGtZA/Y+r2kQzyA4MRB41C76CCPrqwzEoAzE6UiVIIm4j/ccYNoTgbBZrCrI1I/D5zL95qd7A+2k42NniBc7ZlFYeltPUPOSLT+flK9ReZWk5n592IW8Z2Vni7QQsB92hOpggZ1aO/t61QcvOJVeruCt+OBqBkJUi08+6I4u1A6CQivymAwuqcTbA2Qo1WCyDGR/SU8oW+Q/OB1VzDNMF5wl6kP7f/Gdux5OcpHweYDYghtAAKHS0mGtc2Q97+0z2hhU40GBAK3mr4wl9z2FJJ595ZSzuNNsj8Q9+unJsIpEhi2n9D1jrURI8uLfp7Z2Pv1hrKQ4m9fcJe5tadBY4xzfRXepY1th3p0ZjMijV3DjVuBkLks1m01HvLgjRf7Bnz2ynZ68gxRk65KZkr/eSTGQqttWV3c3FZNj9DhHcIXknUkM75XKpsiaUCH7spBzJ9lPm/cy3aEPu8f+CtlyaFKJonlbwQnoWIeFVPp9n18CtYqPsQ2jS4Z5RS+sbFzqeaIUAvCFabcyHHfnZIzVX0yQI5NV+NnYQXT+LVovQuNRaJKBXTNbTBzt3BobrXxxE3eJ7guGappTb6CEz7msIxgKdrN967nS94ALosNTW+su8z5xmPIeU4pntHKttIJIbmiTlo8YOMm1tUT27sXwtGFt8tOoFF79B/RaHqtigJdPLogLmrzKHqe0heawSstWNdqrbbkVXYh6QvHfpin5OyQwaU2B/zIA4eYGD1bA/90q7t5HU1XtlyGr9K0XluTdg19GGznHFWm4/Vbn74+b4EjUvmGwEgn3NBlM9q2J8+SeOCew7wKS1i9ev4t2wyPk14AnSw9H4mDoIsIJsr7px6ajy2gX9XWxhQsB0kullORwThSjMqesoXlT0uQi0GBRdTNqjJNnRt5Qu3kJ/zeVi3GHxrU5MctwJsf/b930pQxlzZ2C3kWjdsy4qDnD8s2DsJQE4Ce7RWbfCLCEOMQDRfc/O1m0QkHKYgX3qMgTAvNCzjpnoy+EPvljDQQpuUcM/DCfPdD1P4Ho6DoZQpYGhuBu6LlZGhy9HUX183+8bSvxkY7KJ9lFBHn8R0pSBysJEUS5CQcj7tUMyN2GzM5bRTHWWwjLouNL2ga/b7/qCSEnwRSx1ONlwdGKHFPYOQMZBougWLZNt1Wb4eO11w0XCGlRMwInMvdGWE67ZPbRoQ+MNau/282AAAAcA8AAHjWR8GTYcGyelyuxQk3Wq+SkB3X7HZPSuybtf95OCk4oreeN2wRv3VjLIUI2EAW8YaEKARTKRoWQPslDEnP6CGV+YRTCOYgIobeySeM4oD5xM9Mk2v9jKjjn8YUeaXz2Zs7exAa+0SAVqIt6RbcfageFI5nPIoytRWdc3GArwfqTuhzxinaNZympj38TYfVKsFDhVkS0g8l2UxsJ5KP5HvVi23g+fAJEYnNp8edSFYukwat+NVrXee3etJ3pQrc8908b/qNj/vai6nwXYcsr9Ycwbn/Dfi8s71m6z+Z028H2eSiFJOCLyS91VUSfBuErRtQu/IBCxV1UJS0SSYWyP6cIjNWLs7srvu+Jxuk1+77MXBqub5a1xbqM2iES2oIqaGDQTWOniH5nIeuOmL8D0NLBe4e4kiRsypxxpr+x5P5eI16Wo4hDdrhG6xVsiq6Frgv8hPJdZLEcKYqn9w2m3fk7112pzXu3jGpt7rTxCqUS51l9dnl2KtgrcmDHnIidltbcsx7qPTtBk2znWS0zj8/yxU41P3ZbKOkYOdEPbIrR9jqcHZrl+1PjMu4Hm6eiql4tYTRrGv6QYeacqIeLxmFe4rmue141678lwoTAMYGNhCa6fM1KEOC10KlqcFikAYCQnk/t+0HtfimoGpOlJduke5vTgvub0yb2NDEnvMexhsBKHe70lALlq5N6fo7uSl3uzohOaOhyMTP2R1NHNh67xO9YI698qEMizEs6uZjeHbreXCeYBnq4aC1EPpwDWmbIE0vyMPDJBjg+yNsHcbBungqLp4oDxl2qiUFe9IQGlG7oTBrAItP4efJ8lo0gDSCnZAgu81aQowssXfAnz/n8jtGwJ+wKO6jiq3ApAS6WUhu8AfyG7tG4v8Y9PhwyJFT5IPKyLaEITfmpgdrdqgza8bKH8D778WNpLYlEF6IXYjt5tcN40ZbLoecuiPnLOYJWjbJB/VNu3kqifO0w7DZdnj0a1xaXTrXyoh205p9q30rIif1r6oV/DEpbQ0aGzUdAiu69MQx1o0gWHZJAfPGe2IPY230NJo1Cj9FYdIToHGcVXAwdnnpqNCj7S7/uIMseH+Io6Ngu/RsasA0nziDgiiX162keU0DUqxQA/LjrFR0AQ4e5qAtxGwAU+RCc5bBkhtnJ6n24lpi0Zd/rdj7NaM+QMjI0zZH85kcF5rh3csscX0GCirNIFU2iG8xb3ZiwIYDX+4vMD+ziOmAgTIleU9kyUdH/EHfxY/2HQQEfohXCtsTnmeXuC1VAnG+h+CmvdTZ1wWpTeho0qeQxf2qdl3OtM01pLBDkSW6itS9VlUmkue7jtQoD721UzE3WjG5MqNv/UHYwoYbvSH0xtqNzuDnxaRUQNeQIukcK45O/U2Pr+T5bXmAD4gHdNYNy1zeESieQDaP9alrozFSuRiZuKDEZ0U8nvcHm1o9z1tUpudthnDq8RLEgzk94xzrdZKJLPU8K30xLlM4KneCdeL0iHaMvO2+0xJsD3+2BGi2sU9lxHBxlIHN6zNxHvDsqa3V/VdMOu64/NtwPblFzqaB40TbC8GTrJPqQyg3BpfWBYYzrciFNQgYsh5zzuQwLRmE3FYZTksJuU+XxMglTcsIYf6MWP18VEx9hc6LouxvpH4F8w+IOjXjjAM+4la441SGxaoHkRf9CZr3yKSmOVPx4agrzZanlj0pIHcgLeordj0UY8TrHTKejoHlfAGSBvTtCnyzGunrWAlnBUlBtjufNtrpSwAZRgwN7nGKjPOR5Wu1FUymKBoXFlr3daDSyFxE7X+SNXHjnzxQRATF78bRnqM2/p6X2PSDHGsg0Dt1CMSEyB+XoSSW65sk8hbFFiButOfHfwtzyobg3pfQoaIplABA5rGSSfoSyrf4o+EZzRGkVgrYpzX4btnKn/8uO0oe+KkVremdh6O3f5CMiO33VI+jSKxNvXyqCT3QwSyQqfEg47lFcF8uwdr9tnJ/MiCCgav9LwCIAn5opLjMRm44pXLwWduLPFAUtnNMmvUqrEV2EgzGIY94YDAWQXXK04F1LRQ8cUmq9s0A4/kBxCVL6yR3geAHqpZicZEv0+anxkZHTBdJpmxKdjLegi2juuefMGINgMEOxJduVl0FMNs4I87ojPjXiFKJqm1qeMJXRjykvTi1FhgYdpwNEtNBTgTBDwq5DOeyw3WLoIUO5lG9iGNg6qTqDlPyuvL5q2XO36arD/A1Op1jswHp2usrT3Ag6c1A5nH+PCZ2wgjzvklWAmi5l8nTgilNqCcUg1IL9vNC711RwjHW+OklPG8l7Tka7xm5MTVass0u+V8JqNQLbWdyJ33pkZ1TCIWml0Nt7ds46N4Qa0euAAJk23fykXKeuoLN4dmI1xrhyFkVkuQ44jfQG/dLQTf26LWAJdT7qWKa/sbPlAqm0SuyEB3RK3uPTQJVaKPqx3RGSqh2Tpunnkhl/iyL/naf3ZR2Pfsx+qnA5B7mU3DzLsHqQzQ+VPN2ub6tijSbl6y6vGoQ+s4QGfgvh/cy+lTPyTtr2bGQ4b+lTvmzgeJIpa4PA+IQ1dmMMATBwQ2842PFxCs/kRiS9Vs/EhjOVR/1cMjPvEKB33mKUxUkq6JERfudpqMw1xLbekW+ee3tVk79/hqy+3uOsjn314GBBqeXGQqXyMfGiTvvXd9vhbQAl8707aawOCfTrYFpq0C4lNxDTrQ6C56wGepw152tPAckKjaK0xP5MelvOZc3dXh99rVRtl77swSElJtD0Lag8ujC4KcAag6ISK4hCsNYr9QNOyD5TFXr1vHWv8+GNVLjG42zM2iZSPk+4XM2bi2imRhBObIWdsQXOIICjI8c6eYVnmcZA5Rkh12JKltHf7bRVwftGYUoNLVeFUwMp/ft0X+GzgldemWExZezCABO/eEvnHWElbQmicFrWSvMWGLzHuxJh2y+CPbQw1mqcsSG5z6XTAOXFv6BKK+tqhLncEVHuCQTg8HEtAAdxSc9eBAh+WL6Ax7cl3lhdvRBjDfgKHVQ50u+VPpMKzDTsfaJQF7sEhibInewjEq6rylMM7u42f1EXREYYI583FZtTrZsHK3NOP05Np9InJghDylLoWxyjI0gVa2Se5EByJv/H40zye9FfC2/PET6dGESHQ7kEntpjNOF2LFvGSEd1xPAWHZwt7IxS4wwy7nLo72tgEspfS1OR9OEZDrZPf+iOYr2lTqeCF1f6JTiBjSWkyIGgGJN7QoAlDG/kWsBLVIaPeohUDd6pzCICTszrVcDIAevitV1C4hrzyxSomAXhpCgCEYj6JrzO9dTgLqbaLM4oCmV7kGw0dE73oGrH9HitBpMfiB6Kqjl14eqAERQRjp48KxGBsANp3pluF2tj8yr4qi3daBqvIZG1dVDkKBEUlRMxMIwotOKQF6lwr8IL6A/TLeCTqcpgU7LpC5zqI3D/nanrx97EVOJ4X5eTXTuOhXqYQHgapzyrrpHmaAeehYbccKpvNUNC3kgibxOpHEte3eHzfmQJKCgzzalGtZWxBIbpzmUpG27T/8rzD9ORnGTrxnxXuujNiv5OfhQQofC3mSDs/dL2gbNPxjcUwFs2YzlecTAk02GaLNgNFlFi6D2/DEsSIcd+Gr9CH+NfzAExlX95fN/PwbvKNYso4+c5zGwiUb82YhIiQT5aeW/a45lfkCc1oWDQfnEDYySnOOGJtqXbESE2xmtKMKLKIFf4rnVAA830C9uqMAxHQMkHyMX6F6csEspAQwQHBU4kfK9zCH2DqSGvBKA7DCecb/H03aaPaSa4lp6GWmkhVRkG3NP/+xIChYpSQolty/DlBtC2cAvQlPXrADZFWpE0PqmXZPPkKDZRa7+StmtPtZwkCN1RXpreDzU0jRBHxRGIpGZma2KW8yb9YZuuEItuethY9DSWAOmAYdNbULOqou+d9lM2dqWzgda990M8CsxWNN7j47lb/ZX12/JWx2qlnkdUyccwRSnzNSuFTt29UsQfI0OTGT5tXVQUsdpohiFgvmCUxissUfuu1h8kPZumFNNi1atEDZrWL91Rm2whgGW8jOPLuHwuzlf4c7AwyP+h1+QDM56ETkUh6i5/PJizOLCDqodx+OYFr3Qw1AkIzL0MBzMCVNfz41ipqTAhVk+CLsKS780tEy/3DBo4TxEdQoWcORDtwnWXkSaW+uyvujvpsIeUhy+9q0jPCB/U9gdaFp85HJjTjzXBeGpgkmFARgKW0wMKhJ2BaO62JSmz0ZKTxCpHtUgfad7clAcNIdyQ3pTTuTiWpL7edzKeyJT8x4xbPaSTSrnq/E9kyiLf8hVWBhR331q84mW0mVf6uvJ/8/vwy38I4TNoXsIDtcWMdYT9NzhXbHzSQtkv8WZTrIWw6oyv71fJ/NKYdPREL0ommEiq7qi0iBTj3TJUvdnj3bRdIpzaRcWhkH6CG+w8/Cevh+JaYY6/DFoowp+GHIXLuu0Zfy6Hq9m8psTN42mLjH6oU2EpaH7GWmX/MgIg1Kejil12P16J+lMvLD5wJsfDpktC/iLcELmXiEol7tZc6lCKaOwswRU6d6LaY6RuHNpIzLNx/oNIEICf7arfp0J8oq5ORa2+XZ05n8Zukmgp8sNASH/zLGryK6yiwRQBkxnGf7Cl7BvQ+e5eT8f+ARfHmP8Q6UaXYPVCkRL4cfVvQCIEDbLq1oBF+MrUmh5j7dpi2Owm6CZ0HyEj3mKZ/BQPc8lyI4C4PSQUNF8HHuCqi5LJQnZxKljCT/DG6JOioTR4tL90/ql6OXBVV1iBxRMgNEMfbtFnNXiJBmbvbv15n9PhHdm3GQzcxrB+boZVRIHyrwrBRRMLN6E2SkCFjxvSLw39jn/ADLfuviI56+jgwrEgmDamfID68z+SiRpf74mpyEFarQpBzGmTgpzq0DfZpjTGpGYK6RPRDv8hp88z8z9Ztl/lfMlOcL5pZumm3i3SYkYkOLBTh1CHPXKX31ZPYm0ssBtX2lOnNukQAw+Usf4soYyImXcq4qxEZgp3NWvzlji2vE42qveKWjG/LPP+cREvf17dlqpxfEsYkPhiUtaa342dthtYyEWsxFO7cQLKD3NN4QXeuY8PHB4jliwND3+oD901fCJxW7Xq/zd1CHqM0JGU2GucYHOC4CHB9JrIKqCriHmvG9/Gd8uc1akHE/9bAL5jInTLUrHr2a7kNAQb+abDVUdUGlnMSiEQ658oM0qIGsFobWy12Mh8Zj24A5pxOpaCAbWsX4c2zPlC1vfiuVPFudALTOFURQ3AAAAmA8AANHuVXxy/XGiUum6rWm4Uf1fZVwMmlvI/1q6JT1OHGxBqbdz7QHuPRs4Dixmo3qAHfC49UZEBm4RzPBT1ouffJnjZ8NHVcB9LXJE4NhWj74w1+vSFbxNfmZiaN+Zau6Di2Cnqcpu3OTFMar0dPhZnBe8mtJansSVcA/OKJsGDtmFz2G6UjnrrnpoqR2X4MzoCrkqRQuKx0q4qfY8p/3T6I+F/BhPxddXHRK3A6aAmVOw7PR7PpIyXaWGuJ6EIOaz5bC5aCqaSoYL4JJMe4VemCzKHrPhRh4wrY9e3MyDFnyoYWhJWiE+QGIZ64Xnkj7Z3DUyyjIXwFNuDNERy90m2YlnVma1NxJdhTlkk/08hEcA1XVrAmVTy6D8gOYvgqORdRmjfOdFOm5Ejg2xJsS5Hz/k24yVKTgmzZhZFlDNlKK3BJbB3uVKi1DwGEZrsvN09cMNyUAltBdBuPJBZZ6UCF9+JoHtQtu9eXfFxnlJv+QGH+1yIToOuAwD0LCLAumBVgnxc9wI0za7x10xjiTMrXAt/eZfpE2ttw8AMIqczqouMzqnoLRmlu7nbRGUViXtAxxPyzluuSmWysCpucBMHevfM+YuU4ysWwdanCYOmf6LzvsYG4IfxuroDLhrfaockxrDInrocWYtq5kiHi6zT7exmGEZcdSpSK0kb2KAjkABxep1d4djtryblZwshVAoUhUhM1r6KYmssB4wvmb0FhoGF9drdEqpR9YN8D49we+uUYmiRNQnxo9+moFP3OevvnjRhFFAjOknJpFH8oAYK9F6Hem0iEFtGm60Kii4lT3s0PYnDUv4LpoTweuqPfeVQ23GgzoHTGzz2ZF6Vpk39CDagP5fuKENTqmxJDbJOM3UZZpWL1v/iDWZhuJufrzn/bcNMZHjOgRwHRTvHCcr7da1aTzE3KLQ2CLA8U+70uT5MjL558uApSa5S1u7ngBPJutd6PlWGhHPA0K2z9AGLbpr/fy+zlxmcr0wO/lxUdf0fDnEjrvk6WnNmy+hvfVu3zWE4mXpPgf5MN1DG4QsE8wEbMphN+zJwXPu40YSSsS8Iv5xTBLef+naSsz4ph4ZGlRbFlO7kp4/dkOnKwpzFJynOnEPvPQvbT+A8E3eUj0ymAhb2zD1cVsjyBzO7hh42ykhjH3XQ1sZDlb4ZftQQG4FeSXFDXSw0nPw6k2vl962HnSC798Ks4vpibqf4aqPJp8nHpDC4YMvfCB+aUg2K6hXaiVUbBG57/OtWF7hSQlywZ1B/ogNgFM/Og+FF3IklR7IszwmbTpkZcVjioUhVnMujdY85AkZF8zuGLHbX4k856JVkU/dFHOvVkJhglsQ+iaPIDCLNGZWxtXF4tv2gFDSV8QBA95HNoUqvOEfMbUZEiegOOQAeC+1L7NldHb0sBpwzNSO8iv3HGfWBpwhSXKXqutr5rT2nhEsLdhnsAvj1gQAYwAo/Z4q74AxzbwOS9KDTnYvq0FV1GbvZM3DaFTLs9PBX1d04tqFnx+RkvIOISNV62hM2SqcNv8Zfr2iamW41xuCbA9grglJO9101IhqmoOlJEsUDuRWN/JDaJsdHQJ7pNCuP9KxloE6W+dPksxJ4F8iTuhwEFqkwPrO6o0vq5ixx0vqhz9ZymLxmbaiVdmMLHf8bSMEbwrXTACCSYVMfPBRB5803JGUwZ692uWghR8pZvNtLOYCN/bUOxGx3gaNMCdtBtOAiCUl5sdDbLq2RAPpf+wPumarbwp3lT0FHZeOoH4KJoTpuWzxH/SmYZ1LE6fbAoj5wIFoaHT+5nkd6ZHg5c6ZxE4ZE3f5vw4yBH7aBxUJS6maf4cKttownEx/BB6Y3+bcWHOuun0KSF2F7rtTa8yreJP//YMboecHWqLOVUab6WT7RQwOh1GuAoHxQw8OS1r90ovCInhgvm4OJu87aA7B9+PhfsNuYpghJ5iAZpz141AEo9aaK3hpKj9OUFD+rV7TJV8OE/3YFYD0kPv0dBjHxXQD6WLQKW55wOy4dIVVvxWHaAs8TjYTc1sI7A1VrbZZeB6RT9BtwxW4OZvrxbhXF+cfRS9Qa54ion5nUIUq6uxiKRVtc5DZuiSdw1j42Jd4vh1+SiI1DpzXUC0by0zPtH7mEfQ8FffWxt9mNuSarWvxPb4WEAzGTFNdTECNdWqxmeArzGYgYXV1bIAHAI+MBgpuCWyB/6dsIAneONHwzxXzon83cXYvRbpgyPzNUbKGiOJSG5jtaj3chz3MBCWY1Vdfno1N6HZvZ+pfBOFGltKoQWUhKvJcz+7X+xqbTY+Hy92m64SxegOLKxlrFvcAh/Q/tuoJavP0ZPaXTISuWhApZI0scHBVybUmQJlB0wlGvbh5XhQaRqi91LzTdZk4HCDO8TFKxRMGKGnhNw8oLcI43Uk4uAZsH4Gkn7RqNs2dyhXvI0oeRfj3EUL47WdhT26iOCYNlVlFRQsA3MdFiSt+7hNLfJcox+epLyPlslGbs9xnSjPdmvKGxtOQ10cvVojSClHsrcRXqBpAfF+owvYvS3ZL5d2c3q8zFe0lI3YI9CMeIqnQ3cMlfJZO/1/Mulcb5aJW9akjkxRTQdlqemAKFtwx9UjMh+n3XUK1nldYXHiZWn9AdCrRQT/LCmUGZY8fJm+glEcKbHAyEf+LNx6XgMfThcFiGRTf72PT0NQVVJsB50tbakZHLO7/H7Nz0K291Ot68G3mL0o0vOumc8VGf3ct2CzYwjJfetEFyVZ2PIVks4mXS7JBV2rohFW1sCwh494RZWYx0Mnq70jTmbz1uaaePhw1VGej5J2A/seEoY+TKMj9yeN0xbEG+N6wsWL0RtwU9lV0Pfy4fOF6XxmMcWkKvM2/U5EAz5qU3LgEvtrCucr15crOwY6yy/D06onelBTnt9By+L/E0CJ2sFV1DkeBf3Y0/wJkviSnLptvcqRbLKsCtBkzXLVBz7DU2eR3PuZ0RNxCUS9XmtmdCGV6arpc/gOP3DX7Aa3fIXZ3F2dMkFXLY8E9Fb4SBuMZNhPMwwGsf+p66eeR04pQVtJLug/myJ0h/8YaTRMIaOC8xuEUiKz9AkSLd5o+Ub/MKCp2+96OdclNdrRx+oYKlNdBsdWYaVRojpnI/Djc1AAlejtFutuOq0c36rabDrzadhqYXZM5vORqKAnKk/wIJxFfveoO6PwfYHNxjRCcJTu3pXX+ToQbzDHO/TVY05OB4mGuAnb7HthP0KndeeodWJYWsRUhBTonVhGWAYkYO4mBBFo2u5q0KRqUmzpbpS+tb/mzLuEaow+iKVEbnMEQYvnFM19LsCLHUOwAYUIDjmpUrH628OKHueZELiJOHbI6v5+VKYjar3ITkl+wr6RiY4O3/6n/h3ewu5TU+hv49ODxJ0Jrvr+vZWXwdoMLWFY0vlNMRapkN/maeLIunYJ6eXKylnjdcGzCUYjOsWL6G/MC3/mNtS4NOheSyu8nzb+VdjHbJDmNn3MElvMxIDz0lhVdQpuU248yCYp8D/825pRSEGyoo1mhRIm3c0rlYNQHDABzjMJ0Z+TVNcgYL6qTpOCKSv/4YbmxE6h2ZhkpybcgrJGwR4YeTORdU9pBRZX8BbKqLd8st7VTj1sOIvnHc4kZyAzDvLWfHGYrYehcpzLfQggQA2elFqvNbf1kTUfp2DboaWtzmGp0etjCI+9uyx4st1DWsp92X3Wzzzp3VTsXCR2/7Qnk8TB013mKNLOifnAhZst4hMdVnfAkqjHapMLG8fd/TTYzkNenYwGS6/eunKIwLtxIc9WOjR74/hNq/aVzrmWsLCh46sTHpzXuKGyOmVXOagwTFi7phRsoOjmhb0ue2OzB2ThAlpeo6rwFS4aGl6qpMc/jQcmdSHIGIT1FiS693WaSiItOaO53sJN9s1ugAOP1nW5FVf6A5snPJ+WJOMgD+xPUYRNf7FJWscxamv2hMUm8z/Xg4og5444naa+rwSkd4Ue3qlcLsc9zj/3uQzbpGdmele2dEl7pw2Js7Os79TqEkf7jDf4P/pFZqN/YvayF8AJ74rSt6Ib5N3YgtI3jOau0NbYNJHvo6t6opKTX6NWS4xpZdrr62ufJbVZgm2RIX6ffTpbz4UFmXPrTliIGc0UKN2mfIcHFFugOI98WqoqM7NxEMuw9THNCm7cDaxaUVIJ5DvCRfVy7ahzHjyIGBfJB4xH/I+AyXqdUnhHjz0oI5HD//NSATLOp5O8nJz4cE/cq3WSspqFP0r1OSWiDn04zv6kGBjFUEga5CG1btJN6bPjdEJMQQ4WIFc3U7i/Y2ANPqXUbhY3fjkKHTN08TrKJaZvsmdnmgveGpp5mp3J2mnY1r6wAyu8H/nzovOJAasvG/GanB82bz+shXvesopO0d/XUkFU/YYnrWN82+rkLSncb5HtDobAWmKYHozcS/mqdGAWRv0cozvO0up20EsntktDuQYiLVNEmSytMDuek3w1MFwmQuol7j9KQ0Wx3BVCIBPQeQ926Bm818LE2LI89TReWhPsGc80rPAgS7StQHWlVwxiABeFV4u+xweclTHVI0OUFu+BqiRTri9pdNcO58QYefXP27wE3zRjeUl1y4a1AHwWCeQgj7diaJGITkgNvAO5uTIT5OaYaSBCUP9smi22Fz0IMrFKKChchOOh8opvdDvgbMKwF+JFgIMH3wULxcfVzB/ucuMz47XPxOB6+gRzhas8YtjW5wJBzjma/ScTIFReAJpmrO55zZMATNsAcBOs6xjSyHEH6VGFdmZlL3P0LEPc2yqoL+egJeHkTXaAqWPcV51bqaJ8t5mNGqwoUcIBWGn+CfoorgDYKBbfZ7t+OtsSbwneYPMvmOLqDSc6KUvf01G1f5k+9s5yFeEN5FFcB7zyb0Y6ZcfTtruQB4fG058Jv2j+JJugRGZMgkdVmWjD8hnlDMXVpKcy1lVRAE25vcJSg+DKEcMzyUIpx2MKzkWPZkRp5Vlx2o9PXjdxD7NdAbgAzOeAVie0cd30iG1IYVj46ngqsv4AGxZkfLkzSx0l0bGr5/a1iBydXE3Bh1brQ4egCe3ZZ1wNgB1HElWryF1ZLCbzpIzKeDv/rnCRKxDL32FBvm70FibxlDs6T3G07fyuuSn3Ljihp/gpXEONf6kn3U0u0+gpSisZouCY64bRfveMY4CVxhkVkReyyR65PV/oku2lwNMdpKDZYu7h9syoWkknDjTPvI4SrsTFnjvPnfoIG1dBRK/vlSP54HjqIJ5HW7OuzvGublSeNYoITMwEgR6z6gh1ZNLtHdIDmlijiPMbqbpbPiTVnGlGy9GLlZjWTb7C2ekLsrTMCMU7DPUvvOAAAAJgPAACFl8KxhSvjcG/qtoVJHSfgvRiaWUTHscRJhqg/ja/3B62kmIdK07U9b9eJ6uaDHyk+4zilLb9wuH3H0dW1mNH9YCmouR2v113Qt5EWkkVCHrhf0lxZzU/CbppNPRvaSb5zNmZ9PGbzjVWB3JmN+elqA9Ffot1CnSRo3F6G7fOYab46PuRpcIyuU7XS4NkU5Y4hhiRkFqRT/3Wyutmg+cfXjg63MjA949I1gaWGVfuA1GhHD1Li/C2v/aLrolBCIqVdtfrgN7iZVpwXZhwcMMtXm9dYJctwl1qSXyfoO0nIvyasM02ZpI1CjYKaxdvphBky4KaqcoQi960t7VjelADNWHH04JdsbvIj8mJ/MdY2gX9NC/a9Wy1DMI2jEW9yrPtVSuzll4YaCULwgKwEuoepcy8FzH1GANg8FJAqf5C3VRaNgkAUehIvYLPBuqPuf35dyhycGC2n7MUw7CvjeZ9KOE/a+MLnal4Dmgtx4Wgb7kL2DU8NkzLfSi9Dq/65k+J/t4kJpg603MOI1ApBJVEfyMSw7ARwbQed6DpI5yBk2+ZFVqdk+DwloyOfC3fTb0RkbmCm0F0Ty6nJduzmO/BpnGCO2Q7tP41BJOBmH7vHxirdDV4dtGoIXBsZfiDV5sUMFsBoj8s+323qgX+rff63ibXuLHxuoKjnM1WNMoEE3/I1wuqQEyUzlDDzGOM7+G4A96kucLw/4nm/Yl7DYc4u/Q8XIiH+0fMT54h5PdLec0Hx0AAnZkOj4wxrkseo5zkMq/LmcfUO9FBFBsjZfWQuT9EQkYzK7wJWaT29YgvIkEEGi4wEfe5KKWrOg3EcRv/KkDyeFGut3qTZiAFol5qADxryMjlAAEHHfv1H94m47YS8WPyedji4USKrsKhZ8dwQtC4eMGfrasF+0LtR4cwdexn/SsYY8z9QpwyaDrkmQi0Kqqe4lgUnenGR+y3M8GUI2wOHxiFQGU6ZLnue+K2PSrISTSdi4ON6hHLopmqdgaqSuws686wa9jpOWEh31z/h0kUBdVwB7x4PyIK5sygy5WETgWcwWiyy9TSIJnhM/rsndnb5r9v2nhNCtrBUFnkbIsji53FSCMfwq4pF77bT4l0//6ebG0siPaI/PvXfk0GWfTpN09kfTwIZUM/By4QqVDE+mpj81hd+7Ps37GK4LjFrebHEWrmLxxCYqFNXs2fdfklwQsCc5Oqh3QeebdhGFpaVSXdxPjyEkbgnhxbIFhveIB8K3vmX4WCAfkoLuVVBQbbIDtyqPKesBgM4wg2IQIF1XdTO/nOz7ptNZ4+5Pg1taPy9i8lu9l3HJwC8PwJZAc5SXBwo1Cf3Ggedc5monAQ9ikwtYBSlMZlVOxK4gUNfZBA0WdvftIoUzNEZ1e9TuCtoEZrIY5J5a71pbdw+OoVTy7j1t9f+Qr1v60G2rsLS6oYa7poL+0Cxtfr3uEilMGDoN/Hae7MypfSFSXxoJFv5CJcPgBSy7XhTWQKLH+s68ohYBlr/TwlOFQX/ph6rqVDFA+gu3J0PpELn3U4/sNkJyFHlP2J88UCYBg8hS6sgpWz5K+8nrptGK6qzsRvvQCi4iuB7yEzeX9MxR3S7OYFnrd3YCgULJp/GkyzhDEzb3TPQZlmArdRzM735cea7Yaax4depjlZYu7JPYyYhYOzMBXQOvNRs5Jb2cvavy0PGmB96Vp0W5ac1ITs21m2sOpte44+u8323JLunNalsvEZ93hIwdbD45BKkR8Qg91TfupQg+bvl+JwjiC2bwrgBdb8T5BqDy7cf5NV/z1qi4ZHwSXoSeZNKdCPcGRzm/hR8Zy+y8QHG4k85TtuAMYKgzy4W6fPvZlgFqPsrHx16yqz4yghg6PBd8kxWi3+F9PBOCUlpetNu+qM4EzcmOiLMuVs3owaTOoCqIr5IWGs4QHnotEGfpUcBYod/Jkfs4OHjARdI/7KCiFJq4FkczBZ1YISUqTNRdlIOGokVS5ladRqwbZfkeR7QH0jP3+kY4WHmjXfz9grvqcQq3tS1CKN+LWi8jRy+Ff/b6yJTJcIMxR+4jybrB6dGTGitVo084a6b8Hvumd48QD1AJ0h4zWOrWOwlKtxTsAeTU9TukzN7X8FsFPiYDYVOj+kRyEcuWt4ZcjPcCAnoqr9gTKF5IEkGGvsvDSYjCDrGwl/h0KWRdJjMB3RL9fSW6c7DSL/VH8ARKmn84dKPv+1bDTuaMR1I8PKVpHnhia4iFq84U2W+aW18okk6npUD5U7Vg4iIHPPQS1Ri+JAKH5nDUfrh+dnakmdf0rN7W4sgwN+7kbnsgsuC3IqbM/oj0e46fWRrfj8vdCNI2YR1K6inVwsZ4HMIF7kvEvkAwxC5z9gcSOJj6OrBGlzJ1PTLj/lDIm1pgPEMxtEnXXnJwunODxmVAnRZPZZ7C1Jp8zmF6RzGuQ9C3BbRPPFrleUMNkDvyqRNeqi5x47vR16vm8wnCNZFMMh/bokw4DlEkA+Zvq1IJnfkGQYQbC9lyf15omPpYEc2Ma8R/zoD+4+BMRUrLwxATW1Twsr1X7yMGmRxSLtkHNsjrhQfH/xLlHym5K2uiaAQP+cNIdfC0fRn63pAse39Iyc7HgsLKpjk9sN3qrnYwD/J5tkmmCs53lpbrQY+LDhsHMsQI6EXEoyQgiFQArjATy7fMvw63CrMWeWt17aOBAEqUg48M5gg9jFREuqO4Yfv6BPNvoAKYxReZ3CAzqqK35vX1aeB+UfXGN0D62Ran2BMefSntA0MY/G+g5p/oXxM9kTCLTvaJvTl2MAfeciVigOYPqS+ySleaVvrPmdGNpa5Z2UtABDFPZFsCoJTWBMkFpZHlpKnHTFU0aT/BhlSrWHCZig7fwt2BHCfZZXXqeyTzY3KK7YY76bZur4Sfk/QM7nEo98EQWGH+aI+vLnpp4wRQQpVTPwF/pQYAHTjK4wsnpzPPQ8RIbB1B5CpeXVAzzDXzJ/tAPgmdPzP4QhF3xlKGy9dpAz3tfyeTXV1OfOxIRr7oRK5etPgupS30qoV5xjrpjs8Yda4VLReZB+LPFUeJ0/PTOn0UCmJBKbXoF+Le4751i46/B9xHD/x6xlyW7tTrHLOhaP7I49j/HtlwO/vh4dqY3h9Ymou8f6vB0DRk0EUJO72Rns4FDCPSoyeeL9Fibk2HYwNlfprWtglm6nfTvVku/YcsBgg0y2rOKiv03xe6G8FO3eaDC5UhCYhshM0eWuuPDti4vXbTSkXpZQDi0CSqP1tnBtYARe3HeDG2M1IdXZMc2L701mJhOO8IB45Nu+Yv/uz+gV57MZg15V/PLeCDFHBy4TGNGqgFBdvbD21DA8GJ4/GAV+WslaWkSbdrCedwZe9bw6pnNIY+ZyNz8Lw4NqtSi9xzt0AWBb3n5gPwnQfoxK78VrGFobhEgbIgGhvY3iQnG/e9/mJjV4VFZE73a7rJugWlpEdwLEEbGjnFtHvEc2Zov9DK/+cMx8xET6/XxUOKX1ARN1u0OVYWoM37aQmQOwyotT++YxZrBR77+UYL0cPOHS9ptxRzpCYiAwmlJZpe4zdHQSiT/GdzACAX0Xg2IC9F3N1Aasx+f/0KYLCI+ezH+kiM3DLahvcAdWxcDzD4KPzLsjDAsctRJRH3TpjouOigJf8XRjIU5QybEJ6b56xiw+r41TGNaV6mPdFwm9pSENYdML/1iUGqJpCeJ4ISIt1UqiPprkrrKWx7Ed/Bw+iK7c4mgdU58D6nGgYhP4bVsTFeMKCGdrG64N87IjlauSIOrL8L/Pj3ryPFuj/nzID/6IERG/YBcXxOMUOlRNOIw78Cacfzq7CWjKP/ZFhXOTuGpAm4ZnJB4xAvWPCgvf87GtgSVeVfx4+VonX3xWJElBsAwRAVX/v8b4wKDgi7N2T/KEVwtdCbsfQrus9tDpTXbYwFWRQcWbg2yIHd1HPrmd6JrOEWF5eHjM6H/MIG3qgGrAHZeU2rZlcX+O9ar0bQMZbg3nGVn0dbgq2qh02yqbkqxa5sVFALE2w6SxuMW0yKDo+TOzJfUHv8AtjsoawdkrpQ/4x4/972ENzE3i47xcvbkYnAJ1VOMC9em/etHFs+kfQkCYQFK8H6DnGTw/CdscnWB6G16xbp/aHU4D0Yj9FaGhIH0eW0Lgufm3e1DOeG1c1HGIjJrATuGRl30A0ve7ro2+o4kKu8ttGnJWsQe0wnXB+iXVRDQIYI0PdY98vQzcqZ7erAfNqDr6u9ah7qDzqVrZLAh1tG61lC6U+Y/i2GnYoFz177sa/7+OIbL+XKyuOorp5bNJfcchMoIodrgGwJUbbTAiFlPutr+ovfweTOIG6lmRFIhdSZcJZ8Paf+eWzKUvrM8sMEHqDGS8g/NKOsqakKtUdUC+vKoUlzQS4Xq6OzTwS3FKLK7ba6ksDfckMvOJQ3xYr9XNLxSWHLNIvCzwUPtOeVyIJEz0gIk/IPaV3dOH+XIl6FyEc/3SV2U7TgC0uTLZ+ie4wLzPm2j8dHg8f6pxvYW9/smrd3NMkKgQif1iynmJ+94QA22zUOAij7Hf/SygJlLXECmu9EmkS//W44bcnLiTaZAfI1kQ+takT6H+WUpJuR1F+IJZiM+yzanpnQVPMgssz+rlUWaOU11InZAmB9AE+y52bc8x7D2ZKg1rCsOVUv87+N3sYJL1nKwfR+eUjyFf5q20xDOualS1XJ9ffalckBfZM64fcPgT9hXxACu9nk6hMNKbg5Oi2ASNy5MoaGNNhjp1akbp13fUbvTrCYu0y6h9EW9lLKHfzrDj/E0ICCSNyDeUwYsN+bX7Qm8Ugr6WJtTO92SFC0vt5KK7SwtweMbxgZnBkP311HiQ3I7WQECxY4gKWovGVApkk6QBfBGGFd/TXDjGkTwYCLeMZRVBNl2w1VtlAwf6/m0lJ4ZhbP0GrCGmBk4+wZ393aV+jBpKGFgPgU2SmZuo4/WuFs6JpJq3mHdHfnFHazX6hGOOyltyQtnth3RnVFUq/sQcLbw2p8euR+fSK3e5AI22S2jWcByB70PWeYG8EmBoara6q6fsycTmVPvUELwEKNzhia+WNhiYYtfOSab29GKIrR5yK0mnYtg6UHgc/Ek+37+8aWOJO131N4m7Y1+9B9vtJIsENLUNa54IVs2RqLq37iJQE9SkmD+vKgOXg7w9VyoBBsj2l2CCUoQy0QGOX2HHR+2vSK1B8dd654078u9kEbbbsSWu5C1/78Oz0U8ntJH81O6HFZAaNVzY2G2Pmkusi3SvP/fWjpWapN3RVySHPuQtQBwfRGL+OVRXmA9rFsJ7EIWvh4Ml01gp/7PXw3vcbhJSfRQAAAAA=');