// Function for if an error occurs
function showAlert() {
  let alertText = "This does not pass our validation system and must be changed"
  alert(alertText)
}

// Read Only Function
function noEdit() {
  const validInput = ("Read Only Input")
  const userInput = document.forms["editCheck"]["read_only_input"].value
  if(userInput.toString() !== validInput) {
    showAlert()
  }
}

// Numbers Only Function
function onlyNums() {
  const digits = /^[0-9]+$/
  const nums = document.forms["numCheck"]["only_numbers_input"].value
  // If characters in input box are not numbers
  if (!nums.match(digits)) {
    showAlert()
  }
}

// Letters Only Function
function onlyLets() {
  const letters = /^[A-Za-z]+$/
  const alph = document.forms["alphCheck"]["only_letters_input"].value
  // If characters in input box are not letters
  if (!alph.match(letters)) {
    showAlert()
  }
}

// No Blank Function
function noBlank() {
  const empty = document.forms["blankCheck"]["not_empty_input"].value
  if (empty == "") {
    showAlert()
  }
}

// Change Box Color
// function boxChange(color) {
//   document.getElementById("change-box-color").style.background = color;
// }

$(document).ready(function(){
  // Hide This Box
  $("#magicBox").on("click", function() {
    $("#hide-this-box").toggle();
  });

  // Change Box Color
  $("#boxChange").on("click", function() {
    $("#change-box-color").toggle(
      $("#change-box-color").css("background-color", "yellow")
    )
  });

  // Change Box Size
  $("#boxSize").on("click", function () {
    $("#change-box-height").toggle(
      $("#change-box-height").css("height", "50px")
    )
  })

  // Change Date
  $("#changeDate").on("click", function() {
    $("#real-date").toggle(
    )
  })
});

