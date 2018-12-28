document.getElementById("search").onclick = function (){ showHide ()};

// expert suggestion element hidden at first
document.getElementById("field_set3").style.visibility = "hidden";

// show the expert suggestion text if cheked is matched
function showHide() {
    var room = document.getElementById("bath");
    var loc = document.getElementById("qc");
    var expert = document.getElementById("field_set3");

    var checked = room.checked && loc.checked;

    // display if checked
    if (checked) {
        expert.style.visibility = "visible";
    }
    else {
        expert.style.visibility = "hidden";
    }
}
// hide expert suggestion on reset    
document.getElementById("startOver").onclick = function () {
    document.getElementById("field_set3").style.visibility = "hidden";
}


