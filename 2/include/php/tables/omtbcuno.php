<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAACYDAAAs4+b0iGdxsvsd9168qcQhusQJHFLgIYJY0BQAlgTUb0pcJtBNntLYduhEozZoKubrs55zPJ2hlieHjcd30oWef6LbPoBDKtbPQIc4jerHsgYxponJly9iqe/Pkao3fK3yu4EB5st8NWellFyO+q87eApOy+Q8Fhu6KylzZfnR35mu4i1GGbftuKyv6Tnm0wnLZzwgizK0nBTm0nuhBIIlAyP285mIGrRlBAq5iF0peGf+GOZfyQhyb7amgqrVPxUXnhlEZ9cZHNJ2W+E+8yN0eUyD0TCIn/iRMCrcqNLwzV9Ub0mE4g4zBTuSv6rUTL3w72m8gylLw7pMsmyfgth2bftyn3JlG6rRjj64xPE2FqvwZGuZ7NccCJeEm60hUOU4VHs/kkZnF5VC7hO3eg7jsHZjeaxcmrg5WEelbcUB4x8gGY0Mjf493JAiFcMugANyzRjgRp4y5YdWyl8Kye2n5hjnQN0DtR5B101FAOuRWwOx3RuNx2Yn9K1vaZwuk8JwMion2tkcDK9nXe8B38aCZb2cprpThWJq5E6CJUD/RDMni6kRdJdcWykuuyyELPlYFgR9+eZ1bH3xBlhSOTZfXtGIq09rkNhzo+0N4HOzK8hTgbFwWXFz5X1HYV0cDfQQPGyJOYInJPBiKqJ/w672uxRyieej24mn66wHOHNyFQaV5fZgGySEvWz/Z0rIqgSMVKEhZqf53uJEOu21jMUvGe7fGF7YFqjZuxnV5FALQHLIpjALScJgdfLphfur9wrhenBVIiOJOh2nkOkNN7ditiPYQ64In8YE1N4Swz4SSicFlfdicdSi1yRaq7GaVn/0MMuNvwvjl09+Dd7ckay7N2f5soXXTdg8IKcCR0HyFfJz6vqfRzlalCEp7jRpdMSfjqo5tw/pvyI5r8xW0WzQjJHizJKkqGQ2R3ZUz7Bf0Lw8MCKgimuODHXxF6f0PHrTVBoNHSagaw0DEzeonZ7GuQQ417Zh4DcNKSfHoVyYyY+eOGtAGv+j6V5nnFHAYrj/9FuOLYjGtyFn+0tuFYU/zra3nBkPPVH7cq3fB4Kfh6WbTJkhldLLvMMDM8zakqEoXfgLy3DWEgCprHVBHPw8oWaKg3Dp2LktdfaE9Fi/O1CQ3AYwR9b3oRUTWNPW+GQ09yeNao09hoKApXOSeOuxtTE14upkn8abdiVOJ8pX+Od1S3dz1FejOio3yZmY219AhK7IG/bmNDv36ntpZtJPVSePpXemlHQKrCVYjLjLyZmMWUxZn8X06p7RSNDBtsXsS66PXnNJPEWZvo03F0uqF+JQ+4drBivBih7DGa81Ct8jO2OgLbPVBY05YtwI80YVTHk0C87Osp1htCAlrusL2pk15SrHfM1UYK7Qak/qWY98urYX0wcZ4APHE3RT7BD49YrrCgyljzDJj16uEZAWn6m2bfd3ca27rX+eQmmbJ8BP6MGXJs5Gx3Ru4Su73f1QoKdOTsOb9QMaZRH5vmBPnAd0vNxtnJpTZ0Z3sUzYn4o3SHdIhWExzhfnxd2LGfsUJJcMAfd9rHobRHfQwwMQspbmcPSzBNTOrm5eu+P9NXcTmSAOABDjH3P3ReWIHVl/B4tukELAtW9LYjczvOBXwZV8mZQS7sKmk3Q+ZnKibf9vHf2x+65Mvez/4PEDUcU0WTFKCh3N1LCe8/M6DCt00APdyd9ChSHcmcusaoAkkWcnaajz051hh1U7uhhtM9gM5fj9kk6IvCQk9LxMGpytvTjS6JTihMd7+bIMQpLZR1ZP8Wk3fzx18FdJEUiWGgYp7cGkZmVq7gHaJZEY6scREtSDDdK6uHLZVmxLNX9ql7iW9v7Aonmrpa22Xn0tBoPqv2D8iUGJ4v20SyiBBPzkXepj4MlWsA+qU+ek1Cz0SX6ueZXbTOoT16nYa96pWGC/O61cKJBA0NSaWIcAJJQBOzj+er/tVr7Q1fTvv49o/cKSuqBJji+CfZwWFzjmApU+1tvsA6hgn8hS2ykY+DRUTyycv+qlvRZz1KLM9P8ThRsHuHwxlhN64kBMCS874LnwVSDVrkEbMmtInQEFh9so/naUEePKWcFRYJDK5Lv4CveuCg5v5HPe6ru2L/Fv4kJa6JlvmQaIw7xvFYkTFkdGzF9q23Qgk3g4YCcVtUMqa8w/DIG0P4YHyQaat4n8alakObptJ0au9/7tb2diFaGyaVMTXmGO4/oQjeUZBAYOBoWfy71wSgTUn6bSFpl8FinArpTjOSD7yIEVlvhh0UIsOkgD/jnoFbzmt+tHQQKDApOMkxwkOZM/qoLHDWop6Jtoe36oxbIoJKGO0t4i797SeFJZuA8acWHBC2gMXSPAaB7dsto4qCNIc52k0nECOZobADbEkP29RAdwZEByy7K4eC57Bier9SQWz7JjOcrgfj3deBPzfwDEPbbBkea1kDav32WaK9ce/8JLiyhL4o1fJpYNmLzZOFHMHJhuyMzBQnqblJB0TasTMOC86H2/mToVyYe9w0jx+ucrKdkBzhZ8lvvPXCqt3iIeUgMXsVNjhFRKXIrbpGxuImaRjP/wIkET2z2g/L68QOzo3OaclBG2bLTGY4zagrde5TrPBFZ3G75zlfOOb/k4868j6m5SiTX76ElRZPx8ySP9mynaGr77cqr7gX595uDSgLdUQAvwGCfFiMrhIVSzt4MPAczYhkZtfAAmb8ajPYbSC/rbD64lmh4hv2buuFACxRuOgILfcUcnUDXhtXvKidhVRN2lWMkH4wTbZj1iyB10RHsdkL/VyUpbxeUc/KhTFVVmD/jO8EP6Oa3/8Cujg0PuzKXIAbrJazNnugz6FB4WHj36MNBkPANWMvdSUtEC6BYKJOo05PFeS1P3eFf89TiSvY9F1EsHQoB/WzEq9yckd8BFsinDuvIYOJ/0Dy52hZxXJBLN47koIXN7lToUvuKp50U3sg/GYaSvNtxAurw3eKis6bUaZE3ShoVA8ayMnTmxXOuKRt1PCMq4MzXbMZo1Vg6HgRfMQExDXdDV/arETyG4NYOxRusBA8CT0xPXNXFVyHpTsdrlzP4RpWWbYVVgFI2St+qvj5shGodIgYqM0Nyq+jdIFbrsJenZrnUlH2oR89geZD8gp/THI2GNT++eI+bitRBeC3NTruOJMjhw2HiIVVcvi5i8hX/mPtfPoVMx/OpLV1RzOn4kVmLbdHN/ZEw/80DaBIqrPkngevJRcH2V2Q/6WyiPpZX78mxLbd6I4zK3VSWQw4XPq74b3H8yth7YT6gl8ynxG2f+ddKDtm/52x/MyXMwjs13KayXINvJ1qgfxwFTvEjYjk5gOMmU3x2TsrsI/qw5iw4Sd/UC7bBeXWdghJpu9m7F+cK9ZSZyL01ycpqOSoh3zJT5ggUJdBQiwZ5j4+k8SpyY79w58yOC/sRXqQW/Emqq8htm1BuuCSaermrnwo5i1xli9PpSEAj6luJUEuSW9Qz5wwzcIcjB5MBJdNuLX6/4NeN3GcwB6AJVboRphu5Ik3Yw0q3wWGVZDGfVx9rbe9V7x4LLpSElDZOHLWdA7TkB9Wxd7Zopt1gre6CSEj5istO2PEchBHzGTYUAs9vlmh3LeDcOx8ZxzuFFLZAKdj+tOFzGcQVpHZua4lBmnw4dnClQaWjrecGHsT44ixgOJjWOqY4Md8/nOR21tVKhGSwLFTz2aBOMG4CKYGa7qhqwk+/ac6PJJxW8kEpuB1jXl/gKt2RbKTwPjdp/Zbby4Eo+WCDovwstIpjpUdX16Gsa10LFRvJxdRQblVuB0LWuungWxbKicQ6tFIPVOmiRkxUCsedwgZGHQsB1OjUbJomA3JVrvTL5XSb8Wbdr2yCv7ucHVgg4Al07Ap/WiCk7ZdK6a30PmdfQoTO0MT8260wuHu25h9vdJdByWQlQ6GJgLJ/GbEuoaOCYNWtLfYJobzsGK4l2svX1QTJq4csNYdx+i7fORHmYAd6J8ZNwdYGqft/fX18bA26YpC7BBsxHYYMMC/8eR9N8u6VRTNeMSDXQeXbcBp2/GtlhFhtJQksLh503I56S+3gKHjoZfIGE/Fil9ibVwdERhKfmkXnmXfeDXt6XoywT3YOVmxSKD2rbFZcb2UiDMlv+JYe1RlvDTs3towPXbSPSj1gj+rvZvU+IpWiRTFsryR51lgShZLAbcAkqfxQqtGVISj1blPk3UN9tOj0elKcvnJ9oxKHtBf+mYMJUXBqZB3BtVdDApH1VmX4FvpVEZqSIHst1zeSnKcxx9x9cuIXluK2JeKpUZUJ7XLMM3q/KeKTekq+9SAkmbEZzIE1AAAAmAsAAIK+Y3TiFHams0cOda7uZn3Ba0MZbKUSOvRul6uXY+f8LtXvHr7pIkmDhKVYZEoIyy12O4KE71dIPGzUcf/SvWmx/YgqtqZqVxvUzP1Vt3mXuvSXMeFYwzQ5e0LgYpDiDECZbzGnmsDKB97VDgjI8v79FpwwCNHPynD8EKMTkxLbYopTnY3fT01taw77pit9muZHVYx+HjW6p02vtw6A0Wl1iAz0Y7VHdICcs2IciUDjmok77e9jO4fRB2xVUD6svkjufzzs0sTT0Y+IELoNBfil7LkEP9pM4HBn4ZJGsGk9plWcZs5F82AP09q49iEhnyJzA9qcISkcaf1qsmtJ1Jq8pMCW5i4QvyOuTo+WSu4XobnkNefZcysCn10C8bS0qOGw1l36bnfjMhXcmVsxdrFFt8cxebTOxJ0op8N6qXpxA2GyIlQ7ZaoMH3BF9EJDiKdjutNmEKZ72+Fg1v6qic+bj2IUgoRCSkNoksBYkoW9L1lvvsBZ9s3Qajz8iKHiW2tRFiHpnEny55CsEJOs5Z0bqTGZ+JpS8rxSGG9juB6BKMrlxoLurRRw3zkLMtCc53fROV+kr8skLB2yVPFqipz4Ft7q3UsHP8CqqJBze6eivlFFH2iUosxMK8nH3wsF4/abHH4KjhUHj5zynwyZW3QatQjyfu984z3E22WaUCdRzEa1dmtGDV1btChgzIqkzyjJl7mrIHo8gDBb5UMpWzdTD0PYS98doAoeJynspuvgFyfZ3d8kAISUqQSc4hde12hB4sBTjRGuYQOvSrIu1/xH63vbxZV6M0vqDqVHmHndmEWZFRkB4LoCoxpk1oswL+6Nfd9uAL2BnNw0YUQ/OlDMKKI7k/np4L2aEZ81e5utQZ8eWfVPktw2+imOYrm1VoLDUpPr6F8CeysgOtzRttQUUm/sBmhPQtqHm28uWuBAZQaAgWafSTRd7JWqpkixFhwnaPDPL+cxaFtlOlmNEBrXQG/Ewg+sWqA5GNcphkZ/8O/ykruT1OnupFSwSzxZq/VgYwTOTc2CXKCl+wmqXE9LsHcYeN0Q30qot7OCpIUqu/B2qNhr+ZAfljhCNeyznPr0YaLuTcstVlD6xtJMcvAgkTb8Wr+8lMhE3ebCNa9JkloJ2nyxWNx2MSewyKnV3TcAR5F6PzUZeMUUiVWZL1Kgw+ugKzJlkg5kjhREr8lNSBC3yQYVmTJRJm+w7S8XEIiisj1877FyOMC1YnMJX6dddPyT+DxYmo2byMMJo5fe9J6GLW1ukXVl57eDqPYTH6vGfT+jncU2pbE57cJpLvuMnK7GnqeAU+t+d7XyG31Y6lyK5HRDlwAsjjvAF880I0ligBv7M5Zb7YEfvjWjdm58OFDZnhNpaTZe0HRhpkOWiabjSiZzxqNidPpijC+psrjqWCpHaQjz0dlny8we2A2WnRe4NdpT/dwMuw0M4NCf7Gjs7BX+e09PgElOBpnXfCZyrjodey+MRCGIXtH80QdLiyqRGE+haRvWsvz3+QWT2q0EXttOLFe/yBtOEOVpQF4LFgsOsUIyCYVAx8ZwoDtt9lPgH+OxBNKblKeYAoouctBuFzt+T100rnXLQYimlNaDKo1lCWAPVx1lRwrkwYNMXpEAQnv9epUTCyiFpvNk5p7oIwgMDpP7J2U6wi3sb4us8mAa1dFdqtHPI9YLVjWkWiMqE/T4UqxJ85cPFQyG/o3K95/F9hy6j/TIIWdLMPZMZCbYAz1J3CdfEkyUw4xU4z4J4Ahm54ZJ7Fvot8m9CH/FGSwyCTkp9h4EDdwWpzXzJVO68puxNyXfRtq/9DA+uBchlPCA8dKOrSvm2Lgfw3ZVmVJIUHwBabg8pqCZRpLxVu+ZTN0rEqWv/Ga7/zdZryTns8o8yXyq4azwbtHtsy2nj5pOv4pXzgGwV3Zu6I6TwxHVzGcRGCjHK4TnH/Cq/azA6ThLXwKQbLZjzWW0kxTaDXaqPQfjNLdY2A4chG8SCed6b0tluALlhsXGZbrsDUWUJKJ5OlqinQG94ue1UEtWhbPtyKCFiKrlytOFPrcEtk3/orpm73v16vQe1nEF9UjgM04Nbg6Dn8nRDW9AI20VFru8j3WAdP0vC/s+gPkPvjrgXMjV7Y5JBQ1cf7r5znJ0JI57d3O1UDi81QUKmz2WQLmGmKhzNmaM4Rm9BQxBIe1wI/N45DIEjpgsLLAGqM8AwLDyAvjkH9TkRizhyGNuXPhEZw662tlBfAeH6xscFtq3gzcNLr7+iuA80cEUOi+KnWQ96I2eeP1BismX2EikVh1YkVEk0Fvi8IkIc/sEGr+81CLbZbJJ9KrCqsRJMFL3w43mEIO69oce9bP1MzizqzwpbBSuRe8VClys3s2Lnv4/2YFYs3yCLl1mUHrzF6zUcc84m4fa9CAhT08FRCoWhyuhN3WpvQooU4eQd6Es2+1al0trZXwvkbCceCxabDyph4gcVwtPOIz8ubTxqATdr0peCw5Nt4lCPD9n53yUYsX9/OEHILE4mT/KIDkQ5B25jKslcNMRICFstP3uMIqICgfeYqGVsPn9ROmxnoJRz7SNYPB+NllBpJYleXE92ORHLeqQo8HdgUDm0Rnt+1ZBp7huWRDL8d/+0WEydxkRFfaFyPyeCnOhMeThwUT8Yj+9qrEI6KTuOsWkrmResLynp+nQ6w+NODK9po4Z38ZJCRR75YHxWvCFcdf/DT1fcSorZTwPy05bZGWRB3jB9d3UfyA7/0YTUe8PR3Ma3ZyHzTQuyuJhauqPucCJcZ5RW1RF10fI3ocyesdGcFZ5CudIdbKDj5HkOPoLKuzt7nOVoZ9XwAGT1VHmrFWPDoqOcZkZabax3Lhe9UPykkHz/eCi361k0lF4Ay48Qd/PQwRwvJb15GfKrl8/FdNF0MiedQdzh8i0F7po3/MpNZ+VqIiNUvdit8q54XV0TyX08ubEm/xkpddOzJmc/u38xusGGb5HOIFkBYflDgjF9wXI2IjvhCRcutQ0JkrzNxPCF54citcyYjoLDm1V+zqbAjro2ypzV0TszxijQC+sOuroOYysXCb4d8bSHV24Utz8a+83z78oMXYANr+MVNNtAYEMJLHpyPPAzZKWRG7HndfiSCjjBdK5PBezoVM3g8YPtk6lJstB+44nn83P4u1G4vgq4oP+JAI6crGTB5JFzPJoeG4yd1nrRSaUUq4WwRb+k/hGCt80d7NomLMZV0fWUHgJW9Vgxp4V0XyP3MItkfLJmsq+6HdyPDgtmIlr4h5HF+w2FHipiFNcmDJHWSfV6ZWhRJKCo0Q4L/Ql4IJGjuQSzNyM6VXZuvyWnIyL+zbHof6tY12kiqVIiDExwbnxic69e65qvFuLqdY+F7zGV2QP2rjeD/SnMnpFt+JM3+VvPKTSeNZl8BbWBO6JiGUi5ZQHhIJH0aOPecQiytePrfrVgHyy0LG6UMFmiwj8S6vwalE6EipvHw0n+PYXYQ2OQH5uu3Cub5dV9osLSulLxX1f46nd0igdziI5eZxsmij5Pz+wR5og3XtbPqLNWUUO9UN6H3Ukv8j0+FSL4x2fh0nG+s9fM0Z4jHp2hS0x2yeB/95K049CKRK2F1dZNiJKTzAA4uC/pE92Mqg8YE53rJERAkVv59HCWMc48Ufij2mPfrZwTmYF9hWHuvQcKM1xjYtp4K4sB0Bk7Y9O6SktZNPnv2whS5GOkKkCAVkySSTZ0BDINJtJzzdElkQ6Au7P1fSp4wHhuJ+xrj0hVMs7tAmiwlJudHVmAhTxDGde6WjLybog1dgzOiDJ93rqoYbDFnpSnF6fwpJsGbOqoPhcEnAQyAZoEhufw9p/Y5G0WKs60Dbpa08SZo0UvHTJCx7TILMcGz8PR66h6RzdVnEIVsFMasBq8gMvAOrAaptbo91rDoxn1tcI76bkN+fCRnfIo0njq0PDTOSQfbSBA3GSHvxPm17FELZiQ+g2AAAAgAsAAI31XCbqNl0vnrm2vRKbUizUthUNW5ZF9LUe8VYLX7mSc55d9lkiRveMkiX5HivmauZjXXLD9FcJEsm6dNOagroyxm8BKDqLelA75+M/xJn6RhPfDmKbUPBGzY5cP0DDuuou10PEDP+uaKKpWy/Pq5yBH6HEzv2C2149dRlKntycZF6+m+kMCUYL08795rxI5R2qOxwWTOkgwugrlPWtzkcWHWHzWrkMvqtY2m5EsI/inBo6RvNJpfjtWxVOMGKnmiyzbeFRlASuITX/oUTwVtxeE6Iws4/ObXHnhwUtFqZImiMxpc7FeSARNl1WGG0ZWDeoX4CLas5mH1ierPl7WJoM8Zl7bYHI0io6XKy0x1YFHvIqUG9irNC+TSrqTRM/+nuKovFRS/jN6tB7Sezs5cHioQfTz/RACKw+y+sMER8nnZK5HCQg0l05yM9VpqlwNWi+qvRvk64m0bKCXZgm+qWNR1xw7T/0xAr7sc5JQhoJUuARL3mR1iFsWkLbMZBHfhXW+uaUQ3qMx5rQeLj0sWl8RAwTOY+35sEmEQVeUfhgyJE46fylewYlVI9DW/uHBuCfbGFHDPooUCbTAJ2Sn7idwd8dpYuJPTW1ETp/PxCRcDmi2WVv/By2yTLeGSf7aKkTGM97AkSVmk+o3GDMg2yUH0kaH+IeG19n4ZOAHptg7/0D/ev/PKOQmg95eD5MxKemmeueWqoOyXrmB91k713Xuw2q1M/qLnqAdJ9lAKY4CJmwlp3+SrL9CM8P1OfBZvgGJeCkNqktXalMc4sxaQotKhIs243MzAtH7tcRo7e1QriZpVE0MV7YF9XX01hHl3WhXzKFTmG1ax/DLJCr8vHCfnN7Avk/A+KkKwu3m0qM/1gOsSATmm694DkYv5VizAQHRJfO/nsgXNK2kpMV5xXCQT54JwdrxsmJh8AFyyuh3nLQXS0TEl3Zt4KH+7NWy+yGJsQca5Ydg1TdfUKofhwQFWmL6oYRVEN0tXWLh3CPfHQHg8agciW1+DNaueCNsqBh/61Zpmun3j/Q5fHlWw9IgU+I03qlUHkLIQtN9xZPHdwTOkDLJxRmHxl+BrdwNbdlChKyMnypRhDEwVDijW+UBzDTFmP03KVmpkA7IE55e/6YYpyLUxZL0vw72IPPQD+NJHxfhHdz2qnaKvTpPJfoDlEnJXqtTKSuc6oP0F6PUDuSw98bqN/gkIUH/Z5n7posaYOGM35wdLffce0ZRGTqsOc70SdcB9F3lxvreE69VvYin4lY62/N5Rx7H7Ps+WpXGAbs9W3MSRNkpbvUoY0Xd/7Yk0QuZRN3G/Gh0MsYncPGZwL5l9bWXLgvs7hWl+3eEHnOOVXOr9dIp/mDy4sD7gegzAIJZMU8Keq8T2D7HKDumd6DFTZsTRcbR5W0Hm1TG3aCK10rV95FMGWUyMijMLJ/d/BTafP4xQT/hRLHHfooFJYVGifVYOsOUwiK8u1OX0QERdEBvkDA4hCsJxqAlcPaInfQ1yvhMWMFxH0CtKWeawqlnQMB+WkUepXxdQVPmBsQQXkLEjOHaN7fW9W8+xF2Vq+8oX2c4cENeADYZd4AL6LKJtn9oyLlCxqbKBB4aLfK93dI4gkeNmoWT9zzTnB6K4AaWwEAWrCkaczTOQgdJA/6Kckl2OWot0FRbxJ8YlpVY+NRokJVYuvQxMdu2blhiiPgU3cyOKRpMI/nu3wRYJm3NN87rvfmf3TqBhN3XEUFy9fGUq1R6CHdzHFPmERkW+fgfl9qb/zUwWvs005eNlcvO208PPoX3D6xGi4Jsv+mt+HFbKEv7VkJFu4npt0GxqJMoKBdk/6hbUxqwD0y/YdgcY33efT+aQTWgPhgxT+nKgIVBvfeT95zROMvCf5qP+ZgHEiS6LPdzOGCU23KkYHKtR06tXVGyHHPziV7zF4KNnX+hipVLKvNs8T3HqfyF90oj0/M/8cwEZPlos3eEGUOgIPmuqRFBiOJA5E94YUUGOd8EGRLkh9sTXlkFT9L9f8Psjiw8nNe9L2s+9cR024UwtEzaMjlPbG8IBhCt2lJWIVQnMFMJOUun3kBWUlYJc8pcAGY0FkNs5eaA4i4Fuxbnw+p7nDzH9Q/LUsL/Mt1jImNTqgjtS+Iesdyyil+WDmRKKAmN7rlyoF0Ai5/rFFYxCOxwiTlWEgjT/N3kkYV2DJ4iLNi1/++6JT94ngfcJzoSoGK8KKVnSyrjXhL1ISvkb+f+L9Gpe3Q6dtn9Eq1Jz714EmdpA1xlL3VQ7S9PS/m5EkrXM83sOr/CkJGBFP/r4elqBf0Hn5PVqWY9oAu7Qc1j93ON3/M0A8pQIthSFbFPzr4wMxRvDo17pphVadnZATEJ9NacHF/ygbPNT7WpE32HCgvWvhjff0ezBclfRPrKlT9pRDFTFPtULAhcmWkFxZZTi7w40dryVPzBoA+LO/9PiME7ZJHtK6xVdE7QPRrMVPOWZkrRnSayp/Q9pujKjumLrNFwDGk4reV0locq7qO6uGkdRbLjGCAnWTkNCnnMVb4YZxADTmFRO50Q3NBZVCaNBt3UYWlJrhB+BPzBh9Fd/U+DojKHJSPV7Jdt5M5idH56KpAj6alvjITTF+C2IegzROQYkdJV7+sFzD+He8FJLscKs3ytb5wM9RrOa62p3/OlGnXWz0DrsVogutJBwuUlalHXFJAmUmQpImYdBIxOkzRYuH0WT0onqRXzsRU/qXHgJPYAjB2sOLeIgVKex9UKCLcKoO50kWdK3giOrOnIbG+mDIy4FMwQfdY0bI1iBC99G1quUykDEekz3Vd8KDGvje8dRWWpbvX3KK4lIdvcSgXWrsRfMKYsu6+qgq2dZxAX7RQ8AQYI5IF2iIzliHVqQ4DzwUZ4omPvnfmWX4PGvNzcdqiRui2MmjjrQKUVd+Ra/n6gZ4SGYOfDOYDbpsuIhQmPENbXIHxEKyy46sJE44GxNtJnHImKyxuGarbFuCXa/b+x/qFg2IaPiy9WzRlTCvZyh65LnVqqd3305LKw2AK7GWBSPDIIYRfSN3//njv5HPY8vUvgHN5d3COoas7z3MklOxpWiPGpq+1uc5Y3k9AWTtWgbGVtK/y0Sho7Z56wkKVuqcFOrIFheBMfTc3Pf9FADi+rMtq1aHWJSgHDgIJzAwWhhPJ2m/WC8Up7gwQst4xk0fIdo4wVg0KUFR2guZwAmqY49vEMsjOaKySMrn8pb+8nrs20wjtu/vP5IKaenGv5ML8Zq5vxzfp8bV/WmXiCWKHqpJH3KRbegRGm/FCzqORF/EqZQGR0SGPxSUnJ86pkGcTIUku7BdZqEB7MFrKSLAxeeTF/a9TPyBrpKo7tBa4WM25gGjxQDuFNA5VgGnV2cChehTA5LVaGRTlCYp3+GiZDaRjk1rlVjb59T6jpRs1vfppGl37TW652SXENK2D06GsET4phTa5iLnU93+DUpfMeQb+dGBDd5wfQQ6OLRDkZ+pbTI3fWZ1ISeG+bvcImGfrmCXusFmLAReA2LiJb8bAeSs0Ssx+31RLU4AOYI+rBcWV6Wuzg7AZrVVPSjEykyDBWtIm5zPEhOzAIT1OXme81ttGLRVsN5cJr1d9DuFaAV1txZZ+qp3LqnSJmGL54Q6fwLUjNcJWQOgRmFpSRugUR/k/Wv8RG/Khbnux3SywkA2GEpslHc+qvMnpWQ4rhQzx66Pk8M65YRwFWzi2HoSRwaAkWDRIvrjP3iTmra7zShz47FI0iqXMaVibAh569yCbc0xn7Falq8fUHEfamqZbzHrAPP5Nw0OwttPm/xtHZt5D1H1ezeO6JZTHtyNFHNvUyblPuNDfQ1pSEQupspmY8yRV2etOKHM92RC6+NSde7cYoiit6lnymGP+D8zr74d8UwudSfdgtuI2U13teR5dBNB1k+dnxaQBfPL1xzFfe+w3AAAAkAsAAIgCmEZlaTeyfz0QdXtKl8zF+J45gPf4m8f5GquDyHU81Ya34QGCD1/8Re7oes27Nu7uE8SYDQ6T3UuwdWRsfBAEAgAfyRgQSTLCmSig7Upa+6f6Y/lkP6pq2uer/mTM8OML4aD/xKdRKhWOQnsM/45z/eJ12dA6Wxcvf/+dA02OGYHuA97TNLMiv78xN7csyYsUaFquyUatd6c3AkCDb1J34KxWCDNUsBhcvE1oWiUtvG6kbHb9FGx0xVwrgfZgQruBmz4YnSuoHJY/g9fCA9DMkw32WS8GzxpcGWKvE/MigtrGtGkga5foIIzIUfRIz/PRmAASOEM6FekGHnGUUHE9WhAIeenFQ/WqSqKtyKSAKPkBVZFUlcGoCkZOLJMCXONJ7oIpXRggq5CFCvUyaqLw9N8gakyQiXSRJfSs5K5BNr8eOeCzE8B3W7MS5MDi4k+F4YnZS3NCfWyAiHBs30v15lsVd7L5Omjrg+zddBr15kCN3jBcfM/uzNGJLgEFoKSWoVNIKSWlQEYeDT6UldFuez0BHhYCB47hNPYoi5OcAEO5LKlrDknFLzViNQ4xNCIMDsJkZUwfIKaERxnOg+9KszKadOmuV+YE9Prn6uOX8aMmV1LOkE3qlKySytkyIuPR7vuX8HhKEzg5fsYonJpTG6FU9niapKHavHMP7A98KelXTYhu8n21LYWAuz6NASJOSHWtWMtWyxOEeBAUuCUNBaK35M1gdjEdXKEm8gOKLSvThggyWYOzJBo8suyBTpG3tgsRtZpQtQl1wVWwXLGa7/qKPtB3tO4a9mdrAGYL4h8xNmqkg7VcHcIdS+PUpUROxfUQcJvVTu1AGcH74eKO/sX1txtzVULhYOrEn3rOUrBi0ZQDZcgZBwXySSDlsnN0KHKzi4/NeHUuKZu6ZUYM9rvwMOWC7Hgtbb9EVM1KHxnfPBxuKjIV8YR+oe5UJUkmzji5OoIoIjXQGo3L+SWTtj/XMUIkEKw33ur5LFIQvEfLn20WIK41g6Q6HeWoKnD3B5y7b9/KnvEhgZ9kgse8LaEvwuUAU9iaB/lfI8gpwnQZWL5otPeXeVnisEAPIVD6hmAzwmCyj5TVuniTxGR8hssn+8HF6b8kQ0W7GOPCq8/V9yEhsmverl4SQv6j9zXfH2ZcfzCI0Ad5OycrCMywU8CYFR4yS8B6IpzfqZcIbg23guInjfsDaSpA/LMoQfClsGVQ/h6fVEuLNRdne1mM7R/M3cackUe7pBbqVmw+GJ5LAc3gh7nrZddP+g4BRq04JHBpO0jnSivJbxZ5pVOc0e2mi6SRRrAq9MUqvAF9SM/rdvGUHl9Fr0TVmyFAqteLmxoeMYkkEcTxmo881Zkk0SPAZpwXEL5/u4452k5NlkBsZ7IcjVgcwbiNtBj6sZrXGrkuDlJv8S6jq56thN18kp12VmV6wheDG2X59aFFnJ3QiQpFWjt4TFSTmcsYgL+MsjJ07IcCYiGXMLxn3BXxkdPwDJHtpzbL6PbAP53b5awWPoFE4qwLEkD+k4ESddobA3Ay5IM6WLjXMc/DhvHdFTnsRh0bXH4mldksT0BcEFYsxAIAS5mCO06AJK3hN68AaZlRy9o/7dLAu0dAr8keRy2eYkxWUc1I6lhTs7Hbk6yq+nODR3wPKcC+QbMKWucFWpWZJVEYpJK7x8d97Ol3c27qEM0tb9sys7N5R7hmjswb/Qv+SfUFBXOa9CCyVindtgEeRkOiCwcz2Fnwt0N7GUBAIGU9Mmo7t01RfGRyfMHr13XYdl2K0rZR5g6ru7f9Rz1dBihgFmvyS9LKZIK2dAD8/j481iqK1R9LScVoANwbNl2davdn9W3w9PZ5l+wfLUwxHJr4gtyVFT3jsTv/REq9B8BKq2ZInmKgkm9gtvF90hfsUHadS88oA8yCcbHaACEceDKJGLTODE7uVdyuNFEsWJnb7gH9CCKXd+RoGoBf1EgnRkv+S85sUfqTfZLb5AqKDPq2wpV8nEiJKZesXmOwTyv1FNXoDVZTqYbCDVHtebhTq7KAqsoiPIdL0bFUke+03DqUBI+ZX4e3sNevLRCrVEywedEk8QWC75XD0yxHxZAsVoFIcrCMe/NIW1VM36qM9Q4YNOa5Zw7HlpCTaeJF2o6u6b4TMvsJouw9Sp9aTqxzBWE/zeLzY3Ftbz7MmJ7ghCvzjFceKVIBE8/M41eCRdVUDQo1d5TLJuOUGw9Zy7/g2znGv86NwjnlcM+X2YtYBCZbXy6bg9DAEEMXDR3b8Pzn/TKzZfzzP9QgrlVdAJz9LIcnMNJRxmn1OT/FjXpdKCpzT7+rBGh+wAa5y0A7UXtJb2owNIGNnAk34QColzARz7bretgX33EpVT6C0+r0y2+McVdNOiQMLo1FIT2BMyCHcsp1eNw3HIc0aDgakfsFv84MhfRgRjBYEjtacgBkV5f6rfe/YoOyedMUB4NRGMOU+yOgU3CDG11P9fSRhWhe8lxMMYOGq3F/tdiKboowFs/i9FyxbObnVqQGLzYbZ6zqUlFQbc39EOD05GKs1p+A/Z++8AwlvKfKzvRsR54fb0VqRRUbbgaNvSnTSIKWeeks9LA913VF0HXFio/O1oPS4MchFEQuevri5pH2vZKdsXeCpe0WuzT1B9AvUxpVouOfj2FUebr6aXzm4rANBUrhCKCZfUqCUia1t5rJwWdGTm1bxflLZa9OY0JlLMQBHokzcCNHL8sGBeslY1OLgX8E+Lx+uG9540NsOr3nmC0neWD00jL//wrGCbPbqzEqiGvN3E1v5UOtCOLrlWAMxgpnTR6lcbUxXQxzj4a0mNGzBxa8fEaHCevVyQbNli3ZQUtx31YkgZe/Fs75m4hpyh8sgJe2NfUG2VMWp0WbMC7RC15qW3hELLQlJube4wgwXS3OLk4bE/aF5/WI4K1x9V4HO2PHlNp4ud40KvA49KyAJAdZTiMZcrmYhscsg0Mesu38a4xuTkBs9JGqTpew7Y6ayuMNmiFsVEAavatzeBjVnZLgKqIrY3eQh7+l3uUWY5Nwbq0lnuFudIcHfkNMwk+HV2KjLAaeue5FYtWomd6fINQ920aDR0v30pkOI48oy8WCPaspo/3D3i3NKQp1MfCCzi91XuOViJSel1bN78zMPsigNQtMJwUMv1v3ZmpIwfV3alPGd2CfLWXukv3FMFka+tja5mqnixaEfWS491HwKdR+TBwD8r/UzrxHo/Olk0+L6tKesyWiq2zRJISEimmsVww21yZ+6dj0UKVqZXd4rtGw9u5rCxYx7YxDs87rO4EQ6C6oKlZ8inLTIzPSfEofvY3ZCUa9YwWzEy9Hb+mwl6WkczkDSjBDnRJy1yMCnjVHx8iEBAmRnqLeSimKUZgAru0ZV5ZFIvCWobwwB88l6OSzx8sXS1nmIM14NHC7lWhwNVilbEsZBTjhj6a/jyOPNpVecxsrRTg50uKz+BjkC9f/fTi9M19yamf3fs7xUe6SdD1xRFsjM5GzsL9n48CenphYmI3lH8W4b7Lt/jtatbTM9kNkntl3CB/uaSe106a+9BhKu60ezO59F9ah3GDCAxDrAAqIu+NI9ZDiTlvRPUhvQzXAQvrrSsw+kTCQK3ccgYLGfmovPLgRAN5bzRv9px2RQZ73Eaj0+1q8KOU1mxRnDOIB061COMLHGWY8ZOr9bTpqLjaMyUunRFvAixAZJuXLI7jT0VKX423qBa7LiJYq66LzS7jKVJX5a5Al92/szhyvpJ6Nug1i512fWhI86ORvaO3RCPRWCTwkXgIPI8gRKiGfBQJ28kdpsZ9fycsi4mbXAmoedgAWSrcBE3DCBZCMi4GUonS2jqz0fiZL1Mf6FEls1tMiUe5cnF+/Dft9Ht1Kyp3vIdiOJQsUrnpx0cWJxWh6aUyOd64MYDvgAkCoOQKRb2j9cFnnRycEQT1Mw4VVts4Ue/PPOAAAAJALAACRJmILtp335IuTIf3WQEBIWTlNGs8fBFRlijg+9U7QLoOPJSg9j0MxV+Try7Dh285MSeMK6UtNPOCQEG5cyCu1Ybvml4RN/pW7JAVlOhf5ap5S+rSvZVxjEHK71Rj5mbalReBup7Eea+se0bnNyaCDmtKtSaAqMXsUO4d8IcAlkqKTzD3qamARFJ4oZTwjpu7HZVLx8tuVWSzq/JtKO6RlzyySUrgoBz+Ps9zlFnpxsCV2pCfjYHH/vkFLKMAY60zPf6hwxpl5q3F3BkXg/FVHj6P5ewWxhZJB9PW4lzJcvMLOwTzgpr8LJ77pqMKcP9RrUxP8wskux5Uxwvhl1zpQgsrJXCK7gnHukWrnfEwBflglPEDQ/bJqRfPyhZtvgRfVFZPI2NBWfEar1FthF2GTnvWDOyDCH11ZoEDCLcuiKYJlMIgBzu8r5eKM+8knjaUPyweMx086d+fKLw1qBbFKWu2mb8T7gRLPtNtrHnUIJ755A1SNNX2jSfPBJ+zMy/2v/Xyb1uXHzwxOAUDG2zo2lX+49ZLND5hkmxjURt0avkofH7hw6/8wdhk1grOZVPSYCMLGUQORaPa1fs8sOWpiDho9jPZy6McPpUq+5eXwY621IT+haKFqiEuPSdKkQ780+FDUVMl76Lld3RVI7TSz0JIbdfn77O62UJxVNNRHaxs73SYp3/KhHGGfxHsYY0EtcUnYtls3Cuiu4wrKRRiZqFbciwD3wAPNs1Yi2kzXOEcRg0Erod587CG6PPCf3L8G4oCx7pwvNpZyJ96IShAdniwwwY1RjtQTWMs6XuctMQL79CE2c+aPAtlk7oZr4Q0SeHPCprkLealchCOUOjmFSgLMr8gE0sMJgRtiyVD+WcL46Xnja7foCQxaTqqtWU6QJyUHUXwfuvEz++9NL5T9r9ybONAmfuKNSRkncbk4katdsImydcmqRgutBAFSR/u0dpc6S8CWsNZZiEvLBJPttqyObpP+CYDEqbiwT1gVAVKAlMiVh1nXaaQR/0G2moaGTsaEtm1g8Q/v9Lu1K69ZbG/DvAkm1CKhLj4n4Li8MQ+rGmXJFFmzpQL6CnZqkN4Bx+HRQ3oKLTJMrMymTmyAPkF6Lf/XqgjSVgl98sp/uEYzwGPbMj1dwS0d6xvgbQqkjqAOQmiWylSwjDro9fraFRgWUrbAE7oCAoKI8hK2n9kW0L923nlr6fIeu9+W1NPwsG/ykhiAzto1q9w5+cPYEHvFlJSA5nGTPY9+svfP8VeathSqeM/uFDw7XnoIVLqfDBnrkDfey+Ijuo9V6NjsLraqeI3dj6MLjvohvXW0ll6H7SeANkvQAQqE15vwTMKl5j5jnSyT0kehwCBQn9NQ+k+YVS6eVhAaHwHI0xH4+AlOZJy9J9zGvTnJUm4pL4lltMCahwb2k2dFg+/SH0wRdDXwl+s3fk0NLd01yvFgJ+fpVBfHPhDo9LDXLCvgKBtFaWUgJaVSuRrhRv4aFWl3shNRR23mW9uDLyEMWmLI2gRhuPg92DOYc33jH0ApR7WpXZ0K1Zn8Unbie+3O0830nSLB3A7WsVE2bb5jpWVTs7HxMIrlax+yA6wzc818QIucJr0+Ims523IRMYGbLfHW3ZG6d1APjcnb0Nst4z+kxXi+3LeOwUnAKMJ8PjG9wQB2KQZxqgt23u4XaabFZn7+omc33a9Zy8zrwn/6dVxd4k/pCVC5HCkAnPZN1pJG68tomsFoJ+cPqtcvIrF01ya9zQlxATbGbuKjgoCnoK0joV8YvEsZT4axNq7kYKaDkquQBBmzbmRw9WQceC4MdmcJ3Gbz9XaYQdcdh2YUIdgnMhq7qskhwhCYzmg40lbSCxtpYlW0SJphqg2N9pCJEAR0pw4oxul119+lIH0/TRtTRdWHvszg/y1BwpP2rueW71R/nMM5pSErfgFM7TNna9SInZJA1wrIaPdWz+U1Dg0B5/myKS4idpx+OtW9Fm0Goq5+OmcakUk3u3QyhCia/BFewOKj1l9uX9Af/2uHWJANfKbb1Mgf6uBBP3fZ7nVXyZYx8ll/YnL+L+rsTliDG0XcGL3IHdBuJbyqanZX21BwMEf9Xbf1MGaD9wE/gxaTh/aD+DXnNL3lfGDmRF7S1O2TFD6XuYbgJ7F/yHu52r+G+97yEpxBfjjP1m4AUkSxPaZbC3kFxpLq4Me41LHBDkA3e6c65izKokC/tCaNRv/LpTiikWEgzNL5knRzUuRWdAEdHuWVAiJGAJIoEhIZDWSY+Jz6dDz5ZKT5FpuO5wFRtXIqfUjroUyMzBFIlJVF1zwWVCgPgzNf0oW41Y7DTD2HPZBEXZSM8ldtqFpj1vkn2A65DuW+XsM3Z4hx3XTxFrS4sNFuj4c8wgjPUyuKHokSy0J8C/LR7/F9hgDadRKNhNVVOAjFFiJEwtkzXvfw/WqphMenpaYxPAdcSfii8OLCC6ihvfx+51GapaP2gRdxVBrHq7y6ZcwaTscjYJ1F2RhhnN7+Zo2cHDxD5L29jeYIJEFxqnhvipug2KEjEt0ROM+wqG7gYX3oE9jhRiKBs37dypz/fsvB9QyqUOVSFCBqrfzzYOO9cRS39WxbXgg9n/T1kS5eMU4Pq68bzUcxR6Aibia3RozARuGYBV1HIrHuOB46DKrFV+XWkWdH83nPvWhfOwMGuVvIaSWuhcO3HS4D3GOe4rCJ9ILWmghHVyMm9OUL8VN4Dn0liCkmN+wIfjhH9pxKQoBKzNTsjw0HTWjD+thqaEZ3kSUigNP8hGkB+zKH6BOlJzUHWtCQe5kvRpJmFRZmM7D5a+4w96RkCwxUilhWoXRioQoGtWfhNzojLFZ3xUfji2bT96ZNxKzP//V6uJvxi4befoL4wGg+dfTItYTBImvhaAEnDUZhH2YjDYD9MgrSETimM+/TkCoQHmdBzdS+Pe7mjwWhjCkODVAaq+76HPwNsvSFWPjMB0LAS8sWI0EMoo0QrORqB8HGv+jlVu0D9z45sImaVaULYm48XbKMFP2UnsX+dRMBmOhaWj61whdIoQ6txu7TrcFuYT4E8+Y5s3uGYeos6OXJIdPDwfqY/lFLdhD5PrebdGnOd295fjX9B9WA0RdjznwkHkzTbLNfVnyWt3ZakeMmqwpK6IVcts8tfd7gXu3+LMdWgmAccNwXKGs4CeaWZijrH7ZboTK87Yim4MoqsDbdGxTY4Ac+Jz/iHVobjSCICpWust0cfja8uMIXl3kIsEUZJldwJuvOJ5kPbj31vvhv+mLltHNPJvqNbxCJ9Uau4kku/yLpb1/lo2jRXxXXFRpU8NCVFHpZ7W05HR1TH637rA1DqO5Bi8JOViT8wmi/TnSi9SmMo83XtKfzTsenp7bgWlsdqqbARjkVS1Dm++H//J3J3e0cX3RHmTaD2/4PUgwfbvwR50k+2czC+Xk/AmTb2LivYCNvLJnTgdlKzyG8Tsb6Am6Y7wNwQZxfJ3s5c1zMNnLHUvcL1PkG/CK1+C79G+r9bL/Sae/u9q2kI7WtuH4zqIyQEyA0DrR8PJXQoNrXEjhGzHRDXRRHwub9KtvNF14pW5gyEt7h3uWJ7KtsKf6hTvurqI/h0pqykR7Qylyr0ameoZGjyW+ukVB7v4rgCRZyNOdzUcfQEy+2LAcvoFfRi2WR0tq3HE8xoUQkCM44bs117MUgTtnFo+Vl4e/GPTVKzjBJuTE88WM8He9Z3GyantcGg3cF0qx7hPMXfqw8g0kSLaev7YrMAf+WyqMkWhP2EziGa7vIj/cJQ9XH5XUrbn1YhUHMYxA4EinKc6Ksrj7iGxm5c4hKQr5XbD9RPCYKmKFTcupP5IQaRBmpcnHihJjmOGtiKBLH+S5YEFA0Kq6ycOg0n5Vws6kySQHwH6V1646hDdA0VGIMj3cKJee7c03BjrXq094gxe6n5VhUyMngZ9tfaAqCmknP5fgRGgAAAAA=');