const printAreaPreferences = document.getElementById("category");
const preferenceResult = document.getElementById("preferenceResult2");

import { categories } from "./categories.js";

const dropdownIcon = () => {
  const dropdown = document.createElement('span');
  dropdown.innerHTML = `<svg width="14px" height="7px" viewBox="0 0 10 5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <g id="Delivery" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
    <g id="Transactions-(Landing)" transform="translate(-1360.000000, -29.000000)" fill="#CDCFD3" fill-rule="nonzero">
        <g id="Group-4" transform="translate(1360.000000, 29.000000)">
            <polygon id="Shape" points="0 0 5 5 10 0"></polygon>
        </g>
    </g>
    </g>
</svg>`;
  return dropdown;
}
// const dropdownReset = document.getElementById("test");


const dropdownPreferencesFunc = () => {
  const ResultPreferences = document.createElement("div");

  const inputPreferences = createInputPreferences();
  const dropdownPreferences = showDropdownPreferences();

  ResultPreferences.appendChild(inputPreferences);
  ResultPreferences.appendChild(dropdownPreferences);
  printAreaPreferences.appendChild(ResultPreferences);


  document.addEventListener('click', function(event) {
    // If the clicked element is not part of the dropdown, hide the dropdown
    if (!printAreaPreferences.contains(event.target) ) {
      inputPreferences.classList.remove("roundedInput");
      inputPreferences.classList.add("rounded-lg");
      dropdownPreferences.style.display = "none";  }
    
  });
  
}

const createInputPreferences = () => {
  // Creates the input outline
  const inputPreferences = document.createElement("div");
  inputPreferences.classList = "input";
  inputPreferences.classList.add("rounded-lg");
  inputPreferences.addEventListener("click", toggleDropdownPreferences);

  // Creates the input placeholder content
  const inputPlaceholder = document.createElement("div");
  inputPlaceholder.classList = "input__placeholder";

  const placeholderPreferences = document.createElement("p");
  placeholderPreferences.textContent = "Category";
  placeholderPreferences.classList.add("placeholder");


    // Appends the placeholder and chevron (stored in assets.js)
    inputPlaceholder.appendChild(placeholderPreferences);
    inputPlaceholder.appendChild(dropdownIcon());
    inputPreferences.appendChild(inputPlaceholder);

  return inputPreferences;
};

const showDropdownPreferences = () => {
  const structurePreferences = document.createElement("div");
  structurePreferences.classList.add("structure", "hide");

  categories.forEach(category => {
    const optionPreferences = document.createElement("div");
    optionPreferences.classList.add('option');
    optionPreferences.addEventListener("click", () => selectOptionPreferences(category));

    const imagePreferences = document.createElement("img");
    const PreferencesContent = document.createElement("p");
    PreferencesContent.textContent = category.text;
    imagePreferences.src= category.imageUrl;
    imagePreferences.alt= category.text;
    imagePreferences.classList.add("logosize");
    optionPreferences.appendChild(imagePreferences);
    optionPreferences.appendChild(PreferencesContent);
   

    structurePreferences.appendChild(optionPreferences);
  });
  return structurePreferences;
};

const toggleDropdownPreferences = () => {
  const dropdown = document.querySelector(".structure");
  const inputPreferences = document.querySelector(".input");

  if (dropdown.style.display === 'block'){
    inputPreferences.classList.remove("roundedInput");
    inputPreferences.classList.add("rounded-lg");
    dropdown.style.display = "none";
  }else{
    inputPreferences.classList.add("roundedInput");
    inputPreferences.classList.remove("rounded-lg");
    dropdown.style.display = "block";
  }
  
  inputPreferences.classList.toggle("input__active");
};

const selectOptionPreferences = (category) => {
  const text = document.querySelector('.placeholder');

  text.textContent = category.text;

  const imagePref = document.createElement("img");
  imagePref.src= category.imageUrl;
  imagePref.alt= category.text;
  imagePref.classList.add("logosize");
  text.appendChild(imagePref);

  preferenceResult.value= category.text;
  preferenceResult.innerHTML= category.text;

  text.classList.add('input__selected')
  toggleDropdownPreferences();
};


dropdownPreferencesFunc();


