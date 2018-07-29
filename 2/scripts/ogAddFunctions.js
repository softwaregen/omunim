//START CODE TO ADD Supplier Invoice @AUTHOR:PRIYA19JAN13
/***********Start code to add ids @Author:PRIYA04OCT13*********/
/***********Start code to change function @Author:PRIYA15OCT13*********/
/***********Start code to add div @Author:PRIYA19JAN14*****************/
/*********Start Code To add panel @Author:SANT14OCT16************/
var payPanelName;
function validateAddNewSuppInvoice(payPanelName) {
    var prefix = '';
    if (payPanelName == 'StockPayment' || payPanelName == 'StockPayUp') {
        prefix = 'stock';
    } else if (payPanelName == 'SlPrPayment' || payPanelName == 'SellPayUp') {
        prefix = 'slPr';
    } else if (payPanelName == 'RawPayment' || payPanelName == 'RawPayUp') {
        prefix = 'rwPr';
    } else if (payPanelName == 'NwOrPayment' || payPanelName == 'NwOrPayUp') {
        prefix = 'nwOr';
    }
    if (validateEmptyField(document.getElementById(prefix + "PayTotAmtBal").value, "Please enter value in Total Amount Balance Field!") == false) {
        document.getElementById(prefix + "PayTotAmtBal").focus();
        return false;
    } else {
        if (payPanelName == 'UdhaarPayment') {
            var depositAmt = parseFloat(parseInt(document.getElementById(prefix + "PayCashAmtRec").value) +
                    parseInt(document.getElementById(prefix + "PayChequeAmt").value) +
                    parseFloat(parseFloat(document.getElementById(prefix + "PayCardAmt").value) + parseFloat(document.getElementById(prefix + "PayTransChrgAmt").value)) +
                    parseFloat(parseFloat(document.getElementById(prefix + "PayOnlinePaymentAmt").value) - parseFloat(document.getElementById(prefix + "PayCommPayAmt").value)) +
                    parseInt(document.getElementById(prefix + "PayDiscount").value));
            var udhaarLeftAmt = parseInt(document.getElementById(prefix + "PayTotAmt").value);

            if (depositAmt > udhaarLeftAmt) {
                alert("Deposit amount(" + depositAmt + ") should not more than udhaar amount(" + udhaarLeftAmt + ")!");
                document.getElementById(prefix + "PayCashAmtRec").focus();
                return false;
            }
        } else {
            if (validateSelectField(document.getElementById(prefix + "FirmId").value, "Please select firm!") == false) {
                document.getElementById(prefix + "FirmId").focus();
                return false;
            }
        }
    }
    if (payPanelName == 'SuppOrderDelivery' || payPanelName == 'suppPendingOrderUp' || payPanelName == 'SuppPaymentPanel') {
        crystalEntered = 0;
        for (var dc = 1; dc <= getCrystalDiv; dc++) {
            // if(document.getElementById(prefix + "PayCryId" + dc).value != ""){
            if ((document.getElementById("suppPaydel" + dc).value != 'Deleted')) {
                if (validateEmptyField(document.getElementById(prefix + "PayCryId" + dc).value, "Please select Crystal Id" + dc + "!") == false) {
                    document.getElementById(prefix + "PayCryId" + dc).focus();
                    return false;
                } else if (validateEmptyField(document.getElementById(prefix + "PayCryQty" + dc).value, "Please select Crystal Qty" + dc + "!") == false) {
                    document.getElementById(prefix + "PayCryQty" + dc).focus();
                    return false;
                } else if (validateEmptyField(document.getElementById(prefix + "PayCryRate" + dc).value, "Please select Crystal Rate!" + dc + "!") == false) {
                    document.getElementById(prefix + "PayCryRate" + dc).focus();
                    return false;
                } else if (validateEmptyField(document.getElementById(prefix + "PayCryFinVal" + dc).value, "Please Select Crystal Final Valuation!" + dc + "!") == false) {
                    document.getElementById(prefix + "PayCryFinVal" + dc).focus();
                    return false;
                }
            }
            crystalEntered++;
            //}
        }
    }
    return true;
}
/*********End Code To add panel @Author:SANT14OCT16************/
/***********End code to add div @Author:PRIYA19JAN14*****************/
//function add_supp_invoice(url, parameters) {
//
//    loadXMLDoc();
//
//    xmlhttp.onreadystatechange = alertAddSuppInvoice;
//	
//    xmlhttp.open('POST', url, true);
//    xmlhttp.setRequestHeader('Content-Type',
//        'application/x-www-form-urlencoded');
//    xmlhttp.setRequestHeader("Content-length", parameters.length);
//    xmlhttp.setRequestHeader("Connection", "close");
//    xmlhttp.send(parameters);
//
//}
//function alertAddSuppInvoice() {
//    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) { 
//        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//        document.getElementById("suppHomeDiv").innerHTML = xmlhttp.responseText;
//    } else {
//        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
//
//    }
//
//}
//START CODE TO ADD Gold and Silver Fields @AUTHOR:PRIYA12JAN13
//START CODE TO ADD Supp Inv Fields @AUTHOR:PRIYA21JAN13
/*********Start Code To Add FirmId,AccId @AUTHOR:PRIYA30MAY13******************/
/*********Start Code To change id @Author:PRIYA04OCT13******************/
/*********Start Code To add price cut @Author:PRIYA20JAN14******************/
/***Start to change function to add variables of alert msgs @AUTHOR: SANDY29JAN14**********/
/*********Start Code To add panel @Author:PRIYA04FEB14************/
/*********Start Code To add panel @Author:SANT14OCT16************/
/*********Start Code To add panel @Author:SANT30NOV16************/
function addPayment() {
//    alert('Hi');
//    alert(document.getElementById('noOfPayInv').value);
//    document.getElementById('payPanelName').value == 'ImitationSellPayUp' || 
//    if (((document.getElementById('payPanelName').value == 'SellPayUp' || document.getElementById('payPanelName').value == 'CrySellPayUp') && document.getElementById('noOfPayInv').value > 0)) {
//        alert('You can not update this item');
//        return false;
//    } else 
//    {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("paySubButtDiv").style.visibility = "hidden";
    payPanelName = document.getElementById("payPanelName").value;
    transPanel = document.getElementById("transPanelName").value;
    if (transPanel == 'ADVMONEY' || transPanel == 'OnPurchase' || transPanel == 'UDHAAR' || transPanel == 'MONEY') {
        if (document.getElementById("PayFinAmtBalDisp").value != '0.00') {
            alert("PLEASE PAY/RECEIVE EXACT AMOUNT.");
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("paySubButtDiv").style.visibility = "visible";
            return false;
        }
    }

//        if (payPanelName == 'StockPayment' || payPanelName == 'StockPayUp' || payPanelName == 'InvoicePayUp' || payPanelName == 'SuppOrderUp' || payPanelName == 'NwOrPayUp' || payPanelName == 'SuppOrderDeliveryUp' || payPanelName == 'NwOrDelPaymentUp') {
//            var subPanel = document.getElementById("suppSubPanel").value;
//            var itemMainPanel = document.getElementById("itemMainPanel").value;
//            if (itemMainPanel == 'addByInv') {
//                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//                document.getElementById("paySubButtDiv").style.visibility = "visible";
//                if (validateSelectField(document.getElementById("firmId").value, "Please select Firm Id!") == false) {
//                    document.getElementById("firmId").focus();
//                    return false;
//                }
//                suppItmEntered = 0;
//                for (var dc = 1; dc <= getSuppItemDiv; dc++) {
//                    if ((document.getElementById('suppItemDel' + dc).value != 'Deleted')) {
//                        if (validateEmptyField(document.getElementById("suppItemGsWt" + dc).value, "Please enter gross weight of lot" + dc + "!") == false) {
//                            document.getElementById("suppItemGsWt" + dc).focus();
//                            return false;
//                        } else if (validateEmptyField(document.getElementById("suppItemNtWt" + dc).value, "Please enter net weight of lot" + dc + "!") == false) {
//                            document.getElementById("suppItemNtWt" + dc).focus();
//                            return false;
//                        } else if (validateEmptyField(document.getElementById("suppItemFnWt" + dc).value, "Please enter fine weight of lot" + dc + "!") == false) {
//                            document.getElementById("suppItemFnWt" + dc).focus();
//                            return false;
//                        } else if (validateEmptyField(document.getElementById("suppItemFinVal" + dc).value, "Please enter final valuation of lot" + dc + "!") == false) {
//                            document.getElementById("suppItemFinVal" + dc).focus();
//                            return false;
//                        }
//                    }
//                    suppItmEntered++;
//                }
//                document.getElementById("noOfSuppItem").value = suppItmEntered;
//                // }
//                confirm_box = confirm(addAlertMess + " Do you really want to continue!");
//                if (confirm_box != true) {
//                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//                    document.getElementById("paySubButtDiv").style.visibility = "visible";
//                    return false;
//                }
//
//            }
//        }
//        if (((payPanelName == 'StockPayment' || payPanelName == 'StockPayUp') && itemMainPanel == 'addByItems')) { // panel name removed:Author:SANT24NOV16
//            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
//            document.getElementById("paySubButtDiv").style.visibility = "visible";
//            var prefix = document.getElementById("prefix").value;
//            if (document.getElementById('payButClickId').value == 'true' && document.getElementById('noOfItemsInTable').value != 0) {
//            } else {
//                if (document.getElementById("itemSubPanel").value == 'addByItemsUp' || document.getElementById("itemSubPanel").value == 'itemsAddUp' || document.getElementById('simItemPanel').value == 'SimilarItem' ||
//                        document.getElementById("itemPanel").value == 'SuppOrderUp') {
//                    if (noOfCrystal == '' || noOfCrystal == undefined) {
//                        noOfCrystal = document.getElementById("noOfCry").value;
//                    }
//                }
//                if (validateSelectField(document.getElementById("firmId").value, "Please select Firm!") == false) {
//                    document.getElementById("firmId").focus();
//                    return false;
//                }
//                else if ((document.getElementById("addItemMetal").value != 'Other') && validateEmptyField(document.getElementById("addItemMetalRate").value, "Please enter Metal Rate!") == false) {
//                    document.getElementById("addItemMetalRate").focus();
//                    return false;
//                }
//                else if (validateEmptyField(document.getElementById("addItemId").value, "Please enter Item Id!") == false ||
//                        validateNum(document.getElementById("addItemId").value, "Accept only numeric characters without space character!") == false) {
//                    document.getElementById("addItemId").focus();
//                    return false;
//                }
//                else if (validateEmptyField(document.getElementById("addItemName").value, "Please enter Item Name!") == false) {
//                    document.getElementById("addItemName").focus();
//                    return false;
//                }
//                else if (validateEmptyField(document.getElementById("addItemPieces").value, "Please enter Item Pieces!") == false ||
//                        validateNum(document.getElementById("addItemPieces").value, "Accept only numeric characters without space!") == false) {
//                    document.getElementById("addItemPieces").focus();
//                    return false;
//                }
//                else if (validateEmptyField(document.getElementById("addItemGrossWeight").value, "Please enter Gross Weight!") == false ||
//                        validateNumWithDot(document.getElementById("addItemGrossWeight").value, "Accept only numeric characters without space!") == false) {
//                    document.getElementById("addItemGrossWeight").focus();
//                    return false;
//                } else if (document.getElementById('panelSimilarDiv').value != 'NoSimilarItem') {
//                    if (document.getElementById("addItemNetWeight").value == '') {
//                        document.getElementById("addItemNetWeight").value = document.getElementById("addItemGrossWeight").value;
////                        calItemPrice();
//                    }
//                    return true;
//                }
//                else if (document.getElementById('panelSimilarDiv').value != 'NoSimilarItem') {
//                    if (validateEmptyField(document.getElementById("addItemNetWeight").value, "Please enter Net Weight!") == false ||
//                            validateNumWithDot(document.getElementById("addItemNetWeight").value, "Accept only numeric characters without space!") == false) {
//                        document.getElementById("addItemNetWeight").focus();
//                        return false;
//                    }
//                } else if ((document.getElementById("addItemMetal").value != 'Other') && validateSelectField(document.getElementById("addItemTunch").value, "Please select Item Tunch or Purity!") == false) {
//                    document.getElementById("addItemTunch").focus();
//                    return false;
//                } else if (validateEmptyField(document.getElementById("addItemFinalVal").value, "Please enter Item Final Valuation!") == false ||
//                        validateNumWithDot(document.getElementById("addItemFinalVal").value, "Accept only numeric characters without space!") == false) {
//                    document.getElementById("addItemFinalVal").focus();
//                    return false;
//                } else if (noOfCrystal != '' && noOfCrystal != undefined && noOfCrystal != '0') {
//                    suppCryEntered = 0;
//                    for (var cry = 1; cry <= noOfCrystal; cry++) {
//                        if (document.getElementById("del" + cry).value != 'Deleted') {
//                            if (validateEmptyField(document.getElementById("addItemCryGSW" + cry).value, "Please enter Crystal Weight " + cry + "!") == false) {
//                                document.getElementById("addItemCryGSW" + cry).focus();
//                                return false;
//                            } else if (validateEmptyField(document.getElementById("addItemCryRate" + cry).value, "Please enter Crystal Rate " + cry + "!") == false) {
//                                document.getElementById("addItemCryRate" + cry).focus();
//                                return false;
//                            } else if (validateEmptyField(document.getElementById("addItemCryVal" + cry).value, "Please enter Crystal Valuation " + cry + "!") == false) {
//                                document.getElementById("addItemCryVal" + cry).focus();
//                                return false;
//                            }
//                            suppCryEntered++;
//                        }
//                    }
//                    document.getElementById("addItemCryCount").value = suppCryEntered;
//                }
//            }
//        }
    if (validateAddNewSuppInvoice(payPanelName)) {
        if (payPanelName == 'NwOrPayment' || payPanelName == 'SlPrPayment' || payPanelName == 'RawPayment' || payPanelName == 'StockPayment') {
            document.getElementById("totMetal").value = getMetalDiv;
        } else if (payPanelName == 'NwOrPayUp' || payPanelName == 'SellPayUp' || payPanelName == 'RawPayUp' || payPanelName == 'StockPayUp') {
            document.getElementById("totMetal").value = document.getElementById("noOfRawMet").value;
        }
        return true;
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("paySubButtDiv").style.visibility = "visible";
        return false;
    }
//    }
}
/*********End Code To add panel @Author:SANT30NOV16************/
/*********End Code To add panel @Author:SANT14OCT16************/
/*********End Code To add panel @Author:PRIYA04FEB14************/
/***End to change function to add variables of alert msgs @AUTHOR: SANDY29JAN14**********/
/*********End Code To add price cut @Author:PRIYA20JAN14******************/
/*********End Code To change function @Author:PRIYA15OCT13******************/
/*********End Code To change id @Author:PRIYA04OCT13******************/
/*********End Code To Add FirmId,AccId @AUTHOR:PRIYA30MAY13******************/
//END CODE TO ADD Supp Inv Fields @AUTHOR:PRIYA21JAN13
//END CODE TO ADD Supplier Invoice @AUTHOR:PRIYA19JAN13

//START Code To Add SellPurchase Payment Div @AUTHOR:PRIYA22FEB13
//Start code to comment @Author:PRIYA02DEC13
/*function validateSellPurchase(){
 if (validateEmptyField(document.getElementById("slPrItemFinalVal").value,"Please enter Valuation!") == false) {
 document.getElementById("slPrItemFinalVal").focus();
 return false;
 }
 return true;
 }
 function add_sell_purchase(url, parameters) {
 
 loadXMLDoc();
 
 xmlhttp.onreadystatechange = alertAddSellPurchase;
 
 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader('Content-Type',
 'application/x-www-form-urlencoded');
 xmlhttp.setRequestHeader("Content-length", parameters.length);
 xmlhttp.setRequestHeader("Connection", "close");
 xmlhttp.send(parameters);
 
 }
 function alertAddSellPurchase() {
 
 if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
 document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
 document.getElementById("sellPurchaseItemDetails").innerHTML = xmlhttp.responseText;
 } else {
 document.getElementById("main_ajax_loading_div").style.visibility = "visible";
 
 }
 
 }
 */
//End code to comment @Author:PRIYA02DEC13
//START CODE To Add SalesPurchase Invoice After Submit @AUTHOR:PRIYA24FEB13
/**********START CODE To Remove NetWght And NetWghtType Ids @AUTHOR:PRIYA28FEB13**************/
/**********START CODE To Add itstId @AUTHOR:PRIYA08MARCH13**************/
/**********START CODE To Add NT WT @AUTHOR:PRIYA15APR13**************/
/**********START CODE To Add Item Sell Date  @AUTHOR:PRIYA18APR13**************/
/************Start code to change function  @Author:PRIYA06FEB14***************/
/************Start code to add parseInt @Author:PRIYA03JUN14***************/
function sellPurchaseSubmit() {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("slPrSubButtDiv").style.visibility = "hidden";
    var stockDateDay = document.getElementById("slPrDOBDay").value;
    var stockDateMMM = document.getElementById("slPrDOBMonth").value;
    var stockDateYY = document.getElementById("slPrDOBYear").value;
    var stockDateStr = document.getElementById("slPrDOBMonth").value + ' ' + document.getElementById("slPrDOBDay").value + ', ' + document.getElementById("slPrDOBYear").value;
    var stockDate = new Date(stockDateStr); // stock Date
    var todayDate = new Date(); // Today Date

    var milliStockDate = stockDate.getTime();
    var milliTodayDate = todayDate.getTime();
    var datesDiff = milliTodayDate - milliStockDate;
    if (validateSellPurchaseInputs()) {//Start code to add condition for sell purchase item inputs validation @Author:SHRI05MAR15
        if (datesDiff < 0) {
            alert('Please Select the correct Date!');
            document.getElementById("slPrDOBDay").focus();
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("slPrSubButtDiv").style.visibility = "visible";
            return false;
        } else {
            if (stockDateMMM == 'FEB' || stockDateMMM == 'APR' || stockDateMMM == 'JUN' || stockDateMMM == 'SEP' || stockDateMMM == 'NOV') {
                if (stockDateMMM == 'FEB' && stockDateDay > 29 && stockDateYY % 4 == 0) {
                    alert('Please select correct Date, Month ' + stockDateMMM + ' for this selected year has only max 29 days.');
                    document.getElementById("slPrDOBDay").focus();
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("slPrSubButtDiv").style.visibility = "visible";
                    return false;
                }
                if (stockDateMMM == 'FEB' && stockDateDay > 28 && stockDateYY % 4 != 0) {
                    alert('Please select correct Date, Month ' + stockDateMMM + ' for this selected year has only max 28 days.');
                    document.getElementById("slPrDOBDay").focus();
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("slPrSubButtDiv").style.visibility = "visible";
                    return false;
                }
                if (stockDateDay > 30) {
                    alert('Please select correct Date, Month ' + stockDateMMM + ' has only max 30 days.');
                    document.getElementById("slPrDOBDay").focus();
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("slPrSubButtDiv").style.visibility = "visible";
                    return false;
                }
            }
            if (document.getElementById("panelName").value == 'SellDetUpPanel' || document.getElementById("panelName").value == 'SellPayUp') {
                if (parseInt(document.getElementById("totalPurQty").value) < ((parseInt(document.getElementById("totalSellQty").value) + parseInt(document.getElementById("slPrItemPieces").value)) - parseInt(document.getElementById("stockQty").value))) {
                    alert('Total Avail Qty:' + document.getElementById("totalPurQty").value + 'Total Sold Qty:' + document.getElementById("totalSellQty").value + '\nQuantity Exceeds Available Stock Quantity!\n Please Enter Correct Quantity !\n');
                    document.getElementById("slPrItemPieces").focus();
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("slPrSubButtDiv").style.visibility = "visible";
                    return false;
                }
            } else if (document.getElementById("panelName").value == '' && (parseInt(document.getElementById("slPrItemPieces").value) > parseInt(document.getElementById("stockQty").value))) {
                alert('Quantity Exceeds Available Stock Quantity!\n Please Enter Correct Quantity !');
                document.getElementById("slPrItemPieces").focus();
                document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                document.getElementById("slPrSubButtDiv").style.visibility = "visible";
                return false;
            } else {
                if (document.getElementById("stockCrystal").value != 0) {
                    document.getElementById("sellTotCrystal").value = document.getElementById("noOfCry").value; //changed @Author:PRIYA04DEC13
                }
                if (validateEmptyField(document.getElementById("slPrItemFinalVal").value, "Please enter Valuation!") == false) {
                    document.getElementById("slPrItemFinalVal").focus();
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("slPrSubButtDiv").style.visibility = "visible";
                    return false;
                } else {
                    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
                    document.getElementById("slPrSubButtDiv").style.visibility = "visible";
                    return true;
                }
                return false;
            }

        }
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("slPrSubButtDiv").style.visibility = "visible";
        return true;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("slPrSubButtDiv").style.visibility = "visible";
        return false;
    }//End code to add condition for sell purchase item inputs validation @Author:SHRI05MAR15
}
/***************Start code to add function for sell purchase item inputs validation @Author:SHRI05MAR15**************/
function validateSellPurchaseInputs() {

    if (validateSelectField(document.getElementById("slPrDOBDay").value, "Please select day!") == false) {
        document.getElementById("slPrDOBDay").focus();
        return false;
    } else if (validateSelectField(document.getElementById("slPrDOBMonth").value, "Please select month!") == false) {
        document.getElementById("slPrDOBMonth").focus();
        return false;
    } else if (validateSelectField(document.getElementById("slPrDOBYear").value, "Please select year!") == false) {
        document.getElementById("slPrDOBYear").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("slPrCustomerName").value, "Customer Name should not be null!") == false) {
        document.getElementById("slPrCustomerName").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("slPrPreInvoiceNo").value, "Please enter Pre Invoice Number!") == false) {
        document.getElementById("slPrPreInvoiceNo").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("slPrInvoiceNo").value, "Please enter Invoice Number!") == false) {
        document.getElementById("slPrInvoiceNo").focus();
        return false;
    }
    else if (validateSelectField(document.getElementById("firmId").value, "Please select Firm Id!") == false) {
        document.getElementById("firmId").focus();
        return false;
    } else if (validateSelectField(document.getElementById("sttr_account_id").value, "Please select Account Id!") == false) {
        document.getElementById("sttr_account_id").focus();
        return false;
    } else if (validateSelectField(document.getElementById("slPrItemMetal").value, "Please select Metal!") == false) {
        document.getElementById("slPrItemMetal").focus();
        return false;
    }
    else if ((document.getElementById("slPrItemMetal").value != 'Other') && validateEmptyField(document.getElementById("slPrItemMetalRate").value, "Please enter Metal Rate!") == false) {
        document.getElementById("slPrItemMetalRate").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("slPrItemCategory").value, "Please enter Item Category!") == false) {
        document.getElementById("slPrItemCategory").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("slPrItemName").value, "Please enter Item Name!") == false) {
        document.getElementById("slPrItemName").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("slPrItemPieces").value, "Please enter Item Pieces!") == false ||
            validateNum(document.getElementById("slPrItemPieces").value, "Accept only numeric characters without space!") == false) {
        document.getElementById("slPrItemPieces").focus();
        return false;
    }
    else if (validateEmptyField(document.getElementById("slPrItemGSW").value, "Please enter Gross Weight!") == false ||
            validateNumWithDot(document.getElementById("slPrItemGSW").value, "Accept only numeric characters without space!") == false) {
        document.getElementById("slPrItemGSW").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("slPrItemNTW").value, "Please enter Net Weight!") == false ||
            validateNumWithDot(document.getElementById("slPrItemNTW").value, "Accept only numeric characters without space!") == false) {
        document.getElementById("slPrItemNTW").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("sttr_purity").value, "Please enter Item Purity!") == false ||
            validateNumWithDot(document.getElementById("sttr_purity").value, "Accept only numeric characters without space!") == false) {
        document.getElementById("sttr_purity").focus();
        return false;
    } else if (validateEmptyField(document.getElementById("slPrItemFinalVal").value, "Please enter Final Valuation!") == false ||
            validateNumWithDot(document.getElementById("slPrItemFinalVal").value, "Accept only numeric characters without space!") == false) {
        document.getElementById("slPrItemFinalVal").focus();
        return false;
    } else {
        return true;
    }
    return false;
}
/***************End code to add function for sell purchase item inputs validation @Author:SHRI05MAR15**************/
/************End code to add parseInt @Author:PRIYA03JUN14***************/
/************End code to change function  @Author:PRIYA06FEB14***************/
/**********END CODE To Add Item Sell Date  @AUTHOR:PRIYA18APR13**************/
/**********END CODE To Add NT WT @AUTHOR:PRIYA15APR13**************/
/**********END CODE To Add itstId @AUTHOR:PRIYA08MARCH13**************/
/**********END CODE To Remove NetWght And NetWghtType Ids @AUTHOR:PRIYA28FEB13**************/
//END CODE To Add SalesPurchase Invoice After Submit @AUTHOR:PRIYA24FEB13

function validateSellPurchasePaymentInputs() {

    if (validateEmptyField(document.getElementById("slPrPayTotalAmtBal").value, "Please enter value in Total Amount Balance Field!") == false ||
            validateNumWithDot(document.getElementById("slPrPayTotalAmtBal").value, "Accept only numeric value!") == false) {
        document.getElementById("slPrPayTotalAmtBal").focus();
        return false;
    }

    return true;
}

function sell_Purchase_item_payment(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSellPurchaseItemPayment;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}
/***********Start Change in function to hide one div content @AUTHOR: SANDY9OCT13****************/
function alertSellPurchaseItemPayment() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("sellPurchasePayment").innerHTML = xmlhttp.responseText;
        //TO HIDE INVOICE DETAIL DIV B4 PAYMENT
        document.getElementById("slPrCurrentInvBeforePay").innerHTML = '';
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/***********End Change in function to hide one div content @AUTHOR: SANDY9OCT13****************/
/*********START CODE TO Add Cust Id @AUTHOR:PRIYA26FEB13 ************/
/*********Start CODE TO Add FirmId @AUTHOR:PRIYA08APR13 ************/
/*******************Start to add changes IN function @AUTHOR: SANDY21OCT13 *********************/
function sellPurchasePayment(preInv, postInv) {
    document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    document.getElementById("sellPurchasePaymentButt").style.visibility = "hidden";
    if (validateSellPurchasePaymentInputs()) {

        poststr = "sellPrPayPreInvoiceNo=" + encodeURIComponent(document.getElementById("slPrPayPreInvoiceNo").value)
                + "&sellPrPayInvoiceNo=" + encodeURIComponent(document.getElementById("slPrPayInvoiceNo").value)
                + "&sellPrCustId=" + encodeURIComponent(document.getElementById("custId").value)
                + "&sellPrPayFirm1=" + encodeURIComponent(document.getElementById("slPrPayFirm1").value)
                + "&slPrItemAddDate=" + encodeURIComponent(document.getElementById("slPrItemAddDate").value)
                + "&sellPrPaySelAccountId1=" + encodeURIComponent(document.getElementById("slPrPaySelAccountId1").value)
                + "&sellPrPayTotalGoldWGT=" + encodeURIComponent(document.getElementById("slPrPayTotalGoldWGT").value)
                + "&sellPrPayTotalGoldWGTType=" + encodeURIComponent(document.getElementById("slPrPayTotalGoldWGTType").value)
                + "&sellPrPayTotalSilverWGT=" + encodeURIComponent(document.getElementById("slPrPayTotalSilverWGT").value)
                + "&sellPrPayTotalSilverWGTType=" + encodeURIComponent(document.getElementById("slPrPayTotalSilverWGTType").value)
                + "&sellPrPayTotalGoldNetWGT=" + encodeURIComponent(document.getElementById("slPrPayTotalGoldNetWGT").value)
                + "&sellPrPayTotalGoldNetWGTType=" + encodeURIComponent(document.getElementById("slPrPayTotalGoldNetWGTType").value)
                + "&sellPrPayTotalSilverNetWGT=" + encodeURIComponent(document.getElementById("slPrPayTotalSilverNetWGT").value)
                + "&sellPrPayTotalSilverNetWGTType=" + encodeURIComponent(document.getElementById("slPrPayTotalSilverNetWGTType").value)
                + "&sellPrPayMetalTotWeightRec1=" + encodeURIComponent(document.getElementById("slPrPayMetalTotWeightRec1").value)
                + "&sellPrPayMetalTotWeightRecType1=" + encodeURIComponent(document.getElementById("slPrPayMetalTotWeightRecType1").value)
                + "&sellPrPayMetalTunch1=" + encodeURIComponent(document.getElementById("slPrPayMetalTunch1").value)
                + "&sellPrPayMetalFineWeight1=" + encodeURIComponent(document.getElementById("slPrPayMetalFineWeightRec1").value)
                + "&sellPrPayMetalRate1=" + encodeURIComponent(document.getElementById("slPrPayMetalRate1").value)
                + "&sellPrPayMetalValuation1=" + encodeURIComponent(document.getElementById("slPrPayMetalValuation1").value)
                + "&sellPrPayMetalDueWeight1=" + encodeURIComponent(document.getElementById("slPrPayMetalDueWeight1").value)
                + "&sellPrPayMetalDueWeightType1=" + encodeURIComponent(document.getElementById("slPrPayMetalDueWeightType1").value)
                + "&sellPrPayFirm2=" + encodeURIComponent(document.getElementById("slPrPayFirm2").value)
                + "&sellPrPaySelAccountId2=" + encodeURIComponent(document.getElementById("slPrPaySelAccountId2").value)
                + "&sellPrPayMetalTotWeightRec2=" + encodeURIComponent(document.getElementById("slPrPayMetalTotWeightRec2").value)
                + "&sellPrPayMetalTotWeightRecType2=" + encodeURIComponent(document.getElementById("slPrPayMetalTotWeightRecType2").value)
                + "&sellPrPayMetalTunch2=" + encodeURIComponent(document.getElementById("slPrPayMetalTunch2").value)
                + "&sellPrPayMetalFineWeight2=" + encodeURIComponent(document.getElementById("slPrPayMetalFineWeightRec2").value)
                + "&sellPrPayMetalRate2=" + encodeURIComponent(document.getElementById("slPrPayMetalRate2").value)
                + "&sellPrPayMetalValuation2=" + encodeURIComponent(document.getElementById("slPrPayMetalValuation2").value)
                + "&sellPrPayMetalDueWeight2=" + encodeURIComponent(document.getElementById("slPrPayMetalDueWeight2").value)
                + "&sellPrPayMetalDueWeightType2=" + encodeURIComponent(document.getElementById("slPrPayMetalDueWeightType2").value)
                + "&sellPrPayGoldWghtBal=" + encodeURIComponent(document.getElementById("slPrPayGoldWghtBal").value)
                + "&sellPrPaySilverWghtBal=" + encodeURIComponent(document.getElementById("slPrPaySilverWghtBal").value)
                + "&sellPrPayTotalAmt=" + encodeURIComponent(document.getElementById("slPrPayTotalAmt").value)
                + "&sellPrPayTotalAmtRec=" + encodeURIComponent(document.getElementById("slPrPayTotalAmtRec").value)
                + "&sellPrPayTotalAmtBal=" + encodeURIComponent(document.getElementById("slPrPayTotalAmtBal").value)
                + "&sellPrPaySelAccountId=" + encodeURIComponent(document.getElementById("stockPaySelAccountId").value)
                + "&sellPrPayChequeNo=" + encodeURIComponent(document.getElementById("slPrPayChequeNo").value)
                + "&sellPrPayTotalCashPaid=" + encodeURIComponent(document.getElementById("slPrPayTotalCashPaid").value)
                + "&sellPrPayTotalDiscount=" + encodeURIComponent(document.getElementById("slPrPayTotalDiscount").value)
                + "&sellPrPayOtherInfo=" + encodeURIComponent(document.getElementById("slPrPayOtherInfo").value)
                + "&sellPrItemMetal=" + encodeURIComponent(document.getElementById("slPrItemMetal").value)
                + "&sellPrItemName=" + encodeURIComponent(document.getElementById("slPrItemName").value)
                + "&sellPrFirmId=" + encodeURIComponent(document.getElementById("slPrFirmId").value)
                + "&sellPrAccId=" + encodeURIComponent(document.getElementById("slPrAccId").value)
                + "&sellPrPyCardTp=" + encodeURIComponent(document.getElementById("rawMetPayCardType").value)
                + "&preInv=" + encodeURIComponent(preInv)
                + "&postInv=" + encodeURIComponent(postInv);
        sell_Purchase_item_payment('include/php/ogsppyad.php', poststr);
        return true;
    }
    else {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("sellPurchasePaymentButt").style.visibility = "visible";
        return false;
    }
}
/*******************End to add changes IN function @AUTHOR: SANDY21OCT13 *********************/
/*********End CODE TO Add FirmId @AUTHOR:PRIYA08APR13 ************/
/*********END CODE TO Add Cust Id @AUTHOR:PRIYA26FEB13 ************/
//END Code To Add SellPurchase Payment Div @AUTHOR:PRIYA22FEB13
/********Start Code To Add Function For Supp Udhaar @AUTHOR:PRIYA07MAY13********/
/********Start Code To Add alert For Weight For Supp Udhaar @AUTHOR:PRIYA10MAY13********/
/*********Start code to change func @Author:PRIYA26APR14****************/
function validateSuppUdhaarPaymentInputs() {
    var metcnt = document.getElementById("metalCount").value
//    if (validateEmptyField((document.getElementById("suppUdhaarGoldWgtBal").value, "Please enter either Gold Balance or Silver Balance or Cash") == false) || ((document.getElementById("suppUdhaarSilverWgtBal").value, "Please enter Item Id!") == false)
//            || ((document.getElementById("suppUdhaarCash").value, "Please enter Item Id!") == false) ||
//            validateNum(document.getElementById("suppUdhaarGoldWgtBal").value, "Accept only numeric characters without space character!") == false) {
//        document.getElementById("suppUdhaarCash").focus();
//        return false;
//    }
    if ((document.getElementById("suppUdDpPayMetal1Val" + metcnt).value == 0) && ((document.getElementById("suppUdDpPayCashAmtRec").value == '') &&
            (document.getElementById("suppUdDpPayChequeAmt").value == '') && (document.getElementById("suppUdDpPayCardAmt").value == ''))) {
        alert("Please enter either Gold Balance or Silver Balance or Cash")
        document.getElementById("suppUdDpPayCashAmtRec").focus();
        return false;
    }
//    var totalGoldWtBal = document.getElementById("totalGdWtBal").value;
//    var totalSilverWtBal = document.getElementById("totalSlWtBal").value;
//
//    var suppUdInvGdWtBlType = document.getElementById("suppUdInvGoldWTBalType").value;
//    var suppUdInvSlWtBlType = document.getElementById("suppUdInvSilverWTBalType").value;
//
//    var suppUdhaarDepGdWtBl = document.getElementById("suppUdhaarGoldWgtBal").value;
//    var suppUdhaarDepGdWtBlType = document.getElementById("suppUdhaarGoldWgtBalType").value;
//    var suppUdhaarDepSlWtBl = document.getElementById("suppUdhaarSilverWgtBal").value;
//    var suppUdhaarDepSlWtBlType = document.getElementById("suppUdhaarSilverWgtBalType").value;
//
//
//    if (suppUdInvGdWtBlType != suppUdhaarDepGdWtBlType) {
//        confirm_box = confirm("You Have Entered Gold Weight Other Than Final Weight!\nDo You Want To Continue?");
//        if (confirm_box == true)
//        {
//            if (suppUdInvSlWtBlType != suppUdhaarDepSlWtBlType) {
//                confirm_box = confirm("You Have Entered Silver Weight Other Than Final Weight!\nDo You Want To Continue?");
//                if (confirm_box == true)
//                {
//                    if (validateEmptyField(document.getElementById("suppUdhaarAmtBal").value, "Please enter value in Total Amount Balance Field!") == false ||
//                            validateNumWithDot(document.getElementById("suppUdhaarAmtBal").value, "Accept only numeric value!") == false) {
//                        document.getElementById("suppUdhaarAmtBal").focus();
//                        return false;
//                    }
//                    return true;
//                }
//            }//if(Silver Wt Type)
//        }//if(Gold Wt Type Confirm box)    
//
//    }//if(Gold Wt Type)
//    else {
//        if (suppUdhaarDepGdWtBl > totalGoldWtBal) {
//            confirm_box = confirm("You Have Entered Gold Weight More Than Total Gold Weight!\nDo You Want To Continue?");
//            if (confirm_box == true)
//            {
//                if (suppUdInvSlWtBlType == suppUdhaarDepSlWtBlType) {
//                    if (suppUdhaarDepSlWtBl > totalSilverWtBal) {
//                        confirm_box = confirm("You Have Entered Silver Weight More Than Total Silver Weight!\nDo You Want To Continue?");
//                        if (confirm_box == true)
//                        {
//                            if (validateEmptyField(document.getElementById("suppUdhaarAmtBal").value, "Please enter value in Total Amount Balance Field!") == false ||
//                                    validateNumWithDot(document.getElementById("suppUdhaarAmtBal").value, "Accept only numeric value!") == false) {
//                                document.getElementById("suppUdhaarAmtBal").focus();
//                                return false;
//                            }
//                            return true;
//                        }
//                    }//if(Silver Wt Type)
//                }
//            }
//        }//if(Silver Wt)
//    }
//    if (suppUdInvSlWtBlType != suppUdhaarDepSlWtBlType) {
//        confirm_box = confirm("You Have Entered Silver Weight Other Than Final Weight!\nDo You Want To Continue?");
//        if (confirm_box == true)
//        {
//            if (validateEmptyField(document.getElementById("suppUdhaarAmtBal").value, "Please enter value in Total Amount Balance Field!") == false ||
//                    validateNumWithDot(document.getElementById("suppUdhaarAmtBal").value, "Accept only numeric value!") == false) {
//                document.getElementById("suppUdhaarAmtBal").focus();
//                return false;
//            }
//            return true;
//        }
//    } else {
//        if (suppUdhaarDepSlWtBl > totalSilverWtBal) {
//            confirm_box = confirm("You Have Entered Silver Weight More Than Total Silver Weight!\nDo You Want To Continue?");
//            if (confirm_box == true)
//            {
//                if (validateEmptyField(document.getElementById("suppUdhaarAmtBal").value, "Please enter value in Total Amount Balance Field!") == false ||
//                        validateNumWithDot(document.getElementById("suppUdhaarAmtBal").value, "Accept only numeric value!") == false) {
//                    document.getElementById("suppUdhaarAmtBal").focus();
//                    return false;
//                }
//                return true;
//            }
//        }//if(Silver Wt)
//    }
    /*****Start code to remove validations @Author:PRIYA15NOV13**********/
//    if (validateEmptyField(document.getElementById("suppUdhaarAmtBal").value,"Please enter value in Total Amount Balance Field!") == false ||
//        validateNumWithDot(document.getElementById("suppUdhaarAmtBal").value,"Accept only numeric value!") == false) {  
//        document.getElementById("suppUdhaarAmtBal").focus();
//        return false;
//    }
    /*****End code to remove validations @Author:PRIYA15NOV13**********/
    return true;
}
/*********End code to change func @Author:PRIYA26APR14****************/
/********End Code To Add alert For Weight For Supp Udhaar @AUTHOR:PRIYA10MAY13********/
function supp_udhaar_payment(url, parameters) {

    loadXMLDoc();
    xmlhttp.onreadystatechange = alertSuppUdhaarPayment;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertSuppUdhaarPayment() {

    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("suppUdhaarDiv").innerHTML = xmlhttp.responseText; //div changed @Author:PRIYA27APR14
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}
/*************Start to change in function to execute as per panel @AUTHOR: SANDY29SEP13 *****************/
/*********Start code to add date @Author:PRIYA26APR14************/
/*********Start code to add param @Author:PRIYA20JUN14************/
/*********Start code to add if else condition @Author:ANUJA25AUG15************/
function suppUdhaarPayment(panel, otherInfo) {
//    alert(panel);
    if (document.getElementById("panel").value == 'AddStock' && document.getElementById("invoiceRow").value > 0) {
        alert('You Can Not Submit This Item');
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        return false;
    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        document.getElementById("submiButt").style.visibility = "hidden";
        if (validateSuppUdhaarPaymentInputs()) {
            document.getElementById("metalCount").value = getMetalDiv;
            return true;
        }
    }
    document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
    document.getElementById("submiButt").style.visibility = "visible";
    return false;
}
/*********End code to add if else condition @Author:ANUJA25AUG15************/
/*********End code to add param @Author:PRIYA20JUN14************/
/*********End code to add date @Author:PRIYA26APR14************/
/*************Start to change in function to execute as per panel @AUTHOR: SANDY29SEP13 *****************/
/********End Code To Add Function For Supp Udhaar @AUTHOR:PRIYA07MAY13********/