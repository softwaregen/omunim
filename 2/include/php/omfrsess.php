<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAAB4AgAAsYsd1P5iZCqVa0d4u+27GWQsgTmsSp6lLH3yZJBy61R929csjJuJL83EXpbenXF2l26wMyko8yO509zHj/1UDXl8usYCwX770Q/d3MYR2wln6Lv7NzBvTee8xMX/ffAHVwALW2X5mVppIYue4D7YHor+6k3UK1u/l5P3O2Es2P2CzMhjYkRCrVxYtrdX3woz/Z4FrPwSpK2FvyAwNBBXxONu1/KZdepuS21qGzFZ3hwoGcatmvHnJSaQzRQaNW2WWjqNiFxu0kl4Hp0+Dvg5cTLXKDHG5lNMNBo6OBDCMYCSl1iEcXsJ3q60ffHcVJ2Vd56PLTERW+p6wsEwAzIhrIGIJjotDuO3UFDqM2jr19H8CFATXnRwh/6/2oA2266Ts0ZgmkEd37BQjRiRyWridGGYDoVgVFUVmceGWugGRJBg7bK6aPSMSi7QttkvEn+UR8DMaNdKDbIoz4/S0kfAzNUYs9T9UD4WVkqgmHx8VJ6BkGePSXdYH+53dDEDIn/MPXQu0nP9JvR9O15Z+lCXAZAyzJkIAIpgc/MtVu30G1jA7A2HRFl/dyRz77wRkeWIm+YrJrcpXfwiFux0F7/0jCFqThbtjtMahkSL4pEb0ZriJhRoOk4aZogmoWCZ8t0+CswPL9G+838HMeUkotozQytie3snZCoDgQzLGgYKAeIHYuVUURNvmiQAWVXthF6BS6OPGgDZbAK9ZHjcUES2HEoB0NsLwgLd8E9m+7qaNRYx3nFcY7B+tF6g+Rl45LHMTJmDK5amqa/IT2MSPq1bvmHFY2lyRm6UFFW1KudCbqCr585aDerpNXjiKa0PZmwbiVNi7x+RnR01AAAAMAIAAF/HA6/UEQTfSKfRLhIuVqKxsKYHKTWDXJW6aVScUT7lxuaHydGU9uOW5nYWNCpJUHJAW48gK/rzLQZFLMzepIQxV309SHIJqgrK0aVvvIfDGkcsVT/B/VhPva7AQT15nAj3SSxeweR6GAvn5QCPqXoY+aaKOGrkqIlA0OzKAuYOBkj/50Zx7asn7Xw7iM8ZVfEtU1HkgIUYo4Kyz9FbE/cauYgVfURvqLU058TQSbzs6ZqiiYReyJBsB1SRmAt6EgCXyyzqrUZ3Aoeak2ak4/o7M7m93LPrZL8pPceDh1NIK7PydcIRZOxMegaJ46jHFuxBqdRk6X/666nejmO2Nn43pIpv5TDqUEUbzD2t4ZktUe8pPFFj7vzjgcgzanMxqplaYJ6Oai34D21QrGkapDCTLYcZkkqsuyPdcu7JlUXMyoCbIBepsTBx1BrgU2kDHTsNgmozxjbyWrXeakckSyrGprYhyUJ+1swtLjj2eIlG8xvgdesJEmki5FRPA4eyBVoboes16Gw2FWubAo0U4hof4KT9GG9xl2BQkOi2z+2T7vUEsejSYc1Wwf2cEnKAl9lfj/+H3WE0cGfZXiJyDkzrt+ZQgMi0x2SnHRwUAby4pTcTNu9MHgUS/ol07xPPQjxbcCPWZX8aLbd4aW0qNR2ZhNhegdPkpTmSheEXYe8OOHtGk7lwQ1Gp7RafC3XM1OTGgfLPyClsff6yked+/6rZX4eW6Fjg6X4MEGlrkgOSNgAAACgCAAB/sWr3KiP4rMO14+nZzlNEr8jftl9hvx5VhFuA8P/cCxTqIk6wge77oa3ayop7P60zVoD9SwdEvAV56lPYkc2gV2a3qaP6jSaVQur5URIfpoM397REB6Gwr8U6uyWjN4yJMeUaZyxBD+svnxU0g09R4YuXCL8eDBDmVjHiZ0VqVYMi0eKmHTkBmuJNJJ8RemFfAlIkDidh4Dne9QXdALeQbCft7sqZvC0J52BoUSqK/wyt8WxFxYR4+Wbh3PWJdGrckj5+C0o5KjGZ5XX3V2jN1CoKCu/WaGQFmCdGJMYVIZVZktfSTbQv8Uuhwn/jm0Qi+aEAzOWsLLh6nnpmavRkNrbLsxA/Rh6EJD+VvhCxWi4a2MKIasGHDDt6q3/PsKURHaNyacWbd/6YW3wvLUHwMvLOKlu5xzW8XC2ckWdgKzMR566iBjeMDhtbYNnL+su4sDmY1wM3ubTxMcO8PNxvUGzJ/wKG3CLKZivXcMnVfHmhxmVDh6LXKPewCV6db0QT5O4ExFGOdgqpgsmfIRpK2GRBa7PXZIonD9PvLPZU1mcLkdisyjjWEIXDv7V6DyN28y6XrgCiorT/HqLcweVUgaymMq62B8p90vM2OkjrDjw0VbKqWbABK6uoVJbeBpxWQR7v/YCmHLFMJlcWRDAlOM35E0zK7DdqN7IW/VPTvlBrfL8hbKimPLzyRkppqeQwyX9GiE1yVZ7PPPx9RILnBTLlTwkihhg3AAAAOAIAAPzK0nGPpOBJTpdx+jcGS8cvo0Vt3vAl/StykQJiiQKt2f64FAMLZXcZ616qPXTKiyAaw98XDLqMFHylpQQxw8g5CcwlFtvO/MUWo9nkeEaUO1HZQL9eTLLfVCP1mbjvj4cMnBNNV+0dzr7i3V3YujBwpSUBGB4EV93YGVHNtp4vJ22lgTf4vdjP7mO9m0uF87LYioC8ECaLP4EZSEDowWxhYrwuRLlSFTEh6yFRGhrBvMXJCruEQ6+PqVjzos2p26OFB/lhJbineAbsOY6D3t19Wbv3vCDg5wsvn4AuE4ZuksekPXtchAi5JYhQ8WNgxgfQjIr58zRR63PnDa7x380cxxt+bV/BglU5ONHug5nayRxBCEX8WPdGomA0t0dbtwcMJcqmZmpnqujGKSyTbLoH31bFuSd1ZWcUpTuM8eNmBsHSgZGuCo0RDAi39zhAwoSRzzu3+B+wPCBc6Th6K451YcadNZWRP5IIlXZ5Uq1RbUvdooHAUnIIoo6uroeBprkTR8mNvORG/GVZu/gKdV2zaat2NdEF3H3s+Gl77WleiGC/Y3d6xSy3qn9UEbxtkapZ0FSjYW7/LoHRLwAPFoPkKObX4wru0L1l/Y7iWMa2CPgYFX1bgQb90PTzoPALLBRkY8zmM1WRfPBvkNzwUHXrjlbXoV+ybFMuq2/Vlje0iovNckhE/GtjYXv8jBmVnogRmr+c9PmZnU8abPIPr6W5B98xrc6qLhehFZ/jAMRCowqwzr81xdE4AAAAOAIAAP2LWVV0hVjIT+pmmsXNdQzvEQnAGk7Ul1wg6shK82AuwC00TA52cl+em1hQEPCeL/FBw+rOW+sxdn7yjgQyRFt6P5VMs0VuUGKAoJT0IbgoSipfDMXwbKacCinnKSDi4YdsZiP+4qBi9/yqMgtQSIjuaj4/pNbT51wvHOkSOBvEEjnZ9kIpkXG6O+7W20Q0prqh3LyFOxDms8tBqEZdotJphnjycBL8CfwsxZ5MavJ6RCJwDmwsSDUxZF3wfeB5v20/5iQdTRYVwvrdL02UQwoE1WYtNeZ2jXz+voRpPIk6vb38eN1f8yocjF7PepNbw8uvLUsgqQDazEhJgKrbb+vN/dPkgHcBkZ+uV6kE0jxjcyTq0bsoyxZWCsTY5iAy2GDRQvKKu0J/71AZ2sVF8Eq3ZUdTn38bwTnfZ0uCAsnQ8+oD4SrlnNkyluLJzdmTSJEaqSV9kays/Z5kRDxAaK6mKe3f2+OKvxsw/XgqDkd01PrgDeNNp6YVpZ+ETY6WkqkTEpBarJ6k2FnsaR7yuvbuXRc1Ll9jy2C8uJDpukpPG/VC6edQLqqDJgAduqDdV48anP5gFsMvLGwgwhBHAif9oOeFTpOHBsEDwFXRvnxVE4oLlWMeSuVLf4hIDxOX/+MyDyK4iQD8mVAiSwE5fX7mqHXg7VuieqRsxck2t1x707WstBHsnwDYkJjEPwS2L1C13HKuYzsnGXBAhf/gpMWgbLnrbRqznBEmAeutv6Kc0QJ3mdZK7w8AAAAA');
