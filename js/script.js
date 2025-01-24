// var typed = new Typed(".typing",{
//     strings: ["Web Designer","Developper HTML/CSS","Developper PHP","Developper JAVASCRIPT"," Developper PYTHON" ,"Graphic Designer"],
//     typeSpeed:100,
//     BackSpeed:60,
//     loop :true


// })
document.addEventlistener('DomContentLoaded',
    new Typed(".typing",{
            strings: ["Developper HTML/CSS","Developper PHP","Developper JAVASCRIPT"," Developper PYTHON" ,"Web Designer", "UI/UX Design","Logo Design"],
            typeSpeed:100,
            BackSpeed:60,
            loop :false,
            ShowCursor:'*'
    })

)