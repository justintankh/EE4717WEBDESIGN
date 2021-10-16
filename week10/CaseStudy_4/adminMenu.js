// register event handler

var item1MenuPrc = document.getElementById("menu-1-price");
var item2MenuPrc1 = document.getElementById("menu-2-price-1");
var item2MenuPrc2 = document.getElementById("menu-2-price-2");
var item3MenuPrc1 = document.getElementById("menu-3-price-1");
var item3MenuPrc2 = document.getElementById("menu-3-price-2");

console.log(item1MenuPrc.innerText);
item1MenuPrc.innerText = "Endless Cup $2.00";
item2MenuPrc1.innerText = "Single $2.00";
item2MenuPrc2.innerText = "Double $3.00";
item3MenuPrc1.innerText = "Single $4.75";
item3MenuPrc2.innerText = "Double $5.75";

// Checkbox
var firstMenuCheckbox = document.getElementById("first-menu-change");
var secondMenuCheckbox = document.getElementById("second-menu-change");
var thirdMenuCheckbox = document.getElementById("third-menu-change");
firstMenuCheckbox.addEventListener("change", checkEnable, false);
secondMenuCheckbox.addEventListener("change", checkEnable, false);
thirdMenuCheckbox.addEventListener("change", checkEnable, false);

// Price change td element
var firstMenuPriceChangeBox = document.getElementById("first-menu-priceChangeBox");
var secondMenuPriceChangeBox = document.getElementById("second-menu-priceChangeBox");
var thirdMenuPriceChangeBox = document.getElementById("third-menu-priceChangeBox");

// Price change input element
var firstMenuPriceChange = document.getElementById("first-menu-priceChange");
var secondMenuPriceChange = document.getElementById("second-menu-priceChange");
var thirdMenuPriceChange = document.getElementById("third-menu-priceChange");
firstMenuPriceChange.addEventListener("change", priceChange, false);
secondMenuPriceChange.addEventListener("change", priceChange, false);
thirdMenuPriceChange.addEventListener("change", priceChange, false);

// Radio button
var item2Choice = document.getElementsByName("second-menu-choice");
var item3Choice = document.getElementsByName("third-menu-choice");
item2Choice.forEach((item) => {
    item.addEventListener("change", radioUpdate, false);
})
item3Choice.forEach((item) => {
    item.addEventListener("change", radioUpdate, false);
})

// Hidden form 
var hiddenInput1 = document.getElementById("hidden-item-1");
var hiddenInput2 = document.getElementById("hidden-item-2");
var hiddenInput3 = document.getElementById("hidden-item-3");
var hiddenInput4 = document.getElementById("hidden-item-4");
var hiddenInput5 = document.getElementById("hidden-item-5");


function checkEnable (event) {
    // Get the target node of the event
    var node = event.currentTarget;
    console.log(node.checked);
    console.log(node.value);

    // When checked
    if(node.checked) {
        (node.id == "first-menu-change") ? firstMenuPriceChange.style.visibility = "visible" :
        (node.id == "second-menu-change") ? secondMenuPriceChange.style.visibility = "visible" :
        (node.id == "third-menu-change") ? thirdMenuPriceChange.style.visibility = "visible" : 
        console.log(`Couldn't find ID`);
    }
    else{
        (node.id == "first-menu-change") ? firstMenuPriceChange.style.visibility = "hidden" :
        (node.id == "second-menu-change") ? secondMenuPriceChange.style.visibility = "hidden" :
        (node.id == "third-menu-change") ? thirdMenuPriceChange.style.visibility = "hidden" : 
        console.log(`Couldn't find ID`);
        
        (node.id == "first-menu-change") ? firstMenuPriceChange.value = "" :
        (node.id == "second-menu-change") ? secondMenuPriceChange.value = "" :
        (node.id == "third-menu-change") ? thirdMenuPriceChange.value = "" : 
        console.log(`Couldn't find ID`);
    }
}

function priceChange (event) {
    // Get the target node of the event
    var node = event.currentTarget;
    console.log(node.id);
    console.log(node.value);
    
    // only allow Alphabets and spaces
    if(node.value < 0){
        alert(`
        (${node.id}) Input ERROR:
        ${node.value}
        
        Enter only numbers 0 or greater.
        `);
        
        node.value = 0;
        node.focus();
    }
    // Identifying which menu item
    if (node.id == "first-menu-priceChange"){
        hiddenInput1.value = node.value;
    }
    else{
        if(node.id == "second-menu-priceChange"){
            if(secondMenuRadioSelect == 1){
                hiddenInput2.value = node.value;
            }
            else{
                hiddenInput3.value = node.value;
            }
        }
        else{
            if(thirdMenuRadioSelect==1){
                hiddenInput4.value = node.value;
            }
            else{
                hiddenInput5.value = node.value;
            }
        }
    }
    console.log('hiddenInput1:', hiddenInput1.value);
    console.log('hiddenInput2:', hiddenInput2.value);
    console.log('hiddenInput3:', hiddenInput3.value);
    console.log('hiddenInput4:', hiddenInput4.value);
    console.log('hiddenInput5:', hiddenInput5.value);
}

var secondMenuRadioSelect;
var thirdMenuRadioSelect;
secondMenuRadioSelect = secondMenuRadioSelect == undefined? 1 : secondMenuRadioSelect;
thirdMenuRadioSelect = thirdMenuRadioSelect == undefined? 1 : thirdMenuRadioSelect;

function radioUpdate(event) {
    var node = event.currentTarget;
    console.log(node.name);
    console.log(node.value);
    if (node.name == 'second-menu-choice'){
        if(node.value == 'single'){
            secondMenuRadioSelect = 1;
            hiddenInput3.value = "";
        }
        else{
            secondMenuRadioSelect = 2;
            hiddenInput2.value = "";
        }
    }
    else{
        if(node.value == 'single'){
            thirdMenuRadioSelect = 1;
            hiddenInput5.value = "";
        }
        else{
            thirdMenuRadioSelect = 2;
            hiddenInput4.value = "";
        }
    }
    console.log('2nd: ',secondMenuRadioSelect);
    console.log('3rd: ',thirdMenuRadioSelect);
}

function clearPrice(){
    hiddenInput1.value = "";
    hiddenInput2.value = "";
    hiddenInput3.value = "";
    hiddenInput4.value = "";
    hiddenInput5.value = "";
    firstMenuPriceChange.style.visibility = "hidden";
    secondMenuPriceChange.style.visibility = "hidden";
    thirdMenuPriceChange.style.visibility = "hidden";
    firstMenuPriceChange.value = ""
    secondMenuPriceChange.value = ""
    thirdMenuPriceChange.value = ""
    firstMenuCheckbox.checked = false;
    secondMenuCheckbox.checked = false;
    thirdMenuCheckbox.checked = false;
    console.log('hiddenInput1:', hiddenInput1.value);
    console.log('hiddenInput2:', hiddenInput2.value);
    console.log('hiddenInput3:', hiddenInput3.value);
    console.log('hiddenInput4:', hiddenInput4.value);
    console.log('hiddenInput5:', hiddenInput5.value);
}