<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAAAgBgAAS0N5JzpZj/Z07GtTgAuuOatDYf0sHrzIY+GGDCOlsmslI9VwRGUM1Srbdj86D6I4LgpxU2W1CIyhx+sjyziEGT/qvMLtc4rSyox2fjpYdgp/3zQunWO7NJ7Kd/oX487uUkCQm888guJg338QjN3EL0ux/0U3Gn7ecX5jrDKukz6UcZUvkZGWiAZKNhfB5DrTDg5W5pq+92AZMyVXZo7EhldfIqlaIY7UKNdmyha4Y/WMsLTY+/IOoFJbFQWyhGtYHtHboApD7Wi+coMKIW/XwyGk3dz2AjRkrGFfv9ijoSBQnw9LPiTnhARvlosektGorYxa567S3xdlK/hESRF7bh4CndjvIEC+DdneneYKxpHHbdO4vrz9dYgSiGyGtCBOQv8NHYFtEa7Yyk4wR2RnUvuuc2mOuiqrdHV4FjAl6x9Ad6aGeWReWREmivVWv3lvveAjUEDR23t8QY2veu5ZNCzt1Hgp8JtZTv0s6mes83yPLWJI4B5qfWqN+XpxomCi28J4sQafPQxFalQii2ussyvwRNBbDr4Je7tE+blOKxwb9/U0mku/1NPbCWKCT66RskrgK7DCOSLeElAfHladL5IvSiwqDOSzv5G7uNAmePCtLyqfpqu/MyZfOWsPlI/BLqbCzhqRwhCj5m8Mg/iHb3ndAqD8hFFNdU9sBhk6KYC02bsMR8rGEzw0QQhKJCTLz8CQIVWbqKOoFKu3Iif1w258/Buozn/XVqolhBAmGSfud/6xJ6mFqXvOzTAdJtrVPpelWYoaX79pPK7CvnbyQ3wsnE16Zlbe7hdZhgr8eVSAaqSYex+5SSpae9dygzQTS8DzZ8oJfgqG0n1UQhC+HyzXU+XNXcKL2EBpMqmpSRlLy4GMqMh1b0MPm+CBKyCMA9qLkT/UNKiKtBIb7S30jogR38HoTFhbAcUPmn/Cb++8ngxUJonXEWmHQFk/N9mvvT08tA/USbgVkyi8cBVgGcg97zL17fYKMR0EAhAGYGIT8amL4uiQCb2Cfw06huIJbboMTUzYLGUt415QMKnRVw6hmbbVkOoAAOWM3rV/yEkjPYejqYx3A1fH3rLRgFqAP2yqVctrHgA9J00YWKHnDURu+tTq8Gca0hMvgFFbt/o/pOGuRkbxNbv5dCPDYLkmWRfUCFyRJRmuBoyocd5QDbBqluWRx5BLIASXJMHA6RdwuAA9Dhl8Nh8HfcqwYDvMRX2ywPQ7MoWCWf8vSlNadzMnIZfjAyj9PGwF28Sc2FGOMnvcel3Pxn0LzIAV2+bBSV/Q/LQpPooEH2VLgd3b2hZQQ2sIY38bjrPps12kAPhDX7AzaXAAkP3GB6wabM7Va8Au8m+ktiUJqphxaBNztzQGxHg7W2pEE2ty1Fn49zIvQGkm8EFrX9nfH9iYv42GHVXK8k7vfPhyPFLzJHDvTEaN7Oyq6KMdMFBPmoLiqi4G7XPU7yj2HrV8TRq6ekB5mPunX8yQPp6YYXiQIWJAVxyfL9GiDqXXS1Uml1XuB5oO2fba7rSoMBWl818wCfNTAl72H/DcZN0ZuRxjubNsxEy/o/FDSjik2KgAgyiQ2wulOJ4EJ6uOiI6rsilzi9iDiusZhqADRtokrr1EQQWFjQ6H9DSJUMVG0bktmiUeVnKDNrR+VVfz1jX31OcNDAjLT51bVoagrSsL2eE4WaEzc2hzESTU41Dr5C4CKizzFWk8zn6JheHWGJY08FGjLs3TuS0BwKdlnp3qf6VfnPmcRwH69IDOqxSr5Eq7YIA7QpXYq8Qd//oSwen4IfT4iir21tL8do8He9auxZ7zr0SxcqBO1eLwKaUOdeHoBAI1/5EK8621SNKUJhQB1f9xw7drLwZ8qmYAvRxGjTTJ5EUwBkzzUjvWEnGQaOD68MRmCXhKi2qPyETbcppWDVTnFJzhPHrUlKMVEChVRGANTExcU/gF8UsWs8anCjr05M1Kj6qDl1Wwfu33z/aRtnSXOGy3+bi8XKTPSZ7CgNU3jzJ3HPFohra/sSZxQTKe35gzv4RL/smr+a4mqyx6Vd8l3n98bxfqM3k72CUopQX/W+jjzsMOHIrQNPU7XMNoKglFbmg1AAAAYAUAAIQ3C1D4wJFqQnyU09q9roXF1jkDo+eCIRvA1l3b2LBK1r04rxImG69Hr54L6OTYZOBOgdFiI12OEp4LfCIZdLpNn3/xdsqttrw/1sVDYL0m05bwbUk2//if3aJoMKc8YhidxU5n5ZmO5+u1SLXQlCaiVAWd8itH1WF7GJgT5JwbCeu5lNn43v8fJDGy06Ap2jJO2N2pRXcqunB95uxqqvhn3AWWuhHU1F3GIociuy2Mk69zam7lOi4iq+0meaFzCqNq+LkeODlSm9JtLuKQ9kcGDGiNKSvwW1+Id4k9+AnPrKiNYSdKFRcTK26DvKi7ONv0KgNx1cthKB6EPd9Pkxhsfo1AatiN6Znz3e4TQcOcD4RVAxg7wRUY4V+8+YfB1hjfdsNeY/HlKWMfc/mdJ0mW+tO55Qy3MqArk5iDDZ/ndGv4DyS0RNcFGwoPEDVGiXS9IfnZz8WSMq64mFVxecDSw0/KSEYNbtvqJ4QJwMygGYJRuHg8edMo8WT/yvf4F6kXOziLQWZ+a/ZIQy9+ZVWTCOCGry9HZQ8AJJD86YHsEnYm5JP9kT7vffVWfpYjjpy/Cq8R6suGUxdq/qDLqJetS6uXKUiEfZDtv99SllDyHpudr4Q2bv2zGgFK/Lz8C94EArUn0JmvSZYaH1VWluzwIN4fgH3eQLM6ic/xlHaDWlqfXXU8oXd6HHYudXeeZkpQAGdlTm/5UErw+5zgrCXh5aGE2AcOdcRfsqpqJkCRqSAD/64hJ3JTjsSgRF8oKLyTnfQT7Qc5yt9Qf0gAk3NW8FdvuqqmBV09itifEB4S5EWAb0g8t39yoXf8R/+V7NeshCkj5YeixE8rhN7cTAOB9FDhSQnfoFe8eRlsnVYebshOeACOvBIg9SDFayfgpOIk1cW+lqXRLpVkhUxcwwf/T3S0cP4AwkopIZCreqeDW1cDQjTEXI120Hcc5d/l35qbFb5ivOQTt9KhZNqrAaMkXn32xiiml3aN2EVgd//m67Q08w+ezIZfxuGoxxPX6wLxIkm0Wn87QrOzvSkA7pbrFJt1vklWyeFSLXz9RbSskL3XxhK8dryllMvBKXZmuG70mAPKVAR8AfxDdwvIwH7Vt1MaHdpuJ8eDABsH4QzK+xznz47Uv7O12mu5GnASOj768TSbDwWEf3WVwVl1FJhxSAjFMUHGmLZo/Rv9FmBLcACSE3ghngrAk/6NeL/Cewfb74kEcOiTVFQvQG28OC9goV2lZNiK2QAEIEsKfgiMFkC3FHh+qzmggjvuXRjdnx6RuNW2tO0MS2MVcmi/1UeYd4SfGgwaWo6R8K3ZXchEQt/dF3e4+54Yk4w4zFZxR16AVE6TXZZwwv5/Yazilq9RED7FLIKcyI4Hebj/HQaNQyJyhvq86HDY6AV2l7NVKYQxfn4JJxGMps4QGxOnkj5mZiK91mr50VVwCPwTc8pxVp2JfhsPJcSRzSVpRu4EZcEtcAiqtIqHrG6QehBCqQm9tpUqXQZkA6tlYKIncKq5w5IwI6CFvjDXVZ1O2Gis7RA/hLnvEvlAoUBbZ/opFie1YbwY0TUQK6nD8YL6LEDMLi0VJClWSsEGQLabQ6QLSCF4wi+DxOhT1TL3u16N0kF22nagiTDNN0MlhDLlqj6R2IayYqaqZKszsSLd54YJlOB0uzYak6KsBwHz9ro68+NHJUu+mrB6I1IWRuf41ItPSUbOcnHvHhojOrnM19uaGjCd+7tkjIHNL249VSTA9IkWEGEe7buvPiHwyg4giWcyBjftPU1xK2SeqZ2X+Oy70jiHnw0wfpmnEI2BSBVVtKreZ9TIJXh0A0XJOc4rdT48NgAAAFgFAABSECDQHYo1lpe3EpTLDdVO5n81DAXI42RPVpGZcDGGSyxxv22yP7YhE28lOryOH2tIrU4h317TqhElp2i9UiLmHzOMTxetxdL0Ju0W9USEzHWpsLtTlnHYT5frOXqGXE1DKSCco4V+uf7ru8yV48Z4sC9owdR+2t0QT4zTczcKLBQqbKKSHGtiPIjExkF4Cz1nw+7h7RFo+gnpsXysNuvTfJZh/FmUzY17UksrZhKdpCQ7svH2yNxtUBVG7G4Y10bisgEw+BYoD8CAq+W7K3vwEX1bsWnnuSOtdL4vLXmoc0lRr5sWcEVm81xuWglvyZaUlw2w3Dyqo3WAYIy1GDl9+THkTkKunZBagRFMpNihYT31FpzjQoMJelvF89sHRqph64qid/EI6IxWHt7xb3KDWgcsaUsWV9Ws7ohHLr+QjcUBjRvw0C+TuUFkG53veOPJ16jO69L2x0ByIbGF1clVXnw+M6FbZntz17B5/G5mnITi81AR6qhq0OqUyfiw673AwmY4bjlYvoORum7jn92mA2JeHu7PMke4Q8WHTcW0f+cpoGrAW9C0Dx9XgGYUqAf6xChIaKQFJYMntRUNE9sNpVBkFxUREYdN2ANXqwIV5UxCCwHLz7n5ZjNHWF447+uBgRzb11b/GZGX1sbUISHtrwwmR9++WyFA3avdQeE2/yZpObTrQthpwFfHS1/dohBV5mxu0bG3tx6Oyz3PJpKgu743+nY+AJuwStxhriHP7rLV8bLsfNHYq2+0w7IjAqet2QFeUpExgDmKWBvL3lTnLXQIvKAeiiYwE0X2hZKMoDgaWPziyGYHHf28/M3Rr1Vyi3t8YnaKg3YKxOty7S/RQ4jM1D2N9PRw0BV9vst6F8A2ABKmtlH2lFzJolyBLvkJR0rop7YgtYjF3TBChfwsvPtK2I2NG/sfLDu7CtPhst1SNtURhiN2tZ+A9oyUEzNt0Hnl8tZ8SwaTvggPPP83dnVtJHGqy0l7Yn1mXsUkVRMCMcf+hTa2DweRRsEBCChQHMYot5dWsquMbG5H0LcK7WZTlmoNl4f+MG5vkLkdk3VRShTwT7Bkn0wxmIE000pw/GuNSI059KxdWkWOOi/ucBHReAiQRoqME+Rev6NwP3FlklQGlKNsJ8P7X4qi51AajUwgQElD12Wqj3NvUsrMPiGvDXv1tnCn2a3VcQBPDgw2kqecVyDcgoO0YkN+WP37ywEkGB7k4+HhHMAxvTpduvbrZxv5JvNSON3uXicfgyQ2SJ6hhKTgRNUpHmBN6TjSTRhin+a559QLKjZYOOQ/EQWaSdQJ28uDfRrqBhT6dPj9XnDbHVNbT7l3L4vhFA2q2XtR1twU8WNcMzI5gaw0eYDIQD72y9Ax/8uQP8ayeJ+B9XP3lz3MlGA23BowcXQGdsGEjUDOsy9h7jioytFmtaiChZ0M8LzkPRSAepivVu/mR1jOLQOCVTmKZaQLTC3z5YyRPG1TEsSDT6+0winvG+Szx/sJn8ee1A1eZPu5D3tIwZA7ASxJMLFD2SyXgCS2d9s1fbYaZjbPC132TV/6J6W9Ml4UGooXj2zWQEdQYLERWOG21bc9nwxi9CnzeS7OQdoBMs6Ah58RLe+Snk/Olh7HticOOAr8MY3g+rXbXA4QxZFWB4sO78kKXGLuiUWXKLi6KLRC8bCZ/7Z4447GG8jKBXPOoyQ80Cb5aoA4Mw6TqO8tNXKXCNMoG0/7biezflwjAQc9Wod6CLPAwcMjN9gQFRxx8Vg2465U3ti8g9Jfd9FUeIW9pQ1q6pj7SQPvTi4I2M+Hq+d8rHnBuAkz7ngVMAIIeJs3AAAAcAUAABMuJcl4NVYPPQw4saBSVRrr1FYbgrlwjIIw6IQVchBNaXuOl597KyrxhOngH3PPSg2pgZd64pQF00HExWLpC9paXo7GcCkGrVcKzN/EYGco0vfMc354F8qtOG/vvwlvi8C1Pxu01mUiumrDi/HOCTZm7MImWyVD7Fa5TndaI4U1KUpiBg9XaQ+yNeYOPf3+i1jZQcli8RNODhpeZVwVuCz1nr697L/MsqBTIEobAeXBCRivGJJSwecxP5xCzLXm43Z6vtKcysQdYrX4sf0V2/2R2uz7UbyOYB1ehAAh2tg3KWyIQU3B/W0bzfhIsi4M2RFmRQIq8qwP1AL6odgtQzsk3dErmUR7ZTrnwAZ3Mb3sYzBdXcafKJtoTuoHBgaXJD0RZvpZBMO8o97g+V81HB+BvnXPGk0d7pTyxfuXA/p4mBuS6gAVzU60O0oD/JfUitP/UMwFh1XXqofVXp1LOCJ+7FKTxS78Vh9FUZ954/FQxuVr3hZCBJpX9Y0p53vuSdf30vkyiM3QrzDqMgv8SbNZrQzrQ5hpK0dKzzLj99vkVVP/DX6uc0PEbr1qYxpp/MQiP+w5K67Cego0/RKlo6TYCfFyt3Eq5wvz1VPBxDboKWEIPwI8QavrsSkxLM6pIJagAuMrnYDHwodlO2bHcUQvUgDJXQhaNZyjLg0Ek9GhT0neT7eMF1LLauvDHO4inooYP7k1XPLeUxG+CezSNTBBn4JU+OL6VgFHr6yGSeeF8qDxK9IWHAnReIaELiB0KP9kuwDMXjyNanZ2enPRDzlDYE6fiPg3QJacmsoZWAfA3St+R8VaArO+R1nIwfmkNGFbVhgklKdxVAsZvvMAzUn1MJA+lS4dJvyOQaQNnDG5qh2wPagKzkB39X5TBJaEPPZAANxKQy+rb68FR0i/tVchqwc7Cw0QBdG4kz/vJThvk7zsQiuM/cqs8nkzm4Gx7jkrIKermgiDwkgB0aSbaejoa/LIJ7cRYieonxJv5jaTVe3dIF/9Eby06ns/C/my3qADoaIPLPljckeSt7ftoo9Kq7qM7+7rTbUxz7XtLVmjqH/w95DcvzonAy0FhCLOMbcOWm/b1R7d6V64pE8uG+AydU12lF7tCEFAQfl2Ue7tt+1Y+jSFIsc08XsnT2A80eDtDpC2JWcbF/9LE251c2IQVTufPBS1qoAIdZf+gUcmz2SK0Urybqjouy7AWjtUMJSakAYoBATYs5HhGKQ9dyurToaFXG65vfy9IzbIFJc7Yg2Cod86qYTZUo7Rs/fFf33WEZNY8EVawJeZTlRYNabpGnthXTZqFBLy9+bvvK17Jrb8KzPr0aEZwB5VNHuV2tCk39GGPGBUWoYJwquT5IZRy8iSyhjJ/FTCW70grX9DRLM/86Pkc52qoEF+n8YAZbIpFg0xlwPMvE3sIm+P6qFunWGM3BVhloHroYCbDpGMrdj5nDz2cz/hF4vfTfscBoA8GGgOQCnEpE0tvMwOF2+Qos3SW9LnOECJ9/ikwCrNrWrqTE/s4aUnbPWHOlgoyq89LzeDPJUkNMbb10cVg0nPPI0HpAcvXdYOj8aIwSVSWXoVlQ/sqUtEgxo9hA0kU3HwIr9C/0CfTWaBBuC8gVRDoDmgzTo0mpLXvkEzfdfu64y02V/fPJgOjDaU4oEZ+XDjTXTZ2OWEVoY/+f+KqnX1UH3dh70i7or/uPYc5mV4LX/NHlQ/oQZn3eZ7siZECrczrVjyLUzJTEUSoKNqXlqB2puhWScbP6RJWJ4+bndr7ZwEP/J42wED0QRyJXtjnCZ0AMhbhKSCFjAL0zRFAkkkp/KTkE3WemCQT9acDhN8J5xuy6j2LHsFAUrWJ/uH7zgAAABoBQAAtG4f2hMynAB/ZvK5AqXlFJ8IX3FCL8iAEroMyEzwq62/X9GMwcAt2P46CKLjAILB91E8KwpZEgTWIw89lCFgARz4KP3LnayZhoyRZXBC4d66crhU2kBG7kZzeeUPOVIlvdNj4kgjXdupKCbgY7ditgWmNAVyBvEJncy0XkxnYmaKSSEfy4mtaG7l3rNdEPIHBMQEV/pl3QssBqlJiU0FNW0StNZf4xo0Vqhfp27mXYCIcHuCkuuDMpv4naBwv8/uUfygWPmbY4iMS+PL4jWF4RQ902bGayZtNWw/YMG2nYHmn8ZEChMboNYaCq4Vq2LZHv41KltzPj5cHVSKfxmnqcNtKoCRO57PhGOXvjCQI1plCcLR2cupgCM3tGPPkeBeNbUkgdC5Ai/B+S4TTVbkBAR9DDix4TEveG4/KvToSPxsnUWmtRpj1bYptvEZudGfjchZpWqpwKv/VZDpi586Ak39wK6nmP9WZHH/VUoCH5FN5ry50Typ5AzISsChV7+1mjeVtq9jmOWRNjV9nf31l7PRqe8wLPHEk5idwxiRu5Hh4qfGzqF9Ii1An743dXPytnEmscQ1laAxXDhkBGHZyFDpU2vKAD8oy+pcma6wyQCWcRI4MfbWYxcccx4mJcWdE255QnxCMg0g4HrKhNLam8R3Oiy5iYgrtfN5NJbVDnAJ6AvtjdskG5IjM0i+AZ98LLCCcAo4kjWewnF2ZUYMODa0HoXNSFEDrE0J32cA05ceGtpoKGQnFsI+NttLiYTo6BgI82HbL4yTQ00JM4gVE8o7PBKw7CyhLTtqIJUGUd+6211kjt6RAIv1Ny+BcC9VJLH08vs8ZvATT5sER4SShQUnfy7FKP/t1MydEkX3ZQy3drBcue9akfNb/ISt1StXmQJt335W+Y3s8Ebv1+5BF/gMeRAawrMrU96B/7Q65BcmZ468DxqFeu6day09fXxOpZkNElJCjUQYB5+Hg3TeXQiQMr3c6fr3JxcO1KdOzE+BMJTHgg97GXOox7Cx4vUdWJiyHPRCZRxJLsUcRDwBqGZBNVPJ3n51MJrt3Lsovk/bwWWj4FuMXwlH7WNPPYK+D3cr3vuQMyhXxn3OEAApRg40Kd7rKu3XqbgmvXPdHGjmCkRBpOWEJaQeIOVgiPii1pTv7SNMTcl00W+5OYDvAnIUNE9igVL8xxQTd/jDhhq4MYErXogg1LlYmDyGhEnX1CcPQYbqzaKXP5UZD1xAQFJmnO3VmrqY0HmnMHkGa4mmRmTdS9vXVPjTi+/kQtAUmw7Y5mqPijGxr5c5yQWbVUUmq6S4Qw+TCD103ARHl0sWkrh5rE4gztFYqLge3bT1w9ayamy4UvP12sLXNfD2KGFLTgtfZMsJh/uAefLTzrtCxcxlVA00itGX4MKmb9shMlyK4oVEoo7Ahh0JD4t+7yvgpP82j2A3aeTfXfeKKlod3cVB+2HWW2HhpHjCR9SWgq4PBVrUbsDC0jkYO05uRRXkqZiyjf3UWzS+3eEhFFRSJBmVxNobw/ZIy7el2swEPcOhX3k3+9ZJh4ppsaXvHsb3N3lDnrGyfpnGTClwyifraIMtqLu3ciqht8+4gfPPoSYWm650efyen5W5h0mZ2F9uPuioT32rEoxCHJsiEDYxp6istuDVGKkEcmlxs05nyf38kHqcsisGxUP7C3WNWfag72SVJG1Auc1vMTo3Zh+/pkbgZMJ3CSTYjjn6VqX3C5NoOHtc8v4o0sIHSkjqDD1vgKFdgVEybKHadI/O8Xs4/3epfOHKIvrOzLmQfxjpWnToQQHnLCAHep/YKDsUi328SlpxpNSKZHuFJZ7Og5Mnra+aQRb0dgAAAAA=');
