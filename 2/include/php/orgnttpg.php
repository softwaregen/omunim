<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('59EA6C618D682B20AAQAAAAWAAAABIgAAACABAAAAAAAAAD/vrSy8cw3IN3yoLSTNtjsNRXb0K1HKXPVkW+qa+aAxaXozTvKeTan0o5lV+zLiOKNIFR0hhDx9m5StPbYhbULAVhnLvPROQ07SRA9P9/MrTVz3lLOXXN9XTdOFouLoysKFXWu7cLWitcCFSJ8we1QgpEVyQfSfqBmE6ouI/bB5jI4VqPPfDkAwjQAAAAgEQAASpahccmzZHt1S8H6KNMgICqR0llSx9oszUecehHElIszIbCiDGWmKZdrh5Sw3hpaB1fCzGiNNULuKDYRzPd8maifyaIAbvz6bvMQrR1LlsaN6bXMM1eHnqi5VCrdkgVLGJWitUxXD/cuOvq1OsdIZJ6QXxna4FBUoCTjrf2k3tugNds/WbV6ct/X5prpXExgMBc+e7vbp6XKhL3IgtxCiA/5J7igoUohMagVoanueSUmP8cIE9KSVbD8NXu3x09P+VnPOPBso14xbVsNh/wqV3lQt1y+PXeDe+u6x2scClD3ryr4xD9r4SVbeyM8ECF7emXtsiwy2KzxylG5YkxSDdRxjsYEkTeLdA1FjEp/ctbp1gak1w14+Xy1KKA7j3KvpoctANvYQVGrEg8WSs6zgDziKhc13RXF1DIFosulWSxXc36PzpJXDoSuT3jekeW2XZUNyCR8Z4C81PYgW661zAhlwFq/qJ2VxgDdSsEiG2i2xCTZ3vH98R2ruoibOCGRKm42zprEhmGHftG/UmASIvN4zEmyeubxvKO3uGhHF1+/PlSPLLhtZJ4FHaPWxbZo3qrgaADGQm6FelwWx1vSwFCq4O8VTQALevg0sVCjY7zHk8BdiPDLq4UvqQaBzBzkQfiL7yylDj47jJgtzVv5ABR6Q3eMP+SDq7P2phIl4U20WShogu0qqFZ7XDKQxC3poZIozwdfHIV1/glE/RSn4mVX003FFHcB+uF/7Pn+8PUmEBqMY/uKN76dPW4E9yF80tgtUNhhP2xEDrQLgp0c9ZY2d/PGKF2hOENb0baGulsj0+nH9Tf484b/BYXoD+bwgnlOmgxWgODO12qgC+Fd1QLC9g1E6LGfd661Wwp35voztd+XD6m3H5X4mIFlzvu+sXMUb1+nQUPh3A74cvx7cf/tkzZpf0yzNUko6Wp5ZGyK9U7x6SM03FycaLaAWIaFv638NWuGNwsoFvcxayRnsllPYaFmahTCOHq2DCmXlgwb8w4WgA0lv7DlXdxLvzlbA6SaV4WxxW0nzQnsNRir5i9YqyMtBXe6CSCzc/xrs2oULXSXTiRO75hiqsQYlI25s5kz0kkTW9xXTCk0zKxnjUkaNVIuxBTa0io7B6/6JY5ox6IRodbcNtlVHTV23PA53NNBc69ForxtGVKqd+96v+gbKXWOmj20NkZ/9RzBZlN1Thvk6EsCLpsCIogbjEluc02Y9jW1YmP38X4nB4tMf62RN/tjQxtegHUkjR4MAPzLrlEqPxh8ze9c4Yh+LR7d8hZxaF6U6ASY443iK/mU0w62nHv1g49axQLM/hFLaCOyI+SyYc5V1JTEAKjKC41lUQUgnvJQ+fL3YasJfSMnZOweyJU9bLXIJYaDSKyzcAKwUOH6EjUFiipiY1Oy0P9COgMqLhKkcC2mOU0OtMiXSsFFbMtEn5W6PHZYCO3eb2RRvmtbj0DENP1SKeK37h8qx7usEhdHgmmQiOB2d/n3DawyIxw7AnqxXUvN7Ym3+sPoBXHYe+cbHe1FRb6JqwyoAxOcXJ7NTX8R/GgA1dYaeVW1RBXW9TRusDWnApH2XxDdrqrRIlTHqLGTvTKzCbMMEHysaAZ83OdUG3vISIP/96umW5DGmd92YLAvJNzvBFI7SASuXrGG6e0tibjxXTyr2OgdPnKFx2mO6grzJg8EEUXvPR9FVvKz3uNHt47e4wmouUpsnRlFlqVDgfeBHudOrduS+vMNNXE7qSzviDQO02psD+zjoQUfIOk97qZWTHuDMKHiptRom67EhOvFoCELAT7BMmbYKpyPVjteyTdoOFW4VcO3wuv5l7MuvnUdtBY42Z506Dnf42gzEG0ezTUNHRczMy0ElNCpKMzaqFWBzBgR1VVDvT7OobE603DiVLAVL+KgOw6tl7r8b35CzNeLV4v6xyv/nCY0UIZKb8j17fOODHcVCATN/AkPAQWQYS4435Vdu1Lo7KGUKkHucUO3Uu72LKlWVe7jVKmxwhbOb8ZQeBApDkG5w4ESDIJ1xT6cGIQgqcv9AE0UXcU88h5eFCKvKiL30pr4d9rXFez3XSmuIv8cpbiABYRH+FahfBzn//BiKqmgolgC1+gY51WyFxrSsncyq8LpCegv/nN6B+ny1tuZLU2izkVbFTd/uS0MEqSRYSSxbkS6rYcAQAR+p3w272OnUolN+a0LRF08GfkW+pfyBpi0RHT+lKgUEag8P1KSuQTxJIH4taHxUBQvvwCPOo7y/u2C1p9GAZBzE3j8Q0+UPHvHysccPtOq9SDCpBygaqAr76aTpN12BXMmy2dz3Vh3yeEWPei6qyNhWn0MlDGsXsGyTx5xABXlK61ew6Ac3I3l7isWktPKy02YKzavbbPG46Ikb0Up2KMrm8yNLUVk3LQKIgzqXHQYdPZCQM9mU8dBTq+3F8KCdDjHJZPyPyed2DJf5i/LEN9v1AYAzbDSkIhTUdGSitI1Ug/msBkb5HyV2Y1dfbVGGC9B+Nane3ctS3346OjDdD8baS4ajT/J1Ke2hcYpN0f7luJEBddK2KGzVOHA7hG7iLfo1sQu7v7lhQ7xeFTjcLAhoYJLgGcm908kuOSrHl0D/ekBnrOXp4KWDTRA8DO5BxZ5892SHwDOGpf1JvglN+/MRmZ01qKO3trGa5TNcaSDXZbVK1IbRVXHczJB0wUkx9T/mlcvS45qOojaHluiYmNd01Ciw9EmKNWvcRlyd6dojn2xqtUfn+oGdI/Yj5JIQQgodLIKzXcsYKojSTuj+0QLLRI4+KqZqslTXkbkvlRTROgekfeL4lFZRmZ0pr4tswYm2Py8p2eeCnqn7wQdlrChTkDZhhq1xW2MMvELCtJP2iGXys6FjCynoGhJMbcCf0DFH8N6cMLMi+W2xQ81ZjAmeFB2MMdmGWl/1QGY/G7bbeX6swddpebVYBMbUwZzfKqgmYScy04k2yw17nbC1zgPnF/8Fyb6kjZa4qdn8HujMVIyXjS3K/+KGXk8MMZJY4MUzPGCxzgtwctcAi3CZYKrWbE+3kawfAhLw5ibiFdQSeicRNIdgKe3525Q6qRCSJa+y/7crlF2gNm2MOvVeRfd7OJe+bp0Tm2mwM8rfMP/meN/tb9o2n/bLXylvzTRVYIUYNBFO72RblTWKe7W+nwos0rpmLbJi+qXAFDBmq6QBUQi4GHLHiyd6Fm1tF7IJ85fIvAyiaghytTn72Sb7ojcU6bwl38vyIZJ4h4vQ+1Yc+6b63a2RS4bP/kswW4YWv1h4nxjuBGjeVXpqqcdVfcgfFOK0FKIim5KFChimoeTE0kWHtJoY8YYVMF3EZ1MZ3Yh1tCSRQASklKcS2qT+qJzT6HF3THodUC8qXVo2PBk46wF0dBdeA2joa3av1fcOB0dldYHaB9/iDyZXUkkrGt3hZubHFjSHKnaVQM6zPrYPTnIbM+rmJqncZ4gCslcnHn37YEmR1DybcbUpI+1aSVQCP7f3Ns9XK6LX55YEilpyXRNrbTU7MzS/ibhI7JqpxkT8HLws5IRPxBJfY3frgLpWqYjaTBN3ngOnOtWT1dl4sVmDAbxxNudE+N8wwoDbFXJn9wR99fqdsf2G6sM5c1wHMjHR0gf+kHehsgke/6SOtCBxWcQBISbFrQZUUKk2Jw8UYSPQFy7ecb5VmxHt31F6reSzDYDkXNqMxDPE77jEqX2oMqynFirHRGbCtvstSdQOGBLqRzTc4UQDn8mmMC50p0gloifuF0R6WwSNM7zjyFXDJBC9yq+eaaPZEBd16QTz0lb/VqNxMpTfMTUpyMkX8QCmd8h5IG+yLefiydeypmvOmzXOmJEoyWl9++Gkcp2zpOIdkLE6qaT14eIc5t+ThHjfiE52yjfwGywehgAdxFkoZMNWE69DNY0mA8QRNb5l1jCI5A1vwCUFSFBKnaM4E7NdmJSHavq9vvAeEGuDpkDxY36PguNhi5kBp4bhv733GHTMT9SQ0V+rm0q34UhfCeYUmfC3qYnm/BkCdx2dz0Lu173+roO7qvxM24vHcx2CMlFMIVBQTD5wwo1rih39+EpTLWKbn2qS7ivwZXGC7uKOpbIWfbnW50UgvgsKpbCXPiOL/mXFmzj7nDCh+2hB9lgFDdplyGym34YHAEFWnmdlugR/fY2zP1kMJOOlTrw9PuqyRd489aU2f+asZuG1iQ7TJUyWnV3r8qWPy/+LFbNVaYS6u1S5HWERmWTmyS43H0yCPy2+cjvR4fwqsNOBAt5LayoumQQatvuBHpRH2oJ/n4YmdEo5uq2NTC62VqPl7l+ZjRNdzCP0oKbtbFrFBHlvuLNQTGJzRr0thTXD0lWGY/NASBFgLx5c2v34gdjJQDbrhsFTQjUMShT7+ETMRo9IWd1gv/lTKT9WfGHCwN5mHsgLsEx0rLypgGIjtCfn5abF9PQkN0eIOFESOPiHGfkXIDt+KmhHDBZO00ept3gyTAAG8bD4+nkY6FOiqksuwTM/zWJln2gnamjZGmF7yiMPHb2bkYzrcLGkgqWUnNQ+R8qCgaokhjAQJjPx55yO3WwqJ8kZKBVqyoqX0H/4HCKreiKFb3ZyYoFthJqJV4gAExZH24awzDee9KTDePs1YyHSBG4sqbcLFpyQLUTFchH0zQ1Bq58ikKMqeFe65wjA1iFDxnoM4M6R1cGLUplYSgZ73M3fgw2UTIzRly5Zz9bfXSIN8DTCcJ7mPfQXVZSW3QdXcYjqQGddG++rl/xSFEaFShNG+zSn46RqMaf3m9T1uWSQNaO6EPxeIIVx24yO91qWFegSng/sE/NSPdMkPyT9q4pU6tT5aXFghVrjHwZhZh0BvNC2Vrk3FCZhlOwItZn0qbee+tfHrCWFBR06EMZ7RyeP9QENRC9kHUK1zZaB7PPQxdncsxrgHp2sawNo2xXtRNpcpKmky1U/e1h2+W5J1EwUxsKueUagK004+u5ZulXMtT67yhr1JiT3b7c7GAFWZTlcTUb5kpYjkxg3p8smcjvO2kVwakEOo5xr032IbHHmcS+8gGkEgztwx3K2Td0S5ZeiRbI3qpgL2/L0jSgooVt3Yq3vgh/IcXD2u0FJS+2PyXyrtcvriPpDKyqOn4JVuCMceO5kfJHY1GRQg4IM3kyaiaaAXIe/vrV/gP9cYDN4B9tRi8Hp58G1yF8wqucsLoom6VsrpO/11pIig0WbRMgZBgKwmiG52EJq2BOwCr0C8i8n0R/kaogVO4B3u8vi4exSUogmpD9P2wekZXKT/2LE5EIYCQWm1bYNGK5PW+lkoIE8O9OjAk9/moW145dnCzLT0Ck0ImOIc5OxHUHlts7Tt6tadTXDcYzNoS3BpPnLOvID8gU8yYQetITS3Cd0i0XdSXV9wwVBNPrtXjjxaBra9nlXcyxEwu27dfizH5Lw7XMDOTq6iKYBs4SZRb1d2/O4mT5BovK675i7o5JcLcW9EoB6Ee39ENicU77b9aLD9i/vedQV21y59gH3izB484q/8v0v/7x8ambabbePIq6uLgzpGVWUU9MKF6tkIv5m6rK/+S3DGjKYfl9Wa2pdcbquKMAvpAZp2SMdX7pg1QURjChqr63ChYqXTIoHx0XpS1X3RnfEdVqGzvhZU4vAlGlvuI1ABSG49MWWKb2cL6Rl6C0yykekGWVVgukE5F3rOSXCLzygkuJ169/FTVf+ToNY3WqTH44TAXGvLR4Q3O380+e4cwHsaTZ4NhzGhcXarMHeCd901um+e7R2sz2pNUtvdXwcewRneieZ7zHxTrF96AnHFFBHQA8TkkdMSPvPM4GtQoDLzJaBovrGEmMP2vY01jWhQqRuiBmtsmyWBWBbDE1tEcnz2xQ9zUAAADgCgAAklGmkRI3eml61zvtQ+PE/TkV0rwEIlyaPQ8p6Cm73xsLLZqymiIhwbSzbwcar4ckIBK9J61i+qbmBhs/CneYaF8PQ6zOqklR7X2o32oeiJV3UQhErwn8IKV/Xelcz7c0/FtSsRqZxTprbSQBP3G9XBBHFge7wU20xgpIrPrI2arDtVk1zrZLBgblNgb8wGpMnC//eu05eJPY9RQgERN3XoWBXS0mT3KduDAcNADcDh/QNcSTjoi5Vgj1JjIJwINVWGYMzG+4Fz7IS3up59ZJWyZq/5y1NlGCYdlxAY5LicZr+aMnLWFZYnsgixDjHfziJGCaE4yN9SOjTxCzXZvpniGxdNvBaigtSuSJX1WdyoN1LBqqScA4sOraqnR+jU7cXjY5fIlufyFrLVjiA4Imb1ncjwR3Wto2ZUcfBNuUHj35Bsm9yxAyhbcD86fBZPQ1I7apnM1WvgJ5ousDi9HuAJ/I9ZoInfbbwWmWt7t3+Woa2uOmhS7fuxbTSiVX5xeIT1zRZmdc5gMw+IIzeyQdOxp7jP4tvoByKnJoCsEWXEzZh7QYlo6IEQlT3EbkyVkepuowF4DWErgGEPXNjjbHvOTYqyOFmpf953fpXnC+VlvHdzVCRVFXUDWXLvho/2bhirka27qgIA1Q7lbpcMdtOQ5ILf17ry6cwCU7e4TqhJpovRvAr3a269GANQozxPxO6+p2M03H3m34/QQuk/IHSh0tKoqIJgkL1Rd6aGf+tlwhiHLh4VggKC7irJWjoNPP3iEVtUvPhpKmxPVFNavgobY4UCjsC/pNLpy4GTotuabhPP5y4WqlxygeQlg1hLJ+9YuoEHSm6Fc1UjGb+QEZDM8DaDl875x6vQWbU9Ca05eJ02kyGNRoPBwhgMXyCD2B0mx4lvicpkotQBC0lqjX+MpErLd/OqtvdradMQ2J5dnozjJchugwLxViZL8G2riDxe7aFdME1mGc+KIndv9MZwgxGWMIBXW62nnNi/10kUTKZ7fshSzEu2sZtczf5sLRp8N/amJ8M8ddcAcEWkodHSElg7gYhr1N4boiI7qPuGXEHDe13TSEXfHWb3UW/pwqx1PLfk4Dp4wf0lZ0yKjQwDfiopJaGYIZPyDp8ea6V2GXYYhlOPFwXG9MyhkiiGDYBjoQXcBQHWxJrzQl03Vd178lt6M3lrHdHt3H2LkeAkxErhIiaWbL3W7NqY6EKJdmcFp7KXm0b3Tf07mMLd9clz2yrFiXgJquWPlAk7J1OJi2SN6PUoqcX3zhlxFzIXT1aI3r+H5uLPLb8CCmDYU2sFr0nOlqi6Y8L1yusSj6s6eamKqlvbXD+wfRIhS9gOuACKE5t1hZtpzrR88pkXOCFfZ0fGWeFvT9lD7fSWHBjLp2kSiUG9lWmTBmLJSHov5/k9Vr8LZrQ7ChPMLgDyw3Eq2rQzb2Srh8vbAXwo5z2CcTJlCNs1HNhtFDpZl7ciuIdzHGP4vYGG7ahtdOhZ5SZn2vgGHP5kUTEPkQpJn/eKs8SnKZMZTIzbxv7UN6PQYoFOzIRy8AulnsRjyxN7ODyIvKineGls7IJm1N1KoD5CpsYpWxEHrPLvCGpAZJn3yt7sf0xcxM2FoDEqn3XmXoiEhGxyI1TTWeUo5nGwVSGDZbuFS/Z1ZkFMckZvDwz329fMcnM3MDgZ6oDqkIyBpnxFhDpPgoLnhOrwsuLh63UKOzIfwxPXZDN8UDX968apNynxeveG/CiuG6UbLkeV9I5tUU5VYAu7/Druj81QnIso1uDr/Ot6SnorGDnirpeCyGgsbAPPpA/ojURtZzIb/blpeu1BpxQ9Ns9E3TzhLfMZ0aZL3f9q9hwBYlN4xv34lEZU78JgkMPHdoUZYqYkFM53lUPSisCBhZgD3vdESf7S+Vg7odMAy3dImvbiAFvbnwbXyGkdtY5/zGA1iLy6FPFjwFINoXLk6oq09Ld2VVI5rFe9nwnyoyg8F2XSfZT3H8smSUICw9fn541kqNSXdASdYhIGEfUNrFeOau5Eslc9oPeHbFKUIiXsP8Xw5Ta0YkF0fI4NzszQ0tzi/FtOWMAJ/zZW/BUeWuAOh7q+nrzQ+44lbeN2TTPJCn0gxlmByDKp1nDMy1Lm1kZ4hEaD87uzxte8UfBcJZ3TBatPVYHrgpDOJYm5iYY/gS2FFLa/gsua3kDKlnScHljt6Phfigbmp6bEI60gSfZY4tFCn+nFGlFfo/Q4VFIcQoFjGBoyLEzoIRWdJOMKVRyxLStME4yescZQAw7VKDPur4f+tBSqHTN6ySfq3LQMzsm2zKRA7WCPoMQXPLWdF4rxZPiyAdyRIsHAiGrRjiqOQc/3rZbaKgDVJyUamcE/o2+ovsBOSOVxgUR7n9UV4RwjpYpqb0j0C+ueySLZycLrjrv7sV/bwcH2WqDKowS090Mt44+yBh/EIHzMvncU/w8ig3IbYShLpGGqmgqNnnO9JjiHI1Wk4bDMqG+y0ZfLniAcvCE7ha1ONFRVT2Y77/89clkslfTqhh17b2Z+cTRQF8C8itz9EHauILpsTI7sCQMJX1l6im0g0LZ2jIafylIgvVOGJGr8qtP07DwZob555gm/WT0crIQ0w9jLmw5wjVSK3rUXw7q/YC4v24jfSD3qoorgNK5DPvDTG3mVcghoP/9rwtTR0p/a8BNlvIQHJR44hIc1l9HPvuy2cv7UulZQ0sjyMmxFLdFnPLbom/cItkI7+URTY4Y43CxIBq0W5OqaTzu1mvui1B5hUmB2MJ49aRakgnjRFInBmAl0vaaMFqj34j8ryyKxRBeMHqrZKjY1uyvx9K/MnfeVqWrV9vwOH/noeKRlgLeXnWMr3Dv3XOif3EYeK7NFI9hlIJC7NuCOGxlCuyzNWtJZ0csm2npx2wfATtaOINwk0xm7QNgcCowQuvw4NJvLnhJOhheXNSn57MiDwlqSYQtTGbtHOCEtm1n9aHX8MZNb4X0CIZbXwC/Gi1TR9nCyXZPcdp9F9JB2pWj3jFiRsLX8Rlu+oSQOxOe5V9S8ronEI4NWLrJZMWgLfsXgrNK5AHRnnrgSX9V3aWYQAPYVMbDygslsAZ1XCpMqbQfvg7pfWTxsKPQEI8tIsgBKl8HIOq+rah/W8oj01/GB6qAXb1OcO6mlwD4iCXSqWclcIGgvlBoT0YOcUNlB6b+PP9A5vbeW7M+1boAtXuek6X3tR0YEFJTLGFLR6IMW3XoF8jVHVR2iRIWSy4uhrMwwjIT2Z83ylUULmd6GXImLrZ0Jn6LxFSeCaybb3KsW4MPmFWaO8nrW2ErWzDEp+QLWXu7Jx2Mct9enbFmAWEZFu4pzG1q30R5QkGZD7gGA7wUhRiaDOLfDIyvddQl8nWQIIz4uliFRqKGaAUhoDw6BBOFEtRHRIUgTUwSXvCqguVYNArMw5tM+6CyXhZw49+CizUK6/1DgijfvE+2wZYFTw4r64nEASc+RzQim/jsI4wPHdtmJ29l7hFW8aJXzb9mIBW5KKE1IBr73/qpWJ11VfRSvsva2EE/AFZ92V3QENn1BXKUh/HTIanmvRA21AOgSXmm/pLgd6Pi3Ho4CrCufQ6X797rHNxdlQQxTXWYHK30mus/BOp1qf0vqfoOLiKiULickJJsZ7WHPZ3cPuM06q4U8GzcT9bZoRKY/pToah8tILOGZ4TTmZY0VD5DS8gBy7qYPSU07PSWjyDesGrUYyyNgAAAKALAAAUcmFSxJssTicblW1gF6fqxYmLPmrg4uFhGhRQk41KhT5ofdwbdmlg/vIb5lhIE+TUmbRJScc+LPET13JtrKYJxRvNciPGNmYQihf9THAQzFT5BLFZ9hf5s+X1C9AQJtRDyFU4PzZDS0tCtbzN8Z2uU91xu5u0KL+toZ+4y/TY2+ElYUC8MieQJTtdGEgx0FCfaxb4dapNaUqjs/gq9xdZ7B8GkzSLdSIQ32mKm3mWduXcCp4tC5TnQjHr63/Ob27IiQyBDfoGkGweW35AeA4hqzV7rXwZnEZ43SPyO6v/bkl8oYU6PlnNgk7+D2jtnZwOmZWmkdr9jwuS7lTN7i+AMoLlVqmvju73hP18nEIcN1yHOu0RxutVZpKCvv0U0QRXVnrZzXam/FzjIQjfDRt1cLKPi919de7ui0dt4ETeeJvvymyIFjTTYk5EgCQI865K6iExP7dMyNGR2HE3CoWDTVZ9yZlrNVWdo9Vd2uZLtm3R8ujEqlFO2EFot0g0pYmV6SIVj7Duum8XQKlxwfGEz5+0dsKAWkemH8/ApxsemWwMyqNsyUyYwJC9zkspbTjaD0C3fBP/ix3Q3qb4vOgWh0pB0dPKacmlw2mWf9k8A9/hy+xphjMhGwt70/Sca82cg2nWVp3YenLJDb68+6m9RaDnFo0cCc321TWx5+Jbw/S3NqEY4rw9cx9H8mDckE3lFFY3Rgz3VnX8mfw8lk/irj0y+BAvE+ZkyBWyRC3UP1rgsbsK0RrUK3tk9BLELGytAbruDkfENxXPNDtTv55lSoeUNPELWAuxGrPgHqsIzr8gxcvP25k6RyHOiu2ctOP54UJfitUKUmdvRKTtXG/4uv+MWfVota0YCZF197+S0XPdwVFQabmWI4sMIADL6hGm97WVccsCTHbb778OdOIxEchPjnQNVrX77WtAew/qG71i/oIKU8aRnObOlbRSG+wTAOqizjv7ENVQ741OoibtKudFjLqat/WKiRqrDnTKjY5+otv7ohU8ocDMwKNWIrfZpkWxNDo45txO2Owx0KYmQce6QXqpwDvdyMsuGUxC93cVKke24qHm+BNr60t9kSL36pqqUyn1yRn2+XSSMVFDSfJVcnM4KGyITziPRujhzxztZ5WLAebcZM4Cg8A+HKMJiD0ysac5MJqsJpN2Hsr+jGyz1btJ7cm4oF71G4vwlbUC3WagwzNWrcX7pdOXIrgddcBUTPzWC5tMCmXsCnUTNob0Dywg2mfZcsqs0xRDkmnxACj/uxb9JGhy9UTEmzA3XqRobzdhYlFLEX1wVFMyJSGb6kKMCd3Qp9OvEigNyDlRWcpJF4o3zngOYzG8hHnQ1cXdmMl/wMyBczlBLGQU75nOfUWNtB6NIzlj8I7Cz5C+XoL9LXxCrR8KptHZ9EdkQeI7/D81MFY+3juSXE/GgXrWz4PjFHlel1J9Bi7AIGQcrvWgPAkTzww8qfFUqgjZDiLoZY6ttddJJrUyfNG46c2zNbqnep8vTfjFDTrx8tgEt6s1EAILPRi7E+j+eQI+FBwtKMKeQJONwA5iBlP/U91mtIzhe7EZDzdr+ump3tmU4VHUHJp25J8/HGpS5oelaHzFzndIbZx7a4yrK9q7F5u+uFdBaQqJfx7IT4blNGRm6fa3iHfQ8tSLdEnahgix4YKjFY/q+r6BGJVGoABCwVs4CqQjzwfl9wCd5MpOmjvnSwdJE8c3rDjdl8VRM4i035PqZyeXcbVzkvpZgKMaLa7rgP8kn/XmXGF7bDEE0f7tMnQplGN/F85UXA+NojYjA0AgOH/FcIWesyMJ1hAChPkswOi6CoAcQVyVLOrRD1UperxygnIzTgBkpjLeA285kO1T0n4mhxmlN5090WPK9DggUtSQsKkxTV3zCvRgigN4naKmJEHg9CHlq9hPFsg8FC8gGQ1ghw9o195IGglVM09/kvxYvqWyiUz8o7GHqD/x/pgNemSOBLKhbctx1TFPIRTRsl4VB1lKKspIf/krTWMB4hvmf+MobgmVrd1WG6s3mP5OhoZ0scTncI6gxpP3BXJO8dWYFF1qnNtNebx7o98+HYnNNEoYmE0HPRSWDuqHIQnHXPaD+0pUDwI9/7etWx1rX+mRIcnd9VjlQJJ3oc63AoG/lPsvpiavqXAMWRzBRMYmYtcGHKLe2uYanaXkdE2UrJE7b5SaHBDa20hEuNJYYyv+tWWZrHD38kTvIwTY4/7bGiIrRrmX8UM4FQ9MxaPCdCh2nG5S2UBo8f/CKDmCG4waapOSjMV4Bu9LulDpG8oY9mn8d9kbiS8MKgLHSG5Pg5UsBs9ehClgEHEnVoKmY5esogXPmt83/GIrismXKEZznK0hpt7XSenFr6hvtZABjQvRTo2O5RKdtUYUJVY11x0pqlebQXkBWIHWd5S0z5vGXduDqR7A2rlQj8ILllZhvkfqXiOPGTLhtw+jrhs42TEYSKB5oxKOa2tvFVNaHZ4TyPt6n5XCH8X9JwHWcSiKWTA0e8j81Vxbedeiy/HhmsoHxsaT26/3UaWCxfwMPHF+cw7We3y0GnIYOjn7QYtoC8a3iaZYeR0KOad+eZwwm64S8A2quWieChD1cG4Kut8YpRWoxLbm0JAmfRx5GVsX/oZwWwi3vDF1xsWTVCy1Ovp+t3hyJ/UQEU+1xQVlLv5nD22wHAyDhQgdqjGtC4ivUUmTXveWWOHA3nqPEFeQUw6kym1Y9KNGoi+h7NL5HS5vba6L/rdrAWpwxeWuEcNRRS/OCWGIbW7anM5C0D6Xfu6C3rtDhUr51b21EbKJL7GEUWckLTjmozSueO/fwCim8/h8ODBIDgQ2Il5IE8PM8PT0yxeP7Ho6Zmvyy7vvIngq3I2N1pipEs3y3bwbECertfawk2vh2+SYYr9hAOwuMw5Mgx/QJZWAm5JF4dyeLcaC4WdweO60gBq35fLFu9gSY/1kasZwU7suzFWu5tua/Y/qYouui0A0yqJ9BeJ6WpnXoCwNxq+qCxOPyFNsuwT4IyxfGGLgzb6V4ZsgxgpsWmyQCMBQtoo9pBViJMcHMyhWf2uwo/l6J2XkLbN70IP0g6QAr5g+ENAAxQZCjwKB8KkaGBvveicQsC/OVRK5tUNC/auIedHR02iDi0Rp4cXKJS4+uQIuWdJovMV7ODeSJACC/C9HuFDY6JyIgQcvsfumZ3U09rJVuw8tHJmwwHwT0PwRX0ulWl215hD9t/m+nFLUFGd3kMmMgty1aJY5UiCU90zBAFIn7YAE6xHknCF6oMMKRisFmoKNWCE1Iwe0CSZW4vbUjmnye9nca9j8bvC3mHtJECNaUG0hxYa22o73gES2If0+jUTsCMCJynS0GcFtUb8DjUM0LbTB8iXXTFnFBOUyvWTc+QCPRNXjsic91URIeReEBCsMydgB7XU8IYYzbV5nlOmCa9xMSH8Yw7FKq97HL1cHsMUxCGIQWntIdhzN10XU5jDfUAjMYc4QUj2TgbUtopmLhRaVglqapP4A1UMRtgL+RFMr3cmGBlBCuJgjx37ThKSOyVMKxlEqaUpb+/NwxNAgq2UMKef7wcxLc5D8ffAZIP0QqMS1XwCj6vexvqAwMq7pU/jNq4IeN8XcP3bnsTX5kdkbK1oXyOScXWWSQKSMLZFS+YPZPVI4LhB1eEkUlypmyEJYWKdmdigJXo0EK22bGveejHNEZOqtgPCj/qWiiAqLHvGvU/wHy4IV2j55DWoUbuKJfGt9HHjr+kpCiJyZWyovp6YkjtySrwaNBjhqVA3Dvngg7eYj6mgt6Vn3Sv3L5Nb62hsYGg2buzbs8jh81aHft538vfc43ZuIlLmjAzRkFLp1Wz7J9vEYfNdILCLhn8hXPa0sfw5oFmu1vpapOzwAjnL5IdQNMzfqy1SVPRQyTj9P44Jqgg0walkMx6kWOXWGZ5TVpqCMMEhepd0FCEWFBUEWOtzupZN1rxij4TupJ7A3AAAAwAsAAFrQnP7FsBU1c11n1r75nryw50/CNLL5krzgzNwCc1l3Ar6eK6ZdzNv0NngxHO+RrTBNKbHC+l4hxwvbSpcOxrwcoVwYNtHQVS+Z6GFxOo0pYihV9vH+8RyWmiMbSz0QbTrB7fB70JgD02Uk8vtmSEe25rRsf3rspTB7JMVcB2/cZhjhQ+xtlUjPyjrYCWsqH0sYZFKZW8zRmU3B+B/Ye2vAi0I8tGx6XBpYvYDrh5yIRWxCzzwYH0JWsUPgFu08PrHsZSXEx+vRAUyLgrFHGoVjvh7a0W3w/U4iNXCztN94NGs7bpa7qZqYDvUDwjvijl+cjlN7B44bP2gp0rVQj1hlf4YZnXn+u+eu5rXsG2mmxtrcu3zJMZYdBZjaeOwKNL/AplSxgNZv1ds43uzAshXvki5mQC/Kg5Pi83ZIYk49YNexez9Gr77HOU+/59QMeTCbD/dSBLifJWBB/DyCIr0CLLGIUFgpF+zq0v3y79v7DUzkzLPMcf3/8tjMURYxB26lsIOTXgpYxaeN1j2xnAbdPi1VSXuAkxmWNDgfWu/FIr1EluMuGVrTwaOiqSC4wjOJoJkA6WXOXNlsDjhOGGlz1RSbo0UoH0YDsPZGXHyXwBckILs3bziO0KGyHFK2eqad/lXhyK92b0JJejukBgBj1WfMEnmUvPtRdW6J7tLoTvurDqImdyS8U7TvhM5mJ3r09VR2Khv8pozyqb+Y6OyPFgxH6kHJRLKWYxLRAcQGR3V+aiX4uS8p9DlNt4hxdVNeul4duJHtkADWj0NTW2ptEtt2Z7RNE5+oyRyN8UV7ZaXi7FGFNKRHwAeeCBErDB7DYG19uyqmCqPLjnwT0WNs6fD971e1fc8PhgRX+9OOiB+UhiTmQ3/HX19peK3Irwxxy0Ugr6RhU8LMsf9pq6HFJVwr5jPXlLxrTgFLvAJK2KrCUZv1AjKEnm2qPGC7k4+q3WY9Oj06mNqCLb/cZcEqSSDY2ekUliyS7o5mzHzFoyA1h5RouKaThmjS5uG9kdQs/5y0JbwvSvjwPn6VzDix2XVijPFUha42CF7ZolNeOYqKcWfsSuevFgkRW9YwlqMD4xw0xHEa6arY9A/ubCqe+zCMDcz2OZI4FWVbRr2TSi1hyTWdRmNn2UR04QezT7uVCPhd/WgN38VeUbSK9q9Ft4QuO3BmaFh5/fJ7gE/9vG6UDbI3t40viB7wisfxZNYigyBsJdC7QxWj2e26hHOyEtQp5y4cSIbLLEJI4T+f7eg5yWwbOhgeqcNcbbCPko8+rPMZU0ewrWJUMbepipKJvCMGAcVGDuh5/YFPNLq6fY0xXYEqOFI2HLoPhPsFgqPzhTun8x5/XVFPlE7ezfgY2Qz8pilQoga2Fk8NWOQE3umFU5kxcTkdQRqN2qs67aT5JUk6zQDAt2x8iSZnoAKO2PN14iHWRV7SQb9EysthR8b/wcPJ7+ODw360O+3EwyttjYRDq7+0YmoLiOAsU67uDHS7HK5rpoxnQFny68LSTcOspPMC+MngF8dxvxhdy8sOkKZk89+54c0N5DZaHR5Hd1Y+EiY+TjdRYYPTQ4u8TgbGbj8LnNXyoRudKwXZuONolEBgSJgAyHoSNtnDRjBsSmTb3uYICnEdMoQXCpMRazk0GfchL+tkbJ3/hRSjnPMx5brwhMEc34x4Wvf0XJRde95zFPpLNAlfFrsOLQEwAwNbfRC9fAnKO5Zqn2oWeEGSdCbVbe2tBKO0l/UiYuxZMTOxUprsjmZLF/vZFYdwGcqAUFsHdeIaYhioxBush4CvrYicOTDHfQ8Vk/WfMH4b9+tdPqEgll/5d2h9bv/MCR+sGpnrQQ2QcHAKUPOiA2C/N0sjmgnym+QEvyKkK5m+GuLYNf8GuPk9C/DMhXZvonaIclg0dAuKIGLbT9tcP0rhMyQcLXxirEmz/p8nIyrBw5x0TiArtSZ1lm0MD8D7dZ4tsh4M7sCJsLnP83xOM6gXCQOJf1ysRLHvuR4TXoPmqKG1VwDl6j5aTrLkUxOfV5xaqdLAvAF2Q3kCtmUUH7sPwW02J+93iUknkL6apywqRPe8h1piOFgqvnocBNV779f8eCL/9fcFyBIdjG40nTSndJd4TXu0OmBSfdxTd7xwCP6kBw2fqXbHwCZopB9omHQoUxhAb3dx2S8PsBiFtrDRi1ZHyHmJfNBFYTyuzUWr5kiv2jtDV4HAn3u0e8gpcYfdR6J7bk31QF7w3Zmq0khhRWrQcGi64qQvcdHOMWWWGDxJgHgCXsASHrskGXOwcIh045EKyj8qjjfWP7DEmq+aivgeaurq4fxGKZcHvrI/OSab74sPTR7kLivouzyMtmjK3lDPHy5IAc9+sYNLTHoRmC6rGVUFW78vHfkSySMNQHSONM5bxeVYL+flLAmJh3nLlEMw5/snt3wYFKtGLiszr5W35P2lHWV0N6odLs3Yf1AIpU0CKX94r8qAockyj//qV1fjP2dD1hqPs++ghVvUyr8BhSiq5j0p+FLig5jCpbgYdhflDh0g5nbzM0GD0iHeus/2T/cffFTEXxYdwjwvt4XuqEAKLg2NCsw7uP12zcqY0saM15Gke9AQoHNJdqCC3RXvb1TiUgAgokl6VTzSd/DxEGJjeTEjLY2Y+xHST/+hhw7rzw6GxuNsda4JVCR5Dnexx4Bx/40Iox54a+Z4gCct+zLZwEDXcesIUoWbAJjUIlNtLcGJSg0FbgHE1EaZ31ODn5sh1qqZfWdiJwgY+NAqFQZh7Df/7R3ejK95jCYRD/uVrnp3WzKoPyDNHMlTlqMOyvdGVL7gbG9k7Hqg9sGBPbck5V09mqW0WdDN8fmn5/sVlEFd8Dc7Ohvu9Jx2YDCWyJZCCyJ2EafYuN9hGea+Y4l7Z9BhSicqdRcSAFGaktBfPi75pE0G6Oq92GMsAQK+6PsFRoX4jk2qXFaw2cdRc1NfjTdBpPP9qN2JplLayHMSG711SiA3oqRUmPqFfsJvQ1HSSojP8W1FB3HVmwWXpPj4M68qJhdU+zcpewzzNCoRcAzptBeFDXe9lYmc6YiKc5ziTkr6a4i2j5nXB/s8UM45gdGNiSlL/LaBwUMgShU+oddnoa6Gb+hPzEzEcQIkwH/Ow3d7VbVTfqtuk1RG/lQ4aCkEUfU2pfZAdZL1HtScBbVpPluQSWpGFaV1hMW7OEgXpv/Q0Kwz4aAF4C9wvHxxhuBpyfHFG1oUDp2skillFWwwbq144X9Gm1OolX2EF9pubxf2V0OCbOeH8cNukKaIpHDwA+tqTdSRUk/AqLmDTCsxzM0/oqHeu8c7wpQFZ6JLqkT1EE6F6a38tFaCnTze0fOL9oDKxkYm/b1QIsZSuyRuue4Yy5bvmpm5SGwm/8cvU3DFVV8aILF5c9Be9tnfcF/d0SP0ieifpApMFtBj3Cm2t60eKz7hHatVhkOBNepFrlC1W6ImqA0h8/DaR6mUbOAb0JHUbTJ1HtA60D6CXVFOOFSrdUFHSZLdIkz7tgWoXf4fOL2mTw999X7UCv8JsfEkBTQL9qKCuZSAEFGndpYVVKlbN4972FNo6eNb2/vDWgG3FpeewpwNYRGLkYdLeq+ZTEkY/r6Fvg73EvYLMuFFFhCTFO7TqWpkQly4LvetO0cSMJuPkOOahJlm09ea4NVIsGoiJwhKLFYstNsiAJu/3b7HnMMEi/yR8AT6ZaYTRGylJp/qLa+GiHrRAesnYmmUgIrqyE5nL86KQxWLHQac86oCZ1GJkuWVUvh6BntfOe1CFK17pAv1t00OSdF5EXyaAPBSbxFIcWjRQlA9eYOUl3NTp3p1kMmMYv2oB/og5vT+sznyEdbF9v6/d0kdBFrT0+EmF6/LgY38L4fSbAfuSWS/2aye0IfKcmstCnqv56XzAHu6Vu3viZu5EYMfg+xyUaEkAqguHKPVVzoFvQjUui7T39uaQwHZfxhCo2rN8A3Ef3v+QtN6DRv/M5Y8hKTUhnkQjpl9xBfCXkZXHNyRb7m5qgGnOAAAAMALAAD6baIs+Zag70Y9AWMkyWlQEVo+eAYUdj+vp2+ggo4Tx00UosbVp33dNxDTWBEJS59xA/9uDf6hAdnljjnyf7I+B22m/+EM7zraMrTvC+1spNeLqcVREOGesQdcMAWf8Qlr8Kxqu2BPfuPOV+VNuv0egF340HqkJhk4NVnYzGydKG50m5hDLM9BeRhK7m/00iR5XhJUOGHjVYia/5/oCvNzAaSJ7OcXJ4ZrFIEVlJFVOOKM1m9ZKv4lb5tI/2CzwC2OuZkN6hQU9YMwH69bAw/Jnfj9v5NKK11Fy0RmdR1nCMRPoyVBvZgBvW8dJ3IRy/KXBCTaSn+vTxeL5eRd3hzoMv/1HRuHjhHJfi8RrQT+9UBwyb2ES9CtR5VMsSN8eHO1E6Y4CbrmriQuqh2MMSKlx5iqCncPq4EQviKQnns0k+3WkwHzqQDYZAeNlecBjBTTINJpRG0Jc7NXQGbiaA53m/Ql3z+HAyfX12C9YBTs+GeBM8TvsnV+2+oDM2TP+zCAETT0ACtZ8WmNNeKvvqeCTsWlTrj0BS5yQKeW4WzBvOI+dLSWyFVqyFdTWMZmx/qDrXkasYmE/q4YuGvVlEzfTKxLoR3txYtTqlfSoUperNfhUuKVOH65LRfiEc7t2BNX7hR6zvzLlR6MQR7TMQ2UnUZ+4U4i9d2FNki/yK/wI2zz4EOnK6Cio+/klAdp8wdk5lPs250WesEoFSoknDJ/OagtdX25GR0Fi0dBWTPVUzniqel9KSj4Msw51Z2TOeZGsv4hWwA5UwzpZpfFje4Ug2FAN738VHEqDew6i9QX827suMCXv7ROLqAOv6xxEqB/sSS1lusegKHvb2szdruoLch5CKr0ZvwIuqfTOUrApkHW7aEZswefbkFpgPp44r5NMQKakFX5ces4eXg/+Thb5a6rHEaZnV/VJL2/LCCOB5wpGaB1C40gH+vAVvhVOKveDK9yCSAPXJs7OLqTYnH6w57KmH9WvGTQs6WtKGz0CyX6h5khox/Ns+sTwABO9aGqzRGhlJKwZaufKAL6lv5JuctfNGArjh2SHQUCaFqZZ+hyLuHFTHXAkrXnzsqCTe2Ar7EGoOViLBqCTIoS88LcEaXIoRCAYAn4ZOytegZukQ28dOkCd94NakL5NvPpjXZP4qXKWaVTHl7FrGe4m+z1rWE6CEBW8a/3yD+bJuqsYKi2i8Bu7jJr9nX5tNtHgj40k47zmoMwR0sO68RqYb++ZmasYaS/mJDGmHtG+dSJJjdhM46/0FJ9C6nc8XQ2pZAMcZkB7lrF1S/kel65g9sKs+s8UbJqh0UCTLvAOu+x1F6pZzNBD3UhPdosKTCS7T9+zLWgB7o+6P5rRJZKkUl92yS//i45v0vvt1ts7P4ErzTIbAoE47fX1kdJX9o0XwQUp4xen+TSKlI4o9ih3MWa+NYoC5C6iIElKR6PBwid7xmpQHVEzlFkiM/wjjhdWUAme5R+pVKD3W1per8Y9rPckklO/uGSnEq5qQ3SpPSLPROW6Z8XzF7/FNLr0i5ocl0LZAOTnpo/Y5Y6Y5gjyIAWOxZpmojwaSnKPzQNC5YwQpIFti3LzyntqDz6RhZGdF7VVN1wWTzfzU1dqaU8YDMC0fAloWnZH74z5nb8D7B8p5QcanQnDc8bnF/O8GwUC3aMqEVkffJVpkROd9pRCWyXD773q6hOrxoIAZ1Z6A+/nCfD3FbASsskd+SqGlk9mZ1OStswVDJi5X5eu1Nc/No844yNQKg8/Yhp3dm/4aPuVaYMrcIJv4fZm5wMeN3sHzv/EwxCvUn9fr/39ee8zVBSSVF+xe0zFT2zMgSrBC48zC7cHLdF7BuY1lsAUJQZOOkxd64edKF/2fY7EktcIUYRw4X99A+X09Ebv5SoRtewWnT/fYOZvyb+zCV6XuiChxWrutDSDpbQdHUY1WWVVvBFxXOkG7y2IHGA6o2yq28e9Sn/3R3RlhXF4vi4SbrXftyF+jHjr5rIYSmsQqD4vyA1x59sKg6N/pfHjkX8nMl5NUM6vAj0ds02Fv2WVQRZYGt+7UCWcOkZj7/qEHfiOl1IMl0K20FmXmLTWl8iJHkE9yzknoPx7yf46UvAAIDssiZTUQX+y0dFznG4Zf4BY1+nskL5PfS8Bxo59gxar7PyPUug2D2iRWYHNwFFNai4aAV8muSRKGvCb/tbGPS71MaG4SvIqNa/2AjmXkGRmXcMTVnjRGM3vYqZkSg64I7zyH2XVB6MaCpNZemZpAvFyUBjRuDIwmGOV0P67HR9rkjJX4LN/mQBjlgghkSZavQoXUu+J3R4Y+vTyCNjM4pfpyldZgcOYm+cTauP4izV802Cnk0mRNL3wfgoK4XB2H8A5h0dtNEqE3ul8Niu1Fb9RQV1vD15juCig6TJZZP0DmwKg2HQHazoAShNIE2hSuocPrTFzTZhl+O41qkpNTNqaMfXFiKXa5IzXECujN8UdpQOEVcEFH0RvnuiST+Xm3icgueY4KCyBgW+tmSDcS+ZRAgnBR1nex1b3fGScBUrN/L4qpLB93L0EPW8hOhL/wXmWa8Fw0T47bDWRy/SGZrtZmFkWJnrlgDDqW56kkgaGzlEmjzlcASAPl6LcVwOSHlgbm0Tc+vl5vEEVsKCrz4BOCtJvUP/wa5yYxhRfVXXeGKGhNfswJeyqlWlJX9IziJ7p8U5iaS6Qf4mv0Z1Vtjzrj4vZc7IRcVMjuuB20YMSNBgCtYYsl8CnlOO4vYiTS2fUN8Ww8mb19zntmujIbmrxizsZ860qgs2BPYGjsFwmKwtg8valSZ1ASqmL0pEI48+SywyG9MZ52nMv9zLTZzcA5mqHJ4UwTCm/n+TsxwGEgEYo7kpZSRg16HFc5fgZn9Ys4s6bwrVoXFMSD8xmAfojJZSYGH6/7y72Kmy6eAQ28YRW/s6orT4hyfnKwXT6mG2F3X7zH2cXl0yUy0Fnpw44bfAbz+UucSzZBHP7Xm2PGSblzv1Qc9oFBtHLwm4OtFWFZV10rqpICjX0IQF8P2cpZoM29trAzsBDn48HiyA9Q0nnW7WyMM5mdX+E3PasjzdDoqtC+ag1+BE1p5M5yJh0seZAiSVPQ5E3O5BaCGL7VMkqSZpks9DK0+fHTb65LLfunhfuAps4strrPxEyGLfhBUXhC/VpTO9CwaEEBI5uOy7+Q2BJdSdYPvAVc9HKr9Y3oBIowHs8ais2QfN6zD+i3dFCj8Wff9Q9QuJ2J3UR+YIaP1KjmGO+3H2cYcX3yDX044Psak7pd3/AkA4RGV3xJavFLzeRz8PQFuZrbzg14fkeL6nN+xKEUfnguZrC37AhoFsBprdqOTfdVcXDgfgS5nmpfkE17mk1IZoTE2WUCOZ0pDp8GKdXegqxrdemfiqv2IiUwhW5/P4LJG2b4PQzINOmULGi01F1JpMgT4mamCNfpX2iQY8PgXsuEie3DspV2U4vXbobIG35Vv6hFIaPYVVj0fZ+4bSgr3wLK+cjlRaQP0KiSaTWk9KiB7ujzHVohF7Hg/nj70zuGyb5PNEwzKXTUFw7dNPRVwDxB8DsVoNXFR9L9kUvyV4LQR9DD4fXJlm3J+sdIpSbu6Y5AUyAkplSTDIGM0+7jJuXfTM/SgoorUD7AP9QmnJe07W9dWYXGuBODjKsk6FfaRYzM9/oX9V38SNkbKWCMzKH4vRnZLxjtm8VCtjSh65mCi9ndOBCHUMg/hv3kh5CrqV+eO/bRyjqdjqzG01oxquP9sX7gKWpSTP65mHkFtOmBWiWsEhXpH22qbjRA5hLbouTxs5GPbUti2AQcT85Yj4j24saICT6KhCLJy7Af/UkgNEr5OOgkhoyU9qRNQm6bKgYbVjTnovhzNSJRUzwq4LvZJw4el4ttRbS4Ye7CYPfiZ0QtPTDTsF/zRYhIA21bQ3eN21Bl75kirzJ5M75oSaWIGVgE7NvN86sNtJQ2b+F3Ys3v0HQZ85rW0NZVzOMlmgp/N5/RPb9vYNgmunuRaYisxpK9GyngAAAAA=');
