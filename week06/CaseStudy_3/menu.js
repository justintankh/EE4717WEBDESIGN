// register event handler

var item1MenuQty = document.getElementById("1st-menu-qty");
var item2MenuQty = document.getElementById("2nd-menu-qty");
var item3MenuQty = document.getElementById("3rd-menu-qty");

var item1MenuTol = document.getElementById("1st-menu-tol");
var item2MenuTol = document.getElementById("2nd-menu-tol");
var item3MenuTol = document.getElementById("3rd-menu-tol");


item1MenuQty.addEventListener("change", qtyCounter, false);
item2MenuQty.addEventListener("change", qtyCounter, false);
item3MenuQty.addEventListener("change", qtyCounter, false);

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
        
        node.value = '0';
        node.focus();
    }
    
    // Checking for 1st menu qty
    (node.id == "1st-menu-qty") ? item1Qty = qty :
    (node.id == "2nd-menu-qty") ? item2Qty = qty :
    (node.id == "3rd-menu-qty") ? item3Qty = qty : console.log(`Couldn't find ID`)
    console.log('item1Qty:', item1Qty);
    console.log('item2Qty:', item2Qty);
    console.log('item3Qty:', item3Qty);

    return true;
}