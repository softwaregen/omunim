<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAAD4BAAAiIhPumb2tbzZmQSg+IBzyizYg+v7voRQo8LPRZ1tULiND2vcdAiOyju1A7N4JN2lhtP9YYq5ve4hOvP0S6URLlL+8WUsyeVErhf0DXsUIK++hGf6W4N23QpTQkDp8omw1aj3Z7shNx5dFpgCO7alYB2bERkTBvNGhqhwSmkKYVsuPadGYRCbYJHCJ7p7c7sDWHXY+mxiGHXCNVFGjFBYE/iFGDU+AeCVRJRtf9gSnqdGIre8TSLvz3JuSFmTKA81wykCW9OqMBC8G6a4hzCMOOnGCK3gCzhMZkUUi+6Fmth9vheHGX5A0OSL5d23usd3yv79JKLWD8kkxPc/tFFha51CHALtme+nQGrkLgljx+tt5qmncKoIygRPU5LUUjnZkINIm+lfcbefSzLnLIMm3ONkAD99Jm6xOsPRHnJQlW47tmQ7Od1n+BX5jYyD39r7rd5hds8veS8h5NKC8TWE4IHAP24Lqt8mYxuEEDQ7XpkmD/rbje4Do4NdPUP9oEu6d5nZTG3fyYFdoRPSxnUsO1boIZ8YmIGvCMrQZf6PwOgx8VbWAvWdGpRRRLEkjSSKdKtcLxxYlEJsDUap+01W7W2lFDBmJYLTBvN28t8AOHAljvUH+/QEXWFJG2dulX1SkdYqF3cWVpyJ81nDmGmpXjxtYdOGH3gHTVNrbWpQjHGX7nvrJVU84yH8VSusxBLD0r3ErZBDGHiGcFaQs+cJuacvMFkO+dBZdd+aHwZv5IZdc/NeMv0CtFyY2fPAz5mLPSu+DdNte1rOfMI9wuvyzdcLqonw7oUlukfDxfVQUJ75VBODZMDBdq88yAqCfhAxqD6rFV4vPAi5xCCz+SQ2DOdLv7IkPSjur6vGqcWG5wotxGhEFfZjoiKKVgbQAgSYeTXJxqlkU91cB1zL5hVwQWNVb2mmVBeQfST0NCkrGzgRJy2mofL66G3h1rxkQNmHoykWQqzxyWq9HGuGRCIPhChyS7lSimpTF8aNSqMkLd+WE/vQWvkzadgUvWrYUN3Vz78HYV8eE+GQ2NQM1e8LYRBjqVxWSN3NLtBhuhFuaXYEhcAK7UmHmPf9q9lwz3LRh3Hv19lTnCnmgpL/P5XOFKTmMWAPgPo9+n1CVMCEgFhWsSMFb0nav9jXKcwQ/Kz5dlGykY1KB0OF3b7hInz/Jzql+3mL75OJ/tsc2UgeIU+JgPYSFouGDxzrXhGQ47C3m+WmPR2ApMV9qIOJ1U68E1JMoEBsKTkTYX0MTDeb+erQEzqg/9FDPP6R3Z1FeUNGY2h0w9rGzRVW81Mm4Ud+wbe9qMJjEOr6sAG5xTJU0878+SOQvrtYovW+Ahu3khDNQvRt7gkurvV03woiHcLxUaeSMOom2OiMPJ/QRj0r7y2Oc3UrpUR7sulXEklHevuNh1ckx6R1gScL4Tx+K0dW9Ie4gi4mxea+VuvdH4rU+FjWcXhl4Pr+PieX871P0FUToD78e3LZZYGYV4xyJnvOFu1wBZwCJnX6ZCrjC5EGaeb2IDBVc9E0qOAyF1N0Q4G9K0wmIYxDs1gIH7mwSVGftTfyWUDkyLwJsFeS3wrpSr1Grhzxesyc8GCMGPrQ/WyoR5gyQt+LoVKeIPpa4doZS3HBU0UWqN7yXHf8d3ngyH3hWhvm2f0l0+tP6q/at7lMrDnvgH19aY/H0qOP99Bk+oivx3j2tcHcNQAAAAAFAACTKUKM2/1UttSpjPkEY+T+nXxr3VMAqNV2GtwWWKDcajsp6RV0fY8Ts4v+lzUaZzvckEPVtefGszFqkdT3V2D00OUZOTBNjKFK1IEA7b/bA+Cf37Mxaogjve/kgNxB+AUcnwuPRIqI48y/G7+MZkaKhNqpIr1TAjYKRyjZPTS66btnz4C3oYNIOF9XHRgkK3W4KPucXFjO6qEK5FEfgajpoZ0y2CmD7BOpzmIRFLTrb/Cajl20Da4urgRV+i2AVUdFNprFwrLH7GW4sE3x3+Ow9GC5VomSMg9YBmmVltNx1JxK7hCkfL5d8scoq5uMJG1We6gs/y2wXPpP4ok3Cn2ue+hwCdNKQFT5KmtiD9Ctc7y8nLDTbRZ0cooS7l/wmBE9uEEYZtZmmC1bXsV+XmdAsQ9uj95NecpLTlYQAJurhUKUHIkgViw9ntnEI9SHfoStfdaHO0KAXTKEcg11c3mST9gH+zCcb5yTuDWA5UUSgnakf+wahVZ2cYO6r8pV30lZhiMvkF84C+xgFG44WNEoq6rm3uuQGHXoFvt/ds1GRAHwvT5M452w2cOmSmdw6FCmA6+DfPek1OFvfu5VWfZ4wQZJs/fNgebpVRDK33POoLp/KQg+WCvZa3lTNvGCaMTy1bW10Vba3EpX/Ux75odY3ltmZiaPK0q5wnxUEgNZ4dFJnO2/JKXl/gArgb+r7FSpz/DeSmwSm4q3Iru/yvAs6NeV5mlu6FQ2+eMSehmc5O3s4KGyLyFrrtzyJPk+M8defIj5HitF9IJClLDnl5jZQmqTiZc0thjHjI+9GHmLKLzs4H0lVWLrp0ei+YdLfDaREUvZdKMWvlvXuCqUkxJK43DDNPmDxC0OWhTppvgj4+lPwjr3gQL6dr0zW8jQPEFE96wquK7MDyGf26pgbVwXYKzvGkcLrKStP8OOGZY1V/Yoi9MnBNP+cDrbISuWiONPGYZI8DZSqTGZdjxq05jlLoeUTA+a47JTSHpVvq+m5A3AtNFLs3tCmZQvuWhBjN/IsUMSKF+4agTPtf46Mt8Kt2QDgMy2mjFyk+ut5pbRZdcXAWJYPWfAYce7bVtLWl54yb6JhloyLqNlBXHWKDFNw1RsT1vckmXLc6ICn+DnT5fl/xPXJaom7+1gm4Vo/DCPjfyImZ6VRXah+bU5pdOvySeYfueKWMpNeUXhrQ6Dk55n5zH2dgvklCjDsdyH6a7s6YNyYFjqhnTA16O0DzWGAnj4aRtcCd7cu7wLs+S/PMbErqTkxTf2nT7ixKjjvc91uY33DKTAQiQYPNAOjQ4ZP4ZUVhK9bM1t9Ca7+Z3BR9Bj7B0gAjFeg+sB1mnz4w0djGt7BVzWQNSL6DuRnfBvc5ufWUapYwtsLMhVDumMVKnzcyRsyK7US3qs+AzhetHE05z74yOdzmFMSBXhRIUHXECfN5mRr5uceSV+TbTFpOYEIvXqnxD8sOIAldoxrEK6E5s8HT5ajLQxRLOI4xpFjS0knvzbRq+yjiW90wWMUJ82GuE0s+cy0OhlS3rutTRwGPDkOawJ3j1W6Dify6djaMWEtoR6lSuhAco7ilomJex09MkyzCqkS5PBu7jW/YKEhCWgUu5AOy9cfm/2Hvqxo7OdvxquuTnlFzbgTRAPfUxj0RSAij7cx3kJnqZ0QJcWEJUu5UlpMfASW2bdNEeIxw6RSkCE58NrchGBuO2OeTYAAAAYBgAAOKqVUoRaTg8uKLm/E/mepM4lrazmfSE2wjkxyH7jybHqRNf/mRmJ8l/9WIH25R6G7wq0VjDKtv+bBx8VYC5jLXjvGYB9sIXNZ8xB49NUlyOrgh3kbJn5eYRFTKKaLLrYcqFZLLFaCQyZN2PtMKSh+GOPDA9YEYHHGc72AKd9aGHZycR/d6OgBY450486wfTMrwutuNRRG0V+QwKWVjc9AsNpefSza4dQqRFRPAHM/9Ql4FY+vq2C+64+wtbO38SaLgJIgLr+kBjBG5T9zAqMwqXg7xBdNUNtGBsgDgVultzmRsVuYHiiy+6l9gP7n1RA6h59hiRWk4Ew20fT6gFQblx8fA7dbBvuuzOwLebCUuCAZZjlygUK+6hWANUTQKqzo/ff8yc4B+PwGH76bAj3PDGa5z7g3g3PYdGKMge1ytz1VRYiu03Ss/TDkQ1R4zMsZZlBEPiIBLSW7hgRWdjdkd8NXjwptrLAojid0qxRM9cUmALFcWueJ8ViQRTmU1D+j2qaBVoMsGvQrkF4VFfzZqzRjKqnBUmlBXr/1X7h9UWKak44aNbntneLoMuprnZKzwpVkun0dD4lYCe9Y5qhUOZVQMMHqpJ/Su80nP6BSnm8v21wOHWbSqMMYem4mJswlWG4snJ6/8hJR2GQfLulMl9wz1+1Gr2YHLwO83WGQDFCw4ZLCPKqh9LOfy/qiNk2Vi+dfH1zFzkBpQmIXzTvy/Yyaklqf0pgX4mHVA9OPUgctos/1ab/9bUGmToTJFXwk+xWFNIFPQG3wjluS9zRKx6g7FMjZEeoPkP74lE3xgGmKkhZ1yXK3aZE3siZKMY8XfmNjE/V1fmWfvMrRuYR7hrU1C33+XvJEgxGbNr3jrgqCPb3pYjiZ/4W4SiyFjspeg0Aw78fAeUZqW9taz7g3zRRoPckHSH+/kfsR4GkIT2zpkSegJpltOYWYcvr6A4DPXGwVqoUSZZ7nQIe9N1j03zD2HI5hrrSTenZuxiw7H3QTF/DYz7JLx61IEhjHip6ikw4yADvoLomMFIVR6cXn5ckSPBJlrLH+9hvohgjSAthpU7V9Pn/itX3PLFn+Q8beW3z3Wv9+mRJN+ZX89i4ikUnui8bz7aQHLVz+g5fYNxeQGeelbs2ztDNblC8LDf8YLVt6eB5ycbSPs09wQztnwsYpbKcctGGxmxelUVq0ri3NFJeiam5FC/67/2d5hkRVTcU9otVWUN+JIlBAShNtsd8fc2wljTPBLPyoeXR9cbTGnwDbarWnDM4VTp/iAnERduJ0rZTFrdU+soPq35IIYnqU0OjRSmgJzN7lmdstzerzHwaUveGVAvpAHukgD0Dmjz3GEZUhiQkxPwM02OqQ4EqdRlKWlNdjOwHPySplm2ZeJgN22pYPBo5LeNrS/jJv5YZGIEdv783jIdGRJc7+ciHbyKJTiFn5taPWWbtZ4hZHpr5x+z5AJNTnivyAHj69igndjeqqcVSTyR0x3Q5SoIZAyCP6rkZO2k7WckOYIcwDbeM6bOLTRJEyYu444C+Li7J8yIPeNB+p1lujEjL7CJhMQlvoy/QcOf3FCrePb/DZSaQKXTZLyr6YYOIvsniYl22Ou/4xqzuouNOfxt7A2t6wsi/cxwBRSz3TTcG8+qFGp/rf/HvvI9npLTbONB0Da6ZdnqfMpraehlQN5IXslSnAzLj8+kLRj4eXWCjgn7+Haz+u9cPjgG/KzAMjMTs6svnlN9Ab66iJVDqJYEf5fESLHqOHi+Ugs89xuY1ctoXPiCtv8ej/8cCY3eD6TjLgEq4DN5QprrmNzsu8fP4Dc4lXpWgOo5tsqx8A/3wszVnaw6K8KtBptthvzTeKac1AQXKWprJJZLMxsEVSEJAiENCLRCmRnULuYY00aIPdrDO/VyRASmTTjElWK/9IiaFRRM5Hub9eAcjIoSCd8bvn379rjxPp612Ia6WfYXXuKst3yTnoP3mJxJiqPWBzF+DPpsRV/Ric3MMtsva7hY/po17LiknEILsBs/pQWC4m0Yp5+HRgMXXyXw+9TsWA/dymTCM109u2I3dnCE9iZv0zPwEMfYsQWMTNwAAADAGAAAyJSmG4PStfvq5077r7/QIBllJuS8qPNVBaiNQJJE2UdMSjq0vq296v/ToBZBjXkyKKuuVK1ZFX4+q8Oz9zovdg6wvWdjlzcgLZH4xLx8hGcbVGD8qEgIQh/MjUAovzT1HsvAYvlT3yxk+vIO8E9x59ePI2rKqdO+Wo0CH4i/3P6tLKSJYZr3Zuqf/Ehc05kzkmmp+Px8MByWB/OuI/NZnrGDYUG/wCglVdzLln8FxMhGbGvlcraonpG2R9M1PCfWMlNO3/Ifg05a2YdEGLTgdlA9q0H2SghixpGX8I65K3GXma0Sy/1FTxvqMgq2T+pyzl/r6URybAAg/CZ+61d53hNlvxNYO7aX4uY8hfNpLA9rP/sLBnljskF0og0uIkf0RyLz9p9DzQ7uwbbKF5Nh1Jf8iXlaRhxHO7r4IIQHDNfTxl9X/9L1Ur2x/7HukV9ubN9af7kXnsUSflFZUAk0hTsbjiMSDqtG9gKkfQHf191lQTaxUgkuP6b0O8yBZCXIEt6hctYfT6gzbIMsBEqBZT2D/1DvL4yGhHu86nFS2Xizm37x5gRBUUFMtDvzti3qx9u/+fn1knUZvQhjYDmvZi/VOL/SIdR39KRilGFVYJfGPAsJDhrERAzaS3HXS0FKC+GZPYlvQqJCO5ymG2mH8/QU7tJmcFPDkbVtVnUnOglvYtivF2RDlUrDB6U9weRMpBl7hXT+/GTWWCJYlxZuvuBstpZk4kM5DTyM5py/ip/vmDZnt3krkSbNi0YqI0pu/t/GOoqDnFA+g+fbvqmd47ui/oZMgargHDbUzx0sTK8we6Zz7G4lwQruMwFBQFGs7RMjbbhjfYSqHMyA3T3RWvYNIaOCJCvFs8Ck104yaDuou05/Y4m+WcgIGNxCc5ersAgcH+8x+C6O0DDmNaPYcGBeCEnC92zLxhW7rkDsPPxAAtBCzqkvRqAFwepGDhcKaoU3VI6L22NfH6X8qNdfCGW8hYDtlHQaJQXTRG+XnsbbyDzl6daJYAHvnc79jY0NkrQ5Usx72huHW7yk5eykiRy3gkyDaedap3FbNpMwhXIyAIpctfuPLnXJY7l3bUebh8+V1Nw6kONtXbeoU0LK7fvBZQnriXbzhnaif3bNiOHjSLI2az7ZTz5MdB1IyjhPYhurZQ0mVrxzZM76F5yzvPralQKhLeBYoIy7C+/CD98wYdn6boBfozTkOdyEF1duFt9Jkq4AVtAZMVBDid5FTK2r1kWq8U0TfBDtx6T3csxujkf69w3NCt1JUhvCS9EFrL78RRntyezxZUjVzhh/KmniXids/9K2w1/gtmQvb7jRVs2CYU9YN9u81CfCJUAAlZtRco918OzNOGMBOHzS7Tn5BVOz5B2RJZevfOkzIc1paPSs5zs5ihRCUbj525v0QqCkYis9nlYFL42Q1nzNINEJsX5stvqaBolmwcagPZlQc2njp924x0jEJ572DGCQx/hszIsFylaF2Xm5ED/mCYvZ7L9tuqUzRYm0RdBV/xRXJdDqZgfQ5R35RO7eh5I1ObpfREIiCICsL2XNwIUgIWsrOqD6rt3p+RuzyFBgVHSrtqS9RdkM/nw07EQShViTkZBFVvTZzVP/+xN5VC5oJeZktfMMYp44UxkH5cI85M1kqMPDiMXMYMZJdNwbkkNW+Yj2M3n4dLM6w2RbzLmS2HFCCvNH5MrPfaeXxbxk8+TXipudcEtw4JN+bYK9WfFele515fR/TGlgmo82EbwN1ZkVpHgvUCVNm4UyQNqSLvYA85x0XVXSPUQDMw9YvBqLZeJREKJxj85VbMyB1VVnKQc/Vb1d4Vgs8jGGEq+tOd8gk/hxQoAUBjwtBguj4adVvSh+xODxjmaLY9AlRAdwJhCqKVSa1HS7rUsGsT+T4qtpAmCmCmQphHMF9IHCOtc8VotH7FBnJ3+/Z38oOQ3B1Jgptr16OseffP8kXbeTd8G9vgObUM93KY+d1BRWk7LZNnf2U5xFUcFgbGRqxel2x20pZRSVOYb1IDWwDwHFzhpqqkshkUD9BVRIy1xS0odbBuGihov3uqGxngKh9qXngR1RSGRd7eSgZG07FJzwgSjotdC81ISCrFKU0SigAFFw4AAAAMAYAAI54kAFU29Lh0MBfXNOXob5VpY9mZiCOU33AbLrUdYOfC92BUMyEQJG6lWM/tcVJ7XPUDsXOiknNte9PB1rKc+74b8J6osq60MW6rsFPX+zYJARs94aytM5hwE/M3Qm5J+5affIRTOFisSGKjcgpUK6crNxd79ZCa9C05F8LTehAmqjYrNH77NN7mWHZCqruU1i0gAIVIjoG5hk4i6b+z463EZsNz906D5FLM15j394009I/EXO9c2UrwBSwfogXaHMXxDEAPNqb0hCUspb/h8H8Wzq7garCYA9OyKPx9otbDxRNXSPw2ZdMXcbNNIEfOsmOaC80NLVJlkAYLyhXCkaDZFhk+mQjADwp3c4pc/XlAsdWXYWsi0mMH7ClD6mM9VYwYOMecrZqxsGLFF+bObre1+qoWiEExVniF7IOiF7V4NHC4Mho9l4luIVkJ/Syu23g0E8eUC71fWraOd2pNXVmwET23JzT1rYlS0upaMn30xy36SCy1Mmdzuu7GbP/VqgXff1jIqblR79VjedggKSYx5G0eXqwJaUikgw/ffM2EL8dZ2daRUEbrM4/Uz8Y0DQ7WAJ0k7NlV4lvAeo+m6SncqCDhM80ZIltZKBSZccc4lx3JuiabcpHTrfvdM6fkH93c6tuy5Fd6TSyV/XWwx4JtF5/2Zo2k06SWBEotr7gUelVbwNRG4LSo050E1K1FE+9as6jUuosYby8EKhgpwaEu22su3TVUHGeT8oEQV+VVBq2S0xRylyygTkJBpQ8J5CpAHVOFLt9XEdzHRX93/0ubltZpUP5oWGnudTEIO732Mj4uM/5TpC9I+VxANeHc/Ku4kOveeTSyAn0tXUiWlOjDV0Kdf03FUC/MhUv61/N4lxiYblYvOcs0jfil9cjNbWdC4Lv0jdcDia0iPppS7RGDZ8jIxQQMCBLyOK+lTMLAW39J+NaXA7bxKaWXcGmJeyqlXv+5155+9UOM1TEiaa7EWEG7qiBE4QW+Nx9mQ8XckByvkX0mlqluuHxXCLmeGylCUXQdwKtITwWWegJL7rmb+uaA14hgCm6+G71j2fkWa/Q0rNsBqVBQJfKMmFKOSDimvyMuqWlpeWDNwmqkcB0i+qMAErm/WYNNSuBZwoG+1okvofoqCv3qL4jqWNLWcH/LgFJSXjmWbjx7H5DupoDB5kmuK/XSu1hiigWQYmU35RkWhKDljsh9tIuxgT2P0MAz5RjspxakbE1Xg53jaFnIkYW46QmQHJTMIgUKpfA3+wvGRuYn6ja61t0VJ6vZSw9lgtfINgt9ei50xqFl2Ub1nQv9wKoxUvrXJ8qYpV4KvuTYHdntepH8lE0uIXe5ausI7elZznduTro3sXyU1fQp5yaqmt2Fd9jrzmz+x5PxbXuEA7iPHr1kAUgCfe6tVvrR3lhs5GVeJNFW1ypHZ540bNvMUm9jkvjJwvRfAoSDdEa0VpCl0hsqOAQ2BJgc7+qHYcNuoOktVwidvvi7r+umI0L2XVi/jeH8lZeolW0kVgYcSqjtnoPqhjgGZUToaQ41ctu9Px/HMt68Ug5ztfFhOE+UtPU5TWagDDCzp05FadAJ4Mf/w1hYRb2sqmI6HKHtY085AIcAJE7qAhfNdWyH7uIy5fDSDEb6Dhf1R7yO3UeQt/4m6V2WDvmzRjmFqJbOmrwr08NwEYgOWrPoqQV1uYGlih37gK6RgOb7BgXNNBk61He4GqCNoR3ShwFt/01VNya11tUK0NifcvZbYkhqGpQtGEA89MB2yoqUv99UHCnC6eAZHa9jcJSwpQE/F2LXi1QmbHOCn+Xjczfndtbgd3wxvPxwCJuywEUM3xJ3JIvPwlyMN0k5RRF3ULZ/DkW545Kn4momlQ7OZdacHQHVqry7LFExTsYPeg8nzMI30jO7t8ReNvbbgkzpDB3lzQPxW0kuKnvURBe87wWw9S7M0OGerf4eYjgXE2HojunC7VBib5uQ8z0jlXe+nXvpw526UAe8afrIy1Pg3XibLTc2vQzLs5dYg0jkcnMtioVZ4DH9glWuNPN9IJfViowFEkfB2Z3gK85e/9++OBxK1mDQ+8+zkl9hQYR1+FXGQzl56+okXOB1rLnQ2BIoXfZmwAAAAA=');
