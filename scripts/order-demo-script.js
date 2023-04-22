var basket = document.getElementById("basket");
var itemsInBasket = document.getElementById("items-in-basket");
var payButton = document.getElementById("pay-button");
var resetButton = document.getElementById("reset-button");
var overlay = document.getElementById("basket-overlay");
var basketCount = document.getElementById("basketCount");
var removeBtn = document.getElementsByClassName("minusBtn");

function openBasket() {
    basket.classList.add("show");
    overlay.style.display = "block";
}

function closeBasket() {
    basket.classList.remove("show");
    overlay.style.display = "none";

}

function updateBasket(itemName, itemAmount) {
    var items = document.querySelectorAll("#items-in-basket tr");
    var itemFound = false;

    for (var i = 0; i < items.length; i++) {
        if (items[i].querySelector(".in-basket").textContent === itemName) {
            var quantity = items[i].querySelector(".item-count");
            quantity.textContent = parseInt(quantity.textContent) + itemAmount;
            itemFound = true;
            break;
        }
    }

    if (!itemFound) {
        // Create the table
        var item = document.createElement("tr");
        // Create the name/amount of the item and add into the table
        var nameCell = document.createElement("td");
        nameCell.textContent = itemName;
        nameCell.classList.add("in-basket");
        item.appendChild(nameCell);
        var countCell = document.createElement("td");
        countCell.textContent = itemAmount;
        countCell.classList.add("item-count");
        item.appendChild(countCell);
        // Create the button to remove item
        var minusCell = document.createElement("button");
        minusCell.textContent = "✖";
        minusCell.setAttribute("id", "minusBtn");
        minusCell.setAttribute("onclick", "remove()");
        item.appendChild(minusCell);
        document.getElementById("items-in-basket").appendChild(item);
    }

}


function order() {
    var itemName = event.currentTarget.querySelector(".item-name").textContent;
    overlay.style.display = "block";
    // Create amount selection element
    const amountSele = document.createElement("div");
    amountSele.classList.add("amountSele");
    amountSele.textContent = "Amount:";
    // Create the input element (Number)
    amountInput = document.createElement("input");
    amountInput.setAttribute("type", "number");
    amountInput.setAttribute("id", "itemAmount");
    amountInput.setAttribute("value", 1);
    amountInput.setAttribute("oninput", "validity.valid||(value='')")
    amountInput.setAttribute("min", 1);
    amountInput.setAttribute("max", 20);
    amountSele.appendChild(amountInput);
    // Create the submit button
    amountSub = document.createElement("input");
    amountSub.setAttribute("value", "Order");
    amountSub.setAttribute("type", "submit");
    amountSub.addEventListener("click", function () {
        // Get selected amount and update basket
        var itemAmount = parseInt(document.getElementById("itemAmount").value);
        console.log(itemAmount);
        if (itemAmount > 0 && itemAmount != NaN) {
            if (parseInt(basketCount.textContent) + itemAmount > 20) {
                amountSele.parentNode.removeChild(amountSele);
                overlay.style.display = "none";
                alert("20 Orders per person!");
                return;
            }
        } else {
            alert("Can't be empty");
            return;
        }
        
        
        updateBasket(itemName, itemAmount);
        // Counter after the basket
        basketCount.textContent = parseInt(basketCount.textContent) + itemAmount;
        // Visual effect
        document.getElementById("basketBtn").classList.add("flash");
        setTimeout(function () {
            document.getElementById("basketBtn").classList.remove("flash");
        }, 500);
        // Show notification
        const notification = document.createElement('div');
        notification.textContent = 'Item added to basket';
        notification.classList.add('notification');
        notification.classList.add('swipeup');
        document.body.appendChild(notification);
        // Remove notification after a delay
        setTimeout(() => {
            document.body.removeChild(notification);
        }, 1000);
        // Close amount selection element
        amountSele.parentNode.removeChild(amountSele);
        overlay.style.display = "none";
    });
    amountSele.appendChild(amountSub);
    document.body.appendChild(amountSele);
}


function remove() {
    var tr = event.target.parentNode;
    var quantity = tr.querySelector(".item-count");
    var count = parseInt(quantity.textContent);
    if (count > 1) {
        quantity.textContent = count - 1;
    } else {
        tr.parentNode.removeChild(tr);
    }
    basketCount.textContent = document.querySelectorAll("#items-in-basket tr").length;
}

document.getElementById("basketBtn").addEventListener("click", openBasket);
document.getElementById("basket-close").addEventListener("click", closeBasket);
payButton.addEventListener("click", function () {
    alert("DEMO ORDER");
    itemsInBasket.innerHTML = "";
    var table = document.getElementById("items-in-basket");
    table.deleteRow(-1); // remove the added row
    basketCount.textContent = document.querySelectorAll("#items-in-basket tr").length;
});
resetButton.addEventListener("click", function () {
    resetButton.setAttribute("disabled", "");
    resetDiv = document.createElement("div");
    resetDiv.classList.add("reset");
    resetDiv.textContent = "Remove Everything?";
    basket.appendChild(resetDiv);
    resetCheck = document.createElement("input");
    resetCheck.setAttribute("id", "resetCheck");
    resetCheck.setAttribute("value", "Yes");
    resetCheck.setAttribute("type", "submit");
    resetDiv.appendChild(resetCheck);
    resetCencel = document.createElement("input");
    resetCencel.setAttribute("id", "resetCencel");
    resetCencel.setAttribute("value", "No");
    resetCencel.setAttribute("type", "submit");
    resetDiv.appendChild(resetCencel);
    resetCheck.addEventListener("click", function () {
        var table = document.getElementById("items-in-basket");
        table.deleteRow(-1); // remove the added row
        basketCount.textContent = document.querySelectorAll("#items-in-basket tr").length;
        basket.removeChild(resetDiv);
        resetButton.removeAttribute("disabled", "");
    })
    resetCencel.addEventListener("click", function () {
        basket.removeChild(resetDiv);
        resetButton.removeAttribute("disabled", "");
    })
});
