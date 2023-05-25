const btn = document.getElementById("showBtn");
const div = document.getElementById("confirmationDiv");


btn.addEventListener("click",function(){
    div.style.visibility = "visible";
    div.slideDown("slow");
})