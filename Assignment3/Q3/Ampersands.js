// get the text to be converted
function getElementAmpersand() 
{
    dom = document.getElementById("field");
    dom.addEventListener("blur", convertAmpersands, false);
}

// convert every instance of ampersand in the text to and 
function convertAmpersands() 
{
    var str = dom.value;

    // replace every instance of "&" to " and " in the text fields
    res = str.replace(/&/g, " and "); 

    // display result
    document.getElementById("result").value = res;
}

// load EventListener and functions
window.addEventListener("load", getElementAmpersand, false);
