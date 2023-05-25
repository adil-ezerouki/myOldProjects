const generateBTN = document.getElementById("generateBTN");
const quoteDisplay = document.getElementById("quoteDisplay");
const ownerDisplay = document.getElementById("ownerDisplay");
var quotes = [
    {
        Qcontent: "I'm selfish, impatient and a little insecure. I make mistakes, I am out of control and at times hard to handle. But if you can't handle me at my worst, then you sure as hell don't deserve me at my best.",
        owner : "Marilyn Monroe"
    }
    ,
    {
        Qcontent: "Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.",
        owner : "Albert Einstein"
    }
    ,
    {
        Qcontent: "A room without books is like a body without a soul.",
        owner : "Marcus Tullius Cicero"
    }
    ,
    {
        Qcontent: "You've gotta dance like there's nobody watching, Love like you'll never be hurt, Sing like there's nobody listening, And live like it's heaven on earth.",
        owner : "William W. Purkey"
    }
    ,
    {
        Qcontent: "You only live once, but if you do it right, once is enough.",
        owner : "Mae West"
    }
    ,
    {
        Qcontent: "Be the change that you wish to see in the world.",
        owner : "Mahatma Gandhi"
    }
    ,
    {
        Qcontent: "In three words I can sum up everything I've learned about life: it goes on.",
        owner : "Robert Frost"
    }
    ,
    {
        Qcontent: "I've learned that people will forget what you said, people will forget what you did, but people will never forget how you made them feel.",
        owner : "Maya Angelou"
    }
    ,
    {
        Qcontent: "A friend is someone who knows all about you and still loves you.",
        owner : "Elbert Hubbard"
    }
    ,
    {
        Qcontent: "Live as if you were to die tomorrow. Learn as if you were to live forever.",
        owner : "Mahatma Gandhi"
    }
]

generateBTN.addEventListener("click", () => {
    const randomNumber = Math.floor(Math.random() * quotes.length);
    quoteDisplay.innerHTML = quotes[randomNumber].Qcontent;
    ownerDisplay.innerHTML = quotes[randomNumber].owner;
    console.log(randomNumber)
})