function $(selector) {
    return document.querySelector(selector);
}

window.addEventListener('load', onLoadEventListener, true);

function onLoadEventListener() {
    var now = new Date();
    var hours = now.getHours();
    var s = '';
    if ((hours < 12) && (hours >= 6)) {
        s = ('Szia, reggel van, dobj be egy kávét vagy teát!');
    } else if ((hours >= 12) && (hours < 19)) {
        s = ('Szia, már délután van, menj ki a friss levegőre!');
    } else if ((hours >= 19) && (hours < 24)) {
        s = ('Szia, már este van, tessék készülődni alváshoz!');
    } else {
        s = ('Szia, már régen aludnod kéne, mars az ágyba!');
    }
    $('#timeDiv').innerHTML = s;
}