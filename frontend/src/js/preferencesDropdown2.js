const content2 = document.getElementById("preferences");
const preferenceResult2 = document.getElementById("preferenceResult2");

import { preferences } from "./preferenceslist.js";


const dropdownIcon = () => {
  const dropdown = document.createElement('span');
  dropdown.innerHTML = `
  <svg width="14px" height="7px" viewBox="0 0 10 5" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
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

const dropdownPreferences2 = () => {

  const component = document.createElement("div");

  const input = createInput();
  const dropdown = showDropdown();

  component.appendChild(input);
  component.appendChild(dropdown);
  content2.appendChild(component);

  document.addEventListener('click', function(event) {
    event.preventDefault();
    // If the clicked element is not part of the dropdown, hide the dropdown
    if (!content2.contains(event.target) ) {
      dropdown.style.display = "none";  }
    
  });
  input.addEventListener('click', function(event) {
    event.preventDefault();
    if (dropdown.style.display == "block"){
      dropdown.style.display = "none";
    }else{
      dropdown.style.display = "block";
    }
    
  });
  
}

const createInput = () => {
  // Creates the input outline
  const input = document.createElement("div");
  input.classList = "inputPreferencesGray";
  input.addEventListener("click", toggleDropdown);

  // Creates the input placeholder content
  const inputPlaceholder = document.createElement("div");
  inputPlaceholder.classList = "input__placeholderPreferences";

  const placeholder = document.createElement("span");
  placeholder.innerHTML= `
  <img class="
  shrink-0 
  orangefilter
  opacity-50 hover:opacity-100
  h-6 w-6
  " src="/frontend/src/pics/down-arrow.png" alt=" down icon">`;
  placeholder.classList.add("placeholderPreferences");

  const resetText = document.createElement("p");
  resetText.textContent = `Reset`;

  // Appends the placeholder and chevron (stored in assets.js)
  inputPlaceholder.appendChild(placeholder);
  inputPlaceholder.appendChild(dropdownIcon());
  input.appendChild(inputPlaceholder);

  return input;
};

const showDropdown = () => {
  const structure = document.createElement("div");
  structure.classList.add("structurePreferencesGray", "hide");

  preferences.forEach(preference => {
    const option = document.createElement("div");
    option.classList.add('optionPreferences');
    option.addEventListener("click", () => selectOptionPreferences(preference));

    const t = document.createElement("p");
    t.textContent = `${preference}`;

    option.appendChild(t);
    structure.appendChild(option);
  });
  return structure;
};

const toggleDropdown = () => {
  const dropdown = document.querySelector(".structurePreferencesGray");
  dropdown.style.display = "none";

  const input = document.querySelector(".inputPreferencesGray");
  input.classList.toggle("input__activePreferences");
};

const selectOptionPreferences = (preference) => {
  const text = document.querySelector('.placeholderPreferences');
  text.textContent = preference;
  preferenceResult2.value= preference;
  text.classList.add('input__selected')
  toggleDropdown();
};


dropdownPreferences2();


