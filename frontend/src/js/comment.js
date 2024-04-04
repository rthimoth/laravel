
// const closeCommentButton = document.getElementById('closeModalReadPost');

const overlay = document.getElementById("overlay");

const commentButton = document.getElementById('buttonComment');

const displayComment = document.getElementById('commentsPost');

function closeComment(){
  displayComment.style.display = "none";

}

function openComment(){
  displayComment.style.display = "block";

}

function toggleDisplay() {
  displayComment.style.display = displayComment.style.display === "block" ? "none" : "block";
}

// Ajoute un événement de clic pour fermer la popup
// closeCommentButton.addEventListener('click', closePopup);

commentButton.addEventListener('click', function() {
  toggleDisplay();
});


document.addEventListener('click', function(event) {
    // If the clicked element is not part of the dropdown, hide the dropdown
    if (!displayComment.contains(event.target) && !commentButton.contains(event.target) && displayComment.style.display === "block" ) {
      closeComment();
    }   
});
  