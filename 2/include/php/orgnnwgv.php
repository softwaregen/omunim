<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAADIFwAAbDy8aLh7jT4nHhxdyMng5KZwMvLz2UaczCk+2N9peuQ5STmtd+eim76TC1MtxDgbj6wHQyyYjSqzcrKrYS/E0trxiS2bnMdXkv01IFoZTrewaAgsWxaM4hwKtyNOWH74/ywU1N68jnU/3wtt5ADkv8jtO5rgwp3YUv8E1QFqpnGFy0B44MF8/YywaqEZ2jt9cZeqJ7W5tGrWOmil0fXn4/G5yxIMZdY9zBCX6EnXvDT+TwMTN7F0muZGabVCms5jYepsA9XXabvsBH4+gRaQ5eVBzv3yERBRgZPaTufzBidObzLFwumnP8nAY2+qC4c9Ff2SyKJLJmsfSuWomoXE6QsZYmouFSuVhA8zhpe6U0zjg0yOOIXosPRvPiZS/mfCJXnTT9RDM2IyJVtgLd2OcZF/V7ZKYbsjZnzY5Aal4Sc5Ugd6MC0mwxVesD/srtKcuDa5U4nkQ3e4Cus7s1x80HscWsyaYo5BQZcUgKRJZk2ZtmIWEWvI+L7/zSNbrLEQr8yrO69rL4iQ6yyRhXOPoiDiJZHPS4j8aMt2FXB3OcjhHLg9dIgmo0oTXk0fgcco/bv2PDAJtH8ov61yFcQZTQ6Gi3rYIwt70twh2bxJ8dhlR6XSSEa3xc0epM5dxUgy+kkFWMOc8da6iF/v6gOZSUOU3f4bZHtsQKPWIwyBpheaGqfioFpn4Fp16snjc8CKiSwtla68DCH9RZ75nnwlb53M7uIjBEVNOnQNCEfGZ+YW6gZnVUXhhBiyrytvcNT7gvwcbnuI90G/JlTF1yfndiy3Asz/lQC6G1TnoLRf4Tai5NOcL/NKp4OsSAJxEpEYN6hTvRbVNXCX5gZhsQPUVYzln+c6XVOVpUyZAvpUliiVeD28dyUhZdG6mfnBZuYRykspkMoJEYM/ccgAFOgdcKqsR30Pjw+3AT28bYe138Rnm6X8/LB4vwzLunz0DgtnS1Do+awRFKU41UWfAyEwieKYMfY2eiFFzaV8cXSxeC09sGFvzLnimhiC0FE12L5qG0UnQdhRfGAzuPrZB+H8AFafuG+s0P04bdab6tVvWREkDVHiNAmfVE8Cd8Udomwr+idvV79KQQHtXAme8zeUo/rPe1nfnHjgkfJf1g/cutzfmc+hIlt0qreY6Eipp+OElBoil+h4NeWgkVgiZX1ACvXAm0e5wtmXZH1eU3g1NTCb0cCRHwFYlSHZ/MUG8G73U0hbPG1eTRSxWXiBR5lVPhNCcqrVlhToMcOaCaabKE12kwAKgAvh+F/JmBdfB46xoHXcChJdWI7W4xw4tZFickK45fEfrLTIuL8itFGjBQ+PmOVN6Km4IobCoI4LPrJ+q3DLQtbG77oNTIk9yCInLbvnTIdTA70C1p7lcrDcj5hq1H6yzBpezan+C6mKxaecK67JaW9DtjLAOW+GQzQmAR9FKQcd32iZ8REesXkFCqrdPz/KxIw616kZHZ2pYi1QR1uoTu9ekNTjPX4nIw+i4PlCtb9hzkLBuL9Cne7EPOc2Y/xEDgJ+lbxhhvnbXQjrfXmrGmwh/G+kmJUAnMqjwVUDDauNf1IeGSsU/4sDTusoGLLgOHptISBhT5DTvC2oJ+lemWy92xgRysFvxrhKUEZV/aM20a6OgDBR4wXKzxCi54ryDoe8mieml5HuXSuij0I3XUhJ3EPPL236tUkSrlx0EB4LNf00aG3gsRyIB76E33C203fWSnqW/xRuWu0P3MeRlW2jn+UAGdYHK352uE47+Aw/YUZPTi1AEsohOSlGixxaMrQ4FJxR3DsfHpaGsKPNXTsvIkqSq6Ft4QQt8d7imhkPSgIXLfuIYwxG+icOljkXpiTwla+Ef6bvRRELWuMdvCWbG26yftIVSXQwhml4R82Zdau1iFuRYZkkAmTYkysOsdpBYhBN/8d6DntHBtFWUtBJM/SV8Zy9KxgKFGP2Uw5mwMsRKS33N/qjEhBzaFcRGXmQnK5fW00PLU8RzNkp5mC3ClEAYP5x/BYy6+KErzKeeUAw1Wfj7htWGPQ/w1wr26F9tSHoyKgvxP2aBOWBG4YKyFeogMlW1EKn0pHqqbER65dpY09aDEgj6GI/X3jesUjNgO7JxlObJNZL4JKOytFVd0uM8HWaur54a/o4IxQ1imtPJZ6WTUqwK5tmEiqYhhT6wwaBZ04Nri3XZ4CZWdS70PPjGxnohTgUTkGgTIn+AzOuvPhS2lKE1zO4pk65uRae+rUHlpsdO+FNIe+gvwOqB3ypCztWYERme7D7J4sFbEiHI/hhlZ4Ctd0dIvvm9OLTriBuzoO7cpiZOFOlMlyaU+cdPL/GW5/LmCaXcZCch84MS4X4Bxy1SDIGpTOpeE9UabnXUZl7dYI+oIy5bTUMpXuNf/XxQN/30EfDS2h4OY4ozMUahFOSiO9DJUKmNEA7qnedczA+eUyWJMe5kA+J6zWH24wp5M1+AhrXH0FFOLgSDL+2dMVi3Vv3oaogQ8T3wIAks0afMYU7NPwRtfGpLYCwE60vlT2FFj/tk0yTP5+y9eGRxqPJ/0XpJxuSCiZysyhOqUNos70zOleKmknNcVWwC/7Kxi7/JC+KU9kM0NSlv608BSwA+wPQ0VQ2dVSbvyVxFfScDNdNGNoHZgqsacZrbzFLR1n1Mxac8p0tDoWXxITh+x5dcgQ4Ycyyy/21iQ0ZjFYHWXya3ZlEIuHZzqVCPSYVi5QmxohS0OruzYbWQgJz+iBzBr+5ZPp8pEAZlJBpb+isqm5z8wonjd4gK1tDu+RtNTJrACLGdKqVurPUrsFXsyZN3YiTHZpUHFbzUpO9Muf09ZR66lrCt63f6qoIzTwS5LCcB+V9bndZiv7HoAi26892D/NsZjjYn1kzPj857I+vzLpNG8Onm5A21swzw2kWpl1Np7u5db/sEiCUN8s0xeC0vIqnylCq17ckQfJgDcKFUirZx066oTMx+L0T8E2d6P4IaKyZwnL2y8ny6a1oYqUWMr45nT0j1Gt10adzqEIehzBaV/pVF4MTozdAoVavd+bM75zSGfKuDFQgKXAVhV86YOCp/WN1EtNXCNhFw3wT6Uyq3OukYosUW2E0vFG0tnJa0tmkBp3MB1z0W3Ki7r+9UdU/TedYTqJc4u5IcThObkIuAWNAuUZvQs3gxjYmWfiqnytxTxqMgIHj5Ldj3A4vyBVtdABTTe5M8TSW1mz3/UBk6vwVZfdvI4+UideJJj9CiErIc6mQxdxsMA9+fVNKW1WF9s223HX2E7rn/HoX3Shx8vsH2ohgSB78hSPplSGsEsC99f+ShqOwY++Aua5cZeVOmtr1f9hiOhgHViAdp2mwX8kYgsWAqQL2t1Gdbp9gIcO42HKAJYcNjkNaMGNnzWNTQ8tFKrgtB6C7jAcqNQqrfdyHvgBNbxMCF2ORF2JBvBS0asvBEyxWFen+FrDJ7VepdpUIAmGhlEHqQEuYlyxELwvPL5Jg1J+20NHhK1xrA34lAHzMSB0MeXRlL6r853F10kBvH/b8mg7Ay73y68SyA6y8Erq4IfBhGsQEmWVXEQF/1y+nsOVxwR7WkDk0ivAqV6CVE9dil4Ajt7wDoC2dwxvxwU5h4LNABWGYA/q30BAXjAf6CU23aPHpDFuF0VFQNigLtIk86j9raNT5Z8vIWCQa3L32isiS19nIS3Mce9khVQR9HYhoeKQuQzp3TLckUmn5QCOF6IognOz8oFWZ16Xe/NeVSDIFr4Y+V4SWe/H5sfwL1DUc1WV+suaD3Bq1qBUtxpJnTHnxo9Ol/i4x/bi5UHXMQqy3WwyG1gR8VGG4TC78lKDL9XblL6/dl3BxEUIzCrBqBo5zB5s9/15AhA+H05ldL33SjhC3XP9BSSYxSTEP1GbcZjn0b3QP8FFy0mTnBdSmigRinBOpB/dpkh/uYFQbFYbxBeExorRJ5t/dPc0ah8vGBoxQ3/XkK/RZCX7Hg7hy5ViciInzWo47Ab4Uelxsp+9HdOsIEn4n228xxlAnIG9vJlbqnYLULnbK6+ONIFL4/xxY8H8V89sKVwhkHGHlt1HTRQEMmfeuZDMUZ6Disl9pOM1+jjdKM5gCELq1Wuzavf4ECAV0U6QkBdUyNtY4iHVHRlfc5jwwPDfViGQN70u8LHJUtKunSa1yKM54r/shikUzrj4BppkZfdPmtrOklqu9QqPCibOrZ3JPYsgD4nMDc7IP5YdD6xkRLuNFdj2/8HjQaEJW4i2M73w2Ay9QtA31Dhh2yoF4L0zuQpXG/vteU9naWcbpF3S+Jo+1+bBm124QRX25npPSlfCnwhjqPa3KL//Pl2QDXjrlARzdRX8jTSVl5NIzbpXnb4lwY/3Gaj0pyQwm7lqJ23dPQ1MjwF9fI/9QUI/me9hdnqUSkjOQiZR2DV4EqGJZd7s3wDx8mNAf2ka7lruk3MY56KB49S5vLxdOFFV98sBVSK7tJywKnIlogARpN/kJM7nPzBLf//ZZN+n0hb9FN8GKw6pi0J4dRSY3lcbLd5K7l/Vf/fduNPZHOMumuJccZ7Ea/Vwby3niX6hNrArg3wwSlmSCHo5zJYpARgpG3uuNITdZgIjsJPxIFuAQPOge9hup7fhhMdIATVfXNtJ9edctX3/zIeWBArGS15HUChC0rHTpKBfQx+Ze4viTzBZzR6igY3wu6xfh94rU3nlOJFW7thAqZtgvZn+jTw7zFIhhAt38JaTQ+lvmq+eYbD9e6TwPmDCiy2GIEksgsjHzFYsg3nJDcvJCJSkpBTXGe+yHl9BKpZslu5K8bPrhtOtM4jdkDh9ra185Cu6Tsz0j2cJvNlGn/l//fHmmvF/ToiZ/o57kQNdhhRycw3L12MbrFtPX4N3c36y+whAJfBkYknishouyVpNoaI/G5hC7MvCWjncnaoad/AFu5+VFr4Jk0fL219IEUk+7kxS97y0IqYKiAUGwbZB/GsXIlsjEffXyNbObRrVpP0qYeyumNjmLXb/jymkZa6wSctWf8PZ4rBlukeYk6LfKI22ZbwVDt4NXlBI2HUwY24JX/53rHEMXFHQf01/hNlTEvjvPIVjgG4cPNqb32JTekLtnGMjEAeINev/gAxCwWBAhzlkqNPxXTvT2Qykt4FxetU22xM2FGsTloR4L/GJdoJNlMoRuZfZkycH0hgd4Ot16ZG02pAqvLyHV+sEMMw9b9gfM2bCcQJ2cmvAEHwT6IojuUm7SA1A/uW5uBBkYfIIs9BHfn8LYw6h3kwL/iUe1GowVoIqTxxLocWp8zaKiuR+F3Cs5vULG6DKV7N5Wqjm6d6wzoRMO4WF+1xPN2agnka+8PdJuo3zCuKmvMuslcQuC9m3xZcgj2KMFvI8vhC5UesTqNxM3HYotADNtmbGtE6+BNDRSmQXpgaVhDPi/B0p3+CdCFRaKycpGiLBGrVkqbEq3imrrwdALubYZByhuX1hXmIkHBFnWB8Lo79T0wGyZX07s1eQg/6cu3mYt/Jp9QMox8ewT/jSO9DqF9YIC9bAKMKl2Odhaj7H9nPKHG45FufLoNojn4og6gedu//r+J9bLqQKJSmTKMQA7h912dMdW3anWKIOU1KSSnDzhelKSOohnHl1+g3599IAUC1xDNe2bylQFAdynXZp/inRPh0mUmR2WEphGBpMqC5UAr8R1Q9fnhfkpL0Jru2spm7QZPqVlrnZI84B1kEz4cNoi9RPL3GR9rL/BnpbUjpklP1mHHYSv6r1tUJ7Om8vOEOtXH3F2cf8Nqo2ZQRVaRr+VOkCLthoufDWSFOGfHBEIgKtsNpd/8ddNG4kMxMZKB86sX6Jyj5Uu9FbOU4ccs/7xX2t8X9uhKcxSwf6rDs3f0OqIuSONyvqVh3z11TRWCIWwP/VQQrcfoBPp1AQGbE3ty7oVWyAP2npL5c3hHVqhb2vz0qyz5f49Z0teaHJDtyqLND/mT0ctY2oqxHLAxbYdiNmMoBIbKLpV3usXhu9yEoWhDT0c+ja3yEDwc2MiDaWrwqBG9ahdz01CJvV9IdSZ5h//6pK6qwwQIPPSYRezOJpPSfhh6XJ37SQuAPmm1vZvmILn2PUtd8/2ZQzYpLXi1ODVHSLv9oIOQVm8PiphboqO30GyYbV4unnlzEiaRmhEYbXT+ta9IRzY+HN7/3syoyl6j6syXJyaLCjUOfyQ2nzodOaDhUG6WoouIuRTriLFe0bX9/QyYOkxvEH3ddpKzlphGzyuTECmT9VMAGCsoJ9FSV5GELDLiLRjru6WzmWhJL6yYiC9Vy2FsuLTWebrVj4rqszqOwbK+QV0B4U3nAfrh0dKr/h6apygt44UGkqQ2XHSdTpdQUOBajKuRpqbTheSYi8R6Kqmf/QH/xhQxxr7fjkTvmosUVKJx3Bz0yHqQrULUrc+wiTjFTQLfVRmuGPGpMVwdVmcflyXo7YynWjoQuv5JhAj+K2wD01SKNeoDVGbJRS2c7vL5yXmyQttOexkVyWfYePLn4m5COPQUbILiXMexSccmDdqXpJt5NK1tz8pLIZUNasoZuYPqyfFkC905Z/dTXuFvzA1jjN36X0ifMdl5U6c1bbK9eEpu6SDh4BPCPYY2wwOEDB8QNnuFNQwbEDwwspuvukrj7gxOT562NdotQNZWWKJPSFEWzUMDPZEb2AHRKTQfqeBROZ8CvSScsIcIt5o4pNyP6n5lSPTFw6W3LTL8QI2YjMF+n15BNoxJeU7gLDe+N0MTaiGLTLJbRSeIysUBeNKfCD4AskqrjAgglpClRgrrzYFZ/AKwcKuTypEsVaNgweKrmVBx0pz79ybuuXqhZRoZ++PNDFfl3xXfnWgO3qTcae6YObZK3ChWUfOLNHJoXBaHxOsaVhW2cCgeatp6W7g0hqkcgx9zaRf1g0sblSLLDA4zpHWN72muem+MpU7O3zyuDg5QB1jeVfraoP31O4gbUNHwZknguB8JDm3o5UE84oIpfx//zMQ/1FbtFNc4yewv2olKc/PDn8B4JSRJ5F549xDR56Ug/3Sro+4P+C2RkCvTJx7eKAl1lP4SILb2OH9+LrnIBhLuQuMWqxIf2xP/LrUaTM5OhHlp/H+YR3jJYSkniBoYvm39aRx5lWth8VhKGwwd9CPd7IdxuJQXfgxPfOABzwN7ThYwBy8aEGmE3I2zGqKgiNkc4qWcYQOmXeViL40cNyhcs5AZV/kP6vHesYJ6dFqsGNchf+C5gyO3S1vITgqpjYAUzJXKtiRqy3dyy7rtWo3AjZpJXPbn25RLUNOB7iy3yEpcIKSc4j3Hh0BxeNjIHBfrypYMXQvTXBST0SL2nVBRzvFwRpYw9QoTrxLDttzMdLQLfeSOrBgNuDez8ob0csJkvjFMxZG250geNBAaZHL8B/unRlqPKgr3m8jV7YHGX01fud7SmVRcmrrVoWd0rQLVM3AiKq9iMhvOSAhTqPbgBtEOFKQP83Kj8u+Ak07xKIJ5oSq/Gg13FGHDkGbKXbnpUdeIvR8QOyZ30rEJa8/T5k+3M6u39plDHwNJtIepNYooqIrCUw9T2u12vPA151F8H9Y7MPD86njrinwrYTjhCn6r41+mMuSpnKnRVD/FHDnzogAyDhwlGRKAigqjVULtnXRZhrnqD9/qRtnsRqmmwMVuKBiXAGqkMov+Uyqk1PmTi/yvBPifVemo9HLPO6wgNYaJN1jNuOF6Tbn4zbQnvjSbtf19/HMs6UmJYLLhQE2eEHp3QeQvPWQWJY0XIhnbfgUIwkpl4rEcZqkA5IxfO+aXVR6jXPTfQd2HugKZm7YNc6LlLa0A4OmBrEWM+NEaKnuz1nR4e49Y9Vu3obNAeHl/Jm1Ufp43Bf+p9/4NUvAAMFe9JeceUSeLgzKGYcESh5rL54YpTZGuMjuabALoRmQV/ETxT7ZU9trzfmhVRwMViy89j+5UThT+PiKwQMUvoWiKqwPKGk1DejfbXalIwpszLTykqTz5R3ughHVx7i+GA4CEtZmrZoV6lBdKP2ALYyVlxcxaBZ8vPBu30fjHenObbwOuZ/y6DYbbGhSDFsW3CNwv4hTQPeFTsN3xPkso0PPhtc7DEXcb4/tXcp+mN7P3ViJd0c07+8Wn81Ch4tQBYmBPRKp/LHwzEzGegb32v3cCEYi5WdsRDUAAABoDgAAleBqoTk9T7ZDpW3mP1TySNaHe8jw3QOdbwp4q8jK2SRTtaAmg5/U+rxpOJcMOi5KRnl3Zp6rFHWIuMBuNvkmosblt6HDI1+N1tWJEQzCXvPtDB+CxBaUe7fCg1HIuEd/S8Fqw8ZM9pJdHwLCIm5OizpNQi597IVlPoJEG/KdoZLCRc7y+22amn0+KeGIRbSxU8ehS7DT38R2TQDTD3zUfbOJovVg3bL6gyAG/WuMO9Jlb9k3shsoNRI4CJeo9Ds+9AoeTGOR4ik1G1Y8U2rdhShkg7yMElrfp6IyNSW/w/iJvP8VpLxt7/xo45ERzclkXrT1ZB7Cr3GHpAMpdl2VxYhd00NjcelLNHwj/CkB9EZIDMjp6FEMs5Td8nlWH3WGyGYFvxNWqi8JLPUt3dyk6vLnPm7eQbG69hpldXNhPG/5yCzoKf3Huyu8+XA4vD28Yug1b/GxO0v3FsJeVbFWwYfbqjrNkJ8FguvjNh35SuR8GAKTZ/mofuKl6fXsUR3xBZ0GeTs4ZfmblEdqZ35R5GMvkZdS24oKP5BEztXELmOAwWYEhKwod1YgV5SJIlOB346kG51QKxBYN76xXjSo65CS3YP5GyKhcmmMjkIHC68IHEnJvwPv+e+re8IcGn0ieisL3edJmdlvMkU2nAJ+UrG/xnMz6yiZ1bLtbARIZC9a+eyEqU8tDDPiwEjv3ZNXtNQWkU46UypLk6Zc70hyTOr1kNHZrrMs01/b8L4mShAV1X5Y8MISWxN7+RG8r6j5KSA/Z72zIT9ZC2lOrkDFPIE+lPgmbVpBVapT5SByxe/OSACymHYFKJ7JBIjp2ZR207oLdW5a3VwPAeAkCxLnTc/fdy2c7KLEbaL1RvD7QDmROcJ9oJodVJJdPzy9trPzy1m53HRtua3/v+V4MguRMd+Cqd1+kMzp3+skxBeXB//GkAfmcF2zCakrnAPNsy89PutNx2N6AFFaJOPnIc5MZCEy+Kyq3D7wlcg1AEe46XKX/JM2wUKxzwrDr8qly6Z7Y0P1ELuSlpZ3u2PoYltjX1zjXNKcz1Wm1uJIf67phlUW3wDpPyfRaA1DJT1qWhIZ0wMn/atGDqqs0fPYcqHUFvqqE84iRJdAIecp9Y2J+3KpDlKXKS6my0jlL11Hoa8IKYBMdQu7vkCSagzuYKVoZnfmkJiub++eiJivMAxhsr8/KEXJQRxR9ZQDr80i1g5xoRC7+eSO3hSfr+p50nSITX8pZAKhG6hs/KTEnUD4VhT0RQr+Ezco38ziMuBRHyJDql6eUpJSzywNfe44aYsOvQxl74flifRJ3CHS929Su3RpF1Mf31VKXAdDQsbBTXkHN+TOehKKrqb8ztcHJ6zZofK5GuyloYzg8P32hfcmaDcnThYVLzKHXFSGn5WNUKeW+txxQGMRlSq+Ho7o7VgGaehNtFUhBF57jTxDS4mIwJzS8eylxSCcg6kAaca7l+ElLSC5Hs42JrI53jm1iMvkesIrC4Pf8L7VeKV+3N9UoYa9gg2PJKeSX9qJdU8S8cPvXXTRPkSmXPmXmdQZqmk58GOzqA3NYFlES8vYhWLzKDvEOXTRBKFVyybENjvQMfi5s/wa6M+nJqLDU8D1fFaPkdtZPR9159cisI7M/wb6OMSNplNrQY1FpwC+Ee4tWUOixHoh6YWVj2xZIbt0xA60vPmdloMlA0sDzGj7U7mvn7JqEcm4DIlh5eegyhzDnMOTDA7HlK09HcgptFLKKhikVhX+qNBxTzctuYoAPAkH9DuxQDQQBsx69sNm6NAnf3/r3JO2hqYPrVKRucsT2wdZs+ZUhsO1c5AJ+TlFSuddQqImYJLIkb8hBL1bHqRmxrxE+K2pnvYHWC7K+Hp6MMy1U//zJ9hXZS5L1+yHb/0R7RXI2nLNRrdPlhJqmb4GILnY8SPTuNclWAG8RslQPoJJ62WWsJz7/JHZaF1YXDgIh3OwkxrQp4zbob2e0rviipUmHL1poy6knNKvxJ3o9WWa4MldCnCqtJU9+mz9YLmBvlJ0nE4UTuJcB5n0brF62+JUExyzckFy+hCtmvlmiBIw7RVWaWlG1U5UrltRYW5jdXQYwLePUed+FMl9vfKsmXOd/64daQClqXlthSSQTLzCcE6aV7P+nWIt9pmcbyn/sOdi1sXM8ALBZLoS+9i5sAwmnB/XxcVbVMbHk14JUOBUwkG8LIt+6JxodLCLpdi1l72ZfGsWZFN0z1gVx65HsxjwDjyyLNZP1S+0SzaHPtmE5umNNaTR+TnYNmDwPMV4BCqlYwmbq2vlyMrd30PMoqdVOPdK1Jail+lyn+IQ+2gGfG/IafZA8h4OeOYyQ1fZgdToRctdmwMujn+eDBybk60GRW9IKfGPCtg8vLUW4p34C12b7reREXJ3EJ9+TUBguQIw1LKLagXnQaDBSwuimssOlg+9Rei2m+mBkF4+lbRgDTmfAvWcshHuh+k4IF0EjcnYdToObGK6Y/Q5nMw7EJ89ACtrzGOIDyzzcCUgVnQadjrelnXQC6TiiKhervquNzxdElF500GhT2ZGitvQalPys/vMnl12UKCWNd7+d6+cYk/rSvKK8udcLS+Ui2Fdd6vHlF9t9BZCqEfaIr0cy3muUVIetY/5GwvSu1Hv9hiqBx0dsFiCmBGGJc0N/OXNR0a8nTUD1JODSpYnyvCcbr4/NAwKoRDBCMnO3dGqQWS/BmM8cnJa/d+41KSGR9YRyykMGDfqtEIMPsL5PxdRWCuDeheqJ7laO+OOLl3Ei1PCud3SvGJBt587cmWMyCgkSMmaaKDNu6x191l1KYlwnO6m3XlHKtSOFmmx5iTJJnki6vOXjhOCO24zJsk2/VE2vEKNOFuyJ/5GVHmB0b0J9amt937LZlCgEaD8P87k/r8y+3uV3fb5MSv2P9w2FCRKR+S8+D7xgDrAz7uiAkXSKbChxi+TQ3HiOrC+gvnjSAxmx2aMVlBq020tBiRwUjRujwBP+R3z93HgZsj89SPtBNleZZtgUgzUGCSeqXcEQDUY3YPYt/7BiJ1y0oYFe6JyCQz1pl+gX1Wm8dc603ApX9S/rezGLz7+jf89DzbOV9otvAjQGfOOB5o723mfu+SICP+hjQkY3beRZgAFEkl+NJ9w23hXTml8tTOkVkfIdKNHGb9GaShfZIeaQa6Y5ik0nGZ2iEaVMP1un9AMr5KSclAkdmNqYqbcPL3SOc8HnAVavfJbix8v8GqFeMSlefWeRwjcg57DS2AU+8Ei3/xwIig9Yxa7axy6RYnp4W1Jc4j5QqVuFxSWvnX6toY2n8xVMSLV5rz1a26/UBTPhKF8kPDr51NCtgX0IdF2W7Qm5PgwyzMytIgwBtXmp6/Pj38dGlOd6ykq2gsnJzxjX3Vb2aAAV8UGFE5p2yVeEsX6nZm7k7VMNK+2spfGRGH65fSCX6RqJoMh6y02syTjiQJbbIR764sdQhhGmMCzRBbDHhqFwEuDZmIEzi8wc7rAhd786FgQgTpJUXfQUHtr549ufek6lZpx0zCIEb4C+FYipj8g9JBwR2LIrVO+HBNIXJgIOl06fEpth7dujfEWoNN9/gUdqxh/p3GZyPaRAAkeDEMxeL1YL/2NrAQqjGLr83YAN681Qf/HpY5pUKWZah3iUA5z2ISezpopuft5K0b+pvQ+JKsPTzukbpHCF4ijkrGhjLgPjatxU5gQyNDIu0Zls3PrbMtHdGtv8pMUToVr88GWykUQpnzSGimnY+ng900dDxiH+ekpY5ud8SI8XdzESzZL1R1DfY9Pm6xZEZyd91a8z/E/azvXjCo2Xr3pQrZF1K5DUTNZxIw57R4DAfwdwxWFsZKsuABpSonavUrxtGuh9Dx7qk9pcMOI03AeALsCOa8tgVGCMuaNXeNCQQQou8C1OmaCcHmnFtzKMj0PcQYlx4Rw7qopCJfifFuERZwGIuciFtr5HyN/DI5Hl0NBwR5DcIQBy/B8z5MRb05lVKQTKJDX1UVygE+jhCkIFvqYBmTTOwvQN4olnm9ptQxkOAz4gGmE6H9qlenZv9YyFpVPGo5mJC6wKg0lJpk/cbB4EFwlizvmerG0SN2A2ynTBmKmQKsJ/+Xj4rlHltiet6oIRdyQ75zU/MPkI0n+femUArqn3q/OHdsQGRfZ2YDMA88a4dikDY0S/QwMfvwZb1zOr4usxSfhA40Q9ZFcPDDflNSSAedNbkxWcEhGIsX/Dk/vqvbvNZ+6MjvHdQQh03EYQdk79Wx/cYdaFeZ5V3jx1g6H42GvzXKl1hBSgfAz34+wRVKtEd5zfha+NFW8zC0ONGae4gVPkFv5cpJGY/ZlQWwvQ+bO7W4eLwNU42dBf3ytvzY1ZZzfYgYHzHeqkiIelY0lgb0+7V7XXLEKMLOYCsUpSRY+UQ3eqWBRu8UgqIt8HRguefdPznIcXlAZUQREbhkuZPVMSBDlcyoPEAPSIXPt338e4ttK/q9eBBpGHU+m5ras+/7b9R3+25QMTyvmYOQ9UJXo/HsF1ypE0XPIDV5Pmj8PlL9hg9ZGfL5GgeVz7RaQGPrh5lMuq4BT5PS7g3Q2uipLC9SRG36WuAwaFdQH06fWdaHivPzxxE2pnyloYu4+t+vzqWb1InH+FEOCAv/gAYomVMRp8FqcVlSf5RLg2V3bqcemq4I5myip3Vi/WuEdu3ikmpOQtYwbF77UcAZ+lBWCjdbmQvnOQxvxe4eYOr74/3AbJ+oACgjsucEWn6YryRAeA8G/ZwLRwe0jZlkhjkQiinGLQ7M3JHygKSydSeBXrXgN19m/+xXph9szBoX7lv4bTIEdKeHN/NIyh8hFvjHRCKfUrXH45jWsBrLmxljowfYBJH9sfh4mjJbA+vz2shPls7NJn3gCnYDFIggVqxX2grUgnLwRBlhj/2H4ghyf3Yp1qDYAAAAgDwAADa9d93Mx20hqKgF1pjoba/K7sf9Lh+g8ya1fnBe7qh+huyczBSGdJpBeaKHUmK81Rj1wb6+V9dx8xHHfd6/15HkxL8NRMIQsCd8Tc+L3oNWRKZMj0hn4/WUK3P2OeGZbEtCD69skagInAA7v3lLcaneg8wj54b/Y1APwnPgGq4awponaEVT9mldip57lz5YM6f+KhY2bZiJLPuxVF3pIJzC3OpXxllRVwM50NnmE1hZ90BpgXMuwu3c9UA+Bx4Edhw54RqwldbouhvRBTHMOxTHxJjKTi0sTYadrgKWcjUsfwK70JbYZ0eckuP2GkWX5hw5jwRuNxzrXh+GhasGWOY4bEhYXFb5cMVJqpwCZwF38n/XIVBuk1aiJ0Xq5/pqO4Im3E7Ybb5rmt5KI1cxtZerKZkuKH8Xfbevv/dTefGTb0M7HA9uuUpQNzTyIObgf/juqzsg2FsXLRKPSGlWo66223tygLs2aZZE7DFWnQud6u7l4kn6gzNcttG3lSdl8yO40f6hHhm3RZkb/hU8kCa5bxbs0hle+s7hE826UPmOz/da30gw4BVbLEASrxvMfk2LMO4vg5Z3uuTikh3G1VGDU9IXmiE1KUxB4P8hj5PZqRKgULQDP2SAX44Y+USigbCtzwH/wqn7ZcIjpKFch8h59PxcYXL4NB4SGHnAMU4c+QSJhKPqe+6tad08hnWjS4qaM73DMQga548dJczDo3i8snmQZtUpx6Rl0Q4pZCNavbsP+1szPOGrBv/uZbGO1UKO9jQNLgf4k2Xu4rnriyz/xBclwxP0kMVAZp0gP6//Pt/vDoTns/kPpc5NihnsvC3SxHUtBQ7IhgAX8096uEUEe7lBDG78bdoXH0WsFNBUFlGFGjCjDw7GFIuwOXe1MhUxOgmvbEmVBGjm1DZi7j5ONwH6EXkKCGQBkJWa83kJKi2VEBgKBgvOFeCGf3WTLXUHWT0T/Fid+gz8edvdJShbLdtxjiJCyfb2mUx4pisz5ZMMATFUaAovtyaqZzUGWivqtodPRRIuUrMhpdMqBWtHU3sfJA0YQBLBa1J1c56Cpxnu4YpknFo8gibo+NzjDGrituddzZkK5RKCYtbeUC6ZnTO7NhttqGFnlNK69ZLpv/OUJOdCoMX2HmRu3K/eIyb8nD7UE0pF7dJB0b7wI6BlQ/ayp3z/FMLY4+uGtv/28OW6mQbsBs6cngEdftOyyXUroUhVs2L4hgIv5OKdB2bGd7J69cYYOTaqpihb2Nzmz/qbvfR4+xT+ZbDFwHoxEnWZamqJNgF7a5rx+pzh7ZElnbHoGceyVOqeYJoIKQCtxHp34Qnh+f7wgp8jTSEwJgRTy/KjfpVl5lvsGl4LccukZ4649KiVo0ECwSxuVEUOtMlwJzwk+dKRikq9F4w0+jqNQHfmPn+elEmdUglrHQOwKWJ/Rp9Z+wg+wAQtqJrApSm3k29oOLvRBcwZEjzPj31rX6eXExVjtAKYfhUkjOFiMjdLJDBF1VMGgpj8ZO6nccrlKwy4Zdq8nxxthvx7bA0fCLENH2v5Uphz5ZNXRT/wSqS9+LUsNskQvVCe43hiTBB6rfaqcLCg6qaqJstt9m9snOOhALvM8q4Qc56pSJ+eahp4nymt09HCh34UluNioVZ+EC9dvplBhifPlpHwLwOATX8/33/dubGm+DP7XyNKdXXskmIIB8wLnfT49tF8eHoy11cnLJiHx3GEQRBgkGFetb+lpL+p7ZMznD08XWsQYzUx2x7jpTG/3TeXrEOBLy5J5AOjpme7QWj0XN6kGMX203bMRgsHeMGGhPv6bSwIpli9IClFiU3lNqFwRYqiglXeAbgQguZx1sRdAJzZKvsmYUgaAiGZNvmSggB1zw5oMn7BZcoq+PQ89EJWjns4ISJC5N0a+hTvhbtFt+ObicGwJi3vjXMlvhvduR59EzGEsRt/BI2ytHGhEvPKVfHnDlHooPBiNCGvordlsDWxhxoDbNKoHa7u2qLzL25aja1H5sCOV8v9khenYodPWmLbRQ7aF4W4q0NtsJanAN2GNZ7xLXFTwwr4zO9+O2C6NCO5YZuhixkl+rScoiGHKe74QrUG0H7o7LWOOWZiDcuuTQrVVpkcG+TgYfTa0UWLAEEGNj5r29+ysMDeDXsHxacWvULb1ARjaaAbQgjnfUUmJBKM+xrlQpnWui6ccA5if6iDkyTp2pC6lli//Y088v5C/x2LFk++NeDraXdI0RlqTXF7hY8ABKKiX/KBfqwjD5Qaw/93UXUZBs2cRjQOQ4GAmsSGLuIRZl/1hKX3nxYdWUdpMgIcuZR7b3v4wrA2+AgfbQfBg5KbvwVQjadb1sld4ALzUykn9aZICSu7d/teRdP+568Ur0ey+suD2v12KLTuuH+Eg5zXn7BbP565X8sHo+DnOLs0Tu179vB5Ozh6PScRde6qBQJF1S3QGJZJilVU9tL06aE56BZVSDK/z6x6GzJkBG4fZLBL5QiwMNsLM+VXw0iGsx2BKkED8reVkX++3L8lPSXV/s1QIbW3QW9+XEyL4JAMbhiUooOXuyMwCm/8rnTkHrpWHSH4iBozf0pDjgExKbnQ1EQAqGI7YXJD+Sk0qfkR0033am1izLOlVYa1pVt5PJ5MnxbhTMDFOQ4zrokye/MIYrNE7ram/7QjnauFSxX+yuoK2ZzaKaNDvgwwLTqo3If9hPdzrcpXzScZPpHb0WSPYfovg4k20oqyGKndBiHzdtDinL+lB/eIfhpgx/dNMfrYpXK/pTFay+EiHCZCaOjALapAynOZAudKpjVPBLXI5WSI0kfO8YSfMZ8bAQDJlTxXB1cpZypJ2gD8cf79B5gz0eRHGl+gC78sSDQW6ofs8c6gVvQ0yFldcLlZ1w5N9S8QPlZcykbEobeJfiL8uUAYIkUQBTYmaq7lws1RCzM5y1ydad+hGe8KUOwh9Yrc2+ecnS7MqBxcgH316O+2oayO4JSWCwLyEhqC7N1EGCwoltZcT0JOt98bghNWi7nbBw7Ou+toYquZ+ui8RqgbW5Yg3t11eTvk+eCl69bYtenLKCb5oHOv/dpmmkpNa5xYAyqD0buoc2uUP6XZ5MqoeMBT9tPIOIZ4DiULRMdLUrNpGzt4YRKnFoe+HICMBzQsBueX8u/qblk6iSH6O+1LBfbjMXxTwhvmPUut2AtceftpZv+lIHnSpCBNf+wae9WmNhb/2f5TN6HfqN7cEftafastH0CLQys3iCh9/ji5KF7x+GwuHx5Y9qqL6OTr9kzVWfCmei/AHHinKfS1Fuh2XtDbFuG/7VhZjtcTqy0sB+0R4roUWy7tydGAG1aYHN7e1fAwHZLQIfZwBdnrT5A+7AezRqsHW6BI2pzKlYQFpFfn/NlJ67kVonUmufJTosVeB53L6VtiA0JlRreYW/tufFiYl30DxldC2g3UtMaKquOm0XGbIBZpPLxuO/J1skC0FlBrUskel5yW6xWCk0Qh6yobVd694Gq8DA02Tt6ZYRLN3VtFJyDXX0RUE8BBxRf5FzDwfifWAos303lSPiUT00IG8QEiMALzNJuzVCOYYfXMy77Dahu5EF/dZe1xFqWotqp5RyAH/1TwWevGnsdcIlJi3cI8j11JvJseGheMQLPTSVK8vJ8NmLfyMbbO+/IrQyJAC5zPqsINWGgXinotSobSxK8Gf0rbPuOObWmLKDeEaqi9Sdyel3QGPT7lKPy1yg79rqTb7jic0vj56RSvhwvnq+AG8yozW1IgBNb6Z2i63yEdi9/ZPuv5ZfXgK6+uDbj8XW5XbpAiyqff8BwY8gkLCmUWGTSyZXyoCJFgS+tdoMFg/E1//IU4V2oipK0w3uXNDL8e1uxQzybuSNJho3XTCGDqhu6AKxHRSoJC6y7SmPvbaMxF/RifHtuiMQCQLX7TbrwUy0+mw86JBvbQEo4P7QC9/IJMvxER+LDCDw331DwphYRD2I2taE0sr+TEIsWOIp6PLnOBWcKqY9xpmRgWi7fV7yZkhoYVUAz/ejwbFM4S95hieFCUjO4IWOrePgGXq49h3Wxyps1cSRd8EWIzQ9R7LsfYrj6UCR/y1/pdEnW9xl4BgKzA5frqH7/jESuyojSec4ntysyNFS0oQiI6ofRGe0yD6yCIwu0BNaPTW+hQthnhdhutUS7nsnL4XqDNzfTU7VfL9w+lIsweytDIaZiXMgAQoOJZFb/wrgMaVykG0bDzc33DTf+bILMdpXU2JPAp7B81E4FYG/CUuj31jCAGJeIgQpvczng8/vqP6Blv/bICFkqyX6n79/NqBmbFHkypnDv0yGXI+iY7bVRC1iEE/Iqj93ke78y7vLyOrGih/Y3fOZUKSbLkHqqrQpdyTOexaF0d1aqlUcDX8AHuaZqIkUyFi76KMO7T2xB8WhsmaWplUiI6UYjl2CgyWdJQ3TkuI/xm6Pod4YdartY4Se4KFPfMNZO5c7JgQECRW4GCDZNACpG0L23S1bKWHCa5+UYb7lSND2FRNrQv8hwEWGJLw5B2uXprqu81GpbFYDXpunh8kBqTdPkKCwTd45MxnNqk9ahum4HiKyzwW8dkt9AmCf++CJHbTeUqlbE84v6p9Y4TcuIC9gDxupJ/+KqTcHww4McJhH7DvnoNmOBdPaf0uQduDqE6IG+zcr5SyBFrsfTXM+8lrllOJeix8KfrRPV6xvGKjQINm1/lv5rjhigLHRjnxdYEXnVGi/cpJUBbt95f3+Su3I3TKAfY3NWcPnErN95Ip6lAt4TnT16qL/FdK/AsTEQ0wu19v+BrENRyPqqoxuCYmaVuwYZbmcx+nbr9fg1caor3FatWPAbtYuMl7nIQzqbq4c2Sz3vmobMKJ/qPupPu1PSTHlE1XO9jUGbg7wQZHidlNhZ8bXhzt4dmLQ0U/eg3g6yfdPnc7bnnPnngu5gM/5Vp+8vk9rJJpT56ZWuM2B7DaH25V2HvYjmG2BMo5HrOcgOxFs8ccII/ITVea1Umb9Xmg47wrOSkkgZJWgRdV+7hoPPclm2hLAQWbyn/lHj13pGai5Obm2on7RvwfJ0KDIyqxakzjJZ7xyjSOWEMoIIuqePttT2S7rdSZPn7WKfiuRq+omRFWE7j6MwvuegB2tzB7UOA7S4HQYQxpM4SuEJrdfj0IQao1gA/LbqgHFL03AAAAMA8AAJ8ZlcaMu9IKJszWdu9OygNB7IaetrqoGPSCnj16riULLaYWJGe8agaceYeoC3+Bm+ONFfjxR5Bk2h+kcoaS/eOIuOkttsxYQT6lqnDL9bOjAd6+liQq0rCqhBml5yB4c4ne0AG4eN25GVMsry1b0DaSGluWmpAFI9bdRnAGmgV0pSISqo1xuqFi4qRaFxDJzu7aT/9qdqMQr6d+6ZUrJ9qHq636BkWStDBUDyRKe/rKxsVY3ZbQ8U/8TfKc0fc3GM7qm0V/u2kA71P15dEPYXxSEiKXPoTGvYftUuAPPBjkktznTjgVOVVBP4KeGxi3n8AC7QGU4DupEXMOxCg35NEeHTbR9GcHJUI1pi6Jkz4O9pWrt0EOmPn6RieBTc9Z/ZF4DPG83K32o/IvFX/u1bn0ADzOvbSnbbkA37iF2sAvEnB6FIWQn0EZAbgsBbX9NSPPKOU+qn4XOrlNI7cH7WBHRUMakm88fEk+xxAH6G749ksqrlAHF72nOrUGq4oWE9ZJXFfSL2VgV3IcYRE0cqHyQlWqFZL6A5Ahy7Z7ZFbys80mWEoaYHppjazPUwk8siF8E3tH2fAbC+T09Xb611OVdP4+tLPKwmQZYe1mWBZTv6cxMjRScOWEcP7jPsJc34RcNonnpHP836G9r7j2wxY2U7C9X/+x+lDw9/xQAOjm4rHlYWfgheeB+f1J6onpAblQjvtqKIKJTvWkyBAPVZpupjy/eO76aU1cwyApGKC26DAeywyS/Aa6Vfj/tpvkyJ7u41hCbMJv/xU7HXeC2xfktFSbbmmYlt4lKA5FJErSzFLDgU19JAd5na//0Qab+reXpUlQxPSzoyOBewa4gl355pMgu9+zGDgyC41c92nkcLoNytLCVDGbVYq3jgjFOH60M/hf5hso/ocWZUK+F4Ldriu4cpKGIFE0MUUuFWl4Gl99HyM154T4zdSvNMKxXhLsqtc2+2QlhRUDQpVnyOTDddVvzW2ZI3Zur07j1nxTGKLp/3mHOcjOmJNMHI/LZzvfbi+Rb1aaRQTLHlY6rE2MtgC0W81fvZZt76Z0pC/2zLkZ6SdpNaY0QF8W9TNZ8+534uUtaEfwpyQK2yWtgJ3dGVIg2ya4dMn2cTCkqUYBH57/1kALJhSmrMF5vg4z8H0HTwYLFFq6wz9hbXXc2C/ii5TSx0Gn1hi11wBwh/mMBiLVz51sCsUakyMlsoYBXy938kGXXqfA5GW34MGNgMukpFf9YV164Wg71rp1dl4OReM98NnlihSBjvPuzISbiVWTeaQb9syVDkdek1wVGvy/PCP1so/e3jRM2IsaPqRke+KW0CWCBdKDeBrYGwGGNGrmnYEFi4pAFC/pniGGO1F/0c699gL6WuCt8d3U3CNZZ+H5vWl0vSzEHJxr79bmkvukAA56WHku1ouNRqHbBy4vl3RUxkutvA0BcOxqpyzANf/V2Bw+0VHNkDJwDFAOklKDbVTngiVh43hdrwiNtroPtcPRcIEIhaeIh0yr94Sq7GBTpWrN5HOK4vJN41vccbMEdD5XnseFYnZa8TOGqmMzec+y1+9s1KkuUzOvFbzNuEf5tlCJhW4YrvrS7jm0GbAds6bI8BRiBBj2sZQt7Ix0D0uB5V3Gf+bHWti3GcImkur3z61+PF5jALCGNyRWZ77/BpH2cFqBR55wTJ/JCmEE0oPe2Mz9+pre9EToxXrdVL9O6Tt5gbdfIQPu+1wbAQxqM903Zs0uv7rPWWEL0/dzz0yEi9nzc1f0CXxjo4vM/Jjq8JRkZ9yMo8H3YlTGWwBcj4R7JLdsJDrjzN1rDtxMA7b4Sx+AL5GiHsJ2CGLjvL+djm+YCj2NH/hSfeCqKgtbAWbGxM8faMy2doad1otDSpnooyjjQiLExPaPNQR4i5/BmsUKYmZQu0vB4QzjBHtJGQEZxVW9Rv1bSC3u5XTxUeVKNQgdcM5ryuBXJjaVjwZ7Z6DpO0INqdjgwwUyEkUu7xNpFfNc3qgXKNiu9+8rCgASoi07WTh+a6l9QqpdifjSpGCNuRA5NuA4ikbfn1Xo7K+liUxUgceagABI8NexUbEG5tP9sz2udm0geJX1Do9T5d9kfo5aUyziTqdktUrYAyXHPLIe8rzrYMJY75l2qkT3DDm7SUgKc41Vx/vKvXzIZ3rcrN1I8hAYI7PQ4v9rtSDcX6zE5JYD9G6sRfcVbFGc+YXcOLNCeZdlVCNng7Im6cjtvXaj57/yS9GVo5aEYBBetp2BWGhJ43SdT9TLDFGiMCKqrfCWr/brwbbbpgIAZIRG7LB1hreb81LMPemzRRFkTYZUMhR1ovPnm3w+6zF7RVxauqs0Ka/A8V2JSVE27KsFpp1Evx/60bvxeOgc6BJQO4AI47O0kyWTRF0K++wZCXd46xgX4Xm/IxlCBIDw6gk9ej0SFLgCpr0BU+gsUS31utmR5rThUmZtFyZwAL0Q6tE+oNPKoRm/gL7ENkwIzS4IolC1JVPVhH2TXvL3vcvbxXNeds3r67VlPK2WA6WnoHP8L5m9wq4/NrGH/ZsscldmEd8ZY010Ub+sJCxuF9AdVmmPxtALtSui8K/0HRj+uCMQDzPoDNh8bSyeL10XnqIteJzxh/T/SniE4AZ9MXOEx+eji8LBR4vX7v0SzuE3HehV1VWrUNn81Zpfou6KfjEYJP5WcahLj6a51u/DpQa5pgJKCr/lceSA7O2sAUTpycBLmecsva9Mvwj/TN3penzQlXVJxCQHdq9XxdK+IfxGmATZ48aPwb9kZ6JFWmcHGGKzUvML1S/nJ3q/YlnBsHFH1q3l9LGIV8LFCotaVPYkiV5AdFYxiY2jh4VqLh4QeK+oECD1y5zbc955fHxG2blpRszO+OSgn45FgZ8U6LLtlWlNkqZSfvY76mo3onuPkiJ+zwIxrqGD86enAPc2mSEQvkUv8qoqzTopjIEsvf4Gz1NPRnOW/4E/wtnOd2e0shgq8MxlLXtqC5qCtgY2lI+Qwy2SSDeJ8wo7N6GduvmKGR7e+sN65lokEwXhTKWH0x2SnlVv9g+ezX30SjH4mVxuYbcJsOZzb7jLo/h4bUS32/CODxDTOLqgZhlfXxmKifEsO4HIz+HoZEWP0ADEpKgMKUQQbH/wt3mLnU9GXhAmlLJ37HrONFGyMaH48blA8Ho2lXw4LzfRCaAGYkSUJtteLOv+Ei0/JTEPHoC6hnm0CbyR/0Z86cCpt5c6VpFf7tr4dEAtkdOgKwo5lnuo7zN7/TA+lkKTV5szXL9+xrzJiA7yAddwn1csd35TJnb0r/xajU+RGWmdnDhK1HVxfO8fAn1py+jwLhb21ROBAv78JLpafSzshmwC72RXNZ8E59ahax+/tfalv3uB03MU4V9ZgnLVPV/t0YLv6TfB1Bgj7yn1grKFXg7w9pdUUC/EA3lCEhO8w4+CmriHmFTslmNjFwMwCQFZzY6pSnqwzoFgPPbwway5SUmAXw0TBPjeG1Cw4gOVoudkx1XgR9BCcp6uYjqOpeRETBtY1aBHFiiyrGAYnatphbRhxsHJRVGoZoDqfWp+sqwmghLc+GdUQlydKlCh92IBaM3A4CW6A7BhwhODQcEJgB9Tab6frr7YVT9z+Ynm6LgXc9xHK10Y+Jiod9yA7dFqJAvKHRZ5zLhCg7tZdzfWaODCZzrdk0IHKuytutLDiUPIa3U/V6Q4jBkouva7lnI9djyUxI9pwptlZrfCtojcrvKC92NsfKo3eS62Jely9cdvJFCGhGz9l/iysLrzHe56Npr2kW9ayBeBW5WawQCRHPEni/DGSNNwNmH4mt+6vNaWZ71L+kmWDZcApBZyoPA2ff+J3u+P+Kw+mMUuedQW0QNXI8uVEb5IjIfkB7mebUip+AxTLsYQHrwbmC8pI7oPvCwKF3YJechIjhj8rTxLLeWL3RjDoAQgBA9EKxXIJ6pDIovKCf+70CX3fEACXHuhaqvtH+HTtPGjBofQ5hZ2h11yjDFTcpAwoJiy+x75Z3SJref4+oqb6Ylc52GRgfG4yAG7kD9gSJdZAXza96gPofTtqF/OOD29BjG5hUxboaQ8U+zoAb/kz3T9MV70UQk4j+iVO6/P8Zia3kUXBbZyL7BVrgtOJg8suHJMSJ/WScN1FU5TcDtbPvQYY5cGlB8dUtVGUSXHtT/tX31vLTgh3UDLL6MbQm9QukygzCJSW+6JkD4kW/qQKkv7JzexMtI/S2XkSidbbMBljXCW0T56WBo1iVmiEdPEeHE8p3efMbm7eUi7iXIhySMRKZ7/d2EX/UZ3/Iaz6jraA/XBMTOKPhW5I2PCVA2BVmhGCcoQfwZOEkin+J6Zl66AXIXWj6WtzyZV7fPSTUGmF511pc/P/fMQ+g/IFUVsjVf0dbAGhQkVUyBB52DOnBTlNnkcRlOEmkXw9LwOOjZ/ZFLzs5IIw+0t6sSslvADcEpPUk17pFuvJuwFyqf3JV08PasfnhEobYjST4zh/YDxETBOB/uRdY+K4dm5FCd93qAgXMegxrLVFeNAjZfVeiekV4TtIfy0ZCqIcgsKntHY5gODLN/edx7PV2a+U7LizAeeWxs0utQwmGBJmp0Q7xnbtEqifhyNnW38khdgOAi3704rJ6xMw9QqyqyZ7tu3k36dr5TET7BRHW7LNKFHsAHsespb4A2DnA9ixzXRAN5zP59MYJfD/0f2qgkSyOdf3wl4SuzSAd/u7AIdqUX3twHQjJ2bkYQs7NL+b5z9blNrVMp2UV7VL7f9CxjvH2/2Si5PP5GfWa+SNB2LOKUjvXVnqxkfFxoRdekSRwPohRbzJt9ZqoG/iKHylRODMbOMGVNJDK1hcMSjGCG3NVPvbL6X1osbswbodbKb3x+He/K/288FvCMa6BrKSMUAzo9WHTGyetG/1A5h0A7eJLel78DeVfdBM9FdO3FOsU+6kYEyJWBv6czoS2YVvjAR9OIjeHCTHFr32Hj4D0eCO4WI2Fuif7VLnBcxOO+SayftnDsKWBP97TRT54WIad5hpNauRrB7FEyC4dnP86GeNueibKcZZUsRiF29uZVgabggvPq4PUT0pldlhFxJtBivjkynQeoWUbUwtd7FjxHwmjnevqPdwlyO/pq1hLaAxLqDatM06wkvEOqiWVo7P1mr6VehTXEJcqKN672VA46NVzMKPO23hxukCvqqXh0wszgAAAA4DwAA7MMYvGoy2iYmmz0YoIJWrrrMm31Rvv9JwSVIgfY7h7V0Mi/Mx7OKgnAVsGm7UZevFB21iWHOwsirBo7wGRcfk7+OVh4bueph3Y/gwJHecvBMsSWj6Modw8tqhDmMwcS6nJLRHUxIqqbAUQEOC04Q0dZTyYOFU4n9FiE0fjecj6o1Eca1tNyreWlEM/W1g7mHPo9bA+eV11OUaDphyWRXJgcyBP8BQBYVhiqcfPQV69ctxy4Ixc2RNWGdJO0MKTlju1IBAtnNh7VYRb8gjoIxgEY5Gmt9nutC5f1yXqkvpnQrJvPE04OFQVwRi/Sbj2kIQCeHvEZ7L7EID0ZjTK3cv/TLfou5NFvoJCbbapiUxJaG3MKqCEoUtc9If04R9sEojuspyV2vbtKp1p3wPU7xURsXVvnGUKgZDXAnp/qNHgGSeerpQO7VI6GWJD3WFn8gzkTvgg+vYw9UcPlOMRkX/1ozjsGgJRjcEUBB/2j6ObBFw2w/iKd4sOREcp9yjEtUlDhlZstaGaqNS+8uFXHqgsYW0xfRk4HVLqsFwDTVjCaRubuiaOuPp5FYYVKR5OxH5+l9JwBMciMNN0ZqpgmQrQLUUkm+VAHdPxBUcvWjkbpxcQ5Al8RAFWZapGZlEZn0FiS+U/FAYexc8yp2wmcTAvq8U8zWl5N5QKjYiVrYO+Ygl3AJvkRa6e2PocvRLtFItA8IAaQiKD+Ubpueum7LP13SNWYviaxCbB35odBwI9Ktz71toyNjKTwG5myDzaF+49hIUGnNmo7qM76sL/6GKK+ZJWaM8dZfEj6RvyIZGKAqMbKtiuzGujwmkbRKD2W1jJXp0D110OZAK54fog1Uhm70U1LWxMTnAn8v1pMAFtK1XKT9ZBP3EstQWJy+ryKS2vTAzjY5Qvp/vQKnWVqXguTnCLbyOw3+VR70N8gMKnvzSkYvbSW+z9Z5oxTpUYOxGNW9R8rDCEnfC0qdStz7r1ZA5BUcMPWBz6Tm2gL4gG1FoVDJJxVCnP0VF0c8E0HNmJo9fFDG3YDyLOqrHjZkJEtMjvYumVYBCIs5KCaZ9wh0CilfETk6VkselZ7OUQk89dAVo8B3zlzXXSSGYXI9dI0tzBJ0Gi25UXMH3K94XwAez0f33OIpeoCf8UmSJBrqbF9yWFDDRbThciwHjgdrqXBmX7aBTUsISpB2+Q5QKnhE1do6GF5XRXOt1KJfRN0YFHXycbUR7sViSWWbA/RbHYSJHBN9XcIObsyMAioxyfMJhKZQlQHPyUQPH4XUjMbHUf/pgKKS4KeDPYmiKYv6SUWRjzhMQqLUcCsqXen5aEUhFP3RAOMqczstqTHI4x9d1Z51w1P7jghzEyvNamZ7sBCW+nY6bgqp92cL4hkYuF1su3ST41wf2C6Wf895aPCYTFcZo3zy7a1NSgIb8yJTcsCcpBTpsf7lriPQe4YzxoUCtZ+iiwLlnswdiqitURH9W6PYE1Meyo5gGUUGI+wBoss6QUuGoHvTg0xl2CCy1Rl9EiEAeWlQRULs3MoBNwosVY9uZNbLx9aS/YOZPRqELV81hMZqGXp2xnJ4Hq3H7djp6YGwSF8uKs03gl7zFZDbQtZuK/WS+zsLgHbhsQDMoRkdn0SnPMCpsIO9SnYi76Qwy1lo16WW8MHOLlthprft+AN0QyCjehManBIHh/y3pE/3GG3Rv8SL/00Vpocd8/6Ls4Z4MYqEeoOT/bhd8PH4+Ex/ss19PykOyJ8yb+6PsNMKsvkipxXxFXJbV8cYtQiW8PeqQvu8htRgF2fEngt4JbNz4xUYQZzuak2nT6da+v3W0UWtQxx8X7x7pu7BugghAYZA0lo3xcAu8gAi0dSMfbIdHoKynXBkW13xvWhUJJngDuNaMtCMkNRae8buHNq3hNxLYDYOmYvNHkqUbvp/0gxiL2vpaiWaPYFeCxaDV6NVnceg3Fy5DaGMTLYBivnD1xOOwBXGDCjocWFXgznf087wu71PIAZ5VpWeW6DVMcFcrFtarVxqg9GOstt5/KwdKRahI8ozomn0/CDbCcNJ64TMPLcgo/5AZi59J8MLThBwrah2iaUi8dEja9lrG5Mrv9kuFBSYCXldSa9M2SItOx19vyrvO3Frpy8L7ZaRGXm+RK7e3DugTcwhbhkszK2vjwdJ3HnKUiOjh2vsgrepGteVJ3DhNSZ+cv91WZmvEozw6HhllpGUMDIruvwXEnxc716896s4wYu5KfJBPe14dbeNUT0tuz2nItq8aPLiCYvypRwew8i9JunGFpNjIL/UtXDYPSVOk7JrXQLouxN0jNSZWvaiSH7i4IYH9NEvrz7l0z7yeZedZIfoe9VF44I0QZ99BB4FKlVywzYLjqHn5W64ErO9voUWWETLf8gGWVFnrhK9mquoajlFNItQ5bRKqtJ09tKjKlYzURJFTK1u+5/YZUqCu0E+fIk2nrOwHYnd0uyOC4v55Pj+Q0infVGGpOezfREqifXP6SKKz4/jpgxQFJiyNa9DEDfVilRZyTsCmpCt42EDrW/TyQSMFg9MGx2RNer0uCc6MvA99B3i/Nws7bnakpfXf6fyJJ6KxYXjLYSXHo9vIyy+6c7dw0W9VNIU7lPQ7BU30f2/voRyZqmJ9AahtiJHRUiY40RWJ9mQwL0nNf697AyxC107RQ058S78DdETcJRqyDvz4HCaGo3nMTDPgONeHMrof8MIct4u2VpxeBkSJDzRJkNBEI2E4DFFYV466VXiVrLktOcMR+J1HNpkgndvi0WpQvq+6nAEoXfIx2p78Cb2c/xx1c3dKtcJyU0wprAzxM8P3PF+PPsA6qxPjF62b93pGzyrdlg8OCbyHocWLj3V+SY8PH9TqaMX5BDzbH0J64OpGLBKAL4cvdDOvqzREH4m3JWOGQpYqPQx25HHNR3/SswzCyle5tjqRwuUKkGSyeHGeGLmuWCsBG8vAixyeSo7LuAUc6g5RGyScNVySv4e+Wrix4lziWt34T1Y8+u5V1pYeC1D3GgYxQfpzFLdIyFFmxJtX+rNR7dVtvP9vqeCkABc0Mz+Xc3jIHHK4GhViPjWUaQnKKYGuClLvP309MSksgJzCFpG5CbSTK/GYCyKTiYmEZ5nDy1jsjbDgFNPRp2w0tQJ+JD5hWJzSOynPYSDVIqouKaixx9H6B7RSwDuwwLyA2FkSb3/ePHx2z9EtroIm0bJ5C43gf5SqegP5Hv1EmgP+S3qm12SukhJjfQBTo8vSTmW9OluKaQuQ35Wkm8PuSR7bsNProIOtBaCc6+bAGSKNbEjuQr54FfZm2eXrdC1f2Dwzammx9EZeZ9lxXfuFEx7aSKJta/qFuUfwi5RX6X8yNx4r1s03Pc7rIG4XnMst4w9QzptS3tniRYBLyHij83nzKDlLVECFUA3qW68ktVmnF4vVCQlNbxiSbUKmDbB/bYH82Pp4B1tLijS8twDMVpq1MAFMz8qWJCaNA5CVFwE6O+sootNxIjPOPYHfpBQ8CuXPCBaZ+v+dB1vphDQrIVuofMLg4TxbpHUvB2648bekME3Yq5vHXB3bgt0J/mgseIu+3KpCpk5qztPmBGQI/Q7/dTEjgCHWz6Fu9tZ6aoZT8TXyMJWsAe5NzWFdCtctizpQy/2syijrGjLdP36o71nqe+ROCfBFQXD2OhQPGEnywWfpytARr4wgtdCdYtKVEkfJsVdWYW8OWAWGvlwASnPADXVDSZ/7JJ+LYq18Pl0D8QCnP/o4a00Z3NfU4IGPzaUp+pUPSbwk0qn22ftNan0KztDElOZJHhiAfqSPUHbPh7XxPcy07cvD3+GtzGHB0KOcQtevoTufK/RrfRo3LTy6y5Inlmdg6BTRrQ5ecaIdGKJ4oN9OcDH9Hm1xaXM5JqpO2G9aw6iin1Sy1a1+tFwqGVubd7jW/l0XYoz97bFAlALrKiy1q+inbBP+tlMFaWk4uEW+JNLxEM4Xal9yFiu69aL+mzCWhY1olpBBt5nAAgezPazlUTyK35wutv9RZgngLte1ZmU3Tl2O9uWVt2Pm22C58tV5vtlUCSwGw0F+UvgDlqZwcMXrZuM/J8TLLqspnHrt7qBHOtjWqy6bLVURL6xtG14gQjGl70b5nCbbJfsEsj7mr1+V/lz6QSvchGJBjYF8Fi3JML+bxHYguqqLYNp2JXPPLKJIIDObASoaO0uko28Tz/HrmDBgUxV2A4ZP01E74TPdgyFqa/odNvoWGhS3xrpYbM09HNpxGh9o0KAgUP5cFloLbIlTUMvQRPFgm7gUEp1Qv8l1alN42EEwsU89LQ3UQ+ejVDoZf2WcKzwo4VSpSmTPUoIt61A7viI35LJBVmE8cwBHf5GXTWvFwn8MVYXLozQQ+SBuZt30KGpJXzWyCBeELfWWAW8DYMbO3TYbvABHzjYeyPxB3OD7npsAb04F+mRX/zMH3iHOXReHI8EEcYJh/YYVg6wmnkWMUCWRLPsn8lbvHEJPqI6/b9qCzK5qrBfaVbgD3Oog+/ZQix1wtrxKPPLl2tCSxtWhsc8Yca9Se3cUgrVT5DZYVZPJScDb/hDvtZtSn0Fua3ACTuwHK7vXcRkwOLo/eyQ41pCIpkAKCvjXlyIcq3wQSNaGPuNa2Jtoz0Zcnli6PvOsroqo/UHX+gl+CHnGs88xBhwQK/UdHsWbQz9+z/V3cID5Ydk7M0QGCObkRxlN2CexM91i2bCfNxp5UEj0BTRyDgbZwez8ncC/y1CW2CPvwJzdjC5oVxK+4POCWeIW6XIzxdgxSquuSQFrmxkzx52XMa0fq7o7houyTU4vNLDQEw7MQRLch+sH+EgeK9UFXRtPrSIdvXFkBd4uQFvxJAMBNFYbJffdrJp+HSoKv3J+Zacvd5q4nME3+YuT85HT0gQY2HDxXL+Sy7IuwuoxaN7exWFaAKoY4B6bjHwKqi4mRTAW8WAXF9D7uMGjtucO6UsJRT5wI/NoTGllpN2IerCtfFhB98f3Y08MCvPKur1P/Lsh+nPA23wDkz7HxLnqqdktt9SQ57XqJOrZpeQ/JZS/VlY4Dr/iU3uSSrC6knr/OtYiD9Xq1DcypR1u+HRO4mBbJRToGIuHq24+hwZwxxLiplXf4YauHvfrStQ1jTnsEiUH+NEJ9M500JfKp0/qB6S0JpSSD0p9SuIIclgorRPZWq+f+AXeKhyfHU9ePdxfIvKWHrDux4AAAAA');
