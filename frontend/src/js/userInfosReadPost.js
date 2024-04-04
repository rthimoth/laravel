const popup = document.getElementById('popup');
const closePopupButton = document.getElementById('close-popup');

const overlay = document.getElementById("overlay");

const openButtonRight = document.getElementById('userButton');

const openButtonLeft = document.getElementById('other-button-0');


const editButton = document.getElementById('editUserButton');

const displayButton = document.getElementById('displayUserButton'); 

const displayContainer = document.getElementById('displayUserSettingsListContainer');  

const editContainer = document.getElementById('editUserSettingsInputContainer');  


function closeEdit(){
  editContainer.style.display = "none";
}

function openEdit(){
  editContainer.style.display = "block";
}

function closeDisplay(){
  displayContainer.style.display = "none";
}

function openDisplay(){
  displayContainer.style.display = "block";
}


function toggleEdit() {
  editContainer.style.display = editContainer.style.display === "block" ? "none" : "block";
}

function toggleDisplay() {
  displayContainer.style.display = displayContainer.style.display === "block" ? "none" : "block";
}

editButton.addEventListener('click', function() {
  toggleEdit();
});

displayButton.addEventListener('click', function() {
  toggleDisplay();
});

// Ouvre la popup
function openPopup() {
  popup.classList.add('active');
  overlay.classList.add('overlayactive');
}

// Ferme la popup
function closePopup() {
  popup.classList.remove('active');
  overlay.classList.remove('overlayactive');
}

// Ajoute un événement de clic pour fermer la popup
closePopupButton.addEventListener('click', closePopup);

openButtonLeft.onclick = function() {
    
    if (popup.classList.contains("active")) {
        // The div has the class 'myClass'
        closePopup();
        } else {
            openPopup();}
}


openButtonRight.onclick = function() {
    
  if (popup.classList.contains("active")) {
      // The div has the class 'myClass'
      closePopup();
      } else {
          openPopup();}
}

document.addEventListener('click', function(event) {
    // If the clicked element is not part of the dropdown, hide the dropdown
    if (!popup.contains(event.target) && !openButtonRight.contains(event.target) && !openButtonLeft.contains(event.target) && popup.classList.contains("active") ) {
      closePopup();
    }   
});
  

