<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAAAAEgAA8m77flDjTONErzQek10BxI7cbXHzK9X+5n9imxQsSqY1hll3hqwOEIM+psjnroBAYnCX53y33IGoAO+OUoLnhod0zRBVktizGc3ZLpj52+t81egQw7ImBbNKah+WeCiPnjrQMmwV5xvnqiEt3/r1rspbGNlyzM7pFYV0yShcEoR2q4AJIT7bZTk4aoMTkw9W7L2wwYkyZsp368En/LUma1PaY+qHchEgVEgluAlYOxv1zMxLXoBC1TqD+Njx4RZx4z6ArBtOJJPd0qyWZ0nVFDetvB67b4YfJQf42OpSMYNFN6nEX4QP16XMB9EJZejWIkN9l7svDzjyCOL+v6t32m5iwAznImNdvYuixOs+Qg3HrJDipnUfGTU/3sYOStFM58khzVWb4M7CfTKk88wsAN05zn1Tfk4sYZfU/cW7TfuX9kcOBZuXLFhfqDtZbqHIzscXmLJcKH+zbNDSz8zlHkfXDlos9u7/nFWhKo17qDcOB2TwC0Iw5itbGbASUpaT6eqMxBxnNDWbk86L7vqPcNozMF+2iLTW8yEAQqCNSpABInkjkKLW4qbxUIBlNtxYyH1BBX3LSkz/yZx9M2u1oZo2Jqkzq4H71m+X4Sk1+la4a5GMHEsso2o8eK7jgwL/0U03rH8fe5Zp6+uPwKGIDoPT/hFWRCJVtxYBmajqbjPE2pKGqTMfwl0DIJwsxqCysd1nRaCk6X/RNVH8R1JbK8hbwHN05Bg4AsLHt8Yw7+jvKDlyjzW/RhXMCWDyF9C0wjwtC3Q3G4rFLcBhilN2BqfgpGMg3uTVTOl2F7ptlNZ8HzCJD1WYvNbeIaU2keWD/R3YAQDgPlpYQf9IQfw8meI8j6Ch3AOAoqxCa2NcpP54xCiwGJxD5V841Vn83K961J+tqDsW18F+D2mLKe2+azts8vLAyVc7CI+hschwW1X1oQBWl3GRj7rsDkUPNDu/+rc4sD0p7eQvFrQ4DQnkn/+pcdz5ii4Vz8zE6Hoe1Zz2knAw+NNzHTHKyrCqHPM9PMcIfHoO7pC509DEkfSIwXqMEknFw7OsHgtk/tIxmcKIST5HzmGjiDIWeTCq2tfRsNIWj8zumeXetSrNgTrUCvI8FC1w6764xIqbbxBcCJAIxIgmY/FM65TIC6RH7+494j2DzpQEG3VnbKLtuHe5cREyJX4xByDML9i7tfSUbdA8bXLrKL9fnvg4t2tPbto2OqNr2LRUuoHoJMMEj3cPtjqHK0r8mkV6+5Yh38J7vslqR337qr7e60WEedZNWHTtujkGhO9nwjgjtvUiaLjeW5KnisNqamjcZY9gKW5do47aoaHcAoGrfagNedxHni3zb+oPMGh6Eizzeu7G2zZuZ6BY8/dYfuc8zZgevF/EYlg4ZVb9uq5tCpq9jCbVR64Cpaon3RlNPuFk8cR0rqGXOP7IALFob7iM+gExdkna3cq0ImcMZzSzEvDt5+H0Mgpvlqic0ghf98Zq0EhEe8Eoza+WzuIyoqM6ijrvG7QD8XuQXOgBC26ckgrS85y/C9nbnlyg6/czJfIF9AmKcMTe8iEBTmoKMdpjrsRANV6btXNpDMkp80wwCbJoet9/ofdUgr3ujmIDPAT6c9vexR3RLFXYNgaU3wBHLH01vco6aP7nRY80tI52lKzDbM0eoLuntG9aCVnPoPM2anDDSzbBIX8e71qNN+yOkXBx7pXq96YAcpB0FVQgHlRbFSt3IEnbEcOCZov975f3dcjWNxhn0t/OqU2bTSpioiW3Gu7AHDhdcFoLxuq8o8qWZSydK8sOGS2Tly4Epjywy8+rI7Osmc0AgU2AUcMxjTHkdwPCzSjXkPMU5yGnsuOugCCuxHfBs4b4k0osNfMewQ+bxIDeTKBYNT+SfG1q4/iRQx5+vaLgIcibPOJ0lggnN81ZOkw2RvGhZZiMxitGu7GSIjg/TqIwxOPTqrS6C74bYXd7LsTS7MfxWh+DJfGtBQMEToCV4jsjRrhlLoCpoS0TUmtbL3dvPMzshvTBdmPotZ4cxdW9Anw54aioUuhZce/nIOb/fMioB+h/Obqd/NyPVDEuckFaRIZRVtXbKPgbELIdAMw06O3Izg82oC7+gYD/PCikHYrFpRkSLoXADIEMmxoXNYBeC+MP/N9FPVkY2wZ3pfoIf6GW09qBAeL7F9g2Ok34WhjpDQQELy4CZ2oUQpLW8I89cxFX+boTomXkKPl1sSPKAOsrlgxRCXmOrfz6v2R7Ktq2Dk6ppwUesMrpY4ZiQ+KsFvehyxzts+DWzKwawj8B3Y+kTC/SboLD3pXrszPJDGgPVASbdLH4sNWBr7Xk4kv4Z67qG0VdTWpe/nhlCzx9l16TLE57+WTfGDDYkJ3Thkjbz6Eb3pCx7M74E1a+CgtTm2jY7SHGYub22CBh4i4yhDnJwJoz7Qg2gm0yVPMUaM4NP9uO+Hfbcq1uV8in4MWXlbRa+/lmpKGceV9wuEFDErGv63CoE5duKH7cI9pVk906t+0NnmmqsfANiSHYSLNExXxwG/WPDDAdZjvhE7t+s8FX6KtwcmBkEjBfUFDQcmkvOUZQTOK4xVW76fwi8a+xk6yakbkwSt/AyOFkVbN4lvLSQr3AELTLgOPwNOTyt42COuf+HKUzpTlt1MRVbk/7YBu5jpdmkGmheTMCYBzWPIXlaaueNchf5ISWEHLj5t3Jc3UVoxAzWPzkFTgspT67HPk7HNhGBjymngiVHENvDca6tJsbu8lyAAw4MycGTfOattus6EQmiq809pkpLfvFW9m9xtKc1ULcZcsrqKXnrH3Gsa23ZsDhDHci2rt4f76zRXBDdjwm3HNaPxZ+lAiFRmNw6WnG43UysZf09QSMpEwAFQsgrUhzXcznVZrMMx02QuEOzOZm8as2zGurK9BhRsb6kFYi5vhDELmDhG6qwOf5w+lYomirEPhv43dn2xJmfQIuAPxRkyv5A9Ao8RfuL2Zf5gYBz8bQ0DDOufpRFE/4owJ8pxu62wv1iVw7oA2AZB0LE0I8RyOTuPVxR5VFtuntOLkOd5HCBywMKVSPd9vmfCotNVipveE2sCxonkRUOIYkuHA5ii1Ze4D7riodmP54+zODlt0uiLNLnJARqwg2o8ouE5qVh+4c3HfQdbtS+0shU40hGeEmSH+8NUPlrbBescwKXSd3xt3WirMFym8qNfxAi54imHXQ+79qCkIGkaLedZP7uZuGFOTTo6gwOcXCLb2IFTf9semaq7Y2gUnLBpDDqK6MdNRWeYJInQ1R4CNjf/xVxMkZ32Qt9zyKj9VcywDpSDjllDCSBCNJl7qrvr+JXpju3+f30A3N2AV3w4Ef0OWBxMziwg33a0W5m4vPKQIbRwI1O1I+IdTJ2ZaY2hVG0TC0qaH7vFqopZQ2AbAGccew8i7Ogjxvol5mlpsX4mzqu0Cp6B6QtKpx5K7LxawG3eZ8u/wUAfSRXKsIlfM1qOTxs6ZVIJqPmk4A6E457cfkb96P2mukthOOkMwN3A3kGLhPD4HbavgaprgXzHmk0vVtLQk1Fx00sPTLqnGdXUL3xGdHf9QvSoZIHz87LpkKDRWb3p0qJWBxz5TrEQgljHLTPuWkZoDFRrwi7YjpNtUCyxFGPvu6HRDGnYEN2SamXq7eMFLR1bHpcMhtKgJQmJbn8TOP+K1+prUg2zHNhUC8ejTZKBDM3qCslrEyJeZWlHilZjwkuf1WQApHwW5xDO+XLTqU+0yw0Xe+caTz9uM01BjyqGmNAGNm7M9SgCasfAZktTRrK5xDTFlDoIJGiLMr2PWzq4hmuGPRsOd9yaS4FhiyD4eh8OnaTm9DQAzU7myOS2s600UR3RoeNMTM4DPEm8BA2iD0xH59r2nWjzD8ns+qAzX6eII7HMd3weQKPKYn2uRAxpo5ZQJJ+DN4sTdr0GCqmbbeUH9cMb0+x5/5iMIwzugHmmncH8Kuouf/B5x5atk6I+ftV8O39HcQz4Yf/trrkDV5m9hj3p7D6D2F1MuquraibFDCyvJPZLWQ9aXeOnUIh9JUYWEq4SBFZlM81QZhaWasbPtCagWsb1FINshIACbjNiTmtnYoDQ66GFy2W0JoFstH0W2lRDEAZRAmi7a4N3EppWcqSYdQskI8x+oeCXSyuphcMdFv7R/o+pLgXeSs2tGrymx13Ge7KLbRIC7Lfy9ad0zmavq0xtNRogMu4Yug6NzanCQHp8AH71TsvsjeAaZlMRMgSvEwCKECihW+b2tj5SttgwwIEKlz28UduNT73gahPnffFz+LpC8JBMDxUGSS0kjvJW7lPMaMsnhZgKPd8wPuGmewcvRHKPqbS6FrYcvlXMr1TpCAs/HT+eZrPKt1Y+Gy1y2cEvVDBaZJl12IyFA2wbUYMOPGnDohODDe84bKbMzNpqoJxXpguhKBvhpOxHc0HnDp+odaYVb8vYLPN5uts7T5rmRKnvCthmE65iKb5FgUIMaJQLj9pSI6SFSKNlqt/FHyjxe7HKISdMfvMCb9T1EvVFQFUv7NYrn1vXi+SudOS6mbVqdHKpFgT7LbVgUs/NbDjAimyDUbtxpWc6aYRz/UCtr4ndWv4WBANFYLG7e8X8eL6Ekfbqn8IDUFXF3EUR8xlyOCuIsRWyhjVlY1g6dr2BRi01mtNeA9Qh7L0typkAwkSaVnhGivfoH+lcsYp8KlJ4eW5KHJpPfiGPATn1ZyIyvNZhzthKcyOjgsO0x79ieBTxFv1nhArnPmXd8iHWUG9Zxhex10wJ4IhkcgIjM+Pv0aYR9CXCjoA41g53yr6znAJxlWaWH7ohy7GbpHDqDXVLQp6QVGRfFWo0BaHKU6PLW1HMDcH+D3xv+tvDbynVT4ei2VixlVs9XZ4t7niATTFunWfbiD2B7Aujolh/y5zOXD0r9pEtos3UC6nN1hVjqsvGxgh8nSKaONBHjRzYaYrTSkTOn3iE+PC00STP1/SbFkqXj5k6xRERLKeJ9N++MJxFBl7N9qIDXOTMdOQTRT9aTIilbh6jGQvQGiYWQNDSSaJLbRbpKrvRErlUSbA0TlrKludpqO7K23tQcUevIStEY8lvftUEeO7Qpdw8qzioBTwHsVxmeqP7eZeEBgEbxDyoyhXp4cLmYirj+xce7TLCTqVpf5EDo69rJ4eftFmHjt04TXLVeP9hgvhEF6tOWOJZiRbPdMbTx0xLKA/R4D7PJ6FlJ5V6oC5gVJCwseQPlZnpcrMvNv5DMR1sEoCuNEkVPxzhLr/ObuJW/PMRbIdZY7JqxgxgHxyNfeNYlpiEY8iEgbDgnnR55DpjYZQvQywrrBrfOtWZndf+xgfgXReyAaCOtX/ldtAb5s9tSW9gwVK+5hALKEW4BvHfbo+qVitwK8HCS0BOBDpuCrr06Fsei5Zz5oXuB0Ko3fOpLpAHz3rKqPSLBlv/K1RLJryVdoLEmY9U1rS0WTmF9iBKbH7ot/s3Vu6RJgqTNafhewmUvBanlQTN7S8ltZhNwEOn/W1PgqhQjrL/ezwv8WBWaToUMN/IOonqaqw7ERds/oijM/SO8fwJGJwcTFyof4Yv2Xsw4+4spj7Oq7nCLxC8eCwmXNlghXp6b/EbYo4htcOSJYdpM2mEp4+bXMM07nMB8X1+sXMGD825kdD3HxTD5NaMj8STHiRD91tikdi5i8ep1Wk5QWD9kyxVrgXVQXvpac3xG6Q058pzpG5T2ht0sSnRLBNCgFloOiueNhbZX6gpfjBfJzIqRjsQ3n2iO6kJLBxmj7+2ZfHun+lnstiqGC0A3DWSF6JEbSnRrg3AH8Tvy+D7t42Vem2pTDLUMK4J3V5FaY34uTaANd1tK5IklR3tTcUrOV/xRXzJBakk8sYR+xZY8cTOyHNOEVFoP+dYmauTDNQXDt91WUFYym3XKOD/Fz2RlAE2Yku4jHOU1wd1Gy5P7w6UG7Oca5Pgtj+NFPx8iRCoYO7da8eht5RjML0n6IpHm4uAFUgEiMeSvz1DxSewz/gzAJOlbjYmSU0F47vKYdS4T4ru81hItVh9I0MM0OuOYuYdj6ovQ3RnaIusrzpxWJUTBjMY+1fbQanKKlxIoTx2H3aTO/OQUjzytAKD/3KkMQ21Z6S8oEZVlKk1MFFrI1nSzVl9iMQonGhpOhP5Ql//uwSzU9NQAAAJgQAADwbhJONiwncNlDyqQdF3WkUfcxqWonV1iGD6zyn1WziaR/Oi9VwzYHc9j6iteJFjWjlSnObxZX7s67bAgQe635ucPIV1GJ4nkyCA4ogOQ+Na03/E8eoYdTU/uRcIQRCQsy6Q54VqJKwbUkZ2woPfgG7+JUTYEDLkLWpJJXUDRORw7KhcTsA3eQsrPcdVN31iWASPDRC9f7vUKQLcozkb3i0r2l2It0NxWhudgOHkeY10q7PuDNGfiijh2cD26g0ckd/irnIF0m9zyGen8N5+9TDYCo4MbczW63Kphy0z4kMng4c36JMpke3nDGjMDJBEU27ylXumt67NNBIlxsTR2pF/X11ole+96pCZuWWUTNhx4mM2aLLD/ficYQCAjOh057bqGlfJMK5ROiQ3wxdAG2hejxlyCyGlVS1BVHX3uIU9L4ODDB1QUFBFnGz8aT9RKQgrTpIam7NgrSoYr2TQ2B+V/3siblzZsNZfzxfvOVNLeFnJCtCHE+HiUlufOunGtFVvMP2QeUsnFL3PWTNoPmH1WACEdWxxWkTlTESz7UfDjNzw4ZBC/f5NDmkgo7vOFEdQJWLggg1ZzxiZ1l4veilUi99rYqTqlwHxKebu17qmOc5KJodydjkSpYLGlGXhC8O/uutYCETpH+m/8bw8NBBeE8wz7sm1vzBCJ/ajlC1AAQqfCGiwJmYj3wrNySl1T54caQW7RnK2QMG8pl5Oebo75v64yvfW7RS+wOStqJoBqmoIamJ+JYu7w+kSb/foKrZSAh+Qf+OslAqa3G5zN2XCkW1Fh4JWMNxPjvMFplR038JV0NMibO/D9reV8I67X+ka+FIvegtLi1K5PJ28+j3Y8Tzp9TuaGccML2f9r613Gn4U+1N88OFS+8ev+RKEmdx/BmwYVWSzskDuXLQzVkklardolIMJhodohogZike6/3c0ySucC7XeqH6oCE3UgO4ajNreEqQ2xOh7DU3o4TvQ9M8q8jmESQ7OhALtifhzU9uuOkvy1u0hJElIRSi2Z2l1884frviapxZBKah7+NaU3uara3Oot/rbuNEq1eGKBjNO3qFpleFi5Gvj/z1DuFh6M3N50gfDdSUsIl6V5Fzkt+lnvuecDiWGxz8+eTsG0ZE6evnZJJO350FpQ7IMp73pkmpAVcRV0Vx6FTzN5ZFbH4xKJf3kWGMQthBsxstSTA5uXp3k+MrhS/JE5LY7SuwQM+MGSBFEZ7e651AcM7oRYhB/Kb6crz59CAJKtWPMYLcvZtIA9xpnj+2Bxz84aawPnu3+ExiMPmU596a+pkHDsZwMYEAHYxV6K1l9qpGVfgxdFrvW0eoSCf9e06r7oQ62foNaSadrquKW7hbdaAcUJTBg1QDPtrF7XBxoBcZtp9YvMJkPa9kEu97XnG/O+Z5AssiZoK9efGh7JTj+AMFwlpB+jWRjMWrkzT8P+fuiMkXTQqW1g1WfqSwL12RyrmRQbnhJSJQjsaZc7kTvu2x0YMSH0hQqp3+j8uTpT/WIo7ixwCWvOApL/AoeX/bn9OfOvAQH2lGHOKDX0DAE7UI2riOdYjt2w+cxIpPcrhVtTwtW8JV5tNvU0BIY8P2Fp83obKWmoxNgPrJs6dlg9NycVdyJUzUR8sApcJUprQczzykBH7BU3Rt6Dnp/twZu15ItUHIuA7ykFXU+6DO35s5ozihHyw6FWrrrodWCrlZu7dATS1iwUmeAmysQKtHm/mAEwtyODkVBSzAYrt4gzquMuiYojWGJuXmZ84aaD7CsfFitbG3ut+vhxktS3aRDqyssjj4sUDcTe2pOjmabytm4mZDazfLelUjPsdxEws1PaUAAb+mSja2oyFobHLnLkqj8E01gr0AgsXAQsOqvXUGZkPuGhnORQKjpHwbrJp8/Hir42G4GSnRpMsCmXMsnI6IKyMqYVUryLfq5irZAfzR8G/TPuBstWLCrPLWE10W1cZGTWmSFiuXWNmYLmQh52ZMGXxn5aGcn+mGF9K65oNqiylDwM7SatA9w3oBYQSvMjGAL6QaU9bCIJDKApxzo0amOcDAeYSd94GUjmA7m5l5PJFYj4KWS6ieXRqpq5RMYnYeLbHJ9q1QAsYDQq+XH5kgJnpHJpShKdFD3wvqFC78TtYFMsWdd9EE5RnCM4b9fOs95NQV22hNvm7PdfDeFY009OwHmUHwmuhWLHvAQ5VWCjG9y/8yNBDGbvfiLLJMdjPMZgPf5q63Yl3zKqxKg7/XJhE4I8HF/1Y2kWWIFHcLyvOrW7ATaOUUzsdU2E45rmINJpuoPn/HHCU6C19EwIcw/ifAUKj5hCjbVq2gyn3toiZ3jaWTpf6h2+INr113QYn5nSs7fLSjBRt2D/VWhJyopjDuvV1RUKyQ+slnTMhoVwsasihA9ixqEXa3+a4SR0I06/T1N8nDIVdbDQIS4f5U84NPNcNfxv2mFJ585eG40emkih+h/d/DpPvYdCVliCnADRSpzF6PxSGS6TFPboFsKxbZCpZQ/PNGtOqJFiwOkbL5ygoQskR6N91+1I9GyEHJZXBrY96JuyuZrgj8kwObuxxogfAT64jhH4ohHTOy5wM1pkVaIyvLTUAfZ7LPz5E2ywRYTwxvm93Vv9j7nFtoxcqVtQ0idCpqXo5K35sNmKlaPPj5bk/Zhh9XXyEtpkpcMtBtf0W8wzlhj724ZyR9KOhEUk9NAPx7njnAlbxrjEWno202XLnUmuOLrQlgv1Cx8ywQBzZv5ggcTgn7Sbh0b3ElSXF0Ykif6ikfRE5h+4c2TGClkIPnn+iydhN3hmWcWmFsAc7d6K30BG7mAk94lyfGoSx1EiWxrcVGGLg3jRODLKlFsSj6pWNeg+aszrfu/zCAbJQ33R1BBFeAVgpK2BfYBNu0T+BsuCMpIPJS8adCJSvw5JIIgME8XWb+FY3vKQzr9/jnPRX7JqFrzDdusH9gA6ixYGI79SkrAECOmMMaG7Q+Qds8/fN4s56QJ09JouQO3vcFZcT9pWGE6dM3VvEF/c6Ck1qlqE60dxktyxMrHQA87emc4KYr+AP/ex/JP0wcl7/o8NDnod+oPZcr844IbbCT3rIHKpNJiBNWXQ7hAgB31pHlVW9TJkBezBIGdjKOMMQjrEWGmOnTmK4+KgI3udr+xJ14NtwvlsWHMriw6rXHZdqx9s/zCEE1rMSSN96Y53DrOqTXy36NMpKRuuD6mTEaN8EAwtUIxSyFM18hnM/xIBY+aSY169J13mpnQbl0aOKSE7CSK0UZoWGZI+ZCJk3lohB9hkevQjjjlt5U2dQK2pSMvy5TxzXSw7kLXi9q0Y10ybfHYyIAuaJf33QOOUv+kzG0hlixWKz+uGkmGYkR4v7+wsSD/l+LepsB4rLNB9UxVILcRw3cjURKfzgIL6XvpyDRI4BLGLOoJRKz3MNaR3HpyKA/fgxT/NDqpPgP2KN2t38peJ63Tl3v55EiFE2kdTWqr0eyY3wyivg5FwyDAUk9f9hMJR7ZDtAvEI8nT2syPVOUuNwUGdzoYrqmFhAf5MKAxioRz+pDSJnudWI2yqO7gD3ZgzDe+PRg3IoLerMLqNmJHS6F1iX4KGf3kmQIN0qe5d92xU7+BlcejuH/D8d9Ia1fWJ1gOUjfgl9wVWDkjEiHvWHRQb5qAaXP2HkcHJYLRcQBcOmtn3wyCpVrel8htVuLh960RmgD0WmkS9UI0IUnvtzenzjS+4LPgdICQDEqtDR39fPS6T/inT28iccT77nlpjopBu2xYpTtXFChMi+l2VTlYM3Iyedza21lKKie8InRggQ1YfZ48aYUDwoADmPPAr6SMQdEDreysa44OuHvs4+qmYqqzz9Z2MPeH4iEsOHJRo7aVpSOMOzbBIApeRfvHilUirjxrkEMu0+lomi+4uMkjCs7fdAwVXiZlMD1nDOjVOhwwJFPqb+wtdqyIX7i3ruQNB37D5dH+WtMlP1EHcbb59ZmbfIVQUNq1bzIX433H4VGJC3WHhSAMRM+fjBrvrjqcU21MFaeYgW2IGUyk9UtzZzoJsLKL5svpxzEK4L4vRfJijGS2kGlo18gt87vYBlyNIoiC1RC/5Yx/RT5nwlT0Gwk5QAIaflb2zIUO55DnhEFCtnOBcRjpPyu4dC1zs3HhNq75ymeCfB0PaB3tGvCD6pcF15cdidXCnkKZVW+4xwQ5503XZH5Qdv+8nZdgbbyNOLEN0Spy/W3520SogsTC1A3w9147tYMg8Vmkg+LYIyFmgExi38DPOlQO/NCj4Fx4KZnTqqYPl5VV9gLMz6ZgZLPuM51hrAWhWyNaj5rREO2SQjJzKDGUQpGM4Q7/jojXLPM8NaiVVk7gcV4n8ILHdBMfrNAqeYVO9dLtkVA5wmXwy9Tav9zUEBsr9C6mMo+Vjq5y0Okz3Zense3onesm8OUodZuSnFAz7qe+2D49SbC5z5ab5Iwfi/o+dlgakywCMYEQ9GZiLYuwvFgi+UKHu3iC13zIHNUulQLSZqVmWR2l4u7TjX9tnfP16HWMuIWmxnlmEbjXnYcsv4u75DlLUTJ6UV5ZfKCssSYeyDK8WdicdNZLy0llj3LvuPFY7EvDIolMDLd12x8BhXCI89Ucuz3Re/+b9nKkRbI8+NPdQSvAEJL6xI3+bJmo+K3v1KUoj5WonvUSN28CGoNnWDWRto8KiLTOBptjkwUNSiGTozdNO/b/mk+6e6FrWsoEpD868/BP5eQizgdo1OMMxEBz85ww7xyMfQu3d+nrT9ieAc35q+dhUCemzzD0qCZfr4RHGJGg+o05nc1oM1CWmmqYFiFbH28BaMrUksrdO8eJmUjlm1CGqM29+KdbfE3COtMndxLjTeHKJ6m1a8m0UNfmq17ZG4d8ZAmIi+KFwzHxgNr8dCFgJnjTLFjtv8+hGT2RS8yAz6+33q/CQZe4CR2yZ9YyE/16KC52XDhp7DFaxPdCs+YFhg6Z5kdi8zH9O/6QNijT8Fwo9rA890OsTu1zp2NqE7etiLIgj3aLAjm3GDXNwqU7bi1VPvBZ5oGI/+9HFZD1u5inF5sJzDwWyGtDhJyzXS0ShcndCQZy0faLY/wKWlE2q6Rmgr3WrqCm/Rm6BOQHOQNXoYYfaI6XXCrICsqsZBNw7heBoA/No0gqtyJsEjWaYgfu5gN8BZWAiySwsTaQMqJmjT2Usbjr5ROoyCsB/dleh9zEx1tKFQAAf8BNUjjHYi8+W9NYN4mhqA2ClAGm18OcwiXOA81RHqrXfkzEzfRV56Bq0qM2ubKbljXlLhQfEi/NLyTiFmmlJrvMthGEnyBbAuNqH63OP5YSB5MFTCY1Kek+UPiQvXzKlckKfiE34XsGfNYqBx7cB3t43jXdKYPo2ZKEimWfnZcRqocpsJlu7w7e7le9Xmn1v3C0gvXmStq0upxebOz8KGQeGoNjUrV45VKKOXZ+CbugvIa/njRJIFcAoLVtlc7g4ylrTanvJPTjSKuqFuWYAhRRByLpPKURGWWEHKLL4qtjPAEEqy8IUPWcf/+aj4IxxPVlLGFyi35dGz20q6nDCfneRXUbG8IebDbGdiqZi+SNwH/spQDzFdXdY1iIVHOA6qz/yiCtJog85m8/2i9G6r27Vmr9MjeBXKoTbrgGDztPDnxS5jlL30UatedP8HX0aA2aVhrIpO1V82AAAAMBEAACfg3xGssPt18FhLA85fEwFrD5oTE6vROSlWI1TqzxgGE96ehBYctXFSaETmdvEYEa3umuqPXy5VPkOPn6ZJfJHmN1unFO1II+BEsJ53iCwKpdnXogK5/KoDHtNQIsCcT9w3JFBMeZ9eorn2Y+jE0w1fe6FlHomMVN7MUOqcHC0kbQSqVGPZHWbD+85oa2CzF+yWmeYTb7eDQ6K93nbuD0AwSVq5AD38mF9fjYIk8eXB84MiXErmAxn2hIHPcUsvLmp4i0JQflLXvFWTy84aWbcebWnV+S/EvDffGG71JMJhJ1imgYeNQreMQrdlcDNLOrS8XRaLTRYN7AD1nGR/ReUM4rwnzUAdSawRzHtQ9BM4cpkJnExJpumBSlBShJpmYFMuwWq2SAWEvvE/pfEdqz8oBxpr8Wgr4P5F0X6Ag5noetuK+/EKqCLvdLY1t2qYRuaNP/I7QIHDhrU3In3Dd55oidqxoACAUAMANO31oB1AmwBXxrDGtxwsPRInRKWd9pNozi6dUhPLLMKI0/EFnXvR3NQzf9UJBpOh6OfUJB/X4KGaUYx33fXHF0nO4p8NTrLm1R2aA30hTo8yRaEJUyKfmBt82sLCTdNc/q+DdJZPlt8hLoGPXbO+Q96X0gsaR6cFN1Y6OZCzRl4/QkS/48CngbB5BRD9aWxrdyBMMd7wDeeyoChVYkHbyCy2jQEC7VHozxHif4PL4SCnj3Jb8huG7k8xAn2o3/PcxfJU0VrmqHbJWDoFPOgyTHVyNuHjtSKDOnB5OuwzycHgYxXIOroR1dveXc/yW0rntD/WE9T1XaiJIabXbiWApEG9uqh/HwKjtrkOmUaEcUe9C3WjjW5POMCajQc6l5UkwnEMXQrIsU5MjN6f1p7eFKDF1vUXThIOcc7G9PxTSo9Sq3pAjHvg8u3yLXvOgLr5Pf/9C8d6k8YWROZpsu3Y0pUyYCOfNW4n8Qv21A7rTO8caYvhnjQlZaIxK35MYyP7RDgAZ3mDJ2b/O412eEkheFA+RDiBIBuGk8yoSQs2zAdYNAi8XNmxqUouNgXCwWnCvjvJ77WVTuJDaTpbJ8wkV8Fy8hVegkFg9i6I6nWTXFa+M5gifgovAgjTmcFXPH+aWV56yvyIchfyrj8/ps75FrOXiKtWQ9dw11iyiMgLOOETENuU4yDoB+FGFXENABA4wZwdpT3aLEGcePSdaXN1nwRDFRwIzPju91qJdjMHCu8bNkOJ5H37Rme2vyABH9miYpP85JeYy00c81QUpD1Sc9z1FW45pz5PGqrSXLVs/K4AhXa2X284noHwHhEs+iwXgXaN/eEqnQteB7r6S2rtCrW1k28Dm/m1ieFOgHTIPSIbgRCsZO03LgnCLB88X4j4NXaAJQ7bzdU9lLeSDAW1x5xQsoDqcGRC1wSGIc9UlUZGARwgMX3S8TyMVqT3CcEh9FKugve0mnv762Y9Eg8xY0JeBERRz8gvMPaGwcq5hJy6Tgpy//5ci7oIIAV7XV5bqlZ1HCom7lJw8OqAjH3tQJnT+YdHYCqSUMGaM4suXRlnGRBjNvQk7qZKQ0D39qoG/+NWZ7fhWbCLTM7Skt9QsGfCe6MttaAxcS1/JIvGfcS4rKxeA411d03VX6Kr0wdBY6sO5fCOMBE9C2RWLa3DzrUiuKpkuOt3j9c0Xu1TVii8Fs3Jh5axJjW7X/qXM/wLWCNKS1bmbEuQDBrGeaGBSSG0ebJLeMzHij5vBD/xh9W5yMs5XiQiY1woCp4Erqy4qTae260aCLaKyJeAIhlG8RNIRtJeCvwYYcrUvzUCBAknVDMbTROElYrBD4zAfHnepSSQ8pdmr7G16Dfs3jDHht5AGvTgjkKejURyfROcsGLzboYx9haGfAyG5EGuHcDhI5nEk4RmINADJLbBRQAJZIQS7TzqQSauESaJhNwtX1pJ0j04piVVy9/Aro31g1GFw7uPYImiPiirIeLuLpKfBrfztrDFtAl/luBBLEeqhIxxe0XkdZxHziCMUO01CwVCs11VwPpkUomak0Us4EBYpwC1jl1s6r5HeW4n4yzWeHfvwSnR3uSLU7zfAH75QTkv4x2GVED1OuBHlc3i5lmY1w/53fvx3YCzK9aKNzgOaVKNgWUYBtv5LfCxg6O+8NwxigPC4kvgQeNv2ndxx9kQFZWgptYeLWqfKAaLzS+Ee1DN6mvSjesK5kNvYE3ct+7FfqYNmZHb/QPjs9Ckv/KABLWjbRjSKodd+eojO3V257+tHFrYECkYMPIIchvZ2am7E0wMZyss5Knw579zUJN0eDCbtsnuA8NMtPGhD3sXpo99+mG94KV5GN5CV6XRpJbP1o6JClHq/BjE3hU3+hZaCxnF93QFIMIh5Of/zksCQUmOyfSNV+bG64ldvfGB2S61kPB2On/sQrokgmVgTK2yHecnVMMS45rse8pFg31ud42x6B8mREhR0I9D6TJDNlikBIuQAM3XomZBr1x4rBx5jo+fFDMhaiqhZFfEAAVKBRZsZvpNTy3jecvh+NJfDd6WVYsrUgW3Ivtn58Y9oh8cIrMgjHH7hTSrg+ipI9cIxAaNwtuOyKYOZc6cWUSBPntHMvEOs590nGtP0KQ/Sl5xrcehLG6XEmtf2c4rbMsi/4Sz/RqwI3OkXoNtHBuAVfDpGU7WRat+7enNs6VTQRldc7EUQh7ojpHCYg8mk5b2asjLC6lBTiQ+JvqZ0EP4Cspl09K5sItUabNI40k1QvFNgrO9+7dTZryThLx8fduzoWYijFjmg5k/9WXd0WpSAFpelr7+ljBi5f0Tj6VY2wN2BYCCMy5hHaGV9Aj0ppyKg5chLMKVIwROCCuDiIPSxa0AWwjvfwpt8W1fXZ2XLRaVLDLTtfyHetfq3OcyuDdzbdEyBXdMYh1n+/DvespldRyqTNWUEwqEIVQ2Fdg3YpgAEVMK20QiDLIxWrhjrjkS05gTqw5D0qpo+442epQv7UEtgX1bfRXjBa6+ibLxrCRO7C85B202ucCCIIqyCZSnE6Gt/RlfU+kgej6QCWfQqVbApC7Gj4YPqBvW+SxgEqdhTYLZnsdi5m1wBM+68KyDtikkFTlFeOvKxKTMzoaq3yRhKiXIjGzWthxl3gufmOMfq1RxTQe1PL1B0h/rOTkup7kVPIoTWleVvkOz83vHqUjZw+p7qCVk6tU4M7Bnd01Vnfy36deX2z55in5Y762Jycup5Wvgz5XZdtO/xVp7IuxdZooZ9fgdeVS7av0o8VjwJ1iurg6BZl2IWx2t7bNi62pJWbU6rrb2vjnUU2XKuny3jfE9IIR29O1s7th6/WlIvgP1kSCotmanobjtjelPPJCj0Gf/kl4U8zAI3TqLBds87NsPKCD6dFqR6oocS1pERJ/b8vbOTyuxHH79iRmVz6ggrVoxAckJq19vVdWsgBDTz7fWKS+av/RrRMl7Lj9b/Oscu6J1qDOAEq/PP7Zb1S74DYIwjgjsJ03KEIKoKm2KkZhZ1LEGfYGPxVgOaQXgb78i4RPtjPt4gpmxNyvEjdfUmS4Pimoyu/7/5aYJw4xJxFKDkIuWCl75WtniWQ9sw2GW31e9YtsLsypQciAuoJRFiD4SIbDkpMeO/qO3Sjne8tPUQEuXgmNjREvS9KqON0Pu0wJXMOAlHsZ4gfctAlU8Q7N1E8XQ9sxs2zGKRe4+22e4bU5f/DaJ7EnlpJFnO+QlBEoNgeGVn5bNMkKseWIBtl3f+DMnd7ZxVz2usZGzzej6Vzs6z1cq9ivnAWZxgHQn/Fv6zXiFRYJ+m7omxKlwI4vk+4mkM/ZIO75kdXtDLGVvA8mCQ5uotyLtgyG2T0mipYc/mlMV4Py1itMvkuNF2Kw5OAf2rbOvMU6Ais9heXnFNG9ymuhevv7ygHyc3I37Scj+UGFsp0pf1pqf7jSO+gPxSK2OzZJYKmZJgWrr6SpdvRloKjgUJFGH5hBjmGk+NN4I+VyC33CPjsFs9QqQIYkCUsSAHvUblDxFRsTPR/fB0xSaxZ+EgB9enAAwpPym4K2w+pRR5V3bjYdGZjw1emHH9nv/jQZt4ARIwf5vj6g0pX1IsDI1BXkwvkj9oyUXx6+s8bH8ptIVwxS9J40VLPSahsSuqdP7qa2KbQX75IdkTGfVT/+VeHyc/ylojF5x9YCX9krKb2Tg2OdTUT/eUUb1pdN/a8yBAY7pJ9u/8s3XWgwozJzV+moeut6XVhda9dwt1C//KlPTwrYXBx8vGxMO5LbQCHdGmDgxCmqbNBJA/62hqwr08ljCzpHvsWV6SjBBpQ8xfdhpXX+L/8YN9b1T0jBeOZrKRDNZ7aBUIHUlbSHivwlbQAnZkg5OXJ6U1S6lofCk2rsonb7wWLC88cNOXF302HppR8ZosYmTQDWF02ZWaMiKeoCIL+U27QWR+9cEMTxKaCT7oBsF2tdo8Aq0uzRFAfVTykB45b+bSAAGp3IdARBrblaA7k62XzOWim3DW96zg1Jq0/gMTpsEakiusz5pvr4xkHxGLOjaFOkHcVv/LbZNQIB5v9mRCM0Oi34TYx0I3BaPKqyNIzDTj1qrjtDXc0houoPL3/H6IPpqQ6tYx9SAXRdFraUOxQnAAEghNDz8DLGdoQWYCnV/s37GLV72aobxIM/wmG7ThpvQAixL0yhYEJz8TJ85ijg1psKHugIMswQoxMfeSkJPjzjU41ktZ+ndQVuYzCHpcdgpJYKbfKBYsgIiSwwA6nYTDJMuuiBzGtqvJhs5Cx6VcXta1bYQr+VV+YVZ1UWf44hgzRp8ZP96LynnjwYowlXQaOSW2mG4XYCsMrtGBn4zvsQmr+IPIbDeLkiBYPbsSjynIkQaWT33KnKiJq1JHSxWkzPpjVsiDAprTH3ZxgUCu3eaC1lGuvsnhLVWKhXwruvnu1tZZWTPXX2vNNBOXfYobSBLTkijjESG53/G6ArZyEKVLqqQqLSHap0gDiqHbG741ijuBBIiK0YfDuSEezKR7DbuEhE0Pa5iR+buAtTwnKKVlrQujwltJ033UTGWilQ9mpJLc/PR5b/jfOAd6IrkQgNp4YDDNKBECZT31sGGmSLUzTorU62aGzlB7IR7Abn7UrbOqtGbFXASlr0tsoX+YxBYLrJl0MZqr2wFKPz22wXs/7bRv8yqhDNMGFh/fVMYJZb1+yETE6FLOPPPjJolPBERMzF56fSd6DUD7IwQX8LGKzH3tjASN8XFtD+MBDsAoer3GL36TcEbcDKOLFQdZWq2Q5/CuOKO2gu7N2JJCl+PMApMR1FQFSGJzPYdAP39/V3LqR3ZVi4Wm616Z4NnnVT3uejt22uT+sYR2fhmV9SVfdy/YR+tdPAe1rJl12ROPDViqCGJZnSmUhNN9ZcBs1zQL0tm38T6jlZdt/TvqsGpumjSHVcuRLULqYdtmmeM18uiN4JC/fjt73qwxp6YQ/4pkoeFpbOZmIcGOgyKtXgJSpTK4uXdgPWw7/Ihoyica/NZumvTKaopV629HPyHw2d88rkTy8kVJezGDDcpztdvZ88ExUw6RiR12mXGCpOOLjXrrsEyIQ+/WLI+UuLcK35cuh23QQn2+RP7uHBwTx8n3JrAsYsUCfB7AIza74X2wmGdwEX/v/bF3/yk6yYZtmf/7IcW9jMykN+yHgNFUEWujz/CgSfv4v4SDtxaeLFpMa9qQBp6cr5L5p9hUWkTcvjMsrzqd9lXMUBPJBF+mo+/dfJOnwRsaOvMsm6Umzu+t3gTVjhm+bLo97r5hydallEQoCR9yKYyxdAsPVO9QjPfj0kWta/2I8i1AM/O1SaWDH6xQ2CNugiuwPtClV3Ql5n+n/L7+Yf1349SgsTdk5cZ5Iad46eQWA0qiuIZFqsM1/97NwAAADARAAAOBrDVrDkgUYU5p+BeVHzUgMQyOfNRvx0WIkhBZQp80Ec39Ro92uD1ADaBMDOpos+Sa5/p31mN1OHb8v13dh22Jr5y9Hchn5TnYq0cBd9MeMJccTW2jIQMRcUXWE3y/60prZWbNFBi8PL1WqpXZwnWuBvXqYVCNJm2z2Av3B5hoCWePWu7673lVhHbYRBT8bG315Uq+G5IfNQbklpsefI+P6x66JRH5XtXBrBvPWVuFPukw0E+4HliU50NASj4zDsS7vpRGjXKRcxmnhQUIFlYXB4UhcLtiPe9W/rhPxif3xc1b/+lhnINDpvaqKWX2iaxT0tj+NQoDECH3T/RH5/T7GBq3VErqkVkQjKkXUte91A9lCqpxxxvarJT6+ZAGPApX94x8/VRSPNKf7mFbu5pG3cVhKTW/c7OZ0d6wspMVUnLgU2Kax9vQoycDkdNECsmo4o7MJHgD7aBTFHeax9ayPD8tqDlf46LkdWc5pBvQv6wLSv2PpqGxLgaUNNGADG15sv/h9m9a9Ip5HjNQefBVEJzevG6J9cSnCCCxO1LYCn4cZqD94Wp7cl4ku6Xj5A0RnB+lpqtu71Xxj6u2hvyrgEgwXPUccrjcoZX0ttHJgW/Z44+vLIc0JqF0hGytwgAkZ2XhO7lbCuHA+/sC2Ilvsk6/hvs3AeDFbqSjmiCdU7TvcFE/wmosUJJxzYjTKdgc5eZx6+ULFXDkn6rrx5vqm4N/ka3zJCeuRM2I09DZDhXu7NZyzc4824w3LmiaeTVIlMF0Kqo3OdFeM0egCi/soGKNH9+RBxJZVtjiM21l+RqLGfnsvCdkvyF1OQ4zRy5O3rNIJz11AwcLUrlbmqQVWSvA4JbCXV+rgfax4Zg236k6ITfoHn12Yx7lws7yeUMHPiAJfi3wqjPy3Yoz39Q8eK96oZahxgfC3/rcF5xcwBr/6Aewk7/C3BiakgD7Kj4v5rwUAC3jTJSl52Mx6uN1/zL2VxEq7I1+XcX6NvkEoAHaKkaEly9x5oHk2iHXz+avt26UYQDAU5TrVW6aKk63oGlKXeL1dLybHyavwy5CZ7GsXtYNM8CyEqHNTwpaRUW+6RuQ6g/dpNfGB64s+25/icvtWKG/ZawMoz4A9+8m98/R/eKIKsuicfcbdD69Wufy3KDCmgcQsmx+FBfbtYolqg2/M1G2VrMtro7CKLGuKUwvrIYa5cYHBv7namwLnGELlrd4kN0lzA6jXntwZxYQoGJ3aJE/JFGiS1kUfVZ7swVcDIj8j/7hcc7MqtjXmVvuyxWQQVUXnNNf4a698AULp/u5ndPHZfkSIfyh0ehutTR67HJlULsyAmrLC2AHM2Ms2hjrUj8ECmi3wfEBiS98u8Qo14tvBJqVdYRBO9YSnBLLCpvUkY54QwOjjmVx3+SVV9zio991ganPIakmfhYsqx4aNjiS3AikFkyVuP1jNgjZSFP1ROHZcIyM8eQJDLHoLogtFA80KStGLmvxhywd3+pF35hI5pB7DW/kpCnHIaKJ8gux0U2WMf9fwDVYrkoH4SzTEK2vY/3ees4QyS8wa4hHnUwQziVcxB0aFvg20OxHIPDP2JxCye0qXa05LemdOZam/LttgTf7xo3E6yjMHxVL5POt3Ccl871ZJDady15KwmdspJCUJ402/o7zb/e7BmMLLcFw2TUJ55RM+gM4TdJGEwRXZEj/nWPSXmaQCE+dLD6QAUNbvUMwWNZQLsBP30fhhQPr3iwOamhDM1/B3QiQrYXcrhy57NWPFSQiEIaNM13FiNT/P3u/pL79PzRyR7g0plbuNzAeIc/NxQhoZuqDv38Wh1eaaItZ4wphz5E8jHera9hg1cjCNLB5IlE0lmz4S4vHujlpQNaGlkYe0xc730ge0Kal6CopTy8FJytb/SIK0zjGMwnjFXmIY4wE3WOWaEVUhqcaPp3QV3ueG6El708907SYJqddA502gZPOshaaUYQnOUPNAgA2HqsRWCUzlvm1MT7MkQtanSodlw52pv821PcTwMa7x6cj/yFUGpE0XkXx5qOpuw3F1doY/fTDeL6mAu1BmQvceLL9UX0cSKa3txnH3LNYNvnvzDu+P+xjxJwRyeQKLBd1vmfih71kOx/J3iw//W6UohFzxjoeqvZarzmDZqqgTppf/wlHsoRcngEhpg2SVsWKpJbubDkjLP4Mua4igscFPWK02wjONMz7EqMZqsGWNZrZIIevSTSjUbNO6A2dWaZ8YtemB5a8d259NPCQygD/5EL/IW+SQrQsPnU5pYWyg0RApJpFXqH9aMckyd5N0TOjPU79vo6fnGGDZDH6EF2AnfpOC60+3l0CIMsWYgjPf7ZxomDq3dVGHg+lbH4V1fXLYRjrUJ5tvGZ8fkOOACndRrct4Jf4RbTxay1ZkFWB30OXt/W772SmzHSa3XJrmCVEW7ZP/di90j51ceRhFQ4Gw308ELELUgxRw5FsK3uU44PJsomH+Ucx0BdGNPOfVWvaa2tCCXCF48hryZkyZ7tUX0uSjqWE6jsiVH6sI3yKBDJ8AMkUxWeONlYx8Hbw6xVNinKAdynwr7TSy67OMFXfC8U8/jMuz/gzj/3z1bUhv3z921i1dmRdeIJKVxJH66Nyh+TMalNj8iIfpAIqgyGLxM6TrRexQD+G+uysB6e62GjAZ6bRFAnnIQS10qsZYqkTD3rQhYGtuDNlaYgDT5BbY350xne9OMnHoMD2lWUoRUPwiKybF2OtiM/CsfC5w+RuyyRWMICROOIjxW/FYOlGuAXxSOUWytMrgKmdW9CQARjlAbP2caXfgJmFXRPT6NbgIlyTlAXJGvX8KecgPp0vAuvGTnKd8nO7+iDBLtddSfOv+tYrC8fw3ewdzflm2ysx886Vo/5gfSdP0RadcFQ69Co+5F2R6RuJwEw7zoBMlN/jzGqVz9RrrxVHsu+fmvLOEOwtiC60K4gmywXddYLLzbJfo3XT2EzCJl4JdGcasu7BR/PUmvWjESsCh65NI8ru/LJQzophCmxXw0VkfqysZoGPWSx6pQXnNKsm5PqLD4/M+/tzoqiKX7KPUdLU1zgWUOa6VjUz2yY/BN8v5eb6Xl8jjkgXRDCnlOjMRJ07N2t44lp34Lir1CNUpSqA5XIYoc7HS5poHNlilFvFhVTBcE1sLlxIKah0bc3joKuFAKoy//zVZDry59ECzyW5+fyj6AgXwYFgEhi0mNJZwiYy37gSI44t2YTQhi3+iQu8WKN13qiV6pmRBtPwGmNHhieKgEPR9oJiFZQbbJHMrYgi22j5nh4VXLldsLfSg1nfv62ZINStbXkF7d6WKhZe96YUPZeJ6Bb3AeqPy0cNAqae/EwZG8mst04l79D12hIyzTFpZ96MSjO8JgiWF6iK0UyPAki2FxbnGEaJ+IGc9QURggMekuGB27m/AuRbg/ZpcJKDDEjkRInkg1xSSjY/jqyqjpbD7d6obD+t8KKOXChTksvIpsOid/UVMo8Va7juwvTb06qN3MDRcGzuXh84Y3DSmD05fGA5iNwv92Q2u430Cdz1c6isutQgn66UgNdOIwyZr3Y1t7p1VutK4fhZCt+IswezfEXD4h3qWrtL4Vp4ILKngJK4Gdl1FeB41G6hxrILDvhral1sck3HXMa//JHRAft0gtufaxvzlyAaeg9YUh7+FXv2LzWxdP5xn0ju2iwjKwnGf3inVbcNPyCfvI3wLzuAgx3zsCpuPEn1OQES5aPKvxmZ0w78PkVKHlK8DstbYjcHJJK4oR/u4gcRVNJdpFqKDfhIRAEEXWx7FiFaScJrbHxL8BRBftAMF1IvWa48Emf+3l3RTs+gntt9LzrE3nlGnuFgilMBkjyJ26LbqGlEbCinCMKDRXYQO55KUnorh+7iIQ9dAGqoiQOnJlyaJGJWAC1Zqck9gfmInN/KuhFL06lDnDxs6s7tzJ6YHP3dx8TyCL/cgC+tBmQ6CkQtoGSONfLkx+vgVJANtdYJo4ovsrZFTfCdMzqsltdWhmiE9XqtlnVGhVPk2eg2m4X2zE0RdIc0ozm+1o0fPwG2a2ZGVYeYj1nVIe19m2PwhHR5gkNkapLawXviDfMgfmQLBSoWaaN1WkpqY0JXnrWDLUNcGrOZ0S4TQjKUw3g4nqzAqcWXIRV05/2C9cJ4lu5fJK43V2Jfg8VHKCCP2Ol+k+IeKymkecEPozd5avZPxVQqG5S1XXvoT9PhaSpoozQCnpjuUxxtVhfGF2OG/0x1ei3LhE4B1JFd+TQOa1ZJTxB3qqfdm443NlXqkn6SU6JNkuQLyQH/5iJighH1ZYpdk+ZUj2/y1eeaNlXeibYWgBuHVnReKfjCoHSdE44hp3PTuSm9XFBlQqmaaH/3t/M/XY53uGS9b1xNqk7AYAEO70fw+weOR/wesF5TTmjm7thdhFyn2V2CK1sYapXIRjz72ceIMf2ZMvB49kw5YbRuOnHhFc0fSMRQ8OR5lDfZiJE+vX7qr1CJ+xzw+sX0rfkw1rBm1t9yTkH8+mgoi/H9BtEIMzqKp2dkTwCZuICCmy+s8AhYZMgU3/18wGMCEMhoVIhvIl4nN8cyOPBmaZ6D5sD3SgfPb5V6chpLQfp2Ftjqe4a9lK442fYFnZF7BdZAxx2BQ5SwtKmp33zHC/3rDKf0L3y/8zk+V6lTGHGsxiy1ychCXSBPsfnswX2mgAP/OGhdP5mQzEFl1UUJx90a6FfWM+69RLcIbs/LUiowX7n16+GoE17fUeF5wdaX7qT3AgNXZkF1RKhQLvzj41w2iZ5WrEb/RMqxenhRcpY+MYYARNahKG/JXhgJ0G+lkrZLcM/L7l4U7xtd/VTKUtA+fkDWr7RYhDqRz+rSdW4bfjYFcYrPhEI7NEgX6ZwiWxzFdOcWb/G1p4qc6R2xVP9FBV8r1Qt6GiIyULSF+P6FgW49vBg/RLXrLI6ELqzQmZuf9eQcZmynSwXRxkIDP4cCBVWWqK34UDiGMCD3Yv3jjLBe3mebX3L2COWS7LriYQ8sfbf64GmkmGXVmpK4DXdoVZkde6T0U3xxmin0SlMNY//4rtCnH0JFjLibag1TuFZkMkIOSzktJO4+e1gfYOj5TJWS9RFtARt+hTgGQ9nSkAjA0vAr9gRxM4PGE8jUa2+QPw+LFKdLRDved4BTII81Q92SsruC2MGMgrN48NAnZH7sz58Tk7nKRitOakqVyaDO5gNv4muGpvMg/HqfM2+jFp2gkgJNTjdNfSKRZB6k0wLhJkPb45WrGMGuvzFFEsBsFxL3rWvdDOpwVXVmk3eFeh79fyvPXl00hG+eSrE/YciETcpRxSvUkdEplEgwmJYlCMmrhT0poqnYGF1QDGxnqrRMwfmqMCT/2eILpQFWkeOozRvmfb01eN/CuFRdv2YXn94K50Z+WRFMWYiKVpkVnuvr3P+Dw7p5Oi+RkOcGfR0ExjOPj72XdxAvGha60aWFggHrgl86RcjdLfEMIUrftbaFG9IGwWTJm+IzDKBTBaXD6b4i4sq+oUB7nlQjdGS4tZydZwaCrTh+NRDjRRjzY61d74+70NQaX2bOapNUsJANB5r4gx05JjjPMg3bP6DwCO9O6oEGISV3CXhbYlWv7uAPQNjcNWzGk4QifgJhBdITlblQP2a+/mmxAO9DuMi2+B1k32KitKJrFfDrnbousGtBNEg5KIqLWG3/MxCkXvj98Xp/MK9V7mwHjtm8FKG+2s0yZtbgJb46sR3LSTbuOMRUA3xUdgGi6AMAowNUzdD2MNY22fBgrDjnBEsIm/FtYEYp6FjhQnV4Q/wcBkRFW0RqgoyXUpA97Bmop3KA1opsQvJcflRQWomu4LkbF5d42WPCpW/sfnnz3g5hm54uDAtJDgAAAAwEQAAY4Tp3X8BLqhohaM7P6Gd1Nkb+bHLaQiTOjGKEh/ugp/j5EYEztFA9nkKprgC1TaGFbYVdeDvaL/ZYyccWmicZ0STL6eZmxO1F0N4RbTrFxDhstKSYMbdbTW/qqj+XknuGJK06R5MctUDCwPCZy+0l7wuPetzmQ6W44glbyEUc6RoDRTS3M50klpWVz9Ocs67PjcCNXdlcaLhpT2vFvR6ySNvn3ZvOdMJ5t/cj/YVhYiDNt8CbEmBSlof7CuEz8HgNIDEQgLqfKjbvlae0j4ZpEe57/EPI+NemG+qh9+7q27uFQlx+V2nnBlKHdkoizmlASxjvfKMv7Ek1bWx5Okj8ycj/nnQ5xq6qMdRDsJjCzXPiUbZpEGr4gxquOxuRNFeDitHXsmAt+tpeV1RfLd2uDcEdouDzvaccE8cmUqGvSPvG/maTS9gjNtHQuULU52TcN/Y7GutlhjnOtF+bYNXQwfHvnzI8ZRKEX5T8lA9xwH34XyfI9l6fJKIDD1aEKN+n5fnaJc0hnpl/f+Np9NrIJkIfm1+zF+iFg8a4sKXOiR0vJRNcj9qmW3dp9PsEu9eA3OZ/tftyfBYOjlbOmoCCfaF+V8aGKwfxg3Ftimki2sYlyxjdLBsqOjp48VRrmtgqtc3X4nH1O8BPZ/rJ0PZDIhVcN1It2W9Rryqz2dZSyQesGZVHdXziGY6bRIFDlmfkeTPKzhJlQUAvNW+TbzhvsdTLU++dQ51d8xAnaQqN9xevpjJ3CVKf505V99T92FFiUbKwmnMOoL3IddMz5bzt5t+lKVtgwFuXsyld8qTcFTC59V+rW0Vj5xE6dcY6lWKs1mzWw82EQQB3Un1k6jOTO0XAlFHplxKVFGv5VGVkkv6THd7ogHyNg5NSsTvR0wSHNeIF6OI7hQtccbW0zHyHVUzU50vFPobes/6PPhG0ObXPsCXVjU9P4RRnT0LMZJwj1rL4PgPCyjGxWNDDuAfMxtZpbgIbE+Fz6vXBFFQbwyUOybrFLEwmwDYIjbbGOdoNm0yTfGEEWuet5eK2jHO/QLt6eXPQhpiGXidk4ljcd92/JyUdLFlI4GC6pBJPc5ZJ1Z/THgdQe4so8VVR4Mu5GXjcvGWkM9DpinuHP7B+eRv8mB90e2aILYdu9Kf6UF6ZbCggh8cWxwlsnixSUrdkw6AcbgPKHbgJvDYuuqstnREMlnfdvmfmiJGA0aWTaIr8V/EcJS2F6vof4zWzk6eYI+dmoTic5cfA9TJxTEhVhXz52mEyIJmxSx2/9Un00TPIUXGzhWqaCAdCFgwxXC38K20EVDyJN/omjT47YOObo3D+IBIzaDfSo8ySNNcdn//dQTXzqF1GmOMyxMPzYg9tIdp8ZlXMNlyd0aWnN7uCUpojqhqwBHX7RLZhgXNAwFQPkgwjA5OkUmLRA+IOqNs2vfHHYOPrDo027jgzIWwWP50Jzk0A/IRNnDysQJaf1jp1p11SKdxXa9EPkO9hG7JjCz3h8fh0t3TmLeliGKrXZWuqKD4Rp6cASpwTaHTa2qXdLJl6Fu8u8WYEb1ZvThr8tOKfzPu1qMgBkEXILsDG2l465ihA9iuq7i7AiwJ/4btvZHcJKKSpBvUFN8mybE5dW1VBFNAzkJujpoeAkHbFyib0tlWkEpCjrJEVUZfxymlsdhWt5syQclYJ9QylAIqeZbCTwysDbLSPTJ0MZgbHMro8U4UuT57oK86loT4B0FxRelI7yBzv5+tYQ5NR/q1S888agXgD9Sb4+50LELgCuLatM/8Kq7dCO+hBpKwgkAEiVURMJGWWSHf1FtcNPtGZNICcgM2KJna/1sIyi7knEXbSeIvp9LTs7p3pyTDaV3/618ml9LNol48rVp5CkACYAjYnGHzVL7zyZRs7JBmkw7gjxRaQUVE90tHWA6CgIZSfu1HTJxWCa4ocggvpWVDgOZfhMwTelM0gC2t9s30Ky41180uffc0CfkvX8cwGwaKsyTTMNAl7piQyz5dub3aA3mLc0R3z7zK7B5MXWye7nhFP14UES1g0Robozu6t/Fr9r6X2gzphU6vzjcDyqMwUfxuWRGsPLPDoDbPte5s4Mu4dMcOcyqt3cEZ70sV+YnjDjFD3bBY/lqpKKruDCsee9G4zl+Plf8PNG5lvPZ/U8vwLn2D+E2DRrLatzg33PCHLpdFKpQkGlXePZIutdEa7NLtv/SjQy91M6gDCZTxWdE88FH0QaC71T/3E8sXe9TTl3uiwAmtcVlMx12K8JoHSJMTg477uzWNvYswqHiIcjpEoh1imgxjw/CGtdu1FTu9t+Ix5QgywsWZVyN2xZ320vuwOBMTTDAJ65nbLBxgaB24cx/uR8Jstbz5BuHPKxR4quJJ8c4GT7B1+3J16W9t9/C7MvqnR4CW2jLfzjNzao59kCnhbWySIu+R4KZMFsLe3m7r3ScNNfr7Acr89WHGyFCM/ZMYswL9lwOrIejWStU5Xj6co1qAdpRj3eYEUx0ZJWthPyG/h6e+2DbKZ4UChCqOKAHPUmY5w96/4GkmmVmPtI1XRa67l7tXK/KjtxnOK6Lot0DEfclhBg40NH8b9TiLdIZab4eYBg0gWOtJDDjgEHy8LQoy97DCdEwfGk+p3EBXhBRVwowRWmJgMmVJhwV0rkAgRZpUgfXj5zTYOuhJlkuLNPAo4QsjXnXPyn2K0SEx8vVYfyJfCBSaub1A1swJ24JixrjgRZRlyse7HhllwSA0tODuxX0IyBCvUnJ3wIzoO/0/Y7UCxQAu5xcEoEnYu1itPWqMUyZZcJCDQEVO14k+dUvEvKAqnyQuHxkH1QHGamViP/2bP/FQyyv5hgdO28UJsE7PKoWS5kEKU7Fyda5U4thwi+u5/Q4IS6eqWmIdXfZGXqv8s/gUZgen5ViL547ZUB46wKNmAlio8KK5e6YMFK1TgRKNWzFhtNPgtV9W2lqfWkbI3SS1CJHJ6QggyeGOrMtwGlgPufkjFQRqlpKaRHn+utY7lHWL+5PNqlx1stEsSV4hU6KS1j7PfnK5qNFKzj50Ay3l6+y+uosMUhPkU2rcz7U6kBIq7WZ8FouKpk6eXidqgIJYXi61A3y2d++FPbHIZYkmsar/T7y84p0soIwnu8Bi60TWCa1xwTYHrL/+1rdln3QErUtgrJ+YP7gaYtfeGaHygwxazCHFEetry9tXRVeK/kXjM+PCQVOHcXQbZ4aJ9c/yvzHTqYAqg1KUejqqz7UZMnHSHlx87PRgF03Z6sAUEVQlgFzQvk82vTWL0S2/4ei0z+ocU2/jrjglqzqtfzUh47FZpvUbP7L7lIXNtiSY+Fxflt04MUWr/fFu6vNcowVbT6Z8Xwsnh0kZQw/HhoCqnLt6dkWrhwJ3SbcUMoQPJtkWE1hfJEiPsddPm/orYeGiHUoV3SCm4JwkwlVXDEY3B8L1EB/Af3R+jO4yhb4EoEFuOUKKY+1DrKBoXj1mSEo/gw2bjtcLYhU3WivAstaLk05U58mCKFpfZDirJm8H4pgwrDM2s6t59pMA5K65akjRVNnMnme8gywSpnkua96/aaiDrnCWg26WXHY/IDHJvRt94JvI7f6yDneqT8arPXqu38HnKad6KtI+64ZwkmNsi7UAn3YD1ZMTmTu9hdq6R+50qb6oQAJ5vR6QBFNazfV6Vrzu4pIurOP2DMS0kwpb625hj2hkmF6egPooya4LOxtZH28gzvBHR/aDil0j94clivbqGpgNYR+DSWJQMNhhSlbV4KoiZv1fXpAPAtyrJi8y5R30J/fgxk1v6rqhlMxfift68LczqUQl08TKH8bNqgIM/F9tYkklGBZuLfZkdmfUnZWSPE4TfKxeSXSOZXG38Eq0FsCeuMR89qqM41o7dlBtX+KKpqtZIZsR/Y1kox+99pB/gc0fzIG4g7yL7u0Lsp9tXN98yg3TBNrMLgoZ6RQMfbELfDzvaZt29iHAh0XGWCRL0SecaeUNo1HBMMhRZbrcjc5oS2QZdktCDuAnMXG/w5CVEf4lLhPScco4c0B0gAmXfDzUfCFRG3ZRBGdSifFNiDNdCHVRixlU0YMCgdB4/MNPnazhZP214ZAGrf44j4/8Tvue/L+Iuigy2jXJCjv6VSxlQj6s/svTupddXzp1X67/C7OfZfB6zg6OxnRoD/oPUfcxma6XVHDTsKwwat8LjZvAr0WCWJg8fRPxE8oJdBt3MrnlC2G46pWeK9V4ZsEdMaQQuHcOmDvlNsy9jdvkKnxXpUO9S37KiKjArR/xGVT6/glhJHDl8f1uvy+P/XIxHTsW6F3huaM8/E/VmbfLxB5R/gNsjuY6hcnbbV6eaI4v6bXSMjxVVN4LGv441KohjLCT9w99acnHjSC5wo6X7RACg3Pxxt+DGrfyXwe4aSQCTARgxWPpZQix+jPHX8uIU+qzeynpvkIRq/TKZ8DgNz3P1KBeqf9s6UUmrpn+We3jlPmbOAoaFvC0zaDEAkTnrDXErBvhN2yzELRCNGhxKsQ4NkelZdSCuCnv0zczkOIlWzesnYJ4+9U1hEAmMg3YuauccEvKlLbjzLSYpjQl+DxY5lryFtOCUXnr4xTuEfktm4q+P5OuwvTS3pKpVbs91uloBsPidEDKF5FVcDQt5fZHx7WKrQMJ0Dua5YuAxptCidiFHxbcZQW7LNqOM4F1GUonDTt68DHdQ6UQ1ZofbyIcCX/LVL0WbYD8zxy03U4FFPapnPgwFTYwTrTfTsEHiQV3cIiIsdn3QtCVA9kIJ2rQiVKo7hpqnuajWyi8I96R7b4+dfIBauRejUVJNx0q6S7cIC9ByQBSGPvDcW1tIUJyuSpyelbLtnVnbS4+oREiMNcpctE23C3Sl4YsLCbXUQgTYwmBN2gG+f7NsloZewiYW8ybApz02sdBbrvDEmh5a6yv/pB/T4z7KjNy/eGfD4VH/TjWtjI5k7whl8xHqT+qb/1g7PI+AIt303hSyXujK50RRqMU7pQ80EsnXjK3CAH85LJ+w+anmV0MCJjJHbU4IX/KBBzCQ0BGJParp77xIg0zJAONwv6nqV9Bn00sifYhKN6r5sLp2EwU9IcZ7wQVAgS0Eb6eHKyehrbI3j8GqjqQ5gCka1JCqPaO51rqH/5cIOpZy25w44RKaPmsejC6KDBo+DQe0RVP8SkMBRDBiWfCsT1X3pqOaVZHaq+GgI9jw+nfl1jxQozozzI8xgT0chDzt7Hd44mAz6cHgspAoUmcs5ZH+z2ipQYxkxOLqHJ5VhHBK6gHSFekALvEMTlkK3NWTISb0+iYGR6chrl0T+Yz5Mr0BY6BG3AiK5PCO5/zzCpU0J7uTE3Q3gG3cFBVp3s2U6+ifnRY9eUtEJwi1gkSbuOgsVMpKQJ5Jtta0Wcls4hG0u9RtPKvEuTqjgdJYa6uRuxnkwMlz/jQAF34qlKDuZWu2fnmQFfAQojhTDl9V0VSjS+CzkA0UEI6fjsjfXLulqE4R8DcolaqcnwblpaJDJfnH/H3j6vDkjDJETGdxF1nPd9tftnsCeMpABEGl+N8ERapOLiDhG7QOgkDk6W/Z7r5mNwGgqGjJv/iWDIqrMSZxpB0RwUWunl3aBdNDqTkBv1rPEMqi3gcoOuKOsH74jkiCpixq178O0TwMs9sTjX54D/IQRKVBC8F71Q4o8rdju4gt8oHGRUF8D0xStPvR/XXtVRDwVLJogBQoZNY6pscJkX6vQkjU2Ashjcmyqbag/FDDnuG6nrtKcWvSyMYOvscXSSZfDPwHHj05xA3k3RSQhpHhTGM6gOS8z4Om19ENNzn4iUdJehPBcyN6xoXL/PTnLHCccSJ5Ue6Imp7iuBeL9nZzdAvSJmmwEHZ7pv6HiM77rv8nR9JKoIAAAAA');
