
var timerObj, newWindow;

function openDetailsPopUpWindow(url, newtitle) {

    var goodURL = unescape(encodeURIComponent(url));

//    $("<a>").attr("href", goodURL).attr("target", "_blank")[0].click();

    window.open(goodURL);
    return false;
}

function openFichiersPopUpWindow(url, newtitle) {
    newWindow = window.open(unescape(encodeURIComponent(url)),
            '_blank', 'width=1000, height=500, titlebar=no, location=no, menubar=no, toolbar=no, resizable=yes, top=50% left=50%;',
            true);

    newWindow.onload = function () {
        this.document.title = newtitle;
        //this.document.getElementByTagName('body').setAttributes('onunload','javascript:refreshParent()
    };
}

function openArchives() {
    newWindow = window.open('file://192.168.35.210/share/arch_agence/Bron/',
            '_blank', 'width=1000, height=500, titlebar=no, location=no, menubar=no, toolbar=no, resizable=no, top=50% left=50%;',
            true);
    newWindow.onload = function () {
        this.document.location = 'file://192.168.35.210/share/arch_agence/Bron/';

    };
}
