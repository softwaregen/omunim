<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAABoBwAAz8XmqdbpSwqQ4NzMp0AOcXMQcGeu1u3jqFr69PoS2r0GISxP2EnX2wxI9BoN8gcFc6upnnLF+8MWvA0JYHUTVhQcoo6Ie281BFFdPcqsqXdTuJkzjVLJz35S6QZYVawY/1OGm0XQJ8gL3G6DhQIgPguOznxgAYGVuuOvcsGB/7u4fESd175fOo9NoJSXjF856U4/4cbS9Re4lRXrhU9GlCxsugMjLX2mvMvckmkq3WoydoyqyoXX6BilB4Koe5W3yTMKzhGWVLrs953OgxmYMajJhBNfY2RNwlGb0W2EeFvaqZ7IrnES8KzoG6dNqbEdfXKpZ3LiRqSY32KCG4cclv3hZqgmtc+RrHsB6GGwFnupKwDMEyhQC6JPOJ08RbXe2XQqhF2YAyIRuh42FpvFtouif6C17DyQqNYGvuQgeYHRIGoHd4VsTwHpHV4p98tlAH9ABUCn3oIdWAuaDRF3+JZgTPzsroSFgzPLXhzHdaTvrd+PrT+jEutiabl390fw0/zUP/ZG7U5cv1LTkMJsmB0G3HqAEiTGHWPimBYz8c0NWO2NQO7aFQPhUomhIt+QYLul1/muQyyalMtxP3mR7M0Jyx6X68L+aIZKKJwLmGIDwP5A2L/CeEicokk+xe/15dkRreKEWeQOM3zj172OGqxEMF4o8qBxM6b365i1egSCwbH/hEm+15ncJxdzdIMbP0CgNT9p6iONzPk9j3X6ZdYOQVbfy0O4hV/Qmsc9IrYCbau3Yt1HCkSlF18rCwITtjtIdy7iU0E4xZblVJM9kFNWtZoXBH7n+JRg5AIjf3ap9Q5xnStAaEQQIHh7of3rZw4gkeiDYo3z4ZV1DcTOrrKR6ifxSwFAH0QM0LW+w1oXloGTa1QJh6DCqkPA5R+qgtD7TTgZHBQibxUTnY62KbYWAWwl4YF1sis9SeFD5Ic4/Et+E2EcXPpbx7Ohtt3FoGGfOQGdd4xybio8vI1K2ozJhrB50nD+ANCrJ4G+WEiMhMPM3/w9OwIzuAeRA2rmXLUL+24+zzjVtKAcva1WS2VHUjdTB7qQdBwNM3fmJRpW73iwyNtgOasLUQoMYqE8mvqIxTf0rZTh9LBeOqQc27LcTfAX17kID4nBUZAHlulC9nbCMwmm6H2O7bT/LrKMNsT1h85WmtSnTQ5kU/GwuvzT/Q2vZdzP4HFHoqBCf0xkQURhnRkYY2rcRRuBn53R1+hjOayGZX4MTO1b+Wo8OkRqaAE6BILDFO/5HlPbC/FSI0WH8RrcigqgqwP1gv5/pk/hukIbRwPM7Rhs1JfxeUbipeFQhl4Tbxb4wVeQf/6quelx7/hiNfnzjU1A7cXIFr9kMbfsMOUaIqfby1d/tWVbCGF/dVCU5VvuA9HcxVz+cgbC3mdlhY+vsBS1dORhy7BGSvN3RMcWwJrbep7o77IRuePi0czF3w/Wk62YFcYzFLUPKRkBu0n/Y6ijh3KPaw4lBltqtm8/Uh/gTelYmdqaSA+RPZLZCILWQGv12U/d/RTLnwqQ6trmCcmSIj3uAook9Iw0rV5H4T51mC03CcFh/Rt06ViVmL1Jp/c8Qxe8hzauGIpVJUKczE4W8MF7RTJL6ZxSIm9NwO6yWkEQ0WBrVJSkiVx1XSrJbJ3lbBi8X/rZCeBCdM957+yvGOJH7soT3kRplZiKVShyt2IK8ivlwftJAsY6UFqjRWK8IGYpeUs++WJwXUw8daklPgRpOH0uBCtBikjiCH6sfK7O85ZPS0JaMAFeWxW52oyzE5xy0m09dbtaOKIzgABQ9Y96f4O6CxlCkD4cJFTvJUa4vDYUp4JoLSd3Vas30VNFz3RWbqTZ92NDLuQXBABLY/b/E8vsAi4diUvND7C2xgpEoZxzT+I2HeJU8WFudo6acxfPNY+hEDbVa4fAyEpt68cPChce4emPsp7HNBzaS7kftqvEsJUuEICbSbEe+tTd9m6ZY2xFBRSfhciwpERA0VfjEuIiKcAIB0MVqJduic6G7uMiVVR0p7F7uWxObbxVXUwWTM2lN71gBwX+XiJIJiHxWRx6+6B68P0iIP8f6Ikoo7q18ahGHcVcUvBf8DjTGg5salyQEtAmt4HcgRPA2GrqvC5EI4gPAJczS8bF9mOTSMxKzrzoejPuku7yz93g70OeXworolr1jvr9P3n6HFQHGJoiHQvfnFeVra1uENn0TcjPDa59Xzb84ugHeFBvfTw+M2emr3L3ckSyougZ8nZw5HBZENt51/8uqS40udqwEiEUatNVYuybgQ6fKbbcNR0fbHRkRtYPcQMk6zx5f2wnbYGOtEfBZ8iq99FTseJ2AhJCFiBktSgyKdTaY1DMLc1nzl90YY1hW8oaxWHPJ2gpTv++CUnG7ZHu/tG+TInrbvhaF6FOKOkBXvmdCDWWSUmuDwWm1PXI4r2rg7KOJIqHRXmOvfaxaTh/+p2NeWpMckZbs3fEUMCIkYk51UkaJjcA0WqQHfbIBWOuh1vcBvF6pJoUH6uM5hrDib2DjAehVUzJGHzIvTUCNQAAAMAGAAB8fwms0BkYFxCtwjPsU8v614mcBPszMeX+2v56xUH9VuHRZcm/81oBMkb//aHa8/0B/jdgPj/Cox5/Otl+m8bsrrjWYhl3pALIaIAObz/0FpeVYIbrArDRvx/JjB4mTTZ3ZXFGWLju/N6ORifjY6/hbm46Kou8DLCHxuEfrQbC6OhKUgAy1H+6JGuQrwMikRovVFHR8O1rdtYl+QqJM+6sShb5w/vbopgBfPyNK/HHkxr8B2ij4iu4DQimRlWphaifURLj/m5v/T9Jl571cJQ7m2Epk/sNZTicTRp2sEImPAdGQiJzPTDffS0jFFNkLJEYOHemyjaMYG5koNNQmQDP5OIDWqvzUYxsyaQ6Jda3jMBJfhNezAz65yD9ZjMPPM0bJksdyMP0XGdr9kV6p13l1Y6nzv9TZh2JHolHXrR72GWK1bVh0SQEtEMO8xG3fUDPqHj0jHFdrFIoscepzBZ3bwXJ3vDSVi4m2TDHEurWRVaGuX8yPCvNTP5mknZlDcvSexLaKKbnReclnpGMVHyPb09tgaV3aX+uFF/Q+WUL3Q5H/bw+zhItBubipYTL/6K8LELsIaO+nGBkSQKhUf+5IrAqZ3SNms2dkAhI22uNssX16h3wxCsJmfGF2gCsgcXteCQgbcj2yFdA/1+gT386YyvjAiDhKG1nVVWSfckb9laDo65vsBHGQxsVxiqsIriLKOeLeWQ4BedD1L+m4apLqy9+aN7qypAOJsVMeOT4J42a/yHlrouKGiBdTQ+h4Lv5e3N/CCzCQ33hsWgoot4Z3IZjw4dAuUbj9UiMX/VZlERVWx+kJXmllntB/QFSaRsDr+Wo1VS/KAZKq190Tf1MZkLm3MgtCgV+FDreG4PId04sp93n9IkbXGmwc/EqlO3nTcAH5NX4hVSsOEk6w58fK8MQaBgQrksRr5OTJxmhKw2HPkWzD+TQCN+rohabbZiMTa9M6SFrspiSHz2+3t6XtnfshVIaaqLvGeQJfPoSZM8Qicyn6nwR3/eVlEW3Iofn1Tk6QYL2LtatLIYXCDi8JXhLMQZtzTKLkZVw5bTGteQr9Ty/Xpi5FAkN4icLFgtKqdQOdUsFKDkXr4FtJs4l4R+iaSXpja7o2FkqwNJASMJb2OLDVZ1gnh92P9+TQAGmPSapC/uIXlDdcdJt6dBrSciT70ocGm4tU3GJf07GPMiHSBRbP+2QXxFezkj4b/J6ecpmDE2FU3eW2tzadPawDybTBwsN6SsuNNo87wgiCoHL3nPKilToW5q0a28a/6UEliCaUrMVQ2L6/i1h7rV+TPsTOyyIAnmODSLQuxmHspW1ArTDrsxiVok2d1ZugNPjPI6mnFXxSrhZUdVAaHKI7jva2DrBSftgInm+K/1BGhXCvie3mx8pFHFAyINJ3ttt7YoziLGc5cZGOSlkX00WkPF7EHELWiHOLSWZKz3zHCatJLGT+UJzR6jQOooCVetoTpYkaUUfWjJ03llYJlGXMI7YqKECBSzBqlVLEUuMxU/JhwlNQ9bI/rllQNYxp8NfNXnAWvU/6LDXpydDXOp1qa8cNNI6PHaBdRhNIIxR5hM81ItWV6dd/AoI8BZgtoGkBw68cIHLAq+z615kRMAzHj83wgnai8xRDePkVaVoLuLMaJBUBxhIa9joY7yei0pZsSHIEmfSaNpSehvTowVogbcJ71hso+7z4jlldQ3CO76O0/O0fjjDCS0X1UnQ9obTjo+WtcmsjmLlqY6estwo196QQMqgukLvaarHqyULeMhMT3i9I/fTOO4oExN+av7rIsB77fmJFtbTJUFx7lWY+BTpIPbvYku/vEKzNMoqoY10zsnAUZuc6jpxRT/aqHmju63aYqjKHsemifARJkGKvabGY0/dB+as+FFIJQ/SuXtnPGlJ2zRXdP18DjyEF6xmlZIy+qSw8qccxTWtzLb9G3cXMCgJjxl3Hie5+S0THQxeKMiJvvCboGKHlXSGM37r4X+/qxbgsxsHP8IMm+WaQQgKGLmyUdpm9Rpz7caHVOIqlUshdoy0B4Z4XYlms9PLDJ8QGMegc9pz1GM9SDfTFEcPqb1VezXhkO94BMX1zE5/EXa3hs98L41m5cLjVaMu5c8F382yYF3SpBcqbyEA8ZrmnPmE9zRVCsHIHrOva58jAIWUUXN5RKtvLlFr6vH/s4sGq0umunfYJ8vGWCzLglpUTNGoVWeJFBKmdN1BDJgXHnPVn45yCK4+4HCW5ngC5OMNphM5NzfI6M8ZuOsenoW+vL0nDNWoVP0gyjV7wZ8hodNoIAE6QpXzTj0hu182AAAAyAYAAIg3fCxKY0mLhi5+8L/eha8ncOK/MAaDE9W27kd+uOL561wzMFmz2bmHGD5gQBBeqWNb/KQWB7O6bXrCTYN0TxumlVekKXFbhUTN29VC7nyt9uaBSizrOMCH/sPM8rM/NBzEUB8bou6rvdyP6PcVg4Lh3XXffn2ansAexz0AR40xN6s16K6tkYXyN6Vdn7VT/KwgAQznByYjFbZUGUdjvy3fFnz8x1w9M6aDIePssRNgQx6Zcj2TZujWh41q6LyF+8GZ+PjOCE2D1sYBNR5a/+hlN8+naKZHySDDkvITxYwPIw6UPfnxKdWwq+u9KigvO1iOBcS7Tv9/wBkBNwWaUjBlTJS4pWDUkohFCa3v0mjWesLLt2tAtSTyx4/KvyakrXxw46rKH10e9cg2fowYlt7nY78xyRWkOOylJssT/iTgIDBEP4DQcQIpqxMTqj4WH/jnI0D8YqVzZtpzS9XH0cjSrOtd4ZxekWqYVhCNWEbW3i35/bJGsDhlkVl1MlUJaEBrBStYWY6Uff0KYy/P6y0oQ1+5s7Lpt6Zme2jJHL3yds1y1dDOzvOP551NFONmdVMWlZn6usfa5poxq5mkD8i5pCBoVuAHqFDoKcRclzYSa3dPKPe1LyytayIqREIGFGzlwsfPLYx6cgH98iJO1docYpUzweUVTlyIJGIYkI3NpvU9S+nuEkoPODCL3o09kcFJpFEbPiaeAWpKhPOkYZPCWGGCzs9by4Li719xQSKehMBewHsIqIu/mWhjLXAIY4c+piM72oJwGGHjGCWBRlFciIr89PR3grpHmgKuuQ1p+xQpAOVvYINbqBHE9I9ZaVavzWjVoJ6WtOtqW93wj8DIuxasZDBDa9JMCEyH6GVQ6s6kAS9pGvBHfuYhvIFAQh4upbOdaLK04Mrj4v5MxGZIIB6858wrccYBCXxsbzU8GNqw9sR1wZ7IytwBFX1uRbiwF9bKcqA+lPxRw0XQsNTPlI6wthFNGZiCDbBn9XgE0i7QpPmuKD6VCi3VDqF3bBIFByVVdCr9BmM6l/gjepUaybD1XhkL33oocPSiS7PauUqgVE/TFWlP8sUKF6XX5OQqh2qELLb6wzH8iVeGxXGgF5oPh+vq/HVzchpzGmZpq9qbH+P9/w2tQXzsmCsj6A2VFmsKrphJ1n8OTcTRtRrKX3tE4rYT103dSxDw3x6pwCX8u5oPtXb78/F2x+GWnx5zxWkxzEUK69+Fu7PrCK54/x84jAx5HvT1rAodzFeJfuWO1p8AaKgWuSccNEfO5XVFIsF+jvIOGR99G+G1AJ+UzywV/4ilrpkMqpreSnDCQ5Daq3ENAtAWShyUsnVOPJ9+g0+ALx7YeM6A49lubFNke5DiJ5HjVGTc8ePhqE7yUt5DnjujuyBe40tdzHuK7xzSxxa7dBbiTjLHQ9+SjwNmLBD0VcPDiZVlpwB66EccT6m974CL4ygkD/60gDl4BWT3K9spPFN75EMYRIZV+i+CgTJtAwk+KzCz/OmrLCl/D+Bo8pZfl1dTzZa//Kxhm8uMB07crbKBZyrRW3hor42v3p2NiuS1v4azSbgmh9UfC+bRF+pORrh+BK9EAZWSI6Ucu5RjiYPbbHHCutFaEPoFYGznZE5x7Yd2wAW8TbS/utRFpqDI4QcMXNNXaO5qT3Aop8Brx/oiVm+yrxKX7Hwo6IoQB/jJGU2SJfcI/RqFjCAiePQlLs2ylBAr3j2PyhklsQV/AiTAl9dnZJHJCdpKn+2LuXQvpWMf88Yg507f1Nj4vFWkJfrOITEjk54oFXiv1pFuCr0Dzrwef3JjxkJFH0HcY16l23eLGfPmM4dvpXLF56LlBVcsIrtPOIKNHnxyPaCWHQkpNRlJHBb8DfHoFLdshs+wPN3gLa6AV8AcNNYzEmtIfiRCG0761RtczfOirnW2NaxSHHzJSaLXcxBFKzEIfB7kyEc8p1EQAltkWRzEfB2oqturhyzGnxkAQ9f/ktKxeGKtat0M1iGOWs19QA4cjTTyxqEQ/RKJspeUTm708JylJ1Ym7RH4CThr+0Arr9z59LVk0cWt5q2j1hFYFIsvPQrVUdvpSYf/fqAwkl4P/c4pMLX69+iUf8eQ5ToH1irANtq/pjI5BA8kO3Sz3HukgoJpX3lF+LMkdGdkFpyvQ7e0PHYNitvQepD8uLiXrn3xu/lbQPTfxJGoQukGdBy9l4Z97M+HO9juKeEH3tmI3yLmoJJPeyZqAXQiIo6rz8zaGl87YWOPovgjNOvSowadAWYkdXt1ihNNoAGwnD1inprZnwUGUwT43FL1GSvI/i8zcmr/NwAAANgGAADHkbYTs/hMRokIw37ys2kjIgcH0c2ga1KZNGm+/4MKf5H+GcsMdoW78PVRIWlX7M0iVQ5aJ4f5c2HeFacpJ5edGrhaYmeg6bM8kIxR4PYxgCJOBoqTMCs/Qa7n/5TqfqeTiBBzq1zxfft7qxzabc4fb1SvX2YSFPXv0q5KdAytL75O7TS5NHpvhDbGIQj2qi9grFCEs+q9TZoVf8igfPFZYc9r9Hxy4kVKgIo6RSSHbVOzPt7QzwjEWL/jP9wFyTop8eRORWQ1WaZY/5VoQp5QFA0bS69EsIxkjy8hBLKV0pXdoeu2sOgoosHkfpTkYFGbXic/Ux4lmEOBLsQ0qGJv7E3wY2lxRWuu4HdXN7id2HVUloOk3elOoZzN/96GHBn5Io3RDHrqd6XtjdyVw3WD44CVif3DOXHKz7JMhipmmY3eI4lUvxjQ9hJYu/drJzIc/9PagtHrqDCxBrqhNVJaOslU6QmZd+2bwB/zDM2GW9DjQPNTxCBR2j5xx4Y3XauduMunuxCaMmZFaY/l5e2/QVnfR9LI/UMCWP4c1y2p51prAt4GMQ1u+d/FnMMSvSn16pl5DNl1aO7nfbp/9MUzHoTukzNheLitod1vtc2PR+xZsjQHPjVLMhOOx7/96WuyHbc7ycDEkho0Uw6BoJtuW6HS5ezDGV8ntMSkof36g4Bh/3wKCvFyngi8ZNij8lr06zZ5t2EoyagTiEGuzgOmyxLWdwBVyuG0N9GFzLLX2NH0B/vlH3W8Jkx4zSlJsUb24MPzQ6GNlKcnIcg7HmpPdMnYddplB+YM5xBflE5A5huiiFItUt0hgMhn/W03o0GOTJkCy0EUeIMStk0gkXw4wgnTlUlasZ7xPgMCaT2Cvg8oDCeHMYo2UZ5DZwRwTWxqj2L7q2Pz0UxmkiBb5nuPsnXXmMbl7YY6AN5/pQHSkaJ/z+DRmtARa6S53rhaw3fYAfRzcJguYzcofAosIvaH/r7zNmGk/3XQjikq78MZ/+x+g4kQoHYRynHik9PhvUsgmSDKovJmTWbgQ/khZaCfc92aKPv2zZMTTsZZ9wXPawhKA99+Of0Z2D64ou2vFmGzPiceMMSThJgQ7ttyzAuKbUupHTWFwSfDWJXuAGK3pKOt6R57kVeiWeJYbw4KA3Kp3xCoHavACYJ5bbHlNBIFSF2xjGCGmSVFTFdWF2unBWLK2cfXULkUOUTuuoXv147AOrfPWvVyHaX6luE41xTOafZK95MF4SN+WT9XPz35E5h59nERxsvtKwLDMvGsiJ32sDapQCFTv7qWeNBYcJ+BNwlmMzIKLKsyAWfQLWF6Fd5b0UzmmNT2+qSiuHDRrEfYs/yr78qQ4Jb/pX4NbpWdlK8aPKDj3TFQbGrXGEGcnUQxIDU2Sme7mlPAh/EuM7Y6LvExKjE6ySKa/pR3Bgqj4/ooyaoP16NIq+z8bNeIeRg8jVUdPSIRF4ePbEfWgp9u/XswWJ2YE7pcC86qA7JdcCu17MBiQMQP+/cQ9Y3H66KmW/HNcfA6jul6PmPJ1jt72u6k7qIoxhcGbXGSCCnXf1V8JEbr8hVOzE8nVB55mI7fhGwNWkO7Tr53gSTH3BoGDFhBpqZuoRemUbsCIA63EKYFjqcHTLvRNpB3DPX9du+0Mmv0V8YqAsfxzw3zE79QBxn59oUd7gE0KegPVOb9oPuN45mQay2s4/KscxgWGu53Wv+38dc6Wl3naw2RyxPSKORYPyFBF0uaORspJKgOb6A48rFzOHGlhIkiCpvAel3bc789DSTzMLD2QoGJ2sei73uvTL3qAh/B9vQlbszW1jl315T4Z0UwBY3z0mWIpiBo1FlgWLMyxhTIvrHdG7C/EXW5pyqc3L7Kry7GYhx0Zy01soizTFHRLtmrmDiS1Kiue02xXlawBN5KRaCP7McmeGAUcMU/ddX0JllkJ+LCxuc/6rHeACMX2FTQTEb33Psc7k9tZElygwimDNIPLKI9n2OiWJ/z4dyJwmTgWKTr9ecRTS+O10KX0MbOyXD3q90PoLu3D8VXIMS+/FqgOcPM0oubfniJe+zL4kJ0Y/LjJs+cQrPDTPzCKvrZ28jwwqlGpMW8z6cDg1qLqPdRlV3/4mfDFyhKp+UrdCOqQzotZs9Q9aft9PZKyMu8ARtciM+cObC57fBiu0+5T9fztmCBuf+cRSRQyYWJFm/PYfBeFi8k2DPFB+cLuP/kaj7+q/UFzV77W6nfFBs6xOZRQZlWhKYmn9UasgoaqyRWgZaeX1QdiXziiSvyqjo3WI1z3DfS/pwReIrbrtiPtXGhyaJAPb1rd1PL6+EsXPfLVSRHuEcbvxZB7KI4AAAA2AYAABEMBjLaqPXldIWLyIbl+D0BGmJtXKYyeHrmmzQpJA5WzmAz16pF5IN9XbobY6cU29qy4fpq8uhjkb6Xtpwt7w7HDgEHffQwt4o4bRk9fi+H/qIyjeENs1KDhf4BDzr6hFj/LnSMhNAtedPmdiJhSdqGGbXWyLihfBTW9C0gCIMVAaYFReFjmY90rYB3MtP+oJc68vZ19d4tFVLB09TFBP5Kqp/xmOumhtjW3udjEBqNywhXnx4O69odvuKVffLp2cYr99m1qNtYYlqwaKEogg3RXuJYyyu/6WNofB48wnw93GqndD0jZVZEfSp4huMj8EmBeoMROL2toBXZkhiy41EbtCDkHxH0waMEEo/PKJ4VRVEGxzulLqG98bS4goDcTcFbppkbMb/AV+iv+cQs7Dk/YPmpuyBl7cnjABGx8O+XHkE4JMmZfZZRkZqA7fEUn6NoW1iM7YKIdX++HorF+lHArV1behIXpQl6gZuys96BeiXLNRqyoWVVwX3T/m945KWCjkHDTCL7vp0feO6R0yU7EJhxABWfOkI9FpL4C10AG4T/8IQ9NF0sYao9m7KfiSD0ivKkc4tbi8kkXVwDmHDExnIhmNowd+inkCwqi8abG9m2IjzMF8tASW75rWMeA/k41BGy1FmEagXESXAKE03rD1Pu0uaOyC5TxQSJwOiA0Lnu04eaSO/JkKK75vtjEKefqwvzHYVjYs1vrEghw3aTGsYY2Z24ihErADSlimMD9mcxoG9WOsIJTM+0JRwIBfzNyR1yv67SmbcukMngiQvVgHUaPqI3XQzHz4MEnIsNQtFefAdwbOyeVo+aGtyz7nHCWyzaf3P/aj5c+1Z8IlcCNiN0MiA0NLidS2lsbAFV+3jPOK+he6dT2dGeaW7F7ierqp8+scyyAT8CsR+Eo3/T6VE9NlyoiPSxjizY45N5aVxKHPIe++TMLXshhAbOi13TOBdO7/6bdImmqyFQk5Dq98gstwwwBxFp8ifct2C0YnQ1pjQ9B4v8LbpNR6GmWrpkSESCjezAco18GhDq5KVQYB9yOGfpU6DlJCQ4yB1gNqzP6nU+5op4TvI9wEQsVRS0O4I0BHzmRzYyg8Iulf0eYpbBeOXylm91slBVge+EPg50R3D4ytXgPzXj4+d+wIFDc0b0a3xAEkMWSpdwlaiFdrIrOswjH/+KrGeGRGBYQfs3fpdkb3VlvM1KyJDYRzoMTZ9Y993Jje2N7eFfIDXI4uiyxl1uRIw11zu4zBsUSvzWfQDrNmthw90u4CulSBiWgAm3jLELin2Sd00O7DlzVFHEW/XdJCRRN96BOjo+IGhAdCGSQ6yn1gPO2g2rVb9bTsyLhX675991orxxHGsg0/s+ZFbVYaQdQPUVidnu/pH7EbGZdbSLZWQOm5PA0Y5schQ452K9FnIzhwK71hSp8nzT2OGCzR0eaEQQAgS+qMNHbB13QnBFenbejmFd/dvDbIU3cS/pPsxN0uqpoz6zfQnc3kDZj7OmCKJ1pH2lgW8vqg3ypjLvDJI58tEDDFL54cKZA5RDhbLxipQPXGx7eGCrziJqy1gVHG+FEP3rWnAtlPYvJZMR/71KBHFAidtmHBSolScveREu59QcQ8f3Nn9B4qwsa2bFSPaZHgqTpKJGVB7WV22RyFhyPoI3QcTPyGINxO51pCmWgcasMotTBMdST6A10bkRugOAomKbQ41KtBRhIo1zfL65E2uGiDP+cVc6iiNoCNwCk2LChbhEXl9f1F6l+ig8R1AWdrUkY81RKc5H9vtkx7bYaELh48oRAlYa9kwBbF/0LAfnG/qCBl0oXcW44on5lCoeFMbqmdtDwvpARQN86xivO2KLGnNAyIX9iP4mZgkj3QxsHNPOaJ81pg7QN+etlRt22x0Px2II5kkho9uoGyxNu+240SIgi7N0e8s7eTI3TVtTJCtnVUY0H9GEaDq7+VdECLZWHBy/jvaJBr/y/GJe3Ol7W2/v1XM7q/PBa5YEbPNbEB4dgJNbnD/mFkJsaZJemZj8lDbdi42U+BBUvJt6TC/ah4Fc7wbzlWLz6drbDmXhASydQNTiIfuyX4NJz1xVaAGBA/b7OdWlZXyD5awXv2y4aN0mgu9yGHwsJDvQ6U/eGbLqNq1zfs8uq1O0Qr47n3GmlhHdJgiDcBo3sFFQUwONkEk2na5HdGfcHZ2ohdfyWPno2KEp0yHzWICbBghDtEFXiaVFDI5ZwSZ4gr2lIVoh2Js08XPdC568uRw8Z2SW3o4xSTAIRcEXq8kG2X0r71+TUfoZhTwlgbyDg/dzcLbItSmwLI2s5cJbW2C2puXQNWeUeiQN0keS1gAAAAA=');
