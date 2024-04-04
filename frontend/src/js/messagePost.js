
// Get the modal
const modalMessage = document.getElementById("modal3")

//get warning wrapper
const warningMessageWrapper = document.getElementById("warningMessageWrapper");

//get message wrapper
const confirmationMessageWrapper = document.getElementById("confirmationMessageWrapper")


// Get the <span> element that closes the modal
var spanMessage = document.getElementById("closeMessage");

// there is a message
if (messageStatut != ""){
    console.log("not null");

    // this is a confirmation and display popup
    if (messageStatut == "The post has been created"){

        warningMessageWrapper.style.display = "hidden";
        confirmationMessageWrapper.style.display = "block";
        modalMessage.style.display = "block";

    // this is a warning and display popup
    }else{
        console.log("warning");

        warningMessageWrapper.style.display = "block";
        confirmationMessageWrapper.style.display = "hidden";
        modalMessage.style.display = "block";

    }
}

// close button close popup 
spanMessage.onclick = function() {
    modalMessage.style.display = "none";
}


