import { others } from "./others.js";
const containerSidebar = document.getElementById("othersList");
const createPostContainerSidebar = document.getElementById("CreatePostButtonContainerSide");


others.forEach((other, index) => {

const buttonOther = document.createElement("button");

buttonOther.textContent = other.text;
buttonOther.classList.add("optionSidebar");
buttonOther.setAttribute("id", `other-button-${index}`);


const imageOtherSide = document.createElement("img");
imageOtherSide.src= other.imageUrl;
imageOtherSide.alt= other.text;
imageOtherSide.classList.add("logosize");
buttonOther.appendChild(imageOtherSide);

if (index == 0 ){
    createPostContainerSidebar.appendChild(buttonOther);
}else{
    containerSidebar.appendChild(buttonOther);
}

});