/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/***********Start code to add function for adv metal @Author:SHRI14JAN15*************/
/***********Start code to change Div like addNewUdhaarDiv for adv metal @Author:ANUJA12JAN16*************/
function getAdvanceMetalDiv(custId, panelName)
{
//    alert(panelName);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addNewUdhaarDiv").innerHTML = xmlhttp.responseText;
            if (panelName != 'AdvMetalList')
                document.getElementById("DOBDay").focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'AdvMetalList')
        xmlhttp.open("GET", "include/php/omamtdtdv.php?custId=" + custId + "&panelName=" + panelName + "&showPanel=AdvMetalPanel", true);
    else
        xmlhttp.open("GET", "include/php/omammtdv.php?custId=" + custId + "&panelName=" + panelName + "&showPanel=AdvMetalPanel", true);
    xmlhttp.send();
}
/***********End code to add function for adv metal @Author:SHRI14JAN15*************/
//********************* Close Add New Udhaar Div ****************************
function closeAdvMetalDiv() {
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
//********************* Show Udhaar Deposit Div ****************************
/***********End code to change Div like addNewUdhaarDiv for adv metal @Author:ANUJA12JAN16*************/

function addAdvanceMetalDetails(obj) {
//    alert(document.getElementById("advMetalOccCheck").value+" "+document.getElementById("advMetalTimePeriod").value);
    if (document.getElementById("paidCounter").value > 0) {
        alert("You can not update details after EMI has been completed !");
        return false;
    } else if ((document.getElementById("advMetalId").value != '') && (document.getElementById("advMetalOccCheck").value != document.getElementById("advMetalTimePeriod").value)) {
        alert("You can not update days, once added!");
        return false;
    } else {

        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("advMetalSubmit").style.visibility = "hidden";
        if (validateAdvMetalInputs(obj)) {
            return true;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("advMetalSubmit").style.visibility = "visible";
        }
        return false;
    }
    return false;
}
function validateAdvMetalInputs(obj) {
    if (validateSelectField(document.getElementById("advMetalFirmId").value, "Please select Firm!") == false) {
        document.getElementById("advMetalFirmId").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBDay").value, "Please select Date Day!") == false) {
        document.getElementById("DOBDay").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBMonth").value, "Please select Date Month!") == false) {
        document.getElementById("DOBMonth").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBYear").value, "Please select Date Year!") == false) {
        document.getElementById("DOBYear").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("advMetalType").value, "Please select metal type!") == false) {
        document.getElementById("advMetalType").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("advMetalDrAccId").value, "Please select DR Account!") == false) {
        document.getElementById("advMetalDrAccId").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("advMetalCrAccId").value, "Please select CR Account!") == false) {
        document.getElementById("advMetalCrAccId").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("advMetalWeight").value, "Please enter metal weight!") == false) {
        document.getElementById("advMetalWeight").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("advMetalSerialNo").value, "Please enter Serial Number!") == false ||
            validateNum(document.getElementById("advMetalSerialNo").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("advMetalSerialNo").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("advMetalAdditionalWeight").value, "Please enter additional weight!") == false) {
        document.getElementById("advMetalAdditionalWeight").focus();
        return false;
    }

    else if (validateEmptyField(document.getElementById("advMetalTimePeriod").value, "Please enter time period!") == false) {
        document.getElementById("advMetalTimePeriod").focus();
        return false;
    }
    return true;
}
/**********Start code to add function to get debit account @Author:SHRI16JAN15*********/
function getAdvMetalType(div, id, keyCodeInput, panelName, firmNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(div).innerHTML = xmlhttp.responseText;
            if (keyCodeInput == 40 || keyCodeInput == 38) {
                document.getElementById('addItemMetSelBy').focus();
                document.getElementById('addItemMetSelBy').options[0].selected = true;
            }
        }
    };
    xmlhttp.open("POST", "include/php/omammtsl.php?id=" + id + "&div=" + div + "&panelName=" + panelName + "&firmNo=" + firmNo, true);
    xmlhttp.send();
}
/**********End code to add function to get debit account @Author:SHRI16JAN15*********/
var selFirmNo;
var panelNameDiv;
var addstockDiv;
var nextFieldFirmAccId;
var advMetalPanelMetalType;
function changeAdvMetalDrAccount(selectedMetalType, panel, firmNo, nextFieldId) {

    var poststr = "metalType=" + encodeURIComponent(selectedMetalType)
            + "&firmNo=" + encodeURIComponent(firmNo)
            + "&panel=" + encodeURIComponent(panel);
    nextFieldFirmAccId = nextFieldId;
    addstockDiv = panel;
    advMetalPanelMetalType = selectedMetalType;
    change_Adv_Metal_Dr_Account('include/php/omamacdv.php', poststr);
}

function change_Adv_Metal_Dr_Account(url, parameters) {

    loadXMLDoc2();
    xmlhttp2.onreadystatechange = alertchangeAdvMetalDrAccount;
    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.send(parameters);
}
function alertchangeAdvMetalDrAccount() {

    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//        alert(xmlhttp2.responseText);
        if (addstockDiv == 'AdvMetal')//change in condition to check for item repair panel @AUTHOR: SANDY26AUG13
        {
            document.getElementById("selAccountDiv").innerHTML = xmlhttp2.responseText;
        } else {
            document.getElementById("selAccountDiv").innerHTML = xmlhttp2.responseText;
            document.getElementById('advMetalDrAccId').focus();
        }
        changeAdvMetalPanelMetalRate(advMetalPanelMetalType);
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}

function changeAdditionalWeightField(selectedWeightType, panel, firmNo, advMetalAddWTType)
{
    var poststr = "weightType=" + encodeURIComponent(selectedWeightType)
            + "&firmNo=" + encodeURIComponent(firmNo)
            + "&panel=" + encodeURIComponent(panel)
            + "&advMetalAddWTType=" + encodeURIComponent(advMetalAddWTType);
    panelNameDiv = panel;
    change_Additional_Weight_Field('include/php/omamtpdv.php', poststr);
}

function change_Additional_Weight_Field(url, parameters)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertchangeAdditionalWeightField;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertchangeAdditionalWeightField()
{
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        if (addstockDiv == 'AdvMetal')//change in condition to check for item repair panel @AUTHOR: SANDY26AUG13
        {
            document.getElementById("adMetalWeightSelectDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("adMetalWeightSelectDiv").innerHTML = xmlhttp.responseText;
        }
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}

function changeAdvMetalStatus(emiNo, emiPaidDD, emiPaidMM, emiPaidYY, emiStatus, serialNo, custId, firmId, advMetalId,
        advMetalDOB, advMetalTransId, advMetalJrnlId, emiOccur, totWT, initialWT, additionalWT, totWTType, finalAmnt)
{
//    alert('finalAmnt'+finalAmnt);
    if (validateSelectField(document.getElementById("DOBDay" + advMetalTransId + emiNo).value, "Please select Day!") == false) {
        document.getElementById("DOBDay" + advMetalTransId + emiNo).focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBMonth" + advMetalTransId + emiNo).value, "Please select Month!") == false) {
        document.getElementById("DOBMonth" + advMetalTransId + emiNo).focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBYear" + advMetalTransId + emiNo).value, "Please select Year!") == false) {
        document.getElementById("DOBYear" + advMetalTransId + emiNo).focus();
        return false;
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
            var poststr = "emiNo=" + emiNo
                    + "&emiPaidDate=" + emiPaidDate
                    + "&emiStatus=" + emiStatus
                    + "&serialNo=" + serialNo
                    + "&custId=" + custId
                    + "&firmId=" + firmId
                    + "&advMetalId=" + advMetalId
                    + "&advMetalDOB=" + advMetalDOB
                    + "&advMetalTransId=" + advMetalTransId
                    + "&advMetalJrnlId=" + advMetalJrnlId
                    + "&emiOccur=" + emiOccur
                    + "&totWT=" + totWT
                    + "&initialWT=" + initialWT
                    + "&additionalWT=" + additionalWT
                    + "&totWTType=" + totWTType
                    + "&finalAmnt=" + finalAmnt;
            xmlhttp.open("POST", "include/php/omadmtein.php?" + poststr, true);
            xmlhttp.send();
        }
    }
}

function getAdvanceMetalUpdateDiv(advMetalId, panelDiv)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addNewUdhaarDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("advMetalOccurrence").setAttribute("disabled", "disabled");
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelDiv == 'AdvMetalEMI')
        xmlhttp.open("GET", "include/php/omammtdv.php?advMetalId=" + advMetalId + "&panelName=UpdateAdvMetal", true);
//    else
//        xmlhttp.open("GET", "include/php/omuanwdt.php?advMetalId=" + advMetalId + "&panelName=" + 'UpdateUdhaar', true);
    xmlhttp.send();
}

function deleteCustAdvMetalDetails(custId, firmId, advMetalId, advMetalJrnlId, advMetalSerialNum, advMetalDate, advMetalWeight, advMetalWeightType)
{
    document.getElementById("ajaxLoadAdvMoneyDepositMon" + advMetalId).style.visibility = "visible";
    confirm_box = confirm("Do you really want to Permanent Delete this Advance Metal Details?");
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("ajaxLoadAdvMoneyDepositMon" + advMetalId).style.visibility = "hidden";
                document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
                document.getElementById("DOBDay").focus();
            } else {
                document.getElementById("ajaxLoadAdvMoneyDepositMon" + advMetalId).style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omamtdelc.php?custId=" + custId + "&firmId=" + firmId + "&advMetalId=" + advMetalId
                + "&advMetalJrnlId=" + advMetalJrnlId + "&advMetalSerialNum=" + advMetalSerialNum + "&advMetalDate=" + advMetalDate + "&advMetalWeight=" + advMetalWeight + "&advMetalWeightType=" + advMetalWeightType, true);
        xmlhttp.send();
    }
    else {
        document.getElementById("ajaxLoadAdvMoneyDepositMon" + advMetalId).style.visibility = "hidden";
    }

}

function showAdvMetalPaymentPanel(custId, admtId, totMetalWt, amtReturnLeft, firmId, metalRate, serialNum, metalType)
{
//    alert(metalType);
    if (totMetalWt == 0) {
        alert('Advance metal is not selected');
    }
    else {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("advMetalDepositMonButDiv" + admtId).style.visibility = "hidden";
                document.getElementById("ajaxLoadAdvMoneyDepositMon" + admtId).style.visibility = "hidden";
                document.getElementById("admnDepositMoneyDiv" + admtId).innerHTML = xmlhttp.responseText;
                document.getElementById("payAdvMetalDrAccId").focus();
            } else {
                document.getElementById("advMetalDepositMonButDiv" + admtId).style.visibility = "hidden";
                document.getElementById("ajaxLoadAdvMoneyDepositMon" + admtId).style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omamtpydv.php?custId=" + custId + "&admtId=" + admtId + "&amtReturnLeft=" + amtReturnLeft +
                "&firmId=" + firmId + "&serialNum=" + serialNum + "&totMetalWt=" + totMetalWt + "&metalRate=" + metalRate + "&metalType=" + metalType, true);
        xmlhttp.send();
    }
}

function advMetalDepositMoney(obj, admtId) {
    document.getElementById("ajaxLoadAdvMoneyDepSubmit" + admtId).style.visibility = "visible";
    document.getElementById("admnDepMetalSubButDiv" + admtId).style.visibility = "hidden";
    var depositAmt = parseInt(document.getElementById("admnDepositAmount" + admtId).value);
    var leftAmt = parseInt(document.getElementById("admnAmtLeft" + admtId).value);
    if (depositAmt > leftAmt) {
        alert("Deposit amount(" + depositAmt + ") should not more than main amount(" + leftAmt + ")!");
        document.getElementById("ajaxLoadAdvMoneyDepSubmit" + admtId).style.visibility = "hidden";
        document.getElementById("admnDepMetalSubButDiv" + admtId).style.visibility = "visible";
    }
    else {
        if (validateAdvMetalDepositMoneyInputs(obj, admtId)) {
            return true;
        }
        else {
            document.getElementById("ajaxLoadAdvMoneyDepSubmit" + admtId).style.visibility = "hidden";
            document.getElementById("admnDepMetalSubButDiv" + admtId).style.visibility = "visible";
        }
        return false;
    }
}

function validateAdvMetalDepositMoneyInputs(obj, admnId) {
    if (validateEmptyField(document.getElementById("admnDepositAmount" + admnId).value, "Please enter Deposit Amount!") == false ||
            validateNumWithDot(document.getElementById("admnDepositAmount" + admnId).value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("admnDepositAmount" + admnId).focus();
        return false;
    }
    else if (document.getElementById("admnDepositAmount" + admnId).value == 0) {
        alert('Please enter Correct Amount!');
        document.getElementById("admnDepositAmount" + admnId).focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBDay").value, "Please select Deposit Amount Date!") == false) {
        document.getElementById("DOBDay").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBMonth").value, "Please select Deposit Amount Date!") == false) {
        document.getElementById("DOBMonth").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBYear").value, "Please select Deposit Amount Date!") == false) {
        document.getElementById("DOBYear").focus();
        return false;
    }
    return true;
}

function closeAdvMetalDepositDiv(admtDepId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("advMetalDepositMonButDiv" + admtDepId).style.visibility = "visible";
            document.getElementById("admnDepositMoneyDiv" + admtDepId).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxCloseAdvMoneyDepositMonDiv" + admtDepId).innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}

function changeAdvMetalPanelMetalRate(metalType) {
    var poststr = "metalType=" + encodeURIComponent(metalType) +
            "&panelName=" + encodeURIComponent(addstockDiv);
    change_Adv_Metal_Panel_Metal_Rate('include/php/ommrggdr.php', poststr);
    return false;
}

function change_Adv_Metal_Panel_Metal_Rate(url, parameters) {

    loadXMLDoc2();
    xmlhttp2.onreadystatechange = alertChangeAdvMetalPanelMetalRate;
    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.send(parameters);
}
function alertChangeAdvMetalPanelMetalRate() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        if (addstockDiv == 'AdvMetal') {
            document.getElementById("metalRateDiv").innerHTML = xmlhttp2.responseText;
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}

function getAdvMetalRate(metalType, keyCodeInput, div, id) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(div).innerHTML = xmlhttp.responseText;
            if (keyCodeInput == 40 || keyCodeInput == 38) {
                document.getElementById('goldIdListDivToAddGoldIdSelect').focus();
                document.getElementById('goldIdListDivToAddGoldIdSelect').options[0].selected = true;
            }
        }
    };
    xmlhttp.open("POST", "include/php/omammtrt.php?metalType=" + metalType + "&div=" + div + "&id=" + id, true);
    xmlhttp.send();
}

function calcAdvMetalValuation()
{
//    alert(document.getElementById('advMetalValuation').value);


    var wtType = document.getElementById('advMetalWeightType').value;
    var wt = document.getElementById('advMetalWeight').value;
    var addWt = document.getElementById('advMetalAdditionalWeight').value;
    var metalType = document.getElementById('advMetalType').value;
    var metalRate = document.getElementById('advMetalMetalRate').value;
    var totWt = parseFloat(wt) + parseFloat(addWt);
    document.getElementById('advMetalValuation').value = '0.0';
//alert(document.getElementById('advMetalValuation').value);


    if (wt != '')
    {
        if (metalType == 'Gold') {
            if (wtType == 'MG') {
                document.getElementById('advMetalValuation').value = Math.round((totWt * metalRate) / document.getElementById('gmWtInMg').value).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('advMetalValuation').value = Math.round((totWt * metalRate) / document.getElementById('gmWtInGm').value).toFixed(2);
            } else {
                document.getElementById('advMetalValuation').value = Math.round((totWt * metalRate * document.getElementById('gmWtInKg').value)).toFixed(2);
            }
        }
        else if (metalType == 'Silver') {
            if (wtType == 'MG') {
                document.getElementById('advMetalValuation').value = Math.round((totWt * metalRate) / document.getElementById('srGmWtInMg').value).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('advMetalValuation').value = Math.round((totWt * metalRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
            } else {
                document.getElementById('advMetalValuation').value = Math.round((totWt * metalRate * document.getElementById('srGmWtInKg').value)).toFixed(2);
            }
        }

    }
    if (document.getElementById('advMetalValuation').value == 'NaN' || document.getElementById('advMetalValuation').value == '')//Start code to change position of if condition @Author:SHRI25MAR15
    {
        document.getElementById('advMetalValuation').value = '0.0';
    }//End code to change position of if condition @Author:SHRI25MAR15
    return false;
}


function showPaidAdvanceMetalDetailsDiv(custId, firmId)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "hidden";
            document.getElementById("custAdvanceMetalDetailsDiv").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omadmtud.php?custId=" + custId + "&firmId=" + firmId, true);
    xmlhttp.send();
}
/************Start code to add function for 61L stock @Author:SHRI11FEB15*************/
function update61BarCode(omLayoutOptionTop, omLayoutOptionTopValue, omLayoutOptionLeft, omLayoutOptionLeftValue,
        fontSize, fontSizeValue, slipWidth, slipWidthValue, slipHeight, slipHeightValue,
        noOfRows, noOfRowsValue, tailLength, tailLengthValue) {
    loadXMLDoc();
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
    var postStr = 'omLayoutOptionTop=' + omLayoutOptionTop + '&omLayoutOptionTopValue=' + omLayoutOptionTopValue
            + '&omLayoutOptionLeft=' + omLayoutOptionLeft + '&omLayoutOptionLeftValue=' + omLayoutOptionLeftValue
            + '&fontSize=' + fontSize + '&fontSizeValue=' + fontSizeValue
            + '&slipWidth=' + slipWidth + '&slipWidthValue=' + slipWidthValue
            + '&slipHeight=' + slipHeight + '&slipHeightValue=' + slipHeightValue
            + '&noOfRows=' + noOfRows + '&noOfRowsValue=' + noOfRowsValue
            + '&tailLength=' + tailLength + '&tailLengthValue=' + tailLengthValue;
    xmlhttp.open("POST", "include/php/ombcbcup.php?" + postStr, true);
    xmlhttp.send();
}
/************End code to add function for 61L stock @Author:SHRI11FEB15*************/
/*******START CODE TO Delete 61L Slip @AUTHOR:SHRI17FEB15***********/
function deleteItemBarCode61L(barCodeSlipDiv, closeDivId, barCodePrintId, preId, postId) {
    confirm_box = confirm("Do you really want to Delete this Item Bar Code Slip?");
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
        xmlhttp.open("POST", "include/php/ogibppdl_1.php?barCodePrintId=" + barCodePrintId + "&preId=" + preId + "&postId=" + postId, true);
        xmlhttp.send();
    }
    function closeBarCodeSlipCloseButt()
    {
        document.getElementById(closeDivId).innerHTML = "";
    }
}
/*******START CODE TO Delete 61L Slip @AUTHOR:SHRI17FEB15***********/
/*********Start code to add metal div @Author:SHRI05JAN15**********/
function getRepairItemMoreRawMetalDiv(metalCnt, panelName, firmId, rawGdPreId, rawGdPostId, metalType, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId,
        metalPanelName, mcntr, rawPreId, rawPostId) {
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
            + "&mcntr=" + mcntr + "&rawPreId=" + rawPreId + "&rawPostId=" + rawPostId;
    if (panelName == 'SuppRawDep')
        get_more_raw_metal_div('include/php/ogwurwdv.php', poststr);
    else
        get_more_raw_metal_div('include/php/ogcmrpydt.php', poststr);
    return false;
}
/*********End code to add metal div @Author:SHRI05JAN15*******************/
/*****Start code to repair panel @Author:SHRI05JAN15*********/
function getRepairItemRawMetalType(panelName, metalType, metalCount, firmId, rawGdPreId, rawGdPostId, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId, metalTypePanel, cntr) {
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
//    alert("metaltype=="+metalType);

    xmlhttp.open("POST", "include/php/ogcmrpydt.php?panelName=" + panelName + "&metalType=" + metalType +
            "&metalDivCount=" + metalCount + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&rawSlPreId=" + rawSlPreId + "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId + "&rawAlPostId=" + rawAlPostId + "&firmId=" + firmId +
            "&metalTypePanel=" + metalTypePanel + "&cntr=" + cntr, true);
    xmlhttp.send();
}
/****************End code to repair panel @Author:SHRI05JAN15***************/
/*********Start code to get accounts field @Author:SHRI17FEB15**********/
function get61LBarCodeField(option, value) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("barCodePrintPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/olggbcad_1.php?option=" + option + "&value=" + value, true);
    xmlhttp.send();
}
/*********End code to get accounts field @Author:SHRI17FEB15**********/
/*****************Start code to change parameters of a function of udhaar search list @Author:SHRI26FEB15.**************************/
/*****************Start code to add udhaar search list @Author:SHRI25FEB15.**************************/
function searchUdhaarPanel(documentRootPath, searchColumn, searchValue, selFirmId, rowsPerPage) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {

        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("udhharListDiv").innerHTML = xmlhttp.responseText;
            //alert(xmlhttp.responseText);
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omuulstp.php?searchColumn="
            + searchColumn + "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage, true);
    xmlhttp.send();
}
/*****************End code to add udhaar search list @Author:SHRI25FEB15.**************************/
/*****************Start code to change parameters of a function of udhaar search list @Author:SHRI26FEB15.**************************/
/*****************Start code to add function for sorting of udhaar list @Author:SHRI26FEB15**************/
function sortUdhaarPanel(documentRootPath, sortKeyword, selFirmId, rowsPerPage) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("udhharListDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omuulstp.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId +
            "&rowsPerPage=" + rowsPerPage, true);
    xmlhttp.send();
}

/*****************End code to add function for sorting of udhaar list @Author:SHRI26FEB15**************/
/*****************Start code to add function to get fine wt by nt wt or gs wt of item puchase panel @Author:SHRI04MAR15**************/
function getItemPurchaseFfnWt(div, id, keyCodeInput) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById(div).innerHTML = xmlhttp.responseText;
            if (keyCodeInput == 40 || keyCodeInput == 38) {
                document.getElementById('itemPurchaseWtBy').focus();
                document.getElementById('itemPurchaseWtBy').options[0].selected = true;
            }
        }
    };
    xmlhttp.open("POST", "include/php/ogipfwsl.php?div=" + div, true);
    xmlhttp.send();
}
/*****************End code to add function to get fine wt by nt wt or gs wt of item puchase panel @Author:SHRI04MAR15**************/
//**************************** Get Girvi Transfer Info Pop UP @Author:SHRI13MAY15*****************************************
function getGirviTransferInfoPopUp(custId, girviId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("display_girvi_info_popup").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("display_girvi_info_popup").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/olggtpop.php?custId=" + custId + "&girviId=" + girviId, true); //change in filename @AUTHOR: SANDY22NOV13
    xmlhttp.send();
}
//**************************** Get Girvi Transfer Info Pop UP @Author:SHRI13MAY15*****************************************
/****************************START Code To Add Function for hide girvi pop up in cust home @Author:SHRI13MAY15*****************************************/
function getGirviTransInfoPopUpHideInCustHome(girviId) {
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
/****************************END Code To Add Function for hide girvi pop up in cust home @Author:SHRI13MAY15*****************************************/
//**************************** Hide Girvi Info POP UP @Author:SHRI13MAY15*****************************************
function getGirviTransInfoPopUpHide(girviId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("display_girvi_info_popup").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("display_girvi_info_popup").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
/**********Start code to add parameter root path @Author:SHRI14MAY15****************/
function searchGirviTransByGirviId(girviId, documentRootPath) {
//button.style.visibility = "hidden";
    poststr = "girviId=" + encodeURIComponent(girviId);
    search_girvi_trans_by_girviId("http://" + documentRootPath + "/include/php/olgsgidd.php", poststr); //change in filename @AUTHOR: SANDY22NOV13 
}
/**********End code to add parameter root path @Author:SHRI14MAY15****************/
/*********Start code to add search_girvi_trans_by_girviId,alertSearchGirviTransByGirviId @Author:SHRI14MAY15*************/
function search_girvi_trans_by_girviId(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchGirviTransByGirviId;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchGirviTransByGirviId() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "hidden";
        parent.document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        //refreshMainRightDiv();
    } else {
        document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "visible";
    }
}
/*********End code to add search_girvi_trans_by_girviId,alertSearchGirviTransByGirviId @Author:SHRI14MAY15*************/
/*****Start code to add function for customer purchase balance EMI @Author:SHRI15MAY15*******/
function getEMIOption(emiVal, custId, firmId, totBalance, payPreInvoiceNo, payInvoiceNo, slPrId, udhaarDate, invoiceNo, payPanelName, panelName, totBalance) {
//    alert(firmId);
    loadXMLDoc2();
    xmlhttp2.onreadystatechange = function () {
        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("indicSellEMIOpt").innerHTML = xmlhttp2.responseText;
            document.getElementById('selROIValue').focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp2.open("POST", "include/php/ogademop.php?custId=" + custId + "&firmId=" + firmId + "&emiVal=" + emiVal + "&totBalance=" + totBalance + "&payPreInvoiceNo=" + payPreInvoiceNo + "&payInvoiceNo=" + payInvoiceNo + "&slPrId=" + slPrId + "&udhaarDate=" + udhaarDate + "&invoiceNo=" + invoiceNo + "&panelName=" + panelName + "&payPanelName=" + payPanelName, true);
    xmlhttp2.send();
}
/*****End code to add function for customer purchase balance EMI @Author:SHRI15MAY15*******/
/*****Start code to add function for customer purchase balance EMI ROI search @Author:SHRI15MAY15*******/
/*****Start code to add parameter nextFieldId @Author:SHRI16MAY15*******/
function searchROIForEMI(roiValue, intType, girviId, custId, panelName, keyCodeInput, girviDOB, girviFirmId, girviSerialNum, nextFieldId) {
//    keyCodeForRoiValue = keyCodeInput;
//    keyCodeForRoiValueOption = 0;
    var poststr = "ROIValue=" + encodeURIComponent(roiValue) +
            "&interestType=" + encodeURIComponent(intType) +
            "&girviId=" + encodeURIComponent(girviId) +
            "&custId=" + encodeURIComponent(custId) +
            "&panelName=" + encodeURIComponent(panelName) +
            "&girviDOB=" + encodeURIComponent(girviDOB) +
            "&girviFirmId=" + encodeURIComponent(girviFirmId) +
            "&girviSerialNum=" + encodeURIComponent(girviSerialNum) +
            "&nextFieldId=" + encodeURIComponent(nextFieldId);
    search_roi_for_emi('include/php/ogcsroisl.php', poststr);
}
/*****End code to add parameter nextFieldId @Author:SHRI16MAY15*******/
function search_roi_for_emi(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchRoiForEMI;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertSearchRoiForEMI() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("roiListDivToAddROI").innerHTML = xmlhttp.responseText;
        document.getElementById('roiListToAddRoiSelect').focus();
        document.getElementById('selROIValue').focus();
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/*****Start code to add parameter nextFieldId @Author:SHRI16MAY15*******/
function getROIValByIdForEMI(documentRootPath, roiId, girviId, custId, panelName, intType, girviDOB, girviFirmId, girviSerialNum, nextFieldId) {
    updateRoiValPanelName = panelName;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("roiSelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    }

    xmlhttp.open("POST", "include/php/ogroisid.php?roiId=" + roiId + "&girviId=" + girviId + "&custId=" + custId +
            "&panelName=" + panelName + "&intType=" + intType + "&girviDOB=" + girviDOB + "&girviFirmId=" + girviFirmId + "&girviSerialNum=" + girviSerialNum + "&nextFieldId=" + nextFieldId, true);
    xmlhttp.send();
}
/*****End code to add parameter nextFieldId @Author:SHRI16MAY15*******/
function setSellPurchaseEMI()
{
    if (validateSellPurchaseEMIInputs()) {


        var poststr = "firmId=" + encodeURIComponent(document.sell_purchase_EMI.firmId.value)
                + "&payPreInvoiceNo=" + encodeURIComponent(document.sell_purchase_EMI.payPreInvoiceNo.value)
                + "&payInvoiceNo=" + encodeURIComponent(document.sell_purchase_EMI.payInvoiceNo.value)
                + "&slPrId=" + encodeURIComponent(document.sell_purchase_EMI.slPrId.value)
                + "&custId=" + encodeURIComponent(document.sell_purchase_EMI.custId.value)
                + "&udhaarDOB=" + encodeURIComponent(document.sell_purchase_EMI.udhaarDOB1.value)
                + "&balanceLeft=" + encodeURIComponent(document.sell_purchase_EMI.balanceLeft.value)
                + "&roiValue=" + encodeURIComponent(document.sell_purchase_EMI.selROIValue.value)
                + "&roiId=" + encodeURIComponent(document.sell_purchase_EMI.selROI.value)
                + "&EMINoOfDays=" + encodeURIComponent(document.sell_purchase_EMI.EMINoOfDays.value)
                + "&EMIOccurrences=" + encodeURIComponent(document.sell_purchase_EMI.EMIOccurrences.value);
//        alert(document.sell_purchase_EMI.balanceLeft.value);
        set_sell_purchase_EMI('include/php/ogspemad.php', poststr);
    }
}
function set_sell_purchase_EMI(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSetSellPurchaseEMI;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertSetSellPurchaseEMI() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}

function validateSellPurchaseEMIInputs()
{
    if (validateSelectField(document.getElementById("selROIValue").value, "Please select ROI!") == false) {
        document.getElementById("selROIValue").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("EMINoOfDays").value, "Please enter number of days!") == false) {
        document.getElementById("EMINoOfDays").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("EMIOccurrences").value, "Please enter emi occurrences!") == false) {
        document.getElementById("EMIOccurrences").focus();
        return false;
    } else {
        return true;
    }
    return false;
}
/*****End code to add function for customer purchase balance EMI @Author:SHRI15MAY15*******/
/*****************Start code to add function to sort pending emi list @Author:SHRI15MAY15*************/
function sortPendingUdhaarEMIList(documentRootPath, sortKeyword, selFirmId, div, panel, timePeriod) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(div).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omsemilt.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&panel=" + panel + "&timePeriod=" +
            timePeriod, true);
    xmlhttp.send();
}
/*****************End code to add function to sort pending emi list @Author:SHRI15MAY15*************/
/*****************Start code to add function to search pending emi list @Author:SHRI15MAY15*************/
function searchPendingUdhaarEMIList(documentRootPath, searchColumn, searchValue, selFirmId, div, panel, timePeriod) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(div).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omsemilt.php?searchColumn="
            + searchColumn + "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&panel=" + panel + "&timePeriod=" + timePeriod, true);
    xmlhttp.send();
}
/***************Start code to change function @Author:SHRI04JUN15****************/
/*****************End code to add function to search pending emi list @Author:SHRI15MAY15*************/
//Start code to add function @Author:SHRI15MAY15
function addPaymentItemPurchase() {
    if ((document.getElementById("upPanel").value == 'SellPayUp' || document.getElementById("upPanel").value == 'SellDetUpPanel') && parseFloat(document.getElementById("invoiceRow").value) > 0) {
        alert('You can not update this Item');
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("paySubButtDiv").style.visibility = "hidden";
        payPanelName = document.getElementById("payPanelName").value;
        var udhaarEMIChk = document.getElementById("udhaarEMICheck").checked;
        if (payPanelName == 'StockPayment' || payPanelName == 'StockPayUp') {
            var subPanel = document.getElementById("suppSubPanel").value;
            var itemMainPanel = document.getElementById("itemMainPanel").value;
            if (itemMainPanel == 'addByInv') {
//  var subPanel = document.getElementById("subPanel").value;
//  if (subPanel == 'SuppPurByInv') {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("paySubButtDiv").style.visibility = "visible";
                if (validateSelectField(document.getElementById("firmId").value, "Please select Firm Id!") == false) {
                    document.getElementById("firmId").focus();
                    return false;
                }
                suppItmEntered = 0;
                for (var dc = 1; dc <= getSuppItemDiv; dc++) {
                    if ((document.getElementById('suppItemDel' + dc).value != 'Deleted')) {
                        if (validateEmptyField(document.getElementById("suppItemGsWt" + dc).value, "Please enter gross weight of lot" + dc + "!") == false) {
                            document.getElementById("suppItemGsWt" + dc).focus();
                            return false;
                        } else if (validateEmptyField(document.getElementById("suppItemNtWt" + dc).value, "Please enter net weight of lot" + dc + "!") == false) {
                            document.getElementById("suppItemNtWt" + dc).focus();
                            return false;
                        } else if (validateEmptyField(document.getElementById("suppItemFnWt" + dc).value, "Please enter fine weight of lot" + dc + "!") == false) {
                            document.getElementById("suppItemFnWt" + dc).focus();
                            return false;
                        } else if (validateEmptyField(document.getElementById("suppItemFinVal" + dc).value, "Please enter final valuation of lot" + dc + "!") == false) {
                            document.getElementById("suppItemFinVal" + dc).focus();
                            return false;
                        }
                    }
                    suppItmEntered++;
                }
                document.getElementById("noOfSuppItem").value = suppItmEntered;
                // }
                confirm_box = confirm(addAlertMess + " Do you really want to continue!");
                if (confirm_box != true) {
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("paySubButtDiv").style.visibility = "visible";
                    return false;
                }

            }

        }
//    alert(udhaarEMIChk);
        if (udhaarEMIChk == true) { //alert(udhaarEMIChk);
            if ((document.getElementById("udhaarId").value != '') && (document.getElementById("udharOccCheck").value != document.getElementById("EMIOccurrences").value)) {
                alert("You can not update EMI occurences, once added!");
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("paySubButtDiv").style.visibility = "visible";
                return false;
            } else {
                if (validateSelectField(document.getElementById("selROIValue").value, "Please select ROI!") == false) {
                    document.getElementById("selROIValue").focus();
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("paySubButtDiv").style.visibility = "visible";
                    return false;
                } else if (validateEmptyField(document.getElementById("EMINoOfDays").value, "Please enter number of days!") == false) {
                    document.getElementById("EMINoOfDays").focus();
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("paySubButtDiv").style.visibility = "visible";
                    return false;
                } else if (validateEmptyField(document.getElementById("EMIOccurrences").value, "Please enter emi occurrences!") == false) {
                    document.getElementById("EMIOccurrences").focus();
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("paySubButtDiv").style.visibility = "visible";
                    return false;
                }
            }
//        return false;
        }
        if (((payPanelName == 'StockPayment' || payPanelName == 'StockPayUp') && itemMainPanel == 'addByItems') || payPanelName == 'SuppAddOrder' || payPanelName == 'SuppOrderUp') {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("paySubButtDiv").style.visibility = "visible";
            var prefix = document.getElementById("prefix").value;
            if (document.getElementById('payButClickId').value == 'true' && document.getElementById('noOfItemsInTable').value != 0) {

            } else {
                if (document.getElementById("itemSubPanel").value == 'addByItemsUp' || document.getElementById("itemSubPanel").value == 'itemsAddUp' || document.getElementById('simItemPanel').value == 'SimilarItem' ||
                        document.getElementById("itemPanel").value == 'SuppOrderUp') {
                    if (noOfCrystal == '' || noOfCrystal == undefined) {
                        noOfCrystal = document.getElementById("noOfCry").value;
                    }
                }
                if (validateSelectField(document.getElementById("firmId").value, "Please select Firm!") == false) {
                    document.getElementById("firmId").focus();
                    return false;
                }
                else if ((document.getElementById("addItemMetal").value != 'Other') && validateEmptyField(document.getElementById("addItemMetalRate").value, "Please enter Metal Rate!") == false) {
                    document.getElementById("addItemMetalRate").focus();
                    return false;
                }
                else if (validateEmptyField(document.getElementById("addItemId").value, "Please enter Item Id!") == false ||
                        validateNum(document.getElementById("addItemId").value, "Accept only numeric characters without space character!") == false) {
                    document.getElementById("addItemId").focus();
                    return false;
                }
                else if (validateEmptyField(document.getElementById("addItemName").value, "Please enter Item Name!") == false) {
                    document.getElementById("addItemName").focus();
                    return false;
                }
                else if (validateEmptyField(document.getElementById("addItemPieces").value, "Please enter Item Pieces!") == false ||
                        validateNum(document.getElementById("addItemPieces").value, "Accept only numeric characters without space!") == false) {
                    document.getElementById("addItemPieces").focus();
                    return false;
                }
                else if (validateEmptyField(document.getElementById("addItemGrossWeight").value, "Please enter Gross Weight!") == false ||
                        validateNumWithDot(document.getElementById("addItemGrossWeight").value, "Accept only numeric characters without space!") == false) {
                    document.getElementById("addItemGrossWeight").focus();
                    return false;
                } else if (document.getElementById('panelSimilarDiv').value != 'NoSimilarItem') {
                    if (document.getElementById("addItemNetWeight").value == '') {
                        document.getElementById("addItemNetWeight").value = document.getElementById("addItemGrossWeight").value;
                        calItemPrice();
                    }
                    return true;
                }
                else if (document.getElementById('panelSimilarDiv').value != 'NoSimilarItem') {
                    if (validateEmptyField(document.getElementById("addItemNetWeight").value, "Please enter Net Weight!") == false ||
                            validateNumWithDot(document.getElementById("addItemNetWeight").value, "Accept only numeric characters without space!") == false) {
                        document.getElementById("addItemNetWeight").focus();
                        return false;
                    }
                } else if ((document.getElementById("addItemMetal").value != 'Other') && validateSelectField(document.getElementById("addItemTunch").value, "Please select Item Tunch or Purity!") == false) {
                    document.getElementById("addItemTunch").focus();
                    return false;
                } else if (validateEmptyField(document.getElementById("addItemFinalVal").value, "Please enter Item Final Valuation!") == false ||
                        validateNumWithDot(document.getElementById("addItemFinalVal").value, "Accept only numeric characters without space!") == false) {
                    document.getElementById("addItemFinalVal").focus();
                    return false;
                } else if (noOfCrystal != '' && noOfCrystal != undefined && noOfCrystal != '0') {
                    suppCryEntered = 0;
                    for (var cry = 1; cry <= noOfCrystal; cry++) {
                        if (document.getElementById("del" + cry).value != 'Deleted') {
                            if (validateEmptyField(document.getElementById("addItemCryGSW" + cry).value, "Please enter Crystal Weight " + cry + "!") == false) {
                                document.getElementById("addItemCryGSW" + cry).focus();
                                return false;
                            } else if (validateEmptyField(document.getElementById("addItemCryRate" + cry).value, "Please enter Crystal Rate " + cry + "!") == false) {
                                document.getElementById("addItemCryRate" + cry).focus();
                                return false;
                            } else if (validateEmptyField(document.getElementById("addItemCryVal" + cry).value, "Please enter Crystal Valuation " + cry + "!") == false) {
                                document.getElementById("addItemCryVal" + cry).focus();
                                return false;
                            }
                            suppCryEntered++;
                        }
                    }
                    document.getElementById("addItemCryCount").value = suppCryEntered;
                }

            }
        }
//    alert(payPanelName);
        if (validateAddNewSuppInvoice(payPanelName)) {
            if (payPanelName == 'StockPayment' || payPanelName == 'SlPrPayment' || payPanelName == 'CustSellPayment' || payPanelName == 'RawPayment'
                    || payPanelName == 'NwOrPayment' || payPanelName == 'SuppAddOrder') {
                document.getElementById("totMetal").value = getMetalDiv;
            } else if (payPanelName == 'StockPayUp' || payPanelName == 'SellPayUp' || payPanelName == 'CustSellPayUp' || payPanelName == 'RawPayUp'
                    || payPanelName == 'NwOrPayUp' || payPanelName == 'SuppOrderUp') {
                document.getElementById("totMetal").value = document.getElementById("noOfRawMet").value;
            }
            return true;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("paySubButtDiv").style.visibility = "visible";
            return false;
        }
    }
    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    document.getElementById("paySubButtDiv").style.visibility = "visible";
    return false;
}
//End code to add function @Author:SHRI15MAY15
/***************End code to Add slprinPanel @Author:SHRI15MAY15****************/
/***************End code to change function @Author:SHRI04JUN15****************/
/***************Start code to change function @Author:GAUR09APR16****************/
/***************Start code to change function add LAST THREE VARIABLE @Author:GAUR25may16****************/
function getPaymentDivForItemPurchase(documentRootPath, preInvoiceNo, postInvoiceNo, panelName, navPanel, slprinPanel, custId, totFinGdWt, totFinSlWt, panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (navPanel == 'SellPurchase') {
                document.getElementById("slPrMainDiv").innerHTML = xmlhttp.responseText;
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
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogcmemdv.php?paymentPanelName=" + panelName + "&preInvNo=" + preInvoiceNo + "&postInvNo=" + postInvoiceNo + "&slprinPanel=" + slprinPanel + "&custId=" + custId + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt + "&panel=" + panel, true); // panel added @Author:SHRI07JUL16
//   "&itemValuation=" + totalValuation + "&panelName1=defaultValuation"
    xmlhttp.send();
}
/***************Start code to change function add LAST THREE VARIABLE @Author:GAUR25may16****************/
/***************END code to change function @Author:GAUR09APR16****************/
/***************End code to Add slprinPanel @Author:SHRI15MAY15****************/
/********************Start code to add function @Author:SHRI10JUN15*****************************/
function updateUdhaDepAmt(emiPaidDD, emiPaidMM, emiPaidYY, documentRootPath, custId, udhaarId, udhaDepId, updateUdhaDepIntAmt, updateUdhaDepAmt, uFirmId, uDOB, uSerialNo, udhaDepOption) {

    document.getElementById("updateUdhaDepAmtCloseButton" + udhaDepId).style.visibility = "hidden";
    document.getElementById("updateUdhaDepAmtROIButton" + udhaDepId).style.visibility = "hidden";
    var totEMIAmt = parseFloat(document.getElementById('totEMIAmt' + udhaarId).value);
    var totEMIIntAmt = parseFloat(document.getElementById('totEMIIntAmt' + udhaarId).value);
//    alert(totEMIAmt+' '+updateUdhaDepAmt);
    if (updateUdhaDepAmt == '') {
        alert('Please enter udhaar EMI amount!');
        document.getElementById("updateUdhaDepAmt" + udhaDepId).focus();
    } else if (updateUdhaDepIntAmt == '') {
        alert('Please enter udhaar EMI Interest amount!');
        document.getElementById("updateUdhaDepIntAmt" + udhaDepId).focus();
    } else if (totEMIAmt < updateUdhaDepAmt) {
        alert('Amount should not be greater than total EMI amount!'); //change in line @AUTHOR: SANDY28JAN14
        document.getElementById("updateUdhaDepAmt" + udhaDepId).focus();
    } else if (totEMIIntAmt < updateUdhaDepIntAmt) {
        alert('Interest amount should not be greater than total EMI Interest amount!'); //change in line @AUTHOR: SANDY28JAN14
        document.getElementById("updateUdhaDepIntAmt" + udhaDepId).focus();
    } else {
        confirm_box = confirm("Do you really want to update amount?"); //change in line @AUTHOR: SANDY28JAN14

        if (confirm_box == true)
        {
            var emiPaidDate = emiPaidDD + ' ' + emiPaidMM + ' ' + emiPaidYY;
//            alert(emiPaidDate);
            var poststr = "custId=" + custId + "&udhaarId=" + udhaarId +
                    "&udhaDepId=" + udhaDepId + "&updateUdhaDepAmt=" + updateUdhaDepAmt
                    + "&updateUdhaDepIntAmt=" + updateUdhaDepIntAmt
                    + "&uFirmId=" + uFirmId
                    + "&uDOB=" + uDOB + "&uSerialNo=" + uSerialNo
                    + "&totEMIAmt=" + totEMIAmt +
                    "&totEMIIntAmt=" + totEMIIntAmt +
                    "&emiPaidDate=" + emiPaidDate;
            //alert(poststr);
//            alert(udhaDepOption);
            if (udhaDepOption == 'DIVIDE') {
                update_udha_dep_amt('http://' + documentRootPath + '/include/php/omuuemid.php', poststr);
            } else if (udhaDepOption == 'PAYMENT') {
                update_udha_dep_amt('http://' + documentRootPath + '/include/php/omuuemia.php', poststr);
            }
        }
        else {
            document.getElementById("updateUdhaDepAmt" + udhaDepId).focus();
        }
    }
    document.getElementById("updateUdhaDepAmtCloseButton" + udhaDepId).style.visibility = "visible";
    document.getElementById("updateUdhaDepAmtROIButton" + udhaDepId).style.visibility = "visible";
    return false;
}
function updateUdhaDepAmtByDivide(documentRootPath, custId, udhaarId, udhaDepId, updateUdhaDepAmt, uFirmId, uDOB, uSerialNo) {

    document.getElementById("updateUdhaDepAmtCloseButton" + udhaDepId).style.visibility = "hidden";
    document.getElementById("updateUdhaDepAmtROIButton" + udhaDepId).style.visibility = "hidden";
    var totEMIAmt = parseFloat(document.getElementById('totEMIAmt' + udhaarId).value);
//    alert(totEMIAmt+' '+updateUdhaDepAmt);
    if (updateUdhaDepAmt == '') {
        alert('Please enter udhaar EMI amount!');
        document.getElementById("updateUdhaDepAmt" + udhaDepId).focus();
    } else if (totEMIAmt < updateUdhaDepAmt) {
        alert('Amount should not be greater than total EMI amount!'); //change in line @AUTHOR: SANDY28JAN14
        document.getElementById("updateUdhaDepAmt" + udhaDepId).focus();
    } else {
        confirm_box = confirm("Do you really want to update amount?"); //change in line @AUTHOR: SANDY28JAN14

        if (confirm_box == true)
        {
            var poststr = "custId=" + custId + "&udhaarId=" + udhaarId +
                    "&udhaDepId=" + udhaDepId + "&updateUdhaDepAmt=" + updateUdhaDepAmt
                    + "&uFirmId=" + uFirmId
                    + "&uDOB=" + uDOB + "&uSerialNo=" + uSerialNo
                    + "&totEMIAmt=" + totEMIAmt;
            //alert(poststr);
            update_udha_dep_amt('http://' + documentRootPath + '/include/php/omuuemd.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
        }
        else {
            document.getElementById("updateUdhaDepAmt" + udhaDepId).focus();
        }
    }
    document.getElementById("updateUdhaDepAmtCloseButton" + udhaDepId).style.visibility = "visible";
    document.getElementById("updateUdhaDepAmtROIButton" + udhaDepId).style.visibility = "visible";
    return false;
}

function update_udha_dep_amt(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateUdhaDepAmt;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertUpdateUdhaDepAmt() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/********************End code to add function @Author:SHRI10JUN15*****************************/
/*********Start code add function for unrelease transfer girvi @Author:SHRI15JUN15**************/
function reactiveTransferGirvi(girviId, custId, girviTransId, girviSettleStatus) {
//    alert(girviSettleStatus);
    confirm_box = confirm("Do you really want to Un-release this transfer girvi?");
//   alert(girviTransId);
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("reactiveTransGirvi").style.visibility = "visible";
                document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
                clearMessage();
            }
            else {

                document.getElementById("reactiveTransGirvi").style.visibility = "hidden";
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/olgrgtrn.php?girviId=" + girviId + "&custId=" + custId + "&girviTransId=" + girviTransId + "&girviSettleStatus=" + girviSettleStatus, true);
        xmlhttp.send();
    }
}
/*********End code add function for unrelease transfer girvi @Author:SHRI15JUN15**************/
//**************************** Navigate Girvi *******************************************************************
function navigationGirviTransfer(pageNo, custId, girviId) {
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
    xmlhttp.open("POST", "include/php/olggtgvd.php?page=" + pageNo + "&custId=" + custId + "&girviId=" + girviId, true); //changes in navigation AS per new filename @AUTHOR: SANDY20NOV13
    xmlhttp.send();
}
//**************************** Navigate Girvi Receipt Panel *******************************************************************
/*****************Start code to add function @Author:SHRI30JUN15*******************************************/
function performAction(id, custId) {
    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
//            alert(req.responseText);
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (id == "verifyButt") {
//                alert(str);
                var str = req.responseText;
//                alert(str);

                var strArray = new Array();
                strArray = str.split(":");
                if (strArray.length > 1) {
                    var fileName = strArray[1];
                    var custIdArr = new Array();
                    custIdArr = fileName.split(".");
                    custId = custIdArr[0];
//                    alert(custId);
                    if (custId != '' || custId != null) {
                        getCustomerDetailsInCustId("CustHome", custId);
                    }
                } else {
                    document.getElementById('homeMessDispDiv').innerHTML = 'Finger Print Device Error OR Finger Prints Not Matched!';
                }
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    }

    if (id == "captureButt") {
        req.open("GET", "include/php/ommpfgsccapture.php?custId=" + custId, true);
    } else {
        req.open("GET", "include/php/ommpfgscverify.php", true);
    }
    req.send();
}
function getCustomerDetailsInCustId(custPanelOption, custId) {
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
/*****************End code to add function @Author:SHRI30JUN15*******************************************/
/*************Start code to add function @Author:SHRI08JUL15*****************************/
function addNewGirviEngDate()
{
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("AddNewLoanSubButt").style.visibility = "hidden";
    if (validateSelectField(document.getElementById("DOBEngDay").value, "Please select Girvi Date Day!") == false) {
        document.getElementById("DOBEngDay").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("AddNewLoanSubButt").style.visibility = "visible";
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBEngMonth").value, "Please select Girvi Date Month!") == false) {
        document.getElementById("DOBEngMonth").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("AddNewLoanSubButt").style.visibility = "visible";
        return false;
    }
    else if (validateSelectField(document.getElementById("DOBEngYear").value, "Please select Girvi Date year!") == false) {
        document.getElementById("DOBEngYear").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("AddNewLoanSubButt").style.visibility = "visible";
        return false;
    } else {
        return true;
    }
}
function getEngDtOptHide() {
//    alert(divId);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("display_eng_dt").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("engDate").innerHTML = "<img src='images/ajaxLoad.gif' />";
        }
    };
    xmlhttp.open("POST", "include/php/ombbblnk.php", true);
    xmlhttp.send();
}
/*************End code to add function @Author:SHRI08JUL15*****************************/
/********Start code to add function @Author:SHRI10JUL15************/
function getHindiAdhikMonthFromYear(year, todayMonth, divId, monthId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(divId).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/olgahdtmn.php?year=" + year + "&todayMonth=" + todayMonth + "&monthId=" + monthId, true);
    xmlhttp.send();
}

/********End code to add function @Author:SHRI10JUL15************/

function validateHDateInput()
{
    document.getElementById("AddNewLoanSubButt").style.visibility = "hidden";
    document.getElementById("AddNewLoanUpdButt").style.visibility = "hidden";
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (validateSelectField(document.getElementById('DOBDayTithi').value, "Please select Date Tithi!") == false) {
        document.getElementById('DOBDayTithi').focus();
        document.getElementById("AddNewLoanSubButt").style.visibility = "visible";
        document.getElementById("AddNewLoanUpdButt").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    } else if (validateSelectField(document.getElementById('DOBMonth').value, "Please select Date Month!") == false) {
        document.getElementById('DOBMonth').focus();
        document.getElementById("AddNewLoanSubButt").style.visibility = "visible";
        document.getElementById("AddNewLoanUpdButt").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    } else if (validateSelectField(document.getElementById('DOBDayPaksh').value, "Please select Date Paksh!") == false) {
        document.getElementById('DOBDayPaksh').focus();
        document.getElementById("AddNewLoanSubButt").style.visibility = "visible";
        document.getElementById("AddNewLoanUpdButt").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    } else if (validateSelectField(document.getElementById('DOBYear').value, "Please select Date Year!") == false) {
        document.getElementById('DOBYear').focus();
        document.getElementById("AddNewLoanSubButt").style.visibility = "visible";
        document.getElementById("AddNewLoanUpdButt").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    } else {
        return true;
    }
}
/********Start code to add function @Author:SHRI13JUL15****************************/
function searchUdhaarCustList(documentRootPath, searchColumn, searchValue, selFirmId, div, panel, timePeriod) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
        {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(div).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omuucclt.php?searchColumn="
            + searchColumn + "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&panel=" + panel + "&timePeriod=" + timePeriod, true);
    xmlhttp.send();
}
function sortUdhaarCustList(documentRootPath, sortKeyword, selFirmId, div, panel, timePeriod) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(div).innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omuucclt.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&panel=" + panel + "&timePeriod=" +
            timePeriod, true);
    xmlhttp.send();
}
/********End code to add function @Author:SHRI13JUL15****************************/
/**************Start code to add function for settle girvi @OMMODTAG SHRI_11AUG15****************/
function settleTransferredGirvi(girviId, gTransId, custId, gTransSts)
{
//    alert(gTransSts);
    document.getElementById("releaseTransferredGirviSettleButton").style.visibility = "hidden";
    confirm_box = confirm("Do you really want to settle this loan?");
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
        xmlhttp.open("POST", "include/php/olggrstls.php?girviId=" + girviId + "&gTransId=" + gTransId + "&custId=" + custId + "&gTransSts=" + gTransSts, true);
        xmlhttp.send();
    } else {
        document.getElementById("releaseTransferredGirviSettleButton").style.visibility = "visible";
    }
}
/**************End code to add function for settle girvi @OMMODTAG SHRI_11AUG15****************/
//*************Start code to add function for udhaar search panel navigation @OMMODTAG SHRI_12AUG15******************/
function navigationUdhaarSearchPanel(pageNo, rowsPerPage, panel, udhaarAmtRange) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadNextUdhaarPanelList").style.visibility = "hidden";
            document.getElementById("ajaxLoadNextUdhaarPanelListButt").style.visibility = "visible";
            document.barcode_search.barcode_text.focus();
            document.getElementById("udhaarSrchDetPanel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextUdhaarPanelList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextUdhaarPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/omusamrg.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&udhaarUpdateRows=UdhaarUpdateRows" + "&panelName=" + panel + "&udhaarAmtRange=" + udhaarAmtRange, true);
    xmlhttp.send();
}
//*************End code to add function for udhaar search panel navigation @OMMODTAG SHRI_12AUG15******************/
/**************Start code to add function for unsettled transfer girvi in girvi panel @OMMODTAG SHRI_14AUG15******************/
function showGirviTransferredUnsettledTrans()
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgptgdv.php", true);
    xmlhttp.send();
}
/**************End code to add function for unsettled transfer girvi in girvi panel @OMMODTAG SHRI_14AUG15******************/
/**************Start code to add function for unsettled transfer girvi in girvi panel @OMMODTAG SHRI_20AUG15******************/
function settleLoans() {
    var loanSettleDateDay = document.getElementById("stlTransDOBDay").value;
    var loanSettleDateMMM = document.getElementById("stlTransDOBMonth").value;
    var loanSettleDateYY = document.getElementById("stlTransDOBYear").value;
    var loanSettleDateStr = document.getElementById("stlTransDOBMonth").value + ' ' + document.getElementById("stlTransDOBDay").value + ', ' + document.getElementById("stlTransDOBYear").value;
    var loanSettleDate = new Date(loanSettleDateStr);
    var todayDate = new Date();
    var milliStockDate = loanSettleDate.getTime();
    var milliTodayDate = todayDate.getTime();
    var datesDiff = milliTodayDate - milliStockDate;
    if (datesDiff < 0) {
        alert('Please Select the correct Date!');
        document.getElementById("stlTransDOBDay").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("stlTransSubBtn").style.visibility = "visible";
        return false;
    }
    else {
        if (loanSettleDateMMM == 'FEB' || loanSettleDateMMM == 'APR' || loanSettleDateMMM == 'JUN' || loanSettleDateMMM == 'SEP' || loanSettleDateMMM == 'NOV') {
            if (loanSettleDateMMM == 'FEB' && loanSettleDateDay > 29 && loanSettleDateYY % 4 == 0) {
                alert('Please select correct Date, Month ' + loanSettleDateMMM + ' for this selected year has only max 29 days.');
                document.getElementById("stlTransDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("stlTransSubBtn").style.visibility = "visible";
                return false;
            }
            if (loanSettleDateMMM == 'FEB' && loanSettleDateDay > 28 && loanSettleDateYY % 4 != 0) {
                alert('Please select correct Date, Month ' + loanSettleDateMMM + ' for this selected year has only max 28 days.');
                document.getElementById("stlTransDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("stlTransSubBtn").style.visibility = "visible";
                return false;
            }
            if (loanSettleDateDay > 30) {
                alert('Please select correct Date, Month ' + loanSettleDateMMM + ' has only max 30 days.');
                document.getElementById("stlTransDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("stlTransSubBtn").style.visibility = "visible";
                return false;
            }
        }
    }
    if (validateSettleLoans()) {
        return true;
    } else {
        return false;
    }
}
function validateSettleLoans()
{
    if (validateSelectField(document.getElementById("stlTransDOBDay").value, "Please Select Day!") == false) {
        document.getElementById("stlTransDOBDay").focus();
        return false;
    } else if (validateSelectField(document.getElementById("stlTransDOBMonth").value, "Please Select Month!") == false) {
        document.getElementById("stlTransDOBMonth").focus();
        return false;
    } else if (validateSelectField(document.getElementById("stlTransDOBYear").value, "Please Select Year!") == false) {
        document.getElementById("stlTransDOBYear").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("stlTransAmount").value, "Please Enter Settle Amount!") == false ||
            validateNumWithDot(document.getElementById("stlTransAmount").value, "Accept only numeric characters without space!") == false) {
        document.getElementById("stlTransAmount").focus();
        return false;
    } else {
        return true;
    }

}
function calcGirviBal() {
    var settleAmount = parseFloat(document.getElementById('stlTransAmount').value);
    var totFinBal = parseFloat(document.getElementById('totFinBal').value);
    var balLeft = 0;
//    alert(settleAmount + ' ' + totFinBal);
    if (settleAmount == 'NaN')
    {
        settleAmount = '0.00';
    }
    if (totFinBal == 'NaN') {
        totFinBal = '0.00';
    }
//    alert(totFinBal);
    if (totFinBal < 0) {
        balLeft = settleAmount - Math.abs(totFinBal);
    }
    else {
        balLeft = totFinBal - settleAmount;
    }
    document.getElementById('stlAmountDep').value = parseFloat(settleAmount).toFixed(2);
    document.getElementById('stlTransAmountLeft').value = parseFloat(balLeft).toFixed(2);
    document.getElementById('stlAmountLeft').value = parseFloat(balLeft).toFixed(2);
    if (document.getElementById('stlTransAmountLeft').value == '' || document.getElementById('stlTransAmountLeft').value == 'NaN') {
        document.getElementById('stlTransAmountLeft').value = '0.00';
    }
    if (document.getElementById('stlAmountDep').value == '' || document.getElementById('stlAmountDep').value == 'NaN') {
        document.getElementById('stlAmountDep').value = '0.00';
    }
    if (document.getElementById('stlAmountLeft').value == '' || document.getElementById('stlAmountLeft').value == 'NaN') {
        document.getElementById('stlAmountLeft').value = '0.00';
    }
}
/**************End code to add function for unsettled transfer girvi in girvi panel @OMMODTAG SHRI_20AUG15******************/
/***************Start code to add function for unsettled loan transfer by firm @OMMODTAG SHRI_26AUG15**********************/
function showTFirmTrans() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviTransPanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgptgfrm.php", true);
    xmlhttp.send();
}
/***************End code to add function for unsettled loan transfer by firm @OMMODTAG SHRI_26AUG15**********************/
/********************Start code to add function to show money lender transferred girvi @OMMODTAG SHRI_27AUG15************/
function showMLenderTrans() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviTransPanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgptgml.php", true);
    xmlhttp.send();
}
function showAllTransaction() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviTransPanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgptgstl.php", true);
    xmlhttp.send();
}
function showAllSysLog() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviTransPanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgpsllg.php", true);
    xmlhttp.send();
}
function getDateInSettledLoanLogPanel(documentRootPath, sdd, smm, syy, edd, emm, eyy, selFirmId, pageNo, panel, rowsPerPage, sortKeyword, searchColumn, searchValue, noOfPagesAsLink) {
//    alert(documentRootPath);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("systemLogPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    var startDate = sdd + ' ' + smm + ' ' + syy;
    var endDate = edd + ' ' + emm + ' ' + eyy;
//    alert(startDate + ' ' + endDate);

    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/orgpsllg.php?page=" + pageNo + "&searchColumn=" + searchColumn +
            "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage + "&panel=" + panel +
            "&startDate=" + startDate + "&endDate=" + endDate, true);
    xmlhttp.send();
}
function unreleaseTransGirvi(girviTransId, panelName, girviId, prinType, upPanelName) {
//    alert(girviTransId + '-' + panelName + ' ' + girviId);
    if (upPanelName == 'updateSettledLoans') {
        alert("Sorry! You can not delete this loan");
    } else {
        confirm_box = confirm("Do you really want to Delete?");
        if (confirm_box == true)
        {
            loadXMLDoc();
            xmlhttp.onreadystatechange = function () {
                if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
                    window.setTimeout(closeUnreleaseGirviDetails, 1000);
                } else {
                    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
                }
            };
            xmlhttp.open("POST", "include/php/orgptgdl.php?girviTransId=" + girviTransId + "&panelName=" + panelName +
                    "&girviId=" + girviId + "&prinType=" + prinType + "&upPanelName=" + upPanelName, true);
            xmlhttp.send();
            function closeUnreleaseGirviDetails()
            {
                document.getElementById("ajaxLoadGirviDetailsDiv").innerHTML = "";
            }
        }
    }
}

function updateSettledLoans(ltransId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/orgptgdv.php?ltransId=" + ltransId + "&upPanelName=updateSettledLoans", true); //change in filename @AUTHOR: SANDY22NOV13
    xmlhttp.send();
}
/****************Start code to add function @OMMODTAG SHRI_01OCT15**********************/
function getSellProfitLoss(panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'ByItem') {
        xmlhttp.open("GET", "include/php/ogbbitpl.php", true);
    } else {
        xmlhttp.open("GET", "include/php/ogbbslpl.php", true);
    }
    xmlhttp.send();
}
/****************End code to add function @OMMODTAG SHRI_01OCT15**********************/
/**************Start code to add function @OMMODTAG SHRI_05OCT15*********************/
function changeCalcByWeight(weightBy, itstId, pageNo) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemDetails").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogidchwt.php?weightType=" + weightBy + "&itstId=" + itstId + "&pageNo=" + pageNo, true);
    xmlhttp.send();
}
/******************End code to add function @OMMODTAG SHRI_05OCT15 ********************************/
/************Start Code for Girvi  Pay Other Info @Author:SHE19OCT15******/

function updateGirviPayOtherInfo(documentRootPath, custId, girviId, girviPayOtherInfo, girviDOB, girviFirmId, girviSerialNum, panelName) {
// document.getElementById("ajaxUpdateGirviOtherInfoButt").innerHTML = "<img src='images/loading16.gif' />";
    confirm_box = confirm(updateAlertMess + "\n\nDo you really want to add or update pay other info?"); //change in line @AUTHOR: SANDY28JAN14

    if (confirm_box == true)
    {
        if (validateUpdateGirviPayOtherInfo()) {
            var poststr = "custId=" + custId + "&girviId=" + girviId
                    + "&girviPayOtherInfo=" + girviPayOtherInfo + "&girviDOB=" + girviDOB + "&girviFirmId=" + girviFirmId
                    + "&girviSerialNum=" + girviSerialNum + "&panelName=" + panelName;
            update_girvi_pay_other_info('http://' + documentRootPath + '/include/php/olguotin.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
        }
    }
    else {
        document.getElementById("ajaxUpdateGirviPayOtherInfoButt").innerHTML = "<img src='images/updateButt.png' />";
    }
    return false;
}


function validateUpdateGirviPayOtherInfo() {
    if (validateEmptyField(document.getElementById("girviPayOtherInfo").value, "Please enter Girvi Pay Other Info!") == false) {
        document.getElementById("girviPayOtherInfo").focus();
        return false;
    }
    return true;
}

function update_girvi_pay_other_info(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateGirviPayOtherInfo;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertUpdateGirviPayOtherInfo() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
}
/************End Code for Girvi  Pay Other Info @Author:SHE19OCT15******/
/************ Start code to add function passGirviEMIValues @OMMODTAG SHRI_14OCT15************/
function passGirviEMIValues(emiNo, emiPaidDD, emiPaidMM, emiPaidYY, emiAmt, emiStatus, serialNo, custId, firmId, girviId,
        girviDOB, gDepId, gDepJrnlId, emiOccur, gEMIIntAmt, gEMIAmt, pageNo, intAmt, princAmt, dueDate) {
//    alert(emiStatus);
    if (validateSelectField(document.getElementById("DOBDay" + gDepId + emiNo).value, "Please select Day!") == false) {
        document.getElementById("DOBDay" + gDepId + emiNo).focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBMonth" + gDepId + emiNo).value, "Please select Month!") == false) {
        document.getElementById("DOBMonth" + gDepId + emiNo).focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBYear" + gDepId + emiNo).value, "Please select Year!") == false) {
        document.getElementById("DOBYear" + gDepId + emiNo).focus();
        return false;
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
            var poststr = "emiNo=" + emiNo
                    + "&emiPaidDate=" + emiPaidDate
                    + "&emiAmt=" + emiAmt
                    + "&emiStatus=" + emiStatus
                    + "&serialNo=" + serialNo
                    + "&custId=" + custId
                    + "&firmId=" + firmId
                    + "&girviId=" + girviId
                    + "&girviDOB=" + girviDOB
                    + "&gDepId=" + gDepId
                    + "&gDepJrnlId=" + gDepJrnlId
                    + "&emiOccur=" + emiOccur
                    + "&gEMIIntAmt=" + gEMIIntAmt
                    + "&gEMIAmt=" + gEMIAmt
                    + "&pageNo=" + pageNo
                    + "&intAmt=" + intAmt
                    + "&princAmt=" + princAmt
                    + "&girviEndDate=" + dueDate;
            xmlhttp.open("POST", "include/php/omfnemiin.php?" + poststr, true);
            xmlhttp.send();
        }
    }
}
/************ End code to add function passGirviEMIValues @OMMODTAG SHRI_14OCT15************/
/******Start code to add function deleteCustFinanceDetails @OMMODTAG SHRI_16OCT15 ********/
function deleteCustFinanceDetails(custId, firmId, girviId, girviJrnlId, gSerialNum, gDate, gAmt)
{
    document.getElementById("ajaxLoadUdhaarDepositMon" + girviId).style.visibility = "visible";
    confirm_box = confirm("Do you really want to Permanent Delete this Finance Details?");
    if (confirm_box == true)
    {
        var poststr = "girviId=" + girviId + "&custId=" + custId + "&gJrnlId=" + girviJrnlId
                + "&gSerialNo=" + gSerialNum + "&gFirmId=" + firmId
                + "&gDOB=" + gDate + "&gPrinAmt=" + gAmt;
        delete_girvi('include/php/omfngrdl.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
    }
    else {
        document.getElementById("ajaxLoadUdhaarDepositMon" + girviId).style.visibility = "hidden";
    }
}
/******End code to add function deleteCustFinanceDetails @OMMODTAG SHRI_16OCT15 ********/
/********************Start Code To Add function For Tax Report Stock @AUTHOR:SHE20OCT15*********************/
function getTaxLedgerBook() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("ledgerBook").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogbbtlbs.php", true);
    xmlhttp.send();
}
/********************End Code To Add function For Tax Report Stock @AUTHOR:SHE20OCT15*********************/
/**********Start code to add function @OMMODTAG SHRI_29OCT15******************************/
function showCustGirviEMIListPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadShowGirviListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omfnllpn.php", true);
    xmlhttp.send();
}
/**********End code to add function @OMMODTAG SHRI_29OCT15******************************/
/***************Start code to add function @OMMODTAG SHRI_30OCT15 ***********************/
function getGirviListInGirviPanelByEMISts(selFirmId, sortKeyword, searchColumnName, searchColumnValue, panelName, status) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            if (panelName == 'transList')
                document.getElementById("transactionListDiv").innerHTML = xmlhttp.responseText;
            else if (panelName == 'tFirm')
                document.getElementById('girviTransPanelSubDiv').innerHTML = xmlhttp.responseText;
            else if (panelName == 'mLender')
                document.getElementById('girviTransPanelSubDiv').innerHTML = xmlhttp.responseText;
            else
                document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omfnllpn.php?selFirmId=" + selFirmId.value + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gLoanSts=" + status, true);
    xmlhttp.send();
}
/***************Start code to add noncollection list @OMMODTAG ANUJA04APR16 ***********************/
function sortEMILoansListPanel(documentRootPath, sortKeyword, selFirmId, rowsPerPage, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'collectionList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omfncml.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage, true);
    } else if (panelName == 'noncollectionList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omfnncml.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage, true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omfnllpn.php?sortKeyword=" + sortKeyword + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage, true);
    }
    xmlhttp.send();
}
function searchEMILoansListPanel(documentRootPath, searchColumn, searchValue, selFirmId, rowsPerPage, expMonths, panelName) {
//    alert(panelName);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviListPanelDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'collectionList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omfncml.php?searchColumn="
                + searchColumn + "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage + "&expMonths=" + expMonths, true);
    } else if (panelName == 'noncollectionList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omfnncml.php?searchColumn="
                + searchColumn + "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage + "&expMonths=" + expMonths, true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omfnllpn.php?searchColumn="
                + searchColumn + "&searchValue=" + searchValue + "&selFirmId=" + selFirmId + "&rowsPerPage=" + rowsPerPage + "&expMonths=" + expMonths, true);
    }
    xmlhttp.send();
}
/***************End code to add noncollection list @OMMODTAG ANUJA04APR16 ***********************/
function updateGirviDepAmt(emiPaidDD, emiPaidMM, emiPaidYY, documentRootPath, custId, girviId, girviDepId, updateGirviDepAmt, gFirmId, gDOB, gSerialNo, gStartDate, emiNo, gEndDate, emiStatus, girviDepIntAmount) {
    document.getElementById("updateGirviDepAmtCloseButton" + girviDepId).style.visibility = "hidden";
    document.getElementById("updateGirviDepAmtROIButton" + girviDepId).style.visibility = "hidden";
    var totEMIAmt = parseFloat(document.getElementById('totEMIAmt' + girviId).value);
//    alert(girviDepIntAmount+' '+updateGirviDepAmt);
    if (updateGirviDepAmt == '') {
        alert('Please Enter Girvi EMI Amount!');
        document.getElementById("updateGirviDepAmt" + girviDepId).focus();
    } else if (totEMIAmt < updateGirviDepAmt) {
        alert('Amount should not be greater than total EMI amount!'); //change in line @AUTHOR: SANDY28JAN14
        document.getElementById("updateGirviDepAmt" + girviDepId).focus();
    } else {
        confirm_box = confirm("Do you really want to update amount?"); //change in line @AUTHOR: SANDY28JAN14

        var emiPaidDate = emiPaidDD + ' ' + emiPaidMM + ' ' + emiPaidYY;
        if (confirm_box == true)
        {
            var poststr = "custId=" + custId + "&girviId=" + girviId +
                    "&girviDepId=" + girviDepId + "&updateGirviDepAmt=" + updateGirviDepAmt
                    + "&gFirmId=" + gFirmId
                    + "&gDOB=" + gDOB
                    + "&gSerialNo=" + gSerialNo
                    + "&totEMIAmt=" + totEMIAmt
                    + "&emiPaidDate=" + emiPaidDate
                    + "&gStartDate=" + gStartDate
                    + "&emiNo=" + emiNo
                    + "&gEndDate=" + gEndDate
                    + "&emiStatus=" + emiStatus
                    + "&girviDepIntAmount=" + girviDepIntAmount;
            //alert(poststr);
            update_girvi_dep_amt('http://' + documentRootPath + '/include/php/omfnuema.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
        }
        else {
            document.getElementById("updateGirviDepAmt" + girviDepId).focus();
        }
    }
    document.getElementById("updateGirviDepAmtCloseButton" + girviDepId).style.visibility = "visible";
    document.getElementById("updateGirviDepAmtROIButton" + girviDepId).style.visibility = "visible";
    return false;
}
function update_girvi_dep_amt(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertUpdateGirviDepAmt;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertUpdateGirviDepAmt() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
// Customer Advance Money Details
function getCustAdvMoneyDet(custId, custFirmId) {


    var poststr = "custId=" + custId +
            "&firmId=" + custFirmId;
    cust_adv_money_details('include/php/omadmndv.php', poststr);
}
function cust_adv_money_details(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertCustAdvMoneyDetails;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertCustAdvMoneyDetails() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }

}

function showPaidAdvMoneyDetailsDiv(custId, firmId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "hidden";
            document.getElementById("custUdhaarDetailsDiv").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omamcpmd.php?custId=" + custId + "&firmId=" + firmId, true);
    xmlhttp.send();
}

//start code to add for change stock opt @Author:SHE02NOV15
function changeStockOpt() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("changeStockOpt").innerHTML = xmlhttp.responseText;
            document.getElementById("changeStockOpt").style.display = 'block';
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            document.getElementById("changeStockOpt").style.display = 'none';
        }
    };
//added  for displaying popup only once
    var count = GetCookie('count');
    if (count == null) {
        count = 1;
        SetCookie('count', count, exp);
        xmlhttp.open("POST",
                "include/php/omchstopt.php", true);
        xmlhttp.send();
    }
    else {
        count++;
        SetCookie('count', count, exp);
        document.getElementById("overlay").style.display = 'none';
    }


}

//End code to add for change stock opt @Author:SHE02NOV15


//Start code to add for change stock opt @Author:SHE03NOV15
function changeStockOptOk() {
    var stockOpt = document.getElementById("stockOpt").value;
//   alert(stockOpt);

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            document.getElementById("changeStockOpt").style.display = 'none';
            document.getElementById("overlay").style.display = 'none'

// navigationMainBigMiddleImage('stockPanel', 'stock26.png', 'आभूषण सूची के लिए यहाँ क्लिक करे! \nClick here to see Stock Panel / Shortcut Key F3 ');
        }
        ;
//  alert( xmlhttp.responseText);

    }
    xmlhttp.open("POST", "include/php/omsopad.php?value=" + stockOpt + "&fieldName=stockOpt", true);
    xmlhttp.send();
}
//End code to add for change stock opt @Author:SHE03NOV15

// Start code for disply div once @ Author:SHE02NOV15
var expDays = 1825; // number of days the cookie should last(5yrs)

function GetCookie(name) {
    var arg = name + "=";
    var alen = arg.length;
    var clen = document.cookie.length;
    var i = 0;
    while (i < clen) {
        var j = i + alen;
        if (document.cookie.substring(i, j) == arg)
            return getCookieVal(j);
        i = document.cookie.indexOf(" ", i) + 1;
        if (i == 0)
            break;
    }
    return null;
}
function SetCookie(name, value) {
    var argv = SetCookie.arguments;
    var argc = SetCookie.arguments.length;
    var expires = (argc > 2) ? argv[2] : null;
    var path = (argc > 3) ? argv[3] : null;
    var domain = (argc > 4) ? argv[4] : null;
    var secure = (argc > 5) ? argv[5] : false;
    document.cookie = name + "=" + escape(value) +
            ((expires == null) ? "" : ("; expires=" + expires.toGMTString())) +
            ((path == null) ? "" : ("; path=" + path)) +
            ((domain == null) ? "" : ("; domain=" + domain)) +
            ((secure == true) ? "; secure" : "");
}
function DeleteCookie(name) {
    var exp = new Date();
    exp.setTime(exp.getTime() - 1);
    var cval = GetCookie(name);
    document.cookie = name + "=" + cval + "; expires=" + exp.toGMTString();
}
var exp = new Date();
exp.setTime(exp.getTime() + (expDays * 24 * 60 * 60 * 1000));
function amt() {
    var count = GetCookie('count')
    if (count == null) {
        SetCookie('count', '1')
        return 1
    }
    else {
        var newcount = parseInt(count) + 1;
        DeleteCookie('count')
        SetCookie('count', newcount, exp)
        return count
    }
}
function getCookieVal(offset) {
    var endstr = document.cookie.indexOf(";", offset);
    if (endstr == -1)
        endstr = document.cookie.length;
    return unescape(document.cookie.substring(offset, endstr));
}
// End code for disply div once @ Author:SHE02NOV15

function numberOfRowsInActiveGirviList(documentRootPath, rowsPerPage, selFirmId, sortKeyword, pageNum, searchColumn, searchValue, updateRows, custId)
{
    // var noOfRows = rowsPerPage;
    //var totGirvi= totalGirvi;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("activeGirvListDiv").innerHTML = xmlhttp.responseText;
        } else {
            // document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            // document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/omchacgv.php?rowsPerPage=" + rowsPerPage + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword +
            "&page=" + pageNum + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&updateRows=" + updateRows + "&custId=" + custId, true);
    xmlhttp.send();
}
//function navigationActiveGirviList(button, offset, totalGirviProcessed, maxLimit, maxLimitProcess, selFirmId, sortKeyword, rowsPerPage, pageNo, searchColumn, searchValue) {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = function () {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
//            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
//            document.getElementById("activeGirvListDiv").innerHTML = xmlhttp.responseText;
//        } else {
//            document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
//            document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
//        }
//    };
//    xmlhttp.open("POST", "include/php/omchacgv.php?button=" + button + "&offset=" + offset + "&totalGirviProcessed=" + totalGirviProcessed + "&maxLimit=" + maxLimit + "&maxLimitProcess=" + maxLimitProcess +
//            "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&rowsPerPage=" + rowsPerPage + "&page=" + pageNo + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue, true);
//    xmlhttp.send();
//}
function showSelectedPageActiveGirvi(pageNo, panel, rowsPerPage, noOfPagesAsLink, selFirmId, sortKeyword, searchColumn, searchValue, custId) {
//    alert(pageNo+'-'+rowsPerPage+'-'+noOfPagesAsLink+'-'+selFirmId+'-'+sortKeyword+'-'+searchColumn+'-'+searchValue+'-'+selTFirmId);
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
                document.getElementById("activeGirvListDiv").innerHTML = xmlhttp.responseText;
                if (pageNo >= 10) {
                    setPageValue(pageNo, noOfPagesAsLink);
                } else {
                    document.getElementById('pageNoTextField' + pageNo).setAttribute("class", "currentPageNoButton");
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/omchacgv.php?page=" + pageNo + "&rowsPerPage=" + rowsPerPage + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&custId=" + custId, true);
        xmlhttp.send();
    }
}
function showStockPanel(panel, stockPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('main_ajax_loading_div').style.visibility = "hidden";
            document.getElementById('stockPanelSubDiv').innerHTML = xmlhttp.responseText;
            if (panel == "retailStock") {
                document.getElementById("addRetailStock").setAttribute("class", "greenFont frm-btn");
                document.getElementById("addWholeStock").setAttribute("class", "grayFont frm-btn");
            } else {
                document.getElementById("addRetailStock").setAttribute("class", "grayFont frm-btn");
                document.getElementById("addWholeStock").setAttribute("class", "greenFont frm-btn");
            }
        } else {
            document.getElementById('main_ajax_loading_div').style.visibility = "visible";
        }
    };
    if (stockPanel == 'ImitationStock') {
        xmlhttp.open("POST", "include/php/ogijsdv.php?stockType=" + panel, true);
    } //<!--****description: START CODE TO Add customerStatement @Author: DISH14NOV16 i add this td .******-->
    else if (stockPanel == 'CrystelStock') {
        xmlhttp.open("POST", "include/php/ogcraddv.php?stockType=" + panel, true);
    }
    //<!--****description: END CODE TO Add customerStatement @Author: DISH14NOV16 i add this td .******-->
    else {
        xmlhttp.open("POST", "include/php/ogadstoc.php?stockType=" + panel, true);
    }
    xmlhttp.send();
}
function getMoreStockRawMetalDiv(metalCnt, panelName, firmId, rawGdPreId, rawGdPostId, metalType, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId,
        metalPanelName, mcntr, rawPreId, rawPostId, otherChgsBy, totFinGdWt, totFinSlWt) {
    metalPanel = panelName;
    metalCount = metalCnt;
    if (metalCount != '') {
        getMetalDiv = metalCount;
    }
//    alert('getMoreStockRawMetalDiv-getMetalDiv=' + getMetalDiv);
    var poststr = "metalDivCount=" + metalCount
            + "&panelName=" + panelName + "&firmId=" + firmId
            + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&metalType=" + metalType + "&rawSlPreId=" + rawSlPreId +
            "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId +
            "&rawAlPostId=" + rawAlPostId + "&metalPanelName=" + metalPanelName
            + "&mcntr=" + mcntr + "&rawPreId=" + rawPreId + "&rawPostId=" + rawPostId
            + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt;
    get_more_raw_metal_div('include/php/ogwspydt.php', poststr);
    return false;
}
function getStockRawMetalType(panelName, metalType, metalCount, firmId, rawGdPreId, rawGdPostId, rawSlPreId, rawSlPostId, rawAlPreId, rawAlPostId, metalTypePanel, cntr, otherChgsBy, totFinGdWt, totFinSlWt, metalTypeId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("rawMetalIdDiv" + metalCount).innerHTML = xmlhttp.responseText;
            document.getElementById(metalTypeId).focus();
            // calcItemBalance();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogwspydt.php?panelName=" + panelName + "&metalType=" + metalType +
            "&metalDivCount=" + metalCount + "&rawGdPreId=" + rawGdPreId + "&rawGdPostId=" + rawGdPostId +
            "&rawSlPreId=" + rawSlPreId + "&rawSlPostId=" + rawSlPostId + "&rawAlPreId=" + rawAlPreId + "&rawAlPostId=" + rawAlPostId + "&firmId=" + firmId +
            "&metalTypePanel=" + metalTypePanel + "&cntr=" + cntr + "&otherChgsBy=" + otherChgsBy + "&totFinGdWt=" + totFinGdWt + "&totFinSlWt=" + totFinSlWt, true);
    xmlhttp.send();
}
var goldWtBal = 0;
var silverWtBal = 0;
var GoldWtType = null;
var SilverWtType = null;
var stockDiv = null;
function calcStockItemBalance() {
//    alert('ss');
//    alert(document.getElementById('metalPanel').value);
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
    } else if (document.getElementById('metalPanel').value == 'SuppAddOrder' || document.getElementById('metalPanel').value == 'SuppOrderUp') { //add panel for order panel prev balance :Author:SANT01DEC16
        prefix = 'spOr';
    } else if (document.getElementById('metalPanel').value == 'InvoicePayment' || document.getElementById('metalPanel').value == 'InvoicePayUp') {
        prefix = 'suppDep';
    } else if (document.getElementById('metalPanel').value == 'SuppPayment' || document.getElementById('metalPanel').value == 'SuppPayUp') {
        prefix = 'suppDep';
    } else if (document.getElementById('metalPanel').value == 'SuppOrderDelivery' || document.getElementById('metalPanel').value == 'SuppOrderDeliveryUp') {  //add panel for order panel prev balance :Author:SANT01DEC16
        prefix = 'spOrDel';
    } else if (document.getElementById('metalPanel').value == 'NwOrDelPayment' || document.getElementById('metalPanel').value == 'NwOrDelPaymentUp') { //add panel for order panel prev balance :Author:SANT01DEC16
        prefix = 'nwOrDel';
    }
    if (document.getElementById('metalPanel').value == 'StockPayment' || document.getElementById('metalPanel').value == 'SlPrPayment' ||
            document.getElementById('metalPanel').value == 'CustSellPayment' || document.getElementById('metalPanel').value == 'NwOrPayment' ||
            document.getElementById('metalPanel').value == 'RawPayment' || document.getElementById('metalPanel').value == 'SuppAddOrder' ||
            document.getElementById('metalPanel').value == 'InvoicePayment' || document.getElementById('metalPanel').value == 'SuppPayment' || document.getElementById('metalPanel').value == 'SuppOrderDelivery' || document.getElementById('metalPanel').value == 'NwOrDelPayment') { //add panel for order panel prev balance :Author:SANT01DEC16
        count = 1;
        delId = 'del' + 1;
    } else if (document.getElementById('metalPanel').value == 'StockPayUp' || document.getElementById('metalPanel').value == 'SellPayUp' ||
            document.getElementById('metalPanel').value == 'CustSellPayUp' || document.getElementById('metalPanel').value == 'NwOrPayUp' ||
            document.getElementById('metalPanel').value == 'RawPayUp' || document.getElementById('metalPanel').value == 'SuppOrderUp' ||
            document.getElementById('metalPanel').value == 'InvoicePayUp' || document.getElementById('metalPanel').value == 'SuppPayUp' || document.getElementById('metalPanel').value == 'SuppOrderDeliveryUp' || document.getElementById('metalPanel').value == 'NwOrDelPaymentUp') { //add panel for order panel prev balance :Author:SANT01DEC16
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
    var totSilverAmt = 0;
    var totGoldAmt = 0;
//    alert(count);
//    alert(getMetalDiv);
    for (var dc = count; getMetalDiv != ''; dc++) {
        if (document.getElementById('metalDel' + dc).value != 'Deleted') {
            var payTotalWeight1 = document.getElementById(prefix + 'PayMetal1RecWt' + dc).value;
            var payTotalWeightType1 = document.getElementById(prefix + 'PayMetal1RecWtType' + dc).value;
            var payMetalRate1 = document.getElementById(prefix + 'PayMetal1Rate' + dc).value;
            var payMetalTunch1 = document.getElementById(prefix + 'PayMetal1Tunch' + dc).value;
            var metalWeight = (payTotalWeight1 * payMetalTunch1) / 100;
            document.getElementById(prefix + 'PayMetal1FnWt' + dc).value = parseFloat(metalWeight).toFixed(3);
//            alert(document.getElementById(prefix + 'PayMetalType1' + dc).value);
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold' || document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Alloy') {
                goldWeight = parseFloat(metalWeight);
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
                        gdBal = parseFloat(document.getElementById(prefix + 'Metal1WtPrevBal').value) + parseFloat(document.getElementById(prefix + 'GoldTotFineWt').value);
                    }
//                    alert(document.getElementById(prefix + 'GoldTotFineWt').value);
                    if (payMetalDueWeightType1 == 'KG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight / 1000)).toFixed(3);
                            goldWeight = parseFloat(goldWeight / 1000).toFixed(3);
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
                    totRecGd += parseFloat(goldWeight);
                    totGoldAmt += parseFloat(document.getElementById(prefix + 'PayMetal1Val' + dc).value);
//                    alert(totGoldAmt);
//                    alert(document.getElementById('stockPurPriceCut').value); || $payPanelName == 'SuppOrderDeliveryUp'
                    if (document.getElementById('stockPurPriceCut').value == 'RateCut' || document.getElementById('stockPurPriceCut').value == 'NoRateCut') {
                        document.getElementById(prefix + 'PayMetal1WtBal').value = gdBal;
                        document.getElementById(prefix + 'PayMetal1WtBalType').value = payMetalDueWeightType1;
                        if ((document.getElementById('metalPanel').value != 'SuppOrderUp' && document.getElementById('metalPanel').value != 'NwOrPayUp' && document.getElementById('metalPanel').value != 'InvoicePayUp' && document.getElementById('metalPanel').value != 'NwOrDelPaymentUp' && document.getElementById('metalPanel').value != 'SuppOrderDeliveryUp' && document.getElementById('metalPanel').value != 'StockPayUp' && document.getElementById('metalPanel').value != 'SellPayUp') && document.getElementById('stockPurPriceCut').value == 'RateCut') { //add panel for order panel prev balance :Author:SANT01DEC16
                            document.getElementById(prefix + 'Metal1RtCtWtBal').value = gdBal;
                            document.getElementById(prefix + 'Metal1RtCtWtBalType').value = payMetalDueWeightType1;
                            document.getElementById('metal1RtCtWtBal').value = gdBal + '' + payMetalDueWeightType1;//Add Value this variable:Author:SANT24OCT16
                        }
                    }
                    document.getElementById(prefix + 'Metal1WtFinBal').value = gdBal;
                    document.getElementById(prefix + 'Metal1WtFinBalType').value = payMetalDueWeightType1;
                }
            }
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Silver') {
                silverWeight = parseFloat(metalWeight);
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
                    slBal = parseFloat(document.getElementById(prefix + 'Metal2WtPrevBal').value) + parseFloat(document.getElementById(prefix + 'SilverTotFineWt').value);
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

                if (document.getElementById('stockPurPriceCut').value == 'RateCut' || document.getElementById('stockPurPriceCut').value == 'NoRateCut') {
                    document.getElementById(prefix + 'PayMetal2WtBal').value = slBal;
                    document.getElementById(prefix + 'PayMetal2WtBalType').value = payMetalDueWeightType1;
                    if ((document.getElementById('metalPanel').value != 'NwOrPayUp' && document.getElementById('metalPanel').value != 'SuppOrderUp' && document.getElementById('metalPanel').value != 'InvoicePayUp' && document.getElementById('metalPanel').value != 'NwOrDelPaymentUp' && document.getElementById('metalPanel').value != 'StockPayUp' && document.getElementById('metalPanel').value != 'SuppOrderDeliveryUp' && document.getElementById('metalPanel').value != 'SellPayUp') && document.getElementById('stockPurPriceCut').value == 'RateCut') { //add panel for order panel prev balance :Author:SANT01DEC16
                        document.getElementById(prefix + 'Metal2RtCtWtBal').value = slBal;
                        document.getElementById(prefix + 'Metal2RtCtWtBalType').value = payMetalDueWeightType1;
                        document.getElementById('metal2RtCtWtBal').value = slBal + '' + payMetalDueWeightType1;//Add Value this variable:Author:SANT24OCT16
                    }
                }
                document.getElementById(prefix + 'Metal2WtFinBal').value = slBal;
                document.getElementById(prefix + 'Metal2WtFinBalType').value = payMetalDueWeightType1;

                silverWtBal = parseFloat(slBal).toFixed(3);
                SilverWtType = payMetalDueWeightType1;
                totRecSl += parseFloat(silverWeight);
                totSilverAmt += parseFloat(document.getElementById(prefix + 'PayMetal1Val' + dc).value);
            }
            if (document.getElementById(prefix + 'GoldTotFineWt').value != '' && goldWtBal == 0) {
                goldWtBal = parseFloat(document.getElementById(prefix + 'GoldTotFineWt').value);
                GoldWtType = document.getElementById(prefix + 'GoldTotFineWtType').value;
            }
            if (document.getElementById(prefix + 'SilverTotFineWt').value != '' && silverWtBal == 0) {
                silverWtBal = parseFloat(document.getElementById(prefix + 'SilverTotFineWt').value);
                SilverWtType = document.getElementById(prefix + 'SilverTotFineWtType').value;
            }

//            alert(Metal1WtFinBal);
            document.getElementById(prefix + 'Metal1WtRecBal').value = parseFloat(totRecGd).toFixed(3);
            document.getElementById(prefix + 'Metal1WtRecBalType').value = goldWeightType;
            document.getElementById(prefix + 'Metal2WtRecBal').value = parseFloat(totRecSl).toFixed(3);
            document.getElementById(prefix + 'Metal2WtRecBalType').value = silverWeightType;
            if (document.getElementById('stockPurPriceCut').value == 'RateCut' || document.getElementById('stockPurPriceCut').value == 'NoRateCut') {
                document.getElementById('metal1WtRecBal').value = parseFloat(totRecGd).toFixed(3) + ' ' + goldWeightType;
                document.getElementById('metal2WtRecBal').value = parseFloat(totRecSl).toFixed(3) + ' ' + silverWeightType;
            }
            if (document.getElementById(prefix + 'PayMetal1Val' + dc).value == '') {
                document.getElementById(prefix + 'PayMetal1Val' + dc).value = 0;
            }
            totAmtRec += parseFloat(document.getElementById(prefix + 'PayMetal1Val' + dc).value);
//            alert(document.getElementById('stockPurPriceCut').value);
            if (document.getElementById('stockPurPriceCut').value == 'ByCash') {
//                if ((document.getElementById('metalPanel').value != 'NwOrPayUp' && document.getElementById('metalPanel').value != 'SuppOrderUp' && document.getElementById('metalPanel').value != 'InvoicePayUp' && document.getElementById('metalPanel').value != 'NwOrDelPaymentUp' && document.getElementById('metalPanel').value != 'StockPayUp' && document.getElementById('metalPanel').value != 'SuppOrderDeliveryUp' && document.getElementById('metalPanel').value != 'SellPayUp'))
                document.getElementById(prefix + 'PayTotMetAmtRec').value = parseFloat(totAmtRec).toFixed(2);
                document.getElementById(prefix + 'PayTotAmtRecDisp').value = parseFloat(totAmtRec).toFixed(2);
            }
             document.getElementById(prefix + 'PayTotMet1AmtRec').value = parseFloat(totGoldAmt).toFixed(2);
             document.getElementById(prefix + 'PayTotMet2AmtRec').value = parseFloat(totSilverAmt).toFixed(2);

            if (document.getElementById('stockPurPriceCut').value == 'RateCut' || document.getElementById('stockPurPriceCut').value == 'NoRateCut') {
                calcWholeSaleRateCut(prefix);
                calcRawMetStock(prefix);
            }
            calcStockRrCtCashBalance(prefix);
        }
        metalEntered++;
    }
    return false;
}
function setRateCutValues(prefix) {
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
            document.getElementById(prefix + 'Metal1RtCtWtBalDisp').value = parseFloat(goldWtBal).toFixed(3) + ' ' + GoldWtType;
            document.getElementById(prefix + 'Metal2RtCtWtBalDisp').value = parseFloat(silverWtBal).toFixed(3) + ' ' + SilverWtType;
//            alert(document.getElementById(prefix + 'Metal2RtCtWtBalDisp').value);
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
var rateCutPanel = null;
function wholesaleRateCut(rateCutId, totFinGdWt, goldTotFFineWtType, totFinSlWt, silverTotFFineWtType, totGoldPay, totSilverPay, goldRate, silverRate, payPanelName, otherCharges, otherChgsBy, suppId, preInvNo, invNo, uniqueId, goldTotFFineWt, silverTotFFineWt, panel, crystalAmount, mainPanel) {
    //    alert(rateCutId + '-' + goldTotFFineWt + '-' + goldTotFFineWtType + '-' + silverTotFFineWt + '-' + silverTotFFineWtType + '-' + totGoldPay + '-' + totSilverPay + '-' + goldRate + '-' + silverRate + '-' + payPanelName + '-' + otherCharges + '-' + otherChgsBy + '-' + suppId + '-' + preInvNo + '-' + invNo);
//    alert(rateCutId + "-" + panel);
//    alert(silverRate);
    rateCutPanel = panel;
    var poststr = "rateCutOpt=" + encodeURIComponent(rateCutId) +
            "&goldTotFFineWt=" + encodeURIComponent(goldTotFFineWt) +
            "&goldTotFFineWtType=" + encodeURIComponent(goldTotFFineWtType) +
            "&silverTotFFineWt=" + encodeURIComponent(silverTotFFineWt) +
            "&silverTotFFineWtType=" + encodeURIComponent(silverTotFFineWtType) +
            "&totFinGdWt=" + encodeURIComponent(totFinGdWt) +
            "&totFinSlWt=" + encodeURIComponent(totFinSlWt) +
            "&totGoldPay=" + encodeURIComponent(totGoldPay) +
            "&totSilverPay=" + encodeURIComponent(totSilverPay) +
            "&goldRate=" + encodeURIComponent(goldRate) +
            "&silverRate=" + encodeURIComponent(silverRate) +
            "&otherCharges=" + encodeURIComponent(otherCharges) + "&payPanelName=" + encodeURIComponent(payPanelName) +
            "&otherChgsBy=" + encodeURIComponent(otherChgsBy) +
            "&payId=" + encodeURIComponent(document.getElementById('payId').value) +
            "&preInvId=" + encodeURIComponent(preInvNo) +
            "&invId=" + encodeURIComponent(invNo) +
            "&uniqueId=" + encodeURIComponent(uniqueId) +
            "&suppId=" + encodeURIComponent(suppId) +
            "&crystalVal=" + encodeURIComponent(crystalAmount) +
            "&mainPanel=" + encodeURIComponent(mainPanel);

    if (rateCutId == 'RateCut') {
        if (panel == 'sellPanel') {
            wholesale_rate_cut("include/php/ogswrtct.php", poststr);
        } else {
            wholesale_rate_cut("include/php/ogspwrtct.php", poststr);
        }
    } else {
        if (panel == 'sellPanel') {
            wholesale_rate_cut("include/php/ogswsbdv.php", poststr);
        } else {
            wholesale_rate_cut("include/php/ogspwsdv.php", poststr);
        }
    }
}
function wholesale_rate_cut(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertWholeSaleRateCut;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertWholeSaleRateCut() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("rateCutDiv").innerHTML = xmlhttp.responseText;
        var prefix = document.getElementById('prefix').value;
        if (rateCutPanel == 'sellPanel') {
            calcSellRawMetStock(prefix);
        } else {
            calcWholeSaleRateCut(prefix);
        }
        calcStockRrCtCashBalance(prefix);
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function calcStockCashBalance(prefix) {
//    alert('hi');
    var finalCashBal;
    var finBalLabel = 'FINAL CASH BALANCE';
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
        document.getElementById(prefix + 'PayCashRecDisp').value = Math.round(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);
        document.getElementById(prefix + 'PayTotCashAmt').value = parseFloat(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);
    }

    if (document.getElementById('VATTax').value != '' || document.getElementById('VATTax').value != null) {
        var totalValuation = document.getElementById('taxOnTotAmt').value;
        if (totalValuation == null || totalValuation == '') {
            totalValuation = 0;
        }
        var totTax = parseFloat(document.getElementById('VATTax').value) / 100;
        document.getElementById(prefix + 'PayVATAmt').value = parseFloat(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);
        document.getElementById(prefix + 'PayVATAmtDisp').value = Math.round(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);
    }

    if (document.getElementById(prefix + 'PayVATAmt').value == 'NaN') {
        document.getElementById(prefix + 'PayVATAmt').value = 0.00;
    }
    if (document.getElementById(prefix + 'PayVATAmt').value || document.getElementById(prefix + 'PayDiscount').value != '') {
        if (document.getElementById(prefix + 'PayVATAmt').value == null || document.getElementById(prefix + 'PayVATAmt').value == '' || document.getElementById(prefix + 'PayVATAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayVATAmt').value = 0;
        }
        if (document.getElementById(prefix + 'PayPrevTotAmt').value == null || document.getElementById(prefix + 'PayPrevTotAmt').value == '' || document.getElementById(prefix + 'PayPrevTotAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayPrevTotAmt').value = 0;
        }
        if (document.getElementById(prefix + 'PayDiscount').value == null || document.getElementById(prefix + 'PayDiscount').value == '' || document.getElementById(prefix + 'PayDiscount').value == 'NaN') {
            document.getElementById(prefix + 'PayDiscount').value = 0;
        }
        document.getElementById(prefix + 'PayDiscountDisp').value = Math.round(parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        document.getElementById(prefix + 'PayVATAmtDisp').value = Math.round(parseFloat(document.getElementById(prefix + 'PayVATAmt').value)).toFixed(2);
        document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.round((parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value))).toFixed(2);
//        alert(document.getElementById(prefix + 'PayTotAmt').value);
        finalCashBal = Math.round((parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
        if (finalCashBal > 0) {
//            finBalClass = 'redFont';
        } else if (finalCashBal <= 0) {
            finBalLabel = 'FINAL CASH DEPOSIT :';
        }
//        alert(finBalClass);
        document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(finalCashBal).toFixed(2);
        document.getElementById('finCashBalTd').innerHTML = finBalLabel;
//        document.getElementById('finalBalanceTd').setAttribute('class', finBalClass);
        document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat((parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
    }
}
function calcRawMetStock(prefix) {
    var weightBal = 0;
    if (document.getElementById(prefix + 'Metal1WtPrevBal').value != '' || document.getElementById(prefix + 'GoldTotFineWt').value != '' || document.getElementById(prefix + 'Metal1WtRecBal').value != '') {
        if (document.getElementById(prefix + 'Metal1WtPrevBal').value == '' || document.getElementById(prefix + 'Metal1WtPrevBal').value == 'NaN') {
            document.getElementById(prefix + 'Metal1WtPrevBal').value = 0;
        }
        if (document.getElementById(prefix + 'GoldTotFineWt').value == '' || document.getElementById(prefix + 'GoldTotFineWt').value == 'NaN') {
            document.getElementById(prefix + 'GoldTotFineWt').value = 0;
        }
        if (document.getElementById(prefix + 'Metal1WtRecBal').value == '' || document.getElementById(prefix + 'Metal1WtRecBal').value == 'NaN') {
            document.getElementById(prefix + 'Metal1WtRecBal').value = 0;
        }
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (document.getElementById(prefix + 'Metal1RtCtWtBal').value == '' || document.getElementById(prefix + 'Metal1RtCtWtBal').value == 'NaN') {
                document.getElementById(prefix + 'Metal1RtCtWtBal').value = 0;
            }
            var gdRateCut = convertWeight(parseFloat(document.getElementById(prefix + 'Metal1RtCtWtBal').value), document.getElementById(prefix + 'GoldTotFineWtType').value, document.getElementById(prefix + 'Metal1RtCtWtBalType').value);
            var totFinGdWtBal = parseFloat(document.getElementById(prefix + 'Metal1WtPrevBal').value) + parseFloat(document.getElementById(prefix + 'GoldTotFineWt').value) - parseFloat(document.getElementById(prefix + 'Metal1WtRecBal').value) - parseFloat(gdRateCut);
        } else if (document.getElementById('stockPurPriceCut').value == 'NoRateCut') {
            var totFinGdWtBal = parseFloat(document.getElementById(prefix + 'Metal1WtPrevBal').value) + parseFloat(document.getElementById(prefix + 'GoldTotFineWt').value) - parseFloat(document.getElementById(prefix + 'Metal1WtRecBal').value);
        }

        document.getElementById('metal1WtFinBal').value = parseFloat(totFinGdWtBal).toFixed(3) + ' ' + document.getElementById(prefix + 'GoldTotFineWtType').value;
        document.getElementById(prefix + 'Metal1WtFinBal').value = parseFloat(totFinGdWtBal).toFixed(3);
        document.getElementById(prefix + 'Metal1WtFinBalType').value = document.getElementById(prefix + 'GoldTotFineWtType').value;
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            var payTotalWeightType1 = document.getElementById(prefix + 'Metal1RtCtWtBalType').value;
            var goldWeight = document.getElementById(prefix + 'Metal1RtCtWtBal').value;
            var payMetalRate1 = document.getElementById(prefix + 'Metal1Rate').value;
            if (payTotalWeightType1 == 'KG') {
                document.getElementById(prefix + 'Metal1Valuation').value = Math.round((goldWeight * payMetalRate1 * document.getElementById('gmWtInKg').value));
            } else if (payTotalWeightType1 == 'GM') {
                document.getElementById(prefix + 'Metal1Valuation').value = Math.round((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value);
            } else if (payTotalWeightType1 == 'MG') {
                document.getElementById(prefix + 'Metal1Valuation').value = Math.round((goldWeight * payMetalRate1) / (document.getElementById('gmWtInMg').value));
            }
        }
    }
    if (document.getElementById(prefix + 'Metal2WtPrevBal').value != '' || document.getElementById(prefix + 'SilverTotFineWt').value != '' || document.getElementById(prefix + 'Metal2WtRecBal').value != '') {
        if (document.getElementById(prefix + 'Metal2WtPrevBal').value == '' || document.getElementById(prefix + 'Metal2WtPrevBal').value == 'NaN') {
            document.getElementById(prefix + 'Metal2WtPrevBal').value = 0;
        }
        if (document.getElementById(prefix + 'SilverTotFineWt').value == '' || document.getElementById(prefix + 'SilverTotFineWt').value == 'NaN') {
            document.getElementById(prefix + 'SilverTotFineWt').value = 0;
        }
        if (document.getElementById(prefix + 'Metal2WtRecBal').value == '' || document.getElementById(prefix + 'Metal2WtRecBal').value == 'NaN') {
            document.getElementById(prefix + 'Metal2WtRecBal').value = 0;
        }
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (document.getElementById(prefix + 'Metal2RtCtWtBal').value == '' || document.getElementById(prefix + 'Metal2RtCtWtBal').value == 'NaN') {
                document.getElementById(prefix + 'Metal2RtCtWtBal').value = 0;
            }
            var slRateCut = convertWeight(parseFloat(document.getElementById(prefix + 'Metal2RtCtWtBal').value), document.getElementById(prefix + 'SilverTotFineWtType').value, document.getElementById(prefix + 'Metal2RtCtWtBalType').value);
            var totFinSrWtBal = parseFloat(document.getElementById(prefix + 'Metal2WtPrevBal').value) + parseFloat(document.getElementById(prefix + 'SilverTotFineWt').value) - parseFloat(document.getElementById(prefix + 'Metal2WtRecBal').value) - parseFloat(slRateCut);
        } else if (document.getElementById('stockPurPriceCut').value == 'NoRateCut') {
            var totFinSrWtBal = parseFloat(document.getElementById(prefix + 'Metal2WtPrevBal').value) + parseFloat(document.getElementById(prefix + 'SilverTotFineWt').value) - parseFloat(document.getElementById(prefix + 'Metal2WtRecBal').value);
        }

        document.getElementById('metal2WtFinBal').value = parseFloat(totFinSrWtBal).toFixed(3) + ' ' + document.getElementById(prefix + 'SilverTotFineWtType').value;
        document.getElementById(prefix + 'Metal2WtFinBal').value = parseFloat(totFinSrWtBal).toFixed(3);
        document.getElementById(prefix + 'Metal2WtFinBalType').value = document.getElementById(prefix + 'SilverTotFineWtType').value;
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            var payTotalWeightType2 = document.getElementById(prefix + 'Metal2RtCtWtBalType').value;
            var silverWeight = parseFloat(document.getElementById(prefix + 'Metal2RtCtWtBal').value);
            var payMetalRate2 = parseFloat(document.getElementById(prefix + 'Metal2Rate').value);
            if (payTotalWeightType2 == 'KG') {
                document.getElementById(prefix + 'Metal2Valuation').value = Math.round((silverWeight * payMetalRate2 * document.getElementById('srGmWtInKg').value));
            } else if (payTotalWeightType2 == 'GM') {
                document.getElementById(prefix + 'Metal2Valuation').value = Math.round((silverWeight * payMetalRate2) / document.getElementById('srGmWtInGm').value);
            } else if (payTotalWeightType2 == 'MG') {
                document.getElementById(prefix + 'Metal2Valuation').value = Math.round((silverWeight * payMetalRate2) / (document.getElementById('srGmWtInMg').value));
            }
        }
    }
    if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        if (document.getElementById(prefix + 'Metal1Valuation').value == '' || document.getElementById(prefix + 'Metal1Valuation').value == 'NaN') {
            document.getElementById(prefix + 'Metal1Valuation').value = 0;
        }
        if (document.getElementById(prefix + 'Metal2Valuation').value == '' || document.getElementById(prefix + 'Metal2Valuation').value == 'NaN') {
            document.getElementById(prefix + 'Metal2Valuation').value = 0;
        }
        document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math.round(parseFloat(document.getElementById(prefix + 'Metal1Valuation').value) + parseFloat(document.getElementById(prefix + 'Metal2Valuation').value)).toFixed(2);
        document.getElementById(prefix + 'PayTotAmtRec').value = Math.round(parseFloat(document.getElementById(prefix + 'Metal1Valuation').value) + parseFloat(document.getElementById(prefix + 'Metal2Valuation').value)).toFixed(2);
        document.getElementById(prefix + 'PayTotAmt').value = Math.round(parseFloat(document.getElementById(prefix + 'Metal1Valuation').value) + parseFloat(document.getElementById(prefix + 'Metal2Valuation').value)).toFixed(2);
    }
}

//********Start code for add this option in Add Invoice:Author:SANT24OCT16
/*****Start to change panel name variable for sellpayup and slprpayment @Author:SHRI04NOV16*********************/
function changeStockOtherChgsOpt(othChgsBy, stockPanelName, invPanel, preInvoiceNo, invoiceNo, panel, sellPanelName, slprInfo, custId, UpPanel)
{
    var rateCutOption = '';
    loadXMLDoc();
    if (stockPanelName == 'SlPrPayment' || stockPanelName == 'SellPayUp' || panel == 'InvoicePayment' || panel == 'InvoicePayUp')
        rateCutOption = document.getElementById('stockPurPriceCut').value;

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('main_ajax_loading_div').style.visibility = "hidden";
            if (panel == 'InvoicePayment') {
                document.getElementById('suppDeposite').innerHTML = xmlhttp.responseText;
            } else if (panel == 'InvoicePayUp') {
                document.getElementById('suppAddInvoiceStockDiv').innerHTML = xmlhttp.responseText;
            } else if (panel == 'whSellPanel') {
                document.getElementById('slPrCurrentInvBeforePay').innerHTML = xmlhttp.responseText;
            } else if (stockPanelName == 'SlPrPayment' || stockPanelName == 'SellPayUp') {
                document.getElementById('slPrCurrentInvoice').innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById('addStockCurrentInvoice').innerHTML = xmlhttp.responseText;
            }
            if (stockPanelName == 'SellPayUp') {
                if (document.getElementById('stockPurPriceCut').value == 'RateCut' || document.getElementById('stockPurPriceCut').value == 'NoRateCut') {
                    calcWholeSaleRateCut('slPr');
                }
                calcStockRrCtCashBalance('slPr');
            } else if (panel == 'whSellPanel') {
                calcWholeSaleSellRateCut('slPr');
                calcStockRrCtCashBalance('slPr');
            } else if (panel == 'InvoicePayment' || panel == 'InvoicePayUp') {
                calcWholeSaleSellRateCut('suppDep');
                calcStockRrCtCashBalance('suppDep');
            }
        } else {
            document.getElementById('main_ajax_loading_div').style.visibility = "visible";
        }
    };
    if (panel == 'retailStock') {
        xmlhttp.open("POST", "include/php/ograindv.php?othChgsBy=" + othChgsBy + "&stockPanelName=" + stockPanelName + "&invPanel=" + invPanel + "&preInvoiceNo=" + preInvoiceNo + "&invoiceNo=" + invoiceNo + "&suppId=" + custId, true);
    } else if (panel == 'whSellPanel') {
        xmlhttp.open("POST", "include/php/ogwsindv.php?othChgsBy=" + othChgsBy + "&stockPanelName=" + stockPanelName + "&invPanel=" + invPanel + "&preInvoiceNo=" + preInvoiceNo + "&postInvoiceNo=" + invoiceNo + "&panelName=" + sellPanelName + "&slprInfo=" + slprInfo + "&custId=" + custId + "&upPanel=" + UpPanel, true);
    } else if (panel == 'InvoicePayment' || panel == 'InvoicePayUp') {
        xmlhttp.open("POST", "include/php/ogpayment.php?othChgsBy=" + othChgsBy + "&stockPanelName=" + stockPanelName + "&invPanel=" + invPanel + "&preInvoiceNo=" + preInvoiceNo + "&postInvoiceNo=" + invoiceNo + "&panelName=" + sellPanelName + "&slprInfo=" + slprInfo + "&custId=" + custId + "&paymentPanelName=" + panel + "&rateCutOption=" + rateCutOption, true);
    } else if (stockPanelName == 'SlPrPayment' || stockPanelName == 'SellPayUp') {
        xmlhttp.open("POST", "include/php/ogspindv.php?otherChgsBy=" + othChgsBy + "&preInvoiceNo=" + preInvoiceNo + "&postInvoiceNo=" + invoiceNo + "&panelName=" + stockPanelName + "&slprInfo=" + slprInfo + "&custId=" + custId + "&paymentPanelName=" + stockPanelName + "&rateCutOption=" + rateCutOption, true);
    } else {
        xmlhttp.open("POST", "include/php/ogwaindv.php?othChgsBy=" + othChgsBy + "&stockPanelName=" + stockPanelName + "&invPanel=" + invPanel + "&preInvoiceNo=" + preInvoiceNo + "&invoiceNo=" + invoiceNo + "&suppId=" + custId, true);
    }
    xmlhttp.send();
}
/*****End to change panel name variable for sellpayup and slprpayment @Author:SHRI04NOV16*********************/
//********End code for add this option in Add Invoice:Author:SANT24OCT16

function addWhStockExistingItemDiv(newPreInvoiceNo, newInvoiceNo, panelName, mainPanel, stockPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addStockCurrentInvoice").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogwaexad.php?newPreInvoiceNo=" + newPreInvoiceNo + "&newInvoiceNo=" + newInvoiceNo + "&panelName=" + panelName + "&mainPanel=" + mainPanel + "&stockPanel=" + stockPanel, true);
    xmlhttp.send();
}
function deleteWhStockListItem(stprId, panelName, mainPanel, pageNo, sellPresent, prevStockPresent, itemCategory, metalType) {
    if (sellPresent > 0) {
        alert('To Delete,First Delete This Item From Customer Jewellery Panel!');
        return false;
    } else {
        if (prevStockPresent > 0) {
            confirm_box = confirm("Previous balance gets changed from this item delete\n\nDo you really want to delete this Item?");
        } else {
            confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?");
        }
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
                    if (panelName == 'ItemDetailPanel') {
                        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
                        window.setTimeout(stockGlobalFunctionToCloseDiv, 1000);
                    }
                    else if (panelName == 'StockList') {
                        document.getElementById("stockList").innerHTML = xmlhttp.responseText;
                        window.setTimeout(stockGlobalFunctionToCloseDiv, 1000);
                    } else if (panelName == 'PurchaseList' || panelName == 'ItemStockList') {
                        document.getElementById("stockPanelPurchaseList").innerHTML = xmlhttp.responseText;
                        if (panelName == 'ItemStockList')
                            closeMessDiv('messDisplayDivision', 'DELETED');
                        else
                            closeMessDiv('messDisplayDiv', 'DELETED');
                    } else if (mainPanel == 'StockInvoice') {
                        document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
                        closeMessDiv('messDisplayDiv', 'DELETED');
                    } else {
                        document.getElementById("paymentDiv").innerHTML = xmlhttp.responseText;
                        window.setTimeout(stockGlobalFunctionToCloseDiv, 1000);
                    }
                } else {
                    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
                }
            };
//xmlhttp.open("GET", "include/php/ogialdel.php?itstId=" + itstId + "&itprId=" + stprId + "&panelName=" + panelName + "&mainPanel=" + mainPanel + "&pageNo=" + pageNo, true);             
            if (panelName == 'ItemStockList') {
                xmlhttp.open("GET", "include/php/ogwhstdl.php?stockId=" + stprId + "&panelName=" + panelName + "&pageNo=" + pageNo + "&itemCategory=" + itemCategory + "&metalType=" + metalType, true);
            } else {
                xmlhttp.open("GET", "include/php/ogwaldel.php?stprId=" + stprId + "&panelName=" + panelName + "&mainPanel=" + mainPanel + "&pageNo=" + pageNo + "&stockDeleteConfirm=" + stockDeleteConfirm, true);
            }
            xmlhttp.send();
        }
    }
}
var goldRateCutWeight = 0;
var silverRateCutWeight = 0;
/********Start to add condidtion for NaN @Author:GAUR24MAY16****************/
function calcWholeSaleRateCut(prefix) {
    var gdRtCt = 0;
    var metalType;
    if ((document.getElementById(prefix + 'Metal1WtPrevBal').value).trim() == '' || document.getElementById(prefix + 'Metal1WtPrevBal').value == 'NaN') {
        document.getElementById(prefix + 'Metal1WtPrevBal').value = 0;
    }
    if ((document.getElementById(prefix + 'GoldTotFineWt').value).trim() == '' || document.getElementById(prefix + 'GoldTotFineWt').value == 'NaN') {
        document.getElementById(prefix + 'GoldTotFineWt').value = 0;
    }
    if ((document.getElementById(prefix + 'Metal1WtRecBal').value).trim() == '' || document.getElementById(prefix + 'Metal1WtRecBal').value == 'NaN') {
        document.getElementById(prefix + 'Metal1WtRecBal').value = 0;
    }
    var gdBal = parseFloat(document.getElementById(prefix + 'Metal1WtPrevBal').value) + parseFloat(document.getElementById(prefix + 'GoldTotFineWt').value) - parseFloat(document.getElementById(prefix + 'Metal1WtRecBal').value);
    var goldWtType = document.getElementById(prefix + 'GoldTotFineWtType').value;
    if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        if ((document.getElementById(prefix + 'Metal1RtCtWtBal').value).trim() == '' || document.getElementById(prefix + 'Metal1RtCtWtBal').value == 'NaN') {
            document.getElementById(prefix + 'Metal1RtCtWtBal').value = 0;
        }
        var gdRtCt = parseFloat(document.getElementById(prefix + 'Metal1RtCtWtBal').value);
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
    if ((document.getElementById(prefix + 'SilverTotFineWt').value).trim() == '' || document.getElementById(prefix + 'SilverTotFineWt').value == 'NaN') {
        document.getElementById(prefix + 'SilverTotFineWt').value = 0;
    }
    if ((document.getElementById(prefix + 'Metal2WtRecBal').value).trim() == '' || document.getElementById(prefix + 'Metal2WtRecBal').value == 'NaN') {
        document.getElementById(prefix + 'Metal2WtRecBal').value = 0;
    }
    var silverRtCt = 0;
    var silverBal = parseFloat(document.getElementById(prefix + 'Metal2WtPrevBal').value) + parseFloat(document.getElementById(prefix + 'SilverTotFineWt').value) - parseFloat(document.getElementById(prefix + 'Metal2WtRecBal').value);
    var silverWtType = document.getElementById(prefix + 'SilverTotFineWtType').value;
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
    calcRawMetStock(prefix);
    calcStockRrCtCashBalance(prefix);
}
function calcWholeSaleSellRateCut(prefix) {
    if (document.getElementById(prefix + 'Metal1WtPrevBal1').value == '' || document.getElementById(prefix + 'Metal1WtPrevBal1').value == 'NaN') {
        document.getElementById(prefix + 'Metal1WtPrevBal1').value = 0;
    }
    if (document.getElementById(prefix + 'Metal1WtPurBal1').value == '' || document.getElementById(prefix + 'Metal1WtPurBal1').value == 'NaN') {
        document.getElementById(prefix + 'Metal1WtPurBal1').value = 0;
    }
    if (document.getElementById(prefix + 'Metal1WtRecBal1').value == '' || document.getElementById(prefix + 'Metal1WtRecBal1').value == 'NaN') {
        document.getElementById(prefix + 'Metal1WtRecBal1').value = 0;
    }
    var gdRtCt = 0;
    var gdBal = parseFloat(document.getElementById(prefix + 'Metal1WtPrevBal1').value) + parseFloat(document.getElementById(prefix + 'Metal1WtPurBal1').value) - parseFloat(document.getElementById(prefix + 'Metal1WtRecBal1').value);
    var gdRtCt = parseFloat(document.getElementById('metal1RtCtWt').value);
    var goldRtCtWtType = document.getElementById('metal1RtCtWtType').value;
    var goldWtType = document.getElementById(prefix + 'Metal1WtPurBal1Type').value;
    if (gdBal != '') {
        if (goldWtType == 'KG') {
            if (goldRtCtWtType == 'KG') {
                gdRtCt = parseFloat(gdRtCt).toFixed(3);
            }
            else if (goldRtCtWtType == 'GM') {
                gdRtCt = parseFloat(gdRtCt / 1000).toFixed(3);
            }
            else if (goldRtCtWtType == 'MG') {
                gdRtCt = parseFloat((gdRtCt / (1000 * 1000))).toFixed(3);
            }
        }
        else if (goldWtType == 'GM') {
            if (goldRtCtWtType == 'KG') {
                gdRtCt = parseFloat((gdRtCt * 1000)).toFixed(3);
            }
            else if (goldRtCtWtType == 'GM') {
                gdRtCt = parseFloat(gdRtCt).toFixed(3);
            }
            else if (goldRtCtWtType == 'MG') {
                gdRtCt = parseFloat((gdRtCt / (1000))).toFixed(3);
            }
        }
        else if (goldWtType == 'MG') {
            if (goldRtCtWtType == 'KG') {
                gdRtCt = parseFloat((gdRtCt * 1000 * 1000)).toFixed(3);
            }
            else if (goldRtCtWtType == 'GM') {
                gdRtCt = parseFloat((gdRtCt * 1000)).toFixed(3);
            }
            else if (goldRtCtWtType == 'MG') {
                gdRtCt = parseFloat((gdRtCt)).toFixed(3);
            }
        }
        document.getElementById(prefix + 'Metal1RtCtWtBal').value = gdRtCt;
//        alert(gdBal);
//        alert(gdRtCt);
        document.getElementById(prefix + 'PayMetal1WtBal').value = parseFloat(gdBal - gdRtCt).toFixed(3);
//        alert('calcWholeSaleSellRateCut='+document.getElementById(prefix + 'PayMetal1WtBal').value);
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            document.getElementById(prefix + 'Metal1RtCtWtBalDisp').value = gdRtCt + ' ' + goldWtType;
        }
    }
    if (document.getElementById(prefix + 'Metal2WtPrevBal1').value == '' || document.getElementById(prefix + 'Metal2WtPrevBal1').value == 'NaN') {
        document.getElementById(prefix + 'Metal2WtPrevBal1').value = 0;
    }
    if (document.getElementById(prefix + 'Metal2WtPurBal1').value == '' || document.getElementById(prefix + 'Metal2WtPurBal1').value == 'NaN') {
        document.getElementById(prefix + 'Metal2WtPurBal1').value = 0;
    }
    if (document.getElementById(prefix + 'Metal2WtRecBal1').value == '' || document.getElementById(prefix + 'Metal2WtRecBal1').value == 'NaN') {
        document.getElementById(prefix + 'Metal2WtRecBal1').value = 0;
    }
    var silverRtCt = 0;
    var silverBal = parseFloat(document.getElementById(prefix + 'Metal2WtPrevBal1').value) + parseFloat(document.getElementById(prefix + 'Metal2WtPurBal1').value) - parseFloat(document.getElementById(prefix + 'Metal2WtRecBal1').value);
    var silverRtCt = parseFloat(document.getElementById('metal2RtCtWt').value);
    var silverRtCtWtType = document.getElementById('metal2RtCtWtType').value;
    var silverWtType = document.getElementById(prefix + 'Metal2WtPurBal1Type').value;
    if (silverBal != '') {
        if (silverWtType == 'KG') {
            if (silverRtCtWtType == 'KG') {
                silverRtCt = parseFloat(silverRtCt).toFixed(3);
            }
            else if (silverRtCtWtType == 'GM') { //                alert(silverRtCtWtType);
                silverRtCt = parseFloat(silverRtCt / 1000).toFixed(3);
            }
            else if (silverRtCtWtType == 'MG') {
                silverRtCt = parseFloat((silverRtCt / (1000 * 1000))).toFixed(3);
            }
        }
        else if (silverWtType == 'GM') {
            if (silverRtCtWtType == 'KG') {
                silverRtCt = parseFloat((silverRtCt * 1000)).toFixed(3);
            }
            else if (silverRtCtWtType == 'GM') {
                silverRtCt = parseFloat(silverRtCt).toFixed(3);
            }
            else if (silverRtCtWtType == 'MG') {
                silverRtCt = parseFloat((silverRtCt / (1000))).toFixed(3);
            }
        }
        else if (silverWtType == 'MG') {
            if (silverRtCtWtType == 'KG') {
                silverRtCt = parseFloat((silverRtCt * 1000 * 1000)).toFixed(3);
            }
            else if (silverRtCtWtType == 'GM') {
                silverRtCt = parseFloat((silverRtCt * 1000)).toFixed(3);
            }
            else if (silverRtCtWtType == 'MG') {
                silverRtCt = parseFloat((silverRtCt)).toFixed(3);
            }
        }
        document.getElementById(prefix + 'Metal2RtCtWtBal').value = silverRtCt;
        document.getElementById(prefix + 'PayMetal2WtBal').value = parseFloat(silverBal - silverRtCt).toFixed(3);
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            document.getElementById(prefix + 'Metal2RtCtWtBalDisp').value = silverRtCt + ' ' + silverWtType;
        }
    }

    calcSellRawMetStock(prefix);
    calcStockRrCtCashBalance(prefix);
}

function calcStockRrCtCashBalance(prefix) {
//    alert('rate cut cash');
    var finalCashBal;
    var finBalLabel = 'FINAL CASH BALANCE :';
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
    document.getElementById(prefix + 'PayCashRecDisp').value = Math.round(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);
    document.getElementById(prefix + 'PayTotCashAmt').value = Math.round(parseFloat(totalCashPaidAmt) + parseFloat(totalChequeAmt) + parseFloat(totalCardAmt)).toFixed(2);


    var totalAmt = 0;
    var crystalAmnt = 0;
//    alert(document.getElementById('stockPurPriceCut').value);
    if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        if (document.getElementById(prefix + 'PayCrystalAmt').value == '' || document.getElementById(prefix + 'PayCrystalAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayCrystalAmt').value = 0;
        }
        crystalAmnt = parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value);
        if (document.getElementById(prefix + 'PayTotAmt').value == '' || document.getElementById(prefix + 'PayTotAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayTotAmt').value = 0;
        }
        if (document.getElementById(prefix + 'PayTotOthChgs').value == '' || document.getElementById(prefix + 'PayTotOthChgs').value == 'NaN') {
            document.getElementById(prefix + 'PayTotOthChgs').value = 0;
        }
//        alert(document.getElementById(prefix + 'PayTotAmt').value);
//        alert(document.getElementById(prefix + 'PayTotOthChgs').value);
        totalAmt = parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayTotOthChgs').value) + crystalAmnt;
    } else if (document.getElementById('stockPurPriceCut').value == 'NoRateCut') {
        if (document.getElementById(prefix + 'PayCrystalAmt').value == '' || document.getElementById(prefix + 'PayCrystalAmt').value == 'NaN') {
            document.getElementById(prefix + 'PayCrystalAmt').value = 0;
        }
        crystalAmnt = parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value);
        if (document.getElementById(prefix + 'PayTotOthChgs').value == '' || document.getElementById(prefix + 'PayTotOthChgs').value == 'NaN') {
            document.getElementById(prefix + 'PayTotOthChgs').value = 0;
        }
        totalAmt = crystalAmnt + parseFloat(document.getElementById(prefix + 'PayTotOthChgs').value);
    } else if (document.getElementById('stockPurPriceCut').value == 'ByCash') {
        if (document.getElementById(prefix + 'PayTotMetAmtRec').value == '' || document.getElementById(prefix + 'PayTotMetAmtRec').value == 'NaN') {
            document.getElementById(prefix + 'PayTotMetAmtRec').value = 0;
        }
//        alert(document.getElementById(prefix + 'PayTotAmt').value);
//        alert(document.getElementById(prefix + 'PayTotMetAmtRec').value);
        totalAmt = parseFloat(document.getElementById(prefix + 'PayTotAmt').value) - parseFloat(document.getElementById(prefix + 'PayTotMetAmtRec').value);
    } else {
        totalAmt = parseFloat(document.getElementById(prefix + 'PayTotAmt').value);
    }
    var newTotalAmount = totalAmt;
    document.getElementById('taxOnTotAmt').value = Math.round((parseFloat(totalAmt))).toFixed(2);

    var totalValuation = document.getElementById('taxOnTotAmt').value;
    if (totalValuation == null || totalValuation == '') {
        totalValuation = 0;
    }
    if (document.getElementById(prefix + 'VATTax').value == '') {
        document.getElementById(prefix + 'VATTax').value = 0;
    }
    var totTax = parseFloat(document.getElementById(prefix + 'VATTax').value) / 100;
    document.getElementById(prefix + 'PayVATAmtDisp').value = Math.round(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);
    document.getElementById(prefix + 'PayVATAmt').value = Math.round(parseFloat(totTax * parseFloat(totalValuation))).toFixed(2);
    if (document.getElementById(prefix + 'PayVATAmt').value == 'NaN' || document.getElementById(prefix + 'PayVATAmt').value == '') {
        document.getElementById(prefix + 'PayVATAmt').value = 0.00;
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
    document.getElementById(prefix + 'PayDiscountDisp').value = Math.round(parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
    if (document.getElementById('stockPurPriceCut').value == 'ByCash') {
        document.getElementById(prefix + 'PayTotFinalAmt').value = Math.round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value))).toFixed(2);
    }
    document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value))).toFixed(2);

    finalCashBal = Math.round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
    if (finalCashBal <= 0) {
        finBalLabel = 'FINAL CASH DEPOSIT :';
    }
    document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(finalCashBal).toFixed(2);
    document.getElementById('finCashBalTd').innerHTML = finBalLabel;
    document.getElementById(prefix + 'PayTotAmtBal').value = Math.round((parseFloat(totalAmt) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
    document.getElementById(prefix + 'PayTotRemAmtBal').value = Math.round((parseFloat(newTotalAmount) + parseFloat(document.getElementById(prefix + 'PayVATAmt').value)) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayDiscount').value)).toFixed(2);
//    alert(document.getElementById(prefix + 'PayVATAmt').value);
//    alert(document.getElementById(prefix + 'VATTax').value);

}
function showAddWhStockPanel(panel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (panel == 'StockList' || panel == 'stockListByItem' || panel == 'PurchaseList')
                document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText; //change in div name @AUTHOR: SANDY25SEP13
            else
                document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'PurchaseList')
        xmlhttp.open("POST", "include/php/ogwaprlt.php?panel=" + panel, true);
    else if (panel == 'StockList' || panel == 'stockListByItem')
        xmlhttp.open("POST", "include/php/ogwastlt.php?panel=" + panel, true);
    else
        xmlhttp.open("POST", "include/php/ogiamndv.php?panel=" + panel + "&panelName=AddStock", true);
    xmlhttp.send();
}
var addNewStockMetalType;
var newItemTunchDivCount;
function changeItemStockTunchOption(selectedMetalType, divCount) {
//    alert('changeItemStockTunchOption=' + selectedMetalType.value);
    var poststr = "metalType=" + encodeURIComponent(selectedMetalType.value)
            + "&itemDivCount=" + encodeURIComponent(divCount);
    addNewStockMetalType = selectedMetalType.value;
    newItemTunchDivCount = divCount;
    /************Start code to add div @Author:PRIYA07OCT14********/
    /********Start code to add divCount WholeSale @Author:PRIYA14APR15*********/
//    newItemTunchDivCount = '';
    poststr += "&tunchDivId=addItemTunch" +
            "&nextFieldId=addItemWastage" +
            "&prevFieldId=addItemNetWeightType" +
            "&netWeightFieldId=addItemNetWeight" +
            "&fineWeightFieldId=addItemFineWeight" +
            "&finalFineWeightFieldId=addItemFFineWeight" +
            "&tunchDivClass=form-control-select20-font12 placeholderClass";
    change_Item_stock_Tunch_Option('include/php/ogiatndv.php', poststr);
}

function change_Item_stock_Tunch_Option(url, parameters) {
    loadXMLDoc2();
    xmlhttp2.onreadystatechange = alertChangeItemStockTunchOption;
    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.send(parameters);
}
function alertChangeItemStockTunchOption() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("itemTunchDiv").innerHTML = xmlhttp2.responseText;
        newChangeAddStockMetalRate(addNewStockMetalType);
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function newChangeAddStockMetalRate(metalType) {
//    alert(metalType);
    var poststr = "metalType=" + encodeURIComponent(metalType) +
            "&panelName=" + encodeURIComponent('AddStockPanel');
    new_change_add_stock_metal_rate('include/php/ommrggdr.php', poststr);
    return false;
}
function new_change_add_stock_metal_rate(url, parameters) {

    loadXMLDoc2();
    xmlhttp2.onreadystatechange = alertNewChangeAddStockMetalRate;
    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.send(parameters);
}
function alertNewChangeAddStockMetalRate() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("metalRateDiv").innerHTML = xmlhttp2.responseText;
        newChangeStockItemId(addNewStockMetalType, 'AddStockPanel');
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function newChangeStockItemId(selectedMetalType, panelName) {
    //    alert(selectedMetalType);
    var poststr = "metalType=" + encodeURIComponent(selectedMetalType)
            + "&panelName=" + encodeURIComponent(panelName);
    new_change_stock_item_id('include/php/ogiaiddv.php', poststr);
    return false;
}
function new_change_stock_item_id(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertNewChangeStockItemId;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertNewChangeStockItemId() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        var str = xmlhttp.responseText;
        var strValue = new Array();
        strValue = str.split("*");
        document.getElementById("addItemPreId").value = strValue[0].trim(); //trim added @OMMODTAG SHRI_12JAN16
        document.getElementById("addItemId").value = strValue[1];
        document.getElementById("addItemMetalRate").focus();
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
//add itemname Author:GAUR25JUL16
function showWSStockItemDetailsDiv(documentRoot, itemCategory, metalType, panelName, stockType, itemName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPanelPurchaseList").innerHTML = xmlhttp.responseText; //change in div name @AUTHOR: SANDY25SEP13
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (stockType == 'ImitationStock') {
        xmlhttp.open("POST", "include/php/ogijstlt.php?panelName=" + panelName + "&itemCategory=" + itemCategory, true);
    } else {
        xmlhttp.open("POST", "include/php/ogwastlt.php?panelName=" + panelName + "&itemCategory=" + itemCategory + "&stockType=" + stockType + "&metalType=" + metalType + "&itemName=" + itemName, true);
    }
    xmlhttp.send();
}
//add itemname Author:GAUR25JUL16
function showStockNoOfRows(documentRootPath, rowsPerPage, pageNum, upRowsPanel, nwOrPanel, custId)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("stockPanelSubDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadNextItemList").style.visibility = "visible";
            document.getElementById("ajaxLoadNextItemListButt").style.visibility = "hidden";
        }
    };
    if (nwOrPanel == 'StockListByItems' || nwOrPanel == 'WholeSaleStockList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwastlt.php?rowsPerPage=" + rowsPerPage + "&panel=" + nwOrPanel + "&stockUpdateRows=" + upRowsPanel + "&panelName=" + nwOrPanel, true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogwaprlt.php?rowsPerPage=" + rowsPerPage + "&panel=" + nwOrPanel + "&stockUpdateRows=" + upRowsPanel + "&panelName=" + nwOrPanel, true);
    }
    xmlhttp.send();
}
function getStockCrystalFunc(crystalCount, div, commonPanel) {
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
    xmlhttp.open("POST", "include/php/ogwacydv.php?crystalCount=" + crystalCount + "&commonPanel=" + commonPanel, true);
    xmlhttp.send();
}
function closeStockCrystalFunc(cryCount, panelName, stprCryId, itstCryId, stprId, wtId, wtTypeId, sellPanel) {
    autoLessWeight(cryCount, document.getElementById('addItemAutoLessCryWt' + cryCount).checked, wtId, wtTypeId, 'deleteCry', sellPanel);
    document.getElementById("del" + cryCount).value = 'Deleted';
    document.getElementById("crystal" + cryCount).innerHTML = "";
    if (stprCryId != '') {
        deleteStockCrystalDiv(stprCryId, itstCryId, stprId, panelName);
    }
    calcItemCryPrice();
    return false;
}
function deleteStockCrystalDiv(stprCryId, itstCryId, stprId, panelName) {
    loadXMLDoc2();
    xmlhttp2.onreadystatechange = function () {
        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
            document.getElementById("suppPurByItemSubDiv").innerHTML = xmlhttp2.responseText;
            closeMessDiv('messDisplayDiv', 'CRYSTAL DELETED');
        }
    };
    xmlhttp2.open("POST", "include/php/ogadcydl.php?itprCryId=" + stprCryId + "&itstCryId=" + itstCryId + "&itprId=" + stprId + "&panelName=AddWholeSaleStock", true);
    xmlhttp2.send();
}
function checkRawStockWeight(rawPreId, rawPostId, rawMetalType, rawMetalId, recWt, recWtType, panelName, rwSlStatus) {
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
function getItemInSellLotByCategory(itemCategory, keyCodeInput, metalType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('itemCategorySelectDiv').innerHTML = xmlhttp.responseText;
            if (keyCodeInput == 40 || keyCodeInput == 38) {
                document.getElementById('itemCategoryListToSel').focus();
                document.getElementById('itemCategoryListToSel').options[0].selected = true;
            }
        }
    };
    xmlhttp.open("POST", "include/php/ogspslis.php?itemCategory=" + itemCategory + "&metalType=" + metalType + "&panelDiv=wholeSale", true);
    xmlhttp.send();
}
function getItemDetInSellByCategory(itemCategory, mainPanel, custId) {
    var metalType = document.getElementById('addItemMetal').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("itemListDivToAddStock").innerHTML = xmlhttp.responseText;
            if (keyCodeForItemNames == 40 || keyCodeForItemNames == 38) {
                document.getElementById('itemListToAddItemSelect').focus();
                document.getElementById('itemListToAddItemSelect').options[0].selected = true;
            }
        }
    };
    xmlhttp.open("POST", "include/php/ogspialt.php?metalType=" + metalType + "&itemCategory=" + itemCategory + "&mainPanel=" + mainPanel + "&custId=" + custId, true);
    xmlhttp.send();
}
function getWholesaleSellPanel(custId, panelName, sellPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("messageDisplayDiv").innerHTML = '';
            document.getElementById("slPrMainDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("sellPurchaseDiv").innerHTML = 'DAILY SELL PANEL';
            document.getElementById("addItemMetal").focus();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    if (panelName == 'DailyWholeSale') {
        xmlhttp.open("POST", "include/php/ogspdwsdv.php?custId=" + custId + "&panelName=" + panelName, true);
    } else {
        xmlhttp.open("POST", "include/php/ogspwisdv.php?custId=" + custId + "&panelName=" + panelName, true); //Filename Changed @OMMODTAG SHRI_03FEB16
    }
    xmlhttp.send();
}
function calculateWhSellLotPrice() {
//    alert('hi');
    if (document.getElementById('slPrItemWtBy').value == 'byNetWt') {
        var wt = document.getElementById('addItemNetWeight').value;
        var wtType = document.getElementById('addItemNetWeightType').value;
    } else if (document.getElementById('slPrItemWtBy').value == 'byGrossWt') {
        wt = document.getElementById('addItemGrossWeight').value;
        wtType = document.getElementById('addItemGrossWeightType').value;
    }
    var purWstg = document.getElementById('addItemWastage').value;
    if (purWstg == 'NaN' || purWstg == '')
        purWstg = 0;
    if (document.getElementById('addItemTunch').value != 'NotSelected' || document.getElementById('addItemTunch').value != '') {
        document.getElementById('addItemFineWeight').value = parseFloat(parseFloat(((document.getElementById('addItemTunch').value)) * wt) / 100).toFixed(3);
        var wstg = parseFloat(document.getElementById('addItemTunch').value) + parseFloat(purWstg);
        document.getElementById('addItemFFineWeight').value = parseFloat((parseFloat(wstg) * wt) / 100).toFixed(3);
        document.getElementById('addItemCustWastage').value = parseFloat(document.getElementById('addItemTunch').value) + parseFloat(purWstg);
    }

    if (document.getElementById('addItemFineWeight').value == '' || document.getElementById('addItemFineWeight').value == 'NaN') {
        document.getElementById('addItemFineWeight').value = 0;
    }
    if (document.getElementById('addItemFFineWeight').value == '' || document.getElementById('addItemFFineWeight').value == 'NaN') {
        document.getElementById('addItemFFineWeight').value = 0;
    }
    if (document.getElementById('addItemCustWastage').value == '' || document.getElementById('addItemCustWastage').value == 'NaN') {
        document.getElementById('addItemCustWastage').value = 0;
    }
    var labCharges = document.getElementById('addItemCustCharges').value;
    var labChargesType = document.getElementById('addItemCustChargesType').value;
    var totalLabNOthCharges = 0;
    var itemsQTY = parseInt(document.getElementById('addItemPieces').value);
    var metalRate = parseFloat(document.getElementById('addItemMetalRate').value);
    var metalType = document.getElementById('addItemMetal').value;
    var ffnWt = document.getElementById('addItemFFineWeight').value;
    if (document.getElementById('addItemLabourChgsBy').value == 'lbByNetWt') {
        labChargesBy = parseFloat(document.getElementById('addItemNetWeight').value);
    } else if (document.getElementById('addItemLabourChgsBy').value == 'lbByGrossWt') {
        labChargesBy = parseFloat(document.getElementById('addItemGrossWeight').value);
    } else {
        var labChargesBy = ffnWt;
    }
    if (document.getElementById('addItemGrossWeight').value != '' && document.getElementById('addItemNetWeight').value != '') {
        if (labCharges != '') {
            if (labChargesType == 'KG') {
                if (wtType == 'KG')
                    totalLabNOthCharges = labCharges * labChargesBy;
                else if (wtType == 'GM')
                    totalLabNOthCharges = (labCharges / 1000) * labChargesBy;
                else
                    totalLabNOthCharges = (labCharges / (1000 * 1000)) * labChargesBy;
            }
            else if (labChargesType == 'GM') {
                if (wtType == 'KG')
                    totalLabNOthCharges = labCharges * 1000 * labChargesBy;
                else if (wtType == 'GM')
                    totalLabNOthCharges = labCharges * labChargesBy;
                else
                    totalLabNOthCharges = (labCharges / 1000) * labChargesBy;
            }
            else if (labChargesType == 'MG') {
                if (wtType == 'KG')
                    totalLabNOthCharges = labCharges * 1000 * 1000 * labChargesBy;
                else if (wtType == 'GM')
                    totalLabNOthCharges = labCharges * 1000 * labChargesBy;
                else
                    totalLabNOthCharges = labCharges * labChargesBy;
            }
            else if (labChargesType == 'PP') {
                totalLabNOthCharges = labCharges * itemsQTY;
            }
            else if (labChargesType == 'per') {
                var gsWt = document.getElementById('addItemGrossWeight').value;
                var gsWtTyp = document.getElementById('addItemGrossWeightType').value;
                var labNOthCharges = (labCharges * gsWt) / 100;
                if (metalType == 'Gold') {
                    if (gsWtTyp == 'KG') {
                        totalLabNOthCharges = Math.round((labNOthCharges * metalRate) * document.getElementById('gmWtInKg').value).toFixed(2);
                    } else if (gsWtTyp == 'GM') {
                        totalLabNOthCharges = Math.round((labNOthCharges * metalRate) / document.getElementById('gmWtInGm').value).toFixed(2);
                    } else if (gsWtTyp == 'MG') {
                        totalLabNOthCharges = Math.round((labNOthCharges * metalRate) / document.getElementById('gmWtInMg').value).toFixed(2);
                    }
                } else if (metalType == 'Silver') {
                    if (gsWtTyp == 'KG') {
                        totalLabNOthCharges = Math.round(labNOthCharges * metalRate * document.getElementById('srGmWtInKg').value).toFixed(2);
                    } else if (gsWtTyp == 'GM') {
                        totalLabNOthCharges = Math.round((labNOthCharges * metalRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
                    } else if (gsWtTyp == 'MG') {
                        totalLabNOthCharges = Math.round((labNOthCharges * metalRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                    }
                }
            }
        }
        document.getElementById('addItemLbNOthCh').value = Math.round(totalLabNOthCharges).toFixed(2);
        if (metalType == 'Gold') {
            if (wtType == 'KG') {
                document.getElementById('addItemNTWNMetRate').value = Math.round((ffnWt * metalRate) * document.getElementById('gmWtInKg').value).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('addItemNTWNMetRate').value = Math.round((ffnWt * metalRate) / document.getElementById('gmWtInGm').value).toFixed(2);
            } else if (wtType == 'MG') {
                document.getElementById('addItemNTWNMetRate').value = Math.round((ffnWt * metalRate) / document.getElementById('gmWtInMg').value).toFixed(2);
            }
        } else if (metalType == 'Silver') {
            if (wtType == 'KG') {
                document.getElementById('addItemNTWNMetRate').value = Math.round(ffnWt * metalRate * document.getElementById('srGmWtInKg').value).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('addItemNTWNMetRate').value = Math.round((ffnWt * metalRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
            } else if (wtType == 'MG') {
                document.getElementById('addItemNTWNMetRate').value = Math.round((ffnWt * metalRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
            }
        }
        else {
            document.getElementById('addItemNTWNMetRate').value = 0;
            document.getElementById('addItemValuation').value = 0;
            document.getElementById('addItemFinalVal').value = 0;
        }
        if (metalType == 'Gold' || metalType == 'Silver') {
            document.getElementById('addItemValuation').value = Math.round(parseFloat(document.getElementById('addItemNTWNMetRate').value) + parseFloat(totalLabNOthCharges)).toFixed(2);
//            if (document.getElementById('valueAdd').value == 'false') {
//                document.getElementById('slPrItemValueAdded').value = Math.round(parseFloat(document.getElementById('addItemNTWNMetRate').value * parseFloat(itemPurity)) / 100).toFixed(2);
//            }
            //            document.getElementById('addItemFinalVal').value = Math.round(parseFloat(document.getElementById('addItemValuation').value) + parseFloat(document.getElementById('slPrItemValueAdded').value)).toFixed(2);
            document.getElementById('addItemFinalVal').value = Math.round(parseFloat(document.getElementById('addItemValuation').value)).toFixed(2);
        }
        if (document.getElementById('addItemVATTax').value != '') {
            document.getElementById('addItemTotTax').value = Math.round((parseFloat(document.getElementById('addItemValuation').value) * document.getElementById('addItemVATTax').value) / 100).toFixed(2);
            document.getElementById('addItemFinalVal').value = Math.round(parseFloat(document.getElementById('addItemValuation').value) + parseFloat(document.getElementById('addItemTotTax').value)).toFixed(2);
        }
        var totVal = document.getElementById('addItemFinalVal').value;
        if (document.getElementById('slPrCryFinVal').value != '') {
            document.getElementById('addItemFinalVal').value = Math.round(parseFloat(totVal) + parseFloat(document.getElementById('slPrCryFinVal').value)).toFixed(2);
        }
    }
    return false;
}
function calcWhSellCryPrice() {
    var crystalEntered = 0;
    var totalCryVal = 0;
    if (document.getElementById('panelName').value == 'SellDetUpPanel' || document.getElementById('panelName').value == 'SellPayUp') {
        getCrystalDiv = document.getElementById('noOfCry').value;
        var count = document.getElementById('slPrCrystalId').value;
        var delId = 'del' + count;
    } else {
        count = 1;
        delId = 'del' + 1;
    }

    for (var dc = count; getCrystalDiv != ''; dc++) {
        if (document.getElementById('del' + dc).value != 'Deleted') {
            var crystalQTY = parseInt(document.getElementById('slPrCryQty' + dc).value);
            var crystalGsWt = parseFloat(document.getElementById('slPrCryGSW' + dc).value);
            var crystalGsWtTyp = document.getElementById('slPrCryGSWType' + dc).value;
            var crystalRate = parseFloat(document.getElementById('slPrCryRate' + dc).value);
            var crystalRateType = document.getElementById('slPrCryRateType' + dc).value;
            var crystalVal = parseFloat(document.getElementById('slPrCryVal' + dc).value);
            var totalGSWTNRate = 0;
            if (crystalRateType == 'PP') {
                totalGSWTNRate = crystalRate * crystalQTY;
            } else {
                totalGSWTNRate = crystalRate * crystalGsWt;
            }
            document.getElementById('slPrCryVal' + dc).value = Math.round(totalGSWTNRate).toFixed(2);
            if (document.getElementById('slPrCryVal' + dc).value == 'NaN') {
                document.getElementById('slPrCryVal' + dc).value = 0;
            }
            totalCryVal += parseFloat(document.getElementById('slPrCryVal' + dc).value);
            document.getElementById('slPrCrystalValuation').value = Math.round(parseFloat(totalCryVal)).toFixed(2);
            document.getElementById('slPrCryFinVal').value = document.getElementById('slPrCrystalValuation').value;
            if (document.getElementById('slPrItemCryTax').value != '') {
                document.getElementById('slPrCrystalTotTax').value = Math.round(parseFloat((document.getElementById('slPrCrystalValuation').value * document.getElementById('slPrItemCryTax').value) / 100)).toFixed(2);
                document.getElementById('slPrCryFinVal').value = Math.round(parseFloat(document.getElementById('slPrCrystalValuation').value) + parseFloat(document.getElementById('slPrCrystalTotTax').value)).toFixed(2);
            }
            if (document.getElementById('slPrCryFinVal').value != '') {
                calculateWhSellLotPrice();
            }
        }
        if (document.getElementById(delId).value == 'Deleted') {
            document.getElementById('slPrCrystalValuation').value = '';
            document.getElementById('slPrItemCryTax').value = '';
            document.getElementById('slPrCrystalTotTax').value = '';
            document.getElementById('slPrCryFinVal').value = 0 + totalCryVal;
            calculateWhSellLotPrice();
        }
        crystalEntered++;
    }
    return false;
}
function closeWhCrystalFunc(cryCount, panelName, itprCryId, itstCryId, itprId, wtId, wtTypeId, sellPanel) {
//    alert('in close');
    autoLessWeight(cryCount, document.getElementById('slPrAutoLessCryWt' + cryCount).checked, wtId, wtTypeId, 'deleteCry', sellPanel);
    document.getElementById("del" + cryCount).value = 'Deleted';
    document.getElementById("crystal" + cryCount).innerHTML = "";
    if (itprCryId != '') {
        deleteCrystalDiv(itprCryId, itstCryId, itprId, panelName);
    }
//    alert('before')

    calcWhSellCryPrice();
    return false;
}
function getWhSellLotItemDetails() {
    loadXMLDoc2();
    var ntWeight = document.getElementById("addItemNetWeight").value;
    var ntWeighTyp = document.getElementById("addItemNetWeightType").value;
    var metalType = document.getElementById("addItemMetal").value;
    var itemName = document.getElementById("addItemName").value;
    var preId = document.getElementById("srchItemId").value;
    xmlhttp2.onreadystatechange = function () {
        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
            var str = xmlhttp2.responseText;
            var strArray = new Array();
            strArray = str.split("*");
            if (str == 'EXCEEDS' || strArray[14] == 'EXCEEDS') {
                document.getElementById('addItemId').value = '0';
                document.getElementById("itstId").value = '';
                alert("Net weight exceeding available weight !\n Please enter correct weight !");
                return false;
            } else if (str == 'noItem') {
            } else if (str == 'FAIL') {
                document.getElementById('addItemId').value = '0';
//            confirm_box = confirm("No such stock is available\nDo you really want to continue ?");
//            if (confirm_box == true) {
//               return false;
//            } else {
                //               document.getElementById("addItemGrossWeight").value = '';
                //               document.getElementById("addItemNetWeight").value = '';
                document.getElementById("addItemGrossWeight").focus();
                return false;
//            }
                //             alert('No Such Stock is available'); //@Author:SHE06NOV15
            } else {
                document.getElementById('addItemId').value = strArray[0];
                document.getElementById('addItemName').value = strArray[1];
                document.getElementById('addItemCategory').value = strArray[2];
                document.getElementById('addItemPieces').value = strArray[3];
                document.getElementById('addItemFineWeight').value = strArray[4];
                document.getElementById('addItemTunch').value = strArray[5];
                document.getElementById('addItemCustCharges').value = strArray[6];
                document.getElementById('addItemCustChargesType').value = strArray[7];
                document.getElementById('addItemValuation').value = strArray[8];
                document.getElementById('addItemVATTax').value = strArray[9];
                document.getElementById('addItemMetal').value = strArray[10];
                document.getElementById('addItemPreId').value = strArray[11];
                document.getElementById("addItemWastage").value = strArray[12];
                document.getElementById("addItemFFineWeight").value = strArray[13];
                if (strArray[14] != undefined && strArray[14] != 'SUCCESS' && strArray[14] != 'EXCEEDS') {
                    document.getElementById("itstId").value = strArray[14];
                }
                document.getElementById("itemAvailStatus").value = 'YES';
                calculateSellLotPrice();
                return true;
            }
        }
    };
    xmlhttp2.open("POST", "include/php/ogspwhic.php?netWeight=" + ntWeight + "&netWeighTyp=" + ntWeighTyp + "&metalType=" + metalType + "&itemName=" + itemName
            + "&preId=" + preId + "&panel=" + panel, true);
    xmlhttp2.send();
}
function deleteWhSellItem(custId, slPrId, panelName, panel) {
    var addToStock = 'no';
    if (mainPanel == 'SellItemReturn' && panelName == 'ItemReturn') {
        confirm_box = confirm("Do you really want to Return this Item?");
    } else if (mainPanel == 'SellItemReturn' && panelName == 'ItemActive') {
        confirm_box = confirm("Do you really want to Reactive this Item?");
    } else {
        confirm_box = confirm(deleteItemAlertMess + "\n\nDo you really want to delete this Item?"); //add variables of alert msgs @AUTHOR: SANDY29JAN14
    }

    if (confirm_box == true) {
        stock_add_confirm = confirm(addItemAlertMess + "\n\nDo you want to add this item in stock?");
        if (stock_add_confirm == true) {
            addToStock = 'yes';
        }
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (panelName == 'soldOutListDel') {
                    document.getElementById("sellMainDiv").innerHTML = xmlhttp.responseText;
                    window.setTimeout(sellFunctionToCloseDiv, 1000);
                } else if (mainPanel == 'SlPrPayment' && panelName == 'SlPrPayment') {
                    document.getElementById("paymentDiv").innerHTML = xmlhttp.responseText;
                    window.setTimeout(stockGlobalFunctionToCloseDiv, 1000);
                } else if (mainPanel == 'SlPrPayment' && panelName == '') {
                    document.getElementById("slPrCurrentInvoice").innerHTML = xmlhttp.responseText;
                    window.setTimeout(sellFunctionToCloseDiv, 1000);
                } else {
                    document.getElementById("slPrCurrentInvoice").innerHTML = xmlhttp.responseText;
                    window.setTimeout(sellFunctionToCloseDiv, 1000);
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/ogspitdl.php?custId=" + custId + "&slPrId=" + slPrId + "&panelName=" + panelName + "&mainPanel=" + panel + "&slPrInfo=" + panel + "&stockAdd=" + addToStock, true);
        xmlhttp.send();
    }
}
function calcSellStockItemBalance() {
//alert('calcSellStockItemBalance');
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
//        alert(document.getElementById('metalPayPanel').value);
        if (document.getElementById('metalPanel').value == 'SlPrPayment' && document.getElementById('metalPayPanel').value == 'PaymentSaved') {
            if (document.getElementById('rawId').value != '') {
                count = document.getElementById('rawId').value;
            } else {
                count = 1;
            }
            if (document.getElementById('noOfRawMet').value != 0) {
                getMetalDiv = document.getElementById('noOfRawMet').value;
            }

        } else {
            count = 1;
        }
        delId = 'del' + count;
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
    var goldWeight = 0;
    var silverWeight = 0;
    var silverWeightType = '';
    var goldWeightType = '';
    GoldWtType = '';
    SilverWtType = '';
    goldWtBal = 0;
    silverWtBal = 0;
    stockDiv = 'wholeSaleStock';
    //    for (var dc = count; dc <= getMetalDiv; dc++) { 
//    alert(getMetalDiv);
    for (var dc = count; getMetalDiv != ''; dc++) {
        if (document.getElementById('metalDel' + dc).value != 'Deleted') {
            var payTotalWeight1 = document.getElementById(prefix + 'PayMetal1RecWt' + dc).value;
            var payTotalWeightType1 = document.getElementById(prefix + 'PayMetal1RecWtType' + dc).value;
//            alert(payTotalWeightType1);
            var payMetalRate1 = document.getElementById(prefix + 'PayMetal1Rate' + dc).value;
            var payMetalTunch1 = document.getElementById(prefix + 'PayMetal1Tunch' + dc).value;
            var metalWeight = (payTotalWeight1 * payMetalTunch1) / 100;
            document.getElementById(prefix + 'PayMetal1FnWt' + dc).value = parseFloat(metalWeight).toFixed(3);
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold' || document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Alloy') {
                goldWeight = parseFloat(metalWeight);
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
//                    alert(goldWeight);
                    if (payMetalDueWeightType1 == 'KG') {
                        if (payTotalWeightType1 == 'KG') {
                            gdBal = parseFloat((gdBal) - goldWeight).toFixed(3);
                        }
                        else if (payTotalWeightType1 == 'GM') {
                            gdBal = parseFloat(((gdBal) - goldWeight / 1000)).toFixed(3);
                            goldWeight = parseFloat(goldWeight / 1000).toFixed(3);
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
                    totRecGd += parseFloat(goldWeight);
                    
                }
            }
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Silver') {
                silverWeight = parseFloat(metalWeight);
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
                //                alert(silverWtBal);
                silverWtBal = parseFloat(slBal).toFixed(3);
                SilverWtType = payMetalDueWeightType1;
                totRecSl += parseFloat(silverWeight);
            }
//            alert("totRecSl=" + totRecSl);
//            alert("totRecGd=" + totRecGd);
            document.getElementById(prefix + 'Metal1WtRecBal').value = parseFloat(totRecGd).toFixed(3) + ' ' + goldWeightType;
//            alert(totRecGd);
            document.getElementById(prefix + 'Metal1WtRecBal1').value = parseFloat(totRecGd).toFixed(3);
            document.getElementById(prefix + 'Metal1WtRecBal1Typ').value = goldWeightType;
            document.getElementById(prefix + 'Metal2WtRecBal').value = parseFloat(totRecSl).toFixed(3) + ' ' + silverWeightType;
            document.getElementById(prefix + 'Metal2WtRecBal1').value = parseFloat(totRecSl).toFixed(3);
            document.getElementById(prefix + 'Metal2WtRecBal1Typ').value = silverWeightType;
            if (document.getElementById(prefix + 'PayMetal1Val' + dc).value == '') {
                document.getElementById(prefix + 'PayMetal1Val' + dc).value = 0;
            }
            totAmtRec += parseFloat(document.getElementById(prefix + 'PayMetal1Val' + dc).value);
            document.getElementById(prefix + 'PayTotMetAmtRec').value = Math.round(totAmtRec).toFixed(2);
//            alert(document.getElementById(prefix + 'PayTotMetAmtRec').value);
            calcSellRawMetStock(prefix);
            calcStockRrCtCashBalance(prefix);
        }
        metalEntered++;
    }
    return false;
}
function calcSellRawMetStock(prefix) {
    if (document.getElementById(prefix + 'Metal1WtPrevBal1').value != '' || document.getElementById(prefix + 'Metal1WtPurBal1').value != '' || document.getElementById(prefix + 'Metal1WtRecBal1').value != '') {
        if (document.getElementById(prefix + 'Metal1WtPrevBal1').value == '' || document.getElementById(prefix + 'Metal1WtPrevBal1').value == 'NaN') {
            document.getElementById(prefix + 'Metal1WtPrevBal1').value = 0;
        }
        if (document.getElementById(prefix + 'Metal1WtPurBal1').value == '' || document.getElementById(prefix + 'Metal1WtPurBal1').value == 'NaN') {
            document.getElementById(prefix + 'Metal1WtPurBal1').value = 0;
        }
        if (document.getElementById(prefix + 'Metal1WtRecBal1').value == '' || document.getElementById(prefix + 'Metal1WtRecBal1').value == 'NaN') {
            document.getElementById(prefix + 'Metal1WtRecBal1').value = 0;
        }
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (document.getElementById('metal1RtCtWt').value == '' || document.getElementById('metal1RtCtWt').value == 'NaN') {
                document.getElementById('metal1RtCtWt').value = 0;
            }
            var totFinGdWtBal = parseFloat(document.getElementById(prefix + 'Metal1WtPrevBal1').value) + parseFloat(document.getElementById(prefix + 'Metal1WtPurBal1').value) - parseFloat(document.getElementById(prefix + 'Metal1WtRecBal1').value) - parseFloat(document.getElementById(prefix + 'Metal1RtCtWtBal').value);
        } else {
            var totFinGdWtBal = parseFloat(document.getElementById(prefix + 'Metal1WtPrevBal1').value) + parseFloat(document.getElementById(prefix + 'Metal1WtPurBal1').value) - parseFloat(document.getElementById(prefix + 'Metal1WtRecBal1').value);
        }

        document.getElementById(prefix + 'Metal1WtFinBal').value = parseFloat(totFinGdWtBal).toFixed(3) + ' ' + document.getElementById(prefix + 'Metal1WtPurBal1Type').value;
        document.getElementById(prefix + 'Metal1WtFinBal1').value = parseFloat(totFinGdWtBal).toFixed(3);
        document.getElementById(prefix + 'Metal1WtFinBal1Typ').value = document.getElementById(prefix + 'Metal1WtPurBal1Type').value;
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            var payTotalWeightType1 = document.getElementById('metal1RtCtWtType').value;
            var goldWeight = document.getElementById('metal1RtCtWt').value;
            var payMetalRate1 = document.getElementById('metal1Rate').value;
            if (payTotalWeightType1 == 'KG') {
                document.getElementById('metal1Valuation').value = Math.round((goldWeight * payMetalRate1 * document.getElementById('gmWtInKg').value));
            } else if (payTotalWeightType1 == 'GM') {
                document.getElementById('metal1Valuation').value = Math.round((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value);
            } else if (payTotalWeightType1 == 'MG') {
                document.getElementById('metal1Valuation').value = Math.round((goldWeight * payMetalRate1) / (document.getElementById('gmWtInMg').value));
            }
        }
    }
    if (document.getElementById(prefix + 'Metal2WtPrevBal1').value != '' || document.getElementById(prefix + 'Metal2WtPurBal1').value != '' || document.getElementById(prefix + 'Metal2WtRecBal1').value != '') {
        if (document.getElementById(prefix + 'Metal2WtPrevBal1').value == '' || document.getElementById(prefix + 'Metal2WtPrevBal1').value == 'NaN') {
            document.getElementById(prefix + 'Metal2WtPrevBal1').value = 0;
        }
        if (document.getElementById(prefix + 'Metal2WtPurBal1').value == '' || document.getElementById(prefix + 'Metal2WtPurBal1').value == 'NaN') {
            document.getElementById(prefix + 'Metal2WtPurBal1').value = 0;
        }
        if (document.getElementById(prefix + 'Metal2WtRecBal1').value == '' || document.getElementById(prefix + 'Metal2WtRecBal1').value == 'NaN') {
            document.getElementById(prefix + 'Metal2WtRecBal1').value = 0;
        }
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            if (document.getElementById('metal2RtCtWt').value == '' || document.getElementById('metal2RtCtWt').value == 'NaN') {
                document.getElementById('metal2RtCtWt').value = 0;
            }

            var totFinSrWtBal = parseFloat(document.getElementById(prefix + 'Metal2WtPrevBal1').value) + parseFloat(document.getElementById(prefix + 'Metal2WtPurBal1').value) - parseFloat(document.getElementById(prefix + 'Metal2WtRecBal1').value) - parseFloat(document.getElementById(prefix + 'Metal2RtCtWtBal').value);
        } else {
            var totFinSrWtBal = parseFloat(document.getElementById(prefix + 'Metal2WtPrevBal1').value) + parseFloat(document.getElementById(prefix + 'Metal2WtPurBal1').value) - parseFloat(document.getElementById(prefix + 'Metal2WtRecBal1').value);
        }
        document.getElementById(prefix + 'Metal2WtFinBal').value = parseFloat(totFinSrWtBal).toFixed(3) + ' ' + document.getElementById(prefix + 'Metal2WtPurBal1Type').value;
        document.getElementById(prefix + 'Metal2WtFinBal1').value = parseFloat(totFinSrWtBal).toFixed(3);
        document.getElementById(prefix + 'Metal2WtFinBal1Typ').value = document.getElementById(prefix + 'Metal2WtPurBal1Type').value;
        if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
            var payTotalWeightType2 = document.getElementById('metal2RtCtWtType').value;
            var silverWeight = document.getElementById('metal2RtCtWt').value;
            var payMetalRate2 = document.getElementById('metal2Rate').value;
            if (payTotalWeightType2 == 'KG') {
                document.getElementById('metal2Valuation').value = Math.round((silverWeight * payMetalRate2 * document.getElementById('srGmWtInKg').value));
            } else if (payTotalWeightType2 == 'GM') {
                document.getElementById('metal2Valuation').value = Math.round((silverWeight * payMetalRate2) / document.getElementById('srGmWtInGm').value);
            } else if (payTotalWeightType2 == 'MG') {
                document.getElementById('metal2Valuation').value = Math.round((silverWeight * payMetalRate2) / (document.getElementById('srGmWtInMg').value));
            }
        }
    }
    if (document.getElementById('stockPurPriceCut').value == 'RateCut') {
        if (document.getElementById('metal1Valuation').value == '') {
            document.getElementById('metal1Valuation').value = 0;
        }
        if (document.getElementById('metal2Valuation').value == '') {
            document.getElementById('metal2Valuation').value = 0;
        }
        if (document.getElementById('payPanelName').value != 'SellItemReturn' || document.getElementById('payPanelName').value != 'SellItemReturnUp') {
            document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math.round(parseFloat(document.getElementById('metal1Valuation').value) + parseFloat(document.getElementById('metal2Valuation').value)).toFixed(2);
        }
        document.getElementById(prefix + 'PayTotAmtRec').value = Math.round(parseFloat(document.getElementById('metal1Valuation').value) + parseFloat(document.getElementById('metal2Valuation').value)).toFixed(2);
    }
}
function searchWhSellItemNames(itemCategory, metalType, divNum, keyCodeInput) {
    keyCodeForItemNames = keyCodeInput;
    divNumForItemNames = divNum;
    panelNameForItemNames = divNum;
    //document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "visible";

    var poststr = "itemCategory=" + encodeURIComponent(itemCategory)
            + "&metalType=" + encodeURIComponent(metalType)
            + "&divNum=" + encodeURIComponent(divNum);
    search_item_names('include/php/omiladgv_1.php', poststr);
}
function getSellDetByItemName(itemName, itemCategory, mainPanel) {
    var metalType = document.getElementById('slPrItemMetal').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var str = xmlhttp.responseText;
            var strArray = new Array();
            strArray = str.split("*");
//            alert('Charges Typ :'+strArray[11]);
            document.getElementById('slPrItemPieces').value = Math.abs(strArray[2]);
            document.getElementById('slPrItemGSW').value = '';
            document.getElementById('slPrItemNTW').value = '';
            document.getElementById('slPrItemFineWeight').value = Math.abs(strArray[7]);
            document.getElementById('slPrItemTunch').value = Math.abs(strArray[8]);
            document.getElementById('addItemNTWNMetRate').value = Math.abs(strArray[9]);
            document.getElementById('slPrItemLabCharges').value = Math.abs(strArray[10]);
            document.getElementById('slPrItemLabChargesType').value = (strArray[11]);
            document.getElementById('slPrItemVATTax').value = Math.abs(strArray[12]);
            document.getElementById('slPrItemWastage').value = Math.abs(strArray[14]);
            document.getElementById('slPrItemFFineWeight').value = Math.abs(strArray[15]);
            calculateSellPrice();
        }
    };
//    alert(metalType);     
    xmlhttp.open("POST", "include/php/ogspiapd.php?metalType=" + metalType + "&itemCategory=" + itemCategory + "&itemName=" + itemName + "&mainPanel=" + mainPanel + "&custId=" + custId, true);
    xmlhttp.send();
}
var delRawString = '';
function closeStockRawMetalDiv(metalCnt, panelName) {
//    alert(panelName);
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
    if (panelName == 'SlPrPayment')
        calcSellStockItemBalance();
    else
        calcStockItemBalance();
}
function printSellItemListPanel(obj) {
    var DocumentContainer = document.getElementById(obj);
    var head;
    head = document.getElementById("sellItemListPanelTrId");
    head.style.position = "relative";
    head.style.top = "0px"
    head.style.visibility = "visible"; //visible added @Author:PRIYA28MAY14

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
            '<div id="slPrSellItemListDiv">' +
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
var stockMetalType = null;
function changeWhStockItemId(selectedMetalType, panelName) {
    var poststr = "metalType=" + encodeURIComponent(selectedMetalType)
            + "&panelName=" + encodeURIComponent(panelName);
    stockMetalType = selectedMetalType;
    change_wh_stock_item_id('include/php/ogiaiddv.php', poststr);
    return false;
}
function change_wh_stock_item_id(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertChangeWhStockItemId;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertChangeWhStockItemId() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        if (addstockDiv == 'AddStockPanel' || addstockDiv == 'AddWhStockPanel') {
            var str = xmlhttp.responseText;
            var strValue = new Array();
            strValue = str.split("*");
            document.getElementById("addItemPreId").value = strValue[0].trim(); //trim added @OMMODTAG SHRI_12JAN16
            document.getElementById("addItemId").value = strValue[1];
            //            document.getElementById("addItemPreId").focus();
            changeStockAccount(stockMetalType);
        }
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function changeStockAccount(metalType) {
//    alert(metalType);
    var panelName = 'AddWhStock';
    var poststr = "firmNo=" + encodeURIComponent(document.getElementById('firmId').value) +
            "&panelName=" + encodeURIComponent(panelName) +
            "&metalType=" + encodeURIComponent(metalType);
    change_stock_account('include/php/ommpfacc.php', poststr);
}
function change_stock_account(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertChangeStockAccount;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
function alertChangeStockAccount() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("selAccountDiv").innerHTML = xmlhttp.responseText;
        document.getElementById('addItemPreId').focus();
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function calStockItemPrice() {
//        alert('hii');
    if (document.getElementById('addItemFfnWtBy').value == 'byGrossWt') {
        wt = document.getElementById('addItemGrossWeight').value;
        wtType = document.getElementById('addItemGrossWeightType').value;
    } else {
        var wt = document.getElementById('addItemNetWeight').value;
        var wtType = document.getElementById('addItemNetWeightType').value;
    }
    if (document.getElementById('addItemTunch').value != 'NotSelected' || document.getElementById('addItemTunch').value != '') {
        document.getElementById('addItemFineWeight').value = ((document.getElementById('addItemTunch').value * wt) / 100).toFixed(3);
    }
    if (document.getElementById('addItemFineWeight').value == '' || document.getElementById('addItemFineWeight').value == 'NaN') {
        document.getElementById('addItemFineWeight').value = 0;
    }
    if (document.getElementById('addItemFinalTunch').value != '') {
        document.getElementById('addItemFFineWeight').value = ((document.getElementById('addItemFinalTunch').value * wt) / 100).toFixed(3);
    }
    var finalFineWeight = parseFloat(document.getElementById('addItemFFineWeight').value);
//    alert(document.getElementById('addItemFFineWeight').value);
    var itemsQTY = parseInt(document.getElementById('addItemPieces').value);
    var metalRate = parseFloat(document.getElementById('addItemMetalRate').value); //change metal rate id for tax in metal rate @Author:SHRI29FEB16
//        alert('calStockItemPrice-metalRate='+metalRate);
    var metalType = document.getElementById('addItemMetal').value;
    var labCharges = document.getElementById('addItemLabCharges').value;
    var labChargesType = document.getElementById('addItemLabChargesType').value;
    var totalLabNOthCharges = 0;
    var totVal;
    if (document.getElementById('addItemLabourChgsBy').value == 'lbByNetWt') {
        labChargesBy = parseFloat(document.getElementById('addItemNetWeight').value);
    } else if (document.getElementById('addItemLabourChgsBy').value == 'lbByGrossWt') {
        labChargesBy = parseFloat(document.getElementById('addItemGrossWeight').value);
    } else {
        var labChargesBy = finalFineWeight;
    }
    if (document.getElementById('addItemFineWeight').value == 'NaN') {
        document.getElementById('addItemFineWeight').value = 0;
    }
    if (document.getElementById('addItemFFineWeight').value == '' || document.getElementById('addItemFFineWeight').value == 'NaN') {
        document.getElementById('addItemFFineWeight').value = '';
    }
    if (document.getElementById('addItemMetalRate').value == '') {
        document.getElementById('addItemMetalRate').value = 0;
    }
    if (document.getElementById('addItemFFineWeight').value != '' && document.getElementById('addItemFFineWeight').value != 0) {
        if (labCharges != '') {
            if (labChargesType == 'KG') {
                if (wtType == 'KG')
                    totalLabNOthCharges = labCharges * labChargesBy;
                else if (wtType == 'GM')
                    totalLabNOthCharges = (labCharges / 1000) * labChargesBy;
                else
                    totalLabNOthCharges = (labCharges / (1000 * 1000)) * labChargesBy;
            } else if (labChargesType == 'GM') {
                if (wtType == 'KG')
                    totalLabNOthCharges = labCharges * 1000 * labChargesBy;
                else if (wtType == 'GM')
                    totalLabNOthCharges = labCharges * labChargesBy;
                else
                    totalLabNOthCharges = (labCharges / 1000) * labChargesBy;
            }
            else if (labChargesType == 'MG') {
                if (wtType == 'KG')
                    totalLabNOthCharges = labCharges * 1000 * 1000 * labChargesBy;
                else if (wtType == 'GM')
                    totalLabNOthCharges = labCharges * 1000 * labChargesBy;
                else
                    totalLabNOthCharges = labCharges * labChargesBy;
            } else if (labChargesType == 'PP') {
                totalLabNOthCharges = labCharges * itemsQTY;
            }
            document.getElementById('addItemLbNOthCh').value = Math.round(totalLabNOthCharges).toFixed(2);
        }  ///////////////////////////Total Calc wth total charge @author ATHU18/11/16
        else {
            var totalLabrChrg = document.getElementById('addItemLbNOthCh').value;
            if (document.getElementById('addItemLbNOthCh').value == '')
            {
                document.getElementById('addItemLbNOthCh').value = 0;
            }

            totalLabNOthCharges = parseFloat(totalLabrChrg);
        }//////////////////////////////////////////////////////edited by ATHU16/11/2015
        if (metalType == 'Gold') {
//            if (wtType == 'KG') {
//                document.getElementById('addItemNTWNMetRate').value = Math.round((finalFineWeight * metalRate) * 100).toFixed(2);
//                document.getElementById('addItemValuation').value = Math.round((finalFineWeight * metalRate) * 100 + totalLabNOthCharges).toFixed(2);
//                document.getElementById('addItemFinalVal').value = Math.round((finalFineWeight * metalRate) * 100 + totalLabNOthCharges).toFixed(2);
//            } else if (wtType == 'GM') {
//                document.getElementById('addItemNTWNMetRate').value = Math.round((finalFineWeight * metalRate) / 10).toFixed(2);
//                document.getElementById('addItemValuation').value = Math.round((finalFineWeight * metalRate) / 10 + totalLabNOthCharges).toFixed(2);
//                document.getElementById('addItemFinalVal').value = Math.round((finalFineWeight * metalRate) / 10 + totalLabNOthCharges).toFixed(2);
//            } else if (wtType == 'MG') {
//                document.getElementById('addItemNTWNMetRate').value = Math.round((finalFineWeight * metalRate) / 10000).toFixed(2);
//                document.getElementById('addItemValuation').value = Math.round((finalFineWeight * metalRate) / 10000 + totalLabNOthCharges).toFixed(2);
            //                document.getElementById('addItemFinalVal').value = Math.round((finalFineWeight * metalRate) / 10000 + totalLabNOthCharges).toFixed(2);
//            }
            if (wtType == 'KG') {
                document.getElementById('addItemNTWNMetRate').value = ((finalFineWeight * metalRate) * document.getElementById('gmWtInKg').value).toFixed(2);
                document.getElementById('addItemValuation').value = ((finalFineWeight * metalRate) * document.getElementById('gmWtInKg').value + totalLabNOthCharges).toFixed(2);
                document.getElementById('addItemFinalVal').value = ((finalFineWeight * metalRate) * document.getElementById('gmWtInKg').value + totalLabNOthCharges).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('addItemNTWNMetRate').value = ((finalFineWeight * metalRate) / document.getElementById('gmWtInGm').value).toFixed(2);
                document.getElementById('addItemValuation').value = ((finalFineWeight * metalRate) / document.getElementById('gmWtInGm').value + totalLabNOthCharges).toFixed(2);
                document.getElementById('addItemFinalVal').value = ((finalFineWeight * metalRate) / document.getElementById('gmWtInGm').value + totalLabNOthCharges).toFixed(2);
            } else if (wtType == 'MG') {
                document.getElementById('addItemNTWNMetRate').value = ((finalFineWeight * metalRate) / document.getElementById('gmWtInMg').value).toFixed(2);
                document.getElementById('addItemValuation').value = ((finalFineWeight * metalRate) / document.getElementById('gmWtInMg').value + totalLabNOthCharges).toFixed(2);
                document.getElementById('addItemFinalVal').value = ((finalFineWeight * metalRate) / document.getElementById('gmWtInMg').value + totalLabNOthCharges).toFixed(2);
            }
        } else if (metalType == 'Silver') {
//            if (wtType == 'KG') {
//                document.getElementById('addItemNTWNMetRate').value = ((finalFineWeight * metalRate)).toFixed(2);
//                document.getElementById('addItemValuation').value = ((finalFineWeight * metalRate) + totalLabNOthCharges).toFixed(2);
//                document.getElementById('addItemFinalVal').value = ((finalFineWeight * metalRate) + totalLabNOthCharges).toFixed(2);
//            } else if (wtType == 'GM') {
//                document.getElementById('addItemNTWNMetRate').value = ((finalFineWeight * metalRate) / 1000).toFixed(2);
//                document.getElementById('addItemValuation').value = ((finalFineWeight * metalRate) / 1000 + totalLabNOthCharges).toFixed(2);
//                document.getElementById('addItemFinalVal').value = ((finalFineWeight * metalRate) / 1000 + totalLabNOthCharges).toFixed(2);
//            } else if (wtType == 'MG') {
//                document.getElementById('addItemNTWNMetRate').value = ((finalFineWeight * metalRate) / (1000 * 1000)).toFixed(2);
//                document.getElementById('addItemValuation').value = ((finalFineWeight * metalRate) / (1000 * 1000)  + parseFloat(totalLabNOthCharges)).toFixed(2);
            //                document.getElementById('addItemFinalVal').value = ((finalFineWeight * metalRate) / (1000 * 1000)  + parseFloat(totalLabNOthCharges)).toFixed(2);
//            }
            if (wtType == 'KG') {
                document.getElementById('addItemNTWNMetRate').value = ((finalFineWeight * metalRate) * document.getElementById('srGmWtInKg').value).toFixed(2);
                document.getElementById('addItemValuation').value = ((finalFineWeight * metalRate * document.getElementById('srGmWtInKg').value) + totalLabNOthCharges).toFixed(2);
                document.getElementById('addItemFinalVal').value = ((finalFineWeight * metalRate * document.getElementById('srGmWtInKg').value) + totalLabNOthCharges).toFixed(2);
            } else if (wtType == 'GM') {
//                alert(finalFineWeight);
                document.getElementById('addItemNTWNMetRate').value = ((finalFineWeight * metalRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
                document.getElementById('addItemValuation').value = ((finalFineWeight * metalRate) / document.getElementById('srGmWtInGm').value + totalLabNOthCharges).toFixed(2);
                document.getElementById('addItemFinalVal').value = ((finalFineWeight * metalRate) / document.getElementById('srGmWtInGm').value + totalLabNOthCharges).toFixed(2);
            } else if (wtType == 'MG') {
                document.getElementById('addItemNTWNMetRate').value = ((finalFineWeight * metalRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                document.getElementById('addItemValuation').value = ((finalFineWeight * metalRate) / (document.getElementById('srGmWtInMg').value) + parseFloat(totalLabNOthCharges)).toFixed(2);
                document.getElementById('addItemFinalVal').value = ((finalFineWeight * metalRate) / (document.getElementById('srGmWtInMg').value) + parseFloat(totalLabNOthCharges)).toFixed(2);
            }
        } else {
            document.getElementById('addItemNTWNMetRate').value = 0;
            document.getElementById('addItemValuation').value = 0;
            document.getElementById('addItemFinalVal').value = 0;
        }
        if (document.getElementById('addItemVATTax').value != '') {
            document.getElementById('addItemTotTax').value = ((parseFloat(document.getElementById('addItemValuation').value) * document.getElementById('addItemVATTax').value) / 100).toFixed(2);
            document.getElementById('addItemFinalVal').value = (parseFloat(document.getElementById('addItemValuation').value) + parseFloat(document.getElementById('addItemTotTax').value)).toFixed(2);
        }
        totVal = parseFloat(document.getElementById('addItemFinalVal').value).toFixed(2);
        if (document.getElementById('addItemCryFinVal').value != '') {
            document.getElementById('addItemFinalVal').value = (parseFloat(totVal) + parseFloat(document.getElementById('addItemCryFinVal').value)).toFixed(2);
        }
    }
    return false;
}
function showImitationJewellery(panel) {
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('jewellerySubPanel').innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        }
    };
    if (panel == 'imitationList')
        xmlhttp.open("POST", "include/php/ogijlimsd.php", true);
    else
        xmlhttp.open("POST", "include/php/ogijstlt.php", true);
    xmlhttp.send();
}

function searchStockItemNames(itemCategory, itemName, metalType, divNum, keyCodeInput, itemPreId, itemId) {
    keyCodeForItemNames = keyCodeInput;
    divNumForItemNames = divNum;
//    alert(document.getElementById('addItemSuppName').value);

    //document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "visible";

    var poststr = "itemName=" + encodeURIComponent(itemName)
            + "&metalType=" + encodeURIComponent(metalType)
            + "&divNum=" + encodeURIComponent(divNum)
            + "&itemCategory=" + encodeURIComponent(itemCategory)
            + "&itemPreId=" + encodeURIComponent(itemPreId)
            + "&itemId=" + encodeURIComponent(itemId);
//    alert(divNum);
    if (divNum != 'slPrItemName' && divNum != 'slPrItemCategory') {
        poststr += "&suppName=" + encodeURIComponent(document.getElementById('addItemSuppName').value);
    }
    search_stock_item_names('include/php/omiladgv.php', poststr);
}
var keyCodeForItemNames;
function search_stock_item_names(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchStockItemNames;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSearchStockItemNames() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        if (divNumForItemNames == 'slPrItemCategory') {
            document.getElementById("itemListDivToAddStock").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("itemListDivToAddStockItem").innerHTML = xmlhttp.responseText;
        }
        if (keyCodeForItemNames == 40 || keyCodeForItemNames == 38) {
            document.getElementById('itemListToAddItemSelect').focus();
            document.getElementById('itemListToAddItemSelect').options[0].selected = true;
        }
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function getItemDetails(itemName, itemCategory, suppName, metalType) {
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            var str = xmlhttp.responseText;
//            alert(str);
            var strArray = new Array();
            strArray = str.split("*");
            document.getElementById('addItemTunch').value = strArray[0];
            document.getElementById('addItemPieces').value = strArray[1];
            document.getElementById('addItemWastage').value = strArray[2];
            document.getElementById('addItemGrossWeight').value = '';
            document.getElementById('addItemNetWeight').value = '';
            document.getElementById('addItemFinalTunch').value = strArray[3];
            document.getElementById('addItemFineWeight').value = strArray[4];
            document.getElementById('addItemFFineWeight').value = strArray[5];
            document.getElementById('addItemLabCharges').value = strArray[6];
            document.getElementById('addItemLabChargesType').value = strArray[7];
            document.getElementById('addItemCustCharges').value = strArray[8];
            document.getElementById('addItemCustChargesType').value = strArray[9];
            document.getElementById('addItemVATTax').value = strArray[10];
            document.getElementById('addItemFinalVal').value = '';
            document.getElementById('addItemPiecesChanged').value = strArray[1];
            document.getElementById('addItemWastageChanged').value = strArray[2];
            document.getElementById('addItemLabChargesChanged').value = strArray[6];
            document.getElementById('addItemCustChargesChanged').value = strArray[8];
            document.getElementById('addItemVATTaxChanged').value = strArray[10];
            calStockItemPrice();
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        }
    };
    xmlhttp.open("POST", "include/php/ogitstdt.php?suppName=" + suppName + "&itemName=" + itemName + "&itemCategory=" + itemCategory + "&metalType=" + metalType, true);
    xmlhttp.send();
}
function getAdvanceMoneyDetDiv(custId, panelName)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addNewUdhaarDiv").innerHTML = xmlhttp.responseText;
            document.getElementById("advMoneyDetails").style.visibility = "visible";
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omamndtdv.php?custId=" + custId + "&panelName=" + panelName, true);
    xmlhttp.send();
}
function showAddNewUdhaarDetDiv(custId, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addNewUdhaarDiv").innerHTML = xmlhttp.responseText;
//            document.getElementById('udhaarMainAmount').focus();//added @Author:PRIYA09NOV14
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'udhaarWithEMIList')
        xmlhttp.open("GET", "include/php/omuemidet.php?custId=" + custId, true);
    else
        xmlhttp.open("GET", "include/php/omuudet.php?custId=" + custId, true);
    xmlhttp.send();
}
function getSellLotItemDetByPreId(itemPreId, metalType, keyCodeInput) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            var str = xmlhttp.responseText;
            if (str == '') {
                document.getElementById(div).innerHTML = xmlhttp.responseText;
                document.getElementById('addItemId').value = '1';
            } else {
                document.getElementById('itemPreIdSelectDiv').innerHTML = xmlhttp.responseText;
                if (keyCodeInput == 40 || keyCodeInput == 38) {
                    document.getElementById('itemPreIdListToSel').focus();
                    document.getElementById('itemPreIdListToSel').options[0].selected = true;
                }
            }
        }
    };
    xmlhttp.open("POST", "include/php/ogisidsl.php?metalType=" + metalType + "&itemPreId=" + itemPreId + "&mainPanel=SlPrPayment", true);
    xmlhttp.send();
}
function getStockItemDetailsByPreId(preId, suppName, mainPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('stockPanelSubDiv').innerHTML = xmlhttp.responseText;
            document.getElementById('addItemPreId').focus();
            calItemPrice();
        }
    };
    xmlhttp.open("POST", "include/php/ogadstoc.php?preId=" + preId + "&suppName=" + suppName + "&stockDetPanel=preIdDetail", true);
    xmlhttp.send();
}
function getPayAllUdhaField(payAllUdhaVal, payPanelName, mainPanel, payPreInvNo, payInvNo, panel) {
    var prefix = document.getElementById('prefix').value;
    var payId = document.getElementById(prefix + 'PayId').value;
    var custId = document.getElementById(prefix + 'CustId').value;
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("prevBalDiv").innerHTML = xmlhttp.responseText;
            document.getElementById(prefix + 'PayPrevTotAmt').value = document.getElementById('prevBalance').value;
//            alert(document.getElementById(prefix + 'PayPrevTotAmt').value);
            calcStockRrCtCashBalance(prefix);
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ogsppyudh.php?payAllUdhaVal=" + payAllUdhaVal + "&payPanelName=" + payPanelName + "&mainPanel=" + mainPanel + "&payPreInvNo=" + payPreInvNo + "&payInvNo=" + payInvNo + "&custId=" + custId + "&suppPayId=" + payId, true);
    xmlhttp.send();
}
/*********************Start to add funtion @Author:SHRI30JUL16***************************/
function changeNetWeightByPktWt() {
//    alert(document.getElementById('addPanel').value);
    if (document.getElementById('addPanel').value == 'InvoicePayment' || document.getElementById('addPanel').value == 'InvoicePayUp' || document.getElementById('addPanel').value == 'UpdateItem') {//update panel added @Author:SANT22NOV16
        var gsWt = document.getElementById('suppItemGsWt1').value;
        var gsWtType = document.getElementById('suppItemGsWtType1').value;
        if (gsWt == '' || gsWt == null) {
            gsWt = 0;
        }

        var pktWt = document.getElementById('addItemPacketWeight').value;
        var pktWtType = document.getElementById('addItemPacketWeightType').value;
        if (pktWt == '' || pktWt == null) {
            pktWt = 0;
        }

        var NetWTID = document.getElementById('suppItemNtWt1');
    } else if (document.getElementById('addPanel').value == 'SlPrPayment' || document.getElementById('addPanel').value == 'SellPayUp' || document.getElementById('addPanel').value == 'SellStock' || document.getElementById('addPanel').value == 'SellDetUpPanel') {
        gsWt = document.getElementById('grossWeight').value;
        gsWtType = document.getElementById('slPrItemGSWT').value;
        if (gsWt == '' || gsWt == null) {
            gsWt = 0;
        }

        pktWt = document.getElementById('slPrPacketWeight').value;
        pktWtType = document.getElementById('slPrPacketWeightType').value;
        if (pktWt == '' || pktWt == null) {
            pktWt = 0;
        }
        NetWTID = document.getElementById('slPrItemNTW');
    } else if (document.getElementById('addPanel').value == 'StockPayment' || document.getElementById('addPanel').value == 'StockPayUp' || document.getElementById('addPanel').value == 'AddStock' || document.getElementById('addPanel').value == 'UpdateStock' || document.getElementById('addPanel').value == 'SellByLot'
            || document.getElementById('addPanel').value == 'DailyWholeSale') {
        var gsWt = document.getElementById('addItemNetWeight').value;
        var gsWtType = document.getElementById('addItemNetWeightType').value;
        if (gsWt == '' || gsWt == null) {
            gsWt = 0;
        }

        var pktWt = document.getElementById('addItemPacketWeight').value;
        var pktWtType = document.getElementById('addItemPacketWeightType').value;
        if (pktWt == '' || pktWt == null) {
            pktWt = 0;
        }

        var NetWTID = document.getElementById('addItemNetWeight');
    }
    NetWTID.value = parseFloat(parseFloat(gsWt) - convertWeight(pktWt, gsWtType, pktWtType)).toFixed(3);
}
/*********************End to add funtion @Author:SHRI30JUL16***************************/
/*******************Start to add function @Author:SHRI03AUG16***********************/
function autoLessWeight(cryCount, autoChk, gsWtId, wtTypId, cryPanel, sellPanel) {
//    alert(sellPanel);
    var remWt = 0;
    if (sellPanel == 'AddStock') {
        cryGSW = document.getElementById('addItemCryGSW' + cryCount).value;
        cryGSWT = document.getElementById('addItemCryGSWTyp' + cryCount).value;
    } else {
        var cryGSW = document.getElementById('slPrCryGSW' + cryCount).value;
        var cryGSWT = document.getElementById('slPrCryGSWType' + cryCount).value;
    }

    if (document.getElementById('netWeight').value == '' || document.getElementById('netWeight').value == 'NaN') {
        document.getElementById('netWeight').value = 0;
    }
//    alert(document.getElementById('grossWeight').value);
    var itemGSW = parseFloat(document.getElementById('netWeight').value);
    var itemGSWT = document.getElementById(wtTypId).value;
    cryGSW = convertWeight(cryGSW, itemGSWT, cryGSWT);
    if (cryPanel == 'deleteCry') {
        if (autoChk) {
            remWt = parseFloat(itemGSW) + parseFloat(cryGSW);
            document.getElementById(gsWtId).value = parseFloat(remWt).toFixed(3);
            document.getElementById('netWeight').value = parseFloat(remWt).toFixed(3);
            changeNetWeightByPktWt();
        }
    } else {
        if (autoChk) {
            remWt = parseFloat(itemGSW) - parseFloat(cryGSW);
        } else {
            remWt = parseFloat(itemGSW) + parseFloat(cryGSW);
        }
//        alert(remWt);
        document.getElementById(gsWtId).value = parseFloat(remWt).toFixed(3);
        document.getElementById('netWeight').value = parseFloat(remWt).toFixed(3);
        
        if (document.getElementById('addPanel').value != 'UpdateStock')
            changeNetWeightByPktWt();
        
        if (sellPanel == 'AddStock') {
            calStockItemPrice();
        } else if (sellPanel == 'ItemSell') {
            calculateSellPrice();
        } else {
            calculateWhSellLotPrice();
        }
    }

}
function convertWeight(wtBal, to, from) {
    var convertedWt = 0;
    if (wtBal != '') {
        if (to == 'KG') {
            if (from == 'KG') {
                convertedWt = parseFloat(wtBal).toFixed(3);
            }
            else if (from == 'GM' || from == 'CT') {
                convertedWt = parseFloat(wtBal / 1000).toFixed(3);
            }
            else if (from == 'MG') {
                convertedWt = parseFloat((wtBal / (1000 * 1000))).toFixed(3);
            }
        }
        else if (to == 'GM') {
            if (from == 'KG') {
                convertedWt = parseFloat((wtBal * 1000)).toFixed(3);
            }
            else if (from == 'GM' || from == 'CT') {
                convertedWt = parseFloat(wtBal).toFixed(3);
            }
            else if (from == 'MG') {
                convertedWt = parseFloat((wtBal / (1000))).toFixed(3);
            }
        }
        else if (to == 'MG') {
            if (from == 'KG') {
                convertedWt = parseFloat((wtBal * 1000 * 1000)).toFixed(3);
            }
            else if (from == 'GM') {
                convertedWt = parseFloat((wtBal * 1000)).toFixed(3);
            }
            else if (from == 'MG') {
                convertedWt = parseFloat((wtBal)).toFixed(3);
            }
        }
    }
    return convertedWt;
}
/*******************End to add function @Author:SHRI03AUG16***********************/
function searchTunchForPanelBlank() {
    document.getElementById("tunchListDivToAddTUNCH").innerHTML = '';
}
function searchTunch(tunchValue, panelName, keyCodeInput, metalType, tunchId, nextId, prevId) {
    keyCodeForTunchValue = keyCodeInput;
    keyCodeForTunchValueOption = 0;
    tunchDivId = tunchId;
    tunchDivCount = panelName;
    nextFieldId = nextId;
    prevFieldId = prevId;
    var poststr = "TunchValue=" + encodeURIComponent(tunchValue) +
            "&panelName=" + encodeURIComponent(panelName) +
            "&metalType=" + encodeURIComponent(metalType);
    if (panelName == 'AddWhStockPanel' || panelName == 'AddStockPanel') {
        poststr += "&netWeightFieldId=addItemNetWeight" +
                "&fineWeightFieldId=addItemFineWeight" +
                "&finalFineWeightFieldId=addItemFFineWeight" +
                "&tunchDivClass=form-control-select20-font12 placeholderClass";
    } else if (panelName == 'SellPurchase') {
        poststr += "&netWeightFieldId=slPrItemNTW" +
                "&fineWeightFieldId=slPrItemFineWeight" +
                "&finalFineWeightFieldId=slPrItemFFineWeight" +
                "&tunchDivClass=form-control-select20-font12 placeholderClass";
    }
    search_tunch('include/php/ogiatnsl.php', poststr);
}
var keyCodeForTunchValue;
var keyCodeForTunchValueOption = 0;
var keyCodeForTunchValueOptionCount;
var keyCodeForTunchValueOptionPrev = 0;
var tunchDivId = '';
var tunchDivCount = '';
function search_tunch(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSearchTunch;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
//*********Start code to add condition for Fine Invoice Panel:Author:SANT18NOV16*****
function alertSearchTunch() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("tunchListDivToAddTUNCH").innerHTML = xmlhttp.responseText;
        document.getElementById('tunchListToAddTunchSelect').focus();
        keyCodeForRoiValueOptionPrev = keyCodeForRoiValueOption;
        document.getElementById('tunchListToAddTunchSelect').options[keyCodeForRoiValueOptionPrev].selected = false;
        document.getElementById('tunchListToAddTunchSelect').options[keyCodeForRoiValueOption].selected = true;
        document.getElementById(tunchDivId).focus();
        if (tunchDivCount == 'SellPurchase') {
            calculateSellPrice();
        } else if (tunchDivCount == 'AddInvoice') {
            addInvoiceValue();
        } else {
            calStockItemPrice();
        }
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
//*********End code to add condition for Fine Invoice Panel:Author:SANT18NOV16*****
function getTunchValById(tunchId, panelName, metalType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("tunchSelDiv").innerHTML = xmlhttp.responseText;
            document.getElementById(tunchDivId).focus();
            if (panelName == 'SellPurchase') {
                calculateSellPrice();
            } else if (panelName == 'SellByLot') {
                calculateWhSellLotPrice();
            } else {
                calStockItemPrice();
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    }
    xmlhttp.open("POST", "include/php/ogtnsid.php?tunchId=" + tunchId + "&panelName=" + panelName + "&tunchDivId=" + tunchDivId + "&metalType=" + metalType + "&nextFieldId=" + nextFieldId + "&prevFieldId=" + prevFieldId, true);
    xmlhttp.send();
}
/*********** Start Code to add function @Author:SHRI08SEP16 **********************/
function deleteRawStockMetalItm(rwstId, mainPanel, pageNum, rowsPerPage, metalType, metalRateId) {
    confirm_box = confirm(deleteAlertMess + "\nDo you really want to delete this Main Stock Item?"); //change in line @AUTHOR: SANDY28JAN14
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("rawPanelPurchaseList").innerHTML = xmlhttp.responseText;
                window.setTimeout(rawMetalStockFunctionCloseDiv, 1000);
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("POST", "include/php/ogrmdelt.php?rwprId=" + rwstId + "&mainPanel=" + mainPanel +
                "&pageNum=" + pageNum + "&rowsPerPage=" + rowsPerPage + "&metalType=" + metalType + "&metalRateId=" + metalRateId, true);
        xmlhttp.send();
    }
}
function rawMetalStockFunctionCloseDiv() {
    document.getElementById('messDisplayDiv').innerHTML = '';
}
/*********** End Code to add function @Author:SHRI08SEP16 **********************/
/*****<!--description: START CODE TO Add customerStatement @Author: DISH08OCT16-->******/
function custStatementDetails(custId, custFirmId) {

    var poststr = "custId=" + custId +
            "&firmId=" + custFirmId;
    cust_udhaar_details('include/php/ogcstdet.php', poststr);
}

/*****<!--description: END CODE TO Add customerStatement @Author: DISH08OCT16-->******/
/******description: START CODE TO Add customerStatement @Author: DISH08OCT16******/
function searchStatTranDetails(ddDetVal, firmId, fromDay, fromMonth, fromYear, toDay, toMonth, toYear, ddPanelToShow, ddMainPanel, custId) {
    if (valDailyDiaryInputs()) {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("CustStmDivs").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        var dailyDiaryFromDate = fromDay.value + '-' + fromMonth.value + '-' + fromYear.value;
        var dailyDiaryToDate = toDay.value + '-' + toMonth.value + '-' + toYear.value;
        xmlhttp.open("POST", "include/php/omddddandv_1.php?ddDetVal=" + ddDetVal + "&firmId=" + firmId + "&dailyDiaryFromDate=" + dailyDiaryFromDate + "&dailyDiaryToDate=" + dailyDiaryToDate + "&ddPanelToShow=" + ddPanelToShow + "&ddMainPanel=" + ddMainPanel + "&custId=" + custId, true);
        xmlhttp.send();
    }
}

/******description: START CODE TO Add customerStatement @Author: DISH14NOV16******/
function searchCustStatTranDetails(firmId, fromDay, fromMonth, fromYear, toDay, toMonth, toYear, custId) {

    if (valDailyDiaryInputs()) {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("CustStmDivs").innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        var dailyDiaryFromDate = fromDay.value + '-' + fromMonth.value + '-' + fromYear.value;
        var dailyDiaryToDate = toDay.value + '-' + toMonth.value + '-' + toYear.value;
        xmlhttp.open("POST", "include/php/omddddandv_1.php?firmId=" + firmId + "&dailyDiaryFromDate=" + dailyDiaryFromDate + "&dailyDiaryToDate=" + dailyDiaryToDate + "&custId=" + custId, true);
        xmlhttp.send();
    }
}
/******description: END CODE TO Add customerStatement @Author: DISH14NOV16******/
/**************Start code to add function @Author:SHRI05NOV16***************/
function valKeyPressedForNumNChar(evt) {
    var charCode = (evt.which) ? evt.which : event.keyCode;
    if ((charCode == 8 || charCode == 13) || (charCode > 96 && charCode < 123) || (charCode > 47 && charCode < 58)) {
        return true;
    }
    else if ((charCode < 65 || charCode > 90)) {
        return false;
    }
    return true;
}
function calcMetalRateCut(prefix) {
    var slBal = 0;
    var gdBal = 0;
    var slMetalTyp = document.getElementById(prefix + 'SilverTotFineWtType').value;
    slBal = parseFloat(document.getElementById(prefix + 'SilverTotFineWt').value) + parseFloat(document.getElementById(prefix + 'Metal2WtPrevBal').value);
    var gdMetalTyp = document.getElementById(prefix + 'GoldTotFineWtType').value;
    gdBal = parseFloat(document.getElementById(prefix + 'GoldTotFineWt').value) + parseFloat(document.getElementById(prefix + 'Metal1WtPrevBal').value);
    if (document.getElementById('stockPurPriceCut').value == 'RateCut' || document.getElementById('stockPurPriceCut').value == 'NoRateCut') {
        document.getElementById(prefix + 'PayMetal1WtBal').value = gdBal;
        document.getElementById(prefix + 'PayMetal1WtBalType').value = gdMetalTyp;
        if ((document.getElementById("payPanelName").value != 'InvoicePayUp' && 
                document.getElementById("payPanelName").value != 'NwOrDelPaymentUp' && 
                document.getElementById("payPanelName").value != 'SuppOrderDeliveryUp' && 
                document.getElementById("payPanelName").value != 'StockPayUp' && 
                document.getElementById("payPanelName").value != 'SellPayUp' && 
                document.getElementById("payPanelName").value != 'SuppOrderUp' && 
                document.getElementById("payPanelName").value != 'NwOrPayUp') && 
                document.getElementById('stockPurPriceCut').value == 'RateCut') { //add panel for order panel prev balance :Author:SANT01DEC16
            document.getElementById(prefix + 'Metal1RtCtWtBal').value = gdBal;
            document.getElementById(prefix + 'Metal1RtCtWtBalType').value = gdMetalTyp;
            document.getElementById('metal1RtCtWtBal').value = gdBal + '' + gdMetalTyp;//Add Value this variable:Author:SANT24OCT16
        }


        document.getElementById(prefix + 'PayMetal2WtBal').value = slBal;
        document.getElementById(prefix + 'PayMetal2WtBalType').value = slMetalTyp;
        if ((document.getElementById("payPanelName").value != 'InvoicePayUp' && 
                document.getElementById("payPanelName").value != 'NwOrDelPaymentUp' && 
                document.getElementById("payPanelName").value != 'SuppOrderDeliveryUp' && 
                document.getElementById("payPanelName").value != 'StockPayUp' && 
                document.getElementById("payPanelName").value != 'SellPayUp' && 
                document.getElementById("payPanelName").value != 'SuppOrderUp' && 
                document.getElementById("payPanelName").value != 'NwOrPayUp') && 
                document.getElementById('stockPurPriceCut').value == 'RateCut') { //add panel for order panel prev balance :Author:SANT01DEC16
            document.getElementById(prefix + 'Metal2RtCtWtBal').value = slBal;
            document.getElementById(prefix + 'Metal2RtCtWtBalType').value = slMetalTyp;
            document.getElementById('metal2RtCtWtBal').value = slBal + '' + slMetalTyp;//Add Value this variable:Author:SANT24OCT16
        }
    }
    document.getElementById(prefix + 'Metal1WtFinBal').value = gdBal;
    document.getElementById(prefix + 'Metal1WtFinBalType').value = gdMetalTyp;
    document.getElementById('metal1WtFinBal').value = gdBal + ' ' + gdMetalTyp;
    document.getElementById(prefix + 'Metal2WtFinBal').value = slBal;
    document.getElementById(prefix + 'Metal2WtFinBalType').value = slMetalTyp;
    document.getElementById('metal2WtFinBal').value = slBal + ' ' + slMetalTyp;
}
/**************End code to add function @Author:SHRI05NOV16***************/
//-----------------START DISH14NOV16-----------------------//
function showWSStockItemDetailsDiv_1(documentRoot, itemCategory, metalType, panelName, stockType, itemName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addStockCurrentInvoice").innerHTML = xmlhttp.responseText; //change in div name @AUTHOR: SANDY25SEP13
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (stockType == 'CrystalStock') {
        xmlhttp.open("POST", "include/php/ogcrinvd_1.php?panelName=" + panelName + "&itemCategory=" + itemCategory + "&itemName=" + itemName, true);
    } else {
        xmlhttp.open("POST", "include/php/ogwastlt.php?panelName=" + panelName + "&itemCategory=" + itemCategory + "&stockType=" + stockType + "&metalType=" + metalType + "&itemName=" + itemName, true);
    }
    xmlhttp.send();
}
//-----------------END DISH14NOV16-----------------------//
//*****************START CODE to set Back Button : DISH14NOV16**************************//
function navigateBackToStockPanel_1(documentRootPath, panel, page) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (panel == 'udhaarList' || panel == 'StockList' || panel == 'RawList' || panel == 'CurrentCrystalStockList')
                document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
            else if (panel == 'retailPurchaseList')
                document.getElementById("stockPanelPurchaseList").innerHTML = xmlhttp.responseText;
            else
                document.getElementById("jewelleryPanel").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogcrmnlt.php?listPanel=CurrentCrystalStockList", true);
    xmlhttp.send();
}
//*****************END CODE to set Back Button : DISH14NOV16**************************//
/**************START code to add new function***********:DISH14NOV16****************************/
function showSlPrInvDiv_1(srchItemPreId, srchItemPostId, custId, panelName) {
    var firstChar = srchItemPreId.charAt(0);
    var res = firstChar.toUpperCase();//chnaged @OMMODTAG PRIYA_05MAY15
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
    if (firstChar == 'J' || firstChar == 'j')
        xmlhttp.open("POST", "include/php/ogcrspdv_1.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
    else
        xmlhttp.open("POST", "include/php/ogcrspdv_1.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
    xmlhttp.send();
}
/**************END code to add new function *******DISH14NOV16*********************************/
function showSlPrJewelleryInvDiv(srchItemPreId, srchItemPostId, custId, panelName) {
//    alert(panelName);
    var firstChar = srchItemPreId.charAt(0);
    var res = firstChar.toUpperCase();//chnaged @OMMODTAG PRIYA_05MAY15
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("sellPurchaseItemDetails").innerHTML = xmlhttp.responseText;
            if (res == 'G' || res == 'S' || res == 'O') {
                searchItemNames(itemName, metalType, divNum, keyCodeInput);
            }

            document.getElementById('slPrDOBDay').focus();
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

//         if (panelName == 'StockPurchasePanel') {
    xmlhttp.open("POST", "include/php/ogspjsdv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId + "&panelName=" + panelName, true);
//        } 
    xmlhttp.send();
}
function showSlPrImitationInvDiv(srchItemPreId, srchItemPostId, custId, panelName) {
//    alert(panelName);
    var firstChar = srchItemPreId.charAt(0);
    var res = firstChar.toUpperCase();//chnaged @OMMODTAG PRIYA_05MAY15
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("sellPurchaseItemDetails").innerHTML = xmlhttp.responseText;

            document.getElementById('slPrDOBDay').focus();
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'ImitationPurchasePanel') {
        xmlhttp.open("POST", "include/php/ogijsmndv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
    } else {
        xmlhttp.open("POST", "include/php/ogijsmndv.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
    }
    xmlhttp.send();
}
function showSlPrCrystalInvDiv(srchItemPreId, srchItemPostId, custId, panelName) {
//    alert(panelName);
    var firstChar = srchItemPreId.charAt(0);
    var res = firstChar.toUpperCase();//chnaged @OMMODTAG PRIYA_05MAY15
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("sellPurchaseItemDetails").innerHTML = xmlhttp.responseText;

            document.getElementById('slPrDOBDay').focus();
        }
        else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    if (panelName == 'CrystalPurchasePanel') {
        //****************START code to sell :DISH14NOV16******************************//
        xmlhttp.open("POST", "include/php/ogcrspdv_1.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
//****************END code to sell :DISH14NOV16******************************//
    }
    else {
        //****************START code to sell :DISH14NOV16******************************//
        xmlhttp.open("POST", "include/php/ogcrspdv_1.php?srchItemPreId=" + srchItemPreId + "&srchItemPostId=" + srchItemPostId + "&custId=" + custId, true);
        //****************END code to sell :DISH14NOV16******************************//
    }
    xmlhttp.send();
}
function calculateItemWeight(count) {
    var returnWt = document.getElementById('addItemReturnedWeight' + count).value;
    var rWtTyp = document.getElementById('addItemReturnedWeightType' + count).value;

    var gsWt = document.getElementById('addItemGsWt' + count).value;
    var gWtTyp = document.getElementById('addItemGsWtTyp' + count).value;
    if (returnWt == '' || returnWt == 'NaN') {
        returnWt = '0.00';
    }
    var convertedWt = convertWeight(parseFloat(returnWt), gWtTyp, rWtTyp);

    var purity = parseFloat(document.getElementById('addItemFinTunch' + count).value);

    var finalWt = parseFloat(gsWt) - convertedWt;
    if (document.getElementById('addItemFfnWtBy').value == 'byGrossWt') {
        wt = document.getElementById('addItemGsWt' + count).value;
    } else {
        var wt = document.getElementById('addItemNtWt' + count).value;
    }
    var FinalFnWt = parseFloat(wt) - convertedWt;
    document.getElementById('addItemFinalWt' + count).innerHTML = (finalWt).toFixed(3) + ' ' + gWtTyp;
    document.getElementById('addItemFinalGsWt' + count).value = (finalWt).toFixed(3);

    document.getElementById('addItemFFineWt' + count).innerHTML = parseFloat(parseFloat(FinalFnWt * purity) / 100).toFixed(3) + ' ' + gWtTyp;
    document.getElementById('addItemFinalFinWt' + count).value = parseFloat(parseFloat(FinalFnWt * purity) / 100).toFixed(3);

}
//function calculateTotalWeight() {
//    var totItem = parseFloat(document.getElementById('totalItem').value);
//    var totWeight = 0;
//    for (var count = 0; count < totItem; count++) {
//        var finalWt = parseFloat(document.getElementById('addItemFinalFinWt' + count).value).toFixed(2);
//        var wtTyp = document.getElementById('addItemGsWtTyp' + count).value;
//        if (document.getElementById('addItemFinalFinWt' + count).value == '' || document.getElementById('addItemFinalFinWt' + count).value == 'NaN')
//            document.getElementById('addItemFinalFinWt' + count).value = '0.00';
//
//        var convWt = convertWeight(parseFloat(document.getElementById('addItemFinalFinWt' + count).value), 'GM', wtTyp);
//        totWeight = parseFloat(totWeight) + parseFloat(convWt);
//    }
//    document.getElementById('addItemTotalWgtBal').value = parseFloat(totWeight).toFixed(2) + ' GM';
//}
function calculateTotalWeight() {
    var totItem = parseFloat(document.getElementById('totalItem').value);
    var totGdWeight = 0;
    var totGdGsWeight = 0;
    var totSlWeight = 0;
    var totSlGsWeight = 0;
    var totWeight = 0;
    var totGsWeight = 0;
    var metal = '';
    var totGdGsWeightTyp = 'GM';
    var totGdWeightTyp = 'GM';
    var totSlGsWeightTyp = 'GM';
    var totSlWeightTyp = 'GM';
//    alert(totItem);
    for (var count = 0; count < totItem; count++)
    {
        metal = document.getElementById('mtype' + count).value;

        var wtTyp = document.getElementById('addItemGsWtTyp' + count).value;
        if (document.getElementById('addItemFinalFinWt' + count).value == '' || document.getElementById('addItemFinalFinWt' + count).value == 'NaN')
            document.getElementById('addItemFinalFinWt' + count).value = '0.00';
        if (document.getElementById('addItemFinalGsWt' + count).value == '' || document.getElementById('addItemFinalGsWt' + count).value == 'NaN')
            document.getElementById('addItemFinalGsWt' + count).value = '0.00';

        var convGsWt = convertWeight(parseFloat(document.getElementById('addItemFinalGsWt' + count).value), 'GM', wtTyp);
        var convWt = convertWeight(parseFloat(document.getElementById('addItemFinalFinWt' + count).value), 'GM', wtTyp);
        if (metal == 'Gold')
        {
            totGdGsWeight = parseFloat(totGdGsWeight) + parseFloat(convGsWt);
            totGdWeight = parseFloat(totGdWeight) + parseFloat(convWt);
        }
        if (metal == 'Silver')
        {
            totSlGsWeight = parseFloat(totSlGsWeight) + parseFloat(convGsWt);
            totSlWeight = parseFloat(totSlWeight) + parseFloat(convWt);
        }
    }

    if (totGdGsWeight >= 1000) {
        totGdGsWeight = totGdGsWeight / 1000;
        totGdGsWeightTyp = 'KG';
    }
    if (totGdWeight >= 1000) {
        totGdWeight = totGdWeight / 1000;
        totGdWeightTyp = 'KG';
    }
    if (totSlGsWeight >= 1000) {
        totSlGsWeight = totSlGsWeight / 1000;
        totSlGsWeightTyp = 'KG';
    }
    if (totSlWeight >= 1000) {
        totSlWeight = totSlWeight / 1000;
        totSlWeightTyp = 'KG';
    }

    document.getElementById('goldGrossWeight').value = parseFloat(totGdGsWeight).toFixed(3) + ' ' + totGdGsWeightTyp;
    document.getElementById('goldFineWeight').value = parseFloat(totGdWeight).toFixed(3) + ' ' + totGdWeightTyp;
    document.getElementById('silverGrossWeight').value = parseFloat(totSlGsWeight).toFixed(3) + ' ' + totSlGsWeightTyp;
    document.getElementById('silverFineWeight').value = parseFloat(totSlWeight).toFixed(3) + ' ' + totSlWeightTyp;
}