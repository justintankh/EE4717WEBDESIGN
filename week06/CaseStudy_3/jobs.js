// register event handler

var nameNode = document.getElementById("name");
var emailNode = document.getElementById("email");
var dateNode = document.getElementById("date");

nameNode.addEventListener("change", checkNameNode, false);
emailNode.addEventListener("change", checkEmailNode, false);
// dateNode.addEventListener("change", checkDateNode, false);

function checkNameNode (event) {
    // Get the target node of the event
    let nameNode = event.currentTarget;
    // console.log(name);
    
    //// only allow Alphabets and spaces
    if(nameNode.value.search(/^[a-zA-Z\s]*$/) != 0){
        alert(` Enter only alphabets & spaces\n\nInput ERROR:\n${nameNode.id} (${nameNode.value})`);
        nameNode.focus();
        nameNode.value = '';
        return false;
    }
}

function checkEmailNode (event) {
    // Get the target node of the event
    let emailNode = event.currentTarget;
    console.log(emailNode.value);
    
    //// only allow Alphabets and spaces
    if(emailNode.value.search(/^[\w._-]+@([\w]+\.){2,4}[\w]{2,3}/) != 0){
        alert(` Enter your username followed by "@" and the domain name.\nInput ERROR:\n${emailNode.id} (${emailNode.value})`);
        emailNode.focus();
        emailNode.value = '';
        return false;
    }
}

// function checkNameNode (event) {
//     // Get the target node of the event
//     let nameNode = event.currentTarget;
//     // console.log(name);
    
//     //// only allow Alphabets and spaces
//     if(nameNode.value.search(/^[a-zA-Z\s]*$/) != 0){
//         alert(` Enter only alphabets & spaces\n\nInput ERROR:\n${nameNode.id} (${nameNode.value})`);
//         nameNode.focus();
//         nameNode.value = '';
//         return false;
//     }
// }