<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('0DC74B198D6829B4AAQAAAAWAAAABIgAAACABAAAAAAAAAD/Dx31Oga3Oy1jxPfMTa1aEX/Bg47r6y7HH4uq4Zec6T2srssXVOE0T7JcVPmgJoODNrJMtcgRmS7EcHCaJAQZNfag/rh3xMDEy0VBMLZMpu0ol6PBT2y+Uuz7KzbTks/I8l8YWfwfPL2E6vCu6wlSOsb8c3rpBpTcnZe0t06+CeFaXL3o7O3PbDQAAAC4DQAATl7LzkTPrKnZfCVbKXDNA7frtBhxAmD6doeRUH/fbVUobNbTSiyCWb3q7Rs3+b1Wp8IeIUVRXf8PGABw9Q0PAJpztELoIBGKHJm+EzT4jPDhzFDlRkXH3O9qaIPBrP2xBaw0aGbcQ4kjOFQZ93uDpCPYYmwiWMqRnV2rvBbzsXKJ5naPI+NnRp7l4GOyJ0ipP+Ue95bTVROlpinkNb7KPV9OJrktAlWydE3soImAaZVxRF9V7vSX9AZIyO67itD25GtMkO73bMNqvswbJ5aGCmTuXX/QW0od9pEymybqZx1muGlhnQgVYsDmRv5fVe74BQZXUSQN9T3VNb3iDBitveY6MSPmxSzz9hXml7Ti3s4vjA/EHNgi+sYwoEG+vWMka1JU5QuwHM3lluL8j0rkFjVh2KCK8YlkHRsPI/jnGUTIGQpNzUDUWpELL4Z7PMS0GMYwpBpkHVrDv40K1H76KT9beSAZCMIKYLxRZjKl2d510FuxOkhxpiqRZMBKIZtbA7keZkU5zmQ1qp7Agv1oB6hoUYqpWhmjzZv/EDhbF7g13PkNUGHJ1WWfxaW9MM8RwtzONBL6bdZ4EsZACKAY+7qagbHlQpIv3VMgJUn2xc8ZpVdgDQNgmagelSkIzHXWNd2a7uiyP8u0XiEML+Tz+BHlkAT/OaGCFk63gKoZI4eWi7HxDlkKxkIvN8bWcgITB8nw8x4w9Z3vYiX2Ty5kvYFtl1FqmbWBICnyZ/+pvdrvXv5XfEsbroVEy+ij+pBRbH/IinjS3dZnltuFSPq1GmW75qrhNS3ljuzVT/wZloYNjfcFIUNZaFi/pe20v1C0wcfj+zQRTmDXwvCw8WH8KorzV5HXT4nlMNPetcqExxL6cduQJyboMSvRZNZuaxoYw01CNzftYI0BKgf2L5a6d46jrDWu+GaBRZ13MLE85/svi4MWIWr6gANOd5dH2Ytl/1tqL5GJOjczfPRsrSXxk5wi7yeRfZYbeihcMTXfjK6P1awsErEM1BzFNcOXipPAyl0IDza74q/XccjdseC2f+hp2E3n7JIeugHd5/imW+f/F1JOORXqkQaTNeXF5AB8Eicqf7ENLUKdQD6RAoXlQoDncQ+dB7tlh8NwS+6YjQ4M1tYYXs7UTU+TXiUQCKm/HcHKtcBpk70OxxF7Ne5DRgI7b/CcEu4ktGZioScHaP9ZMER9zKpEENIKhAG66nJgM3/64SOQrdi8knBwHoMpb2voZ5m3fKM02MXnV+hqso3wVkU+WfadJl+kPBhfxysFzVdoy4hrEIhBnMQAyZSnsHxVMYRYCnao1+2OgB/kAC6ZyFTVbitu2ZRg0trOvxOnz1K2jtqmWL3MZkcvONxKQ/VtV/TeYc7w94Kts579qmasZmdh+Dkt9ratcNq5DYgUnP/pHnwO+dvqn2IGtaSqi4GYLriEf1BkW9/U148HTiRMk+L9mV7ZNb/vxqhvOfxrzWGqVniuTp+dee1Ub22wWa6UZreEVAPK/dfJM+G5hC0q9pys+7uJSvDjnLTeeK+SlH+U5JVPiy2m3r9x9HLs+Sepn+l7uenjEK3skBVYj50Pzjrkz4+bzRRG1NPFokbgdiTroGW0v4synKEfjvPNeg0TCuIm8jZhp7je3tYQjhWpjVZVkp8Lw0NHwrntPjtMN/WbsSeVF6Rv28zS13GlTh9S6i3jYhaeQapjbAKEJ73t7mdVXO7lDjrXqIqO9iY5hJIKP5P/kbQ0OT8kro05SLOua28l3Izwcx1RvOUzK46Yht67mnNDbA1zRnuVDMRbEKJw8a/bKHKUZkL51atO75X9GcFpi3BJmQQfv09XCZo62BskrcvJFIgW4LoNYlg0VMVyMKAPeddk4RET1Ankxu3u6uBK5gmTplEtMO1bLKvyRzggSPyLBTzkQPIphNjVHwcah3cqQTQHbhQPvh1YbMJPnVzEB+OupegxXlYT0wo/GVQIhS1YHKPZ+wnsAJNa667R8jqRxEkA/jwKzpRJ1B2xFO8jS73xwCAb//rvZl3ZEfODmKGo8mkNTJ8Bkf5Qw2g82LEfTXu9sodqcQVCzWRf7vZ5SYSNyAHcdCaE1+RsP/vPx+Dh0b7y/ppkAzgDu6ulDxNojnoTkCLeRK7IoF+zApCR3UO7ZNhpCg///0B4cmq9CWXf68LUplYg3QNFlaOiOgzBcEWuF6dYSwNSYPSDUhdBLuTbks35X7cioXJSC8aFWEtE9lRnQZWazaYBJIGYkRCZ60bx1xsFFNjPR3ahSzQPmjx7MkBqzuXGavukz+9bhhi4w4tyIXUvsobYCSOZr1xwcpYW17y8hnY34B0frI2rKqbDhWOVqxbCXUYEu/LJrQfnuesv2Xrh5oZU6T3+HVCOCKu5xMKSrbmiiQSMK1jPBs4y6z4OMeRjICpvUx/wIqpK1B9waxkQD4r4f0fTwwKeCnq/TR8HvHuhH1aSyDhuieocOHb99G8O7BJOcJjgsdcywoxzD9LjIKWaa69CZ0BFbnjasYpT5HivG2LeIpgtmi3rcFGidAnJDt0iNaQTvr7xYOrv/+OjoBFwLcvJkOMlYJ2bZ+AUrvDbuVyNpTaykExWKSzKI0JT1S75kJc95YyLsqnbL3ngrpTuOa+EJZh+KybiF9EoPYpwLe0pLSlZcFtbianL+OBkYVNBdHZBavW9GDMheTTVSgcVA88VOsNL38BUdkh0yWkUg+ELjNZ8yFEGUO3mByIRzTfC5Xs9Qi9ZAgWF7bBu71yNoIwL+ZPIZpWmPyGqdbdxalm8iLRb9T07RifVJMexF1J7CWuhBRCm34ygvA1nVFUuCNyKhRg5CiZQ164Tg5J7+OgsmSf0Q26NB3EZ0mGkAzUC0yRLVf8EpNXzl2RDWDVfsG0azpu6OAg+8hm1WxmL/5NWa8i0yg5cVPAKVtcV1Pi3MzSdYloImSNGknrdKhKdWr/jDf9M7kPm/zI82+uC9UsdmPIF1qXSetqao/RBn9VEgKq+LJ9yiIaZuyD/yiF1sMF7FR/F+rIWXlKRhhgET1iaSv4mNgo6uKPb/N44XXsoLhr6sHQ847Zg81MkkkqxSvQ2AfhKXNcoGtmCAEzvoyGQn3Zz7vy098cAJy74LaBB8O4SLxkUJtaB8RLMnGqL4gdnTC2J3QAV9BJ4KhjW0KxGU/I4oT3gqP0McSnyjITH5tJG/BRUhPZCIh1rYGRuenbDzgsWVmhqmdoxANDVNAbAsZVI1rrSGh7q8ONTih1S0JhnkyDmcknGsZV4DJ3Kf6JGhYnWGjn+RdzJ0/zNdDYbQbtUsBtxgZTJfXZFGPMdWtgELcuCNf+KyCCBqFEZlKb1AIAWgQwfSWL9/VkCY1lm+tHXkw3huMW5A2jhnMM/+VHO6s+XrfUTbPm00HWhLfvk4S2LZX7LmjC2FCZr5gpvclByOQXDcEPr1vgJRM9qS5eAe+rXL6WeuaFJ6oQ18K69qAqNcsHYHh5zkfHrTrGlLvDIQnNRl6prhPKcf7nA2H+ZG2/mic6rtPcwblnjB1ghJWjrOMjyM6nZx/8phiWxF/m2AwktDeoLCv7WJIJpXHAWZCA9qossOrz3YTawqjHADS5AtDbgx+Ll/I6tsJfJamVq1DcUP/OeaGRRSS61A+4tazUJEgvW42o8GrmC7ubcxYe+olfAJhQ6APpGwsLt/RcYrnLGARIlMJWTSXqna4k8uQ3ay4fXFmgLUJcsACcTiNOWfDlaIgjQ0c41ju7UzJIgSu35gIH5YsYDMQ1ODGNnu926rnsgdcwS9Hsp3HVCHkRg2WPTobgijrt/D41GvmDjYp7cwA1es/bQxJkyaqVK8UUcG+K9jscfCeyEWSy/z7/FuUSQip/gbXEtnYlzNSmO4SqIHOsjSN+WRbFwAl+qFQ/GKYd7w2Jv8XFbyCq3Ftwm/kMwcKTJVE5VvpN0xDKqVlg/ztINFRt6qZ0crJNzKKL0H3X4Sq6X0R6oVcQlLJMN2JCQBWjbD0ixE84alKEkFOa106GyM/rtZ3+tEQtRC1pDxao6FOGKjtA6Loj9tJLw2ZnF6e2sBeK8Wj8x8fiLUTSG5jLJ4Fjyy9sN+CsxBHPnqXfYEKOXouhSAwMwCJsPqlr4XszeKLqUs4+NmmjrF+tXgNZBeUBnTlwGWCW5daMMDbG4IubPL7xHDhpo7LDtjynhGmQN3FZiR2GyfRZQIMWJXiLs0qUeqNVC1Y/91cmiNNVVcbdlflkm9fuvIDh+YUDf4gsUfj5+Ih25RmgnCn4Hil8dVRKK0cW05qQ9q6rKOjR/ihI2DlUrdzV+MDzKvOcxrXr79hHbha9mgY7xza+WrIaOYacg3cbepQE0W5XmPSL/6P/7di6m+axQuQ/m2tu8N9u/+AiAo6uv0y57NJM/nGSYvlvUNzFxVnYBXiKNLRzRJRmg/7ZY9CLI3Tfuoi6lT7QzFNd8fRtixULBtonvVrprb3Ozrjaxi32iRKcSpoSuvmb065fAqQvB34s9aQp4ckWm0wANScsUi09us5TTzeidmf96GLSXMsH6RJgzTFhvmSUbMeXiVSZjFFPVrkILtKk+0I8OdBja+hzJuQE9H+rvdHqxqCk2DE0qRoTbv39BrzyBoXhW+7ZedDFGkyD5DDxzraIKzYOU621IizftRcPru/RcQJhWRDbwNdDl9GqhNsIIpupiFR3Nuygwmw81AAAAcAwAANFabmoEYxEk5hiOtdA7L+MKlonjvYLyzhaHVRzi4brtuwjxSuH98apaY2q3nwbqIPHlzSiTkoBSTzi23zyDAT9DHXhGFnxMwjvNGJUrtuhkZkk1+Y1/U6e6Fh7QdLtmu2pkr7jOdCCmpQcXYddHLb9nB/1Rif7r57XH4eYxDApelyvaCmW3Vs2EmU/IjF09lm83sHtgsWhf9i6kQ8AbY+ekd8HeZ3cbYRk3NRDAXFXKlOgnRsd6EkEspwxV6fviNqQ7EnZIAvVF2th5H43uYSmw+Tv3cvcwGcl8kwS/Y3OzXUwtDWfTphA29icCvEMHxQMwHROIY8o3JSwtgYPMyC9zzAzD0cGTHNhfjCn6vTnYcDhF6Cc5diZib0/Wt/8nH2vqqg5MyMujcsKxhXdIjy4jUvF4Jq8FI1feEsvuPug6ZVF1RmwMjUMO3m8LYdaIsXM+PPCPbJc7RZ/iTZAs7HH1PiF7qgCg1cllXxL5QEJ7+aDCgtl1dw5lwBmjFSTYNXrUo3yEFJJ/MY8kj0XmX45QXNs0ZKQrs9EEjJsOmoE6MBFTih7bzM2B6yinsKLgCnc5kNVyp8VyKf94eVxazXFvJdr2NniNnYGCm7/LNAy9OWAb/MpGDR6dMHB9LGTx3Bnkwp7gxVap1Hqz/o6SAGOaluCnscdZDxpX7LfmLFgtMM9Xjt29+grWC07TgCLNwvwtqGa9CCzy83JH/QmHlujOsdno8yMaHCiF9sJrbkNGSItUemAHUudaQO+24go8Xr1d0EZqGyt6wR+juPL6JATqI0LfNzCuX2yphh1t0Vt+g8peIsvKLD9oZa4HtsjaQnw7BWOS2zsdik2FWDnWTA4DIE3ZklLuSc9ZUXzUWd47OKXVz3lFWWCPRC9UuqJnQAeJjRBL/YU1PRf+FUiGTAm3CpUCu8t+w432CJmrV0iDrRgoFPmu/AfxZjo1jpIYMlHmwpnSM6aFxfE/fR7q/MKFVwZfakGBWRS5Ck3c/gEltcqaFdIVQPL9qRn/+Ml1McP399w2SBWfzw+R4KyI2DthHEKv8KZAWZT1zkdzilLWxKlpUB0ZbZjIcvL2d053UubdF51T72CFi12RD6HMbfN1bAEaDaoQE3qrRvHJeke8raghf0wPHGAJEpzU+z9kHeJntLPSrbkeDmr+aOUP+1aQoVLGQWn6/PfjdFaVtYpkP/On2D9V4SfQMcHDSNoeKCxGPwE5dCVwLRnac2bGtG/y1GzSYSUbCMdNxK+h//Zl8x3qeXnS/57YDICUJNsRTRudjqgClREB4hsRhEmySK5af/9qo8zAWC8TEqRACCoMDFVozDjbOkn8HLPMXcQpco2C97W1DbAYGvB2oqZnaFr4j5vERXU1r0L/6YFSWy1JtVWykvUdk1hgDXfSvlxyG0bid++r3Ozewp0Voi0JIOVf5HELI6O554PNc6NuqcPGN9kEnwXUp4OmiMBx7eDhHJ4kHObIlfqy+hstoizNMqnBnF9Kq8TcEa8kdEu73TFdUreajcCVRCyFBxs+irVWYej7Oa4N2kvxdvs8kSjIOiNzbjh2cvNAqDfFNp3C3i2bq7rNRsLg9yZKPR//UrI1V/slgnpuEAHtiV6QIAr4awkIpXapgnUmDzbQuzANtS1eVQr92jjLENKaw4RotU95KFSQJKFztQSLLey38OEIhAk7yvOBUszwkw7a/zwydP4XGrDJPF0Zg5yNkeCeEQUwzMxgerqvK6MMuY/cE7XotWYbFuYS/h+qCTq7zPWVUmKYj6Qj5jNsUX5Qv8qcPo/MpzXnTf6gZcb3ubRR5aEG1wtJV83lyZsJJI8f8khOuKdJPO1Oi6y/h8N2g9Xq2cJyNihCqTq+qcu88xJFfRATVG/ZaHarrR0vSQcv76yQeL6x1kj5bxU+/VvjjGvocB4+hHuR1OXxIpYwIxrmiFCM+sMkILt6wyr0RUX++at0nVrHe6gwhl0C1NrVFAZNAHVpgVM/0CII0h+Ou3H4Hp8XD5BfAy9K4g5o2JIIWLHG6r8NhNqayAf0Bof+BibUzllax0Xfbg6RHiuxLMbqolfCy14XqEN5w4umC8IwDN9IvZjd6GM7yS8+PK6CcoOtsMgEBb5TzQN4U/WjQd7l0VMronjx480GF7DYBGECY8AKJVE6Nu6QJgvye9adXi0ZdxiU5J9oBDj7HEWTlbjex2dkIa9Yqes4ZrmoMLwnt2z+XgZ0ZLRbFoIaBIMeyUGRwe8WiAaKnMwEzKM+JSaTNvRGBqMfPY+qbGtL5+kO1zlZL/HtcuUp3VrCdJ3sfkwTxVl3zCjHyFuGMZm+k3QttrXEm2B3eGtvmyaYSVuWrR/DZj/jZg8bF0xLR2BSUr5spriA638tU3Kin98/td89rgUnf3UiB+DcoCo9STvrWU+v2c3CV2PQNi1t7AQacOUybfRDVicBrrOfcwsERKQCXjrU7imPf3qcNlbSeAjKnoQkfXgAgSXNxR/jnKm77cVpnAct8i1DaAmWfW2wn0UlyMijR5K+fLOYo/g5tjLDixCVz+UA6+8K1ePEsjsczr8w/f+kBLY+R4g2BNVTvQ4s9NElIFFlp0BJOHwtjdOIcgTngN43CzcOOPifXnQFxzMZciiZ7Wwzdo8P8lXfbtmvOrHO4b4MUm/1T698ESJKAFFFdEjSsJ0We5KBzXCzJadVDapdi2taY7zZhn9dn7vE9t4cB8c92K16+/MQl0aIur0DoAu9t4o3tx6ZBjazGa16M9N7mZOlnrUVsdG4FhpAdPNbb2EEtdNkpwyl3FHKGtjtCrO8C2cldX8TO7z8GGI3l1S/GbZc01QMdbWBbweGjpI5rDLOmxh2Aaf2fRweJ8vaJtoDCXoyQsBC5fQUV7w1Ser6tc2EXa4dIxNS583lckoLBgi3o72M0QRritwP2MYSeqmsvF+soddFiaYeEOKXx3EFfBA3HxzOrhgFPaeiicKa3VVq7C5uTtjcPk+JXYX0OgQjwsyNMOZxfl1iRD7ggrFf3XbfGvyCmTltGtzbSseuZGeSs6kHQdOWB7357LYPaBCh9MugKW6AtmpPrn4P5922ol53WEGhrbUv5f0gbKLXI9dfuHfFyO0TKGzlQ9sEDox9Kv8/QWEglVQY6zNQqc1vpEcinag22D4f3GIU2zk9EGMUvP/LUGJb+7FbmhjPYSoVVka+GmOGg6DckdIcqGC1SgLWz9a1I9JzJ7d1WS/8nVzVUW+sEhngwTon9XJ9icR2vPwZ7LMwJC0FuAfI1tncEnnb6jlv7wE0fiO/YCxLF62JwDw6cgmu8qddl/jR5qMK3hC+Fq2Mer5x/qWLzw0jZ4RCjEAMBLx+ZE6RCoou3fM1fF/d1zCB8JBe5wki/mCDrlpvXF6yCrcwBoRYGpgKKuzavaFx10LpSbEosQ095EvE0wuruPV5MVWALaxSdH62Ic2rnFigrpUHB/fEhX8bdPwTeimpFgyevjUybmbx4qHLAUTFU07KyH7aJKRdmRxGfdJwMeoABUFzvTIQAhV7TY5OWDjc1WXOo1VW8BidgFXvAXUmtOsN1XY+qmwPoG5c/NOHbrgOpXd9CRotuT9rMSpNoLMzrNdq38Y7qv7zjaXjUcgoQKFbPP9jjT7YowPSWPL1M4jCI3QcYNqHzFfDZ8LM5zV3Ytb9ADhn/7sJ/MwJSLKVh8AlNctLvSp9WRi0hOVog27mvOo9d2pLTdlC7UnZFM7+sGRQuHkd3CZqdmABaME/zrkXd/pwJZnLMXfTsAO+c8AF/CZ6wbROKwRgVHWI3tkAcILLRalmy2PtCpH+IsvuFutdAGWiOimPOQjZNN8XZD5jVHddPOnsD+RQ/PPdE32HJEB56xObmoRB1nkWh1CQXy1IbV5cwq3c2wH/G6nbLGsTOaaRkZElv1iIuCJ0kfSS1yKrNpkKUmUH4lsMCcZIkUVuzZVTUMvYaHpITm5WriLD5B0oJ3gIkQAyy+OsOIPxeryuAOGEt47BiDD5VamuZlwUbXzNftQXSFWEH+UlYaRkNpjHWzHxvrM2nNBw9nmKc5u+wuM8d0enXWv1HJygc7AOTs7XG9Qit3M3tHrbdD7vmzdtkzhjAs0LT3LejtqV85E+HoSKDkFigSlumI778B6rB615wy3Z0ZIWsLWjatkx5UM00bDvn8gN4KUfBAMWJ3IG2FZcMn6CZdlZcu7n8EtEyOLqrarMfYKeim+lY6+77nrI6Vpe+XrY44rP9ugGSLcibIf3ctIsNV42AAAAMA0AALNFmY7s8fZaWy5G/pplD66XatIJ3yzRbg8Ki6tcPnVASyYHPEnYAVEcnDqKl9pzBQD/uOwXs1q9GWB7S70O7hs9E2BjbY55AlqZrkE+3qotI7ccWB1tYoNOpNzlAzw3xExJS+AiYJhDQ2hrWwnedIRWgKAsDm+6KKCQ+Gz3e/xpHp8B4hE6+FXwPHmtNJOydQuYbaCRYOqkQLjxBOT0OJw7I4bIf8r8fptwCwqcNjKWp6cn0xELcbRjBaMkkmt1znsWu6iocfIRxrXZI0kFDLw1zg8WRuzOFermvc79TXV4EpmT3tKF2aJ1UeBngo/ZEt6IJoY87261Sbx8KCrvGZCIOd56cxT1ybiCRHo7HxZVkCMTx6t/Rj21LOTvNZSFguwVuNk+D6mQBl+lB1ImOK1G3+bdRVfa+wNvCXufFcxpSzuprFYVqKUp/IXJemRLP8zCuguv2MbsvlQjanoOH5/KqB2XLcRAQ/qMz+LEOlEtBp4jfkg3jPJy1N/CalHbhq7ossQ9s9yC2SAJVzUW1VhIjR+VvCW2gi+A/IVfCqC5mxLWVemEblEmTCxkhprJqxI0sM0kC/BZFKsRTciBiel8lh5AS/Fu3vejVa8mWtsktFaQYGKX51xyUm9XQORP2TuLLMoLxesc2Gd6oEjjjR6m5RaWCNn+EdBSEOlWiRzad2022q91eveAY1sHL23IRTUca01EyddeVhF5uqT4TaCRQkXKtpJtfvs4wupHRn233Tm39O/R+wrSXWST5tcauTKsNQvtmOodclcimsDTuoC1g2cpKsYwSmYAzl2DJQq/6ZNBYInCz1XhNlEiz9TeiWjf8qeNyQOmWNTa++99Ty16uBllG5ZrRSlUVJLnen7fBklxYPje32vlTax86ADO4Hh3iQzr0BkyqBhBcfXSiIHRmQjZKmRO1lCsUMXcaL3Rrc6XtWwQIR0yT8XqaFlsDU42EeLa7L7CAtjzO0PzMMBfzMD74TCnS3WVSBLy7AOE+Tnd85PoEBD9Ej7/6QlZqfaKrM2fEQJhEO9iEEBLU0GDVXRuK4S2PE/3IFyaL4dXl3YmTa2NhPH1TZIY0fzh6MPWpNDjHe1sDpmG5JfxN7Sbnm34JOPd2X09qNNCbjYTx+8oiWv9C+lgIthoCawkJy2+LY8ORKaEEw2K49wJ+Gcp8HFij2eQag7+TqODVWMIYX8sAlSOExQZaJ1aT41Ur/XkXsWdB4w+u3dyobwMAJHYBaXmy1zT6B97gzznHgUDLZLuy64McHdcYabbELT9N0L0+69HJS9fyyepIpHnzq3e71Lp3+hLbUMRnwU3yX3q07XnTDdhj8KLCUEw7mtYOmZXh6NFKaCW3Bt/EgAuIOKcNpZRg8iUEpkiforzx9CuiKICG/3mrxjR0RaxBtwgO+907gd4GSYEESeIHtY8GkrmuEKfcjUATDE+oEVMVdZpVtpZrF8Bbcf5CE8YQuTf4DaqzcJcWIeZlCoFZ0zqtsmuRleCJrR+9jhCS44AVP4oMAEQVfPtkpbdBNSGlQ11gDNIKHvb4+/hStiLmqpXzEEDi5z8S3Lz8+hrWIAeheOXh/21ld4EOTE7P52u6h3fQ6u0EMmigBP4Q3tegT7CTxHeIePO+tqpB3rxr+mdfO1SLNVANcJoVO7UpvqFWAk/RmfKTLKxVykLamxoZx9liL8q0ZabE/Dm79gwWG89tK6TgAK9RWNh808NHNxkwh2q2EWhoeyNAsh/H2MSkmbpIiczoErfVi0Qz/HBNJm/VXUgjVjhRxzXXzMROx/Z165eCcn/psW3yE8SzBTTwa8VAuLAaWVclHzNdlf5ql0fodMZ3obmUbN0xzLDkMkuWNoDEEP0NixhjiSp7OEC4jGkN4mDGabi+6xvHFpgKGF+ugWCx7VXhHUZgJ8fP4351siNUtm/usJq20hNntxo4RjaZX7C3GGtxsUJ5jp7r5eCn1/axw18aVDfWDOUlsRoix1LGS9NGFchOW6qORH1sb+tTFfljk9KMNE0N/LxocfxjvnM80CjOsnr6+x4x5MZXsFpWU7ootTApAddDBR9OEHsryY3yniYJNkLDcKJgL5XIXvaikiF7dukuAwhxpa/JlcI2xNtBLltKjDhItc4f6VUPdl8WwNvLavVu/3AA1M8mKxcT1Jutjw8hbHG4tM+9TekW6q8VqIdi7sA8fi02HausVk2vmR2mSlXEI1Ihyjt3L6SD1x+RAoWJyU+zaTbZhlOBvPYU2hLUwEPixxpbUwzR7KZPv14D0zH6iUN2WX/Mi7Xlq+FZZ4zODlO9jZ3EtginWhX/k1P3fpxS/00G4p3GgVA0alw9scp2KlqN2ytXk97cglCOhegN5FsZ0xrTJnoxbQM5PkjFd6dYH4yQUP/AyUbu/Hr6YcJJzS7+eHbNhCrtNczYbm7ZfXBh0V53+ig1swnlCMWh9eY35kzgMyHh9n6a9tCc6q2xkz6RN1MCDDak5kGgObtCG02045W1G2fVmcdOGUJM/IO6xrS1U/j3ZSY7x1M6zejGYsS4j6g5DSPdnjdZ3oywMACybjNuXrUZdook7BB2F+evWKoi8w4TXVK9zQEgosiRxI0wZ18GDbL47H8CXuggg5eYBBB/1MiQzlGfcmhJrioeHamEYagGAEhAuT0L+sIQPsCx0Urgr/Ndb5GI/SfDuQE7N8yOKeRd71C/HwZJHXY2bI5NLOfnbOgJe3fLqyvKwG+l0nUMYJY9PUmJNP+52Os0vaA83fx4XX45+oM736Q/ZUBsY+47lBQhWHXbq8FInkkvSxJiBS4NTmYAWh0V2s5OzJo0D53pkD3jlAZH+LsVDVfuLHLC24t+Hl+F+1zQkpM5AVQZ3wps5d3I86BCQSJgq+SJ3Hy25UFt15bmvTbVZYeQb4lg+fRRJADsqf7v4kfPwF0QrVK50ajaPx/jb6kEWtYGOdkIYcpSAIYNx8MV9VZNTG7/cy3Pokj+g1MCdf7XNvbv4J4DqD62LrqSlDvPgUm+T7z5WH/qqyv8yFqZ4jZ6iptUP5toX+UWMDZUiLEks6V9sNMSTpBDoSbMnCV2r+7f1gjpsTxAJPzgrc7M5TcAlGTUcOfxlITdCEFGZ+qC9Q1BjoUt0+w+z0cxLKQxZ9uB9qyuX5jFAqr1a5aDi4IWyLo/a5dS4qrJmUEWykEmsSfzabMnpv95C98r6lqHrb3EdXqEekI4tqkY1QlMRAtwstTdLcbgsVJhYeJF+7WWMeqhxas7+Bo3rDZf/0USbJ5N/PwCvXX1EcHrR3Iu8X1CuC0znXhs64/VVMo1jj8dfRsBlyYkS9gbMURKevcW9QYLdDd0FOSCv/Ul9t3pMrPVvckLOh7aukbvq+eOiKq199ZsJHfX06vEzkm57NZdeHNZX4Bm77WXfWO/0n9NACCE7XPCs2QRgrzp39JB7TNNAyS95pUCu2YDMnCUeCSmzP4sC/EUBguTZxCQVo95WRwNN2yhNVuvInxivk8TBauk4M911eos8ZToX38CyGt//+dYUVSQiODw2Aif0o+H0PCcLxiqN427TQimV5jF97GD5eelEy9iF2NDsKlm0ih/R+N9HYwVuJL3j9VxtM1Cz9ttx14lDkublNXT0Z097b3fSgmTPuaw+5K40FWH3Oe5JBdm3tm6l95wTCZiHFSEizFJFN5TdLyIP6A3DO96feyLULtLwnmWwhmVS6L9ty+yrLRL934DXFD700XU5zbWXT2WHpyc1w5Q6uovC43hJsc17ew18axTqqkxbYC9woh3+eeuG7O5jGQC7mGl0it+hgyrw6Qc4PrzQPszViTUXwdrQoMrEP/zMoYN0dajquK0QKWbw6fQTfrirl+/L4OPtXVjNBjLxCmQFn9+v9GAHCwFgGPPsLLfB6/Lw6VKpMLvrLsjcQYIJB4HX5omSHEmiKUxMtJ6H7WdPJADoRN0C25bvlmE7CrqtUUhDBIhn4zK5RcpLRvE6FS6V4CP/IFjRJjs3YLBudYufJfM3YKwVowIVBKRy0rxpvE3/0DtDBSz0uo42v00/OTY1ffyPk79BdLAZmcbJ34Qy17rxSgEMPbQCHQ9g3VlhD82/CR/q8rN3V9elLV1YYxALFDjetAZgAHqJY909NXSA80G+qk7QzJ88BbCmVLbp6FCKuTjc9ANMDAB5RyzyLkKkVxdhCSKV+HAvQTtQt3EJmTlCt2zGq6nH2EcRHoY4yLg8PXlWopiVIWSNuS68cJbhq7XxGugBNVTTKV/ScyNuGGgiAzR63ko7pFPaCp35DeiAbBqj5wCiCL9Y358C6eVDs39qEw8IiYExwJGw1rzYRRwyPPkE8Rr1jt9BUwKa7YHqfpmHz2z9zUpu47wVK1QgTK250cgENfluLsoMS3yQ1plaByWBmW8ffdfWAfqHNvsyyG/D0o/CJBYUVUx5yLub/d+Kb/gIyxiQBwOJU+x9eY5gAmnnCZHB5T5XCcddeAuIZE2uUtIMpNaEKL25URF44gP+OSogwmd0hW4Jw3AAAAYA0AAL0x8H8HraBAxwwqzubt86iJutM+rwKNymcNLxxvYP/7g5pjAGDzmvYYzHidj/SALyblcfw8scHQvM2NJ80diqeQndM3wKYSocOrAtj2F3MAERMEuDQRMQi74YOFb/O57Y8t+lzHu6sMTYHzJLuEEzhTNzlpHb+TsKR2kV+qeTc286oyl8Dz3Q3CILQ/AkQIFr87ZHilFycVyeMPOUX0gY6CQiSPGPe+IpBhzJUtYmftmYY2XpVPZpCgCjJV/Fm2VuL1fBwDXmOsJd7RqK2c/frT7ey0slSz6mV0i6HRJkfHnzNcaynWGJVLY+VJOvFvhXWou4SMxKTaOajqs11N2wvY1hBI1UrEYwbdMoKNN5m+GAe3650rDDxkGk8c/gmk8EZJR8HFRDUfBW12o/o8Hl12PHPJZogIqhCcwxBgb0P8lC80+DP+8IDgsAOUZLDHE78PKrUsY0vj0ofYJpiMAgIVfE7b5r4g2nceS6r19X9ekC4SbJdsG2JxhUO2JyZDw5YqD6g8UtY8zNll9FaCtmN7hthLYcCUimzISBCsgPqmoVvqyc9XudbOoItT3gTJJxMfIWe2ZEGY7BHRTC4Sg0kE03WayfYWOhooWpCbPHX5feEX2eaMbpqJILy5zvY8C0rvJkEEwod5d18BFUQoVb8UvAW0wVMkf63xk97xRddjnpSauWARsaGpTCDtEFBiW0DSiqy3mgEK9gbDoQZcOnQi6r24a5uWVOgKocAeZHc1B4Qm72wdGXyvqvYt3SdsdYSLbUZNwTPd79NaK/0j/9AhTAUpq/L57bjj4xTuoM/uwKu4ZjL9+8soMfV4oevyuEdXS/ksDN14TCtMHwfaFPoRcFm0zUSiSqcr4lvc4A7NMC/OqvOQAOzsBjB/9fegret9S0KMo4k0mWEpx5X07pitpgrFEYEAFj0Ysbk6j4B5FnGRy8U5Z0erqLQAOGcm0odctK/hH6I4QPABv6yws5lKy6i3liPY8M0CAxvM4baIIkE/ESrf68RyA4kksIItgZ35+xfOYJUaWtvMwzo3GH9ZJ+z+mQm8Ykj37rgq6DUBMWyCGmhnKX+EYWXEb25svec43WLeUcNliS18Vlj+nWtmNJg827XhZFym17kT2C+VUX2OpiO61A2R+HHgGutKfMKiz8srfR4dmmaVCYaYEH7otRC6uneXMrZ5Q7s1rUBN3N8HIKNJorVm/+tAIydGs/yhhrPaTxSj9ugtwg47jHPGdtycx2eZiGtnFMPYpGe7LNMvNZ+lWz3/F+0mRuP4eHX/22owUp22PVLVJjblIut4aLMFAz7Nsm7ZuqoE0+qMh9o8FapUv5VxiAweiA149WKmfiEAPzMrUBgPH1Z6mObQH7wwZz2FLF6LC6SVM6zEJ0mkv3vl/jcnJe6q5YWez1KmQzpKrUgO1hRsdAGxLdu2yNQpwmNBiM8/C7g0NtcxTZojnsvnI8WACrNE0tegFWTNf61olUfAnfQDba4n2KaYlG2n1jW5i7s+hrSGa/wvN1Jxdk/pYdVYLELKBD92MOH8l9YdVtgwHoZaHKGeNTluW63VE5RkO67lsAmhY4bF/rS035fUW+8dQLDTFhI82jdujTSMrGXpwvjkeTSstO+UbEf+hMgJLcKynY3dY1E95af+eggwn2go0WWjLtq6HgJjat/GpMCF4KbW3Jh6op3eEOo7wjiUyVTt3E3ArMU21PxdGy5yqgoL3JA1HyCOX6x15w7qJHiqW250qjZJHXxK6P+2G5Lh16T6NHIuaGbNISGzfSHflf8AEOrxTydUQJmykeD+T0SWov/nvC2CW7hSxLhqJL1ypmZRpHrin0hzR3UxfeDfR3oVu5aDhNogOEsUZzNLEvRzl9O459aDR1GAX5yuMKQSoGZIo8xxXpZVMLApBwJ46kh5oMvPcUeiD4p2UKQGwfVieQqDUgO/zVMF5io5cjDHiu3eKoZzSO3eWKLKy3Hi1K1mwPFxIbcq8F8L/q9+aMJG9VpOjV6NIERzPK5U+tYE0J23f5yhHu90H21XOWgH3HVA4ApfOlWa1FgqS3lFxDuLsymBF9XUw9KCx1roOiQZQZwmBNYaPNqrdcaiEQ/Rbeu5j++3Wwh1BS7N1Gf2guX4ebsDpw7Gkv2t/Ub4PGXw1mUMseg8czaptkdTtwRjd0oFgKtUdWO7McFzLfOKs83u/jPQ1c6jzYQkCFMFqJZoLfrrTwxHyKoYZKzCPK8f0NicjJD4uY3rsmeQPCc0I5B+ZQ0WLhvyKMPM5Qo+RJ0NptxqxFzeKilL2pYat8oR2OASGyoMFS66VTmTITab5Zk5ix/4Y4VzGQsPmNULRWjrjdgsorh69K9W+W8IkVYq7M/0d+Lr9CWqROENHlRVUjy260/YnmKVZcl3q4Phb1opYNufuCv+DJHrttvTw7j3sx5mPoLUhrIGe2F0BYLAZcPen4Deva2Sj1lmmu8gVD8DIvHZgBCa8LsbrzopPC0qoUXLfWmM7jJx+z50rnNMDyuuZ+m+KhpJM7wZCVVRzDaN/S/6gMX3kN8hCrhf0NtkyKBofFX1eGOHw+11QqdPmwDaLRfSL2MMmhQZRT4ZwEWUHoG9NwHwRvb1Mjcjn9/cyqKD2bm0PLEnz2JmTS6imY6FfAcTHunzPzNBO3Wbh0zXkVujUUYKTSrcYLCffiGnITchbjWEoGzvDFGamLFeBhA8UwECDuWMAUK39JBrJxkkNX27DRoe6/ki31Dx8HQnkuY3etH573XTvEV1vSbb35t4ZO5siOVLhxjYW72r9uxMo7DglPkr6uYq1uYi1iNbaZ7VNbtMhPxURYncr1RN/BzhF5hWzVDt8IxslIosPRmSdZ30T0adAe3eMTfUEK4JK+QRXU7BVYBzOo7urpQfFrQqYSr5hxkBvaNtBb+EmlBfhLcA+YAJBCTSobCGq8wC/WWyORE/ZJHMVXzyOm4PKBhGUsvRn3cGVOl8wxETagQo9dAZ6C7KXQ1A6z44p+mgc5Z2pTpu2C/sZNT5l8QupHdOlKbgmVCSjedaJH0gcpRU/6ODmF7o7pSv9136c9r0PauoeTB6f+Aeedgf7qSjimTRNc3uqkce1cIsPY/Y/S8jljewiF2MoCoWxb5O84tgjc+Y3PxaOFfPGZ7Y2FAX039V+pMQTv67HUeBc2FpoqfkN3LJX/OTJjTc1iiYDUlYERtqQahFlerIvxkSQQpZRQSjooIae/qbH46t0khmqXKFKQIa4xxp+o/g0j4BtUPc0q1Vnc9HNZjokOww+lLJJyF9CrqvXwaOV351y+tKThFLKuHVcgikGqOih3Ebas30uHs6ebGFjCBfQ2QR4qOSaaMag9293QP3q2xT+OWaHn6KFRz0NAgFRuJJ+R9LpxQG+FONCSey0ZFQzLklDDOk5/8XjSc11oJAmfzUKMlXoCnkm+sDDvr/+Vh3hH1BS4oX9Y8GuxE1pQ2M4nyRqvfq5g9O1Px+cMKncB27oUvZEwC+p0KI4P34A6P1uG9vRdIc7mZqyafRBawSnNWK8iAZfnkQi6riK3RjE4zlRedlL/7hhXl6wjkc/o3s6wJoBSOB4My+v4g8+9f/piOjaf29zpelPdKKgxhiK6eK5WwOYt2jCYNruzVxolIqv0FLl6MKJrT6Ol6icMkFlhu0gN6uK/m/uaFas867y6HPYcEK4QaHEG5G4xOFJJoqLQEG69sDmAKbgYpE42vsp43Y3n4TuhEXSJEn+mOIY5LtrYW2a4OpkeLwzPf+ft/bZN9kmq3q3KGL1wHyWnkQwUmiu5q+q+vX5zDML8T5/E8VUASyGyC4WUJ+4uzDn+0juGGpz+KSolF4yI2Q3AsnpbEfGzPIwU25JXPZzU9DAZxhhIOmIL7LlgUYuzpxU5L+Vw6sEExpK0zrof3TisvG94TyLomDjIDPu5/061G6i17EeqyIALtXFpadu/8MlCS51iezix8GBxv+3CaaGwHlAjOpNlutzEg7T0wslm+rGSuysy6QUkH3TujCbmqQrxNaIwZT3cGfZlaP6S9eoOZqKMcoGzjOhU003Uuv2qcYuRyJkf/Ae12gZsaSvWKK9PfZK9ekH78LXYeWOQNjHbYQUBxM6Ft7A/lusk+E4ciWB+e7UhE6Hz4eB7/hdjIl4vx4aNZZM0PxM40l58Kxc7luWzfWDchoRFabcI/zG+zomOmtMu8i6f+pFKcQoFEAE1UdbK+25zvNGNTiNult+TpB5RTFChxY7BYbVm1BxzF0qKL2NOw92nScNmJb2wvq6udw5oYFKCdlgsQ5rT7UZ8IqtCD40J65ekyClPelojOHGK3HPp8WZYO+BOYD0bfMbBYeTjxWEMywRnhZ8Y4ou2DL8DEYogNjmXXv13gS7DvyCMGTz0RsB56U1b5oz/ISf0y9DGKDY+CCPYh9azGXbtHDzzqf1mYj9eyek4FncFVbptwV1lYgNCTG2Eze4CAdlXcg1YNYCApGTLmRLacvna0Nqm7xJoI4rA4I62dsn4EWIn4QSfjfIr7XGr4h5QYGQ2rXzUJ3UtRcIs5UhdnAZfZ57l/4Rfo0EEm7wLPlnHJbyrg4AAAAaA0AAO2PBfwsF4nsD0QszxT0gDpgd2YTE32UaRg5jSvDjfnqyg6fTth4ITTNei7/ap2iF9nDsO85LTkndRr4jIlzqPGeWRI5aZPrjp4rLEz0gl5qncpEc8bbn3yvYAjyuDLxfXB88C7E+BBNcQny+LAkiOvHxyf8qOMhmbzhaeZrTrtR9PWQlOGWW1S8e3HGM8nE4+1N0EZDkHBigbzpN9V8DovFjXyXH2YCKfYuZSr4oadvzejA+3WhJqScTiIh4NWqoMx7Jv9WNJIKUFJoo4YO5vHbAhj/ZWCqXJcNR8PGeux9WwjJc21BXq6eMd2E+Zi2FH0CKPVaJC4DYOtLSm7Yp0eIs3HKEdeL/7ARn4Qh0OVU2x22nyIRZWneJiairJMEXZICDf9jmu5nB7CrtUaQV/IEtCDe5LYa6SNbeDMVkFF+jqDoGVyQ1/DeYJW1k69alg3VzHiPHCYK0B1CI4F3b/p6doIZNG3xC2xTXAKbsHujiJEqWA2hEqVbABYfCTanJ4Xtg27xg4aMdl9yg6jA6yjTxn3TpCNXcvpJvvgsF6U6XYsf1Kk9eJY/RPE3k3ut0sNrKu7PrTGBYkXMbx9ZdWdAUqI+6/bwAhTyU86Sa89D9EZGm1w5OGx4H5lq5vElDDI7C7JmwnK4NdyoMmKmE8jAAHdYlRxSOq8ti2a8LR0MHUIw+HBinZA9Aln7qM9fUj04Mvvv+HqI9dxywsYfxq3mKz744L4lWdYaom9mfR8ercWeMN+2FsbBpR70yMXXw3xEYmChWeIBQO15N+5xbWaTru0xa1uNWlJAz5310Ec3ySeUgxe1LSXEMgAXfG+1sd/YMcKhv7Yz8WjXV6TCEiQLR9L37XRRpRJMMFqN3U7D7n5Yn3S2S556RFJHgkigGSDYH0acNvNsOWlGaai9SVnK9lBiThxSHp26xn3/buYt9K8NzrvmN0ICsCK8JYq6hvcQqsieHuWOtcupx/ixIkirT6Gsh5cVtJwWc7aX+MWzQQ0Fl4bn1JLTl7q7t4U0zlEhp/GKpQhho8+SBEotiP6nOi+Acg2/w8xCya31Dls9gUn7yjM8f1+QYy1Ku26pRiL6cYNb7onhPcWVrKHUntm2OTFb11qEklldc/nppfnvbKwn5WVpBvCRCIPxxEQOaK8rSIw3UpR9jqnb74BD0830KtcgABZy62HV+ePCApeJLvGjUqEle65celxPFmQPhkBLPmVIIqbQSwdpU2n4eRywyBlaJU6i9qqc2AB1KGK60p1x5908/wGgghIt3CP0ShFvvBPEoK3IRdWlsIPJ7nP3WcUa7hqpyLo22Xcf+rhkRc3FYe1DDfFEwwEoQC2vwnvpxQrKejMerXL9t3ZkzQKCeScNeps5se9H+4W4LpVev8/Gefs6xj0HgLM7IJAmxXcRqU3REofq7cTZMVDwtR0a3Ip2h3Hg3sxwq3NxAzuJgrrROrg9bgGhSzQtgGKX4wkuQCs9ov74euLPkLcfqRRLs5h5ixZJErtJVdZA1AsZXVDu5Q+qKpOLTppwPodf92oBIoKH3wBaGgc1JhXp65tDxMYhRGSDkJPbSafKkhgRb2ghTIdXLIWkzGvCBuuQNBTRFb78wzJi3buuIMa/nFSZttY56aP34QKc7tNjUj2jJ9kW2joKLLCeyCxgw9z2CEQp6OGVPNlalA7lOD54jvuufh958n3vp1PF7R6JgmfLp7FSjKIL+YmG7ox2Fzj+qV3f7nU9Oimc61/6T3AQekMdgAQ5ob5jbledKnMEb4VOdlXcziDYtvyiisHavN3q9rpVvnY5+D97BVO1NoN/c6iHxxLO46KoalFwOm1q4CVLJrGFeJb03gB4YXimTIqk1tqMauW6SYRw5TD+9G0eeS6Sfg2Ok9oHgbjkWIwPBNLa6PgcwTF00fr9Q8DOh+X+yJjmBv5alFso9fK3s/I/nGhziSDFS8JR3sDRIYBOKYjFWcgVQPu3eeb35B4Lt6JZJUJth87HAh0wanV61jOaIkukVRrlxfJMgyKNnJyW5ld0EQ0eEItrFgddgK9lTpFVjO2MXdfbGX/QmXKQ/6//nTFYIoQLh6owUI3tyusQHCRE0V2CuenU3TN5DY3/m1dKUzxwofHf6vmFQQZtQqZWmYl/3u4x/OsEjumwpvGv0Vg5AcLw7HHhQJaaA58rrslvRPgoCHxtZRbFcvEpc8qBk1BTz+KYTkn3FIszEPY8oITs6cEy7SsMwdr/fOa0P/61kGfm2WYQY6kr0Naoi6VCUWiMjsrabHQrRF676BIHb18Ezpg7V5k2ECfUXYzqy+AvzUR6vgfBoUx4K9XbJ/L+4VOe7qbBqbndpR2l5c0OKTsMojwvaTFJB0NdORP0d9qhdt1A3tso+dJ6xJ0P48X5Yp2VC+hme3mSyqSXFixTKX+vpZuzxnKoWLFpNmP4pNxmk1aXWAhhImUiz0RSPHM5eFUuBsFst2mTJww4Qk3T4+kGZKoDfUgYAiQ1XhjaipNG+BiNim9zLC1eHKTbc0IeCs0hEK4BCiJO7BzWVPMx0O/MpRoFfvIW6oZaaHcWkBBRQjXNMY5HF922SD62BA/xeWkOPSbpG5rB6lxVP/mR6qfYPExAFPl2lB5fbUhy/jXb6lfNrmIN9JWGPJwxfK6D0DwanmKyCPVenWy7PdM8/M+Jm9Y3CAds1MK5rVSOwp42ENeAE7xCEa6BBN6gktkM+45+u76RA6t6mM2GyKywQ9AkiZly4uNIlVrlDDOtkj7ICYjjbnHHCe9j6HCUEY77JI6eAUq7sKRQOt4XPH1RpYt3vcCQMNBe6jVvhmGZdSkvDvOvhiHysPGf3RowS68BcawjaYZJWQRpFZJi3Kkrj07GUSfAuuD90XWMKrbmqs2yJub48DLihwtS7u4HL7fLrYLO4TPB8/Bl2tUIf/UNjP75scnzEHJy7fBstxudMeV2Wv9tZH1AlkVJFQVvo9UVlAjMhbRc9v3IVAV9R25uHMZB8kZiH5PfS876Jbx+kAV8dubAK6uW9jekaa6vek0SUs2kdM5axbKC7EHJfgaYcmQSnbChzxJ+l6jlUa38A4oqyAvfXBc+FRVEcWc9FVPozBZHBfWxDa3lvVrM5CA8WuR+rDD1XGUj2lEhnSW35WGLrTfPqP0mYxBjMpFo6+r+8tizWHvpZwkEiqQY2a9NuioQTPqJGdUOE7sWjiGRsB7hTTk0OgnuGv3fvz1s6+tWqPKvOTxE95BnJTsX3Ll+vwamaZO5MON0aUAAJY7hKwvcGVgQjnThL9+gU13+xoQlG3I3CApZY59B5kH64d7K+dLma4a79idHuXG7Z+CSXqwBSgvDrowLHHLSKv+nP5FUnF0Hf8jmTkZZW1PuaeiFu11GBAlwv93MeLt3zenO5Z6HksYm60k/nsv3TDYN8GkkoMVkezzBVw8KRVl25YxGEUfXjgNRKCcyQwUpI62BeJMnFE5n4txB0IOhodcq9/QXx+qtu7c4qZsDOhn7ESCc6szPyIT8gCbWFBB09Hnscn5QBOWxzj3fmXMF/FDfBVtM9ACa+TFQdeXo9eJEfEOauczMYQz0UNSXDzrVshdf11Ia/V/5SJh+1RHxso3CY0r64sRQEjaS1tY8jEpzk1FbqWP8C/nugCu8bTXCQfGqaB+M7omMgUkcxNOG2daK1q+u3sIIlSHClJoC7w9WJOrPZX7FdrhJFrGBUXnvsZaSOFmLNjyU8pVqItrXqXHKCXh+F424tuvuVNHatHjo1/8SUz3an4c5K4ilVY6/ZYEHAbmgxgbJ+JfcyIP0PPplQogKUIhW1KujKTuIE8tk7m2NB0MdUF0NJzh+/Aqz8F7PgHnkhbacAtHKPgYDoqd0sY/ZxMIhBctBW/eELE+QrfCVyc8MCyyeBG0aricozUNX4nl6OVJmXNv/uS0Q/e0VxIfWHuKcSR8mg2/VIuAY85kbFuhyaT+3SzvO6z3LTc1PPjkX8u7TaCZ6DeZsvCnws1ShX5z1/LORK0fejZmGmRWHdAkncaHKun8lSuVAX03BgAUuZ2MLP418iV9HkTA49sGoqto8cv6GsVoBxGTAp7BmzAurRuxbsXcIyY5hXdE6mNPuFLYnEojiFuS582tTBUui1hItVXzBvyvqMnw1koptIDz48cRAfBd6ABeA5fUcRgRq3DfIPxBVs/CGKLbuDafyaqYcvId4znULlHrQKRmOnrslKnyLjRMIHUSSdPuYf9HiBP/XzCHW82/NKSM2mogXSZyMgLCfKmUn4FeEzDtcOiQqQjq/Q995ri/OBflQe+5BlCebgy6C8w/LQbbXkiVl4wu3DRie0UlVmGnTOQ+ej2uSSYXmbQ3RFvPNr3W0arzd3qrXJG1ZmVns4VyPLu0VnnT7+zgmBvnvEpDpJwDZnVmsLjsDJfOpCWwHDeciPAeV/SE0ifURbg4S68JK4zUbN4HY6RcfAQkDLS4C/nwv4GcRiwAU5xrN/eMeTKLQh8rnpdfFyg5xEBoaI/hxYrINHGCsyabdML/RQoc9m2uCrNxBhafgnL+lK/4YAWyJ6wmIK2BVa7nwmLuO3Ukr+5oejEo77fGuopgGKAAAAAA=');
