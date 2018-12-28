// function to validate numeric input
function validateAmount(input) 
{
    if (isNaN(input) || input === "") 
    {
        alert("Please enter numeric value");
        return false;
    }
    return true;
}

// account balance
var balance = 400;

// function to calculate balance
function withdrawAmount() 
{
    var bankFee = 0.5;
    var inputAmount = Number(document.getElementById("myAmount").value);

    var isValid = validateAmount(inputAmount);

    // amount divisible by 20
    var incorrectAmount = (inputAmount % 20 != 0 || inputAmount <= 0);

    // incorrect amount
    if (incorrectAmount && isValid) 
    {
        alert("Incorrect withdrawal amount");
    }

    var withdrawCharge = inputAmount + bankFee;
    var insuffFunds = withdrawCharge > balance;

    // issufficient funds
    if (insuffFunds && !incorrectAmount && isValid) 
    {
        alert("Insufficient funds")
    }

    // valid, correct and sufficient
    if (!insuffFunds && !incorrectAmount && isValid) 
    {
        balance -= withdrawCharge;
        alert("Succesful transaction! \nCurrent balance is: $" + balance);
    }
}