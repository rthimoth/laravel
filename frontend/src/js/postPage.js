//get main content input of the post 
const textArea = document.querySelector('#bodyPost');
//get title content input of the post 
const title = document.querySelector('#titlePost');
// user clicks
document.addEventListener('click', function(event) {

// title input is blank and user is not typing
if (title.innerHTML == "" && !title.contains(event.target)) {
    title.classList.add("textareagray");
    title.innerHTML ="Title";
    title.classList.remove("textareablack");
}

if (textArea.value == '' && !textArea.contains(event.target)){

    textArea.value = 'Tap your post here';
    textArea.classList.add("textareagray");
    textArea.classList.remove("textareablack");
}
// user clicks on main content post 
if (textArea.contains(event.target)){
    // add new police
    textArea.classList.add("textareablack");
    // remove old one
    textArea.classList.remove("textareagray");
    // reset inner content
    if (textArea.value === 'Tap your post here'){
        textArea.value = '';
    }
}

})


