//get action button by id
const toggleButton = document.getElementById("registerSubmitButton");

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
    
    
});



