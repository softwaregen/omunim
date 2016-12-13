/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**********Start code to add function to get repair item pre id div @Author:SHRI29DEC14*********/
function getItemRepPreIdDiv(preId, metalType, div, id, keyCodeInput, mainPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var str = xmlhttp.responseText;
            if (str == '') {
                document.getElementById(div).innerHTML = xmlhttp.responseText;
                document.getElementById('itemRepPostId').value = '1';
            } else {
                document.getElementById(div).innerHTML = xmlhttp.responseText;
                if (keyCodeInput == 40 || keyCodeInput == 38) {
                    document.getElementById('itemPreIdListToSel').focus();
                    document.getElementById('itemPreIdListToSel').options[0].selected = true;
                }
            }
        }
    };
    var itemPreId = preId;
    xmlhttp.open("POST", "include/php/ogrpidsl.php?metalType=" + metalType + "&itemPreId=" + itemPreId + "&div=" + div + "&id=" + id + "&mainPanel=" + mainPanel, true);
    xmlhttp.send();
}
/**********End code to add function to get repair item pre id div @Author:SHRI29DEC14*********/
/**********Start code to code to get metal rate @Author:SHRI10JAN15*********/
function getRepItmMetalType(div, id, keyCodeInput, mainPanel) {
    //alert("hello=="+mainPanel);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(div).innerHTML = xmlhttp.responseText;
            if (keyCodeInput == 40 || keyCodeInput == 38) {
                document.getElementById('addItemMetSelBy').focus();
                document.getElementById('addItemMetSelBy').options[0].selected = true;
            }
        }
    };
    xmlhttp.open("POST", "include/php/ogrpmtsl.php?id=" + id + "&div=" + div + "&mainPanel=" + mainPanel, true);
    xmlhttp.send();
}
/**********End code to code to get metal rate @Author:SHRI10JAN15*********/
/*************Start code to add param @Author:SHRI10JAN15********************/
function getRepItemMetalRateDiv(metalType, div, id, keyCodeInput) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(div).innerHTML = xmlhttp.responseText;
            if (keyCodeInput == 40 || keyCodeInput == 38) {
                document.getElementById('goldIdListDivToAddGoldIdSelect').focus();
                document.getElementById('goldIdListDivToAddGoldIdSelect').options[0].selected = true;
            }
        }
    };
    xmlhttp.open("POST", "include/php/ogrpmtrt.php?metalType=" + metalType + "&div=" + div + "&id=" + id, true);
    xmlhttp.send();
}
/*************End code to add param @Author:SHRI10JAN15********************/
/*************Start code to add function @Author:SHRI12JAN15***********/
//var noOfCrystal;
function getRepItemCrystalFunc(crystalCount, div, commonPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (crystalCount == '') {
                noOfCrystal = 1;
                document.getElementById(div).innerHTML = xmlhttp.responseText;
            } else {
                noOfCrystal = crystalCount;
                document.getElementById(div + crystalCount).innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogrpcydv.php?crystalCount=" + crystalCount + "&commonPanel=" + commonPanel, true);
    xmlhttp.send();
}
function closeRepItemCrystalFunc(cryCount, panelName, repairCryId, repairId) {
//    alert(cryCount+" "+panelName+" "+repairCryId+" "+repairId);
    document.getElementById("del" + cryCount).value = 'Deleted';
    document.getElementById("crystal" + cryCount).innerHTML = "";
    if (repairCryId != '') {
        deleteRepItemCrystalDiv(repairCryId, repairId, panelName);
    }
    calcItemRepCryPrice();
    return false;
}
function deleteRepItemCrystalDiv(repairCryId, repairId, panelName) {
    loadXMLDoc2();
    xmlhttp2.onreadystatechange = function() {
        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
            document.getElementById("suppPurByItemSubDiv").innerHTML = xmlhttp2.responseText;
            closeMessDiv('messDisplayDiv', 'CRYSTAL DELETED');
        }
    };
    xmlhttp2.open("POST", "include/php/ogrpcydl.php?repairCryId=" + repairCryId + "&repairId=" + repairId + "&panelName=" + panelName, true);
    xmlhttp2.send();
}
/*************End code to add func @Author:SHRI12JAN15***********/
/****************Start to change function to change repairId @AUTHOR: SHRI09JAN15 ********/
function updateRepairItem(documentRootPath, repairId, panelName, custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (panelName == 'RawDetUpPanel') {
                document.getElementById("rawMetalAddDiv").innerHTML = xmlhttp.responseText;
            } else if (panelName == 'addByItems') {
                document.getElementById("suppPurchaseDivs").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("itemRepairDiv").innerHTML = xmlhttp.responseText;
            }
        }
    };
    if (panelName == 'RawDetUpPanel') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrwiadv.php?rwprId=" + repairId + "&panelName=RawStock" + "&rawPanelName=" + panelName, true);
    } else if (panelName == 'addByItems') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwprinv.php?repairId=" + repairId + "&itemMainPanel=" + panelName + "&itemSubPanel=itemsAddUp", true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrpaddt.php?repairId=" + repairId + "&panelName=" + panelName + "&custId=" + custId, true);
    }
    xmlhttp.send();

}
/****************End to change function to change repairId @AUTHOR: SHRI09JAN15 ********/
/**Start to add function to delete repair item @AUTHOR: SHRI09JAN15**/
function deleteRepairItem(repairId, panelName, mainPanel, pageNo, sellPresent) {
    if (sellPresent > 0) {
        alert('To Delete,First Delete This Item From Customer Purchase Panel!');
        return false;
    } else {
        confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");//add variables of alert msgs @AUTHOR: SANDY29JAN14
        if (confirm_box == true)
        {
            loadXMLDoc();
            xmlhttp.onreadystatechange = function() {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    if (panelName == 'ItemDetailPanel') {
                        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
                        window.setTimeout(stockGlobalFunctionToCloseDiv, 1000);
                    }
                    else if (panelName == 'ItemRepairList') {
                        document.getElementById("repairPanelPurchaseList").innerHTML = xmlhttp.responseText;
                        closeMessDiv('messDisplayDiv', 'DELETED');
                    } else if (mainPanel == 'ItemRepairInvoice') {
                        document.getElementById("itemRepairDiv").innerHTML = xmlhttp.responseText;
                        closeMessDiv('messDisplayDiv', 'DELETED');
                    } else if (pageNo == 'SuppPanel' || pageNo == 'addByItems') {
                        document.getElementById("suppPurchaseDivs").innerHTML = xmlhttp.responseText;
                        closeMessDiv('messDisplayDiv', 'DELETED');
                    } else {
//                        document.getElementById("itemRepairDiv").innerHTML = xmlhttp.responseText;
////                        alert(xmlhttp.responseText);
//                        window.setTimeout(stockGlobalFunctionToCloseDiv, 1000);
                    }
                } else {
                    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
                }
            };
            xmlhttp.open("GET", "include/php/ogrpdelt.php?repairId=" + repairId + "&panelName=" + panelName + "&mainPanel=" + mainPanel + "&pageNo=" + pageNo, true);
            xmlhttp.send();
        }
    }

}
/**End to add function to delete repair item @AUTHOR: SHRI09JAN15**/
/**********Start code to add function to get calc by for labour charges @Author:SHRI09JAN15*********/
function getRepItemDetailsByPreId(preId, mainPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var str = xmlhttp.responseText;
            var strArray = new Array();
            strArray = str.split("*");
            document.getElementById('itemRepPostId').value = strArray[0];
            document.getElementById('itemRepMetalRate').value = strArray[1];
            document.getElementById('addItemRepName').value = strArray[2];
            document.getElementById('addItemRepCategory').value = strArray[3];
            document.getElementById('itemQuantity').value = strArray[4];
            document.getElementById('itemGrossWeight').value = '';
            document.getElementById('itemNetWeight').value = '';
            document.getElementById('repairItemFineWt').value = strArray[5];
            document.getElementById('itemTunch').value = strArray[6];
            document.getElementById('repairCharges').value = strArray[7];
            document.getElementById('otherCharges').value = strArray[8];
            document.getElementById('valuation').value = strArray[9];
            document.getElementById('taxPercentage').value = strArray[10];
//            document.getElementById('addItemLabChargesType').value = strArray[11];
//            document.getElementById('addItemCustCharges').value = strArray[12];
//            document.getElementById('addItemCustChargesType').value = strArray[13];
//            document.getElementById('addItemValuation').value = strArray[14];
//            document.getElementById('addItemVATTax').value = strArray[15];
            document.getElementById('itemRepMetalType').value = strArray[11];

            document.getElementById('finalValuation').value = '';
            calculateValuation();
        }
    };
    xmlhttp.open("POST", "include/php/ogrppidt.php?preId=" + preId + "&mainPanel=" + mainPanel, true);
    xmlhttp.send();
}
/**********End code to add function to get calc by for labour charges @Author:SHRI09JAN15*********/
/*************Start code to add function for item purchase panel @Author:SHRI12JAN15*********************/
function searchItemRepList(documentRootPath, searchColumn, searchValue, selFirmId, div, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(div).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
//    alert(panel);
    if (panel == 'ItemRepairList')
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrpilst.php?searchColumn="
                + searchColumn + "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&panel=" + panel, true);
    else if (panel == 'StockList')
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogilsbdv.php?searchColumn="
                + searchColumn + "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&panel=" + panel, true);
    else
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogspsblt.php?searchColumn="
                + searchColumn + "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&panel=" + panel, true);
    xmlhttp.send();
}
function sortItemRepList(documentRootPath, sortKeyword, selFirmId, div, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(div).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'ItemRepairList')
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrpilst.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&panel=" + panel, true);
    else if (panel == 'StockList')
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogilsbdv.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&panel=" + panel, true);
    else if (panel == 'UdhaarEMIList')
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omuemilt.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&panel=" + panel, true);
    else
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogspsblt.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&panel=" + panel, true);
    xmlhttp.send();
}
/*************End code to add function for item purchase panel @Author:SHRI12JAN15*********************/
/*************Start code to add acit panel @Author:SHRI12JAN15******************/
function showRepItemNoOfRows(documentRootPath, rowsPerPage, pageNum, upRowsPanel, nwOrPanel, custId)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            alert(documentRootPath);
            if (nwOrPanel == 'ItemRepairList') {
                document.getElementById("repairPanelPurchaseList").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("ajaxLoadNextItemList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextItemListButt").style.visibility = "hidden";
        }
    };
//    alert(rowsPerPage);
    if (nwOrPanel == 'ItemRepairList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrpilst.php?rowsPerPage=" + rowsPerPage + "&panel=" + nwOrPanel + "&repairItemUpdateRows=" + upRowsPanel, true);
    }
    xmlhttp.send();
}
/*************End code to add acit panel @Author:SHRI12JAN15******************/
/***************Start cdoe to add panel @Author:SHRI12JAN15*************/
function showRepItemPanel(panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemRepairDiv").innerHTML = xmlhttp.responseText;  //change in div name @AUTHOR: SANDY25SEP13
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'ItemRepairList')
        xmlhttp.open("POST", "include/php/ogrpilst.php?panel=" + panel, true);
    else
        xmlhttp.open("POST", "include/php/ogrpaddt.php?panel=" + panel, true);
    xmlhttp.send();
}
/***************End cdoe to add panel @Author:SHRI12JAN15*************/
/***************Start to change function @AUTHOR:SHRI12JAN15****************/
function showRepItemJournalEntryListDiv(documentRootPath, jrnlId, jrnlDrDesc, jrnlUserId, jrnlUserType, jrnlTransId, jrnlTransType, accMainId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (jrnlUserType == 'cust' && jrnlTransType == 'Girvi') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?custId=" + jrnlUserId + "&jrnlDrDesc=" + jrnlDrDesc + "&girviId=" + jrnlTransId + "&accMainId=" + accMainId + "&panelDivName=girviInfo", true);
    } else if (jrnlUserType == 'MoneyLender' && jrnlTransType == 'LOAN') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ommlmndv.php?mlId=" + jrnlUserId + "&jrnlDrDesc=" + jrnlDrDesc + "&mlLoanId=" + jrnlTransId + "&panelOption=LoanDetailPanel", true);
    } else if (jrnlUserType == 'Trans') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omtutrnd.php?transId=" + jrnlTransId, true);
    } else if (jrnlUserType == 'cust' && jrnlTransType == 'Udhaar') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?custId=" + jrnlUserId + "&custPanelOption=CustUdhaar", true);
    } else if (jrnlTransType == 'stockAdd') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamsdv.php?isin_id=" + jrnlTransId + "&panelName=UpdateStock", true);
    } else if (jrnlTransType == 'AddRawMetal') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamsdv.php?rmin_id=" + jrnlTransId + "&rawPanelName=RawDetUpPanel", true);
    } else if (jrnlTransType == 'custSell') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?panelDivName=" + 'SellPanel' + "&panelName=" + 'CustSellUpPanel' + "&itslin_id=" + jrnlTransId, true);
    }
    xmlhttp.send();
}
/***************End to change function @Author:SHRI12JAN15****************/
function calcItemRepCryPrice() {
    var crystalEntered = 0;
    var totalCryVal = 0;
    var count = 1;
    var delId = 'del' + count;
//    alert(noOfCrystal);
    for (var dc = count; noOfCrystal != ''; dc++) {
        if (document.getElementById('del' + dc).value != 'Deleted') {
            var crystalQTY = parseInt(document.getElementById('addItemCryQty' + dc).value);
            var crystalGsWt = parseFloat(document.getElementById('addItemCryGSW' + dc).value);
            var crystalGsWtTyp = document.getElementById('addItemCryGSWTyp' + dc).value;
            var crystalRate = parseFloat(document.getElementById('addItemCryRate' + dc).value);
            var crystalRateType = document.getElementById('addItemCryRateTyp' + dc).value;
            var crystalVal = parseFloat(document.getElementById('addItemCryVal' + dc).value);
            var totalGSWTNRate = 0;
            if (crystalRateType == 'PP') {
                totalGSWTNRate = crystalRate * crystalQTY;
            } else {
                totalGSWTNRate = crystalRate * crystalGsWt;
            }
            document.getElementById('addItemCryVal' + dc).value = (totalGSWTNRate).toFixed(2);
            if (document.getElementById('addItemCryVal' + dc).value == 'NaN') {
                document.getElementById('addItemCryVal' + dc).value = 0;
            }
            totalCryVal += parseFloat(document.getElementById('addItemCryVal' + dc).value);
            document.getElementById('addItemCryFinVal').value = (parseFloat(totalCryVal)).toFixed(2);
            if (document.getElementById('addItemCryFinVal').value != '') {

                calculateValuation();
            }
        }
        if (document.getElementById(delId).value == 'Deleted') {
            document.getElementById('addItemCryFinVal').value = 0 + totalCryVal;
            calculateValuation();
        }
        crystalEntered++;
    }
    return false;
}
function searchRepItmSuppIdForTextField(suppName, keyCodeInput) {

    keyCode = keyCodeInput;

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    var poststr = "suppName=" + encodeURIComponent(suppName);
    search_Rep_Itm_suppId_for_textField('include/php/ogrpsprlt.php', poststr);
}
function search_Rep_Itm_suppId_for_textField(url, parameters) {
    loadXMLDoc();

    xmlhttp.onreadystatechange = alertSearchRepItmSuppIdForTextField;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchRepItmSuppIdForTextField() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("suppListDivToAddItemStock").innerHTML = xmlhttp.responseText;
        if (keyCode == 40 || keyCode == 38) {
            document.getElementById('suppListForTextFieldSelect').focus();
            document.getElementById('suppListForTextFieldSelect').options[0].selected = true;
        }
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}

/**************Start To calculate valuation of Item Repair panel @AUTHOR: SHRI24FEB15 *********************/

function calcRepairItemBal()
{
    var metalEntered = 0;
    var metalCount = document.getElementById("metalCount").value;
    if (document.getElementById('metalPanel').value == 'RepairItemPayment' || document.getElementById('metalPanel').value == 'RepairItemPayUp') {
        var prefix = 'repair';
    }
    if (document.getElementById('metalPanel').value == 'RepairItemPayment' || document.getElementById('metalPanel').value == 'SlPrPayment' ||
            document.getElementById('metalPanel').value == 'CustSellPayment' || document.getElementById('metalPanel').value == 'NwOrPayment' ||
            document.getElementById('metalPanel').value == 'RawPayment' || document.getElementById('metalPanel').value == 'SuppAddOrder') {
        count = 1;
        delId = 'del' + 1;
    } else if (document.getElementById('metalPanel').value == 'RepairItemPayUp' || document.getElementById('metalPanel').value == 'SellPayUp' ||
            document.getElementById('metalPanel').value == 'CustSellPayUp' || document.getElementById('metalPanel').value == 'NwOrPayUp' ||
            document.getElementById('metalPanel').value == 'RawPayUp' || document.getElementById('metalPanel').value == 'SuppOrderUp') {
        getMetalDiv = document.getElementById('noOfRawMet').value;
        var count = document.getElementById('rawId').value;
        var delId = 'del' + count;
    }
    var totAmtRec = 0;
    var gdBal = 0;
    var slBal = 0;
    //    for (var dc = count; dc <= getMetalDiv; dc++) { 
    for (var dc = count; getMetalDiv != ''; dc++) {
        if (document.getElementById('metalDel' + dc).value != 'Deleted') {
            var payTotalWeight1 = document.getElementById(prefix + 'PayMetal1RecWt' + dc).value;
            var payTotalWeightType1 = document.getElementById(prefix + 'PayMetal1RecWtType' + dc).value;
            var payMetalRate1 = document.getElementById(prefix + 'PayMetal1Rate' + dc).value;
            var payMetalTunch1 = document.getElementById(prefix + 'PayMetal1Tunch' + dc).value;
            var goldWeight = (payTotalWeight1 * payMetalTunch1) / 100;
            document.getElementById(prefix + 'PayMetal1FnWt' + dc).value = (goldWeight).toFixed(2);
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold' || document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Alloy') {
//                alert("calcRepairItemBal:GOLD");
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) * document.getElementById('gmWtInKg').value).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInMg').value).toFixed(2);
                }
                if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold') {
                    var payMetalDueWeightType1 = document.getElementById(prefix + 'GoldTotFineWtType').value;
                    if (gdBal == '') {
                        gdBal = document.getElementById(prefix + 'GoldTotFineWt').value;
                    }
                    if (payMetalDueWeightType1 == 'KG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight / 1000)).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat(((gdBal) - goldWeight / (1000 * 1000))).toFixed(2);
                        }
                    }
                    else if (payMetalDueWeightType1 == 'GM') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat(((gdBal) - goldWeight / (1000))).toFixed(2);
                        }
                    }
                    else if (payMetalDueWeightType1 == 'MG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000 * 1000)).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat((gdBal - goldWeight)).toFixed(2);
                        }
                    }
                    document.getElementById(prefix + 'PayMetal1Bal' + dc).value = gdBal;
                    document.getElementById(prefix + 'PayMetalBal1Type' + dc).value = payMetalDueWeightType1;
                    document.getElementById(prefix + 'PayMetal1WtBal').value = gdBal;
                    document.getElementById(prefix + 'PayMetal1WtBalType').value = payMetalDueWeightType1;
                    document.getElementById('metal1WtBal').value = parseFloat(gdBal).toFixed(2) + ' ' + payMetalDueWeightType1;
                }
            }
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Silver') {
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1 * document.getElementById('srGmWtInKg').value)).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('srGmWtInGm').value).toFixed(2);
                }
                else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                }
                payMetalDueWeightType1 = document.getElementById(prefix + 'SilverTotFineWtType').value;
                if (slBal == '') {
                    slBal = document.getElementById(prefix + 'SilverTotFineWt').value;
                }
                if (payMetalDueWeightType1 == 'KG') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat((slBal) - goldWeight).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat(((slBal) - goldWeight / 1000)).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat(((slBal) - goldWeight / (1000 * 1000))).toFixed(2);
                    }
                }
                else if (payMetalDueWeightType1 == 'GM') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat(((slBal) - goldWeight * 1000)).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat((slBal) - goldWeight).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat(((slBal) - goldWeight / (1000))).toFixed(2);
                    }
                } else if (payMetalDueWeightType1 == 'MG') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat(((slBal) - goldWeight * 1000 * 1000)).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat(((slBal) - goldWeight * 1000)).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat((slBal - goldWeight)).toFixed(2);
                    }
                }
                document.getElementById(prefix + 'PayMetal1Bal' + dc).value = slBal;
                document.getElementById(prefix + 'PayMetalBal1Type' + dc).value = payMetalDueWeightType1;
                document.getElementById(prefix + 'PayMetal2WtBal').value = slBal;
                document.getElementById(prefix + 'PayMetal2WtBalType').value = payMetalDueWeightType1;
                document.getElementById('metal2WtBal').value = parseFloat(slBal).toFixed(2) + ' ' + payMetalDueWeightType1;
            }
            var metalValuation1 = document.getElementById(prefix + 'PayMetal1Val' + dc).value;
            if (metalValuation1 == '') {
                metalValuation1 = 0;
            }
            totAmtRec += parseFloat(metalValuation1);
            document.getElementById(prefix + 'PayTotAmtRec').value = (totAmtRec).toFixed(2);
            document.getElementById(prefix + 'PayTotAmtRecDisp').value = document.getElementById(prefix + 'PayTotAmtRec').value;
            calcCashBalance(prefix);
        }
        metalEntered++;
    }
    return false;
}

/**************End To calculate valuation of Item Repair panel @AUTHOR: SHRI24FEB15 *********************/

function showRepairList(panel)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("custListForAddGirviDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'repairList')
        xmlhttp.open("GET", "include/php/ogrprldt.php?panel=" + panel, true);
    else
        xmlhttp.open("GET", "include/php/ogspspdv.php", true);
    xmlhttp.send();
}
/******************Start code to add function for repair panel search list item @Author:SHRI14MAR15**************/
function searchRepairList(documentRootPath, searchColumn, searchValue, selFirmId, custId, empLoginId, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {

        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("custListForAddGirviDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrprldt.php?searchColumn="
            + searchColumn + "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&custId=" + custId + "&empLoginId=" + empLoginId + "&panel=" + panelName, true);

    xmlhttp.send();
}
function sortRepairList(documentRootPath, sortKeyword, selFirmId, custId, empLoginId, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {

        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("custListForAddGirviDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrprldt.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&custId=" + custId
            + "&empLoginId=" + empLoginId + "&panel=" + panelName, true);
    xmlhttp.send();
}

function showRepairItemDetails(documentRootPath, custId, preInvoiceNo, postInvoiceNo, panelName, repairId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function() {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omcdccdd.php?custId=" + custId + "&panelDivName=" + 'ItemRepair' + "&panelName=" + 'RepairItemPayUp' + "&divMainMiddlePanel=" + panelName + "&preInvoiceNo=" + preInvoiceNo +
            "&postInvoiceNo=" + postInvoiceNo + "&repairId=" + repairId, true);
    xmlhttp.send();
}

/******************End code to add function for repair panel search list item @Author:SHRI14MAR15**************/
/*************Start code to add function @Author:SHRI30APR15********************/
/*************Start code to add function @Author:SHE01APR16********************/

/*************Start code to add condition for jewelry panel @Author:SHRI05APR16************/
function navigationMainBigMiddleImageJewelleryList(divPanel, imageName, imageContent) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById(divPanel).innerHTML = "<img src='images/" + imageName + "' title='" + imageContent + "' />";
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            checkPlaceHolder();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (divPanel == 'retailStockList') {
        xmlhttp.open("POST", "include/php/ogrtprlt.php?divPanel=" + divPanel, true);
    } else if (divPanel == 'wholeSaleStockList') {
        xmlhttp.open("POST", "include/php/ogwtprlt.php?divPanel=" + divPanel, true);
    } else if (divPanel == 'imitationStockList') {
        xmlhttp.open("POST", "include/php/ogilimlt.php?divPanel=" + divPanel, true);
    } else {
        xmlhttp.open("POST", "include/php/ogilstlt.php?divPanel=" + divPanel, true);
    }
    xmlhttp.send();
}
/*************End code to add condition for jewelry panel @Author:SHRI05APR16************/
/*************End code to add function @Author:SHE01APR16********************/
/*************End code to add function @Author:SHRI30APR15********************/