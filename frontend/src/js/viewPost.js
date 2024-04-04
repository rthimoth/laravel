const rotatePostButton = document.getElementById("rotatePostButton");

const viewCompactButton = document.getElementById("viewCompactButton");

const postContainer = document.getElementById("contentPostContainer");

const titlePostContainer = document.getElementById("titlePostCompact");

function toggleRotate() {
    
    if (postContainer.classList.contains('Colonne')) {
      postContainer.classList.remove('Colonne');
      postContainer.classList.add('Row');
    } else {
      postContainer.classList.remove('Row');
      postContainer.classList.add('Colonne');
    }

}

rotatePostButton.addEventListener('click', function() {
    toggleRotate();
});


function toggleCompact() {

    postContainer.style.display = postContainer.style.display === "none" ? "flex" : "none";

    titlePostContainer.style.display = titlePostContainer.style.display === "block" ? "none" : "block";
}

viewCompactButton.addEventListener('click', function() {
    toggleCompact();
  });

