<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('EEFA32DF8D68410AAAQAAAAWAAAABIgAAACABAAAAAAAAAD/hBGx++ivCwG+aENHC1rf0TtMPJ1onkyTnRlJ2ahww7P1zfInTtH0rIMTzjqYJvq2KnUXZM97vVrqHLWD2Rl3OOXMKntyBStwXJFqlBVwX+05LTkX1rCAbKq95rOydyAi1Zb/TBm1ScDDHSWY9EK1jLg9kkAJcXGN/CgLMFOAuRQY7axNH63fszQAAACgEAAAFeJDU522ow9U+rbyk5XcETUvNETx4QVHXaGFrjcZyXDO5IkEi60ro/zIs4eyS/Z4ynRISM1DSMb7nxzOmVGvnkddN+h8+VTu0kBB4k63+UfSLMSNbAQOB7yAVbAWOdB1uG4PYLNjd/t6ZDZF4ZYlzidKP6+SP935lVVZfyOHtFugSSYgqSsisY9ns2c++3owL1uMniSr/E0hbsIe0HV8vcaitgMfcjTIS9z1E/9bZXoopo2fyaF11ZpVfQxR4T37d938i7RerfHPLd98rbmX/FQBghUFsTWKG6T98tiZXU/NmUexCaFkfs1MvpQzyV5elqF3bsOv522xZrzRSQ3/NvI8cyvwnpeHbVNQclun1bDBruPkq0JMjn9TiljCaJeWpjKA3kP6JLE1ZIVpKqx6xiV9emu2GGd2MVerXgifpL3I8mQrj837Dy68mBvjMt2OSSbDdq52qWEnc/SNWZlwwcLe285xvWtgX4xhcFQANwXmZu+jdIlAxGuJwtRH5d13e6zZTRqcPP9gBxddWOATmF95CJQeuIP8sUv2CmGab4x+dJTRwJ35MEo50x4VS6PTr6El0qGKxiqIQ9O6oPZ66y9x8TaP4tOWGDQWlZ7doQLWRT73F/qhmWxT3krkhJ9Bru/E7qWHXAF5Dxo2vfajjPSk7+zhmV1bU61QYTm+bBlyOx0vz70YlY/avLv5sLd0MfDcOdLfTSyhcYC63zS5ZomHok0GgiqoSKzy1++eEk2VIPfe5BMY9319R0RuPBzd7kPvRoy1PiuONXjJVU6Je/ObD687lzmEpFkPo17djBZ0JRJgq3ijj+dUb3ZoPgy+yx1COTsDMddk45swISczf2I++qd+R37dqJ3Xs+uGKs+6CXKmIX68TPVzz5sslPWKKqgkd4ej70/nTS/jKLg8Y6QtmbqKvMpwtdwxJrhpGtj42geuOawVWJIsmK8F0PrMnGfeBduPmnpb3q7Cj7t41gcSfS9Xx38+rc/Zbch49demmvX51gauuatmZPXxsrSJ7N5OSEP43wznNSN/D1w1Ohu5QOQJm4blCx1k9wd7g1rVVvBfJJyX3fqs+XGtEgRRTvtBN17uNeEMg3xm7jHQG413PiqT3xt3YOhPs0RJ40XGad0wCRg7zbpfF9xE/2OI28U7l4dgf5q28TluRprGhU71iA/XELGefxjE4pIjq9Iyi7VaMBT/rVgSTO1FxYwFNurySFmGvm4MeyHRvFSKjW9b/MIZ3qVrrKTwC4qYbVC28e7/plGyWUfrEx5hROWPO7ddsMd1kOg442Y+TpF+4MGivVppD3p7MLCwEKfRukRzpVbNVhmeEtUM8ivSqVGjmz8o6N66FhXF3O1sTNq7fogionrNSXx99VjrLHnYOLm7OsiRaUrBJ+wIyeFt1rrK0N2Cd3BG0ETpE/jELdQqkRJXjyNKQoF58QXjf6B381G5gVduV5ZUYoe1CjFwtFJXop04T36gD2TenuLF2SJ2s+hw4sGooH1mQm6RoCzjfUzuhESuQwUcdiAiF/AYdbQ63XoVO94/sbLrkkYmTdKXP+dvIczFrPEzhWeSBEzQ0w7t4r6wUKZrgs89z6WZV1XRQBdbz/xRUMYPe8p2OMFknWOQ8MKR6hVmGEuX+JUjUoVFCgEcVBH1t1SEBpumC82mSd3RmalBFkYNrzMzephoTfK5fnVh+qMck7eP7BS2fsUtsvqjTszR7tpPy3rLnU/Y4PchfzrMkIOtmKorJWNJNQrv154xQmmqZaZdDaZmC757yeQguf3jtiosDBS0+UHIluuS/KNk4KYdIPdqLcSpA6SZSf+fxyzCy1fvVnJ3WmT5s+EhqJRc1S3SDgjRaW46CVqjQbxRscEqu3xMcHwMU/eG8bC6ldCVZpfnLBSNqONoedTS+ZkuJxoH1O9Un8O5sncw6R5mHHcFWYWT+HEJwUrcmUlk5NsSv0sX11UwVR0KPQr17KmaeaE790AchjRGCkH/Su3RC+PYuyQk4+coz6Ci75pZiHYHkZAKieHMxLLtm1MvsC58PhN+gLLS9EjAWn2e1bTqxYzakguIPskdUmlr0PNVI72sRKyDQkliKipEnxezPKHGzktncDPhbeVttktQqewZ/ctCATBU/OcR8dN7fvaf4r5Kl0GEf+uFynzgfqia9FT2lwuSEekPoL47t/8dUCBOglAhhzbDH8eaFNSYWS3hsaOpDMAXxpULAEJ8oLALMsIg6V679SJpCntMkiCkxW+sOCwiRAKNyJlySE84GURQ8/l5k4Ab7p9+RsCVgdPGJiQyecvcuz+wd1OtEsKB+0Pp2R4xq58eqntKZYuwHnJdBH2rnSm7K+hJCXySpvwH7jFvNJRscezrGr/CTWI12HvSS6NkLEt70i12dwaqj7RuFd3bnyYY2TIY4aIQogo3whHr6lSiQronZfXwBigTOvFtN69bJLR1gk8xZHQiMFbw+3XZhibowx2CcHfLL4du4MwdGceo1ZvrID6Oh3eqTSp54NyvFRAtKCuS4JIGEspIiipd4ZLdmZi/rqBVV3m8Jr568NUE9W51yANAUQrFD0JKkSvJlFGYNZJqtpur9ebYJfzf1JO68fN2IMFjiRIGrq3y5KeuVnZBar8BFV7L3ScKVPSQxKwyyD4PEal0EDSbNnLSgNpwmI0b7spMiRfc1CJh0BLXBrPGDUDlfXkp6vtBYDa1jkpygNlC/RN8QCZon+vY7NkTQ7dofrykoq+MmNDjjLQI5tPsoveLVUtYGplPD5vi1a4QaricDEuAU4L947xfNd8nUw8RQ5S6hRkspIwuKQd9Ezry8A6ppY3c2aVUQu5ICPzCI8r/ykQyXsdcV7kVaRBOvAY8lynI5tgNe/19+FlWlfcVlbV3RmZAQb8CSCTwUh/rH7Ho/32lOIHrAguSyP8neNK/u0+ciqgXVQ10s3qgOrbIqoi2fVzFcf6KTf4ZM/VakvLel2+DhHi/hlcmVDqr6kuqLTpp1M3BDpfZF3tOHLTI+vhvobSvZ0yx5DD3WRZGxJ6Rc03CBxR6b40Qn32y5b0kGMvcoHe/uk30aVM3Aww5cM8Cgyis4UepnGbF98N79h5pimJ4LThCGYIPaev1SP6TjA26LMIyvVqcu/J/ZfEtMe/J6zIA0g0J/BIyeSkm/CTK7RPv9TyIoWJhXxIHZ3VQ+ceJS1BKtIqj8r3QG9uB3Mp1bYSuT7gRM6tPZfRl+Hfow8qXrJ6krdj0LaBZF9E+VQ1G2a8n0MFlUrKBFnZKKikHkAXkCw84xVxWw+23MHPrdw8NSQGqHFg1pqpg6wo1bmtXOr0veXlC6nhui3Ygp0MEFS0BPWGI46U23yt6Jv/VFRUql4lHYHdaYBkDLkP1eyF0Q3BWbejc9ipKMhurdC4UUpWFIm7tX0HkV6SVVzoJre6rOyZlZeX+69sNRkP2jzTsIXcwdRAbXTsB16Ny9oRDYftFn18uyOZwg+XzqQ2ImS5QXGWrRnyAHsi+uJqhjmm6RD2gvtbBu9AnGb5io7KoNGEGIPUZl9Tgq2VwJgYx7+Jjj0/aOLeNB5vOtwjs9pEqYeL22H3yyu6snj0Cxj9Zd/DdQPJ5/uhSSQPydnf03S759NasCOgdf9RQPNCyuORyA6xKGoDP2PFGxEMIpGfPUMfDEiMzPbuAiteZFxENSO9ybqe85bY+RjHWjUCvJr4vjOFp44eamhC9MNLBgeE5ekFMo/CNSyMeQVwc/8MnlGCKePAvMtpFoA2gQvW1WCgEqKfrxSGbT2ef7qNNgL+tWNneYF6syrswipm854YdNEmpCI2s+heRIIGgNNbqOv0sEV2t3eBMHiEzEdEaOHZcrZKNbgNBYBfJ3AQQSq+OKqJ5S5vTy+xCM28zllxcvWe6E6NEgQZSkphj6bdV6HEoRNDsjQ8Lo8NyZ9mMKkfDIyGMpDfuom9WQraCpkhFEF0Bvnj61mFA5IfvVlXpKZTBAklNR7JH+t8yUUybTG6ZgW4F2aqlWkEp5AzxXbAcEI2Fi70txAoPDdab+iGlqGS9UP/CTC4yTc15fYIdWrtdri1V8uSD6X3MB6u8+NkG7lSR86LzT6xJYfvGVPjTQaOsj3c3kUDjx63YNk6NyMubcodJyeieunaDyzcQzNCBcxh3aWrnsEk6+Di3psZI6G8B2E72vD8NQVOwUtcjfo+9vcpIXy6+6ny1Hz/xgiuIZ57iFHE8x5xE39nGVV/kYT2jgtIAsQvpMoLEI015N4hXMlpJhC9EXyqGC7YYmlxqT9Ht8V/98MMIdjdVqqxir2glDi5v0zPlVx7VGpK2BT2bazpJ5FHJ8+1bSslrS3c9q/RZHKnL+PaqyMJBnYOXLWRwinhyJfBQHgTWr5FF1MVG1vZsCK9QwRdMvK+7bByOsXDo8nDK3vqEH9Fmx0ENAF6Tnq+oGFCPqPa1AP0VrsFz6BvuvJYFtMi04et39K5+I+hJMzI5Y/0WWvsHDY0iT3c7OAhmUCDU0BGIzIowg/KH8VYjsq1nuYWul4g4GMV3CNN/KJd5FUOBG4sfidnZb+YG+a3wOWnqR01IF1SO5VLgtcZkOoS8JzNzsb0dgJ6vu0iU46RimDxmcMr50ewTHqcIRWIve9RqAKaT/UmRNlUBD7zFZgMkA66QQlQ2I5m/T2f/iufiuJtN7RrmlItffHBRpehHlbuIot+dsHR91xGgeSeCmEMn995S/Rxho/x+SXoKs1Jdl4cr9+f3pvzsdIrDnTJpu+QA0kFtz/nJFs0lgtd2U5ncnCi8hQ8kPtcN9xEa4ru9+H5A33D13uqKLOA5vwdtABt7az6AWoCITeCRAOlUw+uuJnklSn8fXj5CTiYTrvQaZxaihfeDeSXYzpHtI74wWjRosvC3F8gNrUOCNaoRabAJrTVvdhzEY2S+NcDtEiZVuskCrD1k2jECPb1CxzHGVAcyoVclduguzF/fwtgpgBPzg+CaxYQ1rdPUhN4rNfuiKwS0RtFO/lizLFGDj2JJy14oLTQoFNVOwP77x9AcawyaWxo2qlwnJjIEEYJWcOdEPHqkbEY58HuEEX6gmLPKx44G7h1eJJIPEnRAEAYjAdfo46bmC5m3XrkCdY4UNtQ/ViheuCb3bxsnoSasuG6xEsBb4+yVMASEsP//70PUaV5dr/WxsVTu+v6h6th2/kkdC2nnM7Wd6Uus/nUinT3DsMBILcXQM4SSsfwPU6BL1jEQyZS95PNDpckQPjqcpCkJhaNSg1ntuNoroK5rr6znrdUmsQQ6bC1JxQ6eJ19oPaSzID0dtwVcUvynw0prH891E/JJ2IiP2dWDmiS2+IdnoGUlu2/1Bh1rAqUOrFhep51+6tECVFmEH72UmxUJ9w6r/muLcXjTbR9ugj/NF58VEatYiboE8H1u9SZ0K7T8gmpeSDHop9wp1kIjtzewpqpHX6VaPCdFfpLtR3wMGr5NsAy0h/XlgD8Fqynhb2ceL6mwnlDTgHwx6XpHCzDPjTZ7RHGSVmAJozFqtNY0TZnmoQ1/hj4evygtNiPYzjobdefRljDzOnevX8Sey3ik5npJz14sVdeikJGsutqlGTcIcV2n+zW2EI6UaK1Em1Pz2PwkrQkE6m5GOzKdy2MnAbDnPiWsvZdF6o9f2tiaD+dX6CggGHkuz7tA/xbGt0aerPXKg0BwTR54p8ZlSHQ1AAAAYAwAAN0t+KD5XocFo3ttY27IsblIqlEHPrL05YrCaF96XQLrHajq15B5js5pJRftGKY+Nt5pK7lWmqMpPh/APvJ502RWNFI8t3UBp/criOi2JIGLUd84gmIGvXfNjiFFQA5wqwt0y93YbkAFbz8geFsldMmbb7l34hrSSrNfH55K7Tq0QR2QLds3DgzcuJsuRRs/jZFoel+MoliP0wYFT5OYuGGEx1jJXpFmQx95Jbk0wZF8wEK2ojKHmkpNGh0NfBb9n6aegg5PxmexMBcJg53U6Cxie65I/bE1PogtClU35e+oMCWFxGXxM7zcYMZv1eAxQjhM7Pr9RggOEDPTJQtkMuOeEuiWDKdc2+l/Km6gvt/t+f2G0Nq71OMYcglgsOI0tl5LAXM8qbmpYlZ6LEsdSamRxE/TSP0ChG71M1EMUYLun73mdrasvcnYJV7wLC4g/MoIsWNHp6fBZT1qy8/ONF/xoQFXAETn6M0y3BjLKyN9LD2n0Fpx5eC52Mupa/uTt4BovGpD8Q3Suzku1y2Rqoayny7nNr1Lg2viMyE/dRlWw05/GsT3R96LYPZ11SzJOzliuBj45AO2k1EmSxqsPIR7b4KFvdfG4W/XpYW4nRwrhE1O1ePIsuPgkMwDgkC6XAYwKmM5f2YtU7gEVruKqkhXcvnAGRgJw+ztajSZhROUqdCDgaFFdjkgyJOdjNTYs4FIAXj9xlysPF//LhZLWv8U16015f40RB/wlHjmOIk0sApwofwDRIOTx4KTLYsi5UBVjhcGxjFoaJSXn0N5/YXlDgbHr41HdQl9gErllP05JygjjkCVlZqc/phhGjohXadyIsgQj95L3jgGioEwAAImsXgiP7SCoAD8o5cA6eWRvjnDI58bwDvSQuh8G7sGf/btnnP8zmPfj5j3aMQr63c7qKmqtfXhipO/9y3izHJzffppYn3uWAsWeSTcAvay2idzt4KlQ3xm0l1uMPDqaqPJ1xsyHpHahqdJp+o/cEY4y84CLHwu465DdZFfJ1czbJGcMG13Oq9SYS5uE2bb3qCw0oXR+OqVMcpnBKyZRxHuhp635kVTpPYDZGhsP++zrH9k1ZWq9DrIHLmaD1hMcqW7O+JLfnME74qxijw2ISaTLOqIKsLGMJo5B6lFCQZwE27xcnn+QiuBO51m34Y7OFJ+lw9sD/SrUl0fHKaJ2FW/nRJhFYP/+7jC/sBi27IULRTirTvlkzV2IPFUkmdgXLnWKtzmOmNR4ZflIkZeUlav/Ab/TJa5FuDTBi6BReIs63f+wPBzH6Rm3YbAANSnVv6WRMQugmRbTWU5EAjrv0hLAB6c0EgbVF7MPLuGnr2QI7W22b99RBGJ9O7zbCrNszcbZguIGOk5ZYQ0ZZ/TmJtMHMhCyCvPrKTqIbRRcxNEOX61w3V79z9OS09+bbwWcWBdc9CLvlTtn4apIAkvT8ipjdDaORvpTK98dXiaXm/seyx1TwWZlF4gBJbqTzqMeAVfCmjyjsPnepn+3lHyQg9jerHPW5EQu4BtuqoV37VbSiIYRBAkn/ZtZYJfU3xiNlNTZgrw1DumbwbRQ1uyqdxcS9BkMGS7PHQ6fsdMtRuGJOwRNoGUrL27JvHp629YpuBcN5KEhhP/DnQ644J0IsKCaT0VN0JF65/G3RJFlS6xZ40z020UDn0NsqKjkxdXn/i9vW2oSXlSqfrV62QqFERHCWVxx4OgBNcD78ddomaVxlClLbL22BTWF4gVZSIH1BzYaxjj3Fh0zJUpg5eoFgOGPGROalnw/SlpnwOdUJbAt7vXwnD/nZDSPz+d3Rf5oCZn0tJwLHwqGqG3bPXiOTS3g+3+WOuH6iu8CEP8bojslG6ghuzEKMwOyXPaMRt2+nuu86uL9ByZQBCAWeud2+WpHcXl9TENPCahOyiVWx2y0VZ50gQ91BUlJDtHBlBLOtbq6Wf3RUGtGPZai4LVjB2g3nfMO0QeE7pszpW6YSiI2BMVWJr4aYiVQ5eWeF+ERzGhRieX8i812xgSzsdvEXM0DkAzNZsD7Y6SDQlRADs988aG/WMUJM6u80zLZJvby7IE/oUZyUsGnP/aRaYJM0r1LwhAFXT+9jpCgeJ9x7h2qWEyoCkoApGvjuKQwZX+faRwlFgQMWs/0WVUCZHMui3oYxmT+jkQTmPS4zc5oIFmBHm7cDBiRZLMUgvIP1VAwIFyCLDLZQVK4kdThRwEX0MjyZnuT6iUdu6DPVgKDinS/Jpgl97s2ATBxLGI72urt/jmKH/j1BYTcpvvTOflBs9nGC5a5V1cX9FBNA/O2TCxbk9MT3bx0de01uJ0DGlusUMBClnewFeby+cmWN+5Ax/V/m4XjAultISE+7OWSJCkoYD0gzDnxnAqzbFbp42vS4SarIVDI9lTpeWYpNGIDyG+ItNdHVA7UMtoyMZQ7yjSalVXfH8oo7TxwGiSMcvHRi4FXWjtDTJUetrHbAlhItYmG3/Me2aUi8LQrA64Fw/pHQva+bfGejcLG6YCzWvr/RIxY7RUrE4ULpRMy0eldcj5CwPhg10XOrKQR4ATOmVUz3f8U+Dk6jbVGKklcvP0tsDP+0P6/iD5CbTWBVoeFsGK189HV+PdEK5K9OKnTgSstWqW0vX04lskx34VMYkHYSwvF9GUUK0JRq/JOVef9buPljJx9V2XMf/Cl9Svf1ZXcGfEoQwmeGUZcb9/KNdVDAUBsNLLuPtafEfcjpbin+OqHsN1g36oFJSj578C8X9qH9621zgZUEKQD9jnUswGSRdq7Pc55AaepfiF5OZKAoWMG7ExI5T2w6dcO2MQ2jqWLswELQOZ1ZUfuiMDrywDHHIqjUgtqNT2Cl3FESoyQwacC26GRcloXna9r9kBItbMYNYvbOADhFVKpr/Nn4nYYJr1wPd+DsRwyIeaUZYvUw2T9mMX2LolFnLMicav7okrWKQ1DHIMyN/oPqYiRnsGIWpiThsF/qpxyPjZ9NIuiG/mhxTqZotQ82P+CqCnq9V+/TqICadbEcBeSRKd13gfCCiSIiXHf8moEayi8k9NW8FqQLfdNmu9PSL2R2X2uyzD1eY5SQla1GULHBnI4SNA9yGxYQHGcEE3FSTATuRwoIgAqQCtWGVI1tp/0ndfyyFyY1vQXoTHX6yIJNgoL52vhi6ujpcaY+EDvPzJxiIOawgGIHHjiQOmnZ6pVjI6PJft2XYg9H+iyrJiJowHhjGZvh3gjg25NZI0HRKba3ezFK1uKRUC1fbkcUZ66Go55Roe+RFOp3l5cMrBYPO5BE3j3epptxWAkHkIVEaSzY3kC4Hmmon1sSCCp7AMGq2fGFHV6Sfc+NbSKFhYCpS7Gvmit4HSGVf/oGDaLMWL6KfLzI7UjS/xZAVLcGTz2RXiQ/X6a/6EpXLgTz5apTSfH5EKDL50G33fSML2lvnS/sYDjYuMjeeUQ4Ed1jJTHhu11nuApWpAH4QW4+5c2bxJ0Eg+J1yjqc1kjllaExIQLa8dNxQPBfTHZ8JPkyK5dtIvAp40B+3sfXsqdzFb27WHppODV6ZvPL3UuC3mvaqWI9EDUNM9x19HBvaViomJ8s/UxAK8ca0djgJt102PoBXKFtHuBCeJfaiqv1W1G7oWC1TJIAJgg0iGw8KXT6UlJih5XMgLsQXx9aEahqJefcOH61XTfSbHZjbB7VY3xXthWEN59zjDQ6Dq7xNjMDVL7JlFbAGyLGG0SbgtzP+w3/vimOF/4c3VnrkLmO93ypESKC7HnltBzGnI29RFQeCC0X7FUK00uE7rfRPrilhSfO19VgTD4b3VhFbhiR02MzYd1NT5iJncRI2v7MCZ5BFlEg8EM8ttlN7MUpOGEaX/UN5QCrOFpo2YNQtLz4wHOBV9AajAsDIbC8GjaCrnf21z2RdDZ3Jhs6f0nK4BzG4On5Vvs1Bed90JyL4pMAWxUxYTK+NWTBnSZehJEJnSgvri5ncq0cSNUA5FBWEA5qTHeMSSwrmmiSHonRYJbPI4n/d6Ku4J8ehTcnXeUNNJodNHpeaB17zeHEFJ37YxJVetaRHtWFXnwzLDIgUpmrEXmfWGUKdToHaVy/acwVb81rqlKPhDxVzXHE2j/3IZnTdgy8cu5P36VF+/UozPCi1EoPMJ630PPnfEFYNQhzMA//NSnE6fLsp/nOJfNwnX7L7vuEPQ7O+ykm1HE52bxcpzX7XA48HbqFrmsjKYqBQGsbEFHHXkKEj3pjYAAABoDAAANRAHgm6hJEmXT3k7ztEuDRCxzvGO4k7be8JiAHpQIMESH4MEg/cfSl8BRSObSNTLHV98ooN7+CKjpka+Q6m21CPcBzAlRqjZjZ7xA/fMXi7gnrIFnbUw0hqpUJB/vRXmeE4mDAfnRNCggKzHDAbYS6brIZNSVSPQfED6Jk0HJe7HMvPGsyaWNdrgSHoAOQrnB0jsvPRU+csmiFMfuyd/RDG/bM13jaw3x16/VlAm538I6nqkn5ZxgnQ993dLiGW8lJP2ao7RshhgjOhF7iPVfYWm1DHzBA2DtRkguMVAdyjVZviMUdBAuDaYdLCALnR3a12HsGGSykgdzddpCa7V0y4v7l27Obbeyp7njNt7Hi6WY/ZfsE8Mh8vezsTwbHY1MhcvIgw7YrU3df5GNjgwsdTDPfK79x7cRLbTGryYRWPAnamhxwza2e5seiSMirffqflntAt0Zkq/cTOAM2Yim+lqH67/Bj4JsgZW+CxIR+zRu6A7jJNfuXyVoiOsJFUZhEBsx+KNmaViBmBH3Z215S8FNqxa0nHn3p+CmxLJWfSYXXBx/KjyC3R1vjcd0Od0H9O75QhQmBpOkfQLYUjbWMy6X8VFnzhQoA6GVFmAu42CgRUaqK2K+2bsIslgYU5B0RDjir8F3NllM9M0MgPHzBXMlTxVBPgxB5Eh/jguPwUnNn9n8iEHqgQ/MSylD7uPUtY0t/TKcqX2+lC3qyQv0nQ2NSYXFwaoXQu4KUafRGPUXnHZLKKrvrdPik4ul6acfATN/+N87w6A0fH/9HZKdm71bCoAIjjwP6y11u/Em3qnoPdIyF8GjpgelTkmo3ZnQC0LZMHjIlCKkbUfPF0Y8x1jh9ZqBkOTyJ3VPKG5s2ODBaMsRzf5MDSIQgPXM/8AqOx6/9WoxdR7DfX8ZrYuI4NCGbk5cXj3UsTrC9fpyKU2fpfoAsKszIJNcKBE0Han6UyEMM6NeBz8Iq5v0nvSvX438DS0wznNiX60ONwVwh+f0LrZAlhwGn7q7xaOXd56MH+0Mi0aP3U6UEjcpDfY3a9Qb2W7Hk0ePsgHr1GuOVgYp08f/Ru2M2jAnIMLCgPV4Upt+c0kaOvPT4H8mW9Y+JbJRjihBU2je+yzxD3UfertmCep1ACHKa49JCyxc7TzGwv+gnS55PdIOlf5rnbUhRlE99Mq6+OfLnxUjAe5KtGRIo5BMURdsFmh1t/ddIJYkKuOYnD7Fj0JAfKnEdQg7+xue3rLulIu/h4ugS60gPbMYPEPndpUsSIO6bJzqCpykAG/umoscx5BEKv2KklNdlY+H2uNgwQTkSnh9vzLwS4aErDSLyCIcTrbsLy2viaaXCOnsinktMc2TijxiGUZ1fmhTW8svbLWcbxA3DhYvxt5xyAVFCt8EEIJ+hjNDtE2JviRtTZMbWVcyxWz1Hi39WszTP21ezH8LXDxryq/fIy/qlS1XcPzdifBX9ozH2LQfn/fI5lf1u/ARnZ+wwoC/+G/VII7pOnNSGCrJk0njJoLGAkO6qJRdj5+rVeg60eofOfmMY+iilUOqve4e7zNoOomzAFEszGCLIHeFfGb4S47MZ8tt2Ez78Joj6P5SYI79gcYlKevAQg7bzrsdS8BohtnzWAGZSyuEvdnvfRzWrM8tFFiW8Sd6Bfpbl4YghUaO15oVraqCXo8kL9OYGHKLegUfGdMByquSepOv+ncvTb68bSg+Sl8SrT4g7/ZdDX7Tc+swx76BAzF6YU+OMlekyARytjWD46g5Y/3M0PRbWjq53xUfmWL958cX9ptcF9R+dauetvY5OwpnSmHg5/1WTgY2AK85p6FRqkJ55rAJl/irbiMg18HqnEpFEjESM4+IBXuwRXK17UO5hpDwoP+pTWyQzhcuB/NkJzJ9hdRo4H7inaUcxyqt12uElA1LC8AL8JLyUuazL43d2d3ng5nmGxeBoTaRJzHbTVmeIdDkiMIBnK9pLM0sJluySgAQwDhuG47AOhvjiyIs+s40X9xflG9QaV3Sg/fR9otjfWC4xBG9XDE2cPXsBz3v6PvtrmjDPmKqwHMaAhiWxm9QAGknJ9uLyXc226Tkv7Xv92dF/c2baIl3RAro1HGr1ZUULeHz1IURvEL6/oHk2olCkpihsq0IZlyJr/60uB/A5Ox0BDdaEkAG/ersGApKYt3cikJbcErQP3lTGWD/Tp6rJbHfn0XPcP9Zw/bzjq7eiBCOdL6Gi8Co37pLaEw7vd5IMEfAFa1ZsTuVaWzXprkle6AfFHzxSR6azhgnsL+oobkYhfhpfZyU4BJSaE89bpoGAllGjk6M0wyVfqevw6RDBKwN97rxB02OTRwd55gBoA2m2XpXxUVtGdzj5cPru3vyMqxTCvgh2lwjv1ImeW4Z5OYgVupcrLwYLrF+2FMnTmoM5R2sDeuEFEEcCF0jw8X8tV7DbvxWwUAng5kIC3wmz9NMzBob6V8kSwCO9IlSd9vhkSA9Ej//v/hb6Ow1wNRQw0ev4RH9SP2KHCE4AwUP18nQrkKzMCR/JcdPGz9yPnCzEAiiTxcnV5T4fKKK/Ui2agrn0kEzJpr4Er3Bwl9QaeqEiRu9ZxRSbfJ9t9UJ8ePkFZzMeoPmIaBma3rL70UKOhrpHsgI6kxsoCK3zZ1+Bk+q03Vxm9WurAdawXuHhBrCnZr10YXzz8dDdciKMZn/wEAg0SNzwxmQHIeSfT03d3kWCvuAQaDg5qi5e+xyRdi48yCa+WY8Jj/oxqN8SZ9DIsf1iY5LbEcdCsVDyhFm3U7I4GaJ7jrvGxsWN+LcTxfdk56VtOiPU3y0mTxjjKlJqi4HvA1Xopb2LVi986nJxg0lwUtdDGiwiP4NgA2y4EflcvA8LjsqdPHWSN9jqibDL/RTEardOCeTS4ik04OjsO1fYH3Apy+p+tdcUp1CTm86/LS9hU6MZP13ZWPljXUj8gfgTamG4M0Xiopi/jaK2yHDhxuiqR4t5HunCU1yKGr2VtzoaR6fo9s7or1D1Pf3QpCjaCVHhFbw7tMXv1sNo+kNi/aHKr9irVz+hf5Fnj4a6wIEtOv2YC9OzY89fuieWeRlpHqZt7qEQWvwJQRUd3MOQDDeoYT9e3H8gs/ik1RPHxuF9NzxW7qume2JYLrpuFzPlj3f4sqlnZlxKCOA0bolNTAB4wiRM7mVpRCi3xmDPyaOvWN0qh7TwKO4JjesE+OJev4Iibe5okLC4VQESaDEsi8FIR2BS0lcdV6aexO8NwMRzGMPHqJxqjHmaUVUfI5flwDvLwxbdjWr4ZWruqtsriVgwRMhiRWJUYgIBGjyXvKplSNi9kNeqbnFVdRIJN04+JkY2275m7+Fsbj92N+8YJTbVxjFYgNzwOpvx5w4NR/Qii4XTKf8WT4UnBZPplXpUsBJGr57zyQe4QlIit237HpS5MyXRHD580dTaTf4W14GBoB0fQbg6JMuhO24dF8AgnfLbrpUEGs1SVb4d2Zs6/phD2XAdyTa3ZyY5Pwi/m7270MlHOIXHcis6ER8/xDFUMYYW78iIr9hIYDSxOb/WotvQm+QSK90oFYrjjg56BY2fTtVG/drBHi2jriKhHSL3Alm/c7Zp5CMilEOzzUAMbHnR0JK5dZQaVF80yxcc+anXeFYs5S+naIPoILfB31HNMQbiHdHXgEUYXEinSxJ3cfINKPFBYuBq2DYgFgfSAVVKqkT85A50FpdOKWZM2iZKO4MS8lmql6du9P18dUkWC1HErJLni+M9d9+gtgHTLSJB3lVDRLFDQPVYSdBDM3+uZkyhgRc/qbrBBDudi5w77NS5O9bSomurOn4QMgYpj0w55T9dmKoedBzjOM7F5yte5lKcMwShNbStykbP3+n34RyZ+R5kJSawYVvpgEPSXcjIz17vB47jtgc44aJ1e/8kzG/E7bkBwpHdPLtKKIbYRynJEmAsM1ohu9t92JXlHb87tlFk2dzqz2+blPFCEK6SB69KR7Je+K59H8EDH7cvUuYWtQohu4sUE9syPUcqznapI5HX9rbx124OI/coVOFd5J5JOymbssiwvCoU/70MJwBJ1/FK+M5fszba1ekTEAMaFD0YfLEX6DvA/CIljW47juQB7Ma5yZiXre4TzkY+xXqB6jR72YLbhzbZ+8MUhsXWc0xYnxZpXmmBU+a/2N0JmvGhv+iU48BmjWcBNhQ8ZFYXaU00FURDNX+PKjUaTjm42/nLg3LIZRi8GG3IQnv9i/NbcRRSo3AAAAWAwAACN9o0rJnZSc+9i6iuAEfp6hRaUdCh8T1QjCfliZ0jhGiWVW7iFIzXdr5XeyMhyi3Daa0AMVsEkp2ebblIJS70/QV/p/7t5H9D0tvRDH8l5q28YyG4g/ZWgazPIxnvWNGU73FxFNNpLulG2c45yTEpRhbp8QJ4myer4CTGDhuX9yYh2dFy3AK6vdL8Zs/DTq7SVEkL5iZE6LX8RXuZA4MmqyvFkviPtUWomMEjeRYFcN4NBu2FVMtp0tiJ5tGX9gHaWhN+Pyln4mWgfIOAXlkRhaImnKy66VcBKbVzTX+7jb63sIyefkhXWBLTKg8qchamRlx7J2RFQRcaBIs0xOi0bZlCBoyLsHPTGCVZ/uebudkzzYGPJShidaZ7Xdtue/N/+ABp63X5y49urDie4gGSDfKWBdXRfyirT1tjcpygm86fcl6ZiSlSHgdbapaqH9jQNW72psH7d2F+oYl8BfxNpc5S4Py96XCIo85Wq3BZ6qHtg+M8DhHaIVYjOj0i0tshBokS/fw2rHLN84bw7Y9FhPUaeKxOK3wEYFTFozRQGy8sNB2haVnAi++d8TjaVK0kmavXlKkDIGvuaAfq2o41E4kZZPNTwIgbWErL3LlV25e7FxAa54AFQKIn0GbQl5xDn9G0uar/MppLJHklSsULsNXFlYxSnrV1pfFCxGKuS9i4rlqD2mj7sIW4H/OWtErEJXPZUlcj4IWjQTrJPxwRGP3ygLsT9NoTaI95P78a2GJqYo42dQicjGur56HmOj0kbYQ/a6+bkb7Xi7CBN0t04G02XtTxNYe4wRxRkxT9HHa64neJR76Hxz1Usg0yuU/kWe44nyf/YN61Gkz/NhAEIYJVWn2MJ984qUAcBibMLTOf7SRbq43VrCCKl5Z8hrMaQoR6QI+ulz1xqjjONaQVcsgsL1myC1NkQNIU12wQKzWqCpOVPCjnt2xyapJu2ebOe3Slz/yZ2A5OK/tFy7vZAc3oyYcfzDVVCC5ZiJGJcmRtOjF8VDjL2Ofd9YLqhQcJMznznFQRtkAodShpE6U7llB0kIjbQ+Bzgo/yTJEqKcKpLJv2uYw60kO0VQnVq24udqNcvUZDqU472M09t8bZWdDjVOMaLuIJ99Mo0T6Iv0oMqABFcJwq79mL9eDE5eputwzs95J8HXZlIvMGG5xPBs4zg0Iu5RIfHIoBDt5hoZmEfgTHO2ASgxcowAMWR9a4jt2C88ntmd31OyQc09ikAqhcPnv1IAT1Ut3ltq7+Qgob7hNUm+O8q4ocvjn+f83HcpbU0s13+G6SCXx4on25l65mcjOZStzi059gv0gXkt+aaM9wDwa6UHpzYsuHI+i5hVutPp6uTirg3zYnUuQOgu7oyfF2S7tdce8Lo2m2nNUeL028qE19bxE9v9dwLTVpR/prrqkbWAM6hgIsf031faULN28UtQh2H2kxLnf5PCcd6R5JhV93YjQLtAOnrAXPu9VEghbIWnnwg9Sn29BN7DqVTyoDuTNdVNtj+Z2Q8G2j2uajhjFHWP+H8HiO1NacEvWOVq35oXBx+Wfbbd09IM0E1VVXo/OOkJLwAzD8pIyHDhxPgi4E5Adt2TkbA5CHRU5AD5OARJQJzDk3xUMntRS5htrNQMcSqZ7CZzITfPyLLy3VMveJyXaTEvNkefRsIqsQ4nFufUXm2mo+dbSalzliGnlfW/phq8hEnNDh+e4+BEULpSZj0mr7IgH5+R9Op1etkZqt/xhgn3OtiBN70ouv2vwGaMU8B2RkajvRDpt4dkWQclLf8PJ2Z8EyXjYg72NoyFso63yAsPTTO2wCz3iSaka5k/9bQvpbJzVa5mSboTUQUVGn6aNbsOvP2FNNE571diY8wKrHkMf0rJ7Mf0ECbGVKVE/0TwsVTSwssFkB3ETuBAH1Qlp1N4i5/OVS9ivTBymAWOGzk9k/oGvPNL++VeurV7BdYk8ipGQtTdYjeupK8+0drzYSmkPUb6RYIe8XiF9Qm3BBiluRsXBcKx3lY9bZWw0W75BXVo/8Y/W3VrUJwJYy/5b/vmxDc4cFfE2i7RqP68xF2kyLYSEbuSWWj+KeiglcO6YvGIItEsE3ckPKCfxAXT4K7e2MTPvtmydlRTusiPUUvv5uTFGpd4ACrGL+1bVBC5Evtogka/fKxZ4kiPUmzx7H2MTvKKzEk34tF02vPsu7OPH2xcF8wJDyERq9GFWWsamJQgLDZB6FreCOU0LiuhSqmf/3nLKcIoyswjPnTpZRzLn0+lpCvkdjkBlt30PjJxifom3Jr+fJvwwC2Z3WsQx8mc7TGlZGO1H5BPmaAx3y33MQy9C6XiD+KSW+1dF3HuySe/CC8bQBZusGBcrmHslhYUEk5lwrgTbft0JVgYnXhK0z3leHPzNtKvP6FruqgGUC4Ho3vfkcqW1GIU+3LAi9cmwJCECOfc/1loKPouVbWuQHoIuHFsd0kWWhGM9UBoDejvHlEUrn4A4twcYeAPfHKMvpQN+bJHAlZ3w8vhQi8iYpwv4U6tdK6TBrDESCX4YTVt+64bZqOLHXua63MSZcN/7wM9YNBRoeyjpNVnGFfqlByhV+r6bEPn9XFOly2I/rWV6BfkavRgeyCxT+Nq+dPYVUK6Ep8cv3rC4XWToYWzOeEh8YBhcEFZ5pX8U9SF7j3aRvYo6TUAYpgWOU6UF8cWElkYMab0nEKgYPf6+c4pYlBUq4NiAbLLstu7pZ1rtJCAqjqLu+ZdHBB/dIr5V+C/yRpXohdDG1Hy7+Rbiad2Xu9WSgOL1Z0cg+I768a/uEn+qqptDQXogu/wlDDTNxsid+J0XCXU+kqCnu4Q3mCtcwVxKbf4XT3HVzavJVcYdD48bwvHzFLY1kJfMEX0bXAx0OTuYkC1FFGSSmZS6DbwJnXj5cuuregD6s1StG8YUNt2SXMR9Z7tx5sUA9wZDUN6NAWa0+tRI5v0OxSz++V19zxL6bQ+f4doUhW92opnTumznWjqY/GPORDClhdr2L+2BaXT9xNze0Era0dLM+wvr69Mi2tHIZhgicM8ednz5jNXpQPSFe/rLDBpxTyfGui8Z7U9OKNCzz+nAVdvctbvBBpx5eqEsV/UWXIFqUOYiLlLleSF5s0EOjCSZQ7F/OEFucGHt5FEqfHrta1bA9csIdWwjtcDDzYODMllkQbpghwMAgP98EWFnmKEYgk+vfrcy/deSaice8iLBQ8zsY5M9/4W33opVwd8kdtI5BwuogfV5yojBfvsoUa+jRLHD/87XJoG0TFF0j4+K5HI1quBmfrjzzJu7ugSA8cXUEflynT5d1aSn3lgSWOabb9bdECQyTYJ9H0x7CfmejukcweaynARLIh68dP2pjDkA3ncYJiLIAn4gQOjPohuCD2BBpLkchYETnxo8jIPZ8H+HEqQI30ZCLOwxNrRqUuXDLppEOK5lAIJTNLbvzuyvMolVHN1aTl++7yeqGj1cx2uEZtwBYybZgux+2kwzsuIDT/CvAvoArU2+l8qgFRp1EO1oky01x0yN82+GZqV2XCextFbYaVqNSFDsJEnvki3vjHSKdcS9PNwgzT9hoTiS0oPHgvoCxbVpN1X/cpAToBLJVJqBs35VWrxouXM9jAU6JDBd8R84s+hlZMIkiNJIjLZXmo3OIHO8d2JgpjTYClD4cLz+zYPsd6p9C4tR7Ts33lJ8CKT0+2u7y08kKzsaNmnBSc/SFqNIa6iKjwDU+WFvsjJZb4DY+kjstYocClJQlpETWm3Yc+5/7n+A6Je8H3ilC3m9p+3R7yurhKl/+oIMeKqsVlFsAimjkUkRklUtYdz2Xzdf97CZdpq62453/I/tAH6fiyj+TU6Sa6b3aHXc5F0CcHeVTAzHwgsDVYXS/aaCZ5ehSnCZKHkLgPruVoG73kk+CuaHj7BjZJosHHycffeCQfO/G5g43JV9Ih2E7Ni2hmJ4/qrxCSJYjDu5s5DYeuZLZyFVo/RHfbWWpnDWG826LV//Rln/rTSno1NdodL8axuJoFTb+CWe8IZ2MrIgIE/HXsiiUL0OBYoKZJUx5T/IyG24thbiGApMaaSzC6dtrzTQ6ilpP6jv2G5NCddDU7V1IO8NiNlQaH5039z/+JoHX+0mVqU6eXgh0+peokG+MPqVAL1K9BgBkrLzfiW4wudcByzW0gJ+t6ylMNjN1iJ5J/MgOl32WdqnDnPMsdNxoX8Q/6Og7abMA+J6gY4AAAAWAwAALUNWTCZSO/extCHz5BiuCo5yqYXCYTl9GSqyqFzCFx+WPeQf/AShnWwvoqUc8r52sQhzebUuxdMvkYF3waYOM1lzs6+iPFswzX13AotnpQn2V3ZoY0KB+7axi8TMpDKA5AO7gV3MgImUUvqnPzebVliC1rC9VbtosxA5JdEkAsJwIbEo9TObSSh/JGeA78ukPVoZDovyyrT2ED/q9WwHWrpt5E1sQmRHA1dgjfXzUQB1cI3cew7RGDKnZHYuIzaJMgsNAoRMNFEMaVu7I4xDFLUrk/m3BlrbCcbyBwFolYP5UStpN7WXSHQeAQQ09ACQAZYRFCs0GUlbJf3AjG4wbPxGbXN6vNlN92n8Wn+pmMwwVPS76HNPDfG8qCExaHlBdSc3Z/yaGc4FX83ronkx6rPdnyod0BV3G4JJvhbnpyyBVAQFP9CyL3WqDMaILrtleMKW0/nlllgXp/5mbU+9NtoqoLnusouKlUKTT1GvYl0+xt2Oboq41779AuqHv8uFz4A1d5EHyIsMRaVe2D/YK7bPp+QC3Jlb9ohIJLI5wX2hnynrMcFlrY8b+JkUmoCOkgexwUEL2wHn50o1I+Pn4oYj6qSwX7sC140kjJqQIENB/E6gpOEaRRUdKc+8VAM9s+9LIVmicS9GzMW93h75I4P7pGy7xeFj2En0oOu8H19wJ6SO3NaaDsGqjkMdK2EEh3D99kCzFgL3AlRgJVz2d6Qc2tIsCFkLzkMG2QF4WI0UxexoztQicdsU0kL0pZLp98xKPb5w2FMFW9xfosNKR/TIhuUinuzyX/xFgcPDopBtw81ITzAvM72LGjrEud3f6PAwRXDMbPAVllSwvnJgHPdymTHXj6Z7QkMSMbHZMsDfyDPcG6b3zqlka/Yt3FppAYLVrmiXR8Kh2JzDEHEojFMG34UGA42dr6vLbPlPDvlmSrBp9x26iwdyPVUg7ZUtNZLd78GtMJ6BDUl7MKOHlXdwULCtciIc5PriDoHwS2qEv1iNqcnA5Bwm+6iXArSfYucgHIznkOPCYLWlbyokDndclIMLD0pzWNYCXEJBrKhwrlw1aSudLFpVv38y5yJ/K5IX7rfxxEExifvKQNoLjhVeGJMw9RD4PuYnb8cfJE5LiGmYMrWCeDlLWpvEm3XwZ5lxqV3XuWFngL+YFGKQHj5F7eWsHINuE4xof1UGWZwYl7XZhQZpp0PMD//puvyo5C9VKu7Z1f6ZkBWIn18uhgQqGln3wAdhLoZU0Yi4/K6d+XzsPBvPxb9wS1MuMvBYdlBpwgJL9FQd96eelY/2j8Tlc7Ir0sa0bL8hmAYXhnMH2R9lYpV88ihTbmLGGvCduvOzN6Hwn5MpKqTgvx9Aw/WWYgV6JxZaGYnwJbHxDngiPavziZb7CXljJvTtOPcNFGsbBeKcYdnTtWmsNZBNz5M3/UdxLJ9t3K06AKgnyp12D71OW7h94MPkkrMqa7K8FW62Hr4ItgxkvdQHAVKHIiMDH1XcB1AZaQbvFa0LBh8w3hYojfo9ScWZ8yRazItdzrb14AS3foixUgfZiVwbgK3RetcF6/X/6sb+EzcUQUO6xwzI1JJUwpZGI4e2lnj85h1/5GvC152te5a9m5Axkq0CEFQrZ7Jfa5Dt069ve8N1Gz4ZJmqvmMj0jhrg080sNHxqSWaZ0UtIWig5U6+irjztGoQpzAfcPaAM8JjWMt4K1Le6ulrCA25Aclc3YcxSpwP9WAxe42Z2nt85B3yktg6MxzfYQZ+tr17rvVsjQpMkHzQTNxAgK5nMlHL4qw5a+n28+jTMnRvRcKt+Jfn6Jjw01G4sg4KtfTcE3O5YTh2HDnzK9e7gZOBeilVvUsz7lu2mk3+PCLTJaUJcmdakyg7X2UvFHkjtCbk6zwBVoG+V4KIEt9eqKrXnTpBjynoArRVGFmc8uhN4V4bCJAvtZSqbZRAvo8tVqNpQ+a3xbcIWkDkWGQTi6wux28GWM6GYwmhhIj+TD9zC1QqaGNqqQyWqxIrsCGqhapIt/OR2QMX11UfeM0Q6S6EN5gOfJRlGbuuqkvEKhfdUL6fSFqJn2WfOnfqvtpQK8tU0HRSH7uAPO8XlwCiY2vZuPbv+w2c6eG/W9On3KaJQDwebQtRjOSvNBIx/6PN3XPhRjXvChYUTVjNzecnzSRqvi1NywlxYu3uxxS6Xkzv2Aju/xiB7kByWsLFMUKo06ZVBVK62oDbzHNUEJgGiXJOaI3rhnq43Lp2Rpzq9+WbKoHq90c19tLDYI6FuHELrA02IvADy7pU9MSu0Nhqy4H62Rqb0TKsdBwwDp7lYThfxRTPHL229Ne/+RZj+0jlLd0zx46SqW7JdTB1BkokmaoISJnHPUNY5YgexorotcB3FRI3HDxW9W/7kOdnym+04oks7roymQG3WTEWmFEHbTyzKVW4NlsmgoTT3fUnVEtRPGYWvftoSxkbdVKEgqkvcoxLDB0tuo7DW5q/alMlIoMzM1tB73Ali/ZG2YoKiLXNJgvLOodS1Cv14MAXkoJYK/N7FBNZdXPcJ3LL99NEmeNRFoTvcJKoFiH0bWHeh1ok11wf7MK0dk/EOhJvqJeHtyEzjfJLYluqG5sgNy9pIf+LTAOd7paGfIF2g4tonaL7MAsnpnS9OIBcCT6ux1s6/W0SIOimAJesYHcPW5+dj8Q0Gh3cpHi9oDS/GzUMqmV8BOIdYu837XfQJx9wmjulVbQMYMbAnX7gpGs32nrTlWTJT56NOOT+vKtGEwKIV98A+PnUYbIeGSRPQs383OIxSJ4SZ8whxUjFINmCq8Ra8+HopQnhX22RGGqwUYu8snoS2UDPMslnvthqwPCHYdVKF+1sQACB7sLlN0HLKLhLChK9HFv6SKdVFoOwMn2NcrettK0Ob/06iy/M7zu7AcJcdbn72mTuo5A9wOWLL4gQb6jtrbrNTDdnLxhZIH3IK7p7rX20bHii0nrsJoEGJ/innx3/6Rl5cZP/uJZ3584FHZmwOfAEO5JsgrjlerLWCWTCPxwcyR53C0xjmxdHw/5LrJDv3ZixuQUaGMhWnfr0HTGHQIBIOplXmEk8XZsQd3+EXKX59DHkLfzuWXcYJ6O9P1MkpkDGRkYVVwe5UvPNVss1/p2maYDSLWvGWTGArLdPgU6txSwB6/m4oPxKELCuJRW5v+U34R7WzpCkLCs41OOC7dyxAkR24fiaN4mebLOwvJyU2rkkjJVebsJ44iCUJkYQcm1a2BSBhYgtvQJ5NFtEP0qdu8SRwWU1yos0FwFrRBK1YqkX+Pf/XmZlOKIzNpWXJc68BvFfuGMvrg3qVRTjKq1BFV2YCzNbLTZ+SAtzSwsRP2F+tWzVvqpZIZkwP7IM5RABBqtMFI4YPeJYVaS3AsQOto3jMVkx3YwZ7WxI2hzXwqSC2UPbtMWlElc1nwlQBzdC9jAWPn+1OPlF2z1qbxp9jWO9W7VLlQYIk1dBSVcqOtWUlaBX05bsJMcETcE1sFlVLWsJBq9OuykbmC8wUc8Ak6AzYenHEpyMSvQRo2NiEy9bi7DN72iKN79enik3GcPgBcQk2oWG4BoL/WigtdZOzRF9HHDvWzrzAAMY9PfK+hPzbg/9aGhjBbW3l2pFNDZKR2BCN5Wzvw8vB+tWu2UoXA16n+SJ6+f2TzETdzcBWX14MeiXa7wXunjVsiNwtWDbZz9ubG0B7uuMg+oA5ZZx0//7BvrnYH2YrF84PF6l8L9ElM8brNqOtFUPUU4pu/ASsI66e/ia2D9WEqXguUAabbX2shofYnMn6Vo3L6IjFa2iaJ22WN1a0KYqOAYADR7hAZ7uS0934cCBEW6ZY3XcwLooDBGxTdMlzs2gVXFlprmnC0Sv1fE0wBaAcZqv0c0Z0rZrA/REskx/vqjGxQ61u+VjE2SAslVT+2AiTQs54pZoOihJSv1R0/MLBUZB6HDVGGZLg9VnxIvrcUnR2sZrVMGKPOtGOI4Yt13Fc3o1hAo3pIw3borA+L5GyHCcENJfES3FlTXdVTDlBS0VtOILOIa167E4F7EspbvEuPQ+87Vh25VA3RxXNxxOTjYsV7LKzFHS92j2mfqlP9KW3TLyTAw05pm+ciqWRuQ2wQmQrWsD87RIrOnP3kkIgBQ7V8sbtNJrOLH1dk7Apkh/d0rQJnqsnRS+wLCW2XQ/mGjl0Cln/cdrLxBrrT2AADyVMcsIMhDikE02xPx6fSYAAAAA');
