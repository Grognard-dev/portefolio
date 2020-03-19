var web = document.getElementById("webdev");
var dig = document.getElementById("digit");
var dapp = document.getElementById("devapp");
var res = document.getElementById("reseau");
web.style.display = "none";
dig.style.display = "none";
dapp.style.display = "none";
res.style.display = "none";

function toggleweb(button) {
    if (document.getElementById("togglerweb").value == "OFF") {
        document.getElementById("togglerweb").value = "ON";
        web.style.display = "block";
    } else {
        document.getElementById("togglerweb").value = "OFF";
        web.style.display = "none";
    }
}
function toggledig(button) {
    if (document.getElementById("togglerdig").value == "OFF") {
        document.getElementById("togglerdig").value = "ON";
        dig.style.display = "block";
    } else {
        document.getElementById("togglerdig").value = "OFF";
        dig.style.display = "none";
    }
}
function toggledapp(button) {

    if (document.getElementById("togglerdapp").value == "OFF") {
        document.getElementById("togglerdapp").value = "ON";
        dapp.style.display = "block";
    } else {
        document.getElementById("togglerdapp").value = "OFF";
        dapp.style.display = "none";
    }
    }
function toggleres(button) {

    if (document.getElementById("togglerres").value == "OFF") {
        document.getElementById("togglerres").value = "ON";
        res.style.display = "block";
    } else {
        document.getElementById("togglerres").value = "OFF";
        res.style.display = "none";
    }
}