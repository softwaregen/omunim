<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('847EF5FA8D682990AAQAAAAWAAAABIgAAACABAAAAAAAAAD/fkDGBwkhlebjFzGK4Ups1iuc3PVHjdtw3XileecQuqAyCgiyDbCAqvkb51/hCkNFefR1UZGFzIMKirsH3ycdhY/w/zgDmUM4yRC0M2PReYjdWof1GMbK/FxQpmvN+TqWMkZ0wyvBznsyMaJPrUIhL2RQOYbYQSUMsL3MlOs9GlH4t+ixWAZbWjQAAAAwBQAAgU9GaeJxp1FR61rUcUZfH8nDtqF9NsQv+eHE2yrob2CmOFVOiCd3uVcLWz3tcKbR6IQPGVy1/ZrmFcD3ciWEoaxGv9ezax6WHxwBeC+EtS0W6l1m0fM6cOL8yFVfN9pYpkPzbXMCGsXZJXzfQcAxejO+O37byxXrSoa4Z9KCx6z6Kh1w/YlHA+DPUxviz3Lyi/Laj0/+2B/RwY75+klPBAyJQ3uyAC7DeYtG/yu6PjV+vIdbKu7/9d+YKYDAB8oF/VnbnmJnbf8JTR5f2s22+HzNCdXBiN2EgUZXjsXS8cxmsJxSQKuWXpkKD5fro6XZ7PcG9RCYFD04FXqecWtw1dHceV5slqf+NOq7pVo8BvtaciAVg/OtHT/PxadUlt0quySG/grSD0YwY+YkSWrYctjC/hDpGHm3IlmgJMDeb5Usgu0fE/uF/mg+GppNIk26NBa0JpuWTa6Ib3h14SGZQ+EMNG74JryslGC5i3/BlJxzh2RtD1z7qoJ0J+NqH3WDJ0ozdl7Q0GWfCc5NOukqU4FpG7a1ARy1B+Z120Ee2tC3OcEJ5zKsNrguCQXSjoGyqvYBNvY/KkPKoJs0XVwgSM9lmStHxnpFSqlk0Jk8xgl95CS/In0qs9TjV6LEEccKkVUneWWfAwR4BER3YRJwRP9eIli86iWxHwTBWGGoiQbUpRS/xxfcQuWfWsl7CzG/BdJIk7OHH6QYEMprrkkwweXcmBEgtkHw8CGFw8aBu8Ky86T3XfS/eV2UbHeQAGx69qZnKn1xHPMbg5q0pnQztfNOp4u6jDWVwMKMp1qc6EdDYrtLvfSvPDQX/sN6sCWio+LzNfLyVATvVNzY8pj+X2ruEBLnUGpsn6K86V/AxNzQj4TfyqsEdbdWWy6TO5/H6UhSELWJXnh91vUgh0e6up8iYz2lh3dfYlzNv8kyCHAJPwL89OzuXPdD7Vm5hij8Qt99J/TpN5Pt69/ykKcsJasDhCuVPwZbTc9s0O0ylTXXQxRDTLC9a/+SalxMYD1JCALW2GaO3CN8y/Tz9/a9P10103rxehLo/ZbT9Mm7S/mXdSdf84wFp3VPLmBVWoLjdB5yuJI4QqJ8vglNBWAe9OrFTVBbxNMdJrL//m5JaU3+uookehzsjr5n9ucpOE2DaM7SJ/IKLRDL1jdavfBVzocjmmd8z4xstOwPLrnI1F7DS2LVTCyblcJQEwN/5EsN39PJANaLrmQbJYI5N+LWQTNVCeQT4b7pbqiinQlGFlZCphX7S72lDcTNWangh/PZQFuezkU0gfXurk9vBivS87nq+zDiWb12XfwgL0SChwwJqxruUxXE7HABlck394Rqj69dd3GiM8wnP3z5mTr5OygLGgQldztGzfXzwxVUhAhPAzyivQYxTY7VvDbvPrrQusso/w/YOtBjM0BS6Ui+yjl3nmsfMS+wwmNM8noH/6/LFtCysfH3/Uf3RpD5KKZTn/HonilWUX6SGoSH46S6BjSSIgzbS6usD1RpY3jsch1m6dQnjcVMYFI5vLShdVXzqM7gOfOuKYkaFW5GHxtP4GT/1VXBKQWSxcQgjYhJ6xykOABmRdL6YDrG3GZMhea+tIWP39HLEhgN/bYbc2uF8mLMY26yBt4Xh02z53vYF/DLnf7HJf/gm8QyH/J8apYphXw4ZJeTgJxZpMFtfiHl+B15Bbc3vW1c/Xj98d6WJ1DMofh20SHcC0GYyLHtsNQEccvl96m6UNSDiAnkbPUmGtDDfAVCn1jHK406MrwOrzo1AAAAOAUAAJb5FA2u8GSOgH7+4kVnWT3tH1rl4pZBEOCKPGqPET8lTAH7G8N7FdyjiwP5MWY2wzxTcpyHWn8tHSrzP/jv5vs16nCYf08b+fMRp7IioNCehUDjPuEDDgA/qcP/M1GaBLkeX1kb2Xt0zAVzT/4Qu3iIOH5qHrucb+ad/O+Xd1cnc36FgGX62ZGs2JMt4b9ae1n2rYxq1URqxd3fD3JwhkHk827fJkiZ30IvvJ/4GzLJbipfHYZV9aigZpyD/udvuaUpt+l+9C06i384+SKnxrBAPEt20LdZw3jNGXPZTqvNET/uIjeV/XJIJXjcNOQDVquz6VZpk+QSg9K7lcevwxCYTAZIUM3j84FaqydA5ddvKnr/l/pVepksPlDtcENdD5pEy8jb7FExK5CUPKrbaX1wA4/5a1/Rlg13s0XjX+s8zfBePMEvVnpd5YgzkRY1kcrHI87bxwRG4ALEoBWiziVRrbcrmAET3q212XgpFhwOIG5ORpdI40DqH8w/dzZBq1qchfHPshlN+jXLqNQ7GR8RzKXnMn7kZY/sWYHvQ7g72CAj9gyozbYf+93fQt1C4Klfs4GCXKJ8rBXJlHsRVjkLB5la/2XX7stgqWMHT4IQwMugJJZcsg1oJJx6M7RkcQ2u35oQ55QkBtkwwHccd5NFrtVi5fpkoS81OvU57t5mOsZsmiYESE668QFLo2dpCkN9YGZlOKpqds9Qkq5oat3VF5iofCYuRs1AddjFzIebsqwHT+fwdG2hJTmLS6eBPUN0vpCCW1bJzTh1jF5Wrj5jNeEALKe1VxrTnq6Axar3IYXKqH+UoglTUZfaJsqzBLHWqiYwO5mGMUa5h8H+40OT/BxlyCoBrxElo6K2m+eXjcd4tQ6aptsN85vMg4IsnLK8dlChDzeb2JwQkPt2wmXNgEp8yTmuRTQC3AjEZE6xRjZdV/iCUKlosKjX6AA3/RiTy8iTN6/H1QvtLl0O0rYb8TF4+ozWWifb343i2Vw3Wy358iqt4G58FdiPQ5MpnOqO1LXq3qCKHXI6uoETs/eXTZvcGqf5H0JezuwLGM6mxfcx+yb/fqW5EkC9mECg4tFcSZKtZCvSgGwMpUbB/pzt2vypnUkKkzZe0SMQGg18h+dDMO8HFcN42S85JINHm/o20dc4+y1XhzeVhcUZXjLNgHIXHySo6yhIlLqVreHqINjSiNgnScEk9hjMwb4yw1f4O36de4OUtlyTCFiPDNE/OSCa8x9TpB/v3KXxu8zXLpy2LLK4is+kzLX4hxdM0SYJwLapsIzkVB0gODG2a1WPxwfDQCNBGudYkXO0D76lW1p9mYp6poalraNu5SA6Dc5XIXhc3ZWLaIw3TDVTNkXokW48166ywhA6QHB30zr/ZtOSjgxObIai9gUYzPOI/RS73XP9lezNhAo0BL+B0/+4MuHp5nZf1yxcYT+aUjJsyQv9ag9lowWwJAUg7zJw97gmySbZ00VhiJhEmJo9monorPy+UbuhBxe8XiR8R6196sq+jfA99oRjC/L802DJYLPEZMTMoCqzFLQIV3mlzzgAPz5hTha8wlPIh7iJiUh1B1Q5Kr3GNJwxuuhZNJYe43udMt1NoYCJ6eH0Ov7Cse0zkPTZ9RsPbF8RkXPD9H2cTDenLk2s2tC9YLTVpHOU/rVMQjJn9LyiEEhFe7qE6fWKPCJR6WJ2gkLaLxNr02LxcOU3CSRJ0acKveBLwkwpPcTXS9aRLDU7p8f8z/eMm2kydT8OIc2rXP5txFjku9spKWd0S4l+Mr82AAAAIAUAAGAv9RVWPwTAObnXNfgBcEOGpa71vYi5afFwNpEoNd20PrWh1+yTc4EeTGDBxQquVOaBtNWzkve0CHkW2c4bbnnpBW2MTYx9Yzno5Ba4hR1x9Mke3iIP2yYkMFWo4A0k4KK/tRLSTT8iKNx7g/WS7Tscf6+8MQ/v4sfF/K7q+ZqHhuUtiU04ZKoy0PIUWmk6yEwP77SJdqiKfUdHD/C0k970J/9hVoF5wxdqyz3K1lDJ0h/8+DaeQEftJ/uQVHgfd0qjMHBgkQ4U15zhgobab5AF+fUF0cWICGo3iZSOG8AtH/0NgAqRNiQCsXRhOsRI4i8CziVcXJLSqMkfVfz8M/Ao8hNDZcJNpjpHgZtD/51sFm+jiwSY93DgdO/7PHDJRg3nnVYmuhhOA9F16I9M8gQZAfQAAqZOFbiY5e8j/dwWclbDGwttOjGcMmzONQyJfF+alsm/WrDutYPUpAWilM/da1Iu29C/ufUAhTwyqKcfIijNZWONEMBWVNxzzXVeOCj23e0KFdJQt+WiVj8+kk38Gczjc2QeHnrgKRNwSImnpUK5TYiInRQdQ5jZWHMaU9Bqkcy5akbfHdGVBluwtfYHWWaNJ0RhIeYDVgIP7wD3PdXRMLGTINPFLK4OCE5ODISnfLjj+UYTv60+Yt2g6g+R0rFLFojZjw7WlBaVuf+DzPmw4WCRdO9+5e/zKOQHBUYWfjbVUC5ndbXDoAQnPbP8lKZBamQMb2lio9ZnO282/IP8gDL494jA14jIUCTEymMx1KAy4uU7Pje/Kyyl9c0NC7NrhRp65oMRQHLYP7y+wNFlDVkiarrsd/4hlMA9B8vUO44wFWPM00FzEn0PEKq/r8eABX+0SJq1YV64/lKAxDFnTNtwA2LhE2W2BokWqs2v3zr+bxZ28kg9N90ZQgo3eJDrscRkJ8/hOBc+mNoRK9X+ejTgMlsYz+5Lf06Hsp5zDlTMEmafVs1/2kSstSoAeX5+rikibl0mWBnTEFtDMo+ad0DGidQ/+yNiYACHZulAbwHGXHjWSoI+7ZJYZbZn/2BTE9wIdkbSXqMmNZBUtKjvNe7EPqluj904IvbA2I5TLB9BsdeL60J4cuDBLfrCG9R0U7pXXtUThT/NNoiKUbMuzdF/yN0qwKo8g+LWcAExxwBsu8LwVvtdGfEsVyQxaLUQeYgHhqpQnGktSgyfrOkrR0O5GHxkqVv5pbYiy/yYzx1IOc4Ql2JMZLWIU+ewTjT5LFTN39rGCJ7Ny4YvcM/mwSqRmBO4GtfAx5MSRafkvX4mwTzauUWUcqY8rXYBuQQ5KEgtAapfZO2PlKO+odlEwJzTnEMgemoB4Vpz+loa84W8iUQ5TzrII85umBiiqHxvA//T/lXbQlRgZ0CizUquYGkCQShKLVQx/fd5Td+kKLg5TDXkllLKDjUrXbuMS0pBZa722+sIENTJ5FU1LdZI0NH9Hbg4Q4D2iQJXhRKBpPjtr0nsn4ADZDFjU4MFiaJB/ay+6LVTG9kTA3CWlVcFrpW3sDmMUyDtHZ57G3fuugYVDbKm0meY8KVDyADJSvFB0YbeZf9e+GNFLza8yM0UwBnVbf2FHPlbKzheMIhqwxPiuLmokvOC83pHKUX1wSaZIy6xhy6DqoBEU4IBirOawlHJpJCDgkBdz6y7Qttpwk2zw8zQqjRD2AcIy1WPAWeSZlwvZGoRa5F/J2UzE5aXOwY4j+prKQkYxvW5db4RRez1qAAlGkhWpp+k8QY3AAAAKAUAAOEDEFM5VJVIF/hxw6/lYWy5xOwEuDV2UxiqKc8j7GsxsCzLKyHMqfW19w0f8oeDulg1m8uOVnQ8pDgBFQG/SLu3P6GEgebH/5FsUSkBT5+bEzr8NfvgxJUSgWVs/N+XjYuyhdMnHRakL2QHsTjzVS/Yonyofn9LCysx2uIjxBs2HVIVu1MbPLojXcmVgPQp27Zdv5Lyiij4C0VXzyjeZD/Qkg9jNilhlsH8P87PUEJ9dAn9q1ooJFJBOqpSsUmvDggV75IIrhiOgJ1yZsvd9or3+Qms7r8BmTavPSfZwN1aaDNy5ekQDa0r9UnTH4IwgihFI+n3FcBdPqJE6rfArtpwQlyGd6shkR0HA6XGstbWW98on9qJSlfh/Yl+ACBNSwE+ADJ7SxqwgeSRY6pXvVWCey5AsvU1UHOmARgEG9rfZajpcv8CCYxWNShHmVjgKXahUq8UyRGhFRjO7B7j/9tIdjeTQE4dhTnnHAuvc9iQwO9tpPC4qX9LOpMeJ+QwDQTw9vW1vj++86gd01MFGia3AhsspiZAQMiy1nz/iQfiPXm+YAVh52kbrhQH8gJKyAatl+J0EjWtsoZsZvwuOE/bYwF5I1QVeApGObUMiMrOGbTn6QMX7OyOPGd/pKoh7DCLx5QlzbXX1V0dTEhbc2RNvA+aivsJ2fcM6YNhDgu+1nxPZDaPqLe4DiOr8Cz5Y5vXStbAyD2T+MWJX1b2wgj9wUV6EZs6hx4jN1zN5zVE6hjO7zsrBWB87Oah6ss6fFLmhe0CX6arD2QcES7I1/1w8a354D8usb+WCOGj0kgjNCfINQ2papQYzBUF4htcR22SLb/Veebc39lqMHONecSv5UfRwitAfjUnW4rx1+GAhDgzuR7Io7FuKFuSAyd8XvWgtVb73DsagbVFWBnxecGXL1kYZmeDAgI82Rz7/gJZMWlORN+QQs9PeCe7j7yvEa5t8ywVp+7aAmHtw8WA3PLtM7EOfSm/KfIA9vionSKjPFuNT20+TSvOwi4xLytuZ2j2sEWyJLk7xi0WTRq9hXKFnrM1lVxsrR396OWkq+KKFdX2dbBJTJZ5YA+EQkqpRDnFEE+J03VJUk9ez9Ozvin8oqPKSG41bBdyg9MjpFOthblsdoqeMcVrXKd8W1I4lTa0zmWYTpBlWy/y0f0YxciE9HQPkaAx0g+v9QJhNjWhkLP2QWeFgqlLhfSLzTlSrPIEgYlK/cqvXzVQsaNj6cXMvIRbCZm199bp+eLaMUR6gbay2+fI0UGDuHZ7CxbQeKWf1msmXFtlaxFVyHPm+9QJcd08Gz6vmjHR1rVbm3XXaAzmro6cObutMnXp/lAVJmFBwx/we1JLpv6fXmP7SuzRs6s5GEaFJDVZfKmzRQCYXO0K5/r81aO0dxzIws4w4CGyMk1NhHIWF4/F6liCW6k7W8YtnGh5LbEeT5CWNINuCcrw9mXun25Tht5ZALCvTYaSO31TPYTzOK1H0ckUT/yDIe3oyw3qZeUUn2xSuXBxF3APTPU83SZCYeYTJHcAdsBHW64BbBQY9NlkAqXjtePbclHLBIiymmljoPts5YuklUOWHzIvp0tx8cDhhQxIyiupAkd3v2rO1jzFlqpjux9UEfEeskdlBSxR4+PyokFbKGx7FTKtuqAu5eM8TmUSPDQrjSFr7D41M7LMaHoD79cwti43Rzovp/jjjNuTzzyLDEtFNxE9W8tF8tTUTvLIyVaMAlKXZIJsb3w9C7T39tCPfVXln2RC+DgAAAAoBQAAk8LbRsJjNEJtnJJJNc/5yh/E2YmgDSKOkuxeDnqoJICGNMqPp1WuKWqXLh+5OolE0dK4NOkOrH8btSiDRNgm2QtDW9lYUtK4Z46g2us9Y0HV6Pum0K/XSqMyFzUD4CIVxN1L5UASJ+y08BG5n4oaWk40IdhXVdyUybfKYFhSTA8DFk6bVJ6xH5CnmKUIsHh45hi/sv1rNNcwcBlJvvsTnxkvjLkiEIefv00UYQFb3FcQwV9Tgvfd7IordwfHR/izJ8YZuiPOayKULFtF5WSfnAgcUl25tiuMvgxZs8Swt/Q5YqEwXRHBVmb1nz1B88R+2KevNZWWY87436VEoCBfT/UD1iHN2H5V7IynydTvXyl64gq0Q0nL5UDw9yfkr1d139kbSQsUm3Oosb4fNiHHv0mcN5BHdIv3tMYg6ptfQG27zs7JJkzQC6ibAXgBtpIY5LF8y6PXtji9wI5rSQoc5dVS7ltSZH2cMuxj3Kih4U1fCIzJQIfkqfA3ezYFDEhHZKvPn0phwr6SusVEDh+ifpq1YpDgGIrsVaHxvIn/oW8oV9Xg/JO071lK1YPJbMVOSBaCpXiGF8HdzyJC7G3fiGHj7Okavey8IjmLiMv0Z21xpNMOWj5+R51O1hwwBRgarRO45w+rxXs3E/XEjmQZSDn7KyQiadeL41vs2CAJXusQncEeYirokqshQtTSomkyEHZUkAkTISf2wojY2UDkT/ZwF1z4x8ZTKid3zxq+QImhlGb27XCrX+WCgaXUw8UcaBGS2UfC9DyUEb6SPMjHvgKBOuarMBHJ3Cyc+TurKHawKKwqlh8dw6EVPMmc4S7Vc5qmtvnd2vOeiwlshQLg928JSJmsUX6Xp7Ji8BRuEh0nmbbp3U062EteY/Ik+O6mgxEfLKKI3+72UjhejR39CkeXLVQY9uO2HcTz0S318mnxM/QL2hKjjjba+R4ULiAelgylKpYUjNB786AjQaVKm/QuqQmXEHd3fSME5fGmpFYOVFTThU90eFMEa3pORiwfGk+TjwCXOwRfWp1PcFl/00wfd4wJW6j134f04/LKbxUpj2rl71iOm3IXS8SZ8a80VXbuZpHK26xVWWpQwa4XPbp4zfe0uz2UeVWy20ISeggGjN7BKKGIlFODQKHABLMQk2FG+9Vk8Q5cnOKJ87qBEO7hDLzbrq7/WamQl1q1pqf4OB+VkT77f408Kdo1h0xxiAJ1N/8eMnrb5zNnXUKMNL0SnCBs9erHmwUzUxrYzq+uYZ8FrmI0bJYUfQfNLm4ETnxerXq7MRkMOdQbBMxvMzg7xNdMDaerSfoW38A+JQf3wM0OB95svaHsqpmvXwXqdlKIEzqswdAcVgyqIpl+GtgoUle2JnMt/9qNSfY0LoNau2AcD3Duf4kB5XQhf+X9bD//kzofCLdVC6MsviodniPOGamUIVS8H97uU6rRoxtb7N43QK5sywRaSfJUS0Hs3EBaWe//sRuKfHqSgGPtDHwggzopkCQ9Dd7WRGpKY32YQgaHL70uC2BCm4tnLhMW+QluwqL7p7zUTSKMRBJ7QaPhz40ZnF2AwR8Fg1/KeK3g15YbsTTkpnlhZv/ylXLgEBzIVJzI73bKARYo9zgsm65mM/OCAHKIw420mHvb9y2YW2piU95SHFOzhrqcCOiVgPab8aZJc+rgSCOTMEZuIeGMsJFezUGMo4M7SSj6s65fYklRR7obgmx1HL9C0RFkiR3qqS12Cm+Huscu7CLn5VwCFjZS6QtkAAAAAA==');
