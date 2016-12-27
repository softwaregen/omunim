/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
/***********Start Code To change Func For change Sell Item Calcn @Author:SHRI03MAR15***********/
/***********Start Code To Add Func For Add Sell Iteem Calcn @Author:PRIYA04AUG13***********/
/************Start code to change value added option @Author:PRIYA14JUN14***************/
function calculateSellPrice() {
//    alert('hii');
    if (document.getElementById('slPrItemWtBy').value == 'byNetWt') {
        var wt = document.getElementById('slPrItemNTW').value;
        var wtType = document.getElementById('slPrItemNTWT').value;
    } else if (document.getElementById('slPrItemWtBy').value == 'byGrossWt') {
        wt = document.getElementById('slPrItemGSW').value;
        wtType = document.getElementById('slPrItemGSWT').value;
    }
    var labCharges = document.getElementById('slPrItemLabCharges').value;
    var labChargesType = document.getElementById('slPrItemLabChargesType').value;
    var totalLabNOthCharges = 0;
    var itemsQTY = parseInt(document.getElementById('slPrItemPieces').value);
    var metalRate = parseFloat(document.getElementById('slPrItemMetalRate').value);
    var metalType = document.getElementById('slPrItemMetal').value;
    var itemPurity = parseFloat(document.getElementById('slPrCustWastage').value);//changed @Author:SHRI31AUG16
    var panelName = document.getElementById('panelName').value;

    if (document.getElementById('slPrCustWastage').value == '' || document.getElementById('slPrCustWastage').value == 'NaN') {
        document.getElementById('slPrCustWastage').value = 0;
    }
    if (document.getElementById('slPrItemTunch').value != '') {
        document.getElementById('slPrItemFineWeight').value = (((document.getElementById('slPrItemTunch').value) * wt) / 100).toFixed(3);
    }

    if (document.getElementById('slPrFinalTunch').value != '') {
        document.getElementById('slPrItemFFineWeight').value = (((parseFloat(document.getElementById('slPrFinalTunch').value) + parseFloat(document.getElementById('slPrCustWastage').value)) * wt) / 100).toFixed(3);
    }

    if (document.getElementById('slPrItemFineWeight').value == '' || document.getElementById('slPrItemFineWeight').value == 'NaN') {
        document.getElementById('slPrItemFineWeight').value = 0;
    }
    if (document.getElementById('slPrItemFFineWeight').value == '' || document.getElementById('slPrItemFFineWeight').value == 'NaN') {
        document.getElementById('slPrItemFFineWeight').value = 0;
    }


    var finalFineWeight = parseFloat(document.getElementById('slPrItemFFineWeight').value);
    if (document.getElementById('valueAdd').value == 'false') {
        if (document.getElementById('slPrCustWastage').value != '') {
            itemPurity = itemPurity - 100;
        } else {
            itemPurity = 0;
        }
    } else {
        if (document.getElementById('slPrItemValueAdded').value == '')
            document.getElementById('slPrItemValueAdded').value = '0.00';
    }
//    alert(document.getElementById('addItemLabourChgsBy').value);
    if (document.getElementById('addItemLabourChgsBy').value == 'lbByNetWt') {
        labChargesBy = parseFloat(document.getElementById('slPrItemNTW').value);
    } else if (document.getElementById('addItemLabourChgsBy').value == 'lbByGrossWt') {
        labChargesBy = parseFloat(document.getElementById('slPrItemGSW').value);
    } else {
        var labChargesBy = document.getElementById('slPrItemFFineWeight').value;
    }
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
            var gsWt = document.getElementById('slPrItemGSW').value;
            var gsWtTyp = document.getElementById('slPrItemGSWT').value;
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
            document.getElementById('addItemNTWNMetRate').value = Math.round((finalFineWeight * metalRate) * document.getElementById('gmWtInKg').value).toFixed(2);
        } else if (wtType == 'GM') {
            document.getElementById('addItemNTWNMetRate').value = Math.round((finalFineWeight * metalRate) / document.getElementById('gmWtInGm').value).toFixed(2);
        } else if (wtType == 'MG') {
            document.getElementById('addItemNTWNMetRate').value = Math.round((finalFineWeight * metalRate) / document.getElementById('gmWtInMg').value).toFixed(2);
        }
    } else if (metalType == 'Silver') {
        if (wtType == 'KG') {
            document.getElementById('addItemNTWNMetRate').value = Math.round(finalFineWeight * metalRate * document.getElementById('srGmWtInKg').value).toFixed(2);
        } else if (wtType == 'GM') {
            document.getElementById('addItemNTWNMetRate').value = Math.round((finalFineWeight * metalRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
        }
        else if (wtType == 'MG') {
            document.getElementById('addItemNTWNMetRate').value = Math.round((finalFineWeight * metalRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
        }
    }
    else {
        document.getElementById('slPrItemValuation').value = 0;
        document.getElementById('slPrItemFinalVal').value = 0;
    }
    if (metalType == 'Gold' || metalType == 'Silver') {
        document.getElementById('slPrItemValuation').value = Math.round(parseFloat(document.getElementById('addItemNTWNMetRate').value) + parseFloat(totalLabNOthCharges)).toFixed(2);
        if (document.getElementById('valueAdd').value == 'false') {
            document.getElementById('slPrItemValueAdded').value = Math.round(parseFloat(document.getElementById('addItemNTWNMetRate').value * parseFloat(itemPurity)) / 100).toFixed(2);
            if (document.getElementById('slPrItemValueAdded').value < 0) {
                document.getElementById('slPrItemValueAdded').value = '0.00';
            }
        }
        document.getElementById('slPrMetalTotValuation').value = Math.round(parseFloat(document.getElementById('slPrItemValuation').value) + parseFloat(document.getElementById('slPrItemValueAdded').value)).toFixed(2);
        document.getElementById('slPrItemFinalVal').value = Math.round(document.getElementById('slPrMetalTotValuation').value).toFixed(2);
    }
    var sellItemTotValuation = document.getElementById('slPrMetalTotValuation').value;
    if (document.getElementById('slPrItemVATTax').value != '') {
        document.getElementById('slPrItemTotTax').value = Math.round(((parseFloat(sellItemTotValuation)) * (document.getElementById('slPrItemVATTax')).value) / 100).toFixed(2);
        document.getElementById('slPrMetalTotValuation').value = Math.round(parseFloat(sellItemTotValuation) + parseFloat(document.getElementById('slPrItemTotTax').value)).toFixed(2);
        document.getElementById('slPrItemFinalVal').value = Math.round(document.getElementById('slPrMetalTotValuation').value).toFixed(2);
    }
    if (document.getElementById('slPrCrystalValuation').value != '') {
        if (document.getElementById('slPrMetalTotValuation').value == '' || document.getElementById('slPrMetalTotValuation').value == 'NaN') {
            document.getElementById('slPrMetalTotValuation').value = 0;
        }
        document.getElementById('slPrItemFinalVal').value = Math.round(parseFloat(document.getElementById('slPrMetalTotValuation').value) + parseFloat(document.getElementById('slPrCrystalValuation').value)).toFixed(2);
    }
    return false;
}
/***********End code to change value added option @Author:PRIYA14JUN14***************/
/***********End Code To Add Func For Add Sell Iteem Calcn @Author:PRIYA04AUG13***********/
/***********End Code To change Func For change Sell Item Calcn @Author:SHRI03MAR15***********/

/***********Start Code To Add Fn For New Order @Author:PRIYA15AUG13************/
/***********Start Code To Add Id in New Order @Author:PRIYA16SEP13************/
/***********Start Code To change new order var @Author:PRIYA26OCT13************/
/***********Start Code To change new order var @Author:SANT26AUG16************/
/***********Start Code To change new order var @Author:SANT01SEP16************/
/***********Start Code To change new order var @Author:SANT03SEP16************/
/***********Start Code To change new order var @Author:SANT25NOV16************/
function calcNwOrItemPrice() {
    var labCharges = document.getElementById('nwOrItemLabCharges').value;
    var labChargesType = document.getElementById('nwOrItemLabChargesType').value;
    var totalLabNOthCharges = 0;
    if (document.getElementById('nwOrWtBy').value == 'byGrossWt') {
        var wt = parseFloat(document.getElementById('nwOrItemGrossWeight').value);
        var wtType = document.getElementById('nwOrItemGrossWeightType').value;
    } else if (document.getElementById('nwOrWtBy').value == 'byNetWt') {
        wt = parseFloat(document.getElementById('nwOrItemNetWeight').value);
        wtType = document.getElementById('nwOrItemNetWeightType').value;
    } else if (document.getElementById('nwOrWtBy').value == 'byFineWt') {
        wt = parseFloat(document.getElementById('nwOrItemFnWeight').value);
        wtType = document.getElementById('nwOrItemNetWeightType').value;
    }
    if (document.getElementById('addItemWastage').value == 'NaN' || document.getElementById('addItemWastage').value == '') {
        document.getElementById('addItemWastage').value = 0;
    }
    if (document.getElementById('nwOrWtBy').value == 'byGrossWt') {
        var fineWt = (((100 + parseFloat(document.getElementById('addItemWastage').value)) * wt) / 100).toFixed(3);
    } else {
        var fineWt = (((parseFloat(document.getElementById('nwOrItemPurity').value) + parseFloat(document.getElementById('addItemWastage').value)) * wt) / 100).toFixed(3);
    }
    if (document.getElementById('addItemCustWastage').value == '' || document.getElementById('addItemCustWastage').value == '0') {
        document.getElementById('addItemCustWastage').value = (100 - (parseFloat(document.getElementById('nwOrItemPurity').value) + parseFloat(document.getElementById('addItemWastage').value)));
    }
    document.getElementById('nwOrItemFnWeight').value = fineWt;
    if (document.getElementById('nwOrItemFnWeight').value == 'NaN') {
        document.getElementById('nwOrItemFnWeight').value = 0;
    }
    var itemsQTY = parseInt(document.getElementById('nwOrItemQuantity').value);
    var metalRate = parseFloat(document.getElementById('nwOrItemMetalRate').value);
    var metalType = document.getElementById('nwOrMetalType').value;
    if (labCharges != '') {
        if (labChargesType == 'KG') {
            if (wtType == 'KG')
                totalLabNOthCharges = labCharges * fineWt;
            else if (wtType == 'GM')
                totalLabNOthCharges = (labCharges / 1000) * fineWt;
            else
                totalLabNOthCharges = (labCharges / (1000 * 1000)) * fineWt;
        }
        else if (labChargesType == 'GM') {
            if (wtType == 'KG')
                totalLabNOthCharges = labCharges * 1000 * fineWt;
            else if (wtType == 'GM')
                totalLabNOthCharges = labCharges * fineWt;
            else
                totalLabNOthCharges = (labCharges / 1000) * fineWt;
        } else if (labChargesType == 'MG') {
            if (wtType == 'KG')
                totalLabNOthCharges = labCharges * 1000 * 1000 * fineWt;
            else if (wtType == 'GM')
                totalLabNOthCharges = labCharges * 1000 * fineWt;
            else
                totalLabNOthCharges = labCharges * fineWt;
        }
        else if (labChargesType == 'PP') {
            totalLabNOthCharges = labCharges * itemsQTY;
        }
    }
    document.getElementById('nwOrItemTotLabCharges').value = Math.round(totalLabNOthCharges).toFixed(2);
    if (metalType == 'Gold') {
        if (wtType == 'KG') {
            document.getElementById('nwOrItemGSWNMetalRate').value = Math.round((fineWt * metalRate) * document.getElementById('gmWtInKg').value).toFixed(2);
        } else if (wtType == 'GM') {
            document.getElementById('nwOrItemGSWNMetalRate').value = Math.round((fineWt * metalRate) / document.getElementById('gmWtInGm').value).toFixed(2);
        } else if (wtType == 'MG') {
            document.getElementById('nwOrItemGSWNMetalRate').value = Math.round((fineWt * metalRate) / document.getElementById('gmWtInMg').value).toFixed(2);
        }
    } else if (metalType == 'Silver') {
        if (wtType == 'KG') {
            document.getElementById('nwOrItemGSWNMetalRate').value = Math.round(fineWt * metalRate) * document.getElementById('srGmWtInKg').value.toFixed(2);
        } else if (wtType == 'GM') {
            document.getElementById('nwOrItemGSWNMetalRate').value = Math.round((fineWt * metalRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
        } else if (wtType == 'MG') {
            document.getElementById('nwOrItemGSWNMetalRate').value = Math.round((fineWt * metalRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
        }
    } else {
        document.getElementById('nwOrItemValuation').value = 0;
        document.getElementById('nwOrItemFinalValuation').value = 0;
    }
    document.getElementById('nwOrItemValuation').value = Math.round(parseFloat(document.getElementById('nwOrItemGSWNMetalRate').value) + parseFloat(document.getElementById('nwOrItemTotLabCharges').value)).toFixed(2);
    document.getElementById('nwOrItemFinalValuation').value = Math.round(document.getElementById('nwOrItemValuation').value).toFixed(2);
    document.getElementById('nwOrMetalTotValuation').value = Math.round(document.getElementById('nwOrItemValuation').value).toFixed(2);
    if (document.getElementById('nwOrItemCryFinVal').value != '') {
        var crystalValuation = document.getElementById('nwOrItemCryFinVal').value;
    }
    if (crystalValuation == null || crystalValuation == '') {
        crystalValuation = 0;
    }
    if (document.getElementById('nwOrItemVATTax').value != '') {
        document.getElementById('nwOrItemTotTax').value = Math.round((parseFloat(document.getElementById('nwOrItemValuation').value) * document.getElementById('nwOrItemVATTax').value) / 100).toFixed(2);
        document.getElementById('nwOrMetalTotValuation').value = Math.round(parseFloat(document.getElementById('nwOrItemValuation').value) + parseFloat(document.getElementById('nwOrItemTotTax').value)).toFixed(2);
        document.getElementById('nwOrItemFinalValuation').value = Math.round(document.getElementById('nwOrMetalTotValuation').value).toFixed(2);
    }
    if (document.getElementById('nwOrItemCryFinVal').value != '') {
        if (document.getElementById('nwOrMetalTotValuation').value == '' || document.getElementById('nwOrMetalTotValuation').value == 'NaN') {
            document.getElementById('nwOrMetalTotValuation').value = 0;
        }
        document.getElementById('nwOrItemFinalValuation').value = Math.round(parseFloat(document.getElementById('nwOrMetalTotValuation').value) + parseFloat(document.getElementById('nwOrItemCryFinVal').value)).toFixed(2);
    }
    if (document.getElementById('nwOrItemValuation').value == 'NaN') {
        document.getElementById('nwOrItemValuation').value = 0;
    }
    if (document.getElementById('nwOrItemGSWNMetalRate').value == 'NaN') {
        document.getElementById('nwOrItemGSWNMetalRate').value = 0;
    }
    if (document.getElementById('nwOrItemTotLabCharges').value == 'NaN') {
        document.getElementById('nwOrItemTotLabCharges').value = 0;
    }
    if (document.getElementById('nwOrMetalTotValuation').value == 'NaN') {
        document.getElementById('nwOrMetalTotValuation').value = 0;
    }
    if (document.getElementById('nwOrItemFinalValuation').value == 'NaN') {
        document.getElementById('nwOrItemFinalValuation').value = 0;
    }
    return false;
}
/***********End Code To change new order var @Author:SANT25NOV16************/
/***********End Code To change new order var @Author:SANT03SEP16************/
/***********End Code To change new order var @Author:SANT01SEP16************/
/***********End Code To change new order var @Author:SANT26AUG16************/
/***********End Code To Add Fn For New Order @Author:PRIYA26OCT13************/
/***********End Code To Add Id in New Order @Author:PRIYA16SEP13************/
/***********End Code To change new order var @Author:PRIYA17SEP13************/
/***********Start Code To Calc New order crystal balance @Author:PRIYA16JAN14***************/
function calcNwOrCrystalPrice() {
    var crystalEntered = 0;
    var totalCryVal = 0;
    /***********Start Code To Calc New order crystal balance @Author:SANT11AUG16***************/
    /***********Start Code To Calc New order crystal balance @Author:SANT03SEP16***************/
    if (document.getElementById('panelName').value == 'addItem') {
        getCrystalDiv = getCrystalDiv;
        var count = 1;
    } else if ((document.getElementById('panelName').value == 'NwOrDetUpPanel') || (document.getElementById('panelName').value == 'NwOrPayUp') && (document.getElementById('noOfCry').value == '0')) {
        getCrystalDiv = getCrystalDiv;
        var count = 1;
    } else {
        getCrystalDiv = document.getElementById('noOfCry').value;
        count = document.getElementById('nwOrCryMainId').value;
    }
    /***********End Code To Calc New order crystal balance @Author:SANT03SEP16***************/
    /***********End Code To Calc New order crystal balance @Author:SANT11AUG16***************/
    var delId = 'del' + count;
    for (var dc = count; getCrystalDiv != ''; dc++) {
        if (document.getElementById('del' + dc).value != 'Deleted') {

            var crystalQTY = parseInt(document.getElementById('nwOrCryQty' + dc).value);
            var crystalGsWt = parseFloat(document.getElementById('nwOrCryGSW' + dc).value);
            var crystalGsWtTyp = document.getElementById('nwOrCryGSWType' + dc).value;
            var crystalRate = parseFloat(document.getElementById('nwOrCryRate' + dc).value);
            var crystalRateType = document.getElementById('nwOrCryRateType' + dc).value;
            var crystalVal = parseFloat(document.getElementById('nwOrCryVal' + dc).value);
            var totalGSWTNRate = 0;
            if (crystalRateType == 'PP') {
                totalGSWTNRate = crystalRate * crystalQTY;
            } else {
                totalGSWTNRate = crystalRate * crystalGsWt;
            }
            document.getElementById('nwOrCryVal' + dc).value = Math.round(totalGSWTNRate).toFixed(2);
            if (document.getElementById('nwOrCryVal' + dc).value == 'NaN') {
                document.getElementById('nwOrCryVal' + dc).value = 0;
            }
            totalCryVal += parseFloat(document.getElementById('nwOrCryVal' + dc).value);
            document.getElementById('nwOrItemTotCryVal').value = Math.round(parseFloat(totalCryVal)).toFixed(2);
            document.getElementById('nwOrItemCryFinVal').value = document.getElementById('nwOrItemTotCryVal').value;
            if (document.getElementById('nwOrItemCryTax').value != '') {
                document.getElementById('nwOrItemCryTotalTax').value = Math.round(parseFloat((document.getElementById('nwOrItemTotCryVal').value * document.getElementById('nwOrItemCryTax').value) / 100)).toFixed(2);
                document.getElementById('nwOrItemCryFinVal').value = Math.round(parseFloat(document.getElementById('nwOrItemTotCryVal').value) + parseFloat(document.getElementById('nwOrItemCryTotalTax').value)).toFixed(2);
            }
            if (document.getElementById('nwOrItemCryFinVal').value != '') {
                calcNwOrItemPrice();
            }
        }
        if (document.getElementById(delId).value == 'Deleted') {
            document.getElementById('nwOrItemTotCryVal').value = '';
            document.getElementById('nwOrItemCryTax').value = '';
            document.getElementById('nwOrItemCryTotalTax').value = '';
            document.getElementById('nwOrItemCryFinVal').value = 0 + totalCryVal;
            calcNwOrItemPrice();
        }
        crystalEntered++;
    }
    return false;
}
/***********End Code To Calc New order crystal balance @Author:PRIYA16JAN14***************/
/***********End Code To Calc New order crystal balance @Author:PRIYA17SEP13***************/
/***********Start Code To add func for supp Order Item @Author:PRIYA28SEP13***************/
/***********Start Code To change id @Author:PRIYA10OCT13***************/
function calcSuppOrderItemPrice() {

    var netWeight = document.getElementById('suppNwOrItemNetWeight').value;
    if (document.getElementById('suppNwOrItemFinalTunch').value == 'NaN') {
        document.getElementById('suppNwOrItemFinalTunch').value = 0;
    }
    if (document.getElementById('addStockItemTunch').value != 'NotSelected') {
        document.getElementById('suppNwOrItemFineWeight').value = ((document.getElementById('addStockItemTunch').value * netWeight) / 100).toFixed(3);
    }
    if (document.getElementById('suppNwOrItemFinalTunch').value != '') {
        document.getElementById('suppNwOrItemFFineWeight').value = ((document.getElementById('suppNwOrItemFinalTunch').value * netWeight) / 100).toFixed(3);
    }
    var labCharges = document.getElementById('suppNwOrItemLabCharges').value;
    var labChargesType = document.getElementById('suppNwOrItemLabChargesType').value;
    var othCharges = document.getElementById('suppNwOrItemOthCharges').value;
    var othChargesType = document.getElementById('suppNwOrItemOthChargesType').value;
    var totalLabNOthCharges = 0;
    var finalFineWeight = parseFloat(document.getElementById('suppNwOrItemFFineWeight').value);
    var netWeightType = document.getElementById('suppNwOrItemNetWeightType').value;
    var itemsQTY = parseInt(document.getElementById('suppNwOrItemPieces').value);
    var metalRate = parseFloat(document.getElementById('suppNwOrItemMetalRate').value);
    var metalType = document.getElementById('suppNwOrItemMetalType').value;
    if (document.getElementById('suppNwOrItemFineWeight').value == 'NaN') {
        document.getElementById('suppNwOrItemFineWeight').value = 0;
    }
    if (document.getElementById('suppNwOrItemFFineWeight').value == '' || document.getElementById('suppNwOrItemFFineWeight').value == 'NaN') {
        document.getElementById('suppNwOrItemFFineWeight').value = 0;
    }
    if (document.getElementById('suppNwOrItemMetalRate').value == '') {
        document.getElementById('suppNwOrItemMetalRate').value = 0;
    }
    if (labCharges != '') {
        if (labChargesType == 'KG') {
            if (netWeightType == 'KG')
                totalLabNOthCharges = labCharges * finalFineWeight;
            else if (netWeightType == 'GM')
                totalLabNOthCharges = (labCharges / 1000) * finalFineWeight;
            else
                totalLabNOthCharges = (labCharges / (1000 * 1000)) * finalFineWeight;
        }
        else if (labChargesType == 'GM') {
            if (netWeightType == 'KG')
                totalLabNOthCharges = labCharges * 1000 * finalFineWeight;
            else if (netWeightType == 'GM')
                totalLabNOthCharges = labCharges * finalFineWeight;
            else
                totalLabNOthCharges = (labCharges / 1000) * finalFineWeight;
        }
        else if (labChargesType == 'MG') {
            if (netWeightType == 'KG')
                totalLabNOthCharges = labCharges * 1000 * 1000 * finalFineWeight;
            else if (netWeightType == 'GM')
                totalLabNOthCharges = labCharges * 1000 * finalFineWeight;
            else
                totalLabNOthCharges = labCharges * finalFineWeight;
        }
        else if (labChargesType == 'PP') {
            totalLabNOthCharges = labCharges * itemsQTY;
        }

    }
    if (othCharges != '') {
        if (othChargesType == 'KG') {
            if (netWeightType == 'KG')
                totalLabNOthCharges += othCharges * finalFineWeight;
            else if (netWeightType == 'GM')
                totalLabNOthCharges += (othCharges / 1000) * finalFineWeight;
            else
                totalLabNOthCharges += (othCharges / (1000 * 1000)) * finalFineWeight;
        }
        else if (othChargesType == 'GM') {
            if (netWeightType == 'KG')
                totalLabNOthCharges += othCharges * 1000 * finalFineWeight;
            else if (netWeightType == 'GM')
                totalLabNOthCharges += othCharges * finalFineWeight;
            else
                totalLabNOthCharges += (othCharges / 1000) * finalFineWeight;
        }
        else if (othChargesType == 'MG') {
            if (netWeightType == 'KG')
                totalLabNOthCharges += othCharges * 1000 * 1000 * finalFineWeight;
            else if (netWeightType == 'GM')
                totalLabNOthCharges += othCharges * 1000 * finalFineWeight;
            else
                totalLabNOthCharges += othCharges * finalFineWeight;
        }
        else if (othChargesType == 'PP') {
            totalLabNOthCharges += othCharges * itemsQTY;
        }
    }
    document.getElementById('suppNwOrTotalLabChrg').value = Math.round(totalLabNOthCharges).toFixed(2);
    if (metalType == 'Gold') {
        if (netWeightType == 'KG') {
            document.getElementById('suppNwOrFFNWtNMetRate').value = Math.round((finalFineWeight * metalRate) * 100).toFixed(2);
            document.getElementById('suppNwOrItemValuation').value = Math.round((finalFineWeight * metalRate) * 100 + totalLabNOthCharges).toFixed(2);
            document.getElementById('suppNwOrItemFinalVal').value = Math.round((finalFineWeight * metalRate) * 100 + totalLabNOthCharges).toFixed(2);
        } else if (netWeightType == 'GM') {
            document.getElementById('suppNwOrFFNWtNMetRate').value = Math.round((finalFineWeight * metalRate) / 10).toFixed(2);
            document.getElementById('suppNwOrItemValuation').value = Math.round((finalFineWeight * metalRate) / 10 + totalLabNOthCharges).toFixed(2);
            document.getElementById('suppNwOrItemFinalVal').value = Math.round((finalFineWeight * metalRate) / 10 + totalLabNOthCharges).toFixed(2);
        } else if (netWeightType == 'MG') {
            document.getElementById('suppNwOrFFNWtNMetRate').value = Math.round((finalFineWeight * metalRate) / 10000).toFixed(2);
            document.getElementById('suppNwOrItemValuation').value = Math.round((finalFineWeight * metalRate) / 10000 + totalLabNOthCharges).toFixed(2);
            document.getElementById('suppNwOrItemFinalVal').value = Math.round((finalFineWeight * metalRate) / 10000 + totalLabNOthCharges).toFixed(2);
        }
    } else if (metalType == 'Silver') {
        if (netWeightType == 'KG') {
            document.getElementById('suppNwOrFFNWtNMetRate').value = Math.round(finalFineWeight * metalRate).toFixed(2);
            document.getElementById('suppNwOrItemValuation').value = Math.round((finalFineWeight * metalRate) + totalLabNOthCharges).toFixed(2);
            document.getElementById('suppNwOrItemFinalVal').value = Math.round((finalFineWeight * metalRate) + totalLabNOthCharges).toFixed(2);
        } else if (netWeightType == 'GM') {
            document.getElementById('suppNwOrFFNWtNMetRate').value = Math.round((finalFineWeight * metalRate) / 1000).toFixed(2);
            document.getElementById('suppNwOrItemValuation').value = Math.round((finalFineWeight * metalRate) / 1000 + totalLabNOthCharges).toFixed(2);
            document.getElementById('suppNwOrItemFinalVal').value = Math.round((finalFineWeight * metalRate) / 1000 + totalLabNOthCharges).toFixed(2);
        } else if (netWeightType == 'MG') {
            document.getElementById('suppNwOrFFNWtNMetRate').value = Math.round((finalFineWeight * metalRate) / (1000 * 1000)).toFixed(2);
            document.getElementById('suppNwOrItemValuation').value = Math.round((finalFineWeight * metalRate) / (1000 * 1000) + totalLabNOthCharges).toFixed(2);
            document.getElementById('suppNwOrItemFinalVal').value = Math.round((finalFineWeight * metalRate) / (10000 * 1000) + totalLabNOthCharges).toFixed(2);
        }
    } else {
        document.getElementById('suppNwOrItemValuation').value = 0;
        document.getElementById('suppNwOrItemFinalVal').value = 0;
    }
    document.getElementById('suppNwOrMetalTotValuation').value = document.getElementById('suppNwOrItemValuation').value;
    if (document.getElementById('suppNwOrCryValuation').value != '') {
        var crystalValuation = document.getElementById('suppNwOrCryValuation').value;
    }
    if (crystalValuation == null || crystalValuation == '') {
        crystalValuation = 0;
    }
    if (document.getElementById('suppNwOrItemVATTax').value != '') {
        document.getElementById('suppNwOrTotalTax').value = Math.round(((parseFloat(document.getElementById('suppNwOrItemValuation').value) + parseFloat(crystalValuation)) * document.getElementById('suppNwOrItemVATTax').value) / 100).toFixed(2);
        document.getElementById('suppNwOrMetalTotValuation').value = Math.round(parseFloat(document.getElementById('suppNwOrItemValuation').value) + parseFloat(document.getElementById('suppNwOrTotalTax').value)).toFixed(2);
        document.getElementById('suppNwOrItemFinalVal').value = Math.round(parseFloat(document.getElementById('suppNwOrItemValuation').value) + parseFloat(crystalValuation) + (((parseFloat(document.getElementById('suppNwOrItemValuation').value) + parseFloat(crystalValuation)) * (document.getElementById('suppNwOrItemVATTax').value)) / 100)).toFixed(2);
    }
    if (document.getElementById('suppNwOrItemOthTax').value != '') {
        document.getElementById('suppNwOrTotalTax').value = Math.round((((parseFloat(document.getElementById('suppNwOrItemValuation').value) + parseFloat(crystalValuation)) * document.getElementById('suppNwOrItemVATTax').value) / 100) + (((parseFloat(document.getElementById('suppNwOrItemValuation').value) + parseFloat(crystalValuation)) * document.getElementById('suppNwOrItemOthTax').value) / 100)).toFixed(2);
        document.getElementById('suppNwOrMetalTotValuation').value = Math.round(parseFloat(document.getElementById('suppNwOrItemValuation').value) + parseFloat(document.getElementById('suppNwOrTotalTax').value)).toFixed(2);
        document.getElementById('suppNwOrItemFinalVal').value = Math.round(parseFloat(document.getElementById('suppNwOrItemValuation').value) + parseFloat(crystalValuation) + (((parseFloat(document.getElementById('suppNwOrItemValuation').value) + parseFloat(crystalValuation)) * (document.getElementById('suppNwOrItemVATTax').value)) / 100) + (((parseFloat(document.getElementById('suppNwOrItemValuation').value) + parseFloat(crystalValuation)) * document.getElementById('suppNwOrItemOthTax').value) / 100)).toFixed(2);
    }
    if (document.getElementById('suppNwOrCryValuation').value != '') {
        document.getElementById('suppNwOrItemFinalVal').value = Math.round(parseFloat(document.getElementById('suppNwOrMetalTotValuation').value) + parseFloat(document.getElementById('suppNwOrCryValuation').value)).toFixed(2);
    }
    if (document.getElementById('suppNwOrTotalLabChrg').value == 'NaN') {
        document.getElementById('suppNwOrTotalLabChrg').value = 0;
    }
    if (document.getElementById('suppNwOrFFNWtNMetRate').value == 'NaN') {
        document.getElementById('suppNwOrFFNWtNMetRate').value = 0;
    }
    if (document.getElementById('suppNwOrTotalTax').value == 'NaN') {
        document.getElementById('suppNwOrTotalTax').value = 0;
    }
    if (document.getElementById('suppNwOrItemValuation').value == 'NaN') {
        document.getElementById('suppNwOrItemValuation').value = 0;
    }
    if (document.getElementById('suppNwOrItemFinalVal').value == 'NaN') {
        document.getElementById('suppNwOrItemFinalVal').value = 0;
    }
    return false;
}
/***********End Code To change id @Author:PRIYA10OCT13***************/
/***********End Code To add func for supp Order Item @Author:PRIYA28SEP13***************/
/***********Start Code cal Supp gold and silver Item bal @Author:PRIYA29SEP13***************/
function calcTotalItemBal(metType, recWt, recWtType, tunch, fineWt, metRate, metVal1, metVal2, metBal, metBalType, totAmt, totAmtRec, totAmtBal, cashRec, discount, totMetalWt, metWtBal, totAmtRecDisp, totAmtBalDisp) {
    payPanelName = document.getElementById("payPanelName").value;
    var metalType = document.getElementById(metType).value;
    var payTotalWeight1 = document.getElementById(recWt).value;
    var payTotalWeightType1 = document.getElementById(recWtType).value;
    var payMetalRate1 = document.getElementById(metRate).value;
    var payMetalTunch1 = document.getElementById(tunch).value;
    var payMetalDueWeightType1 = document.getElementById(metBalType).value;
    var goldWeight = (payTotalWeight1 * payMetalTunch1) / 100;
    document.getElementById(fineWt).value = goldWeight;
    if (metalType == 'Gold') {
        if (payTotalWeightType1 == 'KG') {
            document.getElementById(metVal1).value = Math.round((goldWeight * payMetalRate1) * 100).toFixed(2);
        } else if (payTotalWeightType1 == 'GM') {
            document.getElementById(metVal1).value = Math.round((goldWeight * payMetalRate1) / 10).toFixed(2);
        } else if (payTotalWeightType1 == 'MG') {
            document.getElementById(metVal1).value = Math.round((goldWeight * payMetalRate1) / 10000).toFixed(2);
        }
    }
    else if (metalType == 'Silver') {
        if (payPanelName == 'SellItemReturn') {
            metVal2 = metVal1;
        }
        if (payTotalWeightType1 == 'KG') {
            document.getElementById(metVal2).value = Math.round((goldWeight * payMetalRate1)).toFixed(2);
        } else if (payTotalWeightType1 == 'GM') {
            document.getElementById(metVal2).value = Math.round((goldWeight * payMetalRate1) / 1000).toFixed(2);
        }
        else if (payTotalWeightType1 == 'MG') {
            document.getElementById(metVal2).value = Math.round((goldWeight * payMetalRate1) / (1000 * 1000)).toFixed(2);
        }
    }

    if (payMetalDueWeightType1 == 'KG') {
        if (payTotalWeightType1 == 'KG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'GM') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight / 1000)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'MG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight / (1000 * 1000))).toFixed(2);
        }
    }
    else if (payMetalDueWeightType1 == 'GM') {
        if (payTotalWeightType1 == 'KG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight * 1000)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'GM') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'MG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight / (1000))).toFixed(2);
        }
    }
    else if (payMetalDueWeightType1 == 'MG') {
        if (payTotalWeightType1 == 'KG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight * 1000 * 1000)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'GM') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight * 1000)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'MG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight)).toFixed(2);
        }
    }
    document.getElementById(metWtBal).value = (parseFloat(document.getElementById(metBal).value)).toFixed(2) + ' ' + document.getElementById(metBalType).value;
    var metalValuation1 = document.getElementById(metVal1).value;
    if (payPanelName != 'SellItemReturn') {
        var metalValuation2 = document.getElementById(metVal2).value;
    }
    if (metalValuation1 == '') {
        metalValuation1 = 0;
    }
    if (metalValuation2 == '') {
        metalValuation2 = 0;
    }

    document.getElementById(totAmt).value = Math.round(document.getElementById(totAmt).value).toFixed(2);
    if (payPanelName == 'SellItemReturn') {
        document.getElementById(totAmtRec).value = Math.round(parseFloat(metalValuation1)).toFixed(2);
    } else {
        document.getElementById(totAmtRec).value = Math.round(parseFloat(metalValuation1) + parseFloat(metalValuation2)).toFixed(2);
    }
//    if (payPanelName == 'SuppOrderDelivery' || payPanelName == 'suppPendingOrderUp' || payPanelName == 'SuppPaymentPanel') {
//        if (document.getElementById('suppOrCryfinVal').value != '') {
//            document.getElementById(totAmtRec).value = Math.round(parseFloat(document.getElementById('suppOrCryfinVal').value) + parseFloat(document.getElementById(totAmtRec).value)).toFixed(2);
//        }
//    }
    document.getElementById(totAmtRecDisp).value = document.getElementById(totAmtRec).value;
    document.getElementById(totAmtBal).value = Math.round(parseFloat(document.getElementById(totAmt).value) - parseFloat(document.getElementById(totAmtRec).value)).toFixed(2);
    if (document.getElementById(cashRec).value != '' || document.getElementById(discount).value != '') {
        var totalCashPaidAmt = document.getElementById(cashRec).value;
        if (totalCashPaidAmt == null || totalCashPaidAmt == '') {
            totalCashPaidAmt = 0;
        }
        var totalDiscountAmt = document.getElementById(discount).value;
        if (totalDiscountAmt == null || totalDiscountAmt == '') {
            totalDiscountAmt = 0;
        }
        document.getElementById(totAmtBal).value = parseFloat(document.getElementById(totAmtBal).value) - parseFloat(totalCashPaidAmt) - parseFloat(totalDiscountAmt);
    }
    document.getElementById(totAmtBalDisp).value = Math.round(document.getElementById(totAmtBal).value).toFixed(2);
    return false;
}
/***********End Code cal Supp gold and silver Item bal @Author:PRIYA29SEP13***************/
/***********Start Code To Calc New order crystal balance @Author:PRIYA20SEP13***************/
//var getSuppCrystalDiv = 1;
function calcSuppNwOrCrystalPrice(prefix) {

    var panelName = document.getElementById('suppPanelName').value;
    var noOfCry = document.getElementById('noOfCry').value;
    var crystalEntered = 0;
    var totalCryVal = 0;
    if (document.getElementById(prefix + 'PayMetal1Val').value == '') {
        document.getElementById(prefix + 'PayMetal1Val').value = 0;
    }
    if (document.getElementById(prefix + 'PayMetal2Val').value == '') {
        document.getElementById(prefix + 'PayMetal2Val').value = 0;
    }

    var totalCashPaidAmt = document.getElementById(prefix + 'PayCashAmtRec').value;
    if (totalCashPaidAmt == null || totalCashPaidAmt == '') {
        totalCashPaidAmt = 0;
    }
    var totalDiscountAmt = document.getElementById(prefix + 'PayDiscount').value;
    if (totalDiscountAmt == null || totalDiscountAmt == '') {
        totalDiscountAmt = 0;
    }
    if (panelName == 'suppPendingOrderUp') {
        var dc = document.getElementById('sporCryId').value;
        for (var c = 1; c <= noOfCry; c++) { //  if(document.getElementById('suppPaydel' + dc).value != 'Deleted'){ 
            var crystalQTY = parseInt(document.getElementById(prefix + 'PayCryQty' + dc).value);
            var crystalGsWt = parseFloat(document.getElementById(prefix + 'PayCryGsWt' + dc).value);
            var crystalGsWtTyp = document.getElementById(prefix + 'PayCryGsWtType' + dc).value;
            var crystalRate = parseFloat(document.getElementById(prefix + 'PayCryRate' + dc).value);
            var crystalRateType = document.getElementById(prefix + 'PayCryRateType' + dc).value;
            var crystalVal = parseFloat(document.getElementById(prefix + 'PayCryVal' + dc).value);
            var totalGSWTNRate = 0;
            //  }
            crystalEntered++;
        }
    } else {

        for (dc = 1; dc <= getCrystalDiv; dc++) {
            if (document.getElementById('suppPaydel' + dc).value != 'Deleted') {
                crystalQTY = parseInt(document.getElementById(prefix + 'PayCryQty' + dc).value);
                crystalGsWt = parseFloat(document.getElementById(prefix + 'PayCryGsWt' + dc).value);
                crystalGsWtTyp = document.getElementById(prefix + 'PayCryGsWtType' + dc).value;
                crystalRate = parseFloat(document.getElementById(prefix + 'PayCryRate' + dc).value);
                crystalRateType = document.getElementById(prefix + 'PayCryRateType' + dc).value;
                crystalVal = parseFloat(document.getElementById(prefix + 'PayCryVal' + dc).value);
                totalGSWTNRate = 0;
                if (crystalRateType == 'KG') {
                    if (crystalGsWtTyp == 'KG')
                        totalGSWTNRate = crystalRate * crystalGsWt;
                    else if (crystalGsWtTyp == 'GM')
                        totalGSWTNRate = (crystalRate / 1000) * crystalGsWt;
                    else
                        totalGSWTNRate = (crystalRate / (1000 * 1000)) * crystalGsWt;
                }
                else if (crystalRateType == 'GM') {
                    if (crystalGsWtTyp == 'KG')
                        totalGSWTNRate = (crystalRate * 1000) * crystalGsWt;
                    else if (crystalGsWtTyp == 'GM')
                        totalGSWTNRate = crystalRate * crystalGsWt;
                    else
                        totalGSWTNRate = (crystalRate / 1000) * crystalGsWt;
                }
                else if (crystalRateType == 'MG') {
                    if (crystalGsWtTyp == 'KG')
                        totalGSWTNRate = (crystalRate * (1000 * 1000)) * crystalGsWt;
                    else if (crystalGsWtTyp == 'GM')
                        totalGSWTNRate = (crystalRate * 1000) * crystalGsWt;
                    else
                        totalGSWTNRate = crystalRate * crystalGsWt;
                }
                else if (crystalRateType == 'PP') {
                    totalGSWTNRate = crystalRate * crystalQTY;
                }

                document.getElementById(prefix + 'PayCryVal' + dc).value = Math.round(totalGSWTNRate).toFixed(2);
                document.getElementById(prefix + 'PayCryFinVal' + dc).value = Math.round(totalGSWTNRate).toFixed(2);
                if (document.getElementById(prefix + 'PayCryTax' + dc).value != '') {
                    document.getElementById(prefix + 'PayCryFinVal' + dc).value = Math.round(parseFloat(document.getElementById(prefix + 'PayCryVal' + dc).value) + parseFloat((document.getElementById(prefix + 'PayCryVal' + dc).value * document.getElementById(prefix + 'PayCryTax' + dc).value) / 100)).toFixed(2);
                }
                if (document.getElementById(prefix + 'PayCryVal' + dc).value == 'NaN') {
                    document.getElementById(prefix + 'PayCryVal' + dc).value = 0;
                }
                if (document.getElementById(prefix + 'PayCryFinVal' + dc).value == 'NaN') {
                    document.getElementById(prefix + 'PayCryFinVal' + dc).value = 0;
                }
                totalCryVal += parseFloat(document.getElementById(prefix + 'PayCryFinVal' + dc).value);
                document.getElementById('suppOrCryfinVal').value = Math.round(totalCryVal).toFixed(2);
                document.getElementById(prefix + 'PayTotAmtRec').value = Math.round(parseFloat(document.getElementById(prefix + 'PayMetal1Val').value) + parseFloat(document.getElementById(prefix + 'PayMetal2Val').value) + parseFloat(document.getElementById('suppOrCryfinVal').value)).toFixed(2);
                document.getElementById(prefix + 'PayTotAmtRecDisp').value = document.getElementById(prefix + 'PayTotAmtRec').value;
                document.getElementById(prefix + 'PayTotAmtBal').value = Math.round(parseFloat(document.getElementById(prefix + 'PayTotAmt').value) - parseFloat(document.getElementById(prefix + 'PayTotAmtRec').value)).toFixed(2);
                if (document.getElementById(prefix + 'PayCashAmtRec').value != '' || document.getElementById(prefix + 'PayDiscount').value != '') {

                    document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat(document.getElementById(prefix + 'PayTotAmtBal').value) - parseFloat(totalCashPaidAmt) - parseFloat(totalDiscountAmt);
                }
                document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math.round(document.getElementById(prefix + 'PayTotAmtBal').value).toFixed(2);
            }
            if (document.getElementById('suppPaydel' + 1).value == 'Deleted') {
                document.getElementById('suppOrCryfinVal').value = 0 + totalCryVal;
                document.getElementById(prefix + 'PayTotAmtRec').value = Math.round(parseFloat(document.getElementById(prefix + 'PayMetal1Val').value) + parseFloat(document.getElementById(prefix + 'PayMetal2Val').value) + parseFloat(document.getElementById('suppOrCryfinVal').value)).toFixed(2);
                document.getElementById(prefix + 'PayTotAmtRecDisp').value = document.getElementById(prefix + 'PayTotAmtRec').value;
                document.getElementById(prefix + 'PayTotAmtBal').value = Math.round(parseFloat(document.getElementById(prefix + 'PayTotAmt').value) - parseFloat(document.getElementById(prefix + 'PayTotAmtRec').value)).toFixed(2);
                if (document.getElementById(prefix + 'PayCashAmtRec').value != '' || document.getElementById(prefix + 'PayDiscount').value != '') {
                    document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat(document.getElementById(prefix + 'PayTotAmtBal').value) - parseFloat(totalCashPaidAmt) - parseFloat(totalDiscountAmt);
                }
                document.getElementById(prefix + 'PayTotAmtBalDisp').value = Math.round(document.getElementById(prefix + 'PayTotAmtBal').value).toFixed(2);
//                alert(document.getElementById(prefix + 'PayTotAmtBal').value);
            }
            crystalEntered++;
        }
    }
    return false;
}
function calcSuppAddCryPrice() {
    var crystalEntered = 0;
    var totalCryVal = 0;
    for (var dc = 1; dc <= getCrystalDiv; dc++) {
        if (document.getElementById('suppNwOrCryDel' + dc).value != 'Deleted') {
            var crystalQTY = parseInt(document.getElementById('suppNwOrCryQty' + dc).value);
            var crystalGsWt = parseFloat(document.getElementById('suppNwOrCryGSW' + dc).value);
            var crystalGsWtTyp = document.getElementById('suppNwOrCryGSWType' + dc).value;
            var crystalRate = parseFloat(document.getElementById('suppNwOrCryRate' + dc).value);
            var crystalRateType = document.getElementById('suppNwOrCryRateType' + dc).value;
            var crystalVal = parseFloat(document.getElementById('suppNwOrCryVal' + dc).value);
            var totalGSWTNRate = 0;
            if (crystalRateType == 'KG') {
                if (crystalGsWtTyp == 'KG')
                    totalGSWTNRate = crystalRate * crystalGsWt;
                else if (crystalGsWtTyp == 'GM')
                    totalGSWTNRate = (crystalRate / 1000) * crystalGsWt;
                else
                    totalGSWTNRate = (crystalRate / (1000 * 1000)) * crystalGsWt;
            }
            else if (crystalRateType == 'GM') {
                if (crystalGsWtTyp == 'KG')
                    totalGSWTNRate = (crystalRate * 1000) * crystalGsWt;
                else if (crystalGsWtTyp == 'GM')
                    totalGSWTNRate = crystalRate * crystalGsWt;
                else
                    totalGSWTNRate = (crystalRate / 1000) * crystalGsWt;
            }
            else if (crystalRateType == 'MG') {
                if (crystalGsWtTyp == 'KG')
                    totalGSWTNRate = (crystalRate * (1000 * 1000)) * crystalGsWt;
                else if (crystalGsWtTyp == 'GM')
                    totalGSWTNRate = (crystalRate * 1000) * crystalGsWt;
                else
                    totalGSWTNRate = crystalRate * crystalGsWt;
            }
            else if (crystalRateType == 'PP') {
                totalGSWTNRate = crystalRate * crystalQTY;
            }
            document.getElementById('suppNwOrCryVal' + dc).value = Math.round(totalGSWTNRate).toFixed(2);
            document.getElementById('suppNwOrCryFinalVal' + dc).value = Math.round(totalGSWTNRate).toFixed(2);
            if (document.getElementById('suppNwOrCryTax' + dc).value != '') {
                document.getElementById('suppNwOrCryFinalVal' + dc).value = Math.round(parseFloat(document.getElementById('suppNwOrCryVal' + dc).value) + parseFloat((document.getElementById('suppNwOrCryVal' + dc).value * document.getElementById('suppNwOrCryTax' + dc).value) / 100)).toFixed(2);
            }
            if (document.getElementById('suppNwOrCryVal' + dc).value == 'NaN') {
                document.getElementById('suppNwOrCryVal' + dc).value = 0;
            }
            if (document.getElementById('suppNwOrCryFinalVal' + dc).value == 'NaN') {
                document.getElementById('suppNwOrCryFinalVal' + dc).value = 0;
            }
            totalCryVal += parseFloat(document.getElementById('suppNwOrCryFinalVal' + dc).value);
            document.getElementById('suppNwOrCryValuation').value = Math.round(parseFloat(totalCryVal)).toFixed(2);
            calcSuppOrderItemPrice();
        }
        if ((document.getElementById('suppNwOrCryDel' + 1).value == 'Deleted')) {
            document.getElementById('suppNwOrCryValuation').value = 0 + totalCryVal;
            calcSuppOrderItemPrice();
        }
        crystalEntered++;
    }
    return false;
}
//Start code to gcal supp item del val
function getRemainWeightInSuppOrder(sporId) {
    var itemEntered = 0;
    var finalWt = 0;
    var finalGdTotalWt = 0;
    var finalSrTotalWt = 0;
    for (var i = 1; i <= document.getElementById('noOfItems').value; i++) {
        var finWt = 0;
        var metalType = document.getElementById('spOrDvMetalType' + i).value;
        var spOrItemNetWt = parseFloat(document.getElementById('sporItemNetWt' + i).value);
        var spOrItemNetWtTyp = document.getElementById('sporItemNetWtTyp' + i).value;
        if (spOrItemNetWtTyp != 'GM') {
            spOrItemNetWt = convert('GM', spOrItemNetWtTyp, spOrItemNetWt);
        }
        var spOrDvItemNetWt = parseFloat(document.getElementById('spOrDvItemNtWt' + i).value);
        var spOrDvItemNetWtTyp = document.getElementById('spOrDvItemNtWtType' + i).value;
        if (spOrDvItemNetWtTyp != 'GM') {
            spOrDvItemNetWt = convert('GM', spOrDvItemNetWtTyp, spOrDvItemNetWt);
        }
        finWt = spOrDvItemNetWt - spOrItemNetWt;
        document.getElementById('spOrDvItemRemainWt' + i).value = Math.ceil(finWt.toFixed(3) * 1000) / 1000;
        document.getElementById('spOrDvItemRemainWtType' + i).value = spOrDvItemNetWtTyp;
        if (document.getElementById('spOrDvItemRemainWtType' + i).value != 'GM') {
            finWt = convert('GM', document.getElementById('spOrDvItemRemainWtType' + i).value, finWt);
        }
        if (metalType == 'Gold') {
            finalGdTotalWt += Math.ceil(parseFloat(finWt.toFixed(3) * 1000)) / 1000;
            document.getElementById('spOrDvTotRemainGd').value = finalGdTotalWt;
            document.getElementById('spOrDvTotRemainGdTyp').value = document.getElementById('spOrDvItemRemainWtType' + i).value;
        } else if (metalType == 'Silver') {
            finalSrTotalWt += parseFloat(finWt);
            document.getElementById('spOrDvTotRemainSr').value = finalSrTotalWt;
            document.getElementById('spOrDvTotRemainSrTyp').value = document.getElementById('spOrDvItemRemainWtType' + i).value;
        }
        calcItemDeliveryPrice(sporId);
        itemEntered++;
    }
    return false;
}
function calcItemDeliveryPrice(sporId) {
    var finalWt = 0;
    var finalGdTotalWt = 0;
    var finSrWt;
    var finalSrTotalWt = 0;
    var spOrDvTotalWeightType1 = document.getElementById('spOrDvPayTotGdFnWtType').value;
    if (document.getElementById('spOrDvTotRemainGd').value == '' || document.getElementById('spOrDvTotRemainGd').value == 'NaN') {
        document.getElementById('spOrDvTotRemainGd').value = 0;
    }
    var goldWeight = (document.getElementById('spOrDvTotRemainGd').value * parseFloat(document.getElementById('spOrDvPayGdTunch').value)) / 100;
    if (document.getElementById('spOrDvAdvanceGold').value == '') {
        document.getElementById('spOrDvAdvanceGold').value = 0;
    }
    document.getElementById('spOrDvPayGdFnWt').value = (parseFloat(document.getElementById('spOrDvTotFineGd').value) - parseFloat(document.getElementById('spOrDvAdvanceGold').value))
            + parseFloat(goldWeight);
    document.getElementById('spOrDvPayGdFnWt').value = Math.ceil((document.getElementById('spOrDvPayGdFnWt').value) * 1000) / 1000;
    document.getElementById('spOrDvPayTotGdFnWt').value = document.getElementById('spOrDvPayGdFnWt').value;
    if (document.getElementById('spOrDvPayGdFnWt').value == 'NaN') {
        document.getElementById('spOrDvPayGdFnWt').value = 0;
    }
    if (document.getElementById('spOrDvPayTotSrFnWt').value == 'NaN' || document.getElementById('spOrDvPayTotSrFnWt').value == '') {
        document.getElementById('spOrDvPayTotSrFnWt').value = 0;
    }
    document.getElementById('spOrDvReqGdPaid').value = document.getElementById('spOrDvReqGdWt').value;
    document.getElementById('spOrDvReqGdPaidType').value = document.getElementById('spOrDvReqGdWtType').value;
    if (document.getElementById('spOrDvReqGdPaid').value == 'NaN' || document.getElementById('spOrDvReqGdPaid').value == '') {
        document.getElementById('spOrDvReqGdPaid').value = 0;
    }
    if (document.getElementById('spOrDvPayTotGdFnWt').value != 0) {
        document.getElementById('spOrDvPayTotGdFnWt').value = parseFloat(document.getElementById('spOrDvPayGdFnWt').value) - parseFloat(document.getElementById('spOrDvReqGdPaid').value);
        document.getElementById('spOrDvPayTotGdFnWt').value = Math.ceil((document.getElementById('spOrDvPayTotGdFnWt').value) * 1000) / 1000;
        if (spOrDvTotalWeightType1 == 'KG') {
            document.getElementById('spOrDvPayGdVal').value = Math.round((document.getElementById('spOrDvPayTotGdFnWt').value * document.getElementById('spOrDvPayGdRate').value) * document.getElementById('gmWtInKg').value).toFixed(2);
        } else if (spOrDvTotalWeightType1 == 'GM') {
            document.getElementById('spOrDvPayGdVal').value = Math.round((document.getElementById('spOrDvPayTotGdFnWt').value * document.getElementById('spOrDvPayGdRate').value) / document.getElementById('gmWtInGm').value).toFixed(2);
        } else if (spOrDvTotalWeightType1 == 'MG') {
            document.getElementById('spOrDvPayGdVal').value = Math.round((document.getElementById('spOrDvPayTotGdFnWt').value * document.getElementById('spOrDvPayGdRate').value) / document.getElementById('gmWtInMg').value).toFixed(2);
        }
    }
    var spOrDvSrWeightType1 = document.getElementById('spOrDvPayTotSrFnWtType').value;
    var silverWeight = document.getElementById('spOrDvTotRemainSr').value * parseFloat(document.getElementById('spOrDvPaySrTunch').value) / 100;
    if (document.getElementById('spOrDvAdvanceSilver').value == '') {
        document.getElementById('spOrDvAdvanceSilver').value = 0;
    }
    document.getElementById('spOrDvPaySrFnWt').value = (parseFloat(document.getElementById('spOrDvTotFineSr').value) - parseFloat(document.getElementById('spOrDvAdvanceSilver').value))
            + parseFloat(silverWeight);
    document.getElementById('spOrDvPaySrFnWt').value = Math.ceil((document.getElementById('spOrDvPaySrFnWt').value) * 1000) / 1000;
    document.getElementById('spOrDvPayTotSrFnWt').value = document.getElementById('spOrDvPaySrFnWt').value;
    if (document.getElementById('spOrDvPaySrFnWt').value == 'NaN') {
        document.getElementById('spOrDvPaySrFnWt').value = 0;
    }
    if (document.getElementById('spOrDvPayTotSrFnWt').value == 'NaN' || document.getElementById('spOrDvPayTotSrFnWt').value == '') {
        document.getElementById('spOrDvPayTotSrFnWt').value = 0;
    }
    document.getElementById('spOrDvReqSrPaid').value = document.getElementById('spOrDvReqSrWt').value;
    document.getElementById('spOrDvReqSrPaidType').value = document.getElementById('spOrDvReqSrWtType').value;
    if (document.getElementById('spOrDvReqSrPaid').value == 'NaN' || document.getElementById('spOrDvReqSrPaid').value == '') {
        document.getElementById('spOrDvReqSrPaid').value = 0;
    }
    document.getElementById('spOrDvPayTotSrFnWt').value = parseFloat(document.getElementById('spOrDvPaySrFnWt').value) - parseFloat(document.getElementById('spOrDvReqSrPaid').value);
    if (document.getElementById('spOrDvPayTotSrFnWt').value == 'NaN' || document.getElementById('spOrDvPayTotSrFnWt').value == '') {
        document.getElementById('spOrDvPayTotSrFnWt').value = 0;
    }

    document.getElementById('spOrDvPayTotSrFnWt').value = Math.ceil((document.getElementById('spOrDvPayTotSrFnWt').value) * 1000) / 1000;
    if (spOrDvSrWeightType1 == 'KG') {
        document.getElementById('spOrDvPaySrVal').value = Math.round(document.getElementById('spOrDvPayTotSrFnWt').value * document.getElementById('spOrDvPaySrRate').value * document.getElementById('srGmWtInKg').value).toFixed(2);
    } else if (spOrDvSrWeightType1 == 'GM') {
        document.getElementById('spOrDvPaySrVal').value = Math.round((document.getElementById('spOrDvPayTotSrFnWt').value * document.getElementById('spOrDvPaySrRate').value) / document.getElementById('srGmWtInGm').value).toFixed(2);
    } else if (spOrDvSrWeightType1 == 'MG') {
        document.getElementById('spOrDvPaySrVal').value = Math.round((document.getElementById('spOrDvPayTotSrFnWt').value * document.getElementById('spOrDvPaySrRate').value) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
    }
    document.getElementById('spOrDvPayTotVal').value = Math.round(parseFloat(document.getElementById('spOrDvPayGdVal').value) + parseFloat(document.getElementById('spOrDvPaySrVal').value)).toFixed(2);
    document.getElementById('spOrDvReqCashPaid').value = Math.round(document.getElementById('spOrDvReqCashRec').value).toFixed(2);
    if (document.getElementById('spOrDvPayCashPaid').value == '' || document.getElementById('spOrDvPayCashPaid').value == 'NaN') {
        document.getElementById('spOrDvPayCashPaid').value = 0;
    }
    if (document.getElementById('spOrDvPayTotVal').value == '' || document.getElementById('spOrDvPayTotVal').value == 'NaN') {
        document.getElementById('spOrDvPayTotVal').value = 0;
    }
    if (document.getElementById('spOrDvReqCashPaid').value == '' || document.getElementById('spOrDvReqCashPaid').value == 'NaN') {
        document.getElementById('spOrDvReqCashPaid').value = 0;
    }
    if (document.getElementById('finalBalDue').value == '' || document.getElementById('finalBalDue').value == 'NaN') {
        document.getElementById('finalBalDue').value = 0;
    }
    if (document.getElementById('spOrDvPayGdVal').value == 'NaN' || document.getElementById('spOrDvPayGdVal').value == '') {
        document.getElementById('spOrDvPayGdVal').value = 0;
    }
    if (document.getElementById('spOrDvPaySrVal').value == 'NaN' || document.getElementById('spOrDvPaySrVal').value == '') {
        document.getElementById('spOrDvPaySrVal').value = 0;
    }
    if (document.getElementById('spOrDvTotTax').value == 'NaN' || document.getElementById('spOrDvTotTax').value == '') {
        document.getElementById('spOrDvTotTax').value = 0;
    }
    if (document.getElementById('spOrDvPayStoneTotVal').value == 'NaN' || document.getElementById('spOrDvPayStoneTotVal').value == '') {
        document.getElementById('spOrDvPayStoneTotVal').value = 0;
    }

    document.getElementById('spOrDvPayTotAmtBal').value = Math.round((parseFloat(document.getElementById('spOrDvPayTotVal').value) + parseFloat(document.getElementById('spOrDvTotTax').value) + parseFloat(document.getElementById('spOrDvPayStoneTotVal').value)) - parseFloat(document.getElementById('spOrDvPayCashPaid').value) -
            parseFloat(document.getElementById('spOrDvReqCashPaid').value)).toFixed(2);
    return false;
}
/***********Start code to add func for sell crystal cal @Author:PRIYA04DEC13******************/
/***********Start code to add panel @Author:PRIYA20DEC13******************/ function calcSellCryPrice() {
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
                calculateSellPrice();
            }
        }
//if(document.getElementById('panelName').value == 'AddStock'){
        if (document.getElementById(delId).value == 'Deleted') {
            document.getElementById('slPrCrystalValuation').value = '';
            document.getElementById('slPrItemCryTax').value = '';
            document.getElementById('slPrCrystalTotTax').value = '';
            document.getElementById('slPrCryFinVal').value = 0 + totalCryVal;
            calculateSellPrice();
        }
//  }
        crystalEntered++;
    }
    return false;
}
/***********End code to add panel @Author:PRIYA20DEC13******************/
/***********End code to add func for sell crystal cal @Author:PRIYA04DEC13******************/
function calcTotalItemReturnBal(metType, recWt, recWtType, tunch, fineWt, metRate, metVal1, metBal, metBalType, totAmt, totAmtRec, totAmtBal, cashRec, discount, totMetalWt, metWtBal, totAmtRecDisp, totAmtBalDisp) {

    payPanelName = document.getElementById("payPanelName").value;
    var metalType = document.getElementById(metType).value;
    var payTotalWeight1 = document.getElementById(recWt).value;
    var payTotalWeightType1 = document.getElementById(recWtType).value;
    var payMetalRate1 = document.getElementById(metRate).value;
    var payMetalTunch1 = document.getElementById(tunch).value;
    var payMetalDueWeightType1 = document.getElementById(metBalType).value;
    var goldWeight = (payTotalWeight1 * payMetalTunch1) / 100;
    document.getElementById(fineWt).value = goldWeight;
    if (metalType == 'Gold') {
        if (payTotalWeightType1 == 'KG') {
            document.getElementById(metVal1).value = Math.round((goldWeight * payMetalRate1) * 100).toFixed(2);
        } else if (payTotalWeightType1 == 'GM') {
            document.getElementById(metVal1).value = Math.round((goldWeight * payMetalRate1) / 10).toFixed(2);
        } else if (payTotalWeightType1 == 'MG') {
            document.getElementById(metVal1).value = Math.round((goldWeight * payMetalRate1) / 10000).toFixed(2);
        }
    }
    else if (metalType == 'Silver') {
        if (payTotalWeightType1 == 'KG') {
            document.getElementById(metVal2).value = Math.round((goldWeight * payMetalRate1)).toFixed(2);
        } else if (payTotalWeightType1 == 'GM') {
            document.getElementById(metVal2).value = Math.round((goldWeight * payMetalRate1) / 1000).toFixed(2);
        }
        else if (payTotalWeightType1 == 'MG') {
            document.getElementById(metVal2).value = Math.round((goldWeight * payMetalRate1) / (1000 * 1000)).toFixed(2);
        }
    }

    if (payMetalDueWeightType1 == 'KG') {
        if (payTotalWeightType1 == 'KG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'GM') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight / 1000)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'MG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight / (1000 * 1000))).toFixed(2);
        }
    }
    else if (payMetalDueWeightType1 == 'GM') {
        if (payTotalWeightType1 == 'KG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight * 1000)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'GM') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'MG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight / (1000))).toFixed(2);
        }
    }
    else if (payMetalDueWeightType1 == 'MG') {
        if (payTotalWeightType1 == 'KG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight * 1000 * 1000)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'GM') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight * 1000)).toFixed(2);
        }
        else if (payTotalWeightType1 == 'MG') {
            document.getElementById(metBal).value = (parseFloat(document.getElementById(totMetalWt).value - goldWeight)).toFixed(2);
        }
    }
    document.getElementById(metWtBal).value = (parseFloat(document.getElementById(metBal).value)).toFixed(2) + ' ' + document.getElementById(metBalType).value;
    var metalValuation1 = document.getElementById(metVal1).value;
    var metalValuation2 = document.getElementById(metVal2).value;
    if (metalValuation1 == '') {
        metalValuation1 = 0;
    }
    if (metalValuation2 == '') {
        metalValuation2 = 0;
    }
    document.getElementById(totAmt).value = Math.round(document.getElementById(totAmt).value).toFixed(2);
    document.getElementById(totAmtRec).value = Math.round(parseFloat(metalValuation1) + parseFloat(metalValuation2)).toFixed(2);
    if (payPanelName == 'SuppOrderDelivery' || payPanelName == 'suppPendingOrderUp' || payPanelName == 'SuppPaymentPanel') {
        if (document.getElementById('suppOrCryfinVal').value != '') {
            document.getElementById(totAmtRec).value = Math.round(parseFloat(document.getElementById('suppOrCryfinVal').value) + parseFloat(document.getElementById(totAmtRec).value)).toFixed(2);
        }
    }
    document.getElementById(totAmtRecDisp).value = document.getElementById(totAmtRec).value;
    document.getElementById(totAmtBal).value = Math.round(parseFloat(document.getElementById(totAmt).value) - parseFloat(document.getElementById(totAmtRec).value)).toFixed(2);
    if (document.getElementById(cashRec).value != '' || document.getElementById(discount).value != '') {
        var totalCashPaidAmt = document.getElementById(cashRec).value;
        if (totalCashPaidAmt == null || totalCashPaidAmt == '') {
            totalCashPaidAmt = 0;
        }
        var totalDiscountAmt = document.getElementById(discount).value;
        if (totalDiscountAmt == null || totalDiscountAmt == '') {
            totalDiscountAmt = 0;
        }
        document.getElementById(totAmtBal).value = parseFloat(document.getElementById(totAmtBal).value) - parseFloat(totalCashPaidAmt) - parseFloat(totalDiscountAmt);
    }
    document.getElementById(totAmtBalDisp).value = Math.round(document.getElementById(totAmtBal).value).toFixed(2);
    return false;
}
/***********End Code cal Supp gold and silver Item bal @Author:PRIYA29SEP13***************/
/***********Start Code To remove slItemCryFinVal from function for cust sell @Author:ANUJA14APR15***********/
function calculateCustSellPrice() {

    if (document.getElementById('slItemWtBy').value == 'byNetWt') {
        var wt = document.getElementById('slItemNetWeight').value;
//        alert(document.getElementById('slItemNetWeight').value);
        var wtType = document.getElementById('slItemNetWeightType').value;
    } else if (document.getElementById('slItemWtBy').value == 'byGrossWt') {
        wt = document.getElementById('slItemGrossWeight').value;
        wtType = document.getElementById('slItemGrossWeightType').value;
    }
    if (document.getElementById('slItemTunch').value != 'NotSelected') {
        document.getElementById('slItemFineWeight').value = ((document.getElementById('slItemTunch').value * wt) / 100).toFixed(3);
    }
    if (document.getElementById('slItemFineWeight').value == 'NaN') {
        document.getElementById('slItemFineWeight').value = 0;
    }
    if (document.getElementById('slItemMetalRate').value == '') {
        document.getElementById('slItemMetalRate').value = 0;
    }
    var finalWeight = document.getElementById('slItemFineWeight').value
//    alert(finalWeight);
    var itemsQTY = parseInt(document.getElementById('slItemPieces').value);
    var metalRate = parseFloat(document.getElementById('slItemMetalRate').value);
    var metalType = document.getElementById('slItemMetal').value;
    if (document.getElementById('slItemFineWeight').value != '' && document.getElementById('slItemFineWeight').value != 0) {
        if (document.getElementById('slItemFineWeight').value != '' && document.getElementById('slItemFineWeight').value != 0)
        {
            if (metalType == 'Gold') {
                if (wtType == 'KG') {

                    document.getElementById('slItemFnWNMetRate').value = Math.round((finalWeight * metalRate) * document.getElementById('gmWtInKg').value).toFixed(2);
                } else if (wtType == 'GM') {
                    document.getElementById('slItemFnWNMetRate').value = Math.round((finalWeight * metalRate) / document.getElementById('gmWtInGm').value).toFixed(2);
                } else if (wtType == 'MG') {
                    document.getElementById('slItemFnWNMetRate').value = Math.round((finalWeight * metalRate) / document.getElementById('gmWtInMg').value).toFixed(2);
                }
            } else if (metalType == 'Silver') {
                if (wtType == 'KG') {
                    document.getElementById('slItemFnWNMetRate').value = Math.round(finalWeight * metalRate * document.getElementById('srGmWtInKg').value).toFixed(2);
                } else if (wtType == 'GM') {
                    document.getElementById('slItemFnWNMetRate').value = Math.round((finalWeight * metalRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
                } else if (wtType == 'MG') {
                    document.getElementById('slItemFnWNMetRate').value = Math.round((finalWeight * metalRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                }
            } else {
                document.getElementById('slItemFnWNMetRate').value = 0;
                document.getElementById('slItemValuation').value = 0;
                document.getElementById('slItemFinalVal').value = 0;
            }
            document.getElementById('slItemValuation').value = document.getElementById('slItemFnWNMetRate').value;
            document.getElementById('slItemFinalVal').value = document.getElementById('slItemValuation').value;
            document.getElementById('slItemMetalTotValuation').value = document.getElementById('slItemValuation').value
            var itemValuation = document.getElementById('slItemValuation').value;
        }

        if (document.getElementById('slItemVATTax').value != '') {
            document.getElementById('slItemTotTax').value = Math.round((parseFloat(itemValuation) * document.getElementById('slItemVATTax').value) / 100).toFixed(2);
            document.getElementById('slItemMetalTotValuation').value = Math.round(parseFloat(document.getElementById('slItemValuation').value) + parseFloat(document.getElementById('slItemTotTax').value)).toFixed(2);
            document.getElementById('slItemFinalVal').value = Math.round(document.getElementById('slItemMetalTotValuation').value).toFixed(2);
        }
//        if (document.getElementById('slItemCryFinVal').value != '') {
        if (document.getElementById('slItemMetalTotValuation').value == '' || document.getElementById('slItemMetalTotValuation').value == 'NaN') {
            document.getElementById('slItemMetalTotValuation').value = 0;
//            }
            document.getElementById('slItemFinalVal').value = Math.round(parseFloat(document.getElementById('slItemMetalTotValuation').value)).toFixed(2);
        }
    }
    return false;
}
/***********End Code To remove slItemCryFinVal from function for cust sell @Author:ANUJA14APR15***********/
/***********End code to add panel @Author:PRIYA25DEC13******************/
function calcCustSellCryPrice() {
    var crystalEntered = 0;
    var totalCryVal = 0;
    if (document.getElementById('panelName').value == 'CustSellUpPanel' || document.getElementById('panelName').value == 'CustSellPayUp') {
        getCrystalDiv = document.getElementById('noOfCry').value;
        var count = document.getElementById('itslCryId').value;
        var delId = 'del' + count;
    } else {
        count = 1;
        delId = 'del' + 1;
    }
    for (var dc = count; getCrystalDiv != ''; dc++) {
        if (document.getElementById('del' + dc).value != 'Deleted') {
            var crystalQTY = parseInt(document.getElementById('sellCryQty' + dc).value);
            var crystalGsWt = parseFloat(document.getElementById('sellCryGSW' + dc).value);
            var crystalGsWtTyp = document.getElementById('sellCryGSWType' + dc).value;
            var crystalRate = parseFloat(document.getElementById('sellCryRate' + dc).value);
            var crystalRateType = document.getElementById('sellCryRateType' + dc).value;
            var crystalVal = parseFloat(document.getElementById('sellCryVal' + dc).value);
            var totalGSWTNRate = 0;
            if (crystalRateType == 'PP') {
                totalGSWTNRate = crystalRate * crystalQTY;
            } else {
                totalGSWTNRate = crystalRate * crystalGsWt;
            }
            document.getElementById('sellCryVal' + dc).value = Math.round(totalGSWTNRate).toFixed(2);
            if (document.getElementById('sellCryVal' + dc).value == 'NaN') {
                document.getElementById('sellCryVal' + dc).value = 0;
            }
            totalCryVal += parseFloat(document.getElementById('sellCryVal' + dc).value);
            document.getElementById('slItemCryVal').value = Math.round(parseFloat(totalCryVal)).toFixed(2);
            document.getElementById('slItemCryFinVal').value = document.getElementById('slItemCryVal').value;
            if (document.getElementById('slItemCryTax').value != '') {
                document.getElementById('slItemCryTotalTax').value = Math.round(parseFloat((document.getElementById('slItemCryVal').value * document.getElementById('slItemCryTax').value) / 100)).toFixed(2);
                document.getElementById('slItemCryFinVal').value = Math.round(parseFloat(document.getElementById('slItemCryVal').value) + parseFloat(document.getElementById('slItemCryTotalTax').value)).toFixed(2);
            }
            if (document.getElementById('slItemCryFinVal').value != '') {
                calculateCustSellPrice();
            }
        }
        if (document.getElementById(delId).value == 'Deleted') {
            document.getElementById('slItemCryVal').value = '';
            document.getElementById('slItemCryTax').value = '';
            document.getElementById('slItemCryTotalTax').value = '';
            document.getElementById('slItemCryFinVal').value = 0 + totalCryVal;
            calculateCustSellPrice();
        }
        crystalEntered++;
    }
    return false;
}
/***********End code to add panel @Author:PRIYA25DEC13******************/
/***********Start code to calc Metal Bal @Author:PRIYA29DEC13******************/
/***********Start code to add metal1WtFinalBal and metal2WtFinalBal and some if condition please replace all fun @Author:ANUJA28APR15******************/
function calcItemBalance() {
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
/***********End code to add metal1WtFinalBal and metal2WtFinalBal and some if condition please replace all fun @Author:ANUJA28APR15******************/
/***********End code to calc Metal Bal @Author:PRIYA29DEC13******************/
/***********Start code to add one global variable  finalBal @Author:ANUJA22MAY15******************/
/***********Start update all code @Author:GAUR23SEP16******************/
var finalBal = 0;
function calcCashBalance(prefix) {
    if (document.getElementById(prefix + 'PayCashAmtRec').value != '' || document.getElementById(prefix + 'PayDiscount').value != '') {
        var totalCashPaidAmt = document.getElementById(prefix + 'PayCashAmtRec').value;
        if (totalCashPaidAmt == null || totalCashPaidAmt == '') {
            totalCashPaidAmt = '0.00';
        }
        var totalDiscountAmt = document.getElementById(prefix + 'PayDiscount').value;
        if (totalDiscountAmt == null || totalDiscountAmt == '' || totalDiscountAmt == 'undefined') {
            totalDiscountAmt = '0.00';
        }
    }

    document.getElementById(prefix + 'PayDiscountDisp').value = parseFloat(totalDiscountAmt).toFixed(2);
    if (document.getElementById(prefix + 'PayDiscountDisp').value == 'undefined' || document.getElementById(prefix + 'PayDiscountDisp').value == 'NaN') {
        document.getElementById(prefix + 'PayDiscountDisp').value = '0.00';
    }
    document.getElementById(prefix + 'PayTotAmtBalDisp').value = (parseFloat(document.getElementById(prefix + 'PayTotAmtBal').value) - parseFloat(totalCashPaidAmt) - parseFloat(totalDiscountAmt)).toFixed(2);

    if (document.getElementById(prefix + 'PayTotAmtBalDisp').value == 'NaN') {
        document.getElementById(prefix + 'PayTotAmtBalDisp').value = (parseFloat(document.getElementById(prefix + 'PayTotAmtBal').value));
    }
    finalBal = document.getElementById(prefix + 'PayTotAmtBal').value;

//    finalBal = document.getElementById(prefix + 'PayTotAmtBal').value;
//    if (document.getElementById(prefix + 'PayTotAmtRec').value == '') {
//        document.getElementById(prefix + 'PayTotAmtRec').value = 0;
//    }
//    document.getElementById(prefix + 'PayTotAmtBal').value = (parseFloat(document.getElementById(prefix + 'PayTotAmt').value) - parseFloat(document.getElementById(prefix + 'PayTotAmtRec').value)).toFixed(2);
//    if (document.getElementById(prefix + 'PayCashAmtRec').value != '' || document.getElementById(prefix + 'PayDiscount').value != '') {
//        var totalCashPaidAmt = document.getElementById(prefix + 'PayCashAmtRec').value;
//        if (totalCashPaidAmt == null || totalCashPaidAmt == '') {
//            totalCashPaidAmt = 0;
//        }
//        var totalDiscountAmt = document.getElementById(prefix + 'PayDiscount').value;
//        if (totalDiscountAmt == null || totalDiscountAmt == '') {
//            totalDiscountAmt = 0;
//        }
////        alert(document.getElementById(prefix + 'PayTotAmtBal').value);  //old
//        document.getElementById(prefix + 'PayTotAmtBal').value = (parseFloat(document.getElementById(prefix + 'PayTotAmtBal').value) - parseFloat(totalCashPaidAmt) - parseFloat(totalDiscountAmt)).toFixed(2);
////        alert(document.getElementById(prefix + 'PayTotAmtBal').value);  //old
//    }
//    if (document.getElementById('payPanelName').value == 'SellItemReturn' || document.getElementById('payPanelName').value == 'SellItemReturnUp') {
//        if (document.getElementById(prefix + 'PayCashAmtRec').value != '' && document.getElementById('balAvail').value == 0) {
//            document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat(document.getElementById('returnVal').value - totalCashPaidAmt);
//        }
//        if (document.getElementById(prefix + 'PayTotAmtBal').value < 0) {
//            document.getElementById(prefix + 'PayTotAmtBal').value = 0;
//        }
//    }
//    document.getElementById(prefix + 'PayTotAmtBalDisp').value = document.getElementById(prefix + 'PayTotAmtBal').value;
//    finalBal = document.getElementById(prefix + 'PayTotAmtBal').value;
//    alert(finalBal);
}
/***********End update all code @Author:GAUR23SEP16******************/
/***********End code to add one global variable  finalBal @Author:ANUJA22MAY15******************/
/***************Start code to calculate raw Final Val @Author:PRIYA18JAN14***************/
/****Start code to calculate dicount and total final valuation of raw metal @OMMODTAG SHE_22DEC15****/
/****Start code to calculate dicount and total final valuation of raw metal @OMMODTAG SHE04MAR16****/
/****Start code to calculate final valuation of raw metal @OMMODTAG SHE02APR16****/
/****Start code to calculate final valuation of raw metal @OMMODTAG SHE18MAY16****/
function  calRawMetalFinVal() {
    var wt = parseFloat(document.getElementById('addRawStockItemNetWeight').value);
    var wtType = document.getElementById('addRawStockItemNetWeightType').value;
    var metalRate = parseFloat(document.getElementById('addRawStockItemMetalRate').value);
    var metalType = document.getElementById('addRawStockItemMetal').value;


    if (document.getElementById('addRawStockItemTunch').value != 'NotSelected') {
        document.getElementById('addRawStockFineWeight').value = parseFloat((parseFloat(document.getElementById('addRawStockItemTunch').value) * wt) / 100).toFixed(3);
    }
    if (document.getElementById('addRawStockItemFinalTunch').value != '') {
        document.getElementById('addRawStockFFineWeight').value = ((document.getElementById('addRawStockItemFinalTunch').value * wt) / 100).toFixed(3);
    }

    if (document.getElementById('addRawStockFineWeight').value == 'NaN') {
        document.getElementById('addRawStockFineWeight').value = 0;
    }
    if (document.getElementById('addRawStockFFineWeight').value == '' || document.getElementById('addRawStockFFineWeight').value == 'NaN') {
        document.getElementById('addRawStockFFineWeight').value = 0;
    }
    var finalFineWeight = parseFloat(document.getElementById('addRawStockFFineWeight').value);
    var itemsQTY = parseInt(document.getElementById('addRawStockItemPieces').value);
    var labCharges = document.getElementById('addRawStockLabCharges').value;
    var labChargesType = document.getElementById('addRawStockLabChargesType').value;
    var totalLabNOthCharges = 0;
    var totVal;

    var labChargesBy = finalFineWeight;
    if (document.getElementById('addRawStockFFineWeight').value != '' && document.getElementById('addRawStockFFineWeight').value != 0) {
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
            document.getElementById('addRawItemLbNOthCh').value = Math.round(totalLabNOthCharges).toFixed(2);
        } else {
            document.getElementById('addRawItemLbNOthCh').value = 0;
        }

        if (metalType == 'Gold') {
            if (wtType == 'MG') {
                document.getElementById('addRawStockItemFnWNMetRate').value = Math.round((metalRate * finalFineWeight) / document.getElementById('gmWtInMg').value).toFixed(2);
                document.getElementById('addRawStockValuation').value = Math.round(parseFloat((metalRate * finalFineWeight) / document.getElementById('gmWtInMg').value) + parseFloat(totalLabNOthCharges)).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('addRawStockItemFnWNMetRate').value = Math.round((metalRate * finalFineWeight) / document.getElementById('gmWtInGm').value).toFixed(2);
                document.getElementById('addRawStockValuation').value = Math.round(parseFloat((metalRate * finalFineWeight) / document.getElementById('gmWtInGm').value) + parseFloat(totalLabNOthCharges)).toFixed(2);
            } else {
                document.getElementById('addRawStockItemFnWNMetRate').value = Math.round((metalRate * finalFineWeight) * document.getElementById('gmWtInKg').value).toFixed(2);
                document.getElementById('addRawStockValuation').value = Math.round(parseFloat((metalRate * finalFineWeight) * document.getElementById('gmWtInKg').value) + parseFloat(totalLabNOthCharges)).toFixed(2);
            }
        }
        else if (metalType == 'Silver') {
            if (wtType == 'MG') {
                document.getElementById('addRawStockItemFnWNMetRate').value = Math.round((metalRate * finalFineWeight) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                document.getElementById('addRawStockValuation').value = Math.round(parseFloat((metalRate * finalFineWeight) / document.getElementById('srGmWtInMg').value) + parseFloat(totalLabNOthCharges)).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('addRawStockItemFnWNMetRate').value = Math.round((metalRate * finalFineWeight) / document.getElementById('srGmWtInGm').value).toFixed(2);
                document.getElementById('addRawStockValuation').value = Math.round(parseFloat((metalRate * finalFineWeight) / document.getElementById('srGmWtInGm').value) + parseFloat(totalLabNOthCharges)).toFixed(2);
            } else {
                document.getElementById('addRawStockItemFnWNMetRate').value = Math.round((metalRate * finalFineWeight * document.getElementById('srGmWtInKg').value)).toFixed(2);
                document.getElementById('addRawStockValuation').value = Math.round(parseFloat((metalRate * finalFineWeight) / document.getElementById('srGmWtInKg').value) + parseFloat(totalLabNOthCharges)).toFixed(2);
            }
        }
        document.getElementById('addRawStockValuation').value = Math.round(parseFloat(document.getElementById('addRawStockItemFnWNMetRate').value) + parseFloat(totalLabNOthCharges)).toFixed(2);
        document.getElementById('addRawStockFinalValuation').value = Math.round(document.getElementById('addRawStockValuation').value).toFixed(2);
        if (document.getElementById('addRawStockItemTax').value != '') {
            document.getElementById('addRawStockItemTotTax').value = Math.round(parseFloat(document.getElementById('addRawStockValuation').value * document.getElementById('addRawStockItemTax').value) / 100).toFixed(2);
            document.getElementById('addRawStockFinalValuation').value = Math.round(parseFloat(document.getElementById('addRawStockValuation').value) + (parseFloat(document.getElementById('addRawStockItemTax').value) / 100 * document.getElementById('addRawStockValuation').value)).toFixed(2);
        } else {
            document.getElementById('addRawStockItemTotTax').value = '';
        }
    }
    return false;
}
/****END code to calculate final valuation of raw metal @OMMODTAG SHE18MAY16****/
/****End code to calculate final valuation of raw metal @OMMODTAG SHE02APR16****/
/****End code to calculate dicount and total final valuation of raw metal @OMMODTAG SHE04MAR16****/
/****End code to calculate dicount and total final valuation of raw metal @OMMODTAG SHE_22DEC15****/
/***************End code to calculate raw Final Val @Author:PRIYA18JAN14***************/
/***************Start code to calculate supplier depoit bal @Author:PRIYA20JUN14***************/ function  calSuppDepositBalance() {
    var metalEntered = 0;
    var metalCount = document.getElementById("metalCount").value;
    prefix = 'suppUdDp';
    var count = 1;
    var delId = 'del' + 1;
    var totAmtRec = 0;
    var gdVal = 0;
    var slVal = 0;
    var cash = document.getElementById('suppUdhaarCash').value;
    if (cash == '')
        cash = 0;
    for (var dc = count; getMetalDiv != ''; dc++) {
        if (document.getElementById('metalDel' + dc).value != 'Deleted') {

            var payTotalWeight1 = document.getElementById(prefix + 'PayMetal1RecWt' + dc).value;
            var payTotalWeightType1 = document.getElementById(prefix + 'PayMetal1RecWtType' + dc).value;
            var payMetalRate1 = document.getElementById(prefix + 'PayMetal1Rate' + dc).value;
            var payMetalTunch1 = document.getElementById(prefix + 'PayMetal1Tunch' + dc).value;
            var goldWeight = (payTotalWeight1 * payMetalTunch1) / 100;
            document.getElementById(prefix + 'PayMetal1FnWt' + dc).value = goldWeight;
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Gold') {
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = Math.round((goldWeight * payMetalRate1) * document.getElementById('gmWtInKg').value).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = Math.round((goldWeight * payMetalRate1) / document.getElementById('gmWtInGm').value).toFixed(2);
                } else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = Math.round((goldWeight * payMetalRate1) / document.getElementById('gmWtInMg').value).toFixed(2);
                }
                gdVal = parseFloat(document.getElementById(prefix + 'PayMetal1Val' + dc).value)
            }
            if (document.getElementById(prefix + 'PayMetalType1' + dc).value == 'Silver') {
                if (payTotalWeightType1 == 'KG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = Math.round((goldWeight * payMetalRate1 * document.getElementById('srGmWtInKg').value)).toFixed(2);
                } else if (payTotalWeightType1 == 'GM') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = Math.round((goldWeight * payMetalRate1) / document.getElementById('srGmWtInGm').value).toFixed(2);
                }
                else if (payTotalWeightType1 == 'MG') {
                    document.getElementById(prefix + 'PayMetal1Val' + dc).value = Math.round((goldWeight * payMetalRate1) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                }
                slVal = parseFloat(document.getElementById(prefix + 'PayMetal1Val' + dc).value).toFixed(2);
            }
            document.getElementById('suppUdhaarAmtBal').value = Math.round(parseFloat(gdVal) + parseFloat(slVal) + parseFloat(cash)).toFixed(2);
        }
        metalEntered++;
    }
    document.getElementById('suppUdhaarAmtBal').value = Math.round(parseFloat(gdVal) + parseFloat(slVal) + parseFloat(cash)).toFixed(2);
    return false;
}
/***************End code to calculate supplier depoit bal @Author:PRIYA20JUN14***************/
function calcSuppItemPrice() {
    var suppItemEntered = 0;
    var totalVal = 0;
    for (var dc = 1; getSuppItemDiv != ''; dc++) {
        if (document.getElementById('suppItemDel' + dc).value != 'Deleted') {
            var finVal = document.getElementById('suppItemFinVal' + dc).value;
            if (finVal == '' || finVal == NaN)
                finVal = 0;
            totalVal += parseFloat(finVal);
            document.getElementById('stockPayTotAmt').value = totalVal;
        }
        suppItemEntered++;
    }
    return false;
}
function suppPurLotValue() {
    var suppPurLotEntered = 0;
    var totalFinVal = 0;
    var totalLabNOthCharges = 0;
    for (var dc = 1; getSuppItemDiv != ''; dc++) {
        var weight = document.getElementById('suppItemFnWt' + dc).value;
        var metalType = document.getElementById('suppMetalType' + dc).value;
        var metalRate = document.getElementById('suppItemMetalRate' + dc).value;
        var wtType = document.getElementById('suppItemFnWtType' + dc).value;
        var labCharges = document.getElementById('suppItemLabCharges' + dc).value;
        var labChargesType = document.getElementById('suppItemLabChargesType' + dc).value

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
                totalLabNOthCharges = parseFloat(labCharges);
            }
        }
        if (metalType == 'Gold') {
            if (wtType == 'KG') {
                document.getElementById('suppItemValuation' + dc).value = Math.round((weight * metalRate) * document.getElementById('gmWtInKg').value).toFixed(2);
                document.getElementById('suppItemTotVal' + dc).value = Math.round((weight * metalRate) * document.getElementById('gmWtInKg').value + totalLabNOthCharges).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('suppItemValuation' + dc).value = Math.round((weight * metalRate) / document.getElementById('gmWtInGm').value).toFixed(2);
                document.getElementById('suppItemTotVal' + dc).value = Math.round((weight * metalRate) / document.getElementById('gmWtInGm').value + totalLabNOthCharges).toFixed(2);
            } else if (wtType == 'MG') {
                document.getElementById('suppItemValuation' + dc).value = Math.round((weight * metalRate) / document.getElementById('gmWtInMg').value).toFixed(2);
                document.getElementById('suppItemTotVal' + dc).value = Math.round((weight * metalRate) / document.getElementById('gmWtInMg').value + totalLabNOthCharges).toFixed(2);
            }
        } else if (metalType == 'Silver') {
            if (wtType == 'KG') {
                document.getElementById('suppItemValuation' + dc).value = Math.round(weight * metalRate * document.getElementById('srGmWtInKg').value).toFixed(2);
                document.getElementById('suppItemTotVal' + dc).value = Math.round((weight * metalRate * document.getElementById('srGmWtInKg').value) + totalLabNOthCharges).toFixed(2);
            } else if (wtType == 'GM') {
                document.getElementById('suppItemValuation' + dc).value = Math.round((weight * metalRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
                document.getElementById('suppItemTotVal' + dc).value = Math.round((weight * metalRate) / document.getElementById('srGmWtInGm').value + totalLabNOthCharges).toFixed(2);
            } else if (wtType == 'MG') {
                document.getElementById('suppItemValuation' + dc).value = Math.round((weight * metalRate) / document.getElementById('srGmWtInMg').value).toFixed(2);
                document.getElementById('suppItemTotVal' + dc).value = Math.round((weight * metalRate) / document.getElementById('srGmWtInMg').value + totalLabNOthCharges).toFixed(2);
            }
        } else {
            document.getElementById('suppItemValuation' + dc).value = 0;
            document.getElementById('suppItemTotVal' + dc).value = 0;
        }
        var val = document.getElementById('suppItemTotVal' + dc).value;
        var tax = document.getElementById('suppItemTax' + dc).value;
        var per = /%/;
        var checkPer = tax.search(per);
        if (checkPer != -1) {
            tax = Math.round(parseFloat(val) * parseFloat(tax) / 100).toFixed(2);
        }
        if (val == '')
            val = 0;
        if (tax == '')
            tax = 0;
        document.getElementById('suppItemFinVal' + dc).value = parseFloat(val) + parseFloat(tax);
        totalFinVal += parseFloat(document.getElementById('suppItemFinVal' + dc).value);
        document.getElementById('stockPayCashAmtRec').value = Math.round(totalFinVal).toFixed(2);
        document.getElementById('stockPayTotAmt').value = Math.round(totalFinVal).toFixed(2);
        document.getElementById('stockPayTotAmtDisp').value = Math.round(totalFinVal).toFixed(2);
        var cashRec = document.getElementById('stockPayCashAmtRec').value;
        document.getElementById('stockPayCashRecDisp').value = Math.round(cashRec).toFixed(2);
        if (cashRec == '')
            cashRec = 0;
        var totAmt = document.getElementById('stockPayTotAmt').value;
        if (totAmt == '')
            totAmt = 0;
        var totAmtRec = document.getElementById('stockPayTotAmtRec').value;
        if (totAmtRec == '')
            totAmtRec = 0;
        document.getElementById('stockPayTotAmtBal').value = Math.round(parseFloat(totAmt) - parseFloat(cashRec) - parseFloat(totAmtRec)).toFixed(2);
        document.getElementById('stockPayTotAmtBalDisp').value = Math.round(parseFloat(totAmt) - parseFloat(cashRec) - parseFloat(totAmtRec)).toFixed(2);
        totalLabNOthCharges = 0;
        suppPurLotEntered++;
    }
    return false;
}
var totalCryVal = 0;
function suppPurLotItemValue() {
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
    var c = document.getElementById('suppItemCnt').value;
    if (document.getElementById("checkForSimItem").value == 'true')
        suppItemDetDiv = document.getElementById("noOfSuppPurItem").value;
    for (var dc = 1; dc <= suppItemDetDiv; dc++) {
        if (document.getElementById('addStockItemNetWeight' + dc).value != '') {
            globSuppSimItemInd = dc;
            if (document.getElementById('addStockItemTunch' + dc).value != 'NotSelected') {
                document.getElementById('addStockItemFineWeight' + dc).value = parseFloat((document.getElementById('addStockItemTunch' + dc).value * document.getElementById('addStockItemNetWeight' + dc).value) / 100).toFixed(3);
                document.getElementById('addStockItemFFineWeight' + dc).value = document.getElementById('addStockItemFineWeight' + dc).value;
                if ((document.getElementById('addStockItemWastage' + dc).value) != '') {
                    document.getElementById('addStockItemFinalTunch' + dc).value = (parseFloat(document.getElementById('addStockItemTunch' + dc).value) + parseFloat(document.getElementById('addStockItemWastage' + dc).value));
                    document.getElementById('addStockItemFFineWeight' + dc).value = (((parseFloat(document.getElementById('addStockItemWastage' + dc).value) + parseFloat(document.getElementById('addStockItemTunch' + dc).value)) *
                            document.getElementById('addStockItemNetWeight' + dc).value) / 100).toFixed(3);
                }
            }
            var metalType = document.getElementById('metalType').value;
            var metalRate = document.getElementById('addStockItemMetalRate' + dc).value;
            var qty = document.getElementById('addStockItemPieces' + dc).value;
            var finalFineWeight = document.getElementById('addStockItemFFineWeight' + dc).value;
            var labCharges = document.getElementById('addStockItemLabCharges' + dc).value;
            var labChargesType = document.getElementById('addStockItemLabChargesType' + dc).value
            var gsWt = document.getElementById('addStockItemGrossWeight' + dc).value
            var gsWtType = document.getElementById('addStockItemGrossWeightType' + dc).value;
            var ntWt = document.getElementById('addStockItemNetWeight' + dc).value;
            var ntWtType = document.getElementById('addStockItemNetWeightType' + dc).value;
            if (gsWt != '') {
                if (gsWtType != 'GM')
                    gsWtKG += convert('GM', gsWtType, gsWt);
                else
                    gsWtGM += parseFloat(gsWt);
                totalGsWt = parseFloat(gsWtKG) + parseFloat(gsWtGM);
                document.getElementById('suppItemGsWt' + c).value = (totalGsWt).toFixed(3);
                document.getElementById('suppItemNtWt' + c).value = (totalGsWt).toFixed(3);
            }
            if (ntWt != '') {
                if (ntWtType != 'GM')
                    ntWtKG = convert('GM', ntWtType, ntWt);
                else
                    ntWtGM += parseFloat(ntWt);
                totalNtWt = parseFloat(ntWtKG) + parseFloat(ntWtGM);
                document.getElementById('suppItemNtWt' + c).value = (totalNtWt).toFixed(3);
            }
            if (finalFineWeight != '') {
                fnWt += parseFloat(finalFineWeight);
                document.getElementById('suppItemFnWt' + c).value = (fnWt).toFixed(3);
            }
            if (labCharges != '') {
                if (labChargesType == 'KG') {
                    if (ntWtType == 'KG')
                        totalLabNOthCharges = labCharges * finalFineWeight;
                    else if (ntWtType == 'GM')
                        totalLabNOthCharges = (labCharges / 1000) * finalFineWeight;
                    else
                        totalLabNOthCharges = (labCharges / (1000 * 1000)) * finalFineWeight;
                }
                else if (labChargesType == 'GM') {
                    if (ntWtType == 'KG')
                        totalLabNOthCharges = labCharges * 1000 * finalFineWeight;
                    else if (ntWtType == 'GM')
                        totalLabNOthCharges = labCharges * finalFineWeight;
                    else
                        totalLabNOthCharges = (labCharges / 1000) * finalFineWeight;
                }
                else if (labChargesType == 'MG') {
                    if (ntWtType == 'KG')
                        totalLabNOthCharges = labCharges * 1000 * 1000 * finalFineWeight;
                    else if (ntWtType == 'GM')
                        totalLabNOthCharges = labCharges * 1000 * finalFineWeight;
                    else
                        totalLabNOthCharges = labCharges * finalFineWeight;
                }
                else if (labChargesType == 'PP') {
                    totalLabNOthCharges = labCharges * qty;
                }
                labTotal += parseFloat(totalLabNOthCharges);
                document.getElementById('suppItemLabCharges' + c).value = (labTotal);
            }
            if (metalType == 'Gold') {
                if (ntWtType == 'KG') {
                    rateNWt = Math.round((finalFineWeight * metalRate) * 100).toFixed(2);
                    document.getElementById('addStockItemValuation' + dc).value = Math.round((finalFineWeight * metalRate) * document.getElementById('gmWtInKg').value + totalLabNOthCharges).toFixed(2);
                    document.getElementById('addStockItemFinalVal' + dc).value = Math.round((finalFineWeight * metalRate) * document.getElementById('gmWtInKg').value + totalLabNOthCharges).toFixed(2);
                } else if (ntWtType == 'GM') {
                    rateNWt = Math.round((finalFineWeight * metalRate) / 10).toFixed(2);
                    document.getElementById('addStockItemValuation' + dc).value = Math.round((finalFineWeight * metalRate) / document.getElementById('gmWtInGm').value + totalLabNOthCharges).toFixed(2);
                    document.getElementById('addStockItemFinalVal' + dc).value = Math.round((finalFineWeight * metalRate) / document.getElementById('gmWtInGm').value + totalLabNOthCharges).toFixed(2);
                } else if (ntWtType == 'MG') {
                    rateNWt = Math.round((finalFineWeight * metalRate) / 10000).toFixed(2);
                    document.getElementById('addStockItemValuation' + dc).value = Math.round((finalFineWeight * metalRate) / document.getElementById('gmWtInMg').value + totalLabNOthCharges).toFixed(2);
                    document.getElementById('addStockItemFinalVal' + dc).value = Math.round((finalFineWeight * metalRate) / document.getElementById('gmWtInMg').value + totalLabNOthCharges).toFixed(2);
                }
            } else if (metalType == 'Silver') {
                if (ntWtType == 'KG') {
                    rateNWt = Math.round((finalFineWeight * metalRate)).toFixed(2);
                    document.getElementById('addStockItemValuation' + dc).value = Math.round((finalFineWeight * metalRate * document.getElementById('srGmWtInKg').value) + totalLabNOthCharges).toFixed(2);
                    document.getElementById('addStockItemFinalVal' + dc).value = Math.round((finalFineWeight * metalRate * document.getElementById('srGmWtInKg').value) + totalLabNOthCharges).toFixed(2);
                } else if (ntWtType == 'GM') {
                    rateNWt = Math.round((finalFineWeight * metalRate) / 1000).toFixed(2);
                    document.getElementById('addStockItemValuation' + dc).value = Math.round((finalFineWeight * metalRate) / document.getElementById('srGmWtInGm').value + totalLabNOthCharges).toFixed(2);
                    document.getElementById('addStockItemFinalVal' + dc).value = Math.round((finalFineWeight * metalRate) / document.getElementById('srGmWtInGm').value + totalLabNOthCharges).toFixed(2);
                } else if (ntWtType == 'MG') {
                    rateNWt = Math.round((finalFineWeight * metalRate) / (1000 * 1000)).toFixed(2);
                    document.getElementById('addStockItemValuation' + dc).value = Math.round((finalFineWeight * metalRate) / (document.getElementById('srGmWtInMg').value) + totalLabNOthCharges).toFixed(2);
                    document.getElementById('addStockItemFinalVal' + dc).value = Math.round((finalFineWeight * metalRate) / (document.getElementById('srGmWtInMg').value) + totalLabNOthCharges).toFixed(2);
                }
            } else {
                rateNWt = 0;
                document.getElementById('addStockItemValuation' + dc).value = 0;
                document.getElementById('addStockItemFinalVal' + dc).value = 0;
            }
            finVal += parseFloat(document.getElementById('addStockItemFinalVal' + dc).value);
            var lotTax = document.getElementById('suppItemTax' + c).value;
            if (lotTax == '')
                lotTax = 0;
            itemCryVal = totalCryVal;
            totVal = parseFloat(parseFloat(itemCryVal) + parseFloat(finVal) + parseFloat(lotTax)).toFixed(2);
            finalTotalVal += parseFloat(totVal);
//            alert('HI');
//            alert(finalTotalVal);
            totalRateNWt += parseFloat(rateNWt);
            document.getElementById('suppItemValuation' + c).value = totalRateNWt;
            document.getElementById('suppItemTotVal' + c).value = parseFloat(itemCryVal + finVal).toFixed(2);
            document.getElementById('suppItemFinVal' + c).value = parseFloat(totVal).toFixed(2);
            document.getElementById('stockPayCashAmtRec').value = Math.round(document.getElementById('suppItemFinVal' + c).value).toFixed(2);
            document.getElementById('stockPayTotAmt').value = Math.round(finalTotalVal).toFixed(2);
            document.getElementById('stockPayTotAmtDisp').value = Math.round(document.getElementById('suppItemFinVal' + c).value).toFixed(2);
            var cashRec = document.getElementById('stockPayCashAmtRec').value;
            document.getElementById('stockPayCashRecDisp').value = Math.round(cashRec).toFixed(2);
            if (cashRec == '')
                cashRec = 0;
            var totAmt = document.getElementById('stockPayTotAmt').value;
            if (totAmt == '')
                totAmt = 0;
            var totAmtRec = document.getElementById('stockPayTotAmtRec').value;
            if (totAmtRec == '')
                totAmtRec = 0;
            document.getElementById('stockPayTotAmtBal').value = Math.round(parseFloat(totAmt) - parseFloat(cashRec) - parseFloat(totAmtRec)).toFixed(2);
            document.getElementById('stockPayTotAmtBalDisp').value = Math.round(parseFloat(totAmt) - parseFloat(cashRec) - parseFloat(totAmtRec)).toFixed(2);
            totalLabNOthCharges = 0;
            suppPurItemEntered++;
        }
    }
    return false;
}
function calcSuppPurCryPrice() {
    var crystalEntered = 0;
    var count = 1;
    var delId = 'del' + count;
    totalCryVal = 0;
    var suppLotItemDet = 0;
    var lotItemDetTotal = 0
    var lotItemDet = 0;
    if (document.getElementById("checkForSimItem").value == 'true') {
        suppItemDetDiv = document.getElementById("noOfSuppPurItem").value;
    }
    for (var dc = 1; dc <= suppItemDetDiv; dc++) {
//        if (document.getElementById("checkForSimItem").value == 'true') {
//            if ((getSuppPurCryArr[dc]) == undefined)
//                getSuppPurCryArr[dc] = document.getElementById("noOfCry").value;
//        }
//    
        if (document.getElementById("upPanel").value == 'upPanel') {
            if ((getSuppPurCryArr[dc]) == undefined)
                getSuppPurCryArr[dc] = document.getElementById("suppPurCryCount" + dc).value;
        }
        for (var cry = count; cry <= getSuppPurCryArr[dc]; cry++) {
            if (document.getElementById('del' + dc + cry).value != 'Deleted' && document.getElementById('addStockCryGSW' + dc + cry).value != '') {
                var crystalQTY = parseInt(document.getElementById('addStockCryQty' + dc + cry).value);
                var crystalGsWt = parseFloat(document.getElementById('addStockCryGSW' + dc + cry).value);
                var crystalGsWtTyp = document.getElementById('addStockCryGSWType' + dc + cry).value;
                var crystalRate = parseFloat(document.getElementById('addStockCryRate' + dc + cry).value);
                var crystalRateType = document.getElementById('addStockCryRateType' + dc + cry).value;
                var crystalVal = parseFloat(document.getElementById('addStockCryVal' + dc + cry).value);
                var totalGSWTNRate = 0;
                if (crystalRateType == 'PP') {
                    totalGSWTNRate = crystalRate * crystalQTY;
                } else {
                    totalGSWTNRate = crystalRate * crystalGsWt;
                }
                document.getElementById('addStockCryVal' + dc + cry).value = Math.round(totalGSWTNRate).toFixed(2);
                if (document.getElementById('addStockCryVal' + dc + cry).value == 'NaN') {
                    document.getElementById('addStockCryVal' + dc + cry).value = 0;
                }
                totalCryVal += parseFloat(document.getElementById('addStockCryVal' + dc + cry).value);
                document.getElementById('itemTotalCrystalVal' + dc).value = totalCryVal;
                crystalEntered++;
            }
        }
        lotItemDet = document.getElementById('addStockItemFinalVal' + dc).value;
        if (lotItemDet == '' || lotItemDet == NaN)
            lotItemDet = 0;
        lotItemDetTotal += parseFloat(lotItemDet);
        document.getElementById('suppItemTotVal' + suppItemCount).value = parseFloat(parseFloat(totalCryVal) + parseFloat(lotItemDetTotal)).toFixed(2);
        document.getElementById('suppItemFinVal' + suppItemCount).value = parseFloat(parseFloat(totalCryVal) + parseFloat(lotItemDetTotal)).toFixed(2);
        suppLotItemDet++;
        //  getSuppPurCryArr[dc] = '';
    }
    return false;
}
function calItemPrice() {
    if (document.getElementById('addItemFfnWtBy').value == 'byGrossWt') {
        wt = document.getElementById('addItemGrossWeight').value;
        wtType = document.getElementById('addItemGrossWeightType').value;
    } else {
        var wt = document.getElementById('addItemNetWeight').value;
        var wtType = document.getElementById('addItemNetWeightType').value;
    }
    if (document.getElementById('addItemTunch').value != 'NotSelected') {
        document.getElementById('addItemFineWeight').value = ((document.getElementById('addItemTunch').value * wt) / 100).toFixed(3);
    }
    if (document.getElementById('addItemFinalTunch').value != '') {
        document.getElementById('addItemFFineWeight').value = ((document.getElementById('addItemFinalTunch').value * wt) / 100).toFixed(3);
    }
    var finalFineWeight = parseFloat(document.getElementById('addItemFFineWeight').value);
    var itemsQTY = parseInt(document.getElementById('addItemPieces').value);
    var metalRate = parseFloat(document.getElementById('addItemMetalRate').value); //change metal rate id for tax in metal rate @Author:SHRI29FEB16
    var metalType = document.getElementById('addItemMetal').value;
    var labCharges = document.getElementById('addItemLabCharges').value;
    var labChargesType = document.getElementById('addItemLabChargesType').value;
    var totalLabNOthCharges = 0;
    var totVal;
//alert(document.getElementById('addItemLabourChgsBy').value);
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
        } else {
            document.getElementById('addItemLbNOthCh').value = 0;
        }
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
//*********Start code to check condition for supplier deleivery panel add multiple crystal :Author:SANT14SEP16******
//*********Start code to check condition for supplier deleivery panel add multiple crystal :Author:SANT14SEP16******
function calcItemCryPrice() {
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
            document.getElementById('addItemCryFinVal').value = (parseFloat(totalCryVal)).toFixed(2);
            if (document.getElementById('addItemCryFinVal').value != '') {
                calItemPrice();
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
//*********End code to check condition for supplier deleivery panel add multiple crystal :Author:SANT14SEP16******
//*********End code to check condition for supplier deleivery panel add multiple crystal :Author:SANT14SEP16******
function calculateSellLotPrice() {
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
    if (document.getElementById('addItemTunch').value != 'NotSelected') {
        document.getElementById('addItemFineWeight').value = (parseFloat(((document.getElementById('addItemTunch').value)) * wt) / 100).toFixed(3);
        var wstg = parseFloat(document.getElementById('addItemTunch').value) + parseFloat(purWstg);
        document.getElementById('addItemFFineWeight').value = ((parseFloat(wstg) * wt) / 100).toFixed(3);
        document.getElementById('addItemCustWastage').value = parseFloat(document.getElementById('addItemTunch').value) + parseFloat(purWstg);
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
            }
            else if (wtType == 'MG') {
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
        if (document.getElementById('addItemCryFinVal').value != '') {
            document.getElementById('addItemFinalVal').value = Math.round(parseFloat(totVal) + parseFloat(document.getElementById('addItemCryFinVal').value)).toFixed(2);
        }
    }
    return false;
}
function calculateMetalRateTax() {
    document.getElementById('metalRateWithTax').value = (parseFloat(document.getElementById('metalRate').value * 100) / parseFloat(100 + parseFloat(document.getElementById('metalRateTaxPrecent').value))).toFixed(2);
    document.getElementById('metalRateTaxAmt').value = (parseFloat(document.getElementById('metalRate').value) - parseFloat(document.getElementById('metalRateWithTax').value)).toFixed(2);
    return false;
}

//Start Function to Get Weight from Weighing Scale
function getWeightFromWeighingScale(elementId, elementId2) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById(elementId).value = xmlhttp.responseText;
            document.getElementById(elementId2).value = document.getElementById(elementId).value;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omsswtsc.php", true);
    xmlhttp.send();
}
//End Function to Get Weight from Weighing Scale
function calcSuppItemDeliveryPrice() {
    var totalGdFnWt = 0;
    var totalSrFnWt = 0;
    var noOfItemsCnt = document.getElementById('noOfItems').value;
    ////////////////GOLD/////////////////////Start code to metal type:Author:SANT11AUG16******
    ////////////////GOLD/////////////////////Start code to metal type:Author:SANT14AUG16******
    ////////////////GOLD/////////////////////Start code to metal type:Author:SANT22AUG16******
    ////////////////GOLD/////////////////////Start code to metal type:Author:SANT23AUG16******
    ////////////////GOLD/////////////////////Start code to metal type:Author:SANT26AUG16******
    ////////////////GOLD/////////////////////Start code to metal type:Author:SANT01SEP16******
    ////////////////GOLD/////////////////////Start code to metal type:Author:SANT03SEP16******
    for (var cnt = 1; cnt <= noOfItemsCnt; cnt++) {
        var metal = document.getElementById('spOrDvMetalType' + cnt).value;
        if (document.getElementById('crystalCounter' + cnt).value == 'NaN' || document.getElementById('crystalCounter' + cnt).value == '') {
            document.getElementById('crystalCounter' + cnt).value = 0;
        }
        if (metal == 'Gold') {
            if (document.getElementById('spOrDvItemGdGSW' + cnt).value == 'NaN' || document.getElementById('spOrDvItemGdGSW' + cnt).value == '') {
                document.getElementById('spOrDvItemGdGSW' + cnt).value = 0;
            }
        }
        if (metal == 'Silver') {
            if (document.getElementById('spOrDvItemSrGSW' + cnt).value == 'NaN' || document.getElementById('spOrDvItemSrGSW' + cnt).value == '') {
                document.getElementById('spOrDvItemSrGSW' + cnt).value = 0;
            }
        }
        if (metal == 'Gold') {
            document.getElementById('spOrDvItemGdNTFNW' + cnt).value = (parseFloat(document.getElementById('spOrDvItemGdGSW' + cnt).value) - parseFloat(document.getElementById('crystalCounter' + cnt).value)).toFixed(3);
            var goldNetWt = document.getElementById('spOrDvItemGdNTFNW' + cnt).value;
        }

        if (metal == 'Silver') {
            document.getElementById('spOrDvItemSlNTFNW' + cnt).value = (parseFloat(document.getElementById('spOrDvItemSrGSW' + cnt).value) - parseFloat(document.getElementById('crystalCounter' + cnt).value)).toFixed(3);
            var silverNetWt = document.getElementById('spOrDvItemSlNTFNW' + cnt).value;
        }
        if (metal == 'Gold') {
            document.getElementById('spOrDvItemGdFNW' + cnt).value = ((document.getElementById('spOrDvItemGdNTFNW' + cnt).value * document.getElementById('spOrDvItemGdTunch' + cnt).value) / 100).toFixed(3);
            totalGdFnWt += parseFloat(document.getElementById('spOrDvItemGdFNW' + cnt).value);
            document.getElementById('spOrDvGdFNW').value = totalGdFnWt;
        }
        if (metal == 'Silver') {
            document.getElementById('spOrDvItemSrFNW' + cnt).value = ((document.getElementById('spOrDvItemSlNTFNW' + cnt).value * document.getElementById('spOrDvItemSrTunch' + cnt).value) / 100).toFixed(3);
            totalSrFnWt += parseFloat(document.getElementById('spOrDvItemSrFNW' + cnt).value);
            document.getElementById('spOrDvSrFNW').value = totalSrFnWt;
        }
    }
////////////////GOLD/////////////////////
    if (metal == 'Gold') {
        document.getElementById('spOrDvGdFFNW').value = ((goldNetWt * document.getElementById('spOrDvGdWSTG').value) / 100).toFixed(3);
        document.getElementById('spOrDvGdFFNWT').value = document.getElementById('spOrDvGdFNWT').value;
        document.getElementById('spOrDvTotFineGd').value = (parseFloat(document.getElementById('spOrDvGdFFNW').value) + parseFloat(document.getElementById('spOrDvGdFNW').value)).toFixed(3);
        document.getElementById('spOrDvTotFineGdTyp').value = document.getElementById('spOrDvGdFNWT').value;
        if (document.getElementById('spOrDvAdvanceGoldTyp').value != '') {
            document.getElementById('spOrDvAdvanceGold').value = convert(document.getElementById('spOrDvTotFineGdTyp').value, document.getElementById('spOrDvAdvanceGoldTyp').value, document.getElementById('spOrDvAdvanceGold').value);
        }
        if (document.getElementById('spOrDvAdvanceGold').value == '') {
            document.getElementById('spOrDvAdvanceGold').value = 0;
        }
        document.getElementById('spOrDvRemainGdFnWt').value = (parseFloat(document.getElementById('spOrDvTotFineGd').value) - parseFloat(document.getElementById('spOrDvAdvanceGold').value)).toFixed(3);
        document.getElementById('spOrDvRemainGdFnWtTyp').value = document.getElementById('spOrDvGdFNWT').value;
        document.getElementById('spOrDvRemainGdFnWtDisp').value = document.getElementById('spOrDvRemainGdFnWt').value;
        document.getElementById('spOrDvRemainGdFnWtDispTyp').value = document.getElementById('spOrDvRemainGdFnWtTyp').value;
    }
    else {
        ////////////////SILVER/////////////////////
        document.getElementById('spOrDvSrFFNW').value = ((silverNetWt * document.getElementById('spOrDvSrWSTG').value) / 100).toFixed(3);
        document.getElementById('spOrDvSrFFNWT').value = document.getElementById('spOrDvSrFNWT').value;
        if (document.getElementById('spOrDvSrFNW').value == '') {
            document.getElementById('spOrDvSrFNW').value = 0;
        }
        document.getElementById('spOrDvTotFineSr').value = (parseFloat(document.getElementById('spOrDvSrFFNW').value) + parseFloat(document.getElementById('spOrDvSrFNW').value)).toFixed(3);
        document.getElementById('spOrDvTotFineSrTyp').value = document.getElementById('spOrDvSrFNWT').value;
        if (document.getElementById('spOrDvAdvanceSilverTyp').value != '') {
            document.getElementById('spOrDvAdvanceSilver').value = convert(document.getElementById('spOrDvTotFineSrTyp').value, document.getElementById('spOrDvAdvanceSilverTyp').value, document.getElementById('spOrDvAdvanceSilver').value);
        }
        if (document.getElementById('spOrDvAdvanceSilver').value == '') {
            document.getElementById('spOrDvAdvanceSilver').value = 0;
        }
        if (document.getElementById('spOrDvTotFineSr').value == 'NaN' || document.getElementById('spOrDvTotFineSr').value == '') {
            document.getElementById('spOrDvTotFineSr').value = 0;
        }
        document.getElementById('spOrDvRemainSrFnWt').value = (parseFloat(document.getElementById('spOrDvTotFineSr').value) - parseFloat(document.getElementById('spOrDvAdvanceSilver').value)).toFixed(3);
        document.getElementById('spOrDvRemainSrFnWtTyp').value = document.getElementById('spOrDvSrFNWT').value;
        document.getElementById('spOrDvRemainSrFnWtDisp').value = document.getElementById('spOrDvRemainSrFnWt').value;
        document.getElementById('spOrDvRemainSrFnWtDispTyp').value = document.getElementById('spOrDvRemainSrFnWtTyp').value;
    }
////////////////METAL VAL/////////////////////End code to metal type:Author:SANT03SEP16******
////////////////METAL VAL/////////////////////End code to metal type:Author:SANT01SEP16******
////////////////METAL VAL/////////////////////End code to metal type:Author:SANT26AUG16******
////////////////METAL VAL/////////////////////End code to metal type:Author:SANT23AUG16******
////////////////METAL VAL/////////////////////End code to metal type:Author:SANT22AUG16******
////////////////METAL VAL/////////////////////End code to metal type:Author:SANT14AUG16******
////////////////METAL VAL/////////////////////End code to metal type:Author:SANT11AUG16******
////////////////METAL VAL/////////////////////End code to metal type:Author:SANT02AUG16******
    var gdWtType = document.getElementById('spOrDvRemainGdFnWtTyp').value;
    var srWtType = document.getElementById('spOrDvRemainSrFnWtTyp').value;
    if (gdWtType == 'KG') {
        document.getElementById('goldVal').value = ((document.getElementById('spOrDvRemainGdFnWt').value * document.getElementById('goldRate').value) * document.getElementById('gmWtInKg').value).toFixed(2);
    } else if (gdWtType == 'GM') {
        document.getElementById('goldVal').value = ((document.getElementById('spOrDvRemainGdFnWt').value * document.getElementById('goldRate').value) / document.getElementById('gmWtInGm').value).toFixed(2);
    } else if (gdWtType == 'MG') {
        document.getElementById('goldVal').value = ((document.getElementById('spOrDvRemainGdFnWt').value * document.getElementById('goldRate').value) / document.getElementById('gmWtInMg').value).toFixed(2);
    }
    if (srWtType == 'KG') {
        document.getElementById('silverVal').value = ((document.getElementById('spOrDvRemainSrFnWt').value * document.getElementById('silverRate').value) * document.getElementById('srGmWtInKg').value).toFixed(2);
    } else if (srWtType == 'GM') {
        document.getElementById('silverVal').value = ((document.getElementById('spOrDvRemainSrFnWt').value * document.getElementById('silverRate').value) / document.getElementById('srGmWtInGm').value).toFixed(2);
    } else if (srWtType == 'MG') {
        document.getElementById('silverVal').value = ((document.getElementById('spOrDvRemainSrFnWt').value * document.getElementById('silverRate').value) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
    }
    document.getElementById('totalMetalVal').value = (parseFloat(document.getElementById('goldVal').value) + parseFloat(document.getElementById('silverVal').value)).toFixed(2);
////////////////PAID VAL/////////////////////
    var gdWtPaidType = document.getElementById('spOrDvGoldPaidTyp').value;
    var srWtPaidType = document.getElementById('spOrDvSilverPaidTyp').value;
    if (gdWtPaidType == 'KG') {
        document.getElementById('goldPaidVal').value = ((document.getElementById('spOrDvGoldPaid').value * document.getElementById('goldPaidRate').value) * 100).toFixed(2);
    } else if (gdWtPaidType == 'GM') {
        document.getElementById('goldPaidVal').value = ((document.getElementById('spOrDvGoldPaid').value * document.getElementById('goldPaidRate').value) / 10).toFixed(2);
    } else if (gdWtPaidType == 'MG') {
        document.getElementById('goldPaidVal').value = ((document.getElementById('spOrDvGoldPaid').value * document.getElementById('goldPaidRate').value) / 10000).toFixed(2);
    }
    if (srWtPaidType == 'KG') {
        document.getElementById('silverPaidVal').value = ((document.getElementById('spOrDvSilverPaid').value * document.getElementById('silverRate').value)).toFixed(2);
    } else if (srWtPaidType == 'GM') {
        document.getElementById('silverPaidVal').value = ((document.getElementById('spOrDvSilverPaid').value * document.getElementById('silverRate').value) / 1000).toFixed(2);
    } else if (srWtPaidType == 'MG') {
        document.getElementById('silverPaidVal').value = ((document.getElementById('spOrDvSilverPaid').value * document.getElementById('silverRate').value) / (1000 * 1000)).toFixed(2);
    }
    document.getElementById('totalPaidVal').value = (parseFloat(document.getElementById('goldPaidVal').value) + parseFloat(document.getElementById('silverPaidVal').value)).toFixed(2);
    if (document.getElementById('totalPaidVal').value == '') {
        document.getElementById('totalPaidVal').value = 0;
    }
    var convPaidGdWt = 0;
    if (document.getElementById('spOrDvGoldPaid').value != '') {
        var convPaidGdWt = convert(gdWtType, gdWtPaidType, document.getElementById('spOrDvGoldPaid').value);
    }
    document.getElementById('spOrDvGdBal').value = (parseFloat(document.getElementById('spOrDvRemainGdFnWt').value) - parseFloat(convPaidGdWt)).toFixed(3);
    var convPaidSrWt = 0;
    if (document.getElementById('spOrDvSilverPaid').value != '') {
        convPaidSrWt = convert(srWtType, srWtPaidType, document.getElementById('spOrDvSilverPaid').value);
    }
    if (document.getElementById('spOrDvRemainSrFnWt').value == '' || document.getElementById('spOrDvRemainSrFnWt').value == 'NaN') {
        document.getElementById('spOrDvRemainSrFnWt').value = 0;
    }
    if (document.getElementById('totalMetalVal').value == '' || document.getElementById('totalMetalVal').value == 'NaN') {
        document.getElementById('totalMetalVal').value = 0;
    }
    document.getElementById('spOrDvSrBal').value = (parseFloat(document.getElementById('spOrDvRemainSrFnWt').value) - parseFloat(convPaidSrWt)).toFixed(3);
    document.getElementById('spOrDvCashBal').value = (parseFloat(document.getElementById('totalMetalVal').value) - parseFloat(document.getElementById('totalPaidVal').value)).toFixed(2);
    return false;
}
/***********Start Code To Change slPrPayTotAmtBalDisp valuation remove wholeAdjTotalAmt and change id wholeAdjTotalAmt to wholeAdjTotAmt @Author:ANUJA14MAY15***************/
/***********Start Code To Change slPrPayTotAmtBalDisp valuation @Author:ANUJA15MAY15***************/
/***********Start Code To Change slPrPayTotAmtBal valuation @Author:ANUJA19MAY15***************/
/********Start code to change tofixed(2) values and also remove if condition @Author:ANUJA21MAY15********* */
/***********Start code to use one global variable  finalBal @Author:ANUJA22MAY15******************/
/*****************Start code to add function @Author:SHRI06JUN15****************/
function showRateCutTotAmnt() {
//    document.getElementById('wholeAdjTotAmt').value = '';
    var gdWt = document.getElementById('wholeAdjGdPay').value;
    var gdWtType = document.getElementById('wholeAdjGdPayType').value;
    var goldRate = document.getElementById('wholeAdjGdRate').value;
    var gdWtBal = document.getElementById('metal1WtBal').value;
    var slrWtBal = document.getElementById('metal2WtBal').value;
    var prefix = document.getElementById('prefix').value;
//    alert('prefix==' + prefix);
    if (gdWtType == 'KG') {
        document.getElementById('wholeAdjGdVal').value = Math.round((gdWt * goldRate) * document.getElementById('gmWtInKg').value).toFixed(2);
    } else if (gdWtType == 'GM') {
        document.getElementById('wholeAdjGdVal').value = Math.round((gdWt * goldRate) / document.getElementById('gmWtInGm').value).toFixed(2);
    } else if (gdWtType == 'MG') {
        document.getElementById('wholeAdjGdVal').value = Math.round((gdWt * goldRate) / document.getElementById('gmWtInMg').value).toFixed(2);
    }

    var srWt = (document.getElementById('wholeAdSrPay').value);
    var srWtType = document.getElementById('wholeAdSrPayType').value;
    var silverRate = document.getElementById('wholeAdjSrRate').value;
//alert(srWt);
    if (srWtType == 'KG') {
        document.getElementById('wholeAdjSrVal').value = Math.round(srWt * silverRate * document.getElementById('srGmWtInKg').value).toFixed(2);
    } else if (srWtType == 'GM') {
        document.getElementById('wholeAdjSrVal').value = Math.round((srWt * silverRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
    } else if (srWtType == 'MG') {
        document.getElementById('wholeAdjSrVal').value = Math.round((srWt * silverRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
    }
    if (document.getElementById('wholeAdjSrVal').value == '')
    {
        document.getElementById('wholeAdjSrVal').value = '0.00';
    }
    if (document.getElementById('wholeAdjGdVal').value == '') {
        document.getElementById('wholeAdjGdVal').value = '0.00';
    }

    if (document.getElementById('wholeAdjTotAmt').value == '' || document.getElementById('wholeAdjTotAmt').value == 'NaN')
        document.getElementById('wholeAdjTotAmt').value = (parseFloat(document.getElementById('wholeAdjGdVal').value) + parseFloat(document.getElementById('wholeAdjSrVal').value)).toFixed(2);
    if (document.getElementById('wholeAdjTotAmt').value == '' || document.getElementById('wholeAdjTotAmt').value == 'NaN') {
        document.getElementById('wholeAdjTotAmt').value = '0.00';
    }
//    alert(finalBal);
//alert(document.getElementById('slPrWholeAdvCash').value + ' ' + cashPaid + ' ' + discount + '' + document.getElementById('wholeAdjTotAmt').value);
    var advCash = document.getElementById('slPrWholeAdvCash').value;
//    alert(advCash);
    if (advCash > 0)
        document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat(parseFloat(parseFloat(document.getElementById('wholeAdjTotAmt').value) + parseFloat(document.getElementById('wholeAdjOthrChgs').value) + parseFloat(advCash)) - parseFloat(cashPaid) - parseFloat(discount)).toFixed(2);
    else
        document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat(parseFloat(parseFloat(document.getElementById('wholeAdjTotAmt').value) + parseFloat(document.getElementById('wholeAdjOthrChgs').value) - parseFloat(Math.abs(advCash))) - parseFloat(cashPaid) - parseFloat(discount)).toFixed(2);

//    document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat(parseFloat(parseFloat(document.getElementById('wholeAdjTotAmt').value) - parseFloat(document.getElementById('slPrWholeAdvCash').value)) - parseFloat(cashPaid) - parseFloat(discount)).toFixed(2);
    document.getElementById('slPrPayTotAmtBalDisp').value = parseFloat(document.getElementById(prefix + 'PayTotAmtBal').value).toFixed(2);
//    document.getElementById('wholeAdjTotAmt').value = parseFloat(document.getElementById('wholeAdjGdVal').value) + parseFloat(document.getElementById('wholeAdjSrVal').value);
//    alert(document.getElementById('wholeAdjTotAmt').value);
}
/*****************End code to add function @Author:SHRI06JUN15****************/
/********Start code to change some values  and also remove if condition @Author:ANUJA13JUN15********* */
var cashPaid;
var discount;
function wholeAdjCalc() {
    var gdWt = document.getElementById('wholeAdjGdPay').value;
    var gdWtType = document.getElementById('wholeAdjGdPayType').value;
    var goldRate = document.getElementById('wholeAdjGdRate').value;
    var gdWtBal = document.getElementById('metal1WtBal').value;
    var slrWtBal = document.getElementById('metal2WtBal').value;
    var prefix = document.getElementById('prefix').value;

    if (gdWtType == 'KG') {
        document.getElementById('wholeAdjGdVal').value = Math.round((gdWt * goldRate) * document.getElementById('gmWtInKg').value).toFixed(2);
    } else if (gdWtType == 'GM') {
        document.getElementById('wholeAdjGdVal').value = Math.round((gdWt * goldRate) / document.getElementById('gmWtInGm').value).toFixed(2);
    } else if (gdWtType == 'MG') {
        document.getElementById('wholeAdjGdVal').value = Math.round((gdWt * goldRate) / document.getElementById('gmWtInMg').value).toFixed(2);
    }

    var srWt = parseFloat(document.getElementById('wholeAdSrPay').value);//parseFloat added @OMMODTAG SHRI_23NOV15
    var srWtType = document.getElementById('wholeAdSrPayType').value;
    var silverRate = document.getElementById('wholeAdjSrRate').value;

//    alert(srWt + ' ' + srWtType + ' ' + silverRate);
    if (srWtType == 'KG') {
        document.getElementById('wholeAdjSrVal').value = Math.round(srWt * silverRate * document.getElementById('srGmWtInKg').value).toFixed(2);
    } else if (srWtType == 'GM') {
        document.getElementById('wholeAdjSrVal').value = Math.round((srWt * silverRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
    } else if (srWtType == 'MG') {
        document.getElementById('wholeAdjSrVal').value = Math.round((srWt * silverRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
    }
//    alert(document.getElementById('wholeAdjSrVal').value);

    if (document.getElementById('wholeAdjTotAmt').value == '' || document.getElementById('wholeAdjTotAmt').value == 'NaN')
        document.getElementById('wholeAdjTotAmt').value = (parseFloat(document.getElementById('wholeAdjGdVal').value) + parseFloat(document.getElementById('wholeAdjSrVal').value)).toFixed(2);
    if (document.getElementById('wholeAdjTotAmt').value == '' || document.getElementById('wholeAdjTotAmt').value == 'NaN') {
        document.getElementById('wholeAdjTotAmt').value = '0.00';
    }
    if (document.getElementById('slPrWholeAdvCash').value == '') {
        document.getElementById('slPrWholeAdvCash').value = '0.00';
    }
    document.getElementById('wholeAdjTotAmt').value = (parseFloat(document.getElementById('wholeAdjGdVal').value) + parseFloat(document.getElementById('wholeAdjSrVal').value)).toFixed(2);
    if (document.getElementById('wholeAdjTotAmt').value == '' || document.getElementById('wholeAdjTotAmt').value == 'NaN') {
        document.getElementById('wholeAdjTotAmt').value = '0.00';
    }
//    alert(document.getElementById('slPrWholeAdvCash').value);
    document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat(document.getElementById('wholeAdjTotAmt').value) - parseFloat(document.getElementById('slPrWholeAdvCash').value).toFixed(2);
    cashPaid = document.getElementById(prefix + 'PayCashAmtRec').value;
    discount = document.getElementById(prefix + 'PayDiscount').value;

    if (cashPaid == '' || cashPaid == null) {
        cashPaid = '0';
    }

    if (discount == '' || discount == null) {
        discount = '0';
    }
//    if (metalCountBal == '' && (document.getElementById('payPanelBAL').value == 'SellPayUp' || document.getElementById('payPanelBAL').value == 'StockPayUp' )) {
//        document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat(parseFloat(parseFloat(document.getElementById('wholeAdjTotAmt').value) - parseFloat(document.getElementById('slPrWholeAdvCash').value)) - parseFloat(cashPaid) - parseFloat(discount)).toFixed(2);
//    } else {
//        alert(document.getElementById('slPrWholeAdvCash').value + ' ' + cashPaid + ' ' + discount + '' + document.getElementById('wholeAdjTotAmt').value);
    var advCash = document.getElementById('slPrWholeAdvCash').value;
//    alert(advCash);
    if (advCash > 0)
        document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat(parseFloat(parseFloat(document.getElementById('wholeAdjTotAmt').value) + parseFloat(document.getElementById('wholeAdjOthrChgs').value) + parseFloat(advCash)) - parseFloat(cashPaid) - parseFloat(discount)).toFixed(2);
    else
        document.getElementById(prefix + 'PayTotAmtBal').value = parseFloat(parseFloat(parseFloat(document.getElementById('wholeAdjTotAmt').value) + parseFloat(document.getElementById('wholeAdjOthrChgs').value) - parseFloat(Math.abs(advCash))) - parseFloat(cashPaid) - parseFloat(discount)).toFixed(2);
//  alert(document.getElementById('slPrPayTotAmtBal').value);totalFinalBalance
//    }
//alert(document.getElementById('wholeAdjTotAmt').value);
    document.getElementById('slPrPayTotAmtBalDisp').value = document.getElementById(prefix + 'PayTotAmtBal').value;
//    alert(document.getElementById('slPrPayTotAmtBalDisp').value);
    if (document.getElementById('wholeAdjGdPay').value == 'NaN' || document.getElementById('wholeAdjGdPay').value == '') {
        document.getElementById('wholeAdjGdPay').value = '0.00';
    }
    if (gdWtBal == 'NaN' || gdWtBal == '') {
        gdWtBal = '0.000';
    }
    if (slrWtBal == 'NaN' || slrWtBal == '') {
        slrWtBal = '0.000';
//        alert(slrWtBal);
    }
//alert('slrWtBal'+slrWtBal);

    if (document.getElementById('wholeAdjGdPay').value != gdWtBal) {
        document.getElementById('metalGoldWtBal').value = Math.abs(parseFloat(gdWtBal) - parseFloat(document.getElementById('wholeAdjGdPay').value)).toFixed(3);
        document.getElementById('metalGoldWtBalType').value = document.getElementById(prefix + 'PayMetal1WtBalType').value;
    }
//    alert(document.getElementById('wholeAdSrPay').value);
    var silverWtArr = slrWtBal.split(" ");
    var silverWt = silverWtArr[0];
    if (document.getElementById('wholeAdSrPay').value != slrWtBal) {
//        alert('silverWt='+silverWt);
        document.getElementById('metalSilverWtBal').value = parseFloat(Math.abs(silverWt) - Math.abs(parseFloat(document.getElementById('wholeAdSrPay').value))).toFixed(3);
        document.getElementById('metalSilverWtBalType').value = document.getElementById(prefix + 'PayMetal2WtBalType').value;
    }
//    alert(document.getElementById('metalSilverWtBal').value);
    document.getElementById('metal11WtBal').value = document.getElementById('metalGoldWtBal').value;
    document.getElementById('metal12WtBal').value = document.getElementById('metalSilverWtBal').value;
//    alert(document.getElementById('metal11WtBal').value);

    if (document.getElementById('metal1WtFinalBal').value == 'NaN' || document.getElementById('metal1WtFinalBal').value == '') {
        document.getElementById('metal1WtFinalBal').value == '0.00';
    } else {
//        alert(document.getElementById('metal1WtTotal').value);
//        alert(document.getElementById('metal11WtRc').value);
        document.getElementById('metal1WtFinalBal').value = Math.abs(parseFloat(document.getElementById('metal1WtTotal').value) - parseFloat(document.getElementById('metal11WtRc').value)).toFixed(3);
//        alert(document.getElementById('metal1WtFinalBal').value);
    }
    if (document.getElementById('metal2WtFinalBal').value == 'NaN' || document.getElementById('metal2WtFinalBal').value == '') {
        document.getElementById('metal2WtFinalBal').value == '0.00';
    } else {
        document.getElementById('metal2WtFinalBal').value = Math.abs(parseFloat(document.getElementById('metal2WtTotal').value) - parseFloat(document.getElementById('metal12WtRc').value)).toFixed(3);
    }
//    alert(document.getElementById('metal1WtFinalBal').value);
    document.getElementById('metal11WtBal').value = document.getElementById('metal11WtBal').value + '' + document.getElementById('wholeAdjGdPayType').value;
    document.getElementById('metal12WtBal').value = document.getElementById('metal12WtBal').value + '' + document.getElementById('wholeAdSrPayType').value;
//        alert(document.getElementById('metal11WtBal').value);
//alert(document.getElementById('metal12WtBal').value);
}
/********End code to change some values  and also remove if condition @Author:ANUJA13JUN15********* */
/***********End code to add one global variable  finalBal @Author:ANUJA22MAY15******************/
/********End code to change tofixed(2) values @Author:ANUJA21MAY15********* */
/***********End Code To Change slPrPayTotAmtBal valuation @Author:ANUJA19MAY15***************/
/***********Start Code To Change slPrPayTotAmtBalDisp valuation remove wholeAdjTotalAmt and change id wholeAdjTotalAmt to wholeAdjTotAmt @Author:ANUJA14MAY15***************/
/***********Start Code To add metal1WtBal, metal2WtBal,metalGoldWtBal,metalSilverWtBal @Author:ANUJA20APR15***************/
/***********End Code To add metal1WtFinalBal  metal2WtFinalBal @Author:ANUJA05MAY15***************/
/***********End Code To add Math.abs @Author:ANUJA06MAY15***************/