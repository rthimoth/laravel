
const overlay = document.getElementById("overlay")

// Get the modal
const modalMessage = document.getElementById("modalMessage")


// Get the <span> element that closes the modal
var spanMessage = document.getElementById("closeMessage");

// overlay.classList.add('overlayactive');
// modalMessage.style.display="block";

spanMessage.onclick = function() {
    modalMessage.style.display = "none";
    overlay.classList.remove('overlayactive');
}

document.addEventListener('click', function(event) {

    if (!modalMessage.contains(event.target) &&  modalMessage.style.display == "block") {
    modalMessage.style.display = "none";
    overlay.classList.remove('overlayactive');
     }
    
    
});
