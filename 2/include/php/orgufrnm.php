<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAAAABgAAM+Tnj4HeTWpxzt9P7HkwfxRoRBLauseUywdTaNT+E2slTSNgdTiswNrd5DuwvUAaixY0eOqlXqDOVPlj03OjzECNsZ986mXY11zIwU3YWigTZdWg8cCdQJ9ON8M+7I2WsI936LfEidQj8sXdciRh3x6dfM4vpc4kkKZER2MydI1Xaf9pg5uiKKfsCqTtk/fLN86Q897/+9y6YZ0cj4T8YvNOIL90BBv9diYxY5gFSfmDhTzA3/1D8qOArwe0zDNxmpamHfq2QF7faMi7PrM0EvuvdT3OXxEq32rvHqqqqrRkeH66U7nFah1TmqgvVIiv5ksvJFgdifMYNgZDzpQ/Ff0PP1H2Uq05RRM/UeTraLwqVAZcI8WPcQo7/+1csFMbRpn7UW49z3ozbzWSOpPnfqbUST7HPtfP1IUWAKeJ2HIk7kCCOq64BlE+0GW0ne9pK6wI83LyFwCdzSs5246Q0mnrZu+AswclBWHYFNC2HfbY41s3maimJpisgVni6KH0u5w1c/D4QZrlC95aa3Hid4NfQpggSrov5iaNhoqPo7uV/Mpw71DB7cPqpCshtj0KnciiwTSciPLLAuag7f10kQLlhLFXn3TU+Fx3FskqFykKE98uU+1VoradovP4dlwcF6f+Eq6iX5rQMl8Ohj0rUdjgrqVffl5m9dmi7Btuah6HvKIr3Si8DzK2BFNJrfaCh5HHRor81QjCBY935LXJ5D4+CivBa/Hs5X9gN6tAjzL6re9LuHbjWw123NaKNUfWpvPOi5T+kVQNW3MDvwTk2aLU0JXwZSQJPvmWWTcuU9Jhh4rmDkcQSNLpwjUA42Fns+E34Hkjb05AucBCAv+MrdMnDIIlLnJ/ueB8XwP+g7uIZ3IcaaxMWCAZBR8UlnaNRSDYZ/vuHpfGzLKrDwWFOtI6hZFfF75mTvMsizUh0G4em9Dq1yKK290CcTu6UPg5n+1VIVj1uilG+iiPh0LBUtJTtbSUNjKlzm+jyc+urtLsCWy8haFo7Ur5jKK5nKNHxaxfn56ewLPqz77vOVa0NdktakwZy9YNcqoGfOuXXcBIiaHGlpGXXCdLSTZKgjBGz8tzGEoDSNOGMiMSzcmMh+s6cXxQBc5u5U+QOC/pVadyfGDjYlH8JvMTdbyN2BU+ri2OsNVc+YBNKhtssO7wd6fydSDkJpRS/fJan2CXJZ+3LxO7fu3iWLkGG3olr5Hxt3BgyTn/Ci+ksVG7AtatA/E37OjIrrusmxPr07Bi0snsjvpUXSVmOyrEK464OsheNQBJFd45WImTehKkNqZDy7C8x7zdSGZcapxBv9cT+azA5hf27xqjYUQg1eZD/to95n8CDF9+MqAXHMJo2vCnMZEomNANdzt12rUCfZ5zs5GVAToNiTrE6BI00dyAicb2F19D8sOCwqJRlBNNSn3us7fvzlqXJxBS0DBvCrKbwH5AA3h171fPmzu7GWGQNO5fcRVuTW6XR1JEESi3kOclt3B3mMedO9693n8Vri4rq2CzxvXJzbBnWO7a56xY6MoM4JFoyesRKFE+nJln+395eOPfPx7GjeyuMTYbMXChKFVn/S9G+EbLxJEBq4zc5ImGOsD2816zqah7MZFBvdJEJcb2XLwhxdC45cMJDbvoBm3e/k5gKhgEMeBDZQTExvpKCs7fZsK7ywWsUcI4UWr1lxT1szGAAkMZo/3wIWXfisYvITmDPnzGQIvhQy4yuqCNQUk6VdHUMn2yUBu1fwrD9J7LDvV9v148dbZZ39jQ9gamuzw1BR0UXFMrK6lgS91+k8vIAewc5eXx0Wr0MeLtiQTeZdHngw4EuQsrwjNE+HCLSehGBYHuMJZsWMixptO21TnmiaTaSBGJeH3l/6qA6WuvrcPhNrwOfRSZGEeGXtx4y8aNrQbGgS1/zOKHNbdX3EUgIlALpOz2SdSX82Q2MwE/wt0uYPMsqlhopTxWHc2K1j7jssMqiZK9o75/Uwl6/gG2DkU/DFPJUF2bMF9R772QhIz+ml5ICdEshfyAFHeK6IxMQYiQGXQ+2k1mO16LNQAAACAFAACQtVP2QPZKrCbtaH9LvQaGYhmt2R7rn2jJx/ze6aFtkuTVFT7xAgkrgyKS2sdxx8JJFWm50tRwDx04VywdMco3f91R+4xulBVaw1ImTpV3gpOUYdZgEBEZUiOxbbK5ZwifDmkldOe9YpU92NvrS2vsyGmnBVXlZlYO2PZvUCVc7AYHiET3m9VQOLhGMfrOxp1pL06UAlj31ULkE5ZL7sS/m9ulFKrY95M8rKQjMhpcGDoHpeElQfbgADgfaC4p2Gjlvmwa2gZfTJUASLLPBIJoiURhD+1EV6R54AgEmJMaMqsjPwNZRm31KNUjnVLp2J3UsC76FYrTzDla7SuofR1V1sdFBT8HkjgYlK0WVnQ2xp0Ngnkcboo+RHDn4yPGUc8+OoiInDnhWr363ucs0N7NwNvlPUouyqM1qmJB9OonifYzeHwALKPnWhhvGyfLrSBu8CXejZtGPanIoWgqVh2/x0c/famCaiiE231+9/JzTja/7gvMGdwHjPqbZ091FoLpfy+8kfPnkID1uO/sshLnG1emz+5A+Wk1LWtOr425IfJUfdD5ol529K7+AuvhPiO6e8NGMhl5ixzMX1lArB+0Ag1jBKdjvyUkf1H/2/a/ySOXsXhZlzzV3Ot+j0wX1wC5TogfcAwzpuK3zSyickAmqwSTDWlXpbFriAySAmLPrZtjD7WhY1PuNAZdlF7QGdP0zK2W83dITENU57j4HZg27hG+uwWjo1DFYuiBjVnbf2Oj4mXC+eaPROuXussNUVN7rYXhyK9fL3yUvfpFgoAEbk0Hlu2Gg9KPsmhGMUzzbTnRn/VcWLI00KY6kUK/n/TTkbYRCzwpwFg+FfMa6dF4uJNUvgL+40huVbUM+VKD0gaB/nafE5hv69xNnBa5jCmZPAsZZxQvM6QA9tb5Jyytj7GAtvWGfutVixSfdjZhT03GvhFtV8FCjycBEXcICYBtLmaCVcpXR7UML6jW6tPXqSc5xwr8qjAI0a8QhXRqiJhqZKah4iebCNDnZOACKASIo4x0Cw8cXNREy8uG9tfn6TJBqkypNTSslmkjYVVTKAawucFQmy6k8dfFTUPZdfi2n7MjkB9CV6XzkWGbvHhDKGjFo7kIzS0FOnLrwyxHqCYzxHrVIRJpgGc5Cbrk++1h/BTECrEZVK1FTkB3u7hIfn/iMWuHfJkDp39nvV4Z8dQpL14bE5Hw6AFQ749O0kGois5GF2tAzI65x72/dzvEiCLqcckUVVX0Eq6EqVZDIlY4IKJ8ap9OyFjc4ZjSyB+0LFzCuSAMyqEkhoXHTAhWFHhNVd71V8py8XDHr3aCAlECPOqgAJXQs8G+O71swGfpJFzqX5+H5r7+zpf6XpAwX83MBXM5c0cbU+SiTTXz2BzcFp/YLvqO/oIWdhlRxFkzb0ZnfW0XpV/CupoSM42w48xDLfAcS9mIkN7TtFQOj4EWS8Anxcal2ESZIwBZDE2VfzoAqJXJD6K314K/uenQc+dU8u2j6WOnkw2hG1i/LSUcrjHYdVO6JIdziu3WG/NfVeTGkh1UipgJM1OIq23k0Xck4qS1NiozknSdzXaPuK1ts3AMfSKkuIWtyGHPB/RGdDGsQyNM4qqncQ7BBr2EJmCvdFQFbgMhZWbybmhkczGuwy/ljOPZTXd4wCLVzUPPp8Vx3j3MxjEQB1tkNpKkVw9JfhdE/JIn4tNn4PCS8I5wlXG9zn39crEfmaTyM/t9+NuZvIgMII73BX2VL4YvNgAAADgFAACUjvhXF9DPGXu97hnPgu0LW5kgTxDlvkS2iBElC8R+q9H2Q/2GAhTuxjX446Itzzhb/aBDwp7KoTQ9N7SKB2jURJrv3snkrI1kB9U+fxDC9F4CKh0AuGVrt3olYkGKBfYGDPhlX8UrpbXgIgJSX9FXaRLctTrUkmH6HoVeWw3NND7HNgZxgt+kYnil0tHUmlMdTMPyowCvuK7GAZVDLQbOQTMZQIlHyJjAFIFYOjhPutuNJPXaAfBkV3KCutmrf284oBKEA2z4KBzO5HraWj6oSxjHuafzIGwiLr/PDxKKD0A5uRJOMCnLROU2ZbSfLIcyUHRed2ld1+G+sfg4Wfqqh4Y2vnwo9Iwwcl5hkTMZk6kUVqhwMPiygjOKfR115yfErB92FRRfItXIJ3xf/nFLd4/9zx3+uKxv6NYIFck0MLpnGJnCZCIblpCcsvA5uSkjgjHBgleP+zpPh9o0V1xXq14q54JMuiYOt3xaVE4z+4Tr97tuXrolqkioj6oZ77cThvEkTLUkBk6PshJwZl0qAcIXB/P3Q0SllXbXUeY39hMQYXIAmd7drnp9bwaBLw2RfnZJujEuKK9bNv7vWT2LQu1Q2aoKS8u+F9Xsvf+Zede2XDI1AMJp0cJyNsR4dt+Ir0De1ouQiECeItLO4lR0gIrQ7t+QHG2u+mw5ckj10Y6yOOJK4o52tWLz+JcuNULMgrwplyXmmiCS9Yv9RA9WHGHEmZV3drZscvEZa/PhVDUD2XComswbpaO8982Ij3156LFeV13neNuh42/KZGnDJ+6qljHYoAAa37RTW2ZdpXKuTdz1ZfQNdS2+r6SdKvcVM/3++SZanpqY87KYkPmioefFVIicRqFsQLsJztUxW6fTpyblmkf18DwkYCvcjweI2JYwAYbjZXsQ8FA9n1WmRIDGTlj/0IcuIPfv2FCRqpcsc+fmKUNl1Sc8KU3S+OczEGbDEKTi2UaN9t79RpVZtnAUHBFa9HFwon+HurFfbvhkqUeI+GsTFXGq93+ewF0ea5HCLb8RSe5tfVRUIs5kKOU7WgUxAVeQ38AMd4QPpvcgL5myIO50MT14vCfNYk3lQNAGBZFdn1GoqGTvkSjtXAs6y9Hh61H/xcgpA2/tdAWA9erfWpTKwvx0GOvIGJeblyX93duEXZwsFFXh6URyLxRMYE2q+6hOS4lnKNMsxzuG5fTn2j3xy4hgVfCzMGp1aXtQURCwUxC3MgDDUnmUxz3Uhw79dzOAtb0DbmgFw5Z+2PCGd9NhingJeOZakEf/yC1Eg4z+pPZ56+2BP+XussNtsbej3bP6gsAQ0/QsIGjTKTHcfxhsoGVuaoOGrEDqITQtLGnBwedpJcW1audVFvjw+26CbYqsADqLq7rNrArgQ2kDoOWLjDyxIdkdHQ7fG9XA4k7Mhw2rQJOqHyE45I4E3oRsD2SZtnyc+6YxObELj+aWObOShjB4/S9/V/q+lb6/JUAGJ7OQDWcMuGDUmoRd9G/xjxJiOsVdc5CXWVKPoZVh+zcb+4iYgOvQpha+xK6WbLVD+ybK55fpffzpILKZ5pdP4kX6WKbC7u7tIatGugnzTOUnqXeNMPfZrPdypNVmI9RMT6R8UV5XGpB5qbuzdiXV8l5tNvNyKk6kD9xzk858iq+K1Y09Wxy+L6IwC/jaMApODO1tgJAPFrBQIoQgg82z7ppIz4cjt3/d5GailLwL23ECqjIajLMymI63qE1o/kbpTXga7PRXypsLy3nhzKXX066NAdNHoYRsARxPyx3jhIN+NwAAAEAFAADYUReeJNr59fIF4KfPDzSKz8k8HCrZlbw+Du1gPgId2QAQpnBFZw4VScnrmkTxB3xAHUhF0l4W09boIhwERA3Oy7UxAsb7ppGCvWhemwtNCX3FSl2y2kV1fr/1K3KNhQmlhVxsZIcwtAExoho1CU4LO7JMtSSr0dWwyud6zVak89z9GK330qIj1RjauIP9GP41msljnMz6tfTsi5FUGqXPx3INiqa+4YWsOues3LOOqYdYXPWNltHi58wh4xvIazb75z7YG1hxHR0Lc9udSTxNu2mkZiHek0vKTlAe5A7OAI9a8kMP2RP1mmjv71eJW2rg52WzjeuJo6RRdWCQIyITwhCg6g+JRP21V3jO8ArbVVnLUHh+MBqOV3b+53fyYJ9MqiSF02g3B/DxYKBfszwl7yC4l2Ob7OqokiayFkPD237ijuFX4Qxg1R7hS2UBx8wcwXAhcELydpQ15eBzD3UJJMtlNYgy9c8vSE2/5QZaHwnL2rvGcgPrAdPXDNCQ2/U+FsvuxofMwAuBjr/LhX8LgzBINilAUqn/259j1DuX8FG0DtTscAFajplO4l1DBxEW2OE7KiiC4eudBy9fo8Tlt5WwZsE52T7jEL/Gc5ErbflgwyUT2Vsd1rvNuRJmtCyZWR/6cvNJRDAIVzPNU5IQXD60ljiJpL5DNM9o6eZgpdgmeWdMLlonHQqr4qDOWgXV+SZLvdxKyCBABflJzCwHCYCdyG3eUoyXiDFs6tPEwECbLNWzbHJmeQSxhjhdHnI3p7TABiRAgmfSQSnXQFZiour66WrLM956qy+EZz5wC0uqnuGqVRT0wExWxdhRVRPlPkr/y57XYr66UhsjsoQIy3MMo/8cI49UV7EoTA4nof4OQqipQY+jRE6ab+f212TuBn0Y8TCMGbBWfqWt4UYGR2q2tkuaHgUdJbW7xi6NMJX/MP1b0Bup2CRRVvpxLtiY7k3Q+rLOfaKuHohUBj8ScTpJovwEQCZmTrs5oUU9r+OLklsTijTf864QwiGxe8n1rhvBZ3QPT+ZIPl4QMN1Ex1jIj3ZUIYuOxv9/3jPfQZ4S+5M57JHiSJILrbABqWQJ1fXdklkB7M7bDDsCQMLLx4giTfNH3GNL75SEsphE/OsrcN9KCVrpkLZbLAsoYeUjoo7PS2X7Mej7XkDdwpsnpp4R273KC9BMrLyDLmV5HkCy5ndwOJug/zxqOBMmfGjlOD1lum88cBnrRVv7P93G82mYVFZjdotR82+4qlroegrWaVIxdz0oc8zvZN5Je0RM9gGbuvVJeYsLzgBV5bb68Pf+nB4A+LgaE3uWKxlOW3BwZkBc1Uu7una6TGx3RX9YoFWxwTF9ehy3uwAMXUiQl5DTJXJoYQZKe6UJAxmkkDRl/RHmp8nPQIQCXtgLVhYtLQyTZO3pbSM9kYngpCJ91o02kQKSNRCSoj8J39OO7baIRXuDF22vr9wv+DcthNhEDEgV1GQlgrAaJhZuiBfwccW7W3GmuTWsr02trLe9oqcAA/UXBs1ZV4yhHuYaj+Oima4hF80JuEzj59KiBOya0JiL2DYRihqZom6DOEVcJeM/2DVdWA73buKpbICnGA/GcXbQRX3KGuiElb5B00Ftsp8fnb83kGPUP1HHh9N2ysHCDD5RnRBXUmvN5gRxhGwj5Kk6DTlYfJgc2RnMdcSf9kIX3reBI/jzuk2/I+RnR+3kFF7s3cUZx1ndtQCXV4RPdMtc5OksETAhquYstmemqIS6EUXOsDDn4m9WURJYilKSNCizU2tvm9MOa0n5r644AAAASAUAAPi8PW+D/NatQzjrKXVlqYvAaXZcvylH9QpHu/wbGahlZN8Bj8Z5Fs7jm3rk7uSF8e470tzWpwcoSeo0QUltgaxuuoERbJGJwV5vBd2LMaKznTL5ciE8n660Y1p8/L6HiRA7FQNnhni786TOkqchHON83Ir+RHeVUXKEJrUgzuoEmBJGf8Gdf68/DmnntwzwtUJMSQCuWyoRUzXp1KV15W4IMSHbgNatTrnZjvhJRaqHl3M95/ejRYmhTYjya9XdaQHAFtj2sTcFd8gB6nBU2imAQHJzlCnCBickM57eSTKo4TvHubog0CQwLAy2VVzw4YxCjUIM4iZR+Qwy1eMLe6e2gv+zTR5zRmCgvaO67woe48e+TH0vJ1EhLjBsOC4p/Zj6Smlw5jLN312OGR1dUBKwhso35COWbjJ7LX8s3ttlzUCUJTe2mINTmI9Y6kHtNFa8D4y4nqiSp+VW9Ur4ukfW2HIOtCPRtNg3fD48YJW3NzHYwU2+6Lz4be5mKSlda0mkfiOZAeSVu3sWuSlv/REvcvQew8o2CWtC0ZTWT/Fq964FN4dFUk9fweIEvEIe1iBAQ3Dz09p85IjcCXiPkKD+saqogXMpgO72/Yr440NfE+U1ucMIAobK2k6t8cdsWPO8vmb0wTP1+3mqbldAPT/HB6FALLDJcw/NyRMkiJioVv09c66S3dEhNFIvtDgRZEyWNm9E/eaiGoW0aVOsy0ZRe3A+KNRnQifYxAoFJD+5H72dwsdc6EDu83vy2R/Q3jb/byZsAY5J9l7XjSLZjxTV+zpidOWjIVG+8Ina0nq8wBb+PcAA/jv5ebpdYSUUmbsxwfJgv0QAXmAqkjFVOa3nS7PC7BAVVv5FOb+/dfZVg5pfmV+zS6aoVSfhtkOVzJK9wG+iknpphAWL1zO2HnQAWzHP18nxlAG+pkwyJuRgxnxICsS1B9NyrPg9VQWFrM5TWb2809HeBv/D/c5YMHo+By89MGt4/w9phbLub/WTOt7bmOye4zrddsAaDfWMnBNEIgkUWMypOhTjMVQX0R3TUbVIhO6chilacXw62QL6w4Uc2xfBHwujncH2JfcHPYS4Wgoo4cQUDDUXjyETnAz4UkQCbj6R6U4nRMTboI8QJVdFxmh2elyIw6rCcL+EKVoqrPgJS4nxX2f+9FJ1QWwNWBKnggT3hrHuCRjjpb13MtknqK8zJ87L4T1dRZ4zrfWM1paO3gR+hotmZMcF7qVyp2Z4J38IE6EgZnTCD2CfxN7NlQ+Jp0wUhtHhBScEKoY+HM8QX41QqLx3ctVpgjm2tUa5/NFAEwRvAGYyfY7YctQFE8xDA8XWiIeMz0ChHctV0VmZpX/VVn6grGeyDOHjZ5NdJmLoIf3WLQ+UkuU0plO7k/I6n4+KppIuIu6oX4f944hMhKXXWdZqFhz4ZO/QLpFOdoVCuQLQTXK4ISyyoV6gt/QbIzF5gcVWkewX+QRJ1qUNNjM3j+tbgV72FgcRY8dvvW+jQlZ1FewAAYjajZAPHf2cZiMyuuM7rIGKaeFpr4Kc/jVxbHSQb/AN/0gkv4hNo/1X1vVDOWi6QG30jkT2pkpKEaEjKyK0ePcpvjSzg6Gdv/P3tB9EuXcdsV9TkeUcealVhIC1Uds8RzQvVgA6Co9AvblAWTjsub1QiwoYgscNlmcCdH4NYzucaPsmuuwvq1PQM+qa32kbUcPHgQZFUJIW41o6R9UX4Yc4sjaPyjByeWIeGp7dqRf8JqIxeJCTFS/XmKcPyHVfcSLx444KeCp7c0x4/CXA3Ypf2PON9WW9kAxQAAAAAA==');
