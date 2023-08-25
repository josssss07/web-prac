
$(document).ready(function () {
    console.log("Document ready"); // Check if this is logged

    $("#btnCalc").click(function () {
        console.log("Calculate button clicked"); // Check if this is logged

        // Calculate the unit cost based on coffee type
        var unitCost = 0.0;

        {if ($("#optRegular").prop("checked")) {
            unitCost = 15.5;
        } else if ($("#optFilter").prop("checked")) {
            unitCost = 20.5;
        } else if ($("#optCappuccino").prop("checked")) {
            unitCost = 25;
        } else if ($("#optLatte").prop("checked")) {
            unitCost = 30;
        } 
    }
        // ... Add more coffee types here ...

        console.log("Unit cost: " + unitCost); // Check the value of unitCost

        // Get the user's input
        var amount = parseFloat($('#txtQuant').val());
        if (isNaN(amount)) {
            amount = 0;
        }
        var selectedSize = $("#coffeeSize").val();
        var selectedFlavor = $("#coffeeFlavor").val();

        console.log("Amount: " + amount); // Check the value of amount
        console.log("Selected size: " + selectedSize); // Check the value of selectedSize
        console.log("Selected flavor: " + selectedFlavor); // Check the value of selectedFlavor

        // Calculate size and flavor multipliers
        var sizeMultiplier = 1.0;
        var flavorMultiplier = 1.0;

        if (selectedSize === "medium") {
            sizeMultiplier = 1.2;
        } else if (selectedSize === "large") {
            sizeMultiplier = 1.5;
        }

        if (selectedFlavor === "vanilla") {
            flavorMultiplier = 1.2;
        } else if (selectedFlavor === "chocolate") {
            flavorMultiplier = 1.3;
        } else if (selectedFlavor === "caramel") {
            flavorMultiplier = 1.4;
        }

        console.log("Size multiplier: " + sizeMultiplier); // Check the value of sizeMultiplier
        console.log("Flavor multiplier: " + flavorMultiplier); // Check the value of flavorMultiplier

        // Calculate the total price
        var pprice=unitCost * sizeMultiplier * flavorMultiplier;
        var total = amount * unitCost * sizeMultiplier * flavorMultiplier;
        total = total.toFixed(2);

        console.log("Total: " + total); // Check the value of total
        $('#txtPrice').val(pprice);
        // Update the total field
        $('#txtTotal').val(total);
    });

    // Code for displaying the cookie
    $("#freebie").click(function () {
        console.log("Freebie clicked"); // Check if this is logged
        $("#cookie").slideToggle("slow");
    });
});