<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAADIAQAAm6b+3EKLfcGXSBgYbzwOiGe/h1OkCszmbW7AENKG2kxJg4YZblxs3vvMIpuMSGjrLBYq8sy/y5T6fqhpofwERWBXClOc6iPP/nbcbV1KKgHqLPQ7CQLvMaG5hMgF4C0LHV9DecL/qYb+i58FEPzuoxP6RtXDx+5sbIbMSRVsL8XNEKLOArBZZSwA7HQG9VuzD3vRRglGTNESr+MGoo6SHfsVn/uhj4gp0lR0KNC5jXznATpSMPtZLt95rB5h/y5f9j2NEx2SlnFW5RApPlzFHtghJkNTUictWABJNNFKaCN/uFUpq6QKUQ/zGtIFtDmVU5ewgGCgHdtvpofJw3y+EksXvImLyHDzqUR3ywahdJ0KHPmhDtxU94hh1Him/AaaSkkvKJ1iOP6ggyCIjY+norgHl5xpmXWsX2yORsCsXkYqVjOMnm+iN+Z6odVnMkSgBupjtDpJFuF9t8oDkY/NvCPHEnF0o4rbJ/tvcwU6AlYTfvmwTx1goDmho2vGknOBQ0EIrSFp5c0z5rmEdKN0GE/vUxKie52OzGpIIRCOxcFTLjMD+7pk1Lc3uG3icEswFBZxOiycE+t4usTcGczjSbFPf3QUo9o1NQAAANABAAB2vd3gHHHKD6Lu+dc4XGyXfsxchR18VDIG1KETsu5KzHLOZxqBJvNdxPcfLMTk3NFaN3P5d+h3+1KhswL+hCa/+NGUFEp/mVCHCixnSiV8TkqoQzXXT+jbuWX5dlZE6VMHkrZZYYgk2yCvI4YVYHCSA5OOKA98lyy3yC225apy+yPRwLbZqxqOXBM7TJZg5x9xr9jnKCSGLbJEzX3ZMlmAyFshBZGI9rtUqSAp8OotrLAsycGvGvfLXAo9jd2KX5Seyryn4825SxZ06cLQWMMU3mIQM43GGgce+PR4CpddMhdTt8lIjjI3LiXqAxYEvdGGr6jEJM+naIIFd302wYW8tw7oI9AtWbZbJwRA1zJXAePDm1P4rtZD4YC/ESh4XwXJBrz+YD6INAIzmTJw8GZMgNBK2Mf2cteb7Qt2ETlTuD+/B2rEV/l4GcJcaS357u2q7FkEeJVUiJJpG/RL8fdPD79I826ZA8bJN4Uwnsn+GnCJ4lGw7QsuLhS4eaWBdf5MnAWKMPU8oO2OirxoGWsvGF5XECLcClnOTsK5cjV9pbKFXtIHqT7qhaH14u0cmEKsEGpeqzhlMOrfB3P4ElrWZjwTfK4m3FTWwrvgtu0FhzYAAADgAQAAoANyhZqsvjM+CHUx6eO2CbnIIe8YbVOHB4DmLRDDJHmGCCLx3yWI5ohjvTs9mGjhGBNpTvCYhuREaOJHsPtWnpRRGaYeq5Nti/pyRsVN82ZyZv6CJ2oED4BepV4djkKp1Id+VZxyXv9mcJzBFh4S6b3xUZ3hkOtPMAqOCF1XZN0LPI05Tw8lrI9UvWvcjmeyT/aWVovjzvsV8AnfR6UTZWQuP3OqjYnqFwWzNFacebO6fY3hPni/TZWHeW1ovhOnokGjwOmgFWe1vBtfRlX6Gfr5I04F4Vpp1D8vAh3PMOtJzKCdV9AY8DG71bg9SHtSVMOxePofVDPJxSYrd/jOHsUJHM2Si2qH5ojnAHzLI0cXUjL6kVezyfnrasq5PFrgjoBy8Us+UYys9z5LaISDYrshcjhJq32Ki7F1MfCphZaQQ30GaH0j7ZCmmEzXSZJXzHJ1ofTIxFPeNxIchkSU8dETFHiZRevqAKsKt62zRzzysAyqze9qKEUDZXyDZlzKVPpc/edHd92ashRgn1LoECHph7ZTHqO/sqZwon6DB87770+z/cBgeHAbBj7gNLgWWpRRMsKWCStsD6UtT4YQkz90qVeeWIs/g1NYE5ZrP43izfMsEiMfTjKA2k71ZCG0NwAAAOABAAAtEpi57eWTiK54SOmideIHolF7XrsQhJDiVDTjPkuutaiiZng96EGrG/aXNRmod7N/wpL1Jv+jp54gVBHRiGg4l+YxfBVg/I9dz3tYMwF+wVrWRqRm/1hJf8brEE3XkiEv8MLQzB5uhH6c0rW0wWqdODPjHepqkJdKRvZST/D5S3+6YGjIQltgzYdgpaRiI+g2W7avcm2z1F6NhJQfLkIToLRR2iwMFDfk77UnvVl1w8L4pyudlNNW4pMVE7QI50+WiEAgkhqJR7mBpk01rHJKrXxirgKzPBD8+EwRJoTwN/lhGPf94KCGrWnL4GRXbQvTcWH9Bktkw55IWMOW+U1TDMZkCWqvA8c1h7i7EmZrg92pFtNEmdUX7+kJtpOaq9vC0CCbDyhKCFG5Y0Uage0xD5pt7OHaCE03ypOp0z8/s8KNp3+m0vlg7d7xG6RgwhzBzoW4kkKktJfCHMZ3CzVN1kaHUya/NGStJ7aL213LSHzflC9ATrcFLM1rQcXK65l3fiOzNRAa5Fv+p2i/VlEy78iWZm0l7RTa6o/he9NBmpy0pFQGUURH/rW9OTf5LNP8Rxyq6zTJLRx7MtGgo5F8qrg40mYFyn6eH/A8KImkqvH42RnAkZLuOQMs0eY0Ieg4AAAA6AEAAB2MmfGONVGoEygFJzVNFUTNpeZKn7rTWvwcBXHGpeHIC4FKJBtsRyG+vQ/VWGZzS03DMu3bzdzTMmX211ssAzTjN+rf/awLhJ1Pwvk41Y7W2LQnUys2wqJ9GAO+DS0AJMjDliGm2LvC3ruVPTYLLOxBkXQiUvL2pvaNvrQt5GgtRE1SeAJjFImBRBImXP5B4ZdNuOTao4aP6bKDPClfKQGnRUvX3FIO/mmLBLbG3Wy3wTCDVACP7u14OA7LNDamFnddAHlD55Ow2j4nB5oj8/+kru+GqZWrhhQCTuKYZlaEZFOUKmidWPPKL401KSt4R0jbxAnDQqelZvyTc7G2BXdDh4e2LcfZBrBJWe6A9xZamAyP9lTu++FJZ2oQFhQCAaApcMd4r9HG35wRl7lA3+NAjbrBzhCJYPBYDtB0/ZBJSgvSX4TQY1tqgRKirgAQFragNTfo49m+iRjSjOCWJhoSv5lM68HCel4u+6EwI8Ho33Dc4uDEmMlDvJRHrZrhRaIo0ggQpLZJZDJxtqqOquDywy22L8jykh4jhMigntVCFzNnp2kx4m1FlOHbMZ5TmHX0HDJ+Z9+cMLWSaONBPV/bOJJmkEXHqpNtNCwW6Geq4YSiUBasqZLmpHX6H03hxOxGt53P8XgjAAAAAA==');
