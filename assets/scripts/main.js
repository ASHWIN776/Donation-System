const burger = document.querySelector(".burger");
const line1 = document.querySelector(".line1")
const line2 = document.querySelector(".line2")
const line3 = document.querySelector(".line3")
const nav = document.querySelector("nav");
const main = document.querySelector("main");
const header = document.querySelector("header");

burger.addEventListener("click", showNav);

function showNav(evt)
{   
    burger.classList.toggle("rotate");
    nav.classList.toggle("nav-active");
    main.classList.toggle("shift-main");

    // Z-index problems mitigated here
    if(nav.className.includes("nav-active"))
    {
        nav.classList.add("nav-top");
    }

    else{
        nav.classList.remove("nav-top");

    }
}


window.addEventListener("scroll", styleNav);

function styleNav()
{
    header.classList.toggle("nav-scroll", this.scrollY > 0);
}