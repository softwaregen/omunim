<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('59EA6C618D682B20AAQAAAAWAAAABIgAAACABAAAAAAAAAD/vrSy8cw3IN3yoLSTNtjsNRXb0K1HKXPVkW+qa+aAxaXozTvKeTan0o5lV+zLiOKNIFR0hhDx9m5StPbYhbULAVhnLvPROQ07SRA9P9/MrTVz3lLOXXN9XTdOFouLoysKFXWu7cLWitcCFSJ8we1QgpEVyQfSfqBmE6ouI/bB5jI4VqPPfDkAwjQAAACYDQAAlU7fp/rFAQvInQjqAYm5cdLDNei+ld8Z754IvyuPMBfdLl7iwmxyenBBfFg+8XQRJcGk2v2jYVyR2luxWjUSx6ig3HC8zBdxuOaTuO5exzdxCS60o8wPVZem6br/VaeLB7BhoMBiDIMCLxeUz2x2/LIhDXSDnCoYFa7+1gnPDxXlYl7BIAsVUkOxZsjurEEFgtvETSr3r+RSvPTHjU25rAtIrXaN319zuywXuqCoUtQRIfyxHiojqDHFz3BFEwEMBMWbDJS4AwUDx11j2IGRHlAPRiIb4+Cb62XCSxkoWcyeci8KNdSGx6x6nPlBb9qA1t2GYh3vfFyrajC+pzb7SXOLOq014KhvLWnCtQrS8E//6zaul/6rVKj42suAfb7w9pggXCWMUJHgskN8urTNIor7uTjWl2esLYklyEWjWvoxzFDfzmZzwNvUuhVl2HYAjceSzMYD7mV+JFkDkA2vwMPgWvkoAfyq0zq8GygG4w4vO0Dvxx8MwhGuvQnKHmZ0RO9ZpUifkH/zkPTxCdoHMUSKREJgImu2ZF0kWwOy31ovKJ80D0dK1unZi6a6Wu2cSrvRY7Ht+/dvbjlHuOOWFzGhjQ6ErbmnvTEC1SOl2RYr1Ah7BXx46ixahsx6l/TTTQynicxuerpwAmfSqwaECO5sntlOgoaJNwJllrBNCRDltPhMm57hEMgxjAnuBDOxEgoePCUOVUFf1bpeqMubjS/pC6orzak7IvPJks0sdZ8I4U+j5C3nZMJpXgjkb3W8UBtDtpYkg8r1z+2JvL4+yRERKPaOdMiR02LRGvkRziEso4CNazTA63or0glFJzgpv9uXqPLwY79BD81htpuZutChS7Iszi4To7gJQSelvbDJgzj/By5xIAmIy1sqouatKaYvlpk3uWz3YH5e2X5iPNXOmgCQZNSmq+BRLnIJzpQ80m58hpXwuU2epqlIPFHS1FtZkzDa46ZGSZ0QSvOayaXhJdKuMjh93ajgXJtcK2jxPNRtvxsMHt4ugzrEPqKHkTSj3fZM+++CfuC0hkDMAA3xZtmMkM/BWcdJfgr3GvxCxaoykZRT7iYUI8aAPxKJWUPfalVX+Po9T/BEQeOiTV0l8VYTjo67zJkKIQFBzy44E0Kd5llrC1MifMmGIijsBdp9uTghcdgGYyGPtMoj68+dOlDb9aZUgcmENWfiyndtSjXymco0GOYuauG5J6CrNH7C/VKmVAVHmQZoiNPEPcXX8QrKnIcTUzrUvvI0Yraj7+uqkBgMIafc2w5q/la15qbFYQxlwI6Qpa+WjJO6ywar3P7a5Ppu1oUqICURKCieo5sqHeCVKxwaTmwUilvf3UqmK7ir4fc7AHJ0F+PEF8FfQMcv8w1nnf5+Syajdmv18pikhiVRvqBXrpJO7UWhEd6JTgwt1/qfeX522zYnHyW2E0Tv2xpUv5G5GNhpzhHileLS1xGSZ8D66jf6n8e/7240C1ST9tgTj6DJaXdU2cJezcSWSfo+ZpBn1t5yxwbHiPk+yhMVV7K8/HqMj9bWFTUa7uIUfmUd3jWwzXUEirw0C4s35gx3a5SS7wyHcZpzeTd7Ob8rMg16MIEBGbTcz39TmyqIbSJZ+5/b2OkvIK3PJ4KdnzWNxuNbUSt2HMhUAQr49+ydwiHdoSKBnyaY6ZmX4IAvmI4NzZF4CQ13FHAb9srB8lYY2g8ciFxWHQc1gC+40j8ZLWteCT0Gmcdbk0nf0EsD+u62H82YXSF/lHU5as+ASUcQcvJWG6IC8nEmqQ5uWh5CmpIPpc4zj3M511Kb9ry1mEtdKABLQ1WCpOhOregE7dvEo95mBr1WAIw1WYu1McITOSOA7iRTPuf3VOpwdOtMzJgIJAbSSKk91ae8jw6xowLcVoPT5Tjzx1czbYGb1BoZtOfOjTS4YLyZeTkc3hWpUqqEc+by+nXNgJ9qkTx5Ust3uBIyuKbS+aci6YIY5j4yTsTWfY2ycD9NLxr04o8HP1AdOZLdO5GIVC4u4NN63CvzN4xRSH/FfF3AwlGvLZ2mxPsPdW0NdbPDhhdfym4kNmzHa2iF51LSeICej5LqRMYyzmkr+1b02YSR+ZZ54LJVo6mFMtMZPAkaztqdaAkJnRgB+nlEUBgcL4u0fbvKamrApYLCJV0MiUkwjwmQ3G145CaFK56RlGlnHWxWpLkek/Pl4p+qmSCQwCzD2VrS+6HUi9/Y7dltV4O/HXxunujxmMdLFeHN5dZxNf5rvaNVD5J5zZFdf4bPMBdb622lDhvWm+yc4x/y0ffpqD04Pl0OeTrUA2jNcWmue16xStvcc7ZfxtPNa+WciARdzSIaWBWLTRTKChpaqaxnOgmmjuPWDWiF8LhI8qwGFb0qNWjtAggDauYCG091+crB/K8HmsgDnHI6dSzUxkwMf1u2xxYFHxsF7QLcAYei/jOab21BILzEdx6kCDAjp40CVP7vnKZQR8WkA879jQeXIODkGjVxa9biN148xUW9Kewiddm2YsR/tjyWxWo3sV5Rg8H3Th85It6Nhb9T0lIg7Ge3VMl7aJuYXEGdPM3bJMFgcpX+OeGcoRPonxS/swpOXiUPcWScIn/12tlqtZ68873V9m7BL/jx5NzOR+rbOIF6punnRmQV0Iob/5f+ENrEraklzYJa0M1zOzEv7jwetoKcwwFE+Q/tXqwutK+DLBrKIniF2g8ql2PCc0690roJLOhfhE6TVNzPZ62Vv/3oKLaWqLOB50Q3Le1xP88UKdl41cuTSVjIzyyesyQgkMPWEzcxOmKtRBBAlW/NJ1xImpL5/Vxz7RxDbeVJCiZ9jp7AoseRAbtZ/2XQ8007ozN3eHtkWbkQflxHkvHD1SGZSRi6xXSx65vnI7KVpGw20sq1bXeGKBrI+GuQZLkxiNhbOg2AGVRmtYVRyWajW08ndrJr9wpHiD4Bi3Dpegq7KHfhWSoRpFDpoI7uV55/UD2V+6nTYtXGKHv6YWom28OVaEaS/YMwcEGDHj6uuz5DTzuUImBujTbPz0aOwYLazFCsSYqpPPeGGIGAF1z7m0WaqyI8LjzT4/U2sVcOnRbbXZIPvkUcVDXMOVbcsYBnJ1GHWHunkEK1hUFNcuxYMM03zw182x7fv34NdNGkDOdNkT8+DUJVIminusNEo+UwC5dCcO4uRb/AjOKuYFdjHQhZBuRqgDtpujYXv+jrnPqHTvj4SaHH+vO7KWTxDVeJukXus0H/Jwz19mQG3Cj3FlvuRuG9s06/yetGM2yG9yM7YOPF+F2x1mUQWOFzauL2GQKnP5juLsv0pcVUUiFm8aHV7egeKMBXW5spCJF1iV7y1jhzOnKvNIeqT9x/kVo17UI/5igBi9wgl0B+IBcAHKU0ZmSYPNZKe60XcITTQmYOZ7sneovcfzs8mLJ4q6k+/LAUcUu43W0nShjobyf9kzKMCKkETB6Q0mX31WLA3PieZ8nUztdu/MONeEv/vclEJRqixOhg9Q8bb9+aHzohYVJ1XzhAmmgOQsrGCLT3fcr8qmQUApOUpRw49axJ9oz2G7hiwCnGOXb8SxUsf/9HbOV1SjWzSSQV3La2Cj6fXGAMZCqJ46kC0mVM+43p6ruEIN91nIbLfyuzISE/tIajSDzPuIE5UKOQIlnZ93KGWPSQOg8LD5x+zumEBsbLEVRFti5N4JdU9AYLckH6C/nKfDd8Uy7jo5s9735uUbLHBOnHQhKvvDuYdbjVOlA24IpaUjZIToQ5XkMPaTs9JNQDy2bd7Wp9Y2o1svL9ytzvtzFc0dl1QrWO0WSSb96q3ixmIqEoG+ZyLocktEiMfioT44M1ZETTeODXrbUHCHAPWzqElYmJPNLUjL2SLq7SFp8fozLQVwrajhTHKQ6BHyEZuEzmgVLylx7vVn+DL+zhiry+K6M8PLz8DtLCaNufmJv44CdN/mcavZohffCBItqkIZAcaLapZBHV2dLaWCupRcomokzqz/QTSt6NDN0L9THiDk6hWlelm9my+F3vGb7W3icU8ov8naURcTLFBaITYLj+xNZF8uAl4XMRQWYXKQE66yOLxXkfGnQ+paYoUymjcKU+51QqTnPlvzn6GqQ8RBdFQvgfbhedH1Sm6ez9gEtGMt3bFYOVjgfX+gEWflf9g4tU1oob9dJV0GFWygji9Yh0WnxVCPtioIxOE9B3w0SxJfwoEBl0qmFT5wxr3dqJpkbGKJrOVBen5Cq9C//xuGPW5lP0ahhdpGHoGY09qZevRjVdfGR4CQsBjBP5DF9AD4BCle+lQgaV7moQUZP6C1Ln3eetVGb36Y/12Foc+wV4s8/AO7BjP1JAxgByXfjRntkHuNiSqQkqqcNE1KSJ62/hVNbsUe0O88kMnbKMdAs3SfwGOQxxOh0R3X3X/ncQLoxcfsiOcss6lQdgv00dody+i1icV7dLhhUoUr23BNIv2auY/07FVbu+S4qeIoYGkAxi5fqXxLeeYOFre1xJTbOlfJf3Qw2dJlmwjH0W2MVb5z/DLUv5dkwiHrO7OH9nGXV96CpqMjRLtJB5PFaRCuq29jA085JVcnaolgjhJIlxjDmlHPplQGfeTmpHkSvoszUVQD3MnbW8RhWl/nGnmlLsbsejIepL9thd/++Za+mxq27fWaB+ap9uNQAAAEAMAABhIGGcNhFvDqZepWEWaiuJnGKK5pjdpydJsdsIhl+kpkiVChi2AKzzJiQfnz4954ge2p2Mh0Zo73ATmudlKPJaDAYztvAs2Iwlk9LRsKDp6/XruDUWYdv09XQJ+H0PDRUDNuw3oGtags996c9rY89nRZCzKxugMi84yKLb2KtM0l497I63GAm50CBlmRh8VkJMnzCr7vC7BHF2KfCp6+Ibl33uQEyB8nYV4tGDnGmPiEGEqOw7ute9GAXYkz+Mbdpqfyfd+4QlXI71OczkwmRr+RMxGzLRlZUdPyPZPYETEMLoQKoK1L12JQlfyLO6Oif3DTzS4xmmkZlgRc9yfoIJX5+cG6VjrZ3WJVBO7ctVFTR8yCSMMdJVXghh9AEaCvzcQPb4dsyVNHYGB0vwk9qWrY7i4ezEhfI3F0iPZo6JWJz2PtWwdQbJnuPRfnIpc/jOt8OlvRSdshSAKdF6Kofnn2OLnMVoawi5/veUpMQDL7pO1D/SXfHEqX4tdITM23sjcyiqsmoVQXPu+kLDEmDslbZgpVRKyKK2aGMU/6eUpUctlWQy0OiB17d8k1rDNOzxiMX76irJvEYrvZOOgvyPI1VyK7+0wNfZH4qphyngcHmyAtMvhaQyIVhwxkJlvqkolpl6OCkcfmIEZ1NrjQZjz84w5hSXdwSUjql99cDxKurkGgGrzRna96cHaib9UYkyxh0SDyxSlh80LzX7euTM2R90+QiqzZ4D29xXGpIw4gSL3D01tNmUvGMB9IRQT5FL7W5uhE/oXHBkqFOT/OioKivA/JVUqD36MKD6NUq1yinrcLbSEVKvM9N+K3zK6Njmb4xGyDlpgwLtrQiJ/rj6CdSj0eDoX+QG66JFGYS+Nw5s+N1UHIfSLTWS+ehjocf+Z3WnwVcaM8ofR0siVTc5V1t7DVNGZmS38ILGyBSaJA79FBavM+LS/y5K2ltP3ROtNU2VeYWINA2rjo8uWA0eU41GxQOnFVvoHhml7YA/Kg+Mci8Ri2sn1eHIJTnXlprDKuEBhVz0d+BFgGGeH0jKKDY6Nm6hbPDbo+b91rJfXIiBKGXMW17K1Ec2acH/y5wPQtfKNfgZfzy5VNTMqPLcJd5jHUkemspLbwPwC8IVf1Df0CHdQHTOehdQ+6KKf32jzs2TCI5/GOI6b5vDwkLU15Cuzpi0Xl3bw0Gp0qBDMQelesw26w1by5odFmQ5A3H3MAwfYD+vHWNVtJ037LBBaYBEk+NWNEOVku4/2hQta0GFNnNWXU9oO0zWJddmr+lDPuxHuWf0k+PDGelWaZ3lrp0Z5jqy0dkTKPhfu9wx+LTDFhIpO1EVx2XCjURsmtXFoBR6Sj9llZ+wO5bmMkPUzflzlN/+LCRDm7Vp61cHK8oVFuaWlKfb2mHzM+BoLDWKx+xhV/sZ699qIgken7Cf3fgApTIH4zCT9wwfyBapLxkbIkUceRYj4yJvzB5aJi3lY/ZpAPRpc3e4y6B1ro9xlOC9DD3tcIbdzXlyGdgPAW+ivzaZ+aHzgcn48wXZpslql3j5wLHXV3n/kCa+SOxxh0Pc6yNw1ero/ihwyBdwy6Gx1dqWuGIvBiIs4P4FGicoeSF5mbozNPpjXF1CPzRtKQwP+LnR0xlAv4EU2WYCCFunoDIAzD8Dz7lrZNgck5+Ism/Y2KgJ15pJdbYr6QKGyVNL4YGV0AsB7BdRjLLrn92SNPyDGDWE0FxS5/Hrq/OepnNBoWTMvOGwFnqkOSHHp9KJp0mZdmL55e5lQQAeWRisZysf7JKjkXe8JyOgN5KKsvWptY2dICW6TgKaMXpanu0MCg2ALigPaaa5SqCFqlkNnyIIExCRPrLI1y2MKotOEyVmNOttEyWqKmbagPWlUizYwjYXCT//h8VRhFqVSoZ/0TIa3uPLGozv0CvHOmjsBNs1gmwoTljY3xwIWeS+B5QHy3pWz79L74pgMefMfeQwLDMJ56ALD3sCl31YNew1VVGc+iFAq9lFwOwyfaSa7H/C9zfCzz+Hc3mG/HJOkUnGeJqPUCrWpmM2AsI/je29EVIqvg7uOHgkQP+fMu5BoqQoenyqGcMCdf5LCYYo6s88aIy+Tnk/QOaJbyfpMls7vrzvfD8NYSPrkGSO3Cn1WBKELxrGB+MglDZw9HHgez4L3MIi1E00My0Lim/4leTZM9Kc6q/VGo/oMvdevP61jtqsUXG5Fl51qPRrHXenycop7FiPV2JEOnos/cBBaEEXFl5LT1ijzKJya1xCYio/2duhp0jkGSGhTjjU61WIot43cOcqY7ef265qcff/pdXYAZLn07jNqlV2o1MhW73tgSJkasFZ3cwF3zmZs2x2FchMRvKaASLKDH8qjMP4dIGLjy2bmOM0mxxo8123EDssu1AEZEE5dVAga+ZdoKEjwWRAgTv9vUKaRko5p2VQO2zBb4bauQiA7ds1k7U5Ej9vzuUWOITNl2x5ZkGuQYWnrS01oiDxqZEDnHLwWGcvWkZtXZ/uXzI+BwRRbmlEdaQEVR5t0PsBR05z+85IwS1mydEtP7eiFN2mGaDhnaikuLboSxThVU9knZ3anIc6w/pBV6aUpXq0TeIkPf47ZY8I1qparG+qRKOAB9vkQiBXZ1vIxhktpvRl6brmXuOvQ8i5v0bSMnuJz02aCoMQHzZkJUzdkSyaxCarM4DWD9LnbqVw8VtyI5WVERdLFerZ54ROgmPDqv1b+6U8Ievkucl9Z3De9WPhAwIcT7gXx9n/RxsH2Dxr1cqZOBejAxjS0AYtUEe4bLTEibZ98SBMqoayAfOaufDN5xezW6eMGFl2cwGVoMTeSMMUDUXk/tDHfhb0fgUROC4v+FpVM/p4e2TjIEsh6qQRlS3CWKQndAmFnd4ULQXP/2OYMyF0QvjV907p9ywDdMopPH/NV8cAYKbDsxm7f7HX5nIIDg0ll3Ry2zPt0nE21GWfr68/NylHHPYl9F8UNdMUH2eQVq1oLGn2Dl4KZHzrLQbYOxK1rSwjEqsXzHipx3EX/2wR9LiVxeFS2DyxRrJbezXfaRZ+opJBL3Ewud3svkuhKoVn/AoETkVJv7hlKuH/NEJ2q9TFLV/GXo3MgGV9mCpzCba6o8A06bWFPujcmp4Sy/oepShYTq98+wBkNqn4fXfcaicnIObAIIEnbi/0cwBqwlGi98yjnWagoG3dFslzjnka5v5XZ9KaT3mTGfEniMRjTQayV/IRutJBLn07ISNLs+1t6G5pv6D08B5c5u61MCaspMVJZf0ovAImpVr5mYpPPsJWgLpDZMlv0MQ13f1DsuYNebINc/viVMGXaN+qzxNJ2pLHbWOa2Z+bJMzmpmCIIMHWGATktpcuWpONtA+Hgkbn2pFAO+dS384eFRyN5qXpuPAw9luHyfUJOuvm5rBXsc+rtJrDrLAktnHvCQsFYGlk+6AHqWuiJy5n3UGzhVztmqREcDQOGGvIXqCtzkSOZT4PXdl6mZ1mLS1xZ26qqT3LfgWeVUb1lwltGM1GZU5paDX/Fd4tcU31WIPrdu682PTiwfB2fR09E85NEHXbq2BietpxwAhVtpbw1HFW0fNm7xO3DSLcrdBRmAK5XZxysQljH0ghp/2nNar9cNSL+s4G6Pf3x3vHYtTejUIdGUc8/iiJd2oiePrvL/80nc+Sw2mHO6N7X6rvJ+2BcjHFX4AO+7d0TrLkZjLe/Dm+Du68A1nfgSubGKQQLXdB7d5p6Eh6cQSITM2Ct4TtnehS8nH89VWfGTeVE9XUUCHoav6V05vkMLL8/Nc3cen0NnAPD47+Rvp4yq7xednzQ+7ZeKt39gw4ly0Rl4KSbIy/0ogwygVzJwo9IWlHsv6i23S/2F9EDfRvJ239ev08mHJbpBhV3pMT6LSJCAS5NbWbQtrB+RcIkpu54kiz3UmVNNQ23m8SNmOHjbttzZWVxGckgHzFi29y697dZx3afl0DmtHQKSH02PfJU/526rZNJ6V07FlfEcawsxlR00rzAqQJWjzl44HQugEjHe3sLc6p54eVfSKE4pjBFEKOHDswubV6wVME0Ip7tYOIh7fZEBrQWHbaL8UcoCDD9AcEZr9hZ1gSlWhluz1k3XuDEOmUZstJuucjzHahUkX72A6rKEbwDP+I3Pi74qlCFeZHZ/RQYmuAlGUjAlt6Ka5ijk4d/os0pKl5nAvfNgAAAPAMAADdqO0VKRyj+V+href2sPK6f1Y4sUflHQsC2qMy/QVsTV5CG0jn6lizMDxjJB79UVIfBoe5+/bE+DMcsHgi0GCVbeHAlTxL/wmQys2ELVNEcKOGOSlI5zUGkkLl/LhNiunba4cCgYJI7/JkdDSTMCEOL80NBbp/EXxz/r8QrXW7H+I/au0Slby+hxvFg+rIK15nE/QOjWyaqy8p4MvaAVB74nKeWxVIECFaXjTNSvScSPTmtPWf4gSamoB/Gt/6/3AjMlhVySUieUYtyI5cxpNnInPQ50afH3TTO0jJKm+lsshzeM2znxJta6ynn/iLVEddWb8Nj/CWr9IWsi/CVzbxoTUUJsWwXW2t6QHe3/J/8aehA94xLQV1KdbsKwptYHZiNlxsYU8J2EDdJg91Ag4wdA8PIOExqtmE2f3IU3ahRT+mINDHhSSfv0qp59mbSNlmtK6OqdSAUZCD3W9ctJ+irNcTXr2xpnSaigfAdoYeOMI0dZ9QKbYk6T+ZgnzB7KfKYZvZ8qSkI6lyMOO/D+HICTADfZoGTiVBPjYdP6hrmWYvYRg/jiBoWmcoCGX8cH+d/ud+MFSKhg6Gq6QE6YHaZETT6Xs9roOpib5ngfypUJHBRAcVY0dlUoxyneSRxgShvzRggCZuf+LHmQ7tgA0V8xJwIF2/H7h52hQWZanw18O3QsV6WrP58dJB9NGmlnKQ/7a9x55cOyi8jsopXEqIhxL//p4A2qBBq8t9EAKheHvK5J256LF4NiX/Phi5FS1D/p1f/M3IoaNCWScr5r1UlrzobaK/k1rd7tqu1QLXt8d3s22bne0+njGCGBioanOdwgvLWP5bz/g8e3OimySWaiT/EOhZLT3+AruLfBPUniXiTWfRYojxNF/n0IPC6j98vIWeUQmdozn7FwC3nvlcE/1+9OSoyk41ilxmcxsThQa2WE3ZyK/+VNe2+EAwFJrtIu1Q0RGIL8VJmBMsG1WVvRVAfEULP+8dn6Xwqw7zJxjq/kFjI42CnC39FIWYclRGwPNNDgjmGrVQE5KDkxulGLVnMLCPWtvLDRg53VYmHxxj2Y0BmBlV/ZOSpUyllAWVysJwSGYbE1e1E5R6TGmLSD+ErEDUekkPUNGCVHM6TMnC5YmF/MtDz2+WxuSGaRXEPd36VLYZudiI6sZROHfOymyd1TRShJW2m8Hx9Nz2BLSbhnckuR6MHY6PMCKtWRLsIvp6SXLZrzMwfRMhtxCFUPa+NjoJJIOhYMJ3l3MQSalKtOpZBai5rMEr/dd167sDOcy6KQ+Js6L9RwIQ2y4ENzsf4sz8DjydA+vchyRTWVXZ7Nck6sHx9ujCgcm48VuJ3RLFRP3qxa7ieESxhsXxHteqM4f6Rbv8Hts+l2GePyTO5RJuHRnELJ0rrAxRD/FxsKPm2Od16CzLfReKzLwNSnlEAkhyFcjmXWQmDx5ly7grSgbftk+BrWZRmArCLmGXHtjUArCP6JmKpKh1R2vl4qwLrNtyuEJJYDSjodW6c251U5F/TA4xNDmhI/+pfHFOsXxmP9wrfRlZmcnPbx8sNxfpxs+3PoL5FV/W3UcAL4dqc0dBX27LLoByNaNp6PU7YHpUbNcGDBEhmWXnNmkj+QBf1GpadS2WpXrDFkk+dQWe9hmDJUpSEWsE19xmThPDC8dGnMbAOilepQSd6hddSiQIXt1BWhXRYXMxOiHMsdbiMCRq1yE3TCfTWMSV5DsNC40FFisRfrHOIDPMBUYQoGoDlaoU54u6GLv4KRmitRKfYXrcTjzh7Rv8zETn30W7YEXQcnspoSd0hqXE2Ttj9Fh7aUSlsJ+5e3U56Mh+gUo1ULtJun/vuI30tYWDbpwUgbqngVm1TR03ron6/Y4cPruMX+3feeNPk/kT854qC48BgZnpYN8WUmDFokg2orzvn8LzSkraU6O3jVHROlY2CinjHjtUE+0AmtIownfY4u8K+bT7cxTsc/XzGE70u+kBXQb5s6L68k6TovaIZyV0zc97RsRMUbLLFD4sFQ4rIr9zYf4Igd9h7vW87w05cbLzhkIxyfO1Sa11834Mt/XxO3eE5JCjelUJ6w4g2DpQh1fFmMoGXNoMYt7ej29X0gY6/fe+f0YYjzdphhA4vPHQGD1HrRnBmQGDQ+7ssCiGBAmFmYH6gqvXwlKLvlXEYZ5h58cbnl+cYpR1UVx5Dd09yJ3HEBbCutd+h+3zpc4K0Gd2rrqxiw44UOrIHKVr7jN7fZxqzGY3bFDG0ell8V8wVyKPvEJ63+/Ko3wnNlQSB+eU5Dh0UA813Wj/0jr+D/FOAiHl40L06sJrX4/2Er9iC+Y+HFgAZbPVsQOfdrmwR/534kHuD3IZIQje0VSzvpG5SDKUerDJcAvJyYdSRMksTdGR30DmX67JaGlwYWXLWa/dcx/U915lVw4CRLGdRFsuknBlr+7l+6s0ookvqbQLrQnC6jHUZbAQ8tV4AvQ4RakHPzHDYq3jVgjFTB7nhph5zXzV8qk+vdBotY24oKR9GgmGE0WMih1dXEcfeA/b8G4tX5ZCS4kp4CNZI+lRFms6Ih908hUdvQvKisn8sXxUC+5dmlbN8/xQcLt+BRuY2aM9mSMVD8b2ljC5K4CnDb7O6d5BqgmQNSVITNUEeUrFBaqs9+BEsDAl7nLq+g/7c7NmvqEsTcOBZ/ZngCgM8mZ+rmIkvkzVG2v57R76651gcUqI6pe/Yw9DDaPQs4PrgldNYck9lIPAdBUsbrdGlxxBU4bljbu7ixlTffTDHAvN5RDGJFEl3Gab8cSIJfpY3/jX5++TrzTnv1DCkSMsaf1QHD6UchypM49083YpEpSJW7V2DHibrc2CAPWXsR9p2gJs+jBMaI0kteeYQXmW+fltV5AkshBR+Q+Dfm0BISFjn9qXcbjCQmMxDprCexOh2m8wZWifMcHv20kGNs2xyHHaCjBcBRcGXh9Bu2+lMeX5Q+5uplzSfE9EBqvLU6GVPjSyFXat2ht6ZLRwsUhrxheHWs8tQ3cq1Tna7tPjgRMQZNGDtEtgEY2JoxmSgHlEHhdryikb8IYzmqqImEzNum5n44CuH3m5+pm3ih6lJEg9nmwJvBVJe9ez4YPFyXkKgz4EPhdzPTEk9/1tpI24h5EFNdg/+taWq9P8OTxiCWQcHdv03GsAKorlZMUq7BGbPk/9sfr6dXw4QJD4TlsiOe6UP0ZoOZkRKDO4bU84mstahlnt5eGGkk8y7UvaflyThCdF1K8vHL/jzCyErj/sm+JS5wb930mps2ikxYPxp1df1aaR4QiH+0ED/KYiVFWog1UQNutMNsW5Esu0LtDaiUwGxChRxOCYRjYkXX9HBLZYL0E+8RJA6Y/BnMH5B+vEC+bDLIU+pXS2bwEEVyIOCYm0sYMd/r63cz/8MIcgPwidr4gg0pYZjoni/OKrqYTt5M5qKIOwgoOh7IOfz0GIeWEzvCyRegm4tulY1uZaeqYTG3NJjW1TvO5NpuuUIKq+OYT2GA77KHiagxeRkxZTuR9knXQCM+71s2pRjzzc8EFPjXg3fif9GOpIQlCtxezX2rT+zss0pdp3IqmDvOkoku8yMgJGhm+XMAo2wjnzFeyNpzEtrWpuhYT/hFTLsBCvU1vzJd+8+N78YGBoCywZlFo4CN6vRVUBo4tefXyoJKcjUNu+uycMGfH9xC0KBs5ok78VUeAS4JxenNLob7ae+HaW2yC/Mva+v3johBGRpUI4wYvJKJB0xWHepzXGm0TkD9IuIbmoN3cj0sZ0PbjEJCO53tKVYjySAtEhzRTCFcNGG102GfJOpDUbBCV7rUZvdqmQbUlFbKM6/Cf1hPjcEs/rsynnNbSYpeTe2bsordjzLptnJ8hnb8OHLUEhejYp3uf/0KYj5u8Naj5XmD+/u3rK50VwWGq3IVHZn8Vs23hUDA8RFYGaaoCL6GPCvxeNMGGC80u3LeWQhPcswxbYYtPQ6A4N6U3zxRAeFOY2pTE6vDNwIlH6sx7iACfnbtDBIQW/foO4uw7k0t2rvwcaNj4onJLE9Rx5q8HwvS2Po2QN0QVvb3At3yaX0Kg+m5quvaaPg/zUtIKdAUVeHwRvh0qj6aTnNIAgYEx1+MAlCegE2POs+DXN0md+mHWs46zKH5XMvFNiZfvvmo7/IuiKmiPTs5jxnytoP/p1uobeBCv1PbjISNYf8oWKssaCRTtNHJGoI4bcUm+s6D2A4/slIbV88WMHfh3RXL+WDDMjwbuwpECCO7ghAKbHsykARlLY/I6aMhM2f5fjfARMxj+cU0d9CcofF47jyUG2HOHYr80Htt33i4XLhz/5AV2VwEkd7Bg0RCsSnQXGf6yJQXtYfS0t46n6wQid1jovv06v5cUUDGxWMYPAEHBcQbfDPvjFIluLH/a3LvmQzVXO3y9exOs3AAAAKA0AAFxutvcOlxSpE51edH2JgtlVFy2t06H91nahB/aNG2N/q3/Neaqzu9hzSdvhupErn1MMF6dfLukQafetyOZ83nIkf5dh1YY8X8hfPdUhNnXdE5fhUK4aTVhLz7vB6Wy95ezPFDS+I5TaCZIlKQ9b4hft7cd+PQfzV3ZJBEw1mAoGpK/zxl+KFO2xWV/ZSmxZwLOUh5TdyqyDzrr39PFi33MkV1qLF4M68i9m3fep7LyPlC4i7oMZ1SimyyuBC3333Ekkv9dXIaqY/uYHUQb04q/IDvXVuqa0aP2f8TEZf92HQZSd1oPevCRj2NJTmOpc6+sXCRoVe+X3419PcHzg4spseZ36NbjSsb+H9WIhBk7J8pv4LX7pzEORHBkH2EKi/GXSoltLxfZWWzse6vDmvLKCQ/eDEbaEQUaVKcXSO4jOG4+Pj68jglOMllFYvxe1NusaRZXuB8GTeG14ExZTqMeMbt3/TrU0LfTJSpRpOnAAUDLU2zNcaJKcjHA3Q7gASBFQ3Kz4dEkMYVXT0SzE9EsFwSqs69cZnQZvgIEVvIXdBOSucCJ5niYm1FvNZRNQ57QtIfXrc0yHybiOBDM36QgW35bY71Ef7FfdFZQ5K4WUURrbj+wVh5fbHGk8n8DvxVoOz2TcoGj6yk9SUD3qhBz9UZTiVw0Len1HAJFHAgDGRsedhWBsOkxQNNbvv50xvOTua4ahjpIBVKIIfX2Hi7lKgYHpOJlAwbirBO5Mx4DK0tRF4t8cibPdvPa55fX0QH+T7ccep01DR4g0Lq6mDvYgYx2HwbvHA5dJ3gxD2qxt4leUJxJTbB6ul9FIqpaA/z5qlcpgEwoZaJ+XR9SUg7s2Kh3JJ9BSEG4o9/4doxnsey0/i6kbXtWRkqbAYh0a1yh1QTcU/AgZ9lKNErO+uxR15/pVLryCZvCseetwu/B8612URLyrBPI3qN/WPleAnCfR1Y+pJDLWal9Ng7MSkHBawRTG/dMPgCMUo7pqvNSS24/iU85OZ+A4mtv8mogR4qvQ2ZAle/+vIa/xJWR8g48XAbJLFki5iAPegj+N8Z1GBUqjAcL/+oUMOOfz/S619KGyHDHuw2I+1RnYIV7ycjsYt6VwbgFAUCeDTUxngCePX/SZtjVQBuVabNVS4tVi5RUe0nKv6Qgd+MZjYTcSAkpoy0fozwgxw3W8hNM8ZgXemPfJ39XOjiVXB9QMUV9BG6Dfu8sqqVZtvrtlKz6CqcX3vg43xvO0oLQ9H3mlekAGft75vxnkS01/tmWfBabrN6FsSVqwb+Sz9LAQlU5OnNA0gc1w/mb0AHrgaYRQCWaezVQ1CabfPSCHgfZT5OPx92efOttYJgvsnUm5/mx3i8pVt46ceEzbWg83L5+M89xoYT+vBh75+zC+q4w3JGI0520qfBVzA9YmVS8qQ4UyQzalK49oWCfImPTPmRPtqy10jjeqZDhK0fNj9CwLa8diuL4B8qNGB54TAlgp4DGuUoNSRMiHZ215NBXmnf0h7JDjdzxhY0JcPJnDQo7C/y8aDTmUXwZhvogOAcvSM80qrzieD35BdvrD5y0cnH4CzTl3FATigatpnK367vL8ZitF11gNXQR6lQGaVpuABecqDmxaQO8XIfaQ0HrQCdrOAWDyYGB2Pv7I+oXyb4nifaDTCXREdt7Roiv4zv/MTrAmR3Bk4Vh7i8LMKE1SjBmyNHX1Kt7rZ9usDrTaTYKT0hFckKY0e0qz4gCLziqUAYPG1xf6NryifKVyErqBAmOVByk7NF4exZl8h52UDZCW+LAClDVxnxjQPqCVy1u0enCI7HYcxiMWMv1pl4CzzVTG3/7jv+E1xv/I1DwQXsOMhw8bbc8mrgPR1c9pWieblsg0LKKWt4aaaqJkypmgNv1S1vIfEYh2QsWR66FqEHtB8ikFrytobRBW5IZnTocKuTIWcm/5NTcOHuiBc47sr4uA4vQ1pDsjZX/BFyUxHeq7x5byxGR7dqEpxyxeOejtOoEER22hLW1wtVh2VcQFe2dTHlNVGLlv6kXK6g/uIN8JmSBaKKP5onST8s5WExWI9qb9sYeN0D8urci9nVfY8kJm4o7INO34QwBD2xj2qOMVvZ/HnfqqKdHVK9uIqEEhRB3KwtuDsKRZiaXl8ZreRu36GkyMf9fXTdA1JlZ5KPtA4a8rPHOuYTtcN0iOR9njiI/lK5bepd1mxGcIgs+PgRPmFycb7WqKuvl/+7l3yeJOSeswukHU51SkZp1/ngYktTb9F3cS/gMESkatR6ykfZwFXKmecmdJm5Zz0aVjHOIaseXnM9h9C9dJOflDpq34y5NOO3Ifzdt85nQ+avtbilubaKsjwzS1QD/aW4LaNtzATXGhNpGUUvtSfbrwJElx59V/phNZKCOyrZcouz0fKAAtQwlUPL0O8kyqkQ/1jET6BjUtfeFf8VhRDe1CWnS3ITJ1gTJ94icZq2WuulxMgiKTmmm/4Pynf7wpZiUUJG4abYFs6fdnXPSK4YCBUBBJHDiQj0QxYCeS/Sh6cwu3QgB6WLauq11hU1vDCLAX+kF+i1stRcuf8iwC5rGvV31Vm+rpqdcjIf1cEiPk7dSRYOJ4G2uNsV824xqN+CIc2iqumNFeDdz7nkD4bdrhV0sY3bZB+iDvLBkAeQr+fisKBkPtqFo8Bg7W7wiXkF+dOpwRUDGNaz/7CMcDH02Lo0GAGuzdlxudTcAQL93kQv42n9EpLBPPYvvLwopgBnZIWAdwbMJVvVvrFmkHF+kle7tM3lp5mpQjj4JZ4o/y9IYBMX5yOxJxM9PhgthlhLS7+DAt78hDCWxDZRzqNy4ErfD1CdaWMvE/E7fPXdOjzrWw0P4QyQ0tIhhMZyhAV0cImr4CuqGlzK2OyRHY12piXNDcjJtTn1jWWGoH2FC7RhK00yyDAjJ4E+Uc/vNbz1qB8w8dowmPayVaqeyt66v+R0dQuFvzxyBufFieiXI5ZYjDfN6UZnJd+ssnVPINQe1ESXYtpD6+mVWhwx+h/vfcKSScWRWuzfw94hM6t7S8FkPVHFWRg3/blVDzW5jD9eDn9HLmsD7GUXMuBMjtOs+6WFWkx2f59tFHjALw/nmdvcA+eSJP/tQixgWXrPymmXHczQFFi0PbaypmNqUU0YMFTyY/H4tWPmeqZpFMhMJvknilmu+lDI8xlmjfzjvJemWPIxnTzd50kIHx0/xDEtUBi6aikVqpxUBfQjpmy39ZPytrR7NNRwq1mD/4HeJubM2L1de2neWvC7P4CdNcZ72jvk/nyqpL1LTUVz83tYUolyANLE23olItcwpI2e2wWtHt/GTb1A4178asI672j3GuKFx2TWY2OmN1xvqtu+Oz4bdSoAMqphvvzP97EiizqqCHUSVWgW1+NqH8LoprAZJ3LWhHl3YdFrLM1CnveC/IJ3vPu/A3r1FPQ2yEGimgaTOV1DlqZCWaQgbXwniK1Ur39yaEuNNpmpHi8e6G5LcZg+CF1PAJ8L51hLgtsUQ+lFu6Z2AKSV3HnWyp1ZiKQL3yqkxOQ0n1pPxAMkCkDlb4SKNLAXPiuOZXYVhvs479z8TIHFCo86TrXO5rz2XR3wTzmqgNb8p+UtTi7gb88y5ExVHtqy0Pv+w8/dCRdUjVS1irWZLMkeoGQYRdVXg9umf/QNvJAT9q7Q0HrQ7FxhpimlsRvJzf02iyFykHGWRYzknBeLy2yoGrD5SFJDMNAIO+D5mIIDhwl11nFrC0P9yGaJRDe7GSG1SrHRJKr5kzfORpSXOhiLL+Ycs3GHZPL4MvQ+4fb7wY3frm18V5yNj3wo2GlUpe+eXYxe4oetu+2Bj/PWYFai8KdrIEkLAm6pL4vY7AQnkRblAjReLTYd6qOgRsMTDza/TqqJ4f7PDR25NsRYIr3doxEnEAIkpuDbDbFw2QL1iauXW6iezGkpDKgkWZZEXkiNe/7q0u5PqSxGdHGl0RuAqZo5mhZqCcksi8VSrma1JgIBkL3Aje2o0CAWegGy1NgoY+z1yzoBH0poaoSh1kpF2jzpn5fIWGP3by2XQsne5TM5B9LlTmeD+xpmbdIo0iULF8NkNm6AyVpf4N3k/5R8KeN9ymQ0lDV2IwQHpfW4Dk98AiRjU9afvfOd7O5yh9Qz6w74UlQMYtxpn2n3a3W0THdQkzImLUTBC4fb+9dJuS5Ssf4+cXaLyfxK/voJ5VXAm85NWClOA+Mb8cIpExgha6CUyDLeXU53LGR+eAmzF11/cbiJX98M6Nfm4VSbmFAS1+jGQF51XEy9DBoDlvLnPGyzGUQky4x7ZihSVmiHhTw3oUrSCfdt6Zn/xvYhhdQC140WqjM6+kxWp1OyjNJYdPnwCKFUOcy8oguaR8gKxlQWoCTTNphNKuTyFQIaSs4uVQXpDOBHuyCyH4e8vmwvlwiIRUJ+qv0BjZVRrHsKKh547cpV8cyuI4X3GKUX3IZguecRU5BiAJBJmMKliGOqUgf8N4CRilSviZOAAAACgNAAACUjddbjqmmSTEzOjxq/It/+ncKTw4tBk0o4MKErpeyOs5SlNoGXigdoW9MCs2RENUGKnFHVb9W3F1SIV+0m5m08jlVCO/uRPXEqzFGLMQCNW6uUxEQVXS3/VFaoQMHPaXsf+m3T/Vic9vPA6hTfSRwOHDNBwQs6uEqHLANdeBJHvo5dKbpRSxzGeRkx3N17+OO//K7PHzalFPXZpnKn4dyD83h0UXhx8X3oqKl8ZZave74HZjnOviuYQboIpofIlsU161C+Ep11HPeiVFFdoNhXsct/3oMpH7Ado4PmTJQX6IfRkBat/lc+ZqsZIBiqoHJqbwRFPkcs/8omI0Dn0907171wYl8cw5ZSmUaev04JSnw5FkbOEOnbzvJIIxim9PKSuXKeNM6xAh0NtutzYbuL9jQxIoKH82vTrCvfEYKyX6nVUBmD8mUBxGmxutq38xd4v/sD2dX53YQDG1NLcSs5d4XSAAfVFaZ7BnqovYHUSso7L3pXRfpHk2gC/hGgpV0gRgn+4yh/p9VkhoEbBYZbEa9Yg+zM5dzBJQpE4Y++9N7mgYBcWRFmbWaYx67ma9H/6sI6moKc5H28DqMixXnhs1rjGonp9BymKw5S6aTgnpsCmzcUzXHcB2JHRmfRuY2R1PZ+m6VXBrh9gpwn7jOjBLAfe9nbGold2SyhU31g2pi2edyLlnIOa/MyPxzBKb6X4ZAedz8gGSyb1oIcDPbppp2lbdF2Eb6VwyVGPR8236fDwrmEIIALBvtoDGtDhwFZxaHoKQxDWq7xh62vIusIElwWPbC1OnAU2faCkceyLH4Gl+1FuyySjjV8YemFikXEy9F8caTY4o/aDCtB8GBQYdxpg0yeeO95GxIk1W0qWR4A1Ym41+Z86ZOJM7wpqCT4RZ2hyPSk1228qUEPOVLCJ6EAK9WrwRc0ZA3sezM5WswJbCLt8jUm1Z8gsic90bZPNFoE6KnmhyFehpWrB3elcLZ79/wUCIyt2K/xebycrEwk+Xn//gl6ThFGBs0e7W5T1fgyb2Wcyh19i1bB7X/yYlr3sEm74XxT2b+S8wzT7RplquzJGVR+HyZfru7q0trVzLoAuwwZQHdlEdm9bFKJAv/vW9/PWXvA077UTZbYsE9laDeULSSuJeJx6UMErZYe3fyzPAN9XNqnjeJtyCvSIShElPonBK4+7MGnO365kX5L1guBtp2CqZ1x1TS72H0oHn4l+ac3T9ASZLmg7VaAZT/gG99coPy4tV5UzCPuu+TR3JEZuR3XEqCZuopEy0eXqzh/ik7DabpwqqSiojGjXiNg52jqy4evHvCUNe5YZX7C9Wyvzc1RcMA8b9NVpmskHUhSBQhA8mfwZJGVoU0wNLp7eDjLArRSFqbUfVvfjQh7MrDVGMTw+p8U1slZVRQWr6Lf0r4kCGRS7yz4RaSzGyyDTtdRzIshu7G4A0ov0tkxI/p4mEZY98YWJFjOXC5B4eiBd6rt2j8tl/HU86ovxiqO4xbULlUiLAVh+eHU/9EFKKuXkVa0PB95iR03iim7ROcJgmnPIvWXjGDA24ehr0/SejEOkWT4xk6F25PqBoaR6quE6BOwoTumGGSLqFpAMc0Z11T+z/On69BknkxPVHg98KXGcGBH1cPAcO4Rs5CT4vVCz2WSOyWlDQykPIkMtZbDFECa1no6+0jyMXi+oFEPTEC1UAoV7hixHHbA76Ph0L6umQNkQr9VSDdcqaYgRh8h3oCviRJhFyjQ2JFL6Y6gXjJJVzLCsQi5OwOQPn0spcN9+wl2tNv7kA1RY0F0cnJHihjW4iYloaxn4vMw3+mkMwKAxnY7YLxAlnHM/yCRB5YN7mOftNWyXOJeZWGRdJ6bBhhC5YiLFHZ85L1VEgYAyafEVN0zay1Fj4swqyiszw5FnDFWMzwqHJ692JVz5Zsg5Avu8Ed6pyIabkRdUJi+Q2RfQh5TdN7jgCGhOxdyxbZAz6n677+qnYoSB0fOrUvTM88/oXj8SlldOLphTWVKkD9jNEV/e6dixcRLa8xwFc/NfxQ+pwg21jjsDAdUfJ7sqQ8gwl9y1MSaO2puGjQjiETw85EmI38ZHaMmOy10yisr3XHBhDMc9lqAryh4ImZaipYog5iN0pW7tsUSCLoyoDTqLi2zQRM8xXUmxjBGbEXzOfepuNGK+G8tqQj0wRSkYFMBlNyISvBfzVn6e6XxlsDYmkZzFwgyOtO93b4OCunsCxe1mJKWnx4S6HbCvdkFj7rHH3yv7J7RsoNBtswPKVGlxWcNYBNBYHctf1woQ+Qp+WhZSVIHQ8FANiYywPGif5S9+6/GkxgaHRhzPKscTUgGn13hX1BgW9vXbOExp4g/m362FfKzU8PAqxJRiD2ZVIwyFqAV1R2tTEU4tDT8t3+LuLa8XXGuRv+TTSha00hOoxqQZjeTyQThzsXDaoqq7844UEYB8tYVN2RBNrmAeCSldhCS3rva7MPi0xUA4Gt0Iqjl26VTzYOFFgASuu+7aqjBqMtIMcXqg3/rsN7YV1Vs5h7rofDj2BSNjwiGfcRyvfSDH+271IGQ+lfDSlqTPQD2YStOLju8a/BO5Mo5pPu8pb+zZ6BPvP9d9Wa3r5DAFbgfoz2DeNgnmyr+31rCnNaX0Sm3Dga6wpJ9VvobXKjv2/oea9GXRU02e74HVKC3c1CrZQ6vBpJzjOaaddg5wVIZQgSoVw4E17kuzaCKXBWZSoZwVAcxKsINjCh2WxIaT3mTIkIR6nEYQBTlwMCp3a4zTyY4vJx8Kq8Iznt4mE2LFmA6XRCl/PEhp0Hlm8Dx3IR+86R6GxWmBnsfpi8dMKP2M8Y5tOg6iVUQwIx6ZzP9WT3GR+ANXuDt43fOtsRjcHUZsH5ASOW8AVQ0TpkAb2GlAPOFnhLOtlEmjC8V7tjPZp/K9q+1mxJkKib7ofbvmXkOmljUlnIzHngo/ArWa9MWxenIYAtZgUDClBiHl4dAI6KFmjqlscX9jWducUXTs61NdZXcSZNQg3EpmZEMmtDFXbGYVsbEtD/Nw2ucE7pvt99sZzJXjvtpaH/2hWdh0+3HaqrJ4Z0Eq/xCvnlhgN2o1tcbrIuTAPTeNZSWPz7kVrIO25+5YarknK8Wed6CYEOsF+55iJ0RCpDFpryNfYDMiwFc13NOVKvT7fkfhqSRMgkHNYJ0qgdqdi6gw9JNVsBa6LO39GF3PKTFpnIZwckJCqE+10ZU/P5Xsz9Xx25Vp7yC26VoGqPT+sJoZQ3/aSiNmBPoDQvAgMnKaQ6Q9fqwciFktl6u1OTVmEGho3Jwg7MY6Pmso7miRC9bIwKFR7LDiA75XPoPi0InP7kPcQUUvP6VwUt9HTgasS2uDfAZ6b0ZNXAwVZjlVEpErDGnfqt672HabgbeQ4xlppzZDWqnk2DGCHd1fOf6J55fQIYq/l2E2VDHDtGeTrs3muF6JBUtfYrlZdBkrxyUagKwvhsvCr8plph877xZvkDn2/OxFfqLqRO8ITjgrVjdV+74eOeWz8EiCwK+5q6DZdkctjBBFPqdrNVvRiOKPuNtw04uXNs45MvgcmnqB1AVrd3cl1CXWH65OlTTXUY1TeRS+/qgWSM7CbFClIEck234+XG2xrvdEjwo3G7ui6NnyO/rIHXNhql9HagNyGkcmC7Ijz/RnNHRhiWOHbcL4hD/LcshOJ6lovi9ttRyQmXnM11b9rHte18TtTI27oYThRfzFwH9dfvEJUQqSDnakr7BZgFmXwzRYNyeqpvPdFPBCpPa3CbEcXYT15Bz/vaFSQqRimvNio9R3He5BkTQwi3ws34adfZznQZaT76216V+GYp0wWrH8JoyQAABNDmJ6C4QS4VZbh6mGOw7YdSFLPR6qckARReXzbH+O1pVwmdnvsV6sH/X6poRvRqX+OLJMJV7sTPU8tbiWL8URncXr0WXnjD1syMMW+f7PtmnlOa4qd3W8r6i7HLoth6jAsmKvuLqrSY7TjY/mFlD+EtvOvNYAjly0d/h2bN1KcMvVANS+old8V7soUabzhYwr6ZGxF/KHWJg97pbVzQfOFX/G0/btSkoL6DtKxEUpLqQ1Mq3EySu/8tQIwA5OFbg2l8sifWHFi/MbRDmARV4YlBn9zRrmZPZAsiyPMChmCbGnsrm0xAYVNqdmIZoo/qYtvP69L9g6VhqM1aD4THZ+kXQBD5nt7aMv/EZkR9jDUlyVLq3mLEenmVj9lHQftTuQVac+RDNK2KMuSke/8z/RTy3nBrtAkVIVIU3AMNugPja0EGctO2fBCHG6A7zT9kLd4vRZkuhYoOnzpJAeZZCBFW0bC4EIJbZVbku/miJaDoN9p+6b9Rpsoz0fYAIQ5CGwA4JXBxTGB+HZEk6HDcu38T43y8Xd8LHwMLcFHQqKMP+py1tArDLgnGx9pog0FI3lSWajPHjBe4UH9K2cd/K7coTY+OMsFh3llsvCNfEMGxZOpeWBdUoIb6FqzHjlaEXhzSryat1pR4AAAAAA=');
