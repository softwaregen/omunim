<?php @"SourceGuardian"; //v10.1.6
if(!function_exists('sg_load')){$__v=phpversion();$__x=explode('.',$__v);$__v2=$__x[0].'.'.(int)$__x[1];$__u=strtolower(substr(php_uname(),0,3));$__ts=(@constant('PHP_ZTS') || @constant('ZEND_THREAD_SAFE')?'ts':'');$__f=$__f0='ixed.'.$__v2.$__ts.'.'.$__u;$__ff=$__ff0='ixed.'.$__v2.'.'.(int)$__x[2].$__ts.'.'.$__u;$__ed=@ini_get('extension_dir');$__e=$__e0=@realpath($__ed);$__dl=function_exists('dl') && function_exists('file_exists') && @ini_get('enable_dl') && !@ini_get('safe_mode');if($__dl && $__e && version_compare($__v,'5.2.5','<') && function_exists('getcwd') && function_exists('dirname')){$__d=$__d0=getcwd();if(@$__d[1]==':') {$__d=str_replace('\\','/',substr($__d,2));$__e=str_replace('\\','/',substr($__e,2));}$__e.=($__h=str_repeat('/..',substr_count($__e,'/')));$__f='/ixed/'.$__f0;$__ff='/ixed/'.$__ff0;while(!file_exists($__e.$__d.$__ff) && !file_exists($__e.$__d.$__f) && strlen($__d)>1){$__d=dirname($__d);}if(file_exists($__e.$__d.$__ff)) dl($__h.$__d.$__ff); else if(file_exists($__e.$__d.$__f)) dl($__h.$__d.$__f);}if(!function_exists('sg_load') && $__dl && $__e0){if(file_exists($__e0.'/'.$__ff0)) dl($__ff0); else if(file_exists($__e0.'/'.$__f0)) dl($__f0);}if(!function_exists('sg_load')){$__ixedurl='http://www.sourceguardian.com/loaders/download.php?php_v='.urlencode($__v).'&php_ts='.($__ts?'1':'0').'&php_is='.@constant('PHP_INT_SIZE').'&os_s='.urlencode(php_uname('s')).'&os_r='.urlencode(php_uname('r')).'&os_m='.urlencode(php_uname('m'));$__sapi=php_sapi_name();if(!$__e0) $__e0=$__ed;if(function_exists('php_ini_loaded_file')) $__ini=php_ini_loaded_file(); else $__ini='php.ini';if((substr($__sapi,0,3)=='cgi')||($__sapi=='cli')||($__sapi=='embed')){$__msg="\nPHP script '".__FILE__."' is protected by SourceGuardian and requires a SourceGuardian loader '".$__f0."' to be installed.\n\n1) Download the required loader '".$__f0."' from the SourceGuardian site: ".$__ixedurl."\n2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="\n3) Edit ".$__ini." and add 'extension=".$__f0."' directive";}}$__msg.="\n\n";}else{$__msg="<html><body>PHP script '".__FILE__."' is protected by <a href=\"http://www.sourceguardian.com/\">SourceGuardian</a> and requires a SourceGuardian loader '".$__f0."' to be installed.<br><br>1) <a href=\"".$__ixedurl."\" target=\"_blank\">Click here</a> to download the required '".$__f0."' loader from the SourceGuardian site<br>2) Install the loader to ";if(isset($__d0)){$__msg.=$__d0.DIRECTORY_SEPARATOR.'ixed';}else{$__msg.=$__e0;if(!$__dl){$__msg.="<br>3) Edit ".$__ini." and add 'extension=".$__f0."' directive<br>4) Restart the web server";}}$msg.="</body></html>";}die($__msg);exit();}}return sg_load('539CE19B8D6825EEAAQAAAAWAAAABIgAAACABAAAAAAAAAD/cWxv1lSRP+k4uETXO8DO4d/GJ2Sr5F/ap7YD3Cqnlon3/LY6kWHbL6tRVq4Cmscdb9do5OqIXTrz+XcvPbKFgGX9LgYlink2yfqNVjn6S+kH8tdn5/trE1MZ17i+OavN4hfpucyg62dYYjAlNDVs6H0v/I9gB7Y+jbEGZwKBtbpHYrVV5HUhLDQAAACoEgAA98DNtfGdqSco5Du9UCCbBiOkcYscY8b3Fz1ytT4Bhl8WfZlPbavtedOCzwTzz2hLgljledlh83jhHVXVvXKkl84GqcFBM28V3IiK/WUpr/+/enlrH57uY0a+YWUCDIZGVlMPtvJ9LPM+udwZNieM8rXsI6vEPq7ZallMudKmRmvlWpGz8khxeBJc09Wn8HIHrdfgegGWa6NHe6jZixWC6mwC9n80vcdH3IwFMhHh1FhzYlYapcN4px1stQrT8qLhj37UDHIKB2aWYIIIu2dbyKR34eNj96gTg3CTAYiOWNYAMkTgFc5GM615Tzt/oR5aYpACSmu+Yzqu5HIM5BqgrD0OMQdJlodjKkcsGu3OTgE6ep8F6DCwBo/9clFO1w7ya50imwGz8Aph1GZBumN79t/TXvRxyxlWp7W+2q8ExzCEtsYL/mPy2RIszahAJh7Hqti/EaNOHtyXYhM1WihTQQ+r98v5FoER6atnrk/4ogj/+3xfi4Tg+xGlQX2xxGmrNhmUYwsYQ0NNomoh1ApTkfw0pCdNh503ytWh+UGKhRYWf6Q0pzmDz/JIEE5TRjf3ixScantjmVyVIkGUDPT051f6tziMeD4HZ+yo9nT0Ws0eZqT2yHGUrTTS4ECCstuFxuFlUTLAlSX6DVEoVHHHFADp01NNHwQQiQE3EGN8YdDnfS3kNR7Gi/tAEu7bc74mR2MJdw5IkV6GtbBuO/4LawOU+lwZRxFUtmHn8h4pEEK/UyntupgAXlUm0di5VcyjPoD5ZiFMqFyhAfbfGzO0IYvWcBDAzub+5m8vy5ma4cNxwFHFZBMDsmBm6som3aZWAtkQbKzeoy4NwqKGygPlpX2ABcrvqlPMtABclh4YgA44z+n3e0yctP6feVe/T/sRUGXiAdobwtfj4fun2kVJaTPScvPRlXGIGx8WzNM2BV5cicYr28iYx98Zh4ep4scE2VOPKQQHgvLavjzsHaBO2+utuwYdtMWmH07uIi0389YukNW1GroCpZFSM/IV3oq4QI0C6j8+tZQTGDkbUB8z6Rb15DO9ZK3x+q58uDKXw4IdVbDmDaukbRRDYaunLsg8h1M466JF3idPMfpL+6YILrUCXHetUT/2NfiHcGs2saMSx50U5obhO7MkJcjuBaPrhCG9FwL81n3ZZzZAT+m1ZConuuHutoydpfhjC4tIwpxGtaWBHOO1JHZBEkrJf62lGkWYfsSGyEqqOLpaDfSSyf+6/Ch15BWQhH1EYoSwJh3Imxx+1E5MRPgGLMBxXs0rGbVTo38Z4thK6iYbpgrqD510yzsISJIYx3rcBzH4ZYJzVqN/Kvfn/1YwJxUpxOD/d9hTl+QuYKXRLHAPpFyPSHMTx9HDtgol+P2cOKsVXmLLGFzmdcqFKHdHYT3maCsYUWLTIypCiHhB5/jgT2yxGHSE8ZwfZn1F6DKPQ2fOSIiz5ispIwkGSm3W1+Y1PrDOPPB81TLAXiAW31orrwudLEL+qgUKuiV9H9ROh2ZewwrykQ2fP0J6ANfnCF2KjeWt6RScAkdI+LssNYiKnpj+7V+Pk3WDpSh8A5FbV6NcwTGGVTmiOcSknLzx3bYD2XN5OUFga0akFtuSDIW1rDDU9d87AQ0n0LVCIuK7CnoCbHzF/rg5Mo3mhjLGLAUMZzMGY63rFFWbbOO8zO4jcwYQZvT/LQRqywgAHRXK4nVQ87kUmLj0In5gZGnK4QOmhHgi2iY0OGhXmJiq5PFUQdsdqgHDaqPRelx7GoEGsxnEm1YXM1zb6FRNVEutXTzDeTmGUFSV7do748BADfGCUj5OidA+Mp1e8LmM7JZGiG/OiNPcOSXYn0VpfoMgdEzLi/GrkkqZ4+yTsaxPwIoW6A6/8GhSiCejUG/NVHHKolss72NxGBIhhM3WC4D+tLtgX3ADIraHdyaYooYZ7LM2261Z1mjNlDEZK+BtU+Hfmuo35VQgkKJry4qPM/Bxtuqx+sx7ZexfrM+n1C6G/drt2XIV2U41yfCYEr6LthC63rS52BpmrvfsVmEQ05QkIzgf0qJPjeYLwVOlEp9YuNAP00N/m/5z+MpFDN2HxZcFWCD/op7EAV51VOQrwWVgU3/G1ar5AbZVlmBmbIS/k3uH1omrhJLAjYS+B4bj0ua9MLDvOJ0LWCuR2BypHdzXpGRVCnbFyBUQtl2GwKEUBZrQKvCwgS4GdYmlcX8aRBu/rIBEbMtFx9yaU1DFUfd8Vu0h6QBTbGcVunZrQ0BV+BK+s2Jy3D74OMmbjgYjWZbitfEwNbrVBHdOT5gqmZ0Ose7qZDoK4QBOBvcvM9Ls3QQHwRwdzu9JuA/ANL9MYPh+nsdZqhLt+LDkCzk4o8PDI6+UDtwfVS9cMG0zPi7LTrCc3B0OPSbHCR+q1D8uUS1morTKcQaRvdEJOc5hhZ3WchRlZhqQKfCbxehq237lcjVqieaRVDWG+9F4xOHANlB2cyeRj7NTPPQkj8xSOVI1gilGNYYmpzMcVscemI17AMW1afRBkfLuOxh3ESkVrajiyrZqHsYK6ROi7AhoiXwRPR2z1FI6mhFTBFfTjex1sfi555hmIrJcxKvEdpSPwL2RZm/laZBcKwW2QHgCBCJy5aJG8ssHFlEkRpI7Kp4uqh63f5qVSSq9sTdT5WY+opjimrL3+7XepyfpO4IQ+0D3LFdw/3kHs0WapGOmGiLXT1W26SwOeSgbL0epHyDH+8Syqby9BwDP+R6FKu9vym8uvYTOWETxPA1ErjCKIPuSUvhpo0dMPeJWDtF4MsC5uYNd9pgMwI6jVwnVDorqcH4x/o6kuKYTl9zWYTTffwsMKh6y7f4RESj93jr30CsOELWIDuAnWIgVOHkJcTgQHxzY4N19rejFlmGxAsyNMZSWJ47tj1kAR67B5dZcUyUVLxP5W+Xf5IdSt+PpGgdTi8rGmPYujsB/b8B0bne3GMAYO4IPDIWnmfNBvSkKI29bSZtiz/FY9VLon1Xto6pZw+vDUKgAAI2XKed4btCFT4f2c+ABV80ZF3nDeWODo8TlKyi6f8twld9NAiStB6Cy7/5bbKWcfUzh1rPpbrgMe6f3+C1QvLDB8LOr0a6Hv1vauSCwFd7+rScS3KmbQjo04CgLU/AgzQPzFowIhyyTHJrFioi7Oq+F6G48fKCyXxMOkS0GJaqLNQjGXWFTcgvmsf99FNIuHGJM44ZhVflVDbRLtzERbI9GPDpiTQwyyqOWQABsQtgAYp88bQwKNBsSX+Bnz547jVpkV2vYeJOug2XHwTqG9k5ZtbWdP99pU824gZJJ210y8BbAKP8SR8Mz7fzQEj/BKIRIoiwZSvR5Ii6K9oPL3vo2mKnJi3Z3/DIdnbJTDs2jkE6jtcQ6LfS4su0IiH3yRQm9qY6k6TFrY21J9TLJ57F48SggEC1Fj4ah57I/RK/i0rZbmgv1hejYvBskUymt9EwnWn8+zm3/23GWgwxOsGdWAF3svZZcL0pQLtlGIZ/dKDcfHan0UtmQBaqIOp4PjhTmfmpPOtzhFynxl3a5d/QxZYBvwh8DH4NlycEDTE+5qqaZsuCHONLrGrmStiVD3+Is2NrqTkhVLegm3nkBckC6x/hV3HDsRzO44GcsdzSmt4vCYjDKhKZxipv9XJVMsoL++/z+EKaeSixY57KmIZ3NJQNbF7LjczMZl8rRNXA8XSh0PrDIHzyIz5AzTOr96qA2U9Wg3t+pcwW6OWdVmZ11l8/oVcn65oy6oSGXT8KKoR6l51aQSKCb+JAQcdUf8FcTtfgpUDfFfFx8qUczsbKG3gZkBxpqvBzeKc10+hvSnU8IdwZDoStb/SFHr13rDFP733wSSbp8HOFR+j3Kq04S+YUTLVAAlYaRPMQsr3z3xl3nRGNlDHIfEK2OoF3Wbvkfdwe89FKqyiBk2fGvWWExp8/wVZD0aM28IDUQvylnuJTxygVSKpVNeX86SwmU1VN3Zt+/UTZWXYwIFOwt7ktmyVR1YCuiFXBYmieUH796LiHnYEBQ0PMmfJKLjK6RQXYg3Gkk4A0Mn/V1svYYsCtjDYeliuPB42/Cj2DONfrwSsRhPKzuXrdYl8tgOvpEJphoE+sAOlTiblSekgwNA+RHKK/ecd8A4vJuNbOXEA0l7ttF6Rr/QxO0SSFzt8SzIKMpdUtd1Wt4sVZ59/PUAxLqgloLzVrkziSC4ttsmPFqqDO90yFTE8Mktv4JSW7BEOrqVIiYal9GSV5kpmCBD5J9lruJuudnSOxbQxS8QDu4xC+ShgJ1TNddrPCXIRRu079i33tZIkLePrTNFb37Y/v1ZHJfZrLClpLPxZl1Y87BZIBgJtxl1mfeYXQK0cEoC8RtzvdCbFTAICPNQpRpwHUs1XQc5vWGjTMFApRussqoij63zu8eifgTQwHjBH1rNewp5IFN6CCCye6/2ubRaoP1tvKjDDpC7niADaX59OvIGE/aJxv++i7bst5y84d6Tf+PV8HG8GaGfsf+nISi4zpsChi3CXF1XeonSqD0UplJg3OZ1VA1HtUJFmQINKXtvjyDLKSgI1KNvHwKMziGhOGKdA9U1xl8nymHNyJUZ4xuVNOeJxRqz3E0U2OjoJBOC84r5TlaKAwn9Kn8UnZkwbDGQujx0W70fWNJRnrWvSURDOMP0bbH/9L3UmK1+AJv/8VUbCKDuaNx1ZIjW+8jej5WBboeISB6f4s0EidwK6K6OteWYdZ8f8JGdrFOLzg+wOuMifUN7DtaJ1AG/ttArjgSqdY9G3fAnRION7PJ3UmJvlaANdf2lP0rYqyfNApGDAOM2TUqJ7gZtGfPd6EdymuuwbCM7E8TdWl/C7t0BvvAmIA7yaqIsOHXfAKTU8RM4k1l+EOp+SW0Fu/asbv9bMxWxOFPeaytFB4u7HZu5V6+NnTer3IyZG+2srOXwdhcov8kwhZH2kr4K1LRQwTExUrfM4CO+1I+LYPrXd1FyGt0oiAJ528IkqKD442d5aCE+ouKMa/QK/UIDsgcfBGbFXIKCJblu6cg9dWcnm0CXfthqxDpyGJZYzN9P8ms6MxRu9YUQzHnyH4iEyopVaM7RxTeRm/0qVshLtsoT4vsMShJrQVoDemd37acnw7HFoZCh5twh/7C8KiqrQBi/iM6mT/AfxJtXVS7cYrsCmTP/9ImOoks/PEZ0+N74s3uBbG2t2X4gMpk8mcM/EUBee6jb01jA9qjLnfgXXtEA94JisKGlaUmuJiiRTpHhHapgaP8ps1xQtmgwCxySvzI/5AIvWvKRew+GgevXBtdJG5NYSIWHmUMaRSlYxQNSdMKe3gc6ZfE4y9rv8bMGKuQE0S1Sy6FyisdyNYogf76NbnbdgSXzJgktu8c3w1xi+G36HkaxUJ8vrGdaJI9+Q1OdelWoiN74jbauj2irjr/X9SEf1QdBAe7tXJNb0z4D2QjykvA5jmscHcJlNSiPtN38+acqOXSdJqGDHfR2qiUsvGx1znrEtZ4ReCoK9KbDbYYTIKwC+JxvJqs7E6Ch2KxDWiF6A4ZueZVByRgxO3RcWGSyothquxWpMPgDZhAx27r7nxfoN7fgXYXeKg3VFlMM3J2su9hSoQpU9Y1nElVKE4FXcgpUtVtAW1UWocaWIQh0DMNRlYBfl2r+Vhmv0K3nrdzj18KBKbaUBYKYNEXE1suc+ZagUOCFfoQGXtFn+nYabAyUqeTMb9KvFD29qD3RFbDgv+Tjda66rQeRwSdW70nGb0/JTHHdwbAvJ56luXFgWem+3kjTlXiDMzXFQvTYM5vD7BFHmpzswgRHHjX3oHzB6MpVTVYjQqZ19AxeWzRszS9hGgQF3HW24ipk1EqMg51AWfjszKALdjjZP0VLrxY6aqACODq7KwX4O0dRzt+g51cS1AWpz97SC4KRrHK5IQdRcVNaW4IA4EsQT1ibOtc+nsJ6ahxst1X/UypyXK0h30h9hVkyHAbZQV/Vi9CXjrBnmiko8ml+twzlJfKh2I/xClttfvFv62fzJ7VHmHJwU7vAl+AohsoongHtmWNSRrtdETDZuR6zXGjUrBkO34RkIHnUKxo9RededMlF/Kjs0aZnbv3hSZeGMFRnpYXyng2eNqC3p1XEFuQrVdTK49/2Rz2UiH1VcsLJ0iwhyE3OWWI73Z5kRxBs39mkl1iVAKg0VIVrKAINWIZO2RzzQdHS0iTAGq5NxkvaNhjIJfjihyEoyn8xWdgr7ZJ1Ltm1BHtKyrJswqG/5ycfbEA2J8K25rERdTlO1wjMO2VAGWQeVHKhhuhiGZ+BnP7nGWrQ7u44T49GhLgO1Ff20a8hLl+gdYuHWsDAmVTVnHtx4IFKPoALpSNTBnU4mdH73en4YBj+WIQVV0DlMv4DGyzNQAAADARAACf8mh1b+SSJhABOzhEeFyyW2dgb4obZhgBDq0fyKib6fHNTxInfhlCVOhWALo6WYxQ1OjQhACytT+1R85k824LvCQsKaxSAMcmOL0aJSHyuwmYCQUj7PDGSSnbc428E1BlX7IA03sl588p5k7Faj+gVRAAlNeGdiimh5HLXEMxTRQPN4lERjN8QEs2yaVxvd3WPr6C1GKOobKrAeWw2BSp4sW2EpBwpZzDhDaDlRvgfCxkuQrSAndSNUJ+JZPFm4tH8DCYNn8umJXmX6qB6amXdmRQT76ZSk81k4u52ijhrlFf8WgzfXv7GUT87nPokHhCWp1D446VMAu1ZQTdmfex5C4xEPh5tYhW1q/OQih5+LwwtyGJT/fJ+OKSpKD8wlNPP4dIDl1QOhCnvz1OB5wbXWrKczyMVlsmgv5UJEpVS/FAd3LVDZUfBL2IC9ZQQBzkkV58dwn4TQvti5vYJ/lwx9IXCTWE2Ej4W3+1lDpjoVhZmrCL0kS45tYlHjpzyWQfhwIvIvXC31LHYVLGDXYjM727bll7b4p1VAw2mXCH9x4dIrT0vLevTD95GMU+6WpHw+CXrtg0HUURj/pzSGZyouO2hRhJPdxbywZWVgVbiSXQRZF0vEag4P8ZzTCTXY4AleMQ3PTWnJ0pYn3cWYb/aro/22EJnegKtcViRBdal0TL8admv+y/Wei6wwJiGEJAc2cP9IXmlZq3NUNzLx4m5mqAdXcWcNXDtjxg1Wk0E7fn5UitoAk1Bq/voh/57MsUqkyhfyG+gDJFA42RPm4PoUG5XymGMrJ38LaSlvDGyHqVI83zUzhbKS8ISaR43dHgUbEO8NmYA+p8pYSVsLsbMcCcQn8V7FWnzqg8dH4J64b9jO0vMB8WSp+HXK7eleRGT4qTxZMkYhbMU/ZjFOC4ImuczGuHoUzBwO/RQLaKwzp2SWh3EdwuiwxLs1zNRaS8JrIQ9Ub+NwCxQkG7mxDehO19JCMqVwHqfTXHjWzzoq/UT6vmnUXa/B8YicmkV6ejbYy6WGs/5DFe9gMaNMndLLotC8CciUUXK8x89K7tnuYIlmxNn23+bdgR/uvOC7V86aPCaV57IBg3YGyQvLLIL6vSI/NHCyCqb/7Ew+WSwgQh4odV2Q6bHgTKjokCc4N2VKFjwja8+LEWDgK7A+bogEh4iyxhpFxSwSN5dkbPqmSE4G0UX7VmcPrCDis7nd2pbI91/qgRZc38vuwZFD0XwZbUgcF3uR/DsSoehvMgNoZ7TUyDlAUeFskBzfvOX8pIW4s0d8Psmx4hgyfSal/Dqjea33giLDDKKVcEhLiRfmZakR94Db/el65tn0gsuPAaXPIVx8IISq66X+v1RzP38f4nJXdKi1Ss47oI9fd7q3aOcSPSFP9zPP1TbrytWkW5bI3/MBj33xKgvKqC6fx02oG42VW4tNr+Abe9iAMWnHeOhd2XAkx1WE9oVdBdpuZ+zZcWnj9/x3kakCF8dffjrJ6AlNoAxus1vE7qJ0no1GkpCNc0SF7CA4dh9SP9rIGe1myypUkSeHh5BCGv7A/usdbg0zBXgpJ606sVG1XEpnwQuOResE1kOnFFMMNZNlZU9e37R1lFPQy6aOgjVZL/FlpLBEBX5PKBIP0wgsk6ob+6wrwf7L6hzsMDZJYWUuraQLNhiVfigWUP9xd5qSj5xUz2ukPWB+weO6LzcMsjWaf6bGPvBVHdQZx3A8WvdoIKQsoQvuicspCiHZtxoLAi6HcoehiEx/drEpY7zMXba3gmyamcK/aiLAcL2X9JwkIaQyoj0mGc1lJW8l+Rky23TbCayPQoMowVpnEmkrU3/pn0HfMB72wbmM4ubyIrqht9nX6PPrt6FFCNIO1M04cqVrYVbToG/eJonrhgjy9QeuGnXoyg6AuAGeLqm18U7NXZHRGcJ41R68rwn/s1xnEFmhKRXkqh3zyE3fIjnmWyIYRZ4qsJ47mPWaN4vjykzO04ytxkE/4AIwfbUc3n7pKLYxTu/psCJCHAG4kAhCTlBMzMnr+4fCbxThUhQQ4C/28K+MPrAgb/tymR9TnZZvM9lhNfXEkEDSzfSWhf29emSb4ml1F/7DkqJ/jAz0V+Pa43VQpUwL5p40P58FE/La/3HHTmaqWc8xElIAciBel8ZUbe+X1aTrTroT1vbIM/mDxiQd5eKzkA75Obsfbv0bDl9ojbNIPAgFlQOjQcw9n/X9rNYqT7vJiQrh5rFRRaN+Z4SoxixHL85KOKqhwQC5cFYQ319o+GZp5qrQ6DAT4eg4dB76k99qcHo64p8MWKVwGdT5ZulsGVVZfc8RJ8lY3+gAaHDF5pLn9tK3sR4J39t1LlCzs9oevwyBP1glxDLLN1c6JuraqSOXI7orQhWIphKlWd2/ddvK6CE0M4mm6oqnS2QsYLHlDkdQybAUB1blX0oIaaifHqssMHT3pQiVRmqObhWScL/XR/QIJnfsb/RG/lqwS5w3tMBkMFknpygeg7v7Eq8EkbtRRTCo7ad29E9VxLRCtgjlebzHICOKBjemJNDJkjWQgztdOJdUAJIbN/Z1nODbCNoW7H3YgXJRDf+xTJblM0xJrFfStVcZiT9tGp5O1IVJmteK1ii+njL0Q0I0ZYQ1+lfJsUq5NQAb+Jso6eHlT62MnurnHa/lVrYQ0s++1COAQRsdItRUwALKANM/0USGUSngZdB5rYgpJQp7pQPTCFf+BIZZ7xGElYbbBuhcn81G7TMRooFLHY3aRdUP5B2Ick+oqqQ1IkiE6pzW/h/Su7fYzTAbZ7aqo+yvwZulDFx2xKhW/VcP0fA1nFR+MosyxXBZowe4tqm2Gpl50h12HTxS8QgvhteLEn68UPe5nM7Cjxaoi4FBmKeR7yker8/8LvnMarrkj/m5HTgnl0Kafdyp/6vuIyfRNmkWxaHhyC4ot/2XEsCEjKTz1ZJyHMJeQKaF5zEcKuv3BW1xDHK99Cg4GqlIX99UdTUyQaJbb0V++P03gtW2PfIDVsKLlvCel/5812CC2Dwed2ZocoKqM+pS2/hKByQlR09pDeR5ab8qsah6aVdz4UthQsSF4cGQN6Rft6XweoAeehgYYxx2yjSSC0tx61phTBTQkgQsrb7Fy2x2BrSr4WYvyAAsMcjNtpPrloL9SVzA8YAllUzzDOtvPwJgeqzg+45kuaftRIXloKXDyF2V7xlUUZ9dh9bx5oRzYDtd45H6hLphEEq72eu4D2T+Mmk3nqlHH282t6eKLlVh8aXlkqo/DVQ64n29pizBNFFyA0+JwNwwknFixxc/T+oye+d8YqNUyMcGGvOFnKyq0deTBAj5oSeD1XNm1UrKP3PoLi95RSR6Ehp7aJI28MKRcg/ifkotuD2FQwmvln98T/6qtiPdd85mxcnhwcCufW1zCvBHaaMfLFDSTUE8l4+jfGaSdZKtKiP6mwWZ0iyjDxhT4ODxrdtAKruQzwe1e68WqRf+QmgTjYMulxbde53uXTFUXCYRNf36NLYceNgKvHaqqeAwSVLZ8LY7dzGBwhPKdAeFwJ45VEatZPMi78eOiLYca1NtW515D52b1vkGjtp8/w/bbplznLfnjbmZb6ugpmj9AS2I1gox77MmpIGku4fOYmUdDl5rzeVezz5pyzeeCAsHNjas5eHTeTS9FqiB5cjKi3ixQ0kMvwksyPFnOA3wOUIPSWrpR7ioaI/vYVXrzSVbvnmjc6How+CqDt0AUPqJiDSB5wgOdWTrJFXe4dmhXjL+WCj6JTVCfDpoIYMZhIm1AD1LUpl5h+rOjy1ZQH8RaTECeSb4+tpwmUH/8dLXtCxzT1yoQkEjSWWs5ZlQMqxmDAOTJlJdK28/XlvqlRww9EMFe3jRGLCtWv7C/VqXZ9/Q4elDJ+jhD/P1YMhW5EuaWY0ymGWS9LZzM1Ye0l0oQJ+p1ugwUfjchXyXGg9nNKRyLW7jbTwkRdA2kv4rlHWmT0RM29OI6R0TbCgqzgOCoez/3h/0mkGZEkGgupRHFqzIVONPW9ke25mO3P5tn1JN/Pq5xMJ4s4twdMTbA9UO559KIz/1BxQ1CwiGoTNM4TiP/y4QJE86di4wFWO1BpIXeXxtEXYTuWKUxH2IALbykCs/+ktgodxbga0ylmh21mtzQYz2GaZyWZJwZWRmd7mPHIa7d18sCxNIiJ/Hv1YcNJmdYtwpjBpQCRwakyUfZj7QCBNvEPviWAlNYCqtFNs6tGFf5ErPTwnR+qV9gYz8w88VCvf7UZyXcFi8iF+0O1xBn0WCEW4CCIZiyCymcY/MvIZg0+kW0IiupoNszZeh/sz80n+/vDhWKgpEhziTBYrsPLnj42zGFxgAP5OW8/eTbluqF/Jxa/Bl89g88wA5BtmhAEIZQHBLL9CgyE6A8HgXcb8LT2FOGHvZnFI+r0JPTswvsJm1LUqmp+WiRrbSorjkScMNGGy8BNKEXcGyZIoXHFGkv4qOwoAZvPkhpQ66njnErlqtFF5K8hjQco1rFMlwcSNlU7i5bMO3oCurMftPaHW3zNOETiCNH+ImWhibN6dS5uehXpmrlH+H5we9SUeIprxB9Xcvioyluf9+LB6wD9JTkixkNqgDQWX5BxIIJ/5ALRl4zSuWzBjAx4SefGJSsZO8htBKJ3futcIQL7K9HuDTV3vqqgexTobxBRW3tigGTgQvG90vu94TW4uHkG/QJ1qjjl7Sh6fr+KvtEnSSDM7dlTZwLrzBODggMq5Uw2J3iHxF4EF55AgzgYGLtXXmgFpk8lFwahGD3cztMgifH9kqsx8yUOR5A1LGjMGDFrbbGP7B34bXMmNcK8vTfwqBMy3U0mDymYnXYcJBvGAZJ7Fbt/8/0in2xKUhvvqsOgkNoORCM8idGvekCwnPstUDhcCXnMnZMQkzTsIHnzkEdPUuenQ5qWtBuj9JU7sEPzg0A1HM/3jdnRjS0VYGDKF3BzUMzao1ZtswYFCvRfUAxQY8JVzObPwr08TeT1ieNvZF3PIvPDQwLhoXeizQb53S1bai25NQ+gVdzOE3YzbMItKCXBQu0kD43gr3CzD20uJ3sg64wb8b0MMDXgjOFBQTzZQG4mmkucEInnlEyRgtGmG4DPn7AaWTHQvDGmwJL9yb+jpcDBvHm/zGkrJ8LC/sBdfmPsDssvbXF52QtY1SoaRAYEfzxlPMt5DZKV6UBBRafZkkwzTsWTQE9oAJ0aW7dx0BRhtGSqP/CEUSmbSdODCk35faPkSWBhRYeWK87WUEwLS3U6LPGn5dbFmEAyHfYxKrlVqlwsNTgUn519nDayx6n0N1mSU89RIdH0QiDTdy0Jt8T4hLc+KcpO0Xw/T89o9ed/npZEaq+5PTNRSFbCD7rNUux1Hz9SCvTzGrQEe49XcNLrv9iP6b7IawM2l4rJzEiMWiT+jWGhHTidaDwLz0cEuLKPVS5MRAUSgr2hfXa/bR+XCkol7v91Q/OrDh6ysKEyCnOhJaIPRakaHvdCM8NbBSBExGG53EI8qzKETkEyMO4HmoLtcVEIcBL1SJ3L9A/Rtccy2fTL0XBgCFx08a/HbrnZccV55uyX3ABrdWtsRiYMzvg48JiZljAWr6ahs3Pw40YouBr1YCH4mNIImJN3KBAcE66GXYaFgRjWYcK+tOTsbQYdKiAzaG4FXSTJi7X6n4JTtgdDL5dTXS8oduuUYP7ZsGC6NXpx3LshAQiOIYoSq1ng6DXZNCrgWv4eME0OHJSgCduAVr9jaGKRhmUf3AVh45f1JX2JI0vEmMAy0y3QFbCyWitrmsULycl2MHN+R345UzL/Uy5qXy7nOO5R/x+74b/VzloS2CHhZcrMX1h4FX6UGX2XGErUcmSgr99IVH3iG8QmTSLspDYAAACoEQAAtTx7oDWHdAzMMOqyZduRWODYiPJweBlYwvULMfXRSH3gdvwzuJ7gzKOgf/bmgkpbJmPQI7M0TDZ4VoPfnINIHmbqnQ8fJtHa838FnpV6hcPHi2zY3oD2MVHQxqO3xSu20wy7srHOSnNIWrC1ELopl5vzm9f6nw9ozFN5xrGqZb8bVouminQgLrgaTTm8sSA2Gh4C52xkcLBBHOIlkMvVnY+S4EsBaaJ6SXQWtX6/AS7luQDzCKGZQUOE74oVy5myNTaNtS6yth7CiCRIRxMSsK+QZoYbrPjrqc9QuHdApia5Uk9vF2r/XaxZmWSq9NiD6Xhg0D1WJLyz6IUVnTdax56au7N6x4m+x0w8PUlZXl+3SZrLKuwdWTYh5bDJuN9/ojYKC6vh4l/EK1mjllnjN8li1ML0Y0iJK5B/xLRrS6gKj+JSAOvYDZ9+G+JpwPS5iOJEevUkeYOy94h/8Pi6HzXEtrFVav8xnpolbDlfO5thhxDF6krtHvxPS8zwJ1M+LKSJzYS/MxRyThM54E1D/2C8QL0I1e7m6q95vgF9Bviz/2F7mKpKFGRAhPDyAmOzUHI7JqrelnwCppGdOkTytgvjD/glE03v2t29VecLy0w2PL4eg4YkE0K/1kDJTvxbas3kPkfQEddENTw9y1W7LBYMwEb8uJf4bFWpKMuf9JjEqpqEU7w4JV/B9Pl+70RJgxT4A7Pc5k2vRLY49WDbdHF9rrfqTW8RuJ2mlynFHoqqkaF/Edn62tZC45FY4UyKGyqngQX1G7d+qQvk0Sg6ind6XvdkLwgEgP9DNsAkjernDKmBVMvl8g5cjX7exvzqQCcvfOEbPBM8HBx9wB/8FUdQ9LGrmbb9fwjx2w2HRPaXTd80lnOs/+zOBt1jpKdxuYMrf56Q1Y6pMhmEaYPZmTSd1QcaCjLbMBttGTKq8JgvyPPDCUXfNbKhykH7bdJgqj/nbGYYbrDc2w5NDFZdGjrtWuhIel6W6V1jMBX33LLWEZLrff/LCHoyifayTRgZusr6Egf6TDY0eY2w9HXqtMXAOMSNQkkQav5KL6WG1MUI6OQholVhhq9HcCaMbxnRIsSwzIik8mTp3mHYmkZslBA+SuI4cQuBAhaEESiEH2ZygVIhpYWmf8GPxqUzn1JL11ybxhwwglYudBHbx6UN1CYXrhqbF+FHxHM+zwZIMPU50WS1WgttQfeUvvg5bsVB4WuCxdo8oIocHwhq5Yh8DP3sdswBCWwOrsDYOiiUTiyK1X9T0qpZ+hl02RcjtGPX/9S0RMvUUgf/CVS68ejI2SceilWPnjxW5Mrp0B3V+oeTLpGSsMYDtOXojsbPmN7XURf6NeuB8znBeG9BiRD+Z8mdWBRqHQHFyiicTsMAmcVTYlDwcmsQcsnsvdiiu6Yhrs5h4eWgkrmw+24gvbCzmccU9Bs5rrjH0DbWVDWbMJiZZNig9xDzsEwrdvnrwWTAlR6G8hP1IBuvg1WcOP3fc6efViQLVsL6mjOFySnZIkc0jOwOdBoQ25RHhlHX1IwSOvQYbixcKCnc4A/wvAyjp4TMbBjg5KdCBj2pcz3PlM6NxZcE8qrMwHWPrsEIyEw+X6btRqJ6+nmx70xbklx4juT665WCZnGRJdh1lBYtIAu3R7/8ADgJzat/7Uld44UIjAyUM7DADAXMi7Kaq0/1xhifnBrm8i65oikxi9MQRQLAIH6HZxQFvfXuEEVt8vvonvc6GLU0j7wcP5TDTrF4whj4S/HfW5b91ga0ck2B+Wgk+d81W16WSoaYc4YMJb847j51+YJEyGl6PBCA5pkprQggiM2C2CHlqKlD34iUkyD5jAMBpXP2YpMYvJAOYxyusX0aClxuRNEV7qCUXmxs+L1dCVmm2M5dAeJa1p13DTHPf2j8u2GB2wZuXmFMQQHvBUAYb1BdEFsja3u2cmaKZ7QkFs3x+ej+UF5SBHkvuL46c4KoQ/zYeYvRT+xQYSdPM+im58oHwis0/UFqZix8e2yxX0/rhUheUMHFesdgEJT1fX42BCoTgWkR+pPqGFv84ycu0v5Vu3H7Hg3pAtbxOiB7j1yMb+FySI9d7w8+nzLGA3XEmmdSQzOzNNlf/hP5G5Rp6XG/3HxjQLbym6iSmszYlqid8wdtzNAo/m85hDky/IedGDMuRdnW8HqOi+oHcW4gfemHA9cQiwXJ3P9IbmMyxHQX/EUpGplI/0DoBR1oJ/KCFzsNWLxnWmvEFHH8uEoch1PD98s00ncvFQQyJw1U8C9Wok98/f5WzTxxycZVzj/bDWy7WYvtKDDpzLON48FEOpR2/cgnOqL3FVts7AcWOQtCyM+BsqOpWyD6eKeEb8H69lbmAInjlmKxOEEGHfdVJYWhnzl4sG7m8TnnAi0vXwbQ5FbwH3TxmsnmQL0hLHnhbVS6AP0GjTojkhLraVBm3+mLgqg74b+dD2qifEW+V+zMOHJg9ezr3NEBMI+czwrB0v0SAI0n+wPeATwgwenbQPk58pNMQdlQ3tk3Z3SeDfS8knHQMRpFE0+WaA6ZcUEG7eXqeC/hv5sx5kUoZp0ZDfSr1UDh6MDeKkjz+vwLEtRK4yNOhDoypM56T7G+v8lzxxkbdulMQHNdDWPiiWt1hGU6Wp8XcPtyQXoMRrwDd4RhffIt1tZlBnmbpH8DkT9S8e7JxFi075hUew47Tjx6F9xBIpNtijkjdkgz+u0j6roM8e/7T3aZutNX2r1pMWGf8rAYf5YbQMRtVx8pJBRmaRMEslnMdLA5zpbVhNckmx3o2492dy1LME2QczfXdrQ2ONs2nplAmYbXmlwMtS3ooTsXrSeJsQNRFtDny8KTvTnu2Bm91ePxka9MM2g4Wb69WoNxWhd7ifsyaX1L10ikpVjAPX/Mv9XXmkoRpRgvrppDgCg1TvnpPPnSrbTSULUJ+KZ/587PndSOpN7D8f5pp9XB0hgaxCxd+IhXeIekcSoEKeLo0wTmlckfXYfCh0SDUz7ABV9cyVbYAQVoqjgyo/laByO3oTHMF0CVvB2huSsZNc0NQHK0L9KjqXvGaw1idmwBbsuJ9mnXKp9GaOnoFWbogArZ4ZPJYd9QEEDf+RsNRo2oY4Et45Ojlz6R3JrVWa3oC/u49rH5tFLp6ihXmhmLvzgFwo7pDm3MaQReuwq+2QaA8SSXpmgew4b3auE2l+sfm+fT8Jfj1YfChfHMiFd1KN1YR0WkpWpU+wR+Mm7TaJ/CiG2s77LFmdinNipLvbsT+xajpdlRzNhF729bNqKpkStXMaAxJPbWJN2TzeFgDKw1/bLFNjXIjWcVBKWyh4tSNtz4s4rK5t6JZ96G0ntnNnsyjtty0I/KlfMvOnBgrhS/7/1Qe02isiNM1tQYCmV4OmzRaJEZwxY14LIEX4BdwKjcnJFRi8U1rJnWLXTMLgKscv1AFm/AVzHwY04Ylqxiegjbx4tyuAz7sviLIW6UshUS13/0A4I/1dI1GBLqDx0/3n8GQtFp9Ebcc8cZgM0YSWEppqGe7UlaYNfhBBS2e6hgeuxIIN+xs7jNEFuz+6nGNI9+hfHh5tJp2WKRKWKALDcqC8DWUWLIcMl1/yFdyLQKXZUoyGkMSXwFxsCli9DFrebtx7dIg77HmHAb4xRpwrrsPm1AYLbAF2vLmnzqyw39pPCA44OZkOGI0AlCKoE11fVPAROzmY8mZvZcBfD4tH3iIgFy61xK/86YllF3RkzeDmPHwUEjhwg2NmL2Z0X5Po5Y0jatK0gAGX7EBGA0hG7rQl7LQ3kDsGTmS691vm0XE/Q0vmp5owSYxjSTNrph3zcWnWW4BPyD6UGfcu50GW1W7DQ/5eEaYDNdHdoGyIYT1TnZMBu0gTArF38K3WC/nPynMvO/qWSl8Vs3bt2zxE3whoOhbgSGeyb0hOQhDrwE4UohLTiYm5Nw7AP5sh0t3d/QjyRrH+Mt0yxf260jHcaUlprJgWI1DnIUlBPpAqI+MojSt1q9b3BBkkgSJy//qHcnscpmPgwxAd+GZ+uDc22qmhWntbpA1y5JzC8v2jvryQSt/dYyDuPcLmjoPmdATZarVgt8/69meAOPtA2qtx7hgIQ8QKOMzuSzqAKv8/1w2ZtFwvZtrZpNnEJoGZ+2KzG9+jqItyJHvsLgK55DZtIaKnnuMpTLhUx8DfSFFdWFzJlmuRS3QKgbiugWvCYfoR6yc2hWxLclHoAgdYTyLvhpCS2s8IQafS1AgLjPU9JI7Mv2Qrzx7qUB9jWbmFwxMiT84kbnuy20um3aoavsk3uFQLT57ziTcI7w9inuml/39hcHMhJL3FiRVNF5lRjM6xs7nSSZG11lbn3IL5+u7jROPFnu1ewNPcr1jj2kn69TmP4VGMmvbCy6j+kSuENXob6ruyB+btui/oruRYjcp54KUifPBirHVXVCWGDvetTDoQx0FZaO0uAMLZSKFu35QT/H5oqfCtZ2Wfb7oD8cJUmqexdFRdaA68KO0v8yeHmPld7F4moDneyu9O4hGL3lUsvMs1A8VI3g/WE0gqKz8sqf+xkfZ5r0Qu4E603frU2/nzbXhUDDv0mptuiotAmIDv/HCOLIKWUJupeIJEtUyaNhHYv1ry9wC02ES4L3W3UO3bdr+M0yN0doZYbppA22ApIHa98RO8AR4qoB27Tt+wNnqmV51rDb22L1VNMk+AfnK/K1IVw7724Nr89Kl0u8Vt6vP3D6q8GFcvDjnmGeghWqWNW60Zaae8rkqN0Z+G1xsvYW8DoWHBYhBzPgrYYxLn5Hk5e0kYeOhQeBb65EPTjrUHsbuoUtRb0+IYTqJh5qYAaVnVKzxDlrs5aX7yzk4qjPWHpJJcEzozRMb3VxfuNNXiQzHzmN5CoWRFS6N8gmARbY+EvTbSvTFxq01WIfrBQzUACJRWpp63oyAQRe73Y6s4ZAGXs5+J/uOuX1/PT6KJCbVfTxUGW/qPXx8ZuufRCOyuUM77qet9pMksrYJk8f9/4fPDgmB3Msh1yF1/F2Btl0y2iIhvesCa/W9p0YL98mckQ7Xp40qPAwAHPTc4zHRsQzY3UsjNB+P1jl3oewkpohw5GRT1ha9H/GIQvbP2EikZEUir0R80AURdUwHq50Ntn2qzWumZPv0E34wwDxfbb2xyszMTERHsIPn/nqJjbxy85LyGu0IHHzsqVKC5Wnb/UvYUtZL672sTP4obZZgl4bPzNbWbFSUvZOi/+JiuUua86RF4dB5FvxyAjyaMJI8NfSGzFXZADs9zABOeqD96UXLxh7U2SwZtkJ2+3KtiF9L12reY1+JmZ3IKjXnxuypQUqUKB3/nKa8yvVG3m4BEWslDn1i5WhH5my5w88fPCzorhBEJJ8/pe7nKAY1V+sLJZksKzz3Z6SC8w0O3oLcu36RTBE+QTBKJXUQRzjY80tsbHfI1HsjqPoQVRvQY9xp5atCF69YgXWV5/q4HmQIeDxKGWYpwzSd5YDPbONcYvHK2pLJERXSE0RG6j4rTx0VTQKuW0PqXOgyxINmQqQ3Z1sG1aUJbb6AZQhE/omNAoiyFSf/b2UlS9tODnNGF1BrTd1gTu+25+iyGEWA6AAZudhamGmTkYChNGfKg3efH0Icy00nS4RQBHQf7m0QTsNarmLRnunoOlISx+z1VH70fS4FzbafcmLq5DNuzmWojbIi931J3GzN4APqbnmiFFdumVAxjnwiSuC88ZN0KxqOC/lcZ+Sd9kcIXz4Hg7Uo4H0gQ8vZllnOjR6tahZON9RA6EsaA6IOC2LEcEOglvLecZyRqLqXl6PTCd4KceI4H7WbVjtQfKsrfuMJ5IjHP7bjcXkiJPGs04jeaebaAloQ7kF4XriRN1jsg2f9B5Ng18R6Fqw0MVqRPJr3+pgzQGIpKgooo4FQBlBRruki/0X2CgDpil7Ee/wBbteSnt0y7ARI7gwcFKxrJgvquVsg3/e+O7ZtQ37QD2JDH0YOnr7Npf6hb1yXVGHt/qBoXdxiIO0V0Pjzs8mPPSWNJkmMwAvTR48L9XU4XyuUeRcaCU3AAAAsBEAAMfgJIjwGm5uUVfEtKpXbPjtMyPSiipGa83f4IOp6eFGiG6qqggI/HQUPKaohfnOV+mdk0FLx/i8OMiF9+GUF6p9v+ldX5xn5jartol6HOKupxrq+cdpIfcj/CHb5dt2Lg0OFSuSch9PxyXRuofE8ZBIWCVKyRNXDYlJOuz7ATNHJQvo4+rWJujPvr5Ons6so2GjhjRM5mDhC5kieEu1EM5kTRuw6va9cKYFDO4ayheVksf+SUL+gvLnidPTYJgCRxkFyM1AhbHRPhkUhHlr7Ie0u5HAPMEzlyjnz7cGfthKF6hW3OnSG9jIGkoE9kgFzEB+7xGST7TRzNKgoNIigqnhM75gyn7sEjzxrLrk+MzjmuzZtkrsiCCFBIj9yH4K8dDSFUScGmtfrO6CvZkbe7yA5BQkSDsT5aTkjSxhDqz98tYiWeZnTW04vCuH9JS8Jg737syBYly0fp1n2DNAuAtapLdAWVfRtu+b8LUlu47WHk32L/u3/g9Pc9M64P2WcGfoCBz5ajHOjE9IGr1VCln3d3cdPHdnHsNRjo+1W3Gjyrwv/2uGQ5TQyg+7zvtzdVkxm2KMzooqiQP+4TeN9IKkbWFEfmv1upCMrh8mP7xIWWgGIO1JnMDIMhkvEb+9Cm4EWKq8rlise1CsWFXGP2VU5Vz9ZIZdtgoQ8s4jFzHXOrB/vGqqjFyo45UKQmEKqd5znc/SGSp2pBOyIko7aeledGJqqUe9H6BUILdIvUoYXj1K9VH3aE0wRaYSq/eCjVcOK0AnHTsdAzsC8KIBAH33oVj5aqchynzwt6iKz1Y1oYFNi3f+s11d0GnsjgYV5lYQPEn+JZ4GErdSpCCh5F20ptv0WCziY1Kss+MYLATVV7bie/rHz6KW735k37VLaWhs2Fq7Yd8PO6rG9Qjpm4OuIesbNJa0nquazz7wYf5UuAwnNFOHkgqpNYBlBKSgVDmkC9nO0+gK0UNQ343Tc+rmDERN685brkBeckm5MrbZqhhqCP4AKhS2kWG5iJ00hDOMH/+eBfmGnYvpaWBrvKnp8hNbhTt8XeWQzGasggsRc4pIykW0buu0KCsYGSE9vHi5WXqN0IbbkCSHOMzmRFSAICNlt/zi/DSWuIE48YUt4YQ6KvdB7OUXBrs7y5hKyl/phTm/Mf8apj+reBlolyxS+6kC8Q+W/YZlJL9LZOBvhFm0HI3yMx/lmhanM0HS5kmrw9kz7y1+AMi4jOiq0hO78cWz7fv4AEY6BeZoMNALuQxlFeARu7HYaLU9V6WRx9GlufiNCCVYsuJhwMeGLvjVSGpElLxCJbvproLv9oQ6Q/QL7nQrgsLIvvWxMUho9H2R7z0qV+U7hWoGkqaAAIzDdPz+o5i1uCbvMFLPtUHQGoBICbJgDXI3hL4Liw8Y13WkAk6Bc6ZS2zf9W9zSnb2n85lnsW3jMmh9jeXuirywDeE9R9FVqNky4ZanNk9J72R30EXT1tNvroOo/1LgIBbhXPeDVYCzOpObCPbYc4UjmLtwhp9nYwV2Sc+XlHZbNKNdsefPazgheFDF1wJiA3833ItiEP8JyoyovdPgal1ubqJz30sJxqbf5sJ4T/SB+vymmhNBgQXQbGiOCxPb0gpYBAgqXledVvODATfEFh12/OPfhtnKaDxQgidh3N2xa2B4Rny9tR79sWmtBC6I4UZSw9rkE122qs+VDsPNYFyrGpsiBHFlbJzX3hbY/cYiWCA4xxMT+rSu8DdgfWHY2pXtJblG789HdmHJRmGrct93OEhlx8LwwRbesJd8V91BrW8eTg6s/PyjuQoG2OiTVvvHVXyj75nZAwiZGrCu2h54X1uVDdRJ+g3h9/u9gjtSvS2xOtcb89T1rFAp17ZPZooFKjepd4Nic5j9mJIraLOnDYcbxRUNB2f0JW1v9GZJG5huZZcEVc4s+dY8chXVgAe0gPnLPbceKiDwGNU1Bn4o5jp1Yf2S9e2LrskKp5xADoo33KsBOGV+t6KVKQSB9lEH0Bl+uuSP6J+AxFm+Z7o3UwdqqDqhvE3vTlvSffVSSbicoSKikUDkmtveUeV7XKcfYtthaUtbPcs2Sps0tP1s5rBLKPen6M8MsNL7w1tfUwbTU3MBC+tmYVa2bB0AD3mXuNkyz5RGMbFnNMBQn7n1fLwd4HbWLjazbLdIU8uEw5/NXqaldgu8r1+dLiIAy6WAh2CuGAzgx0VcfP+kCFJI1KR5gkHcJBGVCfkBfmSZnWlL68OXQEAAjekkso5bW9ilu6snvWV4PtoHgPyWlI8g9AVndd4JLzRP2yBu5ZaX3Xy39jU2aLxg+w4oA2/Q6OFNU3QcFmeamy8gV6jzEFNp+fDQbrEKZJ8IvKhgC0gIZ7VPIsi358svyu02YfAOY2E2LC5H0rwQEUqGDivrOxQCu5gACRbSOjrnWf3lzFPlBbwr3PhgjY8rlSbxOJxEcheiEbYSSCRSYMqtqo+wZzOZtsZCdmJjWH1aCQCqoglj/6acxBi6NFy3iqx4I+GyCEZzQxIrxlSEUEd3LEOhX7NNZf7zdyRfb2MyQNxcHnZxDEf2fUYKUVrzQ1A6G5wWfkYtm40zavo966r++cK3nZXsVDwcIhaznqREUX2fh+ACB8vD0NV8XZQZ7zXlvXzLVKhR7zfhHSEOI6D/FqnEokzpWA8hD8KmCjYPTB+w7AfAX0WDDM4cFiwL1y5YT+QLj+Dyjg7lRr9fHGkECiqmcYi/I0OyxmWzB88rgQj3mdWtAZudIFqz7JDpB/MBwejum8uciRoKd7lpyjYTukCilcZo7Z71hdtc52ju0Cu+fifJdjtqErtrxrYYCOj6X+z2ykCAyd3Si6QH3ysT8VspCT2zroEeFiXKrC52hHvAo2nu6HHpPWeHTwGQkty/XX6DTKozvhXgyAswZbdX/qVj3d6/CGwAQNFgfZR32lQqVhELFget3KGLKurgJpyW+KEjj5v5MsqxOFUoAT4mOFq0GL96yFWnnH4pX3MCkKyy1RntypEhesezU66wAw5pPtsODKFmVIaT4nutLW/1KEuFk0qhAMQaYIBRBxsFTXf4nTUMvaaamykmhFeQ3yr1gc0Mn53KJtMpWEF+rGvCi8cwM/FwmMuWAXtXQgaHcguFgKjwHQjweTbIzkLeFe6BwTCcH7Z3zpXI50RB2U1hVMOGQproVz4mEoqmVTAb9gdlYZMzAeTTBC6+NmnONNsr4/IkAoi94iywDnb7N3HVM/e3B0gsZ1EFcKZhz0lrCZM1VrIwm6rCG9ZQwIMy2/lluCDhVeTMAMY4XSADZd9Tm/XalMTiuNIzTQndwPLF/NVInmxFUU39PeXZEXFlitWYFxeYnCpT1zP5GLTBfl40bFkJ49dNJAGdk20yskLsteonKFjZDhJSjStSSSlS1DQ41c7mll0ayW5IahT36nYu3VXK22X+eOT+PPvseKFNfPE5DUgA+ZGNXxRA5lEXD6zEG8lSez17oApWpIipSbyGOV4vq7OaFB+yVHGswypl+kkS5O4aIjglncJXxSlXZ7BsjOP/xd9cF6IZVle6e23kUdnmqi59mrIxcrQMRI1lpaDTQeNJ5O19enRnKHoNZzieCsUchIxzJakRvm3VcJwjmsBNDKAU33IHrwWrzPf2phHwUe8Z/4FigkWSDhO98FMDNCcK+oLwjwyIgPgp3ZdFFHIV/HBUaQgw6nyK7GhA6uKH6e35IadDOODgHGsMgkQk8IIoERyRcXQn9+Jaz7YvSa3GfhVwCu6eiff8VUwHa7XTCMEbqDiNcrY276EU1oRRzd/w7xNx1+CBntPAX5ciODZEnTLhqVcxDbba/5DdCxuBDAQjCfSgOcnpKI4CBcwsGc53jvUbCJiUmPefjqyG7KFCKMY1AzZn8wnKiuPum/ZdUd8GdGQyaRWoImkNjzD1k35ZiLhoEuHV96+8LQtf+mQG5QHbEUhaGL4xCXaUCS9R0VnyQBlpDXo03MThnHJCxVRqOw6BCNRTHUrHnf7Nb6n57IhoS3MQwTkOhJQQso+xomT6fwi33wHh4GOEQw/ocpGHdFoEHU0jw1KLLT6z028B0MfxNQPH/no9fdwmSgeiaEQLHTAivFtsuYkCimFtIK6oplLXT7m0Fz515M0hOnKPD98aNiyG3m5y3EzCEoQwqG4VMCOaLhRoWZfAauF6ZKxe7KvbYF//I8BCGItSuBwSBcXy+lKdSK/JGJs17J7veLuxwIIp/QeUOsfp3obj67X9s2EZ/5F18Vq1mftLfqr6utQZGY4jETq4obnIh4ys1ob8QPYUOMCGxWUiYoVi9YLwX+eoRb/AqBs3VKI1YUSZtiFuWxYdFmGFFQhlY/aRqxdkrKYTRZaGZXqPcCnCiDSTxmvcjRscD18xJ4jsuM9AotieaQ/fegubL1Yq7WqIcI+YMmf7/MjD2Kqtkz3P90uVkv39LYo54ruXHyN+grPeyE6XXy9k6qFN1ffvpE5tBjyIv/mKrafnFdfYyJdBjVfbnqWZJXJZOKcrUD0lLLxD9y7dBO1x5qOW7azDkYGUwAGtB1GFSM8mTKrEDXobpPUvz4cCGdOVHwAbZEgopS/3+j7IMl9768nINa7+6wIFBsLkeWNyzwWLN27FZD5BghG1yC7bek0dKvVxfJrpXkn+TI6/jAKy//1dP3eqq5smgPjrOHJxcy3Lta+k7N1BEKr13kl5u/LKmy8cOX/whhnkEg72LswmxNjmdGApL0tArt5lJA0ADeDblQNA/jYuBxEXjcwQxATEysT2e3tys5wma9FdEPH0Sg/yFKyn4Bf2CUw2kIlMdU3C34HHwZ5CI9AqW2f+rH1RRRra1b3DYnITkL0Ks2+N5JMYrLrfOksfNwl5bAR0YU3sRQwHV1gj5yPri2yB9n6zdqhRpFI8/VJCeYVq+BXDJzyuVhlkH6TXJiZaPD+qwJPqkf+TyqGqpHFMKz3I+5rgV1nV1JlTUpbU5Cf4PR38IexMAE+7GXbPoXXAEmVngC6sCk1cH8Q9C6Y+3rvz9MEDv4KIOzQfXFlCHXv0JZx0ifhMbzLes5CO03DbFlOBYwM73Ynk5sciOQgwrHx/7u4vixgXh68mWzScKmCF7G7vd5uS6JwsOgCGCicln5Mft5EhK2aPKeWYSr9+6HwoVtJGgrWg2kB34qIeWComilUolrTK4lYb+5qvIndl2on3QXdYEuTZ0I/W7uyZvwRqcTpm+aSJRihvYndbGQedw+cDVke0VmYPm/LDZ63lZsJb0FGO647KuEyRrkfn9dmtg4b2mTXo/5+LwpmLSS50InSMc8BV6MONZTtJXvkzNPNycsND3XL/9Xlaz9mGAHsGVpD4XYDvBaOWRCssaMuBe42LRpZAn4UIQUm3yEFKpPU7kP75DBGqz+ELWlyvy3vUs44uWo7QIAggKShV0m9f6RDP+z0EtR0LK/5qLHf1oYiJpJU4laZXqopYK5QZlBtkwVjpRntilO5mAIIt6hwxi/4CE69OViLQRxJAxR+qqy+kptssSFP3gKEcqn2YjpRbDBmheDiYspT6IMDzhWqp5vbzmO6VmQHz55tqV63Bewd4RQCMmb460gqTuGVFUS53+RT4LwN0cEXhDqdispb0wsEyz6YUuRwkCHnXA3y1D8ZtPRIbd1arRUDDiaj4D0SjB3m21bcMSFgBlgZH9p0NaPqlSJk0DqbV774Afb5D2nJKe5DtpDuDhSNHAKKafe2n7k/wVS+gERA3FnbmZ3xD/TAcoveRUn7YUrQx76199klRhjVFQc+eBzfGJ3PP9momrDgoSEtibuCfNqoSRQA5SASBMCK1F0UKjtybXKBkipdyrS97ZIIlSlQ60BncusVjTxnN7kIbh1aSkw7AuJtPJsnaTk7KzKK/h8fFSpprkJGWkFm4l4wG8TF+6Tlp0ARRk75M4OA9dDBDaA9t/DmKXZesAD5jQH7YBJiAZInwdgSxsWAK5xodIr/ltlbegcqxwOF8xoO0ao9upXQiI5dDy2mfhxD6fjWnGqGthkgNiEtABRl+lutSVo+SqChRiDw4AAAAsBEAAKoDPHoB8RqnJluh6NCnpl022+IutnCIyCAX6M55Da7/EyN4bOoF2XO+nkWSe57RMdhMvFCeLqe8jSoYnIMDfd7UWVbH44UhycZE3zTxBNbiFwxTzmhCB9O/EGF273Aib4zbxDYzEU6uaZcVWHOpsOKoeSH8cmU1D/PPLBe3b6U585eNB9H8a8S92N7WcWvGFJsi1FoJxQtB1jV+KJxnk6Hqdiyv/1IPelCByZ9tC5ByhPzHLpIK+Pl/3G5sEqwpXn04of+ar4Mg2SoM1Ovop89O4Z/OU+EhbkNgZGpppTTx/4BenmfrAH36MUy7z0ovO6el5mccpeUzdQZeaW3les4kjVCezwRDRvr1IXz79LuZ4bcPre2WJYf+cruPdmEGsiDh9lP5raTziyz3mmaWkBV8VMCEthrSnVxfQE0bCMCNICaVLVjde49nJ1Y0gYO27vdSBKofI9dgkIisf90TD+z/GDh+t+196fw+1MNaL1lrQjmsvuEKevDSA0m2m4khYgqiNun1UBZ946Zlx8UrBQNum02L/aKDzBu1kk1Jz3hia1Cbt/0ae5tgrJzrNK39oSAmpy7deJSNWGhCgT/D1Fa9HGBWhyA8uy+SUpFgc9Nrgi/eVss+hsZn8kNa/wZHLuF0DZrzpZk55pcSWRdiVoyFv9RelMsW5I+8Q6v9pdQaMXcm8jhNoJc/BkV3mTplTwJbcu2wGIYNKwsNFuBAR9mgVUdc0uIB++jDvcwGjuv7oRDKK8pLEDt58ZCKPGbcciqJ3z+Y2FxwJ+witcJhBUuBAg2aqRGBIqMbxEBrxzHpoYsfuGMfJbJiwq8Qd2+HGeUqyuLrUcGlLKn/fnkt2CHcv2OzWKNdwIkbmSpMhQixXhBrhrQePwKAs02s6Eo7aYrJOZr3AXKhfBl4L8qCxU8j2YzbRhnu6UKPK0gMLPI42a8fjqVJW5zp50BtZ38D9K3Dqb5pyJx1W/6GX61/qlg44A6rN9ZHk+yIhWfb3VP+ArA0L7jK3yvP6OSAmMqhQtOBaAqppdad5JwGJY1BxyKPjlIxlcO6bDnHmffmrkHsyauQ4dSxovXToJrLYmZYCQ92lgR9a5rfBzwsOzhaWsWj3SCegRz1zBNdlOZaptUy0fFqXDnJgZTxFRzPwSilxIF+OWrmu+OSpg93wHtSiLOp1XCYUxtIT76IiZyFGfvX4/ON+qE/4xRUlJQwspJM5KXcMDzuPD5dBGZpWdcfT9A7kVUuh835DTMefJmMtUyhetDcgIsg4xSpft6x7HL6Wub6xMMHqnvjAr3n9YPKkNTn95cpES0Vn/7XsQ122syrU2mYoAdPrVVdnl9s9LW/Ayp9fzXkOfh5Sv3H6qTW5hErXaC5aJIgz7c+O/RjQG8y98oNKvBDWxOCHFVsupXh/8gJIY+cyAUxrfJ8IIxVw4FdPXNJTz1sE8YnTHsen4fwoNfaDccZ6N5soDrEdLRRwep34XaJy+wVvl1WDoRBQ9dOJIemnGjtbfsHlNnpKh0gHOSVxjyIjxQ1TX1rJhWJe3uJGWQKhDS/FxexGH0y4RunPpEnPNppqf6eXYrCHr/Gr2sn7iSJrkNyh7W/Yetpr8nqQV0sK74/O4rfusyT+zUl3sxzQx72l0zEYMwbRopSlPx1VqeK/iN6V4tyoZvBEky8g16e0EhmhXdkFtsLbwsgl+OxkwURnLneZNV9xR+lF1wBep44vzA05sOLiQTMihYs6PX4ua+12TCo28wGpGtt2cdG90ezO2fP9seQj7MKEq7C0bkVzqgARIHnG1I5VZC13Kp3gNFvUyMjrTXOT8glfRf98X9N0o8qEytvHg6pYIqjWJdOGa/bBOYcJJW0y4+cO4sKGGSdnTk+/lCc9PA2TAC6R6e486wR1q6JySixgAn2YIOa6ZJ4BzOpmmCNy3e+Pn7YNeGzoPldPs3wTdZFSENR5T6OibgpCAnQi/4VGFrJkr5N7QMmpWWa7zE39RS1JI5XGZmjOHudKHeG609HA16d/YYXWY5eassNWeZ4Uq7gV9ZBf7rvETlLpcA3Sl5EG+wpd3RarMg5xg5x2RVPkPvSnOzwcwgt75RZrt4mjolq8jN10PHlPBgi4fT3aAsIwhxhWjWsOePAks7uJ9UkhyJXjDUMtUk1CdKv855ZnHynfGTBNkX59dckZ7yTwN+6ml0FDL1I7N6Tv3cKSoCO7W7FsG3zQlPgX0XWWOvI266wBZWZ9Qh2p5yl7fLml4cPK/bFRTo7SUohTjN0pambtTFRPQu7upCZozXq+oc+rLCLNJnFRcwy1KbGtrP41c9WtyGIRkMs3/yZRHwfmGz2uHsnMaQqqMc2vthN3L8AgSYDYUPimiEAIQi20wAQIjCvs2ZgoI3In/ci9hCf1/T+UgRce9XYjzHUpsX9Q5GZ2Hvi8djDIoE6d6ZT+Z6D/K+rPYygEmdSQ/y7BghgbEiTRr13Z8sCcFKbmBIpp+LKgJ8Te5YTqnx6gk9idfFF0vxXSzR9iloSqNgXjZRn0pl1JLW0VIv/BP3VlSaxfoFG3EmEGNbEVRxGzERic1vUJ54uqc+0JSTI4DgqHJjoElUgJO5aJu3oCGcZebueh3/MfgJ8/BMiQhhF2DrEa0XjvdgiPJ3VCyHnVbDTgyUhCxM3wsxRbRNBnKbaWgwKjqgPnbqcmkaKNgSJlwCWG8SM8Qzph+s5NDuXnd4MDlfSSd/L2Hl/G9C9grtyEO0I7mRFYtk/2t5uOSjHS6zNeNCOV4A90//uIFN53JyHUH+6cHwTJW0sPzdP8qFa83M89Xy8uaPBZhcKds+8IUGLENwZk+nPqoxNxdJ0LOjW1G9rngPvH0TGHXCn3vdlOjGrtuqflkIW4H0Syyb1MObh3SrGk5hw+MxnqAzy70LrI+0CxwtlGp5Q4Vbo9Cbq/gi0mxvnhszSAd8dV6lHsoppV1dSJT1HysjutWvsxCa5TjfwtAKr9a3jGg6OiUkw26rAjPa6MI/Hby0CdBiWROSi4UceWM841jDUHz17Y13qX76HHdDGnqLAZtSxOT2S9TaFhP/PCbyxVfXuP4iUKk6KeqTXzfSRqharXm6DL7icJk22e/ejHCBYjpigOoUPNDi8DV0Y/zAjgP/3xGrkqL8iMEHJhYJb89QGG3IlUsyGGOkiXKgm2jFomYcUWQ/2/O+/NJbIV3TXeHFmiShrgMEpEoleYRmuUlnZGQIaAHIjz+5FGK/keN423wM+2xiHEE3dUnmGMjANB89+Xd931PwGo3QO/VipJKjNZNSRNEJuh/FYyjYgGVv74/vyTlBy67UwBydp0wk2Bg6oFteE4g7GEcSoXDh6S/DSJMrDpVn1nsUuhh6eoYAgk9Lchy1eFFlMMLNRFHfS8GKREEsTQPdPjGBg6cv5IC+A0yuI2DpxX6GnFiiu07NKzSnLDdtvIrvRB48kqVyePLzigHCEVD8iESjUj7k85vVbtuwPUCGCOsu5JSD/ZCmtKsGM+WQyxmghTI0HtY/kr8pXKdQ4cfmrzwBEDNNMOdO5gIK5IF9QlycifgWY48IhiQ4offm12DxzGx0VehIjasxI3ztrxQlZ97LGczWkm2sfjijiCF43SG3ZHwKQo4z3jQNiCSI2WzmhCuU5iGFKeZFoz5wNiDR7qUrhOv1+X2s6qEETLCjRO4jBYdJ+bY5xdAsk02kY6sSTnaEtO7CGxzxTNvTm6YsK+Df4GA+LgZEhaBD8WvHUgYzc0qYTvkiQpN6+J74ireFcc7RZA/WKKTs2CDe00/1R3M2LztNUX8QR9lu7euw2g5e1lQ1tPZRXE+IbQUxZtQD44VHTRC4JtV5XWS4hMRa0kSCXbaxwGle1SVIcD+mpVR01hL1SzuOXcU93WJgnOwE3vbgD8gcR4a05U+0ltB/1QkERcYnogyw+hlSS/GDxU4Zp9nojqhUaNroejT0hlSUPTaCF4lPw+AW6TjV6vX8Pda1VErsju7oPrfa1TOFaeoJu73EOikwtD5juIvOPvz5RewPcZJxGWEURaNqYR1QCOVHS1CeTZbAAI0hz9nJEhu3e7RUJmDDqZnHO2urSZ+/ZLharw6sUrt1RkVXO/sQt+rLPbI7Z3ss6TC4XcK1Z5m58eyj6xgxJ/wPvVXHXxrg6GzbMa8ULFUgeDvjs+4dlD8/UnzHXNtuJIXdXSis2871KYNh0iFn8xe/4s/UDHD+Nfh5j9h3VwAchtIMZK7D//SayBb2Ke8sPaCKyIOmv1bdiOFXA2xnDUuGV4Wtf/KYBMahKzD+8Li8AOUZpDgtt7Bv8p9oPkYFIAaOXALVw2go4xG3V1NXHi8aSaFGnuszj57tT5L/yu5XL6U69eD8KU8AVAeKg7G3tbfcaDyyA2UVMlVIusxjmrVA0KB3DujfvLdtsumuhmTvOGxPZCifUhNjbouzMOPdfClP6PrdUFP+H++F4Qrs1ErM/ArYaVL1iR4OLSHQfvFN2pv4i5+Jlq4tOqNj/tRM0eOEn66OOsruS9Kao+Ylc1bmP9B24SB7nVzAWEJPkaxzjLfiKvISXS9iwLL6GRE/63V1WbHZUK7fbtk7Tv5FY23XE1qGF/ndDEM8LOHmtNbbUjYhdw5Q/Z2ShuiYKbe4GDLKEZTYr4M18qFHe1OdQhp7wHQ+7gQ2iOGOtsBcQnCVLIf+gjrV5Vc0R7gpBZ+U/33kZY7XNl/RyuAuH+cDfzttkAJjiazmcAx0Vu/TS1HtD+HlyFjG/pv/1XCF1qrYxxQ8dEAnGiw8K1A7qkqKdUT9A6KYTdBKNHr866qlnkEUIYmcnRVBGJ2ogdtoDvpjT5e9+4lU1RhuI/JKfX+02t9bTHRaEI3RHt7pl2FGBlkcTQARBTjc+50HL66Dq0StmsDBGjt4zkKiDSmJ1HpKyCsDfsAmD3H4bLQXExvDI6KPcyYi4VC2I9Eg2bfhzpQdTKFvNt8UKrLm9wfXiFLapGMFD/WLGEjYc+FHt0yi+g1cGxAhPv7zq03HdQlBpaBOaBFfOYyxP28oV6jG+NCse3WAeJ8skVRxKCs8XbqC/h/EAA9Os7ENtBR4nG0hcbaVrC6aMcKxd7j5bXp8ovbWy4N5+GVZUYC6ZiIdzFduTesEePXzCKIx52v022/kDlpqPQOmnMFDhWMBqG1wvo5fBtDJnLcKt5eBauPAobctHLdv7688vI4/9zJFXzCcubUZCZml4M3hS865h1ZDR5AA4HLBMbaj8hmJs632w+pSYxm7BJ9LsbfMzxZiA9u8Mco48kijPlJSZ4P/xNoGLSRgDWAFWfhdhaOjpkkihrzpnmi0mRVxp++1rNq5IeQ4Uu8d7IBEAwNFAlEjc/iq/5YyJ+ko3DHghjbq92dos1wx2mYDd6grcrzpqirE4EYHHWecVF5HVKBaxx1Z7CqVyvOmh+tJBbg0RG0p10fa6yvPdXf5TeFhSKuwLNKj/pGfSGSZStnO14wCoCf7az7EaXW55YpIfBNykxlU6f00S4XRQviJ159C05h+DpIvrQOw4yICoFNSDVbuvW5Uh6OBgYxx5giIAwJT8r1fRH2wt1r3VaKlN64qZAmQlR7ywklfys5HJf6ynIQtKwSonWToC1QLcr3QIml7wPMWXAsmFHU6KNQ5KB1fnA5OAkQyxGqrWzrZzoMElAeKMDa+jVMeE/xTT6GafnYtTG/QPE5QQNhlhFdN6MLnNyWdBw83sR1zHl6Zumc5mzP7Ihr0HH7hF+LWsI6CTmbiJ2TOXkxkcwz9GuQxyzMH06OJx4xfUyHzx6wa4WibaZcfhYDSbKiH183C/Z9k+K1T3vR7DOAqel64JUujpoolaD/H2F17xisSwXjnDn+w2uGqvxM9Sbc9t89dPXaTp4FkqWGn+7dPM4Cq7aQZOIzHLEgRsJbm6rzJfU7dBDke9Wz2iNoKPAluAJow05+1S/ix8EqAnvk6y3qn4+/Dmwj3nQfTY9oxSZZ9lBJqf0VaZFDLstPydUJnRyONwUD3pv2H0Iretk0arPAKInUTQpo1gUj8ffe1GmiLr2k2d3KytoLeXcpcm+VoAAAAA');
