/*************Start Code To Change Div @AUTHOR:PRIYA21MAY13******************/
/*************Start Code To Change Div Name @Author:PRIYA28SEP13******************/
function showSuppHomeNwOrItemDetailsDiv(documentRootPath, nwOrItemId, newItemPreId, newItemId, suppId, newOrSuppStatus, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("suppHomeNwOrItemDetailsDiv" + nwOrItemId).innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("suppHomeNwOrItemDetailsDiv" + nwOrItemId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwhiadv.php?nwOrItemId=" + nwOrItemId + "&suppId=" + suppId + "&panelName=" + panelName, true);
    xmlhttp.send();
}
/*************Start Code To Change Div Name @Author:PRIYA28SEP13******************/
/************End Code To Change Div @AUTHOR:PRIYA21MAY13************/
/*******START CODE TO Change Update File name @AUTHOR:PRIYA23MAR13***********/
/*******Start code to add div @Author:PRIYA09JUL14********************/
function showUpdateNewActionItemDiv(actionItemID) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddNewActionItem").style.visibility = "visible";
            document.getElementById("addActionItemDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("acitTitleDiv").innerHTML = "UPDATE TASK DETAILS";
            document.getElementById("taskDescrpn").focus();
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omaimndv.php?actionItemID=" + actionItemID + "&panelName=" + 'UpdateAcit', true);
    xmlhttp.send();
}
//************Start code to add function for reminder panel:Author:SANT07FEB17 
function showUpdateReminderItemDiv(actionItemID) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddNewActionItem").style.visibility = "visible";
            document.getElementById("addActionItemDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("acitTitleDiv").innerHTML = "UPDATE TASK DETAILS";
            document.getElementById("taskDescrpn").focus();
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ommpntfcn.php?actionItemID=" + actionItemID + "&panelName=" + 'UpdateAcit', true);
    xmlhttp.send();
}
//************End code to add function for reminder panel:Author:SANT07FEB17 
/*******End code to add div @Author:PRIYA09JUL14********************/
/*******END CODE TO Change Update File name @AUTHOR:PRIYA23MAR13***********/
function chngItemImgLoadOpt(chngItemImgLoadOpt, panelName, itemDivCount) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("itemImageLoadOption" + itemDivCount).value = chngItemImgLoadOpt; //alt to value changed @Author:PRIYA11NOV14
            if (chngItemImgLoadOpt == 'COM') {
                document.getElementById("file_input_div").innerHTML = xmlhttp.responseText;
            }
            else if (chngItemImgLoadOpt == 'WEB') {
                document.getElementById("webcam_input_div").innerHTML = xmlhttp.responseText;
            }

        }
        else {
            if (chngItemImgLoadOpt == 'COM') {
                document.getElementById("webcam_input_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
            }
            else if (chngItemImgLoadOpt == 'WEB') {
            }
        }
    };
    if (chngItemImgLoadOpt == 'COM') {
        xmlhttp.open("POST", "include/php/omcgicim.php?itemDivCount=" + itemDivCount, true);
    }
    else if (chngItemImgLoadOpt == 'WEB') {
        xmlhttp.open("POST", "include/php/omcgadif.php?panelName=" + panelName + "&itemDivCount=" + itemDivCount, true);
    }
    xmlhttp.send();
}
/************************************************************************/
/*** Start code to sort girvi panel modified by @AUTHOR: LINA4JUN2013 ***/
/************************************************************************/
function sortGirviPanel(documentRootPath, sortKeyword, selFirmId, rowsPerPage, gTransList) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/orgpglpd.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId +
            "&rowsPerPage=" + rowsPerPage + "&gTransList=" + gTransList, true);
    xmlhttp.send();
}

/**********************************************************************/
/*** End code to sort girvi panel modified by @AUTHOR: LINA4JUN2013 ***/
/**********************************************************************/
/*************Start code to add panel @Author:PRIYA03NOV14**************************/
function sortGirviExpiredPanel(documentRootPath, sortKeyword, selFirmId, rowsPerPage, expMonths, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'TPExpiredLoanList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/orgptpexgl.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage + "&expMonths=" + expMonths, true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/orgpexgl.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage + "&expMonths=" + expMonths, true);
    }
    xmlhttp.send();
}
/*************End code to add panel @Author:PRIYA03NOV14**************************/
function sortGirviReleasePanel(documentRootPath, sortKeyword, selFirmId, rowsPerPage) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/orgpregl.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage, true);
    xmlhttp.send();
}
function sortGirviLossPanel(documentRootPath, sortKeyword, selFirmId, rowsPerPage) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/orgplglp.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage, true);
    xmlhttp.send();
}
/*************Start code to Add conditions for FIANNACE list @Author: GAUR20JUNE16****************/
function sortLoansListPanel(documentRootPath, sortKeyword, selFirmId, rowsPerPage, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'financeList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omfnllpn.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage + "&panelName=" + panelName, true);
    } else if (panelName == 'collectionList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omfncml.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage + "&panelName=" + panelName, true);
    } else if (panelName == 'nonCollectionList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omfnncml.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage + "&panelName=" + panelName, true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/orgpllpn.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage, true);
    }
    xmlhttp.send();
}
/*************Start code to Add conditions for FIANNACE list @Author: GAUR20JUNE16****************/
/*********************Start Code To Add Udhaar Panel @Author:PRIYA18AUG13********************/
/***************Start to change function @AUTHOR: SANDY03FEB14****************/
/***************Start code to change filename @Author:PRIYA16FEB15**************/
/***************Start code to add panel for stockAdd @Author:PRIYA16FEB15***********/
/***************Start to change function @AUTHOR: SANDY03FEB14****************/
/***************Start code to add jrnlTransType for Imitation @Author:ANUJA20MAR15**********/
/***************End code to add jrnlTransType for CrystalAdd @Author:SHE23MAR15*********/
/***************Start code to add jrnlTransType for Auction @Author:ANUJA31MAR15**********/
/***************Start code to add condition for transLoan @Author:PRIYA13APR15************/
/***************Start update code @Author:GAUR24OCT16************/
function showJournalEntryListDiv(documentRootPath, jrnlId, jrnlDrDesc, jrnlUserId, jrnlUserType, jrnlTransId, jrnlTransType, accMainId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    // alert('jrnlUserType == ' + jrnlUserType);
    // alert('jrnlTransType == ' + jrnlTransType);
    // CHANGE CODE TO ADD CONDITION FOR SELL PANEL, PAYMENT/RECEIPT PANEL @PRIYANKA-17MAY18
    if (jrnlUserType == 'cust' && jrnlTransType == 'Girvi') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?custId=" + jrnlUserId + "&jrnlDrDesc=" + jrnlDrDesc + "&girviId=" + jrnlTransId + "&accMainId=" + accMainId + "&panelDivName=girviInfo", true);
    } else if (jrnlUserType == 'MoneyLender' && jrnlTransType == 'LOAN') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ommlmndv.php?mlId=" + jrnlUserId + "&jrnlDrDesc=" + jrnlDrDesc + "&mlLoanId=" + jrnlTransId + "&panelOption=LoanDetailPanel", true);
    } else if (jrnlUserType == 'Trans') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omtutrnd.php?transId=" + jrnlTransId, true);
    } else if (jrnlUserType == 'cust' && jrnlTransType == 'Udhaar') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?custId=" + jrnlUserId + "&custPanelOption=CustUdhaar", true);
    } else if (jrnlTransType == 'stockAdd') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamndv.php?sttrId=" + jrnlTransId + "&panelName=StockPayUp", true); // id changed from isin_id to stprId @Author:SHRI02MAR17
    } else if (jrnlTransType == 'AddRawMetal') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamsdv.php?rmin_id=" + jrnlTransId + "&rawPanelName=RawDetUpPanel", true);
    } else if (jrnlTransType == 'RepairItemAdd') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrpaddt.php?isin_id=" + jrnlTransId + "&panelName=RepairItemPayUp", true); //code to change file name and parameters @Author:SHRI25FEB15. 
    } else if (jrnlTransType == 'RepItemRawMetal') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?custId=" + jrnlUserId + "&jrnlDrDesc=" + jrnlDrDesc + "&accMainId=" + accMainId + "&panelDivName=ItemRepair", true);
    } else if (jrnlTransType == 'custSell') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?panelDivName=" + 'SellPanel' + "&panelName=" + 'CustSellUpPanel' + "&itslin_id=" + jrnlTransId, true);
    } else if (jrnlTransType == 'ImitationStockAdd') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogijssdv.php?utrans_id=" + jrnlTransId + "&panelName=ImitationStockPayUp&updatePanelName=UpdateImitationStock", true);
    } else if (jrnlTransType == 'crystalAdd') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogcraddv.php?isin_id=" + jrnlTransId + "&panelName=CrystalPanel&updatePanelName=CrystalPayUp", true);
    } else if (jrnlUserType == 'cust' && jrnlTransType == 'Auction') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/olgraudt.php?custId=" + jrnlUserId + "&jrnlDrDesc=" + jrnlDrDesc + "&girviId=" + jrnlTransId + "&accMainId=" + accMainId + "&panelDivName=girviAuctioned", true);
    } else if (jrnlTransType == 'transLoan') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/olgtnavi.php?gTransId=" + jrnlTransId + "&panelDivName=journalBookNav", true);
    } else if (jrnlUserType == 'CUSTOMER' && jrnlTransType == 'sell') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?custId=" + jrnlUserId + "&custPanelOption=" + 'CustHome', true);
    } else if (jrnlUserType == 'CUSTOMER' && (jrnlTransType == 'PAYMENT' || jrnlTransType == 'RECEIPT')) {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?custId=" + jrnlUserId + "&custPanelOption=" + 'CustHome' + "&panelName=" + 'custAllTrans', true);
    }
    xmlhttp.send();
}
/***************End update code @Author:GAUR24OCT16************/
/***************End code to add condition for transLoan @Author:PRIYA13APR15************/
/***************End code to add jrnlTransType for Auction @Author:ANUJA31MAR15**********/
/***************End code to add jrnlTransType for CrystalAdd @Author:SHE23MAR15*********/
/***************End code to add jrnlTransType for Imitation @Author:ANUJA20MAR15**********/
/***************End code to add panel for stockAdd @Author:PRIYA16FEB15***********/
/***************End code to change filename @Author:PRIYA16FEB15**************/
/***************End to change function @AUTHOR: SANDY03FEB14****************/
/*********************End Code To Add Udhaar Panel @Author:PRIYA18AUG13********************/
function showJournalEntryReleaseListDiv(documentRootPath, jrnlId, jrnlDrDesc, jrnlUserId, jrnlUserType, jrnlTransId, jrnlTransType, accMainId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (jrnlUserType == 'cust' && jrnlTransType == 'Girvi') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?custId=" + jrnlUserId + "&jrnlDrDesc=" + jrnlDrDesc + "&girviId=" + jrnlTransId + "&accMainId=" + accMainId + "&panelDivName=girviReleased", true);
    }
    xmlhttp.send();
}

/*******START CODE TO Move Item Bar Code Print Panel  @AUTHOR:PRIYA13FEB13***********/
var setBarCodeSlip65Div = '';
var setBarCodeSlip65Container = '';
var setBarCodeSlip65Container2 = '';
var setClose65Div = '';
var setClose65Container = '';
var setClose65Container2 = '';
function moveBarCodeSlip65L(barCodeSlipDiv, closeDivId) {
    if (setBarCodeSlip65Div == '') {

        setBarCodeSlip65Div = barCodeSlipDiv;
        setClose65Div = closeDivId;
        setBarCodeSlip65Container = document.getElementById(setBarCodeSlip65Div).innerHTML;
        setClose65Container = document.getElementById(setClose65Div).innerHTML;
        document.getElementById(closeDivId).innerHTML = "<img src='images/loading16.gif' />";
    } else if (barCodeSlipDiv != setBarCodeSlip65Div) {
        setBarCodeSlip65Container2 = document.getElementById(barCodeSlipDiv).innerHTML;
        setClose65Container2 = document.getElementById(closeDivId).innerHTML;
        document.getElementById(barCodeSlipDiv).innerHTML = setBarCodeSlip65Container;
        document.getElementById(setBarCodeSlip65Div).innerHTML = setBarCodeSlip65Container2;
        document.getElementById(closeDivId).innerHTML = setClose65Container;
        document.getElementById(setClose65Div).innerHTML = setClose65Container2;
        setBarCodeSlip65Div = '';
        setBarCodeSlip65Container = '';
        setBarCodeSlip65Container2 = '';
        setClose65Div = '';
        setClose65Container = '';
        setClose65Container2 = '';
    }
}
/*******END CODE TO Move Item Bar Code Print Panel  @AUTHOR:PRIYA13FEB13***********/
/*******START CODE TO Move Item Bar Code Print Panel  @AUTHOR:PRIYA15FEB13***********/
var setBarCodeSlip48Div = '';
var setBarCodeSlip48Container = '';
var setBarCodeSlip48Container2 = '';
var setClose48Div = '';
var setClose48Container = '';
var setClose48Container2 = '';
function moveBarCodeSlip84L(barCodeSlipDiv, closeDivId) {
    if (setBarCodeSlip48Div == '') {

        setBarCodeSlip48Div = barCodeSlipDiv;
        setClose48Div = closeDivId;
        setBarCodeSlip48Container = document.getElementById(setBarCodeSlip48Div).innerHTML;
        setClose48Container = document.getElementById(setClose48Div).innerHTML;
        document.getElementById(closeDivId).innerHTML = "<img src='images/loading16.gif' />";
    }
    else if (barCodeSlipDiv != setBarCodeSlip48Div) {
        setBarCodeSlip48Container2 = document.getElementById(barCodeSlipDiv).innerHTML;
        setClose48Container2 = document.getElementById(closeDivId).innerHTML;
        document.getElementById(barCodeSlipDiv).innerHTML = setBarCodeSlip48Container;
        document.getElementById(setBarCodeSlip48Div).innerHTML = setBarCodeSlip48Container2;
        document.getElementById(closeDivId).innerHTML = setClose48Container;
        document.getElementById(setClose48Div).innerHTML = setClose48Container2;
        setBarCodeSlip48Div = '';
        setBarCodeSlip48Container = '';
        setBarCodeSlip48Container2 = '';
        setClose48Div = '';
        setClose48Container = '';
        setClose48Container2 = '';
    }
}
/*******END CODE TO Move Item Bar Code Print Panel  @AUTHOR:PRIYA15FEB13***********/
/**********START CODE TO Add Slpr Inv @AUTHOR:PRIYA16FEB13***************/
/**********START CODE TO Change Inv Div @AUTHOR:PRIYA28FEB13***************/
/*****************Start of changes to search product depending on pre id @AUTHOR: SANDY16OCT13*********************/
/*****************Start code to change div @Author:PRIYA21JAN14*****************/
/***************Start Add new condition for checking Char for Imitation @Author:ANUJA25Feb15************************/
/***************Start Add new condition for checking Char and add else for A & J for  Imitation @Author:ANUJA28Feb15************************/
function showSlPrInvDiv(srchItemPreId, srchItemPostId, custId, panelName) {
//    alert(panelName);
    var firstChar = srchItemPreId.charAt(0);
    var res = firstChar.toUpperCase(); //chnaged @OMMODTAG PRIYA_05MAY15
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("sellPurchaseItemDetails").innerHTML = xmlhttp.responseText;
            if (res == 'G' || res == 'S' || res == 'O') {
                searchItemNames(itemName, metalType, divNum, keyCodeInput);
            }
            if (firstChar == 'R') {
                document.getElementById('slRwDOBDay').focus();
            } else {
                document.getElementById('slPrDOBDay').focus();
            }
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (firstChar == 'R' || firstChar == 'r') {
        xmlhttp.open("POST", "include/php/ogrwspdv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
    }
    else if (firstChar == 'A' || firstChar == 'a') {
        xmlhttp.open("POST", "include/php/ogijsmndv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
    }
    else if (firstChar == 'J' || firstChar == 'j') {
//****************START code to sell :DISH14NOV16******************************//
        xmlhttp.open("POST", "include/php/ogcrspdv_1.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
        //xmlhttp.open("POST", "include/php/ogcrspdv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
        //****************END code to sell :DISH14NOV16******************************//
    }
    else {
        if (panelName == 'ItemPurchaseByLot') {
            xmlhttp.open("POST", "include/php/ogspildv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
        } //  To Check For Crystal Code Added Code to add values in Barcode @Author:SHE18FEB15
        else if (panelName == 'CrystalPurchasePanel') {
//****************START code to sell :DISH14NOV16******************************//
            xmlhttp.open("POST", "include/php/ogcrspdv_1.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
//            xmlhttp.open("POST", "include/php/ogcrspdv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
//****************END code to sell :DISH14NOV16******************************//
        } else if (panelName == 'ImitationPurchasePanel') {
            xmlhttp.open("POST", "include/php/ogijsmndv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
        } else if (panelName == 'StockPurchasePanel') {
            xmlhttp.open("POST", "include/php/ogspjsdv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId + "&panelName=" + panelName, true);
        } else {
            xmlhttp.open("POST", "include/php/ogspmndv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
        }
    }
    xmlhttp.send();
}
/***************End Add new condition for checking Char and add else for A & J for  Imitation @Author:ANUJA28Feb15************************/
/***************End Add new condition for checking Char for Imitation @Author:ANUJA25Feb15************************/
/*****************End code to change div @Author:PRIYA21JAN14*****************/
/*****************End of changes to search product depending on pre id @AUTHOR: SANDY16OCT13*********************/
/**********END CODE TO Change Inv Div @AUTHOR:PRIYA28FEB13***************/
/**********END CODE TO Add Slpr Inv @AUTHOR:PRIYA16FEB13***************/
/**********START CODE TO Add Acc Details @AUTHOR:PRIYA26FEB13***************/
function getAccDetailsDiv(accId, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omacacdt.php?accId=" + accId + "&panel=" + panel, true);
    xmlhttp.send();
}
/**********END CODE TO Add Acc Details @AUTHOR:PRIYA18FEB13***************/
/**********START CODE For WEBCAM In ADDSTOCK @AUTHOR:PRIYA26FEB13***************/
/**********Start code to add panel @Author:PRIYA14AUG14*****************/
/**********Start code to add panel @Author:PRIYA13SEP14**********************/
/**********Start code to add panel for add stock @Author:PRIYA27SEP14********************/
function chngStockImgLoadOpt(chngStockImgLoadOption, panelName, itemCount, documentRootPath) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (panelName == 'SuppPanel')
                document.getElementById("stockImageLoadOption" + itemCount).value = chngStockImgLoadOption;
            else if (panelName == 'AddStock')
                document.getElementById("stockImageLoadOption").value = chngStockImgLoadOption;
            else
                document.getElementById("imageLoadOption").value = chngStockImgLoadOption;
            if (chngStockImgLoadOption == 'COM') {
                document.getElementById("file_input_div").innerHTML = xmlhttp.responseText;
            }
            else if (chngStockImgLoadOption == 'WEB') {
                document.getElementById("webcam_input_div").innerHTML = xmlhttp.responseText;
            }

        } else {
            if (chngStockImgLoadOption == 'COM') {
                document.getElementById("webcam_input_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
            }
            else if (chngStockImgLoadOption == 'WEB') {

            }
        }
    };
    if (chngStockImgLoadOption == 'COM') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcsicim.php?panelName=" + panelName + "&itemCount=" + itemCount, true);
    }
    else if (chngStockImgLoadOption == 'WEB') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcsadif.php?panelName=" + panelName + "&itemDivCount=" + itemCount, true);
    }
    xmlhttp.send();
}
/**********End code to add panel for add stock @Author:PRIYA27SEP14********************/
/**********End code to add panel @Author:PRIYA13SEP14**********************/
/**********End code to add panel @Author:PRIYA14AUG14*****************/
/**********END CODE For WEBCAM In ADDSTOCK @AUTHOR:PRIYA22FEB13***************/
/**********START CODE To Add WEBCAM DIV In Staff Panel @AUTHOR:PRIYA20FEB13***************/
/**********Start code To Pass Staff Id @AUTHOR:PRIYA18MAY13***************/
function chngStaffImgLoadOpt(chngStaffImgLoadOption, panelName, staffId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("staffImageLoadOption").value = chngStaffImgLoadOption;
            if (chngStaffImgLoadOption == 'Computer') {
                document.getElementById("webcam_input_div").innerHTML = '';
                document.getElementById("file_input_div").innerHTML = xmlhttp.responseText;
            }
            else if (chngStaffImgLoadOption == 'Webcam') {
                document.getElementById("file_input_div").innerHTML = '';
                document.getElementById("webcam_input_div").innerHTML = xmlhttp.responseText;
            }

        } else {
            if (chngStaffImgLoadOption == 'Computer') {
                document.getElementById("webcam_input_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
            }
            else if (chngStaffImgLoadOption == 'Webcam') {
                document.getElementById("file_input_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
            }
        }
    };
    if (chngStaffImgLoadOption == 'Computer') {
        xmlhttp.open("POST", "include/php/omccpcim.php?panelName=" + panelName + "&staffId=" + staffId, true);
    }
    else if (chngStaffImgLoadOption == 'Webcam') {
        xmlhttp.open("POST", "include/php/omccwcif.php", true);
    }

    xmlhttp.send();
}
/**********End code To Pass Staff Id @AUTHOR:PRIYA18MAY13***************/
/**********END CODE To Add WEBCAM DIV In Staff Panel @AUTHOR:PRIYA20FEB13***************/
/******************START Code To Add Cust Id In Payment Div @AUTHOR:PRIYA26FEB13*******************/
/*********Start CODE TO Add FirmId @AUTHOR:PRIYA08APR13 ************/
/***************Start to make changes to use same function for raw stock sell @AUTHOR: SANDY12OCT13***************/
/***************Start of change to set focus on metal type field on load @AUTHOR: SANDY19OCT13****************************/
/***************Start code to change param @Author:PRIYA19JAN14****************/
/***************Start code to Add slprinPanel @Author:ANUJA03APR15****************/
/***************Start code to Add condition for raw metal OMMODTAG_SHE24DEC15****************/
/***************Start code to Add condition for raw metal OMMODTAG_SHE07JAN16****************/
function getPaymentDiv(documentRootPath, preInvoiceNo, postInvoiceNo, panelName, navPanel, slprinPanel, userId, suppId, mainPanel, transPanelName) {
    alert(mainPanel);
    alert(transPanelName);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (navPanel == 'SellPurchase') {
                document.getElementById("slPrMainDiv").innerHTML = xmlhttp.responseText;
            } else if (navPanel == 'NewOrder') {
                document.getElementById("newOrderDivs").innerHTML = xmlhttp.responseText;
            } else if (navPanel == 'RawStock' || panelName == 'RawPayment') {
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            }
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (navPanel == 'RawStock' || panelName == 'RawPayment') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrmiddv.php?paymentPanelName=" + panelName + "&preInvNo=" + preInvoiceNo + "&postInvNo=" + postInvoiceNo + "&slprinPanel=" + slprinPanel + "&suppId=" + suppId, true);
    }
    else
    {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ompyamt.php?paymentPanelName=" + panelName + "&preInvNo=" + preInvoiceNo + "&postInvNo=" + postInvoiceNo + "&slprinPanel=" + slprinPanel + "&userId=" + userId + "&mainPanelName=" + mainPanel + "&transPanelName=" + transPanelName, true);
    }
    xmlhttp.send();
}
/***************End code to Add condition for raw metal OMMODTAG_SHE07JAN16****************/
/***************End code to Add condition for raw metal OMMODTAG_SHE24DEC15****************/
/***************End code to Add slprinPanel @Author:ANUJA03APR15****************/
/***************End code to change param @Author:PRIYA19JAN14****************/
/***************End of change to set focus on metal type field on load @AUTHOR: SANDY19OCT13********************/
/***************End to make changes to use same function for raw stock sell @AUTHOR: SANDY12OCT13***************/
/*********End CODE TO Add FirmId @AUTHOR:PRIYA08APR13 ************/

/**********Start Changes in function for  WEBCAM In Item Repair @AUTHOR:SANDY17SEP13***************/
/**********START CODE For WEBCAM In NewOrder @AUTHOR:PRIYA25FEB13***************/
/**********Start Code To Add Div For Supp New Order Item Image @AUTHOR:PRIYA25MAY13***********/
/**********Start code to add panel for item_name  @Author:PRIYA25DEC13 **************/
function chngNewOrderImgLoadOpt(chngNewOrderLoadOption, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (panelName == 'SuppNewOrder') {
                document.getElementById("suppNwOrImageLoadOption").value = chngNewOrderLoadOption;
            } else if (panelName == 'NewOrder') {
                document.getElementById("nwOrImageLoadOption").value = chngNewOrderLoadOption;
            } else if (panelName == 'ItemName') {
                document.getElementById("itemNmImageLoadOption").value = chngNewOrderLoadOption;
            } else if (panelName == 'CustSell') {
                document.getElementById("slItemImageLoadOption").value = chngNewOrderLoadOption;
            }
            //Start to add lines for Item Repair Panel @AUTHOR:SANDY17SEP13
            else if (panelName == 'ItemRepair') {
                document.getElementById("repairImageLoadOption").value = chngNewOrderLoadOption;
            }
            //End to add lines for Item Repair Panel @AUTHOR:SANDY17SEP13
            if (chngNewOrderLoadOption == 'COM') {
                document.getElementById("file_input_div").innerHTML = xmlhttp.responseText;
            }
            else if (chngNewOrderLoadOption == 'WEB') {
                document.getElementById("webcam_input_div").innerHTML = xmlhttp.responseText;
            }

        } else {
            if (chngNewOrderLoadOption == 'COM') {
                document.getElementById("webcam_input_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
            }
            else if (chngNewOrderLoadOption == 'WEB') {

            }
        }
    };
    if (chngNewOrderLoadOption == 'COM') {
        xmlhttp.open("POST", "include/php/ognoicim.php?panelName=" + panelName, true);
    }
    else if (chngNewOrderLoadOption == 'WEB') {
        xmlhttp.open("POST", "include/php/omcsadif.php?panelName=" + panelName, true);
    }
    xmlhttp.send();
}
/**********End code to add panel for item_name  @Author:PRIYA25DEC13 **************/
/**********End Code To Add Div For Supp New Order Item Image @AUTHOR:PRIYA25MAY13***********/
/**********END CODE For WEBCAM In NewOrder @AUTHOR:PRIYA25FEB13***************/
/**********END Changes in function for WEBCAM In Item Repair @AUTHOR:SANDY17SEP13***************/
/**********Start Code To Validate Journal Entry Date @Author:PRIYA14AUG13**************/
function valJournalEntryDate() {
    /*if (validateSelectField(document.getElementById("journalEntryDayDD").value,"Please select Day!") == false) {
     document.getElementById("journalEntryDayDD").focus();
     return true; to remove validation for day AND show whole month entries @AUTHOR: SANDY20AUG13
     }else */if (validateSelectField(document.getElementById("journalEntryMonth").value, "Please select Month!") == false) {
        document.getElementById("journalEntryMonth").focus();
        return false;
    } else if (validateSelectField(document.getElementById("journalEntryYYYY").value, "Please select Year!") == false) {
        document.getElementById("journalEntryYYYY").focus();
        return false;
    }
    return true;
}
/***********End Code To Validate Journal Entry Date @Author:PRIYA14AUG13**************/

/***************START Code To Search Journal Entry By Date @AUTHOR:PRIYA13MARCH13**************/
/***************Start Code To Add Validation Function @Author:PRIYA14AUG13**************/
/**Start change in one line of this function  to pass more variables @AUTHOR: SANDY20AUG13 **/
function searchJournalEntryByDate(firmId, dd, mm, yyyy) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (valJournalEntryDate()) {
                document.getElementById("journalEntryDiv").innerHTML = xmlhttp.responseText;
            }
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var journalEntryDate = dd.value + '-' + mm.value + '-' + yyyy.value;
    xmlhttp.open("POST", "include/php/omacjnendv.php?firmId=" + firmId + "&journalEntryDate=" + journalEntryDate + "&dd=" + dd.value + "&mm=" + mm.value + "&yyyy=" + yyyy.value, true); //change while passing values of date @AUTHOR: SANDY20AUG13
    xmlhttp.send();
}
/**End change in one line of this function  to pass more variables @AUTHOR: SANDY20AUG13 **/
/***************End Code To Add Validation Function @Author:PRIYA14AUG13**************/
/***************END Code To Search Journal Entry By Date @AUTHOR:PRIYA13MARCH13**************/
/**********Start Code To Validate Girvi Analysis Date @Author:PRIYA14AUG13**************/
function valReportDate() {
    if (validateSelectField(document.getElementById("reportEntryDayDD").value, "Please select Day!") == false) {
        document.getElementById("reportEntryDayDD").focus();
        return false;
    } else if (validateSelectField(document.getElementById("reportEntryMonth").value, "Please select Month!") == false) {
        document.getElementById("reportEntryMonth").focus();
        return false;
    } else if (validateSelectField(document.getElementById("reportEntryYYYY").value, "Please select Year!") == false) {
        document.getElementById("reportEntryYYYY").focus();
        return false;
    }
    return true;
}
/**********End Code To Validate Girvi Analysis Date @Author:PRIYA14AUG13**************/
/**********Start Code To Add Validation Func for date @Author:PRIYA14AUG13**************/
/********* START CODE TO SEARCH ANALYSIS REPORT @AUTHOR: SANDY28JUN13 ***/
function searchReportByDate(firmId, dd, mm, yyyy) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (valReportDate()) {
                document.getElementById("girviAnalysisDiv").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var Date = dd.value;
    var month = mm.value;
    var year = yyyy.value;
    //alert(month);
    xmlhttp.open("POST", "include/php/orgnsfdv.php?firmId=" + firmId + "&dateDD=" + Date + "&dateMMM=" + month + "&dateYYYY=" + year, true);
    xmlhttp.send();
}
/**********End Code To Add Validation Func for date @Author:PRIYA14AUG13**************/
/********* END CODE TO SEARCH ANALYSIS REPORT @AUTHOR: SANDY26JUN13 ***/

/**********START CODE TO Add Item BarCode Div @AUTHOR:PRIYA05MARCH13***************/
/**********START CODE TO Change CustId @AUTHOR:PRIYA08MARCH13***************/
/*****************Start of changes to search product depending on pre id @AUTHOR: SANDY4OCT13*********************/
/*****************Start of changes to search product depending on pre id @AUTHOR: SANDY15OCT13*********************/
/*****************Start code to change div @Author:PRIYA04DEC13*********************/
function itemBarCodeSearch(itemBarCodeId, custId, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainSlPrSubDiv").innerHTML = xmlhttp.responseText;
            if (barCodeFirstTwoLetters == 'it' || barCodeFirstTwoLetters == 'IT') {
                document.getElementById('slRwDOBDay').focus();
            } else {
                document.getElementById('slPrDOBDay').focus();
            }
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var barCodeFirstTwoLetters = itemBarCodeId.substr(0, 2);
    var barCodeId = itemBarCodeId.substr(2);
    if (barCodeFirstTwoLetters == 'it' || barCodeFirstTwoLetters == 'IT') {
        xmlhttp.open("POST", "include/php/ogspmndv.php?itemBarCodeId=" + barCodeId + "&custId=" + custId + "&panelName=" + panelName, true);
    } else if (barCodeFirstTwoLetters == 'rt' || barCodeFirstTwoLetters == 'RT') {
        xmlhttp.open("POST", "include/php/ogrwspdv.php?itemBarCodeId=" + barCodeId + "&custId=" + custId + "&panelName=" + panelName, true);
    }
    xmlhttp.send();
}
/*****************End code to change div @Author:PRIYA04DEC13*********************/
/****************End of changes to search product depending on pre id @AUTHOR: SANDY4OCT13*********************/
/**********END CODE TO Change CustId @AUTHOR:PRIYA08MARCH13***************/
/**********END CODE TO Add Item BarCode Div @AUTHOR:PRIYA05MARCH13***************/

/**************Start Code To show SellPurchase Item Details Div @AUTHOR:PRIYA06MARCH13*****************************************/
/**************Start code to change div @Author:PRIYA18DEC13*****************************************/
/**************Start code to change div @Author:PRIYA06JAN14*****************************************/
function showSellPurchaseItemDetails(documentRootPath, custId, preInvoiceNo, postInvoiceNo, mainPanel, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omcdccdd.php?custId=" + custId + "&panelDivName=" + 'SellPurchase' + "&mainPanel=" + mainPanel + "&panelName=" + panelName +
            "&divMainMiddlePanel=" + panelName + "&preInvoiceNo=" + preInvoiceNo + "&postInvoiceNo=" + postInvoiceNo, true);
    xmlhttp.send();
}
/**************End code to change div @Author:PRIYA06JAN14*****************************************/
/**************End code to change div @Author:PRIYA18DEC13*****************************************/
/*****************End Code To show SellPurchase Item Details Div @AUTHOR:PRIYA06MARCH13*****************************************/
/*********Start Code To Add Navigation For Next Items In Stock List @AUTHOR:PRIYA18MARCH13********/
/*********Start Code To Add Search Variables In Jewellery Panel @AUTHOR:PRIYA31MAY13**************/
/*********Start code to add div @author:PRIYA15OCT14******************/
//START chnage file name ogilimdv.php to ogilistsd.php and div change addStockItemDetails to jewellerySubPanel Author:GAUR26JUL16
//add metal weight Author:GAUR29JUL16
function navigationItemListPanel(pageNo, startRange, endRange, itemName, metalType, noOfPagesAsLink, weight, panelName) {
//    alert(panelName);
    if (pageNo == 0) {
        document.getElementById('enterPageNo').value = '';
        alert("Please select correct page Number!!");
    }
    else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.barcode_search.barcode_text.focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (panelName == 'jwelleryPanel') {
                    document.getElementById("jewellerySubPanel").innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("jewellerySubPanel").innerHTML = xmlhttp.responseText;
                }
                if (pageNo >= 10) {
                    setPageValue(pageNo, noOfPagesAsLink);
                } else {
                    document.getElementById('pageNoTextField' + pageNo).setAttribute("class", "currentPageNoButton");
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        if (panelName == 'jwelleryPanel') {
            xmlhttp.open("POST", "include/php/ogijlimsd.php?page=" + pageNo + "&startRange=" + startRange + "&endRange=" + endRange + "&itemName=" + itemName +
                    "&stockItemMetal=" + metalType + "&metalWt=" + weight, true);
        } else if (panelName == 'WholsaleJwelleryPanel') {
            xmlhttp.open("POST", "include/php/ogijlimsd_1.php?page=" + pageNo + "&startRange=" + startRange + "&endRange=" + endRange + "&itemName=" + itemName +
                    "&stockItemMetal=" + metalType + "&metalWt=" + weight, true);
        } else if (panelName == 'WindowShoppingList') {
            xmlhttp.open("POST", "include/php/ogilstws.php?page=" + pageNo + "&startRange=" + startRange + "&endRange=" + endRange + "&itemName=" + itemName +
                    "&stockItemMetal=" + metalType + "&metalWt=" + weight + "&divPanel=" + panelName, true);
        } else {
            xmlhttp.open("POST", "include/php/ogilistsd.php?page=" + pageNo + "&startRange=" + startRange + "&endRange=" + endRange + "&itemName=" + itemName +
                    "&stockItemMetal=" + metalType + "&metalWt=" + weight, true);
        }

        xmlhttp.send();
    }
}
//add metal weight Author:GAUR29JUL16
//END chnage file name ogilimdv.php to ogilistsd.php and div change addStockItemDetails to jewellerySubPanel Author:GAUR26JUL16
/*********End code to add div @author:PRIYA15OCT14******************/
/*********End Code To Add Search Variables In Jewellery Panel @AUTHOR:PRIYA31MAY13******************/
/*********End Code To Add Navigation For Next Items In Stock List @AUTHOR:PRIYA18MARCH13********/
/********Start Code To Select FirmId In All Accounts Panel @AUTHOR:PRIYA13MAR13**********/
/**Start change in one line of this function  to pass more variables @AUTHOR: SANDY20AUG13 **/
function getJournalBookByFrmId(firmId, dd, mm, yyyy) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("journalEntryDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var journalEntryDate = dd.value + '-' + mm.value + '-' + yyyy.value;
    xmlhttp.open("POST", "include/php/omacjnendv.php?firmId=" + firmId + "&journalEntryDate=" + journalEntryDate + "&dd=" + dd.value + "&mm=" + mm.value + "&yyyy=" + yyyy.value, true); //change in this line to pass more variables @AUTHOR: SANDY20AUG13
    xmlhttp.send();
}
/**End change in one line of this function  to pass more variables @AUTHOR: SANDY20AUG13 **/
/********End Code To Select FirmId In All Accounts Panel @AUTHOR:PRIYA13MAR13**********/
//**************************** Navigate Search Customer By Mobile No ************************************************************
/******************Start Code to add panel @Author:PRIYA23OCT13***************/
/*******************Start code to comment function @Author:PRIYA18NOV13********/
/*function getDailyDiaryByFirmName(ddDetVal, firmId, dd, mm, yyyy) {
 loadXMLDoc();
 xmlhttp.onreadystatechange = function() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
 document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
 } else {
 document.getElementById("main_ajax_loading_div").style.visibility = "visible";
 }
 };
 var dailyDiaryDate = yyyy.value + '-' + mm.value + '-' + dd.value;
 xmlhttp.open("POST", "include/php/omddddan.php?firmId=" + firmId + "&dailyDiaryDate=" + dailyDiaryDate + "&ddDetVal=" + ddDetVal, true);
 xmlhttp.send();
 }*/
/*******************End code to comment function @Author:PRIYA18NOV13********/
/******************End Code to add panel @Author:PRIYA23OCT13***************/
/***********Start Code To Select FirmId In Girvi Ledger Panel @AUTHOR:PRIYA13MAR13********/
/***********Start Code To Add PanelName @AUTHOR:PRIYA09JUNE13*********************/
/***********Start Code To Add PanelName @AUTHOR:PRIYA20JUNE13***********/
/***********Start Code To Add PanelName @AUTHOR:PRIYA21JUNE13***********/
/**************Start code to add Int panel @Author:PRIYA18FEB14**********************/
/**************Start code to add panel @Author:PRIYA31MAR14*****************/
function getGirviLedgerByFirmName(panelName, firmId, yyyy, mm) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (panelName == 'OMREVO') {
                document.getElementById("girviLedgerDetails").innerHTML = xmlhttp.responseText;
            } else if (panelName == 'GOLD') {
                document.getElementById("goldLedgerDetails").innerHTML = xmlhttp.responseText;
            }
            else if (panelName == 'SILVER') {
                document.getElementById("silverLedgerDetails").innerHTML = xmlhttp.responseText;
            } else if (panelName == 'UdhaarLedger') {
                document.getElementById("udhaarLedgerDetails").innerHTML = xmlhttp.responseText;
            }
            else if (panelName == 'TransGirvi') { //for transferred girvi list @AUTHOR: SANDY6AUG13
                document.getElementById("girviTransLedgerDetails").innerHTML = xmlhttp.responseText;
            } else if (panelName == 'LoanInt') {
                document.getElementById("loanIntLedgerDetails").innerHTML = xmlhttp.responseText;
            } else if (panelName == 'commomLedger') {
                document.getElementById("comLedgerDetails").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'OMREVO') {
        xmlhttp.open("POST", "include/php/orbbblsh.php?firmId=" + firmId + "&balanceSheetYear=" + yyyy.value + "&balanceSheetMonth=" + mm.value, true);
    }
    else if (panelName == 'GOLD') {
        xmlhttp.open("POST", "include/php/ogbbgdbs.php?firmId=" + firmId + "&balanceSheetYear=" + yyyy.value + "&balanceSheetMonth=" + mm.value, true);
    }
    else if (panelName == 'SILVER') {
        xmlhttp.open("POST", "include/php/ogbbslbs.php?firmId=" + firmId + "&balanceSheetYear=" + yyyy.value + "&balanceSheetMonth=" + mm.value, true);
    }
    else if (panelName == 'UdhaarLedger') {
        xmlhttp.open("POST", "include/php/ombbuubs.php?firmId=" + firmId + "&balanceSheetYear=" + yyyy.value + "&balanceSheetMonth=" + mm.value, true);
    }//Udhaar Ledger FileName Changed @Author:PRIYA13AUG13 
    else if (panelName == 'TransGirvi') { //for transferred girvi list @AUTHOR: SANDY6AUG13
        xmlhttp.open("POST", "include/php/orbbtrgl.php?firmId=" + firmId + "&balanceSheetYear=" + yyyy.value + "&balanceSheetMonth=" + mm.value, true);
    } else if (panelName == 'LoanInt') {
        xmlhttp.open("POST", "include/php/orbbinbs.php?firmId=" + firmId + "&balanceSheetYear=" + yyyy.value + "&balanceSheetMonth=" + mm.value, true);
    } else if (panelName == 'commomLedger') {
        xmlhttp.open("POST", "include/php/ombbcmbs.php?firmId=" + firmId + "&balanceSheetYear=" + yyyy.value + "&balanceSheetMonth=" + mm.value, true);
    }
    xmlhttp.send();
}
/**************End code to add panel @Author:PRIYA31MAR14*****************/
/***********End code to add Int panel @Author:PRIYA18FEB14**********************/
/***********End Code To Add PanelName @AUTHOR:PRIYA21JUNE13***********/
/***********End Code To Add PanelName @AUTHOR:PRIYA20JUNE13***********/
/***********End Code To Change FileName @AUTHOR:PRIYA09JUNE13*********************/
/***********End Code To Select FirmId In Girvi Ledger Panel @AUTHOR:PRIYA13MAR13********/

/***********Start Code To Select FirmId In Girvi Ledger Details Panel @AUTHOR:PRIYA14MAR13********/
/************Start Code To Change Div Name @Author:PRIYA24JUL13**************/
function getGirviLedgerDetailsByFirmName(firmId, FrmDay, FrmMonth, FrmYear, ToDay, ToMonth, ToYear) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerDetDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var girviLedgerDetStartDate = FrmDay.value + " " + FrmMonth.value + " " + FrmYear.value;
    var girviLedgerDetEndDate = ToDay.value + " " + ToMonth.value + " " + ToYear.value;
    xmlhttp.open("POST", "include/php/ombbgldv.php?firmId=" + firmId + "&girviLedgerDetStartDate=" + girviLedgerDetStartDate + "&girviLedgerDetEndDate=" + girviLedgerDetEndDate, true);
    xmlhttp.send();
}
/************End Code To Change Div Name @Author:PRIYA24JUL13**************/
/***********End Code To Select FirmId In Girvi Ledger Details Panel @AUTHOR:PRIYA14MAR13********/
/************Start Code To Select Financial year In Trial Balance Panel @AUTHOR:PRIYA15MAR13*************/
function getTrialBalance(firmId, fromDD, fromMM, fromYY, toDD, toMM, toYY) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("trialBalanceDiv").innerHTML = xmlhttp.responseText; //CHANGE IN DIV @AUTHOR: SANDY17JAN14
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omactrbl.php?firmId=" + firmId + "&trialBalanceFromDD=" + fromDD + "&trialBalanceFromMM=" + fromMM + "&trialBalanceFromYY=" + fromYY
            + "&trialBalanceToDD=" + toDD + "&trialBalanceToMM=" + toMM + "&trialBalanceToYY=" + toYY, true); //CHANGE IN FILE @AUTHOR: SANDY17JAN14
    xmlhttp.send();
}
/************End Code To Select Financial year In Trial Balance Panel @AUTHOR:PRIYA15MAR13*************/
/***********Start Code To Select FirmId In Trial Balance Panel @AUTHOR:PRIYA14MAR13********/


/************Start Code To Select Date In Stock Ledger Panel @AUTHOR:BAJRANG25FEB18*************/
function getStockLedgerByDate(DOBDay, DOBMonth, DOBYear) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("purchaseDetails").innerHTML = xmlhttp.responseText; //CHANGE IN DIV @AUTHOR: SANDY17JAN14
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogbbstdt.php?DOBDay=" + DOBDay + "&DOBMonth=" + DOBMonth + "&DOBYear=" + DOBYear, true); //CHANGE IN FILE @AUTHOR: SANDY17JAN14
    xmlhttp.send();
}
/************End Code To Select Stock Ledger Panel @AUTHOR:BAJRANG25FEB18*************/


function getTrialBalanceByFirmName(firmId, fromDD, fromMM, fromYY, toDD, toMM, toYY) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("trialBalanceDiv").innerHTML = xmlhttp.responseText; //CHANGE IN DIV @AUTHOR: SANDY17JAN14
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omactrbl.php?firmId=" + firmId + "&trialBalanceFromDD=" + fromDD + "&trialBalanceFromMM=" + fromMM + "&trialBalanceFromYY=" + fromYY
            + "&trialBalanceToDD=" + toDD + "&trialBalanceToMM=" + toMM + "&trialBalanceToYY=" + toYY, true); //CHANGE IN FILE @AUTHOR: SANDY17JAN14
    xmlhttp.send();
}
/***********End Code To Select FirmId In Trial Balance Panel @AUTHOR:PRIYA14MAR13********/
/************Start Code To Select Financial year In Balance Sheet Panel @AUTHOR:PRIYA15MAR13*************/
function getBalanceSheetByDate(firmId, yyyy) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("balanceSheetSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omacbsdv.php?firmId=" + firmId + "&balanceSheetYear=" + yyyy, true);
    xmlhttp.send();
}
/************End Code To Select Financial year In Balance Sheet Panel @AUTHOR:PRIYA15MAR13*************/

/***********Start Code To Select FirmId In Balance Sheet Panel @AUTHOR:PRIYA15MAR13********/
function getBalanceSheetByFirmName(firmId, yyyy) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("balanceSheetSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omacbsdv.php?firmId=" + firmId + "&balanceSheetYear=" + yyyy.value, true);
    xmlhttp.send();
}
/***********End Code To Select FirmId In Balance Sheet Panel @AUTHOR:PRIYA15MAR13********/
/*******Start Code To For Existing Item @AUTHOR:PRIYA15FEB13********/
/*******Start code to add var @Author:PRIYA24DEC13***************************/
function addStockExistingItemDiv(newPreInvoiceNo, newInvoiceNo, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogiaexad.php?newPreInvoiceNo=" + newPreInvoiceNo + "&newInvoiceNo=" + newInvoiceNo + "&panelName=" + panelName, true);
    xmlhttp.send();
}
/*******End code to add var @Author:PRIYA24DEC13***************************/
/*******End Code To For Existing Item @AUTHOR:PRIYA15FEB13********/

/******************Start Code To show Stock Item Details Div @AUTHOR:PRIYA18MAR13*************/
/******************Start Code To Change Stock Item Details Div @AUTHOR:PRIYA23APR13*************/
/******************Start Code To Add Panel Name @AUTHOR:PRIYA04MAY13*************/
function showItemDetailsDiv(documentRootPath, sttrId, panelName, page) {
    var panelNameItemDetails = panelName;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (panelNameItemDetails == 'stockList') {
                document.getElementById("stockList").innerHTML = xmlhttp.responseText;
            } else if (panelNameItemDetails == 'jewelleryPanel') {
                document.getElementById("addStockItemDetails").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogidsbdv.php?sttrId=" + sttrId + "&page=" + page, true);
    xmlhttp.send();
}
/******************End Code To Add Panel Name @AUTHOR:PRIYA04MAY13*************/
/***********************Start Code To Delete Stock Item Details Div @AUTHOR:PRIYA18MAR13************/
function deleteItemDetails(sttrId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("stockItemDetailsDiv" + itstId).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("stockItemDetailsDiv" + itstId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
/***********************End Code To Delete Stock Item Details Div @AUTHOR:PRIYA18MAR13************/

/********Start Code To Select FirmId In All Accounts Panel @AUTHOR:PRIYA18MAR13**********/
/*************Start code to select firm id @AUTHOR: SANDY26JUN13 ********/
/*************Start to change function @AUTHOR: SANDY29JAN14********/
function getAccByFrmId(firmId, acntType) {
    acntType = encodeURIComponent(acntType);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omacaclt.php?firmId=" + firmId + "&accountType=" + acntType, true);
    xmlhttp.send();
}
/*************End to change function @AUTHOR: SANDY29JAN14********/
/*************End code to select firm id @AUTHOR: SANDY26JUN13 ********/
/********End Code To Select FirmId In All Accounts Panel @AUTHOR:PRIYA18MAR13**********/

/********Start Code To Select FirmId In  Accounts Panel @AUTHOR:PRIYA19MAR13**********/
function getAddAccByFrmId(firmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omacacdv.php?firmId=" + firmId, true);
    xmlhttp.send();
}
/********End Code To Select FirmId In  Accounts Panel @AUTHOR:PRIYA19MAR13**********/
/********Start Code To Select FirmId In Transaction Panel @AUTHOR:PRIYA19MAR13**********/
/* * **Start to change code @AUTHOR: SANDY08FEB14***** */
function getTransactionAccountsByFrmId(firmId, day, month, year, panel) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainTransactionDiv").innerHTML = xmlhttp.responseText;
            getFirmVoucherNo(firmId, panel); //CALL FUNCTION TO SET VCH ID
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    /***********************************Check flag to set firm id on Transaction Payment Panel //modified by Harhsad//*****************************/
    if (panel == 'transactionPayment') {
        xmlhttp.open("POST", "include/php/omtransactionPanel.php?firmId=" + firmId + "&day=" + day + "&month=" + month + "&year=" + year, true); //change in file @AUTHOR: SANDY02JAN14
    } else {
        xmlhttp.open("POST", "include/php/omtatrndsb.php?firmId=" + firmId + "&day=" + day + "&month=" + month + "&year=" + year, true); //change in file @AUTHOR: SANDY02JAN14 
    }

    xmlhttp.send();
}
/* * **End to change code @AUTHOR: SANDY08FEB14***** */
/********End Code To Select FirmId In Transaction Panel @AUTHOR:PRIYA19MAR13**********/
/***********************Start Code To Delete Sell Purchase Item Details Div @AUTHOR:PRIYA22MAR13************/
function deleteSlPrItemDetails(slPrPreItemId, slPrItemId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("slPrItemDetailsDiv" + slPrPreItemId + slPrItemId).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("slPrItemDetailsDiv" + slPrPreItemId + slPrItemId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
/***********************Start Code To Delete Sell Purchase Item Details Div @AUTHOR:PRIYA22MAR13************/
/********Start Code To Add Function For Repair Table @AUthor:PRIYA10APR13******************/
function getRepairTableDiv() {
    confirm_box = confirm("Do you really want Repair Data Base?\n" + takeBackupAlertMsg); //add variables of alert msgs @AUTHOR: SANDY29JAN14

    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText == 'Success') {
                    document.getElementById("dataRepairButt").innerHTML = "<span class='textLabel20CalibriNormalGreen'>Database has been Repaired Successfully. &nbsp; डेटाबेस की सफलतापूर्वक मरम्मत की गई है!</span>";
                }
                else {
                    document.getElementById("dataRepairButt").innerHTML = "<span class='textLabel20CalibriNormalRed'>" + xmlhttp.responseText + "</span>";
                }
            } else {
                document.getElementById("dataRepairButt").innerHTML = "<img src='images/ajaxLoad.gif' />";
            }
        };
        xmlhttp.open("POST", "include/php/ommptbrp.php", true);
        xmlhttp.send();
    }
}
/********end Code To Add Function For Repair Table @AUthor:PRIYA10APR13******************/
/*******Start Code To Search Stock By Amount Range @AUTHOR:PRIYA18APR13*********/
function valSearchStockByAmountRangeInputs(obj) {
    if (validateEmptyField(document.srch_stock_AmtRange.stockAmtStartRange.value, "Please enter start range!") == false) {
        document.srch_stock_AmtRange.stockAmtStartRange.focus();
        return false;
    }
    else if (validateEmptyField(document.srch_stock_AmtRange.stockAmtEndRange.value, "Please enter end range!") == false)
    {
        document.srch_stock_AmtRange.stockAmtEndRange.focus();
        return false;
    }
    return true;
}

function search_stock_by_amt_range(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchStockByAmtRange;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
/**********Start code to change div @Author:PRIYA06FEB14*************/
function alertSearchStockByAmtRange() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("stockByAmtRangeGoButt").style.visibility = "visible";
        document.getElementById("jewellerySubPanel").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("stockByAmtRangeGoButt").style.visibility = "hidden";
    }
}
/**********End code to change div @Author:PRIYA06FEB14*************/
/*********Start Code To Add Metal Type In Jwellery Search Panel @AUTHOR:PRIYA28APR13*********/
//********************************************************************************************
// Start code to add for search by category @Author:PRIYANKA-10JULY18
//********************************************************************************************
function searchStockByAmountRange(obj) {
    if (valSearchStockByAmountRangeInputs(obj)) {
        var poststr = "startRange=" + encodeURIComponent(document.srch_stock_AmtRange.stockAmtStartRange.value)
                + "&endRange=" + encodeURIComponent(document.srch_stock_AmtRange.stockAmtEndRange.value)
                + "&itemName=" + encodeURIComponent(document.srch_stock_AmtRange.stockItemName.value)
                + "&itemCat=" + encodeURIComponent(document.srch_stock_AmtRange.stockItemCat.value)
                + "&stockItemMetal=" + encodeURIComponent(document.srch_stock_AmtRange.stockItemMetal.value)
                + "&metalWt=" + encodeURIComponent(document.srch_stock_AmtRange.selectMetalWeight.value); //TO PASS METAL WEIGHT TYPE @AUTHOR: SANDY7AUG13
        search_stock_by_amt_range('include/php/ogilistsd.php', poststr);
    }
}
/*********End Code To Add Metal Type In Jwellery Search Panel @AUTHOR:PRIYA28APR13*********/
//*******************************************************************************************
// End code to add for search by category @Author:PRIYANKA-10JULY18
//********************************************************************************************
function navigationStockListPanelByAmtRange(pageNo, startRange, endRange) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextItemsListButt").style.visibility = "visible";
            document.getElementById("jewelleryPanel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
            document.getElementById("ajaxLoadNextItemsListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/ogilimsd.php?page=" + pageNo + "&startRange=" + startRange + "&endRange=" + endRange, true);
    xmlhttp.send();
}
/*******End Code To Search Stock By Amount Range @AUTHOR:PRIYA18APR13*********/
/*********Start Code To Hide Function To Search Stock List By Amount Range @AUTHOR:PRIYA04MAY13*********/
/*******Start Code To Search Stock List By Amount Range @AUTHOR:PRIYA20APR13*********/
/*function valSearchStockListByAmountRangeInputs(obj) {
 if (document.srch_stock_list_AmtRange.stockListAmtStartRange.value != "" && validateEmptyField(document.srch_stock_list_AmtRange.stockListAmtStartRange.value,"Please enter start range!") == false) {
 document.srch_stock_list_AmtRange.stockListAmtStartRange.focus();
 return false;
 }
 else if (document.srch_stock_list_AmtRange.stockListAmtEndRange.value != "" && validateEmptyField(document.srch_stock_list_AmtRange.stockListAmtEndRange.value,"Please enter end range!") == false ||
 validateNum(document.srch_stock_list_AmtRange.stockListAmtEndRange.value,"Accept only Numbers without space character!") == false) {
 document.srch_stock_list_AmtRange.stockListAmtEndRange.focus();
 return false;
 }
 else if (document.srch_stock_list_AmtRange.stockListAmtEndRange.value != "" && validateEmptyField(document.srch_stock_list_AmtRange.stockListAmtEndRange.value,"Please enter end range!") == false
 ) {
 document.srch_stock_list_AmtRange.stockListAmtEndRange.focus();
 return false;
 }
 return true;
 }
 function search_stock_list_by_amt_range(url, parameters) {
 loadXMLDoc();
 
 xmlhttp.onreadystatechange = alertSearchStockListByAmtRange;
 
 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader('Content-Type',
 'application/x-www-form-urlencoded');
 xmlhttp.setRequestHeader("Content-length", parameters.length);
 xmlhttp.setRequestHeader("Connection", "close");
 xmlhttp.send(parameters);
 }
 
 function alertSearchStockListByAmtRange() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
 document.getElementById("stockListByAmtRangeGoButt").style.visibility = "visible";
 document.getElementById("stockList").innerHTML = xmlhttp.responseText;
 } else {
 document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
 document.getElementById("stockListByAmtRangeGoButt").style.visibility = "hidden";
 }
 }	
 function searchStockListByAmountRange(obj) {
 if(valSearchStockListByAmountRangeInputs(obj)){
 var poststr = "startRange=" + encodeURIComponent(document.srch_stock_list_AmtRange.stockListAmtStartRange.value)
 + "&endRange=" + encodeURIComponent(document.srch_stock_list_AmtRange.stockListAmtEndRange.value)
 + "&stockListSearchAdjust=" + encodeURIComponent(document.srch_stock_list_AmtRange.stockListSearchAdjustment.value)
 + "&itemName=" + encodeURIComponent(document.srch_stock_list_AmtRange.stockListItemName.value);
 
 search_stock_list_by_amt_range('include/php/ogialtsi.php', poststr);
 }
 }*/
/*********End Code To Hide Function To Search Stock List By Amount Range @AUTHOR:PRIYA04MAY13*********/
function navigationStockListPanelByAmtRange(pageNo, startRange, endRange) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextItemsListButt").style.visibility = "visible";
            document.getElementById("jewelleryPanel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
            document.getElementById("ajaxLoadNextItemsListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/ogilimsd.php?page=" + pageNo + "&startRange=" + startRange + "&endRange=" + endRange, true);
    xmlhttp.send();
}
/*******End Code To Search Stock List By Amount Range @AUTHOR:PRIYA20APR13*********/

/*function searchStockListByGrossWeight(obj) {
 loadXMLDoc();
 xmlhttp.onreadystatechange = function() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
 document.getElementById("ajaxLoadNextItemsListButt").style.visibility = "visible";
 document.getElementById("jewelleryPanel").innerHTML = xmlhttp.responseText;
 } else {
 document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
 document.getElementById("ajaxLoadNextItemsListButt").style.visibility = "hidden";
 }
 };
 
 xmlhttp.open("POST", "include/php/ogilimsd.php?page=" + pageNo + "&startRange=" + startRange + "&endRange=" + endRange, true);
 xmlhttp.send();
 }*/
/***********Start Code To Add Navigation Function For Prev And Next Button In Cust Details Panel @AUTHOR:PRIYA23APR13*************/
/***********Start Code To Add CustInterest @AUTHOR:PRIYA02MAY13*****************/
function navigationCustDetails(pageNo, sNo, selFirmId, sortKeyword, selCustInterest) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("customerDetails").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omccdtlt.php?page=" + pageNo + "&sNo=" + sNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&selCustInterest=" + selCustInterest, true);
    xmlhttp.send();
}
/***********End Code To Add CustInterest @AUTHOR:PRIYA02MAY13*****************/
/***********End Code To Add Navigation Function For Prev And Next Button In Cust Details Panel @AUTHOR:PRIYA23APR13*************/
/***********Start Code For Sorting In Cust Details Panel @AUTHOR:PRIYA23APR13*************/
/***********Start code to add param @Author:PRIYA20JUN14**********************/
/***********Start code to add parameters @OMMODTAG PRIYA_22MAY15**********/
function sortCustomerDetailsPanel(documentRootPath, sortKeyword, selFirmId, rowsPerPage, staffId, custInterest) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("customerDetails").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omccdtlt.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId +
            "&rowsPerPage=" + rowsPerPage + "&searchStaffId=" + staffId + "&custInterest=" + custInterest, true);
    xmlhttp.send();
}
/***********End code to add parameters @OMMODTAG PRIYA_22MAY15**********/
/***********End code to add param @Author:PRIYA20JUN14**********************/
/***********End Code For Sorting In Cust Details Panel @AUTHOR:PRIYA23APR13*************/
/***********Start Code For Sorting By Firm Name In Cust Details Panel @AUTHOR:PRIYA23APR13*************/
/***********Start code to add parameters @OMMODTAG PRIYA_22MAY15**********/
function getCustDetailsByFrmId(staffId, selFirmId, sortKeyword, searchColumnName, searchColumnValue, rowsPerPage, panel, custInterest) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("customerDetails").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omccdtlt.php?searchStaffId=" + staffId + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword
            + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&rowsPerPage=" + rowsPerPage + "&panel=" + panel + "&custInterest=" + custInterest, true);
    xmlhttp.send();
}
/***********End Code For Sorting By Firm Name In Cust Details Panel @AUTHOR:PRIYA23APR13*************/
/***********Start Code To Add Comment In Cust Details Panel @AUTHOR:PRIYA25APR13*************/
/***********Start Code To Add pageNo and firmId @AUTHOR:PRIYA02MAY13*************/
function addCustomerComments(documentRootPath, custCommentSubject, custCommentDesc, custId, panelName, pageNo, firmId, sortKeyword, searchColumn, searchValue, sNo, panel) {

    if (custCommentSubject == '') {
        alert("Please Enter Comment Subject!");
        document.getElementById("custCommentSubject" + custId).focus(); //added @OMMODTAG PRIYA_22MAY15
    }
    else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("customerListDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omcacomm.php?custCommentSubject= " + custCommentSubject + "&custCommentDesc=" + custCommentDesc + "&customerId=" + custId +
                "&panelName=" + panelName + "&page=" + pageNo + "&firmId=" + firmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn +
                "&searchValue=" + searchValue + "&sNo=" + sNo + "&panel=" + panel, true);
        xmlhttp.send();
    }
    /***********End Code To Add pageNo and firmId @AUTHOR:PRIYA02MAY13*************/
}/***********End Code To Add Comment In Cust Details Panel @AUTHOR:PRIYA25APR13*************/

/******************Start Code To Navigate to Cust Info In Cust Details Panel @AUTHOR:PRIYA24APR13*************/
/************Start code to add panel @Author:PRIYA24JUN14*************/
function showCustInfoDiv(documentRootPath, custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?custId=" + custId + "&panel=UpdateCust", true);
    xmlhttp.send();
}
/************End code to add panel @Author:PRIYA24JUN14*************/
/******************End Code To Navigate to Cust Info In Cust Details Panel @AUTHOR:PRIYA24APR13*************/

/******************Start Code To Navigate to Cust Details Panel @AUTHOR:PRIYA24APR13*************/
function showCustomerDetails() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("customerListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omccdtlt.php", true);
    xmlhttp.send();
}
/******************End Code To Navigate to Cust Details Panel @AUTHOR:PRIYA24APR13*************/

/***********Start Code To Get Customer Comments Div In Cust Details Panel @AUTHOR:PRIYA25APR13************/
/***********Start Code To Add PageNo and firmId @AUTHOR:PRIYA02MAY13************/
/***********Start code to change div @Author:PRIYA23JUN14********************/
function getCustomerCommentsDiv(custId, selFirmId, pageNo, sortKeyword, searchColumn, searchValue, sNo, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("custComments" + custId).innerHTML = xmlhttp.responseText;
            document.getElementById("custCommentSubject" + custId).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omcccdcm.php?custId=" + custId + "&pageNo=" + pageNo + "&selFirmId=" + selFirmId +
            "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&sNo=" + sNo + "&panel=" + panel, true);
    xmlhttp.send();
}
/***********End code to change div @Author:PRIYA23JUN14********************/
/***********End Code To Add PageNo and firmId @AUTHOR:PRIYA02MAY13************/
/***********End Code To Get Customer Comments Div In Cust Details Panel @AUTHOR:PRIYA25APR13************/
/***********Start Code To Update Mobile No In Cust Details Panel @AUTHOR:PRIYA27APR13**********/
var custMobId;
var custMobNo;
var custOldMobNo;
function validateAddCustDetailsMobileNoInputs(custMobNo) {
    if (validateEmptyField(custMobNo, "Please Enter Mobile Number!") == false ||
            ((validateNum(custMobNo, "Accept only Numbers without space character!") == false ||
                    validateLength10(custMobNo, "Mobile number length should be minimum 10!") == false))) {
        document.getElementById(custMobId).value = 'Not Updated';
        window.setTimeout(closeAddCustDetailsMobileNoMessNotUpd, 1000);
    } else {
        return true;
    }
    function closeAddCustDetailsMobileNoMessNotUpd()
    {
        document.getElementById(custMobId).value = custOldMobNo;
        document.getElementById(custMobId).focus();
        return false;
    }
}
function add_custDetails_mobile_no(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertAddCustDetailsMobileNo;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertAddCustDetailsMobileNo() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        if (xmlhttp.responseText == 'Updated') {
            document.getElementById(custMobId).value = 'Updated';
            window.setTimeout(closeAddCustDetailsMobileNoMess, 1000);
        } else {
            document.getElementById(custMobId).value = 'Not Updated';
            window.setTimeout(closeAddCustDetailsMobileNoMess, 1000);
        }
    } else {
        document.getElementById(custMobId).value = 'Not Updated';
        window.setTimeout(closeAddCustDetailsMobileNoMess, 1000);
    }
    function closeAddCustDetailsMobileNoMess()
    {
        document.getElementById(custMobId).value = custMobNo;
    }
}
/************Start Code To Add Panel Name @Author:PRIYA19AUG13*********/
function addCustDetailsMobileNo(mobNo, oldMobNo, custId, panelName) {

    custMobId = 'custDetailsMobileNo' + custId;
    custMobNo = mobNo;
    custOldMobNo = oldMobNo;
    if (validateAddCustDetailsMobileNoInputs(custMobNo)) {
        var poststr = "mobNo=" + encodeURIComponent(mobNo)
                + "&custId=" + encodeURIComponent(custId)
                + "&mobUpPanel=" + encodeURIComponent(panelName);
        add_custDetails_mobile_no('include/php/omccdtmb.php', poststr);
    }
}
/************End Code To Add Panel Name @Author:PRIYA19AUG13*********/
/***********End Code To Update Mobile No In Cust Details Panel @AUTHOR:PRIYA27APR13**********/
/***********Start Code To Update City In Cust Details Panel @AUTHOR:PRIYA27APR13**********/
var custCityId;
var custCity;
var custOldCity;
function validateAddCustDetailsCityInputs(custCity) {

    if (validateEmptyField(custCity, "Please Enter City!") == false) {
        document.getElementById(custCityId).value = 'Not Updated';
        window.setTimeout(closeAddCustDetailsCityMessNotUpd, 1000);
    } else {
        return true;
    }
    function closeAddCustDetailsCityMessNotUpd()
    {
        document.getElementById(custCityId).value = custOldCity;
        document.getElementById(custCityId).focus();
        return false;
    }
}
function add_custDetails_city(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertAddCustDetailsCity;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertAddCustDetailsCity() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        if (xmlhttp.responseText == 'Updated') {
            document.getElementById(custCityId).value = 'Updated';
            window.setTimeout(closeAddCustDetailsCityMess, 1000);
        } else {
            document.getElementById(custCityId).value = 'Not Updated';
            window.setTimeout(closeAddCustDetailsCityMess, 1000);
        }
    } else {
        document.getElementById(custCityId).value = 'Not Updated';
        window.setTimeout(closeAddCustDetailsCityMess, 1000);
    }
    function closeAddCustDetailsCityMess()
    {
        document.getElementById(custCityId).value = custCity;
    }
}
function addCustDetailsCity(city, oldCity, custId) {
    custCityId = 'custDetailsCity' + custId;
    custCity = city;
    custOldCity = oldCity;
    if (validateAddCustDetailsCityInputs(custCity)) {
        var poststr = "city=" + encodeURIComponent(city)
                + "&custId=" + encodeURIComponent(custId);
        add_custDetails_city('include/php/omccdtct.php', poststr);
    }
}
/***********End Code To Update City In Cust Details Panel @AUTHOR:PRIYA27APR13**********/
/***********Start Code To Update Cust Interest In Cust Details Panel @AUTHOR:PRIYA27APR13*************/
var custInterestListDivid;
var custInterestDiv;
var custInt;
function add_custDetails_custInterest(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertAddCustDetailsCustInterest;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertAddCustDetailsCustInterest() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById('custInterestListDivToAddInterest' + custInterestListDivid).innerHTML = xmlhttp.responseText;
        if (keyCode == 40 || keyCode == 38) {
            document.getElementById('custInterestListDiv' + custInterestListDivid).focus();
            document.getElementById('custInterestListDiv' + custInterestListDivid).options[0].selected = true;
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function addCustDetailsCustInterest(custInterest, custId, keyCodeInput) {

    keyCode = keyCodeInput;
    custInterestListDivid = custId;
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    var poststr = "custInterest=" + encodeURIComponent(custInterest)
            + "&custId=" + encodeURIComponent(custInterestListDivid);
    add_custDetails_custInterest('include/php/omccdtin.php', poststr);
}

function clearSearchCustInterestPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById('custInterestListDivToAddInterest' + custInterestListDivid).innerHTML = xmlhttp.responseText;
            //document.getElementById('custDetailsCustInterest' + ).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}

function update_custDetails_custInterest(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateCustDetailsCustInterest;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertUpdateCustDetailsCustInterest() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById(custInterestDiv).value = custInt;
        clearSearchCustInterestPanel();
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/*********Start code to change custId @Author:PRIYA26JUL14************/
function updateCustInterest(custInterest, custId, pageNo) {
    custInterestDiv = 'custDetailsCustInterest' + custId;
    custInterest = custInterest.substr(0, 5); //line added @Author:PRIYA23JUN14
    custInt = custInterest;
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    custInterestListDivid = custId;
    var poststr = "custInterest=" + encodeURIComponent(custInterest)
            + "&custId=" + encodeURIComponent(custId)
            + "&pageNo=" + encodeURIComponent(pageNo);
    update_custDetails_custInterest('include/php/omccdtad.php', poststr);
}
/*********End code to change custId @Author:PRIYA26JUL14************/
/***********End Code To Update Cust Interest In Cust Details Panel @AUTHOR:PRIYA27APR13*************/
/*********Start Code To Close Cust Comment Div @AUTHOR:PRIYA27APR13*******/
function commentCloseButton(custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("custComments" + custId).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("custComments" + custId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
/*********End Code To Close Cust Comment Div @AUTHOR:PRIYA27APR13*******/
/**************Start Code To Show Supp Purchase Details @AUTHOR:PRIYA28APR13************/
/**************Start of changes in function to show purchase details of raw metal@AUTHOR: SANDY29SEP13*****************/
//function showSuppPurchaseDetails(newPreInvoiceNo, newInvoiceNo, panel) {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = function () {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;
//        } else {
//            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//        }
//    };
//    if (panel == 'RawMetal') {
//        xmlhttp.open("POST", "include/php/ogrwprdt.php?newPreInvoiceNo=" + newPreInvoiceNo + "&newInvoiceNo=" + newInvoiceNo, true);
//    } else {
//        xmlhttp.open("POST", "include/php/ogwhprdt.php?newPreInvoiceNo=" + newPreInvoiceNo + "&newInvoiceNo=" + newInvoiceNo, true);
//    }
//    xmlhttp.send();
//}
/**************End of changes in function to show purchase details of raw metal@AUTHOR: SANDY29SEP13*****************/
/**************End Code To Show Supp Purchase Details @AUTHOR:PRIYA28APR13************/
/*********Start Code To Navigate to Supp Home In Daily Diary Panel @AUTHOR:PRIYA01MAY13**********/
/***************Start code to add parameters @Author:PRIYA03JUN14*********/
//function search_supp_by_suppId(url, parameters) {
//    loadXMLDoc();
//
//    xmlhttp.onreadystatechange = alertSearchSuppBySuppId;
//
//    xmlhttp.open('POST', url, true);
//    xmlhttp.setRequestHeader('Content-Type',
//            'application/x-www-form-urlencoded');
//    xmlhttp.setRequestHeader("Content-length", parameters.length);
//    xmlhttp.setRequestHeader("Connection", "close");
//    xmlhttp.send(parameters);
//}
//
//function alertSearchSuppBySuppId() {
//    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
//        //refreshMainRightDiv();
//    } else {
//        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//    }
//}

//---------------------------------- End code for change data from Supplier table to user table Author@:SANT16MAY16---------------------------------------------------------------->                                                      
//---------------------------------- End code for change data from Supplier table to user table Author@:SANT23MAY16---------------------------------------------------------------->                                                      
function showSuppInfo(prSuppId, newPreInvoiceNo, newInvoiceNo, panel, isinOthrChgsBy) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogwhmndv.php?newPreInvoiceNo=" + newPreInvoiceNo + "&newInvoiceNo=" + newInvoiceNo + "&suppId=" + prSuppId + "&suppPanelOption=" + panel + "&isinOthrChgsBy=" + isinOthrChgsBy, true);
    xmlhttp.send();
}
//---------------------------------- End code for change data from Supplier table to user table Author@:SANT23MAY16---------------------------------------------------------------->                                                      
//---------------------------------- End code for change data from Supplier table to user table Author@:SANT16MAY16---------------------------------------------------------------->                                                      
/***************End code to add parameters @Author:PRIYA03JUN14*********/
/*********End Code To Navigate to Supp Home In Daily Diary Panel @AUTHOR:PRIYA01MAY13**********/
/*******Start Code To Show Purchase Details In Daily Diary Panel @AUTHOR:PRIYA01MAY13********/
/*******Start code to add panel @Author:PRIYA23OCT13****************/
/*******Start code to change function name @Author:PRIYA11DEC13****************/
/*******Start code to add panel @Author:PRIYA04JUN14****************/
function showDailyDiaryDetails(documentRootPath, tableId, divId, panelDDDetClick, firmId, fromDate, toDate, transFirmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(divId + tableId).innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById(divId + tableId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    var poststr = "tableId=" + tableId +
            "&panelDDDetClick=" + panelDDDetClick + "&firmId=" + firmId +
            "&fromDate=" + fromDate + "&toDate=" + toDate + "&transFirmId=" + transFirmId;
    if (divId == 'purchaseDetailsDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogddprdv.php?" + poststr, true);
    } else if (divId == 'rawPurchaseDetailsDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogddrwdv.php?" + poststr, true);
    } else if (divId == 'sellDetailsDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogddsldv.php?" + poststr, true);
    } else if (divId == 'invoiceDetailsDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogddprdv_1.php?" + poststr, true); //filename added for invoice details @Author:SANT01DEC16
    } else if (divId == 'newOrderDetailsDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogddnodv.php?" + poststr, true);
    } else if (divId == 'custOldItemSellDetailsDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogddcpdv.php?" + poststr, true);
    } else if (divId == 'transLoanDetDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omddtgrl.php?" + poststr, true);
    } else if (divId == 'loanDetDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omddrgld.php?" + poststr, true);
    } else if (divId == 'loanPrinDetDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omddrapl.php?" + poststr, true);
    } else if (divId == 'loanMDepDetDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omddgdld.php?" + poststr, true);
    } else if (divId == 'transDetDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omddbtld.php?" + poststr, true);
    } else if (divId == 'mLLoanMDepDetDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/orddmldp.php?" + poststr, true); //change in filename @AUTHOR: SANDY13DEC13 //filename changed @Author:PRIYA27JAN14
    } else if (divId == 'mlLoanRelDiv') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/orddmlrl.php?" + poststr, true); //change in filename @AUTHOR: SANDY13DEC13  //filename changed @Author:PRIYA27JAN14
    }
    xmlhttp.send();
}
/*******End code to add panel @Author:PRIYA04JUN14****************/
/*******End code to change function name @Author:PRIYA11DEC13****************/
/*******End code to add panel @Author:PRIYA23OCT13****************/
/*******End Code To Show Purchase Details In Daily Diary Panel @AUTHOR:PRIYA01MAY13********/
/*******Start Code To Delete Purchase Details @AUTHOR:PRIYA01MAY13***********/
/*******Start Code To add panel @Author:PRIYA24OCT13***********/
function closeDDDet(tableId, divId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(divId + tableId).innerHTML = xmlhttp.responseText;
            //document.getElementById("delDDDet").style.visibility = "hidden";
        } else {
            document.getElementById(divId + tableId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
/*******End Code To add panel @Author:PRIYA24OCT13***********/
/*******End Code To Delete Purchase Details @AUTHOR:PRIYA01MAY13***********/

/*********Start Code To Navigate to Cust Home In Daily Diary Panel @AUTHOR:PRIYA01MAY13**********/
function search_cust_by_custId(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchCustByCustId;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchCustByCustId() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function showCustInfo(slCustId) {

    poststr = "custId=" + encodeURIComponent(slCustId);
    search_cust_by_custId('include/php/omcdcshm.php', poststr);
}
function showCustPanel(custId, custPanelOption, mainPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcdccdd.php?custId=" + custId + "&custPanelOption=" + custPanelOption + "&panelDivName=SellPurchase" + "&mainPanel=" + mainPanel,
            true); // parameters changed redirect to sold out list @Author:SHRI17NOV16
    xmlhttp.send();
}
/*********End Code To Navigate to Cust Home In Daily Diary Panel @AUTHOR:PRIYA01MAY13**********/

/*******Start Code To Show Sell Details In Daily Diary Panel @AUTHOR:PRIYA01MAY13********/
function showDailyDiarySellDetails(documentRootPath, invId) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('sellDetailsDiv' + invId).innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById('sellDetailsDiv' + invId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogddsldt.php?invId=" + invId, true);
    xmlhttp.send();
}
/*******End Code To Show Sell Details In Daily Diary Panel @AUTHOR:PRIYA01MAY13********/

/*******Start Code To Delete Purchase Details @AUTHOR:PRIYA01MAY13***********/
function closeSellDetails(invId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("sellDetailsDiv" + invId).innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("sellDetailsDiv" + invId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
/*******End Code To Delete Purchase Details @AUTHOR:PRIYA01MAY13***********/

/***********Start Code For Sorting By Firm Name In Cust Details Panel @AUTHOR:PRIYA23APR13*************/
function getCustDetailsByCustInterest(selCustInterest, selFirmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("customerDetails").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omccdtlt.php?selCustInterest=" + selCustInterest + "&selFirmId=" + selFirmId, true);
    xmlhttp.send();
}
/***********End Code For Sorting By Firm Name In Cust Details Panel @AUTHOR:PRIYA23APR13*************/

/********************* Start Code To Show Transferred Girvi List @AUTHOR:PRIYA22MAY13****************************/
/***********Start code to add panel for un-release trans list @Author:PRIYA12DEC14*********************/
function showTransGirviListPanel(panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    if (panel == 'UnRelTransLoanList')
        xmlhttp.open("POST", "include/php/orgptgrl.php", true);
    else
        xmlhttp.open("POST", "include/php/orgptrgl.php", true);
    xmlhttp.send();
}
/***********End code to add panel for un-release trans list @Author:PRIYA12DEC14*********************/
/*********************End Code To Show Transferred Girvi List @AUTHOR:PRIYA22MAY13****************************/
/*********************Start Code To Sort Girvi Transfer Panel By SortKeyword @AUTHOR:PRIYA22MAY13****************************/
/*********************Start Code To Add gTrans Firm Id @Author:PRIYA20JUL13********************/
/************Start code to add ml name @Author:PRIYA12FEB14***************/
function sortGirviTransferPanel(documentRootPath, sortKeyword, selFirmId, rowsPerPage, selTFirmId, gTransStatus, selMlName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/orgptrgl.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId +
            "&rowsPerPage=" + rowsPerPage + "&selTFirmId=" + selTFirmId + "&gTransStatus=" + gTransStatus + "&selMlName=" + selMlName, true);
    xmlhttp.send();
}
/************End code to add ml name @Author:PRIYA12FEB14***************/
/*********************End Code To Add gTrans Firm Id @Author:PRIYA20JUL13********************/
/*********************End Code To Sort Girvi Transfer Panel By SortKeyword @AUTHOR:PRIYA22MAY13****************************/
/*********************Start Code To Navigate To Next And Prev Button In Girvi Transfer Panel @AUTHOR:PRIYA22MAY13****************************/
/************Start Code To Select Trans Firm Id @Author:PRIYA20JUL13*************/
function navigationTransferredGirviListPanel(pageNo, selFirmId, sortKeyword, rowsPerPage, searchColumn, searchValue, selTFirmId, gTransStatus) {
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
    xmlhttp.open("POST", "include/php/orgptrgl.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&rowsPerPage=" + rowsPerPage + "&searchColumn=" + searchColumn +
            "&searchValue=" + searchValue + "&selTFirmId=" + selTFirmId + "&gTransStatus=" + gTransStatus, true);
    xmlhttp.send();
}
/************End Code To Select Trans Firm Id @Author:PRIYA20JUL13*************/
/*********************End Code To Navigate To Next And Prev Button In Girvi Transfer Panel @AUTHOR:PRIYA22MAY13****************************/
/*************Start Code To Add Stock In Supplier Panel @AUTHOR:PRIYA24MAY13******************/
function showSuppHomeAddStockPanel(documentRootPath, suppId, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("suppAddStockDiv").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwhiadv.php?suppId=" + suppId + "&panelName=" + panelName, true);
    xmlhttp.send();
}
/*************End Code To Add Stock In Supplier Panel @AUTHOR:PRIYA24MAY13******************/

/*******************Start Code To Add Supp Update Stock Div @AUTHOR:PRIYA27OCT13******************/
/*******************Start code to add panel @Author:PRIYA18SEP14*********/
/*******************Start code to add panel @Author:SANT15JUL16*********/
/*******************Start code to add panel @Author:SANT03SEP16*********/
function showSuppStockUpdateDiv(documentRootPath, suppNwOrId, suppId, preInvNo, postInvNo, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'SuppOrderUp')
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwhiadv.php?suppNwOrId=" + suppNwOrId + "&suppId=" + suppId + "&preInvNo=" + preInvNo + "&postInvNo=" + postInvNo
                + "&panelName=" + panelName + "&payPanelName=" + panelName, true);
    else
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwhiadv.php?suppNwOrId=" + suppNwOrId + "&suppId=" + suppId + "&preInvNo=" + preInvNo + "&postInvNo=" + postInvNo
                + "&panelName=" + panelName + "&payPanelName=" + panelName, true);
    xmlhttp.send();
}
/*******************End code to add panel @Author:SANT03SEP16*********/
/*******************End code to add panel @Author:SANT15JUL16*********/
/*******************End code to add panel @Author:PRIYA18SEP14*********/
/*******************End Code To Add Supp Update Stock Div @AUTHOR:PRIYA27OCT13******************/
/********************Start Code For omgold Ledger Book @AUTHOR:PRIYA09JUNE13**************/
/********************Start Code To change Div Name In omgold Ledger Book @AUTHOR:PRIYA10JUNE13**************/
/********************Start Code To Change File and Function Name @AUTHOR:PRIYA18JUNE13*********************/
function getGoldLedgerBook() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogbbgdbs.php", true);
    xmlhttp.send();
}
/********************End Code To Change File and Function Name @AUTHOR:PRIYA18JUNE13*********************/
/********************End Code To change Div Name In omgold Ledger Book @AUTHOR:PRIYA10JUNE13**************/
/********************End Code For omgold Ledger Book @AUTHOR:PRIYA09JUNE13****************/
/********************Start Code For omrevo Ledger Book @AUTHOR:PRIYA09JUNE13**************/
/********************Start Code To change Div Name In omrevo Ledger Book @AUTHOR:PRIYA10JUNE13**************/
/********************Start code to add param @Author:PRIYA18FEB14*********************/
/********************Start code to add panel name @Author:PRIYA31MAR14*********************/
/********************Start code to add panel name @Author:SANT09NOV16*********************/
function getOmrevoLedgerBook(panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'loan')
        xmlhttp.open("GET", "include/php/orbbblsh.php", true);
    else if (panelName == 'loanInt')
        xmlhttp.open("GET", "include/php/orbbinbs.php", true);
    else if (panelName == 'userTransaction')
        xmlhttp.open("GET", "include/php/ombbblsh_1.php", true);   // change file name prefix or=> om @ratnakar 01MAR2018
    else if (panelName == 'completeLedger')
        xmlhttp.open("GET", "include/php/ombbcmbs.php", true);
    xmlhttp.send();
}
/********************End code to add panel name @Author:SANT09NOV16*********************/
/********************End code to add panel name @Author:PRIYA31MAR14*********************/
/********************End Code To change Div Name In omrevo Ledger Book @AUTHOR:PRIYA10JUNE13**************/
/********************End Code For omrevo Ledger Book @AUTHOR:PRIYA09JUNE13****************/
/********************Start Code To Add function For Silver Stock @AUTHOR:PRIYA18JUNE13*********************/
function getSilverLedgerBook() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogbbslbs.php", true);
    xmlhttp.send();
}
/********************End Code To Add function For Silver Stock @AUTHOR:PRIYA18JUNE13*********************/
/********************Start Code To Get Udhaar Ledger Book @AUTHOR:PRIYA21JUNE13****************/
/********************Start Code To Change File Name @Author:PRIYA13AUG13****************/
function getUdhaarLedgerBook() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ombbuubs.php", true);
    xmlhttp.send();
}
/********************End Code To Change File Name @Author:PRIYA13AUG13****************/
/********************End Code To Get Udhaar Ledger Book @AUTHOR:PRIYA21JUNE13****************/
/********************Start Code To Get Layout Panel @AUTHOR:PRIYA24JUNE13**************/
function navigateLayoutPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ompplypn.php", true);
    xmlhttp.send();
}
/********************End Code To Get Layout Panel @AUTHOR:PRIYA24JUNE13**************/
/********************Start Code To Refresh Image In Transfer Girvi @AUTHOR:PRIYA27JUNE13********/
/********************Start Code To Change Div In Transfer Girvi @Author:PRIYA29JUN13********/
function refresh_trans_girvi(url, parameters) {
    loadXMLDoc2();
    xmlhttp2.onreadystatechange = alertRefreshTransGirvi;
    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.send(parameters);
}
function alertRefreshTransGirvi() {

    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("transGirviDiv").innerHTML = xmlhttp2.responseText;
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function refreshTransGirvi(girviId, girviTransId) {
    var poststr = "girviId=" + girviId
            + "&girviTransId=" + girviTransId;
    refresh_trans_girvi('include/php/olgggtrn.php', poststr); //changes in navigation AS per new filename @AUTHOR: SANDY20NOV13
}
/********************End Code To Change Div In Transfer Girvi @Author:PRIYA29JUN13********/
/********************End Code To Refresh Image In Transfer Girvi @AUTHOR:PRIYA27JUNE13********/
/*********** Start code to find analysis report from month and year @AUTHOR: SANDY2JUL13 *****/
/*********** Start code to condition MaxSellAnalysisPanel @AUTHOR: GAUR2AUG16 *****/
function showAnalysisReportByDate(panelName, firmId, mmm, yyyy) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (panelName == "InterestAnalysisPanel")
            {
                document.getElementById("girvAnaMonthIntGraphDiv").innerHTML = xmlhttp.responseText;
            }
            else if (panelName == "NewLoanAnalysis")
            {
                document.getElementById("girvAnaMonthLoansGraphDiv").innerHTML = xmlhttp.responseText;
            }
            else if (panelName == "PurchaseAnalysisPanel")
            {
                document.getElementById("girvAnaMonthpurchaseGraphDiv").innerHTML = xmlhttp.responseText;
            }
            else if (panelName == "GirviReleasedAnalysisPanel")
            {
                document.getElementById("girvAnaMonthReleasedGraphDiv").innerHTML = xmlhttp.responseText;
            }

            else if (panelName == "SellAnalysisPanel")
            {
                document.getElementById("girvAnaMonthSellGraphDiv").innerHTML = xmlhttp.responseText;
            }
            else if (panelName == "MaxSellAnalysisPanel")
            {
                document.getElementById("girvAnaMonthMaxSellGraphDiv").innerHTML = xmlhttp.responseText;
            }
            else if (panelName == "StockAnalysisPanel")
            {
                document.getElementById("girvAnaMonthStockGraphDiv").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == "InterestAnalysisPanel") {
        xmlhttp.open("POST", "include/php/orgnsfid.php?firmId=" + firmId + "&month=" + mmm + "&year=" + yyyy, true);
    }
    else if (panelName == "NewLoanAnalysis") {
        xmlhttp.open("POST", "include/php/orgnsfnla.php?firmId=" + firmId + "&month=" + mmm + "&year=" + yyyy, true);
    }
    else if (panelName == "PurchaseAnalysisPanel") {
        var metal = document.getElementById('metalType').value;
        xmlhttp.open("POST", "include/php/orgnsfpad.php?firmId=" + firmId + "&month=" + mmm + "&year=" + yyyy + "&metal=" + metal, true);
    } else if (panelName == "GirviReleasedAnalysisPanel") {
        xmlhttp.open("POST", "include/php/orgnsfrla.php?firmId=" + firmId + "&month=" + mmm + "&year=" + yyyy, true);
    }
    else if (panelName == "SellAnalysisPanel")
    {
        var metal = document.getElementById('metalType').value;
        xmlhttp.open("POST", "include/php/orgnsfsad.php?firmId=" + firmId + "&month=" + mmm + "&year=" + yyyy + "&metal=" + metal, true);
    }
    else if (panelName == "MaxSellAnalysisPanel")
    {
        var metal = document.getElementById('metalType').value;
        xmlhttp.open("POST", "include/php/orgnsfmxd.php?firmId=" + firmId + "&month=" + mmm + "&year=" + yyyy + "&metal=" + metal, true);
    }
    else if (panelName == "StockAnalysisPanel")
    {
        var metal = document.getElementById('metalType').value;
        xmlhttp.open("POST", "include/php/orgnsfstd.php?firmId=" + firmId + "&month=" + mmm + "&year=" + yyyy + "&metal=" + metal, true);
    }
    xmlhttp.send();
}
/*********** END code to condition MaxSellAnalysisPanel @AUTHOR: GAUR2AUG16 *****/
/*********** End code to find analysis report from month and year @AUTHOR: SANDY2JUL13 *****/
/************Start Code To Add Sms Text on onchange of sms templates @Author:PRIYA03JUL13**********/
/************Start Code To Change Id @Author:PRIYA09JUL13**********/
/************Start Code To Add Func searchSmsTempForPanelBlank() @Author:PRIYA11JUL13**********/
function smsText(smsTempId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("smsTextDiv").innerHTML = xmlhttp.responseText;
            searchSmsTempForPanelBlank();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcsmstx.php?smsTempId=" + smsTempId, true);
    xmlhttp.send();
}
/************End Code To Add Func searchSmsTempForPanelBlank() @Author:PRIYA11JUL13**********/
/************End Code To Change Id @Author:PRIYA09JUL13**********/
/************Start Code To Add Sms Log Panel @Author:PRIYA08JUL13*********/
/************Start Code To Add Panel @Author:PRIYA19FEB14*********/
function smsLogPanel(panelName)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("smsSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'smsLog')
        xmlhttp.open("POST", "include/php/omcsmslg.php", true);
    else if (panelName == 'smsRejectList')
        xmlhttp.open("POST", "include/php/omcsmsrl.php", true);
    else if (panelName == 'smsTemplate')
        xmlhttp.open("POST", "include/php/omsmstmp.php", true);
    else if (panelName == 'smsPack')
        xmlhttp.open("POST", "include/php/omcssmpk.php", true);
    xmlhttp.send();
}
/************End Code To Add Sms Log Panel @Author:PRIYA19FEB14*********/
/************Start Code To Add Prev and Next Butt For Sms Log Panel @Author:PRIYA08JUL13********/
/************Start Code To Add Panel Name In Sms Log Panel @Author:PRIYA10JUL13********/
function navigationSmsLogPanel(pageNo, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextSmsLogListButt").style.visibility = "visible";
            if (panelName == 'smsLog') {
                document.getElementById("smsLogDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("smsRejectListDiv").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            document.getElementById("ajaxLoadNextSmsLogListButt").style.visibility = "hidden";
        }
    };
    if (panelName == 'smsLog') {
        xmlhttp.open("POST", "include/php/omcsmslg.php?page=" + pageNo, true);
    } else {
        xmlhttp.open("POST", "include/php/omcsmsrl.php?page=" + pageNo, true);
    }
    xmlhttp.send();
}
/************End Code To Add Panel Name In Sms Log Panel @Author:PRIYA10JUL13********/
/************Start Code To Add Prev and Next Butt For Cust Sms Log Panel @Author:PRIYA09JUL13********/
/************Start Code To Change Func Name @Author:PRIYA10JUL13******************/
function navigationCustSmsLogPanel(pageNo, custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadCustNextSmsLogList").style.visibility = "hidden";
            document.getElementById("ajaxLoadCustNextSmsLogListButt").style.visibility = "visible";
            document.getElementById("custSmsLogDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadCustNextSmsLogList").style.visibility = "visible";
            document.getElementById("ajaxLoadCustNextSmsLogListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/omccsmlg.php?page=" + pageNo + "&custId=" + custId, true);
    xmlhttp.send();
}
/************End Code To Change Func Name @Author:PRIYA10JUL13*******************/
/************End Code To Add Prev and Next Butt For Cust Sms Log Panel @Author:PRIYA09JUL13********/
//**************************** Customer SMS Panel by @Author: LINA29MAY13 ******
/****************Start Code To Add Validations For Customer SMS Panel @AUTHOR:PRIYA07JUNE13*********************/
/*********Start Code To Change Validations @Author:PRIYA02JUL13**********/
/*********Start Code To Change Validations @Author:PRIYA08JUL13**********/
/*********Start Code To Change Validations @Author:PRIYA10JUL13*****************/
function validateMobNo() {
    if ((numericValidation(document.getElementById("mobileNo").value, "Accept only Numbers without space character!") == false ||
            validateLengthMobNo(document.getElementById("mobileNo").value, "Mobile number length should be minimum 10!") == false || validateComma(document.getElementById("mobileNo").value) == false)) {
        document.getElementById("mobileNo").focus();
        return false;
    }
    return true;
}
function numericValidation(field, alerttxt) {
    var numbers = /^[0-9,]+$/;
    if (!field.match(numbers)) {
        alert(alerttxt);
        return false;
    }
    else {
        return true;
    }
}
/*function validateComma(field){
 if(field.length != 0){
 document.getElementById("mobileNo").value = field + ',' ;
 return false; 
 }else{
 return true;
 }
 }*/
/***********Start Code To Add Validation For Template @Author:PRIYA19AUG13********/
function validateSms() {
    if (validateSelectField(document.getElementById("smsTemplates").value, "Please Select sms Template!") == false || validateLengthSms(document.getElementById("smsTemplates").value, "Template length should be maximum 160!") == false) {
        document.getElementById("smsTemplates").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("smsText").value, "Please select sms Text!") == false || validateLengthSms(document.getElementById("smsText").value, "Mesaage length should be maximum 160!") == false) {
        document.getElementById("smsText").focus();
        return false;
    }
    return true;
}
/***********End Code To Add Validation For Template @Author:PRIYA19AUG13********/
/*********Start Code To Hide Func because same Func exists in emValidate File @Author:PRIYA02JUL13**********/
/*function validateSmsInputs(){
 if(validateLengthSms(document.getElementById("smsText").value,"Mesaage length should be maximum 160!")==false) {
 document.getElementById("smsText").focus();
 return false;
 }
 return true;
 }*/
/*********End Code To Hide Func because same Func exists in emValidate File  @Author:PRIYA02JUL13**********/
function send_sms(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSendSms;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
smsSuccessCounter = 0;
smsFailCounter = 0;
function alertSendSms() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("smsMessDisplayDiv").innerHTML = xmlhttp.responseText; //change in div @AUTHOR: SANDY4DEC13
        window.setTimeout(closeSmsSentDispDiv, 10);
    } else {
        smsResult = xmlhttp.responseText;
        smsStatus = smsResult.substr(smsResult.length - 1);
        //smsCounter = smsResult.substring(1);

        /**********Start code to comment code @Author:PRIYA10FEB15**************************/
//        smsSuccessCounter = smsResult.match(/S/g).length;
//        smsFailCounter = smsResult.match(/F/g).length;
        /**********Start code to comment code @Author:PRIYA10FEB15**************************/

        /**********Start code to add code @Author:PRIYA10FEB15**************************/
        var smsSuccessCount = smsResult.match(/S/g);
        if (smsSuccessCount !== null) {
            smsSuccessCounter = smsSuccessCount.length;
        }
        var smsFailCount = smsResult.match(/F/g);
        if (smsFailCount !== null) {
            smsFailCounter = smsFailCount.length;
        }
        /**********End code to add code @Author:PRIYA10FEB15**************************/
        //if (smsStatus == 'S') {
        document.getElementById("smsSuccessCounterMainDiv").style.visibility = "visible";
        document.getElementById("smsCounterGreenDiv").innerHTML = smsSuccessCounter;
        //} else if (smsStatus == 'F') {
        document.getElementById("smsFailCounterMainDiv").style.visibility = "visible";
        document.getElementById("smsCounterRedDiv").innerHTML = smsFailCounter;
        //}
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
    function closeSmsSentDispDiv() {
        document.getElementById("smsMessDisplayDiv").innerHTML = "";
    }
}
/**********Start Code To Pass Ids From Sms Panel @Author:PRIYA29JUN13**************/
/*************Start Code To Change Ids @Author:PRIYA03JUL13****************/
/*************Start Code To Change Ids @Author:PRIYA04JUL13****************/
/*************Start Code To Add City @Author:PRIYA19AUG13******************/
/*************Start code to chnage fn to add multiple @Author:PRIYA17JUL14*************/
function sendSMS() {
    smsSuccessCounter = 0;
    smsFailCounter = 0;
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("smsButt").style.visibility = "hidden";
    var smsOption = document.getElementsByName('smsOption');
    var smsOptionValue;
    var poststr;
    for (var i = 0; i < smsOption.length; i++) {
        if (smsOption[i].checked == true)
            smsOptionValue = smsOption[i].value;
    }
    var selectedArray = new Array();
    var selObj = document.getElementById('interestList');
    var count = 0;
    for (var i = 0; i < selObj.options.length; i++) {
        if (selObj.options[i].selected) {
            selectedArray[count] = selObj.options[i].value;
            count++;
        }
    }
    var intValue = selectedArray;
    if (validateSms()) {
        if (smsOptionValue == 'allUser') {
            poststr = "userType=" + encodeURIComponent(document.getElementById("userType").value)
                    + "&city=" + encodeURIComponent(document.getElementById("city").value)
                    + "&smsFirmId=" + encodeURIComponent(document.getElementById("smsFirmId").value)
                    + "&smsTemplates=" + encodeURIComponent(document.getElementById("smsTemplates").value)
                    + "&smsText=" + encodeURIComponent(document.getElementById("smsText").value)
                    + "&interestList=" + encodeURIComponent(intValue)
                    + "&smsStaffId=" + encodeURIComponent(document.getElementById("smsStaffId").value); //staffId added @Author:PRIYA09FEB15
        } else if (smsOptionValue == 'mobileNo') {
            poststr = "mobileNo=" + encodeURIComponent(document.getElementById("mobileNo").value)
                    + "&smsTemplates=" + encodeURIComponent(document.getElementById("smsTemplates").value)
                    + "&smsText=" + encodeURIComponent(document.getElementById("smsText").value);
        }
        else if (smsOptionValue == 'SMSList') {
            poststr = "smsPerContList=" + encodeURIComponent(document.getElementById("smsPerContList").value)
                    + "&smsTemplates=" + encodeURIComponent(document.getElementById("smsTemplates").value)
                    + "&smsText=" + encodeURIComponent(document.getElementById("smsText").value);
        }
        send_sms('include/php/omcsmsad.php', poststr);
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("smsButt").style.visibility = "visible";
    }
}
/*************End code to chnage fn to add multiple @Author:PRIYA17JUL14*************/
/*************End Code To Add City @Author:PRIYA19AUG13******************/
/*********End Code To Change Validations @Author:PRIYA10JUL13*****************/
/*********End Code To Change Validations @Author:PRIYA08JUL13**********/
/*************Start Code To Change Ids @Author:PRIYA04JUL13****************/
/*********End Code To Change Ids @Author:PRIYA03JUL13****************/
/*********End Code To Change Validations @Author:PRIYA02JUL13**********/
/**********End Code To Pass Ids From Sms Panel @Author:PRIYA29JUN13**************/
/****************End Code To Add Validations For Customer SMS Panel @AUTHOR:PRIYA07JUNE13*********************/
/**********Start Code To Search Templates In sms Panel @Author:PRIYA10JUL13*********************/
var keyCode;
function search_template(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchTemplate;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchTemplate() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("tempListDiv").innerHTML = xmlhttp.responseText;
        if (keyCode == 40 || keyCode == 38) {
            document.getElementById('tempListSelectDiv').focus();
            document.getElementById('tempListSelectDiv').options[0].selected = true;
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function searchTemplate(tempSub, keyCodeInput) {
    keyCode = keyCodeInput;
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    var poststr = "tempSub=" + encodeURIComponent(tempSub);
    search_template('include/php/omcsmstl.php', poststr);
}
//
function search_template(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchSMSTemplate;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertSearchSMSTemplate() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("tempListDiv").innerHTML = xmlhttp.responseText;
        if (keyCode == 40 || keyCode == 38) {
            document.getElementById('tempListSelectDiv').focus();
            document.getElementById('tempListSelectDiv').options[0].selected = true;
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function searchSMSTemplate(tempSub, keyCodeInput) {
    keyCode = keyCodeInput;
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    var poststr = "tempSub=" + encodeURIComponent(tempSub);
    search_template('include/php/omsmsstp.php', poststr);
}
/**********End Code To Search Templates In sms Panel @Author:PRIYA10JUL13*********************/
/**********Start Code To Search Temp For Panel Blank @Author:PRIYA10JUL13************/
function search_Sms_Temp_for_panel_blank(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchSmsTempForPanelBlank;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchSmsTempForPanelBlank() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("tempListDiv").innerHTML = xmlhttp.responseText;
        document.getElementById("smsTemplates").focus();
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function searchSmsTempForPanelBlank() {

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    var poststr = "";
    search_Sms_Temp_for_panel_blank('include/php/ombbblnk.php', poststr);
}
/**********End Code To Search Temp For Panel Blank @Author:PRIYA10JUL13************/
/************Start Code To Get Sms Reject List @Author:PRIYA10JUL13*********/
/************Start code to comment @Author:PRIYA19FEB14************/
//function smsRejectList()
//{
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = function() {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("smsSubDiv").innerHTML = xmlhttp.responseText;
//        }
//        else {
//            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//        }
//    };
//
//    xmlhttp.open("POST", "include/php/omcsmsrl.php", true);
//    xmlhttp.send();
//}
/************End code to comment @Author:PRIYA19FEB14************/
/************End Code To Get Sms Reject List @Author:PRIYA10JUL13*********/
/************Start Code To Get Selected No Of Rows @Author:PRIYA15JUL13********/
/************Start Code To Delete Function @Author:PRIYA16JUL13********/
/*function selectNoOfRows(rowsPerPage){
 loadXMLDoc();
 xmlhttp.onreadystatechange = function() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {alert(rowsPerPage);
 document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
 document.getElementById("girvNoOfRows").innerHTML = xmlhttp.responseText;
 } else {
 document.getElementById("main_ajax_loading_div").style.visibility = "visible";
 }
 };
 
 xmlhttp.open("POST", "include/php/orggnorw.php?rowsPerPage=" + rowsPerPage, true);
 xmlhttp.send();
 }*/
/************End Code To Delete Function @Author:PRIYA16JUL13********/
/************Start Code To Resend sms @Author:PRIYA16JUL13********/
/************Start Code To Add Panel Name @Author:PRIYA18JUL13********/
function resendSms(smsId, mobNo, smsText, panelName) {
    confirm_box = confirm("Do you really want to Resend sms!");
    if (confirm_box == true) {
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (panelName == 'resendSms') {
                    document.getElementById("smsRejectListDiv").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'custResendSms') {
                    document.getElementById("custSmsLogDiv").innerHTML = xmlhttp.responseText;
                }
                window.setTimeout(closeSmsDispMessDiv, 1500);
            } else {
                document.getElementById("smsRejectListDiv").innerHTML = "<img src='images/ajaxLoad.gif' />";
            }
        };
        xmlhttp.open("POST", "include/php/omcsmsad.php?smsId=" + smsId + "&mobNo=" + mobNo + "&smsText=" + smsText + "&panelName=" + panelName, true);
        xmlhttp.send();
    }
    function closeSmsDispMessDiv() {
        document.getElementById("smsDelMessDisplayDiv").innerHTML = "";
    }
}
/************End Code To Add Panel Name @Author:PRIYA18JUL13********/
/************End Code To Resend sms @Author:PRIYA16JUL13********/
/***********************Start Code To Get Girvi Trans Status @Author:PRIYA20JUL13*****************/
function getGTransStatus(gTransStatus, sortKeyword, searchColumnName, searchColumnValue, selTFirmId, mlName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgptrgl.php?gTransStatus=" + gTransStatus.value + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName +
            "&searchValue=" + searchColumnValue + "&selTFirmId=" + selTFirmId + "&selMlName=" + mlName, true);
    xmlhttp.send();
}
/***********************End Code To Get Girvi Trans Status @Author:PRIYA20JUL13*****************/
/*************Start Code To Get Ledger Details @Author:PRIYA23JUL13****************/
function getLedgerDetails() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviLedgerDetails").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbgldv.php", true);
    xmlhttp.send();
}
/*************End Code To Get Ledger Details @Author:PRIYA23JUL13****************/
/*************Start Code To Change Div @Author:PRIYA25JUL13************/
//- Start of Modified Code(Complete file modified) @AUTHOR: SANT19MAY16 -->
function getAllEmpAcess(staffId, panelName) {
    var empAllAccess = document.getElementById('selectEmpAllAccess').checked;
    if (empAllAccess == false) {
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("staffAccess").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("staffAccess").innerHTML = "<img src='images/ajaxLoad.gif' />";
            }

        };
        xmlhttp.open("POST", "include/php/omeuamndv.php?empId=" + staffId + "&empPanelName=" + panelName, true);
        xmlhttp.send();
    }
    if (empAllAccess == true) {
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("staffAccess").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("staffAccess").innerHTML = "<img src='images/ajaxLoad.gif' />";
            }

        };
        xmlhttp.open("POST", "include/php/omeamndv.php?empId=" + staffId + "&empPanelName=" + panelName, true);
        xmlhttp.send();
    } else
    {
        document.getElementById('selectEmpAllAccess').checked = false;
    }
}
//- End of Modified Code(Complete file modified) @AUTHOR: SANT19MAY16 -->
/*************End Code To Change Div @Author:PRIYA25JUL13************/
/*************Start Code To Get Prev And Next Button In Stock List @Author:PRIYA26JUL13******/
/*************Start code to add param @Author:PRIYA24DEC13*******************/
function getPagingNavigation(pageNo, rowsPerPage, panel, custId, panelName, startRange, endRange, metalWt, stockItemMetal, itemName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextItemList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextItemListButt").style.visibility = "visible";
            if (panel == 'NewOrder') {
                document.getElementById("newOrderStatus").innerHTML = xmlhttp.responseText;
            } else if (panel == 'PurchaseList') {
                document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("stockList").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("ajaxLoadNextItemList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextItemListButt").style.visibility = "hidden";
        }
    };
    if (panel == 'NewOrder') {
        xmlhttp.open("POST", "include/php/ognostlt.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&custId=" + custId + "&panelName=" + panelName, true);
    } else if (panel == 'PurchaseList') {
        xmlhttp.open("POST", "include/php/ogiamsdv.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&panel=" + panel + "&stockUpdateRows=" + 'StockUpdateRows', true);
    } else {
        xmlhttp.open("POST", "include/php/ogilmndv.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&startRange=" + startRange + "&endRange=" + endRange + "&itemName=" + itemName + "&stockItemMetal=" + stockItemMetal + "&metalWt=" + metalWt, true);
    }
    xmlhttp.send();
}
/*************End code to add param @Author:PRIYA24DEC13*******************/
/*************End Code To Get Prev And Next Button In Stock List  @Author:PRIYA26JUL13******/
/*************Start Code To Get No Of Rows In Stock List @Author:PRIYA26JUL13******/
/*************Start Code To Add Panel @Author:PRIYA20SEP13******/
/*************Start Code To Add Panel @Author:PRIYA05OCT13******/
/*************Start Code To change div @Author:PRIYA26OCT13******/
/************Start of changes in function @AUTHOR: SANDY30OCT13*****************/
/************Start code to add panel @Author:PRIYA23DEC13*****************/
/*************Start code to add param @Author:PRIYA24DEC13*******************/
/*************Start code to add panel @Author:PRIYA04JUN14******************/
/*************Start code to add acit panel @Author:PRIYA10JUL14******************/
/*************Start code to add acit panel @Author:PRIYA29OCT14******************/
/******* Start code to add condition for Crystal Paanel and crystalsub for stock panel @Author:SHE26FEB15*******/
/******* Start code to add condition for CrystalPurchaseList in Crystal Panel@Author:SHE20MAR15*******/
/******* Start code to add condition for Raw Metal @Author:SHE13JAN16*******/
/******* Start code to add condition for retail and wholesale panel list @Author:SHRI05APR16**************/
//START chnage file name ogilimsd.php to ogilistsd.php @Author:GAUR26JUL16
function showNoOfRows(documentRootPath, rowsPerPage, pageNum, upRowsPanel, nwOrPanel, custId, panelName)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (upRowsPanel == 'NwOrUpdateRows') {
                document.getElementById("ajaxLoadNextItemList").style.visibility = "hidden";
                document.getElementById("ajaxLoadNextItemListButt").style.visibility = "visible";
            }
            if (upRowsPanel == 'NwOrUpdateRows') {
                document.getElementById("newOrderStatus").innerHTML = xmlhttp.responseText;
            } else if (upRowsPanel == 'rawStockList') {
                document.getElementById("rawMetalStockListDiv").innerHTML = xmlhttp.responseText;
            } else if (upRowsPanel == 'JewelleryPanel') {
                document.getElementById("jewellerySubPanel").innerHTML = xmlhttp.responseText;
            } else if (upRowsPanel == 'ImtJewelleryPanel' || upRowsPanel == 'ImtWholsaleJewelleryPanel') {
                document.getElementById("jewellerySubPanel").innerHTML = xmlhttp.responseText;
            } else if (nwOrPanel == 'PurchaseList') {
                document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
            } else if (upRowsPanel == 'UdhaarUpdateRows') {
                document.getElementById("udhaarDetPanel").innerHTML = xmlhttp.responseText;
            } else if (nwOrPanel == 'AdvanceMoney') {
                document.getElementById("advMoneyList").innerHTML = xmlhttp.responseText;
            } else if (upRowsPanel == 'AcitUpdateRows') {
                document.getElementById("acitListDiv").innerHTML = xmlhttp.responseText;
            } else if (upRowsPanel == 'AvailStockUpdateRows' || upRowsPanel == 'SoldStockUpdateRows' || upRowsPanel == 'MainStockUpdateRows') {
                document.getElementById("stockListSubDiv").innerHTML = xmlhttp.responseText;
            }  // start code to shows no of rows in crystal purchase list @Author:SHE21FEB15
            else if (upRowsPanel == 'crystalStockList') {
                document.getElementById("crystalStockListDiv").innerHTML = xmlhttp.responseText;
                // End code to shows no of rows in crystal purchase list @Author:SHE21FEB15
            } else if (nwOrPanel == 'CrystalPurchaseList') {
                document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
            } else if (nwOrPanel == 'RawMetalList') {
                document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
            } else if (upRowsPanel == 'CrystalPanel') {
                document.getElementById("CrystalSubPanel").innerHTML = xmlhttp.responseText;
            } else if (upRowsPanel == 'RetailStockPanel' || upRowsPanel == 'WholeSaleStockPanel') {
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("stockList").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("ajaxLoadNextItemList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextItemListButt").style.visibility = "hidden";
        }
    };
    if (upRowsPanel == 'NwOrUpdateRows') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ognostlt.php?rowsPerPage=" + rowsPerPage + "&page=" + pageNum + "&upRows=" + upRowsPanel + "&panelName=" + nwOrPanel + "&custId=" + custId, true);
    } else if (upRowsPanel == 'rawStockList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrmlist.php?rowsPerPage=" + rowsPerPage + "&page=" + pageNum + "&panel=" + upRowsPanel + "&listPanel=" + nwOrPanel, true);
    } else if (upRowsPanel == 'JewelleryPanel') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogilistsd.php?rowsPerPage=" + rowsPerPage + "&panel=" + upRowsPanel, true);
    } else if (upRowsPanel == 'ImtJewelleryPanel') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogijlimsd.php?rowsPerPage=" + rowsPerPage + "&panel=" + upRowsPanel + "&panelName=" + panelName, true);
    } else if (upRowsPanel == 'ImtWholsaleJewelleryPanel') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogijlimsd_1.php?rowsPerPage=" + rowsPerPage + "&panel=" + upRowsPanel + "&panelName=" + panelName, true);
    } else if (nwOrPanel == 'PurchaseList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiaprlt.php?rowsPerPage=" + rowsPerPage + "&panel=" + nwOrPanel + "&stockUpdateRows=" + upRowsPanel, true);
    } else if (upRowsPanel == 'UdhaarUpdateRows') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omuupnal.php?rowsPerPage=" + rowsPerPage + "&udhaarUpdateRows=" + upRowsPanel + "&panelName=" + nwOrPanel, true);
    } else if (nwOrPanel == 'AdvanceMoney') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omadmnlt.php?rowsPerPage=" + rowsPerPage + "&updateRows=" + upRowsPanel + "&panelName=" + nwOrPanel, true);
    } else if (upRowsPanel == 'AcitUpdateRows') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omaiatlt.php?rowsPerPage=" + rowsPerPage + "&updateRows=" + upRowsPanel + "&panelName=" + nwOrPanel, true);
    } else if (upRowsPanel == 'AvailStockUpdateRows') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogisavlt.php?rowsPerPage=" + rowsPerPage + "&updateRows=" + upRowsPanel + "&metalType=" + nwOrPanel + "&itemName=" + custId, true);
    } else if (upRowsPanel == 'SoldStockUpdateRows') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogissolt.php?rowsPerPage=" + rowsPerPage + "&updateRows=" + upRowsPanel + "&metalType=" + nwOrPanel + "&itemName=" + custId, true);
        //code to shows no of rows in crystal purchase list @Author:SHE21FEB15
    } else if (upRowsPanel == 'crystalStockList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogcrmnlt.php?rowsPerPage=" + rowsPerPage + "&page=" + pageNum + "&panel=" + upRowsPanel + "&listPanel=" + nwOrPanel, true);
    } else if (nwOrPanel == 'CrystalPurchaseList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogcrprlt.php?rowsPerPage=" + rowsPerPage + "&panel=" + nwOrPanel + "&stockUpdateRows=" + upRowsPanel, true);
    } else if (nwOrPanel == 'RawMetalList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrmcslt.php?rowsPerPage=" + rowsPerPage + "&panel=" + nwOrPanel + "&stockUpdateRows=" + upRowsPanel, true);
    } else if (upRowsPanel == 'CrystalPanel') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogcrlisd.php?rowsPerPage=" + rowsPerPage + "&panel=" + upRowsPanel, true);
    } else if (upRowsPanel == 'RetailStockPanel') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrtprlt.php?rowsPerPage=" + rowsPerPage + "&panel=" + upRowsPanel, true);
    } else if (upRowsPanel == 'WholeSaleStockPanel') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwtprlt.php?rowsPerPage=" + rowsPerPage + "&panel=" + upRowsPanel, true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogilmndv.php?rowsPerPage=" + rowsPerPage + "&page=" + pageNum + "&stockUpdateRows=" + upRowsPanel, true);
    }
    xmlhttp.send();
}
//end chnage file name ogilimdv.php to ogilistsd.php @Author:GAUR26JUL16
/******* Start code to add condition for retail and wholesale panel list @Author:SHRI05APR16**************/
/******* End code to add condition for Raw Metal @Author:SHE13JAN16*******/
/******* End code to add condition for CrystalPurchaseList in Crystal Panel@Author:SHE20MAR15*******/
/******* End code to add condition for Crystal Paanel and crystalsub for stock panel @Author:SHE26FEB15*******/
/*************End code to add acit panel @Author:PRIYA29OCT14******************/
/*************End code to add acit panel @Author:PRIYA10JUL14******************/
/*************End code to add panel @Author:PRIYA04JUN14******************/
/*************End code to add param @Author:PRIYA24DEC13*******************/
/************End code to add panel @Author:PRIYA23DEC13*****************/
/************End of changes in function @AUTHOR: SANDY30OCT13*****************/
/*************End Code To change div @Author:PRIYA26OCT13******/
/*************End Code To Add Panel @Author:PRIYA20SEP13******/
/*************End Code To Get No Of Rows In Stock List @Author:PRIYA26JUL13******/

/************Start Code To Select Financial year In profit N Loss Panel @Author:PRIYA02AUG13*************/
function getProfitNLoss(firmId, fromDD, fromMM, fromYY, toDD, toMM, toYY) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("profitNLossSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omacplcp.php?firmId=" + firmId + "&profitNLossFromDD=" + fromDD + "&profitNLossFromMM=" + fromMM + "&profitNLossFromYY=" + fromYY
            + "&profitNLossToDD=" + toDD + "&profitNLossToMM=" + toMM + "&profitNLossToYY=" + toYY, true);
    xmlhttp.send();
}
/************End Code To Select Financial year In profit N Loss Panel @Author:PRIYA02AUG13*************/

/************Start Code To Get FirmId In profit N Loss Panel @Author:PRIYA02AUG13*************/
function getProfitNLossByFirmName(firmId, fromDD, fromMM, fromYY, toDD, toMM, toYY) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("profitNLossSubDiv").innerHTML = xmlhttp.responseText;
            getCapitalAccountByFirmName(firmId, fromDD, fromMM, fromYY, toDD, toMM, toYY);
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omacplcp.php?firmId=" + firmId + "&profitNLossFromDD=" + fromDD + "&profitNLossFromMM=" + fromMM + "&profitNLossFromYY=" + fromYY
            + "&profitNLossToDD=" + toDD + "&profitNLossToMM=" + toMM + "&profitNLossToYY=" + toYY, true);
    xmlhttp.send();
}
/************End Code To Get FirmId In profit N Loss Panel @Author:PRIYA02AUG13*************/

/************Start code To Validate No Of Rows @Author:PRIYA08AUG13**********/
/************Start code To Add  Validn for BackSpace @Author:PRIYA18AUG13**********/
function valKeyPressedForNumber(evt) {
    var ccharCode = (evt.which) ? evt.which : event.keyCode;
    if (ccharCode == 8) {
        return true;
    }
    if ((ccharCode < 48 || ccharCode > 57)) {
        return false;
    }
    return true;
}
/************End code To Add  Validn for BackSpace @Author:PRIYA18AUG13**********/
/************End code To Validate No Of Rows @Author:PRIYA08AUG13**********/
/************Start code To Update sms Mob No @Author:PRIYA08AUG13*******/
var smsMobId;
var smsOldMobNo;
var smsUpMobNo;
function validateUpdateSmsMobileNoInputs(smsUpMobNo) {
    if (validateEmptyField(smsUpMobNo, "Please Enter Mobile Number!") == false || ((validateNum(smsUpMobNo, "Accept only Numbers without space character!") == false || validateLength10(smsUpMobNo, "Mobile number length should be minimum 10!") == false))) {
        document.getElementById(smsMobId).value = 'Not Updated';
        window.setTimeout(closeUpdateSmsMobNoMessNotUpd, 1000);
    } else {
        return true;
    }
    function closeUpdateSmsMobNoMessNotUpd()
    {
        document.getElementById(smsMobId).value = smsOldMobNo;
        document.getElementById(smsMobId).focus();
        return false;
    }
}
function update_sms_mobile_no(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateSmsMobileNo;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertUpdateSmsMobileNo() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        if (xmlhttp.responseText == 'Updated') {
            document.getElementById(smsMobId).value = 'Updated';
            window.setTimeout(closeUpdateSmsMobNoMess, 1000);
        } else {
            document.getElementById(smsMobId).value = 'Not Updated';
            window.setTimeout(closeUpdateSmsMobNoMess, 1000);
        }
    } else {
        document.getElementById(smsMobId).value = 'Not Updated';
        window.setTimeout(closeUpdateSmsMobNoMess, 1000);
    }
    function closeUpdateSmsMobNoMess()
    {
        document.getElementById(smsMobId).value = smsUpMobNo;
    }
}
/************Start Code To Add Panel Name @Author:PRIYA19AUG13*********/
function updateSmsMobNo(mobNo, oldMobNo, smsId, userId, panelName) {
    smsMobId = 'smsMobUp' + smsId;
    smsUpMobNo = mobNo;
    smsOldMobNo = oldMobNo;
    if (validateUpdateSmsMobileNoInputs(smsUpMobNo)) {
        var poststr = "mobNo=" + encodeURIComponent(mobNo)
                + "&smsId=" + encodeURIComponent(smsId)
                + "&userId=" + encodeURIComponent(userId)
                + "&upPanelName=" + encodeURIComponent(panelName)
                + "&mobUpPanel=" + 'smsMobUpPanel';
        update_sms_mobile_no('include/php/omccdtmb.php', poststr);
    }
}
/************Start Code To Add Panel Name @Author:PRIYA19AUG13*********/
/************End code To Update sms Mob No @Author:PRIYA08AUG13*******/
/************Start Code To Add Func For ctrl+Enter Key @Author:PRIYA17AUG13*******/
function initFormName(formName, funName) {
//    alert(formName);
    gbCLTFormName = formName;
    gbCLTFormFun = funName;
}
/************End Code To Add Func For ctrl+Enter Key @Author:PRIYA17AUG13*******/
/************Start Code To Add Func For Char @Author:PRIYA17AUG13*******/
/************Start code To Add  Validn for BackSpace @Author:PRIYA18AUG13**********/
/************Start code To Change Condition @Author:PRIYA04SEP13**********/
function valKeyPressedForChar(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode == 8 || charCode == 13) || (charCode > 96 && charCode < 123)) {
        return true;
    }
    else if ((charCode < 65 || charCode > 90)) {
        return false;
    }
    return true;
}
/************End code To Change Condition @Author:PRIYA04SEP13**********/
/************End code To Add  Validn for BackSpace @Author:PRIYA18AUG13**********/
/************End Code To Add Func For Char @Author:PRIYA17AUG13*******/
/************Start Code To Add Func For NUM + Dot @Author:PRIYA17AUG13*******/
/************Start Code To Add Func For Char @Author:PRIYA17AUG13*******/
/************Start Code To Add Func For NumNDot @Author:PRIYA17AUG13*******/
/************Start code To Add  Validn for BackSpace @Author:PRIYA18AUG13**********/
function valKeyPressedForNumNDot(evt) {

    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode == 46 || charCode == 8) {
        return true;
    }
    else if ((charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


/************End code To Add  Validn for BackSpace @Author:PRIYA18AUG13**********/
/************Start code To Add  Validn for Single and Double Quotes @Author:PRIYA19AUG13**********/
function valKeyPressedForQuotes(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode == 34 || charCode == 39) {
        return false;
    }
    return true;
}
/************End code To Add  Validn for Single and Double Quotes @Author:PRIYA19AUG13**********/
/************Start code To Add  Validn Func For umNDotNDash @Author:PRIYA24AUG13**********/
function valKeyPressedForNumNDotNDash(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if (charCode == 45 || charCode == 8 || charCode == 46) {
        return true;
    } else if ((charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
/************End code To Add  Validn Func For umNDotNDash @Author:PRIYA24AUG13**********/
/************Start Code To Add Fun For Search Item In SP Panel @Author:PRIYA24AUG13*********/
/************Start Code To Add Fun For Search Item In SP Panel @Author:PRIYA21JAN14*********/
/**************Start code for pass txtType parameter for delete Author:SANT16DEC16***************************/
function searchItemByItemId(searchItemId, autoEntryValue, custId) {

    var searchItemIdLen = searchItemId.length;
    var searchItemIdTemp = searchItemId;
    var tempLen = searchItemIdLen;
    var charLen = 0;
    var alphaExp = /^[a-zA-Z]+$/;
    while (tempLen > 0) {

        var field = searchItemIdTemp.substr(0, 1);
        searchItemIdTemp = searchItemIdTemp.substr(1);
        if (field.match(alphaExp)) {
            charLen = charLen + 1;
        } else {
            break;
        }
        tempLen = tempLen - 1;
    }
    var searchItemIdCharPart = searchItemId.substr(0, charLen);
    var searchItemIdNumPart = searchItemId.substr(charLen);

    //alert('searchItemIdCharPart == ' + searchItemIdCharPart);
    //alert('searchItemIdNumPart == ' + searchItemIdNumPart);

    if (document.getElementById("srchDelItemId")) {
        // ADDED CONDITION FOR RETURN ITEM CODE @RATNAKAR 09FEB2018
        if (document.getElementById('srchDelItemId').value != '') {
            // IT WILL SET ITEM PRE ID & POST ID IN CASE OF WINDOW ITEM RETURN @RATNAKAR 09FEB2018
            document.getElementById('srchdelItemPreId').value = searchItemIdCharPart;
            document.getElementById('srchdelItemPostId').value = searchItemIdNumPart;
        } else {
            // IT WILL SET ITEM PRE ID & POST ID IN CASE OF ITEM SELL/PURCHASE @RATNAKAR 09FEB2018
            document.getElementById('srchItemPreId').value = searchItemIdCharPart;
            document.getElementById('srchItemPostId').value = searchItemIdNumPart;
        }
    } else {

        // IT WILL SET ITEM PRE ID & POST ID IN CASE OF ITEM SELL/PURCHASE @RATNAKAR 09FEB2018
        document.getElementById('srchItemPreId').value = searchItemIdCharPart;
        document.getElementById('srchItemPostId').value = searchItemIdNumPart;
    }
    if (autoEntryValue == 'YES') {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("slPrDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };

        if (document.getElementById("srchDelItemId")) {

            xmlhttp.open("GET", "include/php/ogspjsdv.php?srchItemPreId=" + searchItemIdCharPart + "&srchItemPostId=" + searchItemIdNumPart +
                    "&custId=" + custId + "&panelName=" + 'autoEntry' + "&autoEntry=" + autoEntryValue + "&charLen=" + charLen, true);

        } else {
            xmlhttp.open("GET", "include/php/ogspjsdv.php?srchItemPreId=" + searchItemIdCharPart + "&srchItemPostId=" + searchItemIdNumPart +
                    "&custId=" + custId + "&panelName=" + 'autoEntry' + "&autoEntry=" + autoEntryValue + "&charLen=" + charLen, true);
        }
        xmlhttp.send();

    } else {
        return false;
    }
}
/**************End code for pass txtType parameter for delete Author:SANT16DEC16***************************/
/**************Start code for pass txtType parameter for delete Author:SANT16DEC16***************************/
function searchCrystalItemByItemId(searchItemId, autoEntryValue, custId) {
    var searchItemIdLen = searchItemId.length;
    var searchItemIdTemp = searchItemId;
    var tempLen = searchItemIdLen;
    var charLen = 0;
    var alphaExp = /^[a-zA-Z]+$/;
    while (tempLen > 0) {

        var field = searchItemIdTemp.substr(0, 1);
        searchItemIdTemp = searchItemIdTemp.substr(1);
        if (field.match(alphaExp)) {
            charLen = charLen + 1;
        } else {
            break;
        }
        tempLen = tempLen - 1;
    }
    var searchItemIdCharPart = searchItemId.substr(0, charLen);
    var searchItemIdNumPart = searchItemId.substr(charLen);
    document.getElementById('srchItemPreId').value = searchItemIdCharPart;
    document.getElementById('srchItemPostId').value = searchItemIdNumPart;
//    document.getElementById('barcodeId').value = document.getElementById('srchItemPostId').value;
    if (autoEntryValue == 'YES') {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                var status = xmlhttp.responseText;
                if (status != 'SUCCESS' && status != '') {

                    // document.getElementById("autoEntryMessDisplayDiv").value = status; 
                    document.getElementById("srchItemId").value = '';
                }
                if (autoEntryValue == 'YES' && status == 'SUCCESS') {
//                    alert('hello');
                    document.getElementById("sell_purchase").submit();
                    return true;
                } else {
                    return false;
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/ogcrslstat.php?srchItemPreId=" + searchItemIdCharPart + "&srchItemPostId=" + searchItemIdNumPart +
                "&custId=" + custId + "&panelName=" + 'autoEntry', true);
        xmlhttp.send();
    } else {
        return false;
    }
}
/**************End code for pass txtType parameter for delete Author:SANT16DEC16***************************/
/************End Code To Add Fun For Search Item In SP Panel @Author:PRIYA21JAN14*********/
/************End Code To Add Fun For Search Item In SP Panel @Author:PRIYA24AUG13*********/
/***********Start Code To Select FirmId In Account Balance Details Panel @AUTHOR: GAUR11JAN16********/
function getAccBalDetailsByFirmName(firmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("accBalDetails").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var postYear = encodeURIComponent(document.get_account_balance_sheet_form.balanceSheetYear.value);
    xmlhttp.open("POST", "include/php/omaccbal.php?firmId=" + firmId + "&postYear=" + postYear, true);
    xmlhttp.send();
}
/***********END Code To Select FirmId In Account Balance Details Panel @AUTHOR: GAUR11JAN16********/
/***********Start Code To Select Year In Account Balance Details Panel @AUTHOR: GAUR29DEC15********/
function getAccBalDate(balanceSheetYear) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("accBalDetails").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omaccbal.php?firmId=" + balanceSheetYear, true);
    xmlhttp.send();
}
/***********END Code To Select Year In Account Balance Details Panel @AUTHOR: GAUR29DEC15********/
/**********Start to add function showCountBal @AUTHOR: GAUR26DEC15****************/
function showCountBal() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omaccbal.php", true);
    xmlhttp.send();
}
/**********End to add function showCountBal @AUTHOR: GAUR26DEC15****************/

/**********Start to add function getInvoice @AUTHOR: RATNAKAR01SEP17****************/
function getInvoice(changeInv, srchItemPreId, srchItemPostId, custId, panelName, txtType) {
    var firstChar = srchItemPreId.charAt(0);
    var res = firstChar.toUpperCase(); //chnaged @OMMODTAG PRIYA_05MAY15
    loadXMLDoc();
//    alert(panelName);
    var preInvNo = "";
    var postInvNo = "";
    if (panelName == 'orderPickStock') {
        var str = txtType.split(';');
        preInvNo = str[0];
        postInvNo = str[1];
    }

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (panelName == 'AddUdhaar' || panelName == 'UpdateUdhaar') {
                document.getElementById("udhaarSubDiv").innerHTML = xmlhttp.responseText;
            } else if (panelName == 'AddMoney' || panelName == 'UpdateAdvMoney') {
                document.getElementById("advMoneyDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("sellPurchaseItemDetails").innerHTML = xmlhttp.responseText;
                if (res == 'G' || res == 'S' || res == 'O') {
                    searchItemNames(itemName, metalType, divNum, keyCodeInput);
                }

                document.getElementById('slPrDOBDay').focus();
            }
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    //alert('srchItemPreId=='+srchItemPreId);
    //alert('srchItemPostId=='+srchItemPostId);
//    alert('panelName=='+panelName);
//alert('txtType=='+txtType);
//         if (panelName == 'StockPurchasePanel') {
    if (panelName == 'AddUdhaar') {
        udhaarAmt = document.getElementById('udhaarMainAmount').value;
        firmId = document.getElementById('udhharFirmId').value;
        sday = document.getElementById('DOBDay').value;
        smonth = document.getElementById('DOBMonth').value;
        syear = document.getElementById('DOBYear').value;
        eday = document.getElementById('endDOBDay').value;
        emonth = document.getElementById('endDOBMonth').value;
        eyear = document.getElementById('endDOBYear').value;
        udhaarType = document.getElementById('udhaarType').value;
        otherInfo = document.getElementById('udhaarOtherInfo').value;
        accId = document.getElementById('udhaarPayAccId').value;
    } else if (panelName == 'AddMoney') {
        advAmt = document.getElementById('advMoneyAmt').value;
        firmId = document.getElementById('advMoneyFirmId').value;
        accId = document.getElementById('advMoneyCrAccId').value;
        OthInfo = document.getElementById('advMoneyOtherInfo').value;
        sday = document.getElementById('DOBDay').value;
        smonth = document.getElementById('DOBMonth').value;
        syear = document.getElementById('DOBYear').value;
    }

    if (panelName == 'orderPickStock') {
        xmlhttp.open("POST", "include/php/ogspjsdv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId + "&panelName=" + panelName + "&preOrdInvNo=" + preInvNo + "&postOrdInvNo=" + postInvNo + "&changeInv=" + changeInv, true);
    } else if (panelName == 'UpdateUdhaar') {
        xmlhttp.open("POST", "include/php/omuanwdt.php?custId=" + custId + "&panelName=" + panelName + "&changeInv=" + changeInv + "&udhaarId=" + txtType, true);
    } else if (panelName == 'UpdateAdvMoney') {
        xmlhttp.open("POST", "include/php/omamaddv.php?custId=" + custId + "&panelName=" + panelName + "&changeInv=" + changeInv + "&admnId=" + txtType, true);
    } else if (panelName == 'AddUdhaar') {
        xmlhttp.open("POST", "include/php/omuanwdt.php?custId=" + custId + "&panelName=" + panelName + "&changeInv=" + changeInv
                + "&udhaarAmt=" + udhaarAmt + "&firmId=" + firmId + "&udhaarType=" + udhaarType + "&accId=" + accId
                + "&PayOtherInfo=" + otherInfo + "&eDOBDay=" + eday + "&eDOBMonth=" + emonth + "&eDOBYear=" + eyear
                + "&DOBDay=" + sday + "&DOBMonth=" + smonth + "&DOBYear=" + syear, true);
    } else if (panelName == 'AddMoney') {
        xmlhttp.open("POST", "include/php/omamaddv.php?custId=" + custId + "&panelName=" + panelName + "&changeInv=" + changeInv
                + "&advAmt=" + advAmt + "&firmId=" + firmId + "&accId=" + accId + "&PayOtherInfo=" + OthInfo
                + "&DOBDay=" + sday + "&DOBMonth=" + smonth + "&DOBYear=" + syear, true);
    } else
        xmlhttp.open("POST", "include/php/ogspjsdv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId + "&panelName=" + panelName + "&txtType=" + txtType + "&changeInv=" + changeInv, true);
//        } 
    xmlhttp.send();
}
/**********End to add function getInvoice @AUTHOR: RATNAKAR01SEP17****************/

function searchItemByProdCode(searchItemId, custId) {
    var searchItemIdLen = searchItemId.length;
    var searchItemIdTemp = searchItemId;
    var tempLen = searchItemIdLen;
    var charLen = 0;
    var alphaExp = /^[a-zA-Z]+$/;
    while (tempLen > 0) {

        var field = searchItemIdTemp.substr(0, 1);
        searchItemIdTemp = searchItemIdTemp.substr(1);

        if (field.match(alphaExp)) {
            charLen = charLen + 1;
        } else {
            break;
        }
        tempLen = tempLen - 1;
    }

    var searchItemIdCharPart = searchItemId.substr(0, charLen);
    var searchItemIdNumPart = searchItemId.substr(charLen);

    document.getElementById('srchItemPreId').value = searchItemIdCharPart;
    document.getElementById('srchItemPostId').value = searchItemIdNumPart;

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            var status = xmlhttp.responseText;
            if (status != 'SUCCESS' && status != '') {
                document.getElementById("srchItemId").value = '';
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("GET", "include/php/omspstat.php?srchItemPreId=" + searchItemIdCharPart + "&srchItemPostId=" + searchItemIdNumPart +
            "&custId=" + custId + "&panelName=" + 'Estimate' + "&charLen=" + charLen, true);
    xmlhttp.send();

}

function showEstimateInvDiv(srchItemPreId, srchItemPostId, custId, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("estimateDetails").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "include/php/omestimate.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId + "&panelName=" + panelName, true);
    xmlhttp.send();
}
//
function refreshXRFPaymentPanel(prod_total_amount,userId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("xrfPaymentDiv").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ompaymentxrf.php?prod_total_amount=" + prod_total_amount + "&userId=" + userId, true);
    xmlhttp.send();
}