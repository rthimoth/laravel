import { categories } from "./categories.js";
const containerSidebar = document.getElementById("categoriesList");

categories.forEach((category, index) => {

const buttonCategory = document.createElement("button");

buttonCategory.textContent = category.text;
buttonCategory.classList.add("optionSidebar");
buttonCategory.classList.add("bg-custom");
buttonCategory.setAttribute("id", `category-button-${index}`);

// if (index==0 ){
//     buttonCategory.classList.add("rounded-t-lg");
// };

// if (index==16 ){
//     buttonCategory.classList.add("rounded-b-lg");
// };

// const imageSide = document.createElement("img");
// imageSide.src= category.imageUrl;
// imageSide.alt= category.text;
// imageSide.classList.add("logosize");
// buttonCategory.appendChild(imageSide);

containerSidebar.appendChild(buttonCategory);
});