<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAADAEwAAHgIWoFtKbAw3bMvCasnXJuAUMMGQZfXrRNxjiww7bYRrq7NWaswSaHNQ+/bTkQMqetfl9tU+U8JV3kmihuzkZWvJcCPbdRwhu78OGCa1XslI+sn3T2i6uP5eWVz2tp7djSuAJg1aAipSncj7KHrXx13JY1ervt0TvqgzdehaIPGUK4/PnCcqBg7tf+/zl+OgYv5CyesAxV3NXjqANVAOrKsAhYxgv5YQifk4gDOGbWRSyJNnBPuMIWjP0fqCMsGhev6e4YyEjJ8tuzi/Rip4PZx5j4wJmmbh1kDaVqoA9O2tHfPOOuxSqfxbmmceywu7UUdkUtu1GPEZDDCRY7+OoyfDy10R3pQSZlhZIuRXQp5aJUyLR0yaD6kvmkxNPeXIpI/EcSFyjjXdJ3yDiNjSs3QRVCY5CuJcw3NISOOxpqRewF+Vx2tLq70RalzNrdOKOu/iaoGbKmLK83MJh2zTOl7Hp8XLtPfKLWmoFQ4xgfG7HIed3JdF85aDHPTrmq9EnnK6b1VaH4j+nEwEuZcZirxqyUvXu+7TJZhepnyDrjfMc0DAF7QjL6dP3E7U0mAa7u5+Iq5kZl2Z7JLtksZipRpgKsl4D2N0HAVVGm7iPJfBfGhfTY8V0NNdfFxgSQFnf6nRrg8bEc1BiQ7IabX0+FGn89pnAZgdgp4+C5DU8H1VIb+0No3MYGypuI+RF12/ZWOMU0wyZD7ywbsxRd78coyeWjTTCEjsHZrjM7t9RFn40+p8OTymH50OHPkao8xeF4aQTB2sJVlB2WVmPkVJUrbTldQgfX87Y029cUMuXWZ0VXJJKwcKuIQ97k01CVXIpge47gbnBLxjg7eaNY3yIrPRdFtBCJpG9caKwIsJHACpX1jWi2DE9MoJuXBpGVRhUr2RKOTtl/Tej1gPeL+iE5GXwRzVRrVTXk0Tc8KgWequTer3UPoCEz8R5Vg+qnIl97A6XKaE8hosruWGZKfdT6XH4ksnmly37yCq7O1eijHUPhUrZSCUukJE9UyDbEkg0Uzb8yhCb7Dzsn4em+7xCr6UVybhaGVfajkqb89fCdz4wUH1XUV0SawGxTH9HUPS5jOcA3pv8Pm4gUtjkVm7WV27nPYfn2f2fWAIuaDwzV6JyZ+XnkiD/Q0Ev4OWctPQSDnRer3q6cbRBBlMsc1aAV9pSjp1Ii2zdqOgOSlRxSpNa7CzCcA8a/Mnte3jMus4TiGVJlBY/5HSVl4Eg2KIl9SUKMjms2j23mUh8njh51GT0vx33DNodl6LHoal1oriw91SZnnEQrM61KFuxw1BT4mgA1r6B2VhFK6kjv7OIXtSCOrO/5qxnPCJ5HQ85tn2vEKIMNIl2l5sS2Dr35SwpD7PE0omz4NZ2u891B3wREAvMV0mKz6m/WpLHyq5y53zOre0iUqFVya3hnBox1k4HUgTfgnIkhpIvvfYWnjPSyRQpvgetA8tSz4yHNnR1HimRazvZ6rbLklOIb3cQNdVd/aH9mX5TD/BK7xr71ORzJP9XgPFRIH4XpBkLHLa3Jt8G09vgTiNRM1ebuygMFPc4elK5oZJJp986sdV1NJrn2tpQUAfKcU1bRux0INS2c8gr/tf4Ek4BEMps6mVFUxyQUWu0rc3HVhSzw3WFq6D7JBcGVG8pJjpJCfCwWUW66hLFe+WUnrgXX7bdVLdaX1ZMd76YY+QJj/ljIVDWfm9zsmNKZ4WuLE1BXcNkoxqPm+b0w1+0eADD1fCKODaow6r2t8y/yWFwI/31a7dhxLu2InQFp1sORoHgUJYiYfRjuKRCmjN2B/MCPwO7BE0Es8Vb/dniBhwsbQrs1C3wkf5yP2UCj+2vmqqw76CXPBvm/hOQaItCmvxdbD02p8eEAAAOEO4o56A9XXVDCxIlRrGWAR+2065lLC/XPqn4GGyIB75KZzNPKZ18N/OSWxEbdT4obscy03OGkVDvXRbqmuwz0xMng+dF00LzwJv/42mV1Y5l51daWVXLkdZAmtZqF9mF895XKcJ5ufGZWVusbJlMWRYfH41mlFBYT/T+B9w9+AHdl2vLfEGklF53JLgCrgXl6vfIyL/l4GSNCsRmdP+Q5NrWUYroCX1bAd148gZHI8W2fw0Q/Qmgci8jNlwGRlkQ3yNPlvDDuE9WqiD/AxXFLmQiYjNwLOu8eu8F4zkRunKrf7zY7OOv/pl67S4P28/e+O4M5VoBydSD+JWlzIjz1ZmxKq0kK0cMhWp+a6zCJiN93kDshb9WDiQ2JWgCOOXUh8NwURxj/GWzc7c6loIZfFr5JHOFR0g9yZPdx6+2lOg+rTub7ArKcjOngJPDANI6jtVo+Hqb6I0qjp9Xs0BPpNByXkgcG6kB034a3jtHdJHmHxRKjfVWnNP4RKXeTUhY1EQ/XcY81KpZpUe8w3sKHCQlm2p/BN8qgifbyPwAkARR44+01YhdkHllCZ5JFILZfi51u1y4qvO5xTtSVmWd4MyVcFUoSxI/8jD5343IMdkl6yPRjT0gk89/izpotkvbasKlnhmEsx+tt79ZDEtpF24rT4Ha/dwDpphjEdMXYFctrCj/NBI+HG07Brt2yMObMfQ1E2EJsCDHizPN1aJA7K01u7pYllK0U2nG/1WggQPUb5kLNDYpHxU1nzzFGhF1MxgujDJEAeSMBssPQbYvomtjneio7SGii00XjLWseVNoJhqCsh5LrqPq0UE6kX3nPzAg+FxPsGQPiUBPOS09UO1DF/TNRA9a6FXHNvauBKsHSq6kBjfr6/IBzQrR/FvQrfe+D+b+TaOXK+dh/r8Kh+qPmP03olwC+DZvAQhoh93Zz0dS4P12ZbcgEFwF61wDEqC/gy4QEIHu/10XnxdrvbIaxxd5KtSSW7UmvnX3+TB7jNms412/X1OvxJnApqO1+zQhSD9IxBVQyRndPNHfy9bZjJRJeg+mkzOH5LjVWvuB1LFJ+Xi89/sFp4Gk6ZUCR7LOe0JfRD6dR5vdjrqcZaliD+zQ45s2+egQ295EpAkg/HPvnSokjBNvagMrAITN9Qzn9p0LjdyNG+oUmyz4djjltL74KHEQgIxovjlJbLYD2Y0HeNWaG+ryD8N+r955+7IqOxRF1CQmGJ8d2e8GEV7byldJHETSn6L841Cd4B+WIZ7ChkBbf9iB5qYwu497UgcObeEuc35PcBfS/d2v6mGd5CIAZTpKFwtiZ9jWT/hWREQ4MvCBGuutzI8C+Ls57Knf9axflSpnjVWdsTxjUAsXXZNtRD+GWff6VucyKbzlZckz5NM2tfxiIKTA2xtWL42PbWlJnjaaJTFqyWHTeLXkpF5jkIloQx8+NRP122DvHoPT3CbnglthGC2QRNRsv6YnFCYuqdrqzvQ+NR5jHmoKYrDLnz4P8Hlxj8qdSikU67ZntR+OSCoiTUO1R3I+fcEMaJjxtv8WtBP4Z+QDTzPmYq8NA/IUroPg9nmwLt0mbsAD3ohBCLcmQPGHLk5nx1M+5XDbaB6zjzhlmVDYaR1rnpIirN1WNH6Ad9dabKFA/i4zFF5SgBbZlDjEH1TAcoNcSIFNH1x5G6ChRLHOURy6PLnNXpYfNwO4SPLKNeDj+llTAhYUgTLFzblpIwFZiE9IcdCNgGWSWfht+RvhB6eZYW40kx4VW/Idp5/Y3diKrNkNMBz9Jn1UvHQje4ngwv7znUOaWCkjrvqCw0SkkUa1NJmC2ksHHk7gdhIql0HD/5YVZquTqgJHd2LGJOf3wR/bwmDEnTOEcPrknS0QnVnqiy9KyKOrmgFSe6z+FGmCl0ePzTg04TrMflr71noenx8TL8sCHRCakLmwgeOdqABTv0WGKglbfOEwx/awQ9V8J/IjD31BBNJ5Im2DIg/eshy20fQ8flMAwJ73S3dLS28VqHlJW61QOg+FqdvLmZJQC5pI6hXmpCkHN5CtIQMdgtyVqtkKwVpBhQcAjH1LL6wPaBiHzc1Ba40dQ5GV/5MTQPVTbt5d+uztHzK7rpkyRvlCbWyPClZQHfqAPVM8GKRQGgQH8sut6GZa5PO7NBbQPR2WpK02zcH20N/5q2H3UHO4/VfSpuKFM43u6mhAuCEqgH/zcBFH+4tVvc7hyAlnxfRJ0ZfBdY3e4a6EFkI+DTFGHcZz3gwVj5Q9FdT2SSRAIrauIpqlz7KkohPifRVOjoW0RqDLY42smYPGcWA13p4zpcKVzikU7MClqZ3aNZ03rBQMPMWSKG2dd3MTf4a8v+UzPcOjVBcLDAMPC2UwlZpsXTj3PEq8+WDS6Tc6D62KpNJG+KMiO5MgFpPS3ZE0fXSvCcq8TnQgXaaHBBgmyyuK9v1N8iSddIHjxqnnCZgtQO3QHlpMBSaBERt57g90nP1pkYKUQDVsOUTqHvK7iuW2Xn4TvCpSpRZjWeVaLsd8MVI/J4PFvHXrq1x0Op5b83yjjX7iHDF1Hr6W3z7NWZnqnp3U56uIMp4EdzQYmaY+bmvZzSazFH7qfQVC5OLl95xrnYOKTl98Lx56capOdZOiJKlFg97G8s7T5RaBHmLohAAo5Mrt+6jNZesUM0m/FinZ01EDI/BH/jRiEGb/M12vAml9EBH4b68s1BxVk2/9sFP1UVenNokXHEQ2BpD+1LzLEmVMma/mk82roePBW+O8alDmRez27uwgujnzm2uGRoVUgeENZ1DEvE6WVZwx5g/ALRtccCehcRuntKgrIC+LGCfXSY8nEOcY5j8PkIxt7+6HtC7K7LMOIabI8jZ6Y2a5i1qYmolw8WSp6O5gYLdgo+nKghUjavS92QqnaNuQUMT59KH4O87Duh9vXcWUDzB5YqT4SUNfScZBprBxrtEjz1zEj56hnO+kQwWoqiFc+6XO1vw3vASMrjxbRponSRznRlE9pjzoB09faRFyLDSpoRzm272TYrd+eu0z4mleaxGHfXSllK140fdKj5E6NjMAUVLsx/ogjf5pdWysVhMY4G++vuLLpFDPgbHYBxkjvGfElLGgLrk6INylKimBP8ThZQZGScDPrG7cXlgfaehMavfWvqM4Ygg8294MK1IOzZQPhOq6hQqk0n+Prgjfo1hewd6QE2iCrHV9epbRqnxhUhvThL/edz/tsrl3/QKKIg5npXlX2rWp6ywXIBjpEm3XdK+C7QY1MXCY4Rw8+feiLG9n4d/kjB+VohKAVCwMHf5rEsPoT6A+9t5d4aax5QNbaXQgrFqwZ3Wpmc7Nt8mmg5dLYDnAY/7uPhFnrt7J8ugD8HSjID3soum4CfXYKSgqZ5ISVRdAJE6A1P01ZVhwGuQToXcmX+G7X1pxMSOh5cus8RhSG1wlM5JR50gne9Ym+pp4Kf6UpdJxZ/AONmd+xtGauYBNl06k24wvbOP7OVXXnyDOeF4C8UI5GuP3uuM7raffd/PsdhbmlKVFLyypcWWr49oaoDKucWdIS5IAlX2o2od58b54J1Fma3jxYTnTGu6nGfnVx4m/CyPsfHz+ZxHihPjETM89nquTHHKFlDtOH/EZ9vEdGNXfN4MpFYXOu2l5c9KeDFzFYToUmLodUDpCN60IDcUQvwvJYan0z9r2vzNGybjnQDeNohpG8nW3lvS8UZqyUh1BIClaSh8K3A839asHfzGr9o30LFT3GmnoG9Pu7FmErrJkwK/znRKAG9j5Lx9hec4T1x+wRTq9o6ccqzydmdXm2iybgztNE90jhBG9sk1l42h75GpDxH6TABFcV6uRGvQAoCaN0k89cnIyUGeE5DYmRPIiHsu7UgD1ppPnLcaP6BZs42SVyfAZ+OpPc2itK38s2FPCKn+1TxBxNUEjoNe1M6wX9/bZqq4SeiJ7pA0154u2tctzv1jp0FDG8sxMbSCwB31GTHIw+A9tbXZ/NsUT8OGkDnWo5q/E1VY5RUbWWGjTKrbMXVqOAhS+hnURkv6/L8DAW0H33/5/ggOYl6t8ewid+Do9h5Fc1PrND+HN9p+6YeQthsQgTfG4YkeSe56GIewz96qMiz5seDOIX+TIEe7vtwp/C1AHnyO38DE6qxFg51ThOTHN6IaELnHZlf9qJOnNvUGtqxJr8azaS+rqVtuSRJLr6TB0zqvBmyEvGAcD5VzaCphFAngnqFdxbR7LUmY7D3V6QKb3LpvWVht4M+Dku8tDkJ1FCDChfZr6YMOi5LEDq5R+aSJpr57J5WK2cITNxvmipyK/7jQADV1vO6te4SsuivwMPGbJ2DBrBklCFGviIDyQUf5htYlKWiOYVG/xKiYdxherJ0aSkrM0Oe/95Qx0Skb9Hm7iFVVkbh03UZfsBgdfRyo83r2peJv2nj/mtdj0D/+VphJfCkiwnHsHJYjESEmU5dffxbiTdk5+wQzTy8QYt+OBu1LF+x/dEnqoyfjmqSptUPTR8m0nr6srSXa5VqNS2c+H/64k/c3y2jwgmDHdg78OsXky0iDeIy1R3xStMf0AdCwlZxQN0mgpA1hFWiqnPURJh6cVQiz/FHqIOQmahlwxAVJQFSmeuC8otarweqq08Fmt12rf343lhbFwGOpt+GOB+OgWHEbid2DtA89TnY+OFNPf90sVG2iDckAa2xwAqw9XLT0g1hXTcgCaFK5v0Nf6NJRhIPL2M2o0MPJ3PGED2TGvon/WdR1WdxJgWo1bp+8yBM31d34lFim4/J8CkZSOTK4sTsHXef5ihnUZXREcjgQQ+wOA5MOoDW/v+FH5wlQU9RIL4r83IzKcwRMBFFWuU2LTzukSp5d9cb2YPII+CXVa4yNpLcZbjUAAACYEQAAkobk4SDRADn7W8FyG5kXVBxu5UJTy30LToT/9CDxxUrptIGjlCE8GkUBU0deKNWtk3AL9mYlzR6wksqh2ax+uIDXXquthO6w6QcAmZMxe8zO2Ao5KXtzVSaVhKpbu+HzzbHs380NohUfMqtih/q6NA9uMKOE9V20O1f/s9sG1mG6ZGI3HBXhOnMqqpGa/vVPWmB551jzGce9Cu76kgGgbZlZlf1CpM145Y+C6hajk/jHiZdeJr0xJSb7h4uVHFToQ152cgMee3foSehVfKj9EUV7iGHnBCfAc48zbjBc9Cq2oNCAE3o8jpS3vIKoubFtaqeiZExGn1cCW56CkPYZR0G6rA92xPB/98ohlwXZ3rFplpicsrhE9pdNDTqON69APio7gwU9vnXeh2IEvDuKhomhhWyes3MPKP8w7BAY9PCcYcjDyA/bLetFTD9TwS+UdYPRYYMoRfScika38Ck8hjk/s7lCzplScbkY16628zwoK0v+ZnC+LB4TItgnhlbV/hka9JgiOoYL/lyAw3BZzqvUshrAUArIGLZzgUMp6d0bK+d7Bs7dAgMAVJkuAk17CSX0TXqSeMSTXWI7xA2rAJBioTACOobKy9U4iab6RhcXr97S8aCTa8azKyViSaePBwEiOw28GjD9EQXE7mdw2bbVvMaVkkgrLzvbdR8qp4lTTU9BkPk970O6OhfhtM+neGzYDkrWzgqtitD6VnviJXYCTG8Pz0NQ3j+Kiebg1K8RSdmzjPYaRpBkbRgzSIrWFm7GnyaqBjMbeUgexpDUmOAkFQ0hsdVU2o0wARY/zv5zn9tJs8aBrJccyo6lxuXM9cD76xDl8jx8UIiMtBtSMeKR3yC0bhhLeCKSZu67sq0zVRZ+mzP3mUIVhHqOt1Y9wIfG2i5HsKtTYKgM4kzi9bGg8lGojB6D+AKtx7ZiFH2B+JeLD/WECn+sdmyRIzA8MEjoLbtN3sk8G5iuMOtS/vtfp5Wp70z9c/1m/7/4r6kjEHAm6oZM9jy2oEug8Vy0w68ykKcvislpTLYZedHnmFnIBtZKNXZ/AMdhoBLn4h3ceB++5M9Lg5DPMTo+LMKRlJIdB5yZTriC/C2h+1VOwnThiRNSFtupIYZZGYzCZibUZZPjz5xyeziMIelqFjEfKgVWY/pW7kgZnk639Ew9ubZUmZqqqp4hrElcBb05ZmqB/3Wk7212XSoLZ9nTTxWZyNTmj8Ct/SGMGJZHYNGbJQYviR3GcsxVvnwSfkuplq1hAa02g8fNYi2/hAfrddqnhbrmS1GHggYuHGpmE322zcdydduStTZtPlRDT/PAovdvY4pM3YyXUcrXi19uZ5RG15lFR1RR1B2/13EnN6/DYvg7Uy0pK7odc8Y4Ou7SBeIeUAeECL3YjfMn32Wi3iGRLvPhQqg2HnJ0w8ZxPa03feMkHk92LMpx/Mq2LuPgLy6Em8w+OK6BRqRur8djoDaFb9dYlOVW/tT6bfonaaucnF5auaUjNYED63I+FXUp+o6BfEH7o3vi+fO0r2YY8v49ulM2pyw5BM926HtidCbr5HZsrJ96zXw2BmL3jfYMZHrDnO0t2+hrBS51Ra9WGDoeQAjQvcDGDtHdh7xrdKNVGExabBkB1SRxfITfbzPBPW4KyMElzDizwq3j7EKcTtLqeBw5jXSJ9pNLp+ZonavFc02uomgz5ZfckIG/xnOCQtzNWKDAcJbfrdKTCFYelZPjhnxJZK6m8vOx8u/AAhGvQN4hMtAIrprMCZ5X+sfsRkK32tLmHOZlk0Btf0QAGCPfDpcrg2SWiX/Mp972bxfj/MqJ3b+oP7S4lDE0OZuA5HtFWSW8CKKJf7n7ydjZqwtXYXKJxk5ctVuuyYDZWystcyT0fLrvq4UHiuHQhHjdg4T7BO/EsK8JRvZpzUWrotHposjz6IxZ5XwHCWPVidtP9Bvy8/LFC8Cc5v0I/uYyDGKiqkUBYZ+UeR676OPYzsdZFlyee2Ta27u5ZenLmzIuWmgxB4lnFLwFzH6yVeg8nklnP+46lk4TKq1afyP1EISAbUMXtIEdDCORj47xjrJurb5ABpKMPyWGYDdjDY46m5TMNfCceglCMhYdoONTpkN8ctsgNms4MzTmvNf0B24glpNy612KTHSv+3+eAUjuWj9XOZyPFnmhS3pcWKdK+KIiv8ToxOL0jZZfDlKHsP7EdHC9jU12Y05m/hfCnkDk1q9CH1U5xEu+qTc6DOsllydGZs5MRxZXnf1zakDJDa1JhxaH4P8n7IMy/1nmCbkWPiLzgvzXmiqrtqd9BZElSaBBGtF0plBxE72jAPpYdFuZ956vbzoGQhNWMPlK4T1Q95MmsnMEtjsI98O7GhHC2tGs/dGzzfrQhXuEvZ/KeKRU++6BBvoBVkMJvfF2lZmZ/GSCRklEbJs59Iy/aiq5w6VfBEcjTptUX+OzS2Z6A0TSCgluto1uQGGthEjZr/Y0Dnc4EXE0YUWsrUrYVdZN5MBBW/IYQkJ1c78EWI4ToqTLH1mbUmDYLRZwMW7F94BdB7B6wafnUFGc1HV8pn8nIqpCyobF0H3BylKda4waF4NSxS5x2ti15k1uZLU46q7ZrrsPK9xc3xjiJIXhl8skZLiEVCForiQLhu/jBMIHYWoCCjco8BnCGQakeEpDDQb7ZIhlNj58egNo2BEKBjZoETb++Z8F38aFfsDB5QGBKV2fb1zSo6LGbKGLpMCaDPSHfnHSnIgP4UWiM5iz4A4F1EcBtBCQBJMyERJtO4meELKRb9KMzww/dzvtycyTvxE2FtiNomZy+E/1XWSczTRK4QM7ntLHD91BKJTtidhm82JSv0TgqH1suukiNfrL9mgfDJ19zsQhEuSJR+7vaWOJ8Yb9On6UFY+Yh5lEf88x4S8UntmRGiCvXVOybrz8YS/K31bZnh89jA0zkYHHV/wRkXOKQTCwTRHUm52xD67W9ulDIqBFpYDrO71+I/WX2bSdtzeNBac450azwmd1u/JCVF18gRc1RUVHYo0n9WifbFo6A6iaLwXV0kY3x36Xp3cFAY88SCT6KRxkqVxDDpYgUfEc/133ZuvRr707/Z0FM7yzFVe3q6gXBFzJhQTGt/LN2sAk4VfwnKHzjk9B9zBb5LUY+y1cTY9Z16UAciEXqB9uVgU4FnZDYsH2Z8gwKqbOCSc3Tqmop4ZEepLavCEIWsnWKxwEYE33Kr3tpV/+QQpxxEEkLQCsPhof4tpLBdyjbaFZzyXicyX0uUdxxhHJnUuwhb52KwuCPk9I7FPe+NyA+TXVkc/yJontllsWfYtvg03UND65Mp8ciwUjWkYOor3RFGU3V1flErl7QEbnIXOL8bszw+pqVNf3a5yUx+wVX/xi43X9zVG/RH/zOkf+Z6w1Ah2yZtuft55h1yiE5CtaBWQumm8m3zuac/ebFYFx6ZFsQsC0L8PoYHinddjOCEUlPjOWIq96P7uexZUrtxf/dxANxSGNFwfm8Acci4UCL+n4jT07avtJ3Ixo8KkRZH3p9Jiyo7q+kMi76bvmbTbRx1PqWMR9gn/QkLoUlnfa5zeX7Em6RN9ckZw8D/0uqQYwg+ybg0kDpbgTFcTVoCWIBAOS8kEvfKkb3X54VLdtJezKTTnhFVqtE3wJzcZvnhlLmlfr2Yx3AyiFlYkDt9NkDNWLNw+T0F9R8cURkFgR8xKjtI7jx920Er0n8+3igAM0L5xphjPOQUuDB0QlEvoZA7xrhP2jlu/TUIk/ZnRNcDq2kK136hz+6L5zRDhw7QTKReRtZRT26+tqaF7YgfuqO8vodfU8m0fyBWxqp7pEw7XrWklcg+nkGz9MHwydfvGoYttY39ltuMSsVLAQ/uwYXmaNnq7sPz5YhKegJADffgIRpcKzXav7n/UBIfWbOk4oh6u/23hOAKpkoRSuspOnya2GfqVTG7vpUYKMvDramBAFRGKo69cLcRv3JfR71gTwXmGQtdzMbLFl1w2Beac9r1Pa1btib783UIwigwmT7fKg9xpjgMMA9nl73s/+XzOIkVFdTru+DVvKnjczpSew/g71j0RNXOc/YA6fVdEkqwZHQOBEh79wGiTodnXgaxHqJqkR74edEagWRk25a6Rpoe3DWOvV5O59UKR5yy6i/E83Q7b+VfS6JqFVgTlpki+8POq0cQRKmSd/DB5/9eol4rk58wkUDz3kwAl3v9ubAxVX9tPv/eMq1KJlLyWQDPnByfMwWR4+oacWQdxxNOlmW/ZnKAXj5Fxe9uwWGhLQNurVsIYq/o6nTB7Q0BH/22zj08Ak4GBWn4Rt5Yc9O+THPEGZKRbe59ayV80ILDyCgFjnpuIT50AMQi8BtXKTuZPAeg4RFeiPZzodQFGGphmPbewJr28jrAaO+zTUzl7hNVH1oxp701MvCEUZuMaTJEhTos4udsT77FWwAoJZ9E3gqNQVxPQ+yJHNdhjAODq7eM1z+/YeSK9XJ2mRCq6VWptp6iH5cTTPp2G680FHgXsikDtsBhXCPkfbNFQoYFlneKEifo6t+024pvRU567stZ3qwdGTsX2ygaMuYyq7CQsjKf0uW8bSRSmS+f3hu12KIw2Mw2wRU9FQBs3Bm74orQUT7hv0r9nZzNnLwmFSgOCU55F+FwMrzVWXfXDsWKS9oVP1/a7MCMVN4tU9QUneBkgNf2zf5TXFaJ4QNkDSBT+LFwOkyu/qoovlrtYaRhEzCiDcK656IWi1zBze4wvMR+1C4gQIhFkZFiXj0Xyxuj9koFCDaX7eRFtG+EeVZ7wl/H+KhHWXO2WD+1EEiu2TYD5MqejUSTSHG3ptFmS9MC+q0Lt4kx/0Ss0EWa+bfweZ/TlHGJVMoCoe3ni1IkmIZiN5Z8UVswVn7V8BJOOz540ECJsXCpKIYfQgUCsuusR57sVMmFD7kwckO90vYI/X9jjMygLj9iEsq2xiFXSBwiSnedcDM6OkqzBfd/WnME2K9P2VME7HBKSkQxLRBfbxbmzlESQ8nToj+Nd4AmcQ3GKtU7goLBnN1mIwPlpNwc7tsbDeJugbEmPBn63knGR2sgrtPanxiyBYjOwA2CAPLxrNQl+v+4nCHYWZbTV03aoisXY13KNbJCpoCh6yTwoP2z8GKRYMc+Hg0ihgHhRmkvS+sVPZJgl1rdjrTeW2eE9q8Bjl7cpt0k7HSC5RFKvga/pMP1oqjRC3svu5G32fhm9mCQTBeY8+20FEECTe3bRnnHFKpN8gAS4fNwocb8d74WO/SA8X8pS8y2bXfo23RyodNThSSYcB4Xm5eLZxCFhFerY9onORcQZLhw7nP22FEpYIm9T+Yd96fmAbOTUtUF8u6bSbK/lQLb4HTqk4b4Od248eGlWbE7hA+kR9bnlDb8grYxhKXicYdmJ12VkPIvfPE1Cl1upciY+TLjy6wHNWRofYGSqKhEB70igovaPi7UDxDQZFVlKLvLshyQ0+g9ugo7GnsGesSPIBEK+SUk0sM/1RnWdTQBSN2GHCLc0Zi3R38JGtJ1jktfJq1OkiGJqZdoLIQfWWU3psurV1Jv5U9FFApETbHh7P7rDzvT1H84GKOcoQ6oetrz7ypXvc7NYHqccfJ/lTD+3JWiVl11VgZH2Qeoerf1UQF0p40G7aX3JmC6AU+J4bB2Hn9ZfjGVFDJwWTiZIHxHQK/rK41n7cNZJHSID8zOsghbXUQk56xdyQhH7xt9Jlpsk1kUlHrUCye5bQfXSKNbALmHoJiFJb/FtOMvXQJS++Ms9cHSP+Tvtddy14MG2Bj7qqz3H32KYbJJCsdPsUCuXR/4Q7WzH1rwV6WqE8A4B/TEawNj3c+vW9CN/aubXPmYLrfvbsczmdoOCpzrrv9jakNYVHIbtHQXKKpTEk5yYvZ6Ai/ZlOgBbtFTOuARG81DAMdcRjwdT5a8DCL0BzG+D7Qi7M2Xe9/ZiT0vK4zqpsAM9oz+A0eI9TSBammyFXhTgUGGk+fFMSsK/UMeX11jxTL878UEGGXL+aQtNYAKMY4TYAAAC4EQAA/Q3o4pGMAowTt+WkutnQRzosW6BNJXZbtRVQMOVZNl5QidpiJvkCRl9ZNU0Q8POlDcNsgqb8Q/UapStKKei/TByBtsh/bH7fjpeJMmpuEXHsfCfOhONXubcZnB60tBZiTIDziDJ8n71drs2b+MIxEvQJZujbIQMJFKejf2uPpjOkmhixbgnh65qftrPCGDFFNJWxj3+o0MSrmvSVyMBpzsNlr31StIghgUla5pmcDauK4iUs2Di3eWaSRRUeuajdSG07bqNa6D9noiuZNrsS0lQbd0GH5UHsGaSFIf7/pH+3pXx9hXrnmq6ybsqny591POfcg1do6+et6jeAkXJLRIDhNlVPVYRrCAg4zXS7GZOrNF1Am41BG2GGdZti7czgiMKE2RBbY3FYO1HCaXw24z5f4b46VDrLS9pW6qvr95Qfha9bgXRzIUiCevyczMNidHDuHGClq2nX1pa+0QWZhF1vAQA7762W3SSMVBeaejQhC+qEZ69kEPlOlzzWoFMitma+AAomOBA9kn/1c/SujejfwrmOhdCJx/NB1Xz4ZyKnCGuf78+5PGtPn/5vLmTxKBoutvwS14EGMvK9ZhrmRNm2P53iGxw5HlzfV2AnkKq94ABppmb3EEsWWU9cOQgpRsnYnjohIAE3FvdY0UKWs/ntFw0efLY1TygEShwKAvSyIgZlmc1Ajxbj9ozJY4qub3IasZ+BDSYWEAoP8cnRvS5DfM2vao/fvFrABessUjrkriwER0/ubI0s32OT1+9I7p6AewEHT0cGYNJnA+xJ0SXLlKAFcBcLCPYgj1oWIrWzshBmJxysO+5nmtbMgZvFLMinOFuevAKwAqKQohI29U20H3uQBpKTlDL7zZNj2zxA7qgyl13ipL8j3Tblre3ZTMWG56ctu2y9uvwz5npqDqIQ5GfesN8sEy1H3FoLCX/sesUVwwS1feKBcqNFzvkXylu1U/brm3cqeqAEY1fhqP8jWMprlPXMOvb4GsaKZtsJfLggcrG/KUxI5eFHQqlmEkxOYwimCEKnBojxpMry+/kleSTMTietpFsSRNuAI1mmH+0FavWIfi/F0eNMIOKCjGHg6M/tKpCWr7pMHDgIzipKC2O0NN3TYxnx6SQvZflevbz0oRDTihg0L3ltUr0313QbuQlB5yI8fE31Owt+QffDLbNnj2zxAoP7Z2oOglj8mNHlUZur3jZ6oc72N8CofzmmypvHDu8FC0GEZzL0gfrkyyCesp/CQdqDiyiR8mdOdQtZVaG18vBIEdlqPD5LzOu5NQ9S297sjKYU6XhC9hnQf1XcXIc6xXzLBFKmtVigS7joEKNU3mmqVSsYHtRVHK5S2PCPIpaJ5yB98FrXllMsMaEeqMtPdDINXYf2YM/4AtQbsPhLhpAxMpOO0tPEwcE38+0gnuTxmjfpBCiqig5F+MXW/OxmunUwkWz1r67zlR2DVg1ujJlSl6fKdRlDDEmpqenbxM4BupmWmjo3cEKN5y6a8JB4buVgxfCCbvqNz5Dz1kRKicnsnAOhouOdjkEke4JEbB56jmBCx6lz7fu54GqFUVrR9BcXMUQs/Xmo2eIRfVYcBOg4Z50i622AMtLFpBS6LIApBVsYQl8oKyxevmq760Dqx4i2XbTkD/HDGK8VX0dH6tWZAqx+eB3oY7JeGlKLc712XPYpaFQKC268yCYgP3sENajjMH3qihyGdGGRKvN6cS/Xrc56Vim+0NStbADU3o9nUGs6lUs0v5qxEzyy/4b3qi1aX1JgkjnVSO6EiNjin0iQIgZVBFSVzD/jga7WDqdaraUJYZj6YmWqAq7hQEfPJmdRggH/Wrgvh5VAZDiHGYuss5ObAVvzVmmH/pat71m3iyA5dUo+7GMeIVkW4Xvnyp0kuEocwujK04AHhljixVE/oPdhA2vEN6KefQXYkhklOVfg5o/Pi4VeXWIcgzi6Mrbkzghzqw1M7DZhsS5J2XMh02SvsxzMAQS/gN9ZRHX3tm5Zs6mYGFImu066puxopAdVP6wpw5msgrAid1uKHFOUzPWFUZ84wSgOQtNGmkXC7IOyF4qPUUPyMuD60dr4BJBzF/qdT/Qq+9YBI7XBUiJwM0XsWSDW14QdLCgNiYzL9EUvZ1IBt9SlrpBKp/q1fDceDwhhGG4hDyxJsO8nU7W2ZBsjb5eNXS726203/XgCmfePvFCIityhMWvFrLik9+Zs3o9OY+FwFTCve0mOYlPdBT/2MTC/wIHl2yI39R7fhvFHkUphbyw2cYCO0iD+VqgDId2Xjhzvjw2DZtTuisDWLK3MycHt0F2pM1DeSqwh7YQFsrhy5vWeFFKg9eT+uRrd+ZjbJppviFjDVb0F7BApXP4BBFlQdDu8bQiFXucx2WJptof5nOTGV5/Ew++RYWqIETK4MRG6hMib5MCJhaqnFMTpxAOo94hvi/dbZtEAQiggc3gM97OuB3ySBisJyr/T1aog8NqRz366A/jKxvuUfTIdWv92sMp2hqSS3yJjCMiecUR0I6BcJ1w6nGxKdNguoDgMH6AJPh3KjjLntWN4DXZv+IZcfYMvU6nFkagIXjesLDF2DKnJjeoIFjiHBuCwd1vT6pX+h45gnL2LGJg1vhyrtuOmu/AoDLG6yRlPWZRZs23lDwDVN1pdXQNmi68/2ZmnMUjCl911I7PiCqq8szvGPjNjib5/tW88Qtwr6sLDjA8GRT9qo4GHI2kIhjwTdA1ncgQ5rClCCvu6AClwscAeQQAIBoMny55BssHcC2xdm7IKrJmk/q44zYMcyfVbfYxOirMGZXV/LZsvsWbCs4VKAIcOwLppVNfv4KqH4IQBdgL9IbFVCOvLxJ7364OPmZWlm3rtLl4vpCz1lZPTTcf7siW+VaF3IZTpkB8Kzq0SMfRfhQTv2Di5G723HZB3PH20GqCnZV9NPS4Ng5bdma3z1N4rYCvoFUoBsNzKC2zZhxohlPRY+WkfAt+viagV+tZhd9vufwNWXmwptC0tQdwCx6iUgjM4qIXP6hvqVw1Wpu5G319xQNYENItyy2OR45ySikDLc7mNNWsvsAc7OjsgT5yYwwBxddr+n0UmKSg3O2LstZ9Q9cwd6GBaE7V1daXx9r2+Yqt/YZ7y37onkLocS+jDpJviCZjQljMMlcmORfpkW0aXG7ACfuDrwYpBGUuaW0WSzaPm+IO0b/JVycGoi0Mk6+Fl0dyJ4eEayXIm0uUYYsQ8rQ2cndvFuS9EJlKA6C8kmSQdP+Hv6kBMtlIVuU7ujdT75JvYVXbwFZxdBX+7TR9EE7Xh2UiZaTy0KiI5Nc0LOpz39uXJytDgNY8LhZ2+nzwIRLFztCs5J2c5HoNYovnBuEmvYDx0YIMcWpVsdXLTLfJXyafHfLgUtsmAa69z2QduGkme3tV8UGDghS7HFM5YKPvAg13oPCKkQZ/oVKroitTB236liANny6VCs35GYxjWl6/+lZUhHCT0W7Mu8/b87clLBkm/vPVt4AUbbevJf1gdQ11MrEGTXidYGjY4g6UJpOsmR3mrHx1ytD/IgeV3DfF1Q9mLwgos/kepiCnFvDRKElrt9q5lzouN/G6Dgjv9kdpOR1hiSBYwkNiT6Ge4AIiIcDEuHps9/KZKvdoutRZHLTqQtRAdWfjIIJjRCSonOQdfc+SzEC3rQuiIlmk4HdoP5mqQ9t03ZKdxHb6ka1tWtS+02QUsrA4jTUEcAGGkhpinQNQRCjvYbx0FsStLLYP3/aag6VW55SpmPGH1ZYnDq5h8uGcKr88XdnJwsa6FXYw84wQMtkVhjhjvGDIr/bi+chYea4iAGAeD+gFduXRugd83DyUayYeXFKuz0JHJhKPkB3kV+iplMZD/qm0z1MjXSNtGx6jeiFgHyUNL2QJoGK6ZLxotcYbqG7y2AWeXwQZZFdXyTgOSWEOnTaggGTOxH2wC3/PfNmGJsOo9y8qBdgNArYPxpd2eH9W9uDc39QopRST8CiVB8RyJkOsDLZQRlbXp3QxYHoATblICPK4huWhsoZLpPG+udmSUoKzEWtUasKwGr7scareufW2xIcClNXSdaoroZ4Ndhfwnt7panWJNqNH6J10UVIdbZ4xLhqDqXZlZGESL3TFmCafrVgd6WCYcCpttS7thtnQS5K6EBtQZLvgD/gOweFvkjvtsr7p9rH05JLt51Mhahvehy0M/nCU9NglHfgd1yDcbOnd+RN8fcMmQQTqnoaONTXgsg5/JCkoYEyPvjujDWVtPy4f82M+BDdOWwpMCmSwCTVoVtwGmFpwolbbjmQOaMCwgVaqYX0ryF2JzjvC8Yuv+p+Ck/BvGOsw/kQk88uTTnMckRMRqOcQZByCkJnUfpIU3QkrCrfttdRU0RgLKO7TlJwjBu1HNqK3ALLIhKfifFJgNVPcSObdUuwx7c2KriukNe7bR2KLNc4CLXW9ZDPShVwvGK94kqEfAd4RlN5hnqwb5FsRbUxA5jT1yFAfuuZgpI2UlLjkejP+DtW5qdreQX6rjItWEkj6AlN45aY88F/emTaU5qbJRYROWuXk1XU0uHiypvxqUsez58qP28tHrtPSYlAUVBdFhxeDtjrksyev44kVGdBrUdwzxtgdnkRSVb3qvN6hXqZ538zDAYtrbksZXMprwMsukdbm4bhyV7x2+G2TkUHuq+FnRySdeIWgvPGLgh16XrxKmhWFq43ycbNOEHMTJmT19eUd22Id/whJPGWHXzKw28Hxz/FysgUKwoSfE2yLNTDJ7Tp90hxmP8kxhdaVtlXvAD02mF/gcXmhqPibY8KrsShqaUSYrRKSWV+k/NvPmV4VdmV934hvhXOvSWa1A0QoWgEboaCuIAqsLfGatVVL/aQrb2wkBbPxqflU5zFMzOtK1lkt4/1p0ujLI/svsFDfCOsUpbx3RAyVEXnof1V70tFcWQKdM76VYf0PmxE92/xMye0e63pGq/5DBpmd2SLu+6SueDi54Hwt6ChStKx2GcaxwRcd1+aX5WHXXXXHnnC+Aw6BchDdujlJ9pd7LcS0ILlJpiWk9p1lM2SAaWH/07U4OzvA0/xfPHwdDAmuz0JNiTmRPp55XtZzaI7GOJheg7n9ZFNBKIBvMci+1NUJjvceOo4iH/8DSGP7eD8HZER62M1Fy2q1DOm2qZEMXpVSuVgINwktgycUZdwsnuepUdI5LaUY0F7Lw9bXiiDfE/gC6XrLHDKfcb4RR098XVNHLemkv04pzW/cOHyNNqwrt/RDssZLn8rWCPzDr7osViwMB3nBic9EPHOP/Px+CQ0W7fwqBbuKyk6Y9eS6OWjo7i7/aog+uflI3vFQd0aqvYmKF8Njw46VBxHoV6MHwpG6wIjJTSjL4X2Pd75A14br8daphAjRQXvlcfro2g0T4lab1iCrxB1oRtx16Cxr8uvl94NmjCRBkf/vYPi7VV2DZqPiK6ixq7E5JWipP7e/91OAVaOifdLxsRdJWygEr5JyTTx8p7U4WbwtfL5ztDQkI6H0qYwXzPXVw/M5xn7FdOCT2UnF8lWqWsDkKQafWSb3DxShqsKLhv0vuH5Xd5tI1SE+nZ/zkzx0haTnUOGgnGRN8MVeaHrnmq0PqaINJJztSxf+jgzNG9UYdLdW7hInkR2m6vY9faR3hQhvw8aOdlJ/8a4lLiKw3OcKfjd/fmfIGRgCIAPLeEtTmAdbegZKMp/6XwdfO7lFMw3OD3JtnqcbXDu66H2GFk7rfeX0t4MNm/wHRDiWP0FapTgM5Z9plCzThufnYHo0+xlmOEAOdYB01NZHzY2Al0aTshGry9LbUzhHLaWPVszqYnduXxvK6/C65bTDb2LSMSGoLGtrco39Mnmuac0BcVzGiC8ZLKt92hC6UejJ30SC+Ha9VPhtLLEuT7a6hiftE82rsLqZb3c6QYsEWStSdw9Mrf07sAgLw/1oc/3k+orkc5iHqXp7t7qbZsjL9Nd0aD+MaZxYcJy7su0AO9G004RHfIq6Me0SwFEa1FLBTMbMn0RopfjBHNJUW7l2lVQnpv2qH3iF8H/S/yL1yMDR8BAZTHp/yNwAAAOgRAAAlgSqCA2CbN/iCTM6Iq2jLB4Hy9v7d1Zcdk6QCuj9V2RSdpRPZECosL3VA+Pm3xxShb6S/iHFdWuOTYw+f3begH7BCUDp5YOeLIM378CzPPt4vS0mn7OzlLhcH4xEeInMU3PJpN38n98hU9y6h3QLlB8rdxs7jXvvH+dJIzMpSJH3lQVdjQFwJknh1wtzMZcsp5vugKwWeUOLy0SgGcSmOWtn9wsh0YJwnMf0qfkJHLjgp4iivEX0YgCrGoqmdwMBpNkG5TO1WnoshsBEDKkOW0oGESe9w4b/efD0LRm1j5K3U2LbURk9/hcxjOLUWtrI5OlMeg8VFHBTmCoXmSW/+29m8nDTLzPnINLaG1gxATrMjg/KCw0jrUbzWBq4vRC2HJJff4dC7qsQTfTs1mUeRG7wqyWFAhBo3JKBiZlC3sM0fYGROtiesldmrpvy1dhkpXqkzFfGtCWMaJKuU3lNX1s8CgRgZW0IX9g8D+wt4PWG7cXYtVj73Hs25CWMH6zxHAMNwvrB0KC4wsr8LiJnJCBBEQcYiVIC7KxdaRzAkkY7wDwx9EJZvQRMVGR1gyTE/AG+g5/nN2yQhEUoPs0oYQGthOMfgXXXte5U4g5quj2/8nPWPOWY7xqK5cUHf3L9mrIUVfqiZ7A8DV+aQ8P4o9mIUKyiwUFdf8CAyOW1jbTkgPNWAczKzhtEMEMiw5NE+nLWLqiw98lT/aEC0Nhj8hmyRn/D19Dxa21kZfmwb+TvAOULhcpGqx8A5Hgx+ZsDM/6bChkCMvmmk+LVhBk6pOtwUJy7237zkzbxQL9zMQWfs9muS5EiZTt89e04JDheHCOCx+GOffOnc61G/EIEnDknfCfxl83wpQugGCylJBhTBz/F5o7tFBQzFRqrnHi/ejQBuHRe7JSIh6lfvhi3aJvUYrJLpWzDj/6Mri7am5rphOh9KzT7GzX7SLc7wkPCvDnyTuIqMYNoZYwCN548M09X7pXzEqQfu/DhkJucdf+dh1RWF+8+HEakCGdtOROTq9f3wWTuEEGICvNDQ0QjhDpCg377CcV4F/L+2dJX4FqcWk17lhH2M9D1wwQKJHIK+za1PEzlmIUEs+Nikn+mr2aF0ecyivIkb4IijmEX8fky0qLlpL6lvkaKvgWRWaMW4biYJFd4jaEqEmz0MsJRS5CwDQkno8YZcUB19spk6w83FqpORlKsvLzMZbEciytelZ1jwP/x37ag5czI7W8w9EBtzCm1Ee2rzDjo6nRRlQf3u40iv7yZdERmYuzieNIz4EMh+xjrIHtf81Eii/BUVMl4awNj//6EsXIDXlsz4OJdkfLb6M/D5whRJ+rrR7PqtfVCRng3ZnQaybkbQpgubZsavbEgesIs/vnPbbANQsX2cVi4c2P+fV2TFmJvuV5ROrBx750bTmFaRnySDfeHLjaXlju3mgNpeXr/tDBNnTu21Df+hjDeaf54Su+3IK7Ojwvm/QO0LSkAQKSqpxxFQXBaCEeAq01EB5KpHQwJJJWvXtnlxagt+km1OyDksvlfSDniBxCLz6UGtE7unBdFg6vw9jvRGrfKf2huj4oGaDBJYFPYmhVaPfWHrlzc0vPdA27Oou4RdpM68+A1BlcMStS/0fLsMNkDkUbzxip+dO6sVkjlmS0tHPcZEBOgQvTu+ZS73m1V7J4qhKygfjDXI0vn4biFyB7S2XsCpeDZm8E7iGeCzE4gH/lqtyBSL0nhK3B+LD8r0rSXvyAmEb27yvodBw9wnJ1333+3m3au5uFwu/97NcnZVKLrgQ0Odn73y6dUkFcIeGtA7iDqDxfN/gSAFNtMfsqkrE7V3BhtZ0YvFgw/YYt89mATdOEzDbsv7jxVVs+pl7JFn1LAECJ14B2rfUAEKV7CsxNXMe8eKnD3aXZvNUA0FT4emkKV8iUCrb4oPyiOdQXz8CD3Or1uFinv/NVKac6fFyl/x+vGjl8nFZ3yDyzPKnHZGMx5SmAOWEjhQS6o36xspmoFVxUtPJ7xgyGUSR5yLu1kKdkIkO0FucQCEHjrtQu1+SoIKRZJUHn/RiVq1B/rW28yVR8/EcHz35/di+5k4liCtPUSm2Y7xLu/efHdnNNeXMKLz7MCuKqzUZsAzUbBRrSDJx8zIAuvMe2jrxhBkV6DJABszRZh1uapeBTRUSTcNDjbNgYzNT2AX5hWo0NdUZgKaqsWZGGNG/VnLMLaJ/j4+dCdy+WcYFVVMnKFwzd5RFL9x+p6h0imxUcultHvy3mjRc1YiCRJWn4KFRxtc4X9XuqaWXtnytkqBFQIIStYlQfB4M4GSe5c751zO5ThtoLquzfwLgUBVZNaSVG4FxDxHqet//AvH/QaC5UeEgRtp5LW81MqB4oke/8buq3ldTA94C/KZTWaKD/jfhNGyBYVxUw/3I5/I8/iDejcyxAXlWhzinqr9LxY5qa1rzR4wVxalAAl8fFzJvz/uNOWymewyTsmBohmrw73Cd64ZvxxdO+v8wBqnPXFEJKIxgRBh3K/ej8/7AkrLIA5FF6VoqV8df4sClIqXAhcBOc8m4PNUUFz9UU5m8n6Zb7enqxHfI6biQ0a96k/RgKqDdMNjFrfkWvo2u9uWDZiQB8mvmNY3hKguSoBBR6ospzLogFMQz5o/WQXGfMzKUTV81HV1m0Vid82GZevp6eDeGSDvDLb9FQftHP6OHJxeRBRgVWlxRnn79XqIBGqRlQFEztznUmJqjPLiyuASRlhlqdT6qWuxu58pBxo5qHpTdyxObEJy1Q+JbcjgDUJHLJt8JH67oLSOkI8K30GZ4HV/dGF9ugMhcK9iVg82MrleFHxBMKcNHmul2Vrp2vpyO4pAUbi48BBJxvXQesXvr/w9KtDQrjDBpwkE7fE982FMoSkzdh/dMvnfTAPvH7cX4oLWSBMiSTeODPRjeZJuhwh9r5fOxvCjMmcFM4q6R8sdUMBHd52+XF7K2iJ+fS3M88fubvhsJ5ZmVyKRn9ti+u1XVi4VCKusF1zVdO0KeV6/W9R8gZmEIhYiELETzvz8qBjwy8EsUfkX2pTfRoiN4u9NjKUtvZfkXCuZmtXZkeLmHoPD12fsnVjYtJU1IIuF7CQK+0h5CsvgWthVDoZxFZbxIpeOHoJimVHTuIJQjq7DkWEUcLcBs2U+zusCXmom8l+uGk7vkaPcGV9xp5mk0S53vIRt5GhSQd685QRx8p5O348eH4x65Nmwc0kQqLjFEHSJcsNeAgTFyfOSqyos99yMov1juhn1hbtu3luBSsVGT63OSlLgN2z/ib9mu7+CPVVohW9O40IQYfT6YIt2Zqsbj80WGjj11e6X+YtqRZ5gBKYd/txVOvpccSFRNdREkdhrmdUJozRtiXrwL50NfEZFdZMhdVN/b+tnSytzyC53WLfdTCOH6x/HOm/L3iHZ+99jmqC8inUc29S51LHL5HEIzWdXU5PRjZXRm0yT1CXQd8D8+/sEI41/lJX6Lr9U3eLI/VuPwhh3DuclQvEQ095AA/v1/69Kr7F4T8ihdm3lwTdkW+16XLZMmvvrf4ifn6Syn73F3lyrOZd93qN0Pxl/t1j1O1VDzUHM3fMwKPDr6a/V5/t6IXqj/UaC+DMRiMNn0HHDIy4n4gOp3FCXAONHJPVQ/jgiCwIh/FUaqJWgENwxRxadzMfIVE23D+vJMw6RFx2Mylt3coGcnXDAjue8VF4tduLjRJeqdaYnvmH08F9u5EztF4BDoTVzo+Gr6JHJYkNzErelGNo1Vqt9tjC+NvuQdKmtGnWUClfP/pHBHAef8B2eJayKZG69TiGUYN2EG/X8AyBH+3BNEb1oFVJiF93Y74fyDkL4nf4hx/gNIbhkAEtsZXZSv3KvLjtDQwSVyQXtyoVOB+WrGCRT9vzNX4lL7D32ahGJ8NBgOoD3sH10BlPNCdPJ/5qQMrL2P0ZQeeTFgzC0S6jHSkwHOGdjh5usCvNsTuHg1/sagBimZmrl4JDIgd7iFT3zCK5cb9+scTny49pqYBFZpH77Yk02KT27Eif2bvl7jh02i10/2QKcyAVpWZ+KwfiF6Q8PgS6hb2bCzUxBD2x8huwnZuXck7mSr3wtSDgorSgiCnlfIm21+lIJ/vwLWGCkYaz6ChdC09uuixVCnIN64B9PRLJFW0KxO27Hd3tQI59mWNqtVvCjnRabDv2n0Zd0DmnZvynfXUSsm/e9Okno8M9idt4K3IGu4FWM4wu6GPUPex8ylKtoagtOgNYxPqm8nQKZdp1GmnyE94kCVQse4368eE3xD2LNNdl/b9++FAmamzKcXhuywrC+b3JSTv7ihv5aiDQCvfPftW1AWqSnp5G9w10b8AUQAOysrG9u54PRJ2yJpe6dDIuPBnxswZ1QEhpdYVbEYAXXtzglQ7KZPEvmAs915iD1jJEzDRm+V/iBl6u0RClYXty4iF33D95rBmQnA0Tzz8AKDr1Mv0lGk0g18WncTKCjf7c2MVx5Gb1FlsbBFW+G3sS7hP+/fyC0ODKZwG/Sp1D15FmfGvMGGkmcTwDox0vU9KFRzHbkRcF+oPn449f/u6JzhR0G3JUY+HMfm41BhPSiuXYqX1fAvhNjq2XtjzsMzdo3Iw+R2+mII1p75xSsaX7N5sbVGFdhr6ny+YF+T4Q8wKM+fcwke5WkMn+EH70LCBZxMlyw0QlDCzHgva88lDGGliPMayNCo990dXgp1ML+3MELpjEXpEytOdKOHAdE9qs3DpMX0p6WoOkjkN/hqdpAbB56M4IbEsd1znJUev244DlxDxJh+JiTZnQ54d7OQr+Ogkm2ZAAIYjTebUaOfY0fawou8CNosxMFMzBDhxrnLW35pzXz4ev1XBoVOLn8FG3EkF40QSJItKQLfZxmfoVplJ2ZCvYfuYOC9pgCQnfWERbtouz91W2ywHAi/bmWlxGIe1ueksoVnO+i+NB97CQNJNgm6GZFGQo7qPISWUCzw7HazeK7W9tWmhM3e/neCWUQ2QLTYamsFPlAv7/yNEHlMmEfIXGjZg5fzXNfvSkCKY0hbZo8ktJwXLK9quV74x9SX2fthqsekXiPNICFkNbKtSo7TKjGnEb0FEbWaGKheuVeJcH0bOwX//mf7TPVhFsGuUNDGoj8lngLu+4H5TPkI0q0m0lVc9BLuWPFJqGxH6/Z10w7gQnpxxKbe5X0V3FdJM+CXmKxT9w2XsJ99qCxites42NlrpK6OAyFnuoFsZ9yhCqOjRN4Hl63aK9BayXNb4Sl6EggUvMYwTlU1tuthGEwgRfJ63ffP9HoAYnorPVbWAEf1SoKz2nTmbw/Cf3v7JJN0OEOhp7ir4aTJF7UsfXUtvhOWqcg7/mBdMPY9epQZk0YmavQGcI7Yj5VbBXfDf8LKmaJjcuV1LfFzWE3MrrzvCsE68LHB96HVRdIp6Nr8bMMsZpTmZW1Ow6nYB9bkRYIFzynI7RZq9aJKqZPtgkxplQV3TF6dCtHLLuWgtqnPxP/3ll945uEQ53o2NpAy0xctdUlJwEqN+xfZUCAV3QDUn/6wEwZtb084L6jtR/fX6X366ZQraJZQlBeR4bcOGSWuGdCinBOAj6BvAmYgm2KA4BPmfDjQojtpW+axqZflfPJK0t+j+ItqsmUK0sRG1GvEOTKniiWE0KNVo4XZuYOCtsBLkKRoEMsUr2BTMnFzg7Te3abRfx1xFXiDmitFBsSiqADPlXrl0P9Y+hVYZRhCXf7mqCJ15YNXCSUISyJ9wl0/Qs4+FeWfrfOSkoIwiBSvZtU43FnroAWbixwt+G8dozPLBUoAckUHEganj4h+PeHxJ5UHJx1Yi/Z8P/tuJWyNAEPuPx0F7ZQrfE+H6elocxJHFdq0B+x9AefTWzVNm31QgiBYaUZWkZD3TOdncibB8/YYdAJuXTRoRYrcfpox6bZrrDOdfTZR3mr4rJObRiJRsFIR8iWtOIzgqaCY4fMJzDmjqOtNkhps0hd/gPMPDZwR1vJoiIWqeOpoIbs9Bvib6SLbq74LENTsbXJYcx+525oAJ6imtNv71i1IJ7FYNKx95leZPcf5ZRjpqlewXp/hkcYfJavLZRXtY1WI7jqABK+LKNNiJO0Pdm3ckOjQJx49LBXycvBwvM4AAAA8BEAAHm7ryNBuJT/Gy+Ws0/pYhRxbXdKqjIPgrPQQt8maSa5FzYfzpGcVCxCzzB4NG9QUNU+T2JzkT2EJM/XGRVPqPlx1PJx03gm8qEZYQO1S3InsteslMP545/Ee5rSYUuzloLZQhd1IzmGsu2IvAjCxVnh1FODemZniXbgYFcu/adEV23jZv+eDXnCUYDY0QDLH6QHJoTsO/05L1oI5weECktPKaMOlhlD9/SERusTcjEGiQTzH4K43GHCTVE9Vop2VFrOCMzK6H+4CasswAMjnKDpKZS+5s4cHkND1DR6AiC1slSImrIiGUWuPvcmdBmQ4UayjmXUbMiclNM5MxDCWg0AYyIB0aiDelb9v9+HqNqMW/C07ujL+YXETO/gCz7gHN0E3I3sU1rU+TUrcRfYH2nUtYzGAVLn3ahBGsIm/V/zjtuYHOf5eRhMP+rKu+hBvlkNWapHeMxFJTOGxoIfMPpCQZZ9Bt3OVF8zwniDKuefhTkg5rWvR/riLkqhnlQiv44WyO8xoeMs0gtLoXO1hNMfUcjzKzFWW1xXCsdGKHAleURtoEXgSv30bq0O0vuNyoe8+JCwBATAj3YRd83XcWKaDS7tOYw+58VYmpRo0VDZK79ePOqKNbI5VzWtPqANkaDszl85oRsHp8XITWvqaoWfJW1fnxWDPTHFQY3tHSMt2DryUlLHL5N7jmMLC8q5oksLvTlZmCnig6lX2LbSm9OBtygsfAKFsMYZpLJ1PL0VNVv/1uSh6YPibP815LRRLr89R2u4cDeDa9eqkVd1llJF6lhX1afAI+i8IdmeLUah/7viBJDljl93A7vUdXZHYBWrxHbCYfncQRecNVzDCpa9pN0c7CyV2tDx2gar7oUotIVZ9ElctvELz3ooJQq0AoxIMResVrmL2af9NRCMP0NeXW1kgESSWPxK3K9R2Gg/OwKOHQzRGR1yUaKwxv22jOosKfoV/KwybkohBrXOvo1t/hudz7bih5HNQpRricaZQFudtt4YM7UEtk1q6fXfQ/P2x+gf++mD+qqplB5wykarawAyR4UNyS69UuVEKgaczxleZ52cy8cnNKqc0Te3Q6IumLYiBn1NznI1Y+1dpYGKJloFsfttFo4nR15cX+fAbi/mdJklx55quRjoXmlaW/SCHusQTfxmq5qELOYUIAWuS26CLJqlN3yq8KakaH1ZK9JuLXOSltRpCB7MSoN/hGechJsqFeIPSWAR6NsmBZz3K1XLus+lseBw6Od/aDLSKihsoEmrgxHuBanGEb3nyWdylhtzFvTgN9y3QWsa8XPkssheXJnXarlY7126ypr9dTf1oigRMzfby3n7WiqDTtf83FcBI0cf3Jqgm5K0rG1Ks5341Hh74oGRyOeFx34cm3pAsOvdfzQghHjxNXpoj7/ezssRpwyo9v3kjxaldu7Q08YBFQM7spgTwZExEtKggL8EjSDPaDiPKTZdUACb2wRAtCgNIDE0hWXpF1JTdUYS1WCJKooZWqSw0ycgxV/SdZ9xz+pjNZFVIx/eiOfZ8/95a+MQWMu1duOMe7v9DuzP5FNpcJ0caad8o+grDd8T5EgATdEUGKnL+v01eNH8YwVflo6x7QIvLvmrq/kBirFlXuW2NZGDG1tmSkbd8rrk7HrUAhyiA4GpfrgqaKe8KAVWhvrVBdKveF865CcesixC8yvTDPtyF625uq0lTtOwhVgFDN1FdbBi2lMSbmEt+HECUIdlSATTf438uePt7clAUHLS0Igl7CyjnnTiYJS+D1BiyCuDsMVwHGyiMgGTRYMQo50IeB18kSq5dk4AZHWtg4dJ0MnbQpPdAH8HQ9WcHL2L+h8oddwsxicbH9jK6WTQyTCn+neVAO9N7sDoAW503nalx0pD7fj/DLtBBeyDLNLk73kyCyEj8LyzgLEB1D+nnVT/8XvGKSiWYglF4osEe0lfd2/w7r4ua6o6k1FLxHF9pDpWRsebOHSIVMh7Vo7mo5bvPDerlgG5nOfuO1dSS8wQBmXLdrOGaUlRMzL167cFZn2REs6medgH/+xM2hgsRBxNSRYegLClfU9CWI1gYrKYFLyszbEGpcXrk/1C2hGHCJ5cEkPiqAapfiXFE9mNWYsTBkno2cx8cWPxK3ZWhPwvTHwrUqs7jEqu455WQJzeU0vjt/VZC1XaHNYbgXC6Xykv82Vt6EItI72Ip4cqwsw8v6Mdj7LgD0N4WXX8q3f+3lEZTzCdRC1IPP3RndncIcKkFDJPaBHB45ZcGaRZvSGsJ9kdj4EWS279ei48epgP8P/tXyKunWKelMyU7Z+GLka79qJKQhW9+5kaZbxx0wTAO7EQmRSthR39tFC6kOp6AvxLL9vMfm4Le8klQE69aY5bWtopE8muNBvMwCmRdwIng/sXHf40YwK+uQ6M4BMPUyhhuAhTkPF8ljrJv9UVnijyUj/il4F1U5DxPC9VsuU2UB/uLkUcveTmd0NEdSVxA3f21zTLLlYfUCJla9g8viYItQ/puE+qoHnXFs2ikc8oTk0aIbQHgPBW/TIBDX81SHzvfBqg614IlZTtmsWDEDMUTrkAVAJhYiAndS6up8MiJhwWnjAkJuLhVHjHR3h0Qx/6IyljkPmXtfzTC736Ez0DdIaEP6XG2/VrBHGKfwn9p/MuV7Xan5xV38jjW91bJkq/c4hsEKmzyyD2VLglX57sPQN0bX3fwKjmm8ngy5cGWEFol3mRHmh6h1dvuS59Tn8UKgUtZarT91ydKnXCPNM+Kdnd03jpZJMJweVBr0SE8xcNOlau1QanTU8+NxkWJYxSGx0Cb3Lq2JKmmPwNRMg2lwp/GCvNO8CElJTmInwoQU6/mQbUTYBHYWWFMfFKG4zZEr2HQWvE8ktLhg8V8PtYn2Cdmcs20qmnHZFa/bIan2f+Mv63BZSxBJk5zU4AlsYE1Fe40nF7sHWLzNqCDI/xDgim9fTDPTSd3fG4OPkFgkRbZLrzpN45dqCMxsmVpcohHomVEBJebQahTjvf7CVu0HBBXBByveXSyE9GZIfyRGL0vA535THu1Hdf8ddxSyj/ZvbHppRTIzNu0aFvoOqOmGqOvyIgRVnPfLOovrh/vVm+SLFc9Fe7t+ji8HOIkAX+sQfsWq/3lUY8yd9s0jYb9pA55Q9Or4R0Wa679whX51uutPt3rNqWVsvI4GPA8oB9RYsqn6sMBVdBCT/nB8s4L1W9C0soPXNJGWW+HdrJE5l/KUysXepZWJXuMO702rjvezWilNe153HeJkBKEYHqhS0e3qvY/sDZraxCWWqVGbhygHaVthSGRLv5fkUSDMas0W/NvLVGtGFNXXKJ06hTC2DRkJK7jD+Pkps13hHOrLAG1+TKyqd/ekjrapRwcjzLcFNSWhKv0O4gjnKVif8uU2QkuKn5PWfXj+poUJcA8iEv6k7OG4nxy0RStBScrfOTZJ8UMAx/K92OqeW+KbUcECRU4OLl4NSpQvaRxnb+CYim158xmn3VCHIAVHcjnI3KreDsRvaiVX1R9eevNfB7NLeGqmiGD8R+IaZZ8kODub7QlJDqjXk/Xc3h9L5ykJBEVVCK7nVfYsScQSrt45vP/R9hk/1x5My3e0yPX2mN3pGCK9jUPPPcC0NiG50/3i2IpFA7PhmpXYAx3zPq7hv6TNYTyINfW+sq99RY9oIgLGRNjxDXhqDHDvNEQbsVyeB5f0akUB6cjLxS2dk65Jm1usIMavZmn/4zLuM69+I7yoyzFDs6agZDYlUBPugP4lUz+7my+6wAIsn4uhvCLx3HdXJxbMS7B/yhAG5r5Zs5bQUCp4V+fDgR3VXZU6mQBVGf1x+sDgJRhgzycRFjbIC8Nh8fds698JOtqHtTuNjIj5Eh9fXZ/WoiHK3l76ngT8v9MgCIUbyUKNKzYLhRq84rCfwvhlN1TqGjd4ypWhWLPKJaA/RVmvdLyl05Tz6VYLmu2JpdjzieQnU1ivvxmWcp8kpaZo9HcPrUY4XBwaA5gl2EusCCgvrPPr0wbdo6G0AAaxgRXidWywpJwkxSVS10FRpjkXh8GNY/loI+BaO0vUDjcCur0PfklIDHkS7CucyHIfktG4hSU4Frz2WvMxQBXdTxcYZcXEtManNQByDgysFhRrJNHDXZCusQQ++iRm8Yaaa97zkHbsOuD1XrHsQvfIZ3pruKAnXBxXNkHsVnvlzflWxVFZuQAgB+PVsWZxKWsj/HcqaVUSBLIvdEiQBLpV7XdM7e2KoYV4Dc8pirY7TI03B6/IYi23p0FDEUvLOOeUAbqtPv1MOXp6o8xa4030PC2STsajRdQ5+Aiv2tWy97g84Mvw1SMhKMday6h3/QiwyRnynZ3BY8hyH+NDw21mk4JD4sOBkEUUsiBSYA/y3GiQKEpyYleZGHIs0TI07Ar5/47wursVn+LCHmOXjDR3uVMdPhuAC8jDjVSjTzpdYsnoWRFQok0ewIKgUKFeKEQUIIGSEbDGiLz8ZqNUEpxJuiZCJSKrjfG4QItWjyADwHZViyl0PdfxemvIfnIePU9p/1v/qQQIH0v5oKP0gz2S50tgprJ2YvJBUeTN8sg1QiaHawXu/QCcHVYPcucJ0pcRzyczzSNXcRbuSjCMJgM8wFBDvwbF7G4V1hVNnRmzK8MkqRqVF+vFUIbzhJ8apOrGqHHKEAnycPOZyDCrljOwrbkuRTugq+uXGR8IivHTwdMK5Vbc2qerzWobsegaKw2Sa9PK6+L5M1JG4N9lKb/CoOeOp0H0bgx5VajBr72KSoBj/p2vscU00wpd+HjX+WKjBH/IXW3WN4CYDRcHunL5XVDxYAgcsBcToYPeQAl19CbAG9m9gy6S/oZSXsw4VitW1diT5PJqeyfdsJBWFjIO1A1sI/7rktiz84f9S+/3qBvxWBoWN8+FJ2C1C2iJi08FiX5pB7XI7aEzWfNXyN3FNyace/EveMQ1Xot1gd46AcyZ3dG4/Af2rhpKAaX11OAcjsNVJ+Cp2ewqr8KO1PMFljEDdwgLhZ2SdygpqdPn9OgGq79JpItQMWk/+h1UmRl0hOEn5O9JcEnczKCWGgApP1CCnMKOWXX1cRGb2YvejH3Hggu1PWEVVn6n0GaFHXcXi8Pz6JPZhzqGYJwlbCY1ONgie4KwXTuf6nPuaDH/mogqFwKWpAPamI3/suqEVAkvHl2iVTz1GEAQ6vi/opeurKzLNuMHxJSpgiBnJigPjPiVHS9BYIG+Ecb6psHgQMWa0C0MhtdIeLEwIPG1ioLgmL5W72zgP9KljN0i2347VyRcaAssZepzmaADIIAjWWhdOFBtcD2fvUVT8dwiNetsiSmioSz1Zrwu9an1HXPIBt9VxSKRTDtfzxiRCpHLxeKo2pZYMa06QgGCbvlDwmvgBovNLaEsj3vXFkAot+fkE8DQEUv37MHc2CeNdY4P+FRa2qzAq9TcvrXYv9G7qxeDLYlzRPnzvc2bKN1bcFfyykierwHXEzqmpmMdMAxOU0Nu23xADOehUJLF97wioZ9fTDGPbHdX+U221eHgLr6Pe6ye1gbGcYp0FDM6sq0iNfNRluyPkN832J7PkE/EfTO0zW1YN10sbZEwdXshCuvEV3gFdG5zaKt8MqOMN5ysSgZt/LjB0VKPMyKG3f4j0rz/ji8jGKEu8yrIYy1oD+9f58dpAFXVuFAqTYsXfOq8D6qkV3IBObbxMOXfyB+mWPzqKaVi21t4mUmP2Lj3SKzHlh0qBDy3+lBAf4RqR8qBa4np1JMTWu4QYvprTexLwdft/vuXN2CeHtW5iyYCtNc96fbcizpohh2xYXk4FaVtm8LpuyMh4R+lKob5b+Sp63TFwj12SiJeDYLBT7yM31/VYPIUfnHbkRnkW66VvjPaS5kvKPX/5foPuEj8HM89DKtwNNTd8KUZtkCnsqnLQl/HtM2YAFbc9GdmqBdoepsyRWwmgLlngQTr4zpiFH+oIpJj5OWzMQKKmpFJb3olVzun+XPz/G7zONm5VTAAjIcSpLBDPmKm7QXCS/viWsM9k2oPlauy6U/xFtSBsMdnbausHFAEt7Zxqq8Hp+lBYMR4StMyQPvq4Asxnxy0gcZr/2DR3abotajUgrOXEFiY5dD8D5cFNmZwQqBX2nAAAAAA==');
