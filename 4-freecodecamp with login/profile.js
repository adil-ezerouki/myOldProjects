let img1 = document.getElementById("profileBTN1");
let img2 = document.getElementById("profileBTN2");
let parentDiv = document.getElementById("website_logo");
let body = document.getElementById("body");
let dark_btn = document.getElementById("dark");
let header = document.getElementById("header");
let headerImg = document.getElementById("headerImg");





    $(document).ready(function () {


        $("#profileBTN1").click(function () {
            const div = document.createElement("div");
            const ul = document.createElement("ul");
            const li = document.createElement("li");
            const li1 = document.createElement("li");
            const li2 = document.createElement("li");
            const a = document.createElement("a");
            const a1 = document.createElement("a");
            const a2 = document.createElement("a");

            body.appendChild(div);
            div.appendChild(ul);
            ul.appendChild(a);
            ul.appendChild(a1);
            ul.appendChild(a2);
            a.appendChild(li);
            a1.appendChild(li1);
            a2.appendChild(li2);
            div.setAttribute("id", "dropDown1");
            li.innerHTML = "Edit profile";
            li1.innerHTML = "Delete Acount";
            li2.innerHTML = "Sign out";
            a.setAttribute("href","editprofile.php");
            a.setAttribute("style","text-decoration :none; color:#1B1B32");
            a1.setAttribute("href","DeleteAcount.php");
            a1.setAttribute("style","text-decoration :none; color:#1B1B32");
            a2.setAttribute("href","signout.php");
            a2.setAttribute("style","text-decoration :none; color:#1B1B32");
            document.getElementById("dropDown1").setAttribute("style","display:inline")
            profileBTN1.setAttribute("style","background-color:#D0D0D5; border: 2px solid #0A0A23; border-bottom: none;border-top: none;opacity:1,")
            document.getElementById("dropDown2").setAttribute("style","display:none")
            profileBTN2.removeAttribute("style","background-color:#D0D0D5;border: 2px solid #0A0A23;border-bottom: none;border-top: none");
        });
    });



    $(document).ready(function () {

        $("#profileBTN2").click(function () {
            const div = document.createElement("div");
            const ul = document.createElement("ul");
            const li = document.createElement("li");
            const li1 = document.createElement("li");
            const li2 = document.createElement("li");
            const a = document.createElement("a");
            const a1 = document.createElement("a");
            const a2 = document.createElement("a");

            body.appendChild(div);
            div.appendChild(ul);
            ul.appendChild(a);
            ul.appendChild(a1);
            ul.appendChild(a2);
            a.appendChild(li);
            a1.appendChild(li1);
            a2.appendChild(li2);
            div.setAttribute("id", "dropDown2");
            li.innerHTML = "Edit profile";
            li1.innerHTML = "Delete Acount";
            li2.innerHTML = "Sign out";
            a.setAttribute("href","editprofile.php");
            a.setAttribute("style","text-decoration :none; color:#1B1B32");
            a1.setAttribute("href","DeleteAcount.php");
            a1.setAttribute("style","text-decoration :none; color:#1B1B32");
            a2.setAttribute("href","signout.php");
            a2.setAttribute("style","text-decoration :none; color:#1B1B32");
            profileBTN2.setAttribute("style","background-color:#D0D0D5;border: 2px solid #0A0A23;border-bottom: none;border-top: none");
            document.getElementById("dropDown1").setAttribute("style","display:none")
            profileBTN1.removeAttribute("style","background-color:#D0D0D5;border: 2px solid #0A0A23;border-bottom: none;border-top: none");
        });
    });


    $(document).ready(function () {
    $(dark_btn).click(function () {
        
    

    body.classList.toggle("bodyToggle");
    header.classList.toggle("headerToggle");
    dark_btn.classList.toggle("buttonToggle");

})

    })

    dark_btn.addEventListener("click",function() {
        if( body.style.backgroundColor == "#ffffff") {
            headerImg.setAttribute("src","logoblue.png");
        } else if(body.style.backgroundColor == "#0A0A23") {
            headerImg.setAttribute("src","logo.png");
        }
    }) 



