// Button elements
var buttonShow1 = document.getElementById("buttonShow1");
var buttonHide1 = document.getElementById("buttonHide1");
var buttonShow2 = document.getElementById("buttonShow2");
var buttonHide2 = document.getElementById("buttonHide2");

var table1 = document.getElementById("table1");
var table2 = document.getElementById("table2");

buttonShow1.addEventListener("click", show, false);
buttonHide1.addEventListener("click", hide, false);
buttonShow2.addEventListener("click", show, false);
buttonHide2.addEventListener("click", hide, false);

function show(event) {
    var node = event.currentTarget;
    console.log(node.id);
    
    // Visibility of elements
    if(node.id == "buttonShow1"){
        // Make SHOW button disappear
        buttonShow1.style.visibility = "hidden";
        buttonShow1.style.display = "none";
        // Make HIDE button visible
        buttonHide1.style.visibility = "visible";
        buttonHide1.style.display = "inline-block";
        // Make TABLE visible
        table1.style.visibility = "visible";
        table1.style.display = "inline-block";
    }
    else{
        // Make SHOW button disappear
        buttonShow2.style.visibility = "hidden";
        buttonShow2.style.display = "none";
        // Make HIDE button visible
        buttonHide2.style.visibility = "visible";
        buttonHide2.style.display = "inline-block";
        // Make TABLE visible
        table2.style.visibility = "visible";
        table2.style.display = "inline-block";
    }
}

function hide(event){
    var node = event.currentTarget;
    console.log(node.id);
    
    // Visibility of elements
    if(node.id == "buttonHide1"){
        // Make SHOW button visible
        buttonShow1.style.visibility = "visible";
        buttonShow1.style.display = "inline-block";
        // Make HIDE button disappear
        buttonHide1.style.visibility = "hidden";
        buttonHide1.style.display = "none";
        // Make TABLE disappear
        table1.style.visibility = "hidden";
        table1.style.display = "none";
    }
    else{
        // Make SHOW button visible
        buttonShow2.style.visibility = "visible";
        buttonShow2.style.display = "inline-block";
        // Make HIDE button disappear
        buttonHide2.style.visibility = "hidden";
        buttonHide2.style.display = "none";
        // Make TABLE disappear
        table2.style.visibility = "hidden";
        table2.style.display = "none";
    }
}