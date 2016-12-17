/*
 Any code including this script must define within it the following 2 functions:

 function httpCallSuccess(responseData); Ajax calls this functions when the requested page has completed loading successfully
 function httpCallFailure(requestStatus); If the ajax page call failed this function is called
 function ajaxShowLoading();	When post request occurs this funcion is called it should let user know that page is loading
 function ajaxHideLoading(); This function is called when request completes, it should hide the loading message
 quickpaste
 function httpCallSuccess(responseData){
 var parts = responseData.split("~:~");
 if(parts[0] == 1){ //success
 switch(parts[1]){
 case 'id': break; //do something for callid id
 }
 }else{ //failure
 switch(parts[1]){
 case 'id': break; //do something for callid id
 }
 }
 }
 function httpCallFailure(requestStatus){
 alert("Failed: " + requestStatus);
 }
 function ajaxShowLoading(){

 }
 function ajaxHideLoading(){

 }
 */
var http_request = false;
function ajaxSubmitForm(frm, callId) {
    var allFields = frm.getElementsByTagName("*");
    var url = frm.getAttribute("action");
    if (url == null) {
        httpCallFailure("Invalid action");
    }
    var args = "ajax=1";
    if (typeof callId != 'undefined') {
        args = "ajax=" + encodeURI(callId);
    }
    for (var i = 0; i < allFields.length; i++) {
        var name = allFields[i].getAttribute("name");
        if (name != null) {
            var fieldType = allFields[i].getAttribute("type");
            if (typeof fieldType == 'undefined' || fieldType == null) {
                fieldType = "";
            }
            if (fieldType.toLowerCase() == "checkbox" || fieldType.toLowerCase() == "radio") {
                if (allFields[i].checked) {
                    args += "&" + encodeURI(name) + "=" + encodeURI(allFields[i].value);
                }
            } else {
                args += "&" + encodeURI(name) + "=" + encodeURI(allFields[i].value);
            }
        }
    }
    doAjaxHttpPost(url, args);
}
function ajaxHttpPost(url, parameters, callId) {
    var arg = "ajax=1";
    if (typeof callId != 'undefined') {
        arg = "ajax=" + encodeURI(callId);
    }
    doAjaxHttpPost(url, arg + "&" + parameters);
}
function doAjaxHttpPost(url, parameters) {
    http_request = false;
    if (window.XMLHttpRequest) { // Mozilla, Safari,...
        http_request = new XMLHttpRequest();
        if (http_request.overrideMimeType) {
            // set type accordingly to anticipated content type
            //http_request.overrideMimeType('text/xml');
            http_request.overrideMimeType('text/html');
        }
    } else if (window.ActiveXObject) { // IE
        try {
            http_request = new ActiveXObject("Msxml2.XMLHTTP");
        } catch (e) {
            try {
                http_request = new ActiveXObject("Microsoft.XMLHTTP");
            } catch (e) {
            }
        }
    }
    if (!http_request) {
        return false;
    }
    ajaxShowLoading();

    http_request.onreadystatechange = requestProgress;
    http_request.open('POST', url, true);
    http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    http_request.setRequestHeader("Content-length", parameters.length);
    http_request.setRequestHeader("Connection", "close");
    http_request.send(parameters);
    return true;
}

function requestProgress() {
    if (http_request.readyState == 4) {
        ajaxHideLoading();
        if (http_request.status == 200) {
            httpCallSuccess(http_request.responseText);
        } else {
            httpCallFailure(http_request.status);
        }
    }
}

function processajaxHTML(serverPage, destObject, getOrPost, data) {
    //Get an XMLHttpRequest object for use.
    var xmlhttp = getxmlhttp();
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4) {
            if (xmlhttp.status == 200) {
                destObject.innerHTML = xmlhttp.responseText;
            } else {
                destObject.innerHTML = '<h3 style="color:#F00">Connection Error: ' + xmlhttp.status + '</h3>';
            }
        }
    }
    if (getOrPost.toLowerCase() == 'get') {
        xmlhttp.open("GET", serverPage + "?" + data);
        xmlhttp.send(null);
    } else {
        xmlhttp.open("POST", serverPage, true);
        xmlhttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8");
        xmlhttp.send(data);
    }
}

//get the XMLHttp Object
function getxmlhttp() {
    //Create a boolean variable to check for a valid IE active x instance.
    var xmlhttp = false;

    //Check if we are using internet explorer
    try {
        //If the javascript version is greater than 5
        xmlhttp = new ActiveXObject("Msxml2.XMLHTTP");
    } catch (e) {
        //If not, then use the older active x object
        try {
            //If we are using internet explorer
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        } catch (E) {
            //Else we must be using a non-internet explorer browser.
            xmlhttp = false;
        }
    }

    // If not using IE, create a
    // JavaScript instance of the object.
    if (!xmlhttp && typeof XMLHttpRequest != 'undefined') {
        xmlhttp = new XMLHttpRequest();
    }

    return xmlhttp;
}