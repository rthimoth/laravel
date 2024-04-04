const printArea = document.getElementById("content");
const preferenceResultPreferences = document.getElementById("preferenceResult");

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

const dropdown = () => {
  const component = document.createElement("div");
  component.classList.add("relative");

  const input = createInput();
  const dropdown = showDropdown();

  component.appendChild(input);
  component.appendChild(dropdown);
  printArea.appendChild(component);

  document.addEventListener('click', function(event) {
    // If the clicked element is not part of the dropdown, hide the dropdown
    if (!printArea.contains(event.target) ) {
      input.classList.remove("roundedInput");
      input.classList.add("rounded-lg");
      dropdown.style.display = "none";  }
    
  });


}

const createInput = () => {
  // Creates the input outline
  const input = document.createElement("div");
  input.classList = "inputPost";
  input.classList.add("rounded-lg");

  input.addEventListener("click", toggleDropdown);

  // Creates the input placeholder content
  const inputPlaceholder = document.createElement("div");
  inputPlaceholder.classList = "input__placeholderPreferences";

  const placeholder = document.createElement("p");
  placeholder.textContent = "Category";
  placeholder.classList.add("placeholderPreferences");

    // Appends the placeholder and chevron (stored in assets.js)
    inputPlaceholder.appendChild(placeholder);
    inputPlaceholder.appendChild(dropdownIcon());
    input.appendChild(inputPlaceholder);

  return input;
};

const showDropdown = () => {
  const structure = document.createElement("div");
  structure.classList.add("structurePreferences", "hide");

  categories.forEach(category => {
    const option = document.createElement("div");
    option.classList.add('optionPreferences');
    option.addEventListener("click", () => selectOption(category));

    
    const t = document.createElement("p");
    t.textContent = category.text;

    const imageCategory = document.createElement("img");
    imageCategory.src= category.imageUrl;
    imageCategory.alt= category.text;
    imageCategory.classList.add("logosize");

    option.appendChild(imageCategory);
    option.appendChild(t);

    option.appendChild(t);
    structure.appendChild(option);
  });
  return structure;
};

const toggleDropdown = () => {
  const dropdown = document.querySelector(".structurePreferences");
  const input = document.querySelector(".inputPost");
  if (dropdown.style.display === 'block'){
    input.classList.remove("roundedInput");
    input.classList.add("rounded-lg");
    dropdown.style.display = "none";
  }else{
    input.classList.add("roundedInput");
    input.classList.remove("rounded-lg");
    dropdown.style.display = "block";
  }
  
  
  input.classList.toggle("input__activePreferences");
};

const selectOption = (category) => {
  
  const text = document.querySelector('.placeholderPreferences');
  // console.log(category);

  text.textContent = category.text;

  const imageSelect = document.createElement("img");
  imageSelect.src= category.imageUrl;
  imageSelect.alt= category.text;
  imageSelect.classList.add("logosize");
  text.appendChild(imageSelect);

  preferenceResultPreferences.value= category.text;
  preferenceResultPreferences.innerHTML= category.text;
    // console.log(preferenceResultPreferences.value= category);

  text.classList.add('input__selectedPreferences')
  toggleDropdown();
};


dropdown();

