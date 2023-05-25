// classes section

let h11 = document.getElementById("h1");
let h12 = document.getElementById("h2");
let h13 = document.getElementById("h3");
let h14 = document.getElementById("h4");

$(document).ready(function () {
     $("#divbtn1").click(function () {

          $("#class-explanation1").css("z-index", "4")
          $("#class-explanation2").css("z-index", "-1")
          $("#class-explanation3").css("z-index", "-1")
          $("#class-explanation4").css("z-index", "-1")

     })

})

$(document).ready(function () {
     $("#divbtn2").click(function () {

          $("#class-explanation1").css("z-index", "-1")
          $("#class-explanation2").css("z-index", "4")
          $("#class-explanation3").css("z-index", "-1")
          $("#class-explanation4").css("z-index", "-1")

     })

})

$(document).ready(function () {
     $("#divbtn3").click(function () {

          $("#class-explanation1").css("z-index", "-1")
          $("#class-explanation2").css("z-index", "-1")
          $("#class-explanation3").css("z-index", "4")
          $("#class-explanation4").css("z-index", "-1")

     })

})
$(document).ready(function () {
     $("#divbtn4").click(function () {

          $("#class-explanation1").css("z-index", "-1")
          $("#class-explanation2").css("z-index", "-1")
          $("#class-explanation3").css("z-index", "-1")
          $("#class-explanation4").css("z-index", "4")

     })

})

// schedule section

let Monday = document.getElementById("Monday");
let Tuesday = document.getElementById("Tuesday");
let Wednesday = document.getElementById("Wednesday");
let Thursday = document.getElementById("Thursday");
let Friday = document.getElementById("Friday");

let td1 = document.getElementById("td1");
let td2 = document.getElementById("td2");
let td3 = document.getElementById("td3");
let td4 = document.getElementById("td4");
let td5 = document.getElementById("td5");
let td6 = document.getElementById("td6");
let td7 = document.getElementById("td7");
let td8 = document.getElementById("td8");
let td9 = document.getElementById("td9");
let td10 = document.getElementById("td10");


Monday.addEventListener("click",function(){

     Monday.style.color = "#F9735B";
     Tuesday.style.color = "#fff";
     Wednesday.style.color = "#fff";
     Thursday.style.color = "#fff";
     Friday.style.color = "#fff";

     td1.style.visibility = "visible";
     td2.style.visibility = "hidden";
     td3.style.visibility = "hidden";
     td4.style.visibility = "hidden";
     td5.style.visibility = "hidden";
     td6.style.visibility = "visible";
     td7.style.visibility = "hidden";
     td8.style.visibility = "hidden";
     td9.style.visibility = "hidden";
     td10.style.visibility = "hidden";

     td1.innerHTML = "10:00AM - 11:30AM"
     td2.innerHTML = "2:00PM - 3:30PM"
     td3.innerHTML = "10:00AM - 11:30AM"
     td4.innerHTML = "2:00PM - 3:30PM"
     td5.innerHTML = "10:00AM - 11:30AM"
     td6.innerHTML = "2:00PM - 3:30PM"
     td7.innerHTML = "10:00AM - 11:30AM"
     td8.innerHTML = "2:00PM - 3:30PM"
     td9.innerHTML = "10:00AM - 11:30AM"
     td10.innerHTML = "2:00PM - 3:30PM"


})


Tuesday.addEventListener("click",function(){

     Monday.style.color = "#fff";
     Tuesday.style.color = "#F9735B";
     Wednesday.style.color = "#fff";
     Thursday.style.color = "#fff";
     Friday.style.color = "#fff";

     td1.style.visibility = "hidden";
     td2.style.visibility = "visible";
     td3.style.visibility = "hidden";
     td4.style.visibility = "hidden";
     td5.style.visibility = "visible";
     td6.style.visibility = "hidden";
     td7.style.visibility = "hidden";
     td8.style.visibility = "hidden";
     td9.style.visibility = "hidden";
     td10.style.visibility = "hidden";

     td1.innerHTML = "10:00AM - 11:30AM"
     td2.innerHTML = "2:00PM - 3:30PM"
     td3.innerHTML = "10:00AM - 11:30AM"
     td4.innerHTML = "2:00PM - 3:30PM"
     td5.innerHTML = "10:00AM - 11:30AM"
     td6.innerHTML = "2:00PM - 3:30PM"
     td7.innerHTML = "10:00AM - 11:30AM"
     td8.innerHTML = "2:00PM - 3:30PM"
     td9.innerHTML = "10:00AM - 11:30AM"
     td10.innerHTML = "2:00PM - 3:30PM"

     
})

Wednesday.addEventListener("click",function(){

     Monday.style.color = "#fff";
     Tuesday.style.color = "#fff";
     Wednesday.style.color = "#F9735B";
     Thursday.style.color = "#fff";
     Friday.style.color = "#fff";

     td1.style.visibility = "hidden";
     td2.style.visibility = "hidden";
     td3.style.visibility = "hidden";
     td4.style.visibility = "hidden";
     td5.style.visibility = "hidden";
     td6.style.visibility = "hidden";
     td7.style.visibility = "visible";
     td8.style.visibility = "hidden";
     td9.style.visibility = "hidden";
     td10.style.visibility = "visible";

     td1.innerHTML = "10:00AM - 11:30AM"
     td2.innerHTML = "2:00PM - 3:30PM"
     td3.innerHTML = "10:00AM - 11:30AM"
     td4.innerHTML = "2:00PM - 3:30PM"
     td5.innerHTML = "10:00AM - 11:30AM"
     td6.innerHTML = "2:00PM - 3:30PM"
     td7.innerHTML = "10:00AM - 11:30AM"
     td8.innerHTML = "2:00PM - 3:30PM"
     td9.innerHTML = "10:00AM - 11:30AM"
     td10.innerHTML = "2:00PM - 3:30PM"

     
})

Thursday.addEventListener("click",function(){

     Monday.style.color = "#fff";
     Tuesday.style.color = "#fff";
     Wednesday.style.color = "#fff";
     Thursday.style.color = "#F9735B";
     Friday.style.color = "#fff";

     td1.style.visibility = "hidden";
     td2.style.visibility = "hidden";
     td3.style.visibility = "hidden";
     td4.style.visibility = "visible";
     td5.style.visibility = "hidden";
     td6.style.visibility = "hidden";
     td7.style.visibility = "hidden";
     td8.style.visibility = "hidden";
     td9.style.visibility = "visible";
     td10.style.visibility = "hidden";

     td1.innerHTML = "10:00AM - 11:30AM"
     td2.innerHTML = "2:00PM - 3:30PM"
     td3.innerHTML = "10:00AM - 11:30AM"
     td4.innerHTML = "2:00PM - 3:30PM"
     td5.innerHTML = "10:00AM - 11:30AM"
     td6.innerHTML = "2:00PM - 3:30PM"
     td7.innerHTML = "10:00AM - 11:30AM"
     td8.innerHTML = "2:00PM - 3:30PM"
     td9.innerHTML = "10:00AM - 11:30AM"
     td10.innerHTML = "2:00PM - 3:30PM"

     
})

Friday.addEventListener("click",function(){

     Monday.style.color = "#fff";
     Tuesday.style.color = "#fff";
     Wednesday.style.color = "#fff";
     Thursday.style.color = "#fff";
     Friday.style.color = "#F9735B";

     td1.style.visibility = "hidden";
     td2.style.visibility = "hidden";
     td3.style.visibility = "visible";
     td4.style.visibility = "hidden";
     td5.style.visibility = "hidden";
     td6.style.visibility = "hidden";
     td7.style.visibility = "hidden";
     td8.style.visibility = "visible";
     td9.style.visibility = "hidden";
     td10.style.visibility = "hidden";

     td1.innerHTML = "10:00AM - 11:30AM"
     td2.innerHTML = "2:00PM - 3:30PM"
     td3.innerHTML = "10:00AM - 11:30AM"
     td4.innerHTML = "2:00PM - 3:30PM"
     td5.innerHTML = "10:00AM - 11:30AM"
     td6.innerHTML = "2:00PM - 3:30PM"
     td7.innerHTML = "10:00AM - 11:30AM"
     td8.innerHTML = "2:00PM - 3:30PM"
     td9.innerHTML = "10:00AM - 11:30AM"
     td10.innerHTML = "2:00PM - 3:30PM"

     
})
