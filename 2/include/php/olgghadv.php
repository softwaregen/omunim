<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAABQCwAAjvGieYdMmVdMsCKPdm25dIIVSJO7UYlja2jX/S3gHuDMaWp82Hm7D9R/udz9ozkbPJx3vz4zjdCY68G9lKTW1cKbmSLrgNDSZImwHQNF5E26tpVsWwR8OYzj4/+KD+TxBpJv7PEdkg6+hr0LOEyzssPG5AxACWu62Lwx7Uh3PG3UTsZ/MQELXQoEtLaEzIk4C6E+ZekIDYviqxFXMddYRIBxW6FlZO+N7QaQNtDiQlcrCbEsKUDg/AZPZRl387fp00sla9BXyYDurdJhvb/BVh3bw0+8IJwEQIaoyz/uqZhNYkXtuV3vO+62n1Vng5UKr/Zzr7tMYrnniuQSlUxiAcbYO6PMPY+XDZ+lPsWi7MkisPot9tZaX4v4DjfaagtcIeTuRDHXcIu3IY5scf+gvonRWGmB6Rj7RfxzUicRLlDeTqxPQ4rGCNZWYA1e712RESbNmo0yHonmUjtHsgVj+UqvP5aKJ9BbGvyL0Z/d7ojZGuOrEP0cC+bQiSrRbQFRCf3bc7q6UjmksLFzfFH1jyItHf/CDgeCKpowLtDhpEiCiZcXNMzCn90LsSZ89WwE03R9U5y0EO/qx/l/JhTrFpsk/Ioswt1SiwZMr5uZ8s1ufSxviO1a6CKP4SiVoIDSOgjB7fEmS7UTWT2qSU7iyQ2EhmD6W3q/cU5mW4oI5P0xmkwcD3cMM0cZepM1Xd2U8zzTTg13j2VdSITd5N1Wk7auWZRmIwq0WmWK0ZquwLaMi3CeoIqePsMy/Hc2KJA/SNenR/f9I0MBC395CyR4MrAKnl89PHh4GoNZtRtqiR1uV1mWlyKVU+RYaw+yTkCss78jb5xIXUoS7ToS5KTKfkG9vfbgdkqv+Gb+NzcYpgDOJqL3jpX8zpv2zEJc8cFI7Oq0jQoH7ZrsCeew1RMj5ilrKYv/rDBKJne/4YpBH/D4abwoXkdDtZkKb1/WH5YhW2LX3KTDxXs/hkXJ3Wazf6YoD8DbJcFAIahgStZDCObouXIFuO8yDvDnuWkToTXYRKI+3inuINue9kUsekLmhfZ3sVD166dQIx4HeRI5z7ducu0g8xfHIe7Sj06wwbIGwSCR6kK+AiDnvA0p0csgSKIim1vkyQf4WVWrFoBJ7B9kvp/nnfO5TSt4K9o0hYOLkwaEDg1gOG2Z0jbfAeKKmZ0qaWLhY6DCeJdEhyJlcF+cjvrofKiger2kbAGzQzC+ceeAaBLOOdBWSrqArG+Zzk+A3P/T9cfaC0PcXuAF7XiKA37O3mSEsqhODqbprnY6ach7HhkL+LppQZ7+uH3EbGnHBnx2sZcPIcEb4Hrysi7jn3jX555nDlt2PmIeu8Z08I42/6vy7xJfZsDc8A4VXsD0H0hQUCpwSfXA27MPA5s3xqFOacDwYGnlYFGQgrzWRw/xjWaomvTCzP8zdsoDURu6IQ7UPjGLb7YkvTcNYAr9CFfAevhDgWT00414qsNblX3Lu1LOQ6LHuIQ8A+n8FErtfXI30HM9x7ssz6a0qQzVvTsjXckm7+/lRMMYF1EIbn5sAdPmN5aZsEks3tjHyEc5U8lx/DZoJKO9tS/zJZmtwAtAhqqTyv+kluTzLyBC8wwGYdbE0nZE2caP3f7Sra7U50SnU3RR+RMzPG2//UbYzZfNOMkHuv7/r9Fq92Iku/nD3IT5r6LMaFMbAWjCgnIWo83+cS2zsH7BMtAIsvk048E1PR+o7sO+8B1L9TusC4sFSwBH4fHVaRKivGXnaJ0N1TZzABE1KJKZJqAJ832yBAsFo8ot61yyxN7eOtr8V4Eam7Px1WSKIf5leMVd+gXNDkDpZT+8McdTRdrqd8kg7oDlOyrhrU1vNoDsWHZvvhl2E/btGMdzqLNmk6Jlph3rYp6NecKQyh52FqCq8y0pXwGZ9EPWD4jjBS3Vty7Yr13yqJKLO32nfO13ztLYBp/HT3RZw854r2Uro+J98vjOMNA9ywW8f6uVufMwht+9Z0dALWz5mrn0VM+FUsLTa1fYto+Hdj57llH7q26je0pJl9Erg1MaDF94gCQD6FTCIdzAXRG/wjKolAWNEKZxaHxdby1braXr5DknSDQCf3+p3y6iVku7pxLrmaztPLXIshLdmqVbFlCc01f3+qD5WBvAW1/aOOAn4qU8WJWLOcwyXLyxF0vtyWSx++/RcVhsYIU5Agne3eokpEy7dYoX2/1gvT+shNKdIZbZfbPooFQ3i8fPWFaxDcMzLaGp90QjiJNFuH0cWXm2MGwfAJLWCGzv2wXIQMvm57+A4iw+z7U6iLOLqtMpiOWHpUSW2sroQFT+RXfJCo+82cl4H72bdYT+T296NnASW812cvPXDQD7aHQCSf6/nm/TvmHzEIX/ZkQNYoBa9nIIzTPiriRzryyBdoxUCBjyyR5zark3hnuirKNBYUu3ftscAqehQ8KA98AxeCt1bT+3ojLTI1iZuYINiFz1XCI+TM4lb9/TsQ+Bihng8ngCTH9PWZIOM9hu7xVuRetRkKV+C6hMm5OiaBuDwW1RdRRFOxvk0qn9AdsIkC1Cjd1l0q1fsy1ISJJKSI6Peu2v+JGmrHpQlcPLSF7aO0JJ4f6yeywc4GVWSRhxhD9nyhD/avPYI2qCnRLNm/YJ+CAN+11DeXQIJw7Te0QD+F0rj5sBlnHQd4px8f9c/qUGCzc0WiZWqmptN+P4mIG7u9/NoDehG0gJfltpEcVA2WuXvdHhd4KckWXS7g+9WnKl9fti03bzA41V2qwWfxnT23PfS8E72oHLfjdVHbTVaNWq2sgUnqPi3mj7Z9ZeOsgO+oDTk45ldQF+MMuCo+PCZCZdKbAz4sAboyjR3ecwcHqTTeCaT+gmGfCxl4/0ChzkNRpqdMwwn9LPwhlfjHn52JL7g/Zr+osHtRN9hosYKrsXWTSdr26aqRTSzlw2O2uxQal7fUI3j8Dsw5RvJn/Bhlo3HOW3Q3yTaLKHRNvpbtqhtwGg1ZzIw5ms69fssGPqhgqBL+BnOc5Cd9F5Nk7/+hKTebiypnR+Uu4jAyRUznVS8a73hmemLfwxvv7hY2KBf56yan0uGO77pjhh/21ebkIUUcs35n9ImBOXBH0hmbQkXftiLSPuRS1VQ5RJNjSVtPhpweP709eD0dnKr3eHoHWW8ef0Y9pXj0KghaOZXqbSbbgYTdP21S6BoLr156LDBiikiP3Z/yKPdWCTNS3TPWGqHylVl53eiMXxXGmkk5DFZuuZZ1TJ8HvLDhD9e+y2KL/qn88L9EdRjdIHwNab3QkVkMggzioiiWGEQ1gnV3jAOWIEjqfP3ofJpshX+E92QHX8H6etXaDmAfByrr5VvuTABRTDbJf+J8pt7+9oKr6S+WE7xJ9UA4dIuJ6lBfgDHvXOGk95IRRLZ3VGHivLI6M4biWS7sIuQSSdXy7AstFh+kQSXwhsHkVqYM3Y8ePDo4Ya/wHoPcg+trqx+vV/epXzL8zkERvib1bLOu14uvzelhXGG9YuaT1WyINOON71k8+iKxhMOJr1EMoL7mIDFSZ9e8neJdpZXwk68UVynoU5prsIub3bIja8IZJKJXBp0sxfHFRNe1KZ7zsD5/Ego0yl3W14ecVzdifou7fIZ0j80th1sFfpDjn75ObMfjOfwuk8xaAR+QSWeUvqMN4mlRUXSNF8bewWUiw7DiaVgaOGmPjNTFUb0E8WV3vnsXA0Be0adBnpgdBuOsuM1gc84nbSCuegCp7lCkOMiRFjPTxZf2bU0znl+gJYod6lmnVE5OFbqDVtbBtodO7Owfv0l5nNBFkw2uq6wC7N8UMPoMT5NaDJguaXy+AksHWeEhYRgYxAx67OaPvM/YmBMf3QFGGS2/45RrMaJmrD6zUAAADQCgAAhWwYUe0wQsmBj7gjtZe1OmP11d1b94KSkONHLfK4jsau0Ndg/cN+USzjEtVS16PrMNzGBQKuedXnHsNV5keJpTjIMvJbdEfMf8KgXdc0+mjV1wTVPHyG1TvKBkOYkbhu7rzgROycn6EzhKNsuy2tpic/UMrL9fWDWOjNmuTSrHV+fBUSTaLfF3P9DFs2FcpO4PcnH1P5YuEr9Apt6Cjlmx6k7zeelbJJ77lJVzry0CkcDdrh2VfTQoUbSsH3ztRP3vDMM9vqaFl5+fc23z4zsTcipL4I1VIFPyXK3+s5o5DOKjRNByIbABseRvlvfCOajNmSiBHrD1xVkpa+LTjq/9rhOqZi8xcKhWO7ZYOXh9VymqAX28z1TZL4V68tkllVuS3fh8pKox8++ttWJIcaHqzHznP082grw0Slv8nOSZ1CtsAsZ/YLhMybEQj8jzID9njimZSIZmREjb5OFvWDST4SkhiK02iDwLtPtlmwM95tbIvIhI0n34phWvf+1MMx54HzZbHXVf/HWxVLbLJs0r/wfla/QP6jfbqfHFImHSxX4LozBmC0NFQlhWfErm6R0fbqF+A5BAcC6XapuZadbN5J63AHab7dQcgrXKhZ5jRD6BLvU0Zf8qGkH55FwuSvdtLqwjvdxeCkakZrNnecZNOCLhla0Rjb1d8E4qCGCcIFHv7EeennVdOmcvH+MaRF71UNCsQ6bHAjALqJBVmc6Hn+7dI95pdshXqP9Aj3iBfhlNusjyE59rlSSU9KcSO/3ehvUgooWAKdn6ki4ZHpc0oeB83gZOnqNLY8Cf3sYgkmlwkxvA0nEENBESVHQWNJDiuSwSx5O45qSx1K716jtKsYI0L3iBaHkplhx+ZGDJLSfNRn8mZ8mt4OHW/ubzha1vPghDqNpzTTaAgnjYitkCySb0o+nv/6mQAMpVPOZspROtQG6C7/4BZE7hq100LCP5YvDrjaVCYAJUaGjJT8H5dFhiBOvfrwuv34HLE7whKkfZLfSek+OVQ+atyPcE3mPZ6phs9LeRJrmsAAjxg043ROiFXQAzATEqUzMXIfO7ImrLKeweendvl//GOVrkul0jEJmQLJTapQzSPsgH3k7FYkMFoAg5s9/pwMbHamOUheYoQUQydE6RDDMPgDx0bAzSovOFP0nHgDr+pskLrlrYkgBTUZMNizRexQUd0otYt0ZSmMdTj3TCthGwNoaomMvDxS5o3Crua3u6sPHYesOgxroopc08yJMKKZL62i70OyeCnUFrJuVE85Q91CY1dLpNdS9vPAbB+vP3SfmrnI4uIi/27hbrCHVkSXiQunItJgZ/26mjjcLfP/7irqHcZVngMNkVKC9VYvk8QIJObq0uhYC+y+OPD9N3kEK4XMuOQmjEbJ7/QYOrcyAB8rWaagNQmvX6DL6RRRf6U7uZ9KWBe8OmhYKylREy+mn9QJh6txHMIy0b1yv8Z6j1XOXcDFlZpj388FIouKdT/xfHE1fRpcnq8am7VwOF9KbOR0lig3AgDqBgM1QQBZVGZiiBmxMNa3z3OkW7c1WOWqxau7vKLChAK49ZulJUfKjlZqUuSCaafDErbvZIhYR+gO2NB3vE5ymgKajxNHmWTZDL5uIsm3gLf+Cr5qtxUPOoynUYR+QtpsrOoXOUirf5L9REuL8ZC1ciK6dRVVnwhv3pKeCsgz7aitxooZTfMGMnwli+Mp1wSF46T9lyYlmqJLj4ICipZ1csdPO8EBzdfd2DvZeo/oDLaw/Np1EGrJH1gLEowVvQUCpcbd2Kj1oktS9aZJA3k7LSRsy2QKVgDBx5YLzuDhOLSsqv/7qU06Xxx3poz3I0DuqMOgzRFrHiR2o8W43azkGDRex9ZsQeCN0kMx8AWEtURK35tRegn7Dc+IY5aZ82NLVeTcr79ohiP8aCNjIIK8vt9mIVg2xNtfQ91EfMVruqu8m0WTEVNule0k9BEzgeou+qkpH34F6bxkQNZudMf8CXnyCnBXge4vk5TZ/Y5HMoY9Txefu3c2qidSyW12tKqnI28z+TPh6SnqE3FxMQoT0Q86yNiohrHtdJy4F2PLR6fLE/C/lz1F/LKvDr9KHN8TdBdCXLCthUt3dYCwCAkf/az8snLZZcx7N1mt5vUcqCJ2Rqz1wnnp0ifz7eXvoEaMCpUmO5p5r1F58X2RQ7sBwV/lvVnG+MQrdmo7g63qV9gr+dqsnJX7PkTFZzYlqsavzoL6bSveL+POKNsm3wW8sD5toemci9plP7T0TEZFn58VL9I4jkwOl5I3VMxUsROGa6q1qGWN7AfgdEmTSUzHGpwQvzyH5JvIJZLHhY56zHcL2+j/hsx/oqOTWX8vU1rEgl6iYE+AGXo3VO9B3qEljSKrD2dAu7VGnfhVtZcyXa7yLfZXAtRjRLilKLUJ+V3KW74roKz095pNnzogpQlueYBLha6tLvDCcMwcHaHTB7zjLSnVXYTXmOj1sCTy7h81ym3OWseOBXqGmXs1XXPxuty9KVzaMbXmz483RFshASqKap0k+KQHQxXD312TbmuCpZg+j3vcoxr+BEBPKbWfyLv8pjeVI6W+X+GImKtymtIzLyEMdjjJ7N3tIAywg+VQonoQVRZVNSInIY79x6fXxVRKT4JqaQnTSsplDZqxuSvZ45xtiOpGmkJJu+yuBlBhP6t2Xyi01pwFAiyrMgakuL9JnocKjS+AWda3u1ImUKJXycQjRZC+FY3A5Z875yRkIe9r8lqx9fGkedi4u0hoDwj/uqRqw1UY63coYTvH38zkiJySA5OMX8KUkihyutyywIhINDHYfJVIRbB1n59fr9HtzMUFouQF4O8hspq9IrKdDabF/jTctu/xiDd0EepGosaKdCk1gcliphRvhATmPY3Lx1cztvzRrDHVm2pqaE1GgQremrBbQirSyHdCqxD9K8vge5QTDM9M0BMzUEzFfAAuclJSqajXML979GtWd+/vqxth+e7bpDbrk+nq0pgSs6b9iNNu9LwQ+fpP9g++Iy3CplEUpdlWJkVJ5oGslrAhwDk4J8pgk0WpoIkP3PxzdBj3WhuQG7l8g/hMPBL+BoofcNgAU1zwW3H+TqJT879tsMe1/uQyWJVWQU3uCd18yJ5DqcHJG7FQqgqfQG/G7xEFj8YguJnd1E9Par4xjFY7a2w7HVsbMFBHyg4VXI51QVK0Pl5hE81uZtRvxEziVyE8rN4aGXzfG2Vn260TZs78YLqcJTIaiPzOeEhj3qzcrQ6nM8IN774NLZOqW6LapKooW2MKL5RIHcFjnrSb6MY2426hwkYLguZYEHtqNUX4z7IdEABy38mCi0i6jy0i6Z6v1gCTDwspMfAMhMNHZB/LcpwWjJPJw6w8oB+3aEkrsx3BQAC1UDgRDLrr9grDHr1IdXpm5J0XGzIxWAiIOAAmjY8l8uq0lU3+hGBqoFfCc47bYbJG+wzk9zpMUfB/TmRqkR4S6dqlFSTVqT6S+WRXIa7PGCsaacKip66KukAfYAPw3Xa4+/n465LulXDcEi3pkA2buFLekzGzXJudmHMzLsKtVuDAkBD4PEDCWzdLPtRi/lv6TP9OUG7gbp1ocSKmeYQaB5fK2JQ4KpbPew4n3BuH5emQr5Rq9LR2bldvB5eJkM3UOtiq3T36XIfXxmgenUYLRRKQpIsQypvTfs22FccNNcyUIBnVhoE2AAAAcAsAANN7tLGvXTKOzRrDmSwWJgyhcJ0hsbQm5GocnUaFfnnp1fsEuJqEdjWvj9KXJxHAfeYr2EgLKuDs6L7rplcraPC7WQreh4RQXefDmX4jYvVdN4pjkc7078egho+Zyx98Pii1YT+TG5UPx3KxGkPb0M+nEE8ykaB7LtWKRwpIISN0qGDhRE/Ss64nTqy3gBdDCFutJA3EyUxsUagFPPZLJ/Qp+fDCZJD+743aifLGUT6feuosuTJmuvS4/f7j1Tjl9glHsxPGKMs48jsMUCBlpFYUrrFzHm7mfOlaYjU4CUKybiRrhURz7u5cySLJL21YD6kodWfr4VttpBl1EpyW0psXJ+vBgDoHCr+zUfdTVqE3bqVebaMbpX30rt6aKX8Ey1GBFf1q3gnCLSVTw7AULQd6jSnSFd0xdCV6Dhj6nRvSm5a6HbzOwwqlHNEoMcoTCEMsDVf6uqmZRJbnwF3MLLM7sko/ClGCCOYrFdpNAzrBgBACRIsRWzjkuV5tf7DVyCfd3s7fDojt2RgH5MWxPveNanOjBum2zatZalTEvG92IGK8OjgxlUrK6e3zt3q91E4eIACEw3Aq09cZ/U2eSlmlseJSfLk1nItOztb8EjnESwwBjNoyx9Ylyhyo03RjJuG2qYyc3sk3w/zkEtQB073FSE2pL33PH5Lf41MDkrprbSalGFSXvdH7NYHek3wPLjsxEVGYWez1D9UXojAK8cwiSDM9ebAsrUtWXrajr1cyTQYwT7NTk7f8Zj4ZFE313EzPA5ztOD7NKM3Qqih0cQ1XzZ3mBHq4/huXWocjCeoAL9ho9MGshm3GHX5ABU3zBFVN5ho9WxP08EPgHzAPrWpKzPH6IVfBlltAL/1fMTR/Vk13fPWUq5c0nQ2Ho1HpsHbwvHpgT14gKaQ4TqqM6eGR2hjWJJVnZMDnGx0bWg1cDC9OtRJjnGQJ05Y8u49WFQxzm2L5VYlRZiFzbQYxT6HL9ahovhQQ9xg6w3a0BexPbtosvPQXojAx548Ebe4TZtSIlLjqU6Ytxo208dd9yDZbAp8OVXXqyAV+32AwEi43ahiB4aY9n4uy6n7GfeUsmuL535CJuVKnqv7Grg4NYqdK3SF9YcCI91y9uqWIxIcVcZStWek01h5aieXAaqXgg0X/kOdF6RgJwo6tLOIF7loLy9hK7Vxlc2jDWbG6KzYpLApv38Ofsf/MC/Z3s/NuCArdNxdVvFCOktC6Vq+B+E7ec4CvzZiwfnKv/DjovMM/yKeX8sgQbbM4tFpnsjnO9A9v7c7inCTzBPDhYpVkU+vCDiTFaG0b3qln2ZyOquCTa7x4F8pZQaWJk7wKOGmD4p4sLnm0mOP3E4l5sOktwCUSES5nfbFTOJNWuQzyZ+IcVhoFUjeqwkjV3NAvJrH71wudpadAPbZpV/NxpooRzd+2q4dDkqbwFj5EetIEGXrC5MzzAE8cCOzm0HU3VZNqwF/q4ihUhr4uFGEvmPHatVbajn3bYHxCCKW9hNJzZB/5P1wGl+2CcY11VXhMSWvpHBVkGdFVhp9kUgRG/AcKczbf8dGqt7sKiuisgBAe9URN2fN+cXIZ5ePJmFsR8Qt8xYZ6aIWUb3BVJvSsWFUUEvkkFuhTcBjAT+OZs/HUZvjgj7q6tKnTdv5NJUp9uSr+p1EGFfiWWl1i/ctQpdvoxdF8+/EFA6kCeRGIbFLN8IoDntaqR+iD5DiAekH/EpFzbW5oY0Xhy8Wxs1Al3mPjnlXVHGAvhG9OdvombhcotyB5Hb+WFyNCxIG0KfRfXac3hI3KjoK98gdbx7++pkonYF3sZJ9GSqYHDmQ2nEVmpPpy1gcfYsRsKN4gcUZlCpalvuQ3Rz3m9jsQ+eLmp8MjJZ5Bq6LVC3sr6YbEek0FqLVTrwg7aR1VtymLokrwvxYDcND5bDYGGA/5ZYwJFGkVia0NI1bqOxQjx0XLhGeMwURVa7AEbSm3A9rFo8p5S+drXXDOyYFQdSdvYIOv6v6r6mHK/OEC26SwRw22fl/VLNNGDCxxEHroONoLhaCTL9WAk6BACSCsMFwltywZqTrT1fjRXifzv+KKLknzIVvwv0pvRQ/Albgqe8chMa1AvDCPtO9XpkHGxXBMPa1coAfP7C5EAmCy0jTci2UbPbbSPdyu0R892Dlfvz4i1aFNMmS6SmMpe0IVxw//uCvF9jqbczIPYm1+j2UUeMqEOpGDJaytMGvdQYoGsnAI0BqWoVqcuvAbBRKNRbOVTp/qlUkd8bQ4xHOGVxq3BGLmStDNI9ULhgfvzafwu5DvfZK9VBkEbGdgYYFPX8glxTyBgV0X6jNpdNrvamG+t2mtZ09dswj4zTZNZVQ8f2UBoAC1aIQuNX1nL1vF00sj6zxdeIuWa0OnjxlbGmGTrLFhF+thElAfR9zKRGxKgWLnGYZ4cs+9Qcw+PcFIXSOr9O1snmrlGn7Hc7kMdDSQ8buAZRf/tLNsTqwCTipE33HlUK2BbtD5JemizBmrdFOwX6xtV+E19/SVlBqZDvwc1d1TSYiqJrKSrXg2uLsLOW3lpr9CD2kE9ae9HijpcHpeDebSX3oAhSBQSxtf5y88/RCb88WhY5xhVELoUbmyEhM+pDnmd9WhCerF9YiCH5z/4Jv5H9ylcgfgUdfTx7ZFroMgowLSQKUqi595p26/EJcdbB2y8CGr3grs5iQRZw65YxBVqCa8VAsII9GAMBfkt4nIVHFubtOMYOYhTmqdyjlFRx/McQW9faWVk6RKoxpEx7bL2++tzhO1lTLrp5fUZcUxYvVIhAHkKFSefBW6q+4jM63bqxBmJzKgSzksTXkrRv81brroX+n4y/BMvh9Vxs5+71s4Vxl9huuLPsFU2t/qr4E89RyJuuVmfzwSJuLHhAE4BmsJNnpPS/FcI/EBbAaaHLSNaocxmZih4/Ijqi4eCIdRhPARweaiYQf09byHq7ZyD9/yaXgkMCuDIb3POCFF+ug6goBiu75EQ6oTpvjTfZGr+EeHqccesHowAaOWLfX8GgEDOiSsLZpkF2tlkTsF9vJjj2csX2mlkYFsAugVCsNpXlnPSy0PlDIo+oB+zjx+PfuhN0sSV2C+6wgiZ9TwcF60ZRI3GQjCeH90zkMMXGDstAgMpKBf4dMc73bTqenvoo339cbQjrU2YkKOTg11IByyHoLyvi0gIlG08BM7lJFSK5gLgNp0GCB4prP69HosIUNqhpGMnW8nvN/CTBZCKCdwilGuNyUxxZDfsdkA/LVVIGIPsI9VPm/yvfgEHIKpLbHkysYSnjGDMz8FLHRjeQ0BfmsootmpCR2SL02SghEOvKYhBsCYrZ7C10ptB5m9MK+zolgIEb4GX2c9nBn8ymlyDfRS0s4JTBd0TcKFp+g7GquXACw3hcUAjDz674c5MrUbyMx9YC8bIPLx3yThvCRNPtm6mylFiOdcSYgWoOnniyUCziiNgSXa0ghVMS+UPkjbB/l2juuaDZOYMcBRmewHv5od812i+Gey4JK+g6kNyi7f6ruDx8oYZPuhv6dHL4FPAZyRLIruEZ00faG421Y2FSlyJhCL/Pmj7WR16gjrVtycRbYkpfDCsv3DjkjdN7k1/k2ZXL0f/AWDw2vjnsEfy5OOGFCzujOAS+/t1b1WVs2AM+bEFBmRst3SwwNGPNqPavIEmTPM5thzSLAp8cMMbt5cI0NYXvXMLOLesQ2YT6/jgp7t1KRPwXopV1j/vTFtZerVcY3wbEFWPzktFjxyf43rxM1IjnZAq1aOQgr6QdsoH2qGZ24Cs4q0Zn16VnsSaoK+oDwsUFROtnPiUytsqeNnSspY+XVyteFf6s1j/VqD9vENQ//uy3f3fzhX2ls+Pi2aoroNrw1n+MksGI2b/L12ycZ/0Zqi0ZvI4SBYMJvqlDcAAACwCwAAgWVkX3GGElRxailkALxupp+erzESKlhOGUX3hVgBWfTAXOvdLqQNVGNYc9tbq2OLZzNThNPoLQ2KL6/4acdS/rTjZGtcahQ5O9vOMiVqhf+H7VtU9eCFpyM6jT5bBURy6up7vCxlKniUiD8R0T7+hdRZtZMAGmRgb6N6t2jhByWnJMOBLi0NEMpAI5f6t5IYcAGS7JoEdmLjEfZlG4gjwHuZy14EEfc1EpZ+XQO2JYJa+pd0o9k2h50iBkhmMxI5qdiKt1B0F7S9t7ko65UbodxpXLCeN2p2pozMohyl615DRRdMlsYb4gFooPb5WgeURSbDkc4LhKHJHQgmiPyzv+toq5wmWY2/APIzNQt5vthm1e2olof+coggK0vgyqpHZAnz0lcfcidGT1wBd3iJ/44/gyHZxyv2qRv34gm6ftQwo0D/XBqWuBUfTD68VOK9s4ldMLziNwxzcKTpv5/gbuduvq1IUCE2uuVHzkmxQWEkHbgYH1aRt3kFoYgCvHmL5c0YIM46GJ7ey9Xjw7+SVfkfkJS7KBRtMy6oInf++sxM4PqMq5ocGpZUH5QLfVm9NDtXnWCjBU/XF/pHhmAtGzHDZcism4FkmlS00+d08HG1SSIcT9QWbG2b5XMfXXkA/mBCm/LtqQdp2PH9aoS+4WQeQONhuLEHmnYgKyzuxjvQwyPl5Ptv7/cmvB2XyvjC6zttGxPaV4YAfMQC1kMaMddwE9pGZdydqcFdVC1JHGQmTU5Sa+oqCAQc2Q/LP/uQg/NVx2qcsUatb0smsSeOxEnGlvpVoA9V7teYsgi3YNlheQUpzIC9SEFVfYH6dmowwoS0ad+68VE8KMkoUCP2CJ0cK4CqyLSRIUn9PlodeaFcWJ3jmHfjVyIqeNj/YYA1gTHg+PxShH+nOaaMnQFR7hypuJNiGY9w9+LzM46wFJ/UabVx+lqhAKig0UdrvOLO5s6IiucZB2LIog84PUXAH197w3ObcjUaLNC+kykEa9xbmrU+tt/hNcHBpO15xyh6T+kL+7xZ6zx6PUp+aMERoYutYLl8NXVrGQcIzwHivWtisvQhtyNKWDCX9sP+ituf2QNG8F+kH+WKYoqQLpItm5Phs0wFYnQNIIlLRMt6pMTujTNr0dPFfMkKvd48nvTt9yDFd+f+ff44jE78M9hphNh4/soNC+lO2sSQ+p15SFLJ0nO47DlYpPXMj5VAx+dxK7QWndTVerDfG50h2rOQrWDs3qsA8LIbovKCQJosbQWEOUtIWDPxc9jAsCWkTy0B9Gnv/BbY7oK0D1g6VYNujnu7cFyTXZaXFKN8guLT7c/Hw8Ly1rZ4ni0SmDIDXuSrg3jVKOJsLtGt+UZfhvs+tupuuhrcFj8nau1gpn1EyRh1RFMAldwL8HCZLgXJqauoO5MXeWPhi3qmc45KduLWqHtRux58h2+np35SZg+ABYzjOhOj4g+9IZnN4ZQoB7QsBxLGNf4E87u6XsklQYrPgXeMYmDuKS3HLKE/vbgC6WLhSilASLicH9M2r3MPaf6l9IVFLy6+66LJhYhSoj5la0aX7/Z5AwXD2LfdW6lEV7aKnYjOUI7cq5ZH1fEg12dwRLVmzwLjob+93JfDR6iqzoEELfYfMYRHoCax4efdPPT/C4Y2KyalGaWkN3d2efGzDNWI/bv+wrchaylsubQHsI+PGpqngt2hAFeUQrj9K5RYM87N8QpGqGk40muFmZFbougjZGoM+5AR4GfyQTTAOmrTvar5LltOzP2zFj3NHnOf6+wYFn1P4PLGto8VLEKzQ9qCLSxmvWqnQwSKi2yzc5WtNS6QrCZtyGs9+m53ZXPXnM3/Fgi9lwp82029zNUygIF93CeNQvbaE2Lli21iPbB4s6/IEo3DxauIF10eh4h+74r6Mwz+khFZ97dve40d6MtS5EVBmWkrEbZRTCafdlEXJSzU5YP6/N1ZgsvTSQDWo5wOLh6GNZRyyMCSfGcNCzWcseV1dGUb+1L6BOYFP6zV3sMxpr8q+lLAYKqG9UIeIumtdKebukB8B/NwtjF1NAQf4D76UQosIV6v9Z/zAqgHWnBvb/NxOhzJi7QACXj94b8rEtDMTaYMSMrp8HQXKonwxknT4aD9/NQ9FJr0fauU/kofNvHKCOTIlO6E+1XOY5bLTsD9fhc30Y0At0Sx518OSigU0hedFWxtjmvUQL8ScmpiPwJIw8PQyOoQgs1VaYJcOUuXTAdhQ6u1VCami7n8sOktRmL5U6OE/fQ4UwqOMxgTv4sxqDV00fLHG76dYAlynSeHAtNGx5qeqJxx+GVAdK61htGdVukzyeYjX8blIfYPpthsDb1ajrEcI1el33Z6+TJBrtOjVYbtowGR0jf2oEJu2Vyqxsa8ICxTXKlplPBJP4rRK+t3leEdGaxutbR5n7htvgkggujgTW2krvFGVbdJ+ICYdnWXpXiE4xwrPjt41tY8ln9xH8woSoA7uzGPRitWw5QW07IK8ePs5j7zyAg671I4e5CCozABP3Npm3TsOL8Ij/8RPMaGGqkzPvXLDtEwRZ4b1qhdsMP7EEHn1bygjdY6CooBiOwbgMDLAEQpn1eAOz/GqSY1JogWRrcJIS174HbyN27oCV2ka4e4gXpTL2XYU2RtBfkH5SWQTCwVZWoeaAMiw61uLsU8cec5n6/4nl4n0yIrfJKLgX2KotxvYGNt5HxKIT1hWJZF1IkXjsuDbv48hnwcO5zhTDrT/x08koaVnW1WFrmLtcsJl/uy+X2fHE/PI0MFS69KcJgA1nHmuRpletFlJ3NxsqkNDr3fM0Nn+RiPrWdWvbrocDn4XoCcdZ9DPctkFdcYWbw78pBm3rRTlpWjWWe7TzSM27zLWboK20Q3f5VhktoGoUXjr4jsNVpH2E3+loMKqKeWRl1PLVz48ahKgSdmkw8s0q2ubExQ/nvXrC4cg3z3UP33wZI6hCj3m3YrBJH7GfVBBeabLsqM0DhTwyRbNF7CFQiZIKfueXwASG6lH41W8Cmf5O/cKZMRHr2GxKKzWz+s9YKrk/Ml8r6V5377YdSVBZsx4/nNHpxiCns7eNJsxns4MMbELUxz2kXrnA5YnD7F29we5X9FMfkiQ/qgFX+Pu2lphCYN9IA1KYTnekfu3GsQ0eptvC3QcFCi7I8K2F/nK8KG2Xs3VHATN4wjdDgXbq2tAfr8xQDdyw8nO9G0CUCijAVUluccybT7CgSPSeKVlYvXl17XFCOvUHesdqTHNXyi04D12X0eHa1LSdQ0zLZDWEzm9uW/m93pDGLqgQ4NBx05oH1+2dOLLdr5A2/t94+2AkNojdgjZmignB+q381DcNVMWd5Sh9n7SViID0XBB0mnHjdPS2xLMpSoNHsL4dR3ns38t1+KXbLmS3+aO4VvfUj94Xt0eED1AVTXh8aRJRi2HuuVGYkFWjzmXKCQAi7uxzbFkUhjPtSNTujWFwI84R1lqI0x5cdY0tWVcWFyWL8FYwn6mhBniPPqXkbFNyK/+EYj3yqoxpq+boDV0jiokgcZm77dqK4hQ653+fx0GY6gCc5+mgpQNLKQ/Ngfx/2MKJEWAIqD4v9Mt4dB4FEl/2wJHFISeMaCv9IpWoV55DWNUW7TT45oa6d26cehhrgeJW39bWr0diHHN78egUCKpsi8dPJ/jmDELxTDisTBQXDz5R7OjudRzfqjH0KpQAYE8+GPcq0XiLoFI0uUZ0Y+X+p2mZh9iu5wDMj0mucYV8Yqlo+6rdTSWZyr9MZIFFEfAjIN0RgQZ91/xqNsZgwU7OxglledO4G8+fnPWRMlDApa8JuvPyiR41YqkUjdlJvmOeCTAiJ2E5fIv5lIlprnp5LlZ44YUt7O/iBSBoCyArt5MYK33pdST+pPLgCzXsDml0Ntq/bH+mui6pa5z12BFnmaGHS6dR7CbGdXp93z7qmIrCGK9h4zlCteoayeJ4LCrMinSII6uEjqxmoKDx1tNhnJ647omxYOejgAAACwCwAAYNAdgxRXLZosJ4ua360HgkUL/BsC7KRGrujItDeHL4ZgxN1fbZKpu4/V+lomr3iySFFnSMobHZMyXUoAYRuTbkkxnYm7HqK1vsUuUtHKIO+NIgZiOnAHzYkMpUlTvI+QHX1EZnbGEUwg0t4uamNbRlUnkBbxvHxrC2EwRaW5vId3EhL/DjxVVpDgusldK13ecoLa5XGt3sXEj0z/HGAjXVLHItWj+bnWwQnAcFQ2aygMw3tbasusoKWCz4Y9phIrD6sgROVN1nBrWgdeWUwpAGwCe1X6FFk01DLTshQK+b8fZGtN+a8Ervd1ppVb0f5KMkRhwKJf5hJWHFgd4z1TlnLcI78B9WtT4osTfSkUSApaG3+lYdXZnJzHSp62fHhEZUEADe1COTzp7QdIsNwlQacGCN/x8SBa0aBN157EmX0czmHyuTaw+ofPf633JYZbiVZnepdYuJ3BKbFMeT8P8HG5mBDWCC0TE526PFr3nM6vVvienIYHNeXd5es5vdM/DmAdGGSDY4Nh7WFj0nKIl8XUT+Yei4ueoBAts888JJ9ySFCl3uQDF7DsEbIUxyj11sSeO39qAoAxEZ4dDH1w1iJyp2oemVVa62KyeSgwgwog1jQBWozfEuVud1rj6FPOfFX8q96dtT2gCwoyk97DE/5783XlTjRI8hoyH6JxMdtXt9ROkkhnqWeGmSiKqpiW5qY0LVoxEyA2QHJrEkg5w/N/XLqQ1VmVv90KeftYaDn0FbeATjr2kk/AE2UOXfVvdo9J8JBL3A9e75AhX93x177DHcEWMa9HaSp/FYzwjs633qw5flSUyjGLzyDDmA5TfzykqJ2l5B9BL335O5pWzY4Aa4tKvqRH+n4vPiF/53hXyK3gGV2vIn+NAmD3ivl7Dzpr/heXeUL1Iq3A2XCN2RR+uqMmPBs9a9TuN7Qi03NUUg1zFzusMTaIDhj+kj9vksiNC4UyXtSikLzq6CYfZT+ohwpDigweuQH7+jPh3OPrUSpFOXo2M64pbZHsgO5GND+ZPJPXvu1nNLFpVI8KYLze+1QrvBb/k+M8Oq4nmMf36LW1kyXLyyyJJz1iIRMalstOWiPhQKs8s1Vu8iS8iZAMyaEX1sbEGFXwqxSKM9cym956AYY4BiWpYP6fI3UQFwuqa52wlBpQcb3R71lpH9RrsYOh32JgBvoNy6dp7feD9HscrbzIhFgcO8DxqWI0xd83A6re3f52qXKUVFOv32VcJ54WSFHnnMHTpHBHGf56LFP4R20KyJi5JmU18dx40jAa9IPgJgTm5Xttu9usxsJSQqpPNHgHT+vWDHCSITfHLCYR509jzZZQfi+bKQm6hu11KmxL2G1w0hfzuM/Oau4/9vw3cKy4ITuzTExG1HfYF2jAcK7Mqs1nqcry+oSOKFjB8l/DrgbMkDKKXmtFhnYyjKhgGDu4naIz3fZM4HIDZzogAOXLB36hzki6RNfM4eZkU8kNopxdLjpFatqfJh15vuTU8e0XLKstHYdxlYZAHMiR6WSHsVr8Bm3VJF6fjaY5RPX5IPemJwmYQeNKxDg1sHl7IfBWOb1NhHsUi3qrDvVvuDBxPqczErM+MVFwm5y0NcnHjoqxM0rvrBD2J4cHf0HjQOtJjzsNwDwkc5fNWCv5Aa+L39g7VutEqg7MhoAqXc7Ayj3O2ZxN4cYn5ytXxGoxjsdqJbXajQx2ILorAVkG9KxnZEpfwETF1TvnL/9OLgbSL8wOfauiDWynCky8oBOl8KP1YQ8Qi3f+l0M8flVLj4UXrwS1AomQ74S3PhU+Wn8HISWy3HhfqK0gx9ISORJf14ytZzRa4MzeVcPXKiP9JXXq5l23RyPI1yST426KQGcwENmiBJ6QPlxpXCwyUj1fAJlwAmmxFh22HvmU5aIuVmKBSfHQFyNdfhmYwOOYzlLKWhM5y8ICVmoRvtj9Y8HT1iaZMbEU4W7HmYTcgRVj+yFV/KXAgGLCPq/cCNWiplcIWBolkb+Rr5zhjZxYdRhueNwTJ6K+1eVGvEqr03pq68Fz/zUBqh5V/gwsGVeLLuqlPxeAZXBPau72HnlNrsh+hfUSFzGE9uEbd0ipiaaQWJAh32ZQvThkq2rr8Yzm7szCkNBdTLBYJ0W1wwOUx+mJ+HdheQ/i7r5L1K6FMGrzakVECJZMZix0cwnw40BVAjSrsIEYR6bpvPbWqU//6r+DkP2SDMOo1rouRGrW3d+mytYq4PyLkO+nCPkQkD83oTgjm9FDRcNF5mu5UTspXnfdKaJGRrdg8hAzrsRwiDTRTUL6sjr+BTFesr21N+wQEm4F5nXmw6T5vsgUjL83SJMx5sfvXoMb1u0J6YTPH9hAyeEQnjq99pH5lp3j9nNKh9AlUUvuQ2bGWChUqHldh6/TOQOEQlYAxdWmuvJcBErxEUvf1kVKkA/gxldxMwHDxiTPKlaaME4+rjO6QnAV0wiEpg6dDxFLuxboUnMmz6FfLksLKlROeqMazhEvvR6lTCXM00lskVoUGReVFYrnLB9vfM8xwJSvBCY6C7wu7PNIIAYQjVfT0C9tYPZzRmhRovrb2VEgyhJUfPXBFUpOeuQcm1pgJEoxjQ899ytIXRoO+oj1/nS3ISBnTTM9iXXewZvKDMqzMxIU9HK5QxVkeOocL42nIax4hATHpYcfERbRUeNaeI25wcTWyhhEYMuQ1VqSlfEnkB4NTFBJytNhWBzI3tRL+QgXEXi0JNeh7wUEIOv4PdP0DapwKUS8k87Sv6m1UGV5u7/lli9pR2BfUMS2flwRQVgVpHBOay7pH7SP+gYUTN9M3wNDfVNnkQESxZ8BNGhCu1rARG5pDsxFnc1WmMGiqy4KRapgCg+7hBzX6nm97qwk3GSapJffHa012GvYcjhKNNIbf2KpVuAqvumlvlgq09MnJ1Jdq1coXHkG3Kf5+sWitgS365MSSgAuimkZ4gMBnk8Ht1kzUB9INxpnjzFRUwFIoMhr+dVu04TYKG7HctCAQNbv4h1NOzb0SwbRHnIyyIEHxNOKukXZRc8jI3DFAHcozcMLvQks17kkL24SRXBNjSdE8E6RqOg1a2NU3TeB94xkUYXSjMYk6yHuMI9mDfWhZvmsVYBZPc+s3l3yzLq5ZcER5WCrvXfpKTTzjcaFz9AGt+4GwKMz/+1dQeIQ9gBlUZaHJ5HKFK26SQc8GoFRqugXvEsemcPQguBLXogONWyZA5WxPtsRzzSo9QlvHjmlXu+DKi3+1QFljyl9S/XW3TjZZmV5Mky5tSo/vpquaIzCNmSlla5YMj5UGTFtwyaLq4T3VGImupaxvrW3//6WSPTUnc06XDcwvxpC9CrViNDg+io7hM/lmRlWU76b2yEDZLqnpR1XEGhBYzaOEW5Iky3jF0WF/NpmIjsav9y9Z2AIifDbuCKGScu063eUOmVCs8TJJu1e6v4b2nDgFMMAzveh0t850Y8aRI4N8JQbN91D/IAX+LgvpQAHliz0zsH9H64xVZpDtMD3V0oUNiuvVt+boM/ZKguob4tmRWWcgqxZnzpeIClj3fRfkOLaojvTYn8cLP07qqp0EgTfabUpRAOPy3lXOINsiiVw62/YjZheoYpwmBRPnA1FhL7N2hTK8zWnkqCjenilsg+F5p5zg+KTvBZAU2HoUm/XARvc5rcngqQ21+YXo+CB5sgz2cYaAeM2BReC/jQO+VZLSf8nhozykPtwTw1plU0s2rRYYyU4EDPNtnfQ2Tq391nWvjwA624SiacqdI5OgAhVMdCcpurbJr3v9UibbJ+K0xq1dX56vLwFHR0SUWhsexZy4X3TDscum7A/paabvwik7L7vKNReovtNQZWE0COViAUWORRmvPI5lcnPZOHtc4p2areWSIgYrJMpAfw06XGrXDngxwQ4kWtgENh1o9n3ebSwvAS6dOr2yOQsDafcfwEEwBI39Ih1KDA1ZWjBPDu09Hdqsp+mDm+pMhSE/lZAtdDB7EBFMS2ekwAAAAA=');
