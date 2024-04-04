// Get the button that opens the modal
const btnRegistration= document.getElementById("registrationButton")


const overlayRegistration  = document.getElementById("overlay")

// Get the modal
const modalRegistration = document.getElementById("modal2")

// const closeModalButtons= document.getElementById("closeButton")

// Get the <span> element that closes the modal
var spanRegistration = document.getElementsByClassName("closeRegistration")[0];



btnRegistration.onclick = function() {
    modalRegistration.style.display = "block";
    overlayRegistration .classList.add('overlayactive');
}

spanRegistration.onclick = function() {
    modalRegistration.style.display = "none";
    overlayRegistration .classList.remove('overlayactive');
}

document.addEventListener('click', function(event) {
    // If the clicked element is not part of the dropdown, hide the dropdown
    if (!modalRegistration.contains(event.target) && !btnRegistration.contains(event.target) && modalRegistration.style.display == "block") {
        modalRegistration.style.display = "none";
        overlayRegistration .classList.remove('overlayactive');
      console.log("test"); }
    
    
});

// openModalButtons.forEach(button => {
//     button.addEventListener('click',()=>{
//         const modal = document.querySelector(button.dataset.modalTarget)
//         openModal(modal)
//     })
// })
// closeModalButtons.forEach(button => {
//     button.addEventListener('click',()=>{
//         const modal = button.closest('.modal')
//         closeModal(modal)
//     })
// })
// function openModal(modal){
//     if (modal == null) return 
//     modal.classList.add('active')
//     overlay.classList.add('active') 
// }
// function closeModal(modal){
//     if (modal== null)return 
//     modal.classList.remove('active')
//     overlay.classList.remove('active') 
// }