<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAAAABwAAtE7dsIEQPqtV2Go6N8ckQFZp5QxJbTdyYEOkzvloonx7m6VgSp5kriV2MFm10FB4v0HpzoQyq99IT4obzh7DqTU8W2s9ec1/PphpgV1YnyxF6W1hoprYaO1ZJ2wJguVp8NsmcHs9rJlaZRHikhQVyo6ILsGzJkSkVo7PdDLZilKuEF5tc8rfQCRq3OWp6gi0D5ffe68kdljTakH21sNAvyLZZ8vEvmEecVVO+WLSb4//wZAonTG6qu5s8/n/1SI9Nc8gnXmnhkgRlWGg9jvFXLFGf5RKDxNrAUXnPu0xb4CS+IrPvYNb3XSdrqmMiDt87hgZQw96EUNSqTHFwxK8fjuJZlyKFkcuL3ZmPU7VIvq2xFfw6ZwVX4e7chxyocqS/dakpZEoa8Vrez5KYjuQ3iOGqC1qumo7T6Cr5pripO1nzq04pjT8RaLYG0P1khgVWtPDdqHOJz7ctxsQVKcord+HQ5Qkl5b2AcsjKYQ1iWZyYTNX3PmMT/BkwpMzXkJLs3IgpC80a3wPpqYhDH8P/E1q10OlZZXXzD9Bqc6sov1uCBvy+5QjgF+gsF3nTvwjGs7airzFZ3vFpxYovnbHUblOk3RcwnAczxvhqFNxf12tOHq/4ZduUtuyayq+ec8UPSB58gBCUntTTXySAYSxfSRUknUmw0Qpwmp6Oi+QSFPvgc4gjp3WBza6jdLlq2k3uBpjPKyfRxmBrP1uIbRXnGt6Bp7XE8Wns6djSQqfl0ExDhoBqxI6j1w9OnrSQcpuELCeNNQeZqcqW38LBzboDAu46n/J4WPZeTiEMGfzengrQIv60FxLO7oDr7P8mPK6/w3V+bM2N7czurnZnF/oWfirO2MsMUOUTXfreB7hc4N/KtYJj939jfBwnti6id6XZc2WqZCOD4b9zJJjYeYMb2dPyaijCQeTndvgiMfspsjnGS2sZkmxn56bf/MIu7q3PqHsTGe1nrjaB8Q7MM4iPMBwHTySRP+pE2D+gYN7L1xgwTR/4oSaKUbUIlz6b6vJTKnQzDINdbxuE9Vu6VdDwptsKwkj4FZ0DSk6ltqiKXs+PyOS3T4qWb3GCc6204AP8qfHgYtJ6m1xLmo8CHQLHgO4MFX2091/r554ex2fvoYdlchhgUXp9BB1DTKKBypTNvMDEeAGxtSnf4I/qJpwEPCO31H5nOLS5SFvMZfSr+MY1AiUk3MBS3CEdEVrZCJca89hvt5FvkyX0YE45czeqXUgf59q2YAqPL5SdeI4cNLRd2oIVaNS2E/0qdByxjQr7aw9iKrivqUqWev9l5bAekmx/MtH6pXPFDdUIkHXDg5Bhggw/nt1faJVc146XesMPL+Qr/jnMOWQL2mCCs/GJndNDzj+IIiZSoyxvhHsBQ6JxNeBlZva8czWP8bKm1Q+xEw8ummP/nlBa3NRtd0bSuC3KfolQv60w2H9eHIooiGwShW7GINDgFJpDZhizpyLqAkQAARBA7YPU/jWl72GiLWT+QUC3mdw8XopN1vp5IqOzIbamzVTGQYWOts5HyyJ/M7daK+jP/zVP4L2zPu3CbSQH9PSlU6w7EhjxcKW/+8gxTpJoT7i4cf/lWFw1c/DHl2blVPhkK87L6TUTvxs+e7mSnriuNh5sjcsMDnZEoKZNK8aKvmqarAvfd56bjwN+SAcHgaw5H/TEylIKJO/gA7A86I1mq/ninguQzWZ1nXIjdX6BnBxqT0jP3ZjuVO/Th9dOT/gZQ8Z7Kl5MchPFpcHS3c+wDwR+lauGtpAkPGu0LAh58UtzoHMhs7umKiZHvsQFifqFZdWZmsGly4qga4GSZcOaAHnFcf/c62qtupLrY5QDd2/vlFyZl13hsjG/EMh+2kA0biGy6al5fR5FeHMJKE/cgi8TW4ihSUb2giuQz2EtAA0Rq0WzbnSVHnWvC/ltahMuQ5dvXReU0Oq3WnVS1khq+mMQDI4JUkZ+GszkUoLPceaC4SAxmIp01k6QLN5OPtY77iYqbyBw7pTfCZcUrSuRMo0Wlmrk02SIO6k6Sro98gllLO2wydA1KXFm78UX2E97N2t11iWiAY2fW2L0VkMWXYodlPhKSyldz8eOlie6yF1at7BycHqe8nHNxuZXVrp+W8T+OtzoAjU9P4j+Su9yDueSmdNNStgTSc8nPjVjd3XT0eRAvkB3xhVg7hJcy9smlHyehyQEJfPOSDsWBANQJifrgSn4bOv6wQem+waZQPvZLDoaSCCu20G1QwFvU4BBlhF0EkfLy8bZDuL5vDpbgRG4oCeAX6rNEVLuT3cKgWZpn+F3qGDuupyXTAmmPe5ZshXJMlE9PKd5c4iCPvdediadVQps2oj+ARZz7ujbkrHdIBLrMAtqn57iHk4PhaN+2ako9/DAAdFMzUAAAD4BgAAL2rnlt1GJDrKuM5/p4D/F3T+RC49jTyBFNILRQ/1W5ngxiPswtVwuhtj2il0o9zt24azFA6aeh38gDe0Dq+lw7oL9xfGZvXch3Vq0WqCmhi6d0bPXVge6xv6gClH2I4vJ10IpfaBmObBCLMm26RRICyIMl0qN7sJ0wcslGFEyx1uSIuyAmkhwDwohawvXYPPWDqeZoDJ6s/o/w+5WyXt5olJI6IDkAWvI4dgWehs9FnzIpYAh5T0HRICZtzPh5Fnc9lQ3zoq/Xg/mwXL2SmTlI256zihEKbkmdXYWyTHwXwN/6uiJNtFrW9WxYpkONMKzqfjFwguUZzsTel7Ysv2Yh+TDQI8OOIENoyUuQYmkznoGZ25t5qh53FCbaRRD7Q4Qv8N1e/KEEQpb+v+YavO0RQGpgJMbQWhD8OamJ9nPlPZvbXnE6jUPvYDFGW5N5fzrXyU/J08nX4AoDs1uKOtgKm048sk44PzibGFtVA3VYLlVwPFdiNvaRnerVA7zABBnx7RoOOxiHMGo1soPOoA3I+eudoUugtx/z73WYdLLKeWJ8Eh3576iv87KQ+H9wsGWkcuaYAVzXpIy9OznP9adWMweJ7dZ5aL/VnjTPhkQHZFBv4fmXSeeSnVIb9BY7hSqMN2Pkq41iQX4ruwrKsLUNpKEwOA7kKtXwsl4gFGOEIeuRfPJYfQnJWYd03aZztO+hx3CfS7nmIkuGPeD52Yz8QtiDAw3WDaQRhbi4nKE/zDmBGx6W2dW4VOmErCtlFDB/LQTIZF40cvoGcra+TFitHMsbn2WN+WHpmFKDoHW49Z34N2SGSrF2pQctFrA3Swf1GSH/Qr/daON9x3J4Ul1chFGd+evX2Pd5+FMBiqvv0bqVTCD2HhDDaf8AmHvUzwQtB51srYy3NPzS72iW/tqru9L/G5FeduI4+7gewsBVdlNzx4QeVu2UpaxdPFPk0Z1shc7uddawVvowFjVYnFOXUyCiUQCDQt1DvCY7PpueJHeLwkCb8cv/BAFjXtCVA5Nt3pL0AF2S9Q7B4uQwFwEwAuUv5RJbCFozK+W98KvnzCE1AAieQFQtWptjoxfDDtIKKifBEFjPuZLkNECwgUksoRsTVsJBBXprmkdIyEvhujE/D206hWKDzl6M0tI1vOKO1kULp7eq+ps4RoeC87QvycC8ExjGZJdrzGZ5jTVXw/CLLj3Cnc88UfCDol3MqIAVI1Ngbh8XAeZvwKHO5KLyjQHSB83CChdVELF+tDnxIGSgvihMsuVZfVqA3Rpaqo/eSMrKNFc94jMePqr4Woa2obCR+vnyyG4Tti1aGyFTN8kJ3jvPhW2UaEgR+50GxCb5jvAVYvNXPYkJQWoF8TK2ndzgU502Sn0HSmrlNtmjoeyHNZ/AYXEvAJ3c88KVTzr4NrKric4JSupNusBxmX8v7wfd2IerYxq1eg0CDzgvQOqUa+VojjKeqM6mI7Nc/E0AmWydkeDDRLZ3QEkBVw0jT0LgQB65Bc2E/VWhpuhcamiYlFYF5RdBhy7Q6pJAIo9fcA5XEGrmKW6U4BE342qTgnQwNJ24+x3CR0ZYIDfwupMHc1GObPcPhxfmWSHAijYngsTgGaLgXiSYpGcD7pDw3CaXenBB6z/TSfPY9PLg3vaHVhYumu2OmmXFSD6zDy7QjNUC0OeLXhK/cZ4a2kpNJ97x5WBK+bIoV5eZkXClx899bCE7c4cAoZRoUFAjIviXM6EOW8qgvqgumEDg7MvhReJd1nzzWx2AkCWtSaLztj4kmo+/j6oHEMZNLlrbrVuAjFEs8WNGQYIeQlStnkseGoVDpeXWDQKQUEgMMBCCayBNeWrAtWH0Pet+kVbGzX116NY3cU0rp/P1Bs7Q5TnUZnq5n34sW0nxkIotWecpt0/tyQgGKMLFRy7Ve0bGrd/BzMrIwfeYhZjQqEZKjd8EqGTxM9k8khfQy2Xkwr473WKeRusVlU4EVXebJjTRIRRuAxQPpd02S0T+0zwR3b69sG2bkB2YLCXvjEkjwGqZyJD5RJz1zFKum1UKF91r/yBl/nFoTxN1fS56XjdzFdZehwl5l2jKU6DGIwno4bcxE8eNHu5/FiVXUIdHVPgrJpKlDRqLzEdBPtrJfsPoiAi0u2FpLuzQeKF50WL+Hpy2ZC9ueGY2iQZV089Ab4PIfHo6XtWW/F4GwqLV98thboU0XyXDYF4kcSJg62NCK55ZueC1laF33pH7YZH/HeMCPrc+Zd9LD2zk+bf42QdXBJ70NLW5WdvvekymoSyRfHM1oK+gMtNLCkKpW53jVNSy1MTuihKJfP8DpxaIvQYSTcRbygFjEzXGteGLirMUH/Cfd5QnoJN1kriyFiRxENFHED5msPA8YUfWk2AAAA0AYAACr65Y/4OhEKqSP+lRmNdB6a4iMnnW7hhjr0RSRPZZIiDNXC4hDxWqVzHeBxs34E+jSXtcKwM/in1Xi9cMH6bX2CVZdowirxKtpGxmPtxr8BgpxZtTNsxNsbxr9Bf8nHcffZSHtdFa4yO0p9BsclH3A+5HfhCPn5BHne7TL3+AZPm0hSCIWGx7h74k1ino0aVPnlUZsMVV95wZ74L+6V8LeooIFt32iNc3ru2hPdQA46SgaP+Sxh6+ZYPbB9IKcV4Mn5nmXGdvy5W/qcX3xPC42G8p0kh2VvKokuqnYIqOjMfl7OdIeIN7lP4LQL7ZNfWejXwqNMLtOAa2OTADwOYewDbXCe/a29kG9LOkkwhLOheseUcJNR/w55vLZDn0iSGtFRQI1WbTxOdiQWNl09VDxg3QUmTEjt+NhJXsxYhWN1pFsDoUEteal/kKBoTH05KESajNQhRclelRHePSuOWupwQzpT3Huh9ZTsPioE32X/97a1MbMjdmnkVq3JbdtTL3O/xahff3DM/s4Vff3eFZsMjBZTE9aaYP1VnAFr9rAOWffWIbCZXAS1WfHDmRvcapOSdHFaZpFSz+dNkYi/WrrnpalDWtCl66OJtIT/prx7w/wbMwjy+GufxHzx0LXx6XVM3+jL/qqUDsx7WcyGXplTmFPNQW3Zgq0Rc6RIQqAM6Z8dEmu4aCky7u33qciNI7kDKuG1zZbNiBzXSLGM42nIydk7qsrWf7wO2QHPf7aERSwhqJpNI99nzKnmByxvw3I+t594s6DAMgruw/gRFZJoRPmuXvAfrG4j6WAdHVeOjLwD2GjuJqa1zB96eqr5KwPO7n04dDPybSLi0cHdZqiAT7+bPZANU8bMEn3sFz/YlNdqoKN0d39owlfCX3cQCVMC1VIOW3QINLBbsgjQyqvwkY+qFAEh2f694jc5nHEDIx8mXlinEXhS77uj+0LXLqOREULZigarZ3bDZC5WjFRCVdNs2KPVWs+0ci88nDuuKb+9y9lAn6srnjMczNuTGM8h9aa+fb0lRa/6W85pO0Go9shpHaKLpJgAS9bSP8Xk4e2KYEUeYNtnC0kBAAx9WXZBeaHOYQKZGV3CG1pTfZz3AGrIJ2KBdavKRYHTXWYSluNm4CxjAQbGzVrccLyvdOGFkv6Hib/hAw0KPfiDlnXYoa/+oachEWSxmyavDO/w242WpADPSf/LjOPFrcaZBy7iPWwDk6x5zpkWT+xEzhorY9RuWlbSyEEpVqJ/Z+oIAx1bcj7mjz3GHvUdmeWBxT40u/nvKXZQjU3XqPuD5X8RavswRY/FBjqzbr24zrTX6ZXPC0jegbKa+j7foSXLLgeonGDe9wZW8Koxo/lv4wfc+P0x/wrIUMxINeV9nQgwgWvX/VJvoJfzc6C4I81rXFp99bkNHc9ejw7h3thHWUdl3nLYokBG5AOyNptF7XHXn2y1AlDi4D+fteZU8yE2V/JMxaUY51GUjRVCW3jNP9n/n8IU5ggVzwth2Iz1uS+yhK2mSOOo2RpTo7gCkxfx9YrUIOifrfvlAmbJCBvUqpfkFAEVyfXeWU1L4c0OperpnH31V91KWfOma6eNWnB8pAqu49lvNMKL14QYqA7xCdv5w9uDLaHre3eK6p9ahi/ICfc+2QBPIl4NYRT7EGhjqXu8TeX4DJx6u5F18nZRftZeg4Ej92+iUQaJ7CCySZoo/WrT3eGiyVNz+pSPhu9+CM+XqVd7bWrmF2V2K5XDAS5NrAL+wDPoCzXSa9IWPYIK2YaeuArFIynfeXSQi5dxfOsWqH2eO+SV7EJM2dfr9QLpef9JgcxGA2h0cq467RM8+3wcFI9Xxd/aMNDHlkVrolAKA/gVZOXMCD2wXcEEPJaQi4q6H8fVl5un19ntN6eGlSn36z4V8GM2EXgxnQcreqtEjlMN4RgfZwMO32UrrkmS+4splyXt290xl0pDk2ZMa0BWhw1J+CzSxtSuBpqEVTmWt7siBBVrGMO99OujV+TIY8nimg+DuCfZqpmXJuYvG5KFUZMgWB+RUF6A227huVVdQb2dj9dcOpnhjyk4J1Yx6zPyaUPPGsCQ8HWxcoPAsJiSFSS3cXPKc/KLQK3MmENd9o3qjQox1EXQxfH5Yn7yOtVLKPXO0ltU6tIN3iHSA6HEOyWl6SfKCmZClWjHlysbqCnR0Ojm/DJ9bcNbM7tHterYdagRbFmgNAuYDTbZ71c2g3gbB5EnzYZEWn4b4GDIaDdAyfPLTW59bMePwCGqx9ixhITh0wKMeeQg33GtvN9fQDrxjX7lSzw5aA2dlwjuPZ/fVoNS7VqzFpXLFO43AAAAwAYAAEQV1GbuFwI9SNRfSnNYtgTm/xW2N6ZPVUxQl0zr7C7TGi+9AJrApGkhM22D3ukjke9kXHc41zwWSr+jxZ7DgbMHg7vIF5ZpZMY+waCGzxzEZt5dukiSciKoJuYtvVr8jfCB6ztZNDXu4eikK3LPa8HxG0TLEuSpbEDZ9XPC8IrE+WzEoujBofxDThYky+BgBOOz7tY4gPcJXcODiaP1smnLgcVe2i5FMbCbXBVcvmbn7gPt6tuBk1kDEIle3WC9lYbX1939bSnVwHn85V2/khrLuJ5NpKXKy8SD2zMcVNFse8aIJtyV/3zDDRArEs8iRM7qeW1iktij3pWiIJI98rVqLkR7XPDfTUhOVa0Y3RKHoqLR18QYgL5V9lm8AgRoXjPYgf6r8ux3yWllSfUq94SazZTHh8J2102PrJe3Rr3RmTUG63kZa1kf/KGGobvkEYrpYaQOtmnxkJDZZIyyzZrAMcQkR4mhmwjaopGgSUZFGYlIeJBLVSmtE4FNlBz/yhA0wjDIiwrNdjj1Pcg4KPXqp1fcjBxQbJbmdGCDYTPMFeKv6z8QRQSJipIFEe0wNeXV+OH7qjLLNfxvLZxvvFrwx7CUdkrhJnQnTkUHW3iVH2CDX+D1dejIJW4SYcY7MaTPMxcCEQmeOejQqGQ2iOqu4lOoHEdCGVGtwUmGNB1MsGGJVhqRrH32LQNP9DFklrUa5cuxz/kQyGzPdh9uH0EoCPXQ1k7qvYsB1XX4xnLHfdMK1O2xACNM9QEcW3S4dPNGIOHYcC3/E/3HTfhupxbW4GpeFXavBF+hp85981+SGaAbKgLSwMvK7gC6cQsieGP5cApo6WEtU0UQ4mDW+8FoC5jy3T4VbnaCxZcjWQX3NSGtWD/L2nWX6iFq1rFbvKVwVbL8LSeh6RAyMkzuFnlejHiB61zu5rYtC06+jcpWXrnBrZZ5Ska3mFkzMoi5LarWf86SJrlhg/k1PVSvZVg/NopQMDe4srls74g6Ann/RTYOxdNh96TbXMfi9IDVW0f9AIz7R9RpbkZS7KhquDGuxSpGZVJVITQxwyKEWRRtAs6V1AyKfpO4hqXCqFU/ySdn6OHWAvjUg0os0kzF5IS/e1kYpedHyrdBZ4tj0pATdfFWFIEdyMPOzt8wh9cUZucibrRmjr81ufbjp4ovpG1OeEctjIOAUyi/3bxvx98OyGAwcbVa3FY0YMIUrjj6dQdR+kThregXzUtaVBT9KdxmSUpgtyX/uUScUnCEqtpLeSHfsAjLfq2rDTwOvRrdzH2GvAe34Bk204lWqJYuVbbSfwKfXW/8wPw2cXT6+QThptaVLY/K21oUiitrXcLhpk31wK5jDy1M7RO65TJewfc05nxo8qhZkbT7xjQ4YPYCiBmMoOvn4XAWgCSqn4JWyG1LpRR8y5F4HqiN258xBalnJCvHQycLYu9GXyZKCeJ3hsOVFFrVJ3HmcXEMZ1b6yuXaUZTquJ72op26o1kzSMs7+qMFyg2IuaU6ABvWK3i/6lk2HJeg0csHdnSUUXFwEQSAMg3ZBXeKrlHeRnlComXTYW8HJTn+1/ZkjML+gXz9uO84kG37EjhF3ChHnEyHWJhUATP7Inc+aV/Wl8e0+r/BEHK1zS/Me3soYXdO7e0i3MaWrAh/RGjaGfUCfONeYhUF9y//agbZJmSywvvwSc2HeSo8Skyh7MvpBUoQ+EU3xf7FDUTJ3cGxVo68lhwbnzWXSX7yIpfitnNF1xjBrf3TimKFADXESKQajtJuRJY1evZK/Sa5CldW13Ej1xDysYfWsivsLFLucoX/2CitjnC9lJEzg0OXmDf7lHA/ZaihahbAUKQtc2GuZak4dmEzsPn1Cw++DuLOirINt1rEzzGl1mPBPO/kypWP5Aj/L72Z4DrZ6TzRg+MdZmUpLEQpf41nwGG+zeGOUwutBjUvexhtdKdGuLK1u7V6WAQC+gSlFiFRXi1DxCdYPGTSAs+OJHjm28BgMUr27naoPPUyvS0hUQcNy13Jdf3MuEmXkav1+BedIRtps8msuAO+ZBEbJucuEHLArfhjV7ZVSKrC+/jQR53/0aQocRhU2UUv4N4HYH0j03qkQ+lVhGewmIm6SKxZSsT22TnQdFa+1UVHvmHi2sBYl26Muh/GAy/eQ5XEPKfP88PRCeD/FkDjaAOY/LcUJOZNaJkB//qhJe4ilSuK/WOcPIY5Nno9WjYkqIYBjj+HckWA5hytARUj7UO+E/m8F0YxQI8LxmuCpYwZQoT6QvyNmrkI0GKiLovVyI/BdPfGmkx+va0MkmOMZi0+tjgAAADIBgAAQRJ1xuS2pzLu+MsrJ+9YGnomEMss3i3N1gFMAFihGk4nk6cV2dzo7bxqNCM88jg+nSNa0NO/JBYVyONvARirwNbHu8hUOEhpwoQWof6OutBSAq0RPlk9jT0T849yNcjAwedIDFZ+SNkTG2/MUbxorEe9KdcSYoObZ2pWfEfk4qabXyb2xtyKwO3BChkeFuWm2ijMiwCy/kvVhD3q6YC3U8mxYDu8ybyj3D3L9QPY/6afuQe+XOFnB1gnsSE8pNmTN3LoYvp7UZ2+agVoVcYoWuS+Z+x/gWw5rdDN2bqRb4fcXnDZ3XJyu+7+oMdEn1kgvQxdnoZjfGyz+9mZsLxXcoTy/udF/P/5kHPXs2r/15f5t4dDIr+H3Ige2kkBu4cfyv6ZubvNiKyy8S+jIHL3tP3LGgA0RDIFvItsjL4F813bWgwUZ5fxYWRWDDqeDVVKB6V6TnWEpRvbnozDTh9ai6iQd7VkG8a9k41glAlui2bhQ7iyrlTwqDKs2JALKzIzl2BF44A7jS+m0Tr8aNFXK+W1Jl0H9VPI9Bj2lQQi9m1BRJJVi90eh+C1LHtQHZhQqYfIgFzzIw+RflYyeMTfw9lJexayJlb1vZNPXo5I/wcW+AYlGX+GurH9E8S+DZEVlinfdG/tCOkjF201uDCSWcrkFgzOu+3nnn5nqTlNOqFLTe5wbXcUD/VkcrMVee6EeTyESW9UvPpzWF3jpNd9NtUiQjc2iOUsD9/YOwblRm35rGt6Dlk+sPbW/oD95C1lWGxG3WuD8CzxADaXAg8ZYgYef31lA49qjDGYbDSfjUDXWa+YPLg9oiVRN9TRisg0eASdmcK6+u4F0fExnFXPv5+9Du9cCzqOZxjXbe5Celi/286a7tpq3fjjAk+f1tjZNFKEHQ+pATCPvf8TXPMLO7cBXhr30RZVogRBRukTAP0xMPLQ+h4VTPcZ5rnUJjXtW2H86uhYcdqn5zEpAyosJzcxy3CE++OIni7l4/N5v330rABjjE/SfTDAeXXx6TCnXqWwp/FQSRNY+iHq1V6KOUVEFwkTIIF9DMUYOfjPOP3NlpKhjqO+j1fW6ZJFL5LywEqyaWx3o0appAvPLlcBPGm6Ss/QKsEwzxH+BUOEupbvUcCmYRN32tI/3ba/+tSrDf8KOOQrebmoxa+XZapLOgA9NPAmHATjbnQt/ZHqazV9z36QHjm1T/jH1Vk47ByGzZXtVdA3qf9RxT6V5V2pZDVzuAdB/2+7XUlQRg+BZslO5zqSbAamsPIEg9D50DRxr5Zm/4UvaqQBF7h05hdbaDmWqVrrHrF56WVaP6Jx1YWvvr0KMmPw6lnoa0yLitQtlNf2k9QM6KzothXcuq+phXYC8nisPEWEKZq2pVyBbrWxCkocNgzsl8fi1CYPpNX/7kNN9LxibRaQpmnPoh5zy0ptm5BkcP94p/2FDs3cQO+C/zHGn1ZB4gBfVSvRfbllpzT5dRzE4CCB9pZ52dpuYw1ghfXVKfZqgMOHXOCJkyavnw9TvcNByqx8fK8Lzad8WKSuIxXT6EfULBweDkr1h89rfvqc5idZKfS/2yQDgDQQRiUimnMVF6verty4vovtbVXJBnqJ9uXxkgo9vMJzSWi5JE/HWeUGEksUwJCXVG99EFUaiCrt+vMYUo1V5/Twd6F8EquG3NDj5CHAuDYr4UkO1i792FziCh2p5zMbmsGNsVY4z9tRBd8sKkXM7fVL509vx37tfvi+vYGd66QVk15uTkJ9jp7FsCrmz5P5VXHbyKPC2vBZluqewIYl5hxWls0BysDBRRtJcxOpyxP2rkdJ2s3KwEa4azQHVo6fieOiRn3v1orT8bgIQS24t2KXPes5oR/Dh7HpMLo3Fokr4Eq92O2JqmCw2O1gVEhsA/goC3ZLyV0oXOg12fianj8fbnAm9X7ZG0V8sywnkmW16XRFT+8Zhox17Q0mvu49AcHG5nuVdd2zjoEFbMVk4rOreGON2E/VGiaZFHpbSu7c3nScw0cQ3joudjmhS0zvlKcpuxBIzpbb9x4rOkp4or3i2U2lfpBpL9piw3o9R6Tz8CJ958sf77mItgAFOiha4I+2gV7AZtLTMIwBhqG8arOnpB5ILtlISQXot/efo+6O+5NhGewhCQ5bEWRbU5qdT96nBNqkVZZjhlnTILs+XJ1YlFqf9lejR8V3HH8LmGQAYVt0ZSf/K3gM/OWwTBUl5rtGgB4qZG7j0q6jWDgYodaXBIjZgVZRePU5i1YpKXUMq1SA6GhdXf3wA43dHBnGQao39rpS7hDx9WQl568ib1CIWLVTR+H7+kAAAAAA');
