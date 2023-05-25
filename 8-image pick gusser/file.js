const cardArray = [
    {
        name: "cheeseburger",
        image: "images/cheeseburger.png"
    }
    ,
    {
        name: "fries",
        image: "images/fries.png"
    }
    ,
    {
        name: "hotdog",
        image: "images/hotdog.png"
    }
    ,
    {
        name: "ice-cream",
        image: "images/ice-cream.png"
    }
    ,
    {
        name: "milkshake",
        image: "images/milkshake.png"
    }
    ,
    {
        name: "pizza",
        image: "images/pizza.png"
    }

]


var div = document.getElementById("div");
var result = document.getElementById("result");
var score = document.getElementById("score");
var possiblechoices = document.querySelectorAll("button");
var computechoice;
var userchoice;
var userScore = 0;
var userChoiceImgId;
var userChoiceImg
possiblechoices.forEach(possiblechoice => possiblechoice.addEventListener("click", (e) => {
    userchoice = e.target.id;

    generateComputerChoice();
    getResult();
    
    if (userChoiceImg) {
        userChoiceImg.className = ""
    }
    
    userChoiceImg = document.querySelector(`#card #${userchoice}`);
    console.log(userChoiceImg);
    
    if(computechoice != userchoice) {
        userChoiceImg.setAttribute("class", "userchoice");
    } else {
        userChoiceImg.setAttribute("class", "samechoice");
    }

}))


function generateComputerChoice() {
    computechoice = Math.floor(Math.random() * 6 + 1);
    switch (computechoice) {
        case 1:
            computerChoiceImgId = cardArray[0].name;
            break;
        case 2:
            computerChoiceImgId = cardArray[1].name;
            break;
        case 3:
            computerChoiceImgId = cardArray[2].name;
            break;
        case 4:
            computerChoiceImgId = cardArray[3].name;
            break;
        case 5:
            computerChoiceImgId = cardArray[4].name;
            break;
        case 6:
            computerChoiceImgId = cardArray[5].name;
            break;
    }


    var computerChoiceImgId;
    var computerChoiceImg = document.getElementById(computerChoiceImgId);
    computerChoiceImg.setAttribute("class", "computechoice");

    
}

function getResult() {
    if (userchoice == computechoice) {
        result.innerHTML = "Win 👍 !!!";
        userScore += 1;
        score.innerHTML = userScore;
        score.style.color = "red";
        
    } else {
        result.innerHTML = "Lose 👎 !!!"
    }
}