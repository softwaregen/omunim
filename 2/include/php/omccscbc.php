<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('EEFA32DF8D68410AAAQAAAAWAAAABIgAAACABAAAAAAAAAD/hBGx++ivCwG+aENHC1rf0TtMPJ1onkyTnRlJ2ahww7P1zfInTtH0rIMTzjqYJvq2KnUXZM97vVrqHLWD2Rl3OOXMKntyBStwXJFqlBVwX+05LTkX1rCAbKq95rOydyAi1Zb/TBm1ScDDHSWY9EK1jLg9kkAJcXGN/CgLMFOAuRQY7axNH63fszQAAAAgFgAAlUO+PszVe6fY5mq/K4s/yEKbOJ4KhBRhNVs6AtfCIILM1B+uQ6WFs2OoK6TmdrxBgwspHOKpI6/g22kTRlWMtyGGwxfPu2lC+bscqCtjSUxDdFdPx9UzX7LB29M1lALGAPkJj0VHFscF0yQWnIVtmiR/zO77ZDTY3pYuz4GUh+u1Hz5ljQyBLnnWltjhTQGsEHMfdvgvo9og15Q/Q0I1pk63asLjxItkAwZiXzMqX8owuTxtJpWnlq3vay5Br0eWFMQn3J9AzfLKyjo4UOmKAyzBG6Mm1QCqVUxz7arsJtfgSuPKUHRFgqY3ri+CKA1zaOsTgzgCmat/ZjzguprN4EARBijMiUzp+taAYhiyP7ge2pP5svPlU6hGYv4V2z1D3Hn7PSfs2r53dR8m3dE2h+KQp4WM2a6Ggx7aIV4tZC8qcODQfGEFRQUYMWjp6GvA84DsONTv6x/Dosj3fvUwr+yKJQM48ixyR2dlU7zb+XxgUhWEd5Uw03djUTM+EUSf8p6Rt/quNCYK80MRzFXteNl8YBjbQcHmthYpfTNFEoMKHjJhjZpdGXEZ46hyLiwwIFQghLHOgirXBq9itGXU33d9pYec0PcUjF/FSREi0d8KUiIjQtzUB8arpV98MOMyhyOh2SYn2YzED+ecMwptSBWWjbJCl482wj4PHi45rBXVQcLxQLxVOfc8FhIbOvbaLJ4soAurEi9ajoAhMB+TIohIKSKA4BOFj4c3yZRsf+sqcd9EHKhzj0h2WEXfbs42nFMTGbxTpxs2cb9ueZZx6zcpJ+gq87F9gIqGoLmmwsIEd3GqU7Wz1Wjgt02H6lIyfUR3M0rDAAC7C+FYNSIG3/ACgz5cUbSEotwkHG4LagewHEjW8y2CQQtTE0pwT4tm/l4hgmOFYpLArtOfdqsivRt37sGENA5ZT+Nz4nwZwClALS7mnkEevC0sKFJw9QGjTx8RX4m6MHJU7z6qirPDZAlSQdZEVigJM8V6vrSstyJL4K47FnhbcKcPVQj5e2QM+Y5bx9D9I/t0Gbx4N3T16rowfyNuG2TQ/yHZql/BjtrJaliH4Xt4Wkem2JEtT2fyxWDJyUsw8txvOEPSPtRB3oV2FvCFngpDMg3u8Kul0xOf1vnZIRONX+Td9ARCM1RxYzI73AyW2N52BSnaB/7KTGpNWxefFPdqJDZlvi8GGmB5baIufoZaHYcUqCxADGXMgVOofTOVi2lOdYA4/fy1zbzYN2wzak1kYilaYiLrnlId/ZcptDaoiYMNKFZZBAN0/rh7fh7MBj6pjxhTb5BuApsc/s5hN+WyTRhUD79cVuL4fHq3Br780W/T6W8GKUbqZqPZKvBB+D5mvcZ4HhcU2O32QN3yQ2i2GbDy+rSy1NW32f4BvzQx6zyHrevW35zgEvEC7kopw5tvE+M5KJRV7O9o7y3/iWQK5e/w69wlccItVezUvUtf1Giky8Pr0+8TaNGx7/I8uWMhdbNXpn+UitKqyyLfhUud/S1892TN7fEP6tSIn6/me9qDoAC6g7Vbu/+CXGUNR184Z0GENeveSdQG9jC8Je9hAo6J3vml3T01iG9sYB1UY8nBEbxArqmbbxdOsZ0j0Jfrx+TKnVsGDKgTvOmI6AbLrb2mp6qe3530luAwSgVUDsV8DlVO3fNXKuYX2vOsGzHnUrWJiWP0FYfraIxBmh5U+2GUocKa80zVYUDUWaSof8rNHeLdboKiPj/Qb8xcDT9fUYY+95vLCjuDR5cNYecbYAX7cAa17q3UNPrYFuFKuGeaG9cW4j21ARmdlFsn3FfQ/IIr63v2dndgmw/5g34g5oOMsOal9S9Km4bo98x064APqNiFZdOZead+bxIE3KvbobKLiLMhb/zcF89CVu49sfiPZ0cosclRJmLj6E7JlRZctpi+KeYCjZUrw6m7ENuzZ0bYCYwmFZl13I4/3aX/Vs+M9GWcvK/WRr6Lrx6faejV+6kFHZfbrr2CDuDFKP87rZnGqAQs/Z0Tjn98rudkFFVAmbhmjM2AWTvEhw4vzjk3wGipHDDvZDPIMDMtDoQVv3sunT0H80aVdr5/FcNVfLbpzobtIlGCS8PEb3vo2UIOcD+kT7bT/TGq5DKeVIxGY2l6XZuNe8TEoJ7WO636Y28bxeb7EtlO1X1bi/ZzV6/6a58GnyBAIy/lXaPXCMtkOBzkt8Rf5B8FBoHL1jHYLU+sTY/dtQG4+tzq6D1qUdH1t5CsHQvydcnZ0WMX2tWcF3gPhylFHRiw5i7LhtVG6Y5Ya5OicbcL/4E3B/ohEmimLyH1AjW6LxMmCM97DMnJScvkgIKHwY/u/PU7Q/VugERteK+t+W7WKdK6xgw7O1p8ub7Evn5VxkyjniMTIhyJZu+h+Smvhe3QNkmK3ouCsX/HfDCxNrO2ZNI5c7yDuceOf/Zd1budxEgLKD0gUmtoHXVWrzprjZ3t7VSof0AeJQ/VxgeiB1SWYCWOqzh6i9ZnBysAgHGXAbszwC0ciC8yNet5UfRJ9FMIvVO1e8Ktty2iEqYo5UNq1UshAoChC+PFc2EEBwop6Ab890ZZb5Gbgvbw2wHhg4aBHwzVvwufsEfKn8MHyY0zUz5rjBmQQeF7nI2WK6AejtUy20vM11wltbWXvknmN07iUzZQnJ7LUXqAyR63T+6eFDgnuIWI1V6i69hDKkx6ZNEq3R2cuwvI0XVbW9rVqz3rPbuw+x1h7vf+n3jEWG5LtamwgDW6rJXQ0vjqKXWuPlGvlYH+5ZhYN/NRo70yIZpMK7MSIZC4NjwTyHttfh5InwYBC+uSRV0oel2I4ZHJs/UaxRqSQYjVktYMSIa01jYK2zaSEcz/hlegnVindaSa7AOb3UpldYTE/5JXxJi/1v9FfTzDAE0pKW+Pta04nzzMVAKPt230b97z72vN/luMdwRip1xIGOZxPgwE0VxfXFTopFxOgYJDezmp6OMGnaj/p6vWXSu748yXpvswF/06S6NHMRPtBvMbpOCI6MT61gHb5lCNiLbKDB6l2i0OBua/uCXeFZ8n/X0PY5clBwcxuFAvC+7XvHnOMJ5T2k9fSSqQCx2SCEw+GSwdbZXg2gj+wQis9wKuzbllLghGh9m80/E18FVpu3fD+Okq7ZVwIg47oeG1HLETEivQH7XVrB7PLSNZwNNFvWCCVDaUq+K/MviTiUqhsjpgv41xuRdwd97jMK/vus+uMZKO+VsaPe/mfKGQHuGh62KB04etdVvhhIdy/ymDkloBrzYwWDxmVdDU0WFL+tvVKrt+RjnfAUmspC5NBs7OOrqdg3o4tl664HLZh574NCOkmjGlEY7Y0x1laf3BHBs8dAwz94r2xWYZBs6MCKeds13IfrmKfjmgWmI3GzVKCqAIi6l4Y5m07SkAt4+eN9o0vq+OhEtlyRgsL4adjk1WVOL55f7dTo5wHQiDDTvWoCE6LYgFOvObA6S7e5+rHQ2mDOldaUNtNUUo8hEZeUouboI5FWbitPmyR44KJS8tOJoQci4pTpO15++Rz16+xw7yEuNw+C3HiGQn9aevJqcVkI+HKATMKaBJRmeT/WXSwxeIIFPTLCVe5vfRN62Ci9/P6IZQsdncNJRKvcyFQbqoniymj5LwR3vS33vP9o3OtuUH74SzpBBvOnW6wvG9n/eaGi7faKezJti39d4Ui5+KLKd0hlKcDSzGRplsAy/ho9QFwP8E1yc0ovt2hdN90DNZiRSTxADJTGbbbDK4TqqArvod4ggmJkKLYAYJXbopl2V1/0FvX9yhZJddkq1D3J6eSoQiZfSZkw9K4rGf3q25rCoF0XVbeI78YKIVFF3/COAVIHsaVKWDdooJZYyudow0+QxJd/3UOjb9A+gHA2B208PJl1A5R5UcOTAjB00foNdJoHWFjD6/2Ghl1LyvWGVJ0aY1FPDkhVqJIxWmq0zQdMAoomJiZZ1c3VGQF/+zY9cYj2SjwVbSYA+nT40mRzpb8kUUWuIMOWVzIQ+MV1pGtycLzJUDneLMObEgcdamFvYVkpdeXlHOWs1I93f1bnnMEDgfqx9lBHK+S6AStXYBqQW/hvv0aUoIE1p1Isf8lGZemEcjJRroXiIieMtAwQHrreds6g7PWOqfew/YLL6e10GXcAcQdN62IH9rgB1BBHgUPA6Lm0RfRZR06voReyUZLPji5dQ2lgCyal9IxRSKP2/qAzux2rUgFm/ejI4lH//c2tdiOm1dF4wfdK5n4Vp4YyWIkhaNmBhRw152STdumcf7aQH4OH+y3AGb+7Y5xQZ+ZFnrXOb0lznf+oUMuJ+diecDXaHw6+L/FSBibHgU+8KhH/96lsuojE+Tjz+IrjQkZvJVN8fzGX9g6WHN5Lu2hGnrR3kZD6Oj6kOHAAtsEjliBrx3U0DTddHBY3e7EzKTAmpAI0LMiyPnBDStikLDd6BH9RsKBiQVNjm3UcvXPtrCAO29p8JswDpHtg8zUO49wl9oZtg72QPmbOULqc3P+UQV9MF/DHBDdrJUsr7qDaiHEv1CQF30cjN4rEixCmyanI2mRYx/d/WGHNA+askTq12OmlSQ5JS7Pd339bfVq+0F6YSbyCAk3MGa/XzOJbDSbUs5yT5h8zLNv+ocK96cZAeq1EQciA0lgyllj1H0v88IuDoINl2jhOcfm807mPywbfnCpXqLhkkXUiRV9IqYMs3KejYBfGPfRBYV1wYaaHVg5A35mSw2rXM2ASc+01pJ4MWupmkfL0ZlIgVunlKXzzodT4/4LymKZiGCwNjagkgklVPUEkfSVCYXe2vkCpSEgPYc65foQTzypiOtdW5mHB1KS0cb0sL03KW98yWOqg2zcRiPU6QiTh+moXh4cnNsV6rHJgV+V6p6xITvH7g890k+P6auBp58oZjsXcOvnk7y4O8xZbajlbhHbr/x6AGGk/ZxCsTdRGZS28FS3lYQ/hJF5y76ESItI1wXSb4fmTi85cEfd/xH2B93kVdflnMawYSIQDJd84N6B19VW3eMKVxh9f66XlSocl/tpQdxQuXlD0DDJMZMrlgnx5VDvvwnLrwWjf1rlqqXKBbYEMZ/2yJBpwknpJKdqUtPUulDaHG19xr55v7lsBR5eg3eoASTf0+WZsvymmHzze+18ID6k3Z45OBYLdvd6tH6rB+KzbhmZ4VLbiOgcbOJjVIHrFsQWnyWeQ8oLTgFUPAz0FC7ymp+c7CERE0vqRJFVnpzNguJriKkGOQMwChGbfkcQVUhH7PRi4NsWWAZqa2V6KV0GTuBczbItwJuYLrhWaUb4z9WOIgro35ET7suSBbtg8JYhijsdEl1l4EGPXR9lTvuY9sz4QObBrk3lf4z1PihFxZNYR9TyzJLaT8xKAH35FyrF3ISvhdIijjXaiyj1cXHf1Ku/dGp2Qjj7ZaroNCSPvNCPFr7L1vPpbVM1r28KEDIfdMm+A38gNEdwgFgCVv1LYdMGq+6J3CGD9KyK+od+xJrkG3BrC++Z4HhwKhkkps5YRUoWAaXM2SqegHmGfruC3pEmgY+KC7u4RJkUgeoj24/bWGQxBdw6GatM4AbmRDNRL3SnDTlQqX9MDBX632OaUE2vwJGz5zzuSozVMuWEWBHCFoeUoJZ56z/trzKcJlqzPWc7Y4BiaLCp08OIzk7nNDjKbApSLyKSWhhyRIs7Bn4qU9jgqS+UpSKwGVYSOn+FrU40YePyQJ/z4vV6QUGgwBZ/ASKwPomHgHUPp4RK2e7Gd08YgkLPPTGx2qLHToXz9yqpyKd0mDHsf2a5oWO/NkmvSWLkLrfFmBGw11SjJMgGxHp2Z1e0LMNGBc7L4nUoSL+sgD29FPAloCNtLGnU0hyEQ7BvGntWZUG2n0qBKU+UOet0VZv2izbveikIb31F3UgB0p89A4Mh9MVUVhDnJ4FGIiWOK+pyX98ND9zPJCf2/IkgC+jCnZ8VVVZKI2iSsYmpYuMRqH7c/zXkFRWsSmu8015gckzHRGZFCcWp+lCz7hC5X8LfeW/Hnqk0HAdof1GQOOWfBlrxXXDCpFkGhelbJVlqz2bWVxLkL0nbYlZAzbfVUo3MiaXGE6gxdt4IC1K5jGLbnYBugwfrXYubEl6HpC4dsPutnA7WdMd2LQ4QCvdHaCFMu/JoodaJPj/aBrjoxLhWMtvcDg4OORLx/Vjmen88ZPlABmQyClUeO4yzKDqTCntQa5/apFUuX22VQkjJoFh6DwK4WFACuGr2gZiyGsFbgljl4vvS7wBlhCh6F+fSTEG+lRWuMPpJpBFOZe/JYb0PZ/78XktlHaEGPQS71HBtEdwgfP0dZbgRCjN+08cAzD3eZsHC0HDbXpbWkpHr/zIKPNGRFRni9v+vwrJj4AsAIK4l4Qr6JoTLLQJH5zp/WBMYvBHCJEgxCIxgBmbhrjy1eFMMKW4BvuVGmOuqP9Zf4dJetZdU1mCogUlW/fjR7IUNemXw2vb82GS/PjIoxnGLFS1yDBksJpkLj0r0NWW20SznoPKYB9/yKF25rAWeymUj4EjVOUQdgi9Oncg1As7xbE/KZIh3JXMp9iuAoejMeys0xzj85qoH92OmWjmyvnL1hnB0pdyOpDHG82YshTLNlr1sQr/25XD4QadsV+w4mdmQ1wlkWSRFYQM2j3j7PmoORmFk09nFvpZjUOFI0HDjeu0mL2isBOHW+AzKR0waleLzkk6yQQ3sj5afH2KCeWIMqH6uuXoIkvuV2avGmCoxquRizALtvGt7s/GMZ5+96o+9l3/BDyYqwV7TZO+RRQipBj6Q3PFQ0g6WxD3qYOlKv1Z9pOZBCy4qmISXP8QCzqO5e839k8aWxUBQdvdwabw+f4UCLzV4OgCHbPYKU8QbNRmR3L5nFVBUuf8Wn5leBoYRbzF99P++odKq/ZPsbCwUMHJuWE+tETLEevx5MRyP1hhNE8pkCUcHuzmhi43T3SZcgCMV5htOKYy5vcdcIknNj8FyWP0R58pJY19slLBhS0YjGWuBEWAauNTPTGIk8MAVH59FIBCH8Z5fhoCgQCWemzjZ9Lo7GqzLQaqowEG2lPXCuSWMd43mQF4qa2UwS/KS/sf6lzTkC8oXqx6HvhAkVdUSnQHz2kmcnTv9ZK9QevY2u8IO5w0ZT2adpavut/v5RQ6S9fna2qzFIeUILm4PC9Ge3ZIy07l3e/jgvztQQCeYIUqI/j4T9d2Er4Wmih93uHYct0j1JgrIUr1EgvGVDY9PZrxZSyWEGoh49IgRo+mEVWTistJ85coBotK+CHOjH2ryMZfXudugbHr/BR2ixmjSbo57OJsELoHgweuEhRAwZoFiU0Lnyy2FQGcyhQpma0dftnXU70Xq7tpFEiTbyxIRGc5tHlKHT0knI3zBg8rZam6ImqxzxzCuin6EJNXo3ZR+YWZLfxneJz1m+ECIOkw0+gQdRrqKMapsfmT8BZel712Nd5H8HSGJzqNz4JUSf7PTz6R1QQDyWpx06UqFfnTOvTELVj59ODeMnNexbQuzrWMSdY82qM3mSsLICM9ndn1iXAlJNvKSG+3uofWhJmDOldg2YNMA9OMcb1KNQAAACgQAAAyP3H9wfDG2XStSeK2pjEFkVKZpQAj2nD1eHba3uuOfwn6JeRWn8tspD4lCfMZHGRHHAu0o2dmremqZw+Ec6dsaB85XP3pyYkOktLkDgqblD5oNExtYbpU7PJ++NDK6ddYhV8NMMZt/KIPssRgfelrx1XBCjOaxlYWH4fiPlDk4mRNKn1X8oY9WBOfjy91Oe6oWJt22rxfBsOAJfJerpx6HQ56/BY2uTM36JTzQi8/3ao+iEw+IB/odAwshol2UYsDri/KfZrENdJ+3m7pueF19gwY+c/VsaSXFYT8AmzQfZD58pQatKKOKsKBZ4LKGsXkWWhne/mmcWIuI5ZDq3Qt72nynctSSR1qvOdewS8c7CM7AXMqRCz4CTsp36I49UqOwugc0szEeQVyysl1i/W6Atj7lhMDG2QbskBlt8XGe0/HzTDqyg6cDjUyqDtKgjUTaUrpB8wgVDcO/NL9elFO5CFIdzmLSRTkJztC4wh7uMeSU8flLdzunD6fFooerLEbSnJFoCOkdjKGZS4Tg+Ujlh49P3WAY/rn3nBA+CXXmjAfwtLoJTXE0/BW7fvrlhlAmd9bTbnRQlPMVEmFcMZCHAf/dX7VpaSi2lfiaTlciXTGORpP2IeRGHkyDanTrNcDUqNlmGvVNBDNUpOXmvdwRtpQz4grBQ3Y221UqPpldpgJRXau2rw3gNpycUBUaHZ9AAC7gc1Tycqhbhhf/6VzG5/ISCePv5DwSSM32mx90XqHtGJ1IGF/N6hJyOkU1wpQzBNH/TFuRMZ4sIRlFHepU6cIqH5c71p39b93R0ll8p/XyGuLuj6ptU0YQw6Wmmagc8SdvDqiLMfcnI7K22QZvOVgQukHOBUbv6X9plv8oaWpuoAeFVdd4gaYepy45yqiKpEY0a+10BfDLzPUu6W8HlLgkHybaIvI63YNYHXug/wzw6KO2l8rdwl7cga7riXUNetP9cpjths78Llbv2OPUYDRlGBFchCaL/ElXjaSqRNk2+c7lzqe+BXKbegbh8ATW24fESShC3BAg9M8YR4feo/7MVBFPSYzKD151F8xoOJM50pgff97Tx92nNUb8etHvd+RjJXRJKnlwZEEtoeAkRdBc4szAYPvT0uPUHjqJphDlSPrbeUBwUOReppcsJNfvJC+CdVnh7femDVpEW40PZMdDUTOnBV9N2VqFpmfna8WAQqiNsLMjI+wuhdpHHJELagoAF5Oc5ugA4FEip6+0XRxtv7grBGhwVnmFX4X8poZXIZFViceTnRQuQq9bAFQ6fmMCpgxT3qeQrA0cNWGA4TKsRgyJI82u1VrYRocF7fvlivqWwUEwn8kVLiIi/SsmdE3Ziflbp/YkO9m+ALl6crvbZQYUNDi3DXuZGlFf2AUPM6QP04HdHM+Qwq3RjJfM8UOj7IZWtegI60uxYiuWacpAU0/BsQfwQlmk81gj1SxkmZVYan4YTPiO+DkTZd7e+maYGdC2c0AA6qm2nplNb1Y4DoSz1kVFM80zNCY8tApyLS5qMNDnA+6TfWlAE3wcqPsX2Ck805jDDs2BR1SOnfYduWctTzajRRYQqkcwZuPWFA8yBAKwDPOSu9w3bjAbYLvZ3yur/BPhmDGylcJzXZ+QfUyLw8JvPojw7AXZnV6YbkHdC1zUZOe31EOS0WfWvuIE9OarOQUYuL+B8qeJIqR8nKhBeYZB8aTzidPJWoeBc0OkYTJXyv5wpZVJlQ912bmruwsOXfpx0EfQRVXJGFSdkMOPgZLu4Uzwre3zwOyDS/Fkb4aJuRYLOvQbMz9KlnyJXCZ1AODJbQb4QOfBV1tmu7h464Z1tXZOczg+VANg/X1oDeL3GF1mLhXzya09ThM8LgV9CJMZN6cij0TiMvcdQJV7pKIW/mkrHhv+L4k5eb/MUa7PxziV6RmUiwjT6R+Mk5YVcLaqS86PIg6WkCmIzKYFqKdrMWVULL0jSrm4qdN98234JkAP+g/sTyUQn591bP9aUTHejdazooxv9h5ZKhVtOSiMcqN5cQoeD1tC6J5QO0KQWVMt7uULd9HPWiwCd9oQ8Px2KcZI8cTSbP3y83ajKTPgg7lqsBkjS793OFnQoPALiwPbo2+fy9OgIuHizuT6gW6aLL1foGFlyn1C0Dm+tiM5nov2qqxyHTcBxOmKa9zPzyqhrK2mVOAMAnX2c3ObQd0SWmNAc7PyRBiSBMoJ4K+24mYmPuOboJOa89uuai+vJGxbeKhaQZXp+rzWTpAV9jQoYVlE68+fycegeoH45V3JVXwUlkrcSx8Budy/FOrrnDMk02Mq10vysFCNetY/G2QIpG7xll+kgIw0LDkA8A8FERjIyrKe0Xt9HzhU38n8Bvp+VRK40AQZA9511SSWcInyyN4C/FVohXUUoK4C1dsj8dTQsgXJpSEmd+XJZUPXeM+z0gUkLFux7VqMO6GcUnmvpAlEs18ddE2FTswmYniStvGtJoZQ8RMXnu2NjmtyZXYZ60uLrwzwbcBxSC/FXNDHXlUNajECHeySzU/6F7ECjPb2BowhVXnZaUlRaSsPikiJ0a3VvCKSoGYOTzH0JRLRP1lTyQUGy4xz5e92GP1nVhlk7K1TE6cbpelEdlVGXSDbfpIFNtwI/oCPpbVEuogJuY1p0Vh+Ng1v9gfg41BEfNdAXTCzel8plkJlWYcv0XTB2NKEdVsqp/iVI18qg0zxRIXu5tvEyKKlqePhPF68GoeT9E72Iwxu6Fxqci67odiM0UKgcgq9sS2oWZtozHuIRWpNnbcbzYdCf97qycoUzAfwVv3fxL7am8TIPaqSriiyJAeDQcO7AwT1Bsr4v2I7Y9hjTK/PgkpfqIJM9ktep7uS2KkMMteEeCetplrrn0hosSvSHTtK9nxIEjzNKkzY6LIw+ts0FOVh8+PI8VdIOMjW4s6e5ses8bj1XtBtxQ6vnctJ9uXagwGO+00yrZR3EoqybjyMtK9pL1uN57kw44Pk0yHk6uUwp6jAVE1kB+FnUBjjH/TsxuVLqmruVIdpOAKK1ZXCE/oMeWPaL+v74eZPVqrsZRuF/EsIULpgoffEEkyiI3EjjA4V49izhNISVuEukbucn2QW4FxTjKkch5lmTCaYxqFo9ev0SMccGRZUkxWPIcRFL3gHXbBF+yUwgGCTtv7xJHWhK6E8y0SfLqlEJxEXCDRPys2QL4CdI/LW1kZ99Zm+twfCvy2WoF9fuPN9h0a/dgTNKOT2NnUeXoasBbicpZuf2BT0wu+yVPFBV+V3yTS+tw5Z1bC/GbdjpxYwq4o17d7JIiZdbt9Y/WMOnHMg1Sb96Maao8qvhbiE53fhmtOLIFeAmrGXNtEzYb2CIVW40M1Bl+KQEcidHv7sMHCXExGk+O2VDJ15+k52iwkOFi5vu93UFHGWlNc9t299uGHaN97IdAgXfZ8ZrAQiBSdbz2UI962EHHSOp+MxVcnynxzFV9QFFmYG+hq1n4NMGQCfVtUl+MWu1q6nwUqclE1g2z3WacVSYaDFV+ELkOOA5Mq9SC8FKPDgnmHhEtSVO091xXkFaBSiIVZ5FDeOPZhqQb5Sr8fFoNkSYOShZWVrZtEZqfLVXBUXwr9bLPz26Gk51GHhZ3eqrphfAdhbeuIddQ1mbd97l0YEllv1N1YvqBrYeLudD4ZOSS1QC605JszSTUrokhmWn7bjd9P+X87r/hrzJZehdTgLqk3hTlU594t2ePuFsQKopAOrcZWH0LKuaxB0GwZMil5eVLIPSYzCk6lcSSQ6pX3qOu3kXx2JqRaR2VYZm3qF7kaG8d49JpyHQK4YsNi3vAdrRHzQgj7XfKd/bvY6c2E2GrZXm4t6kcTFIvBuQIE2VCNcNfPWQeij0TDnorZ/Bek/3XOzEPnssnlvECcIaRburFLV/2LDWE7fmIhWQ7r07t7RiS3GIOGJQjCvcoq3aV91hozipz5OH8qLS+TL/rGIZJdrzB3hxGOKK1kf1XHdKExMMD+7c3OWGeWEi8f64VdqiFXVpUky4VW2/WzsVmFBrzZmSjNk2SUIYv67SBratFZUxHhRhg2P7TUPveWKCAzFJ5qQzO51znar5gQ+gObRSlr4jDK4l7z4F4hznEqzvwNnHM8XS0geMLPIb1WX9kE4lPrGo8/yG0zFIfYCqeiR7s8ufFfhecVRAkebfXXOpR1o/U1EsCUkHgsuOKTE6QerH39MIF3HoiHYzraRuv0TrWe5DUQFPVHK3lg9iuL3CMN0KqMaqRLy2PDBgyX1xiWCNV+x4wenSJKrfEklKVUf2NUIS/GVFh4NYuZao0niClNc46qi4w+R6wHJC4jPYvV9gdDC0wJvZfIrQNURprh5xDaWjEKb6oRexTrIW0nv4iXamc7F3Uwwh5glsTxidt0fRIBSj276pnr5fYOA9a8sLGlYw73FmWM52wbSxi4/Sm9v2T/Qv6ireaDTD6lsNTgKBBby9W2DQnYiraagwoLslWd8Wh5iMSqzKQpIVrlWTgoKr2fQDrO8gTO8/oI8vsUov0wN/qgtKskoX3LojUpgzXH9cSMebE9Tt4Ta6LxMc2l4BanleC1gzR6l8y2TL3aoP2ibK2dxQx1sr+971J9CXT+UbT0o3Ujz8Uq0mjAru+ZNWPCUXNGXLrCAqPzsNE4ZFAbxh/X6SfeMlB2OzIdEhLfSd1gVfFj8xxReea/opZD/yWiof8SedKWsuFgB+hTZ3q8gLX+n9ndF5Jtmn3BeCXXz6DT1jyl6ikw3M8awPQwFU/lY01gMsjAgS4Su1iOKq1QQTMBQnoHOtsTX0tVeTAJ+yk6GWoHTDi55MTYi6U3NPkBICD90+fT8pBA7dO35LNGFZBj8yzvEZ8vAOxSY/AkNl/DheddMRHCnV5LsaRGm4CWxJlaGobCHxG4d032e4qjo2+BuSwDIQ5aYXuftT0odvkYcImI02zl8cqboV2GK9x0kqCdCgyUwVzM6YVOzAE6NqU1hIHHHtB9O/fc3uUAFi/rJ6cI9OKPxf1BiH57YM/6TsQL8LdYU8VwYKLUOFyLLzwcwKmIjLm4s5Gvh0cVcTvjtYZzfYK9ohiIMkGbuLUoJ6Xn8fPzl7A7chwyjHdxOF4k4f5VEPJb6CGtEfPaNg6zUByChmkszCWtpxxnJmY79Wx2w/vxwHnbJUmY8Rz/KcVB1bCxwlq3QnIlv3Afv7Hm88YWkdEAa6TOl+iPznEAaDbTChjdwR+rsTcm8sd2zZAYAtb5hkzLceUp+HPYOQ5KaREM7Lkkpf2lz0afthfPCcgRv6wj5RzuGKyc/Z+UDwk9f8feyRBxbvrXk1vRoOHqlbZRLY1O5j0F3XAiPiplotiBcVAvgMLJAYHThOIZe/L2lY9kEZSp6a9DC/fgy1aKpIxQSlA3tRDnlYSOabSjkVGmQrGm6HbPPOIWrJLRXvPQ5uGKt5PWvtL+2Nmo4P2haP1OTBikqYPlgvCCKvmI4JszjKTTMQdcKVn2VTj4/HmcqDlN2noFp8Clzqvhzv4wqcbNa5Rju0eAyjYAAACYEAAAalvI18tvWYtNaFD3zpuulgo4ZiwI3Vdm/0BZ9lypEduXLM7vbf0Td735J4RfPT0p0PXdVIDE9q38IOGyhHWUI/o0QIuQezKwhZgrtoI35rFigCz1MCDMFLmT0TZ64wgXgvMlT2c5n0KScD7uX1PJIMWI8QB3DfIESoM9+8J+4dSz5WFlFe+EjKgf+JSqi8HSalaWAV5/XlTMU7FOBrCWA2J8iGurtsLEmtJKQFdOVbYNnPKN9q6glcXGzraBSUhMNzcO+6TsNtDKnF3pYkLC1q1Gnk8/tqa2T0y5rADtyWmqzPJ+zejtyGpVbsEjshjfoOrJO4EEKyb2foksQr7FZdripipcYVPJUJ7gxcOH0+cC/mmEszwX6IkaxkGc2WlXFcyV26op37S5gpEbCwF83k/b6+rM3N2sAQyIJU0i4Nt0MklvBbweC+SETXZuHpWjr+sm/h2z6TAuhIEBnkzBUQKKs4sOwlTvj3LwimZ9p2gVeYXEbS7S8/CN4PppxZ+tAyZgPT1xkoiE43Xu2drAvH2NYvlPu+nvSr7Zdpxz/DC/zYGVtqm5geTotKslOLZNdhGDllbpsGpvmxAFenUXw+k87Y4C6qJQ2LYKLo1NW9ODKVCpD86Y7WJbXUit/fv+MyHPNP1BvDogR8gFwq5tErFspxhzBuJuggjpD9MhZ6d0xWMDpIqigvW+QPmmJHTO932MzDsoN4SUZdPaBqFf1BmXZ4GiOegYDOYKz5got/m3uRBIsMUm22jK0JRtV+P5HXJQwXYs5NNRmOEUQF/gXiDioT008q4LvNfWtGQRW3lz9C+tcupgv7dUqUt8OXp4ii0gNVDpQ2LAWLx+1lA1/EQRltcOLwd9TmHrcA0RFk/wrikv8a7aij7OglcZxr1ypV7wCs0jpz3aXayjVp1w0HlAlt3lWCQ3jQizJpiySakRzSn/poNJWjbzpi6cqNhHY8dn3rYmb8mVAHBZYhkx9JcaognMuK1snLSkPMb5XjKEHT0N3Csackv/VW6yL+rM1eFkujMw2OGiwZRNcn063tbWlJ5BkADZf/ndGb3gDfIboeiOtdky3CYTpawIwLVjlvZq+hqV6CHILyg88RQINDqP1LelB3bPzmV5bRibH7re5s9EWNK23mNJLYa6JEwegyCA+ry75VKroZmSH1oh5xLTv7a9c6MDgYo2gpnqZxE+laAorjyH2m9U8bCiPZhjC6/1TPm4g/btAsNxSUV1gUkTgKUQAZhVogLuMuTTewHe+yKczznyrUph6y5flWG8sAar+dpc2zdz3T5TvmtI7ro+NFOmlTQ3R5xS6AI/kz3Bw2uO51IyiRj0L8g+OXt9FJVPe6CSr5jOCpmDusOF8v7MlfKV/5HouEVaEwXdbF8alfMtA52pRXHksAt0Azte2yuMdHfioyMbzN/+jvydUNJkDdo7GNHIA6zYSDN5/QVK3RLv+Llry9PAhV6YoTjSNjvqC+ATgMFFUfVDOCNOxXvQIzXVbjuTNXETq2hxwgQIkOz/zcaNQthDtEc/Woipgn4o5eOdFI+SGuUecr6OdEgBzs6zgzxYe2WeJvUZkC8bNt1cRr6MTTYmV6HnDCMQJEcQfPaGxOyjeZxMXTVBRNGQ4W903JuWdLRklgxjTNdltv/+8MaHBGd0DyG0LunzYqWDuQHB6kpB/q0921JCdvdImgfy1f2yJOuihdNewKqZnvB50BT1Ez6wHnVJnHyo2QFRoEYSzgEQz4xy6AYkc9pKLA2q5kzM+LwK5zMiG/QcKumSsCH7zcfspbhq2mFC8eTy1u/Wh/dKBY6ZkWpC2yd/bZ9EGpPxEqGdSUSimg/vfoLnf8c+oruchc9yVf5gYdXTtctSFCudUEV3WJAOUbjTlD4T5DFMLChYgrIiiyU0tILsWByOKYqk7FlSOQdH1yE5R9rfscGJwbZ2XI9xrkjCk6m/WVfH6fjajhjgOB/2SjVhwCroK8TQz+0vvMtuPNI26UqfqS9AtmTr4iHon7iHADg050VD6aMt+e8JrzVV7gCzGcpOo0X4Q9WVtyp/fIB1UMehnTR9HoWV9MD1aCVoO/Nb55hzJqoT3pcqavyh2XEhO7BAiJXC8ODRpkpGYT126DAsO/IfeKCQl5U1ZqBS8mQrHq3VYdRTQbQwoPLcRfgFm/I8csqOdAO/8/Xy3OjM+HGZ0ztpH5krWX99ItSHrFqi6gNTtw2K/xvjfZRbZlnS6O+2HCJGartIFkYNc3tVp91JpBxZBJ/f+7s6ZKkF8Ad/olFPhGSsBQ04SL3v0qApOKv4pYH24yvQOjSGFQvpk8QJ6vib6UWoGJTidb96rZRLz3sMnx/m2a0BnNLrV2thqPOgp/jARCfGdrZ+8PTyWk37UkS4xkX4k2xYd+XBFbWLMZtZ+3UyTVXL4LiZPU1QTh2eKh0vVoQ9jQlnUmsreJ1xTi2aYDLgdlwVh5ycXD17ybRCf3+tNBRnS0K/VxZ1VRThaFcmG1Gd8Ug6lDSO1smAqNtQ9H4pezaKbZLEXEeVfvYfSXNnKuD/8TPdw/SZjnQsVS+HTP6uGTZ8vBpwAQ260ztCAMPNvoq8a/ABk3FOYUL7iL8hx/BDfXdfcqiaByIULokyv5lsn/vgcmJgnXDZZuUrGHVl44WLNW0qAyrUOtbb9NcE/lg2ENYqli2qlWlbxErzvDD1WViEwGXITcabX1X5PEByrcvXXfuKMIuiaJtGGd70hLfhTgr2E0k7WRJU+IPVw9FeIkQ6RDHTz9rz1yBBpbVV+vROXyxXJfkduGA6QCk00z4ksoASn0VPTzz4nI33cyk6sTK96kDdm0qtRgSRDcC5FhqBcQ+y7uwCUylDEXqi1b6pdO0gdk+9gRgQm4jlfn30kPwEeuInz5BfJvrHmgzmOc5owiTt32EiCHvPANKr9T/+lopNV2dgytfLOed5ggYUXlyLgTyBrYVV+22aTcNFm2F4SUZiICiQlroqCUpKJG7RcgViRDsbTucjg3d4HUllv+1CCslVzZwwGlW9x9GFfn7F8OWvArKA6fnCGLMrd1T+L+DN4PIgAyuM96UjISyjZlDcV3434S08HUFJykFUkA0vq5DmPF5e16q1cPo6KWgaHSxgRohisvpA5yOVN3lYJOhszwQOsKGnOUbVXLr66b2VTSjQactkz1yhvblKAeecLoKbVVspTMtK6jHAIRxqd3riX8I9V/yzCcAzdTPs5ek9WgQAHkkdY/uN4s2ReA5imPVGDgUCJSYGW16syvGTXE5nOPO3VOB5/NxIRe/46ow915pyUdsaqfb6ylbSdpPJOVQ3qzpBo5S76fTo3jIYec17g+YS1Tciy/4Ht2wbfPCg1Yu2K4TfbuX8+oioocdfEsiM64k2j+uBuvPsZXGyTG6ljglhdhCINxYhgmSeWasI2Nty3GTZ8QG6dhV7nhLVaRB56/T3F6FCRu4sDfHrx6lwn89Tq9lDts6gX4d04Tue6ZobWSe0FjCmBpDcRR30sFnOi+Sy2s0ugRFRrflYzWTxtOEjiWnro6YewaH8O2fQxuktQ+7fpmktWMWnSd1Cehzf/JOVNyiL4Js40OKTe9+dOju2Ox8SUQvysn3xfRbCwX8NyKZqxMOh4XHJ8ONI8ex2iQwM3LR71ZDxkzPy0QBWhxux/tm2ZKQVcQgivUAjIfhISJEIM7AO/0cSbTozR1KzVoTuaqMHLvy4mnOrv1zh5yMCcWF8+slH98tgIBavDLXZMxi579ulLnYY9FFrOWBOMrGaJcInvANJghCJ8cgFSzZLMNaPlhP6/1SH64CjGmmapAMQn4LrqmTzmRFGUHY/4mJpOTzQtPu9K57ysQxWjKicNaQ/7UMOZ2eN8yPBrYfevA595Hzx+ZB0kbM2d7jyhKbxz8iq2px1gGLnOBSbVDYeBhRbeFRjqkv6tUIig/y1tuRKkixdwIdCyNoiS9hjtjthmph3C+pceO+jPm8yZd5vqhVaKQb6cOkCzkB9LEIlXHHv5gYr93vWq1S7I5AiU5Jla5LW/X/N8FAde8wIm5m/SX0ezjHi7XP234Wi+7SN1nLOS5G/mfWTHZhgCmZYNPRVY+W/1pOMT3KuGMgw1/zQHL+f5T0MXYtlX/cvVr99o3EdgMtltTShOFTtD6PzQk8PXpE6aNYCxtJMgiYUTHWNZO6D0H6yivCCkIL2VGIFxcuEKd1+8lhW5Maz+FgUxQ4dyKXruek88Cy3SS7Yc0TFPrpJWL5pLEt87L+/4YEJpH5VyPlAzCpf9CSvI44jjVkPhB2JwvrfGgBROAoMLnG/3imojhzHehkMx2Ptm3ZXhZQ87/lE7CZwHPY0LaeMSgfeTnccVHTNGTnRjp7gsmr0xdCWKwVxULvZgggFFfopSaSSIzZTO6pi1k1j8IFzlpw3PDw5h/qTWWu/MfAb6DcSYdtGrbCZAyXlD8Zyf8/LtmPCzi1q4K9T5JNLQ4eFoIQxBxtsFNuzid1PYi9uFOVy6WYwSwXa8VqGaMPffFNqCW/nRe/UJcVKkXpQ+AgUlflENPfqLqZ0ghmauGe0RCahBkkE4QRBbeM/rgChEDUHl6Soy/qBFDjv/xuAupwV5DE0EgwVqweLmfydXZh+Gv9fgmOxiLlPfJUUALflHeHORtyG5A5wnkREvvWBFMAbLYjlCxUzRDzO/k6/fTJl0HspUHiZgN1hKHfdTIfY6NOM403qDoUTIgAvdyE8IPf+7HA8ZMvMUmSdaqRbrpadGKORHS95Fm3hS8MCKpujNYPkCcoBExtxsltHoZIb5TsBfPUaSLEXbE21yCuLG7JnMMpaPRh890cr6Pdqc4fdDmh3INWn4X1TfhChf1u1Nl+n/8k3R00ezXATbEMJ0sMgSYyMsTon9hIrGam4Kt+n+5i7RAWx5vaqixO6j+n38bhYgc2RC3At9OX1UZHz5hRODHFM+jDgXBxRCj+CN0Wk4Iq5/IewLz9ZzQvSXcT32ti1nVdCD0Q+aKRhs3WkaJOYZ+5anGf5HQ8A1MD49IvqTI4rKTEkWgqDXqdNggcGpFQDZFE7sIk0td/A1io8abVJV/wvRWO1PaFptp192ysXEI1Kt336CEBgrPRu3LYzwEHEkGw+9Y58FBQV/5omeXBjKt+SO3klFrD4njc9uX5ZZUYwprMIPDfmyzft5bfb+yrmj/4rJw8c17Xv5XuM0A72Z5p7egCctVJTZ3lZXt5Hehtkv60teu5ksU6U+mB7hgIS+e67oZBSvSGPWNIqlaFI8gV9ZFoPRz4VKKQ+InNcJ3nYnoiAXXSsuAQqKMxRyyrjQo+/uuD55tYCz37lNViP2I7e6QjSIb7WpfxHaHlDfXADsMzPbihK1MseeAteb+UnRK1BhhGCntBRX9qr8c5RiyWHgAGMul7N3tjJGClRgOahCizCy9Bv0UeAgTLKLjmDlqRLJ7U59ZlxoCcMFbElwcVKZ9aft43KGGcS6m4cnv9SwnLxiETC5aNTeYBOzuvlUTnhNFXEM5pByrfM9F3iFyjIFaVrVc9zrjcztbqD9+jlGo0CBNAzlMY9JPd7xIOqxWeoLkcLcZLoOZGHNDIxjR4CYtJgO/OeUFdC1moS+d7p2beQRLhMERAHaAcdR7oNx8p6iJMIXn9X8wsIqp5H93drtGVbsgV2mmuCEkNDYFm3B/aD/vhkNwAAAKgQAACM5nHVDIHlH0GIa43lsz8hyKvESqfCJmrup/UYpTQjE1VVqKY3qbr3aDLmPCSi8nrNNtyt+1Mgfu5FbHMhwC2HqMg2xnXMqQPGCW1UAebZaIR+mzC49w1YvzE0f+yaz8TuXh2kNJnm+NHLNiesFJQyEstCD/Zgj8pQW+nX5/PSqBGs4J1Eo23Rm5JCPi3K2BbdKvxfVjQbyeNh6moInBdfvUkEsmAW+7sqDidM03WM3HFYtrObtkXjVPkWKNl3e1q+fohhAUCszw5xYfXwCornZDXpxE9pp+BBx6SMjmI0IW9OW7mmbG5rbvsEVPCze/gtu0oCHkiw8bWeBfDDZDN9/wePt3tbENFywg+gZB6bAtOBYFlwM0lz15PkqhAiy+Li1WWBSY+GMhpO+AL0iExIyQlRGEmSyjNzU/ZgHS49YE1TqtcNLbGs2pZVRU1d99P7KCU90xPsO3CwfmXtcn4akGhKmAjxz6OaRJluuUYa4SCUKSZrc362oHgLrG4BnilW+iADhlZUHpIfg4sdDu+/wS23hiMOXbZE5e91JGDQHJbyCJci49/V0yd15F9BGVdLqF92hzeYC4wNwiNbz8cduxUOGBxNbLq8+TYVuqpsnKFPPeq3Nr2LPONkvivMZYpidazbeQR300rwk+eCKo29NwryWBOrhzL6ENeboBYpjXV/rl5LtabMuA1GSdTNM1/QkghkjvIbZYJS2Q5d47hO7JLXYnESCXkUhW8ra8EHe8PrKAIT+25pW/pIjFrXshA5aFZWog4KZCYouqG4TATdq+rla6df4j9sEC5Kr7IIV6b2mJQms6pIRvdz+QBaUOpbrxoV+M6MNDOCS6yfQm3V546d0ea30oJW0Edsn7zq+xJkxsNF5uMj2Z2SuE9NrVuWq7sv8yexLp8pPvkJOR2osgrtbyRmz/UO0WWLi1/8BBxgNakVhuNzGoPzTiSndrWs9hJ/S25k41R9DIBTLIrMRYVkhZKDJBKEqE5vhcKl+qqlc/uyc2a84YhY2UxzZj4XIO7k1hHn2fzVj88Fi/b2DMUd2vE0G5vujax9Tkj2L/V2MemB1oa2YpT1uDFSVcdPwHqz0LD6F/VEMm46/e9AVyLO+fiLjOYN5/+LkxN4//o979CAwRXnwrgmlHntsdqb2VTT9PTv6Zh1YtUwj5x3j2USR7wSS0veP80XGoEh3Jzozr9VjgkXySO7+6miXPtFwHiOMPnR5qRNCJApDZ2WlAI17LHL6GS8iAaKNIvyzDe8fD6MLdachYXcv0pdqFRU6PxVOyl99XG2NPbitj+rHSJZHllHAJWgLmfIJsbakfNhIC/OjP7hTWr2KgffZ7hIn8FufYRj5q/aX7Knx/1AKduVQ2Qk76lBfTUFrNuuCZKKzV+Ecab8wdd1aCrsCauvxpVlCiHVbNyIYvFPyiWPdsPKyZXr6S7tBF7iywV5dQbzIlIkBmn+6AXfRe34NCKJLwxLH8Dh0Yik1gcgYaTRGSb06rS0XVb00E4RW5xLmV3zAeCUfBGeE6i7Y6UyKM7HKhnpYEUtuPsNlTz1H43wijwrGBBRx0aqthW8kWGt6Mm08EJYl5ulWrpSno7+ziKb+28jq5H83tBHCeveB+a55FQ/K8C+h3cSu5eUKSVpd9SlLwcstOh3IQElIeTNvj/N4H1EPllFvgKS3Bu37YVBg0l29eQhls1woFn0wlrTIhHZgvFtTqkTpYzwx9XHJmpqDPIU6ci6vd5Jh5zQQ4CJ0Bqnq9Ptt3jQWIX/oYyLczSmIE5vJFyRtAo6r/gTxo9p8sUcanaWICG5EjSgXwmrWLDJ2ZZQvgs08zQXoXVprAo+MTFBSp2FbUa6Ho7UBbOCzaKKGXRCYV44+zfRuuvmGBYcMQknoj7mkxL8Bp2M1RZKjHyLrWpRF8xa0try0mgW717HFrH404VtXq+H/YtWoLqSUwdH4P7HmCcUzH/kt4WDWHO1deY8EKeDWtD/n+XN5jNoIPRW4B+UDCKKIvYWw88ODxQz92dYkO0JqTPNKMX6u5VsElQ3SKD8zGv6oOXWG3/b3fgPq6GE5yVRO+3c4b2TnjJvvPcnYxHKDhmKv5sIaH8Oeqd2PiA6VoC8LXa2IrjYM/BSxIK0w+BXIJqbvK+37sE5n+f59s2qVt4yFjXe8qYUGHGeo5B8xbrFuSg3Xm8NZ2tK4cK1d1+78vSQYIsG5Rchwt1jEivBTvhB9Kc+31ePhxFXAw5dLzvyDR+EdRDlJdgGZoGZ9Rpp7FVHpUR8nwb0yOPyHPMS4cLwLFqaw6nUhUD+XHGcrYJePmqtlrrGkh+ogMeKbX4WfrSoOsHQo7qUOhauiEjXPwbQafrnJi+9+/qsn5FfTVFqSrNRBcn3uzJlUXR2a/SCxyGiZvfRUtxAZBgWyPMoqGCqWX7+Ajq/BqoRr5BiTfEXA+dhpTBdDqu7Z/oYkf2NUW+A9AaZoFNGYVHvxuCuPptTDg5eyDy9tH3NdK+m/EJ/OFrnfyWwj3seiCndBn2p/tqt/85SejW+fsQACqFJ7DlArZ7s/k2PWaiZAU120ZgrTtFSy5WrfeJAWOrWS2LHs24ppKpYczclLSSiQnTY59dSh0e3ALpMNCplAQ5hNsJVHqKxWG0lDUX7HcI2i1n3v6k3FzpdjNxueockA3aNMJeEkmN616ON4W3gfGlHtSmMNBWALpnj+yX6JY/BiIyssu2RdjJ5CtQYPPNMdiZNs8eXnWiRg/8y5YV64CMjd4dADuIhsCpx0mlfZdtYEmz+2iLkDlC0rZtlebxpm/auie7BQg6mgWncLiObl5X1A2auXqHNF2UZeQjZtZprIMp2w77L2UgvMdZuVoJirxFjWk/hFfCFqeh/vZX/K0r9KTuuSsu6g+4jFVZyOdktBBklf5jrUDRd2FbV9Xm6TPUqEJ35AmmNQJ9UUxlAQVN7w0wBG1htWOtGALunovDb32G8DyoKFj+Qug5XMW7Q1ebx9EcWMjG53xIe2/FOIILhJnlbuVH9dI1cauiaCFgbmQzSmLaQxV4hWOy5NNeGWy3CHXjTyyevkackYZVRuuuQhsH+RCN/Qgs0Q9HvCM9gnAUtUTgwBt+Zm/u6szKRqK+EgLHpj1Y6Xc9Sn3uXVifEx3yDaWRN2TQZz6jUgoIY/AIcU9Vm7x7mbHpSp/jPrWpqHo3YzIgnScPPFrrdq5vS/j99JVNBYgYeCmorBpxm2+S5mF/dJbdYqG2tgVdLIMPCY6KRdELeDVEUZbOOThg3L9fXWH4zPNLw4xMnzL/GIyXdh7T8VOvhS2JE5MOpwceiOkEiM1nNy+a9L3pEMm/vwZiH36RUoF2/YcUryatPdkNMXFpH4mSLLGtL8h3a7Iqo2j8gw+NovGFiwJ0Dr2AFQMD4BFBNL6hTcBEJvcNGlyqKkTDf7g8Cll/ACTWRy630WrEhOlzn148kkNuj2JTKDcYiHjukCBkH/uG1T7CymYmXoHHsH5GcwDiwCwYc8vthrrE8EKJFfyuKt0VwB0vJYntVpYxgStbKVEKdWkvWzZMNSzIZaVnNtbs4D2zlNqiJnYzP+99djfWqOH15ndRD/ekeNogjcSRrRI3l+wygHuFrbntpmmUAp6a0a91R7I+wrTEtUgxUbuOJ/6jqbSPQyK6sOpmT2k6BjHj5Ey56hMI+l0SH9LYquqhpSlbhV9czQiP69T6RLkrEcftuD4a5/KZdL/TejkFd5/NmmxMgg2rw7blEXRCDd8lhpjtK62GkUCHHwgq9ghG10gmCt3PUOEryfLdBKfgMSfDkcFZTrGTkm1DnFYXnBFbWMuqsiQn9DNLurjNSs7fEALK8XXLVz+uR6ngjvn+C8bldiLB33z0+JUhWhdr1R1ATfBOCLjF9Kdq3CGUvMY+T70H0TiiYmDC5IcXtx2DC+5A/E+4QVcgpH5BcCweZYXDLF83pQFNfG/vOxPQjeOsIO2mzbmVdueQ+OjZO7OXVJGBMCWRV3caZ3imRlOWnOg2MWj1WJtRWw06fCYmNR+IR6pTiWaqQ62xUQP9LPXe4I2//jYox5O93pP8DkaRxK+fgRqOldsampejMZYIIgoVEROJ10iQeZ1/XW/hzXJZjwVEZGXFx2pTW1cULCCpF76AVdLe+uyJL653qhF6gjqMsM3rHhBrKLGvvk2BzUWF/c3VxiCyMaeXmjpZCBOFUkO0B7rMruwxjvw2rLzuCjn9gGA6bV2TGRa0yKzRmnXZGheOIDhnW6FHHACAhe81+HhVDY+fnTqJFwB+XBKLDrBb0orADxUtiEU/4D0FFhAN+WMv9auGyC5o7CxvbHkFgQBOH5LWAwqxG6DTxZnkJUjL4T1+eT0Tn33ZOwGUSwlAU5HJSig/pCZTCQmRd8Icsw1xK7kELQRQAG5iKiBsuoN/QzFtEYEJHpVgWPqd/K6A0jHxYpWYgKVd+ktkn3YA8O1MbE6lqVVHjPXZ4mKvU14nCUemvOj275unbMGXMJlKo7Nem8xupVbR6MhB6QqfP33IzfcC1Abfha3QNxcHgfYPO7GV1TBXftL0igqP4Wc22JV1s7VkWEwB8kYolzmMuw4ZzdIIno4ecZAeeh9OBOuNyUu+3P4rpwFG+DmfYjD6PDB3S3ApY9Rf2qysMFgy0/fGG3wH+L8t0q4HJjL2zsSP2egLsO8NJyUFMyLEbKMuIisnne1nh1bKRSRTVwY4PGDURInzoZv2/N8pnsbQbqqjCVJ+aT73aSulEju2Onf08J2z0lHjhvAgmuuDzNmJUrOi7pZ+XKsx2IPPJHB/bJJnr6CAY7LsE/cf/V7hNoEb7PlysC0A/7ROwnC/9S50jjIxoMk3WtuxMEg0STvEd9EJh11wROsfcoY62fawRA1v4WZs4jMjLhzIcYIt0SHYxEEAsytY+43bDwjJjlEUu411gCqbae7dPlC2EpFmMDVhEZVTYAJLLB4zCxnGOjrEYEyBOulV7FMJZ/wyAPHjvinmQld20FKvsrbokuD7jtT5HYmRfaP4FjoUaU+AixP+8lu0gS12pEY78XEW2XfQSG1cqtqKi1eQ4utISPOW6HqTXBmzu7yiCTJGsJ6fnztzjGr1Le4spoS1FmO5cBIHFQFYfC8WXARuLZHRceHmGwG1ZDa224sK3/oL8dr1fyS+4Kbue1E7nKDvCBhL3tbz+4dOpwLtW6Vq/JREHkuyiBJClwLbjRvoR/MY+yH0TYyeweot2gVzv06X+lsXP4JSNG+sV8DocdS0OUyQLbsj6zs+zF8MkgCIN+reGaa0rWRile+d552ItFO/ovlR73Ba0lIuEDJx1u4btIjbKkK+oBpZEBORNcE2P80pTQZ6v5J+bjWlQeGHMO3M0UmizoV3nmMWyQr2GUkDh0THVYivNs05IW0nWDzU5kSGd8zomdrmIl6ZEAwrURVsYtscLG1afwTsXU4DEujaiKtqzIC+FcVgACK4snsWGDMs+mmZjN6vboOeT1xp9dlayT2xYWS/O36q2PcIlRzWI8mZiXM9vYnC8bFZVhzxFZrpvHiZHTIhqIiDTLuYoUTqCoRpoH744/j2W2WyoiGekq8xwydOf32B64yM0+xNpYn35HG//cM4bQZdgAWid3Bt45aMsMyjeNFKHgeP1YgheYImguNHtWRHPs+aTgowM/A+FOtQr0/ctRdiATXPe/WsS1aJo0oe05Qyy0NztOAAAALAQAABqtojhbTMM3nWHc1aFvTDxkmigayhQWR+QvlcSrIaFm09XZQc9yzQpbyoIJKPnqlnc6c68W+ksiQbK20vv/U2vamBdNyubHgJOk+c2oZaDLP3n59lbqIez9f9S2KYfHJnsuJApGnZh0BCal9Id9uQE1mJicgCxd7rObpCGL4JPTbndcyhKi/8TZsw0B1BrI13WyoSh9sDbhDJ9rbZXU9qbyeGG0MtBInl1DcWFhTUURk6FOl1MeQCc28QBtHOv4PUgIiWy4eXRftGaOHxoJlQACHW4r86c5cj18cIxfzqwz1ZJhvwcNz4JBzFjR0QdRwFQN9OSVqncli81o9owuA4b6vx8uPUykhEwGitxWKDR0NAdkvH6EbIQZNu1PikXSu2ptTvfRrU0ks7o+seNjId2svNBW9XQItYzA8ywzoTO3R8YwjVft8C4wzpWxdKOlKblxvLq51cyQub+up/Q+09f7ia56C5G0vrxoKAfcVUIdk1eWFKO1c00dsKZ+IS4opDUCfYprxBJPrYfCK8x32Xf1ZI0giFV7fqjzOValCWCDF0ucngc21e+WkBHt77nrsAt7ITRDawVeKy4CctzyM8VIm+Bl0BRf1hgWM7sNFE3axk24zYn0FjV3UuvpREfgODO3NyOPtuA1oRoQhxm3gNYX5V/SXgHoWYbIy3BDKT9oitXdRGIJkDee9CrJLPuw1ZT/JOfVxCDJUoINNMmHp30Z6yPvT/nE+i2S9yvlI4660Z1eYkU3yXTPwEc/qtjwxYlCeb/JeffO0zdQ3O4SbEMEex4nS+bt6/l8eDoSatKxoC7xQqwCIlc1DP44nSLVBLowxPbq5IMn0aeQqgpkgh43WsYo10oGCvNEElq3ajEPQc0poqwqjS3Q0Q2KOhTEblcWh34/858K4rUWCHp0XA2YdBb0Q10Cyn2bCxb7aymh/ituUIOBxpEijyKS5mV5sk6T0ekWE0PRIijVgnvEKGHCUpTkJuHcJs8g2IG/xPQbLHdmOSGTwVgkMqfMwy7dkera9VRZHpwvHYykc0Z1zt0KleiUMQvINkx5O5UR995vGP7N4IJJIhwYsMUUdeZxVPsOCzoep3u1jxOR6+YzqHgN5zasUld+ipwG4pSO29dgSo11jVXFk16jfyFuehbhR9lzlcFz/UktQvahlBWqvX6LfEWMMwV9PWDtH0Ae9HJT9J+UZKegnrRCWzvRW4FJxIkIXp+IuGJfUpzfeSBMwcD4qrj6brSrNRI5UV5yq3tKi8hgAixLOX7S4fvy3AcaFCLWVuDfTsTJ/68emetV/ZX4maPGH1DDPPmWFLaIQXKyO+4Fxjqr8QsBcgGPc+x/n12pCELoe86NEAS8j/cgKEbfzqKViAj0bUYuRKYXEzjkdKIr84gTbkQxTZULBinWwXdQr2z6vmc5uxSfXw29ZchAZHjEiO9tKobPvsh3dHPou0JhZDnUo/u0KFtlUIPObCbvG/sl8MILB9poE/2Tp+vYZVlbLTKs1OEtEklBKkUkBHJzKX8J5zzdZi1Mx1JWOQqxVfA7x+3TEOn/Hqc7R5FqTvSb3COeZuc518tGcoaFNa3xGYfCr/7XLhZE5hOAtZK0Ow4wv9WbrS9BVg+tjFQLgQ5Hvx3EgqF89CY9hOIOxQrwzx0/zudBF9FP5ssAKIIpniRuXELLqw5YeATD7Ip/kXEHC5gFkS/8KhBufSbgeu+mkJzMmnxDQJuR1nLaO2kIyurEYjmE0Z7DquSg1U3cz2BMsAw/Cx4hCSJ6M3bLf04zfMtHHe1jfacHGfFLGxUCJWA8DsN3M1q4wrSL+JFvzoD7W+E8xbUmQ8VyKQdHZ/fGfIayuLbmBnt7IKKvxGI1Nq6tnoNgyO+aIhqjiyuVsVhp21agiFhw5T0oRK+52su/i5kGtbuMvH56aQupvtmQrAZtDPfKBaSBTg1O3VJ5rGDVMpaJC+XNy5ZdPEbyPrK++6mtVvDasFdFBsLRjn4nYPBCvW9wxCtRAniT3Katc9jen9MlgnUdJJbnrkdbCIweD25Tb1/h7RdbFPo7ls4p7vabEZfwHp58YhwwVxvAextU3lwru8VQbCfcIQvzVKWbTeYxWWlfq4BVgYqjF9JLwpcxToXQtIzRPARuWfgCsa5arE4HeAaxTZ/nJ93+N4W9FVA0VEzMexf7Eh6GeFT8C1nWOf1nw2J+L1Sbi1gwOqd5j+2cxJ88jP1Mo7PA0rBHw46phGTSDrbDsAfZ5KsWafymYUCxioCoq0er+BOy4uaP+t9dRx8I2u+Z8Z6bh6RkDAcIYFNFh6eXiilh45kDxpN0RcQtOEVEkgPYW4ULfSoTX52nF2fTqvWvmNMyiJ4CUUF0vI9DhOT2Sm8RwHfRcBsdvTdq9f1zvL/obiEGQj5TFdOnBB6Urqmw60Ydd3uvpB9apTNMi6ZjBWOnigJiOtLx4AoucR2Hum7CeZqfnxwERfUUtWeNVCYH60VhK4mMa65Pz34Ph8pfrMpRposZLFR6p7576S1vnkITINAWYl74aISw2oCyd1iU452IR266joD0LhaOGDENpi/S7dLz3gYicDINFhVw5t3nfmj6qUeud3bxLHTSU6lSEV5yObpY2kGI8IZRtSYgMSnXvM1XDP1UrY37Fpcn1J3TJRe5R2DRgXGYF+aWDc8u/orcF8tPg3SLXUPmFfDpL/DYpRKhCkhqnGQWJoDCS2BBnj5Bg4Ff1xNMekWYiL12JfxqCgL2nmdK6M3gJHA3LX14anOiEdHs6IwybsyXSrA2tE9z6ekpbRdg7W5xewf6LNshzx+6v6pdt59yWiGyJET2D4lxq4anlRTrHoDSNc6NUYDGko20rUogS3cHwCeQvxGB01dNSVF6bWi4eT4k+tURAj7479AyzmoF3H5QJ3sL/FzlpX70R6xkM46eFBMhP4pBxcWI0jeJQVVOA21XjBh3Xdbj7XqQBoR2iYZRahcNYcDKkKhO6XauSQf8tnsVqmg64qEAInSmoUkjpYQ6Q9zIu5LtNVvfRklgzd65j726ojHEx7fpUxb6YC9/KFk5D7GuSrG+xmK0lo5yS4JMr9E8KvpPkPSaHkVbiRYPqM839ezOAOrQFbfV0m6hBop8m9THQFDOteunLJ35YPH6oclUaKe32j/55D+ANjcfpan4WLCca54TRPn8bnGp0DKbFVivR94DIQda2bsq4d1CSqzEvn6f4Szrk044zu0k4CPPzchEGCxwO1oeCe9NXGCiXBn/xXsOjlazhmqbNe2fwrAkWqyyWfeicBJUi6IevmujOOS3Ab4rBLzWPUIxHsGPBf1CIqSW0SwK1WEiRYF0awIeaTfTk5ndXquvShxrvzehCjhCZSZ3vVpSPMVGkIZTG5cr+A5TQzcZ8cHDOGPh3lC0b+/iCMyoffOfORlErJS6QFLxEskbxMObcotOQjfu+EJ66sXf9d+7M2Rxko2ngXML7vq3sb3mPet8r0EjoTD+n3UfozYAOsmN6doYaUr2ZRiUa82YZEEMX9rMjaBQHsLPYNFP/Xw3sfc3M8y3iVcDnLfeEaCHfKmQsAAI1Us420hqVZhw2wqqCEdOsbP/kO3R/OuFNpsYpmAa5fih5bRXHeW9NJK0P4J/8JwX2DH5pOuddYc/IKT2FXAT+I+bzgZjVh1V7EtLy1CHRrUlSEkmiicle1D3/SYELifsXkjiKPp+oD0FaHLCCiQ4KWF/DZb3X7zWPmLvVML1bMBPPSzSFjFz+z6pXSg2jke28nUD+JZp5KlSI3h3hBn+SIJJzGMi2xr+L+zTXH5HbmLMwl8K5MpiPlw1YVxoWv5RnhU3TaxZmTbpfRp21vLJVJGB6gKi1ljgRtNQWVioDn4aGQyE0SVktfw/NSsvBBEiW3Mq0hhPHvCJlxAUqD/WgOngHbRCXfjaWKTFCwpoO6QbVoNACGxxd4j9S9+iT2/K7Y1f9QyX6TxRh1PkzHEpLfEOsBkdFgCquwkdKYH+aUSqsabDnS/EkPhw32D+Vpu4jQqoAt6Hbt9p2gpNZVOu7Lp+Y0JbbGo6ewD/6ow+gtvSczS4HLym2MQpPWh90RdJrJkfCEPnteyVgfVyNZo10qHm9FA/by7otOjps3mNrEqcvK4Joh3Ab8NJhy9ul3AYmKZOKt2zBUp7vJ4AWJjZofX+cR5BGPMYIO/V2ZNvUpUtwRfO95gokImhuNerR2CdcLfX1ppgvMhLAGl7tZFgYTx6HNFr7iCqwEyZ/dNgRFf64TCHkNeV1PYwJgIM9XfWWiWDR/+OZx0KMI+z3NvLXY3d/WW7/EqluF6zAJfjONVxj2Bx3XNYAtvV4GJ/2IJqljNh/IjnawGxHtXdfrW55rwJGqmsNeah4FUd5pQNxPsqPROCTJmi37AwLBF8Lm2Q72ET5hPsWcAIaFJlBP3Zm5IhNLNaJw5sEp7fSF6ESZb/KQuuYoKkAAiC2EAPx9ep2HIlvLEqk6oyvVV/vi3n+yL+5H96o+e1SxCamyn3hDlO2ADYs77T7Wl9xLxWGO9krM6pRIuOdVZbEGw2o9GRjsF0gT/bKReoni991RGFOgpsqJu/V7xU4EiW+tqeqBk0gOhsAwUS1obpSNHtr1B/WTqs/JEKNXQ1kd8KKlE54l0gZsQ1FMo7HjULTNIj01NiHOfrV/ZDl2ZFWWSWpY+mWEj+KyKNLMzRLnmqALAwoTnQ6fwY6MlDwofqji0H0eDGWw5ZWO8Lhd4N+LCuGYFumWnMTEyYCPe6WUQkG5DQHgb7fGbfcfiLKz2WWWfrjSuvkkGJ9RfNSVXCv5jfxDXSVXqaHuF+2Y9nZIgtGURF/8ocxkuYrWl4a0rJmlrtly1N+ert1LlgObnrutbI3fsj4YXPQl5Z+AKDnkvlHh3awoRxyutoNW3Myszs+zBUon2JRW7f7Bf4kk/rum1TU1Z9yaBwjXVUEHGHFq2Oycm4SN5JB7J2FISs6EZicXTYtXLOgIlYJRw2H2pqHapu30ukZnMavp9VHneoO89mrIRq+EXXgSzO8G3hFTepxDZHb0r8663XVl8BJV6rc6/0HRlqsyMJd2cKsYwwf66monUA/2IWrk1VyLIdGLrfwYnLgfUJw11cja/1o/mTePVnZflPSAm2UwDQah35pukA/lQXWF+1IHv+68jhTwf/j+mD9P5vFfp5zMgnDf0ndSgExVMSZwDBzbi2ZaaExElOHEBZKN4EB25fMKyIQrHzzFeNg6JXMnzJ0WbF8sytADjRVf5IJwkO2kJ65s1ASlI5j2ZpVV+F5dahUDfRUlMAR2bEKzySyDNS9iha+xt5PBkHucGrPvA0ayEQTt5T+Aba6a8fd/Eb356kw5OMZbZJJKoVYhBHqwoX860ixaItfjH74c4yjr1QhjnX/wwY9T87p+6s8aE8qSsUp45CeaO50zwq6yQPPnerqxFGdYumqTs9P8uEvM+sz5+SSpzQL86lnOMWIxrhUnPKYSk73Y0bZTSegKs8JnfX3j/Caq5qjdY3tU/26n8eqN7uFBMys2G9OISEGS0ssi/hYMnZqinmmWM9IPr40hM3/mLHNCvF4UmPPeyyvNpnQeKOn14D5Wk+qMhloSQ75jNBSiLPUWJnA1+YumeIf9NBvXJWhdFJD9zC6J1AiB8V2oNgu+L0vCGsMZ3S7u1di7InIIcDHojAcwx4wLVlJ/0kHjnHuupEoc27xBX/VU6b0QncWgAAAAA');
