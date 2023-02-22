
function hello() {
    alert("Welcome to my website :3");

}
function add() {
    document.write(6 + 4);
}

function colourChange(where, newColor) {
    if (where == "background") {
        document.body.style.backgroundColor = newColor;
    }
}

//new bg color yeet

function changeColor() {
    let color = document.getElementById('background').value;
    document.body.style.backgroundColor = color;

}
function changeFcolor(){
    let fcolor = document.getElementById('fcolor').value;
    document.body.style.color = fcolor;
}

//u fkn crud
function crud(){
    let fname=(document.form1.fname.value).trim();
    if (fname.length<5) {
        alert("First name must have at least 5 characters");
        return false;
    }
}