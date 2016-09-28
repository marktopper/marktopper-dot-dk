function toL33T() {
    var textNodes = document.getNodesByType(3);
    for(var i = 0; i < textNodes.length; i += 1) {
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/a/g, "4");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/A/g, "4");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/e/g, "3");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/E/g, "3");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/g/g, "6");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/G/g, "6");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/i/g, "1");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/I/g, "1");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/o/g, "0");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/O/g, "0");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/s/g, "5");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/S/g, "5");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/t/g, "7");
        textNodes[i].nodeValue = textNodes[i].nodeValue.replace(/T/g, "7");
    }
}