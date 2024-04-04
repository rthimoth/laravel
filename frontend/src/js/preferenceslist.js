import { preferences } from "./preferences.js";

const preferenceContainer = document.getElementById("preferencesList");
const buttonNewToOldContainer = document.getElementById("newToOldButtonContainerSide");

preferences.forEach((preference, index) => {

const buttonPreference = document.createElement("button");

buttonPreference.textContent = preference.text;
buttonPreference.classList.add("optionSidebar");
buttonPreference.setAttribute("id", `preference-button-${index}`);

// if (index==2 ){
//     buttonPreference.classList.add("rounded-b-lg");
// };

const imagePreferencesSide = document.createElement("img");
imagePreferencesSide.src= preference.imageUrl;
imagePreferencesSide.alt= preference.text;
imagePreferencesSide.classList.add("logosize");
buttonPreference.appendChild(imagePreferencesSide);

if (index== 1 ){
    buttonNewToOldContainer.appendChild(buttonPreference);
}else{
    preferenceContainer.appendChild(buttonPreference);

}

});