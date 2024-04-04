
// Get the overlay
const overlay = document.getElementById("overlay")

// Get the modal
const modalMessage = document.getElementById("modalMessage")


// Get the <span> element that closes the modal
var spanMessage = document.getElementById("closeMessage");

spanMessage.onclick = function() {
    modalMessage.style.display = "none";
    overlay.classList.remove('overlayactive');
}
