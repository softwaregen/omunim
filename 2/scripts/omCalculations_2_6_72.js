/* 
 * *************************************************************************************************************************************
 * @tutorial: UNIVERSAL JAVASCRIPT CALCULATIONS FILE @PRIYANKA-27APR18
 * *************************************************************************************************************************************
 *
 * Created on on 27 April, 2018 16:01:00 PM
 * 
 * @FileName: omCalculations_2_6_72.js
 * @Author: SoftwareGen Developement Team
 * @AuthorEmailId:  info@softwaregen.com
 * @ProjectName: omunim
 * @version 2.6.72
 * @Copyright (c) 2018 www.softwaregen.com
 * @All rights reserved
 * Copyright 2018 SoftwareGen, Inc
 *
 * @ModificaionHistory
 *  MODIFICATION DATE:
 *  AUTHOR: @PRIYANKA
 *  REASON: UNIVERSAL JAVASCRIPT CALCULATIONS FILE
 *  
 */
// *************************************************************************************************************************************
// START CODE TO ADD FUNCTION to add new division
// *************************************************************************************************************************************
var numberOfDiv = 0;
function createChildDiv(parentDiv, prodCount) {
    numberOfDiv = prodCount;
    with (document) {
        var newDiv = createElement('div');
        with (newDiv) {
            id = parentDiv + numberOfDiv;
            appendChild(createTextNode('Loading...'));
        }
        getElementById(parentDiv).appendChild(newDiv);
    }

}
// *************************************************************************************************************************************
// END CODE TO ADD FUNCTION to add new division
// *************************************************************************************************************************************
// 
// *************************************************************************************************************************************
// START CODE TO ADD FUNCTION addFormFunc_2_6_72() FOR MULTIPLE FORM DIV ON SAME PANEL @PRIYANKA-27APR18
// *************************************************************************************************************************************
function addFormFunc_2_6_72(prodCount, div, arrStockFormFieldSequence, arrStockFormFieldHorizontal, arrStockFormFieldMandatory, arrStockFormFieldValidationMessage, arrStockFormFieldTitle, arrStockFormFieldSize, arrStockFormFieldYesNoKeys, arrStockFormFieldYesNoValues, stockFormFieldSkipArray, panelName) {
    createChildDiv(div, prodCount);
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            if (prodCount == '') {
                document.getElementById(div).innerHTML = xmlhttp.responseText;
            } else {
                document.getElementById('sttr_noofprod').value = prodCount;
                document.getElementById(div + prodCount).innerHTML = xmlhttp.responseText;
            }
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omStockTransFormSubDiv.php?prodCount=" + prodCount
            + "&arrStockFormFieldSequence=" + arrStockFormFieldSequence
            + "&arrStockFormFieldHorizontal=" + arrStockFormFieldHorizontal
            + "&arrStockFormFieldMandatory=" + arrStockFormFieldMandatory
            + "&arrStockFormFieldValidationMessage=" + arrStockFormFieldValidationMessage
            + "&arrStockFormFieldTitle=" + arrStockFormFieldTitle
            + "&arrStockFormFieldSize=" + arrStockFormFieldSize
            + "&arrStockFormFieldYesNoKeys=" + arrStockFormFieldYesNoKeys
            + "&arrStockFormFieldYesNoValues=" + arrStockFormFieldYesNoValues
            + "&stockFormFieldSkipArray=" + stockFormFieldSkipArray
            + "&panelName=" + panelName, true);
    //
    xmlhttp.send();
}
// *************************************************************************************************************************************
// END OF CODE TO ADD FUNCTION addFormFunc_2_6_72() FOR MULTIPLE FORM DIV ON SAME PANEL @PRIYANKA-27APR18
// *************************************************************************************************************************************

// *************************************************************************************************************************************
// START CODE FOR CLOSE MULTIPLE FORM DIV @PRIYANKA-09MAY18
// *************************************************************************************************************************************
function closeFormFunc_2_6_72(prodCount, div, arrStockFormFieldSequence, arrStockFormFieldHorizontal, arrStockFormFieldMandatory, arrStockFormFieldValidationMessage, arrStockFormFieldTitle, arrStockFormFieldSize, arrStockFormFieldYesNoKeys, arrStockFormFieldYesNoValues, panelName) {

    if (prodCount == 0) {
        prodCount = '';
    }

    var childDivName = document.getElementById(div);
    //alert('div == ' + div);
    //alert('prodCount == ' + prodCount);

    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            //if (prodCount == '' || prodCount == 0 || prodCount == null) {
            //    document.getElementById(div).innerHTML = xmlhttp.responseText;
            //} else {
            //document.getElementById('sttr_noofprod').value = prodCount;

            //
            //document.getElementById('sttr_noofprod').value = prodCount - 1;
            autoLessWeightFunction(prodCount, 'addFromGrossWt');
            document.getElementById(div).removeChild(document.getElementById(div + prodCount));

            //stockTransCalcFunc(prodCount);

            //childDivName.removeChild(childDivName.childNodes[0]);
            //document.getElementById(div + prodCount).innerHTML = "";
            //}
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omStockTransFormSubDiv.php?prodCount=" + prodCount
            + "&arrStockFormFieldSequence=" + arrStockFormFieldSequence
            + "&arrStockFormFieldHorizontal=" + arrStockFormFieldHorizontal
            + "&arrStockFormFieldMandatory=" + arrStockFormFieldMandatory
            + "&arrStockFormFieldValidationMessage=" + arrStockFormFieldValidationMessage
            + "&arrStockFormFieldTitle=" + arrStockFormFieldTitle
            + "&arrStockFormFieldSize=" + arrStockFormFieldSize
            + "&arrStockFormFieldYesNoKeys=" + arrStockFormFieldYesNoKeys
            + "&arrStockFormFieldYesNoValues=" + arrStockFormFieldYesNoValues
            + "&panelName=" + panelName, true);
    //
    xmlhttp.send();
}
//
// *************************************************************************************************************************************
// END CODE FOR CLOSE MULTIPLE FORM DIV @PRIYANKA-09MAY18
// *************************************************************************************************************************************

// *************************************************************************************************************************************
// START CODE TO ADD FUNCTION FOR TAX CALCULATIONS @PRIYANKA-02APR18
// *************************************************************************************************************************************
function stockTransCalcFunc(prodCount, process) {

    setTimeout(function () {

        // PRODUCT TYPE
        if (typeof (document.getElementById('sttr_product_type')) != 'undefined' &&
                   (document.getElementById('sttr_product_type').value != null)) {
            // PRODUCT TYPE
            var prodType = document.getElementById('sttr_product_type').value;
        }

        // *************************************************************************************************************************************
        // START CODE FOR PURCHASE RATE & PRODUCT SELL RATE
        // *************************************************************************************************************************************

        // PRODUCT PURCHASE RATE
        if (typeof (document.getElementById('sttr_product_purchase_rate' + prodCount)) != 'undefined' &&
                   (document.getElementById('sttr_product_purchase_rate' + prodCount) != null)) {
            // PRODUCT PURCHASE RATE
            var prodRate = parseFloat(document.getElementById('sttr_product_purchase_rate' + prodCount).value);
        }

        // PRODUCT PURCHASE RATE & PRODUCT SELL RATE
        if (typeof (document.getElementById('sttr_product_purchase_rate' + prodCount)) != 'undefined' &&
                   (document.getElementById('sttr_product_purchase_rate' + prodCount) != null) &&
            typeof (document.getElementById('sttr_product_sell_rate' + prodCount)) != 'undefined' &&
                   (document.getElementById('sttr_product_sell_rate' + prodCount) != null)) {
            // PRODUCT SELL RATE
            if ((document.getElementById('sttr_product_sell_rate' + prodCount).value == '') &&
                 document.getElementById('sttr_product_purchase_rate' + prodCount).value != '') {
                 document.getElementById('sttr_product_sell_rate' + prodCount).value = parseFloat(document.getElementById('sttr_product_purchase_rate' + prodCount).value);
            }
        }

        // PRODUCT SELL RATE
        if (typeof (document.getElementById('sttr_product_sell_rate' + prodCount)) != 'undefined' &&
                   (document.getElementById('sttr_product_sell_rate' + prodCount) != null)) {
            // PRODUCT SELL RATE
            if (document.getElementById('sttr_product_sell_rate' + prodCount).value == 'NaN') {
                document.getElementById('sttr_product_sell_rate' + prodCount).value = 0;
            }
        }

        // *************************************************************************************************************************************
        // END CODE FOR PURCHASE RATE & PRODUCT SELL RATE
        // *************************************************************************************************************************************

        // PRODUCT QUANTITY
        if (typeof (document.getElementById('sttr_quantity' + prodCount)) != 'undefined' &&
                   (document.getElementById('sttr_quantity' + prodCount) != null)) {
            // PRODUCT QUANTITY
            var prodQTY = (document.getElementById('sttr_quantity' + prodCount).value);
        }

        // *************************************************************************************************************************************
        // START CODE FOR PKT WT, NT WT CALCULATIONS
        // *************************************************************************************************************************************

        // PRODUCT PKT WEIGHT
        if (typeof (document.getElementById('sttr_pkt_weight' + prodCount)) != 'undefined' &&
                   (document.getElementById('sttr_pkt_weight' + prodCount) != null)) {
            // PRODUCT PKT WEIGHT
            if (document.getElementById('sttr_pkt_weight' + prodCount).value == '' ||
                document.getElementById('sttr_pkt_weight' + prodCount).value == 'NaN') {
                document.getElementById('sttr_pkt_weight' + prodCount).value = 0;
            }
        }

        // PRODUCT PKT WEIGHT TYPE
        if (typeof (document.getElementById('sttr_pkt_weight_type' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_pkt_weight_type' + prodCount) != null) &&
            typeof (document.getElementById('sttr_gs_weight_type' + prodCount)) != 'undefined' &&
                   (document.getElementById('sttr_gs_weight_type' + prodCount) != null)) {
            // PRODUCT PKT WEIGHT TYPE
            document.getElementById('sttr_pkt_weight_type' + prodCount).value = document.getElementById('sttr_gs_weight_type' + prodCount).value;
        }

        // PRODUCT NET WEIGHT
        if (typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_nt_weight' + prodCount) != null)  &&
            typeof (document.getElementById('sttr_gs_weight' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_gs_weight' + prodCount) != null)  &&
            typeof (document.getElementById('sttr_pkt_weight' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_pkt_weight' + prodCount) != null)) {
            // CALCULATE PRODUCT NET WEIGHT
            document.getElementById('sttr_nt_weight' + prodCount).value = (parseFloat(document.getElementById('sttr_gs_weight' + prodCount).value) - parseFloat(document.getElementById('sttr_pkt_weight' + prodCount).value)).toFixed(3);
        }

        // PRODUCT NET WEIGHT
        if (typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_nt_weight' + prodCount) != null)) {
            // PRODUCT NET WEIGHT
            if (document.getElementById('sttr_nt_weight' + prodCount).value == '' ||
                document.getElementById('sttr_nt_weight' + prodCount).value == 'NaN') {
                document.getElementById('sttr_nt_weight' + prodCount).value = 0;
            }
        }

        // PRODUCT NET WEIGHT TYPE
        if (typeof (document.getElementById('sttr_nt_weight_type' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_nt_weight_type' + prodCount) != null) &&
            typeof (document.getElementById('sttr_gs_weight_type' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_gs_weight_type' + prodCount) != null)) {
            // PRODUCT NET WEIGHT TYPE
            document.getElementById('sttr_nt_weight_type' + prodCount).value = document.getElementById('sttr_gs_weight_type' + prodCount).value;
        }
        // *************************************************************************************************************************************
        // END CODE FOR PKT WT, NT WT CALCULATIONS
        // *************************************************************************************************************************************

        // *************************************************************************************************************************************
        // START CODE FOR PURITY, FINE WEIGHT, FINAL FINE WEIGHT & PURITY CALCULATIONS
        // *************************************************************************************************************************************

        if (typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_nt_weight' + prodCount) != null) &&
            typeof (document.getElementById('sttr_purity' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_purity' + prodCount) != null)) {

            if (document.getElementById('sttr_nt_weight' + prodCount).value != '' &&
                document.getElementById('sttr_purity' + prodCount).value != '') {
                // PRODUCT FINAL FINE WEIGHT BY
                if (typeof (document.getElementById('sttr_final_val_by' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_final_val_by' + prodCount) != null)) {
                    // PRODUCT FINAL FINE WEIGHT BY NET WEIGHT
                    if (document.getElementById('sttr_final_val_by' + prodCount).value == 'byNetWt') {
                        // NET WEIGHT & NET WEIGHT TYPE
                        if (typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_nt_weight' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_nt_weight_type' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_nt_weight_type' + prodCount) != null)) {
                            // NET WEIGHT & NET WEIGHT TYPE
                            var prodWt = document.getElementById('sttr_nt_weight' + prodCount).value;
                            var prodWtType = document.getElementById('sttr_nt_weight_type' + prodCount).value;
                        }

                        // CALCULATE FINE WEIGHT
                        if (typeof (document.getElementById('sttr_fine_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_fine_weight' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_purity' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_purity' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_nt_weight' + prodCount) != null)) {
                            // CALCULATE FINE WEIGHT
                            document.getElementById('sttr_fine_weight' + prodCount).value = ((document.getElementById('sttr_purity' + prodCount).value * document.getElementById('sttr_nt_weight' + prodCount).value) / 100).toFixed(3);
                        }

                        // CALCULATE FINAL FINE WEIGHT
                        if (typeof (document.getElementById('sttr_final_fine_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_final_fine_weight' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_purity' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_purity' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_nt_weight' + prodCount) != null)) {
                            // CALCULATE FINAL FINE WEIGHT
                            document.getElementById('sttr_final_fine_weight' + prodCount).value = ((document.getElementById('sttr_purity' + prodCount).value * document.getElementById('sttr_nt_weight' + prodCount).value) / 100).toFixed(3);
                        }

                        // PRODUCT FINAL FINE WEIGHT BY GROSS WEIGHT
                    } else if (document.getElementById('sttr_final_val_by' + prodCount).value == 'byGrossWt') {
                        // GROSS WEIGHT & GROSS WEIGHT TYPE
                        if (typeof (document.getElementById('sttr_gs_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_gs_weight' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_gs_weight_type' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_gs_weight_type' + prodCount) != null)) {
                            // GROSS WEIGHT & GROSS WEIGHT TYPE
                            var prodWt = document.getElementById('sttr_gs_weight' + prodCount).value;
                            var prodWtType = document.getElementById('sttr_gs_weight_type' + prodCount).value;
                        }

                        // CALCULATE FINE WEIGHT
                        if (typeof (document.getElementById('sttr_fine_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_fine_weight' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_purity' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_purity' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_gs_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_gs_weight' + prodCount) != null)) {
                            // CALCULATE FINE WEIGHT
                            document.getElementById('sttr_fine_weight' + prodCount).value = ((document.getElementById('sttr_purity' + prodCount).value * document.getElementById('sttr_gs_weight' + prodCount).value) / 100).toFixed(3);
                        }

                        // CALCULATE FINAL FINE WEIGHT
                        if (typeof (document.getElementById('sttr_final_fine_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_final_fine_weight' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_purity' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_purity' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_gs_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_gs_weight' + prodCount) != null)) {
                            // CALCULATE FINAL FINE WEIGHT
                            document.getElementById('sttr_final_fine_weight' + prodCount).value = ((document.getElementById('sttr_purity' + prodCount).value * document.getElementById('sttr_gs_weight' + prodCount).value) / 100).toFixed(3);
                        }
                        // PRODUCT DEFAULT FINAL FINE WEIGHT CALCULATION BY NET WEIGHT

                    } else {

                        if (typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_nt_weight' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_nt_weight_type' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_nt_weight_type' + prodCount) != null)) {
                            // NET WEIGHT & NET WEIGHT TYPE
                            var prodWt = document.getElementById('sttr_nt_weight' + prodCount).value;
                            var prodWtType = document.getElementById('sttr_nt_weight_type' + prodCount).value;
                        }

                        // CALCULATE FINE WEIGHT
                        if (typeof (document.getElementById('sttr_fine_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_fine_weight' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_purity' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_purity' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_nt_weight' + prodCount) != null)) {
                            // CALCULATE FINE WEIGHT
                            document.getElementById('sttr_fine_weight' + prodCount).value = ((document.getElementById('sttr_purity' + prodCount).value * document.getElementById('sttr_nt_weight' + prodCount).value) / 100).toFixed(3);
                        }

                        // CALCULATE FINAL FINE WEIGHT
                        if (typeof (document.getElementById('sttr_final_fine_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_final_fine_weight' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_purity' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_purity' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_nt_weight' + prodCount) != null)) {
                            // CALCULATE FINAL FINE WEIGHT
                            document.getElementById('sttr_final_fine_weight' + prodCount).value = ((document.getElementById('sttr_purity' + prodCount).value * document.getElementById('sttr_nt_weight' + prodCount).value) / 100).toFixed(3);
                        }
                    }
                }

                // PRODUCT WASTAGE
                if (typeof (document.getElementById('sttr_wastage' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_wastage' + prodCount) != null)) {
                    // PRODUCT WASTAGE
                    if ((document.getElementById('sttr_wastage' + prodCount).value) != '') {
                        // PRODUCT FINAL PURITY 
                        if (typeof (document.getElementById('sttr_final_purity' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_final_purity' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_purity' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_purity' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_wastage' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_wastage' + prodCount) != null)) {
                            // PRODUCT FINAL PURITY 
                            document.getElementById('sttr_final_purity' + prodCount).value = (parseFloat(document.getElementById('sttr_purity' + prodCount).value) + parseFloat(document.getElementById('sttr_wastage' + prodCount).value));
                        }

                        // PRODUCT FINAL FINE WEIGHT
                        if (typeof (document.getElementById('sttr_final_fine_weight' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_final_fine_weight' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_purity' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_purity' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_wastage' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_wastage' + prodCount) != null)) {
                            // PRODUCT FINAL FINE WEIGHT
                            document.getElementById('sttr_final_fine_weight' + prodCount).value = (((parseFloat(document.getElementById('sttr_wastage' + prodCount).value) + parseFloat(document.getElementById('sttr_purity' + prodCount).value)) * prodWt) / 100).toFixed(3);
                        }

                    } else {
                        // PRODUCT FINAL PURITY
                        if (typeof (document.getElementById('sttr_final_purity' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_final_purity' + prodCount) != null) &&
                            typeof (document.getElementById('sttr_purity' + prodCount)) != 'undefined' &&                
                                   (document.getElementById('sttr_purity' + prodCount) != null)) {
                            // PRODUCT FINAL PURITY
                            if (document.getElementById('sttr_purity' + prodCount).value != '') {
                                document.getElementById('sttr_final_purity' + prodCount).value = parseFloat(document.getElementById('sttr_purity' + prodCount).value);
                            }
                        }
                    }
                }
            }
        }

        // PRODUCT FINE WEIGHT
        if (typeof (document.getElementById('sttr_fine_weight' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_fine_weight' + prodCount) != null)) {
            // PRODUCT FINE WEIGHT
            if (document.getElementById('sttr_fine_weight' + prodCount).value == '' ||
                document.getElementById('sttr_fine_weight' + prodCount).value == 'NaN') {
                document.getElementById('sttr_fine_weight' + prodCount).value = 0;
            }
        }

        // PRODUCT FINAL FINE WEIGHT
        if (typeof (document.getElementById('sttr_final_fine_weight' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_final_fine_weight' + prodCount) != null)) {
            // PRODUCT FINAL FINE WEIGHT
            if (document.getElementById('sttr_final_fine_weight' + prodCount).value == 'NaN') {
                document.getElementById('sttr_final_fine_weight' + prodCount).value = 0;
            }
        }

        // *************************************************************************************************************************************
        // END CODE FOR PURITY, FINE WEIGHT, FINAL FINE WEIGHT & PURITY CALCULATIONS
        // *************************************************************************************************************************************

        // *************************************************************************************************************************************
        // START CODE FOR LAB CHARGES, LAB CHARGES TYPE & LAB CHARGES CALCULATIONS
        // *************************************************************************************************************************************

        // PRODUCT LAB CHARGES
        if (typeof (document.getElementById('sttr_lab_charges' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_lab_charges' + prodCount) != null)) {
            // PRODUCT LAB CHARGES
            var prodLabCharges = document.getElementById('sttr_lab_charges' + prodCount).value;
        }

        // PRODUCT LAB CHARGES TYPE
        if (typeof (document.getElementById('sttr_lab_charges_type' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_lab_charges_type' + prodCount) != null)) {
            // PRODUCT LAB CHARGES TYPE
            var prodLabChargesType = document.getElementById('sttr_lab_charges_type' + prodCount).value;
        }

        // PRODUCT TOTAL LAB CHARGES
        var prodTotalLabCharges = 0;

        if (typeof (document.getElementById('sttr_other_charges_by' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_other_charges_by' + prodCount) != null) &&
            typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_nt_weight' + prodCount) != null) &&
            typeof (document.getElementById('sttr_gs_weight' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_gs_weight' + prodCount) != null) &&
            typeof (document.getElementById('sttr_final_fine_weight' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_final_fine_weight' + prodCount) != null)) {

            // PRODUCT LAB CHARGES BY @PRIYANKA-07-05-18
            if (document.getElementById('sttr_other_charges_by' + prodCount).value == 'lbByNetWt') {
                var prodLabChargesBy = parseFloat(document.getElementById('sttr_nt_weight' + prodCount).value);
            } else if (document.getElementById('sttr_other_charges_by' + prodCount).value == 'lbByGrossWt') {
                var prodLabChargesBy = parseFloat(document.getElementById('sttr_gs_weight' + prodCount).value);
            } else if (document.getElementById('sttr_other_charges_by' + prodCount).value == 'lbByFFineWt') {
                var prodLabChargesBy = parseFloat(document.getElementById('sttr_final_fine_weight' + prodCount).value);
            } else {
                var prodLabChargesBy = parseFloat(document.getElementById('sttr_final_fine_weight' + prodCount).value);
            }
        }

        // PRODUCT FINAL FINE WEIGHT
        if (typeof (document.getElementById('sttr_final_fine_weight' + prodCount)) != 'undefined' &&                
                   (document.getElementById('sttr_final_fine_weight' + prodCount) != null)) {
            // PRODUCT FINAL FINE WEIGHT
            var prodFinalFineWeight = parseFloat(document.getElementById('sttr_final_fine_weight' + prodCount).value);
        }

        // PRODUCT LAB CHARGES
        if (typeof (prodLabCharges) != 'undefined' && prodLabCharges != null) {

            if (prodLabCharges != '') {

                // PRODUCT LAB CHARGES TYPE
                if (prodLabChargesType == 'KG') {
                    // PRODUCT WEIGHT TYPE
                    if (prodWtType == 'KG')
                        prodTotalLabCharges = prodLabCharges * prodLabChargesBy; // (PRODUCT LAB CHARGES * PRODUCT LAB CHARGES BY)
                    else if (prodWtType == 'GM')
                        prodTotalLabCharges = (prodLabCharges / 1000) * prodLabChargesBy;
                    else
                        prodTotalLabCharges = (prodLabCharges / (1000 * 1000)) * prodLabChargesBy;

                    // PRODUCT LAB CHARGES TYPE
                } else if (prodLabChargesType == 'GM') {
                    // PRODUCT WEIGHT TYPE
                    if (prodWtType == 'KG')
                        prodTotalLabCharges = prodLabCharges * 1000 * prodLabChargesBy; // (PRODUCT LAB CHARGES * PRODUCT LAB CHARGES BY)
                    else if (prodWtType == 'GM')
                        prodTotalLabCharges = prodLabCharges * prodLabChargesBy;
                    else
                        prodTotalLabCharges = (prodLabCharges / 1000) * prodLabChargesBy;

                    // PRODUCT LAB CHARGES TYPE
                } else if (prodLabChargesType == 'MG') {
                    // PRODUCT WEIGHT TYPE
                    if (prodWtType == 'KG')
                        prodTotalLabCharges = prodLabCharges * 1000 * 1000 * prodLabChargesBy; // (PRODUCT LAB CHARGES * PRODUCT LAB CHARGES BY)
                    else if (prodWtType == 'GM')
                        prodTotalLabCharges = prodLabCharges * 1000 * prodLabChargesBy;
                    else
                        prodTotalLabCharges = prodLabCharges * prodLabChargesBy;

                    // PRODUCT LAB CHARGES TYPE
                } else if (prodLabChargesType == 'PP') {
                    // PRODUCT WEIGHT TYPE
                    prodTotalLabCharges = prodLabCharges * prodQTY;

                }

                // PRODUCT TOTAL LAB AMT
                if (typeof (document.getElementById('sttr_total_lab_amt' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_total_lab_amt' + prodCount) != null)) {
                    // PRODUCT TOTAL LAB AMT
                    document.getElementById('sttr_total_lab_amt' + prodCount).value = Math_round(prodTotalLabCharges).toFixed(2);
                }

                // PRODUCT TOTAL LAB CHARGES
                if (typeof (document.getElementById('sttr_total_lab_charges' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_total_lab_charges' + prodCount) != null)) {
                    // PRODUCT TOTAL LAB CHARGES
                    document.getElementById('sttr_total_lab_charges' + prodCount).value = Math_round(prodTotalLabCharges).toFixed(2);
                }

            } else {
                // PRODUCT TOTAL LAB AMT
                if (typeof (document.getElementById('sttr_total_lab_amt' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_total_lab_amt' + prodCount) != null)) {
                    // PRODUCT TOTAL LAB AMT
                    if (document.getElementById('sttr_total_lab_amt' + prodCount).value == '') {
                        document.getElementById('sttr_total_lab_amt' + prodCount).value = 0;
                    }
                }

                // PRODUCT TOTAL LAB CHARGES
                if (typeof (document.getElementById('sttr_total_lab_charges' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_total_lab_charges' + prodCount) != null)) {
                    // PRODUCT TOTAL LAB CHARGES
                    if (document.getElementById('sttr_total_lab_charges' + prodCount).value == '') {
                        document.getElementById('sttr_total_lab_charges' + prodCount).value = 0;
                    }
                }

                // PRODUCT TOTAL LAB CHARGES
                if (typeof (document.getElementById('sttr_total_lab_charges' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_total_lab_charges' + prodCount) != null)) {
                    // PRODUCT TOTAL LAB CHARGES
                    prodTotalLabCharges = parseFloat(document.getElementById('sttr_total_lab_charges' + prodCount).value);
                }
            }
        }

        // *************************************************************************************************************************************
        // END CODE FOR LAB CHARGES, LAB CHARGES TYPE & LAB CHARGES CALCULATIONS
        // *************************************************************************************************************************************

        // *************************************************************************************************************************************
        // START CODE FOR PRODUCT VAL, AMT, TAXABLE AMT & FINAL VALUATION CALCULATIONS
        // *************************************************************************************************************************************

        if (typeof (prodRate) != 'undefined' && prodRate != null && typeof (prodFinalFineWeight) != 'undefined' && prodFinalFineWeight != null) {

            if (prodRate > 0 && prodFinalFineWeight > 0) {

                if (typeof (prodType) != 'undefined' && prodType != null) {

                    // PRODUCT TYPE
                    if (prodType == 'Gold') {

                        // PRODUCT WEIGHT TYPE
                        if (prodWtType == 'KG') {

                            if (typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_metal_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_metal_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_taxable_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_taxable_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('gmWtInKg')) != 'undefined' &&                
                                       (document.getElementById('gmWtInKg').value) != null) {

                                // PRODUCT VAL, AMT, TAXABLE AMT, FINAL VAL
                                document.getElementById('sttr_valuation' + prodCount).value = ((prodFinalFineWeight * prodRate) * document.getElementById('gmWtInKg').value).toFixed(2);
                                document.getElementById('sttr_metal_amt' + prodCount).value = ((prodFinalFineWeight * prodRate) * document.getElementById('gmWtInKg').value).toFixed(2);
                                document.getElementById('sttr_final_taxable_amt' + prodCount).value = ((prodFinalFineWeight * prodRate) * document.getElementById('gmWtInKg').value + prodTotalLabCharges).toFixed(2);
                                document.getElementById('sttr_final_valuation' + prodCount).value = parseFloat((prodFinalFineWeight * prodRate) * document.getElementById('gmWtInKg').value + prodTotalLabCharges).toFixed(2);

                            }

                            // PRODUCT WEIGHT TYPE
                        } else if (prodWtType == 'GM') {

                            if (typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_metal_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_metal_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_taxable_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_taxable_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('gmWtInGm')) != 'undefined' &&                
                                       (document.getElementById('gmWtInGm').value != null)) {

                                // PRODUCT VAL, AMT, TAXABLE AMT, FINAL VAL
                                document.getElementById('sttr_valuation' + prodCount).value = ((prodFinalFineWeight * prodRate) / document.getElementById('gmWtInGm').value).toFixed(2);
                                document.getElementById('sttr_metal_amt' + prodCount).value = ((prodFinalFineWeight * prodRate) / document.getElementById('gmWtInGm').value).toFixed(2);
                                document.getElementById('sttr_final_taxable_amt' + prodCount).value = ((prodFinalFineWeight * prodRate) / document.getElementById('gmWtInGm').value + prodTotalLabCharges).toFixed(2);
                                document.getElementById('sttr_final_valuation' + prodCount).value = parseFloat((prodFinalFineWeight * prodRate) / document.getElementById('gmWtInGm').value + prodTotalLabCharges).toFixed(2);
                            }

                            // PRODUCT WEIGHT TYPE
                        } else if (prodWtType == 'MG') {

                            if (typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_metal_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_metal_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_taxable_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_taxable_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('gmWtInMg')) != 'undefined' &&                
                                       (document.getElementById('gmWtInMg').value != null)) {

                                // PRODUCT VAL, AMT, TAXABLE AMT, FINAL VAL
                                document.getElementById('sttr_valuation' + prodCount).value = ((prodFinalFineWeight * prodRate) / document.getElementById('gmWtInMg').value).toFixed(2);
                                document.getElementById('sttr_metal_amt' + prodCount).value = ((prodFinalFineWeight * prodRate) / document.getElementById('gmWtInMg').value).toFixed(2);
                                document.getElementById('sttr_final_taxable_amt' + prodCount).value = ((prodFinalFineWeight * prodRate) / document.getElementById('gmWtInMg').value + prodTotalLabCharges).toFixed(2);
                                document.getElementById('sttr_final_valuation' + prodCount).value = parseFloat((prodFinalFineWeight * prodRate) / document.getElementById('gmWtInMg').value + prodTotalLabCharges).toFixed(2);
                            }
                        }

                        // PRODUCT TYPE
                    } else if (prodType == 'Silver') {

                        // PRODUCT WEIGHT TYPE
                        if (prodWtType == 'KG') {

                            if (typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_metal_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_metal_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_taxable_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_taxable_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('srGmWtInKg')) != 'undefined' &&
                                       (document.getElementById('srGmWtInKg').value) != null) {

                                // PRODUCT VAL, AMT, TAXABLE AMT, FINAL VAL
                                document.getElementById('sttr_valuation' + prodCount).value = ((prodFinalFineWeight * prodRate) * document.getElementById('srGmWtInKg').value).toFixed(2);
                                document.getElementById('sttr_metal_amt' + prodCount).value = ((prodFinalFineWeight * prodRate) * document.getElementById('srGmWtInKg').value).toFixed(2);
                                document.getElementById('sttr_final_taxable_amt' + prodCount).value = ((prodFinalFineWeight * prodRate * document.getElementById('srGmWtInKg').value) + prodTotalLabCharges).toFixed(2);
                                document.getElementById('sttr_final_valuation' + prodCount).value = parseFloat((prodFinalFineWeight * prodRate * document.getElementById('srGmWtInKg').value) + prodTotalLabCharges).toFixed(2);
                            }

                            // PRODUCT WEIGHT TYPE
                        } else if (prodWtType == 'GM') {

                            if (typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_metal_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_metal_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_taxable_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_taxable_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('srGmWtInGm')) != 'undefined' &&
                                       (document.getElementById('srGmWtInGm').value) != null) {

                                // PRODUCT VAL, AMT, TAXABLE AMT, FINAL VAL
                                document.getElementById('sttr_valuation' + prodCount).value = ((prodFinalFineWeight * prodRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
                                document.getElementById('sttr_metal_amt' + prodCount).value = ((prodFinalFineWeight * prodRate) / document.getElementById('srGmWtInGm').value).toFixed(2);
                                document.getElementById('sttr_final_taxable_amt' + prodCount).value = ((prodFinalFineWeight * prodRate) / document.getElementById('srGmWtInGm').value + prodTotalLabCharges).toFixed(2);
                                document.getElementById('sttr_final_valuation' + prodCount).value = parseFloat((prodFinalFineWeight * prodRate) / document.getElementById('srGmWtInGm').value + prodTotalLabCharges).toFixed(2);
                            }

                            // PRODUCT WEIGHT TYPE
                        } else if (prodWtType == 'MG') {

                            if (typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_metal_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_metal_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_taxable_amt' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_taxable_amt' + prodCount) != null) &&
                                typeof (document.getElementById('sttr_final_valuation' + prodCount)) != 'undefined' &&                
                                       (document.getElementById('sttr_final_valuation' + prodCount) != null) &&
                                typeof (document.getElementById('srGmWtInMg')) != 'undefined' && 
                                       (document.getElementById('srGmWtInMg').value) != null) {

                                // PRODUCT VAL, AMT, TAXABLE AMT, FINAL VAL
                                document.getElementById('sttr_valuation' + prodCount).value = ((prodFinalFineWeight * prodRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                                document.getElementById('sttr_metal_amt' + prodCount).value = ((prodFinalFineWeight * prodRate) / (document.getElementById('srGmWtInMg').value)).toFixed(2);
                                document.getElementById('sttr_final_taxable_amt' + prodCount).value = ((prodFinalFineWeight * prodRate) / (document.getElementById('srGmWtInMg').value) + parseFloat(prodTotalLabCharges)).toFixed(2);
                                document.getElementById('sttr_final_valuation' + prodCount).value = parseFloat((prodFinalFineWeight * prodRate) / (document.getElementById('srGmWtInMg').value) + parseFloat(prodTotalLabCharges)).toFixed(2);
                            }
                        }
                    }
                }
            }
        }

        // *************************************************************************************************************************************
        // END CODE FOR PRODUCT VAL, AMT, TAXABLE AMT & FINAL VALUATION CALCULATIONS
        // *************************************************************************************************************************************

        // START CODE TO CALL FUNCTION FOR DISCOUNT CALCULATIONS @PRIYANKA-03MAY18
           discountCalcFunc(prodCount);
        // END CODE TO CALL FUNCTION FOR DISCOUNT CALCULATIONS @PRIYANKA-03MAY18

        // *************************************************************************************************************************************
        // *************************************************************************************************************************************

        // START CODE TO CALL FUNCTION FOR TAX & FINAL AMOUNT CALCULATIONS @PRIYANKA-03MAY18
           taxCalcFunc(prodCount);
        // END CODE TO CALL FUNCTION FOR TAX & FINAL AMOUNT CALCULATIONS @PRIYANKA-03MAY18

        // *************************************************************************************************************************************
        // *************************************************************************************************************************************

    }, 100);
}
// *************************************************************************************************************************************
// END CODE TO ADD FUNCTION FOR CALCULATIONS @PRIYANKA-02APR18
// *************************************************************************************************************************************

// *************************************************************************************************************************************
// START CODE TO ADD FUNCTION FOR VALUE ADD & CUSTOMER WASTAGE CALCULATIONS @PRIYANKA-03MAY18
// *************************************************************************************************************************************
function custWastgValueAddCalcFunc(prodCount) {
    // PRODUCT NET WEIGHT
    if (typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_nt_weight' + prodCount) != null)) {
        // PRODUCT NET WEIGHT
        var prodNetWeight = document.getElementById('sttr_nt_weight' + prodCount).value; // NET WEIGHT
        if (prodNetWeight == '' || prodNetWeight == 'NaN') {
            prodNetWeight = 0;
        }
    }

    // PRODUCT FINAL FINE WEIGHT
    if (typeof (document.getElementById('sttr_final_purity' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_final_purity' + prodCount) != null)) {
        // PRODUCT FINAL FINE WEIGHT
        var prodFinalFineWt = ((parseFloat(document.getElementById('sttr_final_purity' + prodCount).value) * prodNetWeight) / 100).toFixed(3);
        if (prodFinalFineWt == '' || prodFinalFineWt == 'NaN') {
            prodFinalFineWt = 0;
        }
    }

    // CUSTOMER WASTAGE WEIGHT
    if (typeof (document.getElementById('sttr_cust_wastage_wt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_cust_wastage_wt' + prodCount) != null)) {
        // CUSTOMER WASTAGE WEIGHT
        if (document.getElementById('sttr_cust_wastage_wt' + prodCount).value > 0) { // CUSTOMER WASTAGE WEIGHT IS GREATER THAN ZERO

            if (typeof (document.getElementById('sttr_cust_wastage_wt' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_cust_wastage_wt' + prodCount) != null) &&
                typeof (document.getElementById('sttr_cust_wastage' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_cust_wastage' + prodCount) != null)) {
                // CALCULATE CUSTOMER WASTAGE IN %
                document.getElementById('sttr_cust_wastage' + prodCount).value = ((parseFloat(document.getElementById('sttr_cust_wastage_wt' + prodCount).value) * 100) / parseFloat(prodFinalFineWt)); // CALCULATE CUSTOMER WASTAGE
            }

            if (typeof (document.getElementById('sttr_cust_wastage_wt' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_cust_wastage_wt' + prodCount) != null) &&
                typeof (document.getElementById('sttr_value_added' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_value_added' + prodCount) != null) &&
                typeof (document.getElementById('sttr_product_purchase_rate' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_product_purchase_rate' + prodCount) != null) &&
                typeof (document.getElementById('gmWtInGm')) != 'undefined' &&                
                       (document.getElementById('gmWtInGm').value != null)) {
                // CALCULATE VALUE ADDED AMOUNT
                document.getElementById('sttr_value_added' + prodCount).value = Math_round(((parseFloat(document.getElementById('sttr_cust_wastage_wt' + prodCount).value) * parseFloat(document.getElementById('sttr_product_purchase_rate' + prodCount).value)) / document.getElementById('gmWtInGm').value));
            }
        }
    }

    // VALUE ADDED
    if (typeof (document.getElementById('sttr_value_added' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_value_added' + prodCount) != null)) {
        // VALUE ADDED
        if (document.getElementById('sttr_value_added' + prodCount).value == '' ||
            document.getElementById('sttr_value_added' + prodCount).value == 'NaN') {
            document.getElementById('sttr_value_added' + prodCount).value = 0;
        }
    }

    // CALCULATE PROD SELL FINAL FINE WEIGHT
    if (typeof (document.getElementById('sttr_cust_wastage_wt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_cust_wastage_wt' + prodCount) != null)) {
        // CALCULATE PROD SELL FINAL FINE WEIGHT
        var prodSellFinalFineWt = (parseFloat(prodFinalFineWt) + parseFloat(document.getElementById('sttr_cust_wastage_wt' + prodCount).value)).toFixed(3);
    }

    // PROD SELL FINAL FINE WEIGHT
    if (typeof (document.getElementById('sttr_sell_final_fine_weight' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_sell_final_fine_weight' + prodCount) != null)) {
                // PROD SELL FINAL FINE WEIGHT
                document.getElementById('sttr_sell_final_fine_weight' + prodCount).value = parseFloat(prodSellFinalFineWt).toFixed(3);
        // PROD SELL FINAL FINE WEIGHT
        if (document.getElementById('sttr_sell_final_fine_weight' + prodCount).value == '' ||
            document.getElementById('sttr_sell_final_fine_weight' + prodCount).value == 'NaN') {
            document.getElementById('sttr_sell_final_fine_weight' + prodCount).value = 0;
        }
    }

}
// *************************************************************************************************************************************
// END CODE TO ADD FUNCTION FOR VALUE ADD & CUSTOMER WASTAGE CALCULATIONS @PRIYANKA-03MAY18
// *************************************************************************************************************************************

// *************************************************************************************************************************************
// START CODE TO ADD FUNCTION FOR VALUE ADD & CUSTOMER WASTAGE WEIGHT CALCULATIONS @PRIYANKA-09MAY18
// *************************************************************************************************************************************
function custWastgWeightValueAddCalcFunc(prodCount) {

    if (typeof (document.getElementById('sttr_nt_weight' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_nt_weight' + prodCount) != null)) {
        // PRODUCT NET WEIGHT
        var prodNetWeight = document.getElementById('sttr_nt_weight' + prodCount).value; // NET WEIGHT

        if (prodNetWeight == '' || prodNetWeight == 'NaN') {
            prodNetWeight = 0;
        }
    }

    if (typeof (document.getElementById('sttr_final_purity' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_final_purity' + prodCount) != null)) {
        // PRODUCT FINAL FINE WEIGHT
        var prodFinalFineWt = ((parseFloat(document.getElementById('sttr_final_purity' + prodCount).value) * prodNetWeight) / 100).toFixed(3);

        if (prodFinalFineWt == '' || prodFinalFineWt == 'NaN') {
            prodFinalFineWt = 0;
        }
    }

    if (typeof (document.getElementById('sttr_cust_wastage' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_cust_wastage' + prodCount) != null)) {

        // CUSTOMER WASTAGE WEIGHT
        if (document.getElementById('sttr_cust_wastage' + prodCount).value > 0) { // CUSTOMER WASTAGE WEIGHT IS GREATER THAN ZERO

            if (typeof (document.getElementById('sttr_cust_wastage' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_cust_wastage' + prodCount) != null) &&
                typeof (document.getElementById('sttr_cust_wastage_wt' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_cust_wastage_wt' + prodCount) != null)) {
                // CALCULATE CUSTOMER WASTAGE WEIGHT
                document.getElementById('sttr_cust_wastage_wt' + prodCount).value = ((parseFloat(prodFinalFineWt) * parseFloat(document.getElementById('sttr_cust_wastage' + prodCount).value)) / 100).toFixed(3); // CALCULATE CUSTOMER WASTAGE WEIGHT
            }

            if (typeof (document.getElementById('sttr_cust_wastage_wt' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_cust_wastage_wt' + prodCount) != null) &&
                typeof (document.getElementById('sttr_value_added' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_value_added' + prodCount) != null) &&
                typeof (document.getElementById('sttr_product_purchase_rate' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_product_purchase_rate' + prodCount) != null) &&
                typeof (document.getElementById('gmWtInGm')) != 'undefined' &&                
                       (document.getElementById('gmWtInGm').value != null)) {
                // CALCULATE VALUE ADDED AMOUNT
                document.getElementById('sttr_value_added' + prodCount).value = Math_round(((parseFloat(document.getElementById('sttr_cust_wastage_wt' + prodCount).value) * parseFloat(document.getElementById('sttr_product_purchase_rate' + prodCount).value)) / document.getElementById('gmWtInGm').value));
            }
        }
    }

    if (typeof (document.getElementById('sttr_value_added' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_value_added' + prodCount) != null)) {

        // VALUE ADDED
        if (document.getElementById('sttr_value_added' + prodCount).value == '' ||
            document.getElementById('sttr_value_added' + prodCount).value == 'NaN') {
            document.getElementById('sttr_value_added' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_cust_wastage_wt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_cust_wastage_wt' + prodCount) != null)) {
        // CALCULATE PROD SELL FINAL FINE WEIGHT
        var prodSellFinalFineWt = (parseFloat(prodFinalFineWt) + parseFloat(document.getElementById('sttr_cust_wastage_wt' + prodCount).value)).toFixed(3);
    }

    if (typeof (document.getElementById('sttr_sell_final_fine_weight' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_sell_final_fine_weight' + prodCount) != null)) {

        // PROD SELL FINAL FINE WEIGHT
        document.getElementById('sttr_sell_final_fine_weight' + prodCount).value = parseFloat(prodSellFinalFineWt).toFixed(3);

        if (document.getElementById('sttr_sell_final_fine_weight' + prodCount).value == '' ||
            document.getElementById('sttr_sell_final_fine_weight' + prodCount).value == 'NaN') {
            document.getElementById('sttr_sell_final_fine_weight' + prodCount).value = 0;
        }
    }
}
// *************************************************************************************************************************************
// END CODE TO ADD FUNCTION FOR VALUE ADD & CUSTOMER WASTAGE WEIGHT CALCULATIONS @PRIYANKA-09MAY18
// *************************************************************************************************************************************


// *************************************************************************************************************************************
// START CODE TO ADD FUNCTION FOR DISCOUNT CALCULATIONS @PRIYANKA-03MAY18
// *************************************************************************************************************************************
function discountCalcFunc(prodCount) {

    if (typeof (document.getElementById('sttr_metal_discount_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_metal_discount_per' + prodCount) != null)) {
        // PRODUCT DISCOUNT IN % @PRIYANKA-03MAY18     
        if (document.getElementById('sttr_metal_discount_per' + prodCount).value == 'NaN') {
            document.getElementById('sttr_metal_discount_per' + prodCount).value = '0';
        }
    }

    if (typeof (document.getElementById('sttr_metal_discount_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_metal_discount_amt' + prodCount) != null)) {
        // PRODUCT DISCOUNT IN AMT @PRIYANKA-03MAY18  
        if (document.getElementById('sttr_metal_discount_amt' + prodCount).value == 'NaN') {
            document.getElementById('sttr_metal_discount_amt' + prodCount).value = '0.00';
        }
    }

    if (typeof (document.getElementById('sttr_metal_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_metal_amt' + prodCount) != null)) {
        // PRODUCT AMT
        var prodTotalAmt = Math_round(parseFloat(document.getElementById('sttr_metal_amt' + prodCount).value)).toFixed(2);
    }

    if (typeof (document.getElementById('sttr_metal_discount_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_metal_discount_per' + prodCount) != null) &&
        typeof (document.getElementById('sttr_metal_discount_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_metal_discount_amt' + prodCount) != null)) {

        // START CODE FOR PRODUCT DISCOUNT IN % & PRODUCT DISCOUNT AMT @PRIYANKA-03MAY18     
        if ((document.getElementById('sttr_metal_discount_per' + prodCount).value != '') &&
            (document.getElementById('sttr_metal_discount_amt' + prodCount).value == '' ||
             document.getElementById('sttr_metal_discount_amt' + prodCount).value == '0.00')) {

            if (prodTotalAmt > 0) {

                if (typeof (document.getElementById('sttr_metal_discount_per' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_metal_discount_per' + prodCount) != null)) {

                    // PRODUCT DISCOUNT %
                    var sttr_metal_discount_per = document.getElementById('sttr_metal_discount_per' + prodCount).value; // PRODUCT DISCOUNT IN % @PRIYANKA-03MAY18          
                }

                if (typeof (document.getElementById('sttr_metal_amt' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_metal_amt' + prodCount) != null)) {

                    // CALCULATE PRODUCT DISCOUNT AMT @PRIYANKA-03MAY18
                    var prodDiscountAmt = (Math_round(parseFloat(document.getElementById('sttr_metal_amt' + prodCount).value)) * parseFloat(sttr_metal_discount_per) / 100).toFixed(2);
                }

                if (typeof (document.getElementById('sttr_metal_discount_amt' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_metal_discount_amt' + prodCount) != null)) {

                    // PRODUCT DISCOUNT AMT
                    document.getElementById('sttr_metal_discount_amt' + prodCount).value = Math_round(parseFloat(prodDiscountAmt)).toFixed(2);
                }

                if (prodDiscountAmt > 0) {

                    if (typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_valuation' + prodCount) != null) &&
                        typeof (document.getElementById('sttr_metal_amt' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_metal_amt' + prodCount) != null)) {

                        // PRODUCT VAL
                        document.getElementById('sttr_valuation' + prodCount).value = (Math_round(parseFloat(document.getElementById('sttr_metal_amt' + prodCount).value)) - Math_round(parseFloat(prodDiscountAmt))).toFixed(2);
                    }
                }
            }

        } else {

            // START CODE TO CALCULATE PRODUCT DISCOUNT IN % ACCORDING TO PRODUCT DISCOUNT AMT @PRIYANKA-03MAY18        
            if (prodTotalAmt > 0) {

                if (typeof (document.getElementById('sttr_metal_discount_amt' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_metal_discount_amt' + prodCount) != null)) {

                    // PRODUCT DISCOUNT AMT @PRIYANKA-03MAY18
                    var prodDiscountAmt = Math_round(parseFloat(document.getElementById('sttr_metal_discount_amt' + prodCount).value)).toFixed(2);
                }

                // CALCULATE PRODUCT DISCOUNT IN % 
                var prodDiscountPer = ((parseFloat(prodDiscountAmt) * 100) / parseFloat(prodTotalAmt));

                if (typeof (document.getElementById('sttr_metal_discount_per' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_metal_discount_per' + prodCount) != null)) {

                    // PRODUCT DISCOUNT IN % 
                    document.getElementById('sttr_metal_discount_per' + prodCount).value = parseFloat(prodDiscountPer);
                }

                if (prodDiscountAmt > 0) {

                    if (typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_valuation' + prodCount) != null) &&
                        typeof (document.getElementById('sttr_metal_amt' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_metal_amt' + prodCount) != null)) {
                        document.getElementById('sttr_valuation' + prodCount).value = (Math_round(parseFloat(document.getElementById('sttr_metal_amt' + prodCount).value)) - parseFloat(prodDiscountAmt)).toFixed(2);
                    }
                }

            }
            // END CODE TO CALCULATE PRODUCT DISCOUNT IN % ACCORDING TO PRODUCT DISCOUNT AMT @PRIYANKA-03MAY18
        }
        // END CODE FOR PRODUCT DISCOUNT IN % & PRODUCT DISCOUNT AMT @PRIYANKA-03MAY18

    }

    if (typeof (document.getElementById('sttr_metal_discount_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_metal_discount_per' + prodCount) != null)) {
        // PRODUCT DISCOUNT IN % @PRIYANKA-03MAY18     
        if (document.getElementById('sttr_metal_discount_per' + prodCount).value == 'NaN') {
            document.getElementById('sttr_metal_discount_per' + prodCount).value = '0';
        }
    }

    if (typeof (document.getElementById('sttr_metal_discount_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_metal_discount_amt' + prodCount) != null)) {
        // PRODUCT DISCOUNT IN AMT @PRIYANKA-03MAY18  
        if (document.getElementById('sttr_metal_discount_amt' + prodCount).value == 'NaN' ||
            document.getElementById('sttr_metal_discount_amt' + prodCount).value == '0') {
            document.getElementById('sttr_metal_discount_amt' + prodCount).value = '0.00';
        }
    }

    // *************************************************************************************************************************************
    // *************************************************************************************************************************************

    if (typeof (document.getElementById('sttr_lab_discount_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_lab_discount_per' + prodCount) != null)) {
        // LAB DISCOUNT IN % @PRIYANKA-03MAY18     
        if (document.getElementById('sttr_lab_discount_per' + prodCount).value == 'NaN') {
            document.getElementById('sttr_lab_discount_per' + prodCount).value = '0';
        }
    }

    if (typeof (document.getElementById('sttr_lab_discount_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_lab_discount_amt' + prodCount) != null)) {
        // LAB DISCOUNT IN AMT @PRIYANKA-03MAY18  
        if (document.getElementById('sttr_lab_discount_amt' + prodCount).value == 'NaN') {
            document.getElementById('sttr_lab_discount_amt' + prodCount).value = '0.00';
        }
    }

    if (typeof (document.getElementById('sttr_total_lab_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_total_lab_amt' + prodCount) != null)) {
        // TOT LAB AMT
        var labTotalAmt = Math_round(parseFloat(document.getElementById('sttr_total_lab_amt' + prodCount).value)).toFixed(2);
    }

    if (typeof (document.getElementById('sttr_lab_discount_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_lab_discount_per' + prodCount) != null) &&
        typeof (document.getElementById('sttr_lab_discount_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_lab_discount_amt' + prodCount) != null)) {

        // START CODE FOR LAB DISCOUNT IN % & LAB DISCOUNT AMT @PRIYANKA-03MAY18     
        if ((document.getElementById('sttr_lab_discount_per' + prodCount).value != '') &&
            (document.getElementById('sttr_lab_discount_amt' + prodCount).value == '' ||
             document.getElementById('sttr_lab_discount_amt' + prodCount).value == '0.00')) {

            if (labTotalAmt > 0) {

                if (typeof (document.getElementById('sttr_lab_discount_per' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_lab_discount_per' + prodCount) != null)) {
                    // LAB DISCOUNT IN %
                    var sttr_lab_discount_per = document.getElementById('sttr_lab_discount_per' + prodCount).value; // LAB DISCOUNT IN % @PRIYANKA-03MAY18          
                }

                if (typeof (document.getElementById('sttr_total_lab_amt' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_total_lab_amt' + prodCount) != null)) {
                    // CALCULATE LAB DISCOUNT AMT @PRIYANKA-03MAY18
                    var labDiscountAmt = (Math_round(parseFloat(document.getElementById('sttr_total_lab_amt' + prodCount).value)) * parseFloat(sttr_lab_discount_per) / 100).toFixed(2);
                }

                if (typeof (document.getElementById('sttr_lab_discount_amt' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_lab_discount_amt' + prodCount) != null)) {
                    // LAB DISCOUNT AMT
                    document.getElementById('sttr_lab_discount_amt' + prodCount).value = Math_round(parseFloat(labDiscountAmt)).toFixed(2);
                }

                if (labDiscountAmt > 0) {

                    if (typeof (document.getElementById('sttr_total_lab_charges' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_total_lab_charges' + prodCount) != null) &&
                        typeof (document.getElementById('sttr_total_lab_amt' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_total_lab_amt' + prodCount) != null)) {
                        // TOTAL LAB CHARGES
                        document.getElementById('sttr_total_lab_charges' + prodCount).value = (Math_round(parseFloat(document.getElementById('sttr_total_lab_amt' + prodCount).value)) - Math_round(parseFloat(labDiscountAmt))).toFixed(2);
                    }
                }
            }

        } else {

            // START CODE TO CALCULATE LAB DISCOUNT IN % ACCORDING TO LAB DISCOUNT AMT @PRIYANKA-03MAY18        
            if (labTotalAmt > 0) {

                if (typeof (document.getElementById('sttr_lab_discount_amt' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_lab_discount_amt' + prodCount) != null)) {
                    // LAB DISCOUNT AMT @PRIYANKA-03MAY18
                    var labDiscountAmt = Math_round(parseFloat(document.getElementById('sttr_lab_discount_amt' + prodCount).value)).toFixed(2);
                }

                // CALCULATE LAB DISCOUNT IN %
                var labDiscountPer = ((parseFloat(labDiscountAmt) * 100) / parseFloat(labTotalAmt));

                if (typeof (document.getElementById('sttr_lab_discount_per' + prodCount)) != 'undefined' &&                
                           (document.getElementById('sttr_lab_discount_per' + prodCount) != null)) {
                    // LAB DISCOUNT IN %
                    document.getElementById('sttr_lab_discount_per' + prodCount).value = parseFloat(labDiscountPer);
                }

                if (labDiscountAmt > 0) {

                    if (typeof (document.getElementById('sttr_total_lab_charges' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_total_lab_charges' + prodCount) != null) &&
                        typeof (document.getElementById('sttr_total_lab_amt' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_total_lab_amt' + prodCount) != null)) {
                        // TOTAL LAB CHARGES
                        document.getElementById('sttr_total_lab_charges' + prodCount).value = (Math_round(parseFloat(document.getElementById('sttr_total_lab_amt' + prodCount).value)) - parseFloat(labDiscountAmt)).toFixed(2);
                    }
                }

            }
            // END CODE TO CALCULATE LAB DISCOUNT IN % ACCORDING TO LAB DISCOUNT AMT @PRIYANKA-03MAY18
        }
        // END CODE FOR LAB DISCOUNT IN % & LAB DISCOUNT AMT @PRIYANKA-03MAY18
    }

    if (typeof (document.getElementById('sttr_lab_discount_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_lab_discount_per' + prodCount) != null)) {
        // LAB DISCOUNT IN % @PRIYANKA-03MAY18   
        if (document.getElementById('sttr_lab_discount_per' + prodCount).value == 'NaN') {
            document.getElementById('sttr_lab_discount_per' + prodCount).value = '0';
        }
    }

    if (typeof (document.getElementById('sttr_lab_discount_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_lab_discount_amt' + prodCount) != null)) {
        // LAB DISCOUNT IN AMT @PRIYANKA-03MAY18   
        if (document.getElementById('sttr_lab_discount_amt' + prodCount).value == 'NaN' ||
            document.getElementById('sttr_lab_discount_amt' + prodCount).value == '0') {
            document.getElementById('sttr_lab_discount_amt' + prodCount).value = '0.00';
        }
    }

    if (typeof (document.getElementById('sttr_final_taxable_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_final_taxable_amt' + prodCount) != null) &&
        typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_valuation' + prodCount) != null) &&
        typeof (document.getElementById('sttr_total_lab_charges' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_total_lab_charges' + prodCount) != null)) {
        // TAXABLE AMOUNT @PRIYANKA-03MAY18  
        document.getElementById('sttr_final_taxable_amt' + prodCount).value = (parseFloat(document.getElementById('sttr_valuation' + prodCount).value) + parseFloat(document.getElementById('sttr_total_lab_charges' + prodCount).value)).toFixed(2);
    }

    if (typeof (document.getElementById('sttr_final_taxable_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_final_taxable_amt' + prodCount) != null)) {
        // TAXABLE AMOUNT @PRIYANKA-03MAY18   
        if (document.getElementById('sttr_final_taxable_amt' + prodCount).value == 'NaN') {
            document.getElementById('sttr_final_taxable_amt' + prodCount).value = '0.00';
        }
    }

}
// *************************************************************************************************************************************
// END CODE TO ADD FUNCTION FOR DISCOUNT CALCULATIONS @PRIYANKA-03MAY18
// *************************************************************************************************************************************

// *************************************************************************************************************************************
// START CODE TO ADD FUNCTION FOR TAX CALCULATIONS @PRIYANKA-30APR18
// *************************************************************************************************************************************
function taxCalcFunc(prodCount) {

    //var prodCount = document.getElementById('noOfProd').value;

    if (typeof (document.getElementById('sttr_mkg_cgst_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_mkg_cgst_per' + prodCount) != null)) {
        // LAB/MKG CGST IN % @PRIYANKA-30APR18
        if (document.getElementById('sttr_mkg_cgst_per' + prodCount).value == '' ||
            document.getElementById('sttr_mkg_cgst_per' + prodCount).value == 'NaN') {
            document.getElementById('sttr_mkg_cgst_per' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_mkg_sgst_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_mkg_sgst_per' + prodCount) != null)) {
        // LAB/MKG SGST IN % @PRIYANKA-30APR18
        if (document.getElementById('sttr_mkg_sgst_per' + prodCount).value == '' ||
            document.getElementById('sttr_mkg_sgst_per' + prodCount).value == 'NaN') {
            document.getElementById('sttr_mkg_sgst_per' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_mkg_igst_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_mkg_igst_per' + prodCount) != null)) {
        // LAB/MKG IGST IN % @PRIYANKA-30APR18
        if (document.getElementById('sttr_mkg_igst_per' + prodCount).value == '' ||
            document.getElementById('sttr_mkg_igst_per' + prodCount).value == 'NaN') {
            document.getElementById('sttr_mkg_igst_per' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_total_lab_charges' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_total_lab_charges' + prodCount) != null)) {

        if (document.getElementById('sttr_total_lab_charges' + prodCount).value > 0) { // TOTAL LAB CHARGES IS GREATER THAN ZERO

            if (typeof (document.getElementById('sttr_mkg_cgst_per' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_mkg_cgst_per' + prodCount) != null) &&
                typeof (document.getElementById('sttr_mkg_cgst_chrg' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_mkg_cgst_chrg' + prodCount) != null)) {

                // CALCULATE LAB/MKG CGST AMT => ((TOTAL LAB/MKG CHARGES * LAB/MKG CGST IN %) / 100) @PRIYANKA-30APR18
                if (document.getElementById('sttr_mkg_cgst_per' + prodCount).value != '') {
                    document.getElementById('sttr_mkg_cgst_chrg' + prodCount).value = (parseFloat(document.getElementById('sttr_total_lab_charges' + prodCount).value) *
                            (parseFloat(document.getElementById('sttr_mkg_cgst_per' + prodCount).value) / 100)).toFixed(2);
                }
            }

            if (typeof (document.getElementById('sttr_mkg_sgst_per' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_mkg_sgst_per' + prodCount) != null) &&
                typeof (document.getElementById('sttr_mkg_sgst_chrg' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_mkg_sgst_chrg' + prodCount) != null)) {

                // CALCULATE LAB/MKG CGST AMT => ((TOTAL LAB/MKG CHARGES * LAB/MKG SGST IN %) / 100) @PRIYANKA-30APR18
                if (document.getElementById('sttr_mkg_sgst_per' + prodCount).value != '') {
                    document.getElementById('sttr_mkg_sgst_chrg' + prodCount).value = (parseFloat(document.getElementById('sttr_total_lab_charges' + prodCount).value) *
                    (parseFloat(document.getElementById('sttr_mkg_sgst_per' + prodCount).value) / 100)).toFixed(2);
                }
            }

            if (typeof (document.getElementById('sttr_mkg_igst_per' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_mkg_igst_per' + prodCount) != null) &&
                typeof (document.getElementById('sttr_mkg_igst_chrg' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_mkg_igst_chrg' + prodCount) != null)) {

                // CALCULATE LAB/MKG CGST AMT => ((TOTAL LAB/MKG CHARGES * LAB/MKG IGST IN %) / 100) @PRIYANKA-30APR18
                if (document.getElementById('sttr_mkg_igst_per' + prodCount).value != '') {
                    document.getElementById('sttr_mkg_igst_chrg' + prodCount).value = (parseFloat(document.getElementById('sttr_total_lab_charges' + prodCount).value) *
                    (parseFloat(document.getElementById('sttr_mkg_igst_per' + prodCount).value) / 100)).toFixed(2);
                }
            }
        }
    }

    if (typeof (document.getElementById('sttr_mkg_cgst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_mkg_cgst_chrg' + prodCount) != null)) {
        // LAB/MKG CGST CHRG @PRIYANKA-30APR18
        if (document.getElementById('sttr_mkg_cgst_chrg' + prodCount).value == '' ||
            document.getElementById('sttr_mkg_cgst_chrg' + prodCount).value == 'NaN') {
            document.getElementById('sttr_mkg_cgst_chrg' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_mkg_sgst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_mkg_sgst_chrg' + prodCount) != null)) {
        // LAB/MKG SGST CHRG @PRIYANKA-30APR18
        if (document.getElementById('sttr_mkg_sgst_chrg' + prodCount).value == '' ||
            document.getElementById('sttr_mkg_sgst_chrg' + prodCount).value == 'NaN') {
            document.getElementById('sttr_mkg_sgst_chrg' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_mkg_igst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_mkg_igst_chrg' + prodCount) != null)) {
        // LAB/MKG IGST CHRG @PRIYANKA-30APR18
        if (document.getElementById('sttr_mkg_igst_chrg' + prodCount).value == '' ||
            document.getElementById('sttr_mkg_igst_chrg' + prodCount).value == 'NaN') {
            document.getElementById('sttr_mkg_igst_chrg' + prodCount).value = 0;
        }
    }

    // *************************************************************************************************************************************
    // *************************************************************************************************************************************

    if (typeof (document.getElementById('sttr_tot_price_cgst_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_price_cgst_per' + prodCount) != null)) {
        // PROD CGST IN % @PRIYANKA-30APR18
        if (document.getElementById('sttr_tot_price_cgst_per' + prodCount).value == '' ||
            document.getElementById('sttr_tot_price_cgst_per' + prodCount).value == 'NaN') {
            document.getElementById('sttr_tot_price_cgst_per' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_tot_price_sgst_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_price_sgst_per' + prodCount) != null)) {
        // PROD SGST IN % @PRIYANKA-30APR18
        if (document.getElementById('sttr_tot_price_sgst_per' + prodCount).value == '' ||
            document.getElementById('sttr_tot_price_sgst_per' + prodCount).value == 'NaN') {
            document.getElementById('sttr_tot_price_sgst_per' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_tot_price_igst_per' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_price_igst_per' + prodCount) != null)) {
        // PROD IGST IN % @PRIYANKA-30APR18
        if (document.getElementById('sttr_tot_price_igst_per' + prodCount).value == '' ||
            document.getElementById('sttr_tot_price_igst_per' + prodCount).value == 'NaN') {
            document.getElementById('sttr_tot_price_igst_per' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_valuation' + prodCount) != null)) {


        if (document.getElementById('sttr_valuation' + prodCount).value > 0) { // PROD AMOUNT IS GREATER THAN ZERO

            if (typeof (document.getElementById('sttr_tot_price_cgst_per' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_tot_price_cgst_per' + prodCount) != null)) {
                // CALCULATE PROD CGST AMT => ((PROD VAL * PROD CGST IN %) / 100) @PRIYANKA-30APR18
                if (document.getElementById('sttr_tot_price_cgst_per' + prodCount).value != '') {

                    if (typeof (document.getElementById('sttr_tot_price_cgst_chrg' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_tot_price_cgst_chrg' + prodCount) != null) &&
                        typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_valuation' + prodCount) != null) &&
                        typeof (document.getElementById('sttr_tot_price_cgst_per' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_tot_price_cgst_per' + prodCount) != null)) {
                        // PROD CGST AMT 
                        document.getElementById('sttr_tot_price_cgst_chrg' + prodCount).value = (parseFloat(document.getElementById('sttr_valuation' + prodCount).value) *
                                (parseFloat(document.getElementById('sttr_tot_price_cgst_per' + prodCount).value) / 100)).toFixed(2);
                    }
                }
            }

            if (typeof (document.getElementById('sttr_tot_price_sgst_per' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_tot_price_sgst_per' + prodCount) != null)) {
                // CALCULATE PROD SGST AMT => ((PROD VAL * PROD SGST IN %) / 100) @PRIYANKA-30APR18
                if (document.getElementById('sttr_tot_price_sgst_per' + prodCount).value != '') {

                    if (typeof (document.getElementById('sttr_tot_price_sgst_chrg' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_tot_price_sgst_chrg' + prodCount) != null) &&
                        typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_valuation' + prodCount) != null) &&
                        typeof (document.getElementById('sttr_tot_price_sgst_per' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_tot_price_sgst_per' + prodCount) != null)) {
                        // PROD SGST AMT 
                        document.getElementById('sttr_tot_price_sgst_chrg' + prodCount).value = (parseFloat(document.getElementById('sttr_valuation' + prodCount).value) *
                                (parseFloat(document.getElementById('sttr_tot_price_sgst_per' + prodCount).value) / 100)).toFixed(2);
                    }
                }
            }

            if (typeof (document.getElementById('sttr_tot_price_igst_per' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_tot_price_igst_per' + prodCount) != null)) {
                // CALCULATE PROD IGST AMT => ((PROD VAL * PROD IGST IN %) / 100) @PRIYANKA-30APR18
                if (document.getElementById('sttr_tot_price_igst_per' + prodCount).value != '') {

                    if (typeof (document.getElementById('sttr_tot_price_igst_chrg' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_tot_price_igst_chrg' + prodCount) != null) &&
                        typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_valuation' + prodCount) != null) &&
                        typeof (document.getElementById('sttr_tot_price_igst_per' + prodCount)) != 'undefined' &&                
                               (document.getElementById('sttr_tot_price_igst_per' + prodCount) != null)) {
                        // PROD IGST AMT
                        document.getElementById('sttr_tot_price_igst_chrg' + prodCount).value = (parseFloat(document.getElementById('sttr_valuation' + prodCount).value) *
                                (parseFloat(document.getElementById('sttr_tot_price_igst_per' + prodCount).value) / 100)).toFixed(2);
                    }
                }
            }

        }
    }

    if (typeof (document.getElementById('sttr_tot_price_cgst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_price_cgst_chrg' + prodCount) != null)) {
        // PROD CGST CHRG @PRIYANKA-30APR18
        if (document.getElementById('sttr_tot_price_cgst_chrg' + prodCount).value == '' ||
            document.getElementById('sttr_tot_price_cgst_chrg' + prodCount).value == 'NaN') {
            document.getElementById('sttr_tot_price_cgst_chrg' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_tot_price_sgst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_price_sgst_chrg' + prodCount) != null)) {
        // PROD SGST CHRG @PRIYANKA-30APR18
        if (document.getElementById('sttr_tot_price_sgst_chrg' + prodCount).value == '' ||
            document.getElementById('sttr_tot_price_sgst_chrg' + prodCount).value == 'NaN') {
            document.getElementById('sttr_tot_price_sgst_chrg' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_tot_price_igst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_price_igst_chrg' + prodCount) != null)) {
        // PROD IGST CHRG @PRIYANKA-30APR18
        if (document.getElementById('sttr_tot_price_igst_chrg' + prodCount).value == '' ||
            document.getElementById('sttr_tot_price_igst_chrg' + prodCount).value == 'NaN') {
            document.getElementById('sttr_tot_price_igst_chrg' + prodCount).value = 0;
        }
    }

    // *************************************************************************************************************************************
    // *************************************************************************************************************************************

    if (typeof (document.getElementById('sttr_tax' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tax' + prodCount) != null)) {
        // PROD OTHER TAX IN % @PRIYANKA-30APR18
        if (document.getElementById('sttr_tax' + prodCount).value == '' ||
            document.getElementById('sttr_tax' + prodCount).value == 'NaN') {
            document.getElementById('sttr_tax' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_tax' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tax' + prodCount) != null)) {

        // PROD OTHER TAX AMT => ((PROD VAL * PROD OTH TAX IN %) / 100) @PRIYANKA-30APR18
        if (document.getElementById('sttr_tax' + prodCount).value != '') {

            if (typeof (document.getElementById('sttr_other_tax_amt' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_other_tax_amt' + prodCount) != null) &&
                typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_valuation' + prodCount) != null) &&
                typeof (document.getElementById('sttr_tax' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_tax' + prodCount) != null)) {
                // PROD OTHER TAX AMT
                document.getElementById('sttr_other_tax_amt' + prodCount).value = (parseFloat(document.getElementById('sttr_valuation' + prodCount).value) *
                        (parseFloat(document.getElementById('sttr_tax' + prodCount).value) / 100)).toFixed(2);
            }
        }
    }

    if (typeof (document.getElementById('sttr_other_tax_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_other_tax_amt' + prodCount) != null)) {
        // PROD OTHER TAX AMT @PRIYANKA-30APR18
        if (document.getElementById('sttr_other_tax_amt' + prodCount).value == '' ||
            document.getElementById('sttr_other_tax_amt' + prodCount).value == 'NaN') {
            document.getElementById('sttr_other_tax_amt' + prodCount).value = 0;
        }
    }

    // *************************************************************************************************************************************
    // *************************************************************************************************************************************

    if (typeof (document.getElementById('sttr_tot_tax' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_tax' + prodCount) != null) &&
        typeof (document.getElementById('sttr_mkg_cgst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_mkg_cgst_chrg' + prodCount) != null) &&
        typeof (document.getElementById('sttr_mkg_sgst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_mkg_sgst_chrg' + prodCount) != null) &&
        typeof (document.getElementById('sttr_mkg_igst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_mkg_igst_chrg' + prodCount) != null) &&
        typeof (document.getElementById('sttr_tot_price_cgst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_price_cgst_chrg' + prodCount) != null) &&
        typeof (document.getElementById('sttr_tot_price_sgst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_price_sgst_chrg' + prodCount) != null) &&
        typeof (document.getElementById('sttr_tot_price_igst_chrg' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_price_igst_chrg' + prodCount) != null) &&
        typeof (document.getElementById('sttr_other_tax_amt' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_other_tax_amt' + prodCount) != null)) {

        // CALCULATE TOT TAX AMT => LAB/MKG CGST AMT + LAB/MKG SGST AMT + LAB/MKG IGST AMT + 
        //                          PROD CGST AMT + PROD SGST AMT + PROD IGST AMT + OTHER TAX AMT @PRIYANKA-30APR18
        document.getElementById('sttr_tot_tax' + prodCount).value = (parseFloat(document.getElementById('sttr_mkg_cgst_chrg' + prodCount).value) +
                parseFloat(document.getElementById('sttr_mkg_sgst_chrg' + prodCount).value) +
                parseFloat(document.getElementById('sttr_mkg_igst_chrg' + prodCount).value) +
                parseFloat(document.getElementById('sttr_tot_price_cgst_chrg' + prodCount).value) +
                parseFloat(document.getElementById('sttr_tot_price_sgst_chrg' + prodCount).value) +
                parseFloat(document.getElementById('sttr_tot_price_igst_chrg' + prodCount).value) +
                parseFloat(document.getElementById('sttr_other_tax_amt' + prodCount).value)).toFixed(2);

    }

    if (typeof (document.getElementById('sttr_tot_tax' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_tax' + prodCount) != null)) {
        // TOT TAX AMT
        if (document.getElementById('sttr_tot_tax' + prodCount).value == '' ||
            document.getElementById('sttr_tot_tax' + prodCount).value == 'NaN') {
            document.getElementById('sttr_tot_tax' + prodCount).value = 0;
        }
    }

    if (typeof (document.getElementById('sttr_tot_tax' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_tot_tax' + prodCount) != null)) {
        // CALCULATE FINAL VALUATION @PRIYANKA-30APR18
        if (document.getElementById('sttr_tot_tax' + prodCount).value != '') {

            if (typeof (document.getElementById('sttr_final_valuation' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_final_valuation' + prodCount) != null) &&
                typeof (document.getElementById('sttr_valuation' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_valuation' + prodCount) != null) &&
                typeof (document.getElementById('sttr_total_lab_charges' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_total_lab_charges' + prodCount) != null) &&
                typeof (document.getElementById('sttr_tot_tax' + prodCount)) != 'undefined' &&                
                       (document.getElementById('sttr_tot_tax' + prodCount) != null)) {

                // FINAL VALUATION
                document.getElementById('sttr_final_valuation' + prodCount).value = Math_round(parseFloat(parseFloat(document.getElementById('sttr_valuation' + prodCount).value)
                        + parseFloat(document.getElementById('sttr_total_lab_charges' + prodCount).value)
                        + parseFloat(document.getElementById('sttr_tot_tax' + prodCount).value))).toFixed(2);
            }
        }
    }

    if (typeof (document.getElementById('sttr_final_valuation' + prodCount)) != 'undefined' &&                
               (document.getElementById('sttr_final_valuation' + prodCount) != null)) {
        // FINAL VALUATION @PRIYANKA-03MAY18   
        if (document.getElementById('sttr_final_valuation' + prodCount).value == 'NaN') {
            document.getElementById('sttr_final_valuation' + prodCount).value = '0.00';
        }
    }

}
// *************************************************************************************************************************************
// END CODE TO ADD FUNCTION FOR CALCULATIONS @PRIYANKA-30APR18
// *************************************************************************************************************************************

// *************************************************************************************************************************************
// START CODE TO VALIDATE STOCK TRANS FUNCTION @LOVE-07APR2018
// *************************************************************************************************************************************
function stockTransValidationFunc(arrStockFormFieldMandatory, arrStockFormFieldValidationMessage, prodCount) {
    //
    //console.log(arrStockFormFieldMandatory);
    var arrStockFormFieldMandatoryLength = Object.keys(arrStockFormFieldMandatory).length;
    var productCount = '';
    //
    // Check all mandatory fields in loop
    if (prodCount == null || prodCount == '')
        prodCount = 0;
    //
    //alert(document.getElementById('sttr_final_valuation').value);
    for (var p = 0; p <= prodCount; p++) {
        //
        productCount = '';
        //
        for (var i = 0; i < arrStockFormFieldMandatoryLength; i++) {
            //
            if (i > 5 && p != 0 && p != 'undefined')
                productCount = p;
            //
            var alertMessage = "Please Enter ";
            //
//            if (p == 2) {
//                alert('p: ' + p);
//                alert('prodCount: ' + prodCount);
//                alert('productCount: ' + productCount);
//                alert('i: ' + i);
//                alert('arrStockFormFieldMandatory: ' + arrStockFormFieldMandatory[i]);
//                alert(arrStockFormFieldMandatory[i] + productCount);
//            }
            // This validation message contain both validation message and place holder
            var position = arrStockFormFieldValidationMessage[i].lastIndexOf("|");
            //
            // Get only validation message from the full text
            alertMessage = alertMessage + arrStockFormFieldValidationMessage[i].slice(0, position);
            //
            //alert(arrStockFormFieldMandatory[i]);
            if (validateEmptyField(document.getElementById(arrStockFormFieldMandatory[i] + productCount).value, alertMessage) == false) {
                //
                document.getElementById(arrStockFormFieldMandatory[i] + productCount).focus();
                return false;
            }
        }
    }
    return true;
}
// *************************************************************************************************************************************
// END CODE TO VALIDATE STOCK TRANS FUNCTION @LOVE-07APR2018
// *************************************************************************************************************************************
//
// *************************************************************************************************************************************
// START CODE TO AUTO WEIGHT LESS FUNCTION @LOVE-07APR2018
// *************************************************************************************************************************************
function autoLessWeightFunction(prodCount, optionChkdYesNo) {
    var prodCountGlobal = document.getElementById("sttr_noofprod").value;
    //alert(prodCount);
    var cryPanel = 'add';
    //
    var grossWtId = 'sttr_gs_weight';
    var grossWtTypeId = 'sttr_gs_weight_type';
    var remWt = 0;

    //
    if (document.getElementById('sttr_gs_weight' + prodCount).value == '' || document.getElementById('sttr_gs_weight' + prodCount).value == 'NaN')
        document.getElementById('sttr_gs_weight' + prodCount).value = 0;
    //
    var cryGSW = document.getElementById('sttr_gs_weight' + prodCount).value;
    var cryGSWT = document.getElementById('sttr_gs_weight_type' + prodCount).value;
    //
    if (document.getElementById('sttr_gs_weight').value == '' || document.getElementById('sttr_gs_weight').value == 'NaN')
        document.getElementById('sttr_gs_weight').value = 0;
    //
    var itemGSW = parseFloat(document.getElementById('sttr_gs_weight').value);
    var itemGSWT = document.getElementById(grossWtTypeId).value;
    //

    //
    //
    // START CODE TO CALCULATE CRYSTAL GS WT ACCORDING TO CRYSTAL WEIGHT TYPE & METAL WEIGHT TYPE @PRIYANKA-09MAR18
    if (cryGSWT == 'KG') { // CRYSTAL WEIGHT TYPE IN KG
        if (itemGSWT == 'KG') // METAL WEIGHT TYPE IN KG
            cryGSW = cryGSW;
    } else if (cryGSWT == 'GM') { // CRYSTAL WEIGHT TYPE IN GM
        if (itemGSWT == 'KG') // METAL WEIGHT TYPE IN KG
            cryGSW = (cryGSW * 0.001);
        else if (itemGSWT == 'GM') // METAL WEIGHT TYPE IN GM
            cryGSW = cryGSW;
        else if (itemGSWT == 'MG') // METAL WEIGHT TYPE IN MG
            cryGSW = (cryGSW * 1000);
    } else if (cryGSWT == 'MG') { // CRYSTAL WEIGHT TYPE IN MG
        if (itemGSWT == 'GM') // METAL WEIGHT TYPE IN GM
            cryGSW = (cryGSW * 0.001);
        else if (itemGSWT == 'MG') // METAL WEIGHT TYPE IN MG
            cryGSW = cryGSW;
    } else if (cryGSWT == 'CT') { // CRYSTAL WEIGHT TYPE IN CT
        if (itemGSWT == 'KG') // METAL WEIGHT TYPE IN KG
            cryGSW = (cryGSW * 0.0002);
        else if (itemGSWT == 'GM') // METAL WEIGHT TYPE IN GM
            cryGSW = (cryGSW * 0.2);
        else if (itemGSWT == 'MG') // METAL WEIGHT TYPE IN MG
            cryGSW = (cryGSW * 200);
    }
    // END CODE TO CALCULATE CRYSTAL GS WT ACCORDING TO CRYSTAL WEIGHT TYPE & METAL WEIGHT TYPE @PRIYANKA-09MAR18
    //
    //cryGSW = convertCryWeight(cryGSW, itemGSWT, cryGSWT);
    //
    if (cryPanel == 'deleteCry') {
        //
        if (optionChkdYesNo) {
            remWt = parseFloat(itemGSW) + parseFloat(cryGSW);
            document.getElementById(grossWtId).value = parseFloat(remWt).toFixed(3);
            document.getElementById('sttr_nt_weight').value = parseFloat(remWt).toFixed(3);
            changeNetWeightByPktWt();
        }
        //
    } else {
        //
        if (optionChkdYesNo == 'lessFromGrossWt') {
            //
            var gsWt = document.getElementById('sttr_gs_weight').value;
            var gsWtType = document.getElementById('sttr_gs_weight_type').value;
            if (gsWt == '' || gsWt == null) {
                gsWt = 0;
            }
            //
            var pktWt = document.getElementById('sttr_pkt_weight').value;
            var pktWtType = document.getElementById('sttr_pkt_weight_type').value;
            if (pktWt == '' || pktWt == null) {
                pktWt = 0;
            }
            //
            //
            var newNetWT = parseFloat(parseFloat(gsWt) - convertWeight(pktWt, gsWtType, pktWtType)).toFixed(3);
            var newPktWT = convertWeight(pktWt, gsWtType, pktWtType);

            var totCryGSW = 0;
            //
            for (var i = 1; i <= prodCountGlobal; i++) {
                //
                if (typeof (document.getElementById('sttr_gs_weight' + i)) != 'undefined' && document.getElementById('sttr_gs_weight' + i) != null) {
                    var finalNtWt = document.getElementById('sttr_gs_weight').value;
                    var itemGSWT = document.getElementById('sttr_gs_weight_type').value;
                    var cryGSW = document.getElementById('sttr_gs_weight' + i).value;
                    //alert('sttr_gs_weight ==' + document.getElementById('sttr_gs_weight' + i).value);
                    var cryGSWT = document.getElementById('sttr_gs_weight_type' + i).value;
                    //alert('sttr_gs_weight_type ==' + document.getElementById('sttr_gs_weight_type' + i).value);

                    //
                    //alert(document.getElementById('sttr_wt_auto_less' + i).value);
                    if (document.getElementById('sttr_wt_auto_less' + i).value == 'lessFromGrossWt') {
                        // START CODE TO CALCULATE CRYSTAL GS WT ACCORDING TO CRYSTAL WEIGHT TYPE & METAL WEIGHT TYPE @PRIYANKA-10MAR18
                        if (cryGSWT == 'KG') { // CRYSTAL WEIGHT TYPE IN KG
                            if (itemGSWT == 'KG') // METAL WEIGHT TYPE IN KG
                                cryGSW = cryGSW;
                        } else if (cryGSWT == 'GM') { // CRYSTAL WEIGHT TYPE IN GM
                            if (itemGSWT == 'KG') // METAL WEIGHT TYPE IN KG
                                cryGSW = (cryGSW * 0.001);
                            else if (itemGSWT == 'GM') // METAL WEIGHT TYPE IN GM
                                cryGSW = cryGSW;
                            else if (itemGSWT == 'MG') // METAL WEIGHT TYPE IN MG
                                cryGSW = (cryGSW * 1000);
                        } else if (cryGSWT == 'MG') { // CRYSTAL WEIGHT TYPE IN MG
                            if (itemGSWT == 'GM') // METAL WEIGHT TYPE IN GM
                                cryGSW = (cryGSW * 0.001);
                            else if (itemGSWT == 'MG') // METAL WEIGHT TYPE IN MG
                                cryGSW = cryGSW;
                        } else if (cryGSWT == 'CT') { // CRYSTAL WEIGHT TYPE IN CT
                            if (itemGSWT == 'KG') // METAL WEIGHT TYPE IN KG
                                cryGSW = (cryGSW * 0.0002);
                            else if (itemGSWT == 'GM') // METAL WEIGHT TYPE IN GM
                                cryGSW = (cryGSW * 0.2);
                            else if (itemGSWT == 'MG') // METAL WEIGHT TYPE IN MG
                                cryGSW = (cryGSW * 200);
                        }
                        // END CODE TO CALCULATE CRYSTAL GS WT ACCORDING TO CRYSTAL WEIGHT TYPE & METAL WEIGHT TYPE @PRIYANKA-10MAR18

                        totCryGSW += parseFloat(cryGSW);
                        //alert(totCryGSW);
                    }
                }
            }
            //alert(totCryGSW);
            //
            var NetWT = parseFloat(finalNtWt) - parseFloat(totCryGSW);
            //
            if (newPktWT != '' && prodCount <= 1) {
                var newNtWeight = NetWT - newPktWT;
                remWt = newNtWeight;
            } else {
                remWt = NetWT;
            }

            //document.getElementById(grossWtId).value = parseFloat(remWt).toFixed(3);
            document.getElementById('sttr_nt_weight').value = parseFloat(remWt).toFixed(3);

        } else {
            //
            var gsWt = document.getElementById('sttr_gs_weight').value;
            var gsWtType = document.getElementById('sttr_gs_weight_type').value;
            if (gsWt == '' || gsWt == null) {
                gsWt = 0;
            }
            //
            var pktWt = document.getElementById('sttr_pkt_weight').value;
            var pktWtType = document.getElementById('sttr_pkt_weight_type').value;
            if (pktWt == '' || pktWt == null) {
                pktWt = 0;
            }
            //
            //
            var newNetWT = parseFloat(parseFloat(gsWt) - convertWeight(pktWt, gsWtType, pktWtType)).toFixed(3);
            var remNTWt;
            remNTWt = parseFloat(itemGSW) + parseFloat(cryGSW);
            //
            if (newNetWT == remNTWt) {
                remWt = parseFloat(itemGSW) + parseFloat(cryGSW);
            } else {
                var finalNtWt = document.getElementById('sttr_nt_weight').value;
                remWt = parseFloat(finalNtWt) + parseFloat(cryGSW);
            }
            //
            //document.getElementById(grossWtId).value = parseFloat(remWt).toFixed(3);
            document.getElementById('sttr_nt_weight').value = parseFloat(remWt).toFixed(3);
        }
        //
//        if (sellPanel == 'AddStock') {
//            if (document.getElementById('suppPanelName').value == 'AddSuppStock') {
//                addInvoiceValue();
//            } else {
//                calStockItemPrice();
//            }
//        } else if (sellPanel == 'ItemSell') {
//            calculateSellPrice();
//        } else {
//            calculateWhSellLotPrice();
//        }
    }
}
// *************************************************************************************************************************************
// END CODE TO AUTO WEIGHT LESS FUNCTION @LOVE-07APR2018
// *************************************************************************************************************************************

function stock_transaction_delete_operation(operation, sttrId, transType, indicator, div, panelName) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("stockPreviousProdDetails").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omadformdata_2_6_72.php?operation=" + operation + "&sttrId=" + sttrId
            + "&transType=" + transType + "&indicator=" + indicator + "&panelName=" + panelName, true);
    xmlhttp.send();
}

function stock_transaction_update_operation(sttrId, transType, operation, panelName, indicator, div) {
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("addStockMainDiv").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    xmlhttp.open("POST", "include/php/omUniversalForm.php?operation=" + operation + "&sttrId=" + sttrId
            + "&transType=" + transType + "&indicator=" + indicator + "&panelName=" + panelName, true);
    xmlhttp.send();
}
