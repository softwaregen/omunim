<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAADIFAAAcpTZff3FJGNqfHy92bu7fqX0fUU5/s1t9iMafe9lCQH237evAXTYFgoVwQ3q07XD9NkAyGrOj2D+gIr1PuO9Y+WlZgN4pY9r9FZSTRqJbxcfveI/1ry8uDSXmjwA4Rwc2qYSIVnaO2Bb2gWCmmRNtWVeM277H6Cmt7g8uelKxZ7Vgf3w0dPjm+Bds1nFCeCes4lMUv794os3onB0pntvWCUQvwL73R8K8pRcWmeyRh6rAGbQ816sxNgHySKgMIL6J9G2MdAtAe7rkqjOzJngc1sHj0t4s0YMQX5t/r//aF3vAYRVX64lUB1SKRF5LO6dPeMNchNPd0EUT8SlugyusOQImk8Uql+JQTOnzuRve3MVAWQYBUsgHP1r9TpL9IA2ozBWEdYkHleKTxocgxGdljsSkePV+4T40BUI8xNbQ51eOer6ZaJDj9AqdGOyLqlZXsbpbV/cpxsLCfRuJwSkAMqVQ1ThqDce/EFogfRRGKrKEfpombewHghnICm+sDj9f90PW3NSyyVKQo/Ek6TfkYYLI2OZXIc0DVx8YYNzHBqLDkmBVS7M18uZ2VIVGaAUbnuwXl63+szX93irBIdHflC/YYj5a/Yxs9zEkrhXJ6dF+nwrIbIjbF/D1X76UF7HwWcUrnGIMOE5ixd1eg476fcBLgnPedcr6d0L/uuu8sgs3LWdMG023BzwBwm/Nv8mtVQqPobvNnQmIefh3v9i4N9Omlcxv/qLUtqSXXzaR1z96ucpKHccUb+xh4slYRTVg9KtyWliVtqmCu1AEhCM1Zge6BqyUPqFhrQHwlV/dAE7GW/k5PwM529gn9K2XovQgJ6AGX2jQaSs0hcbCDwqmAV9SvWYXhfBf507yhPaAKy9e/3hj6TiMTshqnB/UYkSjMv4Ac+ExsymzV+4S8ILjv6+9wrDxAXvkoWEtLMJEWfaanME3NTkLNrZkMW+zTBJW/sv15YHirwaVMJSCIL+nRl4FUO4bJAF5uOt70VHAKRA24W4hmyUQgOLzAXEcRL3fYLA4oCL5iCBG30aAJLQaixOu466/Tislo4G0TTBKqB/secFf16a5cUO35qQyisZBYF30p+kjkASuVBCi8fvLbFPcKUUVUpgTNtKarj7FTE49A4hAdywEb52o3Ltud34XvaJY532L926In7B6+QFP1v+0yuwutM8A08WyjwY4RLvB66YWgWx4mnFNaLL1x4Gmg3yIkEnRbFqrNKI7pr6SbWaBehRPNZRZ0k+VGuXGBqZATBW6/Mo2wWY7+6jsBkhbbPjTiGHho1iYNh6sO0CYCGt18z1oOx7kHEVqTqA+MdhLZ9aS3vuV7cDVkzxM2D+sUh3EoGMl8iHnl5UM1zLYiRK+d7/urZvmBVs6usOIQYewrzafUiFA4Hq5KNRORSTa42quX1RAhyzxsVBLxYMHVKpRxxCbcLJaP8mJxPIV9ggGs8KcNHGd562UEBpw7JcacRmMG80IPnArAGeEFDMdyrMec4uu+ufLLNBsYsgNTbmTgfb8visYkzQYELdfZ5wW1HFxEaZSnJOqztB+GddArK2WCZsmoAB4Y+Tdk/d+oyeOhJz8vGjGT7w3up4oz/fQBHamu6QeTnKeRTZxJa0vxaSN9bOQ3HfDQ4V5d1hX9ZcHfi6vfoDzsF13fUSi3rKz6wrgykdCK5YW9KrOg5kRVr6kwjwNXO2lxGd+OSNLhDZYWMrgkFk+aTDQdDrlQo6cvXDJB9kCxovCSSjcArMtvfkHyv73GPaNluemLuk+DfK6AJn0Dk6ZMeFLYM3ggDEjtSFF/8xUKGrx5uMZDgHt2rdetyrDa2IWNC1K+5aLaRO8HS08MWIpvQ7/cmub8JK7Hhna1495CG3tcPI+qiP5idTHTrb0ZFlQX0Occ+uZpEaAxhMv4aWcnM1Re8D1GSyT0EYszifwB8r1wtnt+J1EnvmaaJer7sQVwXTjtPm4iEFB+nNFep05uqoGU3r6Cv6LJ7BBVrIEdmieaMgX8EsA9iIGKtQLfhokDxYUlblzUXkKx6g3dvJRWezH5DxADceBvBaAuBbry1gfPT0poxE2VY2VqKUEf45MAFn4U71Ru8hWlTFez6jXD2thKbfs8KdUbY6sHQj/8wcI/VCvdyNUvSMx7DrNO1jIkKYQzo+kI3U5WsT4erYJ3g31sljB+2qJdt7M00FbeAurryrvwkCc3FjDmdMPC5k8DCDC/YXN66qedFGQneVJxJm1BDFp2PV8T5z48tB0orwLiNrLceZFXBRl2Aqs0BPEuK4chlnS13CaLUjibPdSzn/NeJDl/ju6ECDjk6rnVHazaNC02Tl/wLydimJR8UtSgA7V+iLNrNlVajKMxVn1xRpqSP2T4uZa6WMo9gryxv7Mr2TPLBUgMSSh36KwzM8ipKb1pd85DDu4xI8oZeQGvKqbXGZMw5sywPlH4UGwl6J9D9vDG014boHP0IaQ62+Yc6iyG9xIBAnMN8pcZN/NMT4oCiOlDFQzslzhQosrMqvcR4s7vGFtiVvNg4JH5idFYxzygqxTwtHcnmQX0VycwJ++bZv+BlNQNoM36NB/Lai2ubKrbbiXO3kFNP7vyMma3EfQRlCAINI68mv0x3EBGxrdZv3uAoj87J6HS/HOL6jz717RF2bFBncL3I/WTis/qYRyQza6aH70dI/45JsajuI4W+WteLxmoXxonPHEiTKrpGD056JEhVa1F6L9H9V3TLuNdoOhSD4MU+eEEilZT3CVTG99FXGPmAaCZNKdID3+witq0yTZvXLX1MZa57f39AnSQM3cTGCDKDSNaWLAinmAOLbYcIW04aYexsZgvQudL/xNU3oCyJ45VfGSAwZ7MR8x66gMpzn0Ag3tB6u/Dx1vmvVoLadsYU2lsvQU+1YKVkbJC+Smv8fx549xnBmTMHLdtQ+eU3wUnJ32wVEvjUS3OZ7luShQz/RRzvtq3D+LqF0N3ibgpYLHbPNMao8RoizpIyHLb2rhdl7ZVkkhYgdNKETVLiDSTnE28rw67WR4vizt/ky/TA/acxc8RJx90+jFSmQX3ERGXvOwsJIuR6tmUWtvbT5Vqd06Mo68GN/FOxh9tnB0w+yiiV3pQ9+61s31PvbmmXuJbT3pbRsoiF3W3NCuVuTpxgpWiNwnNsd+6aOC6iFtdjwBzSyNQWxNVHJvxKVqv3u+r4cpVaHh+k8kO6Kjg0LfFgKTMPSoEk9XdSf0eUotriIk4hhvMqtsMIaGYjAgj2cLPoZtQf03H0PB8fyYCddkPHv0WM4YcqsevrNQDKQ9rpLUveIEl0xBWllwR3A117L5RyghEfoD2WTV+N+JaCGYUsfWCQLwCJFgZe49AgAK6djEjwyILsG6h38MEt1yyYzvi9kJFo9Sy1StuMWI0A/CW4XV/+migqT1qof/z73ErLYl0blombJqeb5KtwTjRcX/6eNGvgGWIVp8clMtpo7qprpyK5E8mGQddZPKnYO6JpXzIs+ZTKobM+razUy9nhF0OQTq3r6aHby3FXhpTL0622oGJdAEJJhylVKXS0Sf3RbuO13AC5W5ZSIW0szo/ha9LaCX4QaFmnhpW9gk0bvNBa8Pk775wxyGAl/gFmIl1N2TKBuAwZ5ctIQQsM9iYnY2AeI+YepTAA9gTflukpJ5M3F3gOyNe8WSExcFMeGeEc+JP+Lnzzf0hZmLNbQ/aBYVYTZ670uQIH7tuNguHOGH9UJ0WYdRtwhgPn4M0KxU12k6ln5T6Q1L2t5eMstlrLlQR5nPWcEStJkeGiiJZA6+XVpR7ak/x0hd4egFFGj2RiOZIQDDbJwsPRx17RZfFMhAmblTZJnTo6FQ2+RXMRzJvJyW3xZ0loSF0Qxncn/5qzVLl15lFooXaHcPJ1zv7sLUMHcj+fsOzUcnIkLlI5T+5wLGSBXofVoJBICaIidlFRxvGm2K+i56fNvIuYutM9ZRGVI4CVuQD1sqqxTiE3jCGhQjN/u6ivISW9L6u2gcVWrK2f8bPjiXOOB5vpqLTGEzGEIyEOB7cLkxd3DMmZJhprsGWh2wR58GBQ9+K1SVmtHvPv9bCroMtybJRcWlIIe9Y19cr3sRd1MXwLudAnmN//fdc7l/xcdhxRSUiUURsspb/IkcD9/xeY8uDwK8GFQIASVVRf1mr3cNVwhFypCB9VaHUYdhFKsfkqILaxBHS6bxqOELtdqxQxUtA64TpNsfVEGcaPy+prMKucEzaSQ054zfezfePvacV6G1av0TIXdLOmzGt9jbYMNQFCSOA4IV3y1uciV3FG/kiLKiPt3tXx3B9oKODukzun1uxFD4qRzhWqOkS/N4OSM46jxCyZ32L5ssILoATMZIL/wVhpatsJH5SU/61cxujGvxV059KT2QUoEEbaIuEgmlbjaFdeC/x9M21zsdI0UTIm2m+StMiMyoBPMBjEE7vXkYIMd39ioHx8/x5FW0POfvx7VG36P8RX4AYKNCIVQiZ52DRIT6FtsXX04bFurU7tJ63pH5+VPT4HjrwktaIzOnUj5wwipMZS/k/OsYdSUpwpfL7D94qQB/fROfJC6eCvzDwzkMOXQFFwj5rimFuSVtp3hthNAyZ5cVxUTpGgTTcaFkaxt9OJV6YjrGMDGVKghdsK+jUAprwvTfmP6Vje1rH7ORpfW27f1V57dlpVMeV0OZru82vJulMO7bIUlh9lI+xGjWY3tgy2IfKLrlKqfrb3fceXe6CraHyQ5kR3oFNsXOC7gOPeO3bFbMmA5wY2T89PNGnV1FlW2AbXNMYMsU0kYDEz9tZJ4+gRDpJW3Af/D5zdR0SEllo041MINzwXri+U4nNh92gd+NstFMyQsupWhyt6m9xYlO7CEJ1O73oDJBl4XnNlPgElnsM8NywjUXJqKAC92BNm4XE4zJat3tYI4CB/HiNiqP2enUdI0MmrqM5Nyf6UitYQ8IC5x+jzZjA2zBdLNdP6YwGJJ1q7s5a0YOiyiGuB+zhrq5yX4P6Jtlc6L9nSQf64Xoivkeizxkr4waSmOEzPerOOjWIC0e73bAIbDm35IfUlNok3rvRHTMBLodMMaUNWFV2bNk9VcjwZVPW1poInTItncZjHD4xz8MHNX5rmzbNzvNp9aVaaSHv9Uj/pjBtb8CpvFS2ogHtoxNSFWKJmgVyW/TJ/N5S7XohOrJk6TPoomfTS4HAXvP9v/faI7UzHp4K3yXEsh1tYlToEwDPtsNcema8+GdBqFsE3uFw7Wg9i6FLg4AwmdZ/2vTmbr/0YKVZwMKR3o+ZthrKUd9AXMnLaGhmVmj5BbM1i0X7YkAmDf2pAPB0dMrY/umvrvTd+F9kQD3/HHQOR4YwtS4cVhfhWQtBebbqZycFW15e2XLccZwcw3B1Xd36RQQw11XZkilhMsSW+ENvuaIr0mtUd1dNP3jRDneB1UVid9FOff687vCbTnC4yZC1i4x347O//P33URbyKVb+zyJQ6VEsz6XILBjq0ObWgcbWcSOpeu65SC827OqFSiT+rPo4MumSyhRm0wZP4SSuySiRISzWoH57lTbXadK+2YbCOCb+Q/jKGFH689HawItSanTXngovarsjZiEHM2iKKNKDKwNGW29WDYUEGJFh08EugZ/49cyXaEiEZUTQZVD2y1CvVYqs3DG5mxIz4rrqT8hq6w93PpPUsNaD515NDiQhbwHlgY99Rpd5jnVeqoW8HndEgSIqddqyrbU+1WNjZIxtvGxrYNsCJ31oSEGo8sdJP9lL8RGMzjqKF8mVOWTPidLuyCHE+O/jxsP+7S9lUwLwA+0Ipk1HSMhxFvplw73a9x4PhmShT24iUR45yNu/NE66JCCaV/aBIX8IMqM/Fq2mhBRsAEZRXJOnZceoJcII3m63BoqCWL2l2iBz+T0cBvxWZIKH7a7PhNJrwqsiyxlHNZQEr9Vn7OP91+pv2sCeqf3fNnoitS5Ci+pnCucqgrVUW7Wy0Mds4pwOkkLWHCZTV3a42j9GNlYnigMxK2NO+zmbv1Jvf7MuH+kp2U4FpMx6yYN13+NEM6PHC36H9xBZLv2EUvmQ7XAs6Hp9wFrpG4QDgDDmvutrVcCehTLa+YdI/P823F6bRSs0vk4THZ4qT+WC2LH4xJ/zgT4RD194OB+dAA3sADuEbBkrffotHsYCKL/cCD7qZqBHbktBOJDQyCu1ezxlMKBLJcwzTsgOe9WYisPO8zmX/lFfwjcY2zgsfzwrQHA+CjwO4m5YgNz4pfLag5IpF1ht/ov+2mVT3rkD3+E53YpIXtRDVDOd1Hy3Uf59SOI4KucffeySRBctAXe8eqm0ZXAYsJxByBlSmgIPaeW82KroLUxnbujpQFNey0s3+RdYvXJUZeJR/J9K678Py7KOseMfebxFmf9fGhC43b7J0d+VlRGD2UT5cYeAg7nrhTF7wxeStNig69ZPym9swoS/FewUeYs9oHIDu333WPpte3pvaQx0ZUUvPpnzh97sqUeUn/nPSl4Mfe3PfpWC3zR5Y6XptBLByaVHXKkK6sLqRZCaUsmtE6K/D3Od51T1SYm/P8tKkJ9hX/Q8kLIfjEU+9+Y3boItFaRMwB0DK1Hy7Ir5PmGk/MD+X34GGLYtlyLXrxc+dBh2fffV7XZvPeCnd4yQl7ZpBXC7M/eE4BHC7XeyAQQlx1KjLdnn0OORd/8d4SMCsf1uB0loq3TgibLxod2nTxCsY7Mx1JRGOGnJEUmzryZ8BpE4JgOORWD/t/fEdpTCb/Ck8AanD9fIytGc+pNcchr+z2cd12nd84V9/xCG4zFpEDbc0vcSgU/sVJj0xvhH99MXc3Q/2vYQETu0ovMc+Ixi/YBFIiNOpDRel9vBGfP63fLOPp6BVtH3d2Z5HerJOl4A2xZBrwX9HWRDNSZNv3M0BUebRpTlGJLUMrzDBuKjNetP/1Qr5rX1sw4FfvtWLoHoes3RSljknjbhCvY3ZwWQdH1UVM8quHxaT0WB3Ozfw38CbrRhyM/CRamMebqoK1E2POiP+6/UxLAuraz2km8lOqPaYv/CfOKedod24VR2PP2An3by6NS0k+ws7rfivaf/t/euz+9+lZXk42vwQLZ3CUXhCJ5t/JuabimTUAAAAoEwAArXvqqiI1TJGT4PZ1SYKyXtGi5Yce9Tyj3bVoQ/APTDWEcwapMz3U6qQNZQozHs+sWUQugxItRT2toDdmEIm0p9Ub5OqduDFly852AkKthUAO6Tu5hyq/wsg/SB3kncz4RNMESaMvel/b23UK/lodWETc49By60o0AXQKy9o8hjy3gR73O+rs/vFwhRTjCrxhGOugcrYF75OvEzT3MRHFq4eiUtircJp8hEETRrRRNTVFyThPEYtZCXQQw/JotF3huHXcfDPegVSI+a+OKbVEHI3VXMMEPsrxLl7e3b34S/jz1IUB+JyTKxvgf6EuqgaiwPcvVNSQVy2+1I5oVaD29XaTLVzfI5QUEx1Zj/B3WBbzwlo8Eypqg/qjShLqhupdpq1/iH4B0i8hvr2hLB6dEwS+fcfXN3aiOr5KM6vh6C15cS/4I4d/qzHD4oieiHj+7pL6EpXE32gwF6FpOGV16MmhC8uhbTt5JmK5YK9R0Fb7s2YZOIX+JZvCJ4pz4LHHi5uQg8a1fwdLYEWFW1e6dkFKFKqVb6zFQMeI9EeCciFL32ZPglzwVY3VIGHSzMffS4AH+whLBk5wS4SDobcn/Eap5RkVnEkgG3bHtBfjfeTx9voADqnKGfp7GwcOtcSys4t06yrSjUfRVi/OfrjRQiHJY5pYOd+Z8dWP0yFV9uSuaih5luBmVm9Camla72iqO548XmEz3p/VVm709Db1KpCxY5rfk7jw5CXlVRdTQYx6k8B1xUCy9f72k19JK32V5aMonp0iW7zTeOkWu3RHPdiGbZuJmrhmnocGLckjkEKmRhFLUiPnXIB2EoeVl8gl8SqUi1ftCQL5xOrDJFiMXtwDR82B3N8r3++c3GzflU2aJD9zVGVzpWLwju6u+fGKKzCu0x5gxXdwfMSoJJfet2OBJcG/xJwEOVRN/cqrn2x8hehm5jL8J1sjK95/mM/XH6cISE8Ro6rQt0vbwFVx+Q8V0ijo8Ggaq/h1uuqSQ0ZddM1E7QnRIAHAGl4wKh1cEAItm1SCV9rGn1nbb1LmQ6mOgiRo4oOjg84qkSFrANCTqspXFbZsLX8wydBqY13oBmhfp1iG6litgEVvPd0PfczFh+tS4GC5KeYajvL99uJwM51MpgR8PXaw+C59GbxoRNFu3CJKtwVoQk7boHmg/3146i6lZMIsVL+tkVAlJF/npCBhC4paXR66YemmIchU2Bm3AnHJC3cvixpCUrUPKuuwkTjaBaL5xkcfH4SOIs9EiGMTNJc2hNDO3PZuOCIoyoh8X38m3LZ7lphb3pFtAeMlESrf+sdUeujdI412rbAmBxAo1/zwSCh2N/c1Fcian689RuTlpZbUE31pH5DBTv3wQrkJQvG00LJzX7X6gfGfNd0Nlkr+5v021wLXuZccL7D1GYcLpqn5r72RuKGN7udT5T8X/frfB7fnCmZ4FghDMqjPynAwDNkzvNUVvuhj/Dsxgm4c5xFx3oDiIZBIC2Csyr9GF5WncY1DDtYYzgVqdsIUAu+rgUY3eLqZdqz2lreU8mzIHEJRv4pYHxTVImzh5gt+C2KeWymq1LxcdvzV5IMEE6AIcjTiSucRKICre4V0HeRFBW+4R4igN1m0iuCvoOOzDz2YiFdx2f8C/KgP6POYl/NG2aYwnXSDMPiaN07H9K8zCr4eOaJ3xnYhb+J4hm6N1iWYpP5xEifYKZMyoF4/UfDHMvQ0tF5EMWre+EBdxiLbQJ/CDgQNH+yQwYZOkKgki3hq12ulTxoxhsY8AOHQmYr7zUdu8tFEJXNO54MAHqCAN3Y/wj78koUzO81hhFJHw8fDdfAofwKJbhon7to0gNeBL5/wUvlI/KXgThusozroswfkaBXt835GTv7oC73nccojIniGaICfl43ik5Qbxqs8c9ktAz3dUxE5V3da/mk0pMzuJ4b1MKXJiF2V+02ZPp1dAT+WROXoQ08N9XuNcJ7KFNUOlLOpLvnAFg6OCK/wYkWlGcn1RpaHCaHZ7VU4cfNj0AYh5xk8+obV3hDPiV3+2+QW7/3XFEXtUnHnHogh7R4bcEC43GmYR8MRr7/t35vaZmzbRuRFmneVbutZ7GudfXtwVT1KGkv/e48ngL0baqBfnEpCvkiy9+6I8pO2zz52bOyAS80D2s3mgSFM1STyNREnZr+4vh3v+Tfqw6q5y0uNEySVKgLz9qm5XA0kmzwTMHMvUIcaW0r4YwL/ZKC3Avjs9kdCLo5l2Gf/JtAf6jNyjOgYki3eApehKBrPOVegaOrmmew1PxDsW6e54va6c47p3RN34VHFXZOdX9Cl3sBNYAK6yJNZFaxjI1fDJm4p7E8geHJol8Hm6SONiYhfn3rwFOrHLsoxM4MzmIJevfKpLMZhDPMsxszIR8Je4JlFaRT3tzdcnC7ALJmGha7JP33ttC4LR4z820imfGA5M0lIB0pJw1Hu7lBU4hn814FbT7Tprp5/dAOaYR5uF4/ztUhWlcuu58KkzR5FRAHcnebX4ihse5x9lH7XhR7yF2BYyYEdWKriUUi7tzLaWutYXHoh/kmnWSOarhkbCRHLFgqxFvSIF8zpBOC8+FvXQTfdhz6rYm9iBusRNuR9doJizg3NDfv6MrRU4R7530LLt3DlGY8kRMqCAuWyuNrUlrhRyzv5AjgA8vojCDiMNevaWLoUXOxOeGT+0vBb1mSiaLWmKAwDb3OexKe27sJQ23wWpH7NjW+Odh01YzPXkfcn+e1vHnm9bBN+E+B0FY1+TkSA6oqCUcLK1fCpfoPd7fpmNmaLaNw4etdA7y2tuo9Nzy+g68AaoOSm7yFvT9ZILbW/6H6vKPar7WMncOppmkCun/XjIQnZaMMqfinTnu7rXbUsJg5LbfBJ/W6dvek2twxuvmCOY9eCnphjUV/4uVrqWnKKaT69SXXKBjsl1wCNshdUljPwkqeRs7XrfXNhjRFLwaMSAkeL4dbrGrI/0M6dj4/BD6RohVZ8is1GH1p2v4UTAbnjsw03Qv+8gMY1K9Zz592RtCKdCzUZM7i2gk4Kpu57IK0EZumh1XOrZeKoSCzSoVr61McxZb9oIZ88T+Onf/hESOGwQH1BMHT36e0e1DrbDOCu6VOnHeDWEG1jo+HtUL2o4xF362X3NhTpZjxSXCr11ypTWZgrLZaM8I0lNG3K+oa1xF/OiR2uE0mdE7hdl9iiFJrSht53Wz0s+TCW8Jwavq6pqv+XKQnuUhnn80oFX4I9tODZ3II12CCXjs6CG2ky1PWjsS/4nqGlbXzJM4UELVsftmIZ+/9TVdsfNzFWlmf8JzcNCBnfUs/1aWFzQSLlLAnpPZgxggQPfhf990u15z/G6NomIO95twpZql2WJdXHOmCcsRScYZloShg8st0s6dNTp4TLoeSYdgifwu9oiczBL77nf/TnkGq83iwsq8zcgx5IduFqyaujTccVfYmx50bRgGE6/MNqX4bPOi3Ttrg2zvfAYzqQyQO8+VvTON0/Fq1lGbY5RznXFB4yStjdyeciPJ+IXWyp3PoRRd+Sp3eZObBlGJHmmLha8U5Ut0/dkQWvMlsOlo2bcMx/aobYINiyFNnuvV6rOeukzTuFchMlaMPixMbKkOoJt5Qvnbs27Es9nr/UJKGvcmWJPA7zlGdTsHKgg8rmU8dWKJZKIaYM5Da6VCxnksEI2+qNiOJ107N+m49Viaty0b/IFELz6TlwBBt2U6qoW3w4PYegMOUp+PL1w6IvbEss6wkHeoJrMXpKyO+DsgorXJtDc/DLHtK1XN6lbr++Nvf/uWfvG6th78IrxmyFkOaTHxO153U9QgGYTWnzDt08OjppGdYKmXRT7/qNUpFVbqpj6asB3VMlzDIPcAgiR/xCWVWrCJkeW3U4kw72NahT1rsVH8KQfOGI7VX1C+RX/J8cTVTOaQk+FBSm2ppP8v7QQYseaps82EfEii2dWfLA4rfma5BK/LJ3Vxquam1XZDCekx3aw65SxnoA30pD9Ve6pPzU32I9vJoKm49ne8yBDzptkdEjLRAMsqUb59UsQEOxvZfx/JJKMdToR3Hmxs8jaRH0Hu8Wpcr4z8gwwipiy+V3sDwajIeYlvMsh/ajgc/K9GsbxY3JcwkW8FzH3eOcPTpZYntJG0UwjgnhRKW7m1OW6GKdTb61fYCZINwDkOU1lF0vBsJyuHscHcG3Kq2kMGKhlJXKaedMB+q5ZQ8BoDTSmQURpMXCDLiw5p2fWnWfF0iQ4gK87/BGVSX1v+jmu5HKuf9zg+g6gnE15SyPET5aAHV0KQbRUhDghBL0DCmBTMwLSheSIdh2MNZqLxGQYJI/CvErAt3XMTXFsHPFU1kI/GdXNfhQVcMd064MkuHm0IbnNzXY4FY84tdsJdByHRALhdnGOFqD5QqrTbkgohwj0lofCASJrjvjUnvqk3UkWw1RCT9ZFDQc9Avg66OQnEWOjiQtUMAgegOIUyKoMrewrifMo0HYOta+X+341LDEEo8tj0oos/dZXCBCUqgwLF4iZoL2SIZHGbn8RRSD6AyXf6q8r5FFbtguxWa+jVqje0uQbeOI8geNEsNXZz6UeSxNWtUL55hyq80dxnaJpEW+34YCBFMUGIFfPucBeS0xy9B6noyBKNFVQTRE3O1h6rOKL5OZ6cjPn0EKWuUm6q9HQW+3LNAv3c2VWYf119mFlgokiy+g17CtysCfuQxvciESCahScsNWeIBDSIXNV9CEoSEiWlrQhg926s/VbUIUN/H3+pIUxfR1RiuzmZtT2F0dhuf9ptpJGCk/JY3c/NrArr0HiYxtHkwOEDdwU7uu7ofTMyjJxq9tfwm6e/7idCkzvgWKvJk5jzSdJpfeZFoIVGtaA52GDoklRUg6TZxI7Pfo0KRuLk0STtuqu+/iMxi8OmgnJDBB1rSqmptscRf7hjFfF79NK5LU8d8uDp30UwIRYNsh87hed0qgARzyT5fy51A+7cnJrLPveO3YAORkRtdTGdD6mWmdyQPdQjGdhUTSmnlmdLwcWYErJ7lFfJI4UDAIxTDF/3Y+1BKZGq/4pC6QZoSARrZ105RKbvLGnxeWjiu9HoFLn/moYwo7x88gfLaBWZrIVPOGlXbqWUm9QWQFCIzRmDteMBIZJMm6rzmd1SuCIr7y6QFuyAFbxXueze8Ppfy8rNjqOcjiVMnEyb+bPUvOrJ6VGcDf3PH5ST1mA2zBxCK+TSL/miHnLul8xPbMI58B5ceS/lbS81BrWXgNPyj5RNMPYqi4I5pYBb3WAKgLgDNe9qDGwY8oIlZs5DPFMtYBfBhctiQCgbnNJ6DLVv6u5x93+stVBbWUjzVnXecqSxOQUgUDPInYUBA3oUlK1FEgx1U94xuigVtqVDDxdUvZzOtSPB04wiKfapJU/yk/xP4fUjQfkkD2Wa5E0O6Il2+cGkJqZbv1LPv97d9G+sYYek5Md2KI0kWwQZdasamKk0gl1X43VWbJR8YH7q2BpER9loLGzF2J6wQCqkNRPgjaPhpx+jBVzEmwo+m42DxfvP808QWJkn6/NhCLYkrLgxJ7Yoj5svfiSlZSu5JaQKkG2KxBpL1RPG3OCdoH9uswHnN0wLPJOpySJHMt798caChNhEBos2tOkF5OB/wWDYTieeCuKwOaI+XsziSPrKrU0e8XYzkSY4C8S0yttibkzGNJmZPHQODyzCccE/RDlZ6xtgQRbhRNTPWJJbvIZwxf+88k2Lv/ittoM0mgOckOkOIjuboB3MJyrA6giQw2KeHTOmKzv2w/XSCiQvBKG48rw0UDBrN65LQ00vt/aLkz9r4QRPB5aqVV5hn06GNAE0ISWOgR7aBnOj8A3kH1aj+cmMlxKzchOfWLrAPZ/2wnFRYVA/M56TCPFhiIqwjO3GCsULNm4udjIpYNUmlFTv57OJBSdHE2L87n1eLmszHqUz89ecPXipndoe3cNF49OgYh234wgmdXd5cpRoXC6BHQ7+rivJjIzAO+KfR/VqUQvBAumv157/hsBiE25CRDyw+t2KO+LKJxOAjB18PKf3kEj0JFvtFAvgiIfKx0+CvLy4K1FVWhlhNkN4fzVIrTjF3J7nUJuh94x+m0+9D1pdDLK/ADveNxoae4B1GCbNZykfKhdUIg0QDqhnawwg4x9wtjjA4DDyvc8Jfj5HS1MQeo2VtH96+5VKIsJ2U54Gsy7KQn8vDrYjphIfHGmk5OrIPZn7iISgAg7iHAUUvOyJugc4LvWtJkg5gqhyxS8PrQdexUiiqq3Xon7FuAaknE1lsAutK2gTSqd1IsOwKqMT9/KmkQIhQLXHuVh5iWOJ10kwqis/eR/O+CPfg6KT4TDogDMl0lJX/puHPKp4xHnoQTNnaffxZQ77ZcazbbWHCtfLt3BV7oRDfH/V/1CZTYzm/cpDEuT3HTEBHozJ2aZZ3MNuMxIdVA4yom/+lTXlj2+mQlSn5oylclxkGU+lWffKP+vaMZ7+XXDfVlwUtnCnqCLbF8qceD7/C8jl8sGzOFx4WUbKFyR2d/cNbaMcPOxdM3gbghYZmwtio2AAAACBUAAOzMjKapJpy76j/rIwzFuzlxnBSRKFelFjV5brM/MLb/ecvK0sHZNyVhajBiSrSRDdccgw17cx+xyaJno5unJ6SMXv9z+C9OA0XI/gy7EoZQtAvO9FaXE21e/HNC8c2Hauv44uGAQQ/ZcKH7drzHz05/fyzfus7PDN3IMywGbKEz2p0zX+r0OrKsE70VXL3Yok0gMk/3sKgUMc0duuWeypUcMuPTNMTj0299lgNz52ZrKNb0sbquxYxUMSKsKUZojEWlV18ptW8J9SYsxn+iBWxlfCIRJroz3YFEr/e31id9z39Na0JXBV0D/Cx+zuS8ibm4dw0WZNKLtdxJ1VG1fz/65sAZv8TTumpPFP8C3KCOCyQeNRoz84ZWBlXv6tpMhOUhUxnryK4w55/TTA2JVF9WEWt3qGnjq67iutB3jPVjKpOTDWqSablSB88VXjceEBQ5xHK30SZxxl0liu+77rPJdo8m+qfPS0vQbz5dhDQs4tiBlm6VvQEoFOm11dWBTHtqkXEjYywnl5bhJm5weBjEZZYOnQlL53rzuKoqGorCCQ3fGa6f/esfhTEjpZUt3nZPzaqvjY72Si+ivQCnb0JpkxaugYDiWb4EMfpcSch7yt0NlHsWvhi1hrS3Kv6mvAESgqcxRs5kB2fbW7o1WrVTeBZ/BRfxXatuU9TnpQDsZkoI29GkhJMfWO5Tp9kP+knaNPnjpX/scS+R/SuKx4kMFVJEcbeMn7cOIZX/f4nKE7wCsuz4dS1de2uLTLV7xfZzgPTh//4wHYazOo/PI6p6BWg/gw+B96uUFB63kIJIXyCuEFrBQ7bLTLIUpefM0NVp/jSAceN6i2L/t15O/2M5J5o8X9zXywNwNoSxwWWg8rHVt/o+3lNgEVWAiqORRe6edHq/MegjrZ2UNnyW3Mqt5m9lAWvNrzcVgsvt7WrCSs2prUg01sgS+Y3Z/ZBjY4Tofka4hTD34zwtUgSSKxEu6YBPacfu0YfN9Lgvq0OC5qIgbcoDup9JBiCcmzsNqyU1mjC/Y/PZ5q41AGMrW1tQH1D+V5ILpu6+b/Ecgg7nnUSv68oteY4bD19RE/GFf0D9aMb9AtAnX6SHWffJnAwZjDu5RD2hD2OMKo7GbhwsBHBtomanb5xVO9OA6fXK8VpVr+Y0ENvd4Hy+1lYTLavRJmnCIbXUcp9JlL98oPoJin2MIrJOt0CLlLseFiEfSyZ4ifis5kLMfiOwYFaPnunBTrwMpcvMumf4VejfiK2crj0AEl6kuxBFlQb3F4icUiLqaR+UWmLtR3aMXXPwafd/tc1X4USbqbyMOpshfQI6JlUZTRYos6zmh1KjOo2FEDYLy0YbAgTXx+SJqNpyglyvI9VZ9q3rPTJc3fhuXBVGjmxvzEZ7pdmXXPu9v0XYPArxmF79D6nTAW4QVtjp2wR1RyYWnTG3AfFVJ4bKcGVBLrZgqHlb04Ytmr4kpQokYtr8kK39vMeEVVOMxVhNOTikCvMm2U1/brIRfzfxabjWvkZq8H+C9eUH7nSaLifGD5/2gbMdOq25R7UppPGo7twA2aWnf7tm7+xNfcZb6CkEeQXQfQtH0mLqMbeAJcZ6Jxibn8ZWzTaeSKBT6K9/mnzx4bKLRJHPhUupm+ztz/sCbHZU9POBfOreXXFigc5DH/1oMjTyEduyz3Nu2wMbV475f93yhL4snJ02YP+yL0kJiQPwQhaNB4A0Gp5rQn97HVAT1M2SMQDjvFJMVzQbPylU6lKwxWwZU1r8LSWj8pM5vbZvrHkyk6mZF6WhyWrPSj3ROeu2emjW5KLA+VACFwiOPCGmRq1jxAPNyK2NUulvuJYcicnAxsDTNrW8KdzYidsC+L0ZkSoBLmqfGKdBNdbOOGJG6urH1eMOB6OgL3wq1y4SEx0LmQ0JoEmiDzfd4BoaLPcX58LKHCOVZ3n+8/3ccHVCw77FJLnPWpbsfqkCNCop14+M3voMIVeKOcsmomhlC7v/ccAmak97MFnt++hQLBpKW6CeqNiOVwLW1mVRIBoMyqLvp8A+IIVUPJ8AOPFcbnmn3IHlUIGZT/J9AjBI8f+kFNNjkyw5KBkuSHDxGoMiaxJroVEf/IiFkjh0xwgwGe0bc4YjdG/I1XwcrJUVZqXPwEjTGCSdK2tSTo3prkXIC/R1gZ2f6zpNoyxFKECQ0ghlfv88sqUbYq2lbDT6yDGrIT5yVjYYAs1DeH9pu0B7IoxsLfEWXzuyIDO5wukVRDFD/DDT67seOQj37lLI75zi8iElIGZ+0qrSsHaFc4eCcF9d0cVsH0lN0g6s8Nr1t6KCeuQvmnRvXyYerUFbr7Prt52vcFZ7JHMr63RiXfKeU6NNstMyqfiuZmDqf6mMFCEcxkU9ja3YTR6mp/3aWkilwVmN/P1oQvP90+nj/hCfxBJUsQAWTMFTXZ0puT0GDLw7AkXNRLeNkR6TCXkN1p3HLCfLugOJH3c85EYySQ7C1Lbs1/klhQvQXlGdT3mNRvEWBJozHY6Jp7xjdkETmdf6ap4vKtiz8pKQtVnFWuFBClx/NrR+AhQDgnjoP1ULTW8GQCSg1JzYwiTQnCnca5BZHj2wG8tFjCUMNWA/+o4V4cFl+DwQisfdcQl8E7dVaxqv/GH9clFYb6nhRUDzYIZRVzvx3+53MGLgBSGJtJQXvyxZi7advOhR8aWzhLnoj011gTQuaLPK9VCanFqTesMqO03Q+ifTJMroCjuEA2vjwf/RqfAxXNDrq/hV2hHxaDMqi55Zh0AAcQoWGyMkP3hoShI5FgQwlyZ9GgxWRTZtbvf9PZjT6DfBjlL4egk+kvniXPCMQNozAELiHYLPy5mZYF3qRDkOWgu3Gh2cDDU61cWtFozCkCXbXo6Etk9TymYz8Rv6yid4gUJc9qPd4hRF5plbwjGDKQOQC4mM41IoEFvz7CBj0CBi/OewpO2dS6GQWhnPV9vMhXrBjH7oH5ze11JjHiNkSL+XtIxel0THhIDS8iuTtNuQrtDcKMv0sqRzMlwc5UaFqKmY4QWoyWCC0xtpVhG2vI13ozfFUb8HDGQepoAxhJsr+G33xo4sG2XpMG2FMcpOW6NQAh6T4y8ZbdRrd65ei2aT+FN0fHyN3YsormCgGHfS7w61io21CxeWZMzoz7TQA2tkp+JizsLFeinn1QVMaPRX5T9D3gzYF652OdR1rSOpVALZFtxMfSgtLh5C77Y6Qk5rFmMXIL5m8bSP/5B+P9WCBjVsZGqGz7bwwjXyEpgaMZ/O69QTpLTbb7b3v5rR0MWUl4o/zfQrerMG70TptqaDeFK9LqFoB5AthtQ9CWI5kmnDOykC9c43wZhz3Qh49bvBUeRH7Jv/evUseC5BQv3IixZg0n7lHz5PariDtOvl4Ue/5duZtX0eWNYUsS4LMlVMh7L2gWMkD03ZfVOpM3GDKPMhaNQL1HEeFtMBsvc62z2PI5nN9E0utrNKl8PyVg+C7a83TGgn2dK3E183Bp8vrTUQUrr/O1NSn8oyPXYrbt9cwrX4xgo9ikkA47pk5MxxW26oIrLraATX98/4d+yBrM2A9VYDAPeX7Dl+U/AeTGwU8w8aTQMpVFJdTXMe/gXae1w8jLcT1Tgnkh4POLWkXHLq3CVrEKDcuEOX/ouulMAt/nGX3H9u5lHBKSGuWr9+9egPlC0Xw9Q9j7jhSBIaeGzaDGHnKwXi0mCCXSTDqOG6jObA96PT8KbGMUDCRBRoChA1vol/xonxyo97bgKlL3RgIVee4m15Cl9gDA2uL2uLDm+OhdKaoZPm9T9V+yFQIIKGw00MuZ90mhegp8+vbCY6/Lq7xiIsUfF4bhcerDoUJBPD3RufzysnMlczOrHAajRNi5+GADPJlvCwNIcSBdSiSyPfzGWNpjKKIHEG/Fdr6SZaCOd23D/ZJR93kzErrMaeVwNwkah3cMAGwoD90pYHOwseKSIEyieBpsS3Ffd6lj7iB8/ZNJ/bcbAXKcnR33x0ivFYxOhYno4B5kVAagMMThq8yoKncMoxpSWS1z8dAx65gKrdDnhx9WFSRykhb6/IZphA+azziZO38VXO4gGLlitGVYkUm3QOtboqqpxjMD//pyPGT4HqQmno924pKgKh3GXBVYa0+l18fqtJimNrKyOT5MF/sLZFxvWeKl9pzo3iiT40OUFF8yQZODaeRrYf5Qd0u7mRpPZgV737v6UReQ36mHqcQBCjxWfoN/ALLShlt7lQb8DgAt+K7ToH5iG55VrePQOgP1zgCYh6qzp+abTR8nApFS84T6DGz3EgF5v32D6qH9Bq8OWHgXlB2AnQVYyXqLWk5o7zJlZMTUDFfCOfzlaVHfB/1avMJpxkYy7oaAiGTeeszjZtdJEgizPmOPV6EtfmlvnQomtsOb6O+sUvGQQEzCwRNmtmOc9UBgC30eiJfgYAxAGC3LJScskHBxaFLhIeWCPxMnw38m40GJ1TXFW/G5zBEa2MmkpPcUEc+NFtCB+Rzi1ggNhr3Mub8buUe8bX3u4CBZBsDVGOomVrQNs6SNE5QF1Dc+93o9lZSRhDzWURyHjuu4mEqwlsflZMhbgL0irgqzkpKuai4NSxWH9171RpzzJk0ZQtD5p8Dx2i00ClRY1CLe4clj4lZhVKPk/E99RFQYYAlare7MxSgWBSZl/1LEuDwXaF4i/aVlpJDbaNOMjmn6t+gwgnqECwwtUmGGnGM7jeHtFm5WrRYiaR75BUglpIIYAwACIr1wBDCjSlYQcwaM7IAlIAdVSkuWnOVNT2SY1uAiMR6KiWVtwIi6pkMLwNzJByS1A8SY0qb9SYESKf86hBMLuBymkcWdibcO/3l4DhRrnP2FhoYlpllNrh4AH3Pv+4TdpaVe0K8ZjkuheRsB8V2jC7QHH3PdeEzSIzfvfKxRWtxCsEdgiHWB6VrZQO3VRXPttlo9M5ctFQ99pDeeFJIKjuTIeNqlXatEkcAxE5lgF+oD9lOeNyfuiRlyQsc7DX72iKm9fpigwGDf1jIe8y26mdVLDVurDkHE4wMV1eqMQvolx/p5iyIjMqYTTJokGAegCSYSXjse3TEDVSbRYn3FapuqLNmevpDJKWJlh+hbwdi+fbSJQqle//v0aMQsUacQKa+u/SIoOrvUxrIQBm/cwzZjaK7dz+lcO+p5wcVnAnE7LzUJxSb62ibkmqzwM6L6d3c3mc/FYQGTDAq+5e2JwxG8wyU7txDG1/4NLRKY56W2jNfHB13YK5XrNlh4R8tFjUHuXo+Jl351XnGzImNw2A/3Ew0OSsAxFRjcrPVyZRZSg98qyDU3appmlg1nM/hnojRK3+4m1m6sak0BtCLW2iWG5ubeT9G2OCPogpvGV5Hasm6rC2tobOSqBi54uZIbolZ5EgWDgePoTmwtKsFadXUl0RRytOfKNYsEKvVOwxOnANKpCEvjCOnF1dFIhQ17cPWh4iNbbRkpCSG6x1DEmASymUtNV1freW37JM5DzZSG3e7IKMONps8fJdC2JvkQ73yyYFVBiGgkdeYM3zKXmSDFQQiE//rSaiLQuEaxO8N5upO+kX+qDpuryj8IxftrNFBcg9dhg8onYgf8lO+FB7BjxIBtOjfEEtiwOClnmrP6sz2SzLk3AZDDELD5i5GqaZg1H6LnBfaTtkqxHwRlmzAxZnz/nCyAZIiqrYAnwA/DTXLPhuyTGiftJ8ljMg9JuajItH2xEq3a1Axdke/CkaYCIkgfQl2CCL2MRQHMVeCuEkSlZzpOhSV43BH7vwBXeL48ZIrq9cRoao0kdlirG9a8F5286uRKL1Sg5pYkuMqpYvAzTBFtJWX35anKz8i6GaaKeDS1oRqO5e3e4ERQNUcORmuNOzG/lRrrvHPMJo2mkorH1VCdKEZK0IVUYJEHDqAsJESOo4L7E2MkOQQexG0VYzEF96PuywzP0wk+rBZgBECBvPs5EHDbsNNFghg9iosh5xgxpFchPw0NpjPh7YpYYhhhhBcCwUDy+NKZVZVH2puJzB68ajyCwD/OCbSGL4aTO6fqdb4zYXLz0SOwRm9q0vX463Lf7bdEOsfXrPkZC+e64erhnq4jUX2AouorXZZ9yu47SlEwoAC95kpJbl3RVGcJ3eTI9NOdkc+48S6h4FRoAiwDFZdnaM1lyH+l4U2fvpw5NW9ayIWps5As5sak8AUnset0QMzw11rY9N0waBY0dsH8DwwL6KHNtn2XQYSFAdMoTBh/czdC5zr9OAvyptpikRoQQdyWTzgomU0nPVWQS7Z7W4AW8UEODSOwIRfrofOcaPBXsdS7PImEPgGAjv26hZumYYEmVdHijsLUu274/I7HAD2u3Yjhvf3dQtE5wdEkyjJrsSeSDwjAjT110DTpKFkiSalQ2b8FYK0e0Ud8QVGR3rAgq+ejDtcG0d6rB1z7fNlVwbfEi7yHdlXANNVWqM60fhbXmdFbiQzPC79gPyXhD0pq92ujqMxJzOw22kq27B0Y29YM/uiN1sgmAaeboLFoBuheGwd+QqpsKpI/m1d2JdBECUSfoiQNC81Jie1DdJbZH16aify62nG7rNOWnxZ+/6ZyAifk96gcwWDaFYDvVZjywbIddSMo72uBzz1dmkGX7PNs98nYSVcWJClAMWlUi7yVaREFSnzjTt+Qa5qXTy278jb3HR1xJaKzdiRZbRWfl+I3WZGy5bEtwLNOKK/i/jjK6tAErWP06oKtMvE+FoF0rbVA0qCregHzCYHx4OzpnVz4Xa7F/6qoMM3aASnlCBwFxNvCrS+A/0KdtOkQxlIyPVFmA5R/WopFzuvGeP1HmDHrMSPqFyHhRNz0MQHnuGQOX2UezLdPtx8mqxkUr6VeWPkpKNu3r6eJKmWn7IoeTFGlD3PNpWU6rdfD+CNDMjNKalGdtKqAtUud5zHjG3mOUgTI1al8Qx5bmrRDGqIhXq16KhokNQ4WtIzNgBGxO2SsiTqs9KeHn+90uuBHMVz7yyPKUpkP1bWSNBshksBppsOnws+hYgO2N0jZLywiRWg8KpqfLh5mNQRBdABqMcDXfSNHGp7+5u6QbJtDaZPYZrAEQny8soo/qq0mqM9j6MxHG/sm5hiTAC14iI6J3bBLKztP/BdFsgjqQUolO0a+Uxf0JwMptpIENeFx43iEKuau5mSk3xhGsJobOpMLCe3tl1cHNQ7F2bWv8fTB+nNwAAAAAVAAASkZRpiqgbnFhtoVvusfbViH+dY9/52E5rCUN6PrvpDjf1ciA5f+82RMVo016sa8kLugMqqBVk5lkOqvicK3UmVScVQVbaULhTiKQjBWJqRNc4auHPZzBFJA0LxMJe2p30enrXANkgZzLSC51W9iZlFxq4ttJKpbtQZEx70gHSlneVr9vL17V86HvjfHYkrG1nau18jdAI4qpRvelPRW81hpp3ViTYpKqLC4l/eYptRriOdAi/9IKmK0xteCJs79DUuK4/q7kwY/aMqHsbulCa4sUKGPgHElbhMD6r4hQBFu9I/OhZVsbDenBjWDySJko6N14QvSILfcvuRzFdWt3ikOe3a1TKxUsELYO7Tj5Sgwly3omHDkKnujTdn+MxNtFkLu2zBTKR3dGbWAZEYzfTlA4pH4vInjXV+kl//qErBQm8f+LNp0Uoq20fHxqRbyaiNNTVoPotRDfNqgCwv++PzThxco49ZZiz8oR3azrba6/9fyuRMw2OsdUrHsJGwKm9Y2H7FpWkcKIsajEOLaYIMS10Ld5oRprHdrN5uJIZkCbyzLznMwPw5ksCPuRSW89AI2xSsTBkPiJZwAcagMzjPqFecxrIg0Lw4KAgFKdapkwpbSUerQzJ7fsUG2+T4MUxoZwHEC9C+fN5ZrHMMknnvIJC54IvjbF5eTFDPKZwxftiAQEPT9ec8jwna1/a26innUC+v06dVOD7YzOCA338mFaWfsRmwAjqT1oZqyJnMXxVNOtomApvI8Kyo+wYyKkXevnCHHk8xf26YA/V8boDSu+QVnn1NTiifGoZhNRwv6kG6PDj2tfhIrHYeSKC64PlYy2WRl6A1jNDwbmhEJLkf4+uBNzK+ljrPjgBlIqkwH2wFVeLx4WvsODR+WNr6uATki/8H0UzU5IvSxBKzVyQaLp4jp/ni77kTYY0Z8h7C2y6JcdUnisv4rcLhmsZO4blRzzGhuz96yyx3qWyAdhjiE5fCtfoX5NtTDXB8C8xoy5dZmQvIlohQ6NO0Gq+L1sbhEDSWD+VsPnKjmBBnXgVqqINtEf05lqOG2HraGh9RBUCGlKSShZzTZ8f/liizVWhukC1GdHFaW5AFIaoYPnYxeZCAfGwVAEK0wUB0Nm31CtWY28ttq64/gkkEGU801cww8yi4L1api9smbm0hxXqeGeTRXwj1o8E+GbnRp9OXQyGpKzdV4qxbYg94XUK75DBS4D4W8EPm0FlH+sctvTO6XJRnLIzbi6M5EHmpQG5r+r6TS8FNLd7CGWovV3i/IjYk5JgjNAdEW0MfiRrOJIOym48H3C0ZeO9YrQAUYWEkByalKmavBdwwAiPxJuIom2MyBRKXG8zv75/dOZ8BxBIFrdTJFbmBrTJhq3nhvQCsCxbadvHmegxNkdoFhD3ZgW8H7JHMa9yy80CWBL59S544Oc5IJnRSbbH/cj5SncRzPklrzF9aL5+xsInSHuPbTk1llTGsOFtgAPQWLX13uB97B1INpbNdOa7q9vcatuejdmwSGqgTwpPo/bY4OTAJcFk5uxe64fwUWYZN0Nhej1NZNRKJHnut0pfcSgsVaNNqx3dp4x0x9IlZ+rqHub9ouSBNpVp78p0YWb6ApSHsBYaYM8wpmdksrjj+oideD7irlXLtIYoYKW8QfLa+844kFckVYAfEIFV6oLcvpb/DnoRtuBSdkIyenRJt1L0D8ayHQUFky/GrVMEmxY/4Jcl6exFAHhcwr5wApEO6KAlfVaJa5KeqjXIxhYUxF/pjCFZYzNf6jRScOiqv1aK1pwwsAr+Em0AYzCnwnfcvT1tSWyB+nq/5tov2zqM2/4iZZzela+vsNeo9Ius/+D6lkTseCk5Bl9Pn91kEXXE5v7Xs6uV7ZYBE1yrAczFjvGs5iUDuIS/dzKUEHTvkSlXQ4WLUaBUvanfVN1EBE6br2qLGkXgBl1m9hYXuH7zi8sF4i95dUhxcj0qPK/8yGgx5vuruqQLlmZPv7+kZbkTSFLP1La9eVBV6Un5OXZxSMWpeKEdGrTqHp5P7KnZDzqxKrewY0y6cazH89SR8AlalOU0LO/31BUdgoX1vsHjNmK1SArtj4f71v3OppFSo+EDk1/3grTlwFKX+GeST0Ia9pUyyClj0Pjj5HdyBGkBA24fKQtgd5saHMNL1kqXwbdjUREU1CP6j9FmLHr58CysFAQqvaSHS8eWZijVkLekUvWha16++w+4EVeftT7j8q0BGGeXoJ49yA0aOppFhsbU/uOXGjZTDP+ylJSk/bAPmGqPGCHNYYrb14VjM8u2IpJMdwIHxhjxJ1ktg8vSvsg6oiEwXcIdpv2EzNj6HdeKOvsTd5FwBeYHvklhAuLpqKnVaB0li00FwhHyF7NcerafVUNbxretJg+fGMfuY8L7rxJtwP6XvcSBQaoaGnMRI1hfslEHS7TpgO9yeYENEzAhnC2MzOE2s7/8SK3OKWHOyjK9Hf54/FKVui7zMTcu4O89LhJ9N1MHvImrSR7dueJwqk1jn3pUKK7vniHBPsMkwqHaWDchRBp2zvG72Kz59SXzHDp9MsxnijBtEIIl66u094Xou742eLzer9KGl4BT1o0TGlLC7wK376noqIBkotYDGMF/ctqRrxK7WdLsVJQhoF8sk0rNZhA8oK/o1o9AlRZl/8a+5oL0Bpm3f8OPgT6Bo0cwTK0sUd7/g7/u8w3Aqct19T1eHf1RTMlJv2l0X/BceSOPctH97Ps8ssT7EHCyLno8hzKbCYqT33Skk/R5qYtdExAUfhUgiSWSjycsEt23GvV10IaZ88KqlUuYrFNa75e7vQGxJ30c909MHM11uCbb/xJckhFcpKiCBqMY38cXdEckp3x63zooazgYjLCFQ5KcwgryIQoJXYybAR4jNaIX6JGe8PVV7vuEjvPpJ8o2lhwHtb0U6ZpdLkVQUCllNx9NaICu9eK8cwS38sxXmJhPwO07SB9xIDz1L5qqpiy3bevtS+CeveqHQ3tiIfnLYpX9C+YwJnAjTRSt1a1lfosCNZ/7m06sczY2nf8kFEiXumoeKNP9qZTr/KEWsBay1nfzd3zogckvMubdm1eTk9hBsq9Fr7ier9vTt0VwxjoSwfNE23DR3xSkkC7c+4UJ5SgvDxrmUXDnE46q3kWwF6ZD6Ku8aTWrbqUdTmzAJNSPNqyzu4+0lIp6zp17h6Sp/J33tmnlYXwvIn1nXfUhxeEthKJApIVmsv3orvkcUHpN49PF67JLRd+X5keEIsfXLDx2YfWFF8VV2qnzl74PsSnwqC3ju/CVmv/VnxCBcFKEp8HXzl8X+ahdzwnUWOmHyV8Kga/d/BAKibmU64f/Cl4Fw7LMM3xmgvftdTuJzRUFrYkjIK+WI8c8ukMEHcgPeQFHVecGGhSVB2N4z1iKuVQoMAxM5O8rVIxYN54QejmyAMYsF+GPLXCwk89Rq/TpUhqJGbhQbSY4deBdrq63J23BvK7I4Cr79vo9/TGDzE1RzZQgxGFoRsvJQ0FbyWohr9XbWdD28l49UFDXvwtoZ/9+Od4IfPK2+wsM+zbJlvTpGByClSCCq6lvW7gY8JE+xHp8O4841quPNqBIJWGmhnyDovlfo29zV9GjM9e0/cTWRSZTniiqSqB7tkw/efmBWfX/g2ROEwJZ+gLuxCtpN15wwvo0ReH/aojsOfhhdHJpMPJxq8f+2oBXSIKmsG3hL7bWWtCssw1L8B07X5pObKp6zwd7VXgUWlLStMXuS8utk3Ga3LonnnZUGmBaV617/OZW+Zohds6eNgk+WAvacgj+uZyASA3/R2cgbcHWSvq4f7inivRZI3BdDeoIKHr576PNU3KVOb0K+AkokosVsFrasvZW99/TcGa5PWnFFMgBc9kBvuxtVdtIl1PtCQW5AzjKJgyjvFo4G8ViLTqdT/30DV0pYJYy1/mf7i6fVF5q80CeETaw6DaTBRp3gnURhNwQcNuQQlSYYTjG693UHCtPaY6ngR3iEpl02VZ4iAL/A5xPrB09FYbHSig1u7EPo2mx8XrA0U/4ccWPJ3dq/7d2H5KRxRpLfOc8nky+be7ZMIirSDC4RiZLQ8tZSBah2QDBywI/HYyamQJRH4wCtWNPRk9BT21ZuzCtz8IOMwcG8qjxq0hkA7YtS0OVi43xGei6ll+5Zr6GUFfVaJLvwxtgjSi66H1MqEtjrxnkIQglZAReGs8sDkklA5sHGMMmq+FOqkWmG0aGJwEYmbxw33qQdgabLpMPhQUBKcbEASqDqe+h6utgu0KC4Poany/gyXgSsMWa+/nCRKUdDE4u13/3uEVEqABeJAWP/QejhXzkBpkNGkdBKd40UFzbsGqMBSzt8mHcyy8z8VvP0FT/clI9UgDUFcjv9c3mY69q3KHxmOZievyZ8SYmYgaYME1bkaRA/iitBvACzJJxCJ65FDqMKG3QPBg3bG6Jn+lyRNYCWJA9UN3op+H81mlWAQIUzTm+PoXzFaKQh9bLRuJ5lEsnsVdYw2gYcESlp+jV2Czm4/XGgbfZx/JuZWfEWsWYWPU7Yw35Eadkpe/Q6OcQeJECMN5SudZjx49Ry+LygitwW+3E31G1uICCZpihORniUT2GylujqrzAgpoNLpt498s0I+ZFcSg/Zod1qE5nFjooL88AvvpH3x+ZI2mLUJXNh9zKBRomL/3cPzX49jA9gIdwRXyGVWct8zrYDaQi4NNDl5r7jBBXGwr9GCfbT/DjmS+Z3MXjSE4rIraoDuWcJmnN+d5cuAxmuKsoUFsQY2Z6iYh9375XrzU4HNcuc6e0TFaHe+jG7JZbFviFKElpQbp7ZihoX+6xrLaSzz74LUU39y4Flvy4M1BnLSjN6g5qawoxn5YUNBCD55Qt8QKVbyA77GbeaFp1e3/sYxeYMWCVnqdKidYD3YUuThu2ehbJBUy/08WszX/FsubSLAwRgzRDa32jfOXl0td/Dud/ZT5X0CECObk/61Q7H6hfgVkMKhDXxXNRHjeeUBfE4hiXu+xfKllDK66lG6ozLRPMRWoAwcRJ3Hq1GN7FUYXqw6CvlY+PoDSfEpZVXnyFEHtmipJ4gB/aWaLdkJBVOm7mZsqC7TuWsQ41e/FrZu5NpAvxWJBwPo6EBNtJeLG5Z6CQKvM6JSao8mYNv9e5m/qxiunf006zmhihM5VpNBuqpRtE5HlM+2cZRZHOlvzQpSiUjcuQfU/lrKc2zKdOdQbU3Pz7gPeB2Bsbw6AaqbCIY+a8yhVEKtFOr6KINURbiFZ3s29YDbmYgwyeE+i2mLED2Xh5gpi4wGr4A61EDgE995hysTvkGKaeOfC9il4FT3eMK9NNCNaGxaF/L6EZSJgSvFmJJbuLOiM+rcvKlhGcO1bBMfITkpic/htazGxwrbgxZBI2QecvC2HMoOhdJpN8o0yYAuvukSWCX+r0mUlpc4XAGfozO6kjjfiekRDjsyvhEKh4B053jzckeuGSHipxyGNt663DEQNntqacbMCWMtAcVs2f7q72EGroU3M+XGdm3xqeF9gz+iAMLxSgMaMSPY+zZxB4rqmpvpuP27/RtABiVisv8po4yWqX2ScpmFTBpwmj1+g/ZoUvCMx9rLCmyJHGkoOqpG8bjzNmoOG8yBKp+UB+J9050h3o1mpVYQzwiG+nfR/07RXny6fB4pGZoVyVSEwvPb6wtPgj/J4NBHCSRXvFZblWQDrkbbmU3E6hZmc5df+lTDhZ56l/7EgthS27SRTvUrjiZ5NhyKel9FcsTx/GOwvqkd8dOZ0obZ8d3PGKmPbg50niMgfehDA5bffgmvnFOsip6E335sTkbdEmJFFJH3HbRKkPxa2quMugEiP2nQ2ZErXxXNVZhkisbuga+sW46I3XZyXVGXvsKxcyuqOr+ONFHqh7YeqvHwpGcMvIa2L9AZ8numTOr+q3PsJxM5+MmTuMz4Rv5hk1aejfiQchpnyYnJRjUV2CprdJUnFo55LuyfyZaee/keWVXchl62b9aT4DzzDjW9UQ7LsYgv8uupYJ+0dCPWpdnZOci9nY8S8VPoP0ir+y6GvAPFBICCZGEL+n1tGocN76BBEuLkbbjtQaQCCHOOZWUoo5ZFZ7tH4iPR5iaFV+q1JugYuaSIplCsFjBQOs0ItgvXz0vWbpc02k2VhEJxBBnEMqZM8UafqC/G/Rth3Z/bVzGirP7JONubzim4KAYn0KCtdh2APrd2jbDIz1iDyv5QtoUZqktt6Y8so+nYvHjmmeGZ1grC1LFcrHPIIxUPbnpO2voFlvYs5GoSPhNYwgIPJ6I5HdVyxyFUPoG1+ROv0kje0uj9dF5HfmcuU3nYNmaH1hSB7FApK10eqCJY/KmyKiqs+ezWf/o/e/DUpTRQjNDODfCcZCNLbKiknEZi256EU1RuktM38CY35e/GPZrbvs3SpOO0KqQIi83bxPv+0ViRTSxZ9w6BN6RFmeP/9vMHw8yf3K84EO8AytK8r4C8fNKv3EvR2F4Y6MzYyyLLJ3hJE4EXQlZMW6Et4OsOzPnc3ilErYUPB3wkx6ErsBbDfoOYmHY9zAmytJrszWv3KaQjKby9piF0C8GmWBI2PFmcNDmmgpNe6zms28QEnGaUAlt6TVlT/p2cbL2PfD31XKhXG0HG9A40BAB7XK163XXv/8errSgKUNHVRmVEYLwW9/eXL2XpIJ/uc4gsaPUErRQCxEFQtBPPvkijTdwKTMcngYu8ZtvJ0UB+05cb7GCq0tw72FhgIPUHNZQMRQhbftcIfanxZgV6q9YOqg1J816FSF5jKSdoXysrltfEMuXmrpduStLwpoha679laJYNmXGJdncNKp+5WhETlpDdlpysLTvnpnRe1gTDOuXeFvWd8aqAHiEYYCFteU6f5i76tupFpEoCcbhEe7J1XaKHzht/3Zhnloae0AT05su9L9yzifwXu5SL3gphQpMPYg0TLz+4ZsF+jZ13ul7i8Ass7JwMY4MR2Dr/GfArw9TEA0SG4nsyXB5+vMo9uUYSB/sGIaLiER9mN0HFG141yDaWLxJ+K/Y9OoQ78z7VdXGXY1FzfOP8d70LHp+mPanUwf9CPwa/uHgdXB6WGc8kLuLxDFAAuA6Nzzw3OqFuYM+4+nDppxm6DBR/S60B1w5R1QR9QiBk9Zc7gRFHi7wnHck3T/U+LfWeWmlKM4AAAAABUAAFSOftSVA582SXoVnDWPw2yGTWdsP6AnSf8ttYbpJ1ra4LtjCBJpHCReUgF+oN1en5GNqgblWL4g7rtSHNPTBrLb86yglZ+JxBnZiar8uCJMFQx14G1da2jZTXVYYojJPlAc9mv5sAhIAuVvcbUZfmsWy1sjeaomqiEUZUw2HDA3p7aeLVuW3Rd4kvQBB6+oJBSf24qdIcJ9sOvPSzZKv8Hahwr+MjsrRlLyHMnOm/BmKKMaQ+8kVLWD9SOpzKDRZcVxgu4iIkJkF+ttqGoAsKjKiF5lTi6ARJmlg2q9iJkMz/y7Br0yzON1DA/ivIXGfNXDGixE80n8wrMm5k+5u0NoS2byrVBs+bPiQR+K3FnBxHRJObo22Vj504SXkZUwjAZgjikO1H7hdZN/dg77CEZ5nTQ6bO5M4ef4IGxbspPSEiac5Auy4CuX2d8WyqukMzgWl0j/WS1Xm8ilRLzDFDfw0uKzhPhxYkuy0sUSAUK/vRl79hDFfKL3wQL3IaywhojSvFXsqUFQSJ4zD/WhqTYpyCSd1RAX5D9oRDpr60qkfExp4zjN8rS+vViSCeI3DIy0SeJ2AjouklkWwKggzT3GmGIhLZRAQJSMsRtILL8eTONVn0CJ/N77gZSsSHt2Pei4DAMGryNR7o8WQE9xAkFY5C9pkPcobq2XwFrq2h3bDjN7xoEcKdJJrqjezoNdhWYYkb3NCXT8wyI5hN6dMwR6P1i4Jdiz+l3JEqS1B1VYIFXR2rN2ZTJkbXph7PjrBHFuFPgZwGNFZyyhCZam+Ja93GG1t88h7QQsTRGZnEe+sR1U68qE2Dhxk4cLYQVd0qPDfxN9fRLXT0znhlWWjadjmQXSVZ2wgTZpaqNfYq52Xrgy0a//iJhzkAEmrNXyylIc0VUh705oT0dCRNGT30UtJ9u6HLWSJCA5A1DeXTi/sMbJNvtyxSB7pO94GTQNkpxRi6SzIxWydy4ZNjuyJZtLCZxMEcfoUtslOvoIla1B9AaXhkzqakbPVltryoCWHC32A12ozAHu0WYyYpYCZVmgMX7x7ieGwOxzfgUJiS2fWitogDItoEupdakVEaf/+NOpDcI3iDoiFuD6WwjUG2qEZYK/RAh9kHAJKGrYwZcSXcnpCSy2qqlOdg6G/8g0Q5tGYvNsuSEvtGmaEaoyRuG4iBPCuAly3/EJTD0H24/EhZVdWMj+TqqrGrc4PnG8f2wSx6rd3NqREL2A0Yw3P66ho/+u+XLpaOBFhJm/eAN9UvMMEUMckL6vbu7RdzkLrghYaUIFGj/pCGmKUFShmye5myzty5VLYbU1ISr718GMbuaCeZtYD2UQ5kL7N2HTEb21llzyUDY9UJAAUr0SmUj+fisutgf3McAuk7ZIpjbJCMqSh4okCbcBvb5/Tt8FLPoiregE1uHP6xhkls3IP2sndgIKQoHgSt+XDuRBdn5avH6eatd7F/gBteBPOHVbilV8/lzY4l7hZ0Sll2KiwmGpqmyAwHqXMrWAyRhBLCVy4f4gcB48SbiwvTT6uACoiJX7g8CvjN9JsUAKtau4SPX1rZGaQLWug5X2/36UsOW55MxNnLzF59g8bY0LHZqnPrgOsxHcTVxmxUjh6KzduAHbhKCyXCB7bOmP/0vv8Ln8j2TK4WQMdJkLHbsmdnPXZNwyYmrYUtDHywpJjoxyYh8wZ/REp/EDLk4rVSE9+F8dew5tohQ3kyXdYohn/Sxp4PNn8xAiqySVoRJFRND8F1ry69qZP8VKJpZP/CV9w5q5FZUi0iFsHqEXar/HAnCv/a/HypVh122xpYwXBpsOYyk4S/1tMDBwElLY1rc5gdnCxfK6hUzPihlr1g5BPX8cOgxjLiGPWV5Y9fJvTbsZCwVFYEWNEqLFG2SxfHzFYHOhRUTYEPx++vN9ASWLZFX2zppOs9p/YF6rjYeb7Shm6lQoo4HdpQeoMEvVNZrFqgZJCk+e4cQ7Abq5CnWTZK1GcEGZnmNp+FLHIvxWpMmCVE4ctSeWU2EYHISQfMTqgDuwceGgzrU8622ZFsPaY4KB1VDL7jbxsOs6uohlu4WchRn8qCBm+LbWB+kcU+mZpaZLE4AXBV/vJEvZgPfHsj6M3Uf1RPhljanlxAtXMcFilCQqulMFDa3xKOzabdcDaJhPIz3AiiuRrXVKXa6UxSHvkCBVDo1P8MTWTSWMGYsqiGQ+9sFpOViZ0P2HbsDQT69J89i8c+K8tPq1jhDgwruD5Hac+MiY+43Q6atCcn2CcQEfhqcRnZJYvEkNvcz6aUdGDxe0sQWqWmnVhoJyq+UdxH/v2BKW1fVH/idZ+2IdLvkHEKjr2sbPkzAEwRvApu4Q901rprDcc5v9YTbI9nqJSfbs48PWB8O+AimKp0uDK1rn4vMqEcllxwk8KhSCPYvkGo3QFS0a1ruStNAdbHI/GRja51bFRLV5E/7jPC3su2gv5Nv5+fEQB4KjtQkpr0PG8HWY7+auKJqN3h96BXAb3ewwyE9udnXYcGx0qT6hUtuhGRCgeA/Q8e+hCcgHgCXjCZirDUbVmhN4to1nXGEms7+DPDaYTTv5+c28QSM9UdTVF0IbObQlMub9duk3woxymzhf1F0/zweVbKY+j2MlKc/4X1BdIi056H/USL8N6nIeOGWtCijDNo3g91t/8l3IGSIs0teuDFtR6oPkSEDVAa1onL/yfAGuWbXcxr4LGRIdmUvfRXjHsgdR0Du1Je261qIWeZ8WplC2frccr5l7sRkzFL9I9AplV7M4uNwX1DigkIkPUSwwrpQZIIaBPvPPFAZVyQUVaNwhtJPIUkHLvA6vDAWhQIubRt6CGT7k1WvToIlEefEmVwwB+hWPHFPRCGH8x059tkNvA8DOlOTaft93Cag4MLxAc8LrSBARoRVSluwfYuwrRN93vW3z5tiRVmdSNGilhlIyuwz0OJSdQlO5pohSIejZs8z7pIfUUyfY05WNip/YmDFB/76tKG4qA7ixh0vnUidbvqBjldZLKm8QQFEtz6v1H6Z96kt0uAbNKW0scrNPXfz/W/2n93WOjW0JCtRZ1BMw/aO6qORgnBy3tsfag0mihscbRdYfhr8iYhHfCLMQCS0a9AEocNPRzxj6pJ4Xq8EN0+PkOqMqR7zZUqow2FvDCsFHszriwNfAIVaLNn/B5CKzlTQjWjL5/KV9G5ge2qRUKKrl4lGWlEt0vpD2H3JKdN8MNXrrVP1SBdBQZws/UePu8g5ZsTt6JyRbqE1N+NyLk+7zCh7fKBy6LgOkCK1StwxKmCVsJm4OIC0JsOB/rWWZU2b27tf5qFf/12RY3ZGEWVi0pzFisLT9R69XeixRtda7Zizcj7quKb6yaDLlfc9I4eoDug9XH9d8DJ/BQtEux6bCAbgbRdGJ4nO+q8Ymjg1VZ/JUaQYxE21PinQazdtH+i9uj3+AZ3//5evDAWpLL4RlV3PBbI9cO+MRT0cP59jq+oYs1roHkGTJ6vhQowWqghhJO9JzmkNPxTPg5e4sxsYpTNlONqjjMLM6drzBqZGWWF32EiEzSrV8RXbe4relZceh+j14idQczP4dCB3OkVXHol5VbXbDpRq5IS30ZvlE6YlIiYhDIGlOIDSNR0Qkg8seLgLRKUncQ06uFe6Vp09QFpjfIAXmb7YOvsYbsTUF8X0cyEZDuaOkK33Rdj5fzad2b7M8c/nmcGTLZEycXl1tmFTVXB0AVw4xinak+B3pR/kEqAHEStNBeuSldwmlzqDNQfiSGXEo+dZyd+j22rgiS4ALxMnb2hKr6M1oglvLBuBpeGV8qr+UHBoQO2fb2pmNLGUrMbj7bLXmknQdFkQpkRowG+E99T1ifv+h5eEetsgr5G7Ytfnk7abg0ze8Ut9jvBzgT/8sgVYlHgoAOZw6GZW7WbIB6wlATUXEr0cw6RN/Tk0FR+jZ7hy0bQT73n4qLmJcrMljhfEzpO9rhsbfbg0blkAgPvNPQq6w4BTrBDm+97SQcAscnhN0JKKUezFqNqJoWah3UxpvZqtQqf97EjYnPk1oyVUNXfb9n55sHSRTBE6ZyWQpN/m46vmc+npam5KunufQ5QBp7szjmawmcGZCL2hzx9fX2zpERYCmFOKjPyaKcRq1TUz2n0InG/SjsTuLwhbQJ/5xn0JKAf6t+DVmV//tIqM5XfhdM0B9Epz9QMweWEttOCQo+bE/hZBSN2PHXEAIyc/jtLjMmh86fBPft+xcrPyMpDYV5u5f9J1DMT/9QdgYMda73kvAB0DO2kEpuSFOA4SX6od8+b3V0WofTx1OAlGaA06lSR/bca6ZxVFsAkd/G1c53LVkyVgMA1FogcxddY7j232rXa1QIHJkp7j2k4xBXZZ69y+wSueOwj48kUD3afNPv8Nn14BnKjAyv6dQzz7hfmH03J7s8fthFl/2Zkz1dgURihD4tEUzp6JkDsdEtVKeB9F4FNgOqVSvEakgabWPNSk3kHCn4rTgRYmnLQ5bsNG9i+B3KuFEAE6aFoLRLLmb9UI6YArJFMVoCIG6YWp6RKXGMC1JjR4GcMpHUQUW27aKkXO1yggvz1RtU9b1MqPRJmd5XKqWwYCu4tC5Zn7phhbJvscC29VoaD3CE9ZOcIa/e3gk7jweDXXC76mT/MTkycazZ2Qy6kjQ85dY0agbdWP1yx4cdIKa504YUMnGTpwqrlAY6V1Kp5nuozvcSICSc1cTjkStp0GhkehrericeoXgzkD4Wwn5skEw81c9QhhrTJHr0Iq5U2hF/fgi1n3dS87uwQJtXUy06Z8fyTQ0PaDwg69OrcxvwGfmjhoEGOXcSuo7ohGmD/TMs9MhDH2OGzPpcyNFYvOCPK0mjUGG1Lz3Z82dyMZ4V/Rxle48wRGJdo1CIgk00/hy9oGlWQ/jjWwGIYiNeFgIOTFtuUuek+P8e79z4pKmH27qVJO1H2w44czJ9Zi9LFFw+JmXUCNzYMyQ8IJQ5U0+GmvDdVrzJ/50BXVrWFP5OQ4TH2aOqbRSE+8x0iaXYPTU6Um7nojsMFQfwngLP8u8R6UoQIMMyDQEYRU7SBVGG9zGfxYJ+pLi6NaCoOWsL8ALm+oIl8jVun+1gRMr+6xNthvClh5wETWKZjyd0JGn8rdlk/AhoVRstfgWoFO1BjSgdQcixurNgStBfY8DmlfBq6bOW7Ss8R3Ofbf5/bDBvZaFFfG4xHHa1BST10MPS31WyZe8dQJeA8SKo+Q8Es98g1xGIVWEhGai4J391vL2uxVVXbP4/n2AMbqxuiaE0czABi+wC6F1Wl5T0t6/yY3KpaBr1WsAZ4FH3HGoQryg/rVtwDDfdpl5akaz+LBXwH903Dog27smLl2/C9wefCHGl4twJGsd7mL66p38HDntIIeF8YIFxoTi0yTkFvUjbc4aIJRa0U2UkwW6SPYKnL/Ceh73a64zXqaq53mr098XeckOLlZlsWoGxXqEI1kVoW15i2Ho0KuMxOdE4QTSlpuilnFiiMT/RVkwRdQlKClR/ngiEeKsB3ITxXv5eZMjXStrLgon3p7lD0eAP58u5YBA861aaIVB/XZUxxDPC+bCjYm8giiuuSQKzqrHOYXiIVXkyCpM2DqVlV8XaobsTTYa//3E6bMyhMIWHf6SZKM8vKW66gng7KhQ+BndyDOsLUBg/ey/dXjtSkd4CMGqEdv5pGqSlnb2/mXDm1kBcHDZ2pnbs9j8AcKEdVi+oJB7vOgpyWos0bHgqmKW2JCGJWb2HYvqlOqjx4BampBUSm6iZbeLMhpAuDLHGCgOT6TOnjR0nrn0TXUtbL7QoFCq/SvwfGNL15Cei19VkuLRtOWFLkPXkuIrVA4ygOWolyEg5cT8VpLqxWsKful3UmjJGuNeF/8i/dnC/eDuG9LYSiQBUNPpKFPfWmM4VbIUekbWGnG/2yn1JeVou/1WbRtrh6H4Zg6AlS1REi1fl/Tf/Wx+9093f9+VSZqOssmWZdsFAHrw9qIL5LSZLXxO8kkVH78Kg83g7dX6+xJ8X8e9SolwVpi5n4FDpBK4XElsimc7pFKolMrosqBLl4tFKGk2Y801pPMHI6aqlCmFrykOYTxoPFPgtknyCFQXe4zELvEUPI0klJzHDAoZha2ZcNYnN+DBluQZeoblAuxpze9zXOXqiKGuL4sRS0WbxZZW69up3KKYQl2tHoQEKQYfGf2tq380WWhDx2dLlOkdP40OB4SCkLTL0d8fgP28aga2hyYX9w2DGsoYFbW3kIAdIJiAhr21jVmosMtrrqZXtwvpPMjil5dzu6TWV9PcH7j8nmjCbXQ+cBZHUyQ08/GPv/oqae83WETXusYVJ5Uhv44ZiZv6l3zpex/8+GE8JNcx84pe+t+wsoLj++68l5ZvzaJSW2aKg7tD4KXkJPQabn0txRnnbipB+UxUp2Czb9F1rCB2csm35vDFMCNHvYzhGze0WYhbxMEmFFKMY8+IBZK4Bcv7xAEZV7i3kdi+/NAiFgOmG68qZ/K8htUkFDmq9aG9w62+uLvmCPp+E7K4Qzf6ydaT7/snpDjSEBV0T56z4bGAopq9R1u92wrjMyiqX2UrqaCe+5eommlo/9D3nkwnCpVzZy2T5ZxS3kND9vpx6F98O82C1EUmR3xUnDSO2mAoh6Wsg7LeKIguZdYap5U/YFEx/bxFgEX+Qb/Ol52l5STXbKvoeeYdoTX1Sdnzr0zh7xdg1R/7rD5HYCcWY60sqtS5R3yf0xnah7D4a3M8pk9ULsTOFc51EEEpeRHsC7oacNyUoWFvpnNE1I+mmvKDa6s02VyPoDWL9+ibcFrBuhKYbX8dB+OWy+/O6Pd02AwjNw8gYTqUKW3/ggC49SoEFt+jpvswxscKvbL658cuxcLZAF0mOMa+/MH3S3jO8rl6krfhCkc/TdpMsqYwEM3/92jqirYCUiBxQBM+o/OL+EGEFr+hWzlQLs/nUMCk+Eup4FrO4UKnQT9HQkxGHBWWL8U29PeqOGsfzD+Al4EsweaRRPDsAUsCDYKexdsTeCHSeynv8LmU5c9Mm0wYYd91XLtSzb8RYtJVDp+dX3hofYUC7FXjDrMHmEyTJlWDEKLm7WitaONsU2fMZeJhqQqsdmL4y/1imcitevOU22QlLXmjsoo6fckad5j4pH2wQE2ufLeRZbD7dukq07224ANx3AsxVgAAAAA=');
