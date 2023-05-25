const phones = [
    {
        name: "Remdi Note 10 Pro",
        image: "images/1.jpg",
        price: 3000
    }
    ,
    {
        name: "Galaxy Ultra S22",
        image: "images/2.png",
        price: 8000
    }
    ,
    {
        name: "Iphone 13",
        image: "images/3.png",
        price: 14600
    }
    ,
    {
        name: "Oppo Reno 6",
        image: "images/4.png",
        price: 2500
    }
    ,
    {
        name: "Tecno spark 4",
        image: "images/5.jpg",
        price: 1800
    }
    ,
    {
        name: "Realme Note 8",
        image: "images/6.png",
        price: 2800
    }

]

const btns = document.querySelectorAll(".btn");
var selectedPhone;
var tbody = document.getElementById("tbody");
var total = [];

var td = document.getElementById("td");
var td1 = document.getElementById("td1");
var td2 = document.getElementById("td2");


btns.forEach((btn) => {
    btn.addEventListener("click", (e) => {
        var targeted = e.target.classList;

        if (targeted.contains("redmi")) {

            const tr = document.createElement("tr");
            const td = document.createElement("td");
            const td1 = document.createElement("td");
            const td2 = document.createElement("td");
            const img = document.createElement("img");
            tbody.appendChild(tr);
            tr.appendChild(td);
            tr.appendChild(td1);
            tr.appendChild(td2);
            td1.append(img);
            td.id = "td";
            td1.id = "td1";
            td2.id = "td2";
            td.innerHTML = phones[0].name
            td2.innerHTML = phones[0].price
            img.setAttribute("src", phones[0].image)

            total.push(phones[0].price);

        } else if (targeted.contains("galaxy")) {

            const tr = document.createElement("tr");
            const td = document.createElement("td");
            const td1 = document.createElement("td");
            const td2 = document.createElement("td");
            const img = document.createElement("img");
            tbody.appendChild(tr);
            tr.appendChild(td);
            tr.appendChild(td1);
            tr.appendChild(td2);
            td1.append(img);
            td.id = "td";
            td1.id = "td1";
            td2.id = "td2";
            td.innerHTML = phones[1].name
            td2.innerHTML = phones[1].price
            img.setAttribute("src", phones[1].image)

            total.push(phones[1].price);

        } else if (targeted.contains("iphone")) {

            const tr = document.createElement("tr");
            const td = document.createElement("td");
            const td1 = document.createElement("td");
            const td2 = document.createElement("td");
            const img = document.createElement("img");
            tbody.appendChild(tr);
            tr.appendChild(td);
            tr.appendChild(td1);
            tr.appendChild(td2);
            td1.append(img);
            td.id = "td";
            td1.id = "td1";
            td2.id = "td2";
            td.innerHTML = phones[2].name
            td2.innerHTML = phones[2].price
            img.setAttribute("src", phones[2].image)

            total.push(phones[2].price);

        } else if (targeted.contains("oppo")) {

            const tr = document.createElement("tr");
            const td = document.createElement("td");
            const td1 = document.createElement("td");
            const td2 = document.createElement("td");
            const img = document.createElement("img");
            tbody.appendChild(tr);
            tr.appendChild(td);
            tr.appendChild(td1);
            tr.appendChild(td2);
            td1.append(img);
            td.id = "td";
            td1.id = "td1";
            td2.id = "td2";
            td.innerHTML = phones[3].name
            td2.innerHTML = phones[3].price
            img.setAttribute("src", phones[3].image)

            total.push(phones[3].price);

        } else if (targeted.contains("tecno")) {

            const tr = document.createElement("tr");
            const td = document.createElement("td");
            const td1 = document.createElement("td");
            const td2 = document.createElement("td");
            const img = document.createElement("img");
            tbody.appendChild(tr);
            tr.appendChild(td);
            tr.appendChild(td1);
            tr.appendChild(td2);
            td1.append(img);
            td.id = "td";
            td1.id = "td1";
            td2.id = "td2";
            td.innerHTML = phones[4].name
            td2.innerHTML = phones[4].price + " DH"
            img.setAttribute("src", phones[4].image)

            total.push(phones[4].price);

        } else {

            const tr = document.createElement("tr");
            const td = document.createElement("td");
            const td1 = document.createElement("td");
            const td2 = document.createElement("td");
            const img = document.createElement("img");
            tbody.appendChild(tr);
            tr.appendChild(td);
            tr.appendChild(td1);
            tr.appendChild(td2);
            td1.append(img);
            td.id = "td";
            td1.id = "td1";
            td2.id = "td2";
            td.innerHTML = phones[5].name
            td2.innerHTML = phones[5].price
            img.setAttribute("src", phones[5].image)

            total.push(phones[5].price);

        }

    })
})


console.log(total)
