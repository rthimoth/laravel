//get action button by id
const toggleButton = document.getElementById("resetFilters");
//get sliderCreationDate by id
const DropdownPreferences = document.querySelector(".placeholder");
// const DropdownCategories = document.getElementById("dropdownCategory");

//Button status disable
var toggle = false;
//declare result
let result;


// you click one time
toggleButton.addEventListener("click", function() {
    
    //prevent from sending form 
    event.preventDefault();

    //button become active
    toggle = !toggle;

    //display style 1sec
    toggleButton.classList.add("customButtonReset");
    setTimeout(() => {
        //remove style
        toggleButton.classList.remove("customButtonReset");
    }, 300);
    
    
    //assemble checkboxes id with loop and assign false if checkbox status is true
    
    DropdownPreferences.textContent="Any";
    // DropdownCategories.value="";
});



