var currentStep = 0;
var steps = document.getElementsByClassName("step");

function nextStep(event) {
  event.preventDefault();
  if (!validateForm()) return false;
  steps[currentStep].style.display = "none";
  steps[currentStep + 1].style.display = "block";
  currentStep++;
}

function prevStep(event) {
  event.preventDefault();
  steps[currentStep].style.display = "none";
  steps[currentStep - 1].style.display = "block";
  currentStep--;
}

function validateForm(event) {
  var inputs = steps[currentStep].getElementsByTagName("input");
  for (var i = 0; i < inputs.length; i++) {
    if (inputs[i].value === "") {
      alert("Veuillez remplir tous les champs !");
      return false;
    }
  }
  return true;
}

