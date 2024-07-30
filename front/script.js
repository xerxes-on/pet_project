function decrease(){
    let element = document.getElementById("goal");
    let value = parseInt(element.innerText);
    if(value <= 0){
        element.innerText = 0;
    }else{
        element.innerText = value - 1;
    }
}

function increase(){
    let element = document.getElementById("goal");
    let value = parseInt(element.innerText);
    element.innerText = value + 1;
}