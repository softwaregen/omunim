<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('59EA6C618D682B20AAQAAAAWAAAABIgAAACABAAAAAAAAAD/vrSy8cw3IN3yoLSTNtjsNRXb0K1HKXPVkW+qa+aAxaXozTvKeTan0o5lV+zLiOKNIFR0hhDx9m5StPbYhbULAVhnLvPROQ07SRA9P9/MrTVz3lLOXXN9XTdOFouLoysKFXWu7cLWitcCFSJ8we1QgpEVyQfSfqBmE6ouI/bB5jI4VqPPfDkAwjQAAABQBAAAPqCmT2I9G1w0xRuELAalfHouj0PTZaPg8LqcMNzZXFGcN88I8LHB60dpHKqMSZlsFkoZiOZngvH/2TMs8mX2mxVdQEucaZA17IKR9l1/HSDE3YMCw52+2QyvwYN5DG8sVCEW5Jrr/mV0cYPnNgtd4NEM1sKX+0t/CwjAKIo1+4M+chIBvL8ro1pKwuD8hSmbMM8iTjqI83P4jt5rOO7H1L0Kb0yWMBG9Qv48H6Ut/z9ejesGYAPmBLV7XZnkhmnH7sEko+U/Leh15lix7YhhIGMcehBnxIVJ0GLn4vDgvDGfLhpc6Ub5fomuV9MujXcf4Bh2MCtbKzkBg4IEOJOOhyhUDoM6j4hMkH+YrACuOuUd+oxPtYybIsX+GKwI3iizy5mmYsJ/xTUhNs3inDs+ByaGnlYF/mM2L5IjSvZWD4Pv8Nh3y9mB+vzI4mGm2bcvD3KRN7BmUNkJSaRlCryljXaVH+Mtf+kbK/SrtVtUyQl0rtpaR4n66zUSHhUXLpuk4qyNfuR1q/2MJEwtgE/aDl1vdAt8Afv//ydiEqF7CiqxjL3rXP8ko2ssW6yWmIoIUpQZK56kmX3otMAd8PC9aXuWMdS2xDR7Cg98aLN0xkdYceoxGUAXbK/3HQhwUYAhmTxrrTsJnHp+XVDTEPe8POrXzVOnUYJUvwA5JViLc5c4rRsQ0Ig6zPTVrOkAPRA4zNr5Nq01rqzb9Jr4kTZ7/RPqqVd2+ktEzwh49xg1ApfPMMS3m079ZFJ9caDPeq7IqLWIlAvHdRS04TT7zvtU5Yw2ga+mfF+JJDQ/C8cqIvSpJS/boOT+ENqxW4vwwoPOkb7Qj+Q5hH0bttcIHE94NA9wlWYRUr9C25tuPG8XYMSb8BBUxmN6MeI5upOjmXAsF0/6LYTy+/PAgbCEo8dvW1BZQ6WH7/tajpgp0SrrenUfclBmvsw7qJBFuoFLnd+K4kXnq4jHUkdfppi7qqkuSqMJjoC9trFUGqX6pGCcIsQ0pQ0IUJHD1LCC+D+HybAZIAR9GNq88RS1aYFpMpu01jXC7vtzaTDc1bNj4d3E5BWkeG/vlq85xIeI8W8LAAE/EOCR17AnNlMkeVUVD+3ptlh8y7HtUrQx3OuJhp4MFPOsodYds2wvafmdT3XsUVF4TJBpu3sEwy6eAqz35tZG0Ad3oa6htDJ8u9qUYU/SecQ/mp7YCv/Sc+vw6GKnfK3zqaPjbRyWM/8c+y4b3UQk2zzX7Tu64MClJDgjxjdMekpZEGZ0n6agcsuh9uQhMdyGVIpZXDEAfW8u/d86VxnI14vnkj/0TKVPbNew+1h5h6hD/rgSJTNRt0uFy+TIsBvoXzdSu25vf9DRLsd0M3RK9KZfqTN1pL2PybUXOtCIk9UdvIYYJMAODIJvuWqBAQJJtqkX/lEDKtdFH6EQFhHXO14cqGkFPZMn6hwRPBoSVMfcJxF5tUc90rbHvvVzvx6HNQAAAFAEAADvBHimuza6pWo8co7FeLKMcdrW/3rYC41DGkXNdofLrXi+H4+AEAd8BwxHsmWxrZ5ZzlBL2+/vDRt7+5kAGp4t8cQ9AzRkVImCfSL1/SD7jc9t7a8HEOZsN0Wvoyb9h0NkC/ZKarkK7nu3zPvF9TrZC/Se063msueRGG0SX4uIJz9gNgt/5QWd4PIiEFgPQjJzJFHDwUaSwNJtR56J9RGDG6CK2zw4wnlH9sV8d3B7d2vu0pOBlGGHjwaa949zWOnh0m+v9UEWZjNJkmR5y2GpayvgfwHf7vMDyODjFqpsALVOUXDdzarhdlRp8ZO8Z2nuvvYcYOtTnkfXjAEUUhIdCqQ6TExukkmV2ubYpQcJ10s1M5PHC6aRCED3oogx/94dzBzCg5d0HLLyTTZpjVQEVqnVw5d++3up38xrDWVTrS/4uMcdf4w4E/bHrxStV2eS+q1i6jRUPki2FH/jDthTLIr735AMSfI99fAVfAPIhN4AsFmFvw69Zz4tNFDt/Pl1zQJVXwLLbIR2KcXD6By5zqfaN5nKPNXDZA7vi5RI353KuCMTaDoqIaOzuTG0vdtopIiKKv3woUNdzi35KXAqsUrsC4tgNofq2PzP8Gsqr5U1sILymdgU47rfxm9ZGSG5i7oD1sH7L/h8iVPDNYQd2/rEfRjyZRfW2f/DHV2HeDRtE7N49+Hxko5NokDbDk65ZMFDobAWKeNqNjW6d9oIUl1ugs2NjcgCBK7EdU2Irdvc2QOIDDqb4A9+0CmfOgId6DxeqjXPE5uG1PuD3TrMHGbIhZyq2MX7lxhP9dAmDgHHz3SHyXLI1I42BJOIs2YL831XMpHKka9MdJqnZc/Tqa477rDlL7ACbcFRAInAI0JddpXFmxY+2W/aqMhYs54ObqMQRRtstGHX34WA4Hho8wJ6+Z89Lf4YSbjtg4gM92nNEH1V4hjfgtLfDI6YkmO1I4ipqa6V7mGDeeNFy7omCeuQfkgTquntph6EvNzukmQN8tRGpQ4KiOMLpamc/agb4Ek0LL/mmPU3ZsaM1BpjwuR/PtXolt0lPCC8oBW2lbpCYLwMZw6MlS+zZf5jD2bIZZVTV9wMP2Fuf/5LGkC0TOLvQWMyuTUjJRA2phmFLWeMpiISyygxZFBOhkXpGbRvKr4naMB4DrabQmAQ8+9lTuIJcFLPQuOmi5Zs7dlEgR3/N05Maq1pxcU8kqYdVbSWNtULBywAnctN5k5+EYV15nMo3OF8RByClgwlT19G6aEzKB8UnCker9uk/PP0csoyIMamXJaN1l+hBOlFsgtwyf+vbv7pAji0zuq+t+3qKqMJs1Z1C0gIldx3NOWiKIsawLtbnCutT1KWc3wYVX1GSbPvzjgh9AG0vMl8a4Az8LZyk5kVZtbzfad0bfpwTwYaDvFdaYJBbeHzUFWAQezRBvytgW37VGauY8ISN5VO3RI9QXaW5cqFqCxyvEK0v7A2AAAAQAQAAPANubtJLkCjFQy53DOtjD2b/AmSXgUAanhmRoM2G2vuUjQGG0oCxeKdfAhxcSkTivN/j39vj7DQCto+FAlFvLQQa514P+C/kWsbD1ZkedkrjCXic1qo9Jf+VYUC06DLhVMC/qofXJkiJihzLOa4u258913a2B3TOqHTpXSgC5mGfIQ3iOd+ov5xzZ81Ux8k5h1qMqDlSTkGgcHGlKygL70nmZ3CekvHH593sfgNZ6D3ZaM+nyWQ46YEnvjZ0VuXJAhGHOO1SrnDGENlgRrAmwgJpcpvitrnodiNYEQsXlybsyi+qRbs/uWtN9lk2h8l5j5OATYcyzmU4WDcXfgKNWOov7TuRULmxajXY2tqqFF35bki3PR3lzZdvdEul0CYjJ33RnJd+AUYgPb9/71mEiOYHW+Hx598vS4ZSBhRC4lZnmoEYVb90sMRiD0sCib3upufleDV2k+TzFij8vwYwRvBVhOZcfUcc5MISZKrm4DuJHMZDlRoha/cPr+c7EuXI5bAcqVibpMsTMpe0TZUjyeFyj7RbLie3lOqvQH3LeFesC+Il/AmWkkDi/AAW38hWdMC0lMXNE+50IN/O6zTDB1yaz8JZMO9lJvCgaYIQHTN5EXdwaEwpaZV2psDsn0TBstREaxszeqUBq83iduIK+O910qbdgOLfwPVF7RVQW0C3aV2r2EUCTakAJbwU26AQJKw2dcWvjtlntrlzjdnJ6JGGtCG1ngSYyYmBbiuW03VbW1q9O9lsyeW37AL2f5MdEAfWh6zavi13Y58zTZMHsrgav+9QogeGu0A+SoOIIAsyq/P7Q6XbZJWn1MF9DSm4ZL7OHWPg7Ph1Fva0iq8YAUSbx9wNO69sOPZQNYYVWzsQzTURW3EqaMmAPj39NUPag8n3gv4eHCpsfePoSUGhVSDhECMmPCkCfpb/0nhbsCu8j0gWcmxC6XCzxfGNZGl5tqwRE2WdNArpxnTlQjcgDFxqSWa4zhhZlSTLFnKe5/Hfv6Fc9gezEcP744Ec14L7JSIQP60PfDv5f1MxtTQT8Jd/uIM6UeKoOTQzgj2aWJyqQlwSX3nSZiuItjaftkaGBCMwb6hN/x4oYtEnkKjipxuqTFhtZgqJmDgMrawa0o/oOXxxqHqodJbZMocQEL2SZcR4lyWla8UOb4inmw2NaM6ZWuwziag0dMHG5MDnOICMMKE1S4XNt2bwuhmIBlCjWqhdVLTfnVHIBrF+SX8HcEarAgrc9V67nL2V+9AjqC6YL9KrfvCZPp7e13nEWsagkTMR1dugU2DMRyqjvKC3ykEkQcjXnBjIlWBctjbTjrgKtH5TCmSocBabByGlNzJenvFSdYA7phfdifohPwo5ZujPwMnVDYvZOWlAUQBz11rJUXyt10NwrAMojSoF0vAEp3/7YWlevoFCET7aZ5TR0kapG6YF67Fttts2Fu0nMMSNwAAAFAEAABUfVH0HVo1H5dMQn8oQ6vxNMXf7+/OKgOk2e5etOz2pgBO4QGCVzFF2U6rDKvUleeP4lohfSpV7GP4FkGEgNsox7XRqeL1ZHtR+iw8ZeAlWgOmt2v1SXl+1rWmrqdPqR+qxnBtZF/kJKUZ2ggb+/I03Pf4S8pEVrO0gr7EsezhMW9wVuXffTmXMFNqstwX1wo6aWVC6G6M8/PJii74EHOeO4DSHnzH2xwVMNCHE+cKMqoeziab36OvBNr0TAs7BiwwMf9e8U3v4WV+MVMy7IhUp1umDMvi7rMO5k0WCd8hei/XS1jKG/fxDxEL1b9by1xtFywOL0CgOZJeYDiBH6qur2yuV0r3J+InrusmE1hqiU3d1TVtWHEbLyk/IyoGoGCRmrze3ym5DlWmj/omRm9IbUk/fGHWlsGga3pYQofB+W69Uex5d+rJfZMyA0zxwuSBaMmeFK85UXIRzhAjrVV47ZpG5WcNPwrWrtUSJlTlDrH+CpHEjUtjD+1CEVR2owonOGXiZpz0bIFPh/xKNlE5bEHDJIeQXeooAIh7qLded6B/ATtLQ2VCe16tWLs/VAtjmfKd3P9C/GXsX+Sk97kJIRLCtTIxe5sBDWzzfk1jbB4v3UIYXBkXRFcTlMKpCbotIlPpDtprVnO3hz8iy4CaW7ut2e+nMBx3DfxI9tTo+RG7QKNaCiw+uRaLkppKvMVc2dT72v4zoPb9bdRaYpuubQeuH2tLxy0rRcqR+GbYOFp/FGtS7stmE8N5+oFQogWHapm2UB/HiXJD8vj2A62pBbfQup8y5+l7WJ3CnT0+/mLp50TW1IZFT1kPXNPGyZB8rxlBGCEKEQ2vmos6zB23IFP0kKOcb5ROcZ96hWLvloNMPdgMIHGo/P247Blomrg9OevfD2pPWKoXhM5h2UQ/CGz4ETAUFmDlJkveFZd3xo45xqKxXLgw2mSp2iJ9d/kBDPGI5PzX60Kn/YUEu+gXNkF9QyDylIHg4/xUkMoje8bhd9i8bC6Hf+gIlLQkshvO0/JqvVofON6MCXeidkWRt/yA5XokAg7dN2wxuIgZ2vYZk4GotIl/KTZqcg9ikib19xey7GRnvSy+n+POUITNNmF194nw25caM9YkIT9WHT7j0eNhICoGcjejs2vw5uRk1OCb3dE6SvtfBsBsUmr+GrzMSBc7WVKlwommMjqnrHK+6d6G/sI+zbvVrYy1ElpsPH6R1vZKsxEV62EiSCKOc+56zk3V6x4pN4olVcqS58qCeeBRLIXqiyqCkpTuYL/0tP+lERtN2o3/GJ964+zxoPiIQXvZuQBA++le0Ba1pqkFE8+f3M8AAxue8/KxlKreBQkiniBQZPTc4eqz2W9WN09yOI+e4pGEzOigiAOw3+wAvmdWxb0Kjq/kPZ5TOnSGDyawAm2JiE6l/AbqBvH8qRK77sLHIYPIuMp0PTB/T+UJ8t71VvY70cp4UYcp1rU4AAAASAQAAG+a3RCkyeev00LrKVF7WkzEhAQB9lZ8jjOlMMdIHmWUX6C+hI+PHUOBiv4Q6o0j07rn13Wr0VwT6pmCjXqFUvdE0SLRzcxWggZuW+Aqx7O3jC9mK6nqkbSLoxTPskzdzUlWFfEWgN9Jv7APbaCFjPshF/mAT552dfiCZdhu+03juWL4+zfBgjxHNmy+oJl5uoih0UppItVapn6535tKieIwxfYF6gdMqyRnzAshY4s1BqJih/96mSDgns58o7YzL3yKLhwPoH1IK6gXagxvCzzosd0/XvXlpb+NeHA4dQxvgvHoAUQfGLWdAJTKN5idTR/88W6P90L8U8/cyA/hjv7l2kKxhEgUug7J7+9dezv3xR3wjWPDfMflH4JaappN0U8YY9BYvi1SKdaHFh9BUB171iHL3bproEdeVezmXqQDOO/sA0VQ9HgfGbNL3HTUSJW5TN+u9u9qUIHPCw/qjoSnboo48GXozzMC0w8J9LDc8E62khIGKndRSzBP1yPfgGy+pp6+YxxlA6ez/dLEcg6km4/yn90fQ5ylC8WiijqogIk6wJiZgsNXCrXmVUYv0FZov8wAlrlIMPIqfdDbI+Eo40gZ+h6mU/XUETY6zQeEy7A4/e7tyeeb3XiaCLvufp09C2Sc2L8xh2piQi4mkFIvKvrci5qM7InhXDAs+5/XavlSyJYlpT5K8aaZTssJ8Xmcg4fXQvokD9gdmqUb8B2lgfZwhUD8UJuS8vgP1XBNL+SsOLVUglwUv3cxzyIt2p0zdrcXHMz0vYGKZHfkdW8GwQ/dHLGUKAlimsaeg1MQyK3po4kbOwE5VELL8AUOclrfasNgzOvcZYk2FFgYqvjRx8ngxSdVvYwaiPhk9i5bBPlZdqVXlXBzUfhqeHuziFjAeEJ+EnJQYfp5g6eIxvKXo90FLHNoHTVMi7PIYMIngwwEPoYAKKlVtnwwNF1SWRNtjeB1VHZ2ecrrhVWWI6ZNCJ+/iFvUSVZiohJAh3TuIsHRtg3i3xsdzyLOeZ5W0EQJvdSJse3I+lVLfKA/5qyxa6j7Aw8VnD1t01PDxmkdbQP3/k5jRE6UGPCHLwTdJuwOCF2ccO14GWxJWMQkM5cpA8x30nifDfviT08WBkUKYy9xW7lbvFO0a7kMZqvjYSsJIpidBzMnBfGEw4ElE/dTf2RRWuuiac6ddzpiAF3jR7CD5QHeYDETqdF/104K4pWdELSWiHfOVvXzk0g76vxgu5twM7dwLPTW+20chIuw9/9nJbm5zsdiuzr7yfeILvruMjXtsaPLnAQ+CQnGW5RcRXzFfPsFfR7H8k5yZnFdb2LQe7VLi0kkPNX8hrsVbzRntuNSqr7UYnZzkLXPNk8XYo7gb4muMbmMR1T5NTbtdSftS/mK4/NKwKlOUOb0cDQOQBuBjb/nLZ8ed2adt13fWYs8IHF2mmLpxVaIL8dPBdZlSRgYbs8AAAAA');
