// searches any occurences of the characters in text field
function searchOccurrences() {
    searchStr = document.getElementById("searchString").value;
    ch = document.getElementById("characters").value;

    var count = 0;

    // if no text entered
    if (searchStr.length == 0) {
        alert("You did not enter your text.\nPlease enter your text.");
        throw new Error("Exit!");
    }

    // if less than or more than 2 characters are entered
    if (ch.length > 2 || ch.length < 2) {
        alert("You did not enter 2 characters. \nPlease enter only 2 characters!");
        throw new Error("Exit!");
    }

    // get the 2 characters
    for (var i = 0; i < searchStr.length - 1; i++) {
        var firstLetter = searchStr.charAt(i);
        var secondLetter = searchStr.charAt(i + 1);

        var actualPattern = firstLetter + secondLetter;

        // increment count if pattern match
        if (actualPattern === ch) {
            count++
        }
    }

    var outResult = "";

    // pattern not found
    if (count == 0) {
        outResult = "Results: <br/> The characters pattern '" + ch + "' was not found";
    }
    // pattern found
    else {
        outResult = "Results: <br/>" + count + " occurrence(s) of '" + ch + "' found";
    }
    // display result
    document.getElementById("output").innerHTML = outResult;
}

// reset form
function startOver() {
    document.getElementById("output").innerHTML = "";
    document.getElementById("searchString").value = "";
    document.getElementById("characters").value = "";
}