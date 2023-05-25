
var input = document.getElementById("number");
var btn = document.getElementById("btn");
var display = document.querySelectorAll(".Display");
var err = document.getElementById("err");
var oddDisplay = document.getElementById("odd");
var evenDisplay = document.getElementById("even");
var resetBTN = document.getElementById("reset");
var odd = [];
var even = [];

btn.addEventListener("click", () => {
    var inputInt = parseInt(input.value);
    if (inputInt % 2 == 0) {
        if (even.includes(inputInt) === false) {
            even.push(inputInt);
            evenDisplay.innerHTML = even;
            evenDisplay.style.color = "green";
        } else {
            err.innerHTML = inputInt + " is already typed !!";
            setTimeout(errHide, "2000");
        }
    } else {
        if (!odd.includes(inputInt)) {
            odd.push(inputInt);
            oddDisplay.innerHTML = odd;
            oddDisplay.style.color = "blue";
        } else {
            err.innerHTML = inputInt + " is already typed !!";
            setTimeout(errHide, "2000");
        }
    }
})


function errHide() {
    err.innerHTML = "";
}

resetBTN.addEventListener("click", ()=> {
    odd = [];
    even = [];

    oddDisplay.innerHTML = odd;
    evenDisplay.innerHTML = odd;
})
