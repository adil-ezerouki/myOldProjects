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


cardArray.sort(() => 0.5 - Math.random());

const gridDisplay = document.querySelector("#grid");
let chosenCards = [];
let chosenCardsId = [];
let wonCards = [];

function createBoard() {
    for (let i = 0; i < cardArray.length; i++) {
        const card = document.createElement("img");
        card.setAttribute("src", "images/blank.png");
        card.setAttribute("id", i);
        card.addEventListener("click", flipCard);
        gridDisplay.append(card);
    }
}

createBoard();

function flipCard() {
    const cardId = this.getAttribute("id");
    chosenCards.push(cardArray[cardId].name);
    chosenCardsId.push(cardId);
    this.setAttribute("src",cardArray[cardId].image);
  if(chosenCards.length === 2) {
    setTimeout(checkMatch, "500")
  }
}

function checkMatch() {
    var cards = document.querySelectorAll("#grid img");
    var resultDisplay = document.querySelector("#result");
    const optionOneId = chosenCardsId[0];
    const optionTwoId = chosenCardsId[1];

    if (chosenCards[0] == chosenCards[1]) {
        alert("it's a Match !! ");
        cards[optionOneId].setAttribute("src", "images/white.png");
        cards[optionTwoId].setAttribute("src", "images/white.png");
        cards[optionOneId].removeEventListener("click", flipCard);
        cards[optionTwoId].removeEventListener("click", flipCard);
        wonCards.push(chosenCards);
        console.log(wonCards);
    } else {
        cards[optionOneId].setAttribute("src", "images/blank.png")
        cards[optionTwoId].setAttribute("src", "images/blank.png")
        alert("sorry try again !!")
    }
    
    if(wonCards.length === 6) {
        resultDisplay.innerHTML = "congratulations you found them all, your score is " + 6;
    } else {
        resultDisplay.textContent = wonCards.length;
    }

    chosenCards = []
    chosenCardsId = []
}

console.log(cardArray)