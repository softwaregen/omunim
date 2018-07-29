/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
// TO RESET METAL BALANCE ACCORDING TO METAL AMOUNT @PRIYANKA-23MAR18
var setAmtToMetCon;
//
// Payment options change function
function itemsaleRateCut(rateCutId, goldFinalWeight, goldFinalWeightType, silverFinalWeight, silverFinalWeightType, goldPaidWeight, goldPaidWeightType, silverPaidWeight, silverPaidWeightType, goldRate, silverRate, payPanelName, userId, preInvNo, invNo, crystalVal, payOpt, otherChags, otherChgsBy, totalFinalBalance, totGoldBal, totSilverBal, totalValuation, PaymentReceiptPanel) {
    //alert('RateCut');
    document.getElementById('paymentMode').value = rateCutId;
    //
    //alert('PayPrevCashBalCRDR @@==' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);
    //alert('PayPrevTotAmt @@==' + document.getElementById(prefix + 'PayPrevTotAmt').value);    
    //
    var prefix = document.getElementById('prefix').value;
    var poststr = "paymentMode=" + encodeURIComponent(rateCutId) +
            "&goldPrevWeight=" + encodeURIComponent(document.getElementById(prefix + 'GoldWtPrevBal').value) +
            "&goldPrevWeightType=" + encodeURIComponent(document.getElementById(prefix + 'GoldWtPrevBalType').value) +
            "&silverPrevWeight=" + encodeURIComponent(document.getElementById(prefix + 'SilverWtPrevBal').value) +
            "&silverPrevWeightType=" + encodeURIComponent(document.getElementById(prefix + 'SilverWtPrevBalType').value) +
            "&goldFinalWeight=" + encodeURIComponent(goldFinalWeight) +
            "&silverFinalWeight=" + encodeURIComponent(silverFinalWeight) +
            "&goldFinalWeightType=" + encodeURIComponent(goldFinalWeightType) +
            "&silverFinalWeightType=" + encodeURIComponent(silverFinalWeightType) +
            "&silverPaidWeight=" + encodeURIComponent(silverPaidWeight) +
            "&goldPaidWeight=" + encodeURIComponent(goldPaidWeight) +
            "&silverPaidWeightType=" + encodeURIComponent(silverPaidWeightType) +
            "&goldPaidWeightType=" + encodeURIComponent(goldPaidWeightType) +
            "&goldRate=" + encodeURIComponent(goldRate) +
            "&silverRate=" + encodeURIComponent(silverRate) +
            "&payPanelName=" + encodeURIComponent(payPanelName) +
            "&mainPanelName=" + encodeURIComponent(document.getElementById('mainPanelName').value) +
            "&transPanelName=" + encodeURIComponent(document.getElementById('transPanelName').value) +
            "&preInvId=" + encodeURIComponent(preInvNo) +
            "&invId=" + encodeURIComponent(invNo) +
            "&userId=" + encodeURIComponent(userId) +
            "&otherChags=" + encodeURIComponent(otherChags) +
            "&otherChgsBy=" + encodeURIComponent(otherChgsBy) +
            "&crystalVal=" + encodeURIComponent(crystalVal) +
            "&payOpt=" + encodeURIComponent(payOpt) +
            "&totalFinalBalance=" + encodeURIComponent(totalFinalBalance) +
            "&totalGoldBalance=" + encodeURIComponent(totGoldBal) +
            "&totalSilverBalance=" + encodeURIComponent(totSilverBal) +
            "&labOrMkgChgs=" + encodeURIComponent(document.getElementById(prefix + 'PayTotOthChgs').value) +
            "&totalTaxAmount=" + encodeURIComponent(document.getElementById(prefix + 'TaxAmt').value) +
            "&goldPurAvgRate=" + encodeURIComponent(document.getElementById(prefix + 'GoldPurRate').value) +
            "&prevAmtBalance=" + encodeURIComponent(document.getElementById(prefix + 'PayPrevTotAmt').value) +
            "&silverPurAvgRate=" + encodeURIComponent(document.getElementById(prefix + 'SilverPurRate').value) +
            "&metType=" + encodeURIComponent(document.getElementById(prefix + 'transactionMode').value) +
            "&totalValuation=" + encodeURIComponent(totalValuation) +
            "&mainPanelDiv=" + encodeURIComponent(document.getElementById(prefix + 'userMainPanel').value) +
            "&goldPrevWtCRDR=" + encodeURIComponent(document.getElementById(prefix + 'GoldWtPrevBalCRDR').value) +
            "&silverPrevWtCRDR=" + encodeURIComponent(document.getElementById(prefix + 'SilverWtPrevBalCRDR').value) +
            "&goldPrevCRWt=" + encodeURIComponent(document.getElementById(prefix + 'GoldWtPrevBalCRAmt').value) +
            "&silverPrevCRWt=" + encodeURIComponent(document.getElementById(prefix + 'SilverWtPrevBalCRAmt').value) +
            "&goldPrevDRWt=" + encodeURIComponent(document.getElementById(prefix + 'GoldWtPrevBalDRAmt').value) +
            "&silverPrevDRWt=" + encodeURIComponent(document.getElementById(prefix + 'SilverWtPrevBalDRAmt').value) +
            "&prevCashBalCRDR=" + encodeURIComponent(document.getElementById(prefix + 'PayPrevCashBalCRDR').value) +
            "&prevCashBalCRAmt=" + encodeURIComponent(document.getElementById(prefix + 'PayPrevCashBalCRAmt').value) +
            "&accId=" + encodeURIComponent(document.getElementById(prefix + 'AccId').value) +
            "&prevCashBalDRAmt=" + encodeURIComponent(document.getElementById(prefix + 'PayPrevCashBalDRAmt').value) +
            "&PrevTotOpeningAmt=" + encodeURIComponent(document.getElementById('PrevTotOpeningAmt').value) +
            "&PrevTotOpeningAmtCRDR=" + encodeURIComponent(document.getElementById('PrevTotOpeningAmtCRDR').value) + 
            "&PaymentReceiptPanel=" + encodeURIComponent(document.getElementById('PaymentReceiptPanel').value);
    itemsale_rate_cut("include/php/ompaydet.php", poststr);
}
function itemsale_rate_cut(url, parameters) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = alertItemSaleRateCut;
    xmlhttp.open('POST', url, true);
    xmlhttp.setRequestHeader('Content-Type',
            'application/x-www-form-urlencoded');
    xmlhttp.setRequestHeader("Content-length", parameters.length);
    xmlhttp.setRequestHeader("Connection", "close");
    xmlhttp.send(parameters);
}

function alertItemSaleRateCut() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
        document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
        document.getElementById("rateCutDiv").innerHTML = xmlhttp.responseText;
        var prefix = document.getElementById('prefix').value;
        var metCount = 0;
        var metalVal = 0;
        if (document.getElementById("payPanelName").value == 'SlPrPayment' || 
            document.getElementById("payPanelName").value == 'StockReturnPanel' || 
            document.getElementById("payPanelName").value == 'RawPayment' || 
            document.getElementById("payPanelName").value == 'StockPayment' || 
            document.getElementById("payPanelName").value == 'NwOrDelPayment' ||
            document.getElementById("payPanelName").value == 'CustSellPayment' || 
            document.getElementById("payPanelName").value == 'NwOrPayment' || 
            document.getElementById("payPanelName").value == 'SuppOrderDelivery' ||
            document.getElementById("payPanelName").value == 'SuppAddOrder') {
            metCount = getMetalDiv;
            metalVal = document.getElementById('sttr_valuation' + metCount).value;
        } else if (document.getElementById("payPanelName").value == 'SellPayUp' || 
                   document.getElementById("payPanelName").value == 'RawPayUp' || 
                   document.getElementById("payPanelName").value == 'StockPayUp' || 
                   document.getElementById("payPanelName").value == 'SuppOrderUp' ||
                   document.getElementById("payPanelName").value == 'CustSellPayUp' || 
                   document.getElementById("payPanelName").value == 'NwOrPayUp' || 
                   document.getElementById("payPanelName").value == 'SuppOrderDeliveryUp') {
            metCount = document.getElementById("noOfRawMet").value;
            if (metCount > 0)
                metalVal = 1;
        }
        
        //alert('PayPrevCashBalCRDR == ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);  
        //alert('PaymentReceiptPanel == ' + document.getElementById('PaymentReceiptPanel').value); 
        //alert('paymentMode == ' + document.getElementById('paymentMode').value); 
        
        if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
            
            if (document.getElementById('PaymentReceiptPanel').value == 'RECEIPT' && 
               (document.getElementById(prefix + 'PayPrevCashBalCRDR').value == '' || 
                document.getElementById(prefix + 'PayPrevCashBalCRDR').value == null)) {
                document.getElementById(prefix + 'PayPrevCashBalCRDR').value = 'DR';
                
                if (document.getElementById('PrevTotOpeningAmtCRDR').value == '' ||
                    document.getElementById('PrevTotOpeningAmtCRDR').value == null) {
                    document.getElementById('PrevTotOpeningAmtCRDR').value = 'DR';
                }
                               
            } else if (document.getElementById('PaymentReceiptPanel').value == 'PAYMENT' &&
                      (document.getElementById(prefix + 'PayPrevCashBalCRDR').value == '' ||
                       document.getElementById(prefix + 'PayPrevCashBalCRDR').value == null)) {
                       document.getElementById(prefix + 'PayPrevCashBalCRDR').value = 'CR';
                       
                        if (document.getElementById('PrevTotOpeningAmtCRDR').value == '' ||
                            document.getElementById('PrevTotOpeningAmtCRDR').value == null) {
                            document.getElementById('PrevTotOpeningAmtCRDR').value = 'CR';
                        }
            }
        }
        
        //alert('PayPrevCashBalCRDR @@== ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);  
        
        //alert('MetalCount:' + metalVal);
        
        if (metCount > 0 && (metalVal != '' || metalVal != 0)) {
            calcStockItemBalance();
        } else if (document.getElementById("payPanelName").value != 'SchemePayment' && document.getElementById("payPanelName").value != 'SchemePayUp') {
            calcMetalRateCut(prefix);
        }
        
        //alert('PayPrevCashBalCRDR &&== ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);  
        
        if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut')           
            calcCashToMetal(prefix);
            calcWholeSaleRateCut(prefix);
            
        //alert('PayPrevCashBalCRDR %%== ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);  
            
        // CHANGE CODE FOR TAX CALCULATION AFTER RATE CUT @PRIYANKA-03MAY18
            
        //if (document.getElementById('paymentMode').value == 'RateCut') {
            calcRawMetStock(prefix);
            calcPaymentCashBalance(prefix);
        //} else {
            //calcPaymentCashBalance(prefix);
            //calcRawMetStock(prefix);
        //}  
            
        //alert('PayPrevCashBalCRDR ##== ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);  

//            if (document.getElementById('paymentMode').value == 'NoRateCut') {
//                // START @PRIYANKA-06APR18
//                   calcRawMetStock(prefix);
//                // END @PRIYANKA-06APR18
//            }

    } else {
        document.getElementById("main_ajax_loading_div").style.visibility = "visible";
    }
}

var goldWtBal = 0;
var silverWtBal = 0;
var GoldWtType = null;
var SilverWtType = null;
var stockDiv = null;
function calcStockItemBalance() {
    //alert(document.getElementById('paymentMode').value);
    //
    //alert('PayPrevCashBalCRDR %% ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);
    //
    var metalEntered = 0;
    var metalCount = document.getElementById("metalCount").value;
   
    if (document.getElementById('metalPanel').value == 'SlPrPayment' || 
        document.getElementById('metalPanel').value == 'SellPayUp') {
        prefix = 'slPr';
    } else if (document.getElementById('metalPanel').value == 'RawPayment' || 
               document.getElementById('metalPanel').value == 'RawPayUp') {
        prefix = 'rwPr';
    } else if (document.getElementById('metalPanel').value == 'StockPayment' ||
               document.getElementById('metalPanel').value == 'StockReturnPanel' || 
               document.getElementById('metalPanel').value == 'StockPayUp') {
        prefix = 'stock';
    } else if (document.getElementById('metalPanel').value == 'SuppUdhaDep') {
        var prefix = 'suppUdDp';
    }

    if (document.getElementById('metalPanel').value == 'NwOrPayment' || document.getElementById('metalPanel').value == 'NwOrPayUp') {
        prefix = 'nwOr';
    }

    if (document.getElementById('metalPanel').value == 'SlPrPayment' || 
        document.getElementById('metalPanel').value == 'StockReturnPanel' || 
        document.getElementById('metalPanel').value == 'RawPayment' ||
        document.getElementById('metalPanel').value == 'StockPayment' || 
        document.getElementById('metalPanel').value == 'SuppUdhaDep' || 
        document.getElementById('metalPanel').value == 'NwOrPayment') {
        count = 1;
        delId = 'del' + 1;
    } else if (document.getElementById('metalPanel').value == 'SellPayUp' || 
               document.getElementById('metalPanel').value == 'RawPayUp' ||
               document.getElementById('metalPanel').value == 'StockPayUp' || 
               document.getElementById('metalPanel').value == 'SuppPayUp' ||
               document.getElementById('metalPanel').value == 'NwOrPayUp') {
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
    var goldPurRemWt = 0;
    var silverPurRemWt = 0;
    
    //alert('getMetalDiv == ' + getMetalDiv);
    
    for (dc = getMetalDiv; dc > 0; dc--) {
        //alert(dc);
        //dc = getMetalDiv;
        if (document.getElementById('metalDel' + dc).value != 'Deleted') {
            var payTotalWeight1 = document.getElementById('sttr_nt_weight' + dc).value;
            var payTotalWeightType1 = document.getElementById('sttr_nt_weight_type' + dc).value;
            var payMetalRate1 = document.getElementById('sttr_metal_rate' + dc).value;
            var payMetalTunch1 = document.getElementById('sttr_purity' + dc).value;
            var metalWeight = (payTotalWeight1 * payMetalTunch1) / 100;
            var metalAvgRate = document.getElementById('PayMetal1AvgRate' + dc).value;
            var metalValByAvgRate = 0;
            silverPurRemWt = parseFloat(document.getElementById(prefix + 'SilverWtPrevBal').value).toFixed(3);
            goldPurRemWt = parseFloat(document.getElementById(prefix + 'GoldWtPrevBal').value).toFixed(3);
            document.getElementById('sttr_fine_weight' + dc).value = parseFloat(metalWeight).toFixed(3);

            if (document.getElementById('sttr_metal_type' + dc).value == 'Gold' || document.getElementById('sttr_metal_type' + dc).value == 'Alloy') {

                goldWeight = parseFloat(metalWeight);

                if (payTotalWeightType1 == 'KG') {
                    document.getElementById('sttr_valuation' + dc).value = ((goldWeight * payMetalRate1) * document.getElementById('gmWtInKg').value).toFixed(2);
                    metalValByAvgRate = ((goldWeight * metalAvgRate) * document.getElementById('gmWtInKg').value).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById('sttr_valuation' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value).toFixed(2);
                    metalValByAvgRate = ((goldWeight * metalAvgRate) / document.getElementById('gmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById('sttr_valuation' + dc).value = ((goldWeight * payMetalRate1) / document.getElementById('gmWtInMg').value).toFixed(2);
                    metalValByAvgRate = ((goldWeight * metalAvgRate) / document.getElementById('gmWtInMg').value).toFixed(2);
                }

                document.getElementById('PayMetal1Pnl' + dc).value = (document.getElementById('sttr_valuation' + dc).value - metalValByAvgRate).toFixed(2);

                if (document.getElementById('sttr_metal_type' + dc).value == 'Gold') {
                    var payMetalDueWeightType1 = document.getElementById(prefix + 'GoldTotFineWtType').value;
                    goldWeightType = payMetalDueWeightType1;

                    if (document.getElementById(prefix + 'GoldWtPrevBal').value == '' || document.getElementById(prefix + 'GoldWtPrevBal').value == 'NaN') {
                        document.getElementById(prefix + 'GoldWtPrevBal').value = 0;
                    }

                    if (gdBal == '') {
                        gdBal = calcWeightBalance(prefix, document.getElementById(prefix + 'GoldWtPrevBalCRDR').value, document.getElementById(prefix + 'GoldWtPrevBal').value, document.getElementById(prefix + 'GoldTotFineWt').value, 0, document.getElementById(prefix + 'RtCtGdCRDR'));//parseFloat(document.getElementById(prefix + 'GoldWtPrevBal').value) + parseFloat(document.getElementById(prefix + 'GoldTotFineWt').value);
                    }

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
                    } else if (payMetalDueWeightType1 == 'GM') {
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
                    } else if (payMetalDueWeightType1 == 'MG') {
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
                    document.getElementById('PayMetal1Bal' + dc).value = parseFloat(gdBal).toFixed(3);
                    document.getElementById('PayMetalBal1Type' + dc).value = payMetalDueWeightType1;
                    goldWtBal = parseFloat(gdBal).toFixed(3);
                    GoldWtType = payMetalDueWeightType1;
                    totRecGd += parseFloat(goldWeight);
                    totGoldAmt += parseFloat(document.getElementById('sttr_valuation' + dc).value);
                    
                    //alert('totGoldAmt == ' + totGoldAmt);

                    if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
                        document.getElementById(prefix + 'PayGoldWtBal').value = parseFloat(Math.abs(gdBal)).toFixed(3);
                        document.getElementById(prefix + 'PayGoldWtBalType').value = payMetalDueWeightType1;
                        if ((document.getElementById('metalPanel').value != 'SuppOrderUp' && document.getElementById('metalPanel').value != 'NwOrPayUp' && document.getElementById('metalPanel').value != 'InvoicePayUp' && document.getElementById('metalPanel').value != 'NwOrDelPaymentUp' && document.getElementById('metalPanel').value != 'SuppOrderDeliveryUp' && document.getElementById('metalPanel').value != 'StockPayUp' && document.getElementById('metalPanel').value != 'RawPayUp' && document.getElementById('metalPanel').value != 'SellPayUp' && document.getElementById('metalPanel').value != 'NwOrPayUp') && document.getElementById('paymentMode').value == 'RateCut') { //add panel for order panel prev balance :Author:SANT01DEC16
                            document.getElementById(prefix + 'GoldRtCtWtBal').value = parseFloat(Math.abs(gdBal)).toFixed(3);
                            document.getElementById(prefix + 'GoldRtCtWtBalType').value = payMetalDueWeightType1;
                            document.getElementById('metal1RtCtWtBal').value = parseFloat(Math.abs(gdBal)).toFixed(3) + '' + payMetalDueWeightType1; //Add Value this variable:Author:SANT24OCT16
                        }
                    }

                    if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
                        document.getElementById(prefix + 'GoldWtFinBal').value = parseFloat(Math.abs(gdBal)).toFixed(3);
                        document.getElementById(prefix + 'GoldWtFinBalType').value = payMetalDueWeightType1;
                    }
                }
                goldPurRemWt = parseFloat(parseFloat(gdBal) - parseFloat(document.getElementById(prefix + 'GoldWtPrevBal').value)).toFixed(3);
            }

            if (document.getElementById('sttr_metal_type' + dc).value == 'Silver') {

                silverWeight = parseFloat(metalWeight);

                if (payTotalWeightType1 == 'KG') {
                    document.getElementById('sttr_valuation' + dc).value = ((silverWeight * payMetalRate1 * document.getElementById('srGmWtInKg').value)).toFixed(2);
                    metalValByAvgRate = ((silverWeight * metalAvgRate * document.getElementById('srGmWtInKg').value)).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById('sttr_valuation' + dc).value = ((silverWeight * payMetalRate1) / document.getElementById('srGmWtInGm').value).toFixed(2);
                    metalValByAvgRate = ((silverWeight * metalAvgRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById('sttr_valuation' + dc).value = ((silverWeight * payMetalRate1) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                    metalValByAvgRate = ((silverWeight * metalAvgRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                }

                document.getElementById('PayMetal1Pnl' + dc).value = (document.getElementById('sttr_valuation' + dc).value - metalValByAvgRate).toFixed(2);
                payMetalDueWeightType1 = document.getElementById(prefix + 'SilverTotFineWtType').value;
                silverWeightType = payMetalDueWeightType1;

                if (document.getElementById(prefix + 'SilverWtPrevBal').value == '' || document.getElementById(prefix + 'SilverWtPrevBal').value == 'NaN') {
                    document.getElementById(prefix + 'SilverWtPrevBal').value = 0;
                }

                if (slBal == '') {
                    slBal = calcWeightBalance(prefix, document.getElementById(prefix + 'SilverWtPrevBalCRDR').value, document.getElementById(prefix + 'SilverWtPrevBal').value, document.getElementById(prefix + 'SilverTotFineWt').value, 0, document.getElementById(prefix + 'RtCtSlCRDR'));
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
                } else if (payMetalDueWeightType1 == 'GM') {
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

                document.getElementById('PayMetal1Bal' + dc).value = parseFloat(slBal).toFixed(3);
                document.getElementById('PayMetalBal1Type' + dc).value = payMetalDueWeightType1;

                if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
                    document.getElementById(prefix + 'PaySilverWtBal').value = parseFloat(Math.abs(slBal)).toFixed(3);
                    document.getElementById(prefix + 'PaySilverWtBalType').value = payMetalDueWeightType1;
                    if ((document.getElementById('metalPanel').value != 'RawPayUp' && document.getElementById('metalPanel').value != 'InvoicePayUp' && document.getElementById('metalPanel').value != 'SellPayUp' && document.getElementById('metalPanel').value != 'NwOrPayUp') && document.getElementById('paymentMode').value == 'RateCut') { //add panel for order panel prev balance :Author:SANT01DEC16
                        document.getElementById(prefix + 'SilverRtCtWtBal').value = parseFloat(Math.abs(slBal)).toFixed(3);
                        document.getElementById(prefix + 'SilverRtCtWtBalType').value = payMetalDueWeightType1;
                        document.getElementById('metal2RtCtWtBal').value = parseFloat(Math.abs(slBal)).toFixed(3) + '' + payMetalDueWeightType1; //Add Value this variable:Author:SANT24OCT16
                    }
                }

                if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
                    document.getElementById(prefix + 'SilverWtFinBal').value = parseFloat(Math.abs(slBal)).toFixed(3);
                    document.getElementById(prefix + 'SilverWtFinBalType').value = payMetalDueWeightType1;
                }

                silverWtBal = parseFloat(slBal).toFixed(3);
                SilverWtType = payMetalDueWeightType1;
                totRecSl += parseFloat(silverWeight);
                totSilverAmt += parseFloat(document.getElementById('sttr_valuation' + dc).value);
                silverPurRemWt = parseFloat(parseFloat(slBal) - parseFloat(document.getElementById(prefix + 'SilverWtPrevBal').value)).toFixed(3);
                
                //alert('totSilverAmt == ' + totSilverAmt);
            }

            if (document.getElementById(prefix + 'GoldTotFineWt').value != '' && goldWtBal == 0) {
                goldWtBal = parseFloat(document.getElementById(prefix + 'GoldTotFineWt').value);
                GoldWtType = document.getElementById(prefix + 'GoldTotFineWtType').value;
            }

            if (document.getElementById(prefix + 'SilverTotFineWt').value != '' && silverWtBal == 0) {
                silverWtBal = parseFloat(document.getElementById(prefix + 'SilverTotFineWt').value);
                SilverWtType = document.getElementById(prefix + 'SilverTotFineWtType').value;
            }

            document.getElementById(prefix + 'GoldWtRecBal').value = parseFloat(totRecGd).toFixed(3);
            document.getElementById(prefix + 'GoldWtRecBalType').value = goldWeightType;
            document.getElementById(prefix + 'SilverWtRecBal').value = parseFloat(totRecSl).toFixed(3);
            document.getElementById(prefix + 'SilverWtRecBalType').value = silverWeightType;

            if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
                document.getElementById(prefix + 'GoldAvgRate').value = parseFloat((((parseFloat(document.getElementById(prefix + 'GoldPrevRate').value) * parseFloat(document.getElementById(prefix + 'GoldWtPrevBal').value) / 100) + (parseFloat(document.getElementById(prefix + 'GoldPurRate').value) * parseFloat(goldPurRemWt)) / 100) / parseFloat(parseFloat(document.getElementById(prefix + 'GoldWtPrevBal').value) / 10 + parseFloat(goldPurRemWt) / 10)) * 10).toFixed(2);
                document.getElementById(prefix + 'SilverAvgRate').value = parseFloat((((parseFloat(document.getElementById(prefix + 'SilverPrevRate').value) * parseFloat(document.getElementById(prefix + 'SilverWtPrevBal').value) / 100) + (parseFloat(document.getElementById(prefix + 'SilverPurRate').value) * parseFloat(silverPurRemWt)) / 100) / parseFloat(parseFloat(document.getElementById(prefix + 'SilverWtPrevBal').value) / 10 + parseFloat(silverPurRemWt) / 10)) * 10).toFixed(2);
                if (document.getElementById(prefix + 'GoldAvgRate').value == 'NaN') {
                    document.getElementById(prefix + 'GoldAvgRate').value = document.getElementById(prefix + 'GoldPurRate').value;
                }
                if (document.getElementById(prefix + 'SilverAvgRate').value == 'NaN') {
                    document.getElementById(prefix + 'SilverAvgRate').value = document.getElementById(prefix + 'SilverPurRate').value;
                }
                document.getElementById('metal1WtRecBal').value = parseFloat(totRecGd).toFixed(3) + ' ' + goldWeightType;
                document.getElementById('metal2WtRecBal').value = parseFloat(totRecSl).toFixed(3) + ' ' + silverWeightType;
            }

            if (document.getElementById('sttr_valuation' + dc).value == '') {
                document.getElementById('sttr_valuation' + dc).value = 0;
            }

            totAmtRec += parseFloat(document.getElementById('sttr_valuation' + dc).value);

            //alert('paymentMode ==' + document.getElementById('paymentMode').value);
                     
            if (document.getElementById('paymentMode').value == 'ByCash') {
                document.getElementById(prefix + 'PayTotAmtRec').value = Math_round(parseFloat(totAmtRec)).toFixed(2);
                document.getElementById(prefix + 'PayTotAmtRecDisp').value = Math_round(parseFloat(totAmtRec)).toFixed(2); // METAL RECEIVED-PRIYANKA-19MAR18	
                document.getElementById(prefix + 'PayTotAmtExchangeDisp').value = Math_round(parseFloat(totAmtRec)).toFixed(2); // METAL EXCHANGE-PRIYANKA-19MAR18
                //alert('PayTotAmtExchangeDisp == ' + document.getElementById(prefix + 'PayTotAmtExchangeDisp').value);
                //alert('totAmtRec == ' + totAmtRec);

            }

            if (document.getElementById('paymentMode').value == 'RateCut') {
                if (document.getElementById('utin_metal_exchange_chk').checked) {
                    document.getElementById(prefix + 'PayTotAmtRec').value = Math_round(parseFloat(totAmtRec)).toFixed(2);
                    document.getElementById(prefix + 'PayTotAmtRecDisp').value = Math_round(parseFloat(totAmtRec)).toFixed(2); // METAL RECEIVED-PRIYANKA-19MAR18	
                    document.getElementById(prefix + 'PayTotAmtExchangeDisp').value = Math_round(parseFloat(totAmtRec)).toFixed(2); // METAL EXCHANGE-PRIYANKA-19MAR18
                }
            }

            document.getElementById(prefix + 'PayTotGoldAmtRec').value = parseFloat(totGoldAmt).toFixed(2);
            document.getElementById(prefix + 'PayTotSilverAmtRec').value = parseFloat(totSilverAmt).toFixed(2);

            if (document.getElementById('paymentMode').value == 'RateCut' ||
                    document.getElementById('paymentMode').value == 'NoRateCut') {
                calcWholeSaleRateCut(prefix);
                calcRawMetStock(prefix);
            }
            calcPaymentCashBalance(prefix);
        }
        
        //alert('totAmtRec == ' + totAmtRec +  ' = ' + dc);
        
        metalEntered++;
        //getMetalDiv--;
    }
    return false;
}

// CALCULATES METAL WEIGHTS.
var goldRateCutWeight = 0;
var silverRateCutWeight = 0;

function calcWholeSaleRateCut(prefix) {
 
    var gdRtCt = 0;
    var metalType;

    //alert('GoldWtPrevBalCRDR == ' + document.getElementById(prefix + 'GoldWtPrevBalCRDR').value);

    if ((document.getElementById(prefix + 'GoldWtPrevBal').value).trim() == '' || document.getElementById(prefix + 'GoldWtPrevBal').value == 'NaN') {
        document.getElementById(prefix + 'GoldWtPrevBal').value = 0;
    }

    if ((document.getElementById(prefix + 'GoldTotFineWt').value).trim() == '' || document.getElementById(prefix + 'GoldTotFineWt').value == 'NaN') {
        document.getElementById(prefix + 'GoldTotFineWt').value = 0;
    }

    if ((document.getElementById(prefix + 'GoldWtRecBal').value).trim() == '' || document.getElementById(prefix + 'GoldWtRecBal').value == 'NaN') {
        document.getElementById(prefix + 'GoldWtRecBal').value = 0;
    }

    var gdBal = calcWeightBalance(prefix, document.getElementById(prefix + 'GoldWtPrevBalCRDR').value, document.getElementById(prefix + 'GoldWtPrevBal').value, document.getElementById(prefix + 'GoldTotFineWt').value, document.getElementById(prefix + 'GoldWtRecBal').value, document.getElementById(prefix + 'RtCtGdCRDR'));

    //alert('gdBal == ' + gdBal);

    var goldWtType = document.getElementById(prefix + 'GoldTotFineWtType').value;
    //
    // alert('paymentMode == ' + document.getElementById('paymentMode').value);
    //
    // START @PRIYANKA-05APR18
    if (document.getElementById('paymentMode').value == 'NoRateCut') {
        //

        //alert('GoldWtPrevBalCRDR == ' + document.getElementById(prefix + 'GoldWtPrevBalCRDR').value);
        //alert('utin_cash_to_metalwt_CRDR == ' + document.getElementById('utin_cash_to_metalwt_CRDR').value);

        //alert('gdBal **== ' + gdBal);
        //alert('FinalGdCRDR **== ' + document.getElementById(prefix + 'FinalGdCRDR').value);

        // START @PRIYANKA-06APR18
        // START @PRIYANKA-05APR18
        if (document.getElementById('utin_cash_to_metalwt_CRDR').value != '' && document.getElementById('utin_cash_to_metalwt').value > 0) {

            if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                    document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR') ||
                    (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR')) {

                gdBal = (parseFloat(gdBal) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);
            }

            if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                    document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR')) {

                gdBal = (parseFloat(gdBal) - parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);

                if (gdBal < 0) {
                    document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('utin_cash_to_metalwt_CRDR').value;
                }

            }

            if (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                    (document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR' ||
                            document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR')) {

                gdBal = (parseFloat(gdBal) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);

                document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('utin_cash_to_metalwt_CRDR').value;

            }

        }
        // END @PRIYANKA-05APR18

        //alert('gdBal == ' + gdBal);
        //alert('FinalGdCRDR == ' + document.getElementById(prefix + 'FinalGdCRDR').value);

        // END @PRIYANKA-06APR18
        // START @PRIYANKA-06APR18
        if (document.getElementById('CashToGdMetalWtCRDR').value != '' && document.getElementById('CashToGdMetalWt').value > 0) {

            if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                    document.getElementById('CashToGdMetalWtCRDR').value == 'CR') ||
                    (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById('CashToGdMetalWtCRDR').value == 'DR')) {

                gdBal = (parseFloat(gdBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);
                document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;

            }

            if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                    document.getElementById('CashToGdMetalWtCRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {

                gdBal = (parseFloat(gdBal) - parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                if (gdBal < 0) {
                    document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                }

            }

            if (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
               (document.getElementById('CashToGdMetalWtCRDR').value == 'DR' ||
                document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {
            
                if ((document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR' &&
                     document.getElementById('CashToGdMetalWtCRDR').value == 'CR') ||
                    (document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR' &&
                     document.getElementById('CashToGdMetalWtCRDR').value == 'DR')) {
                 
                gdBal = (parseFloat(gdBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;

                } else if ((document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR' &&
                            document.getElementById('CashToGdMetalWtCRDR').value == 'DR') ||
                           (document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR' &&
                            document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {
                    
                            gdBal = (parseFloat(gdBal) - parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                            if (gdBal < 0) {
                                document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                            } else {
                                document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('utin_cash_to_metalwt_CRDR').value;
                            }
                    
                } else if (document.getElementById('utin_cash_to_metalwt_CRDR').value == '' &&
                          (document.getElementById('CashToGdMetalWtCRDR').value == 'DR' ||
                           document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {

                                 gdBal = (parseFloat(gdBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);
                                 document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                        }
                }
            }
        // END @PRIYANKA-06APR18

        //alert('gdBal ##== ' + gdBal);        
        //alert('FinalGdCRDR ##== ' + document.getElementById(prefix + 'FinalGdCRDR').value);
    }
    
    //alert('gdBal == ' + gdBal);
    
    // END @PRIYANKA-05APR18
    //
    if (document.getElementById('paymentMode').value == 'RateCut') {


        // START @PRIYANKA-05APR18
        if (document.getElementById('utin_cash_to_metalwt_CRDR').value != '' && document.getElementById('utin_cash_to_metalwt').value > 0) {

            if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                    document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR') ||
                    (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR')) {

                gdBal = (parseFloat(gdBal) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);
            }

            if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                    document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR')) {

                gdBal = (parseFloat(gdBal) - parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);

                //if (gdBal < 0) {
                document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('utin_cash_to_metalwt_CRDR').value;
                //}

            }

            if (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                    (document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR' ||
                            document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR')) {

                gdBal = (parseFloat(gdBal) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);

                document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('utin_cash_to_metalwt_CRDR').value;

            }

        }
        // END @PRIYANKA-05APR18

        //alert('gdBal == ' + gdBal);
        //alert('FinalGdCRDR == ' + document.getElementById(prefix + 'FinalGdCRDR').value);

        // END @PRIYANKA-06APR18
        // START @PRIYANKA-06APR18
        if (document.getElementById('CashToGdMetalWtCRDR').value != '' && document.getElementById('CashToGdMetalWt').value > 0) {

            if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                    document.getElementById('CashToGdMetalWtCRDR').value == 'CR') ||
                    (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById('CashToGdMetalWtCRDR').value == 'DR')) {

                gdBal = (parseFloat(gdBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);
                document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;

            }

            if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                    document.getElementById('CashToGdMetalWtCRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {

                gdBal = (parseFloat(gdBal) - parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                //if (gdBal < 0) {
                document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                //} 

            }

            if (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
               (document.getElementById('CashToGdMetalWtCRDR').value == 'DR' ||
                document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {

                 // START CODE FOR Sell Panel CASH TO METAL Issue @PRIYANKA-28JUNE18
                 if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                      document.getElementById('CashToGdMetalWtCRDR').value == 'CR' &&
                      document.getElementById(prefix + 'FinalGdCRDR').value == 'DR') ||
                     (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                      document.getElementById('CashToGdMetalWtCRDR').value == 'DR' &&
                      document.getElementById(prefix + 'FinalGdCRDR').value == 'CR')) {

                             if (gdBal < document.getElementById('CashToGdMetalWt').value) {
                                 document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                             }

                                gdBal = (parseFloat(gdBal) - parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                                //alert('gdBal ##== ' + gdBal);

                        } else if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                                    document.getElementById('CashToGdMetalWtCRDR').value == 'CR') &&
                                    document.getElementById(prefix + 'FinalGdCRDR').value == 'CR') {

                                 if (gdBal < document.getElementById('CashToGdMetalWt').value) {
                                     document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                                 }

                                 gdBal = (parseFloat(gdBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                                 //alert('gdBal @@== ' + gdBal);

                        } else {

                                 gdBal = (parseFloat(gdBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);
                                 //alert('gdBal $$== ' + gdBal);
                                 document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                        }
                        // END CODE FOR Sell Panel CASH TO METAL Issue @PRIYANKA-28JUNE18
            }
        }
        // END @PRIYANKA-06APR18


        if ((document.getElementById(prefix + 'GoldRtCtWtBal').value).trim() == '' || document.getElementById(prefix + 'GoldRtCtWtBal').value == 'NaN') {
            document.getElementById(prefix + 'GoldRtCtWtBal').value = 0;
        }

        var gdRtCt = parseFloat(document.getElementById(prefix + 'GoldRtCtWtBal').value);

        var goldRtCtWtType = document.getElementById(prefix + 'GoldRtCtWtBalType').value;

        if (gdBal == '' || gdBal == null) {
            gdBal = 0;
        }

        gdRtCt = convertWeight(gdRtCt, goldWtType, goldRtCtWtType);

        //alert('gdRtCt == ' + gdRtCt);
        // START @PRIYANKA-06APR18
        // START @PRIYANKA-05APR18
//        if (document.getElementById('utin_cash_to_metalwt_CRDR').value == '') {            
//            gdRtCt = convertWeight(gdRtCt, goldWtType, goldRtCtWtType);            
//        } else if (document.getElementById('utin_cash_to_metalwt_CRDR').value != '' && document.getElementById('utin_cash_to_metalwt').value > 0) {           
//            //alert('gdRtCt 1== ' + gdRtCt);
//            gdRtCt = (parseFloat(gdRtCt) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);
//            //alert('gdRtCt 2== ' + gdRtCt);
//        }
        // END @PRIYANKA-05APR18
        // END @PRIYANKA-06APR18
        document.getElementById('metal1RtCtWtBal').value = gdRtCt + ' ' + goldWtType;

    }

    //alert('FinalGdCRDR @@== ' + document.getElementById(prefix + 'FinalGdCRDR').value);
    
    //alert('gdBal @@== ' + gdBal);
    
    //alert('gdRtCt @@== ' + gdRtCt);

    if (document.getElementById('paymentMode').value != 'ByCash' && (document.getElementById('PaymentReceiptPanel').value != 'RECEIPT'
            || document.getElementById('PaymentReceiptPanel').value != 'PAYMENT')) {
        // START @PRIYANKA-06APR18
        // START @PRIYANKA-05APR18
        //if (document.getElementById('utin_cash_to_metalwt_CRDR').value == '') {        
        //document.getElementById('metal1WtBal').value = parseFloat(gdBal - gdRtCt).toFixed(3) + ' ' + goldWtType; // Gold final balance in rate cut division
        document.getElementById('metal1WtFinBal').value = Math.abs(parseFloat(gdBal - gdRtCt)).toFixed(3) + ' ' + goldWtType;
        //} else if (document.getElementById('utin_cash_to_metalwt_CRDR').value != '') {        
        //gdRtCt = (parseFloat(gdRtCt) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3)        
        //alert('gdBal == ' + gdBal);          
        //alert('gdRtCt == ' + gdRtCt);        
        //document.getElementById('metal1WtBal').value = parseFloat(gdBal - gdRtCt).toFixed(3) + ' ' + goldWtType;
        // document.getElementById('metal1WtFinBal').value = parseFloat(gdBal - gdRtCt).toFixed(3) + ' ' + goldWtType;        
        //alert('metal1WtFinBal == ' + document.getElementById('metal1WtFinBal').value);
        //}
        // END @PRIYANKA-05APR18
        // END @PRIYANKA-06APR18
        //
        //}
        // START OF CODE TO SET COLOR FOR GOLD WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        // START CODE TO Set color of metal balance (GD WT) according to CR/DR on payment panel @PRIYANKA-13MAR18
        if (document.getElementById(prefix + 'FinalGdCRDR').value == 'CR') {
            document.getElementById('metal1WtFinBal').style.color = 'green';
            document.getElementById(prefix + 'FinalGdCRDR').style.color = 'green';
            //document.getElementById('metal1WtFinBal').style.color = 'green';
            //document.getElementById(prefix + 'FinalGdCRDR').style.color = 'green';
        } else if (document.getElementById(prefix + 'FinalGdCRDR').value == 'DR') {
            document.getElementById('metal1WtFinBal').style.color = 'red';
            document.getElementById(prefix + 'FinalGdCRDR').style.color = 'red';
            //document.getElementById('metal1WtFinBal').style.color = 'red';
            //document.getElementById(prefix + 'FinalGdCRDR').style.color = 'red';
        }
        // END CODE TO Set color of metal balance (GD WT) according to CR/DR on payment panel @PRIYANKA-13MAR18
        // END OF CODE TO SET COLOR FOR GOLD WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        if ((document.getElementById(prefix + 'SilverWtPrevBal').value).trim() == '' || document.getElementById(prefix + 'SilverWtPrevBal').value == 'NaN') {
            document.getElementById(prefix + 'SilverWtPrevBal').value = 0;
        }

        if ((document.getElementById(prefix + 'SilverTotFineWt').value).trim() == '' || document.getElementById(prefix + 'SilverTotFineWt').value == 'NaN') {
            document.getElementById(prefix + 'SilverTotFineWt').value = 0;
        }

        if ((document.getElementById(prefix + 'SilverWtRecBal').value).trim() == '' || document.getElementById(prefix + 'SilverWtRecBal').value == 'NaN') {
            document.getElementById(prefix + 'SilverWtRecBal').value = 0;
        }

        var silverBal = calcWeightBalance(prefix, document.getElementById(prefix + 'SilverWtPrevBalCRDR').value, document.getElementById(prefix + 'SilverWtPrevBal').value, document.getElementById(prefix + 'SilverTotFineWt').value, document.getElementById(prefix + 'SilverWtRecBal').value, document.getElementById(prefix + 'RtCtSlCRDR'));
        var silverRtCt = 0;
        var silverWtType = document.getElementById(prefix + 'SilverTotFineWtType').value;
        
        if (document.getElementById('paymentMode').value == 'NoRateCut' || document.getElementById('paymentMode').value == 'RateCut') {
            
            // START CODE FOR SILVER CASE TO CALCULATE SL BAL @PRIYANKA-10APR18
            if (document.getElementById('utin_sl_cash_to_metalwt_CRDR').value != '' && document.getElementById('utin_sl_cash_to_metalwt').value > 0) {

                if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'CR') ||
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'DR')) {

                    silverBal = (parseFloat(silverBal) + parseFloat(document.getElementById('utin_sl_cash_to_metalwt').value)).toFixed(3);
                }

                if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'CR')) {

                    silverBal = (parseFloat(silverBal) - parseFloat(document.getElementById('utin_sl_cash_to_metalwt').value)).toFixed(3);

                    if (silverBal < 0) {
                        document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('utin_sl_cash_to_metalwt_CRDR').value;
                    }
                }

                if (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == '' &&
                   (document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'DR' ||
                    document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'CR')) {

                    silverBal = (parseFloat(silverBal) + parseFloat(document.getElementById('utin_sl_cash_to_metalwt').value)).toFixed(3);

                    document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('utin_sl_cash_to_metalwt_CRDR').value;

                }

            }
            // END CODE FOR SILVER CASE TO CALCULATE SL BAL @PRIYANKA-10APR18
            
            // START CODE FOR SILVER CASE TO CALCULATE SL BAL ACCORDING CASH CONVERT METAL @PRIYANKA-10APR18
            if (document.getElementById('CashToSlMetalWtCRDR').value != '' && document.getElementById('CashToSlMetalWt').value > 0) {

                if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById('CashToSlMetalWtCRDR').value == 'CR') ||
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById('CashToSlMetalWtCRDR').value == 'DR')) {

                    silverBal = (parseFloat(silverBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);
                    document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;

                }

                if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById('CashToSlMetalWtCRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById('CashToSlMetalWtCRDR').value == 'CR')) {

                    silverBal = (parseFloat(silverBal) - parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);

                    if (silverBal < 0) {
                        document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                    }

                }

                if (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == '' &&
                   (document.getElementById('CashToSlMetalWtCRDR').value == 'DR' ||
                    document.getElementById('CashToSlMetalWtCRDR').value == 'CR')) {

                    if (document.getElementById('paymentMode').value == 'RateCut') {
                        
                        //silverBal = (parseFloat(silverBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);
                        //document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                        
                    // START CODE FOR Sell Panel CASH TO METAL Issue @PRIYANKA-28JUNE18
                    if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == '' &&
                         document.getElementById('CashToSlMetalWtCRDR').value == 'CR' &&
                         document.getElementById(prefix + 'FinalSlCRDR').value == 'DR') ||
                        (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == '' &&
                         document.getElementById('CashToSlMetalWtCRDR').value == 'DR' &&
                         document.getElementById(prefix + 'FinalSlCRDR').value == 'CR')) {
                    
                         if(silverBal < document.getElementById('CashToSlMetalWt').value) {
                            document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                         }
                        
                         silverBal = (parseFloat(silverBal) - parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);

                         //alert('silverBal ##== ' + silverBal);
                     
                    } else if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == '' &&
                                document.getElementById('CashToSlMetalWtCRDR').value == 'CR') &&
                                document.getElementById(prefix + 'FinalSlCRDR').value == 'CR') {
                    
                                if (silverBal < document.getElementById('CashToSlMetalWt').value) {
                                    document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                                }
                    
                                silverBal = (parseFloat(silverBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);

                                //alert('silverBal ##== ' + silverBal);
 
                    } else {
                        
                        silverBal = (parseFloat(silverBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);
                        //alert('silverBal ##== ' + silverBal);
                        document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                    }
                    // END CODE FOR Sell Panel CASH TO METAL Issue @PRIYANKA-28JUNE18
                        
                        
                    }

                    if (document.getElementById('paymentMode').value == 'NoRateCut') {
                        
                        if ((document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'CR' &&
                             document.getElementById('CashToSlMetalWtCRDR').value == 'CR') ||
                            (document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'DR' &&
                             document.getElementById('CashToSlMetalWtCRDR').value == 'DR')) {

                            silverBal = (parseFloat(silverBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);

                            document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;

                        } else if ((document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'CR' &&
                                document.getElementById('CashToSlMetalWtCRDR').value == 'DR') ||
                                (document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'DR' &&
                                        document.getElementById('CashToSlMetalWtCRDR').value == 'CR')) {

                            silverBal = (parseFloat(silverBal) - parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);

                            if (silverBal < 0) {
                                document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                            } else {
                                document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('utin_sl_cash_to_metalwt_CRDR').value;
                            }

                        } else if (document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == '' &&
                                  (document.getElementById('CashToSlMetalWtCRDR').value == 'DR' ||
                                   document.getElementById('CashToSlMetalWtCRDR').value == 'CR')) {

                            silverBal = (parseFloat(silverBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);
                            document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                        }
                    }

                }

            }
            // END CODE FOR SILVER CASE TO CALCULATE SL BAL ACCORDING CASH CONVERT METAL @PRIYANKA-10APR18
                        
        }

        if (document.getElementById('paymentMode').value == 'RateCut') {

            if ((document.getElementById(prefix + 'SilverRtCtWtBal').value).trim() == '' || document.getElementById(prefix + 'SilverRtCtWtBal').value == 'NaN') {
                document.getElementById(prefix + 'SilverRtCtWtBal').value = 0;
            }

            var silverRtCt = parseFloat(document.getElementById(prefix + 'SilverRtCtWtBal').value);
            var silverRtCtWtType = document.getElementById(prefix + 'SilverRtCtWtBalType').value;

            if (silverBal == '' || silverBal == null) {
                silverBal = 0;
            }
            
            silverRtCt = convertWeight(silverRtCt, silverWtType, silverRtCtWtType);
            document.getElementById('metal2RtCtWtBal').value = silverRtCt + ' ' + silverWtType;
        }

        document.getElementById('metal2WtBal').value = Math.abs(parseFloat(silverBal - silverRtCt)).toFixed(3) + ' ' + silverWtType; // Final balance in rate cut division
        document.getElementById('metal2WtFinBal').value = Math.abs(parseFloat(silverBal - silverRtCt)).toFixed(3) + ' ' + silverWtType; // Final balance in display division
        //
        // START OF CODE TO SET COLOR FOR SILVER WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        // START CODE TO Set color of metal balance (SL WT) according to CR/DR on payment panel @PRIYANKA-13MAR18
        if (document.getElementById(prefix + 'FinalSlCRDR').value == 'CR') {
            document.getElementById('metal2WtFinBal').style.color = 'green';
            document.getElementById(prefix + 'FinalSlCRDR').style.color = 'green';
            //document.getElementById('metal2WtFinBal').style.color = 'green';
            //document.getElementById(prefix + 'FinalSlCRDR').style.color = 'green';
        } else if (document.getElementById(prefix + 'FinalSlCRDR').value == 'DR') {
            document.getElementById('metal2WtFinBal').style.color = 'red';
            document.getElementById(prefix + 'FinalSlCRDR').style.color = 'red';
            //document.getElementById('metal2WtFinBal').style.color = 'red';
            //document.getElementById(prefix + 'FinalSlCRDR').style.color = 'red';
        }
        // END CODE TO Set color of metal balance (SL WT) according to CR/DR on payment panel @PRIYANKA-13MAR18
        // END OF CODE TO SET COLOR FOR SILVER WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18

        // FOR GOLD CASE @PRIYANKA05APR18
        var utinCashToMetalWt = document.getElementById('utin_cash_to_metalwt').value;
        var CashToGdMetalWt = document.getElementById('CashToGdMetalWt').value;
        // FOR SILVER CASE @PRIYANKA-10APR18
        var utinCashToSLMetalWt = document.getElementById('utin_sl_cash_to_metalwt').value;
        var CashToSlMetalWt = document.getElementById('CashToSlMetalWt').value;

        if (utinCashToMetalWt > 0 || CashToGdMetalWt > 0 || utinCashToSLMetalWt > 0 || CashToSlMetalWt > 0) {
            //document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById(prefix + 'RtCtGdCRDR').value;
        } else {
            document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById(prefix + 'RtCtGdCRDR').value;
            document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById(prefix + 'RtCtSlCRDR').value;
        }

        //alert('FinalGdCRDR == ' + document.getElementById(prefix + 'FinalGdCRDR').value);

        calcRawMetStock(prefix);

    }

    calcPaymentCashBalance(prefix);
}

function calcWeightBalance(prefix, prevWtCRDR, prevWtBal, finalFineWt, totRecWt, rtCtCRDRID) {

    var wtBal = 0;
    var wtBalCRDR = null;

    if (prevWtCRDR == '' && (prevWtBal == '' || prevWtBal == 0)) {
        prevWtCRDR = document.getElementById(prefix + 'TransCRDR').value;
    }

    //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);
    //alert('prevWtCRDR == ' + prevWtCRDR);    
    //alert('finalFineWt == ' + finalFineWt);
    //alert('totRecWt == ' + totRecWt);
    //alert('prevWtBal == ' + prevWtBal);

    // START @PRIYANKA-29MAY18
    // START @PRIYANKA-26MAY18
    // PAYMENT PANEL : SELL PANEL SET TRANS CR/DR @PRIYANKA-23MAR18
    if ((document.getElementById("payPanelName").value == 'SlPrPayment' ||
         document.getElementById("payPanelName").value == 'SellPayUp' ||
         document.getElementById("payPanelName").value == 'RawPayUp' ||
         document.getElementById('transPanelName').value == 'SellPayment' ||
         document.getElementById("transPanelName").value == 'SellPayUp' ||
         document.getElementById("payPanelName").value == 'ImitationSellPayment' ||
         document.getElementById("payPanelName").value == 'ImitationSellPayUp' ||
         document.getElementById("payPanelName").value == 'CrySellPayment' ||
         document.getElementById("payPanelName").value == 'CrySellPayUp' ||
         document.getElementById('PaymentReceiptPanel').value == 'RECEIPT') && 
        (document.getElementById('paymentMode').value == 'RateCut' || 
         document.getElementById('paymentMode').value == 'NoRateCut')) {
         document.getElementById(prefix + 'TransCRDR').value = 'DR';
    }
    // END @PRIYANKA-26MAY18

    // PAYMENT PANEL : PURCHASE PANEL SET TRANS CR/DR @PRIYANKA-23MAR18
    if ((document.getElementById("payPanelName").value == 'StockPayment' ||
         document.getElementById("payPanelName").value == 'StockPayUp' ||
         document.getElementById("payPanelName").value == 'ImitationStockPayment' ||
         document.getElementById("payPanelName").value == 'ImitationStockPayUp' ||
         document.getElementById("payPanelName").value == 'CrystalStockPayment' ||
         document.getElementById("payPanelName").value == 'CrystalStockPayUp' ||
         document.getElementById("payPanelName").value == 'StockReturnPanel' ||
         document.getElementById('PaymentReceiptPanel').value == 'PAYMENT') &&
        (document.getElementById('paymentMode').value == 'RateCut' ||
         document.getElementById('paymentMode').value == 'NoRateCut')) {
         document.getElementById(prefix + 'TransCRDR').value = 'CR';
    }
    // END @PRIYANKA-29MAY18

    if ((prevWtCRDR == 'CR' && document.getElementById(prefix + 'TransCRDR').value == 'DR') ||
        (prevWtCRDR == 'DR' && document.getElementById(prefix + 'TransCRDR').value == 'CR')) {

        if (document.getElementById(prefix + 'TransCRDR').value == 'DR') {
            //
            wtBal = parseFloat(finalFineWt) - parseFloat(totRecWt) - parseFloat(prevWtBal);
            //
            //alert('wtBal 1== ' + wtBal);
            //
        } else if (document.getElementById(prefix + 'TransCRDR').value == 'CR') {
            //
            wtBal = parseFloat(prevWtBal) + parseFloat(totRecWt) - parseFloat(finalFineWt);
            //
            //alert('wtBal 2== ' + wtBal);
            //
        }

    } else if ((prevWtCRDR == 'CR' && document.getElementById(prefix + 'TransCRDR').value == 'CR') ||
               (prevWtCRDR == 'DR' && document.getElementById(prefix + 'TransCRDR').value == 'DR')) {

        //if (document.getElementById('utin_cash_to_metalwt_CRDR').value == '') {

        wtBal = parseFloat(finalFineWt) + parseFloat(prevWtBal) - parseFloat(totRecWt);
        wtBalCRDR = document.getElementById(prefix + 'TransCRDR').value;

        //alert('wtBal 3 == ' + wtBal);

        //} else if (document.getElementById('utin_cash_to_metalwt_CRDR').value != '') {

        //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);
        //alert('prevWtCRDR == ' + prevWtCRDR);
        //alert('utin_cash_to_metalwt_CRDR == ' + document.getElementById('utin_cash_to_metalwt_CRDR').value);

//        if (prevWtCRDR == 'CR' && document.getElementById(prefix + 'TransCRDR').value == 'CR' 
//            && document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR') {
//            
//           wtBal = parseFloat(finalFineWt) + parseFloat(prevWtBal) + parseFloat(document.getElementById('utin_cash_to_metalwt').value) - parseFloat(totRecWt);
//           wtBalCRDR = document.getElementById(prefix + 'TransCRDR').value;
//            
//        } else if ((prevWtCRDR == 'DR' && document.getElementById(prefix + 'TransCRDR').value == 'DR') 
//            && document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR') {
//            
//           wtBal = parseFloat(finalFineWt) + parseFloat(prevWtBal) + parseFloat(document.getElementById('utin_cash_to_metalwt').value) - parseFloat(totRecWt);
//           wtBalCRDR = document.getElementById(prefix + 'TransCRDR').value;
//           
//        } else if ((prevWtCRDR == 'CR' && document.getElementById(prefix + 'TransCRDR').value == 'CR') 
//            && document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR') {
//            
//           wtBal = parseFloat(finalFineWt) + parseFloat(prevWtBal) - parseFloat(document.getElementById('utin_cash_to_metalwt').value) - parseFloat(totRecWt);
//                      
//        } else if ((prevWtCRDR == 'DR' && document.getElementById(prefix + 'TransCRDR').value == 'DR') 
//            && document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR') {
//            
//           wtBal = parseFloat(finalFineWt) + parseFloat(prevWtBal) - parseFloat(document.getElementById('utin_cash_to_metalwt').value) - parseFloat(totRecWt);
//
//        }
//        
//        }

        //alert('wtBal 3 == ' + wtBal);

        if (wtBal < 0) {
            if (wtBalCRDR == 'DR')
                wtBalCRDR = 'CR';
            else
                wtBalCRDR = 'DR';
        }
    }

    if (wtBalCRDR == null) {
        if (wtBal < 0) {
            wtBalCRDR = 'CR';
        } else {
            wtBalCRDR = 'DR';
        }
    }

    //alert('wtBal ==' + wtBal);

    rtCtCRDRID.value = wtBalCRDR;
    return parseFloat(Math.abs(wtBal)).toFixed(3);
}

// CALCULATES RATE CUT AMOUNT.
function calcRawMetStock(prefix) {

    var weightBal = 0;

    if (document.getElementById(prefix + 'GoldWtPrevBal').value != '' || document.getElementById(prefix + 'GoldTotFineWt').value != '' || document.getElementById(prefix + 'GoldWtRecBal').value != '') {
        if (document.getElementById(prefix + 'GoldWtPrevBal').value == '' || document.getElementById(prefix + 'GoldWtPrevBal').value == 'NaN') {
            document.getElementById(prefix + 'GoldWtPrevBal').value = 0;
        }
        if (document.getElementById(prefix + 'GoldTotFineWt').value == '' || document.getElementById(prefix + 'GoldTotFineWt').value == 'NaN') {
            document.getElementById(prefix + 'GoldTotFineWt').value = 0;
        }
        if (document.getElementById(prefix + 'GoldWtRecBal').value == '' || document.getElementById(prefix + 'GoldWtRecBal').value == 'NaN') {
            document.getElementById(prefix + 'GoldWtRecBal').value = 0;
        }

        if (document.getElementById('paymentMode').value == 'RateCut') {

            if (document.getElementById(prefix + 'GoldRtCtWtBal').value == '' || document.getElementById(prefix + 'GoldRtCtWtBal').value == 'NaN') {
                document.getElementById(prefix + 'GoldRtCtWtBal').value = 0;
            }
            
            //alert('GoldRtCtWtBal == ' + document.getElementById(prefix + 'GoldRtCtWtBal').value);
            
            var gdRateCut = convertWeight(parseFloat(document.getElementById(prefix + 'GoldRtCtWtBal').value), document.getElementById(prefix + 'GoldTotFineWtType').value, document.getElementById(prefix + 'GoldRtCtWtBalType').value);

            totFinGdWtBal = calcWeightBalance(prefix, document.getElementById(prefix + 'GoldWtPrevBalCRDR').value, document.getElementById(prefix + 'GoldWtPrevBal').value, document.getElementById(prefix + 'GoldTotFineWt').value, document.getElementById(prefix + 'GoldWtRecBal').value, document.getElementById(prefix + 'RtCtGdCRDR')) - parseFloat(gdRateCut);

            //alert('gdRateCut **== ' + gdRateCut);
            //alert('totFinGdWtBal **== ' + totFinGdWtBal);

            // START @PRIYANKA-05APR18
            if (document.getElementById('utin_cash_to_metalwt_CRDR').value != '' && document.getElementById('utin_cash_to_metalwt').value > 0) {

                if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                        document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR') ||
                        (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                                document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR')) {

                    totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);
                }

                if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                        document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR') ||
                        (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                                document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR')) {

                    totFinGdWtBal = (parseFloat(totFinGdWtBal) - parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);

                    //if (totFinGdWtBal < 0) {
                    document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('utin_cash_to_metalwt_CRDR').value;
                    //} 
                }

                if (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                        (document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR' ||
                                document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR')) {

                    totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);
                    
                    document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('utin_cash_to_metalwt_CRDR').value;

                }

            }
            // END @PRIYANKA-05APR18

            // START @PRIYANKA-06APR18
            if (document.getElementById('CashToGdMetalWtCRDR').value != '' && document.getElementById('CashToGdMetalWt').value > 0) {

                if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                        document.getElementById('CashToGdMetalWtCRDR').value == 'CR') ||
                        (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                                document.getElementById('CashToGdMetalWtCRDR').value == 'DR')) {

                    totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);
                    document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;

                }

                if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                        document.getElementById('CashToGdMetalWtCRDR').value == 'DR') ||
                        (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                                document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {

                    totFinGdWtBal = (parseFloat(totFinGdWtBal) - parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                    //if (totFinGdWtBal < 0) {
                    document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                    //} 

                }

                if (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                   (document.getElementById('CashToGdMetalWtCRDR').value == 'DR' ||
                    document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {
                
                    // START CODE FOR Sell Panel CASH TO METAL Issue @PRIYANKA-28JUNE18
                    if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                         document.getElementById('CashToGdMetalWtCRDR').value == 'CR' &&
                         document.getElementById(prefix + 'FinalGdCRDR').value == 'DR') ||
                        (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                         document.getElementById('CashToGdMetalWtCRDR').value == 'DR' &&
                         document.getElementById(prefix + 'FinalGdCRDR').value == 'CR')) {
                    
                         if(totFinGdWtBal < document.getElementById('CashToGdMetalWt').value) {
                            document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                         }
                        
                         totFinGdWtBal = (parseFloat(totFinGdWtBal) - parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                         //alert('totFinGdWtBal ##== ' + totFinGdWtBal);
                     
                    } else if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                                document.getElementById('CashToGdMetalWtCRDR').value == 'CR') &&
                                document.getElementById(prefix + 'FinalGdCRDR').value == 'CR') {
                    
                                if (totFinGdWtBal < document.getElementById('CashToGdMetalWt').value) {
                                    document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                                }
                    
                                totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                                //alert('totFinGdWtBal ##== ' + totFinGdWtBal);
 
                    } else {
                        
                        totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);
                        //alert('totFinGdWtBal ##== ' + totFinGdWtBal);
                        document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                    }
                    // END CODE FOR Sell Panel CASH TO METAL Issue @PRIYANKA-28JUNE18
                }
            }

            //alert('FinalGdCRDR **== ' + document.getElementById(prefix + 'FinalGdCRDR').value);

        } else if (document.getElementById('paymentMode').value == 'NoRateCut') {
            //
            var totFinGdWtBal = calcWeightBalance(prefix, document.getElementById(prefix + 'GoldWtPrevBalCRDR').value, document.getElementById(prefix + 'GoldWtPrevBal').value, document.getElementById(prefix + 'GoldTotFineWt').value, document.getElementById(prefix + 'GoldWtRecBal').value, document.getElementById(prefix + 'RtCtGdCRDR'));
            //
            // START @PRIYANKA-05APR18
            //if (document.getElementById('paymentMode').value == 'NoRateCut') {
            //alert('gdBal **== ' + gdBal);
//                if (document.getElementById('utin_cash_to_metalwt_CRDR').value != '' && document.getElementById('utin_cash_to_metalwt').value > 0) {
//                    totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);
//                }
            //alert('gdBal ##== ' + gdBal);
            //}
            // END @PRIYANKA-05APR18
            // START @PRIYANKA-06APR18
//            if (document.getElementById('CashToGdMetalWtCRDR').value != '' && document.getElementById('CashToGdMetalWt').value > 0) {
//                totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);            
//            }
            // END @PRIYANKA-06APR18

            // START @PRIYANKA-05APR18
            if (document.getElementById('utin_cash_to_metalwt_CRDR').value != '' && document.getElementById('utin_cash_to_metalwt').value > 0) {

                if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                        document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR') ||
                        (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                                document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR')) {

                    totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);
                }

                if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                        document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR') ||
                        (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                                document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR')) {

                    totFinGdWtBal = (parseFloat(totFinGdWtBal) - parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);

                    if (totFinGdWtBal < 0) {
                        document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('utin_cash_to_metalwt_CRDR').value;
                    }
                }

                if (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                        (document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR' ||
                                document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR')) {

                    totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);

                    document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('utin_cash_to_metalwt_CRDR').value;

                }

            }
            // END @PRIYANKA-05APR18

            // START @PRIYANKA-06APR18
            if (document.getElementById('CashToGdMetalWtCRDR').value != '' && document.getElementById('CashToGdMetalWt').value > 0) {

                if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                        document.getElementById('CashToGdMetalWtCRDR').value == 'CR') ||
                        (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                                document.getElementById('CashToGdMetalWtCRDR').value == 'DR')) {

                    totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);
                    document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;

                }

                if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                        document.getElementById('CashToGdMetalWtCRDR').value == 'DR') ||
                        (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                                document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {

                    totFinGdWtBal = (parseFloat(totFinGdWtBal) - parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                    if (totFinGdWtBal < 0) {
                        document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                    }

                }

                if (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                   (document.getElementById('CashToGdMetalWtCRDR').value == 'DR' ||
                    document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {

                    //totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);
                    //document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;


                    if ((document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR' &&
                         document.getElementById('CashToGdMetalWtCRDR').value == 'CR') ||
                        (document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR' &&
                         document.getElementById('CashToGdMetalWtCRDR').value == 'DR')) {

                        totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                        document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;

                    } else if ((document.getElementById('utin_cash_to_metalwt_CRDR').value == 'CR' &&
                                document.getElementById('CashToGdMetalWtCRDR').value == 'DR') ||
                               (document.getElementById('utin_cash_to_metalwt_CRDR').value == 'DR' &&
                                document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {

                        totFinGdWtBal = (parseFloat(totFinGdWtBal) - parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);

                        if (totFinGdWtBal < 0) {
                            document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                        } else {
                            document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('utin_cash_to_metalwt_CRDR').value;
                        }
                        
                    } else if (document.getElementById('utin_cash_to_metalwt_CRDR').value == '' &&
                              (document.getElementById('CashToGdMetalWtCRDR').value == 'DR' ||
                               document.getElementById('CashToGdMetalWtCRDR').value == 'CR')) {
                
                            totFinGdWtBal = (parseFloat(totFinGdWtBal) + parseFloat(document.getElementById('CashToGdMetalWt').value)).toFixed(3);
                            document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById('CashToGdMetalWtCRDR').value;
                    }
                }
            }           
        }
        // END @PRIYANKA-06APR18
        
        document.getElementById('metal1WtFinBal').value = Math.abs(parseFloat(totFinGdWtBal)).toFixed(3) + ' ' + document.getElementById(prefix + 'GoldTotFineWtType').value;
        
        //alert('metal1WtFinBal == ' + document.getElementById('metal1WtFinBal').value);
        
        // START OF CODE TO SET COLOR FOR GOLD WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        // START CODE TO Set color of metal balance (GD WT) according to CR/DR on payment panel @PRIYANKA-13MAR18
        if (document.getElementById(prefix + 'FinalGdCRDR').value == 'CR') {
            document.getElementById('metal1WtFinBal').style.color = 'green';
            document.getElementById(prefix + 'FinalGdCRDR').style.color = 'green';
            //document.getElementById('metal1WtFinBal').style.color = 'green';
            //document.getElementById(prefix + 'FinalGdCRDR').style.color = 'green';
        } else if (document.getElementById(prefix + 'FinalGdCRDR').value == 'DR') {
            document.getElementById('metal1WtFinBal').style.color = 'red';
            document.getElementById(prefix + 'FinalGdCRDR').style.color = 'red';
            //document.getElementById('metal1WtFinBal').style.color = 'red';
            //document.getElementById(prefix + 'FinalGdCRDR').style.color = 'red';
        }
        // END CODE TO Set color of metal balance (GD WT) according to CR/DR on payment panel @PRIYANKA-13MAR18
        // END OF CODE TO SET COLOR FOR GOLD WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        document.getElementById(prefix + 'GoldWtFinBal').value = Math.abs(parseFloat(totFinGdWtBal)).toFixed(3);
        document.getElementById(prefix + 'GoldWtFinBalType').value = document.getElementById(prefix + 'GoldTotFineWtType').value;

        // ADDING CONDITION FOR METAL BALANCE ACCORDING TO METAL AMOUNT CASE @PRIYANKA-23MAR18
        if (document.getElementById('paymentMode').value == 'RateCut' && setAmtToMetCon != 'changeMetAmtToMetWt') {

            var payTotalWeightType1 = document.getElementById(prefix + 'GoldRtCtWtBalType').value;
            var goldWeight = document.getElementById(prefix + 'GoldRtCtWtBal').value;
            var payMetalRate1 = document.getElementById(prefix + 'GoldRate').value;

            if (payTotalWeightType1 == 'KG') {
                document.getElementById(prefix + 'GoldValuation').value = Math_round(parseFloat((goldWeight * payMetalRate1) * document.getElementById('gmWtInKg').value)).toFixed(2);
            } else if (payTotalWeightType1 == 'GM') {
                document.getElementById(prefix + 'GoldValuation').value = Math_round(parseFloat((goldWeight * payMetalRate1) / (document.getElementById('gmWtInGm').value))).toFixed(2);
            } else if (payTotalWeightType1 == 'MG') {
                document.getElementById(prefix + 'GoldValuation').value = Math_round(parseFloat((goldWeight * payMetalRate1) / (document.getElementById('gmWtInMg').value))).toFixed(2);
            }

            document.getElementById(prefix + 'PayGoldWtBal').value = parseFloat(goldWeight).toFixed(3);
        }

    }
    if (document.getElementById(prefix + 'SilverWtPrevBal').value != '' || document.getElementById(prefix + 'SilverTotFineWt').value != '' || document.getElementById(prefix + 'SilverWtRecBal').value != '') {
        if (document.getElementById(prefix + 'SilverWtPrevBal').value == '' || document.getElementById(prefix + 'SilverWtPrevBal').value == 'NaN') {
            document.getElementById(prefix + 'SilverWtPrevBal').value = 0;
        }
        if (document.getElementById(prefix + 'SilverTotFineWt').value == '' || document.getElementById(prefix + 'SilverTotFineWt').value == 'NaN') {
            document.getElementById(prefix + 'SilverTotFineWt').value = 0;
        }
        if (document.getElementById(prefix + 'SilverWtRecBal').value == '' || document.getElementById(prefix + 'SilverWtRecBal').value == 'NaN') {
            document.getElementById(prefix + 'SilverWtRecBal').value = 0;
        }

        if (document.getElementById('paymentMode').value == 'RateCut') {

            if (document.getElementById(prefix + 'SilverRtCtWtBal').value == '' || document.getElementById(prefix + 'SilverRtCtWtBal').value == 'NaN') {
                document.getElementById(prefix + 'SilverRtCtWtBal').value = 0;
            }

            var slRateCut = convertWeight(parseFloat(document.getElementById(prefix + 'SilverRtCtWtBal').value), document.getElementById(prefix + 'SilverTotFineWtType').value, document.getElementById(prefix + 'SilverRtCtWtBalType').value);

            totFinSrWtBal = calcWeightBalance(prefix, document.getElementById(prefix + 'SilverWtPrevBalCRDR').value, document.getElementById(prefix + 'SilverWtPrevBal').value, document.getElementById(prefix + 'SilverTotFineWt').value, document.getElementById(prefix + 'SilverWtRecBal').value, document.getElementById(prefix + 'RtCtSlCRDR')) - parseFloat(slRateCut);

        } else if (document.getElementById('paymentMode').value == 'NoRateCut') {

            var totFinSrWtBal = calcWeightBalance(prefix, document.getElementById(prefix + 'SilverWtPrevBalCRDR').value, document.getElementById(prefix + 'SilverWtPrevBal').value, document.getElementById(prefix + 'SilverTotFineWt').value, document.getElementById(prefix + 'SilverWtRecBal').value, document.getElementById(prefix + 'RtCtSlCRDR'));
  
        }
        
        if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
            
            // START CODE FOR SILVER CASE TO CALCULATE SL BAL @PRIYANKA-10APR18
            if (document.getElementById('utin_sl_cash_to_metalwt_CRDR').value != '' && document.getElementById('utin_sl_cash_to_metalwt').value > 0) {

                if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'CR') ||
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'DR')) {

                    totFinSrWtBal = (parseFloat(totFinSrWtBal) + parseFloat(document.getElementById('utin_sl_cash_to_metalwt').value)).toFixed(3);
                }

                if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'CR')) {

                    totFinSrWtBal = (parseFloat(totFinSrWtBal) - parseFloat(document.getElementById('utin_sl_cash_to_metalwt').value)).toFixed(3);

                    if (totFinSrWtBal < 0) {
                        document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('utin_sl_cash_to_metalwt_CRDR').value;
                    }
                }

                if (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == '' &&
                   (document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'DR' ||
                    document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'CR')) {

                    totFinSrWtBal = (parseFloat(totFinSrWtBal) + parseFloat(document.getElementById('utin_sl_cash_to_metalwt').value)).toFixed(3);

                    document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('utin_sl_cash_to_metalwt_CRDR').value;

                }

            }
            // END CODE FOR SILVER CASE TO CALCULATE SL BAL @PRIYANKA-10APR18
            
            // START CODE FOR SILVER CASE TO CALCULATE SL BAL ACCORDING CASH CONVERT METAL @PRIYANKA-10APR18
            if (document.getElementById('CashToSlMetalWtCRDR').value != '' && document.getElementById('CashToSlMetalWt').value > 0) {

                if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById('CashToSlMetalWtCRDR').value == 'CR') ||
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById('CashToSlMetalWtCRDR').value == 'DR')) {

                    totFinSrWtBal = (parseFloat(totFinSrWtBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);
                    document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;

                }

                if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById('CashToSlMetalWtCRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById('CashToSlMetalWtCRDR').value == 'CR')) {

                    totFinSrWtBal = (parseFloat(totFinSrWtBal) - parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);

                    if (totFinSrWtBal < 0) {
                        document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                    }

                }

                if (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == '' &&
                   (document.getElementById('CashToSlMetalWtCRDR').value == 'DR' ||
                    document.getElementById('CashToSlMetalWtCRDR').value == 'CR')) {

                    if (document.getElementById('paymentMode').value == 'RateCut') {
                        
                        //totFinSrWtBal = (parseFloat(totFinSrWtBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);
                        //document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                        
                    // START CODE FOR Sell Panel CASH TO METAL Issue @PRIYANKA-28JUNE18
                    if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == '' &&
                         document.getElementById('CashToSlMetalWtCRDR').value == 'CR' &&
                         document.getElementById(prefix + 'FinalSlCRDR').value == 'DR') ||
                        (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == '' &&
                         document.getElementById('CashToSlMetalWtCRDR').value == 'DR' &&
                         document.getElementById(prefix + 'FinalSlCRDR').value == 'CR')) {
                    
                         if(totFinSrWtBal < document.getElementById('CashToSlMetalWt').value) {
                            document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                         }
                        
                         totFinSrWtBal = (parseFloat(totFinSrWtBal) - parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);

                         //alert('totFinSrWtBal ##== ' + totFinSrWtBal);
                     
                    } else if ((document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == '' &&
                                document.getElementById('CashToSlMetalWtCRDR').value == 'CR') &&
                                document.getElementById(prefix + 'FinalSlCRDR').value == 'CR') {
                    
                                if (totFinSrWtBal < document.getElementById('CashToSlMetalWt').value) {
                                    document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                                }
                    
                                totFinSrWtBal = (parseFloat(totFinSrWtBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);

                                //alert('totFinGdWtBal ##== ' + totFinGdWtBal);
 
                    } else {
                        
                        totFinSrWtBal = (parseFloat(totFinSrWtBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);
                        //alert('totFinSrWtBal ##== ' + totFinSrWtBal);
                        document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                    }
                    // END CODE FOR Sell Panel CASH TO METAL Issue @PRIYANKA-28JUNE18
                        
                    }

                     if (document.getElementById('paymentMode').value == 'NoRateCut') {
                        
                        if ((document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'CR' &&
                             document.getElementById('CashToSlMetalWtCRDR').value == 'CR') ||
                            (document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'DR' &&
                             document.getElementById('CashToSlMetalWtCRDR').value == 'DR')) {

                            totFinSrWtBal = (parseFloat(totFinSrWtBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);

                            document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;

                        } else if ((document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'CR' &&
                                document.getElementById('CashToSlMetalWtCRDR').value == 'DR') ||
                                (document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == 'DR' &&
                                        document.getElementById('CashToSlMetalWtCRDR').value == 'CR')) {

                            totFinSrWtBal = (parseFloat(totFinSrWtBal) - parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);

                            if (totFinSrWtBal < 0) {
                                document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                            } else {
                                document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('utin_sl_cash_to_metalwt_CRDR').value;
                            }

                        } else if (document.getElementById('utin_sl_cash_to_metalwt_CRDR').value == '' &&
                                  (document.getElementById('CashToSlMetalWtCRDR').value == 'DR' ||
                                   document.getElementById('CashToSlMetalWtCRDR').value == 'CR')) {

                            totFinSrWtBal = (parseFloat(totFinSrWtBal) + parseFloat(document.getElementById('CashToSlMetalWt').value)).toFixed(3);
                            document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById('CashToSlMetalWtCRDR').value;
                        }
                    }

                }

            }
            // END CODE FOR SILVER CASE TO CALCULATE SL BAL ACCORDING CASH CONVERT METAL @PRIYANKA-10APR18            
        }

        document.getElementById('metal2WtFinBal').value = Math.abs(parseFloat(totFinSrWtBal)).toFixed(3) + ' ' + document.getElementById(prefix + 'SilverTotFineWtType').value;
        //alert(document.getElementById('metal2WtFinBal').value);
        //
        // START OF CODE TO SET COLOR FOR SILVER WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        // START CODE TO Set color of metal balance (SL WT) according to CR/DR on payment panel @PRIYANKA-13MAR18
        if (document.getElementById(prefix + 'FinalSlCRDR').value == 'CR') {
            document.getElementById('metal2WtFinBal').style.color = 'green';
            document.getElementById(prefix + 'FinalSlCRDR').style.color = 'green';
            //document.getElementById('metal2WtFinBal').style.color = 'green';
            //document.getElementById(prefix + 'FinalSlCRDR').style.color = 'green';
        } else if (document.getElementById(prefix + 'FinalSlCRDR').value == 'DR') {
            document.getElementById('metal2WtFinBal').style.color = 'red';
            document.getElementById(prefix + 'FinalSlCRDR').style.color = 'red';
            //document.getElementById('metal2WtFinBal').style.color = 'red';
            //document.getElementById(prefix + 'FinalSlCRDR').style.color = 'red';
        }
        // END CODE TO Set color of metal balance (SL WT) according to CR/DR on payment panel @PRIYANKA-13MAR18
        // END OF CODE TO SET COLOR FOR SILVER WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        document.getElementById(prefix + 'SilverWtFinBal').value = parseFloat(totFinSrWtBal).toFixed(3);
        document.getElementById(prefix + 'SilverWtFinBalType').value = document.getElementById(prefix + 'SilverTotFineWtType').value;

        // ADDING CONDITION FOR METAL BALANCE ACCORDING TO METAL AMOUNT CASE @PRIYANKA-23MAR18
        if (document.getElementById('paymentMode').value == 'RateCut' && setAmtToMetCon != 'changeMetAmtToMetWt') {

            var payTotalWeightType2 = document.getElementById(prefix + 'SilverRtCtWtBalType').value;
            var silverWeight = parseFloat(document.getElementById(prefix + 'SilverRtCtWtBal').value);
            var payMetalRate2 = parseFloat(document.getElementById(prefix + 'SilverRate').value);

            if (payTotalWeightType2 == 'KG') {
                document.getElementById(prefix + 'SilverValuation').value = Math_round((silverWeight * payMetalRate2 * document.getElementById('srGmWtInKg').value));
            } else if (payTotalWeightType2 == 'GM') {
                document.getElementById(prefix + 'SilverValuation').value = Math_round((silverWeight * payMetalRate2) / document.getElementById('srGmWtInGm').value);
            } else if (payTotalWeightType2 == 'MG') {
                document.getElementById(prefix + 'SilverValuation').value = Math_round((silverWeight * payMetalRate2) / (document.getElementById('srGmWtInMg').value));
            }

            document.getElementById(prefix + 'PaySilverWtBal').value = parseFloat(silverWeight).toFixed(3);

        }

    }

    // START CODE TO CHANGE FOR RATE CUT FUNCTIONALITY @PRIYANKA-19APR18
    if (document.getElementById('paymentMode').value == 'RateCut') {
        
        //alert('PayableCashCRDR 11== ' + document.getElementById(prefix + 'PayableCashCRDR').value);

        if (document.getElementById(prefix + 'GoldValuation').value == '' || document.getElementById(prefix + 'GoldValuation').value == 'NaN') {
            document.getElementById(prefix + 'GoldValuation').value = 0;
        }

        if (document.getElementById(prefix + 'SilverValuation').value == '' || document.getElementById(prefix + 'SilverValuation').value == 'NaN') {
            document.getElementById(prefix + 'SilverValuation').value = 0;
        }
        // START @PRIYANKA-07APR18
        // START @PRIYANKA-05APR18
        // START @PRIYANKA-08APR18
        // START @PRIYANKA-09APR18

        var GdCashToMetal = document.getElementById('GdCashToMetal').value;
        var PrevGdCashBal = document.getElementById('PrevGdCashBal').value;
        
        // START @PRIYANKA-10APR18
        var SlCashToMetal = document.getElementById('SlCashToMetal').value;
        var PrevSlCashBal = document.getElementById('PrevSlCashBal').value;
        // END @PRIYANKA-10APR18
        
        var PayPrevAmtDisp = document.getElementById(prefix + 'PayPrevAmtDisp').value;

        // alert('PayPrevAmtDisp == ' + PayPrevAmtDisp);
        // START @PRIYANKA-10APR18
        if (GdCashToMetal > 0 || PayPrevAmtDisp > 0 || SlCashToMetal > 0) {

            //alert('CashToMetal **== ' + CashToMetal);
            //alert('PayTotAmt == ' + document.getElementById(prefix + 'PayTotAmt').value);
            
            //alert('TransCRDR === ' + document.getElementById(prefix + 'TransCRDR').value); 
            //alert('GoldWtPrevBalCRDR == ' + document.getElementById(prefix + 'GoldWtPrevBalCRDR').value);
            //alert('PrevGdCashBalCRDR == ' + document.getElementById('PrevGdCashBalCRDR').value);

            if ((GdCashToMetal > 0 || SlCashToMetal > 0) && PayPrevAmtDisp >= 0) {

                if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById('PrevGdCashBalCRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById('PrevGdCashBalCRDR').value == 'CR') ||
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById('PrevSlCashBalCRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById('PrevSlCashBalCRDR').value == 'CR')) {
                 
                    //alert('TransCRDR ** ' + document.getElementById(prefix + 'TransCRDR').value);

                    var totalAmount = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value) + parseFloat(document.getElementById('GdCashToMetal').value)).toFixed(2);

                    document.getElementById(prefix + 'PayTotAmt').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayTotAmtAccess').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    
                    // START CODE FOR PAYMENT/RECEIPT CASH TO METAL ISSUE @PRIYANKA-29MAY18
                    if (PayPrevAmtDisp == '0.00') {
                        
                        document.getElementById(prefix + 'PayTotCashAmt').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                        document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                        document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                        
                        if ((document.getElementById(prefix + 'TransCRDR').value == 'CR' &&
                             document.getElementById('PrevGdCashBalCRDR').value == 'CR' &&
                             document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR') || 
                            (document.getElementById(prefix + 'TransCRDR').value == 'DR' &&
                             document.getElementById('PrevGdCashBalCRDR').value == 'DR' &&
                             document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR')) {
                        
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                            document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                            document.getElementById(prefix + 'RtCtCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                            
                        }
                    }
                    // END CODE FOR PAYMENT/RECEIPT CASH TO METAL ISSUE @PRIYANKA-29MAY18

                } else if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById('PrevGdCashBalCRDR').value == 'CR') ||
                           (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                            document.getElementById('PrevGdCashBalCRDR').value == 'DR') ||
                           (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById('PrevSlCashBalCRDR').value == 'CR') ||
                           (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                            document.getElementById('PrevSlCashBalCRDR').value == 'DR')) {

                    var totalAmount = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value) - parseFloat(document.getElementById('GdCashToMetal').value)).toFixed(2);

                    var GoldSilverAmt = parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value);

                    //alert('TransCRDR ## ' + document.getElementById(prefix + 'TransCRDR').value);
                    
                    if (GoldSilverAmt <= GdCashToMetal || GoldSilverAmt <= SlCashToMetal) {

                        if (GoldSilverAmt <= GdCashToMetal) {
                            document.getElementById(prefix + 'TransCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                        }
                        
                        if (GoldSilverAmt <= SlCashToMetal) {
                            document.getElementById(prefix + 'TransCRDR').value = document.getElementById('PrevSlCashBalCRDR').value;
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById('PrevSlCashBalCRDR').value;
                            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById('PrevSlCashBalCRDR').value;
                        }
                        
                        //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);
                    
                    } else {
                        
                        var metal1WtPrevBal = document.getElementById(prefix + 'metal1WtPrevBal').value;
                        var metal2WtPrevBal = document.getElementById(prefix + 'metal2WtPrevBal').value;
                        
                        if (metal1WtPrevBal > 0) {
                            document.getElementById(prefix + 'TransCRDR').value = document.getElementById('GoldWtPrevBalCRDR').value;
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById('GoldWtPrevBalCRDR').value;
                            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById('GoldWtPrevBalCRDR').value;
                        }
                        
                        if (metal2WtPrevBal > 0) {
                            document.getElementById(prefix + 'TransCRDR').value = document.getElementById('PrevSlCashBalCRDR').value;
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById('PrevSlCashBalCRDR').value;
                            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById('PrevSlCashBalCRDR').value;
                        }
                    }
                    
                    document.getElementById(prefix + 'PayTotAmt').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayTotAmtAccess').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    
                    // START CODE FOR PAYMENT/RECEIPT CASH TO METAL ISSUE @PRIYANKA-29MAY18
                    if (PayPrevAmtDisp == '0.00') {
                        
                        document.getElementById(prefix + 'PayTotCashAmt').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                        document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                        document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                        
                        if ((document.getElementById(prefix + 'TransCRDR').value == 'CR' &&
                             document.getElementById('PrevGdCashBalCRDR').value == 'DR' &&
                             document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR') || 
                            (document.getElementById(prefix + 'TransCRDR').value == 'DR' &&
                             document.getElementById('PrevGdCashBalCRDR').value == 'CR' &&
                             document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR')) {
                        
                            if (GdCashToMetal > document.getElementById(prefix + 'GoldValuation').value)  {
                                
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                            document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                            document.getElementById(prefix + 'RtCtCashCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                            
                            } else {
                                
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                            document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                            document.getElementById(prefix + 'RtCtCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;  
                            }
                        }
                    }
                    // END CODE FOR PAYMENT/RECEIPT CASH TO METAL ISSUE @PRIYANKA-29MAY18
                    
                } else if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == '' &&
                            document.getElementById('PrevGdCashBalCRDR').value == 'CR' ||
                            document.getElementById('PrevGdCashBalCRDR').value == 'DR') ||
                           (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == '' &&
                            document.getElementById('PrevSlCashBalCRDR').value == 'CR' ||
                            document.getElementById('PrevSlCashBalCRDR').value == 'DR')) {
                        
                       //alert('PayTotAmt == ' + document.getElementById(prefix + 'PayTotAmt').value);
                        
                        if ((document.getElementById(prefix + 'TransCRDR').value == 'CR' &&
                            (document.getElementById('PrevGdCashBalCRDR').value == 'CR' ||
                             document.getElementById('PrevSlCashBalCRDR').value == 'CR')) ||
                            (document.getElementById(prefix + 'TransCRDR').value == 'DR' &&
                            (document.getElementById('PrevGdCashBalCRDR').value == 'DR' ||
                             document.getElementById('PrevSlCashBalCRDR').value == 'DR'))) {
                        
                            var totalAmount = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value) + parseFloat(document.getElementById('GdCashToMetal').value) + parseFloat(document.getElementById('SlCashToMetal').value)).toFixed(2);
                        
                        } else if ((document.getElementById(prefix + 'TransCRDR').value == 'CR' &&
                                   (document.getElementById('PrevGdCashBalCRDR').value == 'DR' ||
                                    document.getElementById('PrevSlCashBalCRDR').value == 'DR')) ||
                                   (document.getElementById(prefix + 'TransCRDR').value == 'DR' &&
                                   (document.getElementById('PrevGdCashBalCRDR').value == 'CR' ||
                                    document.getElementById('PrevSlCashBalCRDR').value == 'CR'))) {
                         
                            var totalAmount = Math_round((parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)) - (parseFloat(document.getElementById('GdCashToMetal').value) + parseFloat(document.getElementById('SlCashToMetal').value))).toFixed(2);   
                            
                            if (totalAmount < 0) {
                                
                                if (document.getElementById('PrevGdCashBalCRDR').value == 'DR' || document.getElementById('PrevSLCashBalCRDR').value == 'DR') {
                                    document.getElementById(prefix + 'TransCRDR').value = 'DR';
                                    document.getElementById(prefix + 'PayableCashCRDR').value = 'DR';
                                    document.getElementById(prefix + 'FinalCashCRDR').value = 'DR';
                                } else if (document.getElementById('PrevGdCashBalCRDR').value == 'CR' || document.getElementById('PrevSLCashBalCRDR').value == 'CR') {
                                    document.getElementById(prefix + 'TransCRDR').value = 'CR';
                                    document.getElementById(prefix + 'PayableCashCRDR').value = 'CR';
                                    document.getElementById(prefix + 'FinalCashCRDR').value = 'CR';
                                }                                  
                            }                           
                        }        
                        
                        document.getElementById(prefix + 'PayTotAmt').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                        document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                        document.getElementById(prefix + 'PayTotAmtAccess').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                }
                
                //alert('PayTotCashAmtDisp *== ' + document.getElementById(prefix + 'PayTotCashAmtDisp').value);
                //alert('PayFinAmtBalDisp *== ' + document.getElementById(prefix + 'PayFinAmtBalDisp').value);

                if ((document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'DR' &&
                     document.getElementById(prefix + 'PayableCashCRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'CR' &&
                     document.getElementById(prefix + 'PayableCashCRDR').value == 'CR')) {

                    document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.abs(parseFloat(totalAmount) + parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value)).toFixed(2);
                    document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(parseFloat(totalAmount) + parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value)).toFixed(2);

                } else if ((document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'DR' &&
                            document.getElementById(prefix + 'PayableCashCRDR').value == 'CR') ||
                           (document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'DR' &&
                            document.getElementById(prefix + 'PayableCashCRDR').value == 'CR')) {

                    if (totalAmount == 0 || totalAmount == '0.00')
                        var totAmt = (parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value)).toFixed(2);
                    else
                        var totAmt = (parseFloat(totalAmount) - parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value)).toFixed(2);

                    if (totAmt < 0) {
                        document.getElementById(prefix + 'TransCRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
                        document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
                        document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
                    }

                    document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.abs(parseFloat(totAmt)).toFixed(2);
                    document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(parseFloat(totAmt)).toFixed(2);
                }
                    
                    //alert('PayTotAmt @@== ' + document.getElementById(prefix + 'PayTotAmt').value);
                    //alert('PayTotCashAmtDisp @== ' + document.getElementById(prefix + 'PayTotCashAmtDisp').value);
                    //alert('PayFinAmtBalDisp @== ' + document.getElementById(prefix + 'PayFinAmtBalDisp').value);
                    //alert('PayTotAmtBalDisp @== ' + document.getElementById(prefix + 'PayTotAmtBalDisp').value);
                    //alert('PayTotAmtAccess @== ' + document.getElementById(prefix + 'PayTotAmtAccess').value);


            } else if ((GdCashToMetal > 0 || SlCashToMetal > 0) && PayPrevAmtDisp == '0') {

                //alert('PayPrevAmtDisp *** === ' + PayPrevAmtDisp);

                if ((document.getElementById(prefix + 'FinalGdCRDR').value == 'DR' &&
                     document.getElementById('PrevGdCashBalCRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'FinalGdCRDR').value == 'CR' &&
                     document.getElementById('PrevGdCashBalCRDR').value == 'CR') ||
                    (document.getElementById(prefix + 'FinalSlCRDR').value == 'DR' &&
                     document.getElementById('PrevSlCashBalCRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'FinalSlCRDR').value == 'CR' &&
                     document.getElementById('PrevSlCashBalCRDR').value == 'CR')) {
                 
                    //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);

                    var totalAmount = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value) + parseFloat(document.getElementById('GdCashToMetal').value)).toFixed(2);

                    document.getElementById(prefix + 'PayTotAmt').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayTotAmtAccess').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);

                } else if ((document.getElementById(prefix + 'FinalGdCRDR').value == 'DR' &&
                            document.getElementById('PrevGdCashBalCRDR').value == 'CR') ||
                           (document.getElementById(prefix + 'FinalGdCRDR').value == 'CR' &&
                            document.getElementById('PrevGdCashBalCRDR').value == 'DR') ||
                           (document.getElementById(prefix + 'FinalSlCRDR').value == 'DR' &&
                            document.getElementById('PrevSlCashBalCRDR').value == 'CR') ||
                           (document.getElementById(prefix + 'FinalSlCRDR').value == 'CR' &&
                            document.getElementById('PrevSlCashBalCRDR').value == 'DR')) {

                    var totalAmount = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value) - parseFloat(document.getElementById('GdCashToMetal').value)).toFixed(2);

                    var GoldSilverAmt = parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value);

                    if (GoldSilverAmt < GdCashToMetal) {

                        document.getElementById(prefix + 'TransCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                        document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                        document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;

                    }
                    
                    if (GoldSilverAmt < SlCashToMetal) {

                        document.getElementById(prefix + 'TransCRDR').value = document.getElementById('PrevSlCashBalCRDR').value;
                        document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById('PrevSlCashBalCRDR').value;
                        document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById('PrevSlCashBalCRDR').value;

                    }
                    
                    document.getElementById(prefix + 'PayTotAmt').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayTotAmtAccess').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);

                }

               
                //var totalAmount = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value) + parseFloat(document.getElementById('GdCashToMetal').value)).toFixed(2);
            
            
            } else if (PayPrevAmtDisp > 0) {
                
                //alert('GoldWtPrevBalCRDR == ' + document.getElementById(prefix + 'GoldWtPrevBalCRDR').value);
                //alert('PayPrevCashBalCRDR == ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);
                //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);
                //alert('RtCtSlCRDR == ' + document.getElementById(prefix + 'RtCtSlCRDR').value);
                

                if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'CR') || 
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                     document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'DR') ||
                    (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                     document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'CR')) {

                    // START @PRIYANKA-20JUNE18
                    var totGdSlAmount = Math_round((parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value))).toFixed(2);
                    if (parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value) > parseFloat(totGdSlAmount)) {                       
                        //alert('totGdSlAmount == ' + totGdSlAmount);
                        //alert('PayPrevAmtDisp == ' + document.getElementById(prefix + 'PayPrevAmtDisp').value);   
                        document.getElementById(prefix + 'PayTotAmt').value = parseFloat(totGdSlAmount).toFixed(2);
                        document.getElementById(prefix + 'PayTotAmtBalDisp').value = parseFloat(totGdSlAmount).toFixed(2);
                        document.getElementById(prefix + 'PayTotAmtAccess').value = parseFloat(totGdSlAmount).toFixed(2); 
                        document.getElementById(prefix + 'PayTotCashAmt').value = parseFloat(totGdSlAmount).toFixed(2); 
                        document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.abs(parseFloat(totGdSlAmount) - parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value)).toFixed(2);
                        document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(parseFloat(totGdSlAmount) - parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value)).toFixed(2);                       
                        //alert('PayFinAmtBalDisp == ' + document.getElementById(prefix + 'PayFinAmtBalDisp').value);
                        document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
                        document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
                        // END @PRIYANKA-20JUNE18
                    } else {
                        var totalAmount = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value) + parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value)).toFixed(2);
                        document.getElementById(prefix + 'PayTotAmt').value = (parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)).toFixed(2);
                        document.getElementById(prefix + 'PayTotAmtBalDisp').value = (parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)).toFixed(2);
                        document.getElementById(prefix + 'PayTotAmtAccess').value = (parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)).toFixed(2);
                        document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                        document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                    }
                    
                } else if ((document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'CR') ||
                           (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR' &&
                            document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'DR') ||
                           (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR' &&
                            document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'CR') ||
                           (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR' &&
                            document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'DR')) {
                        
                    //alert('SilverWtPrevBalCRDR == ' + document.getElementById(prefix + 'SilverWtPrevBalCRDR').value);
                    //alert('PayPrevCashBalCRDR == ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);

                    var totalAmount = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value) - parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value)).toFixed(2);

                    var GdSlAmt = parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value);

                    var PrevAmtDisp = parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value).toFixed(2);

                    if (GdSlAmt < PrevAmtDisp) {

                        document.getElementById(prefix + 'TransCRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
                        document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
                        document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;

                    } else {
                        
                        var metalGd1WtPrevBal = document.getElementById('metal1WtPrevBal').value;
                        var metalSl2WtPrevBal = document.getElementById('metal2WtPrevBal').value;
                        
                        if (metalGd1WtPrevBal > 0) {
                            document.getElementById(prefix + 'TransCRDR').value = document.getElementById(prefix + 'GoldWtPrevBalCRDR').value;
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'GoldWtPrevBalCRDR').value;
                            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById(prefix + 'GoldWtPrevBalCRDR').value;
                        } 
                        
                        if (metalSl2WtPrevBal > 0) {
                            document.getElementById(prefix + 'TransCRDR').value = document.getElementById(prefix + 'SilverWtPrevBalCRDR').value;
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'SilverWtPrevBalCRDR').value;
                            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById(prefix + 'SilverWtPrevBalCRDR').value; 
                        }
                    }
                    
                document.getElementById(prefix + 'PayTotAmt').value = (parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)).toFixed(2);
                document.getElementById(prefix + 'PayTotAmtBalDisp').value = (parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)).toFixed(2);
                document.getElementById(prefix + 'PayTotAmtAccess').value = (parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)).toFixed(2);
                document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);
                document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(parseFloat(totalAmount)).toFixed(2);

                } 
                
                //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);
  
            }

            //alert('TransCRDR @@ ' + document.getElementById(prefix + 'TransCRDR').value);
            
            // END @PRIYANKA-09APR18 
            // END @PRIYANKA-10APR18

        } else {
            
            //alert('GoldValuation == ' + document.getElementById(prefix + 'GoldValuation').value);
            //alert('SilverValuation == ' + document.getElementById(prefix + 'SilverValuation').value);

            document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)).toFixed(2);
            document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)).toFixed(2);
            document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)).toFixed(2);
            document.getElementById(prefix + 'PayTotAmt').value = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)).toFixed(2);
            document.getElementById(prefix + 'PayTotAmtAccess').value = Math_round(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value)).toFixed(2);

        }
        // END CODE TO CHANGE FOR RATE CUT FUNCTIONALITY @PRIYANKA-19APR18
        
        // START @PRIYANKA-08APR18
        // END @PRIYANKA-05APR18        
        // END @PRIYANKA-07APR18

        var utinCashToMetalWt = document.getElementById('utin_cash_to_metalwt').value;
        var CashToGdMetalWt = document.getElementById('CashToGdMetalWt').value;
        var utinSlCashToMetalWt = document.getElementById('utin_sl_cash_to_metalwt').value;
        var CashToSlMetalWt = document.getElementById('CashToSlMetalWt').value;        

        if (utinCashToMetalWt > 0 || CashToGdMetalWt > 0 || utinSlCashToMetalWt > 0 || CashToSlMetalWt > 0) {
            //document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById(prefix + 'RtCtGdCRDR').value;
            //document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById(prefix + 'RtCtSlCRDR').value;
        } else {
            document.getElementById(prefix + 'FinalGdCRDR').value = document.getElementById(prefix + 'RtCtGdCRDR').value;
            document.getElementById(prefix + 'FinalSlCRDR').value = document.getElementById(prefix + 'RtCtSlCRDR').value;
        }
        
        //alert('TransCRDR @@ ' + document.getElementById(prefix + 'TransCRDR').value);
        
        //alert('PayableCashCRDR @@ ' + document.getElementById(prefix + 'PayableCashCRDR').value);

        calcRateCutWeightPNL(prefix);
        //RtCtCashCRDR
        
        //alert('PayableCashCRDR 22== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
        
//        alert('PayTotAmt === ' + document.getElementById(prefix + 'PayTotAmt').value); 
//        alert('PayTotCashAmtDisp == ' + document.getElementById(prefix + 'PayTotCashAmtDisp').value);
//        alert('PayFinAmtBalDisp == ' + document.getElementById(prefix + 'PayFinAmtBalDisp').value);
//        alert('PayTotAmtBalDisp == ' + document.getElementById(prefix + 'PayTotAmtBalDisp').value);
//        alert('PayTotAmtAccess == ' + document.getElementById(prefix + 'PayTotAmtAccess').value);
        
    }

}


//@Description : Calculate profit and loss @Author:SHRI10JAN17
function calcRateCutWeightPNL(prefix) {
// @Description : Calculate profit and loss for gold
    var goldRateCutRate = parseFloat(document.getElementById(prefix + 'GoldRate').value);
    var goldAvgRate = parseFloat(document.getElementById(prefix + 'GoldAvgRate').value);
    var goldRateCutW = parseFloat(document.getElementById(prefix + 'GoldRtCtWtBal').value);
    var goldRateCutWT = document.getElementById(prefix + 'GoldRtCtWtBalType').value;
    var goldRateCutValByCurrentRate = 0;
    var goldRateCutValByAvgRate = 0;
    if (goldRateCutWT == 'KG') {
        goldRateCutValByAvgRate = ((goldRateCutW * goldAvgRate) * document.getElementById('gmWtInKg').value).toFixed(2);
        goldRateCutValByCurrentRate = ((goldRateCutW * goldRateCutRate) * document.getElementById('gmWtInKg').value).toFixed(2);
    } else if (goldRateCutWT == 'GM') {
        goldRateCutValByAvgRate = ((goldRateCutW * goldAvgRate) / document.getElementById('gmWtInGm').value).toFixed(2);
        goldRateCutValByCurrentRate = ((goldRateCutW * goldRateCutRate) / document.getElementById('gmWtInGm').value).toFixed(2);
    } else if (goldRateCutWT == 'MG') {
        goldRateCutValByAvgRate = ((goldRateCutW * goldAvgRate) / document.getElementById('gmWtInMg').value).toFixed(2);
        goldRateCutValByCurrentRate = ((goldRateCutW * goldRateCutRate) / document.getElementById('gmWtInMg').value).toFixed(2);
    }

    document.getElementById('metal1WtPNL').value = parseFloat(goldRateCutValByCurrentRate - goldRateCutValByAvgRate).toFixed(2);
// @Description : Calculate profit and loss for silver
    var silverRateCutRate = parseFloat(document.getElementById(prefix + 'SilverRate').value);
    var silverAvgRate = parseFloat(document.getElementById(prefix + 'SilverAvgRate').value);
    var silverRateCutW = parseFloat(document.getElementById(prefix + 'SilverRtCtWtBal').value);
    var silverRateCutWT = document.getElementById(prefix + 'SilverRtCtWtBalType').value;
    var silverRateCutValByCurrentRate = 0;
    var silverRateCutValByAvgRate = 0;
    if (silverRateCutWT == 'KG') {
        silverRateCutValByAvgRate = ((silverRateCutW * silverAvgRate) * document.getElementById('srGmWtInKg').value).toFixed(2);
        silverRateCutValByCurrentRate = ((silverRateCutW * silverRateCutRate) * document.getElementById('srGmWtInKg').value).toFixed(2);
    } else if (silverRateCutWT == 'GM') {
        silverRateCutValByAvgRate = ((silverRateCutW * silverAvgRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
        silverRateCutValByCurrentRate = ((silverRateCutW * silverRateCutRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
    } else if (silverRateCutWT == 'MG') {
        silverRateCutValByAvgRate = ((silverRateCutW * silverAvgRate) / document.getElementById('srGmWtInMg').value).toFixed(2);
        silverRateCutValByCurrentRate = ((silverRateCutW * silverRateCutRate) / document.getElementById('srGmWtInMg').value).toFixed(2);
    }

    document.getElementById('metal2WtPNL').value = parseFloat(silverRateCutValByCurrentRate - silverRateCutValByAvgRate).toFixed(2);
}

function calcTotTax(prefix, finalTotalAmnt) {

    //alert(('PayCashOthChgsDisp==' + document.getElementById('PayCashOthChgsDisp').value));
    //alert('cgstChk==' + document.getElementById('cgstChk').value);
//    alert('sgstChk==' + document.getElementById('sgstChk').value);

    var PayTotAmt = 'PayTotAmt';
    //
    if (document.getElementById('transPanelName').value == 'UDHAAR' || document.getElementById('transPanelName').value == 'MONEY') {
        PayTotAmt = 'udhaar_deposit_amt';
    }
    //
    var otherTax = document.getElementById(prefix + 'Tax').value;
    //
    if (otherTax == '' || otherTax == 'NaN') {
        otherTax = 0;
    }
    //
    var itemValIncludingTax = 0;
    itemValIncludingTax = parseFloat(parseFloat(document.getElementById(prefix + PayTotAmt).value));
    //
    if (document.getElementById('TaxByVal').checked) {
        itemValIncludingTax = getTaxByVal(prefix);
        document.getElementById('taxOnTotAmt').value = (parseFloat(itemValIncludingTax)).toFixed(2);
        document.getElementById('taxOnCGSTTotAmt').value = (parseFloat(itemValIncludingTax)).toFixed(2);
        document.getElementById('taxOnSGSTTotAmt').value = (parseFloat(itemValIncludingTax)).toFixed(2);
        document.getElementById('taxOnIGSTTotAmt').value = (parseFloat(itemValIncludingTax)).toFixed(2);
        document.getElementById('taxableAmount').value = (parseFloat(itemValIncludingTax)).toFixed(2);
    }
    //
    if (document.getElementById(prefix + 'Tax').value == '' &&
            document.getElementById(prefix + 'MkgChrgCGST').value == '' &&
            document.getElementById(prefix + 'MkgChrgSGST').value == '' &&
            document.getElementById(prefix + 'CGST').value == '' &&
            document.getElementById(prefix + 'SGST').value == '' &&
            document.getElementById(prefix + 'IGST').value == '') {
        //
        if (document.getElementById('MkgTaxCheck').checked == true) {
            //
            document.getElementById('taxOnTotAmt').value = ((parseFloat(document.getElementById(prefix + PayTotAmt).value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value))).toFixed(2);
            document.getElementById('taxOnCGSTTotAmt').value = ((parseFloat(document.getElementById(prefix + PayTotAmt).value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value))).toFixed(2);
            document.getElementById('taxOnSGSTTotAmt').value = ((parseFloat(document.getElementById(prefix + PayTotAmt).value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value))).toFixed(2);
            document.getElementById('taxOnIGSTTotAmt').value = ((parseFloat(document.getElementById(prefix + PayTotAmt).value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value))).toFixed(2);
            document.getElementById('taxableAmount').value = ((parseFloat(document.getElementById(prefix + PayTotAmt).value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value))).toFixed(2);
            //
            
//            if(document.getElementById('paymentMode').value == 'ByCash') {
//                var utin_oth_chgs_amt = parseFloat(document.getElementById(prefix + 'PayTotOthChgs').value) + parseFloat(document.getElementById('valueAdded').value);
//            } else {
            var utin_oth_chgs_amt = parseFloat(document.getElementById('totMkngOrLabChgs').value).toFixed(2);
//            }
            //
            document.getElementById('taxOnTotMkgCGSTChrg').value = parseFloat(utin_oth_chgs_amt).toFixed(2);
            document.getElementById('taxOnTotMkgSGSTChrg').value = parseFloat(utin_oth_chgs_amt).toFixed(2);
            //
        } else {
            //
            if (document.getElementById('TaxByVal').checked) {
                //
                itemValIncludingTax = getTaxByVal(prefix);
                document.getElementById('taxOnTotAmt').value = (parseFloat(itemValIncludingTax)).toFixed(2);
                document.getElementById('taxOnCGSTTotAmt').value = (parseFloat(itemValIncludingTax)).toFixed(2);
                document.getElementById('taxOnSGSTTotAmt').value = (parseFloat(itemValIncludingTax)).toFixed(2);
                document.getElementById('taxOnIGSTTotAmt').value = (parseFloat(itemValIncludingTax)).toFixed(2);
                document.getElementById('taxableAmount').value = (parseFloat(itemValIncludingTax)).toFixed(2);
                
            } else {
                
                //alert(document.getElementById('payPanelName').value);
                
                if (document.getElementById('payPanelName').value != 'UdhaarPayment' && document.getElementById('payPanelName').value != 'UdhaarPaymentUpdate') {
                    document.getElementById(prefix + 'CGST').value = 1.5;
                    document.getElementById(prefix + 'SGST').value = 1.5;
                }
                
                // START CODE TO HIDE CGST, SGST & IGST TAX DIVISION @PRIYANKA-17MAY18
                if (document.getElementById('PaymentReceiptPanel').value == 'PAYMENT' || 
                    document.getElementById('PaymentReceiptPanel').value == 'RECEIPT') {
                    document.getElementById('CGSTCheck').checked = false;
                    document.getElementById('SGSTCheck').checked = false;
                    document.getElementById('IGSTCheck').checked = false;
                    document.getElementById('CGSTDivision').style.display = 'none';
                    document.getElementById('SGSTDivision').style.display = 'none';
                    document.getElementById('IGSTDivision').style.display = 'none';
                }
                // END CODE TO HIDE CGST, SGST & IGST TAX DIVISION @PRIYANKA-17MAY18
                  
                if (document.getElementById('utin_discount_per_discup').value == '' && document.getElementById('utin_discount_amt_discup').value == '') {
                    document.getElementById('taxOnTotAmt').value = (parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)).toFixed(2);
                    document.getElementById('taxOnCGSTTotAmt').value = (parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)).toFixed(2);
                    document.getElementById('taxOnSGSTTotAmt').value = (parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)).toFixed(2);
                    document.getElementById('taxOnIGSTTotAmt').value = (parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)).toFixed(2);
                    document.getElementById('taxableAmount').value = (parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)).toFixed(2);
                }
            }
        }

    } else {
        //alert('CGST==' + document.getElementById(prefix + 'CGST').value);
        if (document.getElementById(prefix + 'CGST').value == ''
                || document.getElementById(prefix + 'CGST').value == '0.00') {

            if (document.getElementById('cgstChk').value == 'checked' && document.getElementById('cgstPer').value == 'checked') {
                document.getElementById(prefix + 'CGST').value = 1.5;
            } else {
                document.getElementById(prefix + 'CGST').value = 0;
            }
        }
        //alert('SGST ===' + document.getElementById(prefix + 'SGST').value);
        if (document.getElementById(prefix + 'SGST').value == ''
                || document.getElementById(prefix + 'SGST').value == '0.00') {

            if (document.getElementById('sgstChk').value == 'checked' && document.getElementById('sgstPer').value == 'checked') {
                document.getElementById(prefix + 'SGST').value = 1.5;
            } else {
                document.getElementById(prefix + 'SGST').value = 0;
            }
        }
        //
        if (document.getElementById('utin_discount_per_discup').value == '' && document.getElementById('utin_discount_amt_discup').value == '') {
            //
            document.getElementById('taxOnTotAmt').value = (parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)).toFixed(2);
            document.getElementById('taxOnCGSTTotAmt').value = (parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)).toFixed(2);
            document.getElementById('taxOnSGSTTotAmt').value = (parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)).toFixed(2);
            document.getElementById('taxOnIGSTTotAmt').value = (parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)).toFixed(2);
            document.getElementById('taxableAmount').value = (parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)).toFixed(2);
           // alert(document.getElementById('taxableAmount').value);
            //
        } else {
            //
            if (document.getElementById("payPanelName").value == 'SellPayUp' ||
                    document.getElementById("payPanelName").value == 'RawPayUp' ||
                    document.getElementById("payPanelName").value == 'StockPayUp' ||
                    document.getElementById("payPanelName").value == 'SuppOrderUp' ||
                    document.getElementById("payPanelName").value == 'CustSellPayUp' ||
                    document.getElementById("payPanelName").value == 'NwOrPayUp' ||
                    document.getElementById("payPanelName").value == 'SuppOrderDeliveryUp') {
                //
                document.getElementById('taxOnTotAmt').value = ((parseFloat(document.getElementById(prefix + 'PayTotAmtBalDisp').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)) - parseFloat(document.getElementById('utin_discount_amt_discup').value)).toFixed(2);
                document.getElementById('taxOnCGSTTotAmt').value = ((parseFloat(document.getElementById(prefix + 'PayTotAmtBalDisp').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)) - parseFloat(document.getElementById('utin_discount_amt_discup').value)).toFixed(2);
                document.getElementById('taxOnSGSTTotAmt').value = ((parseFloat(document.getElementById(prefix + 'PayTotAmtBalDisp').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)) - parseFloat(document.getElementById('utin_discount_amt_discup').value)).toFixed(2);
                document.getElementById('taxOnIGSTTotAmt').value = ((parseFloat(document.getElementById(prefix + 'PayTotAmtBalDisp').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)) - parseFloat(document.getElementById('utin_discount_amt_discup').value)).toFixed(2);
                document.getElementById('taxableAmount').value = ((parseFloat(document.getElementById(prefix + 'PayTotAmtBalDisp').value) + parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value)) - parseFloat(document.getElementById('utin_discount_amt_discup').value)).toFixed(2);
             // alert(document.getElementById('taxableAmount').value);
            }
        }
        //
        if (document.getElementById('MkgTaxCheck').checked == true) {
            //
            document.getElementById(prefix + 'MkgChrgCGST').value = 1.5;
            document.getElementById(prefix + 'MkgChrgSGST').value = 1.5;
            //
            if (document.getElementById('totMkngOrLabChgs').value == '' || document.getElementById('totMkngOrLabChgs').value == 'NaN') {
                //
//                if (document.getElementById('paymentMode').value == 'ByCash') {
//                    var utin_oth_chgs_amt = parseFloat(document.getElementById(prefix + 'PayTotOthChgs').value) + parseFloat(document.getElementById('valueAdded').value);
//                } else {
                var utin_oth_chgs_amt = parseFloat(document.getElementById(prefix + 'PayCashOthChgsDisp').value).toFixed(2);
//                }
                //
                document.getElementById('taxOnTotMkgCGSTChrg').value = parseFloat(utin_oth_chgs_amt).toFixed(2);
                document.getElementById('taxOnTotMkgSGSTChrg').value = parseFloat(utin_oth_chgs_amt).toFixed(2);
                //
            } else {
                //
//                if (document.getElementById('paymentMode').value == 'ByCash') {
//                    var utin_oth_chgs_amt = parseFloat(document.getElementById(prefix + 'PayTotOthChgs').value) + parseFloat(document.getElementById('valueAdded').value);
//                } else {
                var utin_oth_chgs_amt = parseFloat(document.getElementById('totMkngOrLabChgs').value).toFixed(2);
//                }
                //
                if (document.getElementById('utin_discount_per_discup').value == '' && document.getElementById('utin_discount_amt_discup').value == '') {
                    document.getElementById('taxOnTotMkgCGSTChrg').value = parseFloat(utin_oth_chgs_amt).toFixed(2);
                    document.getElementById('taxOnTotMkgSGSTChrg').value = parseFloat(utin_oth_chgs_amt).toFixed(2);
                }
                //
            }
            //
        } else {
            //
            document.getElementById(prefix + 'MkgChrgCGST').value = 0;
            document.getElementById(prefix + 'MkgChrgSGST').value = 0;
            //alert(document.getElementById('totMkngOrLabChgs').value);
            if (document.getElementById('totMkngOrLabChgs').value == '' || document.getElementById('totMkngOrLabChgs').value == 'NaN') {
                //alert('Hello');
                document.getElementById('taxOnTotMkgCGSTChrg').value = 0.00;
                document.getElementById('taxOnTotMkgSGSTChrg').value = 0.00;
            } else {
                //
//                if (document.getElementById('paymentMode').value == 'ByCash') {
//                    var utin_oth_chgs_amt = parseFloat(document.getElementById(prefix + 'PayTotOthChgs').value) + parseFloat(document.getElementById('valueAdded').value);
//                } else {
                var utin_oth_chgs_amt = parseFloat(document.getElementById('totMkngOrLabChgs').value).toFixed(2);
//                }
                //
                document.getElementById('taxOnTotMkgCGSTChrg').value = parseFloat(utin_oth_chgs_amt).toFixed(2);
                document.getElementById('taxOnTotMkgSGSTChrg').value = parseFloat(utin_oth_chgs_amt).toFixed(2);
            }
        }
    }
    //
    // START CODE To Apply Tax on Total Amount (Metal Valuation + Other Charges + Crystal Charges) @PRIYANKA-01JAN18
    if (document.getElementById('utin_pay_tax_on_total_amt_chk').checked) {

        var metVal = (parseFloat(itemValIncludingTax)).toFixed(2); // Metal Valuation
        //alert('metVal === ' + metVal);

        var otherChrgs = document.getElementById(prefix + 'PayCashOthChgsDisp').value; // Other Charges
        if (typeof (otherChrgs) != 'undefined' && otherChrgs != null) {
            otherChrgs = otherChrgs.replace(/\,/g, '');
        }

        //alert('otherChrgs === ' + otherChrgs);

        var crystalChrgs = document.getElementById(prefix + 'PayCrystalAmtDisp').value; // Crystal Charges
        if (typeof (crystalChrgs) != 'undefined' && crystalChrgs != null) {
            crystalChrgs = crystalChrgs.replace(/\,/g, '');
        }

        //alert('crystalChrgs === ' + crystalChrgs);

        var finalTaxAmt = (parseFloat(metVal) + parseFloat(otherChrgs) + parseFloat(crystalChrgs)).toFixed(2); // Total Amount

        //alert('finalTaxAmt == ' + finalTaxAmt);

        document.getElementById('taxOnTotAmt').value = parseFloat(finalTaxAmt).toFixed(2); // Tax Apply on Total Amount
        document.getElementById('taxOnCGSTTotAmt').value = parseFloat(finalTaxAmt).toFixed(2); // Tax Apply on Total Amount
        document.getElementById('taxOnSGSTTotAmt').value = parseFloat(finalTaxAmt).toFixed(2); // Tax Apply on Total Amount
        document.getElementById('taxOnIGSTTotAmt').value = parseFloat(finalTaxAmt).toFixed(2); // Tax Apply on Total Amount
        document.getElementById('taxableAmount').value = parseFloat(finalTaxAmt).toFixed(2);
    }
    // END CODE To Apply Tax on Total Amount (Metal Valuation + Other Charges + Crystal Charges) @PRIYANKA-01JAN18

    var mkgChrgCGST = document.getElementById(prefix + 'MkgChrgCGST').value;
    var mkgChrgSGST = document.getElementById(prefix + 'MkgChrgSGST').value;

    var CGST = document.getElementById(prefix + 'CGST').value;
    var SGST = document.getElementById(prefix + 'SGST').value;
    var IGST = document.getElementById(prefix + 'IGST').value;

    if (CGST == '' || CGST == 'NaN') {
        CGST = 0;
    }

    if (SGST == '' || SGST == 'NaN') {
        SGST = 0;
    }

    if (IGST == '' || IGST == 'NaN') {
        IGST = 0;
    }

    var taxOnTotAmt = document.getElementById('taxOnTotAmt').value;
    if (taxOnTotAmt == '' || taxOnTotAmt == 'NaN') {
        taxOnTotAmt = 0;
    }

    var totOthTax = parseFloat(otherTax) / 100;
    document.getElementById(prefix + 'PayTaxAmtDisp').value = (parseFloat(totOthTax * parseFloat(taxOnTotAmt))).toFixed(2);
    document.getElementById(prefix + 'TaxAmt').value = (parseFloat(totOthTax * parseFloat(taxOnTotAmt))).toFixed(2);

    // MAKING CHRG CGST CALC

    var taxOnTotMkgCGSTChrg = document.getElementById('taxOnTotMkgCGSTChrg').value;
    taxOnTotMkgCGSTChrg = taxOnTotMkgCGSTChrg.replace(/\,/g, '');

    //alert('taxOnTotMkgCGSTChrg==' + taxOnTotMkgCGSTChrg);

    if (taxOnTotMkgCGSTChrg == '' || taxOnTotMkgCGSTChrg == 'NaN') {
        taxOnTotMkgCGSTChrg = 0;
    }

    //alert('taxOnTotMkgCGSTChrg2' + taxOnTotMkgCGSTChrg);

    if (mkgChrgCGST == '' || mkgChrgCGST == 'NaN') {
        mkgChrgCGST = 0;
    }
    var totMkgCGST = parseFloat(mkgChrgCGST) / 100;
    document.getElementById(prefix + 'PayMkgCGSTAmtDisp').value = (parseFloat(totMkgCGST * parseFloat(taxOnTotMkgCGSTChrg))).toFixed(2);
    document.getElementById(prefix + 'MkgChrgCGSTAmt').value = (parseFloat(totMkgCGST * parseFloat(taxOnTotMkgCGSTChrg))).toFixed(2);

    // MAKING CHRG SGST CALC

    var taxOnTotMkgSGSTChrg = document.getElementById('taxOnTotMkgSGSTChrg').value;
    taxOnTotMkgSGSTChrg = taxOnTotMkgSGSTChrg.replace(/\,/g, '');

    if (taxOnTotMkgSGSTChrg == '' || taxOnTotMkgSGSTChrg == 'NaN') {
        taxOnTotMkgSGSTChrg = 0;
    }

    if (mkgChrgSGST == '' || mkgChrgSGST == 'NaN') {
        mkgChrgSGST = 0;
    }
    var totMkgSGST = parseFloat(mkgChrgSGST) / 100;
    document.getElementById(prefix + 'PayMkgSGSTAmtDisp').value = (parseFloat(totMkgSGST * parseFloat(taxOnTotMkgSGSTChrg))).toFixed(2);
    document.getElementById(prefix + 'MkgChrgSGSTAmt').value = (parseFloat(totMkgSGST * parseFloat(taxOnTotMkgSGSTChrg))).toFixed(2);

    // CGST Calc
    var taxOnCGSTTotAmt = document.getElementById('taxOnCGSTTotAmt').value;

    if (taxOnCGSTTotAmt == '' || taxOnCGSTTotAmt == 'NaN') {
        taxOnCGSTTotAmt = 0;
    }

    var totCGST = parseFloat(CGST) / 100;

    if (document.getElementById('CGSTCheck').checked == false) {
        document.getElementById(prefix + 'PayCGSTAmtDisp').value = '0.00';
    } else {
        document.getElementById(prefix + 'PayCGSTAmtDisp').value = (parseFloat(totCGST * parseFloat(taxOnCGSTTotAmt))).toFixed(2);
    }
    document.getElementById(prefix + 'CGSTAmt').value = (parseFloat(totCGST * parseFloat(taxOnCGSTTotAmt))).toFixed(2);

    // SGST Calc
    var taxOnSGSTTotAmt = document.getElementById('taxOnSGSTTotAmt').value;
    if (taxOnSGSTTotAmt == '' || taxOnSGSTTotAmt == 'NaN') {
        taxOnSGSTTotAmt = 0;
    }

    var totSGST = parseFloat(SGST) / 100;

    if (document.getElementById('SGSTCheck').checked == false) {
        document.getElementById(prefix + 'PaySGSTAmtDisp').value = '0.00';
    } else {
        document.getElementById(prefix + 'PaySGSTAmtDisp').value = (parseFloat(totSGST * parseFloat(taxOnSGSTTotAmt))).toFixed(2);
    }
    document.getElementById(prefix + 'SGSTAmt').value = (parseFloat(totSGST * parseFloat(taxOnSGSTTotAmt))).toFixed(2);

    // IGST Calc
    var taxOnIGSTTotAmt = document.getElementById('taxOnIGSTTotAmt').value;
    if (taxOnIGSTTotAmt == '' || taxOnIGSTTotAmt == 'NaN') {
        taxOnIGSTTotAmt = 0;
    }

    var totIGST = parseFloat(IGST) / 100;
    document.getElementById(prefix + 'PayIGSTAmtDisp').value = (parseFloat(totIGST * parseFloat(taxOnIGSTTotAmt))).toFixed(2);
    document.getElementById(prefix + 'IGSTAmt').value = (parseFloat(totIGST * parseFloat(taxOnIGSTTotAmt))).toFixed(2);
}


function calcCourierChrg(prefix, finalTotalAmnt) {
    var courierAmt = document.getElementById(prefix + 'PayCourierAmt').value;
    if (courierAmt == '' || courierAmt == 'NaN') {
        courierAmt = 0;
    }

    document.getElementById(prefix + 'PayCourierAmtDisp').value = parseFloat(courierAmt).toFixed(2);
    finalTotalAmnt = parseFloat(finalTotalAmnt) + parseFloat(courierAmt);
    return finalTotalAmnt;
}

function calcCashNdChequeAmt(prefix) {
    var totalAmount = 0;
    var cashRec = document.getElementById(prefix + 'PayCashAmtRec').value;
    var chequeRec = document.getElementById(prefix + 'PayChequeAmt').value;
    if (cashRec == null || cashRec == '') {
        cashRec = 0;
    }

    if (chequeRec == null || chequeRec == '') {
        chequeRec = 0;
    }


    totalAmount = (parseFloat(cashRec) + parseFloat(chequeRec)).toFixed(2);
    return totalAmount;
}
// START CODE TO MODIFY FUNCTION FOR CALCULATE DISCOUNT IN % ACCORDING TO DISCOUNT AMT @PRIYANKA-05MAR18
function discountAmt(prefix) {
    var discountAmount = 0;
    if ((document.getElementById('utin_discount_per').value != '') && ((document.getElementById(prefix + 'PayDiscount').value == '0') || (document.getElementById(prefix + 'PayDiscount').value == null) || (document.getElementById(prefix + 'PayDiscount').value == ''))) {
        // START CODE TO CALCULATE DISCOUNT AMOUNT ACCORDING TO DISCOUNT IN % @PRIYANKA-05MAR18
        // CALCULATE DISCOUNT AMT @PRIYANKA-05MAR18
        //if (document.getElementById(prefix + 'PayFinAmtBalDisp').value > 0) {
        var discRec = (parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value) * parseFloat(document.getElementById('utin_discount_per').value) / 100).toFixed(2);
        document.getElementById(prefix + 'PayDiscount').value = Math_round(parseFloat(discRec)).toFixed(2);
        //}
        // END CODE TO CALCULATE DISCOUNT AMOUNT ACCORDING TO DISCOUNT IN % @PRIYANKA-05MAR18
    } else {
        var discRec = document.getElementById(prefix + 'PayDiscount').value;
        // START CODE TO CALCULATE DISCOUNT IN % ACCORDING TO DISCOUNT AMT @PRIYANKA-05MAR18
        // CALCULATE DISCOUNT IN % @PRIYANKA-05MAR18
        //if (document.getElementById(prefix + 'PayFinAmtBalDisp').value > 0) {
        var utin_discount_per = ((parseFloat(discRec) * 100) / parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value)).toFixed(2);
        document.getElementById('utin_discount_per').value = (parseFloat(utin_discount_per)).toFixed(2);
        //} 
        // END CODE TO CALCULATE DISCOUNT IN % ACCORDING TO DISCOUNT AMT @PRIYANKA-05MAR18
    }
    // DISCOUNT IN AMT @PRIYANKA-05MAR18
    if (discRec == '' || discRec == 'NaN') {
        discRec = 0;
    }
    // DISCOUNT IN % @PRIYANKA-05MAR18
    if (document.getElementById('utin_discount_per').value == 'NaN') {
        document.getElementById('utin_discount_per').value = 0;
    }
    // DISCOUNT IN AMT @PRIYANKA-05MAR18
    if (document.getElementById(prefix + 'PayDiscount').value == 'NaN') {
        document.getElementById(prefix + 'PayDiscount').value = 0;
    }
    // START CODE TO DISPLAY DISCOUNT AMOUNT ON PAYMENT PANEL @PRIYANKA-05MAR18
    document.getElementById(prefix + 'PayDiscountDisp').value = Math_round(parseFloat(discRec)).toFixed(2);
    discountAmount = Math_round(parseFloat(discRec)).toFixed(2);
    return discountAmount;
}
// END CODE TO MODIFY FUNCTION FOR CALCULATE DISCOUNT IN % ACCORDING TO DISCOUNT AMT @PRIYANKA-05MAR18
function calcCardAmt(prefix) {
    var totCardAmt = 0;
    var cardAmount = document.getElementById(prefix + 'PayCardAmt').value;
    var transChrg = document.getElementById(prefix + 'PayTransChrgAmt').value;
    if (cardAmount == null || cardAmount == '') {
        cardAmount = 0;
    }
    if (transChrg == null || transChrg == '') {
        transChrg = 0;
    }
    totCardAmt = (parseFloat(cardAmount) + parseFloat(transChrg)).toFixed(2);
    document.getElementById(prefix + 'PayCardFinalAmt').value = totCardAmt;
    return totCardAmt;
}

function calcOnlinePayAmt(prefix) {
    var totOnlinePayAmt = 0;
    var onlinePayAmount = document.getElementById(prefix + 'PayOnlinePaymentAmt').value;
    var commPaid = document.getElementById(prefix + 'PayCommPayAmt').value;
    if (onlinePayAmount == null || onlinePayAmount == '') {
        onlinePayAmount = 0;
    }
    if (commPaid == null || commPaid == '') {
        commPaid = 0;
    }
    totOnlinePayAmt = (parseFloat(onlinePayAmount) - parseFloat(Math.abs(commPaid))).toFixed(2);
    document.getElementById(prefix + 'PayOnlinePaymentFinalAmt').value = totOnlinePayAmt;
    return totOnlinePayAmt;
}
// PREV INV GD WT BAL CHECK/UNCHECK CAL FUNCTION @PRIYANKA-15MAR18
function calcGoldWeight(checked, invCount) {
    //
    var weightToPay = 0;
    var convertedWeight = 0;
    var transactionWeight = 0;
    var convertedTransactionWeight = 0;
    var prefix = document.getElementById('prefix').value;
    var weight = parseFloat(document.getElementById('goldWeight' + invCount).value);
    
    //alert('weight == ' + weight);
    
    var weightTyp = document.getElementById('goldWeightType' + invCount).value;
    
    //alert('weightTyp == ' + weightTyp);
      
    //
    if (document.getElementById(prefix + 'GoldWtPrevBal').value == 'NaN' || document.getElementById(prefix + 'GoldWtPrevBal').value == '') {
        document.getElementById(prefix + 'GoldWtPrevBal').value = 0;
    }
    //
    if (document.getElementById(prefix + 'GoldWtPrevBalDRAmt').value == 'NaN' || document.getElementById(prefix + 'GoldWtPrevBalDRAmt').value == '') {
        document.getElementById(prefix + 'GoldWtPrevBalDRAmt').value = 0;
    }
    //
    if (document.getElementById(prefix + 'GoldWtPrevBalCRAmt').value == 'NaN' || document.getElementById(prefix + 'GoldWtPrevBalCRAmt').value == '') {
        document.getElementById(prefix + 'GoldWtPrevBalCRAmt').value = 0;
    }
    //
    var prevWeight = parseFloat(document.getElementById(prefix + 'GoldWtPrevBal').value);
    var prevWeightTyp = document.getElementById(prefix + 'GoldWtPrevBalType').value;
    var transactionWeightTyp = document.getElementById(prefix + 'GoldTotFFineWtType').value;
    //
    convertedWeight = convertWeight(weight, prevWeightTyp, weightTyp);
    //
    if (checked) {
        if (document.getElementById('gdWtTransType' + invCount).value == 'DR') {
            document.getElementById(prefix + 'GoldWtPrevBalDRAmt').value = parseFloat(document.getElementById(prefix + 'GoldWtPrevBalDRAmt').value) + parseFloat(convertedWeight);
        } else if (document.getElementById('gdWtTransType' + invCount).value == 'CR') {
            document.getElementById(prefix + 'GoldWtPrevBalCRAmt').value = parseFloat(document.getElementById(prefix + 'GoldWtPrevBalCRAmt').value) + parseFloat(convertedWeight);
        }
    } else {
        if (document.getElementById('gdWtTransType' + invCount).value == 'DR') {
            document.getElementById(prefix + 'GoldWtPrevBalDRAmt').value = parseFloat(document.getElementById(prefix + 'GoldWtPrevBalDRAmt').value) - parseFloat(convertedWeight);
        } else if (document.getElementById('gdWtTransType' + invCount).value == 'CR') {
            document.getElementById(prefix + 'GoldWtPrevBalCRAmt').value = parseFloat(document.getElementById(prefix + 'GoldWtPrevBalCRAmt').value) - parseFloat(convertedWeight);
        }
    }
    //
    weightToPay = parseFloat(document.getElementById(prefix + 'GoldWtPrevBalDRAmt').value) - parseFloat(document.getElementById(prefix + 'GoldWtPrevBalCRAmt').value);
    //
    //alert('weightToPay == ' + weightToPay);
    //
    if (weightToPay < 0) {
        document.getElementById(prefix + 'GoldWtPrevBalCRDR').value = 'CR';
    } else {
        document.getElementById(prefix + 'GoldWtPrevBalCRDR').value = 'DR';
    }
    //
    // START OF CODE TO SET COLOR FOR GOLD PREV WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
    if (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR') {
        document.getElementById('metal1WtPrevBal').style.color = 'red';
        document.getElementById(prefix + 'GoldWtPrevBalCRDR').style.color = 'red';
    } else if (document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR') {
        document.getElementById('metal1WtPrevBal').style.color = 'green';
        document.getElementById(prefix + 'GoldWtPrevBalCRDR').style.color = 'green';
    }
    // END OF CODE TO SET COLOR FOR GOLD PREV WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
    //
    document.getElementById(prefix + 'GoldWtPrevBal').value = parseFloat(Math.abs(weightToPay)).toFixed(3);
    //
    document.getElementById('metal1WtPrevBal').value = parseFloat(Math.abs(weightToPay)).toFixed(3) + ' ' + prevWeightTyp;
    // START @PRIYANKA-05APR18
    // document.getElementById('metal1WtPrevBal').value = (parseFloat(document.getElementById('metal1WtPrevBal').value) + parseFloat(document.getElementById('utin_cash_to_metalwt').value)).toFixed(3);
    // END @PRIYANKA-05APR18
    if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
        // START CODE TO ADD CONDITION FOR PAYMENT/RECEIPT PANEL (RATE CUT/NO RATE CUT CASE) PREV GD BAL CHECK & UNCHECK @PRIYANKA-15MAR18
        if (document.getElementById('PaymentReceiptPanel').value == 'RECEIPT' || document.getElementById('PaymentReceiptPanel').value == 'PAYMENT' || document.getElementById('payPanelName').value == 'SlPrPayment' || document.getElementById('payPanelName').value == 'StockReturnPanel' || document.getElementById('payPanelName').value == 'RawPayment' || document.getElementById('payPanelName').value == 'InvoicePayment' || document.getElementById('payPanelName').value == 'NwOrPayment') {
            //
            if (document.getElementById('paymentMode').value == 'RateCut') {
                //
                document.getElementById(prefix + 'GoldRtCtWtBal').value = calcWeightBalance(prefix, document.getElementById(prefix + 'GoldWtPrevBalCRDR').value, document.getElementById(prefix + 'GoldWtPrevBal').value, document.getElementById(prefix + 'GoldTotFineWt').value, document.getElementById(prefix + 'GoldWtRecBal').value, document.getElementById(prefix + 'RtCtGdCRDR'));
                //
            }
            //
        }
        // END CODE TO ADD CONDITION FOR PAYMENT/RECEIPT PANEL (RATE CUT/NO RATE CUT CASE) PREV GD BAL CHECK & UNCHECK @PRIYANKA-15MAR18
        document.getElementById(prefix + 'PayGoldWtBal').value = calcWeightBalance(prefix, document.getElementById(prefix + 'GoldWtPrevBalCRDR').value, document.getElementById(prefix + 'GoldWtPrevBal').value, document.getElementById(prefix + 'GoldTotFineWt').value, document.getElementById(prefix + 'GoldWtRecBal').value, document.getElementById(prefix + 'RtCtGdCRDR'));
        calcWholeSaleRateCut(prefix);
    }
}
// PREV INV SL WT BAL CHECK/UNCHECK CAL FUNCTION @PRIYANKA-15MAR18
function calcSilverWeight(checked, invCount) {
    //
    var weightToPay = 0;
    var convertedWeight = 0;
    var transactionWeight = 0;
    var convertedTransactionWeight = 0;
    var prefix = document.getElementById('prefix').value;
    var weight = parseFloat(document.getElementById('silverWeight' + invCount).value);
    var weightTyp = document.getElementById('silverWeightType' + invCount).value;
    //
    if (document.getElementById(prefix + 'SilverWtPrevBal').value == 'NaN' || document.getElementById(prefix + 'SilverWtPrevBal').value == '') {
        document.getElementById(prefix + 'SilverWtPrevBal').value = 0;
    }
    //
    if (document.getElementById(prefix + 'SilverWtPrevBalDRAmt').value == 'NaN' || document.getElementById(prefix + 'SilverWtPrevBalDRAmt').value == '') {
        document.getElementById(prefix + 'SilverWtPrevBalDRAmt').value = 0;
    }
    //
    if (document.getElementById(prefix + 'SilverWtPrevBalCRAmt').value == 'NaN' || document.getElementById(prefix + 'SilverWtPrevBalCRAmt').value == '') {
        document.getElementById(prefix + 'SilverWtPrevBalCRAmt').value = 0;
    }
    //
    var prevWeight = parseFloat(document.getElementById(prefix + 'SilverWtPrevBal').value);
    var prevWeightTyp = document.getElementById(prefix + 'SilverWtPrevBalType').value;
    var transactionWeightTyp = document.getElementById(prefix + 'SilverTotFFineWtType').value;
    //
    convertedWeight = convertWeight(weight, prevWeightTyp, weightTyp);
    //
    if (checked) {
        if (document.getElementById('slWtTransType' + invCount).value == 'DR') {
            document.getElementById(prefix + 'SilverWtPrevBalDRAmt').value = parseFloat(document.getElementById(prefix + 'SilverWtPrevBalDRAmt').value) + parseFloat(convertedWeight);
        } else if (document.getElementById('slWtTransType' + invCount).value == 'CR') {
            document.getElementById(prefix + 'SilverWtPrevBalCRAmt').value = parseFloat(document.getElementById(prefix + 'SilverWtPrevBalCRAmt').value) + parseFloat(convertedWeight);
        }
    } else {
        if (document.getElementById('slWtTransType' + invCount).value == 'DR') {
            document.getElementById(prefix + 'SilverWtPrevBalDRAmt').value = parseFloat(document.getElementById(prefix + 'SilverWtPrevBalDRAmt').value) - parseFloat(convertedWeight);
        } else if (document.getElementById('slWtTransType' + invCount).value == 'CR') {
            document.getElementById(prefix + 'SilverWtPrevBalCRAmt').value = parseFloat(document.getElementById(prefix + 'SilverWtPrevBalCRAmt').value) - parseFloat(convertedWeight);
        }
    }
    //
    weightToPay = parseFloat(document.getElementById(prefix + 'SilverWtPrevBalDRAmt').value) - parseFloat(document.getElementById(prefix + 'SilverWtPrevBalCRAmt').value);
    //
    if (weightToPay < 0) {
        document.getElementById(prefix + 'SilverWtPrevBalCRDR').value = 'CR';
    } else {
        document.getElementById(prefix + 'SilverWtPrevBalCRDR').value = 'DR';
    }
    
    // START OF CODE TO SET COLOR FOR SILVER PREV WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
    if (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'DR') {
        document.getElementById('metal2WtPrevBal').style.color = 'red';
        document.getElementById(prefix + 'SilverWtPrevBalCRDR').style.color = 'red';
    } else if (document.getElementById(prefix + 'SilverWtPrevBalCRDR').value == 'CR') {
        document.getElementById('metal2WtPrevBal').style.color = 'green';
        document.getElementById(prefix + 'SilverWtPrevBalCRDR').style.color = 'green';
    }
    // END OF CODE TO SET COLOR FOR SILVER PREV WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
    
    document.getElementById(prefix + 'SilverWtPrevBal').value = parseFloat(Math.abs(weightToPay)).toFixed(3);
    //
    document.getElementById('metal2WtPrevBal').value = parseFloat(Math.abs(weightToPay)).toFixed(3) + ' ' + prevWeightTyp;
    //
    if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
        // START CODE TO ADD CONDITION FOR PAYMENT/RECEIPT PANEL (RATE CUT/NO RATE CUT CASE) PREV INV SL BAL CHECK & UNCHECK @PRIYANKA-15MAR18
        if (document.getElementById('PaymentReceiptPanel').value == 'RECEIPT' || document.getElementById('PaymentReceiptPanel').value == 'PAYMENT' || document.getElementById('payPanelName').value == 'SlPrPayment' || document.getElementById('payPanelName').value == 'StockReturnPanel' || document.getElementById('payPanelName').value == 'RawPayment' || document.getElementById('payPanelName').value == 'InvoicePayment') {
            //
            if (document.getElementById('paymentMode').value == 'RateCut') {
                document.getElementById(prefix + 'SilverRtCtWtBal').value = calcWeightBalance(prefix, document.getElementById(prefix + 'SilverWtPrevBalCRDR').value, document.getElementById(prefix + 'SilverWtPrevBal').value, document.getElementById(prefix + 'SilverTotFineWt').value, document.getElementById(prefix + 'SilverWtRecBal').value, document.getElementById(prefix + 'RtCtSlCRDR'));
            }
            //
        }
        // END CODE TO ADD CONDITION FOR PAYMENT/RECEIPT PANEL (RATE CUT/NO RATE CUT CASE) PREV INV SL BAL CHECK & UNCHECK @PRIYANKA-15MAR18
        document.getElementById(prefix + 'PaySilverWtBal').value = calcWeightBalance(prefix, document.getElementById(prefix + 'SilverWtPrevBalCRDR').value, document.getElementById(prefix + 'SilverWtPrevBal').value, document.getElementById(prefix + 'SilverTotFineWt').value, document.getElementById(prefix + 'SilverWtRecBal').value, document.getElementById(prefix + 'RtCtSlCRDR'));
        calcWholeSaleRateCut(prefix);
    }
}
// PREV INV CASH AMOUNT CHECK/UNCHECK CAL FUNCTION @PRIYANKA-15MAR18
function calcCashAmount(checked, invCount) {
    
    var amountToPay = 0;
    var prefix = document.getElementById('prefix').value;
    var amount = parseFloat(document.getElementById('cashAmount' + invCount).value);
    
    if (document.getElementById(prefix + 'PayPrevTotAmt').value == 'NaN' || document.getElementById(prefix + 'PayPrevTotAmt').value == '') {
        document.getElementById(prefix + 'PayPrevTotAmt').value = 0;
    }
    
    if (document.getElementById(prefix + 'PayPrevCashBalDRAmt').value == 'NaN' || document.getElementById(prefix + 'PayPrevCashBalDRAmt').value == '') {
        document.getElementById(prefix + 'PayPrevCashBalDRAmt').value = 0;
    }
    
    if (document.getElementById(prefix + 'PayPrevCashBalCRAmt').value == 'NaN' || document.getElementById(prefix + 'PayPrevCashBalCRAmt').value == '') {
        document.getElementById(prefix + 'PayPrevCashBalCRAmt').value = 0;
    }
    
    var prevAmount = parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value);
   
    // START OF CODE TO SET COLOR FOR PREV WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
    if (document.getElementById('cashTransType' + invCount).value == 'DR') {
        document.getElementById('cashAmount' + invCount).style.color = 'red';
        document.getElementById('cashTransType' + invCount).style.color = 'red';
    } else if (document.getElementById('cashTransType' + invCount).value == 'CR') {
        document.getElementById('cashAmount' + invCount).style.color = 'green';
        document.getElementById('cashTransType' + invCount).style.color = 'green';
    }
    // END OF CODE TO SET COLOR FOR PREV WT BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
     
    if (checked) {
        if (document.getElementById('cashTransType' + invCount).value == 'DR') {
            document.getElementById(prefix + 'PayPrevCashBalDRAmt').value = parseFloat(document.getElementById(prefix + 'PayPrevCashBalDRAmt').value) + parseFloat(amount);
        } else if (document.getElementById('cashTransType' + invCount).value == 'CR') {
            document.getElementById(prefix + 'PayPrevCashBalCRAmt').value = parseFloat(document.getElementById(prefix + 'PayPrevCashBalCRAmt').value) + parseFloat(amount);
        }
    } else {
        if (document.getElementById('cashTransType' + invCount).value == 'DR') {
            document.getElementById(prefix + 'PayPrevCashBalDRAmt').value = parseFloat(document.getElementById(prefix + 'PayPrevCashBalDRAmt').value) - parseFloat(amount);
        } else if (document.getElementById('cashTransType' + invCount).value == 'CR') {
            document.getElementById(prefix + 'PayPrevCashBalCRAmt').value = parseFloat(document.getElementById(prefix + 'PayPrevCashBalCRAmt').value) - parseFloat(amount);
        }
    }
    
    amountToPay = parseFloat(document.getElementById(prefix + 'PayPrevCashBalDRAmt').value) - parseFloat(document.getElementById(prefix + 'PayPrevCashBalCRAmt').value);
    //alert('amountToPay == ' + amountToPay);  
    //   
    // alert('PayPrevCashBalCRDR **== ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);  
    //   
    // START CODE TO SET CR/DR ACCORDING TO CR/DR AMOUNT @PRIYANKA-15MAR18
    if (amountToPay > 0) {
        // 
        // START OF CODE TO SET COLOR FOR PREV CASH BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        document.getElementById(prefix + 'PayPrevCashBalCRDR').value = 'DR';
        document.getElementById('PrevTotOpeningAmtCRDR').value = 'DR';
        document.getElementById(prefix + 'PayPrevAmtDisp').style.color = 'red';
        document.getElementById(prefix + 'PayPrevCashBalCRDR').style.color = 'red';
        document.getElementById('prevAmountTdId').style.color = 'red';
        
        // END OF CODE TO SET COLOR FOR PREV CASH BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        //
        // START @PRIYANKA-05APR18
        // START @PRIYANKA-02APR18
//        if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
//            document.getElementById('utin_prev_cash_opening_CRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
//            document.getElementById('utin_prev_cash_opening_CRDR').style.color = 'green';
//            document.getElementById('utin_prev_cash_opening').style.color = 'green';
//        }
        // END @PRIYANKA-02APR18
        // END @PRIYANKA-05APR18
        //
    } else {
        //
        // START OF CODE TO SET COLOR FOR PREV CASH BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        document.getElementById(prefix + 'PayPrevCashBalCRDR').value = 'CR';
        document.getElementById('PrevTotOpeningAmtCRDR').value = 'CR';
        document.getElementById(prefix + 'PayPrevAmtDisp').style.color = 'green';
        document.getElementById(prefix + 'PayPrevCashBalCRDR').style.color = 'green';
        document.getElementById('prevAmountTdId').style.color = 'green';
        
        // START @PRIYANKA-05APR18
        // END OF CODE TO SET COLOR FOR PREV CASH BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        // START @PRIYANKA-02APR18
//        if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
//            document.getElementById('utin_prev_cash_opening_CRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
//            document.getElementById('utin_prev_cash_opening_CRDR').style.color = 'red';
//            document.getElementById('utin_prev_cash_opening').style.color = 'red';
//        }
        // END @PRIYANKA-02APR18
        // END @PRIYANKA-05APR18
    }
    // END CODE TO SET CR/DR ACCORDING TO CR/DR AMOUNT @PRIYANKA-15MAR18
    // alert('PayPrevCashBalCRDR == ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value); 
    // START @PRIYANKA-05APR18
    document.getElementById('PrevTotOpeningAmt').value = parseFloat(Math.abs(amountToPay)).toFixed(2);

    if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
        document.getElementById("utin_cash_to_metal").value = parseFloat(Math.abs(amountToPay)).toFixed(2);
    }

    // END @PRIYANKA-05APR18
    
    // START @PRIYANKA-05APR18
    if (document.getElementById('PrevTotOpeningAmt').value == '' || document.getElementById('PrevTotOpeningAmt').value == 'NaN') {
        document.getElementById('PrevTotOpeningAmt').value = '0.00';
    }
    // END @PRIYANKA-05APR18
    
    document.getElementById(prefix + 'PayPrevTotAmt').value = parseFloat(Math.abs(amountToPay)).toFixed(2);
    document.getElementById(prefix + 'PayPrevAmtDisp').value = parseFloat(Math.abs(amountToPay)).toFixed(2);
    
    // alert('paymentMode == ' + document.getElementById('paymentMode').value);
    // alert('PrevTotOpeningAmt == ' + document.getElementById('PrevTotOpeningAmt').value);  
    
    // START @PRIYANKA-02APR18
    if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
        // START @PRIYANKA-05APR18
        document.getElementById('utin_prev_cash_opening').value = parseFloat(Math.abs(document.getElementById('PrevTotOpeningAmt').value)).toFixed(2);
        // START @PRIYANKA-10APR18
        document.getElementById('utin_prev_cash_opening_CRDR').value = document.getElementById('PrevTotOpeningAmtCRDR').value;
        // END @PRIYANKA-10APR18
        // END @PRIYANKA-05APR18
        
        // alert('utin_prev_cash_opening == ' + document.getElementById('utin_prev_cash_opening').value);

        // START OF CODE TO SET COLOR FOR PREV CASH BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        // START @PRIYANKA-07APR18
        // if (document.getElementById('paymentMode').value == 'NoRateCut') {
        if (document.getElementById("utin_prev_cash_opening_CRDR").value == 'DR') {
            document.getElementById('utin_prev_cash_opening_CRDR').style.color = 'red';
            document.getElementById('utin_prev_cash_opening').style.color = 'red';
        } else if (document.getElementById("utin_prev_cash_opening_CRDR").value == 'CR') {
            document.getElementById('utin_prev_cash_opening_CRDR').style.color = 'green';
            document.getElementById('utin_prev_cash_opening').style.color = 'green';
        }
        // }
        // END @PRIYANKA-07APR18
        
        if (document.getElementById("utin_sl_prev_cash_opening_CRDR").value == 'DR') {
            document.getElementById('utin_sl_prev_cash_opening_CRDR').style.color = 'red';
            document.getElementById('utin_sl_prev_cash_opening').style.color = 'red';
        } else if (document.getElementById("utin_sl_prev_cash_opening_CRDR").value == 'CR') {
            document.getElementById('utin_sl_prev_cash_opening_CRDR').style.color = 'green';
            document.getElementById('utin_sl_prev_cash_opening').style.color = 'green';
        }
        // END OF CODE TO SET COLOR FOR PREV CASH BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
        
    }
    // END @PRIYANKA-02APR18
    
    calcPaymentCashBalance(prefix);
    
}
// START CODE TO PASS CR/DR FOR PAYMENT/RECEIPT PANEL NAME @PRIYANKA-16MAR18
function searchPrevInvoiceDetails(firmId, userId, panelName, transPanelName, mainPanelName, PaymentReceiptPanel, transCRDR) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("paymentDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/ompyamt.php?firmId=" + firmId + "&transCRDR=" + transCRDR + "&PaymentReceiptPanel=" + PaymentReceiptPanel + "&userId=" + userId + "&paymentPanelName=" + panelName + "&transPanelName=" + transPanelName + "&mainPanelName=" + mainPanelName, true);
    xmlhttp.send();
}
// END CODE TO PASS CR/DR FOR PAYMENT/RECEIPT PANEL NAME @PRIYANKA-16MAR18
function changeSlPrMetalRateByVal() {
    var goldWeight = 0;
    var silverWeight = 0;
    var metalWeight = document.getElementById('slPrItemFFineWeight').value;
    var payTotalWeightType1 = document.getElementById('slPrItemNTWT').value;
    if (document.getElementById('slPrItemMetal').value == 'Gold' || document.getElementById('slPrItemMetal').value == 'Alloy') {
        goldWeight = parseFloat(metalWeight);
        if (document.getElementById('addItemNTWNMetRate').value == '' || document.getElementById('addItemNTWNMetRate').value == 'NaN')
            document.getElementById('addItemNTWNMetRate').value = 0;
        if (document.getElementById('addItemNTWNMetRate').value != 0) {
            if (payTotalWeightType1 == 'KG') {
                document.getElementById('slPrItemMetalRate').value = parseFloat(parseFloat(document.getElementById('addItemNTWNMetRate').value) / (goldWeight * document.getElementById('gmWtInKg').value)).toFixed(2);
            } else if (payTotalWeightType1 == 'GM') {
                document.getElementById('slPrItemMetalRate').value = parseFloat(parseFloat(parseFloat(document.getElementById('addItemNTWNMetRate').value) / goldWeight) * document.getElementById('gmWtInGm').value).toFixed(2);
            } else if (payTotalWeightType1 == 'MG') {
                document.getElementById('slPrItemMetalRate').value = parseFloat(parseFloat(parseFloat(document.getElementById('addItemNTWNMetRate').value) / goldWeight) * document.getElementById('gmWtInMg').value).toFixed(2);
            }
        }
    }
    if (document.getElementById('slPrItemMetal').value == 'Silver') {
        silverWeight = parseFloat(metalWeight);
        if (payTotalWeightType1 == 'KG') {
            document.getElementById('slPrItemMetalRate').value = parseFloat(parseFloat(document.getElementById('addItemNTWNMetRate').value) / (silverWeight * document.getElementById('srGmWtInKg').value)).toFixed(2);
        } else if (payTotalWeightType1 == 'GM') {
            document.getElementById('slPrItemMetalRate').value = parseFloat((parseFloat(document.getElementById('addItemNTWNMetRate').value) / silverWeight) * (document.getElementById('srGmWtInGm').value)).toFixed(2);
        } else if (payTotalWeightType1 == 'MG') {
            document.getElementById('slPrItemMetalRate').value = parseFloat((parseFloat(document.getElementById('addItemNTWNMetRate').value) / silverWeight) * (document.getElementById('srGmWtInMg').value)).toFixed(2);
        }
    }

}

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// START OF CALCULATING MAKING CHARGES FUNCTION ACCORDING TO FINAL VALUATION : Author:PRIYANKA31OCT17
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

function calculateMKGPrice() {
    // VALUATION
    var sttrVal = parseFloat(document.getElementById('addItemNTWNMetRate').value);
    // FINAL VALUATION
    var finalVal = parseFloat(document.getElementById('slPrItemFinalVal').value);
    // TOTAL TAX AMOUNT (CGST,SGST,IGST)
    var totTaxAmt = parseFloat(document.getElementById('slPrItemTotTax').value);
    // GROSS WEIGHT
    var gsWt = parseFloat(document.getElementById('slPrItemGSW').value);
    // TOTAL VALUATION
    var totSttrVal = (parseFloat(sttrVal) + parseFloat(totTaxAmt));
    // CHECKING FINAL VALUATION & VALUATION

    if (finalVal > sttrVal) {
        // MAKING CHARGS
        var mkgChr = (parseFloat(finalVal) - parseFloat(totSttrVal));
        // CHECKING GSWT
        if (gsWt != '0' || gsWt != NULL || gsWt != '') {
            // MAKING CHARGS ACCORDING TO GSWT
            var mkgChrgs = (parseFloat(mkgChr) / parseFloat(gsWt)).toFixed(2);
            // VALUE ADDED
            var valAdded = document.getElementById('slPrItemValueAdded').value;
            // CHECKING MAKING CHARGS & VALUE ADDED

            if (mkgChrgs > valAdded) {

                var finalMkg = parseFloat(mkgChrgs) - parseFloat(valAdded);
                document.getElementById('slPrItemLabCharges').value = parseFloat(finalMkg).toFixed(2);

            }
        }
    }
}

// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX
// END OF CALCULATING MAKING CHARGES FUNCTION ACCORDING TO FINAL VALUATION : Author:PRIYANKA31OCT17
// XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX

function getTaxByVal(prefix) {
    var totalTaxPercent = 0;
    var otherTax = document.getElementById(prefix + 'Tax').value;
    var CGST = document.getElementById(prefix + 'CGST').value;
    var SGST = document.getElementById(prefix + 'SGST').value;
    var IGST = document.getElementById(prefix + 'IGST').value;
    if (CGST == '' || CGST == 'NaN') {
        CGST = 0;
    }
    if (SGST == '' || SGST == 'NaN') {
        SGST = 0;
    }
    if (IGST == '' || IGST == 'NaN') {
        IGST = 0;
    }
    if (otherTax == '' || otherTax == 'NaN') {
        otherTax = 0;
    }
    if (document.getElementById('CGSTCheck').checked) {
        totalTaxPercent += parseFloat(CGST);
    }
    if (document.getElementById('SGSTCheck').checked) {
        totalTaxPercent += parseFloat(SGST);
    }
    if (document.getElementById('IGSTCheck').checked) {
        totalTaxPercent += parseFloat(IGST);
    }
    if (document.getElementById('CommTaxCheck').checked) {
        totalTaxPercent += parseFloat(otherTax);
    }

    var itemValIncludingTax = parseFloat((parseFloat(document.getElementById(prefix + 'PayTotAmtAccess').value) * 100) / parseFloat(100 + parseFloat(totalTaxPercent)));
    return itemValIncludingTax;
}

function calcTotFinAmt(prefix) {
    var totalAmt = 0;
    var crystalAmnt = 0;
    var finalTotalAmnt = 0;
    var itemValIncludingTax = 0;

    if (document.getElementById(prefix + 'PayCrystalAmt').value == '' || document.getElementById(prefix + 'PayCrystalAmt').value == 'NaN') {
        document.getElementById(prefix + 'PayCrystalAmt').value = 0;
    }

    if (document.getElementById(prefix + 'PayTotOthChgs').value == '' || document.getElementById(prefix + 'PayTotOthChgs').value == 'NaN') {
        document.getElementById(prefix + 'PayTotOthChgs').value = 0;
    }

    crystalAmnt = parseFloat(document.getElementById(prefix + 'PayCrystalAmt').value);

    if (document.getElementById(prefix + 'PayTotAmtAccess').value == ''
            || document.getElementById(prefix + 'PayTotAmtAccess').value == 'NaN') {
        document.getElementById(prefix + 'PayTotAmtAccess').value = 0;
    }

    var itemValIncludingTax = parseFloat(document.getElementById(prefix + 'PayTotAmtAccess').value);

//    if (document.getElementById('mainPanelName').value != 'udhaar') {

    if (document.getElementById('TaxByVal').checked) {
        itemValIncludingTax = getTaxByVal(prefix);
    }

    if (document.getElementById('paymentMode').value != 'NoRateCut') {

        document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math_round(parseFloat(itemValIncludingTax)).toFixed(2);

        if (document.getElementById('paymentMode').value != 'RateCut') { //AMOUNT-PRIYANKA-19MAR18
            
            //alert('utin_metal_exchange_chk === ' + document.getElementById('utin_metal_exchange_chk').checked);
            
            // PRIYANKA-30APR18
            if (document.getElementById('utin_metal_exchange_chk').checked) {
                document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math_round(parseFloat(document.getElementById(prefix + 'PayTotAmtBalDisp').value) - parseFloat(document.getElementById(prefix + 'PayTotAmtExchangeDisp').value)).toFixed(2);
            } 
        }
    }
    //}

    // START CODE FOR DISCOUNT APPLY BEFORE GST TAX @PRIYANKA-06MAR18
    if (document.getElementById('utin_discount_per_discup').value == '' && document.getElementById('utin_discount_amt_discup').value == '') {

        document.getElementById(prefix + 'PayTotAmt').value = parseFloat(itemValIncludingTax).toFixed(2);

        if (document.getElementById('paymentMode').value != 'RateCut') { //AMOUNT-PRIYANKA-19MAR18
             
            //alert('utin_metal_exchange_chk = ' + document.getElementById('utin_metal_exchange_chk').checked);
    
            // PRIYANKA-30APR18
            if (document.getElementById('utin_metal_exchange_chk').checked) {
                document.getElementById(prefix + 'PayTotAmt').value = Math_round(parseFloat(document.getElementById(prefix + 'PayTotAmt').value) - parseFloat(document.getElementById(prefix + 'PayTotAmtExchangeDisp').value)).toFixed(2);
            } 
        }
    }
    //
    if (document.getElementById(prefix + 'PayPrevTotAmt').value == 'NaN' || document.getElementById(prefix + 'PayPrevTotAmt').value == '') {
        document.getElementById(prefix + 'PayPrevTotAmt').value = 0;
    }
    //
    if (document.getElementById('utin_discount_per_discup').value == '' && document.getElementById('utin_discount_amt_discup').value == '') {
        //
        // alert('valueAdded **==' + document.getElementById('valueAdded').value);
        // If Payment Mode in ByCash then value added add in other charges @PRIYANKA-20MAR18
//        if (document.getElementById('paymentMode').value == 'ByCash') {
//            var otherChrgsAmt = parseFloat(document.getElementById(prefix + 'PayTotOthChgs').value) + parseFloat(document.getElementById('valueAdded').value); 
//            document.getElementById(prefix + 'PayCashOthChgsDisp').value = Math_round(parseFloat(otherChrgsAmt)).toFixed(2); 
//        } else {
        var otherChrgsAmt = parseFloat(document.getElementById(prefix + 'PayTotOthChgs').value);
//        }
        //
        finalTotalAmnt = parseFloat(parseFloat(document.getElementById(prefix + 'PayTotAmt').value) + parseFloat(otherChrgsAmt) + crystalAmnt).toFixed(2);
        document.getElementById(prefix + 'PayTotCashAmt').value = finalTotalAmnt;
    }
    // END CODE FOR DISCOUNT APPLY BEFORE GST TAX @PRIYANKA-06MAR18

    //alert('finalTotalAmnt == ' + finalTotalAmnt);

//    if (document.getElementById(prefix + 'PayPrevTotAmt').value != '' || document.getElementById(prefix + 'PayPrevTotAmt').value != 0) {
//        if (finalTotalAmnt != '' && finalTotalAmnt != 0) {
//            finalTotalAmnt = calcFinalAmountCRDR(prefix, document.getElementById(prefix + 'PayPrevCashBalCRDR').value, document.getElementById(prefix + 'TransCRDR').value, finalTotalAmnt);
//        } else {
//            finalTotalAmnt = parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value);
//        }
//    }
    return finalTotalAmnt;
}
function calcFinalAmountCRDR(prefix, prevAmtCRDR, currentAmtCRDR, finalTotalAmnt) {
    if ((prevAmtCRDR == 'DR' && currentAmtCRDR == 'DR') ||
            (prevAmtCRDR == 'CR' && currentAmtCRDR == 'CR')) {
        finalTotalAmnt = parseFloat(finalTotalAmnt) + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value);
    } else if ((prevAmtCRDR == 'DR' && currentAmtCRDR == 'CR') ||
            (prevAmtCRDR == 'CR' && currentAmtCRDR == 'DR')) {
        if (currentAmtCRDR == 'DR') {
            finalTotalAmnt = parseFloat(finalTotalAmnt) - parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value);
        } else {
            finalTotalAmnt = Math.abs(parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value) - parseFloat(finalTotalAmnt));
        }
    }
    return finalTotalAmnt;
}

function calcPaymentCashBalance(prefix) {
    
    //alert('PayTotCashAmt ##==' + document.getElementById(prefix + 'PayTotCashAmt').value);

    //alert('PayPrevCashBalCRDR **== ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);     
       
    //alert('TransCRDR **== ' + document.getElementById(prefix + 'TransCRDR').value);     
    //alert('FinalCashCRDR **== ' + document.getElementById(prefix + 'FinalCashCRDR').value); 
    //alert('PayableCashCRDR **== ' + document.getElementById(prefix + 'PayableCashCRDR').value);  
    
    //alert('PayableCashCRDR aa== ' + document.getElementById(prefix + 'PayableCashCRDR').value);   
    
    //alert('payPanelName : ' + document.getElementById("payPanelName").value);

    if (document.getElementById('paymentMode').value == 'RateCut' && document.getElementById(prefix + 'PayPrevAmtDisp').value == '0.00') {

        var PrevGdCashBal = document.getElementById('PrevGdCashBal').value;
        var CashToGdMetalWt = document.getElementById('CashToGdMetalWt').value;
        
        // START @PRIYANKA-11APR18
        var PrevSlCashBal = document.getElementById('PrevSlCashBal').value;
        var CashToSlMetalWt = document.getElementById('CashToSlMetalWt').value;
        // END @PRIYANKA-11APR18

        if ((CashToGdMetalWt > 0 && PrevGdCashBal > 0) || (CashToSlMetalWt > 0 && PrevSlCashBal > 0)) {

//            var FinalGdCRDR = document.getElementById(prefix + 'FinalGdCRDR').value;
//            document.getElementById(prefix + 'PayPrevCashBalCRDR').value = FinalGdCRDR;
//            document.getElementById(prefix + 'TransCRDR').value = FinalGdCRDR;
//            document.getElementById(prefix + 'PayableCashCRDR').value = FinalGdCRDR;
//            document.getElementById(prefix + 'FinalCashCRDR').value = FinalGdCRDR;

        } else {
               
                if (((document.getElementById(prefix + 'FinalGdCRDR').value == 'CR' ||
                     document.getElementById(prefix + 'FinalSlCRDR').value == 'CR')  &&             
                     document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'CR' &&
                     document.getElementById(prefix + 'PayableCashCRDR').value == 'DR') || 
                    ((document.getElementById(prefix + 'FinalGdCRDR').value == 'DR' ||
                     document.getElementById(prefix + 'FinalSlCRDR').value == 'DR') &&             
                     document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'DR' &&
                     document.getElementById(prefix + 'PayableCashCRDR').value == 'CR') &&
                     document.getElementById('paymentMode').value == 'RateCut') {

//                var GoldCashMetal = document.getElementById('utin_cash_to_metal').value;
//                var GoldCashMetalCRDR = document.getElementById('utin_prev_cash_opening_CRDR').value;
//                var GoldCashMetalWt = document.getElementById('utin_cash_to_metalwt').value;
//
//                var SilverCashMetal = document.getElementById('utin_sl_cash_to_metal').value;
//                var SilverCashMetalCRDR = document.getElementById('utin_sl_prev_cash_opening_CRDR').value;
//                var SilverCashMetalWt = document.getElementById('utin_sl_cash_to_metalwt').value;



            } else {
                
                //alert('TransCRDR cc1== ' + document.getElementById(prefix + 'TransCRDR').value); 

                var FinalGdCRDR = document.getElementById(prefix + 'FinalGdCRDR').value;
                document.getElementById(prefix + 'PayPrevCashBalCRDR').value = FinalGdCRDR;
                document.getElementById(prefix + 'TransCRDR').value = FinalGdCRDR;
                document.getElementById(prefix + 'PayableCashCRDR').value = FinalGdCRDR;
                document.getElementById(prefix + 'FinalCashCRDR').value = FinalGdCRDR;

                //alert('TransCRDR cc2== ' + document.getElementById(prefix + 'TransCRDR').value); 
                //alert('PayableCashCRDR cc== ' + document.getElementById(prefix + 'PayableCashCRDR').value); 
            }
            
        }
        
        //alert('TransCRDR **== ' + document.getElementById(prefix + 'TransCRDR').value);
    }

    //alert('PayableCashCRDR ++== ' + document.getElementById(prefix + 'PayableCashCRDR').value);  

    //alert('PayPrevCashBalCRDR == ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);     
    //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);   

    // START @PRIYANKA-05APR18
    if (document.getElementById('PrevTotOpeningAmt').value == '' || document.getElementById('PrevTotOpeningAmt').value == 'NaN') {
        document.getElementById('PrevTotOpeningAmt').value = '0.00';
    }
    // END @PRIYANKA-05APR18

    // alert('PrevTotOpeningAmt **== ' + document.getElementById('PrevTotOpeningAmt').value);

    // START @PRIYANKA-03APR18
    if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
        
        //var PayPrevAmtDisp = document.getElementById(prefix + 'PayPrevAmtDisp').value; // Previous Amount Bal
        
        //if (typeof(PayPrevAmtDisp) != 'undefined' && PayPrevAmtDisp != null) {
        //PayPrevAmtDisp = PayPrevAmtDisp.replace(/\,/g, '');
        //}

        //alert('PrevTotOpeningAmt == ' + document.getElementById('PrevTotOpeningAmt').value);

        // START @PRIYANKA-05APR18        
        // if(document.getElementById('utin_prev_cash_opening').value < 0) {        
        
        // START CODE FOR DISPLAY PREV CASH OPENING (UPDATE TIME) @PRIYANKA-26JUNE18 
        if (document.getElementById("payPanelName").value != 'StockPayUp' &&
            document.getElementById("transPanelName").value != 'SellPayUp' &&
            document.getElementById("payPanelName").value != 'RawPayUp') {
            document.getElementById('utin_prev_cash_opening').value = parseFloat(document.getElementById('PrevTotOpeningAmt').value).toFixed(2);
            document.getElementById('utin_prev_cash_opening_CRDR').value = document.getElementById('PrevTotOpeningAmtCRDR').value;
        }
        // END CODE FOR DISPLAY PREV CASH OPENING (UPDATE TIME) @PRIYANKA-26JUNE18
          
        // } 
        // END @PRIYANKA-05APR18
    
        //alert('utin_prev_cash_opening == ' + document.getElementById('utin_prev_cash_opening').value);

//        if (document.getElementById('paymentMode').value == 'NoRateCut') {
//            
//            if ((document.getElementById("utin_prev_cash_opening").value > 0) && (document.getElementById("utin_cash_to_metal").value > 0) &&
//                (document.getElementById("GdCashToMetal").value > 0) && (document.getElementById("PrevGdCashBal").value > 0)) {
//
//                // CASH BALANCE ON PAYMENT PANEL @PRIYANKA-06APR18
//                if (document.getElementById("utin_prev_cash_opening").value == document.getElementById("utin_cash_to_metal").value) {
//                    //
//                    document.getElementById(prefix + 'PayPrevTotAmt').value = parseFloat(Math.abs(document.getElementById("PrevGdCashBal").value)).toFixed(2);
//                    document.getElementById(prefix + 'PayPrevAmtDisp').value = parseFloat(Math.abs(document.getElementById("PrevGdCashBal").value)).toFixed(2);
//                    document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
//                    //
//                }
//
//            } else if ((document.getElementById("utin_prev_cash_opening").value > 0) && (document.getElementById("utin_cash_to_metal").value > 0) &&
//                       (document.getElementById("utin_prev_cash_opening").value == document.getElementById("utin_cash_to_metal").value)) {
//
//                        document.getElementById(prefix + 'PayPrevTotAmt').value = parseFloat(Math.abs(document.getElementById("utin_prev_cash_bal").value)).toFixed(2);
//                        document.getElementById(prefix + 'PayPrevAmtDisp').value = parseFloat(Math.abs(document.getElementById("utin_prev_cash_bal").value)).toFixed(2);
//                      //document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
//
//            }
//            
//        }

        // START @PRIYANKA-07APR18
        //if (document.getElementById('paymentMode').value == 'NoRateCut') {

//            if (document.getElementById("utin_prev_cash_opening_CRDR").value == 'DR') {
//                document.getElementById('utin_prev_cash_opening_CRDR').style.color = 'green';
//                document.getElementById('utin_prev_cash_opening').style.color = 'green';
//            } else if (document.getElementById("utin_prev_cash_opening_CRDR").value == 'CR') {
//                document.getElementById('utin_prev_cash_opening_CRDR').style.color = 'red';
//                document.getElementById('utin_prev_cash_opening').style.color = 'red';
//            }

        // END @PRIYANKA-07APR18

        // START @PRIYANKA-07APR18
        if (document.getElementById("utin_cash_to_metal").value == '0.00') {
            document.getElementById("utin_cash_to_metal").value = parseFloat(document.getElementById("utin_prev_cash_opening").value).toFixed(2);
        }

        if (document.getElementById("utin_cash_to_metal").value == '' || document.getElementById("utin_cash_to_metal").value == 0) {
            document.getElementById("utin_prev_cash_bal").value = parseFloat(document.getElementById("utin_prev_cash_opening").value).toFixed(2);
            document.getElementById("utin_prev_cash_bal_CRDR").value = document.getElementById("utin_prev_cash_opening_CRDR").value;
        }
        // END @PRIYANKA-07APR18
        
        // PREV SL CASH OPENING AMOUNT @PRIYANKA-10APR18
        if (document.getElementById("utin_sl_prev_cash_opening").value == '0.00') {
            document.getElementById("utin_sl_prev_cash_opening").value = parseFloat(document.getElementById("utin_prev_cash_bal").value).toFixed(2);
            document.getElementById("utin_sl_prev_cash_opening_CRDR").value = document.getElementById("utin_prev_cash_bal_CRDR").value;
        }
        
        // alert('utin_sl_prev_cash_opening == ' + document.getElementById("utin_sl_prev_cash_opening").value);
        // alert('utin_sl_prev_cash_opening_CRDR == ' + document.getElementById("utin_sl_prev_cash_opening_CRDR").value);
        
        calcCashToMetal(prefix);
        
        // START CODE FOR PAYMENT/RECEIPT CASH TO METAL ISSUE @PRIYANKA-29MAY18
        if (document.getElementById('paymentMode').value == 'RateCut') {
           
            var CashGdMetalWt = parseFloat(document.getElementById('CashToGdMetalWt').value);
            var GdCashMetal = parseFloat(document.getElementById('GdCashToMetal').value);

            var CashToSLMetalWt = document.getElementById('CashToSlMetalWt').value;
            var SLCashToMetal = document.getElementById('SlCashToMetal').value;

            if (CashGdMetalWt > 0 && GdCashMetal > 0 || CashToSLMetalWt > 0 && SLCashToMetal > 0) {
                
                if (document.getElementById(prefix + 'PayPrevAmtDisp').value == '0.00') {
                    
                    document.getElementById(prefix + 'PayTotCashAmt').value = Math.abs(parseFloat(document.getElementById(prefix + 'PayTotAmt').value)).toFixed(2);
                    document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math.abs(parseFloat(document.getElementById(prefix + 'PayTotAmt').value)).toFixed(2);
                    document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(parseFloat(document.getElementById(prefix + 'PayTotAmt').value)).toFixed(2);
                    
                    if ((document.getElementById(prefix + 'TransCRDR').value == 'CR' &&
                         document.getElementById('PrevGdCashBalCRDR').value == 'CR' &&
                         document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR') ||
                        (document.getElementById(prefix + 'TransCRDR').value == 'DR' &&
                         document.getElementById('PrevGdCashBalCRDR').value == 'DR' &&
                         document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR')) {
                                
                        document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                        document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                        document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                        document.getElementById(prefix + 'RtCtCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;

                    } else if ((document.getElementById(prefix + 'TransCRDR').value == 'CR' &&
                                document.getElementById('PrevGdCashBalCRDR').value == 'DR' &&
                                document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'CR') ||
                               (document.getElementById(prefix + 'TransCRDR').value == 'DR' &&
                                document.getElementById('PrevGdCashBalCRDR').value == 'CR' &&
                                document.getElementById(prefix + 'GoldWtPrevBalCRDR').value == 'DR')) {

                        if (document.getElementById('GdCashToMetal').value > document.getElementById(prefix + 'GoldValuation').value) {

                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                            document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;
                            document.getElementById(prefix + 'RtCtCashCRDR').value = document.getElementById('PrevGdCashBalCRDR').value;

                        } else {

                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                            document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                            document.getElementById(prefix + 'RtCtCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
                        }
                    }
                }
            }
        }
        // END CODE FOR PAYMENT/RECEIPT CASH TO METAL ISSUE @PRIYANKA-29MAY18
        
        // START @PRIYANKA-08APR18
        if (document.getElementById('paymentMode').value == 'NoRateCut') {

            var CashGdMetalWt = parseFloat(document.getElementById('CashToGdMetalWt').value);
            var GdCashMetal = parseFloat(document.getElementById('GdCashToMetal').value);
                       
            // START @PRIYANKA-11APR18
            var CashToSLMetalWt = document.getElementById('CashToSlMetalWt').value;
            var SLCashToMetal = document.getElementById('SlCashToMetal').value;

            if (CashGdMetalWt > 0 && GdCashMetal > 0 || CashToSLMetalWt > 0 && SLCashToMetal > 0) {
                
                document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math_round(parseFloat(document.getElementById('GdCashToMetal').value)).toFixed(2);
                document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round(parseFloat(document.getElementById('GdCashToMetal').value)).toFixed(2);
                document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math_round(parseFloat(document.getElementById('GdCashToMetal').value)).toFixed(2);
                document.getElementById(prefix + 'PayTotAmt').value = Math_round(parseFloat(document.getElementById('GdCashToMetal').value)).toFixed(2);
                document.getElementById(prefix + 'PayTotAmtAccess').value = Math_round(parseFloat(document.getElementById('GdCashToMetal').value)).toFixed(2);
                
                if (document.getElementById(prefix + 'PayPrevAmtDisp').value == '0.00') {

                    if (CashGdMetalWt > 0 && GdCashMetal > 0) {                       
                        
                        var PrevGdCashBalCRDR = document.getElementById('PrevGdCashBalCRDR').value;
                        document.getElementById(prefix + 'PayPrevCashBalCRDR').value = PrevGdCashBalCRDR;
                        document.getElementById(prefix + 'TransCRDR').value = PrevGdCashBalCRDR;
                        document.getElementById(prefix + 'PayableCashCRDR').value = PrevGdCashBalCRDR;
                        document.getElementById(prefix + 'FinalCashCRDR').value = PrevGdCashBalCRDR;
                    }
                    
                     if (CashToSLMetalWt > 0 && SLCashToMetal > 0) {
                         
                        var PrevSLCashBalCRDR = document.getElementById('PrevSlCashBalCRDR').value;
                        document.getElementById(prefix + 'PayPrevCashBalCRDR').value = PrevSLCashBalCRDR;
                        document.getElementById(prefix + 'TransCRDR').value = PrevSLCashBalCRDR;
                        document.getElementById(prefix + 'PayableCashCRDR').value = PrevSLCashBalCRDR;
                        document.getElementById(prefix + 'FinalCashCRDR').value = PrevSLCashBalCRDR;
                    }
                    
                    // alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);
                }
            }
        }
        //}
        // END @PRIYANKA-11APR18
        // END @PRIYANKA-08APR18
    }
    
    //alert('PayableCashCRDR bb== ' + document.getElementById(prefix + 'PayableCashCRDR').value);   
    
    // END @PRIYANKA-03APR18

//    if (document.getElementById('paymentMode').value == 'RateCut') {
//        
//        if (document.getElementById("utin_cash_to_metal").value == '') {
//
//            document.getElementById("utin_prev_cash_bal").value = parseFloat(document.getElementById("PrevTotOpeningAmt").value).toFixed(2);
//            document.getElementById("utin_prev_cash_bal_CRDR").value = document.getElementById("PrevTotOpeningAmtCRDR").value;
//
//            document.getElementById(prefix + 'PayPrevTotAmt').value = document.getElementById('PrevTotOpeningAmt').value;
//            document.getElementById(prefix + 'PayPrevAmtDisp').value = document.getElementById('PrevTotOpeningAmt').value;
//            document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById('PrevTotOpeningAmtCRDR').value;
//      
//        }
//    }

    //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);    
    //alert('PayPrevCashBalCRDR == ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);

    //alert('PayPrevAmtDisp == ' + document.getElementById(prefix + 'PayPrevAmtDisp').value);    
    //alert('PayPrevCashBalCRDR == ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);
    
    //alert('PayableCashCRDR ++== ' + document.getElementById(prefix + 'PayableCashCRDR').value);  
    
    
    //alert('PayTotCashAmtDisp ++== ' + document.getElementById(prefix + 'PayTotCashAmtDisp').value);

    var finalCashBal;
    var taxAmt = 0;
    var CGSTAmt = 0;
    var SGSTAmt = 0;
    var IGSTAmt = 0;
    var MkgTaxAmt = 0;
    var finBalLabel = 'FINAL CASH BALANCE :';
    var finalTotalAmnt = 0;
    var totalTaxAmount = 0;

    finalTotalAmnt = calcTotFinAmt(prefix);

    //alert('finalTotalAmnt !!!== ' + finalTotalAmnt);

    if (document.getElementById('paymentMode').value == 'RateCut')
        finalTotalAmnt = parseFloat(finalTotalAmnt) + parseFloat(document.getElementById(prefix + 'PayTotAmtExchangeDisp').value);

    // alert('finalTotalAmnt *##*== ' + finalTotalAmnt);
    // finalTotalAmnt = parseFloat(finalTotalAmnt) - parseFloat(document.getElementById(prefix + 'PayTotAmtExchangeDisp').value);
    // alert('finalTotalAmnt **== ' + finalTotalAmnt);

    calcTotTax(prefix, finalTotalAmnt);

    if (document.getElementById('mainPanelName').value != 'userHome' && document.getElementById('mainPanelName').value != 'scheme') {
        finalTotalAmnt = calcCourierChrg(prefix, finalTotalAmnt);
    }

    var totalCashNdChequeAmt = calcCashNdChequeAmt(prefix);
    var totalCardAmt = calcCardAmt(prefix);
    var totalOnlinePayAmt = calcOnlinePayAmt(prefix);
    var totalDiscount = discountAmt(prefix);

    MkgTaxAmt = parseFloat(document.getElementById(prefix + 'MkgChrgCGSTAmt').value) + parseFloat(document.getElementById(prefix + 'MkgChrgSGSTAmt').value);
    taxAmt = document.getElementById(prefix + 'TaxAmt').value;
    CGSTAmt = document.getElementById(prefix + 'CGSTAmt').value;
    SGSTAmt = document.getElementById(prefix + 'SGSTAmt').value;
    IGSTAmt = document.getElementById(prefix + 'IGSTAmt').value;

    if (taxAmt == 'NaN' || taxAmt == '') {
        taxAmt = 0.00;
    }
    if (CGSTAmt == 'NaN' || CGSTAmt == '') {
        CGSTAmt = 0.00;
    }
    if (SGSTAmt == 'NaN' || SGSTAmt == '') {
        SGSTAmt = 0.00;
    }
    if (IGSTAmt == 'NaN' || IGSTAmt == '') {
        IGSTAmt = 0.00;
    }
    if (MkgTaxAmt == 'NaN' || MkgTaxAmt == '') {
        MkgTaxAmt = 0.00;
    }

    totalTaxAmount = parseFloat(MkgTaxAmt);
    if (document.getElementById('CGSTCheck').checked) {
        totalTaxAmount += parseFloat(CGSTAmt);
    }
    if (document.getElementById('SGSTCheck').checked) {
        totalTaxAmount += parseFloat(SGSTAmt);
    }
    if (document.getElementById('IGSTCheck').checked) {
        totalTaxAmount += parseFloat(IGSTAmt);
    }
    if (document.getElementById('CommTaxCheck').checked) {
        totalTaxAmount += parseFloat(taxAmt);
    }
    // START CODE FOR DISCOUNT APPLY BEFORE GST TAX @PRIYANKA-06MAR18
    if (document.getElementById('utin_discount_per_discup').value != '' || document.getElementById('utin_discount_amt_discup').value != '') {
        
        // alert('PayTotCashAmt ***==' + document.getElementById(prefix + 'PayTotCashAmt').value);
        // alert('PayTotCashAmtDisp ***==' + document.getElementById(prefix + 'PayTotCashAmtDisp').value);
        // alert('totalTaxAmount ***==' + totalTaxAmount);
        // alert('PayTotAmtExchangeDisp ***==' + document.getElementById(prefix + 'PayTotAmtExchangeDisp').value);

        //if (document.getElementById('paymentMode').value != 'RateCut') { //TOTAL AMOUNT-PRIYANKA-19MAR18 


        if (document.getElementById("payPanelName").value == 'SellPayUp' ||
                document.getElementById("payPanelName").value == 'RawPayUp' ||
                document.getElementById("payPanelName").value == 'StockPayUp' ||
                document.getElementById("payPanelName").value == 'SuppOrderUp' ||
                document.getElementById("payPanelName").value == 'CustSellPayUp' ||
                document.getElementById("payPanelName").value == 'NwOrPayUp' ||
                document.getElementById("payPanelName").value == 'SuppOrderDeliveryUp') {

            document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round(((parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value) + parseFloat(totalTaxAmount)))).toFixed(2);
            document.getElementById(prefix + 'PayTotCashAmt').value = Math_round(((parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(totalTaxAmount)))).toFixed(2);

        } else {

            // CHANGE FOR METAL EXCHANGE @PRIYANKA-30APR18
            if (document.getElementById('utin_metal_exchange_chk').checked) {
                document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round(((parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value) + parseFloat(totalTaxAmount) + parseFloat(document.getElementById(prefix + 'PayTotAmtExchangeDisp').value)))).toFixed(2);
                document.getElementById(prefix + 'PayTotCashAmt').value = Math_round(((parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(totalTaxAmount) + parseFloat(document.getElementById(prefix + 'PayTotAmtExchangeDisp').value)))).toFixed(2);
            } else {
                document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round(parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value) + parseFloat(totalTaxAmount)).toFixed(2);
                document.getElementById(prefix + 'PayTotCashAmt').value = Math_round(parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(totalTaxAmount)).toFixed(2);
            }
        }

        //} else {
        //document.getElementById(prefix + 'PayTotCashAmtDisp').value = ((parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value) + parseFloat(totalTaxAmount))).toFixed(2);
        //document.getElementById(prefix + 'PayTotCashAmt').value = ((parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(totalTaxAmount))).toFixed(2);  
        //}
        
        //alert('PayTotCashAmt ###==' + document.getElementById(prefix + 'PayTotCashAmt').value);
        
    } else {
        
        if (document.getElementById('paymentMode').value != 'RateCut') { //TOTAL AMOUNT-PRIYANKA-19MAR18 
            
            // CHANGE FOR METAL EXCHANGE @PRIYANKA-30APR18
            if (document.getElementById('utin_metal_exchange_chk').checked) {
                document.getElementById(prefix + 'PayTotCashAmtDisp').value = ((parseFloat(finalTotalAmnt) + parseFloat(totalTaxAmount) + parseFloat(document.getElementById(prefix + 'PayTotAmtExchangeDisp').value))).toFixed(2);
                document.getElementById(prefix + 'PayTotCashAmt').value = ((parseFloat(finalTotalAmnt) + parseFloat(totalTaxAmount) + parseFloat(document.getElementById(prefix + 'PayTotAmtExchangeDisp').value))).toFixed(2);
            } else {
                document.getElementById(prefix + 'PayTotCashAmtDisp').value = (parseFloat(finalTotalAmnt) + parseFloat(totalTaxAmount)).toFixed(2);
                document.getElementById(prefix + 'PayTotCashAmt').value = (parseFloat(finalTotalAmnt) + parseFloat(totalTaxAmount)).toFixed(2);
            }
            
        } else {
            document.getElementById(prefix + 'PayTotCashAmtDisp').value = ((parseFloat(finalTotalAmnt) + parseFloat(totalTaxAmount))).toFixed(2);
            document.getElementById(prefix + 'PayTotCashAmt').value = ((parseFloat(finalTotalAmnt) + parseFloat(totalTaxAmount))).toFixed(2);
        }
    }
    // END CODE FOR DISCOUNT APPLY BEFORE GST TAX @PRIYANKA-06MAR18
    
    //alert('PayableCashCRDR ==^^ ' + document.getElementById(prefix + 'PayableCashCRDR').value); 
    
    //alert('PayTotCashAmt ###==' + document.getElementById(prefix + 'PayTotCashAmt').value);
    
    //}
    //if (document.getElementById('mainPanelName').value != 'udhaar') {
    calcByCashTotalPayableAmount(prefix);
    //}
    
    //alert('PayTotCashAmt ###@@@==' + document.getElementById(prefix + 'PayTotCashAmt').value);
    
    //alert('PayableCashCRDR ==$$ ' + document.getElementById(prefix + 'PayableCashCRDR').value); 
    
    document.getElementById(prefix + 'PayCashRecDisp').value = (parseFloat(totalCashNdChequeAmt) + parseFloat(totalCardAmt) + parseFloat(totalOnlinePayAmt)).toFixed(2);
    
    if (prefix == 'order')
        document.getElementById('netPay').value = (parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value) - parseFloat(document.getElementById('preOrdRecAmt').value)).toFixed(2);
    
    //alert('PayableCashCRDR ##== ' + document.getElementById(prefix + 'PayableCashCRDR').value);  
    
   //alert('finalCashBal @@==' + finalCashBal);
    
    finalCashBal = calcTotalFinalAmount(prefix, totalCashNdChequeAmt, totalCardAmt, totalOnlinePayAmt, totalDiscount);
    
    //alert('PayableCashCRDR ++== ' + document.getElementById(prefix + 'PayableCashCRDR').value);  
    
    //alert('finalCashBal ##==' + finalCashBal);
    
    if (finalCashBal <= 0) {
        finBalLabel = 'FINAL CASH DEPOSIT :';
    }
    
    if (document.getElementById('lpRedeem').value > 0) {
        finalCashBal = (parseFloat(finalCashBal) - parseFloat(document.getElementById('lpRedeem').value)).toFixed(2);
    }
    
    var roundOffAmt = 0;
    if (roundOff(finalCashBal) > 0) {
        roundOffAmt = roundOff(finalCashBal);
        var rndOffAmt = (1 - roundOffAmt);
        document.getElementById(prefix + 'PayRoundOffDisp').value = rndOffAmt.toFixed(2);
        document.getElementById(prefix + 'PayRoundOffAmt').value = roundOffAmt;
    }
    document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math_round(Math.abs(finalCashBal - roundOffAmt)).toFixed(2);

    // alert('PayFinAmtBalDisp **== ' + document.getElementById(prefix + 'PayFinAmtBalDisp').value);

    document.getElementById('finCashBalTd').innerHTML = finBalLabel;
    document.getElementById(prefix + 'PayTotAmtBal').value = Math_round(Math.abs(finalCashBal - roundOffAmt)).toFixed(2);
    
    // START CODE FOR ROUND OFF TOTAL AMT ON PAYMENT PANEL @PRIYANKA-18-SEP-17
    var TotalAmount = parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value);
    var roundOffAmount = 0;
    var rndOff = 0.5;
    if ((TotalAmount % 1).toFixed(2) > 0) {
        roundOffAmount = (TotalAmount % 1).toFixed(2);
        if (roundOffAmount > rndOff) {
            var rndOffAmount = (1 - roundOffAmount);
            
            //document.getElementById(prefix + 'PayRoundOffDisplay').value = '+ ' + rndOffAmount.toFixed(2);
            
            // START CODE FOR METAL RECEIVED CALCULATION ON PAYMENT PANEL @PRIYANKA-19JUNE18
            if (typeof (document.getElementById(prefix + 'PayRoundOffDisplay')) != 'undefined' &&
                       (document.getElementById(prefix + 'PayRoundOffDisplay') != null)) {
                        document.getElementById(prefix + 'PayRoundOffDisplay').value = '+ ' + rndOffAmount.toFixed(2);
            }
            // END CODE FOR METAL RECEIVED CALCULATION ON PAYMENT PANEL @PRIYANKA-19JUNE18
            
            document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round(parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value) + parseFloat(rndOffAmount)).toFixed(2);
            document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math_round(Math.abs(parseFloat(finalCashBal) + parseFloat(rndOffAmount))).toFixed(2);
            document.getElementById(prefix + 'PayTotAmtBal').value = Math_round(Math.abs(parseFloat(finalCashBal) + parseFloat(rndOffAmount))).toFixed(2);
        } else {
            
            //document.getElementById(prefix + 'PayRoundOffDisplay').value = '- ' + parseFloat(roundOffAmount).toFixed(2);
            
            // START CODE FOR METAL RECEIVED CALCULATION ON PAYMENT PANEL @PRIYANKA-19JUNE18
            if (typeof (document.getElementById(prefix + 'PayRoundOffDisplay')) != 'undefined' &&
                       (document.getElementById(prefix + 'PayRoundOffDisplay') != null)) {
                        document.getElementById(prefix + 'PayRoundOffDisplay').value = '- ' + parseFloat(roundOffAmount).toFixed(2);
            }
            // END CODE FOR METAL RECEIVED CALCULATION ON PAYMENT PANEL @PRIYANKA-19JUNE18
            
            document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round(parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value) - parseFloat(roundOffAmount)).toFixed(2);
            document.getElementById(prefix + 'PayFinAmtBalDisp').value = Math.abs(parseFloat(finalCashBal) - parseFloat(roundOffAmount)).toFixed(2);
            document.getElementById(prefix + 'PayTotAmtBal').value = Math_round((parseFloat(document.getElementById(prefix + 'PayTotAmtBal').value) - parseFloat(roundOffAmount))).toFixed(2);
        }
        
    } else if ((TotalAmount % 1).toFixed(2) == 0 || (TotalAmount % 1).toFixed(2) == '0.00') {
        
        //document.getElementById(prefix + 'PayRoundOffDisplay').value = roundOffAmount.toFixed(2);
        
        // START CODE FOR METAL RECEIVED CALCULATION ON PAYMENT PANEL @PRIYANKA-19JUNE18
        if (typeof (document.getElementById(prefix + 'PayRoundOffDisplay')) != 'undefined' &&
                   (document.getElementById(prefix + 'PayRoundOffDisplay') != null)) {
                    document.getElementById(prefix + 'PayRoundOffDisplay').value = roundOffAmount.toFixed(2);
        }
        // END CODE FOR METAL RECEIVED CALCULATION ON PAYMENT PANEL @PRIYANKA-19JUNE18
        
        // START CODE FOR ROUND OFF TOTAL AMT STORE IN DATABASE @PRIYANKA-05MAR18
        document.getElementById(prefix + 'PayRoundOffDisp').value = roundOffAmount.toFixed(2);
        document.getElementById(prefix + 'PayRoundOffAmt').value = roundOffAmount.toFixed(2);
        // END CODE FOR ROUND OFF TOTAL AMT STORE IN DATABASE @PRIYANKA-05MAR18
    }
    // END CODE FOR ROUND OFF TOTAL AMT ON PAYMENT PANEL @PRIYANKA-18-SEP-17
}
//
function calcByCashTotalPayableAmount(prefix) {

    var totalAmount = 0;

    //alert('PayPrevCashBalCRDR **== ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);
    //alert('TransCRDR **== ' + document.getElementById(prefix + 'TransCRDR').value);     
    //alert('PayableCashCRDR 1== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
    //alert('PayableCashCRDR **== ' + document.getElementById(prefix + 'PayableCashCRDR').value);

    if ((document.getElementById(prefix + 'PayPrevCashBalCRDR').value == '') &&
        (document.getElementById('PaymentReceiptPanel').value == 'RECEIPT' || 
         document.getElementById('PaymentReceiptPanel').value == 'PAYMENT')) {
         
        document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById('PrevCashBalCRDR').value;
    
    } else if (document.getElementById(prefix + 'PayPrevCashBalCRDR').value == '') {
        
               document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
    }

    //alert('PayableCashCRDR 2== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
    //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);
    //alert('PayPrevCashBalCRDR == ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);

    if ((document.getElementById(prefix + 'TransCRDR').value == 'CR' && 
         document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'CR') ||
        (document.getElementById(prefix + 'TransCRDR').value == 'DR' && 
         document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'DR')) {
     
        //alert('PayableCashCRDR == ' + document.getElementById(prefix + 'PayableCashCRDR').value);

        totalAmount = parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value);

        // CHANGE CODE FOR SILVER CASE CR/DR AFTER RATE CUT @PRIYANKA-03MAY18
        if ((document.getElementById('paymentMode').value == 'RateCut') &&
            (document.getElementById(prefix + 'GoldRtCtWtBal').value > 0 || 
             document.getElementById(prefix + 'SilverRtCtWtBal').value > 0)) {

            if ((document.getElementById(prefix + 'PayPrevCashBalCRDR').value != document.getElementById(prefix + 'FinalGdCRDR').value) ||
                (document.getElementById(prefix + 'PayPrevCashBalCRDR').value != document.getElementById(prefix + 'FinalSlCRDR').value)) {
               
                // START @PRIYANKA-07APR18
                var GdSlValuation = parseFloat(parseFloat(document.getElementById(prefix + 'GoldValuation').value) 
                                  + parseFloat(document.getElementById(prefix + 'SilverValuation').value));
                          
                var PrevBalDisplay = parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value);

                if (GdSlValuation > PrevBalDisplay) {
                    
                    //var CashToGdMetal = parseFloat(document.getElementById('CashToGdMetalWt').value);
                    var GdCashMetal = parseFloat(document.getElementById('GdCashToMetal').value);
                    //var CashToSLMetal = document.getElementById('CashToSlMetalWt').value;
                    var SLCashMetal = document.getElementById('SlCashToMetal').value;
                    
                    
                    if ((document.getElementById(prefix + 'PayableCashCRDR').value == 'CR' &&
                         document.getElementById('PrevGdCashBalCRDR').value == 'CR') ||
                        (document.getElementById(prefix + 'PayableCashCRDR').value == 'DR' &&
                         document.getElementById('PrevGdCashBalCRDR').value == 'DR') ||
                        (document.getElementById(prefix + 'PayableCashCRDR').value == 'CR' &&
                         document.getElementById('PrevSlCashBalCRDR').value == 'CR') ||
                        (document.getElementById(prefix + 'PayableCashCRDR').value == 'DR' &&
                         document.getElementById('PrevSlCashBalCRDR').value == 'DR') &&
                        (GdCashMetal > 0 || SLCashMetal > 0)) {
                    
                        //document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'FinalGdCRDR').value;
                        
                    } else {
                    
                        if (document.getElementById(prefix + 'SilverRtCtWtBal').value > document.getElementById(prefix + 'GoldRtCtWtBal').value) {
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'FinalSlCRDR').value;
                        } else if (document.getElementById(prefix + 'GoldRtCtWtBal').value > document.getElementById(prefix + 'SilverRtCtWtBal').value) {
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'FinalGdCRDR').value;
                        } else {
                            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'FinalGdCRDR').value;
                        }
                    }

                } else {
                    document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
                }
                // END @PRIYANKA-07APR18
                
                //alert('PayableCashCRDR 3== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
                
            } else {
                document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'FinalGdCRDR').value;
                
                //alert('PayableCashCRDR 4== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
            }

            if (document.getElementById(prefix + 'PayPrevCashBalCRDR').value == document.getElementById(prefix + 'FinalGdCRDR').value) {
                totalAmount = parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value);
            } else {
                totalAmount = parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value);
            }

        } else {
            document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
            
            //alert('PayableCashCRDR 5== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
        }

    } else if ((document.getElementById(prefix + 'TransCRDR').value == 'CR' && document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'DR') ||
               (document.getElementById(prefix + 'TransCRDR').value == 'DR' && document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'CR')) {

        //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);

        if (document.getElementById(prefix + 'TransCRDR').value == 'DR') {
            totalAmount = parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value);
        } else {
            totalAmount = parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value);
        }
        
        //alert('PayPrevTotAmt == ' + document.getElementById(prefix + 'PayPrevTotAmt').value);
        //alert('PayTotCashAmt == ' + document.getElementById(prefix + 'PayTotCashAmt').value);
        
        //alert('totalAmount == ' + totalAmount);

        if ((document.getElementById('paymentMode').value == 'RateCut') && 
            (document.getElementById(prefix + 'GoldRtCtWtBal').value > 0 ||
             document.getElementById(prefix + 'SilverRtCtWtBal').value > 0)) {

            if ((document.getElementById(prefix + 'PayPrevCashBalCRDR').value != document.getElementById(prefix + 'FinalGdCRDR').value) ||
                (document.getElementById(prefix + 'PayPrevCashBalCRDR').value != document.getElementById(prefix + 'FinalSlCRDR').value)) {

                // alert('GoldValuation == ' + document.getElementById(prefix + 'GoldValuation').value);               
                // alert('PayPrevAmtDisp == ' + document.getElementById(prefix + 'PayPrevAmtDisp').value);
                
                //alert('totalAmount == ' + totalAmount);
                
                var PrevAmtDisplay = parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value);
                
                // START @PRIYANKA-07APR18
                if ((document.getElementById('paymentMode').value == 'RateCut') && 
                    (document.getElementById(prefix + 'GoldRtCtWtBal').value > 0)) {
                     var GdVal = parseFloat(document.getElementById(prefix + 'GoldValuation').value);
                     
                    if (GdVal > PrevAmtDisplay) {
                        document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'FinalGdCRDR').value;
                        // alert('PayableCashCRDR == ' + document.getElementById(prefix + 'PayableCashCRDR').value);                       
                    } else {
                        document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
                        // alert('PayableCashCRDR **== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
                    }
                }
                
                // START @PRIYANKA-20JUNE18
                if ((document.getElementById('paymentMode').value == 'RateCut') && 
                    (document.getElementById(prefix + 'SilverRtCtWtBal').value > 0)) {
                     var SlVal = parseFloat(document.getElementById(prefix + 'SilverValuation').value);
                     
                     if (SlVal > PrevAmtDisplay) {
                        document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'FinalSlCRDR').value;
                        // alert('PayableCashCRDR == ' + document.getElementById(prefix + 'PayableCashCRDR').value);                       
                    } else {
                        document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'PayPrevCashBalCRDR').value;
                        // alert('PayableCashCRDR **== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
                    }
                }
                // END @PRIYANKA-20JUNE18
                
                // END @PRIYANKA-07APR18
                
                //alert('PayableCashCRDR 6== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
                
            } else {
                
                // START @PRIYANKA-12APR18
                var GdSlVal = parseFloat(parseFloat(document.getElementById(prefix + 'GoldValuation').value) + parseFloat(document.getElementById(prefix + 'SilverValuation').value));
                var PrevAmtDisplay = parseFloat(document.getElementById(prefix + 'PayPrevAmtDisp').value);

                if (GdSlVal > PrevAmtDisplay) {
                    //document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'FinalGdCRDR').value;                   
                } else {
                    
                    if((document.getElementById(prefix + 'SilverValuation').value > document.getElementById(prefix + 'PayPrevAmtDisp').value) &&
                       (document.getElementById(prefix + 'SilverValuation').value > document.getElementById(prefix + 'GoldValuation').value)) {
                        document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'FinalSlCRDR').value;
                    } else {
                       document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'FinalGdCRDR').value;
                    }
                }
                // END @PRIYANKA-12APR18
                
                // document.getElementById(prefix + 'PayableCashCRDR').value = document.getElementById(prefix + 'FinalGdCRDR').value;
                
                // alert('PayableCashCRDR 7== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
                
            }

            if (document.getElementById(prefix + 'PayPrevCashBalCRDR').value == document.getElementById(prefix + 'FinalGdCRDR').value) {
                totalAmount = parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value);
            } else {
                totalAmount = parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value);
            }
            
            // START @PRIYANKA-20JUNE18
            if ((document.getElementById('paymentMode').value == 'RateCut') && 
                (document.getElementById(prefix + 'SilverRtCtWtBal').value > 0)) {
                
                if (document.getElementById(prefix + 'PayPrevCashBalCRDR').value == document.getElementById(prefix + 'FinalSlCRDR').value) {
                    totalAmount = parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value) + parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value);
                } else {
                    totalAmount = parseFloat(document.getElementById(prefix + 'PayPrevTotAmt').value) - parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value);
                }                
            }
            // END @PRIYANKA-20JUNE18
            
            //alert('totalAmount @@@== ' + totalAmount);

        } else {

            if (totalAmount < 0)
                document.getElementById(prefix + 'PayableCashCRDR').value = 'CR';
            else
                document.getElementById(prefix + 'PayableCashCRDR').value = 'DR';
            
            // alert('PayableCashCRDR 8== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
        }
    }
    
    //alert('PayableCashCRDR @@== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
    
    //alert('PayPrevCashBalCRDR ##== ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);
    
    //alert('PayableCashCRDR ##== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
    // START OF CODE TO SET COLOR FOR PREV CASH BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
    if (document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'DR') {
        document.getElementById(prefix + 'PayPrevCashBalCRDR').style.color = 'red';
        document.getElementById(prefix + 'PayPrevAmtDisp').style.color = 'red';
        // START @PRIYANKA-02APR18
//        if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
//            document.getElementById('utin_prev_cash_opening_CRDR').style.color = 'green';
//            document.getElementById('utin_prev_cash_opening').style.color = 'green';
//        }
        // END @PRIYANKA-02APR18
    } else if (document.getElementById(prefix + 'PayPrevCashBalCRDR').value == 'CR') {
        document.getElementById(prefix + 'PayPrevCashBalCRDR').style.color = 'green';
        document.getElementById(prefix + 'PayPrevAmtDisp').style.color = 'green';
        // START @PRIYANKA-02APR18
//        if (document.getElementById('paymentMode').value == 'RateCut' || document.getElementById('paymentMode').value == 'NoRateCut') {
//            document.getElementById('utin_prev_cash_opening_CRDR').style.color = 'red';
//            document.getElementById('utin_prev_cash_opening').style.color = 'red';
//        }
        // END @PRIYANKA-02APR18
    }
    // END OF CODE TO SET COLOR FOR PREV CASH BAL ACCORDING TO CR/DR TYPE @PRIYANKA-18MAY18
    //alert('PayPrevCashBalCRDR == ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);

    // START CODE FOR DISCOUNT APPLY BEFORE GST TAX @PRIYANKA-06MAR18
    if (document.getElementById('utin_discount_per_discup').value == '' && document.getElementById('utin_discount_amt_discup').value == '') {
        
        //alert('totalAmount == ' + totalAmount);
        
        document.getElementById(prefix + 'PayTotCashAmt').value = parseFloat(Math.abs(totalAmount)).toFixed(2);
        document.getElementById(prefix + 'PayTotCashAmtDisp').value = parseFloat(Math.abs(totalAmount)).toFixed(2);

        //alert('PayTotCashAmt == ' + document.getElementById(prefix + 'PayTotCashAmt').value);
    }
    // END CODE FOR DISCOUNT APPLY BEFORE GST TAX @PRIYANKA-06MAR18

    //alert('PayPrevCashBalCRDR @@== ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);   
    //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);

    

}

function calcTotalFinalAmount(prefix, totalCashNdChequeAmt, totalCardAmt, totalOnlinePayAmt, totalDiscount) {
    
    var finalTotalAmnt = parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value);
    
    //alert('finalTotalAmnt == ' + finalTotalAmnt);
    
    var finalCashBal = 0;
    
    // START CODE @PRIYANKA -11APR18
    
    //alert('finalTotalAmnt ??== ' + finalTotalAmnt);
    
    //alert('TransCRDR == ' + document.getElementById(prefix + 'TransCRDR').value);
    //alert('PayableCashCRDR == ' + document.getElementById(prefix + 'PayableCashCRDR').value);
       
    if (document.getElementById(prefix + 'TransCRDR').value == document.getElementById(prefix + 'PayableCashCRDR').value) {
        
        // alert('mainPanelName == ' + document.getElementById('mainPanelName').value);
        // alert('transPanelName == ' + document.getElementById('transPanelName').value);
        // alert('payPanelName == ' + document.getElementById('payPanelName').value);
        
        if ((document.getElementById('paymentMode').value == 'ByCash' || document.getElementById('paymentMode').value == 'RateCut')
                && document.getElementById('mainPanelName').value != 'scheme' && document.getElementById('mainPanelName').value != 'userHome'
                && (document.getElementById('mainPanelName').value != 'udhaar' && document.getElementById('mainPanelName').value != 'MONEY')) {
            //
            if (document.getElementById(prefix + 'PayTotAmtRec').value == '' || document.getElementById(prefix + 'PayTotAmtRec').value == 'NaN') {
                document.getElementById(prefix + 'PayTotAmtRec').value = 0;
            }
            //
            if (prefix == 'order') {
                finalTotalAmnt = parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById('preOrdRecAmt').value); // Metal received amount minus from total payable amount.
            } else {
                // DISCOUNT BEFORE TAX CASE => METAL EXCHANGE AMOUNT DISPLAY IN CASH BALANCE ISSUE (UPDATE CASE) @PRIYANKA-23MAR18
                if (document.getElementById('utin_discount_per_discup').value != '' && document.getElementById('utin_discount_amt_discup').value != '' && document.getElementById('paymentMode').value == 'RateCut') {
                    if (document.getElementById("payPanelName").value == 'SellPayUp' ||
                            document.getElementById("payPanelName").value == 'RawPayUp' ||
                            document.getElementById("payPanelName").value == 'StockPayUp' ||
                            document.getElementById("payPanelName").value == 'SuppOrderUp' ||
                            document.getElementById("payPanelName").value == 'CustSellPayUp' ||
                            document.getElementById("payPanelName").value == 'NwOrPayUp' ||
                            document.getElementById("payPanelName").value == 'SuppOrderDeliveryUp') {
                        finalTotalAmnt = parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value);
                    } else {
                        finalTotalAmnt = parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayTotAmtRec').value); // Metal received amount minus from total payable amount.                   
                    }
                    //
                } else {
                    finalTotalAmnt = parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById(prefix + 'PayTotAmtRec').value); // Metal received amount minus from total payable amount.                   
                }
                //
                if (finalTotalAmnt == 'NaN') {
                    finalTotalAmnt = 0;
                }
            }
        }
        
        //alert('finalTotalAmnt !!== ' + finalTotalAmnt);
        
        //alert('PaymentReceiptPanel == ' + document.getElementById("PaymentReceiptPanel").value);
        //alert('transPanelName == ' + document.getElementById("transPanelName").value);
        //alert('PayableCashCRDR == ' + document.getElementById(prefix + "PayableCashCRDR").value);
        //alert('mainPanelName == ' + document.getElementById("mainPanelName").value);
        //alert('payPanelName == ' + document.getElementById("payPanelName").value);
        
        // ADDING ONE CONDITION FOR PAYMENT/RECEIPT UPDATE CASE @PRIYANKA-21MAY18
        // START CODE TO CHANGE CONDITION FOR PAYMENT/RECEIPT PANEL NAME @PRIYANKA-16MAY18
        // START CODE TO ADD CONDITION FOR PAYMENT/RECEIPT PANEL NAME @PRIYANKA-15MAR18
        if (((document.getElementById('transPanelName').value == 'Payment' || document.getElementById('transPanelName').value == 'PaymentReceiptUpdate') && document.getElementById('mainPanelName').value == 'userHome'
          && document.getElementById('PaymentReceiptPanel').value == 'RECEIPT' && document.getElementById(prefix + 'PayableCashCRDR').value == 'CR')
         || ((document.getElementById('transPanelName').value == 'Payment' || document.getElementById('transPanelName').value == 'PaymentReceiptUpdate') && document.getElementById('mainPanelName').value == 'userHome'
          && document.getElementById('PaymentReceiptPanel').value == 'PAYMENT' && document.getElementById(prefix + 'PayableCashCRDR').value == 'DR')) {
            finalCashBal = (parseFloat(finalTotalAmnt) + parseFloat(parseFloat(totalCashNdChequeAmt) + parseFloat(totalCardAmt) + parseFloat(totalOnlinePayAmt)) - parseFloat(Math.abs(totalDiscount))).toFixed(2);
        } else {
            // START - ADDED CONDITIONS @PRIYANKA-28MAY18
            // PAYMENT PANEL : SELL & PURCHASE PANEL AMOUNT PLUS MINUS ACCORDING TO CR/DR @PRIYANKA-23MAR18
            if ((document.getElementById("payPanelName").value == 'SlPrPayment' ||
                 document.getElementById("payPanelName").value == 'SellPayUp' ||
                 document.getElementById("payPanelName").value == 'RawPayUp' ||
                 document.getElementById('transPanelName').value == 'SellPayment' ||
                 document.getElementById("transPanelName").value == 'SellPayUp' ||
                 document.getElementById("payPanelName").value == 'ImitationSellPayment' ||
                 document.getElementById("payPanelName").value == 'ImitationSellPayUp' ||
                 document.getElementById("payPanelName").value == 'CrySellPayment' ||
                 document.getElementById("payPanelName").value == 'CrySellPayUp'  ||
                 document.getElementById("transPanelName").value == 'MONEY' ||
                 document.getElementById('transPanelName').value == 'OnPurchase') &&
                (document.getElementById(prefix + 'PayableCashCRDR').value == 'DR')) {
         
                //finalCashBal = (parseFloat(finalTotalAmnt) + parseFloat(parseFloat(totalCashNdChequeAmt) + parseFloat(totalCardAmt) + parseFloat(totalOnlinePayAmt)) - parseFloat(Math.abs(totalDiscount))).toFixed(2);
                  finalCashBal = (parseFloat(finalTotalAmnt) - parseFloat(parseFloat(totalCashNdChequeAmt) + parseFloat(totalCardAmt) + parseFloat(totalOnlinePayAmt)) - parseFloat(Math.abs(totalDiscount))).toFixed(2);
            
            // ADDED ONE CONDITION FOR SCHEME @PRIYANKA-30MAY18
            } else if ((document.getElementById("payPanelName").value == 'StockPayment' ||
                        document.getElementById("payPanelName").value == 'StockPayUp' ||
                        document.getElementById("payPanelName").value == 'ImitationStockPayment' ||
                        document.getElementById("payPanelName").value == 'ImitationStockPayUp' ||                       
                        document.getElementById("payPanelName").value == 'CrystalStockPayment' ||
                        document.getElementById("payPanelName").value == 'CrystalStockPayUp' ||
                        document.getElementById("payPanelName").value == 'SchemePayment' ||
                        document.getElementById('transPanelName').value == 'PurchasePayment' ||
                        document.getElementById('transPanelName').value == 'UDHAAR' ||
                        document.getElementById('transPanelName').value == 'ADVMONEY' ||
                        document.getElementById('transPanelName').value == 'PurchasePayUp' ||
                        document.getElementById('payPanelName').value == 'StockReturnPanel') &&
                       (document.getElementById(prefix + 'PayableCashCRDR').value == 'CR')) {
                
                //finalCashBal = (parseFloat(finalTotalAmnt) + parseFloat(parseFloat(totalCashNdChequeAmt) + parseFloat(totalCardAmt) + parseFloat(totalOnlinePayAmt)) - parseFloat(Math.abs(totalDiscount))).toFixed(2);
                  finalCashBal = (parseFloat(finalTotalAmnt) - parseFloat(parseFloat(totalCashNdChequeAmt) + parseFloat(totalCardAmt) + parseFloat(totalOnlinePayAmt)) - parseFloat(Math.abs(totalDiscount))).toFixed(2);
            
            } else {
                
                if (((document.getElementById('transPanelName').value == 'Payment' || document.getElementById('transPanelName').value == 'PaymentReceiptUpdate') && document.getElementById('mainPanelName').value == 'userHome'
                   && document.getElementById('PaymentReceiptPanel').value == 'RECEIPT' && document.getElementById(prefix + 'PayableCashCRDR').value == 'DR')
                 || ((document.getElementById('transPanelName').value == 'Payment' || document.getElementById('transPanelName').value == 'PaymentReceiptUpdate') && document.getElementById('mainPanelName').value == 'userHome'
                   && document.getElementById('PaymentReceiptPanel').value == 'PAYMENT' && document.getElementById(prefix + 'PayableCashCRDR').value == 'CR')) {
                    finalCashBal = (parseFloat(finalTotalAmnt) - parseFloat(parseFloat(totalCashNdChequeAmt) + parseFloat(totalCardAmt) + parseFloat(totalOnlinePayAmt)) - parseFloat(Math.abs(totalDiscount))).toFixed(2);
                } else {
                    finalCashBal = (parseFloat(finalTotalAmnt) + parseFloat(parseFloat(totalCashNdChequeAmt) + parseFloat(totalCardAmt) + parseFloat(totalOnlinePayAmt)) - parseFloat(Math.abs(totalDiscount))).toFixed(2);
                }
            }
            // END - ADDED CONDITIONS @PRIYANKA-28MAY18
        }
        //
        if (finalCashBal == 'NaN') {
            finalCashBal = 0;
        }
        //
        // END CODE TO ADD CONDITION FOR PAYMENT/RECEIPT PANEL NAME @PRIYANKA-15MAR18
        // END CODE TO CHANGE CONDITION FOR PAYMENT/RECEIPT PANEL NAME @PRIYANKA-16MAY18
        //
        if (finalCashBal > 0) {
            document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById(prefix + 'TransCRDR').value;
        } else {
            if (document.getElementById(prefix + 'TransCRDR').value == 'CR')
                document.getElementById(prefix + 'FinalCashCRDR').value = 'DR';
            else
                document.getElementById(prefix + 'FinalCashCRDR').value = 'CR';
        }
        // finalCashBal = Math.abs(finalCashBal);
        //
    } else {
        //
        if ((document.getElementById('paymentMode').value == 'ByCash') &&
                document.getElementById('mainPanelName').value != 'scheme' &&
                document.getElementById('mainPanelName').value != 'userHome' &&
                document.getElementById('mainPanelName').value != 'udhaar') {
            //
            if (document.getElementById(prefix + 'PayTotAmtRec').value == '' || document.getElementById(prefix + 'PayTotAmtRec').value == 'NaN') {
                document.getElementById(prefix + 'PayTotAmtRec').value = 0;
            }
            //
            if (prefix == 'order')
                finalTotalAmnt = parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) - parseFloat(document.getElementById('preOrdRecAmt').value); // Metal received amount minus from total payable amount.
            //
            finalTotalAmnt = parseFloat(document.getElementById(prefix + 'PayTotCashAmt').value) + parseFloat(document.getElementById(prefix + 'PayTotAmtRec').value); // Metal received amount minus from total payable amount.
            //
        }
        // ADDING ONE CONDITION FOR PAYMENT/RECEIPT UPDATE CASE @PRIYANKA-21MAY18
        // 
        //alert('finalCashBal == ' + finalCashBal);
        // 
        // START CODE TO CHANGE CONDITION FOR PAYMENT/RECEIPT PANEL NAME @PRIYANKA-16MAY18
        // START CODE TO ADD CONDITION FOR PAYMENT/RECEIPT PANEL NAME @PRIYANKA-16MAR18
        if (((document.getElementById('transPanelName').value == 'Payment' || document.getElementById('transPanelName').value == 'PaymentReceiptUpdate') && document.getElementById('mainPanelName').value == 'userHome'
          && document.getElementById('PaymentReceiptPanel').value == 'RECEIPT' && document.getElementById(prefix + 'PayableCashCRDR').value == 'DR')
         || ((document.getElementById('transPanelName').value == 'Payment' || document.getElementById('transPanelName').value == 'PaymentReceiptUpdate') && document.getElementById('mainPanelName').value == 'userHome'
          && document.getElementById('PaymentReceiptPanel').value == 'PAYMENT' && document.getElementById(prefix + 'PayableCashCRDR').value == 'CR')) {
            finalCashBal = (parseFloat(finalTotalAmnt) - parseFloat(parseFloat(totalCashNdChequeAmt) + parseFloat(totalCardAmt) + parseFloat(totalOnlinePayAmt)) - parseFloat(Math.abs(totalDiscount))).toFixed(2);
        } else {
            finalCashBal = (parseFloat(finalTotalAmnt) + parseFloat(parseFloat(totalCashNdChequeAmt) + parseFloat(totalCardAmt) + parseFloat(totalOnlinePayAmt)) - parseFloat(Math.abs(totalDiscount))).toFixed(2);
        }
        // END CODE TO ADD CONDITION FOR PAYMENT/RECEIPT PANEL NAME @PRIYANKA-16MAR18
        // END CODE TO CHANGE CONDITION FOR PAYMENT/RECEIPT PANEL NAME @PRIYANKA-16MAY18
        //
        
        //alert('finalCashBal EE== ' + finalCashBal);
        //alert('FinalCashCRDR == ' + document.getElementById(prefix + 'FinalCashCRDR').value);
        
        document.getElementById(prefix + 'FinalCashCRDR').value = document.getElementById(prefix + 'PayableCashCRDR').value;
        
        //alert('FinalCashCRDR **== ' + document.getElementById(prefix + 'FinalCashCRDR').value);
        
        if (document.getElementById('PaymentReceiptPanel').value == 'RECEIPT') {
            if (finalCashBal < 0){
                document.getElementById(prefix + 'FinalCashCRDR').value = 'CR';
            }
        }
        
        if (document.getElementById('PaymentReceiptPanel').value == 'PAYMENT') {
            if (finalCashBal < 0){
                document.getElementById(prefix + 'FinalCashCRDR').value = 'DR';
            }
        }
        
    }
    // }
    return parseFloat(finalCashBal).toFixed(2);
    
    //alert('finalCashBal **@@== ' + finalCashBal);
    
    //alert('PayableCashCRDR YY== ' + document.getElementById(prefix + 'PayableCashCRDR').value);
}
//
/*************************************************************************************************************/
// START CODE TO CHANGE METAL BALANCE ACCORDING TO METAL AMOUNT (REVERSE CALCULATION) @PRIYANKA-14FEB18
/*************************************************************************************************************/
function changeMetAmtCalcMetBal(prefix) {
    //
    // ID'S OF INPUT FIELDS (GOLD) @PRIYANKA-14FEB18
    //
    // GOLD METAL AMOUNT => GoldValuation
    // GOLD RATE => GoldRate
    // GOLD METAL RATE CUT => GoldRtCtWtBal
    // GOLD METAL RATE CUT TYPE => GoldRtCtWtBalType
    // GOLD WEIGHT BALANCE => PayGoldWtBal
    // GOLD WEIGHT BALANCE TYPE => PayGoldWtBalType

    // TO SET METAL BALANCE ACCORDING TO METAL AMOUNT @PRIYANKA-23MAR18
    setAmtToMetCon = 'changeMetAmtToMetWt';

    var goldValuation = parseFloat(document.getElementById(prefix + 'GoldValuation').value).toFixed(2); // GOLD METAL AMOUNT

    var silverValuation = parseFloat(document.getElementById(prefix + 'SilverValuation').value).toFixed(2); // SILVER METAL AMOUNT

    if (goldValuation != '' && goldValuation != null && goldValuation > 0) { // GOLD METAL AMOUNT

        var goldWeightType = (document.getElementById(prefix + 'GoldRtCtWtBalType').value); // GOLD METAL RATE CUT TYPE
        var goldRate = parseFloat(document.getElementById(prefix + 'GoldRate').value).toFixed(2); // GOLD RATE

        if (goldWeightType == 'KG') { // GOLD METAL RATE CUT TYPE
            document.getElementById(prefix + 'GoldRtCtWtBal').value = ((goldValuation) / (goldRate * document.getElementById('gmWtInKg').value)).toFixed(3); // GOLD METAL RATE CUT
        } else if (goldWeightType == 'GM') { // GOLD METAL RATE CUT TYPE
            document.getElementById(prefix + 'GoldRtCtWtBal').value = ((document.getElementById('gmWtInGm').value * goldValuation) / (goldRate)).toFixed(3); // GOLD METAL RATE CUT            
        } else if (goldWeightType == 'MG') { // GOLD METAL RATE CUT TYPE
            document.getElementById(prefix + 'GoldRtCtWtBal').value = ((document.getElementById('gmWtInMg').value * goldValuation) / (goldRate)).toFixed(3); // GOLD METAL RATE CUT
        }

        document.getElementById(prefix + 'PayGoldWtBal').value = parseFloat(document.getElementById(prefix + 'GoldRtCtWtBal').value).toFixed(2); // GOLD WEIGHT BALANCE

        if (document.getElementById(prefix + 'PayGoldWtBal').value == '' || document.getElementById(prefix + 'PayGoldWtBal').value == 'NaN') {
            document.getElementById(prefix + 'PayGoldWtBal').value = 0;
        }

    } else if (silverValuation != '' && silverValuation != null && silverValuation > 0) { // SILVER METAL AMOUNT
        //
        // ID'S OF INPUT FIELDS (SILVER) @PRIYANKA-14FEB18
        //
        // SILVER METAL AMOUNT => SilverValuation
        // SILVER RATE => SilverRate
        // SILVER METAL RATE CUT => SilverRtCtWtBal
        // SILVER METAL RATE CUT TYPE => SilverRtCtWtBalType
        // SILVER WEIGHT BALANCE => PaySilverWtBal
        // SILVER WEIGHT BALANCE TYPE => PaySilverWtBalType

        var silverWeightType = (document.getElementById(prefix + 'SilverRtCtWtBalType').value); // SILVER METAL RATE CUT TYPE

        var silverRate = parseFloat(document.getElementById(prefix + 'SilverRate').value).toFixed(2); // SILVER RATE

        if (silverWeightType == 'KG') { // SILVER METAL RATE CUT TYPE
            document.getElementById(prefix + 'SilverRtCtWtBal').value = ((silverValuation) / (silverRate * document.getElementById('srGmWtInKg').value)).toFixed(2); // SILVER METAL RATE CUT     
        } else if (silverWeightType == 'GM') { // SILVER METAL RATE CUT TYPE
            document.getElementById(prefix + 'SilverRtCtWtBal').value = ((document.getElementById('srGmWtInGm').value * silverValuation) / (silverRate)).toFixed(2); // SILVER METAL RATE CUT    
        } else if (silverWeightType == 'MG') { // SILVER METAL RATE CUT TYPE
            document.getElementById(prefix + 'SilverRtCtWtBal').value = ((document.getElementById('srGmWtInMg').value * silverValuation) / (silverRate)).toFixed(2); // SILVER METAL RATE CUT 
        }

        document.getElementById(prefix + 'PaySilverWtBal').value = parseFloat(document.getElementById(prefix + 'SilverRtCtWtBal').value).toFixed(2); // SILVER WEIGHT BALANCE

        if (document.getElementById(prefix + 'PaySilverWtBal').value == '' || document.getElementById(prefix + 'PaySilverWtBal').value == 'NaN') {
            document.getElementById(prefix + 'PaySilverWtBal').value = 0;
        }
    }
}
/*************************************************************************************************************/
// END CODE TO CHANGE METAL BALANCE ACCORDING TO METAL AMOUNT (REVERSE CALCULATION) @PRIYANKA-14FEB18
/*************************************************************************************************************/

/*************************************************************************************************************/
// START CODE TO FOR DISCOUNT IN %, DISCOUNT AMT CALCULATED @PRIYANKA-05MAR18
/*************************************************************************************************************/
function calDiscountAmt(prefix) {
    var discountAmt = 0;
    var totalAmt = 0;
    var discountPer = 0;
    var discountPer = document.getElementById('utin_discount_per_discup').value; // DISCOUNT IN % @PRIYANKA-05MAR18
    var discountTotalAmount = document.getElementById('utin_discount_amt_discup').value; // DISCOUNT AMT @PRIYANKA-05MAR18
    //
    // DISCOUNT AMOUNT DISCUP DISPLAY
    if (document.getElementById('utin_discount_amt_discup').value == '' || document.getElementById('utin_discount_amt_discup').value == 'NaN') {
        document.getElementById('discountAmtDisp').value = '0.00';
    } else {
        document.getElementById('discountAmtDisp').value = parseFloat(document.getElementById('utin_discount_amt_discup').value).toFixed(2);
    }
    //
    if ((discountPer > 0 && discountPer != 'NaN') || (discountTotalAmount != 'NaN' && discountTotalAmount > 0)) {
        // DISCOUNT IN % 
        if (discountPer == '' || discountPer == 'NaN') {
            discountPer = 0;
        }
        // TOTAL AMOUNT (METAL VALUATION)
        var utin_total_amt = document.getElementById(prefix + 'PayTotAmt').value;
        if (utin_total_amt == '' || utin_total_amt == 'NaN') {
            utin_total_amt = 0;
        }
        // CRYSTAL AMOUNT
        var utin_crystal_amt = document.getElementById(prefix + 'PayCrystalAmt').value;
        if (utin_crystal_amt == '' || utin_crystal_amt == 'NaN') {
            utin_crystal_amt = 0;
        }
        //
        // TOTAL AMOUNT (METAL VALUATION + CRYSTAL AMOUNT + OTHER CHARGES)
        totalAmt = Math_round((parseFloat(utin_total_amt) + parseFloat(utin_crystal_amt))).toFixed(2);
        // START CODE TO CALCULATE DISCOUNT AMOUNT ACCORDING TO DISCOUNT IN % @PRIYANKA-05MAR18
        if ((document.getElementById('utin_discount_per_discup').value != '') && (document.getElementById('utin_discount_amt_discup').value == '' || document.getElementById('utin_discount_amt_discup').value == '0.00')) {
            // CALCULATE DISCOUNT AMT
            discountAmt = (parseFloat(totalAmt) * parseFloat(discountPer) / 100).toFixed(2);
            // END CODE TO CALCULATE DISCOUNT AMOUNT ACCORDING TO DISCOUNT IN % @PRIYANKA-05MAR18
        } else {
            // START CODE TO CALCULATE DISCOUNT IN % ACCORDING TO DISCOUNT AMT @PRIYANKA-05MAR18
            // DISCOUNT AMT
            discountAmt = parseFloat(document.getElementById('utin_discount_amt_discup').value).toFixed(2);
            //
            if (totalAmt > 0) {
                var utin_discount_per_discup = ((parseFloat(discountAmt) * 100) / parseFloat(totalAmt)).toFixed(2);
                //
                document.getElementById('utin_discount_per_discup').value = parseFloat(utin_discount_per_discup).toFixed(2);
            }
            // END CODE TO CALCULATE DISCOUNT IN % ACCORDING TO DISCOUNT AMT @PRIYANKA-05MAR18
        }
        //
        // DISCOUNT AMT
        document.getElementById('utin_discount_amt_discup').value = Math_round(parseFloat(discountAmt)).toFixed(2);
        // DISCOUNT AMT DISCUP DISPLAY
        document.getElementById('discountAmtDisp').value = Math_round(parseFloat(discountAmt)).toFixed(2);
        //
        //document.getElementById(prefix + 'PayDiscountDisp').value = Math_round(parseFloat(discountAmt)).toFixed(2);
        //
        
        if (totalAmt > 0) {
            // TAX APPLY ON AMOUNT
            document.getElementById('taxOnTotAmt').value = (parseFloat(totalAmt) - Math_round(parseFloat(discountAmt))).toFixed(2);
            document.getElementById('taxOnCGSTTotAmt').value = (parseFloat(totalAmt) - Math_round(parseFloat(discountAmt))).toFixed(2);
            document.getElementById('taxOnSGSTTotAmt').value = (parseFloat(totalAmt) - Math_round(parseFloat(discountAmt))).toFixed(2);
            document.getElementById('taxOnIGSTTotAmt').value = (parseFloat(totalAmt) - Math_round(parseFloat(discountAmt))).toFixed(2);
            // TAXABLE AMOUNT
            
            document.getElementById('taxableAmount').value = (parseFloat(totalAmt) - Math_round(parseFloat(discountAmt))).toFixed(2);
         // alert(document.getElementById('taxableAmount').value  = (parseFloat(totalAmt) - Math_round(parseFloat(discountAmt))).toFixed(2));
            //   
            //        
            // OTHER CHARGES
            // If Payment Mode in ByCash then value added add in other charges @PRIYANKA-22MAR18
//            if (document.getElementById('paymentMode').value == 'ByCash') {
//                var utin_oth_chgs_amt = parseFloat(document.getElementById(prefix + 'PayTotOthChgs').value) + parseFloat(document.getElementById('valueAdded').value);
//                document.getElementById(prefix + 'PayCashOthChgsDisp').value = Math_round(parseFloat(utin_oth_chgs_amt)).toFixed(2);
//            } else {
            var utin_oth_chgs_amt = Math_round(parseFloat(document.getElementById(prefix + 'PayTotOthChgs').value)).toFixed(2);
//            }
            //
            if (utin_oth_chgs_amt == '' || utin_oth_chgs_amt == 'NaN') {
                utin_oth_chgs_amt = 0;
            }
            //
            // SEPARATE TAX ON OTHER CHARGES
            //if (document.getElementById('MkgTaxCheck').checked != true) {
            var metCryAmt = Math_round(parseFloat(totalAmt) - Math_round(parseFloat(discountAmt))).toFixed(2);
            document.getElementById(prefix + 'PayTotCashAmt').value = Math_round((parseFloat(metCryAmt) + parseFloat(utin_oth_chgs_amt))).toFixed(2);
            document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round((parseFloat(metCryAmt) + parseFloat(utin_oth_chgs_amt))).toFixed(2);
        }
        //} else {
        //document.getElementById(prefix + 'PayTotCashAmt').value = (parseFloat(totalAmt) - Math_round(parseFloat(discountAmt))).toFixed(2);
        //document.getElementById(prefix + 'PayTotCashAmtDisp').value = (parseFloat(totalAmt) - Math_round(parseFloat(discountAmt))).toFixed(2);
        //}
        //
        //alert('PayTotCashAmt @@==' + document.getElementById(prefix + 'PayTotCashAmt').value);
        //
        //document.getElementById(prefix + 'PayTotCashAmt').value = Math_round(parseFloat(document.getElementById('taxableAmount').value) + parseFloat(utin_oth_chgs_amt)).toFixed(2);
        //document.getElementById(prefix + 'PayTotCashAmtDisp').value = Math_round(parseFloat(document.getElementById('taxableAmount').value) + parseFloat(utin_oth_chgs_amt)).toFixed(2);
    }
}
/*************************************************************************************************************/
// END CODE TO FOR DISCOUNT IN %, DISCOUNT AMT CALCULATED @PRIYANKA-05MAR18
/*************************************************************************************************************/
//
// START CODE TO RESET METAL BALANCE ACCORDING TO METAL AMOUNT @PRIYANKA-23MAR18
function resetChangeMetAmtCalcMetBal() {
    setAmtToMetCon = 'changeMetWtToMetAmt';
}
// END CODE TO RESET METAL BALANCE ACCORDING TO METAL AMOUNT @PRIYANKA-23MAR18
//
function calLoyaltyPoints(prefix) {
    var lpAmount = parseFloat(document.getElementById('lpAmtValue').value);
    var finalAmount = parseFloat(document.getElementById(prefix + 'PayTotCashAmtDisp').value);

    var Gain = parseFloat(finalAmount) / parseFloat(lpAmount);

    if (document.getElementById('lpGain').value == 'NaN' || document.getElementById('lpGain').value == '') {
        document.getElementById('lpGain').value = '0.00';
    }

    document.getElementById("lpGain").value = Math_round(parseFloat(Gain));

    if (document.getElementById('lpOpening').value == 'NaN' || document.getElementById('lpOpening').value == '') {
        document.getElementById('lpOpening').value = '0.00';
    }

    var lpOpen = parseFloat(document.getElementById('lpOpening').value);
    if (lpOpen == 'NaN' || lpOpen == '') {
        lpOpen = 0.00;
    }

    if (document.getElementById('lpRedeem').value == 'NaN' || document.getElementById('lpRedeem').value == '') {
        document.getElementById('lpRedeem').value = '0.00';
    }

    if (document.getElementById('lpRedeemDisp').value == 'NaN' || document.getElementById('lpRedeemDisp').value == '') {
        document.getElementById('lpRedeemDisp').value = '0.00';
    }

    
    //alert(document.getElementById('lpRedeemDisp').value);
    
    var lpReddemPoints = Math_round(parseFloat(document.getElementById('lpRedeem').value)).toFixed(2);

    if (lpReddemPoints == 'NaN' || lpReddemPoints == '') {
        lpReddemPoints = '0.00';
    }
    
    var closingBal = Math_round(parseFloat(lpOpen) + parseFloat(Gain)).toFixed(2);
    
    //alert('closingBal == ' + closingBal);   
    //alert('lpReddemPoints == ' + lpReddemPoints);
    
    
    if (Number(lpReddemPoints) > Number(closingBal) && Number(lpReddemPoints) > 0) {
        
        alert('You dont have sufficient loyalty points to redeem');
        document.getElementById('lpRedeem').value = '0.00';
        document.getElementById('lpRedeemDisp').value = parseFloat(document.getElementById('lpRedeem').value).toFixed(2);

    } else {
        
        document.getElementById('lpRedeemDisp').value = parseFloat(document.getElementById('lpRedeem').value).toFixed(2);

        var closingBal = ((parseFloat(lpOpen) + parseFloat(Gain)) - parseFloat(lpReddemPoints));
        document.getElementById("lpClosing").value = Math_round(parseFloat(closingBal));

        if (parseInt(closingBal) < 0 || isNaN(closingBal)) {
            var closingBal = (parseFloat(lpOpen) + parseFloat(Gain));
            document.getElementById("lpClosing").value = Math_round(parseFloat(closingBal));
        }
        
        calcPaymentCashBalance(prefix);
    }

    //var finalCashBal = parseFloat(document.getElementById(prefix + "PayFinAmtBalDisp").value) - parseFloat(document.getElementById("lpRedeemDisp").value);
    //document.getElementById(prefix + "PayFinAmtBalDisp").value = parseFloat(finalCashBal).toFixed(2);

}
//
// *************************************************************************************************************/
// START CODE TO CONVERT AMOUNT TO METAL WEIGHT @PRIYANKA-05APR18
// *************************************************************************************************************/
function calcCashToMetal(prefix) {

    // alert('utin_prev_cash_opening == ' + document.getElementById("utin_prev_cash_opening").value);
    // alert('PrevTotOpeningAmt == ' + document.getElementById("PrevTotOpeningAmt").value);
    // alert(document.getElementById("utin_cash_to_metal").value);
    
    // GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
    // START CASH TO METAL FUNCTIONALITY FOR GOLD @PRIYANKA-05APR18
    // GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
    
    //alert('payPanelName == ' + document.getElementById("payPanelName").value);
    
    // CASH AMOUNT CONVERT TO METAL @PRIYANKA-05APR18
    if (document.getElementById("utin_cash_to_metal").value == 'NaN') {
        document.getElementById("utin_cash_to_metal").value = '0.00';
    }
    //
  
    if (document.getElementById("utin_cash_to_metal").value == '0.00') {
        
        if (document.getElementById("utin_cash_to_metal").value == '') {
            document.getElementById("utin_cash_to_metal").value = parseFloat(document.getElementById("utin_prev_cash_opening").value).toFixed(2);
        }
    }
    
    // PREV CASH OPENING AMOUNT @PRIYANKA-05APR18
    if (document.getElementById("utin_prev_cash_opening").value == '' || document.getElementById("utin_prev_cash_opening").value == 'NaN') {
        document.getElementById("utin_prev_cash_opening").value = '0.00';
    }
    
    // alert('utin_cash_to_metal == ' + document.getElementById("utin_cash_to_metal").value);
    
    // CALCUALTE PREV CASH BALANCE @PRIYANKA-05APR18
    // PREV CASH BAL = (PREV CASH OPENING - CASH AMOUNT CONVERT TO METAL)
    var utin_prev_cash_bal = Math_round(parseFloat(document.getElementById("utin_prev_cash_opening").value) - parseFloat(document.getElementById("utin_cash_to_metal").value)).toFixed(2);

    // PREV CASH BAL
    if (utin_prev_cash_bal == '' || utin_prev_cash_bal == 'NaN') {
        utin_prev_cash_bal = '0.00';
    }
    
    // PREV CASH BALANCE @PRIYANKA-05APR18
    document.getElementById("utin_prev_cash_bal").value = parseFloat(utin_prev_cash_bal).toFixed(2);
    // PREV CASH BALANCE CRDR @PRIYANKA-05APR18
    if (utin_prev_cash_bal >= 0) {
        document.getElementById("utin_prev_cash_bal_CRDR").value = document.getElementById("utin_prev_cash_opening_CRDR").value;
    } else {
        // PREV CASH BALANCE CRDR
        if (document.getElementById("utin_prev_cash_opening_CRDR").value == 'CR') {
            document.getElementById("utin_prev_cash_bal_CRDR").value = 'DR';
        } else if (document.getElementById("utin_prev_cash_opening_CRDR").value == 'DR') {
            document.getElementById("utin_prev_cash_bal_CRDR").value = 'CR';
        }
        
    }

    // CASH AMOUNT THAT CONVERT TO METAL WEIGHT @PRIYANKA-05APR18
    var utin_cash_to_metal = parseFloat(document.getElementById("utin_cash_to_metal").value).toFixed(2);
    
    // CASH AMOUNT
    if (utin_cash_to_metal == 'NaN') {
        utin_cash_to_metal = '0.00';
    } else if (utin_cash_to_metal != 0) {
        document.getElementById("utin_cash_to_metal").value = parseFloat(utin_cash_to_metal).toFixed(2);
    }

    // METAL RATE @PRIYANKA-05APR18
    if (document.getElementById('utin_metal_rate').value == '') {
        document.getElementById('utin_metal_rate').value = parseFloat(document.getElementById(prefix + 'GoldRate').value);
    }
    
    // METAL RATE
    var utin_metal_rate = parseFloat(document.getElementById('utin_metal_rate').value).toFixed(2); // METAL RATE
    
    // METAL RATE
    if (utin_metal_rate == '' || utin_metal_rate == 'NaN') {
        utin_metal_rate = '0.00';
    }
    
    // CALCULATE METAL WEIGHT ACCORDING TO AMOUNT @PRIYANKA-05APR18
    // METAL WT = ((WT IN GM * AMOUNT CONVERT TO METAL) / METAL RATE)
    var totalWeight = ((document.getElementById('gmWtInGm').value * parseFloat(utin_cash_to_metal)) / parseFloat(utin_metal_rate)).toFixed(3);
    
    if (totalWeight == '' || totalWeight == 'NaN') {
        totalWeight = '0.00';
    }
    
    // METAL PURITY @PRIYANKA-05APR18    
    if (document.getElementById('utin_purity').value == '' || document.getElementById('utin_purity').value == 'NaN') {
        document.getElementById('utin_purity').value = '100';
    }
    
    var utin_purity = parseFloat(document.getElementById('utin_purity').value);
    
    if (utin_purity == '' || utin_purity == 'NaN') {
        utin_purity = '0.00';
    }
    
    // CALCULATE METAL FINAL FINE WEIGHT @PRIYANKA-05APR18
    var finalMetalWeight = ((parseFloat(totalWeight) * parseFloat(utin_purity)) / 100).toFixed(3);
    
    if (finalMetalWeight == '' || finalMetalWeight == 'NaN') {
        finalMetalWeight = '0.00';
    }
    
    // alert('totalWeight == ' + totalWeight);
    // alert('finalMetalWeight == ' + finalMetalWeight);
    
    // METAL FINAL FINE WEIGHT
    document.getElementById('utin_cash_to_metalwt').value = parseFloat(finalMetalWeight).toFixed(3);
    // METAL FINAL FINE WEIGHT CRDR
    document.getElementById('utin_cash_to_metalwt_CRDR').value = document.getElementById("utin_prev_cash_opening_CRDR").value;
    // CASH TO METAL WEIGHT BAL TYPE
    var utin_cash_gd_bal_type = 'GM';
    // CASH TO METAL WEIGHT BAL 
    document.getElementById('utin_cash_gd_bal').value = parseFloat(document.getElementById('utin_cash_to_metalwt').value).toFixed(3) + ' ' + utin_cash_gd_bal_type;
    // CASH TO METAL WEIGHT BAL CRDR
    document.getElementById('utin_cash_gd_bal_CRDR').value = document.getElementById("utin_cash_to_metalwt_CRDR").value;
    
    // if (document.getElementById('paymentMode').value == 'RateCut') {

    // alert('PayTotAmtBalDisp **==' + document.getElementById(prefix + "PayTotAmtBalDisp").value);

    // document.getElementById(prefix + "PayTotAmtBalDisp").value = Math_round(parseFloat(document.getElementById(prefix + "PayTotAmtBalDisp").value) + parseFloat(document.getElementById("utin_cash_to_metal").value));  
    // document.getElementById(prefix + 'PayTotAmt').value = Math_round(parseFloat(document.getElementById(prefix + "PayTotAmtBalDisp").value) + parseFloat(document.getElementById("utin_cash_to_metal").value));  

    // alert('PayTotAmtBalDisp ==' + document.getElementById(prefix + "PayTotAmtBalDisp").value);
    // }
    
    // CASH AMOUNT THAT CONVERT TO METAL WEIGHT @PRIYANKA-06APR18
    if (document.getElementById("GdCashToMetal").value == '' || document.getElementById("GdCashToMetal").value == 'NaN') {
        document.getElementById("GdCashToMetal").value = '0.00';
    }
    
    // CASH AMOUNT THAT CONVERT TO METAL WEIGHT @PRIYANKA-06APR18
    var GdCashToMetal = parseFloat(document.getElementById("GdCashToMetal").value);
    
    // CASH AMOUNT @PRIYANKA-06APR18
    if (GdCashToMetal == '' || GdCashToMetal == 'NaN') {
        GdCashToMetal = '0.00';
        document.getElementById("GdCashToMetal").value = parseFloat(GdCashToMetal).toFixed(2);
    } else {
        document.getElementById("GdCashToMetal").value = parseFloat(GdCashToMetal).toFixed(2);
    }
    
    // PREV CASH BALANCE @PRIYANKA-06APR18
    document.getElementById("PrevGdCashBal").value = parseFloat(GdCashToMetal).toFixed(2);

    //alert('payPanelName == ' + document.getElementById("payPanelName").value);

    // PREV CASH BALANCE CRDR @PRIYANKA-06APR18
    if (document.getElementById('PaymentReceiptPanel').value == 'RECEIPT' ||
       (document.getElementById("payPanelName").value == 'SlPrPayment' || 
        document.getElementById("payPanelName").value == 'SellPayUp')) {
        var PrevGdCashBalCRDR = 'DR';
    } else if (document.getElementById('PaymentReceiptPanel').value == 'PAYMENT' ||
              (document.getElementById("payPanelName").value == 'StockPayment' || 
               document.getElementById("payPanelName").value == 'StockPayUp') ||
               document.getElementById("payPanelName").value == 'RawPayUp' || 
               document.getElementById("payPanelName").value == 'StockReturnPanel' || 
               document.getElementById("payPanelName").value == 'RawPayment') {
        var PrevGdCashBalCRDR = 'CR';
    }
   
    // PREV CASH BALANCE CRDR @PRIYANKA-06APR18
    document.getElementById('PrevGdCashBalCRDR').value = PrevGdCashBalCRDR;
    
    // METAL RATE @PRIYANKA-06APR18
    if (document.getElementById('GdMetalRate').value == '') {
        document.getElementById('GdMetalRate').value = parseFloat(document.getElementById(prefix + 'GoldRate').value);
    }
    
    // METAL RATE @PRIYANKA-06APR18
    var GdMetalRate = parseFloat(document.getElementById('GdMetalRate').value).toFixed(2); // METAL RATE
    
    // METAL RATE @PRIYANKA-06APR18
    if (GdMetalRate == '' || GdMetalRate == 'NaN') {
        GdMetalRate = '0.00';
    }
    
    // CALCULATE METAL WEIGHT ACCORDING TO AMOUNT @PRIYANKA-06APR18
    // METAL WT = ((WT IN GM * AMOUNT CONVERT TO METAL) / METAL RATE) @PRIYANKA-06APR18
    var gdTotalWeight = ((document.getElementById('gmWtInGm').value * parseFloat(GdCashToMetal)) / parseFloat(GdMetalRate)).toFixed(3);
    
    if (gdTotalWeight == '' || gdTotalWeight == 'NaN') {
        gdTotalWeight = '0.00';
    }
    
    // METAL PURITY @PRIYANKA-06APR18        
    if (document.getElementById('GdPurity').value == '' || document.getElementById('GdPurity').value == 'NaN') {
        document.getElementById('GdPurity').value = '100';
    }
    
    var GdPurity = parseFloat(document.getElementById('GdPurity').value);
    
    if (GdPurity == '' || GdPurity == 'NaN') {
        GdPurity = '0.00';
    }
    
    // CALCULATE METAL FINAL FINE WEIGHT @PRIYANKA-06APR18
    var gdFinalMetalWeight = ((parseFloat(gdTotalWeight) * parseFloat(GdPurity)) / 100).toFixed(3);
    
    if (gdFinalMetalWeight == '' || gdFinalMetalWeight == 'NaN') {
        gdFinalMetalWeight = '0.00';
    }
    
    // alert('gdTotalWeight == ' + gdTotalWeight);
    // alert('gdFinalMetalWeight == ' + gdFinalMetalWeight);
    
    if (document.getElementById('PaymentReceiptPanel').value == 'RECEIPT' ||
       (document.getElementById("payPanelName").value == 'SlPrPayment' || 
        document.getElementById("payPanelName").value == 'SellPayUp')) {
        var CashToGdMetalWtCRDR = 'CR';
    }
    
    if (document.getElementById('PaymentReceiptPanel').value == 'PAYMENT' ||
       (document.getElementById("payPanelName").value == 'StockPayment' || 
        document.getElementById("payPanelName").value == 'StockPayUp') ||
        document.getElementById("payPanelName").value == 'RawPayUp' || 
        document.getElementById("payPanelName").value == 'StockReturnPanel' || 
        document.getElementById("payPanelName").value == 'RawPayment') {
        var CashToGdMetalWtCRDR = 'DR';
    }
    
    // alert('CashToGdMetalWtCRDR == ' + CashToGdMetalWtCRDR);
    
    // METAL FINAL FINE WEIGHT @PRIYANKA-06APR18
    document.getElementById('CashToGdMetalWt').value = parseFloat(gdFinalMetalWeight).toFixed(3);
    // METAL FINAL FINE WEIGHT CRDR @PRIYANKA-06APR18
    document.getElementById('CashToGdMetalWtCRDR').value = CashToGdMetalWtCRDR;
    // CASH TO METAL WEIGHT BAL TYPE @PRIYANKA-06APR18
    var CashToGdMetalWtType = 'GM';
    // CASH TO METAL WEIGHT BAL @PRIYANKA-06APR18
    document.getElementById('CashMetalGdBal').value = parseFloat(document.getElementById('CashToGdMetalWt').value).toFixed(3) + ' ' + CashToGdMetalWtType;
    // CASH TO METAL WEIGHT BAL CRDR @PRIYANKA-06APR18
    document.getElementById('CashMetalGdBalCRDR').value = document.getElementById("CashToGdMetalWtCRDR").value;

    // GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG
    // END CASH TO METAL FUNCTIONALITY FOR GOLD @PRIYANKA-05APR18
    // GGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGGG

    // SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
    // START CASH TO METAL FUNCTIONALITY FOR SILVER @PRIYANKA-10APR18
    // SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS


    // PREV SL CASH OPENING AMOUNT @PRIYANKA-10APR18
    if (document.getElementById("utin_sl_prev_cash_opening").value == 'NaN') {
        document.getElementById("utin_sl_prev_cash_opening").value = '0.00';
    }
    
    // PREV SL CASH OPENING AMOUNT @PRIYANKA-10APR18
    if (document.getElementById("utin_sl_prev_cash_opening").value == '0.00') {
        document.getElementById("utin_sl_prev_cash_opening").value = parseFloat(document.getElementById("utin_prev_cash_bal").value).toFixed(2);
        document.getElementById("utin_sl_prev_cash_opening_CRDR").value = document.getElementById("utin_prev_cash_bal_CRDR").value;
    }

    // SL CASH AMOUNT CONVERT TO METAL @PRIYANKA-10APR18
    if (document.getElementById("utin_sl_cash_to_metal").value == 'NaN') {
        document.getElementById("utin_sl_cash_to_metal").value = '0.00';
    }
    
//    SL CASH AMOUNT CONVERT TO METAL @PRIYANKA-10APR18
//    if (document.getElementById("utin_sl_cash_to_metal").value == '0.00') {        
//        if (document.getElementById("utin_sl_cash_to_metal").value == '') {
//            document.getElementById("utin_sl_cash_to_metal").value = parseFloat(document.getElementById("utin_prev_cash_bal").value).toFixed(2);
//        }
//    }
    
    // alert('utin_sl_cash_to_metal == ' + document.getElementById("utin_sl_cash_to_metal").value);
    
    // CALCUALTE PREV SL CASH BALANCE @PRIYANKA-10APR18
    // PREV SL CASH BAL = (PREV SL CASH OPENING - SL CASH AMOUNT CONVERT TO METAL)
    var utin_sl_prev_cash_bal = Math_round(parseFloat(document.getElementById("utin_sl_prev_cash_opening").value) - parseFloat(document.getElementById("utin_sl_cash_to_metal").value)).toFixed(2);
        
    // PREV SL CASH BAL @PRIYANKA-10APR18
    if (utin_sl_prev_cash_bal == '' || utin_sl_prev_cash_bal == 'NaN') {
        utin_sl_prev_cash_bal = '0.00';
    }
    
    // PREV SL CASH BALANCE @PRIYANKA-10APR18
    document.getElementById("utin_sl_prev_cash_bal").value = parseFloat(utin_sl_prev_cash_bal).toFixed(2);
    
    // PREV SL CASH BALANCE CRDR @PRIYANKA-10APR18
    if (utin_sl_prev_cash_bal >= 0) {
        document.getElementById("utin_sl_prev_cash_bal_CRDR").value = document.getElementById("utin_sl_prev_cash_opening_CRDR").value;
    } else {
        // PREV SL CASH BALANCE CRDR @PRIYANKA-10APR18
        if (document.getElementById("utin_sl_prev_cash_opening_CRDR").value == 'CR') {
            document.getElementById("utin_sl_prev_cash_bal_CRDR").value = 'DR';
        } else if (document.getElementById("utin_sl_prev_cash_opening_CRDR").value == 'DR') {
            document.getElementById("utin_sl_prev_cash_bal_CRDR").value = 'CR';
        }
        
    }

    // SL CASH AMOUNT THAT CONVERT TO METAL WEIGHT @PRIYANKA-10APR18
    var utin_sl_cash_to_metal = parseFloat(document.getElementById("utin_sl_cash_to_metal").value).toFixed(2);
    // SL CASH AMOUNT @PRIYANKA-10APR18
    if (utin_sl_cash_to_metal == 'NaN') {
        utin_sl_cash_to_metal = '0.00';
    } else if (utin_sl_cash_to_metal != 0) {
        document.getElementById("utin_sl_cash_to_metal").value = parseFloat(utin_sl_cash_to_metal).toFixed(2);
    }

    // SILVER METAL RATE @PRIYANKA-10APR18
    if (document.getElementById('utin_sl_cash_metal_rate').value == '') {
        document.getElementById('utin_sl_cash_metal_rate').value = parseFloat(document.getElementById(prefix + 'SilverRate').value);
    }
    // SILVER METAL RATE @PRIYANKA-10APR18
    var utin_sl_cash_metal_rate = parseFloat(document.getElementById('utin_sl_cash_metal_rate').value).toFixed(2); // SILVER METAL RATE
    //
    // SILVER METAL RATE @PRIYANKA-10APR18
    if (utin_sl_cash_metal_rate == '' || utin_sl_cash_metal_rate == 'NaN') {
        utin_sl_cash_metal_rate = '0.00';
    }
    
    // CALCULATE SL METAL WEIGHT ACCORDING TO AMOUNT @PRIYANKA-10APR18
    // SL METAL WT = ((SL WT IN KG * AMOUNT CONVERT TO METAL) / METAL RATE)
    var TotalSLWeight = ((document.getElementById('gmWtInKg').value * parseFloat(utin_sl_cash_to_metal)) / (parseFloat(utin_sl_cash_metal_rate) / document.getElementById('gmWtInGm').value)).toFixed(3);
    
    if (TotalSLWeight == '' || TotalSLWeight == 'NaN') {
        TotalSLWeight = '0.00';
    }
    
    // SILVER METAL PURITY @PRIYANKA-10APR18    
    if (document.getElementById('utin_sl_cash_metal_purity').value == '' || document.getElementById('utin_sl_cash_metal_purity').value == 'NaN') {
        document.getElementById('utin_sl_cash_metal_purity').value = '100';
    }
    
    var utin_sl_cash_metal_purity = parseFloat(document.getElementById('utin_sl_cash_metal_purity').value);
    
    if (utin_sl_cash_metal_purity == '' || utin_sl_cash_metal_purity == 'NaN') {
        utin_sl_cash_metal_purity = '0.00';
    }
    
    // CALCULATE SL METAL FINAL FINE WEIGHT @PRIYANKA-10APR18 
    var finalSLMetalWeight = ((parseFloat(TotalSLWeight) * parseFloat(utin_sl_cash_metal_purity)) / 100).toFixed(3);
    
    if (finalSLMetalWeight == '' || finalSLMetalWeight == 'NaN') {
        finalSLMetalWeight = '0.00';
    }
    
    // alert('totalWeight == ' + totalWeight);
    // alert('finalMetalWeight == ' + finalMetalWeight);
    
    // SL METAL FINAL FINE WEIGHT @PRIYANKA-10APR18 
    document.getElementById('utin_sl_cash_to_metalwt').value = parseFloat(finalSLMetalWeight).toFixed(3);
    // SL METAL FINAL FINE WEIGHT CRDR @PRIYANKA-10APR18 
    document.getElementById('utin_sl_cash_to_metalwt_CRDR').value = document.getElementById("utin_sl_prev_cash_opening_CRDR").value;
    // SL CASH TO SL METAL WEIGHT BAL TYPE @PRIYANKA-10APR18 
    var utin_cash_sl_bal_type = 'GM';
    // SL CASH TO SL METAL WEIGHT BAL @PRIYANKA-10APR18 
    document.getElementById('utin_cash_sl_bal').value = parseFloat(document.getElementById('utin_sl_cash_to_metalwt').value).toFixed(3) + ' ' + utin_cash_sl_bal_type;
    // Sl CASH TO SL METAL WEIGHT BAL CRDR @PRIYANKA-10APR18 
    document.getElementById('utin_cash_sl_bal_CRDR').value = document.getElementById("utin_sl_cash_to_metalwt_CRDR").value;
          
    
    // CASH AMOUNT THAT CONVERT TO SL METAL WEIGHT @PRIYANKA-10APR18 
    if (document.getElementById("SlCashToMetal").value == '' || document.getElementById("SlCashToMetal").value == 'NaN') {
        document.getElementById("SlCashToMetal").value = '0.00';
    }
    
    // CASH AMOUNT THAT CONVERT TO SL METAL WEIGHT @PRIYANKA-10APR18 
    var SlCashToMetal = parseFloat(document.getElementById("SlCashToMetal").value);
    
    // SL CASH AMOUNT @PRIYANKA-10APR18 
    if (SlCashToMetal == '' || SlCashToMetal == 'NaN') {
        SlCashToMetal = '0.00';
        document.getElementById("SlCashToMetal").value = parseFloat(SlCashToMetal).toFixed(2);
    } else {
        document.getElementById("SlCashToMetal").value = parseFloat(SlCashToMetal).toFixed(2);
    }
    
    // SL PREV CASH BALANCE @PRIYANKA-10APR18 
    document.getElementById("PrevSlCashBal").value = parseFloat(SlCashToMetal).toFixed(2);

    // alert('payPanelName == ' + document.getElementById("payPanelName").value);

    // SL PREV CASH BALANCE CRDR @PRIYANKA-10APR18 
    if (document.getElementById('PaymentReceiptPanel').value == 'RECEIPT' ||
       (document.getElementById("payPanelName").value == 'SlPrPayment' || 
        document.getElementById("payPanelName").value == 'SellPayUp')) {
        var PrevSlCashBalCRDR = 'DR';
    } else if (document.getElementById('PaymentReceiptPanel').value == 'PAYMENT' ||
              (document.getElementById("payPanelName").value == 'StockPayment' || 
               document.getElementById("payPanelName").value == 'StockPayUp') ||
               document.getElementById("payPanelName").value == 'RawPayUp' || 
               document.getElementById("payPanelName").value == 'StockReturnPanel' || 
               document.getElementById("payPanelName").value == 'RawPayment') {
        var PrevSlCashBalCRDR = 'CR';
    }
    
    // SL PREV CASH BALANCE CRDR @PRIYANKA-10APR18 
    document.getElementById('PrevSlCashBalCRDR').value = PrevSlCashBalCRDR;
    
    // SILVER METAL RATE @PRIYANKA-10APR18 
    if (document.getElementById('SlMetalRate').value == '') {
        document.getElementById('SlMetalRate').value = parseFloat(document.getElementById(prefix + 'SilverRate').value);
    }
    
    // SILVER METAL RATE @PRIYANKA-10APR18 
    var SlMetalRate = parseFloat(document.getElementById('SlMetalRate').value).toFixed(2); // SILVER METAL RATE
    
    // SILVER METAL RATE @PRIYANKA-10APR18 
    if (SlMetalRate == '' || SlMetalRate == 'NaN') {
        SlMetalRate = '0.00';
    }
    
    // CALCULATE SL METAL WEIGHT ACCORDING TO AMOUNT @PRIYANKA-10APR18 
    // SL METAL WT = ((SL WT IN KG * SL AMOUNT CONVERT TO SL METAL) / SL METAL RATE) @PRIYANKA-10APR18 
    var SlTotalWeight = ((document.getElementById('gmWtInKg').value * parseFloat(SlCashToMetal)) / (parseFloat(SlMetalRate) / document.getElementById('gmWtInGm').value)).toFixed(3);
    
    if (SlTotalWeight == '' || SlTotalWeight == 'NaN') {
        SlTotalWeight = '0.00';
    }
    
    // METAL PURITY @PRIYANKA-10APR18       
    if (document.getElementById('SlPurity').value == '' || document.getElementById('SlPurity').value == 'NaN') {
        document.getElementById('SlPurity').value = '100';
    }
    
    var SlPurity = parseFloat(document.getElementById('SlPurity').value);
    
    if (SlPurity == '' || SlPurity == 'NaN') {
        SlPurity = '0.00';
    }
    
    // CALCULATE METAL FINAL FINE WEIGHT @PRIYANKA-10APR18 
    var SlFinalMetalWeight = ((parseFloat(SlTotalWeight) * parseFloat(SlPurity)) / 100).toFixed(3);
    
    if (SlFinalMetalWeight == '' || SlFinalMetalWeight == 'NaN') {
        SlFinalMetalWeight = '0.00';
    }
    
    // alert('SlTotalWeight == ' + SlTotalWeight);
    // alert('SlFinalMetalWeight == ' + SlFinalMetalWeight);
    
    // START CODE FOR Payment Panel Issue : (Rate Cut)
    // SILVER CASE - CASH TO METAL CASE - SILVER WT CRDR SHOWING WRONG @PRIYANKA-28JUNE18
    if (document.getElementById('PaymentReceiptPanel').value == 'RECEIPT' ||
       (document.getElementById("payPanelName").value == 'SlPrPayment' || 
        document.getElementById("payPanelName").value == 'SellPayUp')) {
        var CashToSLMetalWtCRDR = 'CR';
    }
    
    if (document.getElementById('PaymentReceiptPanel').value == 'PAYMENT' ||
       (document.getElementById("payPanelName").value == 'StockPayment' || 
        document.getElementById("payPanelName").value == 'StockPayUp') ||
        document.getElementById("payPanelName").value == 'RawPayUp' || 
        document.getElementById("payPanelName").value == 'StockReturnPanel' || 
        document.getElementById("payPanelName").value == 'RawPayment') {
        var CashToSLMetalWtCRDR = 'DR';
    }
    // SILVER CASE - CASH TO METAL CASE - SILVER WT CRDR SHOWING WRONG @PRIYANKA-28JUNE18
    // END CODE FOR Payment Panel Issue : (Rate Cut)
   
    // alert('CashToSLMetalWtCRDR == ' + CashToSLMetalWtCRDR);
    
    // SL METAL FINAL FINE WEIGHT @PRIYANKA-10APR18 
    document.getElementById('CashToSlMetalWt').value = parseFloat(SlFinalMetalWeight).toFixed(3);
    // SL METAL FINAL FINE WEIGHT CRDR @PRIYANKA-10APR18 
    document.getElementById('CashToSlMetalWtCRDR').value = CashToSLMetalWtCRDR;
    // SL CASH TO METAL WEIGHT BAL TYPE @PRIYANKA-10APR18 
    var CashToSlMetalWtType = 'GM';
    // SL CASH TO METAL WEIGHT BAL @PRIYANKA-10APR18 
    document.getElementById('CashMetalSlBal').value = parseFloat(document.getElementById('CashToSlMetalWt').value).toFixed(3) + ' ' + CashToSlMetalWtType;
    // SL CASH TO METAL WEIGHT BAL CRDR @PRIYANKA-10APR18 
    document.getElementById('CashMetalSlBalCRDR').value = document.getElementById("CashToSlMetalWtCRDR").value;
    
    //alert('CashToSlMetalWtCRDR == ' + document.getElementById('CashToSlMetalWtCRDR').value);
    
    // SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
    // END CASH TO METAL FUNCTIONALITY FOR SILVER @PRIYANKA-10APR18
    // SSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSSS
      
    
    // REMAINING CASH BALANCE ON PAYMENT PANEL @PRIYANKA-10APR18 
    if (document.getElementById('paymentMode').value == 'NoRateCut' || document.getElementById('paymentMode').value == 'RateCut') {
        
        //alert('PayPrevAmtDisp @@== ' + document.getElementById(prefix + 'PayPrevAmtDisp').value);
        // alert('utin_prev_cash_opening **== ' + document.getElementById(prefix + 'utin_prev_cash_opening').value);
        // alert('utin_cash_to_metal **== ' + document.getElementById(prefix + 'utin_cash_to_metal').value);
        // alert('utin_prev_cash_bal **== ' + document.getElementById(prefix + 'utin_prev_cash_bal').value);
        // alert('GdCashToMetal **== ' + document.getElementById('GdCashToMetal').value);
        // alert('PrevGdCashBal **== ' + document.getElementById('PrevGdCashBal').value);
        
        if (document.getElementById("utin_cash_to_metal").value == '' || document.getElementById("utin_sl_cash_to_metal").value == '') {

            if (document.getElementById("utin_cash_to_metal").value == '') {
                document.getElementById("utin_prev_cash_bal").value = parseFloat(document.getElementById("PrevTotOpeningAmt").value).toFixed(2);
                document.getElementById("utin_prev_cash_bal_CRDR").value = document.getElementById("PrevTotOpeningAmtCRDR").value;
            }
            
            if (document.getElementById("utin_sl_cash_to_metal").value == '') {
                document.getElementById("utin_sl_prev_cash_bal").value = parseFloat(document.getElementById("PrevTotOpeningAmt").value).toFixed(2);
                document.getElementById("utin_sl_prev_cash_bal_CRDR").value = document.getElementById("PrevTotOpeningAmtCRDR").value;
            }
            
            document.getElementById(prefix + 'PayPrevTotAmt').value = document.getElementById('PrevTotOpeningAmt').value;
            document.getElementById(prefix + 'PayPrevAmtDisp').value = document.getElementById('PrevTotOpeningAmt').value;
            document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById('PrevTotOpeningAmtCRDR').value;

            //alert('PayPrevAmtDisp $$== ' + document.getElementById(prefix + 'PayPrevAmtDisp').value);

        }
        
        // var sl_prev_cash_bal = document.getElementById("utin_sl_prev_cash_bal").value;
        // var gd_prev_cash_bal = document.getElementById("utin_prev_cash_bal").value;
        
        // GD PREV CASH OPENING IS GREATER THAN ZERO && GD CASH TO METAL AMOUNT IS GREATER THAN ZERO @PRIYANKA-10APR18
        if (document.getElementById("utin_prev_cash_opening").value > 0 || document.getElementById("GdCashToMetal").value > 0) {
            
            // CASH BALANCE ON PAYMENT PANEL @PRIYANKA-06APR18
            // if(document.getElementById("utin_prev_cash_bal").value == '0.00'){            
               document.getElementById(prefix + 'PayPrevTotAmt').value = parseFloat(Math.abs(document.getElementById("utin_prev_cash_bal").value)).toFixed(2);
               document.getElementById(prefix + 'PayPrevAmtDisp').value = parseFloat(Math.abs(document.getElementById("utin_prev_cash_bal").value)).toFixed(2);
               document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById('utin_prev_cash_bal_CRDR').value;
            // alert('PayPrevAmtDisp ##== ' + document.getElementById(prefix + 'PayPrevAmtDisp').value);
            // alert('PayPrevCashBalCRDR ##== ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);           
            // }
            
        } 
        
        if (document.getElementById("utin_sl_prev_cash_opening").value > 0 || document.getElementById("SlCashToMetal").value > 0) {
            
            // PREV CASH AMOUNT ON PAYMENT PANEL @PRIYANKA-10APR18            
               document.getElementById(prefix + 'PayPrevTotAmt').value = parseFloat(Math.abs(document.getElementById("utin_sl_prev_cash_bal").value)).toFixed(2);
               document.getElementById(prefix + 'PayPrevAmtDisp').value = parseFloat(Math.abs(document.getElementById("utin_sl_prev_cash_bal").value)).toFixed(2);
               document.getElementById(prefix + 'PayPrevCashBalCRDR').value = document.getElementById('utin_sl_prev_cash_bal_CRDR').value;
            // alert('PayPrevAmtDisp ##== ' + document.getElementById(prefix + 'PayPrevAmtDisp').value);
            // alert('PayPrevCashBalCRDR ##== ' + document.getElementById(prefix + 'PayPrevCashBalCRDR').value);           
            
        } 
        
        //alert('utin_prev_cash_bal $$== ' + document.getElementById('utin_prev_cash_bal').value);
        
        // START CODE FOR ADDED CONDITION FOR PREV BAL NOT DISPLAY IN NO RATE CUT CASE - UPDATE TIME @PRIYANKA-21JUNE18
        if (document.getElementById("payPanelName").value != 'StockPayUp' &&
            document.getElementById("transPanelName").value != 'SellPayUp' &&
            document.getElementById("payPanelName").value != 'RawPayUp') {
            if (document.getElementById("utin_prev_cash_bal").value == '0.00') {
                document.getElementById(prefix + 'PayPrevTotAmt').value = '0.00';
                document.getElementById(prefix + 'PayPrevAmtDisp').value = '0.00';
                document.getElementById("utin_sl_prev_cash_bal").value = '0.00';
                document.getElementById("utin_sl_prev_cash_opening").value = '0.00';
            }
        }
        // END CODE FOR ADDED CONDITION FOR PREV BAL NOT DISPLAY IN NO RATE CUT CASE - UPDATE TIME @PRIYANKA-21JUNE18
    }
    
    //calcWholeSaleRateCut(prefix);
}
// *************************************************************************************************************/
// END CODE TO CONVERT AMOUNT TO METAL WEIGHT @PRIYANKA-05APR18
// *************************************************************************************************************/
