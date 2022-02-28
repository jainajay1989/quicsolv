
window.onload =
function(){
    var w = window.innerWidth;
    var h = window.innerHeight;
    // if(w < 500) {
        var y = document.getElementById('goal');
        y.style.border = '1px solid red';
    // }

    var x = document.getElementsByClassName("dem");
    x[0].innerHTML = "Browser inner window width: " + w + ", height: " + h + ".";
    x[1].innerHTML = "Browser inner window width: " + w + ", height: " + h + ".";
};

function closeWindow() {
    // location.assign('https://www.google.com');

}