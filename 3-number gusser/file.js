const computerChoiceDisplay = document.getElementById("Computer_Choice");
const userChoiceDisplay = document.getElementById("User_Choice");
const resultDisplay = document.getElementById("result");
const chooseBtn = document.getElementById("choose");
const chosenNumber = document.getElementById("Chosen_Number");
let computerChoice;
let userChoice;
let result;

function generateRandomeNumbers() {
     computerChoice = Math.floor(Math.random() * 4);
  computerChoiceDisplay.innerHTML = computerChoice;
}

function userChoiceNumber() {
  userChoice = chosenNumber.value;
  userChoiceDisplay.innerHTML = userChoice
};


function getResults() {
  if(userChoice == computerChoice) {
    result = "woow it's the same"
  } else if (userChoice > 4 || userChoice <0 ) {
    alert("choose a number between 1 and 4")
  }else {
    result = "opps you missed it, try again"
  }
 
  resultDisplay.innerHTML = result;
}

chooseBtn.addEventListener("click",() => {
  generateRandomeNumbers();
  userChoiceNumber();
  getResults();
});