<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAAAABAAAZbUC1ifra9Euei7G9XAjua7F2EAp74i2Lq4WD7uaSnsQOBWf+Zz5akmReq+KA7J9v17SEdW8uIwtAOf1kedoJPVOxuRp3omL+Yqu9dG0Biuo73oupBzhSbkE8KHKPJVFuwlzC3OMkXHKAzVuTJ2mhRna4yBqE9Q1/DTPW8mCoeBNQ2klyRQ72GlO6J4BxWuOmKZqv8v6ZG4tQXG8yPAq5c2vCFY55tCxyHzbdjrC03JCUlq32oXkHeayY513QL65Ol3qnxsAV/40UH8IpDQQlDjeQN1OwZqPomig49nSScjYR1pFfKsKP5C1h1MU0+jW4tyMzGwVAb72Oj6MTTiNljbrSiM7IrumYfDe9lf4f0Ed0pHVvuTTQjr9Y3g9XEcnSCTVM6TgT4/I1Ud7bMAAN6CxlrqJvBFJLj7xsG38QWdS4FLAvaDKDAtD+9PIgpoG8yh6Zk85XhWEb9V4KHJ3TqYTDEkMUlh9+MD60kGiJ7PikPwINglkGh+Y+okj29ZDcoUsTjqV8uJqVSiujiop+WbuKKoBcGQ307PYwCXkBo5WCyEbKP8Pwm0NZKxm+jYmT6565jt44XXmO+2yPbjG6X3IuqfAcd5JfU48xE6zzWcbgJVinE5r7qE+5HIRKMLkAPLquBEqVtjD68HOR7lXZEN+U4MIxb04DE0bvaRZST98LOS6wFITNVbFk4fwT8G9C/Mz5AYEBEEk7+fuBE2xBKK7i5+061AD6J0vJLPV3tiXtiRz8CYqWPIrtHsKrc05iKflj8f+mk8/uEc1MRH0uwABgG/qiMPm360ytjCq0DUwvryyEcuFuKaVUGBqtgN523M9iGhswouoWjy10crS+vqnliw2k0T2FhgsYKLGKEelQPrj3lueAMc9VeKh1Hm8+PwwMWH+hnVnJAAXSU0cHLrbvuRh1CQceHXZ48qYl9OWeSDNXlfu3uJvk3q8tsuuiFMaAfvo+xgULvTnIL+4wCz5SmxuH0lqPwfs9EefKVnDoJ8reLZ80zOva+FsMXKt1se5melcqrNXlmR+aWe/JSzNC6mTUpvwndRlX+sgu7MYx4HUkXHRKCVdNV5nd8IVD0eDKlYp34+Cwv5dueo7vnPQZlxtPo96mNJRntXy9FdhEm83NjHNx1LZi6Mu9kI6GI8GLqTLU/9AsusPNCJMUrKmSM6ZtoToh4hzLYm8y5EMpBSXSKJ1tOnu1Q4wl0oP1Dboy7ae1fozHQE36mrLbADTzMWdbRyfBDy8aPsELB8s0EuXfleQ0+LvlJn7BYRwuri8zaXdzsJJQqd57urWK+1fIRzyX21xp7SgVHGNXSeOp0TmrgQTkJYcN/QOfMvUdOZbYoouHE5Cs0937f97wjUAAACIAwAA21uOq6KZyP72BwWGV8xXt/44mQG0HP1WhLVEF9+g+K8UVUoXgnjplcpVs5Ek3xwiG3U5QOR0T3THaxaLkvinyX+CoMhazT2ntilb2vBgc3UjdhQXLePJ9WrLoriW9H3Hp3sNiedpYTwKfz47HbHUfwjCdqDZVjm6joQVvi3geEkfa8rKuZT1r/xpbY1K+CPLMxA0gZFxrZHhDpRizS1HK/+M+kyAapexX0Ty/CkbBnqIZCYqDDOyZMWo7//DdZLHOowEFYgQ7U5HL5OBCSCLX0QhcIq3yHDptFNyWh07XtMIVI5Z6ovriJbSD4ccFF38F7WK+5Y3kqNgNNwi7K0ugfTqTgLV82QfgCqSl0ISlqYTXQGnvWTWkWqIYMNMLdy3amBruYe636FgFPebgUR6vFznElVr8uV0ddV8oVOuAnKiVrKOZqRvExHg533PdznnLbAWrmMq0xfyhJtYlqiYx9j/JFohzVruD8rV/XoRO84oD0bKkU+qPlhNuaqRmq6kqhc6Jh21VurJeDDY+Iyn/IAmNsGZjtf8eGssX6wZ/dGwu1Io5ysdx2GqUWk1BN2Ew7fLhW5SkxHDJMw9jsc55qaQZ99WYVQ+RqvZA35xDMqDi2cQeSDyD85AfcuxLyPrGLE0hPepVmOklRCUUvIv2bpAwPNPRHpshJVIE+Ux2Fd7OJCXXJp9w0h05eprYfbRFlloByR9MT0BYl77OoL9wZVvZpLNu9MRdZb6e8ynKWgX4b9awj+Xhazh45ojQ0z8XtQWRQOQZZtR9xPEbVk2QubqdyP74QWvAXzVeL+FqWhT4gEUDxxX9iAIJoZ40qcQNQRX7LG6j/PuGwpwnMtJSfTuUyn+nbz7GDmeGxF2mixCzDoL2edjePjO+de6SzGg+5S9TIjvjafIiPx+sAZHoWEukavFgEMWqQEdjkIebnfFnBMeUHHSw8ykUZq6BblQKsNXJsnRImruMVYwYdqvYoqyz9QxpGV3go5cqOHNvOAk9dco/UOArJhEktP6nTDszAMYf5S5u1yCXTNNBVQ9leY4Ei28+Z+1MTLArDOPlle5tuHIp+tw/ONTi8ahmVzw8g9Gqp9L4Y+o8WaXrF5rEyVulET5rBZ3Ok3Gp1R/2Ci01yu3riwq57EPtnE9GRpWKAYv2kD+6yiQwhUNrwt1ZQMerMgTbUmfS6nPOYqTFdX+q9UYkz43ozYAAAB4AwAAYOEEsiSIp5RzmOtRij4KZLZ6mSR9Cbqt565oSFhYm0nBNKfH1JEgf/NFeACoTRM/BItyX2ndD7xv2GA93S9muK5ID3cFSFtzpY2Cor3shvvm3tSmJjmoyS2RCI6mlf+406I7hPQQsBlpyECBYh7WSY5yGJ0BBG8RPxVqTj/nR+ZCo/O0EPjBjDrbscXfoScQtC2AWNdsQ8m9wGRLR8X/ClriMXNWwEjGKWWfJDP5FhaHj/8n/wgx4O6ghJ4TigoHCrfuxcaoMnLQwJ1/y5j+DR3DaaKkL5JIF58zaGA+nW6We7ZKr1SQPN3r6OuycVtr0uZc0lhHKrxZ4/hh+3OHUEREtn43Wfw6pcc3C2Ik4h44UvrLUv03Opa5ZHmeYXMZXg+hkmO1G+71SlUituDVKEWgwNQFg2x3f3sTOl54drQMXEhHUFtUfrE8hLn6bJYIODkm68L3HWkP1dF/qAJJjEQZH8IPb0yRTYVqvkUJNjaCzSnQO+W39vQbxtosXRx0ANAly4MugwgBfD4SiL2EpY28GoiCp3j9OVD0kyplS2qPbx2G3NooN3DdW4ojT1mj38NvSOmyIsyNfA9B2SaoxWUN7MbbnvghEbV/2zbFhsXyDEdM/Qq2hWXXiGgWJCB0GrMX4Z5C0A47beJUv9jVg1qO/2B//H2qcvrqAMxA3U0NawjkfVbXZS9NfJzFTjuTmSVJ/hkvti0mu8996620dbGX4vvMP6DaSxx/C4zYKRdNtVwTjcuniokN6RnnEYSStx4vF9gqT7uzlxPOmsjtc7oayJAdq+yyJKLr3TvXVMwTeNzO3TLmeCumFcEVK7GHfsDJHX9AL//kUMlDZMruwQiFP5PF06ruP7oxsfDkqDe1I1LJc9t9WAAgYJ63//dr7QNhLYwOBof4j15exuqg5yoXbCi5tDVsgFWxaGZh3oVewzeQOb7SsPr99Syn1pq2+Zj5cmOgVtEQw2bD2itkyqCxQICxPa3drjZjec7+53nzM9dRII3V1PLK/r2RL9+tHOerWIF4KJPOKhihCRxdfFVGrriVSHkm4CgW8ghSUHrdWUOCu0OO1jNiYvyKoK8jJNZ+/k7FfvIJT5vN7s0JydyEB6+7r1ZAeUmNtsIhFmkp/xA6dIPi5yVs2FbtXKfMQIjgqPkUuDKOtzWllfZmQUwwiEckZfYwNwAAAJADAACOXaUT73EuGYL9Ud+pyl7Rp21uEhqWtAFI7p8tlqGAmRcUFhHXE0rQfueAkr2bb7mVuCna+mD8u8/7NH+EfiRRtlr1+ujQfTOn4/55BdCztBM99Bw1/WxLBUa+B6yPrX3OahA9+0sQXqynVhmVSvwm7Bny2vFMYsMYhHypKmL6HnVYMtfTEu4PbKHJLnxP7mOgmsXMiBavR7mnRUhhClMPYWOaWlnCG0Jep2RQdQfjzsCtdGx+CoAuj2pPAeINqjPEd9+cvd5E/0ia2FcwijP8Ulg2TGOTqIxkDNERcXFgIuUqWzE61yYASOTuOnyQHOleHFl4AbtZ07gpmNTRDC1ureI41kDpWXIuaVnC27UWnR5Rg5g2Rw3mBAzIO2iJM4cdXli5sw4szduHDhRBTtHMXzHMD58sUGKZqmvEtOyxtkknZJsnaAixIiXJ5qRzVkcu/0bP4sV3I3upTl9lXcaadjpHpeEv6Z+5uk1N/BD9dMIam87Q6p5nzJCGSx4RIcp/iYlmOsy/ddR20Dkujo/mHS5hPlut7QtrOMPJLYBUIBHJ09qis8eZHMHFEz6mn4LbJLQnQZRxVkjRuEW1lwA1b2rGkHWWN4zc+nxAXEJcTJwyUSAHy6g9f7j9eNIfc3mq+/Z+eCxkyg8O5fPG4XIwa/fAmAVfwMmzysluFkhQyxYIxZonF452a4t3hLXTPazEC2FuJY0NxgpZkZ+9kGD7YEtX8YSa2K+qO/ay5I+7cT+TeUO3tVh0GrL7ZGNucd68/ylHjGyJJzWDV9gpaqWpbE1OzmE5F+P0geK5hd+rv+AjsPoDK35GRF48TCciH1m3Mwrz/uNgDlAJmbthsGUGFAw1bnq40H4w/2Oc8smpcL8GG6uYmjXjtAr1AjNERJ+Ir+xP/GGjxkD9Wnnj0vKviqc1xXcuvPzR+9ztGjVyAp5NEv0xKt6Eeozp5gNoFbcVL7aYGVx8FdPOcKtw5A1LnTaPyygDNWLQ1J6bkd9/QF+69DEcgwu27jA6I9XTdM2HPYTIqQeh2843kkBBJ1Z9UppKRV5HvBSyPNkzGAO8vqDNp6pCJRI8koUTWngb+ZhyDeiJO37palLZE1QHUDJA2S4ndi5EkGiMOey3ICxy8BtwISvC/Heb14XM3LW6mdyPHKimTkLNjw+yXv6r1izlx2/DPRUlfHJvtXJYtd4NP7vWK2NY9s40ODvwkuzLcas4AAAAkAMAAHYrjYlxFE6wfjwu1KomC79KiN3sh611tBtitwzXopPSIAE4BvjD5wExDzhuAD5p2oBy6ZSrAjOMdUs6Ly1MN4DEIqlrsmmnIwbL6L6gj9QFMpYJgMqj7icF7d6AL9DSt4BjzgVE3Xz5uuKFwmIiL30RrmaFg1dRsLjXaTizUK9QDereSQKWhhk93YfgXnKAoOCvdQ6pmGld+5/F+gGRPpTTcKsGL1f8X27ejvle6Go6GT8GAB6C30DBqC7EBXZJEr+oMMTtZ9KL804uWLeGFKD3RsaDlEv6uB7iTXjGSeEFnQncrPM1uu2hd/xOGOI3jSqWxNa7+SrQ+abFpNbz49MtfXvC+kFCYfI3s5RiJ/sGyfseLrXMb7OtTiYy2mByJ45yPzuZMemmeGwgQrf993qoCvTJ/2FpFFGpg0AgXgluln93b9xeXq823hlkbHrFPgoFHbpIuo5yuJ0zK1qC+ZYNHrKylPj8nWe4Q7hEssC/3Ea2CEaxy3lIkEprpKalBN90J4aKTc0UUzKBDfLA8VayVzqDgbdjiaDEByFRVpSZVa5svn/LaAaoMJ/K1lhxa6DSjSgwCWofK5khWQwJHav+4KkTD4OQGe/6rZAODlu4RiuwJ5ZkhgzuXj5bOhQWlzyB9RLZ4z8XfFDRvIK+cfhGOcGU3+GgrjK5Z+O9tokveFAf9EvChycnyo5RkB2y/HZUKDfTa0NvPDrxht2ekYlqIgnlkYpCNlYqhCSnA+Qt5TDOXbdwV7PCvBGM1AmCKlvOkSOQUgWeSoGsVBLvkYV6hpS4Ukzb7YpxR+CPACEph23OGLed1qw6V2UbsnkW3ghqc+uMY+v+D3sA0l+93zVEglyiRT6b0TX43xTM8pSJ8Z91HHKTQFNFgYmqWYYPTA7Lj5iJAOlxLFYtQ/1cWFCjECAjCGyLd8byAOBsc1hxSyGTuItiWmPj76VBLTgfuCYh20VYfeV4gEl+xyvFexfmECIB6+nS6KN6VMuHND4bkJ7xHS6DMaVVHYRVGodkenRNOUlHGcHCwrZ1YjUm74cF3i5tVlaoI/VD6gY2G3ls5UapkI4fk+tXJAdxmAMEVRgR1p8tL1nWPu2goNIzf+JEL6KgQxA6+NK4BDqo97PhUwMOFSgDTBrJ3B2PK8yDj3sWKVl0K+iYOvKNDScpzhaCq33CWTDk4T6CEfhzx+YLQiGv8CiPy4Nv2Ah83RZWkQAAAAA=');
