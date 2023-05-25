
var numberDisplay = document.getElementById("number");
var custumizedN = document.getElementById("custumizedN");
var chooseBTN = document.getElementById("chooseBTN");
var addedNumberDisplay = document.getElementById("addedNumberDisplay");
var btns = document.querySelectorAll(".btn")
var number = 0;
var addedNumber;
var addedNumberInt;

btns.forEach((btn) => {
    btn.addEventListener("click", function (e) {
        const styles = e.target.classList;
        console.log(styles);
        if (styles.contains("increase")) {
            if (addedNumberInt == null) {
                number++;
            } else {
                number += addedNumberInt;
            }
        } else if (styles.contains("decrease")) {
            if(addedNumberInt == null) {
                number--;
            } else {
            number -= addedNumberInt;
        }
        } else {
            number = 0;
        }
        numberDisplay.innerHTML = number;
        if (number > 0) {
            numberDisplay.style.color = "green"
        } else if (number < 0) {
            numberDisplay.style.color = "red"
        } else {
            numberDisplay.style.color = "black"
        }
    })
})

chooseBTN.addEventListener("click", function () {
    
    addedNumberInt = parseInt(custumizedN.value)
    addedNumberDisplay.innerText = addedNumberInt;
    this.style.backgroundColor
    
})