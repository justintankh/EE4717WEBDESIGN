// register event handler

var item1MenuQty = document.getElementById("1st-menu-qty");
var item2MenuQty = document.getElementById("2nd-menu-qty");
var item3MenuQty = document.getElementById("3rd-menu-qty");

var item1MenuTol = document.getElementById("1st-menu-tol");
var item2MenuTol = document.getElementById("2nd-menu-tol");
var item3MenuTol = document.getElementById("3rd-menu-tol");


item1MenuQtyNode.addEventListener("change", qtyCounter, false);
item2MenuQtyNode.addEventListener("change", qtyCounter, false);
item3MenuQtyNode.addEventListener("change", qtyCounter, false);


function qtyCounter (event) {
    // Get the target node of the event
    let nameNode = event.currentTarget;
    // console.log(name);
    
    //// only allow Alphabets and spaces
    if(nameNode.value.search(/^[a-zA-Z\s]*$/) != 0){
        alert(`
        (${nameNode.id}) Input ERROR:
        ${nameNode.value}
        
        Enter only alphabets & spaces
        `);

        nameNode.focus();
        nameNode.value = '';
        return false;
    }
}