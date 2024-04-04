
const overlay = document.getElementById("overlay")

// Get the modal
const modalComment = document.getElementById("modal6")

const textArea = document.querySelector('#bodyPost');


// Get the <span> element that closes the modal
var spanComment = document.getElementById("closeModalUpdateComment");


// Get the button that opens the modal
const btnEditComment= document.getElementById("editCommentButton")

if (btnEditComment != null){
    
    btnEditComment.onclick = function() {
        console.log("test");
        modalComment.style.display = "block";
        overlay.classList.add('overlayactive');
    }

    spanComment.onclick = function() {
        modalComment.style.display = "none";
        overlay.classList.remove('overlayactive');
        resetTextarea();
    }

    textArea.onclick = function() {
        textArea.classList.add("textareablack");
        textArea.classList.remove("textareagray");
        if (textArea.value === 'Tap your Comment here'){
            textArea.value = '';
        }
    }


    function resetTextarea(){

    if (textArea.value == '' && !textArea.onclick()){
        textArea.value = 'Tap your Comment here';
        textArea.classList.add("textareagray");
        textArea.classList.remove("textareablack");
    }

    }


    resetTextarea();
}

