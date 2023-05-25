var divToDo = document.getElementById("div-to-do");
var btns = document.querySelectorAll(".btn");
var todoinput = document.getElementById("todolist");
var todoUl = document.getElementById("todoitems");
var iEle = document.getElementsByTagName("i");

btns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        var targeted = e.target.classList;

        if (targeted.contains("add")) {
            createLiAndSpan();
            close();
        } else {
            eraseAll();
        }
    })
})


function createLiAndSpan() {

    if (todoinput.value == "") {
        alert("you should type something")
    } else {
        const li = document.createElement("li");
        todoUl.append(li);
        li.innerHTML = todoinput.value;
        li.className = "li"

        const span = document.createElement("span");
        li.append(span);
        span.innerHTML = "x";
        span.className = "close";

        const i = document.createElement("i");
        li.append(i);
        i.className = "fa-solid fa-pen";

    }
}

function close() {
    let closeSpan = document.getElementsByClassName("close");
    for (let i = 0; i < closeSpan.length; i++) {
        closeSpan[i].onclick = function () {
            var parentLi = this.parentElement;
            parentLi.style.display = "none";
        }
    }
}

function toggleChecked() {
    todoUl.addEventListener("click", function (e) {
        if (e.target.tagName === 'LI') {
            e.target.classList.toggle("checked");
        }
    })
}

toggleChecked();

let li = document.getElementsByTagName("li");

function eraseAll() {

     let li = document.getElementsByTagName("li");
     li[0].parentElement.innerHTML = ''

    // for (let i = 0; i < li.length; i++) {
    //     li[i].remove()
    // }

    console.log(li)
}

console.log(li)


function edit() {

    for (let j = 0; j < iEle.length; j++)
        iEle[j].addEventListener("click", function () {
            console.log("m9awd");
        })
}

edit();