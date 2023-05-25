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
    ,
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

cardArray.sort(() => 0.5 - Math.random())
const gridDisplay = document.getElementById("grid");
var chosenCards = [];
var chosenCardsId = [];
var wonCards = [];
console.log(cardArray)

function createBoard() {
    for(let i = 0; i < cardArray.length; i++) {
        var card = document.createElement("img");
        card.setAttribute("src","images/blank.png");
        card.setAttribute("id",i);
        card.addEventListener("click", flipCard);
        gridDisplay.append(card);
    }
}

createBoard();

function flipCard() {
    var cardId = this.getAttribute("id");
    chosenCards.push(cardArray[cardId].name)
    chosenCardsId.push(cardId)
    this.setAttribute("src",cardArray[cardId].image);
    if(chosenCards.length == 2) {
        setTimeout(checkMatch, "500")
    }
}


function checkMatch() {
    var card = document.querySelectorAll("#grid img");
    var resultDisplay = document.getElementById("result")
    var firstChoice = chosenCardsId[0];
    var secondChoice = chosenCardsId[1];
    if(chosenCards[0] == chosenCards[1]){
        card[firstChoice].setAttribute("src","images/white.png")
        card[secondChoice].setAttribute("src","images/white.png")
        card[firstChoice].removeEventListener("click", flipCard);
        card[secondChoice].removeEventListener("click", flipCard)
        alert("it's a match !!")
        wonCards.push(chosenCards);
    } else {
        card[firstChoice].setAttribute("src","images/blank.png")
        card[secondChoice].setAttribute("src","images/blank.png")
        alert("sorry try agin !!")
    }

    if(wonCards.length === 6) {
        resultDisplay.innerHTML = "congratulations you have them all !!"
    } else {
        resultDisplay.innerHTML = wonCards.length;
    }

    chosenCards = []
    chosenCardsId = []
}