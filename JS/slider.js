
var xPos = 0; 
var switchSlider = 0;

function startSlide() {
    var anim = setInterval(move, 10);
    if (xPos>200) {
        clearInterval(anim); 
        console.log("toto");
    }
}


function move() {
    if (xPos==200) {
        
    }
    var divToMove = document.getElementById('slider1');
    divToMove.style.left = xPos+"px";
    xPos++;
}