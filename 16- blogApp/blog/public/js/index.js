$(window).on("load", function () {
    $(".lds-ellipsis").fadeOut("slow");
});

// slide start //
const individulTeamImg = document.getElementById("individulTeamImg")
const teamIndividuals = [
    {}
    ,
    {
        name: "Adil",
        lastname: "Ezerouki",
        profession: "Image Editor",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, iure maiores ducimus corrupt commodi fugit deleniti impedit error molestiae quidem perferendis deserunt, voluptate quaeiste eaque, ipsa amet Consequuntur, cupiditate.",
        img: "images/Adil.jpg"
    },
    {
        name: "AbdFettah",
        lastname: "Hechlafi",
        profession: "CEO & Founder",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, iure maiores ducimus corrupt commodi fugit deleniti impedit error molestiae quidem perferendis deserunt, voluptate quaeiste eaque, ipsa amet Consequuntur, cupiditate.",
        img: "images/AbdFettah.jpeg"
    },
    {
        name: "Peter",
        lastname: "Santos",
        profession: "Marketing Expert",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, iure maiores ducimus corrupt commodi fugit deleniti impedit error molestiae quidem perferendis deserunt, voluptate quaeiste eaque, ipsa amet Consequuntur, cupiditate.",
        img: "images/peter.jpg"
    }
    ,
    {
        name: "Kevin",
        lastname: "De bruyn",
        profession: "SEO Expert",
        description: "Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, iure maiores ducimus corrupt commodi fugit deleniti impedit error molestiae quidem perferendis deserunt, voluptate quaeiste eaque, ipsa amet Consequuntur, cupiditate.",
        img: "images/kevin.jpg"
    }
]


let slideIndex = 1;

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
  }


function showSlides(n) {

    let teamIndividualName = document.getElementById("teamIndividualName");
    let teamIndividualLastName = document.getElementById("teamIndividualLastName");
    let teamIndividualProfession = document.getElementById("teamIndividualProfession");
    let teamIndividualDescription = document.getElementById("teamIndividualDescription");
    let dots = document.getElementsByClassName("dot");
    let divBtnImg = document.getElementById("divBtnImg");
    let infoDiv = document.getElementById("infoDiv");

    if (n >= teamIndividuals.length) { slideIndex = 1 }
    if (n < 1) { slideIndex = teamIndividuals.length - 1 }

    teamIndividualName.innerHTML = teamIndividuals[slideIndex].name.toUpperCase();
    teamIndividualLastName.innerHTML = teamIndividuals[slideIndex].lastname.toUpperCase();
    teamIndividualProfession.innerHTML = teamIndividuals[slideIndex].profession;
    teamIndividualDescription.innerHTML = teamIndividuals[slideIndex].description;
    individulTeamImg.src = teamIndividuals[slideIndex].img;

    divBtnImg.className = "animate";
    infoDiv.className = "animate";

    const Timer = setTimeout(removeClass, 500)

    function removeClass() {
        divBtnImg.classList.remove("animate");
        infoDiv.classList.remove("animate");
    }

    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }

    dots[slideIndex-1].className += " active";

}

// slide  end //

const container = document.querySelector('.slideDivP')
let scrollLine = document.querySelector(".scroll")

    container.style.backgroudColor = "red";
container.addEventListener("wheel", (e)=> {
    e.preventDefault();
    container.scrollLeft += e.deltaY;
    scrollLine.style.width = container.scrollLeft / 2 + "px";
})


// const input = document.getElementById('NichesH1');

// input.style.color = "red";
