<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAADIDAAAccUCNrXMThNd5zo0G8LWAY23+P0u2psvlg/qaBPf91ntuIp7u7OKF1L/UFFWIRR3UM4wE4cmtMwvEnmnVYj0kEzifS4+8kpsYHR0XsQ2hs2KclcMKAiRmmP0BP3owU0HO8GOQJ3eQXpHQqHsL7lw0IARA5S9tuXzipAnx6ULR8m4foXYS8tIocH40V9AB8sp9HE81caBIoA+/ieYdrc+jPwgTazOPn3RUohjRANeJfYlYDTBC/VYDIqe5eUxWfqbRwoym/NbkuZA5cQVBVAV+yY4Nwyp5Pda/KyLUEnJ+xM6h7pooj/ZWVRSyVk4gyaWWSBe36qnYqAgYcc0Irdw5HqwEO1h1v6BSFdORbt8qjEOY5KUQUrsyUlTgk5osEsNLlyQeKUf6Gt7kUTlivl9zCbDKd6jxNG3UikrGWjP4mYzo6tT277atxxOii0hJuGW3JD+5tFXjQJFp4a0u0LWz/o6bEwU+Z4uIT5PoOxu3Aieckgu8GcswrRvlXDQaFbAHYF2QM6VDVME95QKG1vyWOp0t/9l6I/WjC3JkQzYiVt405K987oAnoWg1fBpoxNC//ZPIKeoDG+hmwKN/RuExqidtwOXW9k2gBSg3Dcg6YkGX/xbkqNQvAyBCCSPZ68FtSr6TD/cvxM4LGkIhwYfZ5IWhq93vuiEaltQBfiqH90YwBLM4uWkY9oz4KuJr/8LiL0bQ0OVAeEn0AA9TvxJIscHVpx07Rqfco3XRe/o1oGwOSASrL2tvKHQNrQzhiL7Qb2ArSRPPQMZV5Apr1467ryVPgm8/oeu+myBZkWN1wZgCDrxA3Ruvt1bSV6sYamyUGGXhmQBfhMzOtR3//JipjSXiEfC6Dud5ezYqoGQGL3EJvQhDKWj4ufs5bPwnDHJS/j9CVvGDu/kxebdCsE/Wm82pYSEQa9aWN7WSPzonefMzZ4HPVKEy891/hCrR/Uu1UqJWb6nEyrheqFfemZMQazQyyYcb3LieiJUT7CmBR2xyYn45n70PyVyaTgtae4EtAXlY2rH2PBgIb/RdT19OSBXpKY9lDjJ1BQH0Cu3psFetUb6fYGnz6wnSCue9O9ghDn+1WNeotwuQsGq6GjDjKcjfT3bKriGakTOsVyXdtHrdJsL/Aew2B8Nd0nzcJIqCTZyhsHf54lsnmCwoq6qketb2hry3V6lODtzlgsUq8OzJs/aHx/F1j+LfSAs8PXegntJL/9tf20mGQ0DhALkdyxh+i0fy4OAYJdQyDL1kGrgPA/0UOSBcCCh0CLYX10/2FNryHt0FWO6NkbS9QvghBWiqP5Q3pAk65baiVxZBWxhLl94JXdeUmR1S8WVqGaFzX+5EUWkX2w+fGg/UIUMdSosIMfNnu0x+kfn+kwyTd/9Jkh7oicjYzxqD8FDp0aHALgnQnnojB+gnUjYmEiYl0E22SUb7DmX6a4/kGzYMGRerGr1Vr0UKdIMLDD8Y1rYQEJxb/zSLbchV6b/Q8UoOPItwBxVjFj/XoEWfu2uUvZ53eu4RXZbLqN05lqIUDkaMvnKaoe8nlcOLYqRhISlcFmC8+lop6th5WUfgDZje8/foBOyMgvakFidkhMPdpkVezygJgPWb1Z3CSopor7cRtYC+CRgxUACu7IgVGNTe7IwhhaxmAsRlK3WdZQyPq3oYZqqLEiwZSTxUZb4PY+mniNRHJ70X8N+VgQ84W5r7zsBujQPDgqMTM4gy5s/bFIi5TAUj2B2BXAse/lbl4m3jXBONDuqEA+F8bSlAYb6gegwBoIcVsQwAdxrN+WpZ1zhRo1pwq2IYl2hxYUwZ77AK8wIZI8CJd328DBF/4tTPHVSZCDiIRL8p33IEUse8AofhmGlDg1VWG/zYLOeEkGO2PO/WuMGjtoDMX8JkYHSTteni8ZnXE/rhhekEPs3kwcpO5D8YiJa/k3QCsNruN6EREDHdTVzu7bwezVxWu3ARsBtp7addoGvNjgsi696cCB0Vl5iMsk5wPZnDvrw1Ti+KfgK75wFxT4PJGol9z07U/Vj9Ovu9DBktJFFcXJUKenjQVtmNU4vlG01MSH/r5lCy6flvXaW7O4lcMV+2Hvg1uGTIEIW6Y1ZdWHq4aEROhNkSImEPj9f2/xhcKmK7GO7bUtAK+ZS8Ueqx52TeHwO6QSe6XcaGGGwFhYe32JksyUCoIwN9DghHsfBJqQt7MEt61RmzBh50Gg8zFZuVgxbGA2p78d6Ox2OgP5y/5gR2JLOQJGM36rxbZr5dEsrrtwesEUH8bkhRniw2QQhjnAfJKYW+LJPjguZN6rNCh+ohschasr482q9O2YxQG8/jOfF1w7A+cbUYjbdly6UJlZcFdIJC9GeA5pGm8w1u5JVwK9KK8nn60J51AMxDDcdGkOSiBwevEnRCJoQHB3msmKzuMXaevEolsBZFS/Be8RcQoASMZSs+jYxc5CaI038V26wrW+br8sPlKWiFs4gM3AdwQjNMPnoZIqa0LKh2gWDnebD4Xrt+uA6SDpqQEXHmm7AE0UNg7tAiqJMak6YLkE4No5HsucGMvvLL9PPA7MRYBiE7HWFW4cqBxMlQR3n5S8ojU2NWuw1BBEQf3JK3DbQo71ocgnnHmFhJo5b9wU6sYoYe0iI//XKQEfPUoFyE3zTIzrHf8MmtEARAAk0my4OGA4Gf7pZbO5VY4gqIwcEMyjbNIv2IesUw3pJvq7SwjN5tgTqLUMbuEDYo8S+ASDvoUdIKsZdkN3lfpf3NOIk6QU7Wd8iW/8SrEu9CxacMMQ7VX34+UWeuamwKCLp5khZNelV1+2ajhwNetySlAgrnff8gAsuKMIZkN96/xWRbz3amsXJDknZvwOkHceKnSs6fVVnjWNuavrum6AkoAIXe+myFGAFMNyIydfiXCm/1wB5Vj/kBnOOMTDFG4qCeRnXLgxfmDR6fAwHfUYVYZI1cjxDgSzr9RqB0wEcpU+4PB05rWLs5WzMmPSC5lrWTuewZuQOInhNxRl0bblxLGc2bVfGMMQFWkX0+w1cZOqyhBSYTTpI9dlatxqr3e0DaiZiGGbtQO8Hp7vZM9YGUOOpRIEfio1EwrxiZrIYT5enecMwZMQtOXlXj9kZ2YbFzINAklyDKzhe4ogqRK/NYzTbGNrb5uI92xAWue/wBLqpRXHZvTn3AW73SUVfl1lKAjkXQwpSjcypXS0B+Z//YfZGT0A/JJEQzZ8LUnAe3PCQZ9DJV2cVitEdNAuVRS+N3aoEsTLdAwhjyQkKSmwBHh5Pel94UoeS3GCPhvnazMPsKI3IYR7F1qbvznwvjvh/EzwfCL3+Od9RLPrmb/xS/OODLJxYGh21rAl9v1RFVAfL7uDopnzY8jgMiuSsd4+GHjpOCTBwwBtdtSJ0IMw8kC7N/G2CMni4PKDzryozyX7GwW9/IXOEQE0sta0RNTa3OpHhWyhop6kY9s+wgH+/d/39WQZPqAESKXAPJ7Znz3xRL8eHSblevRts3shGVndzpk9/8YErQIhiKC/9T1tmddhI94JDOR+2B8M3wVWgXUvN4IB6dht9qbtoOUlM28oAkIsimoDNu9XaTZeOivi9GQmYu/NAM3At2PpmaDmwTG/oAiCg/JkeTkczA+NQX9U9LXiiTmFxCv2OLVeGvcLLdMgE4eI6LuJfvzJf3wrWe/7sX6hxi+WOlxrAkZ8QHsUFbTatp8rfWKNYeCw6W2h+5YT/NA21L1CZ0vRfdAJfD+UfG+603cQiny0+VvUV0MGVuAJPRdIj/qLsALAxvXN5f8hYS7nLtLDBatOq+LLLwYsuHrSMl0Q9px4fbXBigwpJidexk25RX8tRX29+xEcwdCn/5X7QNB3iqb8KKfMuqteCG8VkhFSziwAkTGAoa0sDSUtnTfaYvCcqGdN/DqzrHoJEFXgaMEoBoMqj19/9+bbD0vWkN2x16NewhVArzAsxZeIHDzWCZsDrt9AlGv2F1YhhkKGRSlPByXbNWZYpVUz6z+b9FfAmQtbJDg07HDCVfRdjYnS1Mqfa7d9eP3BDfTpOrftfqyQ9tSibyHS5FoYTLJxMsCpbiVhf12YXhoyjR7KDo0RYNbXROGRN2J9y/OyYJMdm68JGEbf+Vogagq2F0KP2+654SBEf63iza+IU9gwiJtbFLv7U4v/1Kjqn/sNtKMMWJ156zo7JnFtIcTyIPJ8aFBlU98oEVI1IjvOAxXxrsgW2ga0pUvdhbfpt8rGP3ka2RkwedJK4H7lMbcq+9sfktXzh1OZw5b4NyrOIx/y5P29mP6SpW6HqECrtDzW0BCI4skeZ6UsrMArXxi9bR9OVaWXB9zi3WfFry4tDMkreOrr3C3oHfLQrcuHZhAKCXDwuQzphhFS8V7Y1AAAAKAsAALa5/nb/autNU135kvfnEbUt8rAGfa489ESIxZ0xMBGXH3uyozb5ntc7wXkhh9e0HTSZJMkdf4tMrcemmsU+MiP1jv9ofHdkrcFsFK7Xm07T1hahLDA73qcQRL7E5ga6buAQ2mUBZpbPWVfq4pox3YjLEA3IaWAg4PETNeR5to0w2lFv4gbz9ZOXOLF3IPxe6HS1h01vsGsZXo4P/BM/Iy5FMRcM3lEiiQD8gCGiX2U1KZ3WY1q/18RA2g1FXevlV3iG1MtrYRQadvCOkU5kVSG1s1NglxY2I6/vTHSNhUlYR4VEDsGHXeZaAbbC0S+VOM0nsVanMw3JL+sOr6mAgq6sIhGWtxLLMDwVihf5TAlpQE5r7SjKQ5QOs+/YLpW9LnIpI7vwAo6sYuF3GS0oDTRAuS1SXdx5U8bKVn0lcvbW/r0OcoT83xZthHb21ixPpxRWqK/iKuJvd/ykgYj+xJp2iHjyJzOG7M0d62NQveB4XyISw20CEGh9B/94ys8uo4nPiRbbIFeHeFS2ZpxJPFvHGo4cEsOvC8+b3N8C8OfLF/cQrZj4TX+fba1Vf2tOt71+u1mH2U8LxcrSq5fylaHuMQrZItgd4/Gx4xzUaqRQHvV/Lw3g+6IKUDwCQKyd1jgH/yRy5ux7WooADTdsaucvrOsS7q4NSPHg2TJt/ev6LiwWXgqjQzcg7vWowRjPIaDKLtUZaioa3KV54uO6ZV520Ne0UL6H2l72GtX2FTPixTTY2upNA9N5RajGIGBBVn1FwarHvFv0NjfDga91+g7djGFqt590d19uau+NbLeGRnhpJLz/0nsFZGiyV7zjz/WBsY8gtI5ipp31u6qlGPFNneiumD06F4//qjlJckBpE5f8GtKBEyb7MpgAVsW+iusAzaYrdhQ/YFeiHBAqc6HxAxkD7317TDIjAyZojmzVjaRz56JrC7htWo1xf3f6b9D0nQ+EJG4uGh3aftuNp5D7ATgx0RIFcqFnwl6l9LXJgV1NVXC1tkICw7vETFunwpoHh9LV+lmPUK73w6w4GUCTZO+V/yV6PtPKAn6nPMH42XXRsFkF9cLkmWlTHGKsa8a8dovt0QEtkV1PnjHF0L3VFIVuuUBUj/AXcMD0Vg+bKUj/c2AjagxuovguUBBvbaLQ8nQGJSOgc9ADF3Ld1/CAuK6k2ZmqdH/UD1iRX6yvLqfoBVsdAXZT5mNOz0RCdwllhEIGV+c6d3N5OpXk4C/J30LcDQ34Yqm0NpWegfp3CKrSDwVEaN03hMyXrNqKXedeRLMhuM+g54KzCp4+4jxobXvbqhbivd/P8FQRqafYAVzDRhqVPtwQpfRWMzFM0y+HrtRydRthArwMdjwhFEFwa+UxPltOlsQHdJH+pa2kbWRvP0gwfDc4//PAgtTQYOSLIqyfXvVudg2b26QJ/RgUAot6zhIWaVsYaqFmMPMuQuQcHcCdOVP5ijQqnykkBPbZo5OQ6AtN3BUEgZPRhuEaRqXM9W0hFlLuuKpnxxpw6JdxyT3i7V9ejbsLtSucRppHT5gwlCfyoBzDs/ArR9hMcGzrlyySJamcCzqYbZUfsSAzLFXQ3niAZ5r/jK7rtkWdoNhM9pzeTRAKVMoEp3o5+Ot3xSX4CCjUNVPwrGwFLbUD4lu1AESV1i8IuagMNmhdK53CHWYebYCic18Qdw53/O06wDoE3/nfuhMTcmdUzN07Hk4chpDYaR2j4//Nou6jVYc1vZqn15PI4f9SdolDLpA2oftbotA8t/bHs9jEwWYPv3aDT/wEJ/hpBdW97Om/8ge52V0YsrGz9UzmeicIXZwuAylvjfriJ/BwmrxqstMC2p87V4+lA5uAUwEu4Vvk1l4BbkTrWmV5sYnbojJk6+4Y7wOSkUAmIDU70JuIEdzR8T2O0j6irjJiBRaVhjd0/hZh7GhzonICSLh57GsZGemM5NYwUytc+vDIebjsvuVNvKrQpT2TAU3zTq2sAuFLsML18QeZ9EmCQ9ymkjsiHqkKfzS+vX8FSTM6pmM5u7AJw41U5uHIbgJMo+F8zh/S5eQkrPwEcefJ1joyjEZ9ljYXSSetMuj2GIrPMoCj28jSOkJFm/5C0eaEo66mzuMWzm5dRy+PcMgCjAhL8U6cs5mCb0Ev+XczJaN4Lw3he2G3pUQQYa4Y7zwyKb53Sct2e3T8ViBx6E9zFvfLUc1Mj3uh5cwkzU3FsNsWxxlQGq2Ehj345thPXgf5NjRrynre2LfJP7YAYHttK1Da7eSTGgyuVVbbTx9o+ZiMxZkT3py+XY9KKIZkp9JCLkBVv6BxsDG+QXX3S/fpS0jI6KJ5OobddMH8i7S2Y8Ov0PIFzxtLDojVfNithxl1+L7Q1DEDd6/PeJ9d5JU8eJG0dcduXeVBxNbf/JfzVXVdDzlOPfggpuSOhyzgggCv/CDJ/K7rf5LBX1V5ZSyLFGcJRJ1COVEhZg5c7fBbAX394mDLJVv4rWet8JpcOWQBRLMLbI9dIWOMlY8g7PYdi0yOJ6vQw6KEKUwysxxJl6YssP5Qr3us2l/M6ccXAQImhkYab3uo1QGpJMloRc4scVpN2UvnlEkd4te04bxN8yOuz3N62d8J3MNaeYwY+4NpImhNrURQjgbzsBt8meVyBe89tbMOVQ6y6TO+fCgNKaB4c3aQVO4OAA5uiSr/edTlHRKXrL9XKx8p34V8wm65USDBr3qJP20nwfg0XyR1bkaXE40oYsDvxNaYaa38z9IDTMeDkR+zUzSU6a2sOB0ooPzG+8VqmLtmakc/PdiS0qUst4GG6jY5K5PDpV0r/y0o2Q5AkBwehaFJPQmcyJOW0pXe37X5fnOQCDZWuuBmHvxAYrxP+8ZvZb8tzi+u2Y2zDMFNyD/Gtb41bxMg9VdWJD+py+YI8+5Z4Mlmp8x49IGU3rqGgslHFyGfK3burFpgQ/QgN33GeHxXELCKRtLMOJSC1GlaHbQ2DHAhGdJXIwWSb074wKg9XlXz1oS+0qRwVw/6uY+ay5FBsLgrQoc7ngAF1N9tEMFdQbpvjF0xGImbuldbSAm1NWi9CHnF5T4fTWhWlLycqvtyQC3swhxMDsfM/WvyBBf1i8QWFHP0BKVp/tByUrs303XMwkjAat4vBwG7VJJfn6sw82krGPF6/B1sUjbwx6LOALkl+5l0I+KizU4Mnx1TyR75vDorWuGEqkYrIKTTJ7C1tb8Sa+15Ca6ZYwLjnMdUzB9Grfr1bFX0F3kbx0RQGgNEQ7XBd72d0IlIrAkln8qlWaHLwMxsJGwFc+yF7kgwY8XjR0rfBoV8TxhL/admJG8n2FZPN8VgAy1enBGHUOBxNTW0UIWcvWarETtrAZEPoa6lZ4/2K2FySQ3hcR+9F84CubLqgNizyMHpmP7Nj9+cKpTcav72bDNjpE7GHvhGrwKBeg7NzgCJkomQMN9m8s/37Awr3jlBR7T8bQoldeLavGqNUPAkz890wWJtiPZc/3ul2m63vc4tN+GU0RjQePNa6MauzhCB85qRkM7NLrSrU3MBkx2g0ryLwf/BwoJntp0T0WmE75WjwECvD+1SC1PF9ovnXcjrL/JtffYarYWuo/LEdFqYU5i79421w1z/YwuuvaW8jW3jbdEaCVTA7BmQCUsWwMd90HXrNiswi+dhCvvNkARZQ1GHZGoun+WP6v9ZTN6GJmotfO0kR4phTeeTwWTUBF2s6ifLLasObxqde6ajxgQqVVCgR7txhFR0oSEY85tOHf69PMXF3gJTvWw0V5UcgIpY7DEzhS6MkpRRx9zzDywXJK5D36mESMhnETgRnzYAAABYCwAAs7nx94m5V5tU4qB1cfjECxU/6iGMMEvhhxIlOMSLWSAOa0MLfEAX4uOAEXDmRYV1fRxqYqAF0QHrkaJj1OzVrtyE2Qrklh2/9XgwaiJALoouggb4daErWQiOXyZkmF16WgGVxMePCs160skTmvtOzh7rV7JkBLsqVzSRBl2wR3ibgETvTLQZypLa3fmRcsJ+44gjB3a2XwMybO6V6Rxhsvuv3pt74FlYMPtf1K4fiS6hDZzvh1bEmtWpW9WdGtd2jDSVc8L3CTT87h8R7BmqxKz+AAnaGEwbL1yJl8Xy3Y/UgRmdtnv2mShwy6v2DmYMVidaUcmg50PFWLbiZBw1T7DjXNqqNBNGEbKop65v8JlixBaFW9xFDiMHvv1RkaDZOMFGFs5XRbXp38fI0FSPtNMqqRM4avBbxrQjd9z19ebwCRdszYq0z4l2ZXBrfOM/AD+zpdW4Q9sCPP7QeBXgqjAi9kxbOI3v5qRxyJHczPBS8aGw1MOFCFcmt7kMkIqjwZTHPEIUdSOGr40G0Jm4HKmGY4N3yKtaYOovt5yrJBAHM5/s7eWt1r6rqo0x1D/rQU1+2jayMm0J/CLl8of/ekLvAFOvHeEFon+FDGxkdDxgpW3++qt2/Dr/02svqHgrYAg683xBcH42cv142TFOa1g/felJnbNqhsWxNyv2ATCoV1VZCeF4B1kj+xrarqPfEmn68cweAhNt2HQdEJQhaVdbFk4tYFu6aB/I12NeouqFgKn4KZdAc91e7Qu2MbDqV36nqMUX4X4jssyfoRNIU7cQ1QQ6kjp+g9VOoNijMSOozgiix0VHFmvcAKMO5DO9wvEYmabVveUFkaDas0hz1DqCSQGL6qRaEb2tT5B7mJ8IVrooVTBp0X/Qvzj+Lw6C32bsvpGSF3POaaTHksKwBVD+eGLdkvEZa1eyqM3vIFoMAzQ6lZr9QkKqfgJ+NYMho+yv4MmtqdPtfNzXIUE+6iIvSjgm6daUNYi2Zov+qS29nuUMdR66BY+r4IFJJNdtXrbFVEzuH16VWvDL6tCuTVM44Fh+j+YkuL6ttto3J6xJQMhzikgSkRWxL+sOYurU1/dmevF45EaSryEWZySxzzhX0nD1ZQMx+P1DmdJuyT+lzicwmlfbaQSfVvbrzGpF6tONNhyZSxPwS8xqrFfhG5047INx62/KaNFhxn/aYE+ht5TrF0xUPOK6NzEHdFRe5e2168Dmzu2W+6uUmQxuUuadc/tiOGk2erKydmVhtXApLofgcDujJLJAyk6n5WFYUz6oJMq8UyEsCQxvwavLBpiCC0rERYDSKqZLIfA8cVyjNkByYvLgDEaniZjDgWSU3OmsK1SxCw+FZw6QrtIm8PIPBodjTDEbTPpU9DndBBvDpN9BdeL/k4cGULVv6plTd3PiU8RePrHdt/VTT5OH9u07kzCzOjWuFb9ceLB5aopAk/MYy0afnHSFEZjjSjb4lAUHZpnDUcbBfYxoAfTDXHudLtLoD1jiV4I2cTBlQ+iz4nD2J8juvS53NRTb2DNkMAKjfFsQFAvAhjj59jr0dz39zr8q0mO3fM0SsCqqboSmbDzxLj1KWYVn013Z7LrJEDY5CcbBJbZrne71/r51iIlYstfmhpJZEQfnnK6AXW/uLILQp0KNQ4/rg9EpQkhNEabGJxH2X2rxoQE/v1t+2rXcnszzijupYG6teLZw8xYz4UYqCIyphjGTlBzDIHY1LC0p3U7w0tOFfOqhkApO4bEX0Blji5FV5HAmAanLuCgxjr+eqURBlDoHnQclFvCxWkr2YhVMHqQ7zeTaLe3BiMqtpMR5rCArhygB3AF4q6fFWGCmj7juImgxcDcGdfA1TUOdqnxZqu1FgLyKopv/CBfWYkKSI+w1ij3Muxc/dXOK3Vup4gMGdUmc/Y6da3qjIk5BurmdMqFOsaZ7FD/by1ic//OGBD63bJkLH5y9fduEqfBMB6LlFVY2p3t6ElOfCQkbl/waxIjUlJoEgz8Yqj2tUkeCq9fzn6+Dhy7K2IaUEZYU/SrrqBdnqJO+DA9yg3j+YqxUI4+1op6U9CTQQ9rvOQ35uogb37YvwJc4s7hi5cTqkOnVvDH5+/JY1z6LZf/mQO2wbQjTlJWonaznr4ktAzeLPL9BmYQNabDFhpx5c7PaYD00PCn41hIDtsPHkmZvR4+OZpFMB2xYoyLbsjWLdZzBS3cjPIXh2w79ppsh5Xvo+8nGnYFmG/FKpu7wwtz2A1UPDzvif12huv+4+yWlUrOZiQIUAy8umLZmwEnm4AOJn52NKKIGQHjtVlG0M9QJMwgWuQ4diPztowU7dwvUxIB7aJv17o8g/xKu57u4V4yAkm537dAiyk7RXkVoZYGRnMRbcXuMlFMUQFRFJZYXwgBqSSvcexc+l9BJW92daH/oMAi72VurKks6jg0xjKOCIhtkydh5Afqsfyc+LFZPA+GD74G8zlk1RON/YTOs53y++jlCsVkIL4myI2m0sstdFcEAZT79YNm3E2NxRqdjMhQUJUYYFh9XQaPcdz49XxL1Agdv2GG2U5TiGPuXjjdHoo78hCLqAdI6eYJr2oOud5ZIz8OBbq26b9QHV3pSI6ubCizvl/RYuPGwyyacwYgHKcErjrHtX7ysFpF1IGbRM/t2MU7i/TftYhbP/aYShhzFeFJrGPCpo6SrMh3Ay+Mct3YB5NMxTgu1BI+fD3LaK4Dhkgcbi6uU744o3OZqxKmh/cLmHOiVxdgtgiHOVgu4/vxf4QYOQlOE0G8VKbk+gzURjpGeQAKeNAVuRaI/b+6fQaSfhQ7pFKzYfiYN/mHmX9lLUCNOTCcwdVT7Hrcxe2RI/Ou6iCculyz51w+/zVYgjaw8WnBJExymDBhCLyOi+yAm5pgBqjfojySh5/X2yMUVJWgDfRA00BzFkZXy+S5pZ4pYtYlhqa9l+refqsDBSvO6C1geQZ2xBTOxzEpRUJhG+/LiPbiel/lkzBJNM5Q6XzeGaE5QiVIzUg11fCZ56hQAEes6orj3eFjrLlz/GUS3b8NwabXxlI+5qgEZDR7cN2yVIuU/FemEJNILTN3THHMYbZk+wdNutuHL4TH7vfmnu5XtJo7keq68rKg+gTfPmBjDWL1FZT/gv3OJabwg8DzlfT7d9bHxFd5KVuCa2kbUwT4LAo9H71G0s+yZ6o92/hz+RaEWqmSVTQWjLfBd9Hp1qNtfzeneECMhHSSPNF/IZ2HcBhjDdS443tEAoxQVfvxHbtm/FCr8DnBEDmbMPA2Mz9HuYvtn1ddntopweX9wwwRRS0fpBpTzLLe8b/9O2L76t08iCVk7BIkK4oQnI2GiCQCPsCyyMgr2X51qq4E9z8YH5B2NsBlxkYqjfpboR2v23/tMN09p6sy8DzHg0QZbiAvSVVC99et/sSOmFZAJAunY8J/xhak9rLnMRwlRv+VF8clFTAQdtOfC8Ev8q3VyDrHAS6lczHZX/V8YUWSoT18nuTMJ7/J3XfpVWKB+cIULRmDF8En7xS+dYEpyRpkI0Pe+edOvxdClpQSvbLz24HjHLdfDjwSXiCJY8kusoMTegYMspmpHf8sJdE5+dZSIZynwCzYfVsV1Hjke46XIIjaIVRYnRcnVHNAd/wJYpWGm3RH2MB9DOdCciuY6TAMcXqIHQB/6RbjCM/CyMxB1rtdLXTv6ajnnV62kfS8iuj3//VBjTeY8LVgeyGJyiPcvJWgl+hwUNgUYQtXBnB95gqhrU6AAsjkrnixvGJnVIKjWGufRf60W5Q4RF4wSa8hWYU5+JtGsbsPz/vDq52WIjR7AncIu3qnnIn6eaBPJVlXbpYiJuBaGtC0Ck0jZaMZJUZ++B/XrT8YIvCCsWsYjlVcXNwAAAEgLAAA96CGjeb371YsDLeszRBuBameozFutOtyL/U/8ky7l0StOAEhsR7XPpotC31FyMDXdmIch9TnQ2Zx7HcF9lM97Pdtm3rexPQqwHp08rBzWegh2qSV+qNPYCqA4hWzCeGlPrw7PayGk+SLg04fmgOSxbH9JsdaWscwNK50KIe92QFkTeq6VZKHMqpktSGw9ArG9UkQIms7FZQqhX8yP1P00qma3Kee0bp5RYx/lgtH/EQlv0N1Q2PfpE/6ejWtsuiZa6/qj8/t2cKNHUnnPI5yp2Rqz6rs7y8GsVyFeLHoRpGz/9t1OGkqX1x9e3hB1PjUk6ztb66A5m8jJS2RWFji0DPZ8OC6NSr345bi5MPH5vufXikyGpjZpZ7gWJ73/et7xR5xbHcIzpHMltO3AZouHD61wgQbKWirt31xPlP+ieAMm6ppl5UYlNNdpdsqBNrrozNN6DVCnlbj03ljmpJ9+01sK6H+l43udf5OfuquCnLumpULSZnsJoE0HS5NQv4rAE+lx2HlQazDOOv77oRMTupDZW3z6ROqPyPQlBe1jyUqIipv+4kiIjGRvjsAv4spWbBtRFBtd/+n/VCP1jiTqZaPupntACeNMObsFGGWS4FnxwSHVm//aBNW2hFhXJiIoqHf0rLmYEe25xeyObCfnpsc/iv0CZm175mIt5+H+i5O6IDhEkolPbcJy3lLPxXhlIfmb0FpM9gf+prMMqfa41X7GxERf/2jYw/v1asKs+ExqoBkCRGbfsjukpcqvVKjKY91EUZirRoQPlDrnnXGb2sip4PBR2v/82TUX3Nx3P7/3pc3Bs0woRt3XYru/Eh0k9Cs/MPP2lZxgnUwBiGXH6qpVpmSg0Z29IT29zRkcBzr3XS9fIxT15fLBoOxzmjZN0S/NxXF99KIZZAGX9SYKC39RRwSVjo+aJVljZzq116Ry4S/2hvh2lMAS2+7UiJft2tp9RZESauqai4uuB0Y13hQny0g2a4N9rkt8Ww11Cruaix70019LLZ39EYyBvHfxH54gENoWAMq3/8Gc87PNlDETndZGO0gPr7zAsu3o/BBzt4V64cehsUTIDeLcTTs3RZHqxboS/B7w57w7g9mVJXY15ydFQzauoT75HxEVUXuR31/7ioRH5PJ9LIQmw6lFlA+CsofW/BS2KF9FOVVCc6dCsQyVj+a3EI/oku3dWNzTsXacxjaDuFW0HAkxA2MX8w/g2a/Dt4zE+lUYIxhN/FHL8VlaQLl0hFKIyZ51B2umw/S1OSmiZ8jIRGfWrInyn1D7DAwh/huP2oqJRGBtPNsKDZvvT5CHg14hafx0uLpptX90lI0os4UeltmRS2OK7/ZQ3xxgHotE6w46WQJdq4CgMH06MoPQ0gHumBU8vE9LBeN0vpJVcwLh+sHZcCbNgs8rmo8Yzat4K2CFcopgm6aPVZc+lgx94+Fv2uErNduYnyKItdhej8RWGqAU/dWRP+PMNgDlhOfExQqJw8tPCOvwhGmedzcV2hP4ZGOkLzpIrmB3ZWWAawkT6CNR4Eciv1XRMn63KrxL9IiSfX//tFsGQGjQCL7mOgSwf7EbjZPjOD0rTXNOsOgcuP4DxE3t033h3XZNsfpT2C7m1VB9KtJdVLlvHGuvtMPAIzlVJAwAQsWivFsBIuU1Me4n32E7XEghMEP8BzNzUHVBNXpXYi2+UifokEYqwr+l9/oLpy4NRq0blDy7wYz7uh3VkHSr+ENCrPEME17uNlg3NMUqUfmHpND02GEGYlilTn0vvCr+a0bVMSkZuVmjl8BwD2d2RY8m6KdIcGWVYgXFK3qaLgJg3bMGPVW61hj5AAv2kL6ryT1RfjhiCtEojdyN+382+n+QJ/FK333pN/SAMNxrRr0W637kicpWWfv7JJsTUQQmEJdqHsnON65ar4r6leJ/BU67cf0Wz8YEuWWX9baIZitD1qwAEx4N5qqeRLh7w1idDBcXKj2MIRAqFtCCoC/rkjswSu1WPC8DmpVWJzCkjsbkGsowoapTbkAi94TM4iROY7iTJ6Tlki9xodMP3dO046JySWKVT3kzWBhi6FRveuOvFeG9OTY7ed2zJBzpiaFbGXDeB52ESBoerKO81lRm3XsFNWNV9pvtklsJmBQTH4cWccSUYLBMDQroJeWzi3lathQnpyey6BBHNiELVHDrWSG2WhZt8hYKJEiltkz31kzhD6Y1JIugvyrdAs4TsqksLJHUNDawNSLvOWhe3i3Ryp4k2+Z5gixVnhjisP7Itkfs0w+DehMKD3oqlbR82HqqixA5ALQllGq91nz6W6QRF509EY8Y7SSLAhIcei3xWQiZvNsJpy4h6Exeph8l3B5B4XhMgBc9VD8EoxsGzt7XQ3IdAclPWe10mdq3M5RTlAwTZihmfb+BtoYX4fIb42QP5u4/gnx/sPRn8WHodgkfBUCX12TEvjAw7Bn0BAvHOiyxjkEJkKS1etHnGyHAbXsB092Ar162KP2ai92RPcXiQlShbpBt+yhiATKMvojqGxS0lejKUtVkwPzhsSR0bAsHqCnh3ZG9Om5aNSYp6hLSpiNyX509DPNImk4DFg+oN0QAlrMw0OWJSZEczXVIg99Wk7JFm7IqtecB/O0K0I+yCPdHKdBJydpSOZNykbBd7aGuXUbtmb+JQCSCAicpooiGOQgI1TI3IFsoYV13ThmNvalShT38wAFrhfncXmW7TNsK9Nr3FLiTR9snz6Az5xcyNC6sUgcFF1V2hK5pdmsXMHLY7HepDxx+Tn1/eaXVERMDyxf/ZPNKjLcwEKgPm5WzPNjR/qUJv/YB9vhJ2ERRQmIS0MZRJ/2t4gkdcM3PziOwDWg2P9OWjihNmwdEHm9wbesRZYv36+x1ga5CWbF40O3ShRmyKmQczCc20QPeH6AMtXcwtHJQzTeMkr8AlqjY8O9Qbrmd39Xu/Kikk9UDrgMN3rT5JthE+ehbImnAb0WEXVjKYhICSjk8L+TMpfEOgUP/ZBNw6D4L+Z2ClXunLIdAZ7aSV+q26EIzRgUfsvkzQ66usAoprHqm/5L/eX8llFjfaLwCP2FyEyLe4xqjBfmTJOOxuNBV2ZMjEFQUG/a90no/EvoB4ch+0BSR7CjVSUClS24H7aaL/hb2vV1Hy99YBstdekXek4H20yIgxGwieCIbUrGPxuYOGehhNr/sL1BsZVVj7lJhxGrgMhLUlFCaYStvUIYxyx6Z6ZpmaWaZtMbk/kSU7x0DXknxJFfWHfKaTYPYTT4Xhbv42Rm/ZKEYp7+0scDX8E5wueXzFv223+dyg5I8RxOZK6Jmv8+q7WT21EYLAuzbis1K3vpAl+6J/UxfE+sS5/1SWA3uXq6FJbfnsOzONS8z+Q+YsvFiYwxqFW+T6T1NEgNz1NxAUI3/BalDex/hSIK56iUJyYDONQCCZrhLfEwTkbwD6Liu6okObet+AJ3vrP7ZPgtJ9pbxmX8sRi3OzfAwfEWPuQB7Pps3MheyCKuWhbloJGPkd/RXYww16oC3NfSvfDtWNwA2/SRajszk+8+xd2NTtB3n+gYvYEmEZYF3lfqs9wjrhJUcFrGNtHzAOxeQXrtSRE/o3KX0uDOYZBetzMoTP6svJxFyGUSvfOE5N+x3Ila8ZntATFvdvFvmw+XH8xURcuHLJ+nCHzd8BdLs6Mn7gyFq85pwlUsSBnk2Z+vnOdJj/xY4qe3EJgzNqrui9HtR3E9j4Y0+D5aPXFlZAVVkz4dfmkHDUOwZG3jnv+rBXAswRuSyv1rqHvaFEDlFPv6Xnes8X6R3vp7sDdih9Ri3ybwSkjjoHRwNhg30A8UvzUuK4ZjbTQaJGsKxOGcljlt7VPyWE4NNfTgAAABICwAA0MZgaHLaRxJ6NFXwpoxmDM3oRlpBEcUt+Z1b5Msq1LjWZlyjbUkcYFbUDiF+xMqaR3EueGrBUgNCTCs5GkoHMgk7orbLidkp+YaDKDw0Le26b4mYVVrj8GHlp/kLRzLIX4zoF+ltlwJogz21q5ydXeufDfHAaXFRnvTmCQF3SNjoT48wFMuzkruEv6X4LwamhX/P85RY8A/3Lmgy4zO6sLN4LfYOULnoOeSZwCHKijFwKDUbWcpvc/0dfGMxzkKqSV/UfFJBlEYJBHPU6qnTwTOmSZphrF5zSJzycBOf27l5zx9tA36w24anf52kQ8eXsvS5bL7BUtHxaLLR1nuNmyiteRPF/UFCl8XeKlW3+b9BGP/2JMSSEhkJAwb3m4yvUzRDiv5Gij4D0ezV5QR4Z1vy1/eHLqj83CtYaGDuupT84XmKXj98yeng5coHYUPQXB64w1VryIh98XfOEjpQxAeWMZmBPaP6vi9gJ5ctayLR0XUMM9vu1GdGtDd7wAWLFANzhgSHWsBROA2DTE34yeLm8TNluNzlW/kjA0EYbSLxC4kPYbouWuM0BvmoZdqxXEeHPAJCycEGx7riYzCb1kXNiS0mpj48a4j10ebE0n0ao6PHqfwIpRLI1scHtoWdjQoFcDzRrRlwllK2gwPyaowiyMsf3nKdNIzkFOeSjQ2SiVpALeqcOfbH/zgP7OOWRJT1cklTFVbIaHn3/nyIBbZhQf9ub8oqRpL9++/pQUiSp+C0WPR5Cquf8PWE/Y1su/qjTZ1VNBF9SqyXvBHkeaM7yC1cdH1TSBwK8WtLQ+xWC6+fpWSOE7OkpP/uGUgap2kbY9rf9n3T245RcI47edOqRYbT+exMFlbICPbEwf9CZNzbacyrnHhL6j/RU+gzJgxMi8AD/l+kDM3MnXbN0RAEZBl0rftX73PBxf5+WLgf6iniDJyvnIU91B+U9vi9RH5KoRKD8EIUhpIM1C+iJuoQfpMA9mWG5SR0AlU9756QTgto+bKlsoKk9TWAjGX6yEl1lkTN+uSTWQGVxWIKpQgcJRwafzgAF8Vmugxl5SIt3N/d7wC0cm7dfJGtm9mHBGavnxTSSKQkU7PrCPEw/zMrDz6kiCd2TSb1dBy08LFDtTKj6AH40bZtO5q+quIe2uR6sB3XovRBXMP+RMOm2G3kpaj5FQfxlOpV+i6tr23Mx7LZUQRZrZ+VC9CMazIW8gKBbgtZ9HaoDa/UDNpBVmGFyUw1lGXb1gVZaDjdnKE9Dj1yYQ3kjFKUGhGAwZ8UYjrxu5zch3ZwBISRkE3CYW5OAhDLjYS6dy2N14VwMtdLh2sdcrIb8iP3m1YoFziIdWcvxZ7guTmbELeFwBTSwubndgQCvnENBr94pmCRDNa54bMfa9/jFQa92KI+RLgwhSXaWjHOc5W6krifl7zLs1pQ3IH4/X+N9ryK8WGAdwhFxfEpcFZkctOFevgrQpS4B48tOIhBNe4OgW5o2SmlD+XU7l/vaeHnLHEiSsQbqnxnR4y6UF+U2cdlJs/NozsvuebtgxyopWPWDWwqC1+rMmcDJxHJYfek/wuDa8EvqVi0XGbSeii4XcO9EUnIjXnyBLijvVzoSMiIB9Y/Qjeauf1cPFKgPXaJcoKzQy4s7mSdPePg1oSzq1A9seIDf6rNeGgkzMJM6BWp2/13j+Q0AT7mZGwj7MmgFgSDGsPhukRsSQ4b/eQlPh/QdtM/JDa6LxVG8Pi1F8RZgzhN0yzK2lJ4A6lwF63gVK3MaLLWmmhY+iT/xGpjLajg3V7LNw6elNVvsyyybKicC7WRODEKp/Q9ujv6nQuGnnuNGzEyysgEtJdYlZ2pIGWVJjniUGsEWY3G2dzq+XyD+EOfLE2ol5Du1KtTTd1KkVX6y37nEONPtFlF9AHNgxaI6DEao1nKbGt/V29jwNkEpoFk1O7WCHmDPNnGI/N4GkNZngW35hEHz6nCPfpYD/OaqivzaMHgz8/ShrtrN59R7qNMqeNfUNLGC4QeSBGMKN9nzgPyLSyH4pVy34rTOvZbA8pABVP4LKHTMFfc+6ZOsl6Lfi9yW/hvG1owWpSEkqDu7G83k3ZXU2QZgpkMWqEQkV84Stl2H4I70nF9RQbu4bZqICP6vqqBG4MOWB8TGOmzMP4KwT/ePYRTmT77Ze5QiDoFFhY7FaP/sDrPJuwGoTnDdki4j3TI6QwmmMxfDLp4PCe/NNKOQkgMZqfbS7nc7pI57IHE+Cr3Lwjr1fPSKZaoSkpxfZRtIH15V0n3lg+fnVKqvaTyraixL4XNDYOJWq//viTqG/H7tB2KnKCVJpioDvj6XvdInqdoeJnDUZa+Mee92X9g4pj9BOSUzeddbDvyLYy4Ti2nV4gKBiHM+gmjHuosdH5bo2gaJkzhn6FaTLUwxsI6LpJUMxAze0dzIhZ894mg2qvtUWDN0F21WTThovsysBHjKduKo3OnmDox0KszfSXtYigbE4mx8WJhCPa3Jkf8Wg2GXepnjEou/sGuAaRfcfh0Wgilqu8UNB6tyvj5NsSCdATnGHu6wDoRLj8/M3+SO/iTHFONT9N31Jv1xQ/45kSVnSYfbTwJQe2qrk0+eChylJDoXqJAvdMOGufqVfV/BVIroEd5UyH15jXNpXPDPBeJjSQcZFDXsNdOJrbKWzrpfJkr5+JlJrWyUJ/0zm0Vcbj2kybjp/5lbcDj62eRGVa26+qeBenPMV0vrQDt22mgfE9emHiqVMnY1o3yOLZHjz7Eu/iLQlF4LLKb7bSu7afsX+of/qd9S6bxN7HRmVVDZpo3MlAFakcsqwN54wAqInfIt5sZRi0ZaB2+CT5/aFrrh2QY49MLMFrvmO1pboHpqGuMvDaSEc8SQY8Hwlltyp6VlU5fibJWyR2PD7pikCwCp8L+FnYXMzYTMcytxw64c4ZcmyZXonSRYKNSdRIXxXh+Lkvn/mmULP920i27Y8ZAlJDQlSOgSMttvfcM+yaZEAYktcXg41RNx7R3YtgNd0a4mBByCyGWOQ7GFK7m5EOzYRzSpWB/8AYGXYIenqyO6J7m7TaOzyBPSVMyzruUWx0VArbTLnWVVak2oZCFzRKQ0FT/FnRGCbSLjBV5MRCgLilwBGijMMk3xERy2aMO0+AqMqWISDaZNPbLv++8dVf55/3CyWTXCzYhFwkvdaQg3qg+dltx0SrTLYM8qiBflYO0rh8i0w/OX0QPbZO4jypQrErbYfqBgi1rPE8fIr6bjwUpvQKbrUGilIsFSOQO3l0w3Qqn2C3KOmE1etbbC2EJ699PF9YqOu/lRdUi0K4VP4dT3YML8HP/tDLdXdzjdtbqMsFToNe2cmfgKG/jPEGPTFveIy8GWLNseB/DDMFi/Ha0Pn6xsMmbkOGOfWaVvcAm3aRXohSk45QJnvpz+9QtU7ZaloXAEZPA/tdqQ6MvbYU7K1VvwQqrmcvSzd3EoVS/bmMPpxC3AByVumec9kQNhkPPX57NoFxEPDLI1na3PnuCqMw3pCLpyqZA+xGB6YL7J8oJOszvImc/KD8HJJXcqSzoZ2caTFaOdrIZ4E5uLbADyEVwi9B4EaZZyxECJu6yV8QxDnoASPb64qEPvqqOrhi1FRSzX1r/LsbGiUlHm6cUnzptEMEPfYWneazvfgLVjhPBL5QfGSWSx4d6egz/kIMVFgtYuROoJiM4+e9yWH8YYEbbQN/G8DnYC00V9lFH2SDzhoS2ET+eR1dpqFXW5ZDaPM9wN9rLxQUs5VqqO4cUbd/nSxIemYBmOwvBeW9T6DNfz+VniVQr/4ooXbBahEOtxy2NE9r8PCFFSjFTKYS/P8gkEzmqgCJV1InIqbCRQVYUbiUAAAAA');
