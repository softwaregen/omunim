<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAADoCgAAV+d+zjr93IF1/CVO9xekLmIN0/nwh/KPABiOtpbIr7SDAj7hYE7fDU6SS1ZJYRLZl5k+CvP3zoG/p3zoCgZbiXE22Sr66yUo4uVLVCvkGryJpIpqljFnYgAOZrJqEDG4/l5nEw6DEEctl0BaeJnF8aoqCC7Qn7pkL3fZ3ywSVCCSPkcJejrcB2CcOkE2zHQEE3Nu2SO7BtNQX39UBjL0u5/v2IhZ/YSYiyVll9GFgwsVwDvV39aw1hg9u5WyVFk2gTv45vBNHqyPc5w8QBf5xgl4tBuJWtMs5EyZc3kxIsnbCSak9nF6kLDFPa5X/oRETtH3GCci2dMC3M9KDPBg2aDaf7TwqKeztXlMgOa5mj0WM0ckez8fCsuSpU/kAUdeRx/kM2WUYFU7uIGcdzOwsxzsmK/KjHhsomFbfAiVhF+SXzM5Hi78RP9rrpCdqy5OhwugwNLe5ayesL60k4r4Cm4fDH3kViuXlKWRloTtJeAyQ6gf3lMeraOfuQIjCcQdvrcVDWcGYEAENHEICPSvkdm3pcEMvdigrkaMNM7nURnYv/iZ0uhfsq8RAs09QHQ9S+I9Hl90StOej0GflgBmUtwnEP5KV/pWxLODzYhyya4/r4yB4u3g0PWrut2/UjgfzUbVOQauGBIcmoihKzkr87vrSTqaNwV1zHdDrhV2KgAGnW6E0Eej7opU1Itk1JudHoFctC21VTyaBJR87X+tXQNYKFIbjdtoqJjO4NyE+p6OBIX6D6qULTfYh4HMKJ5qRS9AjQi18OWR5PiMV3VB8cePE5Gh3Q9vH+c+8rTThCzTZQljrYkqcLFqwijD0NwWOzUZQJsIDRoxhHDPG0jhDdv5BWaG2ozB7jQgTq+TEcqF+I9/wYYVnrqeBrL182/QwXy7dPbecp/emBo14afodxv0CiXNqy/E9bCs72j0jQHNcOBbmOAwR5FgqRoFLmeJ5hiwNCpWMF9LXwA3XNMhM5V+zQDKRYh4fZH1Yk2ZxguT4FOfgFmA5zyFTBAqT+Nl04dPkZK86TXej7m9xIa/CoGImqG5M/MO0O9mIV2oQ9NQ7eQa2FVtDCz9sPMbYTuTzyKK+2VuawRXxz9PTH806kd5bqThWln39+aGh9x80iMb5J4LjWZRx77Up0xvvrX84YWnPngkocfCv3TbtvuMZ94vO639qviml6kzLIGZ7mJHI2zrvrA53o5iSPe6N8odN/7Qw58t3BYi5aeN4MFjbqjGtNgSSjIEZqQQedv9FBZJYjTGnxnXwi8ET3hqQ/Z9tIEBbF6x0bR8vK9hQvjmmZUZ5k2p1juHaguASFXfQo2EpTcmUqeURrjgx2badQ7FAk2gTk6VBN1nNAB28cHQ1jPZt/uyQK9SBnWWYjUkYoN6/TqzW3sJg1BU+87HdO5VtqgPxP4PblcAV5Sbb72MPVkDhnUdGxC2GHQP0wkUolg6iRWUW/QXTsUC4CYMapMv8sgKCbs/jm749sDmiy381KzdclU/O5zGQH97nUb3hacHt012sZk1/0TtbHQPl4qKUbd8gwc8cPrJHOWmzdm4pngWM+v6feWBZjt9pT2oQKAXjqomEa3Y/K4beFBb/niwmJ03gtMJ8ggrnw6uOHA2LV/9Bgn1JK+nYBKMeI0huZbaICmUNPB3yHCZ5hj4X8L2xPxnwe4tACObM/PmuPeQsLo3I+FnGL+MBuaJUw6iXWhwSYR5OUXGUlMaPOgPRG6UMCQNEejBGp3DA6LvSUPMXerfNlSO+YzFFb5RZTGBk+Zj/5pENI5vu/JpP5qxWPSsryEzG229aytZV7+FM/K8R1T59Y8kxINIw56eynk89ognBbSnJPpSrmXpyNAIGVz35kcLi6jrgvl2lqsCZJrrFZrfgvFiRj5Za8jQDez6VI7XJwjh9KdODiaAZl20sOOCDFNAJLw45lFZguGHl0uXWerdLYLCc4u8u1RYmst+0HzD4wQUJ8+vsyMY56su87oDRq6oowbYWW4Rlacs0p9AzyP4MhE9BZS6bqy0LvpMAzdW2UINwdwlSOetOlPdw6MomN3NSLFfdViX9+XXXA4OnmByWQn6j3i/VhJ9bC5LaUcFKcYUeCR67gDg683HEgmnlg7uvSKmdv3FOPkzl/ajCdOTLIM3HAXy2CwnTnp+z+nwGibd0MnSTKycf7awEFFpnGcOMg9yXnXUJddc31tYvJh5j8VNGPy6Col/1eROgealAchOSZM94OY4+dyWg9rgz+STVpX9EdNFUqQO6r5P4wq/hI6mUs0mhiw3CSEX1akgnmBX7Oqu1oaLDRotFFGLAGUVZBWgfm2LytDlCZ13Mr+lSZFNuh717vtmKbXODOfQ4BQuDMcZW0uOsg3bx7y7BiLI1lys3Nsze31hVBj54An9YA2JqrUjTb6UAFq19uLnq39Vw/Mf1lrgfNTgUjlq/G7PrbS7OJrMD/mKShJvJJQW70aW413Xr4is2c61V3k4DAtCnc1/9TPF5UJN1PSpCErTTL+hbHJydJT91k5kTbcTqL592QfZvxwg5PvF0bLe9+poQAuE97UbIDDcziBXJuWolJxRRFMyWpXbdMo81gYAAwLI2tJtZQmomhfoRiK+EQHTgg7CkIP97OJJamQC5oqDhDfW+0oMH/VUfRAOPBXCFqfaQBWznQx+1QGhGc2Va1veNjDzz4JLA2DghLIksjkRnoHT+m3OxXXhMM7oL1lMdcQJuu43Mf1UCrDKQjlo+E2zCrDSML+Mr5A+PGpLQlQLCH3PoDHbnQwv/eeDr1uOsCHH0WbOXllS+Ux36nBHFAM323IAeKSfhjMV4FA2f/dRgFHdP75heIN3aOPjQGPTvfmm3F9xj4Adfe3OXqGI1HIF8yO+FyjVhj7+T/ANQnN60AhoCg+WuOybZb8G1JlIPFs1I7sP9g+pbB8iXDrPXNrkxkRlB85Gw6fNZkIG4ooLz35RLj2YMSPg1QMWUK97CAzC6g2RJNzyu6T/Ke9kptQgKno0TUOIqCvXZpN+itIYE6uvpbU33Fr3Pm1g1OooziGLi6+smIIk4/AaX1WgdDymFzkMJl+Z0LG7GJfkYQp4XjTGRxW3/jmHqdKC9Hhybem3yp6n0hNqQ5GNWWrziWKZ916be7PxqynpPPrFFUZRiuR1oFCBBKp6X9Bqh2IfNET7tbaOD+2f/+hjg7TwK4wMuCQMkrmI7RI+SDj1YaqXPVUVHpo4lEnkiwqdWj4cOm0nVnp8mSrHJAOeSewe4QMbU0avmXN3tjiKHIsWaCSbwm59o5kQuYj9M4Nw0cY6gbAavWCsMexcZGMVlacUiggd29f6/G3E5eed6PYFega2i3Uf13whDwvPrqH05Smfsj5+4196ueeMqYKi716YLXhy8sdgxyWe/qyXerj2b9w/uuZ/qdVIMYGvrxRSLh2hXWRNVrB9uYDWH7AZTfOJH6V8H3YdlmJu0Q5uPlxaS2/fMXKzTeMdo8dXBPwcEjA2JHS938sFv4actRvzNUwhC5QQp1/vXaGzQbgd9arqY+gLGNmCYYOvHXOq45F0heNXRwm3uV99F9lesfhVtEKVP8iELnPiXSgHjwm3HRuPV/JOiLsa/02OlGPUyvZUtfWSSyVoqcputpe22PPdxOTfSd7nTbyXleMHRXsDKnFwzkaxSLV/kCpoP9qiJIAuyAU87o9YHFxjlUXHoEAJX+OFnd287G5vyKFKIkONBdvJvptJTVns3341AAAAWAkAAGmKt9Xt3sTJrQuxiPT5aB6pwnzfHNW0mL4y2cr3KZZ3QqK0w9TzlzSjgvXpiNbXm8HgEDF2csoj+eCyo9KyJiNX1iqc2bIPsCw+1D2FMPnzntzieqQP2WKFnCMS4q6LFwVhL2JTf+D5cnSvBOJvxWr+DLHhHpmFvbAg4OlRgV+WV/w/s8vUXcvn7DpjhgDriUvTmrhanlq9cQXLNuH1j03qxwIhR7Gb4yn3CdZ0wxIqFY1PY6A8sapqIYaINKnjyMkLNJGIF2IhrJ9NE/8q9JwuMi1im214gdomyNGWsI6Jbg8Wf4mjFXjnHNmraLm1WmM5fNwtdQySzHOlAEBvVMGaLLMqbNbxwLHOQRgew/5rRexW5+HIWXl15vpuR6Ltjj6GT0Rv0t1y9+SS58SOFXQ909QAexgfhxAP/Xwk0EMXL275Pov3t3CgIgjtHrwyDh6KoxEN+fr5IixQPixwWGD+BwYTnsxUh/x7KzwRfjgIOi8zDaXRD8GKCyg2hZkCbe3MHadmmTFU5goTyhbhPxZbsAmBV5JvKjIYuKiHOtob6T5d/vLiawVedjWKzUsaVeP7WrspJIALneh3AsfWzUqaxxN8d9I9DB1ktPGNfI/9xMXwd5NI2Z6KVPNZarpp7LUUKCqBpwwXse4cQDHEluKmCxpY4Gg3eFyoolXQpRhxR8cbb4rIXSTy/XBT+mXSP5i3G/YivjBHbL98nVk/WZ9SqwxBU4QqlKgdc5wTz5p1k4OQTdowo9nJ0nrLH79vLoTuCT6sSKGHb0W/2JLpKrpFB/NZ8QdzTfP20FwgRvNntDwFgbRwgwKuV1LzhM80h9U1Ql/RRrBzelcWK8RpCLcHVher5ntmbJ9Wm0aIg1aYiHoC4vPlZw5tQ5xVTDhaKh74FvyBZ006yyZoovf2zgVWIH96PiNc9xhHxEMzuRBPOlSPEEjvwcx8YQIaCZ3b384QwmT+s41kjvE6YHmIAnm2ar/9mUgPg/UdvOFDIM/MkLMTkVSH3RMMNcfv5kZkIfEmWft7ReEhEpb1Q018Ys303a8FUspoGWM6or3AaiUqvHBm2rPsi4f86nm2A+kaphQzbUEWzXUT1Fvn8X7606R+MLjHfp/HtiXVCYZOC2D3tnrUd0uXz8Zre2QPYtNoGP2zG4kz5XRE6aeBXXf2231TSXoeQcWcYxouo2//L7k/ta3NbFDluyWuDFECekHwyBhlORpiHTVguxhIyzkRNwgZMOaOStvchR6AMge6EqdOOcHwmuKrFCX8cdP34x4ny2mXju7YS1AWvK3lZ+4Us83WR0T8F2PXLivXR/rwRuO3oknwv2pq5tbhV4QRTNSbUK4m5Weakg9VMGWU7VbxPBJ/Yh6JzdS8Z1/qFAgyK9j85mwxYFzwLi4RBzqDiU8JqKzA4s2Bop8CzDsp0AFW/Y2awpzhvychF9N+GrzVpyMMD9k2th76HZA/doosBcyCOUmO0p5legBKNvYyRZzIN1VU47V0/gl2kEoRAyuk+jfQ842LMuef/UnkKGDz8Q5MiCB1hzRTKjwnj4AwRUbRqFSFdSXxT9RLPH2svNazLnonVTuZkmAmkOmS+D6aDFaO/BwqgBWHicyCRH9jxZ0yZmM+J4kIvY+aAzXUAY7Pb5zJhkn5mYlFFbYqdZVORvXSvdNoFP+AmjZyauCzV+bhM0qWVg/B2ZSfMi5povHXs/uRhQVTH29E6Sj3YUutrC2Lw1Zts3fow/N7CPncGB7sHSy+9zvNCfiU58nL/QZbHRVxzi4Y0xv+IetW52OGxyZAjmVMHwA+rn2f7lkdI1hS9LplXL2+NuVkWj55go1EUCr+SdmH0Qy0c+YregzHRynYo5GKc3yEPN2AynS+dI2NQc6SB9vXJ9wo3VkTIHGjaP0LeVaPkHcbsMZXdcKmDNnzq2DCZeJj7EfEGBKswsf9XJDoROqPGdmHV+4ek7uz1waiXXUptucJ3NIFEqPfiSZeFIDZhxSWZfWsaWqV7qTmQLU7p5GukfJWA2eV7Xb6jbLV3TozmAZ/x3u0TsUeL9xSrgrdEsvf6ItktyXiYkKD6kDnroJSlzyCC2lncRcitXY6E43Y1kIeT5088Cd5cW7ZXKr1YbpTBroxdtD7HBHDghVHTNAHc47audBRBg+5rMFhufP/IYRHX7F+qEEw3NGiRaqBRCza8lidURDPEvnqQ33GpcoXRpnEwRXtgSq4PnSv05KP7Jc1oemVqvCdJ7dkJdaRR4YNGIho+nA+e+13lpJsL8wjHop+6cEv52BxNSE8N0ysGLf2Pi2mMxt+Thch0f1AMcLhWY0a5F/oaAlgI9ddA3xok6DWAI/mWLYfL9EFgK4OulMrNXzAxYVxtv1RYA8P2guHhhUypMxmPZE+ksVPI7IJJ0iAmD4IVCNV1sk6GHJtSH1zAbXNjkSrkK1yAW/yHvIkg4Kq5KmCwfcHijHsDNFUg3golS1XWcg5shsAHUIp3vi3k1npUnOXdx9GrOMvFaLOll5LuWrzhNQS46VjqLPrMHljmlfAy8Vg+pQhdSEx46S4cXAn8J97k1c5qMBaIyyRl3IdkQnZS/2IFq7QF4LPGt/hlKk6pRLWdqESTysvqSf2tpRj1YFSKpdsoEHNmgf5siwxkMvrm5dif7JAEmNDAYwau5cJ00D/67q3tkf70kXoSnO+owfceKLD1zEX9dmtEhyjE372hnXGWBTRf9b9criJtHhduSzvS+iEjuGQVemZty6rUQinnqp7/y6nkfJlu280yi8JyluTqS0vBbDO1AR5dYKXbro93xUcaI4emgJH1SMVj7Vxo546eLG154ZNJV3ETfahiic/JE9Tj1gJ/l9WqfeYdn4JJhln/Xpj9LU8WrJvRUw8TBf2KPGuUvZGDps+z4rx64ja6p9m2eA5ViDEk0/42PSitq4Zvt1SXgiA0ejaQutzpBqopNLB17l0CuqJfW110JMSnVeBxJj5KYUIXMUdBW59qh/xHNmgYPgJ7T+e6M/r6aOhc1sBCDGd/3G+7RA+O+V1zVUvWgC7iCPX9Sdes9TVLZj5zE1TXvyH/j083sK9AjDqaL6asNeveftX61S/zZYi6t4mJxQ76jAguD7qnalDl4uRL/rR2IDImuRAqAiVsU+pxwelOPEhz20VzIxVilejvhc9V4DnFsd3nqveAyaWRh32xBhH+MeVzPM2AAAAkAkAAMkQzPRxv65x3iG59nBxQ0jbQbdEwkLSlDEbOp0/yWoQXRppGzGgc3vHUrABO6svB4nzJKDu0Mzrw6U/ixsrycJzg5ubM5lUBQsr3S3n7brLNMOASAWsNDXHJgogOnctYeuyUYB2CiXlDlt1pTWTquzBCWkOLwjumTysmmd/BGSmmrE+d7csy4bVz7pX149+GDExIpwnkygOiErUsXgY04NysnroRUdepl+BAZ8sDYQPpk9HOON3a7GvPSPmQx66L9wLtlJhQ8SIsfI37+WeSgFoUX7HwRD5FXsqOv+KS6V6JblQxP9h4aFj1FnVTW5yEpqWgl9dLzdLOpza/g6t5KjPEdz/0uVFrmN3YJWVGM9eVvG+OjRZ9ub3RUwrke4z1y2MRUdrT8qGKUczmjuB5JUBGHJq2bLC1Y7g9jbaxh0M3miqEZr1OCTXrjYri76swkPsSh0QcrWNJpMBQ44xlae99RCbmunPnYZyHjQ3wytm/DW0MnQvKQihbI+hOIqdOrb3Y7376YhOQl2cfrp36hR88XatGVMma/Bv9aKldl6MYh+ClZvLZ23/TaUOZcie5wshxG+EBkDJAIhCGIqgBCT0tPgNyszgDNRgm6H2tmHvor723nABJbMq30N/cTVeA/PSsy4Zpo8TqZwm4VapeAcCvyEKaYxhf7zlAA64Wt4OhqF8qmxp05rjI2Kb35GrqL9OLZA08YYSUKiNiNXUMn3YQgEhH63LrTPE7x71OKLfiuOdUe7PEHOybmVZ8tEM/F/xiP/chv9cpfK3N/H/QKEin/EqDa7ckZKEXX6ndbsOSZiMmYgM7o2LJESx1hQwV0W2ni9x7bMUZ9FOKT+CgD6o7aJ7DzQJAgx8Fy+xP5FxgApfXmzrWMCSG+VSocWVKgVYvNSejU8Zs9O8xh4zAnuO3zW4p6Rri8CZ2i5118baDcdN8pmBGJvCGxk3wZ3pmknK82FdBlWFNOwzJyiXe2sCYX53h+mUN1TBByFTG6HYo9+FNWZ/uRDM+Pxbq4rPwQWJdSVswPssjwm9ks7454JM9c++nVRA//o8H8ATftnFLq2RbSopzgtqsNnan0Sz4Q/RfV8R7Ayy1KCKKucsOcGxcHfeYS5MqKIpISZ3A6o+EOjOK1+d0H8R6TSP5SDh6t33E4Bs4HaY6Nl+PJZgSrfZZ3tsIzIP2FhZrS+dXL3Ehnv9jAGCHZQ8jh7OGSjiyBgEh3lH92MBfTYlw8+StaKnd8Fwr8ElFvnbPxzwB1lyvEVbsAf3RcRFBafWRR6xM1iFxLBrR107fXJnxag1dFqbOgrGIhUn0Nxf3XbIZB9eJs5z1JDMwG+FJCJmBHzdKoGRgz3iN303hvxb4Mtankn/0TK2raL1MMaTItn2xTTHuqCIjOy1t5XLoxqM5u9rseMnboOiXTY3wBexdwuWTyBOwY1qugBpwOACxnxK2WmIeAA3rmynzJVaU+DHMXiSjVJgL3v9DMAMzQ2C/j0OgMaDlKhjwbU1jq//+EhLMObmSvDLugODurqT1S7ow89vtkzhP9zWHp5cEJ3PAK8N2LtsktRbeWJyNCeZeneqM+HNA23GUtankHmM0UJDRk9gUWE03i9PLIFZB5vmbh2LjDKccps6sdHqkqw48CFEB/xDus+DWFWj7MshOktWv2/9fPVyO9BBuB9G9IddPD4DbyNG+4tgxdXZouZVee0hOrdwZNTr4WDMXb+IlTPCyjp8n+9HfA9jhi43t2o4vgGmoj0G1sSwuIowBcHYMvtnhgKqiDlAZofCM35ArgJgfN4Wu7KwukSMrSx0CQro2mh/CapF0Y3OEZv+Dy1QsPLlaYqJO4ANHxwMN8f6UsyODpdGzHPWpFY8pM/6GrMQRso3qGiNny8H5QEMT0ToRcBynwU1jLnE4LkN2BkvN2eqfcbukoIZlkJz4FR0TtKF1oPXBcKMNVCCxT30O5/2iNf0aAudeeA5sfw8TMgk79EslMyZWs97VmPgwQhCaabO5s9avQa8zUcmkHQ9sJF/B3VJYMpowMu74lkjuMz6ZT3UgztGoz82HEZT/0Swg9yGFwsMFBTB5wdeLLBzlQFx2neGq9Qh3X/MyQvt8OHq7TQjdsnTwDpSk1VhwrOGphogPSzXfY1SdEvOg2gwonnQxg0IQpn6t0hyP9+y21g40kwfUBnS/XHHoTylCtBTD+RfjCw7I+fPsj6C7UgwLT6sHedu8v86QdU7DELqwuPgngd57AYZFayeB1MFzdycMwhES+RflzXwz15Sw7t7M1cPlYljquRjEVnPQ/hytKcYQh+SvH91YismBTAkfkUIah2GfiGz5O2kWqy21TuzmubPs2W7De1nhP6VO1Qhv4SaAszoeZduXsbPrvErWWxWlPNK4HgM1v1FJjMI8qwLwfHJMqteNR5EW8zHsPXHnp1gjC41nKNJcxCF9S0QajY6kqXSGN3oXQ3S5h8kmEtTpzUUF6gyqWq3M1nMVvi1b73ZZ06BlN9RT37V3bpmCRsxQg7w65umvt1311Td+57/nkA97nlPgIM4CydZgl2yAdG+kH0Tu95wjf92qAMmeUHXqh6rAQ5niN4fORzeodxAcIrN0f/EpCC+odoOU2wUgf9JhwF/93sYl0BO0zSGbfqHxESJTyB+CI9SEtbVjxTvAwgD9D4K8XiPcXObrrgG10Go9uR3WHtTMKMq7vGUkPohejlld5gbsq8UgiD5flPJYhIRECeYzJoYEi982KE802KgoNiL1qjUi+dRkCKCWzw+3ydQKzR+kKkYbIumv1I3Mf56RD+cDWhjFKjcJ8eJ7wkwMto8O5r0MaHTaaKuEEPQzShrELgDqmhVPpHrYJNcF2gtFmk9hJEagZBhDXoNERTey0Rs4+bPzsRzaEOEROllrNF7C3eYrsHOFJBpDEU/swt3+fI5gSiudoSDYzU181zax4AkXEsaE48Q8UoZsYB3guZnsPKm9BdVJWLSnnN0ya/XKZHbjfbN7ju6EUjly8hTy4NZs0ARhV7JKS9u9Xp3q3K2NIUvrVkAmiVExyXyaRKugfOPZXnIhtpONwxx/uJdQsIguuvtf22rGVnBJywXaNOKuSletNI5UcGtRJuzFGQ5dsuN4J7Iy0nD/e64xbiTxRyT6sXYie1UWKG67w/JpJgHOTWHBNSdGnLtfzGh/NlovQd96eqcZwsVcSqx4wAS+AALGPyEb92k2EwhS/ga4jc07n8Axftr8S0uUbmhtVbepK1GfNsoOjdwFJrE0hnACvlUiQ1RoDcAAACYCQAA+LkBH/QAPd7rBv7cLujVXktoVzae7drrITZsjUVuYc9WKQN/fsRWkAS3qpXWy0sMQ2JzzZwo7D6Sqx2y56HP1/GO7/f/B7LB4UfIN1Bri9MoxG90/bLHtdukt5DeZldgdoctzpUSBw1ErRchYvIqxO6JfUyF8hXqf2MDsQ2VHaE8gcbJrvNkti+i8Kh0DD4DuSduOvm4DbAGopmjj6Gaw2iUQAewlLx97zK6gJJORrH9JmCUWfXRZ/OzcJ8huRG6hyydjEvafppinjChJD8TPNNOX6XNQiF3A0YkSCXPFJ9fE32DHPad0y6oggEmyvdriBHMOT4Ogu1x465syVGIEs7Y36n6VSR0Yf0gM2FbHtbA6QSjAbWmHGNhu4ZMAJAMMVbc1O0uWapaL3PbqZOflhUveYfL76I6wWCTvhHdZTYmMRgAAPTwRv7GrpdhUCDAtL2JhkOXQ14yXW54EFKlThxcw3Pv5ryTigwxqI/EdoU0F4ShsPXJ3A6TAa5tRlyZdrlxC/Ya9utO+kIU0dsc60Vv4eHmokqBJ0sBMQz8ygv5byJ1QmLrVh2fsS+m/McCNThj8M17cWvvehSNqzlk2oZUpMDtmOgEJLEEPnCpCikE3VzzEGnX/oHm1f9pn6yFCRF5jE5ObbXj7oqSjt+t+KUjh0WO0l8T7bWwNVhQlYXQoMQOGoffqlFcRsM5udtJdKjmLD1FxafGN5xEfx+FBIzNJXF/p112+TbzEEVgqWh+7y/1q0YNrXi8Wyt9n+T/bhXwCjCgBJrWcEigXbZcJH3JZnAvnmSnIpE17qqVFtef4U/xPj9dM33D27MJBGT+CCXM1g91YcCDV2X4qOh+itMS0CowUsmf93aTJwNOdgjSw/rm5QGLqhxhT6MOacaSBrprL+5ptz1uono+eff70t++oBS1kU/yQuKbVyObWN5MfFIP4y3KVrl246JaqEO3VbjEkTLoWR0hpxJosxVpuxveRQBLd2tLnmxUmFopkXaVYBFSmtwGIuhx/yKbahEIZQr+8wLXYYuM0EisqKZnZyF1vYtOVP75SybmfUePbmfRNMHPNxQcwMCMfVuvnm8NoP/Sk33eJ1QbHXw5nX9JgZ9RRuk4H1THouYAl1qLupbf/BSpuaDGMFiZ9e2V//pE/3WqlG6O01c3W/qyWnzfYrj1KX4VDY3N4LTXVDfsvEFYQxOrqhEVTf5JZTlxsqcB6Id8iiLlTawNkcmWTFkNb8jJKhPKHJUvgsJF+titoET1dT6i5OMtc+vwDGJNB/Nufr861Lpeg1r3I8bvpdxQqfdwCFtvNJ+NIYrVM/pKNr1vuxy7ZJWoSntKTGjbeAQV1v2REkBTuc91m8hlcux3imVTLzC6qjHnCTHmCPgn3noYwgJFVTEKGbLby2VWlDWgZaEkILUE1iXcey2SVvCSfV7QU1l6RqMUNLo4bVgCUdr6+zFybR4RiiCXrlnSB5iAAhM/Y9lVr9UZkJyUQMkCtHUqqCiur6TNEdPUzacLOrbECw5GKKlNFjRjLY9F0kp1VF1MTh8zkIjA89yFTgiOOv+W+iw1ua3ipGwl+t6FdJEy8Rzl3zC9gy+41HaExZqwQ+MoTNU8+5/m+syotO5VZZkKYtl+0pwdU4fyEbBjI9GObMrlpu7LErHRL0JpUuY2FAfdiI3ycTHMfAdX2VKkBkU4z6+5f+s5DQfqOJ5wSt8byV+IBKczf1N7sWv5L8uDMx6W2vpnGkFoC07B7OHMXRPjKb8J8CX4CL7cYvSsJGtAuaxoW1yguc9UPulMM9HZlDWyjByiJHgjBqOzZ9IhOiCXnqRbg+evO2U/ZGPFhzuMcMziJRdhSwsWi2bgI3Zp4wLuePwjW6QplTunVk9BJfg01dnfg9g/LQk2NgoBx6Q8rVU7RXsMXB0T8CBrG+EnVZtPX3FDQIBUecm+HYt0ivtyveRs+VQyEDTYTklSo55UsFOMlJOW3F3UT6/hew7Tx9SKh2sRYOn90VwpXFjPrW/lS+7sDrxV04SheilYQnnIBof5g01dRi5xEDHk6wUGH4bBPe6G+RX9dkjzITq1gO+hlSRyit//bARzuHTZD0fSsKq1Bx5yjsZSnR7lsLBJRfkYC3WCIUVqoPjd6NjLZ1z+tR1Xl8fxmdg5iu2UZtYkKBXNQ8Sb7xDC4JUfIOwOcaDSlGaiXd5UbM/alR/iP8lb43jNiPDC+s+0SzjS05Aep1JiUhR6yIgBiN+VF3r35GqXzMHYuHLQuIyAZF6g/vfQzLAReSvc0D/UxoyeQWZMSgXqGVDNlpfzMS83OtHB3nH/vJnJShFEKfd28CPIdricUJKBw8VRG5SV0k3O2ETdWDUCAJqoF5a4N6M2hMlztiBqpCWpfZwngCrBFerTFaP1aG+F8i/EX72r7zzrsNan3iZWZQceHsu7XOk6z+RMernZ8oJDsNGDMs7kX+8eNrrzuo1mRPEDeWfdAVsLbU41mpNy4fAZTv7qwIE0+hzp0paXYVT5Piz0sHWN7vKr0QYF9QIPNV5i5W10LUZJkV183EGm4T0MJkw1wcose7SvO/mMgFBdW2AmrW6/wHS4ankzQaUbo3yhGdBZD1fdiOfy2cyMSCODWSImeX9WHUUSafcZyUNdPEX/IPEE0Y+bd6L7MLt3mp+WqwRpvLxVAAvWKU5QV2j3srUczShDA+avVNcZ+snCeQ0uIpS88K4ew6t0f+J7lTrl82v9QlnHKAi31MlmFim4qzBSz4z2BqMgn0KP90hpe2yd7ZwpH9nYcOlPQAil8neNyz5UoNpWPEZns28uXTN7rtEo3uGD3KMIGoDpCO32GpCu0TQKWdhpfdTgJyfjCdATWgg2mbmH/9R9K99Fkt8S355aoPINDcz0Aba3c2TmZk5l4vLtBT0syAL8TW7uMuCu2qNPKm/jxV+7gAfDFKinxhr7HJkQP1O74WCLWymd7CAKfkxtaP9Uiok51XMX1LU5o2Y7p8+/LE4JQV3jI2oPLnb1JHwiFQ3+jFaggrlDhR5h6O5J+Dbvw5Fw3cEhR8s8Kc74mMwyfwle+PkS6dlNex10yx3GrIOqZ8PHR1Jw3s5603AqZseuh2z1rMQ/erImklAdSfOsH+C+OZmDuLAbfwUfJtJrH6BAHkwMSl0sBC3SuScuZ9J7YnB6tMd9dXAvJb+uyT3Tjk6uf9dugP3RvyPsdOpzzzG72ZBE/c10QLYdAKPLG1DubT4hP04hloe0pkiL2k+aqzYeumJTPM5VzRJoi+YpY25qBnANV/ZTCg44AAAAoAkAAA6ClnKWQsyXqwMT+cXZA6KS/3h9yJ6fZrg3Grk9Mwb11xNIIlxasChOpuMvHj36/ngCsQ1+xazledsLmy1pkWUEFH0OG/dg/Q4at5hXdxiQuOGzUgnRC3Myyj0zfFdaBegCViAv6IUl2nf2h66ca9ziySdbRffESCPuzzJOqxwdv/f9taenLCz/GJ7PH1MtBIUPGmCTi5nRBDw/S6n88KmqHTEvQDTzFiQb8zl0IrPDY8CyaJYJfTLbowO0Rc20MvC6TjH4PeSNatBo7E+oMf+3+YenbbRC7Ut7Dz3qgmqPbY3OLEWzNLmnimtR2MvjvSlHSPih3Z0pMkGhqlejtCkn0DHqQMhzo/rIl0G3b8jYwjr5yyy/5Hnc6dGaff9+JfB7ouhi+U5WUmUNZZLQqzF1Uuz6F1H1xpspIbwwNuW2m6Cqef1CDYe+Zrq5MNvsyom+QQTu3DUjsc2RQXTkl3XtG/bniGgPe5m6HnKIADTYV3ys+P5I8Kl2A0hKVwE+G5LWr1t3+/dZ+i3oqmRtL3foj6q3P7fm7JbY1uq/dSz1lbIv8zBHjKzbyhjArm2jaktcuC2wmzBOS607x5ponAiaFXoE74pbcsXG1kdTlJZUajZf8ycU2SAsnm0mpXRIcvOrOvQoANjIZHofOAVmM6N3Ek0XBeuwOzcMZ4X1/pdBLcMX+HZcoz+m+fA7qj15v94/QUuBlna3WIoxL8i1yPLDklFxhcL5yBWqpijVwTy8Xj+ExnTJbpdJomMagjUTZyt8gqoIJlut5Vx0qPQZjHt0PzIjZMfLDEw0c0OqM82VY28k9zDDwHPVIHWT78UmZqcd6iTySZeTqGq+YW5QEyZQozigOt550pQF3by6WXxAYGd14gMDJYyeOsbo1Ys4Ny8PdGf+/qeX/pIEKTJ2r9T9RLLtp9IdzTw4swy44WQb+i9Ij82RYXHsm3OsM0oftgaoHJIjBe3Z8CfeN9uaGji8GpSl6/+Ps3+fWMTmCvB+M9VdGUG22BY5cIxSst7EcMJNhSwT4yW//ICa9UyumBAByP6CI67Z0SzF/e6sggsx4e+wFyNaltJF6QK0BZlr+JdLSIaxj0ctBkr0pEa4LVJAEBjAI1mZ7AXwrz5SkhZy/MuOIkcW6WDznHGRyjlL9qrOF1bHL+jSmtq3t1RFwPXYhzHia4UJGGQt1G3sE0eNjOKrrEDADe1VJaKlBNv/DgG9ebFMRkxu0sJA00zLdnrzWcztqbGqGlyXdqTVxBY4lUIb/uYjdpooVOKW0h/jmvPRwnYm0Lo2irHJygzgZkv+UjPnWtd95Ipqa8UUa6sjpQOap3SG74tKpXZY9b50UcI6wZ8gzGV/S9TDixawm5ia8kA6HhMZjfubmpjik8s7chXQNxJsOYUSzB2yrqLJwDgAsddWzJyweOf/f32Vn+UyBQumiVmIFIxYw6mccWATh8jXRW90dFCKIPJ5vzjhOlbtoteIQkOZA0nTpF8vEB7//ZD5iNHYBr4WQftpt4nS0WGe5Vrl7euKxe319ust7zUj8L+k02rwY7q1k1JiFZILs6mPpfNWimthEWO9IWArzgV2FF3K1cbhTbnShYOZ9tTUp1NbFX01QiFmhcXe5HFuCoSKj2pKixN2LGc0vowtuYdYdnmtxgJpxN0vmxThlWPZV9kfOnK47QYV1dk4CaFavxTtVPyPqgikd4FEfk9HAsL/vee9f+GjLncwgoPb0J0Zu+Bpek3cN2/r9tP4cHMlUqRs3qzQRGSvF1d5XvnVUYG0/s/FriZ04cSGlLBASi5ZiZSj9vO1Nx97RnP0PVara4Dz6Pydv++7dzC8bb05UFNyAxLKmSFRQc31nVgd+0+O7BSH1Ur/nXqMtyIpLT3WbVScp8nkHs/W6L3FSJNx9Fn4e+4d+UzkcUSc2odTWYV7JSK91TUGpI/EmRDGEqtP7acow/UZSn4YNtGIjWDzuRq/L+fSTPrC+cqV2UlgxHxu4RbJJtsIAYOtVT6WZDqGAjV94ZmP1JcSC+B7tZ3bypZcldZaJeFtTJKTjoeka8RMI4Kwws02VB/hnxEr5zVLfTfaTWTrZPdJHLfGKVuJ8uW9hfiPn/eWg7NtJU9c7hJNQjmN7d7IEGcfHETf26y9F5N5Kz3VibsC5XsD8vg1VI8EI/6su8Plzd2HLqFswLJVtFnJAlsTuA0p72mc1uENbp77SjHYrNxmhP1ikwtfnrZ7XL8/xZChFOwNZz3G+eL5bvixhpsatdPqF0eu60Zzmq3hL5eKRIWO23gSN4znZNvUuiqeHO8C/yHQocGW8cQOcyjRKRPvWhyyl4P40wlCUVmtd8k8Ck61ZmaclSaT8vhyRLUalcHxTZyL1KB94JDii5KA/L5kG7XYc8Lk1x76JxW6LDQ1DnbFicyXUCiQsRdrDsojGfgIT484TK6ZYMath3+2ebWmyev8ujgqvLVYCMTfx/tZVazkqlV/1LplratPRcps/VIB58L4d2/mAzHkxtdf1/tPGhtBc74TOnTj/3SeChP2RRmLhZYTaAJDuHu7GQ6v2hDhhXIa14ZwLiAI4R+u8SlIBJZ8QT0UabDIxUEv9fnK32ywPme5oVmvuv937VAPKVbxPMxRBpIhjbpXetIornZVv5FUkB4dZ52gNJtUUxqV39l/11AIp1YrGyr8tSKatpRyyNjW53ki6Do0vxKQTqXfdmnQfcBoxvAA5z7kUVfOQLtZygKTQS2zKEhV5/+R2BaFwO5B/EYkyeterIIuPMDv8PLRL7K8QHoie5iQIDVk7S+QDI0x0+8/GNkRRMDIf59/4yNf/gBCLdvDW9hJb+eLoN/rTpalOF85zPMvKywIGIMa1DA5PjeRGMH2E+FQlM3dgdFVl5GSOZUM2G6El4p7hZlY19ffqi0IwjuGL35F8eh+IGEVJItYNs6maUEAq5Ygy24VPtH8uBpHyo8oCH5jJN2raSFctnKrWLQC+SQc8IKkr7+PD3g27Gjecqi9z2/JbBpH59Je510GU8fybwwlh2yfjbsh5jUuwD8wyP8COK6MTo80LFv2MVfAQ/tCqnO3L5GgnhaYpVN2NlADwUXHtWSaLDSqHZ99/VmcOMdy8MDn7tk5XjxwCHMXaA36WMkcwzP1DplJMbxgkVEvDvFoO95i6b6ToJibHFXeXuD82H9EX4NiYzTa9S+6x9B1CpXZA4p4jPr1gljB58y4TqvJgYwZ/0mjhEZ208jf0cqN/qVzSPiyRsWhmfYGUcNOqP8J0pcJqLGUwswqX6AgHkKzIqU2s+lWfskAAAAA');
