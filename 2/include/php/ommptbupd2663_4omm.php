<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAABwBQAA+sDdRDjvDR6Cxk4CLYiavb3sxrslnmH5/8JwrqoJTabV98MUaPBepJmVyfOyb6FqJuVNrGWCkKVfHEX8viMZFs1EqDGU+ueqiF9hzL8wapUMdU2Aryxusz6RBui6PtTQ30Fap/VBTHDmEM2xc3znnrI5IvWfx0AhjX4bdKvb9QbGGAI5ziZCb4qavh7Jfh5Zcv+dAAbZzGfT9j0iBKdShHHP2i3/7YGwJjoxGFSZjU8BFRRpGKAI7QsV8ngITmMA6ExA2kC/SIbS9eUWDdbv2WsWV0dqOnKzaguhO/Ju0S3d5QT/zlWB3CKcBlHuKhPrwqRX7kiJA39sWwroTrDq5QOBzBngrnADQJKhNDOiggHcHl2EIVwVnbYmFXVN1CP3kIGQn7g62Uw/j8KkKpwj6fotXWuG3cdfAwqsFpIzwEJA1LRyQ4+xiGL6qO2DIU0gnUaJYyN/7Dl7+9uv09FUkSMUNS/925+Yu3Qdz6lwbVuWT5Y203+nz5ygFy4DcNBq0pFzbhqIWNtgfqzv0iOjb9Iz2Xj8zaEcI2yU2khHlM/3tGT2Ka4kieHwjwcKBGvgPlFaKgzxfmG84qyCWSH3ZAK1ZSQsxGxqIqpv4OKnuFYrwYpCgzASByw+dM70yJLcTa9DIB6qimISCtxFvMOdOV158wGPz5xCycck5cQqLUevFojffy3Gn8pPUiQGlCwRIN4UOm2rBezG9OhZNAGD8oZ3sndBsLgswdfS1KXEL1YlQ0HoGD4+Sgh6mX//rXnjZvZ1OzLqg9rcybnKIJ12+kVNZX8iB5jP3EZSJ1rxIYVEYlGv7/9JnCTKpcWCPU8ApxVZCcQkHrGs6VMyPte05TIGKvomIPhR0XPygY+TWnof3vy/BProlialCmOBb5c6ed/vpj995UvfTpyi12OPOt7Eret4OZayWOHHNDj9QKbM8Hy/MsA5OBTMEdJxz6uK5R8W15bx/KQFzgqxy5fwLDAvqtdvCOXOFUb7v8qt0C1Uu+s+AlbxMnwwMT7M8q5L+T7PYARhESsh1uxb1waW7S8IWF6FRdTHNKa9pgcoHm9VQ3ZM2YOZLQXWdlw760dpgKE7QnxTax6T14QFcfnRWvKwAfK4RhXm9jt0h/emThfhCQaAON/j28UORI4z754vU+QXfb3tG5XzZ+WJThikknrn5t7PlhuVeIQb8oCg2w3HxyJGQ8RLRTme6ho7YGrgGIArOzx4dVMpsNP1JjlQUe/G/Zr3h2dje+2BwWWom7XiHvufDuofjpwtc3dlw7F0csINxsdAFQyhAICEh0ixT8sjyVz/EQBhASz36tw6oddtVWlr+YIgtB2KemBQyDvQH2HTBIolzzhb1TT9xEPUmBcTe3fcYmxiKmNy6arI6uf1Vxe0jnSeBQkB0vfHydx04nnZaoLF2BOBCaPQnht03huBeCxSXqJzi+FalPskJTHC/ed0fxyfuaY0DtEpKq6nPL+WfPwp1B4yupNRysDF50HoXfqS4hLIVXhfjZQDLQM42iO6/x2nvDDgjNMMZQGA4nXrbzWnb4wuG1c6zim97EsHL+IzAfXeDWla79Ibx57ifGoJOMcUuRYo6tueGW2sg6yiTHJrQ6sGRvlNJIyrFN0cMEE05l/2yV+vKCZRDyM114dtbT5gMMXeQ5XO3BXDzuLzgCMU+55R0/cJBLeevUMo4In7kEfKfATP5y05nY80z5XwG8FuYAicKIt5zPci2wX71tHvwL2PjSiX/ihx+jvA6/ZmyWK9wbYMRmMzVm9cpyWhpqOfC2S4LVrbyZY3EsFHk4e5UgRVfLTTngCyTos4vkPgC4GxvEskjjhW4un5dZBtpn5y319ilFaHlKTmNQAAAKgEAABP2iTmaF4RaGb9Fj8F/ae+Zv/pZDJjBDGSnuInfcurMW0CZF5njGi9CbLL50kFo10WHwtzNTnmiNzBH1zti7Ja5p3QOx1pwfwQc1Zx9b8I6TyjBKqR/SlTHMjQSsm0nLoIe7FYgfV3Lmt9BCuXn/p6sjR2e8VYXed7wInHXENjVvHL47O4Knb0fZZyLutl+wGTFVbaIlgz0TLhWQdXn6C922RNBl0kpyOc2+/k9DaR8u5hutX0v0s45kQyVyj8Z2MBNII0DF+tYv1L/eqlLpmCQIOQA7ibrZUDUn7bUnLrLDE77pexCUcZhIvOZQ69jpv7Mn2ZuQap6x2gwRqWStUt/RscrxijB+YT33TrnNUFkgY4pkrKlw2taXDesadhZFkNwEjx+e6y17lQI10k046UD8LJ1lb0fHLkUEbcF81WM+BASmzjiIvbGtH7cv9g6uJJ03odX3YVHcBNF1CX3OfFxgpzDawNAo4ULWNjqESHG3l/Oed6fMzk+OqDGp4uId5dtAgRR/Jo2EWUwMG9GO7FumzLrZpEBTYzFGHlj3986MhQ7wSVwf2bj4usnhNh19P48/LN7KX511j9koUE5nNWl3Om+tlFp5sn0UuWpn47R5aRwDuGqGFfRqunLtpuVDxYL6IgluvrEVd3/8PpBvKZszSgM8EobOcjE75b8b3M1BsUCATnqN9ZUayKenFTfIhCAjggqFv8RchHgddHi5lCYlUWawaUooM5F8RvnG+LXpVJKjetIa3/vGDy4hwvCksOQYKJW5MyOPtGCv73IusXNtVJGYneva3JODPagjVhKj6q8p7PkaBz12YQciI9FbNc57Mb9TXZVxZzD8+rwwnrM6iywdWGzlpuymIdc+jdQLBFYe2bBUjF6ZjUF/wCSj/ZkvwXr9ih1rG0ST3SGZ/K2aT40T9Cqq1atLO5O0s40Nn4/43oarHSNu57wYpduweoEpyBxdVmoMPoCCX0Sp/SXrm7aVvTCLBoeKnHHE6woobtDDtB6+tgD7WcFDcBy0NtYl0WxMC8p2KahVC9jaH4GnJXmHNgdRYj9Fiw1V8R2rQrJ4Si5BaW9PCH37lGmj9AHTJZJ7RZogpADsoy4Xp5iwrXJbr/kWbreaWjHG3v9BH3bzZ9Ar0JMxWdtx2BTgz2XUQFnTXkplJRC0oKRrGHZrI+BCMP/BQPwv04xlc4WTeJFboH4bLHksvI0p5fZHROk/IFU6d1AU4O6EBkf0Zd73izxN6ZW61f5Vp2lvZFKdf9GfK4YmOeG44LrmQC0O43ZOO1cRRVpS2YqG0DTfHc6Sr007DEF6J49ZFjxyOJiqJLLoIi00jzs3jHrPe4DQHzcNBeXSr1V+oN1CKam84eeDrulCIplLwqXIzsEgt3ZxrBUrnucqPXD9FzDQIlurohU4E3Mjbujwp428ZFMqa79mGqmRd5rxyGepZianbAIdUNsMUqgcZKVjea8FVp8QrALNp2T9mEPP2lt4WN7UjToiWHK51YeaaL32k2LtgxyVGgITLtzoa+GHLarYbmA+yxspK4MuGVS7vInBhg+nYr6s9FilvpsKyifdxwfk35zTIACuNvGaYONgAAAKAEAABP1EYtpeXRDpnb6m4BpKBuFlpAjdM/NA5Im0ym9B9K//q1mcQGDWQUT42blmRAHrIEVG6yBtCiV0OPNzwtznUu2m6lxyaEDo+GY1DkTJyyNPwzOQi7gKzKBde0smziBaTFWZ012GoEE1S1eiuJ0H0fttEAS9mNhEG4ABbSpUTL3LKiP3VbwubtzwO9vT/NZWHLhxD3gA+/xutpS39U1Nnn5JBd7H50tNxs3EsNEQElkmB+oqLgOUf09YNfa7D0XrlfX4pCk8OLY+i54uDohwnh20oWqZpZm11SPmFQk4ChWkcIVpg1qfWfk/AWDDSdGLPq0muF+Qml7lMlIztV38FpkKsNNNlidLE+cqt4owwdGscV2Ar9Xgesvo2lqfbXTwGhxmi+T67he0QmzWDeLacD64IVe4tt0QSEky2PYVcE2PsuwA1cp8nnYPSR4g8DHDc4lUUndRavxb8F+xV8jIszIXpYz7+/TBxoBVD4yqRUUTbFDwQE+LxbPQCHm3+Oj1CLazOKOKBqkHmAXn3xCubseZdzQOxhXaym4Eb1HE7LRBsrZb9hA38NY4a0sO0YuFOB4xw1bT4sxDsKEQFde550q6ILXYwLtHXQRk7ReN741swAoUqgKvN2jhlu6o/juyPbSOR9ddoH+16MSRSuLFC0OdTUoZ1u4kVZarEw28y0VLaFbOFP4cN2gD1BufE4g2lEMJiWfkbnBKyCQtMhTdpY+7g+E7KbC1Ah53zD337iHjyHIUDiIlF+oWORX4b06bnScG09Pr6S7RRkDsu8oXo5Ur5stvCrmPzZp+bEpHOs9LoQpErg+XjzhqPvsmt+cmZIiXync2WiyILVahqLMAojBQ0tVsUc7zVHZ8QsfpeN6HBqp8UO4RkHiDBI/1Foto7U/+pbJCo3ozHd8ELnB5zk0ohSJCyyQ8zpwIraGsdi1vlJtqY5sSWaFcRgMA3TBtLi2cyvThu6lzDgsBcbY66ejNOkl6bKoryw7t9xLVhIhjw+iSspi1cpTRhJnUwFTzMS0hgciFwKyu/IzQVwgzJnUZ8yYQcqiwA+6sf+IiaV5iGX2Y5BlUa3XOIaqQEFZc3D8USOGa1H0VtcysB4YmKUdOfH/JamzF5e1cnv1kNDUAk0yOcnMWidRkgDWcbegad7ccFw63vhhUCBjYxzRJudD8uXPnkvYfbrKSGKz2761E+T9NLKAaGt9Mrkir38BkDhNJWyhXc3agxNjVQ51QgJS6y2j698HfMrNrLO0SbvfW8T78+L1kT3jdVENikeubvk2oB5C86+UCdmW7nv61fVVZDDLlJRknwXmu66cvVRVmW2/nb1An939YzfY+tRSb3Wk8niM0XHA19O+f6KTAW+iKllz/00dYvFNU91dbWZdHWxzROkmn/foiM5+QadudkoFVsDwtdvUI3xkTKGJ4nFLHloyr8+E9Zfls0q85X9G1xeEH2FXvCoziekZ9j1wExxyWWI75sKV3bNwORz68MaurnO4ayU5h5Ys4J/hCN2cRgZ1p+E6CLkTaemF7P4Vn951Lp8/T3CkBpPWlpJixVxkShxiDA+UKZZvdR8PxzaETcAAACwBAAA236ngIevGC/1oT5OFq/9+Zm1SqZsiobfA6eDzfZrpJc5BYfG4DJ58nuUzBhhGFaSClGGwJnUOjhrMAI7hiylIOAdlUbtTQ356PLtKX0NWIoPqpYI6B8t+mxa2S/DF622LgyhzpXVLnkVjsj8S6//pIm0ulmfQ7pC7PIQBVfERu6oQ2gKkRKm6d1ByxvJtbJJWbmo4AbC58Si6LM/8M0DlGLWKq1YP2uwfTFP1jamP/oXzRhfcuvrCOnAZmj+7cGBQTcrM+HzSuYTiEGYUpODxJjFkvaYruGwsTppHyO52nrWyuiVlkeksZ+leXpTgi7Z1KocDQB2FwDQ8mB0xn3GrABhrg7kc0WGVFLisa3JeUlnhcaVLyYl4lXjCjHsdoo0lSLQnpEmqAXnVFLFuKnaFV58o0ubgDHBYFmfYLOJ+9zzmjQXwezJEoBbTxujmdzSXysYj76AijVAdQkSGvMx34nUhpfR+KhXPn3q2AMRE4mQkA8OzrHBwgfNnBjCpqqAfl7/9ja8ovUWlAeCRHwSdStf/WEMMuR6niL9FwRnZxPCYIk3sN2KrjnV1wuIDZr9eYejLq16qzrSoEcQmImfY7URoseL9/LqsBlylc99ezVmbdBWvTUPdRqHXrvpVOLb0jK7fXcw2zzJOf7L/8Fjc0DiBJ38Bti/13M1rKJSaqh+WyuuFWYFJAtKiCScT27TEjurEebtMkP4Py2aPzwE2pewVsKfanKY6sgeOtVrZpriN0JCatAc/x3SFzr/n3Aivyt9Xy87jEyRVkZ/3RhVqrUcaJoKEvzp8LbWYGHqJF1h4IpZExj5re2JoG1WYwaRnoHiOGtG6U/4YPDuOpDIUuPlb97jTyBVBCgBchF8801bgVyRrPt7l3eREc09Nr5wgOLyV28FAOAW/ckRZo1Crxh91jneDyv2a/OM17irdZLeyWFLFuPkPs0YUvq4E2oJZ0V+B4f5rmT1Cvd/OFmDFAFn0SIxWAuKsZ6Nl0M0hgIsO5Z65+m0zWSWmMMwxmIpJyh3D+ZPj6o7cWZcMK8ZG8FqwDPKNPTx/xpYQ2zAg6dljm6DSRcZTAd0WWZ6881uuCj/y7Q+vtmu+0C2Sw9pe7F884S1ldMDE9sZjBLsSmno5QOHFbyw0CeBbkhPtCWR/J5rKinCz7pydqB1JdLJofEmWknTgvB2SKMRCkgQkaesF4fIjcwnKtzn6BxXf7k9+QHBqvV2QD1S1hOcn1P9GJ+MOj0E2C3ytjeChY6xia+jmC5dTRZGCeotp8XqzRaiYcdNZA25GChoymoVvIBFH53EQmu49I+3XNgAtkhfdPAQLqcmjTuEWzBmrY5VmOR2yJ3mqjj725zH10L/pOPqQ5ZoOEiE3qrAXiGkfVNyathwvbrhV7QnlkdEc8mN4Bzwha5P1DOaGLyv/BUHm4VOxkN2+7ZBd8qgUEN2D/nuCJdia+bdfttKMFUW8XX0nqBul7NYM7Y8fEJJnf0BnW2VXNotkfvbQYl8DIo2MDjCoNj9pdY0r9MtnK6I7I/DGRjtZOvWK4/UvSMCrzuVmQJYnArNzgojrI66LB+ReNVcd8gI4bctuCTV5wBGhQ+6kqPwOAAAALAEAAAoqRvtbpe2xp2LidTD6mT+fmx+K1TQDfpqEdTl4eBOKVcE1RiFpSM1t5ptNSij3uyNJSDt5vUMwHZTc5dcEGzplubk+9V6Yg9OXRoP7CpL0zM5qxnp3XKF7I0iWJ95Y32lkQOKGEq3b0T95XLNJ1jDwYtDhhMEwyDZweVDMkXv8IJxHIQfrEbABFJRCKGXrh9OYp2U5jtVR6sFbobHQ+P9acvpW2l1nNBZaomNyo6TM/6jXwVjtUv3z/u6bQTEvqX0r+xbNVAqoW3fqF/FbAR+lV5ql69p2TNwrIBtzKFO1qDqLNM7Og3QaqrRfOL/c6MhcjLSM6WFZ8/X7KdgHYECyN6aZfsb1Yyce4GGT3MaEjkZT9iS4idT1FKAnVnBa9AVcI2nfXRB7gr993qjlWvYaYokeZV0tsaY9dxb1sfYXc/NPlFQa7f5VOI5qkTjyOV6nHRTmzKssL1PzGrs3LuPAr/kFvjA0EsozWbtN2678JQN42xaSiKjyUipIrh8dU2E0Y2Hhy9xXXXOMooVwRLR5VtTWWB62qG3FzlyEOA4k64yXt2Dlro0q1iPvgQbIq4mFSUDFVlZLCHbvEqnrVIfcOrPoRzYVCqX37S4oo6TBqjn8lwliDWGAV0vkLCzKV2r3o6uheZSPtsmL5yITJ/QGsEbA5n9CvjRZdZFO9LGkULseDXxeSzD5g3mw8fxu2+xANxBF5q+NCc+qNQZVxXMUrnW9cGPzxIxPvVAmv3TlvqTlbRJhDHmTm3kR82aN379EvI95YimoCBoTjUKXtqz/GASi2nx38pcifDS+MrKQfZF59G7dcE7YCXQVZBDlTL9dGtK3At8tjLWriL9M40XvzT0U6wIb2nU46qQwdLwhHsotemvm/s7cM1z1vqlQBWe1kC7Kw14uf1Ld9cP3gsxlpQUHPiRuDhxP18egwY4DCBdiUHGK2Bnvj7kLl1JP+acjjFXojeYNEGn/5jwroimAejH6xD+A5ROxcqmYM8CcenaCsC870GD+xOwszgj780BrXfvNVXD85oPPfEWESAhnU6Ws0kOsu2cn+lBjqVNVr0BonLKGpkBYMiAiE09RhVAO8SIfuLP84mm3bswTfPPU3DNRvLWhoLsqs+5xR6FRcKu6Y+JFGdGKRxsu4GEdp2XOrt5rcWWjW/jUAdrzaB2T264qjgGh7jEvY6ANNPhRZ8e4GPhT0qsl0jINBbWpaQwPU/kQJpsmfgNJZxmAZViUEkw4D9x5dpdOgd+bssiiIodYxyzE+i2vi44YTlY14A9AxCTOs5ZjcjecxCvMLaKtyQeUfzkDC+SuQKrKxpdvxhRtividuqLYzR+kCQVcYGqNiPXF15hxr2MEwqq9PBYzlNFx9O/V0RyIhjK4keupRSQkPAh6Kx8XsLIqted86GFJXiwWbGMEDF/X2jBctBoQCb2XOOMlEc1PrxjqMqWtDmQqxTcKnRNAnryUb4uLvAut2ohEYRlLyF7Ie8Y0SWTk4aIV2boIxPRLkQE5ncjl5Lg6wIi2S6iauadgEQprR9NYQZIpLLn1RF4XUfWJFdCTOg5+CSGFzoAT7lmqFUMi86eQFWnlrO7eXPbpv7ocuMAAAAA');
