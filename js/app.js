const nav = document.querySelector(".nav")
const btnMenu = document.querySelector(".btn-menu")
const menu = document.querySelector(".menu")
function handleButtonClick(event) {
  if (event.type === "touchstart") event.preventDefault()
  event.stopPropagation()
  nav.classList.toggle("active")
  handleClickOutside(menu, () => {
    nav.classList.remove("active")
    setAria()
  })
  setAria()
}
function handleClickOutside(targetElement, callback) {
  const html = document.documentElement
  function handleHTMLClick(event) {
    if (!targetElement.contains(event.target)) {
      targetElement.removeAttribute("data-target")
      html.removeEventListener("click", handleHTMLClick)
      html.removeEventListener("touchstart", handleHTMLClick)
    }
  }
  if (!targetElement.hasAttribute("data-target")) {
    html.addEventListener("click", handleHTMLClick)
    html.addEventListener("touchstart", handleHTMLClick)
    targetElement.setAttribute("data-target", "")
    callback()
  }
}
function setAria() {
  const isActive = nav.classList.contains("active")
  btnMenu.setAttribute("aria-expanded", isActive)
  if (isActive) {
    btnMenu.setAttribute("aria-label", "Fechar Menu")
  } else {
    btnMenu.setAttribute("aria-label", "Abrir Menu")
  }
}
btnMenu.addEventListener("click", handleButtonClick)
btnMenu.addEventListener("touchstart", handleButtonClick)

function newPopup() {
  varWindow = window.open("/components/videopopup.php", "popup")
}
//Modal --->
const openModalButton = document.querySelectorAll(".open-modal")
const closeModalButton = document.querySelector("#close-modal")
const modal = document.querySelector("#modal")
const fade = document.querySelector("#fade")
const toggleModal = () => {
  modal.classList.toggle("hide")
  fade.classList.toggle("hide")
}
[openModalButton[0], openModalButton[1], closeModalButton, fade].forEach(
  (el) => {
    el.addEventListener("click", () => toggleModal())
  }
)
function trocaCards() {
  const cardsEstaticos = document.getElementById("sld-desktop")
  const cardsSlider = document.getElementById("sld-mobile")
  if (window.innerWidth < 900) {
    cardsEstaticos.classList.add("dp-none")
    cardsSlider.classList.remove("dp-none")
  } else {
    cardsEstaticos.classList.remove("dp-none")
    cardsSlider.classList.add("dp-none")
  }
}
window.addEventListener("resize", trocaCards);
let swiper = new Swiper(".slide-content", {
  slidesPerView: 1,
  spaceBetween: 25,
  loop: true,
  centerSlide: "true",
  fade: "true",
  grabCursor: "true",
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
    dynamicBullets: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },

  breakpoints: {
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
})

const radioButtons = document.querySelectorAll('input[name="site"]')
const enderecoSite = document.querySelector(".endereco-site")
radioButtons.forEach((btn) => {
  btn.addEventListener("click", () => {
    if (btn.id === "checkbox-2" && btn.checked === true) {
      enderecoSite.removeAttribute("required")
    }
  });
});
function mascara(o, f) {
  v_obj = o
  v_fun = f
  setTimeout("execmascara()", 1)
}
function execmascara() {
  v_obj.value = v_fun(v_obj.value)
}
function mtel(v) {
  v = v.replace(/\D/g, ""); //Remove tudo o que não é dígito
  v = v.replace(/^(\d{2})(\d)/g, "($1) $2") //Coloca parênteses em volta dos dois primeiros dígitos
  v = v.replace(/(\d)(\d{4})$/, "$1-$2") //Coloca hífen entre o quarto e o quinto dígitos
  return v;
}
function id(el) {
  return document.getElementById(el)
}
window.onload = function () {
  id("telefone").onkeyup = function () {
    mascara(this, mtel);
  };
};

const icones = document.querySelectorAll(".password");
const inputsSenhas = document.querySelectorAll(".input-senha");
icones[0].addEventListener("click", () => {
  senha = inputsSenhas[0]
  if (senha.type === "password") {
    senha.type = "text"
  } else {
    senha.type = "password"
  }
});
icones[1].addEventListener("click", () => {
  senha = inputsSenhas[1]
  if (senha.type === "password") {
    senha.type = "text"
  } else {
    senha.type = "password"
  }
});

const email = document.querySelector("#email");
const spanEmail = document.querySelector(".span-email");

function validaEmail() {
  const regEmail = /\S+@\S+\.\S+/;
  if (regEmail.test(email.value) == false) {
    spanEmail.innerHTML = "..."
  } else {
    spanEmail.innerHTML = ""
  }
}

email.addEventListener("keydown", validaEmail);

function verificaForcaDaSenha() {
  let letrasMaiusculas = /[A-Z]/
  let letrasMinusculas = /[a-z]/
  let numeros = /[0-9]/
  let caracteresEspeciais = /[!|@|#|$|%|^|&|*|(|)|-|_]/
  if (
    inputsSenhas[0].value.match(/.{7,}/) &&
    letrasMaiusculas.test(inputsSenhas[0].value) === true &&
    letrasMinusculas.test(inputsSenhas[0].value) === true &&
    numeros.test(inputsSenhas[0].value) === true &&
    caracteresEspeciais.test(inputsSenhas[0].value) === true
  ) {
        return true
  } else {
        return false
  }
}

inputsSenhas[0].addEventListener("keydown", verificaForcaDaSenha)

const spanSenhas = document.querySelector("#valida-senhas")
function verificaIgualdade() {
  if (inputsSenhas[0].value !== inputsSenhas[1].value) {
    spanSenhas.innerHTML = "As senhas não coincidem"
    return false
  } else if (inputsSenhas[0].value === inputsSenhas[1].value) {
    spanSenhas.innerHTML = ""
    return true
  }
}

inputsSenhas[1].addEventListener("keydown", verificaIgualdade)


let urlString = document.querySelector('.endereco-site')

function testaUrl() {
    try { 
        let url = new URL(urlString.value)
        return true
    } catch (err) {
        return false
    }
}

urlString.addEventListener('keydown', testaUrl)


const btnSubmit = document.querySelector('#enviar-form')
const spanUrl = document.querySelector("#valida-url");
btnSubmit.addEventListener('click', (e) =>{
    if(verificaIgualdade() === false){
        spanSenhas.innerHTML = 'Insira senhas iguais'
        e.preventDefault()
    }
    if(verificaForcaDaSenha() === false){
        spanSenhas.innerHTML = "A senha deve ter no mínimo: <br>8 dígitos <br>uma letra maiúscula <br>uma letra minúscula <br>um número <br>um caractere especial";
        e.preventDefault()
    }
    if(testaUrl() === false){
        spanUrl.innerHTML = "Url invalida"
        e.preventDefault()
    }

})