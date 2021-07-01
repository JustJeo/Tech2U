// Function for if an error occurs
function showAlert() {
  let alertText = "This does not pass our validation system and must be changed"
  alert(alertText)
}

// Read Only Function
function noEdit() {
  let validInput = ("Read Only Input")
  if(userInput.toString() !== validInput) {
    showAlert()
  }
}

// Numbers Only Function
function onlyNums() {
  const digits = /^[0-9]+$/
  const nums = document.forms["numCheck"]["only_numbers_input"].value
  if (!nums.match(digits)) {
    showAlert()
  }
  // If characters in input box are not numbers
    // Then showAlert()
}

// Letters Only Function
function onlyLets() {
  // If characters in input box are not letters
    // Then showAlert()
}

// No Blank Function
function noBlank() {
  const empty = document.forms["blankCheck"]["not_empty_input"].value
  if (empty == "") {
    showAlert()
  }
}