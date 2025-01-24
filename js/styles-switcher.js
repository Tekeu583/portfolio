// =========== toggler style switcher ============
const stylesWitcherToggler= document.querySelector(".styles-switcher-toggler");
stylesWitcherToggler.addEventListener("click", ()=>{
    document.querySelector(".styles-switcher").classList.toggle("open");
})
// hide style switcher on scroll
window.addEventListener("scroll", ()=>{
    if(document.querySelector(".styles-switcher").classList.contains("open")){
        document.querySelector(".styles-switcher").classList.remove("open");
    }
})

// =========== themes colors ============
const alternativestyles= document.querySelectorAll(".alternative-style");

function setActiveStyle(color){
    alternativestyles.forEach((style) =>{
        if(color === style.getAttribute("title")){
            style.removeAttribute("disabled");
        }
        else{
            style.setAttribute("disabled","true");
        }
    })
}
 // =========== themes light and dark mode ============
const daynight=document.querySelector(".day-night");
daynight.addEventListener("click", ()=>{
    daynight.querySelector("i").classList.toggle("fa-sun");
    daynight.querySelector("i").classList.toggle("fa-moon");
    document.body.classList.toggle("dark");
})
window.addEventListener("load" ,()=>{
    if(document.body.classList.contains("dark")){
        daynight.querySelector("i").classList.add("fa-sun");
    }
    else{
        daynight.querySelector("i").classList.add("fa-moon");
    }
})

// =========== nav toggler ============
const navToggler= document.querySelector(".nav-toggle");
navToggler.addEventListener("click", ()=>{
    document.querySelector(".aside").classList.toggle("open");
})
// hide nav toggler on scroll
window.addEventListener("scroll", ()=>{
    if(document.querySelector(".aside").classList.contains("open")){
        document.querySelector(".aside").classList.remove("open");
    }
})