//get action button by id
const toggleButton = document.getElementById("registrationAskButton");
const targetDiv = document.getElementById("modal");
//Button status disable
var toggle = false;


// you click one time
toggleButton.addEventListener("click", function() {
    
    //button become active
    toggle = !toggle;

    //display style 1sec
    toggleButton.classList.add("scaleAndBorder");
    setTimeout(() => {
        //remove style
        toggleButton.classList.remove("scaleAndBorder");
    }, 300);
    //display/hide div
    targetDiv.style.display= toggle ? "block": "none";
    //add custom bg
    toggleButton.classList.add(toggle ? 'customButtonOn':'bg-rose');
    //remove custom bg
    toggleButton.classList.remove(toggle ?'bg-rose':'customButtonOn');
    
});



