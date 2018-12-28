// calculate price based on the quantity of each items
function calculateTotal() 
{
    // pizza
    var pizzaQuantity = document.getElementById("pizza").value;

    if (pizzaQuantity == "" || isNaN(pizzaQuantity)) {
        alert("Please enter quantity of pizza")
    }
    else {
        pizzaPrice = pizzaQuantity * 19.5;
    }
    // burger
    burgerQuantity = document.getElementById("burger").value;
    if (burgerQuantity == "" || isNaN(burgerQuantity)) {
        alert("Please enter quantity of burger")
    }
    else {
        burgerPrice = burgerQuantity * 15.5;
    }
    
    // salad
    saladQuantity = document.getElementById("salad").value;
    if (saladQuantity == "" || isNaN(saladQuantity)) {
        alert("Please enter quantity of salad")
    }
    else {
        saladPrice = saladQuantity * 10.0;
    }

    // soup
    soupQuantity = document.getElementById("soup").value;
    if (soupQuantity == "" || isNaN(soupQuantity)) {
        alert("Please enter quantity of soup")
    }
    else {
        soupPrice = soupQuantity * 5.0;
    }

    // total price 
    total = pizzaPrice + burgerPrice + saladPrice + soupPrice;

    // display results
    document.getElementById("results").innerHTML = "<span>Pizza (Quantity = " + pizzaQuantity + "):</span> $" + pizzaPrice + "<br/>"
    + "<span>Burger (Quantity = " + burgerQuantity + "):</span> $" + burgerPrice + "<br/>"
    + "<span>Salad (Quantity = " + saladQuantity + "):</span> $" + saladPrice + "<br/>"
    + "<span>Soup (Quantity = " + soupQuantity + "):</span> $" + soupPrice + "<br/><br/>"
    + "<span>Final Total:</span> $" + total; 
}