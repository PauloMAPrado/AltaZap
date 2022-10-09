/* Ligth & Dark Mode's */

document.getElementById("moon").style.display = "none";
document.getElementById("dark_ligth").style.display = "none";
function dark_mode(){
    document.getElementById("sun").style.display = "";
    document.getElementById("moon").style.display = "none";
    document.getElementById("pg_bg").style.backgroundColor = "#3b3b3b";
    document.getElementById("content").style.color = "white";
    document.getElementById("content2").style.color = "white";
    document.getElementById("form-label").style.color = "white";
}

function light_mode(){
    document.getElementById("sun").style.display = "none";
    document.getElementById("moon").style.display = "";
    document.getElementById("pg_bg").style.backgroundColor = "white";
    document.getElementById("content").style.color = "black";
    document.getElementById("content2").style.color = "black";
    document.getElementById("form-label").style.color = "black";
}


