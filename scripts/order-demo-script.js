var basket = document.getElementsByClassName("basket")[0];
var basketBtn = document.getElementById("basketBtn");
var basketClose = document.getElementById("basket-close");
var itemsInBasket = document.getElementById("items-in-basket");
var payButton = document.getElementById("pay-button");
var resetButton = document.getElementById("reset-button");
var overlay = document.getElementById("basket-overlay");
var basketCount = document.getElementById("basketCount");

//JSON string
var productsString = '[{"name":"Cola","description":"Original Cola","totalPrice":"1,23","hashCode":"aoidhas089s8S"},{"name":"Cola Vanille","description":"Cola mit Vanillegeschmack","totalPrice":"1,23","hashCode":"a9aSpAsd0aASp"},{"name":"Fanta","description":"Original Fanta","totalPrice":"1,23","hashCode":"IOklasjdfo01edf"},{"name":"Fanta Mango","description":"Fanta Mango-Style","totalPrice":"1,23","hashCode":"SksoSApoif0124"},{"name":"Fanta","description":"Original Fanta","totalPrice":"1,23","hashCode":"8aDia021oSF"},{"name":"Sprite","description":"Original Sprite","totalPrice":"1,23","hashCode":"Ldja901JHd0a"},{"name":"Monster Energy","description":"Original Monster Energy","totalPrice":"1,23","hashCode":"AdopaD0I2mv"}]';

// Convert the JSON string to a JavaScript object
var products = JSON.parse(productsString);
var basketItems = {};

function order() {
    var itemName = event.currentTarget.querySelector(".item-name").textContent;
    var itemDesc = event.currentTarget.querySelector(".item-description").textContent;

    itemName = DOMPurify.sanitize(itemName); // Sanitize the strings
    itemDesc = DOMPurify.sanitize(itemDesc);

    overlay.style.display = "block";

    // Create amount selection element
    const amountSele = document.createElement("div");
    amountSele.classList.add("amountSele");
    amountSele.setAttribute("id", "toClose");
    amountSele.textContent = "Menge:";

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
    amountSub.setAttribute("value", "In den Warenkorb");
    amountSub.setAttribute("type", "submit");
    amountSub.setAttribute("id", "amountSubmit");

    amountSub.addEventListener("click", function () {
        // Get selected amount and update basket
        var itemAmount = parseInt(document.getElementById("itemAmount").value);
        if (itemAmount > 0 && itemAmount != NaN) {
            if (parseInt(basketCount.textContent) + itemAmount > 20) {
                closeElement();
                alert("Maximal 20 Getränke pro Person!");
                return;
            }
        } else {
            alert("Eingabe kann nicht leer sein");
            return;
        }

        updateBasket(itemName, itemDesc, itemAmount);

        // Close amount selection element
        closeElement();
    });

    amountSele.appendChild(amountSub);
    document.body.appendChild(amountSele);
}

function openBasket() {
    basket.style.display = "block";
    overlay.style.display = "block";
    basket.setAttribute("id", "toClose");
}

function updateBasket(itemName, itemDesc, itemAmount) {
    if (isInProducts(itemName, itemDesc)) {
        var item = findEntry(itemName, itemDesc);
        var itemPrice = item["totalPrice"];
        var parsedPrice = parseFloat(itemPrice.replace(',', '.'));

        var basketName = `${DOMPurify.sanitize(itemName)} | ${DOMPurify.sanitize(itemDesc)}`;
        var itemFound = false;

        for (var key in basketItems) {
            if (key === basketName) {
                basketItems[key].quantity += itemAmount;
                basketItems[key].totalPrice += parsedPrice * itemAmount;
                itemFound = true;
                break;
            }
        }

        if (!itemFound) {
            basketItems[basketName] = {
                name: itemName,
                description: itemDesc,
                price: parsedPrice,
                quantity: itemAmount,
                totalPrice: parsedPrice * itemAmount,
                hashCode: item["hashCode"]
            };
        }

        createNotification("Item zum Warenkorb hinzugefügt.");
        flashBasket("white");
        updateBasketCount();

        // Create HTML elements for displaying the items in the basket
        var itemsInBasket = document.getElementById("items-in-basket");
        itemsInBasket.innerHTML = "";
        for (var key in basketItems) {
            var item = basketItems[key];
            var itemRow = document.createElement("tr");
            itemRow.setAttribute("id", item.hashCode);
          
            var itemNameCell = document.createElement("td");
            itemNameCell.textContent = item.name;
            itemRow.appendChild(itemNameCell);

            var itemDescCell = document.createElement("td");
            itemDescCell.textContent = item.description;
            itemRow.appendChild(itemDescCell);
          
            var itemQuantityCell = document.createElement("td");
            itemQuantityCell.textContent = item.quantity;
            itemRow.appendChild(itemQuantityCell);
          
            var itemPriceCell = document.createElement("td");
            itemPriceCell.textContent = item.price;
            itemRow.appendChild(itemPriceCell);
          
            var itemTotalPriceCell = document.createElement("td");
            itemTotalPriceCell.textContent = item.totalPrice;
            itemRow.appendChild(itemTotalPriceCell);
          
            // Create the button to remove item
            var minusCell = document.createElement("button");
            minusCell.textContent = "✖";
            minusCell.setAttribute("class", "minusBtn");
          
            // Create a closure around the event listener function to capture the current value of key
            minusCell.addEventListener("click", (function(key, itemRow) {
              return function () {
                itemRow.remove();
                delete basketItems[key];
                updateBasketCount();
              }
            })(key, itemRow));
            itemRow.appendChild(minusCell);
          
            itemsInBasket.appendChild(itemRow);
          }

    } else {
        createNotification("Kann nicht hinzugefügt werden!");
        flashBasket("red");
    }
}

function updateBasketCount() {
    var count = 0;
    for (var key in basketItems) {
        count += basketItems[key].quantity;
    }
    basketCount.textContent = count;
}

function isInProducts(name, desc) {
    return products.some(item => item.name === name && item.description === desc);
}
function findEntry(name, desc) {
    return products.find(p => p.name === name && p.description === desc);
}

function flashBasket(color) {
    // Visual effect
    basketBtn.classList.add(`${color}-flash`);
    setTimeout(function () {
        basketBtn.classList.remove(`${color}-flash`);
    }, 500);
}

function createNotification(textContent) {
    var content = DOMPurify.sanitize(textContent);

    const notification = document.createElement('div');
    notification.textContent = content;
    notification.classList.add('notification');
    notification.classList.add('swipeup');
    document.body.appendChild(notification);

    // Remove notification after a delay
    setTimeout(() => {
        document.body.removeChild(notification);
    }, 1000);
}

function closeElement() {
    const closeElement = document.getElementById("toClose");
    closeElement.style.display = "none";
    overlay.style.display = "none";
    closeElement.removeAttribute("id");
    if (closeElement.className === "amountSele") {
        closeElement.parentNode.removeChild(closeElement);
    }
}

function resetConfirmation() {
    resetButton.setAttribute("disabled", "");
    resetDiv = document.createElement("div");
    resetDiv.classList.add("reset");
    basket.appendChild(resetDiv);

    var questionSpan = document.createElement("span");
    questionSpan.setAttribute("id", "resetSpan");
    questionSpan.textContent = "Warenkorb leeren?";
    resetDiv.appendChild(questionSpan);

    resetCheck = document.createElement("input");
    resetCheck.setAttribute("id", "resetCheck");
    resetCheck.setAttribute("value", "Ja");
    resetCheck.setAttribute("type", "submit");
    resetDiv.appendChild(resetCheck);

    resetCancel = document.createElement("input");
    resetCancel.setAttribute("id", "resetCancel");
    resetCancel.setAttribute("value", "Nein");
    resetCancel.setAttribute("type", "submit");
    resetDiv.appendChild(resetCancel);

    resetCheck.addEventListener("click", function () {
        var table = document.getElementById("items-in-basket");
        resetBasket();
        basket.removeChild(resetDiv);
        resetButton.removeAttribute("disabled", "");
    })
    resetCancel.addEventListener("click", function () {
        basket.removeChild(resetDiv);
        resetButton.removeAttribute("disabled", "");
    })
}

function resetBasket() {
    for (var key in basketItems) {
        document.getElementById(basketItems[key].hashCode).remove();
        delete basketItems[key];
    }
    updateBasketCount();
}

function remove() {
    var parentRow = event.target.parentNode;
    parentRow.remove();
}

overlay.addEventListener("click", function () {
    closeElement();
});

payButton.addEventListener("click", function () {
    // Open payment window
    alert("Payment window opened.");
    // Reset basket
    resetBasket();
});

resetButton.addEventListener("click", function () {
    // Reset basket
    resetConfirmation();
});

basketBtn.addEventListener("click", function () {
    // Open basket
    openBasket();
});

basketClose.addEventListener("click", function () {
    // Close basket
    closeElement();
});