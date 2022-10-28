function changeOpacity(){
    var counter = 0;

    if(counter  % 2 == 0 || counter == 0) {
        document.getElementById("speelkaart").style.opacity = 100;
    } else {
        document.getElementById("speelkaart").style.opacity = 0;
    }
    counter++
}
