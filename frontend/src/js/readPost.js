// Get the button that opens the modal
const btnReadPost= document.getElementById("readPostButton")


const overlay = document.getElementById("overlay")

// Get the modal
const modalSpecificPost = document.getElementById("modal4")


// Get the <span> element that closes the modal
var spanReadPost = document.getElementById("closeSpecificPost");


btnReadPost.onclick = function() {
    modalSpecificPost.style.display = "block";
    overlay.classList.add('overlayactive');
}

spanReadPost.onclick = function() {
    modalSpecificPost.style.display = "none";
    overlay.classList.remove('overlayactive');
}

document.addEventListener('click', function(event) {
    // If the clicked element is not part of the dropdown, hide the dropdown
    if (!modalSpecificPost.contains(event.target) && !btnReadPost.contains(event.target) && modalSpecificPost.style.display == "block") {
    modalSpecificPost.style.display = "none";
    overlay.classList.remove('overlayactive');

      console.log("test"); }
    
    
});

