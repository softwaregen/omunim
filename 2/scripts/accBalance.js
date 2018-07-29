/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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

/***********Start Code To Select Year In Account Balance Details Panel @AUTHOR: GAUR30DEC15********/
function valAccGetYearInputs() {
    if (validateSelectField(document.get_account_balance_sheet_form.balanceSheetYear.value, "Please select Year!") == false) {
        document.get_account_balance_sheet_form.balanceSheetYear.focus();
        return false;
    }
    return true;
}

function accGetYear() {
    if (valAccGetYearInputs()) {
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
        var firmId = encodeURIComponent(document.get_account_balance_sheet_form.selFirmId.value);
        xmlhttp.open("POST", "include/php/omaccbal.php?postYear=" + postYear + "&firmId=" + firmId, true);
        xmlhttp.send();
    }
}
/***********END Code To Select Year In Account Balance Details Panel @AUTHOR: GAUR30DEC15********/

/***********Start Code To Select TextBox value In Account Balance Details Panel @AUTHOR: GAUR22MAR16********/
function jrmnUpdate(opBal, drAmt, crAmt, clBal, accID, selFirmId, finStartYear, finEndYear, drAccId, crAccId, accId, jrmnAccId, opBalSelectType, clBalSelectType, jrmnId) {
    var poststr = "opBal=" + opBal +
            "&drAmt=" + drAmt +
            "&crAmt=" + crAmt +
            "&clBal=" + clBal +
            "&accId=" + accID +
            "&selFirmId=" + selFirmId +
            "&finStartYear=" + finStartYear +
            "&finEndYear=" + finEndYear +
            "&drAccId=" + drAccId +
            "&crAccId=" + crAccId +
            "&accId=" + accId +
            "&jrmnAccId=" + jrmnAccId +
            "&opBalSelectType=" + opBalSelectType +
            "&clBalSelectType=" + clBalSelectType +
            "&jrmnId=" + jrmnId +
            "&panelName=accBalUpdatePanel";
    jrmn_update("include/php/ommpjrmn.php", poststr);
}

function jrmn_update(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertjrmnUpdate;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
function alertjrmnUpdate() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("accBalDetails").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }
}
/***********END Code To Select TextBox In Account Balance Details Panel @AUTHOR: GAUR22MAR16********/
/**********Start to add function add loan accounat Bal @AUTHOR: GAUR7JAN16****************/

/**********Start to add function add loan accounat Bal @AUTHOR: GAUR12JAN16****************/
function addLoanAccBal(opBal, drAmt, crAmt, clBal, accID, selFirmId, finStartYear, finEndYear, drAccId, crAccId, accId, jrmnAccId, opBalSelectType, clBalSelectType, jrmnId) {

    var poststr = "opBal=" + opBal +
            "&drAmt=" + drAmt +
            "&crAmt=" + crAmt +
            "&clBal=" + clBal +
            "&accId=" + accID +
            "&girviFirmId=" + selFirmId +
            "&finStartYear=" + finStartYear +
            "&finEndYear=" + finEndYear +
            "&drAccId=" + drAccId +
            "&crAccId=" + crAccId +
            "&accId=" + accId +
            "&jrmnAccId=" + jrmnAccId +
            "&opBalSelectType=" + opBalSelectType +
            "&clBalSelectType=" + clBalSelectType +
            "&jrmnId=" + jrmnId;
//    alert(poststr);
    add_loan("include/php/omaccssr.php", poststr);

}

function add_loan(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertaddLoanAccBal;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertaddLoanAccBal() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("accBalDetails").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
//function addLoanAccBal() {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = function () {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
//        } else {
//            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//        }
//    };
//    xmlhttp.open("POST", "include/php/omaccssr.php", true);
//    xmlhttp.send();
//}
/**********End to add function add loan accounat Bal @AUTHOR: GAUR12JAN16****************/
/**********End to add function add loan accounat Bal @AUTHOR: GAUR7JAN16****************/
//function showAddWhStockPanel(panel) {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = function () {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;  //change in div name @AUTHOR: SANDY25SEP13
//        }
//        else {
//            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//        }
//    };
//    if (panel == 'PurchaseList')
//        xmlhttp.open("POST", "include/php/ogwaprlt.php?panel=" + panel, true);
//    else if (panel == 'StockList')
//        xmlhttp.open("POST", "include/php/ogwastlt.php?panel=" + panel, true);
//    else
//        xmlhttp.open("POST", "include/php/ogadstoc.php?panel=" + panel, true);
//    xmlhttp.send();
//}
/********************** Start Direct Add New Customer For The Account Balance Panel to Add the Loan  @Author: GAUR08JAN16*******************************/
function valDirectAddCustForLoanInputs() {
    if (validateEmptyField(document.getElementById("custFirstNameForAddGirvi").value, "Please enter First Name!") == false ||
            validateAlphaWithSpace(document.getElementById("custFirstNameForAddGirvi").value, "Accept only alpha characters!") == false) {
        document.getElementById("custFirstNameForAddGirvi").focus();
        return false;
    }
    else if ((document.getElementById("custLastNameForAddGirvi").value != '') &&
            (validateAlphaWithSpace(document.getElementById("custLastNameForAddGirvi").value, "Accept only alpha characters!") == false)) {
        document.getElementById("custLastNameForAddGirvi").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("custFatherNameForAddGirvi").value, "Please enter Father's Name!") == false ||
            validateAlphaWithSpace(document.getElementById("custFatherNameForAddGirvi").value, "Accept only alpha characters!") == false) {
        document.getElementById("custFatherNameForAddGirvi").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("custCityForAddGirvi").value, "Please select City Name!") == false) {
        document.getElementById("custCityForAddGirvi").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("girviFirmId").value, "Please select Firm Name!") == false) {
        document.getElementById("girviFirmId").focus();
        return false;
    }
    else if (((document.getElementById("mobileNoToAddGirvi").value != 'Enter Mobile Number') && (document.getElementById("mobileNoToAddGirvi").value != ''))
            && ((validateNum(document.getElementById("mobileNoToAddGirvi").value, "Accept only Numbers without space character!") == false ||
                    validateLength10(document.getElementById("mobileNoToAddGirvi").value, "Mobile number length should be minimum 10!") == false))) {
        document.getElementById("mobileNoToAddGirvi").focus();
        return false;
    }
    return true;
}
function direct_add_cust_for_loan(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertDirectAddCust;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertDirectAddCustForLoan() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    }
}
function directAddCustForLoan() {

    document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    document.getElementById("directAddCustButton").style.visibility = "hidden";
    var genderObj = document.getElementsByName('gender');
    for (var i = 0; i < genderObj.length; i++) {
        if (genderObj[i].checked == true)
            gender = genderObj[i].value;
    }

    if (valDirectAddCustForLoanInputs()) {

        var poststr = "firstName=" + encodeURIComponent(document.getElementById("custFirstNameForAddGirvi").value)
                + "&lastName=" + encodeURIComponent(document.getElementById("custLastNameForAddGirvi").value)
                + "&fatherOrSpouseName=" + encodeURIComponent(document.getElementById("custFatherNameForAddGirvi").value)
                + "&fatherOrSpouseNameIndicator=" + encodeURIComponent(document.getElementById("fatherOrSpouseNameIndicator").value)
                + "&sex=" + encodeURIComponent(gender)
                + "&mobileNoToAddGirvi=" + encodeURIComponent(document.getElementById("mobileNoToAddGirvi").value)
                + "&city=" + encodeURIComponent(document.getElementById("custCityForAddGirvi").value)
                + "&firmId=" + encodeURIComponent(document.getElementById("girviFirmId").value)
                + "&jrmnId=" + encodeURIComponent(document.getElementById("jrmnId").value)
                + "&jrmnStartYr=" + encodeURIComponent(document.getElementById("jrmnStartYr").value)
                + "&jrmnEndYr=" + encodeURIComponent(document.getElementById("jrmnEndYr").value)
                + "&accId=" + encodeURIComponent(document.getElementById("accId").value)
                + "&opBalCust=" + encodeURIComponent(document.getElementById("opBalCust").value)
                + "&clBalCust=" + encodeURIComponent(document.getElementById("clBalCust").value)
                + "&crAmtCust=" + encodeURIComponent(document.getElementById("crAmtCust").value)
                + "&drAmtCust=" + encodeURIComponent(document.getElementById("drAmtCust").value)
                + "&panelName=" + encodeURIComponent("AccBalance")
                + "&directAddCust=" + encodeURIComponent("YES");

//        alert(poststr);
        direct_add_cust_for_loan('include/php/omcaadcs.php', poststr);
    }
    else
    {
        document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
        document.getElementById("directAddCustButton").style.visibility = "visible";
    }
}
/********************** End Direct Add New Customer For The Account Balance Panel to Add the Loan  @Author: GAUR08JAN16*******************************/

/************************************************START CHANGE IN CODE @Author :GAUR03APR16****************************************************/

function addGirivToLoanPanel() {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("addGirviSubButDiv").style.visibility = "hidden";

    var girviDateDay = document.getElementById("DOBDay").value;
    var girviDateMMM = document.getElementById("DOBMonth").value;
    var girviDateYY = document.getElementById("DOBYear").value;
    var girviDateStr = document.getElementById("DOBMonth").value + ' ' + document.getElementById("DOBDay").value + ', ' + document.getElementById("DOBYear").value;
    var girviDate = new Date(girviDateStr); // Girvi Date
    var todayDate = new Date(); // Today Date
    var milliGirviDate = girviDate.getTime();
    var milliTodayDate = todayDate.getTime();
    var datesDiff = milliTodayDate - milliGirviDate;

//End to change code to add condition for girvi date @Author:SHRI31MAR15
    if (datesDiff < 0) {
        alert('Please Select the correct Girvi Date!');
        document.getElementById("DOBDay").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("addGirviSubButDiv").style.visibility = "visible";
        return false;
        exit();
    }
    else {
        var girviType = document.getElementById("girviType").value;
        if (girviDateMMM == 'FEB' || girviDateMMM == 'APR' || girviDateMMM == 'JUN' || girviDateMMM == 'SEP' || girviDateMMM == 'NOV') {
            if (girviDateMMM == 'FEB' && girviDateDay > 29 && girviDateYY % 4 == 0) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' for this selected year has only max 29 days.');
                document.getElementById("DOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addGirviSubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
            if (girviDateMMM == 'FEB' && girviDateDay > 28 && girviDateYY % 4 != 0) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' for this selected year has only max 28 days.');
                document.getElementById("DOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addGirviSubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
            if (girviDateDay > 30) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' has only max 30 days.');
                document.getElementById("DOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addGirviSubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
        }
        /***** START CODE TO ADD ItemEntered @AUTHOR:PRIYA26JAN13*******/
        if (girviType == 'OpenGirvi') {
            itemEntered = 0;
            if (validateAddGirviInputsForLoan()) {
                document.getElementById("itemEntered").value = itemEntered;
//                alert(document.getElementById("itemEntered").value);
                return true;
            }
            else {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addGirviSubButDiv").style.visibility = "visible";
                return false;
            }
        }
        else {
            if (validateAddPacketInputsForLoan()) {
                return true;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addGirviSubButDiv").style.visibility = "visible";
                return false;
            }
        }
//        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//        document.getElementById("addGirviSubButDiv").style.visibility = "visible";
//        return false;
        return true;
    }

}
function openAccBalPanel(panelNameCustLoan) {
    if (addGirivToLoanPanel()) {
        var poststr;
        var poststrItem = '';
        var girviType = encodeURIComponent(document.getElementById("girviType").value);
        if (girviType == 'OpenGirvi') {
            var itemEntered = encodeURIComponent(document.getElementById("itemEntered").value);

//            itemNames = "";
//            itemLength = document.open_loan.itemName.length;
//            itemCounter = 0;
//            for (i = 0; i < itemLength; i++) {
//                if (document.open_loan.itemName[i].selected == true && itemCounter % 2 == 0) {
//                    itemNames += document.open_loan.itemName[i].value + ", ";
//                    itemCounter++;
//                }
//                else if (document.open_loan.itemName[i].selected == true && itemCounter % 2 != 0) {
//                    itemNames += "<font color=blue>" + document.open_loan.itemName[i].value + "</font>" + ", ";
//                    itemCounter++;
//                }
//            }
//
//            itemNames = itemNames.slice(0, -2);
//grossItemWeight
            for (var i = 1; i <= itemEntered; i++) {
                if (document.getElementById("itemType" + i).value != 'Other') {
                    poststrItem = poststrItem + "&itemName" + i + "=" + encodeURIComponent(document.getElementById("itemName" + i).value)
                            + "&itemType" + i + "=" + encodeURIComponent(document.getElementById("itemType" + i).value)
                            + "&itemPieces" + i + "=" + encodeURIComponent(document.getElementById("itemPieces" + i).value)
                            + "&grossWeight" + i + "=" + encodeURIComponent(document.getElementById("grossWeight" + i).value)
                            + "&grossWeightType" + i + "=" + encodeURIComponent(document.getElementById("grossWeightType" + i).value)
                            + "&itemWeight" + i + "=" + encodeURIComponent(document.getElementById("itemWeight" + i).value)
                            + "&weightType" + i + "=" + encodeURIComponent(document.getElementById("weightType" + i).value)
                            + "&itemTunch" + i + "=" + encodeURIComponent(document.getElementById("itemTunch" + i).value);
//                            + "&addMoreItem=" + encodeURIComponent(girviMoreItem);
                }
                else {
                    poststrItem = poststrItem + "&itemName" + i + "=" + encodeURIComponent(document.getElementById("itemName" + i).value)
                            + "&itemType" + i + "=" + encodeURIComponent(document.getElementById("itemType" + i).value)
                            + "&itemPieces" + i + "=" + encodeURIComponent(document.getElementById("itemPieces" + i).value);
//                            + "&addMoreItem=" + encodeURIComponent(girviMoreItem);
                }
            }
        }
        poststr = "custId=" + encodeURIComponent(document.getElementById("custId").value) +
                "&girviFirmId=" + encodeURIComponent(document.getElementById("girviFirmId").value) +
                "&jrmnId=" + encodeURIComponent(document.getElementById("jrmnId").value) +
                "&jrmnStartYr=" + encodeURIComponent(document.getElementById("jrmnStartYr").value) +
                "&jrmnEndYr=" + encodeURIComponent(document.getElementById("jrmnEndYr").value) +
                "&accId=" + encodeURIComponent(document.getElementById("accId").value) +
                "&selROI=" + encodeURIComponent(document.getElementById("selROI").value) +
                "&selROIValue=" + encodeURIComponent(document.getElementById("selROIValue").value) +
                "&interestType=" + encodeURIComponent(document.getElementById("interestType").value) +
                "&principalAmount=" + encodeURIComponent(document.getElementById("principalAmount").value) +
                "&DOBDay=" + encodeURIComponent(document.getElementById("DOBDay").value) +
                "&DOBMonth=" + encodeURIComponent(document.getElementById("DOBMonth").value) +
                "&DOBYear=" + encodeURIComponent(document.getElementById("DOBYear").value) +
                "&preSerialNumber=" + encodeURIComponent(document.getElementById("preSerialNumber").value) +
                "&serialNumber=" + encodeURIComponent(document.getElementById("serialNumber").value) +
                "&packetNumber=" + encodeURIComponent(document.getElementById("packetNumber").value) +
                "&girviType=" + encodeURIComponent(document.getElementById("girviType").value) +
                "&girviOtherInfo=" + encodeURIComponent(document.getElementById("girviOtherInfo").value) +
                "&loanTimePeriod=" + encodeURIComponent(document.getElementById("loanTimePeriod").value) +
                "&smsTemplateId=" + encodeURIComponent(document.getElementById("smsTemplateId").value) +
                "&girviDrAccId=" + encodeURIComponent(document.getElementById("girviDrAccId").value) +
                "&girviPaySelAccountId=" + encodeURIComponent(document.getElementById("girviPaySelAccountId").value) +
                "&girviPaymentOtherInfo=" + encodeURIComponent(document.getElementById("girviPaymentOtherInfo").value) +
                "&selFirstMonthInt=" + encodeURIComponent(document.getElementById("selFirstMonthInt").checked) +
                "&opBalCust=" + encodeURIComponent(document.getElementById("opBalCust").value) +
                "&clBalCust=" + encodeURIComponent(document.getElementById("clBalCust").value) +
                "&drAmtCust=" + encodeURIComponent(document.getElementById("drAmtCust").value) +
                "&crAmtCust=" + encodeURIComponent(document.getElementById("crAmtCust").value) +
                "&chkJrmnId=" + encodeURIComponent(document.getElementById("chkJrmnId").value) +
                "&itemEntered=" + encodeURIComponent(itemEntered) +
                "&panelNameNewLoan=" + encodeURIComponent(panelNameCustLoan) +
                poststrItem;
//alert(poststr);
        open_loan("include/php/olacadgv.php", poststr);
    }
}

function validateAddGirviInputsForLoan() {
    if (validateEmptyField(document.getElementById("principalAmount").value, "Please enter Principal Amount!") == false ||
            validateNum(document.getElementById("principalAmount").value, "Accept only numeric characters without space character!") == false) {

        document.getElementById("principalAmount").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("interestType").value, "Please select Interest Type!") == false) {
        document.getElementById("interestType").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("serialNumber").value, "Please enter Serial Number!") == false ||
            validateNum(document.getElementById("serialNumber").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("serialNumber").focus();
        return false;
    }
    /************Start Code to add validation for roi @Author:PRIYA17OCT13************/
    else if (validateEmptyField(document.getElementById("selROI").value, "Please Select ROI!") == false) {
        document.getElementById("selROI").focus();
        return false;
    }
    /************End Code to add validation for @Author:PRIYA17OCT13************/
    else if (validateSelectField(document.getElementById("DOBDay").value, "Please select Girvi Date!") == false) {
        document.getElementById("DOBDay").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBMonth").value, "Please select Girvi Date!") == false) {
        document.getElementById("DOBMonth").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBYear").value, "Please select Girvi Date!") == false) {
        document.getElementById("DOBYear").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("girviFirmId").value, "Please select Girvi Firm Id!") == false) {
        document.getElementById("girviFirmId").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("packetNumber").value, "Please enter Packet Number!") == false ||
            validateNum(document.getElementById("packetNumber").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("packetNumber").focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBMonth").value, "Please select Girvi Date!") == false) {
        document.getElementById("DOBMonth").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBYear").value, "Please select Girvi Date!") == false) {
        document.getElementById("DOBYear").focus();
        return false;
    } else if (validateSelectField(document.getElementById("girviDrAccId").value, "Please select Girvi Dr Account!") == false) {
        document.getElementById("girviDrAccId").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("girviPaySelAccountId").value, "Please select Girvi Cr Account!") == false) {
        document.getElementById("girviPaySelAccountId").focus();
        return false;
    }
    else {
//      alert('item entered'+);
//      itemEntered = document.getElementById("itemEntered").value;
//      alert(getItemDiv);
        for (var dc = 1; dc <= getItemDiv; dc++) {
            if (document.getElementById("itemName" + dc).value != "") {
                if (validateEmptyField(document.getElementById("itemName" + dc).value, "Please select Item Name " + dc + "!") == false) {
                    document.getElementById("itemName" + dc).focus();
                    alert(document.getElementById("itemName" + dc));
                    return false;
                }
                else if (document.getElementById("itemPieces" + dc).value == 0 ||
                        validateNum(document.getElementById("itemPieces" + dc).value, "Accept only numeric characters without space character!") == false) {
                    if (document.getElementById("itemPieces" + dc).value == 0) {
                        alert('Please enter number of Pieces, 0 or space not accepted!');
                    }
                    document.getElementById("itemPieces" + dc).focus();
                    return false;
                }
                else if (document.getElementById("itemType" + dc).value != 'Other') {
                    if (document.getElementById("grossWeight" + dc).value == ' ~ Gross Weight ~') {
                        alert('Please enter Gross Weight!');
                        document.getElementById("grossWeight" + dc).focus();
                        return false;
                    }
                    else if (validateEmptyField(document.getElementById("grossWeight" + dc).value, "Please enter Gross Weight!") == false ||
                            validateNumWithDot(document.getElementById("grossWeight" + dc).value, "Accept only numeric characters without space character!") == false) {
                        document.getElementById("grossWeight" + dc).focus();
                        return false;
                    }
                    else if (validateSelectField(document.getElementById("grossWeightType" + dc).value, "Please select Gross Weight Type!") == false) {
                        document.getElementById("grossWeightType" + dc).focus();
                        return false;
                    }
                    else if (document.getElementById("itemWeight" + dc).value == ' ~ Net Weight ~') {
                        alert('Please enter Item Net Weight!');
                        document.getElementById("itemWeight" + dc).focus();
                        return false;
                    }
                    else if (validateEmptyField(document.getElementById("itemWeight" + dc).value, "Please enter Item Net Weight!") == false ||
                            validateNumWithDot(document.getElementById("itemWeight" + dc).value, "Accept only numeric characters without space character!") == false) {
                        document.getElementById("itemWeight" + dc).focus();
                        return false;
                    }
                    else if (validateSelectField(document.getElementById("weightType" + dc).value, "Please select Weight Type!") == false) {
                        document.getElementById("weightType" + dc).focus();
                        return false;
                    }
                    else if (validateSelectField(document.getElementById("itemTunch" + dc).value, "Please select Item Tunch!") == false) {
                        document.getElementById("itemTunch" + dc).focus();
                        return false;
                    }
                }
                else if (document.getElementById("itemType" + dc).value == 'Other') {
//                    alert('dc2:' + dc);
                    if (validateEmptyField(document.getElementById("girviValuationMan" + dc).value, "Please enter Item Valuation, for other item it is mandatory!") == false ||
                            validateNumWithDot(document.getElementById("girviValuationMan" + dc).value, "Accept only numeric characters without space character!") == false) {
                        document.getElementById("girviValuationMan" + dc).focus();
                        return false;
                    }
                }
                itemEntered++;

            }
            else {
                if (itemEntered == 0) {
                    alert('Please enter Item Details!');
                    document.getElementById("itemName" + dc).focus();
                    return false;
                    exit();
                }
            }
        }
    }
    return true;
}

function validateAddPacketInputsForLoan() {
    if (validateEmptyField(document.getElementById("principalAmount").value, "Please enter Principal Amount!") == false ||
            validateNum(document.getElementById("principalAmount").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("principalAmount").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("interestType").value, "Please select Interest Type!") == false) {
        document.getElementById("interestType").focus();
        return false;
    }
    /************Start Code to add validation for roi @Author:PRIYA17OCT13************/
    else if (validateEmptyField(document.getElementById("selROI").value, "Please Select ROI!") == false) {
        document.getElementById("selROI").focus();
        return false;
    }
    /************End Code to add validation for roi @Author:PRIYA17OCT13************/
    else if (validateSelectField(document.getElementById("DOBDay").value, "Please select Girvi Date!") == false) {
        document.getElementById("DOBDay").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBMonth").value, "Please select Girvi Date!") == false) {
        document.getElementById("DOBMonth").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBYear").value, "Please select Girvi Date!") == false) {
        document.getElementById("DOBYear").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("girviFirmId").value, "Please select Girvi Firm Id!") == false) {
        document.getElementById("girviFirmId").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("serialNumber").value, "Please enter Serial Number!") == false ||
            validateNum(document.getElementById("serialNumber").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("serialNumber").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("packetNumber").value, "Please enter Packet Number!") == false ||
            validateNum(document.getElementById("packetNumber").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("packetNumber").focus();
        return false;
    } else if (validateSelectField(document.getElementById("girviDrAccId").value, "Please select Girvi Dr Account!") == false) {
        document.getElementById("girviDrAccId").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("girviPaySelAccountId").value, "Please select Girvi Cr Account!") == false) {
        document.getElementById("girviPaySelAccountId").focus();
        return false;
    }
    return true;
}

//function openAccBalPanel() {
//    
//    var poststr = "custId=" + encodeURIComponent(document.getElementById("custId").value) +
//            "&girviFirmId=" + encodeURIComponent(document.getElementById("girviFirmId").value) +
//            "&jrmnId=" + encodeURIComponent(document.getElementById("jrmnId").value) +
//            "&jrmnStartYr=" + encodeURIComponent(document.getElementById("jrmnStartYr").value) +
//            "&jrmnEndYr=" + encodeURIComponent(document.getElementById("jrmnEndYr").value) +
//            "&accId=" + encodeURIComponent(document.getElementById("accId").value) +
//            "&selROI=" + encodeURIComponent(document.getElementById("selROI").value) +
//            "&selROIValue=" + encodeURIComponent(document.getElementById("selROIValue").value) +
//            "&interestType=" + encodeURIComponent(document.getElementById("interestType").value) +
//            "&principalAmount=" + encodeURIComponent(document.getElementById("principalAmount").value) +
//            "&itemEntered=" + encodeURIComponent(itemEntered) +
//            "&DOBDay=" + encodeURIComponent(document.getElementById("DOBDay").value) +
//            "&DOBMonth=" + encodeURIComponent(document.getElementById("DOBMonth").value) +
//            "&DOBYear=" + encodeURIComponent(document.getElementById("DOBYear").value) +
//            "&preSerialNumber=" + encodeURIComponent(document.getElementById("preSerialNumber").value) +
//            "&serialNumber=" + encodeURIComponent(document.getElementById("serialNumber").value) +
//            "&packetNumber=" + encodeURIComponent(document.getElementById("packetNumber").value) +
//            "&girviType=" + encodeURIComponent(document.getElementById("girviType").value) +
//            "&girviOtherInfo=" + encodeURIComponent(document.getElementById("girviOtherInfo").value) +
//            "&loanTimePeriod=" + encodeURIComponent(document.getElementById("loanTimePeriod").value) +
//            "&smsTemplateId=" + encodeURIComponent(document.getElementById("smsTemplateId").value) +
//            "&girviDrAccId=" + encodeURIComponent(document.getElementById("girviDrAccId").value) +
//            "&girviPaySelAccountId=" + encodeURIComponent(document.getElementById("girviPaySelAccountId").value) +
//            "&girviPaymentOtherInfo=" + encodeURIComponent(document.getElementById("girviPaymentOtherInfo").value) +
//            "&selFirstMonthInt=" + encodeURIComponent(document.getElementById("selFirstMonthInt").value) +
//            "&opBalCust=" + encodeURIComponent(document.getElementById("opBalCust").value) +
//            "&clBalCust=" + encodeURIComponent(document.getElementById("clBalCust").value) +
//            "&drAmtCust=" + encodeURIComponent(document.getElementById("drAmtCust").value) +
//            "&crAmtCust=" + encodeURIComponent(document.getElementById("crAmtCust").value) +
//            "&chkJrmnId=" + encodeURIComponent(document.getElementById("chkJrmnId").value) +
//            "&AddNewLoanSubButtClick=" + encodeURIComponent(document.getElementById("AddNewLoanSubButtClick").value = 'true');
//
//    alert(poststr);
//       open_loan("include/php/olacadgv.php", poststr);
//}

function open_loan(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertopenAccBalPanel;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertopenAccBalPanel() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//        alert(xmlhttp.responseText);
        document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/*******************************************END CHANGE IN CODE @Author : GAUR03APR16********************************************************/

//////////////////////////////////////// CHANGE IN CODE @Author :GAUR21MAR16 ///////////////////////////////////////// 
/**********End to code open account bal panel @AUTHOR: GAUR8JAN16****************/

/*****************Start to add code to add customer to account balance panel @AUTHOR: GAUR09JAN16*************************/
function valSearchCustFirstNameToAddGirvi(custFirstName) {
    if (custFirstName == "Enter Customer First Name") {
        alert("Please enter Customer First Name!");
        document.getElementById("custFirstName").focus();
        return false;
    }
    return true;
}

function search_cust_fname_to_add_loan(url, parameters) {
    loadXMLDoc();

    xmlhttp.onreadystatechange = alertSearchCustFNameToAddGirvi;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchCustFNameToAddLoan() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
        document.getElementById("custListForAddGirviDiv").innerHTML = xmlhttp.responseText;
        //searchCityForPanelBlank();
    }
    else {
        document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    }
}

function searchCustToAddLoan(custFName, custLName, custFatherOrSpouseName, custCity, custMobNo, custFirmId) {

    document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    //document.getElementById('printButt').style.visibility = "visible";
    if (true) {

        var poststr = "custFName=" + encodeURIComponent(custFName)
                + "&custLName=" + encodeURIComponent(custLName)
                + "&custFatherOrSpouseName=" + encodeURIComponent(custFatherOrSpouseName)
                + "&custCity=" + encodeURIComponent(custCity)
                + "&custMobNo=" + encodeURIComponent(custMobNo)
                + "&custFirmId=" + encodeURIComponent(custFirmId)
                + "&girviFirmId=" + encodeURIComponent(document.getElementById("girviFirmId").value) +
                "&jrmnId=" + encodeURIComponent(document.getElementById("jrmnId").value) +
                "&jrmnStartYr=" + encodeURIComponent(document.getElementById("jrmnStartYr").value) +
                "&jrmnEndYr=" + encodeURIComponent(document.getElementById("jrmnEndYr").value) +
                "&accId=" + encodeURIComponent(document.getElementById("accId").value) +
                "&opBalCust=" + encodeURIComponent(document.getElementById("opBalCust").value) +
                "&clBalCust=" + encodeURIComponent(document.getElementById("clBalCust").value) +
                "&drAmtCust=" + encodeURIComponent(document.getElementById("drAmtCust").value) +
                "&crAmtCust=" + encodeURIComponent(document.getElementById("crAmtCust").value);

//        alert(poststr);
        search_cust_fname_to_add_loan('include/php/omaccsc.php', poststr);
    }
    else {
        document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
    }
}
/*****************End to add code to add customer to account balance panel @AUTHOR: GAUR09JAN16*************************/

/***************Start code to add param @Author: GAUR03APR16******************/

function getCustomerDetailsWithCustIdForLoan(custPanelOption, custId, firmId) {

    var poststr = "custPanelOption=" + encodeURIComponent(custPanelOption) +
            "&custId=" + encodeURIComponent(custId) +
            "&firmId=" + encodeURIComponent(firmId) +
            "&jrmnId=" + encodeURIComponent(document.getElementById("jrmnId").value) +
            "&jrmnStartYr=" + encodeURIComponent(document.getElementById("jrmnStartYr").value) +
            "&jrmnEndYr=" + encodeURIComponent(document.getElementById("jrmnEndYr").value) +
            "&accId=" + encodeURIComponent(document.getElementById("accId").value) +
            "&opBalCust=" + encodeURIComponent(document.getElementById("opBalCust").value) +
            "&clBalCust=" + encodeURIComponent(document.getElementById("clBalCust").value) +
            "&drAmtCust=" + encodeURIComponent(document.getElementById("drAmtCust").value) +
            "&crAmtCust=" + encodeURIComponent(document.getElementById("crAmtCust").value) +
            "&optionGirviTypeOpen=selected";
//alert(poststr);
    add_loan_customer_list("include/php/omacadln.php", poststr);

}

function add_loan_customer_list(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertgetCustomerDetailsWithCustIdForLoan;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertgetCustomerDetailsWithCustIdForLoan() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("accBalDetails").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}



//function getCustomerDetailsWithCustIdForLoan(custPanelOption, custId ,firmId) {
//    alert(custPanelOption);
//      alert(custId);
//        alert(firmId);
//          
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = function () {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
//        }
//        else {
//
//            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//        }
//    };
//    var poststr =
//                "jrmnId=" + encodeURIComponent(document.getElementById("jrmnId").value) +
//                "&jrmnStartYr=" + encodeURIComponent(document.getElementById("jrmnStartYr").value) +
//                "&jrmnEndYr=" + encodeURIComponent(document.getElementById("jrmnEndYr").value) +
//                "&accId=" + encodeURIComponent(document.getElementById("accId").value) +
//                "&opBalCust=" + encodeURIComponent(document.getElementById("opBalCust").value) +
//                "&clBalCust=" + encodeURIComponent(document.getElementById("clBalCust").value) +
//                "&drAmtCust=" + encodeURIComponent(document.getElementById("drAmtCust").value) +
//                "&crAmtCust=" + encodeURIComponent(document.getElementById("crAmtCust").value) ;
//        alert(poststr);
//    xmlhttp.open("POST", "include/php/omacadln.php?custPanelOption=" + custPanelOption + "&custId=" + custId + "&srchItemPreId=" + itemPreId + "&srchItemPostId=" + itemPostId + "&poststr" + poststr,
//            true);
//    xmlhttp.send();
//}
/***************END code to add param @Author: GAUR03APR16******************/



// **********************************Start Customer Details Functions @Author: GAUR18JAN16******************/

function setCusFrmCusTypForLoan(custId, firmId, custType) {
//alert(custId);
//alert(firmId);
//alert(custType);
    var poststr = "custId=" + encodeURIComponent(custId) +
            "&firmId=" + encodeURIComponent(firmId) +
            "&custType=" + encodeURIComponent(custType) +
            "&jrmnId=" + encodeURIComponent(document.getElementById("jrmnId").value) +
            "&jrmnStartYr=" + encodeURIComponent(document.getElementById("jrmnStartYr").value) +
            "&jrmnEndYr=" + encodeURIComponent(document.getElementById("jrmnEndYr").value) +
            "&accId=" + encodeURIComponent(document.getElementById("accId").value) +
            "&opBalCust=" + encodeURIComponent(document.getElementById("opBalCust").value) +
            "&clBalCust=" + encodeURIComponent(document.getElementById("clBalCust").value) +
            "&drAmtCust=" + encodeURIComponent(document.getElementById("drAmtCust").value) +
            "&crAmtCust=" + encodeURIComponent(document.getElementById("crAmtCust").value);
//alert(poststr);
    add_loan_customer("include/php/omacadln.php", poststr);

}

function add_loan_customer(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertsetCusFrmCusTypForLoan;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertsetCusFrmCusTypForLoan() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}


//var custId;
//function setCustIdForLoan(obj) {
//    custId = obj.id;
//}
//
//var custType;
//function setCusFrmCusTypForLoan(obj, getFirmId, getCustType) {
//    custId = obj.id;
//    firmId = getFirmId;
//    custType = getCustType;


//function getCustHome() {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = function () {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
//        } else {
//
//            document.getElementById("ajax_loading_div").style.visibility = "visible";
//        }
//    };
//    xmlhttp.open("GET", "include/php/omcdcshm.php?custId=" + custId,
//            true);
//    xmlhttp.send();
//}

//function setCusFrmCusTypForLoan(custPanelOption) {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = function () {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
//        }
//        else {
//
//            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//        }
//    };
////    alert('hiiii');
//    xmlhttp.open("GET", "include/php/omacadln.php?custId=" + custId,
//            true);
//    xmlhttp.send();
//}
// **********************************End Customer Details Functions @Author: GAUR18JAN16******************/



//************************** Search City TO Add Girvi
/***********Start Code To Add Div For Add New Customer @AUTHOR: GAUR19JAN16********/
var keyCode;
var panelNameToAddCustCity;
function search_city_for_Loan_panel(url, parameters) {
    loadXMLDoc();

    xmlhttp.onreadystatechange = alertSearchCityForLoanPanel;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchCityForLoanPanel() {
//    if (panelNameToAddCustCity == 'addNewCustomer') {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
//            document.getElementById("cityListDivToAddNewCust").innerHTML = xmlhttp.responseText;
//            if (keyCode == 40 || keyCode == 38) {
//                document.getElementById('custCityForAddNewCustSelect').focus();
//                document.getElementById('custCityForAddNewCustSelect').options[0].selected = true;
//            }
//        } else {
//            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
//        }
//    } else
    if (panelNameToAddCustCity == 'directAddCust') {
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
        }
        else {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
        }
    }
}
function searchCityForLoanPanel(custCity, keyCodeInput, panelName) {
    keyCode = keyCodeInput;
    panelNameToAddCustCity = panelName;

    document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";

    var poststr = "custCity=" + encodeURIComponent(custCity) +
            "&panelName=" + encodeURIComponent(panelName);

    search_city_for_Loan_panel('include/php/omavvgtc.php', poststr);
}
//************************** Search City TO Add Girvi Blank Panel GAUR19JAN16

/**********Start to add function showCountBal @AUTHOR: GAUR20JAN16****************/
function openCustomerDetail() {
    var poststr = "girviFirmId=" + encodeURIComponent(document.getElementById("girviFirmId").value) +
            "&jrmnId=" + encodeURIComponent(document.getElementById("jrmnId").value) +
            "&finStartYear=" + encodeURIComponent(document.getElementById("jrmnStartYr").value) +
            "&finEndYear=" + encodeURIComponent(document.getElementById("jrmnEndYr").value) +
            "&accId=" + encodeURIComponent(document.getElementById("accId").value) +
            "&opBal=" + encodeURIComponent(document.getElementById("opBalCust").value) +
            "&clBal=" + encodeURIComponent(document.getElementById("clBalCust").value) +
            "&drAmt=" + encodeURIComponent(document.getElementById("drAmtCust").value) +
            "&crAmt=" + encodeURIComponent(document.getElementById("crAmtCust").value);
//  alert(poststr);
    open_Customer_Detail("include/php/omaccssr.php", poststr);
}

function open_Customer_Detail(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertopenCustomerDetail;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
function alertopenCustomerDetail() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/**********End to add function showCountBal @AUTHOR: GAUR20JAN16****************/

//************************** Search City TO Add Girvi Blank Panel @AUTHOR: GAUR20JAN16**************************/
var keyCode;
var cityNameForLoanPanelBlank;
function search_city_for_loan_panel_blank(url, parameters) {
    loadXMLDoc();

    xmlhttp.onreadystatechange = alertSearchCityForLoanPanelBlank;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchCityForLoanPanelBlank() {
//    if (panelNameToAddCustCity == 'addNewCustomer') {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
//            document.getElementById("cityListDivToAddNewCust").innerHTML = xmlhttp.responseText;
//            if (keyCode == 40 || keyCode == 38) {
//                document.getElementById('custCityForAddNewCustSelect').focus();
//                document.getElementById('custCityForAddNewCustSelect').options[0].selected = true;
//            }
//        } else {
//            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
//        }
//    } 
    if (cityNameForLoanPanelBlank == 'directAddCust') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
            document.getElementById("custCityForAddGirvi").focus();
            searchCustToAddLoanPanelGirvi(document.getElementById('custFirstNameForAddGirvi').value,
                    document.getElementById('custLastNameForAddGirvi').value,
                    document.getElementById('custFatherNameForAddGirvi').value,
                    document.getElementById('custCityForAddGirvi').value,
                    document.getElementById('mobileNoToAddGirvi').value,
                    document.getElementById('girviFirmId').value);
            document.getElementById("cityListDivToAddGirvi").innerHTML = xmlhttp.responseText;

        } else {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
        }
    }
    else if (cityNameForLoanPanelBlank == 'blank') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
            document.getElementById("cityListDivToAddGirvi").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
        }
    }
}
function searchCityForLoanPanelBlank(divName) {

    cityNameForLoanPanelBlank = divName;
    document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    var poststr = "";

    search_city_for_loan_panel_blank('include/php/ombbblnk.php', poststr);
}
/***********End Code To Add Div For Add New Customer @AUTHOR: GAUR20JAN16**************************/

/*****************Start to add code to show print button @AUTHOR: GAUR20JAN16*************************/
function searchCustToAddLoanPanelGirvi(custFName, custLName, custFatherOrSpouseName, custCity, custMobNo, custFirmId) {

    document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    //document.getElementById('printButt').style.visibility = "visible";
    if (true) {

        var poststr = "custFName=" + encodeURIComponent(custFName)
                + "&custLName=" + encodeURIComponent(custLName)
                + "&custFatherOrSpouseName=" + encodeURIComponent(custFatherOrSpouseName)
                + "&custCity=" + encodeURIComponent(custCity)
                + "&custMobNo=" + encodeURIComponent(custMobNo)
                + "&custFirmId=" + encodeURIComponent(custFirmId);

        search_cust_fname_to_add_girvi('include/php/omaccsc.php', poststr);
    }
    else {
        document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "hidden";
    }
}
/*****************End to add code to show print button @AUTHOR: GAUR20JAN16*************************/



/**********Start to add function add loan accounat Bal @AUTHOR: GAUR20JAN16****************/
function addLoanCustomerList(opBal, drAmt, crAmt, clBal, accID, selFirmId, finStartYear, finEndYear, drAccId, crAccId, accId, jrmnAccId, opBalSelectType, clBalSelectType, jrmnId) {

    var poststr = "opBal=" + opBal +
            "&drAmt=" + drAmt +
            "&crAmt=" + crAmt +
            "&clBal=" + clBal +
            "&accId=" + accID +
            "&girviFirmId=" + selFirmId +
            "&finStartYear=" + finStartYear +
            "&finEndYear=" + finEndYear +
            "&drAccId=" + drAccId +
            "&crAccId=" + crAccId +
            "&accId=" + accId +
            "&jrmnAccId=" + jrmnAccId +
            "&opBalSelectType=" + opBalSelectType +
            "&clBalSelectType=" + clBalSelectType +
            "&jrmnId=" + jrmnId;
//    alert(poststr);
    add_loan_to_customer_list("include/php/omaccsc.php", poststr);
}

function add_loan_to_customer_list(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertaddLoanCustomerList;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertaddLoanCustomerList() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("accBalDetails").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/**********End to add function add loan accounat Bal @AUTHOR: GAUR20JAN16****************/


/********************** Add Girvi Item Code *****************************************************************/
function validateAddGirviItemInputsForLoan(dc) {
    itemEntered = 0;
    if (document.getElementById("itemName" + dc).value != "") {

        if (validateEmptyField(document.getElementById("itemName" + dc).value, "Please select Item Name " + dc + "!") == false) {
            document.getElementById("itemName" + dc).focus();
            return false;
        }
        else if (document.getElementById("itemPieces" + dc).value == 0 ||
                validateNum(document.getElementById("itemPieces" + dc).value, "Accept only numeric characters without space character!") == false) {
            if (document.getElementById("itemPieces" + dc).value == 0) {
                alert('Please enter number of Pieces, 0 or space not accepted!');
            }
            document.getElementById("itemPieces" + dc).focus();
            return false;
        }
        else if (document.getElementById("itemType" + dc).value != 'Other') {
            if (document.getElementById("grossWeight" + dc).value == ' ~ Gross Weight ~') {
                alert('Please enter Gross Weight!');
                document.getElementById("grossWeight" + dc).focus();
                return false;
            }
            else if (validateEmptyField(document.getElementById("grossWeight" + dc).value, "Please enter Gross Weight!") == false ||
                    validateNumWithDot(document.getElementById("grossWeight" + dc).value, "Accept only numeric characters without space character!") == false) {
                document.getElementById("grossWeight" + dc).focus();
                return false;
            }
            else if (validateSelectField(document.getElementById("grossWeightType" + dc).value, "Please select Gross Weight Type!") == false) {
                document.getElementById("grossWeightType" + dc).focus();
                return false;
            }
            else if (document.getElementById("itemWeight" + dc).value == ' ~ Net Weight ~') {
                alert('Please enter Item Net Weight!');
                document.getElementById("itemWeight" + dc).focus();
                return false;
            }
            else if (validateEmptyField(document.getElementById("itemWeight" + dc).value, "Please enter Item Net Weight!") == false ||
                    validateNumWithDot(document.getElementById("itemWeight" + dc).value, "Accept only numeric characters without space character!") == false) {
                document.getElementById("itemWeight" + dc).focus();
                return false;
            }
            else if (validateSelectField(document.getElementById("weightType" + dc).value, "Please select Weight Type!") == false) {
                document.getElementById("weightType" + dc).focus();
                return false;
            }
            else if (validateSelectField(document.getElementById("itemTunch" + dc).value, "Please select Item Tunch!") == false) {
                document.getElementById("itemTunch" + dc).focus();
                return false;
            }
        }
        else if (document.getElementById("itemType" + dc).value == 'Other') {
            if (validateEmptyField(document.getElementById("girviValuationMan" + dc).value, "Please enter Item Valuation, for other item it is mandatory!") == false ||
                    validateNumWithDot(document.getElementById("girviValuationMan" + dc).value, "Accept only numeric characters without space character!") == false) {
                document.getElementById("girviValuationMan" + dc).focus();
                return false;
            }
        }
        itemEntered++;
    }
    else {
        if (itemEntered == 0) {
            alert('Please enter Item Details!');
            document.getElementById("itemName" + dc).focus();
            return false;
            exit();
        }
    }
    return true;
}
function add_girvi_Item_For_Loan(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertAddGirviItemForLoan;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertAddGirviItemForLoan() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }

}
function addGirviItemForLoan(obj) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (validateAddGirviItemInputsForLoan(obj)) {
        itemNames = "";
        itemLength = document.add_girvi_item.itemName.length;
        itemCounter = 0;
        for (i = 0; i < itemLength; i++) {
            if (document.add_girvi_item.itemName[i].selected == true && itemCounter % 2 == 0) {
                itemNames += document.add_girvi_item.itemName[i].value + ", ";
                itemCounter++;
            }
            else if (document.add_girvi_item.itemName[i].selected == true && itemCounter % 2 != 0) {
                itemNames += "<font color=blue>" + document.add_girvi_item.itemName[i].value + "</font>" + ", ";
                itemCounter++;
            }
        }

        itemNames = itemNames.slice(0, -2);
        var poststr;
        if (document.getElementById("itemType").value != 'Other') {
            poststr = "&custId=" + encodeURIComponent(document.getElementById("custId").value)
                    + "&itemName=" + encodeURIComponent(itemNames)
                    + "&itemType=" + encodeURIComponent(document.getElementById("itemType").value)
                    + "&itemPieces=" + encodeURIComponent(document.getElementById("itemPieces").value)
                    + "&grossItemWeight=" + encodeURIComponent(document.getElementById("grossWeight").value)
                    + "&grossWeightType=" + encodeURIComponent(document.getElementById("grossWeightType").value)
                    + "&itemWeight=" + encodeURIComponent(document.getElementById("itemWeight").value)
                    + "&weightType=" + encodeURIComponent(document.getElementById("weightType").value)
                    + "&itemTunch=" + encodeURIComponent(document.getElementById("itemTunch").value)
                    + "&addMoreItem=" + encodeURIComponent(girviMoreItem);
        }
        else {
            poststr = "&custId=" + encodeURIComponent(document.getElementById("custId").value)
                    + "&itemName=" + encodeURIComponent(itemNames)
                    + "&itemType=" + encodeURIComponent(document.getElementById("itemType").value)
                    + "&itemPieces=" + encodeURIComponent(document.getElementById("itemPieces").value)
                    + "&addMoreItem=" + encodeURIComponent(girviMoreItem);
        }
//        alert(poststr);
        add_girvi_Item_For_Loan('include/php/olacadgv.php', poststr);
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    }
}
/***********Start Code To add item_sell by final fine wt @Author: GAUR03MAR16***************/

function calculateItemSellByFineWt() {
    var wt = document.getElementById('slPrItemFineWeight').value;
    document.getElementById('addItemNTWNMetRate').value = ((Math_round(parseFloat(document.getElementById('slPrItemMetalRate').value) * wt)) / 10).toFixed(2);
    document.getElementById('slPrItemTotTax').value = Math_round((parseFloat(document.getElementById('addItemNTWNMetRate').value) * document.getElementById('slPrItemVATTax').value) / 100).toFixed(2);
    document.getElementById('slPrItemFinalVal').value = Math_round(parseFloat(document.getElementById('addItemNTWNMetRate').value) + parseFloat(document.getElementById('slPrItemLabCharges').value) + parseFloat(document.getElementById('slPrItemTotTax').value)).toFixed(2);
    document.getElementById('slPrItemFinalVal').value = Math_round(parseFloat(document.getElementById('slPrItemFinalVal').value) + parseFloat(document.getElementById('slPrCryVal1').value)).toFixed(2);
    return false;
}

/***********END Code To add item_sell by final fine wt @Author: GAUR03MAR16***************/

/***********Start code to add Payment form on supplier home @Author:SANT10FEB16*****************/
function showSuppPaymentDetailse(newItemGdFFNW, newItemGdFFNWT, newItemSlFFNW, newItemSlFFNWT) {
//  alert(newItemGdFFNW);
//  alert(newItemGdFFNWT);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("advMoneyDepositMonButDiv").style.visibility = "hidden";
            document.getElementById("ajaxLoadAdvMoneyDepositMon").style.visibility = "visible";
            document.getElementById("admnDepositMoneyDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("advMoneyDepositMonButDiv").style.visibility = "hidden";
            document.getElementById("ajaxLoadAdvMoneyDepositMon").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "include/php/ogspprdt.php?finalwt=" + newItemGdFFNW + "&finalwtp=" + newItemGdFFNWT + "&finalswt=" + newItemSlFFNW + "&finalswtp=" + newItemSlFFNWT, true);
    xmlhttp.send();

}
function getSuppRawMetalType(panelName, metalType, metalCount, firmId, rawGdPreId, rawGdPostId, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId, metalTypePanel, cntr, otherChgsBy, totFinGdWt, totFinSlWt) {
    loadXMLDoc();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("rawMetalIdDiv" + metalCount).innerHTML = xmlhttp.responseText;
            // calcItemBalance();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogsppydt.php?panelName=" + panelName + "&metalType=" + metalType +
            "&metalDivCount=" + metalCount + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&rawSlPreId=" + rawSlPreId + "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId + "&rawAlPostId=" + rawAlPostId + "&firmId=" + firmId +
            "&metalTypePanel=" + metalTypePanel + "&cntr=" + cntr + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt, true);
    xmlhttp.send();
}
//*******************************************************************************************************************
var goldWtBal;
var silverWtBal;
var GoldWtType;
var SilverWtType;
function calcSuppItemBalance() {

    var metalEntered = 0;
    var metalCount = document.getElementById("metalCount").value;
    if (document.getElementById('metalPanel').value == 'StockPayment' || document.getElementById('metalPanel').value == 'StockPayUp') {
        var prefix = 'stock';
    } else if (document.getElementById('metalPanel').value == 'SlPrPayment' || document.getElementById('metalPanel').value == 'SellPayUp') {
        prefix = 'slPr';
    } else if (document.getElementById('metalPanel').value == 'CustSellPayment' || document.getElementById('metalPanel').value == 'CustSellPayUp') {
        prefix = 'sell';
    } else if (document.getElementById('metalPanel').value == 'NwOrPayment' || document.getElementById('metalPanel').value == 'NwOrPayUp') {
        prefix = 'nwOr';
    } else if (document.getElementById('metalPanel').value == 'RawPayment' || document.getElementById('metalPanel').value == 'RawPayUp') {
        prefix = 'rwPr';
    } else if (document.getElementById('metalPanel').value == 'SuppAddOrder' || document.getElementById('metalPanel').value == 'SuppOrderUp') {
        prefix = 'spOr';
    }
    if (document.getElementById('metalPanel').value == 'StockPayment' || document.getElementById('metalPanel').value == 'SlPrPayment' ||
            document.getElementById('metalPanel').value == 'CustSellPayment' || document.getElementById('metalPanel').value == 'NwOrPayment' ||
            document.getElementById('metalPanel').value == 'RawPayment' || document.getElementById('metalPanel').value == 'SuppAddOrder') {
        count = 1;
        delId = 'del' + 1;
    } else if (document.getElementById('metalPanel').value == 'StockPayUp' || document.getElementById('metalPanel').value == 'SellPayUp' ||
            document.getElementById('metalPanel').value == 'CustSellPayUp' || document.getElementById('metalPanel').value == 'NwOrPayUp' ||
            document.getElementById('metalPanel').value == 'RawPayUp' || document.getElementById('metalPanel').value == 'SuppOrderUp') {
        getMetalDiv = document.getElementById('noOfRawMet').value;
        var count = document.getElementById('rawId').value;
        var delId = 'del' + count;
    }

    var totAmtRec = 0;
    var gdBal = 0;
    var slBal = 0;
    var totRecGd = 0;
    var totRecSl = 0;
    //    for (var dc = count; dc <= getMetalDiv; dc++) { 
    for (var dc = count; getMetalDiv != ''; dc++) {
        //if (document.getElementById('metalDel' + dc).value != 'Deleted') {
        var payTotalWeight1 = document.getElementById('PayMetal1RecWt').value;
        var payTotalWeightType1 = document.getElementById('PayMetal1RecWtType').value;
//            alert(payTotalWeightType1);
        var payMetalRate1 = document.getElementById('PayMetal1Rate').value;
        var payMetalTunch1 = document.getElementById('PayMetal1Tunch').value;
        var metalWeight = (payTotalWeight1 * payMetalTunch1) / 100;
        document.getElementById('PayMetal1FnWt').value = parseFloat(metalWeight).toFixed(2);
        if (document.getElementById('PayMetalType1').value == 'Gold' || document.getElementById('PayMetalType1').value == 'Alloy') {

            goldWeight = metalWeight;
            if (payTotalWeightType1 == 'KG') {
                document.getElementById('PayMetal1Val').value = ((goldWeight * payMetalRate1) * document.getElementById('gmWtInKg').value).toFixed(2);
            } else if (payTotalWeightType1 == 'GM') {
                document.getElementById('PayMetal1Val').value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value).toFixed(2);
            } else if (payTotalWeightType1 == 'MG') {
                document.getElementById('PayMetal1Val').value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInMg').value).toFixed(2);
            }

            if (document.getElementById('PayMetalType1').value == 'Gold') {

                var payMetalDueWeightType1 = (document.getElementById('GoldTotFineWtType').value);
                var goldWeightType = payMetalDueWeightType1;
//                    alert(payMetalDueWeightType1 + '-' + payTotalWeightType1);
                if (gdBal == '') {
                    gdBal = document.getElementById('GoldTotFineWt').value;
                    //alert(gdBal);
                }

                if (payMetalDueWeightType1 == 'KG') {
                    if (payTotalWeightType1 == 'KG') {
                        gdBal = parseFloat((gdBal) - goldWeight).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        gdBal = parseFloat(((gdBal) - goldWeight / 1000)).toFixed(2);
                        goldWeight = parseFloat(goldWeight / 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        gdBal = parseFloat(((gdBal) - goldWeight / (1000 * 1000))).toFixed(2);
                        goldWeight = parseFloat(goldWeight / (1000 * 1000)).toFixed(2);
                    }
                }
                else if (payMetalDueWeightType1 == 'GM') {
                    // alert('hi');
                    if (payTotalWeightType1 == 'KG') {
                        gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(2);

                        goldWeight = parseFloat(goldWeight * 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
//                        alert(goldWeight);

                        gdBal = parseFloat((gdBal) - goldWeight).toFixed(2);

                    }
                    else if (payTotalWeightType1 == 'MG') {
                        gdBal = parseFloat(((gdBal) - goldWeight / (1000))).toFixed(2);
                        goldWeight = parseFloat(goldWeight / 1000).toFixed(2);
                    }
                }
                else if (payMetalDueWeightType1 == 'MG') {
                    if (payTotalWeightType1 == 'KG') {
                        gdBal = parseFloat(((gdBal) - goldWeight * 1000 * 1000)).toFixed(2);
                        goldWeight = parseFloat(goldWeight * 1000 * 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(2);
                        goldWeight = parseFloat(goldWeight * 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        gdBal = parseFloat((gdBal - goldWeight)).toFixed(2);
                    }
                }
//                    alert(payMetalDueWeightType1);
                document.getElementById('PayMetal1Bal').value = gdBal;
                document.getElementById('PayMetalBal1Type').value = payMetalDueWeightType1;

                goldWtBal = parseFloat(gdBal).toFixed(3);
                GoldWtType = payMetalDueWeightType1;
//alert(goldWtBal);
                totRecGd += goldWeight;
//                    alert(totRecGd);
            }
        }
        if (document.getElementById('PayMetalType1').value == 'Silver') {
            silverWeight = metalWeight;
            if (payTotalWeightType1 == 'KG') {
                document.getElementById('PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1 * document.getElementById('srGmWtInKg').value)).toFixed(2);
            } else if (payTotalWeightType1 == 'GM') {
                document.getElementById('PayMetal1Val').value = ((silverWeight * payMetalRate1) / document.getElementById('srGmWtInGm').value).toFixed(2);
            } else if (payTotalWeightType1 == 'MG') {
                document.getElementById('PayMetal1Val').value = ((silverWeight * payMetalRate1) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
            }

            payMetalDueWeightType1 = document.getElementById('SilverTotFineWtType').value;
            var silverWeightType = payMetalDueWeightType1;
            if (slBal == '') {
                slBal = document.getElementById('SilverTotFineWt').value;
            }
            if (payMetalDueWeightType1 == 'KG') {
                if (payTotalWeightType1 == 'KG') {
                    slBal = parseFloat((slBal) - silverWeight).toFixed(2);
                }
                else if (payTotalWeightType1 == 'GM') {
                    slBal = parseFloat(((slBal) - silverWeight / 1000)).toFixed(2);
                    silverWeight = parseFloat(silverWeight / 1000).toFixed(2);
                }
                else if (payTotalWeightType1 == 'MG') {
                    slBal = parseFloat(((slBal) - silverWeight / (1000 * 1000))).toFixed(2);
                    silverWeight = parseFloat(silverWeight / (1000 * 1000)).toFixed(2);
                }
            }
            else if (payMetalDueWeightType1 == 'GM') {
                if (payTotalWeightType1 == 'KG') {
                    slBal = parseFloat(((slBal) - silverWeight * 1000)).toFixed(2);
                    silverWeight = parseFloat(silverWeight * 1000).toFixed(2);
                }
                else if (payTotalWeightType1 == 'GM') {
                    slBal = parseFloat((slBal) - silverWeight).toFixed(2);
                }
                else if (payTotalWeightType1 == 'MG') {
                    slBal = parseFloat(((slBal) - silverWeight / (1000))).toFixed(2);
                    silverWeight = parseFloat(silverWeight / 1000).toFixed(2);
                }
            } else if (payMetalDueWeightType1 == 'MG') {
                if (payTotalWeightType1 == 'KG') {
                    slBal = parseFloat(((slBal) - silverWeight * 1000 * 1000)).toFixed(2);
                    silverWeight = parseFloat(silverWeight * 1000 * 1000).toFixed(2);
                }
                else if (payTotalWeightType1 == 'GM') {
                    slBal = parseFloat(((slBal) - silverWeight * 1000)).toFixed(2);
                    silverWeight = parseFloat(silverWeight * 1000).toFixed(2);
                }
                else if (payTotalWeightType1 == 'MG') {
                    slBal = parseFloat((slBal - silverWeight)).toFixed(2);
                }
            }
            document.getElementById('PayMetal1Bal').value = slBal;
            document.getElementById('PayMetalBal1Type').value = payMetalDueWeightType1;
//                alert(silverWtBal);
            silverWtBal = parseFloat(slBal).toFixed(3);
            SilverWtType = payMetalDueWeightType1;

            totRecSl += silverWeight;
        }
        document.getElementById('metal1WtRecBal').value = parseFloat(totRecGd).toFixed(3) + ' ' + goldWeightType;
        document.getElementById('metal1WtRecBal1').value = parseFloat(totRecGd).toFixed(3);
        document.getElementById('metal1WtRecBal1Typ').value = goldWeightType;
        document.getElementById('metal2WtRecBal').value = parseFloat(totRecSl).toFixed(3) + ' ' + silverWeightType;
        document.getElementById('metal2WtRecBal1').value = parseFloat(totRecSl).toFixed(3);
        document.getElementById('metal2WtRecBal1Typ').value = silverWeightType;

        if (document.getElementById('PayMetal1Val').value == '') {
            document.getElementById('PayMetal1Val').value = 0;
        }
        totAmtRec += parseFloat(document.getElementById('PayMetal1Val').value);
        document.getElementById('PayTotAmtRec').value = parseFloat(totAmtRec).toFixed(2);
//            alert('paytotamtrec='+document.getElementById(prefix + 'PayTotAmtRec').value);
        document.getElementById('PayTotAmtRecDisp').value = document.getElementById('PayTotAmtRec').value;
//            calcCashBalance(prefix);
        calcRawMetStock(prefix);

        metalEntered++;
    }
    return false;
}
//***********************************************************************************************************************
/*************Start code to add serialNum @Author:SANT11FEB16*******************/
//var delRawString = '';
var delRawString = '';
function closeSuppRawMetalDiv(metalCnt, panelName) {
    delRawString = delRawString + metalCnt;
    metalPanel = panelName;
    var metmin = metalCnt - 1;
    var d = metalCnt - 1;
    var a = d - 1;
    document.getElementById("metalDel" + metalCnt).value = 'Deleted';
    if ((a == metmin || d == metmin) && metmin != 0) {
        if (document.getElementById("metalDel" + metmin).value != 'Deleted') {
            document.getElementById("metalDiv" + metmin).value = 'true';
        }
    }
    if (metmin == 0) {
        document.getElementById("metalDiv" + metalCnt).value = 'true';
    }
    document.getElementById("rawMetalDiv" + metalCnt).innerHTML = "";
    if (panelName == 'SuppRawDep')
        calSuppDepositBalance();
    else
        calcSuppItemBalance();
}

function getSuppMoreStockRawMetalDiv(metalCnt, panelName, firmId, rawGdPreId, rawGdPostId, metalType, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId,
        metalPanelName, mcntr, rawPreId, rawPostId, otherChgsBy, totFinGdWt, totFinSlWt) {
    metalPanel = panelName;
    metalCount = metalCnt;
    if (metalCount != '') {
        getMetalDiv = metalCount;
    }
    var poststr = "metalDivCount=" + metalCount
            + "&panelName=" + panelName + "&firmId=" + firmId
            + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&metalType=" + metalType + "&rawSlPreId=" + rawSlPreId +
            "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId +
            "&rawAlPostId=" + rawAlPostId + "&metalPanelName=" + metalPanelName
            + "&mcntr=" + mcntr + "&rawPreId=" + rawPreId + "&rawPostId=" + rawPostId
            + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt;

    get_more_raw_metal_div('include/php/ogsppydt.php', poststr);
    return false;
}
/*************End code to add serialNum @Author:SANT11FEB16*******************/
/***********START Code To add itemsaleratecut by final fine wt @Author: GAUR07APR16***************/
/***********START Code To add itemsaleratecut by final fine wt @Author: GAUR24MAY16***************/

//**********End code to check condition for CustSellPayment @Author:SANT30NOV16
//**********End code to check condition for CustSellPayment @Author:GAUR17NOV16
//**********End code to check condition for metalCOunt:Author:SANT20OCT16
/***********END Code To add itemsaleratecut by final fine wt @Author: GAUR24MAY16****************/
/***********END Code To add itemsaleratecut by final fine wt @Author: GAUR07APR16***************/
/***********END Code To add itemsaleratecut by final fine wt @Author: GAUR01APR16***************/

/***********START Code To add calc itemsaleratecut by final fine wt @Author: GAUR03MAR16***************/
function calcItemSaleRateCut(prefix) {
    var goldBal = parseFloat(docume.getElementById('metal1RtCtWtBal1').value);
    var goldWtType = document.getElementById('metal1RtCtWtType').value;
    if (goldBal != '') {
        document.getElementById(prefix + 'PayMetal1WtBal').value = parseFloat(goldBal - parseFloat(document.getElementById('metal1RtCtWt').value)).toFixed(3);
        document.getElementById('metal1RtCtWtBalDisp').value = document.getElementById('metal1RtCtWt').value + ' ' + goldWtType;
    }
    var silverBal = parseFloat(document.getElementById('metal2RtCtWtBal1').value);
    var silverWtType = document.getElementById('metal2RtCtWtType').value;
    if (silverBal != '') {
        document.getElementById(prefix + 'PayMetal2WtBal').value = parseFloat(silverBal - parseFloat(document.getElementById('metal2RtCtWt').value)).toFixed(3);
        document.getElementById('metal2RtCtWtBalDisp').value = document.getElementById('metal2RtCtWt').value + ' ' + silverWtType;
    }
    calcRawMetStock(prefix);
}
/***********END Code To add calc itemsaleratecut by final fine wt @Author: GAUR03MAR16***************/

/****************************START Code ADD MULTIPLE ROW @Author: GAUR03MAR16*********************************************/
function getMoreStockRawMetalDivForItemSell(metalCnt, panelName, firmId, rawGdPreId, rawGdPostId, metalType, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId,
        metalPanelName, mcntr, rawPreId, rawPostId, otherChgsBy, totFinGdWt, totFinSlWt) {
    metalPanel = panelName;
    metalCount = metalCnt;
    if (metalCount != '') {
        getMetalDiv = metalCount;
    }
    var poststr = "metalDivCount=" + metalCount
            + "&panelName=" + panelName + "&firmId=" + firmId
            + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&metalType=" + metalType + "&rawSlPreId=" + rawSlPreId +
            "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId +
            "&rawAlPostId=" + rawAlPostId + "&metalPanelName=" + metalPanelName
            + "&mcntr=" + mcntr + "&rawPreId=" + rawPreId + "&rawPostId=" + rawPostId
            + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt;

    get_more_raw_metal_div('include/php/ogspmpydt.php', poststr);
    return false;
}
/****************************END Code ADD MULTIPLE ROW @Author:GAUR03MAR16*********************************************/
/****************************END Code ADD MULTIPLE ROW @Author: GAUR15FEB16*********************************************/

/****************************START Code ADD change the dropdown condition @Author: GAUR03MAR16*********************************************/
/****************************START Code ADD if condition of slprinPanel @Author: GAUR09MAY16*********************************************/
function changeStockOtherChgsOptItemSell(otherChgsBy, sellPanelName, preInvoiceNo, invoiceNo, slprinPanel)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('main_ajax_loading_div').style.visibility = "hidden";
            if (sellPanelName == 'SlPrPayment') {
                document.getElementById('slPrMainDiv').innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById('slPrCurrentInvBeforePay').innerHTML = xmlhttp.responseText;
            }
            if (sellPanelName == 'SellPayUp') {
                calcWholeSaleRateCut('slPr');
                calcStockRrCtCashBalance('slPr');
            }
        } else {
            document.getElementById('main_ajax_loading_div').style.visibility = "visible";
        }
    };
    if (sellPanelName == 'SlPrPayment') {
        xmlhttp.open("POST", "include/php/ogcmemdv.php?otherChgsBy=" + otherChgsBy + "&paymentPanelName=" + sellPanelName + "&sellPanelName=" + sellPanelName + "&preInvoiceNo=" + preInvoiceNo + "&postInvoiceNo=" + invoiceNo + "&slprinPanel=" + slprinPanel, true);
    } else {
        xmlhttp.open("POST", "include/php/ogspindv.php?otherChgsBy=" + otherChgsBy + "&paymentPanelName=" + sellPanelName + "&sellPanelName=" + sellPanelName + "&preInvoiceNo=" + preInvoiceNo + "&postInvoiceNo=" + invoiceNo + "&slprinPanel=" + slprinPanel + "&mainPanel=ItemPurchase", true);
    }
    xmlhttp.send();
}
/****************************END Code ADD if condition of slprinPanel @Author: GAUR09MAY16*********************************************/
/****************************End Code ADD change the dropdown condition @Author: GAUR03MAR16*********************************************/

//******************************************************************Start code to change supplier home panel Author@:SANT22MAR16********************
//*******Start code to change supplier home panel Author@:SANT19OCT16********************
function showSuppPurchaseDetails(newPreInvoiceNo, newInvoiceNo, navPanel, suppId, payId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (navPanel == 'InvoiceDetails') {
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (navPanel == 'InvoiceDetails') {
        xmlhttp.open("POST", "include/php//ogwhmndv.php?suppId=" + suppId + "&suppPanelOption=SuppHome", true);
    } else {
        xmlhttp.open("POST", "include/php/ogpayment.php?paymentPanelName=" + navPanel + "&preInvNo=" + newPreInvoiceNo + "&postInvNo=" + newInvoiceNo + "&suppId=" + suppId + "&suppPayId=" + payId, true);
    }
    xmlhttp.send();
}
//*******End code to change supplier home panel Author@:SANT19OCT16********************
function getSuppStockRawMetalType(panelName, metalType, metalCount, firmId, rawGdPreId, rawGdPostId, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId, metalTypePanel, cntr, otherChgsBy, totFinGdWt, totFinSlWt, goldTotFFineWtType, silverTotFFineWtType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("rawMetalIdDiv" + metalCount).innerHTML = xmlhttp.responseText;
            // calcItemBalance();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogsppydt.php?panelName=" + panelName + "&metalType=" + metalType +
            "&metalDivCount=" + metalCount + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&rawSlPreId=" + rawSlPreId + "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId + "&rawAlPostId=" + rawAlPostId + "&firmId=" + firmId +
            "&metalTypePanel=" + metalTypePanel + "&cntr=" + cntr + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt + "&goldTotFFineWtType=" + goldTotFFineWtType + "&silverTotFFineWtType=" + silverTotFFineWtType, true);
    xmlhttp.send();
}
//****************************Start code to change supplier prev balance type show Author@:SANT5MAR16************************
//****************************Start code to change supplier prev balance type show Author@:SANT8MAR16************************
//****************************Start code to change supplier prev balance type show Author@:SANT12MAR16************************
function calcSuppStockItemBalance() {
    if (document.getElementById('totGdPaidWt').value == 'NaN' || document.getElementById('totGdPaidWt').value == '') {
        document.getElementById('totGdPaidWt').value = 0.00;
    }
    if (document.getElementById('totSlPaidWt').value == 'NaN' || document.getElementById('totSlPaidWt').value == '') {
        document.getElementById('totSlPaidWt').value = 0.00;
    }
// var totGdPaidWt = document.getElementById('totGdPaidWt').value;
//var totSlPaidWt = document.getElementById('totSlPaidWt').value;
    var metalEntered = 0;
    var metalCount = document.getElementById("metalCount").value;
    var prefix = 'supDep';

    var count = 1;
    var delId = 'del' + 1;
    var totAmtRec = 0;
    var gdBal = 0;
    var slBal = 0;
    var totRecGd = 0;
    var totRecSl = 0;
    var goldWeight = 0;
    var silverWeight = 0;
    var silverWeightType = '';
    var goldWeightType = '';
//    GoldWtType = '';
//    SilverWtType = '';
//    goldWtBal = 0;
//    silverWtBal = 0;
    //    for (var dc = count; dc <= getMetalDiv; dc++) { 
    for (var dc = count; getMetalDiv != ''; dc++) {
        if (document.getElementById('metalDel' + dc).value != 'Deleted') {
            var payTotalWeight1 = document.getElementById(prefix + 'PayMetal1RecWt' + dc).value;
            var payTotalWeightType1 = document.getElementById(prefix + 'PayMetal1RecWtType' + dc).value;
//            alert(payTotalWeightType1);
            var payMetalRate1 = document.getElementById(prefix + 'PayMetal1Rate' + dc).value;
            var payMetalTunch1 = document.getElementById(prefix + 'PayMetal1Tunch' + dc).value;
            var metalWeight = (payTotalWeight1 * payMetalTunch1) / 100;
            document.getElementById(prefix + 'PayMetal1FnWt' + dc).value = parseFloat(metalWeight).toFixed(2);
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold' || document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Alloy') {
                goldWeight = metalWeight;
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) * document.getElementById('gmWtInKg').value).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInMg').value).toFixed(2);
                }

                if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold') {
                    var payMetalDueWeightType1 = document.getElementById(prefix + 'GoldTotFineWtType').value;
                    goldWeightType = payMetalDueWeightType1;
//                    alert(payMetalDueWeightType1 + '-' + payTotalWeightType1);
                    if (gdBal == '') {
                        gdBal = document.getElementById(prefix + 'GoldTotFineWt').value;
                    }

                    if (payMetalDueWeightType1 == 'KG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight / 1000)).toFixed(2);
                            goldWeight = parseFloat(goldWeight / 1000).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat(((gdBal) - goldWeight / (1000 * 1000))).toFixed(2);
                            goldWeight = parseFloat(goldWeight / (1000 * 1000)).toFixed(2);
                        }
                    }
                    else if (payMetalDueWeightType1 == 'GM') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(2);
                            goldWeight = parseFloat(goldWeight * 1000).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat(((gdBal) - goldWeight / (1000))).toFixed(2);
                            goldWeight = parseFloat(goldWeight / 1000).toFixed(2);
                        }
                    }
                    else if (payMetalDueWeightType1 == 'MG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000 * 1000)).toFixed(2);
                            goldWeight = parseFloat(goldWeight * 1000 * 1000).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(2);
                            goldWeight = parseFloat(goldWeight * 1000).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat((gdBal - goldWeight)).toFixed(2);
                        }
                    }
//                    alert(payMetalDueWeightType1);
                    document.getElementById(prefix + 'PayMetal1Bal' + dc).value = gdBal;
                    document.getElementById(prefix + 'PayMetalBal1Type' + dc).value = payMetalDueWeightType1;

                    goldWtBal = parseFloat(gdBal).toFixed(3);
                    GoldWtType = payMetalDueWeightType1;
//alert(goldWtBal);
                    totRecGd += goldWeight;
                }
            }
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Silver') {
                silverWeight = metalWeight;
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1 * document.getElementById('srGmWtInKg').value)).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1) / document.getElementById('srGmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                }

                payMetalDueWeightType1 = document.getElementById(prefix + 'SilverTotFineWtType').value;
                silverWeightType = payMetalDueWeightType1;
                if (slBal == '') {
                    slBal = document.getElementById(prefix + 'SilverTotFineWt').value;
                }
                if (payMetalDueWeightType1 == 'KG') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat((slBal) - silverWeight).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat(((slBal) - silverWeight / 1000)).toFixed(2);
                        silverWeight = parseFloat(silverWeight / 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat(((slBal) - silverWeight / (1000 * 1000))).toFixed(2);
                        silverWeight = parseFloat(silverWeight / (1000 * 1000)).toFixed(2);
                    }
                }
                else if (payMetalDueWeightType1 == 'GM') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000)).toFixed(2);
                        silverWeight = parseFloat(silverWeight * 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat((slBal) - silverWeight).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat(((slBal) - silverWeight / (1000))).toFixed(2);
                        silverWeight = parseFloat(silverWeight / 1000).toFixed(2);
                    }
                } else if (payMetalDueWeightType1 == 'MG') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000 * 1000)).toFixed(2);
                        silverWeight = parseFloat(silverWeight * 1000 * 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000)).toFixed(2);
                        silverWeight = parseFloat(silverWeight * 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat((slBal - silverWeight)).toFixed(2);
                    }
                }
                document.getElementById(prefix + 'PayMetal1Bal' + dc).value = slBal;
                document.getElementById(prefix + 'PayMetalBal1Type' + dc).value = payMetalDueWeightType1;
                silverWtBal = parseFloat(slBal).toFixed(3);
                SilverWtType = payMetalDueWeightType1;

                totRecSl += silverWeight;
            }
            document.getElementById('metal1WtRecBal').value = parseFloat(parseFloat(totRecGd)).toFixed(3) + ' ' + goldWeightType;
            document.getElementById('metal1WtRecBal1').value = parseFloat(totRecGd).toFixed(3);
            document.getElementById('metal1WtRecBal1Typ').value = goldWeightType;
            document.getElementById('metal2WtRecBal').value = parseFloat(parseFloat(totRecSl)).toFixed(3) + ' ' + silverWeightType;
            document.getElementById('metal2WtRecBal1').value = parseFloat(totRecSl).toFixed(3);
            document.getElementById('metal2WtRecBal1Typ').value = silverWeightType;

            if (document.getElementById(prefix + 'PayMetal1Val' + dc).value == '') {
                document.getElementById(prefix + 'PayMetal1Val' + dc).value = 0;
            }
            totAmtRec += parseFloat(document.getElementById(prefix + 'PayMetal1Val' + dc).value);
//            document.getElementById(prefix + 'PayTotAmtRec').value = parseFloat(totAmtRec).toFixed(2);
////            alert('paytotamtrec='+document.getElementById(prefix + 'PayTotAmtRec').value);
//            document.getElementById(prefix + 'PayTotAmtRecDisp').value = document.getElementById(prefix + 'PayTotAmtRec').value;
//            calcCashBalance(prefix);
            calcSuppRawMetStock(prefix);
        }
        metalEntered++;
    }
    return false;
}

//****************************End code to change supplier prev balance type show Author@:SANT12MAR16************************
//****************************End code to change supplier prev balance type show Author@:SANT8MAR16************************
//****************************End code to change supplier prev balance type show Author@:SANT5MAR16************************
//****************************Start code to change supplier prev balance type show Author@:SANT6APR16************************
function setSuppRateCutValues() {
    if (goldWtBal != 0 || goldWtBal != '') {
        document.getElementById('metal1RtCtWt').value = parseFloat(goldWtBal).toFixed(3);
        document.getElementById('metal1RtCtWtBal1').value = goldWtBal;
        document.getElementById('metal1RtCtWtType').value = GoldWtType;
        document.getElementById('supDepPayMetal1WtBal').value = goldWtBal;
        document.getElementById('supDepPayMetal1WtBalType').value = GoldWtType;
    }
    if (silverWtBal != 0 || silverWtBal != '') {
        document.getElementById('metal2RtCtWt').value = parseFloat(silverWtBal).toFixed(3);
        document.getElementById('metal2RtCtWtBal1').value = parseFloat(silverWtBal).toFixed(3);
        document.getElementById('metal2RtCtWtType').value = SilverWtType;
        document.getElementById('supDepPayMetal2WtBal').value = silverWtBal;
        document.getElementById('supDepPayMetal2WtBalType').value = SilverWtType;
    }
}
/***********End code to add Payment form on supplier home @Author:SANT6APR16*****************/
/***********End code to add Payment form on supplier home @Author:SANT10FEB16*****************/
function checkSuppRawStockWeight(rawPreId, rawPostId, rawMetalType, rawMetalId, recWt, recWtType, panelName, rwSlStatus) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (xmlhttp.responseText == 'SUCCESS') {
                document.getElementById("checkStatus").value = 'true';
                return true;
            } else if (xmlhttp.responseText != 'SUCCESS' && xmlhttp.responseText != '' && (panelName == 'StockPayUp' && rwSlStatus == 'PaymentDone')) {
                document.getElementById("checkStatus").value = 'false';
                alert(xmlhttp.responseText);
                return false;
            }
        }
    };
    xmlhttp.open("POST", "include/php/ogwrwtch.php?rawPreId=" + rawPreId + "&rawPostId=" + rawPostId + "&rawMetalType=" + rawMetalType + "&rawMetalId=" + rawMetalId + "&recWt=" + recWt + "&recWtType=" + recWtType, true);
    xmlhttp.send();
    // return false;
}

//******************************Start code to change supp home page rate cut Author:@SANT10MAR16*****************************
function wholesaleSuppRateCut(rateCutId, goldTotFFineWt, goldTotFFineWtType, silverTotFFineWt, silverTotFFineWtType, totGoldPay, totSilverPay, totpaidfinalgd, totpaidfinalsl, goldRate, silverRate, payPanelName, otherCharges, otherChgsBy, suppId, preInvNo, invNo) {
//    alert(rateCutId+'-'+goldTotFFineWt+'-'+goldTotFFineWtType+'-'+silverTotFFineWt+'-'+silverTotFFineWtType+'-'+totGoldPay+'-'+totSilverPay+'-'+goldRate+'-'+silverRate+'-'+payPanelName+'-'+otherCharges+'-'+otherChgsBy+'-'+suppId+'-'+preInvNo+'-'+invNo);
    var poststr = "rateCutOpt=" + encodeURIComponent(rateCutId) +
            "&goldTotFFineWt=" + encodeURIComponent(goldTotFFineWt) +
            "&goldTotFFineWtType=" + encodeURIComponent(goldTotFFineWtType) +
            "&silverTotFFineWt=" + encodeURIComponent(silverTotFFineWt) +
            "&silverTotFFineWtType=" + encodeURIComponent(silverTotFFineWtType) +
            "&totGoldPay=" + encodeURIComponent(totGoldPay) +
            "&totSilverPay=" + encodeURIComponent(totSilverPay) +
            "&totpaidfinalgd=" + encodeURIComponent(totpaidfinalgd) +
            "&totpaidfinalsl=" + encodeURIComponent(totpaidfinalsl) +
            "&goldRate=" + encodeURIComponent(goldRate) +
            "&silverRate=" + encodeURIComponent(silverRate) +
            "&otherCharges=" + encodeURIComponent(otherCharges) +
            "&payPanelName=" + encodeURIComponent(payPanelName) +
            "&otherChgsBy=" + encodeURIComponent(otherChgsBy) +
            "&payId=" + encodeURIComponent(document.getElementById('payId').value) +
            "&preInvId=" + encodeURIComponent(preInvNo) +
            "&invId=" + encodeURIComponent(invNo) +
            "&suppId=" + encodeURIComponent(suppId) +
            "&goldLeft=" + encodeURIComponent(document.getElementById('goldLeft').value) +
            "&silverLeft=" + encodeURIComponent(document.getElementById('silverLeft').value);
    if (rateCutId == 'RateCut') {
        wholesale_rate_cut("include/php/ogsprtct.php", poststr);
    } else {
        wholesale_rate_cut("include/php/ogspnrc.php", poststr);
    }
}
//******************************End code to change supp home page rate cut Author:@SANT10MAR16*****************************
//******************************End code to change supp home page rate cut Author:@SANT12MAR16*****************************
function calcSuppStockRrCtCashBalance(prefix) {

    if (document.getElementById(prefix + 'PayCashAmtRec').value != '' || document.getElementById(prefix + 'PayChequeAmt').value || document.getElementById(prefix + 'totPrevCash').value) {
        var totalCashPaidAmt = document.getElementById(prefix + 'PayCashAmtRec').value;
        if (totalCashPaidAmt == null || totalCashPaidAmt == '') {
            totalCashPaidAmt = 0;
        }
        var totalChequeAmt = document.getElementById(prefix + 'PayChequeAmt').value;
        if (totalChequeAmt == null || totalChequeAmt == '') {
            totalChequeAmt = 0;
        }
        var totalCardAmt = document.getElementById(prefix + 'PayCardAmt').value;
        if (totalCardAmt == null || totalCardAmt == '') {
            totalCardAmt = 0;
        }
        var totPrevCashh = document.getElementById(prefix + 'totPrevCash').value;
        if (totPrevCashh == null || totPrevCashh == '') {
            totPrevCashh = 0;
        }
        document.getElementById(prefix + 'PayCashRecDisp').value = Math_round(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);
        document.getElementById(prefix + 'PayTotCashAmt').value = parseFloat(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);
    }

    if (document.getElementById('VATTax').value != '' || document.getElementById('VATTax').value != null) {
        var totalValuation = document.getElementById('taxOnTotAmt').value;
        if (totalValuation == null || totalValuation == '') {
            totalValuation = 0;
        }
        if (document.getElementById('VATTax').value == '') {
            document.getElementById('VATTax').value = 0;
        }
        var totTax = parseFloat(document.getElementById('VATTax').value) / 100;
        document.getElementById(prefix + 'PayVATAmtDisp').value = Math_round(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);
        document.getElementById(prefix + 'PayVATAmt').value = parseFloat(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);

    }

    if (document.getElementById(prefix + 'PayVATAmt').value == 'NaN' || document.getElementById(prefix + 'PayVATAmt').value == '') {
        document.getElementById(prefix + 'PayVATAmt').value = 0.00;
    }
    if (document.getElementById(prefix + 'PayTotCashAmt').value || document.getElementById(prefix + 'PayVATAmt').value || document.getElementById(prefix + 'PayDiscount').value != '') {
        var totalAmt = 0;
        if (document.getElementById(prefix + 'PayTotAmt').value == '' || document.getElementById(prefix + 'PayTotAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayTotAmt').value = 0;
        }
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (document.getElementById(prefix + 'PayTotAmtRec').value == '' || document.getElementById(prefix + 'PayTotAmtRec').value == 'NaN') {
                document.getElementById(prefix + 'PayTotAmtRec').value = 0;
            }
            totalAmt = parseFloat(document.getElementById(prefix + 'PayTotAmtRec').value) + parseFloat(document.getElementById(prefix + 'PayTotAmt').value);
        } else {
            totalAmt = parseFloat(document.getElementById(prefix + 'PayTotAmt').value);
        }
        if (document.getElementById(prefix + 'PayPrevTotAmt').value == 'NaN' || document.getElementById(prefix + 'PayPrevTotAmt').value == '') {
            document.getElementById(prefix + 'PayPrevTotAmt').value = 0;
        }
        if (document.getElementById(prefix + 'PayPrevTotAmt').value != '' || document.getElementById(prefix + 'PayPrevTotAmt').value != 0) {
            if (document.getElementById(prefix + 'PayPrevTotAmt').value > 0) {
                totalAmt = totalAmt + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value);
            } else {
                totalAmt = totalAmt - Math.abs(parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value));
            }
        }
        if (document.getElementById(prefix + 'PayVATAmt').value == '' || document.getElementById(prefix + 'PayVATAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayVATAmt').value = 0;
        }
        if (document.getElementById(prefix + 'PayDiscount').value == '' || document.getElementById(prefix + 'PayDiscount').value == 'NaN') {
            document.getElementById(prefix + 'PayDiscount').value = 0;
        }
        if (document.getElementById(prefix + 'PayTotCashAmt').value == '' || document.getElementById(prefix + 'PayTotCashAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayTotCashAmt').value = 0;
        }
        document.getElementById(prefix + 'PayDiscountDisp').value = Math_round(parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
//        alert('calcStockRrCtCashBalance='+document.getElementById(prefix + 'PayFinAmtBalDisp').value);
        document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
    }
}
//**********************************Start code to change supp home page Author:SANT12MAR16
function calcSuppWholeSaleRateCut(prefix) {
    var goldBal = parseFloat(document.getElementById('metal1RtCtWtBal1').value);
    var goldWtType = document.getElementById('metal1RtCtWtType').value;
    if (goldBal != '') {
        document.getElementById(prefix + 'PayMetal1WtBal').value = parseFloat(goldBal - parseFloat(document.getElementById('metal1RtCtWt').value)).toFixed(3);
        document.getElementById('metal1RtCtWtBalDisp').value = document.getElementById('metal1RtCtWt').value + ' ' + goldWtType;
    }
    var silverBal = parseFloat(document.getElementById('metal2RtCtWtBal1').value);
    var silverWtType = document.getElementById('metal2RtCtWtType').value;
    if (silverBal != '') {
        document.getElementById(prefix + 'PayMetal2WtBal').value = parseFloat(silverBal - parseFloat(document.getElementById('metal2RtCtWt').value)).toFixed(3);
        document.getElementById('metal2RtCtWtBalDisp').value = document.getElementById('metal2RtCtWt').value + ' ' + silverWtType;
    }
    calcSuppRawMetStock(prefix);
}
//**********************************End code to change supp home page Author:SANT12MAR16
//**********************************End code to change supp home page Author:@SANT8MAR16
function getMoreSuppStockRawMetalDiv(metalCnt, panelName, firmId, rawGdPreId, rawGdPostId, metalType, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId,
        metalPanelName, mcntr, rawPreId, rawPostId, otherChgsBy, totFinGdWt, totFinSlWt, goldTotFFineWtType, silverTotFFineWtType) {
    metalPanel = panelName;
    metalCount = metalCnt;
    if (metalCount != '') {
        getMetalDiv = metalCount;
    }
    var poststr = "metalDivCount=" + metalCount
            + "&panelName=" + panelName + "&firmId=" + firmId
            + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&metalType=" + metalType + "&rawSlPreId=" + rawSlPreId +
            "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId +
            "&rawAlPostId=" + rawAlPostId + "&metalPanelName=" + metalPanelName
            + "&mcntr=" + mcntr + "&rawPreId=" + rawPreId + "&rawPostId=" + rawPostId
            + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt + "&goldTotFFineWtType=" + goldTotFFineWtType + "&silverTotFFineWtType=" + silverTotFFineWtType;

    get_more_raw_metal_div('include/php/ogsppydt.php', poststr);
    return false;
}
//******************************************************************Start code to change supplier home panel Author@:SANT7MAR16********************
function closeAdvMoney1DepositDiv() {
//    document.getElementById('stockPanelSubDiv').style.display = "none";
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("advMoneyDepositMonButDiv" + admnDepId).style.visibility = "visible";
            document.getElementById('stockPanelSubDiv').innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxCloseAdvMoneyDepositMonDiv").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//******************************************************************End code to change supplier home panel Author@:SANT7MAR16********************
function showPayPanel() {
    document.getElementById('stockPanelSubDiv').style.display = "block";
}
//******************************************************************End code to change supplier home panel Author@:SANT29FEB16********************
/****************************Start Code calculation @Author: GAUR21APR16*********************************************/
/****************************Start Code calculation @Author: GAUR20MAY16*********************************************/
var goldWtBal = 0;
var silverWtBal = 0;
var GoldWtType = null;
var SilverWtType = null;
var stockDiv = null;

function calcStockItemBalanceForItemSell() {
    var metalEntered = 0;
    var metalCount = document.getElementById("metalCount").value;
    if (document.getElementById('metalPanel').value == 'SlPrPayment' || document.getElementById('metalPanel').value == 'SellPayUp') {
        var prefix = 'slPr';
    }
    if (document.getElementById('metalPanel').value == 'SlPrPayment') {
        count = 1;
        delId = 'del' + 1;
    } else if (document.getElementById('metalPanel').value == 'SellPayUp') {
        getMetalDiv = document.getElementById('noOfRawMet').value;
        var count = document.getElementById('rawId').value;
        var delId = 'del' + count;
    }
    var totAmtRec = 0;
    var gdBal = 0;
    var slBal = 0;
    var totRecGd = 0;
    var totRecSl = 0;
    var goldWeight = 0;
    var silverWeight = 0;
    var silverWeightType = '';
    var goldWeightType = '';
    GoldWtType = '';
    SilverWtType = '';
    goldWtBal = 0;
    silverWtBal = 0;
    for (var dc = count; getMetalDiv != ''; dc++) {
        if (document.getElementById('metalDel' + dc).value != 'Deleted') {
            var payTotalWeight1 = document.getElementById(prefix + 'PayMetal1RecWt' + dc).value;
            var payTotalWeightType1 = document.getElementById(prefix + 'PayMetal1RecWtType' + dc).value;
            var payMetalRate1 = document.getElementById(prefix + 'PayMetal1Rate' + dc).value;
            var payMetalTunch1 = document.getElementById(prefix + 'PayMetal1Tunch' + dc).value;
            var metalWeight = (payTotalWeight1 * payMetalTunch1) / 100;
            document.getElementById(prefix + 'PayMetal1FnWt' + dc).value = parseFloat(metalWeight).toFixed(2);
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold' || document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Alloy') {
                goldWeight = metalWeight;
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) * document.getElementById('gmWtInKg').value).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInMg').value).toFixed(2);
                }
                if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold') {
                    var payMetalDueWeightType1 = document.getElementById(prefix + 'GoldTotFineWtType').value;
                    goldWeightType = payMetalDueWeightType1;
                    if (gdBal == '') {
                        gdBal = document.getElementById(prefix + 'GoldTotFineWt').value;
                    }
                    if (payMetalDueWeightType1 == 'KG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight / 1000)).toFixed(3);
                            goldWeight = parseFloat(goldWeight / 1000).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat(((gdBal) - goldWeight / (1000 * 1000))).toFixed(3);
                            goldWeight = parseFloat(goldWeight / (1000 * 1000)).toFixed(3);
                        }
                    }
                    else if (payMetalDueWeightType1 == 'GM') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(3);
                            goldWeight = parseFloat(goldWeight * 1000).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat(((gdBal) - goldWeight / (1000))).toFixed(3);
                            goldWeight = parseFloat(goldWeight / 1000).toFixed(3);
                        }
                    }
                    else if (payMetalDueWeightType1 == 'MG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000 * 1000)).toFixed(3);
                            goldWeight = parseFloat(goldWeight * 1000 * 1000).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(3);
                            goldWeight = parseFloat(goldWeight * 1000).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat((gdBal - goldWeight)).toFixed(3);
                        }
                    }
                    document.getElementById(prefix + 'PayMetal1Bal' + dc).value = gdBal;
                    document.getElementById(prefix + 'PayMetalBal1Type' + dc).value = payMetalDueWeightType1;

                    goldWtBal = parseFloat(gdBal).toFixed(3);
                    GoldWtType = payMetalDueWeightType1;

                    totRecGd += goldWeight;
                }
            }
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Silver') {
                silverWeight = metalWeight;
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1 * document.getElementById('srGmWtInKg').value)).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1) / document.getElementById('srGmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                }

                payMetalDueWeightType1 = document.getElementById(prefix + 'SilverTotFineWtType').value;
                silverWeightType = payMetalDueWeightType1;
                if (slBal == '') {
                    slBal = document.getElementById(prefix + 'SilverTotFineWt').value;
                }
                if (payMetalDueWeightType1 == 'KG') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat((slBal) - silverWeight).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat(((slBal) - silverWeight / 1000)).toFixed(3);
                        silverWeight = parseFloat(silverWeight / 1000).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat(((slBal) - silverWeight / (1000 * 1000))).toFixed(3);
                        silverWeight = parseFloat(silverWeight / (1000 * 1000)).toFixed(3);
                    }
                }
                else if (payMetalDueWeightType1 == 'GM') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000)).toFixed(3);
                        silverWeight = parseFloat(silverWeight * 1000).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat((slBal) - silverWeight).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat(((slBal) - silverWeight / (1000))).toFixed(3);
                        silverWeight = parseFloat(silverWeight / 1000).toFixed(3);
                    }
                } else if (payMetalDueWeightType1 == 'MG') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000 * 1000)).toFixed(3);
                        silverWeight = parseFloat(silverWeight * 1000 * 1000).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000)).toFixed(3);
                        silverWeight = parseFloat(silverWeight * 1000).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat((slBal - silverWeight)).toFixed(3);
                    }
                }
                document.getElementById(prefix + 'PayMetal1Bal' + dc).value = slBal;
                document.getElementById(prefix + 'PayMetalBal1Type' + dc).value = payMetalDueWeightType1;
                silverWtBal = parseFloat(slBal).toFixed(3);
                SilverWtType = payMetalDueWeightType1;

                totRecSl += silverWeight;
            }
            if (document.getElementById(prefix + 'GoldTotFineWt').value != '' && goldWtBal == 0) {
                goldWtBal = parseFloat(document.getElementById(prefix + 'GoldTotFineWt').value);
                GoldWtType = document.getElementById(prefix + 'GoldTotFineWtType').value;
            }
            if (document.getElementById(prefix + 'SilverTotFineWt').value != '' && silverWtBal == 0) {
                silverWtBal = parseFloat(document.getElementById(prefix + 'SilverTotFineWt').value);
                SilverWtType = document.getElementById(prefix + 'SilverTotFineWtType').value;
            }

            if (document.getElementById('stockPurPriceCut').value != 'default') {
                document.getElementById('metal1WtRecBal').value = parseFloat(totRecGd).toFixed(3) + ' ' + goldWeightType;
                document.getElementById('metal2WtRecBal').value = parseFloat(totRecSl).toFixed(3) + ' ' + silverWeightType;
            }

            document.getElementById('metal1WtRecBal1').value = parseFloat(totRecGd).toFixed(3);
            document.getElementById('metal1WtRecBal1Typ').value = goldWeightType;
            document.getElementById('metal2WtRecBal1').value = parseFloat(totRecSl).toFixed(3);
            document.getElementById('metal2WtRecBal1Typ').value = silverWeightType;

            if (document.getElementById(prefix + 'PayMetal1Val' + dc).value == '') {
                document.getElementById(prefix + 'PayMetal1Val' + dc).value = 0;
            }
            totAmtRec += parseFloat(document.getElementById(prefix + 'PayMetal1Val' + dc).value);

            document.getElementById(prefix + 'PayTotMetAmtRec').value = (totAmtRec).toFixed(3); // added @Author:SHRI17AUG16

            if (document.getElementById('stockPurPriceCut').value == 'default') {
                document.getElementById(prefix + 'PayTotAmtRecDisp').value = document.getElementById(prefix + 'PayTotMetAmtRec').value;
            }

            if (document.getElementById('metalPanel').value == 'SellPayUp') {
                if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
                    calcWholeSaleRateCut(prefix);
                }
            }
            if (document.getElementById('stockPurPriceCut').value != 'default') {
                calcRawMetStock(prefix);
            }
            calcStockRrCtCashBalance(prefix);
        }
        metalEntered++;
    }
    return false;
}

function setRateCutValuesForItemSell(prefix) {
    if (document.getElementById('stockPurPriceCut').value != 'default') {
        document.getElementById('metal1RtCtWt').value = parseFloat(goldWtBal).toFixed(3);
        document.getElementById('metal1RtCtWtType').value = GoldWtType;
        document.getElementById('metal2RtCtWt').value = parseFloat(silverWtBal).toFixed(3);
        document.getElementById('metal2RtCtWtType').value = SilverWtType;
        document.getElementById(prefix + 'PayMetal1WtBal').value = parseFloat(goldWtBal).toFixed(3);
        document.getElementById(prefix + 'PayMetal1WtBalType').value = GoldWtType;
        document.getElementById(prefix + 'PayMetal2WtBal').value = parseFloat(silverWtBal).toFixed(3);
        document.getElementById(prefix + 'PayMetal2WtBalType').value = SilverWtType;
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (stockDiv == 'wholeSaleStock') {
                document.getElementById(prefix + 'Metal1RtCtWtBal1').value = parseFloat(goldWtBal).toFixed(3);
                document.getElementById(prefix + 'Metal2RtCtWtBal1').value = parseFloat(silverWtBal).toFixed(3);
            } else {
                document.getElementById('metal1RtCtWtBal1').value = parseFloat(goldWtBal).toFixed(3);
                document.getElementById('metal2RtCtWtBal1').value = parseFloat(silverWtBal).toFixed(3);
                document.getElementById('metal1RtCtWtBal').value = parseFloat(goldWtBal).toFixed(3);
                document.getElementById('metal2RtCtWtBal').value = parseFloat(silverWtBal).toFixed(3);
                document.getElementById('metal1RtCtWtBalDisp').value = parseFloat(goldWtBal).toFixed(3) + ' ' + GoldWtType;
                document.getElementById('metal2RtCtWtBalDisp').value = parseFloat(silverWtBal).toFixed(3) + ' ' + SilverWtType;
            }
        }
    }
}
/****************************END Code calculation @Author: GAUR20MAY16*********************************************/
/****************************END Code calculation @Author: GAUR21APR16*********************************************/
/***********END Code To add calc itemsaleratecut by final fine wt @Author: GAUR03MAR16***************/

function getItemsaleRawMetalType(panelName, metalType, metalCount, firmId, rawGdPreId, rawGdPostId, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId, metalTypePanel, cntr, otherChgsBy, totFinGdWt, totFinSlWt, goldTotFFineWtType, silverTotFFineWtType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("rawMetalIdDiv" + metalCount).innerHTML = xmlhttp.responseText;
            // calcItemBalance();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogspmpydt.php?panelName=" + panelName + "&metalType=" + metalType +
            "&metalDivCount=" + metalCount + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&rawSlPreId=" + rawSlPreId + "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId + "&rawAlPostId=" + rawAlPostId + "&firmId=" + firmId +
            "&metalTypePanel=" + metalTypePanel + "&cntr=" + cntr + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt + "&goldTotFFineWtType=" + goldTotFFineWtType + "&silverTotFFineWtType=" + silverTotFFineWtType, true);
    xmlhttp.send();
}

/****************************START Code ADD MULTIPLE ROW @Author: GAUR03MAR16*********************************************/
//******************************************************************Start code to change supplier home panel Author@:SANT9MAR16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT22MAR16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT7JUN16*******************
//******************Start code to change supplier home panel Author@:SANT20OCT16*************
//******************Start code to update supplier home panel Author@:GAUR13DEC16****************************************************
function showSuppHomePurchaseDetails(name, updPanelname, rateCutOpt, paymentType) {
//    var goldTotWt = document.getElementById('goldTotWt').value;
//    var goldTotWtType = document.getElementById('goldTotWtType').value;
//    var silverTotWt = document.getElementById('silverTotWt').value;
//    var silverTotWtType = document.getElementById('silverTotWtType').value;
//    var totRemBal = document.getElementById('totRemBal').value;
//    var transDate = document.getElementById('transDate').value;
    var userId = document.getElementById('userId').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("stockPanelSubDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogsuppaym.php?paymentPanelName=" + updPanelname + "&userId=" + userId + "&rateCutOpt=" + rateCutOpt + "&paymentType=" + paymentType, true);
    xmlhttp.send();
}
//stockPanelSubDiv
//+ "&suppPayId=" + isinId + "&preInvNo=" + payPreInvoiceNo + "&postInvNo=" + payInvoiceNo + "&totFinGdWt=" + totFinGdWt + "&silverTotFFineWt=" + silverTotFFineWt + "&goldTotFFineWtType=" + goldTotFFineWtType + "&silverTotFFineWtType=" + silverTotFFineWtType + "&leftAmount=" + leftAmount + "&firmId=" + firmId + "&userId=" + suppId
//******************END code to update supplier home panel Author@:GAUR13DEC16****************************************************
//*******************************End code to change supplier home panel Author@:SANT20OCT16*******************
//******************************************************************End code to change supplier home panel Author@:SANT7JUN16*******************
//******************************************************************End code to change supplier home panel Author@:SANT22MAR16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT22JUN16*******************
function showSuppHomeAllTranPurchaseDetails(suppPanelName, suppId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("suppHomePanelSubDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogwsprdt.php?&suppPanelName=" + suppPanelName + "&suppId=" + suppId, true);
    xmlhttp.send();
}
//****************************End code to change supp home rate cut option Author:SANT22JUN16********************************
//****************************Start code to change supp home rate cut option Author:@SANT12MAR16********************************
//****************************Start code to change supp home rate cut option Author:@SANT10MAR16********************************
function calcSuppRawMetStock(prefix) {

    if (document.getElementById('metal1WtPrevBal1').value != '' || document.getElementById('metal1WtPurBal1').value != '' || document.getElementById('metal1WtRecBal1').value != '') {
        if (document.getElementById('metal1WtPrevBal1').value == '' || document.getElementById('metal1WtPrevBal1').value == 'NaN') {
            document.getElementById('metal1WtPrevBal1').value = 0;
        }
        if (document.getElementById('metal1WtPurBal1').value == '' || document.getElementById('metal1WtPurBal1').value == 'NaN') {
            document.getElementById('metal1WtPurBal1').value = 0;
        }
        if (document.getElementById('metal1WtRecBal1').value == '' || document.getElementById('metal1WtRecBal1').value == 'NaN') {
            document.getElementById('metal1WtRecBal1').value = 0;
        }
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (document.getElementById('metal1RtCtWt').value == '' || document.getElementById('metal1RtCtWt').value == 'NaN') {
                document.getElementById('metal1RtCtWt').value = 0;
            }
            var totFinGdWtBal = parseFloat(document.getElementById('metal1WtPrevBal1').value) + parseFloat(document.getElementById('metal1WtPurBal1').value) - parseFloat(document.getElementById('metal1RtCtWt').value);
        } else {
            var totFinGdWtBal = parseFloat(document.getElementById('metal1WtPrevBal1').value) + parseFloat(document.getElementById('metal1WtPurBal1').value) - parseFloat(document.getElementById('metal1WtRecBal1').value);
        }
        document.getElementById('metal1WtFinBal').value = parseFloat(totFinGdWtBal).toFixed(3) + ' ' + document.getElementById('metal1WtPurBal1Type').value;
//        alert( document.getElementById('metal1WtFinBal').value);
        document.getElementById('metal1WtFinBal1').value = parseFloat(totFinGdWtBal);
        document.getElementById('metal1WtFinBal1Typ').value = document.getElementById('metal1WtPurBal1Type').value;
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            var payTotalWeightType1 = document.getElementById('metal1RtCtWtType').value;
            var goldWeight = document.getElementById('metal1RtCtWt').value;
            var payMetalRate1 = document.getElementById('metal1Rate').value;
            if (payTotalWeightType1 == 'KG') {
                document.getElementById('metal1Valuation').value = ((goldWeight * payMetalRate1 * document.getElementById('gmWtInKg').value)).toFixed(2);
            } else if (payTotalWeightType1 == 'GM') {
                document.getElementById('metal1Valuation').value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value).toFixed(2);
            } else if (payTotalWeightType1 == 'MG') {
                document.getElementById('metal1Valuation').value = ((goldWeight * payMetalRate1) / (document.getElementById('gmWtInMg').value)).toFixed(2);
            }
        }
    }
    if (document.getElementById('metal2WtPrevBal1').value != '' || document.getElementById('metal2WtPurBal1').value != '' || document.getElementById('metal2WtRecBal1').value != '') {
        if (document.getElementById('metal2WtPrevBal1').value == '' || document.getElementById('metal2WtPrevBal1').value == 'NaN') {
            document.getElementById('metal2WtPrevBal1').value = 0;
        }
        if (document.getElementById('metal2WtPurBal1').value == '' || document.getElementById('metal2WtPurBal1').value == 'NaN') {
            document.getElementById('metal2WtPurBal1').value = 0;
        }
        if (document.getElementById('metal2WtRecBal1').value == '' || document.getElementById('metal2WtRecBal1').value == 'NaN') {
            document.getElementById('metal2WtRecBal1').value = 0;
        }
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (document.getElementById('metal2RtCtWt').value == '' || document.getElementById('metal2RtCtWt').value == 'NaN') {
                document.getElementById('metal2RtCtWt').value = 0;
            }
            var totFinSrWtBal = parseFloat(document.getElementById('metal2WtPrevBal1').value) + parseFloat(document.getElementById('metal2WtPurBal1').value) - parseFloat(document.getElementById('metal2RtCtWt').value);
        } else {
            var totFinSrWtBal = parseFloat(document.getElementById('metal2WtPrevBal1').value) + parseFloat(document.getElementById('metal2WtPurBal1').value) - parseFloat(document.getElementById('metal2WtRecBal1').value);
        }


        document.getElementById('metal2WtFinBal').value = parseFloat(totFinSrWtBal).toFixed(3) + ' ' + document.getElementById('metal2WtPurBal1Type').value;
        document.getElementById('metal2WtFinBal1').value = parseFloat(totFinSrWtBal).toFixed(3);
        document.getElementById('metal2WtFinBal1Typ').value = document.getElementById('metal2WtPurBal1Type').value;
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            var payTotalWeightType2 = document.getElementById('metal2RtCtWtType').value;
            var silverWeight = document.getElementById('metal2RtCtWt').value;
            var payMetalRate2 = document.getElementById('metal2Rate').value;
            if (payTotalWeightType2 == 'KG') {
                document.getElementById('metal2Valuation').value = ((silverWeight * payMetalRate2 * document.getElementById('srGmWtInKg').value)).toFixed(2);
            } else if (payTotalWeightType2 == 'GM') {
                document.getElementById('metal2Valuation').value = ((silverWeight * payMetalRate2) / document.getElementById('srGmWtInGm').value).toFixed(2);
            } else if (payTotalWeightType2 == 'MG') {
                document.getElementById('metal2Valuation').value = ((silverWeight * payMetalRate2) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
            }
//            document.getElementById(prefix + 'PayTotAmtRecDisp').value = parseFloat(document.getElementById('metal1Valuation').value) + parseFloat(document.getElementById('metal2Valuation').value);
        }
    }
    if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        if (document.getElementById('metal1Valuation').value == '') {
            document.getElementById('metal1Valuation').value = 0;
        }
        if (document.getElementById('metal2Valuation').value == '') {
            document.getElementById('metal2Valuation').value = 0;
        }
        document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math_round(parseFloat(document.getElementById('metal1Valuation').value) + parseFloat(document.getElementById('metal2Valuation').value)).toFixed(2);
        document.getElementById(prefix + 'PayTotAmtRec').value = parseFloat(parseFloat(document.getElementById('metal1Valuation').value) + parseFloat(document.getElementById('metal2Valuation').value)).toFixed(2);
//        alert(document.getElementById(prefix + 'PayTotAmtRec').value);
    }
}
//****************************Start code to change supp home rate cut option Author:@SANT10MAR16********************************
//***************Start code to add more raw metal line @Author: GAUR18MAR16************************************************//
function getStockRawMetalTypeForItemSell(panelName, metalType, metalCount, firmId, rawGdPreId, rawGdPostId, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId, metalTypePanel, cntr, otherChgsBy, totFinGdWt, totFinSlWt, metalTypeId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("rawMetalIdDiv" + metalCount).innerHTML = xmlhttp.responseText;
            document.getElementById(metalTypeId).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogspmpydt.php?panelName=" + panelName + "&metalType=" + metalType +
            "&metalDivCount=" + metalCount + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&rawSlPreId=" + rawSlPreId + "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId + "&rawAlPostId=" + rawAlPostId + "&firmId=" + firmId +
            "&metalTypePanel=" + metalTypePanel + "&cntr=" + cntr + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt, true);
    xmlhttp.send();
}
//************Start code to add more raw metal line @Author: GAUR18MAR16************************************************//
/****************************START Code ADD MULTIPLE ROW @Author:SANT22MAR16********************************************/
function getMoreStockRawMetalDivForSuppDet(metalCnt, panelName, firmId, rawGdPreId, rawGdPostId, metalType, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId,
        metalPanelName, mcntr, rawPreId, rawPostId, otherChgsBy, totFinGdWt, totFinSlWt, suppId, suppUdhaarId, leftAmount) {
    metalPanel = panelName;
    metalCount = metalCnt;
    if (metalCount != '') {
        getMetalDiv = metalCount;
    }
    var poststr = "metalDivCount=" + metalCount
            + "&panelName=" + panelName + "&firmId=" + firmId
            + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&metalType=" + metalType + "&rawSlPreId=" + rawSlPreId +
            "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId +
            "&rawAlPostId=" + rawAlPostId + "&metalPanelName=" + metalPanelName
            + "&mcntr=" + mcntr + "&rawPreId=" + rawPreId + "&rawPostId=" + rawPostId
            + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt + "&suppId=" + suppId + "&suppUdhaarId=" + suppUdhaarId + "&leftAmount=" + leftAmount;

    get_more_raw_metal_div('include/php/ogsppydt.php', poststr);
    return false;
}
/****************************END Code ADD MULTIPLE ROW @Author:SANT22MAR16*********************************************/
//***************Start code to add more raw metal line @Author:SANT22MAR16 ************************************************//
function getStockRawMetalTypeForSuppDet(panelName, metalType, metalCount, firmId, rawGdPreId, rawGdPostId, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId, metalTypePanel, cntr, otherChgsBy, totFinGdWt, totFinSlWt, metalTypeId, suppId, suppUdhaarId, leftAmount) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("rawMetalIdDiv" + metalCount).innerHTML = xmlhttp.responseText;
            document.getElementById(metalTypeId).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogsppydt.php?panelName=" + panelName + "&metalType=" + metalType +
            "&metalDivCount=" + metalCount + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&rawSlPreId=" + rawSlPreId + "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId + "&rawAlPostId=" + rawAlPostId + "&firmId=" + firmId +
            "&metalTypePanel=" + metalTypePanel + "&cntr=" + cntr + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt + "&suppId=" + suppId + "&suppUdhaarId=" + suppUdhaarId + "&leftAmount=" + leftAmount, true);
    xmlhttp.send();
}
//************Start code to add more raw metal line @Author:SANT22MAR16 ***********************************************//
/***********START Code To add itemsaleratecut by final fine wt @Author:SANT21MAR16 ***************/

function itemsaleRateCutForSupp(rateCutId, goldTotFFineWt, goldTotFFineWtType, silverTotFFineWt, silverTotFFineWtType, totGoldPay, totSilverPay, goldRate, silverRate, payPanelName, otherCharges, otherChgsBy, suppId, preInvNo, invNo) {
//    alert(rateCutId+'-'+goldTotFFineWt+'-'+goldTotFFineWtType+'-'+silverTotFFineWt+'-'+silverTotFFineWtType+'-'+totGoldPay+'-'+totSilverPay+'-'+goldRate+'-'+silverRate+'-'+payPanelName+'-'+otherCharges+'-'+otherChgsBy+'-'+suppId+'-'+preInvNo+'-'+invNo);

    var poststr = "rateCutOpt=" + encodeURIComponent(rateCutId) +
            "&goldTotFFineWt=" + encodeURIComponent(goldTotFFineWt) +
            "&goldTotFFineWtType=" + encodeURIComponent(goldTotFFineWtType) +
            "&silverTotFFineWt=" + encodeURIComponent(silverTotFFineWt) +
            "&silverTotFFineWtType=" + encodeURIComponent(silverTotFFineWtType) +
            "&totGoldPay=" + encodeURIComponent(totGoldPay) +
            "&totSilverPay=" + encodeURIComponent(totSilverPay) +
            "&goldRate=" + encodeURIComponent(goldRate) +
            "&silverRate=" + encodeURIComponent(silverRate) +
            "&otherCharges=" + encodeURIComponent(otherCharges) +
            "&payPanelName=" + encodeURIComponent(payPanelName) +
            "&otherChgsBy=" + encodeURIComponent(otherChgsBy) +
            "&payId=" + encodeURIComponent(document.getElementById('payId').value) +
            "&preInvId=" + encodeURIComponent(preInvNo) +
            "&invId=" + encodeURIComponent(invNo) +
            "&suppId=" + encodeURIComponent(suppId);

    if (rateCutId == 'RateCut') {
        itemsale_rate_cut_supp("include/php/ogsprtct.php", poststr);
    } else {
        itemsale_rate_cut_supp("include/php/ogspnrc.php", poststr);
    }
}
function itemsale_rate_cut_supp(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertitemsaleRateCutForSupp;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertitemsaleRateCutForSupp() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("rateCutDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
/***********END Code To add itemsaleratecut by final fine wt @Author: SANT21MAR16**************/
//************Start code to add more raw metal line @Author: GAUR21MAR16************************************************//
function calcStockRrCtCashBalanceForItemSell(prefix) {
    if (document.getElementById(prefix + 'PayCashAmtRec').value != '' || document.getElementById(prefix + 'PayChequeAmt').value || document.getElementById(prefix + 'PayCardAmt').value) {
        var totalCashPaidAmt = document.getElementById(prefix + 'PayCashAmtRec').value;
        if (totalCashPaidAmt == null || totalCashPaidAmt == '') {
            totalCashPaidAmt = 0;
        }
        var totalChequeAmt = document.getElementById(prefix + 'PayChequeAmt').value;
        if (totalChequeAmt == null || totalChequeAmt == '') {
            totalChequeAmt = 0;
        }
        var totalCardAmt = document.getElementById(prefix + 'PayCardAmt').value;
        if (totalCardAmt == null || totalCardAmt == '') {
            totalCardAmt = 0;
        }
        document.getElementById(prefix + 'PayCashRecDisp').value = Math_round(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);
        document.getElementById(prefix + 'PayTotCashAmt').value = parseFloat(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);
    }

    if (document.getElementById('VATTax').value != '' || document.getElementById('VATTax').value != null) {
        var totalValuation = document.getElementById('taxOnTotAmt').value;
        if (totalValuation == null || totalValuation == '') {
            totalValuation = 0;
        }
        if (document.getElementById('VATTax').value == '') {
            document.getElementById('VATTax').value = 0;
        }
        var totTax = parseFloat(document.getElementById('VATTax').value) / 100;
        document.getElementById(prefix + 'PayVATAmtDisp').value = Math_round(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);
        document.getElementById(prefix + 'PayVATAmt').value = parseFloat(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);
    }

    if (document.getElementById(prefix + 'PayVATAmt').value == 'NaN' || document.getElementById(prefix + 'PayVATAmt').value == '') {
        document.getElementById(prefix + 'PayVATAmt').value = 0.00;
    }

    if (document.getElementById(prefix + 'PayTotCashAmt').value || document.getElementById(prefix + 'PayVATAmt').value || document.getElementById(prefix + 'PayDiscount').value != '') {
        var totalAmt = 0;
        if (document.getElementById(prefix + 'PayTotAmt').value == '' || document.getElementById(prefix + 'PayTotAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayTotAmt').value = 0;
        }
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (document.getElementById(prefix + 'PayTotAmtRec').value == '' || document.getElementById(prefix + 'PayTotAmtRec').value == 'NaN') {
                document.getElementById(prefix + 'PayTotAmtRec').value = 0;
            }
            totalAmt = parseFloat(document.getElementById(prefix + 'PayTotAmtRec').value) + parseFloat(document.getElementById(prefix + 'PayTotAmt').value);
        } else {
            totalAmt = parseFloat(document.getElementById(prefix + 'PayTotAmt').value);
//            alert(totalAmt);
        }
        if (document.getElementById(prefix + 'PayPrevTotAmt').value == 'NaN' || document.getElementById(prefix + 'PayPrevTotAmt').value == '') {
            document.getElementById(prefix + 'PayPrevTotAmt').value = 0;
        }
        if (document.getElementById(prefix + 'PayPrevTotAmt').value != '' || document.getElementById(prefix + 'PayPrevTotAmt').value != 0) {
            if (document.getElementById(prefix + 'PayPrevTotAmt').value > 0) {
                totalAmt = totalAmt + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value);
            } else {
                totalAmt = totalAmt - Math.abs(parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value));
            }
        }
        if (document.getElementById(prefix + 'PayVATAmt').value == '' || document.getElementById(prefix + 'PayVATAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayVATAmt').value = 0;
        }
        if (document.getElementById(prefix + 'PayDiscount').value == '' || document.getElementById(prefix + 'PayDiscount').value == 'NaN') {
            document.getElementById(prefix + 'PayDiscount').value = 0;
        }
        if (document.getElementById(prefix + 'PayTotCashAmt').value == '' || document.getElementById(prefix + 'PayTotCashAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayTotCashAmt').value = 0;
        }
        document.getElementById(prefix + 'PayDiscountDisp').value = Math_round(parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value))).toFixed(2);
//        alert('PayTotCashAmtDisp' + document.getElementById(prefix + 'PayTotCashAmtDisp').value);
        document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
//        alert('calcStockRrCtCashBalance='+document.getElementById(prefix + 'PayFinAmtBalDisp').value);
        document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
    }
}
//************Start code to add more raw metal line @Author: GAUR21MAR16************************************************//
/****************************Start Code calculation @Author: SANT22MAR16*********************************************/
/****************************Start Code calculation @Author: SANT9JUN16*********************************************/
var goldWtBal;
var silverWtBal;
var GoldWtType;
var SilverWtType;
function calcStockItemBalanceForSuppPanel() {
//    alert(document.getElementById(prefix + 'SilverTotFineWtType').value);
    var metalEntered = 0;
    var metalCount = document.getElementById("metalCount").value;
    if (document.getElementById('metalPanel').value == 'StockPayment' || document.getElementById('metalPanel').value == 'StockPayUp') {
        var prefix = 'stock';
    } else if (document.getElementById('metalPanel').value == 'SuppPayment' || document.getElementById('metalPanel').value == 'SuppPayUp') {
        prefix = 'supDep';
    } else if (document.getElementById('metalPanel').value == 'CustSellPayment' || document.getElementById('metalPanel').value == 'CustSellPayUp') {
        prefix = 'sell';
    } else if (document.getElementById('metalPanel').value == 'NwOrPayment' || document.getElementById('metalPanel').value == 'NwOrPayUp') {
        prefix = 'nwOr';
    } else if (document.getElementById('metalPanel').value == 'RawPayment' || document.getElementById('metalPanel').value == 'RawPayUp') {
        prefix = 'rwPr';
    } else if (document.getElementById('metalPanel').value == 'SuppAddOrder' || document.getElementById('metalPanel').value == 'SuppOrderUp') {
        prefix = 'spOr';
    }
    if (document.getElementById('metalPanel').value == 'StockPayment' || document.getElementById('metalPanel').value == 'SuppPayment' ||
            document.getElementById('metalPanel').value == 'CustSellPayment' || document.getElementById('metalPanel').value == 'NwOrPayment' ||
            document.getElementById('metalPanel').value == 'RawPayment' || document.getElementById('metalPanel').value == 'SuppAddOrder') {
        count = 1;
        delId = 'del' + 1;
    } else if (document.getElementById('metalPanel').value == 'StockPayUp' || document.getElementById('metalPanel').value == 'SuppPayUp' ||
            document.getElementById('metalPanel').value == 'CustSellPayUp' || document.getElementById('metalPanel').value == 'NwOrPayUp' ||
            document.getElementById('metalPanel').value == 'RawPayUp' || document.getElementById('metalPanel').value == 'SuppOrderUp') {
        getMetalDiv = document.getElementById('noOfRawMet').value;
        var count = document.getElementById('rawId').value;
        var delId = 'del' + count;
    }
    var totAmtRec = 0;
    var gdBal = 0;
    var slBal = 0;
    var totRecGd = 0;
    var totRecSl = 0;
    var goldWeight = 0;
    var silverWeight = 0;
    var silverWeightType = '';
    var goldWeightType = '';
    GoldWtType = '';
    SilverWtType = '';
    goldWtBal = 0;
    silverWtBal = 0;
    //    for (var dc = count; dc <= getMetalDiv; dc++) { 
    for (var dc = count; getMetalDiv != ''; dc++) {
        if (document.getElementById('metalDel' + dc).value != 'Deleted') {
            var payTotalWeight1 = document.getElementById(prefix + 'PayMetal1RecWt' + dc).value;
            var payTotalWeightType1 = document.getElementById(prefix + 'PayMetal1RecWtType' + dc).value;
//            alert(payTotalWeightType1);
            var payMetalRate1 = document.getElementById(prefix + 'PayMetal1Rate' + dc).value;
            var payMetalTunch1 = document.getElementById(prefix + 'PayMetal1Tunch' + dc).value;
            var metalWeight = (payTotalWeight1 * payMetalTunch1) / 100;
            document.getElementById(prefix + 'PayMetal1FnWt' + dc).value = parseFloat(metalWeight).toFixed(2);
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold' || document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Alloy') {
                goldWeight = metalWeight;
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) * document.getElementById('gmWtInKg').value).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInMg').value).toFixed(2);
                }
                if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold') {
                    var payMetalDueWeightType1 = document.getElementById(prefix + 'GoldTotFineWtType').value;
                    goldWeightType = payMetalDueWeightType1;
//                    alert(payMetalDueWeightType1 + '-' + payTotalWeightType1);
                    if (gdBal == '') {
                        gdBal = document.getElementById(prefix + 'GoldTotFineWt').value;
//                        alert(prefix + 'GoldTotFineWt');
//                        alert(gdBal);
                    }
//                    alert(gdBal);
                    if (payMetalDueWeightType1 == 'KG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight / 1000)).toFixed(2);
                            goldWeight = parseFloat(goldWeight / 1000).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat(((gdBal) - goldWeight / (1000 * 1000))).toFixed(2);
                            goldWeight = parseFloat(goldWeight / (1000 * 1000)).toFixed(2);
                        }
                    }
                    else if (payMetalDueWeightType1 == 'GM') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(2);
                            goldWeight = parseFloat(goldWeight * 1000).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat(((gdBal) - goldWeight / (1000))).toFixed(2);
                            goldWeight = parseFloat(goldWeight / 1000).toFixed(2);
                        }
                    }
                    else if (payMetalDueWeightType1 == 'MG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000 * 1000)).toFixed(2);
                            goldWeight = parseFloat(goldWeight * 1000 * 1000).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(2);
                            goldWeight = parseFloat(goldWeight * 1000).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat((gdBal - goldWeight)).toFixed(2);
                        }
                    }
                    document.getElementById(prefix + 'PayMetal1Bal' + dc).value = gdBal;
                    document.getElementById(prefix + 'PayMetalBal1Type' + dc).value = payMetalDueWeightType1;

                    goldWtBal = parseFloat(gdBal).toFixed(3);
                    GoldWtType = payMetalDueWeightType1;

                    totRecGd += goldWeight;
//                    alert(totRecGd);
                }
            }
//            alert(document.getElementById(prefix + 'PayMetalType1' + dc).value);
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Silver') {
                silverWeight = metalWeight;
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1 * document.getElementById('srGmWtInKg').value)).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1) / document.getElementById('srGmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                }
                payMetalDueWeightType1 = document.getElementById(prefix + 'SilverTotFineWtType').value;
                silverWeightType = payMetalDueWeightType1;
                if (slBal == '') {
//                    alert(document.getElementById(prefix + 'SilverTotFineWt').value);
                    slBal = document.getElementById(prefix + 'SilverTotFineWt').value;
//                    slBal = document.getElementById('slprSilverTotFineWt').value;

                }
                if (payMetalDueWeightType1 == 'KG') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat((slBal) - silverWeight).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat(((slBal) - silverWeight / 1000)).toFixed(2);
                        silverWeight = parseFloat(silverWeight / 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat(((slBal) - silverWeight / (1000 * 1000))).toFixed(2);
                        silverWeight = parseFloat(silverWeight / (1000 * 1000)).toFixed(2);
                    }
                }
                else if (payMetalDueWeightType1 == 'GM') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000)).toFixed(2);
                        silverWeight = parseFloat(silverWeight * 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat((slBal) - silverWeight).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat(((slBal) - silverWeight / (1000))).toFixed(2);
                        silverWeight = parseFloat(silverWeight / 1000).toFixed(2);
                    }
                } else if (payMetalDueWeightType1 == 'MG') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000 * 1000)).toFixed(2);
                        silverWeight = parseFloat(silverWeight * 1000 * 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000)).toFixed(2);
                        silverWeight = parseFloat(silverWeight * 1000).toFixed(2);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat((slBal - silverWeight)).toFixed(2);
                    }
                }
                document.getElementById(prefix + 'PayMetal1Bal' + dc).value = slBal;
                document.getElementById(prefix + 'PayMetalBal1Type' + dc).value = payMetalDueWeightType1;
//                alert(silverWtBal);
                silverWtBal = parseFloat(slBal).toFixed(3);
                SilverWtType = payMetalDueWeightType1;

                totRecSl += silverWeight;
            }
            document.getElementById('metal1WtRecBal').value = parseFloat(totRecGd).toFixed(3) + ' ' + goldWeightType;
            document.getElementById('metal1WtRecBal1').value = parseFloat(totRecGd).toFixed(3);
            document.getElementById('metal1WtRecBal1Typ').value = goldWeightType;
            document.getElementById('metal2WtRecBal').value = parseFloat(totRecSl).toFixed(3) + ' ' + silverWeightType;
            document.getElementById('metal2WtRecBal1').value = parseFloat(totRecSl).toFixed(3);
            document.getElementById('metal2WtRecBal1Typ').value = silverWeightType;

            if (document.getElementById(prefix + 'PayMetal1Val' + dc).value == '') {
                document.getElementById(prefix + 'PayMetal1Val' + dc).value = 0;
            }
            totAmtRec += parseFloat(document.getElementById(prefix + 'PayMetal1Val' + dc).value);
//            alert(totAmtRec);
//            alert(document.getElementById(prefix + 'PayTotAmtRec'))
//            document.getElementById(prefix + 'PayTotAmtRec').value = parseFloat(totAmtRec).toFixed(2);
//            alert('paytotamtrec='+document.getElementById(prefix + 'PayTotAmtRec').value);
//            document.getElementById(prefix + 'PayTotAmtRecDisp').value = document.getElementById(prefix + 'PayTotAmtRec').value;
//            calcCashBalance(prefix);
            calcRawMetStock(prefix);
            calcStockRrCtCashBalance(prefix);
        }
        metalEntered++;
    }
    return false;
}
/****************************END Code calculation @Author: SANT9JUN16*********************************************/
/****************************END Code calculation @Author: SANT22MAR16*********************************************/
/****************************START Code LOAN BUTTON @Author: GAUR29MAR16*********************************************/

function cust_girvi_details_for_loan(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertCustGirviDetailsForLoan;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertCustGirviDetailsForLoan() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
function custGirviDetailsForLoan(custId, firmId) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    var poststr = "custId=" + custId +
            "&firmId=" + firmId +
            "&jrmnId=" + encodeURIComponent(document.getElementById("jrmnId").value) +
            "&jrmnStartYr=" + encodeURIComponent(document.getElementById("jrmnStartYr").value) +
            "&jrmnEndYr=" + encodeURIComponent(document.getElementById("jrmnEndYr").value) +
            "&accId=" + encodeURIComponent(document.getElementById("accId").value) +
            "&opBalCust=" + encodeURIComponent(document.getElementById("opBalCust").value) +
            "&clBalCust=" + encodeURIComponent(document.getElementById("clBalCust").value) +
            "&drAmtCust=" + encodeURIComponent(document.getElementById("drAmtCust").value) +
            "&crAmtCust=" + encodeURIComponent(document.getElementById("crAmtCust").value);
    cust_girvi_details_for_loan('include/php/olaccgdt.php', poststr);
}

/****************************END Code LOAN BUTTON calculation @Author: GAUR29MAR16*********************************************/



/****************************ADD Code add loan calculation @Author: GAUR29MAR16*********************************************/
function cust_loan_panel(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertCustLoanPanel;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertCustLoanPanel() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
function custLoanPanel(custId, firmId) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    var poststr = "custId=" + custId +
            "&firmId=" + firmId +
            "&jrmnId=" + encodeURIComponent(document.getElementById("jrmnId").value) +
            "&jrmnStartYr=" + encodeURIComponent(document.getElementById("jrmnStartYr").value) +
            "&jrmnEndYr=" + encodeURIComponent(document.getElementById("jrmnEndYr").value) +
            "&accId=" + encodeURIComponent(document.getElementById("accId").value) +
            "&opBalCust=" + encodeURIComponent(document.getElementById("opBalCust").value) +
            "&clBalCust=" + encodeURIComponent(document.getElementById("clBalCust").value) +
            "&drAmtCust=" + encodeURIComponent(document.getElementById("drAmtCust").value) +
            "&crAmtCust=" + encodeURIComponent(document.getElementById("crAmtCust").value) +
            "&optionGirviTypeOpen=selected";
    cust_loan_panel('include/php/omacadln.php', poststr);
}
/****************************END Code add loan calculation @Author: GAUR29MAR16*********************************************/

//****************************Start Navigate Girvi @Author: GAUR29MAR16 *******************************************************************
function navigationGirviForLoanPanel(pageNo, custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "include/php/olaccgdt.php?page=" + pageNo + "&custId=" + custId, true);//changes in navigation AS per new filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
//****************************End Navigate Girvi @Author: GAUR29MAR16  *******************************************************************
//*****************************Start code to change moneypanel home page Author:SANT28APR16********************************
function closeAdvMetalDiv1() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "hidden";
            document.getElementById("addNewUdhaarDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
function closeAdvMoneyDiv1() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "hidden";
            document.getElementById("addNewUdhaarDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
//*****************************End code to change moneypanel home page Author:SANT28APR16********************************
//****************************** Start Code to change add new fun for raw metal details show on supp home and delete nominee @Author:SANT24MAY16 ********************>
function showSuppInfoForRawMetal(prSuppId, newPreInvoiceNo, newInvoiceNo, panel, userType) {
//    alert(userType);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (userType == 'CUSTOMER') {
//        xmlhttp.open("POST", "include/php/ogwhmndv.php?newPreInvoiceNo=" + newPreInvoiceNo + "&newInvoiceNo=" + newInvoiceNo + "&userId=" + prSuppId + "&suppPanelOption=" + panel, true);
    } else {
        xmlhttp.open("POST", "include/php/ogwhmndv.php?newPreInvoiceNo=" + newPreInvoiceNo + "&newInvoiceNo=" + newInvoiceNo + "&suppId=" + prSuppId + "&suppPanelOption=" + panel, true);
    }
    xmlhttp.send();
}

function changeNomineeStatus(custId, action) {
    if (action == 'Delete') {
        confirm_box = confirm(deletePermAlertMess + "\nDo you really want to delete this Nominee ?");//change in line @AUTHOR: SANDY28JAN14
    }
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajax_loading_div").style.visibility = "hidden";
                document.getElementById("customerListDiv").innerHTML = xmlhttp.responseText;
            }
            else {
                document.getElementById("ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omchcsst.php?custId=" + custId + "&action=" + action, true);
        xmlhttp.send();
    }
}
//*****************************End Code to change add new fun for raw metal details show on supp home and delete nominee @Author:SANT24MAY16*******************************
//****************************** Start Code to change add new nominee for customer@Author:SANT25MAY16 ********************>
//****************************** Start Code to change add new nominee for customer@Author:SANT27MAY16 ********************>
function getAddNominee(custPanelOption) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        }
        else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcdccdd.php?custId=" + custId + "&custPanelOption=" + custPanelOption,
            true);
    xmlhttp.send();
}
function getLoyaltyPoints(custPanelOption) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("main_middle").innerHTML = xmlhttp.responseText;
        }
        else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omloyaltypts.php?custId=" + custId + "&custPanelOption=" + custPanelOption,
            true);
    xmlhttp.send();
}
function searchCustToAddInNominee(mainCustId, custName, custUId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("custListDivToAddInCircle").innerHTML = xmlhttp.responseText;
        }
    };
    var poststr = "custName=" + encodeURIComponent(custName)
            + "&custUId=" + encodeURIComponent(custUId)
            + "&mainCustId=" + encodeURIComponent(mainCustId);
    xmlhttp.open("GET", "include/php/omnmcsrrs.php?" + poststr, true);
    xmlhttp.send();
}
function deleteCustFromNominee(mainCustId, custId) {
    confirm_box = confirm("Do you really want to remove this customer from Nominee?");
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("GET", "include/php/omnmcremo.php?mainCustId=" + mainCustId + "&custId=" + custId, true);
        xmlhttp.send();
    }
}
function addNominee(custId, mainCustId) {
    loadXMLDoc();
    if (validateEmptyField(document.getElementById("custCircleRelationId" + custId).value, "Please Enter Relation!") == false) {
        document.getElementById("custCircleRelationId" + custId).focus();
        return false;
    } else {
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
            }
        };
        xmlhttp.open("POST", "include/php/omnmcread.php?custId=" + custId + "&mainCustId=" + mainCustId, true);
        xmlhttp.send();
    }
}
//****************************** End Code to change add new nominee for customer@Author:SANT27MAY16 ********************>
/****************************START Code ADD THE LOAN LIST OPTION @Author: GAUR28MAY16*********************************************/
/****************************update Code ADD THE LOAN LIST OPTION @Author: GAUR02JUNE16*********************************************/
/****************************update Code ADD THE COLLECTION OR NON COLLECTION LIST @Author: GAUR14JUL16*********************************************/

/****************************update Code ADD girvi valuation active nad relesed @Author: GAUR10AUG16*********************************************/

function showLayoutGirviListPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "include/php/olgglypn.php", true);
    xmlhttp.send();
}

//+ "&actLpOmInt=" + document.getElementById("actLpOmInt").checked
function actlpAccessButton(panel) {
    panelName = panel;
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//    document.getElementById("actlpAccessButton").style.visibility = "hidden";

    confirm_box = confirm("Are You Sure To Allow Access To This Options!");

    if (confirm_box == true)
    {
        if (panelName == 'active') {
            poststr = "actLpSno=" + document.getElementById("actLpSno").checked
                    + "&actLpPrinAmt=" + document.getElementById("actLpPrinAmt").checked
                    + "&actLpTotprin=" + document.getElementById("actLpTotprin").checked
                    + "&actLpInt=" + document.getElementById("actLpInt").checked
                    + "&actLpTotAmt=" + document.getElementById("actLpTotAmt").checked
                    + "&actLpCustName=" + document.getElementById("actLpCustName").checked
                    + "&actLpFatherName=" + document.getElementById("actLpFatherName").checked
                    + "&actLpMobno=" + document.getElementById("actLpMobno").checked
                    + "&actLpCity=" + document.getElementById("actLpCity").checked
                    + "&actLpFirm=" + document.getElementById("actLpFirm").checked
                    + "&actLpAloan=" + document.getElementById("actLpAloan").checked
                    + "&actLpOtherIn=" + document.getElementById("actLpOtherIn").checked
                    + "&actLpDay=" + document.getElementById("actLpDay").checked
                    + "&actLpGirviVal=" + document.getElementById("actLpGirviVal").checked
                    + "&actLpSdate=" + document.getElementById("actLpSdate").checked
                    + "&actLpSign=" + document.getElementById("actLpSign").checked
                    + "&actLpSms=" + document.getElementById("actLpSms").checked
                    + "&panel=" + encodeURIComponent(panelName);

        } else if (panelName == 'transferred') {
            poststr = "transLpSno=" + document.getElementById("transLpSno").checked
                    + "&transLpPktno=" + document.getElementById("transLpPktno").checked
                    + "&transLpPrinAmt=" + document.getElementById("transLpPrinAmt").checked
                    + "&transLpIntAmt=" + document.getElementById("transLpIntAmt").checked
                    + "&transLpTotAmt=" + document.getElementById("transLpTotAmt").checked
                    + "&transLpCustName=" + document.getElementById("transLpCustName").checked
                    + "&transLpFatherName=" + document.getElementById("transLpFatherName").checked
                    + "&transLpCity=" + document.getElementById("transLpCity").checked
                    + "&transLpEfirm=" + document.getElementById("transLpEfirm").checked
                    + "&transLpTfirm=" + document.getElementById("transLpTfirm").checked
                    + "&transLpOtherIn=" + document.getElementById("transLpOtherIn").checked
                    + "&transLpSdate=" + document.getElementById("transLpSdate").checked
                    + "&transLpRdate=" + document.getElementById("transLpRdate").checked
                    + "&transLpTyp=" + document.getElementById("transLpTyp").checked
                    + "&transLpSt=" + document.getElementById("transLpSt").checked
                    + "&transLpDel=" + document.getElementById("transLpDel").checked
                    + "&panel=" + encodeURIComponent(panelName);

        } else if (panelName == 'released') {
            poststr = "relLpSno=" + document.getElementById("relLpSno").checked
                    + "&relLpPrinAmt=" + document.getElementById("relLpPrinAmt").checked
                    + "&relLpTotPrinAmt=" + document.getElementById("relLpTotPrinAmt").checked
                    + "&relLpPrinAmtInt=" + document.getElementById("relLpPrinAmtInt").checked
                    + "&relLpToatalPrinAmt=" + document.getElementById("relLpToatalPrinAmt").checked
                    + "&relLpCustName=" + document.getElementById("relLpCustName").checked
                    + "&relLpFatherName=" + document.getElementById("relLpFatherName").checked
                    + "&relLpMobno=" + document.getElementById("relLpMobno").checked
                    + "&relLpCity=" + document.getElementById("relLpCity").checked
                    + "&relLpExFirm=" + document.getElementById("relLpExFirm").checked
                    + "&relLpTrFirm=" + document.getElementById("relLpTrFirm").checked
                    + "&relLpSdate=" + document.getElementById("relLpSdate").checked
                    + "&relLpReldate=" + document.getElementById("relLpReldate").checked
                    + "&relLpGirviVal=" + document.getElementById("relLpGirviVal").checked
                    + "&relLpSign=" + document.getElementById("relLpSign").checked
                    + "&relLpSms=" + document.getElementById("relLpSms").checked
                    + "&panel=" + encodeURIComponent(panelName);
        } else if (panelName == 'loss') {
            poststr = "lossLpSno=" + document.getElementById("lossLpSno").checked
                    + "&lossLpPrinAmt=" + document.getElementById("lossLpPrinAmt").checked
                    + "&lossLpCustName=" + document.getElementById("lossLpCustName").checked
                    + "&lossLpFatherName=" + document.getElementById("lossLpFatherName").checked
                    + "&lossLpMobno=" + document.getElementById("lossLpMobno").checked
                    + "&lossLpCity=" + document.getElementById("lossLpCity").checked
                    + "&lossLpExFirm=" + document.getElementById("lossLpExFirm").checked
                    + "&lossLpTotAmt=" + document.getElementById("lossLpTotAmt").checked
                    + "&lossLpGirviVal=" + document.getElementById("lossLpGirviVal").checked
                    + "&lossLpL=" + document.getElementById("lossLpL").checked
                    + "&lossLpOtherIn=" + document.getElementById("lossLpOtherIn").checked
                    + "&lossLpSdate=" + document.getElementById("lossLpSdate").checked
                    + "&lossLpNt=" + document.getElementById("lossLpNt").checked
                    + "&lossLpSms=" + document.getElementById("lossLpSms").checked
                    + "&panel=" + encodeURIComponent(panelName);

        } else if (panelName == 'unRelTrans') {
            poststr = "unRelTLpSno=" + document.getElementById("unRelTLpSno").checked
                    + "&unRelTLpPktno=" + document.getElementById("unRelTLpPktno").checked
                    + "&unRelTLpCustName=" + document.getElementById("unRelTLpCustName").checked
                    + "&unRelTLpFatherName=" + document.getElementById("unRelTLpFatherName").checked
                    + "&unRelTLpCity=" + document.getElementById("unRelTLpCity").checked
                    + "&unRelTLpEfirm=" + document.getElementById("unRelTLpEfirm").checked
                    + "&unRelTLpTfirm=" + document.getElementById("unRelTLpTfirm").checked
                    + "&unRelTLpOtherIn=" + document.getElementById("unRelTLpOtherIn").checked
                    + "&unRelTLpSdate=" + document.getElementById("unRelTLpSdate").checked
                    + "&unRelTLpTyp=" + document.getElementById("unRelTLpTyp").checked
                    + "&unRelTLpPrinAmt=" + document.getElementById("unRelTLpPrinAmt").checked
                    + "&unRelTLpRel=" + document.getElementById("unRelTLpRel").checked
                    + "&unRelTLpDel=" + document.getElementById("unRelTLpDel").checked
                    + "&panel=" + encodeURIComponent(panelName);

        } else if (panelName == 'timePrExp') {
            poststr = "timePrExpLpSno=" + document.getElementById("timePrExpLpSno").checked
                    + "&timePrExpLpPrinAmt=" + document.getElementById("timePrExpLpPrinAmt").checked
                    + "&timePrExpLpCustName=" + document.getElementById("timePrExpLpCustName").checked
                    + "&timePrExpLpFatherName=" + document.getElementById("timePrExpLpFatherName").checked
                    + "&timePrExpLpMobno=" + document.getElementById("timePrExpLpMobno").checked
                    + "&timePrExpLpCity=" + document.getElementById("timePrExpLpCity").checked
                    + "&timePrExpLpEfirm=" + document.getElementById("timePrExpLpEfirm").checked
                    + "&timePrExpLpTp=" + document.getElementById("timePrExpLpTp").checked
                    + "&timePrExpLpOtherIn=" + document.getElementById("timePrExpLpOtherIn").checked
                    + "&timePrExpLpSdate=" + document.getElementById("timePrExpLpSdate").checked
                    + "&panel=" + encodeURIComponent(panelName);

        } else if (panelName == 'oldExp') {
            poststr = "oldExpLpSno=" + document.getElementById("oldExpLpSno").checked
                    + "&oldExpLpPrinAmt=" + document.getElementById("oldExpLpPrinAmt").checked
                    + "&oldExpLpCustName=" + document.getElementById("oldExpLpCustName").checked
                    + "&oldExpLpFatherName=" + document.getElementById("oldExpLpFatherName").checked
                    + "&oldExpLpMobno=" + document.getElementById("oldExpLpMobno").checked
                    + "&oldExpLpCity=" + document.getElementById("oldExpLpCity").checked
                    + "&oldExpLpExFirm=" + document.getElementById("oldExpLpExFirm").checked
                    + "&oldExpLpOtherIn=" + document.getElementById("oldExpLpOtherIn").checked
                    + "&oldExpLpSdate=" + document.getElementById("oldExpLpSdate").checked
                    + "&panel=" + encodeURIComponent(panelName);

        } else if (panelName == 'collect') {
            poststr = "collectSno=" + document.getElementById("collectSno").checked
                    + "&collectTotamt=" + document.getElementById("collectTotamt").checked
                    + "&collectCustName=" + document.getElementById("collectCustName").checked
                    + "&collectCity=" + document.getElementById("collectCity").checked
                    + "&collectExFirm=" + document.getElementById("collectExFirm").checked
                    + "&collectStaff=" + document.getElementById("collectStaff").checked
                    + "&collectStatus=" + document.getElementById("collectStatus").checked
                    + "&collectSdate=" + document.getElementById("collectSdate").checked
                    + "&collectDueDate=" + document.getElementById("collectDueDate").checked
                    + "&collectPdate=" + document.getElementById("collectPdate").checked
                    + "&panel=" + encodeURIComponent(panelName);

        } else if (panelName == 'nonCollect') {
            poststr = "nonCollectSno=" + document.getElementById("nonCollectSno").checked
                    + "&nonCollectEmi=" + document.getElementById("nonCollectEmi").checked
                    + "&nonCollectDue=" + document.getElementById("nonCollectDue").checked
                    + "&nonCollectTotamt=" + document.getElementById("nonCollectTotamt").checked
                    + "&nonCollectCustName=" + document.getElementById("nonCollectCustName").checked
                    + "&nonCollectCity=" + document.getElementById("nonCollectCity").checked
                    + "&nonCollectFirm=" + document.getElementById("nonCollectFirm").checked
                    + "&nonCollectStaff=" + document.getElementById("nonCollectStaff").checked
                    + "&nonCollectSdate=" + document.getElementById("nonCollectSdate").checked
                    + "&nonCollectDueDate=" + document.getElementById("nonCollectDueDate").checked
                    + "&nonCollectComm=" + document.getElementById("nonCollectComm").checked
                    + "&panel=" + encodeURIComponent(panelName);
        }
        add_actlp_access('include/php/olgglypn.php', poststr);
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//        document.getElementById("actlpAccessButton").style.visibility = "visible";
        return false;
    }
}
function add_actlp_access(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertActlpAccessButton;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertActlpAccessButton() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("loanAccessDiv").innerHTML = xmlhttp.responseText;
//         alert( document.getElementById("commonAccessDiv").innerHTML);
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/****************************update Code ADD girvi valuation active nad relesed @Author: GAUR10AUG16*********************************************/
/****************************update Code ADD THE COLLECTION OR NON COLLECTION LIST @Author: GAUR14JUL16*********************************************/
/****************************END Code ADD THE LOAN LIST OPTION @Author: GAUR28MAY16*********************************************/
/****************************START Code ADD FINANCE LOAN LIST NEXT PREV button  @Author: GAUR20JUN16*********************************************/
function navigationFinanceLoansListPanel(button, offset, totalGirviProcessed, maxLimit, maxLimitProcess, selFirmId, sortKeyword, rowsPerPage, pageNo, searchColumn, searchValue) {
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
    xmlhttp.open("POST", "include/php/omfnllpn.php?button=" + button + "&offset=" + offset + "&totalGirviProcessed=" + totalGirviProcessed + "&maxLimit=" + maxLimit + "&maxLimitProcess=" + maxLimitProcess +
            "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&rowsPerPage=" + rowsPerPage + "&page=" + pageNo + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue, true);
    xmlhttp.send();
}
/****************************END Code ADD THE FINANCE LOAN LIST NEXT PREV  button @Author: GAUR20JUN16*********************************************/
//***************Start code to customer and supplier Order panel @Author: SANT14UL16************************************************//
//***************Start code to customer and supplier Order panel @Author: SANT29JUL16************************************************//
//***************Start code to customer and supplier Order panel @Author: SANT10AUG16************************************************//
//***************Start code to customer and supplier Order panel @Author: SANT12AUG16************************************************//
//***************Start code to customer and supplier Order panel @Author: SANT23AUG16************************************************//
//***************Start code to customer and supplier Order panel @Author: SANT24AUG16************************************************//
//***************Start code to customer and supplier Order panel @Author: SANT26AUG16************************************************//

//***************Start code to customer and supplier Order panel @Author: SANT03SEP16************************************************//

//***************Start code to customer and supplier Order panel @Author: SANT19SEP16************************************************//
function getStockRawMetalTypeForOrder(panelName, metalType, metalCount, firmId, rawGdPreId, rawGdPostId, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId, metalTypePanel, cntr, otherChgsBy, totFinGdWt, totFinSlWt, metalTypeId, goldRate, silverRate) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("rawMetalIdDiv" + metalCount).innerHTML = xmlhttp.responseText;
            document.getElementById(metalTypeId).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogwhorpydt.php?panelName=" + panelName + "&metalType=" + metalType +
            "&metalDivCount=" + metalCount + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&rawSlPreId=" + rawSlPreId + "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId + "&rawAlPostId=" + rawAlPostId + "&firmId=" + firmId +
            "&metalTypePanel=" + metalTypePanel + "&cntr=" + cntr + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt + "&goldRate=" + goldRate + "&silverRate=" + silverRate, true);
    xmlhttp.send();
}
var goldWtBal = 0;
var silverWtBal = 0;
var GoldWtType = null;
var SilverWtType = null;
var stockDiv = null;

function calcStockItemBalanceForItemSellForOrder() {
    var metalEntered = 0;
    var metalCount = document.getElementById("metalCount").value;
    if (document.getElementById('metalPanel').value == 'StockPayment' || document.getElementById('metalPanel').value == 'StockPayUp') {
        var prefix = 'stock';
    } else if (document.getElementById('metalPanel').value == 'SuppAddOrder' || document.getElementById('metalPanel').value == 'SuppOrderUp') {
        prefix = 'spOr';
    } else if (document.getElementById('metalPanel').value == 'CustSellPayment' || document.getElementById('metalPanel').value == 'CustSellPayUp') {
        prefix = 'sell';
    } else if (document.getElementById('metalPanel').value == 'NwOrPayment' || document.getElementById('metalPanel').value == 'NwOrPayUp') {
        prefix = 'nwOr';
    } else if (document.getElementById('metalPanel').value == 'RawPayment' || document.getElementById('metalPanel').value == 'RawPayUp') {
        prefix = 'rwPr';
    } else if (document.getElementById('metalPanel').value == 'SuppOrderDeliev' || document.getElementById('metalPanel').value == 'SuppOrderDeliveryUp') {
        prefix = 'spOrDel';
    } else if (document.getElementById('metalPanel').value == 'NwOrDelPayment' || document.getElementById('metalPanel').value == 'NwOrDelPaymentUp') {
        prefix = 'nwOrDel';
    }
    if (document.getElementById('metalPanel').value == 'StockPayment' || document.getElementById('metalPanel').value == 'SuppAddOrder' ||
            document.getElementById('metalPanel').value == 'CustSellPayment' || document.getElementById('metalPanel').value == 'NwOrPayment' ||
            document.getElementById('metalPanel').value == 'RawPayment' || document.getElementById('metalPanel').value == 'SuppOrderDeliev' || document.getElementById('metalPanel').value == 'NwOrDelPayment') {
        count = 1;
        delId = 'del' + 1;
    } else if (document.getElementById('metalPanel').value == 'StockPayUp' || document.getElementById('metalPanel').value == 'SellPayUp' ||
            document.getElementById('metalPanel').value == 'CustSellPayUp' || document.getElementById('metalPanel').value == 'NwOrPayUp' ||
            document.getElementById('metalPanel').value == 'RawPayUp' || document.getElementById('metalPanel').value == 'SuppOrderUp' || document.getElementById('metalPanel').value == 'SuppOrderDeliveryUp' || document.getElementById('metalPanel').value == 'NwOrDelPaymentUp') {
        getMetalDiv = document.getElementById('noOfRawMet').value;
        var count = document.getElementById('rawId').value;
        var delId = 'del' + count;
    }
    var totAmtRec = 0;
    var gdBal = 0;
    var slBal = 0;
    var totRecGd = 0;
    var totRecSl = 0;
    var goldWeight = 0;
    var silverWeight = 0;
    var silverWeightType = '';
    var goldWeightType = '';
    GoldWtType = '';
    SilverWtType = '';
    goldWtBal = 0;
    silverWtBal = 0;

    //    for (var dc = count; dc <= getMetalDiv; dc++) { 
    for (var dc = count; getMetalDiv != ''; dc++) {
        if (document.getElementById('metalDel' + dc).value != 'Deleted') {
            var payTotalWeight1 = document.getElementById(prefix + 'PayMetal1RecWt' + dc).value;
            var payTotalWeightType1 = document.getElementById(prefix + 'PayMetal1RecWtType' + dc).value;
//            alert(payTotalWeightType1);
            var payMetalRate1 = document.getElementById(prefix + 'PayMetal1Rate' + dc).value;
            var payMetalTunch1 = document.getElementById(prefix + 'PayMetal1Tunch' + dc).value;
            var metalWeight = (payTotalWeight1 * payMetalTunch1) / 100;
            document.getElementById(prefix + 'PayMetal1FnWt' + dc).value = parseFloat(metalWeight).toFixed(2);
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold' || document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Alloy') {
                goldWeight = metalWeight;
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) * document.getElementById('gmWtInKg').value).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInMg').value).toFixed(2);
                }

                if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold') {

                    var payMetalDueWeightType1 = document.getElementById(prefix + 'GoldTotFineWtType').value;
                    goldWeightType = payMetalDueWeightType1;
                    if (gdBal == '') {
                        gdBal = document.getElementById(prefix + 'GoldTotFineWt').value;
                    }

                    if (payMetalDueWeightType1 == 'KG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight / 1000)).toFixed(3);
                            goldWeight = parseFloat(goldWeight / 1000).toFixed(2);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat(((gdBal) - goldWeight / (1000 * 1000))).toFixed(3);
                            goldWeight = parseFloat(goldWeight / (1000 * 1000)).toFixed(3);
                        }
                    }
                    else if (payMetalDueWeightType1 == 'GM') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(3);
                            goldWeight = parseFloat(goldWeight * 1000).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat(((gdBal) - goldWeight / (1000))).toFixed(3);
                            goldWeight = parseFloat(goldWeight / 1000).toFixed(3);
                        }
                    }
                    else if (payMetalDueWeightType1 == 'MG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000 * 1000)).toFixed(3);
                            goldWeight = parseFloat(goldWeight * 1000 * 1000).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight * 1000)).toFixed(3);
                            goldWeight = parseFloat(goldWeight * 1000).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'MG') {
                            gdBal = parseFloat((gdBal - goldWeight)).toFixed(3);
                        }
                    }
                    document.getElementById(prefix + 'PayMetal1Bal' + dc).value = gdBal;
//                    alert( document.getElementById(prefix + 'PayMetal1Bal' + dc).value);
                    document.getElementById(prefix + 'PayMetalBal1Type' + dc).value = payMetalDueWeightType1;

                    goldWtBal = parseFloat(gdBal).toFixed(3);
                    GoldWtType = payMetalDueWeightType1;

                    totRecGd += goldWeight;
//                    alert(totRecGd);
                }
            }
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Silver') {
                silverWeight = metalWeight;
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1 * document.getElementById('srGmWtInKg').value)).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1) / document.getElementById('srGmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = ((silverWeight * payMetalRate1) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                }

                payMetalDueWeightType1 = document.getElementById(prefix + 'SilverTotFineWtType').value;
                silverWeightType = payMetalDueWeightType1;
                if (slBal == '') {
                    slBal = document.getElementById(prefix + 'SilverTotFineWt').value;
                }
//                alert(slBal);
                if (payMetalDueWeightType1 == 'KG') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat((slBal) - silverWeight).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat(((slBal) - silverWeight / 1000)).toFixed(3);
                        silverWeight = parseFloat(silverWeight / 1000).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat(((slBal) - silverWeight / (1000 * 1000))).toFixed(3);
                        silverWeight = parseFloat(silverWeight / (1000 * 1000)).toFixed(3);
                    }
                }
                else if (payMetalDueWeightType1 == 'GM') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000)).toFixed(3);
                        silverWeight = parseFloat(silverWeight * 1000).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat((slBal) - silverWeight).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat(((slBal) - silverWeight / (1000))).toFixed(3);
                        silverWeight = parseFloat(silverWeight / 1000).toFixed(3);
                    }
                } else if (payMetalDueWeightType1 == 'MG') {
                    if (payTotalWeightType1 == 'KG') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000 * 1000)).toFixed(3);
                        silverWeight = parseFloat(silverWeight * 1000 * 1000).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'GM') {
                        slBal = parseFloat(((slBal) - silverWeight * 1000)).toFixed(3);
                        silverWeight = parseFloat(silverWeight * 1000).toFixed(3);
                    }
                    else if (payTotalWeightType1 == 'MG') {
                        slBal = parseFloat((slBal - silverWeight)).toFixed(3);
                    }
                }
                document.getElementById(prefix + 'PayMetal1Bal' + dc).value = slBal;
                document.getElementById(prefix + 'PayMetalBal1Type' + dc).value = payMetalDueWeightType1;
//                alert(silverWtBal);
                silverWtBal = parseFloat(slBal).toFixed(3);
                SilverWtType = payMetalDueWeightType1;

                totRecSl += silverWeight;
            }
            if (document.getElementById(prefix + 'GoldTotFineWt').value != '' && goldWtBal == 0) {
                goldWtBal = parseFloat(document.getElementById(prefix + 'GoldTotFineWt').value);
                GoldWtType = document.getElementById(prefix + 'GoldTotFineWtType').value;
            }
            if (document.getElementById(prefix + 'SilverTotFineWt').value != '' && silverWtBal == 0) {
                silverWtBal = parseFloat(document.getElementById(prefix + 'SilverTotFineWt').value);
                SilverWtType = document.getElementById(prefix + 'SilverTotFineWtType').value;
            }

            document.getElementById('metal1WtRecBal').value = parseFloat(totRecGd).toFixed(3) + ' ' + goldWeightType;
            document.getElementById('metal1WtRecBal1').value = parseFloat(totRecGd).toFixed(3);
            document.getElementById('metal1WtRecBal1Typ').value = goldWeightType;
            document.getElementById('metal2WtRecBal').value = parseFloat(totRecSl).toFixed(3) + ' ' + silverWeightType;
            document.getElementById('metal2WtRecBal1').value = parseFloat(totRecSl).toFixed(3);
            document.getElementById('metal2WtRecBal1Typ').value = silverWeightType;

            if (document.getElementById(prefix + 'PayMetal1Val' + dc).value == '') {
                document.getElementById(prefix + 'PayMetal1Val' + dc).value = 0;
            }
            totAmtRec += parseFloat(document.getElementById(prefix + 'PayMetal1Val' + dc).value);
//            document.getElementById(prefix + 'PayTotMetAmtRec').value = Math_round(totAmtRec).toFixed(2);
//            alert(totAmtRec);
//            alert(document.getElementById(prefix + 'PayTotAmtRec'))
//            document.getElementById(prefix + 'PayTotAmtRec').value = parseFloat(totAmtRec).toFixed(2);
//            alert('paytotamtrec='+document.getElementById(prefix + 'PayTotAmtRec').value);
//            document.getElementById(prefix + 'PayTotAmtRecDisp').value = document.getElementById(prefix + 'PayTotAmtRec').value;
//            calcCashBalance(prefix);
            calcRawMetStock(prefix);
            calcStockRrCtCashBalanceForOrder(prefix);
        }
        metalEntered++;
    }
    return false;
}
function setRateCutValuesForOrderPanel(prefix) {
//    alert(prefix);
    document.getElementById('metal1RtCtWt').value = parseFloat(goldWtBal).toFixed(3);
    document.getElementById('metal1RtCtWtType').value = GoldWtType;
    document.getElementById('metal2RtCtWt').value = parseFloat(silverWtBal).toFixed(3);
    document.getElementById('metal2RtCtWtType').value = SilverWtType;
    document.getElementById(prefix + 'PayMetal1WtBal').value = parseFloat(goldWtBal).toFixed(3);
    document.getElementById(prefix + 'PayMetal1WtBalType').value = GoldWtType;
    document.getElementById(prefix + 'PayMetal2WtBal').value = parseFloat(silverWtBal).toFixed(3);
    document.getElementById(prefix + 'PayMetal2WtBalType').value = SilverWtType;
    if (stockDiv == 'wholeSaleStock') {
        document.getElementById(prefix + 'Metal1RtCtWtBal1').value = parseFloat(goldWtBal).toFixed(3);
        document.getElementById(prefix + 'Metal2RtCtWtBal1').value = parseFloat(silverWtBal).toFixed(3);
    } else {
        document.getElementById('metal1RtCtWtBal1').value = parseFloat(goldWtBal).toFixed(3);
        document.getElementById('metal2RtCtWtBal1').value = parseFloat(silverWtBal).toFixed(3);
        document.getElementById('metal1RtCtWtBal').value = parseFloat(goldWtBal).toFixed(3);
        document.getElementById('metal2RtCtWtBal').value = parseFloat(silverWtBal).toFixed(3);
        document.getElementById('metal1RtCtWtBalDisp').value = parseFloat(goldWtBal).toFixed(3) + ' ' + GoldWtType;
        document.getElementById('metal2RtCtWtBalDisp').value = parseFloat(silverWtBal).toFixed(3) + ' ' + SilverWtType;
    }
}
function itemsaleRateCutForOrder(rateCutId, totFinGdWt, goldTotFFineWtType, totFinSlWt, silverTotFFineWtType, totGoldPay, totSilverPay, goldRate, silverRate, payPanelName, otherCharges, otherChgsBy, suppId, preInvNo, invNo, goldTotFFineWt, silverTotFFineWt, crystalVal, payOpt, prevGoldPaid, prevSilverPaid) {

    var poststr = "rateCutOpt=" + encodeURIComponent(rateCutId) +
            "&goldTotFFineWt=" + encodeURIComponent(goldTotFFineWt) +
            "&goldTotFFineWtType=" + encodeURIComponent(goldTotFFineWtType) +
            "&silverTotFFineWt=" + encodeURIComponent(silverTotFFineWt) +
            "&silverTotFFineWtType=" + encodeURIComponent(silverTotFFineWtType) +
            "&totFinGdWt=" + encodeURIComponent(totFinGdWt) +
            "&totFinSlWt=" + encodeURIComponent(totFinSlWt) +
            "&prevGoldPaid=" + encodeURIComponent(prevGoldPaid) +
            "&prevSilverPaid=" + encodeURIComponent(prevSilverPaid) +
            "&totGoldPay=" + encodeURIComponent(totGoldPay) +
            "&totSilverPay=" + encodeURIComponent(totSilverPay) +
            "&goldRate=" + encodeURIComponent(goldRate) +
            "&silverRate=" + encodeURIComponent(silverRate) +
            "&otherCharges=" + encodeURIComponent(otherCharges) +
            "&payPanelName=" + encodeURIComponent(payPanelName) +
            "&otherChgsBy=" + encodeURIComponent(otherChgsBy) +
            "&payId=" + encodeURIComponent(document.getElementById('payId').value) +
            "&preInvId=" + encodeURIComponent(preInvNo) +
            "&invId=" + encodeURIComponent(invNo) +
            "&suppId=" + encodeURIComponent(suppId) +
            "&custId=" + encodeURIComponent(document.getElementById('custId').value) +
            "&crystalVal=" + encodeURIComponent(crystalVal) +
            "&payOpt=" + encodeURIComponent(payOpt);
//alert(poststr);
    if (rateCutId == 'RateCut') {
        itemsale_rate_cut("include/php/ogwhitrc.php", poststr);
    } else {
        itemsale_rate_cut("include/php/ogwhitnrc.php", poststr);
    }
}

function getMoreStockRawMetalDivForOrder(metalCnt, panelName, firmId, rawGdPreId, rawGdPostId, metalType, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId,
        metalPanelName, mcntr, rawPreId, rawPostId, otherChgsBy, totFinGdWt, totFinSlWt, goldRate, silverRate) {

    metalPanel = panelName;
    metalCount = metalCnt;
    if (metalCount != '') {
        getMetalDiv = metalCount;
    }
    var poststr = "metalDivCount=" + metalCount
            + "&panelName=" + panelName + "&firmId=" + firmId
            + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&metalType=" + metalType + "&rawSlPreId=" + rawSlPreId +
            "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId +
            "&rawAlPostId=" + rawAlPostId + "&metalPanelName=" + metalPanelName
            + "&mcntr=" + mcntr + "&rawPreId=" + rawPreId + "&rawPostId=" + rawPostId
            + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt + "&goldRate=" + goldRate + "&silverRate=" + silverRate;
    get_more_raw_metal_div('include/php/ogwhorpydt.php', poststr);
    return false;
}

var goldRateCutWeight = 0;
var silverRateCutWeight = 0;
function calcWholeSaleRateCutForOrder(prefix) {

    var gdRtCt = 0;
    var metalType;
    if ((document.getElementById('metal1WtPrevBal1').value).trim() == '' || document.getElementById('metal1WtPrevBal1').value == 'NaN') {
        document.getElementById('metal1WtPrevBal1').value = 0;
    }
    if ((document.getElementById('metal1WtPurBal1').value).trim() == '' || document.getElementById('metal1WtPurBal1').value == 'NaN') {
        document.getElementById('metal1WtPurBal1').value = 0;
    }
    if ((document.getElementById('metal1WtRecBal1').value).trim() == '' || document.getElementById('metal1WtRecBal1').value == 'NaN') {
        document.getElementById('metal1WtRecBal1').value = 0;
    }
    if ((document.getElementById('metal1RtCtWt').value).trim() == '' || document.getElementById('metal1RtCtWt').value == 'NaN') {
        document.getElementById('metal1RtCtWt').value = 0;
    }
//    alert(document.getElementById('metal1RtCtWt').value);
    var gdBal = parseFloat(document.getElementById('metal1WtPrevBal1').value) + parseFloat(document.getElementById('metal1WtPurBal1').value) - parseFloat(document.getElementById('metal1WtRecBal1').value);
    var gdRtCt = parseFloat(document.getElementById('metal1RtCtWt').value);
    var goldRtCtWtType = document.getElementById('metal1RtCtWtType').value;
    var goldWtType = document.getElementById('metal1WtPurBal1Type').value;
    if (gdBal != '') {
        gdRtCt = convertWeight(gdRtCt, goldWtType, goldRtCtWtType);
        document.getElementById('metal1RtCtWtBal').value = gdRtCt;
        document.getElementById(prefix + 'PayMetal1WtBal').value = parseFloat(gdBal - gdRtCt).toFixed(3);
        if (document.getElementById('stockPurPriceCut').value == 'RateCut' || document.getElementById('stockPurPriceCut').value == 'default') {
            document.getElementById('metal1RtCtWtBalDisp').value = gdRtCt + ' ' + goldWtType;
        }
    }

    if ((document.getElementById('metal2WtPrevBal1').value).trim() == '' || document.getElementById('metal2WtPrevBal1').value == 'NaN') {
        document.getElementById('metal2WtPrevBal1').value = 0;
    }
    if ((document.getElementById('metal2WtPurBal1').value).trim() == '' || document.getElementById('metal2WtPurBal1').value == 'NaN') {
        document.getElementById('metal2WtPurBal1').value = 0;
    }
    if ((document.getElementById('metal2WtRecBal1').value).trim() == '' || document.getElementById('metal2WtRecBal1').value == 'NaN') {
        document.getElementById('metal2WtRecBal1').value = 0;
    }
    if ((document.getElementById('metal2RtCtWt').value).trim() == '' || document.getElementById('metal2RtCtWt').value == 'NaN') {
        document.getElementById('metal2RtCtWt').value = 0;
    }
    var silverRtCt = 0;
    var silverBal = parseFloat(document.getElementById('metal2WtPrevBal1').value) + parseFloat(document.getElementById('metal2WtPurBal1').value) - parseFloat(document.getElementById('metal2WtRecBal1').value);
    var silverRtCt = parseFloat(document.getElementById('metal2RtCtWt').value);
    var silverRtCtWtType = document.getElementById('metal2RtCtWtType').value;
    var silverWtType = document.getElementById('metal2WtPurBal1Type').value;
    if (silverBal != '') {
        silverRtCt = convertWeight(silverRtCt, silverWtType, silverRtCtWtType);
        document.getElementById('metal2RtCtWtBal').value = silverRtCt;
        document.getElementById(prefix + 'PayMetal2WtBal').value = parseFloat(silverBal - silverRtCt).toFixed(3);
        if (document.getElementById('stockPurPriceCut').value == 'RateCut' || document.getElementById('stockPurPriceCut').value == 'default') {
            document.getElementById('metal2RtCtWtBalDisp').value = silverRtCt + ' ' + silverWtType;
//            alert(document.getElementById('metal2RtCtWtBalDisp').value);
        }
    }
    calcRawMetStock(prefix);
    calcStockRrCtCashBalanceForOrder(prefix);
}

function calcStockRrCtCashBalanceForOrder(prefix) {
    var finalCashBal;
    var finBalLabel = 'FINAL CASH BALANCE :';
//    if (document.getElementById(prefix + 'PayCashAmtRec').value != '' || document.getElementById(prefix + 'PayChequeAmt').value || document.getElementById(prefix + 'PayCardAmt').value) {
    var totalCashPaidAmt = document.getElementById(prefix + 'PayCashAmtRec').value;
    if (totalCashPaidAmt == null || totalCashPaidAmt == '') {
        totalCashPaidAmt = 0;
    }
    var totalChequeAmt = document.getElementById(prefix + 'PayChequeAmt').value;
    if (totalChequeAmt == null || totalChequeAmt == '') {
        totalChequeAmt = 0;
    }
    var totalCardAmt = document.getElementById(prefix + 'PayCardAmt').value;
    if (totalCardAmt == null || totalCardAmt == '') {
        totalCardAmt = 0;
    }
    document.getElementById(prefix + 'PayCashRecDisp').value = Math_round(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);
//        alert('paycashrecdisp='+ document.getElementById(prefix + 'PayCashRecDisp').value);
    document.getElementById(prefix + 'PayTotCashAmt').value = Math_round(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);
//    }

//    if (document.getElementById('VATTax').value != '' || document.getElementById('VATTax').value != null) {
    var totalValuation = document.getElementById('taxOnTotAmt').value;
    if (totalValuation == null || totalValuation == '') {
        totalValuation = 0;
    }
    if (document.getElementById('VATTax').value == '') {
        document.getElementById('VATTax').value = 0;
    }
    var totTax = parseFloat(document.getElementById('VATTax').value) / 100;
    document.getElementById(prefix + 'PayVATAmtDisp').value = Math_round(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);
    document.getElementById(prefix + 'PayVATAmt').value = Math_round(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);
//    }

    if (document.getElementById(prefix + 'PayVATAmt').value == 'NaN' || document.getElementById(prefix + 'PayVATAmt').value == '') {
        document.getElementById(prefix + 'PayVATAmt').value = 0.00;
    }

//    if (document.getElementById(prefix + 'PayTotCashAmt').value || document.getElementById(prefix + 'PayVATAmt').value || document.getElementById(prefix + 'PayDiscount').value != '') {
    var totalAmt = 0;
    if (document.getElementById(prefix + 'PayTotAmt').value == '' || document.getElementById(prefix + 'PayTotAmt').value == 'NaN') {
        document.getElementById(prefix + 'PayTotAmt').value = 0;
    }
    var crystalAmnt = 0;
    if (document.getElementById('stockPurPriceCut').value == 'RateCut' || document.getElementById('stockPurPriceCut').value == 'default') {
        if (document.getElementById('suppSubPanel').value == 'order' || document.getElementById('suppSubPanel').value == 'ItemStock') {
            if (document.getElementById(prefix + 'PayCrystalAmt').value == '' || document.getElementById(prefix + 'PayCrystalAmt').value == 'NaN') {
                document.getElementById(prefix + 'PayCrystalAmt').value = 0;
            }
            crystalAmnt = parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value);
        }
        if (document.getElementById(prefix + 'PayTotAmtRec').value == '' || document.getElementById(prefix + 'PayTotAmtRec').value == 'NaN') {
            document.getElementById(prefix + 'PayTotAmtRec').value = 0;
        }
        totalAmt = parseFloat(document.getElementById(prefix + 'PayTotAmtRec').value) + parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + crystalAmnt;
    } else {
        totalAmt = parseFloat(document.getElementById(prefix + 'PayTotAmt').value);
    }
    var newTotalAmount = totalAmt;
    document.getElementById('taxOnTotAmt').value = Math_round((parseFloat(totalAmt))).toFixed(2);
    if (document.getElementById(prefix + 'PayPrevTotAmt').value == 'NaN' || document.getElementById(prefix + 'PayPrevTotAmt').value == '') {
        document.getElementById(prefix + 'PayPrevTotAmt').value = 0;
    }

    if (document.getElementById(prefix + 'PayPrevTotAmt').value != '' || document.getElementById(prefix + 'PayPrevTotAmt').value != 0) {
        if (document.getElementById(prefix + 'PayPrevTotAmt').value > 0) {
            totalAmt = totalAmt + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value);
        } else {
            totalAmt = totalAmt - Math.abs(parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value));
        }
    }
    if (document.getElementById(prefix + 'PayVATAmt').value == '' || document.getElementById(prefix + 'PayVATAmt').value == 'NaN') {
        document.getElementById(prefix + 'PayVATAmt').value = 0;
    }
    if (document.getElementById(prefix + 'PayDiscount').value == '' || document.getElementById(prefix + 'PayDiscount').value == 'NaN') {
        document.getElementById(prefix + 'PayDiscount').value = 0;
    }
    if (document.getElementById(prefix + 'PayTotCashAmt').value == '' || document.getElementById(prefix + 'PayTotCashAmt').value == 'NaN') {
        document.getElementById(prefix + 'PayTotCashAmt').value = 0;
    }
    if (document.getElementById(prefix + 'prevCash').value == '' || document.getElementById(prefix + 'prevCash').value == 'NaN') {
        document.getElementById(prefix + 'prevCash').value = 0;
    }
    document.getElementById(prefix + 'PayDiscountDisp').value = Math_round(parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
    document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value))).toFixed(2);
    document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round((parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value) - parseFloat(document.getElementById(prefix + 'prevCash').value))).toFixed(2);
    //    document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
    finalCashBal = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
    finalCashBal = Math_round((parseFloat(finalCashBal) - parseFloat(document.getElementById(prefix + 'prevCash').value))).toFixed(2);
    if (finalCashBal <= 0) {
        finBalLabel = 'FINAL CASH DEPOSIT :';
    }
    document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(finalCashBal).toFixed(2);
    document.getElementById('finCashBalTd').innerHTML = finBalLabel;
    document.getElementById(prefix + 'PayTotAmtBal').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value) - parseFloat(document.getElementById(prefix + 'prevCash').value)).toFixed(2);
    document.getElementById(prefix + 'PayTotRemAmtBal').value = Math_round((parseFloat(newTotalAmount) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);

}

//***************End code to customer and supplier Order panel @Author: SANT19SEP16*************************************************//
//***************End code to customer and supplier Order panel @Author: SANT03SEP16*************************************************//
//***************End code to customer and supplier Order panel @Author: SANT26AUG16*************************************************//
//***************End code to customer and supplier Order panel @Author: SANT24AUG16*************************************************//
//***************End code to customer and supplier Order panel @Author: SANT23AUG16*************************************************//
//***************End code to customer and supplier Order panel @Author: SANT12AUG16*************************************************//
//***************End code to customer and supplier Order panel @Author: SANT10AUG16*************************************************//
//***************End code to customer and supplier Order panel @Author: SANT29JUL16*************************************************//
//***************End code to customer and supplier Order panel @Author: SANT14UL16*************************************************//
//add new function Author:GAUR15JUL16
function getFormPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "include/php/omppfdv.php", true);
    xmlhttp.send();
}

function setDefLangGetForm(defLang, defSize, panel) {                                 // Modified on KHUSH15JAN13
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "include/php/omppfsl.php?defLang=" + defLang + "&defSize=" + defSize + "&panel=" + panel, true);
    xmlhttp.send();
}

function getFormAddNewLangDiv(panelName, formSize) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "include/php/omppfdv.php?panelName=" + panelName + "&formSize=" + formSize, true);//filename changed @Author:PRIYA22MAR14
    xmlhttp.send();
}

//add new function Author:GAUR15JUL16

//add new function Author: GAUR21JUL16
function printCustHome(objName, objData) {
    var DocumentContainerName = document.getElementById(objName);
    var DocumentContainerData = document.getElementById(objData);
    var head;
    head = document.getElementById("girviPanelTrId");
    head.style.position = "relative";
    head.style.top = "0px"
    head.style.visibility = "visible";

    var html = '<html><head><title>Online Munim - Print Page    www.OnlineMunim.com     www.omunim.com</title>' +
            '<link href="css/print.css" rel="stylesheet" type="text/css" />' +
            '<link href="css/index.css" rel="stylesheet" type="text/css" />' +
            '<link href="css/ogcss.css" rel="stylesheet" type="text/css" />' +
            '<link href="css/orcss.css" rel="stylesheet" type="text/css" />' +
            '<script type="text/javascript" src="scripts/emNavigation.js"></script>' +
            '<script type="text/javascript" src="scripts/emValidate.js"></script>' +
            '<script type="text/javascript" src="scripts/emAddOwner.js"></script>' +
            '<script type="text/javascript" src="scripts/emOwnerLogin.js"></script>' +
            '<script type="text/javascript" src="scripts/emUpdateOwner.js"></script>' +
            '<script type="text/javascript" src="scripts/orAddFunction_1_6_1.js"></script>' +
            '<script type="text/javascript" src="scripts/advanceMetal.js"></script>' +
            '</head><body>' +
            '<div id="girviListPanelDiv">' +
            DocumentContainerName.innerHTML + '<br/>' + '<br/>' + '<br/>' +
            DocumentContainerData.innerHTML +
            '</div>' +
            '<a style="cursor: pointer;" onClick="window.print();"><img src="images/printer32.png" class="noPrint" alt="Print" title="Print" width="32px" height="32px" /></a>' +
            '</body></html>';
    var WindowObject = window.open("", "PrintWindow", "width=950,height=900,top=120,left=120,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.open();
    WindowObject.document.writeln(html);
    WindowObject.document.close();
    WindowObject.focus();
}
//End add new function Author: GAUR21JUL16

//******************************************************************Start code to change supplier home panel Author@:SANT28JUL16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT29JUL16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT10AUG16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT12AUG16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT23AUG16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT24AUG16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT26AUG16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT03SEP16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT19SEP16*******************
//******Start code to change supplier home panel Author@:SANT27NOV16**********
function showOrderSuppInfo(prCustId, prSuppId, newPreInvoiceNo, newInvoiceNo, panel, isinOthrChgsBy) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogwhmndv.php?newPreInvoiceNo=" + newPreInvoiceNo + "&newInvoiceNo=" + newInvoiceNo + "&suppId=" + prSuppId + "&suppPanelOption=" + panel + "&isinOthrChgsBy=" + isinOthrChgsBy + "&custId=" + prCustId, true);
    xmlhttp.send();
}
//******End code to change supplier home panel Author@:SANT27NOV16**********
//****Start code for change order panel payment filename:Author:SANT18NOV16****
//****Start code for change order panel payment filename:Author:SANT22NOV16****
//****Start code for change order panel payment filename:Author:SANT25NOV16****
//****Start code for change order panel payment filename:Author:SANT30NOV16****
function getOrderPaymentDiv(documentRootPath, preInvoiceNo, postInvoiceNo, panelName, navPanel, slprinPanel, custId) {
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
            } else if (navPanel == 'orderPreDel') {
                document.getElementById("addStockCurrentInvoice").innerHTML = xmlhttp.responseText;
            }
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            // document.getElementById("slPrPaymentButtDiv").style.visibility = "hidden";
        }
    };
    if (navPanel == 'RawStock' || panelName == 'RawPayment') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrmiddv.php?paymentPanelName=" + panelName + "&preInvNo=" + preInvoiceNo + "&postInvNo=" + postInvoiceNo + "&slprinPanel=" + slprinPanel + "&suppId=" + suppId, true);
    }
    else if (navPanel == 'orderPreDel') {
        xmlhttp.open("GET", "http://" + documentRootPath + "/include/php/ogspisdv.php?mainPanel=" + panelName + "&preOrdInvNo=" + preInvoiceNo + "&postOrdInvNo=" + postInvoiceNo + "&custType=" + navPanel + "&custId=" + custId, true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogpayment.php?paymentPanelName=" + panelName + "&preInvNo=" + preInvoiceNo + "&postInvNo=" + postInvoiceNo + "&slprinPanel=" + slprinPanel + "&custId=" + custId, true);
    }
    xmlhttp.send();
}
//****End code for change order panel payment filename:Author:SANT30NOV16****
//****End code for change order panel payment filename:Author:SANT25NOV16****
//****End code for change order panel payment filename:Author:SANT22NOV16****
//****End code for change order panel payment filename:Author:SANT18NOV16****
function getSuppOrderDelPaymentDiv(documentRootPath, preInvoiceNo, postInvoiceNo, panelName, navPanel, slprinPanel, custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (navPanel == 'SellPurchase') {
                document.getElementById("slPrMainDiv").innerHTML = xmlhttp.responseText;
            } else if (navPanel == 'NewOrder') {
                document.getElementById("suppPayDiv").innerHTML = xmlhttp.responseText;
            } else if (navPanel == 'RawStock' || panelName == 'RawPayment') {
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            }
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            // document.getElementById("slPrPaymentButtDiv").style.visibility = "hidden";
        }
    };
    if (navPanel == 'RawStock' || panelName == 'RawPayment') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogrmiddv.php?paymentPanelName=" + panelName + "&preInvNo=" + preInvoiceNo + "&postInvNo=" + postInvoiceNo + "&slprinPanel=" + slprinPanel + "&suppId=" + suppId, true);
    }
    else
    {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwhpydv.php?paymentPanelName=" + panelName + "&preInvNo=" + preInvoiceNo + "&postInvNo=" + postInvoiceNo + "&slprinPanel=" + slprinPanel + "&custId=" + custId, true);
    }
    xmlhttp.send();
}
//******************************************************************End code to change supplier home panel Author@:SANT19SEP16*******************
//******************************************************************End code to change supplier home panel Author@:SANT03SEP16*******************
//******************************************************************End code to change supplier home panel Author@:SANT26AUG16*******************
//******************************************************************End code to change supplier home panel Author@:SANT24AUG16*******************
//******************************************************************End code to change supplier home panel Author@:SANT23AUG16*******************
//******************************************************************End code to change supplier home panel Author@:SANT12AUG16*******************
//******************************************************************End code to change supplier home panel Author@:SANT10AUG16*******************
//******************************************************************End code to change supplier home panel Author@:SANT29JUL16*******************
//******************************************************************End code to change supplier home panel Author@:SANT28JUL16*******************
/***** Start of code for Max Sell AnalysisReport @AUTHOR: GAUR2AUG16   *********/
function showMaxSellAnalysis() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviPanelAnalysisDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "include/php/orgnsfmx.php", true);
    xmlhttp.send();
}
/***** End of code for  Max Sell AnalysisReport @AUTHOR: GAUR2AUG16*********/
//******************************************************************Start code to change supplier home panel Author@:SANT12AUG16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT23AUG16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT24AUG16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT26AUG16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT01SEP16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT03SEP16*******************
//******************************************************************Start code to change supplier home panel Author@:SANT19SEP16*******************
//***********************Start code to change supplier home panel Author@:SANT29NOV16*******************
//***********************Start code to change supplier home panel Author@:SANT30NOV16*******************
//***********************Start code to change supplier home panel Author@:SANT01DEC16*******************
function showSuppOrderDeliev(paymentPanelName) {
    document.getElementById('crystalCounter1').value
    var newItemMetal = document.getElementById('newItemMetal').value;
    var crysFinalVal = document.getElementById('crysFinalVal').value;
    if (crysFinalVal == '')
        crysFinalVal = 0;
    var goldFinalVal = '0.00';
    var silverFinalVal = 0.00;
    if (newItemMetal == 'Gold') {
        var cryWeight = document.getElementById('crystalCounter1').value;
        var cryWeightTyp = document.getElementById('crystalGdweightType').value;
        var goldTotGrossWt = document.getElementById('spOrDvItemGdGSW1').value;
        var goldTotGrossWtType = document.getElementById('spOrDvItemGdGSWTyp').value;
        var goldTotNetWt = document.getElementById('spOrDvItemGdNTFNW1').value;
        var goldTotNetWtType = document.getElementById('spOrDvItemGdNTFNWT1').value;
        var goldToTounch = document.getElementById('spOrDvItemGdTunch1').value;
        var goldWstgTounch = document.getElementById('spOrDvGdWSTG').value;
        var AdvanceGold = document.getElementById('spOrDvAdvanceGold').value;
        var AdvanceGoldTyp = document.getElementById('spOrDvAdvanceGoldTyp').value;
        var wstg = document.getElementById('spOrDvGdFFNW').value;
        var silverTotGrossWt = '0.000';
        var silverTotGrossWtType = 'GM';
        var silverTotNetWt = '0.000';
        var silverTotNetWtType = 'GM';
        var silverQty = '0';
        var goldQty = document.getElementById('goldQty').value;
        var goldTotFFineWt = document.getElementById('spOrDvTotFineGd').value;
        var goldTotFFineWtType = document.getElementById('spOrDvTotFineGdTyp').value;
        var silverTotFFineWt = '0.000';
        var silverTotFFineWtType = 'GM';
        var goldFinalWeight = document.getElementById('spOrDvRemainGdFnWt').value;
        var goldFinalWeightType = document.getElementById('spOrDvRemainGdFnTyp').value;
        var goldRate = document.getElementById('goldRate').value;
        var silverFinalWeight = '0.000';
        var silverFinalWeightType = 'GM';
//        var goldFinalVal = '0.00';
        if (goldFinalWeightType == 'KG') {
            goldFinalVal = ((goldFinalWeight * goldRate) * document.getElementById('gmWtInKg').value).toFixed(2);
        } else if (goldFinalWeightType == 'GM') {
            goldFinalVal = ((goldFinalWeight * goldRate) / document.getElementById('gmWtInGm').value).toFixed(2);
        } else if (goldFinalWeightType == 'MG') {
            goldFinalVal = ((goldFinalWeight * goldRate) / document.getElementById('gmWtInMg').value).toFixed(2);
        }
        if (goldFinalVal == '' || goldFinalVal == '')
            goldFinalVal = 0.00;
        var totGoldFinalVal = 0.00;
        if (goldTotGrossWtType == 'KG') {
            totGoldFinalVal = ((goldTotGrossWt * goldRate) * document.getElementById('gmWtInKg').value).toFixed(2);
        } else if (goldTotGrossWtType == 'GM') {
            totGoldFinalVal = ((goldTotGrossWt * goldRate) / document.getElementById('gmWtInGm').value).toFixed(2);
        } else if (goldTotGrossWtType == 'MG') {
            totGoldFinalVal = ((goldTotGrossWt * goldRate) / document.getElementById('gmWtInMg').value).toFixed(2);
        }
        var totalFinalBalance = parseFloat(goldFinalVal) + parseFloat(crysFinalVal);
    } else {
        var cryWeight = document.getElementById('crystalCounter1').value;
        var cryWeightTyp = document.getElementById('crystalSlweightType').value;
        var goldTotGrossWt = '0.000';
        var goldTotGrossWtType = 'GM';
        var silverTotGrossWt = document.getElementById('spOrDvItemSrGSW1').value;
        var silverTotGrossWtType = document.getElementById('spOrDvItemSrGSWTyp').value;
        var goldTotNetWt = '0.000';
        var goldTotNetWtType = 'GM';
        var silverTotNetWt = document.getElementById('spOrDvItemSlNTFNW1').value;
        var silverTotNetWtType = document.getElementById('spOrDvItemSlNTFNWT1').value;
        var silverToTounch = document.getElementById('spOrDvItemSrTunch1').value;
        var silverWstgTounch = document.getElementById('spOrDvSrWSTG').value;
        var silverQty = document.getElementById('silverQty').value;
        var wstg = document.getElementById('spOrDvSrFFNW').value;
        var goldQty = '0';
        var goldTotFFineWt = '0.000';
        var goldTotFFineWtType = 'GM';
        var silverTotFFineWt = document.getElementById('spOrDvTotFineSr').value;
        var silverTotFFineWtType = document.getElementById('spOrDvTotFineSrTyp').value;
        var goldFinalWeight = '0.000';
        var goldFinalWeightType = 'GM';
        var silverFinalWeight = document.getElementById('spOrDvRemainSrFnWt').value;
        var silverFinalWeightType = document.getElementById('spOrDvRemainSrFnTyp').value;
        var silverRate = document.getElementById('silverRate').value;
        if (silverFinalWeightType == 'KG') {
            silverFinalVal = ((silverFinalWeight * silverRate * document.getElementById('srGmWtInKg').value)).toFixed(2);
        } else if (silverFinalWeightType == 'GM') {
            silverFinalVal = ((silverFinalWeight * silverRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
        } else if (silverFinalWeightType == 'MG') {
            silverFinalVal = ((silverFinalWeight * silverRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
        }
        var totSilverFinalVal = 0.00;
        if (silverTotGrossWtType == 'KG') {
            totSilverFinalVal = ((silverTotGrossWt * silverRate * document.getElementById('srGmWtInKg').value)).toFixed(2);
        } else if (silverTotGrossWtType == 'GM') {
            totSilverFinalVal = ((silverTotGrossWt * silverRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
        } else if (silverTotGrossWtType == 'MG') {
            totSilverFinalVal = ((silverTotGrossWt * silverRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
        }
        var totalFinalBalance = parseFloat(silverFinalVal) + parseFloat(crysFinalVal);
        var AdvanceSilver = document.getElementById('spOrDvAdvanceSilver').value;
        var AdvanceSilverTyp = document.getElementById('spOrDvAdvanceSilverTyp').value;
    }
    var spOrIdd = document.getElementById('spOrIdd').value;
    var suppId = document.getElementById('suppId').value;
    var custId = document.getElementById('custId').value;
    var firmId = document.getElementById('firmId').value;
    var preInvoiceNo = document.getElementById('preInvoiceNo').value;
    var postInvoiceNo = document.getElementById('postInvoiceNo').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("stockPanelSubDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogpayment.php?paymentPanelName=" + paymentPanelName + "&goldTotGrossWt=" + goldTotGrossWt + "&goldTotGrossWtType=" + goldTotGrossWtType + "&silverTotGrossWt=" + silverTotGrossWt + "&silverTotGrossWtType=" + silverTotGrossWtType + "&silverQty=" + silverQty + "&goldQty=" + goldQty + "&suppId=" + suppId + "&goldTotFFineWt=" + goldTotFFineWt + "&goldTotFFineWtType=" + goldTotFFineWtType + "&silverTotFFineWt=" + silverTotFFineWt + "&silverTotFFineWtType=" + silverTotFFineWtType + "&goldFinalWeight=" + goldFinalWeight + "&goldFinalWeightType=" + goldFinalWeightType + "&silverFinalWeight=" + silverFinalWeight + "&silverFinalWeightType=" + silverFinalWeightType + "&custId=" + custId + "&preInvoiceNo=" + preInvoiceNo + "&postInvoiceNo=" + postInvoiceNo + "&goldFinalVal=" + goldFinalVal + "&silverFinalVal=" + silverFinalVal + "&totalFinalBalance=" + totalFinalBalance + "&firmId=" + firmId + "&goldTotNetWt=" + goldTotNetWt + "&goldTotNetWtType=" + goldTotNetWtType + "&silverTotNetWt=" + silverTotNetWt + "&silverTotNetWtType=" + silverTotNetWtType + "&silverToTounch=" + silverToTounch + "&goldToTounch=" + goldToTounch + "&wstg=" + wstg + "&cryWeight=" + cryWeight + "&cryWeightTyp=" + cryWeightTyp + "&goldWstgTounch=" + goldWstgTounch + "&silverWstgTounch=" + silverWstgTounch + "&metalType=" + newItemMetal + "&AdvanceGold=" + AdvanceGold + "&AdvanceGoldTyp=" + AdvanceGoldTyp + "&AdvanceSilver=" + AdvanceSilver + "&AdvanceSilverTyp=" + AdvanceSilverTyp + "&spOrIdd=" + spOrIdd + "&crysFinalVal=" + crysFinalVal + "&totGoldFinalVal=" + totGoldFinalVal + "&totSilverFinalVal=" + totSilverFinalVal, true);
    xmlhttp.send();
}
//*********End code to change supplier home panel Author@:SANT01DEC16*******************
//*********End code to change supplier home panel Author@:SANT30NOV16*******************
//*********End code to change supplier home panel Author@:SANT29NOV16*******************
function getUpdateorderDeliv(custId, nworId, panelName, mainPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            if (mainPanel == 'NewOrderMainPanel') {
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            } else if (panelName == 'NwOrDetUpPanel') {
                document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            } else {
                document.getElementById("newOrderDivs").innerHTML = xmlhttp.responseText;
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            }
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (mainPanel == 'NewOrderMainPanel') {
        xmlhttp.open("POST", "include/php/omcdccdd.php?custId=" + custId + "&panelDivName=" + 'NewOrder' + "&itemPanel=" + "NwOrPayUp" + "&nworId=" + nworId, true);
    } else {
        if (panelName == 'DelOrderPayment')
        {
            xmlhttp.open("POST", "include/php/ogcmiddv.php?itemPanel=" + panelName + "&custId=" + custId + "&nworId=" + nworId, true);
        }
        else {
            xmlhttp.open("POST", "include/php/ognoidelv.php?itemPanel=" + panelName + "&custId=" + custId + "&nworId=" + nworId, true);
        }
    }
    xmlhttp.send();
}
function showCustOrderDeliev(paymentPanelName) {
    var custId = document.getElementById('custId').value;
    var suppId = document.getElementById('suppId').value;
    var payPreInvoiceNo = document.getElementById('preInvoiceNo').value;
    var payInvoiceNo = document.getElementById('postInvoiceNo').value;
    var totFinGdWt = document.getElementById('totFinGdWt').value;
    var goldTotFFineWtType = document.getElementById('goldTotFFineWtType').value;
    var totFinSlWt = document.getElementById('totFinSlWt').value;
    var totFinSlWtyp = document.getElementById('totFinSlWtyp').value;
    var cryWt = document.getElementById('cryWt').value;
    var cryWtTyp = document.getElementById('cryWtTyp').value;
    var finalItemWTVal = document.getElementById('finalItemWTVal').value;
    var finalCRYWTVal = document.getElementById('finalCRYWTVal').value;
    var finalVal = document.getElementById('finalVal').value;
    var totalMetalVal = document.getElementById('totalMetalVal').value;
    var firmId = document.getElementById('firmId').value;
    var nworId = document.getElementById('nworId').value;
    var goldRate = document.getElementById('goldRate').value;
    var silverRate = document.getElementById('silverRate').value;
    var labChargVal = document.getElementById('labChargVal').value;
    paymentPanelName = 'NwOrDelPayment';
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("stockPanelSubDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogcmiddv.php?paymentPanelName=" + paymentPanelName + "&suppId=" + suppId + "&custId=" + custId + "&payPreInvoiceNo=" + payPreInvoiceNo + "&payInvoiceNo=" + payInvoiceNo + "&totFinGdWt=" + totFinGdWt + "&goldTotFFineWtType=" + goldTotFFineWtType + "&totFinSlWt=" + totFinSlWt + "&totFinSlWtyp=" + totFinSlWtyp + "&cryWt=" + cryWt + "&cryWtTyp=" + cryWtTyp + "&finalItemWTVal=" + finalItemWTVal + "&finalCRYWTVal=" + finalCRYWTVal + "&finalVal=" + finalVal + "&totalMetalVal=" + totalMetalVal + "&firmId=" + firmId + "&nworId=" + nworId + "&goldRate=" + goldRate + "&silverRate=" + silverRate + "&labChargVal=" + labChargVal, true);
    xmlhttp.send();
}
//******************************************************************End code to change supplier home panel Author@:SANT19SEP16*******************
//******************************************************************End code to change supplier home panel Author@:SANT03SEP16*******************
//******************************************************************End code to change supplier home panel Author@:SANT01SEP16*******************
//******************************************************************End code to change supplier home panel Author@:SANT26AUG16*******************
//******************************************************************End code to change supplier home panel Author@:SANT24AUG16*******************
//******************************************************************End code to change supplier home panel Author@:SANT23AUG16*******************
//******************************************************************End code to change supplier home panel Author@:SANT12AUG16*******************
////START CODE FOR SCHEME AUTHOR: GAUR12AUG16
//**************************** START Navigate scheme Panel Author: GAUR12AUG16 *******************************************************************
function navigateSchemeNamePanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "include/php/omsaaind.php", true);
    xmlhttp.send();
}

//************* Get ItemName Details *******************
var schemeNameId;
function setSchemeNameId(obj) {

    schemeNameId = obj.id;

}
function getSchemeName(obj) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUpdateSchemeNameDiv").innerHTML = xmlhttp.responseText;
        }
        else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("GET", "include/php/omsuindv.php?schemeNameId=" + schemeNameId,
            true);
    xmlhttp.send();
}
//************* Get ItemTunch Details *******************


function updateDeleteSchemeName() {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (validateAddSchemeNameInputs()) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("UpdateScheme").style.visibility = "visible";
        return true;

    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    }
}

function validateAddSchemeNameInputs(obj) {
    if (validateEmptyField(document.getElementById("addSchemeName").value, "Please enter Scheme Name!") == false ||
            validateAlphaNumWithSpaceWithSlash(document.getElementById("addSchemeName").value, "Accept only alpha or numeric characters or with space character!") == false) {
        document.getElementById("addSchemeName").focus();
        return false;
    }
    return true;
}

function addSettSchemeName() {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (validateAddSchemeNameInputs()) {
        return true;
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    }
}
//****************************END Navigate SHEME Panel Author: GAUR12AUG16 *******************************************************************
//END CODE FOR SCHEME AUTHOR: GAUR12AUG16
// START add code for stock_list print function Author:GAUR08AUG16
function printStockListPanel(obj) {
    var DocumentContainer = document.getElementById(obj);
    var head;
    head = document.getElementById("stockItemListPanelTrId");
    head.style.position = "relative";
    head.style.top = "0px"
    head.style.visibility = "visible";

    var html = '<html><head><title>Online Munim - Print Page    www.OnlineMunim.com     www.omunim.com</title>' +
            '<link href="css/print.css" rel="stylesheet" type="text/css" />' +
            '<link href="css/index.css" rel="stylesheet" type="text/css" />' +
            '<link href="css/ogcss.css" rel="stylesheet" type="text/css" />' +
            '<link href="css/orcss.css" rel="stylesheet" type="text/css" />' +
            '<script type="text/javascript" src="scripts/emNavigation.js"></script>' +
            '<script type="text/javascript" src="scripts/emValidate.js"></script>' +
            '<script type="text/javascript" src="scripts/emAddOwner.js"></script>' +
            '<script type="text/javascript" src="scripts/emOwnerLogin.js"></script>' +
            '<script type="text/javascript" src="scripts/emUpdateOwner.js"></script>' +
            '<script type="text/javascript" src="scripts/orAddFunction_1_6_1.js"></script>' +
            '<script type="text/javascript" src="scripts/advanceMetal.js"></script>' +
            '</head><body>' +
            '<div id="stockPanelPurchaseList">' +
            DocumentContainer.innerHTML +
            '</div>' +
            '<a style="cursor: pointer;" onClick="window.print();"><img src="images/printer32.png" class="noPrint" alt="Print" title="Print" width="32px" height="32px" /></a>' +
            '</body></html>';
    var WindowObject = window.open("", "PrintWindow", "width=1000,height=900,top=120,left=120,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.open();
    WindowObject.document.writeln(html);
    WindowObject.document.close();
    WindowObject.focus();
}
// END add code for stock_list print function Author:GAUR08AUG16
var custId;
function setkittyCustId(obj) {
    custId = obj.id;
}

function add_new_kitty(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertCustAddNewKitty;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertCustAddNewKitty() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        document.getElementById("kittyScheme").focus();
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
function custAddNewKitty(obj) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    var poststr = "custId=" + custId
            + "&firmId=" + encodeURIComponent(document.getElementById("custFirmId").value)
            + "&custType=" + encodeURIComponent(document.getElementById("custType").value);
    add_new_kitty('include/php/omktdetl.php', poststr);//change in filename @AUTHOR: SANDY20NOV13

}


function addNewKitty() {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("addKittySubButDiv").style.visibility = "hidden";
    var girviDateDay = document.getElementById("DOBDay").value;
    var girviDateMMM = document.getElementById("DOBMonth").value;
    var girviDateYY = document.getElementById("DOBYear").value;
    var girviDateStr = document.getElementById("DOBMonth").value + ' ' + document.getElementById("DOBDay").value + ', ' + document.getElementById("DOBYear").value;
    var girviDate = new Date(girviDateStr); // Girvi Date
    var todayDate = new Date(); // Today Date
    var milliGirviDate = girviDate.getTime();
    var milliTodayDate = todayDate.getTime();
    var datesDiff = milliTodayDate - milliGirviDate;


    if (datesDiff < 0) {
        alert('Please Select the correct Girvi Date!');
        document.getElementById("DOBDay").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("addKittySubButDiv").style.visibility = "visible";
        return false;
        exit();
    } else {
        if (girviDateMMM == 'FEB' || girviDateMMM == 'APR' || girviDateMMM == 'JUN' || girviDateMMM == 'SEP' || girviDateMMM == 'NOV') {
            if (girviDateMMM == 'FEB' && girviDateDay > 29 && girviDateYY % 4 == 0) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' for this selected year has only max 29 days.');
                document.getElementById("DOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addKittySubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
            if (girviDateMMM == 'FEB' && girviDateDay > 28 && girviDateYY % 4 != 0) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' for this selected year has only max 28 days.');
                document.getElementById("DOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addKittySubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
            if (girviDateDay > 30) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' has only max 30 days.');
                document.getElementById("DOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addKittySubButDiv").style.visibility = "visible";
                return false;
                exit();
            }
        }
        if (validateAddFLaonEMIInputs()) {
            return true;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addKittySubButDiv").style.visibility = "visible";
        }

        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("addKittySubButDiv").style.visibility = "visible";
        return false;
    }
    return false;
}

/********************* start - update field name @Author:GAUR01SEPT16 **************************/
/********************* start - update field name @Author:GAUR02SEP16 **************************/
function validateAddFLaonEMIInputs() {
    //Validation changes By @Amol 3 march 2017 
    if (validateEmptyField(document.getElementById("kittyScheme").value, "Please Enter Scheme Name!") == false) {
        document.getElementById("kittyScheme").focus();
        return false;
    }
    if (document.getElementById("kittyFirmId").value == 'NotSelected') {
        alert('Please Select Firm Name!');
        document.getElementById("kittyFirmId").focus();
        return false;
    }
    if (validateEmptyField(document.getElementById("kittyGroup").value, "Please Enter User Group Name!") == false) {
        document.getElementById("kittyGroup").focus();
        return false;
    }

    if (validateEmptyField(document.getElementById("kittyNoOfEmi").value, "Please Enter Number Of EMI!") == false ||
            validateNum(document.getElementById("kittyNoOfEmi").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("kittyNoOfEmi").focus();
        return false;
    }
    if (validateEmptyField(document.getElementById("kittyNoOfDays").value, "Please Enter Number Of Days/Months!") == false ||
            validateNum(document.getElementById("kittyNoOfDays").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("kittyNoOfDays").focus();
        return false;
    }

    if (validateEmptyField(document.getElementById("kittyEmiAmount").value, "Please Enter EMI Amount!") == false ||
            validateNum(document.getElementById("kittyEmiAmount").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("kittyEmiAmount").focus();
        return false;
    }

    if (validateEmptyField(document.getElementById("kittyAmount").value, "Please Enter Total Ammount!") == false ||
            validateNum(document.getElementById("kittyAmount").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("kittyAmount").focus();
        return false;
    }




    if (validateEmptyField(document.getElementById("kittyFinalAmount").value, "Please Enter Amount!") == false ||
            validateNum(document.getElementById("kittyFinalAmount").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("kittyFinalAmount").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBDay").value, "Please select Day!") == false) {
        document.getElementById("DOBDay").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBMonth").value, "Please select Month!") == false) {
        document.getElementById("DOBMonth").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBYear").value, "Please select Year!") == false) {
        document.getElementById("DOBYear").focus();
        return false;
    }

    else if (validateEmptyField(document.getElementById("kittySerialNo").value, "Please enter Serial Number!") == false ||
            validateNum(document.getElementById("kittySerialNo").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("kittySerialNo").focus();
        return false;
    }

    // else if (validateSelectField(document.getElementById("selectFirmDiv").value, "Please select Loan Firm Id!") == false) {
    //     document.getElementById("selectFirmDiv").focus();
    //     return false;
    // }
    else if (validateEmptyField(document.getElementById("kittyNoOfDays").value, "Please Enter Kitty Number of days!") == false) {
        document.getElementById("kittyNoOfDays").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("kittyPayAccId").value, "Please Select Payment Account!") == false) {
        document.getElementById("kittyPayAccId").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("kittyDrAccId").value, "Please Select Cr Account!") == false) {
        document.getElementById("kittyDrAccId").focus();
        return false;
    } else {
        return true;
    }
}
/********************* end - update field name @Author:GAUR02SEP16**************************/
/********************* end - update field name @Author:GAUR01SEPT16 **************************/

function printKittyPanel(obj) {
    var DocumentContainer = document.getElementById(obj);
    var head;
    head = document.getElementById("kittyPanelTrId");
    head.style.position = "relative";
    head.style.top = "0px"
    head.style.visibility = "visible";

    var html = '<html><head><title>Online Munim - Print Page    www.OnlineMunim.com     www.omunim.com</title>' +
            '<link href="css/print.css" rel="stylesheet" type="text/css" />' +
            '<link href="css/index.css" rel="stylesheet" type="text/css" />' +
            '<link href="css/ogcss.css" rel="stylesheet" type="text/css" />' +
            '<link href="css/orcss.css" rel="stylesheet" type="text/css" />' +
            '<script type="text/javascript" src="scripts/emNavigation.js"></script>' +
            '<script type="text/javascript" src="scripts/emValidate.js"></script>' +
            '<script type="text/javascript" src="scripts/emAddOwner.js"></script>' +
            '<script type="text/javascript" src="scripts/emOwnerLogin.js"></script>' +
            '<script type="text/javascript" src="scripts/emUpdateOwner.js"></script>' +
            '<script type="text/javascript" src="scripts/orAddFunction_1_6_1.js"></script>' +
            '<script type="text/javascript" src="scripts/advanceMetal.js"></script>' +
            '</head><body>' +
            '<div id="girviDetailsDiv">' +
            DocumentContainer.innerHTML +
            '</div>' +
            '<a style="cursor: pointer;" onClick="window.print();"><img src="images/printer32.png" class="noPrint" alt="Print" title="Print" width="32px" height="32px" /></a>' +
            '</body></html>';
    var WindowObject = window.open("", "PrintWindow", "width=1000,height=900,top=120,left=120,toolbars=no,scrollbars=yes,status=no,resizable=yes");
    WindowObject.document.open();
    WindowObject.document.writeln(html);
    WindowObject.document.close();
    WindowObject.focus();
}
//end add kitty button Author: GAUR17AUG16
//****************************end add all functions for kitty scheme Author:GAUR22AUG16****************************/

/**********Start code to FINANCE NOTICE add var @Author:GAUR22AUG16*******************/
function getFinanceNoticeLang(custId, girviId, mainPrincAmount, width, height) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("display_finance_notice_lang").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("display_finance_notice_lang").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/omfinntl.php?custId=" + custId + "&girviId=" + girviId + "&mainPrincAmount=" + mainPrincAmount + "&width=" + width + "&height=" + height, true);
    xmlhttp.send();
}
/**********End code to FINANCE NOTICE add var @Author:GAUR22AUG16*******************/


/**********Start code to add the scheme dropdown @Author:GAUR22AUG16*******************/
/**********Start code to add the scheme dropdown @Author:GAUR01SEP16*******************/
var keyCode;
function search_scheme_for_kitty(url, parameters) {
    loadXMLDoc();

    xmlhttp.onreadystatechange = alertSearchSchemeForKitty;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertSearchSchemeForKitty() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("schemeListDiv").innerHTML = xmlhttp.responseText;
        if (keyCode == 40 || keyCode == 38) {
            document.getElementById('schemeForKitty').focus();
            document.getElementById('schemeForKitty').options[0].selected = true;
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function searchSchemeForKitty(scheme, keyCodeInput) {
    keyCode = keyCodeInput;

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    var poststr = "scheme=" + encodeURIComponent(scheme);

    search_scheme_for_kitty('include/php/omktscsr.php', poststr);
}
var cityNameForPanelBlank;
function search_scheme_for_kitty_blank(url, parameters) {
    loadXMLDoc();

    xmlhttp.onreadystatechange = alertSearchSchemeForKittyBlank;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertSearchSchemeForKittyBlank() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("schemeListDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadSrchCustToAddGirviDiv").style.visibility = "visible";
    }
}
function searchSchemeForKittyBlank() {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    var poststr = "";

    search_scheme_for_kitty_blank('include/php/ombbblnk.php', poststr);
}
/**********END code to add the scheme dropdown @Author:GAUR01SEP16*******************/
/**********END code to add the scheme dropdown @Author:GAUR22AUG16*******************/


/************ Start code to add update kitty @Author:GAUR23AUG16************/
/************ Start code to add update kitty @Author:GAUR30AUG16************/
function getKittyUpdateDiv(kittyId, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("kittyFinDiv").innerHTML = xmlhttp.responseText;

            document.getElementById('kittyAmount').focus();
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omktdetl.php?kittyId=" + kittyId + "&panelName=" + panelName, true);
    xmlhttp.send();
}
/************END code to add update kitty @Author:GAUR30AUG16************/
/************END code to add update kitty @Author:GAUR23AUG16************/
/************ Start code to add function passKittyEMIValues @Author:GAUR26AUG16************/
/******Start code to update function @Author:GAUR09SEP16********/
function passKittyEMIValues(kittyNo, emiPaidDD, emiPaidMM, emiPaidYY, emiAmt, emiStatus, kPaidAmt, serialNo, custId, firmId, kittyId, kittyDOB, gDepId, gDepJrnlId, emiOccur, gEMIAmt, princAmt, dueDate, pageNo, kittyMetalType, kRateAmt, kWtAmt) {
    //alert("kittyMetalType = "+kittyMetalType);
//     alert(kRateAmt);
//     alert(firmId);
    if (validateSelectField(document.getElementById("DOBDay" + gDepId + kittyNo).value, "Please select Day!") == false) {
        document.getElementById("DOBDay" + gDepId + kittyNo).focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBMonth" + gDepId + kittyNo).value, "Please select Month!") == false) {
        document.getElementById("DOBMonth" + gDepId + kittyNo).focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBYear" + gDepId + kittyNo).value, "Please select Year!") == false) {
        document.getElementById("DOBYear" + gDepId + kittyNo).focus();
        return false;
    } else {
        var checkKittyPaidAmt = document.getElementById("kittyPaidAmt" + kittyNo).value;
        if (kittyMetalType != 'CASH') {
            var checkKittyRateAmt = document.getElementById("kittyRateAmt" + kittyNo).value;
            var checkKittyWteAmt = document.getElementById("kittyRateAmt" + kittyNo).value;

            if (checkKittyRateAmt == '' || checkKittyWteAmt == '' ||
                    checkKittyRateAmt == null ||
                    checkKittyWteAmt == null ||
                    checkKittyRateAmt == 0.000 || checkKittyWteAmt == 0.00 ||
                    checkKittyRateAmt == 0 || checkKittyWteAmt == 0 ||
                    checkKittyWteAmt == 0)
            {
                alert("please enter the Metal Rate and Weight!");
                if (emiStatus == 'Paid') {
                    // document.getElementById('kittyDepEMIStatus'+kittyNo).option[0]='selected';
                    //document.getElementById('kittyDepEMIStatus' + kittyNo).value = 'Due';
                    document.getElementById('kittyDepEMIStatus' + kittyNo).value = 'Due';
                }
                return  false;
            }
        }
        if (checkKittyPaidAmt == '' ||
                checkKittyPaidAmt == null ||
                checkKittyPaidAmt == 0)
        {
            alert("Please enter the Paid Amt!");
            document.getElementById("kittyPaidAmt" + kittyNo).focus();
            if (emiStatus == 'Paid') {
                // document.getElementById('kittyDepEMIStatus'+kittyNo).option[0]='selected';
                document.getElementById('kittyDepEMIStatus' + kittyNo).value = 'Due';
            }
            return  false;
        } else {
            confirm_box = confirm("Do you really want to change the status !");
            if (confirm_box == true) {

                loadXMLDoc();
                xmlhttp.onreadystatechange = function () {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
                    }
                    else {
                        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
                    }
                };
                var emiPaidDate = emiPaidDD + ' ' + emiPaidMM + ' ' + emiPaidYY;
                var poststr = "kittyNo=" + kittyNo
                        + "&emiPaidDate=" + emiPaidDate
                        + "&emiAmt=" + emiAmt
                        + "&emiStatus=" + emiStatus
                        + "&kPaidAmt=" + kPaidAmt
                        + "&custId=" + custId
                        + "&kittyId=" + kittyId
                        + "&kittyDOB=" + kittyDOB
                        + "&gDepId=" + gDepId
                        + "&gDepJrnlId=" + gDepJrnlId
                        + "&emiOccur=" + emiOccur
                        + "&gEMIAmt=" + gEMIAmt
                        + "&princAmt=" + princAmt
                        + "&kittyEndDate=" + dueDate
                        + "&pageNo=" + pageNo
                        + "&kRateAmt=" + kRateAmt
                        + "&kWtAmt=" + kWtAmt;
                if (kittyMetalType != 'CASH') {
                    poststr = poststr + "&kRateAmt=" + kRateAmt
                            + "&kWtAmt=" + kWtAmt;

                }
                poststr = poststr + "&serialNo=" + serialNo
                        + "&custId=" + custId
                        + "&firmId=" + firmId
                        + "&kittyId=" + kittyId
                        + "&kittyDOB=" + kittyDOB
                        + "&gDepId=" + gDepId
                        + "&gDepJrnlId=" + gDepJrnlId
                        + "&emiOccur=" + emiOccur
                        + "&gEMIAmt=" + gEMIAmt
                        + "&princAmt=" + princAmt
                        + "&kittyEndDate=" + dueDate
                        + "&pageNo=" + pageNo;
                //alert(poststr);
                xmlhttp.open("POST", "include/php/omktemiin.php?" + poststr, true);
                xmlhttp.send();
            }
        }
    }
}
/******END code to update function @Author:GAUR09SEP16********/
/************END code to add function passKittyEMIValues @Author:GAUR26AUG16************/

/******Start code to add function deleteCustKittyDetails @Author:GAUR26AUG16********/
function deleteCustKittyDetails(kittyId, custId)
{
    document.getElementById("ajaxLoadUdhaarDepositMon" + kittyId).style.visibility = "visible";
    confirm_box = confirm("Do you really want to Permanent Delete this Kitty Details?");
    if (confirm_box == true)
    {
        var poststr = "kittyId=" + kittyId +
                "&custId=" + custId;
        delete_girvi('include/php/omktgrdl.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
    }
    else {
        document.getElementById("ajaxLoadUdhaarDepositMon" + kittyId).style.visibility = "hidden";
    }
}
/******End code to add function deleteCustKittyDetails @Author:GAUR26AUG16********/

/******START code to add function KITTY DETAILS @Author:GAUR26AUG16********/
/******START code to UPDATE function KITTY DETAILS @Author:GAUR02SEP16********/
/******START code to update function @Author:GAUR09SEP16********/
function cust_kitty_details(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertCustKittyDetails;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertCustKittyDetails() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
function custKittyDetails(obj) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (obj) {
        var poststr = "custId=" + custId
                + "&firmId=" + encodeURIComponent(document.getElementById("custFirmId").value);
        cust_kitty_details('include/php/omktpydtl.php', poststr);//changes in navigation AS per new filename @AUTHOR: SANDY20NOV13
    }

}
/******END code to update function @Author:GAUR09SEP16********/
/******END code to UPDATE function KITTY DETAILS @Author:GAUR02SEP16********/
/******END code to add function KITTY DETAILS @Author:GAUR26AUG16********/

/******Start code to update function payoutKittyDetails @Author:GAUR01SEPT16********/
/******Start code to update function payoutKittyDetails @Author:GAUR09SEP16********/
function payoutKittyDetails(totalDepAmount, kittyScheme, kittyId, custId, kittyBonusAmt, kittyFirmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("kittyPayoutDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("kittyPayoutDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omktpyot.php?totalDepAmount=" + totalDepAmount + "&kittyScheme=" + kittyScheme + "&kittyId=" + kittyId + "&custId=" + custId + "&kittyBonusAmt=" + kittyBonusAmt + "&kittyFirmId=" + kittyFirmId, true);
    xmlhttp.send();
}
/******End code to update function payoutKittyDetails @Author:GAUR09SEP16********/
/******End code to update function payoutKittyDetails @Author:GAUR01SEPT16********/
/****************************************Add function for change end date and change amount @Author:GAUR02SEP16**********************************/
function changeKittyAmount() {
    var totNoEmi = document.getElementById('kittyNoOfEmi').value;
    var kittyAmount = document.getElementById('kittyEmiAmount').value;
    var kittyBonusAmt = document.getElementById('kittyBonusAmount').value;
    if (kittyAmount == 0 || kittyAmount == 0.00) {
        alert('EMI Amount Must Be Greater than 0');
        return false
                ;
    }
    var kittyTotalAmt = (totNoEmi * kittyAmount);
    document.getElementById('kittyAmount').value = kittyTotalAmt;
    if (kittyTotalAmt == '' || kittyBonusAmt == '') {
        document.getElementById('kittyFinalAmount').value = kittyTotalAmt;
    } else {
        document.getElementById('kittyFinalAmount').value = (parseFloat(kittyTotalAmt) + parseFloat(kittyBonusAmt));
    }
}

function edateChange() {
    var DOBDay = document.getElementById('DOBDay').value;
    var DOBMonth = document.getElementById('DOBMonth').value;
    var DOBYear = document.getElementById('DOBYear').value;
    var noOfEmi = document.getElementById('kittyNoOfEmi').value;
    var noOfDays = document.getElementById('kittyNoOfDays').value;
    var noOfEmiTyp = document.getElementById('addSchemePrdTyp').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("kittyEdate").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("kittyEdate").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omktedat.php?DOBDay=" + DOBDay + "&DOBMonth=" + DOBMonth + "&DOBYear=" + DOBYear + "&noOfEmi=" + noOfEmi + "&noOfEmiTyp=" + noOfEmiTyp + "&noOfDays=" + noOfDays + "&class=textLabel14CalibriGrey", true);
    xmlhttp.send();
}

function changeKittyPayoutAmount() {
    var totKittyPaidAmt = document.getElementById('kittyPaidAmt').value;
    var kittyBonusAmt = document.getElementById('kittyBonusAmt').value;
    document.getElementById('kittyTotAmt').value = (parseFloat(totKittyPaidAmt) + parseFloat(kittyBonusAmt));
}

/******Start code to update function payKitty @Author:GAUR09SEP16********/
function payKitty(kittyId, custId, kittyFirmId, totalDepAmount, kittyBonusAmt, totalAmt) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("kittyPayDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("kittyPayoutDiv").style.visibility = "hidden";
        } else {
            document.getElementById("kittyPayDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omktpyamt.php?kittyId=" + kittyId + "&custId=" + custId + "&kittyFirmId=" + kittyFirmId + "&totalDepAmount=" + totalDepAmount + "&kittyBonusAmt=" + kittyBonusAmt + "&totalAmt=" + totalAmt, true);
    xmlhttp.send();
}
/******End code to update function payKitty @Author:GAUR09SEP16********/

//****************************add Navigate Girvi @Author:GAUR09SEP16*******************************************************************
function navigationKitty(pageNo, custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.barcode_search.barcode_text.focus();
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "include/php/omktpydtl.php?page=" + pageNo + "&custId=" + custId, true);//changes in navigation AS per new filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
//***************************add* Navigate Girvi Receipt Panel @Author:GAUR09SEP16*******************************************************************
/****************************************Add function for change end date and change amount @Author:GAUR02SEP16**********************************/
//***************************start add item code nevigation @Author:GAUR12SEP16*******************************************************************
function navigateImitationCodePanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("POST", "include/php/omicaaind.php", true);
    xmlhttp.send();
}
//***************************end add item code nevigation @Author:GAUR12SEP16*******************************************************************
//*************start Get ItemCode Details @Author:GAUR12SEP16**************************************************************
var itmCodeId;
function setItmCodeId(obj) {

    itmCodeId = obj.id;

}
function getItmCode(obj) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUpdateSchemeNameDiv").innerHTML = xmlhttp.responseText;
        }
        else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("GET", "include/php/omsuindv.php?schemeNameId=" + schemeNameId,
            true);
    xmlhttp.send();
}
//*************end Get ItemCode Details @Author:GAUR12SEP16**************************************************************
//************* start Get ItemCode Details @Author:GAUR12SEP16*******************
var itemCodeId;
function setItmCodeId(obj) {

    itemCodeId = obj.id;
}
function getImtCode(obj) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUpdateImitationCodeDiv").innerHTML = xmlhttp.responseText;
        }
        else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("GET", "include/php/omcuindv.php?itemCodeId=" + itemCodeId,
            true);
    xmlhttp.send();
}
//*************end Get ItemTunch Details @Author:GAUR12SEP16*******************
//************* start update ItemCode Details @Author:GAUR12SEP16*******************
function updateDeleteItmCode() {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (validateAddItmCodeInputs()) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("UpdateItmCode").style.visibility = "visible";
        return true;

    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    }
}

function validateAddItmCodeInputs(obj) {
    if (validateEmptyField(document.getElementById("addImtCodeId").value, "Please Enter Item Code Id!") == false ||
            validateAlphaNumWithSpaceWithSlash(document.getElementById("addImtCodeId").value, "Accept only alpha or numeric characters or with space character!") == false) {
        document.getElementById("addImtCodeId").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("addImtCodePrice").value, "Please enter Item Code Price!") == false ||
            validateNumWithDot(document.getElementById("addImtCodePrice").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("addImtCodePrice").focus();
        return false;
    }
    return true;
}

function addSettImtCode() {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (validateAddItmCodeInputs()) {
        return true;
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    }
}
//************* end update ItemCode Details @Author:GAUR12SEP16*******************


//************* start code kitty Details @Author:GAUR13SEP16*******************
function showKittyDetails(custId, firmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("kittyFinDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("kittyFinDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omktpydtl.php?custId=" + custId + "&firmId=" + firmId, true);
    xmlhttp.send();
}
function showKittyUserDetails(custId, kittyId, firmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("kittyFinDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omktpydtl.php?custId=" + custId + "&kittyId=" + kittyId + "&firmId=" + firmId + "&panelName=" + "schemePayUp", true);
    xmlhttp.send();
}
function showCustUdhaarDetails(utinId, custId) {
    //
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    //xmlhttp.open("POST", "include/php/omuanwdt.php?invoiceNo=" + invoiceNo + "&utinId=" + utinId + "&custId=" + custId, true);
    xmlhttp.open("POST", "include/php/omcdccdd.php?custId=" + custId + "&custPanelOption=" + 'CustUdhaar', true);
    xmlhttp.send();
}

function showkittyCloseDetails() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("kittyFinDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("kittyFinDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omktcldt.php", true);
    xmlhttp.send();
}
//************* end code kitty Details @Author:GAUR13SEP16*******************

/********Strat code to add updateSize55BarCode @Author:GAUR14SEP16**************/
function updateSize55BarCode(omLayoutOptionTop, omLayFontSize1, fontSizeBarCode1, omLayFontSize2, fontSizeBarCode2, omLayFontSize3, fontSizeBarCode3, omLayFontSize4, fontSizeBarCode4, omLayFontSize5, fontSizeBarCode5,
        omLayFontSize6, fontSizeBarCode6, omLayFontSize7, fontSizeBarCode7, omLayFontSize8, fontSizeBarCode8, omLayFontSize9, fontSizeBarCode9, omLayFontSize10, fontSizeBarCode10, omLayFontSize11, fontSizeBarCode11,
        caption1, caption2, caption3, caption4, caption5, caption6, caption7, caption8, caption9, caption10, caption11, panel) {
    loadXMLDoc();

    //alert(fontSizeBarCode1);

    // alert(panel);


    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("barCodePrintPanelDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("bcMessDisplayDiv").innerHTML = "<span class='fs_14 ff_calibri reddish'>UPDATED</span>";
            window.setTimeout(closeBCMessDiv, 1500);
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var postStr = 'omLayoutOptionTop=' + omLayoutOptionTop + '&fontSize1=' + omLayFontSize1 + '&fontSizeValue1=' + fontSizeBarCode1 + '&fontSize2=' + omLayFontSize2 + '&fontSizeValue2=' + fontSizeBarCode2 + '&fontSize3=' + omLayFontSize3 + '&fontSizeValue3=' + fontSizeBarCode3
            + '&fontSize4=' + omLayFontSize4 + '&fontSizeValue4=' + fontSizeBarCode4 + '&fontSize5=' + omLayFontSize5 + '&fontSizeValue5=' + fontSizeBarCode5 + '&fontSize6=' + omLayFontSize6 + '&fontSizeValue6=' + fontSizeBarCode6 + '&fontSize7=' + omLayFontSize7 + '&fontSizeValue7=' + fontSizeBarCode7

            + '&fontSize8=' + omLayFontSize8 + '&fontSizeValue8=' + fontSizeBarCode8 + '&fontSize9=' + omLayFontSize9 + '&fontSizeValue9=' + fontSizeBarCode9 + '&fontSize10=' + omLayFontSize10 + '&fontSizeValue10=' + fontSizeBarCode10 + '&fontSize11=' + omLayFontSize11 + '&fontSizeValue11=' + fontSizeBarCode11 + '&captionvalue1=' + caption1 +
            '&captionvalue2=' + caption2 + '&captionvalue3=' + caption3 + '&captionvalue4=' + caption4 + '&captionvalue5=' + caption5 + '&captionvalue6=' + caption6
            + '&captionvalue7=' + caption7 + '&captionvalue8=' + caption8 + '&captionvalue9=' + caption9 + '&captionvalue10=' + caption10 + '&captionvalue11=' + caption11 + '&panel=' + panel;



    xmlhttp.open("POST", "include/php/ombcbcup.php?" + postStr, true);
    xmlhttp.send();
}
/********END code to add updateSize55BarCode @Author:GAUR14SEP16**************/
/****************************************START Add function for artifical amt @Author:GAUR16SEP16**********************************/

/**********Start code to change ID's @Author: PRIYANKA-03-06-17*********/
function custPriceCalculation(custPrice) {
    var documentRootPath = document.getElementById('documentRootPath').value;
    var ItmCode = document.getElementById('sttr_cust_itmcode').value;
    var ItmNum = document.getElementById('sttr_cust_itmnum').value;
    var ItmCalType = document.getElementById('sttr_cust_itmcalby').value;
//    document.getElementById('addItemCustPrice').value = ItmNum * ;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("sttr_cust_price").value = xmlhttp.responseText;

        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogijincl.php?ItmCode=" + ItmCode + "&ItmNum=" + ItmNum + "&ItmCalType=" + ItmCalType, true);
    xmlhttp.send();
}
/**********END code to change ID's @Author: PRIYANKA-03-06-17*********/

function custSellPriceCalculation() {
    var ItmCode = document.getElementById('addItemCustItmCode').value;
    var ItmNum = document.getElementById('addItemCustItmNum').value;
    var ItmCalType = document.getElementById('addItemCalType').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("slPrItemCharges").value = xmlhttp.responseText;
            calculateImitationSellPrice();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogijincl.php?ItmCode=" + ItmCode + "&ItmNum=" + ItmNum + "&ItmCalType=" + ItmCalType, true);
    xmlhttp.send();
}
/****************************************END Add function for artifical amt @Author:GAUR16SEP16**********************************/
//*********Start code to check condition for supplier deleivery panel add multiple crystal :Author:SANT19SEP16******
function calcNwOrDelivCryPrice() {
    var crystalEntered = 0;
    var totalCryVal = 0;
    var count = 1;
    var delId = 'del' + count;
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
            if (document.getElementById('orderpanel').value != 'SuppDelCryOrder') {
                document.getElementById('addItemCryFinVal').value = (parseFloat(totalCryVal)).toFixed(2);

                if (document.getElementById('addItemCryFinVal').value != '') {
                    calItemPrice();
                }
            }
        }
        if (document.getElementById(delId).value == 'Deleted') {
            document.getElementById('addItemCryFinVal').value = 0 + totalCryVal;
            calItemPrice();
        }
        crystalEntered++;
    }
    return false;
}
/*************Start  code to add new parameters orderpanel function @Author:SANT22SEP16***********/
/*************Start  code to add new parameters orderpanel function @Author:SANT29NOV16***********/
/*************Start  code to add new parameters orderpanel function @Author:SANT30NOV16***********/
function getNwOrCrystalFunc(crystalCount, div, commonPanel, sellPanel, orderPanel, preInvoiceNo, invoiceNo, suppId, usorId, firmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
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
    if (sellPanel == 'SellPurchase') {
        xmlhttp.open("POST", "include/php/ogadwscy.php?crystalCount=" + crystalCount + "&commonPanel=" + commonPanel + "&sellPanel=" + sellPanel, true);
    } else {
        xmlhttp.open("POST", "include/php/ognocydv.php?crystalCount=" + crystalCount + "&commonPanel=" + commonPanel + "&orderPanel=" + orderPanel + "&preInvoiceNo=" + preInvoiceNo + "&invoiceNo=" + invoiceNo + "&suppId=" + suppId + "&usorId=" + usorId + "&firmId=" + firmId, true);
    }
    xmlhttp.send();
}
/*************End code to add new parameters orderpanel function @Author:SANT30NOV16***********/
/*************End code to add new parameters orderpanel function @Author:SANT29NOV16***********/
/*************End code to add new parameters orderpanel function @Author:SANT22SEP16***********/
/*************End code to add new parameters orderpanel function @Author:SANT19SEP16***********/
/****************************************start code Add function for artifical CUSTMIZATION @Author:GAUR19SEP16**********************************/
/****************************************start code update function for artifical CUSTMIZATION @Author:GAUR20SEP16**********************************/
function openImitationFormDiv(divId, count, display, labelId, fieldName, fieldValue, fontSize, fontColor, fieldCheck, inputWidth, labelType, topMargin, leftMargin) {
    fieldValue = encodeURIComponent(fieldValue);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(divId).innerHTML = xmlhttp.responseText;
            document.getElementById('fontSize' + count).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omimtfmad.php?divId=" + divId + "&count=" + count + "&display=" + display + "&labelId=" + labelId + "&labelType=" + labelType + "&fieldName=" + fieldName
            + "&fieldValue=" + fieldValue + "&inputWidth=" + inputWidth + "&fontSize=" + fontSize + "&fontColor=" + fontColor + "&fieldCheck=" + fieldCheck + "&topMargin=" + topMargin + "&leftMargin=" + leftMargin, true);
    xmlhttp.send();
}

function labelsFormImitation(count, labelType, fieldName, fieldValue, fontSize, fontColor, divId, display) {
    if (display == 'NO' || divId == 'tncImtDiv' || divId == 'authImtSignLbDiv' || divId == 'invImtTitleDiv' || fieldName == 'formImtBorderCheck' || divId == 'footerImtLbDiv') {
        var check = document.getElementById("fontCheckId" + count).checked;
    }
    if (fieldName != 'firmImtLeftLogoCheck' && fieldName != 'firmImtRightLogoCheck' && fieldName != 'designImt' && divId != '' && fontSize == '') {
        alert("Please Enter Font Size !");
    } else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("slPrCurrentInvoice").innerHTML = xmlhttp.responseText;
                document.getElementById("cuMessDisplayDiv").innerHTML = "<span class='fs_14 ff_calibri reddish'>UPDATED</span>";
                window.setTimeout(closeMessDetails, 1500);
            }
            else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omimtfoad.php?labelType=" + labelType + "&count=" + count + "&fieldName=" + fieldName + "&fieldValue=" + fieldValue + "&fontSize=" + fontSize +
                "&fontColor=" + fontColor + "&fieldCheck=" + check + "&panel=CustomizedFormMainPanel", true);
        xmlhttp.send();
    }
    function closeMessDetails()
    {
        document.getElementById("cuMessDisplayDiv").innerHTML = "";
    }
}
/****************************************END code update function for artifical CUSTMIZATION @Author:GAUR20SEP16**********************************/
/****************************************END code Add function for artifical CUSTMIZATION @Author:GAUR19SEP16**********************************/

//START CODE to show record from daily dairy AUTHOR:GAUR24SEP16
function showImtStockDetddDiv(documentRootPath, itprId, panelName) {
    // alert(panelName);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamndv.php?isin_id=" + itprId + "&panelName=ImitationStock&updatePanelName=" + panelName, true);
    xmlhttp.send();
}
//END CODE to show record from daily dairy AUTHOR:GAUR24SEP16
/**********Start code TO ADD calculation function for imitation jwellery @Author: GAUR28SEP16*********/
/**********Start code TO update calculation function for imitation jwellery @Author: GAUR30SEP16*********/
/**********Start code TO update calculation function for imitation jwellery @Author: GAUR01OCT16*********/
/**********Start code TO change parameters for imitation jwellery @Author: SANT06JUN17*********/
function callImtItemPrice() {
    //alert('hello');
    var addprice = document.getElementById('sttr_cust_price').value;
    var labCharges = document.getElementById('sttr_lab_charges').value;
    var itemqty = document.getElementById('sttr_quantity').value;
    var labChargesType = document.getElementById('sttr_lab_charges_type').value;
//    var priceQtyBy = document.getElementById('addItemLbChargQtyBy').value;

    if (labCharges == '') {
        document.getElementById('sttr_valuation').value = (parseFloat(document.getElementById('sttr_cust_price').value)).toFixed(2);
    }
    else if (labChargesType == 'PP') {
        document.getElementById('sttr_valuation').value = ((parseFloat(document.getElementById('sttr_cust_price').value)) + (parseFloat(labCharges) * parseFloat(itemqty))).toFixed(2);
    }
    else {
        document.getElementById('sttr_valuation').value = ((parseFloat(document.getElementById('sttr_cust_price').value) + parseFloat(labCharges))).toFixed(2);

    }

    if (document.getElementById('sttr_valuation').value == 'NaN') {
        document.getElementById('sttr_valuation').value = 0;
    }
    if (document.getElementById('sttr_valuation').value == '' || document.getElementById('sttr_valuation').value == 'NaN') {
        document.getElementById('sttr_valuation').value = '';
    }

    if (document.getElementById('sttr_final_valuation').value == 'NaN') {
        document.getElementById('sttr_final_valuation').value = 0;
    }

    //document.getElementById('addItemValuation').value = ((parseFloat(document.getElementById('addItemPrice').value) + parseFloat(labCharges))).toFixed(2);
    //  alert(document.getElementById('addItemValuation').value );
    if (document.getElementById('sttr_tax').value != '') {
        var totTax = ((parseFloat(document.getElementById('sttr_valuation').value) * document.getElementById('sttr_tax').value) / 100).toFixed(2);
        document.getElementById('sttr_tot_tax').value = parseFloat(totTax);
        document.getElementById('sttr_final_valuation').value = (parseFloat(document.getElementById('sttr_valuation').value) + parseFloat(totTax)).toFixed(2);
    }
    else {
        document.getElementById('sttr_final_valuation').value = ((parseFloat(document.getElementById('sttr_valuation').value))).toFixed(2);
    }
    return false;
}
/**********End code TO change parameters for imitation jwellery @Author: SANT06JUN17*********/
/**********END code TO ADD calculation function for imitation jwellery @Author: GAUR01OCT16*********/
/**********END code TO ADD calculation function for imitation jwellery @Author: GAUR30SEP16*********/
/**********END code TO ADD calculation function for imitation jwellery @Author: GAUR28SEP16*********/
/**********add start code TO update imitation item @Author: GAUR28SEP16*********/

function showSuppImtStockDiv(documentRootPath, utinId, upPanelName, suppId) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPanelFormDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    if (upPanelName == 'CrystalStockPayUp' || upPanelName == 'UpdateCrystalStock') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogijssdv.php?utin_Id=" + utinId + "&panelName=CrystalStock" +
                "&updatePanelName=" + upPanelName + "&suppId=" + suppId, true);
        xmlhttp.send();
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogijssdv.php?utin_Id=" + utinId + "&panelName=ImitationStock" +
                "&updatePanelName=" + upPanelName + "&suppId=" + suppId, true);
        xmlhttp.send();
    }
}
/**********add end code TO update imitation item @Author: GAUR28SEP16*********/
//****************End code to change panel @Author:SANT28SEP16************/-->
//Start Code For Add Fine Purchase Invoice Calculation Function:Author:SANT04JUN17
function addInvoiceValue() {
    var suppPurLotEntered = 0;
    var totalFinVal = 0;
    var totalLabNOthCharges = 0;
    var wastg = 0;
    var suppPurItemEntered = 0;
    var totalVal = 0;
    var totalLabNOthCharges = 0;
    var totalGsWt = 0;
    var gsWtKG = 0;
    var gsWtGM = 0;
    var ntWtKG = 0;
    var ntWtGM = 0;
    var totalNtWt = 0;
    var finVal = 0;
    var fnWt = 0;
    var itemCryVal;
    var finVal;
    var itemTotCryVal;
    var totVal;
    var finTotVal;
    var labTotal = 0;
    var rateNWt;
    var totalRateNWt = 0;
    var finalTotalVal = 0;

    //alert('sttr_gs_weight == ' + document.getElementById('sttr_gs_weight').value);

    if (document.getElementById('sttr_gs_weight_type').value != document.getElementById('sttr_nt_weight_type').value) {
        document.getElementById('sttr_nt_weight_type').value = document.getElementById('sttr_gs_weight_type').value;
        document.getElementById('utransFinalWeightTyp').value = document.getElementById('sttr_gs_weight_type').value;
        document.getElementById('sttr_pkt_weight_type').value = document.getElementById('sttr_gs_weight_type').value;
    }

    var netweight = document.getElementById('sttr_nt_weight').value;
    var weight = document.getElementById('sttr_final_fine_weight').value;
    var metalType = document.getElementById('sttr_metal_type').value;
    var tounch = document.getElementById('sttr_purity').value;
    var metalRate = document.getElementById('sttr_metal_rate').value;
    var wtType = document.getElementById('sttr_nt_weight_type').value;
    var labCharges = document.getElementById('sttr_lab_charges').value;
    var labChargesType = document.getElementById('sttr_lab_charges_type').value;
    var wastg = document.getElementById('sttr_wastage').value;
    var qty = document.getElementById('sttr_quantity').value;

    if (document.getElementById('sttr_final_val_by').value == 'byGrossWt') {
        var weight = document.getElementById('sttr_gs_weight').value;
        var wtType = document.getElementById('sttr_gs_weight_type').value;
    } else {
        var weight = document.getElementById('sttr_nt_weight').value;
        var wtType = document.getElementById('sttr_nt_weight_type').value;
    }

    if (document.getElementById('sttr_other_charges_by').value == 'lbByNetWt') {
        weight = parseFloat(document.getElementById('sttr_nt_weight').value);
    } else if (document.getElementById('sttr_other_charges_by').value == 'lbByGrossWt') {
        weight = parseFloat(document.getElementById('sttr_gs_weight').value);
    } else if (document.getElementById('sttr_other_charges_by').value == 'lbByFineWt') {
        var weight = document.getElementById('sttr_final_fine_weight').value;
    }

    if (labCharges != '') {
        if (labChargesType == 'KG') {
            if (wtType == 'KG')
                totalLabNOthCharges = labCharges * weight;
            else if (wtType == 'GM')
                totalLabNOthCharges = (labCharges / 1000) * weight;
            else
                totalLabNOthCharges = (labCharges / (1000 * 1000)) * weight;
        }
        else if (labChargesType == 'GM') {
            if (wtType == 'KG')
                totalLabNOthCharges = labCharges * 1000 * weight;
            else if (wtType == 'GM')
                totalLabNOthCharges = labCharges * weight;
            else
                totalLabNOthCharges = (labCharges / 1000) * weight;
        }
        else if (labChargesType == 'MG') {
            if (wtType == 'KG')
                totalLabNOthCharges = labCharges * 1000 * 1000 * weight;
            else if (wtType == 'GM')
                totalLabNOthCharges = labCharges * 1000 * weight;
            else
                totalLabNOthCharges = labCharges * weight;
        } else if (labChargesType == 'PP') {
            totalLabNOthCharges = parseFloat(labCharges * qty);
        }
    }

    if (wastg == '')
        wastg = 0;

    weight = (((parseFloat(wastg) + parseFloat(tounch)) * netweight) / 100).toFixed(3);

    if (metalType == 'Gold') {
        if (wtType == 'KG') {
            document.getElementById('sttr_valuation').value = ((weight * metalRate) * document.getElementById('gmWtInKg').value).toFixed(2);
            document.getElementById('suppItemTotVal').value = ((weight * metalRate) * document.getElementById('gmWtInKg').value + totalLabNOthCharges).toFixed(2);
        } else if (wtType == 'GM') {
            document.getElementById('sttr_valuation').value = ((weight * metalRate) / document.getElementById('gmWtInGm').value).toFixed(2);
            document.getElementById('suppItemTotVal').value = ((weight * metalRate) / document.getElementById('gmWtInGm').value + totalLabNOthCharges).toFixed(2);
        } else if (wtType == 'MG') {
            document.getElementById('sttr_valuation').value = ((weight * metalRate) / document.getElementById('gmWtInMg').value).toFixed(2);
            document.getElementById('suppItemTotVal').value = ((weight * metalRate) / document.getElementById('gmWtInMg').value + totalLabNOthCharges).toFixed(2);
        }
    } else if (metalType == 'Silver') {
        if (wtType == 'KG') {
            document.getElementById('sttr_valuation').value = (weight * metalRate * document.getElementById('srGmWtInKg').value).toFixed(2);
            document.getElementById('suppItemTotVal').value = ((weight * metalRate * document.getElementById('srGmWtInKg').value) + totalLabNOthCharges).toFixed(2);
        } else if (wtType == 'GM') {
            document.getElementById('sttr_valuation').value = ((weight * metalRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
            document.getElementById('suppItemTotVal').value = ((weight * metalRate) / document.getElementById('srGmWtInGm').value + totalLabNOthCharges).toFixed(2);
        } else if (wtType == 'MG') {
            document.getElementById('sttr_valuation').value = ((weight * metalRate) / document.getElementById('srGmWtInMg').value).toFixed(2);
            document.getElementById('suppItemTotVal').value = ((weight * metalRate) / document.getElementById('srGmWtInMg').value + totalLabNOthCharges).toFixed(2);
        }
    } else {
        document.getElementById('sttr_valuation').value = 0;
        document.getElementById('suppItemTotVal').value = 0;
    }
    if ((document.getElementById('sttr_tax').value).trim() == '' || document.getElementById('sttr_tax').value == 'NaN') {
        document.getElementById('sttr_tax').value = 0;
    }
    var val = parseFloat(document.getElementById('suppItemTotVal').value).toFixed(2);
    var tax = document.getElementById('sttr_tax').value;
    if (val == '')
        val = 0;
    if (tax == '')
        tax = 0;
    document.getElementById('sttr_tot_tax').value = (parseFloat(val) * parseFloat(tax) / 100).toFixed(2);
    if (val == '')
        val = 0;
    if (document.getElementById('sttr_tot_tax').value == '')
        document.getElementById('sttr_tot_tax').value = 0;

    if ((document.getElementById('sttr_stone_valuation').value) == '' || document.getElementById('sttr_stone_valuation').value == 'NaN') {
        document.getElementById('sttr_stone_valuation').value = 0;
    }
    document.getElementById('sttr_final_fine_weight').value = parseFloat(weight);
    document.getElementById('sttr_final_valuation').value = (parseFloat(val) + parseFloat(document.getElementById('sttr_tot_tax').value) + parseFloat(document.getElementById('sttr_stone_valuation').value)).toFixed(2); // Crystal Valuation added @Author:SHRI06JAN17

    if ((document.getElementById('sttr_final_valuation').value).trim() == '' || document.getElementById('sttr_final_valuation').value == 'NaN') {
        document.getElementById('sttr_final_valuation').value = 0;
    }
    if ((document.getElementById('sttr_final_fine_weight').value).trim() == '' || document.getElementById('sttr_final_fine_weight').value == 'NaN') {
        document.getElementById('sttr_final_fine_weight').value = 0;
    }
    if ((document.getElementById('sttr_valuation').value).trim() == '' || document.getElementById('sttr_valuation').value == 'NaN') {
        document.getElementById('sttr_valuation').value = 0;
    }
    if ((document.getElementById('sttr_tot_tax').value).trim() == '' || document.getElementById('sttr_tot_tax').value == 'NaN') {
        document.getElementById('sttr_tot_tax').value = 0;
    }
    var gsWt = document.getElementById('sttr_gs_weight').value
    var gsWtType = document.getElementById('sttr_gs_weight_type').value;
    if (gsWt != '') {
        if (gsWtType != 'GM')
            gsWtKG += convert('GM', gsWtType, gsWt);
        else
            gsWtGM += parseFloat(gsWt);
        totalGsWt = parseFloat(gsWtKG) + parseFloat(gsWtGM);
    }
    var ntWt = document.getElementById('sttr_nt_weight').value;
    var ntWtType = document.getElementById('sttr_nt_weight_type').value;
    if (ntWt != '') {
        if (ntWtType != 'GM')
            ntWtKG = convert('GM', ntWtType, ntWt);
        else
            ntWtGM += parseFloat(ntWt);
        totalNtWt = parseFloat(ntWtKG) + parseFloat(ntWtGM);
    }
    var finalFineWeight = document.getElementById('sttr_final_fine_weight').value;
    if (finalFineWeight != '') {
        fnWt += parseFloat(finalFineWeight);
        document.getElementById('sttr_final_fine_weight').value = (fnWt).toFixed(3);
    }
    var labCharges = document.getElementById('sttr_lab_charges').value;
    var labChargesType = document.getElementById('sttr_lab_charges_type').value;
    if ((document.getElementById('sttr_tot_tax').value).trim() == '' || document.getElementById('sttr_tot_tax').value == 'NaN') {
        document.getElementById('sttr_tot_tax').value = 0;
    }
    if ((document.getElementById('sttr_tot_tax').value).trim() == '' || document.getElementById('sttr_tot_tax').value == 'NaN') {
        document.getElementById('sttr_tot_tax').value = 0;
    }
    document.getElementById('sttr_final_purity').value = (parseFloat(document.getElementById('sttr_purity').value) + parseFloat(document.getElementById('sttr_wastage').value)); //added @Author:SHRI24FEB17
    document.getElementById('sttr_total_lab_charges').value = parseFloat(totalLabNOthCharges).toFixed(2);
    finVal += parseFloat(document.getElementById('sttr_final_valuation').value);
    document.getElementById('sttr_final_valuation').value = (finVal).toFixed(2);
    if ((document.getElementById('sttr_final_purity').value).trim() == '' || document.getElementById('sttr_final_purity').value == 'NaN') {
        document.getElementById('sttr_final_purity').value = 0;
    }
    var cashRec = 0;
    if (cashRec == '')
        cashRec = 0;
    var totAmt = 0;
    if (totAmt == '')
        totAmt = 0;
    var totAmtRec = 0;
    if (totAmtRec == '')
        totAmtRec = 0;
    totalLabNOthCharges = 0;
    suppPurLotEntered++;
//    }
    return false;
}
//End Code For Add Fine Purchase Invoice Calculation Function:Author:SANT04JUN17
function showInvoiceItemDetailsDiv(documentRootPath, utrId, panelName, stockType, suppId) {

    //alert('panelName='+panelName);

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (panelName == 'RawDetUpPanel') {
                document.getElementById("rawMetalAddDiv").innerHTML = xmlhttp.responseText;
            } else if (panelName == 'addByItems') {
                document.getElementById("suppPurchaseDivs").innerHTML = xmlhttp.responseText;
            } else if (panelName == 'ApprovalRecList') {
                document.getElementById("suppHomePanelSubDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("AddInvoiceMainDiv").innerHTML = xmlhttp.responseText;
            }
        }
    };

    if (panelName == 'ApprovalRecList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogaprinv.php?utrId=" + utrId + "&panelName=ItemApprovalRecUp&stockType=" + stockType + "&suppId=" + suppId, true);
    } else if (panelName == 'ItemApprovalRecUp') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogaprinv.php?utrId=" + utrId + "&panelName=" + panelName + "&stockType=" + stockType + "&suppId=" + suppId, true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwadinv.php?utrId=" + utrId + "&panelName=" + panelName + "&stockType=" + stockType + "&suppId=" + suppId, true);
    }

    xmlhttp.send();
}
//
//
//
function deleteFineInvoiceItms(sttrId, panelName, suppId, preInvNo, postInvNo, payPanelName) {
    //
    if (panelName == 'ItemReturn') {
        confirm_box = confirm("Do you really want to Return this Item?");
    } else {
        confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");//add variables of alert msgs @AUTHOR: SANDY29JAN14 
    }

    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                //
//               alert( xmlhttp.responseText);
                if (payPanelName == 'ApprovalRecList') {

                    document.getElementById("suppHomePanelSubDiv").innerHTML = xmlhttp.responseText;
                    closeMessDiv('messDisplayDiv', 'DELETED');
                } else {
                    document.getElementById("AddInvoiceMainDiv").innerHTML = xmlhttp.responseText;
                    closeMessDiv('messDisplayDiv', 'DELETED');
                }
                //
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/ogwindel.php?sttrId=" + sttrId + "&panelName=" + panelName + "&suppId=" + suppId + "&preInvNo=" + preInvNo + "&postInvNo=" + postInvNo + "&payPanelName=" + payPanelName, true);
    }
    xmlhttp.send();
}
//
//
//
function deleteInvoiceListItem(utinId, panelName, suppId) {
    if (utinId > 0) {
        confirm_box = confirm("Previous balance gets changed from this item delete\n\nDo you really want to delete this Item?");
    } else {
        confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");
    }

    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";

                document.getElementById("AddInvoiceMainDiv").innerHTML = xmlhttp.responseText;
                closeMessDiv('messDisplayDiv', 'DELETED');

            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/ogwindel.php?utinId=" + utinId + "&panelName=" + panelName + "&suppId=" + suppId, true);
    }
    xmlhttp.send();
}
//
function deleteFineInvoiceListItem(utinId, panelName, suppId, preInvNo, postInvNo, type) {

    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?\n\nIt will delete main entry & related all tag entries");//add variables of alert msgs @AUTHOR: SANDY29JAN14
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";

                document.getElementById("suppHomePanelSubDiv").innerHTML = xmlhttp.responseText;
                closeMessDiv('messDisplayDiv', 'DELETED');

            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/ogwindel.php?utinId=" + utinId + "&panelName=" + panelName + "&suppId=" + suppId + "&preInvNo=" + preInvNo + "&postInvNo=" + postInvNo + "&type=" + type, true);
    }
    xmlhttp.send();
}
//
//
//****************End code to change panel @Author:SANT23NOV16************/-->
//****************End code to change panel @Author:SANT05OCT16************/-->
//****************End code to change panel @Author:SANT29SEP16************/-->
//****************End code to change panel @Author:SANT28SEP16************/-->
/**********ADD code TO ADD PRICE INTO QUANTITY @Author: GAUR30SEP16*********/
function getItemPriceQty(div, id, keyCodeInput) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(div).innerHTML = xmlhttp.responseText;
            if (keyCodeInput == 40 || keyCodeInput == 38) {
                document.getElementById('addItemQtyBy').focus();
                document.getElementById('addItemQtyBy').options[0].selected = true;
            }
        }
    };
    xmlhttp.open("POST", "include/php/ogijiqpc.php?div=" + div, true);
    xmlhttp.send();
}
/**********END code TO ADD PRICE INTO QUANTITY @Author: GAUR30SEP16*********/
/****************************************START add function for artifical amt @Author:GAUR30SEP16**********************************/
//*****START CODE FOR CRYSTAL PURCHASE INVOICE CALCULATION FUNCTION: AUTHOR:SANT16JUN17
function custSuppPriceCalculation() {
    var ItmCode = document.getElementById('sttr_cust_itmcode').value;
    var ItmNum = document.getElementById('sttr_cust_itmnum').value;
    var Qty = document.getElementById('sttr_quantity').value;
    var priceType = document.getElementById('addItemPriceQtyBy').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("sttr_cust_price").value = xmlhttp.responseText;
            var addprice = document.getElementById('sttr_cust_price').value;
            var labCharges = document.getElementById('sttr_lab_charges').value;
            var itemqty = document.getElementById('sttr_quantity').value;
            var labChargesType = document.getElementById('sttr_lab_charges_type').value;
            if (labCharges == '') {
                document.getElementById('sttr_valuation').value = (parseFloat(document.getElementById('sttr_cust_price').value)).toFixed(2);
            }
            else if (labChargesType == 'PP') {
                document.getElementById('sttr_valuation').value = ((parseFloat(document.getElementById('sttr_cust_price').value)) + (parseFloat(labCharges) * parseFloat(itemqty))).toFixed(2);
            }
            else {
                document.getElementById('sttr_valuation').value = ((parseFloat(document.getElementById('sttr_cust_price').value) + parseFloat(labCharges))).toFixed(2);
            }
            if (document.getElementById('sttr_valuation').value == 'NaN') {
                document.getElementById('sttr_valuation').value = 0;
            }
            if (document.getElementById('sttr_valuation').value == '' || document.getElementById('sttr_valuation').value == 'NaN') {
                document.getElementById('sttr_valuation').value = '';
            }
            if (document.getElementById('sttr_final_valuation').value == 'NaN') {
                document.getElementById('sttr_final_valuation').value = 0;
            }
            if (document.getElementById('sttr_tax').value != '') {
                var totTax = ((parseFloat(document.getElementById('sttr_valuation').value) * document.getElementById('sttr_tax').value) / 100).toFixed(2);
                document.getElementById('sttr_tot_tax').value = parseFloat(totTax);
                document.getElementById('sttr_final_valuation').value = (parseFloat(document.getElementById('sttr_valuation').value) + parseFloat(totTax)).toFixed(2);
            }
            else {
                document.getElementById('sttr_final_valuation').value = ((parseFloat(document.getElementById('sttr_valuation').value))).toFixed(2);
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogijincl.php?ItmCode=" + ItmCode + "&ItmNum=" + ItmNum + "&Qty=" + Qty + "&priceType=" + priceType + "&ItmCalType=M", true);
    xmlhttp.send();
}
//*****END CODE FOR CRYSTAL PURCHASE INVOICE CALCULATION FUNCTION: AUTHOR:SANT16JUN17
/****************************************END add function for artifical amt @Author:GAUR30SEP16**********************************/


/**************************************** add function @Author:GAUR30SEP16**********************************/
/**************************************** add function @Author:GAUR01OCT16**********************************/
function deleteSuppImtStockList(utinId, panelName, mainPanel, pageNo, sellPresent, preInvNo, invNo) {
    //alert(mainPanel);
    if (sellPresent > 0) {
        alert('To Delete,First Delete This Item From Customer Purchase Panel!');
        return false;
    } else {
        confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");//add variables of alert msgs @AUTHOR: SANDY29JAN14
        if (confirm_box == true)
        {
            var stockDeleteConfirm = '';

            var stockDelete = document.getElementById("stockDelete").value;

            if ((panelName == 'ItemDelete' || panelName == 'CrystalStockPayment' || panelName == 'ImitationStockPayment' || panelName == 'TagDelete') && stockDelete == 'Y') {
                confirm_box_for_stock = confirm(deleteItemAlertMess + "\n\nDo you want to delete this Item From Stock?");
                if (confirm_box_for_stock == true) {
                    stockDeleteConfirm = 'yes';
                } else {
                    stockDeleteConfirm = 'no';
                }
            }
            loadXMLDoc();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    if (panelName == 'TagDelete') {
                        document.getElementById("crystalPanelFormDiv").innerHTML = xmlhttp.responseText;
                    } else {
                        document.getElementById("stockPanelFormDiv").innerHTML = xmlhttp.responseText;
                    }
                    closeMessDiv('messDisplayDiv', 'DELETED');
                } else {
                    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

                }
            };
            if (panelName == 'TagDelete') {
                xmlhttp.open("GET", "ogijsiadel.php?utinId=" + utinId + "&stockDelete=" + stockDelete + "&stockDeleteConfirm=" + stockDeleteConfirm + "&panelName=" + panelName + "&mainPanel=" + mainPanel + "&pageNo=" + pageNo + "&preInvNo=" + preInvNo + "&invNo=" + invNo, true);
            } else {
                xmlhttp.open("GET", "include/php/ogijsiadel.php?utinId=" + utinId + "&stockDelete=" + stockDelete + "&stockDeleteConfirm=" + stockDeleteConfirm + "&panelName=" + panelName + "&mainPanel=" + mainPanel + "&pageNo=" + pageNo + "&preInvNo=" + preInvNo + "&invNo=" + invNo, true);
            }
            xmlhttp.send();
        }
    }
}
/**************************************** add function @Author:GAUR01OCT16**********************************/
/**************************************** add function @Author:GAUR30SEP16**********************************/
/****************************************Start code to add function @Author:SANT04OCT16**********************************/
function getPaymentDivForAddInvoice(documentRootPath, preInvoiceNo, postInvoiceNo, panelName, navPanel, suppId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (navPanel == 'InvoicePayment') {
                document.getElementById("AddInvoiceMainDiv").innerHTML = xmlhttp.responseText;
            } else if (navPanel == 'NewOrder') {
                document.getElementById("newOrderDivs").innerHTML = xmlhttp.responseText;
            } else if (navPanel == 'RawStock') {
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            }
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogpayment.php?paymentPanelName=" + navPanel + "&preInvNo=" + preInvoiceNo + "&postInvNo=" + postInvoiceNo + "&suppId=" + suppId, true);
    xmlhttp.send();
}
/****************************************End code to add function @Author:SANT04OCT16**********************************/
/**********Start code to add function @Author: GAUR04OCT16*********/
function getAItemValidatePreIdDiv(preId, div, id, keyCodeInput, mainPanel) {
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(div).innerHTML = xmlhttp.responseText;
        }
    };
    var itemPreId = preId;
    xmlhttp.open("POST", "include/php/ogijvidsl.php?&itemPreId=" + itemPreId + "&div=" + div + "&id=" + id + "&mainPanel=" + mainPanel, true);
    xmlhttp.send();
}
/**********End code to add function @Author: GAUR04OCT16*********/
/**********Start code to Validation of Item @Author: GAUR07OCT16*********/
function addSuppImtAItem() {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    document.getElementById("addItemSubButtDiv").style.visibility = "hidden";
    var itemDateDay = document.getElementById("addItemDOBDay").value;
    var itemDateMMM = document.getElementById("addItemDOBMonth").value;
    var itemDateYY = document.getElementById("addItemDOBYear").value;
    var itemDateStr = document.getElementById("addItemDOBMonth").value + ' ' + document.getElementById("addItemDOBDay").value + ', ' + document.getElementById("addItemDOBYear").value;
    var itemDate = new Date(itemDateStr); // stock Date
    var todayDate = new Date(); // Today Date

    var milliStockDate = itemDate.getTime();
    var milliTodayDate = todayDate.getTime();
    var datesDiff = milliTodayDate - milliStockDate;

    if (datesDiff < 0) {
        alert('Please Select the correct Date!');
        document.getElementById("addItemDOBDay").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("addItemSubButtDiv").style.visibility = "visible";
        return false;
    }
    else {
        if (itemDateMMM == 'FEB' || itemDateMMM == 'APR' || itemDateMMM == 'JUN' || itemDateMMM == 'SEP' || itemDateMMM == 'NOV') {
            if (itemDateMMM == 'FEB' && itemDateDay > 29 && itemDateYY % 4 == 0) {
                alert('Please select correct Date, Month ' + itemDateMMM + ' for this selected year has only max 29 days.');
                document.getElementById("addItemDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addItemSubButtDiv").style.visibility = "visible";
                return false;
            }
            if (itemDateMMM == 'FEB' && itemDateDay > 28 && itemDateYY % 4 != 0) {
                alert('Please select correct Date, Month ' + itemDateMMM + ' for this selected year has only max 28 days.');
                document.getElementById("addItemDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addItemSubButtDiv").style.visibility = "visible";
                return false;
            }
            if (itemDateDay > 30) {
                alert('Please select correct Date, Month ' + itemDateMMM + ' has only max 30 days.');
                document.getElementById("addItemDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addItemSubButtDiv").style.visibility = "visible";
                return false;
            }
        }

        // alert(' payButClickId == ' + document.getElementById('payButClickId').value);

        if (document.getElementById('payButClickId').value == 'true') {
            var prefix = document.getElementById("prefix").value;
            var payPanelName = document.getElementById("upPanel").value;
            return true;
        } else {

            // alert(' payButClickId ++ ' + document.getElementById('payButClickId').value);

            if (validateAddSuppImtAItemInputs()) {
                if (document.getElementById('mainPanel').value == 'StockPanel') {
                    if (document.getElementById("panelName").value != 'ImitationUpdateStock' && document.getElementById("panelName").value != 'ImitationStockPayUp')
                        callAutoBcPrint();
                    else
                        return true;
                } else {
                    return true;
                }
            }
        }
    }
    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    document.getElementById("addItemSubButtDiv").style.visibility = "visible";
    return false;
}
function validateAddSuppImtAItemInputs() {

    // alert(' sttr_quantity == ' + document.getElementById('sttr_quantity').value);

    if (validateSelectField(document.getElementById("addItemDOBDay").value, "Please select Day!") == false) {
        document.getElementById("addItemDOBDay").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("addItemDOBMonth").value, "Please select Month!") == false) {
        document.getElementById("addItemDOBMonth").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("addItemDOBYear").value, "Please select Year!") == false) {
        document.getElementById("addItemDOBYear").focus();
        return false;
    }

    else if (validateSelectField(document.getElementById("firmId").value, "Please select Firm!") == false) {
        document.getElementById("firmId").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("sttr_account_id").value, "Please select Account Name!") == false) {
        document.getElementById("sttr_account_id").focus();
        return false;
    }
    if (document.getElementById("panelName").value == 'ImitationStock' || document.getElementById("panelName").value == 'UpdateImitationStock') {

        if (validateEmptyField(document.getElementById("sttr_item_category").value, "Please enter Item Category!") == false) {
            document.getElementById("sttr_item_category").focus();
            return false;
        }
        else if (validateEmptyField(document.getElementById("sttr_item_name").value, "Please enter Item Description!") == false) {
            document.getElementById("sttr_item_name").focus();
            return false;
        }
        else if (validateEmptyField(document.getElementById("sttr_quantity").value, "Please enter Item Pieces!") == false ||
                validateNum(document.getElementById("sttr_quantity").value, "Accept only numeric characters without space!") == false) {
            document.getElementById("sttr_quantity").focus();
            return false;
        } else if (document.getElementById("sttr_quantity").value == '0') {
            alert('Please enter Item Pieces!')
            document.getElementById("sttr_quantity").focus();
            return false;
        } else if (validateEmptyField(document.getElementById("sttr_price").value, "Please enter Price!") == false ||
                validateNumWithDot(document.getElementById("sttr_price").value, "Accept only numeric characters without space!") == false) {
            document.getElementById("sttr_price").focus();
            return false;
        } else if (document.getElementById("sttr_price").value == '0') {
            alert('Please enter Price!')
            document.getElementById("sttr_price").focus();
            return false;
        } else if (validateEmptyField(document.getElementById("sttr_cust_itmcode").value, "Please enter Item Code!") == false ||
                validateNumWithDot(document.getElementById("sttr_cust_itmcode").value, "Accept only numeric characters without space!") == false) {
            document.getElementById("sttr_cust_itmcode").focus();
            return false;
        }
        else if (validateEmptyField(document.getElementById("sttr_cust_itmnum").value, "Please enter Item Num!") == false ||
                validateNumWithDot(document.getElementById("sttr_cust_itmnum").value, "Accept only numeric characters without space!") == false) {
            document.getElementById("sttr_cust_itmnum").focus();
            return false;
        }
        else if (validateEmptyField(document.getElementById("sttr_price").value, "Please enter Price!") == false ||
                validateNumWithDot(document.getElementById("sttr_price").value, "Accept only numeric characters without space!") == false) {
            document.getElementById("sttr_price").focus();
            return false;
        }
        else if (validateEmptyField(document.getElementById("sttr_valuation").value, "Please enter Item Final Valuation!") == false ||
                validateNumWithDot(document.getElementById("sttr_valuation").value, "Accept only numeric characters without space!") == false) {
            document.getElementById("sttr_valuation").focus();
            return false;
        }
        else if (validateEmptyField(document.getElementById("sttr_final_valuation").value, "Please enter Item Final Valuation!") == false ||
                validateNumWithDot(document.getElementById("sttr_final_valuation").value, "Accept only numeric characters without space!") == false) {
            document.getElementById("sttr_final_valuation").focus();
            return false;
        }
        else
            return true;
    } else {
        if (validateEmptyField(document.getElementById("sttr_item_category").value, "Please enter Crystal Id!") == false) {
            document.getElementById("sttr_item_category").focus();
            return false;
        }
        else if (validateEmptyField(document.getElementById("sttr_item_name").value, "Please enter Crystal Name!") == false) {
            document.getElementById("sttr_item_name").focus();
            return false;
        }

        else if (validateEmptyField(document.getElementById("sttr_gs_weight").value, "Please enter Gross Weight!") == false ||
                validateNumWithDot(document.getElementById("sttr_gs_weight").value, "Accept only numeric characters without space!") == false) {
            document.getElementById("sttr_gs_weight").focus();
            return false;
        }
        else if (validateEmptyField(document.getElementById("sttr_sell_rate").value, "Please Enter Sell Rate!") == false ||
                validateNumWithDot(document.getElementById("sttr_sell_rate").value, "Accept only numeric characters without space!") == false) {
            document.getElementById("sttr_sell_rate").focus();
            return false;
        }
        else if (validateEmptyField(document.getElementById("sttr_purchase_rate").value, "Please Enter Purchase Rate!") == false ||
                validateNumWithDot(document.getElementById("sttr_purchase_rate").value, "Accept only numeric characters without space!") == false) {
            document.getElementById("sttr_purchase_rate").focus();
            return false;
        }
        else
            return true;
    }
}
/**********END code to Validation of Item @Author: GAUR07OCT16*********/
/***************Start cdoe to add panel @Author: GAUR14OCT16*************/
function showImtPurStockPanel(suppId, panel) {
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
    if (panel == 'ImitationPurchaseList' || panel == 'CrystalPurchaseList')
        xmlhttp.open("POST", "include/php/ogijpltd.php?panel=" + panel + "&custId=" + suppId, true);
    else
        xmlhttp.open("POST", "include/php/ogijssdv.php?panel=" + panel + "&custId=" + suppId, true);
    xmlhttp.send();
}
/***************End cdoe to add panel @Author: GAUR14OCT16*************/

/**********add start code TO update imitation item @Author: GAUR14OCT16*********/
function showSuppListImtStockDiv(documentRootPath, utinId, upPanelName, suppId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;
        }
    };

    if (upPanelName == 'UpdateCrystalStock') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogijssdv.php?utin_Id=" + utinId + "&panelName=CrystalStock" +
                "&updatePanelName=" + upPanelName + "&suppId=" + suppId, true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogijssdv.php?utin_Id=" + utinId + "&panelName=ImitationStock" +
                "&updatePanelName=" + upPanelName + "&suppId=" + suppId, true);
    }

    xmlhttp.send();
}
/**********add end code TO update imitation item @Author: GAUR14OCT16*********/

/**************************************** add function @Author:GAUR14OCT16**********************************/
function deleteSuppImtPurList(utinId, panelName, mainPanel, pageNo, sellPresent, preInvNo, invNo) {
    //alert('Hello');
    if (sellPresent > 0) {
        alert('To Delete,First Delete This Item From Customer Purchase Panel!');
        return false;
    } else {
        confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");//add variables of alert msgs @AUTHOR: SANDY29JAN14
        if (confirm_box == true)
        {

            var stockDeleteConfirm = '';

            var stockDelete = document.getElementById("stockDelete").value;

            if (panelName == 'ItemDelete' && stockDelete == 'Y') {
                confirm_box_for_stock = confirm(deleteItemAlertMess + "\n\nDo you want to delete this Item From Stock?");
                if (confirm_box_for_stock == true) {
                    stockDeleteConfirm = 'yes';
                } else {
                    stockDeleteConfirm = 'no';
                }
            }
            //
            loadXMLDoc();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("stockPanelPurchaseList").innerHTML = xmlhttp.responseText;
                    closeMessDiv('messDisplayDiv', 'DELETED');
                } else {
                    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
                }
            };
            xmlhttp.open("GET", "include/php/ogijsiadel.php?utinId=" + utinId + "&stockDelete=" + stockDelete + "&panelName=" + panelName + "&stockDeleteConfirm=" + stockDeleteConfirm + "&mainPanel=" + mainPanel + "&pageNo=" + pageNo + "&preInvNo=" + preInvNo + "&invNo=" + invNo, true);
            xmlhttp.send();
        }
    }
}
/**************************************** add function @Author:GAUR14OCT16**********************************/
/****************************************start add function @Author:GAUR26OCT16**********************************/
function getSuppForAddMetal(suppId, suppPanelName, mainPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogrwmomf.php?&suppPanelName=" + suppPanelName + "&userId=" + suppId + "&metType=BUY&mainPanel=" + mainPanel, true);
    xmlhttp.send();
}


function changeType(userId, suppPanelName, metType, mainPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
//    if (suppPanelName == 'addMetalByCash') {
    xmlhttp.open("POST", "include/php/ogrwmomf.php?suppPanelName=" + suppPanelName + "&userId=" + userId + "&metType=" + metType + "&mainPanel=" + mainPanel, true);
//    } else {
//        xmlhttp.open("POST", "include/php/ogrwmomf.php?suppPanelName=" + suppPanelName + "&userId=" + userId + "&metType=" + metType + "&mainPanel=" + mainPanel, true);
//    }
    xmlhttp.send();
}

function calculateFineWt() {
    var goldWeight = 0;
    var payTotalWeight1 = document.getElementById('PayMetal1RecWt').value;
    var payTotalWeightType1 = document.getElementById('PayMetal1RecWtType').value;
    var payMetalTunch1 = document.getElementById('PayMetal1Tunch').value;

    var metalWeight = (payTotalWeight1 * payMetalTunch1) / 100;

    document.getElementById('PayMetal1FnWt').value = parseFloat(metalWeight).toFixed(3);
}

/****************************************end add function @Author:GAUR26OCT16**********************************/
/***********Start code to add function for InvoiceUpdate @Author:SANT26OCT16*********/
/***********Start code to add function for InvoiceUpdate @Author:SANT27OCT16*********/
function showSuppAddInvoicePurchaseDetails(newPreInvoiceNo, newInvoiceNo, navPanel, suppId, payId, rateCutValue, mainPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("suppHomePanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogwadinv.php?utinId=" + payId + "&panelName=UpdateItem&paymentPanelName=" + navPanel + 
            "&preInvoiceNo=" + newPreInvoiceNo + "&PreInvoiceNo=" + newPreInvoiceNo +
            "&postInvoiceNo=" + newInvoiceNo + "&invoiceNo=" + newInvoiceNo + 
            "&suppId=" + suppId + "&suppPayId=" + payId + "&mainPanel=" + mainPanel, true);
    xmlhttp.send();
}
/***********End code to add function for InvoiceUpdate @Author:SANT27OCT16*********/
/***********End code to add function for InvoiceUpdate @Author:SANT26OCT16*********/
/***********start code to update function for calculateRawMetPurchsePrice @Author: GAUR04NOV16*********/
/***********start code to add function for calculateRawMetPurchsePrice @Author: GAUR28OCT16*********/
function calculateRawMetPurchsePrice() {
//    alert('hi');
    var totalLabNOthCharges = 0;
    var labCharges = document.getElementById('slItemLbrRate').value;
    var labChargesType = document.getElementById('slItemLbrRateType').value;
    var wastg = document.getElementById('slItemWstg').value;
    var qty = document.getElementById('slItemPieces').value;
    var netWt = parseFloat(document.getElementById('slItemNetWeight').value);
    var netWtTp = document.getElementById('slItemNetWeightType').value;
//    var metalRate = parseFloat(document.getElementById('slItemMetalRate').value);
//    var metalRate = parseFloat(document.getElementById('metalRateCalculation').value);

    var metalType = document.getElementById('slItemMetal').value;


    if (document.getElementById('slItemTunch').value != 'NotSelected') {
        document.getElementById('slItemFineWeight').value = parseFloat((parseFloat(document.getElementById('slItemTunch').value) * netWt) / 100).toFixed(3);
    }
    else {
        document.getElementById('slItemTunch').value = 0.0;
        document.getElementById('slItemFineWeight').value = 0.0;
    }

    var fineWt = parseFloat(document.getElementById('slItemFineWeight').value);

    if (labCharges != '') {
        if (labChargesType == 'KG') {
            if (netWtTp == 'KG')
                totalLabNOthCharges = labCharges * netWt;
            else if (netWtTp == 'GM')
                totalLabNOthCharges = (labCharges / 1000) * netWt;
            else
                totalLabNOthCharges = (labCharges / (1000 * 1000)) * netWt;
        }
        else if (labChargesType == 'GM') {
            if (netWtTp == 'KG')
                totalLabNOthCharges = labCharges * 1000 * netWt;
            else if (netWtTp == 'GM')
                totalLabNOthCharges = labCharges * netWt;
            else
                totalLabNOthCharges = (labCharges / 1000) * netWt;
        }
        else if (labChargesType == 'MG') {
            if (netWtTp == 'KG')
                totalLabNOthCharges = labCharges * 1000 * 1000 * netWt;
            else if (netWtTp == 'GM')
                totalLabNOthCharges = labCharges * 1000 * netWt;
            else
                totalLabNOthCharges = labCharges * netWt;
        } else if (labChargesType == 'PP') {
            totalLabNOthCharges = parseFloat(labCharges * qty);
        }
    }
    document.getElementById('slItemNetWt').value = parseFloat(totalLabNOthCharges).toFixed(2);
    var tounch = document.getElementById('slItemTunch').value;

    if (wastg == '' || wastg == null)
        wastg = 0;

    if (tounch != 'NotSelected')
        document.getElementById('slItemFFineWeight').value = parseFloat(((parseFloat(wastg) + parseFloat(tounch)) * netWt) / 100).toFixed(3);

    return false;
}
/***********start code to add function for calculateRawMetPurchsePrice @Author: GAUR28OCT16*********/
/***********END code to update function for calculateRawMetPurchsePrice @Author: GAUR04NOV16*********/
/*********Start code to add delete invoice det @Author:SANT15NOV16 *************************/
function deleteInvoiceItem(custId, slPrId, panelName, mainPanel, panel, slPrInfo) {
    if (panelName == 'InvoicePayUp') {
        confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");
    }
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (panelName == 'InvoicePayUp') {
                    document.getElementById("suppHomePanelSubDiv").innerHTML = xmlhttp.responseText;
                    window.setTimeout(sellFunctionToCloseDiv, 1000);
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/ogwindel.php?custId=" + custId + "&slPrId=" + slPrId + "&panelName=" + panelName + "&mainPanel=" + mainPanel + "&slPrInfo=" + slPrInfo + "&panel=" + panel, true);
        xmlhttp.send();
    }
}
/*********End code to add delete invoice det @Author:SANT15NOV16 *************************/
/***********Start to add functions for packet weights and labour charges @Author: ATHU8NOV16********/
/***********Start to add functions for packet weights and labour charges changed count @Author: ATHU5jun17********/
function totalPacketsCal(count)
{

    var totalWeight = 0;
    for (var i = 1; i <= 5; i++)
    {
        if (document.getElementById('pktQty' + i).value == '' || document.getElementById('pktQty' + i).value == 'NaN')
        {
            document.getElementById('pktQty' + i).value = 0;
        }

        if (document.getElementById('packetWeight' + i).value == '' || document.getElementById('pktQty' + i).value == 'NaN')
        {
            document.getElementById('packetWeight' + i).value = 0;
        }
        var weight = document.getElementById('packetWeight' + i).value;
        totalWeight = parseFloat(totalWeight) + parseFloat(weight);
    }

    document.getElementById("totalWt").value = parseFloat(totalWeight).toFixed(3);
    document.getElementById("sttr_pkt_weight").value = parseFloat(totalWeight).toFixed(3);///changed by athu@5JUN17
}

function total(count)
{
    for (var i = 1; i <= count; i++)
    {

        if (document.getElementById('qty' + i).value == '' || document.getElementById('qty' + i).value == 'NaN')
        {

            document.getElementById('qty' + i).value = 0;

        }
        if (document.getElementById('lbchrg' + i).value == '' || document.getElementById('lbchrg' + i).value == 'NaN')
        {

            document.getElementById('lbchrg' + i).value = 0;
        }
        if (document.getElementById('total' + i).value == '' || document.getElementById('total' + i).value == 'NaN')
        {

            document.getElementById('total' + i).value = 0;
        }


        var totalvalue = parseFloat(document.getElementById('qty' + i).value) * parseFloat(document.getElementById('lbchrg' + i).value);
        document.getElementById('total' + i).value = parseFloat(totalvalue).toFixed(3);

    }
    var total = 0;
    for (var i = 1; i <= count; i++)
    {

        var s = document.getElementById('total' + i).value;

        total = parseFloat(total) + parseFloat(s);

    }

    if (total != 'NaN' || total != '') {
        document.getElementById("totalcharge").value = parseFloat(total).toFixed(3);
        document.getElementById("sttr_total_lab_charges").value = parseFloat(total).toFixed(3);////changed by @auth:athu5JUN17
    }
}
//START CODE TO CHANGE IDS @AUTH:ATHU5JUN17
function disableField()
{
    if (document.getElementById('sttr_lab_charges').value != '')
    {
        var a = document.getElementById('sttr_lab_charges').value;
        document.getElementById("sttr_total_lab_charges").value = a;
        document.getElementById("sttr_total_lab_charges").disabled = true;
    }
    else
    {
        document.getElementById("sttr_lab_charges").disabled = false;
    }
}

function disableField1()
{
    var a = document.getElementById('sttr_total_lab_charges').value;

    if (document.getElementById('sttr_total_lab_charges').value != '')
    {
        document.getElementById("sttr_lab_charges").disabled = true;
    }
    else
    {
        document.getElementById("sttr_lab_charges").disabled = false;
    }
}
////eND CODE @AUTH:ATHU5JUN17
/***********End to add functions for packet weights and labour charges @Author: ATHU8NOV16********/
/***********START code to update function for calculateRawMetPurchsePrice @Author: GAUR16NOV16*********/
function addSuppRawStockExistingItemDiv(suppId, newPreInvoiceNo, newInvoiceNo, panelName, mainPanel, metType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogrwexad.php?suppId=" + suppId + "&newPreInvoiceNo=" + newPreInvoiceNo + "&newInvoiceNo=" + newInvoiceNo + "&panelName=" + panelName + "&mainPanel=" + mainPanel + "&metType=" + metType, true);
    xmlhttp.send();
}
/***********END code to update function for calculateRawMetPurchsePrice @Author: GAUR16NOV16*********/
/***********Start code to add functions for validate fine Invoice @Author: SANT22NOV16********/
/***********Start code to add functions for validate fine Invoice @Author: SANT30NOV16********/
/************Start code to remove if condition for payButClickId for validation @Author:SHRI07JAN17*************/
function addSuppInvoiceItem() {
//    alert('hi');
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("addItemSubButtDiv").style.visibility = "hidden";
    var itemDateDay = document.getElementById("addItemDOBDay").value;
    var itemDateMMM = document.getElementById("addItemDOBMonth").value;
    var itemDateYY = document.getElementById("addItemDOBYear").value;
    var itemDateStr = document.getElementById("addItemDOBMonth").value + ' ' + document.getElementById("addItemDOBDay").value + ', ' + document.getElementById("addItemDOBYear").value;
    var itemDate = new Date(itemDateStr); // stock Date
    var todayDate = new Date(); // Today Date

    var milliStockDate = itemDate.getTime();
    var milliTodayDate = todayDate.getTime();
    var datesDiff = milliTodayDate - milliStockDate;

    if (datesDiff < 0) {
        alert('Please Select the correct Date!');
        document.getElementById("addItemDOBDay").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("addItemSubButtDiv").style.visibility = "visible";
        return false;
    }
    else {
        if (itemDateMMM == 'FEB' || itemDateMMM == 'APR' || itemDateMMM == 'JUN' || itemDateMMM == 'SEP' || itemDateMMM == 'NOV') {
            if (itemDateMMM == 'FEB' && itemDateDay > 29 && itemDateYY % 4 == 0) {
                alert('Please select correct Date, Month ' + itemDateMMM + ' for this selected year has only max 29 days.');
                document.getElementById("addItemDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addItemSubButtDiv").style.visibility = "visible";
                return false;
            }
            if (itemDateMMM == 'FEB' && itemDateDay > 28 && itemDateYY % 4 != 0) {
                alert('Please select correct Date, Month ' + itemDateMMM + ' for this selected year has only max 28 days.');
                document.getElementById("addItemDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addItemSubButtDiv").style.visibility = "visible";
                return false;
            }
            if (itemDateDay > 30) {
                alert('Please select correct Date, Month ' + itemDateMMM + ' has only max 30 days.');
                document.getElementById("addItemDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addItemSubButtDiv").style.visibility = "visible";
                return false;
            }
        }

        if (validateAddSuppInvoiceItemInputs()) {
            if (document.getElementById('mainPanel').value == 'StockPanel') {
                if (document.getElementById("panelName").value != 'ImitationUpdateStock' && document.getElementById("panelName").value != 'ImitationStockPayUp')
                    callAutoBcPrint();
                else
                    return true;
            } else {
                return true;
            }
        }

    }
    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    document.getElementById("addItemSubButtDiv").style.visibility = "visible";
    return false;
}
/************End code to remove if condition for payButClickId for validation @Author:SHRI07JAN17*************/
function validateAddSuppInvoiceItemInputs() {

    if (validateSelectField(document.getElementById("addItemDOBDay").value, "Please select Day!") == false) {
        document.getElementById("addItemDOBDay").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("addItemDOBMonth").value, "Please select Month!") == false) {
        document.getElementById("addItemDOBMonth").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("addItemDOBYear").value, "Please select Year!") == false) {
        document.getElementById("addItemDOBYear").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("firmId").value, "Please select Firm!") == false) {
        document.getElementById("firmId").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("sttr_account_id").value, "Please select Account Name!") == false) {
        document.getElementById("sttr_account_id").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("sttr_gs_weight").value, "Please enter Gross Weight!") == false ||
            validateNumWithDot(document.getElementById("sttr_gs_weight").value, "Accept only numeric characters without space!") == false) {
        document.getElementById("sttr_gs_weight").focus();
        return false;
    }
    else if ((validateSelectField(document.getElementById("sttr_purity").value, "Please Enter Purity!") == false) ||
            (validateEmptyField(document.getElementById("sttr_purity").value, "Please Enter Purity!") == false))
    {
        document.getElementById("sttr_purity").focus();
        return false;
    }
    else if ((document.getElementById("sttr_metal_type").value == 'Gold' || document.getElementById("sttr_metal_type").value == 'Silver') && validateSelectField(document.getElementById("sttr_purity").value, "Please Enter Purity!") == false) {
        document.getElementById("sttr_purity").focus();
        return false;
    }
    else if (document.getElementById("sttr_purity").value == '0') {
        alert("Please Enter Purity!");
        document.getElementById("sttr_purity").focus();
        return false;
    }
    else
        return true;
}
/***********End code to add functions for validate fine Invoice @Author: SANT30NOV16********/

// **********************************************************************************************************************
// START CODE TO CHANGE CODE FOR Add Crystal Panel - According to Pre Id, Item Id not Changing @PRIYANKA-13JUNE18
// **********************************************************************************************************************
function getCRtemPreIdDiv(preId, div, id, keyCodeInput, mainPanel, stockType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var str = xmlhttp.responseText;
            if (str == '') {
                document.getElementById(div).innerHTML = xmlhttp.responseText;
                document.getElementById('sttr_item_id').value = '1';
                document.getElementById('changedItemId').value = '1';
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
    xmlhttp.open("POST", "include/php/ogcraidsl.php?itemPreId=" + itemPreId + "&div=" + div + "&id=" + id + "&mainPanel=" + mainPanel + "&stockType=" + stockType, true);
    xmlhttp.send();
}
//
function getCrystalPreId(preId, panelName, div) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(div).innerHTML = xmlhttp.responseText;
        }
    };
    xmlhttp.open("POST", "include/php/ogcraddv.php?preId=" + preId + "&stockPanel=" + panelName, true);
    xmlhttp.send();
}
// **********************************************************************************************************************
// END CODE TO CHANGE CODE FOR Add Crystal Panel - According to Pre Id, Item Id not Changing @PRIYANKA-13JUNE18
// **********************************************************************************************************************

/**********START CODE FOR SELECT DROPDOWN PREVIUSLY ADDED:AUTHOR:SANT05JUL17********/
function getCryItemDetails(itemPreId, stockType) {
//    alert('stockType=' + stockType);
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            var str = xmlhttp.responseText;
//            alert(str);
            var strArray = new Array();
            strArray = str.split("*");
            document.getElementById('sttr_item_category').value = strArray[0];
            document.getElementById('sttr_item_name').value = strArray[1];
            document.getElementById('sttr_clarity').value = strArray[2];
            document.getElementById('sttr_color').value = strArray[3];
            document.getElementById('sttr_other_info').value = strArray[4];
//            document.getElementById('sttr_quantity').value = '';
            document.getElementById('sttr_gs_weight').value = strArray[5];
            document.getElementById('sttr_gs_weight_type').value = strArray[6];
            document.getElementById('sttr_purchase_rate').value = strArray[7];
            document.getElementById('sttr_purchase_rate_type').value = strArray[8];
            document.getElementById('sttr_valuation').value = strArray[9];
            document.getElementById('sttr_tax').value = strArray[10];
            document.getElementById('sttr_tot_tax').value = strArray[11];
            document.getElementById('sttr_final_valuation').value = strArray[12];
            document.getElementById('sttr_quantity').value = strArray[13];
            document.getElementById('sttr_shape').value = strArray[14];
            document.getElementById('sttr_size').value = strArray[15];
            document.getElementById('sttr_color').value = strArray[16];
            document.getElementById('sttr_clarity').value = strArray[17];
//            calcCryTotalTaxPrice();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/ogcrstdt.php?itemPreId=" + itemPreId + "&stockType=" + stockType, true);
    xmlhttp.send();
}
/**********END CODE FOR SELECT DROPDOWN PREVIUSLY ADDED:AUTHOR:SANT05JUL17********/

/***********START Code To add itemsaleSuppRateCut @Author: GAUR14DEC16***************/
function itemsaleSuppRateCut(rateCutId, goldPrevWeight, goldPrevWeightType, silverPrevWeight, silverPrevWeightType, goldFinalWeight, goldFinalWeightType, silverFinalWeight, silverFinalWeightType, goldRate, silverRate, payPanelName, userId, preInvNo, invNo, payOpt, totalFinalBalance, totBalance, gdffnWtCrDrType, slffnWtCrDrType, userCashBalCrDrType, firmId) {

    document.getElementById('stockPurPriceCut').value = rateCutId;
    var paymentType = document.getElementById('paymentType').value;
    var poststr = "rateCutOpt=" + encodeURIComponent(rateCutId) +
            "&goldPrevWeight=" + encodeURIComponent(goldPrevWeight) +
            "&goldPrevWeightType=" + encodeURIComponent(goldPrevWeightType) +
            "&silverPrevWeight=" + encodeURIComponent(silverPrevWeight) +
            "&silverPrevWeightType=" + encodeURIComponent(silverPrevWeightType) +
            "&goldFinalWeight=" + encodeURIComponent(goldFinalWeight) +
            "&silverFinalWeight=" + encodeURIComponent(silverFinalWeight) +
            "&goldFinalWeightType=" + encodeURIComponent(goldFinalWeightType) +
            "&silverFinalWeightType=" + encodeURIComponent(silverFinalWeightType) +
            "&goldRate=" + encodeURIComponent(goldRate) +
            "&silverRate=" + encodeURIComponent(silverRate) +
            "&payPanelName=" + encodeURIComponent(payPanelName) +
            "&preInvId=" + encodeURIComponent(preInvNo) +
            "&invId=" + encodeURIComponent(invNo) +
            "&userId=" + encodeURIComponent(userId) +
            "&payOpt=" + encodeURIComponent(payOpt) +
            "&totalFinalBalance=" + encodeURIComponent(totalFinalBalance) +
            "&totBalance=" + encodeURIComponent(totBalance) +
            "&gdffnWtCrDrType=" + encodeURIComponent(gdffnWtCrDrType) +
            "&slffnWtCrDrType=" + encodeURIComponent(slffnWtCrDrType) +
            "&userCashBalCrDrType=" + encodeURIComponent(userCashBalCrDrType) +
            "&firmId=" + encodeURIComponent(firmId) +
            "&paymentType=" + encodeURIComponent(paymentType);
    ;
//    alert('poststr=' + poststr);
    itemsale_Supp_rate_cut("include/php/ogsuppaym.php", poststr);
}
function itemsale_Supp_rate_cut(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertItemsaleSuppRateCut;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
function alertItemsaleSuppRateCut() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("rateCutDiv").innerHTML = xmlhttp.responseText;
        var prefix = document.getElementById('prefix').value;
        var metCount = 0;
        var metalVal = 0;
        if (document.getElementById('stockPurPriceCut').value == 'RateCut')
            calcSuppMetalWholeSaleRateCut(prefix);

        calcSuppMtStockRrCtCashBalance(prefix);
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }
}




var goldRateCutWeight = 0;
var silverRateCutWeight = 0;
function calcSuppMetalWholeSaleRateCut(prefix) {
//    alert('prefix=' + prefix)
    var gdRtCt = 0;
    var metalType;
    if ((document.getElementById(prefix + 'Metal1WtPrevBal').value).trim() == '' || document.getElementById(prefix + 'Metal1WtPrevBal').value == 'NaN') {
        document.getElementById(prefix + 'Metal1WtPrevBal').value = 0;
    }

    var gdBal = parseFloat(document.getElementById(prefix + 'PayMetal1WtBal').value);
    var goldWtType = document.getElementById(prefix + 'PayMetal1WtBalType').value;
    if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        if ((document.getElementById(prefix + 'Metal1RtCtWtBal').value).trim() == '' || document.getElementById(prefix + 'Metal1RtCtWtBal').value == 'NaN') {
            document.getElementById(prefix + 'Metal1RtCtWtBal').value = 0;
        }
        var gdRtCt = parseFloat(document.getElementById(prefix + 'Metal1RtCtWtBal').value);
//        alert('gdRtCt='+gdRtCt);
        var goldRtCtWtType = document.getElementById(prefix + 'Metal1RtCtWtBalType').value;
        if (gdBal == '' || gdBal == null) {
            gdBal = 0;
        }
        gdRtCt = convertWeight(gdRtCt, goldWtType, goldRtCtWtType);
        document.getElementById('metal1RtCtWtBal').value = gdRtCt + ' ' + goldWtType;
    }
    document.getElementById('metal1WtBal').value = parseFloat(gdBal - gdRtCt).toFixed(3) + ' ' + goldWtType;
    document.getElementById('metal1WtFinBal').value = parseFloat(gdBal - gdRtCt).toFixed(3) + ' ' + goldWtType;
//    alert(document.getElementById('metal1WtFinBal').value);
    if ((document.getElementById(prefix + 'Metal2WtPrevBal').value).trim() == '' || document.getElementById(prefix + 'Metal2WtPrevBal').value == 'NaN') {
        document.getElementById(prefix + 'Metal2WtPrevBal').value = 0;
    }

    var silverRtCt = 0;
    var silverBal = parseFloat(document.getElementById(prefix + 'PayMetal2WtBal').value);
    var silverWtType = document.getElementById(prefix + 'PayMetal2WtBalType').value;
//    alert('sl wt:' + silverBal +'Rate Cut Opt : '+ document.getElementById('stockPurPriceCut').value);
    if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        if ((document.getElementById(prefix + 'Metal2RtCtWtBal').value).trim() == '' || document.getElementById(prefix + 'Metal2RtCtWtBal').value == 'NaN') {
            document.getElementById(prefix + 'Metal2RtCtWtBal').value = 0;
        }
        var silverRtCt = parseFloat(document.getElementById(prefix + 'Metal2RtCtWtBal').value);
        var silverRtCtWtType = document.getElementById(prefix + 'Metal2RtCtWtBalType').value;
//        alert(silverRtCtWtType);
        if (silverBal == '' || silverBal == null) {
            silverBal = 0;
        }
        silverRtCt = convertWeight(silverRtCt, silverWtType, silverRtCtWtType);
        document.getElementById('metal2RtCtWtBal').value = silverRtCt + ' ' + silverWtType;
    }
    document.getElementById('metal2WtBal').value = parseFloat(silverBal - silverRtCt).toFixed(3) + ' ' + silverWtType;
    document.getElementById('metal2WtFinBal').value = parseFloat(silverBal - silverRtCt).toFixed(3) + ' ' + silverWtType;
    calcSuppMetRawMetStock(prefix);
    calcSuppMtStockRrCtCashBalance(prefix);
}


function calcSuppMtStockRrCtCashBalance(prefix) {
    var userCashBalCrDrType = document.getElementById('userCashBalCrDrType').value;
    var paymentType = document.getElementById('paymentType').value;
    if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        var PayTotAmtBalType = document.getElementById('PayTotAmtBalType').value;
    }
    var finalCashBal;
    var finBalLabel = 'CASH BALANCE :';
    var totalCashPaidAmt = document.getElementById(prefix + 'PayCashAmtRec').value;
    if (totalCashPaidAmt == null || totalCashPaidAmt == '') {
        totalCashPaidAmt = 0;
    }
    var totalChequeAmt = document.getElementById(prefix + 'PayChequeAmt').value;
    if (totalChequeAmt == null || totalChequeAmt == '') {
        totalChequeAmt = 0;
    }
    var totalCardAmt = document.getElementById(prefix + 'PayCardAmt').value;
    if (totalCardAmt == null || totalCardAmt == '') {
        totalCardAmt = 0;
    }
    document.getElementById(prefix + 'PayCashRecDisp').value = Math_round(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);
    document.getElementById(prefix + 'PayTotCashAmt').value = Math_round(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);


    var totalAmt = 0;
    var crystalAmnt = 0;
    if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        if (document.getElementById(prefix + 'PayTotAmt').value == '' || document.getElementById(prefix + 'PayTotAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayTotAmt').value = 0;
        }
//      totalAmt = parseFloat(document.getElementById(prefix + 'PayTotAmt').value);
        var totalfianlAmt1 = document.getElementById('dispMetal11Value').value;
        var totalfianlAmt2 = document.getElementById('dispMetal22Value').value;
        if (totalfianlAmt1 == '' || totalfianlAmt1 == 'NaN') {
            totalfianlAmt1 = 0;
        }
        if (totalfianlAmt2 == '' || totalfianlAmt2 == 'NaN') {
            totalfianlAmt2 = 0;
        }
        var totalAmt = Math.abs(parseFloat(totalfianlAmt1) - parseFloat(totalfianlAmt2));
    } else if (document.getElementById('stockPurPriceCut').value == 'ByCash') {
        totalAmt = Math.abs(parseFloat(document.getElementById(prefix + 'PayTotAmt').value));
    }
//    else {
//        totalAmt = parseFloat(document.getElementById(prefix + 'PayTotAmt').value);
//    }

    var newTotalAmount = totalAmt;
    document.getElementById('taxOnTotAmt').value = Math_round((parseFloat(totalAmt))).toFixed(2);

    var totalValuation = document.getElementById('taxOnTotAmt').value;
    if (totalValuation == null || totalValuation == '') {
        totalValuation = 0;
    }
    if (document.getElementById(prefix + 'VATTax').value == '') {
        document.getElementById(prefix + 'VATTax').value = 0;
    }
    var totTax = parseFloat(document.getElementById(prefix + 'VATTax').value) / 100;
    document.getElementById(prefix + 'PayVATAmtDisp').value = Math_round(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);
    document.getElementById(prefix + 'PayVATAmt').value = Math_round(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);
    if (document.getElementById(prefix + 'PayVATAmt').value == 'NaN' || document.getElementById(prefix + 'PayVATAmt').value == '') {
        document.getElementById(prefix + 'PayVATAmt').value = 0.00;
    }

    if (document.getElementById(prefix + 'PayPrevTotAmt').value == 'NaN' || document.getElementById(prefix + 'PayPrevTotAmt').value == '') {
        document.getElementById(prefix + 'PayPrevTotAmt').value = 0;
    }
    if (document.getElementById(prefix + 'PayPrevTotAmt').value != '' || document.getElementById(prefix + 'PayPrevTotAmt').value != 0) {
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (document.getElementById(prefix + 'PayPrevTotAmt').value > 0) {
                if (userCashBalCrDrType == 'DR') {
                    totalAmt = totalAmt + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value);
                    totalAmt = Math.abs(parseFloat(totalAmt));
                } else if (userCashBalCrDrType == 'CR') {
                    totalAmt = totalAmt - parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value);
                    totalAmt = Math.abs(parseFloat(totalAmt));
                }
            } else {
                if (userCashBalCrDrType == 'DR') {
                    totalAmt = totalAmt + Math.abs(parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value));
                    totalAmt = Math.abs(parseFloat(totalAmt));
                } else if (userCashBalCrDrType == 'CR') {
                    totalAmt = totalAmt - Math.abs(parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value));
                    totalAmt = Math.abs(parseFloat(totalAmt));
                }

            }
            if (document.getElementById('dispMetal22Value').value == '' || document.getElementById('dispMetal22Value').value == 'NaN') {
                document.getElementById('dispMetal22Value').value = 0;
            }
            var totalfianlAmt1 = document.getElementById('dispMetal11Value').value;
            var totalfianlAmt2 = document.getElementById('dispMetal22Value').value;
            if (totalfianlAmt1 == '' || totalfianlAmt1 == 'NaN') {
                totalfianlAmt1 = 0;
            }
            if (totalfianlAmt2 == '' || totalfianlAmt2 == 'NaN') {
                totalfianlAmt2 = 0;
            }
            var totalMetalAmt = parseFloat(totalfianlAmt1) - parseFloat(totalfianlAmt2);

            totalAmt = Math.abs(parseFloat(totalMetalAmt));
        }
//        alert(totalAmt);
    }
    if (document.getElementById(prefix + 'PayVATAmt').value == '' || document.getElementById(prefix + 'PayVATAmt').value == 'NaN') {
        document.getElementById(prefix + 'PayVATAmt').value = 0;
    }
    if (document.getElementById(prefix + 'PayDiscount').value == '' || document.getElementById(prefix + 'PayDiscount').value == 'NaN') {
        document.getElementById(prefix + 'PayDiscount').value = 0;
    }
    if (document.getElementById(prefix + 'PayTotCashAmt').value == '' || document.getElementById(prefix + 'PayTotCashAmt').value == 'NaN') {
        document.getElementById(prefix + 'PayTotCashAmt').value = 0;
    }
    document.getElementById(prefix + 'PayDiscountDisp').value = Math_round(parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
    if (document.getElementById('stockPurPriceCut').value == 'ByCash') {
        document.getElementById(prefix + 'PayTotFinalAmt').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value))).toFixed(2);
    }
    document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value))).toFixed(2);
    if (document.getElementById('stockPurPriceCut').value == 'ByCash') {
        if (paymentType == 'OWNER' && userCashBalCrDrType == 'CR') {
            finalCashBal = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        } else if (paymentType == 'SUPPLIER' && userCashBalCrDrType == 'DR') {
            finalCashBal = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        } else {
            finalCashBal = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        }
    } else if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        if (paymentType == 'OWNER' && PayTotAmtBalType == 'CR') {
            finalCashBal = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        } else if (paymentType == 'SUPPLIER' && PayTotAmtBalType == 'DR') {
            finalCashBal = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        } else {
            finalCashBal = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        }
    }
//    finalCashBal = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);

    if (finalCashBal <= 0) {
        finBalLabel = 'FINAL CASH DEPOSIT :';
    }
    document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(finalCashBal).toFixed(2);
    if (document.getElementById('stockPurPriceCut').value == 'ByCash') {
        if (paymentType == 'OWNER' && userCashBalCrDrType == 'CR') {
            document.getElementById(prefix + 'PayTotAmtBal').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
            document.getElementById(prefix + 'PayTotRemAmtBal').value = Math_round((parseFloat(newTotalAmount) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        } else if (paymentType == 'SUPPLIER' && userCashBalCrDrType == 'DR') {
            document.getElementById(prefix + 'PayTotAmtBal').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
            document.getElementById(prefix + 'PayTotRemAmtBal').value = Math_round((parseFloat(newTotalAmount) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        } else {
            document.getElementById(prefix + 'PayTotAmtBal').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
            document.getElementById(prefix + 'PayTotRemAmtBal').value = Math_round((parseFloat(newTotalAmount) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        }
    } else if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        if (paymentType == 'OWNER' && PayTotAmtBalType == 'CR') {
            document.getElementById(prefix + 'PayTotAmtBal').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
            document.getElementById(prefix + 'PayTotRemAmtBal').value = Math_round((parseFloat(newTotalAmount) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        } else if (paymentType == 'SUPPLIER' && PayTotAmtBalType == 'DR') {
            document.getElementById(prefix + 'PayTotAmtBal').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
            document.getElementById(prefix + 'PayTotRemAmtBal').value = Math_round((parseFloat(newTotalAmount) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        } else {
            document.getElementById(prefix + 'PayTotAmtBal').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
            document.getElementById(prefix + 'PayTotRemAmtBal').value = Math_round((parseFloat(newTotalAmount) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        }
    }
//    document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(finalCashBal).toFixed(2);
//    document.getElementById('finCashBalTd').innerHTML = finBalLabel;
//    document.getElementById(prefix + 'PayTotAmtBal').value = Math_round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
//    document.getElementById(prefix + 'PayTotRemAmtBal').value = Math_round((parseFloat(newTotalAmount) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
}



function calcSuppMetRawMetStock(prefix) {
    var weightBal = 0;
    var gdffnWtCrDrType = document.getElementById('gdffnWtCrDrType').value;
    var slffnWtCrDrType = document.getElementById('slffnWtCrDrType').value;
    var userCashBalCrDrType = document.getElementById('userCashBalCrDrType').value;
    if (document.getElementById(prefix + 'Metal1WtPrevBal').value != '' || document.getElementById(prefix + 'GoldTotFineWt').value != '') {
        if (document.getElementById(prefix + 'PayMetal1WtBal').value == '' || document.getElementById(prefix + 'PayMetal1WtBal').value == 'NaN') {
            document.getElementById(prefix + 'PayMetal1WtBal').value = 0;
        }
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (document.getElementById(prefix + 'Metal1RtCtWtBal').value == '' || document.getElementById(prefix + 'Metal1RtCtWtBal').value == 'NaN') {
                document.getElementById(prefix + 'Metal1RtCtWtBal').value = 0;
            }
            var gdRateCut = convertWeight(parseFloat(document.getElementById(prefix + 'Metal1RtCtWtBal').value), document.getElementById(prefix + 'PayMetal1WtBalType').value, document.getElementById(prefix + 'Metal1RtCtWtBalType').value);
            var totFinGdWtBal = parseFloat(document.getElementById(prefix + 'PayMetal1WtBal').value) - parseFloat(gdRateCut);
        }

        document.getElementById('metal1WtFinBal').value = parseFloat(totFinGdWtBal).toFixed(3) + ' ' + document.getElementById(prefix + 'PayMetal1WtBalType').value;
        document.getElementById(prefix + 'Metal1WtFinBal').value = parseFloat(totFinGdWtBal).toFixed(3);
        document.getElementById(prefix + 'Metal1WtFinBalType').value = document.getElementById(prefix + 'PayMetal1WtBalType').value;

        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            var payTotalWeightType1 = document.getElementById(prefix + 'Metal1RtCtWtBalType').value;
            var goldWeight = document.getElementById(prefix + 'Metal1RtCtWtBal').value;
            var payMetalRate1 = document.getElementById(prefix + 'Metal1Rate').value;
            if (payTotalWeightType1 == 'KG') {
                document.getElementById(prefix + 'Metal1Valuation').value = Math_round((goldWeight * payMetalRate1 * document.getElementById('gmWtInKg').value));
                document.getElementById('dispMetal1Value').value = Math_round((goldWeight * payMetalRate1 * document.getElementById('gmWtInKg').value)).toFixed(2);
            } else if (payTotalWeightType1 == 'GM') {
                document.getElementById(prefix + 'Metal1Valuation').value = Math_round((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value);
                document.getElementById('dispMetal1Value').value = Math_round((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value).toFixed(2);
            } else if (payTotalWeightType1 == 'MG') {
                document.getElementById(prefix + 'Metal1Valuation').value = Math_round((goldWeight * payMetalRate1) / (document.getElementById('gmWtInMg').value));
                document.getElementById('dispMetal1Value').value = Math_round((goldWeight * payMetalRate1) / (document.getElementById('gmWtInMg').value)).toFixed(2);
            }
        }
    }
    if (document.getElementById(prefix + 'Metal2WtPrevBal').value != '' || document.getElementById(prefix + 'SilverTotFineWt').value != '') {
        if (document.getElementById(prefix + 'PayMetal2WtBal').value == '' || document.getElementById(prefix + 'PayMetal2WtBal').value == 'NaN') {
            document.getElementById(prefix + 'PayMetal2WtBal').value = 0;
        }
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (document.getElementById(prefix + 'Metal2RtCtWtBal').value == '' || document.getElementById(prefix + 'Metal2RtCtWtBal').value == 'NaN') {
                document.getElementById(prefix + 'Metal2RtCtWtBal').value = 0;
            }
            var slRateCut = convertWeight(parseFloat(document.getElementById(prefix + 'Metal2RtCtWtBal').value), document.getElementById(prefix + 'PayMetal2WtBalType').value, document.getElementById(prefix + 'Metal2RtCtWtBalType').value);
            var totFinSrWtBal = parseFloat(document.getElementById(prefix + 'PayMetal2WtBal').value) - parseFloat(slRateCut);
        }
        document.getElementById('metal2WtFinBal').value = parseFloat(totFinSrWtBal).toFixed(3) + ' ' + document.getElementById(prefix + 'PayMetal2WtBalType').value;
        document.getElementById(prefix + 'Metal2WtFinBal').value = parseFloat(totFinSrWtBal).toFixed(3);
        document.getElementById(prefix + 'Metal2WtFinBalType').value = document.getElementById(prefix + 'PayMetal2WtBalType').value;
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            var payTotalWeightType2 = document.getElementById(prefix + 'Metal2RtCtWtBalType').value;
            var silverWeight = parseFloat(document.getElementById(prefix + 'Metal2RtCtWtBal').value);
            var payMetalRate2 = parseFloat(document.getElementById(prefix + 'Metal2Rate').value);
            if (payTotalWeightType2 == 'KG') {
                document.getElementById(prefix + 'Metal2Valuation').value = Math_round((silverWeight * payMetalRate2 * document.getElementById('srGmWtInKg').value));
                document.getElementById('dispMetal2Value').value = Math_round((silverWeight * payMetalRate2 * document.getElementById('srGmWtInKg').value)).toFixed(2);
            } else if (payTotalWeightType2 == 'GM') {
                document.getElementById(prefix + 'Metal2Valuation').value = Math_round((silverWeight * payMetalRate2) / document.getElementById('srGmWtInGm').value);
                document.getElementById('dispMetal2Value').value = Math_round((silverWeight * payMetalRate2) / document.getElementById('srGmWtInGm').value).toFixed(2);
            } else if (payTotalWeightType2 == 'MG') {
                document.getElementById(prefix + 'Metal2Valuation').value = Math_round((silverWeight * payMetalRate2) / (document.getElementById('srGmWtInMg').value));
                document.getElementById('dispMetal2Value').value = Math_round((silverWeight * payMetalRate2) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
            }
        }
    }
    if (document.getElementById(prefix + 'PayPrevTotAmt').value == '' || document.getElementById(prefix + 'PayPrevTotAmt').value == 'NaN') {
        document.getElementById(prefix + 'PayPrevTotAmt').value = 0;
    }
    if (gdffnWtCrDrType == 'DR') {
        if (slffnWtCrDrType == 'DR' && userCashBalCrDrType == 'DR') {
            var dispMetal11Amt = Math_round(parseFloat(document.getElementById('dispMetal1Value').value) + parseFloat(document.getElementById('dispMetal2Value').value) + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value)).toFixed(2);
            document.getElementById('dispMetal11Value').value = Math.abs(dispMetal11Amt).toFixed(2);
        } else if (slffnWtCrDrType == 'CR' && userCashBalCrDrType == 'CR') {
            var dispMetal11Amt = Math_round(parseFloat(document.getElementById('dispMetal1Value').value)).toFixed(2);
            document.getElementById('dispMetal11Value').value = Math.abs(dispMetal11Amt).toFixed(2);
            var dispMetal22Amt = Math_round(parseFloat(document.getElementById('dispMetal2Value').value) + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value)).toFixed(2);
            document.getElementById('dispMetal22Value').value = Math.abs(dispMetal22Amt).toFixed(2);
        } else if (slffnWtCrDrType == 'DR' && userCashBalCrDrType == 'CR') {
            var dispMetal11Amt = Math_round(parseFloat(document.getElementById('dispMetal1Value').value) + parseFloat(document.getElementById('dispMetal2Value').value)).toFixed(2);
            document.getElementById('dispMetal11Value').value = Math.abs(dispMetal11Amt).toFixed(2);
            var dispMetal22Amt = Math_round(parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value)).toFixed(2);
            document.getElementById('dispMetal22Value').value = Math.abs(dispMetal22Amt).toFixed(2);
        } else if (slffnWtCrDrType == 'CR' && userCashBalCrDrType == 'DR') {
            var dispMetal11Amt = Math_round(parseFloat(document.getElementById('dispMetal1Value').value) + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value)).toFixed(2);
            document.getElementById('dispMetal11Value').value = Math.abs(dispMetal11Amt).toFixed(2);
            var dispMetal22Amt = Math_round(parseFloat(document.getElementById('dispMetal2Value').value)).toFixed(2);
            document.getElementById('dispMetal22Value').value = Math.abs(dispMetal22Amt).toFixed(2);
        }
    } else {
        if (slffnWtCrDrType == 'CR' && userCashBalCrDrType == 'CR') {
            var dispMetal22Amt = Math_round(parseFloat(document.getElementById('dispMetal1Value').value) + parseFloat(document.getElementById('dispMetal2Value').value) + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value)).toFixed(2);
            document.getElementById('dispMetal22Value').value = Math.abs(dispMetal22Amt).toFixed(2);
        } else if (slffnWtCrDrType == 'DR' && userCashBalCrDrType == 'DR') {
            var dispMetal11Amt = Math_round(parseFloat(document.getElementById('dispMetal2Value').value) + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value)).toFixed(2);
            document.getElementById('dispMetal11Value').value = Math.abs(dispMetal11Amt).toFixed(2);
            var dispMetal22Amt = Math_round(parseFloat(document.getElementById('dispMetal1Value').value)).toFixed(2);
            document.getElementById('dispMetal22Value').value = Math.abs(dispMetal22Amt).toFixed(2);
        } else if (slffnWtCrDrType == 'DR' && userCashBalCrDrType == 'CR') {
            var dispMetal11Amt = Math_round(parseFloat(document.getElementById('dispMetal2Value').value)).toFixed(2);
            document.getElementById('dispMetal11Value').value = Math.abs(dispMetal11Amt).toFixed(2);
            var dispMetal22Amt = Math_round(parseFloat(document.getElementById('dispMetal1Value').value) + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value)).toFixed(2);
            document.getElementById('dispMetal22Value').value = Math.abs(dispMetal22Amt).toFixed(2);
        } else if (slffnWtCrDrType == 'CR' && userCashBalCrDrType == 'DR') {
            var dispMetal22Amt = Math_round(parseFloat(document.getElementById('dispMetal1Value').value) + parseFloat(document.getElementById('dispMetal2Value').value)).toFixed(2);
            document.getElementById('dispMetal22Value').value = Math.abs(dispMetal22Amt).toFixed(2);
            var dispMetal11Amt = Math_round(parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value)).toFixed(2);
            document.getElementById('dispMetal11Value').value = Math.abs(dispMetal11Amt).toFixed(2);
        }
    }
    var dispMetTotalAmt = Math_round((parseFloat(document.getElementById('dispMetal1Value').value) + parseFloat(document.getElementById('dispMetal2Value').value))).toFixed(2);
    document.getElementById('dispTotMetalValue').value = Math.abs(dispMetTotalAmt).toFixed(2);
    if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        if (document.getElementById(prefix + 'Metal1Valuation').value == '' || document.getElementById(prefix + 'Metal1Valuation').value == 'NaN') {
            document.getElementById(prefix + 'Metal1Valuation').value = 0;
        }
        if (document.getElementById(prefix + 'Metal2Valuation').value == '' || document.getElementById(prefix + 'Metal2Valuation').value == 'NaN') {
            document.getElementById(prefix + 'Metal2Valuation').value = 0;
        }

        var totalfianlAmt1 = document.getElementById('dispMetal11Value').value;
        var totalfianlAmt2 = document.getElementById('dispMetal22Value').value;


        if (totalfianlAmt1 == '' || totalfianlAmt1 == 'NaN') {
            totalfianlAmt1 = 0;

        }
        if (totalfianlAmt2 == '' || totalfianlAmt2 == 'NaN') {
            totalfianlAmt2 = 0;
        }
        var totalMetalAmt = Math_round(parseFloat(totalfianlAmt1) - parseFloat(totalfianlAmt2));
        if (totalMetalAmt < 0) {
            document.getElementById('PayTotAmtBalType').value = 'CR';
            document.getElementById('amtType').value = '(लेना)';
        } else if (totalMetalAmt >= 0) {
            document.getElementById('PayTotAmtBalType').value = 'DR';
            document.getElementById('amtType').value = '(देना)'
        }
        var totalMetalAmt = Math.abs(totalMetalAmt);
        document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math_round(totalMetalAmt).toFixed(2);
        document.getElementById(prefix + 'PayTotAmtRec').value = Math_round(parseFloat(document.getElementById(prefix + 'Metal1Valuation').value) + parseFloat(document.getElementById(prefix + 'Metal2Valuation').value)).toFixed(2);
        document.getElementById(prefix + 'PayTotAmt').value = Math_round(parseFloat(document.getElementById(prefix + 'Metal1Valuation').value) + parseFloat(document.getElementById(prefix + 'Metal2Valuation').value)).toFixed(2);
    }
}
/***********END Code To add itemsaleSuppRateCut @Author: GAUR14DEC16***************/

/***********START Code To add itemsaleSuppRateCut @Author: GAUR16DEC16***************/
function deleteSuppAllTransList(transId, suppId, utransType, count) {
    if (parseFloat(document.getElementById("invoiceRow" + count).value) > 0) {
        alert('You can not delete this Item');
    } else {
        confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");//add variables of alert msgs @AUTHOR: SANDY29JAN14
        if (confirm_box == true)
        {
            loadXMLDoc();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    if (utransType == 'SuppPayment')
                        document.getElementById("suppHomeDiv").innerHTML = xmlhttp.responseText;
                    else
                        document.getElementById("mainMiddleCustHome").innerHTML = xmlhttp.responseText;
//                    closeMessDiv('messDisplayDiv', 'DELETED');
                } else {
                    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
                }
            };
            xmlhttp.open("GET", "include/php/ogspmdel.php?transId=" + transId + "&suppId=" + suppId, true);
            xmlhttp.send();
        }
    }
}
/***********END Code To add itemsaleSuppRateCut @Author: GAUR16DEC16***************/

function labelsPurFormSubmit(fieldName, fontSize, count) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (fieldName != 'firmPurLeftLogoCheck' && fieldName != 'firmPurRightLogoCheck' && fieldName != 'designPur' && fontSize == '') {
        alert("Please Enter Font Size !");
        document.getElementById('fontSize' + count).focus();
    } else {
        closeMessDiv('cuMessDisplayDiv', 'UPDATED');
        return true;
    }
    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    return false;
}


function labelsPurForm(count, labelType, fieldName, fieldValue, fontSize, fontColor, divId, display) {
    if (display == 'NO' || divId == 'tncPurDiv' || divId == 'authPurSignLbDiv' || divId == 'invPurTitleDiv' || fieldName == 'formPurBorderCheck' || divId == 'footerPurLbDiv') {
        var check = document.getElementById("fontCheckId" + count).checked;
    }
    if (fieldName != 'firmPurLeftLogoCheck' && fieldName != 'firmPurRightLogoCheck' && fieldName != 'designPur' && divId != '' && fontSize == '') {
        alert("Please Enter Font Size !");
    } else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("slPrCurrentInvoice").innerHTML = xmlhttp.responseText;
                document.getElementById("cuMessDisplayDiv").innerHTML = "<span class='fs_14 ff_calibri reddish'>UPDATED</span>";
                window.setTimeout(closeMessDetails, 1500);
            }
            else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omcpfoad.php?labelType=" + labelType + "&count=" + count + "&fieldName=" + fieldName + "&fieldValue=" + fieldValue + "&fontSize=" + fontSize +
                "&fontColor=" + fontColor + "&fieldCheck=" + check + "&panel=CustomizedFormMainPanel", true);
        xmlhttp.send();
    }
    function closeMessDetails()
    {
        document.getElementById("cuMessDisplayDiv").innerHTML = "";
    }
}
function openPurFormDiv(divId, count, display, labelId, fieldName, fieldValue, fontSize, fontColor, fieldCheck, inputWidth, labelType, topMargin, leftMargin) {
    fieldValue = encodeURIComponent(fieldValue);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(divId).innerHTML = xmlhttp.responseText;
            document.getElementById('fontSize' + count).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omcpufmd.php?divId=" + divId + "&count=" + count + "&display=" + display + "&labelId=" + labelId + "&labelType=" + labelType + "&fieldName=" + fieldName
            + "&fieldValue=" + fieldValue + "&inputWidth=" + inputWidth + "&fontSize=" + fontSize + "&fontColor=" + fontColor + "&fieldCheck=" + fieldCheck + "&topMargin=" + topMargin + "&leftMargin=" + leftMargin, true);
    xmlhttp.send();
}


//START add function for sell @Author:GAUR20DEC16

function labelsSellFormSubmit(fieldName, fontSize, count) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (fieldName != 'firmPurLeftLogoCheck' && fieldName != 'firmPurRightLogoCheck' && fieldName != 'designPur' && fontSize == '') {
        alert("Please Enter Font Size !");
        document.getElementById('fontSize' + count).focus();
    } else {
        closeMessDiv('cuMessDisplayDiv', 'UPDATED');
        return true;
    }
    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    return false;
}


function labelsSellForm(count, labelType, fieldName, fieldValue, fontSize, fontColor, divId, display) {
    if (display == 'NO' || divId == 'tncPurDiv' || divId == 'authPurSignLbDiv' || divId == 'invPurTitleDiv' || fieldName == 'formPurBorderCheck' || divId == 'footerPurLbDiv') {
        var check = document.getElementById("fontCheckId" + count).checked;
    }
    if (fieldName != 'firmPurLeftLogoCheck' && fieldName != 'firmPurRightLogoCheck' && fieldName != 'designPur' && divId != '' && fontSize == '') {
        alert("Please Enter Font Size !");
    } else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("slPrCurrentInvoice").innerHTML = xmlhttp.responseText;
                document.getElementById("cuMessDisplayDiv").innerHTML = "<span class='fs_14 ff_calibri reddish'>UPDATED</span>";
                window.setTimeout(closeMessDetails, 1500);
            }
            else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omcsfoad.php?labelType=" + labelType + "&count=" + count + "&fieldName=" + fieldName + "&fieldValue=" + fieldValue + "&fontSize=" + fontSize +
                "&fontColor=" + fontColor + "&fieldCheck=" + check + "&panel=CustomizedFormMainPanel", true);
        xmlhttp.send();
    }
    function closeMessDetails()
    {
        document.getElementById("cuMessDisplayDiv").innerHTML = "";
    }
}
function openSellFormDiv(divId, count, display, labelId, fieldName, fieldValue, fontSize, fontColor, fieldCheck, inputWidth, labelType, topMargin, leftMargin) {
    fieldValue = encodeURIComponent(fieldValue);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(divId).innerHTML = xmlhttp.responseText;
            document.getElementById('fontSize' + count).focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omcsufmd.php?divId=" + divId + "&count=" + count + "&display=" + display + "&labelId=" + labelId + "&labelType=" + labelType + "&fieldName=" + fieldName
            + "&fieldValue=" + fieldValue + "&inputWidth=" + inputWidth + "&fontSize=" + fontSize + "&fontColor=" + fontColor + "&fieldCheck=" + fieldCheck + "&topMargin=" + topMargin + "&leftMargin=" + leftMargin, true);
    xmlhttp.send();
}
//
// END add function for sell @Author:GAUR20DEC16
//
// START add function for CUST ALL TARNSACTION @Author:GAUR21DEC16
// START CODE TO ADD ONE PARAMETER IN FUNCTION FOR PAYMENT/RECEIPT PANEL @PRIYANKA-15MAR18
function showCustHomePurchaseDetails(PanelName, userId, payCRDR, PaymentReceiptPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (PanelName == 'SuppPayment') {
                document.getElementById('supplierProductPurchasePanel').innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("custHomeTransDiv").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ompyamt.php?transCRDR=" + payCRDR + "&PaymentReceiptPanel=" + PaymentReceiptPanel + "&paymentPanelName=UserPayment&transPanelName=Payment&mainPanelName=userHome&userId=" + userId, true);
    xmlhttp.send();
}
// START CODE TO ADD ONE PARAMETER IN FUNCTION FOR PAYMENT/RECEIPT PANEL @PRIYANKA-15MAR18
// END add function for CUST ALL TARNSACTION @Author:GAUR21DEC16
//
function updateSuppAllTransList(transId, suppId, utransType) {
    if (utransType == 'SuppPayment')
        var uType = 'SuppPaymentUp';
    else
        var uType = 'CustPaymentUp';
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("suppHomePanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogsuppaym.php?transId=" + transId + "&userId=" + suppId + "&paymentPanelName=" + uType, true);
    xmlhttp.send();
}
//*****Start code for crystal on supplier purchase:Author:SANT22JAN17
function addSuppPurDetails(suppItemCoun, stockPanelName, suppPurId, utinId, utansMetalType, payStockPanelName) {
    var payStockPanelName = stockPanelName;
    if (stockPanelName == 'InvoicePayUp') {
        stockPanelName = 'InvoicePayment';
    }
    document.getElementById("openLotItemDetDiv").value = 'true';



    document.getElementById("stockPanelSubFormDiv").style.display = 'block';

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPanelSubFormDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (stockPanelName == 'InvoicePayment') {
        xmlhttp.open("GET", "include/php/ogadstoc.php?" + suppItemCoun + "&stockPanelName=" + stockPanelName + "&suppPurId=" + suppPurId + "&utinId=" + utinId + "&utansMetalType=" + utansMetalType + "&payStockPanelName=" + payStockPanelName, true);
    } else {
        xmlhttp.open("GET", "include/php/ogcraddv.php?" + suppItemCoun + "&stockPanelName=" + stockPanelName + "&suppPurId=" + suppPurId + "&utinId=" + utinId, true);
    }
    xmlhttp.send();
}
// START CODE FOR CRYSTAL PURCHASE INVOICE CALCULATION FUNCTION: AUTHOR:SANT06JUN17
function calcCryTotalPurInvPrice() {
    //
    var crystalQTY = parseInt(document.getElementById('sttr_quantity').value);
    var crystalGsWt = parseFloat(document.getElementById('sttr_gs_weight').value);
    var crystalGsWtTyp = document.getElementById('sttr_gs_weight_type').value;
    var crystalInvRate = parseFloat(document.getElementById('sttr_purchase_rate').value);
    var crystalRateType = document.getElementById('sttr_purchase_rate_type').value;
    var crystalTax = parseFloat(document.getElementById('sttr_tax').value);
    
    if (document.getElementById('sttr_item_category').value != '') {
        document.getElementById('sttr_item_pre_id').value = document.getElementById('sttr_item_category').value;
    }
    
    // START CODE TO CALCULATE TOTAL LABOUR CHARGES @PRIYANKA-14JUNE18
    var totalLabCharges = 0;
    var labCharges = document.getElementById('sttr_lab_charges').value;
    var labChargesType = document.getElementById('sttr_lab_charges_type').value;
    
    if (labCharges != '') {
        
           if (labChargesType == 'KG') {
                if (crystalGsWtTyp == 'KG')
                    totalLabCharges = labCharges;
                else if (crystalGsWtTyp == 'GM')
                    totalLabCharges = (labCharges / 1000);
                else
                    totalLabCharges = (labCharges / (1000 * 1000));               
            } else if (labChargesType == 'GM') {                
                if (crystalGsWtTyp == 'KG')
                    totalLabCharges = labCharges * 1000;
                else if (crystalGsWtTyp == 'GM')
                    totalLabCharges = labCharges;
                else
                    totalLabCharges = (labCharges / 1000);               
            } else if (labChargesType == 'MG') {                
                if (crystalGsWtTyp == 'KG')
                    totalLabCharges = labCharges * 1000 * 1000;
                else if (crystalGsWtTyp == 'GM')
                    totalLabCharges = labCharges * 1000;
                else
                    totalLabCharges = labCharges;                
            } else if (labChargesType == 'PP') {                
                    totalLabCharges = labCharges * crystalQTY;
            }
            
    }
    
    document.getElementById('sttr_total_lab_charges').value = parseFloat(totalLabCharges).toFixed(2);

    // END OF CODE TO CALCULATE TOTAL LABOUR CHARGES @PRIYANKA-14JUNE18
    
    var totalGSWTNRate = 0;
    var totalCrystalTax = 0;
    var finalValuation = 0;
    if (crystalRateType == 'PP') {
        totalGSWTNRate = crystalInvRate * crystalQTY;
    } else if (crystalGsWtTyp == 'CT' && crystalRateType == 'CT') {
        totalGSWTNRate = crystalInvRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'CT' && crystalRateType == 'GM') {
        var currentRate = (crystalInvRate * 5);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'CT' && crystalRateType == 'MG') {
        var currentRate = (crystalInvRate * 0.005);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'CT' && crystalRateType == 'KG') {
        var currentRate = (crystalInvRate * 5000);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'GM' && crystalRateType == 'CT') {
        var currentRate = (crystalInvRate * 0.2);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'GM' && crystalRateType == 'GM') {
        totalGSWTNRate = crystalInvRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'GM' && crystalRateType == 'MG') {
        var currentRate = (crystalInvRate * 0.001);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'GM' && crystalRateType == 'KG') {
        var currentRate = (crystalInvRate * 1000);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'MG' && crystalRateType == 'CT') {
        var currentRate = (crystalInvRate * 0.005);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'MG' && crystalRateType == 'GM') {
        var currentRate = (crystalInvRate * 1000);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'MG' && crystalRateType == 'MG') {
        totalGSWTNRate = crystalInvRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'MG' && crystalRateType == 'KG') {
        var currentRate = (crystalInvRate * 1000000);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'KG' && crystalRateType == 'CT') {
        var currentRate = (crystalInvRate * 0.0002);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'KG' && crystalRateType == 'GM') {
        var currentRate = (crystalInvRate * 0.001);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'KG' && crystalRateType == 'MG') {
        var currentRate = (crystalInvRate * 1000000);
        totalGSWTNRate = currentRate * crystalGsWt;
    } else if (crystalGsWtTyp == 'KG' && crystalRateType == 'KG') {
        totalGSWTNRate = crystalInvRate * crystalGsWt;
    } else if (crystalGsWt == '' && crystalRateType == 'PP') {
        totalGSWTNRate = crystalInvRate * crystalQTY;
    } else if (crystalGsWtTyp == 'GM' && crystalRateType == 'PP') {
        totalGSWTNRate = crystalInvRate * crystalQTY;
    } else if (crystalGsWtTyp == 'MG' && crystalRateType == 'PP') {
        totalGSWTNRate = crystalInvRate * crystalQTY;
    } else if (crystalGsWtTyp == 'KG' && crystalRateType == 'PP') {
        totalGSWTNRate = crystalInvRate * crystalQTY;
    } else {
        totalGSWTNRate = crystalInvRate * crystalGsWt;
    }
    
    // START CODE TO ADD TOTAL LABOUR CHARGES INTO VALUATION @PRIYANKA-14JUNE18
//    if (totalLabCharges != '') {
//        document.getElementById('sttr_valuation').value = (parseFloat(totalGSWTNRate) + parseFloat(totalLabCharges)).toFixed(2);
//    } else {
        document.getElementById('sttr_valuation').value = parseFloat(totalGSWTNRate).toFixed(2);
//    }
    // END OF CODE TO ADD TOTAL LABOUR CHARGES INTO VALUATION @PRIYANKA-14JUNE18
    
    if (document.getElementById('sttr_valuation').value == 'NaN' || document.getElementById('sttr_valuation').value == '') {
        document.getElementById('sttr_valuation').value = 0;
    }
    
    if (document.getElementById('sttr_tax').value != '') {
        
        totalCrystalTax = (parseFloat(document.getElementById('sttr_valuation').value) * (crystalTax / 100));
        document.getElementById('sttr_tot_tax').value = parseFloat(totalCrystalTax).toFixed(2);
        
        if (document.getElementById('sttr_tot_tax').value == 'NaN') {
            document.getElementById('sttr_tot_tax').value = 0;
        }
        
        // START CODE TO ADD TOTAL LABOUR CHARGES INTO FINAL VALUATION @PRIYANKA-14JUNE18
        finalValuation = (parseFloat(totalCrystalTax) + parseFloat(document.getElementById('sttr_valuation').value) + parseFloat(totalLabCharges)).toFixed(2);
        document.getElementById('sttr_final_valuation').value = parseFloat(finalValuation).toFixed(2);
        // END CODE TO ADD TOTAL LABOUR CHARGES INTO FINAL VALUATION @PRIYANKA-14JUNE18
        
    } else {
        document.getElementById('sttr_final_valuation').value = (parseFloat(document.getElementById('sttr_valuation').value) + parseFloat(totalLabCharges)).toFixed(2);
    }
    
    if (document.getElementById('sttr_final_valuation').value == 'NaN') {
        document.getElementById('sttr_final_valuation').value = 0;
    }
}
// END CODE FOR CRYSTAL PURCHASE INVOICE CALCULATION FUNCTION: AUTHOR:SANT06JUN17

//*****End code for crystal on supplier purchase:Author:SANT22JAN17
//*********Start code open and close popup for supplier add stock:Author:SANT04DEC16
function pop(div) {
    document.getElementById(div).style.display = 'block';
}
function hide(div) {
    document.getElementById(div).style.display = 'none';
}
//*********End code open and close popup for supplier add stock:Author:SANT04DEC16

function searchImitationByAmountRange(obj) {
    if (valSearchImitationByAmountRangeInputs(obj)) {
        var poststr = "startRange=" + encodeURIComponent(document.srch_stock_AmtRange.stockAmtStartRange.value)
                + "&endRange=" + encodeURIComponent(document.srch_stock_AmtRange.stockAmtEndRange.value)
                + "&itemName=" + encodeURIComponent(document.srch_stock_AmtRange.stockItemName.value)
                + "&metalWt=" + encodeURIComponent(document.srch_stock_AmtRange.selectMetalWeight.value)
                + "&panelName=jwelleryPanel";//TO PASS METAL WEIGHT TYPE 

        search_Imitation_by_amt_range('include/php/ogijlimsd_1.php', poststr);
    }
}

function valSearchImitationByAmountRangeInputs(obj) {
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
function search_Imitation_by_amt_range(url, parameters) {
    loadXMLDoc();

    xmlhttp.onreadystatechange = alertSearchImitationByAmtRange;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchImitationByAmtRange() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("stockByAmtRangeGoButt").style.visibility = "visible";
        document.getElementById("jewellerySubPanel").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("stockByAmtRangeGoButt").style.visibility = "hidden";
    }
}
/**********Start code to change div @Author:PRIYA06FEB14*************/


function updateKittyDepAmt(emiPaidDD, emiPaidMM, emiPaidYY, documentRootPath, kittyCustId, kittyId, kittyDepId,
        updateKittyDepAmt, kFirmId, kDOB, kSerialNo, kStartDate, kittyNo, kEndDate, emiStatus) {

    document.getElementById("updateKittyDepAmtCloseButton" + kittyDepId).style.visibility = "hidden";
    document.getElementById("updateKittyDepAmtROIButton" + kittyDepId).style.visibility = "hidden";
    var totEMIAmt = parseFloat(document.getElementById('totEMIAmt' + kittyId).value);

    if (updateKittyDepAmt == '') {
        alert('Please Enter Girvi EMI Amount!');
        document.getElementById("updateKittyDepAmt" + kittyDepId).focus();
    } else if (totEMIAmt < updateKittyDepAmt) {
        alert('Amount should not be greater than total EMI amount!'); //change in line @AUTHOR: AMOL
        document.getElementById("updateKittyDepAmt" + kittyDepId).focus();
    } else {
        confirm_box = confirm("Do you really want to update amount?"); //change in line @AUTHOR: AMOL

        var emiPaidDate = emiPaidDD + ' ' + emiPaidMM + ' ' + emiPaidYY;
        if (confirm_box == true)
        {
            var poststr = "kittyCustId=" + kittyCustId
                    + "&kittyId=" + kittyId
                    + "&kittyDepId=" + kittyDepId
                    + "&updateKittyDepAmt=" + updateKittyDepAmt
                    + "&kFirmId=" + kFirmId
                    + "&kDOB=" + kDOB
                    + "&kSerialNo=" + kSerialNo
                    + "&totEMIAmt=" + totEMIAmt
                    + "&emiPaidDate=" + emiPaidDate
                    + "&kStartDate=" + kStartDate
                    + "&kittyNo=" + kittyNo
                    + "&kEndDate=" + kEndDate
                    + "&emiStatus=" + emiStatus;

            // alert(poststr);
            update_kitty_dep_amt('http://' + documentRootPath + '/include/php/omktuema.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
        }
        else {
            document.getElementById("updateKittyDepAmt" + kittyDepId).focus();
        }
    }

    return false;
}

function update_kitty_dep_amt(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateKittyDepAmt;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertUpdateKittyDepAmt() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}

function changeKittyRateAmount(kittyNo) {
    var kittyEmiAmt = parseFloat(document.getElementById('kittyEmiAmt' + kittyNo).value);
    var kittyPaidAmt = parseFloat(document.getElementById('kittyPaidAmt' + kittyNo).value);

    // if( kittyEmiAmt < kittyPaidAmt){
    //     alert("PAID AMMOUTN MUST BE LESS or EQUAL TO EMI AMMOUNT");
    //     var kittyPaidAmt = document.getElementById('kittyPaidAmt'+ kittyNo).value = '';
    //     return kittyPaidAmt;
    // }

    var kittyRateAmt = document.getElementById('kittyRateAmt' + kittyNo).value;
    var kittyWet = ((kittyPaidAmt) * 10) / (kittyRateAmt);

    if (kittyPaidAmt == '' || kittyRateAmt == '') {
        document.getElementById('kittyWeightAmt' + kittyNo).value = 0.00;
    } else {
        document.getElementById('kittyWeightAmt' + kittyNo).value = parseFloat(kittyWet).toFixed(3);
    }


    // calShemeFinWeight(kittyNo);
    // calShemeFinRate(kittyNo);
}

function calShemePaidAmt(kittyNo) {

    var count = document.getElementById('totalEMI').value;
    var totalPaidRateAmt = 0;
    var totalAmt = 0;
    var bounsAmt = 0;
    for (var i = 1; i <= count; i++) {
        if (document.getElementById('kittyDepEMIStatus' + i).value == 'Paid') {
            totalPaidRateAmt += parseFloat(document.getElementById('kittyPaidAmt' + i).value);
//     document.getElementById('checkViaCashMetalDepositAmt').value = parseFloat(totalPaidRateAmt).toFixed(2);
        }
        totalAmt += parseFloat(document.getElementById('kittyEmiAmt' + i).value);
    }
    bounsAmt = parseFloat(document.getElementById('bounsAmt').value).toFixed(2);
    document.getElementById('totalAmt').value = parseFloat(totalAmt).toFixed(2);
    document.getElementById('totalPaidAmt').value = parseFloat(totalPaidRateAmt).toFixed(2);
    document.getElementById('totalPaidDepositAmt').value = parseFloat(totalPaidRateAmt).toFixed(2);
    document.getElementById('amtLeft').value = parseFloat(totalAmt - totalPaidRateAmt).toFixed(2);
    document.getElementById('bounsAmt').value = bounsAmt;
    document.getElementById('finalAmt').value = parseFloat(Number(totalPaidRateAmt) + Number(bounsAmt)).toFixed(2);
}
function calShemeFinRate(kittyNo) {

    var count = document.getElementById('totalEMI').value;
    var totalPaidRateAmt = 0;
    for (var i = 1; i <= count; i++) {
        if (document.getElementById('kittyDepEMIStatus' + i).value == 'Paid') {
            totalPaidRateAmt += parseFloat(document.getElementById('kittyRateAmt' + i).value);
            document.getElementById('totalFinalRt').value = parseFloat(totalPaidRateAmt).toFixed(2);
        }
    }
}
function calShemeFinWeight(kittyNo) {
    var count = document.getElementById('totalEMI').value;
    var totalPaidEmiWtAmt = 0;
    for (var i = 1; i <= count; i++) {
        if (document.getElementById('kittyDepEMIStatus' + i).value == 'Paid') {
            totalPaidEmiWtAmt += parseFloat(document.getElementById('kittyWeightAmt' + i).value);
            document.getElementById('totalFinalWT').value = parseFloat(totalPaidEmiWtAmt).toFixed(3);
        }
    }
}

function paymentPanelDisplay(kittyId, kittyCustId, kittyFirmId, metalType, totalPaidAmt, totalFinalRt, totalFinalWT, schemePayment, utinId, paymentPanelName, kittyRateTot) {
//     alert("paymentPanelName="+utinId); 
    var confirm_box = false;
    if (paymentPanelName == 'schemeMetalPayment' && utinId == '')
        confirm_box = confirm("do you really want to close this scheme?");

    loadXMLDoc();
    if (confirm_box == true || utinId != '') {

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("kittyUpdateSubmit").style.visibility = "hidden";
                if ((totalPaidAmt == '' || totalPaidAmt == 0) && schemePayment != 'schemeCashPayment') {
                    alert('Please Enter The EMI Amount and Paid');
                } else {
                    document.getElementById("paymentPanelDisplayDiv").innerHTML = xmlhttp.responseText;
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
    } else {
        document.getElementById("paymentPanelDisplayDiv").innerHTML = xmlhttp.responseText;
        return false;
    }
    var mainPanelName = 'scheme';
    var transPanelName = 'scheme';
    var totalValuation = totalPaidAmt;
    if ((paymentPanelName == '' || paymentPanelName == 'schemeMetalPayment') && utinId == '') {
        var paymentPanelName = 'SchemePayment';
    } else if (utinId != '') {
        var paymentPanelName = 'schemePayUp';
    }
//    else if(paymentPanelName == 'schemeMetalPayment'){
//        var paymentPanelName = 'schemeMetalPayment';
//    }
    //alert(kittyCustId+"--"+kittyId+"--"+kittyFirmId+"--"+totalPaidAmt+"--"+totalFinalRt+"--"+totalFinalWT+"--"+paymentPanelName+"--"+metalType+"--"+kittyId+"--"+mainPanelName+"--"+transPanelName+"--"+totalValuation+"--"+utinId+"--"+kittyRateTot);
    xmlhttp.open("POST", "include/php/ompyamt.php?userId=" + kittyCustId + "&kittyId=" + kittyId + "&firmId=" + kittyFirmId + "&totalPaidAmt=" + totalPaidAmt + "&totalFinalRt=" + totalFinalRt + "&totalFinalWT=" + totalFinalWT + "&paymentPanelName=" + paymentPanelName + "&metalType=" + metalType + "&suppPayId=" + kittyId + "&mainPanelName=" + mainPanelName + "&transPanelName=" + transPanelName + "&totalValuation=" + totalValuation + "&utid=" + utinId + "&rtctTot=" + kittyRateTot, true);
    xmlhttp.send();
}


function schemeInvoice(srNo, kScheme, Ktotaldp, k, kName, kemi)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("schemeInvDispDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }

    };
    xmlhttp.open("POST", "include/php/omSchemeInv.php?srNo=" + srNo + "&kScheme=" + kScheme + "&Ktotaldp=" + Ktotaldp + "&kName=" + kName + "&kemi=" + kemi, true);
    xmlhttp.send();

}
function giftValueStatus(kittyId, item)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("kittyUpdateSubmit").style.visibility = "hidden";
            if ((item == '')) {
                alert('Please Select Gift Status');
                return false;
            } else {
                document.getElementById("kittystatus").innerHTML = xmlhttp.responseText;
                alert('Gift Item Delivered Succesfully');
            }
        } else {
            ;
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omktgiftst.php?kittyId=" + kittyId + "&item=" + item, true);
    xmlhttp.send();

}
function selBarCodeFormType(custId, girviId, item)
{
    var barCodeTag = 'tail';
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if ((item == '')) {
                alert('Please Select Barcode Format Type');
                return false;
            } else {
                document.getElementById("barcodeStatus").innerHTML = xmlhttp.responseText;
                //alert('Gift Item Delivered Succesfully');
            }
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (item == '24L LOAN') {
        xmlhttp.open("POST", "include/php/olggbcdv.php?custId=" + custId + "&girviId=" + girviId, true);
    }
    else {
        xmlhttp.open("POST", "include/php/olggbc55x13.php?custId=" + custId + "&girviId=" + girviId + "&barCodeTag=" + barCodeTag, true);
    }
    xmlhttp.send();
}


// function metalKittyAmt(kittyMetalType, kittyId, kittyCustId, kittyFirmId, totalFinalWT) {
//      // alert(totalFinalWT);
//     loadXMLDoc();
//   xmlhttp.onreadystatechange = function () {
//         if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//             document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//             document.getElementById("kittyUpdateCashDiv").innerHTML = xmlhttp.responseText;
//         } else {
//             document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//         }
//     };
//     xmlhttp.open("POST", "include/php/omktuema1.php?&kittyCustId=" + kittyCustId + "&kittyId=" + kittyId + "&kittyFirmId=" + kittyFirmId + "&totalFinalWT=" + totalFinalWT + "&kittyMetalType=" + kittyMetalType, true);

//     xmlhttp.send();
//     xmlhttp.onreadystatechange = alertMetalSchemeClose(totalFinalWT);
// }
// function alertMetalSchemeClose(totalFinalWT) {
//    confirm_box = confirm("\nFianally Scheme Are Closing");//change in line @AUTHOR: SANDY28JAN14

//     if (confirm_box == true && totalFinalWT!='')
//     {
//         loadXMLDoc();
//         xmlhttp.onreadystatechange = function () {
//             if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//                 document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//                 document.getElementById("kittyUpdateCashDiv").innerHTML = xmlhttp.responseText;
//             }
//             else {
//                 document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//             }
//         };
//         // xmlhttp.open("POST", "include/php/omchcsst.php?custId=" + custId + "&action=" + action, true);
//         // xmlhttp.send();
//         var hidden = false;

//         hidden = !hidden;
//         if(hidden) {
//             document.getElementById("kittyCashSubmit").style.visibility = "hidden";
//             document.getElementById("kittyMetalSubmit").style.visibility = "hidden";
//         } else {
//             document.getElementById("kittyCashSubmit").style.visibility = "visible";
//             document.getElementById("kittyMetalSubmit").style.visibility = "visible";
//         }
//     }
// }

// start add function delete the data from retail purchase list in datatable @Author:GAUR21MAR17
function deletePurStockListDt(panelName, sttrId, sellPresent) {
    //  alert(panelName);
    //  alert(sttrId);
//    if (sellPresent > 0) {
//        alert('To Delete,First Delete This Item From Customer Jewellery Panel!');
//        return false;
//    } else {
    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");
    if (confirm_box == true)
    {
        var stockDeleteConfirm = '';
        if (panelName != 'ItemStockList') {
            confirm_box_for_stock = confirm(deleteItemAlertMess + "\n\nDo you want to delete this Item From Stock?");
            if (confirm_box_for_stock == true)
            {
                stockDeleteConfirm = 'yes';
            }
        }
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (panelName == 'retailStockPurList' || panelName == 'whsellStockPurList') {
                    document.getElementById("stockPanelPurchaseList").innerHTML = xmlhttp.responseText;
                    if (panelName == 'ItemStockList')
                        closeMessDiv('messDisplayDivision', 'DELETED');
                    else
                        closeMessDiv('messDisplayDiv', 'DELETED');
                } else {
                    document.getElementById("paymentDiv").innerHTML = xmlhttp.responseText;
                    window.setTimeout(stockGlobalFunctionToCloseDiv, 1000);
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };

        xmlhttp.open("GET", "include/php/ogwaldel.php?sttrId=" + sttrId + "&panelName=" + panelName + "&stockDeleteConfirm=" + stockDeleteConfirm, true);
        xmlhttp.send();
    }
//    }
}
// END add function delete the data from retail purchase list in datatable @Author:GAUR21MAR17

function showRetailStock(itprId, stockType) {
    var documentRootPath = document.getElementById('documentRootPath').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        }
    };

    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamndv.php?sttrId=" + itprId + "&panelName=StockPayUp" + "&stockType=retailStock", true);
    xmlhttp.send();
}


function addDelStock(sttrId, stockAdd) {
    var documentRootPath = document.getElementById('documentRootPath').value;
    var itemList = document.getElementById('itemList').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        }
    };

    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogspreadd.php?sttrId=" + sttrId + "&panelName=" + stockAdd + "&itemList=" + itemList, true);
    xmlhttp.send();
}


function showWhsellStock(itprId, stockType) {
    var documentRootPath = document.getElementById('documentRootPath').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        }
    };

    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogiamndv.php?sttrId=" + itprId + "&panelName=StockPayUp" + "&stockType=wholeSaleStock", true);
    xmlhttp.send();
}
//****Start code for add function for cust trans history:Author:SANT27MAR17
function searchHistoryEntryByDate(firmId, dd, mm, yyyy, CustId, Todd, Tomm, Toyyyy) {
//    alert('firmId = '+firmId);
//    alert('dd = '+dd);
//    alert('mm = '+mm);
//    alert('yyyy = '+yyyy);
//    alert('CustId = '+CustId);
//    alert('Todd = '+Todd);
//    alert('Tomm = '+Tomm);
//    alert('Toyyyy = '+Toyyyy);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (valJournalEntryDate()) {
                if (CustId == '') {
                    document.getElementById("taxLedgerDetails").innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("suppHomePanelSubDiv").innerHTML = xmlhttp.responseText;
                }
            }
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var journalEntryDate = dd + '-' + mm + '-' + yyyy;
    var journalEntryToDate = Todd + '-' + Tomm + '-' + Toyyyy;
    if (CustId == '') {
        xmlhttp.open("POST", "include/php/ogbbtiolbs.php?firmId=" + firmId + "&journalEntryDate=" + journalEntryDate + "&dd=" + dd.value + "&mm=" + mm.value + "&yyyy=" + yyyy.value + "&suppPanelName=" + 'transHistory' + "&suppId=" + CustId, true); //change while passing values of date @AUTHOR: SANDY20AUG13
    } else {
        xmlhttp.open("POST", "include/php/ogwsprdt.php?firmId=" + firmId + "&journalEntryDate=" + journalEntryDate + "&dd=" + dd.value + "&mm=" + mm.value + "&yyyy=" + yyyy.value + "&suppPanelName=" + 'transHistory' + "&suppId=" + CustId + "&journalEntryToDate=" + journalEntryToDate + "&Todd=" + Todd.value + "&Tomm=" + Tomm.value + "&Toyyyy=" + Toyyyy.value, true); //change while passing values of date @AUTHOR: SANDY20AUG13
    }

    xmlhttp.send();
}
function getHistoryBookByFrmId(firmId, dd, mm, yyyy, CustId) {
//    alert('firmId='+firmId);
//    alert('dd='+dd);
//    alert('mm='+mm);
//    alert('yyyy='+yyyy);
//    alert('CustId='+CustId);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (CustId == '') {
                document.getElementById("taxLedgerDetails").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("suppHomePanelSubDiv").innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var journalEntryDate = dd + '-' + mm + '-' + yyyy;
    if (CustId == '') {
        xmlhttp.open("POST", "include/php/ogbbtiolbs.php?firmId=" + firmId + "&journalEntryDate=" + journalEntryDate + "&dd=" + dd.value + "&mm=" + mm.value + "&yyyy=" + yyyy.value + "&suppPanelName=" + 'transHistory' + "&suppId=" + CustId, true); //change while passing values of date @AUTHOR: SANDY20AUG13
    } else {
        xmlhttp.open("POST", "include/php/ogwsprdt.php?firmId=" + firmId + "&journalEntryDate=" + journalEntryDate + "&dd=" + dd.value + "&mm=" + mm.value + "&yyyy=" + yyyy.value + "&suppPanelName=" + 'transHistory' + "&suppId=" + CustId, true); //change while passing values of date @AUTHOR: SANDY20AUG13
    }

    xmlhttp.send();
}
//****End code for add function for cust trans history:Author:SANT27MAR17
function showSellPurchaseItmDet(custId, preId, default1, default2, postId) {
    var documentRootPath = document.getElementById('documentRootPath').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (default1 == 'itemApproval' || default1 == 'itemApprovalRec') {
                document.getElementById("slPrCurrentInvoice").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            }

        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

//    alert(postId);
//  header('Location: http://' . $documentRoot . '/ogHomePage.php?divPanel=OwnerHome&divMainMiddlePanel=SuppHome&suppPanelOption=ItemApprovalRecUp&suppId=' . $suppId .
//                '&panelName=ItemApprovalRecUp&divSubPanel=' . $divSubPanel . '&accDrId=' . $accountId."&utrId=".$sttr_id);
    if (default1 == 'ItemApprovalUp') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?custId=" + custId + "&custPanelOption=SellPurchase" + "&mainPanel=ItemApprovalUp" + "&panelName=ItemApprovalUp" + "&divMainMiddlePanel=SellPurchase" +
                "&slPrId=" + preId + "&invoiceNo=" + postId, true);
    }else if (default1 == 'ItemApprovalRecUp') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwhmndv.php?suppId=" + custId + "&suppPanelOption=ItemApprovalRecUp&panelName=ItemApprovalRecUp&utrId=" + preId, true);
    } else if (default1 == 'itemApproval' || default1 == 'itemApprovalRec') {
        xmlhttp.open("GET", "include/php/ogcrspst.php?panel=" + default1 + "&custId=" + custId, true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omcdccdd.php?custId=" + custId + "&custPanelOption=SellPurchase" + "&mainPanel=ItemPurchase" + "&panelName=SellPayUp" + "&divMainMiddlePanel=SellPayUp" +
                "&preInvoiceNo=" + preId + "&postInvoiceNo=" + postId, true);
    }
    xmlhttp.send();
}

//********Start Code for Delete invoice  Author:RATNAKAR07AUG2017
function deleteInvoice(panelName, utinId, PreInvoice, invoiceNo) {

    var documentRootPath = document.getElementById('documentRootPath').value;
    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Invoice?");
    if (confirm_box == true)
    {
        var stockDeleteConfirm = '';
        if (panelName == 'soldOutInv' || panelName == 'soldOutImtList') {
            confirm_box_for_stock = confirm(deleteItemAlertMess + "\n\nDo you want to add this Item From Stock?");
            if (confirm_box_for_stock == true) {
                stockDeleteConfirm = 'yes';
            } else {
                stockDeleteConfirm = 'no';
            }
        }

        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (panelName == 'soldOutInv' || panelName == 'soldOutImtInv') {

                    document.getElementById("itemSoldInvoiceDiv").innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("sellPurchaseList").innerHTML = xmlhttp.responseText;
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };

        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omogspidel.php?panelName=" + panelName + "&utinId=" + utinId + "&stockDeleteConfirm=" + stockDeleteConfirm +
                "&PreInvoice=" + PreInvoice + "&invoiceNo=" + invoiceNo, true);
        xmlhttp.send();
    }

}
//END OF CODE Delete invoice
//********Start code for create function for fincance work:Author:SANT03APR17
function custAddFinance(obj) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    var poststr = "custId=" + custId
            + "&firmId=" + encodeURIComponent(document.getElementById("custFirmId").value)
            + "&custType=" + encodeURIComponent(document.getElementById("custType").value);

    add_new_girvi('include/php/olgacang_1.php', poststr);
}
//
//********End code for create function for fincance work:Author:SANT03APR17
//
function deleteCrystalStockList(panelName, sttrId, stockType, itemCategory, metalType, itemName) {

    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");
    if (confirm_box == true)
    {
        var stockDeleteConfirm = '';
        var stockDelete = document.getElementById("stockDelete").value;
        if (panelName != 'ItemStockList' && stockDelete == 'Y') {
            confirm_box_for_stock = confirm(deleteItemAlertMess + "\n\nDo you want to delete this Item From Stock?");
            if (confirm_box_for_stock == true) {
                stockDeleteConfirm = 'yes';
            } else {
                stockDeleteConfirm = 'no';
            }
        }
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("jewelleryPanel").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };

        xmlhttp.open("GET", "include/php/ogwaldel.php?sttrId=" + sttrId + "&stockDelete=" + stockDelete + "&panelName=" + panelName + "&stockDeleteConfirm=" + stockDeleteConfirm + "&stockType=" + stockType + "&itemName=" + itemName + "&itemCategory=" + itemCategory + "&metalType=" + metalType, true);
        xmlhttp.send();
    }
}
function deleteImitationItemFromStockList(panelName, sttrId, stockType, metalType, itemCategory, itemName) {
    //alert(panelName);
    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");
    if (confirm_box == true)
    {
        var stockDeleteConfirm = '';
        var stockDelete = document.getElementById("stockDelete").value;
        if (panelName != 'ItemStockList' && stockDelete == 'Y') {
            confirm_box_for_stock = confirm(deleteItemAlertMess + "\n\nDo you want to delete this Item From Stock?");
            if (confirm_box_for_stock == true) {
                stockDeleteConfirm = 'yes';
            } else {
                stockDeleteConfirm = 'no';
            }
        }
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("stockListSubDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };

        xmlhttp.open("GET", "include/php/ogwaldel.php?sttrId=" + sttrId + "&panelName=" + panelName + "&stockDeleteConfirm=" + stockDeleteConfirm + "&stockType=" + stockType + "&itemCategory=" + itemCategory + "&metalType=" + metalType + "&itemName=" + itemName, true);
        xmlhttp.send();
    }
}
function deleteItemImitationStockList(panelName, sttrId, stockType, itemCategory, metalType, utinId) {
    //alert(panelName);
    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");
    if (confirm_box == true)
    {
        var stockDeleteConfirm = '';
        var stockDelete = document.getElementById("stockDelete").value;

        if (panelName != 'ItemStockList' && stockDelete == 'Y') {
            confirm_box_for_stock = confirm(deleteItemAlertMess + "\n\nDo you want to delete this Item From Stock?");
            if (confirm_box_for_stock == true)
            {
                stockDeleteConfirm = 'yes';
            }
        }
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("addStockPanelFormMainDiv").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };

        if (panelName == 'ImitationStockInvoice') {
            xmlhttp.open("GET", "ogwaldel.php?sttrId=" + sttrId + "&stockDelete=" + stockDelete + "&panelName=" + panelName + "&stockDeleteConfirm=" + stockDeleteConfirm + "&stockType=" + stockType + "&itemCategory=" + itemCategory + "&metalType=" + metalType + "&utinId=" + utinId, true);
        } else {
            xmlhttp.open("GET", "include/php/ogwaldel.php?sttrId=" + sttrId + "&stockDelete=" + stockDelete + "&panelName=" + panelName + "&stockDeleteConfirm=" + stockDeleteConfirm + "&stockType=" + stockType + "&itemCategory=" + itemCategory + "&metalType=" + metalType, true);
        }

        xmlhttp.send();
    }
}
// START code to create function for stock delete Author:PRIYANKA-08-07-17
function deleteStockList(panelName, sttrId, stockType, itemCategory, metalType, itemName) {

    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");
    if (confirm_box == true)
    {
        var stockDeleteConfirm = '';
        var stockDelete = document.getElementById("stockDelete").value;
        if (panelName != 'ItemStockList' && stockDelete == 'Y') {
            confirm_box_for_stock = confirm(deleteItemAlertMess + "\n\nDo you want to delete this Item From Stock?");
            if (confirm_box_for_stock == true) {
                stockDeleteConfirm = 'yes';
            } else {
                stockDeleteConfirm = 'no';
            }
        }
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("jewelleryPanel").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };

        xmlhttp.open("GET", "include/php/ogwaldel.php?sttrId=" + sttrId + "&stockDelete=" + stockDelete + "&panelName=" + panelName + "&stockDeleteConfirm=" + stockDeleteConfirm + "&stockType=" + stockType + "&itemCategory=" + itemCategory + "&metalType=" + metalType + "&itemName=" + itemName, true);
        xmlhttp.send();
    }
}
// END code to create function for stock delete Author:PRIYANKA-08-07-17
// 
///purchase delete datatable fn changed by @auth:athu8JUN17
function deletePurchaseList(panelName, sttrId, stockType) {

    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");
    if (confirm_box == true)
    {
        var stockDeleteConfirm = '';
        var stockDelete = document.getElementById("stockDelete").value;

        if (panelName != 'ItemStockList' && stockDelete == 'Y') {
            confirm_box_for_stock = confirm(deleteItemAlertMess + "\n\nDo you want to delete this Item From Stock?");
            if (confirm_box_for_stock == true) {
                stockDeleteConfirm = 'yes';
            } else {
                stockDeleteConfirm = 'no';
            }
        }
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (panelName == 'retailStockPurList' || panelName == 'whsellStockPurList' || panelName == 'Stock' || panelName == 'FineStock' || panelName == 'Imitation' || panelName == 'imitationPurchaseList' || panelName == 'Crystal' || panelName == 'ImitationList' || panelName == 'CrystalList' || panelName == 'AllStock') {
                    document.getElementById("stockPanelPurchaseList").innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("paymentDiv").innerHTML = xmlhttp.responseText;
                    window.setTimeout(stockGlobalFunctionToCloseDiv, 1000);
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };

        xmlhttp.open("GET", "include/php/ogwaldel.php?sttrId=" + sttrId + "&stockDelete=" + stockDelete + "&panelName=" + panelName + "&stockDeleteConfirm=" + stockDeleteConfirm + "&stockType=" + stockType, true);
        xmlhttp.send();
    }
}


function DelRawMetal(panelName, sttrId, stockType, condition1, condition2, condition3) {

    var confirmMessage = "";
    confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");
    if (confirm_box == true)
    {
        var stockDeleteConfirm = '';
        if (panelName == 'PurchaseRawStockList' || panelName == 'soldOutPurList') {
            confirmMessage = "\n\nDo you want to delete this Item From Raw Purchase?";
        } else if (panelName == 'RawSellList' || panelName == 'soldOutSellList') {
            confirmMessage = "\n\nDo you want to delete this Item From Raw Sell?";
        } else {
            confirmMessage = "\n\nDo you want to delete this Item From Raw Stock?";
        }
        confirm_box_for_stock = confirm(deleteItemAlertMess + confirmMessage);
        if (confirm_box_for_stock == true) {
            stockDeleteConfirm = 'yes';
        } else {
            stockDeleteConfirm = 'no';
        }

        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (panelName == 'PurchaseRawStockList') {
                    document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'RawSellList') {
                    document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'CurrentRawStockList') {
                    document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
                } else if (panelName == 'soldOutSellList' || panelName == 'soldOutPurList') {
                    document.getElementById("sellPurchaseList").innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("paymentDiv").innerHTML = xmlhttp.responseText;
                    window.setTimeout(stockGlobalFunctionToCloseDiv, 1000);
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };


        xmlhttp.open("GET", "include/php/ogwaldel.php?sttrId=" + sttrId + "&panelName=" + panelName + "&stockDeleteConfirm=" + stockDeleteConfirm + "&stockType=" + stockType + "&con1=" + condition1 + "&con2=" + condition2 + "&con3=" + condition3, true);
        xmlhttp.send();
    }
}

// END add function delete the data from retail purchase list in datatable @Author:GAUR21MAR17

//***********************Start code to change Customer home panel Author@:SANT01DEC16*******************
function showCustOrderDeliev(paymentPanelName) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("stockPanelSubDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogsuppaym.php?paymentPanelName=" + updPanelname + "&userId=" + userId + "&rateCutOpt=" + rateCutOpt + "&paymentType=" + paymentType, true);
    xmlhttp.send();
}
//*********End code to change Customer home panel Author@:SANT01DEC16*******************
//
/*********** Start code to add function for InvoiceUpdate from ALL Transaction @Author:PRIYANKA-21-08-17 *********/
//
function showAllTransactionInvoiceDetails(utinId, transType, panelName, mainPanel, utinType, userId) {
    //
    var paymentPanelName;
    var updatePanelName;
    var mainPanel;
    //
    if (transType == 'PURBYSUPP' && utinType == 'stock') {
        paymentPanelName = 'StockPayUp';

    } else if (transType == 'PURBYSUPP' && utinType == 'imitation') {

        updatePanelName = 'UpdateImitationStock';
        panelName = 'ImitationStock';
    } else if (transType == 'PURBYSUPP' && utinType == 'crystal') {

        updatePanelName = 'UpdateCrystalStock';
        panelName = 'CrystalStock';
    } else if (transType == 'sell' && utinType == 'stock') {

        mainPanel = 'StockPurchasePanel';
        panelName = 'SellPayUp';
    } else if (transType == 'sell' && utinType == 'imitation') {

        mainPanel = 'ImitationPurchasePanel';
        panelName = 'ImitationSellPayUp';
    } else if (transType == 'sell' && utinType == 'crystal') {

        mainPanel = 'CrystalPurchasePanel';
        panelName = 'CrySellPayUp';
    }
    //
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("suppHomePanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    if (transType == 'PURBYSUPP' && utinType == 'stock') {

        xmlhttp.open("GET", "include/php/ogainpydv.php?paymentPanelName=" + paymentPanelName + "&utinId=" + utinId + "&suppId=" + userId, true);

    } else if (transType == 'PURBYSUPP' && (utinType == 'imitation' || utinType == 'crystal')) {

        xmlhttp.open("GET", "include/php/ogijssdv.php?utin_id=" + utinId + "&panelName=" + panelName + "&updatePanelName=" + updatePanelName + "&suppId=" + userId, true);

    } else if (transType == 'sell' && (utinType == 'stock' || utinType == 'imitation' || utinType == 'crystal')) {

        xmlhttp.open("GET", "include/php/ogspisdv.php?utin_id=" + utinId + "&panelName=" + panelName + "&mainPanel=" + mainPanel + "&custId=" + userId, true);

    }

    xmlhttp.send();
}
//
/*********** End code to add function for InvoiceUpdate from ALL Transaction @Author:PRIYANKA-21-08-17 ********/
