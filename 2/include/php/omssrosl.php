<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAADYAAAAAVcgBWg0oUfOA3Wjg8bMKdbVgtxPJ9P7DQb7HZJBf3LGeqZH+YrMipfkKx0hPCvY/qI/PvPiq/RYyP2RQtQk/lBmPhzdeOZ7CMJoAJiigqgcHjQn2SW3wavOS3XXWXpreRtvytuvXOgHOr4jh6FVgKAp21uvnb4WBVwN/WSAjC3hxP31/vheb3vVR2YLlmKleo0w3WhL67+5z7qeWhPiKe5MzKHFVACFQtQLsd3ujohiNKhMtoclak8Hhe9cbXqv5RruOJM+1gArjvjNsvnWIE9z4DVaxkKVNQAAAOAAAADtLIFySKAMiR50stELJchP2kG/HwFa7l49Dz055Jv6+GgbylfDNU7e2u03EuDT74hqx5LqLHIRIyxROSSWz1b/YyBt07Rfxwtx/U6QZBFr46bdvekIAKPyUpEa+nzoNuqYLiDOHz3xgXKp8wA6eqVWEsGuxM/077Lsx0zpY2aOwxOoozeCbZG5SZg0Yl0do1/t6KPhT899BNqyVqTw2lMDV9D9/UFxDGm1En7vk1xtuRB8EgoRdba39oOURNyZzCHpvkZxQFTTDzMLBGdKHkYYCz4AldDkBxrWPJqZLPeoRDYAAADwAAAA06Xmh33Xr3j5aCDMpWPf40UMaDvb0m6FVk2d02GLbB45oTgmjXVnFxV+pmLqbntILqOkoJZkZ4Ye6qhvB+SDW+VpFTrBjPe1Epxj/xBSH0kidkRQhrALdzUApiFzTghgZxW65VqZjy74J+gWtpHOpjeoywOy2PgGAInfpKOmAqMH0tngD+kB33ZQ18/cxGozrDsz25G76aQdzEHc+Wm/KmogrWMQsaXV27OaicNc+/hddT8ATrDJRnf+QK1qTdWgjUDXgT7AHd0Cy3pWDg5CLgPTymOsCb4cOp1Qn2XmR+FjaRIpM+V2kNTNB9VMtABxNwAAAOgAAADsYjepl0GYsXJ+HGmH+3Ue8RDRdsdxbBAclCkrfl22QQItfFm0YwhjccqB7uG9NF25y7ZbvFboij+GXfMI7mNEEg1DyPTFnKfH1ubdssvxgpq+UAjyiSqxphrxfl5qAucMtDnf1OPFMmYvOQhR9q1x2SZrAp9UHQR31JKxwApYTPZ4W29I5bYh7ERkcOjDbcf5u91pzGtlndl7xlKlQ1ENOyG09ifZ7JJlfApbIEChOEQ4eFKi1QY1gx8FGehEZ+f0Ss/W9K5fDQtHHq3AMFyXKokEPEw1fyZQZZoCRz55HRlodxKcglv3OAAAAAABAACPMhXB0+OpFf/9c/vqmCgG2sNWMIhQoNSppqKXfdimJNNLiaGQO2l5nXTCZCOekzXHaVak0zBh+4OwZJ1va73FZLPsjvDuGTU5tvJBQd5T77rOtEASxjRFXhB937dYsYRdrVI9hx28CT+n00ew8VMqrguqUoq+pD+oX+LaCAIbG2kY01xBHfBrSa982xpb8lU+94cqVyN8A94kO4zyyhNALA0+5bWSJJEBT5L50C+Oa2E08KrbSdgDUdTS0hUhP1eYvmkCINgtKQ3mny/0Gv3M7BmTm229Q/ohbEMPPMwK3A3OCtKXsgir2QQGhTCUMp7+AJODL6DHmaUjRD45CD/sAAAAAA==');
