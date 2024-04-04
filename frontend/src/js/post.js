// Get the button that opens the modal
const btnPost= document.getElementById("postButton")

const sendButton= document.getElementById("loginSubmitButton")


const overlay = document.getElementById("overlay")

// Get the modal
const modalPost = document.getElementById("modal3")

const textArea = document.querySelector('#bodyPost');


// Get the <span> element that closes the modal
var spanPost = document.getElementsByClassName("closePost")[0];

btnPost.onclick = function() {
    modalPost.style.display = "block";
    overlay.classList.add('overlayactive');
}

spanPost.onclick = function() {
    modalPost.style.display = "none";
    overlay.classList.remove('overlayactive');
    resetTextarea();
}

textArea.onclick = function() {
    textArea.classList.add("textareablack");
    textArea.classList.remove("textareagray");
    if (textArea.value === 'Tap your post here'){
        textArea.value = '';
    }
}


function resetTextarea(){

if (textArea.value == '' && !textArea.onclick()){
    textArea.value = 'Tap your post here';
    textArea.classList.add("textareagray");
    textArea.classList.remove("textareablack");
}

}

// function resetTitle(){

//     if (title.value == '' && !title.onclick()){
//         title.value = 'Tap your Title here';
//         title.classList.add("textareagray");
//         title.classList.remove("textareablack");
//     }
    
// }
// resetTitle();
resetTextarea();

window.onclick = function(event) {
    if (event.target == modalPost) {
      modalPost.style.display = "none";
    }
}

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