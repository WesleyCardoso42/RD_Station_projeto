const  nav = document.querySelector(".nav")
const  btnMenu = document.querySelector(".btn-menu")
const  menu = document.querySelector(".menu")
function handleButtonClick(event) {
    if(event.type === "touchstart") event.preventDefault();
    event.stopPropagation()
    nav.classList.toggle("active")
    handleClickOutside(menu, () => {
        nav.classList.remove("active")
        setAria()
    })
    setAria()
}
function handleClickOutside(targetElement, callback){
    const html = document.documentElement;
    function handleHTMLClick(event){
        if(!targetElement.contains(event.target)){
            targetElement.removeAttribute("data-target")
            html.removeEventListener("click", handleHTMLClick)
            html.removeEventListener("touchstart", handleHTMLClick)
        }
    }
    if(!targetElement.hasAttribute("data-target")){
        html.addEventListener("click", handleHTMLClick)
        html.addEventListener("touchstart", handleHTMLClick)
        targetElement.setAttribute("data-target", "")
        callback()
    }
}
function setAria(){
    const isActive = nav.classList.contains("active")
    btnMenu.setAttribute("aria-expanded", isActive)
    if(isActive){
        btnMenu.setAttribute("aria-label", "Fechar Menu")
    } else {
        btnMenu.setAttribute("aria-label", "Abrir Menu")
    }
}
btnMenu.addEventListener("click", handleButtonClick)
btnMenu.addEventListener("touchstart", handleButtonClick)

function newPopup(){
    varWindow = window.open ('/components/videopopup.php', 'popup')
}


//Modal --->

const openModalButton = document.querySelectorAll(".open-modal");
const closeModalButton = document.querySelector("#close-modal");
const modal = document.querySelector("#modal");
const fade = document.querySelector("#fade");

const toggleModal = () => {
  modal.classList.toggle("hide");
  fade.classList.toggle("hide");
};

[openModalButton[0], openModalButton[1], closeModalButton, fade].forEach((el) => {
  el.addEventListener("click", () => toggleModal());
});

function trocaCards() {
    const cardsEstaticos = document.getElementById('sld-desktop')
    const cardsSlider = document.getElementById('sld-mobile')
    if(window.innerWidth < 900){
        cardsEstaticos.classList.add("dp-none")
        cardsSlider.classList.remove("dp-none")
    }else{
        cardsEstaticos.classList.remove("dp-none")
        cardsSlider.classList.add("dp-none")
    }
}

window.addEventListener('resize', trocaCards)

let swiper = new Swiper(".slide-content", {
    slidesPerView: 1,
    spaceBetween: 25,
    loop: true,
    centerSlide: 'true',
    fade: 'true',
    grabCursor: 'true',
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
      dynamicBullets: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },

    breakpoints:{
        360: {
            slidesPerView: 1,
        },
        520: {
            slidesPerView: 1,
        },
        950: {
            slidesPerView: 1,
        },
    },
  });
  console.log(swiper);