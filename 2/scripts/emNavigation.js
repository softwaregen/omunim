function navigation(divPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            //document.barcode_search.barcode_text.focus();
            document.getElementById("mainSelectDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppmsdv.php?divPanel=" + divPanel, true);
    xmlhttp.send();
}

function navigation(versionNo, divPanel) {
    if (versionNo == 0 || versionNo == '' || versionNo == '0') {
        alert("We are unable to recognize your dongle, please insert your online munim dongle properly with the computer system!\n\n\
                हम आपके डोंगल को पहचानने में असमर्थ हैं, कृपया अपना ऑनलाइन मुनीम डोंगल कंप्यूटर में ठीक से लगाइए!");
        return false;
    } else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajax_loading_lg_div").style.visibility = "hidden";
                //document.barcode_search.barcode_text.focus();
                document.getElementById("mainSelectDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("ajax_loading_lg_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omppmsdv.php?divPanel=" + divPanel, true);
        xmlhttp.send();
    }
}
function navigationHomePage(divPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainSelectDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST",
            "include/php/omppmsdv.php?divPanel="
            + divPanel, true);
    xmlhttp.send();
}

function navigationHomePageImage(divPanel, imageName, imageContent) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(divPanel).innerHTML = "<img src='images/" + imageName + "' title='" + imageContent + "' />";
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainSelectDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById(divPanel).innerHTML = "<img src='images/loading16.gif' />";
        }
    };
    xmlhttp.open("POST",
            "include/php/omppmsdv.php?divPanel="
            + divPanel, true);
    xmlhttp.send();
}

function navigationMainMiddle(divPanel, divPanelContent) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(divPanel).innerHTML = divPanelContent;
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById(divPanel).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST",
            "include/php/omppmmdv.php?divMainMiddlePanel="
            + divPanel, true);
    xmlhttp.send();
}
function navigationMainMiddleImage(divPanelPath, divPanel, imageName, imageContent) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(divPanel).innerHTML = "<img src='images/" + imageName + "' title='" + imageContent + "' />";
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById(divPanel).innerHTML = "<img src='images/loading16.gif' />";
        }
    };
    xmlhttp.open("POST",
            "include/php/omppmmdv.php?divMainMiddlePanel="
            + divPanelPath, true);
    xmlhttp.send();
}
/************Start Code To Hide Func @Author:PRIYA23JUL13************/
/*function navigationMainBigMiddle(divPanel) {
 loadXMLDoc();
 xmlhttp.onreadystatechange = function() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
 document.barcode_search.barcode_text.focus();
 document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
 } else {
 document.getElementById("main_ajax_loading_div").style.visibility = "visible";
 }
 };
 xmlhttp.open("POST", "include/php/omppsbdv.php?divPanel=" + divPanel, true);
 xmlhttp.send();
 }*/
/************End Code To Hide Func @Author:PRIYA23JUL13************/
//amol
function navigationMainBigMiddleImage(divPanel, imageName, imageContent) {
// alert(divPanel)
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (divPanel != 'stock') {
                document.getElementById(divPanel).innerHTML = "<img src='images/" + imageName + "' title='" + imageContent + "' />";
            }
            document.barcode_search.barcode_text.focus();
            if (divPanel == 'stock') {
                document.getElementById("jewelleryPanel").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            }
            checkPlaceHolder();
            //Start code to add a function to change the stock option @AUTHOR:SHE04MAY16
//            if (divPanel == 'stockPanel') {
//                var containerElement = document.getElementById('main_full_body');
//                var overlayEle = document.getElementById('overlay');
//                overlayEle.style.display = 'block';
//                containerElement.setAttribute('class', 'blur');
//
//                changeStockOpt();
//            }
//            
            //End code to add function to change the stock option @AUTHOR:SHE04MAY16

        } else {
            if (divPanel != 'stock') {
                document.getElementById(divPanel).innerHTML = "<img src='images/loading16.gif' />";
            }
        }
    };
    if (divPanel == 'stock') {
        xmlhttp.open("POST", "include/php/ogwgstlt.php?divPanel=" + divPanel, true);
    } else {
//        alert(divPanel);
        xmlhttp.open("POST", "include/php/omppsbdv.php?divPanel=" + divPanel, true);
    }

    xmlhttp.send();
}
function navigationMainBigMiddleImageMouseOver(divPanel, imageName, imageNameOver, imageContent) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(divPanel).innerHTML = "<img src='images/" + imageName + "' title='" + imageContent + "' onmouseover=\"this.src='images/" + imageNameOver + "';\" onmouseout=\"this.src='images/" + imageName + "';\" />";
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById(divPanel).innerHTML = "<img src='images/loading16.gif' />";
        }
    };
    xmlhttp.open("POST",
            "include/php/omppsbdv.php?divPanel="
            + divPanel, true);
    xmlhttp.send();
}
function navigationHeaderMetalRates(divPanel, divPanelContent) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(divPanel).innerHTML = "<img src='images/" + divPanelContent + ".png' />";
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById(divPanel).innerHTML = "<img src='images/loading16.gif' />";
        }
    };
    xmlhttp.open("POST",
            "include/php/omppmmdv.php?divMainMiddlePanel="
            + divPanel, true);
    xmlhttp.send();
}
function navigationPubFirms(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("pubFirmDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omffrpbf.php?page=" + pageNo, true);
    xmlhttp.send();
}
function navigationPerFirms(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("perFirmDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omffrtpf.php?page=" + pageNo, true);
    xmlhttp.send();
}
function navigationAllFirms(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("selectFirmDiv").innerHTML = xmlhttp.responseText;
            //document.getElementById("nextPrevFirmDiv").innerHTML = document.getElementById("nextPrevFirmDiv").innerHTML;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omffrafr.php?page=" + pageNo, true);
    xmlhttp.send();
}

//**************************** Navigate Customer *******************************************************************
function navigationCust(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("customerListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omcccslt.php?page=" + pageNo, true);
    xmlhttp.send();
}
/***********Start code to change func @Author:PRIYA08APR14**********************/
function navigationComment(pageNo, custId, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (panel == 'commDispPanel') {
                document.getElementById("commDisplayDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("customerCommentsDiv").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'commDispPanel') {
        xmlhttp.open("POST", "include/php/omcommlt.php?page=" + pageNo + "&custId=" + custId, true);
    } else {
        xmlhttp.open("POST", "include/php/omcdccdv.php?page=" + pageNo + "&custId=" + custId, true);
    }

    xmlhttp.send();
}
/***********End code to change func @Author:PRIYA08APR14**********************/
//**************************** Navigate Girvi *******************************************************************
function navigationGirvi(pageNo, custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/olggcgdt.php?page=" + pageNo + "&custId=" + custId, true); //changes in navigation AS per new filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
//**************************** Navigate Girvi Receipt Panel *******************************************************************
function navigationGirviReceipt(pageNo, custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/olggsumm.php?page=" + pageNo + "&custId=" + custId, true); //change in filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
//**************************** Navigate Girvi Panel *******************************************************************
function navigationGirviPanel(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
            document.barcode_search.barcode_text.focus();
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/orgpglpd.php?page=" + pageNo, true);
    xmlhttp.send();
}
//**************************** Start Navigate Girvi Panel By Firm Id @AUTHOR : PRIYA27JAN13 *******************************************************************
//**********code Modified by @Author: LINA4JUN2013***********************
//*********code modified for search option by @AUTHOR: LINA27JUN2013 *****
function navigationGirviPanelByFirmId(pageNo, selFirmId, sortKeyword, rowsPerPage, searchColumn, searchValue) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
            document.barcode_search.barcode_text.focus();
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/orgpglpd.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&rowsPerPage=" + rowsPerPage + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue, true);
    xmlhttp.send();
}
//**************************** End Navigate Girvi Panel By Firm Id @AUTHOR : PRIYA27JAN13 *******************************************************************
//**************************** Navigate Girvi Ledger Details Panel *******************************************************************
/****Start to change function @AUTHOR: SANDY05FEB14******/
function navigationGirviLedgerDetailsPanel(pageNo, startDate, endDate, selFirmId, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextGirviLedgerDetailsList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextGirviLedgerDetailsButt").style.visibility = "visible";
            //document.barcode_search.barcode_text.focus();
            if (panel == 'ledgerInfoDet') {
                document.getElementById("ledgerDetDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("girviLedgerDetailsDiv").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("ajaxLoadNextGirviLedgerDetailsList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextGirviLedgerDetailsButt").style.visibility = "hidden";
        }
    };
    if (panel == 'ledgerInfoDet') {
        xmlhttp.open("POST", "include/php/ommlgdet.php?page=" + pageNo + "&girviLedgerDetStartDate=" + startDate + "&girviLedgerDetEndDate=" + endDate + "&firmId=" + selFirmId, true);
    } else {
        xmlhttp.open("POST", "include/php/ombbgldd.php?page=" + pageNo + "&girviLedgerDetStartDate=" + startDate + "&girviLedgerDetEndDate=" + endDate + "&firmId=" + selFirmId, true);
    }
    xmlhttp.send();
}
/****End to change function @AUTHOR: SANDY05FEB14******/
//**************************** Navigate Girvi Expiry Panel *******************************************************************
//*********code modified for search option by @AUTHOR: LINA27JUN2013 *****
function navigationGirviExpPanel(pageNo, expMonths, selFirmId, sortKeyword, rowsPerPage, searchColumn, searchValue) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
            document.barcode_search.barcode_text.focus();
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/orgpexgl.php?page=" + pageNo + "&expMonths=" + expMonths + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&rowsPerPage=" + rowsPerPage + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue, true);
    xmlhttp.send();
}
//**************************** Navigate to Add Gold Stock Div *******************************************************************
function navigateAddGoldStockDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("goldStockDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omAddGoldStockDiv.php", true);
    xmlhttp.send();
}
//**************************** Navigate Gold Items *******************************************************************
function navigationGoldItems(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("goldStockDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omGoldStockDiv.php?page=" + pageNo, true);
    xmlhttp.send();
}

//**************************** Get Gold Item Details *******************************************************************
function getGoldItemDetails(gItemId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("goldStockDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omGoldStockDetailsDiv.php?gItemId=" + gItemId, true);
    xmlhttp.send();
}
//**************************** Navigate Udhaar Panel *******************************************************************
//*************Start code to change div @Author:PRIYA04JUN14******************/
function navigationUdhaarPanel(pageNo, rowsPerPage, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextUdhaarPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextUdhaarPanelListButt").style.visibility = "visible";
            document.barcode_search.barcode_text.focus();
            document.getElementById("udhaarDetPanel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextUdhaarPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextUdhaarPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/omuupnal.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&udhaarUpdateRows=UdhaarUpdateRows" + "&panelName=" + panel, true);
    xmlhttp.send();
}
//*************End code to change div @Author:PRIYA04JUN14******************/
//**************************** Navigate All Udhaar Panel *******************************************************************
//*************Start code to change div @Author:PRIYA04JUN14******************/
function navigationAllUdhaarListPanel(pageNo, rowsPerPage, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextAllUdhaarPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextAllUdhaarPanelListButt").style.visibility = "visible";
            document.barcode_search.barcode_text.focus();
            document.getElementById("allUdhaarListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextAllUdhaarPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextAllUdhaarPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/omuualud.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&udhaarUpdateRows=UdhaarUpdateRows" + "&panelName=" + panel, true);
    xmlhttp.send();
}
//*************End code to change div @Author:PRIYA04JUN14******************/
//**************************** Navigate All Deposit Udhaar Panel *******************************************************************
function navigationAllDepUdhaarPanel(pageNo, rowsPerPage, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextAllDepUdhaarPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextAllDepUdhaarPanelListButt").style.visibility = "visible";
            document.barcode_search.barcode_text.focus();
            document.getElementById("allUdhaarDepListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextAllDepUdhaarPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextAllDepUdhaarPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/omuualdp.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&udhaarUpdateRows=UdhaarUpdateRows" + "&panelName=" + panel, true);
    xmlhttp.send();
}
//**************************** Navigate City Panel *******************************************************************
function navigateCityPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omvvaacd.php", true);
    xmlhttp.send();
}
//**************************** Navigate Country Panel *******************************************************************
function navigateCountryPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omvcaacd.php", true);
    xmlhttp.send();
}
//**************************** Navigate State Panel *******************************************************************
function navigateStatePanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omvsaasd.php", true);
    xmlhttp.send();
}
//**************************** Navigate ROI Panel *******************************************************************
function navigateROIPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/olguroid.php", true); //change in filename @AUTHOR: SANDY13DEC13
    xmlhttp.send();
}
//**************************** Navigate Item Name Panel *******************************************************************
function navigateItemNamePanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omiaaind.php", true);
    xmlhttp.send();
}
//**************************** Navigate Item Tunch Panel *******************************************************************
function navigateItemTunchPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omiaaitd.php", true);
    xmlhttp.send();
}
//**************************** Navigate Metal Rates Panel *******************************************************************
function navigateMetalRatePanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ommramrd.php", true);
    xmlhttp.send();
}
//**************************** Navigate Cities *******************************************************************
function navigateCities(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("citiesListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omvvctlt.php?page=" + pageNo, true);
    xmlhttp.send();
}
//**************************** Navigate Countries *******************************************************************
function navigateCountries(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("countriesListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omvccolt.php?page=" + pageNo, true);
    xmlhttp.send();
}
//**************************** Navigate States *******************************************************************
function navigateStates(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("statesListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omvsstlt.php?page=" + pageNo, true);
    xmlhttp.send();
}
//**************************** Navigate Gold Item Names *******************************************************************
//****************************Start Code To Add Div @Author:PRIYA16AUG13*****************************/
//****************************Start Code To Add Div and condition for crystal rate panel @Author:SHE31MAR15*****************************/
// add condition Author: GAUR12AUG16
// update condition Author: GAUR12SEP16
function navigateGoldItemNames(pageNo, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            if (panelName == 'goldMetRateList') {
                document.getElementById("metalRateGoldListDiv").innerHTML = xmlhttp.responseText;
            } else if (panelName == 'CrystalRateList') {
                document.getElementById("crystalRateListDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("itemNamesGoldListDiv").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'goldMetRateList') {
        xmlhttp.open("POST", "include/php/ommrgmgl.php?page=" + pageNo, true);
    } else if (panelName == 'CrystalRateList') {
        xmlhttp.open("POST", "include/php/omcrrtlt.php?page=" + pageNo, true);
    } else if (panelName == 'scheme') {
        xmlhttp.open("POST", "include/php/omslingl.php?page=" + pageNo, true);
    } else if (panelName == 'ItmCode') {
        xmlhttp.open("POST", "include/php/omiclingl.php?page=" + pageNo, true);
    } else {
        xmlhttp.open("POST", "include/php/omilingl.php?page=" + pageNo, true);
    }
    xmlhttp.send();
}
// update condition Author: GAUR12SEP16
// add condition Author: GAUR12AUG16
//****************************End Code To Add Div and condition for crystal rate panel @Author:SHE31MAR15*****************************/
//**************************** Navigate Silver Item Names *******************************************************************
//****************************Start Code To Add Div @Author:PRIYA16AUG13*****************************/
function navigateSilverItemNames(pageNo, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            if (panelName == 'silverMetRateList') {
                document.getElementById("metalRateSilverListDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("itemNamesSilverListDiv").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'silverMetRateList') {
        xmlhttp.open("POST", "include/php/ommrgmsl.php?page=" + pageNo, true);
    } else {
        xmlhttp.open("POST", "include/php/omilinsl.php?page=" + pageNo, true);
    }
    xmlhttp.send();
}
//****************************End Code To Add Div @Author:PRIYA16AUG13*****************************/
//**************************** Navigate Other Item Names ******************************************
function navigateOtherItemNames(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemNamesOtherListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omilinol.php?page=" + pageNo, true);
    xmlhttp.send();
}
//**************************** Navigate Item Gold Tunch *******************************************************************
function navigateTunchGoldList(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemTunchGoldListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omilitgl.php?page=" + pageNo, true);
    xmlhttp.send();
}
//**************************** Navigate Item Silver Tunch *******************************************************************
function navigateTunchSilverList(pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemTunchSilverListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omilitsl.php?page=" + pageNo, true);
    xmlhttp.send();
}


//**************************** Search Customer *******************************************************************
function valSearchCustNameOrMobNoInputs(obj) {
    if (document.getElementById("custNameOrMobNo").value == "Enter Customer Name / Mobile Number") {
        alert("Please enter Customer Name / Mobile Number!");
        document.getElementById("custNameOrMobNo").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("custNameOrMobNo").value, "Please enter Customer Name / Mobile Number!") == false ||
            validateAlphaNumWithSpace(document.getElementById("custNameOrMobNo").value, "Accept only alpha characters or Numeric or with space character!") == false) {

        document.getElementById("custNameOrMobNo").focus();
        return false;
    }
    return true;
}

function search_cust_name_mobno(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchCustNameOrMobNo;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchCustNameOrMobNo() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("custNameOrMobNoDiv").style.visibility = "visible";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "hidden";
        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        refreshMainRightDiv();
    } else {
        document.getElementById("custNameOrMobNoDiv").style.visibility = "hidden";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "visible";
    }
}
function searchCustByNameOrMobNo(obj) {
    document.getElementById("custNameOrMobNoDiv").style.visibility = "hidden";
    document.getElementById("ajaxCustSearchDiv").style.visibility = "visible";
    if (valSearchCustNameOrMobNoInputs(obj)) {

        var poststr = "";
        if (validateNumWithOutAlert(document.getElementById("custNameOrMobNo").value) == true) {
            poststr = "custMobileNo=" + encodeURIComponent(document.getElementById("custNameOrMobNo").value);
            search_cust_name_mobno('include/php/omccscml.php', poststr);
        }

        if (validateAlphaWithSpaceWithOutAlert(document.getElementById("custNameOrMobNo").value) == true) {
            poststr = "custName=" + encodeURIComponent(document.getElementById("custNameOrMobNo").value);
            search_cust_name_mobno('include/php/omccsrcl.php', poststr);
        }
    } else {
        document.getElementById("custNameOrMobNoDiv").style.visibility = "visible";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "hidden";
    }
}
//**************************** Navigate Search Customer *******************************************************************
function navigationSrchCust(pageNo, custName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("customerListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omccscls.php?page=" + pageNo + "&custName=" + custName, true);
    xmlhttp.send();
}
//**************************** Navigate Search Customer To Add New Girvi *******************************************************************
/*************Start Code To Add Var custMobile and custFirmId @Author:PRIYA27AUG13*********************/
function navigationSrchCustToAddGirvi(pageNo, custFName, custLName, custFatherOrSpouseName, custCity, custMobile, custFirmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNavSrchCustToAddGirviButtDiv").style.visibility = "visible";
            document.getElementById("ajaxLoadShowSearchGirviDiv").style.visibility = "hidden";
            document.getElementById("custListForAddGirviDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNavSrchCustToAddGirviButtDiv").style.visibility = "hidden";
            document.getElementById("ajaxLoadShowSearchGirviDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omccscag.php?page=" + pageNo + "&custFName=" + custFName + "&custLName=" + custLName + "&custFatherOrSpouseName=" + custFatherOrSpouseName + "&custCity=" + custCity + "&custMobNo=" + custMobile + "&custFirmId=" + custFirmId, true);
    xmlhttp.send();
}
/*************End Code To Add Var custMobile and custFirmId @Author:PRIYA27AUG13*********************/
//**************************** Search Customer By Mobile Number ****************************************************
function valSearchCustByCityInputs(obj) {
    if (validateSelectField(document.getElementById("searchCity").value, "Please select customer city or village!") == false) {
        document.getElementById("searchCity").focus();
        return false;
    }
    return true;
}

function search_cust_city(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchCustByCity;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchCustByCity() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("custSearchCityDiv").style.visibility = "visible";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "hidden";
        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        refreshMainRightDiv();
    } else {
        document.getElementById("custSearchCityDiv").style.visibility = "hidden";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "visible";
    }
}
function searchCustByCity(obj) {
    document.getElementById("custSearchCityDiv").style.visibility = "hidden";
    document.getElementById("ajaxCustSearchDiv").style.visibility = "visible";
    if (valSearchCustByCityInputs(obj)) {

        var poststr = "custCity=" + encodeURIComponent(document.getElementById("searchCity").value);
        search_cust_city('include/php/omccsccl.php', poststr);
    } else {
        document.getElementById("custSearchCityDiv").style.visibility = "visible";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "hidden";
    }
}
//**************************** Search Banner Girvi By Amount *************************************
function valSearchBannerGirviByAmountInputs(obj) {

    var gPrinAmtOrSerialNo = document.search_girvi_by_prinAmt.searchGirviPrinAmt.value;
    var checkSerialNo = gPrinAmtOrSerialNo.substr(0, 1);
    if (document.search_girvi_by_prinAmt.searchGirviPrinAmt.value == "Principal Amount / Serial No. (s1234)") {
        alert("Please Enter Girvi Principal Amount Or Girvi Serial Number!");
        document.search_girvi_by_prinAmt.searchGirviPrinAmt.focus();
        return false;
    } else if (checkSerialNo == 's' || checkSerialNo == 'S') {
        var serialNo = gPrinAmtOrSerialNo.slice(1);
        if (validateEmptyField(serialNo, "Please Enter Girvi Serial Number!") == false ||
                validateAlphaNum(serialNo, "Accept only Numbers without space character!") == false) {
            document.search_girvi_by_prinAmt.searchGirviPrinAmt.focus();
            return false;
        }
    } else if (validateEmptyField(document.search_girvi_by_prinAmt.searchGirviPrinAmt.value, "Please enter girvi principal amount!") == false ||
            validateNum(document.search_girvi_by_prinAmt.searchGirviPrinAmt.value, "Accept only Numbers without space character!") == false) {
        document.search_girvi_by_prinAmt.searchGirviPrinAmt.focus();
        return false;
    }
    return true;
}

function search_banner_girvi_by_amount(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchBannerGirviByPrincipalAmt;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchBannerGirviByPrincipalAmt() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("searchBannerGirviPrincipalAmtDiv").style.visibility = "visible";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "hidden";
        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        //refreshMainRightDiv();
    } else {
        document.getElementById("searchBannerGirviPrincipalAmtDiv").style.visibility = "hidden";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "visible";
    }
}
function searchBannerGirviByPrincipalAmt(obj) {
    document.getElementById("searchBannerGirviPrincipalAmtDiv").style.visibility = "hidden";
    document.getElementById("ajaxCustSearchDiv").style.visibility = "visible";
    var gPrinAmtOrSerialNo = document.search_girvi_by_prinAmt.searchGirviPrinAmt.value;
    var checkSerialNo = gPrinAmtOrSerialNo.substr(0, 1);
    var poststr;
    if (valSearchBannerGirviByAmountInputs(obj)) {
        if (checkSerialNo == 's' || checkSerialNo == 'S') {

            var serialNo = gPrinAmtOrSerialNo.slice(1);
            poststr = "grvSerialNo=" + encodeURIComponent(serialNo);
            search_banner_girvi_by_amount('include/php/olgssndv.php', poststr); //change in filename @AUTHOR: SANDY21NOV13
        } else {
            poststr = "grvFixedAmt=" + encodeURIComponent(document.search_girvi_by_prinAmt.searchGirviPrinAmt.value);
            search_banner_girvi_by_amount('include/php/olgsfxad.php', poststr); //change in filename @AUTHOR: SANDY21NOV13
        }
    } else {
        document.getElementById("searchBannerGirviPrincipalAmtDiv").style.visibility = "visible";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "hidden";
    }
}
//********************* Search Girvi By Serial Number *****************
function searchGirviBySerialNo(serialNo) {

    poststr = "grvSerialNo=" + encodeURIComponent(serialNo);
    search_banner_girvi_by_amount('include/php/olgssndv.php', poststr); //change in filename @AUTHOR: SANDY21NOV13
}
//********************* Search Girvi By Serial Number *****************
function search_girvi_by_girviId(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchGirviByGirviId;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchGirviByGirviId() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        //refreshMainRightDiv();
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function searchGirviByGirviId(girviId) {
//button.style.visibility = "hidden";

    poststr = "girviId=" + encodeURIComponent(girviId);
    search_girvi_by_girviId('include/php/olgsgidd.php', poststr); //change in filename @AUTHOR: SANDY22NOV13
}
function showGirviReceiptByGirviId(girviId) {

//button.style.visibility = "hidden";

    poststr = "girviId=" + encodeURIComponent(girviId);
    search_girvi_by_girviId('include/php/olgsgiwd.php?getGirviReceipt=YES', poststr); //change in filename @AUTHOR: SANDY20NOV13
}
//********************* Search Girvi By Serial Number in Cust Home Panel *****************
function search_girvi_by_girviId_cust_home(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchGirviByGirviIdInCustHome;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchGirviByGirviIdInCustHome() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadGirviDetailsCustHomeDiv").style.visibility = "hidden";
        parent.document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadGirviDetailsCustHomeDiv").style.visibility = "visible";
    }
}
function searchGirviByGirviIdInCustHome(girviId, documentRootPath) {

    poststr = "girviId=" + encodeURIComponent(girviId);
    search_girvi_by_girviId_cust_home("http://" + documentRootPath + "/include/php/olgsgiwd.php", poststr); //change in filename @AUTHOR: SANDY20NOV13
}
function searchGirviReceiptByGirviIdInCustHome(girviId, documentRootPath) {

    poststr = "girviId=" + encodeURIComponent(girviId);
    search_girvi_by_girviId_cust_home("http://" + documentRootPath + "/include/php/olgsgiwd.php?getGirviReceipt=YES", poststr); //change in filename @AUTHOR: SANDY20NOV13
}
//**************************** Refresh Main Right Main Div *****************************
function refreshMainRightDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadRightMenuDiv").style.visibility = "hidden";
            document.getElementById("mainRightDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadRightMenuDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ompprmdv.php", true);
    xmlhttp.send();
}
//**************************** Search Banner Girvi By Date **********************************************
function valSearchBannerGirviByDateInputs(obj) {
    if (validateSelectField(document.search_banner_girvi_by_date.dayDD.value, "Please select Day in Date!") == false) {
        document.search_banner_girvi_by_date.dayDD.focus();
        return false;
    } else if (validateSelectField(document.search_banner_girvi_by_date.monthMonth.value, "Please select Month in Date!") == false) {
        document.search_banner_girvi_by_date.monthMonth.focus();
        return false;
    } else if (validateSelectField(document.search_banner_girvi_by_date.yearYYYY.value, "Please select Year in Date!") == false) {
        document.search_banner_girvi_by_date.yearYYYY.focus();
        return false;
    }
    return true;
}

function search_banner_girvi_by_date(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchBannerGirviByDate;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchBannerGirviByDate() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("searchBannerGirviDateDiv").style.visibility = "visible";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "hidden";
        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("searchBannerGirviDateDiv").style.visibility = "hidden";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "visible";
    }
}
function searchBannerGirviByDate(obj, noOfRows) {

    document.getElementById("searchBannerGirviDateDiv").style.visibility = "hidden";
    document.getElementById("ajaxCustSearchDiv").style.visibility = "visible";
    if (valSearchBannerGirviByDateInputs(obj)) {
        var poststr = "dayDD=" + encodeURIComponent(document.search_banner_girvi_by_date.dayDD.value)
                + "&monthMonth=" + encodeURIComponent(document.search_banner_girvi_by_date.monthMonth.value)
                + "&yearYYYY=" + encodeURIComponent(document.search_banner_girvi_by_date.yearYYYY.value)
                + "&noOfRows=" + encodeURIComponent(noOfRows);
        search_banner_girvi_by_date('include/php/olgsdatd.php', poststr); //change in filename @AUTHOR: SANDY21NOV13
    } else {
        document.getElementById("searchBannerGirviDateDiv").style.visibility = "visible";
        document.getElementById("ajaxCustSearchDiv").style.visibility = "hidden";
    }
}
//**************************** Navigate Search Customer By Mobile No ************************************************************
function navigationSrchCustByMobileNo(pageNo, custMobileNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("customerListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omccscbm.php?page=" + pageNo + "&custMobileNo=" + custMobileNo, true);
    xmlhttp.send();
}
//**************************** Navigate Search Customer By City ********************************************************
function navigationSrchCustByCity(pageNo, custCity, searchPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("customerListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omccscbc.php?page=" + pageNo + "&custSearchVar=" + custCity + "&searchPanel=" + searchPanel, true);
    xmlhttp.send();
}
//**************************** Navigate Released Girvi *******************************************************************
/********Start code to add panelDivName for Auction @Author:ANUJA14MAR15**************/
function navigationReleasedGirvi(pageNo, custId, panelDivName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/olgrgrdt.php?page=" + pageNo + "&custId=" + custId + "&panelDivName=" + panelDivName, true); //change in filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
/********End code to add panelDivName for Auction @Author:ANUJA14MAR15**************/
//********************* Show Add More Principal Div ****************************
/********Start code to add var girviSerialNum @Author:PRIYA12APR14**************/
/********Start code to add acc ids @Author:PRIYA30MAY14**************/
function showAddMorePrincipalDiv(custId, girviId, girviFirmId, ROI, girviSerialNum, girviCrAccId, girviDrAccId, loanDateOpt) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddMorePrincipal").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddMorePrincipal").style.visibility = "visible";
            document.getElementById("addMorePrincipalDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("principalAmount").focus();
        } else {
            document.getElementById("ajaxLoadAddMorePrincipal").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/olgaampd.php?custId=" + custId + "&girviId=" + girviId + "&girviFirmId=" +
            girviFirmId + "&ROI=" + ROI + "&girviSerialNum=" + girviSerialNum + "&girviCrAccId=" + girviCrAccId + "&girviDrAccId=" + girviDrAccId, true); //change in filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
/********End code to add acc ids @Author:PRIYA30MAY14**************/
/********End code to add var girviSerialNum @Author:PRIYA12APR14**************/
//********************* Close Add More Principal Div ****************************
function closeAddMorePrincipalDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddMorePrincipal").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddMorePrincipal").style.visibility = "hidden";
            document.getElementById("addMorePrincipalDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadAddMorePrincipal").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//********************* Close Banner Search Panel Div ****************************
function closeBannerSearchPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("main_banner_panel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//********************* Show Banner Search Panel Div ****************************
function showBannerSearchPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("main_banner_panel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppmbdv.php", true);
    xmlhttp.send();
}
//********************* Show Add More Item Div ****************************
/**************Start code to add var @Author:PRIYA14APR14************************/
function showAddMoreItemDiv(custId, girviId, gSerialNo, gFirmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddMoreItem").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddMoreItem").style.visibility = "visible";
            document.getElementById("addMoreItemDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadAddMoreItem").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/olguitdv.php?custId=" + custId + "&girviId=" + girviId + "&gSerialNo=" + gSerialNo + "&gFirmId=" + gFirmId, true); //change in filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
/**************End code to add var @Author:PRIYA14APR14************************/
//********************* close Add More Item Div ****************************
function closeAddMoreItemDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddMoreItem").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddMoreItem").style.visibility = "hidden";
            document.getElementById("addMoreItemDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadAddMoreItem").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//********************* Show Deposite Money Div ****************************
/***********Start code to add girviSerialNum girviSerialNum***************/
/***********Start code to add firmId @Author:PRIYA20MAY14***********************/
/***********Start code to add parameter girviHindiDOB @Author:PRIYA23APR15************/
/***********Start code to add parameter dateCompare @Author:PRIYA30APR15************/
/***********Start code to add parameter girviHindiPaksh @OMMODTAG PRIYA_15MAY15************/
function showDepositMoneyDiv(custId, girviId, totalPrincipalAmount, totalFinalInterest, principalAmt, girviDOB, girviType, girviUpdSts, girviSerialNum, firmId,
        girviHindiDOB, dateCompare, girviHindiTithi, girviHindiPaksh) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
            document.getElementById("ajaxCloseDepositMoneyDiv").style.visibility = "visible";
            document.getElementById("depositMoneyDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("girviDepositPrinAmount").focus();
        } else {
            document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/olgggmdp.php?custId=" + custId + "&girviId=" + girviId + "&totalPrincipalAmount=" + totalPrincipalAmount
            + "&totalFinalInterest=" + totalFinalInterest + "&principalAmt=" + principalAmt + "&girviDOB=" + girviDOB + "&girviType=" + girviType
            + "&girviStatus=" + girviUpdSts + "&girviSerialNum=" + girviSerialNum + "&firmId=" + firmId + "&girviHindiDOB=" + girviHindiDOB + "&dateCompare=" + dateCompare
            + "&girviHindiTithi=" + girviHindiTithi + "&girviHindiPaksh=" + girviHindiPaksh, true); //change in filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
/***********End code to add parameter girviHindiPaksh @OMMODTAG PRIYA_15MAY15************/
/***********End code to add parameter dateCompare @Author:PRIYA30APR15************/
/***********End code to add parameter girviHindiDOB @Author:PRIYA23APR15************/
/***********End code to add firmId @Author:PRIYA20MAY14***********************/
/***********End code to add girviSerialNum girviSerialNum***************/
//********************* Close Deposite Money Div ****************************
function closeDepositMoneyDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
            document.getElementById("ajaxCloseDepositMoneyDiv").style.visibility = "hidden";
            document.getElementById("depositMoneyDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//********************* Show Add New Udhaar Div ****************************
/**********************Start code to add panel @Author:PRIYA11JUN14*****************************/
//*****************************Start code to change moneypanel home page Author:SANT28APR16********************************
function showAddNewUdhaarDiv(custId, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addNewUdhaarDiv").innerHTML = xmlhttp.responseText;
            document.getElementById('udhaarMainAmount').focus(); //added @Author:PRIYA09NOV14
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'udhaarWithEMI')
        xmlhttp.open("GET", "include/php/omktdetl.php?custId=" + custId + "&panelName=" + panelName, true);
    else
        xmlhttp.open("GET", "include/php/omuanwdt.php?custId=" + custId + "&panelName=" + panelName, true);
    xmlhttp.send();
}
//*****************************End code to change moneypanel home page Author:SANT28APR16********************************
/**********************End code to add panel @Author:PRIYA11JUN14*****************************/
//********************* Close Add New Udhaar Div ****************************
function closeAddNewUdhaarDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddNewUdhaar").style.visibility = "hidden";
            document.getElementById("addNewUdhaarDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//********************* Show Udhaar Deposit Div ****************************
/*********Start code to add var @Author:PRIYA14APR14************************/
function showUdhaarDepositMoneyDiv(custId, udhaarId, udhaarAmtLeft, firmId, udhaarPreSerialNum, udhaarSerialNum, sday, smonth, syear, eday, emonth, eyear, udhaarType, otherInfo, accId, discount, utin_id) {
//    alert(discount);
    if (udhaarAmtLeft == 0) {
        alert('Please First Enter Deposit amount.');
//        document.getElementById("depositAmt<?php echo $udCounter; ?>').focus;
    } else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (udhaarId == '') {
                    document.getElementById("udharPaymentPanel" + udhaarId).innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("udhaarDepositMonButDiv" + udhaarId).style.visibility = "hidden";
                    document.getElementById("ajaxLoadUdhaarDepositMon" + udhaarId).style.visibility = "hidden";
                    document.getElementById("udhaarDepositMoneyDiv" + udhaarId).innerHTML = xmlhttp.responseText;
                }

            } else {
                document.getElementById("udhaarDepositMonButDiv" + udhaarId).style.visibility = "hidden";
                document.getElementById("ajaxLoadUdhaarDepositMon" + udhaarId).style.visibility = "visible";
            }
        };
        var str = "&paymentPanelName=UdhaarPayment&mainPanelName=udhaar&transPanelName=OnPurchase";
//        alert(typeof (utin_id));
        if (utin_id != '' && typeof (utin_id) != 'undefined') {
//            alert(utin_id);
            str = "&paymentPanelName=UdhaarPaymentUpdate&mainPanelName=udhaar&transPanelName=OnPurchase&utin_id=" + utin_id;
        }
        if (udhaarId == '') {
            var paymInfo = document.getElementById("udhaarPayOtherInfo").value;

            xmlhttp.open("POST", "include/php/ompyamt.php?userId=" + custId + "&udhaarAmtLeft=" + udhaarAmtLeft +
                    "&firmId=" + firmId + "&PreInvoiceNo=" + udhaarPreSerialNum + "&PostInvoiceNo=" + udhaarSerialNum + "&udhaarType=" + udhaarType +
                    "&accDrId=" + accId + "&PayOtherInfo=" + otherInfo + "&eDOBDay=" + eday + "&eDOBMonth=" + emonth + "&eDOBYear=" + eyear
                    + "&DOBDay=" + sday + "&DOBMonth=" + smonth + "&DOBYear=" + syear + "&paymInfo=" + paymInfo + str, true);
        } else
            xmlhttp.open("POST", "include/php/ompyamt.php?userId=" + custId + "&udhaarId=" + udhaarId + "&udhaarAmtLeft=" + udhaarAmtLeft +
                    "&firmId=" + firmId + "&depsoitDisc=" + discount + "&preInvNo=" + udhaarPreSerialNum + "&postInvNo=" + udhaarSerialNum + "&paymentPanelName=UdhaarPayment&mainPanelName=udhaar&transPanelName=UDHAAR", true);
        xmlhttp.send();
    }
}
/*********End code to add var @Author:PRIYA14APR14************************/
//********************* Close Udhaar Deposit Div ****************************
function closeUdhaarDepositMoneyDiv(udhaarId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("udhaarDepositMonButDiv" + udhaarId).style.visibility = "visible";
            document.getElementById("udhaarDepositMoneyDiv" + udhaarId).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxCloseUdhaarDepositMonDiv" + udhaarId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//********************* Show Search Girvi Panel Div ****************************
function showSearchGirviPanelDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("searchGirviPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgsgvpd.php", true);
    xmlhttp.send();
}
//********************* Close Add New Udhaar Div ****************************
function closeSearchGirviPanelDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("searchGirviPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//**************************** Search Girvi By Date **********************************************
function valSearchGirviByDateInputs(obj) {
    if (validateSelectField(document.search_girvi_panel.dayDD.value, "Please select Day in Date!") == false) {
        document.search_girvi_panel.dayDD.focus();
        return false;
    } else if (validateSelectField(document.search_girvi_panel.monthMonth.value, "Please select Month in Date!") == false) {
        document.search_girvi_panel.monthMonth.focus();
        return false;
    } else if (validateSelectField(document.search_girvi_panel.yearYYYY.value, "Please select Year in Date!") == false) {
        document.search_girvi_panel.yearYYYY.focus();
        return false;
    }
    return true;
}

function search_girvi_by_date(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchGirviByDate;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchGirviByDate() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
        document.getElementById("girviByDateSearchButt").style.visibility = "visible";
        document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        document.getElementById("girviByDateSearchButt").style.visibility = "hidden";
    }
}
function searchGirviByDate(obj) {
    if (valSearchGirviByDateInputs(obj)) {
        var poststr = "dayDD=" + encodeURIComponent(document.search_girvi_panel.dayDD.value)
                + "&monthMonth=" + encodeURIComponent(document.search_girvi_panel.monthMonth.value)
                + "&yearYYYY=" + encodeURIComponent(document.search_girvi_panel.yearYYYY.value);
        search_girvi_by_date('include/php/olgsdatd.php', poststr); //change in filename @AUTHOR: SANDY21NOV13
    }
}
//**************************** Search Girvi By Fixed Amount *************************************
function valSearchGirviByFixedAmountInputs(obj) {
    if (validateEmptyField(document.srch_girvi_fixedAmt.grvFixedAmt.value, "Please enter girvi principal amount!") == false ||
            validateNum(document.srch_girvi_fixedAmt.grvFixedAmt.value, "Accept only Numbers without space character!") == false) {
        document.srch_girvi_fixedAmt.grvFixedAmt.focus();
        return false;
    }
    return true;
}

function search_girvi_by_fixed_amount(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchGirviByFixedAmount;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchGirviByFixedAmount() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
        document.getElementById("girviByFixedAmtSrchButt").style.visibility = "visible";
        document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        document.getElementById("girviByFixedAmtSrchButt").style.visibility = "hidden";
    }
}
function searchGirviByFixedAmount(obj) {
    if (valSearchGirviByFixedAmountInputs(obj)) {
        var poststr = "grvFixedAmt=" + encodeURIComponent(document.srch_girvi_fixedAmt.grvFixedAmt.value);
        search_girvi_by_fixed_amount('include/php/olgsfxad.php', poststr); //change in filename @AUTHOR: SANDY21NOV13
    }
}
//**************************** Search Girvi By Fixed Amount Range ********************************
function valSearchGirviByAmountRangeInputs(obj) {
    if (validateSelectField(document.srch_girvi_amtRange.grvAmtRange.value, "Please select amount range!") == false) {
        document.srch_girvi_amtRange.grvAmtRange.focus();
        return false;
    }
    return true;
}

function search_girvi_by_amt_range(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchGirviByAmountRange;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchGirviByAmountRange() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
        document.getElementById("girviByAmtRangeSrchButt").style.visibility = "visible";
        document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        document.getElementById("girviByAmtRangeSrchButt").style.visibility = "hidden";
    }
}
function searchGirviByAmountRange(obj) {
    if (valSearchGirviByAmountRangeInputs(obj)) {
        var poststr = "grvAmtRange=" + encodeURIComponent(document.srch_girvi_amtRange.grvAmtRange.value);
        search_girvi_by_amt_range('include/php/orgsamrd.php', poststr);
    }
}
//**************************** Search Girvi By Customized Amount Range ********************************
function valSearchGirviByCustomAmountRangeInputs(obj) {
    if (validateEmptyField(document.srch_girvi_customAmtRange.grvCustomAmtStartRange.value, "Please enter start range!") == false ||
            validateNum(document.srch_girvi_customAmtRange.grvCustomAmtStartRange.value, "Accept only Numbers without space character!") == false) {
        document.srch_girvi_customAmtRange.grvCustomAmtStartRange.focus();
        return false;
    } else if (validateEmptyField(document.srch_girvi_customAmtRange.grvCustomAmtEndRange.value, "Please enter end range!") == false ||
            validateNum(document.srch_girvi_customAmtRange.grvCustomAmtEndRange.value, "Accept only Numbers without space character!") == false) {
        document.srch_girvi_customAmtRange.grvCustomAmtEndRange.focus();
        return false;
    }
    return true;
}

function search_girvi_by_amt_custom_range(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchGirviByCustomAmountRange;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchGirviByCustomAmountRange() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
        document.getElementById("girviByCustomAmtRangeSrchButt").style.visibility = "visible";
        document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        document.getElementById("girviByCustomAmtRangeSrchButt").style.visibility = "hidden";
    }
}
function searchGirviByCustomAmountRange(obj) {
    if (valSearchGirviByCustomAmountRangeInputs(obj)) {
        var poststr = "startRange=" + encodeURIComponent(document.srch_girvi_customAmtRange.grvCustomAmtStartRange.value)
                + "&endRange=" + encodeURIComponent(document.srch_girvi_customAmtRange.grvCustomAmtEndRange.value);
        search_girvi_by_amt_custom_range('include/php/orgscard.php', poststr);
    }
}
//********************* Show Search Udhaar Panel Div ****************************
function showSearchUdhaarPanelDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "hidden";
            document.getElementById("searchUdhaarPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omuspndv.php", true);
    xmlhttp.send();
}
//********************* Show All Udhaar Details Div ****************************
/***************Start code to add panelname @Author:PRIYA21MAY14*********/
/***************Start code to change panel @Author:PRIYA04JUN14*******/
function showAllUdhaarDetailsDiv(panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "hidden";
            document.getElementById("udhaarDetPanel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omuupnal.php?panelName=" + panelName, true);
    xmlhttp.send();
}
/***************End code to change panel @Author:PRIYA04JUN14*******/
/***************End code to add panelname @Author:PRIYA21MAY14*********/
//********************* Close Search Udhaar Div ****************************
function closeSearchUdhaarPanelDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "hidden";
            document.getElementById("searchUdhaarPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//**************************** Search Udhaar By Date **********************************************
function valSearchUdhaarByDateInputs(obj) {
    if (validateSelectField(document.search_udhaar_panel.dayDD.value, "Please select Day in Date!") == false) {
        document.search_udhaar_panel.dayDD.focus();
        return false;
    } else if (validateSelectField(document.search_udhaar_panel.monthMonth.value, "Please select Month in Date!") == false) {
        document.search_udhaar_panel.monthMonth.focus();
        return false;
    } else if (validateSelectField(document.search_udhaar_panel.yearYYYY.value, "Please select Year in Date!") == false) {
        document.search_udhaar_panel.yearYYYY.focus();
        return false;
    }
    return true;
}

function search_udhaar_by_date(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchUdhaarByDate;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchUdhaarByDate() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "hidden";
        document.getElementById("udhaarByDateSearchButt").style.visibility = "visible";
        document.getElementById("udhaarListPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "visible";
        document.getElementById("udhaarByDateSearchButt").style.visibility = "hidden";
    }
}
function searchUdhaarByDate(obj) {
    if (valSearchUdhaarByDateInputs(obj)) {
        var poststr = "dayDD=" + encodeURIComponent(document.search_udhaar_panel.dayDD.value)
                + "&monthMonth=" + encodeURIComponent(document.search_udhaar_panel.monthMonth.value)
                + "&yearYYYY=" + encodeURIComponent(document.search_udhaar_panel.yearYYYY.value);
        search_udhaar_by_date('include/php/omusdatd.php', poststr);
    }
}
//**************************** Search Udhaar By Fixed Amount *************************************
function valSearchUdhaarByFixedAmountInputs(obj) {
    if (validateEmptyField(document.srch_udhaar_fixedAmt.udhaarFixedAmt.value, "Please enter udhaar principal amount!") == false ||
            validateNum(document.srch_udhaar_fixedAmt.udhaarFixedAmt.value, "Accept only Numbers without space character!") == false) {
        document.srch_udhaar_fixedAmt.udhaarFixedAmt.focus();
        return false;
    }
    return true;
}

function search_udhaar_by_fixed_amount(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchUdhaarByFixedAmount;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchUdhaarByFixedAmount() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "hidden";
        document.getElementById("udhaarByFixedAmtSrchButt").style.visibility = "visible";
        document.getElementById("udhaarListPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "visible";
        document.getElementById("udhaarByFixedAmtSrchButt").style.visibility = "hidden";
    }
}
function searchUdhaarByFixedAmount(obj) {
    if (valSearchUdhaarByFixedAmountInputs(obj)) {
        var poststr = "udhaarFixedAmt=" + encodeURIComponent(document.srch_udhaar_fixedAmt.udhaarFixedAmt.value);
        search_udhaar_by_fixed_amount('include/php/omusfxam.php', poststr);
    }
}
//**************************** Search Udhaar By Fixed Amount Range ********************************
function valSearchUdhaarByAmountRangeInputs(obj) {
    if (validateSelectField(document.srch_udhaar_amtRange.udhaarAmtRange.value, "Please select amount range!") == false) {
        document.srch_udhaar_amtRange.udhaarAmtRange.focus();
        return false;
    }
    return true;
}

function search_udhaar_by_amt_range(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchUdhaarByAmountRange;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchUdhaarByAmountRange() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "hidden";
        document.getElementById("udhaarByAmtRangeSrchButt").style.visibility = "visible";
        document.getElementById("udhaarListPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "visible";
        document.getElementById("udhaarByAmtRangeSrchButt").style.visibility = "hidden";
    }
}
function searchUdhaarByAmountRange(obj) {
    if (valSearchUdhaarByAmountRangeInputs(obj)) {
        var poststr = "udhaarAmtRange=" + encodeURIComponent(document.srch_udhaar_amtRange.udhaarAmtRange.value);
        search_udhaar_by_amt_range('include/php/omusamrg.php', poststr);
    }
}
//**************************** Search Udhaar By Customized Amount Range ********************************
function valSearchUdhaarByCustomAmountRangeInputs(obj) {
    if (validateEmptyField(document.srch_udhaar_customAmtRange.udhaarCustomAmtStartRange.value, "Please enter start range!") == false ||
            validateNum(document.srch_udhaar_customAmtRange.udhaarCustomAmtStartRange.value, "Accept only Numbers without space character!") == false) {
        document.srch_udhaar_customAmtRange.udhaarCustomAmtStartRange.focus();
        return false;
    } else if (validateEmptyField(document.srch_udhaar_customAmtRange.udhaarCustomAmtEndRange.value, "Please enter end range!") == false ||
            validateNum(document.srch_udhaar_customAmtRange.udhaarCustomAmtEndRange.value, "Accept only Numbers without space character!") == false) {
        document.srch_udhaar_customAmtRange.udhaarCustomAmtEndRange.focus();
        return false;
    }
    return true;
}

function search_udhaar_by_amt_custom_range(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchUdhaarByCustomAmountRange;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchUdhaarByCustomAmountRange() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "hidden";
        document.getElementById("udhaarByCustomAmtRangeSrchButt").style.visibility = "visible";
        document.getElementById("udhaarListPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "visible";
        document.getElementById("udhaarByCustomAmtRangeSrchButt").style.visibility = "hidden";
    }
}
function searchUdhaarByCustomAmountRange(obj) {
    if (valSearchUdhaarByCustomAmountRangeInputs(obj)) {
        var poststr = "startRange=" + encodeURIComponent(document.srch_udhaar_customAmtRange.udhaarCustomAmtStartRange.value)
                + "&endRange=" + encodeURIComponent(document.srch_udhaar_customAmtRange.udhaarCustomAmtEndRange.value);
        search_udhaar_by_amt_custom_range('include/php/omuscuam.php', poststr);
    }
}
//**************************** Search Girvi By City ********************************
function valSearchGirviByCityInputs(obj) {
    if (validateSelectField(document.search_girvi_by_city.searchGirviCity.value, "Please select Girvi City / Village!") == false) {
        document.search_girvi_by_city.searchGirviCity.focus();
        return false;
    }
    return true;
}

function search_girvi_by_city(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchGirviByCity;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchGirviByCity() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
        document.getElementById("girviByCitySearchButt").style.visibility = "visible";
        document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        document.getElementById("girviByCitySearchButt").style.visibility = "hidden";
    }
}
function searchGirviByCity(obj) {
    if (valSearchGirviByCityInputs(obj)) {
        var poststr = "girviSearchCity=" + encodeURIComponent(document.search_girvi_by_city.searchGirviCity.value);
        search_girvi_by_city('include/php/orgscitd.php', poststr);
    }
}
//**************************** Search Udhaar By City ********************************
function valSearchUdhaarByCityInputs(obj) {
    if (validateSelectField(document.search_udhaar_by_city.searchUdhaarCity.value, "Please select Udhaar City / Village!") == false) {
        document.search_udhaar_by_city.searchUdhaarCity.focus();
        return false;
    }
    return true;
}

function search_udhaar_by_city(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchUdhaarByCity;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchUdhaarByCity() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "hidden";
        document.getElementById("udhaarByCitySearchButt").style.visibility = "visible";
        document.getElementById("udhaarListPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadShowSearchUdhaarDiv").style.visibility = "visible";
        document.getElementById("udhaarByCitySearchButt").style.visibility = "hidden";
    }
}
function searchUdhaarByCity(obj) {
    if (valSearchUdhaarByCityInputs(obj)) {
        var poststr = "searchOption=" + encodeURIComponent(document.search_udhaar_by_city.searchUdhaarCity.value);
        search_udhaar_by_city('include/php/omusctdv.php', poststr);
    }
}
//**************************** Search Customer To Add Girvi **********************************
function valSearchCustFirstNameToAddGirvi(custFirstName) {
    if (custFirstName == "Enter Customer First Name") {
        alert("Please enter Customer First Name!");
        document.getElementById("custFirstName").focus();
        return false;
    }
    return true;
}

function search_cust_fname_to_add_girvi(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchCustFNameToAddGirvi;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchCustFNameToAddGirvi() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
        document.getElementById("custListForAddGirviDiv").innerHTML = xmlhttp.responseText;
        //searchCityForPanelBlank();
    } else {
        document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    }
}
/*****************Start to add code to show print button @AUTHOR: SANDY7OCT13*************************/
function searchCustToAddGirvi(custFName, custLName, custFatherOrSpouseName, custCity, custMobNo, custFirmId) {

    document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    //document.getElementById('printButt').style.visibility = "visible";
    if (true) {

        var poststr = "custFName=" + encodeURIComponent(custFName)
                + "&custLName=" + encodeURIComponent(custLName)
                + "&custFatherOrSpouseName=" + encodeURIComponent(custFatherOrSpouseName)
                + "&custCity=" + encodeURIComponent(custCity)
                + "&custMobNo=" + encodeURIComponent(custMobNo)
                + "&custFirmId=" + encodeURIComponent(custFirmId);
        //alert(poststr);
        search_cust_fname_to_add_girvi('include/php/omccscag.php', poststr);
    } else {
        document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
    }
}
/*****************End to add code to show print button @AUTHOR: SANDY7OCT13*************************/
//************************** Search City TO Add Girvi
/***********Start Code To Add Div For Add New Customer @AUTHOR:PRIYA21MAY13********/
var keyCode;
var panelNameToAddCustCity;
function search_city_for_panel(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchCityForPanel;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchCityForPanel() {
    if (panelNameToAddCustCity == 'addNewCustomer') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
            document.getElementById("cityListDivToAddNewCust").innerHTML = xmlhttp.responseText;
            if (keyCode == 40 || keyCode == 38) {
                document.getElementById('custCityForAddNewCustSelect').focus();
                document.getElementById('custCityForAddNewCustSelect').options[0].selected = true;
            }
        } else {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
        }
    } else if (panelNameToAddCustCity == 'directAddCust') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
            document.getElementById("cityListDivToAddGirvi").innerHTML = xmlhttp.responseText;
            if (keyCode == 40 || keyCode == 38) {
                document.getElementById('custCityForAddGirviSelect').focus();
                document.getElementById('custCityForAddGirviSelect').options[0].selected = true;
                //document.getElementById('custCityForAddGirvi').value = document.getElementById('custCityForAddGirviSelect').options[0].value;
                //document.getElementById('custCityForAddGirvi').focus();
            }
            searchCustToAddGirvi(document.getElementById('custFirstNameForAddGirvi').value,
                    document.getElementById('custLastNameForAddGirvi').value,
                    document.getElementById('custFatherNameForAddGirvi').value,
                    document.getElementById('custCityForAddGirvi').value,
                    document.getElementById('mobileNoToAddGirvi').value,
                    document.getElementById('girviFirmId').value);
        } else {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
        }
    }
}
function searchCityForPanel(custCity, keyCodeInput, panelName) {
    keyCode = keyCodeInput;
    panelNameToAddCustCity = panelName;
    document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    var poststr = "custCity=" + encodeURIComponent(custCity) +
            "&panelName=" + encodeURIComponent(panelName);
    search_city_for_panel('include/php/omvvgtcg.php', poststr);
}
//************************** Search City TO Add Girvi Blank Panel



function searchCityForGoogleSugg(custCity, keyCodeInput, panelName) {
    keyCode = keyCodeInput;
    panelNameToAddCustCity = panelName;
    document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    var poststr = "custCity=" + encodeURIComponent(custCity) +
            "&panelName=" + encodeURIComponent(panelName);
    search_city_for_panel('include/php/omInputFieldGoogleSuggestion.php', poststr);
}
//************************** this function created by deepesh for Search City on 13-3-18




var cityNameForPanelBlank;
function search_city_for_panel_blank(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchCityForPanelBlank;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchCityForPanelBlank() {
    if (cityNameForPanelBlank == 'addNewCustomer') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
            document.getElementById("cityListDivToAddNewCust").innerHTML = xmlhttp.responseText;
            // document.getElementById("city").focus(); //Start Code To Hide @Author:PRIYA24AUG13
        } else {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
        }
    } else if (cityNameForPanelBlank == 'directAddCust') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
            //document.getElementById("cityListDivToAddGirvi").innerHTML = xmlhttp.responseText;
            document.getElementById("custCityForAddGirvi").focus();
            searchCustToAddGirvi(document.getElementById('custFirstNameForAddGirvi').value,
                    document.getElementById('custLastNameForAddGirvi').value,
                    document.getElementById('custFatherNameForAddGirvi').value,
                    document.getElementById('custCityForAddGirvi').value,
                    document.getElementById('mobileNoToAddGirvi').value,
                    document.getElementById('girviFirmId').value);
            document.getElementById("cityListDivToAddGirvi").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
        }
    } else if (cityNameForPanelBlank == 'blank') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
            document.getElementById("cityListDivToAddGirvi").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
        }
    }
}
function searchCityForPanelBlank(divName) {
    cityNameForPanelBlank = divName;
    document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    var poststr = "";
    search_city_for_panel_blank('include/php/ombbblnk.php', poststr);
}
/***********End Code To Add Div For Add New Customer @AUTHOR:PRIYA21MAY13********/
//**************************** Navigate Expiry Girvi Panel *******************************************************************
function showExpiredGirviListPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgpexgl.php", true);
    xmlhttp.send();
}
//**************************** Navigate TP Expiry Girvi Panel *******************************************************************
function showTPExpiredGirviListPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgptpexgl.php", true);
    xmlhttp.send();
}
//**************************** Navigate Girvi Panel *******************************************************************
function showReleasedGirviListPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgpregl.php", true);
    xmlhttp.send();
}
//**************************** Navigate Loss Girvi Panel *******************************************************************
function showLossGirviListPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgplglp.php", true);
    xmlhttp.send();
}
//**************************** Navigate Loans List Panel *******************************************************************
function showLoansListPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgpllpn.php", true);
    xmlhttp.send();
}
//**************************** Search Expiry Girvi Panel *******************************************************************
function searchExpGirviByFixedMonths(expGirviFrm, rowsPerPage) {
    loadXMLDoc();
    if (validateEmptyField(expGirviFrm.expGrvMonths.value, "Please enter Months!") == false ||
            validateNum(expGirviFrm.expGrvMonths.value, "Accept only Numbers!") == false) {
        expGirviFrm.expGrvMonths.focus();
    } else {
        var expMonths = expGirviFrm.expGrvMonths.value;
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
                document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/orgpexgl.php?expMonths=" + expMonths + "&rowsPerPage=" + rowsPerPage, true);
        xmlhttp.send();
    }
}
//**************************** Navigate Released Girvi Panel *******************************************************************
//********code modified for search option by  @AUTHOR: LINA27JUN2013*******
function navigationReleasedGirviListPanel(pageNo, selFirmId, sortKeyword, rowsPerPage, searchColumn, searchValue)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/orgpregl.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&rowsPerPage=" + rowsPerPage + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue, true);
    xmlhttp.send();
}
//**************************** Navigate Loss Girvi Panel *******************************************************************
//********code modified for search option by  @AUTHOR: LINA27JUN2013*******
/***********************Start Code To Add PageNo @Author:PRIYA14JUL13************************/
function navigationLossGirviListPanel(button, offset, totalGirviProcessed, maxLimit, maxLimitProcess, selFirmId, sortKeyword, rowsPerPage, pageNo, searchColumn, searchValue) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/orgplglp.php?button=" + button + "&offset=" + offset + "&totalGirviProcessed=" + totalGirviProcessed + "&maxLimit=" + maxLimit + "&maxLimitProcess=" + maxLimitProcess +
            "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&rowsPerPage=" + rowsPerPage + "&page=" + pageNo + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue, true);
    xmlhttp.send();
}
/***********************End Code To Add PageNo @Author:PRIYA14JUL13************************/
/***********************Start Code To Add PageNo @Author:PRIYA14JUL13************************/
function navigationLoansListPanel(button, offset, totalGirviProcessed, maxLimit, maxLimitProcess, selFirmId, sortKeyword, rowsPerPage, pageNo, searchColumn, searchValue) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/orgpllpn.php?button=" + button + "&offset=" + offset + "&totalGirviProcessed=" + totalGirviProcessed + "&maxLimit=" + maxLimit + "&maxLimitProcess=" + maxLimitProcess +
            "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&rowsPerPage=" + rowsPerPage + "&page=" + pageNo + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue, true);
    xmlhttp.send();
}
/***********************End Code To Add PageNo @Author:PRIYA14JUL13************************/
//**************************** Navigate Girvi List Panel By Fixed Amount ****************************************
function navigationGirviListPanelByFixedAmount(pageNo, grvFixedAmt) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/olgsfxad.php?page=" + pageNo + "&grvFixedAmt=" + grvFixedAmt, true); //change in filename @AUTHOR: SANDY21NOV13
    xmlhttp.send();
}
//**************************** Navigate Girvi List Panel By Amount Range ****************************************
function navigationGirviListPanelByAmtRange(pageNo, grvAmtRange) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/orgsamrd.php?page=" + pageNo + "&grvAmtRange=" + grvAmtRange, true);
    xmlhttp.send();
}
//**************************** Navigate Girvi List Panel By Custom Amount Range ****************************************
function navigationGirviListPanelByCustomAmtRange(pageNo, startRange, endRange) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/orgscard.php?page=" + pageNo + "&startRange=" + startRange + "&endRange=" + endRange, true);
    xmlhttp.send();
}
//**************************** Navigate Girvi List Panel By Date ****************************************
function navigationGirviListPanelByDate(pageNo, dayDD, monthMonth, yearYYYY) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/olgsdatd.php?page=" + pageNo + "&dayDD=" + dayDD + "&monthMonth=" + monthMonth + "&yearYYYY=" + yearYYYY, true); //change in filename @AUTHOR: SANDY21NOV13
    xmlhttp.send();
}
//**************************** Get Father Name Label Div *****************************************
/*******Start Code To Add Placeholder @AUTHOR:PRIYA06APR13*********/
function getFatherNameLabel(fatherOrSpouseNameLabel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("fatherOrSpouseNameDiv").innerHTML = xmlhttp.responseText;
            getSexRadioLabelToAddGirvi(fatherOrSpouseNameLabel);
            document.getElementById("fatherOrSpouseNameLabel").focus();
            document.getElementById("custFatherNameForAddGirvi").placeholder = 'Customer Father Name';
        } else {
            document.getElementById("fatherOrSpouseNameDiv").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/omccfnld.php", true);
    xmlhttp.send();
}
//**************************** Get Spouse Name Label Div *****************************************
function getSpouseNameLabel(fatherOrSpouseNameLabel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("fatherOrSpouseNameDiv").innerHTML = xmlhttp.responseText;
            getSexRadioLabelToAddGirvi(fatherOrSpouseNameLabel);
            document.getElementById("fatherOrSpouseNameLabel").focus();
            document.getElementById("custFatherNameForAddGirvi").placeholder = 'Customer Spouse Name';
        } else {
            document.getElementById("fatherOrSpouseNameDiv").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/omccspnl.php", true);
    xmlhttp.send();
}
/*******End Code To Add Placeholder @AUTHOR:PRIYA06APR13*********/
//**************************** Get Sex Radio Label Div *****************************************
/*************Start code to add indiac @Author:PRIYA06JUN14********************/
function getSexRadioLabelToAddGirvi(fatherOrSpouseNameLabel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("sexToAddGirviDiv").innerHTML = xmlhttp.responseText;
        } else {
            //            document.getElementById("sexToAddGirviDiv").innerHTML = "<img src='images/ajaxLoad.gif' />";
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (fatherOrSpouseNameLabel == 'S/o') {
        custSex = 'M';
        document.getElementById("fatherOrSpouseNameIndicator").value = 'S';
    } else if (fatherOrSpouseNameLabel == 'C/o') {
        custSex = 'M';
        document.getElementById("fatherOrSpouseNameIndicator").value = 'C';
    } else if (fatherOrSpouseNameLabel == 'W/o') {
        custSex = 'F';
        document.getElementById("fatherOrSpouseNameIndicator").value = 'W';
    } else if (fatherOrSpouseNameLabel == 'D/o') {
        custSex = 'F';
        document.getElementById("fatherOrSpouseNameIndicator").value = 'D';
    }
    xmlhttp.open("POST", "include/php/omccgsrb.php?custSex=" + custSex, true);
    xmlhttp.send();
}
/*************End code to add indiac @Author:PRIYA06JUN14********************/
//**************************** Get Girvi Info Pop UP *****************************************
function getGirviInfoPopUp(custId, girviId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("display_girvi_info_popup").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("display_girvi_info_popup").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/olggipop.php?custId=" + custId + "&girviId=" + girviId, true); //change in filename @AUTHOR: SANDY22NOV13
    xmlhttp.send();
}
//**************************** Get Girvi Info Pop UP *****************************************
/****************************START Code To Add Girvi Id @AUTHOR:PRIYA27FEB13 *****************************************/
function getGirviInfoPopUpInCustHome(custId, girviId, documentRootPath) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            parent.document.getElementById("display_girvi_info_popup" + girviId).innerHTML = xmlhttp.responseText;
        } else {
            parent.document.getElementById("display_girvi_info_popup" + girviId).innerHTML = "<img src='http://" + documentRootPath + "/images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/olggipop.php?custHome=Yes&custId=" + custId + "&girviId=" + girviId, true); //change in filename @AUTHOR: SANDY22NOV13
    xmlhttp.send();
}
/****************************END Code To Add Girvi Id @AUTHOR:PRIYA27FEB13 *****************************************/
//**************************** Hide Girvi Info POP UP in Cust Home Panel *****************************************
/****************************START Code To Add Girvi Id @AUTHOR:PRIYA27FEB13 *****************************************/
function getGirviInfoPopUpHideInCustHome(girviId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("display_girvi_info_popup" + girviId).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("display_girvi_info_popup" + girviId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
/****************************END Code To Add Girvi Id @AUTHOR:PRIYA27FEB13 *****************************************/
//**************************** Hide Girvi Info POP UP *****************************************
function getGirviInfoPopUpHide(girviId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("display_girvi_info_popup").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("display_girvi_info_popup").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//**************************** Get Balance Sheet ********************************
/*********Start Code To Change Function Name BalnceSheet To Girvi Ledger @AUTHOR:PRIYA15MAR13***********/
function valGetGirviLedgerInputs() {
    if (validateSelectField(document.get_balance_sheet_form.balanceSheetYear.value, "Please select Year!") == false) {
        document.get_balance_sheet_form.balanceSheetYear.focus();
        return false;
    } else if (validateSelectField(document.get_balance_sheet_form.balanceSheetMonth.value, "Please select Month!") == false) {
        document.get_balance_sheet_form.balanceSheetMonth.focus();
        return false;
    }
    return true;
}
/**************Start Code To Add PanelName and Change FileName @AUTHOR:PRIYA09JUNE13*************/
/**************Start Code To Add Gold & Silver Panel Name @AUTHOR:PRIYA19JUNE13***************/
/**************Start Code To Add Panel Name For Udhaar Ledger @AUTTHOR:PRIYA21JUNE13**********/
/**************Start Code To Change Div Name @Author:PRIYA24JUL13*****************************/
/**************Start code to add Int panel @Author:PRIYA18FEB14**********************/
/**************Start code to add panel @Author:PRIYA31MAR14*****************/
/**************Start code to add panel @Author:SHE20OCT15*****************/
function getGirviLedger(panelName) {
    if (valGetGirviLedgerInputs()) {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                var year = document.get_balance_sheet_form.balanceSheetYear.value;
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("finStartYearDiv").innerHTML = parseInt(year);
                document.getElementById("finEndYearDiv").innerHTML = parseInt(year) + 1;
                if (panelName == 'OMREVO') {
                    document.getElementById("girviLedgerDetails").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'GOLD') {
                    document.getElementById("goldLedgerDetails").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'SILVER') {
                    document.getElementById("silverLedgerDetails").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'UdhaarLedger') {
                    document.getElementById("udhaarLedgerDetails").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'TransGirvi') { // FOR transferred girvi ledger @AUTHOR: SANDY6AUG13
                    document.getElementById("girviTransLedgerDetails").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'LoanInt') {
                    document.getElementById("loanIntLedgerDetails").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'commomLedger') {
                    document.getElementById("comLedgerDetails").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'TAX') {
                    document.getElementById("taxLedgerDetails").innerHTML = xmlhttp.responseText;
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        var poststr = "balanceSheetYear=" + encodeURIComponent(document.get_balance_sheet_form.balanceSheetYear.value)
                + "&balanceSheetMonth=" + encodeURIComponent(document.get_balance_sheet_form.balanceSheetMonth.value)
                + "&firmId=" + encodeURIComponent(document.getElementById("girviLedgerFirmName").value);
        if (panelName == 'OMREVO') {
            xmlhttp.open("POST", "include/php/orbbblsh.php?" + poststr, true);
        } else if (panelName == 'GOLD') {
            xmlhttp.open("POST", "include/php/ogbbgdbs.php?" + poststr, true);
        } else if (panelName == 'SILVER') {
            xmlhttp.open("POST", "include/php/ogbbslbs.php?" + poststr, true);
        } else if (panelName == 'UdhaarLedger') {
            xmlhttp.open("POST", "include/php/ombbuubs.php?" + poststr, true);
        }//Udhaar Ledger FileName Changed @Author:PRIYA13AUG13 
        else if (panelName == 'TransGirvi')// FOR transferred girvi ledger @AUTHOR: SANDY6AUG13
        {
            xmlhttp.open("POST", "include/php/orbbtrgl.php?" + poststr, true);
        } else if (panelName == 'LoanInt') {
            xmlhttp.open("POST", "include/php/orbbinbs.php?" + poststr, true);
        } else if (panelName == 'commomLedger') {
            xmlhttp.open("POST", "include/php/ombbcmbs.php?" + poststr, true);
        } else if (panelName == 'TAX') {
            xmlhttp.open("POST", "include/php/ogbbtlbs.php?" + poststr, true);
        }
        xmlhttp.send();
    }
}
/**************End code to add panel @Author:PRIYA31MAR14*****************/
/**************End code to add Int panel @Author:PRIYA18FEB14**********************/
/**************End Code To Change Div Name @Author:PRIYA24JUL13*****************************/
/**************End Code To Add Panel Name For Udhaar Ledger @AUTTHOR:PRIYA21JUNE13**********/
/**************End Code To Add Gold & Silver Panel Name @AUTHOR:PRIYA19JUNE13***************/
/**************End Code To Add PanelName and Change FileName @AUTHOR:PRIYA09JUNE13*************/
/*********End Code To Change Function Name BalnceSheet To Girvi Ledger @AUTHOR:PRIYA15MAR13***********/
//**************************** Navigate Search Customer By Mobile No ************************************************************
/****************Start code to add date @Author:PRIYA23OCT13**********/
/****************Start code to add date @Author:PRIYA10DEC13*************/
function searchDailyDiaryDetails(ddDetVal, firmId, fromDay, fromMonth, fromYear, toDay, toMonth, toYear, ddPanelToShow, ddMainPanel) {
    if (valDailyDiaryInputs()) {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("dailyDiaryDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        var dailyDiaryFromDate = fromDay.value + '-' + fromMonth.value + '-' + fromYear.value;
        var dailyDiaryToDate = toDay.value + '-' + toMonth.value + '-' + toYear.value;
        xmlhttp.open("POST", "include/php/omddddandv.php?ddDetVal=" + ddDetVal + "&firmId=" + firmId + "&dailyDiaryFromDate=" + dailyDiaryFromDate + "&dailyDiaryToDate=" + dailyDiaryToDate + "&ddPanelToShow=" + ddPanelToShow + "&ddMainPanel=" + ddMainPanel, true);
        xmlhttp.send();
    }
}
/****************End code to add date @Author:PRIYA10DEC13*************/
//**************************** Show Paid Udhaar Details *****************************************
function showPaidUdhaarDetailsDiv(custId, firmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "hidden";
            document.getElementById("custUdhaarDetailsDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omuucpud.php?custId=" + custId + "&firmId=" + firmId, true);
    xmlhttp.send();
}
//**************************** Delete Udhaar Details *****************************************
/******************Start code to add udhaarJrnlId @Author:PRIYA12APR14***************/
/*********Start code to add var @Author:PRIYA14APR14************************/
function deleteCustUdhaarDetails(custId, firmId, udhaarId, udhaarJrnlId, uSerialNum, uDate, uAmt) {
//    alert(uAmt);
    document.getElementById("ajaxLoadUdhaarDepositMon" + udhaarId).style.visibility = "visible";
    confirm_box = confirm("Do you really want to Permanent Delete this Udhaar Details?");
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajaxLoadUdhaarDepositMon" + udhaarId).style.visibility = "hidden";
                document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("ajaxLoadUdhaarDepositMon" + udhaarId).style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omccdelc.php?custId=" + custId + "&firmId=" + firmId + "&udhaarId=" + udhaarId
                + "&udhaarJrnlId=" + udhaarJrnlId + "&uSerialNum=" + uSerialNum + "&uDate=" + uDate + "&uAmt=" + uAmt, true);
        xmlhttp.send();
    } else {
        document.getElementById("ajaxLoadUdhaarDepositMon" + udhaarId).style.visibility = "hidden";
    }
}
/*********End code to add var @Author:PRIYA14APR14************************/
/******************End code to add udhaarJrnlId @Author:PRIYA12APR14***************/
//**************************** Delete Udhaar Details from Uhaar Panel *****************************************
/*****************Start code to add page number @Author:PRIYA17JUN14*********/
function deleteCustUdhaarDetailsFromUdhaarPanel(custId, udhaarId, DeleteFrom, pageNum, uSerialNum, uDate, uAmt) {

    document.getElementById("udhaarDeleteFromUdhaarPanelButt" + udhaarId).innerHTML = "<img src='images/loading16.gif' />";
    confirm_box = confirm("Do you really want to Permanent Delete this Udhaar Details?");
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("udhaarDeleteFromUdhaarPanelButt" + udhaarId).innerHTML = "<img src='images/ajaxClose.png' />";
                document.getElementById("udhaarListPanelDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("udhaarDeleteFromUdhaarPanelButt" + udhaarId).innerHTML = "<img src='images/loading16.gif' />";
            }
        };
        xmlhttp.open("POST", "include/php/omccdelc.php?udhaarStatus=" + DeleteFrom + "&custId=" + custId + "&udhaarId=" + udhaarId + "&pageNum=" + pageNum
                + "&uSerialNum=" + uSerialNum + "&uDate=" + uDate + "&uAmt=" + uAmt, true);
        xmlhttp.send();
    } else {
        document.getElementById("udhaarDeleteFromUdhaarPanelButt" + udhaarId).innerHTML = "<img src='images/ajaxClose.png' />";
    }
}
/*****************End code to add page number @Author:PRIYA17JUN14*********/
//**************************** Delete Udhaar Deposit Details from Uhaar Panel *****************************************
/*********Start Code To Add uDepJrnlId @Author:PRIYA18AUG13*******************/
function deleteCustUdhaarDepDetailsFromUdhaarPanel(custId, udhaarDepId, DeleteFrom, uDepJrnlId) {

    document.getElementById("udhaarDeleteFromUdhaarDepPanelButt" + udhaarDepId).innerHTML = "<img src='images/loading16.gif' />";
    confirm_box = confirm("Do you really want to Permanent Delete this Udhaar Deposit Details?");
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("udhaarDeleteFromUdhaarDepPanelButt" + udhaarDepId).innerHTML = "<img src='images/ajaxClose.png' />";
                document.getElementById("udhaarListPanelDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("udhaarDeleteFromUdhaarDepPanelButt" + udhaarDepId).innerHTML = "<img src='images/loading16.gif' />";
            }
        };
        xmlhttp.open("POST", "include/php/omuddpam.php?udhaarStatus=" + DeleteFrom + "&custId=" + custId + "&udhaarDepId=" + udhaarDepId + "&uDepJrnlId=" + uDepJrnlId, true);
        xmlhttp.send();
    } else {
        document.getElementById("udhaarDeleteFromUdhaarDepPanelButt" + udhaarDepId).innerHTML = "<img src='images/ajaxClose.png' />";
    }
}
/*********End Code To Add uDepJrnlId @Author:PRIYA18AUG13*******************/
//**************************** Navigate Transaction List *****************************************
function navigateTransactionList(transactionCat) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNavigateTransactionList").style.visibility = "hidden";
            document.getElementById("transactionListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNavigateTransactionList").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omttlisd.php?transactionCat=" + transactionCat, true);
    xmlhttp.send();
}
//**************************** Delete Transaction Details *****************************************
/*************Change in function @AUTHOR: SANDY06JAN14*********/
/*************Start code to add transJrnlId @Author:PRIYA12APR14*********************/
/*************Start code to add var @Author:PRIYA14APR14*********************/
function deleteTransaction(transactionCat, transId, transJrnlId, transUId, transAmt, transDOB, transFirmId, transSub) {
    document.getElementById("deleteTransactionButt").innerHTML = "<img src='images/loading16.gif' />";
    confirm_box = confirm("Do you really want to Permanent Delete this Transaction Details?");
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("deleteTransactionButt").innerHTML = "<img src='images/ajaxClose.png' />";
                document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("deleteTransactionButt").innerHTML = "<img src='images/loading16.gif' />";
            }
        };
        xmlhttp.open("POST", "include/php/omtdtrns.php?transactionCat=" + transactionCat + "&transId=" + transId + "&transJrnlId=" + transJrnlId
                + "&transUId=" + transUId + "&transAmt=" + transAmt + "&transDOB=" + transDOB + "&transFirmId=" + transFirmId + "&transSub=" + transSub, true);
        xmlhttp.send();
    } else {
        document.getElementById("deleteTransactionButt").innerHTML = "<img src='images/ajaxClose.png' />";
    }
}
/*************End code to add var @Author:PRIYA14APR14*********************/
/*************End code to add transJrnlId @Author:PRIYA12APR14*********************/
/*************Change in function @AUTHOR: SANDY06JAN14*********/
//**************************** Get Girvi Info Pop UP *****************************************
function getGirviBarCodeSlip(custId, girviId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("display_girvi_barcode_slip").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("display_girvi_barcode_slip").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/olggbcsp.php?custId=" + custId + "&girviId=" + girviId, true); //change in filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
//**************************** Hide Girvi Info POP UP *****************************************
function getGirviBarCodeSlipHide() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("display_girvi_barcode_slip").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("display_girvi_barcode_slip").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//**************************** Search Bar Code Function *************************************
/****************** Start Code To Comment SellPurchase Item BarCode @AUTHOR:PRIYA07MArch13*********************/
/************Start code to add shortcut for cust email @Author:PRIYA25JUN14******************/
function valSearchBarCodeInputs(barCode) {

    var barCodeFirstLetter = barCode.substr(0, 1);

    if (validateEmptyField(barCode, "Please enter Bar Code 'or' Serial Number!") == false) {
        document.getElementById("barcode_text").focus();
        return false;
    } else {
        if (barCodeFirstLetter == 'S' || barCodeFirstLetter == 's' ||
                barCodeFirstLetter == 'J' || barCodeFirstLetter == 'j' ||
                barCodeFirstLetter == 'G' || barCodeFirstLetter == 'g' ||
                barCodeFirstLetter == 'T' || barCodeFirstLetter == 't' ||
                barCodeFirstLetter == 'C' || barCodeFirstLetter == 'c' ||
                barCodeFirstLetter == 'P' || barCodeFirstLetter == 'p' ||
                barCodeFirstLetter == 'A' || barCodeFirstLetter == 'a' ||
                barCodeFirstLetter == 'W' || barCodeFirstLetter == 'w' ||
                barCodeFirstLetter == 'E' || barCodeFirstLetter == 'e' ||
                barCodeFirstLetter == 'I' || barCodeFirstLetter == 'i' ||
                barCodeFirstLetter.toLowerCase(barCodeFirstLetter) == 'm' ||
                barCodeFirstLetter == 1 || barCodeFirstLetter == '1' ||
                barCodeFirstLetter == 2 || barCodeFirstLetter == '2' ||
                barCodeFirstLetter == 3 || barCodeFirstLetter == '3' ||
                barCodeFirstLetter == 4 || barCodeFirstLetter == '4' ||
                barCodeFirstLetter == 5 || barCodeFirstLetter == '5') {
            return true;
        } else {
            alert("Please enter correct Bar Code 'or' Serial Number!");
            document.getElementById("barcode_text").focus();
            return false;
        }
    }
    return true;
}

function search_bar_code(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchBarCode;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchBarCode() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        document.getElementById("barcode_text").value = '';
        document.getElementById("barcode_text").focus();
        //refreshMainRightDiv();
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/* Start change in function searchBarCode @AUTHOR: SANDY29JUL13 */
/***************Start code to add item barcode @Author:PRIYA30NOV13***************/
function searchBarCode(barCode) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    var poststr;
    var barCodeLen = barCode.length;
    var barCodeTemp = barCode;
    var tempLen = barCodeLen;
    var charLen = 0;
    var alphaExp = /^[a-zA-Z]+$/;
    while (tempLen > 0) {

        field = barCodeTemp.substr(0, 1);
        barCodeTemp = barCodeTemp.substr(1);
        if (field.match(alphaExp)) {
            charLen = charLen + 1;
        } else {
            break;
        }
        tempLen = tempLen - 1;
    }

    var barCodeFirstLetter = barCode.substr(0, 1);
    var barCodeCharPart = barCode.substr(0, charLen);
    var barCodeNumPart = barCode.substr(charLen);

    var girviSerialNo = barCode.substr(1);
    girviPoststr = "grvSerialNo=" + encodeURIComponent(girviSerialNo); //Serach Girvi

    poststr = "preId=" + encodeURIComponent(barCodeCharPart) +
            "&postId=" + encodeURIComponent(barCodeNumPart);

    if (valSearchBarCodeInputs(barCode, barCodeCharPart)) {
        if (barCodeFirstLetter == 'S' || barCodeFirstLetter == 's') {
            search_bar_code('include/php/olgssndv.php', girviPoststr); //change in filename @AUTHOR: SANDY21NOV13
        } else if (barCodeFirstLetter == 'G' || barCodeFirstLetter == 'g') {
            poststr = "girviId=" + encodeURIComponent(barCodeNumPart);
            search_bar_code('include/php/olgsgidd.php', poststr); //change in filename @AUTHOR: SANDY22NOV13
        } else if (barCodeFirstLetter == 'T' || barCodeFirstLetter == 't') {
            search_bar_code('include/php/olgtsrch.php', poststr + "&searchPanel=TransLoanSearch"); //change in filename @AUTHOR: SANDY22NOV13//filename added @Author:PRIYA12NOV14
        } else if (barCodeFirstLetter == 'C' || barCodeFirstLetter == 'c') {
            search_bar_code('include/php/omcdccdd.php', poststr);
        } else if (barCodeFirstLetter == 'P' || barCodeFirstLetter == 'p') {
            search_bar_code('include/php/ogidsbdv.php', poststr);
        } else if (barCodeFirstLetter == 'A' || barCodeFirstLetter == 'a') {
            search_bar_code('include/php/ogijdsbdv.php', poststr);
        } else if (barCodeFirstLetter == 'W' || barCodeFirstLetter == 'w') {
            search_bar_code('include/php/ogwhmndv.php', poststr);
        } else if (barCodeFirstLetter == 'E' || barCodeFirstLetter == 'e') {
            search_bar_code('include/php/omehmndv.php', poststr);
        } else if ((barCodeFirstLetter == 'A' || barCodeFirstLetter == 'a' || barCodeFirstLetter == 2 || barCodeFirstLetter == 3) && barCodeNumPart != '') {
            poststr = "ItemId=" + encodeURIComponent(barCodeNumPart);
            search_bar_code('include/php/ogijdsbdv.php', poststr);
        } else if ((barCodeFirstLetter == 'I' || barCodeFirstLetter == 'i' || barCodeFirstLetter == 1) && barCodeNumPart != '') {
            poststr = "ItemId=" + encodeURIComponent(barCodeNumPart);
            search_bar_code('include/php/ogidsbdv.php', poststr);
        } else if ((barCodeFirstLetter == 'J' || barCodeFirstLetter == 'j' || barCodeFirstLetter == 4 || barCodeFirstLetter == 5) && barCodeNumPart != '') {
            search_bar_code("include/php/ogcrisbd.php?preId=" + encodeURIComponent(barCodeCharPart) +
                    "&postId=" + encodeURIComponent(barCodeNumPart), +poststr);
        } else if (barCodeFirstLetter.toLowerCase(barCodeFirstLetter) == 'm' || barCodeFirstLetter.toLowerCase(barCodeFirstLetter) == 'M') {
            search_bar_code('include/php/omccsccl.php', poststr + "&searchPanel=" + 'EmailSearch');
        }
        else if (barCodeFirstLetter == 'IS') {
            window.open('http://<?php echo $documentRootBSlash; ?>/include/php/ogspinvo.php?userId=<?php echo "$custId"; ?>&slPrPreInvoiceNo=<?php echo "$slPrPreInvoiceNo"; ?>&slPrInvoiceNo=<?php echo "$slPrInvoiceNo"; ?>&slprinSubPanel=<?php echo "$slprinSubPanel"; ?>&invoiceDate=<?php echo "$slPrAddDate"; ?>&invoicePanel=formatA41',
                    'popup', 'width=850,height=850,scrollbars=yes,resizable=yes,toolbar=no,directories=no,location=no,menubar=no,status=no,left=0,top=0');
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    }
}
/************End code to add shortcut for cust email @Author:PRIYA25JUN14******************/
/*************** End code to add item barcode @Author:PRIYA30NOV13***************/
/* End change in function searchBarCode @AUTHOR: SANDY29JUL13 */
/******************** End Code To Comment SellPurchase Item BarCode @AUTHOR:PRIYA07MArch13**********************/
//********** Start Bar Code Print Panel Swapping *************************************************************/
var setBarCodeSlipDiv = '';
var setBarCodeSlipContainer = '';
var setBarCodeSlipContainer2 = '';
var setCloseDiv = '';
var setCloseContainer = '';
var setCloseContainer2 = '';
function moveBarCodeSlip(barCodeSlipDiv, closeDivId) {
    if (setBarCodeSlipDiv == '') {

        setBarCodeSlipDiv = barCodeSlipDiv;
        setCloseDiv = closeDivId;
        setBarCodeSlipContainer = document.getElementById(setBarCodeSlipDiv).innerHTML;
        setCloseContainer = document.getElementById(setCloseDiv).innerHTML;
        document.getElementById(closeDivId).innerHTML = "<img src='images/loading16.gif' />";
    } else if (barCodeSlipDiv != setBarCodeSlipDiv) {
        setBarCodeSlipContainer2 = document.getElementById(barCodeSlipDiv).innerHTML;
        setCloseContainer2 = document.getElementById(closeDivId).innerHTML;
        document.getElementById(barCodeSlipDiv).innerHTML = setBarCodeSlipContainer;
        document.getElementById(setBarCodeSlipDiv).innerHTML = setBarCodeSlipContainer2;
        document.getElementById(closeDivId).innerHTML = setCloseContainer;
        document.getElementById(setCloseDiv).innerHTML = setCloseContainer2;
        setBarCodeSlipDiv = '';
        setBarCodeSlipContainer = '';
        setBarCodeSlipContainer2 = '';
        setCloseDiv = '';
        setCloseContainer = '';
        setCloseContainer2 = '';
    }
}
//End Bar Code Print Panel Swapping
//
//Close Girvi Bar Code SLip *************************************************************************
function closeBarCodeSlip(barCodeSlipDiv, closeDivId, barCodePrintId) {
    confirm_box = confirm("Do you really want to Delete this Bar Code Girvi Slip?");
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById(closeDivId).innerHTML = xmlhttp.responseText;
                document.getElementById(barCodeSlipDiv).innerHTML = "";
                window.setTimeout(closeBarCodeSlipCloseButt, 1000);
            } else {
                document.getElementById(closeDivId).innerHTML = "<img src='images/loading16.gif' />";
            }
        };
        xmlhttp.open("POST", "include/php/olgrbcpp.php?barCodePrintId=" + barCodePrintId, true); //change in filename @AUTHOR: SANDY21NOV13
        xmlhttp.send();
    }

    function closeBarCodeSlipCloseButt()
    {
        document.getElementById(closeDivId).innerHTML = "";
    }
}
// add Function
function getBarcodeProdName(ProdName, id, div, panel) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //alert(xmlhttp.responseText);
            document.getElementById(div).innerHTML = xmlhttp.responseText;
            if (keyCodeInput == 40 || keyCodeInput == 38) {
                document.getElementById('selectItembyname').focus();
                document.getElementById('selectItembyname').options[0].selected = true;
            }
        }
    };
    xmlhttp.open("POST", "include/php/ogibbc20x12GetProdNm.php?prodname=" + ProdName + "&id=" + id + "&div=" + div + "&panel=" + panel, true);
    xmlhttp.send();
}
// start  Code For SOrt by Product Nname On multi lable Panel////
function sendProdName(ProdName) {
    //alert(ProdName);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //alert(xmlhttp.responseText);
            document.getElementById('SortByProdName').innerHTML = xmlhttp.responseText;

        }
    };


//    xmlhttp.open("POST", "include/php/ogibbc20x12.php?prodname=" + ProdName, true);
    xmlhttp.open("POST", "include/php/omstockTransibbc20x12.php?prodname=" + ProdName, true);
    xmlhttp.send();
}


function sendProdId(ProdName, panel) {
    //alert(ProdName);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //alert(xmlhttp.responseText);
            document.getElementById('SortByProdName').innerHTML = xmlhttp.responseText;

        }
    };


    xmlhttp.open("POST", "include/php/ogibbc55x13.php?prodid=" + ProdName + "&panel=" + panel, true);
    xmlhttp.send();
}
// End Code For Sort By Product Name On Multilable//////
function directPRNPrint(panel, page)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //document.getElementById("mainSelectDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'Items55x13IMBarCodePanel')
        xmlhttp.open("GET", "include/php/omstockTransibbc55x13imidv.php?printOption=directPRNPrint&panel=" + panel + "&page=" + page, true);
    else
        xmlhttp.open("GET", "include/php/omstockTransibbc55x13dv.php?printOption=directPRNPrint&panel=" + panel + "&page=" + page, true);
    xmlhttp.send();
}
//****************************************************************************************************************
//Print BarCode SLips A4 Sheet
function printBarCodeA4Sheet(obj) {

    var DocumentContainer = document.getElementById(obj);
    var html = '<html><head><title>Online Munim - Print Page    www.OnlineMunim.com     www.omunim.com</title>' +
            '<link href="css/index.css" rel="stylesheet" type="text/css" />' +
            '<link href="css/ogcss.css" rel="stylesheet" type="text/css" />' +
            '<link href="css/orcss.css" rel="stylesheet" type="text/css" />' +
            '<script type="text/javascript" src="scripts/emNavigation.js"></script>' +
            '<script type="text/javascript" src="scripts/ogNavFunctions.js"></script>' +
            '</head><body>' +
            DocumentContainer.innerHTML +
            '<br />' +
            '<a style="cursor: pointer;" onClick="window.print();" class="noPrint"><img src="images/printer32.png" alt="Print" title="Print" width="32px" height="32px" /></a>' +
            '<br />' +
            '<br />' +
            '</body></html>';
    var WindowObject = window.open("", "PrintWindow", "width=1000,height=1000,top=120,left=120,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.open();
    WindowObject.document.writeln(html);
    WindowObject.document.close();
    WindowObject.focus();
}
//********* Ads Navigation *****
var adnum = 6;
function adsNavigation() {
    if (adnum == 6) {
        url = "<a href='http://www.onlinemunim.com' target='_blank'><img src='images/ads/kirana-store-software.png' /></a>";
        adnum = 1;
    } else if (adnum == 5) {
        url = "<a href='http://www.softwaregen.com' target='_blank'><img src='images/ads/website-design-softwaregen.png' /></a>";
        adnum = adnum + 1;
    } else if (adnum == 4) {
        url = "<a href='http://www.onlinemunim.com' target='_blank'><img src='images/ads/mobile-shop-software.png' /></a>";
        adnum = adnum + 1;
    } else if (adnum == 3) {
        url = "<a href='http://www.softwaregen.com' target='_blank'><img src='images/ads/web-hosting-softwaregen.png' /></a>";
        adnum = adnum + 1;
    } else if (adnum == 2) {
        url = "<a href='http://www.onlinemunim.com' target='_blank'><img src='images/ads/ready-made-garments-billing-software.png' /></a>";
        adnum = adnum + 1;
    } else if (adnum == 1) {
        url = "<a href='http://www.omunim.com/' target='_blank'><img src='images/ads/medical-store-billing-software.png' /></a>";
        adnum = adnum + 1;
    } else {
        url = "<a href='http://www.softwaregen.com' target='_blank'><img src='images/ads/softwaregen-offers.png' /></a>";
        adnum = adnum + 1;
    }
    var element = document.getElementById('newOmunimAdsDiv');
    //
    if (typeof (element) != 'undefined' && element != null)
    {
        document.getElementById('newOmunimAdsDiv').innerHTML = url;
    }
    setTimeout("adsNavigation()", 4000);
}
//********* Ads Navigation *****
var adMainIntroNum = 1;
function adsMainIntroNavigation() {
    var url = "<img src='images/oMunimIntro" + adMainIntroNum + ".png' alt='Welcome to oMunim Girvi Software' />";
    var element = document.getElementById('oMunimIntroAdsDiv');
    //
    if (typeof (element) != 'undefined' && element != null)
    {
        document.getElementById('oMunimIntroAdsDiv').innerHTML = url;
    }
    //document.getElementById('oMunimIntroAdsDiv').innerHTML = url;
    if (adMainIntroNum == 3) {
        adMainIntroNum = adMainIntroNum - 2;
    } else {
        adMainIntroNum = adMainIntroNum + 1;
    }
    setTimeout("adsMainIntroNavigation()", 5000);
}
//**************************** Display Transfer Girvi Panel *****************************************
function getGirviTransPanel(documentRootPath, girviId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //document.getElementById("display_girvi_transfer_div").style.visibility = "visible";
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText; //change in division @AUTHOR: SANDY28NOV13
        } else {
            //document.getElementById("display_girvi_transfer_div").style.visibility = "visible";
            //document.getElementById("display_girvi_transfer_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/olgggtpn.php?girviId=" + girviId, true); //change in filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
//**************************** Hide Girvi Info POP UP *****************************************
function hideGirviTransPanel(documentRootPath) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("display_girvi_transfer_div").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("display_girvi_transfer_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//**************************** Display Transfer Girvi Details *****************************************
/****************Start Code To Pass xmlhttpStr as responseText @Author:PRIYA29JUN13************/
/***************Start to change function @AUTHOR: SANDY27DEC13************/
function getTransGirviDetails(documentRootPath, girviId, prinType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //document.getElementById("display_girvi_transfer_div").style.visibility = "visible";
            //var xmlhttpStr = xmlhttp.responseText;
            //xmlhttpStr = xmlhttpStr.slice(xmlhttpStr.indexOf("@") + 1);
            //xmlhttpStr = xmlhttpStr.slice(xmlhttpStr.indexOf("@") + 1);
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText; //change in division @AUTHOR: SANDY29NOV13
        } else {
            //document.getElementById("display_girvi_transfer_div").style.visibility = "visible";
            //document.getElementById("display_girvi_transfer_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/olggtgvd.php?girviId=" + girviId + "&prinType=" + prinType, true); //change in filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
/***************End to change function @AUTHOR: SANDY27DEC13************/
/****************End Code To Pass xmlhttpStr as responseText @Author:PRIYA29JUN13************/
//************************** Search Item Names to Add New Girvi ***************************************
/**********Start Code To Add Jwellery Panel Div @AUTHOR:PRIYA28APR13**********/
var keyCodeForItemNames;
var divNumForItemNames;
var panelNameForItemNames;
function search_item_names(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchItemNames;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchItemNames() {
    /*******Start code to add div for custSlItem @Author:PRIYA24DEC13******/
    /*******Start code to add div @Author:PRIYA13SEP14*******************************/
//change condition from item name to item category @OMMODTAG SHRI_16DEC15
//change condition for utrans_item_name @OMMODTAG ATHU9jun17
    if (panelNameForItemNames == 'addStockItemName' || panelNameForItemNames == 'slItemName' || panelNameForItemNames == 'addItemCategory' || panelNameForItemNames == 'addItemName' || panelNameForItemNames == 'slPrItemName' || panelNameForItemNames == 'sttr_item_category' || panelNameForItemNames == 'utrans_item_name') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemListDivToAddStock").innerHTML = xmlhttp.responseText;
            if (keyCodeForItemNames == 40 || keyCodeForItemNames == 38) {
                document.getElementById('itemListToAddItemSelect').focus();
                document.getElementById('itemListToAddItemSelect').options[0].selected = true;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    }
    /*******End code to add div @Author:PRIYA13SEP14*******************************/
    /*******End code to add div for custSlItem @Author:PRIYA24DEC13******/
    else if (panelNameForItemNames == 'jewelleryPanel') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemListDivInJewelleryPanel").innerHTML = xmlhttp.responseText;
            if (keyCodeForItemNames == 40 || keyCodeForItemNames == 38) {
                document.getElementById('itemListJewelleryPanelToAddItemSelect').focus();
                document.getElementById('itemListJewelleryPanelToAddItemSelect').options[0].selected = true;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    }
    /** Start of code For RePair Panel @AUTHOR:SANDY13SEP13 **/
    else if (panelNameForItemNames == 'addItemRepName') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemListDivToRepair").innerHTML = xmlhttp.responseText;
            if (keyCodeForItemNames == 40 || keyCodeForItemNames == 38) {
                /****Start of changes in Code @AUTHOR: SANDY23SEP13 ******/
                document.getElementById('itemListDivToRepairItem').focus();
                document.getElementById('itemListDivToRepairItem').options[0].selected = true;
                /****End of changes in Code @AUTHOR: SANDY23SEP13 ******/
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    }
    /** End of code For Repair Panel @AUTHOR:SANDY13SEP13 **/
    /** Start of code For Add Raw stock @AUTHOR:SANDY24SEP13**/
    else if (panelNameForItemNames == 'addRawStockItemName') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemListDivToaddRawStock").innerHTML = xmlhttp.responseText;
            if (keyCodeForItemNames == 40 || keyCodeForItemNames == 38) {
                /****Start of changes in Code @AUTHOR: SANDY23SEP13 ******/
                document.getElementById('itemListToaddRawStock').focus();
                document.getElementById('itemListToaddRawStock').options[0].selected = true;
                /****End of changes in Code @AUTHOR: SANDY23SEP13 ******/
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    } else if (panelNameForItemNames == 'ImitationStock') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("categoryListDivToAddStock").innerHTML = xmlhttp.responseText;
            if (keyCodeForItemNames == 40 || keyCodeForItemNames == 38) {
                document.getElementById('itemListToAddItemSelect').focus();
                document.getElementById('itemListToAddItemSelect').options[0].selected = true;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    }
    /** End of code For Add Raw stock @AUTHOR:SANDY24SEP13 **/
    else {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemListDivToAddGirvi" + divNumForItemNames).innerHTML = xmlhttp.responseText;
            if (keyCodeForItemNames == 40 || keyCodeForItemNames == 38) {
                document.getElementById('itemListToAddItemSelect').focus();
                document.getElementById('itemListToAddItemSelect').options[0].selected = true;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    }
}

function searchItemNames(itemName, metalType, divNum, keyCodeInput) {
    keyCodeForItemNames = keyCodeInput;
    divNumForItemNames = divNum;
    panelNameForItemNames = divNum;
    //document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "visible";

    var poststr = "itemName=" + encodeURIComponent(itemName)
            + "&metalType=" + encodeURIComponent(metalType)
            + "&divNum=" + encodeURIComponent(divNum);
    search_item_names("include/php/omiladgv.php", poststr);
}
/**Start to add code for Add Raw Metal @AUTHOR: SANDY25SEP13 ***************/
/**Start to add code for Add Raw Metal @AUTHOR: SHE26FEB16***************/
/**Start to add code for Add Raw Metal @AUTHOR: SHE08MAR16***************/
function searchItemForPanelBlank(divNum, metalCount) {
//    alert(divNum);
//    alert(metalCount);
    if (divNum == 'addStockItemName') {
        document.getElementById("itemListDivToAddStock").innerHTML = '';
    } else if (divNum == 'stockItemName') {
        document.getElementById("itemListDivInJewelleryPanel").innerHTML = '';
    } else if (divNum == 'addItemRepName') {                                     // for item Repair Panel @AUTHOR: SANDY1AUG13
        document.getElementById("itemListDivToRepair").innerHTML = '';
    } else if (divNum == 'sttr_item_name') {                                     // for raw stock and sell Panel @AUTHOR: SHE26FEB16
        document.getElementById("itemListDivToaddRawStock").innerHTML = '';
    } else if (divNum == 'addRawItemCategory') {                                     // for item Repair Panel @AUTHOR: SANDY1AUG13
        document.getElementById("itemCatgryList").innerHTML = '';
    } else if (divNum == 'rawSell') {                                     // for raw sell Panel @AUTHOR: SHE26FEB16
        document.getElementById("itemListDivToaddRawMetSellStock" + metalCount).innerHTML = '';
    } else if (divNum == 'slItemName') {                                // for raw sell Panel @AUTHOR: SHE26FEB16
        document.getElementById("itemListDivToaddRawCustStock").innerHTML = '';
    } else if (divNum == 'RawStockItemName') {
        document.getElementById("itemListToAddItemSelect").innerHTML = '';
    } else if (divNum == 'addWhStockItemName') {
        document.getElementById("itemListToAddItemSelect").innerHTML = '';
    } else {
        document.getElementById("itemListDivToAddGirvi" + divNum).innerHTML = '';
    }
}
/**End to add code for Add Raw Metal @AUTHOR: SHE08MAR16***************/
/**End to add code for Add Raw Metal @AUTHOR: SHE26FEB16***************/
/**End to add code for Add Raw Metal @AUTHOR: SANDY25SEP13 ***************/
/***************Start code to change func to pass 1 param @Author:PRIYA06JAN14************/
function AvoidSpace(event) {
    var k = event ? event.which : window.event.keyCode;
    if (k == 32)
        return false;
}
function clearDivision(divName) {
    document.getElementById(divName).innerHTML = '';
}
/***************End code to change func to pass 1 param @Author:PRIYA06JAN14************/
/**********End Code To Add Jwellery Panel Div @AUTHOR:PRIYA28APR13**********/
//********************* Show Udhaar Amount Update Div ***************************
function showUpdUdharAmtDiv(divId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("updUdharAmtDiv" + divId).style.visibility = "visible";
            document.getElementById("updUdharAmtButt" + divId).style.visibility = "hidden";
            document.getElementById("ajaxUpdUdharAmtButt" + divId).style.visibility = "hidden";
            document.getElementById("updUdharAmtTextBox" + divId).focus();
        } else {
            document.getElementById("ajaxUpdUdharAmtButt" + divId).innerHTML = "<img src='images/loading16.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//********************* Show Udhaar Deposit Amount Update Div ****************************
function showUpdUdharDepAmtDiv(divId, depDivId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("updUdharDepAmtDiv" + divId + depDivId).style.visibility = "visible";
            document.getElementById("updUdharDepAmtButt" + divId + depDivId).innerHTML = "";
            document.getElementById("updUdharDepAmtTextBox" + divId + depDivId).focus();
        } else {
            document.getElementById("updUdharDepAmtButt" + divId + depDivId).innerHTML = "<img src='images/loading16.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//**************************** Change Customer Image Load Option *****************************************
/********** Start Code To Pass custId To Upadate Customer Image @AUTHOR:PRIYA06MARCH13********/
/***********Start code to add panel name @Author:PRIYA25FEB14*************/
/***********Start code to add fingerscan panel @Author:PRIYA27JUN14*********************/
/***********Start code to add panel @Author:PRIYA05SEP14*****************/
/*********************************Start code to add count variables for div tag @Author:SANT25MAY16*****************/
function chngCustImgLoadOpt(chngCustImgLoadOption, custId, count, panelName, selectPhotoId, custImageLoadOptionId, fileNameId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(custImageLoadOptionId).value = chngCustImgLoadOption;
            if (chngCustImgLoadOption == 'Computer') {
                document.getElementById("webcam_input_div").innerHTML = '';
                document.getElementById("file_input_div" + count).innerHTML = xmlhttp.responseText;
            } else if (chngCustImgLoadOption == 'Webcam' || chngCustImgLoadOption == 'FingerScan') {
                document.getElementById("file_input_div").innerHTML = '';
                document.getElementById("webcam_input_div").innerHTML = xmlhttp.responseText;
            }

        } else {
            if (chngCustImgLoadOption == 'Computer') {
                document.getElementById("webcam_input_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
            } else if (chngCustImgLoadOption == 'Webcam' || chngCustImgLoadOption == 'FingerScan') {
                document.getElementById("file_input_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
            }
        }
    };
    if (chngCustImgLoadOption == 'Computer') {
        xmlhttp.open("POST", "include/php/omccpcim.php?custId=" + custId + "&count=" + count + "&selectPhotoId=" + selectPhotoId + "&fileNameId=" + fileNameId, true);
    } else if (chngCustImgLoadOption == 'Webcam' || chngCustImgLoadOption == 'FingerScan') {
        xmlhttp.open("POST", "include/php/omccwcif.php?custId=" + custId + "&itemDivCount=" + count + "&panelName=" + panelName + "&imageOption=" + chngCustImgLoadOption, true);
    }
    xmlhttp.send();
}
/*********************************End code to add count variables for div tag @Author:SANT25MAY16*****************/
/***********End code to add panel @Author:PRIYA05SEP14*****************/
/***********End code to add fingerscan panel @Author:PRIYA27JUN14*********************/
/***********End code to add panel name @Author:PRIYA25FEB14*************/
/********** End Code To Pass custId To Upadate Customer Image @AUTHOR:PRIYA06MARCH13********/
//**************************** Get Girvi Ledger in Details ********************************
function valGetGirviLedgerDetailsInputs(obj) {
    if (validateSelectField(document.get_girvi_ledger_details_form.girviLedDelFrmDay.value, "Please select from Day!") == false) {
        document.get_girvi_ledger_details_form.girviLedDelFrmDay.focus();
        return false;
    } else if (validateSelectField(document.get_girvi_ledger_details_form.girviLedDelFrmMonth.value, "Please select from Month!") == false) {
        document.get_girvi_ledger_details_form.girviLedDelFrmMonth.focus();
        return false;
    } else if (validateSelectField(document.get_girvi_ledger_details_form.girviLedDelFrmYear.value, "Please select from Year!") == false) {
        document.get_girvi_ledger_details_form.girviLedDelFrmYear.focus();
        return false;
    } else if (validateSelectField(document.get_girvi_ledger_details_form.girviLedDelToDay.value, "Please select to Day!") == false) {
        document.get_girvi_ledger_details_form.girviLedDelToDay.focus();
        return false;
    } else if (validateSelectField(document.get_girvi_ledger_details_form.girviLedDelToMonth.value, "Please select to Month!") == false) {
        document.get_girvi_ledger_details_form.girviLedDelToMonth.focus();
        return false;
    } else if (validateSelectField(document.get_girvi_ledger_details_form.girviLedDelToYear.value, "Please select to Year!") == false) {
        document.get_girvi_ledger_details_form.girviLedDelToYear.focus();
        return false;
    }

    return true;
}
/************Start Code To Change Div Name @Author:PRIYA24JUL13**************/
function getGirviLedgerDetails(obj) {
    if (valGetGirviLedgerDetailsInputs(obj)) {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
                document.getElementById("ledgerDetDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
                document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
            }
        };
        var poststr = "girviLedgerDetStartDate="
                + encodeURIComponent(document.get_girvi_ledger_details_form.girviLedDelFrmDay.value) + " "
                + encodeURIComponent(document.get_girvi_ledger_details_form.girviLedDelFrmMonth.value) + " "
                + encodeURIComponent(document.get_girvi_ledger_details_form.girviLedDelFrmYear.value)
                + "&girviLedgerDetEndDate="
                + encodeURIComponent(document.get_girvi_ledger_details_form.girviLedDelToDay.value) + " "
                + encodeURIComponent(document.get_girvi_ledger_details_form.girviLedDelToMonth.value) + " "
                + encodeURIComponent(document.get_girvi_ledger_details_form.girviLedDelToYear.value)
                + "&firmId=" + encodeURIComponent(document.getElementById("girviLedgerDetailsFirmName").value);
        xmlhttp.open("POST", "include/php/ombbgldv.php?" + poststr, true);
        xmlhttp.send();
    }
}
/************End Code To Change Div Name @Author:PRIYA24JUL13**************/
/*******Start Code To Add Supplier Id @AUTHOR:PRIYA17MAY13*******/
/*******Start Code To Change In Webcam Func @AUTHOR:PRIYA18MAY13********/
function chngSuppImgLoadOpt(chngSuppImgLoadOption, panelName, suppId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("suppImageLoadOption").value = chngSuppImgLoadOption;
            if (chngSuppImgLoadOption == 'Computer') {
                document.getElementById("webcam_input_div").innerHTML = '';
                document.getElementById("file_input_div").innerHTML = xmlhttp.responseText;
            } else if (chngSuppImgLoadOption == 'Webcam') {
                document.getElementById("file_input_div").innerHTML = '';
                document.getElementById("webcam_input_div").innerHTML = xmlhttp.responseText;
            }

        } else {
            if (chngSuppImgLoadOption == 'Computer') {
                document.getElementById("webcam_input_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
            } else if (chngSuppImgLoadOption == 'Webcam') {
                document.getElementById("file_input_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
            }
        }
    };
    if (chngSuppImgLoadOption == 'Computer') {
        xmlhttp.open("POST", "include/php/omccpcim.php?panelName=" + panelName + "&suppId=" + suppId, true);
    } else if (chngSuppImgLoadOption == 'Webcam') {
        xmlhttp.open("POST", "include/php/omccwcif.php?panelName=" + panelName, true); //Start code to pass panel name @Author:PRIYA25FEB14
    }

    xmlhttp.send();
}
/*******End Code To Change In Webcam Func @AUTHOR:PRIYA18MAY13********/
/*******End Code To Add Supplier Id @AUTHOR:PRIYA17MAY13*******/
/******Start of changes in function to navigate to correct page as per new design @AUTHOR: SANDY19NOV13******/
function navigationSupp(pageNo, user) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText; //change in div
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omcccldv.php?page=" + pageNo + "&user=" + user, true);
    xmlhttp.send();
}
/******End of changes in function to navigate to correct page as per new design @AUTHOR: SANDY19NOV13******/
/*End code PRIYA02 */

/******Start of changes in function to navigate to correct page as per new design @AUTHOR: SANDY19NOV13******/
/*Start code PRIYA02 */
function navigationStaff(pageNo, user) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omcccldv.php?page=" + pageNo + "&user=" + user, true);
    xmlhttp.send();
}
/******End of changes in function to navigate to correct page as per new design @AUTHOR: SANDY19NOV13******/
/*End code PRIYA02 */


//************************** Search Supplier for Test Box **************************
function search_suppId_for_textField(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchSuppIdForTextField;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchSuppIdForTextField() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("suppListDivToAddItemStock").innerHTML = xmlhttp.responseText;
        if (keyCode == 40 || keyCode == 38) {
            document.getElementById('suppListForTextFieldSelect').focus();
            document.getElementById('suppListForTextFieldSelect').options[0].selected = true;
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function searchSuppIdForTextField(suppName, keyCodeInput) {
    //alert(suppName);

    keyCode = keyCodeInput;
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    var poststr = "suppName=" + encodeURIComponent(suppName);
    search_suppId_for_textField('include/php/ogwwswlt.php', poststr);
}
//************************** Search City TO Add Girvi Blank Panel
/**********Start Code To Change Div @Author:PRIYA24AUG13*************/
function clearSearchSuppPanel() {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = function() {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("suppListDivToAddItemStock").innerHTML = xmlhttp.responseText;
//            document.getElementById('addStockSupplierName').focus();
//        }
//        else {
//            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//        }
//    };
//
//    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
//    xmlhttp.send();
    document.getElementById("suppListDivToAddItemStock").innerHTML = '';
    // document.getElementById('addStockSupplierName').focus();
}
/**********End Code To Change Div @Author:PRIYA24AUG13*************/
/*START code PRIYA24 */
function showAddNewActionItemDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddNewActionItem").style.visibility = "visible";
            document.getElementById("addActionItemDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("taskDescrpn").focus();
        } else {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omaimndv.php", true);
    xmlhttp.send();
}

function closeAddMoreActionItemTaskDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddNewActionItem").style.visibility = "hidden";
            document.getElementById("addActionItemDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
/*END code PRIYA24*/
/*START CODE  TO NAVIGATE ACCOUNT PAGE @AUTHOR: PRIYA18MAR13 */
function navigationAcc(pageNo, firmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("accountListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omacacld.php?page=" + pageNo + "&firmId=" + firmId, true);
    xmlhttp.send();
}
/*END CODE  TO NAVIGATE ACCOUNT PAGE @AUTHOR: PRIYA18MAR13 */
//**************************** Display Add Stock Payment Division *****************************************
/*********************Start code to change div @Author:PRIYA26NOV13********/
function getAddStockPaymentDiv(documentRootPath, preInvoiceNo, invoiceNo, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPanelFormDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            document.getElementById("addStockPaymentButtDiv").style.visibility = "hidden";
        }
    };
    if (panelName == 'AddStock' || panelName == 'UpdateStock' || panelName == 'SimilarItem') {
        panelName = 'StockPayment';
    }
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogcmiddv.php?preInvNo=" + preInvoiceNo + "&postInvNo=" + invoiceNo + "&paymentPanelName=" + panelName, true);
    xmlhttp.send();
}
/*********************End code to change div @Author:PRIYA26NOV13********/
//Start code for forms panel @Author KHUSH05JAN13
//**************************** Navigate Forms Panel *******************************************************************
function navigateFormsPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppfmsp.php", true);
    xmlhttp.send();
}
// End code for forms panel @Author KHUSH05JAN13
/*********START CODE TO SET DEF LANG & GET GIRVI NOTICE @AUTHOR: KHUSH06JAN13 ************/
/************Start code to add formSize @Author:PRIYA23APR14*****************/
function setDefLangGetGirNot(defLang, defSize, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppgnsl.php?defLang=" + defLang + "&defSize=" + defSize + "&panel=" + panel, true);
    xmlhttp.send();
}
/*********END CODE TO SET DEF LANG & GET GIRVI NOTICE @AUTHOR: KHUSH06JAN13 ************/
/************End code to add formSize @Author:PRIYA23APR14*****************/
//Start code for Add New Language @Author KHUSH06JAN13
/***********Start code to add panel name @Author:PRIYA17APR14***************/
/************Start code to add formSize @Author:PRIYA23APR14*****************/
function getGirviNoticeAddNewLangDiv(panelName, formSize) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppgndv.php?panelName=" + panelName + "&formSize=" + formSize, true);
    xmlhttp.send();
}
/************End code to add formSize @Author:PRIYA23APR14*****************/
/***********End code to add panel name @Author:PRIYA17APR14***************/
/*********END CODE to Add New Language @Author KHUSH06JAN13************/
/*********START CODE TO ADD Invoice PAYMENT DIV @AUTHOR:PRIYA13JAN13************/
/*******************Start code To Add Firm Id @AUTHOR:PRIYA12MAY13****************/
/*******************Start code To Change SuppId @AUTHOR:PRIYA13MAY13****************/
/*******************Start code to change function name @Author:PRIYA20SEP13***********/
/*******************Start code to change div @Author:PRIYA26SEP13***********/
function getNwOrPaymentDiv(documentRootPath, newSuppId, custId, newPreInvoiceNo, newInvoiceNo, goldTotalWeight, goldTotalWeightType, silverTotalWeight, silverTotalWeightType,
        totalFinalBalance, firmId, totalItemsQty, totalValuation, nwOrItemLbChrgs, nwOrItemLbChrgsTyp, nwOrItemTotalTaxChrg, totalMetalValuation, crystalFinalVal, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("newOrderDivs").innerHTML = xmlhttp.responseText;
            //document.getElementById("nwOrPayMetalType1").focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            //document.getElementById("nwOrPaymentButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ognopydv.php?newSuppId=" + newSuppId + "&custId=" + custId + "&newPreInvoiceNo=" + newPreInvoiceNo + "&newInvoiceNo=" + newInvoiceNo +
            "&goldTotalWeight=" + goldTotalWeight + "&goldTotalWeightType=" + goldTotalWeightType + "&silverTotalWeight=" + silverTotalWeight + "&silverTotalWeightType=" + silverTotalWeightType +
            "&totalFinalBalance=" + totalFinalBalance + "&nwOrFirmId=" + firmId + "&totalItemsQty=" + totalItemsQty + "&totalValuation=" + totalValuation + "&nwOrItemLbChrgs=" + nwOrItemLbChrgs +
            "&nwOrItemLbChrgsTyp=" + nwOrItemLbChrgsTyp + "&nwOrItemTotalTaxChrg=" + nwOrItemTotalTaxChrg +
            "&totalMetalValuation=" + totalMetalValuation + "&crystalFinalVal=" + crystalFinalVal + "&itemPanel=" + panelName, true);
    xmlhttp.send();
}
/*******************End code to change div @Author:PRIYA26SEP13***********/
/*******************End code to change function name @Author:PRIYA20SEP13***********/
/*******************End code To Add Firm Id @AUTHOR:PRIYA12MAY13****************/
/*********END CODE TO ADD Invoice PAYMENT DIV @AUTHOR:PRIYA13JAN13************/
/*********START CODE TO Click Invoice Id and close button @AUTHOR:PRIYA14JAN13************/
function showNewOrderInvoiceDiv(documentRootPath, newPreInvoiceNo, newInvoiceNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
            //document.getElementById("ajaxCloseAddNewOrderInvoice").style.visibility = "visible";
            document.getElementById("nwOrItemDetailsDiv" + newPreInvoiceNo + newInvoiceNo).innerHTML = xmlhttp.responseText;
            //document.getElementById("ajaxCloseAddNewOrderInvoice").style.visibility = "visible";

        } else {
            document.getElementById("nwOrItemDetailsDiv" + newPreInvoiceNo + newInvoiceNo).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ognoindv.php?newPreInvoiceNo=" + newPreInvoiceNo + "&newInvoiceNo=" + newInvoiceNo, true);
    xmlhttp.send();
}
function closeAddNewOrderInvoiceDiv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddNewOrderInvoice").style.visibility = "hidden";
            document.getElementById("nwOrItemDetailsDiv" + newPreInvoiceNo + newInvoiceNo).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
/*********END CODE TO Click Invoice Id  and close button @AUTHOR:PRIYA15JAN13************/
//**************************** Navigate Girvi Notice Panel *******************************************************************
function getLoanNoticePanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppgndv.php", true);
    xmlhttp.send();
}
// ************* Start Code to navigate to FORM N/8 Panel @Author: KHUSH09JAN13 ****************
function getFormEightPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppfedv.php", true); //Modified by KHUSH13JAN13
    xmlhttp.send();
}
//Start code for Add New Language @Author KHUSH06JAN13
/*************Start code to change function @Author:PRIYA25MAR14*************/
/*************Start code to add form width @Author:PRIYA22APR14*************/
function getFormEightAddNewLangDiv(panelName, formSize) {             //modified by KHUSH15JAN13
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppfedv.php?panelName=" + panelName + "&formSize=" + formSize, true); //filename changed @Author:PRIYA22MAR14
    xmlhttp.send();
}
/*************End code to add form width @Author:PRIYA22APR14*************/
/*************End code to change function @Author:PRIYA25MAR14*************/
/*********START CODE TO SET DEF LANG & GET FORM EIGHT @AUTHOR: KHUSH11JAN13 ************/
/*********Start code to add panel @Author:PRIYA19APR14**************/
function setDefLangGetFormEight(defLang, defSize, panel) {
    // alert(defSize);// Modified on KHUSH15JAN13
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppfesl.php?defLang=" + defLang + "&defSize=" + defSize + "&panel=" + panel, true);
    xmlhttp.send();
}
/*********End code to add panel @Author:PRIYA19APR14**************/
/*********END CODE TO SET DEF LANG & GET FORM EIGHT @AUTHOR: KHUSH11JAN13 ************/

//**************************** show Stock Item Details Div *****************************************
/**********Start Code To Add Panel Name @AUTHOR:PRIYA04MAY13**************/
/**********Start code to add div @Author:PRIYA19JAN14***************************/
/**********Start code to add div @Author:PRIYA11SEP14****************/
/**********Start code to change param name @Author:PRIYA30SEP14******************/
/******Start code to add stock type parameter in else condition  @OMMODTAG SHRI_09JAN16*****/
/**********Start code to add if else condition for Imitation Panel @Author:ANUJA07JAN16******************/
/*******START CODE FOR METAL-TO-METAL Panel @Author:SANT12JUL17**************/
function showStockItemDetailsDiv(documentRootPath, sttrId, panelName, stockType, mainPanel, transactionPanel, utinId, invPanel, metType) {
    loadXMLDoc();
    if (panelName == 'RawDetUpPanel' && (mainPanel == 'Customer' || mainPanel == 'Supplier') && (transactionPanel == 'RawPurchase' || transactionPanel == 'RawSell')) {
        var invoice = invPanel.split(";");
        var preInvoice = invoice[0];
        var invoiceNum = invoice[1];
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (transactionPanel == 'AddByInv') {
                document.getElementById("mainAddStockDiv").innerHTML = xmlhttp.responseText;
            } else if (panelName == 'RawDetUpPanel') {
                document.getElementById("rawMetalAddDiv").innerHTML = xmlhttp.responseText;
            } else if (panelName == 'addByItems') {
                document.getElementById("suppPurchaseDivs").innerHTML = xmlhttp.responseText;
            } else if (mainPanel == 'CrystalStockPayment' || mainPanel == 'CrystalStockPayUp') {
                document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            }
        }
    };
    if (transactionPanel == 'AddByInv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogadstoc.php?sttrId=" + sttrId + "&panelName=" + panelName + "&stockType=" + stockType + "&stockPanelName=" + panelName + "&invPanel=" + transactionPanel + "&utransInvId=" + utinId, true);
    } else if (mainPanel == 'CrystalStockPayment' || mainPanel == 'CrystalStockPayUp') {
        xmlhttp.open("POST", "include/php/ogcraddv.php?sttrId=" + sttrId + "&updatePanelName=" + panelName + "&stockType=" + stockType + "&stockPanelName=" + mainPanel + "&suppPurId=" + transactionPanel + "&utinId=" + utinId, true);
    } else {
        if (panelName == 'RawDetUpPanel') {
            if (panelName == 'RawDetUpPanel' && (mainPanel == 'Customer' || mainPanel == 'Supplier') && (transactionPanel == 'RawPurchase' || transactionPanel == 'RawSell'))
                xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrwiadv.php?rwprId=" + sttrId + "&panelName=RawStock" + "&rawPanelName=" + panelName + "&mainPanel=" + mainPanel + "&transactionPanel=" + transactionPanel + "&preInvNo=" + preInvoice + "&postInvNo=" + invoiceNum + "&metType=" + metType + "", true);
            else
                xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrwiadv.php?sttr_id=" + sttrId + "&panelName=RawStock" + "&rawPanelName=" + panelName + "&mainPanel=" + mainPanel + "&transactionPanel=" + transactionPanel + "&metType=" + metType + "", true);
        } else if (panelName == 'addByItems') {
            xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwprinv.php?sttrId=" + sttrId + "&itemMainPanel=" + panelName + "&itemSubPanel=itemsAddUp", true);
            /**Star Code to Add Condition for Panel Name during updation @Author:SHE21FEB15 **/
        } else if (panelName == 'UpdateCrystal' || panelName == 'CrystalPayUp') {
            xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamndv.php?sttrId=" + sttrId + "&stockType=" + stockType + "&updatePanelName=" + panelName + "&panelName=CrystalPanel", true);
            /**End Code to Add Condition for Panel Name during updation @Author:SHE21FEB15 **/
        } else if (panelName == 'ImitationStockPayUp') {
            xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamndv.php?sttrId=" + sttrId + "&updatePanelName=" + panelName + "&panelName=ImitationStock", true);
        } else if (panelName == 'ImitationSearch') {
            xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamndv.php?sttrId=" + sttrId + "&updatePanelName=ImitationStockPayUp&stockType=wholeSale&panelName=ImitationStock&subPanel=" + panelName, true);
        } else {
            xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamndv.php?sttrId=" + sttrId + "&panelName=" + panelName + "&stockType=" + stockType, true);
        }
    }
    xmlhttp.send();
}
/*******END CODE FOR METAL-TO-METAL Panel @Author:SANT12JUL17**************/
/**********Start code to add if else condition for Imitation Panel @Author:ANUJA07JAN16******************/
/******End code to add stock type parameter in else condition  @OMMODTAG SHRI_09JAN16*****/
/**********End code to change param name @Author:PRIYA30SEP14******************/
/**********End code to add div @Author:PRIYA11SEP14****************/
/**********End code to add div @Author:PRIYA19JAN14***************************/
/**********End Code To Add Panel Name @AUTHOR:PRIYA04MAY13**************/
//*********************** Start code to Navigate Form Seven Panel @Author: KHUSH13JAN13 ************
function getFormSevenPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppfsdv.php", true);
    xmlhttp.send();
}
//Start code for Add New Language in Form R/7 @Author KHUSH14JAN13
/************Start code to change function @Author:PRIYA25MAR14*****************/
/************Start code to add formSize @Author:PRIYA22APR14*****************/
function getFormSevenAddNewLangDiv(panelName, formSize) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppfsdv.php?panelName=" + panelName + "&formSize=" + formSize, true);
    xmlhttp.send();
}

/************End code to change function @Author:PRIYA25MAR14*****************/
/*********END CODE to Add New Language in Form R/7 @Author KHUSH14JAN13************/
/*********START CODE TO SET DEF LANG & GET FORM R/7 @AUTHOR: KHUSH14JAN13 ************/
function setDefLangGetFormSeven(defLang, defSize, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppfssl.php?defLang=" + defLang + "&defSize=" + defSize + "&panel=" + panel, true);
    xmlhttp.send();
}
/************End code to add formSize @Author:PRIYA22APR14*****************/
/*********END CODE TO SET DEF LANG & GET FORM R/7 @AUTHOR: KHUSH14JAN13 ************/
/**********START CODE TO ADD Supplier Invoice Details @AUTHOR:PRIYA14JAN13***************/
/***********Start code to comment @Author:PRIYA27OCT13*********/
//function showSuppNwOrItemDetailsDiv(documentRootPath, newItemId) {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = function() {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("suppNwOrItemDetailsDiv" + newItemId).innerHTML = xmlhttp.responseText;
//        }
//        else {
//            document.getElementById("suppNwOrItemDetailsDiv" + newItemId).innerHTML = "<img src='images/ajaxLoad.gif' />";
//        }
//    };
//
//    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwhiddv.php?newItemId=" + newItemId, true);
//
//    xmlhttp.send();
//}
/***********End code to comment @Author:PRIYA27OCT13*********/
/**********END CODE TO ADD Supplier Invoice Details @AUTHOR:PRIYA14JAN13***************/
/**********START CODE TO ADD Repair Panel @AUTHOR:PRIYA14JAN13***************/
function navigateRepairPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppdbcp.php", true);
    xmlhttp.send();
}

/**********END CODE TO ADD Repair Panel @AUTHOR:PRIYA14JAN13***************/
//**************************** Navigate Loss Girvi Panel *******************************************************************
/**********START CODE TO ADD 65L & 84L Bar Code Panel @AUTHOR:PRIYA12FEB13***************/
/**********Start Code To Add Help Option @Author:PRIYA12AUG13****************************/
/***************Start of change in function @AUTHOR: SANDY09JAN14************/
/***************Start code to add loan tags panel @Author:PRIYA25APR14**********/
/**************Start code to add panel @Author:PRIYA05NOV14***********************/
function showBarCodePrintPanel(divPanel) {
    document.getElementById("a4SheetsPrintButtonDiv").style.visibility = "visible";
    showBarCodeSettingPanel(divPanel);

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //alert(xmlhttp.responseText);
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("barCodePrintPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (divPanel == 'Items65LBarCodePanel') {
//        xmlhttp.open("POST", "include/php/ogibbc65l.php", true);
        xmlhttp.open("POST", "include/php/omstockTransibbc65l.php", true);
    } else if (divPanel == 'ItemsAllLabelsBarCodePanel') {
        document.getElementById("a4SheetsPrintButtonDiv").style.visibility = "hidden"; //Start code to check the conditions for allLabel Barcode @AUTH:ATHU5MAR17
        xmlhttp.open("POST", "include/php/ogicallalllabels.php?divPanel=" + divPanel, true); //End code to check the conditions for allLabel Barcode @AUTH:ATHU5MAR17
    } else if (divPanel == 'Items84LBarCodePanel') {
//        xmlhttp.open("POST", "include/php/ogibbc84l.php", true);
        xmlhttp.open("POST", "include/php/omstockTransibbc84l.php", true);
    } else if (divPanel == 'GirviBarCodePanel') {
        xmlhttp.open("POST", "include/php/olggbcpd.php", true); //change in file name @AUTHOR: SANDY20NOV13
    } else if (divPanel == 'label') {
        document.getElementById("a4SheetsPrintButtonDiv").style.visibility = "hidden";
        xmlhttp.open("POST", "include/php/ogibbc55x13.php?panel=" + divPanel, true);
    } else if (divPanel == 'Items55x13BarCodePanel') {
        document.getElementById("a4SheetsPrintButtonDiv").style.visibility = "hidden";
        xmlhttp.open("POST", "include/php/ogibbc55x13.php?panel=" + divPanel, true);
    } else if (divPanel == 'Items55x13IMBarCodePanel') {
        document.getElementById("a4SheetsPrintButtonDiv").style.visibility = "hidden";
        xmlhttp.open("POST", "include/php/ogibbc55x13imi.php?panel=" + divPanel, true);
    } else if (divPanel == 'BarCodePrintHelp') {
        xmlhttp.open("POST", "include/php/ombchelp.php", true);
    } else if (divPanel == 'Items20x12BarCodePanel') {
//        xmlhttp.open("POST", "include/php/ogibbc20x12.php", true);
        xmlhttp.open("POST", "include/php/omstockTransibbc20x12.php", true);//new file
    } else if (divPanel == 'formsPrintHelp') {
        xmlhttp.open("POST", "include/php/omfrhelp.php", true);
    } else if (divPanel == 'BarCodeLoanTags') {
        xmlhttp.open("POST", "include/php/olggbctg.php", true);
    } else if (divPanel == 'Items55x13TwoLabelsPanel') {
        document.getElementById("a4SheetsPrintButtonDiv").style.visibility = "hidden";
        xmlhttp.open("POST", "include/php/ogib55x13twdv.php", true);
    }
    /****** Start code to add condition for 61L Barcode Panel @Author:SHRI25FEB15******/
    else if (divPanel == 'Items61x12BarCodePanel') {
        document.getElementById("a4SheetsPrintButtonDiv").style.visibility = "hidden";
        xmlhttp.open("POST", "include/php/ogibbc61x12.php?panel=" + divPanel, true);
    }
    /****** End code to add condition for 61L Barcode  Panel @Author:SHRI25FEB15******/

    /****** Start code to add condition for  Tail Labels loan Barcode Panel @Author:SHE08APR15******/
    else if (divPanel == 'Items55x13LoanBarCodePanel') {
        document.getElementById("a4SheetsPrintButtonDiv").style.visibility = "hidden";
        xmlhttp.open("POST", "include/php/olggbc55x13.php", true);
    }
    /****** End code to add condition for  Tail Labels loan Barcode Panel @Author:SHE08APR15******/
    xmlhttp.send();
}
/**************End code to add panel @Author:PRIYA05NOV14***********************/
/***************End code to add loan tags panel @Author:PRIYA25APR14**********/
/***************End of change in function @AUTHOR: SANDY09JAN14************/

//**************Start code to stock tally panel @Author:SURAJ15MARCH18***********************/
function showTallyStockPanel(panel) {
    loadXMLDoc();
    //alert(panel);
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            // alert(xmlhttp.responseText);
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockTallyPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'StockTallyByImages') {
        //alert("1");
        xmlhttp.open("POST", "include/php/ogstally.php?panelName=" + panel, true);
        xmlhttp.send();
    }
    else if (panel == 'StockTallyByTable') {
        //alert("2");
        xmlhttp.open("POST", "include/php/ogstallytable.php", true);
        xmlhttp.send();
    }
}
/**************END code to stock tally panel @Author:SURAJ15MARCH18***********************/




function showBarCodeSettingPanel(divPanel) {
    loadXMLDoc2();
    xmlhttp2.onreadystatechange = function () {
        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("barCodePrintPanelSettingDiv").innerHTML = xmlhttp2.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp2.open("POST", "include/php/ombcbcsp.php?divPanel=" + divPanel, true);
    xmlhttp2.send();
}
/************Start code to add options @Author:PRIYA05FEB14***************/
/************Start code to add noOfRows @Author:PRIYA14MAY14*************/
function updateBarCodeTopLeftMargin(omLayoutOptionTop, omLayoutOptionTopValue, omLayoutOptionLeft, omLayoutOptionLeftValue,
        fontSize, fontSizeValue, blockWidth, blockWidthValue, blockHeight, blockHeightValue, slipWidth, slipWidthValue, slipHeight, slipHeightValue,
        noOfRows, noOfRowsValue) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("barCodePrintPanelDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("bcMessDisplayDiv").innerHTML = "<span class='fs_14 ff_calibri reddish'>UPDATED</span>";
            window.setTimeout(closeBCMessDiv, 1500);
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var postStr = 'omLayoutOptionTop=' + omLayoutOptionTop + '&omLayoutOptionTopValue=' + omLayoutOptionTopValue
            + '&omLayoutOptionLeft=' + omLayoutOptionLeft + '&omLayoutOptionLeftValue=' + omLayoutOptionLeftValue
            + '&fontSize=' + fontSize + '&fontSizeValue=' + fontSizeValue
            + '&blockWidth=' + blockWidth + '&blockWidthValue=' + blockWidthValue
            + '&blockHeight=' + blockHeight + '&blockHeightValue=' + blockHeightValue
            + '&slipWidth=' + slipWidth + '&slipWidthValue=' + slipWidthValue
            + '&slipHeight=' + slipHeight + '&slipHeightValue=' + slipHeightValue
            + '&noOfRows=' + noOfRows + '&noOfRowsValue=' + noOfRowsValue;
    xmlhttp.open("POST", "include/php/ombcbcup.php?" + postStr, true);
    xmlhttp.send();
}
function closeBCMessDiv() {
    document.getElementById("bcMessDisplayDiv").innerHTML = "";
}
/************End code to add noOfRows @Author:PRIYA14MAY14*************/
/************End code to add options @Author:PRIYA05FEB14***************/
/***************Start code to add delay function @Author:PRIYA06FEB14************/
function showBarCodeBorders(omLayoutOptionBorder, showBarCodeBordersCheck, bcSizeSelect, bcSizeSelectValue) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("barCodePrintPanelDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("bcMessDisplayDiv").innerHTML = "<span class='fs_14 ff_calibri reddish'>UPDATED</span>";
            window.setTimeout(closeBCMessDiv, 1500);
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombcbcup.php?omLayoutOptionBorder=" + omLayoutOptionBorder + "&showBarCodeBordersCheck=" + showBarCodeBordersCheck +
            "&bcSizeSelect=" + bcSizeSelect + "&bcSizeSelectValue=" + bcSizeSelectValue, true);
    xmlhttp.send();
}
/***************End code to add delay function @Author:PRIYA06FEB14************/
/**********End Code To Add Help Option @Author:PRIYA12AUG13****************************/
/**********END CODE TO ADD 65L & 84L Bar Code Panel @AUTHOR:PRIYA12FEB13***************/
function softwareUpdateCompleted(divPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(divPanel).innerHTML = xmlhttp.responseText;
            document.getElementById("softwareUpdateCompletedDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ommptbupd.php", true);
    xmlhttp.send();
}
//var metalRateMetTyp = new Array();
//var metalRateMetId = new Array();
//var metalRateMetRate = new Array();
//
//function setMetalRatesArray(metalRateMetTyp,metalRateMetId,metalRateMetRate) {
//    
//}

function autoUpdateMetalRates(metalArrNum) {
    loadXMLMetalRates();
    xmlhttpMetalRates.onreadystatechange = function () {
        if (xmlhttpMetalRates.readyState == 4 && xmlhttpMetalRates.status == 200) {
            document.getElementById("metalRatesDiv").innerHTML = xmlhttpMetalRates.responseText;
        }
    };
    xmlhttpMetalRates.open("POST", "include/php/ommrdmrd.php?metalArrNum=" + metalArrNum, true);
    xmlhttpMetalRates.send();
}
function openWindowsExe(omWinExe) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST",
            "include/php/omwinexe.php?omWinExe=" + omWinExe, true);
    xmlhttp.send();
}
function sentSMSByTemplateId(counter, smsTemplateId, userId, userType, itemId, itemType, amount1, amount2, amount3, amount4) {
    if (smsTemplateId == '') {
        alert('Please select SMS Template Id!');
    } else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (xmlhttp.responseText == 'SUCCESS') {
                    document.getElementById("smsSentByTemplateDiv" + counter).innerHTML = "<img src='images/right16.png' title='SMS Sent Successfully!' />";
                } else {
                    document.getElementById("smsSentByTemplateDiv" + counter).innerHTML = xmlhttp.responseText;
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST",
                "include/php/omcsmssbt.php?smsTemplateId=" + smsTemplateId + "&userId=" + userId
                + "&userType=" + userType + "&itemId=" + itemId + "&itemType=" + itemType
                + "&amount1=" + amount1 + "&amount2=" + amount2 + "&amount3=" + amount3 + "&amount4=" + amount4, true);
        xmlhttp.send();
    }
}
function getOnlinePaymentPanel(amount) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("prodPaymentDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST",
            "include/php/ommppyam.php?amount=" + amount, true);
    xmlhttp.send();
}
function closeProdExpMessDiv() {
    document.getElementById("prodExpMessMainDiv").innerHTML = '';
}
//*********Start code for delete multiple loans in loan panel:Author:SANT23DEC16

//Start code to add selectall sms option @Author:SHE20FEB15
//Start Code to add function for delete selected and multiple loan : Author:SANT04JAN17
function selectDeleteOne(panelName, trnasId, girviId, custId, sellPresent, itemCounter, prevStockCount) {
//    alert(panelName);
//    exit();
    if (sellPresent > 0) {
        alert('To Delete,First Delete This Item From Customer Jewellery Panel!');
        document.getElementById('deletecheck' + itemCounter).checked = false;
    } else {
        if (prevStockCount > 0) {
            confirm_box = confirm("Previous balance gets changed from this item delete\n\nDo you really want to delete this Item?");
        } else {
            confirm_box = true;
        }
        if (confirm_box == true)
        {
            var counter = parseFloat(document.getElementById('counter').value);
//        var delId = document.getElementById(delId).value;
            var deleteChkAll = new Array();
            var chk = 0;
            for (var i = 1; i <= counter; i++) {
                deleteChkAll[i] = document.getElementById('deletecheck' + i).checked;
                if (deleteChkAll[i] == false)
                {
                    chk = 1;
                    break;
                }
            }
            if (chk == 1)
                document.getElementById('deleteallcheck').checked = false;
            else
                document.getElementById('deleteallcheck').checked = true;
            loadXMLDoc();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    for (var i = 1; i <= counter; i++) {
                        if (xmlhttp.responseText == 'CustLoanPresent') {
                            alert("Please first delete all Loans of this Customer!");
                            document.getElementById('deleteallcheck').checked = false;
                            document.getElementById('deletecheck' + i).checked = false;
                        } else if (xmlhttp.responseText == 'CustPurInvPresent') {
                            alert("Please first delete all Purchase Invoices of this Customer!");
                            document.getElementById('deleteallcheck').checked = false;
                            document.getElementById('deletecheck' + i).checked = false;
                        } else if (xmlhttp.responseText == 'UdhaarPresent') {
                            alert("Please first delete all Udhaar of this Customer!");
                            document.getElementById('deleteallcheck').checked = false;
                            document.getElementById('deletecheck' + i).checked = false;
                        } else if (xmlhttp.responseText == 'AdvanceMoneyPresent') {
                            alert("Please first delete all Advance Money of this Customer!");
                            document.getElementById('deleteallcheck').checked = false;
                            document.getElementById('deletecheck' + i).checked = false;
                        } else if (xmlhttp.responseText == 'CustSellPresent') {
                            alert("Please first delete all Sell of this Customer!");
                            document.getElementById('deleteallcheck').checked = false;
                            document.getElementById('deletecheck' + i).checked = false;
                        } else if (xmlhttp.responseText == 'NewOrderPresent') {
                            alert("Please first delete all Orders of this Customer!");
                            document.getElementById('deleteallcheck').checked = false;
                            document.getElementById('deletecheck' + i).checked = false;
                        } else {
                            var deleteChk = document.getElementById('deletecheck' + i).checked;
                            if (deleteChk == true) {
                                usertransId[i] = document.getElementById('girviIdForDelete' + i).value;
                            } else if (deleteChk != true) {
                                usertransId[i] = '';
                            }
                        }
                    }
                }
            }
        }
        ;
        if (panelName == 'loansList')
            xmlhttp.open("POST", "include/php/orgpllpn.php?panelName=" + panelName, true);
        if (panelName == 'releaseGirviList')
            xmlhttp.open("POST", "include/php/orgpregl.php?panelName=" + panelName, true);
        if (panelName == 'releasePurchaseList')
            xmlhttp.open("POST", "include/php/ogwaprlt.php?panelName=" + panelName, true);
        if (panelName == 'stockPanelPurchaseList')
            xmlhttp.open("POST", "include/php/ogwastlt.php?panelName=" + panelName, true);
        if (panelName == 'releaseCustomerList')
            xmlhttp.open("POST", "include/php/omcdcsdl.php?custId=" + custId + "&panelName=" + panelName, true);
        xmlhttp.send();
    }
}
function sendDeleteMultiple(counter, userType, itemId, itemType, amount1, itemCategory, metalType, panelName, stockDeleteConfirm) {
    // alert(panelName);
    var deleteChk = new Array();
    var usertransId = new Array();
//    var counter = parseFloat(document.getElementById('counter').value);
    var chk = 0;
    var chkvar = 'false';
    var cnt = 0;
    confirm_box_cust = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this customer?");

    if (confirm_box_cust == true)
    {
        if (panelName == 'releaseCustomerList') {
            confirm_box_trans = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this transaction?");
            if (confirm_box_trans) {
                transDelete = 'yes';
            }
        }
        if (panelName == 'stockPanelPurchaseList' || panelName == 'releasePurchaseList') {
            var stockDeleteConfirm = '';
            var transDelete = '';
            if (panelName != 'ItemStockList') {
                if (panelName == 'stockPanelPurchaseList') {
                    confirm_box_for_stock = true;
                } else {
                    confirm_box_for_stock = confirm(deleteItemAlertMess + "\n\nDo you want to delete this Item From Stock?");
                }
                if (confirm_box_for_stock == true)
                {
                    stockDeleteConfirm = 'yes';
                    document.getElementById('stockDeleteConfirm').value = 'yes';
                }
            }
        }
        if (panelName == 'releaseSoldInvoice') {
            stock_add_confirm = confirm(addItemAlertMess + "\n\nDo you want to add this item in stock?");
            var stockAddConfirm = 'Yes';
        }

        var counter = parseFloat(document.getElementById('counter').value);
        for (var i = 1; i <= counter; i++) {
            deleteChk[i] = document.getElementById('deletecheck' + i).checked;
            usertransId[i] = document.getElementById('IdForDelete' + i).value;
            if (deleteChk[i] == false) {
                chk++;
            }
        }
        if (chk == counter) {
            alert('Please select to Delete Entry');
            document.getElementById("deleteButt").style.visibility = "visible";
        } else {
            panel = panelName;
            var poststr = "counter=" + encodeURIComponent(counter)
                    + "&panelName=" + encodeURIComponent(panelName)
                    + "&itemCategory=" + encodeURIComponent(itemCategory)
                    + "&metalType=" + encodeURIComponent(metalType)
                    + "&deleteChk=" + encodeURIComponent(deleteChk)
                    + "&stockDeleteConfirm=" + encodeURIComponent(stockDeleteConfirm)
                    + "&stockAddConfirm=" + encodeURIComponent(stockAddConfirm)
                    + "&transDelete=" + encodeURIComponent(transDelete)
                    + "&usertransId=" + encodeURIComponent(usertransId);
//            alert(poststr);
            send_delete_multiple('include/php/omlondel.php', poststr);
        }
    }
}
function send_delete_multiple(url, parameters)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSendDeleteMultiple;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
var panel;
function alertSendDeleteMultiple()
{
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("deleteButt").style.visibility = "hidden";
            if (xmlhttp.responseText == 'SUCCESS') {
                document.getElementById("deleteButt").style.visibility = "visible";
            } else if (panel == 'releasePurchaseList') {
                document.getElementById("stockPanelPurchaseList").innerHTML = xmlhttp.responseText;
                document.getElementById("deleteButt").style.visibility = "visible";
            } else if (panel == 'releaseCustomerList') {
                document.getElementById("customerDetailsDiv").innerHTML = xmlhttp.responseText;
                document.getElementById("deleteButt").style.visibility = "visible";
            } else if (panel == 'stockPanelPurchaseList') {
                document.getElementById("stockPanelPurchaseList").innerHTML = xmlhttp.responseText;
                document.getElementById("deleteButt").style.visibility = "visible";
            } else if (panel == 'releaseSoldInvoice') {
                document.getElementById("itemSoldInvoiceDiv").innerHTML = xmlhttp.responseText;
                document.getElementById("deleteButt").style.visibility = "visible";
            } else {
                document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
                alert('Deleted Successfully!');
                document.getElementById("deleteButt").style.visibility = "visible";
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
}

var usertransId = new Array();
function selectAllDelete(panelName) {
    var deleteDel = document.getElementById('deleteallcheck').checked;
    var counter = parseFloat(document.getElementById('counter').value);
    if (panelName == 'releaseGirviList') {
        if (deleteDel == true) {
            confirm_box = confirm("You have selected all loan's to delete!\n Do you really want to continue!");
        }
    } else if (panelName == 'releaseCustomerList') {
        if (deleteDel == true) {
            confirm_box = confirm("You have selected all Customers to delete!\n Do you really want to continue!");
        }
    } else if (panelName == 'releasePurchaseList') {
        if (deleteDel == true) {
            confirm_box = confirm("You have selected all Purchase List to delete!\n Do you really want to continue!");
        }
    } else if (panelName == 'stockPanelPurchaseList') {
        if (deleteDel == true) {
            confirm_box = confirm("You have selected all Stock Purchase List to delete!\n Do you really want to continue!");
        }
    } else if (panelName == 'releaseSoldInvoice') {
        if (deleteDel == true) {
            confirm_box = confirm("You have selected all Invoices to delete!\n Do you really want to continue!");
        }
    }
    if (confirm_box == true) {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (deleteDel == true) {

                    for (var i = 1; i <= counter; i++) {

                        if (panelName == 'releasePurchaseList' || panelName == 'stockPanelPurchaseList') {
                            var sellPresent = document.getElementById('sellPresent' + i).value;
                            if (sellPresent == 1) {
                                alert('To Delete,First Delete This Item From Customer Jewellery Panel!');
                                document.getElementById('deletecheck' + i).checked = false;
                            } else {
                                document.getElementById('deletecheck' + i).checked = true;
                                usertransId[i] = document.getElementById('IdForDelete' + i).value;
                            }
                        } else {
                            if (xmlhttp.responseText == 'CustLoanPresent') {
                                alert("Please first delete all Loans of this Customer!");
                                document.getElementById('deleteallcheck').checked = false;
                                document.getElementById('deletecheck' + i).checked = false;
                            } else if (xmlhttp.responseText == 'CustPurInvPresent') {
                                alert("Please first delete all Purchase Invoices of this Customer!");
                                document.getElementById('deleteallcheck').checked = false;
                                document.getElementById('deletecheck' + i).checked = false;
                            } else if (xmlhttp.responseText == 'UdhaarPresent') {
                                alert("Please first delete all Udhaar of this Customer!");
                                document.getElementById('deleteallcheck').checked = false;
                                document.getElementById('deletecheck' + i).checked = false;
                            } else if (xmlhttp.responseText == 'AdvanceMoneyPresent') {
                                alert("Please first delete all Advance Money of this Customer!");
                                document.getElementById('deleteallcheck').checked = false;
                                document.getElementById('deletecheck' + i).checked = false;
                            } else if (xmlhttp.responseText == 'CustSellPresent') {
                                alert("Please first delete all Sell of this Customer!");
                                document.getElementById('deleteallcheck').checked = false;
                                document.getElementById('deletecheck' + i).checked = false;
                            } else if (xmlhttp.responseText == 'NewOrderPresent') {
                                alert("Please first delete all Orders of this Customer!");
                                document.getElementById('deleteallcheck').checked = false;
                                document.getElementById('deletecheck' + i).checked = false;
                            } else {
                                document.getElementById('deletecheck' + i).checked = true;
                                usertransId[i] = document.getElementById('IdForDelete' + i).value;
                            }
                        }
                    }
                } else {
                    for (var i = 1; i <= counter; i++) {
                        document.getElementById('deletecheck' + i).checked = false;
                    }
                }
            }
        };
    } else
    {
        document.getElementById('deleteallcheck').checked = false;
    }

    if (panelName == 'lossGirviList')
        xmlhttp.open("POST", "include/php/orgplglp.php?panelName=" + panelName, true);
    else if (panelName == 'releaseGirviList')
        xmlhttp.open("POST", "include/php/orgpregl.php?panelName=" + panelName, true);
    else if (panelName == 'releaseCustomerList')
        xmlhttp.open("POST", "include/php/omcdcsdl.php?custId=" + custId + "&panelName=" + panelName, true);
    else if (panelName == 'releasePurchaseList')
        xmlhttp.open("POST", "include/php/ogwaprlt.php?panelName=" + panelName, true);
    else if (panelName == 'stockPanelPurchaseList')
        xmlhttp.open("POST", "include/php/ogwastlt.php?panelName=" + panelName, true);
    else if (panelName == 'releaseSoldInvoice')
        xmlhttp.open("POST", "include/php/ogspsblt.php?panelName=" + panelName, true);
    xmlhttp.send();
}
//End Code to add function for delete selected and multiple loan : Author:SANT04JAN17
////////////////////////////////////Start Code For delete logs/////////////////////////////////////////////
/////// ////////////////////////////author :Suraj18JAN2018////////////////////////////////////////////////
function deleteSystemLogs() {
    confirm_box = confirm("All Systems Logs Will Be Deleted !\n Do you really want to continue!");
    if (confirm_box == true) {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("systemLogPanelDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        }

        xmlhttp.open("POST", "include/php/ommpsysdllg.php");
        xmlhttp.send();
    }

}
//////////////////////End Code For Delete Sysytem Log////////////////////////////////////////////
function deleteRecordId(panelName, recordId) {
    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this record or entry?");
    if (confirm_box == true)
    {
        var poststr = "panelName=" + encodeURIComponent(panelName)
                + "&recordId=" + encodeURIComponent(recordId);
        //
        send_delete_record_id('include/php/omdelrecord.php', poststr);
    }
}
//
function send_delete_record_id(url, parameters)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertDeleteRecordId;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
//
function alertDeleteRecordId()
{
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
            //alert('Deleted Successfully!');
            //document.getElementById("deleteButt").style.visibility = "visible";
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
}

// It will delete the multiple selected item
function deleteAllSelectedRecord(delCheck, panelName) {
    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");
    if (confirm_box == true)
    {
        var stockDeleteConfirm = '';
        if (panelName == 'retailStockPurList' || panelName == 'whsellStockPurList' || panelName == 'Stock' || panelName == 'FineStock' || panelName == 'Imitation' || panelName == 'imitationPurchaseList' || panelName == 'Crystal' || panelName == 'ImitationList' || panelName == 'CrystalList' || panelName == 'AllStock' || panelName == 'PurchaseRawStockList' || panelName == 'RawSellList' || panelName == 'FineStockDetails' || panelName == 'soldOutSellList' || panelName == 'soldOutPurList') {
            confirm_box_for_stock = confirm(deleteItemAlertMess + "\n\nDo you want to delete this Item From Stock?");
            if (confirm_box_for_stock == true) {
                stockDeleteConfirm = 'yes';
            } else {
                stockDeleteConfirm = 'no';
            }
        }

        var selectedDelId = new Array();
        for (var i = 0; i < delCheck.length; i++) {

            if (delCheck[i].checked)
                selectedDelId.push(delCheck[i].value);
        }

        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (panelName == 'retailStockPurList' || panelName == 'whsellStockPurList' || panelName == 'Stock' || panelName == 'FineStock' || panelName == 'Imitation' || panelName == 'imitationPurchaseList' || panelName == 'Crystal' || panelName == 'ImitationList' || panelName == 'CrystalList' || panelName == 'AllStock') {
                    document.getElementById("stockPanelPurchaseList").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'PurchaseRawStockList' || panelName == 'RawSellList') {
                    document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'FineStockDetails') {
                    document.getElementById("jewelleryPanel").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'soldOutSellList' || panelName == 'soldOutPurList') {
                    document.getElementById("sellPurchaseList").innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("paymentDiv").innerHTML = xmlhttp.responseText;
                }
                window.setTimeout(stockGlobalFunctionToCloseDiv, 1000);
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/ogwaldel.php?selectedDelId=" + selectedDelId + "&panelName=" + panelName + "&stockDeleteConfirm=" + stockDeleteConfirm, true);
        xmlhttp.send();
    }

}


function deleteAllRecordId(panelName) {
    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete these all records or entries?");
    if (confirm_box == true)
    {
        var transId = new Array();
        var delCounter = document.getElementById('counter').value;
        for (var i = 0; i <= delCounter; i++) {
            transId[i] = document.getElementById('deleteDiv' + i).value;
        }
        var poststr = "panelName=" + encodeURIComponent(panelName)
                + "&counter=" + encodeURIComponent(delCounter)
                + "&transId=" + encodeURIComponent(transId);
        //
        //alert(poststr);
        send_delete_record_id('include/php/omdelrecord.php', poststr);
    }
}
function getBarChart(div) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //alert(xmlhttp.responseText);
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(div).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppbarchart.php", true);
    xmlhttp.send();
}
function barChart() {
    $(function () {

        //var data_click = <?php echo $viewer; ?>;
        //var data_viewer = [1000, 2000, 1200, 1400, 1300, 1000, 2000, 1200, 1400, 1300, 1800, 2300];
        //var data_viewer = < ?php echo $viewer; ? > ;
        var data_viewer;
        $.ajax({
            url: 'include/php/omppchartapi.php',
            success: function (response) {
                response = response.trim();
                response = response.split("|");
                //alert(response[0]);
                //alert(response[1]);
                //alert(response[2]);
                //alert(response[3]);
                //alert(response[4]);

                xAxis = JSON.parse(response[0].trim());
                yAxis = JSON.parse(response[2].trim());
                yAxis2 = JSON.parse(response[4].trim());
                Highcharts.setOptions({
                    lang: {
                        decimalPoint: '.',
                        thousandsSep: ','
                    }
                });
                $('#container').highcharts({
                    chart: {
                        type: 'column'
                    },
                    title: {
                        text: response[6].trim()
                    },
                    xAxis: {
                        categories: xAxis
                    },
                    yAxis: {
                        title: {
                            text: response[1].trim()
                        },
                        labels: {
                            formatter: function () {
                                return Highcharts.numberFormat(this.value, '', ',', ',');
                            }
                        }
                    },
                    series: [{
                            name: response[3].trim(),
                            color: '#008000',
                            data: yAxis
                        },
                        {
                            name: response[5].trim(),
                            color: '#e74c3c',
                            data: yAxis2
                        }]
                });
            }
        });
    });
}
////Onclick Action changed by @auth:athu7jun17
function showStockItemDetailsGeneralDiv(sttrId, stockType, panelName) {
    //alert(stockType);
    //alert(panelName);
    var updatePanelName;
    var newPanelName;
    var documentRootPath = document.getElementById('documentRootPath').value;
    if (panelName == 'FineStock' || panelName == 'Stock' || panelName == 'FineStockDetails' || panelName == 'AllStock') {
        newPanelName = 'UpdateStock';
        updatePanelName = 'UpdateStock';
    }
    if (panelName == 'Imitation' || panelName == 'ImitationStockDetails' || panelName == 'imitationPurchaseList' || panelName == 'ImitationList') {
        /////start code to add conditions @auth:athu16JUN17
        if (stockType == 'wholesale') {
            stockType = 'wholeSale';
        }
        newPanelName = 'ImitationStock';
        updatePanelName = 'UpdateImitationStock';
    }
    if (panelName == 'Crystal' || panelName == 'CrystalItemStockDetails' || panelName == 'CrystalList') {
        /////start code to add conditions @auth:athu16JUN17
        if (stockType == 'retail') {
            stockType = 'retailStock';
        } else
        {
            stockType = 'wholeSaleStock';
        }
        newPanelName = 'CrystalPanel';
        updatePanelName = 'UpdateCrystal';
    }
    if (stockType == 'retail') {
        stockType = 'retail';
    }
    if (stockType == 'wholesale') {
        stockType = 'wholeSaleStock';
    }
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        }

    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamndv.php?sttrId=" + sttrId + "&updatePanelName=" + updatePanelName + "&panelName=" + newPanelName + "&stockType=" + stockType, true);
    xmlhttp.send();
}

////Onclick Action changed by @auth:ratnakar
function showMetalDetailWise(condition1, stockType, panelName, depth, condition2, condition3) {

    var documentRootPath = document.getElementById('documentRootPath').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (panelName == 'RawDetUpPanel')
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            else
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        }

    };
    if (panelName == 'RawDetUpPanel') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrwiadv.php?sttr_id=" + condition1 + "&rawPanelName=" + panelName + "&condition=" + depth, true);
    } else
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrmprlt.php?con1=" + condition1 + "&listPanel=" + panelName + "&depth=" + depth + "&con2=" + condition2 + "&con3=" + condition3, true);
    xmlhttp.send();
}

oFReader = new FileReader(), rFilter = /^(?:image\/bmp|image\/cis\-cod|image\/gif|image\/ief|image\/jpeg|image\/jpeg|image\/jpeg|image\/pipeg|image\/png|image\/svg\+xml|image\/tiff|image\/x\-cmu\-raster|image\/x\-cmx|image\/x\-icon|image\/x\-portable\-anymap|image\/x\-portable\-bitmap|image\/x\-portable\-graymap|image\/x\-portable\-pixmap|image\/x\-rgb|image\/x\-xbitmap|image\/x\-xpixmap|image\/x\-xwindowdump)$/i;
oFReader.onload = function (oFREvent) {

    var img = new Image();
    img.onload = function () {
        //document.getElementById("originalImg").src=img.src;
        var canvas = document.createElement("canvas");
        var ctx = canvas.getContext("2d");
        ratio = img.width / img.height;
        if (img.width > 1280) {
            canvas.width = 1280;
            canvas.height = 1280 / ratio;
        } else {
            //alert(document.getElementById("addItemSelectPhoto").files[0].name.match(/.(png|gif)$/i));
            if (parseInt(document.getElementById("addItemSelectPhoto").files[0].size / 1024) < 100) {
                canvas.width = img.width;
                canvas.height = img.height;
            } else if (parseInt(document.getElementById("addItemSelectPhoto").files[0].size / 1024) < 500) {
                canvas.width = img.width / 2;
                canvas.height = img.height / 2;
            } else if (parseInt(document.getElementById("addItemSelectPhoto").files[0].size / 1024) < 1000) {
                canvas.width = img.width / 3;
                canvas.height = img.height / 3;
            }
        }
        document.getElementById('compressedImageSize').value = canvas.width * canvas.height * 0.20;
        ctx.drawImage(img, 0, 0, img.width, img.height, 0, 0, canvas.width, canvas.height);
        //document.getElementById("uploadPreview").src = canvas.toDataURL();
        if (document.getElementById("addItemSelectPhoto").files[0].name.match(/.(png|gif)$/i) == '.png,png')
            document.getElementById('compressedImage').value = canvas.toDataURL('image/png');
        else
            document.getElementById('compressedImage').value = canvas.toDataURL('image/jpeg');
        //document.getElementById('compressedImageSize').value = canvas.size;
        if (parseInt(document.getElementById("addItemSelectPhoto").files[0].size / 1024) > 300) {
            canvas.width = 256;
            canvas.height = 256;
        }
        ctx.drawImage(img, 0, 0, img.width, img.height, 0, 0, canvas.width, canvas.height);
        document.getElementById('compressedImageThumb').value = canvas.toDataURL('image/jpeg');
    }
    img.src = oFREvent.target.result;
    //document.getElementById('compressedImage').value = img.src;
    //
    //document.getElementById('fileName').value = img.src;
};
function loadImageFileCompress() {

    if (document.getElementById("addItemSelectPhoto").files.length === 0) {
        return;
    }
    var oFile = document.getElementById("addItemSelectPhoto").files[0];
    if (!rFilter.test(oFile.type)) {
        alert("You must select a valid image file!");
        return;
    }
    oFReader.readAsDataURL(oFile);
    document.getElementById('fileName').value = document.getElementById("addItemSelectPhoto").value;
    //document.getElementById("addItemSelectPhoto").value = '';
}
//
function loginWithFingerScan(id, fingerId) {
    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
//            alert(req.responseText);
            //document.getElementById("ajax_loading_lg_div").style.visibility = "hidden";
            if (id == "verifyButt") {
//                alert(str);
                var str = req.responseText;
//                alert(str);
                var strArray = new Array();
                strArray = str.split(":");
                if (strArray.length > 1) {
                    document.getElementById("ajax_loading_lg_div").style.visibility = "hidden";
                    var fileName = strArray[1];
                    var custIdArr = new Array();
                    custIdArr = fileName.split(".");
                    fingerId = custIdArr[0];
//                    alert(fingerId);
                    if (fingerId != '' || fingerId != null) {
                        goLoginByFingerScan(fingerId);
                    }
                } else {
                    document.getElementById('ajax_loading_lg_div').innerHTML = 'Finger Print Device Error OR Finger Prints Not Matched!';
                }
            } else {
                document.getElementById("ajax_loading_lg_div").style.visibility = "hidden";
            }
        } else {
            document.getElementById("ajax_loading_lg_div").style.visibility = "visible";
        }
    }

    if (id == "captureButt") {
        req.open("GET", "include/php/ommpfgsccapture.php?custId=" + fingerId, true);
    } else {
        req.open("GET", "include/php/ommpfgscverify.php?checkSession=NO", true);
    }
    req.send();
}
//
function goLoginByFingerScan(fingerId) {
    //alert(fingerId);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_lg_div").style.visibility = "hidden";
            window.location.href = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_lg_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/owner/omollogn.php?ownerId=" + fingerId, true);
    xmlhttp.send();
}


//------------------------------Add Function to Switch Transaction Panel To Trasaction Payment---------------------------------//
//----------------------------------------------Modified By Harshad---------------------------------------------------//

function transactionPayment() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("changeTransactionPanel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    document.getElementById("transactionPanel_div").style.display = "none";
    document.getElementById("paymentTransaction_div").style.display = "block";
    xmlhttp.open("GET", "include/php/omtransactionPanel.php", true);
    xmlhttp.send();
}

function transactionPaymentList(panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("changeTransactionPanel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    document.getElementById("transactionPanel_div").style.display = "none";
    document.getElementById("paymentTransaction_div").style.display = "block";
    xmlhttp.open("GET", "include/php/omtranpaylst.php?panelName=" + panelName, true);
    xmlhttp.send();
}

function transactionPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("changeTransactionPanel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    document.getElementById("transactionPanel_div").style.display = "block";
    document.getElementById("paymentTransaction_div").style.display = "none";
    xmlhttp.open("GET", "include/php/omtatrndsb.php", true);
    xmlhttp.send();
}

//--------------------------------------Modified By Harshad-----------------------------------------------//


//----------------------------Add Function to set values in Trasaction Payment Invoice Div----------------------------//
//--------------------------------------Modified By Harshad-----------------------------------------------//
function showPaymentTransactionDetailsDiv(utinId, panelName) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("changeTransactionPanel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omtransactionPanel.php?panelName=" + panelName + "&utinId=" + utinId, true);
    xmlhttp.send();
}
//--------------------------------------Modified By Harshad-----------------------------------------------//

//---------------------------- Function to Navigate on Stock Panel ----------------------------//
//-------------------------------------- Modified By Sunaina -----------------------------------------------//
function navigationUniversal(divPanel, divName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addstockform").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/stock/omAddNewForm.php?divPanel" + divPanel + "&divName" + divName, true);
    xmlhttp.send();
}
function AddStockUniForm(divPanel, divName) {
    loadXMLDoc();
    //alert("hellllo");
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("UniAddStockform").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/stock/omAddStock.php?divPanel" + divPanel + "&divName" + divName, true);
    xmlhttp.send();
}
function GenerateBarcode() {
    loadXMLDoc();
    //alert("hellllo");
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            // document.getElementById("UniAddStockform").innerHTML = xmlhttp.responseText;

            alert("ALL BARCODE ARE GENERATED");
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omadgenitbc.php");
    xmlhttp.send();
}

// *************************************************************************************************************************************
// START CODE TO ADD FUNCTION FOR GOOGLE SUGGESTION FUNCTIONALITY @PRIYANKA-03MAY18
// *************************************************************************************************************************************
var googleSuggKeyCode;
var googleSuggDiv;
var mainInputFieldIdGlobal;
function googleSuggestionDropdown(tableName, columnName, searchValue, whereConditionColumns, mainInputFieldId, selectDropdownClass, keyCodeInput, searchValueBlank, googleSuggDivLocal) {

    googleSuggKeyCode = keyCodeInput;
    googleSuggDiv = googleSuggDivLocal;
    mainInputFieldIdGlobal = mainInputFieldId;

    var poststr = "searchValue=" + encodeURIComponent(searchValue) +
            "&keyCodeInput=" + encodeURIComponent(keyCodeInput) +
            "&tableName=" + encodeURIComponent(tableName) +
            "&columnName=" + encodeURIComponent(columnName) +
            "&whereConditionColumns=" + encodeURIComponent(whereConditionColumns) +
            "&mainInputFieldId=" + encodeURIComponent(mainInputFieldId) +
            "&selectDropdownClass=" + encodeURIComponent(selectDropdownClass) +
            "&searchValueBlank=" + encodeURIComponent(searchValueBlank);
    google_suggestion_dropdown('include/php/omGoogleSuggestion.php', poststr);
}
//
function google_suggestion_dropdown(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertGoogleSuggestionDropdown;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
//
function alertGoogleSuggestionDropdown() {
    //
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        //
        if (xmlhttp.responseText != '') {
            document.getElementById(googleSuggDiv).innerHTML = xmlhttp.responseText;
        }
        //
        if (googleSuggKeyCode == 40 || googleSuggKeyCode == 38) {
            //document.getElementById('googleSuggForSearchValueSelect').focus();
            var element = document.getElementById('googleSuggForSearchValueSelect');
            //
            if (typeof (element) != 'undefined' && element != null)
            {
                var elementSelectedIndex = element.selectedIndex;
                //
                if (element.selectedIndex == -1) {
                    document.getElementById('googleSuggForSearchValueSelect').options[0].selected = true;
                    //element.selectedIndex = 0;
                } else {
                    if (googleSuggKeyCode == 40) {
                        document.getElementById('googleSuggForSearchValueSelect').options[elementSelectedIndex].selected = false;
                        if (elementSelectedIndex < element.options.length - 1)
                            document.getElementById('googleSuggForSearchValueSelect').options[elementSelectedIndex + 1].selected = true;
                    }
                    if (googleSuggKeyCode == 38) {
                        document.getElementById('googleSuggForSearchValueSelect').options[elementSelectedIndex].selected = false;
                        if (elementSelectedIndex > 0)
                            document.getElementById('googleSuggForSearchValueSelect').options[elementSelectedIndex - 1].selected = true;
                    }
                }
                document.cookie = "om_google_sugg_srchstr=" + document.getElementById('googleSuggForSearchValueSelect').value;
                document.getElementById(mainInputFieldIdGlobal).value = document.getElementById('googleSuggForSearchValueSelect').value;
//            document.getElementById(mainInputFieldIdGlobal).focus();
            }
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }

}
//
//
function google_suggestion_dropdown_blank(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertGoogleSuggestionDropdownBlank;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertGoogleSuggestionDropdownBlank() {
    //
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        if (typeof (document.getElementById('googleSuggForSearchValueSelect')) != 'undefined' && document.getElementById('googleSuggForSearchValueSelect') != null)
            if (document.getElementById('googleSuggForSearchValueSelect').value != '')
                document.getElementById(mainInputFieldIdGlobal).value = document.getElementById('googleSuggForSearchValueSelect').value;
        document.getElementById(googleSuggDiv).innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
    //
}
function googleSuggestionDropdownBlank(divName) {
    googleSuggDiv = divName;
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    var poststr = "";
    google_suggestion_dropdown_blank('include/php/ombbblnk.php', poststr);
}
// *************************************************************************************************************************************
// END CODE TO ADD FUNCTION FOR GOOGLE SUGGESTION FUNCTIONALITY @PRIYANKA-03MAY18
// *************************************************************************************************************************************
//

//************************************************************************************************************************************************************
//******************* START CODE FOR NAVIGATION ON PANEL *****************************************************************************************************
//************************************************************************************************************************************************************
// CHANGES DONE IN FUNCTION FOR ADDING SOME PARAMETERS LIKE TRANSACTION TYPE, INDICATOR, STOCK TYPE, OPERATION @PRIYANKA-12MAY18
function navigatationPanelByFileName(divName, fileName, panelName, indicator, transactionType, stockType, operation, type, custId, metType, mainPanel, payCRDR, firmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(divName).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/" + fileName + ".php?panelName=" + panelName + "&indicator=" + indicator
            + "&stockType=" + stockType + "&transactionType=" + transactionType + "&operation=" + operation
            + "&type=" + type + "&custId=" + custId + "&metType=" + metType
            + "&mainPanel=" + mainPanel + "&transCRDR=" + payCRDR + "&firmId=" + firmId
            + "&divName=" + divName + "&mainUserPanel=" + mainPanel, true);
    xmlhttp.send();
}
// CHANGES DONE IN FUNCTION FOR ADDING SOME PARAMETERS LIKE TRANSACTION TYPE, INDICATOR, STOCK TYPE, OPERATION @PRIYANKA-12MAY18
//***************************************************************************************************************************************************************
//******************* END CODE FOR NAVIGATION ON STOCK FORM FUNCTION ********************************************************************************************
//***************************************************************************************************************************************************************

//*******************************************************************************************************************************************
//******************* START CODE FOR ON CHANGE FUNCTION *************************************************************************************
//*******************************************************************************************************************************************
function onChangeFunction(ownerIdColumn, searchValue, passElement, tableName, columnName, columnNameAlias, searchColumnName) {
    //
    setTimeout(function () {
        //alert(searchValue);
        if (typeof (document.getElementById(searchValue)) != 'undefined')
            searchValuePara = document.getElementById(searchValue).value;
        //alert(document.getElementById(searchValue).value);
        loadXMLDoc2();
        xmlhttp2.onreadystatechange = function () {
            if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                //alert("Res=" + xmlhttp2.responseText);
                document.getElementById(passElement).value = xmlhttp2.responseText;

            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp2.open("POST", "include/php/omOnChangeFunction.php?ownerIdColumn=" + ownerIdColumn + "&searchValue=" + searchValuePara +
                "&passElement=" + encodeURIComponent(passElement) + "&tableName=" + tableName + "&columnName=" + encodeURIComponent(columnName) +
                "&columnNameAlias=" + columnNameAlias + "&searchColumnName=" + searchColumnName, true);
        xmlhttp2.send();
    }, 100);
}
//
//********************************************************************************************
// Start code to add for search by category @Author:PRIYANKA-10JULY18
//********************************************************************************************
function searchItemCat(itemCat, metalType, divNum, keyCodeInput) {
    keyCodeForItemCat = keyCodeInput;
    divNumForItemCat = divNum;
    panelNameForItemCat = divNum;
    //
    var poststr = "itemCat=" + encodeURIComponent(itemCat)
            + "&metalType=" + encodeURIComponent(metalType)
            + "&divNum=" + encodeURIComponent(divNum);
    search_item_cat("include/php/omciladgv.php", poststr);
}
//
var keyCodeForItemCat;
var divNumForItemCat;
var panelNameForItemCat;
function search_item_cat(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchItemCat;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
//
function alertSearchItemCat() {
    if (panelNameForItemCat == 'jewelleryPanel') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemListCatDivToAddStock").innerHTML = xmlhttp.responseText;
            if (keyCodeForItemCat == 40 || keyCodeForItemCat == 38) {
                document.getElementById('itemListCatJewelleryPanelToAddItemSelect').focus();
                document.getElementById('itemListCatJewelleryPanelToAddItemSelect').options[0].selected = true;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    }
}
//
function searchItemCatForPanelBlank(divNum) {
    if (divNum == 'stockItemCat') {
        document.getElementById("itemListCatDivToAddStock").innerHTML = '';
    }
}
//********************************************************************************************
// End code to add for search by category @Author:PRIYANKA-10JULY18
//********************************************************************************************