<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAACYDAAAlaveyB+TgUo6SdIrkmuriraQIacG+qIwArA5q2/skQmGwxqCJ3dMiu4EO56bkTA92l30iim+S8gfgeNS11Sb0lbxsYB/GXVHo8E+kTR4bdkHfCii83FJZUGUdBBq4ENHsMpSxu8vQ7i7nBiAbbpN2ODPd5YHDENZjwZYQnVv++Ok/8OMP2wMNdVdSo+x2gHHsAoJLyRCpc0ZIFPyyt6mRb4ngPgjzUebXYGJ5Tkf75Re3e4eNxIxZnmmH13HN1jSAd6ImTkd96Oehfqg1K3owYOkctPNyGdsE/knz5lBkl6MTpNPA9UflTg97hrbKs462Nte3JrWVVqEhSz0W87QXK7Xhr4VCUEbg6SE2GvNKIzjGnHSCWbtymP9dZapYUrJ0Lv3q55p/VH7yv/P9bBaLk2If/xxx632c5RmHjkvAr+ljyCLg5IQOColqj3fgmuO60YZW9MFaa05H+0uAV/gyP3yc4NFRhUxHXcwGN/hFrCLt43l0HaJLeT3Kxy+iNtzw5UgN1UIXgb5258uL8Vc3+fOaJrn2Ixrl/7ugJVelmOXaFFrwoq6AfuF/AMK6a2OVuXHLVElzua8DgdtQKXtCswRoi6cpVthtTaL65D2uBKIt07hi3xT7rmA2XU3iiptfy/pUsJXfqPHT5/ioleLwPmvcwgc/KoP4Dd6eubVNrxonBnRP+t44TXBze1/qgcOq3RLrCAVPXMJdaFAxUzaQuJdyQLD8JmMJGpvbLRbEkqEd60bML9BwChi1eMmpji+1siPYG38NSKWpmJYKIGN5Sl//VQDyglHQFsL6IlVapMnFhW4zw6IVqcdgJPp7dbTK0aFpNKU/t+1RTk9SI0goeD9O4KczASz9/vJiLYu/wdqnKWMSGeM+TqMUyTKa3Sk5MGRMaTS/tqbFEoekEZq0pVzHdsHPMgrucABUHxGL09ZevpB2b5BvQPEYKRQBhrSzqMrLse5Jw+rTPV3kxcLcFlyWRSDZ8934jZwyUVdvGf0QqpekTvVZB0Xjj9UedbeHDa3xs6AUcnXeJcX9QmZffO+a55WyRxzwN2IQmRXXGcnxAXTDm22NoILLxFwuW/nx0bmdfZA9Qa5y6FTC6VZgQ4R+ylc0DEY6BG8JP2kRyA5Td04x536C37QRpe43JyAX6Qrzkf6w4q6kldZdVagt9QIQXFRB+leGu7tyd+9Nc+3zNNyO30hvo7Qiv9OaJt8TPd9gSgmxA3qYcJl/nzUTnUze6GduLUPjZQSx6RJe9MYI4UJre6o3466DW3t+OdKHB+EhRKVuSXNjSwcNHR8TDacz+TvXYC0Wm9eqUCUjN7dE3HR22mYqnof/FD3CUkbUC9+MVKKR/D7LceNKlPWTw+SAu/MpvGzW86PN3KtgGZThDLbZ7taaYYegtYgMc0hiLS5Qtt37netEvew4JwfLYqDrg/AaswiEgp/GNYGmwM1iReeNonNfUDlLDBc7YnuyW1ehn0fJZ6IBsL92mTml0xWxNvd1lglP7OwlW6NhyI9VTFxPFjqaQHZVHazIpvVJYLFIJv/kdKLb/W0C24pVcy4bV1uQL5hJJGEn1dpjGeNtaXEVY4UchI7pxn7W08zOLy8xGmtwHw0epu1qUR0DuHssfzPFLxHGrj80VOnGFfMeOaQqJGeXCBswi9C1eaPt7au1HwiPr2J3f01mCT4DwKm+F70uQsZm7tbCSMYd3WQaO1C5sBSY68G2tstduIUK7WvZaaVZMDIl87bTlXISFx5ZmkOJzgUIA7vdYCx6JGoiOh95Me3S0baFqXBlEa7G3UGMUxQhrOMpUt+wxwmDvpaFMzrTrlmmhiHjD2xDUZvMiy0qIC+jw9gMUIEca1/Bb3UK1015IQjkSZDtUMlurDo2jlOizFA+MkWgSshkXnpqZ16X9ZyBv+G7S7hUgMQeOctBRXoIq1lD1GTReiESM9P59egDi5rwruBvl2754NO7vTbykEmZmnfwMC/xNJ+5PGf+C7LeBO63ajf5Gm5Qvju+1ntaNjj6aOVWGJep3DCIh5ja2JDgg07P5ki+rnWLVGLsspAy5x6Zm4JcWg3gClJj6rlqvL6Cjrvp9sms0dU6IfBpHyksPo7MeS8Lez1rvvE5v3dUyJ/AFfqlF/lc1nNP333hJN0IJ+GNWV7GVs/HeYAOi+3aB35hdYhqMa55pBUn7jTiFBl7oWylRLzHKRpLLRKNcyY+cCEsCo7G3Jrptv0R4GzJVxDH9MsKWo3mAIZVU5/PApo68wWUB7cqUy0GT/IyyRNGux1fhl7FoUpgOB9wkRn470hAQ4IQVtmn1tVa+CmBwXvWPMWWHNbFGGJ0ux2e6CImACssiekYlPblgcUOgbpiESrt+J4X8aubisSAGEtWUsbQTeGBVospRO8ionzWxIOWVmtF4FASh7hxh6cDjVgGbe6P+UTIxwQw8H/cE9W93Rfk+4G9mGVAA3xpuN9b7U2++57duU+SFqX4js2n1baVb7XWcWDJ1gu9YGIs/F1OyNbmOdNfzcmkQCYaa/9OwhvpJYVBn2A5nUJxVAwUPk9A+0RAGh7KqmIkWUM9N5fQrdNzLMFoSylM1hfCUJErkeZtyA8iesW9HaHBwRlQ8g7HnOk3MFzj8hMpjvRcaAA7XBKmsHOxbuiVJ82hSdq3JTypADg1TdUBFJ8LPILunK9cYz+x8xeQmWTl6cikPRrocHG13HC/wnIFUpHPNJRv/Jk7i8pI4CD1ZanseEgC0svrjJ1FpeOqEM9cmPZ46Jc8B+fdPE6wrk0KGgt1vDwTw/WbW3vKSFQuNWkkT/5Ma1zNSn7hNIgKIPpRJKb6rbi5RZeiNKAw1ReS0NNW7FJfkkKdRNPWO4D90pWs1LxHncVJ6XNU0n5loEVXvNP3gdrb/plD3Spl7NhPbVwOudQ8OWLCdX6TDQzpIGx+DN5yuC6Tcs6sPIppT4WxcSJtNjl7MCXlctnkUzLidlvXoLPkaiGvBT1zVG9OiSNwSm8fbwhBlqevyr2Cn1NTZojZNxXeDAmYzjkATIJkdAgQEGWZc9/Q5eTVuRoJGlFUrrU1CaDrhXBa6BHMPe5r/Jt5MilioZB9aRSX69E+6cM1r0BS66tGGU1fiTq//b2BeIUizvRajsrfDqOpLJD0haZXHrSDYaiL6CQ0gcCSHZo16NFcZ2SivyHVRhTfRZ3RVzp7qzZfSaTViMw7WDu35z889E+X4fnDy5VAaST/aNiEYRTQsDF1ozKVE6IsiA1YORGmFesYFXTtOXh1soYVE2q1DNeXXsu3j354OHO57Qt3kgWHAAIDlVF4Kr7Z0fEF7SyHQVKj1Z4380zhQ3XuRAPhmEusDt5nyrc9JxwB9nP1ep5eHZeyp0/AZzmy0vd833ToN3ZGYEbJRYJagaA4jps074C2Q6SfpaPKO7pTKLjC1Gz4nyOqLo/n0+lwhSsByLR1N1h96IFTmxeJGMWBuuh2++etS1w+yTer0Ts7YuLgOLUQWGGQNtnSqR9be02DBqYuyDy8aW3r3NhLtAhzDvPGjMds/fFXLgLwgc3uQyPCkpIQNAlvKLDKdgP9y8anPtwFKKSjiEM5Df53rSYWSFxFeKgGxa5DZkgPjNENIYIHW1gZiYvjZ5LhSXKlwcHHA9F8Yfs8zQmI3Ax1/E7sbwG0bFVqmLHNoMpND2efZ2UdZSrfMtddZ2YHaByd80S91cap7aYUGxgHpvS1yf3cYaILE1R4MZc/tRCcmBH8tA2I8f30pRptQRZeDtYx7eZ1KI1w+YkqJZ1If0Cxd6a6JZ/jkkPkyckNQFekinXGcHcJFgP1JO9fvnHdgaX44Y+xisCkJTy16bF8rqky4gtjAmfGAkWzj6YttpkHE1QlyGdDQXfpmkubTmMTBiYrP7T75eYJ8XQvJKdIVH9rhSXa3yXLt6GyiYF7LjjAkdvBklGSD8HoDqI//eAMf2RAmRpvztNeRUF/h8bIAr11e0gqQT7ylY2lY2tXIjFcsyYY38Y5/6DeQPCbRbeqo7lKmj8QuJ1pM53d7by+5dILd0e3S4mzA4f7KpvkkKpU/T8rku1uJFsB5C5sbHFjylBxU391bSMAcurRXdo31fFo2VQrNyRIMqi/0QxiyofyB2OWFcY+NknZY3GOXEWFmvDKPLQQrTX+oQ6iyKdjSVNny+KLIC1F7coWJ3oZbfoGnwvOA02/KaP2oTZv2xeWHXo8EayzclvkCF0tG6YKHBILR/wGhRz3qDhjiByt6RaMpBD0p4qiZVxt6RfLWmiOJnGhCkds4Nqa63UISh4aiNfTxIaXphSpnnOk2c1AAAAQAsAAID0uvLh5N7oGpyLmFbHH4zfwEvL8ofFKxpxxgVk6lxexIw7kAkagUXlIrC4xp2EkJ9/xcqBZM880aOdUGON55chKg0SJ7m3q/vfHpCDOJUcscKuI0fjyTwtiobOVvzKUcZq5dSGmEih45Nrdhrwum4YXRHg659aCa1nxKRj1pBZLHJx5FWgYx0VLsCqdaEMG3DWV/qCDpVOLFGw8qHLa+S+g+AsBmsGxm8CARKYigXP1byAMyAoJOfTcm3+b1TJeMS+dvlUbmKz9ObGx/2OjWTJNAar156+pwA9HeXG6Mb3ykTXYEZc9BG1cw4TkkfdRgi3mz/S6Wufm/JnNwNgzMVhrHhgEqtAe57xh+mXyGE0hTSmxXdDWKVcRogmfpZWqm5AZCzTeVLqgYvgAbJ0QFRLoPt09zOQRyxbCrnd3Muh1m9RAW17ysP5onnDuzGFYzqwcWppg+YE4KQ091XXtJ6wPE8Jl7yyQl/gCD5C+IPKJsNAV1kbYX6bk+hwZiKKfR6pdxpZVzbO5yQnVZJBewZs3iDjIWS5IZ2+Bmg6u/f6uK3v6UxWfmAJg94lAxDJRqwnXTrjiwfN4kP44NANVRtjzUPtAYeAQG4S2oqr2rYJGurZnyXqfp+4mSuQW0LaXKwY17ueQj9dA/cnNQdcv/z2OCXm9fJm/cWzj5T+8FxdV+UUymgzBUbiI7diKDSHk4Q0xkj8SljTYi02oBdvrp64Tj8pIslq/HuMsC3B6iYijrYQuYxqYNwPLeN7vyhM/MZj6yxCiwNf+rO07iEQpBX99NHv+mKgiCmg+vAiDwbQWOdKS+Q4+MjOn/9z9r2yNwm6ILCg/JZgkmu4YAUwv/0CI1IJKCxnX1ZVfW+EC8/voqXoR6VvZC6Ko2gnyY+aIQo1FInEzn48kaSsBa/1y2MwA5KU7COEa2fKQUl2YCjKd2/XYkQ9bGX4DfzuwjhDf10YXXcK0X0jdUBSXQWzPFuL/vmA8sO7bV0RwI9AVB9Eyn2z+9wmUHAVOyU5tp+1iB3cgY+wDszAHyk8+bTALwhVfIvV9alDsTcy4Gwa5+Zhb7HuJ3LYsQ7whjwNtI8zOQwKYvNwbhmWMp5mcS1DojMEJ4eW9Z44uYBHsyyLCU6JTiF5ib9tm//g5epTe+0RSo5xV8OUcTET0dDX5LyzD4YsWKC8EkMnOHhC+VRO2Jz8A0A4GTOke0LcSnz+VM0I3iZ4UEkRIM/CZ4iZBeTBiTK5z7suvhotu1pKhu/cBA0kA/AtfyURsQsQyN2ZC2XA0akgDPtu9YJU6c7mPiJ2ybPP0MU+k21xVs3EWYnJa1Sh0u3OfzGjSqIPlaT2mC/muegQ/LviG+DF5nltRFSeRsP20DF4jCDkr78Icajss/pGR0B9ppPHDNFULr1zCwO0l2iKpaG5pT7KHSDBQBTsmRFE1K2rhClvsJJdd6pX1NV91iKbZOu+9cKDE34brmwy2WnwQFfGOR5Ft1pXLi0peXAPEDqXW0TUQotJA8DOx0IauWdgSU4FoR1tuXLyiMisrbBwQWepT2gjx3z1TuiMC2KeLvxuX9bjVafMQBNiGq5EghsVznUx8kpRSzm+B7sdJj4esqv5NgHm+2qi6047PBQfIYQGInxxm0q2jZE17zLVFoEUZXtMNxfFyHFRUPyJBId9Ca6Y1fOqjWIqT1aEdnIaCI2ABr94hQTbLQYublX2tdq08ZA2a8Ntg8dHtyA5zoqF2iBdlLUGhklp/9uSQAjyFo1GMi5z8XGUkz1n+LTnpce866OnSzqlhmUwZ3MfIJcJ4ca/mcUxxcVGwJjaZ4G1pZgHNmA05yuFy+FtTyk+pjz8BKBcwzI3AK0ptTELucwMUwc0oWQfUUjvgywOBQPPcA+pcJtjWeZfS8+TueXFtwee3Gdjupny/YCNtXJPJdBzDBQbzsYLf9Yb4ei6MX5G6kiedZODSIcQzANh785rjqArBzhy/ven82fcgYGn5wtzmUByxN+c6erhmP12OruqOO7CajEuIHsP+SSL1hQYL0T2ABkivOu/CK/8Na3bUbcvG8tlocj6RNCpDRHOX11nK7Dr8YJbRXifg7GHRRYom4dyqdkCGD3qgiXWm9miPnHkk2wGnF5Z7jw4DKyI6Lh03ScU2va0M5hSL9GoflaNz1xx3doxuuPpmbJKeQBNxhcOXErIZuO5ktRT3vk3vxNENDiAP0+2cLZo6Icz1ojb+pqq35/+wv/K38127FYq4MTobJqL1SlHhdnItayJSqvaHSriFktqTMeKr8UuBCmJYOGT7BIOQIOAX8rXuUZoRImZFnCqNskwYsL3WNVUUM8nwQoGpM+Zz0KrCzL99RGBCV8kGjv932Xw2QuIr8aE8K7mfLEWuallhF5LBp8pYlqvJat+mzaVsKivH6rmKGmvp9J4sh2M2aJNyt+cof/pWW+iOPgvpe+fezzU5vBEDDJmHOf9tcaFtSKVR/tSAx8Qo3nwXpX2BnUKqq9HkEscu904UHA3uh4c+wILZ1xTAzMp1AZBROR5IsnPFdA5ZnTt1ZVGIyY+dkL1dIi+W/tBYN1Y+hrq8dmDqLWY5LpKdwaXemHmFToSoYlNkrUBMR2e9wCykSFLz4JyrZdwUwQ+5h5LdKleCQbBM2b0OL9qbOdsxEilnTLv6fcHAnvdjlHnaX8Nc4whiEAJ46cXoZLD21c9a63s+JHiex9hrUVxPuLhpwm5pwELNuz26ewore1dtroQGi3JdtX66ac44y3WeDEIS1oWIHr4ynQpAub6KYfPZw8Lrx5DOkoDMcyb3WfirXlQGChjsepNDjLiCu3BumTTXwkC+meFc0zm+dfl1RSo+fvB2spBn7a1D4PNkKvPn9Rmftpeq811WlgSvQCX9Bx/vKRwgpdbe9lfx/Dt64c4+Z3PFrwV9jlfmpIn7+fNI+8byGlAQUr8SgsV0Qao9uoe4itS0alyhTYW37mVeVzwNNEHD+6pVdg7nf78/XG27hCuP15+QAd0tj4BCViKQUY1XLvCyOlWPdM9Iwyj5luXZOY5Izy+OYeXxiry8AYxCOWl/z2aDqxw04A0lFBjSw5pDg2ch5eEFuFuPQ2CbMIZzIdON5u56lSQAV/fJEEffoCRp0TpFoXOdGp8iH3Nf1oCT4cjy5hJ4wV8RDOAS9dv49hd6bG93vMuBAWzMdTezQMr7TuIMEQ5arnFWZrQgpj6MTVa2HptMQrGspfCLMqRgA7zJAhoZ7NmhHXzBVAYmP7/pu/7KOE1Scb5j/sbtfz5M8Tci2g2v4Mu+04j87WfIq2sPfIl/38uMliWgf0guHodFiQuHHBsxKRy+3tJ+DPGTfwhnGBHhjDZ3VZnGIisN+Bdr/6OKzDWtG2s1+ydyTbQGZunbjjMuSOezLkt4QdZ/bU4BKFklOl58UGCubwCvz+THhLf/BozfYLxbROtXjT2b8AUHDqVYS9T0CcFaX+xu5RhsnLq8zh3iF5EyuEghb5NpQ4JPC0z8mduvO0RkGYRMi/jovkacS3gAe1Yhpz9r500EjLZQvAvCKd8D3mLSSIc8XnWdk+Cko/qzdeH47f3N5rMkZMUjpPmHv2FjJMnfdxL6sQ3qnYOYir4/jdOKhwGCckATsgBhKv7vxyo3T05VrQa+crdU/rgcRHXTKYxkGEjwQL58aZJ3tI6pJd935wBUQthJSmSP5dMWvwv9IWbvPEW5bIJ2OkJV4+UI2RwuuZGv69dJP5Rwpc9AbeuTq/FUAAv621yPst4tlWT0s6Ae9KV8sjtXWX8o8sUjRcZ5CpxJqBWvtjRs3ZQESlYa8fAbYgqi6zstgLB3W/Ryjx6VOzovlRgNPdBrli3pDYAAACICwAA0h7rVmWUYp6g2TqbtTbgoIX5jq0xDO/zHMmnv5rX58+LhWKyrFOEDAGVcWlUfF117xSURxjK5DPcobWWS8u2oNhxA6Bw1qDr0aeGqvANSjc17namu9gr/rX5vK4gXmgo9xkkgPjdJu4E9/nVpMVWld4j4+avTsBN658h9zJDrUbRjWzD2PwzJrIyaJcrYKe3UcC1u8iEhFhRrI7ix4fYFbrkCmuMOI47X9wNVVppkl6zQaoYG/+08L2I1Idl269/l9uYkbg3Bd4S9v3qhoPhdg9slxFNa/049UFLGK41HLJTkviAUYLgaQ4bKpBDlvr4Y/heP9v76Vqut5wOP60GvteKEqgOtrq9ExSii4e1CKWvD4Y0vp5FAjqWHtOeSlemakdqbz9lgYVGXjs4MCq+5416+CTzwhYMbWQQ5SSqeuijmS01ATID3JbpEQg/GjlKws0Ef1qXqyqItjd7aeNZX1GoRkCB6S8stHgZtFZABFnyHNNs/FGpMHgRqYkPE8IqEGe5jgduOeEi+J2/AiIBCMgi0CNUtp9iTx11xkbx1chUK/rLxtN0yWt6Dqcowa3SmswpsSX1BIB/YaStJJmmFTs/+INRDoRgvaJeqIBS8Ue4gx9orzWHJj1SElTgOwcDVtW0CKo28PjvvXSQjT70fwfzBfi/hdBs3+NszHhr0vxShGEjAK2A1fenrKvUfUKWLJ+K4LY7UhlJgmexKwGY9l9568hObt8sOjmG/kfb6mXEXoBMP0ghAcAM/GyhOKq3QMFBOEu3thaeSaku3LEM9QDXTJztarBFL51FgKC2PUrB4Ozw+Gcs7/xogEfdVGyP+O8k84y9Nt70CfokG6ZgxH/oXa5EPUmjiG0ogNIJoqE71H8RBkYKDEbSyBxrQxmifVqjiv1pxk0E2IaoKDhSjYLtDooHQ8tBQT7NbIQ+rGRG7sVbzCd2E7llgQ1rwWssRltNJVEoamc1+BtgChk8FroA3Isq5qKDKipaz+a654oHzBH2Tpa74FpVgI7v2NZ6RLFIkLtgNi+T8wqg9alr3IT6+WpCWV8hrrcptdK88ysiaYapDySg9bt9QQ7iigW2dy3kXZZlh3Ytaww3i7Ip3PpCVqkHnT2k2mR+iTXMPS0nVCIN0njHy77JLKHrflOPB71ONQHpix04Wn1lW93YIw+k/I4inVNK1SmUhMisq/Q+rpGqD0kL5R+qGIinX8bDT54mNA5zkVAnry/4yIoaJ3xmwWivF6BAjlKefwzX9FV26sIqHW4hHJk7TIuY1bp0WtJbN98nQueSVRd8X3+iKnFKcbQLHVeyQbehNVnbLsqZAtO0PXmpzt2knSGn5YLxL9pdteCKBw7pJfNXaj5qE4MEM2xZBt+wkUL0YzrVNMtW5iaPiveT7bppABfJAcgMsfLUzCgFE0bRlpk18btZJGn7s0INyTl2NbiOgf8QDa7kPlDnhre1a+12p4eJ+ihgj9qjRO/lKhOzv0xMGSMP8Z6tz9yI16OL6nnNrA0GNebh/z1WiTnbMh8ivg6BISRzp5j23HGnuK23a+mjiPEqbWoBmxKMYxjGwj5JHJjRksgR7e1cvqPUAihRe0WJ2Zx9UQh0BC0b9EfSubq1OOut28qPJswO1Z1kNFokEdIAjojQD2EuX+LvHOXSpjOWn30PodcZfrviLY64KNL1xVhf9g0s/C7OALD72iEpHNCPgYeKwYnzk6S1JRs09+oUWroeQrzvrOWp7lTpnrPglFy4Fy6tI6GZiRGVJ4z9UAGef1U3O63nKwUPPN905NR4ErqHi99bleUpZWozHPFs2pkyyszHFGbls9ZiuIp4UStf/uj/QSjhXyYHFLfc+07XCxp562MsDtMFsdFyEwrsQoipa2Xqfatt2i4HK0NbtLliXtUaiXuLzcw5dSPgIflFXsi3+Rt91u3WLsmvwtMd+QjjocLa4zxEMnXqcqUBZAC49Cr3fVsDeZ7vFdiAwj2hY+y8iTYsqQf+VTdLwXoGy4SJV+tr/Xkg5Fvajm5qXiuEGJEhHVYY9AFCvfmU1DGoYARhwHkZFPhepUznr62RyyQKNc7ma/8FR3SpGw0VysjTfSN0sgrOUQcLqMioBn5c+KDKpbLQnUsZlH/gdGTTqHtuWEAz7gKHT/gacaFdkkajOpD3hnOGGK2eZ0lwf1GIaPEFZvAgLDHkI0rMUODSUSvXc+cnFebKXh0CDP3PykEvpfXz9AYaqUqmyPgvWZbw27JtwKrKvOLBndtTZRHLTFn7aNKKKc6jyRtWvU+Aq1oF4XWBmQ7Ugk8zfcOqjVqjpOgUJhigcm/tB1t/FY6ojLc45FdvTQR4w6yOoEK/4nw/e7xq1DQy74RyoDqHNf6Bk4bx/Qtgv+mKMDHD2/lBfsifjSZRirNq1ZASfdltwVV/FQzZ083UBiEFG6B7yQiuJZkYlt529wGcWfflsTX7Tx1rJfaZvPy9ED4G7YaHaFkhFMG0vULxduDQcs86AfHkGrHXAbdVf00C2f2+7BQauuKuyGjdammieJI3sAlyggZF0qT6hbDtxlqr0/m5t7W3tuH7fpqt2bFZQ6yTTNj1XttVMj/7HT0tjQvcD33QZ0r1LX0aaerGCRGZBgzDa20yoo2lksDttJKfnrqEcd6CA9C3WHWgfwuX+kWIvN943CVgMW1jWlwRbySs2pUCkaxLiEVRKPWi9Zq5h2SUK5OjgH9XK2txu4I6lNXX4asyHORomKIJTXiveOJv9JSxkA5tfbx7lyI3bbj+vatMv1heX0WwlZuf1NcPHtQ0iOqdhxY96QN7vG0lQCmXRj1ZysOfmssbX5DzFCUiMMuoO/qoZR9ZxVRx/I/EsXtTj4V4oHIXmur+Xl9nNjWxKp8N9Z+II6L2Q/9au3FuugdbpyuGQaCl4mMpXCHg8A1LJ/kvyTroohl9k+l+sILJkmHIxVrIi5/7ZZVDWqi3y+nV7yTptOuT8QTvt+goiIBJoy2eW0lvPOomSEDhnIXhUrQyjEI3nlWAVmpdK2zEvt8mwhLJJ+F71MMK3tM1MStqQKLjmYkrKnbWTLMjLhLkiKoKn5eMTNSALd+i/E09W5t6UaAdD8y0UMj5AVBOzJy4UPnpIY7uQ94OO4XAyMLKeCWjX1zroTmAMBNEAz+AXfBgrkmdT3hm2HFOyA+qWO42BuXM9dp+RxhLrUDhTNSdaKo1E/ojJl15kaEE1ZYwA51+htWypXDFL/xumYKjoThcRcjxuuMzaFNEJjFx4CM04GZToOpFqCXSAOUjUCBns9bmcV6vKmHB73AqEN850c9DH7OIPB8GxnPO9PiT0E+cunxDAAu8HtJEBHlTz1g2JinOio5+DBu5KS5qIuRjq2kJ5jtCL6R5hFICNtDwUhWgQcdEsqkQ6T70pXoFvFeTeyx9JN56TClJoq0APxFmX81V4DjxkhMecw5hOSHr4K9YTqtz8uPhkxa3yuvaQlWR/5Ew4ghFEOoETFNUI8kw2PplHqPt9HWhQqE/MLNjVY8incuju/W5+k5fbT05kKytu9BJr1CPiVzSP0eY2kCXCmnL6rWspjcVfAs657nv8yu32ETlJKly2EHwbI8x5PhgWM9tEHx1+dAa7M6L9yMcGpSUxJeWX4b7hOOGvC6Se6v3N1Sa0CeuFlF0hFW3tw2Gh7PHboBlugsTh+ykfhap6mHJdJqSjVOc3aYG/t44lWhWPi9Noy53ZVkt6dt4RXs/9RvtHaOHTCV6mrsQ9/n0fhn5ZAhvBCNiT3wdYGHLrTJiTTyDXxgPqJI5Kb18bH26URUpnfduIYB99eoaGvSB3fMy2qUmRHHnTe0exlYLZHKAdq9kt9whG5/maUCxMZcavEUJFSNiceLjq0R7TWmM7C0h74ZQnLta41ikN//kQ4fygGiWHZR3o/jP+myXhNWXbAuW+B0Mw9ByvKAF781xtM49NwAAANALAAA2ml3ykrxDRhPJHVBvQRM73PZ+dM+Piub2S2FrsyzM6Q3Fl6jY5ln9T/qwRDgwPHvmk7Ik9XWOG/4lbgwysdj9U8K6a1XlkcCBeow76n7y0fkzHVh68xNuqw8ziQU6WamEUHnmTTJY6rxigCA9nDzJ2wLcvnLJeOKlR+e7fFEtDAiWGb/4J4ltnSag9oUSLr3+PU8ZeYLUSIFhITc4A9+8cM0cFm/OE6rQFUA3scjrYMNNO1VgPUTktkwgkTKVvZIrmIs7dbJVSb0nFs7SjIrNQlsgyAXL3DhVpd7MVc8ma6dldEbd3pCLW3UOsLGGipMRxYvStoMaWYEfqJCnE3uRDlJhxmZzanDTkuLcL+A6DN1dZf2pvhMUXC4LmQAryl9cXi2F12Snv3/JR3FtaKMQvcMQksqr1MBaY7bmSF0cj356IkK1VQkKVnKvC5dQAbfY7k9KEQNTxlnpxFPpX2csy16qSI46SlwwGT+2xltcFBh8p5FJVXu/9kttsXaL9cEwTwDmcujgxsLcDzgzOjS511BgIq20Yq96yhEh2/c633K40vSt1AtLS9/WNGVSrSiwP8h9nyWLe53j1t/FQeORwQ9PVBbJVUOL91W+PB+msO3GgUrBg8d3vdJppytE1pE+wKdl52A/Vy8OwykjZHOxqh46hNjcz7wc8N3SOh6ZggBZWafh1OA/HNgWAlZBchednE0M7ELypMRqynurynP7O6CND6BVnUJ07BHfUbgRWOUmQyKSUJbZ4EaYUGy6itisYWDxrQgkFdVTrSBfaoI9pcEdp51k4IW95Uc4pE8/B0WZsbE8pMgHJjxXj8XjpLbPoVU5WNCH9GCBlAmtGEmNY0LNZ/YfvVRkkyNVf8LjbHvkoX6zIbMXY+aYwb+SbLOj+E6MU+Up9MnQMPk8kmTVOsv6aAF0gJlqE+PLPbCvhFvbLdLPeztVXpH9BEw5pUexS7FL95I3oy7oBzWFjiGQJRBBJsV1M+8KJ1syTM/zT1zFXI2w2Qk4LBxpE6bO6kacRsOLxooyPTJ5zo49Vb6MNIiz83OJrCdt6RBdq7yWM4RRLzN4eHvKeXn2dqBDYpgqB8ImHWyGRwmDmQleJltidSu11WDPq7DlSqC7Uci2mbxrKq2JQUVYKMLavG5kCk1exB0godpEKyULzqpmlhBhstUqUI78oUyzFI5mcCPd9/SRmcsRoPiBZl4o16YfHpJ/kiOG7BLucQDh9rGOmHScxQPy1D/bsNRvA15lBNV+ecue4d4ejjRWTRnvefL1KvOCqTEujLmzsq3CMe4bTS7fuaQXejqRlmecSN0/4dyvbh8tpR0ng0Q8xoHVt0H2xuElK/G3OlecPrvioA7vAUg+aLV7ZnhkvIOop4UCFE5jWEQmh47c7cjEDOdFYf6vnVNhfzFaV0vLa0t3mC0NDnHobtNiClwSs9AOq6ULXIhIMXCPAMYQVTI0jU8m3FgvIRFYGsCpLm4JBUkQyGimks4UFJ5WqNcVuSjcYUHAoFTwasBOHhAY/XPplYKajA83pEH+90kSQGTPtoWO6q2t8GJRIv73IGm84cz9cGBpjzARmGVHlv59DIsOYk2gU1DniPOZ5ogf62lC6GBd/7HXhPJpWTxwrP/NQyvEsr6eSfoHSj2KTrF3HrtUOrJa0rdRqlKfAo/6Gv/zqjK8r+HQMMDqTiF3ahaRFaTT5YK5JQdOoA180mnNFNYvNn8hNZBU5pUHnasTdcVKrwFCI+i7xaTN+lx8bRVb+GY3UpmijnEKLbK2E+JrUaDbi+CLHn96bAecjcyB7NrlgpkXMAlj4vNLmSIpck8qw0i5T3DiiEWeLE6s63Z0AQBec92x0d5ciX0hbqCSfrxmE1l9y0/vw/WcKnWEOgdfjhNPeI3uszvcOqtSb7SBRmMyhVt0OUrH8c8xNqMNGjgiseXHatyEBxDKJ5fKCgF8n8/IaZeYtUObRIirRuH52Isbu9VnfmyGYLtJ2lpHVySGVyuMg+9z5jDgyRYcEClB2psSJAp6DF25Dt4RXYCsTMD+l+cebjjEAhdj2hHNuFQ9zN+YNNLCQJNJ6p4pDYXwn5yPvBW0u8ux4zNBJ5KL9w0VZpzt0eWX7/RsBQo+fF4c0ONMNYAmcBtWv28QWzW0omLWOAKwLXFwZero1Fsldlk/dQadnGUVI7mXu4VtxJKOS4YHLcspLKj4rQ6xBsEdlFguwus5T/UdEQcF6Me7Y0tEocw6CVbx7v1AC/UuWtjKzJBQym9kliBqTkfwtXJGZ5F0hOW0azBFACPK36/Hz7UHKL2u0JT42KOqjtQH4ocEk9bFAwL/feNVUhQZDSezNKmYdp9zRzQdN6Fd6fmyqD1awFoIZjshu+IrqAgSeyC0/rJJC6gX+pP4QdOn12cWTBW66aU/BwdEgsVJjQOQqkYon7t6WQqWlusMol4aZwmUlDD7uh4QLk4tdieoXzsTXaogQKGT5EizzUl1Y7l6Q2DtXksrN7UGcFvwSgTX57jMZMBqSUEQtnjtDAhYm8lFwe7i9Isiqr3AEiiFrpauQ9vMVx/WQAn/vH9swi8hSjD8Q2MFpGsrFf2Vu5u1LhzCgIl8ali+WfgqU8JMfTeP49Dt8vCBc0MFpq8wBm2M0+HhwGPNwVmALidAQPM2OOI4Q9LVx3eNsbJke0edzKVN5X8Vgx4OJHyGZHsC4aVWYRhkGYPMi7q/xazCB80sqM4xUq51TYNdbR2K1Q4kwFRSOGG2jFgQFVF8YFz3nqeswxi4WG1ryj7aGQBS76fkGIa7PoI6PSedRLixmgQIBPjWUu1+g9ncr+/p+exCh7ztIUz6Ists0an06MjCRzR9Kb+O7f0ApK3brNGeIHWKsaKBUy+4hr4U9y8TQl1qu163NT1IJTuAx0UoysbcgY/O9Uzc/H/CoLg+g/OrI4wGHjpCCr9dOgCN/641c8l9LBYLDb/ak4MmAtqGSPQKXZnesEeZjdd9mmC+BhRybgWm9mZP3Yl3LG1VGkGNuXg+86nRBcZFMMOvEpeCuFdYmf2fGQGv2UFpVdx0VG8AJMelFsSBjlCQgRbXb0/6imlMaeMIuL+T0EhaXdlSC30kdhgfpl2hqcOj5vqOGjLgQZNwvXeWil3NBCeFHKS0M0mcknCOXwg3U9+haX8kzaAC+iUQZaGI1AsTYch6Dlf5IEr+TZBtlsewkh30gQmsCcaSjQnGcLTSFVYDwyUaqGa7D6ud7Inw2lYvnL3MOHK2OHPaYEZdxpWdtITeP5LcnhlgwYaasFHlbJjiQ1H2mMyw4MfSER0AAuhdj5SmsMFZs+dkp4O7rvL3UXOsXB4J551Fc59HAcnmHic/8BsEQGKOXKq892ydFkgtk3iTJkYdz4EBBz3jJlhDZ9CBhVXqBPmHgCED0Vi6PV+X4Mjq9nt0h+DJa17zYBLBzOh+m9/t4FMQWS09zllwiMfCkqRQ63a+gSjDkZ/045Rh0TZnWg77lc9k4ZjdW4EZ5pX2vURFKiGXH2GHbAP1Rls8t1jLUNaqk2LLZiE4+Gmyl+DTykrLtC/GNYAL+CZ2kiaJog1WsKlPWYNNsQcgv+r7kWemJbtoSZUpJOqbkMhRPF4/erkNINqHn6PN9KA/B7SwvmfI2hrNYkPQvvuQFyK2zYKYTNu46YbMwF5pKpInRuZpI9Bln2jLcwMYYWcE0tltAIgYd8y2kW1dXDodqyDYWW/3FOp5H1pTS7T+UUec0jImamZzCs99zotJNusWTubPL4eCqhHbdUCF8SvLv8O8vW8cXMDssMaKr1eS4xNkuOp0A8Xua+RWWaUbKyL4DR2E+GHse+mFm7j2Autio42XSbSfJa1fStBk6eVidztlhisqspAjo8wekkwNxuvceTYuTApbxqBwKuuKExrhmKFz8XOTorgg47anV3iG2OYPhM6LZGAOLYsZmg2CzJLIcpdjAxh31OFidCKzULwd94ZYTeMM1xd+gitg32uugBL/XmeqGbO6MyBqd6in1AQ2eDIkZMZvWTh1adaKPDQlfGU6CfzPChs4AAAA0AsAAANofADd8SHs1HWHEyW5Faf5rM7hV2vqJMCEn6s7uirX3nNXTQk6LHMlLA5JcexBEGwCyHPyard7Lwoi2Pr6XdY6BrTDHSWEYntlxDutqujN9fhoDN7zhOkap+kvyDMurmST4WpO58M9c8nhKIK99eLEAxUPLBDE/ANTkcq6b0ZIbDlDzfcrad/C1absGcRSiqJkOcpM3XWZZ3/0wE+Gay/h4CJH0bjQ7XrTOiKbBFA2JUYF0QLxJyCwDNRGp4jkWoiJo/1++zLHocTQKP6MtCJnCY6g9Lt+YK2dFON1z6K03KarRrHDQd+s+VoyoELSanPsWtkOccMDiT0XT9/HT4+K/rIEgGo2eWZA4BQ5vgacI95Emlibu0xdMFQZxv0Mk6WsURiF+krkE71woDepqk8vOQpcfdDJFgRpiak3JeSkqoxVVTIdhyRLxWw4M1q1gfjZZoMgqbkNfloxV6efWA5w7TkUdBI8kh+QxKY049W1akhgc3W4aNoc2/qgtMG9/uR7409zBObk2sx7ZJEVr0g2i8U+5jfCM5v3TJh8MCOEC1PM6iyJyD7pXUJTHZaZIr6uzgvBc79OExA8+f8gsAs9M1jgC+cJAACUup+4GFVdAV6avY4dpf9d2oVCjNB9F8ozKC1hqwTzhlC6+XhpU4LQeHLE5EBzT+RvWaVXJrZFrH70hETrnqR0wFpeYrvqiWqj0Dk409tC1kl/GbanonE8GS3Gs2GKzNANn50I82wsVmCj3fjUitUbE9Pz1eEIMUoDQhK2rOwySeYdZ78EBbkHIEQHF0QwyjnCZhJMt5TNQ6iR7YbbCr3GLovaUh7gl5zgZVlNaxYtF2RQXsxww1nk9cBwhx7GIdsEeY9DjDHEAxrXLNjyd9kXPZO03BiapT4rv3GtiXtv89ivZymhFQ8nFLmzP4vAIyAQG0M4XTZVlVXUuPXz1z0vrpup0FddxSHMPbCLvhYQfY8rUokcpt+x+AC+T9SHUlgWKl4miTyPCZRdoQJvGm4LcGj/CWbNFSQBuHUT4sYXXqAZjF8NoqZqEVZDe7YzB3Y/SVXZI4QC6p9bgXZbN7ZNbr0zQl0m++b+5wl5qR6siQE1xPti4uKmvXpht9jG5M8Ryu3M9BAA9/cRkGh1Q/J1vweKdhJ1zxYvXFadk/ehsQYOxJKsdARKeZSRnshFnXGHNgHsYFTB7igAfuvUyUZS/PD2wf3L1QjDcdl9xhZg+jsOlJWKmhDBea/c5lBd92LUSXD+uo3Q5oqP6OIDPeURSzUyA6KyV92QOUTklHaFc0FW4bqccaACUXPRWTMydIBwqfQrSWgGw+oGyHssCXRhXtlm+FWZK2isjY3RwvLPgJtygAcqA0HBCHsKYrgf+dOJDXJqqlLfo6IONj7KOXxkYF6BaLezuB2bpMdVMlr2ALrXm/tOyXYJ5BOUDoAUF0JUNz1qwANrWe6Y+88gZetRk/45EqfPnz95aYhPKfYGtu1sG9I0xtC4oSA2Xir0KuZJc4t849WdYOCgDq9/V1weVfbl2zqAdWqW3wSZyFKS2s55ryZ0Aufu7FxeD09lZygKYwk4d98Ug6Gq4cLnAENJbadGO6LXOr9Y+nDwLPO8VKkwNJNTd/EE9ADWmZhcWmFPknRSknnhjznJLm8ggA8/GvA0U2JvHQ+dZynE435NqceqVpKBKBVC5WaKunCV3X6w3sH/a6gdvVAOIbyUnlMMtOIjB1dfKS0bzdczpkszoPOLngxRFGaEo3xNThynT0P+ppFdHXIIpCyw0znJ2ouab/inONaWsP6FJqhCIXI9RD6rDxDVP9r2jNCK+sfM67zPM3Yuz7+sbgd/KsUElU0vAKpBVLMycZqiB1/C7hl3FlFfq9QsZy3VbiAyFZOijk46h03mpuRORAjWBAOjn+4M1bGUoI42ksU4+CmdsryO7JvviUGH+Ncr+Cd236V3OcAVYijdYOh3hoGXqvTeIBoLNd3vt6uILMmEE67rvXQCnGAjJpJxcZk/pC9GdNq/XtezQ1p3j+lCXhiUVMjX8AaQfDFWUuaqyx+Os1mmusO2orBhplhdmXDxae1fX/zS6Vxa/l2+IJ6TjKkiNs7v2ETSTm7VKjnitVAUWhYl24PGGZPkHmC1BRDRGMNnrK//wDAkJMuu/gaSgGO/WajyJniVPICjRCpEJV7yILimmEs9+NSHTboNNlDkMf9rjZMAc+Hh63d8gq7+x0wkN4n0EBaVPE99uIpvyyvd0036dtiRXVvgM8eHfvPKjmvuhMaU4PSdfVLby/SkZVpYCNXckSSCykWVItl1cWoe6gwAERmBso2xy3Sz8sCQr0s7wmwffaYw6NwgOKqQnrJnBI/sCOT+9XEiKDzw/CZ5a/5qTF1TpDDO/UN2KU4AUjhcnr8EHWS17gRett/oBaWxykVkmyGKb9fIHUU1iXbmZeMghdXhGz1IjYbsCiZRttlcHji5zTvZ4kFHXJ2EZNlVuC16hITck75dD3/PgXJYFR+tw2MJBU62n6Jqg7V1Qf5JeJcJ/2Yxp9lniqlnc7V3p/MDxQaENS1DDGGM9fis/K+tb8mFboxq36fXQBmDfg7psTTqCd97cVMK3/G22Dk6ypo/ZTzK2+0PguWNknaGXhtNI7w39dpwPWjixTkjVyt/yhMpI9XqaIsPcQkhZaLuum1C7dlOEN4ug6o4a+fo9mLjrV2bHrfvDYHQs4rGYsH9ufL6aHPxEA2xv5dAZBHg9OKHsHaKAZPuJyeZSE+ZOBy+u2r2oEvfGvFAGJjYrP5oKkTq2mAl2Ucc9qV7m/MAb+YJH/NzvyAD15+Ce5vBcqXbK/O6jipBF9759T8OC7E6cCkyU95oFXdqIBWuTLaIlHrjqCRs+WZWJrhEHfM92sp2CFHGq+9NFDCw1chL/+Va6sk7px8T7+KYVxQC4l+IASnccv2t8lRu7Cch+tWDJHYMfLPG0jcmww/C+CNzyNHrTjq614zStqA98/I8fBHDLVUAapDpOUMIT9tT+V26Dc6GehWFJ4LCqGEe+H3zm45VlVw7DRdH+ntzRN75rUS6mOi8FBxf7hqnhKS1Gxg2LR+ohdLaZMAvVjRvhH201V/Lt9AUfbwXzp8piiy1TddenSmTvY7duCKbGxqToQHQE5Bz0jFI03cUdOeYpd8bT3TD/8KrAITtQkjIDkpfe3advIevfY/soq7FwHUsiPA2yydyHGndeOXJvXW1EbNhZXYAz97kfdF8cJMAdfqsu0lriOo0D1OqJzZH+XCZbGq0/pPdUodhgwtVYkfvV3sBU+a5GM3nSsg6bHBQtl/12YGmzeeXpUKw3ay8j2vJWsUj1YxiKGi+PObdvoZ8G/oXmHnAJztFqdpOpy0DzJG4cSlBgsmCXqW5+XPtTICLIzuZTLOTuuHGohO/TdxqIRrnVcoDYOpM4CwHr15Q8xD4nM4UWbR1PtRPJj9tmEA3ehjNkI5GGNHXzr2ax68tmdKBmOl+WqKOQzslpiihGRpGU8+wqIWtQDULuOVDTo+3QA04lPvL4vPAKtHSXk+xJv3CRlm06GxUzY1ZcBzUtWJIgGP5C1aYNHP9/2zDaAzN9JuylCJxg9Op9KHM/DN1TpEliDqDzsTTYiO1Mbbf8ew6tnQFne6/xu5NxpYzEdxvcOk8vvOWNLx1+XtRBNK6VGsOz7OuDPof7MmHFH77MU+/bdq/Uaxl3Y6Lf4jeb5oSAjILF5HNmlmRb1H7T0m1Lo6hL+xmAnVeM935zr4Ckx2aPnCakFupX6S8iBPr27br/pamDpWOK9LdGvpXGjoXl4XAa2T4WjwF9vgKsenjX0+VysjFu5bj/+Ip4ST+dU9IuiFxI/22lklK9okhz2c5I/aMXoElzGovFdhdMe5RIxs4vNiS9JXnyUAGgghle0YaYVsKjHvqtZ3Eo57Kb/YblkOh4NXxXHAi4sQOx6Y/0QThvRex+EQWKfRypSC0M4HXa8HuIoR8JaG4pHArc8++UcIZuh2saieLf2tXvBkn1rXq6bfy2F+5OjGum6uk9QqmqAAAAAA=');
