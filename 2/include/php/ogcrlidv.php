<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAAA4EAAAN3v4jRSWQi7r3OWzU2nFxpxwtUpQTp+e7OlKsi45Wd1c1ZU+XkP5oDv26aWuxe433cnVuMcwv4KnVJTg3G05uafI1NaMgeeSUl7zp9rjAEl4VyXT7/lqhgHMHUfqQVZPFFBbw7Zc126IKo+HLyAwylQIUjuK2jlZ6V9FZ2Pq0nNkeJjsBm6nYxQG806JX9dL/tPAYREUlHYkfCjKgm7XEhQ3EX6JMtPfA9fmIZxcT8YCnLcJxBCqru+o9NtJMZrxwB85MZCFlWHQ2oc1slAUeFHBkFji3Jggd+2jJHKLR1qBB+ugNUOdGzdMXwpD9ZaWHIjQsnizRdNARzNtKQN0nRWk+pz54vm5cOoEUdZZP0BYa3JmqmpUlo+p9y1zVLka2hUUSejpozrsI+k7imhkj//UNAm2cIbeiOp6gXvn5TX4FbknRimk0Gf68bv3ibI/Cja9yBrPHl2+cy2M9sYLdC1sZE95wcs0XXWIc+k/UzKq1vxWsQqaMu7ni7ho4E1LyYTvsTQUUZIOTCUfaV8f/IbWJWiBuVEhC7ffGYFaJs/AtT36xHoKV04AEq8vgcQfIasNVcZLvQKgeUGAqwpkTGocc3Y416vAjDYI0oxRbVh98RhvTmxsvjiNRlDrcWRIvNE+9DoQ7/BQfsMQwQfW0LrrMUj4U5m/ELcqXE7rr1YO7gE9v8FenPFg0xAJt/7i6kp9IifU4jdcwvjZnXyUXKHE3nccRoeNg9Vi0arwdYgqdJ4fdWViSDiMOPWpt5aeqmnOxInmmCVY2XDkYJ4+07mrGf9ngvMaLkekCWkjOS0s4kW/7cSP/WSwQxJ1BcHNsg3zs+AX00VoxC6GkVcicpX+IdJmm+KKelL1uEmDavGzkOhNhsxcWqrkXdN9sirSsWOhU9M6cwU+0STSiO0w7B5WdAIXIfFD5kPDgkNU6VFYMXf1Ljlwde1ueaMYWNq+b1VdbUQKGhE/hRaJOHEwGOtNMTXCluJSWdeqP8gv60NCgU6lCA4cb6lTVXSLtY72z2vSczBwTT3klQPPtpz28WjEy/jkL9evnHLK31atgwptCcP9Nm5yB4720NoqC0F9wP4iCkKGUwqvKwFHQgLFC4JIOBrJbZNhvEpduElMBvwck4msAgw+haeOE05hlMzzXTa5EREZ61VMDhpbRngoB2Al7rRV+HYI++gt0NfvoAasBes759NyOfgFjmMNEPWikOA8TSH4xrdQNwfKEqNp5m0rbdi3Y0iKlYIV65qNb3PWN31a1GViTtBrBjZoutmpoMuqGDbQoueai0D5RNEKXJ+kMCOCKbteEQyI17NAu8QHo8LY7BzCvlRNFHUoh30QoFXypAk9blQRvyVgEzPtWyEQWRqO/QeRNCBvcCrpx2jZkaIXBpKuxK1NC/YglbTMAyKg8qgvPfuM7PnadFoa344Hyju/mGproU7JCh9WpRWTLiuGduCw/dQa2hjk56LGz1gbaKMJ+NI28v8iQFrxVMLJng/AR25B29nmM/1aQTe1tvkVEayMwLE20i1dphlAQkwZO4lh/35LR4ObfrqLE9bodMNr2a/Ut0V7FkHnyO85vFIvQ8x8Uzjl6Ck8C2DgYorvwfIgWkTAUxdIkVgR75jPhDDyeLx5hSof/PdfmH+Emo7Mp1LiReG0EcABzP8KegUiI7zbE91nMTV31djxGLSev1o2qriOyKXuAfQ22p2nKx13FTBjqo9GFwhYurrkf5MDSRrko7GtKanp+dVJz61T4noXcwwr5oSR0Oqd7SGmdvkMFcq2AuEFUZbM3VX6++bGlXe9u3qsOQIoUVgoYsoDP92FzszHeMvDcrO2IZiOFAYtQ+D1eMxah8ZRV3E3Lw8r6DFGMLxx92KDtEi3VWZToPtphXjM3N01uM+3MddAaZB42Zv0+Jr8m983z/jVUrpIEL4Us8eo5WRqsVcLSmWE/7rE5KGekMeA+FaT/T1JnkhQH9p0p1u95wyn1cBHFdAkDRPot0ENt0tNgWVcjESeF95MpGO7a4K+pD0g+8OjPBDcVvZk+cnx4vGeN0XFGRXOMiQR37zIpXsSUHT8M9gREbsIEzdtOROVEGWfnofACsqjE4CrxxJfVtld8+3u5aPQaDy6nDsJyJO9YeKFkt8sJUK4Plxz6blsm76wtY4fJmG2cXmRiYH0RXJIFkwvE8HZyYQfLQI3XVAos946PTMAr5fkPQcrerfqsZ5wNt7UjScWVC+JNJ/kzdPbKSqnp6oxOkpuvtCvo8rVXOaIPJQjlHVkEBXXJdEsh8QzHRkhxDepPK8D+bguZ9zPT2Fcb+R3/FkA0SNxRpbpLcth2nomXEyelgexvuft/ZElUqn13aKbqRqGWZ92tma5Yrg6Xll3Bzhol5/umnoVAP248VcTbN6rC5u6MqgUyJwGJK5JG8lpkQHoylf2zyE16GqLX1v0bmqeXSFwRFB1ADPpwjgPGqgo1AsuwBN7ge8IkA36L2Vnl7dHttxT6t14EmZhPq5WtWJXer3dP27wcKiD85yz31OHE8wa3jW7jb/Xo8/0Ta2l+jdGsPgQ269QZ2S1zlQ3sLjormoKq+IMrSsr9UZcpI6M7dxvSlEUKnHtDmL/VjhkWh1Zc3J5fJZbxdlsBjW6BjrdViCfgDKjZ4DVn1KQ9kYimZuPji9sAHpKBN5rgual0bGqeeYBCmX2xpu+nNjs9IaEgxFKa/5q5zfudMSwTs1ksuzyVxw5ukLIu7ivcVR+HbdC58Ii0AGNkQOMGmxIxmPMDPMxKa63FTnXy2sAxk94+83XEAgZDMWEy7HSvGlz5DZwUsruYvHMt5xFeKcaCvmgU78ra91k2Pol+ECzN4G086l+egNamRxxyEQUE5/MpL3IABswB/+1Rca0Sjyv98p0pc9GpduKGUVmoi7IY9slVC4Er+OufgAI/RRC3A82bnRIkiWvrY7WcC8URR6UfaM5WXMd/nN5PdG2gpolrJj0fiG4K/BVUw1JLEPhoR/hUR0PGL4cGxePCfQJivItmPzI/BriR33bk0ML9vCRP8E3p9Xn/Gm6qyvSE4ro0/FL984Q4aiGkbckQQfOkjlBAAdlXKxfTda45vt97WZbs1K+bVlz7PL96vbgTqjSzFd3DY6hTShBfXQR+D7q277fL3szEPEAgenQ6CToYqIWY2wu5zXLY5jo10zeeOL6Q8DaseHUYHdx+sKX7v9t0ms4lcdonVeGscBSRvLiwp1xzB4o3ZLLhs9c9X7WzKDGy7N2evXfAPqXN9yMrRcK6c68gfg7XcrxOSS1BMn4Mva5g8k1DrV6oTlEcMq9RFsmQ+DUsdJproXNJu740klFrm9huSjp71zJIgZE5fQk9Dp0VbYLWnDWxImHMXeK+VsSY7FcDaH+pSvBBTl32v1gQd9yQlTyT/dGCHzLyENBZ50tp28S6I1N0+jn/FLlNNftqDMb+P+fRjDWBE6FeVYGKr5bkwBAsnH+aZD/dMTTNyOEmfqGa7LKqTgJndcikG4LQ6kTbfWx/1K+ZMlMWkGAZvDY4V32DUyDHthh2A0cXLoKKLfoavNpdSrowD2TnqWxslruQgMrNhV7nY1xIXlcfWqQw7GSzd3dQK6zkk+fF4ZK5Xh5VPvDjFjUT6oepjT0KuvsPbBWjMVfYIQpYI6nQLGtHBV+ve57bWJQZNDFdjYXcqhBlgWth8sO9VUmn4H735i4u99NH7IgLS3t+bXRHhnCKL9g4Le59wcIB0QQ2qrzUQ7AXStn0jBbL1Z3qTSkjUKsweCi4+oXYmsY/060HcotfRScjGxnG+5a+ShDr7mgaH55hCePdbUuNg12MuTiDZfxOtZUvM2q/efp8PyXuNdSD/XLSK7ZQHV4OLI738gDN+1qXh1Sp/aq0JVNYNWSYLB8k7FDjMJZRB0FAHSgw7FGPRkn8d72qurL0FXkID5SEFzo7av5GyvnGwSoGeKq7ovs9h7W1NvocQkXO9uUyT9t/nvCnwXkSQkNN/w1OoM3jwBeNVSopBClNTaQY8pp39c+KiO8tUBtKfonCSBBQTCcC54ylrWZywyhtD5vvOUnSoEAZKUgk2dtdUX9xlfFGo6INFUfPqbeHvxTFF7aPM8Z+tnWC6oNT0/sYo6SQIJx4qxNqjr6yBPF2Cbl1a/Nlxb3ZhfZDsBHAb838LUdB0OnY3FgOQIYyHOMiWg/3c0ogywOvLGG3ecXxA3fUUIMz0mEBjIi5srl9WNALlFAj4zjVewYAwOBrMXnW+msIUOj6cv4YY/MgM/kQOBwK2o2rEZ6z/YBIE4W1pQqleygfnaa5u9eo4d0vLQ11JS4XqYyyfjL0t9ljZgHWQNkIr/eSTpemupfVXZXRU0bYliUqx0IBSPwHKCfc9ybmJq99ZzcrxFMXyCIuUjWnI66L+Izj7RRSP2pYrReEJJYJaMaGIYWYnvP1fKcBMjrMOUgFrM5XMcrjwWCKA7c5AbGCgSffsSXPPkqzDo/En8tcGgXMfP13VU/MF81ps0gHsh47FAbxnKmPZCwynjV+fsFV7+WJppCMhND5WefoIUBpApSv+Us1aEsLyZpwbZ/RSNN8mVD21fE94cdmXz2wwP11jr6Sm3PKsZMTr6BsOFZlR4mveMnD6mD1KjOCotcylnMF2NrYg8LVDL1JdkyfaxAMzxruZrRVMZitgHr2CdVzwU9kQdsD3gP4j7FJ2LUJrBiiI9jwrkMqfh/oh415j5amLCNnVV1Hola/Zgr3w9dGHdGAy4a9bXiepWQgualBkN8+69gW+EHiC4waewlAjdpaMvGbLb8v4HF7boheofXUOSxFNaDUO+dwyfTnC/p7NJ9BFlDGNN5JItVDSPNB508km2Aq61qBQi+vtrqmpSxrPbWnCkFOoENAsAVP1C2I+pNWTWysnnlLVDgX+n9XYCoKrI+Gj/lMtst4oB3QPXRx1hRaSO4nxxlw1TcqqJnsiv+CkM+TtsMvEvVPmZWLuKJc2mjTRDocHgIgEA4Goo1GQbm11+yX1lseEim91cgAaRKv1GgyizG1jIRaeiEWVmO2fiAdwFF1982D+YMKgY/R+n6GtwJN7jNAto1dlt80lFWPEzAJiHtTD5zIQmY39GnB3UyACEYSXTAgm283yu7GWEyfR29YRTciD8wEUqcpcZXBGqdaTg3pc3fpM7YyFM0K7eXpwTKSM3olUOEQM0xxi0kYIXvWOUee4iyQd0dVOMAHR3ZujW0eur5LFmFBSkR4ejLKY7k2jYTkGKW6FiKQvKNwLIJsgoNl6bh0RJnLGuX3k0AWYzXRTmKvzycLZP5SHpu85Oobd27/2gm2r2mjbsmAGJUMN+Xt7f3yqEMbIyPEhYBlVtxOM9yy9Yd9htZZW8/7zeqEOMVX66Wkq+qUXjZ5palD6OepnsKxF2XMvvpifMZMPBm8nYQdaGpwRkuFNn41EzZJy41aU56BcCpE6Z32ZKI+BuJ8RenZ4W8oS8B+/uw+1sbk2tLfOj+qMvjGhk475JujcyKdv1UeuWXXVl/BGTXiRWe6ovn0CWkGeWl/OYnf6ukeC9fNQAAANgOAACoVIGGyngFWV4aQmN0lEjq5ZaELaWXUukF9EBlJFwZBskbKmk+/AYovmrK5AbKo0nrPQpmpVYEU3WVTJwa//IakeJNvd1tGLaWzzWZ81qkdIojPOvdYhze4fKdS+f996D9/fE2fXP2qh5RKFyQl6CC/qZRJ0OnLtj5ihdP7A+dhCj1LdGCsXtwpvs0fLwkqsuJZW/yS7jSc7nRTPFm9wFUuMRezZpBILKzmVParJoA+oA1eMB9a+CA/fOn9xDh/gijTFjAHCY5NAjfBjZLkZB5hclAHGM1TE+46Ln9tc5C4m32aQp2hP07qmS6s8ddvkYFnZWjztfA2lzTXuC0eBMhy0qgXDsTj5Q9nyKq8JDGpgqxeKvAhNyJLeaXu97VxpvVds+QQRANKGH6ewWLWxLPNxOLvrDwN8IYtWUXw2YVICkhNoM+GQxUu9BqxpTNvu2nvCBl7DvbmaSc2ZLWKx5EBM2lj+WM3+w7/KTqV2aFLLtj1btKDSXEM/YJO+1AD3R0mZQ12CWn/AIcg1MSyqR8URp/eEQuSkhTjNhld6ticCk5UTBw+bsDaJgLGYqSs0NayEszWBLW3qVPWfNV8OVhgq2oeoTvW3J1WsbyW1sZVNK8yaE8S6TJqGMd7VZ0P6b1Lh//E/wv6mtUmUb/b0pRgKqJ/Sv8HBGoeu7c0fB17ikNnIFoOJvggepEWIz03d6B2EHpwKhokTTQXCh0tEZUTlpqTWYSAaCMpyrnKDvasjhSnD3leoUEJkK4k/hG9tG9dDdyzncVEkoJTx0kNK6vwECqCeWSo+Mp6Mb4crozP7w+ELo68OtsGZArBOCg65AtZbI6rIOZzeBq7cf2t2eJK1XDjpz8igIIgNc/vdvSUlvXBKEGNncKP/566oHnWZx4EH62kQt34TWcDXT64apXzz9Powrj+BBkgc+beVXXSY1KsqPH2lfHSYS3lagGqXThpaMEZ7q8eAXJzy+Pr9L7dNeHy5REKlvPhKqhjZIIH05jqU4YoaG6ZdigZr4+Kqr76WXhv4ihSKwaKDgSUu5oA1LYonq0I9IwuVQ6obE/wHVYcufDe0AS23NA9X39OQi90xIj/pQqCEuqOauVoAxYUNX2Y8Ycj5IPJYksCA9/Vt8nVCG63pJuzfE/nYu1FxUgMoDyDuGdX9IdBgNId0MOqLcOVHHJEj/Q+rY9LHtwc64bR3iOQ3H2dkzE9zQ8ql6a2H+9FUjsduOyTbc/vSkIEmv25kwpOCl1yNq74e6aErRdNIhmZsC8fWHsAhACKTgFbi6SRggxlUifeVYEh6IF3NvaWBvMFv0kES3UwwypGEe+4l1U+VE4Q1cxCc199xd/dBdoim4+CnKOR+2tsNf7/GydRs8lwSF89lwgCylb6/qqeCaaOOeWQLWo1GW8YUweAP3Zl4vj/RWv/0KWNT+y6PCvAxQjRCbQcSuNO6Bsa/RCb/mujOUxhNUxSQNNXgT++CzrUVXXvLD/LiDLI75jb9Hhen4G/zTGYNmvCvGOrjdUDc1HkdYCSEVXwBrhQQdOoTfjx9kto5whGPJKa18syXWAUyAZhxnYPgZUjs4TxhChOhGKkdEwE8yBnQxG1/RxOmsGAxt5lfuRMZjApHKkuqVzCyKsTVxSUYMpJddYYVPjrkVgvNHNT1UNF2GjzJkwhZQE5A2YgxqI3r87K4lsDF3vmrB0MurIGM4KWu+PzWUByOk1iZfF6CbNN1zWSwC/7LUAbR1Egu/Q7KIqbYD3jDEbWlzefdJZh+TiwarQPXc4xnbTU6qTqyypmHVtuJeA9rNcN1Sn1acGArjPCdFKTI7bhxrl/D7sqK5594XWlpsEqZrYmfDc3jfa8iRZXUyi28wCmEp0FpZDnZIFhv+i4jHdgBo3werqKOAWbTlCFuW2BgAId7effrUP4tBURwVLxszFUVw7EacxdkkxII5uDrPJuwRj93sRBS+Eyci6cBTXDPTMLYBjq4KyPJrmL7s7LlZjJThhHuVErLe8VIGckvoW15O7bWJey24tajWvxeF4UHIQxfRhqqt8kpNVzGFSa4nsi3+ml+G5XX0QAL1z9PaOwqviwHodBRYsmKO6Q7yYonbGYk4rFP1tbLLTvOwcvHYHEdkROm7+0zdX/sJGN+qKgnd2kR9WsNb2WaaUS9cj9XgC/l3AtMKD4rBUpvZMBG4Fsr3xwmq+4PTQlliUPEEWYKUi14GP2g6bCBKN9GIMqlN/aHb67UoTNWb5M9A9VXZyjmzr2fDEMbFng76xYY1yR8cCzBJLfa6TxyiujVF2c5PR8sx/xGlw2O+2r5UuM2CYbFMsXyg1pxtcsSOX9dDsFDl7k/boIJC27/qrC/hAlhl70gj02DXDmJKE2hBIbUEooanLhj7Ni4AFc+PYSSbqn9FOf4/tdRR+P+V2Ab0NYKt3qL55pO/NzZZPUYacEwsmldSSaEqqJ1Ni0TpeWpTz1acwpZI9LXs2dbRb5u/UMT9iNzrtF0lBgki6O/zyyq+UL5Oby5J7JVwJeEfLiop7goiGgl22uTkkEMMly1oHaNQ0qnRRuoYU2PN5xr4EG201Z+LW9atfxk4f4KvBRnPw7ohIvM3ehB7Hu9P2soPXQpanZA+7J9/Jjm4i7afXLU+kvoyjL2/Les+OKkXwiMs/B89eP+waqJUnJaLNJVHTVGbDKAz2vNUPdKLlFJJdYb6vbHH3FQzUANbfcenxHujROzLU+dfoO0BLfLQwWws8FHxCtN3vbM8v756EylpHTxnOmmp9yXzGrK41xpMLof28BGpGEVeio2WCYeBOVlK2am3mnlQB/+gJ2eQ8pmhsi5HWNXikvrRlvGflQ8rUSz/6pTwaj1awKFQuxVScNnOaY3yajL+5nMjDaR3lKO82ncNrlePTCwM/T/e8iy9AbFbKdXhh052j5kMu61sPpVrI5CbzGtcwwQ58RcGg48WmE3AgxlgA+hQxCU6Vf/fp0wo8xfhZyq/PBJ1WuNeadFU6FUS5MO/uvgAtiHidKwd3X1PXP1A9J3L8Dk3qcXzyQR60TUWoyu8lIcC5yjHH5ctSTwm6p4I5F98DpSCBkAAPTQ+aDCo62leULs+mNXC55WeUJEmdG4Zu/J8fKrXdMc1l5U7qZqQElCGckbFLI0p/J1FCYezoGlYj8n+w/o0uVYmoXITcPB5PcKlw0KlBMgdm9MQH3qOxkiohQD4x9ZWVyqzyZEpz+pvK68+eLWC5TC9rIOnYS5W7hAJcihovw9OjTMcKCWl9MCzcNeSK8Sxha5Jgurr1sDRUVtrY3i8M+fOsgFM9zuZf5nM0n6ijbuGD+RDZSkrzuq9KKzU80VXdyb1cSBsG/foh8bucmf5+/a2pK07qmF4Y2AzHK2VbZb1lFGCptBDlUP1ovBgUUU+wLZG20cDadNPqpopZZW1/oTWhafFzzB5VbG5vmozWdTd/aBwEBXoTgty+eLK4F19Fivrcv18e6NL/KpZmMFbNp2p19DIuHgp38/BvZCxLvzPGxnerpmu5bJbec3cpqL2zG4ffEczdOf390VGHkBkrY4/jWuzWiW46dDBv7w6Op5+jWoTWPqmXSynjeXDZs0yAy0v2LxClQT2plHx8UhXCQuvFAg1j4U7zCL7kDooEBXkFriG0841UjZ3sadwfCnvOyB+xIVU9X17wRTuyOmpGnpSlT276GcZSMpQHwU/h+TI6mvvQG2lnouyKS/iQlsrUYy3UU6vM6YpDDL94k/HrSY/k5ghIcIqR10A8l+hZeq8jlQKvR1azbWMvjeYhhO4+pPLkebLLqvk0rfEWHxsS4iKnxFH6qg3MiGt+zchiRZGQp84VYfnp7ofX4fYCFzGGJ391ZipUWGrJYwf/fAen5XFTm40whnToX5zg44dZCLgf9Yk0mPTJiNlA9X9nfuk/WvZjMBE1O3SLoR/Nbll7D+ixQdeCGxs/C0AuTxesaNtKEBKaOE9g1U1IemDDb958BChbLSQwmzVc0mRl9sEDnNfkwIfC/5VN4rdfYHx26Bn/5TlAEFQCDR55T0h/96wdnyZ4wqnCpr5LymDrae4t1KrTUwddN1L2bcRb8nPjIGBXEJHIKviwPCJ7JJTp23z5UGymGiP04w/IeGskAC6qfRxghXiOU5xZG+iB4icdwAmqJvuAfqMQ0PYGfUuGceEOFNXZwcCDqlxm4Ta0YIvqpcXTa3PZzugIS/o43kpmwfnq3asPsXDrucwdSkA13e+HnnnUpLhE0LB9FgsPryVq/qit0gjDMgZqK397odsytWKfwu9O/t3Ds+LsEHrssn6H3LuT6970L0IcdfXpGFy6JkdjOc39Pf3AQIYHRZjH/2zI3wgXClT+ktJ4d2y2ivLqvr844UQgGXeVQWKsNtrXgqzqvWiGDaJE/kebjxg/h4yKiMPFcTboKFNHjTe/JcJ5alW9NN24g5/9tPCs8sRQykGSBOl6vpDG4UUKfaJjbn5Gdcyy04AP/fTIOzktckgcOGilU8Lk+MLBJx8PSA0jpYd9cXqBLsOJdMb4JvpQ9zif/45BIE12PP/G0tuAPVasGKmHUxQAc947xH9m8XxYJKIWJam1roMzHYLswEpdybpunG4vZ8yXtvIvzq1QnDhJIv3dD3KmTfeeF7CHoLA/UKVttEzhZEYfRxPbt779iCd75C1K4d84pVaGs9Zy3AWt/iIY8d5dT/dIURx36JIuYf+OYkcWTeXYhJOhcRIxd/6izrU+DOInDTJw5yB++T/qL88GIYJ1GlAmJReAlvzSIR/XHoafwcN7uGlGlPYkxSMEJTQgXMx3xr4F/cQAoYrNliBcFXhqtMRRhK5T+OprLlIXWRu25pebzo/Eve2m+366A8pSvhYCKQfQFvApnRq7trIF/YS+Ht1G2Xq+Pr0l/IVdFgZdQWdt3MyjesO5RN51MxLIiDBvPZj3F4glpWi8bf1ux/UReNg8URd6Dq+ogTI7jOku4Bic5Yr8INhb3dj7T3DlnBr83XVIFC0Qh65ssPf2HLgekuvlvw9DOlFvtKu0slEr09iQidqcbTv0VRj80/PAgJANrpUqwfucPG7NVO11GrcZ9DYAAAAQDwAAKzd6kESc6FDOenh4DJmSoVZc/vMoapeRxpXAb2edOhcY7/tBtM5Akh4IDA9+6k69SgYx87okfDoBqOjT+2cb58orwQsyx00J9vjKKMnhRJ7IUH5gX4VcSopb8k2/Jd1qMqQ0c+Z78EhG7k5VjMZevUw0crV6iOs6FEIbvYycc3iG1cc1+Iqj6TFFo30UZwc6RxifIcA7XPqyjlQFcnMsrwZGAYt3d5ea6RMs8i7O0odVhwElwCC5oajut8PZTBTK+cgeNk/klKAX/vJKJAfSXnMijYbkA0rZ88uU3IX+d69ZmHiE1Ef/HhW0BP7347VYip3d0/setDm3+M+u5BvFIiGczxf/x+L3onLg+DirODsPS8b2F/N0MjLHr12DSrASyxH9QYHseaYDnVxuuNoYThG5sl2I2sgdYTJh97Oby3u6o89c/oDezwpN4RJpUr5JXVOXbe/jVbaPGNvXE8LpV7H4eWhH3MUQmUqDlsseze0j8NvZ2NUNceOII4ZMriTnoAZAszJ7L6GywJvS5jabiyKj1F/ea5R78wfEQ3IRwiq4w61INKgWcbtghcz/v7TTBWUk8zB71P6yQ6iC/miGmmLVLvFKuFS9abC0TT3skx17GRjKIc1Q8L3VYYV7PAgpFQpITsBNWmTzxARx4fgraGOyuL0Dnt9DoNocpWrK/d+YMOwc1RGF+EM05ko6fq0DLn+y4RjgghDPZPn00f89lliTJOEs1KnelRGz2yvc4aDrklOJI4avYHjdYdTEnlDpjZ5Xw9Eiu30mCT9vTpbkHWtKY77PAnTWNaJtaOtW9kEqhfmw6GMxxGB/v0au/MJbpl0a2NLnxY/y1lwu+vbnzp4lGXPCNpWQeNMuH69oEcqSu9quI+BFhnvX2/N1Pr+40ORTSQsvrtC0WmBAE5aCWYM+UmPACwI3on6myuCCuvIr2/tOq8WVTWXYuSb02pv5janSgNvyDy/pNxLmlq1PYzEpb0Jqr7PlWJU+gEWbT1YG6REUzmB2C6v1gETe2VAHSJIaNz/HYILnxUnPPaHz/ojBELRm3sZ3u/1Q6j8KdQMPJtDM0+jqsG70g4C6Y4V6qb650oO/vWrmDncJzSKDusY5yuKh15TytNh/dU1SB4ufZ6B7mxqXs0OZWR8mycZIsAliJDrubapYLKkNaYVX7dDapL9BO8SAoGVmqFS38tdBhvhl71DwDk+kSJ6FyKMz7kmMz+b6GDeTDqVWlg985wi9sqJdD5c7eJpUm+ZIZv+cDCBY0aZ8a1i7vzUJvmRgIjwt5DCmcIc5ZEipU04i9qHkXxlKxml3gW4DziZvl8R9TEKntNTFYN3wRyNQlBb7R8TgW0TbywunDdgurxa6Hn6IlpxB+sNVLpXXxaciBviuH5XnGh1+QqqhC/79FHu6g97RkBl2UF0Ho1ZOBk7jTUbGxE7/cqfcRt2uCbZm2FYHbm8LrH9f/l/XgAsv3uUK46OBGWJhIhUNmGeOpspFndsbHBGhDY9rl5l0iFLK/J6Ylgp+jRzgZ4r02/jpIh5sVzvhKweUONcJfvPHpimua1wGPew6s20tNe5IV7E5EitRcT93JE+Vx0FmFXo/0DSpNC+iRmC4reu28XQskwtidIAwmhKIQDVAaWZGJhr1qzxIG2KgT4tXEunaF3zB+DYwc/8KdIla4WnVDjrWw7KGSeiB/lyqePmxg9AGUeI4F38M6NiWtIdCFzc9TUfNoF3kRSWFziPfR5TvznErnqhkLYVcIef1i3oTovxeuu0gMy8EOLZlo2r1AwhN4LUmRez63J7u02DbeXxSUumBdnUjj1D8QEnJztMBm7OMoJ8V4R4LXVPe+qJqMsvJqN1H1fK+CGvZd69yaVhnAtK159s6ORpwdVfalYHskgJgdJMR0FVYJpN/Zq7NjkGF1vKlLoL/3Ran3amzOZ5E2cbzCO4rrPNJnXJfOJp9nVshv6y3lAVsjFFxzAkCpswYULgDFGt9tPAnFiwGAX1wJNMtJZkMlrgi4EebNuLBcYYNMw8XKBG8D+3DWlvPhhJb6gK3BOuSaRk0JDWRWiaBcGOlL0zC4KG7wZU3+7nceCrqH7TqjcJxxoPtdMrQ8PFqel0mV7zilAmkhhDTjLS7I9FfCVg8+Ii0H6Px9DrPmeQ61Dqx7I+oHWk6L2si5dNh8bownvww15MqUfnWUe5/reBiE7a1iKrfxC7ypiWSy7VpjfmYim1GbQV8p7lMdUXAYCYiqlUkMDH2n98ZtuCL/EbEs3xMmn4smTKhCVzpKujloov5hknZWsM/fsAKbjDMthcYKQQ2DYG6gvrxEK+P0R0N1FHa1UZLerq+S1l5AqkkguVCFdY4xgX1uL8+nrILD2pdDAiJ4rOs5jIKGVuSCFU0OmW3UeOOW7DrE8c4wPLvBoTWfbdtYOK1eox/QxUwfh9io2U+otW5UYbgJFE09iaHZffoFl6Vi7bG9v5I5uojOSxjvEBhQT/6sElYUOlpwttBUBWxCzD6m6h/oc6Ovvkwx3LtsAzXpCS2+Vs+eajs3MylP8QobRBI2J1TDbq4Fqfi9cTqVzHSH4O5btXtHmjX+ReFBulkaHxRGo5D7iG9eiWCMTsJkPPOWYyUHxDZLcUXGtPmb6AilC4A+ssZRcRQKBwcWzH2h4fZfuN9SksrumeNM8+bujLNy8toQm0Balg0pz5uaCfK4cKfdQ9UOERmDG1y4WDJFfI8s64tU3sTXjnD4oC2nPA31/dc/+v6L14g/sHdF5a0dJL8hWkJgxsSkw305a/v3I7rFtNDHonxh1omj8XnBiOPQDKU75T2HcGb1Swt0LxmD9HAnawQQ22t3nbMbT/7oCfBypbcvuNOnIaBpcUtspx6PD2Efw4NNdL2dN5it4f9GA29J+QCAXrX+0uEglvmFoVRwwrXdqwDSaYr3lnShbVdzZw18c/GG+zvnZ0xAVSCSSAixCAWQgp70M5QBCaho4Az8VjR5a/33rqNFa/rU4dEzYyWWLbj0gqTKQuf0P5cIGZ5pyK3850BEHaRBcb0g3LDRNgu9wvbAdGUIlKL/9Aj9Os8Uar/cy4i6WnTUiT8vOh2f5SK+b2hew4MybsA5PArzbWut6MHUja6YC/d752ExYlSxohiWy7Jw0frdVjTazBz56dg5cdiRKxGHFn1AspRTQ9z8AjbDf62f6BlcIkVDqmMh2zchSY+QocT29dUSElNfp5CSR8imz1ACt1bdZcI6l7bed9u765XJpntImWYLkgOUT1l4yq65IWo4eQlZzAONngBP6BnVioTttuLGylFZ4M2Zkmt/G1F0wKLGmh6Wk2W+v5LASvnMRMl2q5gUNQba1mVbzTM/LNcx43TTppmUeT5mc87PbhXDAOlljTOQV6vbw+ThrsN+IQCBQ6/eDjbOgaRRAAao4p+dQbO6dtPKowRxPLMKKmzlVQYxagreoe5WGMoDd+Qf1RXko9sksu/2jx/fNGkV1Tki1OqwNhrbU7e3QvxhWODMYg5XMHU4pHanmoCCYnbvWN0R5QcZrA6v9OW+e9z/BjYB7MXOeEmeJWaeDPrfi78qIvWGuGKfj2UcNRkjkxmmCeVjz9bGdAWhnhLuwpFMjUlxJbSS0F1M7KAVMF43wLrhkfgppdA4lh1nLVEmsnoBzI7ZOw0jPaILNrAYEk39m4dCyBvvao2IFHpuUnOPK53JqFIAUSzcbv57UHKIKI02y7j9fHCH8jX62PfqAxvVTJO0/QXfmjPS6aWyyEwCsjzr3lMG0aqB7eicEL2i9fUWBretoA/djX2oobWxGKkTRelJCEN+0ASDQVAmHUyasEVDg/OYxIf2RTJQvXb33zlXlagjQmS+/HiiLe00+WinyqcZCVZkoGEfazu6rQ7jVVAWCc8AajeCU9va2uR9ul5UFQf1sjR4Bp6FZVCPaF8q+ywVzq1LQPf0eND85U2JgZO7imUPlITqq4GT5eaX7Qeet6ehJWDviwgQnOLQdt/MU5XobIBAOAG51XihcYe+wgNVrTuoe9mXX58NnDa+KDKaG/YbKpoo4wETOWvlsBUIo/hduJJ4+A8870asywZeHgga0MLbOm3b6ezAX0PFmVUJHxlb76vPBkjbUdxkiZXVrR2nefQi7Q0YLm3cV52bjNazdWqBJn/R9+uBgXZhECudHX9/iz88rVheyZuVncXMIByp4Sr3F+51VJM7XAdMWLmXvrG9RZ1/KzsQG0zgomRM1aX3tM/GRn5LpcppFMObe23XyioTK0etoihXj0cTKNoMtCAjN1hflKyDQ72yV9X+jPEH4HvuAKqBJwra27qGE6oVAxoGoipLWMX0eplZyJO6VtKqvC4FOLPqkDJV1lPI3FN0rIvve1n2ZaiXpdZuknT7E4AfXTOaqYPPnuvD05hMAFAYNUj/eVTgxFRD5DyxIJCXf4ajmp7JvPVwL4cTgm202cbYAs1CzNV/bVhso8JFTQ955uRmtNXINDFrk54H+rK4mFO/O5sLrJ8f3BqEQQE7bWPrFJ/qsp40iAj5ZAqPR6j5DuX6fI1EwsRc/sN/9VkeAl1SEhxOWGJMrpwqZfsxljkuO2cyB3akCkyeMfOCq+gkAUNp16OELnWMN0od8u+OCyBUlW3eAwQS8ygVj4rpai1xcqljLiNz6IP2n0tcNFS+sh8xr2tJ7kvLFPrc4YCgUiEDyHstEuivsIIKYlweDC+eDoG96fbSgpObOc02fMYXP4oHvueMyn3IFZ5PhW+0b3+ntwigGBbi1kn17mcRa8k5+Im9gShd1mxO/odHrCVAgSgCbfBzW2k1Abmp6HEg63yNqu4yYx2XZyFa34/UWl0WpAL7goojmUgSjuaDIRm7Yyh2tscLQSsCw/lLtseDaj+7HYwTfulHXUAHTz9ivfSkOjSAzv90VnkD8IBN35owIyOvkfgfBqv5IK8Uw/qC69se2TTSxdBR8k+Jm0JSoMqcheok7xhY7IHWfXYojjciJ5iHGUlnJWfFIsm3cI1yW9nzB1RKt1DKhvyt+C9oxSAIRZjF4wQjFp0o90z6QEW5Kn0b0h/glrDZZIxJXsfKegJuHjG5/TpxU9Rh2TBKjsnnKYa2GxtpSUwBTXJp9dUa2gYhqoI5dt/napVbMNEtc06/RxChS8D+jR2ERrBGjcAAAAQDwAA21aNGLOpZQA9tIJ1YG6y45Gw+T9UOU/Xv4+m88A6fxEy2/MyXqRx8I9zrO/YmE3VAICwOKCF+rpPaFEoxpQGZKF0+YuOyPBDBEGXrBvejdo+Gm4tmLcecVYq+trlIfuN1H5deuvdhOFkcNRmDr7/M/zEi0tQlFwxN0qaZ11uRsy+N+7Vwti7tGHfAddL+sErzKSx39SODzGbrtxsBxmiw3SnzeKmTrJbACnvdPLtKER96p5m1+3KJWueK07LkFpD7F9ClMGEC9xn+gRW2SYK4oM/Cg5WWM35Nt25YRlYyhV2dg2fK/wixYcfW2QSGnaLfd5F0x1CXSqvC2UyHxWLHNtfHSByu1T5+WDuXs3bAKusy8+tzfelCdpFPsFxTZnMkK+DeEr4d8caNx8k9Z3uIIGc23bT/kxnCynUZ4BoInrCs4ddsK2gEirMDfAOTD6eeKybb8ckaaCG6B6wMFo1y03+mGmyNtr3iFcIrkCUgvyMywIhY12PpyxQciz3tZqkszN5vERI6TUHy1vjh9yL9AuzMdlRySmWJCMzDnFOg+SqY7mKwmwkYmRiv76ZZ5TMC5IYI87Wmmy2pL+fFKjuh9rR83jaMr6nvk21uvH1iDUrPx3JEEoaILH5oCCTj7mg10xDcmtHx9f0tFw6LpLrmFDU2O87N0UMEok+Lp8I0VWSmQSdKopnrhrfHZAu6p2qYzFRhGHEEfvYtzDDQye3S7wujqyapIeY1Lw2UwT0h96I/YSAWBSrEeEf4bjeU18xlR1fS3juzRoXOvzcgwLS8CDBIFmTfkrtXnn7vS7OgGZx9iBhgWduR9diIJG1liE6zbj4zbcKDxzU2OTg8WiDmhZ+6M5MuTtYYPoLC4Rs5QeOin1rhUbqp97AP/g1RHrhG4BheX0ghrnmhAse19MtEzpNKNhw+MZpU89w7QVA4t5eY1vyf7rwRxLwxse+w1Lwo/Y3emuZhPXUgg3/LaREII8rv0s0to25KeR+hr3aR9IyvITd3nb3VZm7TnmbiNp/x4KAQvzjKtJJQJcax6t0IIbDCQg2jxCG+MCan+irOOtQRE40hUDQ4P1xmIrrOd8Tieqr4deoCf3xvUMe5gk6eVhFimltdY/OXkkAAGC+OwNahj9PeL1kVaF037/y2KCCZ33BtWcSoAwCwuydPDcVzgTX1k351NULLbnun1V90kOhdM04vM0YP5oln1fRW76XwOt78keA0QxWxhqi3j9+rTUU0H19CQXmH0/az2BCUKxfl4nZuOhjaq/rePDMHTVueac+HtsUXV05Z3aAVcGD+HHsHKz8h1Jc1e1s+IODSStT7I4ACxxFxHdEwCevBNlJxxOeAowhPHYeVeOQBzOohHFyUC4G5rWtLI7uyFIAHHDBDzPZYlgYO0WWJmRCMWYw8sioTjOBejhcpP+Hbga9okrxq2DHaw3/d9/pjyZem1BDaZt4/7xBQVoikbOdxYPaUa0M7dSFdwDJku00Ey2bv6h+q0n76yeSWJikbBTRG/j+tF/AIk76x4uBbCVclVyrYsUwfCdVMmbKwmj5E8iCGRKqWxrX3h4IbVnJAPxhz3ZLK7r7BqtX2RGJXbSwD0OYkyB2zl1a7SWq22uC66ukdVl4v4GJ3u7GUXbxlhv7BiA8bdxy58TzlrPHJ2Apli68R8z97h1NV0971zu7zr8G7Lj9Ci2zGPAShOUoq5U9bNcPEWwJwZ+mLFe4rA4x3NjeQH5jNg6Vl4zYzVRrVidchh1VdFQOxmC+7is6j9cWXPbnDBnM7PfKctz/7xmO6QdtNw1gna0V9zVIYmTKfN+0BtfbiayV/6RvyidHZX3MW61oTyHgs3sFTp7eDjuBCUft/N+O9FrtGrl7BNjzijObKAo4urX3eCHoOXlZXO94DsjuJsYkikuZRD357tBNLxh8f399urkchgeKue8YpZlBxagTut9rwQipE/uDtXIfLiQ+coDcJNj77DpqomF6UY41Wn8J29geuWk8R5Ar02bEFkKwMg/ElZEGdw0oTpYtphN3YrQ6RbnRanGK1/Y+DEoTTC2IYzDHpym6u6bAJdNDFGpw5Od8u7Xjcoezt2GI3KlfPL7DrT+m1BgCtkUAkA6KRYDNnHLq5nXWICghbKj0h6a7RLpmM2V9jNC8qj2zGf7WKUf92l4B+Tl8uGO8rLZJ8RALjdDpAXQ+24O5YbaY+iEjxY+j5/0lvIuJaX6TvfPWmQ8xlTe0pT6gQzUsWmz/USh8Iw2fMi/HIctcmBK808jvo/uuQ9VNZUIn84v1Q1zg89b8Ph6FM1/LEkx/ipFrSAkd6iN1d8yTdra+lKJ/C95NuWV6gwjDwvT7Eeu4YCW7nK6GsqBg9xDRAnTq69TZELkENnEAJaJafXxXrkuacTpEFQVfUpFgnUpQ8N4b/VU1RwmRktg/qQfRlDS6IM19UQJEEVBqs2renQAFXa6rRii9YnMcJqhJeAQsYI9ZoC0QDO0QESwnPULvCAXWLRovXTcKdZVST/OwBQ/shHf2TAwJVuae89ROdxPJesetnZmG41DTPxD6JEEErpyeu4QW8JP+1L6RxdV/GwDUgCMdgUPAAhCoQXEWwbsKr7dtYD27dxemY9ErbTaZmOWL3Mhiq/SjV6fwSlGc9iD/1T+A3TSQzr1zja5a65RJr7J5xXBXOJ+/WqE+Hgg9uVLx94Kxd5f5BIE+rCGGRPgEKwvbvwpl7Xr8hp7zQu69xSzMPX7wRWKqicsIGfn6uxg09ncJFmAXsKXNKyL7lESdcRGOn6AbQ5vtSyZ/SkFr0ZNoCVpURVABP9TmYJLZvklf/QQ1Y/OrleSMiIRTCM9r1c1Q9QjfO7IsQi7WVEFk17nTllFI4Go6c9RR17nOxfPuh6ta8NamtCfXSs4E8wmmsIgcctKiq8kny6x51x7Z6nXugyclZVzt2GQx8xiKqao7pISD9c+TRe8Yp6cCHCXv2xVlF82ysR7XfxVXlRM+23FNkR3+4ISjJscwLKr76fDSuRAYlQ87E2zYyF3Wy8gp2OzygOAfYrnjTjWPbD9lz4uiRTJrCXsJQ8d2jf9Eidk5sr5jslMw0sUycaqeTa2NY3laSm8HMxi7ZTUiuQgHJ1HG8Dyu0n+OiVJp8tG090pFGklBsjhXBBTD/zGPb99Us6o1sbYwXKjhvnaj+6np1OmjPOT5V9QVGgrCQUwW7FHVh75ojJxgjbX0PD2gelXGYwOmNMSCTLFddZhNExUFGFBiF45Jl7i/Gu38LXIspesPJev7DTZ7dPvE8mVhrx4Rjs/FBwE4S2Grb5TSs7PfNzzKdtuJu4qUy9QPi5ixkUIUXp+JX5nD6BNfFP4wWqPaI41qEBeYCKZp+A9kC/e4+Nx8bRIvSZwa5VvWfgVtJacnTlS8xr4u4VlSbLNS2QwSDD+kCNYWE9hHJmUFTtBWDQNHNF35RW9iOAIocBDwdpdGmlm2oRKmuN5Naljhlc9xQkv7VybLYYwel3WNn1fcwSMES4AR/rP6ouEgzptF0OY8Gz0jP9UoYiY490sGokXmxOd/rMt0MPeRh+wbRFfOwUjl9ofKHMuMSxVk09AvTVdOlqz1ajx5A2cMn/Oc3tl1BRy0CY+yGIBz3HHGBs2hH+4TvTTQJS+c2BjZFKmxNDtT3FbcAGJGQDNBTOA+5I1C6w6AcxGH8k/kdcIGpnB4M7wt3QS0NK/mYPteynBdaoO8tbD08EdA1Bk7Xy8HXSJp2B7Lhw0F7D7iOnhdfnNGsXGM/XI/myLmYo4zebNFbyJaJnqSmKYd3/QQdMbaZicrBmR0uYNvClKfSiFeubHj+jQ9AdMf0hCg9bfamsw7QydF+L3PP5Yhg5DERa4JuQjoLKws2YERXarOCJMI7bGuSlEZpIAW8UjMeos3ESXvY9dHJ2drjBycdoEsboB3BhV7QC45KjZYVoFTGdUKrDLOmLAhnq9oh44xJkvDSaDg3ioyLUEDcvGj5BpOMnNhowXgoIBEYC/U0GW+eH70k2g9iqxj1yhxwRE9X3X7o1tdAplizT+IPIPvkmRjbbOqAKzh19uQ0Ajc11uWJwijIFWZRj6coaJ6fGu5rfkFuciZrDyqUjVO9zg1/HkD+PkEVZkhLA3wv9VCbu+IFyYNP6Mh9Tso6NJ38S6FDljZodQaIzApifKwKAbFI0LC/MnEsvej1RKva7MgqtPpyloROUL+Vw/CpJ5BaEqhCdj8A1YL9Mo/JP/I+DrpMyWFmKYhYu3os1xMNONKEwlQQIIiwYzOPSTuXy9zhnaQTZr0PpuRfpFS3dm4CNypvRCb6WAdO2W8SS7+Z05ZMmR94pFGKIZaTvwHr/WcTVUGBdk9OLwYLRcae7BI8I656Q5NmbqNB6ePNCCjgGcynZjNz/08jAw5f5Pr1q5UzcoWJEWJ16zkObIpVZ1veIEvmqpsbR3EvWF5wySn46oB4DIQrH50RRtW7DNzAA/wuQoIQzqVqjOrIkN/fcx/ofRYFyTru70zjkPEWNnT4F6CETtoGv3h9L0FhT6rDh1tN6q8zmNyQ8WzxtstEnPx9TYdU6w914b9BbbUwP2AHAgPJQYVX/Q9YYU3a7J0cyjQPeoS69dVruUDPmPMCwrqHs4759UctQrgpoKcWzPNYk0Rr5k7L2SZWX4YWQjJu7gY2spuXO/wdJUVLs1NB0HkwKhdtShgfAeQE2pTWELVFUDqKcrlx5TtMDOJF6YeinsU4IbpXyCBtewnjzKd7oLfB5xM7b8+f04iMBr1s5QE/4srkvOJhmw5u0S8cIWlaPOwqnGCds6yFHR79s99GNZ2abME1dC3MM/fjWswNpEhw9+UylyNnwjyhY3Sp6hPabc215agWDQTFPSCv+JuerXlVCzBhi/6MJnEyfIEtYZWu6iIvpv7Z/9LqwkKXftxnbnj2NHNTZUlUaT7Pl4idtK1y7i94o5PVGGVyZZEPwXUzGd/rXwLIK6HVHUCXMUwYJIda6bVUgX9ax560pNo05pY4cPvwxTr5hFQd4a6U8E2Q+Q2KVKrcsj1nlnQ1stcsMnORQLM8vubajfkFu7R9TlBNcBPCwnanxNfiCaGnIl/b135z/Wj3xHmV2rXbVfFTYrAh8GR1YBirnNzTPdcnzyPq2zH3CRALwcMfzuIQ7g49TgAAAAQDwAAM9F182eLc0whnv8uvFeuLMS7ewLBw4WvANBo2nXAoKX79kKVup9hnPIzowsZhohVL6pTN4/NRDQEFmKitjjAH8Mek72gA1Q+JJnU26DjgdMgwqsZZgSGUx7A/whRi0S8WVwvEtIABHq3qMrR5S7l58i/284UKZJEOwYAhpqo9xPKrY3cBF6vz4I9w81un0BTOr6fR5kqtH7VAvRiMJ6nJgkXEExsOAXINV+lyngGQvWBxIJ7X+Q4tcL55z1F/7uGcy8L6kabjYOXNilNfqpWrTzpYgF+FTv9yURG0kwRte0sNyuJs5xEFMbFGNP2qgQINTVyisjCdjdCBXpAFKLEKypuBZFOmKJaD/8xlJdi6ZbvzRuf1wHJFR83MRV0a4nw5bOSdQhaOF3t0H5sybICWEpbxCgQN3NwcCbtqo+0UBr276xBQ/S7V/ARH5vY/dbH0i/XJe4PjWcklzkG2j2LqKpwm60oY4W7oItbrxONrCue4BSCceKP/81bFN30V6iNgvnivL93RxRSqdj4+eCFJAgLtqpfu30bFJcG4b2c+DCjqc9v41BKkbVVm8yjeqOuRrqAre6h7RvR+BxFj5acnk0yREX7xGbkCiWZDm3SmB7nWI2CXS2GfOcwoacayoCAjdu11TVTBi4439y9ibWIBEZOudzYbWKelMWTOZ9/zaqDlZpw9PN7+1IvnqIYClQ2IP070FwkrarDkQwfQ7CZBkw8Rw0rIVDfqs2SIKvGSI82fjl1BGLYmPkEgkD/4vY+ZP0521IwdWiVYc6RSJrxPbuy9s40RMuR7lQOdvrYBIrVDj/2Y8nse4GxnSCHqI+/A02UPGpyJJbPoq1BH8sPnTnoCYfCAISqmwHILoCDHLUT+fnn6Z7UkUxmJrNniu1v40meDRXrgIELHECwPCzNM5RNj9BZTyjvBMCH2w0JAkus8Ao/+DHdJ+4ljFKo5R6PUGa25V5fu+RJHKqQcDktEddZJeDhsSwdEoAgGWmSjquAJEYOff1bC5kCP/Ufg+d0WGlt+m84h3w8kgTfeKOHnQ/nxzAxtamxq+GEwcQfxJW3jeGRkg1/T8N9o8HMQTFNTsq04pNNaf1hOW3s4bn6trJM6BjDWuIi300/CizCQfbJPhlAuqJiBmwKqm5qE1oaT4jjjn6Sh+iI3EODxMMbS/la8CYpQ6eyRmOCeOhOZ6iENZgP0e7pK8UJbceNHG7IMLpZOc4yvY19kZN6LdYUwtvoS0ugzDTvdCQEIEagSDOMOtP8bHRqEmFFz0pUD+pP6eosIrRsX1OvhLpAP76bIGnNSqwDws5dJktLcsgXNEKN6IhZuybVL40zE4VY1Gsinek7nBaPtf3HKEWU2V84dw0sOOhBeYp85NUQyF9UwmZ0aDVY1KLvKNVpzsj3I7Kqvn4S/e0j527SBWC0SkxE+a7JPGq8+65513COL0n3oVeDcAgHgC6AjfwtQ+0oG877B3bA1PIRi58OtrPesyit7zsWCZWPtqrtzBXqEpI1UYSOuNO1VQCb2vEcfP7ZaEEeLME2D4VM6mshAjy20wICQyNgdLyTCqRexgRePlwD1Rck5UIBxeDK3kWdbE1qa7JZckjQgG6Fbs+yh3JNDvXBz3iuhjqUjASd0zOZRM9ua5YDE7D0p/c6I7czRLfKl2DCvJ8R+0p9djgUUvHpVrr9A/xzsZNI4D0PeQujL9RvXjPMROx0kLNqTTdazItDQO3UH9wmIiskT8IHlMTCT1gB3sx73IH/23ZUcHnyycbqA/Nu6oqA4a8JtDmT0WXijEt7jlp3dy7LR1qWthcThsvfpGzQ2A5N8/Rwj9yZHtFyyG4P2QsRIb+6YES7bflkWVewpuK9cyvfvAdVH4yDmrkeJjRZMLLQav6H7XzjCKhNJFaXQQ57707F+eWSYgfVt8zBAHHyYNxABPJ7d4cfHlzHSnih02JzoIy6vyr1MllntNmkR1OmkJs2a60v96XJnvCDn20t2ix0K4qKNrw2IVvn4oR3lrlXCOQgPOKr5OT/4lu0K6DMGYaJ/tPpI9flIBT/3rgBzlSWxI1HYadWwlk1hRBnR21dI/jB5B/LgJ9+3KF6L4ZCdWISzNZE4nLtI9CIl9yFbTcZ3jnkNLz7zVPCW/WdGmo/WBa6yNagvOfx9JEueYGgh2dJ4jqW2nE/Mg1nRPB5H8HWVJzEEL+AUEYy/ad+b5WWR3nizaoNfoxOn9oYGgLUWpdz5OSQPTZ9qtum8Ar4phVbgW8zOFDf0yzLN7zscmsvH6XNkIcuR6wq0QKzudUi+Q41AMTfWNpMzNiMSdxzJ4GYPLL2PcSybVX6u41NrF6IyXiF1IGCvU60rD+nBY4021tuifiOuM7Qmb+f+Jz+DG+juZgUGYx1mkZyyzJC9r5NjuV4T/ofWBnkBetD6ps0NxxbZiid101zjMGI/Bk2/GzX97TvWUljqR7s2ex4JC/AmC6QFozVxBIc+rs0IQxG4pAZy6fDfjk4lQ/STmcchwJk6cvk7BrY70kWY/2LioW29/exEN0aKA4PbnHzRDuKnDMOi/cPUV7Nl32WJpJuzS2WGeEeTGJ7h1AA5mD8OMCWr1GNwKu1weZjQvzLFAVbvd5k04AGTkyJ8FVWcbdmhzkvawCWtemuI+vwChVmM19jrnmSJFxToiauVcUoXhhoXjTrUktix1vBzA2C1e8EV/bBQY+LoVMd8uxdKUvFVPC8QRYlc37hlJSnyXznRJalZfv0U0ta17BSBqUCXtPI1jWo7CRt2s7mLHAopzcPA0dULBd3MInfOSaRm26gZ6nioQ5LLEUA3o1gliudUxQuEmTmcU2siNnSMMthVzSop+8ZxJe7E4rLLXJpsDQjTRzRljFZGj7rmKbj1UarZBLsGIGQL8fcBa70eNfn7GGknHBI3hzV16W4Ek2CjiKH5dw1J8r4GcgVnTAQhM5W3aWWgRDfrJwBBXq5QCANjeUR1RZz0bZ7qs3s+COmBqkRfP9xdIS3jjTDUGNmZ2Xj3YFegFS5aWMHnfYU8yxiEBvXTstZUhn7iMVJ1ZK4OTTk+e4KjasY/12ozzbO71whufS2wmeD8sX6SJai+Cd4GLBd3wxdbsy8DSbkmJmtqHCpw424c8dRqhrx+llxhxmQdj+InZ9eEqNYNvp9NYj4Oo7c5hHwhwKAi+RRK9dNFHN3MJiLiDZGdnz8T3nlxUTkjDwv03pdIv8rBvVbdnq9MVCHODRCCIwUf176F77wEM+3X415ErWBM6/GJ60J1OTOO1zN36OiwVUxdxkKRZCrFOrSNogj0CyS4DfmDYAyyUemP424d9biayAevD5pclYPLRo5tU5rULYXyRmh2lBjMJbatY7xZXpOSXk8ugNNPTFCBbxduH/7pxh5WOoDKUxhLAsjww69jZCQACioGcUWkuLZZuYIrFWSbFIxQJzqOYZu2icjeo5+cdJaWr24Ifhh2EsSyYnvovJE5gpFC5VVtf2VTa3qXnzpV3cxDJobe567tYxacJbUZvXjNk3QzVEG9XwY912mj+k24m3x4RY4evKEk2QUNPkrLUg9udA4mRRahXBPJpko5laMY3pZbE0JMsfWloxWz+jnF0cOyr7lvlHKsfiiAwZOvotnfRWBA2GKEWOni8fwfazLHvKzWDTslImAlFqlAyfPSIlOhK5eZUmtblIvZjt7cOR3g1CPj19bHEjFtFIRQxnksfUu/JUnnkXrgmjtCBaXNRUWS02f0sPIwrUdzpgeQ/+T3Tf00h3z5qZ1kG23kz48o6thYGOE7RHKfUNA5UjzSNK2Al6hRfUGwfjMDQCEsSmkM4e0pTiS5QfyfHa6I4uQeFkErV5ExY18HROxNHIqgUd4kUrAsQh87K87Y+yZBM4NHeSc9XjEATUzFFcC+2m7il/wFitBlz9v3tQH7EIxY7iwPCXF461YoDY/je+08iGSBgT44LyHAUJwHUokW10ppnUmZ8TcEYZqRDKbtw85R40mnVFwlV/Z1sacjUji9jbQ7wL2Z737G7v3v0O8X1W17N3QSrmXxCV29cfSEQe3dtD4E1nztXhnBWd8PG/3oJAgbRL2yrHFlFyhMQQZH9C9ODLhHHGXjd+vHugheV23IyQ12jB/WkHL83mJs3NTwQtNiSQXjdJ2tA2XMuSXX7cs3EWsARE3p3lIt+pB7ZXDBNngTf/vsbjng08oFDli+GnfPES61TolSFI6/vO2A+R8r8Fkjw+asnKb4YgOWoZI2iOajN4XxIF5LrDbJWjNNyh4q3Bvk2IQ6lVfhMd6U825c8wQjC6FQzrg2C/qiwe2LukPJ6hELlBzYbTTAKsYUNGrh3xMOXBQb7/7R/jKdsWwAHozFXgJJFQhhujLbS7R/Skrraomj1Ho6nVQHlZCbfPthKr96L7VdxsCSzAB5tcFBsNt/iA+/Erh5N/5gCoLwmxwep5UrNnByw7VzGjWndCVjWP6mgGJx/x0blIsltkegFKTVku+YtAxBowArKQTzftP9QZ/pT7+PYIn95ID9It7HwVAZteEIb4nMrH24bmo8MxQYPMrP1jg3V0PC6JZ5F4KoEJNITknIkWWdA9WLfUAOhuiTYg39ssDVp7mWKQisCIR1tjmNKmX6umse3vQXIgJJUOJ+2XrM6Lx1GBRW3WwyvhIXZwsEIAfd/iYkLh00o2yagc/rYduAUX/T36U9+7DHluLgDXGw65DKkYsQ9Bg6jYbesGE08RuBABjuLYs5255bMPeJDsgz3KPSc9oljGOvJP60i26fQEURv7ez6hiqa7yG5LGkbRL9iw342HplRmrRcdNiuoAtMCtaLdnZ+LQmZb1XsFUgZTXlsZFbj0zSk/Eyah++Jn5oP/18LQ9fn/ESCdZ011TdHMr+A1evP6R1HvD3qMZPHt6e9+W2M8kQ7XitAk5ccVXTdqqzu78BEHmtODUhjynB3/35D8q7lq7Hy21K85eRCt1b/vBvN5vR17DWp6w0WRnreL2XRLr0WKwRS1Xzz69vZOEbcko/5gRDKbkjrI5yvyomTNP+ju1Z9ChZQvfVnQ21g09PYlAygEbVh2zYm9nWipc3CO8eGFChkoPlPUdxDBTuJ8UztoP/P9WfxbW7CBjSn3mlGatHInv6qrKr63bOL+Ul5DdI3Gg89FoIQAAAAA=');
