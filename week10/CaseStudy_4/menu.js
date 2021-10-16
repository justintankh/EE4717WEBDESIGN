// register event handler

var item1MenuQty = document.getElementById("first-menu-qty");
var item2MenuQty = document.getElementById("second-menu-qty");
var item3MenuQty = document.getElementById("third-menu-qty");

var item1MenuTol = document.getElementById("first-menu-tol");
var item2MenuTol = document.getElementById("second-menu-tol");
var item3MenuTol = document.getElementById("third-menu-tol");

var totalPriceDOM = document.getElementById("total-price");

var item2Choice = document.getElementsByName("second-menu-choice");
var item3Choice = document.getElementsByName("third-menu-choice");

item1MenuQty.addEventListener("change", qtyCounter, false);
item2MenuQty.addEventListener("change", qtyCounter, false);
item3MenuQty.addEventListener("change", qtyCounter, false);

item2Choice.forEach((item) => {
    item.addEventListener("change", radioUpdate, false);
})
item3Choice.forEach((item) => {
    item.addEventListener("change", radioUpdate, false);
})

var item1Qty = 0;
var item2Qty = 0;
var item3Qty = 0;

function qtyCounter (event) {
    // Get the target node of the event
    var node = event.currentTarget;
    var qty = parseInt(node.value);
    console.log(node.id);
    console.log(node.value);
    
    //// only allow Alphabets and spaces
    if(qty < 0 || isNaN(node.value)){
        alert(`
        (${node.id}) Input ERROR:
        ${node.value}
        
        Enter only numbers 0 or greater.
        `);
        
        node.value = 0;
        qty = 0;
        node.focus();
    }
    
    // Checking for 1st menu qty
    (node.id == "first-menu-qty") ? item1Qty = qty :
    (node.id == "second-menu-qty") ? item2Qty = qty :
    (node.id == "third-menu-qty") ? item3Qty = qty : 
    console.log(`Couldn't find ID`)

    console.log('item1Qty:', item1Qty);
    console.log('item2Qty:', item2Qty);
    console.log('item3Qty:', item3Qty);

    return tabulate(event);
}

const item1Price = 2.00;
const item2Price = 2.00;
// const item2PriceB = 3.00;
const item3Price = 4.75;
// const item3PriceB = 5.75;
var totalPrice = 0;
var tabulatedPrice1 = 0;
var tabulatedPrice2 = 0;
var tabulatedPrice3 = 0;

function tabulate(event) {
    var nodeName = event.currentTarget.id;
    // matching DOM of tabulated price

    // var dom = (nodeName == "first-menu-qty") ? item1MenuTol :
    // (nodeName == "second-menu-qty") ? item2MenuTol :
    // (nodeName == "third-menu-qty") ? item3MenuTol : null;

    if (nodeName == "first-menu-qty") {
        tabulatedPrice1 = item1Price*item1Qty;
        item1MenuTol.innerHTML = '<div>$' + `${tabulatedPrice1.toFixed(2)}` + '</div>';
    }
    else if(nodeName == "second-menu-qty"){
        tabulatedPrice2 = item2Price*item2Qty;
        tabulatedPrice2 = item2Choice[0].checked ? item2Price*item2Qty : (item2Price+1)*item2Qty;
        item2MenuTol.innerHTML = '<div>$' + `${tabulatedPrice2.toFixed(2)}` + '</div>';
    }
    else if (nodeName == "third-menu-qty") {
        tabulatedPrice3 = (item3Price*item3Qty);
        tabulatedPrice3 = item3Choice[0].checked ? item3Price*item3Qty : (item3Price+1)*item3Qty;
        item3MenuTol.innerHTML = '<div>$' + `${tabulatedPrice3.toFixed(2)}` + '</div>';
    }
    totalPrice = tabulatedPrice1 + tabulatedPrice2 + tabulatedPrice3;
    item3MenuTol.innerHTML = '<div>$' + `${tabulatedPrice3.toFixed(2)}` + '</div>';

    // console.log("event: ",event.currentTarget);
    // console.log("dom:",dom);
    console.log('totalPrice:', totalPrice)
    totalPriceDOM.innerHTML = '<div>$' + `${totalPrice.toFixed(2)}` + '</div>';

    return true;
}

function radioUpdate(event) {
    var tempEvent = {
        currentTarget: {
            id: '',
        }
    }
    tempEvent.currentTarget.id = (event.currentTarget.name == 'second-menu-choice') ? 'second-menu-qty' : 'third-menu-qty';
    console.log(event.currentTarget.name);
    return tabulate(tempEvent);
}