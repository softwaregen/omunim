<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAACYDQAAoCNu1+xoeHR2jhFZU0F8D/8l1kBWrEoNPAGKdXbp37pj8fPv4ngR0kDZENNhro8cj2cAwCL19khA2qZLa907B/iwTnG+eifRpqy5NoSGRjwhNu3GvSe/52YO8gJQ8paeTgvpGuOdGxj3zmKyFlEFjw9lIziVtN++Lj/zaekoYpINC1Enp3oGYFmHh1gyaKx9QoHEsQ+dvbZbd8xPKa6O45xkVIjYzVEL/Ojq3frEAcaXaL+2xiBd6WrdXYTmfpizdx2qv17ZCWqBrCRdX+MLC5y9wfIO4Wjzf8+yvRV73ylCWALrkP4TZZ29Nd/bTFRzZvo4CE2LGPrTevMrq7h9XNbHx2c/eyRTOEpYxOFrmmqxzwLhCZPDVCiXfC8ZjlYAMN20eETqzJ/5Rln1gKXWX4w57O9455yoaolMhPfcYr8ZDeqtEZclPJ5/VACp8fX/O7rHMPH7wHwyS2yKkQGXJ0h9wZP7haS3mXWrWzVPZV2ydORWMUFKAytz61nz13+RA6jqZx5reXWFmqqxfh52rxCNR91DWmKSpV4sGC8zeV3P+AFRpzSXid4Rnqx/3YFyUpNr1uEsptQ9YEW6jTGWBhmA5Wbi4gbtOTS1uzTAJeI5vV5eRQCQDASe9XzTNEv7WUqjxsuQ5zh+sJx0Dq9XPpQEe7KT6Vo1xzTTBXzYLPKOyZ6N8B1wLTWLsJ1FCnP6WkiW/GOXnPmETXJLjaFW19tbgmytaB7biz4YWTT0Paix2noCqMREyc01iy6RIvwCCs6K0CE5bceBjgrW/IApHJCl+3JS3ajn9rRrzXA4SfU3Uo+aXyHH8XMLGLsZ6wDMzwTgBXyx4Bdp7m2OX1hgU6j/7/z+zkvsbu0djCTKxEDZoDNkFeJdb/8I71hOqvYdKse9X2iXQH4tIlFnbojO9BP5hGEtoz8eQX+2vNjQRq+bfy9N5AvbFF8le1CBiZs1+jihPu6EquUnWdj69za6raRoAQybeBY6IZVvMytDtsb7Wihs8DdhmdApz3uQ3PdTpL5fxU5mOHHepeaaLrl2i9wKoVr83B/6vm1YXNG6Vh20vSw5PupViHA0to52STV5iphC72unSzTYABYeUhbaMq6/tM39NImT1wJYS940hJTgmcYoWIk/Wuc4fQiGfQIOvgN2Kv4F/fQ/UEJnv6ywexE3k4/S4/m/rVRVHR5soaY+95jAnQ4CALsxaoXQCxgR0yJ58LgHLmohfdzqCqUT7dKuW4Ed05d8IuNAxK5qpc1B23ltVqechmixFk1TvjCFTLtQemYeKQcCPtsKQSgkNjRemB59FNENvp6hPGDuRB28UA3zfN28ZytK6uPckCeDNM5LtXkZJy992Bd7/+yeBbyDBDa3gX9KNe32xyN0bZk9+SP1OjeCnGE8Ktc7QTcPqqiuRYpVLtQdwqq49yKXD4dZG5tq0PkMIRAkRQWjuP2onnlSwDZ9ve59TB3jo0GC9VsQ2XodhyhICCfFQRgzfLJmMoPiHlLuCRn5jiOPGLLbTx5AB4uuBr0aM8IDCIfs3jJg2YVSTJiqop7EWgKLzbDqpjnZppVKMxTe9FOL0OSQgdyZPof95qKDBGwQ/oA/UARcR5KKCtZINao2qoUVRBw+4VqsQZN5iKXX1vsIwSv6a/NDHYyRKIDxCpOzQbbQAL3NX5uL6zmEVa0Lp5i3YG2pnumTQfXukTw8Jw+A0VBvR9s/pfbRCN3jMdpxZCGKj7CQuvKy4jgqhzNr0mQ97mwwo3oVxp+FGn0tw4XclEB/0vSLmS+OQwyC+fJlh8mb7yUrbtj1VaOAk6VnhYc2gYkICtj8keb4C5xB/3mPLwTItDg1EAfopNi7KELJICe7nOAfDYi0echnPIdvFwzRhU0oJZQdWBeIbJ6TBRn1xovhDwbw7BjLO2aR4BAu7fGGCnqepFDd7SaJjOBBX/nsqCWWF9cQZJOe2ycF20cAUH03P1ajZSH9oO4CU2JzuTQQ21Q7boYTQEMYLd86r6sS6JfRvg+29ASN1t2l/KBPaxYZjdm3yU9MXlUGoESmAsyQxcOhnzS8vNOJ8WN+iqvUOpX74WSPxwncDNh7nQHUTwZtPzKikHpVd48Jizq5zSuYVoa2P+AQaTl4xb3AqeH7EKvUay3qkoEiwI4x6iotrZ9pzMcuKHfhIMhu5F8/38PI3pZmpEQrkuz5P6luCPERYElKbzN0jGikykhKJ0YnDNv3kDO2ob06bLjHQqlsaG5xexaVdl1XgbxFMz+TbJylVLcqV8c9+K3+bsnTVzvyB9fcaUAepHcVx0XYignCg155qVLS5E+vh4yCNOIUpiHF6DCRPnsRASX02wnDGw2hSSId1Lvtyoqa2fLQN7O/xESWxjQUel11zSrjBuibsXSrGepOXSrqsOFJiSEHvmDII1jXzCaXBmviwraLmGnpVrM9H+atbxEXax0pbs7xMgGb2guFSHAswkSC5iCpXMyKuPEKO6MmbIpJzxEQ3rNbgTCoyHtLbxQ3KCkxAkGvxf8FS9yxWAzbQykSzKvtNOylfx8hQPqlAemm8q6Xh9dM+lzLyUQy3CgtZw1QKG1UKxWbOuI1SsozvJ+Cw317Rz21VncSLVAxVNNzDRuY2KfA5+Z2iple3yLUiurYmirlFnx9xK/nS5sG8mmsP8bufJBKysqg5o0g+Lk7S+qMWWDj66SVKTsSfsBisAE17nmBvYnkLyy69M2ebYf3yNqFuCfzaHrJW/N5IXJoDV1PJw/MqO/r/tOrcXoBcBa0WFaDBkyyf5eUiDzMxXOXmMHL5YOnWyRUkQgDQQupWg7VO33UJ5Gt091aHY5hBwbGcz6oJoOftnQyZRlVF6V3x9+7YCdlEgtK0CTC4e/4FLpd0gIrbO7KYJcyj6NNrPS3uYqd/u22wbVI+HcUO8NE6LBIfYYhtxXP73RAGMeokqLwhBoDFo1i5sNqlMMof0/UtBFRViSgIqpCSz99OMXjxc3oz1xKbb8TPHnPQWTyFW7j8Og4whk0FzmGRiWqYEQ4YPuPmB7vYKuB89f1OZQsFlmxeLYWimKqT4OAfQ9CotBRQTeKP7VONgiSTPYpEqdDpuszF1OXwIbdGMljkH0/9N6UiEOLIiht1dCzzUCgU1jwncN9S3ndHusjSrEjiSzqQMhG3eVq6njzROe1i03P9k6DOeXMvod3gcJgkwYoTMipJ9fB3RW8LdCN9ny96XP67hPC+LVvASS4v3L65XccnZwYjmI4V1VN7mNNGhhIFoeO0BsY4wi+DA6RvsTmThdqWBUKx3EH+ule+BTpsH0/rwsHxIJt3HzxGkrhTUD3it/cNEKoVihWw+HFG5yY6m1hI9rdK3D3tfhb15yxp59jrH62OJFf3VaQjOK3oxefetdWjKKs+z4R5Os51Mv8FXIHkaFMhul8Ths6vnDLqv4+wVzK+lEYWi+nUZMI7fwJNzdvQh6fXmTh9izmtcf6fIKRj5QxZmBAh1n4pu6F5Gnzj2+HWkyV2JxQmXQQkwFqNB/JiFfH7W85TdbFElJmII5/XdvIU0rc1Fjz6fW0BWDnF8zi/G4jaK2bkhL/wYuua2YKpe2bTsgPfnGxH5txB1pwfTh1J2DQ6AY6x03GaIdRm0nN+tF8mlqC9Bt93Rec6ifJnPuz1z1ezCnC62uxB3vdihoOu246zlAyRlNSn6oEZGvm9wv6S6SJXfxF1pH5/YpY4+amjVTiboSlyI12UYaUH7+HNPJokcBB35uIV0E/iaEgDwSlvplrr1lFceUdZdvbs29Oytk2YJallIO2kESo7fnlwyD9rHVTG/dz0XCkL8HkxvuVS9YZqZe2M4A+4fDjOsBQH0FsfQFKLbPPB+XyUc1BcHPuuEp2V9Llk/qzpjoE1M1Hoe3/I5QZtvrpf0cBZr8I8fqVjv2uJ4TrM2arC1RtkcdR8lfd+0eNWkTF7OFmM8jClumIzy7FFjIee8rv6DJMyOImpHenBUfoNgK2tPg1ryeUGesecuNMf3No5BSEXY87F/nFKFEkRXtiyFsYKvBKQDf70cv8piaDQkGMKW02RPI+78vih9r2K8N45TEIbVLSQIvNdP2+mqRrwbbkRS57HFagU7XQeDZpg/5H+KQ+Ofoy/awjxRkoQL486QiQPw5hWLkd6HoT6CWGGrasEbqXocHLc9eSCmC2HasLusNyvB+7riwHOyK4vVABStmDDW7g7l/W51gYVUoXu+81e6wMezGGLsEvizcpJmJgIe9EkROl2vYn7P8jRGJo4TIV0z/NXXo1rL131Tltz0Odr30Lq/FXD3UvnCb5NS3hfvQ6wZ7NJ0ArvprD7hqrqiMUZ46TMnvvnh3Cdu3S4GPtrxXQoagyvcUrdj2yiLXzrKJU/yVRQE8aa1/ts++JhAljCPoZbG5Yg6IqRbA+X3Z8eEv2AYFJfwmwivx/gmv5U0xKP1YJi8hViaY58yqI3GoaCZg83XfVs436apzm7L3Z9Xgz1Re3MZXOwBOxMq+fV/C0QWZXN+wjb3Ol7LzTpIWgP5L/zToLAfBGRC9/c2+T/3I00NHBS4hX3RwueQ/2M9/6km0W9j6KkjdJvUfh7NxF9wQyc+JUwBVXaQkcJysEfQzrplVEaPjS9u3uo/F9Pm2KQRfrfRgUF7wR0GyiNQAAACgMAACD2fWZUatKgJyUTNdleZPhYi4Z3tGsuEkL39lkzdlkeIO78DNOT0ovnLRGLjL394KA11kfiNVWEzy1ZlNw0VudfWBAidVwMGVQUM6vCWGqX4DPiIegXJH6OoiROt3XyU/XIt6EYvLQ6Is9TUzluz8y5Twt4BsjTsjfYH7Qt+012JZaGhiQvjDWBnNLabtLTrhqLb66zpxvKBSOseY6I6/27/M1RQeu6lt3BKBsbvgVpnDqTRHgDLId6lk03ndspfAdXm52EZB4qH367LN5uqL/URsUjtCgQPT7P2B6jfnI+hM/9B06tnEBdRuUF2elTzdj8Lfx1ox/p/eo9QFHuQ9yJABTRhQnK0TuhjvNTB+rEvLc9803FqOGyuRRan7+NeTcmrD8gE309OkFQ1uPpuyBWZoLM/nQdaLTw9Tc9m0dNyjAcbZYmdcyE6MLbRMhNVutK24qRkNYbHU8m9M3PIWFZdecUey4H5kfoeb6dJZDWLuDb87OxIdtKdknMk7U7W16/NOS12POefI9NokAr0lU04UXzvbKc02hEpoUYR/uD2fJ9Gz7rDetkvdpoUe63iSCr0rNb5F1SszRAeir3lFB03pcQyMtk89HU7ihha1MpvY4+8Nf1wsWAns/Duvc/5oUXaE/zI/E1ewNYAMjLsLyI5PLxryy1T+p9/7Yl3DGhRlS5n2d6VqQAn4ozgVryeNBh3XFKNKpBFdiYFzmKd/GM+V7PMIKh+h776yGowesG79J5kxnQGAnkp7eN6gldx7IMl7omhwpRBDsypUuTEkLWFgExQiLoqJLuHfbo16Ht4+LB/APFIqLjkT8MRMiNTS12JlXfMzoj67dZPHHhSJPDOOG090YsmyNl/8ruJ+SnquSvjH5W8pvvcCRqheRIvzxNdprNpio5jGWtMJRIzkfQCZ8D3Az+kcGuN296Gadgo0PuXhoAKtYTtxFRnL8238s9oPX7EvpP9b9WbJyw/A2zzTW4pefMg5cvnFR+mdMPWlMJc2gzoo7dc5zDvWjyVj64oodPVWpDeRTqopy0sV3HMmCroDZ35R3hWzK0HcABIipHhseyQ7zY9csER6K3FzZ9VK37Jka+4pjzB/W+a/3/wtlp9Fp2iMzVDvJWOLwAPNS9BYjhVLv33R9Hl9a+e+j1LwoWRJASd8LzaQcrheL32e6LJPkFZn8mVn6obma1fGEkLBK3nVb7fq3HVxJQxrt+V6L4UWcjBT21IrhrcSAxfabPK2xKMjLcLoDQ+dA2Wd8iK0OIPYpksigxyuuF3lsYvasmKpM0kxn9Lgr5oPTywUY7bPMjvrK5Mvr1Li75WhOEnntzojeZNLYHLxD4KUO8yNgteOp0JvwEnHmWA7tTRbbrmuL1XjOrjqjueKgspsRSdEdUgxX1AQho0SrOqWDz1bMbTYoR0vtui/kLIR9a8Y48Dzk2dHJXWdHaUHzE1+wAHGDtXz7++LruAIGwq1sxJb330N/C8o+QjNMaU4RoFV4yBolyqgqDxWKHNygZiZx6VZwnt1+6+co86kwdWYsRGBPJW0Z4BqEUZVKLkK8bWALJz5s5jy5yT6drzSRxvULmJpp2wPPY1Ac29M7mGr++VbszjawSqk49/QASVhgi8W1iT0rO84AutH3HflHFWsOO1Pn0CUfDn8F/ucCbzkzTxllhB9u/y6a9b33zmvxsp0cxaEyNVmCxdhSJ67qg4blRXBifo12ujl4knftyvrMSqu8X6Txb8k9S/mv4eiG0da9SA58i5G4tLJVoUeyv6Jkw67S3faPU5fWbQDLD3Qwcn1yfrymeVUWY2/La1gYJsYgZJjmgMqDo5RfzPqv5T1GNNnnjge8CJSucgjyFs3U10/meti2JvazixZ3HBSaJiwJ28JyhglrEyPUbBqFNwEu3cW47orGIXDHbGxKCxV3pd4rMSPTTFuRQo4F7t/Ph9R/JV0D/+SyJykvAEo05XVMosxVDO+Bj733hRVwZLa8i65Rm6q6aOKqZk9d6ftEKd/OwWVgoerRFjJ0sulSfSL99nBMZ1E+BSn0qymlcKG0E9VdTQfg/tVr9KJU71Dp3tOLjbDlvjjcQyKytbZfFn525s77vEbZu34i9W0NhHydSusdeQT8fILAh1KEAw09VSTwqEAQJiqVFxwhYlus52g5YyqsSdd9B5HSccTuNcA7PszOIsVjPTEazQ37ZHbRXFTxnCSvxi5UwNt754dyOLedJyaGaFgmoZlpLPxVjvbNM1UHMCAcOsF30f0pvIiXJIdSygYra3yvt6ljfnEu34UAr4dh9tdAuzkyAMD5nLTGqqSQ4yaBhOEUovYQY0D0kkXk4kbOswBujeNGVNavSB8/bTCxf6y3Zh81uEilC4MjWaiGwEu3WO/iEFWLFGYZtAp+W6a1YJhikH4kJ0trwKMEfV46Av9mo7pDJJxzd4k5Lx2L9kERLAUXiP1CNzGolIILZfRdS3J0J2Ta8+q0RswuwIy0zg8mSlUzW2SYE+Oa6yHRlnaRATQqeRsmQgvjUS6lxZHdBGPm+On3uApAitsv3vBgFQMkbiuSJq/iXz4TZEwnp9eZsy9dS6a0rZ0LHarr16YT1ZDPmTYtmUt+apiNO7Bj1oHb9+CG0JThuvnRMVTPRtuZ3rxrnLiYoVuql8gkkLpE4iM2M90jknFc0aaw3MLBiZP9hiMAs401DX8PGHajrIMolWVsp30biGKla3HomitVqboCD7l5YtEvPX0upDyC9WUxVfD4TQrpcWDGX4PMmxZCMHMSIQQVc8X+HniUQHbrbddS389ll+/8DTw7rVvPNexD7fbEdyjGIJoaDXfHJSx/se8r7rdzEXL8MOlmqut8ZfpbzdJZhhFLPwRWiO+XsO12qnWnFZWBPxDePvzeVuWnyAGVnXiZN6g5rWTo9ZTTWNXRAZI58tXqI4MNRKhF4qZaji0bRHI7QEg+iuia+PJCwHSjSr8F8LWrbiMUMMfGZHoxWBfXXxN+MG4Yg9Xi8WSIltR/fmF5OAihzhJjr8g1GpVz8AD90poT1lM0bE0HVDCj2n/TMijxN2NRd8vIT8Fm8HxYqqX0Lcqk4IIuaB6X9PbJOJzQb0ElSAXbOaoKez8OIukyB0F6BJ+J+RT5Vn/+XRiBuEPvRi6BspHIRmhc9Lfmk+phEVFkphi/RY/zcu+xV/8lXXiL2uqfWT2LgXDudYtStVLqejHPFmTXojeGes6abMuNe+SD+CNUw5wxXhw59uHlh1SBKgaT6Ywz6jWGhpg8IEG4ubZnO597wX2zCAyuRHykIpzckDMedyqL8vn/AIk8Lprzx3+xqKN/8Ij7gUav+bDU4eyPnbHn1/4RXhKZnOeKfhb86SZJe1HkBJGcK/BxuQZNS9mIbnmg6HAPXm617uMf60TGHsX82XgvBex4inxHt8uTNFh/400y7netQiljWCAZ1MwvjMegIrU4LeUDXElxBWTqOjFroc3DtjY0N7K418YSngA6EOhGWS7Sl29AEDI7fkpxdjVMAs23QaVVuPpu7DEAuTAIpCZ/0rZshW7Z4vmlh/bdzhJs93gt4/KI4/XPuCIADFpSufAtYUfyzZwzbWxcHCcCPGrFMQeYL3sPMFqwJw6WyUHPj2qbWNj9O+/aLxKV/zz887/Aoq+QBseOVyMLasL1z40cxhLAs5UzzfrYdbzX+3dpWcr0kGvPwytSpv/JjIfEJApLPELSneBbNQ20ytjYFNXFvCeerg0DxQj/ClZc/ZGEUJLPOJs26eoWGR7H4pq8ZapR4Lb1JOn5lZu8O0S+pnCkbw1q8zgAEao9ZjGjC1AKw8jyTA+ekm/Qqs06OAN30H8m0NlYSniy5OgUcgUP9GqKT+EpeS38tTEjsMLIEz+7XWQG6/axdET/L9VHtJm2B79M4jGaQpIRDCmdgIsXJpj6MtDoORt2rnUDzs0dCWpR11aFpScjWK7uTcadAx9SFDUf+NOGGJZqtAN4nVP8Oxy7qK8HdpNQzto6lAOlGu4ek3uMYdDqsZ6hge5pzV5XRK3OvR+E9Li+gvzUN7WSIhTssXlITZ6LVv53FVrR9mMdZV2WVYojutf6/vbbxFhpRCZDK+mRNmZTpFYnAhc08CWyT9Ev4ZKDqI7sFG82aLHk4EDLoHWpJHrrfOln55GyJc3TNgAAAJANAAAgyD8+DVJk5fc0uHtBHB+QDkrA2w4dyGpmlWy/g8MVfeLyD7GkxQjvJJFVBf0bzXid1uNip6X+IfdVN5mqXGsuSkACIvqT1kf+Be9LxDkUfeEabYPD5FyXNx1eAH4S/Q/RgvP8iFZWS9jZznst4Dt0m5VuCmM9EWxJwb6/Ea15mgV5bF3ENTuJ0IY1M/APNxySPDkcoM8S8wsbzGwKXs6RelI+VV/WCAuc7thh6u1E2h/7PRNb4xqMWANe6GkV5x+8r68kumUeDIVWTvN4/A/E+omm9UFmRmn6Bt+uq8g2tGCh1I4uyU9DbimXYo7xpEQqNG2RV6uk7fB3pV5rhBPllpk4QCe1G6fATMnDSqtpjXPD+blxIuF+pHIFurvjijVUk4O0annURUtrBQdYMhkZPbW64fZpS8jIyEn3FKe5+RcrtSFJa/bism6MMD4B1sGQ3Gth5FHqDVQ1YNeJTZN9odFCQpo/CKYOXlYCichucUSS7b4FrC89mPJyhtM/0zzG5kp7iAy4b3FgTLYw0GA0JQTOlhI4LTd5Ci76Pb5z7Kim9YFhP/ovNNmawHIXlwoHcQpnwY/DBlniVVujWt7v73UeMRshqvyh/ssQQjzkBCrx13U0yD3KLKhaI9mwGhX7F7tuZuqUfoiV/wdMYLAATHRUbIGqARj+sTl7lgkwGxWBQ21miRj1/peqC/2XYdxhTUCJkXtrtiBQKisTdkk66aXWH5CKtJek84fpY/DwKmz020VidvQ02uL2MQinWeiudwO0kG0nggK11++/0KAe3qbHApvl7ipahhYlueyIBpJff19jo1c00zKppGlF1KmCetmx2qPfd7bIte1hbGTWLBqB6QXldoWlm8t+2LaIKQVXBDNjkjVyvdoHBqBB+Kpcoxc+miTaKwWGAgxbnLJMizmVnfhqiPdNZE6z26eV+hnwFDD1PzHPjGMHAHwHSldnmt6w8AzDDeRrczIbJJXnuijuW7bwCuMOxUGnCUJsNFZmQQ55b0FKm8x2wY9DA1MZtXJFnyAVC2+aKxqVT/eydz/mym/SD9xt4TfdM8Kj/Ng4mzeTBs/64ldj8aqnyiufsYi9zllaanG6OyZF8j8ZnBN7xoI+LGNlEAgd3HMA5DDXdA+uiGQq5MGdLB1F+4SIw4BBzP0oehbm8dEBPcJ6ZDK8SY20jMd+dadhafE/w5Bq4IXKIMwlREXLdcX0X7QeWPLJXSCsGJA589IYbBoebUT/sUhpVv/m+J1Q5ENiNTPUf+t54yJTnQRF/qbT58lvkoVAJmm6HPFmAF97aJTlxjVP7MoFK2Fk6ZWY9d7lCMoH//PrX9Lvz2XBdWIA3uowwGznI/ogt7tsXrRXRGh7foneWg8CNpzBJh6KPo59HCgmk66b7r+w/fzynX1VYNhCtveyUyXzruAxtZkwc14hntpEtFHvu0hkUPqQo3zD8yzPg30AttEd4JEKNj7C98v1OY3Y4GzLdBG3dENfxIxuXgC/ad1RQavQ/bg4YmsZU+xShIWbibpJ6+ehySvdsvLmzqO2SN9miwCDhL49Fwz8XiEmPKgbhIc5ebgfktnEFLpsfrGTz+QYMCnMKXGFfBiFDM4xc7brnKtnaE0AwnMedi/Lof5IX0E0rwTowH8GNFD1NYlf7ypdoPE61GkUEyW8CDAs7H5NEXt9sBVokeYrdaKOu6mK8g527zBzQisUJvcQ+BoWAkCyWO2lgiO65EgHn6hlyTypSdze68CXBo+7tRkDXYK87XgqpwnvpFfxenS2Ynz7/e2tG6ovTWHX3i52aYDekMio+V85A8LRh9VyhBZ/emI2B2eV+RBkkYxR/B36ef0AFUhErbUa6SuNz+crrahr6hAD9V2MJo4Pt4QR0mXahdqezE2F0e52NlyR1e4DO0QwFfUwMlz1LU1Tzz6aEpXKLMDBBlUdjC3mxS/ey/L1kKKZSUlqBH7DbXwlOhakdDrlzSv4rhzNpubiqNGG0WdESBPl25c0f056DR84gbD1RPcfnjf/TzjoMo7bWXji4Y9rHqVtwlQB1dojUk2uIHyBJXCQ+NtCP45unlV2Tp1iv+9Ng3gQRr7byM4hpYFWRykh1g5d9F4+3I7qBnnNFajNgZsUmyDmoCD1Sdrmas5Uyr3fFSn+ccY/vcyBSO+swWj2XNqX7f1/QLMRfYMLTfd53I0113MCtyWMmmAZQbef0wAAcPj5cRyNnHU2KneZKYocS33H2nEPeSwIDiDPsclOV18sEviUiryTB6sMCf/zNCkReuLr0ORJyY1VAhuBFgkrdI9C+tdxB+SyxWKUgO8cId8RiVYS0/MB3Jx87lBsZd0sYEJGxEUiqfcVMuUhCGO7k6KW035DBce17V2mH/ImhLEgQZ51a2Mj/vE82nEpOifOKm1sZ3bSta/eUrSMdg3AC1tYjztWAnUSickxfR8+iW9S5VXjDycIYAZ1ICVga/8mKXdDbjekQZPkx04Ce6yo0T7vffwF7nMQTf9qrRLkNWMSdm0VHEV0zrab+d1P5XV8zYvhsm64hEkZSVoyNFXCsYCcquSe1ozYRL2ioh6ToYVCQcraqQRK8xRxzCCcPsNiNhCHZv2tIlurXmZV3S9TDdbg3TgCkf7EkGz4mou9DdmTlKFRpTZ303L1UTXtT3tu+7oc/zKRTEQI4Oy4rIawQD2Go3EGf68HBhLW363J7hC78s7aaV6xN1ZhNUf5iLMOjDnYbUYgAfYcd7ZRmP/WZ1aXpPLifQXX8xtliKyYLJ2aJYg9yTS/GoOxeiNlwIY/X0tt2Th6G36sZDNaRHkPrjBX1tXGsbwo8bZ8PB9lJeKX/S5AVjkuw9pVQ7dhixQK6/1QOkWvCFeOj6arLwifX1QqeAExEsjLquPHeJ1/Srw7fS3p+0iovH8tkWIXVY3So4VKr+1looSrlFRmWD9LFlWmf9uDkGskgslvrZ69CtTATYWtgBX5dylaTEWfqAuNG1Y4HGK34mSpW1cyJRUW9FWmwjlPgg2n8KGXEUGCJQIrfvwnO+/ZP2pNHfveGLY8x/VNn380/uwIe/xblJi7EkiaDuBMeQ8ot36TtkDf/7LAawY3xTXRsQAUm/fmcQKjgvUBmAvEpi9Faz+ctcuHr4aUGmNACMKpjmYpD09wn4iztnOwa1sl0ST8ytfqVoGcjhztEc7Cnwd3wpai9Ui4Xn5KCYWAYwdVS1rYZ4ZgzEewJg1bhia+sO+TVqlbFm6hopTFXenINa+70gHYs6aKTWBcLy3IqmCVcEXXp85f2LT3i+KPmhh8zvrgk01XUwUqw0quXeS2HIDf/z7WFbcNAOTjwZ992WiFIZsdGZdyYv8Dib9C7Ns1NRDKJYe/w+8eR3ebLZklFsYv3FZDA0RLS2zm9hhvx2BfOnOni7BjZK+39KHV+DgB+SvlN7DkvcowiM2ur6hxFSFKOBHBXeJ44LJj+K9DbdY8ffss0o+ZhuADu0RXMEOPwCAhhHYDuRHqx0ijO+wONpvpa32VL1WHwhFnDhofe26ChXKrv0Zzll0CgtsE9foQ1eQJGuqpt9205g3ICgk63xZLx989ss0fWZU9K7EnCaCT4tfM5Krrl7h1rXNiRQpOw60a01StTGD63Skp35B6n7Zp0R9Z61wZJhcdXouLPlFQnUftH/sy49LLmymbbqJN40FoUixHJtCB0Fv5kWSFP/BK/5OEcICFc3IaalqjaKKR41YSIjj+xiItyYYp8CY6iqk6R97GAwDr4yN/AA4LZARltNd4Oom8h5rBKNBYQ2TPmBvZOOhm9ZXWd1UMguiQeRka3ZEOBSy9CXg97Z9DVzpBBMRCmk8wapDpAuRmj+9xyrH6ty83PAZ+f3RafZsM5KEl13QIEtzCDWDwwtx5NaxMbJN1Od/4BRCqbuyrhju1nHeUqTflhotmXam4fG94uAUf08S4J6WXWiuzTJ6jojleyqkoEiyE3f2b0Cg9jsOa3OkjUUhXitWyNiAR+86hcNTewE3WkffCQGWIbA7a5EKdCPFMYmvLpxwBya3f4aXEFBYry7DEBj2tHa5+U1kmi/bsDPJi8MYCaEN4fHHzfjF8z9A6PKVbDlHbWInfcNA3/3kJXJrHa1hBrFcThkwiDApg+c7nI4pQW90uu0nwP27xPImLtAmNgR7qEkKI2QJ+sP1CGyDD7w7Rsu5IoSV9bgHxK2j6p5z7aRayDQKf4dMWylhp0Locue02CIhHCC1AHg0o3zcAx69E8IzsaCAA94ouMmOa0doU2S++axzC6P1CMT9BIRMmen5jjBJkxHPbWtOSdwji5vSodU4K6h9uIYAfAU2rW0qftZdp/CkV+V9MYhWEZD6jdpRA+LijDNaKv2OpJKZHnBb+ruzJlWkgnODmInTbLAxI79+u2Po4DtuLgGN+WC0axHG6Dwq2W720rMhbnn1VsVc57eToV5Kp45W9sRlFO28m5OKe9ZditXM4wZSXU0H4SGqRw3WiUC8hollb4xgfy8pZ5GrjZx8ofE2UsTjcdMra7ulb242O+gn+a2cPcq0ZRqkdmqdiYLwNxTqBYO2q11Uc5W5MCABafoUTVQn9GrzIkkNVBpTqn0kRQ97O4nv2ildzVdeFgHmWYjuejUnofpNh8E9PSotNRbxkNwAAAKANAACOuuv5yayrczackfiytJ5IN2IwfCYZTOydNktJsMZE+3Ip8ReliZd/az+JpWd7wmDpNZVkk0jO6+89VKT+2qF6CCVB5Z2tKN7ceJs5vqlW93HkyAtkWK2KiR8ZakmY2JksE3khPzV74lWwQEuB0SQ+vkpjDyUwEkV4Gig7Hq3nX5vfE7RB3GgbrXdK5231ukX+ReHpGdZobtbCb/TX7/NuNTaU5SJAKPnj993HKpeZGYLpVT4cHJq//VX+H0Sw9Upx6KDZfq+CFnrtAR7Ufvwc66hOil/+pr0MqEmdMd9TwTkVEKT/SYSuk1Xa8zFjwaNs1rjw0FpwOHcKG3ajv8JsaJtS2vs3pD+dIQIvWxaViSf7smgPRisGDKO/KLuACky/f+FcnSq95axW5K2T3hp33f696vDpCca2optNfnqvX0P6yM/Xm3MnzhrvZIuajsfhtYLhd1sO/frjm3BjW0Mitu8Z+4NosOYBeWMx58gc0Fj5r9J6luSD+/4htKVhgxmEyPsVHadHK0j/HL9sc/PoedF2hUbaPyTLXhWo/RVaWgbMDRZdQsVBInz0oRQtQZEXfqXOklJj8HtfFK1Fv8o+n86OotcpG2rgsjrjTPQ5XEqri8gtofmy64Km6+RjGR9HNW/jHzZ7Xmh/6pvPxb1B4qjcyMAltkixU/uQ7Dn/F6I7nyXJ+sh05GoQPePAwTKfVcOmYVd+EekXAm64osQIAz8Bl4K2LHrRJ9VmJpni9U21SYOIUGSv48whxr6y1Frp/aO1HGWCR5fEnKbgHMWUuLVo3qkuK2FryOqYSZfBposu79PyzJjBbWQWmdzBnO2FHCQE2oL+z6/ol0PWmm+W6Iw3EAvunXlMtByxbo5M91uBmkE+ZykB82mBgmLaGBNmaS152h3eE/E6v8d1pwNct2+4/OYRFTv7HBsIwDz60k8sAxCa6lGqOU/qUispzSzeYuIyRf4Hr4GCafJD+7NI8cD0BT227TEG1zKbtollsX7LLcmPEkFyjfkQjX/ROJ4fyExYh6jqtnlirLG09Utc9HatYmsoGRq6ROR0a3gpOV9wfJWCvr/iIs2Mn1k+B9lNyPdSkGyzyGfVY6mpbjv/IHP29K+pwUj5X98Kfd2NJHapFcyTsXKJB0wEGftBxk8faNhJqRoo2Ju9lZRwodOBUJfALvvInEMFiwsdAp4dKKMNk2YD36L/lp1cRa0ClMWjgrSZoGc4q8LrK2Hq5QG0Ife/j5h6WjsvrHfRZtzLHBz5KOJTbFfoiiF+YAnCVNgutw4FQ98hP3spSx9pPsvrvD5JHn9oBoC01M8J2X8/JJBREPRIesZY18XRpjfm/A2d3W1n15WbjaBbVhyKSBH8SP4rPLM6S6aH1/uEBeOU2ms8z/oJKLWzPVdwForoTmz2DbNzQCKO6yyH6sK8Uj5D4yKYcZrJ3ZOrS1gp5T9CVK30E5vzXnrJ79wH5Td3Vy77kiaeICzL8F6YaijKqOdTG8zonY1RBsAo7W0CPRKPEceNkls1YbFA9lMa6XONDoy5W/3I9HWDS4Or/St6n9movNB3f4fiNCuaFo8DJGP0SDtb59fse6KJIVU56OW4bhXCP+UfGrmAUdJJ7IadX3lxqRq9EDBZ19d4ZSGGyAR7+J3ov8p1d7gZ5T5peBlQtwZbyQrjgX3wkfRtgQD8PMt7vaWMxo1SVfRP1wLzQhWPAQ2v/X2OCmsBvr12KyRhJTiX0X9sOkoctUEJHMxj3DZmpofzr0dKEaD8V8Ek0phwQJbTIJ6ck0VTkJxnVTtjVl98zjCb2pQA3gT6Y7eoRUFPRteak2dEghEcAjGIvNJKAoLXCO42aAWR0pO1Q5NXX3mTp+wnWZ8+0iLYzl81ECtj2HjQIUhJ/i/wNCTEzEScdEz1iJ5/FLbAhSamkeS535zRE8q3bax7V/OBQYK7OMLHEkwkMMgdVHix9qViw9s4vep8flrv0xoamlOvY+h8We4VymcKdGwntTBH1shkcs31M5knRncpy9GqiY/H0L57hand2Y0zhX4AM6A9aJGEqKkx0v5e4HrJ9CjdegUUvMjU+S+Z7IKhFnqK0AMzKoNLOaWVNCUtWdFsMuox/Qkdo93xv8/7AX8LmYi6fdAeD+sOlYO/baa+0hGI9V7dNX2+1duggeOG57Elt8w1KOe/xQjXfRoaEfF+OiHbbN8e7jzbCGR+STzdrC7lULcp0FzYtcXnH+V9O2IGBH1Ge5k+IUy1LYRs3Ojg7fjEKfodnm6TtP+JOKyRonqsZypNSzuVd/oe86wuKJsg2BmuOH2TPTefdIhTHinZdPMCc24T6QGCsuhMhOzzVN5NHwyXb8HIrmz3Y2cnaQhWcWhS7Xron9jnkS6Xps97njNYHTLFDx5gBAIIgncbx78x8+e/lQFdXfAeZDpjkDcCPKmBEuVbeeOOyBCzV2eYgwYGhHM/940CWM2BHzf/WfWNCr/+5DmSlvfhKoHVWS5pvx4kkSTG0mwnCqXIX2o/WO4W/imEzY/nikkxhW8RD/qlmFVaMKDIBLDxmlKyIcxmf60dArbwJKRHPkwLhzghm+zFMyHEZjhmRyifLKQgC3styZteZFkw5SppNK9dL4y5rIuxzOh7VbpZ4lrraJyNLO/gV1ak3AXS4uayrybHrxc406yogMhZsRPvkrmS4GxSkyTI1BtNZLvwydGNHY1Nw75WC8Cybycf5ouhGl/xOx/IxaeX33/+92vQBBNKTLO3Pp3DHRTlEaMtn9bc6Vczh8f/JwXALov9e01A8LyZtuy3yNn6ywWUeY8b86Q6Sx0rJ04xjmZKFEVvqNxIRCmHVz0PYG9BUcrux38pUQOesniquE4DattQ2Rzu6+jIYKkxn9Tk2zzdGbtWLLNBlHaOre9tClteyq9NFALs/wBjfHavb3eNNHdHh0DBuawRVFzxo860XhVhf8ZHMey6UysboyAteTK0nwD0DDfEGVMDGuDvWf/EfOig3OI98Vk4G3nZAueJV/3bXeHIJjJJQIdED5sB4oMSw1A3+mo6u6AJcMtWLY0Xn4t3/v6FOI44EAk4lzeze4KMr2g+SjsrpaBsuodayAI1hdn4e8N6q9uXtt7e0XDaKqMSnR/4fUXBZXNmp4T1aS6ojCSeoL/Zn/XR7Ngk/ulEBSEDaj78XamB4WNfGIpNm2JzLQ2U08SDaxjCD/0+CwrkIkco52BXbonv7LkQR91TWO8zzOd4WRkaYS5qPN+YEpkK8QBIf/mETcadQiy6n3Na/VfoTLt8vBGvpm64Cq34AazID6bnoYieuUH61i3lEfPeq549oTZd1Ac1bpkyHMrClYQZfdbFZ0Fx6SA8T06QDr9AVF+H6ik738d5VQ8lVeN8DIOv2lrTQsQLJdUNFbzz+7BbCcglg/2y661gJnUVzi2CKzH5B54ieLF592fe7ApQa+NUOwNLMaRW6s5M+KjOqj9lNj3IYnOyO/iPKtWvl7Vv7qzPzrSWE1lHZaA2lzY/efKFQo/K7M4iWlAbwV7IkayTR+ogdoe8DmCe72NZrnTjieq4cUV+Vs6kvN5W+sQBAHJ5LLhleGjawSy+SJTr2VasnMRNo3ueq9VOEVhphUHGXyY02MPICtzCdbctdZnsVMD5+BRMd5xcBdjKWlMX5oqNS1wkgNCZKLlePFW22wwQ54LOcrkd/faRsQqglNL1YvNtN62FJDeFndyZC4SaL2QXGqPP3GcUwn1n77jHIqxxyVHee7PhF22V4+7fn1fgPg4Uq4mpJWiT+ox+Fio8fX1yJmnO/yOdJ7CvKbELoD8NtZJdsuE75pCjiImvZ4WiESyeYv04ipzEDt8oMQcxzOokdw5hRK8mfByTRGjQumaEUIX+rWvt4OICsS7qvUqG/EUSX+x9q5mrNrIPsTTYp5vt/XmfFc341w2XrxYmYGbPVFihTi70zA9NXVdSIppGWm/1z2DHPvarX56jsrImLOOpWvH47GF+IDVik0CU4Vwo5OYENpdMyhyP1gi1mresXzrqcX4b1Uw9u9dNQDj3TUQ9gwhkhVbQfdleSCD7IgS5znSwH4JYKnd3W0GHWiExa1soarWxw4RBSLafJQg8WhaJpaQjUjlCPPt0oZQbCYzrxrG6/rIg2cZ26J+nApgHUnDsHqYWlC/r5Nav0W0oBH94+mTYIeE18cMFX0nwjYyjwzTZ2J7K1qvsR9F1CaEs/Qtxr30GWQaA81D9eqYhJnx8TjXz0edloOzMn8S6SSsj8nisS+Bl070lYbm065pU5+j5aWYjLuhnD5afkyU7CcvTbnuW+en3gyIB0yd/TkxFpicZoCCVkUbWK1FBe+CZdwjnxH7u0fXQQtN3yMVcScJ74WAScjlZzvlD0FlAGLkdghivmKNa1ArB9LNV1q+3DlObIUQyr0eAhqafp76CWYmXrgVPeommN3ovnS2fZSA56d/jmbnON5EJjHjdbuAt/hcJEP+h1qttlm/GneYPtRuVmXULpFH5JDvCzOWZUR971r1l4OlBPpVeGeGG/hRJP/2hNbrQ0zkW2YePwdjJjYIvlUbimrVqs76t+KSi6B0HTVUd7zr+XKznGjtZzgraCWfWYJPNvNlFV3VG+jARelnvQR92lkthsEb38gKIYAwB21IpAZ5fDWEDKhWm4SZw/DgAAACgDQAAOIqq6f6GwbhMmC5qTh/92uoFdmJK3TXRErrqny9QTH/Nim3DB8UuLYXbV3TjSAWx2e7EaWJ097QKeu5j3gVh7ne/MyQEr5ISdzIZYlCKATXfQNQgykuVmFOfO3jEx1qnqkbkHBcwQVY/geTsGsvi4BNp8UcuA7WLVnyUIXuYZ2H5ux3p8V+YCBFbd0bCAFBQUiWLsTBL0u/nlTVI35j7dYSiPAMvKLSiCri7HTxPjYbs1gyo6ErWehqE2ByFXM5bvkUA3QAnWQrYTB8Eu3rd1X3Y1Wm7MUkBeu7QZRrFRMykttbSLJb5/dy3TePTl2I+hDtefJj8Xdlaj6yzBzTimoxYN/rgakEySOpKW5H1CjE7oYOabt0Y0BoJbFgelGowVldIXIANuiKOmJc7612z5taPK7GEgj0klP/YWqRbYpHQsUkuI3djgVkBk2zu1XNo0Hr8pc7c5stR8OKTQ36yDZifX45V0qe0tiNOyU6YwWRGfecoiRGaXSINAQ8iwUJISNsNw9d/2n9vmn3kFwA6zMwAGP4lbzdiCfET8+qL2k7tcI1qVzyuPDBIMbPqnHrwvsIdtsQFGEH5uIxAjlumWYgBRJIqbShJzvm0TvE0GdF8ygGmzDZMdZRcgw2l6yX3euCqY6lZllemyYGkvhbceQ8Yx3/oDhdQYUQgbXkxNQrxQlwLDEPduw/ftmK6nLeNhC0ZpyGUOBKdL65cK3CXo8lhlkSe/sSPCRD0lHR0yPdnxRPieco6AIuTwjwHvHhROwVux46++QgaUtqM917328zHGFYvYk5IDi9MM+yQlT8XGgZu6susAmBMbH0nmq6qZ/5EWZsGZbeV9SNNVgALKz98ebO/eoWP5jV/0OHPe7AzRSCxwywe2m8UabLgUudda09aKQuiFZyAEnpu9TO7l1BYAtJJO2HQOWY/6w85+OwmaxxmJiZf4LkHYOCCrymmeLORAaicUvTHpcd/MM/tjjHKmm4fBHeeZVM5fbLJgWjoj+YUMTNr1JEE8xdt9lvA5FRhj1/XBxxDngfw/WTjNYLSFF9G0PTuiKdCX0h939pf49A4/gE7k1n/t7Pym/TZrnK1qpk91f+BrB+StzrwGWlHBhT+ywPsZZyg7h9yscAFwwvygH7IhO/JITRHOGT1PK9CS6n6xW3NBxdbhE2GoJlInUeb4RJaJC3xDoNhO1xUkzrc6PyFRDmbySjDOqlSc4vDwf+Vw66HozPeR5bnwswMy1xx7kkhX08rSgZVv6LhmWb9LlTYG4IjhKuuYQ8tku06yY7e0Y7MKr1r1FVLqsZbSyAhGbYqYeU7x79UCjt5a1KJnbYXN/dvUmTDyIU+u7NajwHvKcIaGJ4yc1tGXugMqFGmTJUuxNH5z/7BihzN+nylwWzEZNGw8QkiwrUElB01RuSMDBSqnfppteXtwm2BeAvlgwg/Y8fNwGNl/LaQ89QACDMNlx7JbsGV2ZE7ZGqjkXbNr1nJ+hX0Fce6Xmyrs99PYVM+yFKNbq0OBqlEeACU/DGbdq4S+FsU8InyE/57082Uov+DZwtygQdzYN+YDon1OiQENbifqPSn3YV2l41T4yQKHdKwI8linQtk5oZMj3s4HLblPkxiEal1P/FeONqMqt0o3J7MB/5jQra1+q/tYP9qplxd2h/1t0Imxg3lf/tCuT5zJ2XiTC7AG3xN86rKv2TZVpEypnH/Akh2pU6OO2GI/KXhlI/xHUyG7l72Bvh1s7D6h45hntl3UfWtbQPVuS5dq7iEW2IeMBkaIDnEEXt95G01pXVK6VzCIorR9rBMEME+Hv6O0HjINeiXI3E4iKy9rgurPFcmB4u3j2wrHbLJLstK1x/xenzaGUIpNdzczY4iRM/kxEMz2UtiizH1yYbjgWVGFsC0SDCghiIKcPvUHgmU0PJfG5qiIqtXFHWntqHtla5VSYar3p/Ol7KJsb1hZpoeDvIJS1vxOKCFjaIKfbEutxXwououZXr9ib+auPjUGnzQ/1gmGpIqjUKWb0ZxiBFZJXC5KpCVH9QsFYPjJDeJ780/975yaRPYKfBuERdkr8/1z/vdYbG+Pi9QWxZAmI7CZF65RwD3VTBHoZhHLcKsKWMKyV/UZyKtXuzot/KIofdcyMrA80gia+o+F+qQKf8sDMBompGkV9oB3i4H/6vd4+hZz6GVGS+RPXaHrrtDq77jl1sUr3+3XjX/0MKJZh9BFf8bY3weE+J0WBRRFpgKbC0SiIrcwjB3MWr7v9uHBRxM68m1g2b8SpGQl0xdiKp+4nbdA2WhauAP3gtGd6Q0+RtSsV8jXHLG4QENFNytwnJmHWLUEo1YHLjMDHTztJmk88UFne+fK526jT/KC79BFzgLVJbQfals21Y4wODdFzUY1MzMdmt0Y5ac64z5hf0NqIL6joqTQfR375j7ryyZSp+Qhs9hUmQd10QNh3Nzeem7mc6MLoaSMO32NS201uzchsehPIL+F1rVqdBTAVCGRyK9kF7kV3y46Ir+CoiLnxFPLUnOMnNQuLqlfxrCYnrwAtTB7wnyprw38jQcFfEdmG89evVEpYijEzWOta814YPecqlRnPT0ur/QFt7Mx57Dex5QYZSfmbucJewBd87er5FkUvFKXfan4gZHAG7abBD7P3CO9O5J1tsoo4DknYbj1aDMs8Nij9qFKavb+AteFIxs0VNZiFTjup8KzC9eKA2rGiMyzsQUnuwLHsyA+5U79cegzVpI1mbLVa3bOOfIpyhtVLwJYge8tSiZBNZ+IffHiLH2NscgCtOdWky3sC1TXxSE5wX1FRuOec9LLXK+QIA/LtQQPTbLQ5eUp232UXkGXI3295wid5gm1EiBhQ6Vltl1dZerZqNC2/2So4rzprRyoSqm7pGoq0K230gjV3rJDriNJrKqNbzAaiuhF6xNZQfi5OI4UnI6Q4G5f6qfeTfAejQOIDn5HYumRF8wO9CWVxlV3A5sargDyQ9fN2XBYwXvIyt34CD/ZxkPc+wsTlSE9t3e788v0EriMhtvei6IQe1yybWCfkr/oHPTu//zOM28WYlJq8+HIJFbYNGr+Ebi/qy0lIemvJu+dbDZCQ5+/YBsCoIhVAWkluY/LXD1riDdzZNSIIYNwe+uJAeFLjGbbB7c7pqfvAqm6IsbT41VjAzw8YIEqPSb5HftkxdznbDqBg+mv7jKi5HV3Y4+UsX7WQAzxkx546ZxKfhjYwfRb2BNhnPRkhk+qOjWmQnReq+SCD1zTMlqnz6KCP4F6ir82THrgAe3fC2kUfXTnQ5dih/GCt7Nnf4fKdKXEWRB2OhcWL0BpBfcYjYXwrNe8G8jEzQlb5klPiaKap+xZIe/loVR/Ip4rLq/9PWsryLnKbaqx7at0qF+kMqP1Fj9EBhRFHHaDnckqSozvhwoGE3HwTLZpmCl5eQpvoxV2kDOTHVVe9BRubJ+hJMRWzg0lJ1BpxGA/rONXHIkHds2WkeFvwmxW6TYC/iSqTtrrBHOKi6DAK/eSh5WVKwFlVjWRpe0ixW4QVJd0vhNPb2tc7kaxY1i3wMfLB2bOIPicRQFsqRCE6ybP6w9kDX5kf4/RHFfhuQH4U321XwmfF4RYwL3mFzUNVAskTHe60A/ORNhEmZy1uut6DbL1gcf5D8cSRDbd0p0F7CjWkcL5FpBlfvwWE28wubvJuBKIJahKL8KQ0XgI61ipRJ0MYT4JUzM7nz5jhUl/QSIeE6IgrTVvRquKKb6gJRYqz0ki/+FsfxWUZi2ErnOCAYiIbwAV2I3MNMrLu38LCLwaf+XsFSLe89evtyGzLO6l2d/5oooaWXUrPUa6AJubswUNoN4h1slusyV5axSkjHQK+i6IyWOLD4xPfyjboi49T1IS0Xl5XBZ7xWzlf7oesW4qgr+DPLfXPsru78j7rZg5aOpo5kFvsSYEoVAiWaiKKt6eB1V3PJGICAMndZMgfgoZQhRwnKdGhKM2kDKTF6HJ/lS4X+AzGXKgg4Yr690RR+eupsUmUorInIsnO509nhzSKE9Sqt3UOgPLmDN+6zESVk0/HChEb5Obz53b5UJLgda4TUgugCAUL1WMNlbe3s4sFzffTq+iFLNLWDJA7qlKoDpM/73DnubPPEyGWehiknhLmi4qi2JMApHA/uW5yW69QwVqeD+CC9M8iud44fUmOWYXLqTwls7TsV97CVBf/IsaPNGDx6mUyUpHVCxwAu8VnmHNmXGPmsu4pkdm6lWMiOhZ/hKIlR48NELZIIzu+ov2NeG7zFFNjyHYsyczJDv4GQK1d+pO+1eP76+Shg9eSCDl9+Uxd050bjW7kBrH55MqOGLTSUV4wMmdGXthu4rTycrG562UdfO6SXSyt0kKxc2K4y9P/ok+YAFLpboEDdl4hwbaTjNiRrIAD4PYv4Q0zBejlBKFwWIWQ7SELkSPuYRi/AEUhCEIhXXfF+XyNT66gT7eqJUKKlfz2VHgcHTdHRvRoVUrp12eh9TIBy1z+RUZoyrX3mBgrc5rD3yTpxXQXW4azttoK8XcXAQh16q0bp1arqvVSKjT4JZlKuw3b1H3+GXP7JQsUxR4ClRjv58QtxSEcKp1LgOkpYhVqoRXXJWqghU2Fc6Iu5sOTfA68P3Ydx6a9ljlMKg6Hq9AFSVXtnDoAk2ZX/ztFgAAAAA');
