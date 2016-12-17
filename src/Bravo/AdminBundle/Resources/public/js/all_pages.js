function MM_effectAppearFade(targetElement, duration, from, to, toggle) {
    Spry.Effect.DoFade(targetElement, {duration: duration, from: from, to: to, toggle: toggle});
}

function getDocHeight() {
    var D = document;
    return Math.max(
        Math.max(D.body.scrollHeight, D.documentElement.scrollHeight),
        Math.max(D.body.offsetHeight, D.documentElement.offsetHeight),
        Math.max(D.body.clientHeight, D.documentElement.clientHeight)
    );
}

function getDocYScroll() {
    var ScrollTop = document.body.scrollTop;
    if (ScrollTop == 0) {
        if (window.pageYOffset)
            ScrollTop = window.pageYOffset;
        else
            ScrollTop = (document.body.parentElement) ? document.body.parentElement.scrollTop : 0;
    }
    return ScrollTop;
}

function makeNewDiv(id) {
    var div = document.getElementById(id);
    if (div == null) {
        var div = document.createElement('div');
        div.setAttribute('id', id);
        document.body.appendChild(div);
    }
    return div;
}

function showDialog(srcObj) {
    ModalDialog.show(srcObj);
    return;
    var srcYpos = getDocYScroll() + 80;

    var divObj = document.createElement("div");
    divObj.setAttribute("id", "_modalDialog");
    divObj.style.left = "0px";
    divObj.style.top = "0px";
    divObj.style.width = "100%";
    divObj.style.height = getDocHeight() + "px";
    divObj.style.position = "absolute";
    divObj.style.display = "block";
    divObj.style.zIndex = "2000";
    divObj.style.textAlign = "center";
    srcObj.style.marginTop = srcYpos + "px";
    srcObj.style.zIndex = "2001";
    srcObj.style.display = "block";
    document.body.appendChild(divObj);
    divObj.appendChild(srcObj);

    var divObj = document.createElement("div");
    document.body.appendChild(divObj);
    divObj.setAttribute("id", "_modalDialogBg");
    divObj.style.opacity = "0.5";
    divObj.style.filter = "alpha(opacity=50)";
    divObj.style.backgroundColor = "#000000";
    divObj.style.left = "0px";
    divObj.style.top = "0px";
    divObj.style.width = "100%";
    divObj.style.height = getDocHeight() + "px";
    divObj.style.position = "absolute";
    divObj.style.display = "block";
    divObj.style.zIndex = "1999";
    document.body.style.overflow = "hidden"
}

function hideDialog() {
    ModalDialog.hide();
    return;
    var divObj = document.getElementById("_modalDialog");
    if (divObj == null) {
        return;
    }
    if (divObj.childNodes.length <= 0) {
        return;
    }
    var child = divObj.childNodes.item(0);
    child.style.display = "none";
    document.body.appendChild(child);
    document.body.removeChild(divObj);
    document.body.style.overflow = ""
    var divObj = document.getElementById("_modalDialogBg");
    document.body.removeChild(divObj);
    document.body.style.overflow = "auto"
}

ModalDialog = function (idMod, srcObj, srcButton) {
    this.idMod = idMod;
    this.display = null;
    this.background = null;
    this.srcObj = srcObj;
    this.srcButton = srcButton;
}

ModalDialog.prototype.create = function () {
    if (typeof this.srcButton != "undefined") {
        this.srcButton.disabled = true;
    }
    var divObj = makeNewDiv("_modalDialog_" + this.idMod);
    this.setProperties(divObj);
    divObj.appendChild(this.srcObj);

    var bgDivObj = makeNewDiv("_modalDialogBg_" + this.idMod);
    this.setBgProperties(bgDivObj);

    this.display = divObj;
    this.background = bgDivObj;
    ModalDialog.holderDiv.appendChild(this.display);
    ModalDialog.holderDiv.appendChild(this.background);
}

ModalDialog.prototype.destroy = function () {
    if (typeof this.srcButton != "undefined") {
        this.srcButton.disabled = false;
    }
    if (this.display == null) {
        return;
    }
    while (this.display.childNodes.length > 0) {
        var child = this.display.childNodes.item(0);
        child.style.display = "none";
        ModalDialog.holderDiv.appendChild(child);
    }
    ModalDialog.holderDiv.removeChild(this.display);
    ModalDialog.holderDiv.removeChild(this.background);
}

ModalDialog.prototype.setProperties = function (divObj) {
    var srcYpos = getDocYScroll() + 80;
    divObj.style.left = "0px";
    divObj.style.top = "0px";
    divObj.style.width = "100%";
    divObj.style.height = '100%';
    divObj.style.position = "fixed";
    divObj.style.display = "block";
    divObj.style.zIndex = 2000 + this.idMod * 5;
    divObj.style.textAlign = "center";
    this.srcObj.style.position = "relative";
    this.srcObj.style.marginTop = "80px";
    this.srcObj.style.zIndex = 2001 + this.idMod * 5;
    this.srcObj.style.display = "block";
}

ModalDialog.prototype.setBgProperties = function (divObj) {
    divObj.style.opacity = "0.5";
    divObj.style.filter = "alpha(opacity=50)";
    divObj.style.backgroundColor = "#000000";
    divObj.style.left = "0px";
    divObj.style.top = "0px";
    divObj.style.width = '100%';
    divObj.style.height = '100%';
    divObj.style.position = "fixed";
    divObj.style.zIndex = 1999 + this.idMod * 5;
}

ModalDialog.dialogStack = [];
ModalDialog.holderDiv = null;

ModalDialog.configureHolder = function () {
    var divObj = makeNewDiv("_modalDialog_holder");

    divObj.style.zIndex = 1000;
    divObj.style.width = '100%';
    divObj.style.height = '100%';
    ModalDialog.holderDiv = divObj;
}

ModalDialog.show = function (srcObj, srcButton) {
    if (ModalDialog.holderDiv == null) {
        ModalDialog.configureHolder();
    }
    var idMod = ModalDialog.dialogStack.length;
    var dialog = new ModalDialog(idMod, srcObj, srcButton);
    dialog.create();
    ModalDialog.dialogStack.push(dialog);
    if (idMod == 0) {
        //document.body.style.overflow = "hidden"
    }
}

ModalDialog.hide = function () {
    if (ModalDialog.dialogStack.length == 0) {
        return;
    }
    var dialog = ModalDialog.dialogStack.pop();
    dialog.destroy();

    if (ModalDialog.dialogStack.length == 0) {
        //document.body.style.overflow = "auto"
    }
}

function isEscape(e) {
    var keycode;
    if (window.event) {
        keycode = window.event.keyCode;
    } else if (e) {
        keycode = e.which;
    } else {
        return false;
    }
    if (keycode == 27) {
        return true;
    }
    return false;
}
function isEnter(e) {
    var keycode;
    if (window.event) {
        keycode = window.event.keyCode;
    } else if (e) {
        keycode = e.which;
    } else {
        return false;
    }
    if (keycode == 13 || keycode == 10) {
        return true;
    }
    return false;
}

function addOnLoadHook(func) {
    var __wOnload = window.onload;
    window.onload = function () {
        if (typeof __wOnload == 'function') {
            __wOnload();
        }
        func();
    }
}

addOnLoadHook(
    function () {
        window.onkeypress = function () {
            if (isEscape(window.event)) {
                if (document.getElementById('_modalDialog_0')) {
                    hideDialog();
                }
            }
        }
    }
);