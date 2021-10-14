// register event handler

var nameNode = document.getElementById("name");
var emailNode = document.getElementById("email");
var dateNode = document.getElementById("date");

nameNode.addEventListener("change", checkNameNode, false);
emailNode.addEventListener("change", checkEmailNode, false);
dateNode.addEventListener("change", checkDateNode, false);

function checkNameNode (event) {
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

function checkEmailNode (event) {
    // Get the target node of the event
    let emailNode = event.currentTarget;
    console.log(emailNode.value);
    console.log(emailNode.value.search(/^([\w.-])+@([\w]+.){2,4}([\w]){2,3}$/));
    
    //// only allow Alphabets and spaces
    if(emailNode.value.search(/^([\w.-])+@([\w]+.){2,4}([\w]){2,3}$/) != 0){

        alert(`
        (${emailNode.id}) Input ERROR:
        ${emailNode.value}

        Enter your username followed by "@" and the domain name.
        - Two to four address extensions only
        - last ext must have Two to Three chars.
        `);

        emailNode.focus();
        emailNode.value = '';
        return false;
    }
}

function checkDateNode(event) {

    let myDate = event.currentTarget;
    let todayDate = new Date();
    myDate = new Date(myDate.value);
    myDate = myDate.setHours(0,0,0,0);
    todayDate = todayDate.setHours(0,0,0,0);

    console.log(myDate);
    console.log(todayDate)

    if (todayDate >= myDate){

    alert(`
    (${event.currentTarget.id}) Input ERROR:

    Date must be after today and not today
    `);
        
    event.currentTarget.focus();
    event.currentTarget.value = '';
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