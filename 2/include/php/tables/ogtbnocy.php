<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAABwAwAA9VzdoQl4K53A7esUO/qJHQaJZcYaoxcmJIG8JDsvVicSZ2IX650KLc8cj390pVrqytPnNH6RHgA1CZKPdZTMa2LMSBBSy446ibUlMFot4GP4GcYgvriG6tA1HR8E8vqk9mRBi2xvNZJD+4SdWkqeWEUIsuPE/jjtkspUhDLxsd94U1Ekk2/M1qi/tKhF0TmcoD397LKOZvPWx8DMBiGBnvXqntFRdzwWuyZVRUaT1+c+hmtej4u5KChH2Fq+wU1CS6wasfzJuasC+kyhj91S+mU4ZrOGCJfXwmYx9rbwwf2Cd/p2mcYOIzqvETly30rgGBwtkhasNB3xZf9oiIDTOWnCTUiPk+a9v2A8R2pFXSZ45BbIGvBJnL+jgu93YuEJkoewlGYwrNh2B1L1QPu2WTMkwWesW1lSqc3R4qGaQ8paCtQPvHfLhuPC61aC3cc0tA24icJ0FtMB/K9iiIlZtUYpvT0+54tlEmxzv+i+/G+L253vo1uMrptfvIqidfis9WWbf9EpsNZ2wYpN3qdiTedfU4VwJw4mz9Bg3Dwb24zPiT4LS6HZTGulcmZWzWEKxSM1NlJVV4dKAxb72Bh3tng0tujRbQpQHa5l1UFAGyLeWGFnAZgvrkbnX+OvpMy5YCZg4mx9fbrfVVrE508NFWgUNHgbkgzv2x8n4j5HjQ0Y7AHpnha+k2BsHhBJ1yvxb5IoU7fd4WtQ2JFSUsBNQyy3vGWzxyA50uyStEEf4RL4tAdtxdMa9vleKaqoZ8my8s6ejWTe2QYyls/ZAx7Hkygc41yolnVQ2oudbRopyzbS47Ru7HFFpTy3wuE1P8FFWxjdmzCKHeQ254mKmsZe6wZGPcoIrGuhfPD59c6aj1lPeRlFx9wuWorOcnmpV5ZBunAeN0SWrWehx1u8PcEkdBqCZg8eOjbMku8j32cDR9Ov8WbXL3ZLe0etF6H5XXdCjt6vfWR0U/G0jItEHdM/89TRtQngVL8vRC9N4M1v9qLl+847xGipmTwyWVsAMlLLylsG/4pZxjukt2+CgPbEibmw+iMxdXgwE5m28toco+sHkE0dqpXj/f3Gl5bTz4mUX2rHgs+s5/TfDvqYRxY3LqmQZ0IyVaS0PtTy+0ZYJqDufdK/M21CA6Qkefy920mLGGywY0YroebP73JasYUEszUAAABoAwAAHaWGDoVoCF48e6R6PCECnKA3QHusAK8zH7MD1EWiR3sXEf6IdOszOGv3CwQEfNVRpe9nTaZ/DRssYkaR0rp3srm5sHwy7cnTvlkZCjyWXQ6nUTU4XJsTQdHLlLNO4ov8tqERobZp+NV6wbAXtyeqo8oH00LPn3vL8QPTC/Nf82g2Y7VQ2U+O05yGSWOsGCfG4gPNGh/HUm4bwV5syBTn7ZE0EusfgiPMsnY1WsfouwD2rowebJypvgqlYB4Spo0BFN7iCMQQ+mqCiKldO4eZOJNAIUWX8GxpEvITYoQ+xibZUSDgTyqJ5GNqUG7/va4ExmvjfY02/WgfOi2RiviOISXdFjCZoLEkCAjTCDlz8aLxJUX4HqMuRFle7O6yy7CCYGL4fE1gr7RfN0duEzASGZSIJPUEzvj4j/e97FDoWKMlTN4+OQWooAjk0On07HK0jb6nre9wy/33q4I8tlZWqu7uLtm+jgrOAlFUgAg52rV9798HoOb69rJQQWBADlmZ8N6KUZ6ccQfIGhs4LZDiAzGZdUhHMImfyP7ANTXSkRP6Rmj6eco2RvtbIQAF4ii9+nx99/DFZ8vKlRCSSeLwWF+SIPja9JzVmMgHvQ1QH0GyADw9Sl284nqjPvBEBwe7mS5HivdAYWOb9dkalEk979yDxfgp/thABAV5V98BP23cmArV7Fh1FBZT1FMs1Zl9eEqWIhnIf6htQn/bTnV4af/nJMPIgiQPACjfN73uJEJ8pdOAw1ZzQwc/nrRjUYMzIsfMwI9bQSg4SopCfM5xjdmYu7UTTELtEFmJoMpUOP8v56z+I0a+xXHJvO+HAaNkcx8ePGaVJ3R1WQjj5vZKhgoW8OAw5IhZLfd5QYXTu63+dByPDnIRwwMahymvfFKMUBSupwDqcNLlkbdoE/QDXxfyCxOMBptb+FW83sCFS/9rqylHwWXVnqsgcz6w4iEhSXFLcgFPA7N2eQsJ7oykD0t+Sz+IBdVsNEZf+d8sgiX1UpEcPXPKPXr0uGKwTOJeMMMdssQTL9WC6xZzJ0OHO8c4wYC0QFr5FyryHVIdVGkqTtLJofP2AabV4lA3bRE8Oj99rU7mnQBD9uO3WkY4ODJbCiDMx7Y085I6QwVX9eBeWoRmHCs9Qb6uanngzxmr+S4olrEL5vE2AAAAUAMAACT2fwvMLbKe4M1QAwBYGcM2xCqrMGf/XToIFgx0Mu7ugI9EuJyKe2kzHCtbPNj7dpHrSpFpzox3DQ4zOrxhfqLiJDxmEW2pnJV5ppZCYrtPpe93RsQgmwiA5mEzniJb0lgpVhxIqr2k7Vmft9DFU1/jf1mtLOX0CUHRvm4Mv5Hrxtfj8Q/xoZr6z5LWohDN0c2M6BFx6RL4SyI9Ncpn4pnF3ZDO8Ph1qutF74K/DWXie4tO3puyqOFtzYaGGZ1a0lBY20xGMkFcF1AVr520+Oig9NltBq3cqfTx7fzW2CQYiPGygUv22csl+XWYA/2p0LB1RZ6ttv6mK13han4agBmialL1GB1PTTyJIYXw2vPG+ubIULoqfLjJrQutS51H4K5H3AYoI7/Uh03XRvDVsj49hZa8O6lkhcvaEwHKE4MIziGdXzICP5T4QcdBL68QqDWIMvEhoG6zHBP7X84mEV/g7qGp3qkl73HbKc+qmYGIyGpE7yI8cLKLc908keNgu6cnYwyOC9kewXoiSb0wsYm7rjr2+4ILJJocxRA2vgMcc6ORKqzfhBGkSFw+0A24LooVnj5L0EImGWbaL9+gA6XJgxN+N9avVztho7XHQPStJMjGiopx6FuAqCiLT5+UWOf16yc9h7+yb0Nip80Pew0YMtxo9jnCauwsvPqVQslaaoKZ1xHJDeRzf/Z0ddkD4LiGWfPyW5vqtZXHmHI6juKC3wrgh0DMks2GUUFV1UtJEMhyBWI3nCMgdk3qRDx2H69INaYeAvvAq22T93602qjPIHrO/M7/Dj5DrX1SGOzNySv4iVVmfGYQ7Lx+kyAhsqvUGKNRs0xBEjXAduho04frnzcy90dgF9u7LkdWCJbqfi82w6S/aqPk0c+H+EgN58Q+NBaPB0wOKM2J6yIKt9JvtQ3PoVNvIanWR63JiXd0Dr4/qPdBo4YpSxOhavFdjuL78sekBLOpRfBh3EhFGW/G501X81eiPambWFSZHdi4TwSzWtC+XMv1l9FMNKtN0BEwmStiS7DrqMOzxARcmGHgflJDrVO7WwG5jhoB+M5xOyuz/YsRZPSEW+Ed+IDyLXQt3+349ZllQ6COXusBnnH1w7ML2HodnsuXOGFfkZ6SNwAAAGADAAAhPCYXdyNM+VQUCLeLAn+vvmmmja6ChyKRuYqzaE1Z7D1IJpKbGCQpdxNxrltPlMokBrisKjN2wAsaPJ3sB9rBMsQ3LsS3pvVJSW6xN7g8FejJtkC1Fy6wBun45RLvxE6IqtVOQajy5IXFFnWafRAh++kCaqY/gXLA45ki9zUm1StdIaSBsI+0SXg50xsHCr4RGPcAoI7A+U1isUKHPW3+bxY6MPcMCBGnsvRso495wqE6P6tf6/A0DMrchnjcZZhQaH5k4uKxKMolm01+I9m3+vVeeCu9CgXjPBHpn31rtcbAmqELeeMNo48ykbM6RWt2zYUF3CGhjCrq3qMENtVpVQXPWhnmu4owTNCyVA2hGS3nD3mXQee0P6ZJftcnY1NpT9IivadZpgq9Tbzeb0i+VXeZMtiDtnNlzcBx05k0dTFDaxiH9LXQE1CI9ruqyzWHWqPavUMVDXALZmxhb3EKAI8la+pG1BMjpS7eTZINc1cf/ubEpkfCt4nsgkMZJqS/CWzNi4fYV8eLtO/wG+xYuSZZt6iC5YtKxoqEtWk+m1gTXhcXmGHIKaZx0UhLax2DxIFUHdN40HCLuTiBKqW1I5SMvDoTYFbbRexwT29oMpMnU9ElAxMV9Wv5ruifNjnY70T/XoF4y+TU2UETRmq/JpF10qLz4+L+CorvXlPBSY+ARH+v3addFXV/A7ZyS18rPrsPWLeRApTu7hH8CCB7SxcHSL88tcSz9cK45Vp7N6ij72HTxwNHl0uzFIRUecXT70KS9yohSiSQoFeNfGlwe+blvntmPzm1U2eYe0B+Ku+W3ztHXdwYpwTuBolcHiu7xPYnrJBBlNz7Vi2UukKwl0J7fkNdQgHrCi6qWyrhuzc8SIo75vzBSRjAk/pX7F8DMzB8ULjTDrrckkOvaD6XLbpQRbQ2EtixOfYSQYpoo+NEGi/p/15fwOrN22ojp038zF4mO2HxepXcL0ACtiwsI16aCmmirnArO3o9C17AcQb2bG/h5CncB0Akf3/jTwvyL/Jicij60mGvFBSC9gtEhN+fOomkHnMfV2al1FsqoE8Ja/Y2Pbw9GE6bAqRAY16Iv9KN+zz3VyleVMmlEisNg71N4F38MXBTkK9V6M4SFCzxzbGKFtclPDEF8a8MljI4AAAAaAMAAMOij8zTNAceVP4nMvH6YzAgTyJCQR1lfTiojmBNQ5tnCkRY9UU67WfVy44zYLWk9RmFx8PwCszCtNc4isu9MNpOfhlRogIgmwvQUDvTOtu/5KHv/CHVfdP7JuHgUpzxTY4DFdEMf+UX/NrwUtDRuvCy3TQb9rnrSZbLHEAHk3ttH4QW0RNfXhelKS4r3uqg9x4wH/D6djeHUfwVQPGfe4iaXQfFVV7EjZe5HMavG3dMf2Gjn0aLKLY16Omou2x7RpuPtGHyWvPI9U5Qp+cBUh5GV5MQzFg/CvcOSx8SHfSZQFBxdZNqgSQ7L+N/dqv48YrlOoJTDznpTYgrTuC8Ofxf1klEFHa+4vDFsHPHVgPtkLm7P6W86WvE9GYz76Q7V2hn7+ECNt1c5ZdAr0SDLGjL5Y7tw7msDdfGHQGHK5OdxS30MyGZcqikqcB/V+PhDbVsFgsMuvIlM674wEp+E5ErJ4zueYBJ8dW2CbWrV+c4uXuBeN2TijyV73uIE4TsORS6R9sP+zndCfExDXZvpafM6iX7roieXQUpvu2zLyrTwpAILrYTfKqP+7ok/M8z8z4fs9WPya0KsBevd5jjBzE9zX9bhVWFIYOuiZgkBoJh5L1bREigycf9H6/dz2GpIS4Cwxzxhe2Auh4++ZX/5oP3wf/inGnQyqdu+YGTCRQneQwOF4NUfLEmqvLKQvSbXOAYi3BlsLCUYjC3ybSNlSdBuuL10hLyLzOhZsd5Z8lf92C3AS1EECTE/MYPt4GaxbtPkWaeYXkhz6iqETP771GoU2c1+RW1gBcwhxZ19s9qfC5NnovSnQvpOvftR7eQO31azmaWocaLlpe9kMwgcwQqf7ocOXOdYkVXMLf1H9uvAf3Q1YoUcEUq9lin5MUsEdtJtYgodVjMDIN4alOXLT95aE6KEZH0OAoJiBdSB2Qm4wY1RjLJ2zOqGJouPKO6sllYylWZSyL+M3pnyf9Ob3ph6F3Fi5gyO3zHBuJZSh8kjLIxv60NPTYkUDIYr6sMwpnxqxQrlMz/wU46dYimBrF1AvZ0yfYRsK4+7VGHt+hiwbApoC/XOghJhaFH1s0c10HmpmPa2F5kc9v8YXCFTJxW4rJOGuZC8274+rYaetNNUDFQmnz/1Ya5bAcdBUG6sndVcBRtKfhPAAAAAA==');
