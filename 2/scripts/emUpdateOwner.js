var selectedROIValue = 0;
/********************** Update Owner Code *****************************************************************/
function validateUpdateOwnInputs(obj) {

    if (validateEmptyField(document.getElementById("userName").value, "Please enter User Name!") == false
            || validateLength4(document.getElementById("userName").value, "User Name should be minimum 6 characters length!") == false
            || validateAlphaNum(document.getElementById("userName").value, "Accept only alpha or numeric characters without space character!") == false) {
        document.getElementById("userName").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("password").value, "Please enter Password!") == false
            || validateLength8(document.getElementById("password").value, "Password should be minimum 8 characters length!") == false) {
        document.getElementById("password").focus();
        return false;
    } else if (validateEmptyField(
            document.getElementById("cnfrmPassword").value, "Please enter Confirm Password!") == false) {
        document.getElementById("cnfrmPassword").focus();
        return false;
    } else if (document.getElementById("password").value != document.getElementById("cnfrmPassword").value) {
        alert("Passwords are not matched. Please re-enter passwords.");
        document.getElementById("password").focus();
        return false;
    } else if (document.getElementById("password").value == document.getElementById("userName").value) {
        alert("Password and User Name are same. \nBoth should be different. \n\nPlease re-enter passwords.");
        document.getElementById("password").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("iPassword").value, "Please enter i Password!") == false
            || validateLength8(document.getElementById("iPassword").value, "i Password should be minimum 8 characters length!") == false) {
        document.getElementById("iPassword").focus();
        return false;
    } else if (validateEmptyField(
            document.getElementById("cnfrmIPassword").value, "Please enter Confirm i-Password!") == false) {
        document.getElementById("cnfrmIPassword").focus();
        return false;
    } else if (document.getElementById("iPassword").value == document.getElementById("userName").value) {
        alert("I-Password and User Name are same. \nBoth should be different. \n\nPlease re-enter i-passwords.");
        document.getElementById("iPassword").focus();
        return false;
    } else if (document.getElementById("iPassword").value != document.getElementById("cnfrmIPassword").value) {
        alert("i-Passwords are not matched. Please re-enter i-passwords.");
        document.getElementById("iPassword").focus();
        return false;
    } else if (document.getElementById("password").value == document.getElementById("iPassword").value) {
        alert("Password and i-Passwords are same. \nBoth password should be different. \n\nPlease re-enter passwords.");
        document.getElementById("iPassword").focus();
        return false;
    } else if (validateSelectField(document.getElementById("passwordHQ").value, "Please select Password Hint Question!") == false) {
        document.getElementById("passwordHQ").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("passwordHA").value, "Please enter Password Hint Answer!") == false
            || validateAlphaNumWithSpace(
                    document.getElementById("passwordHA").value, "Accept only alpha or numeric characters with space characters!") == false) {
        document.getElementById("passwordHA").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("firstName").value, "Please enter First Name!") == false
            || validateAlphaWithSpace(
                    document.getElementById("firstName").value, "Accept only alpha characters!") == false) {
        document.getElementById("firstName").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("lastName").value, "Please enter Last Name!") == false
            || validateAlphaWithSpace(
                    document.getElementById("lastName").value, "Accept only alpha characters!") == false) {
        document.getElementById("lastName").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("fathersName").value,
            "Please enter Father's Name!") == false
            || validateAlphaWithSpace(
                    document.getElementById("fathersName").value, "Accept only alpha characters!") == false) {
        document.getElementById("fathersName").focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBMonth").value, "Please select your Birth Month!") == false) {
        document.getElementById("DOBMonth").focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBDay").value, "Please select your Birth Date!") == false) {
        document.getElementById("DOBDay").focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBYear").value, "Please select your Birth Year!") == false) {
        document.getElementById("DOBYear").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("city").value, "Please enter City!") == false
            || validateAlphaWithSpace(document.getElementById("city").value, "Accept only alpha characters!") == false) {
        document.getElementById("city").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("pin").value, "Please enter PIN!") == false
            || validateNum(document.getElementById("pin").value, "Accept only Numbers!") == false
            || validateLength6(document.getElementById("pin").value, "PIN number length should be minimum 6!") == false) {
        document.getElementById("pin").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("state").value, "Please enter State Name!") == false
            || validateAlphaWithSpace(document.getElementById("state").value, "Accept only alpha characters!") == false) {
        document.getElementById("state").focus();
        return false;
    } else if (validateSelectField(document.getElementById("country").value, "Please select Country Name!") == false) {
        document.getElementById("country").focus();
        return false;
    } else if (document.getElementById("phoneNo").value != "" && validateNumWithSpace(document.getElementById("phoneNo").value,
            "Accept only Numbers!") == false) {
        document.getElementById("phoneNo").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("mobileNo").value, "Please enter Mobile Number!") == false
            || validateNum(document.getElementById("mobileNo").value,
                    "Accept only Numbers without space character!") == false || validateLength10(document.getElementById("mobileNo").value,
            "Mobile number length should be minimum 10!") == false) {
        document.getElementById("mobileNo").focus();
        return false;
    }

    return true;
}

function uploadImage(file) {
    extArray = new Array(".jpg", ".jpeg", ".png", ".bmp", ".gif");
    allowSubmit = false;
    if (file) {
        while (file.indexOf("\\") != - 1)
            file = file.slice(file.indexOf("\\") + 1);
        ext = file.slice(file.indexOf(".")).toLowerCase();
        for (var i = 0; i < extArray.length; i++) {
            if (extArray[i] == ext) {
                allowSubmit = true;
                break;
            }
        }
        if (allowSubmit)
            return true;
        else
            alert("Please upload only : "
                    + "'.jpg' or '.jpeg' or '.gif' or '.png' or '.bmp'"
                    + "  images files. \nPlease select a new "
                    + "image file to upload and submit again.");
        return false;
    }
}

function updateOwner(obj) {

    document.getElementById("ajax_loading_div").style.visibility = "visible";
    document.getElementById("addOwnerSubButDiv").style.visibility = "hidden";

    if (validateUpdateOwnInputs(obj)) {
        if (uploadImage(document.getElementById("selectPhoto").value) == false) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addOwnerSubButDiv").style.visibility = "visible";
            return false;
        }
        document.getElementById("formStatus").value = 1;
        return true;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("addOwnerSubButDiv").style.visibility = "visible";
        return false;
    }
}
//* ******************** Get Owner Code
function getOwnerDetails(ownId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.barcode_search.barcode_text.focus();
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omppmsdv.php?divPanel=OwnerDetails&ownId=" + ownId, true);
    xmlhttp.send();
}
/**
 * ******************** Update Firm Code
 * ****************************************************************
 */
function update_firm(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateFirm;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateFirm() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";

    }

}
function updateFirm(obj) {

    if (validateAddFirmInputs(obj)) {

        return true;
        var poststr = "firmName=" + encodeURIComponent(document.getElementById("firmName").value)
                + "&firmRegNo=" + encodeURIComponent(document.getElementById("firmRegNo").value)
                + "&firmFullName=" + encodeURIComponent(document.getElementById("firmFullName").value)
                + "&firmDesc=" + encodeURIComponent(document.getElementById("firmDesc").value)
                + "&firmAddress=" + encodeURIComponent(document.getElementById("firmAddress").value)
                + "&firmPhoneDetail=" + encodeURIComponent(document.getElementById("firmPhoneDetail").value)
                + "&firmType=" + encodeURIComponent(document.getElementById("firmType").value)
                + "&firmOwner=" + encodeURIComponent(document.getElementById("firmOwner").value)
                + "&firmComments=" + encodeURIComponent(document.getElementById("firmComments").value)
                + "&formFooterInfo=" + encodeURIComponent(document.getElementById("formFooterInfo").value)
                + "&firmId=" + encodeURIComponent(document.getElementById("firmId").value);

        update_firm('include/php/omffupfr.php', poststr);
    } else {

        return false;
    }
}
var firmId;
function setFirmId(obj) {

    firmId = obj.id;

}
function getFirm(obj) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUpadteFirmsDiv").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("GET", "include/php/omfffudv.php?firmId=" + firmId, true);
    xmlhttp.send();
}
// ********************************** Customer Details Functions
// *************************
var custId;
function setCustId(obj) {
    custId = obj.id;
}


var custType;
function setCusFrmCusTyp(obj, getFirmId, getCustType) {
    custId = obj.id;
    firmId = getFirmId;
    custType = getCustType;
}

function getCustHome() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcdcshm.php?custId=" + custId,
            true);
    xmlhttp.send();
}
function getCustomerDetails(custPanelOption) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcdccdd.php?custId=" + custId + "&custPanelOption=" + custPanelOption,
            true);
    xmlhttp.send();
}
/***************Start code to add param @Author:PRIYA02DEC13******************/
function getCustomerDetailsWithCustId(custPanelOption, custId, itemPreId, itemPostId, divPanel) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omcdccdd.php?custPanelOption=" + custPanelOption + "&custId=" + custId + "&srchItemPreId=" + itemPreId + "&srchItemPostId=" + itemPostId + "&showDivPanel=" + divPanel,
            true); // showPanelDiv added @Author:SHRI20JUN16
    xmlhttp.send();
}
/***************End code to add param @Author:PRIYA02DEC13******************/
function getCustAddGirviPanel() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadShowSearchGirviDiv").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
            document.getElementById("principalAmount").focus();
        } else {

            document.getElementById("ajaxLoadShowSearchGirviDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcdccdd.php?panelDivName=YES&custId=" + custId + "&firmId=" + firmId + "&custType=" + custType,
            true);
    xmlhttp.send();
}
/*****************Start code to change Func @Author:PRIYA28DEC13****************************/
/*****************Start code to add func to hide mess @Author:PRIYA19FEB14**********/
/*****************Start code to add check for all tables @Author:PRIYA04JUL14******************/
function deleteCustomer(custId) {
    confirm_box = confirm(delCustAlertMess + "\n\nDo you really want to delete this customer?");//change in line @AUTHOR: SANDY28JAN14
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (xmlhttp.responseText == 'CustLoanPresent') {
                    alert("Please first delete all Loans of this Customer!");
                } else if (xmlhttp.responseText == 'CustPurInvPresent') {
                    alert("Please first delete all Purchase Invoices of this Customer!");
                } else if (xmlhttp.responseText == 'UdhaarPresent') {
                    alert("Please first delete all Udhaar of this Customer!");
                } else if (xmlhttp.responseText == 'AdvanceMoneyPresent') {
                    alert("Please first delete all Advance Money of this Customer!");
                } else if (xmlhttp.responseText == 'CustSellPresent') {
                    alert("Please first delete all Sell of this Customer!");
                } else if (xmlhttp.responseText == 'NewOrderPresent') {
                    alert("Please first delete all Orders of this Customer!");
                } else {
                    document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
                    closeMessDiv('messDisplay', 'DELETED');
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/omcdcsdl.php?custId=" + custId, true);
        xmlhttp.send();
    }
}
/*****************End code to add check for all tables @Author:PRIYA04JUL14******************/
/*****************End code to add func to hide mess @Author:PRIYA19FEB14**********/
/*****************End code to change Func @Author:PRIYA28DEC13****************************/
function getCustDetailsForUpdate() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;//change in div name @AUTHOR: SANDY16DEC13
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omcdcdfu.php?custId="
            + custId, true);
    xmlhttp.send();
}
//********** Customer Udhaar Details *****************
function cust_udhaar_details(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertCustUdhaarDetails;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertCustUdhaarDetails() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
function custUdhaarDetails(custId, custFirmId) {

    var poststr = "custId=" + custId +
            "&firmId=" + custFirmId;

    cust_udhaar_details('include/php/omuudetl.php', poststr);
}
/**
 * ******************** Customer Girvi Details
 * ****************************************************************
 */
function cust_girvi_details(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertCustGirviDetails;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertCustGirviDetails() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
function custGirviDetails(obj) {

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (obj) {
        var poststr = "custId=" + custId
                + "&firmId=" + encodeURIComponent(document.getElementById("custFirmId").value);

        cust_girvi_details('include/php/olggcgdt.php', poststr);//changes in navigation AS per new filename @AUTHOR: SANDY20NOV13
    }

}
function custNewFinanceDetails(obj) {

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (obj) {
        var poststr = "custId=" + custId
                + "&firmId=" + encodeURIComponent(document.getElementById("custFirmId").value);

        cust_girvi_details('include/php/olggcgdt_1.php', poststr);//changes in navigation AS per new filename @AUTHOR: SANDY20NOV13
    }

}
/**
 * ******************** Customer Released Girvi Details
 * ****************************************************************
 */
function cust_released_girvi_details(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertCustReleasedGirviDetails;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertCustReleasedGirviDetails() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
function custReleasedGirviDetails(obj) {

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (obj) {
        var poststr = "custId=" + custId
                + "&firmId=" + encodeURIComponent(document.getElementById("custFirmId").value);
        //+ "&grvRelPayDetails=TRUE";

        cust_released_girvi_details('include/php/olgrgrdet.php', poststr);//change in filename @AUTHOR: SANDY20NOV13 // filename changed @Author:GAUR15JUN16
    }

}
// ********************************************************
function add_new_girvi(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertAddNewGirvi;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertAddNewGirvi() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        document.getElementById("principalAmount").focus();
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
function custAddNewGirvi(obj) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    var poststr = "custId=" + custId
            + "&firmId=" + encodeURIComponent(document.getElementById("custFirmId").value)
            + "&custType=" + encodeURIComponent(document.getElementById("custType").value);

    add_new_girvi('include/php/olgacang.php', poststr);//change in filename @AUTHOR: SANDY20NOV13

}
//********* Update Girvi Details **********************************
function update_girvi_details(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateGirviDetails;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateGirviDetails() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "hidden";
        document.getElementById("girviUpdateButDiv").style.visibility = "visible";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";
        document.getElementById("girviUpdateButDiv").style.visibility = "hidden";

    }

}
function updateGirviDetails(custId, girviId) {
    document.getElementById("girviUpdateButDiv").style.visibility = "hidden";
    document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";

    var poststr = "custId=" + custId + "&girviId=" + girviId;

    update_girvi_details('include/php/olgugvdt.php', poststr);//change in filename @AUTHOR: SANDY20NOV13


}
function updateNewFinanceGirviDetails(custId, girviId) {
    document.getElementById("girviUpdateButDiv").style.visibility = "hidden";
    document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";

    var poststr = "custId=" + custId + "&girviId=" + girviId;

    update_girvi_details('include/php/olgugvdt_1.php', poststr);//change in filename @AUTHOR: SANDY20NOV13


}
//********* Delete Girvi Details **********************************
function delete_girvi_details(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertDeleteGirviDetails;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertDeleteGirviDetails() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        //document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "hidden"; 
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        //document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";
        document.getElementById("girviDeleteButDiv").style.visibility = "hidden";

    }

}
//********* Add panelDivName for Auction @Author:ANUJA08APR15 **********************************
function deleteGirviDetails(girviId, panelDivName) {
    document.getElementById("girviDeleteButDiv").style.visibility = "hidden";
    //document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";

    var poststr = "girviId=" + girviId + "&panelDivName=" + panelDivName;

    delete_girvi_details('include/php/olgdgdld.php', poststr);//change in filename @AUTHOR: SANDY20NOV13


}
//********* Release Girvi Details **********************************
function release_girvi_details(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertReleaseGirviDetails;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertReleaseGirviDetails() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "hidden";
        document.getElementById("girviReleaseDetailsButDiv").style.visibility = "visible";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";
        document.getElementById("girviReleaseDetailsButDiv").style.visibility = "hidden";

    }

}
/*****Start to change function @AUTHOR: SANDY28JAN14*********************/
/***************Start code to add alert for trans release loan @Author:PRIYA17OCT13**********/
/***************Start code to change function @Author:PRIYA27JAN14**************/
function releaseGirviDetails(custId, girviId, pageNo, totalTransLoan, dateCompare) {
    document.getElementById("girviReleaseDetailsButDiv").style.visibility = "hidden";
    document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";
    //var confirm_box;
    if (totalTransLoan > 0) {
        confirm_box = confirm("First Release Transferred Loan!\nDo You Really Want To Continue?");
        if (confirm_box != true) {
            document.getElementById("girviReleaseDetailsButDiv").style.visibility = "visible";
            document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "hidden";
        }
    } else {
        confirm_box = true;
    }
    if (confirm_box == true || totalTransLoan == 0 || totalTransLoan == '0' || totalTransLoan == NULL) {
        if (confirm_box == true) {
            var poststr = "custId=" + custId +
                    "&girviId=" + girviId +
                    "&pageNo=" + pageNo +
                    "&grvRelPayDetails=TRUE" +
                    "&dateCompare=" + dateCompare;
            release_girvi_details('include/php/olgrgvdt.php', poststr);
        } else {
            document.getElementById("girviReleaseDetailsButDiv").style.visibility = "visible";
            document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "hidden";
        }
    }
}
//
// Start function to Release loan by another customer finger scan
function releaseLoanByFingerScan(custId, girviId, pageNo, totalTransLoan, dateCompare) {
    var req = new XMLHttpRequest();
    req.onreadystatechange = function () {
        if (req.readyState == 4 && req.status == 200) {
//            alert(req.responseText);
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//                alert(str);
            var str = req.responseText;
//                alert(str);
            var strArray = new Array();
            strArray = str.split(":");
            if (strArray.length > 1) {
                var fileName = strArray[1];
                var custIdArr = new Array();
                custIdArr = fileName.split(".");
                custIdOfFingerScan = custIdArr[0];
                //alert(custIdOfFingerScan);
                if (custIdOfFingerScan != '' || custIdOfFingerScan != null) {
                    releaseGirviDetailsByFingerScan(custId, girviId, pageNo, totalTransLoan, dateCompare, custIdOfFingerScan);
                }
            } else {
                document.getElementById('releaseGirviErrorMessageDiv').innerHTML = 'Finger Print Device Error OR Finger Prints Not Matched!';
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    }

    req.open("GET", "include/php/ommpfgscverify.php", true);

    req.send();
}
function releaseGirviDetailsByFingerScan(custId, girviId, pageNo, totalTransLoan, dateCompare, custIdOfFingerScan) {
    document.getElementById("girviReleaseDetailsButDiv").style.visibility = "hidden";
    document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";
    //var confirm_box;
    if (totalTransLoan > 0) {
        confirm_box = confirm("First Release Transferred Loan!\nDo You Really Want To Continue?");
        if (confirm_box != true) {
            document.getElementById("girviReleaseDetailsButDiv").style.visibility = "visible";
            document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "hidden";
        }
    } else {
        confirm_box = true;
    }
    if (confirm_box == true || totalTransLoan == 0 || totalTransLoan == '0' || totalTransLoan == NULL) {
        if (confirm_box == true) {
            var poststr = "custId=" + custId +
                    "&girviId=" + girviId +
                    "&pageNo=" + pageNo +
                    "&grvRelPayDetails=TRUE" +
                    "&dateCompare=" + dateCompare +
                    "&custIdOfFingerScan=" + custIdOfFingerScan;
            release_girvi_details('include/php/olgrgvdt.php', poststr);
        } else {
            document.getElementById("girviReleaseDetailsButDiv").style.visibility = "visible";
            document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "hidden";
        }
    }
}
//
/***************End code to change function @Author:PRIYA27JAN14**************/
/*****End to change function @AUTHOR: SANDY28JAN14*********************/
/***************End code to add alert for trans release loan @Author:PRIYA17OCT13************/
//********* Add To Release Girvi Cart **********************************
function add_to_release_girvi_cart(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertAddToReleaseGirviCart;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertAddToReleaseGirviCart() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "hidden";
        document.getElementById("addToReleaseGirviCartButDiv").style.visibility = "visible";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";
        document.getElementById("addToReleaseGirviCartButDiv").style.visibility = "hidden";

    }

}
function addToReleaseGirviCart(custId, girviId, pageNo, totalInt, years, months, days, totalAmt) {
    document.getElementById("addToReleaseGirviCartButDiv").style.visibility = "hidden";
    document.getElementById("ajaxLdGirviInfoBelowButtPanelDiv").style.visibility = "visible";
    var totalTime = years + "Y " + months + "M " + days + "D";
    var poststr = "custId=" + custId + "&girviId=" + girviId + "&pageNo=" + pageNo + "&totalTime=" + totalTime + "&totalAmt=" + totalAmt + "&totalInt=" + totalInt;

    add_to_release_girvi_cart('include/php/orgaagrc.php', poststr);


}
//********* Remove From Release Girvi Cart **********************************
function rem_girvi_frm_rel_cart(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertRemGirviFrmRelCart;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertRemGirviFrmRelCart() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";

        document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";


    }

}
function remGirviFrmRelCart(girviId) {

    var deldivId = "del" + girviId;

    document.getElementById(deldivId).innerHTML = "<img src='images/loading16.gif' width='16' height='16'>";

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    var poststr = "girviId=" + girviId;

    rem_girvi_frm_rel_cart('include/php/orgrrmrc.php', poststr);


}

/**
 * ******************** Update Customer Code
 * ****************************************************************
 */
/********START code PRIYA23**************/
/*****Start Code To Remove Validation For Staff Id @AUTHOR:PRIYA24APR13*********/
function validateUpdateCustomerInputs(obj) {
    if (validateEmptyField(document.getElementById("customerType").value, "Please select Customer Type!") == false) { //validateSelectField changed @Author:PRIYA23FEB15
        document.getElementById("customerType").focus();
        return false;
    } else if ((document.getElementById("pCustId").value != '') && (validateAlphaNum(document.getElementById("pCustId").value, "Accept only alphanumeric characters!") == false)) {
        document.getElementById("pCustId").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("uCustId").value, "Please select Customer ID!") == false ||
            validateNum(document.getElementById("uCustId").value, "Accept only Numbers!") == false) {                                //PRIYA23
        document.getElementById("uCustId").focus();
        return false;
    } else if (validateSelectField(document.getElementById("accountId").value, "Please select Customer Account!") == false) {       //PRIYA23
        document.getElementById("accountId").focus();
        return false;
    } else if (validateSelectField(document.getElementById("firmId").value, "Please select Firm Name!") == false) {
        document.getElementById("firmId").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("firstName").value, "Please enter First Name!") == false) {
        document.getElementById("firstName").focus();
        return false;
    } else if ((document.getElementById("lastName").value != '') && (validateAlphaWithSpace(document.getElementById("lastName").value, "Accept only alpha characters!") == false)) {
        document.getElementById("lastName").focus();
        return false;
    }
//    else if (validateEmptyField(document.getElementById("fatherOrSpouseName").value, "Please enter Father/Spouse Name!") == false ||
//            validateAlphaWithSpace(document.getElementById("fatherOrSpouseName").value, "Accept only alpha characters!") == false) {
//        document.getElementById("fatherOrSpouseName").focus();
//        return false;
//    }
    else if ((document.getElementById("motherName").value != '') && (validateAlphaWithSpace(document.getElementById("motherName").value, "Accept only alpha characters!") == false)) {
        document.getElementById("motherName").focus();
        return false;
    } else if (validateSelectField(document.getElementById("city").value, "Please select City Name!") == false) {
        document.getElementById("city").focus();
        return false;
    } else if ((document.getElementById("pinCode").value != '') && ((validateNum(document.getElementById("pinCode").value, "Accept only Numbers without space character!") == false ||
            validateLength6(document.getElementById("pinCode").value, "Pin Code length should be minimum 06!") == false))) {
        document.getElementById("pinCode").focus();                                                                      //PRIYA15
        return false;
    } else if (validateSelectField(document.getElementById("state").value, "Please select State Name!") == false) {
        document.getElementById("state").focus();
        return false;
    } else if (validateSelectField(document.getElementById("country").value, "Please select Country Name!") == false) {
        document.getElementById("country").focus();
        return false;
    }
    /***********Start code to comment validation @Author:PRIYA25JUN14************/
    //    else if (document.getElementById("phoneNo").value != "" && validateNumWithSpace(document.getElementById("phoneNo").value, "Accept only Numbers!") == false) {
    //        document.getElementById("phoneNo").focus();
    //        return false;
    //    }
    /***********End code to comment validation @Author:PRIYA25JUN14************/
    else if ((document.getElementById("mobileNo").value != '') && ((validateNum(document.getElementById("mobileNo").value, "Accept only Numbers without space character!") == false ||
            validateLength10(document.getElementById("mobileNo").value, "Mobile number length should be minimum 10!") == false))) {
        document.getElementById("mobileNo").focus();
        return false;
    }
    return true;
}
/*****End Code To Remove Validation For Staff Id @AUTHOR:PRIYA24APR13*********/
/********END code PRIYA23**************/

function updateCustomer(obj) {

    document.getElementById("ajax_loading_div").style.visibility = "visible";

    if (validateUpdateCustomerInputs(obj)) {
        if (uploadImage(document.getElementById("selectPhoto").value) == false) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            return false;
        }
        return true;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        return false;
    }

}
// ******* Change ROI Option **************
/*******************Start code to add function change_ROI_Opt_db to change roi @Author:PRIYA11SEP13****************/
function change_ROI_Opt(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertchangeROIOpt;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}
/***********Start code to add delay div @Author:PRIYA10SEP13**********/
function alertchangeROIOpt() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "hidden";
        document.getElementById("ROIOption").innerHTML = xmlhttp2.responseText;//xmlhttp to xmlhttp2 changed @Author:PRIYA11SEP13
        document.getElementById("intTypeChangeDiv").style.visibility = "visible";
        document.getElementById("selROIChangeDiv").style.visibility = "visible";
        window.setTimeout(closeGirviROIOptChangeDiv, 1000);

    } else {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    }
}
function closeGirviROIOptChangeDiv()
{
    document.getElementById("intTypeChangeDiv").style.visibility = "hidden";
    document.getElementById("selROIChangeDiv").style.visibility = "hidden";
}
function change_ROI_Opt_db(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertchangeROIOptDb;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}
function alertchangeROIOptDb() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        //Start code for loan update and info panel @AUTHOR: SANDY24NOV13//start to change in code @AUTHOR: SANDY28DEC13 
        if (roiValUpdatePanel == 'mlLoanInfo' || roiValUpdatePanel == 'mlLoanUpdate' || roiValUpdatePanel == 'mlLoanInfoToRelease') {
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;//change in div @AUTHOR: SANDY17DEC13
        }
        //End code for loan update and info panel @AUTHOR: SANDY24NOV13//End to change in code @AUTHOR: SANDY28DEC13 
        else {
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        }
        document.getElementById("intTypeChangeDiv").style.visibility = "visible";
        document.getElementById("selROIChangeDiv").style.visibility = "visible";
        window.setTimeout(closeGirviROIOptChangeDiv, 1000);

    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/***********End code to add delay  div @Author:PRIYA10SEP13**********/
/*     * *********Start Code To Add roiOption in poststr @Author:PRIYA04SEP13********* */
/********Start code to add var girviDOB,girviFirmId, girviSerialNum @Author:PRIYA12APR14**************/
/********Start code to add param girviHindiDOB @Author:PRIYA25APR15**************/
/*****************Start  code to add AuctionalPanel  @Author:ANUJA30MAY15**************/
var roiValUpdatePanel; //global variale panelname @AUTHOR: SANDY24NOV13
function changeROIOpt(documentRootPath, grvRelPayDetails, selectROIType, princAmount, selROIValue, girviDate, obj, girviType,
        girviId, custId, girviStatus, omPanelDiv, auctionPanel, girviDOB, girviFirmId, girviSerialNum, girviHindiDOB) {

    roiValUpdatePanel = omPanelDiv;//SET global variale panelname @AUTHOR: SANDY24NOV13
    var roiOption = selectROIType.value;

    var poststr = "ROIValue=" + selROIValue
            + "&princAmount=" + princAmount
            + "&girviDate=" + encodeURIComponent(girviDate)
            + "&girviType=" + girviType
            + "&girviId=" + girviId
            + "&custId=" + custId
            + "&grvRelPayDetails=" + grvRelPayDetails
            + "&girviStatus=" + girviStatus
            + "&omPanelDiv=" + omPanelDiv
            + "&roiOption=" + roiOption
            + "&girviDOB=" + girviDOB
            + "&girviFirmId=" + girviFirmId
            + "&girviSerialNum=" + girviSerialNum
            + "&girviHindiDOB=" + girviHindiDOB
            + "&auctionPanel=" + auctionPanel;


    if (roiOption == 'Monthly') {
        change_ROI_Opt('http://' + documentRootPath + '/include/php/olggroim.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
        changeROIValue(documentRootPath, grvRelPayDetails, selROIValue, princAmount, selectROIType, girviDate, obj, girviId, custId, girviType, girviStatus, omPanelDiv, auctionPanel);//change in parameters @AUTHOR: SANDY17DEC13
    } else {
        change_ROI_Opt('http://' + documentRootPath + '/include/php/olggroia.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
        changeROIValue(documentRootPath, grvRelPayDetails, selROIValue, princAmount, selectROIType, girviDate, obj, girviId, custId, girviType, girviStatus, omPanelDiv, auctionPanel);//change in parameters @AUTHOR: SANDY17DEC13
    }
    change_ROI_Opt_db('http://' + documentRootPath + '/include/php/olgroiup.php', poststr);//change in filename @AUTHOR: SANDY22NOV13
    return false;
}
/******End  code to add AuctionalPanel  @Author:ANUJA30MAY15**************/
/********End code to add param girviHindiDOB @Author:PRIYA25APR15**************/
/********End code to add var girviDOB,girviFirmId, girviSerialNum @Author:PRIYA12APR14**************/
/*     * *********End Code To Add roiOption in poststr @Author:PRIYA04SEP13********* */
/*******************End code to add function change_ROI_Opt_db to change roi @Author:PRIYA11SEP13****************/
// ******* Change TROI Option **************
function change_TROI_Opt(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertChangeTROIOpt;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}
/************Start code to add delay div @Author:PRIYA13SEP13***************/
function alertChangeTROIOpt() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("ROIOption").innerHTML = xmlhttp2.responseText;
        document.getElementById("troiIntTypeChangeDiv").style.visibility = "visible";
        document.getElementById("selTROIChangeDiv").style.visibility = "visible";
        window.setTimeout(closeGirviTROIOptChangeDiv, 1000);

    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function closeGirviTROIOptChangeDiv()
{
    document.getElementById("troiIntTypeChangeDiv").style.visibility = "hidden";
    document.getElementById("selTROIChangeDiv").style.visibility = "hidden";
}
function change_TROI_Opt_db(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertChangeTROIOptDb;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}
/************Start code to add delay div @Author:PRIYA13SEP13***************/
/***********Start to change function @AUTHOR: SANDY02JAN14*************/
/*************Start to add code to transfer loan from ml loan panel @AUTHOR: SANDY25DEC13************/
function alertChangeTROIOptDb() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        if (transferFromPanel == 'MlLoan') {
            document.getElementById("release_trGirvi_panel" + transferLoanId).innerHTML = xmlhttp.responseText;//change in div @AUTHOR: SANDY29NOV13
        } else if (transferFromPanel == 'mlLoanInfo' || transferFromPanel == 'mlLoanUpdate' || transferFromPanel == 'mlLoanInfoToRelease' || transferFromPanel == 'ReleasedLoan') {
            document.getElementById("mnyLender_middle_body").innerHTML = xmlhttp.responseText;//change in div @AUTHOR: SANDY29NOV13
        } else if (transferFromPanel == 'AddPrinTransPanel') {
            document.getElementById("addPrinTransDetDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;//change in div @AUTHOR: SANDY29NOV13
        }
        document.getElementById("troiIntTypeChangeDiv").style.visibility = "visible";
        document.getElementById("selTROIChangeDiv").style.visibility = "visible";
        window.setTimeout(closeGirviTROIOptChangeDiv, 1000);

    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/***********End to change function @AUTHOR: SANDY02JAN14*************/
/************End code to add delay div @Author:PRIYA13SEP13***************/
/**********Start Code To Delete Alert @AUTHOR:PRIYA24JUNE13***********/
/**********Start code to change filename @Author:PRIYA12SEP13********************/
/**********Start code to add panel for add  prin transfer @Author:PRIYA09DEC14***********/
/**********Start code to add DOB @Author:PRIYA25APR15***********/
var transferFromPanel;
var transferLoanId;
function changeTROIOpt(documentRootPath, grvRelPayDetails, selectROIType, princAmount, selROIValue, girviDate, obj, girviType, girviId, custId, girviStatus, omPanelDiv, panelName,
        girviTransId, girviHindiDOB) {
    transferFromPanel = omPanelDiv;
    transferLoanId = girviTransId;
    var roiOption = selectROIType.value;

    var poststr = "ROIValue=" + selROIValue
            + "&princAmount=" + princAmount
            + "&girviDate=" + girviDate
            + "&girviType=" + girviType
            + "&girviId=" + girviId
            + "&custId=" + custId
            + "&grvRelPayDetails=" + grvRelPayDetails
            + "&girviStatus=" + girviStatus
            + "&omPanelDiv=" + omPanelDiv
            + "&panelName=" + panelName
            + "&girviTransId=" + girviTransId
            + "&roiOption=" + roiOption
            + "&girviHindiDOB=" + girviHindiDOB;
    //    if (roiOption == 'Monthly') {
    //        change_TROI_Opt('http://' + documentRootPath + '/include/php/orggtrom.php', poststr);
    //    //changeTROIValue(documentRootPath, grvRelPayDetails,selROIValue, princAmount, selectROIType, girviDate, obj, girviId, custId, girviType, girviStatus);
    //    } else {
    //        change_TROI_Opt('http://' + documentRootPath + '/include/php/orggtroa.php', poststr);
    //    //changeTROIValue(documentRootPath, grvRelPayDetails,selROIValue, princAmount, selectROIType, girviDate, obj, girviId, custId, girviType, girviStatus);
    //    }
    if (omPanelDiv == 'AddPrinTransPanel') {
        change_TROI_Opt('http://' + documentRootPath + '/include/php/olaproim.php', poststr);
    } else {
        change_TROI_Opt('http://' + documentRootPath + '/include/php/olggroaa.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    }
    change_TROI_Opt_db('http://' + documentRootPath + '/include/php/olguptro.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    return false;
}
/**********End code to add panel for add  prin transfer @Author:PRIYA09DEC14******/
/*************End to add code to transfer loan from ml loan panel @AUTHOR: SANDY25DEC13************/
/**********End code to change filename @Author:PRIYA12SEP13********************/
/************End Code To Delete Alert @AUTHOR:PRIYA24JUNE13***********/
// ********** TO add New Girvi ****************************
function change_T_ROI_Opt_Add(url) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertTChangeROIOptAdd;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send();

}
/************Start code to add delay func @Author:PRIYA11SEP13********************/
function alertTChangeROIOptAdd() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "hidden";
        document.getElementById("ROIOption").innerHTML = xmlhttp.responseText;
        document.getElementById("troiIntTypeChangeDiv").style.visibility = "visible";
        document.getElementById("selTROIChangeDiv").style.visibility = "visible";
        window.setTimeout(closeGirviTROIOptChangeDiv, 1000);
    } else {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    }
}
function closeGirviTROIOptChangeDiv()
{
    document.getElementById("troiIntTypeChangeDiv").style.visibility = "hidden";
    document.getElementById("selTROIChangeDiv").style.visibility = "hidden";
}
function change_ROI_Opt_Add_db(url) {
    loadXMLDoc();

    xmlhttp.onreadystatechange = alertchangeROIOptAddDb;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send();
}
/************Start code to add delay func @Author:PRIYA11SEP13********************/
function alertchangeROIOptAddDb() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("transGirviDiv").innerHTML = xmlhttp.responseText;
        document.getElementById("troiIntTypeChangeDiv").style.visibility = "visible";
        document.getElementById("selTROIChangeDiv").style.visibility = "visible";
        window.setTimeout(closeGirviTROIOptChangeDiv, 1000);
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}

/************End code to add delay func @Author:PRIYA11SEP13********************/
//Start code to change filename @Author:PRIYA10SEP13
/**********Start code to change filename @Author:PRIYA11SEP13*******/
function changeTROIOptAdd(selectROIType, obj, troi, girviId, custId, panelName) {

    roiOption = selectROIType.value;
    if (panelName == 'Trans') {
        change_T_ROI_Opt_Add("include/php/olggroaa.php?roiOption=" + roiOption + "&troi=" + troi + "&girviId=" + girviId + "&custId=" + custId);//change in filename @AUTHOR: SANDY20NOV13
        // change_ROI_Opt_Add_db("include/php/orguptro.php?roiOption=" + roiOption + "&troi=" + troi + "&girviId=" + girviId + "&custId=" + custId);
    } else {
        //        if (roiOption == 'Annually') {
        //            change_ROI_Opt_Add('include/php/orggroia.php?panelName=' + panelName);
        //        } else {
        //            change_ROI_Opt_Add('include/php/orggroim.php?panelName=' + panelName);
        //        } 
    }
    return false;
}
/**********End code to change filename @Author:PRIYA11SEP13*******/
//End code to change filename @Author:PRIYA10SEP13
// *********** Change ROI Value ******************
var girviCurrentStatus;
function change_ROI_Value(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertchangeROIValue;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.send(parameters);

}
function alertchangeROIValue() {

    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "hidden";
        if (girviCurrentStatus == 'Transferred') {
            document.getElementById("transGirviTotalResultDiv").innerHTML = xmlhttp2.responseText;
        } else {
            document.getElementById("girviTotalResultDiv").innerHTML = xmlhttp2.responseText;
        }
    } else {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    }
}

function changeROIValue(documentRootPath, grvRelPayDetails, selectROIValue, princAmount, interestType, girviDate, obj, girviId, custId, girviType, girviStatus, omPanelDiv, auctionPanel) {
    selectedROIValue = selectROIValue;
    girviCurrentStatus = girviType;
    if (girviStatus == 'Transferred') {
        relDateDDValue = document.getElementById('DOBTransDay').value;
        relDateMMValue = document.getElementById('DOBTransMonth').value;
        relDateYYValue = document.getElementById('DOBTransYear').value;
    } else if (girviStatus == 'Released' || (omPanelDiv == 'mlLoanInfo' || omPanelDiv == 'mlLoanUpdate' || omPanelDiv == 'mlLoanInfoToRelease')) {  //change in codition @AUTHOR: SANDY28DEC13
        relDateDDValue = '';
        relDateMMValue = '';
        relDateYYValue = '';
    } else {
        relDateDDValue = document.getElementById('DOBDay').value;
        relDateMMValue = document.getElementById('DOBMonth').value;
        relDateYYValue = document.getElementById('DOBYear').value;
    }
    var poststr = "ROIValue=" + selectROIValue + "&princAmount=" + princAmount
            + "&interestType=" + interestType.value + "&girviDate=" + girviDate
            + "&girviId=" + girviId + "&custId=" + custId
            + "&girviType=" + girviType + "&grvRelPayDetails=" + grvRelPayDetails + "&girviStatus=" + girviStatus
            + "&relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue + "&omPanelDiv=" + omPanelDiv + "&auctionPanel=" + auctionPanel;

    if (girviType == 'Transferred') {
        change_ROI_Value('http://' + documentRootPath + '/include/php/olgggtfr.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    } else {
        change_ROI_Value('http://' + documentRootPath + '/include/php/olggttrd.php', poststr);//change in filename @AUTHOR: SANDY28DEC13
    }
    return false;
}
// *********** Change ROI Value ******************
function change_monthly_int_option_db(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertChangeMonthlyIntOptionDB;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}

function alertChangeMonthlyIntOptionDB() {

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

function change_Monthly_Int_Opt(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertChangeMonthlyIntOpt;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.send(parameters);

}

function alertChangeMonthlyIntOpt() {

    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "hidden";
        document.getElementById("girviTotAmtDiv").innerHTML = xmlhttp2.responseText;
    } else {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    }
}
/********Start code to add var girviDOB,girviFirmId, girviSerialNum @Author:PRIYA12APR14**************/
/********Start code to add param girviHindiDOB @Author:PRIYA25APR15**************/
function changeMonthlyIntOpt(documentRootPath, simpleOrCompIntOption, girviCompoundedOption, omPanelDiv, grvRelPayDetails, selMonthlyIntOpt, princAmount, ROIValue,
        interestType, girviDate, girviType, girviId, custId, girviStatus, transId, girviDOB, girviFirmId, girviSerialNum, girviHindiDOB, auctionPanel) {
    document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    selectedROIValue = ROIValue;
    //alert(girviType);exit();
    if (girviStatus == 'Transferred') {
        relDateDDValue = document.getElementById('DOBTransDay').value;
        relDateMMValue = document.getElementById('DOBTransMonth').value;
        relDateYYValue = document.getElementById('DOBTransYear').value;
    } else if (girviStatus == 'Released') {
        relDateDDValue = '';
        relDateMMValue = '';
        relDateYYValue = '';
    } else {
        relDateDDValue = document.getElementById('DOBDay').value;
        relDateMMValue = document.getElementById('DOBMonth').value;
        relDateYYValue = document.getElementById('DOBYear').value;
    }


    var poststr = "gMonthIntOption=" + selMonthlyIntOpt.value + "&princAmount=" + princAmount
            + "&ROIValue=" + selectedROIValue + "&interestType=" + interestType.value
            + "&girviDate=" + girviDate + "&girviId=" + girviId + "&custId=" + custId + "&omPanelDiv=" + omPanelDiv
            + "&girviType=" + girviType + "&grvRelPayDetails=" + grvRelPayDetails + "&girviStatus=" + girviStatus
            + "&relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue
            + "&simpleOrCompIntOption=" + simpleOrCompIntOption + "&girviCompoundedOption=" + girviCompoundedOption
            + "&girviAddROINotChange=No" + "&transId=" + transId + "&girviDOB=" + girviDOB + "&girviFirmId=" + girviFirmId
            + "&girviSerialNum=" + girviSerialNum + "&girviHindiDOB=" + girviHindiDOB + "&auctionPanel=" + auctionPanel;//pass transfer id @AUTHOR: SANDY06JAN14

    if (girviStatus == 'Transferred') { //CHANGE IN VARIABLE @AUTHOR: SANDY14JAN14
        change_Monthly_Int_Opt('http://' + documentRootPath + '/include/php/olgggtta.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    } else {
        change_Monthly_Int_Opt('http://' + documentRootPath + '/include/php/olggttam.php', poststr);//changes in navigation AS per new filename @AUTHOR: SANDY20NOV13
    }
    change_monthly_int_option_db('http://' + documentRootPath + '/include/php/olgumidb.php', poststr);//change in filename @AUTHOR: SANDY22NOV13
    return false;
}
/********End code to add param girviHindiDOB @Author:PRIYA25APR15**************/
/********End code to add var girviDOB,girviFirmId, girviSerialNum @Author:PRIYA12APR14**************/
// ************* Update ROI Montly Options *************************
/****************Start code to change fixed var 9 to no of roi @Author:PRIYA19NOV13****************/
var noOfROI; //var added @Author:PRIYA19NOV13
function validateUpdateROIMonthlyInputs(obj) {
    // for (var roiCounter = 1; roiCounter <= 9; roiCounter++) { //commented  @Author:PRIYA19NOV13
    for (var roiCounter = 1; roiCounter <= noOfROI; roiCounter++) {
        if (validateEmptyField(document.getElementById("roiMonOpt" + roiCounter).value, "Please enter ROI Value!") == false ||
                validateNumWithDot(document.getElementById("roiMonOpt" + roiCounter).value, "Accept only Numbers!") == false) {
            document.getElementById("roiMonOpt" + roiCounter).focus();
            return false;
        }
    }
    return true;
}
function update_ROI_Monthly(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateROIMonthly;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}

function alertUpdateROIMonthly() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadUpdateROIMontly").style.visibility = "hidden";
        document.getElementById("updateROIMontlyButtDiv").style.visibility = "visible";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        window.setTimeout(messageCloseDiv, 1000); //delay function added @Author:PRIYA19NOV13
    } else {
        document.getElementById("ajaxLoadUpdateROIMontly").style.visibility = "visible";
        document.getElementById("updateROIMontlyButtDiv").style.visibility = "hidden";
    }
}
/**********Start code to add function @Author:PRIYA19NOV13**************/
function messageCloseDiv() {
    document.getElementById('omAjaxUpdMonthlyIntMessDiv').innerHTML = '';
}
/**********End code to add function @Author:PRIYA19NOV13**************/
function updateROIMonthly(obj) {

    document.getElementById("updateROIMontlyButtDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadUpdateROIMontly").style.visibility = "visible";

    defaultROISel = false;
    noOfROI = document.update_roi_monthly.defaultROI.length;//var noOfROI Added @Author:PRIYA19NOV13

    for (i = 0; i < document.update_roi_monthly.defaultROI.length; i++) {
        if (document.update_roi_monthly.defaultROI[i].checked == true) {
            defaultROIId = document.update_roi_monthly.defaultROI[i].value;
            defaultROISel = true;
        }
    }
    if (defaultROISel == false) {

        alert('Please select default ROI option!');

        document.update_roi_monthly.defaultROI[0].focus();
        document.getElementById("updateROIMontlyButtDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadUpdateROIMontly").style.visibility = "hidden";

    } else if (validateUpdateROIMonthlyInputs(obj)) {

        var roiCounter = 1;

        /*********Start code to add var noOfROI in poststr @Author:PRIYA19NOV13*********************/
        var poststr = "defaultROIId=" + defaultROIId +
                "&noOfROI=" + noOfROI;
        /*********End code to add var noOfROI in poststr @Author:PRIYA19NOV13*********************/
        // for (roiCounter = 1; roiCounter <= 9; roiCounter++) { //commented @Author:PRIYA19NOV13
        for (roiCounter = 1; roiCounter <= noOfROI; roiCounter++) {
            poststr += "&roiMonOpt" + roiCounter + "=" + document.getElementById("roiMonOpt" + roiCounter).value +
                    "&iroiMonOpt" + roiCounter + "=" + document.getElementById("iroiMonOpt" + roiCounter).value;
        }

        update_ROI_Monthly('include/php/olguroim.php', poststr);//CHANGE IN FILE @AUTHOR: SANDY13DEC13
    } else {
        document.getElementById("updateROIMontlyButtDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadUpdateROIMontly").style.visibility = "hidden";

    }
}
/****************End code to change fixed var 9 to no of roi @Author:PRIYA19NOV13****************/
// ************* Update TROI Montly Options *************************
/****************Start code to add counter to noOfTROI @Author:PRIYA01MAR14********************/
var noOfTROI;
function validateUpdateTROIMonthlyInputs(obj) {
    for (var troiCounter = 1; troiCounter <= noOfTROI; troiCounter++) {
        if (validateEmptyField(document.getElementById("troiMonOpt" + troiCounter).value, "Please enter ROI Value!") == false ||
                validateNumWithDot(document.getElementById("troiMonOpt" + troiCounter).value, "Accept only Numbers!") == false) {
            document.getElementById("troiMonOpt" + troiCounter).focus();
            return false;
        }
    }
    return true;
}
function update_TROI_Monthly(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateTROIMonthly;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}

function alertUpdateTROIMonthly() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadUpdateTROIMontly").style.visibility = "hidden";
        document.getElementById("updateTROIMontlyButtDiv").style.visibility = "visible";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        window.setTimeout(messageCloseDiv, 1000);

    } else {
        document.getElementById("ajaxLoadUpdateTROIMontly").style.visibility = "visible";
        document.getElementById("updateTROIMontlyButtDiv").style.visibility = "hidden";
    }
}
function updateTROIMonthly(obj) {

    document.getElementById("updateTROIMontlyButtDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadUpdateTROIMontly").style.visibility = "visible";

    defaultTROISel = false;
    noOfTROI = document.update_troi_monthly.defaultTROI.length;

    for (i = 0; i < document.update_troi_monthly.defaultTROI.length; i++) {
        if (document.update_troi_monthly.defaultTROI[i].checked == true) {
            defaultTROIId = document.update_troi_monthly.defaultTROI[i].value;
            defaultTROISel = true;
        }
    }
    if (defaultTROISel == false) {

        alert('Please select default TROI option!');

        document.update_troi_monthly.defaultTROI[0].focus();
        document.getElementById("updateTROIMontlyButtDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadUpdateTROIMontly").style.visibility = "hidden";

    } else if (validateUpdateTROIMonthlyInputs(obj)) {

        var troiCounter = 1;

        var poststr = "defaultTROIId=" + defaultTROIId +
                "&noOfTROI=" + noOfTROI;

        for (troiCounter = 1; troiCounter <= noOfTROI; troiCounter++) {
            poststr += "&troiMonOpt" + troiCounter + "=" + document.getElementById("troiMonOpt" + troiCounter).value +
                    "&tiroiMonOpt" + troiCounter + "=" + document.getElementById("tiroiMonOpt" + troiCounter).value;
        }

        update_TROI_Monthly('include/php/olgutrom.php', poststr);//change in filename @AUTHOR: SANDY13DEC13
    } else {
        document.getElementById("updateTROIMontlyButtDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadUpdateTROIMontly").style.visibility = "hidden";

    }
}
/****************End code to add counter to noOfTROI @Author:PRIYA01MAR14********************/
// ************* Update Montly Interest Options *************************
function update_Monthly_Int_Opt(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateMonthlyIntOpt;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}

function alertUpdateMonthlyIntOpt() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        window.setTimeout(messageCloseDiv, 1000); //delay function added @Author:PRIYA19NOV13
    } else {
        document.getElementById("ajaxLoadUpdateMonthlyIntOpt").style.visibility = "visible";
        document.getElementById("updateMonthlyIntOptButtDiv").style.visibility = "hidden";
    }
}
function updateMonthlyIntOpt(roiPanel) {
    var poststr = "interestType=" + encodeURIComponent(document.getElementById("interestType").value) +
            "&roiPanel=" + roiPanel;

    update_Monthly_Int_Opt('include/php/olgumint.php', poststr);//change in filename @AUTHOR: SANDY13DEC13
}
// ************* Update ROI Annually Options *************************
/****************Start code to change fixed var 9 to no of roi @Author:PRIYA19NOV13****************/
function validateUpdateROIAnnuallyInputs(obj) {
    for (var roiCounter = 1; roiCounter <= noOfROI; roiCounter++) {
        if (validateEmptyField(document.getElementById("roiAnnOpt" + roiCounter).value, "Please enter ROI value!") == false ||
                validateNumWithDot(document.getElementById("roiAnnOpt" + roiCounter).value, "Accept only Numbers!") == false) {
            document.getElementById("roiAnnOpt" + roiCounter).focus();
            return false;
        }
    }
    return true;
}
function update_ROI_Annually(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateROIAnnually;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}

function alertUpdateROIAnnually() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadUpdateROIAnnually").style.visibility = "hidden";
        document.getElementById("updateROIAnnuallyButtDiv").style.visibility = "visible";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        window.setTimeout(messageCloseDiv, 1000); //delay function added @Author:PRIYA19NOV13

    } else {
        document.getElementById("ajaxLoadUpdateROIAnnually").style.visibility = "visible";
        document.getElementById("updateROIAnnuallyButtDiv").style.visibility = "hidden";
    }
}
function updateROIAnnually(obj) {

    document.getElementById("updateROIAnnuallyButtDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadUpdateROIAnnually").style.visibility = "visible";

    defaultROISel = false;
    noOfROI = document.update_roi_annually.defaultROI.length; //var noOfROI Added @Author:PRIYA19NOV13

    for (i = 0; i < document.update_roi_annually.defaultROI.length; i++) {
        if (document.update_roi_annually.defaultROI[i].checked == true) {
            defaultROIId = document.update_roi_annually.defaultROI[i].value;
            defaultROISel = true;
        }
    }
    if (defaultROISel == false) {

        alert('Please select default ROI option!');

        document.update_roi_annually.defaultROI[0].focus();
        document.getElementById("updateROIAnnuallyButtDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadUpdateROIAnnually").style.visibility = "hidden";

    } else if (validateUpdateROIAnnuallyInputs(obj)) {

        var roiCounter = 1;
        /*********Start code to add var noOfROI in poststr @Author:PRIYA19NOV13*********************/
        var poststr = "defaultROIId=" + defaultROIId +
                "&noOfROI=" + noOfROI;
        /*********End code to add var noOfROI in poststr @Author:PRIYA19NOV13*********************/
        for (roiCounter = 1; roiCounter <= noOfROI; roiCounter++) {
            poststr += "&roiAnnOpt" + roiCounter + "=" + document.getElementById("roiAnnOpt" + roiCounter).value +
                    "&iroiAnnOpt" + roiCounter + "=" + document.getElementById("iroiAnnOpt" + roiCounter).value;
        }

        update_ROI_Annually('include/php/olguaint.php', poststr);//change in filename @AUTHOR: SANDY13DEC13
    } else {
        document.getElementById("updateROIAnnuallyButtDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadUpdateROIAnnually").style.visibility = "hidden";

    }
}
/****************End code to change fixed var 9 to no of roi @Author:PRIYA19NOV13****************/
// ************* Update TROI Annually Options *************************
/****************Start code to add counter to noOfTROI @Author:PRIYA01MAR14********************/
function validateUpdateTROIAnnuallyInputs(obj) {
    for (var troiCounter = 1; troiCounter <= noOfTROI; troiCounter++) {
        if (validateEmptyField(document.getElementById("troiAnnOpt" + troiCounter).value, "Please enter ROI value!") == false ||
                validateNumWithDot(document.getElementById("troiAnnOpt" + troiCounter).value, "Accept only Numbers!") == false) {
            document.getElementById("troiAnnOpt" + troiCounter).focus();
            return false;
        }
    }
    return true;
}
function update_TROI_Annually(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateTROIAnnually;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}

function alertUpdateTROIAnnually() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadUpdateTROIAnnually").style.visibility = "hidden";
        document.getElementById("updateTROIAnnuallyButtDiv").style.visibility = "visible";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
        window.setTimeout(messageCloseDiv, 1000);

    } else {
        document.getElementById("ajaxLoadUpdateTROIAnnually").style.visibility = "visible";
        document.getElementById("updateTROIAnnuallyButtDiv").style.visibility = "hidden";
    }
}
function updateTROIAnnually(obj) {

    document.getElementById("updateTROIAnnuallyButtDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadUpdateTROIAnnually").style.visibility = "visible";

    defaultTROISel = false;
    noOfTROI = document.update_troi_annually.defaultTROI.length;
    for (i = 0; i < document.update_troi_annually.defaultTROI.length; i++) {
        if (document.update_troi_annually.defaultTROI[i].checked == true) {
            defaultTROIId = document.update_troi_annually.defaultTROI[i].value;
            defaultTROISel = true;
        }
    }
    if (defaultTROISel == false) {

        alert('Please select default ROI option!');

        document.update_troi_annually.defaultTROI[0].focus();
        document.getElementById("updateTROIAnnuallyButtDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadUpdateTROIAnnually").style.visibility = "hidden";

    } else if (validateUpdateTROIAnnuallyInputs(obj)) {

        var troiCounter = 1;

        var poststr = "defaultTROIId=" + defaultTROIId +
                "&noOfTROI=" + noOfTROI;

        for (troiCounter = 1; troiCounter <= noOfTROI; troiCounter++) {
            poststr += "&troiAnnOpt" + troiCounter + "=" + document.getElementById("troiAnnOpt" + troiCounter).value +
                    "&tiroiAnnOpt" + troiCounter + "=" + document.getElementById("tiroiAnnOpt" + troiCounter).value;
        }

        update_TROI_Annually('include/php/olgutroa.php', poststr);//change in filename @AUTHOR: SANDY13DEC13
    } else {
        document.getElementById("updateTROIAnnuallyButtDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadUpdateTROIAnnually").style.visibility = "hidden";

    }
}
/****************End code to add counter to noOfTROI @Author:PRIYA01MAR14********************/
// ************* Get City Details *******************
var cityId;
function setCityId(obj) {

    cityId = obj.id;

}
function getCity(obj) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUpdateCityDiv").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("GET", "include/php/omvvupcd.php?cityId=" + cityId,
            true);
    xmlhttp.send();
}
//********* Update City Code *******************
function update_city(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateCity;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateCity() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";

    }

}
function delete_city(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertDeleteCity;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertDeleteCity() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";

    }

}
var buttId;
function setButtId(obj) {

    buttId = obj.id;

}
function updateDeleteCity(obj) {
    document.getElementById("ajax_loading_div").style.visibility = "visible";

    var poststr = "";

    if (buttId == 'Update') {
        if (validateAddCityInputs(obj)) {
            poststr = "cityName=" + encodeURIComponent(document.getElementById("cityName").value)
                    + "&cityComments=" + encodeURIComponent(document.getElementById("cityComments").value)
                    + "&cityId=" + encodeURIComponent(document.getElementById("cityId").value);

            update_city('include/php/omvvupcc.php', poststr);
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
        }
    } else if (buttId == 'Delete') {

        poststr = "cityId=" + encodeURIComponent(document.getElementById("cityId").value);

        delete_city('include/php/omvvccdl.php', poststr);

    }
}
//************* Get Country Details *******************
var countryId;
function setCountryId(obj) {

    countryId = obj.id;

}
function getCountry(obj) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUpdateCountryDiv").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("GET", "include/php/omvcupcd.php?countryId=" + countryId,
            true);
    xmlhttp.send();
}
//********* Update Country Code *******************
function update_country(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateCountry;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateCountry() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";

    }

}
function delete_country(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertDeleteCountry;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertDeleteCountry() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";

    }

}
function updateDeleteCountry(obj) {
    document.getElementById("ajax_loading_div").style.visibility = "visible";

    var poststr = "";

    if (buttId == 'Update') {
        if (validateAddCountryInputs(obj)) {
            poststr = "countryName=" + encodeURIComponent(document.getElementById("countryName").value)
                    + "&countryCurrency=" + encodeURIComponent(document.getElementById("countryCurrency").value)
                    + "&countryComments=" + encodeURIComponent(document.getElementById("countryComments").value)
                    + "&countryId=" + encodeURIComponent(document.getElementById("countryId").value);

            update_country('include/php/omvcupco.php', poststr);
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
        }
    } else if (buttId == 'Delete') {
        poststr = "countryId=" + encodeURIComponent(document.getElementById("countryId").value);

        delete_country('include/php/omvccodl.php', poststr);

    }
}
//************* Get State Details *******************
var stateId;
function setStateId(obj) {

    stateId = obj.id;

}
function getState(obj) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUpdateStateDiv").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("GET", "include/php/omvsupsd.php?stateId=" + stateId,
            true);
    xmlhttp.send();
}
//********* Update State Code *******************
function update_state(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateState;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateState() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";

    }

}
function delete_state(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertDeleteState;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertDeleteState() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";

    }

}
/******************Start code to remove alert @Author:PRIYA07DEC13***************/
function updateDeleteState(obj) {
    document.getElementById("ajax_loading_div").style.visibility = "visible";

    var poststr = "";

    if (buttId == 'Update') {
        if (validateAddStateInputs(obj)) {
            poststr = "stateName=" + encodeURIComponent(document.getElementById("stateName").value)
                    + "&stateComments=" + encodeURIComponent(document.getElementById("stateComments").value)
                    + "&stateId=" + encodeURIComponent(document.getElementById("stateId").value);

            update_state('include/php/omvsupst.php', poststr);
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
        }
    } else if (buttId == 'Delete') {
        poststr = "stateId=" + encodeURIComponent(document.getElementById("stateId").value);
        delete_state('include/php/omvsstdl.php', poststr);

    }
}
/******************End code to remove alert @Author:PRIYA07DEC13***************/
//************* Get ItemName Details *******************
var itemNameId;
function setItemNameId(obj) {

    itemNameId = obj.id;

}
function getItemName(obj) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUpdateItemNameDiv").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("GET", "include/php/omiuindv.php?itemNameId=" + itemNameId,
            true);
    xmlhttp.send();
}
//************* Get ItemTunch Details *******************
var itemTunchId;
function setTunchId(obj) {

    itemTunchId = obj.id;

}
function getItemTunch(obj) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUpdateItemTunchDiv").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("GET", "include/php/omiuitdv.php?itemTunchId=" + itemTunchId,
            true);
    xmlhttp.send();
}
/***************Start code to ochange fn @Author:PRIYA07DEC13*******************/
//********* Update ItemName Code *******************
//function update_itemName(url, parameters) {
//
//    loadXMLDoc();
//
//    xmlhttp.onreadystatechange = alertUpdateItemName;
//
//    xmlhttp.open('POST', url, true);
//    xmlhttp.setRequestHeader('Content-Type',
//        'application/x-www-form-urlencoded');
//    xmlhttp.setRequestHeader("Content-length", parameters.length);
//    xmlhttp.setRequestHeader("Connection", "close");
//    xmlhttp.send(parameters);
//
//}
//
//function alertUpdateItemName() {
//
//    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//        document.getElementById("ajax_loading_div").style.visibility = "hidden";
//        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
//    }
//    else {
//        document.getElementById("ajax_loading_div").style.visibility = "visible";
//
//    }
//
//}
//function delete_itemName(url, parameters) {
//
//    loadXMLDoc();
//
//    xmlhttp.onreadystatechange = alertDeleteItemName;
//
//    xmlhttp.open('POST', url, true);
//    xmlhttp.setRequestHeader('Content-Type',
//        'application/x-www-form-urlencoded');
//    xmlhttp.setRequestHeader("Content-length", parameters.length);
//    xmlhttp.setRequestHeader("Connection", "close");
//    xmlhttp.send(parameters);
//
//}
//
//function alertDeleteItemName() {
//
//    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//        document.getElementById("ajax_loading_div").style.visibility = "hidden";
//        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
//    }
//    else {
//        document.getElementById("ajax_loading_div").style.visibility = "visible";
//
//    }
//
//}
/****************Start Code To Add Item Category @AUTHOR:PRIYA11APR13*****************/
/***************Start code to ochange fn @Author:PRIYA26DEC13*******************/
function updateDeleteItemName() {
    //    document.getElementById("ajax_loading_div").style.visibility = "visible";
    //
    //    if (buttId == 'Update') {
    //        if (validateAddItemNameInputs()) {
    //            var poststr = "addItemName=" + encodeURIComponent(document.getElementById("addItemName").value)
    //            + "&addItemCategory=" + encodeURIComponent(document.getElementById("addItemCategory").value)
    //            + "&metalType=" + encodeURIComponent(document.getElementById("metalType").value)
    //            + "&itemNameComments=" + encodeURIComponent(document.getElementById("itemNameComments").value)
    //            + "&itemNameId=" + encodeURIComponent(document.getElementById("itemNameId").value)
    //            + "&itemNmImageLoadOption=" + encodeURIComponent(document.getElementById("itemNmImageLoadOption").value)
    //            + "&itemNmSelectPhotoIMG=" + encodeURIComponent(document.getElementById("itemNmSelectPhotoIMG").value)
    //            + "&itemNmSelectPhoto=" + encodeURIComponent(document.getElementById("itemNmSelectPhoto").value);
    //
    //            update_itemName('include/php/omiuinup.php', poststr);
    //        } else {
    //            document.getElementById("ajax_loading_div").style.visibility = "hidden";
    //        }
    //    }
    //    else if (buttId == 'Delete') {
    //        poststr = "itemNameId=" + encodeURIComponent(document.getElementById("itemNameId").value);
    //
    //        delete_itemName('include/php/omiddlin.php', poststr);
    //
    //    }
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (validateAddItemNameInputs()) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("UpdateItem").style.visibility = "visible";
        return true;

    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    }
//    else if (buttId == 'Delete') {
//        poststr = "itemNameId=" + encodeURIComponent(document.getElementById("itemNameId").value);
//
//        delete_itemName('include/php/omiddlin.php', poststr);
//
//    }
}
/***************End code to ochange fn @Author:PRIYA26DEC13*******************/
/****************End Code To Add Item Category @AUTHOR:PRIYA11APR13*****************/
//********* Update Delete ItemTunch Code *******************
function update_itemTunch(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateItemTunch;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateItemTunch() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";

    }

}
function delete_itemTunch(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertDeleteItemTunch;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertDeleteItemTunch() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";

    }

}
/**********Start of changes in function to access barcode related fields @AUTHOR: SANDY21OCT13 ****************/
function updateDeleteItemTunch(obj) {
    document.getElementById("ajax_loading_div").style.visibility = "visible";

    if (buttId == 'Update') {
        if (validateAddItemTunchInputs(obj)) {
            var poststr = "tunchName=" + encodeURIComponent(document.getElementById("tunchName").value)
                    + "&tunchValue=" + encodeURIComponent(document.getElementById("tunchValue").value)
                    + "&metalType=" + encodeURIComponent(document.getElementById("metalType").value)
                    + "&itemTunchComments=" + encodeURIComponent(document.getElementById("itemTunchComments").value)
                    + "&barcodeColor=" + encodeURIComponent(document.getElementById("barcodeColor").value)
                    + "&barcodeSize=" + encodeURIComponent(document.getElementById("barcodeSize").value)
                    + "&itemTunchId=" + encodeURIComponent(document.getElementById("itemTunchId").value);

            update_itemTunch('include/php/omiuitup.php', poststr);
        } else {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
        }
    } else if (buttId == 'Delete') {
        poststr = "itemTunchId=" + encodeURIComponent(document.getElementById("itemTunchId").value);

        delete_itemTunch('include/php/omiddlit.php', poststr);

    }
}
/**********End of changes in function to access barcode related fields @AUTHOR: SANDY21OCT13 ****************/
// ************************ Get Item Names *************************
function change_Item_Name_Option(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertChangeItemNameOption;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
var selMetalType;
function alertChangeItemNameOption() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "hidden";
        document.getElementById("addGirviItemDiv").innerHTML = xmlhttp.responseText;

    } else {
        document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "visible";
    }
}
function changeItemNameOption(selectedMetalType) {
    var itemAddOption = document.getElementById("itemAddOption").value;
    var poststr = "metalType=" + encodeURIComponent(selectedMetalType.value);

    selMetalType = selectedMetalType.value;
    if (itemAddOption == 'MultipleItems') {
        if (selMetalType != 'Other') {
            change_Item_Name_Option('include/php/olgamidv.php', poststr);//Change in filename @AUTHOR: SANDY22NOV13
        } else {
            change_Item_Name_Option('include/php/olgamoid.php', poststr);//Change in filename @AUTHOR: SANDY22NOV13
        }
    } else {
        if (selMetalType != 'Other') {
            change_Item_Name_Option('include/php/olgaooid.php', poststr);//Change in filename @AUTHOR: SANDY22NOV13
        } else {
            change_Item_Name_Option('include/php/olgaoooi.php', poststr);//Change in filename @AUTHOR: SANDY22NOV13
        }
    }
    return false;
}
// ************************ Get Item Names Multiple Option *****************************
function changeItemNameMultipleOption(selectedMetalType) {

    var poststr = "metalType=" + encodeURIComponent(selectedMetalType.value);

    change_Item_Name_Option('include/php/omiginml.php', poststr);

    return false;
}
// ************************ Get Item Tunch **********************************
function getItemNames(selectedMetalType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "hidden";
            document.getElementById("itemNameDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omigitnm.php?metalType=" + selectedMetalType.value, true);
    xmlhttp.send();
}
// ************************ Get Item Tunch **********************************
function getMultipleItemNames(selectedMetalType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "hidden";
            document.getElementById("itemNameDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omiginml.php?metalType=" + selectedMetalType.value, true);
    xmlhttp.send();
}
/***********START CODE TO Change Tunch and Metal Rate in New Order @AUTHOR:PRIYA07JAN13*****************/
// ************************ Get Item Tunch **********************************
var itemTunchDivCount;
var addstockDiv;
var addStockMetalType;
var transType;
var userId;
function change_Item_Tunch_Option(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertChangeItemTunchOption;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.send(parameters);

}
/*******Start Code To Add Div For Supp Add Stock @AUTHOR:PRIYA28MAY13***********/
/*******Start Code To change Div For Supp new order @Author:PRIYA14SEP13***********/
/*****Start code to change New order id @Author:PRIYA26OCT13*************/
/**************Start code to add div @Author:PRIYA24DEC13**************/
/***************Start code to add addstockDiv @Author:PRIYA14APR15***********/

function alertChangeItemTunchOption() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        if (addstockDiv == 'StockPanel' || addstockDiv == 'SuppOrder' || addstockDiv == 'SuppAddStock' || addstockDiv == 'ItemRepair' || addstockDiv == 'addRawStock' ||
                addstockDiv == 'NewOrder' || addstockDiv == 'custSlItem' || addstockDiv == 'SuppPurByItem' || addstockDiv == 'SuppAddOrder' || addstockDiv == 'WholeSale' ||
                addstockDiv == 'AddStockPanel' || addstockDiv == 'AddWhStockPanel' || addstockDiv == 'SellPurchase')//change in condition to check for wholesale & retail panel @OMMODTAG SHRI_16DEC15
        {
            document.getElementById("itemTunchDiv" + itemTunchDivCount).innerHTML = xmlhttp2.responseText;
            changeAddStockMetalRate(addStockMetalType);
        } else if (addstockDiv == 'AddInvoice') {
//            alert(xmlhttp2.responseText);
            document.getElementById('itemFineTunchDiv').innerHTML = xmlhttp2.responseText; //added for fine invoice @Author:SHRI24FEB17
            changeAddStockSuppWastage(addStockMetalType, document.getElementById('suppId').value);
        } else {
            document.getElementById("itemTunchDiv" + itemTunchDivCount).innerHTML = xmlhttp2.responseText;
            document.getElementById("itemName" + itemTunchDivCount).focus();
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/***************End code to add addstockDiv @Author:PRIYA14APR15***********/
/*******End Code To change Div For Supp new order @Author:PRIYA14SEP13***********/
/*******START update @Author:GAUR06DEC16***********/

function changeItemTunchOption(selectedMetalType, divCount, metalSellType, metalTransType, userIdNew) {
//alert(divCount); 
// addRawStock
    var poststr = "metalType=" + encodeURIComponent(selectedMetalType.value)
            + "&itemDivCount=" + encodeURIComponent(divCount)
            + "&metalSellType=" + encodeURIComponent(metalSellType);
    selMetalType = selectedMetalType.value;
    addStockMetalType = selMetalType;
    itemTunchDivCount = divCount;
    transType = metalTransType;
    userId = userIdNew;
    /************Start code to add div @Author:PRIYA07OCT14********/
    /********Start code to add divCount WholeSale @Author:PRIYA14APR15*********/
    /********Start code to change ids WholeSale @Author:athu8jun17*********/
    if (divCount == 'StockPanel' || divCount == 'SuppOrder' || divCount == 'WholeSale' || divCount == 'AddStockPanel' || divCount == 'AddWhStockPanel') {
        var documentRootPath = document.getElementById('documentRootPath').value;
        addstockDiv = divCount;
        itemTunchDivCount = '';
        poststr += "&tunchDivId=sttr_purity" +
                "&nextFieldId=sttr_wastage" +
                "&prevFieldId=sttr_nt_weight_type" +
                "&netWeightFieldId=sttr_nt_weight" +
                "&fineWeightFieldId=sttr_fine_weight" +
                "&finalFineWeightFieldId=sttr_final_fine_weight" +
                "&tunchDivClass=form-control-select20-font12 placeholderClass";
        change_Item_Tunch_Option('http://' + documentRootPath + '/include/php/ogiatnch.php', poststr);
    } else if (divCount == 'SellPurchase') {
        addstockDiv = divCount;
        itemTunchDivCount = '';
        poststr += "&tunchDivId=sttr_purity" +
                "&nextFieldId=slPrItemWastage" +
                "&prevFieldId=slPrItemNTWT" +
                "&netWeightFieldId=slPrItemNTW" +
                "&fineWeightFieldId=slPrItemFineWeight" +
                "&finalFineWeightFieldId=slPrItemFFineWeight" +
                "&tunchDivClass=form-control-select20-font12 placeholderClass";
        change_Item_Tunch_Option('include/php/ogiatnch.php', poststr);
    }
    /********Start code to add divCount WholeSale @Author:PRIYA14APR15*********/
    /********Start code to change class @Author:PRIYA07OCT14************/
    else if (divCount == 'SuppPurByItem' || divCount == 'SuppAddOrder') {
        addstockDiv = divCount;
        itemTunchDivCount = '';
        poststr += "&tunchDivId=addItemTunch" +
                "&nextFieldId=addItemWastage" +
                "&prevFieldId=addItemNetWeightType" +
                "&netWeightFieldId=addItemNetWeight" +
                "&fineWeightFieldId=addItemFineWeight" +
                "&finalFineWeightFieldId=addItemFFineWeight" +
                "&tunchDivClass=form-control-select20-font12 placeholderClass";
        change_Item_Tunch_Option('include/php/ogiatndv.php', poststr);
    }
    /********End code to change class @Author:PRIYA13SEP14************/
    /************End code to add div @Author:PRIYA08SEP14********/
    else if (divCount == 'NewOrder') {
        addstockDiv = 'NewOrder';
        itemTunchDivCount = '';
        /********Start code to change class @Author:PRIYA21JAN14************/
        poststr += "&tunchDivId=nwOrItemPurity" +
                "&nextFieldId=nwOrItemLabCharges" +
                "&nextReqFieldId=nwOrItemLabCharges" +
                "&prevFieldId=nwOrItemNetWeightType" +
                "&netWeightFieldId=nwOrItemNetWeight" +
                "&fineWeightFieldId=nwOrItemFnWeight" +
                "&tunchDivClass=textLabel14CalibriReq";
        /********End code to change class @Author:PRIYA21JAN14************/
        change_Item_Tunch_Option('include/php/ogiatndv.php', poststr);
    } else if (divCount == 'SuppAddStock') {
        addstockDiv = 'SuppAddStock';
        itemTunchDivCount = '';

        poststr += "&tunchDivId=addStockItemTunch" +
                "&nextFieldId=suppNwOrCrystalClarity" +
                "&nextReqFieldId=suppNwOrCrystalClarity" +
                "&prevFieldId=suppNwOrItemFFineWeight" +
                "&netWeightFieldId=suppNwOrItemNetWeight" +
                "&fineWeightFieldId=suppNwOrItemFineWeight" +
                "&finalFineWeightFieldId=suppNwOrItemFFineWeight" +
                "&tunchDivClass=lgn-txtfield-req-arial";

        change_Item_Tunch_Option('include/php/ogiatndv.php', poststr);
    }
    /**Start  to add condition for item reapir panel @AUTHOR: SANDY26AUG13 **/
    /**************start of Changes in function @AUTHOR: SANDY16SEP13 **************/
    else if (divCount == 'ItemRepair') {
        addstockDiv = 'ItemRepair';
        itemTunchDivCount = '';

        poststr += "&tunchDivId=itemTunch" +
                "&nextFieldId=repairItemFineWt" +
                "&nextReqFieldId=repairCharges" +
                "&prevFieldId=repairItemGrossWeightType" +
                "&netWeightFieldId=repairItemGrossWeight" +
                "&fineWeightFieldId=repairItemFineWt" +
                "&finalFineWeightFieldId=repairItemFineWt" +
                "&tunchDivClass=form-control-select20-font12 placeholderClass"; //change code to file @Author:SHRI24FEB15

        change_Item_Tunch_Option('include/php/ogiatndv.php', poststr);
    }
    /**************start of Changes in function @AUTHOR: SANDY16SEP13 **************/
    /**************Start code to change in function @Author:PRIYA18JAN14**************/
    /**************Start code to change in function @Author:SHE08MAR16**************/
    else if (divCount == 'addRawStock') {
        addstockDiv = 'addRawStock';
        itemTunchDivCount = '';

        poststr += "&tunchDivId=sttr_purity" +
                "&nextFieldId=sttr_wastage" +
                "&nextReqFieldId=sttr_wastage" +
                "&prevFieldId=sttr_nt_weight_type" +
                "&netWeightFieldId=sttr_nt_weight" +
                "&fineWeightFieldId=sttr_fine_weight" +
                "&tunchDivClass=select_border_red";

        change_Item_Tunch_Option('include/php/ogiatndv.php', poststr);

    }
    /**************End code to change in function @Author:SHE08MAR16**************/
    /**************End code to change in function @Author:PRIYA18JAN14**************/
    /**End  to add condition for item reapir panel @AUTHOR: SANDY26AUG13 **/
    else if (divCount == 'custSlItem') {
        addstockDiv = 'custSlItem';
        itemTunchDivCount = '';
        metalSType = metalSellType;

        poststr += "&tunchDivId=slItemTunch" +
                "&nextFieldId=slItemFineWeight" +
                "&nextReqFieldId=slItemFineWeight" +
                "&prevFieldId=slItemNetWeightType" +
                "&netWeightFieldId=slItemNetWeight" +
                "&fineWeightFieldId=slItemFineWeight" +
                "&finalFineWeightFieldId=slItemFineWeight" +
                "&tunchDivClass=select_border_red";//change in class @AUTHOR: SANDY30NOV13

        change_Item_Tunch_Option('include/php/ogiatndv.php', poststr);

    }/********Start code to change class @Author:GAUR28OCT16************/
    else if (divCount == 'custMetalPurItem') {
        addstockDiv = 'custSlItem';
        itemTunchDivCount = '';

        poststr += "&tunchDivId=slItemTunch" +
                "&nextFieldId=slItemFineWeight" +
                "&nextReqFieldId=slItemFineWeight" +
                "&prevFieldId=slItemNetWeightType" +
                "&netWeightFieldId=slItemNetWeight" +
                "&fineWeightFieldId=slItemFineWeight" +
                "&finalFineWeightFieldId=slItemFineWeight" +
                "&tunchDivClass=select_border_red";

        change_Item_Tunch_Option('include/php/ogiatndv.php', poststr);

    }
    /********end code to change class @Author: GAUR28OCT16************/ else if (divCount == 'AddInvoice') {
        /********Start code to change class @Author:SANT15JUN17************/
        addstockDiv = 'AddInvoice';
        itemTunchDivCount = '';
        poststr += "&tunchDivId=sttr_purity" +
                "&nextFieldId=sttr_wastage" +
                "&nextReqFieldId=sttr_fine_weight" +
                "&prevFieldId=sttr_final_fine_weight" +
                "&netWeightFieldId=sttr_nt_weight" +
                "&fineWeightFieldId=sttr_fine_weight" +
                "&tunchDivClass=form-control-select20-font12 placeholderClass" +
                "&suppId=" + encodeURIComponent(document.getElementById('suppId').value);
        change_Item_Tunch_Option('include/php/ogiatnch.php', poststr);
        /********End code to change class @Author:SANT15JUN17************/
    } else if (selMetalType != 'Other') {
        change_Item_Tunch_Option('include/php/omigittn.php', poststr);
    } else {
        change_Item_Tunch_Option('include/php/olgaoooi.php', poststr);//Change in filename @AUTHOR: SANDY22NOV13
    }
    return false;
}
/*******END update @Author:GAUR06DEC16***********/
/**************End code to add div @Author:PRIYA24DEC13**************/
/*****End code to change New order id @Author:PRIYA26OCT13*************/
/*******End Code To Add Div For Supp Add Stock @AUTHOR:PRIYA28MAY13***********/
/*******START CODE TO Add Item Pre Id AUTHOR:PRIYA25FEB13***********/
function change_stock_item_id(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertChangeStockItemId;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
/*****Start Code To Add New Order Item Div For New Order Panel @AUTHOR:PRIYA11MAY13********/
/********Startof changes in function to add code for raw stock panel @AUTHOR: SANDY24SEP13 *************/
/*******Start Code To Add Div For Supp Add Stock @AUTHOR:PRIYA28MAY13***********/
/*******Start of changes in function @AUTHOR: SANDY9NOV13**************/
/*******Start code to add div for custSlItem @Author:PRIYA24DEC13******/
/*******Start code to add div for custSlItem @Author:PRIYA21JAN14******/
/********Start code to add condition for AddStockPanel,wholesale @OMMODTAG SHRI_09FEB16*********/
/********Start code to add condition for AddStockPanel @OMMODTAG SHE11MAR16*****/
/********Start code to add condition @Author: GAUR06DEC16*****/
function alertChangeStockItemId() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        if (addstockDiv == 'StockPanel' || addstockDiv == 'SuppOrder' || addstockDiv == 'custSlItem' || addstockDiv == 'addRawStock' || addstockDiv == 'NewOrder' ||
                addstockDiv == 'SuppPurByItem' || addstockDiv == 'SuppAddOrder' || addstockDiv == 'AddStockPanel' || addstockDiv == 'WholeSale' || addstockDiv == 'AddWhStockPanel') {
            if (addstockDiv == 'StockPanel' || addstockDiv == 'SuppOrder' || addstockDiv == 'AddStockPanel' || addstockDiv == 'WholeSale' || addstockDiv == 'AddWhStockPanel') {
                var str = xmlhttp.responseText;
//                alert('alertChangeStockItemId=' + str);
                var strValue = new Array();
                strValue = str.split("*");

                document.getElementById("sttr_item_pre_id").value = strValue[0].trim();//trim added @OMMODTAG SHRI_12JAN16
                document.getElementById("sttr_item_id").value = strValue[1];

                if (addstockDiv == 'AddStockPanel' || addstockDiv == 'AddWhStockPanel') {
                    document.getElementById('changedItemPreId').value = strValue[0].trim();
                    document.getElementById('changedItemId').value = strValue[1];
                }
                document.getElementById("sttr_item_pre_id").focus();
            } else {
                document.getElementById("addStockItemIdDiv").innerHTML = xmlhttp.responseText;
                if (addstockDiv == 'SuppPurByItem' || addstockDiv == 'SuppAddOrder') {
                    document.getElementById("addItemPreId").focus();
                } else if (addstockDiv == 'custSlItem') {
                    var str = xmlhttp.responseText;
//                    alert(str);
//                    var strValue = new Array();
//                    strValue = str.split("*");
//
//                    document.getElementById("slItemPreId").value = strValue[0].trim();//trim added @OMMODTAG SHRI_12JAN16
//                    alert(document.getElementById("slItemPreId").value);
//                    document.getElementById("slItemId").value = strValue[1];
//                    alert(document.getElementById("slItemId").value);
                    document.getElementById("slItemMetalRateId").focus();
                } else if (addstockDiv == 'addRawStock') {
                    document.getElementById("addRawStockMetalId").focus();
                } else if (addstockDiv == 'NewOrder') {
                    document.getElementById("nwOrItemPreId").focus();
                }
            }
        } else if (addstockDiv == 'SuppAddStock') {
            document.getElementById("suppItemIdDiv").innerHTML = xmlhttp.responseText;
        } else if (addstockDiv == 'ItemRepair') {
            // Start code to add condition for repair panel @Author:SHRI24FEB15
            var str = xmlhttp.responseText;
            var strValue = new Array();
            strValue = str.split("*");

            document.getElementById("itemRepPreId").value = strValue[0];
            document.getElementById("itemRepPostId").value = strValue[1];
            document.getElementById("itemRepPreId").focus();

            // End code to add condition for repair panel @Author:SHRI24FEB15
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/********END code to add condition @Author: GAUR06DEC16*****/
/********End code to add condition for AddStockPanel @OMMODTAG SHE11MAR16*****/
/********End code to add condition for AddStockPanel @OMMODTAG SHRI_09FEB16*********/
/*******End code to add div for custSlItem @Author:PRIYA21JAN14******/
/*******End code to add div for custSlItem @Author:PRIYA24DEC13******/
/*******Start of changes in function @AUTHOR: SANDY9NOV13**************/
/*****End Code To Add New Order Item Div For New Order Panel @AUTHOR:PRIYA11MAY13********/
/********End of changes in function to add code for ADD raw stock panel @AUTHOR: SANDY24SEP13 *************/
/***************START update @Author:GAUR06DEC16***********/
function changeStockItemId(selectedMetalType, panelName, metalSType) {
//    alert(panelName);
    var poststr = "metalType=" + encodeURIComponent(selectedMetalType)
            + "&panelName=" + encodeURIComponent(panelName)
            + "&metalSell=" + encodeURIComponent(metalSType);
    if (panelName == 'AddStockPanel' || panelName == 'AddWhStockPanel') {
        var documentRootPath = document.getElementById('documentRootPath').value;
        change_stock_item_id('http://' + documentRootPath + '/include/php/ogiaiddv.php', poststr);
    } else {
        change_stock_item_id('include/php/ogiaiddv.php', poststr);
    }
    return false;
}
/***************END update @Author:GAUR06DEC16***********/
/*******End Code To Add Div For Supp Add Stock @AUTHOR:PRIYA28MAY13***********/
/*******END CODE TO Add Item Pre Id AUTHOR:PRIYA25FEB13***********/
// ************************ Change Metal Rate in Add stock Panel **********************************
function change_add_stock_metal_rate(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertChangeAddStockMetalRate;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.send(parameters);

}
/*****Start Code To Add Item Pre Id For New Order Panel @AUTHOR:PRIYA11MAY13********/
/****************Start Code To Add Div For Supp Add Stock @AUTHOR:PRIYA28MAY13*********************/
/****************Start Code To change div for new order @Author:PRIYA27SEP13*********************/
/***************Start of changes in function @AUTHOR: SANDY1OCT13*******************************/
/***************Start code to change add stock div @Author:PRIYA08NOV13***********/
/***************Start of changes in function @AUTHOR: SANDY9NOV13*******************************/
/***************Start code to add div for stock @Author:PRIYA18JAN14**************************/
/***************Start code to add addstockDiv @Author:PRIYA14APR15***********/
/***************Start code to add check AddInvoice PanelName @Author:SANT05OCT16***********/
/***************START update @Author:GAUR06DEC16***********/
var metalSType;
function alertChangeAddStockMetalRate() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        if (addstockDiv == 'StockPanel' || addstockDiv == 'SuppOrder' || addstockDiv == 'NewOrder' || addstockDiv == 'SuppAddStock' || addstockDiv == 'custSlItem' ||
                addstockDiv == 'SellPurchase' || addstockDiv == 'addRawStock' || addstockDiv == 'SuppPurByItem' || addstockDiv == 'SuppAddOrder' || addstockDiv == 'WholeSale' || addstockDiv == 'AddStockPanel' || addstockDiv == 'AddWhStockPanel' || addstockDiv == 'AddInvoice') {
            document.getElementById("metalRateDiv").innerHTML = xmlhttp2.responseText;
            if (addstockDiv == 'AddStockPanel' || addstockDiv == 'AddWhStockPanel') {
                var str = document.getElementById('metalRateWithTax').value;
                var strArr = str.split("*");
                calStockItemPrice();
            }
            if (addstockDiv == 'addRawStock') {
                document.getElementById('sttr_metal_rate').focus();
            }
//            if (addstockDiv == 'SellPurchase') { // commented @Author:SHRI19JUN17
//                changeSlPrInvoiceNo('sellStock', document.getElementById('firmId').value);
//            }
        }         /**Start for item repair panel @author: SANDY26AUG13 **/
        else if (addstockDiv == 'ItemRepair') {
            document.getElementById("itemRepMetalRateDiv").innerHTML = xmlhttp2.responseText;
        }
        else if (addstockDiv == 'AddInvoice') {
            document.getElementById("metalRateDiv").innerHTML = xmlhttp2.responseText;
        }
        if (addstockDiv != 'AddInvoice' && addstockDiv != 'addRawStock') {
            changeStockItemId(addStockMetalType, addstockDiv, metalSType);
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/***************END update @Author:GAUR06DEC16***********/
/***************End code to add check AddInvoice PanelName @Author:SANT05OCT16***********/
/***************End code to add addstockDiv @Author:PRIYA14APR15***********/
/***************End code to add div for stock @Author:PRIYA18JAN14**************************/
/***************End of changes in function @AUTHOR: SANDY9NOV13*******************************/
/***************End code to change add stock div @Author:PRIYA08NOV13***********/
/***************End of changes in function @AUTHOR: SANDY1OCT13*******************************/
/****************End Code To change div for new order @Author:PRIYA27SEP13********/
/*****End Code To Add Item Pre Id For New Order Panel @AUTHOR:PRIYA11MAY13********/
function changeAddStockMetalRate(metalType) {

    var poststr = "metalType=" + encodeURIComponent(metalType) +
            "&panelName=" + encodeURIComponent(addstockDiv);
//    alert('changeAddStockMetalRate=' + metalRateId1);
    if (addstockDiv == 'AddStockPanel' || addstockDiv == 'AddWhStockPanel') {
        var documentRootPath = document.getElementById('documentRootPath').value;
        change_add_stock_metal_rate('http://' + documentRootPath + '/include/php/ommrggdr.php', poststr);
    } else {
        change_add_stock_metal_rate('include/php/ommrggdr.php', poststr);
    }

    return false;
}
/******************End Code To Add Div For Supp Add Stock @AUTHOR:PRIYA28MAY13**********************/
/***********END CODE TO Change Tunch and Metal Rate in New Order @AUTHOR:PRIYA07JAN13****************/

// ************************ Get Item Tunch for Multiple Items ************************************
function change_Item_Tunch_Option_for_MultiItem(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertChangeItemTunchOptionForMultiItem;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.send(parameters);

}

var selMetalType;

function alertChangeItemTunchOptionForMultiItem() {

    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("itemWeightAndTunchDiv").innerHTML = xmlhttp2.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function changeItemTunchOptionForMultiItems(selectedMetalType) {

    var poststr = '';

    selMetalType = selectedMetalType.value;

    if (selMetalType != 'Other') {

        poststr = "metalType=" + encodeURIComponent(selectedMetalType.value);

        change_Item_Tunch_Option_for_MultiItem('include/php/omigitfm.php', poststr);
    } else {
        change_Item_Tunch_Option_for_MultiItem('include/php/ombbblnk.php', poststr);
    }
    return false;
}
// **************** Release Girvi ****************************************
function release_girvi(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertReleaseGirvi;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertReleaseGirvi() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("girviReleaseButDiv").style.visibility = "hidden";

    }

}
/**************START Code To Add FirmId In releaseGirvi() @AUTHOR:PRIYA01MARCH13********************/
/**************Start code to add girviSerialNo @Author:PRIYA14APR14**********************/
/**************Start code to add acc ID at release  @Author:PRIYA14MAY14**********************/
/********Start code to remove hindi date code @Author:PRIYA21APR15************************/
/*********Start code to add validation for accounts @Author:SHRI10JUL15********************/
function releaseGirvi(custId, girviId, pageNo, totalPrincipalAmount, amountPaid, interestPaid, itotalAmount, itotalInterest, ototalAmount, ototalInterest, discountPaid, relDD, relMM, relYY,
        simpleOrCompIntOption, girviCompoundedOption, monthlyInterestType, interestType, girviFirmId, girviJrnlId, girviAccId,
        girviLoanAccId, girviCashRecAccId, girviIntRecAccId, girviDiscAccId, smsTemplateId, custIdOfFingerScanDetails, loanRelByFingerScanUserId) {
//alert(ototalAmount);
//alert(itotalAmount);
//alert(itotalInterest);
//alert(ototalInterest);
    document.getElementById("girviReleaseButDiv").style.visibility = "hidden";
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    if (validateSelectField(relDD.value, "Please select Release Date Day!") == false) {
        relDD.focus();
        document.getElementById("girviReleaseButDiv").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        exit();
    } else if (validateSelectField(relMM.value, "Please select Release Date Month!") == false) {
        relMM.focus();
        document.getElementById("girviReleaseButDiv").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        exit();
    } else if (validateSelectField(relYY.value, "Please select Release Date Year!") == false) {
        relYY.focus();
        document.getElementById("girviReleaseButDiv").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        exit();
    } else if (validateSelectField(document.getElementById('girviLoanAccId').value, "Please select Release Loan Account!") == false) {
        document.getElementById('girviLoanAccId').focus();
        document.getElementById("girviReleaseButDiv").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        exit();
    } else if (validateSelectField(document.getElementById('girviCashRecAccId').value, "Please select Release Cash Rec. Account!") == false) {
        document.getElementById('girviCashRecAccId').focus();
        document.getElementById("girviReleaseButDiv").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        exit();
    } else if (validateSelectField(document.getElementById('girviDiscAccId').value, "Please select Release girvi Discount Account!") == false) {
        document.getElementById('girviDiscAccId').focus();
        document.getElementById("girviReleaseButDiv").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        exit();
    } else if (validateSelectField(document.getElementById('girviIntRecAccId').value, "Please select Release Interest Rec. Account!") == false) {
        document.getElementById('girviIntRecAccId').focus();
        document.getElementById("girviReleaseButDiv").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        exit();
    } else {
        var girviDateDay = relDD.value;
        var girviDateMMM = relMM.value;
        var girviDateYY = relYY.value;

        if (girviDateMMM == 'FEB' || girviDateMMM == 'APR' || girviDateMMM == 'JUN' ||
                girviDateMMM == 'SEP' || girviDateMMM == 'NOV') {
            if (girviDateMMM == 'FEB' && girviDateDay > 29 && girviDateYY % 4 == 0) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' for this selected year has only max 29 days.');
                document.getElementById("DOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("girviReleaseButDiv").style.visibility = "visible";
                return false;
                exit();
            }
            if (girviDateMMM == 'FEB' && girviDateDay > 28 && girviDateYY % 4 != 0) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' for this selected year has only max 28 days.');
                document.getElementById("DOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("girviReleaseButDiv").style.visibility = "visible";
                return false;
                exit();
            }
            if (girviDateDay > 30) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' has only max 30 days.');
                document.getElementById("DOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("girviReleaseButDiv").style.visibility = "visible";
                return false;
                exit();
            }
        }

        confirm_box = confirm("Do you really want to release this Girvi?");

        if (confirm_box == true)
        {
            var poststr = "custId=" + custId + "&girviId=" + girviId + "&pageNo=" + pageNo
                    + "&totalPrincipalAmount=" + totalPrincipalAmount + "&amountPaid=" + amountPaid.value + "&interestPaid=" + interestPaid.value + "&itotalAmount=" + itotalAmount + "&itotalInterest=" + itotalInterest + "&ototalAmount=" + ototalAmount + "&ototalInterest=" + ototalInterest + "&discountPaid=" + discountPaid.value
                    + "&relDD=" + relDD.value + "&relMM=" + relMM.value + "&relYY=" + relYY.value + "&simpleOrCompIntOption=" + simpleOrCompIntOption +
                    "&girviCompoundedOption=" + girviCompoundedOption + "&gMonthIntOption=" + monthlyInterestType + "&interestType=" + interestType + "&girviFirmId=" + girviFirmId +
                    "&girviJrnlId=" + girviJrnlId + "&girviAccId=" + girviAccId + "&girviLoanAccId=" + girviLoanAccId
                    + "&girviCashRecAccId=" + girviCashRecAccId + "&girviIntRecAccId=" + girviIntRecAccId
                    + "&girviDiscAccId=" + girviDiscAccId + "&loanRelByFingerScanUserId=" + loanRelByFingerScanUserId
                    + "&custIdOfFingerScanDetails=" + custIdOfFingerScanDetails + "&smsTemplateId=" + smsTemplateId;
            //alert(poststr);
            release_girvi('include/php/olgrgvrl.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
        } else {
            document.getElementById("girviReleaseButDiv").style.visibility = "visible";
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        }
    }
}
/*********End code to add validation for accounts @Author:SHRI10JUL15********************/
/********End code to remove hindi date code @Author:PRIYA21APR15************************/
/**************End code to add acc ID at release  @Author:PRIYA14MAY14**********************/
/**************End code to add girviSerialNo @Author:PRIYA14APR14**********************/
/**************END Code To Add FirmId In releaseGirvi() @AUTHOR:PRIYA01MARCH13********************/
// **************** Delete Girvi ****************************************
function delete_girvi(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertDeleteGirvi;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertDeleteGirvi() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("girviDeleteImageDiv").style.visibility = "hidden";

    }

}
/*************Start code to add var @Author:PRIYA14APR14*******************/
/* * ****start code to add value panelDivName '' for Auction @Author:ANUJA08APR15******** */
function deleteGirvi(girviId, custId, panelDivName, gJrnlId, gSerialNo, gFirmId, gDOB, gPrinAmt) {

    document.getElementById("girviDeleteImageDiv").style.visibility = "hidden";
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    confirm_box = confirm("Do you really want to Permanent Delete this Girvi?");
    if (confirm_box == true)
    {
        var poststr = "girviId=" + girviId + "&custId=" + custId + "&panelDivName" + panelDivName + "&gJrnlId=" + gJrnlId
                + "&gSerialNo=" + gSerialNo + "&gFirmId=" + gFirmId
                + "&gDOB=" + gDOB + "&gPrinAmt=" + gPrinAmt;

        delete_girvi('include/php/olgdgvdl.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    } else {
        document.getElementById("girviDeleteImageDiv").style.visibility = "visible";
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    }
}
/* * ****End code to add value panelDivName '' for Auction @Author:ANUJA08APR15******** */
/*************End code to add var @Author:PRIYA14APR14*******************/
/********************** Update Girvi Add More Item *********************************************/
function update_girvi_add_more_item(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateGirviAddMoreItem;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateGirviAddMoreItem() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("ajaxLoadAddMoreItem").style.visibility = "visible";

    }

}
/**********Start code to change func @Author:PRIYA22FEB14*************/
function updateGirviAddMoreItem(obj, itemDivCount) {
    //document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("girviAddMoreItemButDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadAddMoreItem").style.visibility = "visible";

    if (validateAddGirviItemInputs(itemDivCount)) {
        return true;
        // return false;
        //        grossW = document.getElementById("grossWeight" + itemDivCount).value;
        //        netW = document.getElementById("itemWeight" + itemDivCount).value;
        //
        //        if (document.getElementById("itemType" + itemDivCount).value == 'Other'
        //                && (grossW == ' ~ Gross Weight ~' || netW == ' ~ Net Weight ~')) {
        //            grossW = "";
        //            netW = "";
        //        }
        //        poststr = "custId=" + encodeURIComponent(document.getElementById("custId").value)
        //                + "&girviId=" + encodeURIComponent(document.getElementById("girviId").value)
        //                + "&itemType=" + encodeURIComponent(document.getElementById("itemType" + itemDivCount).value)
        //                + "&itemName=" + encodeURIComponent(document.getElementById("itemName" + itemDivCount).value)
        //                + "&itemPieces=" + encodeURIComponent(document.getElementById("itemPieces" + itemDivCount).value)
        //                + "&grossItemWeight=" + encodeURIComponent(grossW)
        //                + "&grossWeightType=" + encodeURIComponent(document.getElementById("grossWeightType" + itemDivCount).value)
        //                + "&itemWeight=" + encodeURIComponent(netW)
        //                + "&weightType=" + encodeURIComponent(document.getElementById("weightType" + itemDivCount).value)
        //                + "&itemTunch=" + encodeURIComponent(document.getElementById("itemTunch" + itemDivCount).value)
        //                + "&girviValuationMan=" + encodeURIComponent(document.getElementById("girviValuationMan" + itemDivCount).value);
        //
        //        update_girvi_add_more_item('include/php/olguitem.php', poststr); //change in filename @AUTHOR: SANDY20NOV13
    } else {
        //document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("girviAddMoreItemButDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadAddMoreItem").style.visibility = "hidden";
        return false;
    }
    return false;
}
/**********End code to change func @Author:PRIYA22FEB14*************/
/********************** Update Girvi Add Principal *********************************************/
/*********************Start code to add validation for accounts @Author:SHRI04JUL15*************/
function validateUpdateGirviAddPrincipalInputs(obj) {

    if (validateEmptyField(document.getElementById("principalAmount").value, "Please enter Principal Amount!") == false ||
            validateNum(document.getElementById("principalAmount").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("principalAmount").focus();
        return false;
    } else if (document.getElementById("principalAmount").value == 0) {
        alert('Please enter Correct Principal Amount!');
        document.getElementById("principalAmount").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("principalAmountROI").value, "Please enter Rate Of Interest!") == false ||
            validateNumWithDot(document.getElementById("principalAmountROI").value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("principalAmountROI").focus();
        return false;
    } else if (validateSelectField(document.getElementById("addPrinDOBDay").value, "Please select Principal Amount Date!") == false) {
        document.getElementById("addPrinDOBDay").focus();
        return false;
    } else if (validateSelectField(document.getElementById("addPrinDOBMonth").value, "Please select Principal Amount Date!") == false) {
        document.getElementById("addPrinDOBMonth").focus();
        return false;
    }
    /*********Start code to change id @Author:PRIYA12APR14*************/
    else if (validateSelectField(document.getElementById("addPrinDOBYear").value, "Please select Principal Amount Date!") == false) {
        document.getElementById("addPrinDOBYear").focus();
        return false;
    }
    /*********End code to change id @Author:PRIYA12APR14*************/
    else if (validateSelectField(document.getElementById("addPrinDrAccId").value, "Please select Dr Account!") == false) {
        document.getElementById("addPrinDrAccId").focus();
        return false;
    } else if (validateSelectField(document.getElementById("addPrinCrAccId").value, "Please select Cr Account!") == false) {
        document.getElementById("addPrinCrAccId").focus();
        return false;
    }
    return true;
}
/*********************End code to add validation for accounts @Author:SHRI04JUL15*************/
function update_girvi_add_principal(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateGirviAddPrincipal;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateGirviAddPrincipal() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";

        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("ajaxLoadAddMorePrincipal").style.visibility = "visible";

    }

}
/***********Start to change function to pass principal serial num @AUTHOR: SANDY12DEC13**************/
/***********************Start code to add dr and cr id @Author:PRIYA19MAY14******************/
/***********************Start code to remove hindi code @Author:PRIYA21APR15******************/
function updateGirviAddPrincipal(obj) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("girviUpdateAddPrincipalButDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadAddMorePrincipal").style.visibility = "visible";

    if (validateUpdateGirviAddPrincipalInputs(obj)) {
        /*Start  to check date is valid or not @AUTHOR: SANDY19AUG13*/
        //Start code to change condition for girvi date @Author:SHRI07APR15
        var girviDateDay = document.getElementById("addPrinDOBDay").value;
        var girviDateMMM = document.getElementById("addPrinDOBMonth").value;
        var girviDateYY = document.getElementById("addPrinDOBYear").value;
        var girviDateStr = document.getElementById("addPrinDOBMonth").value + ' ' + document.getElementById("addPrinDOBDay").value + ', ' + document.getElementById("addPrinDOBYear").value;
        var girviDate = new Date(girviDateStr); // Girvi Date
        var todayDate = new Date(); // Today Date

        var milliGirviDate = girviDate.getTime();
        var milliTodayDate = todayDate.getTime();
        var datesDiff = milliTodayDate - milliGirviDate;
        if (datesDiff < 0) {
            alert('Please Select the correct Date!');
            document.getElementById("addPrinDOBDay").focus();
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviUpdateAddPrincipalButDiv").style.visibility = "visible";
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviUpdateAddPrincipalButDiv").style.visibility = "visible";
            document.getElementById("ajaxLoadAddMorePrincipal").style.visibility = "hidden";
        }
        /*End to check date is valid or not @AUTHOR: SANDY19AUG13*/
        else {
            var poststr = "custId=" + encodeURIComponent(document.getElementById("custId").value)
                    + "&girviId=" + encodeURIComponent(document.getElementById("girviId").value)
                    + "&girviFirmId=" + encodeURIComponent(document.getElementById("girviFirmId").value)
                    + "&principalAmount=" + encodeURIComponent(document.getElementById("principalAmount").value)
                    + "&principalAmountROI=" + encodeURIComponent(document.getElementById("principalAmountROI").value)
                    + "&addPrinDOBDay=" + encodeURIComponent(document.getElementById("addPrinDOBDay").value)
                    + "&addPrinDOBMonth=" + encodeURIComponent(document.getElementById("addPrinDOBMonth").value)
                    + "&girvPrinPreId=" + encodeURIComponent(document.getElementById("girvPrinPreId").value)
                    + "&girvPrinPostId=" + encodeURIComponent(document.getElementById("girvPrinPostId").value)
                    + "&addPrinDOBYear=" + encodeURIComponent(document.getElementById("addPrinDOBYear").value)
                    + "&otherInfoField=" + encodeURIComponent(document.getElementById("otherInfoField").value)
                    + "&girviSerialNum=" + encodeURIComponent(document.getElementById("girviSerialNum").value)
                    + "&addPrinDrAccId=" + encodeURIComponent(document.getElementById("addPrinDrAccId").value)
                    + "&addPrinCrAccId=" + encodeURIComponent(document.getElementById("addPrinCrAccId").value);//get value of other info field @AUTHOR: SANDY03JAN14

            update_girvi_add_principal('include/php/olguadpn.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("girviUpdateAddPrincipalButDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadAddMorePrincipal").style.visibility = "hidden";
    }
}
/***********************End code to remove hindi code @Author:PRIYA21APR15******************/
/*******************End code to add dr and cr id @Author:PRIYA19MAY14******************/
/***********End to change function to pass principal serial num @AUTHOR: SANDY12DEC13**************/
/********************** Update Girvi Deposit Money *********************************************/
var girviDepositMonOpt;
function setGirviDepositMoneyOption(girviDepMonOpt) {
    girviDepositMonOpt = girviDepMonOpt;
}
/*********************Start code to add validation of accounts @Author:SHRI04JUL15*************/
function validateUpdateGirviDepositMoneyInputs(obj) {
    // Start Code to add validate principal amount LOVE@01AUG2015
    if ((girviDepositMonOpt == 'DepositFullInt' ||
            girviDepositMonOpt == 'DepositIntWithDis' ||
            girviDepositMonOpt == 'DepositIntAmtLeft' ||
            girviDepositMonOpt == 'DepositIntAdjInPrin' ||
            girviDepositMonOpt == 'DepositPrinIntLeft') &&
            (document.getElementById("girviDepositPrinAmount").value == '' ||
                    document.getElementById("girviDepositPrinAmount").value == null ||
                    document.getElementById("girviDepositPrinAmount").value == 0)) {
        alert("Please Enter Girvi Principal Amount!");
        document.getElementById("girviDepositPrinAmount").focus();
        return false;
    }
    // End Code to add validate principal amount LOVE@01AUG2015
    if (document.getElementById("girviDepositPrinAmount").value != '' || document.getElementById("girviDepositIntAmount").value != '') {
        if (document.getElementById("girviDepositPrinAmount").value != '') {
            if (validateNumWithDot(document.getElementById("girviDepositPrinAmount").value, "Accept only numeric characters without space character!") == false) {
                document.getElementById("girviDepositPrinAmount").focus();
                return false;
            }
        }
        if (document.getElementById("girviDepositIntAmount").value != '') {
            if (validateNumWithDot(document.getElementById("girviDepositIntAmount").value, "Accept only numeric characters without space character!") == false) {
                document.getElementById("girviDepositIntAmount").focus();
                return false;
            }
        }
    } else {
        if (document.getElementById("girviDepositPrinAmount").value == '' || document.getElementById("girviDepositIntAmount").value == '') {
            alert("Please enter Principal Deposit or Interest Deposit Amount!");
            document.getElementById("girviDepositPrinAmount").focus();
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
    } else if (validateSelectField(document.getElementById("girviDepLoanAccId").value, "Please select Girvi Loan Account!") == false) {
        document.getElementById("girviDepLoanAccId").focus();
        return false;
    } else if (validateSelectField(document.getElementById("girviDepIntRecAccId").value, "Please select Girvi Interest Account!") == false) {
        document.getElementById("girviDepIntRecAccId").focus();
        return false;
    } else if (validateSelectField(document.getElementById("girviDepCashAccId").value, "Please select Girvi Cash Account!") == false) {
        document.getElementById("girviDepCashAccId").focus();
        return false;
    }
    /*********Start Code To Add Validation For Date at deposit @Author:PRIYA29AUG13*****************/
    var girviDateDay = document.getElementById("DMDOBDay").value;
    var girviDateMMM = document.getElementById("DMDOBMonth").value;
    var girviDateYY = document.getElementById("DMDOBYear").value;
    var girviDepDateStr = document.getElementById("DMDOBMonth").value + ' ' + document.getElementById("DMDOBDay").value + ', ' + document.getElementById("DMDOBYear").value;
    var girviDepDate = new Date(girviDepDateStr); // Girvi Deposit Date

    var girviDateStr = document.getElementById("girviNewDateForUpdate").value;
    var girviMainDateStr = new Date(girviDateStr);  //Girvi Main Date
    var todayDateStr = new Date();  //Today's date

    var milliTodayDate = todayDateStr.getTime();
    var milliGirviDepDate = girviDepDate.getTime();
    var milliGirviDate = girviMainDateStr.getTime();

    var datesDiff = milliGirviDepDate - milliGirviDate;//comment @Author:PRIYA10DEC14
    //var datesDiff = milliGirviDate - milliGirviDepDate;//added @Author:PRIYA10DEC14
    var currentDatesDiff = milliTodayDate - milliGirviDepDate;

    if (currentDatesDiff < 0 && girviDepositMonOpt == 'CalculateNow') { //CalculateNow condition added to validate future date for CalculateNow option @Author:PRIYA10DEC14
        alert('Please Select the correct Girvi Deposit Date!');
        document.getElementById("DMDOBDay").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        //document.getElementById("addGirviSubButDiv").style.visibility = "visible";
        return false;
        exit();
    }
    if (datesDiff < 0 && girviDepositMonOpt == 'CalculateNow') { //CalculateNow condition added to validate future date for CalculateNow option @Author:PRIYA10DEC14
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
        //@Author:PRIYA29AUG13
        /*********End Code To Add Validation For Date at deposit @Author:PRIYA29AUG13*****************/
        return true;
    }
}
/*********************End code to add validation for accounts @Author:SHRI04JUL15*************/
function update_girvi_deposit_money(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateGirviDepositMoney;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateGirviDepositMoney() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
        if (girviDepositMonOpt == 'SimplyDeposit') {
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        } else if (girviDepositMonOpt == 'CalculateNow') {
            document.getElementById("depositMoneyDiv").innerHTML = xmlhttp.responseText;
        } else if (girviDepositMonOpt == 'Help') {
            document.getElementById("girviMoneyDepHelpDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("depositMoneyDiv").innerHTML = xmlhttp.responseText;
        }
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/************Start code to add girviSerialNo @Author:PRIYA14APR14*********************/
function updateGirviDepositMoney(obj, selROIValue, girviSerialNo) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("girviUpdateDepMoneyButDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "visible";

    //Start code to comment @Author:PRIYA23OCT13
    //    for (i = 0; i < girviROIForm.selROI.length; i++) {
    //        if (girviROIForm.selROI[i].checked == true)
    //            ROIValue = girviROIForm.selROI[i].value;
    //    }
    //End code to comment @Author:PRIYA23OCT13
    var girviIntAdjustmentCheck = 'False';

    if (document.getElementById("girviIntAdjustment").checked == true) {
        girviIntAdjustmentCheck = 'True';
    }
    if (girviDepositMonOpt == 'Help') {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("girviUpdateDepMoneyButDiv").style.visibility = "visible";
        document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
        update_girvi_deposit_money('include/php/orgggmdh.php', '');
    } else {
        if (validateUpdateGirviDepositMoneyInputs(obj)) {

            var poststr = "custId=" + encodeURIComponent(document.getElementById("custId").value)
                    + "&girviId=" + encodeURIComponent(document.getElementById("girviId").value)
                    + "&girviNewDateForUpdate=" + encodeURIComponent(document.getElementById("girviNewDateForUpdate").value)
                    + "&girviTimePeriodVar=" + encodeURIComponent(document.getElementById("girviTimePeriodVar").value)
                    + "&girviDepositPrinAmount=" + encodeURIComponent(document.getElementById("girviDepositPrinAmount").value)
                    + "&girviDepositIntAmount=" + encodeURIComponent(document.getElementById("girviDepositIntAmount").value)
                    + "&ROIValue=" + encodeURIComponent(document.getElementById("selROI").value) //selROI Id Added @Author:PRIYA23OCT13
                    + "&intType=" + encodeURIComponent(document.getElementById("interestType").value)
                    + "&totalPrincipalAmount=" + encodeURIComponent(document.getElementById("totalPrincipalAmount").value)
                    + "&totalInterestAmount=" + encodeURIComponent(document.getElementById("totalInterestAmount").value)
                    + "&DOBDay=" + encodeURIComponent(document.getElementById("DMDOBDay").value)
                    + "&DOBMonth=" + encodeURIComponent(document.getElementById("DMDOBMonth").value)
                    + "&DOBYear=" + encodeURIComponent(document.getElementById("DMDOBYear").value)
                    + "&simpleOrCompIntOption=" + encodeURIComponent(document.getElementById("simpleOrCompIntOption").value)
                    + "&girviCompoundedOption=" + encodeURIComponent(document.getElementById("girviCompoundedOption").value)
                    + "&gMonthIntOption=" + encodeURIComponent(document.getElementById("monthlyInterestType").value)
                    + "&otherInfoField=" + encodeURIComponent(document.getElementById("otherInfoField").value)//TO GET OTH INFO VALUE @AUTHOR: SANDY03JAN14
                    + "&girviIntAdjustmentCheck=" + encodeURIComponent(girviIntAdjustmentCheck)
                    + "&girviSerialNo=" + encodeURIComponent(girviSerialNo)
                    + "&girviDepositMonOpt=" + girviDepositMonOpt//added @Author:PRIYA05MAY14
                    + "&girviDepLoanAccId=" + encodeURIComponent(document.getElementById("girviDepLoanAccId").value)
                    + "&girviDepIntRecAccId=" + encodeURIComponent(document.getElementById("girviDepIntRecAccId").value)
                    + "&girviDepCashAccId=" + encodeURIComponent(document.getElementById("girviDepCashAccId").value);

            if (girviDepositMonOpt == 'SimplyDeposit') {
                update_girvi_deposit_money('include/php/olgudmsm.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
            } else if (girviDepositMonOpt == 'CalculateNow') {
                update_girvi_deposit_money('include/php/olgudmcn.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
            } else if (girviDepositMonOpt == 'DepositFullInt') {
                update_girvi_deposit_money('include/php/olgudmfi.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
            } else if (girviDepositMonOpt == 'DepositIntWithDis') {
                update_girvi_deposit_money('include/php/olgudmds.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
            } else if (girviDepositMonOpt == 'DepositIntAmtLeft') {
                update_girvi_deposit_money('include/php/olgudmds.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
            } else if (girviDepositMonOpt == 'DepositIntAdjInPrin') {
                update_girvi_deposit_money('include/php/olgudmap.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
            } else if (girviDepositMonOpt == 'DepositPrinIntLeft') {
                update_girvi_deposit_money('include/php/olgudpil.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("girviUpdateDepMoneyButDiv").style.visibility = "visible";
            document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
        }
    }
}
/************End code to add girviSerialNo @Author:PRIYA14APR14*********************/
//************* Get Metal Rate Details *******************
var metalRateId;
function setMetalRateId(obj) {
    metalRateId = obj.id;
}
function getMetalRate(obj) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUpdateMetalRateDiv").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };

    xmlhttp.open("GET", "include/php/ommrumrd.php?metalRateId=" + metalRateId,
            true);
    xmlhttp.send();
}
//************* Refresh Metal Rates ********************
function refresh_metal_rates(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertRefreshMetalRates;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.send(parameters);

}

function alertRefreshMetalRates() {

    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("metalRatesDiv").innerHTML = xmlhttp2.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function refreshMetalRate() {
    var poststr = "custId";

    refresh_metal_rates('include/php/ommrdmrd.php', poststr);

}
//*************** Set Default Country Code **********************
/*********Start Code To Add Validation Func For Default country @Author:PRIYA16AUG13*****/
function validateDefCountry(obj) {
    if (validateSelectField(document.getElementById("country").value, "Please select Country Name!") == false) {
        document.getElementById("country").focus();
        return false;
    }
    return true;
}
/*********End Code To Add Validation Func  For Default country @Author:PRIYA16AUG13*****/
function set_default_country(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertSetDefaultCountry;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.send(parameters);

}

function alertSetDefaultCountry() {

    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp2.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";
    }
}
/*********Start Code To Add Validation Func @Author:PRIYA16AUG13*****/
function setDefaultCountry(obj) {
    if (validateDefCountry(obj)) {
        var poststr = "countryName=" + encodeURIComponent(document.getElementById("country").value)

        set_default_country('include/php/omvcstdc.php', poststr);
    }

}
/*********End Code To Add Validation Func @Author:PRIYA16AUG13*****/
//*************** Set Default State Code **********************
/*********Start Code To Add Validation Func For Default State @Author:PRIYA16AUG13*****/
function validateDefState(obj) {
    if (validateSelectField(document.getElementById("state").value, "Please select State Name!") == false) {
        document.getElementById("state").focus();
        return false;
    }
    return true;
}
/*********End Code To Add Validation Func  For Default State @Author:PRIYA16AUG13*****/
function set_default_state(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertSetDefaultState;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.send(parameters);

}

function alertSetDefaultState() {

    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("ajax_loading_div").style.visibility = "hidden";
        document.getElementById("settingTablesDiv").innerHTML = xmlhttp2.responseText;
    } else {
        document.getElementById("ajax_loading_div").style.visibility = "visible";
    }
}
/*********Start Code To Add Validation Func @Author:PRIYA16AUG13*****/
function setDefaultState(obj) {
    if (validateDefState(obj)) {
        var poststr = "stateName=" + encodeURIComponent(document.getElementById("state").value)

        set_default_state('include/php/omvsstds.php', poststr);
    }
}
/*********End Code To Add Validation Func @Author:PRIYA16AUG13*****/
//************* Get Multiple Items Add Div *******************
function addGirviItemDiv(itemAddOption) {

    var itemAddOpt = encodeURIComponent(itemAddOption.value);

    loadXMLDoc();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "hidden";
            document.getElementById("addGirviItemDiv").innerHTML = xmlhttp.responseText;
            refreshItemTypeOption();
        } else {

            document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "visible";
        }
    };

    if (itemAddOpt == 'MultipleItems') {
        xmlhttp.open("GET", "include/php/olgamidv.php", true);//Change in filename @AUTHOR: SANDY22NOV13
    } else {
        xmlhttp.open("GET", "include/php/olgaooid.php", true);//Change in filename @AUTHOR: SANDY22NOV13
    }

    xmlhttp.send();
}
// ************************ Refresh Item Type List **********************************
function refresh_Item_Type_Option(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertRefreshItemTypeOption;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.send(parameters);

}
function alertRefreshItemTypeOption() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "hidden";
        document.getElementById("itemTypeDiv").innerHTML = xmlhttp2.responseText;
    } else {
        document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "visible";
    }
}
function refreshItemTypeOption() {
    var poststr = "";
    refresh_Item_Type_Option('include/php/omisitdv.php', poststr);
}
//************* Get Packet or Item Add Div *******************
function changeItemOrPacketAddDiv(itemOrPacketAddOption) {

    var itemOrPacketAddOpt = encodeURIComponent(itemOrPacketAddOption.value);

    loadXMLDoc();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "hidden";
            document.getElementById("itemOrPacketDiv").innerHTML = xmlhttp.responseText;
            //to add condition to set focus @AUTHOR: SANDY31JAN14
            if (itemOrPacketAddOpt == 'UnSec.Loan') {
                document.getElementById('girviPaySelAccountId').focus();
            }
        } else {
            document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "visible";
        }
    };

    if (itemOrPacketAddOpt == 'Sec.Loan') {
        xmlhttp.open("GET", "include/php/olganidv.php", true);//Change in filename @AUTHOR: SANDY22NOV13
    } else {
        xmlhttp.open("GET", "include/php/ombbblnk.php?message=" + itemOrPacketAddOpt, true);
    }

    xmlhttp.send();
}
//************* Start Show Add Udhaar Item Div *****************
function show_Udhaar_Add_Item_Opt(url) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertShowAddUdhaarItemDiv;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send();

}
/***************Start code to add focus @Author:PRIYA19MAR14**********/
function alertShowAddUdhaarItemDiv() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "hidden";
        document.getElementById("addUdhaarItemDiv").innerHTML = xmlhttp.responseText;

        document.getElementById('udhaarItemType1').focus();
    } else {
        document.getElementById("ajaxLoadAddNewUdhaar").style.visibility = "visible";
    }
}
/***************End code to add focus @Author:PRIYA19MAR14**********/
/***************Start code to add itemdiv @Author:PRIYA19MAR14**********/
function showAddUdhaarItemDiv(selectUdhaarType, obj) {

    udhaarOption = selectUdhaarType.value;

    if (udhaarOption == 'OnPurchase') {
        getUdhaarItemDiv = 1;
        udahaarItemCount = 1;
        document.getElementById("hrVisible").style.visibility = "visible";  // HIDE PAY TO CASH OPTION@RATNAKAR15MAR2018
        document.getElementById("directudhaarSubmit").style.visibility = "hidden";
        show_Udhaar_Add_Item_Opt('include/php/omuuiadv.php');//filename changed @Author:PRIYA18MAR14
    } else {
        document.getElementById("directudhaarSubmit").style.visibility = "visible"; // DISPLAY PAY TO CASH OPTION@RATNAKAR15MAR2018
        document.getElementById("hrVisible").style.visibility = "hidden";
        show_Udhaar_Add_Item_Opt('include/php/ombbblnk.php');
    }
    return false;
}
/***************End code to add itemdiv @Author:PRIYA19MAR14**********/
//************* End Show Add Udhaar Item Div *****************
//************* Get Multiple Items Add Div *******************
function addUdhaarItemDiv(itemAddOption) {

    var itemAddOpt = encodeURIComponent(itemAddOption.value);

    loadXMLDoc();

    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addUdhaarItemSubDiv").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    if (itemAddOpt == 'MultipleItems') {
        xmlhttp.open("GET", "include/php/omuamlit.php", true);
    } else {
        xmlhttp.open("GET", "include/php/omuaoooi.php", true);
    }

    xmlhttp.send();
}
/********************** Udhaar Deposit Money *********************************************/
function validateUdhaarDepositMoneyInputs(obj, udhaarId) {

    if (validateEmptyField(document.getElementById("udhaarDepositAmount" + udhaarId).value, "Please enter Deposit Amount!") == false ||
            validateNumWithDot(document.getElementById("udhaarDepositAmount" + udhaarId).value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("udhaarDepositAmount" + udhaarId).focus();
        return false;
    } else if (document.getElementById("udhaarDepositAmount" + udhaarId).value == 0) {
        alert('Please enter Correct Deposit Amount!');
        document.getElementById("udhaarDepositAmount" + udhaarId).focus();
        return false;
    }
    /*********Start Code To Change Date Id @AUTHOR:PRIYA22JUNE13**********/
    else if (validateSelectField(document.getElementById("DOBDay").value, "Please select Deposit Amount Date!") == false) {
        document.getElementById("DOBDay").focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBMonth").value, "Please select Deposit Amount Date!") == false) {
        document.getElementById("DOBMonth").focus();
        return false;
    } else if (validateSelectField(document.getElementById("DOBYear").value, "Please select Deposit Amount Date!") == false) {
        document.getElementById("DOBYear").focus();
        return false;
    }
    /*********End Code To Change Date Id @AUTHOR:PRIYA22JUNE13**********/
    return true;
}
function udhaar_deposit_money(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUdhaarDepositMoney;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUdhaarDepositMoney() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        //document.getElementById("ajaxLoadUdhaarDepositMonSubmit" + udhaarId).style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
//document.getElementById("ajaxLoadUdhaarDepositMonSubmit" + udhaarId).style.visibility = "visible";


    }

}
/**************Start code to add var @Author:PRIYA19MAR14*********/
/*********Start code to add var @Author:PRIYA14APR14************************/
/*********Start code to add var @Author:SHE20OCT15************************/
function udhaarDepositMoney(obj, udhaarId, firmId, count) {

//    document.getElementById("ajaxLoadUdhaarDepositMonSubmit" + count).style.visibility = "visible";
//    document.getElementById("udhaarDepMoneySubButDiv" + count).style.visibility = "hidden";


    var depositAmt = parseInt(document.getElementById("depositAmt" + count).value);
    var udhaarLeftAmt = parseInt(document.getElementById("udhaarAmt" + count).textContent);
    var discAmt = parseInt(document.getElementById("depositDisc" + count).value);

    //alert("Deposit amount(" + depositAmt + ") & udhaar amount(" + udhaarLeftAmt + ")!");

    if (depositAmt > udhaarLeftAmt) {

        alert("Deposit amount " + depositAmt + "  should not more than udhaar amount " + udhaarLeftAmt + "!");

//        document.getElementById("ajaxLoadUdhaarDepositMonSubmit" + count).style.visibility = "hidden";
//        document.getElementById("udhaarDepMoneySubButDiv" + count).style.visibility = "visible";
    } else {
//        if (validateUdhaarDepositMoneyInputs(obj, udhaarId)) {
//        alert(document.getElementById("DOBDay" + count).value);
//        alert(document.getElementById("DOBMonth" + count).value);
//        alert(document.getElementById("DOBYear" + count).value);

        var poststr = "custId=" + obj
                + "&firmId=" + firmId
//                    + "&udhaarSerialNum=" + udhaarSerialNum
                + "&udhaarId=" + udhaarId
                + "&udhaarDepositAmount=" + depositAmt
                + "&udhaarDiscountAmount=" + discAmt
                + "&DOBDay=" + encodeURIComponent(document.getElementById("DOBDay" + count).value) //Date Id Changed @AUTHOR:PRIYA22JUNE13
                + "&DOBMonth=" + encodeURIComponent(document.getElementById("DOBMonth" + count).value)  //Date Id Changed @AUTHOR:PRIYA22JUNE13
                + "&DOBYear=" + encodeURIComponent(document.getElementById("DOBYear" + count).value)
                + "&udhaarOtherInfo=" + encodeURIComponent(document.getElementById("udhaarOtherInfo").value);
//                + "&udhaarDepPanel=" + encodeURIComponent(document.getElementById("udhaarDepPanel").value)
//                + "&udhaarDepId=" + encodeURIComponent(document.getElementById("udhaarDepId").value)  //Date Id Changed @AUTHOR:PRIYA22JUNE13
//                + "&udhaarOtherInfo=" + encodeURIComponent(document.getElementById("udhaarOtherInfo").value);
//        var poststr = "firmId=" + firmId + " & udhaarId = " + udhaarId + " & udhaarDepositAmount = " + depositAmt + " & udhaarDiscountAmount = " + discAmt;

        udhaar_deposit_money('include/php/omuudpmn.php', poststr);
//        } else {
//            document.getElementById("ajaxLoadUdhaarDepositMonSubmit" + udhaarId).style.visibility = "hidden";
//            document.getElementById("udhaarDepMoneySubButDiv" + udhaarId).style.visibility = "visible";
//        }
    }
}
/*********End code to add var @Author:SHE20OCT15************************/
/*********End code to add var @Author:PRIYA14APR14************************/
/**************End code to add var @Author:PRIYA19MAR14*********/
/********************** Girvi Calc *****************************/
function validateGirviCalcInputs(obj) {

    if (obj.moneyDemanded.value == 'Money Demanded  ' || obj.moneyDemanded.value == 0) {
        alert('Please enter Money Demanded!');
        obj.moneyDemanded.focus();
        return false;
    } else if (validateEmptyField(obj.moneyDemanded.value, "Please enter Deposit Amount!") == false ||
            validateNumWithDot(obj.moneyDemanded.value, "Accept only numeric characters without space character!") == false) {
        obj.moneyDemanded.focus();
        return false;
    } else if (obj.goldItemWeight.value == 0) {
        alert('Please enter Gold Net Weight!');
        obj.goldItemWeight.focus();
        return false;
    } else if (obj.goldItemWeight.value != 'Gold Net Weight    ') {
        if (validateEmptyField(obj.goldItemWeight.value, "Please enter Gold Net Weight!") == false ||
                validateNumWithDot(obj.goldItemWeight.value, "Accept only numeric characters without space character!") == false) {
            obj.goldItemWeight.focus();
            return false;
        }
        if (obj.goldItemTunch.value == 'NotSelected') {
            alert('Please Select Gold Tunch!');
            obj.goldItemTunch.focus();
            return false;
        }
    }
    if (obj.silverItemWeight.value == 0) {
        alert('Please enter Silver Net Weight!');
        obj.silverItemWeight.focus();
        return false;
    } else if (obj.silverItemWeight.value != 'Silver Net Weight   ') {
        if (validateEmptyField(obj.silverItemWeight.value, "Please enter Silver Net Weight!") == false ||
                validateNumWithDot(obj.silverItemWeight.value, "Accept only numeric characters without space character!") == false) {
            obj.silverItemWeight.focus();
            return false;
        }
        if (obj.silverItemTunch.value == 'NotSelected') {
            alert('Please Select Silver Tunch!');
            obj.goldItemTunch.focus();
            return false;
        }
    }
    if (obj.goldItemWeight.value == 'Gold Net Weight    ' && obj.silverItemWeight.value == 'Silver Net Weight   ') {
        alert('Please enter Gold or Silver Net Weight!');
        obj.goldItemWeight.focus();
        return false;
    } else if (obj.goldItemTunch.value == 'NotSelected' && obj.silverItemTunch.value == 'NotSelected') {
        alert('Please Select Gold or Silver Tunch!');
        obj.goldItemTunch.focus();
        return false;
    } else if (validateEmptyField(obj.calcMonths.value, "Please enter number of Months!") == false ||
            validateNum(obj.calcMonths.value, "Accept only numeric values without space character!") == false) {
        obj.calcMonths.focus();
        return false;
    }
    return true;
}
function girvi_calc(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertGirviCalc;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
function alertGirviCalc() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadGetCalcResDiv").style.visibility = "hidden";
        document.getElementById("calculatorResDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadGetCalcResDiv").style.visibility = "visible";


    }

}
/********Start code to change id selROI to selROIValue @Author:PRIYA12MAR15****************/
function girviCalc(obj, documentRootPath) {
    document.getElementById("ajaxLoadGetCalcResDiv").style.visibility = "visible";

    //    var addROI;
    //
    //    for (i = 0; i < obj.selROI.length; i++) {
    //        if (obj.selROI[i].checked == true)
    //            addROI = obj.selROI[i].value;
    //    }

    if (validateGirviCalcInputs(obj)) {
        var poststr = "moneyDemanded=" + encodeURIComponent(obj.moneyDemanded.value)
                + "&goldItemWeight=" + encodeURIComponent(obj.goldItemWeight.value)
                + "&goldWeightType=" + encodeURIComponent(obj.goldWeightType.value)
                + "&silverItemWeight=" + encodeURIComponent(obj.silverItemWeight.value)
                + "&silverWeightType=" + encodeURIComponent(obj.silverWeightType.value)
                + "&goldItemTunch=" + encodeURIComponent(obj.goldItemTunch.value)
                + "&silverItemTunch=" + encodeURIComponent(obj.silverItemTunch.value)
                + "&selROI=" + encodeURIComponent(obj.selROIValue.value)
                + "&calcMonths=" + encodeURIComponent(obj.calcMonths.value);

        girvi_calc("http://" + documentRootPath + "/include/php/olgccrsd.php", poststr);//change in filename @AUTHOR: SANDY22NOV13
    } else {
        document.getElementById("ajaxLoadGetCalcResDiv").style.visibility = "hidden";
    }
}
/********End m code to change id selROI to selROIValue @Author:PRIYA12MAR15****************/
// *********** Change Girvi Release Date ******************
function change_Girvi_Release_Date(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertChangeGirviReleaseDate;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.send(parameters);

}

/**********START TO CHANGE FUNCTIONS @AUTHOR: SANDY24DEC13***************/
function alertChangeGirviReleaseDate() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "hidden";
        if (setReleaseDatePanel == 'MlLoanUpdate') {
            document.getElementById("transGirviTotalResultDiv").innerHTML = xmlhttp2.responseText;
        } else {
            if (girviCurrentStatus == 'Transferred') {
                document.getElementById("transGirviTotalResultDiv").innerHTML = xmlhttp2.responseText;
            } else if (girviCurrentStatus == 'girviUpdateGirviResultDiv') {
                document.getElementById("girviDepositGirviResultDiv").innerHTML = xmlhttp2.responseText;
                document.getElementById("ajaxCloseDepositMoneyDiv").style.visibility = "visible";
            } else {
                document.getElementById("girviTotAmtDiv").innerHTML = xmlhttp2.responseText;
            }
        }
    } else {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    }
}
/***Start to change function @AUTHOR: SANDY14JAN14********************/
var setReleaseDatePanel;//new variable @AUTHOR: SANDY24DEC13
/******Start  code to add AuctionalPanel paksha @Author:ANUJA29MAY15**************/
function changeGirviReleaseDate(documentRootPath, relDateDDValue, relDateMMValue, relDateYYValue, girviROI, monthlyInterestType, simpleOrCompIntOption, girviCompoundedOption,
        princAmount, interestType, girviDate, girviId, custId, girviType, panel, girviStatus, auctionPanel) {
    setReleaseDatePanel = panel;
    girviCurrentStatus = girviStatus;

    //    for (i = 0; i < girviROIForm.selROI.length; i++) {
    //        if (girviROIForm.selROI[i].checked == true)
    //            ROIValue = girviROIForm.selROI[i].value;
    //    }

    var poststr = "relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue
            + "&ROIValue=" + girviROI.value + "&gMonthIntOption=" + monthlyInterestType.value
            + "&simpleOrCompIntOption=" + simpleOrCompIntOption.value + "&girviCompoundedOption=" + girviCompoundedOption.value
            + "&princAmount=" + princAmount + "&interestType=" + interestType.value
            + "&girviDate=" + girviDate + "&girviId=" + girviId + "&custId=" + custId
            + "&girviType=" + girviType + "&girviStatus=" + girviCurrentStatus + "&grvRelPayDetails=TRUE" + "&omPanelDiv=" + panel + "&auctionPanel=" + auctionPanel;//to pass panel @AUTHOR: SANDY27DEC13

    if (girviStatus == 'Transferred') { //CHANGE IN VARIABLE @AUTHOR: SANDY14JAN14
        change_Girvi_Release_Date('http://' + documentRootPath + '/include/php/olgggtfr.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    } else {
        change_Girvi_Release_Date('http://' + documentRootPath + '/include/php/olggttam.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    }

    return false;
}
/******End  code to add AuctionalPanel paksha @Author:ANUJA29MAY15**************/
/***End to change function @AUTHOR: SANDY14JAN14********************/
/**********End TO CHANGE FUNCTIONS @AUTHOR: SANDY24DEC13***************/
/*********Start Code To Add Validation For Date on deposit Money @Author:PRIYA29AUG13*****************/
function changeGirviUpdateDate(documentRootPath, relDateDDValue, relDateMMValue, relDateYYValue, girviDepositPrinAmount, girviDepositIntAmount, girviROI, princAmount, interestType,
        girviDate, girviDateStr, girviId, custId, girviType, girviUpdSts, simpleOrCompIntOption, girviCompoundedOption) {

    girviCurrentStatus = 'girviUpdateGirviResultDiv';

    //@Author:PRIYA29AUG13
    var girviDateDay = document.getElementById("DMDOBDay").value;
    var girviDateMMM = document.getElementById("DMDOBMonth").value;
    var girviDateYY = document.getElementById("DMDOBYear").value;
    var girviDepDateStr = document.getElementById("DMDOBMonth").value + ' ' + document.getElementById("DMDOBDay").value + ', ' + document.getElementById("DMDOBYear").value;
    var girviDepDate = new Date(girviDepDateStr); // Girvi Deposit Date
    var girviMainDateStr = new Date(girviDateStr);  //Girvi Main Date

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
        //@Author:PRIYA29AUG13
        //        for (i = 0; i < girviROIForm.selROI.length; i++) {
        //            if (girviROIForm.selROI[i].checked == true)
        //                ROIValue = girviROIForm.selROI[i].value;
        //        }

        var poststr = "relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue
                + "&girviDepositPrinAmount=" + girviDepositPrinAmount + "&girviDepositIntAmount=" + girviDepositIntAmount
                + "&ROIValue=" + girviROI.value + "&princAmount=" + princAmount + "&interestType=" + interestType.value
                + "&girviDate=" + girviDate + "&girviId=" + girviId + "&custId=" + custId
                + "&girviType=" + girviType + "&girviStatus=" + girviUpdSts + "&grvRelPayDetails=False" + "&simpleOrCompIntOption=" + simpleOrCompIntOption + "&girviCompoundedOption=" + girviCompoundedOption;
        //alert(poststr);

        if (girviCurrentStatus == 'girviUpdateGirviResultDiv') {
            change_Girvi_Release_Date('http://' + documentRootPath + '/include/php/olgugdtdrs.php', poststr);
        } else {
            change_Girvi_Release_Date('http://' + documentRootPath + '/include/php/olggttam.php', poststr);
        }
    }
    return false;
}
/*********End Code To Add Validation For Date on deposit Money @Author:PRIYA29AUG13*****************/
//******* Add Bar Code Slip To Print Panel *********************
function add_bar_code_slip_to_print_panel(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertAddBarCodeSlipToPrintPanel;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
function alertAddBarCodeSlipToPrintPanel() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("addBarCodeSlipToPrintPanelDiv").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("addBarCodeSlipToPrintPanelDiv").innerHTML = "<img src='images/loading16.gif' />";

    }

}
/****************Start code to add var @Author:PRIYA14APR14**************/
function addBarCodeSlipToPrintPanel(custId, girviId, gSerialNo, gDOB, gFirmId, gPrinAmt) {

    var poststr = "custId=" + encodeURIComponent(custId)
            + "&girviId=" + encodeURIComponent(girviId)
            + "&gSerialNo=" + encodeURIComponent(gSerialNo)
            + "&gDOB=" + encodeURIComponent(gDOB)
            + "&gFirmId=" + encodeURIComponent(gFirmId)
            + "&gPrinAmt=" + encodeURIComponent(gPrinAmt);

    add_bar_code_slip_to_print_panel('include/php/olgabcpp.php', poststr);//change in filename @AUTHOR: SANDY20NOV13

}
/****************End code to add var @Author:PRIYA14APR14**************/
// ************************ Get Packet Number *************************
/****Start code to change Serial No According To firm @AUTHOR:PRIYA15MAR13****/
/***********Start Code To Add Supp New Order div @AUTHOR:PRIYA30MAY13***********/
var selFirmNo;
var panelNameDiv;
var nextFieldFirmAccId;
function get_firm_account_no(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertGetFirmAccountNo;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
/***********************Start code to change Id @Author:PRIYA26NOV13*************************/
/**********************Start code to hide trans account div @Author:PRIYA22MAY14************/
/*********************Start to add Condition for AddRtStockMain @Author:SHRI19MAR16****************/
/**************Start to add condition for wholesale account no @Author:SHRI09APR16****************/
function alertGetFirmAccountNo() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        if (panelNameDiv == 'AddStockGoldPayment') {
            document.getElementById("stockPayAccId1").innerHTML = xmlhttp.responseText;
        } else if (panelNameDiv == 'AddStockSilverPayment') {
            document.getElementById("stockPayAccId2").innerHTML = xmlhttp.responseText;
        } else if (panelNameDiv == 'sellStockGoldPayment') {
            document.getElementById("slPrPaySelAccountId1").innerHTML = xmlhttp.responseText;
        } else if (panelNameDiv == 'sellStockSilverPayment') {
            document.getElementById("slPrPaySelAccountId2").innerHTML = xmlhttp.responseText;
        } else if (panelNameDiv == 'nwOrStockGoldPayment') {
            document.getElementById("nwOrItemPaySelAccountId1").innerHTML = xmlhttp.responseText;
        } else if (panelNameDiv == 'nwOrStockSilverPayment') {
            document.getElementById("nwOrItemPaySelAccountId2").innerHTML = xmlhttp.responseText;
        } else if (panelNameDiv == 'SuppNwOrGoldPayment') {
            document.getElementById("suppNwOrPayAccId1").innerHTML = xmlhttp.responseText;
        } else if (panelNameDiv == 'SuppNwOrSilverPayment') {
            document.getElementById("suppNwOrPayAccId2").innerHTML = xmlhttp.responseText;
        } else if (panelNameDiv == 'AddRtStockMain' || panelNameDiv == 'AddWhStockMain') {
            var splitResponse = xmlhttp.responseText.split("[BRK]");
            document.getElementById("selCrAccountDiv").innerHTML = splitResponse[0];
            document.getElementById("selAccountDiv").innerHTML = splitResponse[1];
        } else if (panelNameDiv == 'sellStock') {
            document.getElementById("selAccountDiv").innerHTML = xmlhttp.responseText;
            getInvoiceNum(encodeURIComponent(document.getElementById('custId').value), panelNameDiv, transType, selFirmNo, encodeURIComponent(document.getElementById('slPrItemMetal').value)); //commented @Author:SHRI19JUN17 "&custId=" + encodeURIComponent(document.getElementById('custId').value)
        } else {
            document.getElementById("selAccountDiv").innerHTML = xmlhttp.responseText;
        }
        if (panelNameDiv == 'AddNewGirvi') {
            getROIValueByFirm(selFirmNo, 'AddNewGirvi');
        }
        document.getElementById(nextFieldFirmAccId).focus();

    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
//
function getInvoiceNum(userId, panelName, transType, firmId, metalType) {
//    alert('userId'+userId);

    var poststr = "panelName=" + encodeURIComponent(panelName) +
            "&firmId=" + encodeURIComponent(firmId) +
            "&transType=" + encodeURIComponent(document.getElementById('sttr_transaction_type').value) +
            "&custId=" + encodeURIComponent(userId) +
            "&metalType=" + encodeURIComponent(metalType);
    change_get_invoice_num('include/php/omgetinvno.php', poststr);

    return false;
}
function change_get_invoice_num(url, parameters) {
    loadXMLDoc4();
    xmlhttp4.onreadystatechange = alertGetInvoiceNum;

    xmlhttp4.open('POST', url, true);
    xmlhttp4.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp4.setRequestHeader("Content-length", parameters.length);
    xmlhttp4.setRequestHeader("Connection", "close");
    xmlhttp4.send(parameters);
}
function alertGetInvoiceNum() {
    if (xmlhttp4.readyState == 4 && xmlhttp4.status == 200) { //alert(xmlhttp2.responseText);
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("slPrInvoiceNoDiv").innerHTML = xmlhttp4.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/**************End to add condition for wholesale account no @Author:SHRI09APR16****************/
/*********************End to add Condition for AddRtStockMain @Author:SHRI19MAR16****************/
/**********************End code to hide trans account div @Author:PRIYA22MAY14************/
/***********************End code to change Id @Author:PRIYA26NOV13*************************/
function getFirmAccountNo(selectedFirmNo, panelName, nextFieldId, metalType) {
//alert(metalType);
    nextFieldFirmAccId = nextFieldId;
    panelNameDiv = panelName;
    selFirmNo = selectedFirmNo;

    var poststr = "firmNo=" + encodeURIComponent(selectedFirmNo) +
            "&panelName=" + encodeURIComponent(panelName) +
            "&metalType=" + encodeURIComponent(metalType);

    if (panelName == 'AddRtStockMain' || panelName == 'AddWhStockMain') {
        var documentRootPath = document.getElementById('documentRootPath').value;
        get_firm_account_no("http://" + documentRootPath + "/include/php/ommpfacc.php", poststr);
        //get_add_stock_div(selectedFirmNo);
    } else {
        get_firm_account_no('include/php/ommpfacc.php', poststr);
    }

}
/***********End Code To Add Supp New Order div @AUTHOR:PRIYA30MAY13***********/
function get_firm_serial_no(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertGetFirmSerialNo;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.send(parameters);

}
function alertGetFirmSerialNo() {

    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "hidden";
        document.getElementById("girviSerialNoDiv").innerHTML = xmlhttp2.responseText;
        getFirmAccountNo(selFirmNo, 'AddNewGirvi');
    } else {
        document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "visible";
    }
}
function getFirmSerialNo(selectedFirmNo) {

    var poststr = "firmNo=" + encodeURIComponent(selectedFirmNo);

    get_firm_serial_no('include/php/ommpfsno.php', poststr);

}
function get_firm_packet_no(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertGetFirmPacketNo;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
function alertGetFirmPacketNo() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "hidden";
        document.getElementById("packetNumber").value = xmlhttp.responseText;
        getFirmSerialNo(selFirmNo);

    } else {
        document.getElementById("ajaxLoadGetItemListDiv").style.visibility = "visible";
    }
}
function getFirmPacketNo(selectedFirmNo) {
    selFirmNo = selectedFirmNo.value;
    var poststr = "firmNo=" + encodeURIComponent(selectedFirmNo.value);

    get_firm_packet_no('include/php/ommpgtpk.php', poststr);

}
//
function getROIValueByFirm(selectedFirmNo, panel) {
    loadXMLDoc2();
    xmlhttp2.onreadystatechange = function () {
        if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {//alert(xmlhttp2.responseText);
            document.getElementById("ROIOption").innerHTML = xmlhttp2.responseText;
        }
    };
    var poststr = "firmId=" + encodeURIComponent(selectedFirmNo) +
            "&panelName=" + encodeURIComponent(panel);
    xmlhttp2.open("POST", "include/php/olggroim.php?" + poststr, true);
    xmlhttp2.send();
}
/****End code to change Serial No According To firm @AUTHOR:PRIYA15MAR13****/
/****Start to change function @AUTHOR: SANDY29JAN14****************************/
//**************************** Get Girvi List In Girvi Panel By Firm Id @AUTHOR:PRIYA27JAN13*******************************************************************
/**************************** Get Girvi List In Girvi Panel By File name  @AUTHOR:PRIYA29JAN13******************************/
/*****************************Start Code To Add Panel Name For Trans Girvi List  @AUTHOR:PRIYA22MAY13**********************/
/*****************************Start Code To Add expMonths For Expired Girvi Panel @Author:PRIYA14JUL13********************/
/*****************************Start Code To Add ColumnName and ColumnValue @Author:PRIYA19JUL13********************/
/*****************************Start Code To Add gTrans Status @Author:PRIYA20JUL13********************/
/**************Start code to add panel for trans list @Author:PRIYA17SEP14********************/
/*************Start code to add panel @Author:PRIYA03NOV14**************************/
/*************Start code to add panel for transfer unrelease @Author:PRIYA15DEC14****************/
/*************Start code to add gLoanType for secured and unsecured loan @Author:ANUJA23SEPT15****************/
/************Start code to change function to add condition for unsettle loan by firm @OMMODTAG SHRI_25AUG15********************************/
/************Start code to change function to add condition for emiLoansList @OMMODTAG SHRI_25AUG15**********************/
/************Satrt code to change function to add condition for StaffemiLoansList @OMMODTAG ANUJA04APR16**********************/
/************Start code to add condition to check panel for LoansList @Author: GAUR21JUNE16**********************/
/************Start code to add condition to check panel for LoansList and transList @Author: GAUR22JUNE16**********************/
/************Start code to remove condition to check panel for LoansList and transList @Author: GAUR07JULY16**********************/
function getGirviListInGirviPanelByFrmId(selFirmId, sortKeyword, searchColumnName, searchColumnValue, panelName, expMonths, staffId) {
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

        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'activeGirviList') {
        xmlhttp.open("POST", "include/php/orgpglpd.php?selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gTransList=" + expMonths + "&gLoanType=" + expMonths, true);
    } else if (panelName == 'expGirviList') {
        xmlhttp.open("POST", "include/php/orgpexgl.php?selFirmId=" + selFirmId.value + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&expMonths=" + expMonths, true);
    } else if (panelName == 'releaseGirviList') {
        xmlhttp.open("POST", "include/php/orgpregl.php?selFirmId=" + selFirmId.value + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue, true);
    } else if (panelName == 'lossGirviList') {
        xmlhttp.open("POST", "include/php/orgplglp.php?selFirmId=" + selFirmId.value + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue, true);
    } else if (panelName == 'loansList') {
        xmlhttp.open("POST", "include/php/orgpllpn.php?selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gLoanType=" + expMonths, true);
    } else if (panelName == 'emiLoansList') {
        xmlhttp.open("POST", "include/php/omfnllpn.php?selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gLoanSts=" + expMonths, true);
    } else if (panelName == 'emiLoansStaffList') {
        xmlhttp.open("POST", "include/php/omfnllpn.php?selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gLoanSts=" + expMonths + "&staffId=" + staffId, true);
    } else if (panelName == 'transList') {
        xmlhttp.open("POST", "include/php/omttlisd.php?selFirmId=" + selFirmId.value + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue, true);
    } else if (panelName == 'transGirviList') {
        if (validateNumWithOutAlert(selFirmId)) {
            xmlhttp.open("POST", "include/php/orgptrgl.php?selTFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gTransStatus=" + expMonths, true);
        } else {
            xmlhttp.open("POST", "include/php/orgptrgl.php?selMlName=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gTransStatus=" + expMonths, true);
        }
    } else if (panelName == 'TpExpGirviList') {
        xmlhttp.open("POST", "include/php/orgptpexgl.php?selFirmId=" + selFirmId.value + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&expMonths=" + expMonths, true);
    } else if (panelName == 'TransUnReleaseList') {
        if (validateNumWithOutAlert(selFirmId)) {
            xmlhttp.open("POST", "include/php/orgptgrl.php?selTFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gTransStatus=" + expMonths, true);
        } else {
            xmlhttp.open("POST", "include/php/orgptgrl.php?selMlName=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gTransStatus=" + expMonths, true);
        }
    } else if (panelName == 'tFirm') {
        xmlhttp.open("POST", "include/php/orgptgfrm.php?selTFirmId=" + selFirmId, true);
    } else if (panelName == 'mLender') {
        xmlhttp.open("POST", "include/php/orgptgml.php?selMlName=" + selFirmId, true);
    } else if (panelName == 'paidEmiList') { //added by @OMMODTAG SHRI_11DEC15
        xmlhttp.open("POST", "include/php/omfncml.php?selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gLoanSts=" + expMonths, true);
    } else if (panelName == 'unPaidEmiList') { //added by @OMMODTAG SHRI_11DEC15
        xmlhttp.open("POST", "include/php/omfnncml.php?selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gLoanSts=" + expMonths, true);
    } else if (panelName == 'paidEmiStaffList') { //added by @OMMODTAG SHRI_11DEC15
        xmlhttp.open("POST", "include/php/omfncml.php?selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gLoanSts=" + expMonths + "&staffId=" + staffId, true);
    } else if (panelName == 'unPaidEmiStaffList') { //added by @OMMODTAG SHRI_11DEC15
        xmlhttp.open("POST", "include/php/omfnncml.php?selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumnName + "&searchValue=" + searchColumnValue + "&gLoanSts=" + expMonths + "&staffId=" + staffId, true);
    }
    xmlhttp.send();
}
/************END code to remove condition to check panel for LoansList and transList @Author: GAUR07JULY16**********************/
/************Satrt code to change function and transList @Author: GAUR22JUNE16**********************/
/************Satrt code to change function @Author: GAUR21JUNE16**********************/
/************End code to change function to add condition for StaffemiLoansList @OMMODTAG ANUJA04APR16**********************/
/************End code to change function to add condition for emiLoansList @OMMODTAG SHRI_25AUG15**********************/
/************End code to change function to add condition for unsettle loan by firm @OMMODTAG SHRI_25AUG15**********************/
/*************End code to add gLoanType for secured and unsecured loan @Author:ANUJA23SEPT15****************/
/*************End code to add panel for transfer unrelease @Author:PRIYA15DEC14****************/
/*************End code to add panel @Author:PRIYA03NOV14**************************/
/**************End code to add panel for trans list @Author:PRIYA17SEP14********************/
/****End to change function @AUTHOR: SANDY29JAN14****************************/
/*****************************End Code To Add gTrans Status @Author:PRIYA20JUL13********************/
/*****************************End Code To Add ColumnName and ColumnValue @Author:PRIYA19JUL13********************/
/*****************************End Code To Add expMonths For Expired Girvi Panel @Author:PRIYA14JUL13********************/
/*****************************End Code To Add Panel Name For Trans Girvi List  @AUTHOR:PRIYA22MAY13**********************/
/**************************** Get Girvi List In Girvi Panel By File name  @AUTHOR:PRIYA29JAN13*****************************/
// ************************ Get Packet Number for Transfer Girvi @AUTHOR:PRIYA27JAN13*************************
/************Start code to change function @Author:PRIYA29OCT14***************/
function get_firm_packetNo_for_transGirvi(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertGetFirmPacketNoForTransGirvi;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
/********Start code to comment xmlhttp @Author:PRIYA22MAY14**************/
function alertGetFirmPacketNoForTransGirvi() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "hidden";
        //document.getElementById("mlLoanNo").value = xmlhttp.responseText;
        // getFirmAccountNo(selFirmNo, 'TransferGirviPanel'); //call function to set pay account as per selected firm @AUTHOR: SANDY16DEC13
        getTransFirmSerialNo(docRoot, selFirmNo, 'TransferGirviPanel');
    } else {
        document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "visible";
    }
}
/********End code to comment xmlhttp @Author:PRIYA22MAY14**************/
function getFirmPacketNoForTransGirvi(documentRootPath, selectedFirmNo) {
    selFirmNo = selectedFirmNo.value;//TO SET  pay account as per selected firm @AUTHOR: SANDY16DEC13
    docRoot = documentRootPath;
    var poststr = "firmNo=" + encodeURIComponent(selectedFirmNo.value);

    get_firm_packetNo_for_transGirvi('http://' + documentRootPath + '/include/php/ommpgtpt.php', poststr);

}
/************End code to change function @Author:PRIYA29OCT14***************/
// **************** Release Transferred Girvi ****************************************
function release_transferred_girvi(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertReleaseTransferredGirvi;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
/*************Start Code To Change Div @Author:PRIYA29JUN13***********/
/***********Start to change function @AUTHOR: SANDY29NOV13**********/
//var globAddPrinId;
function alertReleaseTransferredGirvi() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "hidden";
        if (upDatePanelName == 'AddPrinTransPanel') {
            document.getElementById("addPrinTransDetDiv").innerHTML = xmlhttp.responseText;
            //  document.getElementById("im").innerHTML = "<img src='images/red12.gif' />";
        } else {
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;//change in div @AUTHOR: SANDY29NOV13
        }
    } else {
        document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "visible";
        document.getElementById("releaseTransferredGirviButton").style.visibility = "hidden";

    }

}
/***********End to change function @AUTHOR: SANDY29NOV13**********/
/*************End Code To Change Div @Author:PRIYA29JUN13***********/
/************Start to add code to change function @AUTHOR: SANDY15DEC13*************/
/**********Start code to add accounts @Author:PRIYA23MAY14**************************/
/**********Start code to add panel @Author:PRIYA09DEC14**************************/
function releaseTransferredGirvi(documentRootPath, panel, addPrinId) {
    // globAddPrinId = addPrinId;
    upDatePanelName = panel;
    document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "visible";
    document.getElementById("releaseTransferredGirviButton").style.visibility = "hidden";

    var custId = encodeURIComponent(document.getElementById("custId").value);
    var girviId = encodeURIComponent(document.getElementById("girviId").value);

    var totAmount = document.getElementById('girviPrinPaid');//id changed @Author:PRIYA27SEP14
    var amountPaid = document.getElementById('amountPaid');
    var interestPaid = document.getElementById('interestPaid');
    var discountPaid = document.getElementById('discountPaid');
    var gtransId = document.getElementById('gtransId');//to access transfer id @AUTHOR: SANDY14JAN14
    var relDD = document.girviReleaseDateForm.DOBTransDay;
    var relMM = document.girviReleaseDateForm.DOBTransMonth;
    var relYY = document.girviReleaseDateForm.DOBTransYear;
    var timePeriod = document.getElementById('timePeriodVar').value;//to add variable @AUTHOR: SANDY15DEC13

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

            var poststr = "custId=" + custId + "&girviId=" + girviId
                    + "&totAmount=" + totAmount.value + "&amountPaid=" + amountPaid.value + "&interestPaid=" + interestPaid.value + "&discountPaid=" + discountPaid.value
                    + "&relDD=" + relDD.value + "&relMM=" + relMM.value + "&relYY=" + relYY.value + "&timePeriod=" + timePeriod + "&gtransId=" + gtransId.value
                    + "&girviLoanAccId=" + document.getElementById('girviLoanAccId').value + "&girviIntAccId=" + document.getElementById('girviIntRecAccId').value
                    + "&girviDiscAccId=" + document.getElementById('girviDiscAccId').value + "&girviCashAccId=" + document.getElementById('girviCashRecAccId').value
                    + "&panel=" + panel + "&addPrinId=" + addPrinId;//CHANGE IN parameter @AUTHOR: SANDY14JAN14
            release_transferred_girvi('http://' + documentRootPath + '/include/php/olggrlgt.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
        }
    }
    document.getElementById("releaseTransferredGirviButton").style.visibility = "visible";
    document.getElementById("ajaxLoadCustGirviTransferDiv").style.visibility = "hidden";
}
/**********End code to add panel @Author:PRIYA09DEC14**************************/
/**********End code to add accounts @Author:PRIYA23MAY14**************************/
/************End to add code to change function @AUTHOR: SANDY15DEC13*************/
/*******************End Code To Add totAmount @Author:PRIYA27JUL13****************/
// **************** Release Girvi Item ****************************************
function release_girvi_item(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertReleaseGirviItem;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertReleaseGirviItem() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("ajaxLoadReleaseGirviItemDiv").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("ajaxLoadReleaseGirviItemDiv").style.visibility = "visible";
        //document.getElementById("releaseTransferredGirviButton").style.visibility = "hidden";

    }

}
/**********Start code to add var @Author:PRIYA14APR14*********************/
function releaseGirviItem(custId, girviId, girviItemId, girviFirmId, girviSerialNo, itemType, itemName, itemPieces, grossItemWeight, grossWeightType, itemWeight, weightType) {

    document.getElementById("ajaxLoadReleaseGirviItemDiv").style.visibility = "visible";
    //document.getElementById("releaseTransferredGirviButton").style.visibility = "hidden";


    confirm_box = confirm("Do you really want to release this Girvi Item?");

    if (confirm_box == true)
    {

        var poststr = "custId=" + custId + "&girviId=" + girviId + "&girviItemId=" + girviItemId + "&girviFirmId=" + girviFirmId + "&girviSerialNo=" + girviSerialNo
                + "&itemType=" + itemType + "&itemName=" + itemName + "&itemPieces=" + itemPieces + "&grossItemWeight=" + grossItemWeight
                + "&grossWeightType=" + grossWeightType + "&itemWeight=" + itemWeight + "&weightType=" + weightType;

        release_girvi_item('include/php/olgrgvit.php', poststr);//change in filename @AUTHOR: SANDY22NOV13
    } else {
        //document.getElementById("releaseTransferredGirviButton").style.visibility = "visible";
        document.getElementById("ajaxLoadReleaseGirviItemDiv").style.visibility = "hidden";
    }
}
/**********End code to add var @Author:PRIYA14APR14*********************/
// **************** Update Udhaar Money ****************************************
var globalUdhaarDiv;
function update_udhaar_money(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateUdhaarMoney;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateUdhaarMoney() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("updUdharAmtDiv" + globalUdhaarDiv).style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("updUdharAmtSubButt" + globalUdhaarDiv).innerHTML = "<img src='images/loading16.gif' />";
    }

}
/***********Start Code To Add udhaarJrnlId @Author:PRIYA18AUG13******************/
function updateUdhaarMoney(custId, udhaarId, udhaarDiv, firmId, udhaarJrnlId) {

    globalUdhaarDiv = udhaarDiv;

    document.getElementById("updUdharAmtSubButt" + udhaarDiv).style.visibility = "hidden";

    if (validateEmptyField(document.getElementById("updUdharAmtTextBox" + udhaarDiv).value, "Please enter Amount!") == false ||
            validateNumWithDot(document.getElementById("updUdharAmtTextBox" + udhaarDiv).value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("updUdharAmtTextBox" + udhaarDiv).focus();
        document.getElementById("updUdharAmtSubButt" + udhaarDiv).style.visibility = "visible";
        exit();
    } else {

        confirm_box = confirm("Do you really want to update this udhaar amount?");

        if (confirm_box == true)
        {
            var poststr = "custId=" + custId + "&firmId=" + firmId + "&udhaarId=" + udhaarId + "&updatedAmt=" + document.getElementById("updUdharAmtTextBox" + udhaarDiv).value
                    + "&udhaarJrnlId=" + udhaarJrnlId;

            update_udhaar_money('include/php/omupudmn.php', poststr);
        } else {
            document.getElementById("updUdharAmtTextBox" + udhaarDiv).focus();
            document.getElementById("updUdharAmtSubButt" + udhaarDiv).style.visibility = "visible";
            exit();
        }
    }
}
/***********End Code To Add udhaarJrnlId @Author:PRIYA18AUG13******************/
// **************** Update Deposite Udhaar Money ****************************************
var globalDepUdhaarDiv;
function update_udhaar_dep_money(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateUdhaarDepMoney;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateUdhaarDepMoney() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("updUdharDepAmtDiv" + globalUdhaarDiv + globalDepUdhaarDiv).style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("updUdharDepAmtSubButt" + globalUdhaarDiv + globalDepUdhaarDiv).innerHTML = "<img src='images/loading16.gif' />";
    }

}
/**********Start Code To Add udhaarDepJrnlId @Author:PRIYA18AUG13*****************/
function updateUdhaarDepMoney(custId, udhaarDepId, udhaarDiv, udhaarDepDiv, firmId, udhaarDepJrnlId) {

    globalUdhaarDiv = udhaarDiv;
    globalDepUdhaarDiv = udhaarDepDiv;

    document.getElementById("updUdharDepAmtSubButt" + udhaarDiv + udhaarDepDiv).style.visibility = "hidden";

    if (validateEmptyField(document.getElementById("updUdharDepAmtTextBox" + udhaarDiv + udhaarDepDiv).value, "Please enter Amount!") == false ||
            validateNumWithDot(document.getElementById("updUdharDepAmtTextBox" + udhaarDiv + udhaarDepDiv).value, "Accept only numeric characters without space character!") == false) {
        document.getElementById("updUdharDepAmtTextBox" + udhaarDiv + udhaarDepDiv).focus();
        document.getElementById("updUdharDepAmtSubButt" + udhaarDiv + udhaarDepDiv).style.visibility = "visible";
        exit();
    } else {

        confirm_box = confirm("Do you really want to update this udhaar amount?");

        if (confirm_box == true)
        {
            var poststr = "custId=" + custId + "&firmId=" + firmId + "&udhaarDepId=" + udhaarDepId + "&updatedAmt=" + document.getElementById("updUdharDepAmtTextBox" + udhaarDiv + udhaarDepDiv).value
                    + "&udhaarDepJrnlId=" + udhaarDepJrnlId;
            //alert(poststr);
            update_udhaar_dep_money('include/php/omupuddm.php', poststr);
        } else {
            document.getElementById("updUdharDepAmtTextBox" + udhaarDiv + udhaarDepDiv).focus();
            document.getElementById("updUdharDepAmtSubButt" + udhaarDiv + udhaarDepDiv).style.visibility = "visible";
            exit();
        }
    }
}
/**********End Code To Add udhaarDepJrnlId @Author:PRIYA18AUG13*****************/
// **************** Delete Deposite Udhaar Money ****************************************
function delete_udhar_dep_amt(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertDeleteUdharDepAmt;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertDeleteUdharDepAmt() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("updUdharDepAmtDelButt" + globalUdhaarDiv + globalDepUdhaarDiv).innerHTML = "<img src='images/loading16.gif' />";
    }

}
/*********Start Code To Add uDepJrnlId @Author:PRIYA18AUG13*******************/
/*********Start code to add var @Author:PRIYA14APR14************************/
function deleteUdharDepAmt(custId, udhaarDepId, udhaarDiv, udhaarDepDiv, firmId, uDepJrnlId, uDepAmt, uDepDate, uSerialNum) {

    globalUdhaarDiv = udhaarDiv;
    globalDepUdhaarDiv = udhaarDepDiv;

    document.getElementById("updUdharDepAmtDelButt" + udhaarDiv + udhaarDepDiv).style.visibility = "hidden";

    confirm_box = confirm("Do you really want to delete this udhaar amount?");

    if (confirm_box == true)
    {
        var poststr = "custId=" + custId + "&firmId=" + firmId + "&udhaarDepId=" + udhaarDepId +
                "&uDepJrnlId=" + uDepJrnlId + "&uSerialNum=" + uSerialNum
                + "&uDepAmt=" + uDepAmt + "&uDepDate=" + uDepDate;
        //alert(poststr);
        delete_udhar_dep_amt('include/php/omuddpam.php', poststr);
    } else {
        document.getElementById("updUdharDepAmtDelButt" + udhaarDiv + udhaarDepDiv).style.visibility = "visible";
        exit();
    }
}
/*********End code to add var @Author:PRIYA14APR14************************/
/*********End Code To Add uDepJrnlId @Author:PRIYA18AUG13*******************/
// **************** Update Principal Amount ****************************************
function update_principal_amount(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdatePrincipalAmount;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdatePrincipalAmount() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
}
/***************START CODE TO Add Journal ID @AUTHOR:PRIYA03FEB13******************/
/***************Start code to add param @Author:PRIYA12APR14*************************/
function updatePrincipalAmount(documentRootPath, custId, girviId, prinAmount, girviJrnlId, girviDOB, girviFirmId, girviSerialNum, panelName) {

    document.getElementById("updatePrincipalButton").style.visibility = "hidden";

    var principalAmount = prinAmount.value;

    if (validateEmptyField(principalAmount, "Please enter Principal Amount!") == false ||
            validateNum(principalAmount, "Accept only numeric characters without space character!") == false) {
        document.getElementById("updatePrincipalAmount").focus();
        document.getElementById("updatePrincipalButton").style.visibility = "visible";
        return false;
    } else {

        confirm_box = confirm("Do you really want to update Principal Amount?");

        if (confirm_box == true)
        {

            var poststr = "custId=" + custId + "&girviId=" + girviId
                    + "&principalAmount=" + principalAmount
                    + "&girviJrnlId=" + girviJrnlId
                    + "&girviDOB=" + girviDOB + "&girviFirmId=" + girviFirmId + "&girviSerialNum=" + girviSerialNum + "&panelName=" + panelName;
            update_principal_amount('http://' + documentRootPath + '/include/php/olgupnam.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
        }
    }
    document.getElementById("updatePrincipalButton").style.visibility = "visible";
    return false;
}
/***************End code to add param @Author:PRIYA12APR14*************************/
/***************Start code to add param @Author:PRIYA12APR14*************************/
function updateFinancePanelPrincipalAmount(documentRootPath, custId, girviId, prinAmount, girviJrnlId, girviDOB, girviFirmId, girviSerialNum, panelName) {

    document.getElementById("updatePrincipalButton").style.visibility = "hidden";

    var principalAmount = prinAmount.value;

    if (validateEmptyField(principalAmount, "Please enter Principal Amount!") == false ||
            validateNum(principalAmount, "Accept only numeric characters without space character!") == false) {
        document.getElementById("updatePrincipalAmount").focus();
        document.getElementById("updatePrincipalButton").style.visibility = "visible";
        return false;
    } else {

        confirm_box = confirm("Do you really want to update Principal Amount?");

        if (confirm_box == true)
        {

            var poststr = "custId=" + custId + "&girviId=" + girviId
                    + "&principalAmount=" + principalAmount
                    + "&girviJrnlId=" + girviJrnlId
                    + "&girviDOB=" + girviDOB + "&girviFirmId=" + girviFirmId + "&girviSerialNum=" + girviSerialNum + "&panelName=" + panelName;
            update_principal_amount('http://' + documentRootPath + '/include/php/olgupnam.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
        }
    }
    document.getElementById("updatePrincipalButton").style.visibility = "visible";
    return false;
}
/***************End code to add param @Author:PRIYA12APR14*************************/
/***************END CODE TO Add Journal ID @AUTHOR:PRIYA03FEB13******************/
// **************** Update Girvi Date ****************************************
var upDatePanelName;
function update_girvi_DOB_amount(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateGirviDOBAmount;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
/*************Start Code To add panel for update trans girvi date @Author:PRIYA06SEP13**********/
function alertUpdateGirviDOBAmount() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        if (upDatePanelName == 'transGirviDet') {
            document.getElementById("display_girvi_transfer_div").innerHTML = xmlhttp.responseText;
        } else if (upDatePanelName == 'AddPrinTransDateUp') {
            document.getElementById("addPrinTransDetDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        }
    }
}
/********End Code To add panel for update trans girvi date @Author:PRIYA06SEP13****************/
/********Start code To Add Panel For Trans girvi Date Update @Author:PRIYA06SEP13***********/
/********Start code to add validation for date @Author:PRIYA12FEB14********************/
/********Strat code to add var gTransId @Author:PRIYA29MAR14**************/
/********Start code to add var girviDOB,girviFirmId, girviSerialNum,prinAmt @Author:PRIYA12APR14**************/
/*******Start code to add hindi date condition @Author:SHRI08APR15************************/
/*******Start code to change hindi date condition @Author:PRIYA20APR15**********************/
function updateGirviDOBAmount(documentRootPath, custId, girviId, DOBDay, DOBMonth, DOBYear, jrnlId, panelName, gTransId, girviDOB, girviFirmId, girviSerialNum, prinAmt) {

    upDatePanelName = panelName;
    document.getElementById("updateGirviDOBButton").style.visibility = "hidden";

    var girviDateDay = DOBDay.value;
    var girviDateMMM = DOBMonth.value;
    var girviDateYY = DOBYear.value;
    var girviDateStr = girviDateMMM + ' ' + girviDateDay + ', ' + girviDateYY;
    var girviDate = new Date(girviDateStr); // Girvi Date
    var todayDate = new Date(); // Today Date
    var milliGirviDate = girviDate.getTime();
    var milliTodayDate = todayDate.getTime();
    var datesDiff = milliTodayDate - milliGirviDate;
    if (datesDiff < 0) {
        alert('Please Select the correct Girvi Date!');
        document.getElementById("updateDOBDay").focus();
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("updateGirviDOBButton").style.visibility = "visible";
        return false;
        exit();
    } else {
        if (girviDateMMM == 'FEB' || girviDateMMM == 'APR' || girviDateMMM == 'JUN' || girviDateMMM == 'SEP' || girviDateMMM == 'NOV') {
            if (girviDateMMM == 'FEB' && girviDateDay > 29 && girviDateYY % 4 == 0) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' for this selected year has only max 29 days.');
                document.getElementById("updateDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("updateGirviDOBButton").style.visibility = "visible";
                return false;
                exit();
            }
            if (girviDateMMM == 'FEB' && girviDateDay > 28 && girviDateYY % 4 != 0) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' for this selected year has only max 28 days.');
                document.getElementById("updateDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("updateGirviDOBButton").style.visibility = "visible";
                return false;
                exit();
            }
            if (girviDateDay > 30) {
                alert('Please select correct Date, Month ' + girviDateMMM + ' has only max 30 days.');
                document.getElementById("updateDOBDay").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("updateGirviDOBButton").style.visibility = "visible";
                return false;
                exit();
            }
        }
        if (validateSelectField(girviDateDay, "Please select Girvi Date Day!") == false) {
            document.getElementById("updateDOBDay").focus();
            document.getElementById("updateGirviDOBButton").style.visibility = "visible";
            return false;
        } else if (validateSelectField(girviDateMMM, "Please select Girvi Date Month!") == false) {
            document.getElementById("updateDOBMonth").focus();
            document.getElementById("updateGirviDOBButton").style.visibility = "visible";
            return false;
        } else if (validateSelectField(girviDateYY, "Please select Girvi Date Year!") == false) {
            document.getElementById("updateDOBYear").focus();
            document.getElementById("updateGirviDOBButton").style.visibility = "visible";
            return false;
        } else {
            confirm_box = confirm("Do you really want to update Girvi Date?");
            if (confirm_box == true)
            {
                var poststr = "custId=" + custId + "&girviId=" + girviId
                        + "&girviDOBDay=" + girviDateDay + "&girviDOBMonth=" + girviDateMMM +
                        "&girviDOBYear=" + girviDateYY + "&jrnlId=" + jrnlId + "&panelName=" + panelName
                        + "&girviTransId=" + gTransId + "&girviDOB=" + girviDOB + "&girviFirmId=" + girviFirmId
                        + "&girviSerialNum=" + girviSerialNum + "&prinAmt=" + prinAmt;

                update_girvi_DOB_amount('http://' + documentRootPath + '/include/php/olgugvdd.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
            }
        }
        document.getElementById("updateGirviDOBButton").style.visibility = "visible";
    }
    return false;
}
/*******End code to change hindi date condition @Author:PRIYA20APR15**********************/
/*******Start code to add hindi date condition @Author:SHRI08APR15************************/
/********End code to add var girviDOB,girviFirmId, girviSerialNum,prinAmt @Author:PRIYA12APR14**************/
/********End code to add var gTransId @Author:PRIYA29MAR14**************/
/********End code to add validation for date @Author:PRIYA12FEB14*******************/
/********End code To Add Panel For Trans girvi Date Update @Author:PRIYA06SEP13***********/
// **************** Update Serial Number ****************************************
function update_girvi_serial_num(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateGirviSerialNum;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateGirviSerialNum() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        if (xmlhttp.responseText == 'SerialNumAlreadyExist') {
            document.getElementById("updateGirviSerialNumAlreadyExistMessage").style.visibility = "visible";
        } else {
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        }
    }
}
/********Start Code To Add Field Pre Serial No @AUTHOR:PRIYA10APR13**********/
/****************Start code to add var for sys log @Author:PRIYA02JUL14****************/
function updateGirviSerialNum(documentRootPath, custId, girviId, girviPreSerialNo, girviSerialNo, girviDOB, girviFirmId, prinAmt) {

    document.getElementById("updateGirviSerialNumAlreadyExistMessage").style.visibility = "hidden";
    document.getElementById("updateGirviSerialNoButton").style.visibility = "hidden";

    var girviSerialNum = girviSerialNo.value;
    var girviPreSerialNo = girviPreSerialNo.value;

    if (validateEmptyField(girviSerialNum, "Please enter Serial Number!") == false ||
            validateNum(girviSerialNum, "Accept only numeric characters without space character!") == false) {
        document.getElementById("girviSerialNum").focus();
        document.getElementById("updateGirviSerialNoButton").style.visibility = "visible";
        return false;
    } else if ((girviPreSerialNo != '') && validateAlpha(girviPreSerialNo, "Accept only Alpha characters without space character!") == false) {
        document.getElementById("girviPreSerialNo").focus();
        document.getElementById("updateGirviSerialNoButton").style.visibility = "visible";
        return false;
    } else {
        confirm_box = confirm("Do you really want to update Serial Number?");

        if (confirm_box == true)
        {
            var poststr = "custId=" + custId + "&girviId=" + girviId
                    + "&girviSerialNum=" + girviSerialNum
                    + "&girviPreSerialNum=" + girviPreSerialNo
                    + "&girviDOB=" + girviDOB
                    + "&girviFirmId=" + girviFirmId
                    + "&prinAmt=" + prinAmt;

            update_girvi_serial_num('http://' + documentRootPath + '/include/php/olgusrnm.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
        }
    }
    document.getElementById("updateGirviSerialNoButton").style.visibility = "visible";
    return false;
}
/****************End code to add var for sys log @Author:PRIYA02JUL14****************/
/********End Code To Add Field Pre Serial No @AUTHOR:PRIYA10APR13**********/
// **************** Delete Girvi Item ****************************************
function delete_girvi_item(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertDeleteGirviItem;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertDeleteGirviItem() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
}
/*****************Start code to add var @Author:PRIYA14APR14*****************/
function deleteGirviItem(documentRootPath, custId, girviId, girviItemId, girviFirmId, girviSerialNo, itemType, itemName, itemPieces, grossItemWeight, grossWeightType, itemWeight, weightType) {

    document.getElementById("deleteGirviItemButt" + girviItemId).innerHTML = "<img src='images/loading16.gif' />";

    confirm_box = confirm("Do you really want to delete this girvi item?");

    if (confirm_box == true)
    {

        var poststr = "custId=" + custId + "&girviId=" + girviId
                + "&girviItemId=" + girviItemId + "&girviFirmId=" + girviFirmId + "&girviSerialNo=" + girviSerialNo
                + "&itemType=" + itemType + "&itemName=" + itemName + "&itemPieces=" + itemPieces + "&grossItemWeight=" + grossItemWeight
                + "&grossWeightType=" + grossWeightType + "&itemWeight=" + itemWeight + "&weightType=" + weightType;

        delete_girvi_item('http://' + documentRootPath + '/include/php/olgugidl.php', poststr);//change in filename @AUTHOR: SANDY22NOV13
    } else {
        document.getElementById("deleteGirviItemButt" + girviItemId).innerHTML = "<img src='images/ajaxClose.png' />";
    }
    return false;
}
/*****************End code to add var @Author:PRIYA14APR14*****************/
// **************** Update Serial Number ****************************************
function girvi_deposit_money_submit(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertGirviDepositMoneySubmit;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertGirviDepositMoneySubmit() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/*****************Start code to add girviSerialNum @Author:PRIYA14APR14*******************/
/*****************Start code to add acc id @Author:PRIYA20MAY14*******************/
/*****************Start code to add loanDateOpt @Author:PRIYA24APR15*******************/
function girviDepositMoneySubmit(documentRootPath, custId, girviId, newPrincipalAmount, girviDepositPrinAmount,
        girviDepositIntAmount, girviRealIntAmount, totalAmountDep, depDiscountAmt, girviDepositDate, newGirviDate, girviComm,
        simpleOrCompIntOption, girviCompoundedOption, interestType, monthlyInterestType, amountLeft, moneyDepOption, girviSerialNo,
        girviDepositMonOpt, girviDepLoanAccId, girviDepIntRecAccId, girviDepCashAccId, intAmtLeftBefore) {

    document.getElementById("girviUpdateDepMoneySubmitDiv").style.visibility = "hidden";
    document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "visible";

    confirm_box = confirm("Do you really want to update this Girvi?");

    if (confirm_box == true)
    {
        var poststr = "custId=" + custId +
                "&girviId=" + girviId +
                "&newPrincipalAmount=" + newPrincipalAmount +
                "&girviDepositPrinAmount=" + girviDepositPrinAmount +
                "&girviDepositIntAmount=" + girviDepositIntAmount +
                "&girviRealIntAmount=" + girviRealIntAmount +
                "&totalAmountDep=" + totalAmountDep +
                "&depDiscountAmt=" + depDiscountAmt +
                "&girviDepositDate=" + girviDepositDate +
                "&newGirviDate=" + newGirviDate +
                "&girviComm=" + encodeURIComponent(girviComm) +
                "&simpleOrCompIntOption=" + simpleOrCompIntOption +
                "&girviCompoundedOption=" + girviCompoundedOption +
                "&interestType=" + interestType +
                "&monthlyInterestType=" + monthlyInterestType +
                "&amountLeft=" + amountLeft +
                "&moneyDepOption=" + moneyDepOption +
                "&girviSerialNo=" + girviSerialNo +
                "&girviDepositMonOpt=" + girviDepositMonOpt +
                "&girviDepLoanAccId=" + girviDepLoanAccId +
                "&girviDepIntRecAccId=" + girviDepIntRecAccId +
                "&girviDepCashAccId=" + girviDepCashAccId +
                "&intAmtLeftBefore=" + intAmtLeftBefore;
        //alert(poststr);
        girvi_deposit_money_submit('http://' + documentRootPath + '/include/php/olgugdmd.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    }

    document.getElementById("girviUpdateDepMoneySubmitDiv").style.visibility = "visible";
    document.getElementById("ajaxLoadDepositMoneyDiv").style.visibility = "hidden";
    return false;
}
/*****************End code to add loanDateOpt @Author:PRIYA24APR15*******************/
/*****************End code to add acc id @Author:PRIYA20MAY14*******************/
/*****************End code to add girviSerialNum @Author:PRIYA14APR14*******************/
// **************** Delete Additional Principal Amount ******************************
function delete_additional_girvi_prin(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertDeleteAdditionalGirviPrin;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertDeleteAdditionalGirviPrin() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
}
/************Start code to add var @Author:PRIYA14APR14**************/
/************Start code to check transfer present @Author:PRIYA16DEC14********/
function deleteAdditionalGirviPrin(documentRootPath, custId, girviId, girviAddPrinId, girviPrinJrnlId, gPrinUId, gPrinFirmId, gPrinAmt, gPrinDOB, gSerialNo, transferPresent) {
    if (transferPresent > 0) {
        alert("To delete please delete transfer details !");
        return false;
    } else {
        document.getElementById("ajaxDelAdditionalPrinButt" + girviAddPrinId).innerHTML = "<img src='images/loading16.gif' />";
        confirm_box = confirm("Do you really want to delete this additional principal amount?");

        if (confirm_box == true)
        {

            var poststr = "custId=" + custId + "&girviId=" + girviId
                    + "&girviAddPrinId=" + girviAddPrinId
                    + "&girviPrinJrnlId=" + girviPrinJrnlId + "&gPrinUId=" + gPrinUId
                    + "&gPrinFirmId=" + gPrinFirmId + "&gPrinAmt=" + gPrinAmt
                    + "&gPrinDOB=" + gPrinDOB + "&gSerialNo=" + gSerialNo;

            delete_additional_girvi_prin('http://' + documentRootPath + '/include/php/olgugdap.php', poststr);//change in filename @AUTHOR: SANDY22NOV13
        } else {
            document.getElementById("ajaxDelAdditionalPrinButt" + girviAddPrinId).innerHTML = "<img src='images/ajaxClose.png' />";
        }
        return false;
    }
}
/************End code to check transfer present @Author:PRIYA16DEC14********/
/************End code to add var @Author:PRIYA14APR14**************/
// **************** Delete Girvi Deposit Amount ******************************
function delete_deposit_girvi_amt(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertDeleteDepositGirviAmt;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertDeleteDepositGirviAmt() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
}
function deleteDepositGirviAmt(documentRootPath, custId, girviId, depositMoneyId, depositjrnlId) {

    document.getElementById("ajaxDeleteDepositGirviAmtButt" + depositMoneyId).innerHTML = "<img src='images/loading16.gif' />";

    confirm_box = confirm("Do you really want to delete this girvi deposit amount?");

    if (confirm_box == true)
    {
        var poststr = "custId=" + custId + "&girviId=" + girviId
                + "&depositMoneyId=" + depositMoneyId
                + "&depositjrnlId=" + depositjrnlId;

        delete_deposit_girvi_amt('http://' + documentRootPath + '/include/php/olgudlgd.php', poststr);//change in filename @AUTHOR: SANDY22NOV13
    } else {
        document.getElementById("ajaxDeleteDepositGirviAmtButt" + depositMoneyId).innerHTML = "<img src='images/ajaxClose.png' />";
    }
    return false;
}
// **************** Release Principal Amount ****************************************
function release_principal_amount(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertReleasePrincipalAmount;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertReleasePrincipalAmount() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
}
/******Start code to change function to get english date according to hindi date @Author:SHRI13APR15*******/
/******************Start code to change function to pass date @Author:PRIYA27FEB14***************/
//function releasePrincipalAmount(documentRootPath, custId, girviId, principalId, principalDOR, pricipalTotalTime, releaseTotalPrincAmt, releaseTotalPrincInt, releaseTotalPrincPaidInt, releaseTotalPrincPaidAmt, releaseTotalPrincDis) {
/******************Start code to add acc ids @Author:PRIYA21MAY14************/
/******************Start code to remove hindi code @Author:PRIYA21APR15************/
function releasePrincipalAmount(documentRootPath, custId, girviId, principalId, principalDD, principalMM, principalYY, pricipalTotalTime, releaseTotalPrincAmt,
        releaseTotalPrincInt, releaseTotalPrincPaidInt, releaseTotalPrincPaidAmt, releaseTotalPrincDis, relPrinLoanAccId, relPrinCashAccId, relPrinIntRecAccId, relPrinDiscAccId,
        transStatus) {
    document.getElementById("releaseGirviPrincAmtButton" + principalId).style.visibility = "hidden";
    if (transStatus == 'Transferred') {
        confirm_box = confirm("This principal has been transferred !\nDo you really want to release this Principal Amount?");
    } else {
        confirm_box = confirm("Do you really want to release this Principal Amount?");
    }
    if (confirm_box == true)
    {
        principalDOR = principalDD + ' ' + principalMM + ' ' + principalYY;
        var poststr = "custId=" + encodeURIComponent(custId)
                + "&girviId=" + encodeURIComponent(girviId)
                + "&principalId=" + encodeURIComponent(principalId)
                + "&principalDOR=" + encodeURIComponent(principalDOR)
                + "&pricipalTotalTime=" + encodeURIComponent(pricipalTotalTime)
                + "&releaseTotalPrincAmt=" + encodeURIComponent(releaseTotalPrincAmt)
                + "&releaseTotalPrincInt=" + encodeURIComponent(releaseTotalPrincInt)
                + "&releaseTotalPrincPaidInt=" + encodeURIComponent(releaseTotalPrincPaidInt)
                + "&releaseTotalPrincPaidAmt=" + encodeURIComponent(releaseTotalPrincPaidAmt)
                + "&releaseTotalPrincDis=" + encodeURIComponent(releaseTotalPrincDis)
                + "&relPrinLoanAccId=" + encodeURIComponent(relPrinLoanAccId)
                + "&relPrinCashAccId=" + encodeURIComponent(relPrinCashAccId)
                + "&relPrinIntRecAccId=" + encodeURIComponent(relPrinIntRecAccId)
                + "&relPrinDiscAccId=" + encodeURIComponent(relPrinDiscAccId);
        release_principal_amount('http://' + documentRootPath + '/include/php/olgurepn.php', poststr);//change in filename @AUTHOR: SANDY22NOV13
    }

    document.getElementById("releaseGirviPrincAmtButton" + principalId).style.visibility = "visible";
    return false;
}
/******************End code to remove hindi code @Author:PRIYA21APR15************/
/******************End code to add acc ids @Author:PRIYA21MAY14************/
/******************End code to change function to pass date @Author:PRIYA27FEB14***************/
/******End code to change function to get english date according to hindi date @Author:SHRI13APR15*******/
// *********** Change Girvi Additinal Principal Release Date ******************
var girviCurrentAddPrinDiv = '';
function change_girvi_add_prin_date(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertChangeGirviAddPrinDate;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.send(parameters);

}

function alertChangeGirviAddPrinDate() {

    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "hidden";
        document.getElementById("girviTotAmtDiv").innerHTML = xmlhttp2.responseText;
        document.getElementById(girviCurrentAddPrinDiv).style.visibility = "visible";
    } else {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    }
}
function changeGirviAddPrinDate(documentRootPath, relDateDDValue, relDateMMValue, relDateYYValue, girviROI, princAmount, interestType, girviDate, girviId, custId, girviType, girviUpdSts, gMonthIntOption, gCurrentAddPrinDiv, omPanelDiv) {

    girviCurrentAddPrinDiv = gCurrentAddPrinDiv;

    //    for (i = 0; i < girviROIForm.selROI.length; i++) {
    //        if (girviROIForm.selROI[i].checked == true)
    //            ROIValue = girviROIForm.selROI[i].value;
    //    }

    var poststr = "relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue
            + "&ROIValue=" + girviROI.value + "&princAmount=" + princAmount + "&interestType=" + interestType
            + "&girviDate=" + girviDate + "&girviId=" + girviId + "&custId=" + custId + "&omPanelDiv=" + omPanelDiv
            + "&girviType=" + girviType + "&girviStatus=" + girviUpdSts + "&gMonthIntOption=" + gMonthIntOption + "&girviCurrentAddPrinDiv=" + girviCurrentAddPrinDiv + "&grvRelPayDetails=False";
    //alert(girviCurrentAddPrinDiv);
    change_girvi_add_prin_date('http://' + documentRootPath + '/include/php/olggttam.php', poststr);//changes in navigation AS per new filename @AUTHOR: SANDY20NOV13

    return false;
}
// **************** Update Girvi ROI Value ******************************
function update_roi_value(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertDeleteDepositGirviAmt;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateROIValue() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
}
function updateROIValue(documentRootPath, custId, girviId, girviROIForm) {
    document.getElementById("ajaxUpdateROIValueButt").innerHTML = "<img src='images/loading16.gif' />";

    confirm_box = confirm(updateROIAlertMess + "\n\nDo you really want to update rate of interest?");//change in line @AUTHOR: SANDY28JAN14

    if (confirm_box == true)
    {
        for (i = 0; i < girviROIForm.selROI.length; i++) {
            if (girviROIForm.selROI[i].checked == true)
                ROIValue = girviROIForm.selROI[i].value;
        }
        var poststr = "custId=" + custId + "&girviId=" + girviId
                + "&ROIValue=" + ROIValue;

        update_roi_value('http://' + documentRootPath + '/include/php/olguroiv.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    } else {
        document.getElementById("ajaxUpdateROIValueButt").innerHTML = "<img src='images/update16.png' />";
    }
    return false;
}
// **************** Update Girvi ROI Value ******************************
/************Start Code To Add Validation for Girvi Other Info @Author:PRIYA06SEP13******/
function validateUpdateGirviOtherInfo() {
    if (validateEmptyField(document.getElementById("girviOtherInfo").value, "Please enter Girvi Other Info!") == false) {
        document.getElementById("girviOtherInfo").focus();
        return false;
    }
    return true;
}
/************End Code To Add Validation for Girvi Other Info @Author:PRIYA06SEP13******/
function update_girvi_other_info(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateGirviOtherInfo;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateGirviOtherInfo() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    }
}
/************Start Code To Add Validation For for Girvi Other Info @Author:PRIYA06SEP13******/
function updateGirviOtherInfo(documentRootPath, custId, girviId, girviOtherInfo, girviDOB, girviFirmId, girviSerialNum) {
    // document.getElementById("ajaxUpdateGirviOtherInfoButt").innerHTML = "<img src='images/loading16.gif' />";
    confirm_box = confirm(updateAlertMess + "\n\nDo you really want to add or update other info?");//change in line @AUTHOR: SANDY28JAN14

    if (confirm_box == true)
    {
        if (validateUpdateGirviOtherInfo()) {
            var poststr = "custId=" + custId + "&girviId=" + girviId
                    + "&girviOtherInfo=" + girviOtherInfo + "&girviDOB=" + girviDOB + "&girviFirmId=" + girviFirmId
                    + "&girviSerialNum=" + girviSerialNum;

            update_girvi_other_info('http://' + documentRootPath + '/include/php/olguotin.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
        }
    } else {
        document.getElementById("ajaxUpdateGirviOtherInfoButt").innerHTML = "<img src='images/updateButt.png' />";

    }
    return false;
}
/************End Code To Add Validation For for Girvi Other Info @Author:PRIYA06SEP13******/
/************Start Code To Add Validation For for Girvi Other Info @Author:SANT28APR17******/
function updateFinanceGirviOtherInfo(documentRootPath, custId, girviId, girviOtherInfo, girviDOB, girviFirmId, girviSerialNum) {
    // document.getElementById("ajaxUpdateGirviOtherInfoButt").innerHTML = "<img src='images/loading16.gif' />";
    confirm_box = confirm(updateAlertMess + "\n\nDo you really want to add or update other info?");//change in line @AUTHOR: SANDY28JAN14

    if (confirm_box == true)
    {
        if (validateUpdateGirviOtherInfo()) {
            var poststr = "custId=" + custId + "&girviId=" + girviId
                    + "&girviOtherInfo=" + girviOtherInfo + "&girviDOB=" + girviDOB + "&girviFirmId=" + girviFirmId
                    + "&girviSerialNum=" + girviSerialNum;

            update_girvi_other_info('http://' + documentRootPath + '/include/php/olguotin_1.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
        }
    } else {
        document.getElementById("ajaxUpdateGirviOtherInfoButt").innerHTML = "<img src='images/updateButt.png' />";

    }
    return false;
}
/************End Code To Add Validation For for Girvi Other Info @Author:SANT28APR17******/
// *********** Change changeIntTypeOpt ******************
function change_int_type_opt(url, parameters) {

    loadXMLDoc2();

    xmlhttp2.onreadystatechange = alertChangeIntTypeOpt;

    xmlhttp2.open('POST', url, true);
    xmlhttp2.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp2.setRequestHeader("Connection", "close");
    xmlhttp2.setRequestHeader("Content-length", parameters.length);
    xmlhttp2.send(parameters);

}

function alertChangeIntTypeOpt() {
    if (xmlhttp2.readyState == 4 && xmlhttp2.status == 200) {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "hidden";
        document.getElementById("girviTotAmtDiv").innerHTML = xmlhttp2.responseText;
    } else {
        document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    }
}
function change_int_type_option_db(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertChangeIntTypeOptionDB;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}
/****Start to change function @AUTHOR: SANDY25DEC13**************************/
/****Start to change function @AUTHOR: SANDY26DEC13**************************/
function alertChangeIntTypeOptionDB() {
    if (changeIntOptPanel == 'MlLoan' || changeIntOptPanel == 'TransGirviDetPanel' || changeIntOptPanel == 'TransAdPrinDetPanel') { //change in condition @AUTHOR: SANDY04JAN14
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            if (document.getElementById('transSimpleOrCompIntOption').value == 'Simple') {
                document.getElementById("transGirviCompoundedOptionDiv").style.visibility = "hidden";
            } else {
                document.getElementById("transGirviCompoundedOptionDiv").style.visibility = "visible";
            }
            document.getElementById("ajaxLoadTGirviIntOptChangeDiv").style.visibility = "visible";
            document.getElementById("ajaxLoadTGirviIntOptChangeDiv").innerHTML = "<img src='images/right16.png' />";
            window.setTimeout(closeGirviIntOptChangeDiv, 1000);
            document.getElementById("ajaxLoadTGirviIntOptChangeDiv").style.visibility = "visible";
        } else {
            document.getElementById("ajaxLoadTGirviIntOptChangeDiv").style.visibility = "visible";
            document.getElementById("ajaxLoadTGirviIntOptChangeDiv").innerHTML = "<img src='images/loading16.gif' />";
        }
    } else {
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
}

function closeGirviIntOptChangeDiv()
{
    if (changeIntOptPanel == 'MlLoan' || changeIntOptPanel == 'TransGirviDetPanel' || changeIntOptPanel == 'TransAdPrinDetPanel') { //change in condition @AUTHOR: SANDY04JAN14
        document.getElementById("ajaxLoadTGirviIntOptChangeDiv").style.visibility = "hidden";
    } else {
        document.getElementById("ajaxLoadGirviIntOptChangeDiv").style.visibility = "hidden";
    }
}

/********Start code to add var girviDOB,girviFirmId, girviSerialNum @Author:PRIYA12APR14**************/
/********Start code to add param girviHindiDOB @Author:PRIYA25APR15**************/
var changeIntOptPanel;
function changeIntTypeOpt(documentRootPath, simpleOrCompIntOption, girviCompoundedOption, omPanelDiv, grvRelPayDetails, selMonthlyIntOpt, princAmount, ROIValue,
        interestType, girviDate, girviType, girviId, custId, girviStatus, transId, girviDOB, girviFirmId, girviSerialNum, girviHindiDOB, auctionPanel) {
    changeIntOptPanel = omPanelDiv;
    document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    selectedROIValue = ROIValue;
    if (girviStatus == 'Transferred') {
        relDateDDValue = document.getElementById('DOBTransDay').value;
        relDateMMValue = document.getElementById('DOBTransMonth').value;
        relDateYYValue = document.getElementById('DOBTransYear').value;
    } else if (girviStatus == 'Released') {
        relDateDDValue = '';
        relDateMMValue = '';
        relDateYYValue = '';
    } else {
        relDateDDValue = document.getElementById('DOBDay').value;
        relDateMMValue = document.getElementById('DOBMonth').value;
        relDateYYValue = document.getElementById('DOBYear').value;
    }


    var poststr = "gMonthIntOption=" + selMonthlyIntOpt.value + "&princAmount=" + princAmount
            + "&ROIValue=" + selectedROIValue + "&interestType=" + interestType.value
            + "&girviDate=" + girviDate + "&girviId=" + girviId + "&custId=" + custId + "&omPanelDiv=" + omPanelDiv
            + "&girviType=" + girviType + "&grvRelPayDetails=" + grvRelPayDetails + "&girviStatus=" + girviStatus
            + "&relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue
            + "&simpleOrCompIntOption=" + simpleOrCompIntOption + "&girviCompoundedOption=" + girviCompoundedOption
            + "&girviAddROINotChange=No" + "&transId=" + transId + "&girviDOB=" + girviDOB + "&girviFirmId=" + girviFirmId
            + "&girviSerialNum=" + girviSerialNum + "&girviHindiDOB=" + girviHindiDOB + "&auctionPanel=" + auctionPanel;//add & before auctionPanel @Author:SHRI08JUN15

    if (girviStatus == 'Transferred') { //CHANGE IN VARIABLE @AUTHOR: SANDY14JAN14
        change_int_type_opt('http://' + documentRootPath + '/include/php/olgggtta.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    } else {
        change_int_type_opt('http://' + documentRootPath + '/include/php/olggttam.php', poststr);//changes in navigation AS per new filename @AUTHOR: SANDY20NOV13
    }
    change_int_type_option_db('http://' + documentRootPath + '/include/php/olguindb.php', poststr);//change in filename @AUTHOR: SANDY21NOV13
    return false;
}
/********End code to add param girviHindiDOB @Author:PRIYA25APR15**************/
/********End code to add var girviDOB,girviFirmId, girviSerialNum @Author:PRIYA12APR14**************/
/****End to change function @AUTHOR: SANDY26DEC13**************************/
/****End to change function @AUTHOR: SANDY25DEC13**************************/
// ***************************** Delete Firm ****************************************
/************Start code to add panels @Author:PRIYA28DEC13************************/
/************changed code to add panels @Author:ATHU5DEC16************************/
function deleteFirm(firmId) {

    document.body.style.background = "#F00";
    delFirmAlertMessStr = delFirmAlertMess + "\n\nThis option will delete all the records and entries of this firm.\nPlease take a backup of your database before execute this option.\n\nDo you really want to delete this firm?";

    //delFirmAlertMessStr = delFirmAlertMess.fontcolor("red");

    confirm_box = confirm(delFirmAlertMessStr);

    if (confirm_box == true)
    {
        document.body.style.background = "#FFF";
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                if (xmlhttp.responseText == 'CustomerPresent') {
                    // alert(firmDelAlert1 + "\nPlease first delete all customers of this firm!");//change in line @AUTHOR: SANDY28JAN14
                    document.getElementById("deleteFirmButt" + firmId).innerHTML = "<img src='images/ajaxClose.png' />";
                } else if (xmlhttp.responseText == 'GirviPresent') {
                    //alert(firmDelAlert2 + "\n\nPlease first delete all girvi those belongs to this firm!");//change in line @AUTHOR: SANDY28JAN14
                    document.getElementById("deleteFirmButt" + firmId).innerHTML = "<img src='images/ajaxClose.png' />";
                } else if (xmlhttp.responseText == 'GirviPresent') {
                    // alert(firmDelAlert3 + "\n\nPlease first delete all girvi those belongs to this firm!");//change in line @AUTHOR: SANDY28JAN14
                    document.getElementById("deleteFirmButt" + firmId).innerHTML = "<img src='images/ajaxClose.png' />";
                } else if (xmlhttp.responseText == 'UdhaarPresent') {
                    // alert(firmDelAlert4 + " \n\nPlease first delete all udhaar money those belongs to this firm!");//change in line @AUTHOR: SANDY28JAN14
                    document.getElementById("deleteFirmButt" + firmId).innerHTML = "<img src='images/ajaxClose.png' />";
                } else if (xmlhttp.responseText == 'TransPresent') {
                    // alert(firmDelAlert5 + " \n\nPlease first delete all transactions those belongs to this firm!");//change in line @AUTHOR: SANDY28JAN14
                    document.getElementById("deleteFirmButt" + firmId).innerHTML = "<img src='images/ajaxClose.png' />";
                } else if (xmlhttp.responseText == 'SupplierPresent') {
                    //alert(firmDelAlert6 + "\n\nPlease first delete all suppliers of this firm!");//change in line @AUTHOR: SANDY28JAN14
                    document.getElementById("deleteFirmButt" + firmId).innerHTML = "<img src='images/ajaxClose.png' />";
                } else {
                    document.getElementById("deleteFirmButt" + firmId).innerHTML = "<img src='images/delete16.png' />";
                    window.setTimeout(getFirmListAfterDel, 10);
                }
            } else {

                document.getElementById("deleteFirmButt" + firmId).innerHTML = "<img src='images/loading16.gif' />";
            }
        };
        xmlhttp.open("GET", "include/php/omffdlfr.php?firmId=" + firmId,
                true);
        xmlhttp.send();
    } else {
        document.body.style.background = "#FFF";
    }
}
function getFirmListAfterDel() {
    document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
}
/************End code to add panels @Author:PRIYA28DEC13************************/

// *********** Change changeIntCompoundedOpt ******************
function change_compounded_option_db(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertChangeCompoundedOptionDB;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.send(parameters);

}
/*********Start to modify function @AUTHOR: SANDY25DEC13**************************/
/*********Start to modify function @AUTHOR: SANDY26DEC13**************************/
function alertChangeCompoundedOptionDB() {
    if (changeIntCompoundedOptPanel == 'MlLoan' || changeIntCompoundedOptPanel == 'TransGirviDetPanel') {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadTGirviCompoundedOptChangeDiv").style.visibility = "visible";
            document.getElementById("ajaxLoadTGirviCompoundedOptChangeDiv").innerHTML = "<img src='images/right16.png' />";
            window.setTimeout(closeCompoundedOptChangeDiv, 1000);
            document.getElementById("ajaxLoadTGirviCompoundedOptChangeDiv").style.visibility = "visible";
        } else {
            document.getElementById("ajaxLoadTGirviCompoundedOptChangeDiv").style.visibility = "visible";
            document.getElementById("ajaxLoadTGirviCompoundedOptChangeDiv").innerHTML = "<img src='images/loading16.gif' />";
        }
    } else {
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
}

function closeCompoundedOptChangeDiv()
{
    if (changeIntCompoundedOptPanel == 'MlLoan' || changeIntCompoundedOptPanel == 'TransGirviDetPanel') {
        document.getElementById("ajaxLoadTGirviCompoundedOptChangeDiv").style.visibility = "hidden";
    } else {
        document.getElementById("ajaxLoadGirviCompoundedOptChangeDiv").style.visibility = "hidden";
    }
}
/********Start code to add var girviDOB,girviFirmId, girviSerialNum @Author:PRIYA12APR14**************/
/********Start code to add param girviHindiDOB @Author:PRIYA25APR15**************/
var changeIntCompoundedOptPanel;
function changeIntCompoundedOpt(documentRootPath, simpleOrCompIntOption, girviCompoundedOption, omPanelDiv, grvRelPayDetails, selMonthlyIntOpt, princAmount, ROIValue,
        interestType, girviDate, girviType, girviId, custId, girviStatus, transId, girviDOB, girviFirmId, girviSerialNum, girviHindiDOB, auctionPanel) {
    changeIntCompoundedOptPanel = omPanelDiv;
    document.getElementById("ajaxLoadCustGirviDetailsDiv").style.visibility = "visible";
    selectedROIValue = ROIValue;

    if (girviStatus == 'Transferred') {
        relDateDDValue = document.getElementById('DOBTransDay').value;
        relDateMMValue = document.getElementById('DOBTransMonth').value;
        relDateYYValue = document.getElementById('DOBTransYear').value;
    } else if (girviStatus == 'Released') {
        relDateDDValue = '';
        relDateMMValue = '';
        relDateYYValue = '';
    } else {
        relDateDDValue = document.getElementById('DOBDay').value;
        relDateMMValue = document.getElementById('DOBMonth').value;
        relDateYYValue = document.getElementById('DOBYear').value;
    }


    var poststr = "gMonthIntOption=" + selMonthlyIntOpt.value + "&princAmount=" + princAmount
            + "&ROIValue=" + selectedROIValue + "&interestType=" + interestType.value
            + "&girviDate=" + girviDate + "&girviId=" + girviId + "&custId=" + custId + "&omPanelDiv=" + omPanelDiv
            + "&girviType=" + girviType + "&grvRelPayDetails=" + grvRelPayDetails + "&girviStatus=" + girviStatus
            + "&relDateDDValue=" + relDateDDValue + "&relDateMMValue=" + relDateMMValue + "&relDateYYValue=" + relDateYYValue
            + "&simpleOrCompIntOption=" + simpleOrCompIntOption + "&girviCompoundedOption=" + girviCompoundedOption
            + "&girviAddROINotChange=No" + "&transId=" + transId + "&girviDOB=" + girviDOB + "&girviFirmId=" + girviFirmId
            + "&girviSerialNum=" + girviSerialNum + "&girviHindiDOB=" + girviHindiDOB + "&auctionPanel=" + auctionPanel;//change in parameters @AUTHOR: SANDY14JAN14

    if (girviStatus == 'Transferred') { //CHANGE IN VARIABLE @AUTHOR: SANDY14JAN14
        change_int_type_opt('http://' + documentRootPath + '/include/php/olgggtta.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    } else {
        change_int_type_opt('http://' + documentRootPath + '/include/php/olggttam.php', poststr);//changes in navigation AS per new filename @AUTHOR: SANDY20NOV13
    }
    change_compounded_option_db('http://' + documentRootPath + '/include/php/olgucmdb.php', poststr);//change in filename @AUTHOR: SANDY21NOV13
    return false;
}
/********End code to add param girviHindiDOB @Author:PRIYA25APR15**************/
/********End code to add var girviDOB,girviFirmId, girviSerialNum @Author:PRIYA12APR14**************/
/*********End to modify function @AUTHOR: SANDY26DEC13**************************/
/*********End to modify function @AUTHOR: SANDY25DEC13**************************/
/*********************************** Customer Girvi Details ********************************/
function cust_girvi_receipt(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertCustGirviReceipt;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertCustGirviReceipt() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
function custGirviReceipt(obj) {

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    if (obj) {
        var poststr = "custId=" + custId
                + "&firmId=" + encodeURIComponent(document.getElementById("custFirmId").value);

        cust_girvi_receipt('include/php/olggsumm.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
    }

}
// **************** Update Tunch Id ****************************************
function update_girvi_item_tunch_id(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateGirviItemTunchId;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateGirviItemTunchId() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/******************Start code to add var @Author:PRIYA14APR14***********/
/*****************Start code to change alert message @Author:SHRI19JUN15*********************/
function updateGirviItemTunchId(documentRootPath, custId, girviId, girviItemId, girviItemTunchId, girviFirmId, girviSerialNo, itemType, itemName, itemPieces, grossItemWeight, grossWeightType, itemWeight, weightType) {
    document.getElementById("updateGirviTunchIdCloseButton" + girviItemId).style.visibility = "hidden";
    if (girviItemTunchId == 'NotSelected') {
        alert(updateTunchVal + '\n\nPlease select item tunch value first!');//change in line @AUTHOR: SANDY28JAN14
    } else {
        confirm_box = confirm("क्या आप वास्तव में टंच बदलना चाहते हैं? \n\nDo you really want to update Tunch?");

        if (confirm_box == true)
        {
            var poststr = "custId=" + custId + "&girviId=" + girviId +
                    "&girviItemId=" + girviItemId + "&girviItemTunchId=" + girviItemTunchId
                    + "&girviFirmId=" + girviFirmId + "&girviSerialNo=" + girviSerialNo
                    + "&itemType=" + itemType + "&itemName=" + itemName + "&itemPieces=" + itemPieces + "&grossItemWeight=" + grossItemWeight
                    + "&grossWeightType=" + grossWeightType + "&itemWeight=" + itemWeight + "&weightType=" + weightType;

            update_girvi_item_tunch_id('http://' + documentRootPath + '/include/php/olgutnnm.php', poststr);//change in filename @AUTHOR: SANDY22NOV13
        }
    }
    document.getElementById("updateGirviTunchIdCloseButton" + girviItemId).style.visibility = "visible";
    return false;
}
/*****************End code to change alert message @Author:SHRI19JUN15*********************/
/******************End code to add var @Author:PRIYA14APR14***********/
// **************** Update Tunch Id ****************************************
function update_girvi_add_prin_ROI(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateGirviAddPrinROI;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}

function alertUpdateGirviAddPrinROI() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
function updateGirviAddPrinROI(documentRootPath, custId, girviId, girviAddPrinId, updatePrincipalAmountROI, gPrinUId, gPrinFirmId, gPrinDOB, gSerialNo) {

    document.getElementById("updateGirviAddPrinROICloseButton" + girviAddPrinId).style.visibility = "hidden";
    document.getElementById("updateGirviAddPrinROIButton" + girviAddPrinId).style.visibility = "hidden";
    if (updatePrincipalAmountROI == '') {
        alert(enterRoiValFrstAlert + '\n\nPlease enter rate of interest value first!');//change in line @AUTHOR: SANDY28JAN14
        document.getElementById("updatePrincipalAmountROI" + girviAddPrinId).focus();
    } else {
        confirm_box = confirm(updateROIAlertMess + "\n\nDo you really want to update rate of interest?");//change in line @AUTHOR: SANDY28JAN14

        if (confirm_box == true)
        {
            var poststr = "custId=" + custId + "&girviId=" + girviId +
                    "&girviAddPrinId=" + girviAddPrinId + "&updatePrincipalAmountROI=" + updatePrincipalAmountROI
                    + "&gPrinUId=" + gPrinUId + "&gPrinFirmId=" + gPrinFirmId
                    + "&gPrinDOB=" + gPrinDOB + "&gSerialNo=" + gSerialNo;
            //alert(poststr);
            update_girvi_add_prin_ROI('http://' + documentRootPath + '/include/php/olguapri.php', poststr);//change in filename @AUTHOR: SANDY20NOV13
        } else {
            document.getElementById("updatePrincipalAmountROI" + girviAddPrinId).focus();
        }
    }
    document.getElementById("updateGirviAddPrinROICloseButton" + girviAddPrinId).style.visibility = "visible";
    document.getElementById("updateGirviAddPrinROIButton" + girviAddPrinId).style.visibility = "visible";
    return false;
}

/*Start code PRIYA02 */
/*******************Start Code To Hide Function @AUTHOR:PRIYA03JUNE13******************/
/*function getStaffDetails(staffPanelOption) {
 loadXMLDoc();
 xmlhttp.onreadystatechange = function() {
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
 document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
 } else {
 
 document.getElementById("main_ajax_loading_div").style.visibility = "visible";
 }
 };
 xmlhttp.open("GET", "include/php/omehmndv.php?staffId=" + staffId + "&staffPanelOption=" + staffPanelOption,
 true);
 xmlhttp.send();
 }*/
/*******************End Code To Hide Function @AUTHOR:PRIYA03JUNE13******************/
/*END code PRIYA02 */
/*Start code  Update Supplier PRIYA02 */
/*START CODE PRIYA15 */
function validateUpdateSupplierInputs(obj) {
    if (validateSelectField(document.getElementById("supplierType").value, "Please select Supplier Type!") == false) {
        document.getElementById("supplierType").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("suppIdNum").value, "Please select Supplier ID!") == false ||
            validateAlphaNum(document.getElementById("suppIdNum").value, "Accept only alphanumeric characters!") == false) {
        document.getElementById("suppIdNum").focus();
        return false;
    }
    /***********Start Code To Change Id and position @Author:PRIYA24AUG13************/
    else if (validateSelectField(document.getElementById("firmId").value, "Please select Firm Name!") == false) {
        document.getElementById("firmId").focus();
        return false;
    } else if (validateSelectField(document.getElementById("accMainAccountId").value, "Please select Supplier Account!") == false) {            //PRIYA27
        document.getElementById("accMainAccountId").focus();
        return false;
    }
    /***********End Code To Change Id and position @Author:PRIYA24AUG13************/
    /***********Start code to comment validation @Author:PRIYA19MAR15*******************/
//    else if (document.getElementById("suppShopName").value != "" && validateAlphaNum(document.getElementById("suppShopName").value, "Accept only alphanumeric characters!!") == false) {
//        document.getElementById("suppShopName").focus();
//        return false;
//
//    }
    /***********End code to comment validation @Author:PRIYA19MAR15*******************/
    else if (validateEmptyField(document.getElementById("firstName").value, "Please enter First Name!") == false ||
            validateAlphaWithSpace(document.getElementById("firstName").value, "Accept only alpha characters!") == false) {
        document.getElementById("firstName").focus();
        return false;
    } else if (document.getElementById("lastName").value != "" && validateAlphaWithSpace(document.getElementById("lastName").value, "Accept only alpha characters!") == false) {
        document.getElementById("lastName").focus();
        return false;
    } else if (document.getElementById("fatherOrSpouseName").value != "" && validateAlphaWithSpace(document.getElementById("fatherOrSpouseName").value, "Accept only alpha characters!") == false) {
        document.getElementById("fatherOrSpouseName").focus();
        return false;
    } else if (validateSelectField(document.getElementById("city").value, "Please select City Name!") == false) {
        document.getElementById("city").focus();
        return false;
    } else if ((document.getElementById("pinCode").value != '') && ((validateNum(document.getElementById("pinCode").value, "Accept only Numbers without space character!") == false ||
            validateLength6(document.getElementById("pinCode").value, "Pin Code length should be minimum 06!") == false))) {
        document.getElementById("pinCode").focus();
        return false;
    } else if (validateSelectField(document.getElementById("state").value, "Please select State Name!") == false) {
        document.getElementById("state").focus();
        return false;
    } else if (validateSelectField(document.getElementById("country").value, "Please select Country Name!") == false) {
        document.getElementById("country").focus();
        return false;
    } else if (document.getElementById("phoneNo").value != "" && validateNumWithSpace(document.getElementById("phoneNo").value, "Accept only Numbers!") == false) {
        document.getElementById("phoneNo").focus();
        return false;
    } else if ((document.getElementById("suppMobileNo").value != '') && ((validateNum(document.getElementById("suppMobileNo").value, "Accept only Numbers without space character!") == false ||
            validateLength10(document.getElementById("suppMobileNo").value, "Mobile number length should be minimum 10!") == false))) {
        document.getElementById("suppMobileNo").focus();
        return false;
    } else if (document.getElementById("cashBalance").value != "" && validateNumWithDot(document.getElementById("cashBalance").value, "Accept only Numbers!") == false) {
        document.getElementById("cashBalance").focus();
        return false;
    } else if (document.getElementById("suppGoldWeightBal").value != "" && validateNumWithDot(document.getElementById("suppGoldWeightBal").value, "Accept only Numbers!") == false) {
        document.getElementById("suppGoldWeightBal").focus();
        return false;
    } else if (document.getElementById("suppSilverWeightBal").value != "" && validateNumWithDot(document.getElementById("suppSilverWeightBal").value, "Accept only Numbers!") == false) {
        document.getElementById("suppSilverWeightBal").focus();
        return false;
    }

    return true;
}
/*END CODE PRIYA15 */
function updateSupplier(obj) {

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    if (validateUpdateSupplierInputs(obj)) {
        if (uploadImage(document.getElementById("selectPhoto").value) == false) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            return false;
        }
        return true;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    }

}
/*********START CODE TO ADD Supplier Details @AUTHOR:PRIYA14JAN13**********/
function getSupplierDetails(suppPanelOption) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogwhmndv.php?suppId=" + suppId, true);//File Name Changed @AUTHOR:PRIYA21MAY13
    xmlhttp.send();
}
/*********END CODE TO ADD Supplier Details @AUTHOR:PRIYA14JAN13**********/
/*******START CODE TO ADD Supplier home Panel @AUTHOR:PRIYA14JAN13**********/
var suppId;
function setSuppId(obj) {
    suppId = obj.id;
}
function getSuppHome() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;//Div changed @AUTHOR:PRIYA18JAN13
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogwhsbdv.php?suppId=" + suppId, true);//File Name Changed @AUTHOR:PRIYA21MAY13
    xmlhttp.send();
}
/****************Start Code To Change File Name @AUTHOR:PRIYA21MAY13***************/
/****************Start Code To Add Panel Name @AUTHOR:PRIYA29MAY13***************/
/****************Start code to add div @Author:PRIYA27OCT13***************/
/****************Start code to add panel @Author:PRIYA21JUL14************/
/****************Start code to add panel @Author:PRIYA26AUG14************/
/****************Start code to change panel @Author:PRIYA17SEP14************/
/****************Start code to add condition AddSuppImtInvoice  panel @Author:GAUR28SEP16************/
/****************Start code to add condition AddSuppInvoice  panel @Author:SANT29SEP16************/
/****************Start code to add condition AddSuppInvoice  panel @Author:SANT04OCT16************/
/****************Start code to add condition AddSuppMetal  panel @Author:GAUR25OCT16************/
/****************Start code to add condition AddSuppMetal  panel @Author:GAUR26OCT16************/
//**********Start code to add crystalPurchase in supplier panel:Author:SANT13JAN17
function getSuppForNewOrderStatus(suppId, suppPanelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (suppPanelName == 'addByInv' || suppPanelName == 'addByItems' || suppPanelName == 'purList') {
                document.getElementById("suppPurchaseDivs").innerHTML = xmlhttp.responseText;
                if (suppPanelName == 'addByInv')
                    document.getElementById("suppPurInvTitle").innerHTML = "PURCHASE BY INVOICE";
                else if (suppPanelName == 'addByItems')
                    document.getElementById("suppPurInvTitle").innerHTML = "JEWELLERY ITEMS PURCHASE";
                else if (suppPanelName == 'purList')
                    document.getElementById("suppPurInvTitle").innerHTML = "PURCHASE LIST";
            } else {
                document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;//Div changed @AUTHOR:PRIYA18JAN13
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (suppPanelName == 'SuppInvLayout') {
        xmlhttp.open("GET", "include/php/ogwhinly.php?suppId=" + suppId + "&panelName=" + suppPanelName, true);
    } else if (suppPanelName == 'SuppNewOrder') {
        xmlhttp.open("GET", "include/php/ogwsnwor.php?suppId=" + suppId + "&panelName=" + suppPanelName, true);
    } else if (suppPanelName == 'OrderList' || suppPanelName == 'PendingOrder') {
        xmlhttp.open("GET", "include/php/ogwsnwor.php?suppId=" + suppId + "&panelName=" + suppPanelName, true);
    } else if (suppPanelName == 'suppPurchase') {
        xmlhttp.open("GET", "include/php/ogwprmdv.php?suppId=" + suppId + "&panelName=" + suppPanelName, true);
    } else if (suppPanelName == 'SuppAddOrder') {
        xmlhttp.open("GET", "include/php/ogwsnwor.php?suppId=" + suppId + "&payPanelName=" + suppPanelName, true);
    } else if (suppPanelName == 'InvoicePayment') {
        xmlhttp.open("GET", "include/php/ogwadinv.php?suppId=" + suppId + "&payPanelName=" + suppPanelName, true);
    } else if (suppPanelName == 'addByInv' || suppPanelName == 'addByItems') {
        xmlhttp.open("GET", "include/php/ogwprinv.php?suppId=" + suppId + "&itemMainPanel=" + suppPanelName, true);
    } else if (suppPanelName == 'purList') {
        xmlhttp.open("GET", "include/php/ogwprlst.php?suppId=" + suppId + "&panel=" + suppPanelName, true);
    } else if (suppPanelName == 'AddSuppImtInvoice') {
        xmlhttp.open("GET", "include/php/ogijssdv.php?suppId=" + suppId + "&panel=" + suppPanelName, true);
    } else if (suppPanelName == 'AddSuppMetal') {
        xmlhttp.open("GET", "include/php/ogrwmomf.php?userId=" + suppId + "&panel=" + suppPanelName + "&suppPanelName=addByMetal&metType=BUY&mainPanel=Supplier", true);
    } else if (suppPanelName == 'AddSuppCrystal') {
        xmlhttp.open("GET", "include/php/ogijssdv.php?suppId=" + suppId + "&panel=" + suppPanelName, true);
    } else if (suppPanelName == 'ItemApprovalRec') {
        xmlhttp.open("GET", "include/php/ogaprinv.php?suppId=" + suppId + "&payPanelName=" + suppPanelName, true);
    }
    xmlhttp.send();
}
//**********End code to add crystalPurchase in supplier panel:Author:SANT13JAN17
/****************End code to add condition AddSuppMetal  panel @Author:GAUR26OCT16************/
/****************End code to add condition AddSuppMetal  panel @Author:GAUR25OCT16************/
/****************End code to add condition AddSuppInvoice  panel @Author:SANT04OCT16************/
/****************End code to add condition AddSuppInvoice  panel @Author:SANT29SEP16************/
/****************End code to add condition AddSuppImtInvoice  panel @Author:GAUR28SEP16************/
/****************End code to change panel @Author:PRIYA17SEP14************/
/****************Start code to add panel @Author:PRIYA26AUG14************/
/****************End code to add panel @Author:PRIYA21JUL14************/
/****************End code to add div @Author:PRIYA27OCT13***************/
/****************End Code To Change File Name @AUTHOR:PRIYA21MAY13***************/
/****************Start Code To Add Function For Supplier Pending Orders @AUTHOR:PRIYA27MAY13***************/
/****************Start Code To Add Panel Name @AUTHOR:PRIYA29MAY13***************/
function getSuppForPendingOrderStatus(suppId, suppPanelOption) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogwhpodv.php?suppId=" + suppId + "&suppPanelOption=" + suppPanelOption, true);
    xmlhttp.send();
}
/****************End Code To Add Panel Name @AUTHOR:PRIYA29MAY13***************/
/****************End Code To Add Function For Supplier Pending Orders @AUTHOR:PRIYA27MAY13***************/
/****************Start Code To change div @Author:PRIYA03SEP13***************/
function getSuppDetailsForUpdate() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("supp_middle_body").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ogwuspdv.php?suppId=" + suppId, true);
    xmlhttp.send();
}
/****************End Code To change div @Author:PRIYA03SEP13***************/
/*******END CODE TO ADD Supplier home Panel @AUTHOR:PRIYA14JAN13**********/
/********Start Code To Change FileName For Delete Supplier @AUTHOR:PRIYA10MAY13**********/
/********Start Code To Add Delay Func For Display Del Message @Author:PRIYA02JUL13************/
/********Start Code To change function @Author:PRIYA27DEC13*******************/
/********Start Code To change for supp order udhar @Author:SANT01MAR17*******************/
function deleteSupplier() {
    confirm_box = confirm(delSuppAlertMess + "\n\nDo you really want to delete this supplier?");//change in line @AUTHOR: SANDY28JAN14
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (xmlhttp.responseText == 'SuppStockInvPresent') {
                    alert("Please first delete all Invoices of this Supplier!");
                } else if (xmlhttp.responseText == 'SuppUdhaarPresent') {
                    alert("Please first delete all Udhaar of this Supplier!");
                } else if (xmlhttp.responseText == 'SuppOrderPresent') {
                    alert("Please first delete all Order of this Supplier!");
                } else if (xmlhttp.responseText == 'SuppRawInvPresent') {
                    alert("Please first delete all Raw Invoices of this Supplier!");
                } else {
                    document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/ogwdtdel.php?suppId=" + suppId, true);
        xmlhttp.send();
    }
}
function closeSuppMessDivDelay()
{
    document.getElementById("suppMessDiv").innerHTML = "";
}
/********End Code To change for supp order udhar @Author:SANT01MAR17*******************/
/********End Code To change function @Author:PRIYA27DEC13*******************/
/********End Code To Add Delay Func For Display Del Message @Author:PRIYA02JUL13************/
/********End Code To Change FileName For Delete Supplier @AUTHOR:PRIYA10MAY13**********/
/* END code  Update Supplier PRIYA02 */
/* START code  Update Staff PRIYA15 */
/*******Start Code To Add Validation For Staff Login Id @AUTHOR:PRIYA22APR13*********/
function validateUpdateStaffInputs(obj) {

    if (validateSelectField(document.getElementById("StaffCategory").value, "Please select Staff Category!") == false) {
        document.getElementById("StaffCategory").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("StaffIdNum").value, "Please select Staff ID!") == false ||
            validateAlphaNum(document.getElementById("StaffIdNum").value, "Accept only alphanumeric characters!") == false) {   //PRIYA15
        document.getElementById("StaffIdNum").focus();
        return false;
    } else if (validateSelectField(document.getElementById("firmId").value, "Please select Firm Name!") == false) {
        document.getElementById("firmId").focus();
        return false;
    } else if (validateSelectField(document.getElementById("accountId").value, "Please select Staff Account!") == false) {
        document.getElementById("accountId").focus();                                                  //PRIYA27
        return false;
    } else if (validateEmptyField(document.getElementById("staffLoginId").value, "Please select Staff Login ID!") == false ||
            validateAlphaNum(document.getElementById("staffLoginId").value, "Accept only alphanumeric characters!") == false) {   //PRIYA15
        document.getElementById("staffLoginId").focus();
        return false;
    }
    /**********************Start Code To Add Password Field @AUTHOR:PRIYA06JUNE13********************/
    /**********************Start Code To Change Id and Add Intelligent Pass @Author:PRIYA22JUL13********************/
    else if (validateEmptyField(document.getElementById("staffOrdPass").value, "Please Enter Ordinary Password!") == false ||
            validateLength8(((document.getElementById("staffOrdPass").value)), "Password should be minimum 8 and maximum 16 characters length!") == false) {
        document.getElementById("staffOrdPass").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("staffIntPass").value, "Please Enter Intelligent Password!") == false ||
            validateLength8(((document.getElementById("staffIntPass").value)), "Password should be minimum 8 and maximum 16 characters length!") == false) {
        document.getElementById("staffIntPass").focus();
        return false;
    }
    /**********************End Code To Change Id and Add Intelligent Pass @Author:PRIYA22JUL13********************/
    /**********************End Code To Add Password Field @AUTHOR:PRIYA06JUNE13********************/
    else if (validateEmptyField(document.getElementById("firstName").value, "Please enter First Name!") == false ||
            validateAlphaWithSpace(document.getElementById("firstName").value, "Accept only alpha characters!") == false) {
        document.getElementById("firstName").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("lastName").value, "Please enter Last Name!") == false ||
            validateAlphaWithSpace(document.getElementById("lastName").value, "Accept only alpha characters!") == false) {
        document.getElementById("lastName").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("fatherOrSpouseName").value, "Please enter Father/Spouse Name!") == false ||
            validateAlphaWithSpace(document.getElementById("fatherOrSpouseName").value, "Accept only alpha characters!") == false) {
        document.getElementById("fatherOrSpouseName").focus();
        return false;
    } else if (document.getElementById("staffPanNO").value != "" && validateAlphaNum(document.getElementById("staffPanNO").value, "Accept only alphanumeric characters!!") == false) {
        document.getElementById("staffPanNO").focus();                                                                                       //PRIYA15
        return false;
    } else if (validateSelectField(document.getElementById("city").value, "Please select City Name!") == false) {
        document.getElementById("city").focus();
        return false;
    } else if ((document.getElementById("pinCode").value != '') && ((validateNum(document.getElementById("pinCode").value, "Accept only Numbers without space character!") == false ||
            validateLength6(document.getElementById("pinCode").value, "Pin Code length should be minimum 06!") == false))) {
        document.getElementById("pinCode").focus();                                                                      //PRIYA15
        return false;
    } else if (validateSelectField(document.getElementById("state").value, "Please select State Name!") == false) {
        document.getElementById("state").focus();
        return false;
    } else if (validateSelectField(document.getElementById("country").value, "Please select Country Name!") == false) {
        document.getElementById("country").focus();
        return false;
    } else if (document.getElementById("phoneNo").value != "" && validateNumWithSpace(document.getElementById("phoneNo").value, "Accept only Numbers!") == false) {
        document.getElementById("phoneNo").focus();
        return false;
    } else if ((document.getElementById("StaffmobileNo").value != '') && ((validateNum(document.getElementById("StaffmobileNo").value, "Accept only Numbers without space character!") == false ||
            validateLength10(document.getElementById("StaffmobileNo").value, "Mobile number length should be minimum 10!") == false))) {
        document.getElementById("StaffmobileNo").focus();
        return false;
    } else if (document.getElementById("staffCashBalance").value != "" && validateNumWithDot(document.getElementById("staffCashBalance").value, "Accept only Numbers!") == false) {
        document.getElementById("staffCashBalance").focus();
        return false;
    }
    return true;
}
/*******End Code To Add Validation For Staff Login Id @AUTHOR:PRIYA22APR13*********/
function updateStaff(obj) {

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    if (validateUpdateStaffInputs(obj)) {
        if (uploadImage(document.getElementById("selectPhoto").value) == false) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            return false;
        }
        return true;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    }

}

var staffId;
function setStaffId(obj) {
    staffId = obj.id;
}
/**********Start code To Change Id @AUTHOR:PRIYA04JUNE13********/
function getStaffHome() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajax_loading_div").style.visibility = "hidden";
            document.getElementById("staff_middle_body").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omehsbdv.php?staffId=" + staffId,
            true);
    xmlhttp.send();
}
/**********Start code To Change Id @AUTHOR:PRIYA04JUNE13********/
function getStaffDetailsForUpdate() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/omeustdv.php? staffId="
            + staffId, true);
    xmlhttp.send();
}
/**********Start of code to delete staff @author: SANDY26JUN13  *******/
/**********Start Code To Delete Staff @Author:PRIYA02JUL13**************/
/**********Start code to check entry in table @Author:PRIYA04JUL14************/
function deleteStaff() {
    confirm_box = confirm(delCustAlertMess + "\n\nDo you really want to delete this staff?");//change in line @AUTHOR: SANDY28JAN14
    if (confirm_box == true)
    {
        loadXMLDoc();
        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (xmlhttp.responseText == 'CustPresent') {
                    alert("Please first delete all customer belongs to this Staff !");
                } else {
                    document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
                    window.setTimeout(closeStaffMessDivDelay, 1000);
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        xmlhttp.open("GET", "include/php/omedtdel.php?staffId=" + staffId,
                true);
        xmlhttp.send();
    }
    function closeStaffMessDivDelay()
    {
        document.getElementById("staffMessDiv").innerHTML = "";
    }
}
/**********End code to check entry in table @Author:PRIYA04JUL14************/
/**********End Code To Delete Staff @Author:PRIYA02JUL13**************/
/********** End of code to delete staff @author: SANDY26JUN13  *******/
/*END code  Update Staff PRIYA15 */
/*START code PRIYA18 */
/***************Start code to add panel @Author:PRIYA24DEC13**********/
/*********Start to add condition for sell panel @Author:SHRI11JUN16**********/
function getCustForSalePurchase(custId, panelName, custType) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            if (panelName == 'SellPanel') {
//                document.getElementById("slPrMainDiv").innerHTML = xmlhttp.responseText;
//                document.getElementById("sellPurchaseDiv").innerHTML = 'PURCHASE PANEL';
//            } else {
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
//            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panelName == 'PurchasePanel') {
        xmlhttp.open("GET", "include/php/ogspisdv.php?custId=" + custId + "&custType=" + custType, true);
    } else if (panelName == 'SellPanel') {
        xmlhttp.open("GET", "include/php/ogprmndv.php?userId=" + custId + "&mainPanel=Customer&suppPanelName=addByMetal&metType=BUY", true);
    }

    xmlhttp.send();
}
/***************End code to add panel @Author:PRIYA24DEC13**********/
function getCustForNewOrder() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;         //PRIYA19
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ognomndv.php?custId="                                        //PRIYA19
            + custId, true);
    xmlhttp.send();
}
/*END code PRIYA18*/

/*START CODE TO UPDATE ACCOUNT ID @AUTHOR: PRIYA30 */


function getAccountsUpdate() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("ajaxLoadaccUpdateDiv").style.visibility = "hidden";
            document.getElementById("accountListDiv").innerHTML = xmlhttp.responseText;
            //document.getElementById("principalAmount").focus();
        } else {

            document.getElementById("ajaxLoadaccUpdateDiv").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ommpucdv.php?&accId=" + accId + "&firmId=" + firmId,
            true);
    xmlhttp.send();
}

function update_account(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertUpdateAccount;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
function alertUpdateAccount() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("mainMiddle").innerHTML = xmlhttp.responseText;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
/**********START Code To Change FileName In update_account() Func @AUTHOR:PRIYA27FEB13***************/
/*********Start code to add alert @Author:PRIYA02JUN14***************************/
/**************Start code to add param @Author:PRIYA07AUG14**************/
function upadateAccount(accId, accName, accFirmId, accType) {
    if (document.getElementById("accCreatedBy").value == 'oMunim') {
        if (document.getElementById("accUserAccount").value != accName) {
            alert('User can not modify account name created by oMunim !');
            document.getElementById("accUserAccount").focus();
            return false;
        } else if (document.getElementById("firmId").value != accFirmId) {
            alert('User can not modify firm created by oMunim !');
            document.getElementById("firmId").focus();
            return false;
        } else if (document.getElementById("accMainAccountId").value != accType) {
            alert('User can not modify account type created by oMunim !');
            document.getElementById("accMainAccountId").focus();
            return false;
        }
    }
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("updateAccSubButDiv").style.visibility = "hidden";
    if (validateAddAccountInputs()) {
        var poststr = "omgAccUserAccount=" + encodeURIComponent(document.getElementById("accUserAccount").value)
                + "&accId=" + encodeURIComponent(accId)
                + "&omgAccMainAccountId=" + encodeURIComponent(document.getElementById("accMainAccountId").value)
                + "&omgFirmId=" + encodeURIComponent(document.getElementById("firmId").value)             //CODE TO CHANGE ID  @AUTHOR: PRIYA29
                + "&omgAccName=" + encodeURIComponent(document.getElementById("accName").value)
                + "&omgAccountAddress1=" + encodeURIComponent(document.getElementById("accountAddress1").value)
                + "&omgCity=" + encodeURIComponent(document.getElementById("city").value)
                + "&omgPinCode=" + encodeURIComponent(document.getElementById("pinCode").value)
                + "&omgState=" + encodeURIComponent(document.getElementById("state").value)
                + "&omgCountry=" + encodeURIComponent(document.getElementById("country").value)
                + "&omgAccountPANNo=" + encodeURIComponent(document.getElementById("accountPANNo").value)
                + "&omgAccountSalesTaxNo=" + encodeURIComponent(document.getElementById("accountSalesTaxNo").value)
                + "&omgAccountCSTNo=" + encodeURIComponent(document.getElementById("accountCSTNo").value)
                + "&omgBankAccontNo=" + encodeURIComponent(document.getElementById("bankAccontNo").value)
                + "&omgBranchName=" + encodeURIComponent(document.getElementById("branchName").value)
                + "&omgAccBSRCode=" + encodeURIComponent(document.getElementById("accBSRCode").value)
                + "&omgAccIFSCode=" + encodeURIComponent(document.getElementById("accIFSCode").value)
                + "&omgAccCashBalDate=" + encodeURIComponent(document.getElementById("accOPBALDOBDay").value) + ' ' + encodeURIComponent(document.getElementById("accOPBALDOBMonth").value) + ' ' + encodeURIComponent(document.getElementById("accOPBALDOBYear").value)
                + "&omgAccCashBalance=" + encodeURIComponent(document.getElementById("accCashBalance").value)
                + "&omgAccCashBalCrDr=" + encodeURIComponent(document.getElementById("accCashBalCrDr").value)
                + "&omgAccountOtherInfo=" + encodeURIComponent(document.getElementById("accountOtherInfo").value);
        //alert(poststr);
        update_account('include/php/omacacup.php', poststr);
        return true;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("updateAccSubButDiv").style.visibility = "visible";
        return false;
    }
}
/**************End code to add param @Author:PRIYA07AUG14**************/
/*********End code to add alert @Author:PRIYA02JUN14***************************/
/**********END Code To Change FileName In update_account() Func @AUTHOR:PRIYA27FEB13***************/
/**********START Code To Change FileName To omacacud.php @AUTHOR:PRIYA27FEB13***************/
function getUpdateAccDiv(accId) {
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

    xmlhttp.open("POST", "include/php/omacacud.php?accId=" + accId, true);
    xmlhttp.send();
}
/**********END Code To Change FileName To omacacud.php @AUTHOR:PRIYA27FEB13***************/

//*********** Start Code for Update Language in Girvi Notice Panel @Author: KHUSH20JAN13 ************************
function validateGirviNoticeUpdateLang() {                                                                                             //  <!-- Modified By KHUSH09JAN13 -->
    if (validateSelectField(document.getElementById("loanNoticeDefaultLang").value, "Please select Language!") == false) {
        document.getElementById("loanNoticeDefaultLang").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("loanNoticeHeaderLabel").value, "Please enter Header Label!") == false)
    {
        document.getElementById("loanNoticeHeaderLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("custNameLabel").value, "Please enter Customer Name!") == false) {
        document.getElementById("custNameLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("dateLabel").value, "Please enter Date!") == false) {
        document.getElementById("dateLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("fatherNameLabel").value, "Please select Father or Spouse Name!") == false) {
        document.getElementById("fatherNameLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("custAddressLabel").value, "Please enter Customer Address!") == false) {
        document.getElementById("custAddressLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("loanDetailsLabel").value, "Please enter Loan Details!") == false) {
        document.getElementById("loanDetailsLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("principalAmountLabel").value, "Please enter Principal Amount!") == false) {
        document.getElementById("principalAmountLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("totalInterestLabel").value, "Please enter Total Interest!") == false) {
        document.getElementById("totalInterestLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("totalAmountLabel").value, "Please enter Total Amount!") == false) {
        document.getElementById("totalAmountLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("loanArticles").value, "Please enter Loan Articles!") == false) {
        document.getElementById("loanArticles").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("loanNoticeContent").value, "Please enter Loan Notice Content!") == false) {
        document.getElementById("loanNoticeContent").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("loanDateLabel").value, "Please enter Loan Date!") == false) {
        document.getElementById("loanDateLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("custSign").value, "Please enter Customer Sign!") == false) {
        document.getElementById("custSign").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("ownerSign").value, "Please enter Owner Sign!") == false)
    {
        document.getElementById("ownerSign").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("footerLabel").value, "Please enter Footer Label!") == false)
    {
        document.getElementById("footerLabel").focus();
        return false;
    }
    return true;
}
/****************Start code to change function @Author:PRIYA16APR14*************/
//function girvi_notice_Update_Lang(url, parameters) {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = alertGirviNoticeUpdateLang;
//    xmlhttp.open('POST', url, true);
//    xmlhttp.setRequestHeader('Content-Type',
//            'application/x-www-form-urlencoded');
//    xmlhttp.setRequestHeader("Content-length", parameters.length);
//    xmlhttp.setRequestHeader("Connection", "close");
//    xmlhttp.send(parameters);
//}
//function alertGirviNoticeUpdateLang() {
//    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//        document.getElementById("girviNoticeUpdateButt").style.visibility = "visible";
//        document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
//    } else {
//        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//        document.getElementById("girviNoticeUpdateButt").style.visibility = "hidden";
//    }
//}
/**************Start code to add margin @Author:PRIYA28DEC13*******************/
function girviNoticeUpdateLang() {

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("girviNoticeUpdateButt").style.visibility = "hidden";
    if (validateGirviNoticeUpdateLang()) {                                                       //  <!-- Modified By KHUSH21JAN13 -->
        return true;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("girviNoticeUpdateButt").style.visibility = "visible";
    }
    return false;
//
//    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//    document.getElementById("girviNoticeUpdateButt").style.visibility = "hidden";
//
//    if (validateGirviNoticeUpdateLang()) {                                                                                //  <!-- Modified By KHUSH21JAN13 -->
//        var poststr = "loanNoticeId=" + encodeURIComponent(document.getElementById("loanNoticeId").value)
//                + "&loanNoticeDefaultLang=" + encodeURIComponent(document.getElementById("loanNoticeDefaultLang").value)
//                + "&headerLabel=" + encodeURIComponent(document.getElementById("headerLabel").value)
//                + "&topMargin=" + encodeURIComponent(document.getElementById("loanNoticeTopMargin").value)
//                + "&leftMargin=" + encodeURIComponent(document.getElementById("loanNoticeLeftMargin").value)
//                + "&custNameLabel=" + encodeURIComponent(document.getElementById("custNameLabel").value)
//                + "&dateLabel=" + encodeURIComponent(document.getElementById("dateLabel").value)
//                + "&fatherOrSpouseNameLabel=" + encodeURIComponent(document.getElementById("fatherOrSpouseNameLabel").value)
//                + "&custAddressLabel=" + encodeURIComponent(document.getElementById("custAddressLabel").value)
//                + "&loanDetailsLabel=" + encodeURIComponent(document.getElementById("loanDetailLabel").value)
//                + "&principalAmountLabel=" + encodeURIComponent(document.getElementById("principalAmountLabel").value)
//                + "&totalInterestLabel=" + encodeURIComponent(document.getElementById("totalInterestLabel").value)
//                + "&totalAmountLabel=" + encodeURIComponent(document.getElementById("totalAmountLabel").value)
//                + "&loanArticles=" + encodeURIComponent(document.getElementById("loanArticles").value)
//                + "&loanNoticeContent=" + encodeURIComponent(document.getElementById("loanNoticeContent").value)
//                + "&loanDateLabel=" + encodeURIComponent(document.getElementById("loanDateLabel").value)
//                + "&tNC=" + encodeURIComponent(document.getElementById("tNC").value)
//                + "&custSign=" + encodeURIComponent(document.getElementById("custSign").value)
//                + "&ownerSign=" + encodeURIComponent(document.getElementById("ownerSign").value)
//                + "&footerLabel=" + encodeURIComponent(document.getElementById("footerLabel").value);
//
//        girvi_notice_Update_Lang('include/php/omppgnud.php', poststr);
//
//    }
//    else {
//        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//        document.getElementById("girviNoticeUpdateButt").style.visibility = "visible";
//    }
}
/****************End code to change function @Author:PRIYA16APR14*************/
/**************End code to add margin @Author:PRIYA28DEC13*******************/
//*********** End Code for Update Language in Girvi Notice Panel @Author: KHUSH08JAN13 ************************
/*START CODE TO Chnge File ognostlt.php @AUTHOR:PRIYA08JAN13*/
function getCustForNewOrder() {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;         //PRIYA19
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ognostlt.php?custId="                                        //PRIYA19
            + custId, true);
    xmlhttp.send();
}
/*END CODE TO Chnge File ognostlt.php @AUTHOR:PRIYA08JAN13*/

//*********** Start Code for Update Language in Form N/8 Panel @Author: KHUSH11JAN13 ************************
// Modified By KHUSH15JAN13
/*************Start code to change function @Author:PRIYA21MAR14***************/
/*************Start code to change function @Author:PRIYA22MAR14****************/
/*************Start code to validate the four field after address @Author: GAUR30MAY16****************/
function validateFormEightUpdateLang() {                                                                       //  <!-- Modified By KHUSH15JAN13 -->

    if (validateSelectField(document.getElementById("formEightDefaultLang").value, "Please select Language!") == false) {
        document.getElementById("formEightDefaultLang").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("sNoLabel").value, "Please enter Serial No.!") == false)
    {
        document.getElementById("sNoLabel").focus();
        return false;
    }
    /*else if (validateEmptyField(document.getElementById("headerLabel").value,"Please enter Header Label!") == false) {
     document.getElementById("headerLabel").focus();
     return false;
     }COMMENT @AUTHOR:SANDY18JUL13*/
    else if (validateEmptyField(document.getElementById("dateLabel").value, "Please enter Date!") == false) {
        document.getElementById("dateLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("custOrPawnerNameLabel").value, "Please enter Customer or Pawner Name!") == false) {
        document.getElementById("custOrPawnerNameLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("fatherNameLabel").value, "Please enter Father Name!") == false) {
        document.getElementById("fatherNameLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("addressLabel").value, "Please enter Address Label!") == false) {
        document.getElementById("addressLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("villageLabel").value, "Please enter Village Label!") == false) {
        document.getElementById("villageLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("tehsilLabel").value, "Please enter Tehsil Label!") == false) {
        document.getElementById("tehsilLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("cityLabel").value, "Please enter City Label!") == false) {
        document.getElementById("cityLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("pinCodeLabel").value, "Please enter Pin Code Label!") == false) {
        document.getElementById("pinCodeLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("articleOrItemNameLabel").value, "Please enter Article or Item Name!") == false) {
        document.getElementById("articleOrItemNameLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("piecesOrQuantityLabel").value, "Please enter Pieces or Quantity Label!") == false) {
        document.getElementById("piecesOrQuantityLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("metalLabel").value, "Please enter Metal Label!") == false) {
        document.getElementById("metalLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("grossWeightLabel").value, "Please enter Gross Weight!") == false) {
        document.getElementById("grossWeightLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("netWeightLabel").value, "Please enter Net Weight!") == false) {
        document.getElementById("netWeightLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("principalAmountLabel").value, "Please enter Principal Amount!") == false) {
        document.getElementById("principalAmountLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("rateOfInterestLabel").value, "Please enter Rate of Interest!") == false)
    {
        document.getElementById("rateOfInterestLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("itemValLabel").value, "Please enter Valution!") == false)
    {
        document.getElementById("itemValLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("redemptionPeriodLabel").value, "Please enter Redemption Period!") == false)
    {
        document.getElementById("redemptionPeriodLabel").focus();
        return false;
    }
    /*else if (validateEmptyField(document.getElementById("otherInfoLabel").value,"Please enter Other Info!") == false) 
     {
     document.getElementById("otherInfoLabel").focus();
     return false;
     } COMMENT @AUTHOR:SANDY18JUL13*/
    else if (validateEmptyField(document.getElementById("custSign").value, "Please enter Customer Sign!") == false)
    {
        document.getElementById("custSign").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("ownerSign").value, "Please enter Owner Sign!") == false)
    {
        document.getElementById("ownerSign").focus();
        return false;
    }

    return true;
}
/*************END code to validate the four field after address @Author: GAUR30MAY16****************/
/*************End code to change function @Author:PRIYA22MAR14****************/
//function form_eight_Update_Lang(url, parameters) {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = alertFormEightUpdateLang;
//    xmlhttp.open('POST', url, true);
//    xmlhttp.setRequestHeader('Content-Type',
//            'application/x-www-form-urlencoded');
//    xmlhttp.setRequestHeader("Content-length", parameters.length);
//    xmlhttp.setRequestHeader("Connection", "close");
//    xmlhttp.send(parameters);
//}
//function alertFormEightUpdateLang() {
//    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//        document.getElementById("formEightUpdateButt").style.visibility = "visible";
//        document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
//    }
//    else {
//        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//        document.getElementById("formEightUpdateButt").style.visibility = "hidden";
//    }
//}
/*********Start Code To Add ROI Check @AUTHOR:PRIYA06APR13*************/
/*********Start Code To Add Checkbox In Form8 Panel @AUTHOR:PRIYA26JUNE13*************/
function formEightUpdateLang() {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("formEightUpdateButt").style.visibility = "hidden";
    if (validateFormEightUpdateLang()) {                                                                            //  <!-- Modified By KHUSH21JAN13 -->
        return true;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("formEightUpdateButt").style.visibility = "visible";
    }
    return false;
}
/*************End code to change function @Author:PRIYA21MAR14***************/
/*********End Code To Add Checkbox In Form8 Panel @AUTHOR:PRIYA26JUNE13*************/
/*********End Code To Add ROI Check @AUTHOR:PRIYA06APR13*************/

//*********** End Code for Update Language in Form N/8 Panel @Author: KHUSH11JAN13 ************************
///Start code to get new order booking div @AUTHOR: PRIYA12JAN13
//Start code to comment unused function @Author:PRIYA20SEP13
//function getCustForNewOrderBookingDiv(custId) {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = function() {
//        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
//        }
//        else {
//
//            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//        }
//    };
//    xmlhttp.open("GET", "include/php/ognomndv.php?custId=" + custId, true);
//    xmlhttp.send();
//}
//End code to comment unused function @Author:PRIYA20SEP13
//End code to get new order booking div @AUTHOR: PRIYA12JAN13
/*START CODE TO Add custID @AUTHOR:PRIYA16JAN13*/
/************START CODE TO Chnge Filename @Author:PRIYA11SEP13**************/
function getCustForNewOrderStatus(custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        } else {

            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("GET", "include/php/ognomndv.php?custId=" + custId, true);
    xmlhttp.send();
}
/************End CODE TO Chnge Filename @Author:PRIYA11SEP13**************/
/*END CODE TO Add custId @AUTHOR:PRIYA16JAN13*/
//*********** Start Code for Update Language in Form R/7 Panel @Author: KHUSH14JAN13 ************************
/*************Start Code To add Radio button and change Ids In form7 @Author:PRIYA28JUN13**************/
/*************Start code to change function @Author:PRIYA24MAR14******************/
function validateFormSevenUpdateLang() {
    if (validateSelectField(document.getElementById("formSevenDefaultLang").value, "Please select Language!") == false) {
        document.getElementById("formSevenDefaultLang").focus();
        return false;
    }
    /*else if (validateEmptyField(document.getElementById("frm7headerLabel").value,"Please enter Header Label!") == false)
     {
     document.getElementById("frm7headerLabel").focus();
     return false;
     }COMMENT @AUTHOR:SANDY18JUL13*/
    else if (validateEmptyField(document.getElementById("sNoLabel").value, "Please enter Serial No.!") == false) {
        document.getElementById("sNoLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("dateLabel").value, "Please enter Date!") == false) {
        document.getElementById("dateLabel").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("formSevenContent").value, "Please enter Form Content!") == false) {
        document.getElementById("formSevenContent").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("principalAmount").value, "Please enter Principal Amount!") == false) {
        document.getElementById("principalAmount").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("totalInterest").value, "Please enter Total Interest!") == false) {
        document.getElementById("totalInterest").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("totalAmount").value, "Please enter Total Amount!") == false) {
        document.getElementById("totalAmount").focus();
        return false;
    }
    /* else if (validateEmptyField(document.getElementById("formSevenOtherInfo").value,"Please enter Other Information!") == false) {
     document.getElementById("formSevenOtherInfo").focus();
     return false;
     }COMMENT @AUTHOR:SANDY18JUL13*/
    else if (validateEmptyField(document.getElementById("custSign").value, "Please enter Customer Signature!") == false) {
        document.getElementById("custSign").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("ownerSign").value, "Please enter Owner Signature!") == false) {
        document.getElementById("ownerSign").focus();
        return false;
    }
    /*else if (validateEmptyField(document.getElementById("footerLabel").value,"Please enter Footer Label!") == false) {
     document.getElementById("footerLabel").focus();
     return false;
     }COMMENT @AUTHOR:SANDY18JUL13*/
    return true;
}
//function form_Seven_Update_Lang(url, parameters) {
//    loadXMLDoc();
//    xmlhttp.onreadystatechange = alertFormSevenUpdateLang;
//    xmlhttp.open('POST', url, true);
//    xmlhttp.setRequestHeader('Content-Type',
//            'application/x-www-form-urlencoded');
//    xmlhttp.setRequestHeader("Content-length", parameters.length);
//    xmlhttp.setRequestHeader("Connection", "close");
//    xmlhttp.send(parameters);
//}
//function alertFormSevenUpdateLang() {
//    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
//        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//        document.getElementById("formSevenUpdateButt").style.visibility = "visible";
//        document.getElementById("formSetupDiv").innerHTML = xmlhttp.responseText;
//    }
//    else {
//        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//        document.getElementById("formSevenUpdateButt").style.visibility = "hidden";
//    }
//}
function formSevenUpdateLang() {

    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("formSevenUpdateButt").style.visibility = "hidden";

    if (validateFormSevenUpdateLang()) {
        return true;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("formSevenUpdateButt").style.visibility = "visible";
    }
    return false;
}
/*************End code to change function @Author:PRIYA24MAR14******************/
/*************End Code To add Radio button and change Ids In form7 @Author:PRIYA28JUN13**************/
//*********** End Code for Update Language in Form R/7 Panel @Author: KHUSH14JAN13 ************************
/*************Start Code To add new function custAddNewFinance for Finance @Author:ANUJA30SEPT15**************/
function add_new_floan(url, parameters) {

    loadXMLDoc();

    xmlhttp.onreadystatechange = alertAddNewFLoan;

    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);

}
function alertAddNewFLoan() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        document.getElementById("principalAmount").focus(); //id changed @OMMODTAG SHRI_26OCT15
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    }

}
function custAddNewFinance(obj) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";

    var poststr = "custId=" + custId
            + "&firmId=" + encodeURIComponent(document.getElementById("custFirmId").value)
            + "&custType=" + encodeURIComponent(document.getElementById("custType").value);

    add_new_floan('include/php/omfandetl.php', poststr);//change in filename @AUTHOR: SANDY20NOV13

}
/*************Start Code To add new function custAddNewFinance for Finance @Author:ANUJA30SEPT15**************/
//**************************************Start code to add orders Button in list Author:SANT16APR16************************
function custOrderDetails(custId, custFirmId) {

    var poststr = "custId=" + custId +
            "&firmId=" + custFirmId;

    cust_udhaar_details('include/php/ognomndv.php', poststr);
}
function custRepairDetails(custId, custFirmId) {

    var poststr = "custId=" + custId +
            "&firmId=" + custFirmId;

    cust_udhaar_details('include/php/ogrpsbdv.php', poststr);
}
//**************************************End code to add orders Button in list Author:SANT16APR16************************

var gbMainPrincAmount = 0;
var gbTotalPrincipalAmount = 0;
var gbTotalFinalInterest = 0;
var gbProfitLoss = 0;
var gbTotalAmount = 0;
var gbCheckUncheck = 0;
var gbAllLoanIds = [];
var gbLoansCounter = 0;
var allLoanIds = '';
//***************************** Start Code to release multiple loans ****************************
function checkboxReleaseMultipleLoans(loanReleaseSumIndicator, custId, girviId,
        mainPrincAmount,
        totalPrincipalAmount,
        totalFinalInterest,
        profitLoss,
        totalAmount) {

    if (loanReleaseSumIndicator == 0) {
        gbMainPrincAmount = 0;
        gbTotalPrincipalAmount = 0;
        gbTotalFinalInterest = 0;
        gbProfitLoss = 0;
        gbTotalAmount = 0;
        gbCheckUncheck = 0;
        gbAllLoanIds = [];
        gbLoansCounter = 0;
        document.getElementById('loanReleaseSumIndicator').value = 1;
    }

    if (document.getElementById("relLoans" + girviId).checked)
    {

        gbAllLoanIds[gbLoansCounter] = parseInt(girviId);

        //alert(gbAllLoanIds[gbLoansCounter]);

        gbLoansCounter++;
        gbCheckUncheck++;

        if (gbMainPrincAmount == parseInt(document.getElementById("totalMainPrincipalAmt").value))
            gbMainPrincAmount = parseInt(0);

        if (gbTotalPrincipalAmount == parseInt(document.getElementById("totalPrincipalAmt").value))
            gbTotalPrincipalAmount = parseInt(0);

        if (gbTotalFinalInterest == parseInt(document.getElementById("totalInterestAmt").value))
            gbTotalFinalInterest = parseInt(0);

        if (gbProfitLoss == parseInt(document.getElementById("totalProfitLoss").value))
            gbProfitLoss = parseInt(0);

        if (gbTotalAmount == parseInt(document.getElementById("totalAmount").value))
            gbTotalAmount = parseInt(0);

        gbMainPrincAmount += parseInt(mainPrincAmount);
        gbTotalPrincipalAmount += parseInt(totalPrincipalAmount);
        gbTotalFinalInterest += parseInt(totalFinalInterest);
        gbProfitLoss += parseInt(profitLoss);
        gbTotalAmount += parseInt(totalAmount);


    } else {

        for (var i = 0; i <= gbAllLoanIds.length; i++) {
            if (gbAllLoanIds[i] == girviId) {
                gbAllLoanIds.splice(i, 1);
            }
        }
        gbCheckUncheck--;

        gbMainPrincAmount -= parseInt(mainPrincAmount);
        gbTotalPrincipalAmount -= parseInt(totalPrincipalAmount);
        gbTotalFinalInterest -= parseInt(totalFinalInterest);
        gbProfitLoss -= parseInt(profitLoss);
        gbTotalAmount -= parseInt(totalAmount);

        if ((gbMainPrincAmount == 0 || gbMainPrincAmount == '0') && gbCheckUncheck <= 0)
            gbMainPrincAmount = parseInt(document.getElementById("totalMainPrincipalAmt").value);

        if ((gbTotalPrincipalAmount == 0 || gbTotalPrincipalAmount == '0') && gbCheckUncheck <= 0)
            gbTotalPrincipalAmount = parseInt(document.getElementById("totalPrincipalAmt").value);

        if ((gbTotalFinalInterest == 0 || gbTotalFinalInterest == '0') && gbCheckUncheck <= 0)
            gbTotalFinalInterest = parseInt(document.getElementById("totalInterestAmt").value);

        if ((gbProfitLoss == 0 || gbProfitLoss == '0') && gbCheckUncheck <= 0)
            gbProfitLoss = parseInt(document.getElementById("totalProfitLoss").value);

        if ((gbTotalAmount == 0 || gbTotalAmount == '0') && gbCheckUncheck <= 0)
            gbTotalAmount = parseInt(document.getElementById("totalAmount").value);
    }

    document.getElementById("mainPrincipalAmtDiv").innerHTML = formatInIndianStyleJS(gbMainPrincAmount) + '.00';
    document.getElementById("totalPrincipalAmtDiv").innerHTML = formatInIndianStyleJS(gbTotalPrincipalAmount) + '.00';
    document.getElementById("totalIntAmtDiv").innerHTML = formatInIndianStyleJS(gbTotalFinalInterest) + '.00';
    document.getElementById("totalProfitLossAmtDiv").innerHTML = formatInIndianStyleJS(gbProfitLoss) + '.00';
    document.getElementById("totalAmtDiv").innerHTML = formatInIndianStyleJS(gbTotalAmount) + '.00';

    document.getElementById("totalPrincipalAmtVar").value = gbTotalPrincipalAmount;
    document.getElementById("totalInterestAmtVar").value = gbTotalFinalInterest;
    document.getElementById("totalAmountVar").value = gbTotalAmount;


    releaseSelectedLoansDiv(custId);
}

function formatInIndianStyleJS(x) {
    x = x.toString();
    var lastThree = x.substring(x.length - 3);
    var otherNumbers = x.substring(0, x.length - 3);
    if (otherNumbers != '')
        lastThree = ',' + lastThree;
    var res = otherNumbers.replace(/\B(?=(\d{2})+(?!\d))/g, ",") + lastThree;
    return(res);
}

function releaseSelectedLoansDiv(custId) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("releaseMultipleLoansDiv").style.visibility = "visible";
            document.getElementById("releaseMultipleLoansDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };

    if (gbAllLoanIds.length == 0) {
        allLoanIds = '';
        gbAllLoanIds = [];
        gbLoansCounter = 0;
    }
    allLoanIds = gbAllLoanIds.join('|');

    var poststr = "custId=" + custId
            + "&totalPrincipalAmt=" + encodeURIComponent(document.getElementById("totalPrincipalAmtVar").value)
            + "&totalInterestAmt=" + encodeURIComponent(document.getElementById("totalInterestAmtVar").value)
            + "&totalAmount=" + encodeURIComponent(document.getElementById("totalAmountVar").value)
            + "&allLoanIds=" + allLoanIds;

    xmlhttp.open("POST", "include/php/olchacgvrel.php?" + poststr, true);
    xmlhttp.send();

}

function releaseSelectedLoans(custId, allLoanIds, DOBDay, DOBMonth, DOBYear, releaseDiscountAmt) {
    //alert(allLoanIds);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("releaseMultipleLoansDiv").style.visibility = "visible";
            //alert(xmlhttp.responseText);
            document.getElementById("cust_middle_body").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };


    var poststr = "custId=" + custId
            + "&allLoanIds=" + allLoanIds
            + "&DOBDay=" + DOBDay
            + "&DOBMonth=" + DOBMonth
            + "&DOBYear=" + DOBYear
            + "&releaseDiscountAmt=" + releaseDiscountAmt;

    //alert(poststr);

    xmlhttp.open("POST", "include/php/olgrgvrlfrmch.php?" + poststr, true);
    xmlhttp.send();

}
//***************************** End Code to release multiple loans ******************************

//*******************************************************************************************
//******* START CODE TO CHANGE OR DELETE CUSTOMER AND CUSTOMER TRANSACTION @RATNAKAR02FEB2018
//*******************************************************************************************
// MODIFICATION :
// 1. MOVED FROM ADVANCEMETAL.JS TO EMUPDATEOWNER.JS AFTER DISCUSSION WITH LOVER SIR @RATNAKAR 12FEB2018

function userDelete(counter, panel, userId, action) {
    loadXMLDoc()
//    alert(panel);

    // IT WILL STORE BOOLEAN VALUE FOR CUSTOMER RELASE AND PARMANENT CUSTOMER, TRANSACTION DELETE
    confirm_box_customer_release = false; // FOR CUSTOMER DEACTIVATION
    confirm_box_customer_delete_per = false; // FOR CUSTOMER DEACTIVATION
    confirm_box_customer_delete_trans = false; // FOR CUSTOMER DEACTIVATION

    // IT WILL SET CUSTOMER STATUS ACCORDING CUSTOMER CHOOSED OPTIONS
    customerDeactivate = false; // FOR CUSTOMER DEACTIVATION
    customerDelete = false; // FOR CUSTOMER PERMANENT DELETE
    customertransdelete = false; // FOR TRANSACTION PERMANENT DELETE

    // IT WILL SET VARIABLE FOR MULTIPLE DELETE
    var deleteChk = new Array(); // FOR MULTIPLE SELECTION CHECKBOX
    var usertransId = new Array(); // FOR SELECTED CHECKBOX


    if (panel == 'customerDelete' || panel == 'releaseCustomerList') {
        confirm_box_customer_release = confirm("\n\n Do you really want to release this customer?");

        if (confirm_box_customer_release) {
            customerDeactivate = 'Yes';
            confirm_box_customer_delete_per = confirm("\n\n Do you really want to permanent delete this customer?");

            if (confirm_box_customer_delete_per)
                customerDelete = 'Yes';
            else
                customerDelete = 'No';
        } else {
            customerDeactivate = 'No';
        }
    }

    if (panel == 'custAllTransDelete' || customerDeactivate == 'Yes') {
        confirm_box_customer_delete_trans = confirm("\n\n Do you really want to permanent delete this customer transaction?");
        if (confirm_box_customer_delete_trans) {
            customertransdelete = 'Yes';
        } else {
            customertransdelete = 'No';
        }
    }

    if (customerDeactivate == 'Yes' || customerDelete == 'Yes' || customertransdelete == 'Yes') {

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                if (panel == 'customerDelete' || panel == 'custAllTransDelete') {
                    document.getElementById("mainBigMiddle").innerHTML = xmlhttp.responseText;
                } else if (panel == 'releaseCustomerList') {
                    document.getElementById("customerDetailsDiv").innerHTML = xmlhttp.responseText;
                } else {
                    document.getElementById("customerListDiv").innerHTML = xmlhttp.responseText;
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }

        };
    }

    if (panel == 'releaseCustomerList') {
        var chk = 0;
        userId = '';
        var counter = parseFloat(document.getElementById('counter').value);
        for (var i = 1; i <= counter; i++) {
            deleteChk[i] = document.getElementById('deletecheck' + i).checked;
            usertransId[i] = document.getElementById('IdForDelete' + i).value;
            if (deleteChk[i]) {
                if (userId == '') {
                    userId = usertransId[i];
                } else {
                    userId = userId + "," + usertransId[i];
                }
            }
        }
    }
//    alert('Great R D');
////     ('111111'+userId);
    xmlhttp.open("POST", "include/php/omlondel.php?userId=" + userId + "&panelName=" + panel + "&customerDelete=" + customerDelete + "&customertransdelete=" + customertransdelete + "&customerDeactivate=" + customerDeactivate, true);
    xmlhttp.send();
}

//*******************************************************************************************
//******* END CODE TO CHANGE OR DELETE CUSTOMER AND CUSTOMER TRANSACTION @RATNAKAR02FEB2018
//*******************************************************************************************
