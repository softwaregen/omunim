/***********Start code to add else condition @Author:PRIYA03JAN15****************/
function convert(to, from, wt) {
    if ((to == 'GM') && (from == 'KG')) {
        return(wt * 1000);
    } else if ((to == 'GM') && (from == 'MG')) {
        return(wt / 1000);
    } else if ((to == 'KG') && (from == 'MG')) {
        return(wt / 1000000);
    } else if ((to == 'KG') && (from == 'GM')) {
        return(wt / 1000);
    } else if ((to == 'MG') && (from == 'KG')) {
        return(wt * 1000000);
    } else if ((to == 'MG') && (from == 'GM')) {
        return(wt * 1000);
    } else {
        return(wt);
    }
}
/***********End code to add else condition @Author:PRIYA03JAN15****************/
/**************** Start to add function to show tally panel @AUTHOR: SANDY6SEP13 ***********************/
function showGirviTallyDiv()
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
            document.getElementById('enterSerialNum').focus();
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgpgtly.php", true);
    xmlhttp.send();
}
/**************** End to add function to show tally panel @AUTHOR: SANDY6SEP13 ***********************/

/**************** Start to add function to add active girvi to tally girvi side @AUTHOR: SANDY13SEP13 *********/
/**************Start of Changes in function  to correct error @AUTHOR: SANDY27OCT13***********************/
function addToGirviTally(pre, post, panel, num) {
    if (panel == 'NON TALLY') {
        confirm_box = confirm("Do you really want to tally this Loan!");
        if (confirm_box == true) {
            loadXMLDoc();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
                    document.getElementById("girviTallyPanelDiv").innerHTML = xmlhttp.responseText;
                    document.getElementById('enterSerialNum').focus();
                } else {
                    document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
                }
            };
            xmlhttp.open("POST", "include/php/orgrvtly.php?preId=" + pre + "&postId=" + post + "&panel=" + panel + "&num=" + num, true);
            xmlhttp.send();
        }
    } else {
        confirm_box = confirm("Do you really want to back this Loan");
        if (confirm_box == true) {
            loadXMLDoc();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
                    document.getElementById("girviTallyPanelDiv").innerHTML = xmlhttp.responseText;
                    document.getElementById('enterSerialNum').focus();
                } else {
                    document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
                }
            };
            xmlhttp.open("POST", "include/php/orgrvtly.php?preId=" + pre + "&postId=" + post + "&panel=" + panel + "&num=" + num, true);
            xmlhttp.send();
        }
    }
}
/**************End of Changes in function to correcr error @AUTHOR: SANDY27OCT13***********************/
/******************* End to add function to add active girvi to tally girvi side @AUTHOR: SANDY13SEP13 *********/

/******************* Start to add function to search girvi from serial Number @AUTHOR: SANDY6SEP13 *******************/
function showEnteredGirvi(serialno, num) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviTallyPanelDiv").innerHTML = xmlhttp.responseText;
            document.getElementById('girviSerialNum' + serialno).focus();
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    var serialno = serialno.toUpperCase();
    xmlhttp.open("POST", "include/php/orgpgtly.php?serialNo=" + serialno + "&num=" + num, true);
    xmlhttp.send();
}
/******************* End to add function to search girvi from serial Number @AUTHOR: SANDY6SEP13 *******************/

/******************* Start to add function to implement paging in tally panel @AUTHOR: SANDY6SEP13 *******************/
function navigationToNextGirvi(pagenum, panelName, num) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (panelName == 'ActiveGirvi') {
                document.getElementById("girviTallyPanelDiv").innerHTML = xmlhttp.responseText;
                document.getElementById('enterSerialNum').focus();
            } else if (panelName == 'TallyGirvi') {
                document.getElementById("girviTallyPanelDiv").innerHTML = xmlhttp.responseText;
                document.getElementById('enterSerialNum').focus();
            }
        }
    };
    if (panelName == 'ActiveGirvi') {
        xmlhttp.open("POST", "include/php/orgpgtly.php?page=" + pagenum + "&panel=" + panelName + "&num=" + num, true);
    } else if (panelName == 'TallyGirvi') {
        xmlhttp.open("POST", "include/php/orgpgtly.php?page=" + pagenum + "&panel=" + panelName + "&num=" + num, true);
    }
    xmlhttp.send();
}
/******************* End to add function to implement paging in tally panel @AUTHOR: SANDY6SEP13 *******************/
/*********** Start to add function to RESET ALL LOANS FROM  tally panel @AUTHOR: SANDY6SEP13 ****************/
/*********** Start to change function to RESET ALL LOANS FROM  tally panel @AUTHOR: SANDY12OCT13 ****************/
function resetAllTallyLoans(number) {
    confirm_box = confirm("Do you really want to reset all Loans!");
    if (confirm_box == true) {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
                document.getElementById("girviTallyPanelDiv").innerHTML = xmlhttp.responseText;
                document.getElementById('enterSerialNum').focus();
            } else {
                document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/orgrvtly.php?num=" + number, true);
        xmlhttp.send();
    }
}
/*********** eND to change function to RESET ALL LOANS FROM  tally panel @AUTHOR: SANDY12OCT13 ****************/
/******************* END to add function to RESET ALL LOANS FROM tally panel @AUTHOR: SANDY6SEP13 *******************/

function numberOfRowsofGirvi(number) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviTallyPanelDiv").innerHTML = xmlhttp.responseText;
            document.getElementById('enterSerialNum').focus();
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgpgtly.php?num=" + number, true);
    xmlhttp.send();
}

/*******************Start to add function to navigate to database backup panel @AUTHOR: SANDY10SEP13 *******************/
function getDataBackupPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("dataControlPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omppbkup.php", true);
    xmlhttp.send();
}
/*******************End to add function to navigate to database backup panel @AUTHOR: SANDY10SEP13 *******************/

/******************* Start to update checkbox state @AUTHOR: SANDY10SEP13 ***************************/
function updateCheckboxStatus(id, checked, indicfun, divName, fileName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(divName).innerHTML = xmlhttp.responseText;
            document.getElementById("updateMsgDisplayDiv").innerHTML = "<span class='textLabel16CalibriNormalGreen'>UPDATED SUCCESSFULLY!</span>";
            window.setTimeout(functionToCloseDiv, 1000);
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ommpindc.php?indicname=" + id + "&indicval=" + checked + "&indicfun=" + indicfun + "&fileName=" + fileName, true);
    xmlhttp.send();
}
/******************* End to update checkbox state @AUTHOR: SANDY10SEP13 *********************/


/******************* Start to add backup folder name in db @AUTHOR: SANDY11SEP13*******************/
//change in function name @AUTHOR: SANDY16SEP13
function resetLocationInDb(location, panelName) {
//var location = document.getElementById('backupLocation').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("updateMsgDisplayDiv").innerHTML = "<span class='textLabel16CalibriNormalGreen'>UPDATED SUCCESSFULLY!</span>";
            if (panelName == 'dbBackupLogOutPanel') {
                document.getElementById("dbBackupTextBoxDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("databaseBackupPanel").innerHTML = xmlhttp.responseText;
            }
            window.setTimeout(functionToCloseDiv, 1000);
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ommpindc.php?indicname=" + 'backupLocation' + "&indicval=" + location + "&indicfun=DEF" + "&indicDefValue=selected" + "&fileName=" + 'omppbkup' + "&panelName=" + panelName, true);
    xmlhttp.send();
}
/*********************End to add backup folder name in db @AUTHOR: SANDY11SEP13*********************/
/****************Start to add delay function @AUTHOR: SANDY10OCT13*********************************/
function functionToCloseDiv() {
    document.getElementById("updateMsgDisplayDiv").innerHTML = '';
}
/****************End to add delay function @AUTHOR: SANDY10OCT13*********************************/
/*********************Start Backup process at backend when click on logout @AUTHOR: SANDY11SEP13*******************/
/********************Start of changes in function @AUTHOR: SANDY10OCT13********************************/
function backUpWithoutBackUpWindow(panel) {
    confirm_box = confirm("Do you really want to take database backup!");
    if (confirm_box == true)
    {
        bkupLocation = encodeURIComponent(document.getElementById('dbLocationSelect').value);
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("dbBackupButton").style.visibility = "vismlhttp.responseTextible";
                document.getElementById("dbRestoreFilesDiv").innerHTML = xmlhttp.responseText;
                document.getElementById("updateMsgDisplayDiv").innerHTML = "<span class='textLabel16CalibriNormalGreen'>DATA-BASE BACKUP SUCCESSFULLY COMPLETED!</span>";
                window.setTimeout(functionToCloseDiv, 1000);
            } else {
                document.getElementById("dbBackupButton").style.visibility = "hidden";
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }

        };
        xmlhttp.open("POST", "include/php/ombkupsdv.php?location=" + bkupLocation + "&panel=" + panel, true);
        xmlhttp.send();
    }
}
/*******************End Backup process at backend when click on logout @AUTHOR: SANDY11SEP13*******************/
/********************End of changes in function @AUTHOR: SANDY10OCT13********************************/
/******************* Start to add function to take backup @AUTHOR: SANDY11SEP13 *******************/
/********************Start of changes in function @AUTHOR: SANDY10OCT13********************************/
function startToTakeBackup(bkupLocation, panel, subButtId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == 'Success') {
                document.getElementById(subButtId).innerHTML = "<span class='textLabel16CalibriNormalGreen'>DATA-BASE BACKUP SUCCESSFULLY COMPLETED!</span>";
                window.setTimeout(logout_ajax, 200);
            } else {
                document.getElementById(subButtId).innerHTML = "<span class='textLabel20CalibriNormalRed'>" + xmlhttp.responseText + "</span>";
            }
        } else {
            document.getElementById(subButtId).innerHTML = "<img src='images/loading16.gif' />";
            //document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombkupsdv.php?location=" + bkupLocation + "&panel=" + panel, true);
    xmlhttp.send();
}
/******************* End to add function to take backup @AUTHOR: SANDY11SEP13 *******************/
/********************End of changes in function @AUTHOR: SANDY10OCT13********************************/
/******************* Start to add function to show backup panel @author:SANDY12SEP13 ******************/
function showBackUpPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("logoutMessageDiv").style.visibility = "visible";
            document.getElementById("logoutMessageDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombkupdv.php", true);
    xmlhttp.send();
}
/******************* End to add function to show backup panel  @author:SANDY12SEP13 ******************/

/******************* Start to add function for prelogout process @AUTHOR: SANDY13SEP13 *******************/
function systemLogout() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("logoutMessageDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/owner/omollgout.php", true);
    xmlhttp.send();
}
/******************* end to add function for prelogout process @AUTHOR: SANDY13SEP13 *******************/

/******************* Start to add functions for backup restore process @AUTHOR: SANDY14SEP13 *******************/
function restore_content_from_selected_folder(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertRestoreContentToSelFolder;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);
}
function  alertRestoreContentToSelFolder() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//alert(xmlhttp.responseText);
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("restoreButtDiv").style.visibility = "visible";
        if (xmlhttp.responseText == 'Success')
            document.getElementById("restoreButtDiv").innerHTML = "<span class='textLabel16CalibriNormalGreen'>DATABASE RESTORE SUCCESSFULLY!</span>";
        else
            document.getElementById("restoreButtDiv").innerHTML = "<span class='textLabel20CalibriNormalRed'>DATABASE RESTORE ERROR!</span>";
    } else {
        document.getElementById("restoreButtDiv").style.visibility = "hidden";
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function changeContentFrmSelectedBackupFolder() {

    var selectedFolder = false;
    if (document.restoreLocation.zipFileName.length == null) {
        if (document.restoreLocation.zipFileName.checked == true) {
            selectedFolder = document.restoreLocation.zipFileName.value;
        }
    } else {
        for (var i = 0; i < document.restoreLocation.zipFileName.length; i++)
        {
            if (document.restoreLocation.zipFileName[i].checked == true) {
                selectedFolder = document.restoreLocation.zipFileName[i].value;
            }
        }
    }
    if (selectedFolder == false) {
        alert("Please select the correct restore file!");
    } else {
        confirm_box = confirm("Do you really want to restore database!");
        if (confirm_box == true)
        {
            var poststr = "selectedFolder=" + selectedFolder;
            restore_content_from_selected_folder('include/php/omdbrstr.php', poststr);
        }
    }
}
/******************* End to add functions for backup restore process @AUTHOR: SANDY14SEP13 *******************/

/*****************Start to add code to delete backup zip folder @AUTHOR: SANDY11OCT13*************************/
function deleteBackUpFile(backupFile, locationSelected) {
    confirm_box = confirm("Do you really want to delete this database restore file!");
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("dbRestoreFilesDiv").innerHTML = xmlhttp.responseText;
                document.getElementById("updateMsgDisplayDiv").innerHTML = "<span class='textLabel16CalibriNormalGreen'>DELETED SUCCESSFULLY!</span>";
                window.setTimeout(functionToCloseDiv, 1000);
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/ombkupdel.php?backupFile=" + backupFile + "&locationSelected=" + locationSelected, true);
        xmlhttp.send();
    }
}
/*****************End to add code to delete backup zip folder @AUTHOR: SANDY11OCT13*************************/
/***********To calculate valuation in item repair panel @AUTHOR: SANDY19SEP13 *********************/
/***********Start to change function @AUTHOR: SANDY07JAN14 *********************/
/***********Start to change function @Author: SHRI16DEC14 *********************/
var crystalValuation = 0.0; // DEFINE VARIABLE @AUTHOR: SANDY21SEP13
function calculateValuation() {


    var wtType = document.getElementById('repairItemGrossWeightType').value;
    var wt = document.getElementById('repairItemGrossWeight').value;
    var metalType = document.getElementById('itemRepMetalType').value;
    var metalRate = document.getElementById('itemRepMetalRate').value;
    //alert(metalRate);
    //var taxPercentage = document.getElementById('taxPercentage').value;
    var tunchPercent = document.getElementById('itemTunch').value;
//    alert(parseFloat(document.getElementById('repairItemFineWt').value) == 'NaN');


    var totalMetVal = 0.0;
    if (tunchPercent != 'Not Selected') {
        var fnWt = (tunchPercent * wt) / 100;
    }
//    alert(fnWt);
    document.getElementById('repairItemFineWt').value = fnWt;
    if (wt != '') {
        if (metalType == 'Gold') {
            if (wtType == 'MG') {
                document.getElementById('valuation').value = Math_round((fnWt * metalRate) / document.getElementById('gmWtInMg').value).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('valuation').value = Math_round((fnWt * metalRate) / document.getElementById('gmWtInGm').value).toFixed(2);
            } else {
                document.getElementById('valuation').value = Math_round((fnWt * metalRate * document.getElementById('gmWtInKg').value)).toFixed(2);
            }
        } else if (metalType == 'Silver') {//Start code to add condition for metal type silver @Author:SHRI26MAR15
            if (wtType == 'MG') {
                document.getElementById('valuation').value = Math_round((fnWt * metalRate) / document.getElementById('srGmWtInMg').value).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('valuation').value = Math_round((fnWt * metalRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
            } else {
                document.getElementById('valuation').value = Math_round((fnWt * metalRate * document.getElementById('srGmWtInKg').value)).toFixed(2);
            }
        } else {
            document.getElementById('valuation').value = 0;
        }//End code to add condition for metal type silver @Author:SHRI26MAR15
    }
    /*****Start code to add condition to check weight is null for repair panel @Author:SHRI25FEB15*******************/
    else if (wt == '') {
        document.getElementById('valuation').value = '';
    }
    /*****End code to add condition to check weight is null for repair panel @Author:SHRI25FEB15*******************/
    if (document.getElementById('repairCharges').value == '') {
        document.getElementById('totalCharges').value = document.getElementById('otherCharges').value;
    } else if (document.getElementById('otherCharges').value == '') {
        document.getElementById('totalCharges').value = document.getElementById('repairCharges').value;
    } else {
        var repCharge = parseFloat(document.getElementById('repairCharges').value);
        var othCharge = parseFloat(document.getElementById('otherCharges').value);
        //alert("hello"+document.getElementById('repairCharges').value+" "+document.getElementById('otherCharges').value);
        document.getElementById('totalCharges').value = Math_round(repCharge + othCharge).toFixed(2);
    }

    if (document.getElementById('totalCharges').value == '') {
        document.getElementById('totalMetalVal').value = Math_round(document.getElementById('valuation').value).toFixed(2);
    }
//    else if (document.getElementById('valuation').value == '') {
//        document.getElementById('totalMetalVal').value = Math_round(document.getElementById('totalCharges').value).toFixed(2);
//    } 
    else {
        document.getElementById('totalMetalVal').value = Math_round(parseFloat(document.getElementById('totalCharges').value) + parseFloat(document.getElementById('valuation').value)).toFixed(2);
    }
///////////////////////////////////////////////////START /////////////////////

    if (document.getElementById('slPrItemMkgCgstChrg').value == '') {
        document.getElementById('slPrItemMkgCgstChrg').value = 0;
    }

    if (document.getElementById('slPrItemMkgSgstChrg').value == '') {
        document.getElementById('slPrItemMkgSgstChrg').value = 0;
    }

    if (document.getElementById('slPrItemMkgIgstChrg').value == '') {
        document.getElementById('slPrItemMkgIgstChrg').value = 0;
    }

    if (document.getElementById('slPrItemPriMkgCgstChrg').value == '') {
        document.getElementById('slPrItemPriMkgCgstChrg').value = 0;
    }

    if (document.getElementById('slPrItemPriMkgSgstChrg').value == '') {
        document.getElementById('slPrItemPriMkgSgstChrg').value = 0;
    }

    if (document.getElementById('slPrItemPriMkgIgstChrg').value == '') {
        document.getElementById('slPrItemPriMkgIgstChrg').value = 0;
    }
    //calculate CGST for QTY * MKG CHRG
    if (document.getElementById('slPrItemQtyMkgCgstPer').value != '') {
        document.getElementById('slPrItemMkgCgstChrg').value = (parseFloat(document.getElementById('valuation').value) * (parseFloat(document.getElementById('slPrItemQtyMkgCgstPer').value) / 100)).toFixed(2);
    }
    //calculate SGST for QTY * MKG CHRG
    if (document.getElementById('slPrItemMkgSgstPer').value != '') {
        document.getElementById('slPrItemMkgSgstChrg').value = (parseFloat(document.getElementById('valuation').value) * (parseFloat(document.getElementById('slPrItemMkgSgstPer').value) / 100)).toFixed(2);
    }
    //calculate IGST for QTY * MKG CHRG
    if (document.getElementById('slPrItemMkgIgstPer').value != '') {
        document.getElementById('slPrItemMkgIgstChrg').value = (parseFloat(document.getElementById('valuation').value) * (parseFloat(document.getElementById('slPrItemMkgIgstPer').value) / 100)).toFixed(2);
    }

    //calculate CGST for QTY * Valuation
    if (document.getElementById('slPrItemPriMkgCgstPer').value != '') {

        document.getElementById('slPrItemPriMkgCgstChrg').value = (parseFloat(document.getElementById('totalCharges').value) * (parseFloat(document.getElementById('slPrItemPriMkgCgstPer').value) / 100)).toFixed(2);
    }
    //calculate SGST for QTY * Valuation
    if (document.getElementById('slPrItemPriMkgSgstPer').value != '') {
        document.getElementById('slPrItemPriMkgSgstChrg').value = (parseFloat(document.getElementById('totalCharges').value) * (parseFloat(document.getElementById('slPrItemPriMkgSgstPer').value) / 100)).toFixed(2);
    }
    //calculate IGST for QTY * Valuation
    if (document.getElementById('slPrItemPriMkgIgstPer').value != '') {
        document.getElementById('slPrItemPriMkgIgstChrg').value = (parseFloat(document.getElementById('totalCharges').value) * (parseFloat(document.getElementById('slPrItemPriMkgIgstPer').value) / 100)).toFixed(2);
    }

    if (document.getElementById('slPrItemTotTax').value == '') {
        document.getElementById('slPrItemTotTax').value = 0;
    }

    //Calculate Total Item Tax cgst+sgst+igst
    document.getElementById('slPrItemTotTax').value = (parseFloat(document.getElementById('slPrItemMkgCgstChrg').value) +
            parseFloat(document.getElementById('slPrItemMkgSgstChrg').value) +
            parseFloat(document.getElementById('slPrItemMkgIgstChrg').value) +
            parseFloat(document.getElementById('slPrItemPriMkgCgstChrg').value) +
            parseFloat(document.getElementById('slPrItemPriMkgSgstChrg').value) +
            parseFloat(document.getElementById('slPrItemPriMkgIgstChrg').value));
    if (document.getElementById('slPrItemTotTax').value == 'NaN') {
        document.getElementById('slPrItemTotTax').value = 0;
    }

//            alert(document.getElementById('finalValuation').value);
    document.getElementById('finalValuation').value = ((parseFloat(document.getElementById('totalMetalVal').value)) +
            (parseFloat(document.getElementById('slPrItemTotTax').value))).toFixed(2);
    ///////////////////////////////////////////////////END ///////////////////////
//    if (document.getElementById('taxPercentage').value != '') {
//        if (document.getElementById('totalCharges').value == '') {
//            document.getElementById('taxAmount').value = (Math_round(parseFloat(document.getElementById('taxPercentage').value) * (parseFloat(document.getElementById('valuation').value))) / 100).toFixed(2);
//            document.getElementById('totalMetalVal').value = Math_round(parseFloat(document.getElementById('valuation').value) + parseFloat(document.getElementById('taxAmount').value)).toFixed(2);
//        } else
//        if (document.getElementById('valuation').value == '') {
//            document.getElementById('taxAmount').value = Math_round(parseFloat(document.getElementById('taxPercentage').value) / 100 * (parseFloat(document.getElementById('totalCharges').value))).toFixed(2);
//            document.getElementById('totalMetalVal').value = Math_round(parseFloat(document.getElementById('totalCharges').value) + parseFloat(document.getElementById('taxAmount').value)).toFixed(2);
//        } else {
//            document.getElementById('taxAmount').value = Math_round(parseFloat(document.getElementById('taxPercentage').value) / 100 * (parseFloat(document.getElementById('totalCharges').value) + parseFloat(document.getElementById('valuation').value))).toFixed(2);
//            document.getElementById('totalMetalVal').value = Math_round(parseFloat(document.getElementById('totalCharges').value) + parseFloat(document.getElementById('valuation').value) + parseFloat(document.getElementById('taxAmount').value)).toFixed(2);
//        }
//    }

    if (document.getElementById('totalMetalVal').value == '') {
        document.getElementById('finalValuation').value = document.getElementById('addItemCryFinVal').value;
    } else if (document.getElementById('addItemCryFinVal').value == '') {

//        document.getElementById('finalValuation').value = document.getElementById('totalMetalVal').value;
    } else {
        document.getElementById('finalValuation').value = Math_round(parseFloat(document.getElementById('totalMetalVal').value)).toFixed(2)
                + (parseFloat(document.getElementById('addItemCryFinVal').value)).toFixed(2);
    }
    var totVal = parseFloat(document.getElementById('finalValuation').value).toFixed(2);
    if (document.getElementById('addItemCryFinVal').value != '') {//alert(document.getElementById('addItemCryFinVal').value);
        document.getElementById('finalValuation').value = (parseFloat(totVal) + parseFloat(document.getElementById('addItemCryFinVal').value)).toFixed(2);
    }

    if (document.getElementById('valuation').value == 'NaN') {
        document.getElementById('valuation').value = 0.0;
    }
    if (document.getElementById('totalMetalVal').value == 'NaN') {
        document.getElementById('totalMetalVal').value = 0.0;
    }
    if (document.getElementById('finalValuation').value == 'NaN') {
        document.getElementById('finalValuation').value = 0.0;
    }
    if (document.getElementById('repairItemFineWt').value == 'NaN') {
        document.getElementById('repairItemFineWt').value = 0.0;
    }

    if (document.getElementById('slPrItemMkgCgstChrg').value == 'NaN') {
        document.getElementById('slPrItemMkgCgstChrg').value = 0;
    }
    if (document.getElementById('slPrItemMkgSgstChrg').value == 'NaN') {
        document.getElementById('slPrItemMkgSgstChrg').value = 0;
    }
    if (document.getElementById('slPrItemMkgIgstChrg').value == 'NaN') {
        document.getElementById('slPrItemMkgIgstChrg').value = 0;
    }

    if (document.getElementById('slPrItemPriMkgCgstChrg').value == 'NaN') {
        document.getElementById('slPrItemPriMkgCgstChrg').value = 0;
    }
    if (document.getElementById('slPrItemPriMkgSgstChrg').value == 'NaN') {
        document.getElementById('slPrItemPriMkgSgstChrg').value = 0;
    }
    if (document.getElementById('slPrItemPriMkgIgstChrg').value == 'NaN') {
        document.getElementById('slPrItemPriMkgIgstChrg').value = 0;
    }










    return false;
}
/***********End to change function @Author: SHRI16DEC14 *********************/
/***********End to change function @AUTHOR: SANDY07JAN14*********************/
/***********To calculate valuation in item repair panel @AUTHOR: SANDY19SEP13 *******************/
/************Start code to show crystal add div @AUTHOR: SANDY17SEP13 ******************/
/************Start OF change in function @AUTHOR: SANDY19NOV13 ******************/
function showCrystalAddDivForRepair(panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (panel == 'Update') {
                document.getElementById("newCrystalsAddDiv").innerHTML = xmlhttp.responseText;
                document.getElementById('repairItemCryId1').focus(); //to set focus @AUTHOR: SANDY11JAN14
            } else {
                document.getElementById("repairItemCrystalAddDiv").innerHTML = xmlhttp.responseText;
                document.getElementById('repairItemCryId1').focus(); //to set focus @AUTHOR: SANDY11JAN14
            }

        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogrpcrdt.php?cryPanelName=" + panel, true);
    xmlhttp.send();
}
/************End OF change in function @AUTHOR: SANDY19NOV13 ******************/
/************End code to show crystal add div @AUTHOR: SANDY17SEP13 ******************/
/***********Start To calculate valuation in item repair panel @AUTHOR: SANDY21SEP13 *********************/
/************Start OF change in function @AUTHOR: SANDY19NOV13 ******************/
function calcRepairItemPriceInUpdate(crysCount, id) {
    var tot = 0.0;
    crysCount = document.getElementById('crystalEnteredUp').value;
    while (crysCount != 0) {
        var crysQuantity = parseInt(document.getElementById('repairItemCryQtyUp' + crysCount).value);
        var crysGsWt = parseFloat(document.getElementById('repairItemCryGSWUp' + crysCount).value);
        var crysGsWtType = document.getElementById('repairItemCryGSWTypeUp' + crysCount).value;
        var crysRate = parseFloat(document.getElementById('repairItemCryRateUp' + crysCount).value);
        var crysRateType = document.getElementById('repairItemCryRateTypeUp' + crysCount).value;
        var tax = document.getElementById('repairItemCryTaxUp' + crysCount).value;
        if (crysRateType == 'PP') {
            document.getElementById('repairItemCryValUp' + crysCount).value = (crysQuantity * crysRate);
        } else if (crysRateType == 'KG') {
            if (crysGsWtType == 'KG') {
                document.getElementById('repairItemCryValUp' + crysCount).value = (crysRate * crysGsWt).toFixed(2);
            } else if (crysGsWtType == 'GM') {
                document.getElementById('repairItemCryValUp' + crysCount).value = ((crysRate * 1 / 1000) * crysGsWt).toFixed(2);
            } else {
                document.getElementById('repairItemCryValUp' + crysCount).value = ((crysRate * 1 / 1000000) * crysGsWt).toFixed(2);
            }

        } else if (crysRateType == 'GM') {
            if (crysGsWtType == 'KG') {
                document.getElementById('repairItemCryValUp' + crysCount).value = ((crysRate * 1000) * crysGsWt).toFixed(2);
            } else if (crysGsWtType == 'GM') {
                document.getElementById('repairItemCryValUp' + crysCount).value = (crysRate * crysGsWt).toFixed(2);
            } else {
                document.getElementById('repairItemCryValUp' + crysCount).value = ((crysRate * 1 / 1000) * crysGsWt).toFixed(2);
            }

        } else if (crysRateType == 'MG') {

            if (crysGsWtType == 'KG') {
                document.getElementById('repairItemCryValUp' + crysCount).value = ((crysRate * 1000000) * crysGsWt).toFixed(2);
            } else if (crysGsWtType == 'GM') {
                document.getElementById('repairItemCryValUp' + crysCount).value = ((crysRate * 1000) * crysGsWt).toFixed(2);
            } else {
                document.getElementById('repairItemCryValUp' + crysCount).value = (crysRate * crysGsWt).toFixed(2);
            }
        }
        if (tax == '') {
            document.getElementById('repairItemCryFinalValUp' + crysCount).value = parseFloat(document.getElementById('repairItemCryValUp' + crysCount).value);
        } else {
            var taxAmnt = (parseFloat(tax) / 100 * parseFloat(document.getElementById('repairItemCryValUp' + crysCount).value)).toFixed(2);
            document.getElementById('repairItemCryFinalValUp' + crysCount).value = (parseFloat(document.getElementById('repairItemCryValUp' + crysCount).value) + parseFloat(taxAmnt)).toFixed(2);
        }
        tot = parseFloat(tot) + parseFloat(document.getElementById('repairItemCryFinalValUp' + crysCount).value);
        crysCount = parseInt(crysCount) - 1;
    }
    document.getElementById('totalUpdatedCryVal').value = parseFloat(tot);
    if (document.getElementById('totalNewAddedCryVal').value == '' || document.getElementById('totalNewAddedCryVal').value == 'NaN') {
        document.getElementById('totalNewAddedCryVal').value = 0;
    }
    document.getElementById('totalCrystalVal').value = Math_round(parseFloat(document.getElementById('totalNewAddedCryVal').value) + parseFloat(document.getElementById('totalUpdatedCryVal').value)).toFixed(2);
    calculateValuation();
}
/************End OF change in function @AUTHOR: SANDY19NOV13 ******************/
/************Start OF change in function @AUTHOR: SANDY19NOV13 ******************/
function calcRepairItemPrice(crysCount, id) {
    var crysQuantity = parseInt(document.getElementById('repairItemCryQty' + crysCount).value);
    var crysGsWt = parseFloat(document.getElementById('repairItemCryGSW' + crysCount).value);
    var crysGsWtType = document.getElementById('repairItemCryGSWType' + crysCount).value;
    var crysRate = parseFloat(document.getElementById('repairItemCryRate' + crysCount).value);
    var crysRateType = document.getElementById('repairItemCryRateType' + crysCount).value;
    var tax = document.getElementById('repairItemCryTax' + crysCount).value;
    if (crysRateType == 'PP') {
        document.getElementById('repairItemCryVal' + crysCount).value = (crysQuantity * crysRate);
    } else if (crysRateType == 'KG') {
        if (crysGsWtType == 'KG') {
            document.getElementById('repairItemCryVal' + crysCount).value = (crysRate * crysGsWt).toFixed(2);
        } else if (crysGsWtType == 'GM') {
            document.getElementById('repairItemCryVal' + crysCount).value = ((crysRate * 1 / 1000) * crysGsWt).toFixed(2);
        } else {
            document.getElementById('repairItemCryVal' + crysCount).value = ((crysRate * 1 / 1000000) * crysGsWt).toFixed(2);
        }

    } else if (crysRateType == 'GM') {
        if (crysGsWtType == 'KG') {
            document.getElementById('repairItemCryVal' + crysCount).value = ((crysRate * 1000) * crysGsWt).toFixed(2);
        } else if (crysGsWtType == 'GM') {
            document.getElementById('repairItemCryVal' + crysCount).value = (crysRate * crysGsWt).toFixed(2);
        } else {
            document.getElementById('repairItemCryVal' + crysCount).value = ((crysRate * 1 / 1000) * crysGsWt).toFixed(2);
        }

    } else if (crysRateType == 'MG') {

        if (crysGsWtType == 'KG') {
            document.getElementById('repairItemCryVal' + crysCount).value = ((crysRate * 1000000) * crysGsWt).toFixed(2);
        } else if (crysGsWtType == 'GM') {
            document.getElementById('repairItemCryVal' + crysCount).value = ((crysRate * 1000) * crysGsWt).toFixed(2);
        } else {
            document.getElementById('repairItemCryVal' + crysCount).value = (crysRate * crysGsWt).toFixed(2);
        }
    }

    if (tax == '') {
        document.getElementById('repairItemCryFinalVal' + crysCount).value = parseFloat(document.getElementById('repairItemCryVal' + crysCount).value);
    } else {
        var taxAmnt = (parseFloat(tax) / 100 * parseFloat(document.getElementById('repairItemCryVal' + crysCount).value)).toFixed(2);
        document.getElementById('repairItemCryFinalVal' + crysCount).value = (parseFloat(document.getElementById('repairItemCryVal' + crysCount).value) + parseFloat(taxAmnt)).toFixed(2);
    }
    setTotalCrystValField(); //change in function @AUTHOR: SANDY08JAN14
}
/***********End To calculate valuation in item repair panel @AUTHOR: SANDY21SEP13 *******************/
/************End OF change in function @AUTHOR: SANDY19NOV13 ******************/

/************Start OF change in function @AUTHOR: SANDY08JAN14 ******************/
/*****************Start to set finel crystal valuation @AUTHOR: SANDY23SEP13 ********************/
function setTotalCrystValField() {
    crysCount = document.getElementById('totalCry').value;
    document.getElementById('totalCrystalVal').value = 0.0;
    while (crysCount != 0) {
        if (document.getElementById('repairItemCryFinalVal' + crysCount).value == 'NaN' || document.getElementById('repairItemCryFinalVal' + crysCount).value == '') {
            document.getElementById('repairItemCryFinalVal' + crysCount).value = 0.0;
        }
        document.getElementById('totalCrystalVal').value = parseFloat(document.getElementById('totalCrystalVal').value) + parseFloat(document.getElementById('repairItemCryFinalVal' + crysCount).value);
        if (document.getElementById('totalMetalVal').value == '') {
            document.getElementById('finalValuation').value = document.getElementById('totalCrystalVal').value;
        } else if (document.getElementById('totalCrystalVal').value == '') {
            document.getElementById('finalValuation').value = document.getElementById('totalMetalVal').value;
        } else {
            var totalMet = parseFloat(document.getElementById('totalMetalVal').value);
            var totalCrys = parseFloat(document.getElementById('totalCrystalVal').value);
            document.getElementById('finalValuation').value = totalMet + totalCrys;
        }
        crysCount = crysCount - 1;
    }
    document.getElementById('totalNewAddedCryVal').value = document.getElementById('totalCrystalVal').value
    if (document.getElementById('totalUpdatedCryVal').value == '') {
        document.getElementById('totalUpdatedCryVal').value = 0;
    }
    document.getElementById('totalCrystalVal').value = Math_round(parseFloat(document.getElementById('totalNewAddedCryVal').value) + parseFloat(document.getElementById('totalUpdatedCryVal').value)).toFixed(2);
    calculateValuation();
}
/*****************End to set finel crystal valuation @AUTHOR: SANDY23SEP13 ********************/
/************End OF change in function @AUTHOR: SANDY08JAN14******************/
/************Start code to add more crystal add  div @AUTHOR: SANDY20SEP13 ******************/
/***********Start of change in function @AUTHOR: SANDY08JAN14*****************/
var totalCrystals = 1;
function getMoreCrystDiv(nextCount, panel) {
    totalCrystals = totalCrystals + 1;
    document.getElementById('totalCry').value = totalCrystals;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById('addCrystalDiv' + totalCrystals).innerHTML = xmlhttp.responseText;
            //to set focus @AUTHOR: SANDY23SEP13
            document.getElementById('repairItemCryId' + totalCrystals).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogrpcrdt.php?nextCount=" + totalCrystals + "&cryPanelName=" + panel, true);
    xmlhttp.send();
}
/***********End of change in function @AUTHOR: SANDY08JAN14*****************/
/************End code to add more crystal add div @AUTHOR: SANDY20SEP13 ******************/
/************Start code to close crystal div @AUTHOR: SANDY17SEP13 ******************/
/************Start of changes in code to close crystal div @AUTHOR: SANDY21SEP13 ******************/
function closeCrystDiv(crystalCount) {
    var next = parseInt(crystalCount) + 1;
    if (document.getElementById('repairItemCryFinalVal' + crystalCount).value == '') {
        document.getElementById('repairItemCryFinalVal' + crystalCount).value = 0.0;
    }
    if (document.getElementById('totalCrystalVal').value == '') {
        document.getElementById('totalCrystalVal').value = 0.0;
    }
    if (document.getElementById('finalValuation').value == '') {
        document.getElementById('finalValuation').value = 0.0;
    }
    document.getElementById('totalCrystalVal').value = parseFloat(document.getElementById('totalCrystalVal').value) - parseFloat(document.getElementById('repairItemCryFinalVal' + crystalCount).value);
    document.getElementById('finalValuation').value = parseFloat(document.getElementById('finalValuation').value) - parseFloat(document.getElementById('repairItemCryFinalVal' + crystalCount).value);
    document.getElementById('repairItemCry' + crystalCount).innerHTML = "";
}
/************End of changes in code to close crystal div @AUTHOR: SANDY21SEP13 ******************/
/************End code to close crystal div @AUTHOR: SANDY17SEP13 ******************/

/*******************Start to change function to pass more parameters @AUTHOR: SANDY18NOV13************/
/*******************Start to navigate to REPAIR ITEM payment panel @AUTHOR:SANDY19SEP13***********/
function getRepairItemPaymentDiv(root, custId, suppId, accId, firmId, preInvoiceNo, invoiceNo, goldTotalGWeight, goldTotalGWeightType, silverTotalGWeight, silverTotalWeightType, crystalFinalVal, totalMetalVal, totalFinalValuation, firmId,
        totalTaxChrg, totalFinalCharges, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
            document.getElementById("itmRepPayMetalType1").focus(); //Change in id @AUTHOR: SANDY11JAN14 
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + root + "/include/php/ogirpydv.php?suppId=" + suppId + "&custId=" + custId + "&newPreInvoiceNo=" + preInvoiceNo + "&newInvoiceNo=" + invoiceNo +
            "&goldTotalWeight=" + goldTotalGWeight + "&goldTotalWeightType=" + goldTotalGWeightType + "&silverTotalWeight=" + silverTotalGWeight + "&silverTotalWeightType=" + silverTotalWeightType +
            "&crystalFinalVal=" + crystalFinalVal + "&firmId=" + firmId + "&totalMetalVal=" + totalMetalVal + "&totalFinalValuation=" + totalFinalValuation +
            "&totalFinalCharges=" + totalFinalCharges + "&totalTaxChrg=" + totalTaxChrg + "&panel=" + panel + "&accId=" + accId + "&firmId=" + firmId, true);
    xmlhttp.send();
}
/*******************End to navigate to REPAIR ITEM payment panel @AUTHOR:SANDY19SEP13***********/
/*******************End to change function to pass more parameters @AUTHOR: SANDY18NOV13************/
/**************Start of Changes in function @AUTHOR: SANDY7NOV13********************************/
/**************Start To calculate valuation of raw gold in payment panel @AUTHOR: SANDY20SEP13 *********************/
function calcRawGoldValuation() {

    var itmRepPayTotalWeight1 = document.getElementById('itmRepPayMetalTotWeight1').value;
    var itmRepPayTotalWeightType1 = document.getElementById('itmRepPayMetalTotWeightType1').value;
    var itmRepPayMetalRate1 = document.getElementById('itmRepPayMetalRate1').value;
    var itmRepPayMetalTunch1 = document.getElementById('itmRepPayMetalTunch1').value;
    var itmRepPayMetalDueWeightType1 = document.getElementById('itmRepPayTotalGoldWGTType').value;
    var goldWeight = (itmRepPayTotalWeight1 * itmRepPayMetalTunch1) / 100;
    document.getElementById('itmRepPayMetalFineWeight1').value = goldWeight;
    if (itmRepPayTotalWeightType1 == 'KG') {
        document.getElementById('itmRepPayMetalValuation1').value = Math_round((goldWeight * itmRepPayMetalRate1) * 100).toFixed(2);
    } else if (itmRepPayTotalWeightType1 == 'GM') {
        document.getElementById('itmRepPayMetalValuation1').value = Math_round((goldWeight * itmRepPayMetalRate1) / 10).toFixed(2);
    } else if (itmRepPayTotalWeightType1 == 'MG') {
        document.getElementById('itmRepPayMetalValuation1').value = Math_round((goldWeight * itmRepPayMetalRate1) / 10000).toFixed(2);
    }
    if (itmRepPayMetalDueWeightType1 == 'KG') {
        if (itmRepPayTotalWeightType1 == 'KG') {
            document.getElementById('itmRepPayMetalDueWeight1').value = parseFloat(document.getElementById('itmRepPayTotalGoldWt').value - goldWeight);
        } else if (itmRepPayTotalWeightType1 == 'GM') {
            document.getElementById('itmRepPayMetalDueWeight1').value = parseFloat(document.getElementById('itmRepPayTotalGoldWt').value) - (goldWeight / 1000);
        } else if (itmRepPayTotalWeightType1 == 'MG') {
            document.getElementById('itmRepPayMetalDueWeight1').value = parseFloat(document.getElementById('itmRepPayTotalGoldWt').value) - (goldWeight / (1000 * 1000));
        }
    } else if (itmRepPayMetalDueWeightType1 == 'GM') {
        if (itmRepPayTotalWeightType1 == 'KG') {
            document.getElementById('itmRepPayMetalDueWeight1').value = parseFloat(document.getElementById('itmRepPayTotalGoldWt').value) - (goldWeight * 1000);
        } else if (itmRepPayTotalWeightType1 == 'GM') {
            document.getElementById('itmRepPayMetalDueWeight1').value = parseFloat(document.getElementById('itmRepPayTotalGoldWt').value) - goldWeight;
        } else if (itmRepPayTotalWeightType1 == 'MG') {
            document.getElementById('itmRepPayMetalDueWeight1').value = parseFloat(document.getElementById('itmRepPayTotalGoldWt').value) - (goldWeight / (1000));
        }
    } else if (itmRepPayMetalDueWeightType1 == 'MG') {
        if (itmRepPayTotalWeightType1 == 'KG') {
            document.getElementById('itmRepPayMetalDueWeight1').value = parseFloat(document.getElementById('itmRepPayTotalGoldWt').value) - (goldWeight * 1000 * 1000);
        } else if (itmRepPayTotalWeightType1 == 'GM') {
            document.getElementById('itmRepPayMetalDueWeight1').value = parseFloat(document.getElementById('itmRepPayTotalGoldWt').value) - (goldWeight * 1000);
        } else if (itmRepPayTotalWeightType1 == 'MG') {
            document.getElementById('itmRepPayMetalDueWeight1').value = parseFloat(document.getElementById('itmRepPayTotalGoldWt').value) - goldWeight;
        }
    }
    document.getElementById('itmRepstockPayGoldWghtBal').value = document.getElementById('itmRepPayMetalDueWeight1').value + document.getElementById('itmRepPayMetalDueWeightType1').value;
    var metalValuation1 = document.getElementById('itmRepPayMetalValuation1').value;
    var metalValuation2 = document.getElementById('itmRepPayMetalValuation2').value;
    if (metalValuation1 == '') {
        metalValuation1 = 0;
    }
    if (metalValuation2 == '') {
        metalValuation2 = 0;
    }


    document.getElementById('itmRepstockPayTotalAmtRec').value = Math_round(parseFloat(metalValuation1) + parseFloat(metalValuation2)).toFixed(2);
    document.getElementById('itmRepstockPayTotalAmtBal').value = Math_round(parseFloat(document.getElementById('itmRepstockPayTotalAmt').value) - parseFloat(document.getElementById('itmRepstockPayTotalAmtRec').value)).toFixed(2);
    document.getElementById('itmRepPayTotalAmtBalHidden').value = Math_round(parseFloat(document.getElementById('itmRepstockPayTotalAmt').value) - parseFloat(document.getElementById('itmRepstockPayTotalAmtRec').value)).toFixed(2);
    var itmRepPayTotalAmtBalHidden = document.getElementById('itmRepPayTotalAmtBalHidden').value;
    if (itmRepPayTotalAmtBalHidden == null || itmRepPayTotalAmtBalHidden == '') {
        document.getElementById('itmRepPayTotalAmtBalHidden').value = document.getElementById('itmRepstockPayTotalAmtBal').value;
    }
    var stockPayTotalAmtBal = document.getElementById('itmRepPayTotalAmtBalHidden').value;
    var itmRepTotalCashPaidAmt = document.getElementById('itmRepstockPayCashAmount').value;
    if (itmRepTotalCashPaidAmt == null || itmRepTotalCashPaidAmt == '') {
        itmRepTotalCashPaidAmt = 0;
    }
    document.getElementById('cashPaidLabel').innerHTML = (parseFloat(itmRepTotalCashPaidAmt)).toFixed(2);
    var itmRepPayDiscountAmt = document.getElementById('itmRepstockPayDiscount').value;
    if (itmRepPayDiscountAmt == null || itmRepPayDiscountAmt == '') {
        itmRepPayDiscountAmt = 0;
    }
    document.getElementById('discountLabel').innerHTML = (parseFloat(itmRepPayDiscountAmt)).toFixed(2);
    document.getElementById('itmRepstockPayTotalAmtBal').value = (parseFloat(stockPayTotalAmtBal) - parseFloat(itmRepTotalCashPaidAmt)).toFixed(3) - parseFloat(itmRepPayDiscountAmt).toFixed(3);
    //start to add new lines in function @AUTHOR: SANDY23SEP13 ***/
    document.getElementById('totalMetValLabel').innerHTML = document.getElementById('itmRepstockPayTotalAmtRec').value;
    document.getElementById('totalAmntBalanceLabel').innerHTML = (parseFloat(document.getElementById('itmRepstockPayTotalAmtBal').value)).toFixed(2);
    //end to add new lines in function @AUTHOR: SANDY23SEP13 ***/
    return false;
}
/**************End To calculate valuation of raw gold in payment panel @AUTHOR: SANDY20SEP13 *********************/
/**************End of Changes in function @AUTHOR: SANDY7NOV13********************************/

/**************Start To calculate valuation of raw silver in payment panel @AUTHOR: SANDY20SEP13 *********************/
/**************Start of Changes in function @AUTHOR: SANDY7NOV13********************************/
function calcRawSilverValuation() {
    var itmRepPayTotalWeight2 = document.getElementById('itmRepPayMetalTotWeight2').value;
    var itmRepPayTotalWeightType2 = document.getElementById('itmRepPayMetalTotWeightType2').value;
    var itmRepPayMetalRate2 = document.getElementById('itmRepPayMetalRate2').value;
    var itmRepPayMetalTunch2 = document.getElementById('itmRepPayMetalTunch2').value;
    var itmRepPayMetalDueWeightType2 = document.getElementById('itmRepPayTotalSilverWtType').value;
    var silverWeight = (itmRepPayTotalWeight2 * itmRepPayMetalTunch2) / 100;
    document.getElementById('itmRepPayMetalFineWeight2').value = silverWeight;
    if (itmRepPayTotalWeightType2 == 'KG') {
        document.getElementById('itmRepPayMetalValuation2').value = Math_round(silverWeight * itmRepPayMetalRate2).toFixed(2);
    } else if (itmRepPayTotalWeightType2 == 'GM') {
        document.getElementById('itmRepPayMetalValuation2').value = Math_round((silverWeight * itmRepPayMetalRate2) / 1000).toFixed(2);
    } else if (itmRepPayTotalWeightType2 == 'MG') {
        document.getElementById('itmRepPayMetalValuation2').value = Math_round((silverWeight * itmRepPayMetalRate2) / (1000 * 1000)).toFixed(2);
    }

    if (itmRepPayMetalDueWeightType2 == 'KG') {
        if (itmRepPayTotalWeightType2 == 'KG') {
            document.getElementById('itmRepPayMetalDueWeight2').value = parseFloat(document.getElementById('itmRepPayTotalSilverWt').value) - silverWeight;
        } else if (itmRepPayTotalWeightType2 == 'GM') {
            document.getElementById('itmRepPayMetalDueWeight2').value = parseFloat(document.getElementById('itmRepPayTotalSilverWt').value) - (silverWeight / 1000);
        } else if (itmRepPayTotalWeightType2 == 'MG') {
            document.getElementById('itmRepPayMetalDueWeight2').value = parseFloat(document.getElementById('itmRepPayTotalSilverWt').value) - (silverWeight / (1000 * 1000));
        }
    } else if (itmRepPayMetalDueWeightType2 == 'GM') {
        if (itmRepPayTotalWeightType2 == 'KG') {
            document.getElementById('itmRepPayMetalDueWeight2').value = parseFloat(document.getElementById('itmRepPayTotalSilverWt').value) - (silverWeight * 1000);
        } else if (itmRepPayTotalWeightType2 == 'GM') {
            document.getElementById('itmRepPayMetalDueWeight2').value = parseFloat(document.getElementById('itmRepPayTotalSilverWt').value) - (silverWeight);
        } else if (itmRepPayTotalWeightType2 == 'MG') {
            document.getElementById('itmRepPayMetalDueWeight2').value = parseFloat(document.getElementById('itmRepPayTotalSilverWt').value) - (silverWeight / (1000));
        }
    } else if (itmRepPayMetalDueWeightType2 == 'MG') {
        if (itmRepPayTotalWeightType2 == 'KG') {
            document.getElementById('itmRepPayMetalDueWeight2').value = parseFloat(document.getElementById('itmRepPayTotalSilverWt').value) - (silverWeight * 1000 * 1000);
        } else if (itmRepPayTotalWeightType2 == 'GM') {
            document.getElementById('itmRepPayMetalDueWeight2').value = parseFloat(document.getElementById('itmRepPayTotalSilverWt').value) - (silverWeight * 1000);
        } else if (itmRepPayTotalWeightType2 == 'MG') {
            document.getElementById('itmRepPayMetalDueWeight2').value = parseFloat(document.getElementById('itmRepPayTotalSilverWt').value) - (silverWeight);
        }
    }

    document.getElementById('itmRepstockPaySilverWghtBal').value = document.getElementById('itmRepPayMetalDueWeight2').value + document.getElementById('itmRepPayMetalDueWeightType2').value;
    var metalValuation1 = document.getElementById('itmRepPayMetalValuation1').value;
    var metalValuation2 = document.getElementById('itmRepPayMetalValuation2').value;
    if (metalValuation1 == '') {
        metalValuation1 = 0;
    }
    if (metalValuation2 == '') {
        metalValuation2 = 0;
    }
    document.getElementById('itmRepstockPayTotalAmtRec').value = Math_round(parseFloat(metalValuation1) + parseFloat(metalValuation2)).toFixed(2);
    document.getElementById('itmRepstockPayTotalAmtBal').value = Math_round(parseFloat(document.getElementById('itmRepstockPayTotalAmt').value) - parseFloat(document.getElementById('itmRepstockPayTotalAmtRec').value)).toFixed(2);
    document.getElementById('itmRepPayTotalAmtBalHidden').value = Math_round(parseFloat(document.getElementById('itmRepstockPayTotalAmt').value) - parseFloat(document.getElementById('itmRepstockPayTotalAmtRec').value)).toFixed(2);
    var itmRepPayTotalAmtBalHidden = document.getElementById('itmRepPayTotalAmtBalHidden').value;
    if (itmRepPayTotalAmtBalHidden == null || itmRepPayTotalAmtBalHidden == '') {
        document.getElementById('itmRepPayTotalAmtBalHidden').value = document.getElementById('itmRepstockPayTotalAmtBal').value;
    }
    var stockPayTotalAmtBal = document.getElementById('itmRepPayTotalAmtBalHidden').value;
    var itmRepTotalCashPaidAmt = document.getElementById('itmRepstockPayCashAmount').value;
    if (itmRepTotalCashPaidAmt == null || itmRepTotalCashPaidAmt == '') {
        itmRepTotalCashPaidAmt = 0;
    }
    document.getElementById('cashPaidLabel').innerHTML = (parseFloat(itmRepTotalCashPaidAmt)).toFixed(2);
    var itmRepPayDiscountAmt = document.getElementById('itmRepstockPayDiscount').value;
    if (itmRepPayDiscountAmt == null || itmRepPayDiscountAmt == '') {
        itmRepPayDiscountAmt = 0;
    }
    document.getElementById('discountLabel').innerHTML = (parseFloat(itmRepPayDiscountAmt)).toFixed(2);
    document.getElementById('itmRepstockPayTotalAmtBal').value = (parseFloat(stockPayTotalAmtBal) - parseFloat(itmRepTotalCashPaidAmt)).toFixed(3) - parseFloat(itmRepPayDiscountAmt).toFixed(3);
    //start to add new lines in function @AUTHOR: SANDY23SEP13 ***/
    document.getElementById('totalMetValLabel').innerHTML = document.getElementById('itmRepstockPayTotalAmtRec').value;
    document.getElementById('totalAmntBalanceLabel').innerHTML = (parseFloat(document.getElementById('itmRepstockPayTotalAmtBal').value)).toFixed(2);
    //end to add new lines in function @AUTHOR: SANDY23SEP13 ***/
    return false;
}
/**************End of Changes in function @AUTHOR: SANDY7NOV13********************************/
/**************End To calculate valuation of raw silver in payment panel @AUTHOR: SANDY20SEP13 *********************/

/********************Start to add invoice for repair item @AUTHOR: SANDY20SEP13 *********************/
function  add_invoiceInItmRep(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertAddInvoiceInItemRep;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertAddInvoiceInItemRep() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function validateItemRepairInvoice()
{
    if (validateEmptyField(document.getElementById("itmRepPayInvoiceNo").value, "Invoice Not Available For Payment!") == false) {
        document.getElementById("itmRepPayInvoiceNo").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("itmRepstockPayTotalAmtBal").value, "Please select Total Amount Balance!") == false) {   //CODE TO CHANGE ID  @AUTHOR: PRIYA31
        document.getElementById("itmRepstockPayTotalAmtBal").focus();
        return false;
    }
    return true;
}
/************Start of change in function @AUTHOR: SANDY18NOV13 **********/
/************Start of change in function @AUTHOR: SANDY9NOV13 **********/
function addRepairItmInvoice(panel, accId, firmId) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("subButton").style.visibility = "hidden";
    if (validateItemRepairInvoice()) {
        var poststr = "custId=" + encodeURIComponent(document.getElementById("custId").value)
                + "&firmId=" + encodeURIComponent(document.getElementById("firmId").value)
                + "&panel=" + encodeURIComponent(panel)
                + "&accId=" + encodeURIComponent(accId)
                + "&firmId=" + encodeURIComponent(firmId)
                + "&omgNewSuppId=" + encodeURIComponent(document.getElementById("newSuppId").value)
                + "&omgItmRepPayMetalType1=" + encodeURIComponent(document.getElementById("itmRepPayMetalType1").value)
                + "&omgItmRepPreInvoiceNo=" + encodeURIComponent(document.getElementById("itmRepPayPreInvoiceNo").value)
                + "&omgItmRepInvoiceNo=" + encodeURIComponent(document.getElementById("itmRepPayInvoiceNo").value)
                + "&omgItmRepPayRawGoldId=" + encodeURIComponent(document.getElementById("itmRepPayRawGoldId").value)
                + "&omgItmRepPayFirm1=" + encodeURIComponent(document.getElementById("itemRepairPayFirm1").value)
                + "&omgItmRepPaySelAccountId1=" + encodeURIComponent(document.getElementById("itmRepItemPaySelAccountId1").value)
                + "&omgItmRepPayMetalTotWeight1=" + encodeURIComponent(document.getElementById("itmRepPayMetalTotWeight1").value)
                + "&omgItmRepPayMetalTotWeightType1=" + encodeURIComponent(document.getElementById("itmRepPayMetalTotWeightType1").value)
                + "&omgItmRepPayMetalTunch1=" + encodeURIComponent(document.getElementById("itmRepPayMetalTunch1").value)
                + "&omgItmRepPayMetalFineWeight1=" + encodeURIComponent(document.getElementById("itmRepPayMetalFineWeight1").value)
                + "&omgItmRepPayMetalRate1=" + encodeURIComponent(document.getElementById("itmRepPayMetalRate1").value)
                + "&omgItmRepPayMetalValuation1=" + encodeURIComponent(document.getElementById("itmRepPayMetalValuation1").value)
                + "&omgItmRepPayMetalDueWeight1=" + encodeURIComponent(document.getElementById("itmRepPayMetalDueWeight1").value)
                + "&omgItmRepPayMetalDueWeightType1=" + encodeURIComponent(document.getElementById("itmRepPayMetalDueWeightType1").value)
                + "&omgItmRepPayMetalType2=" + encodeURIComponent(document.getElementById("itmRepPayMetalType2").value)
                + "&omgItmRepPayRawSilverId=" + encodeURIComponent(document.getElementById("itmRepPayRawSilverId").value)
                + "&omgItmRepPayFirm2=" + encodeURIComponent(document.getElementById("itemRepairPayFirm2").value)
                + "&omgItmRepPaySelAccountId2=" + encodeURIComponent(document.getElementById("itmRepItemPaySelAccountId2").value)
                + "&omgItmRepPayMetalTotWeight2=" + encodeURIComponent(document.getElementById("itmRepPayMetalTotWeight2").value)
                + "&omgItmRepPayMetalTotWeightType2=" + encodeURIComponent(document.getElementById("itmRepPayMetalTotWeightType2").value)
                + "&omgItmRepPayMetalTunch2=" + encodeURIComponent(document.getElementById("itmRepPayMetalTunch2").value)
                + "&omgItmRepPayMetalFineWeight2=" + encodeURIComponent(document.getElementById("itmRepPayMetalFineWeight2").value)
                + "&omgItmRepPayMetalRate2=" + encodeURIComponent(document.getElementById("itmRepPayMetalRate2").value)
                + "&omgItmRepPayMetalValuation2=" + encodeURIComponent(document.getElementById("itmRepPayMetalValuation2").value)
                + "&omgItmRepPayMetalDueWeight2=" + encodeURIComponent(document.getElementById("itmRepPayMetalDueWeight2").value)
                + "&omgItmRepPayMetalDueWeightType2=" + encodeURIComponent(document.getElementById("itmRepPayMetalDueWeightType2").value)
                + "&omgItmRepPayGoldWtBal=" + encodeURIComponent(document.getElementById("itmRepstockPayGoldWghtBal").value)
                + "&omgItmRepPaySilverWtBal=" + encodeURIComponent(document.getElementById("itmRepstockPaySilverWghtBal").value)
                + "&omgItmRepPayTotalAmt=" + encodeURIComponent(document.getElementById("itmRepstockPayTotalAmt").value)
                + "&omgItmRepPayTotalAmtRec=" + encodeURIComponent(document.getElementById("itmRepstockPayTotalAmtRec").value)
                + "&omgItmRepStockPaySelAccountId=" + encodeURIComponent(document.getElementById("itmRepStockPaySelAccountId").value)
                + "&omgItmRepPayCashAmount=" + encodeURIComponent(document.getElementById("itmRepstockPayCashAmount").value)
                + "&omgItmRepPayDiscount=" + encodeURIComponent(document.getElementById("itmRepstockPayDiscount").value)
                + "&omgItmRepPayCardType=" + encodeURIComponent(document.getElementById("itmRepPayCardType").value)
                + "&omgItmRepPayCardNo=" + encodeURIComponent(document.getElementById("itmRepPayCardNo").value)
                + "&omgItmRepPayOtherInfo=" + encodeURIComponent(document.getElementById("itmRepInvoiceOtherInfo").value)
                + "&omgItmRepgdWeight1=" + encodeURIComponent(document.getElementById("itmRepPayTotalGoldWt").value)
                + "&omgItmRepgdWeightType1=" + encodeURIComponent(document.getElementById("itmRepPayTotalGoldWGTType").value)
                + "&omgItmRepsrWeight2=" + encodeURIComponent(document.getElementById("itmRepPayTotalSilverWt").value)
                + "&omgItmRepsrWeightType2=" + encodeURIComponent(document.getElementById("itmRepPayTotalSilverWtType").value)
                + "&omgItmRepstockPayTotalAmtBal=" + encodeURIComponent(document.getElementById("itmRepstockPayTotalAmtBal").value);
        add_invoiceInItmRep("include/php/ogirpyad.php", poststr);
        return true;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("subButton").style.visibility = "visible";
        return false;
    }
}
/************End of change in function @AUTHOR: SANDY9NOV13 **********/
/************End of change in function @AUTHOR: SANDY18NOV13 **********/
/********************End to add invoice for repair item @AUTHOR: SANDY20SEP13 *********************/
/********************Start to add invoice for raw metal @AUTHOR: SANDY27SEP13 *********************/
function validateAddRawStockForm() {
    if (validateEmptyField(document.getElementById("rawMetstockPayTotalAmtBal").value, "Please enter value in Total Amount Balance Field!") == false ||
            validateNumWithDot(document.getElementById("rawMetstockPayTotalAmtBal").value, "Accept only numeric value!") == false) {
        document.getElementById("rawMetstockPayTotalAmtBal").focus();
        return false;
    }
    return true;
}
/********************Start to add changes in function @AUTHOR: SANDY4OCT13*********************
 function  add_invoiceInRawMetalInv(url, parameters) {
 
 loadXMLDoc();
 
 xmlhttp.onreadystatechange = alertAddInvoiceInRawMetalInv;
 
 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader('Content-Type',
 'application/x-www-form-urlencoded');
 xmlhttp.setRequestHeader("Content-length", parameters.length);
 xmlhttp.setRequestHeader("Connection", "close");
 xmlhttp.send(parameters);
 
 }
 function alertAddInvoiceInRawMetalInv() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
 document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText; //change in div name @AUTHOR: SANDY14OCT13
 }
 else {
 document.getElementById("main_ajax_loading_div").style.visibility = "visible";
 }
 }*** comment by @AUTHOR:SANDY17OCT13****
 
 
 function addRawMetalInvoice(date, goldGsWt, goldGsWtTp, silverGsWt, silverGsWtTp, goldNtWt, goldNtWtTp, goldFnWt, goldFnWtTp, silverNtWt, silverNtWtTp, silverFnWt, silverFnWtTp, suppId, action) {
 confirm_box = confirm("This amount will get Added to Udhaar\n\nDo you really want to continue!");
 if (confirm_box == true){
 
 loadXMLDoc();
 xmlhttp.onreadystatechange = function() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
 document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
 }
 else {
 document.getElementById("main_ajax_loading_div").style.visibility = "visible";
 }
 };
 xmlhttp.open("POST", "include/php/ogrwpyad.php?omgNewSuppId=" +suppId + "&rawMetalAddedDate=" +date + "&goldTotNtWt=" + goldNtWt+ "&goldTotNtWtTp=" + goldNtWtTp
 + "&goldTotFnWt=" +goldFnWt + "&goldTotFnWtTp=" + goldFnWtTp + "&silverTotNtWt=" + silverNtWt + "&silverTotNtWtTp=" +silverNtWtTp+ "&silverTotFnWt=" + silverFnWt + "&silverTotFnWtTp=" + silverFnWtTp
 + "&goldGsWt=" +goldGsWt + "&goldGsWtTp=" + goldGsWtTp + "&silverGsWt=" + silverGsWt+ "&silverGsWtTp=" +silverGsWtTp + "&action=" + action , true);
 xmlhttp.send();
 }
 }
 
 /********************End to add changes in function @AUTHOR: SANDY4OCT13 ********************
 /********************End to add invoice for repair item @AUTHOR: SANDY27SEP13 *********************/

/*****************Start to show add new repair item panel @AUTHOR: SANDY23SEP13 ******************/
function showAddRepairItemPanel(custId) {
//    alert('custId='+custId);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemRepairDiv").innerHTML = xmlhttp.responseText;
            document.getElementById('itemRepDOBDay').focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogrpaddt.php?custId=" + custId, true);
    xmlhttp.send();
}
/*****************End to show add new repair item panel @AUTHOR: SANDY23SEP13 ******************/
/*****************Start to show list of repair item @AUTHOR: SANDY23SEP13 ******************/
function showRepairListPanel(custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemRepairDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogrpilst.php?custId=" + custId, true);
    xmlhttp.send();
}
/*****************End to show list of repair item @AUTHOR: SANDY23SEP13 ******************/
/*****************Start to delete item from list of repair item @AUTHOR: SANDY23SEP13 ******************/
/*****************Start to change div in function @AUTHOR: SANDY9NOV13******************/
function deleteRepairedItem(newItemPreId, newItemPostId, custId, panelName, pageNum, rowsPerPage) {
    confirm_box = confirm(deleteAlertMess + "\nDo you really want to delete this Item?");
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
            } else {

                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/ogrpdelt.php?newItemPreId=" + newItemPreId + "&newItemPostId=" + newItemPostId + "&custId=" + custId + "&panelName=" + panelName + "&pageNum=" + pageNum + "&rowsPerPage=" + rowsPerPage, true);
        xmlhttp.send();
    }
}
/*****************End to change div in function @AUTHOR: SANDY9NOV13******************/
/*****************End to delete item from list of repair item @AUTHOR: SANDY23SEP13 ******************/

/*****************Start to pass no of rows value to implement repair item @AUTHOR: SANDY23SEP13 ******************/
function showEnteredNoOfRows(rowsPerPage, pageNum, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("repairedItemListDiv").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("POST", "include/php/ogrpilst.php?page=" + pageNum + "&panel=" + panelName + "&rowsPerPage=" + rowsPerPage, true);
    xmlhttp.send();
}
/*****************End to pass no of rows value to implement repair item @AUTHOR: SANDY23SEP13 ******************/
/*****************Start to implement paging concept @AUTHOR: SANDY23SEP13 ******************/
/******************Start to add code to add page navigation in raw metal List@AUTHOR: SANDY28SEP13************/
/*****************Start OF Changes in function @AUTHOR: SANDY17OCT13********************************/
/*****************Start OF Changes in function @AUTHOR: SANDY19DEC13********************************/
/***************Start of change in function to implement paging in lender lon info panel @AUTHOR: SANDY27NOV13***********/
function getPage(pageNo, rowsPerPage, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {

            if (panel == 'CurrentRawStockList' || panel == 'PurchaseRawStockList') {
                document.getElementById("rawMetalStockListDiv").innerHTML = xmlhttp.responseText;
            }
            if (panel == 'LOANINFO') {
                document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
            }
            if (panel == 'RELEASEDLOANINFO') {
                document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("repairedItemListDiv").innerHTML = xmlhttp.responseText;
        }
    };
    if (panel == 'CurrentRawStockList' || panel == 'PurchaseRawStockList') {
        xmlhttp.open("POST", "include/php/ogrmlist.php?page=" + pageNo + "&listPanel=" + panel + "&rowsPerPage=" + rowsPerPage, true);
    } else if (panel == 'LOANINFO') {
        xmlhttp.open("POST", "include/php/ormllndt.php?page=" + pageNo + "&mlId=" + rowsPerPage, true);
    } else if (panel == 'RELEASEDLOANINFO') {
        xmlhttp.open("POST", "include/php/orrellns.php?page=" + pageNo + "&mlId=" + rowsPerPage, true);
    } else {
        xmlhttp.open("POST", "include/php/ogrpilst.php?page=" + pageNo + "&panel=" + panel + "&rowsPerPage=" + rowsPerPage, true);
    }
    xmlhttp.send();
}
/***************End of change in function to implement paging in lender lon info panel @AUTHOR: SANDY27NOV13***********/
/*****************End OF Changes in function @AUTHOR: SANDY19DEC13********************************/
/*****************End OF Changes in function @AUTHOR: SANDY17OCT13********************************/
/******************End to add code to add page navigation in raw metal List@AUTHOR: SANDY28SEP13************/
/*****************End to implement paging concept @AUTHOR: SANDY23SEP13 ******************/

/*******************Start To update repaired Item @AUTHOR: SANDY23SEP13 ***************/
/****************Start to change function to pass custid @AUTHOR: SANDY9NOV13 ********/
function updateRepairItem(preItemId, PostItemId, custId, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemRepairDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogrpaddt.php?preId=" + preItemId + "&postId=" + PostItemId + "&panel=" + panel + "&custId=" + custId, true);
    xmlhttp.send();
}
/****************End to change function to pass custid @AUTHOR: SANDY9NOV13 ********/
/*******************End To update repaired Item @AUTHOR: SANDY23SEP13 ***************/
/*******************Start of function to show Raw Metal Add Panel @AUTHOR: SANDY23SEP13 ***************/
/*******************Start code to change filename @Author: PRIYA18JAN14 ***************/
/*******************Start code to change filename @Author: OMMODTAG_SHE12JAN16 ***************/
function showRawMetalAddPanel(panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText; //CHANGE IN DIV @AUTHOR: SANDY11NOV13
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'RawStock') {
        xmlhttp.open("POST", "include/php/ogrwiadv.php?simButton=similirItem", true);
    } else if (panel == 'RawMetalList') {
        xmlhttp.open("POST", "include/php/ogrmcslt.php", true);
    }
    xmlhttp.send();
}
/*******************End code to change filename @Author: OMMODTAG_SHE12JAN16 ***************/
/*******************End code to change filename @Author: PRIYA18JAN14 ***************/
/*******************End of function to show Raw Metal Add Panel @AUTHOR: SANDY23SEP13 ***************/
/*******Start to add function to display add raw stone panel  @AUTHOR: SANDY22OCT13******************/
function showRawStoneAddPanel(panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText; //change in div name @AUTHOR: SANDY25SEP13
            document.getElementById('addRawStoneDOBDay').focus();
            document.getElementById('formName').innerHTML = panel;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogiarsdv.php", true);
    xmlhttp.send();
}
/*******End to add function to display add raw stone panel  @AUTHOR: SANDY22OCT13******************/
/****Start to add function to calculate raw metal valuation @AUTHOR: SANDY24SEP13 **********/
/*********sTART OF Changes in function calculateFinalVal() @AUTHOR: SANDY16OCT13****************************/
/*********Start code to delete function and add in calculation file @Author:PRIYA18JAN14*************/
//function  calculateFinalVal() {
//    var gsWt = parseFloat(document.getElementById('addRawStockItemGrossWeight').value);
//    var gsWtTp = document.getElementById('addRawStockItemGrossWeightType').value;
//    var tax = document.getElementById('addRawStockItemTax').value;
//    var metalRate = parseFloat(document.getElementById('addRawStockItemMetalRate').value);
//    var metalType = document.getElementById('addRawStockItemMetal').value;
//    if (document.getElementById('addRawStockItemTunch').value != 'NotSelected') {
//        document.getElementById('addRawStockFineWeight').value = (parseFloat(document.getElementById('addRawStockItemTunch').value) * gsWt) / 100;
//    }
//    else {
//        document.getElementById('addRawStockItemTunch').value = 0.0;
//        document.getElementById('addRawStockFineWeight').value = 0.0;
//    }
//    var fineWt = parseFloat(document.getElementById('addRawStockFineWeight').value);
//    if (gsWt != '') {
//        if (metalType == 'Gold') {
//            if (gsWtTp == 'MG') {
//                document.getElementById('addRawStockValuation').value = Math_round((metalRate * fineWt) / 10000).toFixed(2);
//            }
//            else if (gsWtTp == 'GM') {
//                document.getElementById('addRawStockValuation').value = Math_round((metalRate * fineWt) / 10).toFixed(2);
//            } else {
//                document.getElementById('addRawStockValuation').value = Math_round((metalRate * fineWt) * 100).toFixed(2);
//            }
//        }
//        else if (metalType == 'Silver') {
//            if (gsWtTp == 'MG') {
//                document.getElementById('addRawStockValuation').value = Math_round((metalRate * fineWt) / (1000 * 1000)).toFixed(2);
//            } else if (gsWtTp == 'GM') {
//                document.getElementById('addRawStockValuation').value = Math_round((metalRate * fineWt) / 1000).toFixed(2);
//            } else {
//                document.getElementById('addRawStockValuation').value = Math_round((metalRate * fineWt)).toFixed(2);
//            }
//        }
//    }
//    var valuation = Math_round(parseFloat(document.getElementById('addRawStockValuation').value)).toFixed(2);
//    if (tax != '') {
//        document.getElementById('addRawStockFinalValuation').value = Math_round(parseFloat(valuation) + (parseFloat(tax) / 100 * valuation)).toFixed(2);
//    }
//    else {
//        document.getElementById('addRawStockFinalValuation').value = valuation;
//    }
//    return false;
//}
/*********End code to delete function and add in calculation file @Author:PRIYA18JAN14*************/
/*********End OF Changes in function calculateFinalVal() @AUTHOR: SANDY16OCT13****************************/
/****End to add function to calculate raw metal valuation @AUTHOR: SANDY24SEP13 **********/
/*********Start code to change function to add validation for metal rate field @Author:SHRI18APR15***********/
/**Start to add validation for add Raw metal Form @AUTHOR: SANDY24SEP13 ***/
/**Start to change validation @AUTHOR: SANDY30DEC13 ***/
/*********Start to change function name @Author:PRIYA18JAN14*********/
/*********Start code to change in raw function validity @Author:SHE16JAN16*********/
/*********Start code to change in raw function validity @Author:SHE10MAY16*********/
function validateAddRawStockInputs() {
    if (validateSelectField(document.getElementById("addItemDOBDay").value, "Please Select Date Day!") == false) {
        document.getElementById("addItemDOBDay").focus();
        return false;
    } else if (validateSelectField(document.getElementById("addItemDOBMonth").value, "Please Select Date Month!") == false) {
        document.getElementById("addItemDOBMonth").focus();
        return false;
    } else if (validateSelectField(document.getElementById("addItemDOBYear").value, "Please Select Date Year!") == false) {
        document.getElementById("addItemDOBYear").focus();
        return false;
    } else if (validateSelectField(document.getElementById("firmId").value, "Please Select Firm Id!") == false) {
        document.getElementById("firmId").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("sttr_metal_rate").value, "Please Enter item metal rate!") == false) {
        document.getElementById("sttr_metal_rate").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("sttr_item_name").value, "Please Enter Item Name!") == false) {
        document.getElementById("sttr_item_name").focus();
        return false;
    } else if (document.getElementById("sttr_quantity").value != '') {
        if (validateNum(document.getElementById("sttr_quantity").value, "Accept only numeric characters without space!") == false) {
            document.getElementById("sttr_quantity").focus();
            return false;
        }
    } else if (validateEmptyField(document.getElementById("sttr_gs_weight").value, "Please Enter Gross Weight!") == false ||
            validateNumWithDot(document.getElementById("sttr_gs_weight").value, "Accept only numeric characters without space!") == false) {
        document.getElementById("sttr_gs_weight").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("sttr_nt_weight").value, "Please Enter Net Weight!") == false ||
            validateNumWithDot(document.getElementById("sttr_nt_weight").value, "Accept only numeric characters without space!") == false) {
        document.getElementById("sttr_nt_weight").focus();
        return false;
    } else if (validateSelectField(document.getElementById("sttr_purity").value, "Please Select Item Tunch or Purity!") == false) {
        document.getElementById("sttr_purity").focus();
        return false;
    }
    return true;
}
/*********End code to change in raw function validity @Author:SHE10MAY16*********/
/*********End code to change in raw function validity @Author:SHE16JAN16*********/
/*********End to change function name @Author:PRIYA18JAN14*********/
/**End to change validation @AUTHOR: SANDY30DEC13 ***/
/**End to add validation for add Raw metal Form @AUTHOR: SANDY24SEP13 ***/
/*********End code to change function to add validation for metal rate field @Author:SHRI18APR15***********/

/***********Start to add function to Search item category @AUTHOR:SANDY25SEP13
 function searchItemCategory(metalType, metalName) {
 alert(metalName);
 loadXMLDoc();
 xmlhttp.onreadystatechange = function() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById('addRawStockItemCategory').value=xmlhttp.responseText;
 }
 };
 xmlhttp.open("POST", "include/php/omrwmcat.php?metalType=" + metalType, true);
 xmlhttp.send();
 }
 ******End to add function to Search item category @AUTHOR:SANDY25SEP13****************comment @AUTHOR: SANDY29SEP13/
 
 /*********Start to add Function to delete Item From Raw stock list @AUTHOR: SANDY25SEP13************/
/*********Start to add Function to delete Item From Raw stock list @AUTHOR: SANDY28SEP13************/
/*********Start to make changes in function @AUTHOR: SANDY14OCT13************/
/*********Start to make changes in function @AUTHOR: SANDY19OCT13************/
function deleteRawStockListItem(rwprId, rwmtdrId, mainPanel, payPanelName, pageNum, rowsPerPage) {
    confirm_box = confirm(deleteAlertMess + "\nDo you really want to delete this Item?"); //change in line @AUTHOR: SANDY28JAN14
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (mainPanel == 'RawPurchaseList') {
                    document.getElementById("rawMetalStockListDiv").innerHTML = xmlhttp.responseText;
                    window.setTimeout(rawMetalFunctionCloseDiv, 1000);
                } else if (payPanelName == 'RawPayment') {
                    document.getElementById("paymentDiv").innerHTML = xmlhttp.responseText;
                    window.setTimeout(stockGlobalFunctionToCloseDiv, 1000);
                } else {
                    document.getElementById("addRawStockInvoice").innerHTML = xmlhttp.responseText;
                    window.setTimeout(rawMetalFunctionCloseDiv, 1000);
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/ogrwidel.php?rwprId=" + rwprId + "&rwmtdrId=" + rwmtdrId + "&panelName=" + panelName + "&mainPanel=" + mainPanel +
                "&payPanelName=" + payPanelName + "&pageNum=" + pageNum + "&rowsPerPage=" + rowsPerPage, true);
        xmlhttp.send();
    }
}
function rawMetalFunctionCloseDiv() {
    document.getElementById('rawMessDisplay').innerHTML = '';
}
/*********End to make changes in function @Author: PRIYA19JAN14************/
/*********End to make changes in function @AUTHOR: SANDY19OCT13************/
/*********End to make changes in function @AUTHOR: SANDY14OCT13************/
/*********End to add Function to delete Item From Raw stock list @AUTHOR: SANDY28SEP13************/
/*********End to add Function to delete Item From Raw stock list @AUTHOR: SANDY25SEP13************/
/***************Start to add function to show add raw metal panel @AUTHOR: SANDY26SEP13*********************/
function navigateAddRawMetalPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
            document.getElementById('addRawMetalName').focus(); //to set focus @AUTHOR: SANDY18NOV13
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ommrawmt.php", true);
    xmlhttp.send();
}
/***************End to add function to show add raw metal panel @AUTHOR: SANDY26SEP13*********************/
/*******Start Function to navigate in list in raw metal list panel @AUTHOR: SANDY26SEP13 ****************/
function navigateRawMetalList(pageNo, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            if (panel == 'SilverList') {
                document.getElementById("silverRawMetalListDiv").innerHTML = xmlhttp.responseText;
            } else if (panel == 'GoldList') {
                document.getElementById("goldRawMetalListDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("otherRawMetalListDiv").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'SilverList') {
        xmlhttp.open("POST", "include/php/omlirwsl.php?page=" + pageNo, true);
    } else if (panel == 'GoldList') {
        xmlhttp.open("POST", "include/php/omlirwgl.php?page=" + pageNo, true);
    } else {
        xmlhttp.open("POST", "include/php/omlirwoi.php?page=" + pageNo, true);
    }
    xmlhttp.send();
}
/*******End Function to navigate in list in raw metal list panel @AUTHOR: SANDY26SEP13 ****************/
/*******Start Function to valiadate add raw metal form fields @AUTHOR: SANDY26SEP13 ****************/
function validateAddRawMetalInputs(obj) {
    if (validateEmptyField(document.getElementById("addRawMetalName").value, "Please enter Item Name!") == false ||
            validateAlphaNumWithSpaceWithSlash(document.getElementById("addRawMetalName").value, "Accept only alpha or numeric characters or with space character!") == false) {
        document.getElementById("addRawMetalName").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("addRawMetalCategory").value, "Please enter Item Category!") == false ||
            validateAlphaNumWithSpaceWithSlash(document.getElementById("addRawMetalCategory").value, "Accept only alpha or numeric characters or with space character!") == false) {
        document.getElementById("addRawMetalCategory").focus();
        return false;
    } else if (validateSelectField(document.getElementById("metalType").value, "Please select Metal Type!") == false) {
        document.getElementById("metalType").focus();
        return false;
    }
    return true;
}
/*******End Function to valiadate add raw metal form fields @AUTHOR: SANDY26SEP13 ****************/

/**********Start of COMMENT to hide function that is not used  @AUTHOR: SANDY8NOV13******************************************************/
/*******Start Function  to add raw metal in table  @AUTHOR: SANDY27SEP13 *************
 function add_RawMetal(url, parameters) {
 
 loadXMLDoc();
 
 xmlhttp.onreadystatechange = alertAddRawMetal;
 
 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader('Content-Type',
 'application/x-www-form-urlencoded');
 xmlhttp.setRequestHeader("Content-length", parameters.length);
 xmlhttp.setRequestHeader("Connection", "close");
 xmlhttp.send(parameters);
 
 }
 
 function alertAddRawMetal() {
 
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById("ajax_loading_div").style.visibility = "hidden";
 document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
 } else {
 document.getElementById("ajax_loading_div").style.visibility = "visible";
 
 }
 
 }
 function addRawMetal(obj) {
 document.getElementById("ajax_loading_div").style.visibility = "visible";
 
 if (validateAddRawMetalInputs(obj)) {
 var poststr = "name=" + encodeURIComponent(document.getElementById("addRawMetalName").value)
 + "&category=" + encodeURIComponent(document.getElementById("addRawMetalCategory").value)
 + "&metalType=" + encodeURIComponent(document.getElementById("metalType").value)
 + "&comments=" + encodeURIComponent(document.getElementById("rawMetalComments").value);
 
 add_RawMetal('include/php/omadrwmt.php', poststr);
 }
 else {
 document.getElementById("ajax_loading_div").style.visibility = "hidden";
 }
 }
 ************End Function to add raw metal in table @AUTHOR: SANDY27SEP13 ****************/
/**********End  Comment to hide function that is not used @AUTHOR: SANDY8NOV13******************************************************/

/*****************Start Function to set and access raw metal id for update @AUTHOR: SANDY26SEP13 ****************/
var rawMetalId;
function setRawMetalId(obj) {

    rawMetalId = obj.id;
}
function getRawMetalName(obj) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUpdateRawMetalDiv").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omuprwmt.php?metalId=" + rawMetalId,
            true);
    xmlhttp.send();
}
/*****************End Function to set and access raw metal id for update @AUTHOR: SANDY26SEP13 ****************/
/************Start of changes in function @AUTHOR: SANDY22OCT13*********************/
function chngRawMetalImgLoadOpt(chngRawMetalImgLoadOption, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (panelName == 'RawMetal') {
                document.getElementById("rawMetalImageLoadOption").value = chngRawMetalImgLoadOption;
            }
            if (panelName == 'AddRawMetal') {
                document.getElementById("rawMetalAddImageLoadOption").value = chngRawMetalImgLoadOption;
            }
            if (chngRawMetalImgLoadOption == 'COM') {
                document.getElementById("file_input_div").innerHTML = xmlhttp.responseText;
            } else if (chngRawMetalImgLoadOption == 'WEB') {
                document.getElementById("webcam_input_div").innerHTML = xmlhttp.responseText;
            }

        } else {
            if (chngRawMetalImgLoadOption == 'COM') {
                document.getElementById("webcam_input_div").innerHTML = "<img src='images/ajaxLoad.gif' />";
            } else if (chngRawMetalImgLoadOption == 'WEB') {

            }
        }
    };
    if (chngRawMetalImgLoadOption == 'COM') {
        xmlhttp.open("POST", "include/php/ognoicim.php?panelName=" + panelName, true);
    } else if (chngRawMetalImgLoadOption == 'WEB') {
        xmlhttp.open("POST", "include/php/omcsadif.php?panelName=" + panelName, true);
    }
    xmlhttp.send();
}
/************End of changes in function @AUTHOR: SANDY22OCT13*********************/
/**************Start to Update and delete metal from raw metal list @AUTHOR: SANDY26SEP13 ******************************/
var buttonId;
function setbuttonId(obj) {

    buttonId = obj.id;
}
function update_rawMetal(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateRawMetal;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertUpdateRawMetal() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";
    }

}
function delete_rawMetal(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertDeleteRawMetal;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertDeleteRawMetal() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";
    }

}
/********Start to change function @AUTHOR: SANDY15DEC13********/
function  updateDeleteRawItem(obj) {
    document.getElementById("ajax_loading_div").style.visibility = "visible";
    if (buttonId == 'Update') {
        if (validateAddRawMetalInputs(obj)) {
            return true;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
        }
    } else if (buttonId == 'Delete') {
        poststr = "metalId=" + encodeURIComponent(document.getElementById("rawMetalId").value);
        delete_rawMetal('include/php/omdlrwmt.php', poststr);
    }
}
/********End to change function @AUTHOR: SANDY15DEC13********/
/**************End to Update and delete metal from raw metal list @AUTHOR: SANDY26SEP13 ******************************/
/********Start of Function to show released customer list @AUTHOR: SANDY26SEP13****************/
function showReleasedCustomerList() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("customerListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omrlcslt.php", true);
    xmlhttp.send();
}
/********End of Function to show released customer list @AUTHOR: SANDY26SEP13****************/
/*********Start To activate or permanantly deletecustomer from list @AUTHOR: SANDY26SEP13*******************/
/****Start of changes in function to add confirm messages @AUTHOR: SANDY4DEC13*****************************/
function changeCustomerStatus(custId, action) {
    if (action == 'Delete') {
        confirm_box = confirm(deletePermAlertMess + "\nDo you really want to delete this Customer Permanently?"); //change in line @AUTHOR: SANDY28JAN14
    } else {
        confirm_box = confirm(activateAlertMess + "\nDo you really want to Reactivate this Customer?"); //change in line @AUTHOR: SANDY28JAN14
    }
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajax_loading_div").style.visibility = "hidden";
                document.getElementById("customerListDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omchcsst.php?custId=" + custId + "&action=" + action, true);
        xmlhttp.send();
    }
}
/****End of changes in function to add confirm messages @AUTHOR: SANDY4DEC13*****************************/
/*********End To activate or permanantly deletecustomer from list @AUTHOR: SANDY26SEP13*******************/
/*********Start to add function to navigate in Released Cutomer List @AUTHOR: SANDY26SEP13 ***************/
function navigationInRelesedCustList(pageNo) {
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
    xmlhttp.open("POST", "include/php/omrlcslt.php?page=" + pageNo, true);
    xmlhttp.send();
}
/*********End to add function to navigate in Released Cutomer List @AUTHOR: SANDY26SEP13 ***************/
/*******Start for function to display patment panel for add raw stock @AUTHOR: SANDY30SEP13 *************/
/*************Start of changes in function @AUTHOR: SANDY4OCT13****************************************/
/*************Start of changes in function to set focus on metal type field  @AUTHOR: SANDY21OCT13****************************************/
/***********Start to change code to pass parameter needed for journal entry @AUTHOR: SANDY9NOV13***********/
function getAddRawStockPaymentDiv(root, suppId, accId, preInvoiceNo, invoiceNo, goldTotalGWeight, goldTotalGWeightType, silverTotalGWeight, silverTotalWeightType, totalMetalVal, totalFinalValuation, firmId,
        totalTaxChrg, date, goldNtWt, goldNtWtTp, goldFnWt, goldFnWtTp, silverNtWt, silverNtWtTp, silverFnWt, silverFnWtTp, action) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
            document.getElementById("rawMetPayMetalType1" + 1).focus(); //CHANGE TO SET FOCUS @AUTHOR: SANDY12NOV13
            if (action == 'Update') {
                document.getElementById('formName').innerHTML = 'Update Payment'; //add line @AUTHOR: SANDY3OCT13
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + root + "/include/php/ogrmpdv.php?suppId=" + suppId + "&newPreInvoiceNo=" + preInvoiceNo + "&newInvoiceNo=" + invoiceNo +
            "&goldTotalWeight=" + goldTotalGWeight + "&goldTotalWeightType=" + goldTotalGWeightType + "&silverTotalWeight=" + silverTotalGWeight + "&silverTotalWeightType=" + silverTotalWeightType +
            "&firmId=" + firmId + "&totalMetalVal=" + totalMetalVal + "&totalFinalValuation=" + totalFinalValuation +
            "&totalTaxChrg=" + totalTaxChrg + "&date=" + date + "&goldTotNtWt=" + goldNtWt + "&goldTotNtWtTp=" + goldNtWtTp + "&goldTotFnWt=" + goldFnWt + "&goldTotFnWtTp=" + goldFnWtTp
            + "&silverTotNtWt=" + silverNtWt + "&silverTotNtWtTp=" + silverNtWtTp + "&silverTotFnWt=" + silverFnWt + "&silverTotFnWtTp=" + silverFnWtTp + "&action=" + action + "&accId=" + accId, true);
    xmlhttp.send();
}
/***********End to change code to pass parameter needed for journal entry @AUTHOR: SANDY9NOV13***********/
/*************End of changes in function to set focus on metal type field  @AUTHOR: SANDY21OCT13****************************************/
/*************End of changes in function @AUTHOR: SANDY4OCT13****************************************/
/*******End for function to display patment panel for add raw stock @AUTHOR: SANDY30SEP13 *************/


/**************Start To calculate valuation of raw metal silver in payment panel @AUTHOR: SANDY3OCT13 ******************
 function calcRawSilverStockValuation() {
 var rawMetPayTotalWeight2 = document.getElementById('rawMetPayMetalTotWeight2').value;
 var rawMetPayTotalWeightType2 = document.getElementById('rawMetPayMetalTotWeightType2').value;
 var rawMetPayMetalRate2 = document.getElementById('rawMetPayMetalRate2').value;
 var rawMetPayMetalTunch2 = document.getElementById('rawMetPayMetalTunch2').value;
 var rawMetPayMetalDueWeightType2 = document.getElementById('rawMetPayTotalSilverWtType').value;
 
 var silverWeight = (rawMetPayTotalWeight2 * rawMetPayMetalTunch2) / 100;
 document.getElementById('rawMetPayMetalFineWeight2').value = silverWeight;
 
 if (rawMetPayTotalWeightType2 == 'KG') {
 document.getElementById('rawMetPayMetalVal2').value = Math_round((silverWeight * rawMetPayMetalRate2)).toFixed(2);
 } else if (rawMetPayTotalWeightType2 == 'GM') {
 document.getElementById('rawMetPayMetalVal2').value = Math_round((silverWeight * rawMetPayMetalRate2) / 1000).toFixed(2);
 } else if (rawMetPayTotalWeightType2 == 'MG') {
 document.getElementById('rawMetPayMetalVal2').value = Math_round((silverWeight * rawMetPayMetalRate2) / 1000*1000).toFixed(2);
 }
 if (rawMetPayMetalDueWeightType2 == 'KG') {
 if (rawMetPayTotalWeightType2 == 'KG') {
 document.getElementById('rawMetPayMetalDueWeight2').value = (parseFloat(document.getElementById('rawMetPayTotalSilverWt').value - silverWeight)).toFixed(2);
 }
 else if (rawMetPayTotalWeightType2 == 'GM') {
 document.getElementById('rawMetPayMetalDueWeight2').value = (parseFloat(document.getElementById('rawMetPayTotalSilverWt').value - silverWeight / 1000)).toFixed(2);
 }
 else if (rawMetPayTotalWeightType2 == 'MG') {
 document.getElementById('rawMetPayMetalDueWeight2').value = (parseFloat(document.getElementById('rawMetPayTotalSilverWt').value - silverWeight / (1000 * 1000))).toFixed(2);
 }
 }
 else if (rawMetPayMetalDueWeightType2 == 'GM') {
 if (rawMetPayTotalWeightType2 == 'KG') {
 document.getElementById('rawMetPayMetalDueWeight2').value = (parseFloat(document.getElementById('rawMetPayTotalSilverWt').value - silverWeight * 1000)).toFixed(2);
 }
 else if (rawMetPayTotalWeightType2 == 'GM') {
 document.getElementById('rawMetPayMetalDueWeight2').value = (parseFloat(document.getElementById('rawMetPayTotalSilverWt').value - silverWeight)).toFixed(2);
 }
 else if (rawMetPayTotalWeightType2 == 'MG') {
 document.getElementById('rawMetPayMetalDueWeight2').value = (parseFloat(document.getElementById('rawMetPayTotalSilverWt').value - silverWeight / (1000))).toFixed(2);
 }
 }
 else if (rawMetPayMetalDueWeightType2 == 'MG') {
 if (rawMetPayTotalWeightType2 == 'KG') {
 document.getElementById('rawMetPayMetalDueWeight2').value = (parseFloat(document.getElementById('rawMetPayTotalSilverWt').value - silverWeight * 1000 * 1000)).toFixed(2);
 }
 else if (rawMetPayTotalWeightType2 == 'GM') {
 document.getElementById('rawMetPayMetalDueWeight2').value = (parseFloat(document.getElementById('rawMetPayTotalSilverWt').value - silverWeight * 1000)).toFixed(2);
 }
 else if (rawMetPayTotalWeightType2 == 'MG') {
 document.getElementById('rawMetPayMetalDueWeight2').value = (parseFloat(document.getElementById('rawMetPayTotalSilverWt').value - silverWeight)).toFixed(2);
 }
 }
 document.getElementById('rawMetstockPaySilverWghtBal').value = (parseFloat(document.getElementById('rawMetPayMetalDueWeight2').value)).toFixed(2) + ' ' + document.getElementById('rawMetPayMetalDueWeightType2').value;
 var metalValuation1 = document.getElementById('rawMetPayMetalValuation1').value;
 var metalValuation2 = document.getElementById('rawMetPayMetalVal2').value;
 if (metalValuation1 == '') {
 metalValuation1 = 0;
 }
 if (metalValuation2 == '') {
 metalValuation2 = 0;
 }
 document.getElementById('rawMetstockPayTotalAmtRec').value = Math_round(parseFloat(metalValuation1) + parseFloat(metalValuation2)).toFixed(2);
 document.getElementById('rawMetstockPayTotalAmtBal').value = Math_round(parseFloat(document.getElementById('rawMetstockPayTotalAmt').value) - parseFloat(document.getElementById('rawMetstockPayTotalAmtRec').value)).toFixed(2);
 document.getElementById('rawMetPayTotalAmtBalHidden').value = Math_round(parseFloat(document.getElementById('rawMetstockPayTotalAmt').value) - parseFloat(document.getElementById('rawMetstockPayTotalAmtRec').value)).toFixed(2);
 document.getElementById('rawMetPayTotalAmtBalHidden').value = document.getElementById('rawMetstockPayTotalAmtBal').value;
 
 if (document.getElementById('rawMetstockPayCashAmount').value != '') {
 document.getElementById('rawMetstockPayTotalAmtBal').value = (parseFloat(document.getElementById('rawMetPayTotalAmtBalHidden').value) - parseFloat(document.getElementById('rawMetstockPayCashAmount').value).toFixed(3));
 document.getElementById('cashPaidLabel').innerHTML = parseFloat(document.getElementById('rawMetstockPayCashAmount').value).toFixed(2);
 }
 document.getElementById('rawMetPayTotalAmtBalHidden').value = document.getElementById('rawMetstockPayTotalAmtBal').value;
 if (document.getElementById('rawMetstockPayDiscount').value != '') {
 document.getElementById('rawMetstockPayTotalAmtBal').value = (parseFloat(document.getElementById('rawMetPayTotalAmtBalHidden').value) - parseFloat(document.getElementById('rawMetstockPayDiscount').value).toFixed(3));
 document.getElementById('discountLabel').innerHTML = parseFloat(document.getElementById('rawMetstockPayDiscount').value).toFixed(2);
 }
 document.getElementById('totalMetValLabel').innerHTML = (parseFloat(document.getElementById('rawMetstockPayTotalAmtRec').value)).toFixed(2);
 document.getElementById('totalAmntBalanceLabel').innerHTML = parseFloat(document.getElementById('rawMetstockPayTotalAmtBal').value).toFixed(2);
 
 return false;
 }
 *************End To calculate valuation of raw metal silver in payment panel @AUTHOR: SANDY3OCT13 comment @author: SANDY16OCT13******************/
/***************Start to show raw metal list @AUTHOR: SANDY28SEP13*************************/
/*****Start to change function @AUTHOR: SANDY22OCT13*******************/
/*****Start to Show rawPurchase List function OMMODTAG_SHE29DEC15**********************/

function showRawMetalList(panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogrmprlt.php?listPanel=" + panel, true);
    xmlhttp.send();
}
/*****End to Show rawPurchase List function OMMODTAG_SHE29DEC15*******************/
/*****End to change function @AUTHOR: SANDY22OCT13*******************/
/***************End to show raw metal list @AUTHOR: SANDY28SEP13*************************/
/***************Start to show raw metal list @AUTHOR: SANDY14OCT13************************
 function showSelectedRawMetalList(panel) {
 loadXMLDoc();
 xmlhttp.onreadystatechange = function() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
 document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
 }
 else {
 document.getElementById("main_ajax_loading_div").style.visibility = "visible";
 }
 };
 xmlhttp.open("POST", "include/php/ogrmlist.php?panel="+panel, true);
 xmlhttp.send();
 }
 *************End to show raw metal list @AUTHOR: SANDY14OCT13*************************/
/*************Start to make changes in function to change panel name @AUTHOR: SANDY18NOV13***********/
/**************Start to update raw metal @AUTHOR: SANDY28SEP13****************/
/*************Start code to change function @Author:PRIYA29JAN14 ***********/
function showRawMetalDetailsDiv(rwprId, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("POST", "include/php/ogiamndv.php?rwprId=" + rwprId + "&rawPanelName=" + panelName + "&panelName=RawStock", true);
    xmlhttp.send();
}
/*************End code to change function @Author:PRIYA29JAN14***********/
/**************End to update raw metal @AUTHOR: SANDY28SEP13****************/
/*************End to make changes in function to change panel name @AUTHOR: SANDY18NOV13***********/
/**************Start code to add code for delete account from update account panel @AUTHOR: SANDY3OCT13*************/
/**************Start code to check accounts to delete @Author:PRIYA07AUG14**************/
function deleteAccount(acntId) {
    if (document.getElementById("accCreatedBy").value == 'oMunim') {
        alert('User can not delete account created by oMunim !');
    } else {
        confirm_box = confirm(deleteAlertMess + "\n Do you really want to delete this Account Permanently?");
        if (confirm_box == true)
        {
            loadXMLDoc();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("ajax_loading_div").style.visibility = "visible";
                }
            };
            xmlhttp.open("POST", "include/php/omacntdl.php?acntId=" + acntId, true);
            xmlhttp.send();
        }
    }
}
/**************End code to check accounts to delete @Author:PRIYA07AUG14**************/
/**************End code to add code for delete account from update account panel @AUTHOR: SANDY3OCT13*************/

/***************START TO DELETE JOURNAL ENTRY @AUTHOR: SANDY3OCT13*********************************/
function deleteEntryFrmJrnl(jrnlId) {
    confirm_box = confirm(deleteAlertMess + "\n Do you really want to delete this Journal Entry Permanently?"); //change in line @AUTHOR: SANDY28JAN14
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("journalEntryDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omjnrwdl.php?jrnlId=" + jrnlId, true);
        xmlhttp.send();
    }
}
/***************End TO DELETE JOURNAL ENTRY @AUTHOR: SANDY3OCT13*********************************/
/*****************Start to add function to show add stock panel @AUTHOR: SANDY4OCT13*************************/
/*****************Start to add function to show add stock panel @AUTHOR: SANDY21OCT13*************************/
/***************Start cdoe to add panel @Author:PRIYA08OCT14*************/
/***************Start cdoe to add panel add condition stockListByParticularItem  AND ITEMNAME@Author: GAUR26JUL16*************/
/***********Start to add condition of StockPurchaseList @Author:SHRI04AUG16*******************/
/***************Start cdoe to add panel add condition chk panel RetailPurchaseList @Author: GAUR04AUG16*************/
function showAddStockPanel(panel, itemCategory, metalType, itemName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText; //change in div name @AUTHOR: SANDY25SEP13
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'PurchaseList')
        xmlhttp.open("POST", "include/php/ogiaprlt.php?panel=" + panel, true);
    else if (panel == 'StockPurchaseList')
        xmlhttp.open("POST", "include/php/ogwaprlt.php?panel=" + panel, true);
    else if (panel == 'StockListByItem')
        xmlhttp.open("POST", "include/php/ogwastlt.php?panel=" + panel + "&itemCategory=" + itemCategory + "&metalType=" + metalType + "&panelName=stockListByItem", true);
    else if (panel == 'stockListByParticularItem')
        xmlhttp.open("POST", "include/php/ogwastlt.php?panel=" + panel + "&itemCategory=" + itemCategory + "&metalType=" + metalType + "&itemName=" + itemName + "&panelName=stockListByParticularItem", true);
    else if (panel == 'StockList')
        xmlhttp.open("POST", "include/php/ogwastlt.php?panel=" + panel, true);
    else if (panel == 'RetailPurchaseList')
        xmlhttp.open("POST", "include/php/ogrtprlt.php?panel=" + panel, true);
    else
        xmlhttp.open("POST", "include/php/ogiamsdv.php?panel=" + panel, true);
    xmlhttp.send();
}
/***************End cdoe to add panel add condition chk panel RetailPurchaseList @Author: GAUR04AUG16*************/
/***********End to add condition of StockPurchaseList @Author:SHRI04AUG16*******************/
/***************Start cdoe to add panel add condition stockListByParticularItem  ITEMNAME@Author: GAUR26JUL16*************/
/***************End cdoe to add panel @Author:PRIYA08OCT14*************/
/*****************End to add function to show add stock panel @AUTHOR: SANDY21OCT13*************************/
/*****************End to add function to show add stock panel @AUTHOR: SANDY4OCT13*************************/
/*******************Start of calculation in sell panel @AUTHOR: SANDY5OCT13*******************************/
/*******************Start of calculation in sell panel @AUTHOR: SANDY15OCT13*******************************/
/*******************Start of changes in function @AUTHOR: SANDY19OCT13******************************************/
function calSellVal() {
    var tunch = parseFloat(document.getElementById('sellRawStockItemTunch').value);
    var metalRate = parseFloat(document.getElementById('sellRawStockItemMetalRate').value);
    document.getElementById('slRwMetFnWt').value = (tunch * parseFloat(document.getElementById('slRwMetNW').value)) / 100;
    var metalType = document.getElementById('slRwMetMetal').value;
    var wt = document.getElementById('slRwMetNW').value;
    var wtType = document.getElementById('slRwMetNTWT').value;
    var totalWt = parseFloat(document.getElementById('totalWt').value);
    var totalWtTp = document.getElementById('totalWtTp').value;
    var totalQuant = document.getElementById('totalQuant').value;
    var FnWt = parseFloat(document.getElementById('slRwMetFnWt').value);
    if (wt != '') {
        if (metalType == 'Gold') {
            if (wtType == 'MG') {
                document.getElementById('slRwMetValuation').value = Math_round((FnWt * metalRate) / 10000).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('slRwMetValuation').value = Math_round((FnWt * metalRate) / 10).toFixed(2);
            } else {
                document.getElementById('slRwMetValuation').value = Math_round((FnWt * metalRate) * 100).toFixed(2);
            }

        } else if (metalType == 'Silver') {
            if (wtType == 'MG') {
                document.getElementById('slRwMetValuation').value = Math_round((FnWt * metalRate) / 1000000).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('slRwMetValuation').value = Math_round((FnWt * metalRate) / 1000).toFixed(2);
            } else {
                document.getElementById('slRwMetValuation').value = Math_round((FnWt * metalRate)).toFixed(2);
            }
        }
        if (totalWtTp != wtType) {
            wt = convert(totalWtTp, wtType, wt);
        }
        document.getElementById('remainWt').value = totalWt - wt;
        document.getElementById('remainWtTp').value = totalWtTp;
    }
    if (document.getElementById('slRwMetOthTax').value != '') {
        var taxAmnt = Math_round(parseFloat(document.getElementById('slRwMetValuation').value) * parseFloat(document.getElementById('slRwMetOthTax').value) / 100).toFixed(2);
        document.getElementById('slRwMetFinalVal').value = Math_round(parseFloat(taxAmnt) + parseFloat(document.getElementById('slRwMetValuation').value)).toFixed(2);
    } else {
        document.getElementById('slRwMetFinalVal').value = Math_round(parseFloat(document.getElementById('slRwMetValuation').value)).toFixed(2);
    }
}
/*******************End of changes in function @AUTHOR: SANDY19OCT13******************************************/
/*******************Start of calculation in sell panel @AUTHOR: SANDY15OCT13*******************************/
/*******************Start of calculation in sell panel @AUTHOR: SANDY5OCT13*******************************/

function validateSellDet() {
    if (validateEmptyField(document.getElementById("slRwMetValuation").value, "Please enter Valuation!") == false) {
        document.getElementById("slRwMetValuation").focus();
        return false;
    }
    return true;
}
function add_raw_sell_details(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertAddRawSellDet;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertAddRawSellDet() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("rawSellDetails").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }

}
/*****************Start to add code for sell details @AUTHOR: SANDY5OCT13***********************************/
function sellDetSubmit(rawMetalId) {
    if (document.getElementById("remainWt").value < 0) {
        alert("Required Stock is not available!");
    } else {
        confirm_box = confirm("\n You will sell :" + document.getElementById('slRwMetNW').value + document.getElementById('slRwMetNTWT').value + "\n Total Metal Remain:" + document.getElementById('remainWt').value + document.getElementById('remainWtTp').value + "\n Do you really want to sell this raw metal?");
        if (confirm_box == true) {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            document.getElementById("slRwSubButtDiv").style.visibility = "hidden";
            if (validateSellDet()) {
                var poststr = "itstPreId=" + encodeURIComponent(document.getElementById("srchItemPreId").value)
                        + "&itstId=" + encodeURIComponent(document.getElementById("srchItemPostId").value)
                        + "&rawMetalId=" + encodeURIComponent(rawMetalId)
                        + "&slRwPreInvoiceNo=" + encodeURIComponent(document.getElementById("slRwPreInvoiceNo").value)
                        + "&slRwInvoiceNo=" + encodeURIComponent(document.getElementById("slRwInvoiceNo").value)
                        + "&custId=" + encodeURIComponent(document.getElementById("slRwCustomerId").value)
                        + "&slRwFirmId=" + encodeURIComponent(document.getElementById("firmId").value)
                        + "&slRwDOBDay=" + encodeURIComponent(document.getElementById("slRwDOBDay").value)
                        + "&slRwDOBMonth=" + encodeURIComponent(document.getElementById("slRwDOBMonth").value)
                        + "&slRwDOBYear=" + encodeURIComponent(document.getElementById("slRwDOBYear").value)
                        + "&accountId=" + encodeURIComponent(document.getElementById("accountId").value)
                        + "&slRwMetTotPieces=" + encodeURIComponent(document.getElementById("slRwMetQuant").value)
                        + "&slRwMetGSW=" + encodeURIComponent(document.getElementById("slRwMetGSW").value)
                        + "&slRwMetalType=" + encodeURIComponent(document.getElementById("slRwMetMetal").value)
                        + "&slRwMetGSWT=" + encodeURIComponent(document.getElementById("slRwMetGSWT").value)
                        + "&slRwMetNTW=" + encodeURIComponent(document.getElementById("slRwMetNW").value)
                        + "&slRwMetNTWT=" + encodeURIComponent(document.getElementById("slRwMetNTWT").value)
                        + "&slRwMetTunch=" + encodeURIComponent(document.getElementById("sellRawStockItemTunch").value)
                        + "&slRwMetFnWt=" + encodeURIComponent(document.getElementById("slRwMetFnWt").value)
                        + "&slRwMetMetalRate=" + encodeURIComponent(document.getElementById("sellRawStockItemMetalRate").value)
                        + "&slRwMetValuation=" + encodeURIComponent(document.getElementById("slRwMetValuation").value)
                        + "&slRwMetOthTax=" + encodeURIComponent(document.getElementById("slRwMetOthTax").value)
                        + "&slRwMetFinalVal=" + encodeURIComponent(document.getElementById("slRwMetFinalVal").value)
                        + "&remainQuant=" + encodeURIComponent(document.getElementById("remainQuant").value)
                        + "&remainWt=" + encodeURIComponent(document.getElementById("remainWt").value)
                        + "&remainWtType=" + encodeURIComponent(document.getElementById("remainWtTp").value);
                add_raw_sell_details("include/php/ogrwslad.php", poststr);
                return true;
            }
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("slPrSubButtDiv").style.visibility = "visible";
            return false;
        }
    }
}
/*****************End to add code for sell details @AUTHOR: SANDY5OCT13***********************************/
/*****************Start to add code to get sell details of raw metal @AUTHOR: SANDY8OCT13******************/
function getSellDetailsOfMetal(preId, postId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("metSellDetailDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (postId == 'BarcodeId') {
        xmlhttp.open("POST", "include/php/ogmtsldt.php?preId=" + preId, true);
    } else {
        xmlhttp.open("POST", "include/php/ogmtsldt.php?preId=" + preId + "&postId=" + postId, true);
    }
    xmlhttp.send();
}
/*****************End to add code to get sell details of raw metal @AUTHOR: SANDY8OCT13******************/
/***********************Start to show selected raw metal details @AUTHOR: SANDY16OCT13******************/
function  searchMetalId(metalId, metalType, panel, keycode, id) {
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("goldIdListRawStockPay" + id).innerHTML = xmlhttp.responseText;
            if (keycode == 40 || keycode == 38) {
                document.getElementById('goldIdListDivRawStockPay').focus();
                document.getElementById('goldIdListDivRawStockPay').options[0].selected = true;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogpyrwmt.php?metalId" + metalId + "&metalType=" + metalType + "&panel=" + panel + "&keycode=" + keycode + "&id=" + id, true);
    xmlhttp.send();
}
/***********************End to show selected raw metal details @AUTHOR: SANDY16OCT13******************/
/*****************Start of functions for delete more add functionality in raw metal payment panel @AUTHOR: SANDY16OCT13*************************/
/******Start to add code to clear metal id list @AUTHOR: SANDY19OCT13*****************/
/***Start to change function @AUTHOR: SANDY30DEC13************/
function clearListDiv(id, focusId) {
    document.getElementById(id).innerHTML = '';
    document.getElementById(focusId).focus();
}
/***End to change function @AUTHOR: SANDY30DEC13************/
/******Endto add code to clear metal id list @AUTHOR: SANDY19OCT13*****************/
/*******Start to add code to add more metal @AUTHOR: SANDY19OCT13*****************/
var nextCount;
function getMoreMetalDiv(count, gRate, sRate, firmId) {
    nextCount = parseInt(count) + 1;
    document.getElementById('totalRwMtPaid').value = nextCount;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById('addMorePayRwMt' + count).innerHTML = xmlhttp.responseText;
            document.getElementById('rawMetPayMetalType1' + nextCount).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ograwpay.php?count=" + nextCount + "&gRate=" + gRate + "&sRate=" + sRate + "&newFrmId=" + firmId, true);
    xmlhttp.send();
}
/*******End to add code to add more metal @AUTHOR: SANDY19OCT13*****************/
/*******Start to add code to delete div @AUTHOR: SANDY19OCT13*******************/
function closeMoreMetalDiv(closeDivId) {
    document.getElementById('status' + closeDivId).value = 'Deleted';
    document.getElementById('payRwMt' + closeDivId).innerHTML = "";
    getFinalBalnceDetails();
}
/*******End to add code to delete div @AUTHOR: SANDY19OCT13*******************/
/*****************End of functions for delete more add functionality in raw metal payment panel @AUTHOR: SANDY16OCT13*************************/
/**********Start To calculate valuation of raw metal gold in payment panel @AUTHOR: SANDY17OCT13***************/
/*******************Start of changes in function @AUTHOR: SANDY22OCT13******************************************/
/*******************Start of changes in function  to round values @AUTHOR: SANDY09JAN14******************************************/
function calcRawGoldStockValuation(id, metalId) {
    if (document.getElementById('rawMetPayMetalTotWeight1' + id).value != '') {
        var metTp = document.getElementById('rawMetPayMetalType1' + id).value;
        var wt = document.getElementById('rawMetPayMetalTotWeight1' + id).value;
        var wtType = document.getElementById('rawMetPayMetalTotWeightType1' + id).value;
        var metalRate = document.getElementById('rawMetPayMetalRate1' + id).value;
        var tunch = document.getElementById('rawMetPayMetalTunch1' + id).value;
        var fnWt = (wt * tunch) / 100;
        document.getElementById('rawMetPayMetalFineWeight1' + id).value = fnWt;
        var goldDueWt = document.getElementById('rawMetPayTotalGoldWt').value;
        var silDueWt = document.getElementById('rawMetPayTotalSilverWt').value;
        var goldDueWtTp = document.getElementById('rawMetPayTotalGoldWGTType').value;
        var silDueWtTp = document.getElementById('rawMetPayTotalSilverWtType').value;
        if (metTp == 'Gold') {
            if (wtType == 'KG') {
                document.getElementById('rawMetPayMetalValuation1' + id).value = Math_round((fnWt * metalRate) * 100).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('rawMetPayMetalValuation1' + id).value = Math_round((fnWt * metalRate) / 10).toFixed(2);
            } else if (wtType == 'MG') {
                document.getElementById('rawMetPayMetalValuation1' + id).value = Math_round((fnWt * metalRate) / 10000).toFixed(2);
            }
        } else {
            if (wtType == 'KG') {
                document.getElementById('rawMetPayMetalValuation1' + id).value = Math_round((fnWt * metalRate)).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('rawMetPayMetalValuation1' + id).value = Math_round((fnWt * metalRate) / 1000).toFixed(2);
            } else if (wtType == 'MG') {
                document.getElementById('rawMetPayMetalValuation1' + id).value = Math_round((fnWt * metalRate) / 1000000).toFixed(2);
            }
        }
        getFinalBalnceDetails();
    }
}
function  getFinalBalnceDetails() {
    var totalPaidGoldWt = 0;
    var totalPaidSilWt = 0;
    var totalPaidGoldWtTp = 0;
    var totalPaidSilWtTp = 0;
    var totalValuation = 0;
    var totalGoldValuation = 0;
    var totalSilverValuation = 0;
    var idVal = document.getElementById('totalRwMtPaid').value;
    while (idVal > 0) {
        if (document.getElementById('status' + idVal).value != 'Deleted') {
            var metTp = document.getElementById('rawMetPayMetalType1' + idVal).value;
            var wt = document.getElementById('rawMetPayMetalTotWeight1' + idVal).value;
            var wtType = document.getElementById('rawMetPayMetalTotWeightType1' + idVal).value;
            var metalRate = document.getElementById('rawMetPayMetalRate1' + idVal).value;
            var tunch = document.getElementById('rawMetPayMetalTunch1' + idVal).value;
            var fnWt = (wt * tunch) / 100;
            document.getElementById('rawMetPayMetalFineWeight1' + idVal).value = fnWt;
            var goldDueWt = document.getElementById('rawMetPayTotalGoldWt').value;
            var silDueWt = document.getElementById('rawMetPayTotalSilverWt').value;
            var goldDueWtTp = document.getElementById('rawMetPayTotalGoldWGTType').value;
            var silDueWtTp = document.getElementById('rawMetPayTotalSilverWtType').value;
            if (metTp == 'Gold') {
                if (goldDueWtTp != wtType) {
                    wt = convert(goldDueWtTp, wtType, wt);
                }
                totalPaidGoldWt = parseFloat(totalPaidGoldWt) + parseFloat(wt);
                document.getElementById('totalGoldWtRec').value = totalPaidGoldWt;
                totalPaidGoldWtTp = goldDueWtTp;
                document.getElementById('totalGoldWtTpRec').value = goldDueWtTp;
                totalGoldValuation = Math_round(parseFloat(totalGoldValuation) + parseFloat(document.getElementById('rawMetPayMetalValuation1' + idVal).value)).toFixed(2);
                totalValuation = Math_round(parseFloat(totalValuation) + parseFloat(document.getElementById('rawMetPayMetalValuation1' + idVal).value)).toFixed(2);
                document.getElementById('totalGoldValRec').value = totalGoldValuation;
                document.getElementById('rawMetstockPayGoldWghtBal').value = parseFloat(goldDueWt) - parseFloat(totalPaidGoldWt);
                document.getElementById('goldDueWt').value = document.getElementById('rawMetstockPayGoldWghtBal').value;
                document.getElementById('goldDueWtTp').value = goldDueWtTp;
                document.getElementById('rawMetstockPayGoldWghtBal').value = document.getElementById('rawMetstockPayGoldWghtBal').value + goldDueWtTp;
            } else {
                if (silDueWtTp != wtType) {
                    wt = convert(silDueWtTp, wtType, wt);
                }
                totalPaidSilWt = parseFloat(totalPaidSilWt) + wt;
                document.getElementById('totalSilverWtRec').value = totalPaidSilWt;
                totalPaidSilWtTp = silDueWtTp;
                document.getElementById('totalSilverWtTpRec').value = silDueWtTp;
                totalSilverValuation = Math_round(parseFloat(totalSilverValuation) + parseFloat(document.getElementById('rawMetPayMetalValuation1' + idVal).value)).toFixed(2);
                totalValuation = Math_round(parseFloat(totalValuation) + parseFloat(document.getElementById('rawMetPayMetalValuation1' + idVal).value)).toFixed(2);
                document.getElementById('totalSilverValRec').value = totalSilverValuation;
                document.getElementById('rawMetstockPaySilverWghtBal').value = parseFloat(silDueWt) - parseFloat(totalPaidSilWt);
                document.getElementById('silverDueWt').value = document.getElementById('rawMetstockPaySilverWghtBal').value;
                document.getElementById('silverDueWtTp').value = silDueWtTp;
                document.getElementById('rawMetstockPaySilverWghtBal').value = document.getElementById('rawMetstockPaySilverWghtBal').value + silDueWtTp;
            }
        }
        idVal = parseInt(idVal) - 1;
    }

    if (totalValuation == 'NaN') {
        document.getElementById('rawMetstockPayTotalAmtRec').value = 0.00;
    } else {
        document.getElementById('rawMetstockPayTotalAmtRec').value = Math_round(parseFloat(totalValuation)).toFixed(2);
    }
    document.getElementById('rawMetstockPayTotalAmtBal').value = Math_round(parseFloat(document.getElementById('rawMetstockPayTotalAmt').value) - parseFloat(document.getElementById('rawMetstockPayTotalAmtRec').value)).toFixed(2);
    document.getElementById('rawMetPayTotalAmtBalHidden').value = Math_round(parseFloat(document.getElementById('rawMetstockPayTotalAmt').value) - parseFloat(document.getElementById('rawMetstockPayTotalAmtRec').value)).toFixed(2);
    document.getElementById('rawMetPayTotalAmtBalHidden').value = document.getElementById('rawMetstockPayTotalAmtBal').value;
    if (document.getElementById('rawMetstockPayCashAmount').value != '') {
        document.getElementById('rawMetstockPayTotalAmtBal').value = Math_round(parseFloat(document.getElementById('rawMetPayTotalAmtBalHidden').value) - parseFloat(document.getElementById('rawMetstockPayCashAmount').value)).toFixed(3);
        document.getElementById('cashPaidLabel').innerHTML = Math_round(document.getElementById('rawMetstockPayCashAmount').value).toFixed(2);
    }
    document.getElementById('rawMetPayTotalAmtBalHidden').value = document.getElementById('rawMetstockPayTotalAmtBal').value;
    if (document.getElementById('rawMetstockPayDiscount').value != '') {
        document.getElementById('rawMetstockPayTotalAmtBal').value = Math_round(parseFloat(document.getElementById('rawMetPayTotalAmtBalHidden').value) - parseFloat(document.getElementById('rawMetstockPayDiscount').value)).toFixed(3);
        document.getElementById('discountLabel').innerHTML = parseFloat(document.getElementById('rawMetstockPayDiscount').value).toFixed(2);
    }
    document.getElementById('totalMetValLabel').innerHTML = Math_round(parseFloat(document.getElementById('rawMetstockPayTotalAmtRec').value)).toFixed(2);
    document.getElementById('totalAmntBalanceLabel').innerHTML = parseFloat(document.getElementById('rawMetstockPayTotalAmtBal').value).toFixed(2);
    return false;
}
/*******************End of changes in function  to round values @AUTHOR: SANDY09JAN14******************************************/
/*******************End of changes in function @AUTHOR: SANDY22OCT13******************************************/
/**************End To calculate valuation of raw metal gold in payment panel @AUTHOR: SANDY17OCT13*********************/
/*********Start to add code to show list as per metal type @AUTHOR: SANDY23OCT13****************************/
function showListOfSelectedMetal(metal, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogrmlist.php?listPanel=" + panel + "&metal=" + metal, true);
    xmlhttp.send();
}
/*********End to add code to show list as per metal type @AUTHOR: SANDY23OCT13****************************/

/*******Start Code To Search Stock By Requirement @AUTHOR:SANDY25OCT13*********/
function valSearchStockByRequirement(obj) {
    if (validateEmptyField(document.srch_stock_asPer_Req.stockAmtStartRange.value, "Please enter start range!") == false) {
        document.srch_stock_asPer_Req.stockAmtStartRange.focus();
        return false;
    } else if (validateEmptyField(document.srch_stock_asPer_Req.stockAmtEndRange.value, "Please enter end range!") == false)
    {
        document.srch_stock_asPer_Req.stockAmtEndRange.focus();
        return false;
    }
    return true;
}

function search_stock(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchStock;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
/**********Start code to change div @Author:PRIYA06FEB14*************/
function alertSearchStock() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("stockByAmtRangeGoButt").style.visibility = "visible";
        document.getElementById("addStockCurrentInvoice").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("stockByAmtRangeGoButt").style.visibility = "hidden";
    }
}
/**********End code to change div @Author:PRIYA06FEB14*************/
function searchStockByRequirement(obj) {
    if (valSearchStockByRequirement(obj)) {
        var poststr = "startRange=" + encodeURIComponent(document.srch_stock_asPer_Req.stockAmtStartRange.value)
                + "&endRange=" + encodeURIComponent(document.srch_stock_asPer_Req.stockAmtEndRange.value)
                + "&itemName=" + encodeURIComponent(document.srch_stock_asPer_Req.stockItemName.value)
                + "&stockItemMetal=" + encodeURIComponent(document.srch_stock_asPer_Req.stockItemMetal.value)
                + "&metalWt=" + encodeURIComponent(document.srch_stock_asPer_Req.selectMetalWeight.value); //TO PASS METAL WEIGHT TYPE @AUTHOR: SANDY7AUG13
        search_stock('include/php/ogilsbdv.php', poststr);
    }
}
/*******End Code To Search Stock By Requirement @AUTHOR:SANDY25OCT13*********/
/**************Start to add code to search raw stock as per search field @AUTHOR: SANDY26OCT13******************/
function valSearchRawStockByRequirement(obj) {
    if (validateEmptyField(document.srch_rawStock.stockAmtStartRange.value, "Please enter start range!") == false) {
        document.srch_rawStock.stockAmtStartRange.focus();
        return false;
    } else if (validateEmptyField(document.srch_rawStock.stockAmtEndRange.value, "Please enter end range!") == false)
    {
        document.srch_rawStock.stockAmtEndRange.focus();
        return false;
    }
    return true;
}

function search_Raw_stock(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchRawStock;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
/**********Start code to change div @Author:PRIYA06FEB14*************/
function alertSearchRawStock() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("stockByAmtRangeGoButt").style.visibility = "visible";
        document.getElementById("rawMetalStockListDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("stockByAmtRangeGoButt").style.visibility = "hidden";
    }
}
/**********End code to change div @Author:PRIYA06FEB14*************/
function searchRawStock(obj) {
    if (valSearchRawStockByRequirement(obj)) {
        var poststr = "startRange=" + encodeURIComponent(document.srch_rawStock.stockAmtStartRange.value)
                + "&endRange=" + encodeURIComponent(document.srch_rawStock.stockAmtEndRange.value)
                + "&itemName=" + encodeURIComponent(document.srch_rawStock.stockItemName.value)
                + "&stockItemMetal=" + encodeURIComponent(document.srch_rawStock.stockItemMetal.value)
                + "&metalWt=" + encodeURIComponent(document.srch_rawStock.selectMetalWeight.value)
                + "&searchPanel=" + encodeURIComponent(document.srch_rawStock.panelName.value);
        search_Raw_stock('include/php/ogrmlist.php', poststr);
    }
}
/**************End of add code to search raw stock as per search field @AUTHOR: SANDY26OCT13******************/
/*************Start to add code to navigate to customer options from cust list panel @AUTHOR: SANDY27OCT13********/
function navigateToCustSubOption(custId, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcdccdd.php?custId=" + custId + "&panel=" + panel,
            true);
    xmlhttp.send();
}
/*************End to add code to navigate to customer options from cust list panel @AUTHOR: SANDY27OCT13********/

/*********Start of changes in function @AUTHOR: SANDY9NOV13******************/
/*********Start of changes in function showSelectedPage  @AUTHOR: SANDY31OCT13******************/
/*********Start to add code to show selected page of list @AUTHOR: SANDY29OCT13******************/
/********Start to change code @AUTHOR: SANDY05FEB14*********************/
/********Start code to pass trans status in trans status list @Author:PRIYA28MAY14***************/
/*********Start code to change function @Author:PRIYA21JUN14******************/
/**********Start code to add div @Author:PRIYA24JUN14*********************/
/**********Start code to add panel @Author:PRIYA10JUL14*****************/
/**************Start code to add panel for trans list @Author:PRIYA17SEP14********************/
/*************Start code to add panel @Author:PRIYA03NOV14**************************/
/*************Start code to add panel for transfer unrelease @Author:PRIYA15DEC14****************/
/*************Start code to add panel for Auction @Author:ANUJA10MAR15****************/
/*************Start code to remove cust details panel @OMMODTAG PRIYA_28MAY15****************/
function showSelectedPage(pageNo, panel, rowsPerPage, noOfPagesAsLink, selFirmId, sortKeyword, searchColumn, searchValue, selTFirmId, gTransStatus, noOfMonth) {
    if (pageNo == 0) {
        document.getElementById('enterPageNo').value = '';
        alert("Please select correct page Number!!");
    } else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.barcode_search.barcode_text.focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (panel == 'AcitList')
                    document.getElementById("acitListDiv").innerHTML = xmlhttp.responseText;
                else if (panel == 'transList')
                    document.getElementById("transactionListDiv").innerHTML = xmlhttp.responseText;
                else
                    document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
                if (pageNo >= 10) {
                    setPageValue(pageNo, noOfPagesAsLink);
                } else {
                    document.getElementById('pageNoTextField' + pageNo).setAttribute("class", "currentPageNoButton");
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        if (panel == 'ActiveGirviList') {
            xmlhttp.open("POST", "include/php/orgpglpd.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&gTransList=" + selTFirmId, true);
        } else if (panel == 'TransferredGirviList') {
            if (validateNumWithOutAlert(selTFirmId) || selTFirmId == '') {
                xmlhttp.open("POST", "include/php/orgptrgl.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&selTFirmId=" + selTFirmId + "&gTransStatus=" + gTransStatus, true);
            } else {
                xmlhttp.open("POST", "include/php/orgptrgl.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&selMlName=" + selTFirmId + "&gTransStatus=" + gTransStatus, true);
            }
        } else if (panel == 'ExpiredGirviList') {
            xmlhttp.open("POST", "include/php/orgpexgl.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&expMonths=" + noOfMonth, true);
        } else if (panel == 'AcitList') {
            xmlhttp.open("POST", "include/php/omaiatlt.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn +
                    "&searchValue=" + searchValue + "&sNo=" + gTransStatus + "&listPanel=" + noOfMonth, true);
        } else if (panel == 'transList') {
            xmlhttp.open("POST", "include/php/omttlisd.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn +
                    "&searchValue=" + searchValue, true);
        } else if (panel == 'ReleasedGirviList') {
            xmlhttp.open("POST", "include/php/orgpregl.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue, true);
        } else if (panel == 'TPExpiredLoanList') {
            xmlhttp.open("POST", "include/php/orgptpexgl.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue + "&sNo=" + selTFirmId +
                    "&panel=" + gTransStatus, true);
        } else if (panel == 'TransferUnRelList') {
            if (validateNumWithOutAlert(selTFirmId) || selTFirmId == '') {
                xmlhttp.open("POST", "include/php/orgptgrl.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&selTFirmId=" + selTFirmId + "&gTransStatus=" + gTransStatus, true);
            } else {
                xmlhttp.open("POST", "include/php/orgptgrl.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&selMlName=" + selTFirmId + "&gTransStatus=" + gTransStatus, true);
            }
        } else if (panel == 'AuctionLoanList') {
            xmlhttp.open("POST", "include/php/orgpaucl.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue, true);
        }
        xmlhttp.send();
    }
}
/*************End code to remove cust details panel @OMMODTAG PRIYA_28MAY15****************/
/*************End code to add panel for Auction @Author:ANUJA10MAR15*****************************/
/*************End code to add panel for transfer unrelease @Author:PRIYA15DEC14****************/
/*************End code to add panel @Author:PRIYA03NOV14**************************/
/**************End code to add panel for trans list @Author:PRIYA17SEP14********************/
/**********End code to add panel @Author:PRIYA10JUL14*****************/
/**********End code to add div @Author:PRIYA24JUN14*********************/
/*********End code to change function @Author:PRIYA21JUN14******************/
/********End code to pass trans status in trans status list @Author:PRIYA28MAY14***************/
/********End to change code @AUTHOR: SANDY05FEB14*********************/
/*********End to add code to show selected page of list @AUTHOR: SANDY29OCT13******************/
/*********End of changes in function showSelectedPage @AUTHOR: SANDY31OCT13******************/
/*********End of changes in function @AUTHOR: SANDY9NOV13******************/

/*********Start of changes in function showSelPageInStockList @AUTHOR: SANDY9NOV13******************/
/*********Start of changes in function showSelPageInStockList @AUTHOR: SANDY31OCT13******************/
/*********Start To implement paging in stock list @AUTHOR: SANDY30OCT13***********************/
/*********Start code to add div @Author:PRIYA24DEC13*******************/
/*********Start code to add div @Author:PRIYA25DEC13*******************/
/*********Start code to change div @Author:PRIYA04JUN14*******************/
/*********Start code to add panel @Author:PRIYA23JUL14****************/
function showSelPageInStockList(pageNo, panel, rowsPerPage, start, end, wtTp, metalTp, metalName, noOfPagesAsLink) {
    if (pageNo == 0) {
        document.getElementById('enterPageNo').value = '';
        alert("Please select correct page Number!!");
    } else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (panel == 'CurrentRawStockList' || panel == 'RawGivenList' || panel == 'PurchaseRawStockList') {
                    document.getElementById("rawMetalStockListDiv").innerHTML = xmlhttp.responseText;
                    if (pageNo >= 10) {
                        setPageValue(pageNo, noOfPagesAsLink);
                    } else {
                        document.getElementById('pageNoTextField' + pageNo).setAttribute("class", "currentPageNoButton");
                    }
                } else if (panel == 'ItemStockList' || panel == 'PurchaseList' || panel == 'CustSellList' || panel == 'StockPanel') {
                    if (panel == 'ItemStockList') {
                        document.getElementById("addStockCurrentInvoice").innerHTML = xmlhttp.responseText;
                    } else if (panel == 'PurchaseList') {
                        document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
                    } else if (panel == 'CustSellList') {
                        document.getElementById("custSellList").innerHTML = xmlhttp.responseText;
                    }
                    if (pageNo >= 10) {
                        setPageValue(pageNo, noOfPagesAsLink);
                    } else {
                        document.getElementById('pageNoTextField' + pageNo).setAttribute("class", "currentPageNoButton");
                    }
                } else {
                    document.getElementById("repairedItemListDiv").innerHTML = xmlhttp.responseText;
                }
            }
        };
        if (panel == 'CurrentRawStockList' || panel == 'RawGivenList' || panel == 'PurchaseRawStockList') {
            xmlhttp.open("POST", "include/php/ogrmlist.php?page=" + pageNo + "&listPanel=" + panel + "&rowsPerPage=" + rowsPerPage + "&startRange=" + start + "&endRange=" + end + "&itemName=" + metalName + "&stockItemMetal=" + metalTp + "&metalWt=" + wtTp, true);
        } else if (panel == 'ItemStockList') {
            xmlhttp.open("POST", "include/php/ogilsbdv.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&startRange=" + start + "&endRange=" + end +
                    "&itemName=" + metalName + "&stockItemMetal=" + metalTp + "&metalWt=" + wtTp + "&searchPanel=" + panel + "&stockPanel=ImitationStock", true); //Add panel Imitation @Author:ANUJA17Feb15
//        }
//                else if (panel == 'ItemStockList') {
//            xmlhttp.open("POST", "include/php/ogilsbdv.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&startRange=" + start + "&endRange=" + end +
//                    "&itemName=" + metalName + "&stockItemMetal=" + metalTp + "&metalWt=" + wtTp + "&searchPanel=" + panel, true);
        } else if (panel == 'PurchaseList') {
            xmlhttp.open("POST", "include/php/ogiaprlt.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&panel=" + panel, true);
        } else if (panel == 'CustSellList') {
            xmlhttp.open("POST", "include/php/ogprstlt.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&panel=" + panel, true);
        } else {
            xmlhttp.open("POST", "include/php/ogrpilst.php?page=" + pageNo + "&panel=" + panel + "&rowsPerPage=" + rowsPerPage, true);
        }
        xmlhttp.send();
    }
}
/*********End code to add panel @Author:PRIYA23JUL14****************/
/*********End code to change div @Author:PRIYA04JUN14*******************/
/*********End code to add div @Author:PRIYA25DEC13*******************/
/*********End code to add div @Author:PRIYA24DEC13*******************/
/*******End To implement paging in stock list @AUTHOR: SANDY30OCT13***********************/
/*********End of changes in function showSelPageInStockList @AUTHOR: SANDY31OCT13******************/
/*********End of changes in function showSelPageInStockList @AUTHOR: SANDY9NOV13******************/

/*********Start of changes in function setPageValue @AUTHOR: SANDY31OCT13******************/
/*********Start to add subfunction called while paging @AUTHOR: SANDY30OCT13************/
function setPageValue(pageNo, noOfPagesAsLink) {
    var nextPageNo = pageNo;
    var prePageNo = pageNo;
    var diff = parseInt(noOfPagesAsLink) - parseInt(pageNo);
    var newPageNo = 10 - parseInt(diff);
    var prvPages = parseInt(newPageNo) - 1;
    var pageId;
    if (diff <= 5) {
        for (pageId = newPageNo; pageId <= 10; pageId++) {
            document.getElementById('pageNoTextField' + pageId).value = prePageNo;
            if (pageNo == prePageNo) {
                document.getElementById('pageNoTextField' + pageId).setAttribute("class", "currentPageNoButton");
            }
            prePageNo = parseInt(prePageNo) + 1;
        }
        for (pageId = prvPages; pageId > 0; pageId--) {
            document.getElementById('pageNoTextField' + pageId).value = parseInt(nextPageNo) - 1;
            nextPageNo = parseInt(nextPageNo) - 1;
        }
    } else {
        document.getElementById('pageNoTextField' + 5).value = pageNo;
        document.getElementById('pageNoTextField' + 5).setAttribute("class", "currentPageNoButton");
        for (pageId = 6; pageId <= 10; pageId++) {
            document.getElementById('pageNoTextField' + pageId).value = parseInt(nextPageNo) + 1;
            nextPageNo = parseInt(nextPageNo) + 1;
        }
        for (pageId = 4; pageId > 0; pageId--) {
            document.getElementById('pageNoTextField' + pageId).value = parseInt(prePageNo) - 1;
            prePageNo = parseInt(prePageNo) - 1;
        }
    }
}
/*********End to add subfunction called while paging @AUTHOR: SANDY30OCT13************/
/*********End of changes in function setPageValue @AUTHOR: SANDY31OCT13******************/

/*********Start of changes in function @AUTHOR: SANDY9NOV13******************/
/*********Start to add function to implement paging in customer list @AUTHOR: SANDY31OCT13****************/
/*******Start of changes to check page no is not zero @AUTHOR: SANDY9NOV13*****************/
/******Start of changes in function to add one more parameter @AUTHOR: SANDY19NOV13**********/
function showSelCustListPage(pageNo, noOfPages, panel, user) {
    if (parseInt(pageNo) == 0 || parseInt(pageNo) > parseInt(noOfPages)) {
        document.getElementById('enterPageNo').value = '';
        alert("Please select correct page Number!!");
    } else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajax_loading_div").style.visibility = "hidden";
                document.barcode_search.barcode_text.focus();
                document.getElementById("customerListDiv").innerHTML = xmlhttp.responseText;
                if (parseInt(pageNo) >= 10) {
                    setPageValue(pageNo, noOfPages);
                } else {
                    document.getElementById('pageNoTextField' + pageNo).setAttribute("class", "currentPageNoButton");
                }
            } else {
                document.getElementById("ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omcccslt.php?page=" + pageNo + "&noOfPages=" + noOfPages + "&user=" + user, true);
        xmlhttp.send();
    }
}
/******End of changes in function to add one more parameter @AUTHOR: SANDY19NOV13**********/
/*******End of changes to check page no is not zero @AUTHOR: SANDY9NOV13*****************/
/**********End to add function to implement paging in customer list @AUTHOR: SANDY31OCT13************/
/*********End of changes in function @AUTHOR: SANDY9NOV13******************/
/************Start of changes in function  @AUTHOR: SANDY4DEC13********************/
/************Start TO ADD function TO ADD DIFFERENT USER @AUTHOR: SANDY12NOV13********************/
function addUser(user) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainMiddleDiv").innerHTML = xmlhttp.responseText; //change in div @AUTHOR: SANDY3DEC13
            if (user == 'supplier') {
                document.getElementById('userImg').innerHTML = "<img src=images/supplierAdd32.png alt=Add Supplier Panel onload=document.add_new_supplier.supplierType.focus(); initFormName('add_new_supplier','addNewSupplier');/>";
                document.getElementById('userType').innerHTML = "ADD NEW SUPPLIER";
            } else if (user == 'staff') {
                document.getElementById('userImg').innerHTML = "<img src=images/adduser32.png alt=Add Staff Panel onload=document.add_new_staff.StaffCategory.focus(); initFormName('add_new_staff','addNewStaff');/>";
                document.getElementById('userType').innerHTML = "ADD NEW STAFF";
            } else if (user == 'moneyLender') {
                document.getElementById('userImg').innerHTML = "<img src=images/adduser32.png alt=Add MoneyLender Panel onload=document.add_new_supplier.supplierType.focus(); initFormName('add_new_supplier','addNewSupplier');/>";
                document.getElementById('userType').innerHTML = "ADD NEW MONEYLENDER";
            } else {
                document.getElementById('userImg').innerHTML = "<img src=images/adduser32.png alt=Add Customer Panel onload=document.add_new_customer.customerType.focus(); initFormName('add_new_customer','addNewCustomer');/>";
                document.getElementById('userType').innerHTML = "ADD NEW CUSTOMER";
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (user == 'supplier') {
        xmlhttp.open("GET", "include/php/ogwaspdv.php?user=" + user, true);
    } else if (user == 'staff') {
        xmlhttp.open("GET", "include/php/omeastdv.php?user=" + user, true);
    } else if (user == 'moneyLender') {
        xmlhttp.open("GET", "include/php/ormladdv.php?user=" + user, true); //change in filename @AUTHOR: SANDY18NOV13
    } else {
        xmlhttp.open("GET", "include/php/omcaadcd.php?user=" + user, true);
    }
    xmlhttp.send();
}
/************End of changes in function  @AUTHOR: SANDY4DEC13********************/
/************END TO ADD function TO ADD DIFFERENT USER @AUTHOR: SANDY12NOV13********************/

/************Start TO ADD function TO SHOW SCHEME LIST @AUTHOR: AMOL********************/
function showUserSchemeList(custId) {
//    alert("custId = "+custId);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("kittyFinDiv").innerHTML = xmlhttp.responseText; //change in div @AUTHOR: SANDY23DEC13
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omctschlist.php?custId=" + custId, true);
    xmlhttp.send();
}


function showUserSchemeListStatus(custId, status) {
    var k_upd_sts = 'Released';
    var k_mondep_upd_sts = 'Deleted';
    // alert("status="+status);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("kittyFinDiv").innerHTML = xmlhttp.responseText; //change in div @AUTHOR: SANDY23DEC13
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omctschlist.php?custId=" + custId + "&status=" + status + "&k_upd_sts=" + k_upd_sts + "&k_mondep_upd_sts=" + k_mondep_upd_sts, true);
    xmlhttp.send();
}

//
function showSchemeList(user) {
// alert(user);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText; //change in div @AUTHOR: SANDY23DEC13
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcccldv.php?user=" + user, true);
    xmlhttp.send();
}


function showSchemeListStatus(user, status) {
    var k_upd_sts = 'Released';
    var k_mondep_upd_sts = 'Deleted';
    // alert(user);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText; //change in div @AUTHOR: SANDY23DEC13
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcccldv.php?user=" + user + "&status=" + status + "&k_upd_sts=" + k_upd_sts + "&k_mondep_upd_sts=" + k_mondep_upd_sts, true);
    xmlhttp.send();
}

/************END TO ADD function TO SHOW SCHEME LIST  @AUTHOR: AMOL********************/

/************Start TO ADD function TO SHOW USER LIST @AUTHOR: SANDY13NOV13********************/
function showUserList(user) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText; //change in div @AUTHOR: SANDY23DEC13
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcccldv.php?user=" + user, true);
    xmlhttp.send();
}
/************END TO ADD function TO SHOW USER LIST  @AUTHOR: SANDY13NOV13********************/
/***********Start to add code to navigate to money lender home page @AUTHOR: SANDY13NOV13***********/
var mlId;
function setMlId(obj) {
    mlId = obj.id;
}
function getMoneyLenderDetails(panelOption) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ommlmndv.php?mlId=" + mlId + "&panelOption=" + panelOption, true); //File Name Changed @AUTHOR:PRIYA21MAY13
    xmlhttp.send();
}

/***********End to add code to navigate to money lender home page @AUTHOR: SANDY13NOV13***********/

/***********Start to add function to show home panel of moneyLender @AUTHOR: SANDY13NOV13***********/
function getMnyLenderHome() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omlhsbdv.php?mlId=" + mlId, true);
    xmlhttp.send();
}
/**********End to add function to show home panel of moneyLender @AUTHOR: SANDY13NOV13***********/
/********Start to add code to navigate to money lender update panel @AUTHOR: SANDY18DEC13*********************/
function getMlUpdateForm() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ormladdv.php?mlId=" + mlId + "&panel=" + 'Update', true);
    xmlhttp.send();
}
/********End to add code to navigate to money lender update panel @AUTHOR: SANDY18DEC13*********************/
/*********Start to add function to show money lenders add loan panel @AUTHOR: SANDY15NOV13***/
function addNewLoanPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
            //showTransferedLoanDetails(); comment @AUTHOR: SANDY27DEC13
            document.getElementById('mlPrincipalAmount').focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ormlnwln.php?mlId=" + mlId, true);
    xmlhttp.send();
}
/*********eND to add function to show money lenders add loan panel @AUTHOR: SANDY15NOV13***/
/************Start to add function to validate add new loan form @AUTHOR: SANDY15NOV13**************/
/************Start to change function to validate add new loan form @AUTHOR: SANDY08JAN14**************/
/************Start to change function to validate add new loan form @AUTHOR: SANDY31JAN14**************/
/**********Start to change code @AUTHOR: SANDY08FEB14****************************/
function  validateAddNewLoan() {
    if (validateEmptyField(document.getElementById("mlPrincipalAmount").value, "Please enter principle amount!") == false || validateNum(document.getElementById("mlPrincipalAmount").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("mlPrincipalAmount").focus();
        return false;
    } else if (validateSelectField(document.getElementById("mlAddLnFirm").value, "Please select Firm name!") == false) {
        document.getElementById("mlAddLnFirm").focus();
        return false;
    } else if (document.getElementById("mlPreSerialNumber").value != '') {
        if (validateAlpha(document.getElementById("mlPreSerialNumber").value, "Please enter Pre Serial Number without number!") == false) {
            document.getElementById("mlPreSerialNumber").focus();
            return false;
        }
    } else if (validateEmptyField(document.getElementById("mlSerialNumber").value, "Please enter Serial Number!") == false ||
            validateNum(document.getElementById("mlSerialNumber").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("mlSerialNumber").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("selTROI").value, "Please Select ROI!") == false) {
        document.getElementById("selTROI").focus();
        return false;
    } else if (validateSelectField(document.getElementById("mlAddLnDOBDay").value, "Please select Girvi Date!") == false) {
        document.getElementById("mlAddLnDOBDay").focus();
        return false;
    } else if (validateSelectField(document.getElementById("mlAddLnDOBMonth").value, "Please select Girvi Date!") == false) {
        document.getElementById("mlAddLnDOBMonth").focus();
        return false;
    } else if (validateSelectField(document.getElementById("mlAddLnDOBYear").value, "Please select Girvi Date!") == false) {
        document.getElementById("mlAddLnDOBYear").focus();
        return false;
    } else {
        var mlAddLnDOBDay = document.getElementById("mlAddLnDOBDay").value;
        var mlAddLnDOBMonth = document.getElementById("mlAddLnDOBMonth").value;
        var mlAddLnDOBYear = document.getElementById("mlAddLnDOBYear").value;
        var mlAddLnDateStr = document.getElementById("mlAddLnDOBMonth").value + ' ' + document.getElementById("mlAddLnDOBDay").value + ', ' + document.getElementById("mlAddLnDOBYear").value;
        var mlAddLnDate = new Date(mlAddLnDateStr); // Girvi Date
        var todayDate = new Date(); // Today Date
        var mlAddLnDate = mlAddLnDate.getTime();
        var milliTodayDate = todayDate.getTime();
        var datesDiff = milliTodayDate - mlAddLnDate;
        if (datesDiff < 0) {
            alert('Please Select the correct Loan Date!');
            document.getElementById("mlAddLnDOBDay").focus();
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("submit").style.visibility = "visible";
            return false;
            exit();
        } else {
            if (mlAddLnDOBMonth == 'FEB' || mlAddLnDOBMonth == 'APR' || mlAddLnDOBMonth == 'JUN' || mlAddLnDOBMonth == 'SEP' || mlAddLnDOBMonth == 'NOV') {
                if (mlAddLnDOBMonth == 'FEB' && mlAddLnDOBDay > 29 && mlAddLnDOBYear % 4 == 0) {
                    alert('Please select correct Date, Month ' + mlAddLnDOBMonth + ' for this selected year has only max 29 days.');
                    document.getElementById("mlAddLnDOBDay").focus();
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("submit").style.visibility = "visible";
                    return false;
                    exit();
                }
                if (mlAddLnDOBMonth == 'FEB' && mlAddLnDOBDay > 28 && mlAddLnDOBYear % 4 != 0) {
                    alert('Please select correct Date, Month ' + mlAddLnDOBMonth + ' for this selected year has only max 28 days.');
                    document.getElementById("mlAddLnDOBDay").focus();
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("submit").style.visibility = "visible";
                    return false;
                    exit();
                }
                if (mlAddLnDOBDay > 30) {
                    alert('Please select correct Date, Month ' + mlAddLnDOBMonth + ' has only max 30 days.');
                    document.getElementById("mlAddLnDOBDay").focus();
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("submit").style.visibility = "visible";
                    return false;
                    exit();
                }
            }
        }
    }
}
/**********End to change code @AUTHOR: SANDY08FEB14****************************/
/************End to change function to validate add new loan form @AUTHOR: SANDY31JAN14**************/
/************End to change function to validate add new loan form @AUTHOR: SANDY08JAN14**************/
/************End to add function to validate add new loan form @AUTHOR: SANDY15NOV13**************/
/*********Start to add transferred loans list in case of secured loan @AUTHOR: SANDY15NOV13***********/
function showTransferedLoanDetails() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("transferLoanDetail").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ormltrln.php", true);
    xmlhttp.send();
}
/********End to add transferred loans list in case of secured loan @AUTHOR: SANDY15NOV13******/
/*****Start of Change in function @AUTHOR: SANDY26DEC13********************/
/*******Start to add code to add more loans for transfer loan list @AUTHOR: SANDY14NOV13*****************/
var loanNo = 1;
var deletedPrinStr = '';
var prinNoToTransfer = 1;
function getMoreLoanTrDiv(count) {
    if (deletedLoanStr.length == loanNo) {
        document.getElementById("moreLoanDiv0").style.visibility = "hidden";
    }
    loanNo = parseInt(loanNo) + 1;
    document.getElementById('totalLoanTransferred').value = loanNo;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById('addMoreLnToTrList' + loanNo).innerHTML = xmlhttp.responseText;
            document.getElementById('mlLoanNo' + loanNo).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ormlsbln.php?count=" + loanNo, true);
    xmlhttp.send();
}

var deletedLoanStr = '';
function closeMoreLoanTrDiv(id) {
    deletedLoanStr = deletedLoanStr + id;
    if (deletedLoanStr.length == loanNo) {
        document.getElementById("moreLoanDiv0").style.visibility = "visible";
    }
    document.getElementById('status' + id).value = "Deleted";
    document.getElementById("transferLoanDetailsDiv" + id).innerHTML = "";
    getTotalPrinAmtTransffered();
}

function getMorePrinToTrDiv(count) {
    if (deletedPrinStr.length == prinNoToTransfer) {
        document.getElementById("morePrinDiv0").style.visibility = "hidden";
    }
    prinNoToTransfer = parseInt(prinNoToTransfer) + 1;
    document.getElementById('totalPrinTransferred').value = prinNoToTransfer;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById('transferMorePrincipalDiv' + prinNoToTransfer).innerHTML = xmlhttp.responseText;
            document.getElementById('principalId' + prinNoToTransfer).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ormlsbpr.php?count=" + prinNoToTransfer, true);
    xmlhttp.send();
}
function closeMorePrinToTrDiv(id) {
    deletedPrinStr = deletedPrinStr + id;
    if (deletedPrinStr.length == prinNoToTransfer) {
        document.getElementById("morePrinDiv0").style.visibility = "visible";
    }
    document.getElementById('prinStatus' + id).value = "Deleted";
    document.getElementById("transferPrincipalDetailsDiv" + id).innerHTML = " ";
    getAddPrinAmtTransffered();
}
/*****End of Change in function @AUTHOR: SANDY26DEC13********************/
/*******End to add code to add more metal @AUTHOR: SANDY19OCT13*****************/
/**************Start to add code for getting loan detils @AUTHOR: SANDY16NOV13**************/
/************Start to change function @AUTHOR: SANDY12DEC13***********************/
function searchLoanNoAndDet(loanNo, id, keyCode) {
    var trLoansStr = '';
    //code to avoid same loan selection
    var currentId = parseInt(id) - 1;
    while (currentId > 0) {
        if (deletedLoanStr.indexOf(currentId) < 0) {
            trLoansStr = trLoansStr + document.getElementById("mlLoanNo" + currentId).value;
        } else {
            trLoansStr = trLoansStr;
        }
        currentId = parseInt(currentId) - 1;
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mlLoanNoList" + id).innerHTML = xmlhttp.responseText;
            if (keyCode == 40 || keyCode == 38) {
                document.getElementById('mlLoanNoListDiv').focus();
                document.getElementById('mlLoanNoListDiv').options[0].selected = true;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orlnlist.php?id=" + id + "&keyCode=" + keyCode + "&loanNo=" + loanNo + "&trLoansStr=" + trLoansStr, true);
    xmlhttp.send();
}
/************End to change function @AUTHOR: SANDY12DEC13***********************/
/************Start to change function @AUTHOR: SANDY26DEC13**********************/

function getTotalPrinAmtTransffered() {
    var totPrinAmtTransferred = 0;
    var prinNo = loanNo;
    while (parseInt(prinNo) > 0) {
        if (document.getElementById('status' + prinNo).value != 'Deleted') {
            totPrinAmtTransferred = parseInt(totPrinAmtTransferred) + parseInt(document.getElementById('mlPrinAmt' + prinNo).value);
        }
        prinNo = parseInt(prinNo) - 1;
    }
    if (deletedLoanStr.length == loanNo) {
        document.getElementById("totTransAmtLabel").innerHTML = '';
    }
    if (totPrinAmtTransferred != '0') {
        document.getElementById('totTransAmtLabel').innerHTML = Math_round(parseFloat(totPrinAmtTransferred)).toFixed(2);
    }
    if (parseFloat(document.getElementById("mlPrincipalAmount").value) < parseFloat(totPrinAmtTransferred)) {
        alert("Total Amount transferred is greater than Loan amount!");
    }

    return false;
}

function getAddPrinAmtTransffered() {
    var totAdditionalPrinTrans = 0;
    var prinNo = prinNoToTransfer;
    while (prinNo > 0) {
        if (document.getElementById('prinStatus' + prinNo).value != 'Deleted') {
            totAdditionalPrinTrans = parseInt(totAdditionalPrinTrans) + parseInt(document.getElementById('prinPrinAmt' + prinNo).value);
        }
        prinNo = parseInt(prinNo) - 1;
    }
    if (deletedPrinStr.length == prinNoToTransfer) {
        document.getElementById("totAddPrinLabel").innerHTML = '';
    }
    if (totAdditionalPrinTrans != '0') {
        document.getElementById('totAddPrinLabel').innerHTML = Math_round(parseFloat(totAdditionalPrinTrans)).toFixed(2);
    }
    if (parseFloat(document.getElementById("mlPrincipalAmount").value) < parseFloat(totAdditionalPrinTrans)) {
        alert("Total Amount transferred is greater than Loan amount!");
    }
    return false;
}
/**********End to change function @AUTHOR: SANDY26DEC13***********************/
/**************End to add code for getting loan detils @AUTHOR: SANDY16NOV13**************/

/***********Start to add function to display loan information @AUTHOR: SANDY15NOV13***********/
function lenderLoanDetails() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ormllndt.php?mlId=" + mlId, true);
    xmlhttp.send();
}
/***********End to add function to display loan information @AUTHOR: SANDY15NOV13***********/
/***********Start to add function to display firm loan no @AUTHOR: SANDY15NOV13***********/
/***Start to change code @AUTHOR: SANDY20JAN14********************/
var selFirmId;
var transType;
var dRoot;
function get_firmLoanNo(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertGetFirmLoanNo;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
/********Start code to aff function for serial no @Author:PRIYA21JAN15***************/


function alertGetFirmLoanNo() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mlAddLnFirmLnNumber").value = xmlhttp.responseText;
        getMLFirmSerialNo(dRoot, selFirmId, 'AddNewMlLoan', transType);
//        getMLFirmLoanNo(selFirmId, 'AddNewMlLoan', transType)//function added @Author:PRIYA23MAY14
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/********End code to aff function for serial no @Author:PRIYA21JAN15***************/
function getFirmLoanNo(documentRoot, firmId, crdrType) {
    dRoot = documentRoot;
    selFirmId = firmId.value;
    transType = crdrType;
    var poststr = "firmNo=" + encodeURIComponent(selFirmId);
    get_firmLoanNo('include/php/ommpgtpk.php', poststr);
}
/***End to change code @AUTHOR: SANDY20JAN14********************/
/***********End to add function to display firm loan no @AUTHOR: SANDY15NOV13***********/
/***********Start to add function getDetailsOfSelectedLoan @AUTHOR: SANDY16NOV13***********/
/**********Start to make changes in function @AUTHOR: SANDY03JAN14**************/
function getDetailsOfSelectedLoan(loanNo, id, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (panel == 'Update') {
                document.getElementById("addMoreLoanInUpdateDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("transferLoanDetailsDiv" + id).innerHTML = xmlhttp.responseText;
                document.getElementById('moreLoanClose' + id).focus(); //@AUTHOR: SANDY11JAN14
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ormlgvdt.php?loanNo=" + loanNo + "&id=" + id + "&panel=" + panel, true);
    xmlhttp.send();
}
/*********End to make changes in function  @AUTHOR: SANDY03JAN14***************/
/***********Start to add function getDetailsOfSelectedLoan @AUTHOR: SANDY16NOV13***********/
/*******Start to add function to change monthly interest option in ml loan info panel @AUTHOR: SANDY16NOV13*******/
/******Start to change functions @AUTHOR: SANDY30NOV13******************/
function change_MlLoan_Monthly_Int_Opt(url, parameters) {

    loadXMLDoc2();
    xmlhttp2.onreadystatechange = alertChangeMlLoanMonthlyIntOpt;
    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.send(parameters);
}

function alertChangeMlLoanMonthlyIntOpt() {

    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("loanTotAmtDiv").innerHTML = xmlhttp2.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function change_MlLoan_monthly_int_option_db(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertChangeMlLoanMonthlyIntOptionDb;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);
}
function alertChangeMlLoanMonthlyIntOptionDb() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadGirviMonthlyIntOptChangeDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadGirviMonthlyIntOptChangeDiv").innerHTML = "<img src='images/right16.png' />";
        window.setTimeout(closeMonthlyIntOptionChangeDiv, 1000);
        document.getElementById("ajaxLoadGirviMonthlyIntOptChangeDiv").style.visibility = "visible";
    } else {
        document.getElementById("ajaxLoadGirviMonthlyIntOptChangeDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadGirviMonthlyIntOptChangeDiv").innerHTML = "<img src='images/loading16.gif' />";
    }
}
function closeMonthlyIntOptionChangeDiv()
{
    document.getElementById("ajaxLoadGirviMonthlyIntOptChangeDiv").style.visibility = "hidden";
}
function changeMlLoanMonthlyIntOpt(documentRootPath, simpleOrCompIntOption, girviCompoundedOption, omPanelDiv, grvRelPayDetails, selMonthlyIntOpt, princAmount, ROIValue, interestType, girviDate, girviType, girviId, custId, girviStatus) {

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    var selectedROIValue = ROIValue;
    var relDateDDValue;
    var relDateMMValue;
    var relDateYYValue;
    if (girviStatus == 'Released' || girviStatus == 'New') {
        relDateDDValue = '';
        relDateMMValue = '';
        relDateYYValue = '';
    }

    var poststr = "gMonthIntOption=" + selMonthlyIntOpt.value + "&princAmount=" + princAmount
            + "&ROIValue=" + selectedROIValue + "&interestType=" + interestType.value
            + "&girviDate=" + girviDate + "&girviId=" + girviId + "&custId=" + custId + "&omPanelDiv=" + omPanelDiv
            + "&girviType=" + girviType + "&grvRelPayDetails=" + grvRelPayDetails + "&girviStatus=" + girviStatus
            + "&relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue
            + "&simpleOrCompIntOption=" + simpleOrCompIntOption + "&girviCompoundedOption=" + girviCompoundedOption + "&girviAddROINotChange=No";
    if (girviType == 'Transferred') {
        change_MlLoan_Monthly_Int_Opt('http://' + documentRootPath + '/include/php/olgggtta.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
    } else {
        change_MlLoan_Monthly_Int_Opt('http://' + documentRootPath + '/include/php/ormlttam.php', poststr);
    }
    change_MlLoan_monthly_int_option_db('http://' + documentRootPath + '/include/php/olgumidb.php', poststr); //change in filename @AUTHOR: SANDY22NOV13
    return false;
}
/******End to change functions @AUTHOR: SANDY30NOV13******************/
/*******End to add function to change monthly interest option in ml loan info panel @AUTHOR: SANDY16NOV13*******/
/*******Start to add function to change interest TYPE option in ml loan info panel @AUTHOR: SANDY21NOV13*******/
function change_ml_int_type_opt(url, parameters) {
    loadXMLDoc2();
    xmlhttp2.onreadystatechange = alertChangeMlIntTypeOpt;
    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.send(parameters);
}

function alertChangeMlIntTypeOpt() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "hidden";
        document.getElementById("loanTotAmtDiv").innerHTML = xmlhttp2.responseText;
    } else {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    }
}
function change_ml_int_type_option_db(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertChangeMlIntTypeOptionDB;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);
}

function alertChangeMlIntTypeOptionDB() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        if (document.getElementById('simpleOrCompIntOption').value == 'Simple') {
            document.getElementById("girviCompoundedOptionDiv").style.visibility = "hidden";
        } else {
            document.getElementById("girviCompoundedOptionDiv").style.visibility = "visible";
        }
        document.getElementById("ajaxLoadGirviIntOptChangeDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadGirviIntOptChangeDiv").innerHTML = "<img src='images/right16.png' />";
        window.setTimeout(closeGirviIntOptChangeDiv, 1000);
        document.getElementById("ajaxLoadGirviIntOptChangeDiv").style.visibility = "visible";
    } else {
        document.getElementById("ajaxLoadGirviIntOptChangeDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadGirviIntOptChangeDiv").innerHTML = "<img src='images/loading16.gif' />";
    }
}
function changeMlIntTypeOpt(documentRootPath, simpleOrCompIntOption, girviCompoundedOption, omPanelDiv, grvRelPayDetails, selMonthlyIntOpt, princAmount, ROIValue, interestType, girviDate, girviType, girviId, custId, girviStatus) {

    document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    var selectedROIValue = ROIValue;
    var relDateDDValue;
    var relDateMMValue;
    var relDateYYValue;
    if (girviStatus == 'Released' || girviStatus == 'New') {
        relDateDDValue = '';
        relDateMMValue = '';
        relDateYYValue = '';
    }

    var poststr = "gMonthIntOption=" + selMonthlyIntOpt.value + "&princAmount=" + princAmount
            + "&ROIValue=" + selectedROIValue + "&interestType=" + interestType.value
            + "&girviDate=" + girviDate + "&girviId=" + girviId + "&custId=" + custId + "&omPanelDiv=" + omPanelDiv
            + "&girviType=" + girviType + "&grvRelPayDetails=" + grvRelPayDetails + "&girviStatus=" + girviStatus
            + "&relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue
            + "&simpleOrCompIntOption=" + simpleOrCompIntOption + "&girviCompoundedOption=" + girviCompoundedOption + "&girviAddROINotChange=No";
    if (girviType == 'Transferred') {
        change_ml_int_type_opt('http://' + documentRootPath + '/include/php/olggttam.php', poststr); //CHANGE IN FILENAME @AUTHOR: SANDY17DEC13
    } else {
        change_ml_int_type_opt('http://' + documentRootPath + '/include/php/ormlttam.php', poststr); //CHANGE IN FILENAME @AUTHOR: SANDY28DEC13
    }
    change_ml_int_type_option_db('http://' + documentRootPath + '/include/php/olguindb.php', poststr);
    return false;
}
/*******End to add function to change interest TYPE option in ml loan info panel @AUTHOR: SANDY21NOV13*******/
/*******Start to add function to change compound interest TYPE option in ml loan info panel @AUTHOR: SANDY21NOV13*******/
function change_ml_compounded_option_db(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertChangeMlCompoundedOptionDB;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);
}

function alertChangeMlCompoundedOptionDB() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadGirviCompoundedOptChangeDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadGirviCompoundedOptChangeDiv").innerHTML = "<img src='images/right16.png' />";
        window.setTimeout(closeCompoundedOptChangeDiv, 1000);
        document.getElementById("ajaxLoadGirviCompoundedOptChangeDiv").style.visibility = "visible";
    } else {
        document.getElementById("ajaxLoadGirviCompoundedOptChangeDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadGirviCompoundedOptChangeDiv").innerHTML = "<img src='images/loading16.gif' />";
    }
}
function changeMlIntCompoundedOpt(documentRootPath, simpleOrCompIntOption, girviCompoundedOption, omPanelDiv, grvRelPayDetails, selMonthlyIntOpt, princAmount, ROIValue, interestType, girviDate, girviType, girviId, custId, girviStatus) {

    document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    var selectedROIValue = ROIValue;
    var relDateDDValue;
    var relDateMMValue;
    var relDateYYValue;
    if (girviStatus == 'Released' || girviStatus == 'New') {
        relDateDDValue = '';
        relDateMMValue = '';
        relDateYYValue = '';
    }

    var poststr = "gMonthIntOption=" + selMonthlyIntOpt.value + "&princAmount=" + princAmount
            + "&ROIValue=" + selectedROIValue + "&interestType=" + interestType.value
            + "&girviDate=" + girviDate + "&girviId=" + girviId + "&custId=" + custId + "&omPanelDiv=" + omPanelDiv
            + "&girviType=" + girviType + "&grvRelPayDetails=" + grvRelPayDetails + "&girviStatus=" + girviStatus
            + "&relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue
            + "&simpleOrCompIntOption=" + simpleOrCompIntOption + "&girviCompoundedOption=" + girviCompoundedOption + "&girviAddROINotChange=No";
    if (girviType == 'Transferred') {
        change_ml_int_type_opt('http://' + documentRootPath + '/include/php/ormlttam.php', poststr); //CHANGE IN FILENAME @AUTHOR: SANDY28DEC13
    } else {
        change_ml_int_type_opt('http://' + documentRootPath + '/include/php/ormlttam.php', poststr); //CHANGE IN FILENAME @AUTHOR: SANDY28DEC13
    }
    change_ml_compounded_option_db('http://' + documentRootPath + '/include/php/olgucmdb.php', poststr); //change in filename @AUTHOR: SANDY21NOV13
    return false;
}
/*******End to add function to change compound interest TYPE option in ml loan info panel @AUTHOR: SANDY21NOV13*******/
/*******Start to add function to delete money lender loan @AUTHOR: SANDY21NOV13************/
/****Start to change function @AUTHOR: SANDY27DEC13************/
function deleteLoanDetails(loanId, mlId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ormllndl.php?loanId=" + loanId + "&mlId=" + mlId, true);
    xmlhttp.send();
}
/****End to change function @AUTHOR: SANDY27DEC13************/
/**********Start code to add var @Author:PRIYA07JUL14************/
function deleteLoan(loanId, mlId, serialNum, loanDOB, girviFirmId, prinAmt) {
    confirm_box = confirm(deleteAlertMess + "\nDo you really want to Permanent Delete this Loan?");
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/ormlndel.php?loanId=" + loanId + "&mlId=" + mlId + "&serialNum=" + serialNum + "&loanDOB=" + loanDOB +
                "&girviFirmId=" + girviFirmId + "&prinAmt=" + prinAmt, true);
        xmlhttp.send();
    }
}
/**********End code to add var @Author:PRIYA07JUL14************/
/*******End to add function to delete money lender loan @AUTHOR: SANDY21NOV13************/
/********Start to add function to show update panel @AUTHOR: SANDY24NOV13*******/
function updateLoanDetails(mlId, loanId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ormlupln.php?loanId=" + loanId + "&mlId=" + mlId, true);
    xmlhttp.send();
}
/********End to add function to show update panel @AUTHOR: SANDY24NOV13*******/
/********Start to add code to update Principal @AUTHOR: SANDY24NOV13**************/
function update_loan_principal_amount(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateLoanPrincipalAmount;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertUpdateLoanPrincipalAmount() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
    }
}
/**************Start code to add param @Author:PRIYA07JUL14**************/
function updateLoanPrincipalAmount(documentRootPath, mlId, loanId, prinAmount, loanJrnlId, girviDOB, girviSerialNum, girviFirmId) {

    document.getElementById("updatePrincipalButton").style.visibility = "hidden";
    var principalAmount = prinAmount.value;
    if (validateEmptyField(principalAmount, "Please enter Principal Amount!") == false ||
            validateNum(principalAmount, "Accept only numeric characters without space character!") == false) {
        document.getElementById("updatePrincipalAmount").focus();
        document.getElementById("updatePrincipalButton").style.visibility = "visible";
        return false;
    } else {

        confirm_box = confirm(updateAlertMess + "\nDo you really want to update Principal Amount?"); //change in line @AUTHOR: SANDY28JAN14

        if (confirm_box == true)
        {

            var poststr = "mlId=" + mlId + "&loanId=" + loanId
                    + "&principalAmount=" + principalAmount
                    + "&loanJrnlId=" + loanJrnlId
                    + "&girviDOB=" + girviDOB
                    + "&girviSerialNum=" + girviSerialNum
                    + "&girviFirmId=" + girviFirmId;
            update_loan_principal_amount('http://' + documentRootPath + '/include/php/ormlupam.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
        }
    }
    document.getElementById("updatePrincipalButton").style.visibility = "visible";
    return false;
}
/**************End code to add param @Author:PRIYA07JUL14**************/
/********End to add code to update principal @AUTHOR: SANDY24NOV13**************/
/********Start to add code to update date @AUTHOR: SANDY24NOV13**************/
function update_loan_DOB_amount(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateLoanDOBAmount;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertUpdateLoanDOBAmount() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
    }
}
/*********Start to change function @AUTHOR: SANDY08FEB14********************/
/**************Start code to add param @Author:PRIYA07JUL14**************/
function updateLoanDOBAmount(documentRootPath, mlId, loanId, DOBDay, DOBMonth, DOBYear, jrnlId, girviDOB, girviSerialNum, girviFirmId) {
    document.getElementById("updateGirviDOBButton").style.visibility = "hidden";
    var girviDOBDay = DOBDay.value;
    var girviDOBMonth = DOBMonth.value;
    var girviDOBYear = DOBYear.value;
    var mlAddLnDateStr = DOBMonth.value + ' ' + DOBDay.value + ', ' + DOBYear.value;
    var mlAddLnDate = new Date(mlAddLnDateStr); // Girvi Date
    var todayDate = new Date(); // Today Date
    var mlAddLnDate = mlAddLnDate.getTime();
    var milliTodayDate = todayDate.getTime();
    var datesDiff = milliTodayDate - mlAddLnDate;
    if (validateSelectField(girviDOBDay, "Please select Girvi Date Day!") == false) {
        document.getElementById("DOBDay").focus();
        document.getElementById("updateGirviDOBButton").style.visibility = "visible";
        return false;
    } else if (validateSelectField(girviDOBMonth, "Please select Girvi Date Month!") == false) {
        document.getElementById("DOBMonth").focus();
        document.getElementById("updateGirviDOBButton").style.visibility = "visible";
        return false;
    } else if (validateSelectField(girviDOBYear, "Please select Girvi Date Year!") == false) {
        document.getElementById("DOBYear").focus();
        document.getElementById("updateGirviDOBButton").style.visibility = "visible";
        return false;
    } else if (datesDiff < 0) {
        alert('Please Select the correct Loan Date!');
        document.getElementById("mlAddLnDOBDay").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("submit").style.visibility = "visible";
        return false;
        exit();
    } else {
        confirm_box = confirm(updateAlertMess + "\nDo you really want to update Loan Date?"); //change in line @AUTHOR: SANDY28JAN14
        if (confirm_box == true)
        {
            var poststr = "mlId=" + mlId + "&loanId=" + loanId
                    + "&loanDOBDay=" + girviDOBDay + "&loanDOBMonth=" + girviDOBMonth
                    + "&loanDOBYear=" + girviDOBYear
                    + "&jrnlId=" + jrnlId
                    + "&girviDOB=" + girviDOB
                    + "&girviSerialNum=" + girviSerialNum
                    + "&girviFirmId=" + girviFirmId;
            update_loan_DOB_amount('http://' + documentRootPath + '/include/php/ormlupdd.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
        }
    }
    document.getElementById("updateGirviDOBButton").style.visibility = "visible";
    return false;
}
/**************End code to add param @Author:PRIYA07JUL14**************/
/*********End to change function @AUTHOR: SANDY08FEB14********************/
/********End to add code to update date @AUTHOR: SANDY24NOV13**************/
/********Start to add code to update serial number @AUTHOR: SANDY24NOV13**************/
function update_loan_serial_num(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateLoanSerialNum;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertUpdateLoanSerialNum() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        if (xmlhttp.responseText == 'SerialNumAlreadyExist') {
            document.getElementById("updateGirviSerialNumAlreadyExistMessage").style.visibility = "visible";
        } else {
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
        }
    }
}
/**********Start code to add loanType @Author:PRIYA15JAN15****************/
function updateLoanSerialNum(documentRootPath, mlId, loanId, loanPreSerialNo, loanSerialNo, loanDOB, loanFirmId, prinAmt, loanType) {

    document.getElementById("updateGirviSerialNumAlreadyExistMessage").style.visibility = "hidden";
    document.getElementById("updateGirviSerialNoButton").style.visibility = "hidden";
    var loanSerialNum = loanSerialNo.value;
    var loanPreSerialNo = loanPreSerialNo.value;
    if (validateEmptyField(loanSerialNum, "Please enter Serial Number!") == false ||
            validateNum(loanSerialNum, "Accept only numeric characters without space character!") == false) {
        document.getElementById("girviSerialNum").focus();
        document.getElementById("updateGirviSerialNoButton").style.visibility = "visible";
        return false;
    } else if ((loanPreSerialNo != '') && validateAlpha(loanPreSerialNo, "Accept only Alpha characters without space character!") == false) {
        document.getElementById("girviPreSerialNo").focus();
        document.getElementById("updateGirviSerialNoButton").style.visibility = "visible";
        return false;
    } else {
        confirm_box = confirm(updateAlertMess + "\nDo you really want to update Serial Number?"); //change in line @AUTHOR: SANDY28JAN14

        if (confirm_box == true)
        {
            var poststr = "mlId=" + mlId + "&loanId=" + loanId
                    + "&loanSerialNum=" + loanSerialNum
                    + "&loanPreSerialNum=" + loanPreSerialNo
                    + "&loanDOB=" + loanDOB
                    + "&loanFirmId=" + loanFirmId
                    + "&prinAmt=" + prinAmt
                    + "&loanType=" + loanType;
            update_loan_serial_num('http://' + documentRootPath + '/include/php/ormlupsn.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
        }
    }
    document.getElementById("updateGirviSerialNoButton").style.visibility = "visible";
    return false;
}
/**********End code to add loanType @Author:PRIYA15JAN15****************/
/********End to add code to update serial number @AUTHOR: SANDY24NOV13**************/
/************Start to add function to update loan other info  @AUTHOR: SANDY24NOV13**************/
function update_loan_other_info(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateLoanOtherInfo;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertUpdateLoanOtherInfo() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
    }
}
function updateLoanOtherInfo(documentRootPath, mlId, loanId, loanOtherInfo, girviDOB, girviFirmId, girviSerialNum) {
    confirm_box = confirm(updateAlertMess + "\nDo you really want to add or update other info?"); //change in line @AUTHOR: SANDY28JAN14

    if (confirm_box == true)
    {
        if (validateUpdateGirviOtherInfo()) {
            var poststr = "mlId=" + mlId + "&loanId=" + loanId
                    + "&loanOtherInfo=" + loanOtherInfo
                    + "&girviDOB=" + girviDOB
                    + "&girviSerialNum=" + girviSerialNum
                    + "&girviFirmId=" + girviFirmId;
            update_loan_other_info('http://' + documentRootPath + '/include/php/ormlupoi.php', poststr);
        }
    } else {
        document.getElementById("ajaxUpdateGirviOtherInfoButt").innerHTML = "<img src='images/updateButt.png' />";
    }
    return false;
}
/************End to add function to update loan other info  @AUTHOR: SANDY24NOV13**************/
/*******Start to add function show loan details div @AUTHOR: SANDY24NOV13*********/
function getLoanInfoPopUp(mlId, loanId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("display_loan_info_popup" + loanId).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("display_loan_info_popup" + loanId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ormlrecp.php?mlId=" + mlId + "&loanId=" + loanId, true); //change in filename @AUTHOR: SANDY22NOV13
    xmlhttp.send();
}
/*******End to add function  to show loan details div @AUTHOR: SANDY24NOV13*********/
/*******Start to add function to hide loan details div @AUTHOR: SANDY26NOV13*********/
function getLoanInfoPopUpHide(loanId) {
    document.getElementById("display_loan_info_popup" + loanId).innerHTML = '';
}
/*******End to add function to hide loan details div @AUTHOR: SANDY26NOV13*********/
/*****Start to add code to deposit money @AUTHOR: SANDY24NOV13***********/
function showLoanDepositMoneyDiv(mlId, loanId, totalPrincipalAmount, totalFinalInterest, principalAmt, girviDOB, girviType, girviUpdSts) {
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
    xmlhttp.open("POST", "include/php/ormldpmn.php?mlId=" + mlId + "&loanId=" + loanId + "&totalPrincipalAmount=" + totalPrincipalAmount + "&totalFinalInterest=" + totalFinalInterest + "&principalAmt=" + principalAmt + "&girviDOB=" + girviDOB + "&girviType=" + girviType + "&girviStatus=" + girviUpdSts, true); //change in filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
/*****End to add code to deposit money @AUTHOR: SANDY24NOV13***********/
/*********Start to add code for depositfunctions in money lender update panel @AUTHOR: SANDY25NOV13*******/
var loanDepositMonOpt;
function setLoanDepositMoneyOption(loanDepMonOpt) {
    loanDepositMonOpt = loanDepMonOpt;
}
function validateUpdateLoanDepositMoneyInputs(obj) {

    if (document.getElementById("loanDepositPrinAmount").value != '' || document.getElementById("loanDepositIntAmount").value != '') {
        if (document.getElementById("loanDepositPrinAmount").value != '') {
            if (validateNumWithDot(document.getElementById("loanDepositPrinAmount").value, "Accept only numeric characters without space character!") == false) {
                document.getElementById("loanDepositPrinAmount").focus();
                return false;
            }
        }
        if (document.getElementById("loanDepositIntAmount").value != '') {
            if (validateNumWithDot(document.getElementById("loanDepositIntAmount").value, "Accept only numeric characters without space character!") == false) {
                document.getElementById("loanDepositIntAmount").focus();
                return false;
            }
        }
    } else {
        if (document.getElementById("loanDepositPrinAmount").value == '' || document.getElementById("loanDepositIntAmount").value == '') {
            alert("Please enter Principal Deposit or Interest Deposit Amount!");
            document.getElementById("loanDepositPrinAmount").focus();
            return false;
        }
    }
    if (validateSelectField(document.getElementById("DMDOBDay").value, "Please select Deposit Amount Date!") == false) {
        document.getElementById("DMDOBDay").focus();
        return false;
    } else if (validateSelectField(document.getElementById("DMDOBMonth").value, "Please select Deposit Amount Date!") == false) {
        document.getElementById("DMDOBMonth").focus();
        return false;
    } else if (validateSelectField(document.getElementById("DMDOBYear").value, "Please select Deposit Amount Date!") == false) {
        document.getElementById("DMDOBYear").focus();
        return false;
    }

    var loanDateDay = document.getElementById("DMDOBDay").value;
    var loanDateMMM = document.getElementById("DMDOBMonth").value;
    var loanDateYY = document.getElementById("DMDOBYear").value;
    var loanDepDateStr = document.getElementById("DMDOBMonth").value + ' ' + document.getElementById("DMDOBDay").value + ', ' + document.getElementById("DMDOBYear").value;
    var loanDepDate = new Date(loanDepDateStr); // Girvi Deposit Date
    var loanDateStr = document.getElementById("loanNewDateForUpdate").value;
    var loanMainDateStr = new Date(loanDateStr); //Girvi Main Date

    var milliGirviDepDate = loanDepDate.getTime();
    var milliGirviDate = loanMainDateStr.getTime();
    var datesDiff = milliGirviDepDate - milliGirviDate;
    if (datesDiff < 0) {
        alert('Please Select the correct Loan Deposit Date!');
        document.getElementById("DMDOBDay").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        //document.getElementById("addGirviSubButDiv").style.visibility = "visible";
        return false;
        exit();
    } else {
        if (loanDateMMM == 'FEB' || loanDateMMM == 'APR' || loanDateMMM == 'JUN' || loanDateMMM == 'SEP' || loanDateMMM == 'NOV') {
            if (loanDateMMM == 'FEB' && loanDateDay > 29 && loanDateYY % 4 == 0) {
                alert('Please select correct Date, Month ' + loanDateMMM + ' for this selected year has only max 29 days.');
                document.getElementById("DMDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                //document.getElementById("addGirviSubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
            if (loanDateMMM == 'FEB' && loanDateDay > 28 && loanDateYY % 4 != 0) {
                alert('Please select correct Date, Month ' + loanDateMMM + ' for this selected year has only max 28 days.');
                document.getElementById("DMDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                //document.getElementById("addGirviSubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
            if (loanDateDay > 30) {
                alert('Please select correct Date, Month ' + loanDateMMM + ' has only max 30 days.');
                document.getElementById("DMDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                //document.getElementById("addGirviSubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
        }

        return true;
    }
}
function update_loan_deposit_money(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateLoanDepositMoney;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertUpdateLoanDepositMoney() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
        if (loanDepositMonOpt == 'SimplyDeposit') {
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
        } else if (loanDepositMonOpt == 'CalculateNow') {
            document.getElementById("depositMoneyDiv").innerHTML = xmlhttp.responseText;
        } else if (loanDepositMonOpt == 'Help') {
            document.getElementById("loanMoneyDepHelpDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("depositMoneyDiv").innerHTML = xmlhttp.responseText;
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/*********Start code to change Id @Author:PRIYA26FEB14**********/
function updateLoanDepositMoney(obj) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("loanUpdateDepMoneyButDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "visible";
    var loanIntAdjustmentCheck = 'False';
    if (document.getElementById("loanIntAdjustment").checked == true) {
        loanIntAdjustmentCheck = 'True';
    }
    if (loanDepositMonOpt == 'Help') {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("loanUpdateDepMoneyButDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
        update_loan_deposit_money('include/php/orgggmdh.php', '');
    } else {
        if (validateUpdateLoanDepositMoneyInputs(obj)) {
            var poststr = "lenderId=" + encodeURIComponent(document.getElementById("mLenderId").value)
                    + "&loanId=" + encodeURIComponent(document.getElementById("loanId").value)
                    + "&loanNewDateForUpdate=" + encodeURIComponent(document.getElementById("loanNewDateForUpdate").value)
                    + "&loanTimePeriodVar=" + encodeURIComponent(document.getElementById("girviTimePeriodVar").value)
                    + "&loanDepositPrinAmount=" + encodeURIComponent(document.getElementById("loanDepositPrinAmount").value)
                    + "&loanDepositIntAmount=" + encodeURIComponent(document.getElementById("loanDepositIntAmount").value)
                    + "&ROIValue=" + encodeURIComponent(document.getElementById("selTROI").value) //selTROI Id CHANGED @AUTHOR: SANDY06JAN14
                    + "&intType=" + encodeURIComponent(document.getElementById("interestType").value)
                    + "&totalPrincipalAmount=" + encodeURIComponent(document.getElementById("mlTotalPrincipalAmount").value)
                    + "&totalInterestAmount=" + encodeURIComponent(document.getElementById("mlTotalInterestAmount").value)

                    + "&DOBDay=" + encodeURIComponent(document.getElementById("DMDOBDay").value)
                    + "&DOBMonth=" + encodeURIComponent(document.getElementById("DMDOBMonth").value)
                    + "&DOBYear=" + encodeURIComponent(document.getElementById("DMDOBYear").value)

                    + "&simpleOrCompIntOption=" + encodeURIComponent(document.getElementById("simpleOrCompIntOption").value)
                    + "&loanCompoundedOption=" + encodeURIComponent(document.getElementById("girviCompoundedOption").value)
                    + "&loanIntAdjustmentCheck=" + encodeURIComponent(loanIntAdjustmentCheck)
                    + "&loanDepositMonOpt=" + encodeURIComponent(loanDepositMonOpt);
            if (loanDepositMonOpt == 'SimplyDeposit') {
                update_loan_deposit_money('include/php/orludmsm.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
            } else if (loanDepositMonOpt == 'CalculateNow') {
                update_loan_deposit_money('include/php/orludmcn.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
            } else if (loanDepositMonOpt == 'DepositFullInt') {
                update_loan_deposit_money('include/php/orludmfi.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
            } else if (loanDepositMonOpt == 'DepositIntWithDis') {
                update_loan_deposit_money('include/php/orludmds.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
            } else if (loanDepositMonOpt == 'DepositIntAmtLeft') {
                update_loan_deposit_money('include/php/orludmnd.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
            } else if (loanDepositMonOpt == 'DepositIntAdjInPrin') {
                update_loan_deposit_money('include/php/orludmap.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("loanUpdateDepMoneyButDiv").style.visibility = "visible";
            document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
        }
    }

}
/*********End code to change Id @Author:PRIYA26FEB14**********/
/*****Start to change function @AUTHOR: SANDY03JAN14 ************/
function showAddMoreLoanDiv(mlId, loanSerNo, loanId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddMoreLoan").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddMoreLoan").style.visibility = "visible";
            document.getElementById("addMoreLoanDiv").innerHTML = xmlhttp.responseText;
            // document.getElementById("loanDepositPrinAmount").focus();COMMENT @AUTHOR: SANDY03JAN14
        } else {
            document.getElementById("ajaxLoadAddMoreLoan").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ormlmrln.php?mlId=" + mlId + "&loanId=" + loanId + "&loanSerNo=" + loanSerNo, true); //change in filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
/*****End to change function @AUTHOR: SANDY03JAN14 ************/
function loan_deposit_money_submit(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertLoanDepositMoneySubmit;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertLoanDepositMoneySubmit() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
        document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function loanDepositMoneySubmit(documentRootPath, lenderId, loanId, newPrincipalAmount, loanDepositPrinAmount, loanDepositIntAmount, loanRealIntAmount, totalAmountDep, depDiscountAmt, loanDepositDate, newGirviDate, loanComm, simpleOrCompIntOption, loanCompoundedOption, interestType, loanDepositMonOpt) {
    document.getElementById("loanUpdateDepMoneySubmitDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "visible";
    confirm_box = confirm(updateAlertMess + "\nDo you really want to update this Loan?"); //change in line @AUTHOR: SANDY28JAN14

    if (confirm_box == true)
    {
        var poststr = "lenderId=" + lenderId +
                "&loanId=" + loanId +
                "&newPrincipalAmount=" + newPrincipalAmount +
                "&loanDepositPrinAmount=" + loanDepositPrinAmount +
                "&loanDepositIntAmount=" + loanDepositIntAmount +
                "&loanRealIntAmount=" + loanRealIntAmount +
                "&totalAmountDep=" + totalAmountDep +
                "&depDiscountAmt=" + depDiscountAmt +
                "&loanDepositDate=" + loanDepositDate +
                "&newGirviDate=" + newGirviDate +
                "&loanComm=" + encodeURIComponent(loanComm) +
                "&simpleOrCompIntOption=" + simpleOrCompIntOption +
                "&loanCompoundedOption=" + loanCompoundedOption +
                "&interestType=" + interestType +
                "&loanDepositMonOpt=" + loanDepositMonOpt;
        loan_deposit_money_submit('http://' + documentRootPath + '/include/php/orludmd.php', poststr);
    }

    document.getElementById("loanUpdateDepMoneySubmitDiv").style.visibility = "visible";
    document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
    return false;
}
/*******Start to change function TO ADD CODE for girvi transfer panel @AUTHOR: SANDY27DEC13******/
function searchMoreLoanToTransfer(loanNo, keyCode, panel) {
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById('addLoanNoList' + 1).innerHTML = xmlhttp.responseText;
            if (keyCode == 40 || keyCode == 38) {
                document.getElementById('mlLoanNoListDiv').focus();
                document.getElementById('mlLoanNoListDiv').options[0].selected = true;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orlnlist.php?keyCode=" + keyCode + "&loanNo=" + loanNo + "&panel=" + panel, true);
    xmlhttp.send();
}
/*******End to change function TO ADD CODE for girvi transfer panel @AUTHOR: SANDY27DEC13******/
/*********END to add code for deposit functions in money lender update panel @AUTHOR: SANDY25NOV13*******/
/*******Start to add code to add more loan in update @AUTHOR: SANDY26NOV13***************/
function add_more_loan_submit(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertAddMoreLoanInUpdate;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertAddMoreLoanInUpdate() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("moreLoanSubButtDiv").style.visibility = "hidden";
        document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/***Start to add validation function @AUTHOR: SANDY27DEC13*********/
function validateAddMoreLoanInUpdate(obj) {
    if (validateEmptyField(document.getElementById('addLoanNo1').value, "Please enter Loan Number!") == false) {
        document.getElementById('addLoanNo1').focus();
        return false;
    }
    return true;
}
/***End to add validation function @AUTHOR: SANDY27DEC13*********/
/******************Start code to change file to add packet no. and other info @Author:SHRI18MAY15**************/
function addMoreLoanInUpdate(obj) {
    document.getElementById("moreLoanSubButtDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadAddMoreLoan").style.visibility = "visible";
    if (validateAddMoreLoanInUpdate()) {
        confirm_box = confirm(addAlertMess + "\nDo you really want to add this Girvi?"); //change in line @AUTHOR: SANDY28JAN14

        if (confirm_box == true)
        {
            var poststr = "addLoanNo=" + encodeURIComponent(document.getElementById("addLoanNo" + 1).value)
                    + "&addCustName=" + encodeURIComponent(document.getElementById("addCustName" + 1).value)
                    + "&addPrinAmt=" + encodeURIComponent(document.getElementById("addPrinAmt" + 1).value)
                    + "&addRoi=" + encodeURIComponent(document.getElementById("addRoi" + 1).value)
                    + "&addFirm=" + encodeURIComponent(document.getElementById("addFirm" + 1).value)
                    + "&mlIdField=" + encodeURIComponent(document.getElementById("mlIdField" + 1).value)
                    + "&mlAddLnDOBDay=" + encodeURIComponent(document.getElementById("mlAddLnDOBDay" + 1).value)
                    + "&mlAddLnDOBMonth=" + encodeURIComponent(document.getElementById("mlAddLnDOBMonth" + 1).value)
                    + "&mlAddLnDOBYear=" + encodeURIComponent(document.getElementById("mlAddLnDOBYear" + 1).value)
                    + "&loanIdField=" + encodeURIComponent(document.getElementById("loanIdField" + 1).value)
                    + "&loanSerNo=" + encodeURIComponent(document.getElementById("loanSerNo" + 1).value)
                    + "&addOtherInfo=" + encodeURIComponent(document.getElementById("addOtherInfo" + 1).value)
                    + "&addPacketNo=" + encodeURIComponent(document.getElementById("addPacketNo" + 1).value);
            add_more_loan_submit('include/php/ormlmrgv.php', poststr);
        }
    }
    document.getElementById("moreLoanSubButtDiv").style.visibility = "visible";
    document.getElementById("ajaxLoadAddMoreLoan").style.visibility = "hidden";
}
/******************End code to change file to add packet no. and other info @Author:SHRI18MAY15**************/
function closeAddMoreLoanDiv() {
    document.getElementById('addMoreLoanDiv').innerHTML = "";
    document.getElementById('ajaxCloseAddMoreLoan').style.visibility = "hidden";
}
/*******End to add code to add more loan in update @AUTHOR: SANDY26NOV13***************/
/*******Start to add function to delete  money deposited entry @AUTHOR: SANDY27NOV13*********/
function delete_deposit_loan_amt(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertDeleteDepositLoanAmt;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertDeleteDepositLoanAmt() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function deleteDepositLoanAmt(documentRootPath, mlId, loanId, depositMoneyId, depositjrnlId) {

    document.getElementById("ajaxDeleteDepositLoanAmtButt" + depositMoneyId).innerHTML = "<img src='images/loading16.gif' />";
    confirm_box = confirm(deleteAlertMess + "\nDo you really want to delete this loan deposit amount?"); //change in line @AUTHOR: SANDY28JAN14

    if (confirm_box == true)
    {
        var poststr = "mlId=" + mlId + "&loanId=" + loanId
                + "&depositMoneyId=" + depositMoneyId
                + "&depositjrnlId=" + depositjrnlId;
        delete_deposit_loan_amt('http://' + documentRootPath + '/include/php/ormldpdl.php', poststr);
    } else {
        document.getElementById("ajaxDeleteDepositLoanAmtButt" + depositMoneyId).innerHTML = "<img src='images/ajaxClose.png' />";
    }
    return false;
}
/*******End to add function to delete  money deposited entry @AUTHOR: SANDY27NOV13*********/
/*******Start to add function to release loan @AUTHOR: SANDY27NOV13*********/
function  releaseLoanDetails(mlId, loanId, pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ormlnrel.php?loanId=" + loanId + "&mlId=" + mlId + "&pageNo=" + pageNo, true);
    xmlhttp.send();
}
/*******End to add function to release loan @AUTHOR: SANDY27NOV13*********/
/*******Start to add code to change loan release date @AUTHOR: SANDY27NOV13**/
function change_Loan_Release_Date(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertChangeLoanReleaseDate;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);
}

function alertChangeLoanReleaseDate() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("loanTotAmtDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}

function changeLoanReleaseDate(documentRootPath, relDateDDValue, relDateMMValue, relDateYYValue, girviROI, monthlyInterestType, simpleOrCompIntOption, girviCompoundedOption, princAmount, interestType, girviDate, girviId, custId, girviType, status) {

    var poststr = "relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue
            + "&ROIValue=" + girviROI.value + "&gMonthIntOption=" + monthlyInterestType.value
            + "&simpleOrCompIntOption=" + simpleOrCompIntOption.value + "&girviCompoundedOption=" + girviCompoundedOption.value
            + "&princAmount=" + princAmount + "&interestType=" + interestType.value
            + "&girviDate=" + girviDate + "&girviId=" + girviId + "&custId=" + custId
            + "&girviType=" + girviType + "&girviStatus=" + status + "&grvRelPayDetails=TRUE";
    change_Loan_Release_Date('http://' + documentRootPath + '/include/php/ormlttam.php', poststr); //change in filename @AUTHOR: SANDY20NOV13

    return false;
}
/*******End to add code to change loan release date @AUTHOR: SANDY27NOV13**/
/*********Start of Function to release loan @AUTHOR: SANDY27NOV13**/
function release_loan(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertReleaseLoan;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertReleaseLoan() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("loanReleaseButDiv").style.visibility = "hidden";
    }

}
/***********Start to change function @AUTHOR: SANDY08JAN14*******************/
/***********Start code to add var @Author:PRIYA01APR14***********************/
/*******Start code to add acc Id at release  @Author:PRIYA23MAY14************/
function releaseLoan(custId, girviId, pageNo, totalPrincipalAmount, amountPaid, interestPaid, discountPaid, relDD, relMM, relYY, simpleOrCompIntOption,
        girviCompoundedOption, monthlyInterestType, interestType, girviFirmId, girviJrnlId, girviAccId, timeVar, mainPrinAmt,
        mlLoanAccId, mlLoanCashAccId, mlLoanIntAccId, mlLoanDiscAccId) {

    document.getElementById("loanReleaseButDiv").style.visibility = "hidden";
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (validateSelectField(relDD.value, "Please select Release Date Day!") == false) {
        relDD.focus();
        document.getElementById("loanReleaseButDiv").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        exit();
    } else if (validateSelectField(relMM.value, "Please select Release Date Month!") == false) {
        relMM.focus();
        document.getElementById("loanReleaseButDiv").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        exit();
    } else if (validateSelectField(relYY.value, "Please select Release Date Year!") == false) {
        relYY.focus();
        document.getElementById("loanReleaseButDiv").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        exit();
    } else {

        confirm_box = confirm("Do you really want to release this Loan?");
        if (confirm_box == true)
        {

            var poststr = "mlId=" + custId + "&loanId=" + girviId + "&pageNo=" + pageNo
                    + "&totalPrincipalAmount=" + totalPrincipalAmount + "&amountPaid=" + amountPaid.value + "&interestPaid=" + interestPaid.value + "&discountPaid=" + discountPaid.value
                    + "&relDD=" + relDD.value + "&relMM=" + relMM.value + "&relYY=" + relYY.value + "&simpleOrCompIntOption=" + simpleOrCompIntOption +
                    "&loanCompoundedOption=" + girviCompoundedOption + "&gMonthIntOption=" + monthlyInterestType + "&interestType=" + interestType + "&loanFirmId=" + girviFirmId +
                    "&loanJrnlId=" + girviJrnlId + "&loanAccId=" + girviAccId + "&timeVar=" + timeVar + "&mainPrinAmt=" + mainPrinAmt + "&mlLoanAccId=" + mlLoanAccId
                    + "&mlLoanCashAccId=" + mlLoanCashAccId + "&mlLoanIntAccId=" + mlLoanIntAccId + "&mlLoanDiscAccId=" + mlLoanDiscAccId;
            release_loan('include/php/ormlrlln.php', poststr);
        }
    }
    document.getElementById("loanReleaseButDiv").style.visibility = "visible";
    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
}
/**************End code to add acc Id at release  @Author:PRIYA23MAY14****************/
/***********End code to add var @Author:PRIYA01APR14***********************/
/***********End to change function @AUTHOR: SANDY08JAN14*******************/
/*********End of Function to release loan @AUTHOR: SANDY27NOV13**/
/********Start to add function to check unique ml code @AUTHOR: SANDY28NOV13***/
function checkForUniqueCode(code, panel) {
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (xmlhttp.responseText == 'false') {
                alert("This Id is already assigned");
                document.getElementById('suppUniqueCode').value = '';
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orfrlnno.php?code=" + code + "&panel=" + panel, true);
    xmlhttp.send();
}
/*****Start of Change in function @AUTHOR: SANDY14JAN14***************/
var action;
function setAction(actionValue) {
    action = actionValue;
}

function addNewMoneyLender(obj) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (action == 'Delete') {
        confirm_box = confirm(deleteAlertMess + "\nDo you really want to delete this Money Lender!!!"); //change in line @AUTHOR: SANDY28JAN14
        if (confirm_box == true) {
            return true;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            return false;
        }
    } else if (action == 'Submit') {
        if (validateAddSupplierInputs(obj)) {
            if (uploadImage(document.getElementById("selectPhoto").value) == false) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addSuppSubButDiv").style.visibility = "visible";
                return false;
            } else if (validateEmptyField(document.getElementById("suppUniqueCode").value, "Please enter money lender unique code!") == false ||
                    validateAlphaNum(document.getElementById("suppUniqueCode").value, "Accept only alphanumeric characters!") == false) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("suppUniqueCode").focus();
                return false;
            }
            confirm_box = confirm(addAlertMess + "\nDo you really want to add this Money Lender!!!"); //change in line @AUTHOR: SANDY28JAN14
            if (confirm_box == true) {
                return true;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                return false;
            }
        } else
        {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            return false;
        }
    } else {
        if (validateAddSupplierInputs(obj)) {
            if (uploadImage(document.getElementById("selectPhoto").value) == false) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addSuppSubButDiv").style.visibility = "visible";
                return false;
            } else if (validateEmptyField(document.getElementById("suppUniqueCode").value, "Please enter money lender unique code!") == false ||
                    validateAlphaNum(document.getElementById("suppUniqueCode").value, "Accept only alphanumeric characters!") == false) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("suppUniqueCode").focus();
                return false;
            }
            confirm_box = confirm(updateAlertMess + "\nDo you really want to update this Money Lender!!!"); //change in line @AUTHOR: SANDY28JAN14
            if (confirm_box == true) {
                return true;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                return false;
            }
        } else
        {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            return false;
        }
    }
}
/*****End of Change in function @AUTHOR: @AUTHOR: SANDY14JAN14***************/
/********End to add function to check unique ml code @AUTHOR: SANDY28NOV13***/
/*********Start to add function to get details of ml loan from girvi transfer detail panel @AUTHOR: SANDY29NOV13********/
function getMlLoanDet(loanId, mlCode, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    }
    xmlhttp.open("GET", "include/php/ommlmndv.php?loanSerNo=" + loanId + "&mlCode=" + mlCode + "&panelOption=" + panel, true); //change in parameter @AUTHOR: SANDY27DEC13
    xmlhttp.send();
}
/*********Start to add function to get details of ml loan from girvi transfer detail panel @AUTHOR: SANDY29NOV13********/
/***********Start to add code for loan receipt @AUTHOR: SANDY30NOV13************/
function getLoanInfo(mlId, loanId, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ormldtln.php?mlId=" + mlId + "&loanId=" + loanId + "&panel=" + panel, true);
    xmlhttp.send();
}
function getRelLoanInfo(mlId, loanId, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ormlnrel.php?mlId=" + mlId + "&loanId=" + loanId + "&panel=" + panel, true);
    xmlhttp.send();
}
function getLoanDetails(mlId, loanId, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ommlmndv.php?mlId=" + mlId + "&mlLoanId=" + loanId + "&panelOption=" + panel, true);
    xmlhttp.send();
}
/***********End to add code for loan receipt @AUTHOR: SANDY30NOV13************/
/*************Start to add code to update loan deposite date @AUTHOR: SANDY2DEC13*********/
function change_loan_update_Date(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertChangeLoanUpdateDate;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);
}

function alertChangeLoanUpdateDate() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "hidden";
        if (loanCurrentStatus == 'loanUpdateResultDiv') {
            document.getElementById("loanTotAmtDiv").innerHTML = xmlhttp.responseText; //change in line @AUTHOR: SANDY20JAN14
            document.getElementById("ajaxCloseDepositMoneyDiv").style.visibility = "visible";
        } else {
            document.getElementById("loanTotAmtDiv").innerHTML = xmlhttp.responseText;
        }
    } else {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    }
}

var loanCurrentStatus;
function changeLoanUpdateDate(documentRootPath, relDateDDValue, relDateMMValue, relDateYYValue, girviDepositPrinAmount, girviDepositIntAmount, girviROI, princAmount, interestType, girviDate, girviDateStr, girviId, custId, girviType, girviUpdSts, simpleOrCompIntOption, girviCompoundedOption) {
    loanCurrentStatus = 'loanUpdateResultDiv';
    var girviDateDay = document.getElementById("DMDOBDay").value;
    var girviDateMMM = document.getElementById("DMDOBMonth").value;
    var girviDateYY = document.getElementById("DMDOBYear").value;
    var girviDepDateStr = document.getElementById("DMDOBMonth").value + ' ' + document.getElementById("DMDOBDay").value + ', ' + document.getElementById("DMDOBYear").value;
    var girviDepDate = new Date(girviDepDateStr); // Girvi Deposit Date
    var girviMainDateStr = new Date(girviDateStr); //Girvi Main Date
    var milliGirviDepDate = girviDepDate.getTime();
    var milliGirviDate = girviMainDateStr.getTime();
    var datesDiff = milliGirviDepDate - milliGirviDate;
    if (datesDiff < 0) {
        alert('Please Select the correct Girvi Deposit Date!');
        document.getElementById("DMDOBDay").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        //document.getElementById("addGirviSubButDiv").style.visibility = "visible";
        return false;
        exit();
    } else {
        if (girviDateMMM == 'FEB' || girviDateMMM == 'APR' || girviDateMMM == 'JUN' || girviDateMMM == 'SEP' || girviDateMMM == 'NOV') {
            if (girviDateMMM == 'FEB' && girviDateDay > 29 && girviDateYY % 4 == 0) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' for this selected year has only max 29 days.');
                document.getElementById("DMDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                //document.getElementById("addGirviSubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
            if (girviDateMMM == 'FEB' && girviDateDay > 28 && girviDateYY % 4 != 0) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' for this selected year has only max 28 days.');
                document.getElementById("DMDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                //document.getElementById("addGirviSubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
            if (girviDateDay > 30) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' has only max 30 days.');
                document.getElementById("DMDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                //document.getElementById("addGirviSubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
        }
        var poststr = "relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue
                + "&girviDepositPrinAmount=" + girviDepositPrinAmount + "&girviDepositIntAmount=" + girviDepositIntAmount
                + "&ROIValue=" + girviROI.value + "&princAmount=" + princAmount + "&interestType=" + interestType.value
                + "&girviDate=" + girviDate + "&girviId=" + girviId + "&custId=" + custId
                + "&girviType=" + girviType + "&girviStatus=" + girviUpdSts + "&grvRelPayDetails=False" + "&simpleOrCompIntOption=" + simpleOrCompIntOption + "&girviCompoundedOption=" + girviCompoundedOption;
        change_loan_update_Date('http://' + documentRootPath + '/include/php/ormlttam.php', poststr);
    }
    return false;
}
/*************End to add code to update loan deposite date @AUTHOR: SANDY2DEC13*********/

/***********Start to add function for layout panel @AUTHOR: SANDY3DEC13************/
function setLayoutFieldInDb(fieldName, value) {
//alert(value);
    value = encodeURIComponent(value);
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (fieldName != 'THEMES' && fieldName != 'HEADERTHEMES') {
        confirm_box = confirm(updateAlertMess + "\nAre You Sure To Change " + fieldName); //change in line @AUTHOR: SANDY28JAN14
    }
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("main_full_body").innerHTML = xmlhttp.responseText; //change in div @AUTHOR: SANDY4DEC13
            document.getElementById('layoutUpdatedMsgDiv').innerHTML = 'Updated Successfully!';
            window.setTimeout(closeLayoutUpdatedMsgDiv, 1000);
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible"; //TO MAKE DIV VISIBLE @AUTHOR: SANDY26DEC13
        }
    };
    if (fieldName != 'THEMES' && fieldName != 'HEADERTHEMES') {
        if (confirm_box == true) {
            if (fieldName == 'checkWSComPort') {
                if (document.getElementById('enterComPort').value == '') {
                    alert('Please enter COM port value!');
                    document.getElementById('enterComPort').focus();
                    return false;
                } else if (document.getElementById('enterBeforeWTStr').value == '') {
                    alert('Please enter Before Weight String!');
                    document.getElementById('enterBeforeWTStr').focus();
                    return false;
                } else if (document.getElementById('enterWSCalibration').value == '') {
                    alert('Please enter WS Calibration!');
                    document.getElementById('enterWSCalibration').focus();
                    return false;
                } else if (document.getElementById('enterDataRate').value == '') {
                    alert('Please enter Data Rate!');
                    document.getElementById('enterDataRate').focus();
                    return false;
                } else {

                    xmlhttp.open("GET", "include/php/ompplpad.php?fieldName=" + fieldName + "&value=" + value, true);
                    xmlhttp.send();
                }
            } else if (fieldName == 'ResetInvoice') {
//                var startDate = encodeURIComponent(document.getElementById("startDOBDay").value + " " + document.getElementById("startDOBMonth").value + " " + document.getElementById("startDOBYear").value);
                var poststr = "fieldName=" + fieldName
                        + "&startDate=" + encodeURIComponent(document.getElementById("startDOBDay").value + " " + document.getElementById("startDOBMonth").value + " " + document.getElementById("startDOBYear").value)
                        + "&endDate=" + encodeURIComponent(document.getElementById("endDOBDay").value + " " + document.getElementById("endDOBMonth").value + " " + document.getElementById("endDOBYear").value)
                        + "&preInvoiceNo=" + encodeURIComponent(document.getElementById("preInvoiceNo").value)
                        + "&invoiceNo=" + encodeURIComponent(document.getElementById("invoiceNo").value)
                        + "&firmId=" + encodeURIComponent(document.getElementById("firmId").value)
                        + "&transType=" + encodeURIComponent(document.getElementById("transType").value);
                
                //alert(poststr);
                xmlhttp.open("GET", 'include/php/ompplpad.php?' + poststr);
                xmlhttp.send();
            } 
            else if (fieldName == 'Loality') {
//                var startDate = encodeURIComponent(document.getElementById("startDOBDay").value + " " + document.getElementById("startDOBMonth").value + " " + document.getElementById("startDOBYear").value);
                var poststr = "fieldName=" + fieldName
                        + "&LoalityAmount=" + encodeURIComponent(document.getElementById("loalityamount").value)
                        + "&LoalityPoints=" + encodeURIComponent(document.getElementById("loalitypoints").value)
                        + "&LoalityValue=" + encodeURIComponent(document.getElementById("loalityvalue").value);
                
                //alert(poststr);
                xmlhttp.open("GET", 'include/php/ompplpad.php?' + poststr);
                xmlhttp.send();
            } 
            else {
                xmlhttp.open("GET", "include/php/ompplpad.php?fieldName=" + fieldName + "&value=" + value, true);
                xmlhttp.send();
            }
        } else {
            if (fieldName != 'checkWSComPort') {
                xmlhttp.open("GET", "include/php/ompplpad.php?fieldName=" + 'NoChange' + "&value=" + 'NoChange', true);
                xmlhttp.send();
            }
        }
    } else {
        xmlhttp.open("GET", "include/php/ompplpad.php?fieldName=" + fieldName + "&value=" + value, true);
        xmlhttp.send();
    }
}
function closeLayoutUpdatedMsgDiv() {
    document.getElementById('layoutUpdatedMsgDiv').style.visibility = "hidden"; //change in div @AUTHOR: SANDY7DEC13
}
/***********End to add function for layout panel @AUTHOR: SANDY3DEC13************/
/**********Start to add function to unrelease girvi @AUTHOR: SANDY7DEC13***************/
function unReleaseGirviDetails(custId, girviId, pageNo) {
    confirm_box = confirm("Do you really want to UN-RELEASE loan!");
    if (confirm_box == true) {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/olunrlgv.php?custId=" + custId + "&girviId=" + girviId + "&pageNo=" + pageNo, true);
        xmlhttp.send();
    }
}

function getMsgSentStatus(msgCount) {
    if (msgCount == '1') {
        document.getElementById("smsMessDisplayDiv").innerHTML = msgCount + 'Msg is Sent!';
    } else {
        document.getElementById("smsMessDisplayDiv").innerHTML = msgCount + 'Msgs are Sent!';
    }
}

function navigateManageLoanPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ommnglns.php", true);
    xmlhttp.send();
}

function deleteLoans(sDay, sMonth, sYear, eDay, eMonth, eYear, loanType) {
    confirm_box = confirm(deleteAlertMess + "\nDo you really want to delete all " + loanType); //change in line @AUTHOR: SANDY28JAN14
    if (confirm_box == true) {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajax_loading_div").style.visibility = "hidden";
                document.getElementById("main_full_body").innerHTML = xmlhttp.responseText;
                window.setTimeout(closeDeleteMsgDiv, 2000);
            } else {
                document.getElementById("ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omlnsdel.php?sDay=" + sDay + "&sMonth=" + sMonth + "&sYear=" + sYear + "&eDay=" + eDay + "&eMonth=" + eMonth + "&eYear=" + eYear + "&loanType=" + loanType, true);
        xmlhttp.send();
    }
}
function closeDeleteMsgDiv() {
    document.getElementById('deleteMsgDiv').innerHTML = '';
}

/**********End to add function to unrelease girvi @AUTHOR: SANDY7DEC13***************/
/***********Start to add code to transfer principle in ml loan add panel @AUTHOR: SANDY19DEC13**************/

/********Start to change function @AUTHOR: SANDY19DEC13*********
 function getMorePrinToTrDiv(count, total) {
 if (total == '1' || deletedPrinStr.length == trPrinCnt) {
 document.getElementById("morePrinDiv0").style.visibility = "hidden";
 }
 document.getElementById('totalPrinTransferred').value = prinNoToTransfer;
 prinNoToTransfer = parseInt(prinNoToTransfer) + 1;
 
 loadXMLDoc();
 xmlhttp.onreadystatechange = function() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
 document.getElementById('transferMorePrincipalDiv' + total).innerHTML = xmlhttp.responseText;
 document.getElementById('principalId' + total).focus();
 } else {
 document.getElementById("main_ajax_loading_div").style.visibility = "visible";
 }
 };
 xmlhttp.open("POST", "include/php/ormlsbpr.php?count=" + total, true);
 xmlhttp.send();
 }
 function closeMorePrinToTrDiv(id) {
 deletedPrinStr = deletedPrinStr + id;
 if (deletedPrinStr.length == trPrinCnt) {
 document.getElementById("morePrinDiv0").style.visibility = "visible";
 }
 var amount = document.getElementById('prinPrinAmt' + id).value;
 document.getElementById('prinStatus' + id).value = "Deleted";
 document.getElementById("selectedPrinDet" + id).innerHTML = "";
 getAddPrinAmtTransffered();
 }
 ********End to change function @AUTHOR: SANDY19DEC13*********/
function searchPrincipalIdAndDet(prinNo, id, keyCode) {
    var trPrinStr = '';
    //code to avoid same loan selection
    var currentId = parseInt(id) - 1;
    while (currentId > 0) {
        if (deletedPrinStr.indexOf(currentId) < 0) {
            trPrinStr = trPrinStr + document.getElementById("principalId" + currentId).value;
        } else {
            trPrinStr = trPrinStr;
        }
        currentId = parseInt(currentId) - 1;
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("principalIdList" + id).innerHTML = xmlhttp.responseText;
            if (keyCode == 40 || keyCode == 38) {
                document.getElementById('principalIdListDiv').focus();
                document.getElementById('principalIdListDiv').options[0].selected = true;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orprnlst.php?id=" + id + "&keyCode=" + keyCode + "&prinNo=" + prinNo + "&trPrinStr=" + trPrinStr, true);
    xmlhttp.send();
}
/*****Start to change function @AUTHOR: SANDY03JAN14************/
function getDetailsOfSelectedPrincipal(prinNo, id, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (panel == 'Update') {
                document.getElementById("addMorePrinInUpdate").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("transferPrincipalDetailsDiv" + id).innerHTML = xmlhttp.responseText;
                document.getElementById('morePrinClose' + id).focus(); //@AUTHOR: SANDY11JAN14
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/orprindt.php?prinNo=" + prinNo + "&id=" + id + "&panel=" + panel, true);
    xmlhttp.send();
}
/*****End to change function @AUTHOR: SANDY03JAN14************/
/***********End to add code to transfer principle in ml loan add panel @AUTHOR: SANDY19DEC13**************/
/*********Start to add code to add additional prin transferred @AUTHOR: SANDY19DEC13****************
 
 function getAddPrinAmtTransffered() {
 var totAdditionalPrinTrans = 0;
 var prinNo =prinNoToTransfer;
 while (prinNo > 0) {
 if (document.getElementById('prinStatus' + prinNo).value != 'Deleted') {
 totAdditionalPrinTrans = parseInt(totAdditionalPrinTrans) + parseInt(document.getElementById('prinPrinAmt' + prinNo).value);
 }
 prinNo = parseInt(prinNo) - 1;
 }
 document.getElementById('totAddPrinLabel').innerHTML =Math_round(parseFloat(totAdditionalPrinTrans)).toFixed(2);
 
 if (parseFloat(document.getElementById("mlPrincipalAmount").value) < parseFloat(totAdditionalPrinTrans)) {
 alert("Total Amount transferred is greater than Loan amount!");
 }
 }
 ********Start to add code to add additional prin transferred @AUTHOR: SANDY19DEC13*****************/
/*************Start Function to show released loans panel @AUTHOR: SANDY19DEC13**************/
function lenderReleaseLoanDetails() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/orrellns.php?mlId=" + mlId, true);
    xmlhttp.send();
}
/*************End Function to show released loans panel @AUTHOR: SANDY19DEC13**************/
/***********Start to add functions @AUTHOR: SANDY20DEC13****************/
function showAddMorePrinDiv(mlId, loanSerNo, loanId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddMorePrin").style.visibility = "hidden";
            document.getElementById("ajaxCloseAddMorePrin").style.visibility = "visible";
            document.getElementById("addMorePrinDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("loanDepositPrinAmount").focus();
        } else {
            document.getElementById("ajaxLoadAddMorePrin").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ormlmrpr.php?mlId=" + mlId + "&loanId=" + loanId + "&loanSerNo=" + loanSerNo, true); //change in filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
/***Start to add validation function @AUTHOR: SANDY27DEC13*********/
function validateAddMorePrinInUpdate(obj) {
    if (validateEmptyField(document.getElementById('addPrinNo1').value, "Please enter principal Number!") == false) {
        document.getElementById('addPrinNo1').focus();
        return false;
    }
    return true;
}
/***End to add validation function @AUTHOR: SANDY27DEC13*********/
function addMorePrinInUpdate(obj) {
    document.getElementById("morePrinSubButtDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadAddMorePrin").style.visibility = "visible";
    if (validateAddMorePrinInUpdate(obj)) {
        confirm_box = confirm(addAlertMess + "\nDo you really want to add this Additional principal?"); //change in line @AUTHOR: SANDY28JAN14

        if (confirm_box == true)
        {
            var poststr = "addPrinNo=" + encodeURIComponent(document.getElementById("addPrinNo" + 1).value)
                    + "&prinCustName=" + encodeURIComponent(document.getElementById("prinCustName" + 1).value)
                    + "&prinAmt=" + encodeURIComponent(document.getElementById("prinAmt" + 1).value)
                    + "&prinRoi=" + encodeURIComponent(document.getElementById("prinRoi" + 1).value)
                    + "&prinFirm=" + encodeURIComponent(document.getElementById("prinFirm" + 1).value)
                    + "&mlIdField=" + encodeURIComponent(document.getElementById("mlIdField" + 1).value)
                    + "&prinTransDOBDay=" + encodeURIComponent(document.getElementById("prinTransDOBDay" + 1).value)
                    + "&prinTransDOBMonth=" + encodeURIComponent(document.getElementById("prinTransDOBMonth" + 1).value)
                    + "&prinTransDOBYear=" + encodeURIComponent(document.getElementById("prinTransDOBYear" + 1).value)
                    + "&loanNoField=" + encodeURIComponent(document.getElementById("loanNoField" + 1).value)
                    + "&loanSerNoField=" + encodeURIComponent(document.getElementById("loanSerNoField" + 1).value)
                    + "&prinPacket=" + encodeURIComponent(document.getElementById("prinPacket" + 1).value); //add Packet no @Author:ANUJA30JUL15;
            add_more_prin_submit('include/php/oradmrpr.php', poststr);
        }
    }
    document.getElementById("morePrinSubButtDiv").style.visibility = "visible";
    document.getElementById("ajaxLoadAddMorePrin").style.visibility = "hidden";
}
function add_more_prin_submit(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertAddMorePrinInUpdate;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertAddMorePrinInUpdate() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("morePrinSubButtDiv").style.visibility = "hidden";
        document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function closeAddMorePrinDiv() {
    document.getElementById('addMorePrinDiv').innerHTML = "";
    document.getElementById('ajaxCloseAddMorePrin').style.visibility = "hidden";
}
function searchMorePrinToTransfer(loanNo, keyCode, panel) {
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById('addPrinNoList' + 1).innerHTML = xmlhttp.responseText;
            if (keyCode == 40 || keyCode == 38) {
                document.getElementById('principalIdListDiv').focus();
                document.getElementById('principalIdListDiv').options[0].selected = true;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orprnlst.php?keyCode=" + keyCode + "&prinNo=" + loanNo + "&panel=" + panel, true);
    xmlhttp.send();
}
/************End to add functions @AUTHOR: SANDY20DEC13****************/
/*start code to get SELL REPORT in detail @AUTHOR: SANDY23DEC13*/
function getSellReportDetails() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogbbsldt.php", true);
    xmlhttp.send();
}
/* End code to get SELL REPORT in detail @AUTHOR: SANDY23DEC13*/


/*start code to get SELL REPORT in detail @AUTHOR: BAJRANG11SEP17*/
function sellReportbyinv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogbbsliv.php", true);
    xmlhttp.send();
}
/* End code to get SELL REPORT in detail @AUTHOR: BAJRANG11SEP17*/

/*start code to get SELL REPORT BY GST INVOICE in detail @AUTHOR: BAJRANG8JAN17*/
function sellReportbygstinv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omsellgstinv.php", true);
    xmlhttp.send();
}
/* End code to get SELL REPORT BY GST INVOICE in detail @AUTHOR: BAJRANG8JAN17*/

/*start code to get SELL REPORT BY GST PRODUCT in detail @AUTHOR: BAJRANG8JAN17*/
function sellreportbygstprod() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omsellgstpr.php", true);
    xmlhttp.send();
}
/* End code to get SELL REPORT BY GST PRODUCT in detail @AUTHOR: BAJRANG8JAN17*/

/*start code to get STAFF SELL REPORT  in detail @AUTHOR: BAJRANG10JAN17*/
function staffsellreport() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omstslrpt.php", true);
    xmlhttp.send();
}
/* End code to get STAFF SELL REPORT in detail @AUTHOR: BAJRANG10JAN17*/


/*start code to get SELL REPORT in detail @AUTHOR: BAJRANG11SEP17*/
function sellReportbyprd() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogbbsrbs.php", true);
    xmlhttp.send();
}
/* End code to get SELL REPORT in detail @AUTHOR: BAJRANG11SEP17*/

/*start code to get PURCHASE REPORT BY INVOICE in detail @AUTHOR: BAJRANG21FEB18*/
function purchaseReporbytinv() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogbbprinv.php", true);
    xmlhttp.send();
}
/* End code to get PURCHASE REPORT BY INVOICE in detail @AUTHOR: BAJRANG21FEB18*/

/*start code to get RAW PURCHASE REPORT in detail @AUTHOR: BAJRANG08MAR18*/
function rawpurchaseReport() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogbbrwpr.php", true);
    xmlhttp.send();
}
/* End code to get PURCHASE REPORT BY INVOICE in detail @AUTHOR: BAJRANG08MAR18*/

/*start code to get PURCHASE REPORT BY PRODUCT in detail @AUTHOR: BAJRANG21FEB18*/
function purchaseReporbytprd() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogbbprdt.php", true);
    xmlhttp.send();
}
/* End code to get PURCHASE REPORT BY PRODUCT in detail @AUTHOR: BAJRANG21FEB18*/

/*start code to get STOCK LEDGER ITEM NAME  in detail @AUTHOR: BAJRANG20JUN18*/
function stockitemname() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omstitmnme.php", true);
    xmlhttp.send();
}
/* End code to get STOCK LEDGER ITEM NAME in detail @AUTHOR: BAJRANG20JUN18*/

/*start code and add code to get STOCK LEDGER BY PRODUCT  in detail @AUTHOR: SAGARL*/
function stockbyprod() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    
 // add new file here for show column product name in stock leader by product @author:sagarl(26jun-18) 
    xmlhttp.open("GET", "include/php/omStockleaderByProduct.php?searchBy=product", true);
    
    xmlhttp.send();
}

function stockbycat() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogbbstdt.php?searchBy=category", true);
    
    xmlhttp.send();
}

/* End code to get STOCK LEDGER ITEM NAME in detail @AUTHOR: BAJRANG20JUN18*/

/*start code to get USER CUSTOMER in detail @AUTHOR: BAJRANG10NOV17*/
function usercustomer() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcustTrans.php", true);
    xmlhttp.send();
}
/* End code to get SELL REPORT in detail @AUTHOR: BAJRANG10NOV17*/


/*start code to get USER CUSTOMER in detail @AUTHOR: BAJRANG10NOV17*/
function usersuppiler() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/orbbblsd_2.php", true);
    xmlhttp.send();
}
/* End code to get SELL REPORT in detail @AUTHOR: BAJRANG10NOV17*/


/*start code to get PURCHASE REPORT in detail @AUTHOR: SANDY23DEC13*/
function getPurchaseReportDetails() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogbbprdt.php", true);
    xmlhttp.send();
}
/* End code to get PURCHASE REPORT in detail @AUTHOR: SANDY23DEC13*/
/*********Start to add code to delete loan and prin from loan detail panel @AUTHOR: SANDY23DEC13*********/
function delete_trans_girviAndPrin(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertdeleteTransGirviAndPrin;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertdeleteTransGirviAndPrin() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/****Change in function @AUTHOR: SANDY04JAN14********************/
function delTransGirviOrPrin(documentRootPath, transid, loanId, mlId, prinOrMainPrinId, prinType) {
    confirm_box = confirm(deleteAlertMess + "\n\nDo you really want to delete this principal?"); //change in line @AUTHOR: SANDY28JAN14

    if (confirm_box == true)
    {
        var poststr = "transid=" + transid + "&loanId=" + loanId + "&mlId=" + mlId + "&prinOrMainPrinId=" + prinOrMainPrinId + "&prinType=" + prinType;
        delete_trans_girviAndPrin('http://' + documentRootPath + '/include/php/ormltrdl.php', poststr);
    }
    return false;
}
/****Change in function @AUTHOR: SANDY04JAN14********************/
/*********End to add code to delete loan and prin from loan detail panel @AUTHOR: SANDY23DEC13*********/
/*******Start to add functions @AUTHOR: SANDY24DEC13*****************************/
/********CHANGE IN FUNCTION @AUTHOR: SANDY25DEC13***************/
function showTrGvReleasePanel(transId, loanId, mlId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("release_trGirvi_panel" + transId).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("release_trGirvi_panel" + transId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ormltrpn.php?transId=" + transId + "&loanId=" + loanId + "&mlId=" + mlId, true);
    xmlhttp.send();
}
/********CHANGE IN FUNCTION @AUTHOR: SANDY25DEC13***************/
/********CHANGE IN FUNCTION @AUTHOR: SANDY26DEC13***************/
function relGvPanelHide(transId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "hidden";
            document.getElementById("release_trGirvi_panel" + transId).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
/********CHANGE IN FUNCTION @AUTHOR: SANDY26DEC13***************/
function  release_trans_principal(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = releaseTransPrincipal;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function releaseTransPrincipal() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "hidden";
        document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "visible";
        document.getElementById("releaseTransferredGirviButton").style.visibility = "hidden";
    }

}
/********CHANGE IN FUNCTION @AUTHOR: SANDY25DEC13***************/
function releaseTransferredGirviOrPrin(documentRootPath) {
    document.getElementById("releaseTrGirviButton").style.visibility = "hidden";
    document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "visible";
    var transId = encodeURIComponent(document.getElementById("transId").value);
    var prinType = encodeURIComponent(document.getElementById("prinType").value);
    var loanId = encodeURIComponent(document.getElementById("loanId").value);
    var mlId = encodeURIComponent(document.getElementById("mlId").value);
    var totAmount = document.getElementById('totAmount');
    var amountPaid = document.getElementById('amountPaid');
    var interestPaid = document.getElementById('interestPaid');
    var discountPaid = document.getElementById('discountPaid');
    var relDD = document.girviReleaseDateForm.DOBTransDay;
    var relMM = document.girviReleaseDateForm.DOBTransMonth;
    var relYY = document.girviReleaseDateForm.DOBTransYear;
    var timePeriod = document.getElementById('timePeriodVar').value; //to add variable @AUTHOR: SANDY15DEC13

    if (validateSelectField(relDD.value, "Please select Release Date Day!") == false) {
        relDD.focus();
        document.getElementById("releaseTransferredGirviButton").style.visibility = "visible";
        document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "hidden";
        exit();
    } else if (validateSelectField(relMM.value, "Please select Release Date Month!") == false) {
        relMM.focus();
        document.getElementById("releaseTransferredGirviButton").style.visibility = "visible";
        document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "hidden";
        exit();
    } else if (validateSelectField(relYY.value, "Please select Release Date Year!") == false) {
        relYY.focus();
        document.getElementById("releaseTransferredGirviButton").style.visibility = "visible";
        document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "hidden";
        exit();
    } else {

        confirm_box = confirm("Do you really want to release this Transferred Girvi?");
        if (confirm_box == true)
        {

            var poststr = "transId=" + transId + "&prinType=" + prinType + "&loanId=" + loanId + "&mlId=" + mlId
                    + "&totAmount=" + totAmount.value + "&amountPaid=" + amountPaid.value + "&interestPaid=" + interestPaid.value + "&discountPaid=" + discountPaid.value
                    + "&relDD=" + relDD.value + "&relMM=" + relMM.value + "&relYY=" + relYY.value + "&timePeriod=" + timePeriod;
            release_trans_principal('http://' + documentRootPath + '/include/php/ormlrlpr.php', poststr);
        }
    }
    document.getElementById("releaseTrGirviButton").style.visibility = "visible";
    document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "hidden";
}
/********CHANGE IN FUNCTION @AUTHOR: SANDY25DEC13***************/
/*******End to add functions @AUTHOR: SANDY24DEC13*****************************/
/****Start to add function @AUTHOR: SANDY04JAN14********************/
function change_Ml_ROI_Opt_Add(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertchangeMlROIOptAdd;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertchangeMlROIOptAdd() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "hidden";
        document.getElementById("ROIOption").innerHTML = xmlhttp.responseText;
        document.getElementById('selTROI').focus();
    } else {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    }
}
function changeMlROIOptAdd(selectROIType, obj, panelName) {
    roiOption = selectROIType.value;
    var poststr = "panelName=" + panelName + "&roiOption=" + roiOption;
    change_Ml_ROI_Opt_Add('include/php/olggroaa.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
    return false;
}
/***End to add function @AUTHOR: SANDY04JAN14********************/
/****Start to add code to get other info of additional principal @AUTHOR: SANDY10JAN14**********/
/**********Start code to change filename @Author:PRIYA12APR14***************/
/**********Start code to add girviSerialNum @Author:PRIYA14APR14***************/
var clickTime = 0;
function getOtherInfoOfPrin(mainId, panel) {
    if (clickTime == 0) {
        clickTime = 1;
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("otherInfoDisplayDiv" + mainId).innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("getOtherInfoButt" + mainId).style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/olothifo.php?mainId=" + mainId + "&panel=" + panel, true);
        xmlhttp.send();
    } else {
        clickTime = 0;
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("otherInfoDisplayDiv" + mainId).innerHTML = xmlhttp.responseText;
            } else {
            }
        };
        xmlhttp.open("POST", "include/php/ombbblnk.php", true);
        xmlhttp.send();
    }
}
/**********End code to add girviSerialNum @Author:PRIYA14APR14***************/
/**********End code to change filename @Author:PRIYA12APR14***************/
/****End to add code to get other info of additional principal @AUTHOR: SANDY10JAN14**********/

/****Start to add code to update other info @AUTHOR: SANDY04JAN14**************/
/**********Start code to change filename @Author:PRIYA12APR14***************/
function updateOtherInfo(mainId, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("showOtherInfoDiv" + mainId).innerHTML = xmlhttp.responseText;
            document.getElementById("updateInfoField" + mainId).focus();
        } else {
            document.getElementById("getOtherInfoButt").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/olothifo.php?mainId=" + mainId + "&panel=" + panel, true);
    xmlhttp.send();
}
/****Start to change function @AUTHOR: SANDY10JAN14******************/
/********End code to add var girviSerialNum @Author:PRIYA12APR14**************/
/**********Start code to change filename @Author:PRIYA12APR14***************/
/********Start code to add var girviSerialNum @Author:PRIYA14APR14**************/
function updateOtherInfoInTb(mainId, panel, updateVal, prinUId, DOB, firmId, girviId) {
    confirm_box = confirm(updateAlertMess + "\nDo you really want to update Other info?"); //change in line @AUTHOR: SANDY29JAN14

    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("showOtherInfoDiv" + mainId).innerHTML = xmlhttp.responseText;
                document.getElementById("updateInfoField" + mainId).focus();
            } else {
                document.getElementById("getOtherInfoButt").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/olupinfo.php?mainId=" + mainId + "&panel=" + panel + "&updateVal=" + updateVal
                + "&girviId=" + girviId + "&prinUId=" + prinUId + "&DOB=" + DOB + "&firmId=" + firmId, true);
        xmlhttp.send();
    }
}
/********End code to add var girviSerialNum @Author:PRIYA14APR14**************/
/********Start code to add var girviSerialNum @Author:PRIYA14APR14**************/
function deleteOtherInfoInTb(mainId, panel, updateVal, prinUId, DOB, firmId, girviId) {
    confirm_box = confirm(deleteAlertMess + "\nDo you really want to Delete Other info?"); //change in line @AUTHOR: SANDY28JAN14
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("showOtherInfoDiv" + mainId).innerHTML = xmlhttp.responseText;
                document.getElementById("showOtherInfoDiv" + mainId).innerHTML = '';
            } else {
                document.getElementById("getOtherInfoButt").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/olupinfo.php?mainId=" + mainId + "&panel=" + panel + "&updateVal=" + updateVal
                + "&girviId=" + girviId + "&prinUId=" + prinUId + "&firmId=" + firmId + "&DOB=" + DOB, true);
        xmlhttp.send();
    }
}
/********End code to add var girviSerialNum @Author:PRIYA14APR14**************/
/**********End code to change filename @Author:PRIYA12APR14***************/
/****End to change function @AUTHOR: SANDY10JAN14******************/
/****End to add code to update other info @AUTHOR: SANDY04JAN14**************/
/**********To search m loan no in girvi transfer panel @AUTHOR: SANDY04JAN14*************/
function searchMlLoanNoToTransfer(loanNo, keyCode, panel) {
    var mlId = document.getElementById('mlId').value;
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (panel == 'MlId') {
                document.getElementById('mlIdList').innerHTML = xmlhttp.responseText;
                if (keyCode == 40 || keyCode == 38) {
                    document.getElementById('mlIdListDiv').focus();
                    document.getElementById('mlIdListDiv').options[0].selected = true;
                }
            } else {
                document.getElementById('mlLoanNoList').innerHTML = xmlhttp.responseText;
                if (keyCode == 40 || keyCode == 38) {
                    document.getElementById('loanNoListDiv').focus();
                    document.getElementById('loanNoListDiv').options[0].selected = true;
                }
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/olmlnlst.php?keyCode=" + keyCode + "&loanNo=" + loanNo + "&panel=" + panel + "&mlId=" + mlId, true); //file name changed @OMMODTAG PRIYA_04MAY15
    xmlhttp.send();
}
/**********To search m loan no in girvi transfer panel @AUTHOR: SANDY04JAN14*************/
/***********Start to add function to delete barcode from 20x12 barcode panel @AUTHOR: SANDY09JAN14*********/
function deleteItemBarCode22x12(barCodeSlipDiv, closeDivId, barCodePrintId) {
    confirm_box = confirm(deleteAlertMess + "\nDo you really want to Delete this Item Bar Code Slip?"); //change in line @AUTHOR: SANDY28JAN14
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
        xmlhttp.open("POST", "include/php/ogibppdl.php?barCodePrintId=" + barCodePrintId, true);
        xmlhttp.send();
    }
    function closeBarCodeSlipCloseButt()
    {
        document.getElementById(closeDivId).innerHTML = "";
    }
}
/***********End to add function to delete barcode from 20x12 barcode panel @AUTHOR: SANDY09JAN14*********/
/**********Start to add function @AUTHOR: SANDY13JAN14****************/
/************Start code to add condition @Author:PRIYA15DEC14************************/
function getMlLinkedLoan(mlId, documentRoot) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mlLoanNo").value = xmlhttp.responseText;
            getTransFirmSerialNo(documentRoot, '', 'transToML');
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ormllkln.php?mlId=" + mlId, true);
    xmlhttp.send();
}
/************End code to add condition @Author:PRIYA15DEC14************************/
/**********End to add function @AUTHOR: SANDY13JAN14****************/
/**********Start to add function @AUTHOR: SANDY16JAN14****************/
function showAddNewAccount() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omacacdv.php", true);
    xmlhttp.send();
}

function showAllAccounts(accountType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omacaclt.php?accountType=" + accountType, true);
    xmlhttp.send();
}
/**********Start to add function @AUTHOR: SANDY16JAN14****************/
/**********Start to add function @AUTHOR: SANDY18JAN14****************/
function navigateToAccountLedgerPanel(firmId, acntIdString, sdd, smm, syyyy, edd, emm, eyyyy, userAccount) {
    userAccount = encodeURIComponent(userAccount);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (firmId == 'All Firms') {
        xmlhttp.open("POST", "include/php/omalacdt.php?acntName=" + acntIdString + "&sdd=" + sdd + "&smm=" + smm + "&syyyy=" + syyyy + "&edd=" + edd + "&emm=" + emm + "&eyyyy=" + eyyyy + "&userAccount=" + userAccount, true);
    } else {
        xmlhttp.open("POST", "include/php/omacacdt.php?firmId=" + firmId + "&acntName=" + acntIdString + "&sdd=" + sdd + "&smm=" + smm + "&syyyy=" + syyyy + "&edd=" + edd + "&emm=" + emm + "&eyyyy=" + eyyyy + "&userAccount=" + userAccount, true);
    }
    xmlhttp.send();
}
/**********End to add function @AUTHOR: SANDY18JAN14****************/

/****Start to add function @AUTHOR: SANDY21JAN14************************/
function delPrevTransGirviDetail(girviTransId, girviId, prinType) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    gGirviId = girviId;
    confirm_box = confirm(deleteAlertMess + "\nDo you really want to Delete This Transferred Girvi?"); //change in line @AUTHOR: SANDY28JAN14
    if (confirm_box == true)
    {
        var poststr = "girviTransId=" + girviTransId
                + "&girviId=" + girviId + "&prinType=" + prinType;
        delete_trans_girvi_details('include/php/olggtrgl.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    }
}
/****End to add function @AUTHOR: SANDY21JAN14************************/
/**********Start to add code @AUTHOR: SANDY25JAN14*******************/
function search_girvi_by_ml_name(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchGirviByMlName;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchGirviByMlName() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
        document.getElementById("girviByMlNameSearchButt").style.visibility = "visible";
        document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        document.getElementById("girviByMlNameSearchButt").style.visibility = "hidden";
    }
}
function searchGirviByMlName(obj) {
    if (document.getElementById('searchGirviByMlName').value != '' || document.getElementById('searchGirviByMlName').value != null) {
        var poststr = "girviSearchByMlName=" + encodeURIComponent(document.getElementById('searchGirviByMlName').value);
        search_girvi_by_ml_name('include/php/orglbyml.php', poststr);
    } else {
        alert("Please Enter Money Lender Name!");
    }
}
/****************Start code to change this code @Author:PRIYA17SEP14*********/
function searchTransPanel(documentRootPath, searchColumn, searchValue, selFirmId, rowsPerPage) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("transactionListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omttlisd.php?searchColumn="
            + searchColumn + "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage, true);
    xmlhttp.send();
}
/****************End code to change this code @Author:PRIYA17SEP14*********/
/**********End to add code @AUTHOR: SANDY25JAN14*******************/
/****Start to add function @AUTHOR: SANDY28JAN14****************************/
var searchType;
function searchBySelectedDetail(detailType, sortKeyword, searchColumnName, searchColumnValue, panelName, gTransStatus) {
    searchType = detailType;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("transDet").innerHTML = xmlhttp.responseText;
            document.getElementById("transDet1").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (detailType == 'FIRM NAME') {
        xmlhttp.open("POST", "include/php/omffragp.php?panelName=" + panelName, true);
    } else {
        xmlhttp.open("POST", "include/php/ommlnmcd.php?panelName=" + panelName, true);
    }
    xmlhttp.send();
}
/****End to add function @AUTHOR: SANDY28JAN14****************************/
/*****Start to add function @AUTHOR: SANDY05FEB14********************/
/*****Start to add function @AUTHOR: SANDY05FEB14********************/
function showDetailsOfAllLedgerEntry() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerDetDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ommlgdet.php", true);
    xmlhttp.send();
}
/**************Start code to add space in date @Author:PRIYA01APR14******************/
function getDetailsAsPerDateAndFirm(sdd, smm, syy, edd, emm, eyy, firmId, loanType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerDetDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var girviLedgerDetStartDate = sdd + ' ' + smm + ' ' + syy;
    var girviLedgerDetEndDate = edd + ' ' + emm + ' ' + eyy;
    xmlhttp.open("POST", "include/php/ommlgdet.php?sdd=" + sdd + "&smm=" + smm + "&syy=" + syy + "&edd=" + edd + "&emm=" + emm +
            "&eyy=" + eyy + "&firmId=" + firmId + "&girviLedgerDetStartDate=" + girviLedgerDetStartDate +
            "&girviLedgerDetEndDate=" + girviLedgerDetEndDate + "&loanType=" + loanType, true);
    xmlhttp.send();
}
/**************End code to add space in date @Author:PRIYA01APR14******************/
/*****End to add function @AUTHOR: SANDY05FEB14********************/
//Start code to change in function @Author:SHRI07APR15
//Start code to add function @Author:SHRI06APR15
/***********Start code to comment function @OMMODTAG PRIYA_08MAY15****************/
//function addNewGirviHindiDate(documentRootPath,girviDateDay,girviDateMMM,girviDateYY,idDay,idMonth,idYear)
//{
//    
//        $.ajax({
//            url: "http://" + documentRootPath + "/include/php/nepdat.php",
//            type: "get",
//            dataType: "html",
//            async:false,
//            data: {girviDateDay: girviDateDay, girviDateMMM: girviDateMMM, girviDateYY: girviDateYY},
//            success: function(data) {
//                var strValue = new Array();
//                strValue = data.split("*");
//                document.getElementById(idDay).value = strValue[0];
//                document.getElementById(idMonth).value = strValue[1];
//                document.getElementById(idYear).value = strValue[2];
//            },
//            error: function(e) {
//                alert("error=" + e);
//            },
//            complete: function(e) {
//            }
//        });
//}
//End code to add function @Author:SHRI06APR15
//End code to change in function @Author:SHRI07APR15
/***********End code to comment function @OMMODTAG PRIYA_08MAY15****************/