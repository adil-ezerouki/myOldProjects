var liscenceDisplay = document.getElementById("liscense-display");
var btn = document.getElementById("btn");

var alphabetsArr = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

var NumbersArr = [1,2,3,4,5,6,7,8,9,0];

var lisencesArr = [];



btn.addEventListener("click", ()=> {


    var newaArray = [];

    for(let i = 0; i < 3; i++) {
        let randomNL = Math.floor(Math.random() * 26)
        newaArray.push(alphabetsArr[randomNL])
    }

    newaArray.push("  ")

    for(let i = 0; i < 4; i++) {
        var randomNN = Math.floor(Math.random() * 10 )
        newaArray.push(NumbersArr[randomNN])
    }
    console.log(newaArray);
    var L = newaArray.join('');

    // for(let i = 0 ; i < L.length ; i++) {
    //     var liscense = L.replace(/,/g,"");
    // }

    lisencesArr.push(L)
    console.log(lisencesArr);


        liscenceDisplay.innerHTML = L;


})