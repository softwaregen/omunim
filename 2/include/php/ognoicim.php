<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('AA7A38838D683724AAQAAAAWAAAABIgAAACABAAAAAAAAAD/doctVqXc8WfBwCqm+XoQxyFivqXH6Ve7vMPwGR+Ny9BVTOcrN3OJrswwrJVny7NVn96IMgg60nfyzzWMvHTzely91aYgITtZnij0zU3AAed72BIDtfYYavnnA0ZSi53q5vILnYVV38iXWZOtsBsUOIf2ZsCGoO4U7lTzYynvSkoiZlRWDyswlDQAAAAYBAAAhnvBBlNtVk2N3h760jplhTn6MUcxfyEVhFvTNIH6gMOeDkYqrgTO4+Zk4SPUPePt+pTC8Mc1gkSWqw3upF5uRdZquuQR07Nu1rPVmwnBhahjN2ubyP8e2K3NeqzTLZV8NR6mT1RJckfOIz8Ks8ahix648P4p1503jrD0zqmCDatzhDS4QixLMg2hGmJ5BGEjK//Fuz+09NrZHIcJgFD2awrnsi0B19gOpMhnibrsPSttx/70rEm7jkIfvN6IUJm4bCTAEWJ2ihv6q+ECraPv+8L+lwSTkAJhgzkqbY6Z3BosH9PBhI6+o4Qq/RrOBgYSxCieBtQQNqQ7uOnGgM60CFdqVb2oyTZOFcehiyIyMSTdKMweEsuLS8SLvTNj3OMXSTon4sTLx8YKSvMmpH1tMUpxRmh8NuUuL8Znky+116giCI+b5W6scB38p5vZDX8iSg2TFyQFSS4pFnRh8RonpTMUa/fYZl3Dku8ZqittO2TGoJ3BjclwOxfszV90SK5thZPA+Ls29DxReCAjdifDxwEhBoXujrDKus7J5ze+Her78pzO24mxjBdRr7vWgvhZInZcZ675AmsjlRORUlL5Une1s/nrPnyubYoS27giSryGisnwH/hnNrHsdxspaYIaLZD/naYiIVDFVBRQ1TQRGiG91MMAM37Oqr/VBgP8w/sSc4FIzuvhjDPXTH+ZacixEEiWcZnowoQV5AS8rH/fOUHz2R3xcLcMdMmWnuQV/B/FmJePn40bneHDDjzZmhHYN4wlDLd4zv8gnUCGy5U0XPNJV2e+4stnYhfsinPlXDjZbOQ+H5sb93dAd2p8zXCSbM7TJA2qyIsiw8HuQkRP/N/aeADULlpOtk/CP98qcGpzW69Q3oftcj4npon1EhJ/KGuYs6zwYSTEaTcqGzgy9PIV+kTzatJ4AtV7oxDeKuimPYHELrhbMBLbMwh+iJcjv8/hmaEzxCuXyj2JvskYTTT/xS/WclFDmUj2sHloDNTKn6Y5kxAOyzyiFZP2uI2+gkeuIrUd//MBIZsAKbB7m9BrtI24z8rZC9J1t0LgHaBqhDzE1BJQsopN2AwZoi2ZQDEJNah3ZaBExp4XT703AnF+IZpHQfUZiTgvyD/lDF+hWzlzGOXFX5gbTojFNs93HML73ihHb/cT9lAjjKejr/XjLLHRW3hzpQQZGjtkMDKBjJsKnQywy/QV+nxHvbUHJAsuPISxWWZzKvYvZwEnH5G9GyebjO7a+hBAdx6x1efJIq//+BQLi8b1TsP434AXVp22Fay7o1b1aj6atCFR1/AGRZ6sgon7vFF+UGehlzOM3BM23lExSUZi8O9tBBn5oHkotV4RkGmWiQgIR1rjymV46SPiOyPMuKRQPPK0NNQpJkn94wc4uzUAAADgAwAAwaR/bSTOoON1X38/DX4OHrzUg0BX9KvpfFFVqCAt9np1e4grFMGSqUeLCsnH16irM62pvwh46ikJHQWNatXDRtX4AgHbQS3KDaBnJ5zAW80bUCUpTRJodzSzd/EOV+JoxrCHaRn70K3M/WDO+A7yIiKWS6EtoeKfMI65OrvMJhjOc1jRrw6smEk9f/rmN9KsEp3Qe1ER4wAX2S5Uzf5aGeLc9STpQLTcEscDM3+OBLibN0Myx5SVAnyBF1Y0W2tawZoXLl4bL+xjScxHIqUjB5GdSX3AcDx68k/PReVf0YIJLM6vprj/eQsqI/0Q/2beRYARAq2i0JWTGswnrD79aIVSQ7BYt8sreP46C83Snencya3LuQblH+cYNlWVsd316zsI3K+S43QuMMi0Af36WjpZQ5w+7B3etdgDGR25XmRh+cNH5OU+yNj82rZKPdFSrIbiB09pvKVg2cEeeuVLuzFtuMB5fDC+vd+1/Cbst0uIRovyS0cvjy39tefNAPRj58xK3aPtvCgVUUpu7NT7Qsf3Q9QtjfcMD6kG6Xw2Y8BYZ8ZdDTwSdFdi8oX69hURPyc7uMUYiFQOXI/x9m8GnRtzGj0/WP8s1y2y4Ow53mMJd2YKE7zkiQ+qjZQMMsW9EMBB2ppm9zy1saKpNXb0FLYqJqckR0IvNYN9kFylDuu9+RWUxFUWj+Zh0JyssgJomNlLbXOcMms24g3DL46JXsoHr63eNiV9Gt6MKxypf7aJ8O69VzkSK+cbWIEPRJV0QIWgvEKG7m9izKNGLq0CJEMHVNmErMxacHDAIAW3t5Ygxd604rUemPQGy5lrmy1I+rhViPLmRrC4CP7ne7JuMsJytn+5EF2kNHxfIgailrJB/pp1a+8uJPS7CzB2b1k2ry3k9cSiHxu1g/dAymKaMIJIscXik92SKSOskK4+mAHjjAyg5AjeaxJ5rgzVlqGmp2FpIPgT55M3nmocy5gwkDW6chvFShV03qZKwsdQxXmpmWOWMDhuHrs+16arGSARNrl6M4s0dINGTa+ryKYeZlkzyhcVBFkwGKq5hJmBkzdNBuIv1nNVOxqxcHmZ+uyLsHaELKz8vC0ykw2EW2YdyTmqomV4HjR8NOF2hOy0Yr3zasJ+VYdL+5Gyv1XJ+6jVvHqwyPHGJCN8HB/X8bFiw5QNo3evGAb6XjnQUUc87FSwKsrdSpff6pEAFCATFT+Qiu2jIvlgtoHAB75oadjBDR0pw8DA1JOMdqbU74L8SHP6v1WPxFWrBLWu0raeegFGQb3BOAikyOG9T0EnBA4J+1BD3GiFGumH2kxjgGtewOc2AAAA4AMAAGBdRb7L12aPP+aWiJ8Y21/+v4D+GxoqB3uWFwQcqSe/i5taQ4iF5aMDVvZvYOoPBF7YGNdGQg5gMN0VulTG4E0QmZZrcxQehXlTZyorK3g5DZ5F2DVSxPb5T9Jr7utmA/HAZl7uBZIFE8JfR+P+VT3v8j2cYV5TRtutu7STcDvnInmiCJiFRprgvtA1ei139z8Um48V1MWX1seA1V56nKGoBZK88tIO7wLgUd/Egw0vgYp7vCDHk1BLrjPBqTgeMJYBhvp7tqgF2kBt3mjLX3GA2eKe7CM+ZbJAL42WyoCsKBWCGdb4PpLTIQkyX1zk70VCkf5tY66FoDFWqwWqGzgAwCnAesbyGpSQL9NWY8YpHgb+5srCYa3no+XRQ4t0oOljGotqkhd6RBh2p93radJSHr1F7rGvFeUbDBPTpghwcxPcnfwTsPm3ryLQPZcX5F4L/al2Gb3K+jCQXvaV6CciyugDsvYQpNBbiSXv8XS91QByHdUtKz5XgwCNV3xNMN6MGbvW2tfDxpn17xIhSkDgT4KMgtKfTcpa8ez/yNeApAT9rHu9fzcHO0ttk70cS9IPMZr2n/9JmlAlFKEtKCZz3+xhkJ6PV/4g2SdwORgDXOVxrlKmgvVOKD9xtLxIhtPc+qcefaH5hl9CSBumSlFZIqXuT67CGNKNBw/5VtvOB9fHQqQy6ousnqKXuX6m0nw8yT2FnC1tZZ45gvJBFontiF8frPdL1Vxi3a24Mr73RqQ01AdigWwV0goXVH/gYaNIZME1fn2yg7gqCYVtbfVnZsSoT8+Hf/i35HpJtcFIrMZpAn/CIK64PSTQ/oqpCZTmNcWkJspStDaWh+VgA9hWIaNRZYMLBVrQYPbK9Z95+Ygv5Bvo6suzAmXJEV3OhhqvxjhLn348XmBG8wGkFzSZ4yZHu94iRAO5dtGcO5h5wtOJhy73or219ENBBmWs/oV/rV1LFwnmW3YubRbhlyBjI/2IVYrZJzL4AWqcRaaf0ZvwNYckVaK7FOTfDQCZn5yFUn4JZCWmGbrVgcku6N+ptkg5yYxFeAk9F52BG1RX05Mf05ybJp4LrorK6sPecIgGJc46ZBKEYEDYVjhKSwhrPqBjtGPr08g2KueV8mLe/eF1U0ICaCJ3pPZ6AKkGQifa2LCTGqJ0PLbjNMmrZcFLff1k2Vb20OFHPtibugz1hhzh7DU1We+FBYyil1LL+Od809wO2uyxVn71OVnw632dFPfwFaSmX5PQhFdcrg1vZzxODzcpVXi3cgDOfnxq5ck71dnwQJzlKP9o5nZmKTrJFQLTTC/muWlU5HX4u08lNwAAAOgDAAAnaUsrHiYiQhLk4lgAT1ezr/Wo8tVZ1f36umKPpx8mk0BqpmnHinOi0MVXqMiUSGchcDsCcx1F8KMe6gKsEe4/MbbaouJ14q//Jw6vKkxi8lUifzO0HtlDK22NxSKxwK5LkKE3A3ocKC5xVdpiKQ/KCa0fHBwJXpCzUQCyF3BgwgY5XLERVHb3paqYzbr48RYWxxLTe6CE2Cci1AqGzQrFsy499mj3Nh4TK+DoBLmS+he/JDySiAvwOu+M6/bQYViZ61qB8USM2jUP7uTY4kvASks7Z+erqyMkwwCExiWmyyDTQAJ8a5wVb8MjEHqMln4+NYPg+ZXrJ6pmDmSPUetvFzJY+lmzaf1YECOfZejzfl2dobYsvPbJ/n7Nw9qTv2UKnjPCqpA4tH+PYWMMy0JZ+Sb83tAOBN0zM3Yq2yxodxlqQEKPE/gHTSu1+aE47bekBqGFBFl51SawjllUT2Q2etEUeeGhFohtTuh9dh8plh2Q/WSvrhJjBUunRaweQfp/0qlfrTuaz5UeBI2oEbiSo0aGdUZ5+TJ7VkPpUreM5TA004nF8rzDKdMmQuQnqKJWvxECyJ9CzzVmTzZ5Ja4QlwxcJrk72PztMpdk9PEqTTCXmSax8agen2zp7j/DJC/uEuI9aZ1t/xMCxqTPJKEook0PT8TCy1T7GrHyMwBvJXY9iZxDmsxKlf6gTxn1TrmZWpDYB3LRLLzNyTGmEv6w86nTQSnFtacQxhFWlmSoYMtJueMTBrxCl3byaOP+WSAr2vLwZXAd6oxPTLUD5aPiuWtwObKWspV2HAVYO1bo3TEvfmbj5YebAb2pC1WV/fXGUsPR2EpQNIzIHYLOF5nnhk92PNmDrmNBNHXozKvHAImS1pMCM4parziDxiG9nIb+QW1MIIa4YlDMODBrV/kUsiujevYWxCBj6bEr+vhPa3ltvhemuxsVeL1RY3nF2VD6+YiP15mbXCi8FAja00IZW9Z+LQ9z4i5Yx8ypJSm1uSLvus3sEwRHdSbywNWzMkA4x9K4QqLgRRRZCrbX+PFKYwYsXzDJkOOs/wbmhUvkMeb59nBJOOiKrIrplZ6ADFBeduhnZ3VzuvRjWDHEPMjbLJexGJcnevTBKg4uP9Pyp92YPEhwJzceZ8dB8EzKN4xWmuMlzJU9TDj+W8MRlt6BjTR1U2Vngfle4nu7fSWz/pV0t0KX0YJ8jJ2qJUABl5CMvCJH4qGghf32uHumA+poo09/7vyu7eNje8hyYNoA9l377hUARipeD71cEKyFOssGwgEeHJhOGI6W4qtT+P2PyrNP2mYGmb1JOvytezp4znfkhXZe3LQ8OAAAAOgDAAB4Wqlt4f77GwuAWKhn6mIoOSh4wRMyiVtwHjoQ4UjMBKgZTojMzkoVoqstG7RM7l5sidTXYfDAFGCnnUPV0gozf9xkEHhE+gWd3Aaa7e9LX1jiHe6PhdL5OTdfJrhxJfRVeQg+gUhzKcRcjxW5TlgGMcFpiBlVEGnnsDUj0KvINC/akHfyL+0Zdflj7uCsDkXR2W14g1fg3Xuydlr41Ej1GfjiUFa6Q2k6oX3P2YkTN8cFTPJzjK3VLirTZ8TFaXJPtldNQB29YKawkMy7WOlF4SFL/dJ7GIUUw7rM36UWd6vVb2vM9WK2BMAaKn3ccAjSXR1xUH/F+wVDekci+k6ZMZEFAknubUWCcnF+clcC63Nuu7lsNIFM+oQ8SVZ+kyQaym9zFWnuEbB/MDAlQnxOLdra/Uo3oD2xRzvjdW56P//Kp3JyZdmGLOcXiNiWrrO5efQBW4bFaprufaZuG3JyUGjcP8cI6nu+WBlWx6PJ/CJndkXhYkVEBY5aGodFDQjAMbeDbFs3eHPcr6+9OXOiHg0gG7dHsQ1PbsD2/OfCLgHLpWzAqf9Ec1bVm7CIRRc2PogGUPkNDSa4CUehIow9ESmINoxMjbHosw/IK5UDnyzYtwyJ2adIWqWB04a2jvZTBoqPVN0jU/ru63Kb1CW4WGrEJe58qfpp91mCapXX0pB1gvXL//v6Sh3KNRWnu22zlp9SXMJMuEwXoZg+446AFmOL8LSpurpL+AzwydF9qum1YAh8Kt0I3/RbtYMdD+my9h7NZUCD73wMN01N4stpY+hO/Yoy+X6UZQcWcFlpLrgp6WldwRv6K0PKvJa3AICm5bYRCPr2P0vI9IWz8IB89+8t0dPvmoFMAGayuIbi3ZHwqm8areDnkU8xJooKm73UHITA+qDxMfV56FQ02Cb+B21Xz+V1K+cw8oRQGEhPIEmPa6P0GSgmio4zUiL2TwZ5VeJSNpn5Tdt7V39lSMwKTmwbVDbA2VDSurvr0f0MiMh4YY7ONgnVBnkqy2vOjvoo25y+z3hYWVbcGHw3Z2CyKCyffwxxlQNRPd/+wk9wFhSjtEQebdm+CXqEc1zQ3c3e/ciJ6PaD58VMP/lw4wIHfrmbTNEEwG3EHm+FWQLDH2HiJCS18h+y2rFO2rCaAZxlHVOC2yvrbYKcnQ39WluUWQeyYJbVMcUxYjhVJWnIQvp9ps6Sz8/O70/OCB9TiXJAJCW/bCu0mntY/z3f1leKwhXO/NvcPbx1KszpwD2HGOc+BZxhKlWj0oI3+rZEVyrWMLa+mqRi1wUYif+Y0QMjCQNL5k+d6+aDs7jYvOAsQHW3EbkovxmCAAAAAA==');
