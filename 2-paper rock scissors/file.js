const computerChoiceDisplay = document.getElementById("computer_choice");
const userChoiceDisplay = document.getElementById("user_choice");
const resultDisplay = document.getElementById("result");
const possibleChoices = document.querySelectorAll("button");
let userChoice;
let computerChoice;
let results;

function generateComputerChoice(){
    const randomNumber= Math.floor(Math.random()*3) + 1;

    if (randomNumber === 1) {
        computerChoice = "rock";
    }

    if (randomNumber === 2) {
        computerChoice = "paper";
    }

    if (randomNumber === 3) {
        computerChoice = "scissors";
    }

    computerChoiceDisplay.innerHTML = computerChoice;
 }

function getResults() {
    if(computerChoice == userChoice ) {
        results = "it's draw !!"
    }

    if(computerChoice == "rock" && userChoice == "paper" ) {
        results = "you win !!"
    }

    if(computerChoice == "rock" && userChoice == "scissors" ) {
        results = "you lose !!"
    }

    if(computerChoice == "scissors" && userChoice == "paper" ) {
        results = "you lose !!"
    }

    if(computerChoice == "scissors" && userChoice == "rock" ) {
        results = "you win !!"
    }

    if(computerChoice == "paper" && userChoice == "rock" ) {
        results = "you lose !!"
    }

    if(computerChoice == "paper" && userChoice == "scissors" ) {
        results = "you win !!"
    };

    resultDisplay.innerHTML = results;

}

possibleChoices.forEach(possibleChoice => possibleChoice.addEventListener("click" , (e) => {
    userChoice = e.target.id;
    userChoiceDisplay.innerHTML = userChoice;
    generateComputerChoice()
    getResults()
}))
