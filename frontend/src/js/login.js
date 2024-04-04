// Get the button that opens the modal
const btnPost= document.getElementById("loginButton")


const overlay = document.getElementById("overlay")

// Get the modal
const modalLogin = document.getElementById("modal")

// const closeModalButtons= document.getElementById("closeButton")

// Get the <span> element that closes the modal
var spanPost = document.getElementsByClassName("closeLogin")[0];



btnPost.onclick = function() {
    modalLogin.style.display = "block";
    overlay.classList.add('overlayactive');
}

spanPost.onclick = function() {
    modalLogin.style.display = "none";
    overlay.classList.remove('overlayactive');
}

document.addEventListener('click', function(event) {
    // If the clicked element is not part of the dropdown, hide the dropdown
    if (!modalLogin.contains(event.target) && !btnPost.contains(event.target) && modalLogin.style.display == "block") {
    modalLogin.style.display = "none";
    overlay.classList.remove('overlayactive');

      console.log("test"); }
    
    
});

