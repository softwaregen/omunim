/**************Start code to item sold out list @Author:DEEP08JUL14*******************/
/**************Start code to add panel @Author:PRIYA06APR15*******************/
/**************Start code to upadte customizedImtInvoice @Author:GAUR19SEP16*******************/
/**************Start code to upadte soldOutImtInv @Author:GAUR18OCT16*******************/
/**************Start code to upadte soldOutImtInv @Author:GAUR19OCT16*******************/
//************Start code to purchase invoice Customise @Author:SANT17DEC16**********/-->
function getMainSellPurchasePanel(panel)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById("main_ajax_loading_div").style.visibility = "hidden";
            document.getElementById("slPrCurrentInvoice").innerHTML = xmlhttp.responseText;
        } else {
            document.getElementById("main_ajax_loading_div").style.visibility = "visible";
        }
    };
    if (panel == 'soldOutList' || panel == 'returnedList')
        xmlhttp.open("GET", "include/php/ogspsldt.php?panel=" + panel, true);
    else if (panel == 'soldOutInv')
        xmlhttp.open("GET", "include/php/ogspsblt.php?panel=" + panel, true);
    else if (panel == 'soldOutImtInv')
        xmlhttp.open("GET", "include/php/ogsipsblt.php?panel=" + panel, true);
    else if (panel == 'soldOutImtList')
        xmlhttp.open("GET", "include/php/ogspisldt.php?panel=" + panel, true);
    else if (panel == 'customizedInvoice')
        xmlhttp.open("GET", "include/php/omcuform.php?panel=" + panel, true);
    else if (panel == 'customizedPurInvoice')
        xmlhttp.open("GET", "include/php/omcpform.php?panel=" + panel, true);
    else if (panel == 'customizedImtInvoice')
        xmlhttp.open("GET", "include/php/omimtcufm.php?panel=" + panel, true);
    else if (panel == 'customizedCryInvoice')
        xmlhttp.open("GET", "include/php/ogcrcufm.php?panel=" + panel, true);
    else if (panel == 'CrystalSoldOutList')
        xmlhttp.open("GET", "include/php/ogcrspst.php?panel=" + panel, true);
    else
        xmlhttp.open("GET", "include/php/ogspsblt.php", true);
    xmlhttp.send();
}
//************End code to purchase invoice Customise @Author:SANT17DEC16**********/-->
/**************End code to upadte soldOutImtInv @Author:GAUR19OCT16*******************/
/**************End code to upadte customizedImtInvoice @Author:GAUR19SEP16*******************/
/**************End code to add panel @Author:PRIYA06APR15*******************/
/*****************Start code to chnage param name @Author:PRIYA05OCT14**************/
/*****************Start code to add soldoutPanel @Author:GAUR19OCT16**************/
function numberOfRowsEPanel(documentRootPath, rowsPerPage, selFirmId, sortKeyword, pageNum, panel, searchColumn, searchValue, updateRows, soldoutPanel)
{
    loadXMLDoc();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            //document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "hidden";
            //document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "visible";
            document.barcode_search.barcode_text.focus();
            document.getElementById("slPrCurrentInvoice").innerHTML = xmlhttp.responseText;
        } else {
            //document.getElementById("ajaxLoadNextGirviPanelList").style.visibility = "visible";
            //document.getElementById("ajaxLoadNextGirviPanelListButt").style.visibility = "hidden";
        }
    };
    if (soldoutPanel == 'soldOutImtList') {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogspisldt.php?rowsPerPage=" + rowsPerPage + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&page=" + pageNum + "&panel=" + panel + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&updateRows=" + 'updateImtRows', true);
    } else {
        xmlhttp.open("POST", "http://" + documentRootPath + "/include/php/ogspsldt.php?rowsPerPage=" + rowsPerPage + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&page=" + pageNum + "&panel=" + panel + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&updateRows=" + 'updateRows', true);
    }
    xmlhttp.send();
}
/*****************END code to add soldoutPanel @Author:GAUR19OCT16**************/
//**************End code to item sold out list @Author:DEEP08JUL14*******************/
//**************Start code to item sold out list @Author:DEEP12JUL14*******************/
/***************Start code to add div @Author:PRIYA11OCT14**************************/
/***************Start code to change id @Author:PRIYA13JAN15***********************/
/***************Start code to add condition for repair list items @Author:SHRI10JAN15**************************/
/***************Start code to add condition for crystalpurchaselist @Author:PRIYA24FEB15*****************/
/***************Start code to add condition for RAw Item @Author:SHE13JAN16*****************/
/*********Start to add condition for wholesale and retail list @Author:SHRI05APR16******************/
/*********Start to add condition for raw stock and detail list @Author:SHE06APR16******************/
/*********Start to UPDATE @Author:GAUR19OCT16******************/
function showSelectPage(pageNo, panel, rowsPerPage, noOfPagesAsLink, selFirmId, sortKeyword, searchColumn, searchValue, div, panelName) {
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

                document.getElementById(div).innerHTML = xmlhttp.responseText;
                if (pageNo >= 10) {

                    setPageValue(pageNo, noOfPagesAsLink);
                } else {
                    document.getElementById('pageNoTextField' + pageNo).setAttribute("class", "currentPageNoButton");
                }
            } else {
                document.getElementById("main_ajax_loading_div").style.visibility = "visible";
            }
        };
        if (panel == 'soldOutList' || panel == 'returnedList') {
            xmlhttp.open("POST", "include/php/ogspsldt.php?page=" + pageNo + "&empLoginId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true);
        } else if (panel == 'soldOutImtList') {
            xmlhttp.open("POST", "include/php/ogspisldt.php?page=" + pageNo + "&empLoginId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true); //add panel Imitation @Author: GAUR19OCT16
        } else if (panel == 'StockList') {
            xmlhttp.open("POST", "include/php/ogilsbdv.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true); //add panel Imitation @Author:ANUJA17Feb15
        } else if (panel == 'ImitationStockList') {
            xmlhttp.open("POST", "include/php/ogilsbdv.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel + "&stockPanel=ImitationStock", true); //add panel Imitation @Author:ANUJA17Feb15
        } else if (panel == 'PurchaseList') {
            xmlhttp.open("POST", "include/php/ogwaprlt.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true); // filename changed @Author:SHRI05APR16
        } else if (panel == 'CrystalPurchaseList') {
            xmlhttp.open("POST", "include/php/ogcrprlt.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true);
        } else if (panel == 'ItemSoldInvoice') {
            xmlhttp.open("POST", "include/php/ogspsblt.php?page=" + pageNo + "&empLoginId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true);
        } else if (panel == 'soldOutImtInv') {
            xmlhttp.open("POST", "include/php/ogsipsblt.php?page=" + pageNo + "&empLoginId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true);  //add panel Imitation @Author: GAUR19OCT16
        } else if (panel == 'StockPanel') {
            xmlhttp.open("POST", "include/php/ogismnlt.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true);
        } else if (panel == 'ItemRepairList') {
            xmlhttp.open("POST", "include/php/ogrpilst.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true);
        }
        else if (panel == 'RawMetalList') {
            xmlhttp.open("POST", "include/php/ogrmcslt.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true);
        } else if (panel == 'WholeSalePurchaseList') {
            xmlhttp.open("POST", "include/php/ogwtprlt.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true);
        } else if (panel == 'RetailPurchaseList') {
            xmlhttp.open("POST", "include/php/ogrtprlt.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true);
        }
        else if (panel == 'RawDetailMetalListDet') {
            xmlhttp.open("POST", "include/php/ogrmsdlt.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel, true);
        } else if (panel == 'WholeSaleStockList') {
            xmlhttp.open("POST", "include/php/ogwastlt.php?page=" + pageNo + "&selFirmId=" + selFirmId + "&sortKeyword=" + sortKeyword + "&searchColumn=" + searchColumn + "&searchValue=" + searchValue + "&searchValue=" + searchValue +
                    "&panel=" + panel + "&panelName=" + panelName, true);
        }
        xmlhttp.send();
    }
}
/*********End to UPDATE @Author:GAUR19OCT16******************/
/*********End to add condition for raw stock and detail list @Author:SHE06APR16******************/
/*********End to add condition for wholesale and retail list @Author:SHRI05APR16******************/
/***************End code to add condition for RAw Item @Author:SHE13JAN16*****************/
/***************End code to add condition for crystalpurchaselist @Author:PRIYA24FEB15*****************/
/***************End code to add div @Author:PRIYA11OCT14**************************/
/***************End code to change id @Author:PRIYA13JAN15***********************/
/***************End code to add div @Author:PRIYA11OCT14**************************/
//**************End code to item sold out list @Author:DEEP12JUL14*******************/
/***************End code to chnage param name @Author:PRIYA05OCT14**************/