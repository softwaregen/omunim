<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAABADgAATNAxfKyKyWC0e+Wf6ZKdHPRyAlZGeZ2idbz65fMMSWh+Gx4HzDKAFnfNJuWwZ3iAO+IP9oJUNZqHSswndnAUpceuW1WBgPPKoIweXCJNDektjHVlbxxmyDB4JnRlL3EiGrjydS5Qfm+Wn9grlkutHX2pk5j9K8LHSwlkNIuR5VjHihIpTGMTJ7MTGhEzKZ7V/RHzysPv8cpcIEJSflgLTZCSyNBRWuO3eUFSriu7WMs8FZ6Da53T5jq0DA2vUgYSGGAomzDue8Gf0aTX+Ei6HQkeFwWNxH29j7jMk9WPWbtu2QTncFn1dhV5EuLne11lWrDbo3JGJDupJGmfZk16tMCVAaOrEYIlaM4qWVORTd1GjjTL4jCI+5nr5YMiwZCtPg9/HblKrKA5vQt7tBYsHho30s3fewRgKIfezhfQc4KwtK4+QFZ4BmtSZW+lkTeP2ioX+o3fstEINUXt3zx0lf+WZpiig0pzBV0HnwfuEWr90WHfVumr3mo6qXrxdguB9Sec5twv5QD2bpKLvjfRizWw5vbNgeKg+2bTANYiZUe1KEax1EiRlHom+bN3mo4zzssqNuuRZvHbnFSyltXslNB5b/IVMKchd50+DeVw4XIQDGu8P5gVkoahQn2Ptv7KC6yGq2ZgRjTS9UNVHGHTBzQ+Iupk0n1d2w1qcXxoY390ahe+lhKSpY7mU16+OJvx7iXKAF5/B/QXkW14OKSXs63ftjoZCD5IH8Bf+CabN/ecvYyLvfD5SlZ0P/lAGkgiJh+9za7DduaMlscKVJ3s8XaPBTGjotVnFmW1c5ovxBCx6OMwJ7ewO4E7h3IXG8C6onaMT7wJmvJ0TbkkX6F39ujZsP4JcXjWwFgT0i8AWX056CZK0p6MdcQavZLpCGFFxUImqH+zBgcTCh99FkKRN+mDNSud+r53wPzvW1P5LR+uY1yWY7NZvli1uD+JzNP9BRNgssqjZUqUyi9eXhrXoxOLY2E9vymVDDlBOsZCpRbYMr5JrLeuU9tXYaZ2rNAlJT0nLNEINd+WBncV2yCpXSF9RPVEi2FvEwFOWxiHVvTyRvshxzJjStLt+N25ut45g3y7IRQ38W8VBqoG4bN+heXD1tSnCaUi+Ll2fDAGJCvzg7RSli8FVd4sdBQTa74+vRid7Pnqw8zJUSJALBcvpaY7EKhAWjaWH8dUE0nLJhiG2A/M0qR2jnvHEPyJB6mHXYLsEwYV+Z5f3Z0xeCLIX6VTCajwv2oIcQrDxUwVVMlQpx/4koZDM+du1tTjuKPSInTEXJMmMHf2P3xycPcOgiCzmI9wnRs+UXcXgm89cumKnZWUiiYldOHNEVE7CS21+4c9h7G+9oGbIsqnG3XAwuUV2rW/egNY20KQFqirBWkCZMNBbSzRixgrel5/9JI6qMEyRdficzWL/Cc88Mtqa0/ooOR+aFT8pzbOOzJJmS/legdTMpAVgBEKTbHpQiKHC0yQjUZ+F00eD09+CTTdjtS9K/4X2xWjMYbwRClmM6s6rKK8sEnBYYYv0WAsjUlpKWEJ1wtqQMM8JkA0+pMsAxMI9JMZn/gn9LLZY8jcASESkoGOnRJvm3rMFP9vwIqhCUi89H5XZWL1mjZ4Vy2daWCmvLx7Mc7ZYVGRUELJmxbqNctpbn9G3An3hUkflra8EuLCfJmojoBtzbEUfGOS/2SmiaMqKkDj5ByaqxpM5+0EbI7v/m9WF7O6ufPUycbPfEol09VnkNZfux2WAeJsBpLe8QCXankYIrFdjZAVmHpwAyG/ndND8NDFH/VtSEehskB012C9RcSUs9Stei5gWQCzyw/N4aQ63S1nW5Vvpgi1CKzTm0XAl0AYg0VBqpkUL0sLU9J4c1RhSitsuKgB8a/BuVdbD/8oQrGvpTPLDcgjno9kd3s1rorLXG2DC9AdS1bwjU6gBzaF/Du1dLBfe00Mbqli4F8ltAWIyPnza6o9gid5ufx1Ny8aGeX3n3SANSYGn9dBdTxtOJsELuy3wOdN/Nw3++Sh4iO0exW87jUTO02EKJNQTxBOrpB2N+hm6f8v0Q/XHWyhDm8PeuLHaW+1Q8+EZHulRfzR9YVvSFClhdzlvzQx6KI/rl+ZJc/3DpAdJrBRIk9Wkh15uoJW7HdIi+aI6PQ9HvGk2+61h+wkbqsycF9iD+KdwpH25RIQtI9EZbZWRGSlO8Y5x3uHp3CjJxPbeWRUCFWb4sF3gaz82KGfD9OgGBD/k+UMu51gfRzxzMRrK0KG3yoNPAd7/FSPYNj1c15QWJtLVS3yfTT03WSovKACgvNaBRyhdRr7rywvmMUWpFj6p73FjMS/MhmfWi+FXtXoSBw+uGbJQUKGTzJgt1Wq9e3mp9bo/DXFf1UUqRM3FxavSM8pZiwnriRi3c4UJooLeHbdeOb+y7IW25jWwhDSbYdWN3wOLHzuEiwHrDCuI9aLAXvoDszrL93OWUjWWVEb0IDZitUAT3aeXKa7i/thA+FpSWBh4vHwqShWXlKbQJPvTXpH+V4z6rQMw2QJGEw4sTN0QdR/eFdbABzUCVGbN/oFH9NgcqxqS821idNxkpTCZ04HEUQKmxxpRIa+xxBtAEG/7zfFGatheyXLfmkAG3LG2dCBNBV9MEE8CyvaDCtlhj22p5q7Z/fs25HwFi5LnSY1i2+9gZPY1kjyxdYP446Lckiih3iiasfPLDaGsSM9j/7QdmExd5t5c8W8TvWx/snmCFqa0ad8ymCkcl/QjNK333E2g2v1vkE7dAHSy5e8pqEgleLaaOyqqWWdjqbjZ/uKh6qv4Qi9G0w7XnUuLvOFOcuU6Ei5VUza5jxcWz8NXGJWp9LWTDWT6N2qG6oc76BtJK23XdjpqOKHrWbJvdef3GgoavIP1WfEFjavvswU0vITYKV59X0Vd3CuV/JbWMc6z1xOiCkrokwwrdOrQta08QRzFGQ8/jYu7QgRTGTreuCvOKFkYSL8mKkq7Rf+yDSg29cii3FYeAVvKYu0fndht/uIUhil9haF7XwkLkoTx/Bab52CjdpK/3qjqMAdLdMisJQ1aLZicEh5nZ81LX8rFT59TiK4zVjGJKCDqnuTM6yDn/cWyEvBtV4axGYF9nBtKOAyC+yXn+AUt7K2kaBt4R94B/PLKEYjZUkLYNoXqQY4pn9yl0lx/1SpKWpA49i22Rnk1bZWwuyYXXxe+nxi0wsI8W2QqsTMTPrvUmeN2vwnIXD/cAcY654LXjt/76vhfxwztSDe8IIw4jiU/fUBxrRbPq+lAtJCNAww42PlHu0Zl9q+aeBDjSsX3xmEkTYg8oUTdpNqX3AeD3dJ82qefuqDO9Ji46x27P3rzVu+5dZUiLILvI2tm1vUftWnPjn4ValzkmTvQl9nxifRTrCQWiwD/kpAriJVXSvoSpYwdYE2gIuotdWl0BbbBRNbZ4B6PVQLoBYfcBaAQKr2mrZ3KdCUMMN8fwJk2biGOyLONQgbwVmk/7Ndkx5H+R3EH30TLIJPXqdbYmJtlO4BzOC1PsCp57IKn8wMZI6PmTpWtBH1LCLI+hD8S0+Sz26FVz2ZV0qbCzV8kqqpH1CWd8QGMmiuYsk3RkgdnB398D6gJx38mAstYAbfnq2opfn5a4gSTqNP3L+aJcNTL6lukQpD6PDfCBXJRKtkRfbQv7aMC6QfvZB2q6DGFSJtUvf09Yp8PEWMO/jIg1iwd7vawgxm3jKYQzQoLkPnfH+GD+Hbhobp45exxCOqdFCaDvLjeSPgNmxanJw5dh587oBLaGga3isqER0N9L0mD2W5MmBBsJq72ZEcjNGwOjgWRmdIiryAUnsV+qIO/MXQMQpUWjkCTuC3oyAuvSIlH4e/gZGA9mQmSXJAb5LC7X3OUaa9D21Afemoldn4ZvWtQj5h3CFzCxPBMzCyqkqjAYtPgK7FbiaoSCa8eNueTA7qJPSWPPVnaDwsiqi+2wBQPRnP264/S/pSO4Bv0wxa61jq5rk+p2vUWgOddOcmR53yWaFH9+Z6mPzyITALAGm5Vdjwo9Ukq6Sqn86bbOfeHlCTbERtYSHEzWDn/Rpwjmd661dYA4ga/aCbo2X0hu7cjSG9ZuDWJnHu5/+TZQwJN664LKk5VAzNIcJZjEB7LVMub3e8DGellZxmv9w/236rTeNBWcvh8AKZbUv8bm2V8X6NcOzjmy5xlkAT1dWAL5v3nzFpPXnq/cVfK2KNeQuMiLnezyoyz4HzjXH5IQE/6X2GBt+nQQig7nU3+HBbmpOHDV1la5Vdkl62AyogCPcCXXBn6XYXd7ZL/ssRZkpH5Fy4dor/Ai/cVyit9g8XoPXO8/pYYqA5LvlcgmkqFkQdtu9vmGYvieXALelwqd/QlwH5pogOON2+mSCYH/BdRI4xKPZdzVu7zwoHHG4o7JoKUb5LlQfahNbeOzd4S2vPksNsopvsXleAalm2MoeUc3qAVWqljKAmeLQFHQ/k6ivqZ/MWwEff/M9PLlHB+m+JZ2Fn/Lrprh7Cz92aMiSRsZ0lN/t0ur7L5JahW5lIvu5zYZ92Ha7+W8XmwIhRAowqQAoPcLCU6D9xIMMjfQofA7Mo3otYcfM9L49IithAW4lZb7kEIk1wzc5MRuRhKUY8wuWnXiaNkqxFQYlYHeY95u6ImvwNe6OtfMX7UIOvNI90PHlIKImp9g5EZd5RbPz7XEQeiRHfJVvArvqqymnXfyKhz4geVjvBiJpDQVJajCimCPoIJGKLp6uws8y0POWdmbaGTZv4/0E4UR1Iz1Fvut6xmgU+ybmnCJVb/Kr7aGlj6G3gyU2sq2R937EbKsX1pULoseT+xNFA7aoUV/E51VSIUS4EWC6AikupS3llwGjJAAffFwtld4l91bIdNQAAALALAACsvnOyAPHrkUqIgCpGEuWk7aBLYXjm3Esklx44KUDftZLzFNkhRybQJs3DxOTh1irmFc5gAN8+v5M/zlIsMItVuB3QZ4kqvv36+AiDYpBFFpI/zsrlDrY4yEnzv46MzL+KJ/NsII34s9GK6+E0Sxop5idJyTDgJE7gqv0uXy9qLW+GIGUIPRrqnNTOFKGvSnHLItQK23/zJiZ/DuqFPsHj6tEYxpVx7qsjK7gZ0GdZIomLFNhESfLtaL3MvMooB0QbxBHJSwwUOJB8/dSrBioZHl3Inue2ToN//p85pgmpULKlDPMHM2pwK7ZatUOMD5vJh/YJXh1dr3cz8YMucVM45vEnTestCceqqKaXUikw8hmxFDlSibGm99gszGwUc9t06XDmeBDKQA6pA2k2h4aH7ARQTAg2TcxurzbwstvlZ8FmgCWezulqboyyBuC7i12Um5CuqV4cBPhOj6iqhijdR4VGwz7KCJM/fYRXWLnR1DNnQJ2gYBabTUxlj7f1zBC+cIz61zSm/axFyonOMaHLoVa1dH2BJ7wBH3zLjiGlALcI01KkaiMYeiT8+8uYTKChLsRWP2zFE0qTfZAhzu6wFteK+lHba2SQjGvD5cRt5wsEHcpHyKgSu5ZyZUL3z7yIIRPZvWvWBBlutiE/LobRvRP1fyKZwRswhtMvCuK+F2Gtjn3vyeMRtJtVuJmjegK6SZec0mCjkdCprPb7Zo1yVs2NdUBLQAjMGkUuigNdhIU5qrxulzWLsADna+/tJDpMpCJjw+QO1uNim7fgb5lPN04OXbAkYFGZWVV/rmHi7VAHPck94BCWdKiiPP5sDMCGAJU7+HpWgcj3JHMCjZegW4vY4wWPMXq9hdqwvL4ruyuJLsyD2nofMNVSbNg6iL+q59B1HDhqUnKiBZ2QvYGCXLQYQESHsjqPwnK+Nwjohd5SbwqFa2m8jVTaBkzf90JNC6IBgKlh7/Ta7nm61y+MIqYZ6K95g1Lrkw6Fk8uXjmI4t1CSah1T3FAYsAxsczbXNtavqmvZdDrnVYCb1qWfZfFcDQzxYi2tYBWnnt10hBkh03153QNy6DMrDlRiKVNtNKDmTDl5unlS0IuGml8WowsYiuM0IaCjG1e+xsKFOy0HouHOydQ8Pk+0cSrmQE9sAB/OnKgeqjPqoav4m7U+IVnyFxEI/+guT8Mkf8nDqY2Hj/Cf5mLN6yk1zxmhKKpvbAg7ayMsuI88/yK134ZnK6Xn9piSKmX37A3HzGy0o4zrw/ZSOnSD/ly0ZNlnOCz6nTrcih3JXd5nuZiaW50/gbkKOZhEA1MuAvrCkVJzcVWidz5+czkGRFYTCqxfxE4zSynPGGujlD1/EJ/FycFCojDY03sUNa7yjnEj5gmqdwoYdG4mMSm1Ff4xmZd/ZbDaNDh8J9xovp0CdnHIGruANY+3ZsL9qJni3deW9TWZ657+dII5NBWEu+NqtDa2vjqMoQV9FlgohcMbUQYrI4FNnJagW7VZq+wkbbp7BLzNcigw3aQd2lgeDDa+Uz+S/58NrI+ySOvIqix4bH41OUoEbCNZK6AvyVKuTz51mkpjYEfV+eKXttU0VROZ2cXJTSoLkSU5MNNx6HJk79UXpsmAtMXYhG6s0iH6jOUa00NDsrOxvlNYLD9qbsISOHMG7s3L+EpBGccW5snIaCcSyDvBm61tx08dBC5y/z0Fm/WnfN7F6SEbe5F8qz3KrPqzziOew66Pssy8XcWh8Z7EKquMhRbhj/G01gAvpijpqwAAN2hmT+8iG4k1oh4YVXeg4POZxuD7Lr9ii8pjttrxUgCjko+RQAoJYBzTGhZ/6RGzR54D9uvo1yDtSoxn6OjCUg8KSNIXMBA/0QYUV9r77QtUv+pWQstYqe42XDpXApxxNSGbVeOKegBFWxgozGAl+fbS52J31QlNdmmmflg7yzNUni9eILtDJxzWq7Xw0xABX74Cq1vtbxECL27dByIYKvbmY0D8i8ePdh2sSvQcApm6ALAT8ZrXxtLkx9s6sl/Eqw3qL72Eek6u8kSLJ4ybIBEy2p9igJm0cNzYbAeR+d7Cpd3Vbsp70/NTjucxNnCQe8SkDcC+ogLtjjivrR9dW+qTGBYOBJ8ccuTkhAy6qqNdyvEFjLYjg+bXJTuq77wTzXzl/QEkhlXvLOnGogPR5MRPsj6DRTXiRor3gRBE5Hq97a3OIhPltIssqDkiY6Od8CQh2wKWpCd18B96EO/UOLRCRZuBrKj+8MMLfe5xVfp3A6d1KozI0aZy3YsjbxlG/G1yF+T8+XA6cjOtVx5AAPjzIH4tFoOrpY9JKrlegxlUOjvmHVUEEQJhTcGU/n8+46D7FDLMlCgIikpQi/pGrp+pSpS2A8U8JDY/JERtqWw3IScRrOz00gkEAaEVSiTRK6xMdvEU0t57kc176zOt7iVDomgP9W0+THyh6aXjHuYIjbu4I6LQKIch0Tffnh4oWkEytXkI+Jr2pR+HQDqJhbjlaoJVVWNMIGaVyWM1iYdNUfs5+ZuQJpIyJJBme5DzTFZYGY+N5BvUk+rYuecfW/Gc9NODCL5Te86DMiD7aY8r5hb/dD+Fsl2VO+CAlkbMdFDjGCyUcQwMwyAoWXQ+IuPcW8Z0DT7vCaQ6B50PoFFmPUJx7tpwlnsJlilxNFZMaEypjKp/nGrIQRQ99gS1xQE2a3o5A0dcB8LQPEutStGT/03Ylh5kIHKn3b8Bgp6vWsvOr0OmKZ+YqFWF64xVQawOTOhMagvQGE2HbRzdSa/TuEg5WBqWmhepCGxoZrD9U3Mi+2K1GUUT1P9Yszm5DYi+iaHNdNbwFZvC9mobBhiMcFn20kzV9XkZvKWnX3RRoqWz/nYdRMRYHACpBRkX7HlI95ZWq0eynvrQVt7JyslAwqPW4NWzTlp43dfOy81pt/q3gTg3ZhVnX3WVw3PljJdsg6uzxM2WWSdsJKtSVPZ1sHnKZsI0Yb9BtB0V6PW0B/FBbJHAn4KQp0lbeZJZ72u06584qm3dN+wC/ZXBREeuuNPj84KMyTty3xVidy3EShxEQunEqtDTrMjpuJtPXCiJXNYQax+C6huNFFRAgHeXGrD+nifUDw0S0GxHwA9a5otN3HV4W9Qj8mvrl0vKlbIqYeaDicQCQoGRs0QBWNJxAqk6b7A3z/5nrbh73xdLatm9eHKmdPmAGgDaHspH7jbsgAu9Ax8rKsg8cwrsMXnFVNAOEiN/dIdNf27OWqS6tzisNIUMp0FydLy1LCaz7IT1bPFiIKzTttjg4ltCt0zh7pBz5pZw0M4Ootm2lMB6MEmZGg8iUU0Hw02plIctFLHf0pdeDlaio0twE12AEKQvXj+Aa+6B5N2A3Zzug2+/OD3nsxtEdxamLgIIoMm38LXBFHMu1vSxPUVyNZKSsTWYHpqG0LNJezcqHH7QRnCEChbhS+IdmQUKN5dSOlzHvx4tJNNDcXmCMGMZz+KWtoHckP2uvfvmfRRcqCAH/4oP5dx17SL1cyBpsXyl8+7RS3xlTyV0M3j0kdhTiHt65mQsD/e1rkM/ibRVoAZpSShDQ7dI7idIf6Ur3YBucCTRVuW9x6WF5a2S1GFsiQuKL84PpqilLI98EnUV7mjqHpCw35TsVV2iK7BbD1uvFmEUE+H41qkVzKCfYp+FxPajT4yFlAZAjNzF9CK+yEdXCcLpOVX5iQqNbIQ16MUuuspcWlwlOCWwEE/BbOpM5/inYqGCq01Qe0Lu+CoRVgqxBYuCSDVhEvGAyOScm7qq9GvMY86LhkhJ3SNjXZGJGU+5rKo/hHCGnUg0valASoQpBvGfACJLqG7iKWELeipixEdDTGfOAVl0v/c4ht9g7cYbhfcds/VSeO5LauVDfEZyLe6yyw/f3j6l8jLWcalfYIuzLYVdyzFBKlBvFfR0lqVM7o6KSPfTkDciUDZZXp3J8czbcl3MTKH6724GPSxFPEFPAS4D2Bktaj4VIOZENMe4RnA8NgAAACAMAAAFfOGkGPbwPNo4jp6HWxA6gtmbypPN6+szA0HiOKACMftWGRPO4Ix8lxDn4GbQsv4wyPYVoZ6PY5loj38cByqaFrexPigDGjqOIlhpqd0AlHJHhrQaN3xARDTmdkEVc1oI/sf5ccQ5rn0rECKElADI5gBwJym6sgigs5p6AKyQOMpell0E1SKO5rD+WfmzHq+6qXNkTQIoGB0R0xqIai1TrrWoqZffrJxXNvS1MNAJc3MVCTjLHFcgH9g4IHTuyBF39ckvVcFzfzyLfMGKCM1QlHwkudW3lCnqtn1e7kFuZon7YS0eGDFg355NnDsH6kWWN68740j7eDYJU/z4uvrSBbuhoL1pFI3PWjX6QxLLrC5r9zmilSB7K9P7hOt/xLfdUDrhPJmkLTzuWqCpFPbXw7OoFxwa1qA7uN0l2nM71IbnmUcbagF28VQD3msi1czyPA/hKSRzD1aRxcjOPb7W+uHhfrCogebBial9FKuYIJco7sOJObL4REKtsk/4rUTH586pRYEH9/G2RRh85CSPt6q+SGU1ovnR5E28r7oRbkdcoTK9qcW9yY6qLNc6m9J+04x17YdfxkXCzKSMEvtE+czmHDB2XbjUPilwLDidhslDxj947JPbRGyXpl3XXaU+QwTbgU3KCHMgKZ8V3acz/2ezyqyqIjMhLa75FZMjAB2w25m1XK37BuCSuzqtHPxa71NG9dpzsgppnwP3hJt4R7dHIY3AjgM3k2eP+2ek71shJ2N/WqBjsuLdDNVMxoha0Zba7TedQmLEvi37OEs0zkL/l48ftlEInQATwDVl9bwEfTLVXMXBP/LVZpBD9xFrIa9mBa9iMslTPyJmG7oypDcKHeyrGCYZtPhJVfKqg0LCCMVwFMs85Dybi6ePhCf+/bqLhxVxIQAmrJhvE+frO+rPV8GFi5xx/HPMV97QrlJmH/TdkLEaDxtAmKdBwCV4OXFq6bIW7aFH7e7PgogpSsTnxgh6TROSrt+bW7/aQFcWLW1MTUFd7byAV1KA+CgDPxjlgFgTQ55SUC7cNye1+STEm16ny0kPAHXiXa1psWnHLFJ4ygTq3eAuu2TOR1FaMJZLO4Hkb1+lHHnKUd4Ez/VNFvWuvkEv4STbDCWNFnxwCaIB5FVBHLBF9XfFwOnkANasSAYjFMuhVNws6a233tikeokOqnbMMjM26/P2u0SoNOe/zcU99kSwyjB2wzao3ecEndUa0JLqs1FTtcYTN7YhHR+Dnox8dJeWNd6sKWj7cAdc6IRzWqMIKaFVCR74DzGVpzwwrIjO67CV7oZDxHwAWtdjCqDKWGLMBRwQjD6fPeveXssQIyWtl+IKPNqa+tlpm2fFpls+bnwCSBs/aLjhOefjnNJ2u0k/2TmO99T1sbpON7Zu6J5MXVrRRn1mNs2WJdYELAJSQ7gDgYy3HEy5Bvtktl7ZMvJT29dl+r6nZxsirg0EtWs3sgaaaRYXEDCR8foqBKpsqFO4+0XxWY875ez5I8Ai4xdLfGqaK58FAWDoMji0jFood7vjxqCnrMj0XRrVaCt+QTL+TXr7y9KtP3wILG/pz2MyT6NHBe0fqFK1p42G1s7RGZnOtWNH8/WBWgg1K1PlPVQxMGTiUhMKd+VCHWRDvXrCZswleNIMIltmtgbbVz1G7JM2vnN9d0gdRca7H1F0wcW9cq/c2DXTTuKQp720B0oQWwdoPjgNbXxHx3Y1OAEQJkWCrBHgl+57TRJjz5fXOk84SPwtX4tQari2IRmE6tLoLU3+pgIyAjTr0NnpDtPLKG6g9sd5+R3f1Ku4Frw+4l2ZQpYJEqMrNFqZzLd36GTKFJLraqq1Bfx7Z4kNXjjY07RukdIuyuq61mcwlMUpQDNQhRXwKXGmFSnwpvgnZ9g++eeKKfvGDZJRbH1sihMi9uxAPsyNqKcb+J10k3hIIB1RW4IFshFAi9UnvinT5jedhS6pbwqe3lbXvBee7gJl5zRsZJOoLX/3gGQpHy4X8mq1zwXmYi0k575j+IvUu7gS6Ld5ZOktA86xWrEze/N/CLU8+ZALvy29InQRG9s7Ut5/DpqeQGkRRQF+F3dGQ7trDvbfUYpTPYLgaxJT5eZTSP3Mwn7GQ8LbxHk1dbUqzHtKfaF2Xfl2/fs4xHUKpk0OJEJkXU9tp2lqsZyGwIcB8VlDlp9m7/DiBUBrW6ANlbrNexhXu7lUua59xkO/5ceTYuNgPAhtjOI+IQUWmaO214e6CQ0ANHRMmNQWEIpg4XBvWfOLB6SUb2JNiyJJZkxyOhHPkFmPHAa0tRttvMaiPAemtcxYiEExr7esl0jwvpfS3r/SbK3T0ffkx5zJkOTUIej6cPKmLOFsE5x/X7ffhKO1h8Fuhp68RMn5G5lkWlwecBq37dqMey7+k92Lkp4PX/lXa9N3YO1n+FiXKc2MVqRZSJTqRPJSzVXz9ie8KnoMJn+3C6DvIIJ0u10spFsGSWQCKy9AX5Pfmk34P8BLTtusovW7Jt7h7nEhI/2RGv9JmxflyDG1zJFZrEQIR6NrIjFnweT0OlP0xeiiMxYg5RkC2Er55aUxra+YqdzdvT0GHkoCTJ0nrAHiMw3tNXbwL3ceLtJ+ahv4jDsLXSwc0HXcOp/5jAWed0jeA+gnGvPzNoqOiLvsuIUrVsKEfqcF0nSpe7RAcvEcrqk3UwWnwbz0GWjXbIk5oS3HcRTD/rgbOGVkblNmzwNCTCNn2O4g8+IESZIFTfx77u06afSmVA6+0hD48NHMIIc+V1gaF3MJ+SOShqiKFBWa2GLIbc3Zqgx8I7+X1j+DW7jxC+x2XGsKPRPDwoyeiqqfZNrSf2a8592uareH+Hrb3H7Ij29puvappuGKyJcD5+BOsA2XmwKMsXYdZysH3Z3G2xYSf1ta0AiO+/zRW1kNvWetApe7Ia9zIMkRNTrXAr6oZzNMPFZBw6ZW6N+VXSaWwFD/sJv7nwazRjayRnEm2qddHgfo7EDm1o0jnmU4jN/Y13yL1cHv92LgfuCkKbp4brhr65hZugFm+qSj49RWrm6D1n0nq/ivMhFv7SlG2P2mtSqFQh3vwHx/JDCbR/8/3w0Scrbb9rf04DU1AwnedU83hVVHVCUAkRL2T84MA12NOhBhVdFpxOlzhOAaotLp/OIZKFxM1kz575vGqoAZ4WeN4xP/+AHjwyhTmDdXoeuqkHBgrbcOMTgTfg68xrvgovXduZnjQiwBBf7CzzWdq+aTSCuh4leDHFMs9snzRVKdid1lO4AITXoqB1QdIHwMrIPR5cRDjFc2Q9oTOveVGpA+VIVqh0BRmDyyMl2r+dZm/YrAojGb3WFcDiJcqCqUVn904qfd62uJ/oxzaFV/wmJZzzMfA39Atc1POxF56zWi/V6H3QH1L5O1dqIrPmH/Bwaw+DNpj6zaPLnzqG29JCzxD3Jap38CgMqPKZK4n15wWLWMBkeM/5qGkLNgNa7zPMn9cnu/+XRRAlWILTfNsAAj5p3RSYN6irJRX9wKFs0M0kTvjTIOk4iQRcADvm2SMICXEfxGfZ5OfCrSXKbuuI/3NIaixPOJa4uKcGXGiDOzO1RM+WHpO9Wo5UvIY6Mpvy1luFLMfonwT24lPkta2tvIrNgtENLScB/UbtUYaZP5dp0pDDpz+OW3CB/elpWEIT2rzx09lmJbGIQztpOkSFHiZTctwf34qJXQc9GsjwzBOhENVhav9Cvza+5I/MzoeKcOYyhrG+5py2iFrgUrpTCdhnF5qGk10c/bUbuU9tZfJ1HAI07yeDjPxGOTWP771UNT6urVO/+ThVwhow3wyVVKEx6UewUT+N3reKJHL76L4fOcOyP5895i3VNajXBaaWfsy/vtTj6v+DLrszXVh+O2UQTIoKcfMN2YSXwvcCSqvHt55fiziamVt9O5gU/S4aMOYKIsEyzsiDblDJFG2HpCwFAdP7yDT/zwrzltMO1j1XtNfGL85m1sIrlZzvEVUeJFY8KCavhNvpx+U8+rf3wK0nvx8wTZa+6IpbtiTwO8hR5vxw6YheOzvCnjLW2yOtZ/u9vUdlrC6xuLvyfGjRnRRRjotsujCuf+SVvqf1EGRRH1GK4yHgzs8VbAspFCKXVqRiegaNmcc9nR6ZmCm163URuGogDHdzcAAABADAAAPFEiWto/lpwufIRZW0KFqXe3+Iqx5Q3GUdhVe00Jdw0KtCOqgTDK6xmPR1GvOI1eTaH8snJ+CwNCY4cV/L/3Qwi61FZo186n7OTbQbvhmn07uZa3AMdJNcb6dac4P7FPcVnfoTcKGgtzk348J+FKkFexHrplaFpBjNLTm/xPITehZViPh1q8mOcgResSjNtbuAp/kncTc4DnKw1OxIs1TizFnaGHitQhto2Yt7IWxOqWyJmL05A4Ju7QTPRZZWodkMRsqkErP/ZXfB7mqQ10u0xqytOFJ/T5mTH2qHOBwviY/P6Ijbl94rgD032FMB+Uo0PwSucUBzD8EXdxFRPI75NmBZqfRePU5ZDTWUH6KNCRYqC/hXVSaOBsvFWbmsHtv8NOp32AgDHpIEpKcakgODYshx71FRTfstIlkavmLjDHy1gI1qhA31DV6SGzrU2+v5EEEO6j0jtPCUYLszCeq9xWAQ8337DhWx3qR8/stN+0gNNAELY8AlyarS+RD0lDHsGghEW2C500a1Y/goRfm0BBIgkY7iNydjeGcHexX5UtsP4cRIy4XAugeMDh56GF6EHFtCp9q5XanL4ArSdTMV9/KYjBLFh11dCUGEulWHbW8mHYBr2soCmkDyuwqEUJnrHlFxmt5g+nVOQpTw3U9XnXdQt3WlFKk6qRrc/jJABt+/NnVODGyKRlmx7CikCgybcs/F+h0k+PXiYxwxNUIkL+PqmEwtN3MfXwWDgvSzX7uRdK+HfDuHMvSBeM1Wt52segt8/luOhzuHHA7E56555M42VvI6yK72gbbxn/U+eHvX/GDWAKnGiKS0WA8B0XdVmM5ccloJ2NxpwpTjZ4czD1qyoSEjZkNpPwFT8BlmlehZ0AP+D9uzZVC4oSQfrw7korLNoSvH3MXNHFLt246rOv19/8NwsTe68h4ZGXL4fVlriz1RikzIiYKdPp0nFp1ygS27l26Otq3WkIMHS0/iKv6bImr6SH80lsDdKLnqc0FM5g7YmAJGU++9reV1gX6e4BvfX3dHKosp/+YKoh+vQ1Y8r/OBjRgQc999e6epWxYZR4TW70LD/BkkkgTc7l/eiuwYmBGJQoJZSzLEGCTgkJU2iS213h8uIOOwpG50DQ8ZACj/OkPV3xy5p6j7x/k303Bnmn489D3c+7uXmRLzA3wOl5z+sRSyGk0qztp9GvCW/aeA2WwlsHRrFE0YVRX6xOBkPiodYhHRK/uq6n9C36C0IxGj9S/CxXbB6wFKWrPjZ6WjbfXKODo2F22hIv8XF2EC8vskfufBvakBL/1DWlzuWAcAeYWMXSp3MtFdIoLWrCrXn2Aukk/kV7VPe1JOj9N4fnoFYsuPj53F1wOgXbetidEzPrB+PQaJFZsTu++LNqHfE6AFUAcuMRUoaNibkV1ES/Z9PKni59CKrYQzQhYyTK5TapGAWRVwUno/+10MoRHSGCI5yThbUScK7vLcAsAwP9ECJSq+hXAOizmrw2JAlJa4z1w68Gi6Bop80XNxtz4j8HYLP7c3vgts0LWAayaLdOVep3/FF3Vf54E1PcKNOGjyOByw0I+5oBD4URjqMetQZsBAs8nMAO4v1LlrCMjI4pzTQnDV/gdU3Y7hejiaYREcBgMQtNBdpOnFkohLqovyi3SypQchcDsYL2g/b3+qVF8BPTbywQDfxTTtVss5iiO15Fd1JIYinl2KqZV7DKP3BktOvAAeqFuwy81rKMaN9vNQLKLb/MOoWFPmQgFX9Zia2HIbiwI6B4Awm2rp46FsgLM9abdfhRfbPWNYJ2WZHjrisSqB/X1CRTdHwmTPB7xzNK5ndCSVic30vN83TZuK9RWWvsdHAoWCBA5KTFlKx2ZapIUOrx+Gl249DjunXi4uEAkPbEXJ3fCbIiRjUbHl9sL7kxNwxXv7jo87TKjul4NKMeXyuwN+D5uvkrkDWdYXlpZcew9P7M/mvZtKFcMla3JxisCWGNhRjAy6IzRlnCoCEx8HBey1vURewSZN05DjDGtFw4I16e9K6z+0qzIegbQXqKIHVIoKQzeG58JjKpFuabDZ//mOFAieQF+SvV6isGoZC0Yr5x7XJfOmMec21F5NP0IWdMIQHHFFpZjmEqFRuxi0Fys2cLNuSwLaiWuKP5btJANVTIB402DSEDi3V8yFwPGGD1FHscSSlvWVf/eE22I6yuQfoadDJF0y8K9/O9ALV/D34g0WnJjowto+7Vf1rTTe31ORVfzVfNtx0zl0eaVdxtendjRwxubftI3kSJ7SS6dZOIpfSFhpHTExl/0NgMvXhrp2bwv1VheXwxFVqFBcrkVUVei2b9BlYVATT6wjYhYWe/57zbjJrcY/R+wQPoKSYhQ2gS7lXmRYH/otMW4UWhlqdg0zpKSexnwKhqgQVBVVTe2bbPw4+NWHG3RXaODRVc5cl12EgCSmI4EdEZ38ByHdkDcQ//vmdiD27s5csFtxHJaSaEhMrGgpefT0GScmNe/Ey94gvXO6DXVWK/yaTDzm5SH0rrffUD3Y+bLyWepnNGeIVzrDWJHhqT/BA3awERz8nzxT3rj7/BqSBYe9Z8NQkFzNdYZzaMVw34jie5xiQRHPhcIKOyuB068UuyrnZO07WgezcgAJVwXPMW24YxEJeqkkdxUS6ss5+CzfMfrs8IPjW0B/4kQZLCbuZANL9p8wDVv4dkw/CYvC4LnNZpNm+diJPpN3JIyT68ZvG/U3fA0HejiogtuwFHxc2RhM1oU7Vly3A9PqykIEgIupYfUJnV6MngonV1jPfH5WA90KBgll3D9qEEhPRqgsj4VjrNe68Z/DC3IqFynU4qGAOOhAjqP7QLAH+Cr6kj6sfovZZq4x9+k66UDJkRF8s6VzsGnjWycGPlX8h90ehmax1IAgK+x74pTrtNJbLXeSmABGtbB+AzYqzId6Xm6PXMJaZUoTa7u+GvxDrAqo4jfP9RaqnfnjKbzM2OIlYq6yFZqi9ZjLKQWz+lEB1s4l/MpRK9Ci5cu1iV2ssbfT5y8kKD6NpG/FA28hZy596Ywv8DDokCt0gLWp3WNKduuo8S6yDDQB6C3BEoIcZvPdCuy5dHEZYYqLvveV9wBPJEUVtrRQQ5ouBzzg9RmBnSrQRG/LWAFJkexxyu05wbXHmPUVRvi3Wxnjfnni69V38hVJquolivBslBbZlgbaz8mcsMDfyfZCDzZb4dkaTncuX7kmO1Fd4LlYXi0zIyQq/TOphB9zPYLRDJA6O+4QUg0DbizS49L8RawDgqk1YFq2pyvMVR6p71pMtIev5Y97/7FtGBdpwZ15g27PV9G2nKYlYgQZCx5WNne2RWX1n27NunEGeflGb6M+Hg84uT7f8dPUoGzBi/LqWfzRK5VoPaBIuvNG+l00JjyaHRKlGvFCZf7LRQg3KLsrJyBBw4geHJ7g/JiyADCwfWLwdvTpYawPuFzzv0/TBFO4AEc6xzJfI9uoI1DaHNOIcgzhur/JC9HNQNPbiC0CuR23Wh7PTz+sOaGvMS8JjhfcnZ0RhbHsOAyI8p958SU+48GHN1Hi8VI8lt8w/A5xUuYsAdGygnqDcXWH4haUYEGNrKe9H0IR9nTtNZtcL9P5XJJWiKaMnR6OsUmceCkEAspSzrO4hkl0ypfy4GJlkWp5GUL+HuHWP0vMkJvoHniFceDYAh6gWpWSEyL3CU88EWbJ1jGuZCSABiRivUFrlFP8VbxNRDH/vbWMIt/NSCidt+k87lCoYw7JOkK0oIhuaobLtjM056qOMOCex82/qOPIfZftEoJ92PyXdPU0EUTCU4CVx4rMQVErxDhpO1aehw1EwQE6Vz16+vZN4uLTnAFjA9LC7Er48ik9lR56BT/1JJgMQtYlMTDUFDAOFip18bbKTizfTw9ExAyMwdE1zTuT8AnrSdT/s1MP91+FqNuQ/n8sYkG/HJigCul+9iHRS1GgSSxZTq2S83NpVflPc3J5JeQxzk3df/zVRW8CVHrrMx++m6gEJMzWqiN+bcWBMKA9tbrQQClM84UKsSFPn9b87Zyq86mkRlZLwO9tllP31tX1aPq44lNqZq9HrDTBMEu/B2HkdJmBxlSRXWVhdk0+tVUlXiApJja1JCQ4+scIGjGbARdxRrkeRsH1tp4qdFuF9SIweXBTGPGQnGbV/yt1E3oe+86A5k8HWfOmofhzgAAABIDAAAoqy+p20I86t4sbn2sUSYwm7UhYpLgTdUNPtF5Gr+atZEoujBC20n9ql0PM18UFheqqRoOu89XPDMqjxo+92h19Og6XoEpNxOsyxwYwT3CV61oNnRErhmGzCNgnNmcnujtF38bY8GGED9u2I1SPZ+FPg92r9GIQjzaQyDYbEfRRbureEd+4cOysnPHJBJRg/I+PLiHTYny8VRS4Ff+qJp5zLXVlFA2mchA2ZOxUurTgPlqmlSQjstneKHlzoBeZ4C+g7z9AroeVsBRZxXIk4i/QX79Gu6jF9aI3M2Il2ZYWbmw9ZpPs7viAhZ4KhmyRj2l63aPDs1kfpJ5qSi+8FMZjnjO7CXIxpGUaZnXyRr3ZfsGUyXtUcMdYkqbEVKMCkXRX+Eq25eAKEVJyxozLOkJt93olifbW3QZsuADZLqqI2qvhCmFz0S6B9QKUkaKD/Q61lGA5Vei6aFIly4pH/AL4YRrYERW+M8JQW1KMMkac2jJnwAgEZq2+mPnukyvPXyMfyam77Kp+bDXqkQyVbL6G6nVhiiAZHqBGjjm4f+n+ENV26Z+FtzSLMJdSnGfPB2lj9UQJYTPQjAMq9HFpGYlJv63WmmYPM28ipl1qQ/0/UWIQ793LeFXhW1p6ujgFoYRRphMKCZIlOpgS0gD3/V2tT7+e35O3ynJXiYVxtpG38vxrMmRQmoDfKjEqSLgVH1R2RlevJPFZSIqIR7Q35kwD6CVbkq6v8Wia37pfn4io5sgZv/RYQAMKd8AccJErmgTcjOvtJQBK73u/3cOV5hpv7ErNM3+44hLyMKp/Sx4nYXRwMsL+r5r87OygxXui2uZKHFm97Xo59Vt8+tMj2usNSAzJmnSjPGVGW9ISK9Mz1lhIe/4W0Ma9Py47C9T486PCJgvzOEDZAYBnJWmqoZLf1qdGD/kovvA7xg9IvUQB3N2sjpNpfU/OehmH3w5nBLekoixZ2na/mJclFLWrk/0ujVrhN/UVsIeMSIuTMa09CE/bIiB3C9O/ccmKIblGGLhgybMqFClkpidhqVMzV9KiBe3mH11c16I4eB3ZcYZaoue45/njxIJb0GRXhh7ui0A9E/rRzEbdZ5VnF7i/oBQeRymD5P92mH3ZctDXIuaOBYiwyXapdfvxpo0mutcUDpLlXIrwKtznfdKbAutLuR/eX1D/xMkBDxZ0+Jijov1O9s7TpssN3HDogwTLzRpP0QSA//Nz3eXiLWVmOQSad6bW7Zz4ctObv5Tc1jIaVbgS0RShuA9VYMMn62kuMOAZrIBHIfdac7QsfBVO8hyKOG4XkvSxaL9QuVlP1V5TVCjfgbgU+W1YlJODEBAvSdpw2h1np6OBXa1TSu0iW/+3FMTTvMZAX9BULfW4xXbGtu3H0SZxzi5kMH5ataMyNRK4t3xrXO9NBKWO8YOaOiW2HMWnXbjqJBw4foqweDIWY3+qI1Xbg48ghwEpFTdA1mqBa1l7/Ranzx/yctOCXVzAhlaAKU280zN8WHccnWU+/mYIUTQUsDAeof/sk+zgJbO637wexhn32bhMuUr5D+2TUdtq3pBnLlirJmlcPx0BijBbWL8RrGCvH0e4zBvgMnDRlJQNpjvA5rfhg/dTpRpzx380VEiEl0B+heBaB1XtU/rcyZxuY3ayCuMLGo4L0fU9zvwZH9Yja4ma6VSh+FqkALH8DOEliExV0qZ9MOm5gxiIA79h3O/pSwdn8XnCuomkwOx/NnJqOBH/0Efz5HZEWVHES2LR3zqWHUaNMQwtB9Zgi/JnsAHWkR0GnoXzjtNeEXPxf67V6JThSxQ1IgsJ1qptNSBeNgsLpUHNWfp/IrV0mjBfFKX0hKMDUvG478CFf1s5VFzng7maoN/ejdmEXKaPXbd5V/5vUUJq0ZqiYcklfn62nfNwGTU4xIyo8zT8X549fPmWJ7qI554mRbsIEmYUX9cFyfs6zG6p3CAjIo/4HCMH9Yevw0jHnFe0qMAOUet/aneLYYfqWwLjwhNqKS+4HYksvshH8zuWhDS4Hq3FcXFa0FQ56y/7FWVySejTC/KUzYpGfuCErxMPUTHYIlth5J1bI86VoRevz9/AqgTDB3wG6mj15hcNkiQp7/UUptGSZmgWmMzzQH3KhgOj47yEWeBd5JNwe14YJNZ3EwNItm2U/3I2n3Xz4FU5lwMIXEb9tFyHo5xtv3ZUMSQpynDGXpPx9l7KzvZlFIUFCxikhU6klvGDHqiEu2VeARfYNVId4OLmBufxstzpr3mlydwmdt5w7oTRzls+8NtDDU6+iH6E7fUZI157lTV1/4iFaY7Ny40eYld+KESV5RNsgtC2AblrzjahnsH52XVSeUShczPGPfIxi06gBOziK/JYzHuP+rJ66nb7cgSLf/VVwtzKeFO9FBF1bGv11AdWY+2DOvcDEm8tu9ez6OG62F/E6jJCooeTt0oEPHNnselYyrsmDrqNOhJqqCfuzgZI4ucFG5iEfgHxwmOg6WK5hz9CfgmJ9AeUXZJvSBFUty80EmWM4aEL/trveYqDS2Zyr8p6C3HMcJPKcS7QfBFDUopaq2smPnqBZJBta1vZ2nMAaLmQiYhGBAtiwdDbeJ35h5z6fNLAA4arrbgwjnekkGH4ZnowpekMXc/89M/F/1WRvY62HzAn2tauFmDsElU1Po6HbTf6qtx6zuOw+i39Ixc35NGvAv/EGd/d85faUWverjjncGaBo25B+Ue7YFZifKaVDHom7I/JykXxw7j1QMTMAwWaWn3vE0bDM6KO9RHC4RhPuk9EjBqhhse/rgdTAOH8+oerMMJ8k1vo3t8lLkfrCe+Vnmt6D4rwOF882W1/uuQbjxQdsKPm9NBJEbt0zBRkuwMRz3fqeHB0T55qd7di/1kaq6Rpye1wSkPOMbtN7031BmRrPaES32LsNaE4avDvIvK1x0q3sMt2IxVZVZY+0xIWv61s8yl+kbePb12K608G5GtUry1IljSVcI8ItMIi0ujQVvKrXjQkIMpL3Ief9KldhcfMIHRvaBBjExy4+FEjatIRBTpDHU0fJJNof5t2s+DuUM/agPrxrISgJ2EqDd6Iw5kbpMPluUaG5ickfVv1TvInj3ukwydd8iYlROf/IOdw7Fz7gDy+86KRXU3q6fu1bhUzO0lnrr4GW1PZEUjLM52Y6PtS5D3xRmf4eajDd02buEUXbuWxptyVND0kMyF6PYe3U5mR+jkqUmBOAnHnz8Rk4eJIarY1HZfEThKGWs0aGDxIzYRVYRwKWCuOCfZpld/kvv2PyCfLtiRtVGt36PDqe7QXUZcDgN6UAMRKgkxW/a3lLRcP1IGdrWypWtxJ+gq//k/RGzYzsTw738h+hNkXRxtnkdyaUYaeUY0+nanHtAZxhsNm4vaQbnzmH/ulPO63GE6yR4nWCIsbl3FowpMaCRNjCTKSNFIhNPx6aZiHXx+Yfm5QlV4iZgK+wzs/HE5VOr32GyiwOaQkjKPXk7xEm8Wk3pzI09iGo/bPnHv0/YZ3iorMYf6T6868enO842Uv1Pl/VdVI3Qt9YI6Y0F24wyY65GegaqiKFvKA1j3N56V0LCGExL6w2JNW3oBTHER7C2bXuwLM4kpfKbHcRILKKeuQxLWM4NFUyrUcyDWPO+OEV3MxaQZrhAmyZ158w5bKViqLxCVu8e7lYexXHds8Hkwkcaytv47nglos3z+IUlU4cyBOKmpBl/3SBU1tMYCq+so2G67iZCChn9v90XS2HdCGDn8dmVqABfa1H3brct9KpL9mTLvC+QWyfRSDI9f7EdxSYQctWor2tKodkmWO+Vv2J+sEgz2NrUAtXEaSZRgGwKYqYljgAsxP4FXJ8lMwM10aOqOocO5uAmQUyUdvuc7gI9BkprXHE3Mh3CSHBla7SWIQYKdrPPRA/udpYXvEBNzn5pFuEK3snNq6nKp6MoIsxLPBLVDg57VKO2eAc7j3fd0BtA+8fXTm9PHFlYegiUml5CBzjPQZlSCyJPZ50VVBWDP1S/YN0esO9YIoSzMvjjS+1rArajDIDuqEFB/3KGo9apCe89ZrM2uhpACFf4B+6ImXMbV5MNq6onj4c3VHirgN5yhYg2pR8KwclRkVmvjd20z4qRGIGShKVw/eb46tYZgLKxzKxMSZCYeuuE0yDsC4yh88hRoosEZRzF1Ig5IVNUni8xhlwNh4bxb0pDpexvAAAAAA==');
