function applyChanges() {
    let text = document.getElementById("text-box");

    let colorInput = document.getElementById("textColor").value;
    let borderInput = document.getElementById("borderWidth").value;

    if (colorInput) {
        text.style.color = `rgb(${colorInput})`;
    }
    if (borderInput) {
        text.style.borderWidth = borderInput + "px";
    }
}

function checkPassword() {

    let password2 = document.getElementById("password2").value;
    let password1 = document.getElementById("password1").value;

    if (password1.length < 8){
        alert("The length of the password is too short");
        return;
    }
    
    if (password1 !== password2){
        alert("Passwords do not match");
        return;

    }

    alert("Passwords Match!")
    



    
}
